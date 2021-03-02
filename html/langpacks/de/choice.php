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
 * Strings for component 'choice', language 'de', version '3.8'.
 *
 * @package     choice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoices'] = 'Optionen hinzufügen';
$string['allowmultiple'] = 'Mehr als eine Auswahl erlauben';
$string['allowupdate'] = 'Änderung der Auswahl erlauben';
$string['answered'] = 'Beantwortet';
$string['atleastoneoption'] = 'Sie müssen mindestens eine mögliche Abstimmoption angeben.';
$string['calendarend'] = '{$a} endet';
$string['calendarstart'] = '{$a} beginnt';
$string['cannotsubmit'] = 'Ihre Auswahl konnte nicht gespeichert werden. Versuchen Sie es bitte noch einmal.';
$string['choice'] = 'Abstimmung';
$string['choice:addinstance'] = 'Neue Abstimmung hinzufügen';
$string['choice:choose'] = 'Abstimmung vornehmen';
$string['choice:deleteresponses'] = 'Antworten ändern und löschen';
$string['choice:downloadresponses'] = 'Antworten herunterladen';
$string['choice:readresponses'] = 'Antworten anzeigen';
$string['choice:view'] = 'Abstimmungsaktivität anzeigen';
$string['choiceactivityname'] = 'Abstimmung: {$a}';
$string['choiceclose'] = 'Antworten zulassen bis';
$string['choicecloseson'] = 'Ende der Abstimmung: {$a}';
$string['choicefull'] = 'Eine oder mehrere von Ihnen gewählte Optionen sind bereits voll. Ihre Auswahl wurde nicht gespeichert. Wählen Sie etwas anderes.';
$string['choicename'] = 'Abstimmungsname';
$string['choiceopen'] = 'Antworten zulassen ab';
$string['choiceoptions'] = 'Abstimmungsoptionen';
$string['choiceoptions_help'] = 'Tragen Sie die Abstimmoptionen ein, zwischen denen sich die Teilnehmer/innen entscheiden sollen.

Sie können jedes der vorhandenen Felder ausfüllen, Sie dürfen aber auch nicht benötigte Felder leer lassen, die dann in der Abstimmung nicht angezeigt werden. Weitere Optionsfelder erhalten Sie über den Knopf "Optionen hinzufügen".';
$string['choicesaved'] = 'Ihre Auswahl wurde gespeichert';
$string['choicetext'] = 'Abstimmungstext';
$string['chooseaction'] = 'Aktion auswählen...';
$string['chooseoption'] = 'Auswahl: {$a}';
$string['closebeforeopen'] = 'Das Enddatum kann nicht vor dem Startdatum liegen.';
$string['completionsubmit'] = 'Als abgeschlossen anzeigen, wenn die Person eine Option gewählt hat.';
$string['description'] = 'Beschreibung';
$string['deselectalloption'] = 'Alles abwählen "{$a}"';
$string['displayhorizontal'] = 'Horizontal anzeigen';
$string['displaymode'] = 'Anzeigemodus';
$string['displayvertical'] = 'Vertikal anzeigen';
$string['eventanswercreated'] = 'Abstimmungsantwort hinzugefügt';
$string['eventanswerdeleted'] = 'Abstimmungsantwort gelöscht';
$string['eventanswersubmitted'] = 'Abstimmung durchgeführt';
$string['eventanswerupdated'] = 'Abstimmung aktualisiert';
$string['eventreportdownloaded'] = 'Abstimmungsübersicht heruntergeladen';
$string['eventreportviewed'] = 'Abstimmungsübersicht angezeigt';
$string['expired'] = 'Diese Abstimmung ist seit {$a} beendet.';
$string['full'] = '(Nicht verfügbar)';
$string['havetologin'] = 'Sie müssen angemeldet sein, um sich an der Abstimmung beteiligen zu können.';
$string['includeinactive'] = 'Einschließlich Ergebnissen von inaktiven/gesperrten Nutzer/innen';
$string['indicator:cognitivedepth'] = 'Abstimmung kognitiv';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die eine Person in einer Abstimmungsaktivität erreicht hat.';
$string['indicator:cognitivedepthdef'] = 'Abstimmung kognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Die Person hat diesen Prozentsatz des kognitiven Engagements erreicht, das die Abstimmungsaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Ansicht, Ansicht, Beiträge, Feedback anzeigen).';
$string['indicator:socialbreadth'] = 'Abstimmung sozial';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die eine Person in einer Abstimmungsaktivität erreicht hat.';
$string['indicator:socialbreadthdef'] = 'Abstimmung sozial';
$string['indicator:socialbreadthdef_help'] = 'Die Person hat diesen Prozentsatz des soziale Engagements erreicht, das die Abstimmungsaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Teilnahme, Teilnahme allein, Teilnahme mit anderen).';
$string['limit'] = 'Obergrenze';
$string['limitanswers'] = 'Anzahl der Antworten bei den Abstimmungsoptionen beschränken';
$string['limitanswers_help'] = 'Diese Option setzt die maximale Anzahl von möglichen Stimmabgaben für die betreffende Abstimmoption. Sobald diese Obergrenze erreicht ist, kann sich niemand mehr für diese Abstimmoption entscheiden.

