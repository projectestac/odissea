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
 * Strings for component 'offlinequiz', language 'de', version '3.11'.
 *
 * @package     offlinequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add'] = 'zur Gruppe hinzufügen';
$string['addarandomquestion'] = 'Zufällig Fragen hinzufügen';
$string['addarandomquestion_help'] = 'Moodle fügt eine zufällige Auswahl an MC-Fragen (oder Alles-oder-Nichts MC Fragen) zur aktuellen Offline-Test Gruppe hinzu. Die Anzahl der Fragen, die hinzugefügt werden, muss ausgewählt werden. Die Fragen werden aus der aktuellen Kategorie (und, wenn erwünscht, aus deren Unter-Kategorien) ausgewählt.';
$string['addarandomselectedquestion'] = 'Zufällig ausgewählte Frage hinzufügen...';
$string['addlist'] = 'Anwesenheitsliste hinzufügen';
$string['addnewpagesafterselected'] = 'Seitenumbrüche hinter den ausgewählten Fragen hinzufügen';
$string['addnewquestion'] = 'Neue Frage erstellen';
$string['addnewquestionsqbank'] = 'Fragen zur Kategory {$a->catname} hinzufügen: {$a->link}';
$string['addnewuseroverride'] = 'Benutzer-Überschreibung hinzufügen';
$string['addpagebreak'] = 'Seitenumbruch einfügen';
$string['addpagehere'] = 'Seite hier hinzufügen';
$string['addparts'] = 'Teilnehmer/innen hinzufügen';
$string['addquestionfrombankatend'] = 'Frage aus Fragensammlung am Ende hinzufügen';
$string['addquestionfrombanktopage'] = 'Frage aus Fragensammlung zu Seite {$a} hinzufügen';
$string['addrandom'] = 'Zufällig {$a} MC Frage(n)';
$string['addrandomfromcategory'] = 'Zufällig Fragen hinzufügen';
$string['addrandomquestion'] = 'Zufällig Fragen hinzufügen';
$string['addrandomquestiontoofflinequiz'] = 'Fragen hinzufügen zu Offline-Test {$a->name} (Gruppe {$a->group})';
$string['addrandomquestiontopage'] = 'Zufällig Fragen zur Seite {$a} hinzufügen';
$string['addtoofflinequiz'] = 'Hinzufügen';
$string['addtoqueue'] = 'Zur Warteschlange hinzufügen';
$string['allinone'] = 'Unbegrenzt';
$string['alllists'] = 'Alle Listen';
$string['allornothing'] = 'All-or-nothing';
$string['allresults'] = 'Alle Ergebnisse anzeigen';
$string['allstudents'] = 'Alle Teilnehmer/innen anzeigen';
$string['alwaysavailable'] = 'Immer verfügbar';
$string['analysis'] = 'Ergebnisanalyse';
$string['answerform'] = 'Antwortbogen';
$string['answerformforgroup'] = 'Antwortbogen für Gruppe {$a}';
$string['answerforms'] = 'Antwortbögen';
$string['answerpdfxy'] = 'Antwortbogen ({$a->maxquestions} Fragen / {$a->maxanswers} Antworten je Frage)';
$string['areyousureremoveselected'] = 'Wollen Sie wirklich alle ausgewählten Fragen entfernen?';
$string['attemptexists'] = 'Ergebnis existiert';
$string['attemptsexist'] = 'Sie können keine Fragen mehr hinzufügen oder entfernen.';
$string['attemptsnum'] = '{$a} Ergebnisse';
$string['attemptsonly'] = 'Nur Teilnehmer/innen mit Ergebnis anzeigen';
$string['attendances'] = 'Anwesenheiten';
$string['basicideasofofflinequiz'] = 'Grundlegendes zu Offline-Tests';
$string['blackwhitethreshold'] = 'Schwarz/Weiß-Schwellenwert';
$string['bulksavegrades'] = 'Bewertungen speichern';
$string['calibratescanner'] = 'Scanner kalibrieren';
$string['cannoteditafterattempts'] = 'Sie können keine Fragen mehr hinzufügen oder löschen, weil schon vollständige Ergebnisse existieren ({$a})';
$string['category'] = 'Kategory';
$string['changed'] = 'Ergebnis hat sich geändert.';
$string['changeevaluationmode'] = 'Ändern des Auswertungsmodus für Antwortbögen. Nur verfügbar, wenn von Administrator/innen freigegeben.';
$string['checkparts'] = 'Ausgewählte Teilnehmer/innen als anwesend markieren';
$string['checkuserid'] = 'Gruppe/Matrikelnummer überprüfen';
$string['chooseagroup'] = 'Gruppe auswählen...';
$string['closebeforeopen'] = 'Konnte die Einstellungen nicht speichern. Die Beginnzeit für Prüfungseinsichten liegt nach der Endzeit.';
$string['closestudentview'] = 'Teilnehmer/innen-Ansicht schließen';
$string['closewindow'] = 'Fenster schließen';
$string['cmmissing'] = 'Das Kursmodule für den Offline-Test mit ID {$a} fehlt.';
$string['configblackwhitethreshold'] = 'Diese Einstellung legt den Schwellenwert für Schwarz/Weiß-Konvertierung zwischen 1 und 99 fest. Je höher der Wert, desto heller muss das Pixel sein, um als Weiß erkannt zu werden. Bei anderen Werten (als 1-99) findet keine Konvertierung statt.';
$string['configdecimalplaces'] = 'Anzahl der Dezimalstellen, die bei Bewertungen angezeigt werden.';
$string['configdisableimgnewlines'] = 'Diese Option sorgt dafür, dass Bilder im PDF im Fließtext eingefügt werden. Warnung: Dies kann zu Darstellungsproblemen führen!';
$string['configexperimentalevaluation'] = 'Experimenteller Auswertungsmodus für Antwortbögen';
$string['configexperimentalevaluationdesc'] = 'NICHT AUF PRODUKTIVSYSTEMEN EINSETZEN! Diese Option wird für Alpha-Tests eines neuen Auswertungs-Algorithmus angeboten. Wenn diese Option auf Ja gestellt ist, kann zu Testzwecken individuell bei jeder Offline-Test-Instanz der neue Modus separat ausgewählt werden. Wir raten dringend davon ab, diese Option auf Produktivsystemen zu verwenden. Es wird kein Support angeboten und keine Verantwortung für Datenverlust durch Nutzung der Option übernommen.';
$string['configintro'] = 'Die Einstellungen, die Sie hier treffen, werden als Standardwerte für neue Offline-Tests verwendet.';
$string['configkeepfilesfordays'] = 'Stellen Sie ein, wie lange hochgeladene Bilddateien temporär gespeichert werden. Die Dateien sind für diese Zeit im Offline-Test Admin Bericht verfügbar.';
$string['configonlylocalcategories'] = 'Keine öffentlichen Fragekategorien zulassen.';
$string['configpapergray'] = 'Weißwert des Papieres, das für Antwortbögen verwendet wird.';
$string['configshuffleanswers'] = 'Antworten mischen';
$string['configshufflequestions'] = 'Wenn Sie diese Option aktivieren, werden die Fragen jeder Offline-Test Gruppe nach dem Zufallsprinzip gemischt.';
$string['configshufflewithin'] = 'Wenn Sie diese Option aktivieren, werden die Antworten jeder Multiple-Choice Frage nach dem Zufallsprinzip gemischt.';
$string['configuseridentification'] = 'Eine Formel, die die Identifikation von Nutzer/innen beschreibt. Diese Formel wird verwendet, um hochgeladene Antwortbögen den richtigen Nutzer/innen zuzuordnen. Die rechte Seite der Gleichung muss ein Feld der "user" Tabelle von Moodle sein.';
$string['confirmremovequestion'] = 'Sind Sie sicher, dass Sie die Frage des Typs {$a} entfernen wollen?';
$string['copy'] = 'Kopieren';
$string['copyright'] = 'Diese Seite ist nur zu Ihrer persönlichen Information. Wie jeder andere Text auch unterliegen Prüfungsfragen den Bestimmungen des Urheberrechts. Es ist Ihnen nicht gestattet, Fragen zu kopieren oder an andere weiterzugeben. Zuwiderhandeln kann belangt werden.';
$string['copyselectedtogroup'] = 'Ausgewählte Fragen zu Gruppe {$a}';
$string['copytogroup'] = 'Alle Fragen zu Gruppe {$a}';
$string['correct'] = 'richtig';
$string['correcterror'] = 'korrigieren';
$string['correctforgroup'] = 'Korrekturbogen für Gruppe {$a}';
$string['correctionform'] = 'Korrekturbogen';
$string['correctionforms'] = 'Korrekturbögen';
$string['correctionoptionsheading'] = 'Einstellungen für Korrektur von Antwortbögen';
$string['correctupdated'] = 'Korrekturbogen für Gruppe {$a} angepasst.';
$string['couldnotgrab'] = 'Kann Bild {$a} nicht erfassen.';
$string['couldnotregister'] = 'Kann Teilnehmer/in {$a} nicht registrieren.';
$string['createcategoryandaddrandomquestion'] = 'Kategorie erstellen und zufällige Frage hinzufügen';
$string['createlistfirst'] = 'Fügen Sie zuerst Teilnehmer/innen hinzu';
$string['createofflinequiz'] = 'Formulare erstellen';
$string['createpartpdferror'] = 'Beim Erstellen des PDF-Formulars für die Anwesenheitsliste {$a} ist ein Fehler aufgetreten! Die Liste ist wahrscheinlich leer.';
$string['createpdf'] = 'Formular';
$string['createpdferror'] = 'Der Fragebogen für Gruppe {$a} konnte nicht erzeugt werden. Eventuell sind für die Gruppe keine Fragen definiert.';
$string['createpdffirst'] = 'Erstellen Sie zuerst das PDF-Formular';
$string['createpdfforms'] = 'Formulare erstellen';
$string['createpdfs'] = 'Formulare herunterladen';
$string['createpdfsparticipants'] = 'Anwesenheitslisten: PDFs herunterladen';
$string['createquestionandadd'] = 'Frage erzeugen und zum Test hinzufügen.';
$string['createquiz'] = 'Formulare erstellen';
$string['csvfile'] = 'CSV-Datei';
$string['csvformat'] = 'Textdatei mit kommagetrennten Werten (CSV)';
$string['csvplus1format'] = 'Textdatei komplett (CSV)';
$string['csvpluspointsformat'] = 'Textdatei komplett mit Punkten (CSV)';
$string['darkgray'] = 'Dunkelgrau';
$string['datanotsaved'] = 'Scanner-Einstellungen nicht gespeichert';
$string['decimalplaces'] = 'Dezimalstellen';
$string['decimalplaces_help'] = 'Anzahl der Dezimalstellen, die bei Bewertungen angezeigt werden.';
$string['deletelistcheck'] = 'Möchten Sie die ausgewählte Liste wirklich löschen?';
$string['deletepagecheck'] = 'Möchten Sie die ausgewählten Seiten wirklich löschen?';
$string['deletepagesafterselected'] = 'Seitenumbrüche hinter den ausgewählten Fragen entfernen';
$string['deletepartcheck'] = 'Möchten Sie die ausgewählten Teilnehmer/innen wirklich löschen?';
$string['deleteparticipantslist'] = 'Anwesenheitsliste löschen';
$string['deletepdfs'] = 'Formulare löschen';
$string['deleteresultcheck'] = 'Möchten Sie die ausgewählten Ergebnisse wirklich löschen?';
$string['deleteselectedpart'] = 'Ausgewählte Teilnehmer/innen löschen';
$string['deleteselectedresults'] = 'Ausgewählte Ergebnisse löschen';
$string['deletethislist'] = 'Diese Liste löschen';
$string['deleteupdatepdf'] = 'Formulare löschen und aktualisieren';
$string['difficultytitle'] = 'Gesamt';
$string['difficultytitlea'] = 'Schwierigkeit A';
$string['difficultytitleb'] = 'Schwierigkeit B';
$string['difficultytitlediff'] = 'Unterschied';
$string['disableimgnewlines'] = 'Fließtextbilder aktivieren';
$string['disableimgnewlines_help'] = 'Diese Option sorgt dafür, dass Bilder im PDF im Fließtext eingefügt werden. Warnung: Dies kann zu Darstellungsproblemen führen!';
$string['displayoptions'] = 'Einstellungen für die Darstellung';
$string['done'] = 'erledigt';
$string['downloadallzip'] = 'Alle Dateien als ZIP herunterladen';
$string['downloadpartpdf'] = 'PDF-Formular für die Anwesenheitsliste \'{$a}\' herunterladen';
$string['downloadpdfs'] = 'Formulare herunterladen';
$string['downloadresultsas'] = 'Ergebnisse herunterladen als:';
$string['dragtoafter'] = 'Nach {$a}';
$string['dragtostart'] = 'Zum Anfang';
$string['editgroupquestions'] = 'Gruppenfragen editieren';
$string['editgroups'] = 'Offline-Test-Gruppen editieren';
$string['editingofflinequiz'] = 'Fragenlisten bearbeiten';
$string['editingofflinequiz_help'] = 'Beim Erzeugen von Offline-Tests sind zwei Komponenten wichtig:
<ul><li> Der Offline-Test, der die Fragen für die verschiedenen Gruppen auf einer oder mehreren Seiten enthält.</li>
<li> Die Fragensammlung, in der Fragen in verschiedene Kategorien aufgeteilt sind.</li></ul>';
$string['editingofflinequizx'] = 'Fragenlisten bearbeiten: {$a}';
$string['editlist'] = 'Anwesenheitsliste bearbeiten';
$string['editlists'] = 'Anwesenheitslisten';
$string['editmaxmark'] = 'Erreichbare Punkte ändern';
$string['editofflinequiz'] = 'Gruppenfragen bearbeiten';
$string['editofflinesettings'] = 'Offline-Test Einstellungen bearbeiten';
$string['editorder'] = 'Reihenfolge bearbeiten';
$string['editparticipants'] = 'Teilnehmer/innen';
$string['editquestion'] = 'Frage bearbeiten';
$string['editquestions'] = 'Fragen bearbeiten';
$string['editscannedform'] = 'Scannerbeleg bearbeiten';
$string['editthislist'] = 'Diese Liste bearbeiten';
$string['emptygroups'] = 'Einige Offline-Test-Gruppen enthalten keine Fragen. Bitte fügen Sie Fragen hinzu.';
$string['enroluser'] = 'Teilnehmer/in einschreiben';
$string['erroraccessingreport'] = 'Sie haben nicht genügend Rechte, um diesen Bericht einzusehen.';
$string['errorreport'] = 'Importfehler-Bericht';
$string['eventattemptdeleted'] = 'Offline-Test Ergebnis gelöscht';
$string['eventattemptpreviewstarted'] = 'Offline-Test Preview gestartet';
$string['eventattemptreviewed'] = 'Offline-Test Ergebnis angesehen';
$string['eventattemptsummaryviewed'] = 'Offline-Test Ergebnisübersicht angesehen';
$string['eventattemptviewed'] = 'Offline-Test Ergebnis angesehen';
$string['eventdocscreated'] = 'Offline-Test Frage- und Antwortbögen erzeugt';
$string['eventdocsdeleted'] = 'Offline-Test Frage- und Antwortbögen gelöscht';
$string['eventeditpageviewed'] = 'Offline-Test Bearbeiten-Seite angezeigt';
$string['eventofflinequizattemptsubmitted'] = 'Offline-Test Ergebnis erzeugt';
$string['eventoverridecreated'] = 'Offline-Test Überschreibung erzeugt';
$string['eventoverridedeleted'] = 'Offline-Test Überschreibung gelöscht';
$string['eventoverrideupdated'] = 'Offline-Test Überschreibung geändert';
$string['eventparticipantmarked'] = 'Offline-Test Anwesenheit manuell geändert';
$string['eventquestionmanuallygraded'] = 'Frage manuell bewertet';
$string['eventreportviewed'] = 'Offline-Test Bericht angesehen';
$string['eventresultsregraded'] = 'Offline-Test Ergebnisse neu bewertet';
$string['everythingon'] = 'Aktiviert';
$string['excelformat'] = 'Microsoft Excel Tabelle (XLSX)';
$string['experimentalevaluation'] = 'Experimenteller Auswertungsmodus für Antwortbögen';
$string['experimentalevaluation_help'] = 'Experimenteller Auswertungsmodus für Antwortbögen';
$string['fileformat'] = 'Dateiformat für Fragebögen';
$string['fileformat_help'] = 'Wählen Sie aus, ob Sie die Fragenbögen als PDF-, DOCX- oder TEX-Dokumente erzeugen möchten. Antwort- und Korrekturbögen werden immer im PDF-Format erzeugt.';
$string['fileprefixanswer'] = 'Antwortbogen';
$string['fileprefixcorrection'] = 'Korrekturbogen';
$string['fileprefixform'] = 'Fragebogen';
$string['fileprefixparticipants'] = 'Anwesenheitsliste';
$string['filesizetolarge'] = 'Einige Ihrer Dateien sind sehr groß und müssen während der Interpretation verkleinert werden. Bitte wählen Sie beim Scannen eine Auflösung zwischen 200 und 300 dpi und einen Schwarz-Weiß-Modus. Dadurch wird die Auswertung beim nächsten Mal deutlich beschleunigt!';
$string['filterbytags'] = 'Nach Tags filtern…';
$string['fontsize'] = 'Schriftgröße';
$string['forautoanalysis'] = 'Zur automatischen Prüfungsauswertung';
$string['formforcorrection'] = 'Korrekturbogen für Gruppe {$a}';
$string['formforgroup'] = 'Fragebogen für Gruppe {$a}';
$string['formforgroupdocx'] = 'Fragebogen für Gruppe {$a} (DOCX)';
$string['formforgrouplatex'] = 'Fragebogen für Gruppe {$a} (LATEX)';
$string['formsexist'] = 'Formulare bereits erstellt.';
$string['formsexistx'] = 'Formulare bereits erstellt (<a href="{$a}">Formulare herunterladen</a>)';
$string['formsheetsettings'] = 'Formulareinstellungen';
$string['formspreview'] = 'Vorschau für Formulare';
$string['formwarning'] = 'Für die festgelegte Fragen- bzw. Antwortanzahl ist kein Antwortbogen definiert. Bitte kontaktieren Sie den Systemadministrator.';
$string['fromquestionbank'] = 'Aus der Fragensammlung';
$string['functiondisabledbysecuremode'] = 'Diese Funktionalität ist deaktiviert';
$string['generalfeedback'] = 'Allgemeines Feedback';
$string['generalfeedback_help'] = 'Allgemeines Feedback wird nach jedem Versuch einer Frage angezeigt, unabhängig vom Ergebnis des Versuchs.';
$string['generatepdfform'] = 'Fragebogen';
$string['grade'] = 'Bewertung';
$string['gradedon'] = 'Bewertet am';
$string['gradedscannedform'] = 'Scannerbeleg mit Bewertung';
$string['gradeiszero'] = 'Hinweis: Die beste Bewertung für den Offline-Test beträgt 0 Punkte!';
$string['gradeswarning'] = 'Die Bewertungen für die Fragen müssen Zahlen sein!';
$string['gradewarning'] = 'Die Bewertung für die Frage muss eine Zahl sein!';
$string['gradingofflinequiz'] = 'Bewertungen';
$string['gradingofflinequizx'] = 'Bewertungen: {$a}';
$string['gradingoptionsheading'] = 'Einstellungen für Bewertungen';
$string['greeniscross'] = 'wird als Ankreuzung gewertet';
$string['group'] = 'Gruppe';
$string['groupoutofrange'] = 'Die Gruppe war außerhalb des Bereichs und wurde durch Gruppe A ersetzt.';
$string['groupquestions'] = 'Bearbeiten';
$string['hasresult'] = 'Ergebnis vorhanden';
$string['hotspotdeletiontask'] = 'Löschen von Hotspots';
$string['html'] = 'HTML';
$string['idnumber'] = 'Matrikelnummer';
$string['imagefile'] = 'Bilddatei';
$string['imagenotfound'] = 'Bilddatei: {$a} nicht gefunden!';
$string['imagenotjpg'] = 'Bild ist nicht .jpg oder .png: {$a}';
$string['imagickwarning'] = 'Imagick fehlt: Bitten Sie Ihren System-Administrator Image Magick zu installieren bzw. überprüfen Sie ob der Pfad zum Programm "convert" in den Tex-Filtereinstellungen richtig gesetzt ist. Sie brauchen Image Magick, um TIF-Dateien importieren zu können!';
$string['import'] = 'Importieren';
$string['importedon'] = 'Importiert am';
$string['importerror11'] = 'Abweichendes Ergebnis existiert';
$string['importerror12'] = 'Teilnehmer/in nicht registriert';
$string['importerror13'] = 'Keine Gruppendaten';
$string['importerror14'] = 'Nicht erfassbar';
$string['importerror15'] = 'Ungenaue Markierungen';
$string['importerror16'] = 'Seite nicht erfasst';
$string['importerror17'] = 'Seiten unvollständig';
$string['importerror21'] = 'Nicht erfassbar';
$string['importerror22'] = 'Ungenaue Markierungen';
$string['importerror23'] = 'Teilnehmer/in nicht in Liste';
$string['importerror24'] = 'Liste nicht erfasst';
$string['importforms'] = 'Antwortbögen importieren';
$string['importfromto'] = 'Importiere {$a->from} bis {$a->to} von {$a->total}';
$string['importisfinished'] = 'Der Import für den Offline-Test {$a} ist beendet.';
$string['importlinkresults'] = 'Link zu den Ergebnissen: {$a}';
$string['importlinkverify'] = 'Link zur Überprüfung: {$a}';
$string['importmailsubject'] = 'Offline-Test Importbenachrichtigung';
$string['importnew'] = 'Importieren';
$string['importnew_help'] = '<p>
Sie können entweder mehrere eingescannte Bilddateien in einer ZIP-Datei
oder einzelne Bilddateien importieren. Das Offline-Test Modul wird die Bilder im Hintergrund automatisch auswerten.
Die Namen der Bilddateien sollten keine Sonderzeichen (Umlaute etc.) enthalten. Die Bilder müssen als GIF-,
PNG- oder TIF-Datei vorliegen. Eine Punktdichte zwischen 200 und 300 DPI wird empfohlen.</p>';
$string['importnumberexisting'] = 'Duplikate: {$a}';
$string['importnumberpages'] = 'Anzahl der erfolgreich importierten Bögen: {$a}';
$string['importnumberresults'] = 'Anzahl der erfolgreich importierten Bögen: {$a}';
$string['importnumberverify'] = 'Bögen, die nicht importiert wurden: {$a}';
$string['importtimefinish'] = 'Endzeit der Auswertung: {$a}';
$string['importtimestart'] = 'Beginnzeit der Auswertung: {$a}';
$string['inconsistentdata'] = 'Unstimmige Eingabedaten: {$a}';
$string['info'] = 'Info';
$string['infoshort'] = 'i';
$string['insecuremarkings'] = 'Ungenaue Markierungen benötigen Überprüfung';
$string['insecuremarkingsforquestion'] = 'Ungenaue Markierungen benötigen Überprüfung für Frage';
$string['insertnumber'] = 'Bitte geben Sie die korrekte Identifikationsnummer ein, die durch den blauen Rahmen markiert wird.';
$string['instruction1'] = 'Dieser Antwortbogen wird maschinell gelesen. Bitte nicht falten, nicht knicken und nicht beschmutzen. Verwenden Sie zum Markieren einen blauen oder schwarzen Kugelschreiber von normaler Stärke. Bitte markieren Sie sorgsam durch Ankreuzen:';
$string['instruction2'] = 'Nur deutlich erkennbare positionsgenaue Markierungen werden ausgewertet! Wenn Sie eine Ankreuzung korrigieren möchten, füllen Sie das Kästchen mit der Falsch-Markierung mit Ihrem Stift vollkommen aus, dadurch wird diese Ankreuzung wie ein leeres Kästchen gewertet:';
$string['instruction3'] = 'Ausstreichungen können nicht noch mal korrigiert werden. Markierungen und Beschriftungen außerhalb der Kästchenfelder können die Auswertung behindern.';
$string['introduction'] = 'Beschreibung';
$string['invalidformula'] = 'Ungültige Formel zur Identifikation von Nutzer/innen. Die Formel muss folgende Form haben: <Präfix>[<#Ziffern>]<Suffix>=<DB-Feld>.';
$string['invalidnumberofdigits'] = 'Formel enthält ungültige Anzahl von Ziffern. Es werden 1 bis 9 Ziffern unterstützt.';
$string['invaliduserfield'] = 'Formel enthält ungültiges Feld der Tabelle "user".';
$string['invigilator'] = 'Saalaufsicht';
$string['ischecked'] = 'Teilnahme bestätigt';
$string['isnotchecked'] = 'Teilnahme nicht bestätigt';
$string['itemdata'] = 'Item-Daten';
$string['keepfilesfordays'] = 'Tage der Aufbewahrung';
$string['letter'] = 'Note';
$string['lightgray'] = 'Hellgrau';
$string['linktoscannedform'] = 'Scannerbeleg ansehen';
$string['listnotdetected'] = 'Barcode für Zuordnung der Anwesenheitsliste nicht erfassbar!';
$string['logdeleted'] = 'Log-Eintrag {$a} gelöscht.';
$string['logourl'] = 'Logo URL';
$string['logourldesc'] = 'URL zu einer Bilddatei die als Logo auf den Antwortbögen angezeigt wird, z.B. <b>http://www.meinserver.at/verzeichnis/logo.png</b> oder <b>../pfad/logo.png</b>. Die maximal erlaubte Größe des Bildes beträgt 520x140 Pixel. Bei größeren Bildern können die Antwortbögen nicht ausgewertet werden!';
$string['lowertrigger'] = 'Unterer Grenzwert';
$string['lowertriggerzero'] = 'Unterer Grenzwert ist null';
$string['lowerwarning'] = 'Unterer Warnwert';
$string['lowerwarningzero'] = 'Unterer Warnwert ist null';
$string['marginwarning'] = 'Bitte drucken Sie die folgenden Antwortbögen ohne zusätzliche Seitenränder. <br/> Teilen Sie möglichst <b>keine Fotokopien</b> an die Teilnehmer/innen aus.';
$string['marks'] = 'Punktezahl';
$string['matrikel'] = 'Matrikelnummer';
$string['maxgradewarning'] = 'Die beste Bewertung muss eine Zahl sein!';
$string['maxmark'] = 'Erreichbare Punkte';
$string['membersinplist'] = '{$a->count} Teilnehmer/innen in Anwesenheitsliste <a href="{$a->url}">{$a->name}</a>';
$string['missingimagefile'] = 'Bilddatei fehlt';
$string['missingitemdata'] = 'Fehlende Antwort/en für {$a}';
$string['missinglogdata'] = 'Logdaten für existierendes Ergebnis fehlen.';
$string['missingquestion'] = 'Diese Frage scheint nicht mehr zu existieren';
$string['missinguserid'] = 'Identifikationsnummer fehlt! Barcode konnte nicht gelesen werden!';
$string['modulename'] = 'Offline-Test';
$string['modulename_help'] = 'Dieses Modul erlaubt die Erstellung von Fragebogen-Tests mit Multiple-Choice-Fragen.
Die Fragen werden in der Moodle-Fragendatenbank gespeichert und können in anderen Offline- und Online-Tests wiederverwendet werden.
Das Modul erstellt Frage- und Antwortbögen, die als PDF-, DOCX- oder LaTeX-Dateien heruntergeladen werden können. Auf den ausgedruckten Antwortbögen werden die Antworten von den Teilnehmer/innen angekreuzt.';
$string['modulenameplural'] = 'Offline-Tests';
$string['moodleprocessing'] = 'Belege durch Moodle auswerten';
$string['movecorners'] = 'Ziehen Sie die Eckmarkierungen per Drag-and-Drop zunächst in die richtige Position.';
$string['moveselectedonpage'] = 'Verschieben der ausgewählten Fragen zur Seite: {$a}';
$string['multianswersforsingle'] = 'Mehrere Antworten bei Einfachauswahl';
$string['multichoice'] = 'Multiple-Choice';
$string['multipleanswers'] = 'Mindestens eine Antwort muss ausgewählt werden.';
$string['name'] = 'Name des Offline-Tests';
$string['neededcorrection'] = '<strong>Achtung!</strong><br />&nbsp;<br />Einige Ihrer Markierungen mussten manuell korrigiert werden.
Die aufgrund dieses Fehlers notwendige händische Nachbearbeitung verzögerte die Gesamtauswertung und die Bekanntgabe der Ergebnisse an alle Teilnehmer/innen.
<br />Die erfolgten Korrekturen sind als rot markierte Kästchen im folgenden Beleg zu sehen.
<br />Wir bitten Sie, bei zukünftigen Prüfungen Ihre Markierungen sorgfältig zu kontrollieren.<br />&nbsp;<br />Vielen Dank!';
$string['newgrade'] = 'Bewertet';
$string['newpage'] = 'Seitenumbruch';
$string['noattemptexists'] = 'Keine Ergebnisse vorhanden';
$string['noattempts'] = 'Keine Ergebnisse importiert!';
$string['noattemptsonly'] = 'Nur Teilnehmer/innen ohne Ergebnis anzeigen';
$string['nocourse'] = 'Der Kurs mit ID {$a->course}, zu dem der Offline-Test mit der ID {$a->offlinequiz} gehört, fehlt.';
$string['nogradesseelater'] = 'Es sind keine Ergebnisse für {$a} vorhanden bzw. die Ergebniseinsicht ist nicht frei geschaltet.';
$string['nogroupdata'] = 'Keine Gruppenvorlage für {$a}';
$string['nomcquestions'] = 'Es gibt keine MC-Fragen in Gruppe {$a}!';
$string['noofflinequiz'] = 'Es gibt keinen Offline-Test mit ID {$a}!';
$string['nopages'] = 'Keine Seite importiert';
$string['noparticipantsfound'] = 'Keine Teilnehmer/innen gefunden';
$string['nopdfscreated'] = 'Formulare wurden noch nicht erstellt!';
$string['noquestions'] = 'Einige Offline-Test-Gruppen enthalten keine Fragen. Bitte fügen Sie Fragen hinzu.';
$string['noquestionselected'] = 'Keine Fragen ausgewählt!';
$string['noquestionsfound'] = 'Gruppe {$a} enthält keine Fragen!';
$string['noquestionsonpage'] = 'Leere Seite';
$string['noresults'] = 'Es gibt keine Ergebnisse.';
$string['noreview'] = 'Sie dürfen diesen Offline-Test nicht einsehen';
$string['noscannedpage'] = 'Es gibt keine gescannte Seite mit ID {$a}!';
$string['notagselected'] = 'Kein Tag ausgewählt';
$string['nothingtodo'] = 'Die Warteschlange ist leer!';
$string['notxtfile'] = 'Keine TXT- bzw. CSV-Datei';
$string['notyetgraded'] = 'Noch nicht bewertet';
$string['nozipfile'] = 'Keine ZIP-Datei';
$string['numattempts'] = 'Anzahl der importierten Ergebnisse: {$a}';
$string['numattemptsqueue'] = '{$a} Bögen zur Warteschlange hinzugefügt. Nach der Auswertung werden Sie per Email verständigt.';
$string['numattemptsverify'] = 'Zu überprüfende Bögen: {$a}';
$string['numberformat'] = 'Der Wert muss eine Zahl mit {$a} Stellen sein!';
$string['numbergroups'] = 'Gruppenzahl';
$string['numpages'] = '{$a} Seite(n) importiert';
$string['numquestionsx'] = 'Fragen: {$a}';
$string['numusersadded'] = '{$a} Teilnehmer/innen hinzugefügt';
$string['odsformat'] = 'OpenDocument Tabelle (ODS)';
$string['offlineimplementationfor'] = 'Offline Implementierung für';
$string['offlinequiz:addinstance'] = 'Offline-Test hinzufügen';
$string['offlinequiz:attempt'] = 'Testteilnahme';
$string['offlinequiz:changeevaluationmode'] = 'Änderung des Auswertungsmodus für Antwortbögen. ACHTUNG: NICHT AUF PRODUKTIVSYSTEMEN EINSETZEN!';
$string['offlinequiz:createofflinequiz'] = 'Offline-Test Formulare erstellen';
$string['offlinequiz:deleteattempts'] = 'Ergebnisse löschen';
$string['offlinequiz:grade'] = 'Tests manuell bewerten';
$string['offlinequiz:manage'] = 'Tests verwalten';
$string['offlinequiz:preview'] = 'Test-Vorschau';
$string['offlinequiz:view'] = 'Test-Informationen sehen';
$string['offlinequiz:viewreports'] = 'Test-Berichte sehen';
$string['offlinequizcloses'] = 'Offline-Test schließt';
$string['offlinequizcloseson'] = 'Die Einsicht für diesen Offline-Test endet am {$a}';
$string['offlinequizisclosed'] = 'Offline-Test geschlossen';
$string['offlinequizisclosedwillopen'] = 'Offline-Test geschlossen (öffnet am {$a})';
$string['offlinequizisopen'] = 'Offline-Test offen';
$string['offlinequizisopenwillclose'] = 'Offline-Test offen (schließt am {$a})';
$string['offlinequizopenedon'] = 'Dieser Offline-Test hat am {$a} begonnen.';
$string['offlinequizopens'] = 'Offline-Test beginnt';
$string['offlinequizsettings'] = 'Offline-Test Einstellungen';
$string['offlinequizwillopen'] = 'Offline-Test beginnt am';
$string['oneclickenrol'] = '1-Click Einschreibung';
$string['oneclickenroldesc'] = 'Wenn Sie diese Option aktivieren haben die Trainer/innen beim Korrigieren von Antwortbögen (Fehler "Teilnehmer/in nicht im Kurs") die Möglichkeit Nutzer mit einem Click in den Kurs einzuschreiben.';
$string['oneclickrole'] = 'Rolle für Einschreibung.';
$string['oneclickroledesc'] = 'Wählen Sie hier die Rolle aus, die bei der 1-Click Einschreibung verwendet werden soll. Es können nur Rollen mit der Basisrolle "Teilnehmer/in" ausgewählt werden.';
$string['onlylocalcategories'] = 'Keine öffentlichen Fragekategorien zulassen.';
$string['orderandpaging'] = 'Reihenfolge und Seitenumbrüche';
$string['orderandpaging_help'] = 'Die Zahlen 10, 20, 30, ... neben jeder Frage zeigt deren Reihenfolge an. Die Zahlenfolge in 10er-Schritten lässt Platz, um weitere Fragen einfügen zu können.
Um die Reihenfolge der Fragen zu ändern, ändern Sie die Zahlen und klicken Sie auf das Kontrollfeld \'Neuanordnung der Fragen\'.
Um Seitenumbrüche nach bestimmten Fragen einzufügen, klicken Sie auf das Kontrollfeld \'Seitenumbrüche hinter den ausgewählten Fragen hinzufügen\'.
Um Fragen über eine Reihe von Seiten anzuordnen, klicken Sie auf das Kontrollfeld  \'Neuer Seitenumbruch...\' und wählen Sie die gewünschte Anzahl von Fragen pro Seite.';
$string['orderingofflinequiz'] = 'Reihenfolge und Seitenumbrüche';
$string['otherresultexists'] = 'Ein abweichendes Ergebnis für {$a} existiert bereits. Import ignoriert! Löschen Sie das Ergebnis zuerst.';
$string['outof'] = '{$a->grade} von maximal {$a->maxgrade}';
$string['outofshort'] = '{$a->grade}/{$a->maxgrade}';
$string['overallfeedback'] = 'Generelles Feedback';
$string['overview'] = 'Übersicht';
$string['overviewdownload_help'] = 'Download-Übersicht';
$string['page-mod-offlinequiz-edit'] = 'Offline-Test Bearbeiten-Seite';
$string['page-mod-offlinequiz-x'] = 'Jede Offline-Test-Seite';
$string['pagecorrected'] = 'Korrigierter Bogen der Anwesenheitsliste importiert';
$string['pageevaluationtask'] = 'Evaluierung der Antwortbögen im Offlinequiz-Plugin';
$string['pageimported'] = 'Bogen der Anwesenheitsliste importiert';
$string['pagenotdetected'] = 'Barcode für Zuordnung der Seite nicht erfassbar!';
$string['pagenumberimported'] = 'Bogen {$a} der Anwesenheitsliste importiert';
$string['pagenumberupdate'] = 'Aktualisierung der Seitenzahlen';
$string['pagesizeparts'] = 'Einträge pro Seite:';
$string['papergray'] = 'Weißwert des Papiers';
$string['papergray_help'] = 'Wenn die eingescannten Dokumente zu dunkel oder zu hell sind, können Sie das mit diesem Parameter korrigieren.
Im Idealfall sind Ihre Scannerbelege allerdings zweifärbig, also schwarz-weiße PNG-, GIF- oder TIF-Dateien. Die Komprimierung von JPG-Dateien führt immer zu Bildverlusten.
Dieses Format ist deshalb zu vermeiden.';
$string['partcheckedwithoutresult'] = '<a href="{$a->url}">{$a->count} anwesende Teilnehmer/innen ohne Ergebnis</a>';
$string['partcheckedwithresult'] = '{$a} anwesende Teilnehmer/innen mit Ergebnis';
$string['partial'] = 'partiell';
$string['participants'] = 'Teilnehmer/innen';
$string['participants_help'] = '<h2>Anwesenheitsliste</h2>
<p>Die Anwesenheitsliste dient dazu, bei großen Prüfungen mit vielen Teilnehmer/innen abzugleichen, wer da war und
ob Sie von jeder Person einen Antwortbogen abgesammelt und ausgewertet haben. Sie können für einen Offline-Test
verschiedene Listen erstellen, um in mehreren Räumen zu prüfen oder nicht angemeldete Teilnehmer/innen nachträglich
zuzuweisen. Die Teilnehmer/innen können Sie den Listen basierend auf bestehenden Moodle-Gruppen zuweisen, wenn
Sie eine Gruppenanmeldung verwenden wollen.</p>
<p>Anschließend laden Sie die Listen als PDFs herunter, drucken sie aus und markieren die Teilnehmer/innen
mit Kreuzen, ähnlich wie die Antworten auf dem Antwortbogen. Die Listen werden hochgeladen und das Programm speichert
in der Datenbank, wer als anwesend markiert ist. Bitte vermeiden Sie Verschmutzungen im Bereich der Barcodes, da
diese der Identifikation der Teilnehmer/innen dienen.</p>';
$string['participantsinlists'] = 'Teilnehmer/innen in Anwesenheitslisten';
$string['participantslist'] = 'Anwesenheitsliste';
$string['participantslists'] = 'Anwesenheitslisten';
$string['partimportnew'] = 'Importieren von Anwesenheitslisten';
$string['partimportnew_help'] = '<p> Hier können Sie die ausgefüllten Anwesenheitslisten importieren.
Sie können entweder mehrere eingescannte Bilddateien in einer ZIP-Datei
oder einzelne Bilddateien importieren. Das Offline-Test Modul wird die Bilder im Hintergrund automatisch auswerten.
Die Namen der Bilddateien sollten keine Sonderzeichen (Umlaute etc.) enthalten. Die Bilder müssen als GIF-,
PNG- oder TIF-Datei vorliegen. Eine Punktdichte zwischen 200 und 300 DPI wird empfohlen.</p>';
$string['partuncheckedwithoutresult'] = '{$a} abwesende Teilnehmer/innen ohne Ergebnis';
$string['partuncheckedwithresult'] = '<a href="{$a->url}">{$a->count} abwesende Teilnehmer/innen mit Ergebnis</a>';
$string['pdfdeletedforgroup'] = 'Fragebogen für Gruppe {$a} gelöscht';
$string['pdfintro'] = 'Zusatzinformation';
$string['pdfintro_help'] = 'Dieser Text wird auf der ersten Seite des Fragebogens angezeigt und sollte genaue Angaben über die Prüfungsmodalitäten enthalten.
 Er ist normalerweise mit den üblichen Anweisungen über das Ankreuzen der Kästchen vorausgefüllt.';
