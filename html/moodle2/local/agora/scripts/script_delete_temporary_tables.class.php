<?php

require_once('agora_script_base.class.php');

class script_delete_temporary_tables extends agora_script_base{

	public $title = 'Esborra taules temporals';
	public $info = "Esborra taules temporals de Moodle";
	public $cron = false;
	protected $test = false;
	public $cli = true;
	public $api = true;
	protected $category = "Utils";

	protected function _execute($params = array(), $execute = true){
		global $DB;

		$time = time() - 60 * 60 * 24; // One day

		$tables = $DB->get_fieldset_sql("SELECT table_name FROM user_tables WHERE temporary='Y'");
		foreach($tables as $table) {
			self::notify('TEMP TABLE FOUND '.$table);

			$backupid = $DB->get_field_sql("SELECT data_default FROM all_tab_columns WHERE table_name = '$table' AND column_name='BACKUPID'");
			$backupid = trim(str_replace('\'', "", $backupid));
			if (!$backupid) {
				self::notify('- Backup id not found');
				self::drop_table($table);
				continue;
			}

			self::notify('- Related backupid '.$backupid);
			$backup = $DB->get_record('backup_controllers', array('backupid' => $backupid));
			if (!$backup) {
				self::notify('- Backup id not found in backup_controllers');
				self::drop_table($table);
			} else if ($backup->timemodified < $time) {
				self::notify('- Too old, deleting!');
				self::drop_table($table);
				continue;
			} else {
				self::notify('- The temp table is not older than one day, not deleting');
			}
		}

		return true;
	}

	private static function drop_table($tablename) {
		global $DB;
		$sql = 'DROP TABLE '.$tablename;
		$DB->execute($sql);
		self::notify('- '.$sql);
	}

}
