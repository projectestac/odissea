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
 * Strings for component 'analytics', language 'de', version '4.4'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analyse-Objekt {$a->analysableid} nicht genutzt: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analyse-Objekt {$a->analysableid} ist für dieses Ziel nicht gültig: {$a->result}';
$string['analysisinprogress'] = 'Wird noch von einer vorherigen Analyse bearbeitet';
$string['analytics'] = 'Analytics';
$string['analyticsdisabled'] = '"Analytics" ist deaktiviert. Sie können die Funktion unter "Website-Administration > Zusatzoptionen" aktivieren.';
$string['analyticslogstore'] = 'Verwendete Logdaten';
$string['analyticslogstore_help'] = 'Logdaten, die von der Analytics-API genutzt werden, um die Nutzeraktivitäten auszuwerten.';
$string['analyticssettings'] = 'Analytics-Einstellungen';
$string['analyticssiteinfo'] = 'Website-Informationen';
$string['calclifetime'] = 'Analytics-Berechnungen aufbewahren für';
$string['configlcalclifetime'] = 'Diese Option gibt an, wie lange Berechnungsdaten aufbewahrt werden sollen. Es werden keine Vorhersagen gelöscht, aber möglicherweise die Daten, mit denen die Vorhersagen erstellt wurden. Die Verwendung der Standardoption ist vorteilhaft, um die Festplattennutzung unter Kontrolle zu halten. Wenn Sie jedoch Berechnungstabellen für andere Zwecke verwenden, möchten Sie diesen Wert möglicherweise erhöhen.';
$string['defaultpredictionsprocessor'] = 'Standard-Prozessor für Vorhersagen';
$string['defaultpredictoroption'] = 'Standard-Prozessor {$a}';
$string['defaulttimesplittingmethods'] = 'Voreingestellte Analyseintervalle für die Modellbewertung';
$string['defaulttimesplittingmethods_help'] = 'Das Analyseintervall definiert, wann das System Vorhersagen berechnet und welchen Teil der Aktivitätsprotokolle für diese Vorhersagen berücksichtigt werden. Der Modellbewertungsprozess wird durch die Analyseintervalle iteriert, solange kein bestimmtes Analyseintervall festgelegt ist.';
$string['disabledmodel'] = 'Deaktiviertes Modell';
$string['erroralreadypredict'] = 'Die Datei {$a} wurde bereits zur Vorhersage genutzt.';
$string['errorcannotreaddataset'] = 'Die Datensatzdatei {$a} kann nicht gelesen werden.';
$string['errorcannotusetimesplitting'] = 'Das bereitgestellte Analyseintervall kann mit diesem Modell nicht verwendet werden.';
$string['errorcannotwritedataset'] = 'Die Datensatzdatei {$a} kann nicht geschrieben werden.';
$string['errorexportmodelresult'] = 'Das Machine-Learning-Modell kann nicht exportiert werden.';
$string['errorimport'] = 'Fehler beim Importieren der bereitgestellten JSON-Datei.';
$string['errorimportmissingclasses'] = 'Die folgenden Analytics-Modelle sind auf dieser Website nicht verfügbar: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'Das angegebene Modell erfordert die Installation der folgenden Plugins: {$a}. Beachten Sie, dass die Versionen nicht unbedingt mit den auf Ihrer Website installierten Versionen übereinstimmen müssen. Die Installation der gleichen oder einer neueren Version des Plugins sollte in den meisten Fällen in Ordnung sein.';
$string['errorimportversionmismatches'] = 'Die Version der folgenden Komponenten unterscheidet sich von der auf dieser Seite installierten Version: {$a}. Sie können die Option \'Versionsfehler ignorieren\' verwenden, um diese Unterschiede zu ignorieren.';
$string['errorinvalidcontexts'] = 'Einige der ausgewählten Kontexte können in diesem Ziel nicht verwendet werden.';
$string['errorinvalidindicator'] = 'Ungültiger Indikator {$a}';
$string['errorinvalidtarget'] = 'Ungültiges Ziel {$a}';
$string['errorinvalidtimesplitting'] = 'Ungültiges Analyseintervall. Stellen Sie bitte sicher, dass Sie den vollständig qualifizierten Klassennamen hinzufügen.';
$string['errornocontextrestrictions'] = 'Das ausgewählte Ziel unterstützt keine Kontext-Einschränkungen.';
$string['errornoexportconfig'] = 'Es gab ein Problem beim Export der Modellkonfiguration.';
$string['errornoexportconfigrequirements'] = 'Es können nur nichtstatische Modelle mit einem Analyseintervall exportiert werden.';
$string['errornoindicators'] = 'Dieses Modell beinhaltet keine Indikatoren.';
$string['errornopredictresults'] = 'Der Vorhersage-Prozessor hat keine Ergebnisse ausgegeben. Überprüfen Sie die Inhalte des Ausgabeverzeichnisses für weitere Informationen.';
$string['errornoroles'] = 'Die Rollen von Teilnehmer/innen oder Trainer/innen wurden noch nicht definiert. Definieren Sie diese Rollen in den Analytics-Einstellungen.';
$string['errornotarget'] = 'Dieses Modell hat kein Ziel.';
$string['errornotimesplittings'] = 'Dieses Modell hat kein Analyseintervall.';
$string['errorpredictioncontextnotavailable'] = 'Der Vorhersagenkontext ist nicht mehr verfügbar.';
$string['errorpredictionformat'] = 'Falsches Format zur Vorhersagenberechnung';
$string['errorpredictionnotfound'] = 'Vorhersage nicht gefunden';
$string['errorpredictionsprocessor'] = 'Vorhersagen-Prozessorfehler: {$a}';
$string['errorpredictwrongformat'] = 'Die Ausgabe des Vorhersagen-Prozessors kann nicht entschlüsselt werden: "{$a}"';
$string['errorprocessornotready'] = 'Der ausgewählte Vorhersagen-Prozessor ist nicht bereit: {$a}';
$string['errorsamplenotavailable'] = 'Das prognostizierte Beispiel ist nicht mehr verfügbar.';
$string['errorunexistingmodel'] = 'Nicht vorhandenes Modell {$a}';
$string['errorunexistingtimesplitting'] = 'Das gewählte Analyseintervall ist nicht verfügbar.';
$string['errorunknownaction'] = 'Unbekannter Vorgang';
$string['eventinsightsviewed'] = 'Betrachtete Einschätzungen';
$string['eventpredictionactionstarted'] = 'Vorhersageprozess gestartet';
$string['fixedack'] = 'Annehmen';
$string['incorrectlyflagged'] = 'Falsch markiert';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'Das System hat eine Einschätzung für Sie erstellt.';
$string['insightinfomessageplain'] = 'Das System hat einige Einschätzungen für Sie erstellt: {$a}';
$string['insightmessagesubject'] = 'Neue Einschätzung für "{$a}"';
$string['invalidanalysablefortimesplitting'] = 'Die Analyse kann mit dem Analyseintervall {$a} nicht vorgenommen werden.';
$string['invalidtimesplitting'] = 'Das Modell mit der ID {$a} braucht ein Analyseintervall, bevor es für das Training verwendet werden kann.';
$string['levelinstitution'] = 'Bildungsniveau';
$string['levelinstitutionisced0'] = 'Früherziehung (Vorschule)';
$string['levelinstitutionisced1'] = 'Primarstufe';
$string['levelinstitutionisced2'] = 'Sekundarstufe I';
$string['levelinstitutionisced3'] = 'Sekundarstufe II';
$string['levelinstitutionisced4'] = 'Post-Sekundarausbildung (auch Schulungen in Unternehmen und Organisationen, aber ohne Hochschule)';
$string['levelinstitutionisced5'] = 'Kurze Hochschulausbildung (auch Schulungen in Unternehmen und Orhanisationen)';
$string['levelinstitutionisced6'] = 'Bachelor (oder vergleichbar)';
$string['levelinstitutionisced7'] = 'Master (oder vergleichbar)';
$string['levelinstitutionisced8'] = 'Doktor (oder vergleichbar)';
$string['modeinstruction'] = 'Modi des Unterrichtens';
$string['modeinstructionblendedhybrid'] = 'Blended oder Hybrid';
$string['modeinstructionfacetoface'] = 'Face to Face';
$string['modeinstructionfullyonline'] = 'Vollständig online';
$string['modeloutputdir'] = 'Ausgabeverzeichnis';
$string['modeloutputdirwithdefaultinfo'] = 'Verzeichnis, in dem Vorhersageprozessoren alle Auswertungsinformationen speichern. Dies ist nützlich zum Debugging und zur Entwicklung. Wenn leer, wird standardmäßig {$a} verwendet.';
$string['modeltimelimit'] = 'Analysezeitlimit pro Modell';
$string['modeltimelimitinfo'] = 'Diese Option begrenzt die Zeit, die jedes Modell für die Analyse von Website-Inhalten benötigen darf.';
$string['neutral'] = 'Neutral';
$string['neverdelete'] = 'Berechnungen nicht löschen';
$string['nocourses'] = 'Keine Kurse zum Analysieren';
$string['nodata'] = 'Keine Daten zum Analysieren';
$string['noevaluationbasedassumptions'] = 'Auf Annahmen basierte Modelle können nicht evaluiert werden.';
$string['noinsights'] = 'Keine Einschätzungen vorhanden';
$string['noinsightsmodel'] = 'Dieses Modell erzeugt keine Einschätzungen.';
$string['nonewdata'] = 'Keine neuen Daten verfügbar. Das Modell wird nach dem nächsten Analyseintervall ausgewertet.';
$string['nonewranges'] = 'Keine neuen Vorhersagen. Das Modell wird nach dem nächsten Analyseintervall ausgewertet.';
$string['nopredictionsyet'] = 'Noch keine Vorhersagen verfügbar';
$string['noranges'] = 'Noch keine Vorhersagen';
$string['notapplicable'] = 'Nicht anwendbar';
$string['notrainingbasedassumptions'] = 'Auf Annahmen basierende Modelle benötigen kein Training.';
$string['notuseful'] = 'Nicht hilfreich';
$string['novaliddata'] = 'Keine gültigen Daten verfügbar';
$string['novalidsamples'] = 'Kein gültiges Beispiel vorhanden';
$string['onlycli'] = 'Analytics-Prozesse nur über die Befehlszeile ausführen';
$string['onlycliinfo'] = 'Analytics-Prozesse können einige Zeit in Anspruch nehmen. Sie laufen als Cron-Tasks oder können über die Befehlszeile erzwungen werden. Wenn deaktiviert, können Analyseprozesse manuell über die Weboberfläche ausgeführt werden.';
$string['percentonline'] = 'Prozent online';
$string['percentonline_help'] = 'Wenn Ihre Organisation gemischte oder hybride Kurse anbietet: wie viel Zeit wird online in Moodle durchgeführt? Geben Sie eine Zahl zwischen 0 und 100 ein.';
$string['predictionsprocessor'] = 'Vorhersagen-Prozessor';
$string['predictionsprocessor_help'] = 'Ein Vorhersagen-Prozessor ist ein Tool (Machine-Learning-Backend), das Datensätze verarbeitet, die aus Indikatoren und Zielen von Modellen berechnet werden. Jedes Modell kann einen anderen Vorhersagen-Prozessor nutzen. Der ausgewählte Vorhersagen-Prozessor wird bereits bei der Installation eingerichtet.';
$string['privacy:metadata:analytics:analyticsmodels'] = 'Analytics Modelle';
$string['privacy:metadata:analytics:analyticsmodels:usermodified'] = 'Person, die das Modell geändert hat';
$string['privacy:metadata:analytics:analyticsmodelslog'] = 'Logdaten, die für Analytics Modelle verwendet wurden';
$string['privacy:metadata:analytics:analyticsmodelslog:usermodified'] = 'Person, die die Logdaten geändert hat';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Berechnung der Indikatoren';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Der Kontext';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Endzeitpunkt für Berechnungen';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'Die Berechnung der Indikatoren Klasse';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'Beispiel-ID';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'Die Herkunftstabelle für das Beispiel';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Startzeitpunkt für Berechnungen';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Wann die Vorhersage erfolgt';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'Berechneter Wert';
$string['privacy:metadata:analytics:predictionactions'] = 'Vorhersageaktivitäten';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'Der Name der Aktion';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'Die Vorhersage-ID';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Wann die Vorhersage ausgeführt wird';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'Der Nutzer, der die Aktion ausführt';
$string['privacy:metadata:analytics:predictions'] = 'Vorhersagen';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Berechnung der Indikatoren';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Der Kontext';
$string['privacy:metadata:analytics:predictions:modelid'] = 'Modell-ID';
$string['privacy:metadata:analytics:predictions:prediction'] = 'Die Vorhersage';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Das Vorhersageergebnis';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Der Index des Analyseintervalls';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'Beispiel-ID';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Wann die Vorhersage erstellt wurde';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Endzeitpunkt für Berechnungen';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Startzeitpunkt für Berechnungen';
$string['processingsitecontents'] = 'Inhalte der Website werden verarbeitet.';
$string['successfullyanalysed'] = 'Erfolgreich analysiert';
$string['timesplittingmethod'] = 'Analyseintervall';
$string['timesplittingmethod_help'] = 'Das Analyseintervall definiert, wann das System Vorhersagen berechnen soll und welche Teile der Aktivitätsprotokolle dabei berücksichtigt werden. Die Kursdauer kann in Teile unterteilt werden, wobei am Ende eines jeden Teils eine Vorhersage generiert wird.';
$string['timesplittingmethod_link'] = 'Time_splitting_methods';
$string['typeinstitution'] = 'Institutionstyp';
$string['typeinstitutionacademic'] = 'Akademisch';
$string['typeinstitutionngo'] = 'Nichtregierungsorganisation (NGO)';
$string['typeinstitutiontraining'] = 'Firmenschulung';
$string['useful'] = 'Nützlich';
$string['viewdetails'] = 'Details anzeigen';
$string['viewinsight'] = 'Einschätzung anzeigen';
$string['viewinsightdetails'] = 'Einschätzungsdetails anzeigen';
$string['viewprediction'] = 'Details zur Vorhersage anzeigen';
$string['washelpful'] = 'War das hilfreich?';
