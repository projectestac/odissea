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
 * Internal library of functions for module jclic
 *
 * All the jclic specific functions, needed to implement the module
 * logic, should go here. Never include this file from your lib.php!
 *
 * @package    mod
 * @subpackage jclic
 * @copyright  2011 Departament d'Ensenyament de la Generalitat de Catalunya
 * @author     Sara Arjona Téllez <sarjona@xtec.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/filelib.php");

    /**
    * Get an array with the languages
    *
    * @return array   The array with each language.
    */
    function jclic_get_languages(){
        $tmplanglist = get_string_manager()->get_list_of_translations();
        $langlist = array();
        foreach ($tmplanglist as $lang=>$langname) {
            if (substr($lang, -5) == '_utf8') {   //Remove the _utf8 suffix from the lang to show
                $lang = substr($lang, 0, -5);
            }
            $langlist[$lang]=$langname;
        }
        return $langlist;
    }

    /**
    * Get an array with the skins
    *
    * @return array   The array with each skin.
    */
    function jclic_get_skins(){
      return array('@default.xml' => 'default','@blue.xml' => 'blue','@orange.xml' => 'orange','@green.xml' => 'green','@simple.xml' => 'simple', '@mini.xml' => 'mini');
    }

    /**
    * Get an array with the file types
    *
    * @return array   The array with each file type
    */
    function jclic_get_file_types(){
        $filetypes =  array(JCLIC_FILE_TYPE_LOCAL => get_string('filetypelocal', 'jclic'));
        $filetypes[JCLIC_FILE_TYPE_EXTERNAL] = get_string('filetypeexternal', 'jclic');
        return $filetypes;
    }


    /**
     * Display the jclic intro
     *
     */
    function jclic_view_intro($jclic, $cm) {
        global $OUTPUT;
        echo $OUTPUT->box_start('generalbox boxaligncenter', 'intro');
        echo format_module_intro('jclic', $jclic, $cm->id);
        echo $OUTPUT->box_end();
    }

    /**
     * Display the jclic dates
     *
     * Prints the jclic start and end dates in a box.
     */
    function jclic_view_dates($jclic, $cm, $timenow=null) {
        global $OUTPUT;

        if (!$jclic->timeavailable && !$jclic->timedue) {
            return;
        }

        if (is_null($timenow)) $timenow = time();

        echo $OUTPUT->box_start('generalbox boxaligncenter jclicdates', 'dates');
        if ($jclic->timeavailable) {
            echo '<div class="title-time">'.get_string('availabledate','assignment').': </div>';
            echo '<div class="data-time">'.userdate($jclic->timeavailable).'</div>';
        }
        if ($jclic->timedue) {
            echo '<div class="title-time">'.get_string('duedate','assignment').': </div>';
            echo '<div class="data-time">'.userdate($jclic->timedue).'</div>';
        }
        echo $OUTPUT->box_end();
    }

    /**
     * Display the jclic applet
     *
     */
    function jclic_view_applet($jclic, $context, $ispreview=false, $timenow=null) {
        global $OUTPUT, $PAGE, $CFG, $USER;

        if (is_null($timenow)) $timenow = time();
        $isopen = (empty($jclic->timeavailable) || $jclic->timeavailable < $timenow);
        $isclosed = (!empty($jclic->timedue) && $jclic->timedue < $timenow);
        $sessions = jclic_get_sessions($jclic->id,$USER->id);
        $attempts=sizeof($sessions);
        if ($ispreview) {
            //
        } else if ( $attempts > 0 || $isopen ) {
            echo '<br><A href="#" onclick="window.open(\'action/student_results.php?id='.$context->instanceid.'\',\'JClic\',\'navigation=0,toolbar=0,resizable=1,scrollbars=1,width=700,height=400\');" >'.get_string('show_my_results', 'jclic').'</A>';
        }

        if (!$ispreview && !$isopen){
            echo $OUTPUT->box(get_string('notopenyet', 'jclic', userdate($jclic->timeavailable)), 'generalbox boxaligncenter jclicdates');
        } else if (!$ispreview && $isclosed ) {
            echo $OUTPUT->box(get_string('expired', 'jclic', userdate($jclic->timedue)), 'generalbox boxaligncenter jclicdates');
        } else {
            if ($jclic->maxattempts<0 || $attempts < $jclic->maxattempts){
                echo '<div id="jclic_applet" style="text-align:center;padding-top:10px;">';
                echo '</div>';
                if(isset($CFG->jclic_pluginjs) && !empty($CFG->jclic_pluginjs)){
                    echo '<script type="text/javascript" src="'.$CFG->jclic_pluginjs.'"></script>';
                } else {
                    $PAGE->requires->js('/mod/jclic/jclicplugin.js');
                }
                $PAGE->requires->js('/mod/jclic/jclic.js');
                $params = get_object_vars($jclic);
                $params['jclic_url'] = jclic_get_url($jclic, $context);
                $params['jclic_path'] = jclic_get_server();
                $params['jclic_service'] = jclic_get_path().'/mod/jclic/action/beans.php';
                $params['jclic_user'] = $USER->id;
                $params['jclic_jarbase'] = $CFG->jclic_jarbase;
                $params['jclic_lap'] = $CFG->jclic_lap;
                $params['jclic_protocol'] = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? 'https' : 'http';
                $PAGE->requires->js_init_call('M.mod_jclic.init', array($params));
            }else{
                echo $OUTPUT->box(get_string('msg_noattempts', 'jclic'), 'generalbox boxaligncenter');
            }
            jclic_view_dates($jclic, $context, $timenow);
        }
    }

    function jclic_get_url($jclic, $context){
        global $CFG;

        $url = '';
        if (jclic_is_valid_external_url($jclic->url)) {
            $url = $jclic->url;
        } else {
            $fs = get_file_storage();
            $files = $fs->get_area_files($context->id, 'mod_jclic', 'content', 0, 'sortorder DESC, id ASC', false);
            if (count($files) < 1) {
                //resource_print_filenotfound($resource, $cm, $course);
                die;
            } else {
                $file = reset($files);
                unset($files);
            }

            $path = '/'.$context->id.'/mod_jclic/content/0'.$file->get_filepath().$file->get_filename();
            $url = file_encode_url($CFG->wwwroot.'/pluginfile.php', $path, false);
        }

        return $url;
    }

    /**
    * Get moodle server
    *
    * @return string                myserver.com:port
    */
    function jclic_get_server() {
        global $CFG;

        if (!empty($CFG->wwwroot)) {
            $url = parse_url($CFG->wwwroot);
        }

        if (!empty($url['host'])) {
            $hostname = $url['host'];
        } else if (!empty($_SERVER['SERVER_NAME'])) {
            $hostname = $_SERVER['SERVER_NAME'];
        } else if (!empty($_ENV['SERVER_NAME'])) {
            $hostname = $_ENV['SERVER_NAME'];
        } else if (!empty($_SERVER['HTTP_HOST'])) {
            $hostname = $_SERVER['HTTP_HOST'];
        } else if (!empty($_ENV['HTTP_HOST'])) {
            $hostname = $_ENV['HTTP_HOST'];
        } else {
            notify('Warning: could not find the name of this server!');
            return false;
        }

        if (!empty($url['port'])) {
            $hostname .= ':'.$url['port'];
        } else if (!empty($_SERVER['SERVER_PORT'])) {
            if ($_SERVER['SERVER_PORT'] != 80 && $_SERVER['SERVER_PORT'] != 443) {
                $hostname .= ':'.$_SERVER['SERVER_PORT'];
            }
        }

        return $hostname;
    }


    /**
    * Get moodle path
    *
    * @return string                /path_to_moodle
    */
    function jclic_get_path() {
        global $CFG;

            $path = '/';
        if (!empty($CFG->wwwroot)) {
            $url = parse_url($CFG->wwwroot);
                    if (array_key_exists('path', $url)){
                            $path = $url['path'];
                    }
        }
        return $path;
    }

    function jclic_get_filemanager_options(){
        $filemanager_options = array();
        $filemanager_options['return_types'] = 3;  // 3 == FILE_EXTERNAL & FILE_INTERNAL. These two constant names are defined in repository/lib.php
        $filemanager_options['accepted_types'] = 'archive';
        $filemanager_options['maxbytes'] = 0;
        $filemanager_options['subdirs'] = 0;
        $filemanager_options['maxfiles'] = 1;
        return $filemanager_options;
    }

    function jclic_set_mainfile($data) {
        $filename = null;
        $fs = get_file_storage();
        $cmid = $data->coursemodule;
        $draftitemid = $data->url;

        $context = context_module::instance($cmid);
        if ($draftitemid) {
            file_save_draft_area_files($draftitemid, $context->id, 'mod_jclic', 'content', 0, jclic_get_filemanager_options());
        }

        $files = $fs->get_area_files($context->id, 'mod_jclic', 'content', 0, 'sortorder', false);
        if (count($files) == 1) {
            // only one file attached, set it as main file automatically
            $file = reset($files);
            file_set_sortorder($context->id, 'mod_jclic', 'content', 0, $file->get_filepath(), $file->get_filename(), 1);
            $filename = $file->get_filename();
        }
        return $filename;
    }

    function jclic_is_valid_external_url($url){
        return preg_match('/(http:\/\/|https:\/\/|www).*\/*.jclic.zip(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?$/i', $url);
    }

    function jclic_is_valid_file($filename){
        return preg_match('/.jclic.zip$/i', $filename);
    }


