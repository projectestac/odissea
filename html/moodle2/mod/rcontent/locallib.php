<?php

define('RCONTENT_HIGHESTATTEMPT', '0');
define('RCONTENT_AVERAGEATTEMPT', '1');
define('RCONTENT_FIRSTATTEMPT', '2');
define('RCONTENT_LASTATTEMPT', '3');

require_once("$CFG->dirroot/mod/rcontent/lib.php");
require_once("$CFG->dirroot/local/rcommon/locallib.php");

/**
 * Returns an array of the array of what grade options
 *
 * @return array an array of what grade options
 */
function rcontent_get_what_grade_array() {
    return array (RCONTENT_HIGHESTATTEMPT => get_string('highestattempt', 'rcontent'),
                  RCONTENT_AVERAGEATTEMPT => get_string('averageattempt', 'rcontent'),
                  RCONTENT_FIRSTATTEMPT => get_string('firstattempt', 'rcontent'),
                  RCONTENT_LASTATTEMPT => get_string('lastattempt', 'rcontent'));
}

/**
 * Check the grades available for the request activity
 * @param int $rcontentid -> ID of the rcontent
 * @param int $groupingid -> ID of the group
 * @return int -> count of grades
 */
function rcontent_get_count_users($rcontentid, $groupingid=null, $context, $filter = '') {

    global $CFG, $USER, $DB;

    // Test when the user role is studen and just count his grades
    if (has_capability('mod/rcontent:viewreport', $context)) {
        if (!has_capability('mod/rcontent:viewresult', $context)) {
                $sql="SELECT count(st.id) FROM {rcontent_grades} st
                    WHERE st.rcontentid = $rcontentid AND st.userid=$USER->id";
            // Filter by status
            if ($filter != '') {
                $sql .= " AND st.status = '{$filter}'";
            }
            if ($DB->count_records_sql($sql) > 0) {
                return 1;
            }
        } else {
            if (!empty($CFG->enablegroupings) && !empty($groupingid)) {
                $sql = "SELECT COUNT(DISTINCT st.userid)
                    FROM {rcontent_grades} st
                        INNER JOIN {groups_members} gm ON st.userid = gm.userid
                        INNER JOIN {groupings_groups} gg ON gm.groupid = gg.groupid
                    WHERE st.rcontentid = $rcontentid AND gg.groupingid = $groupingid";
                    // Filter by status
                    if ($filter != ''){
                        $sql .= " AND st.status = '{$filter}'";
                    }
            } else {
                $sql = "SELECT COUNT(DISTINCT st.userid)
                    FROM {rcontent_grades} st
                    WHERE st.rcontentid = $rcontentid";
                // Filter by status
                if ($filter != '') {
                    $sql .= " AND st.status = '{$filter}'";
                }
            }
            return($DB->count_records_sql($sql));
        }
    }
    return 0;
}

/**
 * Check the score of the request user for the request activity
 * @param $rcontent int -> ID of the activity
 * @param $userid int -> ID of the user
 * @param $time int -> datetime
 * @return int -> the score for that user
 */
