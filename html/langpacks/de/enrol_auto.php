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
 * Strings for component 'enrol_auto', language 'de', version '4.1'.
 *
 * @package     enrol_auto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auto:config'] = 'Automatische Einschreibung konfigurieren';
$string['auto:manage'] = 'Eingeschriebene Nutzer/innen verwalten';
$string['auto:unenrol'] = 'Nutzer/innen aus dem Kurs abmelden';
$string['auto:unenrolself'] = 'Sich selber aus dem Kurs abmelden';
$string['courseview'] = 'Kursansicht';
$string['customwelcomemessage'] = 'Begrüßungsmitteilung';
$string['customwelcomemessage_help'] = 'Eine Begrüßungsmitteilung kann unformatiert oder im Moodleformat hinzugefügt werden, letztere mit HTML-Tags und Multi-lang Tags.

Folgende Platzhalter sind möglich:
* Kursname {$a->coursename}
* Link zum persönlichen Nutzerprofil {$a->profileurl}';
$string['defaultrole'] = 'Standardmäßige Rollenzuweisung';
$string['defaultrole_desc'] = 'Wählen Sie die Rolle aus, mit der Nutzer/innen automatisch in den Kurs eingeschrieben werden sollen.';
$string['editenrolment'] = 'Einschreibung bearbeiten';
$string['enrolon'] = 'Einschreibung bei';
$string['enrolon_desc'] = 'Welcher Event soll die automatische Einschreibung veranlassen?';
$string['enrolon_help'] = 'Welcher Event soll die automatische Einschreibung veranlassen?

**Kursansicht** - wenn der Kurs angezeigt wird.<br>
**Nutzerlogin** - wenn eine Person sich einloggt.<br>
**Aktivitäten / Material** - wenn eine ausgewählte Aktivität oder ein Material angezeigt wird. Diese Option erfordert den Gastzugang zum Kurs.';
$string['modview'] = 'Aktivitäten / Material';
$string['modviewmods'] = 'Aktivitäten / Material';
$string['modviewmods_desc'] = 'Das Anzeigen der ausgewählten Aktivitäten und Materialien veranlasst eine automatische Einschreibung.';
$string['pluginname'] = 'Automatische Einschreibung';
$string['pluginname_desc'] = 'Das Plugin \'Automatische Einschreibung\' regelt die Einschreibung über das Anzeigen des Kurses, von Aktivitäten und Materialien.';
$string['privacy:metadata'] = 'Das Plugin \'Automatische Einschreibung\' speichert keine personenbezogenen Daten.';
$string['requirepassword'] = 'Einschreibeschlüssel notwendig';
$string['requirepassword_desc'] = 'Für neue Kurse wird ein Einschreibeschlüssel gesetzt und für vorhandene Kurse wird das Entfernen des Einschreibeschlüssels verhindert.';
$string['role'] = 'Zugewiesene Rolle';
$string['sendcoursewelcomemessage'] = 'Begrüßungsmitteilung versenden';
$string['sendcoursewelcomemessage_help'] = 'Diese Option legt fest, ob eine Begrüßungsmitteilung per E-Mail gesendet wird, sobald Nutzer/innen automatisch in den Kurs eingeschrieben werden.';
$string['status'] = 'Automatische Einschreibung erlauben';
$string['status_desc'] = 'Standardmäßig die automatische Einschreibung von Nutzer/innen in den Kurs erlauben.';
$string['status_help'] = 'Diese Option legt fest, ob die \'Automatische Einschreibung\' für diesen Kurs aktiviert ist.';
$string['unenrol'] = 'Nutzer/in abmelden';
$string['unenrolselfconfirm'] = 'Möchten Sie sich wirklich selber aus dem Kurs \'{$a}\' abmelden?';
$string['unenroluser'] = 'Möchten Sie wirklich \'{$a->user}\' aus dem Kurs \'{$a->course}\' abmelden?';
$string['userlogin'] = 'Nutzerlogin';
$string['welcometocourse'] = 'Willkommen zu {$a}';
$string['welcometocoursetext'] = 'Willkommen im Kurs {$a->coursename}!

Falls Sie es nicht schon erledigt haben, sollten Sie es jetzt tun. Ergänzen Sie Ihre Profilseite so, dass wir mehr über Sie erfahren können:

{$a->profileurl}';
