<?php


if ($hassiteconfig) {

    global $CFG;

    include_once($CFG->dirroot.'/local/agora/lib.php');

    if (is_xtecadmin() || (!is_agora() && is_siteadmin())) {
        $ADMIN->add('root', new admin_category('agora', 'Àgora'));
        if (isset($_COOKIE['agora_debug']) && $_COOKIE['agora_debug'] == 1) {
            $ADMIN->add('agora', new admin_externalpage('agora_debug', get_string('disable') . ' ' . get_string('debug', 'admin'), $CFG->wwwroot . '/local/agora/debug.php?agora_debug=0'));
        } else {
            $ADMIN->add('agora', new admin_externalpage('agora_debug', get_string('enable') . ' ' . get_string('debug', 'admin'), $CFG->wwwroot . '/local/agora/debug.php?agora_debug=1'));
        }
        $ADMIN->add('agora', new admin_externalpage('agora_scripts', get_string('agora_scripts', 'local_agora'), $CFG->wwwroot . '/local/agora/scripts/index.php'));
    }

    $detected = get_config('local_agora', 'adware_detected');
    if (!empty($detected)) {
        $ADMIN->add('root', new admin_externalpage('agora_adware', get_string('clean_adware', 'local_agora'), $CFG->wwwroot . '/local/agora/adware/index.php'));
    } else {
        $ADMIN->add('server', new admin_externalpage('agora_adware', get_string('detect_adware', 'local_agora'), $CFG->wwwroot . '/local/agora/adware/index.php'));
    }

}
