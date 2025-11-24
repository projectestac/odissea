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
 * Strings for component 'tool_analytics', language 'nl', version '4.5'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Nauwkeurigheid';
$string['actionexecutedgroupedusefulness'] = 'Gegroepeerde acties';
$string['actions'] = 'acties';
$string['actionsexecutedbyusers'] = 'Acties uitgevoerd door gebruikers';
$string['actionsexecutedbyusersfor'] = 'Acties uitgevoerd door gebruikers voor "{$a}" -model';
$string['allpredictions'] = 'Alle voorspellingen';
$string['alltimesplittingmethods'] = 'Alle analyse-intervallen';
$string['analysingsitedata'] = 'Site aan het analyseren';
$string['analysis'] = 'Analyse';
$string['analyticmodels'] = 'Modellen voor analytics';
$string['bettercli'] = 'Het evalueren van modellen en het genereren van voorspellingen kan veel rekenkracht vragen. Aangeraden wordt om deze acties vanaf de command line uit te voeren.';
$string['cantguessenddate'] = 'Kan einddatum niet raden';
$string['cantguessstartdate'] = 'Kan begindatum niet raden';
$string['classdoesnotexist'] = 'Class {$a} bestaat niet';
$string['clearmodelpredictions'] = 'Weet je zeker dat je alle "{$a}" voorspellingen wilt wissen?';
$string['clearpredictions'] = 'Wis voorspellingen';
$string['clienablemodel'] = 'Je kunt dit model inschakelen door een analyse-interval te kiezen op ID. Merk op dat je die ook later kan inschakelen via de web-interface (\'geen\' om te verlaten).';
$string['clievaluationandpredictions'] = 'Een geplande taak gaat door de ingeschakelde modellen en maakt voorspellingen. Model-evaluatie via de web-interface is uitgeschakeld. Je kunt toestaan dat deze processen manueel gestart worden via de web-interface door de <a href="{$a}">\'onlycli\'</a> analyse-instelling uit te schakelen.';
$string['clievaluationandpredictionsnoadmin'] = 'Een geplande taak gaat door de ingeschakelde modellen en maakt voorspellingen. Model-evaluatie via de web-interface is uitgeschakeld. Dit kan ingeschakeld worden door de site-beheerder.';
$string['component'] = 'Component';
$string['componentcore'] = 'Core';
$string['componentselect'] = 'Selecteer alle modellen geleverd door component \'{$a}\'';
$string['componentselectnone'] = 'Deselecteer alles';
$string['contexts'] = 'Contexten';
$string['contexts_help'] = 'Het model zal beperkt zijn tot deze set contexten. Er worden geen contextbeperkingen toegepast als er geen contexten geselecteerd zijn.';
$string['createmodel'] = 'Maak een model';
$string['currenttimesplitting'] = 'Huidig analyse-interval';
$string['delete'] = 'Verwijder';
$string['deletemodelconfirmation'] = 'Weet je zeker dat je "{$a}" wilt verwijderen? Deze wijzigingen kunnen niet worden teruggedraaid.';
$string['disabled'] = 'Uitgeschakeld';
$string['editmodel'] = 'Bewerk model "{$a}"';
$string['edittrainedwarning'] = 'Dit model is al getraind. Merk op dat het wijzigen van de indicatoren of het analyse-interval al zijn vorige voorspellingen zal verwijderen en er voor zal zorgen dat het nieuwe voorspellingen gaat genereren.';
$string['enabled'] = 'Ingeschakeld';
$string['errorcantenablenotimesplitting'] = 'Je moet een analyse-interval selecteren voor je dit model inschakelt.';
$string['errornoenabledandtrainedmodels'] = 'Er zijn geen ingeschakelde en getrainde modellen om mee te voorspellen.';
$string['errornoenabledmodels'] = 'Er zijn geen ingeschakelde modellen om te trainen.';
$string['errornoexport'] = 'Alleen getrainde modellen kunnen worden geëxporteerd';
$string['errornostaticevaluated'] = 'Modellen, gebaseerd op voorspellingen kunnen niet geëvalueerd worden. Ze zijn altijd 100% juist afhankelijk van hoe ze werden gedefinieerd.';
$string['errornostaticlog'] = 'Modellen, gebaseerd op veronderstellingen kunnen niet geëvalueerd worden omdat er geen performantielog is.';
$string['erroronlycli'] = 'Uitvoeren alleen toegestaan via opdrachtprompt';
$string['errortrainingdataexport'] = 'De trainingsgegevens voor het model konden niet geëxporteerd worden';
$string['evaluate'] = 'Evalueren';
$string['evaluatemodel'] = 'Model evalueren';
$string['evaluationinbatches'] = 'De site-inhoud wordt berekend en bewaard in stukjes. Het evaluatieproces kan op elk moment gestopt worden. De volgende keer dat het gestart wordt, gaat het verder van het punt waar het gestopt was.';
$string['evaluationmode'] = 'Evaluatiemodus';
$string['evaluationmode_help'] = 'Er zijn twee evaluatiemodi:

