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
 * Strings for component 'workshop', language 'de', branch 'MOODLE_31_STABLE'
 *
 * @package   workshop
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregategrades'] = 'Bewertungen neu berechnen';
$string['aggregation'] = 'Punkteberechnung';
$string['allocate'] = 'Einreichungen zuordnen';
$string['allocatedetails'] = 'erwartet: {$a->expected}<br />eingereicht: {$a->submitted}<br />zuzuordnen: {$a->allocate}';
$string['allocation'] = 'Einreichungen zuordnen';
$string['allocationconfigured'] = 'Zuordnung konfiguriert';
$string['allocationdone'] = 'Zuordnung erledigt';
$string['allocationerror'] = 'Zuordnungsfehler';
$string['allowedfiletypesforoverallfeedback'] = 'Erlaubte Dateitypen für Feedbackanhänge';
$string['allowedfiletypesforoverallfeedback_help'] = 'Die erlaubten Dateitypen für das Feedback können über eine kommagetrennte Liste von Dateiextension eingeschränkt werden, z.B. \'mp4, mp3, png, jpg\'. Wenn die Liste leer ist, sind alle Dateitypen zugelassen.';
$string['allowedfiletypesforsubmission'] = 'Erlaubte Dateitypen für Abgabeanhänge';
$string['allowedfiletypesforsubmission_help'] = 'Die erlaubten Dateitypen für die Abgabe können über eine kommagetrennte Liste von Dateiextension eingeschränkt werden, z.B. \'mp4, mp3, png, jpg\'. Wenn die Liste leer ist, sind alle Dateitypen zugelassen.';
$string['allsubmissions'] = 'Alle Einreichungen ({$a})';
$string['alreadygraded'] = 'Bereits bewertet';
$string['areaconclusion'] = 'Abschlusstext';
$string['areainstructauthors'] = 'Aufgabenstellung';
$string['areainstructreviewers'] = 'Hinweise zur Bewertung';
$string['areaoverallfeedbackattachment'] = 'Gesamtfeedback Anhänge';
$string['areaoverallfeedbackcontent'] = 'Gesamtfeedback Texte';
$string['areasubmissionattachment'] = 'Dateianhänge zur Einreichung';
$string['areasubmissioncontent'] = 'Einreichungstexte';
$string['assess'] = 'Beurteilen';
$string['assessedexample'] = 'Beurteilte Beispieleinreichung';
$string['assessedsubmission'] = 'Beurteilte Einreichung';
$string['assessingexample'] = 'Beispieleinreichung beurteilen';
$string['assessingsubmission'] = 'Einreichung beurteilen';
$string['assessment'] = 'Beurteilung';
$string['assessmentby'] = 'von <a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = 'Beurteilt von {$a}';
$string['assessmentbyyourself'] = 'Beurteilung/en';
$string['assessmentdeleted'] = 'Beurteilung freigeben';
$string['assessmentend'] = 'Beurteilungen bis';
$string['assessmentendbeforestart'] = 'Der Abgabetermin der Beurteilungen kann nicht vor dem Beginn des Beurteilungszeitraums liegen.';
$string['assessmentenddatetime'] = 'Beurteilungen sind möglich bis {$a->daydatetime} ({$a->distanceday})';
$string['assessmentendevent'] = '{$a} (Abgabetermin der Beurteilungen)';
$string['assessmentform'] = 'Beurteilungsbogen';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">Beurteilung</a> von <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentreference'] = 'Beispielbeurteilung';
$string['assessmentreferenceconflict'] = 'Es ist nicht möglich eine Beispiellösung zu bewerten, die man selbst referenziert hat.';
$string['assessmentreferenceneeded'] = 'Bevor Sie die eigentlich Beurteilung vornehmen können, müssen Sie diese Beispieleinreichung betrachten. Um die Einreichung zu bewerten, klicken Sie bitte auf den \'Weiter\'-Button.';
$string['assessmentsettings'] = 'Beurteilungseinstellungen';
$string['assessmentstart'] = 'Beurteilungen ab';
$string['assessmentstartdatetime'] = 'Beurteilungen sind möglich ab {$a->daydatetime} ({$a->distanceday})';
$string['assessmentstartevent'] = '{$a} (Start der Beurteilungen)';
$string['assessmentweight'] = 'Gewichtung Beurteilung';
$string['assignedassessments'] = 'Zur Beurteilung zugeordnete Einreichungen';
$string['assignedassessmentsnone'] = 'Sie haben keine zugeordneten Einreichungen zu beurteilen';
$string['backtoeditform'] = 'Zurück zur Einstellungsseite';
$string['byfullname'] = 'von <a href="{$a->url}">{$a->name}</a>';
$string['calculategradinggrades'] = 'Punkte für das Beurteilen berechnen';
$string['calculategradinggradesdetails'] = 'erwartet: {$a->expected}<br />errechnet: {$a->calculated}';
$string['calculatesubmissiongrades'] = 'Punkte für das Einreichen berechnen';
$string['calculatesubmissiongradesdetails'] = 'erwartet: {$a->expected}<br />berechnet: {$a->calculated}';
$string['chooseuser'] = 'Nutzer/in auswählen';
$string['clearaggregatedgrades'] = 'Lösche alle errechneten Punkte';
$string['clearaggregatedgradesconfirm'] = 'Sind Sie sich sicher, dass Sie alle berechneten Punkte  für die Einreichung und die Beurteilung löschen wollen?';
$string['clearaggregatedgrades_help'] = 'Die errechneten Punkte für die Einreichung und die Beurteilungen werden zurückgesetzt. Sie können diese Punkte in der Bewertungsphase von Grund auf neu berechnen.';
$string['clearassessments'] = 'Lösche die Bewertungen';
$string['clearassessmentsconfirm'] = 'Sind Sie sich sicher, dass Sie alle Punkte aus der Bewertung löschen wollen? Sie sind nicht in der Lage, diesen Vorgang rückgängig zu machen. Die Beurteilenden müssen die Einreichungen erneut beurteilen.';
$string['clearassessments_help'] = 'Die berechneten Bewertungen für Einreichungen und  Beurteilungen werden zurückgesetzt. Die Information in den ausgefüllten Beurteilungsformularen bleiben erhalten. Alle Bewerter müssen jedoch das Formular noch einmal aufrufen und wieder speichern, damit die Bewertungen neu errechnet werden. ';
$string['conclusion'] = 'Abschluss';
$string['conclusion_help'] = 'Der Abschlusstext wird  den Teilnehmer/innen am Ende der gegenseitigen Beurteilung angezeigt. Er kann ein Gesamt-Feedback, eine Zusammenfassung oder Anregungen für nächste Schritte (z. B. verfassen eines Blog-Beitrages zu den gesammelten Erfahrungen) enthalten.';
$string['configexamplesmode'] = 'Standardmodus für Beispieleinreichungen in gegenseitigen Beurteilungen';
$string['configgrade'] = 'Standardwert max. Einreichungspunktzahl in gegenseitigen Beurteilungen';
$string['configgradedecimals'] = 'Standardanzahl von Nachkommastellen bei der Anzeige von Punkten.';
$string['configgradinggrade'] = 'Standardwert für max. Bewertungspunktzahl in gegenseitigen Beurteilungen';
$string['configmaxbytes'] = 'Standardwert für die Größe von Dateianhängen an Einreichungen für alle gegenseitigen Beurteilungen dieser Website (Kurseinstellungen und andere lokale Einstellungen gelten weiter)';
$string['configstrategy'] = 'Standardwert für Beurteilungsart für gegenseitige Beurteilungen';
$string['createsubmission'] = 'Einreichen';
$string['daysago'] = 'vor {$a} Tagen';
$string['daysleft'] = '{$a} Tage verbleibend';
$string['daystoday'] = 'heute';
$string['daystomorrow'] = 'morgen';
$string['daysyesterday'] = 'gestern';
$string['deadlinesignored'] = 'Die Zeitvorgaben treffen auf Sie nicht zu';
$string['deletesubmission'] = 'Abgabe löschen';
$string['editassessmentform'] = 'Beurteilungsbogen bearbeiten';
$string['editassessmentformstrategy'] = 'Bearbeite Beurteilungsbogen ({$a})';
$string['editingassessmentform'] = 'Beurteilungsbogen bearbeiten';
$string['editingsubmission'] = 'Einreichung bearbeiten';
$string['editsubmission'] = 'Abgegebene Einreichung bearbeiten';
$string['err_multiplesubmissions'] = 'Während der Bearbeitung des Formulars wurde eine neue Einreichung abgegeben. Mehrere Einreichungen je Nutzer sind jedoch nicht erlaubt.  ';
$string['err_removegrademappings'] = 'Es ist nicht möglich die nicht verwendeten Punktetabellen zu löschen';
$string['err_unknownfileextension'] = 'Unbekannte Dateiendung: {$a}';
$string['err_wrongfileextension'] = 'Die Dateien ({$a->wrongfiles}) konnten nicht hochgeladen werden. Es sind nur die Dateitypen {$a->whitelist} zugelassen.';
$string['evaluategradeswait'] = 'Bitte warten Sie bis die Beurteilungen bewertet und die Punkte berechnet sind.';
$string['evaluation'] = 'Bewertung';
$string['evaluationmethod'] = 'Bewertungsmethode';
$string['evaluationmethod_help'] = 'Das Auswertungsverfahren bestimmt, wie die Punkte für die Beurteilung berechnet wird. Im Augenblick gibt es nur eine Option: Vergleich mit der besten Bewertung.';
$string['evaluationsettings'] = 'Einstellungen für rechnerische Bewertungen';
$string['eventassessableuploaded'] = 'Lösung hochgeladen';
$string['eventassessmentevaluated'] = 'Beurteilung geprüft';
$string['eventassessmentevaluationsreset'] = 'Beurteilungsprüfung zurückgesetzt';
$string['eventassessmentreevaluated'] = 'Beurteilung neu geprüft';
$string['eventphaseswitched'] = 'Phase gewechselt';
$string['eventsubmissionassessed'] = 'Abgabe beurteilt';
$string['eventsubmissionassessmentsreset'] = 'Abgabebeurteilungen gelöscht';
$string['eventsubmissioncreated'] = 'Abgabe angelegt';
$string['eventsubmissiondeleted'] = 'Abgabe gelöscht';
$string['eventsubmissionreassessed'] = 'Abgabe neu beurteilt';
$string['eventsubmissionupdated'] = 'Abgabe aktualisiert';
$string['eventsubmissionviewed'] = 'Abgabe angezeigt';
$string['example'] = 'Beispieleinreichung';
$string['exampleadd'] = 'Beispieleinreichung hinzufügen';
$string['exampleassess'] = 'Beurteilen einer Beispieleinreichung';
$string['exampleassessments'] = 'Beispieleinreichung zu beurteilen';
$string['exampleassesstask'] = 'Beurteilungsbeispiel';
$string['exampleassesstaskdetails'] = 'erwartet: {$a->expected}<br />beurteilt: {$a->assessed}';
$string['examplecomparing'] = 'Abgleich der Beurteilungen für die Beispieleinreichung';
$string['exampledelete'] = 'Beispieleinreichung löschen';
$string['exampledeleteconfirm'] = 'Möchten Sie dieses Beispiel wirklich löschen? Ein Klick auf \'Weiter\' löscht die Einreichung.';
$string['exampleedit'] = 'Beispieleinreichung ändern';
$string['exampleediting'] = 'Beispieleinreichung wird geändert';
$string['exampleneedassessed'] = 'Sie haben zuerst alle Beispieleinreichungen zu beurteilen';
$string['exampleneedsubmission'] = 'Sie haben zu erst Ihre Einreichung vorzunehmen und alle Beispieleinreichungen zu beurteilen';
$string['examplesbeforeassessment'] = 'Die Beispieleinreichungen stehen nach Ihrer Einreichung zur Verfügung. Bevor Sie andere Einreichungen beurteilen können, müssen Sie die Beispieleinreichung beurteilen.';
$string['examplesbeforesubmission'] = 'Beispieleinreichungen müssen vor der eigenen Einreichung beurteilt werden';
$string['examplesmode'] = 'Modus Verfahren Beispieleinreichung';
$string['examplesubmissions'] = 'Beispieleinreichung/en';
$string['examplesvoluntary'] = 'Die Beurteilung der Beispieleinreichung ist freiwillig';
$string['feedbackauthor'] = 'Rückmeldung an den / die Autor/in';
$string['feedbackauthorattachment'] = 'Dateianhang';
$string['feedbackby'] = 'Beurteilung von {$a}';
$string['feedbackreviewer'] = 'Rückmeldung an den/die Beurteiler/in';
$string['feedbacksettings'] = 'Feedback';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br /><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span>';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = 'Vergebene Punkte';
$string['gradecalculated'] = 'Berechnete Punkte für Einreichung';
$string['gradedecimals'] = 'Dezimalstellen bei Punkten';
$string['gradegivento'] = '&gt;';
$string['gradeinfo'] = 'Punkte: {$a->received} von {$a->max}';
$string['gradeitemassessment'] = '{$a->workshopname} (beurteilen)';
$string['gradeitemsubmission'] = '{$a->workshopname} (einreichen)';
$string['gradeover'] = 'Einreichungspunkte überschreiben';
$string['gradereceivedfrom'] = '&lt;';
$string['gradesreport'] = 'Punktebericht für gegenseitige Beurteilung';
$string['gradetopassgrading'] = 'Erforderliche Aufgabenbewertung zum Bestehen';
$string['gradetopasssubmission'] = 'Erforderliche Bewertung zum Bestehen';
$string['gradinggrade'] = 'Beurteilungspunkte';
$string['gradinggradecalculated'] = 'Berechnete Beurteilungspunkte';
$string['gradinggrade_help'] = 'Diese Einstellung gibt an, wie viele Punkte maximal für die Einreichung vergeben werden.';
$string['gradinggradeof'] = 'Beurteilungspunkte (von {$a})';
$string['gradinggradeover'] = 'Beurteilungspunkte überschreiben';
$string['gradingsettings'] = 'Punkteeinstellungen';
$string['groupnoallowed'] = 'Sie können keiner Gruppe in dieser gegenseitigen Beurteilung beitreten.';
$string['iamsure'] = 'Ja, ich bin mir sicher';
$string['info'] = 'Info';
$string['instructauthors'] = 'Aufgabenstellung';
$string['instructreviewers'] = 'Hinweise zur Bewertung';
$string['introduction'] = 'Beschreibung';
$string['latesubmissions'] = 'Verspätete Einreichungen';
$string['latesubmissionsallowed'] = 'Verspätete Einreichungen sind zugelassen';
$string['latesubmissions_desc'] = 'Erlaube verspätete Einreichungen';
$string['latesubmissions_help'] = 'Mit dieser Funktion kann eine Einreichung auch nach dem festgelegten Abgabezeitpunkt noch abgegeben werden. Diese können danach jedoch nicht mehr bearbeitet werden. ';
$string['maxbytes'] = 'Maximale Dateigröße';
$string['modulename'] = 'Gegenseitige Beurteilung';
$string['modulename_help'] = 'Die gegenseitige Beurteilung (Peer Assessment, früher Workshop) ist ein besonderer mehrstufiger Aufgabentyp:

