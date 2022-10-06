<?php
require_once('../../config.php');
require_once($CFG->dirroot.'/course/lib.php');
require_once("{$CFG->libdir}/formslib.php");
require_once($CFG->dirroot.'/local/rcommon/locallib.php');

require_login();

require_capability('local/rcommon:managecredentials', context_system::instance());

require_once($CFG->libdir.'/adminlib.php');

$id = required_param('id', PARAM_INT);

$book = $DB->get_record('rcommon_books', array('id' => $id));
admin_externalpage_setup('marsupialcontent'.$book->publisherid);
echo $OUTPUT->header();

//key synchronization
echo $OUTPUT->heading($book->name . ' (' . $book->isbn . ')',2);

// print content
echo $OUTPUT->heading(get_string('manage_credentials', 'local_rcommon'),3);
$credentials = $DB->get_records_sql("SELECT ruc.id, ruc.credentials, ruc.euserid, u.lastname, u.firstname FROM {rcommon_user_credentials} ruc LEFT JOIN {user} u ON ruc.euserid = u.id WHERE isbn = '{$book->isbn}' ORDER BY u.lastname, u.firstname, ruc.credentials");

$validbook = in_array(core_text::strtolower($book->format), rcommon_book::$allowedformats);
if ($validbook) {
	echo '<input onclick="document.location.href=\'edit_book_credential.php?backto=books&isbn=' . $book->isbn . '\';" type="submit" value="'.get_string('keymanager_add', 'local_rcommon').'" />';
}

if (empty($credentials)){
	echo $OUTPUT->notification(get_string('keymanager_nocredentialsfound', 'local_rcommon') );
} else {
	$canmanage = has_capability('local/rcommon:managecredentials', context_system::instance());
	if ($canmanage) {
		echo '<form action="credentials_bulk.php?id=' . $id . '" id="frm" name="frm" method="post">';
	}

	$table = new html_table();
	$table->class = 'generaltable';
	$table->head = array('', get_string('credential', 'local_rcommon'), get_string('user', 'local_rcommon'), get_string('actions', 'local_rcommon'),"");
	$table->align = array('left', 'left', 'left', 'center', 'center');
	foreach ($credentials as $credential){
		$name = (!empty($credential->lastname) && $credential->lastname != ' ')? $credential->firstname . ' ' . $credential->lastname: ($credential->euserid != 0? get_string('keymanager_usernotfound', 'local_rcommon'): ' - ');

		$row = array();
		if ($canmanage) {
			$row[] = '<input type="checkbox" name="ids[]" value="' . $credential->id . '" onChange="allow_actions();">';
		} else {
			$row[] = "";
		}
		$row[] = '<span title="' . $credential->credentials . '">' . (core_text::strlen($credential->credentials) > 30? core_text::substr($credential->credentials, 0, 30) . '...': $credential->credentials);
		$row[] = $name;
		$actions = array();
		$actions[] = '<a href="edit_book_credential.php?backto=books&id=' . $credential->id . '" title="' . get_string('edit') .'" style="margin-left: 15px;">' . get_string('edit') . '</a>';
		if (!empty($credential->credentials) && !empty($credential->euserid)){
			$actions[] = '<a onclick="M.local_rcommon.exec_test(' . $credential->id . ');" title="' . get_string('keymanager_test', 'local_rcommon') . '">' . get_string('keymanager_test', 'local_rcommon') . '</a>';
		}
		$row[] = implode(' | ', $actions);
		$row[] = '<img id="loading_small_' . $credential->id.'" style="visibility:hidden" src="'.$OUTPUT->image_url('i/loading_small').'" alt="" /><span id="desc_' . $credential->id . '"></span>';
		$table->data[] = $row;
	}
	echo html_writer::table($table);
	if ($canmanage) {
		echo '<select id="action" name="action" onchange="confirm_actions(this);" disabled>
			<option value="">' . get_string('keymanager_selectaction', 'local_rcommon') . '</option>';
		if ($validbook) {
			echo '<option value="assign">' . get_string('keymanager_assignaction', 'local_rcommon') . '</option>';
		}
		echo '<option value="unassign">' . get_string('keymanager_unassignaction', 'local_rcommon') . '</option>
			<option value="delete">' . get_string('keymanager_deleteaction', 'local_rcommon') . '</option>
		</select> <input type="button" onclick="select_all();" value = "' . get_string('keymanager_selectall', 'local_rcommon') . '"> <input type="button" onclick="unselect_all();" value="' . get_string('keymanager_unselectall', 'local_rcommon') . '">
		</form>';
	}
	$jsmodule = array(
		'name'     => 'local_rcommon',
		'fullpath' => '/local/rcommon/javascript.js',
		'requires' => array('base','io','panel'),
	);
	$PAGE->requires->js_init_call('M.local_rcommon.init', array(), true, $jsmodule);
}

