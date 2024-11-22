<?php

defined('MOODLE_INTERNAL') || die;

$hassiteconfig = has_capability('moodle/site:config', context_system::instance());

if ($hassiteconfig) {

    $settings = new admin_settingpage(
        'local_alexandriaimporter',
        get_string('pluginname', 'local_alexandriaimporter')
    );

    $ADMIN->add('localplugins', $settings);

    $settings->add(
        new admin_setting_configtext(
            'local_alexandriaimporter/alexandria_url',
            get_string('alexandria_url', 'local_alexandriaimporter'),
            '',
            'https://alexandria.xtec.cat',
            PARAM_URL
        )
    );

    $settings->add(
        new admin_setting_configtext(
            'local_alexandriaimporter/alexandria_token',
            get_string('alexandria_token', 'local_alexandriaimporter'),
            get_string('alexandria_tokendesc', 'local_alexandriaimporter'),
            '',
            PARAM_TEXT
        )
    );

    $checkedyesno = [
        '' => get_string('no'),
        '1' => get_string('yes'),
    ];

    $settings->add(
        new admin_setting_configselect(
            'local_alexandriaimporter/show_description',
            get_string('showdescription', 'local_alexandriaimporter'),
            get_string('showdescriptiondesc', 'local_alexandriaimporter'),
            0,
            $checkedyesno
        )
    );

}
