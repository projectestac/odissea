<?php

/**
 * Returns an array of reports to which the current user has access to.
 * @return array reports are ordered as they should be for display in tabs.
 */
function rcontent_report_list() {
    global $DB;
    static $reportlist = null;
    if (!is_null($reportlist)) {
        return $reportlist;
    }

    $reportdirs = core_component::get_plugin_list('rcontent');

    // Add any reports, which are on disc but not in the DB, on the end.
    foreach ($reportdirs as $reportname => $notused) {
        $reportlist[] = $reportname;
    }
    return $reportlist;
}