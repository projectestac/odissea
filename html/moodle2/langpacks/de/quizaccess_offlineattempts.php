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
 * Strings for component 'quizaccess_offlineattempts', language 'de', branch 'MOODLE_31_STABLE'
 *
 * @package   quizaccess_offlineattempts
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowofflineattempts'] = 'Erlauben, dass Versuche für diesen Test in Moodle Mobile offline abgegeben werden können';
$string['allowofflineattempts_help'] = 'Diese Option legt fest, ob Nutzer/innen den Test herunterladen und offline in Moodle Mobile versuchen Können. Sobald ein Test für einen Offline-Versuch heruntergeladen wird, beginnt ein neuer Versuch. Dieser Versuch wird leer bleiben, bis der Benutzer die Ergebnisse des Versuchs mit Moodle Mobile synchronisiert.';
$string['confirmdatasaved'] = 'Ich bestätige, dass ich keine ungespeicherten Daten auf meinen mobilen Geräten habe, bevor ich diesen Versuch fortsetze.';
$string['mobileapp'] = 'Moodle Mobile App';
$string['offlineattemptserror'] = 'Offline-Tests sind nicht kompatibel mit Tests, für die Beschränkungen über die Zeit, durch ein Passwort bzw. ein Subnetz eingestellt wurden. Dies gilt auch für Tests, die ein anderes Verhalten als spätere Auswertung verwenden, ohne oder mit gewissheitsbegründeter Bewertung.';
$string['offlinedatamessage'] = 'Sie haben für diesen Versuch auf einem mobilen Gerät gearbeitet. Die Daten wurden zuletzt vor {$a} Tagen auf dieser Seite gespeichert.';
$string['pleaseconfirm'] = 'Bestätigen Sie, dass Sie keine ungesicherten Daten auf Ihren mobilen Geräten haben.';
$string['pluginname'] = 'Offline-Versuche';
