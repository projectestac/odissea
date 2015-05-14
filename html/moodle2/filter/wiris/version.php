<?php
//
//  Copyright (c) 2011, Maths for More S.L. http://www.wiris.com
//  This file is part of Moodle WIRIS Plugin.
//
//  Moodle WIRIS Plugin is free software: you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation, either version 3 of the License, or
//  (at your option) any later version.
//
//  Moodle WIRIS Plugin is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License
//  along with Moodle WIRIS Plugin. If not, see <http://www.gnu.org/licenses/>.
//

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2015041000;
$plugin->release = '3.53.3.1155';
$plugin->requires =  2011120511;
$plugin->maturity = MATURITY_STABLE;
$plugin->component = 'filter_wiris';
$plugin->dependencies = array();
global $CFG, $PAGE, $DB;

// If uninstall method is enabled, dependencies are disabled.
// cyclical dependencies prevents uninstall.
$dbman = $DB->get_manager();
if ($dbman->table_exists('config_plugins')) {
	if (!get_config('filter_wiris', 'uninstall')) {
			if ($CFG->version>=2012120300) { // Moodle 2.4 and upwards.
				$editors = array_flip(explode(',', $CFG->texteditors));
				// If atto and tinymce editors installed choose first for dependencies check. Atto plugin not supported for 2.6
				if (array_key_exists('atto', $editors) && array_key_exists('tinymce', $editors)  && $CFG->version>=2014051200) {
					$plugin->dependencies = ($editors['atto'] < $editors['tinymce']) ?
											array('atto_wiris' => 2015040900):
											array('tinymce_tiny_mce_wiris' => 2015040900);
				} else { // Default dependencies atto for Moodle 2.7 and upwards.
					$plugin->dependencies = ($CFG->version>=2014051200) ?
											array('atto_wiris' => 2015040900):
											array('tinymce_tiny_mce_wiris'=>2015040900);
				}
			}
		}


	// Minimal quizzes version compatible with 3.5 plugin is 2014081900.

	if ($CFG->version>=2013111800) {
		$pluginmanager = core_plugin_manager::instance();
		if ($plugininfo = $pluginmanager->get_plugin_info('qtype_wq')) {
			if ($plugininfo->versiondisk < 2014081900 ) {
				$PAGE->requires->js('/filter/wiris/js/installmessage.js',false);
			}
			$plugin->dependencies = array_merge($plugin->dependencies, array('qtype_wq' => 2014081900));
		}
	} else if ($CFG->version>=2012120300) { // core_plugin_manager not implemented since 2.6
		require_once($CFG->libdir . '/pluginlib.php');
		$pluginmanager = plugin_manager::instance();
		if ($plugininfo = $pluginmanager->get_plugin_info('qtype_wq')) {
			if ($plugininfo->versiondisk < 2014081900 ) {
				$PAGE->requires->js('/filter/wiris/js/installmessage.js',false);
			}
			$plugin->dependencies = array_merge($plugin->dependencies, array('qtype_wq' => 2014081900));
		}
	}
}
