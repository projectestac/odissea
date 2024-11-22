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
 * Alexandria importer
 *
 * @package    local
 * @subpackage alexandriaimporter
 * @copyright  2016 Pau Ferrer Ocaña pau@moodle.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Render search form getting search templates from Alexandria
 *
 * @param array $db Database where to search
 * @param int $searchurl URL where to search.
 * @param bool $selected
 * @throws coding_exception
 * @throws dml_exception
 * @return array Fields submitted to search.
 */
function render_alexandria_searchform($db, $searchurl, $selected = false) {

    $searched = [];

    echo '<div class="row-fluid clearfix">';
    echo '<div class="span8"><h3 class="pull-left">' . core_text::strtotitle($db->searching) . '</h3></div>';
    echo '<div class="span4 text-right">';

    if (get_config('local_alexandriaimporter', 'show_description')) {
        echo '<p><a href="#dbmodal' . $db->id . '" role="button" data-toggle="modal">' . get_string('moreinfo') . '</a></p>';
    }

    echo '<p class="pull-right showhideadv simple"><a href="#" role="button">' . get_string('showadvanced', 'local_alexandriaimporter') . '</a></p>';
    echo '<p class="pull-right showhideadv advanced"><a href="#" role="button">' . get_string('hideadvanced', 'local_alexandriaimporter') . '</a></p>';
    echo '</div></div>';
    echo '<form class="form-search clearfix" method="POST" action="' . $searchurl->out() . '">';

    $patterns = [];
    $replacement = [];

    // Then, generate strings to replace for normal tags.
    foreach ($db->fields as $field) {
        $fieldname = preg_quote($field->name, '/');
        $pattern = "/\[\[$fieldname\]\]/i";

        // Only fields in template.
        if (preg_match($pattern, $db->searchtemplate) > 0) {
            $patterns[] = $pattern;
            $fieldid = 'f_' . $field->id;
            $value = $selected ? optional_param($fieldid, '', PARAM_TEXT) : '';

            if ($selected && !empty($value)) {
                $searched[$field->id] = $value;
            }

            switch ($field->type) {
                case 'text':
                case 'textarea':
                    $replacement[] = '<label class="accesshide" for="' . $fieldid . '">' . $field->name . '</label><input type="text" size="16" id="' . $fieldid . '" name="' . $fieldid . '" value="' . s($value) . '" />';
                    break;
                case 'multimenu':
                case 'menu':
                    $replace = '<label class="accesshide" for="' . $fieldid . '">' . $field->name . '</label><select id="' . $fieldid . '" name="' . $fieldid . '"><option value=""></option>';
                    foreach (explode("\n", $field->param1) as $option) {
                        $option = trim($option);
                        $replace .= '<option value="' . s($option) . '"';

                        if ($option === $value) {
                            // Selected by user.
                            $replace .= ' selected = "selected"';
                        }
                        $replace .= '>' . $option . '</option>';
                    }
                    $replace .= '</select>';
                    $replacement[] = $replace;
                    break;
            }
        }
    }

    $value = $selected && empty($searched) ? optional_param('f_search', '', PARAM_TEXT) : '';

    if ($selected && !empty($value)) {
        $searched['search'] = $value;
    }

    // Hidden fields.
    echo '<input type="hidden" name="dataid" value="' . $db->id . '"/>';
    echo '<div class="simple control-group form-horizontal">
            <label class="control-label" for="f_search"> ' . get_string('search') . '</label>
            <div class="controls">
                <input type="text" size="30" id="f_search" name="f_search" value="' . s($value) . '" />
            </div>
        </div>
        <div class="simple control-group form-horizontal">
            <div class="controls">
                <input type="submit" class="btn btn-primary" value="' . get_string('search') . '"/>
            </div>
        </div>';

    // Actual replacement of the tags.
    echo '<div class="advanced">';
    echo preg_replace($patterns, $replacement, $db->searchtemplate);
    echo '<div class="text-center"><input class="btn btn-primary" type="submit" class="btn btn-active" value="' . get_string('search') . '"/></div>';
    echo '</div>';

    echo '</form>';

    echo '<div id="dbmodal' . $db->id . '" class="modal hide fade">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h3>' . $db->name . '</h3>
      </div>
      <div class="modal-body">' . $db->intro . '</div>
    </div>';

    return $searched;
}

/**
 * Render search results found.
 *
 * @param array $data Database where the search was performed
 * @param array $found Results found.
 * @param int $courseid Course id where to import.
 * @param array $search Search paràmeters
 * @throws coding_exception
 * @throws moodle_exception
 */
