<?php

require_once('agora_script_base.class.php');

class script_fmo_migration extends agora_script_base{

    public $title = 'Migració FMO';
    public $info = "Executa els canvis necessaris per adaptar-se al FMO";
    public $cron = false;
    protected $test = false;
    public $api = true;
    public $cli = true;
    protected $category = "Upgrade";

    protected function _execute($params = array(), $execute = true) {
        global $CFG, $DB, $OUTPUT;

        unset_config('apligestlogpath');

        $rcommonlogdir = get_admin_datadir_folder();
        set_config('data_store_log', $rcommonlogdir, 'rcommon');

        purge_all_caches();
        return true;
    }

}
