<?php

function bigdata_export($profilename) {
    global $CFG;

    require_once($CFG->dirroot.'/local/bigdata/exportlib.php');

    $bigdata = new bigdata($profilename);
    return $bigdata->export('bigdata', $CFG->siteidentifier);
}

function bigdata_is_enabled() {
    return (boolean) get_config('local_bigdata', 'enabled');
}
