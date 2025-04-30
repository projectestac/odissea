<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'workshopeval_credit', language 'ro', version '4.4'.
 *
 * @package     workshopeval_credit
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['mode'] = 'Mod de evaluare';
$string['mode_desc'] = 'Mod de evaluare implicit folosit de metoda _credit de participare_.';
$string['mode_help'] = 'Modul stabilește cum sunt calculate gradele de evaluare.

* Totul sau nimic - Evaluatorul trebuie să noteze toate înregistrările alocate pentru a obține nota maximă; în caz contrar se primește zero.
* Proporțională - Nota obținută este proporțională cu numărul de evaluări. Dacă toate înregistrările alocate sunt evaluate, sudentul va obține nota maximă; dacă jumătate din înregistrările alocate sunt evaluate, sudentul va obtine 50% din nota maximă.
* Cel puțin una - Studentul trebuie să evalueze cel puțin o înregistrarea alocată pentru a obține nota maximă.';
$string['modeall'] = 'Totul sau nimic';
$string['modeone'] = 'Cel puțin una';
$string['modeproportional'] = 'Proporțional';
$string['pluginname'] = 'Credit de participare';
$string['privacy:metadata'] = 'Participation credit nu stochează date personale.';
