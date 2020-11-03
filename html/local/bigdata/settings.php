<?php

if ($hassiteconfig) {
    require_once($CFG->dirroot . '/local/bigdata/lib.php');
    $isenabled = bigdata_is_enabled();
    if ($isenabled && is_xtecadmin()) {
        $ADMIN->add('root', new admin_externalpage('bigdata', get_string('pluginname', 'local_bigdata'), $CFG->wwwroot . '/local/bigdata/index.php'));
    }
}
