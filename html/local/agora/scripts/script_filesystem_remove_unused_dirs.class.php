<?php

require_once('agora_script_base.class.php');

class script_filesystem_remove_unused_dirs extends agora_script_base {

    public $title = 'Esborra directoris no usats del sistema de fitxers';
    public $info = 'Cerca i esborra els directoris següents al moodledata: cache, filter, lang, localcache, lock, log_rcommon, models, muc i sessions';
    public $cron = false;
    protected $test = true;
    public $cli = true;
    public $api = true;
    protected $category = 'Utils';

    protected function _execute($params = [], $execute = true)
    {
        global $CFG;

        $dirs = [
            'cache',
            'filter',
            'lang',
            'localcache',
            'lock',
            'log_rcommon',
            'models',
            'muc',
            'sessions',
        ];

        $dirs_total = 0;
        $dirs_removed = 0;

        foreach ($dirs as $dir) {

            $path_dir = $CFG->dataroot . '/' . $dir . '/';

            if (is_dir($path_dir)) {

                $dirs_total++;

                system('rm -rf ' . $path_dir, $retval);

                if ($retval == 0) {
                    $dirs_removed++;
                    $this->output('Removed directory successfully: ' . $dir, 'OK');
                } else {
                    $this->output('Could not remove directory: ' . $dir, 'ERROR');
                }
            }
        }

        $this->output('Directories found: ' . $dirs_total, 'INFO');
        $this->output('Directories removed: ' . $dirs_removed, 'INFO');

        return true;
    }
}
