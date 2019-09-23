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
 * Strings for component 'tool_analytics', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Genauigkeit';
$string['allpredictions'] = 'Alle Vorhersagen';
$string['analysingsitedata'] = 'Die Website wird analysiert.';
$string['analyticmodels'] = 'Analytics-Modelle';
$string['bettercli'] = 'Das Auswerten von Modellen und das Erzeugen von Vorhersagen kann eine starke Serverlast verursachen. Es wird dringend empfohlen, diese Aktionen über die Befehlszeile auszuführen.';
$string['cantguessenddate'] = 'Das Kursende kann nicht abgeschätzt werden.';
$string['cantguessstartdate'] = 'Der Kursbeginn kann nicht abgeschätzt werden.';
$string['clearmodelpredictions'] = 'Möchten Sie wirklich alle "{$a}" Vorhersagen löschen?';
$string['clearpredictions'] = 'Vorhersagen löschen';
$string['clienablemodel'] = 'Sie können das Modell aktivieren, indem Sie über die ID eine Zeitaufteilungsmethode auswählen. Beachten Sie, dass sie diese auch später aktivieren können, indem Sie die Weboberfläche nutzen (\'keine\' zum Beenden).';
$string['clievaluationandpredictions'] = 'Ein regelmäßiger Task arbeitet sich durch die aktivierten Modelle und erzeugt Vorhersagen. Die Modellauswertung über die Weboberfläche ist deaktiviert. Sie können die Prozesse manuell über die Weboberfläche anstoßen, indem Sie die Analytics-Einstellung <a href="{$a}">\'onlycli\'</a> deaktivieren.';
$string['clievaluationandpredictionsnoadmin'] = 'Ein regelmäßiger Task arbeitet sich durch die aktivierten Modelle und erzeugt Vorhersagen. Der Start der Evaluation über die Weboberfläche ist deaktiviert und kann vom Administrator aktiviert werden.';
$string['disabled'] = 'Deaktiviert';
$string['editmodel'] = 'Modell "{$a}" bearbeiten';
$string['edittrainedwarning'] = 'Dieses Modell wurde bereits trainiert. Beachten Sie, dass die Veränderung seiner Indikatoren oder seiner Zeitaufteilungsmethide seine bisherigen Vorhersagen löschen wird und damit beginnen wird neue zu erstellen.';
$string['enabled'] = 'Aktiviert';
$string['errorcantenablenotimesplitting'] = 'Sie müssen eine Zeitaufteilungsmethode auswählen, bevor Sie das Modell aktivieren.';
$string['errornoenabledandtrainedmodels'] = 'Es gibt keine aktivierten und trainierten Modelle, die vorhergesagt werden können.';
$string['errornoenabledmodels'] = 'Es gibt keine aktivierten Modelle zu trainieren.';
$string['errornoexport'] = 'Nur trainierte Modelle können exportiert werden.';
$string['errornostaticedit'] = 'Auf Annahmen basierende Modelle können nicht bearbeitet werden';
$string['errornostaticevaluated'] = 'Auf Annahmen basierende Modelle können nicht bewertet werden, laut ihrer Definition sind sie immer 100% korrekt';
$string['errornostaticlog'] = 'Auf Annahmen basierende Modelle können nicht bewertet werden, da es kein performance log gibt';
$string['erroronlycli'] = 'Die Ausführung ist nur über Befehlszeile erlaubt.';
$string['errortrainingdataexport'] = 'Dir Trainingsdaten des Modells konnten nicht exportiert werden.';
$string['evaluate'] = 'Auswerten';
$string['evaluatemodel'] = 'Modell auswerten';
$string['evaluationinbatches'] = 'Die Inhalte der Website werden in Batches berechnet und gespeichert. Während der Bewertung können Sie den Prozess zu jedem Zeitpunkt stoppen. Wenn der Prozess das nächste Mal startet, wird er an der gleichen Stelle weiter machen, an der Sie ihn unterbrochen haben.';
$string['export'] = 'Exportieren';
$string['exporttrainingdata'] = 'Trainingsdaten exportieren';
$string['extrainfo'] = 'Information';
$string['generalerror'] = 'Fehler bei der Bewertung. Statuscode {$a}';
$string['getpredictions'] = 'Vorhersagen erstellen';
$string['getpredictionsresults'] = 'Ergebnisse mit der Kursdaueraufteilung {$a->name}';
$string['getpredictionsresultscli'] = 'Ergebnisse mit der Kursdaueraufteilung {$a->name} (id: {$a->id})';
$string['goodmodel'] = 'Dieses Modell kann gut für Vorhersagen genutzt werden. Aktivieren Sie es, um das Erstellen von Vorhersagen zu beginnen.';
$string['indicators'] = 'Indikatoren';
$string['info'] = 'Information';
$string['insights'] = 'Einschätzungen';
$string['invalidanalysables'] = 'Ungültige Elemente';
$string['invalidanalysablesinfo'] = 'Diese Seite listet Elemente der Website auf, die für das Vorhersagemodell nicht verwendet werden können. Die aufgeführten Elemente können weder für das Training des Verhersagemodells noch zur Erstellung von Vorhersagen genutzt werden.';
$string['invalidanalysablestable'] = 'Tabelle der zur Analyse nicht nutzbaren Elemente';
$string['invalidprediction'] = 'Ungültig zum Erstellen von Vorhersagen';
$string['invalidtraining'] = 'Ungültig zum Trainieren des Modells';
$string['loginfo'] = 'Zusätzliche Log-Information';
$string['modelid'] = 'Modell ID';
$string['modelinvalidanalysables'] = 'Nicht nutzbare Elemente für das Modell "{$a}"';
$string['modelresults'] = '{$a} Ergebnisse';
$string['modeltimesplitting'] = 'Zeitaufteilung';
$string['nextpage'] = 'Nächste Seite';
$string['nodatatoevaluate'] = 'Keine Daten zur Evaluierung des Modells';
$string['nodatatopredict'] = 'Keine neuen Elemente zur Erstellung von Vorhersagen';
$string['nodatatotrain'] = 'Keine neuen Daten zum Training des Modells';
$string['noinvalidanalysables'] = 'Auf dieser Seite befindet sich kein ungültiges Analyseelement';
$string['notdefined'] = 'Noch nicht definiert';
$string['pluginname'] = 'Analytics-Modelle';
$string['predictionprocessfinished'] = 'Vorhersageprozess abgeschlossen';
$string['predictionresults'] = 'Ergebnisse der Vorhersage';
$string['predictmodels'] = 'Modelle vorhersagen';
$string['predictorresultsin'] = 'Protokollierte Informationen der Verhersage im Verzeichnis {$a}';
$string['previouspage'] = 'Vorherige Seite';
$string['privacy:metadata'] = 'Das Plugin \'Analytics Modelle\' speichert keine personenbezogenen Daten.';
$string['sameenddate'] = 'Das derzeitige Enddatum ist gültig.';
$string['samestartdate'] = 'Das derzeitige Startdatum ist gültig.';
$string['target'] = 'Ziel';
$string['timesplittingnotdefined'] = 'Die Zeitaufteilung ist nicht definiert.';
$string['timesplittingnotdefined_help'] = 'Sie müssen eine Methode zur Zeitaufteilung wählen, bevor Sie das Modell aktivieren können.';
$string['trainandpredictmodel'] = 'Modell trainieren und Vorhersagen berechnen';
$string['trainingprocessfinished'] = 'Trainingsprozess beendet';
$string['trainingresults'] = 'Trainingsergebnisse';
$string['trainmodels'] = 'Trainingsmodelle';
$string['viewlog'] = 'Log';
$string['weeksenddateautomaticallyset'] = 'Das Kursende wird basierend auf dem Kursbeginn und der Anzahl der Abschnitte automatisch gesetzt.';
$string['weeksenddatedefault'] = 'Das Kursende wird basierend auf dem Kursbeginn automatisch berechnet.';
