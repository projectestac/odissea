<?php

$hour = idate('H');
if ($hour > 8 || $hour < 2) {
    return;
}

mtrace("Executing Bigdata cron...", "\n");

$now = time();
require_once('lib.php');

$profiles = $DB->get_records('bigdata_profiles');
foreach ($profiles as $profileid => $profile) {

    if (empty($profile->periodicity)) {
        continue;
    }

    $period = explode(' ', $profile->periodicity);
    $value = $period[0];
    $unit = $period[1];

    $lastcronday = mktime(0, 0, 0,
            date("n", $profile->lastcron), date("j", $profile->lastcron), date("Y", $profile->lastcron));
    switch ($unit) {
        case 'D':
            $nextcron = strtotime('+'.$value.' day', $lastcronday);
            break;
        case 'W':
            $nextcron = strtotime('+'.$value.' week', $lastcronday);
            break;
        case 'M':
            $nextcron = strtotime('+'.$value.' month', $lastcronday);
            break;
        default:
            continue;
    }

    if ($now >= $nextcron) {
        mtrace("Profile $profileid", "\n");
        if ( bigdata_export($profileid)) {
            $DB->set_field('bigdata_profiles', 'lastcron', $now);
        }
    }
}


mtrace("Bigdata cron done.", "\n");