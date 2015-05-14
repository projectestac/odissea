<?php

require_once('agora_script_base.class.php');

class script_repair_orphan_assign extends agora_script_base{

	public $title = 'Repair orphan Assignments';
	public $info = "Deletes orphan assignments that are not created in any course";
	public $cron = false;
	public $cli = true;
	public $api = true;
	protected $test = true;


	protected function _execute($params = array(), $execute = true){
		global $DB, $CFG;

        $assignid = $DB->get_fieldset_select('assign', 'id', '');
        foreach ($assignid as $id) {
            $cm = get_coursemodule_from_instance('assign', $id, 0, false, IGNORE_MISSING);
            if (!$cm) {
            	if ($execute) {
            		$DB->delete_records('assign',  array('id'=>$id));
            	}
            	echo "Assign id $id deleted";
            }
        }
        return true;
	}
}