<?php

require_once('agora_script_base.class.php');

/**
 * This script allows you to define moodle settings, including new
 * setting from a previous upgrade
 *
 * @copyright  2015 Ferran Recio
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class script_autoset_settings extends agora_script_base{

	public $title = 'Desa els paràmetres per defecte';
	public $info = "Desa els paràmetres nous amb el seu valor per defecte ";
	public $cron = false;
	protected $test = true;
	public $cli = true;
	public $api = true;



	protected function _execute($params = array(), $execute = true) {
		global $CFG;
		require_once($CFG->libdir.'/adminlib.php');
		$adminroot = admin_get_root(); // need all settings
		$entries = array_keys($adminroot->children);
		$return = true;
        foreach ($entries as $entry) {
            $return = $this->autoset_settings_recursive($adminroot->children[$entry], $execute);
            if (!$return) {
            	break;
            }
        }
		if ($execute) {
			purge_all_caches();
		}
		return $return;
	}

	/**
	 * pregunta les variables (és qu fa la feina)
	 * @param  object  $node        el node a mirar
	 * @param  string  $path        el path dins l'arbre de params
	 * @return void
	 */
	private function autoset_settings_recursive ($node, $execute, $path = "") {
		if ($node instanceof admin_category) {
	        $entries = array_keys($node->children);
	        foreach ($entries as $entry) {
	            $ok = $this->autoset_settings_recursive($node->children[$entry], $execute, $path.'/'.$node->name);
	            if (!$ok) {
	            	return false;
	            }
	        }
	    } else if ($node instanceof admin_settingpage) {
	        $adminroot = admin_get_root();
	        $showheader = true;
	        foreach ($node->settings as $setting) {
	        	// If no is set
	            if (is_null($setting->get_setting())) {
	            	if ($showheader) {
		        		$this->output($node->visiblename.' {'.$path.'}', "");
		        		$showheader = false;
		        	}
	                $fullname = $setting->get_full_name();
	                if (array_key_exists($fullname, $adminroot->errors)) {
	                    $data = $adminroot->errors[$fullname]->data;
	                } else {
	                    $data = $setting->get_setting();
	                    if (is_null($data)) {
	                        $data = $setting->get_defaultsetting();
	                    }
	                }
	                $valuetype = (is_array($data)) ? 'array' : 'string';
	                $output = $fullname.' ';
	                // Posem el valor
	                if ($execute) {
	                	$res = $setting->write_setting($data);
	                } else {
	                	$res = "";
	                }
	                if (empty($res)) {
	                    $output .= " -> ";
	                    if ($valuetype == 'array') {
	                        $output .= "\n";
	                        $output .= print_r($data, true);
	                    } else {
	                        $output .= $data;
	                    }
	                    $this->output($output, 'OK');
	                } else {
	                    $output .= $res;
	                    $this->output($output, 'ERROR');
	                    return false;
	                }
	            }
	        }
	    }
	    return true;
	}

}
