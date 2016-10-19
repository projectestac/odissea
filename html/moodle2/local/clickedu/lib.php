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

function local_clickedu_extend_settings_navigation($settingsnav, $context) {
    global $CFG, $PAGE;

    if (!get_config('local_clickedu', 'synccontents')) {
        return;
    }

    if (!$PAGE->course or $PAGE->course->id == SITEID or !$PAGE->course->idnumber) {
        return;
    }

    if (!has_capability('local/clickedu:synccontents', $PAGE->context->get_course_context())) {
        return;
    }

    if (!$coursenode = $settingsnav->find('courseadmin', navigation_node::TYPE_COURSE)) {
        return;
    }

    $title = get_string('synccontents', 'local_clickedu');
    $url = new moodle_url('/local/clickedu/synccontents.php');
    $url->param('id', $PAGE->course->id);
    $type = navigation_node::NODETYPE_LEAF;
    $key = 'local_clickedu_synccontents';
    $icon = new pix_icon('i/import', '');
    $node = navigation_node::create($title, $url, $type, null, $key, $icon);

    if ($PAGE->url->compare($url, URL_MATCH_BASE)) {
        $node->make_active();
    }

    $coursenode->add_node($node);
}
