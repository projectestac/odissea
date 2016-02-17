<?php

function bigdata_export($profilename) {
    global $CFG;

    require_once($CFG->dirroot.'/local/bigdata/exportlib.php');

    $bigdata = new bigdata($profilename);
    return $bigdata->export('bigdata', $CFG->siteidentifier);
}

function bigdata_is_enabled() {
    $task = \core\task\manager::get_scheduled_task('\local_bigdata\task\export');
    if ($task) {
        return !$task->get_disabled();
    }
    return false;
}
