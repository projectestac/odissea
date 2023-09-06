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
 * Strings for component 'qcreate', language 'de', version '4.1'.
 *
 * @package     qcreate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclosed'] = 'Die Aktivität ist nicht verfügbar.';
$string['activitygrade'] = 'Sie wurden mit {$a->grade} / {$a->outof} bewertet.';
$string['activityname'] = 'Name der Aktivität';
$string['activityopen'] = 'Die Aktivität ist verfügbar.';
$string['addminimumquestionshdr'] = 'Erforderliche Anzahl Fragen pro Typ (optional)';
$string['addmorerequireds'] = 'Hinzufügen von weiteren Fragentypen';
$string['allandother'] = 'Um alle Fragentypen zuzulassen klicken Sie \'{$a}\' ohne andere Optionen auszuwählen.';
$string['allowall'] = 'Alle Fragentypen zulassen';
$string['allowedqtypes'] = 'Bewertete Fragentypen';
$string['allowedqtypes_help'] = 'Hier legen Sie fest, welche Fragentypen sie zulassen. Wenn Sie alle Fragentypen zulassen auswählen, können Teilnehmer  bis zur definierten Maximalanzahl Fragen von einem beliebigen Fragentyp anlegen.';
$string['allquestions'] = '0 - (Alle Fragen)';
$string['alreadydone'] = 'Sie haben {$a} Fragen von diesem Typ erstellt.';
$string['alreadydoneextra'] = 'Sie haben {$a} Extrafragen von diesem Typ erstellt.';
$string['alreadydoneextraone'] = 'Sie haben eine Extrafrage von diesem Typ erstellt.';
$string['alreadydoneone'] = 'Sie haben eine Frage von diesem Typ erstellt.';
$string['and'] = '{$a} UND';
$string['andmorenewquestions'] = 'und {$a} weitere neue Frage(n).';
$string['automaticgrade'] = 'Sie haben {$a->done} of {$a->required} Fragen erstellt. Dafür wurden Sie automatisch mit {$a->grade} / {$a->outof} bewertet.';
$string['availability'] = 'Verfügbarkeit';
$string['clickhere'] = 'Klicken Sie hier, um eine Frage vom Typ \'{$a}\' zu erstellen.';
$string['clickhereanother'] = 'Klicken Sie hier, um eine weitere Frage vom Typ \'{$a}\' zu erstellen.';
$string['close'] = 'Aktivität beenden';
$string['closeon'] = 'Endet am';
$string['comment'] = 'Kommentar';
$string['completionquestions'] = 'Zu erstellen sind:';
$string['completionquestions_help'] = 'Bei dieser Auswahl wird die Aktivität  (unabhängig von der Bewertung) als abgeschlossen gekennzeichnet wenn der Teilnehmer die angegebene Anzahl von Fragen erstellt hat.';
$string['completionquestionsgroup'] = 'Erforderliche Fragen';
$string['confirmdeletequestion'] = 'Sind Sie sicher, dass sie diese Frage löschen wollen?';
$string['createdquestions'] = 'Erstellte Fragen';
$string['creating'] = 'Fragen erstellen';
$string['deletegrades'] = 'Erstellte Fragen löschen, die manuell bewertet wurden';
$string['donequestionno'] = 'Sie haben {$a->done} of {$a->no} Fragen vom \'{$a->qtypestring}\' Typ erstellt.';
$string['eventeditpageviewed'] = 'Die Bearbeitungsseite Frageerstellung wurde aufgerufen';
$string['eventoverviewviewed'] = 'Die Übersichtsseite Frageerstellung wurde aufgerufen';
$string['eventquestiongraded'] = 'Fragen bewertet';
$string['eventquestionregraded'] = 'Fragen neu bewertet';
$string['exportgood'] = 'Export von nutzbaren Fragen';
$string['exportgoodquestions'] = 'Fragen exportieren die oberhalb einer bestimmten Bewertung liegen';
$string['exportnaming'] = 'Prefix, mit dem die Namen der Fragen exportiert werden';
$string['exportquestions'] = 'Fragen in eine Datei exportieren';
$string['exportselection'] = 'Nur diese Fragen exportieren';
$string['extraqdone'] = 'Sie haben eine Extrafrage erstellt.';
$string['extraqgraded'] = 'Eine der aufgeführten Fragen wird unabhängig vom Typ bewertet';
$string['extraqsdone'] = 'Sie haben {$a->extraquestionsdone} Extrafragen erledigt.';
$string['extraqsgraded'] = '{$a->extrarequired}';
$string['fullstop'] = '{$a}.';
$string['grade'] = 'Bewertung';
$string['grade_help'] = 'Dies ist die Gesamtbewertung, die in die Bewertungsübersicht eingetragen wird. Die Einstellung \'keine Bewertung\'  unterdrückt diesen Effekt.';
$string['gradeallautomatic'] = 'Die automatische Bewertung ist vollständig, keine manuelle Bewertung ausgewählt.';
$string['gradeallmanual'] = 'Die manuelle Bewertung ist vollständig, keine automatische Bewertung ausgewählt.';
$string['gradeavailablehtml'] = '{$a->username}  hat die von Ihnen erstellte Frage
\'<i>{$a->questionname}</i>\' for \'<i>{$a->qcreate}</i>\'<br /><br /> bewertet. Das Ergebnis sehen Sie  <a href="{$a->url}">activity page</a>.';
$string['gradeavailablesmall'] = '{$a->username} hat die von Ihnen erstellte Frage mit {$a->qcreate} bewertet';
$string['gradeavailabletext'] = '{$a->username} hat die von Ihnen erstellte Frage mit {$a->qcreate} bewertet.
Das Ergebnis ist kann eingesehen werden: {$a->url}';
$string['graded'] = 'Bewertet';
$string['grademixed'] = 'Die Bewertung ist zu {$a->automatic}%%  automatisch, {$a->manual}%% manuell.';
$string['gradequestions'] = 'Fragen bewerten';
$string['graderatio'] = 'Verhältnis automatische Bewertung/manuelle Bewertung';
$string['graderatio_help'] = 'Hier wird festgelegt, wie sich die Bewertung aufteilt: der Prozentsatz für die automatische Bewertung findet sich auf der linken Seite, der für die manuelle Bewertung auf der rechten Seite. Die automatische Bewertung ist die Benotung durch das Systems für die Erstellung einer Frage.';
$string['graderatiois'] = 'Verhältnis automatische Bewertung/manuelle Bewertung: {$a}';
$string['graderatiooptions'] = '{$a->automatic} / {$a->manual}';
$string['gradesdeleted'] = 'Fragen und manuelle Bewertungen wurden entfernt';
$string['grading'] = 'Bewertung';
$string['intro'] = 'Einführung';
$string['invalidqcreatezid'] = 'Unzulässige Fragenummer';
$string['manualgrade'] = 'Der Kursleiter hat die von Ihnen erstellten Fragen mit {$a->grade} / {$a->outof} bewertet.';
$string['marked'] = 'Gekennzeichnet';
$string['messageprovider:gradernotification'] = 'Mitteilung Fragenerstellung';
$string['messageprovider:studentnotification'] = 'Mitteilung Fragenbewertung';
$string['minimumquestions'] = 'Mindestanzahl Fragen';
$string['minimumquestions_help'] = 'In diesem Menü können Sie festlegen, wie viele Fragen eines bestimmten Typs die Teilnehmer  zu erstellen haben.';
$string['modulename'] = 'Fragen entwickeln';
$string['modulename_help'] = 'Über die Aktivität \'Fragen entwickeln\' kann der Dozent die  Kursteilnehmern auffordern, eine bestimmte Anzahl eigener Fragen eines bestimmten Typs zu erstellen.';
$string['modulename_link'] = 'mod/qcreate/view';
$string['modulenameplural'] = 'Frage entwickeln';
$string['needsgrading'] = 'Bewertung erforderlich';
$string['needsregrading'] = 'Neue Bewertung erforderlich';
$string['needtoallowatleastoneqtype'] = 'Sie müssen mindestens einen Fragentypen zulassen';
$string['needtoallowqtype'] = 'Sie müssen Fragentyp \'{$a}\' zulassen um eine Mindestanzahl von erforderlichen Fragen dieses Typs vorzugeben.';
$string['newquestions'] = 'Es wurden neue Fragen erstellt.';
$string['noofquestionstotal'] = 'Gesamtzahl bewerteter Fragen';
$string['noofquestionstotal_help'] = 'Dies ist die Gesamtanzahl der Fragen, die  von den Teilnehmern zu erstellen sind.';
$string['noquestions'] = 'Es wurden noch keine Fragen erstellt.';
$string['noquestionsabove'] = 'Es gibt keine Frage die aufgrund der Einstellungen {$a->betterthan} manuell zu bewerten sind in der Kategorie  \'{$a->categoryname}\'.';
$string['notgraded'] = 'Noch zu bewerten';
$string['notifications'] = 'Mitteilungen';
$string['nousers'] = 'Es sind keine Teilnehmer in diesem Kurs/dieser Gruppe eingeschrieben.';
$string['open'] = 'Aktivität verfügbar';
$string['open_help'] = 'Sie können eine Zeitspanne definieren, in der die Aktivität für die Teilnehmer verfügbar ist. Außerhalb dieser Zeitspanne können die Teilnehmer keine Fragen anlegen.';
$string['openmustbemorethanclose'] = 'Der Anfangszeitpunkt muss vor dem Zeitpunkt der Beerdigung liegen.';
$string['openon'] = 'Verfügbar ab';
$string['overview'] = 'Übersicht';
$string['pagesize'] = 'Anzahl von Fragen pro Seite';
$string['pluginadministration'] = 'Administration';
$string['pluginname'] = 'Fragen Generator';
$string['preview'] = 'Vorschau';
$string['previewquestion'] = 'Vorschaufrage';
$string['qcreate:grade'] = 'Fragenbewertung';
$string['qcreate:receivegradernotifications'] = 'Bewertungsmitteilung erhalten';
$string['qcreate:receivestudentnotifications'] = 'Teilnehmer Mitteilung erhalten';
$string['qcreate:submit'] = 'Frage erstellen';
$string['qcreate:view'] = 'Aktivität zur Fragenerstellung anzeigen';
$string['qcreatecloses'] = 'Die Verfügbarkeit der Aktivität endet';
$string['qsgraded'] = '{$a} Fragen eines beliebigen Fragentyps werden bewertet:';
$string['qtype'] = 'Fragentyp';
$string['qtype_help'] = 'In diesem Menü können Sie auswählen, welche Fragentypen Teilnehmer erstellen können.';
$string['questions'] = 'Anzahl der Fragen, um diese Aktivität abzuschließen.';
$string['questionscreated'] = '{$a} Frage(n) erstellt';
$string['questiontogradehtml'] = '{$a->username} hat eine neue Frage erstellt <i>\'{$a->questionname}\'</i>
für <i>\'{$a->qcreate}\'  um {$a->timeupdated}</i><br /><br />
Siehe:  <a href="{$a->url}"></a>.';
$string['questiontogradesmall'] = '{$a->username} hat eine neue Frage für {$a->qcreate} erstellt';
$string['questiontogradetext'] = '{$a->username} hat am {$a->timeupdated} eine neue Frage für \'{$a->qcreate}\' erstellt.

