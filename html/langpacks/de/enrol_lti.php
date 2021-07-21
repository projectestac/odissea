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
 * Strings for component 'enrol_lti', language 'de', version '3.11'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = 'Beachten Sie: Es wird empfohlen die "Frame-Einbettung erlauben"-Einstellung zu aktivieren, damit Tools in einem Frame statt in einem neuen Fenster angezeigt werden.';
$string['authltimustbeenabled'] = 'Hinweis: Dieses Plugin bedarf auch der Aktivierung des LTI Authentifizierungs-Plugins';
$string['cartridgeurl'] = 'Cartridge URL';
$string['couldnotestablishproxy'] = 'Proxy mit Consumer konnte nicht hergestellt werden.';
$string['enrolenddate'] = 'Einschreibungsende';
$string['enrolenddate_help'] = 'Diese Option legt fest, dass Nutzer/innen nur bis zu diesem Termin zugreifen können.';
$string['enrolenddateerror'] = 'Das Einschreibungsende muss nach dem Einschreibungsbeginn liegen.';
$string['enrolisdisabled'] = 'Das Plugin \'Veröffentlichen als LTI-Tool\' ist deaktiviert.';
$string['enrolmentfinished'] = 'Einschreibung beendet';
$string['enrolmentnotstarted'] = 'Einschreibung hat nicht begonnen';
$string['enrolperiod'] = 'Einschreibungsdauer';
$string['enrolperiod_help'] = 'Zeitdauer der Gültigkeit einer Einschreibung ab dem Moment der Selbsteinschreibung vom entfernten System. Wenn deaktiviert, ist die Einschreibung unbegrenzt gültig.';
$string['enrolstartdate'] = 'Einschreibungsbeginn';
$string['enrolstartdate_help'] = 'Diese Option legt fest, dass Nutzer/innen nur nach diesem Termin zugreifen können.';
$string['failedrequest'] = 'Anfrage fehlgeschlagen. Grund: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Um auf das Tool zuzugreifen, folgen Sie dem nachfolgenden Link.';
$string['gradesync'] = 'Synchronisation der Bewertungen';
$string['gradesync_help'] = 'Festlegung, ob Bewertungen synchronisiert werden (LTI Consumer).';
$string['incorrecttoken'] = 'Das Token war falsch. Überprüfen Sie die URL und versuchen Sie es erneut oder kontaktieren Sie die Administrator/innen dieses Tools.';
$string['invalidrequest'] = 'Ungültige Anfrage';
$string['invalidtoolconsumer'] = 'Ungültige Tool-Consumer';
$string['launchdetails'] = 'Launch-Details';
$string['launchdetails_help'] = 'Zur Konfiguration des Tools sind eine Cartridge-URL (auch Configuration-URL genannt) und ein Secret notwendig.';
$string['launchurl'] = 'Start URL';
$string['lti:config'] = 'Instanzen für \'Veröffentlichen als LTI-Tool\' konfigurieren';
$string['lti:unenrol'] = 'Nutzer/innen vom Kurs abmelden';
$string['maxenrolled'] = 'Maximal eingeschriebene Nutzer/innen';
$string['maxenrolled_help'] = 'Legt die Höchstzahl der Nutzer fest, die vom externen System zugreifen dürfen. Der Wert \'0\' bedeutet keine Begrenzung.';
$string['maxenrolledreached'] = 'Die Höchstzahl der zugelassenen Nutzer, die vom externen System zugreifen dürfen, wurde erreicht.';
$string['membersync'] = 'Nutzersynchronisation';
$string['membersync_help'] = 'Diese Option legt fest, ob ein regelmäßiger Task externe Nutzer/innen aus einem anderen System mit den Einschreibungen dieses Kurses synchronisiert, wobei für externe Nutzer/innen ein Nutzerkonto angelegt und die Einschreibung bzw. Abmeldung vorgenommen wird.