function render_search_results($data, $found, $courseid, $search) {

    global $OUTPUT, $CFG;

    echo $OUTPUT->heading(get_string('results', 'local_alexandriaimporter', $data->searching));
    if (!isset($found->results) || count($found->results) == 0) {
        echo $OUTPUT->notification(get_string('noresults', 'local_alexandriaimporter'), 'error');
        return;
    }

    $url = new moodle_url('/local/alexandriaimporter/import.php',
        [
            'id' => $courseid,
            'datatype' => $data->type,
            'fieldid' => $found->fieldid,
        ]
    );
    echo '<div class="accordion" id="accordion">';
    foreach ($found->results as $result) {
        $url->param('recordid', $result->id);
        $url->param('filename', $result->filename);
        echo format_record_contents($result->content, $result->id, $url);
    }
    echo '</div>';

    if ($found->moreresults) {
        echo '<div class="hidden" id="search_values">';
        foreach ($search as $name => $value) {
            echo '<input type="hidden" name="' . $name . '" value="' . $value . '">';
        }
        echo '</div>';
        echo '<button class="btn btn-info edit-btn" id="alexloadmore" onclick="alexandria_load_more(\'' . $CFG->wwwroot . '\', ' . $courseid . ', ' . $data->id . ')">
            <span class="spinner"><i class="fa fa-spinner fa-spin fa-fw"></i></span>'
            . get_string('loadmore', 'local_alexandriaimporter') . '</button>';
    }

    echo '<script src="' . $CFG->wwwroot . '/local/alexandriaimporter/search.js"></script>';

}

/**
 * Format each record to be placed on a Bootstrap accordion.
 *
 * @param string $string String to be formatted
 * @param object $recordid Record to add id's
 * @param string $url To go when importing
 * @throws coding_exception
 * @return string  Formatted string
 */
function format_record_contents($string, $recordid, $url) {
    preg_match("/<h3[^>]*>(.*?)<\/h3>/si", $string, $match);
    $title = $match[1];

    $unsafe = ['/onclick="(.*?)"/is', '/target="(.*?)"/is', '/<script(.*?)<\/script>/is', '/<h3(.*?)<\/h3>/is'];
    $string = preg_replace($unsafe, '', $string);
    $string = str_replace('<a ', '<a target="_blank" ', $string);
    $url->param('name', $title);

    return '<div class="accordion-group">
        <div class="accordion-heading">
            <div class="container-fluid">
                <div class="span10">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#record' . $recordid . '">
                        ' . $title . '
                    </a>
                </div>
                <div class="span2 text-right importbtn">
                    <a class="btn btn-danger edit-btn" href="' . $url->out() . '">' . get_string('import') . '</a>
                </div>
            </div>
        </div>
        <div id="record' . $recordid . '" class="accordion-body collapse">
            <div class="accordion-inner">' . $string . '</div>
        </div>
      </div>';

}

/**
 * Retrieve database from Alexandria to perform searches.
 *
 * @throws coding_exception
 * @throws dml_exception
 * @return array of retrieved databases (only course and scorm ones).
 */
function alexandria_get_databases() {

    global $DB;

    $dbs = call_alexandria_ws('local_alexandria_get_databases');
    $return = [];

    if (empty($dbs) || !count($dbs)) {
        return $return;
    }

    // Return only course and scorm databases.
    foreach ($dbs as $data) {
        switch ($data->type) {
            case 'course':
                $data->searching = get_string($data->type, 'local_alexandriaimporter');
                $return[$data->id] = $data;
                break;
            case 'scorm':
                if ($DB->get_field('modules', 'visible', ['name' => 'scorm'])) {
                    $data->searching = get_string($data->type, 'local_alexandriaimporter');
                    $return[$data->id] = $data;
                }
                break;
        }
    }

    return $return;

}

/**
 * Perform a search on an Alexandria Database.
 *
 * @param int $dataid Id of the database where to search.
 * @param array $search Containing the search parameters.
 * @param int $from From which record we want to fetch.
 * @throws moodle_exception
 * @return array|boolean Objects returned by the search.
 */
function search_in_alexandria($dataid, $search, $from = 0) {

    if (empty($dataid)) {
        return false;
    }

    $paramsnum = 0;
    $params = ['dataid' => $dataid];

    if (!empty($search['search'])) {
        $params['search'] = $search['search'];
    } else {
        unset($search['search']);
        foreach ($search as $id => $value) {
            if (!empty($value)) {
                $params['fields[' . $id . '][id]'] = $id;
                $params['fields[' . $id . '][value]'] = $value;
                $paramsnum++;
            }
        }
    }

    if (empty($params['search']) && $paramsnum === 0) {
        return false;
    }

    $params['from'] = $from;
    return call_alexandria_ws('local_alexandria_search', $params);

}

/**
 * Downloads a resource form Alexandria.
 *
 * @param int $fieldid ID known by Alexandria to know where the file is placed.
 * @param int $recordid ID Record from the database.
 * @param string $filename Filename to name the downloaded data.
 * @return boolean Success/Fail
 */
