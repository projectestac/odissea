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