echo $OUTPUT->heading(get_string('units_and_activities', 'local_rcommon'),3);
$units = $DB->get_records('rcommon_books_units',array('bookid'=>$book->id), 'sortorder ASC');
if(!$units){
    echo $OUTPUT->notification(get_string('no_units', 'local_rcommon'));
} else {
    echo '<ul>';
    $activities = array();
    foreach($units as $unit){
        echo '<li><strong>'.$unit->name.'</strong> ('.$unit->code.')<br/>';
        echo '<span style="font-size:80%;"><strong>'.get_string('addeddate', 'local_rcommon').'</strong>: '.userdate($unit->timecreated).' - ';
        echo '<strong>'.get_string('lastmodified').'</strong>: '.userdate($unit->timemodified).'</span>';
        if(!empty($unit->summary)) echo '<br/>'.$unit->summary;
        $activities[$unit->id] = $DB->get_records('rcommon_books_activities',array('unitid'=>$unit->id), 'sortorder ASC');
        if(!$activities[$unit->id]){
            echo '<br/>'.get_string('no_activities', 'local_rcommon');
        } else {
            echo '<ul>';
            foreach($activities[$unit->id] as $activity){
                echo '<li><strong>'.$activity->name.'</strong> ('.$activity->code.')<br/>';
                echo '<span style="font-size:80%;"><strong>'.get_string('addeddate', 'local_rcommon').'</strong>: '.userdate($activity->timecreated).' - ';
                echo '<strong>'.get_string('lastmodified').'</strong>: '.userdate($activity->timemodified).'</span>';
                if(!empty($activity->summary)) echo '<br/>'.$activity->summary;
                echo '</li>';
            }
            echo '</ul>';
        }
        echo '</li>';
    }
    echo '</ul>';
}

$modules = false;
switch ($book->format) {
	case 'scorm':
	    if ($DB->get_manager()->table_exists('rscorm')) {
	        $modules = $DB->get_records('rscorm', array('bookid' => $book->id));
	        $urlbase = $CFG->wwwroot.'/mod/rscorm/view.php?a=';
	    }
	    break;
	default:
	case 'webcontent':
		$modules = $DB->get_records('rcontent', array('bookid' => $book->id));
		$urlbase = $CFG->wwwroot.'/mod/rcontent/view.php?a=';
	    break;
}
if (!empty($modules)) {
	echo $OUTPUT->heading(get_string('used_modules', 'local_rcommon'), 3);
	$table = new html_table();
	$table->class = 'generaltable';
	$table->head = array(get_string('activity'), get_string('course'), get_string('unit', 'local_rcommon'), get_string('activity', 'local_rcommon'));
	$table->align = array('left', 'center', 'center', 'center');
	foreach ($modules as $module) {
		$row = array();
		$row[] = '<a href="'.$urlbase.$module->id.'">'.$module->name.'</a>';
		$coursename = $module->course == SITEID ? get_string('site') : $DB->get_field('course', 'fullname', array('id' => $module->course));
		$row[] = '<a href="'.$CFG->wwwroot.'/course/view.php?id='.$module->course.'">'.$coursename.'</a>';
		$row[] = $module->unitid ? (isset($units[$module->unitid]->name) ? $units[$module->unitid]->name : $module->unitid) : '-';
		$row[] = $module->activityid ? (isset($activities[$module->unitid][$module->activityid]->name) ? $activities[$module->unitid][$module->activityid]->name : $module->activityid) : '-';
		$table->data[] = $row;
	}
	echo html_writer::table($table);
}


// Javascript
echo '<script type="text/javascript">
	function confirm_actions(el){
		if(el.value == ""){
			return false;
		}

		//count checked checks
		chk_cnt = 0;
		for (var element in document.frm.elements){
			if (document.frm.elements[element].name == "ids[]"){
				if (document.frm.elements[element].checked){
					chk_cnt++;
				}
			}
		}

		//stop execution if there is any check checked
		if (chk_cnt == 0){
			return false;
		}

		//confirm message
		if (el.value != "assign"){
			var message = Array();
			message["unassign"] = "' . get_string('keymanager_messageunassing', 'local_rcommon') . '";
			message["delete"]   = "' . get_string('keymanager_messagedelete', 'local_rcommon') . '";

			if (!confirm(message[el.value].toString().replace("XX", chk_cnt))){
				document.getElementById(\'action\').selectedIndex = 0;
				return false;
			}
		}

		document.frm.submit();
	}

	function select_all(){
		for (var element in document.frm.elements){
			if (document.frm.elements[element].name == "ids[]"){
				if (!document.frm.elements[element].checked){
					document.frm.elements[element].checked = true;
				}
			}
		}
		document.getElementById(\'action\').disabled = false;
	}

	function unselect_all(){
		for (var element in document.frm.elements){
			if (document.frm.elements[element].name == "ids[]"){
				if (document.frm.elements[element].checked){
					document.frm.elements[element].checked = false;
				}
			}
		}
		document.getElementById(\'action\').disabled = true;
	}

	function allow_actions(){
		var active = false;
		for (var element in document.frm.elements){
			if (document.frm.elements[element].name == "ids[]"){
				if (document.frm.elements[element].checked){
					active = true;
				}
			}
		}

		if (active){
			document.getElementById(\'action\').disabled = false;
		} else {
			document.getElementById(\'action\').disabled = true;
		}
	}
</script>';

echo $OUTPUT->footer();
