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
 * Strings for component 'availability_role', language 'de', version '4.5'.
 *
 * @package     availability_role
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['description'] = 'Zugriff über eine festgelegt Rolle regeln';
$string['error_selectrole'] = 'Sie müssen eine Rolle auswählen.';
$string['missing'] = '[Rolle fehlt]';
$string['nonsensical_warning'] = '<b>Warnung:</b><br />Diese Rolle hat keinerlei Zugriff auf diesen Aktivitätstyp.<br />Die Einschränkung hat möglicherweise keine Auswirkung.';
$string['pluginname'] = 'Voraussetzung: Rolle';
$string['privacy:metadata'] = 'Das Plugin \'Voraussetzung: Rolle\' speichert keine personenbezogene Daten.';
$string['requires_notrole'] = 'Sie sind nicht <b>{$a}</b>';
$string['requires_role'] = 'Sie sind <b>{$a}</b>';
$string['role:addinstance'] = 'Rollenbedingungen zu Aktivitäten hinzufügen';
$string['setting_coursecatroles'] = 'Unterstützte Kursbereichsrollen';
$string['setting_courseroles'] = 'Unterstützte Kursrollen';
$string['setting_globalroles'] = 'Unterstützte globale Rollen';
$string['setting_specialrolesheading'] = 'Spezielle Rollen';
$string['setting_supportedrolesheading'] = 'Unterstützte Rollen';
$string['setting_supportedrolesheading_desc'] = 'Mit diesen Einstellungen können Sie die Rollen einschränken, die in der Bedingung verwendet werden sollen. Standardmäßig können alle Rollen, die im Kurskontext zugewiesen sind, in der Bedingung verwendet werden. Rollen, die auf Kategorie- oder globaler Ebene zugewiesen werden, sind hingegen standardmäßig deaktiviert.';
$string['setting_supportedrolesheading_note'] = 'Hinweis: Wenn Sie eine dieser Einstellungen ändern und Rollen sperren, hat dies keine Auswirkungen auf bestehende Bedingungen. Eine gesperrte Rolle bleibt in den bestehenden Bedingungen weiterhin festgelegt.';
$string['setting_supportguestrole'] = 'Gastzugang';
$string['setting_supportguestrole_desc'] = 'Wenn diese Option aktiviert ist, kann die Voraussetzung auch für Nutzer/innen gesetzt werden, die den Kurs als Gast betrachten.';
$string['setting_supportnotloggedinrole'] = 'Nicht angemeldet';
$string['setting_supportnotloggedinrole_desc'] = 'Wenn diese Option aktiviert ist, kann die Voraussetzung auch für Nutzer/innen gesetzt werden, die nicht in Moodle angemeldet sind.';
$string['title'] = 'Kursrolle';
