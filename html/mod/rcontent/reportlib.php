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
        $minactivity = $DB->get_field('rcontent_grades', 'MIN(activityid) AS min_activity', $conditions);

        // Reload all the data but with min unit and activity values
        $params = array(
            'rcontentid' => $rcontentid,
            'userid' => $userid,
            'at' => $at,
            'minunitid' => $minunit,
            'minactivityid' => $minactivity);
        $sql = 'rcontentid= :rcontentid AND userid= :userid AND attempt= :at AND unitid= :minunitid AND activityid= :minactivityid';
        // Filter by status, set filter by sql
        if ($filterby) {
            $params['status'] = $filterby;
            $params['rcontentid2'] = $rcontentid;
            $params['userid2'] = $rcontentid;
            $params['at2'] = $at;
            $params['status2'] = $filterby;
            $params['at3'] = $at;
            $sql .= ' AND (status = :status OR EXISTS
                (SELECT * FROM {rcontent_grades} u
                    WHERE u.rcontentid=:rcontentid2
                        AND u.userid=:userid2
                        AND u.attempt=:at2
                        AND u.unitid <> 0
                        AND u.status=:status2
                        AND u.attempt=:at3
                ))';
        }
        if (!$attempts = $DB->get_records_select('rcontent_grades', $sql, $params, 'timecreated ASC')) {
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