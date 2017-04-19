<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

require('../../config.php');
require_once($CFG->dirroot.'/lib/resourcelib.php');
require_once($CFG->dirroot.'/lib/tablelib.php');
require_once($CFG->dirroot.'/blocks/courses_vicensvives/locallib.php');

function str_contains($haystack, $needle) {
    // Normaliza el texto a carñacteres ASCII en mínuscula y sin espacios duplicados
    $normalize = function($text) {
        $text = core_text::specialtoascii($text);
        $text = core_text::strtolower($text);
        $text = preg_replace('/\s+/', ' ', trim($text));
        return $text;
    };
    $haystack = $normalize($haystack);
    $needle = $normalize($needle);
    return core_text::strpos($haystack, $needle) !== false;
}

require_login(null, false);

$context = context_coursecat::instance($CFG->block_courses_vicensvives_defaultcategory);
require_capability('moodle/course:create', $context);

$baseurl = new moodle_url('/blocks/courses_vicensvives/books.php');

$PAGE->set_context($context);
$PAGE->set_url($baseurl);
$PAGE->set_pagelayout('standard');
$PAGE->set_title(get_string('books', 'block_courses_vicensvives'));
$PAGE->set_heading(get_string('books', 'block_courses_vicensvives'));

$viewbooks = new moodle_url('/blocks/courses_vicensvives/books.php');
$PAGE->navbar->add(get_string('blocks'));
$PAGE->navbar->add(get_string('pluginname', 'block_courses_vicensvives'));
$PAGE->navbar->add(get_string('books', 'block_courses_vicensvives'), $viewbooks);

$ws = new vicensvives_ws();

$lang = $CFG->lang == 'ca' ? 'ca' : 'es';

try {
    $levels = array(0 => '');
    foreach ($ws->levels($lang) as $level) {
        $levels[$level->idLevel] = $level->shortname;
    }

    $subjects = array(0 => '');
    foreach ($ws->subjects($lang) as $subject) {
        $subjects[$subject->idSubject] = $subject->name;
    }

    $allbooks = array();
    foreach ($ws->books() as $book) {
        $allbooks[$book->idBook] = $book;
    }

} catch (vicensvives_ws_error $e) {
    echo $OUTPUT->header();
    echo html_writer::tag('p', $e->getMessage(), array('class' => 'alert alert-error'));
    echo $OUTPUT->footer();
    exit;
}

if ($bookid = optional_param('create', false, PARAM_INT)) {
    if (!isset($allbooks[$bookid])) {
        redirect($baseurl);
    }

    $book = $allbooks[$bookid];
    $customdata = array(
        'fullname' => $book->fullname,
        'subject' => isset($subjects[$book->idSubject]) ? $subjects[$book->idSubject] : '',
        'level' => isset($levels[$book->idLevel]) ? $levels[$book->idLevel] : '',
        'isbn' => $book->isbn,
    );
    $formurl = new moodle_url($baseurl, array('create' => $bookid));
    $form = new \block_courses_vicensvives\create_form($formurl, $customdata, 'post');

    if ($form->is_cancelled()) {
        redirect($baseurl);
    } else if ($data = $form->get_data()) {
        $PAGE->set_pagelayout('base');
        echo $OUTPUT->header();
        echo $OUTPUT->heading(get_string('creatingcourse', 'block_courses_vicensvives') . ': ' . $book->fullname);

        @set_time_limit(0);
        raise_memory_limit(MEMORY_HUGE);

        $progress = new progress_bar();
        $courseid = courses_vicensvives_add_book::create($bookid, $data->format, $progress);

        $errormsg = courses_vicensvives_add_book::enrol_user($courseid, $USER->id);
        if ($errormsg) {
            echo $OUTPUT->notification($errormsg, 'warning');
        }

        $urlcourse = new moodle_url('/course/view.php', array('id' => $courseid));
        $link = html_writer::link($urlcourse, get_string('gotocourse', 'block_courses_vicensvives'));
        echo html_writer::div("($link)", 'continuebutton');

        echo $OUTPUT->footer();
    } else {
        echo $OUTPUT->header();
        $form->display();
        echo $OUTPUT->footer();
    }

    exit;
}

