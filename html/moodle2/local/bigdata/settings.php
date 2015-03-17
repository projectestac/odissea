<?php

if ($hassiteconfig) {
    $isenabled = get_config('local_bigdata', 'enabled');
    if ($isenabled && is_xtecadmin()) {
        $ADMIN->add('root', new admin_externalpage('bigdata', get_string('pluginname', 'local_bigdata'), $CFG->wwwroot . '/local/bigdata/index.php'));
    }

}

if (is_xtecadmin()) {
	$settings = new admin_settingpage('local_bigdata', get_string('pluginname', 'local_bigdata'));
    $ADMIN->add('localplugins', $settings);


    $checkedyesno = array('0' => get_string('no'), '1' => get_string('yes')); // not nice at all
    $settings->add(new admin_setting_configselect('local_bigdata/enabled', get_string('enabled', 'local_bigdata'),
            get_string('enabled_desc', 'local_bigdata'), '', $checkedyesno));

    $settings->add(new admin_setting_configselect('local_bigdata/from_time', get_string('from_time', 'local_bigdata'),
            get_string('from_time_desc', 'local_bigdata'), 2, range(0, 23)));
    $settings->add(new admin_setting_configselect('local_bigdata/to_time', get_string('to_time', 'local_bigdata'),
            get_string('to_time_desc', 'local_bigdata'), 8, range(0, 23)));
}