Teilnehmer/innen
- bewerten individuell Beispieleinreichungen für eine Aufgabe.
- erstellen eigene Aufgabenlösungen.
- nehmen Selbstbewertung vor.
- erhalten Feedback von anderen Teilnehmer/innen.

Zur Bewertung können verschiedene Kriterien hinterlegt werden.

Hinweis: Es müssen nicht alle Schritte aktiviert werden.';
$string['modulenameplural'] = 'Gegenseitige Beurteilungen';
$string['mysubmission'] = 'Meine Einreichung';
$string['nattachments'] = 'Maximale Anzahl von Dateianhängen beim Einreichen';
$string['noexamples'] = 'Es gibt in dieser gegenseitigen Beurteilung keine Beispieleinreichungen';
$string['noexamplesformready'] = 'Sie müssen zuerst den Beurteilungsbogen erstellen, bevor Sie eine Beispieleinreichung bearbeiten können';
$string['nogradeyet'] = 'Bisher keine Punkte';
$string['nosubmissionfound'] = 'Für diese/n Nutzer/in wurde keine Einreichung gefunden';
$string['nosubmissions'] = 'Bisher gibt es in dieser gegenseitigen Beurteilung keine Einreichungen';
$string['notassessed'] = 'Bisher nicht beurteilt';
$string['nothingfound'] = 'Nichts anzuzeigen';
$string['nothingtoreview'] = 'Nichts zu beurteilen';
$string['notoverridden'] = 'Nicht überschrieben';
$string['noworkshops'] = 'Es gibt keine gegenseitigen Beurteilungen in diesem Kurs';
$string['noyoursubmission'] = 'Sie haben bisher Ihre Einreichung nicht übermittelt';
$string['nullgrade'] = '-';
$string['overallfeedback'] = 'Gesamtfeedback';
$string['overallfeedbackfiles'] = 'Höchstzahl der Dateianhänge an Gesamtfeedback';
$string['overallfeedbackmaxbytes'] = 'Maximale Gesamtgröße';
$string['overallfeedbackmode'] = 'Gesamtfeedbackmodus';
$string['overallfeedbackmode_0'] = 'Deaktiviert';
$string['overallfeedbackmode_1'] = 'Aktiviert (optional)';
$string['overallfeedbackmode_2'] = 'Aktiviert (notwendig)';
$string['overallfeedbackmode_help'] = 'Wenn aktiviert, wird ein Textfeld unter dem Aufgabenformular angezeigt. Bewertende können dort eine zusammenfassende Bewertung/Kommentierung der Einrreichung vornehmen und  zusätzliche Erläuterungen geben.';
$string['page-mod-workshop-x'] = 'Jede Seite einer gegenseitigen Beurteilung';
$string['participant'] = 'Teilnehmer/in';
$string['participantrevierof'] = 'Teilnehmer/in ist Beurteiler/in von';
$string['participantreviewedby'] = 'Teilnehmer/in wird beurteilt von';
$string['phaseassessment'] = 'Beurteilungsphase';
$string['phaseclosed'] = 'Geschlossen';
$string['phaseevaluation'] = 'Bewertungsphase';
$string['phasesetup'] = 'Vorbereitungsphase';
$string['phasesoverlap'] = 'Die Einreichungsphase und die Bewertungsphase dürfen sich nicht überlappen.';
$string['phasesubmission'] = 'Einreichungsphase';
$string['pluginadministration'] = 'Administration gegenseitige Beurteilung';
$string['pluginname'] = 'Gegenseitige Beurteilung';
$string['prepareexamples'] = 'Beispieleinreichungen erstellen';
$string['previewassessmentform'] = 'Vorschau';
$string['publishedsubmissions'] = 'Veröffentlichte Einreichungen';
$string['publishsubmission'] = 'Einreichung veröffentlichen';
$string['publishsubmission_help'] = 'Wenn die gegenseitige Beurteilung beendet ist, werden die Einreichungen den anderen Teilnehmer/innen veröffentlicht.';
$string['reassess'] = 'Erneut beurteilen';
$string['receivedgrades'] = 'Erhaltene Punkte';
$string['recentassessments'] = 'Beurteilungen der gegenseitigen Beurteilung';
$string['recentsubmissions'] = 'Einreichungen der gegenseitigen Beurteilung';
$string['resetassessments'] = 'Alle Aufgaben löschen';
$string['resetassessments_help'] = 'Sie können wählen, ob nur zugewiesene Bewerter/Bewertungen gelöscht werden, ohne die eingereichten Lösungen zu löschen. In diesem Fall werden auch Bewertungen für Beispiellösungen gelöscht werden.';
$string['resetphase'] = 'Zurück zur Setup-Phase';
$string['resetphase_help'] = 'Durch die Aktivierung werden alle gegenseitigen Beurteilungen in die Ausgangseinstellung des Setups zurückgesetzt.';
$string['resetsubmissions'] = 'Alle Einreichungen löschen';
$string['resetsubmissions_help'] = 'Alle von Teilnehmern eingereichten Lösungen und Bewertungen werden gelöscht. Musterlösungen sind hiervon nicht betroffen.';
$string['saveandclose'] = 'Speichern und schließen';
$string['saveandcontinue'] = 'Speichern und weiter bearbeiten';
$string['saveandpreview'] = 'Speichern und Vorschau';
$string['saveandshownext'] = 'Sichern und weiter';
$string['search:activity'] = 'Gegenseitige Bewertung - Aktivitätsinformation';
$string['selfassessmentdisabled'] = 'Selbstbeurteilung deaktiviert';
$string['showingperpage'] = '{$a} Einträge pro Seite';
$string['showingperpagechange'] = 'Ändern...';
$string['someuserswosubmission'] = 'Mindestens ein/e Teilnehmer/in hat Ihre Einreichung noch nicht vorgenommen';
$string['sortasc'] = 'Aufwärts sortieren';
$string['sortdesc'] = 'Abwärts sortieren';
$string['strategy'] = 'Punktestrategie';
$string['strategyhaschanged'] = 'Die Punktestrategie der gegenseitigen Beurteilung wurde seit dem Beginn der Änderungen geändert.';
$string['strategy_help'] = 'Die Bewertungsstrategie legt das verwendete Bewertungsformular und die Bewertungsmethode der Einreichungen fest. Es gibt vier Optionen:

