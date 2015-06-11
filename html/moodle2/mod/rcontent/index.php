<?php

require_once('../../config.php');
require_once('locallib.php');

$id = required_param('id', PARAM_INT);        // course

// Filter by status, get parameter with the filterby
$filterby = optional_param('filterby', '', PARAM_RAW);

if (($course = $DB->get_record('course', array('id' => $id))) === false) {
    print_error('Course ID is incorrect');
}

require_course_login($course);
$context = context_course::instance($course->id);

$PAGE->set_url(new moodle_url('/mod/rcontent/index.php', array('id' => $id)));
// Report index make text translatable
$strrcontent = get_string('modulename', 'rcontent');

\mod_rcontent\event\course_module_instance_list_viewed::create_from_course($course)->trigger();

/// Print the header
echo $PAGE->set_heading($course->fullname);
echo $OUTPUT->header($course);

//  Filter by status, add select field
$filteroptionsurl         = 'index.php?id='.$id;
$filteroptionsparam       = '&amp;filterby=';
$filteroptionsurlandparam = $filterselected = $filteroptionsurl.$filteroptionsparam;
$filterselected          .= $filterby;
$filteroptionsparam       = ($filterby != '')? $filteroptionsparam.$filterby : '';
// ********** FI

/// Get all the appropriate data

if (($rcontents = get_all_instances_in_course('rcontent', $course)) === false) {
    notice('There are no rcontents', '../../course/view.php?id=' . $course->id);
    die;
}

/// Print the list of instances (your module will probably extend this)

$strname = get_string('name');
$strsummary = get_string('summary');
$strreport = get_string('report','rcontent');

$table = new html_table();
$table->class = 'generaltable';
$table->id = 'report_rcontent';
$table->data = array();
$table->rowclasses = array();

if ($course->format == 'weeks') {
    $table->head = array(get_string('week'), $strname, $strsummary,$strreport);
    $table->align = array('center', 'left');
} else {
    $table->head = array(get_string('topic'), $strname, $strsummary, $strreport);
    $table->align = array('left', 'left', 'left');
}


$page       = optional_param("page",0,PARAM_INT);
$limit      = get_config('rcontent', 'registersperreportpage');
$count      = count($rcontents);
$startindex = ($limit*$page);

//MARSUPIAL ********** MODIFICAT -> Just show the registers of one page
//2011.05.18 @mmatinez
for($i=$startindex;$i<($startindex+$limit);$i++) {
	if ($i > count($rcontents)-1){
		break;
	}
	$rcontent = $rcontents[$i];
//********* ORIGINAL
//foreach ($rcontents as $rcontent) {
//********* FI
	$context = context_module::instance($rcontent->coursemodule);
    $report = '&nbsp;';
    $reportshow = '&nbsp;';

    if (has_capability('mod/rcontent:viewreport', $context)) {
// MARSUPIAL ********** MODIFIED -> Filter by status
// 2011.08.31 @mmartinez
        $trackedusers = rcontent_get_count_users($rcontent->id, $rcontent->groupingid, $context, $filterby);
// ********* ORIGINAL
        //$trackedusers = rcontent_get_count_users($rcontent->id, $rcontent->groupingid, $context);
// ********* FI
        if ($trackedusers > 0) {
            $reportshow = '<a href="report.php?id='.$rcontent->coursemodule.$filteroptionsparam.'">'.get_string('viewalluserreports','rcontent',$trackedusers).'</a></div>';
        } else {
            $reportshow = get_string('noreports','rcontent');
        }
    } else if (has_capability('mod/rcontent:viewscores', $context)) {
    	require_once('locallib.php');
        $report = rcontent_grade_user($rcontent, $USER->id);
        $reportshow = get_string('score','rcontent').": ".$report;
    }

    if (!$rcontent->visible) {
        //Show dimmed if the mod is hidden
        $link = '<a class="dimmed" href="' . $CFG->wwwroot . '/mod/rcontent/view.php?id=' . $rcontent->coursemodule . '">' . $rcontent->name . '</a>';
    }
    else {
        //Show normal if the mod is visible
        $link = '<a href="view.php?id=' . $rcontent->coursemodule . '">' . $rcontent->name . '</a>';
    }

    $table->data[] = array($rcontent->section, $link, $rcontent->intro, $reportshow);
}

if (!isset($context)) {
	$context = context_course::instance($id);
}

if (has_capability('mod/rcontent:viewreport', $context)) {
	$menu = array();
	$menu[]                        = get_string('all');
	$menu['NO_INICIADO']  = get_string('NO_INICIADO', 'rcontent');
	$menu['INCOMPLETO']   = get_string('INCOMPLETO', 'rcontent');
	$menu['FINALIZADO']   = get_string('FINALIZADO', 'rcontent');
	$menu['POR_CORREGIR'] = get_string('POR_CORREGIR', 'rcontent');
	$menu['CORREGIDO']    = get_string('CORREGIDO', 'rcontent');

	echo $OUTPUT->single_select(new moodle_url('/mod/rcontent/index.php?id='.$id), 'filterby', $menu, $filterby);
}

echo $OUTPUT->heading($strrcontent);

if ($count > $limit) {
	echo $OUTPUT->paging_bar($count, $page, $limit,
	new moodle_url('/mod/rcontent/index.php?id='.$id.$filteroptionsparam)
	);
}
// (other table properties here)
echo html_writer::table($table);

if ($count > $limit) {
	echo $OUTPUT->paging_bar($count, $page, $limit,
	new moodle_url('/mod/rcontent/index.php?id='.$id.$filteroptionsparam)
	);
}

echo $OUTPUT->footer($course);