function rcontent_grade_user($rcontent, $userid, $from='') {

    global $DB;
    // Take the global grade for the given activity
    $sql = "userid=$userid AND rcontentid=$rcontent->id AND unitid=$rcontent->unitid AND activityid=$rcontent->activityid";
    if (!$grade = $DB->get_records_select('rcontent_grades', $sql)) {
        return 0;
    }

    $grade = current($grade);

    $lastattempt = rcontent_get_last_attempt($rcontent->id, $userid);
    if ($grade->maxattempts != 0 && $lastattempt >= $grade->maxattempts) {
        $lastattempt = $grade->maxattempts;
    }

    switch ($rcontent->whatgrade) {
        case RCONTENT_FIRSTATTEMPT:
            $grade=rcontent_grade_user_attempt($rcontent->id, $userid, 1, $grade->unitid, $grade->activityid);
            if($from!='gradebook')
                return $grade->justgrade.' '.$grade->range;
            else
                return $grade->justgrade;
        break;
        case RCONTENT_LASTATTEMPT:
            $grade=rcontent_grade_user_attempt($rcontent->id, $userid, $lastattempt, $grade->unitid, $grade->activityid);
            if($from!='gradebook')
                return $grade->justgrade.' '.$grade->range;
            else
                return $grade->justgrade;
        break;
        case RCONTENT_HIGHESTATTEMPT:
            $maxscore = 0;
            $attempttime = 0;
            for ($attempt = 1; $attempt <= $lastattempt; $attempt++) {
                $attemptgrade = rcontent_grade_user_attempt($rcontent->id, $userid, $attempt, $grade->unitid, $grade->activityid);
                $maxscore = ($attemptgrade->justgrade > $maxscore) ? $attemptgrade->justgrade: $maxscore;
            }
            if($from!='gradebook')
                return $maxscore.' '.$attemptgrade->range;
            else
                return $attemptgrade->justgrade;
        break;
        case RCONTENT_AVERAGEATTEMPT:
            $sumscore = 0;
            for ($attempt = 1; $attempt <= $lastattempt; $attempt++) {
                $attemptgrade = rcontent_grade_user_attempt($rcontent->id, $userid, $attempt, $grade->unitid, $grade->activityid);
                $sumscore += $attemptgrade->justgrade;
            }
            if ($lastattempt > 0) {
                $score = $sumscore / $lastattempt;
            } else {
                $score = 0;
            }
            if($from!='gradebook')
                return $score.' '.$attemptgrade->range;
            else
                return $attemptgrade->justgrade;
        break;
    }
}

/**
 * Check the grade comment for the request user and activity
 * @param int $rcontent
 * @param int $userid
 * @return string
 */
function rcontent_grade_user_comments($rcontent, $userid){
    global $DB;
    switch ($rcontent->whatgrade) {
        case RCONTENT_FIRSTATTEMPT:
            if (!$comment=$DB->get_record_select('rcontent_grades',"rcontentid=$rcontent->id AND userid=$userid AND unitid=$rcontent->unitid AND activityid=$rcontent->activityid AND attempt=1", null, 'comments')){
                return '';
            }
            break;
        default:
            $lastattempt = rcontent_get_last_attempt($rcontent->id, $userid);
            if(!$comment=$DB->get_record_select('rcontent_grades',"rcontentid=$rcontent->id AND userid=$userid AND unitid=$rcontent->unitid AND activityid=$rcontent->activityid AND attempt=$lastattempt", null, 'comments')){
                return '';
            }

    }
    return $comment->comments;
}


/**
 * Delete grades and grades_details for selected users
 * @param int $rcontentid list of attempts that need to be deleted
 * @param int $userid ID of Scorm
 * @return bool -> true deleted all responses, false failed deleting an attempt - stopped here
 */
function rcontent_delete_responses($attemptids, $rcontentid) {

    if (!is_array($attemptids) || empty($attemptids)) {
        return false;
    }

    foreach ($attemptids as $num => $attemptid) {
        if (empty($attemptid)) {
            unset($attemptids[$num]);
        }
    }

    foreach ($attemptids as $attempt) {
        $keys = explode(':', $attempt);
        if (count($keys) == 2) {
            $userid = clean_param($keys[0], PARAM_INT);
            $attemptid = clean_param($keys[1], PARAM_INT);
            if (!$userid || !$attemptid || !rcontent_delete_attempt($userid, $rcontentid, $attemptid)) {
                    return false;
            }
        } else {
            return false;
        }
    }
    return true;
}

/**
 * Delete grades and details for selected users
 * @param int $userid ID of User
 * @param int $rcontentid ID of Scorm
 * @param int $attemptid user attempt that need to be deleted
 * @return bool true suceeded
 */
function rcontent_delete_attempt($userid, $rcontentid, $attemptid) {
    global $DB;
    if (!$DB->delete_records('rcontent_grades', array('userid' => $userid, 'rcontentid' => $rcontentid, 'attempt' => $attemptid))) {
        return false;
    }
    if (!$DB->delete_records('rcontent_grades_details', array('userid' => $userid, 'rcontentid' => $rcontentid, 'attempt' => $attemptid))) {
        return false;
    }
    return true;
}

/**
 * Gets user info required to display the table of rcontent results for report.php
 * @param int $userid
 * @return array -> firstname, lastname and user picture
 */
function rcontent_get_user_data($userid) {
    global $DB;
    $namefields = get_all_user_name_fields(true);
    return $DB->get_record('user', array('id' => $userid), $namefields.', picture');
}