Bei \'Nein\' werden für externe Nutzer/innen in dem Moment des Zugriffs automatisch Nutzerkonten angelegt und Einschreibungen vorgenommen, eine Abmeldung findet nicht statt.';
$string['membersyncmode'] = 'Nutzersynchronisierungsmodus';
$string['membersyncmode_help'] = 'Die Option legt fest, ob Remote-Nutzer/innen in diesem Kurs eingeschrieben und/oder abgemeldet werden sollen.';
$string['membersyncmodeenrolandunenrol'] = 'Neue Nutzer/innen einschreiben und fehlende abmelden';
$string['membersyncmodeenrolnew'] = 'Neue Nutzer/innen einschreiben';
$string['membersyncmodeunenrolmissing'] = 'Fehlende Nutzer/innen abmelden';
$string['notoolsprovided'] = 'Keine Tools unterstützt';
$string['opentool'] = 'Tool öffnen';
$string['pluginname'] = 'Als LTI-Tool bereitstellen';
$string['pluginname_desc'] = 'Das Plugin für die Bereitstellung von Zugriffen durch externe Nutzer ermöglicht Nutzern anderer Systeme  auf einen Kurs oder eine Aktivität zuzugreifen. Sie benötigen dazu lediglich einen Link. Das LTI Authentifizierungsplugin muss aktiv sein. Moodle arbeitet dabei als LTI Tool Provider.';
$string['privacy:metadata:enrol_lti_users'] = 'Liste der Nutzer, die über den LTI-Provider eingeschrieben sind';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Zeitpunkt zu dem Nutzer zuletzt den Kurs genutzt hat';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Letzte Bewertung, die für den Nutzer erstellt wurde';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Datum, an dem eine Person eingeschrieben wurde';
$string['privacy:metadata:enrol_lti_users:userid'] = 'ID des Nutzers';
$string['registration'] = 'Veröffentlichte Tool-Registrierung';
$string['registrationurl'] = 'Registrierungs-URL';
$string['registrationurl_help'] = 'Wenn eine Registrierungs-URL verwendet wird (auch Proxy-URL genannt), dann wird das Tool automatisch konfiguriert.';
$string['remotesystem'] = 'Entferntes System';
$string['requirecompletion'] = 'Kurs- oder Aktivitäts-Abschluss notwendig vor Noten Synchronisation';
$string['returnurlnotset'] = 'Die Rückgabe-URL ist nicht gesetzt.';
$string['roleinstructor'] = 'Rolle für Trainer/in';
$string['roleinstructor_help'] = 'Die Rolle, die in diesem Tool Trainer/innen zugewiesen wird, wenn sie von einem externen System zugreifen.';
$string['rolelearner'] = 'Rolle für Teilnehmer/in';
$string['rolelearner_help'] = 'Die Rolle, die in diesem Tool dem Schüler, der von einem externen System zugreift, zugewiesen ist.';
$string['secret'] = 'Secret';
$string['secret_help'] = 'Eine Zeichenkette, die dem externen System (LTI consumer) mitgeteilt wird um Zugriff auf das tool zu ermöglichen.';
$string['sharedexternaltools'] = 'Als LTI-Tools bereitgestellt';
$string['successfulregistration'] = 'Registrierung erfolgreich';
$string['tasksyncgrades'] = 'LTI-Tool Bewertungen synchronisieren';
$string['tasksyncmembers'] = 'LTI-Tool Benutzer synchronisieren';
$string['toolsprovided'] = 'Bereitgestellte Tools';
$string['toolsprovided_help'] = 'Ein Tool kann mit einer weiteren Seite geteilt werden indem entweder Launch-Details oder eine Registrierungs-URL angegeben werden.';
$string['tooltobeprovided'] = 'zu veröffentlichendes Tool';
$string['toolurl'] = 'Tool URL';
$string['userdefaultvalues'] = 'Standardnutzerwerte';
