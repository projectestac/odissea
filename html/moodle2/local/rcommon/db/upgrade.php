<?php

// This file keeps track of upgrades to
// the choice module
//
// Sometimes, changes between versions involve
// alterations to database structures and other
// major things that may break installations.
//
// The upgrade function in this file will attempt
// to perform all the necessary actions to upgrade
// your older installation to the current version.
//
// If there's something it cannot do itself, it
// will tell you what you need to do.
//
// The commands in here will all be database-neutral,
// using the methods of database_manager class
//
// Please do not forget to use upgrade_set_timeout()
// before any action that may take longer time to finish.

function xmldb_local_rcommon_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < 2015051300) {
        require_once($CFG->dirroot.'/local/rcommon/locallib.php');
        if (isset($CFG->isagora) && $CFG->isagora) {
            if (isset($CFG->ismarsupial) && $CFG->ismarsupial) {
                $enable = 1;
            } else {
                $enable = 0;
            }
            set_marsupial_state($enable);
        } else {
            set_marsupial_state(1);
        }

        upgrade_plugin_savepoint(true, 2015051300, 'local', 'rcommon');
    }

    if ($oldversion < 2015051901) {
        // Delete duplicated credentials
        $creds = $DB->get_records_sql('SELECT id, isbn, euserid, credentials FROM {rcommon_user_credentials} ORDER BY isbn, euserid');
        $lastcred = false;
        foreach ($creds as $cred) {
            if (!empty($cred->credentials)) {
                if ($lastcred && $cred->isbn == $lastcred->isbn && $cred->euserid == $lastcred->euserid && $cred->credentials == $lastcred->credentials) {
                    $DB->delete_records('rcommon_user_credentials', array('id' => $cred->id));
                }
                $lastcred = $cred;
            }
        }

        upgrade_plugin_savepoint(true, 2015051901, 'local', 'rcommon');
    }

    return true;
}