/**
 * Find the last attempt number for the given user id and scorm id
 * @param int $rcontentid
 * @param int $userid
 */
function rcontent_get_last_attempt($rcontentid, $userid) {
    global $DB;
    if ($lastattempt = $DB->get_record('rcontent_grades', array('userid' => $userid, 'rcontentid' => $rcontentid), 'max(attempt) as a')) {
        if (empty($lastattempt->a)) {
            return '1';
        } else {
            return $lastattempt->a;
        }
    }
}

/** Find the start and finish time for a a given attempt
 * @param int $rcontentid SCORM Id
 * @param int $userid User Id
 * @param int $attemt Attempt Id
 * @return object start and finsh time EPOC secods
 */
function rcontent_get_attempt_runtime($rcontentid, $userid, $attempt=1, $unitid='', $activityid='', $starttime = '') {
    global $DB;

    $timedata = new StdClass();
    $timedata->start = "";
    $timedata->finish = "";

    $sql = "userid=$userid AND rcontentid=$rcontentid AND attempt=$attempt";
    $sql .= empty($unitid) ? " AND unitid=0" : " AND unitid=$unitid";
    $sql .= empty($activityid) ? " AND activityid=0" : " AND activityid=$activityid";
    $sql .= empty($starttime) ? "" : " AND starttime = $starttime";

    if ($lasttrack = $DB->get_record_select('rcontent_grades', "$sql ORDER BY timemodified ASC", null, '*', IGNORE_MULTIPLE)) {

        if ($lasttrack->starttime > 0) {
            $timedata->start = userdate($lasttrack->starttime, get_string('strftimedaydatetime'));
        } else {
            $timedata->start = '';
        }

        $timedata->finish = rcontent_get_ellapsed_time($lasttrack->totaltime);
    }

    return $timedata;
}

/** Find the start and finsh time for a a given detail attempt
 * @param int $rcontentid SCORM Id
 * @param int $userid User Id
 * @param int $attemt Attempt Id
 * @return object start and finsh time EPOC secods
 */
function rcontent_details_get_attempt_runtime($id) {
    global $DB;

    $timedata = new StdClass();
    $timedata->start = "";
    $timedata->finish = "";

    if ($track = $DB->get_record('rcontent_grades_details', array('id' => $id))) {
        if ($track->starttime > 0) {
            $timedata->start = userdate($track->starttime, get_string('strftimedaydatetime'));
        } else {
            $timedata->start = '';
        }

        $timedata->finish = rcontent_get_ellapsed_time($track->totaltime);
    }

    return $timedata;
}

/**
 * Find the activity grade for a given user and attempt
 * @param int $rcontentid
 * @param int $userid
 * @param int $attempt
 * @param int $unitid
 * @param int $activityid
 * @return string grade(mingrade/maxgrade)
 */
