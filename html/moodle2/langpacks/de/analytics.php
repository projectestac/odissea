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
 * Strings for component 'analytics', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analyse-Objekt {$a->analysableid} nicht genutzt: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analyse-Objekt {$a->analysableid} ist für dieses Ziel nicht gültig: {$a->result}';
$string['analysisinprogress'] = 'Wird noch von einer vorherigen Ausführung analysiert';
$string['analytics'] = 'Analytics';
$string['analyticslogstore'] = 'Verwendeter Log-Speicher';
$string['analyticslogstore_help'] = 'Der Log-Speicher, der von der Analytics-API genutzt wird, um die Nutzeraktivitäten auszuwerten.';
$string['analyticssettings'] = 'Analytics-Einstellungen';
$string['coursetoolong'] = 'Der Kurs ist zu lang.';
$string['defaultpredictionsprocessor'] = 'Standard-Prozessor für Vorhersagen';
$string['defaultpredictoroption'] = 'Standard-Prozessor {$a}';
$string['disabledmodel'] = 'Deaktiviertes Modell';
$string['enabledtimesplittings'] = 'Zeitaufteilungsmethode';
$string['erroralreadypredict'] = 'Die Datei {$a} wurde bereits zur Vorhersage genutzt.';
$string['errorcannotreaddataset'] = 'Die Datensatzdatei {$a} kann nicht gelesen werden.';
$string['errorcannotwritedataset'] = 'Die Datensatzdatei {$a} kann nicht geschrieben werden.';
$string['errorendbeforestart'] = 'Das geschätzte Enddatum ({$a}) liegt vor dem Startdatum des Kurses.';
$string['errorinvalidindicator'] = 'Ungültiger Indikator {$a}';
$string['errorinvalidtimesplitting'] = 'Ungültige Zeitaufteilung. Stellen Sie sicher, dass Sie die Klasse mit voll qualifizierten Klassennamen hinzufügen.';
$string['errornoindicators'] = 'Dieses Modell beinhaltet keine Indikatoren.';
$string['errornopredictresults'] = 'Der Vorhersage-Prozessor hat keine Ergebnisse ausgegeben. Überprüfen Sie die Inhalte des Ausgabeverzeichnisses für weitere Informationen.';
$string['errornoroles'] = 'Die Rollen von Teilnehmer/innen oder Trainer/innen wurden noch nicht definiert. Definieren Sie diese Rollen in den Analytics-Einstellungen.';
$string['errornotarget'] = 'Dieses Modell hat kein Ziel.';
$string['errornotimesplittings'] = 'Dieses Modell hat keine Zeitaufteilungsmethode.';
$string['errorpredictioncontextnotavailable'] = 'Der Vorhersagenkontext ist nicht mehr verfügbar.';
$string['errorpredictionformat'] = 'Falsches Format zur Vorhersagenberechnung';
$string['errorpredictionnotfound'] = 'Vorhersage nicht gefunden';
$string['errorpredictionsprocessor'] = 'Fehler bei Vorhersage-Prozessor: {$a}';
$string['errorpredictwrongformat'] = 'Die Ausgabe des Vorhersage-Prozessors kann nicht entschlüsselt werden: "{$a}"';
$string['errorprocessornotready'] = 'Der ausgewählte Vorhersage-Prozessor ist nicht bereit: {$a}';
$string['errorsamplenotavailable'] = 'Das vorhergesagte Beispiel ist nicht mehr verfügbar.';
$string['errorunexistingmodel'] = 'Nicht vorhandenes Modell {$a}';
$string['errorunexistingtimesplitting'] = 'Die gewählte Zeitaufteilungsmethode ist nicht verfügbar.';
$string['errorunknownaction'] = 'Unbekannter Vorgang';
$string['eventinsightsviewed'] = 'Betrachtete Einschätzungen';
$string['eventpredictionactionstarted'] = 'Vorhersageprozess gestartet';
$string['fixedack'] = 'Anerkannt';
$string['insightinfomessage'] = 'Das System hat einige Einschätzungen für Sie erstellt: {$a}';
$string['insightinfomessagehtml'] = 'Das System hat einige Einschätzungen für Sie erstellt: <a href="{$a}">{$a}</a>';
$string['insightmessagesubject'] = 'Neue Einschätzung für "{$a->contextname}": {$a->insightname}';
$string['invalidanalysablefortimesplitting'] = 'Die Analyse kann mit der Zeitaufteilungsmethode {$a} nicht vorgenommen werden.';
$string['invalidtimesplitting'] = 'Das Modell mit der ID {$a} braucht eine Zeitaufteilungsmethode, bevor es für das Training verwendet werden kann.';
$string['modeloutputdir'] = 'Ausgabeverzeichnis';
$string['modeloutputdirinfo'] = 'Verzeichnis, in dem die Vorhersage-Prozessoren alle Evaluationsinformationen speichern. Dies ist hilfreich für die Fehlerbehebung und Auswertung.';
$string['modeltimelimit'] = 'Analysezeitlimit pro Modell';
$string['modeltimelimitinfo'] = 'Diese Option begrenzt die Zeit, die jedes Modell für die Analyse von Website-Inhalten benötigen darf.';
$string['nocourses'] = 'Keine Kurse zum Analysieren';
$string['nodata'] = 'Keine Daten zum Analysieren';
$string['noevaluationbasedassumptions'] = 'Auf Annahmen basierte Modelle können nicht evaluiert werden.';
$string['noinsights'] = 'Keine Ergebnisse vorhanden';
$string['noinsightsmodel'] = 'Dieses Modell erzeugt keine Einschätzungen.';
$string['nonewdata'] = 'Keine neuen Daten verfügbar';
$string['nonewranges'] = 'Keine neuen Vorhersagen';
$string['nonewtimeranges'] = 'Keine neue Zeitaufteilung. Es ist nichts vorherzusagen.';
$string['nopredictionsyet'] = 'Keine Vorhersagen verfügbar';
$string['noranges'] = 'Keine Vorhersagen';
$string['notrainingbasedassumptions'] = 'Auf Annahmen basierende Modelle benötigen kein Training.';
$string['notuseful'] = 'Nicht hilfreich';
$string['novaliddata'] = 'Keine gültigen Daten verfügbar';
$string['novalidsamples'] = 'Kein gültiges Beispiel vorhanden';
$string['onlycli'] = 'Analytics-Prozesse nur über die Befehlszeile ausführen';
$string['onlycliinfo'] = 'Analytics-Prozesse wie das Auswerten von Modellen, das Trainieren von Machine-Learning-Algorithmen oder das Treffen von Vorhersagen können sehr viel Zeit in Anspruch nehmen. Diese Prozesse werden als Cron-Tasks ausgeführt und können über die Befehlszeile aktiviert werden. Deaktivieren Sie die Einstellung, wenn Manager/innen der Website diese Prozesse auch manuell über das Webinterface ausführen können sollen.';
$string['predictionsprocessor'] = 'Vorhersage-Prozessor';
$string['predictionsprocessor_help'] = 'Ein Prognose-Prozessor ist ein Tool (Machine-Learning-Backend), das Datensätze verarbeitet, die aus Indikatoren und Zielen von Modellen berechnet werden.  Jedes Modell kann einen anderen Vorhersage-Prozessor nutzen. Der ausgewählte Vorhersage-Prozessor bereits bei der Installation eingerichtet.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Indikatorberechnungen';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Der Kontext';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Endzeitpunkt für Berechnungen';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'Indikator-Berechnungs-Class';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'Beispiel-ID';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'Originäre Tabelle für Beispiel';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Startzeitpunkt für Berechnungen';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Wann die Einschätzung erfolgt';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'Berechneter Wert';
$string['privacy:metadata:analytics:predictionactions'] = 'Einschätzungsaktivitäten';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'Aktionsbezeichnung';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'Einschätzungs-ID';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Wann die Einschätzung ausgeführt wird';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'Nutzer, der Aktion ausführt';
$string['privacy:metadata:analytics:predictions'] = 'Einschätzungen';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Indikatorberechnungen';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Der Kontext';
$string['privacy:metadata:analytics:predictions:modelid'] = 'Modell-ID';
$string['privacy:metadata:analytics:predictions:prediction'] = 'Einschätzung';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Einschätzungswert';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Index der Zeiteinteilungsmethode';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'Beispiel-ID';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Wann die Einschätzung erfolgte';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Endzeitpunkt für Berechnung';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Startzeitpunkt für Berechnungen';
$string['processingsitecontents'] = 'Inhalte der Website werden verarbeitet.';
$string['successfullyanalysed'] = 'Erfolgreich analysiert';
$string['timesplittingmethod'] = 'Zeitaufteilungsmethode';
$string['timesplittingmethod_help'] = 'Eine Zeitaufteilungsmethode unterteilt die Kursdauer in Zeitabschnitte. Die Vorhersage-Engine läuft jeweils am Ende dieser Zeitabschnitte. Aktivieren Sie nur die Zeitaufteilungsmethoden, die Sie wirklich verwenden möchten. Der Bewertungsprozess wird für alle aktivierten Zeitaufteilungsmethoden wiederholt, d.h. je mehr Zeitaufteilungsmethoden vorhanden sind, desto langsamer wird der Bewertungsprozess.';
$string['viewprediction'] = 'Vorhersagedetails anzeigen';