$string['pdfintrotext'] = '<b>AUSFÜLLHILFE FÜR DEN ANTWORTBOGEN</b><br /><br /><b>Wie markiere ich richtig?</b><br />Für diese Prüfung erhalten Sie einen Fragebogen und einen Antwortbogen. Die Antworten sind durch entsprechende Markierungen auf dem Antwortbogen vorzunehmen. Dieser wird maschinell ausgewertet, handschriftliche Anmerkungen werden nicht berücksichtigt. Ankreuzungen auf dem Fragebogen werden nicht ausgewertet! Verwenden Sie für Ihre Markierungen ausschließlich einen schwarzen oder blauen Kugelschreiber von normaler Schriftstärke. Die Markierungen müssen deutlich und positionsgenau durch ein Kreuz erfolgen. Wenn Sie eine Ankreuzung korrigieren möchten, füllen Sie das Kästchen vollkommen aus, dadurch wird diese Markierung wie ein leeres Kästchen gewertet. Eine neuerliche Korrektur ist dann nicht mehr möglich!<br /><br /><b>Ausfüllen der Matrikelnummer</b>:<br />Tragen Sie zu Beginn der Prüfung Ihre 7-stellige Matrikelnummer auf dem Antwortbogen in das dafür vorgesehene Feld ein. Übertragen Sie dann Ihre Matrikelnummer mit Kreuzen in die darunter befindlichen Kästchen, die von 0 bis 9 nummeriert sind. Die erste Spalte entspricht der 1. Ziffer Ihrer Matrikelnummer, die zweite Spalte entspricht der 2. Ziffer Ihrer Matrikelnummer usw.<br /><br /><b>Viel Erfolg bei der Prüfung!</b><br />';
$string['pdfintrotoolarge'] = 'Die Zusatzinformation ist zu lang (maximal 2000 Zeichen).';
$string['pdfscreated'] = 'Dokumente wurden erzeugt';
$string['pdfsdeletedforgroup'] = 'Fragebögen für Gruppe {$a} gelöscht';
$string['pearlywhite'] = 'Perlweiß';
$string['pluginadministration'] = 'Offline-Test-Administration';
$string['pluginname'] = 'Offline-Test';
$string['point'] = 'Punkt';
$string['present'] = 'Anwesend';
$string['preventsamequestion'] = 'Doppelte Verwendung von Fragen verhindern';
$string['preview'] = 'Vorschau';
$string['previewforgroup'] = 'Vorschau für Gruppe {$a}';
$string['previewquestion'] = 'Vorschau der Frage';
$string['printstudycodefield'] = 'Studienkennzahlfeld auf Fragebogen drucken';
$string['printstudycodefield_help'] = 'Hier können Sie festlegen, ob am Deckblatt des Fragebogens der Punkt Studienkennzahl abgefragt wird oder nicht.';
$string['privacy:data_folder_name'] = 'Offlinetest-Daten';
$string['privacy:metadata:core_files'] = 'Der Offlinetest nutzt die File-API, um die erstellten Fragen-, Antwort- und Korrekturbögen sowie die ausgefüllten Antwortbögen zu speichern.';
$string['privacy:metadata:core_question'] = 'Der Offlinetest nutzt die Question-API, um die Fragen der Tests zu speichern.';
$string['privacy:metadata:mod_quiz'] = 'Der Offlinetest nutzt die Quiz-API, um die Ergebnisse der Tests zu speichern.';
$string['privacy:metadata:offlinequiz'] = 'Die Offlinetest-Tabelle speichert alle Informationen einer Offlinetest-Instanz.';
$string['privacy:metadata:offlinequiz:course'] = 'Die Spalte \'course\' in der Offlinetest-Tabelle speichert die Information, in welchem Kurs der Offlinetest hinterlegt ist.';
$string['privacy:metadata:offlinequiz:decimalpoints'] = 'Die Anzahl an Dezimalstellen, um die Note zu berechnen.';
$string['privacy:metadata:offlinequiz:disableimgnewlines'] = 'Sollte neue Zeilen vor und nach einer Grafik verhindern.';
$string['privacy:metadata:offlinequiz:docscreated'] = 'Wenn Dokumente erstellt wurden, wird dieses Feld auf 1 gesetzt, sonst auf 0.';
$string['privacy:metadata:offlinequiz:fileformat'] = 'Das Dateiformat, in welchem Fragebögen erstellt werden, 0 für PDF, 1 für DOCX, 2 für LaTeX.';
$string['privacy:metadata:offlinequiz:fontsize'] = 'Die Schriftgröße in Fragebögen.';
$string['privacy:metadata:offlinequiz:grade'] = 'Die Bewertung zeigt die Maximalpunktezahl die bei diesem Test erreicht werden kann.';
$string['privacy:metadata:offlinequiz:id_digits'] = 'Speichert die Anzahl von Stellen der ID-Nummern, als die Antwortbögen erstellt wurden. Diese Information wird zur Abwärts-Kompatibilität mit früheren Versionen benötigt, wenn die Anzahl von Stellen im Zeitraum zwischen der Erstellung und dem Import der Antwortbögen erhöht wurde.';
$string['privacy:metadata:offlinequiz:introformat'] = 'Dieses Feld ist nicht in Verwendung.';
$string['privacy:metadata:offlinequiz:name'] = 'Die Spalte \'name\' speichert den Namen des Offlinetests.';
$string['privacy:metadata:offlinequiz:numgroups'] = 'Die Zahl an Gruppen dieses Offlinetests.';
$string['privacy:metadata:offlinequiz:papergray'] = 'Der Weisswert dieses Offlinetests.';
$string['privacy:metadata:offlinequiz:pdfintro'] = 'Die Zusatzinformation welche am Anfang des Fragebogendokuments eingefügt ist.';
$string['privacy:metadata:offlinequiz:printstudycodefield'] = 'Eine Einstellung, ob das Studienkennzahl-Feld auf dem Fragebogen gedruckt werden soll. 1 für ja, sonst 0.';
$string['privacy:metadata:offlinequiz:review'] = 'Die Spalte speichert Informationen über die Art des Feedbacks.';
$string['privacy:metadata:offlinequiz:showgrades'] = 'Speichert, ob die erreichbaren Punkte einer Frage auf dem Fragebogen gedruckt werden sollen.';
$string['privacy:metadata:offlinequiz:showquestioninfo'] = 'Speichert, ob die Informationen über eine Frage angezeigt werden sollen, 0 für nein, 1 für Information über den Fragetyp, 2 für Information über die Anzahl an richtigen Antworten.';
$string['privacy:metadata:offlinequiz:showtutorial'] = 'Speichert, ob Studierende sollten aufgefordert werden, das Offlinetest-Tutorial zu absolvieren.';
$string['privacy:metadata:offlinequiz:shufflequestions'] = 'Eine Einstellung, ob das die Fragen beim Erstellen eines Tests gemischt werden sollen, 1 für mischen, sonst 0.';
$string['privacy:metadata:offlinequiz:time'] = 'Die Spalte time speichert das geplante Testdatum.';
$string['privacy:metadata:offlinequiz:timeclose'] = 'Die Spalte timeclose speichert, wann ein Offlinetest geschlossen wird/wurde.';
$string['privacy:metadata:offlinequiz:timecreated'] = 'Die Spalte timecreated speichert den Zeitpunkt, an welchem der Offlinetest erstellt wurde.';
$string['privacy:metadata:offlinequiz:timemodified'] = 'Die Spalte timemodified speichert den Zeitpunkt, an welchem der Offlinetest zum letzten Mal geändert wurde.';
$string['privacy:metadata:offlinequiz:timeopen'] = 'Die Spalte timeopen speichert, wann ein Offlintest geöffnet wird/wurde.';
$string['privacy:metadata:offlinequiz_choices'] = 'Diese Tabelle enthält die Information über alle gesetzten Kreuze einer gescannten Seite. Diese Information wird später zur Berechnung der Ergebnisse auf Basis der Markierungen benötigt.';
$string['privacy:metadata:offlinequiz_choices:choicenumber'] = 'Die Nummer des Kreuzes dieser Frage.';
$string['privacy:metadata:offlinequiz_choices:scannedpageid'] = 'Die gescannte Seite, zu der dieses Kreuz  gehört.';
$string['privacy:metadata:offlinequiz_choices:slotnumber'] = 'Der Fragenslot dieses Kreuzes.';
$string['privacy:metadata:offlinequiz_choices:value'] = 'Soll dieses Kreuz als angekreuzt berücksichtigt werden? 0 für nein, 1 für ja, -1 für ungewiss.';
$string['privacy:metadata:offlinequiz_group_questions'] = 'Diese Tabelle speichert alle Fragen jeder Gruppe im Offlinetest.';
$string['privacy:metadata:offlinequiz_group_questions:maxmark'] = 'Die Maximalpunktezahl die bei einer Frage erreicht werden kann.';
$string['privacy:metadata:offlinequiz_group_questions:offlinegroupid'] = 'Die Offlinetest-Gruppe, zu der die Frage dieser Gruppe gehört.';
$string['privacy:metadata:offlinequiz_group_questions:offlinequizid'] = 'Die Offlinetest-ID, zu der die Frage dieser Gruppe gehört.';
$string['privacy:metadata:offlinequiz_group_questions:page'] = 'Die Seite, auf welcher die Frage im Antwortbogen gedruckt wird.';
$string['privacy:metadata:offlinequiz_group_questions:position'] = 'Die Position in diesem Offlinetest.';
$string['privacy:metadata:offlinequiz_group_questions:questionid'] = 'Die ID der ausgewählten Frage.';
$string['privacy:metadata:offlinequiz_group_questions:slot'] = 'Der Slot der Frage im Test.';
$string['privacy:metadata:offlinequiz_groups'] = 'Tabelle der Gruppen, in der der Test stattfindet.';
$string['privacy:metadata:offlinequiz_groups:answerfilename'] = 'Der Dateiname, der beim Speichern der Antwortbogen-Datei verwendet wurde.';
$string['privacy:metadata:offlinequiz_groups:correctionfilename'] = 'Der Dateiname, der beim Speichern der Korrekturbogen-Datei verwendet wurde.';
$string['privacy:metadata:offlinequiz_groups:number'] = 'Die Nummer der Gruppe im Offlinetest, 1 für Gruppe A, 2 für Gruppe B etc.';
$string['privacy:metadata:offlinequiz_groups:numberofpages'] = 'Die Zahl an Seiten, die beim Drucken der Antwortbögen benötigt werden.';
$string['privacy:metadata:offlinequiz_groups:offlinequizid'] = 'Die ID des Offlinetests, zu dem dieser Offlinetest gehört.';
$string['privacy:metadata:offlinequiz_groups:questionfilename'] = 'Der Dateiname, der beim Speichern der Korrekturbogen-Datei verwendet wurde.';
$string['privacy:metadata:offlinequiz_groups:sumgrades'] = 'Die Summe aller Bewertungen aller Fragen dieser Gruppe.';
$string['privacy:metadata:offlinequiz_groups:templateusageid'] = 'Die ID welche zur Identifizierung und Erstellung des Ergebnisses in der Quiz-API verwendet wurde.';
$string['privacy:metadata:offlinequiz_hotspots'] = 'Diese Tabelle speichert alle Positionen der Kästchen und ob diese erfolgreich ausgewertet wurden.';
$string['privacy:metadata:offlinequiz_hotspots:blank'] = 'Ob der Hotspot erfolgreich analysiert wurde.';
$string['privacy:metadata:offlinequiz_hotspots:name'] = 'Art des Hotspots, z.B. u%number für einen Nutzer/innen-Hotspot, a-0-0 für Frage 1 Antwort 1 usw.';
$string['privacy:metadata:offlinequiz_hotspots:scannedpageid'] = 'Gescannte Seite, auf der sich der Hotspot befindet.';
$string['privacy:metadata:offlinequiz_hotspots:time'] = 'Der Zeitpunkt, an welchem der Hotspot zuletzt geändert wurde.';
$string['privacy:metadata:offlinequiz_hotspots:x'] = 'Der x-Wert des Hotspots.';
$string['privacy:metadata:offlinequiz_hotspots:y'] = 'Der y-Wert des Hotspots.';
$string['privacy:metadata:offlinequiz_p_choices'] = 'Diese Tabelle speichert alle Markierungen für die Anwesenheitsliste.';
$string['privacy:metadata:offlinequiz_p_choices:scannedpageid'] = 'Die gescannte Seite, zu der dieses Kreuz  gehört.';
$string['privacy:metadata:offlinequiz_p_choices:userid'] = 'Die Nutzer-ID, zu der dieses Kreuz gehört.';
$string['privacy:metadata:offlinequiz_p_choices:value'] = 'Ob die Markierung gesetzt wurde oder nicht (0 für nicht gesetzt, 1 für gesetzt, -1 für unklare Markierung).';
$string['privacy:metadata:offlinequiz_p_lists'] = 'Diese Tabelle speichert Informationen über Anwesenheitslisten, wo';
$string['privacy:metadata:offlinequiz_p_lists:filename'] = 'Der Name der Datei für die Liste.';
$string['privacy:metadata:offlinequiz_p_lists:name'] = 'Der Name der Anwesenheitsliste.';
$string['privacy:metadata:offlinequiz_p_lists:number'] = 'Der Name der Liste im Offlinetest.';
$string['privacy:metadata:offlinequiz_p_lists:offlinequizid'] = 'Der Offlinetest zu dem diese Liste gehört.';
$string['privacy:metadata:offlinequiz_page_corners'] = 'Diese Tabelle speichert alle Ecken für jede gescannte Seite, um diese bei einer weiteren Evaluation oder Korrektur schneller auswerten zu können.';
$string['privacy:metadata:offlinequiz_page_corners:position'] = 'Die Information ob diese Ecke ist am oberen oder unteren Rand sowie rechts oder links.';
$string['privacy:metadata:offlinequiz_page_corners:scannedpageid'] = 'Die gescannte Seite auf der sich diese Ecke befindet.';
$string['privacy:metadata:offlinequiz_page_corners:x'] = 'Der x-Wert der Ecke.';
$string['privacy:metadata:offlinequiz_page_corners:y'] = 'Der y-Wert der Ecke.';
$string['privacy:metadata:offlinequiz_participants'] = 'Die Teilnehmer-Tabelle speichert, ob die/ der Nutzer/in am Test teilgenommen hat oder nicht.';
$string['privacy:metadata:offlinequiz_participants:checked'] = 'Die Information ob diese Person in der Anwesenheitsliste abgehakt wurde.';
$string['privacy:metadata:offlinequiz_participants:listid'] = 'Die ID der Liste auf der diese Person ist.';
$string['privacy:metadata:offlinequiz_participants:userid'] = 'Die Nutzer-ID der Person.';
$string['privacy:metadata:offlinequiz_queue'] = 'Diese Tabelle speichert eine Warteschlange von Uploads. Für jeden Upload ist ein eigenes Objekt in dieser Tabelle.';
$string['privacy:metadata:offlinequiz_queue:importuserid'] = 'Die Nutzer-ID der Trainerin/ des Trainers, der diese Dateien importiert hat.';
$string['privacy:metadata:offlinequiz_queue:offlinequizid'] = 'Die Offlinetest-ID der der Warteschlange.';
$string['privacy:metadata:offlinequiz_queue:status'] = 'Der Status der Warteschlange, die benötigt wird.';
$string['privacy:metadata:offlinequiz_queue:timecreated'] = 'Der Zeitpunkt, an welchem die Offlinetest-Bögen importiert wurden.';
$string['privacy:metadata:offlinequiz_queue:timefinish'] = 'Der Zeitpunkt, an welchem die Auswertung der Warteschlange beendet wurden.';
$string['privacy:metadata:offlinequiz_queue:timestart'] = 'Der Zeitpunkt, an welchem die Auswertung der Warteschlange gestartet wurden.';
$string['privacy:metadata:offlinequiz_queue_data'] = 'Diese Tabelle speichert Daten für die Warteschlange, alle Dateien in der Warteschlange erhalten ein Datenobjekt in der Warteschlange.';
$string['privacy:metadata:offlinequiz_queue_data:error'] = 'Wenn der Status ist Fehler, wird hier eine detaillierte Fehlernachricht stehen.';
$string['privacy:metadata:offlinequiz_queue_data:filename'] = 'Der Dateinamen der Datei, in der die Warteschlange Datenobjekte speichert.';
$string['privacy:metadata:offlinequiz_queue_data:queueid'] = 'Die Warteschlange, zu der die Daten gehören.';
$string['privacy:metadata:offlinequiz_queue_data:status'] = 'Der Status der Daten der Warteschlange.';
$string['privacy:metadata:offlinequiz_results'] = 'Diese Tabelle speichert alle Ergebnis-Daten, welche nicht in der Quiz-API gespeichert werden können.';
$string['privacy:metadata:offlinequiz_results:offlinegroupid'] = 'Die Offlinetest-Gruppe, zu der das Ergebnis gehört.';
$string['privacy:metadata:offlinequiz_results:offlinequizid'] = 'Der Offlinetest, zu der das Ergebnis gehört.';
$string['privacy:metadata:offlinequiz_results:status'] = 'Der Status des Ergebnisses (unvollständig oder vollständig).';
$string['privacy:metadata:offlinequiz_results:sumgrades'] = 'Die Summe aller Bewertungen für dieses Ergebnis.';
$string['privacy:metadata:offlinequiz_results:teacherid'] = 'Trainer/in, der/ die das Ergebnis hochgeladen hat.';
$string['privacy:metadata:offlinequiz_results:timefinish'] = 'Die Endzeit, zu welcher das Ergebnis zum ersten Mal eingefügt wurde.';
$string['privacy:metadata:offlinequiz_results:timemodified'] = 'Das Änderungsdatum des Ergebnisses.';
$string['privacy:metadata:offlinequiz_results:timestart'] = 'Die Startzeit, zu welcher das Ergebnis zum ersten Mal eingefügt wurde.';
$string['privacy:metadata:offlinequiz_results:usageid'] = 'Die ID der genutzten Vorlage der Quiz-API, wo das Ergebnis gespeichert wurde.';
$string['privacy:metadata:offlinequiz_results:userid'] = 'Person, zu der das Ergebnis gehört.';
$string['privacy:metadata:offlinequiz_scanned_p_pages'] = 'Die Tabelle speichert Seiten der Teilnehmer/innen und deren allgemeine Informationen.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:error'] = 'Der aufgetretene Fehler bei dieser Anwesenheitsliste (sofern er existiert).';
$string['privacy:metadata:offlinequiz_scanned_p_pages:filename'] = 'Der Name der Datei für die gescannte Seite.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:listnumber'] = 'Die Nummer der Liste.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:offlinequizid'] = 'Der Offlinetest, zu dem diese Teilnehmerseite gehört.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:status'] = 'Der Status der gescannten Seite.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:time'] = 'Die Zeit, zu welcher diese Seite verarbeitet wurde.';
$string['privacy:metadata:offlinequiz_scanned_pages'] = 'Die Tabelle speichert Informationen über die gescannten Seiten eines Offlinetests.';
$string['privacy:metadata:offlinequiz_scanned_pages:error'] = 'Der detaillierte Fehler, den diese Seite hat (sofern dieser existiert).';
$string['privacy:metadata:offlinequiz_scanned_pages:filename'] = 'Der Dateiname der gescannten Seite.';
$string['privacy:metadata:offlinequiz_scanned_pages:groupnumber'] = 'Die Gruppennummer der Gruppe, zu der der Offlinetest gehört.';
$string['privacy:metadata:offlinequiz_scanned_pages:offlinequizid'] = 'Der Offlinetest der gescannten Seite.';
$string['privacy:metadata:offlinequiz_scanned_pages:pagenumber'] = 'Die Seitenzahl der Seite.';
$string['privacy:metadata:offlinequiz_scanned_pages:resultid'] = 'Das Ergebnis in Bezug auf diese Seite.';
$string['privacy:metadata:offlinequiz_scanned_pages:status'] = 'Der Status dieser Seite.';
$string['privacy:metadata:offlinequiz_scanned_pages:time'] = 'Die Zeit, zu welcher die Seite verarbeitet wurde.';
$string['privacy:metadata:offlinequiz_scanned_pages:userkey'] = 'Der Userkey (nicht User-ID) der auf der Seite angekreuzten Person.';
$string['privacy:metadata:offlinequiz_scanned_pages:warningfilename'] = 'Der Dateiname der Datei, welche erstellt wird, wenn ein falsch angekreuzter Test korrigiert wird und die/ der User/in eine Warnmeldung darüber hält.';
$string['questionanalysis'] = 'Schwierigkeitsübersicht';
$string['questionanalysistitle'] = 'Schwierigkeitsübersicht';
$string['questionbankcontents'] = 'Die Frage-Reihe beinhaltet';
$string['questionforms'] = 'Fragebögen';
$string['questioninfoanswers'] = 'Anzahl der richtigen Antworten zeigen';
$string['questioninfocorrectanswer'] = 'richtige Antwort';
$string['questioninfocorrectanswers'] = 'richtige Antworten';
$string['questioninfonone'] = 'Nein';
$string['questioninfoqtype'] = 'Fragetyp zeigen';
$string['questionname'] = 'Frage';
$string['questionpage'] = 'Seite';
$string['questionsheet'] = 'Fragebogen';
$string['questionsheetlatextemplate'] = '% !TEX encoding = UTF-8 Unicode
\\documentclass[11pt,a4paper]{article}
\\usepackage[ngerman]{babel}
\\usepackage[utf8x]{inputenc}
\\usepackage[T1]{fontenc}
\\textwidth 16truecm
\\textheight 23truecm
\\setlength{\\oddsidemargin}{0cm}
\\setlength{\\evensidemargin}{0cm}
\\setlength{\\topmargin}{-1cm}
\\usepackage{amsmath} % für \\implies etc
\\usepackage{amsfonts} % für \\mathbb etc
\\usepackage{graphicx} % zum Bilder einfügen
\\usepackage{enumitem}
\\usepackage{ifthen}
\\usepackage{xcolor}
\\usepackage{ulem}
\\parindent 0pt % keine Einrückung am Beginn des Absatzes
\\renewcommand{\\familydefault}{\\sfdefault} % Schriftart
\\usepackage{lastpage}
\\usepackage{fancyhdr}
\\pagestyle{fancy}
\\chead{\\sc \\Title, Gruppe \\Group}
\\cfoot{Seite \\thepage/\\pageref{LastPage}}
\\usepackage[colorlinks=true,urlcolor=dunkelrot,linkcolor=black]{hyperref} % Für Einfügen von Hyperlinks
\\makeatletter %%% Seitenumbrüche zwischen Antwortmöglichkeiten unterdrücken (funktioniert meistens!)
\\@beginparpenalty=10000
\\@itempenalty=10000
\\makeatother
%
%%% DIE FOLGENDEN ZWEI ZEILEN: Wenn erste auskommentiert -> r/f werden angezeigt, wenn zweite auskommentiert -> r/f werden verborgen
\\newcommand{\\answerIs}[1]{} %%% Zum verborgenen Anzeigen der richtigen und falschen Antworten
% \\newcommand{\\answerIs}[1]{[#1]} %%%Zum Anzeigen der richtigen und falschen Antworten
%%%


% ===========================================================================================================
%%% Die Lehrveranstaltungs-Daten:
\\newcommand{\\Group}{{$a->groupname}}
\\newcommand{\\Title}{{$a->coursename}}
\\newcommand{\\Date}{$a->date}

\\newcommand{\\TestTitle}{%
\\begin{center}
{\\bf \\Large Fragebogen}\\\\[3mm]
\\fbox{
\\begin{tabular}{rl}
\\rule{0pt}{25pt} Name: & $\\underline{\\hspace*{8cm}}$ \\rule{20pt}{0pt}\\\\[5mm]
Matrikelnummer: & $\\underline{\\hspace*{8cm}}$\\\\[5mm]
\\ifthenelse{\\equal{true}{{$a->printstudycodefield}}}{\\rule{10pt}{0pt} Studienkennzahl: & $\\underline{\\hspace*{8cm}}$\\\\[5mm]}{}
\\rule[-20pt]{0pt}{20pt} Unterschrift: & $\\underline{\\hspace*{8cm}}$
\\end{tabular}}
\\end{center}
}

\\InputIfFileExists{offline_test_extras.tex}{}{} % Input extra user definitions

\\begin{document}


% ===========================================================================================================
\\TestTitle

\\bigskip
% ===========================================================================================================

{$a->pdfintrotext}

% ===========================================================================================================

\\newpage

% ===========================================================================================================
{$a->latexforquestions}


\\end{document}';
$string['questionsin'] = 'Fragen in';
$string['questionsingroup'] = 'Fragen in Gruppe';
$string['questionsinthisofflinequiz'] = 'Fragen in diesem Offline-Test';
$string['questiontextisempty'] = '[Kein Fragetext vorhanden]';
$string['quizdate'] = 'Testdatum';
$string['quizopenclose'] = 'Anfangs- und Endzeiten';
$string['quizopenclose_help'] = 'Teilnehmer/innen können ihre Ergebnisse nur zwischen Anfangs- und Endzeit sehen.';
$string['quizquestions'] = 'Test-Fragen';
$string['randomfromexistingcategory'] = 'Zufällige Frage aus vorhandener Kategorie';
$string['randomnumber'] = 'Anzahl der Fragen';
$string['randomquestionusinganewcategory'] = 'Zufällige Frage aus neuer Kategorie';
$string['readjust'] = 'Neu adjustieren';
$string['reallydeletepdfs'] = 'Möchten Sie die Formulare wirklich löschen?';
$string['reallydeleteupdatepdf'] = 'Möchten Sie die Anwesenheitsliste wirklich löschen und aktualisieren?';
$string['recreatepdfs'] = 'PDF-Formulare neu erstellen';
$string['recurse'] = 'Fragen aus Unterkategorien mit einbeziehen';
$string['rediswrong'] = 'falsch angekreuzt oder fälschlich nicht angekreuzt';
$string['refreshpreview'] = 'Vorschau aktualisieren';
$string['regrade'] = 'Neubewertung';
$string['regradedisplayexplanation'] = '<b>Achtung</b>: Manuell geänderte Punkte werden bei der Neubewertung <b>nicht</b> angepasst!';
$string['regradinginfo'] = 'Wenn Sie die Punktezahl einer Frage ändern, müssen Sie den Offlinetest neu bewerten, um die Ergebnisse der Teilnehmer/innen zu aktualisieren.';
$string['regradingquiz'] = 'Neubewertung';
$string['regradingresult'] = 'Ergebnis für Teilnehmer/in {$a} wird neu bewertet...';
$string['reloadpreview'] = 'Vorschau neu laden';
$string['reloadquestionlist'] = 'Fragenliste neu laden';
$string['remove'] = 'Entfernen';
$string['removeemptypage'] = 'Leere Seite entfernen';
$string['removepagebreak'] = 'Seitenumbruch entfernen';
$string['removeselected'] = 'Ausgewählte entfernen';
$string['reordergroupquestions'] = 'Gruppen-Fragen <br/> Reihenfolge und Seitenumbrüche';
$string['reorderquestions'] = 'Neuanordnung der Fragen';
$string['reordertool'] = 'Neuanordnung anzeigen';
$string['repaginate'] = 'Seiten neu erstellen mit {$a} Fragen pro Seite.';
$string['repaginatecommand'] = 'Seitenumbrüche einfügen';
$string['repaginatenow'] = 'Neu nummerieren';
$string['reportends'] = 'Prüfungseinsicht endet';
$string['reportoverview'] = 'Übersicht';
$string['reportstarts'] = 'Prüfungseinsicht beginnt';
$string['resetofflinequizzes'] = 'Offline-Test-Daten zurücksetzen';
$string['resultexists'] = 'Identisches Ergebnis für {$a} bereits vorhanden';
$string['resultimport'] = 'Ergebnisse importieren';
$string['results'] = 'Ergebnisse';
$string['review'] = 'Bericht';
$string['reviewbefore'] = 'Vorschau erlauben, während der Offline-Test noch geöffnet ist';
$string['reviewclosed'] = 'Nachdem der Offline-Test beendet ist';
$string['reviewcloses'] = 'Prüfungseinsicht schließt';
$string['reviewimmediately'] = 'Direkt nach dem Versuch';
$string['reviewincludes'] = 'Bericht enthält';
$string['reviewofresult'] = 'Ergebnis';
$string['reviewopens'] = 'Prüfungseinsicht beginnt';
$string['reviewoptions'] = 'Prüfungseinsicht';
$string['reviewoptions_help'] = 'Diese Optionen regeln, welche Informationen Teilnehmer/innen bei der Prüfungseinsicht einsehen dürfen. Im Detail bedeuten die Optionen:
<table>
<tr><td style="vertical-align: top;"><b>Das Ergebnis</b></td><td>
Teilnehmer/innen sehen Fragetexte, Antworttexte und welche Antworten sie angekreuzt haben.
</td></tr>
<tr><td style="vertical-align: top;"><b>Ob richtig</b></td><td>
Diese Option lässt sich nur anhaken, wenn auch "Das Ergebnis" ausgewählt ist und bewirkt, dass zusätzlich angezeigt wird,
 welche der angekreuzten Antwortalternativen richtig (grün hinterlegt) und welche falsch (rot hinterlegt) sind.
</td></tr>
<tr><td style="vertical-align: top;"><b>Punktezahl</b></td><td>
Angezeigt werden Gruppe (bspw. C), Punktezahl (erreichte Punktezahl, Summe der Punkte der Fragen des Tests, erreichte %  bspw. 40/80 (50%))
und Bewertung (bspw. 50 von maximal 100). Ist zusätzlich die Option "Das Ergebnis" ausgewählt,
werden auch für jede Frage die maximale Punktezahl und die erreichten Punkte angezeigt.
</td></tr>
<tr><td style="vertical-align: top;"><b>Spezifisches Feedback</b></td><td>
Spezifisches Feedback kann in MC-Fragen unter "Kombiniertes Feedback" festgelegt werden und wird eine/m Teilnehmer/in abhängig von seiner/ihrer Antwort auf eine Frage angezeigt.
</td></tr>
<tr><td style="vertical-align: top;"><b>Allgemeines Feedback</b></td><td>
<p>Das allgemeine Feedback wird bei der Prüfungseinsicht bei der jeweiligen Frage angezeigt, unabhängig von den gegebenen Antworten. Andere Feedbacks sind abhängig von der \'Richtigkeit\' der Antworten.</p><p></p><p>Allgemeines Feedback kann eingesetzt werden, um Hinweise zu geben. Links könnten zu weiteren Informationen führen, falls die Frage nicht verstanden wurde.</p>
</td></tr>
<tr><td style="vertical-align: top;"><b>Richtige Antwort</b></td><td>
Diese Option lässt sich nur anhaken, wenn auch "Das Ergebnis" ausgewählt ist und bewirkt, dass zusätzlich unter jeder Frage die Nummern der richtigen Antworten angezeigt werden
 (Bsp.: "Die richtige Antwort lautet: a, c").
</td></tr>
<tr><td style="vertical-align: top;"><b>Scannerbeleg</b></td><td>
Teilnehmer/innen sehen einen Link zum Scannerbeleg. Wenn dieser angeklickt wird, wird das eingescannte Antwortformular angezeigt.
Kästchen, die als Ankreuzungen gewertet wurden, sind grün umrandet.
</td></tr>
<tr><td style="vertical-align: top;"><b>Scannerbeleg mit Bewertung</b></td><td>
Teilnehmer/innen sehen einen Link zum Scannerbeleg. Wenn dieser angeklickt wird, wird das eingescannte Formular angezeigt.
Kästchen, die als Ankreuzungen gewertet wurden, sind grün umrandet.
Zusätzlich sind alle Kästchen, die fälschlicherweise angekreuzt wurden und solche, die fälschlicherweise nicht angekreuzt sind, rot hinterlegt.
Des Weiteren befindet sich am rechten Rand eine Auflistung der erreichten Punkte pro Frage.
</td></tr>
</table>';
$string['reviewoptionsheading'] = 'Einstellungen für die Prüfungseinsicht';
$string['rimport'] = 'Hochladen/Korrigieren';
$string['rotate'] = 'Drehen';
$string['rotatingsheet'] = 'Bogen wird gedreht...';
$string['save'] = 'Speichern';
$string['saveandshow'] = 'Speichern mit Fehlerhinweis';
$string['savescannersettings'] = 'Scannereinstellungen speichern';
$string['scannedform'] = 'Scannerbeleg';
$string['scannerformfortype'] = 'Formular für Typ {$a}';
$string['scanneroptions'] = 'Scanner-Einstellungen';
$string['scannerpdfs'] = 'Leere Formulare';
$string['scannerpdfstext'] = 'Laden Sie die folgenden leeren Antwortbögen herunter, wenn Sie Ihre eigene Scannersoftware verwenden wollen.';
$string['scanningoptionsheading'] = 'Scanner-Einstellungen';
$string['score'] = 'Bewertung';
$string['search:activity'] = 'Offline-Test - Aktivitätsinformation';
$string['select'] = 'Auswählen';
$string['selectagroup'] = 'Gruppe auswählen';
$string['selectall'] = 'Alle auswählen';
$string['selectcategory'] = 'Kategorie auswählen';
$string['selectdifferentgroup'] = 'Bitte wählen Sie eine andere Gruppe!';
$string['selectedattempts'] = 'Ergebnisse auswählen...';
$string['selectformat'] = 'Dateiformat wählen...';
$string['selectgroup'] = 'Basierend auf Gruppe:';
$string['selectlist'] = 'Bitte wählen Sie eine Liste oder versuchen Sie den Bogen neu zu adjustieren:';
$string['selectmultipletoolbar'] = 'Werkzeugleiste zur Mehrfachauswahl';
$string['selectnone'] = 'Keine auswählen';
$string['selectpage'] = 'Bitte wählen Sie die Seite oder versuchen Sie den Bogen neu zu adjustieren:';
$string['selectquestiontype'] = '-- Fragetyp auswählen --';
$string['showallparts'] = 'Alle {$a} Teilnehmer/innen anzeigen';
$string['showcopyright'] = 'Copyright Hinweis';
$string['showcopyrightdesc'] = 'Wenn Sie diese Option aktivieren wird bei der Prüfungseinsicht für Teilnehmer/innen ein Copyright Hinweis angezeigt.';
$string['showgrades'] = 'Punkte für Fragen drucken';
$string['showgrades_help'] = 'Diese Option steuert, ob die erzielbaren Punkte einer Frage auf dem Fragebogen angezeigt werden.';
$string['showmissingattemptonly'] = 'Alle Anwesenden ohne Ergebnis anzeigen';
$string['showmissingcheckonly'] = 'Alle Abwesenden mit Ergebnis anzeigen';
$string['shownumpartsperpage'] = '{$a} Teilnehmer/innen pro Seite anzeigen';
$string['showquestioninfo'] = 'Hinweis zu Antwortoptionen drucken';
$string['showquestioninfo_help'] = 'Diese Option steuert, ob bei Hinweise zur Antwortoption einer Frage auf dem Fragebogen unterhalb der Frage angezeigt werden.
Folgende Optionen sind möglich:
<ul>
    <li> Nein - Es werden keine Hinweise gezeigt
    <li> Fragetyp zeigen - Single-Choice, Multiple-Choice, Alles-oder-Nichts Multiple-Choice wird angezeigt
    <li> Anzahl der richtigen Antworten zeigen - bspw. 1 richtige Antwort wird angezeigt
</ul>';
$string['showstudentview'] = 'Teilnehmer/innen-Ansicht anzeigen';
$string['showtutorial'] = 'Tutorial zum Prüfungsablauf anzeigen';
$string['showtutorial_help'] = 'Mit dieser Option können Sie für Ihre Teilnehmer/innen ein Tutorial zum Prüfungsablauf anzeigen lassen.
Darin erhalten die Teilnehmer/innen grundlegende Informationen zu den Prüfungsunterlagen und zum Ausfüllen des Antwortbogens.
Außerdem können sie das korrekte Ankreuzen der Matrikelnummer interaktiv üben.<br />
<b>Bitte beachten Sie:</b><br />
Falls Sie diese Option auf "Ja" setzen, die Prüfung aber ausblenden, wird der Link zum Tutorial trotzdem nicht sichtbar sein.
In diesem Fall können Sie das Tutorial auf der Startseite verlinken.';
$string['showtutorialdescription'] = 'Sie können das Tutorial auch mit der folgenden URL auf der Kursseite verlinken:';
$string['shuffleanswers'] = 'Antworten neu mischen';
$string['shufflequestions'] = 'Fragen neu mischen';
$string['shufflequestionsanswers'] = 'Fragen und Antworten mischen';
$string['shufflequestionsselected'] = 'Fragen-Mischen wurde aktiviert. Deshalb sind einige Aktionen auf dieser Seite nicht verfügbar. Um dies zu ändern, bearbeiten Sie die Einstellungen, {$a}.';
$string['shufflewithin'] = 'Antworten innerhalb der Fragen mischen';
$string['shufflewithin_help'] = 'Wenn hier "Ja" ausgewählt ist, wird die Reihenfolge der Antwortalternativen pro Frage zufällig gewählt. Ist dieselbe Frage in zwei oder mehreren Gruppen des Offline-Tests eingebunden, wird für jede Gruppe die Antwortreihenfolge nach dem Zufallsprinzip festgelegt. ACHTUNG: Antworten werden nur bei Fragen gemischt, für die in den Einstellungen der Frage das Mischen aktiviert ist!';
$string['signature'] = 'Unterschrift';
$string['singlechoice'] = 'Single-Choice';
$string['standard'] = 'Standard';
$string['starttutorial'] = 'Information zum Prüfungsablauf ansehen';
$string['statistics'] = 'Statistik';
$string['statisticsplural'] = 'Statistiken';
$string['statsoverview'] = 'Statistik-Übersicht';
$string['studycode'] = 'Studienkennzahl';
$string['temporaryfiledeletiontask'] = 'Löschen von temporären Dateien';
$string['theattempt'] = 'Das Ergebnis';
$string['timesup'] = 'Zeit wurde überschritten!';
$string['totalmarksx'] = 'Summe der Punkte: {$a}';
$string['totalpointsx'] = 'Summe der Punkte: {$a}';
$string['totalquestionsinrandomqcategory'] = 'Insgesamt {$a} Fragen in Kategorie.';
$string['trigger'] = 'Unter-/Obergrenze';
$string['tutorial'] = 'Information zum Prüfungsablauf bei Multiple-Choice-Prüfungen';
$string['type'] = 'Typ';
$string['uncheckparts'] = 'Ausgewählte Teilnehmer/innen als abwesend markieren';
$string['updatedsumgrades'] = 'Maximale Punktezahl der Gruppe {$a->letter} neu berechnet {$a->grade}.';
$string['upgradingfilenames'] = 'Dateinamen der Dokumente werden migriert: Offline-Test {$a->done}/{$a->outof} (Offline-Test ID {$a->info})';
$string['upgradingilogs'] = 'Hochgeladene Antwortbögen werden migriert: Offline Test {$a->done}/{$a->outof} (Offline Test ID {$a->info})';
$string['upgradingofflinequizattempts'] = 'Offline Test Ergebnisse werden migriert: Offline Test {$a->done}/{$a->outof} (Offline Test ID {$a->info})';
$string['upload'] = 'Hochladen/Korrigieren';
$string['uploadpart'] = 'Anwesenheitslisten: hochladen/korrigieren';
$string['uppertrigger'] = 'Oberer Grenzwert';
$string['uppertriggerzero'] = 'Oberer Grenzwert ist null';
$string['upperwarning'] = 'Oberer Warnwert';
$string['upperwarningzero'] = 'Oberer Warnwert ist null';
$string['useradded'] = 'Teilnehmer/in {$a} hinzugefügt';
$string['userdoesnotexist'] = 'Teilnehmer/in {$a}';
$string['useridentification'] = 'Teilnehmeridentifikation';
$string['useridviolation'] = 'Mehrere Nutzer/innen gefunden';
$string['userimported'] = 'Teilnehmer/in {$a} importiert und benotet';
$string['usernotincourse'] = 'Teilnehmer/in {$a} nicht im Kurs.';
$string['usernotinlist'] = 'Teilnehmer/in nicht in Liste registriert!';
$string['usernotregistered'] = 'Teilnehmer/in {$a} nicht im Kurs registriert';
$string['userpageimported'] = 'Einzelseite importiert für Teilnehmer/in {$a}';
$string['valuezero'] = 'Wert darf nicht null sein';
$string['viewresults'] = 'Ergebnisse ansehen';
$string['white'] = 'Weiß';
$string['withselected'] = 'Ausgewählte...';
$string['zerogradewarning'] = 'Hinweis: Die beste Bewertung für den Offline-Test beträgt 0 Punkte!';
$string['zipfile'] = 'ZIP-Datei';
$string['zipok'] = 'ZIP-Datei importieren';
