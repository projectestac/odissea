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
 * Creates user profile field for IDI
 *
 * @throws dml_exception
 */
function create_user_tag_field(): bool {
    global $DB;

    if (!$user_info_category = $DB->get_record('user_info_category', ['name' => 'Altres camps'])) {
        $user_info_category = new stdClass();
        $user_info_category->name = 'Altres camps';

        $DB->insert_record('user_info_category', $user_info_category);

        $user_info_category = $DB->get_record('user_info_category', ['name' => 'Altres camps']);
    }

    if (!$DB->get_record('user_info_field', ['shortname' => 'schoolcode'])) {
        $user_info_field = new stdClass();
        $user_info_field->shortname = 'schoolcode';
        $user_info_field->name = 'Codi del centre';
        $user_info_field->description = 'Contingut del camp companyName retornat per l\'IDI';
        $user_info_field->datatype = 'text';
        $user_info_field->categoryid = $user_info_category->id;
        $user_info_field->locked = 0;
        $user_info_field->visible = 2; // Visible to everyone (Important!)
        $user_info_field->param1 = 30;
        $user_info_field->param2 = 2048;

        $DB->insert_record('user_info_field', $user_info_field);
    }

    return true;
}

function transfer_config_fields(): bool {
    global $DB;

    try {
        $old_theme_config_records = $DB->get_records('config_plugins', ['plugin' => 'theme_xtec2020']);
    } catch (Exception $exception) {
        mtrace($exception->getMessage());
    }

    foreach ($old_theme_config_records as $record) {
        set_config($record->name, $record->value, 'theme_xtecboost');
    }

    // Copy logo to theme xtec2020
    $fs = get_file_storage();
    $files = $fs->get_area_files(1, 'theme_xtec2020', 'logo');

    foreach ($files as $file) {
        if (!$file->is_directory()) {
            // First parameter is the difference with the original file
            $fs->create_file_from_storedfile(['component' => 'theme_xtecboost'], $file->get_id());
        }
    }

    return true;
}