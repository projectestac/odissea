<?php

require_once('agora_script_base.class.php');

class script_bigdata extends agora_script_base{

	public $title = 'Export bigdata';
	public $info = "";
	public $cron = false;
	protected $test = false;
	public $cli = true;
	public $api = true;

	public function params(){
		$params = array();
		$params['profilename'] = optional_param('profilename', false, PARAM_TEXT);
		return $params;
	}


	protected function _execute($params = array(), $execute = true){
		global $CFG;
		if (!file_exists($CFG->dirroot.'/local/bigdata/lib.php')) {
			return false;
		}

		if (empty($params['profilename'])) {
			mtrace('No profile selected');
			return false;
		}

		require_once($CFG->dirroot.'/local/bigdata/lib.php');

		return bigdata_export($params['profilename']);
	}

	function is_visible() {
		global $CFG;
		if (!file_exists($CFG->dirroot.'/local/bigdata/lib.php')) {
			return false;
		}
		require_once($CFG->dirroot.'/local/bigdata/lib.php');

		return bigdata_is_enabled() && parent::is_visible();
	}

}
