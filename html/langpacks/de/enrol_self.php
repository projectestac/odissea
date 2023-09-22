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
 * Strings for component 'enrol_self', language 'de', version '4.1'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'Einschreibung deaktiviert oder inaktiv';
$string['canntenrolearly'] = 'Sie können sich noch nicht einschreiben, weil die Einschreibung erst am {$a} beginnt.';
$string['canntenrollate'] = 'Sie können sich nicht mehr einschreiben, weil die Einschreibung am {$a} beendet wurde.';
$string['cohortnonmemberinfo'] = 'Nur Mitglieder der globalen Gruppe \'{$a}\' können sich selbst in diesen Kurs einschreiben.';
$string['cohortonly'] = 'Nur für Mitglieder der globalen Gruppe';
$string['cohortonly_help'] = 'Die Selbsteinschreibung kann auf Mitglieder einer globalen Gruppe beschränkt werden. Eine Änderung dieser Einstellung wirkt sich nicht auf bestehende Einschreibungen aus.';
$string['confirmbulkdeleteenrolment'] = 'Möchten Sie die Einschreibungen dieser Nutzer/innen wirklich löschen?';
$string['customwelcomemessage'] = 'Begrüßungstext';
$string['customwelcomemessage_help'] = 'Ein Begrüßungstext kann ein einfacher Text sein oder im Moodle-Auto-Format auch HTML-Tags und MultiLang-Tags enthalten.

Sie können folgende Platzhalter im Text verwenden:

* Kursname {$a->coursename}
* Link zum Nutzerprofil {$a->profileurl}
* Nutzer-E-Mail-Adresse {$a->email}
* Vollständiger Nutzername {$a->fullname}';
$string['defaultrole'] = 'Rolle im Kurs';
$string['defaultrole_desc'] = 'Wählen Sie eine Rolle aus, die Nutzer/innen bei der Selbsteinschreibung zugewiesen werden soll.';
$string['deleteselectedusers'] = 'Ausgewählte Selbsteinschreibungen löschen';
$string['editselectedusers'] = 'Ausgewählte Selbsteinschreibungen bearbeiten';
$string['enrolenddate'] = 'Einschreibungsende';
$string['enrolenddate_help'] = 'Wenn diese Option aktiviert ist, können Nutzer/innen sich bis zum angegebenen Zeitpunkt selbst einschreiben.';
$string['enrolenddaterror'] = 'Das Einschreibungsende muss nach dem Einschreibungsbeginn liegen.';
$string['enrolme'] = 'Einschreiben';
$string['enrolperiod'] = 'Teilnahmedauer';
$string['enrolperiod_desc'] = 'Die Teilnahmedauer ist die Zeitdauer, in der die Einschreibung gültig ist. Wenn diese Option deaktiviert wird, ist die Teilnahme unbefristet.';
$string['enrolperiod_help'] = 'Die Teilnahmedauer ist die Zeitdauer, in der die Einschreibung gültig ist, beginnend mit dem Moment der Einschreibung. Wenn diese Option deaktiviert wird, ist die Teilnahmedauer unbegrenzt.';
$string['enrolstartdate'] = 'Einschreibungsbeginn';
$string['enrolstartdate_help'] = 'Wenn diese Option aktiviert ist, können Nutzer/innen sich ab diesem Zeitpunkt selbst in den Kurs einschreiben.';
$string['expiredaction'] = 'Aktion bei Ablauf der Kurseinschreibung';
$string['expiredaction_help'] = 'Legen Sie fest, was nach dem Ablauf der Einschreibung in einem Kurs passiert. Denken Sie daran, dass bei der Austragung von Nutzer/innen einige Daten nicht mehr verfügbar sind.';
$string['expirymessageenrolledbody'] = 'Guten Tag {$a->user},

Sie sind derzeit im Kurs \'{$a->course}\' eingeschrieben. Die Teilnahmedauer läuft am {$a->timeend} ab. Danach ist ein Zugriff auf den Kurs nicht mehr möglich.

