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
 * Strings for component 'course', language 'de', version '3.11'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'Fußzeile zur Aktivitätsauswahl';
$string['activitychooseractivefooter_desc'] = 'Die Aktivitätsauswahl unterstützt Plugins, die Elemente zur Fußzeile hinzufügen können.';
$string['activitychoosercategory'] = 'Aktivitätsauswahl';
$string['activitychooserhidefooter'] = 'Keine Fußzeile';
$string['activitychooserrecommendations'] = 'Empfohlene Aktivitäten';
$string['activitychoosersettings'] = 'Einstellungen der Aktivitätsauswahl';
$string['activitychoosertabmode'] = 'Tabs der Aktivitätsauswahl';
$string['activitychoosertabmode_desc'] = 'Mit der Aktivitätenauswahl können Trainer/innen auf einfache Weise Aktivitäten und Arbeitsmaterialien auswählen, die sie zu ihrem Kurs hinzufügen möchten. Diese Einstellung bestimmt, welche Registerkarten darin angezeigt werden sollen. Die Registerkarte \'Favoriten\' wird nur für Nutzer/innen angezeigt, wenn sie selber eine oder mehrere Aktivitäten mit einem Sternchen versehen haben. Die Registerkarte \'Empfohlen\' wird nur dann angezeigt, wenn die Administrator/innen eine oder mehrere Aktivitäten als empfohlen gekennzeichnet hat.';
$string['activitychoosertabmodeone'] = 'Favoriten, Alle, Aktivitäten, Arbeitsmaterial, Empfohlen';
$string['activitychoosertabmodethree'] = 'Favoriten, Aktivitäten, Arbeitsmaterial, Empfohlen';
$string['activitychoosertabmodetwo'] = 'Favoriten, Alle, Empfohlen';
$string['activitydate:closed'] = 'Geschlossen:';
$string['activitydate:closes'] = 'Schließt:';
$string['activitydate:opened'] = 'Geöffnet:';
$string['activitydate:opens'] = 'Öffnet:';
$string['aria:coursecategory'] = 'Kursbereich';
$string['aria:courseimage'] = 'Kursbild';
$string['aria:coursename'] = 'Kursname';
$string['aria:courseshortname'] = 'Kurzer Kursname';
$string['aria:defaulttab'] = 'Standard-Aktivitäten';
$string['aria:favourite'] = 'Der Kurs ist als Favorit markiert.';
$string['aria:favouritestab'] = 'Markierte Akvititäten';
$string['aria:modulefavourite'] = 'Aktivität {$a} als Favorit markieren';
$string['aria:recommendedtab'] = 'Empfohlene Aktivitäten';
$string['completion_automatic:done'] = 'Erledigt:';
$string['completion_automatic:failed'] = 'Nicht bestanden:';
$string['completion_automatic:todo'] = 'Zu erledigen:';
$string['completion_manual:aria:done'] = '{$a} ist als erledigt gekennzeichnet. Zum Rückgängigmachen klicken.';
$string['completion_manual:aria:markdone'] = '{$a} als erledigt kennzeichnen';
$string['completion_manual:done'] = 'Erledigt';
$string['completion_manual:markdone'] = 'Als erledigt kennzeichnen';
$string['completion_setby:auto:done'] = 'Erledigt: {$a->condition} (von {$a->setby} gesetzt)';
$string['completion_setby:auto:todo'] = 'Zu erledigen: {$a->condition} (von {$a->setby} gesetzt)';
$string['completion_setby:manual:done'] = '{$a->activityname} wurde von {$a->setby} als erledigt gekennzeichnet. Zum Rückgängigmachen klicken.';
$string['completion_setby:manual:markdone'] = '{$a->activityname} wurde von {$a->setby} als nicht erledigt gekennzeichnet. Zum als erledigt kennzeichnen klicken.';
$string['completionrequirements'] = 'Voraussetzungen für den Abschluss von {$a}';
$string['coursealreadyfinished'] = 'Kurs bereits beendet';
$string['coursenotyetfinished'] = 'Der Kurs ist noch nicht beendet.';
$string['coursenotyetstarted'] = 'Der Kurs hat noch nicht begonnen.';
$string['coursetoolong'] = 'Der Kurs ist zu lang';
$string['customfield_islocked'] = 'Gesperrt';
$string['customfield_islocked_help'] = 'Wenn das Feld gesperrt ist, können nur Personen, die gesperrte Kursfelder ändern dürfen, dies in den Kurseinstellungen ändern. Dies sind zunächst ausschließlich Personen mit der Rolle Manager/in.';
$string['customfield_notvisible'] = 'Niemand';
$string['customfield_visibility'] = 'Sichtbar für';
$string['customfield_visibility_help'] = 'Diese Einstellung legt fest, wer den Namen und den Wert des benutzerdefinierten Feldes in der Kursliste oder im Feldfilter des Dashboards anzeigen kann.';
$string['customfield_visibletoall'] = 'Alle';
$string['customfield_visibletoteachers'] = 'Trainer/innen';
$string['customfieldsettings'] = 'Einstellungen für Kursfelder';
$string['downloadcourseconfirmation'] = 'Sie sind dabei, eine Zip-Datei mit den Kursinhalten herunterzuladen. Ausgenommen sind Elemente, die nicht heruntergeladen werden können, und Dateien, die größer als {$a} sind.';
$string['downloadcoursecontent'] = 'Kursinhalt herunterladen';
$string['downloadcoursecontent_help'] = 'Diese Einstellung legt fest, ob Kursinhalte von Nutzer/innen mit der Funktion zum Kursinhalt herunterladen heruntergeladen werden dürfen (standardmäßig Benutzer mit der Rolle von Teilnehmer/innen oder Trainer/innen).';
$string['enabledownloadcoursecontent'] = 'Kursinhalt herunterladen aktivieren';
$string['errorendbeforestart'] = 'Das Enddatum  ({$a})  liegt vor dem Anfangsdatum.';
$string['favourite'] = 'Favorisierte Kurse';
$string['gradetopassnotset'] = 'Für diesen Kurs wurde keine Bestehensgrenze festgelegt, die erreichet werden muss. Dies kann im Bewertungselement des Kurses festgelegt werden (Bewertungseinstellungen).';
$string['informationformodule'] = 'Info zur Aktivität {$a}';
$string['module'] = 'Aktivität';
$string['noaccesssincestartinfomessage'] = 'Guten Tag {$a->userfirstname},
<p>einige Teilnehmer/innen im Kurs {$a->coursename} haben noch nie auf den Kurs zugegriffen.</p>';
$string['nocourseactivity'] = 'Es gibt nicht genügend Aktivitäten zwischen dem Anfangs- und dem Enddatum.';
$string['nocourseendtime'] = 'Der Kurs hat kein Enddatum.';
$string['nocoursesections'] = 'Keine Kursabschnitte';
$string['nocoursestudents'] = 'Keine Teilnehmer/innen';
$string['norecentaccessesinfomessage'] = 'Guten Tag {$a->userfirstname},
<p>einige Teilnehmer/innen im Kurs {$a->coursename} haben bisher noch nicht auf den Kurs zugegriffen.</p>';
$string['noteachinginfomessage'] = 'Guten Tag {$a->userfirstname},
<p>bei in der nächsten Woche beginnenden Kursen wurde festgestellt, dass weder Trainer/innen noch Teilnehmer/innen eingeschrieben sind.</p>';
$string['privacy:completionpath'] = 'Kursabschluss';
$string['privacy:favouritespath'] = 'Info zur Kursfavorisierung';
$string['privacy:metadata:activityfavouritessummary'] = 'Das Kurssystem enthält Informationen darüber, welche Elemente aus der Aktivitätsauswahl von Nutzern als Favorit markiert worden sind.';
$string['privacy:metadata:completionsummary'] = 'Der Kurs enthält Abschlussinformationen über die Person.';
$string['privacy:metadata:favouritessummary'] = 'Der Kurs enthält Informationen, die sich auf die persönliche Kursfavorisierungen beziehen.';
$string['privacy:perpage'] = 'Anzahl der Kurse auf einer Seite';
$string['recommend'] = 'Empfehlen';
$string['recommendcheckbox'] = 'Empfohlene Aktivität: {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} nach Kursbeginn';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} vor Kursbeginn';
$string['searchactivitiesbyname'] = 'Aktivitätensuche nach Name';
$string['searchresults'] = 'Suchergebnisse: {$a}';
$string['studentsatriskincourse'] = 'Gefährdete Teilnehmer/innen im Kurs {$a}';
$string['studentsatriskinfomessage'] = 'Guten Tag  {$a->userfirstname},
<p>Teilnehmer/innen im Kurs {$a->coursename} wurden als gefährdet eingestuft, das Kursziel zu erreichen.</p>';
$string['submitsearch'] = 'Suche übertragen';
$string['target:coursecompetencies'] = 'Teilnehmener/innen, die Gefahr laufen, die einem Kurs zugeordneten Kompetenzen nicht zu erreichen.';
$string['target:coursecompetencies_help'] = 'Dieses Ziel beschreibt, ob eine Person Gefahr läuft, die einem Kurs zugeordneten Kompetenzen nicht zu erreichen. Dieses Ziel berücksichtigt, dass alle dem Kurs zugeordneten Kompetenzen bis zum Ende des Kurses erreicht sein müssen.';
$string['target:coursecompletion'] = 'Teilnehmer/innen, die Gefahr laufen, die Abschlussbedingungen für den Kurs nicht zu erfüllen.';
$string['target:coursecompletion_help'] = 'Dieses Ziel beschreibt, ob eine Person Gefahr läuft, die Abschlussbedingungen für den Kurs nicht zu erfüllen.';
$string['target:coursedropout'] = 'Teilnehmer/innen, die Gefahr laufen, aus dem Kurs auszusteigen.';
$string['target:coursedropout_help'] = 'Dieses Ziel beschreibt, ob eine Person Gefahr läuft, auszusteigen.';
$string['target:coursegradetopass'] = 'Teilnehmer/innen, die Gefahr laufen, die Bestehensgrenze des Kurses nicht zu erreichen.';
$string['target:coursegradetopass_help'] = 'Dieses Ziel beschreibt, ob eine Person Gefahr läuft, die Bestehensgrenze des Kurses nicht zu erreichen.';
$string['target:noaccesssincecoursestart'] = 'Teilnehmer/innen, die bislang noch nicht im Kurs waren';
$string['target:noaccesssincecoursestart_help'] = 'Dieses Ziel beschreibt Teilnehmer/innen, die noch nie auf einen Kurs zugegriffen haben, obwohl sie eingeschrieben sind.';
$string['target:noaccesssincecoursestartinfo'] = 'Die folgenden Teilnehmer/innen sind in einen laufenden Kurs eingeschrieben, haben aber nie auf den Kurs zugegriffen.';
$string['target:norecentaccesses'] = 'Teilnehmer/innen, die in letzter Zeit nicht auf den Kurs zugegriffen haben.';
$string['target:norecentaccesses_help'] = 'Dieses Ziel beschreibt Teilnehmer/innen, die innerhalb des festgelegten Analyseintervalls noch nicht auf einen Kurs zugegriffen haben, obwohl sie eingeschrieben sind (Standard: im letzten Monat).';
$string['target:norecentaccessesinfo'] = 'Teilnehmer/innen, die innerhalb des festgelegten Analyseintervalls noch nicht auf einen Kurs zugegriffen haben, obwohl sie eingeschrieben sind  (Standard: im letzten Monat).';
$string['target:noteachingactivity'] = 'Kurse, bei denen die Gefahr besteht, dass sie nicht beginnen.';
$string['target:noteachingactivity_help'] = 'Dieses Ziel beschreibt, ob  in Kursen, die in der kommenden Woche beginnen sollen, bereits Lernaktivitäten angelegt wurden.';
$string['target:noteachingactivityinfo'] = 'Die folgenden Kurse, die in den kommenden Tagen beginnen sollen, laufen Gefahr, nicht zu beginnen, da keine Trainer/innen oder Teilnehmer/innen eingeschrieben sind.';
$string['targetlabelstudentcompetenciesno'] = 'Teilnehmer/innen, die wahrscheinlich die einem Kurs zugeordneten Kompetenzen erreichen werden.';
$string['targetlabelstudentcompetenciesyes'] = 'Teilnehmer/innen, die wahrscheinlich die einem Kurs zugeordneten Kompetenzen erreichen werden.';
$string['targetlabelstudentcompletionno'] = 'Teilnehmer/innen, die wahrscheinlich die Abschlussbedingungen für den Kurs erreichen werden.';
$string['targetlabelstudentcompletionyes'] = 'Teilnehmer/innen, die Gefahr laufen, die Abschlussbedingungen für den Kurs nicht zu erfüllen.';
$string['targetlabelstudentdropoutno'] = 'Nicht gefährdet';
$string['targetlabelstudentdropoutyes'] = 'Teilnehmer/in, die Gefahr läuft, aus dem Kurs auszusteigen.';
$string['targetlabelstudentgradetopassno'] = 'Teilnehmer/innen, die wahrscheinlich die Bestehensgrenze des Kurses erreichen werden.';
$string['targetlabelstudentgradetopassyes'] = 'Teilnehmer/innen, die Gefahr laufen, die Bestehensgrenze des Kurses nicht zu erreichen.';
$string['targetlabelteachingno'] = 'Kurse, bei denen die Gefahr besteht, dass sie nicht beginnen';
$string['targetlabelteachingyes'] = 'Nutzer/innen mit Trainer/innenrechten, die Zugang zum Kurs haben';
