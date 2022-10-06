<?php

require_once('agora_script_base.class.php');

class script_test_cli extends agora_script_base{

	public $title = 'Test CLI commands';
	public $info = "";
	public $cron = false;
	public $api = false;
	protected $test = false;
	protected $category = "Test";

	protected function _execute($params = array(), $execute = true){
		global $CFG;

		$command = 'local/agora/scripts/test-cli.php';
		run_cli($command, false, false, false);

        return true;
	}

}
