<?php
require_once('../../config.php');
require_once($CFG->dirroot.'/course/lib.php');
require_once($CFG->libdir.'/formslib.php');
require_once($CFG->libdir.'/csvlib.class.php');
require_once($CFG->libdir.'/adminlib.php');
require_once('forms.php');
require_once('locallib.php');

require_login();
admin_externalpage_setup('keymanager_import');
require_capability('local/rcommon:importcredentials', context_system::instance());
@set_time_limit(3600); // 1 hour should be enough
@raise_memory_limit('256M');

$iid         = optional_param('iid', '', PARAM_INT);
$continue         = optional_param('continue', false, PARAM_BOOL);

$fields = array('required' => array('isbn', 'credential'), 'optional' => array('username', 'userid'), 'ignored' => array('pack', 'packid'));

$errorstr                   = get_string('error');

$returnurl = new moodle_url('/local/rcommon/import.php');
if (empty($iid)) {
    $mform = new local_rcommon_import_credentials_form();
    if ($formdata = $mform->get_data()) {
        $iid = csv_import_reader::get_new_iid('import_marsupial');
        $cir = new csv_import_reader($iid, 'import_marsupial');

        $content = $mform->get_file_content('import_marsupial');

        $readcount = $cir->load_csv_content($content, $formdata->encoding, $formdata->delimiter_name);
        $csvloaderror = $cir->get_error();
        unset($content);

        if (!is_null($csvloaderror)) {
            print_error('csvloaderror', '', $returnurl, $csvloaderror);
        }
        $filecolumns = credentials::validate_columns($cir, $fields, $returnurl);
    } else {
        echo $OUTPUT->header();

        echo $OUTPUT->heading_with_help(get_string('keymanager_import_title', 'local_rcommon'), 'importcsv', 'local_rcommon');

        $mform->display();
        echo $OUTPUT->footer();
        die;
    }
} else {
    $cir = new csv_import_reader($iid, 'import_marsupial');
    $filecolumns = credentials::validate_columns($cir, $fields, $returnurl);
}


echo $OUTPUT->header();

echo $OUTPUT->heading(get_string('keymanager_import_title', 'local_rcommon'));

// init csv import helper
$cir->init();
$linenum = 1; // Column header is first line

// verification moved to two places: after upload and into form2
$errors        = 0;
$warnings      = 0;
$do_errors = 0;
$do_ok = 0;
$processed_user = array();
$processed_credential = array();