Wenn Sie Fragen haben, wenden Sie sich bitte an {$a->enroller}.

Ihr E-Learning-Team';
$string['expirymessageenrolledsubject'] = 'In Kürze endet Ihr Kurs';
$string['expirymessageenrollerbody'] = 'Guten Tag,

im Kurs \'{$a->course}\' läuft für folgende Nutzer/innen innerhalb der nächsten  {$a->threshold} die Einschreibung ab:

{$a->users}

Sie können auf der folgenden Seite die Teilnahmedauer indivduell verlängern oder entfristen: {$a->extendurl}

Ihr E-Learning-Team';
$string['expirymessageenrollersubject'] = 'In Kürze endet Ihr Kurs';
$string['expirynotifyall'] = 'Trainer/in und eingeschriebene Nutzer/innen';
$string['expirynotifyenroller'] = 'Nur Trainer/in';
$string['groupkey'] = 'Einschreibeschlüssel für Gruppen';
$string['groupkey_desc'] = 'Standardmäßig einen Einschreibeschlüssel für Gruppen verwenden';
$string['groupkey_help'] = 'Ergänzend zum Einschreibeschlüssel in den Kurs lassen sich zusätzliche Einschreibeschlüssel für Gruppen festlegen. Mit einem Einschreibeschlüssel für Gruppen können Nutzer/innen bei ihrer Kurseinschreibung automatisch einer Gruppe zugewiesen werden.

Hinweis: Um Einschreibeschlüssel für Gruppen verwenden zu können, muss zusätzlich auch ein Einschreibeschlüssel für den Kurs vergeben sein, den aber niemand kennen muss.';
$string['keyholder'] = 'Sie sollten den Einschreibeschlüssel erhalten haben von:';
$string['longtimenosee'] = 'Inaktive abmelden
';
$string['longtimenosee_help'] = 'Wenn Personen lange Zeit nicht mehr auf den Kurs zugegriffen haben, werden sie automatisch abgemeldet. Dieser Parameter legt die maximale Inaktivitätsdauer fest.';
$string['maxenrolled'] = 'Maximale Einschreibungen';
$string['maxenrolled_help'] = 'Diese Option legt die maximale Anzahl der erlaubten Nutzer/innen mit Selbsteinschreibung fest (0 = unbeschränkt).';
$string['maxenrolledreached'] = 'Die maximale Anzahl der erlaubten Nutzer/innen mit Selbsteinschreibung ist bereits erreicht.
';
$string['messageprovider:expiry_notification'] = 'Systemnachricht zum Ablauf von Selbsteinschreibungen';
$string['newenrols'] = 'Selbsteinschreibung erlauben';
$string['newenrols_desc'] = 'Nutzer/innen dürfen sich selbst einschreiben';
$string['newenrols_help'] = 'Diese Option legt fest, ob Nutzer/innen sich selber in diesen Kurs einschreiben dürfen.';
$string['nopassword'] = 'Kein Einschreibeschlüssel notwendig';
$string['password'] = 'Einschreibeschlüssel';
$string['password_help'] = 'Ein Einschreibeschlüssel erlaubt den Kurszugriff nur für diejenigen Nutzer/innen, die den Einschreibeschlüssel kennen.

Wenn das Feld leer bleibt, können sich alle Nutzer/innen im Kurs einschreiben.