function rcontent_grade_user_attempt($rcontentid, $userid, $attempt=1, $unitid='', $activityid='', $idgrade = '', $starttime = '') {
    global $CFG, $DB;

    // Take the grade of the activity
    if (!empty($idgrade)) {
        $sql = "id = $idgrade";
    } else {
        $sql = "userid=$userid AND rcontentid=$rcontentid AND attempt=$attempt";
        $sql .= empty($unitid) ? " AND unitid=0" : " AND unitid=$unitid";
        $sql .= empty($activityid) ? " AND activityid=0" : " AND activityid=$activityid";
        $sql .= empty($starttime) ? "" : " AND starttime = $starttime";
    }

    $numgrades = $DB->count_records_select('rcontent_grades', $sql);

    $return = new stdClass();
    $return->id = "";
    $return->grade = "";
    $return->justgrade = "";
    $return->range = "";
    $return->maxattempts = "";
    $return->status = rcontent_grade_calculate_status($rcontentid, $userid, $attempt, $unitid, $activityid, $starttime);
    $return->url = "";
    $return->comments = "";
    $return->justcomments = "";

    if ($numgrades == 0) {
        return $return;
    }
    if ($numgrades == 1) {
        $grade = $DB->get_record_select('rcontent_grades', $sql);
    } else {
        if ($whatgrade = $DB->get_field('rcontent', 'whatgrade', array('id' => $rcontentid))) {
            switch ($whatgrade){
                case RCONTENT_FIRSTATTEMPT:
                    $grade = $DB->get_record_sql("SELECT * FROM {rcontent_grades} WHERE {$sql} AND timecreated = (SELECT MIN(timecreated) FROM {rcontent_grades} WHERE ".$sql.")", array(), IGNORE_MULTIPLE);
                break;
                case RCONTENT_LASTATTEMPT:
                    $grade = $DB->get_record_sql("SELECT * FROM {rcontent_grades} WHERE {$sql} AND timecreated = (SELECT MAX(timecreated) FROM {rcontent_grades} WHERE ".$sql.")", array(), IGNORE_MULTIPLE);
                break;
                case RCONTENT_HIGHESTATTEMPT:
                    $grade = $DB->get_record_sql("SELECT * FROM {rcontent_grades} WHERE {$sql} AND grade=(SELECT max(grade) as grade FROM {rcontent_grades} WHERE ".$sql.")", array(), IGNORE_MULTIPLE);
                break;
                case RCONTENT_AVERAGEATTEMPT:
                    $grade_grade = $DB->get_record_sql("SELECT round(avg(grade)) as grade FROM {rcontent_grades} WHERE {$sql}", array(), IGNORE_MULTIPLE);

                    $grade = $DB->get_records_select('rcontent_grades', $sql);
                    $grade = array_pop($grade);
                    $grade->grade = $grade_grade->grade;
                break;
            }
        }
    }

    $return->id = $grade->id;
    $return->grade = '<div id="rcontent_grade_'.$userid.'_'.$grade->id.'">'.$grade->grade.'</div>';
    $return->totaltime = $grade->totaltime;
    $return->justgrade = round($grade->grade, 2);
    $return->range = "($grade->mingrade-$grade->maxgrade)";
    $return->maxattempts = '('.$grade->maxattempts.')';
    if ($grade->urlviewresults != "") {
        $return->url = rcontent_get_urlviewresults_link($grade->urlviewresults);
    }
    if ($grade->comments != "") {
        $return->comments = '<div id="rcontent_comments_'.$userid.'_'.$grade->id.'">';
        if (strlen($grade->comments) > 30) {
             $return->comments .= '<span title="'.$grade->comments.'">'.substr($grade->comments,0,27).'...</span>';
        } else {
            $return->comments .= $grade->comments;
        }
        $return->comments .= '</div>';
        $return->justcomments = $grade->comments;
    } else {
        $return->comments = '<div id="rcontent_comments_'.$userid.'_'.$grade->id.'"></div>';
    }

    return $return;
}

/**
 * Find the activity detail grade for a given user and attempt
 * @param int $rcontent
 * @param int $userid
 * @param int $attempt
 * @param int $time
 * @return string grade(mingrade/maxgrade)
 */
function rcontent_grade_details_user_attempt($id, $rcontentid, $userid, $attempt=1, $time=false, $unitid='', $activityid='') {
    global $DB;

    $return = new stdClass();
    $return->grade = "";
    $return->range = "";
    $return->maxattemps = "";
    $return->weight = "";
    $return->url = "";
    $return->description = "";
    $return->totalweight = "";

    $grade = $DB->get_record('rcontent_grades_details', array('id' => $id));
    if ($grade) {
        $return->grade = $grade->grade;
        $return->range = "($grade->mingrade-$grade->maxgrade)";
        $return->maxattempts = '('.$grade->maxattempts.')';
        $return->weight = $grade->weight;
        if (!empty($grade->urlviewresults)) {
            $return->url = rcontent_get_urlviewresults_link($grade->urlviewresults);
        }
        if (!empty($grade->description)) {
            if (strlen($grade->description) > 30) {
                $return->description = '<span title="'.$grade->description.'">'.substr($grade->description,0,27).'...</span>';
            } else {
                $return->description = $grade->description;
            }
        }

        // Take the sumweight for the parent
        $paramssql = array('userid'=>$userid, 'rcontentid'=> $rcontentid, 'attempt' => $attempt);
        $paramssql['unitid'] = ($unitid!='') ? $unitid : 0;
        $paramssql['activityid'] = ($activityid!='') ? $activityid : 0;
        if($totalweight = $DB->get_records('rcontent_grades',$paramssql)) {
            foreach ($totalweight as $tw) {
                $return->totalweight = '('.$tw->sumweights.')';
            }
        }
    }

    return $return;
}

