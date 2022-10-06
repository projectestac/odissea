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
 * This file contains the definition for the library class for snap submission plugin.
 *
 * @package   assignsubmission_snap
 * @copyright 2020 Sara Arjona <sara@moodle.com> and Joan Guillén <jguille2@xtec.cat>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once($CFG->dirroot.'/mod/assign/submission/snap/lib.php');

/**
 * Library class for snap submission plugin extending submission plugin base class.
 *
 * @package   assignsubmission_snap
 * @copyright 2020 Sara Arjona <sara@moodle.com> and Joan Guillén <jguille2@xtec.cat>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
class assign_submission_snap extends assign_submission_plugin {

    /**
     * Get the name of the snap submission plugin.
     * @return string
     */
    public function get_name(): string {
        return get_string('snap', 'assignsubmission_snap');
    }

    /**
     * Get the default setting for Snap! submission plugin
     *
     * @param MoodleQuickForm $mform The form to add elements to
     * @return void
     */
    public function get_settings(MoodleQuickForm $mform) {
        global $CFG, $COURSE, $SESSION;

        $distrosInfo = $this->get_snapdistros();
        $distroCodes = $distrosInfo['distroCodes'];
        $distros = array();
        foreach ($distrosInfo['snapDistros'] as $distro) {
            $distros[$distro[0]] = $distro[1]." - ".$distro[2];
        }

        $name = get_string('snapdistro', 'assignsubmission_snap');
        $mform->addElement('select', 'assignsubmission_snap_snapdistro',
                $name, $distros);
        if ($this->assignment->has_instance()) {
            if (in_array($this->get_config('snapdistro'), $distroCodes)) {
                $mform->setDefault('assignsubmission_snap_snapdistro', $this->get_config('snapdistro'));
            }
        }
        $mform->addHelpButton('assignsubmission_snap_snapdistro',
                              'snapdistro_helpbutton',
                              'assignsubmission_snap');
        $mform->hideIf('assignsubmission_snap_snapdistro', 'assignsubmission_snap_enabled', 'notchecked');

        $name = get_string('cloud', 'assignsubmission_snap');
        $mform->addElement('advcheckbox', 'assignsubmission_snap_cloudenabled',
                $name, get_string('cloud_enable', 'assignsubmission_snap'), null, array(0,1));
        $mform->setDefault('assignsubmission_snap_cloudenabled', 0);
        $admincloudfeatures = get_config('assignsubmission_snap', 'cloud');
        if ($admincloudfeatures == 0) {
            $mform->disabledIf('assignsubmission_snap_cloudenabled', null);
        } elseif ($this->assignment->has_instance()) {
            $mform->setDefault('assignsubmission_snap_cloudenabled', $this->get_config('cloudenabled'));
        } elseif ($admincloudfeatures == 2) {
            $mform->setDefault('assignsubmission_snap_cloudenabled', 1);
        }
        $mform->addHelpButton('assignsubmission_snap_cloudenabled',
                              'cloud_helpbutton',
                              'assignsubmission_snap');
        $mform->hideIf('assignsubmission_snap_cloudenabled', 'assignsubmission_snap_enabled', 'notchecked');

        $name = get_string('langsnap', 'assignsubmission_snap');
        $mform->addElement('advcheckbox', 'assignsubmission_snap_langmoodle',
                $name, get_string('langmoodle', 'assignsubmission_snap'), null, array(0,1));
        if ($this->assignment->has_instance()) {
            $mform->setDefault('assignsubmission_snap_langmoodle', $this->get_config('langmoodle'));
        }
        $mform->addHelpButton('assignsubmission_snap_langmoodle',
                              'lang_helpbutton',
                              'assignsubmission_snap');
        $mform->hideIf('assignsubmission_snap_langmoodle', 'assignsubmission_snap_enabled', 'notchecked');

    }

    /**
     * Save the settings for Snap! submission plugin
     *
     * @param stdClass $data
     * @return bool
     */
    public function save_settings(stdClass $data) {

        $this->set_config('snapdistro', $data->assignsubmission_snap_snapdistro);
        $this->set_config('cloudenabled', $data->assignsubmission_snap_cloudenabled);
        $this->set_config('langmoodle', $data->assignsubmission_snap_langmoodle);
        return true;

    }

    /**
     * Add form elements for settings.
     *
     * @param mixed $submission can be null
     * @param MoodleQuickForm $mform
     * @param stdClass $data
     * @return true if elements were added to the form
     */
    public function get_form_elements($submission, MoodleQuickForm $mform, stdClass $data) {

        $xmlproject = $this->get_xmlproject($submission);
        if (!$xmlproject) {
            $template = $this->get_xmlproject_template();
            if ($template) {
                $xmlproject = $template;
            }
        }

        // Add the Snap! iframe.
        $mform->addElement('hidden', 'snap_xmlproject', $xmlproject);
        $mform->setType('snap_xmlproject', PARAM_RAW);

        $html = $this->get_view_snapframe($submission->userid, $submission->attemptnumber, true, $xmlproject, '100%', '560px', true);

        $snapDistro = $this->get_snapdistros()['distroSelected'][1];
        $mform->addElement('header', 'snapProject', get_string('snap_project', 'assignsubmission_snap')." - ".$snapDistro);
        $mform->addElement('html', $html, $this->get_name(), null, null);

        return true;
    }

    /**
     * Save data to the database and trigger plagiarism plugin,
     * if enabled, to scan the uploaded content via events trigger.
     *
     * @param stdClass $submission
     * @param stdClass $data
     * @return bool
     */
    public function save(stdClass $submission, stdClass $data): bool {
        global $DB, $USER;

        $params = [
            'context' => context_module::instance($this->assignment->get_course_module()->id),
            'courseid' => $this->assignment->get_course()->id,
            'objectid' => $submission->id,
            'other' => array(
                'content' => trim($data->snap_xmlproject),
                'pathnamehashes' => [],
            )
        ];

        if (!empty($submission->userid) && ($submission->userid != $USER->id)) {
            $params['relateduserid'] = $submission->userid;
        }
        if ($this->assignment->is_blind_marking()) {
            $params['anonymous'] = 1;
        }

        // Trigger assessable_uploaded event.
        $event = \assignsubmission_snap\event\assessable_uploaded::create($params);
        $event->trigger();

        // Get the group name as other fields are not transcribed in the logs and this information is important.
        $groupname = null;
        $groupid = 0;
        if (empty($submission->userid) && !empty($submission->groupid)) {
            $groupname = $DB->get_field('groups', 'name', ['id' => $submission->groupid], MUST_EXIST);
            $groupid = $submission->groupid;
        } else {
            $params['relateduserid'] = $submission->userid;
        }

        // Adapt $params to be used for the submisssion_xxxxx events.
        unset($params['objectid']);
        unset($params['other']);
        $params['other'] = array(
            'submissionid' => $submission->id,
            'submissionattempt' => $submission->attemptnumber,
            'submissionstatus' => $submission->status,
            'groupid' => $groupid,
            'groupname' => $groupname
        );

        $snapsubmission = $this->get_snap_submission($submission->id);
        if ($snapsubmission) {
            // Update existing Snap! submission.
            $snapsubmission->snap_xmlproject = $data->snap_xmlproject;
            $status = $DB->update_record('assignsubmission_snap', $snapsubmission);
            // Trigger submission updated event.
            $params['objectid'] = $snapsubmission->id;
            $event = \assignsubmission_snap\event\submission_updated::create($params);
            $event->set_assign($this->assignment);
            $event->trigger();
        } else {
            // Create a new Snap! submission.
            $snapsubmission = new stdClass();
            $snapsubmission->snap_xmlproject = $data->snap_xmlproject;
            $snapsubmission->submission = $submission->id;
            $snapsubmission->assignment = $this->assignment->get_instance()->id;
            $snapsubmission->id = $DB->insert_record('assignsubmission_snap', $snapsubmission);
            $status = $snapsubmission->id > 0;
            // Trigger submission created event.
            $params['objectid'] = $snapsubmission->id;
            $event = \assignsubmission_snap\event\submission_created::create($params);
            $event->set_assign($this->assignment);
            $event->trigger();
        }

        return $status;
    }

    /**
     * Remove a submission.
     *
     * @param stdClass $submission The submission.
     * @return boolean
     */
    public function remove(stdClass $submission): bool {
        global $DB;

        $submissionid = $submission ? $submission->id : 0;
        if ($submissionid) {
            $DB->delete_records('assignsubmission_snap', ['submission' => $submissionid]);
        }

        return true;
    }

    /**
     * Display Snap! result in the submission status table.
     *
     * @param stdClass $submission
     * @param bool $showviewlink - If the summary has been truncated set this to true
     * @return string
     */
    public function view_summary(stdClass $submission, & $showviewlink): string {
        $html = '';

        $snapsubmission = $this->get_snap_submission($submission->id);
        if ($snapsubmission) {
            // Only shows the Snap! tutton and loads the Snap! source.
            // It links to the fullscreen project, loading the project with the first link click.
            $showviewlink = false;
            $xmlproject = $this->get_xmlproject($submission);
            $html = $this->get_view_snapframe($submission->userid, $submission->attemptnumber,
                false, $xmlproject, '100%', '600px', false);
        }
        return $html;
    }

    /**
     * Produce a list of files suitable for export that represent this submission.
     *
     * @param stdClass $submission - For this is the submission data
     * @param stdClass $user - This is the user record for this submission
     * @return array - return an array of files indexed by filename
     */
    public function get_files(stdClass $submission, stdClass $user): array {
        global $DB;

        $files = [];

        $snapsubmission = $this->get_snap_submission($submission->id);
        if ($snapsubmission) {
            $filename = get_string('snapfilename', 'assignsubmission_snap');
            $files[$filename] = [$snapsubmission->snap_xmlproject];
        }

        return $files;
    }

    /**
     * The assignment has been deleted - remove the plugin specific data.
     *
     * @return bool
     */
    public function delete_instance(): bool {
        global $DB;

        $DB->delete_records('assignsubmission_snap',
                            ['assignment' => $this->assignment->get_instance()->id]);

        return true;
    }

    /**
     * Is this assignment plugin empty?
     *
     * @param stdClass $submission
     * @return bool
     */
    public function is_empty(stdClass $submission): bool {
        $snapsubmission = $this->get_snap_submission($submission->id);

        return empty($snapsubmission->snap_xmlproject);
    }

    /**
     * Determine if a submission is empty.
     *
     * This is distinct from is_empty in that it is intended to be used to
     * determine if a submission made before saving is empty.
     *
     * @param stdClass $data The submission data
     * @return bool
     */
    public function submission_is_empty(stdClass $data): bool {
        return empty($data->snap_xmlproject);
    }

    /**
     * Get file areas returns a list of areas this plugin stores files.
     *
     * @return array - An array of fileareas (keys) and descriptions (values)
     */
    public function get_file_areas(): array {
        // For now, this plugin doesn't store any file.
        return [];
    }

    /**
     * Copy the student's submission from a previous submission.
     * Used when a student opts to base their resubmission on the last submission.
     *
     * @param stdClass $sourcesubmission
     * @param stdClass $destsubmission
     * @return bool True
     */
    public function copy_submission(stdClass $sourcesubmission, stdClass $destsubmission): bool {
        global $DB;

        // Copy the assignsubmission_snap record.
        $snapsubmission = $this->get_snap_submission($sourcesubmission->id);
        if ($snapsubmission) {
            unset($snapsubmission->id);
            $snapsubmission->submission = $destsubmission->id;
            $DB->insert_record('assignsubmission_snap', $snapsubmission);
        }
        return true;
    }

    /**
     * Return a list of the text fields that can be imported/exported by this plugin.
     *
     * @return array An array of field names and descriptions. (name=>description, ...)
     */
    public function get_editor_fields(): array {
        return ['snap' => get_string('pluginname', 'assignsubmission_snap')];
    }

    /**
     * Get the saved text content from the editor.
     *
     * @param string $name
     * @param int $submissionid
     * @return string
     */
    public function get_editor_text($name, $submissionid): string {
        if ($name == 'snap') {
            $snapsubmission = $this->get_snap_submission($submissionid);
            if ($snapsubmission) {
                return $snapsubmission->snap_xmlproject;
            }
        }

        return '';
    }

    /**
     * Get the content format for the editor.
     *
     * @param string $name
     * @param int $submissionid
     * @return int
     */
    public function get_editor_format($name, $submissionid): int {
        if ($name == 'snap') {
            $snapsubmission = $this->get_snap_submission($submissionid);
            if ($snapsubmission) {
                return FORMAT_PLAIN;
            }
        }

        return 0;
    }

    /**
     * Get submission information from the database.
     *
     * @param  int $submissionid
     * @return mixed
     */
    private function get_snap_submission(int $submissionid) {
        global $DB;

        return $DB->get_record('assignsubmission_snap', ['submission' => $submissionid]);
    }

    /**
     * Return the Snap! distros information.
     *
     * @return array with the Snap! distros information (distroCodes, snapDistros and distroSelected)
     */
    private function get_snapdistros() {
        $distros_raw = explode("\n",get_config('assignsubmission_snap', 'distros'));
        $distros = array();
        $distroCodes = array();
        foreach ($distros_raw as $distro) {
            $line = explode('|', $distro);
            if (count($line) > 2) {
                $distroCode = trim(array_shift($line));
                $distroName = trim(array_shift($line));
                $distroURL = trim(array_shift($line));
                $distros['snapDistros'][$distroCode] = [$distroCode, $distroName, $distroURL];
                array_push($distroCodes, $distroCode);
            }
        }
        $distros['distroCodes'] = $distroCodes;
        if (in_array($this->get_config('snapdistro'), $distroCodes)) {
            $distros['distroSelected'] = $distros['snapDistros'][$this->get_config('snapdistro')];
        } else {
            $distros['distroSelected'] = array_values($distros['snapDistros'])[0];
        }
        return $distros;
    }
    /**
     * Return the Snap! project content with the plugin toolbar.
     *
     *
     * @param  string $userid The author of this Snap! content.
     * @param  string $attempt The attepmt number.
     * @param  bool $loaded true to load xml project and false to show a button.
     * @param  string $xmlproject The XML with the Snap! project to display.
     * @param  string $width of the content container.
     * @param  string $height of the content container.
     * @param  bool $editable Edit or read-only view.
     * @return string the html to display the Snap! content.
     */
    private function get_view_snapframe(string $userid, string $attempt, bool $loaded = false, string $xmlproject = null,
            string $width = '100%', string $height = '600px', bool $editable = false): string {
        global $CFG, $OUTPUT, $USER, $COURSE, $SESSION;

        $template = new \stdClass();
        $config = get_config('assignsubmission_snap');

        $template->snapurl = $this->get_snapdistros()['distroSelected'][2];
        if ($xmlproject) {
            $template->snap_xmlproject = rawurlencode($xmlproject);
        }
        if (!$userid) {
            $userid = $USER->id;
        }
        $template->userid = $userid;
        $template->attempt = $attempt;
        $template->loaded = $loaded;
        $template->width = $width;
        $template->height = $height;
        $template->editable = $editable;

        $cloudenabled = false;
        if ($config->cloud > 0) {
            $cloudenabled = $this->get_config('cloudenabled');
        }
        $template->cloudenabled = $cloudenabled;

        $langmoodle = false;
        if ($this->get_config('langmoodle') > 0) {
            if ($COURSE->lang != '') {
                $langmoodle = substr($COURSE->lang, 0, 2);
            } elseif ($SESSION->lang != '') {
                $langmoodle = substr($SESSION->lang, 0, 2);
            }
        }
        $template->langmoodle = $langmoodle;

        $html = $OUTPUT->render_from_template('assignsubmission_snap/snapview', $template);

        return $html;
    }

    /**
     * Return the XML project from a Snap! submission.
     *
     * @param  stdClass $submission The submission
     * @return string The XML project of the Snap! content.
     */
    private function get_xmlproject(stdClass $submission): string {
        $xmlproject = '';
        if ($submission) {
            $snapsubmission = $this->get_snap_submission($submission->id);
            if ($snapsubmission) {
                $xmlproject = $snapsubmission->snap_xmlproject;
            }
        }

        return str_replace(array("&#xD;"), "\n", $xmlproject);
    }

    /**
     * Get if the assignment has attached any XML Snap! file. If exists, it will be used as template for new submissions,
     * instead of open an empty Snap! project.
     *
     * @return string The XML project to use as template (if exists).
     */
    private function get_xmlproject_template(): string {
        $fs = get_file_storage();
        $fsfiles = $fs->get_area_files($this->assignment->get_context()->id,
                                       'mod_assign',
                                       'introattachment',
                                       false,
                                       'timemodified DESC', // Choose the newest if there is more than one.
                                       false);
        foreach ($fsfiles as $file) {
            if ($file->get_mimetype() == 'application/xml') {
                $content = $file->get_content();
                if (strpos($content, 'project name=')) {
                    // This is a Snap! file. Use it as template (instead of displaying an empty project to the students).
                    return str_replace(array("&#xD;"), "\n", $content);
                }
            }
        }

        return '';
    }

}
