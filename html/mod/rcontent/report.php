<?php

// This script uses installed report plugins to print quiz reports

require_once("../../config.php");
require_once('locallib.php');
require_once('reportlib.php');

$id = required_param('id', PARAM_INT);    // Course Module ID, or
if (! $cm = get_coursemodule_from_id('rcontent', $id)) {
    print_error('Course Module ID was incorrect');
}
if (! $course = $DB->get_record('course', array('id' => $cm->course))) {
    print_error('Course is misconfigured');
}
if (! $rcontent = $DB->get_record('rcontent', array('id' => $cm->instance))) {
    print_error('Course module is incorrect');
}

require_login($course, false, $cm);

$user = optional_param('user', false, PARAM_INT);  // User ID
$attempt = optional_param('attempt', '1', PARAM_INT);  // attempt number
$action = optional_param('action', false, PARAM_ALPHA);
$page = optional_param('page', 0, PARAM_INT);

$registersperreportpage = get_config('rcontent', 'registersperreportpage');

$url = new moodle_url('/mod/rcontent/report.php', array('id' => $id)); // Base URL
$PAGE->set_title($rcontent->name);
$PAGE->set_heading($course->fullname);

$PAGE->set_url($url);

$contextmodule = context_module::instance($id);
if (!$contextmodule) {
    $contextmodule = context_system::instance();
}

require_capability('mod/rcontent:viewreport', $contextmodule);
$candeleteresponses = has_capability('mod/rcontent:deleteresponses', $contextmodule);
$canviewresults = has_capability('mod/rcontent:viewresult', $contextmodule);
$canupdatescore = has_capability('mod/rcontent:updatescore', $contextmodule);

if (!$canviewresults) {
    $user = $USER->id;
}

$book = $DB->get_record('rcommon_books', array('id' => $rcontent->bookid));
if ($book) {
    $bookname = $book->name;
} else {
    $bookname = $rcontent->bookid;
}

$baseurl = $CFG->wwwroot."/mod/rcontent/report.php?id=$id";

if (!empty($user)) {
    $userdata = rcontent_get_user_data($user);
    $navurl = "$baseurl&user=$user&attempt=$attempt";
    $PAGE->navbar->add(fullname($userdata), new moodle_url($navurl), null, navigation_node::TYPE_CUSTOM, null);
}

echo $OUTPUT->header();
echo $OUTPUT->heading(format_string($rcontent->name) . ' ('.$bookname.')');

if ($candeleteresponses && $action == 'delete') {
    $attemptids = required_param_array('attemptid', PARAM_RAW); // Get array of responses to delete.
    if (rcontent_delete_responses($attemptids, $rcontent->id)) { // Delete responses.
        echo $OUTPUT->notification(get_string('responsedeleted', 'rcontent'), 'notifysuccess');
    }
}

