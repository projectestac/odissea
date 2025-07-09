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

namespace core_sms\hook;

use MoodleQuickForm;

/**
 * Hook after sms gateway setup form is initiated.
 *
 * @package    core_sms
 * @copyright  2024 Safat Shahin <safat.shahin@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @property-read MoodleQuickForm $mform The form element
 * @property-read ?string $plugin Name of the plugin
 */
#[\core\attribute\label('Allows plugins or features to add form elements for sms gateway setup.')]
#[\core\attribute\tags('sms')]
class after_sms_gateway_form_hook {

    /**
     * Constructor for the hook.
     *
     * @param MoodleQuickForm $mform The moodle form instance.
     * @param ?string $plugin The name of the plugin
     */
    public function __construct(
        public readonly MoodleQuickForm $mform,
        public readonly ?string $plugin,
    ) {
    }
}
