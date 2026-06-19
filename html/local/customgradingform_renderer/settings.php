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
 * Admin settings for validation rules.
 *
 * @package   local_customgradingform_renderer
 * @copyright 2025 Richard Rangel
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage(
        'local_customgradingform_renderer',
        get_string('pluginname', 'local_customgradingform_renderer')
    );

    // Enable maximum score validation.
    $settings->add(new admin_setting_configcheckbox(
        'local_customgradingform_renderer/enablemaxlevelscore',
        get_string('enablemaxlevelscore', 'local_customgradingform_renderer'),
        get_string('enablemaxlevelscore_desc', 'local_customgradingform_renderer'),
        0 // Disabled by default.
    ));

    // Maximum score per level.
    $settings->add(new admin_setting_configtext(
        'local_customgradingform_renderer/maxlevelscore',
        get_string('maxlevelscore', 'local_customgradingform_renderer'),
        get_string('maxlevelscore_desc', 'local_customgradingform_renderer'),
        10,
        PARAM_FLOAT
    ));

    // Enable minimum score validation.
    $settings->add(new admin_setting_configcheckbox(
        'local_customgradingform_renderer/enableminlevelscore',
        get_string('enableminlevelscore', 'local_customgradingform_renderer'),
        get_string('enableminlevelscore_desc', 'local_customgradingform_renderer'),
        0
    ));

    // Minimum score per level (fixed value: 0).
    $settings->add(new admin_setting_configtext(
        'local_customgradingform_renderer/minlevelscore',
        get_string('minlevelscore', 'local_customgradingform_renderer'),
        get_string('minlevelscore_desc', 'local_customgradingform_renderer'),
        0,
        PARAM_FLOAT
    ));

    $ADMIN->add('localplugins', $settings);
}