Siehe:     {$a->url}';
$string['requiredanyplural'] = '{$a->no} Fragen eines beliebigen Fragentyps sind zu erstellen';
$string['requiredanysingular'] = 'Eine Frage eines beliebigen Fragentyps ist zu erstellen.';
$string['requiredplural'] = '{$a->no} Fragen des Typs \'{$a->qtypestring}\' sind zu erstellen';
$string['requiredquestions'] = 'Zu erstellende Fragen:';
$string['requiredsingular'] = 'Eine Frage des Typs \'{$a->qtypestring}\' ist zu erstellen';
$string['saveallfeedback'] = 'Alle Feedbackeinträge speichern';
$string['saveallfeedbackandgrades'] = 'Alle Noten & Feedbackeinträge speichern';
$string['selectone'] = 'Auswahl:';
$string['sendgradernotifications'] = 'Bewertende benachrichtigen';
$string['sendgradernotifications_help'] = 'Bei dieser Auswahl erhalten die bewertende (in der Regel Kursleiter) eine Mitteilung, wenn ein Student eine neue Frage erstellt. Die Mitteilungsroutinen sind konfigurierbar.';
$string['sendstudentnotifications'] = 'Teilnehmer benachrichtigen';
$string['sendstudentnotifications_help'] = 'Bei dieser Auswahl erhalten die Teilnehmer eine Mitteilung wenn eine von Ihnen erstellte Frage bewertet wurde.';
$string['show'] = 'Anzeige';
$string['showgraded'] = 'Fragen, die keiner Bewertung bedürfen';
$string['showneedsregrade'] = 'Fragen, die der Neu-Bewertung bedürfen';
$string['showungraded'] = 'Fragen, die der Bewertung bedürfen';
$string['specifictext'] = 'Spezifischer Text';
$string['studentaccessaddonly'] = 'nur Fragen anlegen';
$string['studentaccessedit'] = 'Vorschau / Anzeige / Kopieren / Bearbeiten / Löschen';
$string['studentaccessheader'] = 'Rechte der Studierenden';
$string['studentaccesspreview'] = 'Vorschau';
$string['studentaccesssaveasnew'] = 'Vorschau / Anzeige / Kopieren';
$string['studentqaccess'] = 'zu eigenen Fragen';
$string['studentqaccess_help'] = 'Nutzen Sie dieses Menü, um die Zugriffsrechte der Teilnehmer über selbst erstellten Fragen festzulegen.';
$string['studentshavedone'] = 'Die Teilnehmer haben {$a} Fragen erstellt.';
$string['synchronizeqaccesstask'] = 'Synchronisierung der Zugriffsrechte der Teilnehmer';
$string['timeclose'] = 'Die Verfügbarkeit der Aktivität endet um {$a->timeclose}';
$string['timeclosed'] = 'Die Verfügbarkeit der Aktivität endete um {$a->timeclose}';
$string['timenolimit'] = 'Keine zeitliche Einschränkung';
$string['timeopen'] = 'Die Verfügbarkeit der Aktivität beginnt um {$a->timeopen}.';
$string['timeopenclose'] = 'Die Aktivität ist von {$a->timeopen} bis {$a->timerlose} verfügbar.';
$string['timeopened'] = 'Die Verfügbarkeit der Aktivität begann um {$a->timeopen}.';
$string['timewillclose'] = 'Die Verfügbarkeit der Aktivität endet am {$a}.';
$string['timewillopen'] = 'Die Verfügbarkeit der Aktivität Beginnt am {$a}.';
$string['timing'] = 'Verfügbarkeitsaktivität';
$string['totalgrade'] = 'Gesamtnote';
$string['totalgradeis'] = 'Gesamtnote: {$a}';
$string['totalrequiredislessthansumoftotalsforeachqtype'] = 'Die erforderliche Gesamtanzahl ist geringer als die Summe der bewerteten Fragen der einzelnen Fragentypen. Die erforderliche Gesamtzahl muss gleich oder höher sein.';
$string['updategradestask'] = 'Aktualisierung der Bewertung';
$string['username'] = 'Name des Frageherstellers';
$string['youhavedone'] = 'Sie haben {$a} Fragen erstellt.';
$string['youvesetmorethanonemin'] = 'Sie haben mehr als eine Mindestanzahl für Fragetyp \'{$a}\' definiert.';
