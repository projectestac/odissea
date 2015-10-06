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


function local_bigdata_cron() {
    global $DB;

    $config = get_config('local_bigdata');

    $hour = idate('H');
    if (!$config->enabled || $hour < $config->from_time || $hour > $config->to_time) {
        return;
    }

    mtrace("Executing Bigdata cron...", "\n");

    $now = time();
    require_once('lib.php');
    require_once('locallib.php');

    $profiles = $DB->get_records('bigdata_profiles');
    foreach ($profiles as $profile) {

        $nextcron = get_profile_next_cron($profile);
        if (empty($nextcron)) {
            continue;
        }
        if ($nextcron <= time()) {
            mtrace("Profile $profile->name", "\n");
            if (bigdata_export($profile->name)) {
                $DB->set_field('bigdata_profiles', 'lastcron', $now, array('id' => $profile->id));
            }
        }
    }

    mtrace("Bigdata cron done.", "\n");
}