function alexandria_download_resource($fieldid, $recordid, $filename) {

    $path = make_temp_directory('backup') . '/' . $filename;
    $url = get_alexandria_data()->url . '/local/alexandria/data/download.php?fid=' . $fieldid . '&rid=' . $recordid;

    $fp = fopen($path, 'w');
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    fclose($fp);

    if ($status === 200) {
        return true;
    }

    unlink($path);
    return false;

}

/**
 * Places the downloaded data into a draft file and redirects to restore.
 *
 * @param int $courseid Course where all begin (where to return).
 * @param string $filename Filename of the downloaded data.
 * @throws file_exception
 * @throws moodle_exception
 * @throws stored_file_creation_exception
 */
function alexandria_import_course($courseid, $filename) {

    global $CFG, $USER;

    $contextid = context_course::instance($courseid)->id;
    $fs = get_file_storage();

    $record = new stdClass();
    $record->contextid = $contextid;
    $record->userid = $USER->id;
    $record->component = 'user';
    $record->filearea = 'draft';
    $record->itemid = 0;
    $record->filename = $filename;
    $record->filepath = '/alexandriacourse/';

    if ($fs->file_exists($record->contextid, $record->component, $record->filearea, 0, $record->filepath, $record->filename)) {
        $file = $fs->get_file($record->contextid, $record->component, $record->filearea, 0, $record->filepath, $record->filename);
        $file->delete();
    }

    $file = $fs->create_file_from_pathname($record, $CFG->tempdir . '/backup/' . $filename);

    unlink($CFG->tempdir . '/backup/' . $filename);

    $restoreurl = new moodle_url('/backup/restore.php',
        [
            'pathnamehash' => $file->get_pathnamehash(),
            'contenthash' => $file->get_contenthash(),
            'contextid' => $contextid,
        ]
    );

    redirect($restoreurl);

}

function alexandria_import_scorm($course, $filename, $name) {

    global $CFG, $USER, $DB;

    require_once($CFG->dirroot . '/course/modlib.php');
    $fs = get_file_storage();

    $coursecontextid = context_course::instance($course->id)->id;
    $cfgscorm = get_config('scorm');

    $scorm = new StdClass();
    $scorm->modulename = 'scorm';
    $scorm->module = $DB->get_field('modules', 'id', ['name' => $scorm->modulename]);
    $scorm->name = empty($name) ? get_string('importedscorm', 'local_alexandriaimporter') : $name;
    $scorm->intro = '';
    $scorm->introformat = FORMAT_MOODLE;
    $scorm->cmidnumber = null;
    $scorm->visible = 1;
    $scorm->section = 0;
    $scorm->width = $cfgscorm->framewidth;
    $scorm->height = $cfgscorm->frameheight;

    // Add file.
    $draftitemid = 0;
    file_prepare_draft_area($draftitemid, $coursecontextid, 'mod_scorm', 'package', 0, ['subdirs' => 0, 'maxfiles' => 1]);
    $usercontextid = context_user::instance($USER->id)->id;

    $record = new StdClass();
    $record->contextid = $usercontextid;
    $record->userid = $USER->id;
    $record->component = 'user';
    $record->filearea = 'draft';
    $record->itemid = $draftitemid;
    $record->filename = $filename;
    $record->filepath = '/';

    $file = $fs->create_file_from_pathname($record, $CFG->tempdir . '/backup/' . $filename);
    unlink($CFG->tempdir . '/backup/' . $filename);
    $scorm->packagefile = $draftitemid;

    // Add module.
    $modinfo = add_moduleinfo($scorm, $course);

    $modurl = new moodle_url('/mod/scorm/view.php', ['id' => $modinfo->coursemodule]);
    redirect($modurl);

}

/**
 * Perform a WS call connecting to Alexandria.
 *
 * @param string $function Function name to perform.
 * @param array $params Params to be sent.
 * @throws moodle_exception
 * @return mixed Data returned by the WS / error message.
 */
function call_alexandria_ws($function, $params = []) {

    global $CFG, $OUTPUT;
    require_once $CFG->dirroot . '/webservice/rest/lib.php';

    if (!alexandria_importer_is_enabled()) {
        throw new moodle_exception('Alexandria importer is not enabled', 'local_alexandriaimporter');
    }

    $hub = get_alexandria_data();

    $serverurl = $hub->url . '/local/alexandria/webservice/server.php';
    $client = new webservice_rest_client($serverurl, $hub->token, 'json');

    // DEBUG
    /*
    $params['wsfunction'] = $function;
    $params['wstoken'] = $hub->token;
    $url = new moodle_url($serverurl, $params);
    echo $url->out();
    */

    try {
        $result = $client->call($function, $params);
        if (isset($result->exception)) {
            throw new moodle_exception($result->errorcode . ': ' . $result->message);
        }
        return $result;
    } catch (Exception $e) {
        $errormessage = $e->getMessage();
        echo $OUTPUT->notification($errormessage, 'error');
        // DEBUG
        // print_object($e);
        return false;
    }
}
