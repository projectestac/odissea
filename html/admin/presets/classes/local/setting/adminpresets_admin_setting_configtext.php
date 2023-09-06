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

namespace core_adminpresets\local\setting;

/**
 * Basic text setting, cleans the param using the admin_setting paramtext attribute.
 *
 * @package          core_adminpresets
 * @copyright        2021 Pimenko <support@pimenko.com><pimenko.com>
 * @author           Jordan Kesraoui | Sylvain Revenu | Pimenko based on David Monllaó <david.monllao@urv.cat> code
 * @license          http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class adminpresets_admin_setting_configtext extends adminpresets_setting {

    /**
     * Validates the value using paramtype attribute
     *
     * @param mixed $value
     * @return  boolean Cleaned or not, but always true.
     */
    protected function set_value($value) {
        $this->value = $value;

        if (empty($this->settingdata->paramtype)) {

            // For configfile, configpasswordunmask....
            $this->settingdata->paramtype = 'RAW';
        }

        $paramtype = 'PARAM_' . strtoupper($this->settingdata->paramtype);

        // Regexp.
        if (!defined($paramtype)) {
            $this->value = preg_replace($this->settingdata->paramtype, '', $this->value);

            // Standard moodle param type.
        } else {
            $this->value = clean_param($this->value, constant($paramtype));
        }
        $this->set_visiblevalue();

        return true;
    }
}
