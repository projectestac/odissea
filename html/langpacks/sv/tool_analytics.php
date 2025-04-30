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
 * Strings for component 'tool_analytics', language 'sv', version '4.4'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Noggrannhet';
$string['actionexecutedgroupedusefulness'] = 'Grupperade åtgärder';
$string['actions'] = 'Åtgärder';
$string['actionsexecutedbyusers'] = 'Åtgärder utförda av användare';
$string['actionsexecutedbyusersfor'] = 'Åtgärder utförda av användare för "{$a}"-modellen';
$string['allpredictions'] = 'Alla förutsägelser';
$string['alltimesplittingmethods'] = 'Alla analysintervall';
$string['analysingsitedata'] = 'Analyserar webbplatsen';
$string['analysis'] = 'Analys';
$string['analyticmodels'] = 'Analysmodeller';
$string['bettercli'] = 'Utvärdera modeller och generera förutsägelser kan innebära hög belasting. Det är rekommenderat att utföra dessa åtgärder från kommandoraden.';
$string['cantguessenddate'] = 'Kan inte gissa slutdatumet';
$string['cantguessstartdate'] = 'Kan inte gissa startdatumet';
$string['classdoesnotexist'] = 'Klassen {$a} finns inte';
$string['clearmodelpredictions'] = 'Är du säker på att du vill rensa alla "{$a}"-förutsägelser?';
$string['clearpredictions'] = 'Rensa förutsägelser';
$string['clienablemodel'] = 'Du kan aktivera modellen genom att välja ett analysintervall via dess ID. Observera att du också kan aktivera det senare med hjälp av webbgränssnittet (\'none\' för att avsluta).';
$string['clievaluationandpredictions'] = 'En schemalagd uppgift itererar genom aktiverade analyser och hämtar förutsägelser. Utvärdering av modeller via webbgränssnittet är inaktiverat. Du kan tillåta att dessa processer körs manuellt via webbgränssnittet genom att inaktivera <a href="{$a}">\'Analysfunktionens processer körs endast via kommandoraden\'</a> under <em>Hantera webbplats &#10132; Analysfunktioner &#10132; Analysinställningar</em>.';
$string['clievaluationandpredictionsnoadmin'] = 'En schemalagd aktivitet itererar genom aktiverade modeller och hämtar förutsägelser. Utvärdering av modeller via webbgränssnittet är inaktiverad. Detta kan aktiveras av en webbplatsadministratör.';
$string['component'] = 'Komponent';
$string['componentcore'] = 'Kärna';
$string['componentselect'] = 'Välj alla modeller som tillhandahålls av \'{$a}\'-komponenten';
$string['componentselectnone'] = 'Avmarkera alla';
$string['contexts'] = 'Sammanhang';
$string['contexts_help'] = 'Modellen kommer att begränsas till denna uppsättning av kontext. Inga kontextbegränsningar kommer att tillämpas om inga kontexter har valts.';
$string['createmodel'] = 'Skapa modell';
$string['currenttimesplitting'] = 'Aktuellt analysintervall';
$string['delete'] = 'Ta bort';
$string['deletemodelconfirmation'] = 'Vill du ta bort "{$a}"? Dessa ändringar kan inte återställas.';
$string['disabled'] = 'Inaktiverad';
$string['editmodel'] = 'Redigera "{$a}"-modellen';
$string['edittrainedwarning'] = 'Denna modell har redan tränats. Observera - att ändra dess indikatorer eller dess analysintervall kommer att ta bort dess tidigare förutsägelser och börja generera nya förutsägelser.';
$string['enabled'] = 'Aktiverad';
$string['errorcantenablenotimesplitting'] = 'Du behöver välja ett analysintervall innan du aktiverar modellen';
$string['errornoenabledandtrainedmodels'] = 'Det finns inga aktiverade och tränade modeller att förutsäga.';
$string['errornoenabledmodels'] = 'Det finns inga aktiverade modeller för att träna.';
$string['errornoexport'] = 'Endast tränade modeller kan exporteras';
$string['errornostaticevaluated'] = 'Modeller som baseras på antaganden kan inte utvärderas. De är alltid 100% korrekta enligt hur de definierades.';
$string['errornostaticlog'] = 'Modeller som baseras på antaganden kan inte utvärderas eftersom det inte finns någon prestandalogg.';
$string['erroronlycli'] = 'Körning endast tillåten via kommandorad';
$string['errortrainingdataexport'] = 'Det gick inte att exportera modellens träningsdata';
$string['evaluate'] = 'Utvärdera';
$string['evaluatemodel'] = 'Utvärdera modell';
$string['evaluationinbatches'] = 'Webbplatsinnehållet beräknas och lagras i batchar. Utvärderingsprocessen kan avbrytas
 när som helst. Nästa gång den körs fortsätter den från den punkt då den stoppades.';
