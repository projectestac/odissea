<?php

require_once('agora_script_base.class.php');

class script_filesystem_cleanup extends agora_script_base{

    public $title = 'Neteja el sistema de fitxers';
    public $info = "Elimina fitxers de paperera, orfes i tot allò innecessari";
    public $cron = false;
    protected $test = true;
    public $cli = true;
    public $api = true;
    protected $category = "Check and repair";

    protected function _execute($params = array(), $execute = true) {
        global $DB, $CFG;
        if ($execute) {
            $this->output('Clean temp files');
            $task = \core\task\manager::get_scheduled_task('file_temp_cleanup_task');

            $this->output('Clean trash files');
            $task = \core\task\manager::get_scheduled_task('file_trash_cleanup_task');
        }

        //Start doing the diffs!

        // FROM https://github.com/elearningstudio/moodle-report_filetrash/blob/master/classes/compare.php
        $directory = $CFG->dataroot . '/filedir';
        $fsfiles = self::get_files($directory);

        /*$config = get_config('backup');
        $directory = $config->backup_auto_destination;
        if (!empty($directory)) {
            $backupfiles = $this->get_files($directory);
            $fsfiles = array_merge($fsfiles, $backupfiles);
            unset($backupfiles);
        }*/

        $files = $DB->get_fieldset_sql('SELECT DISTINCT contenthash from {files}');
        $dbfiles = array();
        foreach ($files as $file) {
            $dbfiles[$file] = $file;
        }

        $this->output('Clean files not existing in filesystem');
        $deletefromdb = self::diff_files($dbfiles, $fsfiles);
        if (!empty($deletefromdb)) {
            if ($execute) {
                $this->output(' -> not implemented, only showing...', 'INFO');
                foreach ($deletefromdb as $file) {
                   // $DB->delete_records('files', array('contenthash' => $file));
                   $this->output(" -> $file");
                }
            } else {
                foreach ($deletefromdb as $file) {
                   $this->output(" -> $file");
                }
            }
        } else {
            $this->output('No files to delete', 'OK');
        }

        $this->output('Clean files not existing in table');

        $deletefromfs = self::diff_files($fsfiles, $dbfiles);
        if (!empty($deletefromfs)) {
            if ($execute) {
                $this->delete_files_from_filesystem($deletefromfs);
            } else {
                foreach ($deletefromfs as $file) {
                   $this->output(" -> $file");
                }
            }
        } else {
            $this->output('No files to delete', 'OK');
        }

        return true;
    }

    private static function get_files($directory) {
        $iterator = new RecursiveIteratorIterator(
                        new RecursiveDirectoryIterator($directory), RecursiveIteratorIterator::CHILD_FIRST);
        $filenames = array();

        foreach ($iterator as $fileinfo) {
            if ($fileinfo->isFile()) {
                $file = (string) $fileinfo->getFilename();
                $filenames[$file] = $file;
            }
        }
        return $filenames;
    }

    private function delete_files_from_filesystem($filenames) {
        $fs = get_file_storage();
        foreach ($filenames as $filehash) {
            $fs->deleted_file_cleanup($filehash);
            $this->output(" -> Delete $filehash");
        }
    }

    private static function diff_files($origin, $minus) {
        if (empty($origin) || empty($minus)) {
            return false;
        }
        $indexedorphans = array();

        $orphans = array_diff_key($origin, $minus);
        foreach ($orphans as $filename) {
            if ($filename == 'warning.txt') {
                continue;
            }
            $indexedorphans[$filename] = $filename;
        }
        return $indexedorphans;
    }

}