Wenn Sie diese Aktivität im Gruppenmodus nutzen, gilt dieses Limit pro Gruppe. Wenn die Obergrenze beispielsweise auf 5 gesetzt wird, dann können jeweils 5 Mitglieder einer Gruppe sich für diese Option entscheiden. Wenn es 3 Gruppen gibt, würde das bedeuten, dass bis zu 5 x 3 = 15 Teilnehmende diese Option wählen könnten.

Wenn die Obergrenzen deaktiviert sind, gibt es keine Beschränkungen bei der Abstimmung.';
$string['limitno'] = 'Obergrenze {no}';
$string['modulename'] = 'Abstimmung';
$string['modulename_help'] = 'Mit der Abstimmung können Sie im Kurs eine Frage mit vordefinierten Antwortmöglichkeiten stellen.

Die Ergebnisse können direkt nachdem die Teilnehmer/innen geantwortet haben, ab einem bestimmten Zeitpunkt oder gar nicht angezeigt werden. Wählen Sie, ob das Abstimmungsverhalten sichtbar oder anonym sein soll (wobei Trainer/innen die Namen der Teilnehmer/innen und ihre Antworten stets sehen können).

Eine Abstimmungs-Aktivität kann verwendet werden

* Als schnelle Umfrage, um das Nachdenken über ein Thema anzuregen
* Um das Verständnis der Teilnehmer/innen schnell zu testen
* Um den Teilnehmer/innen die Entscheidungsfindung zu erleichtern, z.B. die Möglichkeit, über eine Richtung für den Kurs abzustimmen';
$string['modulenameplural'] = 'Abstimmungen';
$string['moveselectedusersto'] = 'Ausgewählte Nutzer/innen bewegen nach...';
$string['multiplenotallowederror'] = 'In dieser Auswahl ist nur eine Antwort erlaubt.';
$string['mustchooseone'] = 'Sie müssen eine Option auswählen, um sie speichern können.';
$string['noguestchoose'] = 'Gäste dürfen an Abstimmungen nicht teilnehmen.';
$string['noresultsviewable'] = 'Ergebnisse sind aktuell nicht sichtbar.';
$string['notanswered'] = 'Nicht abgestimmt';
$string['notenrolledchoose'] = 'Nur eingeschriebene Teilnehmer/innen dürfen an Abstimmungen teilnehmen.';
$string['notopenyet'] = 'Die Aktivität ist nicht verfügbar bis {$a}.';
$string['numberofuser'] = 'Anzahl der Antworten';
$string['numberofuserinpercentage'] = 'Prozent der Antworten';
$string['openafterclose'] = 'Das Enddatum kann nicht vor dem Startdatum liegen.';
$string['option'] = 'Abstimmoption';
$string['optionno'] = 'Option {no}';
$string['options'] = 'Optionen';
$string['page-mod-choice-x'] = 'Jede Abstimmungsseite';
$string['pluginadministration'] = 'Abstimmungs-Administration';
$string['pluginname'] = 'Abstimmung';
$string['previewonly'] = 'Diese Vorschau zeigt die verfügbaren Optionen für diese Aktivität. Sie können Ihre Wahl nicht vor {$a} einreichen.';
$string['privacy'] = 'Ergebnisse anonym darstellen';
$string['privacy:metadata:choice_answers'] = 'Informationen über die von der Person ausgewählte/n Antwort/en für eine bestimmte Abstimmung';
$string['privacy:metadata:choice_answers:choiceid'] = 'ID der Abstimmung';
$string['privacy:metadata:choice_answers:optionid'] = 'Option-ID, die die Person ausgewählt hat';
$string['privacy:metadata:choice_answers:timemodified'] = 'Zeitpunkt, zu dem die Abstimmung aktualisiert wurde';
$string['privacy:metadata:choice_answers:userid'] = 'Nutzer-ID, die die Abstimmung durchgeführt hat';
$string['publish'] = 'Ergebnisse veröffentlichen';
$string['publishafteranswer'] = 'Nach eigener Stimmabgabe';
$string['publishafterclose'] = 'Nach Abstimmungsende';
$string['publishalways'] = 'Ergebnisse immer zeigen';
$string['publishanonymous'] = 'Ergebnisse ohne Namen';
$string['publishinfoanonafter'] = 'Ergebnisse werden ohne Namensnennung nach Ihrer Antwort veröffentlicht.';
$string['publishinfoanonclose'] = 'Ergebnisse werden ohne Namensnennung nach Abschluss der Aktivität veröffentlicht.';
$string['publishinfofullafter'] = 'Ergebnisse werden vollständig mit Namensnennung nach Ihrer Antwort veröffentlicht.';
$string['publishinfofullclose'] = 'Ergebnisse werden nach Abschluss der Aktivität vollständig mit Namensnennung veröffentlicht.';
$string['publishinfonever'] = 'Die Ergebnisse werden nach Ihrer Antwort nicht veröffentlicht.';
$string['publishnames'] = 'Ergebnisse mit Namen';
$string['publishnot'] = 'Keine Ergebnisse veröffentlichen';
$string['removemychoice'] = 'Meine Auswahl löschen';
$string['removeresponses'] = 'Alle Stimmabgaben löschen';
$string['responses'] = 'Antworten';
$string['responsesresultgraphheader'] = 'Grafische Darstellung';
$string['responsesto'] = 'Antworten zu {$a}';
$string['results'] = 'Ergebnisse';
$string['savemychoice'] = 'Meine Auswahl speichern';
$string['search:activity'] = 'Abstimmung - Beschreibung';
$string['selectalloption'] = 'Alles auswählen "{$a}"';
$string['showpreview'] = 'Vorschau anzeigen';
$string['showpreview_help'] = 'Diese Option legt fest, ob die verfügbaren Wahlmöglichkeiten bereits vor dem Abstimmungsbeginn angezeigt werden.';
$string['showunanswered'] = 'Teilnehmer/innen ohne Antwort anzeigen';
$string['spaceleft'] = 'Platz verfügbar';
$string['spacesleft'] = 'Plätze verfügbar';
$string['taken'] = 'Eingetragen';
$string['userchoosethisoption'] = 'Teilnehmer/innen mit dieser Auswahl';
$string['viewallresponses'] = '{$a} Antworten zeigen';
$string['viewchoices'] = 'Auswahl anzeigen';
$string['withselected'] = 'Mit Auswahl';
$string['yourselection'] = 'Ihre Auswahl';
