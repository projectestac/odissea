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
 * Strings for component 'availability_role', language 'de', version '4.4'.
 *
 * @package     availability_role
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['description'] = 'Zugriff über eine bestimmte Kursrolle steuern';
$string['error_selectrole'] = 'Sie müssen eine Rolle auswählen.';
$string['missing'] = '[Rolle fehlt]';
$string['pluginname'] = 'Voraussetzung: Kursrolle';
$string['privacy:metadata'] = 'Das Plugin \'Voraussetzung: Kursrolle\' speichert keine personenbezogene Daten.';
$string['requires_notrole'] = 'Sie sind nicht <em>{$a}</em>';
$string['requires_role'] = 'Sie sind <em>{$a}</em>';
$string['setting_supportedroles'] = 'Unterstützte Rollen';
$string['setting_supportedroles_desc'] = 'Mit dieser Einstellung können Sie die Rollen einschränken, die in der Bedingung verwendet werden können. Standardmäßig können alle Rollen, die im Kurskontext zugewiesen werden können, verwendet werden. Rollen, die im Kurskontext nicht zugewiesen werden können, können überhaupt nicht verwendet werden.';
$string['setting_supportedroles_note'] = 'Bitte beachten Sie: Wenn Sie diese Einstellung ändern und Rollen deaktivieren, hat dies keine Auswirkungen auf bestehende Bedingungen, und die deaktivierte Rolle bleibt in bestehenden Bedingungen weiterhin aktiviert.';
$string['setting_supportedrolesheading'] = 'Unterstützte Rollen';
$string['setting_supportguestrole'] = 'Gastzugang';
$string['setting_supportguestrole_desc'] = 'Wenn diese Option aktiviert ist, kann die Voraussetzung auch für Nutzer/innen gesetzt werden, die den Kurs als Gast betrachten.';
$string['setting_supportnotloggedinrole'] = 'Nicht eingeloggt';
$string['setting_supportnotloggedinrole_desc'] = 'Wenn diese Option aktiviert ist, kann die Voraussetzung auch für Nutzer/innen gesetzt werden, die nicht in Moodle eingeloggt sind.';
$string['title'] = 'Kursrolle';