* Beurteilen mit Kommentaren und Punkten: Kommentare und Bewertungen für vordefinierte Aspekte
* Kommentare: Es gibt nur Kommentare zu vordefinierten Aspekten, jedoch keine Bewertungen
* Aussagen zustimmen oder ablehnen: Kommentare und Ja/Nein Bewertungen zu vordefinierten Aussagen
* Bewertungskriterien: Verschiedene Level zu vordefinierten Aspekten';
$string['submission'] = 'Einreichung';
$string['submissionattachment'] = 'Dateianhang';
$string['submissionby'] = 'Eingereicht von {$a}';
$string['submissioncontent'] = 'Einreichungsinhalt';
$string['submissiondeleteconfirm'] = 'Möchten Sie wirklich die folgende Abgabe löschen?';
$string['submissiondeleteconfirmassess'] = 'Möchten Sie wirklich die folgende Abgabe löschen? Beachten Sie, dass auch die {$a->count} Beurteilungen entfernt werden, die mit der Abgabe verbunden sind. Damit könnten auch die Bewertungen anderer beeinflusst werden.';
$string['submissionend'] = 'Einreichungen bis';
$string['submissionendbeforestart'] = 'Der Abgabetermin für Einreichungen kann nicht vor dem Beginn der Einreichung liegen';
$string['submissionenddatetime'] = 'Einreichungen sind möglich bis {$a->daydatetime} ({$a->distanceday})';
$string['submissionendevent'] = '{$a} (Abgabetermin für Einreichungen)';
$string['submissionendswitch'] = 'Nach Abgabetermin automatisch
zur nächsten Phase wechseln';
$string['submissionendswitch_help'] = 'Wenn diese Option aktiviert und ein Abgabetermin für Einreichungen festgelegt sind, wechselt die gegenseitige Beurteilung automatisch in die Beurteilungsphase.

