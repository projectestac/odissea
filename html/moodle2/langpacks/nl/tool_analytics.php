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
 * Strings for component 'tool_analytics', language 'nl', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Nauwkeurigheid';
$string['allpredictions'] = 'Alle voorspellingen';
$string['analysingsitedata'] = 'Site aan het analyseren';
$string['analyticmodels'] = 'Modellen voor analytics';
$string['bettercli'] = 'Het evalueren van modellen en het genereren van voorspellingen kan veel rekenkracht vragen. Aangeraden wordt om deze acties vanaf de command line uit te voeren.';
$string['cantguessenddate'] = 'Kan einddatum niet raden';
$string['cantguessstartdate'] = 'Kan begindatum niet raden';
$string['clearmodelpredictions'] = 'Weet je zeker dat je alle "{$a}" voorspellingen wilt wissen?';
$string['clearpredictions'] = 'Wis voorspellingen';
$string['clienablemodel'] = 'Je kunt dit model inschakelen door een tijdssplitsingsmethode te kiezen op ID. Merk op dat je die ook later kan inschakelen via de web-interface (\'geen\' om te verlaten).';
$string['clievaluationandpredictions'] = 'Een geplande taak gaat door de ingeschakelde modellen en maakt voorspellingen. Model-evaluatie via de web-interface is uitgeschakeld. Je kunt toestaan dat deze processen manueel gestart worden via de web-interface door de the <a href="{$a}">\'onlycli\'</a> analyse-instelling uit te schakelen.';
$string['clievaluationandpredictionsnoadmin'] = 'Een geplande taak gaat door de ingeschakelde modellen en maakt voorspellingen. Model-evaluatie via de web-interface is uitgeschakeld. Dit kan ingeschakeld worden door de site-beheerder.';
$string['disabled'] = 'Uitgeschakeld';
$string['editmodel'] = 'Bewerk model "{$a}"';
$string['edittrainedwarning'] = 'Dit model is al getraind. Merk op dat het wijzigen van de indicatoren of de tijdssplitsingsmethode al zijn vorige voorspellingen zal verwijderen en er voor zal zorgen dat het nieuwe voorspellingen gaat genereren.';
$string['enabled'] = 'Ingeschakeld';
$string['errorcantenablenotimesplitting'] = 'Je moet een tijdssplitsingsmethode selecteren voor je dit model inschakelt.';
$string['errornoenabledandtrainedmodels'] = 'Er zijn geen ingeschakelde en getrainde modellen om mee te voorspellen.';
$string['errornoenabledmodels'] = 'Er zijn geen ingeschakelde modellen om te trainen.';
$string['errornoexport'] = 'Alleen getrainde modellen kunnen worden geëxporteerd';
$string['errornostaticedit'] = 'Modellen gebaseerd op aannames kunnen niet worden bewerkt.';
$string['errornostaticevaluated'] = 'Modellen, gebaseerd op voorspellingen kunnen niet geëvalueerd worden. Ze zijn altijd 100% juist afhankelijk van hoe ze werden gedefinieerd.';
$string['errornostaticlog'] = 'Modellen, gebaseerd op veronderstellingen kunnen niet geëvalueerd worden omdat er geen performantielog is.';
$string['erroronlycli'] = 'Uitvoeren alleen toegestaan via opdrachtprompt';
$string['errortrainingdataexport'] = 'De trainingsgegevens voor het model konden niet geëxporteerd worden';
$string['evaluate'] = 'Evalueren';
$string['evaluatemodel'] = 'Model evalueren';
$string['evaluationinbatches'] = 'De site-inhoud wordt berekend en bewaard in stukjes. Het evaluatieproces kan op elk moment gestopt worden. De volgende keer dat het gestart wordt, gaat het verder van het punt waar het gestopt was.';
$string['export'] = 'Exporteer';
$string['exporttrainingdata'] = 'Exporteer trainingsgegevens';
$string['extrainfo'] = 'Info';
$string['generalerror'] = 'Evaluatiefout. Statuscode {$a}';
$string['getpredictions'] = 'Voorspellingen ophalen';
$string['getpredictionsresults'] = 'Resultaten die gebruik maken van {$a->name} cursusduur opsplitsen';
$string['getpredictionsresultscli'] = 'Resultaten die gebruik maken van {$a->name} (id: {$a->id}) cursusduur opsplitsen';
$string['goodmodel'] = 'Dit is een goed model om te gebruiken voor het bekomen van voorspellingen. Schakel het in om te beginnen met het bekomen van voorspellingen.';
$string['indicators'] = 'Indicatoren';
$string['info'] = 'Info';
$string['insights'] = 'Inzichten';
$string['invalidanalysables'] = 'Ongeldige site-elementen';
$string['invalidanalysablesinfo'] = 'Deze pagina geeft een lijst met de analyseerbare elementen van deze site die niet kunnen gebruikt worden voor dit voorspellingsmodel. De elementen in de lijst kunnen noch voor het trainen van het voorspellingsmodel, noch voor het maken van voorspellingen met het model gebruikt worden.';
$string['invalidanalysablestable'] = 'Ongeldige site analyseerbare elemententabel';
$string['invalidprediction'] = 'Ongeldig om voorspellingen op te halen';
$string['invalidtraining'] = 'Ongeldig om het model te trainen';
$string['loginfo'] = 'Extra info loggen';
$string['modelid'] = 'Model ID';
$string['modelinvalidanalysables'] = 'Ongeldige analyseerbare elementen voor model "{$a}"';
$string['modelresults'] = '{$a} resultaten';
$string['modeltimesplitting'] = 'Tijd splitsen';
$string['nextpage'] = 'Volgende pagina';
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
$string['sameenddate'] = 'Huidige einddatum is goed';
$string['samestartdate'] = 'Huidige startdatum is goed';
$string['target'] = 'Doel';
$string['timesplittingnotdefined'] = 'Tijdsplitsing is niet bepaald.';
$string['timesplittingnotdefined_help'] = 'Je moet een tijdssplitsingsmethode selecteren voor je dit model inschakelt.';
$string['trainandpredictmodel'] = 'Model aan het trainen en voorspellingen aan het berekenen';
$string['trainingprocessfinished'] = 'Trainingsproces is beëindigd';
$string['trainingresults'] = 'Trainingsresultaten';
$string['trainmodels'] = 'Modellen trainen';
$string['viewlog'] = 'Log';
$string['weeksenddateautomaticallyset'] = 'De einddatum is automatisch ingesteld op basis van de startdatum en het aantal secties.';
$string['weeksenddatedefault'] = 'De einddatum is automatisch berekend vanaf de startdatum van de cursus.';
