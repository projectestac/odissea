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

require_once($CFG->dirroot.'/blocks/licenses_vicensvives/locallib.php');
require_once($CFG->dirroot.'/lib/formslib.php');
require_once($CFG->dirroot.'/lib/tablelib.php');

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

$courseid = optional_param('course', SITEID, PARAM_INT);

require_login($courseid, false);

require_capability('moodle/course:update', context_system::instance());

$baseurl = new moodle_url('/blocks/licenses_vicensvives/licenses.php', array('course' => $courseid));

$PAGE->set_url($baseurl);

$PAGE->set_pagelayout('standard');

$PAGE->set_title(get_string('licenses', 'block_licenses_vicensvives'));
$PAGE->set_heading(get_string('licenses', 'block_licenses_vicensvives'));

$PAGE->navbar->add(get_string('blocks'));
$PAGE->navbar->add(get_string('pluginname', 'block_licenses_vicensvives'));
$PAGE->navbar->add(get_string('licenses', 'block_licenses_vicensvives'));

$ws = new vicensvives_ws();

$lang = $CFG->lang == 'ca' ? 'ca' : 'es';

$levels = array(0 => '');
foreach ($ws->levels($lang) as $level) {
    $levels[$level->idLevel] = $level->shortname;
}

$subjects = array(0 => '');
foreach ($ws->subjects($lang) as $subject) {
    $subjects[$subject->idSubject] = $subject->name;
}

// Obtener únicamente las licencias del libro del curso
$course = $DB->get_record('course', array('id' => $courseid));
$idbook = null;
if (preg_match('/^vv-([0-9]+)-/', $course->idnumber, $match)) {
    $idbook = (int) $match[1];
}

$licenses = vicensvives_count_licenses($idbook);

$allbooks = array();

foreach ($ws->books() as $book) {
    if (isset($licenses[$book->idBook])) {
        $allbooks[] = $book;
    }
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
$table->define_columns(array('name', 'subject', 'level', 'isbn', 'student', 'teacher'));
$table->set_attribute('class', 'vicensvives_books');
$table->column_class('actions', 'vicensvives_actions');
$table->define_headers(array(
    get_string('fullname', 'block_courses_vicensvives'),
    get_string('subject', 'block_courses_vicensvives'),
    get_string('level', 'block_courses_vicensvives'),
    get_string('isbn', 'block_courses_vicensvives'),
    get_string('studentlicenses', 'block_licenses_vicensvives')
    . '<br/> (' . get_string('activated', 'block_licenses_vicensvives')
    . ' / ' .  get_string('total', 'block_licenses_vicensvives') . ')',
    get_string('teacherlicenses', 'block_licenses_vicensvives')
    . '<br/> (' . get_string('activated', 'block_licenses_vicensvives')
    . ' / ' . get_string('total', 'block_licenses_vicensvives') . ')',
));
$table->pagesize(50, count($filteredbooks));
$table->setup();

// Ordenación
core_collator::asort_objects_by_property($filteredbooks, 'fullname');

// Paginación
$books = array_slice($filteredbooks, $table->get_page_start(), $table->get_page_size());

foreach ($books as $book) {
    $table->add_data(array(
        $book->fullname,
        isset($subjects[$book->idSubject]) ? $subjects[$book->idSubject] : '',
        isset($levels[$book->idLevel]) ? $levels[$book->idLevel] : '',
        $book->isbn,
        $licenses[$book->idBook]->studentactivated . ' / ' . $licenses[$book->idBook]->studenttotal,
        $licenses[$book->idBook]->teacheractivated . ' / ' . $licenses[$book->idBook]->teachertotal,
    ));
}

$table->finish_output();

echo $OUTPUT->footer();
