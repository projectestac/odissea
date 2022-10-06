<?php

function get_profile_next_cron($profile) {

    static $daynames = array('', 'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');

    if (empty($profile->periodicity)) {
        return false;
    }

    $period = explode(' ', $profile->periodicity);
    $value = $period[0];
    $unit = $period[1];

    if ($profile->lastcron) {
        $lastcronday = mktime(0, 0, 0,
                date("n", $profile->lastcron), date("j", $profile->lastcron), date("Y", $profile->lastcron));
        switch ($unit) {
            case 'D':
                $nextcron = strtotime('+'.$value.' day', $lastcronday);
                break;
            case 'W':
                $nextcron = strtotime('+'.$value.' week', $lastcronday);
                break;
            case 'M':
                $nextcron = strtotime('+'.$value.' month', $lastcronday);
                break;
            default:
                return false;
        }
        if ($nextcron < time()) {
            $nextcron = time();
        }
    } else {
        $nextcron = time();
    }

    $weekday = date('N', $nextcron);
    if($profile->weekday > 0 && $profile->weekday != $weekday) {
        $nextcron = strtotime('next '.$daynames[$profile->weekday], $nextcron);
    }

    return $nextcron;
}


function show_profiles() {
    global $DB, $OUTPUT, $CFG;
    $profiles = $DB->get_records('bigdata_profiles');

    if (empty($profiles)) {
        return;
    }

    $table = new html_table();
    $table->tablealign = 'center';
    $table->head = array(get_string('name'), get_string('courses'), get_string('roles'), get_string('excludedusers', 'local_bigdata'),
         get_string('tablefields', 'local_bigdata'), get_string('periodicity', 'local_bigdata'), get_string('next'), get_string('actions'));
    $table->align = array('left', 'center', 'center', 'center', 'center', 'center', 'center');

    foreach ($profiles as $profile) {
        $row = array();
        $row[] = $profile->name;
        $row[] = !empty($profile->courses) ? count(explode(',', $profile->courses)) : get_string('all');
        $row[] = !empty($profile->roles) ? count(explode(',', $profile->roles)) : get_string('all');
        $row[] = !empty($profile->excludedusers) ? count(explode(',', $profile->excludedusers)) : get_string('none');
        $row[] = !empty($profile->tablefields) ? count(explode(',', $profile->tablefields)) : get_string('default');

        if (!empty($profile->periodicity)) {
            $period = explode(' ', $profile->periodicity);
            $value = $period[0];
            $unit = $period[1];
            switch ($unit) {
                case 'D':
                    $period = $value . ' ' . get_string('days');
                    break;
                case 'W':
                    $period = $value . ' ' . get_string('weeks');
                    break;
                case 'M':
                    $period = $value . ' ' . get_string('months');
                    break;
                default:
                    continue;
            }

            $nextcron = get_profile_next_cron($profile);

            if ($nextcron <= time()) {
                $nextcron = get_string('today');
            } else {
                $nextcron = userdate($nextcron, get_string('strftimedaydate', 'langconfig'));
            }
            $row[] = $period;
            $row[] = $nextcron;
        } else {
            $row[] = get_string('never');
            $row[] = get_string('never');
        }

        $editlink = new moodle_url($CFG->wwwroot.'/local/bigdata/profile.php', array('action' => 'edit', 'id' => $profile->id));
        $deletelink = new moodle_url($CFG->wwwroot.'/local/bigdata/profile.php', array('id' => $profile->id, 'action' => 'delete'));
        $row[] = $OUTPUT->action_icon($editlink, new pix_icon('t/edit', get_string('edit_profile', 'local_bigdata', $profile->name))).' | '.
                 $OUTPUT->action_icon($deletelink, new pix_icon('t/delete', get_string('delete_profile', 'local_bigdata', $profile->name)),
                 new confirm_action(get_string('delete_profile_confirm', 'local_bigdata', $profile->name)));

        $table->data[] = $row;
    }
    echo html_writer::table($table);

}

function bigdata_get_profile_from_form($data) {
    $profile = new StdClass();
    $profile->name = $data->name;
    $profile->courses = isset($data->courses) ? implode(',', $data->courses) : '';
    $profile->roles = isset($data->roles) ? implode(',', $data->roles) : '';

    if (!empty($data->excludedusers)) {
        // Replace \n by commas
        $excluded = implode(',', explode("\n", $data->excludedusers));
        // Real explode
        $excluded = explode(',', $excluded);
        $excludedclean = array();
        foreach ($excluded as $exclude) {
            $excludedclean[] = trim($exclude);
        }
        $profile->excludedusers = implode(',', $excludedclean);
    } else {
        $profile->excludedusers = '';
    }
    $profile->tablefields = isset($data->tablefields) ? implode(',', $data->tablefields) : '';

    $profile->periodicity = ($data->periodicity > 0 && $data->periodicity_unit != '') ? $data->periodicity.' '.$data->periodicity_unit : 0;
    $profile->weekday = $data->weekday;
    $profile->savedirectory = $data->savedirectory;
    return $profile;
}

function bigdata_get_formdata_from_profile($profile) {
    $data = array();
    $data['name'] = $profile->name;
    $data['courses'] = explode(',', $profile->courses);
    $data['roles'] = explode(',', $profile->roles);
    $data['excludedusers']  = $profile->excludedusers;
    $data['tablefields'] = explode(',', $profile->tablefields);
    if (empty($profile->periodicity)) {
        $data['periodicity'] = 0;
        $data['periodicity_unit'] = '';
    } else {
        $period = explode(' ', $profile->periodicity);
        $data['periodicity'] = $period[0];
        $data['periodicity_unit'] = $period[1];
    }
    $data['weekday']  = $profile->weekday;
    $data['savedirectory']  = $profile->savedirectory;
    return $data;
}

function bigdata_profile_insert($data) {
    global $DB;
    $profile = bigdata_get_profile_from_form($data);
    return $DB->insert_record('bigdata_profiles', $profile);
}

function bigdata_profile_update($id, $data) {
    global $DB;
    $profile = bigdata_get_profile_from_form($data);
    $profile->id = $id;
    return $DB->update_record('bigdata_profiles', $profile);
}

function bigdata_profile_delete($id) {
    global $DB;
    return $DB->delete_records('bigdata_profiles', array('id' => $id));
}