// In case that the user is a student in course context load from db just his registries
$userrol = array_values(get_user_roles($contextmodule));
if (empty($user)) {

    // Filter by status, get parameter with the filterby
    $filterby   = optional_param('filterby', '', PARAM_RAW);
    $optionsparam = !empty($filterby) ? $filterby : "";

    $menu = array();
    $menu['']  = get_string('all');
    $menu['NO_INICIADO']  = get_string('NO_INICIADO', 'rcontent');
    $menu['INCOMPLETO']   = get_string('INCOMPLETO', 'rcontent');
    $menu['FINALIZADO']   = get_string('FINALIZADO', 'rcontent');
    $menu['POR_CORREGIR'] = get_string('POR_CORREGIR', 'rcontent');
    $menu['CORREGIDO']    = get_string('CORREGIDO', 'rcontent');
    echo $OUTPUT->single_select(new moodle_url('/mod/rcontent/report.php?id='.$id.$optionsparam), 'filterby', $menu, $filterby);

    // No options, show the global report
    if (!empty($cm->groupingid)) {
        $sql = "SELECT DISTINCT(st.userid) FROM {rcontent_grades} st
            INNER JOIN {groups_members} gm ON st.userid = gm.userid
            INNER JOIN {groupings_groups} gg ON gm.groupid = gg.groupid
            WHERE st.rcontentid = {$rcontent->id} AND gg.groupingid = {$cm->groupingid}";
    } else {
        $sql = "SELECT DISTINCT(st.userid) FROM {rcontent_grades} st
            WHERE st.rcontentid = {$rcontent->id}";
    }

    $rcontentusersatempts  = array();
    if ($rcontentusers = $DB->get_fieldset_sql($sql)) {
        foreach ($rcontentusers as $rcontentuserid) {
            $attempts = rcontent_report_user_attempts($rcontent->id, $rcontentuserid, $filterby);
            $rcontentusersatempts = array_merge($rcontentusersatempts, $attempts);
        }

        $showhreffield = false;
        $table = new html_table();

        $limit       = $registersperreportpage;
        $count       = count($rcontentusersatempts);
        $startindex  = $limit * $page;
        $range       = "";
        $maxattempts = "";
        // Get the slice to show
        $rcontentusersatempts = array_slice($rcontentusersatempts, $startindex, $limit);

        // First set the tbody to have the info for the theader
        // Just show the registers of one page
        foreach ($rcontentusersatempts as $rcontentuser) {

            $userdata = rcontent_get_user_data($rcontentuser->userid);
            $row = array();
            if ($candeleteresponses) {
                $row[] = '<input type="checkbox" name="attemptid[]" value="'. $rcontentuser->userid . ':' . $rcontentuser->attempt . '" />';
            }
            $usertmp = $DB->get_record('user', array('id' => $rcontentuser->userid));
            $row[] = $OUTPUT->user_picture($usertmp, array('courseid' => $course->id));
            $row[] = '<a href="'.$CFG->wwwroot.'/user/view.php?id='.$rcontentuser->userid.'&course='.$course->id.'">'.
                     fullname($userdata).'</a>';

            $row[] = rcontent_report_get_attempt_link($id, $rcontentuser);
            // Show info directly
            // Set max attempts
            $maxattempts = '('.$rcontentuser->maxattempts.')';
            // Show start date
            if (!empty($rcontentuser->starttime)) {
                $row[] = userdate($rcontentuser->starttime, get_string('strftimedaydatetime'));
            } else {
                $row[] = "";
            }

            // Show attempt runtime
            $row[] = rcontent_get_ellapsed_time($rcontentuser->totaltime);
            // Show status
            $status = rcontent_grade_calculate_status($rcontent->id, $rcontentuser->userid, $rcontentuser->attempt, $rcontentuser->unitid, $rcontentuser->activityid);
            if (!empty($status[0])) {
                $row[] = get_string($status[0], 'rcontent');
            } else {
                $row[] = '';
            }
            // Show grade
            $row[] = '<div id="rcontent_grade_'.$rcontentuser->userid.'_'.$rcontentuser->id.'">'.round($rcontentuser->grade, 2).'</div>';
            // Set grade range
            $range = "($rcontentuser->mingrade-$rcontentuser->maxgrade)";
            // Show comments
            $comments = '<div id="rcontent_comments_'.$rcontentuser->userid.'_'.$rcontentuser->id.'">';
            if (strlen($rcontentuser->comments) > 30) {
                $comments .= '<span title="'.$rcontentuser->comments.'">'.substr($rcontentuser->comments, 0, 27).'...</span>';
            } else {
                $comments .= $rcontentuser->comments;
            }
            $comments .= '</div>';
            $row[] = $comments;
            // Show view resolved activity link
            // Added capabilities to control when students can view report
            $href = "";
            if ($rcontentuser->urlviewresults != "") {
                $href = rcontent_get_urlviewresults_link($rcontentuser->urlviewresults);
            }
            // Show update activity link

            if ($canupdatescore) {
                $href .= ' | '.rcontent_get_uploadscore_link($id, $rcontentuser->userid, $rcontentuser->attempt, $rcontentuser->id);
            }
            if (!empty($href)) {
                $row[] = $href;
                $showhreffield = true;
            }
            // Filter by status
            if ($filterby != '' && $status[0] != $filterby || $status[1] == '') {
                $realstat = ($status[0] != '') ? get_string($status[0], 'rcontent') : '';
                $stat = ($filterby != '') ? get_string($filterby, 'rcontent') : $realstat;
                $fieldstoreset = (core_text::strpos($row[0], '<input') === false) ? array(3 => "", 4 => "", 5 => $stat, 6 => "", 7 => "", 8 => "") : array(4 => "", 5 => "", 6 => $stat, 7 => "", 8 => "", 9 => "");
                foreach ($fieldstoreset as $key => $val) {
                    $row[$key] = $val;
                }
            }
            $table->data[] = $row;
            // If original status is POR_CORREGIR set background to red
            if ($status[1] == "POR_CORREGIR") {
                $table->rowclasses[] = 'uuerror';
            } else {
                $table->rowclasses[] = '';
            }
        }

        if (isset($table->data) && count($table->data) > 0) {
            // Now the theader
            $table->head = array();
            $table->width = '100%';
            if ($candeleteresponses) {
                 $table->head[]  = '&nbsp;';
                 $table->align[] = 'center';
                 $table->wrap[]  = 'nowrap';
                 $table->size[]  = '10';
            }

            $table->head[]  = '&nbsp;';
            $table->align[] = 'center';
            $table->wrap[]  = 'nowrap';
            $table->size[]  = '10';

            $table->head[]  = get_string('fullnameuser');
            $table->align[] = 'left';
            $table->wrap[]  = 'nowrap';
            $table->size[]  = '*';

            $table->head[] = get_string('attempt', 'rcontent').' '.$maxattempts;
            $table->align[] = 'center';
            $table->wrap[] = 'nowrap';
            $table->size[] = '*';

            $table->head[] = get_string('started', 'rcontent');
            $table->align[] = 'center';
            $table->wrap[] = 'nowrap';
            $table->size[] = '*';

            $table->head[] = get_string('time', 'rcontent');
            $table->align[] = 'center';
            $table->wrap[] = 'nowrap';
            $table->size[] = '*';

            $table->head[] = get_string('status', 'rcontent');
            $table->align[] = 'center';
            $table->wrap[] = 'nowrap';
            $table->size[] = '*';

            $table->head[] = get_string('score', 'rcontent').' '.$range;
            $table->align[] = 'center';
            $table->wrap[] = 'nowrap';
            $table->size[] = '*';

            $table->head[] = get_string('comments', 'rcontent');
            $table->align[] = 'center';
            $table->wrap[] = 'nowrap';
            $table->size[] = '*';

            if ($showhreffield) {
                 $table->head[] = '';
                 $table->align[] = 'center';
                 $table->wrap[] = 'nowrap';
                 $table->size[] = '*';
            }

            echo '<div id="scormtablecontainer">';

            echo $OUTPUT->paging_bar($count, $page, $limit, new moodle_url("/mod/rcontent/report.php?id=".$id.$optionsparam));

            if ($candeleteresponses) {
                echo '<form id="attemptsform" method="post" action="'.$_SERVER['REQUEST_URI'].'" onsubmit="var menu = document.getElementById(\'menuaction\'); return (menu.options[menu.selectedIndex].value == \'delete\' ? \''.addslashes_js(get_string('deleteattemptcheck', 'quiz')).'\' : true);">';
                echo '<input type="hidden" name="id" value="'.$id.'">';

                echo html_writer::table($table);

                echo '<a href="javascript:select_all_in(\'DIV\',null,\'scormtablecontainer\');">'.get_string('selectall', 'quiz').'</a> / ';
                echo '<a href="javascript:deselect_all_in(\'DIV\',null,\'scormtablecontainer\');">'.get_string('selectnone', 'quiz').'</a> ';
                echo '&nbsp;&nbsp;';
                $options = array('' => get_string('withselected', 'rcontent'), 'delete' => get_string('delete'));
                $attributesselect['id'] = 'select_menu';
                $attributesselect['onchange'] = 'if (this.selectedIndex > 0) document.getElementById(\'attemptsform\').submit();';

                echo html_writer::select($options, 'action', '', array(), $attributesselect);


                echo '<noscript id="noscriptmenuaction" style="display: inline;">';
                echo '<div>';
                echo '<input type="submit" value="'.get_string('go').'" /></div></noscript>';
                echo '<script type="text/javascript">'."\n<!--\n".'document.getElementById("noscriptmenuaction").style.display = "none";'."\n-->\n".'</script>';
                echo '</form>';
            } else {
                echo html_writer::table($table);
            }

            echo $OUTPUT->paging_bar($count, $page, $limit, new moodle_url("/mod/rcontent/report.php?id=".$id.$optionsparam));
        } else {
            echo $OUTPUT->notification(get_string('nousers', 'rcontent'));
        }
    } else {
        echo $OUTPUT->notification(get_string('nousersdata', 'rcontent'));
    }
} else if (!empty($user)) {

    $unitid = optional_param('b', false, PARAM_INT);     // Unit Id
    $c = $activityid = optional_param('c', false, PARAM_INT);     // Activity Id

    echo $OUTPUT->box_start();

    $userdata = rcontent_get_user_data($user);

    $usertmp = $DB->get_record('user', array('id' => $user));
    echo $OUTPUT->user_picture($usertmp, array('courseid' => $course->id));
    echo ' <a href="'.$CFG->wwwroot.'/user/view.php?id='.$user.'&course='.$course->id.'">'.fullname($userdata).'</a>';
    echo $OUTPUT->box_end();

    // First print the general information
    echo $OUTPUT->box_start();

    $table = new html_table();

    $attempts = rcontent_report_user_attempts($rcontent->id, $user);
    $showhreffield = false;
    foreach ($attempts as $at) {
        $row = array();

        if ($at->attempt == $attempt) {
            $row[] = $at->attempt;
        } else {
            $row[] = rcontent_report_get_attempt_link($id, $at);
        }

        if (!empty($at->starttime)) {
            $row[] = userdate($at->starttime, get_string('strftimedaydatetime'));
        } else {
            $row[] = "";
        }
        $row[] = rcontent_get_ellapsed_time($at->totaltime);

        $grade = rcontent_grade_user_attempt($rcontent->id, $user, $at->attempt, $unitid, $activityid);

        // Take status value from the 1st position of the array
        $status = rcontent_grade_calculate_status($rcontent->id, $at->userid, $at->attempt, $at->unitid, $at->activityid);
        if (!empty($status[0])) {
            $row[] = get_string($status[0], 'rcontent');
        } else {
            $row[] = '';
        }
        // Show grade
        $row[] = '<div id="rcontent_grade_'.$at->userid.'_'.$at->id.'">'.round($at->grade, 2).'</div>';
        // Set grade range
        $range = "($at->mingrade-$at->maxgrade)";
        // Show comments
        $comments = '<div id="rcontent_comments_'.$at->userid.'_'.$at->id.'">';
        if (strlen($at->comments) > 30) {
            $comments .= '<span title="'.$at->comments.'">'.substr($at->comments, 0, 27).'...</span>';
        } else {
            $comments .= $at->comments;
        }
        $comments .= '</div>';
        $row[] = $comments;

        $href = "";
        if ($at->urlviewresults != "" && $canviewresults) {
            $href = rcontent_get_urlviewresults_link($at->urlviewresults);
        }
        // Show update activity link
        if ($canupdatescore) {
            $href .= ' | '.rcontent_get_uploadscore_link($id, $at->userid, $at->attempt, $at->id);
        }
        if (!empty($href)) {
            $row[] = $href;
            $showhreffield = true;
        }

        $table->data[] = $row;
        $rowclass = "";
        if ($at->attempt == $attempt) {
            $rowclass = 'selected';
        }
        // If original status is POR_CORREGIR set background to red
        if ($grade->status[1] == "POR_CORREGIR") {
            $rowclass .= 'uuerror';
        }

        $table->rowclasses[] = $rowclass;
    }

    $table->head = array(
        get_string('attempt', 'rcontent').' '.$grade->maxattempts,
        get_string('started', 'rcontent'),
        get_string('time', 'rcontent'),
        get_string('status', 'rcontent'),
        get_string('score', 'rcontent').' '.$grade->range,
        get_string('comments', 'rcontent'));

    if ($showhreffield) {
        $table->head[] = get_string('url', 'rcontent');
    }

    $table->align = array('center', 'center', 'center', 'center', 'center', 'center', 'center', 'center', 'center');
    $table->wrap = array('nowrap', 'nowrap', 'nowrap', 'nowrap', 'nowrap', 'nowrap', 'nowrap', 'nowrap', 'nowrap');
    $table->size = array('*', '*', '*', '*', '*', '*', '*', '*', '*');
    $table->width = "100%";

    echo html_writer::table($table);
    echo $OUTPUT->box_end();

    echo $OUTPUT->box_start();
    echo '<strong>'.get_string('book', 'rcontent').'</strong>: ';
    if (!empty($unitid)) {
        echo $OUTPUT->action_link(new moodle_url($navurl), $bookname).'<br>';
    } else {
        echo $bookname.'<br>';
    }

    if (!empty($unitid)) {
        $unitname = $DB->get_field('rcommon_books_units', 'name', array('bookid' => $rcontent->bookid, 'id' => $unitid));
        if (!$unitname) {
            $unitname = get_string('unit', 'rcontent').": ".$unitid;
        }
        echo '<strong>'.get_string('unit', 'rcontent').'</strong>: ';
        if (!empty($activityid)) {
            echo $OUTPUT->action_link(new moodle_url($navurl.'&b='.$unitid), $unitname).'<br>';
        } else {
            echo $unitname.'<br>';
        }
    }

    if (!empty($activityid)) {
        $activityname = $DB->get_field('rcommon_books_activities', 'name', array('bookid' => $rcontent->bookid,  'unitid' => $unitid, 'id' => $activityid));
        if (!$activityname) {
            $activityname = get_string('activity', 'rcontent').": ".$activityid;
        }
        echo get_string('activity', 'rcontent').': '.$activityname.'<br>';
    }
    echo '<br>';
    echo $OUTPUT->box_end();

    if (!empty($activityid)) {
        // Activity details

        $conditions = array('rcontentid' => $rcontent->id,
                            'userid' => $user,
                            'attempt' => $attempt,
                            'unitid' => $unitid,
                            'activityid' => $activityid);
        $details = $DB->get_records('rcontent_grades_details', $conditions, 'id');
    } else if (!empty($unitid)) {
        // Activities/Unit details report for a given book, unit, attempt and user
        $sql = "SELECT rg.* FROM {rcontent_grades} rg
                    INNER JOIN {rcommon_books_activities} rba ON rba.id=rg.activityid
                    WHERE rg.rcontentid='$rcontent->id' AND rg.userid=$user AND rg.attempt=$attempt
                    AND rg.unitid=$unitid AND rg.activityid<>0 ORDER BY rba.sortorder ASC, rg.starttime ASC";

        $activate = array();
        $tabs = array(0 => array());
        // Filter by status
        $tabs[0][] = new tabobject('activities', "$baseurl&b=$unitid&user=$user&attempt=$attempt", get_string('activities', 'rcontent'));
        $tabs[0][] = new tabobject('details', "$baseurl&b=$unitid&user=$user&attempt=$attempt&action=details", get_string('details', 'rcontent'));
        $activate[] = (empty($action)) ? 'activities' : 'details';
        print_tabs($tabs, '', array(), $activate);

        if (empty($action)) {
            // Activities
            if ($activities = $DB->get_records_sql($sql)) {
                // Print units data
                $table = new html_table();
                $limit      = $registersperreportpage;
                $count      = count($activities);
                $startindex = $limit * $page;

                $activities = array_slice($activities, $startindex, $limit);

                // Go over the registres of the current page
                // Just show the registers of one page
                foreach ($activities as $activity) {

                    $row = array();

                    if (!$activityname = $DB->get_field_select('rcommon_books_activities', 'name', "bookid=$rcontent->bookid AND unitid=$unitid AND id=$activity->activityid", null, 'name')) {
                        $activityname = $activity->activityid;
                    }
                    $row[] = $activityname;
                    $timetracks = rcontent_get_attempt_runtime($rcontent->id, $user, $bookidttempt, $unitid, $activity->activityid, $activity->starttime);
                    $row[] = $timetracks->start;
                    $row[] = $timetracks->finish;
                    $grade = rcontent_grade_user_attempt($rcontent->id, $user, $attempt, $unitid, $activity->activityid, $activity->id, $activity->starttime);
                    // Take status value from the 1st position of the array
                    if (!empty($grade->status[0])) {
                        $row[] = get_string($grade->status[0], 'rcontent');
                    } else {
                        $row[] = '';
                    }
                    $row[] = $grade->grade.' '.$grade->range;
                    $row[] = $grade->comments;

                    $conditions = array('rcontentid' => $rcontent->id, 'userid' => $user, 'attempt' => $attempt, 'unitid' => $unitid, 'activityid' => $activity->activityid);
                    $activitiesdetails = $DB->get_records('rcontent_grades_details', $conditions, 'id');
                    if ($activitiesdetails) {
                        $row[] = '<a href="'.$baseurl.'&b='.$unitid.'&c='.$activity->activityid.'&user='.$user.'&attempt='.$attempt.'">'.get_string('viewdetails', 'rcontent').'</a>';
                    }

                    $table->data[] = $row;
                    // If original status is POR_CORREGIR set background to red
                    if ($grade->status[1] == "POR_CORREGIR") {
                        $table->rowclasses[] = 'uuerror';
                    } else {
                        $table->rowclasses[] = '';
                    }
                }

                $table->head = array(
                    get_string('activity', 'rcontent'),
                    get_string('started', 'rcontent'),
                    get_string('time', 'rcontent'),
                    get_string('status', 'rcontent'),
                    get_string('score', 'rcontent'),
                    get_string('comments', 'rcontent'),
                    get_string('details', 'rcontent'));

                $table->align = array('center', 'center', 'center', 'center', 'center', 'center', 'center', 'center');
                $table->wrap = array('nowrap', 'nowrap', 'nowrap', 'nowrap', 'nowrap', 'nowrap', 'nowrap', 'nowrap');
                $table->size = array('*', '*', '*', '*', '*', '*', '*', '*');

                $pageurl = new moodle_url("/mod/rcontent/report.php?id=$id&b=$unitid&user=$user&attempt=$attempt");
                echo $OUTPUT->paging_bar($count, $page, $limit, $pageurl);
                echo html_writer::table($table);
                echo $OUTPUT->paging_bar($count, $page, $limit, $pageurl);

            } else {
                echo $OUTPUT->notification(get_string('noactivities', 'rcontent'));
            }
        } else if ($action == "details") {
            // Unit details
            $conditions = array('rcontentid' => $rcontent->id,
                                'userid' => $user,
                                'attempt' => $attempt,
                                'unitid' => $unitid,
                                'activityid' => 0);
            $details = $DB->get_records('rcontent_grades_details', $conditions, 'id');
        }
    } else {
        // Units/Book details report for a given book, attempt and user

        // Search on DB now to know how to set tab
        $sql = "SELECT DISTINCT rg.unitid, rg.*, rbu.sortorder as sorto FROM {rcontent_grades} rg
            INNER JOIN {rcommon_books_units} rbu ON rbu.id=rg.unitid
            WHERE rg.rcontentid='$rcontent->id' AND rg.userid=$user AND rg.attempt=$attempt
            AND rg.unitid<>0";

        // Adding filter activityid=0, because the sql gets more than one result and the
        $sql .= " AND rg.activityid=0 ORDER BY sorto ASC, rg.activityid DESC";

        $activate = array();
        $tabs = array(0 => array());
        // Filter by status
        $tabs[0][] = new tabobject('units', "$baseurl&user=$user&attempt=$attempt", get_string('units', 'rcontent'));
        $tabs[0][] = new tabobject('details', "$baseurl&user=$user&attempt=$attempt&action=details", get_string('details', 'rcontent'));
        $activate[] = (empty($action)) ? 'units' : 'details';
        print_tabs($tabs, '', array(), $activate);

        if (empty($action)) {
            // Units
            if ($units = $DB->get_records_sql($sql)) {
                // Print units data
                $table = new html_table();
                $limit = $registersperreportpage;
                $count = count($units);
                $startindex = $limit * $page;

                $units = array_slice($units, $startindex, $limit);

                // First set the tbody to have the info for the theader
                $activities  = "";
                $unitdetails = "";
                // Just show the registers of one page
                foreach ($units as $unit) {
                    // Get the next value of the array
                    $row = array();
                    if (!$unitname = $DB->get_field_select('rcommon_books_units', 'name', "bookid=$rcontent->bookid AND id=$unit->unitid", null, 'name')) {
                        $unitname = $unit->unitid;
                    }
                    $row[] = $unitname;
                    $timetracks = rcontent_get_attempt_runtime($rcontent->id, $user, $attempt, $unit->unitid, '', $unit->starttime);
                    $row[] = $timetracks->start;
                    $row[] = $timetracks->finish;
                    $grade = rcontent_grade_user_attempt($rcontent->id, $user, $attempt, $unit->unitid, '', '', $unit->starttime);
                    // Take status value from the 1st position of the array
                    if (!empty($grade->status[0])) {
                        $row[] = get_string($grade->status[0], 'rcontent');
                    } else {
                        $row[] = "";
                    }
                    $row[] = $grade->grade.' '.$grade->range;
                    $row[] = $grade->comments;

                    $conditions = array('rcontentid' => $rcontent->id, 'userid' => $user, 'attempt' => $attempt, 'unitid' => $unit->unitid, 'activityid' => 0);
                    $unitdetails = $DB->get_records('rcontent_grades_details', $conditions, 'id');
                    if ($unitdetails) {
                        $row[] = '<a href="'.$baseurl.'&b='.$unit->unitid.'&user='.$user.'&attempt='.$attempt.'&action=details">'.get_string('viewdetails', 'rcontent').'</a>';
                    } else {
                        $row[] = "";
                    }

                    $activities = $DB->get_records_select('rcontent_grades', "rcontentid='$rcontent->id' AND userid=$user AND attempt=$attempt AND unitid=$unit->unitid AND activityid<>0 ORDER BY id");
                    if ($activities) {
                        // Filter by status
                        $row[] = '<a href="'.$baseurl.'&b='.$unit->unitid.'&user='.$user.'&attempt='.$attempt.'>'.get_string('viewactivities', 'rcontent').'</a>';
                    } else {
                        $row[] = "";
                    }

                    $table->data[] = $row;
                    // If original status is POR_CORREGIR set background to red
                    if ($grade->status[1] == "POR_CORREGIR") {
                        $table->rowclasses[] = 'uuerror';
                    } else {
                        $table->rowclasses[] = '';
                    }
                }

                $table->head = array(get_string('unit', 'rcontent'),
                    get_string('started', 'rcontent'),
                    get_string('time', 'rcontent'),
                    get_string('status', 'rcontent'),
                    get_string('score', 'rcontent'),
                    get_string('comments', 'rcontent'),
                    get_string('details', 'rcontent'),
                    get_string('activities', 'rcontent'));

                $table->align = array('center', 'center', 'center', 'center', 'center', 'center', 'center', 'center');
                $table->wrap = array('nowrap', 'nowrap', 'nowrap', 'nowrap', 'nowrap', 'nowrap', 'nowrap', 'nowrap');
                $table->size = array('*', '*', '*', '*', '*', '*', '*', '*');
                echo $OUTPUT->paging_bar($count, $page, $limit,
                new moodle_url("/mod/rcontent/report.php?id=$id&user=$user&attempt=$attempt"));

                echo html_writer::table($table);

                echo $OUTPUT->paging_bar($count, $page, $limit,
                new moodle_url("/mod/rcontent/report.php?id=$id&user=$user&attempt=$attempt"));
            } else {
                echo $OUTPUT->notification(get_string('nounits', 'rcontent'));
            }
        } else if ($action == "details") {
            $conditions = array('rcontentid' => $rcontent->id,
                                'userid' => $user,
                                'attempt' => $attempt,
                                'unitid' => 0,
                                'activityid' => 0);
            $details = $DB->get_records('rcontent_grades_details', $conditions, 'id');
        }
    }

    if (isset($details)) {
        if ($details) {
            // Print details data
            $table = new html_table();
            $limit = $registersperreportpage;
            $count = count($details);
            $startindex = $limit * $page;

            $details = array_slice($details, $startindex, $limit);

            // Just show the registers of one page
            foreach ($details as $detail) {
                $row = array();
                $grade = rcontent_grade_details_user_attempt($detail->id, $rcontent->id, $user, $attempt, false, $unitid, $activityid);
                $row[] = $grade->description;
                $timetracks = rcontent_details_get_attempt_runtime($detail->id);
                $row[] = $timetracks->start;
                $row[] = $timetracks->finish;
                $row[] = $grade->grade.' '.$grade->range;
                $row[] = $grade->weight;
                // Added capabilities to control when students can view report
                if ($canviewresults) {
                    $row[] = $grade->url;
                }
                $table->data[] = $row;
            }

            $table->head = array(get_string('description', 'rcontent'),
                get_string('started', 'rcontent'),
                get_string('time', 'rcontent'),
                get_string('score', 'rcontent'),
                get_string('weight', 'rcontent').' '.$grade->totalweight);
            if ($canviewresults) {
                $table->head[] = get_string('url', 'rcontent');
            }
            $table->align = array('center', 'center', 'center', 'center', 'center', 'center');
            $table->wrap = array('nowrap', 'nowrap', 'nowrap', 'nowrap', 'nowrap', 'nowrap');
            $table->size = array('*', '*', '*', '*', '*', '*');

            $urlparams = array('id' => $id, 'user' => $user, 'attempt' => $attempt, 'action' => $action);
            if ($unitid) {
                $urlparams['b'] = $unitid;
            }
            if ($activityid) {
                $urlparams['c'] = $activityid;
            }
            $url = new moodle_url("/mod/rcontent/report.php", $urlparams);
            echo $OUTPUT->paging_bar($count, $page, $limit, $url);

            echo html_writer::table($table);

            echo $OUTPUT->paging_bar($count, $page, $limit, $url);
        } else {
            echo $OUTPUT->notification(get_string('nodetails', 'rcontent'));
        }
    }
} else {
    echo $OUTPUT->notification(get_string('nousersdata', 'rcontent'));
}


// Log that this report was viewed.
$params = array(
    'context' => $contextmodule,
    'other' => array(
        'rcontentid' => $rcontent->id
    )
);
$event = \mod_rcontent\event\report_viewed::create($params);
$event->add_record_snapshot('course', $course);
$event->add_record_snapshot('rcontent', $rcontent);
$event->trigger();

echo $OUTPUT->footer();