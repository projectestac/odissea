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
 * Settings for the GeoGebra question type.
 *
 * @package    qtype_geogebra
 * @copyright  2023 ISB Bayern
 * @author     Philipp Memmel
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {

    $ADMIN->add('qtypesettings', new admin_category('qtype_geogebra_settings',
        new lang_string('pluginname', 'qtype_geogebra')));

    if ($ADMIN->fulltree) {
        $settings->add(new admin_setting_configtext(
            'qtype_geogebra/codebase',
            new lang_string('codebase', 'qtype_geogebra'),
            new lang_string('codebase_description', 'qtype_geogebra'),
            ''
        ));
    }
}