Wenn ein Einschreibeschlüssel angegeben ist, müssen alle Nutzer/innen notwendigerweise bei der Kurseinschreibung den Einschreibeschlüssel eingeben. Beachten Sie, dass Nutzer/innen den Einschreibeschlüssel nur einmal bei der Kurseinschreibung eingeben müssen und danach dauerhaft eingeschriebene Kursteilnehmer/innen sind.';
$string['passwordinvalid'] = 'Falscher Einschreibeschlüssel';
$string['passwordinvalidhint'] = 'Falscher Einschreibeschlüssel. Das erste Zeichen ist \'{$a}\'.';
$string['pluginname'] = 'Selbsteinschreibung';
$string['pluginname_desc'] = 'Das Plugin \'Selbsteinschreibung\' erlaubt es Nutzer/innen, selber einen Kurs zur Teilnahme auszuwählen. Kurse können mit einem Einschreibeschlüssel gesichert oder ohne Einschreibeschlüssel offen sein. Intern nutzt die Selbsteinschreibung das Plugin \'Manuelle Einschreibung\', welches deswegen im Kurs ebenfalls aktiviert sein muss.';
$string['privacy:metadata'] = 'Das Plugin Selbsteinschreibung speichert keine personenbezogenen Daten.';
$string['requirepassword'] = 'Einschreibeschlüssel notwendig';
$string['requirepassword_desc'] = 'Die Verwendung eines Einschreibeschlüssels ist in neuen Kursen notwendig. In bestehenden Kursen wird das Löschen eines Einschreibeschlüssels verhindert.';
$string['role'] = 'Rolle im Kurs';
$string['self:config'] = 'Selbsteinschreibung konfigurieren';
$string['self:enrolself'] = 'Selbsteinschreibung im Kurs';
$string['self:holdkey'] = 'Person wird als Halter des Zugangsschlüssels angezeigt';
$string['self:manage'] = 'Eingeschriebene Nutzer/innen verwalten';
$string['self:unenrol'] = 'Nutzer/innen aus dem Kurs abmelden';
$string['self:unenrolself'] = 'Selbst aus dem Kurs abmelden';
$string['sendcoursewelcomemessage'] = 'Begrüßungstext versenden';
$string['sendcoursewelcomemessage_help'] = 'Wenn ein Nutzer/innen sich in den Kurs einschreiben, kann ihnen eine Begrüßungsnachricht gesendet werden. Wenn diese vom Kurskontakt geschickt wird (voreingestellt ist Trainer/in) und mehrere Personen diese Rolle haben, wird die E-Mail von der Person versendet, der diese Rolle zuerst zugewiesen wurde.';
$string['sendexpirynotificationstask'] = 'Task zur Erinnerung an den Ablauf von Selbsteinschreibungen';
$string['showhint'] = 'Hinweis zeigen';
$string['showhint_desc'] = 'Erstes Zeichen des Einschreibeschlüssels zeigen';
$string['status'] = 'Existierende Einschreibungen erlauben';
$string['status_desc'] = 'Selbsteinschreibung für neue Kurse aktivieren';
$string['status_help'] = 'Wenn diese Option aktiviert und \'Neue Einschreibungen erlauben\' deaktiviert ist, können alle vorhandenen Selbsteinschreibungen weiter auf den Kurs zugreifen. Wenn die Option deaktiviert ist, werden alle vorhandenen Selbsteinschreibungen deaktiviert und keine neuen Selbsteinschreibungen zugelassen.';
$string['syncenrolmentstask'] = 'Synchronisierung von Selbsteinschreibungen';
$string['unenrol'] = 'Nutzer/in abmelden';
$string['unenrolselfconfirm'] = 'Möchten Sie sich selbst wirklich vom Kurs \'{$a}\' abmelden?';
$string['unenroluser'] = 'Möchten Sie \'{$a->user}\' wirklich vom Kurs \'{$a->course}\' abmelden?';
$string['unenrolusers'] = 'Nutzer/innen abmelden';
$string['usepasswordpolicy'] = 'Kennwortregeln verwenden';
$string['usepasswordpolicy_desc'] = 'Die Kennwortregeln gelten auch für die Einschreibeschlüssel.';
$string['welcometocourse'] = 'Willkommen zu {$a}';
$string['welcometocoursetext'] = 'Willkommen im Kurs \'{$a->coursename}\'!

Falls Sie es nicht bereits erledigt haben, sollten Sie Ihr persönliches Nutzerprofil bearbeiten. Auf diese Weise können wir alle mehr über Sie erfahren und besser zusammenarbeiten:

{$a->profileurl}';