// New function to calculate the parent status depending off the child status
function rcontent_grade_calculate_status ($rcontentid, $userid, $attempt=1, $unitid = 0, $activityid = 0, $starttime = ''){

    global $CFG,$DB;
    //echo "unit: $unitid, activity: $activityid<br>";  //just  for debug
    //get status of the given grade
    $sql_general  = "userid=$userid AND rcontentid=$rcontentid AND attempt=$attempt";
    $sql_general .= ($starttime != "")? " AND starttime = {$starttime}": "";
    $sql_unit     = ($unitid != '')? " AND unitid=$unitid" : " AND unitid=0";
    $sql_activity = ($activityid != '')? " AND activityid=$activityid" : " AND activityid=0";

    if ($status = $DB->get_records_select('rcontent_grades',$sql_general.$sql_unit.$sql_activity)){
        $status = array_pop($status);
        $orig_status = $status->status;
    } else {
        $status = new stdClass();
        $status->status = "";
        $orig_status = $status;
        $orig_status = $status->status = "";
    }
    $return = array('', $orig_status);
    //check if we are calculating for a activity
    if ($activityid != 0){
       $return[0] = $status->status;
       //print_r($return); echo "<br>"; //just for debug mode
       return $return;
    }

    //check if we are calculating for a unit
    if ($unitid != 0 && $activityid == 0) {
        //search for activities status if unit status is diferrent to POR_CORREGIR
        if ($status->status != "POR_CORREGIR"){
            $sql = "userid=$userid AND rcontentid=$rcontentid AND attempt=$attempt AND unitid=$unitid AND activityid <> 0 AND status='POR_CORREGIR'";
            if ($DB->count_records_select('rcontent_grades', $sql) > 0){
                $return[0] = "POR_CORREGIR";
                return $return;
            }
            $return[0] = $status->status;

        } else {
            $return[0] = $status->status;
        }

    }
    // Check if we are calculating for a book
    if ($unitid == 0 && $activityid == 0) {
        // Search for units status
        if ($status->status != "POR_CORREGIR") {
            $sql = "SELECT COUNT(b.status) FROM {rcontent_grades} b WHERE b.userid=$userid AND b.rcontentid=$rcontentid AND b.attempt=$attempt AND b.unitid<>0 AND (b.status = 'POR_CORREGIR' OR EXISTS (SELECT * FROM {rcontent_grades} u WHERE u.userid=$userid AND u.rcontentid=$rcontentid AND u.unitid <> 0 AND u.status='POR_CORREGIR' AND u.attempt=b.attempt))";
            if ($DB->count_records_sql($sql) > 0) {
                $return[0] = "POR_CORREGIR";
                return $return;
            }
            $return[0] = $status->status;

        } else {
            $return[0] = $status->status;
        }

    }
    return $return;

}

/**
 * Load level list from bd table mdl_rcommon_level
 * @return array with the loaded data
 */
function rcontent_level_list() {
    global $CFG, $DB;

    $return[0] = '- '.get_string('level', 'rcontent').' -';

    if ($records = rcommon_level::get_by_format('webcontent')) {
        foreach ($records as $r) {
            $return[$r->id] = $r->name .' ('.$r->code.')';
        }
    }
    return $return;
}

/**
 * Load all books from bd rcommon_books
 * @param int $levelid -> ID of the level
 * @param string $from -> to response in a format or other
 * @return array -> (id=>name)
 */
function rcontent_isbn_list($levelid = '', $from = 'ajax') {
    global $DB;
    $return = array();
    if ($from == 'ajax') {
        $return[] = array('id' => 0, 'name' => '- '.get_string('isbn', 'rcontent').' -');
    }
    if (!empty($levelid)) {
        if ($records = rcommon_book::get_by_level($levelid, 'webcontent')) {
            foreach ($records as $r) {
                if ($from == 'ajax') {
                    $return[] = array('id' => $r->id, 'name' => $r->name, 'group' => $r->publisher);
                } else {
                    if (!isset($return[$r->publisher])) {
                        $return[$r->publisher] = array();
                    }
                    $return[$r->publisher][$r->id] = $r->name;
                }
            }

        }
    }
    return $return;
}