// init upload progress tracker
$upt = new credentials_progress_tracker();
$upt->start(); // start table
while ($line = $cir->next()) {
    $upt->flush();
    $linenum++;

    $upt->track('line', $linenum);

    // add fields to user object
    $credential = new StdClass();
    foreach ($line as $keynum => $value) {
        if (!isset($filecolumns[$keynum])) {
            // this should not happen
            continue;
        }
        $key = $filecolumns[$keynum];
        $credential->$key = trim($value);

        if (in_array($key, $upt->columns)) {
            // default value in progress tracking table, can be changed later
            $upt->track($key, s($value), 'normal');
        }
    }

    $error = false;
    $duplicated = false;
    $warning = false;
    if (!isset($credential->isbn) or empty($credential->isbn)) {
        $upt->track('status', get_string('missingfield', 'error', 'isbn'), 'error');
        $upt->track('isbn', $errorstr, 'error');
        $error = true;
    }
    if (!$DB->record_exists('rcommon_books', array('isbn' => $credential->isbn))) {
        // Unknown book
        $upt->track('status', get_string('keymanager_import_error_11', 'local_rcommon'), 'error');
        $upt->track('isbn', $errorstr, 'error');
        $error = true;
    }

    if (!isset($credential->credential) or empty($credential->credential)) {
        $upt->track('status', get_string('missingfield', 'error', 'credential'), 'error');
        $upt->track('credential', $errorstr, 'error');
        $error = true;
    }

    // Check assigned user
    if (isset($credential->username) && !empty($credential->username)) {
        $credential->euserid = $DB->get_field('user', 'id', array('username' => $credential->username));
        if (!$credential->euserid) {
            // Unknown user
            $upt->track('status', get_string('keymanager_import_error_13', 'local_rcommon', $credential->username), 'error');
            $upt->track('username', $errorstr, 'error');
            $error = true;
        }
        $upt->track('userid', $credential->euserid, 'normal');
    } else if (isset($credential->userid) && !empty($credential->userid)) {
        $credential->username = $DB->get_field('user', 'username', array('id' => $credential->userid));
        $upt->track('username', $credential->username, 'normal');
        if (!is_numeric($credential->userid) || !$credential->username) {
            $upt->track('status', get_string('keymanager_import_error_13', 'local_rcommon', $credential->userid), 'error');
            $upt->track('userid', $errorstr, 'error');
            $error = true;
        } else {
            $upt->track('userid', $credential->userid, 'normal', false);
        }
        $credential->euserid = $credential->userid;

    } else {
        $credential->euserid = false;
        $upt->track('userid', $credential->euserid, 'normal', false);
    }

    // Check if isset any credential for that book and user
    $duplicated = false;
    if ($credential->euserid) {
        $cred = $DB->record_exists('rcommon_user_credentials', array('isbn' => $credential->isbn, 'euserid' => $credential->euserid));
        if ($cred) {
            // User has the credential of this book
            $upt->track('status', get_string('keymanager_import_error_19', 'local_rcommon'), 'error');
            $error = true;
            $duplicated = true;
            $processed_user[$credential->isbn][$credential->euserid] = true;
        } else if (isset($processed_user[$credential->isbn][$credential->euserid])) {
            // A credential for this user is already being imported
            $upt->track('status', get_string('keymanager_import_error_20', 'local_rcommon'), 'error');
            $error = true;
            $duplicated = true;
        } else {
            $processed_user[$credential->isbn][$credential->euserid] = true;
        }
    }

    if (!$duplicated) {
        if ($credential->euserid) {
            $cred = $DB->record_exists('rcommon_user_credentials', array('isbn' => $credential->isbn, 'credentials' => $credential->credential, 'euserid' => $credential->euserid));
            if ($cred) {
                // The user is already assigned to this credential for this book
                $warning = true;
                $upt->track('status', get_string('keymanager_import_error_15', 'local_rcommon'), 'warning');
            }
        }

        $numcreds = $DB->count_records('rcommon_user_credentials', array('isbn' => $credential->isbn, 'credentials' => $credential->credential));
        if ($numcreds > 0) {
            // Credential duplicated in database. It may be a group credential.
            $warning = true;
            $upt->track('status', get_string('keymanager_import_error_16', 'local_rcommon', $numcreds) , 'warning');
        }
    }

    if (isset($processed_credential[$credential->isbn][$credential->credential])) {
        // Credential duplicated in file. It may be a group credential.
        $upt->track('status', get_string('keymanager_import_error_21', 'local_rcommon'), 'warning');
        $warning = true;
    } else {
        $processed_credential[$credential->isbn][$credential->credential] = true;
    }

    if ($error) {
        $errors++;
        continue;
    } else if ($warning) {
        $warnings++;
    }

    // Ok Do it
    if ($continue) {
        if (credentials::add($credential->isbn, $credential->credential, $credential->euserid)) {
            $upt->track('status', get_string('success') , 'info');
            $do_ok++;
        } else {
            $upt->track('status', get_string('error') , 'error');
            $do_errors++;
        }
    }
}
$upt->close(); // close table
$cir->close();


// Show the summary
if ($linenum <= 1) {
    // Empty file
    echo $OUTPUT->notification(get_string('keymanager_import_error_17', 'local_rcommon'));
    echo $OUTPUT->continue_button($returnurl);
} else if (!$continue) {
    if ($errors > 0) {
        // Errors found in the preview and cannot continue
        echo $OUTPUT->notification(get_string('keymanager_import_resum_error', 'local_rcommon', $errors));
        echo $OUTPUT->continue_button($returnurl);
    } else {
        if ($warnings > 0) {
            // Warnings found, warn user
            echo $OUTPUT->notification(get_string('keymanager_import_resum_alert', 'local_rcommon', $warnings));
        }
        // Confirmation
        $continueurl = new moodle_url('/local/rcommon/import.php', array('continue' => true, 'iid' => $iid));
        echo $OUTPUT->confirm(get_string('keymanager_import_resum_msg', 'local_rcommon', $linenum - 1), $continueurl, $returnurl);
    }
} else {
    // Summary of actions taken, erase temp files
    $cir->cleanup(true);
    if ($do_errors > 0) {
        $a = new StdClass();
        $a->errors = $do_errors;
        $a->ok = $do_ok;
        echo $OUTPUT->notification(get_string('keymanager_import_message_error', 'local_rcommon', $a));
        echo $OUTPUT->continue_button($returnurl);
    } else {
        $a = new StdClass();
        $a->ok = $do_ok;
        echo redirect($CFG->wwwroot.'/local/rcommon/users.php', get_string('keymanager_import_message', 'local_rcommon', $a), 10);
    }
}
echo $OUTPUT->footer();
