<?php
require_once('../../config.php');
require_once("{$CFG->libdir}/formslib.php");
require_once('forms.php');
require_once($CFG->libdir.'/adminlib.php');
require_once("locallib.php");

require_login();

$context = context_system::instance();
if (!has_capability('local/rcommon:managecredentials', $context)) {
    require_capability('local/rcommon:editowncredentials', $context);
    $userid = $USER->id;
} else {
    $userid = false;
}

$params = array();

$id = optional_param('id', false, PARAM_INT);
$backto = optional_param('backto', 'users', PARAM_TEXT);
if ($id) {
    $params['id'] = $id;
    $credential = credentials::get($id);
    $isbn = $credential->isbn;
    $euserid = $credential->euserid;
} else {
    $isbn = required_param('isbn', PARAM_TEXT);
    $euserid = optional_param('euserid', 0, PARAM_INT);
    $params['isbn'] = $isbn;
    $params['euserid'] = $euserid;

    $credential = new StdClass();
    $credential->isbn = $isbn;
    $credential->euserid = $euserid;
}

if ($userid && $userid != $euserid) {
    require_capability('local/rcommon:managecredentials', $context);
}

$book = $DB->get_record('rcommon_books', array('isbn' => $isbn));

if (!has_capability('local/rcommon:managecredentials', $context)) {
    $PAGE->set_url(new moodle_url('/local/local_rcommon/edit_book_credential.php'));
    $PAGE->set_context($context);
    $pagetitle = $book->name . ' (' . $book->isbn . ')';
    $PAGE->set_title($pagetitle);
    $PAGE->set_heading($pagetitle);
    $PAGE->navbar->add(get_string('keymanager', 'local_rcommon'), '/local/rcommon/users.php?action=manage', null, navigation_node::TYPE_CUSTOM, null);
    $PAGE->navbar->add($pagetitle, null, null, navigation_node::TYPE_CUSTOM, null);
    $PAGE->set_pagelayout('incourse');
} else {
    admin_externalpage_setup('marsupialcontent'.$book->publisherid);
}

echo $OUTPUT->header();
echo $OUTPUT->heading($book->name . ' (' . $book->isbn . ')');

if ($euserid) {
    $username = $DB->get_field('user', 'username', array('id' => $euserid));
    $referer = $CFG->wwwroot.'/local/rcommon/users.php?action=manage&username='.$username;
    echo '<p>'.get_string('keyeditingforuser', 'local_rcommon', $username).'</p>';
}

if ($backto == 'users') {
    if ($euserid) {
        $referer = $CFG->wwwroot.'/local/rcommon/users.php?action=manage&username='.$username;
    } else {
        $referer = $CFG->wwwroot.'/local/rcommon/users.php';
    }
} else {
    $referer = $CFG->wwwroot.'/local/rcommon/books.php?id='.$book->id;
}



$form = new local_rcommon_edit_credentials_form();
if ($form->is_cancelled()) {
    redirect($referer);
} else if ($fromform = $form->get_data() and confirm_sesskey()) {
    if (empty($fromform->id)) {
        $userid = $fromform->euserid ? $fromform->euserid : 0;
        $id = credentials::add($fromform->isbn, $fromform->credentials, $userid);
        if (!$id) {
            redirect($referer, get_string('saveko', 'local_rcommon'), 5);
        }
    } else {
        $success = credentials::update($fromform->id, $fromform->isbn, $fromform->credentials);
        if (!$success) {
            redirect($referer, get_string('saveko', 'local_rcommon'), 5);
        }
    }
    redirect($referer, get_string('saveok', 'local_rcommon'), 2);
} else {
    $credential->backto = $backto;
    $form->set_data($credential);
    $form->display();
}

echo $OUTPUT->footer();
