<?php

function get_adware() {
	global $CFG, $DB;

	$adware = detect_adware();

	if (!$adware) {
		return false;
	}

	$data = array();
	foreach ($adware->courses as $course) {
		$data[] = array('<a href="'.$CFG->wwwroot.'/course/edit.php?id='.$course->id.'" target="_blank">Curs: '.$course->fullname.'</a>', '<a href="'.$CFG->wwwroot.'/course/view.php?id='.$course->id.'" target="_blank">Curs '.$course->id.'</a>');
	}

	foreach ($adware->course_sections as $section) {
		$data[] = array('<a href="'.$CFG->wwwroot.'/course/editsection.php?id='.$section->id.'" target="_blank">Secció: '.$section->section.'</a>', '<a href="'.$CFG->wwwroot.'/course/view.php?id='.$section->course.'" target="_blank">Curs '.$section->course.'</a>');
	}

	$modules = $DB->get_records_menu('modules', array(), '', 'id,name');
	foreach ($modules as $modulename) {
		if (isset($adware->$modulename)) {
			foreach ($adware->$modulename as $mod) {
				$data[] = array('<a href="'.$CFG->wwwroot.'/course/modedit.php?update='.$mod->cmid.'" target="_blank">'.get_string('modulename', $modulename).': '.$mod->name.'</a>', '<a href="'.$CFG->wwwroot.'/course/view.php?id='.$mod->course.'" target="_blank">Curs '.$mod->course.'</a>');
			}
		}
	}
	return $data;
}

function detect_adware($notused = false) {
	global $DB;

	$searches = array('%script%cdncache%akamaihd%',
					  '%rackcdn.com/ytplayall%',
					  '%.cloudfront.net/items/loaders%',
					  '%http://www.video2mp3.at/_go.php%');
	$modules = $DB->get_records_menu('modules', array(), '', 'id,name');

	$adware = new StdClass();
	$adware->courses = array();
	$adware->course_sections = array();
	foreach ($modules as $moduleid => $modulename) {
		$adware->$modulename = array();
	}
	$count = 0;

	foreach ($searches as $search) {

		$args = array('search' => $search);
		$courselike = $DB->sql_like('summary', ':search');
		$courses = $DB->get_records_sql("SELECT id, fullname FROM {course} WHERE $courselike", $args);
		$count += count($courses);
		$adware->courses = array_merge($adware->courses, $courses);

		$course_sections = $DB->get_records_sql("SELECT id, section, course FROM {course_sections} WHERE $courselike", $args);
		$count += count($course_sections);
		$adware->course_sections = array_merge($adware->course_sections, $course_sections);

		$moduleintrolike = $DB->sql_like('m.intro', ':search');
		foreach ($modules as $moduleid => $modulename) {
			try {
				$mod = $DB->get_records_sql("SELECT m.id, m.name, m.intro, m.course, cm.id as cmid FROM {".$modulename."} m, {course_modules} cm WHERE m.id = cm.instance AND cm.module = ".$moduleid." AND $moduleintrolike", $args);
				$count += count($mod);
				$adware->$modulename = array_merge($adware->$modulename, $mod);
			} catch(Exception $e){
				//echo $OUTPUT->notification($modulename.' no té summary');
			}
		}
	}

	if ($count <= 0) {
		set_config('adware_detected', 0, 'local_agora');
		return false;
	}
	set_config('adware_detected', $count, 'local_agora');

	return $adware;
}