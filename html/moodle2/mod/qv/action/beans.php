<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * File called from QV player to save students' results
 *
 * @package    mod
 * @subpackage qv
 * @copyright  2011 Departament d'Ensenyament de la Generalitat de Catalunya
 * @author     Sara Arjona Téllez <sarjona@xtec.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
header('Content-type: text/xml;charset=UTF-8');
// Allow from any origin

define('ERROR_BEAN_NOT_DEFINED', 'error_bean_not_defined');
define('ERROR_ASSIGNMENTID_DOES_NOT_EXIST', 'error_assignmentid_does_not_exist');
define('ERROR_DB_INSERT', 'error_db_insert');
define('ERROR_DB_UPDATE', 'error_db_update');
define('ERROR_MAXDELIVER_EXCEEDED', 'error_maxdeliver_exceeded');

require_once("../../../config.php");
require_once('beans.lib.php');

// Globals
$inputbean = get_bean();

$action = isset($inputbean['ID']) ? $inputbean['ID'] : "";
if (!empty($action)) {
    $beanparams = $inputbean['PARAMS'];
}
switch($action) {
    case "add_message":
		$assignmentid = $beanparams['assignmentid'];
		$sectionid = $beanparams['sectionid'];
		$itemid = $beanparams['itemid'];
		$userid = $beanparams['userid'];
		$text = $beanparams['message'];
		$bean = add_message($assignmentid, $sectionid, $itemid, $userid, $text);
		break;
    case "correct_section":
		$assignmentid = $beanparams['assignmentid'];
		$sectionid = $beanparams['sectionid'];
		$responses = isset($beanparams['responses']) ? $beanparams['responses'] : "";
		$scores = isset($beanparams['scores']) ? $beanparams['scores'] : "";
		$bean = correct_section($assignmentid, $sectionid, $responses, $scores);
		break;
    case "save_time":
		$assignmentid = $beanparams['assignmentid'];
		$sectionid = $beanparams['sectionid'];
		$sectiontime = $beanparams['time'];
		// echo correct_section($assignmentid, $sectionid);
		$bean = save_time($assignmentid, $sectionid, $sectiontime);
		break;
    case "deliver_section":
		$assignmentid = $beanparams['assignmentid'];
		$sectionid = $beanparams['sectionid'];
		$sectionorder = isset($beanparams['sectionorder']) ? $beanparams['sectionorder'] : -1;
		$itemorder = isset($beanparams['itemorder']) ? $beanparams['itemorder'] : -1;
		$sectiontime = isset($beanparams['time']) ? $beanparams['time'] : 0;
		$responses = isset($beanparams['responses']) ? $beanparams['responses'] : "";
		$scores = isset($beanparams['scores']) ? $beanparams['scores'] : "";
		$bean = deliver_section($assignmentid, $sectionid, $responses, $scores, $sectionorder, $itemorder, $sectiontime);
		break;
    case "get_messages":
		$assignmentid = $beanparams['assignmentid'];
		$sectionid = $beanparams['sectionid'];
		$bean = get_messages($assignmentid, $sectionid);
		break;
    case "get_section":
		$assignmentid = $beanparams['assignmentid'];
		$sectionid = $beanparams['sectionid'];
		$bean = get_section($assignmentid, $sectionid);
		break;
	case "get_sections":
		$assignmentid = $beanparams['assignmentid'];
		$bean = get_sections($assignmentid);
		break;
	case "save_section":
		$assignmentid = $beanparams['assignmentid'];
		$sectionid = $beanparams['sectionid'];
		$sectionorder = isset($beanparams['sectionorder']) ? $beanparams['sectionorder'] : -1;
		$itemorder = isset($beanparams['itemorder']) ? $beanparams['itemorder'] : -1;
		$sectiontime = isset($beanparams['time']) ? $beanparams['time'] : 0;
		$responses = isset($beanparams['responses']) ? $beanparams['responses'] : "";
		$bean = save_section($assignmentid, $sectionid, $responses, $sectionorder, $itemorder, $sectiontime);
		break;
	case "save_section_teacher":
		$assignmentid = $beanparams['assignmentid'];
		$sectionid = $beanparams['sectionid'];
		$responses = isset($beanparams['responses']) ? $beanparams['responses'] : "";
		$scores = isset($beanparams['scores']) ? $beanparams['scores'] : "";
		$bean = save_section_teacher($assignmentid, $sectionid, $responses, $scores);
		break;
	default:
		$bean = new SimpleXMLElement('<bean/>');
		$bean->addAttribute('id', $action);
		$param = $bean->addChild('param');
		$param->addAttribute('name', 'error');
		$param->addAttribute('value', ERROR_BEAN_NOT_DEFINED);
		break;
}

$xml = $bean->asXML();
echo str_replace('<?xml version="1.0"?>', '<?xml version="1.0" encoding="UTF-8"?>', $xml);