$search = array(
    'fullname' => optional_param('fullname', '', PARAM_TEXT),
    'idsubject' => optional_param('idsubject', '', PARAM_INT),
    'idlevel' => optional_param('idlevel', '', PARAM_INT),
    'isbn' => optional_param('isbn', '', PARAM_TEXT),
);

$customdata = array('levels' => $levels, 'subjects' => $subjects, 'search' => $search);
$form = new \block_courses_vicensvives\filter_form(null, $customdata, 'get');

if ($form->is_cancelled()) {
    redirect($baseurl);
}

$filteredbooks = array();

foreach ($allbooks as $book) {
    if ($search['fullname'] and !str_contains($book->fullname, $search['fullname'])) {
        continue;
    }
    if ($search['idsubject'] and $book->idSubject != $search['idsubject']) {
        continue;
    }
    if ($search['idlevel'] and $book->idLevel != $search['idlevel']) {
        continue;
    }
    if ($search['isbn'] and !str_contains($book->isbn, $search['isbn'])) {
        continue;
    }
    $filteredbooks[$book->idBook] = $book;
}


echo $OUTPUT->header();
echo $OUTPUT->heading('');

$form->display();

if ($filteredbooks) {
    $a = array('total' => count($allbooks), 'found' => count($filteredbooks));
    $string = get_string('searchresult', 'block_courses_vicensvives', $a);
} else {
    $string = get_string('searchempty', 'block_courses_vicensvives', count($allbooks));
}
echo $OUTPUT->heading($string);

$table = new flexible_table('vicensvives_books');
$url = new moodle_url($baseurl, $search);
$table->define_baseurl($url);
$table->define_columns(array('name', 'subject', 'level', 'isbn', 'actions'));
$table->set_attribute('class', 'vicensvives_books');
$table->column_class('actions', 'vicensvives_actions');
$table->define_headers(array(
    get_string('fullname', 'block_courses_vicensvives'),
    get_string('subject', 'block_courses_vicensvives'),
    get_string('level', 'block_courses_vicensvives'),
    get_string('isbn', 'block_courses_vicensvives'),
    get_string('actions', 'block_courses_vicensvives'),
));
$table->sortable(true, 'name');
$table->no_sorting('actions');
$table->pagesize(50, count($filteredbooks));
$table->setup();

$rows = array();
foreach ($filteredbooks as $book) {
    $row = new stdClass;
    $row->name = $book->fullname;
    $row->subject = isset($subjects[$book->idSubject]) ? $subjects[$book->idSubject] : '';
    $row->level = isset($levels[$book->idLevel]) ? $levels[$book->idLevel] : '';
    $row->isbn = $book->isbn;
    $addurl = new moodle_url('/blocks/courses_vicensvives/books.php', array('create' => $book->idBook));
    $title = get_string('addcourse', 'block_courses_vicensvives');
    $icon = html_writer::empty_tag('img', array('src' => $OUTPUT->pix_url('t/addfile'), 'alt' => $title));
    $row->actions = html_writer::link($addurl, $icon, array('title' => $title));
    $rows[] = $row;
}

// Ordenación
foreach ($table->get_sort_columns() as $column => $order) {
    core_collator::asort_objects_by_property($rows, $column);
    if ($order == SORT_DESC) {
        $rows = array_reverse($rows);
    }
    break; // Ordenación sólo por el primer criterio
}

// Paginación
$rows = array_slice($rows, $table->get_page_start(), $table->get_page_size());

foreach ($rows as $row) {
    $table->add_data(array($row->name, $row->subject, $row->level, $row->isbn, $row->actions));
}

$table->finish_output();

echo $OUTPUT->footer();
