<?php

// This file keeps track of upgrades to
// the choice module
//
// Sometimes, changes between versions involve
// alterations to database structures and other
// major things that may break installations.
//
// The upgrade function in this file will attempt
// to perform all the necessary actions to upgrade
// your older installation to the current version.
//
// If there's something it cannot do itself, it
// will tell you what you need to do.
//
// The commands in here will all be database-neutral,
// using the methods of database_manager class
//
// Please do not forget to use upgrade_set_timeout()
// before any action that may take longer time to finish.

function xmldb_local_agora_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < 2014022400) {
    	$DB->set_field('course', 'format', 'simple', array('format' => 'senzill'));
        upgrade_plugin_savepoint(true, 2014022400, 'local', 'agora');
    }

    if ($oldversion < 2014121100) {
        $DB->delete_records('events_handlers', array('eventname' => 'user_logout', 'component' => 'mod_chat'));
        upgrade_plugin_savepoint(true, 2014121100, 'local', 'agora');
    }

    if ($oldversion < 2015011400) {
        $rcommonlogdir = get_admin_datadir_folder();
        set_config('data_store_log', $rcommonlogdir, 'rcommon');

        upgrade_plugin_savepoint(true, 2015011400, 'local', 'agora');
    }

    if ($oldversion < 2015050400) {
        // Preconfigure airnotifier
        $config = get_config('message');
        $providers = $DB->get_records('message_providers');
        foreach ($providers as $provider) {
            $componentproviderbase = $provider->component.'_'.$provider->name;
            foreach (array('loggedin', 'loggedoff') as $state) {
                $linepref = '';
                $componentproviderstate = $componentproviderbase.'_'.$state;
                $name = 'message_provider_'.$provider->component.'_'.$provider->name.'_'.$state;
                if (isset($config->$name) && !empty($config->$name)) {
                    $value = explode(',', $config->$name);
                    $value[] = 'airnotifier';
                    $value = implode(',', $value);
                    set_config($name, $value, 'message');
                }
            }
        }

        upgrade_plugin_savepoint(true, 2015050400, 'local', 'agora');
    }

    if ($oldversion < 2015051900) {
        $DB->set_field('block', 'visible', 0, array('name' => 'participants'));
        $DB->set_field('block', 'visible', 0, array('name' => 'myprofile'));
        $DB->set_field('block', 'visible', 0, array('name' => 'mnet_hosts'));

        upgrade_plugin_savepoint(true, 2015051900, 'local', 'agora');
    }



    return true;
}


