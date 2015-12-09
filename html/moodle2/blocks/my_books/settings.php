<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    if (false) {
        //TODO abertranb confirmar que sigui necessari
        //delete all rcontent my_books out add entries
        if ($module = $DB->get_record('modules', array('name' => 'rcontent'), 'id')){
            if ($cs = $DB->get_record('course_sections', array('course' => 1, 'section' => 2), 'id')){
                if ($cms = $DB->get_records_select('course_modules', 'course = 1 AND module = '.$module->id.' AND section = '.$cs->id, array(), 'id, instance')){
                    include_once($CFG->dirroot.'/mod/rcontent/lib.php');
                    foreach ($cms as $cm){
                        rcontent_delete_instance($cm->instance);
                        delete_records('course_modules', 'id', $cm->id);
                    }
                }
            }
        }
    }

    // Set how to open the viewer
    $options = array('0' => get_string('samewindow', 'block_my_books'), '1' => get_string('popup', 'block_my_books')); // not nice at all
    $settings->add(new admin_setting_configselect('mybooks/viewer_opening', get_string('viewertypeopen', 'block_my_books'),
        get_string('viewertypeopeninfo', 'block_my_books'), '1', $options));

    // Add credentials button
    $settings->add(new admin_setting_configcheckbox('mybooks/addkey', get_string('key_setting', 'block_my_books'),
    		get_string('key_setting_info', 'block_my_books'), 1));
}
