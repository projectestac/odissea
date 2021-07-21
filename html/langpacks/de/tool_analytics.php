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
 * Strings for component 'tool_analytics', language 'de', version '3.11'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Genauigkeit';
$string['actionexecutedgroupedusefulness'] = 'Gruppenaktionen';
$string['actions'] = 'Aktionen';
$string['actionsexecutedbyusers'] = 'Aktionen, die von Nutzer/innen ausgeführt wurden';
$string['actionsexecutedbyusersfor'] = 'Aktionen, die von Nutzer/innen für das Modell "{$a}" ausgeführt wurden';
$string['allpredictions'] = 'Alle Vorhersagen';
$string['alltimesplittingmethods'] = 'Alle Analyseintervalle';
$string['analysingsitedata'] = 'Die Website wird analysiert.';
$string['analysis'] = 'Analysis';
$string['analyticmodels'] = 'Analytics-Modelle';
$string['bettercli'] = 'Das Auswerten von Modellen und das Erzeugen von Vorhersagen kann eine starke Serverlast verursachen. Es wird dringend empfohlen, diese Aktionen über die Befehlszeile auszuführen.';
$string['cantguessenddate'] = 'Das Kursende kann nicht abgeschätzt werden.';
$string['cantguessstartdate'] = 'Der Kursbeginn kann nicht abgeschätzt werden.';
$string['classdoesnotexist'] = 'Die Class {$a} existiert nicht.';
$string['clearmodelpredictions'] = 'Möchten Sie wirklich alle "{$a}" Vorhersagen löschen?';
$string['clearpredictions'] = 'Vorhersagen löschen';
$string['clienablemodel'] = 'Sie können das Modell aktivieren, indem Sie ein Analyseintervall über die ID auswählen. Beachten Sie, dass Sie dies auch später aktivieren können, indem Sie die Weboberfläche nutzen (\'keine\' zum Beenden).';
$string['clievaluationandpredictions'] = 'Ein regelmäßiger Task arbeitet sich durch die aktivierten Modelle und erzeugt Vorhersagen. Die Modellauswertung über die Weboberfläche ist deaktiviert. Sie können die Prozesse manuell über die Weboberfläche anstoßen, indem Sie die Analytics-Einstellung <a href="{$a}">\'onlycli\'</a> deaktivieren.';
$string['clievaluationandpredictionsnoadmin'] = 'Ein regelmäßiger Task arbeitet sich durch die aktivierten Modelle und erzeugt Vorhersagen. Der Start der Evaluation über die Weboberfläche ist deaktiviert und kann von Administrator/innen aktiviert werden.';
$string['component'] = 'Komponente';
$string['componentcore'] = 'Core';
$string['componentselect'] = 'Alle Modelle der Komponente \'{$a}\' auswählen';
$string['componentselectnone'] = 'Alle abwählen';
$string['contexts'] = 'Kontexte';
$string['contexts_help'] = 'Das Modell wird auf diese Reihe von Kontexten beschränkt sein. Es werden keine Kontextbeschränkungen angewendet, wenn keine Kontexte ausgewählt werden.';
$string['createmodel'] = 'Modell anlegen';
$string['currenttimesplitting'] = 'Momentanes Analyseintervall';
$string['delete'] = 'Löschen';
$string['deletemodelconfirmation'] = 'Möchten Sie wirklich "{$a}" löschen? Diese Änderungen können nicht zurückgenommen werden.';
$string['disabled'] = 'Deaktiviert';
$string['editmodel'] = 'Modell "{$a}" bearbeiten';
$string['edittrainedwarning'] = 'Dieses Modell wurde bereits trainiert. Beachten Sie, dass die Veränderung seiner Indikatoren oder seinem Analyseintervall die bisherigen Vorhersagen löscht und neu mit dem Erstellen von Vorhersagen beginnen muss.';
$string['enabled'] = 'Aktiviert';
$string['errorcantenablenotimesplitting'] = 'Sie müssen ein Analyseintervall auswählen, bevor Sie das Modell aktivieren.';
$string['errornoenabledandtrainedmodels'] = 'Es gibt keine aktivierten und trainierten Modelle, die vorhergesagt werden können.';
$string['errornoenabledmodels'] = 'Es gibt keine aktivierten Modelle zum Trainieren.';
$string['errornoexport'] = 'Nur trainierte Modelle können exportiert werden.';
$string['errornostaticevaluated'] = 'Auf Annahmen basierende Modelle können nicht bewertet werden, laut ihrer Definition sind sie immer 100% korrekt';
$string['errornostaticlog'] = 'Auf Annahmen basierende Modelle können nicht bewertet werden, da es kein performance log gibt';
$string['erroronlycli'] = 'Die Ausführung ist nur über Befehlszeile erlaubt.';
$string['errortrainingdataexport'] = 'Dir Trainingsdaten des Modells konnten nicht exportiert werden.';
$string['evaluate'] = 'Auswerten';
$string['evaluatemodel'] = 'Modell auswerten';
$string['evaluationinbatches'] = 'Die Inhalte der Website werden in Batches berechnet und gespeichert. Während der Bewertung können Sie den Prozess zu jedem Zeitpunkt stoppen. Wenn der Prozess das nächste Mal startet, wird er an der gleichen Stelle weiter machen, an der Sie ihn unterbrochen haben.';
$string['evaluationmode'] = 'Auswertungsmodus';
$string['evaluationmode_help'] = 'Es gibt zwei Auswertemodi:

