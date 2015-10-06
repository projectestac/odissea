<?php

require_once('agora_script_base.class.php');

class script_filesystem_cleanup extends agora_script_base{

	public $title = 'Neteja el sistema de fitxers';
	public $info = "Elimina fitxers de paperera, orfes i tot allò innecessari";
	public $cron = false;
	protected $test = true;
	public $cli = true;
	public $api = true;



	protected function _execute($params = array(), $execute = true) {
		global $DB, $CFG;
		$this->output('Clean temp files', 'INFO');
		$task = \core\task\manager::get_scheduled_task('file_temp_cleanup_task');
		$this->output('Clean trash files', 'INFO');
		$task = \core\task\manager::get_scheduled_task('file_trash_cleanup_task');
		$this->output('Clean files not existing in filesystem', 'INFO');

		// FROM https://github.com/elearningstudio/moodle-report_filetrash/blob/master/classes/compare.php
		$directory = $CFG->dataroot . '/filedir';
        $fsfiles = self::get_files($directory);

        $config = get_config('backup');
        $directory = $config->backup_auto_destination;
        if (!empty($directory)) {
            $backupfiles = $this->get_files($directory);
            $fsfiles = array_merge($fsfiles, $backupfiles);
            unset($backupfiles);
        }

        $files = $DB->get_fieldset_sql('SELECT DISTINCT contenthash from {files}');
        $dbfiles = array();
        foreach ($files as $file) {
            $dbfiles[$file] = $file;
        }

        $deletefromdb = self::diff_files($dbfiles, $fsfiles);
        if (!empty($deletefromdb)) {
        	$this->output($deletefromdb);
        }

		$this->output('Clean files not existing in table', 'INFO');

        $deletefromfs = self::diff_files($fsfiles, $dbfiles);
        if (!empty($deletefromfs)) {
        	$this->output($deletefromfs);
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
            $indexedorphans[] = $filename;
        }
        return $indexedorphans;
	}

}
