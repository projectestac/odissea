<?php
// If site is allowed to use Marsupial
if ($hassiteconfig) {
	if (is_xtecadmin() || (!is_agora() && is_siteadmin())) {
		$ADMIN->add('root', new admin_category('agora', 'Àgora'));
        global $CFG;
        if (isset($_COOKIE['agora_debug']) && $_COOKIE['agora_debug'] == 1) {
        	$ADMIN->add('agora', new admin_externalpage('agora_debug', get_string('disable') . ' ' . get_string('debug', 'admin'), $CFG->wwwroot . '/local/agora/debug.php?agora_debug=0'));
        } else {
        	$ADMIN->add('agora', new admin_externalpage('agora_debug', get_string('enable') . ' ' . get_string('debug', 'admin'), $CFG->wwwroot . '/local/agora/debug.php?agora_debug=1'));
        }
        $ADMIN->add('agora', new admin_externalpage('agora_scripts', get_string('agora_scripts','local_agora'), $CFG->wwwroot . '/local/agora/scripts/index.php'));
    }

    $detected = get_config('local_agora', 'adware_detected');
    if (!empty($detected)) {
        $ADMIN->add('root', new admin_externalpage('agora_adware', get_string('clean_adware', 'local_agora'), $CFG->wwwroot . '/local/agora/adware/index.php'));
    } else {
        $ADMIN->add('server', new admin_externalpage('agora_adware', get_string('detect_adware', 'local_agora'), $CFG->wwwroot . '/local/agora/adware/index.php'));
    }

    //****************** SETTINGS ******************//
    $settings = new admin_settingpage('local_agora', get_string('pluginname', 'local_agora'));
    $ADMIN->add('localplugins', $settings);

    /*
    if (is_xtecadmin() || (!is_agora() && is_siteadmin())) {
        $settings->add(new admin_setting_heading('mailer', get_string('mailer', 'local_agora'), ''));
        require_once ($CFG->dirroot.'/local/agora/mailer/mailsender.class.php');
        $checkedyesno = array(''=>get_string('no'), '1'=>get_string('yes')); // not nice at all

        $settings->add(new admin_setting_configselect('apligestmail', get_string('apligestmail', 'local_agora'), '', 1, $checkedyesno));

        $settings->add(new admin_setting_configtext('mailheader', get_string('mailheader', 'local_agora'), '', '', PARAM_TEXT));

        $settings->add(new admin_setting_configtext('local_agora/environment_url', get_string('environment_url', 'local_agora'),
            get_string('environment_url_desc', 'local_agora', $CFG->apligestenv), '' , PARAM_URL));

        $settings->add(new admin_setting_configselect('apligestlog', get_string('apligestlog', 'local_agora'), '', '', $checkedyesno));
        $settings->add(new admin_setting_configselect('apligestlogdebug', get_string('apligestlogdebug', 'local_agora'), '', '', $checkedyesno));

        $default = get_admin_datadir_folder('log', false);
        $settings->add(new admin_setting_configtext('apligestlogpath', get_string('apligestlogpath', 'local_agora'), '', $default, PARAM_TEXT));
    }
    */
}
