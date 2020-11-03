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
 * Strings for component 'enrol_manual', language 'de', branch 'MOODLE_38_STABLE'
 *
 * @package   enrol_manual
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Erweitert';
$string['alterstatus'] = 'Status ändern';
$string['altertimeend'] = 'Endzeit ändern';
$string['altertimestart'] = 'Startzeit ändern';
$string['assignrole'] = 'Kursrolle zuweisen ';
$string['assignroles'] = 'Rollen zuweisen';
$string['browsecohorts'] = 'Globale Gruppen anzeigen';
$string['browseusers'] = 'Nutzer/innen anzeigen';
$string['confirmbulkdeleteenrolment'] = 'Möchten Sie diese Einschreibungen wirklich löschen?';
$string['defaultperiod'] = 'Teilnahmedauer';
$string['defaultperiod_desc'] = 'Die Teilnahmedauer ist die Zeitdauer, während der die Einschreibung gültig bleibt. Wenn dieser Wert 0 ist, ist die Teilnahmedauer unbegrenzt.';
$string['defaultperiod_help'] = 'Die Teilnahmedauer ist die Zeitdauer, während der die Einschreibung gültig bleibt, beginnend mit dem Moment der Nutzereinschreibung. Wenn diese Option deaktiviert ist, ist die Teilnahmedauer unbegrenzt.';
$string['defaultstart'] = 'Einschreibebeginn (Standardwert)';
$string['deleteselectedusers'] = 'Ausgewählte manuelle Einschreibungen löschen';
$string['editselectedusers'] = 'Ausgewählte manuelle Einschreibungen bearbeiten';
$string['enrolledincourserole'] = 'In \'{$a->course}\' als \'{$a->role}\' eingeschrieben';
$string['enrolusers'] = 'Nutzer/innen einschreiben';
$string['enroluserscohorts'] = 'Ausgewählte Nutzer/innen und globale Gruppen einschreiben';
$string['expiredaction'] = 'Aktion bei Einschreibungsablauf';
$string['expiredaction_help'] = 'Legen Sie fest was nach dem Ablauf der Einschreibung in einem Kurs erfolgt. Denken Sie daran, dass bei der Austragung des Nutzers aus dem Kurs einige Daten nicht mehr verfügbar sind.';
$string['expirymessageenrolledbody'] = 'Guten Tag {$a->user},

Sie sind derzeit im Kurs \'{$a->course}\' eingeschrieben. Die Teilnahmedauer lauft am {$a->timeend} ab. Danach ist ein Zugriff auf den Kurs nicht mehr möglich.

Wenn Sie Fragen haben, wenden Sie sich bitte an {$a->enroller}.

Ihr E-Learning-Team';
$string['expirymessageenrolledsubject'] = 'Benachrichtigung zum Teilnahmeende';
$string['expirymessageenrollerbody'] = 'Guten Tag,

im Kurs \'{$a->course}\' läuft für folgende Nutzer/in/nen innerhalb der nächsten  {$a->threshold}  die Einschreibung ab:

{$a->users}

Sie können auf der folgenden Seite die Einschreibedauer verlängern: {$a->extendurl}

Ihr E-Learning Team';
$string['expirymessageenrollersubject'] = 'Benachrichtigung zum Teilnahmeende';
$string['manual:config'] = 'Manuelle Einschreibung verwalten';
$string['manual:enrol'] = 'Nutzer/innen einschreiben';
$string['manual:manage'] = 'Nutzereinschreibung verwalten';
$string['manualpluginnotinstalled'] = 'Das Plugin \'Manuelle Einschreibung\' ist nicht installiert.';
$string['manual:unenrol'] = 'Nutzer/innen aus dem Kurs abmelden';
$string['manual:unenrolself'] = 'Selbst aus dem Kurs abmelden';
$string['messageprovider:expiry_notification'] = 'Systemnachricht beim Ablauf von manuellen Einschreibungen';
$string['now'] = 'Jetzt';
$string['pluginname'] = 'Manuelle Einschreibung';
$string['pluginname_desc'] = 'Das Plugin \'Manuelle Einschreibung\' erlaubt es, Nutzer/innen manuell in einen Kurs einzuschreiben. Die Einschreibung in einen Kurs kann von den Trainer/innen (oder jemandem mit passenden Rechten) durchgeführt werden. Das Plugin sollte normalerweise aktiviert sein, da andere Einschreibeplugins (z.B. Selbsteinschreibung) darauf zugreifen.';
$string['privacy:metadata'] = 'Das Manuelle-Einschreibungplugin speichert keine personenbezogenen Daten.';
$string['selectcohorts'] = 'Alle aktuellen Mitglieder der Globalen Gruppe jetzt einschreiben';
$string['selection'] = 'Auswahl';
$string['selectusers'] = 'Nutzer/innen auswählen';
$string['sendexpirynotificationstask'] = 'Systemnachricht bei Ablauf der manuellen Einschreibung';
$string['status'] = 'Manuelle Einschreibung';
$string['status_desc'] = 'Kurszugriff für intern eingeschriebene Nutzer/innen erlauben. Dieses Plugin sollte in den meisten Fällen aktiviert bleiben.';
$string['statusdisabled'] = 'Deaktiviert';
$string['statusenabled'] = 'Aktiviert';
$string['status_help'] = 'Diese Option legt fest, ob Nutzer/innen manuell eingeschrieben werden können. In der Regel führen Trainer/innen (oder jemand mit passenden Rechten) die manuelle Einschreibung in einen Kurs durch.';
$string['syncenrolmentstask'] = 'Manuelle Einschreibung synchronisieren';
$string['unenrol'] = 'Nutzer/in abmelden';
$string['unenrolselectedusers'] = 'Ausgewählte Nutzer/innen abmelden';
$string['unenrolselfconfirm'] = 'Möchten Sie sich wirklich selbst aus dem Kurs \'{$a}\' abmelden?';
$string['unenroluser'] = 'Möchten Sie wirklich \'{$a->user}\' aus dem Kurs \'{$a->course}\' abmelden?';
$string['unenrolusers'] = 'Nutzer/innen abmelden';
$string['wscannotenrol'] = 'Die Plugins können Nutzer/innen nicht manuell in den Kurs \'{$a->courseid}\' einschreiben
 ';
$string['wsnoinstance'] = 'Das Plugin \'Manuelle Einschreibung\' ist nicht vorhanden oder wurde für den Kurs \'{$a->courseid}\' nicht aktiviert';
$string['wsusercannotassign'] = 'Sie sind nicht berechtigt, die Rolle \'{$a->roleid}\' im Kurs \'{$a->courseid}\' an \'{$a->userid}\' zuzuweisen.';