$string['evaluationmode'] = 'Utvärderingsläge';
$string['evaluationmode_help'] = 'Det finns två utvärderingslägen:

* Tränad modell - Webbplatsdata används som testdata för att utvärdera den tränade modellens riktighet.
* Konfiguration - Webbplatsdata delas upp i tränings- och testdata, för att både träna och testa korrektheten i modellkonfigurationen.

Tränad modell är endast tillgänglig om en tränad modell har importerats till webbplatsen, och ännu inte har tränats på nytt med hjälp av webbplatsdata.';
$string['evaluationmodecolconfiguration'] = 'Konfiguration';
$string['evaluationmodecoltrainedmodel'] = 'Tränad modell';
$string['evaluationmodeconfiguration'] = 'Utvärderar modellkonfigurationen';
$string['evaluationmodeinfo'] = 'Den här modellen har importerats till webbplatsen. Du kan antingen utvärdera modellens prestanda eller utvärdera prestandan för modellkonfigurationen med hjälp av webbplatsdata.';
$string['evaluationmodetrainedmodel'] = 'Utvärdera den tränade modellen';
$string['executescheduledanalysis'] = 'Utför schemalagd analys';
$string['export'] = 'Exportera';
$string['exportincludeweights'] = 'Inkludera den tränade modellens vikter';
$string['exportmodel'] = 'Exportera konfiguration';
$string['exporttrainingdata'] = 'Exportera träningsdata';
$string['extrainfo'] = 'Information';
$string['generalerror'] = 'Fel i utvärdering. Statuskod {$a}';
$string['goodmodel'] = 'Detta är en bra modell att använda för att erhålla förutsägelser. Aktivera den för att börja erhålla förutsägelser.';
$string['ignoreversionmismatches'] = 'Ignorera versionsglapp';
$string['ignoreversionmismatchescheckbox'] = 'Ignorera skillnaderna mellan den här webbplatsversionen och den ursprungliga webbplatsversionen.';
$string['importedsuccessfully'] = 'Modellen har importerats framgångsrikt.';
$string['importmodel'] = 'Importera modell';
$string['indicators'] = 'Indikatorer';
$string['indicators_help'] = 'Indikatorerna representerar vad du tror kommer att leda till en korrekt förutsägelse av målet.';
$string['indicators_link'] = 'Indicators';
$string['indicatorsnum'] = 'Antal indikatorer: {$a}';
$string['info'] = 'Information';
$string['insights'] = 'Insikter';
$string['insightsreport'] = 'Insiktsrapport';
$string['invalidanalysables'] = 'Ogiltiga webbplatselement';
$string['invalidanalysablesinfo'] = 'Den här sidan listar analysbara element som inte kan användas av den här förutsägelsemodellen. De listade elementen kan varken användas för att träna förutsägelsemodellen eller erhålla förutsägelser för dem.';
$string['invalidanalysablestable'] = 'Tabellen över ogiltig alyserbara element för webbplatsen';
$string['invalidcurrenttimesplitting'] = 'Nuvarande analysintervall är ogiltigt för målet för denna modell. Vänligen välj ett annat intervall.';
$string['invalidindicatorsremoved'] = 'En ny modell har lagts till. De indikatorer som inte fungerar för det valda målet har tagits bort.';
$string['invalidprediction'] = 'Ogiltig för att hämta förutsägelser';
$string['invalidtimesplitting'] = 'Det valda analysintervallet är ogiltigt för det valda målet.';
$string['invalidtimesplittinginmodels'] = 'Analysintervallet som används för några av modellerna är ogiltigt. Vänligen välj ett annat intervall för följande modeller: {$a}';
$string['invalidtraining'] = 'Ogiltig för att tgräna modellen';
$string['loginfo'] = 'Logga extra info';
$string['missingmoodleversion'] = 'Importerad fil specificerar inte ett versionsnummer';
$string['modelid'] = 'Modell-ID';
$string['modelinvalidanalysables'] = 'Ogiltiga analysbara element för "{$a}"-modellen';
$string['modelname'] = 'Modellnamn';
$string['modelresults'] = '{$a}-resultat';
$string['modeltimesplitting'] = 'Analysintervall';
$string['newmodel'] = 'Ny modell';
$string['nextpage'] = 'Nästa sida';
$string['noactionsfound'] = 'Användare har inte utfört några åtgärder på de genererade insikterna.';
$string['nodatatoevaluate'] = 'Det finns inga data för att utvärdera modellen';
$string['nodatatopredict'] = 'Inga nya element att hämta förutsägelser för.';
$string['nodatatotrain'] = 'Det finns inga nya data som kan användas för träningen.';
$string['noinvalidanalysables'] = 'Den här webbplatsen innehåller inte något ogiltigt analysbart element.';
$string['notdefined'] = 'Ännu ej definierad';
$string['pluginname'] = 'Analysmodeller';
$string['predictionprocessfinished'] = 'Processen att generera förutsägelser avslutad';
$string['predictionresults'] = 'Förutsägelseresultat';
$string['predictmodels'] = 'Förutsäg modeller';
$string['predictorresultsin'] = 'Prediktorloggad information i katalogen {$a}';
$string['previouspage'] = 'Föregående sida';
$string['privacy:metadata'] = 'Pluginmodulen för Analysmodeller lagrar inte några personuppgifter.';
$string['restoredefault'] = 'Återställ standardmodeller';
$string['restoredefaultempty'] = 'Vänligen välj modeller som ska återställas.';
$string['restoredefaultinfo'] = 'Dessa standardmodeller saknas eller har ändrats sedan de installerades. Du kan återställa valda standardmodeller.';
$string['restoredefaultnone'] = 'Alla standardmodeller som tillhandahålls av systemet och installerade pluginmoduler har skapats. Inga nya modeller hittades; det finns inget att återställa.';
$string['restoredefaultsome'] = '{$a->count} nya modell(er) har framgångsrikt återskapats.';
$string['restoredefaultsubmit'] = 'Återställ valda';
$string['sameenddate'] = 'Aktuellt slutdatum är ok';
$string['samestartdate'] = 'Aktuellt startdatum är ok';
$string['scheduledanalysisresults'] = 'Resultat med hjälp av analysintervall {$a->name}';
$string['scheduledanalysisresultscli'] = 'Resultat med hjälp av analysintervall {$a->name} (id: {$a->id})';
$string['selecttimesplittingforevaluation'] = 'Välj det analysintervall du vill använda för att utvärdera modellkonfigurationen.';
$string['target'] = 'Mål';
$string['target_help'] = 'Målet är vad modellen kommer att förutsäga.';
$string['target_link'] = 'Targets';
$string['timesplittingnotdefined'] = 'Inget analysintervall har definierats.';
$string['timesplittingnotdefined_help'] = 'Du behöver välja ett analysintervall innan du aktiverar modellen.';
$string['trainandpredictmodel'] = 'Tränar modell och beräknar förutsägelser';
$string['trainingprocessfinished'] = 'Träningsprocessen avslutad';
$string['trainingresults'] = 'Träningsresultat';
$string['trainmodels'] = 'Träna modeller';
$string['versionnotsame'] = 'Importerad fil var från en annan version ({$a->importedversion}) än den aktuella ({$a->version})';
$string['viewlog'] = 'Utvärderar loggen';
$string['weeksenddateautomaticallyset'] = 'Slutdatum automatiskt inställt baserat på startdatum och antalet avsnitt';
$string['weeksenddatedefault'] = 'Slutdatum automatiskt beräknat utifrån kursens startdatum.';