* Getraind model - Locatiegegevens worden gebruikt als testgegevens om de nauwkeurigheid van het getrainde model te evalueren.
* Configuratie - Sitegegevens worden opgesplitst in training- en testgegevens om zowel de nauwkeurigheid van de modelconfiguratie te trainen en te testen.

Getraind model is alleen beschikbaar als een getraind model is geïmporteerd in de site en nog niet is getraind met behulp van sitegegevens.';
$string['evaluationmodecolconfiguration'] = 'Configuratie';
$string['evaluationmodecoltrainedmodel'] = 'Getraind model';
$string['evaluationmodeconfiguration'] = 'Evalueer de modelconfiguratie';
$string['evaluationmodeinfo'] = 'Dit model is geïmporteerd in de site. U kunt de prestaties van het model evalueren, of u kunt de prestaties van de modelconfiguratie evalueren met behulp van sitegegevens.';
$string['evaluationmodetrainedmodel'] = 'Evalueer het getrainde model';
$string['executescheduledanalysis'] = 'Voer geplande analyse uit';
$string['export'] = 'Exporteer';
$string['exportincludeweights'] = 'Neem de wegingen van het getrainde model op';
$string['exportmodel'] = 'Exporteer configuratie';
$string['exporttrainingdata'] = 'Exporteer trainingsgegevens';
$string['extrainfo'] = 'Info';
$string['generalerror'] = 'Evaluatiefout. Statuscode {$a}';
$string['goodmodel'] = 'Dit is een goed model om te gebruiken voor het bekomen van voorspellingen. Schakel het in om te beginnen met het bekomen van voorspellingen.';
$string['ignoreversionmismatches'] = 'Negeer niet overeenkomende versies';
$string['ignoreversionmismatchescheckbox'] = 'Negeer de verschillen tussen deze siteversie en de originele siteversie.';
$string['importedsuccessfully'] = 'Het model is succesvol geïmporteerd.';
$string['importmodel'] = 'Importeer model';
$string['indicators'] = 'Indicatoren';
$string['indicators_help'] = 'De indicatoren zijn wat je denkt dat zal leiden tot een nauwkeurige voorspelling van het doelwit.';
$string['indicators_link'] = 'Indicators';
$string['indicatorsnum'] = 'Aantal indicatoren: {$a}';
$string['info'] = 'Info';
$string['insights'] = 'Inzichten';
$string['insightsreport'] = 'Inzichtenrapport';
$string['invalidanalysables'] = 'Ongeldige site-elementen';
$string['invalidanalysablesinfo'] = 'Deze pagina geeft een lijst met de analyseerbare elementen van deze site die niet kunnen gebruikt worden voor dit voorspellingsmodel. De elementen in de lijst kunnen noch voor het trainen van het voorspellingsmodel, noch voor het maken van voorspellingen met het model gebruikt worden.';
$string['invalidanalysablestable'] = 'Ongeldige site analyseerbare elemententabel';
$string['invalidcurrenttimesplitting'] = 'Het huidige analyse-interval is ongeldig voor het doel van dit model. Selecteer een ander interval.';
$string['invalidindicatorsremoved'] = 'Een nieuw model is toegevoegd. Indicatoren die niet werken met het geselecteerde doelwit zijn automatisch verwijderd.';
$string['invalidprediction'] = 'Ongeldig om voorspellingen op te halen';
$string['invalidtimesplitting'] = 'Het geselecteerde analyse-interval is ongeldig voor het geselecteerde doel.';
$string['invalidtimesplittinginmodels'] = 'Het analyse-interval dat door sommige modellen wordt gebruikt, is ongeldig. Selecteer een ander interval voor de volgende modellen: {$a}';
$string['invalidtraining'] = 'Ongeldig om het model te trainen';
$string['loginfo'] = 'Extra info loggen';
$string['missingmoodleversion'] = 'Het geïmporteerde bestand definieert geen versienummer';
$string['modelid'] = 'Model ID';
$string['modelinvalidanalysables'] = 'Ongeldige analyseerbare elementen voor model "{$a}"';
$string['modelname'] = 'Naam model';
$string['modelresults'] = '{$a} resultaten';
$string['modeltimesplitting'] = 'Analyse-interval';
$string['newmodel'] = 'Nieuw model';
$string['nextpage'] = 'Volgende pagina';
$string['noactionsfound'] = 'Gebruikers hebben geen acties uitgevoerd op de gegenereerde inzichten.';
$string['nodatatoevaluate'] = 'Er is geen data om het model te evalueren';
$string['nodatatopredict'] = 'Er zijn geen nieuwe elementen om voorspellingen voor op te halen';
$string['nodatatotrain'] = 'Er zijn geen nieuwe gegevens die gebruikt kunnen worden voor training';
$string['noinvalidanalysables'] = 'Deze site bevat geen ongeldig analyseerbaar element.';
$string['notdefined'] = 'Nog niet gedefinieerd';
$string['pluginname'] = 'Analytische modellen';
$string['predictionprocessfinished'] = 'Voorspellingsproces beëindigd';
$string['predictionresults'] = 'Resultaten van voorspelling';
$string['predictmodels'] = 'Voorspel modellen';
$string['predictorresultsin'] = 'Voorspeller heeft informatie gelogd in de {$a} map';
$string['previouspage'] = 'Vorige pagina';
$string['privacy:metadata'] = 'De analitische modellen-plugin bewaart geen persoonlijke gegevens.';
$string['restoredefault'] = 'Standaardmodellen terugzetten';
$string['restoredefaultempty'] = 'Selecteer terug te zetten modellen';
$string['restoredefaultinfo'] = 'Deze standaardmodellen ontbreken of zijn gewijzigd sinds ze zijn geïnstalleerd. je kunt geselecteerde standaardmodellen herstellen.';
$string['restoredefaultnone'] = 'Alle standaardmodellen geleverd door core en geïnstalleerde plug-ins zijn gemaakt. Er zijn geen nieuwe modellen gevonden; er is niets te herstellen.';
$string['restoredefaultsome'] = 'Succesvol  {$a->count} nieuwe model (len) opnieuw gemaakt.';
$string['restoredefaultsubmit'] = 'Geselecteerde terugzetten';
$string['sameenddate'] = 'Huidige einddatum is goed';
$string['samestartdate'] = 'Huidige startdatum is goed';
$string['scheduledanalysisresults'] = 'Resultaten die gebruik maken van {$a->name} cursusduur opsplitsen';
$string['scheduledanalysisresultscli'] = 'Resultaten die gebruik maken van {$a->name} (id: {$a->id}) cursusduur opsplitsen';
$string['selecttimesplittingforevaluation'] = 'Selecteer het analyse-interval dat je wil gebruiken om de modelconfiguratie te evalueren.';
$string['target'] = 'Doel';
$string['target_help'] = 'Het doel is wat het model zal voorspellen.';
$string['target_link'] = 'Targets';
$string['timesplittingnotdefined'] = 'Geen analyse-interval bepaald.';
$string['timesplittingnotdefined_help'] = 'Je moet een analyse-interval selecteren voor je dit model inschakelt.';
$string['trainandpredictmodel'] = 'Model aan het trainen en voorspellingen aan het berekenen';
$string['trainingprocessfinished'] = 'Trainingsproces is beëindigd';
$string['trainingresults'] = 'Trainingsresultaten';
$string['trainmodels'] = 'Modellen trainen';
$string['versionnotsame'] = 'Het geïmporteerde bestand was van een andere versie ({$a->importedversion}) dan het huidige  ({$a->version})';
$string['viewlog'] = 'Evaluatie-log';
$string['weeksenddateautomaticallyset'] = 'De einddatum is automatisch ingesteld op basis van de startdatum en het aantal secties.';
$string['weeksenddatedefault'] = 'De einddatum is automatisch berekend vanaf de startdatum van de cursus.';