/**
 * Load the units of a determinate book from bd rcommon_books_units
 * @param $bookid int -> ID of the book
 * @param $from string -> for select the array structure of the response
 * @return array -> (id=>name)
 */
function rcontent_unit_list($bookid = '', $from = 'ajax') {
    global $DB;
    $return = array();
    if ($from == 'updateform') {
        $return[0] = '- '.get_string('unit', 'rcontent').' -';
    } else {
        $return[] = array('id' => 0, 'name' => '- '.get_string('unit', 'rcontent').' -');
    }

    if (!empty($bookid)) {
        if ($records = rcommon_unit::get_by_book($bookid)) {
            foreach ($records as $r) {
                if ($from == 'updateform') {
                    $return[$r->id] = $r->name;
                } else {
                    $return[] = array('id' => $r->id, 'name' => $r->name);
                }
            }

        }
    }
    return $return;
}

/**
 * Load the activities of a determinated unit from bd rcommon_books_activities
 * @param $bookid int -> ID of the book
 * @param $unitid int -> ID of the unit
 * @param $from string -> for select the array structure of the response
 * @return array -> (id=>name)
 */
function rcontent_activity_list($bookid = '', $unitid = '', $from = 'ajax') {
    global $DB;
    if ($from == 'updateform') {
        $return[0] = '- '.get_string('activity', 'rcontent').' -';
    } else {
        $return[] = array('id' => 0, 'name' => '- '.get_string('activity', 'rcontent').' -');
    }

    if (!empty($bookid) && !empty($unitid)) {
        if ($records = rcommon_activity::get_by_unit($unitid, $bookid)) {
            foreach ($records as $r) {
                if ($from == 'updateform') {
                    $return[$r->id] = $r->name;
                } else {
                    $return[] = array('id' => $r->id, 'name' => $r->name);
                }
            }
        }
    }
    return $return;
}

/**
 * Insert a note into the error log of the bd rcommon_errors_log
 * @param $action string ->
 * @param $bookis int ->
 * @param $cmid int ->
 * @return int -> ID of the new entry in the log or false if failds
 */
function rcontent_insert_error_log($action, $bookid, $cmid = 0) {
    global $CFG;
    require_once($CFG->dirroot.'/local/rcommon/wslib.php');
    $message = "Bookid: $bookid, Text: ".get_string($action, 'rcontent');
    rcommon_ws_error($action, $message, 'rcontent', $cmid);
}


function rcontent_get_ellapsed_time($time) {
    if (empty($time)) {
        return '00:00:00';
    }
    $segundos   = $time;
    $horas      = intval($segundos / 3600);
    $segundos   = $segundos - ($horas * 3600);
    $horas      = ($horas < 10) ? '0'.$horas : $horas;
    $minutos    = intval($segundos / 60);
    $minutos    = ($minutos < 10) ? '0'.$minutos : $minutos;
    $segundos   = $segundos - ($minutos * 60);
    $segundos   = ($segundos < 10) ? '0'.$segundos : $segundos;
    return $horas.":".$minutos.":".$segundos;
}


function rcontent_get_urlviewresults_link($urlviewresults) {
    if (core_text::strpos($urlviewresults, 'http://') === false && core_text::strpos($urlviewresults, 'https://') === false) {
        $urlviewresults = 'http://'.$urlviewresults;
    }
    return'<a href="'.$urlviewresults.'" target="_blank">'.get_string('rcontent:viewresult', 'rcontent').'</a>';
}

function rcontent_get_uploadscore_link($cmid, $userid, $attempt, $gradeid = false) {
    global $OUTPUT;

    $url = '/mod/rcontent/grade.php?id='.$cmid.'&user='.$userid.'&attempt='.$attempt;
    if ($gradeid) {
        $url .= '&update='.$gradeid;
    }
    $link = new moodle_url($url);
    $action = new popup_action('click', $link, 'update_rcontent', array('height' => 500, 'width' => 600));
    return $OUTPUT->action_link($link, get_string('rcontent:updatescore', 'rcontent'), $action, array('title' => get_string('rcontent:updatescore', 'rcontent')));
}
