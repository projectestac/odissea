<?php

require_once('agora_script_base.class.php');

class script_advices extends agora_script_base{

	public $title = 'Posa un avís';
	public $info = "Posa un avís als Moodles seleccionats. \n
		Les dates han de tenir format YYYYmmdd (0 o buit per indicar l'infinit).\n
		Deixar el text buit per desactivar.";
	public $cron = false;
	protected $test = false;
	public $cli = true;
	public $api = true;
	protected $category = "Utils";

	public function params(){
		$params = array();
		$params['text'] = optional_param('text', false, PARAM_TEXT);
		$params['inici'] = optional_param('inici', 0, PARAM_INT);
		$params['final'] = optional_param('final', 0, PARAM_INT);
		$params['admins'] = optional_param('admins', false, PARAM_BOOL);
		return $params;
	}


	protected function _execute($params = array(), $execute = true) {
		global $CFG;
		require_once($CFG->dirroot.'/theme/xtec2/lib.php');
		$configname = $params['admins'] ? 'admin_alert': 'agora_alert';
		if (empty($params['text'] )) {
			unset_config($configname.'_message', 'theme_xtec2');
			unset_config($configname.'_start', 'theme_xtec2');
			unset_config($configname.'_end', 'theme_xtec2');
		} else {
			set_config($configname.'_message', $params['text'], 'theme_xtec2');
			set_config($configname.'_start', $params['inici'], 'theme_xtec2');
			set_config($configname.'_end', $params['final'], 'theme_xtec2');
		}
		theme_xtec2_clean_cache();
		return true;
	}

}