* Trainiertes Modell - Die Systemdaten werden als Testdaten verwendet, um die Genauigkeit des trainierten Modells zu bewerten.
* Konfiguration - Die Systemdaten werden in Trainings- und Testdaten unterteilt, um die Genauigkeit der Modellkonfiguration zu trainieren und zu testen.

Das trainierte Modell ist nur verfügbar, wenn ein trainiertes Modell in das System importiert wurde und noch nicht anhand von Systemdaten neu geschult wurde.';
$string['evaluationmodecolconfiguration'] = 'Konfiguration';
$string['evaluationmodecoltrainedmodel'] = 'Angelerntes Modell';
$string['evaluationmodeconfiguration'] = 'Modellkonfiguration überprüfen';
$string['evaluationmodeinfo'] = 'Dieses Modell wurde in dieses System importiert. Sie können entweder die Performance des Modells oder die Performance der Modellkonfiguration anhand von Systemdaten bewerten.';
$string['evaluationmodetrainedmodel'] = 'Auswerten des trainierten Modells';
$string['executescheduledanalysis'] = 'Geplante Analyse ausführen';
$string['export'] = 'Exportieren';
$string['exportincludeweights'] = 'Gewichtungen des trainierten Modells einbeziehen';
$string['exportmodel'] = 'Konfiguration exportieren';
$string['exporttrainingdata'] = 'Trainingsdaten exportieren';
$string['extrainfo'] = 'Information';
$string['generalerror'] = 'Fehler bei der Bewertung. Statuscode {$a}';
$string['getpredictions'] = 'Vorhersagen erstellen';
$string['goodmodel'] = 'Dieses Modell kann gut für Vorhersagen genutzt werden. Aktivieren Sie es, um das Erstellen von Vorhersagen zu beginnen.';
$string['ignoreversionmismatches'] = 'Versionsfehler ignorieren';
$string['ignoreversionmismatchescheckbox'] = 'Ignorieren Sie die Unterschiede zwischen dieser System-Version und der ursprünglichen System-Version.';
$string['importedsuccessfully'] = 'Das Modell wurde erfolgreich importiert.';
$string['importmodel'] = 'Importiertes Modell';
$string['indicators'] = 'Indikatoren';
$string['indicators_help'] = 'Die Indikatoren sind das, was Ihrer Meinung nach zu einer genauen Vorhersage des Ziels führen wird.';
$string['indicatorsnum'] = 'Anzahl der Indikatoren: {$a}';
$string['info'] = 'Information';
$string['insights'] = 'Einschätzungen';
$string['insightsreport'] = 'Einschätzungsberichte';
$string['invalidanalysables'] = 'Ungültige Elemente';
$string['invalidanalysablesinfo'] = 'Diese Seite listet Elemente der Website auf, die für das Vorhersagemodell nicht verwendet werden können. Die aufgeführten Elemente können weder für das Training des Vorhersagemodells noch zur Erstellung von Vorhersagen genutzt werden.';
$string['invalidanalysablestable'] = 'Tabelle der zur Analyse nicht nutzbaren Elemente';
$string['invalidcurrenttimesplitting'] = 'Das aktuelle Analyseintervall ist für das Ziel dieses Modells ungültig. Bitte wählen Sie ein anderes Analyseintervall.';
$string['invalidindicatorsremoved'] = 'Ein neues Modell wurde hinzugefügt. Indikatoren, die mit dem ausgewählten Ziel nicht funktionieren, wurden automatisch entfernt.';
$string['invalidprediction'] = 'Ungültig zum Erstellen von Vorhersagen';
$string['invalidtimesplitting'] = 'Das ausgewählte Analyseintervall ist für das ausgewählte Ziel ungültig.';
$string['invalidtimesplittinginmodels'] = 'Das von einigen der Modelle verwendete Analyseintervall ist ungültig. Bitte wählen Sie für die folgenden Modelle ein anderes Analyseintervall aus: {$a}';
$string['invalidtraining'] = 'Ungültig zum Trainieren des Modells';
$string['loginfo'] = 'Zusätzliche Log-Information';
$string['missingmoodleversion'] = 'Die importierte Datei definiert keine Version';
$string['modelid'] = 'Modell ID';
$string['modelinvalidanalysables'] = 'Nicht nutzbare Elemente für das Modell "{$a}"';
$string['modelname'] = 'Name des Modells';
$string['modelresults'] = '{$a} Ergebnisse';
$string['modeltimesplitting'] = 'Analyseintervall';
$string['newmodel'] = 'Neues Modell';
$string['nextpage'] = 'Nächste Seite';
$string['noactionsfound'] = 'Nutzer/innen haben keine Aktionen auf den generierten Einschätzungen ausgeführt.';
$string['nodatatoevaluate'] = 'Keine Daten zur Evaluierung des Modells';
$string['nodatatopredict'] = 'Keine neuen Elemente, für die Vorhersagen erstellt werden müssen.';
$string['nodatatotrain'] = 'Keine neuen Daten, die zum Training verwendet werden können.';
$string['noinvalidanalysables'] = 'Auf dieser Seite befindet sich kein ungültiges Analyseelement';
$string['notdefined'] = 'Noch nicht definiert';
$string['pluginname'] = 'Analytics-Modelle';
$string['predictionprocessfinished'] = 'Vorhersageprozess abgeschlossen';
$string['predictionresults'] = 'Ergebnisse der Vorhersage';
$string['predictmodels'] = 'Modelle vorhersagen';
$string['predictorresultsin'] = 'Protokollierte Informationen der Verhersage im Verzeichnis {$a}';
$string['previouspage'] = 'Vorherige Seite';
$string['privacy:metadata'] = 'Das Plugin \'Analytics Modelle\' speichert keine personenbezogenen Daten.';
$string['restoredefault'] = 'Standardmodelle wiederherstellen';
$string['restoredefaultempty'] = 'Bitte wählen Sie die wiederherzustellenden Modelle aus.';
$string['restoredefaultinfo'] = 'Diese Standardmodelle fehlen oder haben sich seit der Installation geändert. Sie können die ausgewählten Standardmodelle wiederherstellen.';
$string['restoredefaultnone'] = 'Alle vom Core bereitgestellten Standardmodelle und installierten Plugins wurden erstellt. Es wurden keine neuen Modelle gefunden; es gibt nichts wiederherzustellen.';
$string['restoredefaultsome'] = '{$a->count} neue(s) Modell(e) wurden erfolgreich wiederhergestellt/erstellt';
$string['restoredefaultsubmit'] = 'Ausgewählte wiederherstellen';
$string['sameenddate'] = 'Das derzeitige Enddatum ist gültig.';
$string['samestartdate'] = 'Das derzeitige Startdatum ist gültig.';
$string['scheduledanalysisresults'] = 'Ergebnisse mit dem Analyseintervall {$a->name}';
$string['scheduledanalysisresultscli'] = 'Ergebnisse mit dem Analyseintervall {$a->name} (id: {$a->id})';
$string['selecttimesplittingforevaluation'] = 'Wählen Sie das Analyseintervall, das Sie zur Auswertung der Modellkonfiguration verwenden möchten.';
$string['target'] = 'Ziel';
$string['target_help'] = 'Das Ziel ist das, was das Modell vorhersagen wird.';
$string['timesplittingnotdefined'] = 'Es ist kein Analyseintervall definiert.';
$string['timesplittingnotdefined_help'] = 'Sie müssen ein Analyseintervall wählen, bevor Sie das Modell aktivieren können.';
$string['trainandpredictmodel'] = 'Modell trainieren und Vorhersagen berechnen';
$string['trainingprocessfinished'] = 'Trainingsprozess beendet';
$string['trainingresults'] = 'Trainingsergebnisse';
$string['trainmodels'] = 'Trainingsmodelle';
$string['versionnotsame'] = 'Die importierte Datei stammt von einer anderen Version ({$a->importedversion}) statt der moment verwendeten ({$a->version})';
$string['viewlog'] = 'Evaluation-Log';
$string['weeksenddateautomaticallyset'] = 'Das Kursende wird basierend auf dem Kursbeginn und der Anzahl der Abschnitte automatisch gesetzt.';
$string['weeksenddatedefault'] = 'Das Kursende wird basierend auf dem Kursbeginn automatisch berechnet.';
