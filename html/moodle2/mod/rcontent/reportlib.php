<?php

function rcontent_report_user_attempts($rcontentid, $userid, $filterby = false) {
    global $DB;

    $rcontentusersatempts = array();

    $attempt = rcontent_get_last_attempt($rcontentid, $userid);
    for ($at = 1; $at <= $attempt; $at++) {
        // Test if min values are the same that we are going to show, if not change it with min ones
        $conditions = array('rcontentid' => $rcontentid, 'userid' => $userid, 'attempt' => $at);
        $minunit = $DB->get_field('rcontent_grades', 'MIN(unitid) AS min_unit', $conditions);

        $conditions = array('rcontentid' => $rcontentid, 'userid' => $userid, 'attempt' => $at, 'unitid' => $minunit);
        $rcontentusermin = $DB->get_record('rcontent_grades', $conditions, 'MIN(unitid) AS min_unit, MIN(activityid) AS min_activity');

        // Reload all the data but with min unit and activity values
        $sql = "rcontentid=$rcontentid AND userid=$userid AND attempt=$at AND unitid=$rcontentusermin->min_unit AND activityid=$rcontentusermin->min_activity";
        // Filter by status, set filter by sql
        if ($filterby) {
            $sql .= " AND (status = '".$filterby."' OR EXISTS (SELECT * FROM {rcontent_grades} u WHERE u.rcontentid={$rcontentid} AND u.userid=$userid AND u.attempt=$at AND u.unitid <> 0 AND u.status='{$filterby}' AND u.attempt={$at}";
            if ($userrol[0]->shortname == 'student') {
                $sql .= " AND u.userid = ".$USER->id;
            }
            $sql .= "))";
        }
        if (!$attempts = $DB->get_records_select('rcontent_grades', $sql, null, 'timecreated ASC')) {
            continue;
        }
        $rcontentusersatempts = array_merge($rcontentusersatempts, $attempts);
    }

    return $rcontentusersatempts;
}

function rcontent_report_get_attempt_link($cmid, $attempt) {
    $link = '<a href="report.php?id='.$cmid;
    if (!empty($attempt->unitid)) {
        $link .= '&b='.$attempt->unitid;
        if (!empty($attempt->activityid)) {
            $link .= '&c='.$attempt->activityid;
        }
    }
    $link .= '&user='.$attempt->userid.'&attempt='.$attempt->attempt.'">'.$attempt->attempt.'</a>';
    return $link;
}