////////////////////////////////////////////////////////////////////////////////
// Activity sessions                                                          //
////////////////////////////////////////////////////////////////////////////////


    /**
    * Get user sessions
    *
    * @return array			[0=>session1,1=>session2...] where session1 is an array with keys: id,score,totaltime,starttime,done,solved,attempts. First sessions are newest.
    * @param object $jclicid	The jclic to get sessions
    * @param object $userid		The user id to get sessions
    */
    function jclic_get_sessions($jclicid, $userid) {
        global $CFG, $DB;

        $sessions=array();
        jclic_normalize_date();
        $sql = "SELECT js.*
                FROM {jclic} j, {jclic_sessions} js
                WHERE j.id=js.jclicid AND js.jclicid=? AND js.user_id=?
                ORDER BY js.session_datetime";
        $params = array($jclicid, $userid);

        if($rs = $DB->get_records_sql($sql, $params)){
            $i = 0;
            foreach($rs as $session){
                    $activity = jclic_get_activity($session);
                    $activity->attempts=$i+1;
                    $sessions[$i++]=$activity;
            }
        }
        return $sessions;
    }

    /**
    * Get session activities
    *
    * @return array			[0=>act0,1=>act1...] where act0 is an array with keys: activity_id,activity_name,num_actions,score,activity_solved,qualification, total_time. First activity are oldest.
    * @param string $session_id		The session id to get actitivies
    */
    function jclic_get_activities($session_id) {
        global $DB;

        $activities = array();
        if($rs = $DB->get_records('jclic_activities', array('session_id'=>$session_id), 'activity_id')){
            $i=0;
            foreach($rs as $activity){
                $activities[$i++]=$activity;
            }
        }
        return $activities;
    }


    /**
    * Get information about activities of specified session
    *
    * @return array		Array has these keys id,score,totaltime,starttime,done,solved,attempts
    * @param object $session	The session object
    */
    function jclic_get_activity($session) {
        global $CFG, $DB;

        $activity = new stdClass();
        $activity->starttime=$session->session_datetime;
        $activity->session_id=$session->session_id;
        if($rs = $DB->get_record_sql("SELECT AVG(ja.qualification) as qualification, SUM(ja.total_time) as totaltime
                                 FROM {jclic_activities} ja
                                 WHERE ja.session_id='$session->session_id'")){
                $activity->score = round($rs->qualification,0);
                $activity->totaltime = jclic_format_time($rs->totaltime);
        }
        if ($rs = $DB->get_record_sql("SELECT COUNT(*) as done
                            FROM (SELECT DISTINCT ja.activity_name
                                  FROM  {jclic_activities} ja
                                  WHERE ja.session_id='$session->session_id') t")){
            $activity->done=$rs->done;
        }

        if ($rs = $DB->get_record_sql("SELECT COUNT(*) as solved
                                FROM (SELECT DISTINCT ja.activity_name
                                      FROM {jclic_activities} ja
                                      WHERE ja.session_id='$session->session_id' AND ja.activity_solved=1) t")){
            $activity->solved=$rs->solved;
        }

        return $activity;
    }

    /**
    * Print a table data with all session activities
    *
    * @param string $session_id The session identifier
    */
    function jclic_get_session_activities_html($session_id){
        $table_html='';

        // Import language strings
        $stractivity = get_string("activity", "jclic");
        $strsolved = get_string("solved", "jclic");
        $stractions = get_string("actions", "jclic");
        $strtime = get_string("time", "jclic");
        $strscore  = get_string("score", "jclic");
        $stryes = get_string("yes");
        $strno = get_string("no");


        // Print activities for each session
        $activities = jclic_get_activities($session_id);
        if (sizeof($activities)>0){
            $table = new html_table();
            $table->attributes = array('class'=>'jclic-activities-table');
            $table->head = array($stractivity, $strsolved, $stractions, $strtime, $strscore);
            foreach($activities as $activity){
                $act_percent=$activity->num_actions>0?round(($activity->score/$activity->num_actions)*100,0):0;
                $row = new html_table_row();
                $row->attributes = array('class' => ($activity->activity_solved?'jclic-activity-solved':'jclic-activity-unsolved') ) ;
                $row->cells = array($activity->activity_name, ($activity->activity_solved?$stryes:$strno), $activity->score.'/'.$activity->num_actions.' ('.$act_percent.'%)', jclic_time2str($activity->total_time), $activity->qualification.'%');
                $table->data[] = $row;
            }
            $table_html = html_writer::table($table);
        }
        return $table_html;
    }

    /**
     * Convert specified time (in milliseconds) to XX' YY'' format
     *
     * @param type $time time (in milliseconds) to format
     */
    function jclic_format_time($time){
        return floor($time/60)."' ".round(fmod($time,60))."''";
    }

    /**
    * Get user activity summary
    *
    * @return object	session object with score, totaltime, activities done and solved and attempts information
    */
    function jclic_get_sessions_summary($jclicid, $userid) {
        global $DB;

        jclic_normalize_date();
        $sessions_summary = new stdClass();
        $sessions_summary->attempts = '';
        $sessions_summary->score = '';
        $sessions_summary->totaltime = '';
        $sessions_summary->starttime = '';
        $sessions_summary->done = '';
        $sessions_summary->solved = '';

        if ($rs = $DB->get_record_sql("SELECT COUNT(*) AS attempts, AVG(t.qualification) AS qualification, SUM(t.totaltime) AS totaltime, MAX(t.starttime) AS starttime
                            FROM (SELECT AVG(ja.qualification) AS qualification, SUM(ja.total_time) AS totaltime, MAX(js.session_datetime) AS starttime
                                  FROM {jclic} j, {jclic_sessions} js, {jclic_activities} ja
                                  WHERE j.id=js.jclicid AND js.user_id='$userid' AND js.jclicid=$jclicid AND ja.session_id=js.session_id
                                  GROUP BY js.session_id) t")){
                $sessions_summary->attempts=$rs->attempts;
                $sessions_summary->score=round($rs->qualification,0);
                $sessions_summary->totaltime = jclic_format_time($rs->totaltime);
                $sessions_summary->starttime=$rs->starttime;
        }

        if ($rs = $DB->get_record_sql("SELECT COUNT(*) as done
                            FROM (SELECT DISTINCT ja.activity_name
                                  FROM {jclic} j, {jclic_sessions} js, {jclic_activities} ja
                                  WHERE j.id=js.jclicid AND js.user_id='$userid' AND js.jclicid=$jclicid AND js.session_id=ja.session_id)  t")){
                $sessions_summary->done=$rs->done;
        }
        if ($rs = $DB->get_record_sql("SELECT COUNT(*) as solved
                            FROM (SELECT DISTINCT ja.activity_name
                                  FROM {jclic} j, {jclic_sessions} js, {jclic_activities} ja
                                  WHERE j.id=js.jclicid AND js.user_id='$userid' AND js.jclicid=$jclicid AND js.session_id=ja.session_id AND ja.activity_solved=1) t")){
        $sessions_summary->solved=$rs->solved;
        }
        return $sessions_summary;
    }

    /**
    * Format time from milliseconds to string
    *
    * @return string Formated string [x' y''], where x are the minutes and y are the seconds.
    * @param int $time	The time (in ms)
    */
    function jclic_time2str($time){
        return round($time/60000,0)."' ".round(fmod($time,60000)/1000,0)."''";
    }

    /**
     * Workaround to fix an Oracle's bug when inserting a row with date
     */
    function jclic_normalize_date () {
        global $CFG, $DB;
        if ($CFG->dbtype == 'oci'){
            $sql = "ALTER SESSION SET NLS_DATE_FORMAT='YYYY-MM-DD HH24:MI:SS'";
            $DB->execute($sql);
        }
    }