Wenn diese Option aktiviert ist, sollte außerdem die \'Methode zur Einreichungszuteilung\' konfiguriert sein. Wenn die Einreichungen nicht zugewiesen sind, kann keine Beurteilung stattfinden, außer dass die gegenseitig Beurteilung sich selber in der Beurteilungsphase befindet.';
$string['submissiongrade'] = 'Punkte für Einreichung';
$string['submissiongrade_help'] = 'Diese Einstellung gibt an, wie viele Punkte maximal für eine Einreichung erhalten werden können.';
$string['submissiongradeof'] = 'Punkte für Einreichungen (of {$a})';
$string['submissionlastmodified'] = 'Zuletzt bearbeitet';
$string['submissionsettings'] = 'Einstellungen Einreichungen';
$string['submissionsreport'] = 'Abgabeübersicht für gegenseitige Beurteilung';
$string['submissionstart'] = 'Einreichungen ab';
$string['submissionstartdatetime'] = 'Einreichungen sind möglich ab {$a->daydatetime} ({$a->distanceday})';
$string['submissionstartevent'] = '{$a} (Start für Einreichungen)';
$string['submissiontitle'] = 'Titel';
$string['submittednotsubmitted'] = 'Abgegeben ({$a->submitted}) / nicht abgegeben ({$a->notsubmitted})';
$string['subplugintype_workshopallocation'] = 'Methode zur Einreichungszuteilung';
$string['subplugintype_workshopallocation_plural'] = 'Methoden zur Einreichungszuteilung';
$string['subplugintype_workshopeval'] = 'Bewertungsmethode';
$string['subplugintype_workshopeval_plural'] = 'Methode zur Bewertungsüberprüfung';
$string['subplugintype_workshopform'] = 'Punktestrategie';
$string['subplugintype_workshopform_plural'] = 'Bewertungsstrategien';
$string['switchingphase'] = 'Wechseln der Phase';
$string['switchphase'] = 'Phase wechseln';
$string['switchphase10info'] = 'Sie sind dabei in die <strong>Vorbereitungsphase</strong> der gegenseitigen Beurteilung zu wechseln. In dieser Phase können Teilnehmer/innen ihre Einreichungen oder Beurteilungen nicht bearbeiten. Trainer/innen können diese Phase dazu nutzen, um die Einstellungen, die Bewertungsstrategie oder Beurteilungsbögen zu ändern.';
$string['switchphase20info'] = 'Sie sind dabei in die <strong>Einreichungsphase</strong> der gegenseitigen Beurteilung zu wechseln. In dieser Phase können Teilnehmer/innen ihre Einreichungen innerhalb des ggf. definierten Zeitfensters übermitteln. Trainer/innen ordnen anschließend die Einreichungen den Beurteilenden zu.';
$string['switchphase30auto'] = 'Die gegenseitige Beurteilung wechselt nach {$a->daydatetime} ({$a->distanceday}) automatisch in die Beurteilungsphase.';
$string['switchphase30info'] = 'Sie sind dabei in die <strong>Beurteilungsphase</strong> der gegenseitigen Beurteilung zu wechseln. In dieser Phase können Teilnehmer/innen innerhalb des ggf. definierten Zeitfensters Beurteilungen zu den zugeordneten Einreichungen erstellen oder bearbeiten.';
$string['switchphase40info'] = 'Sie sind dabei in die <strong>Bewertungsphase</strong> der gegenseitigen Beurteilung zu wechseln. In dieser Phase können Teilnehmer/innen ihre Einreichungen oder Beurteilungen nicht bearbeiten. Trainer/innen nutzen die Bewertungswerkzeuge, um die abschließende Bewertung vorzunehmen und Rückmeldungen an die Beurteilenden zu geben.';
$string['switchphase50info'] = 'Sie sind dabei die gegenseitige Beurteilung zu beenden. Die errechneten Bewertungen werden in die Kursbewertung übernommen. Teilnehmer/innen können ihre Einreichungen, ihre Beurteilungen und Bewertungen aufrufen.';
$string['taskassesspeers'] = 'Andere Teilnehmende bewerten';
$string['taskassesspeersdetails'] = 'gesamt: {$a->total}<br />ausstehend: {$a->todo}';
$string['taskassessself'] = 'Selbstbeurteilung';
$string['taskconclusion'] = 'Abschluss der gegenseitigen Beurteilung aktivieren';
$string['taskinstructauthors'] = 'Hinterlegen Sie hier die Aufgabenstellung';
$string['taskinstructreviewers'] = 'Hinterlegen Sie hier Hinweise zur Durchführung der Bewertung';
$string['taskintro'] = 'Beschreibung für gegenseitige Beurteilung verfassen';
$string['tasksubmit'] = 'Übermitteln Sie Ihre Einreichung';
$string['toolbox'] = 'Hilfsmittel für gegenseitige Beurteilung';
$string['undersetup'] = 'Die gegenseitige Beurteilung wird gerade aktualisiert. Warten Sie, bis die nächste Phase freigegeben wird.';
$string['useexamples'] = 'Beispieleinreichungen';
$string['useexamples_desc'] = 'Beispieleinreichungen sind für Praxiserfahrungen im Beurteilen sinnvoll';
$string['useexamples_help'] = 'Mit dieser Funktion können Teilnehmer/innen eine oder mehrere Beispieleinreichungen selber bewerten und ihre Bewertung mit der Referenzbewertung abgleichen. Die Bewertung wird bei der Gesamtbewertung der gegenseitigen Beurteilung nicht berücksichtigt.';
$string['usepeerassessment'] = 'Gegenseitiges Beurteilen';
$string['usepeerassessment_desc'] = 'Teilnehmer/innen beurteilen Einreichungen von anderen';
$string['usepeerassessment_help'] = 'Mit dieser Funktion erhält der Teilnehmende  Lösungen anderer Teilnehmender zur Bewertung. Er/sie erhält dafür ebenfalls eine Bewertung, die der Bewertung für die eigene Lösung zugerechnet wird. ';
$string['userdatecreated'] = 'eingereicht am <span>{$a}</span>';
$string['userdatemodified'] = 'geändert am <span>{$a}</span>';
$string['userplan'] = 'Navigator für gegenseitige Beurteilung';
$string['userplanaccessibilitytitle'] = 'Zeitleiste mit {$a} Phasen';
$string['userplancurrentphase'] = 'Aktuelle Phase';
$string['userplan_help'] = 'Der Navigator für die gegenseitige Beurteilung zeigt alle Phasen und einzelne Schritte in den Phasen an. Die aktuelle Phase ist farblich gekennzeichnet und erledigte Schritte sind mit einem Haken gekennzeichnet.';
$string['useselfassessment'] = 'Selbstbeurteilung';
$string['useselfassessment_desc'] = 'Teilnehmer/innen können ihre eigene Einreichung beurteilen';
$string['useselfassessment_help'] = 'Mit der Funktion kann einem Nutzer auch seine eigene Einreichung zur Bewertung zugewiesen werden. Er erhält dann dafür eine Bewertung, die der externen Bewertung der Einreichung hinzuaddiert wird. ';
$string['weightinfo'] = 'Gewichtung: {$a}';
$string['withoutsubmission'] = 'Beurteiler ohne eigene Einreichung';
$string['workshop:addinstance'] = 'Gegenseitige Beurteilung hinzufügen';
$string['workshop:allocate'] = 'Beurteiler/innen zuordnen';
$string['workshop:deletesubmissions'] = 'Abgaben löschen';
$string['workshop:editdimensions'] = 'Beurteilungsbögen bearbeiten';
$string['workshop:ignoredeadlines'] = 'Zeitvorgaben ignorieren';
$string['workshop:manageexamples'] = 'Beispieleinreichung organisieren';
$string['workshopname'] = 'Name für gegenseitige Beurteilung';
$string['workshop:overridegrades'] = 'Berechnete Punkte überschreiben';
$string['workshop:peerassess'] = 'Gegenseitiges Beurteilen';
$string['workshop:publishsubmissions'] = 'Einreichungen veröffentlichen';
$string['workshop:submit'] = 'Absenden';
$string['workshop:switchphase'] = 'Phase wechseln';
$string['workshop:view'] = 'Gegenseitige Beurteilung anzeigen';
$string['workshop:viewallassessments'] = 'Alle Beurteilungen betrachten';
$string['workshop:viewallsubmissions'] = 'Alle Einreichungen betrachten';
$string['workshop:viewauthornames'] = 'Autorennamen betrachten';
$string['workshop:viewauthorpublished'] = 'Autor/innen von veröffentlichten Beiträgen ansehen';
$string['workshop:viewpublishedsubmissions'] = 'Veröffentlichte Einreichungen betrachten';
$string['workshop:viewreviewernames'] = 'Beurteilernamen anzeigen';
$string['yourassessment'] = 'Ihre Beurteilung';
$string['yourassessmentfor'] = 'Ihre Bebeurteilung für {$a}';
$string['yourgrades'] = 'Ihre Bewertungen';
$string['yoursubmission'] = 'Ihre Einreichung';
