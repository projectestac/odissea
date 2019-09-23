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
 * Strings for component 'analytics', language 'nl', branch 'MOODLE_36_STABLE'
 *
 * @package   analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analyseerbaar item {$a->analysableid} niet gebruikt: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analyseerbaar item {$a->analysableid} is niet geldig voor dit doel: {$a->result}';
$string['analysisinprogress'] = 'Wordt nog steeds door een eerdere uitvoering geanalyseerd';
$string['analytics'] = 'Analytics';
$string['analyticslogstore'] = 'Log store gebruikt voor analytics';
$string['analyticslogstore_help'] = 'De log store die gebruikt zal worden door de analytics API om de activiteit van gebruikers te lezen';
$string['analyticssettings'] = 'Instellingen analytics';
$string['coursetoolong'] = 'De cursus is te lang';
$string['defaultpredictionsprocessor'] = 'Standaard voorspellingsprocessor';
$string['defaultpredictoroption'] = 'Standaard processor ({$a})';
$string['disabledmodel'] = 'Uitgeschakeld model';
$string['enabledtimesplittings'] = 'Methoden om tijd te verdelen';
$string['erroralreadypredict'] = 'Bestand {$a} is al gebruikt om te voorspellen.';
$string['errorcannotreaddataset'] = 'Het dataset bestand {$a} kan niet worden gelezen';
$string['errorcannotwritedataset'] = 'Het dataset bestand {$a} kan niet worden geschreven';
$string['errorendbeforestart'] = 'De einddatum ({$a}) is voor de begindatum van de cursus.';
$string['errorinvalidindicator'] = 'Ongeldige {$a} indicator';
$string['errorinvalidtimesplitting'] = 'Ongeldige tijdsopsplitsing: geef de fully qualified class name.';
$string['errornoindicators'] = 'Dit model heeft geen enkele indicator.';
$string['errornopredictresults'] = 'Geen resultaten gekregen van de voorspellingsprocessor. Controleer de inhoud van de map voor de output voor meer informatie.';
$string['errornoroles'] = 'Rollen voor leerling of leraar zijn niet gedefinieerd. Definieer ze op de instellingenpagina voor analytics.';
$string['errornotarget'] = 'Dit model heeft geen enkel doel.';
$string['errornotimesplittings'] = 'Dit model heeft geen tijdsopsplitsingsmethode.';
$string['errorpredictioncontextnotavailable'] = 'Deze voorspellingscontext is niet meer beschikbaar.';
$string['errorpredictionformat'] = 'Onjuist format voor voorspellingsberekeningen';
$string['errorpredictionnotfound'] = 'Voorspellingen niet gevonden';
$string['errorpredictionsprocessor'] = 'Fout voorspellingsverwerker: {$a}';
$string['errorpredictwrongformat'] = 'Wat de voorspellingsprocessor teruggaf kan niet gedecodeerd worden: "{$a}"';
$string['errorprocessornotready'] = 'De geselecteerde voorspellingsprocessor is nog niet klaar: {$a}';
$string['errorsamplenotavailable'] = 'Het voorspelde deel is niet meer beschikbaar.';
$string['errorunexistingmodel'] = 'Niet-bestaand model {$a}';
$string['errorunexistingtimesplitting'] = 'De geselecteerde tijdssplitsingsmethode is niet beschikbaar.';
$string['errorunknownaction'] = 'Onbekende actie';
$string['eventinsightsviewed'] = 'Inzichten bekeken';
$string['eventpredictionactionstarted'] = 'Voorspellingsproces gestart';
$string['fixedack'] = 'Bevestigd';
$string['insightinfomessage'] = 'Het systeem heeft enkele inzichten voor jou gegenereerd: {$a}';
$string['insightinfomessagehtml'] = 'Het systeem heeft enkele inzichten voor jou gegenereerd: <a href="{$a}">{$a}</a>.';
$string['insightmessagesubject'] = 'Nieuw inzicht voor "{$a->contextname}": {$a->insightname}';
$string['invalidanalysablefortimesplitting'] = 'Dit kan niet geanalyseerd worden met  {$a} tijdsopsplitsingsmethode';
$string['invalidtimesplitting'] = 'Model met ID {$a} heeft een tijdopsplitsingsmethode nodig voor het kan gebruikt worden om te oefenen.';
$string['modeloutputdir'] = 'Output-map voor modellen';
$string['modeloutputdirinfo'] = 'De map waar voorspellingsprocessoren al hun evaluatie-informatie opslaan. Nuttig voor foutopsporing en onderzoek.';
$string['modeltimelimit'] = 'Tijdslimiet analyse per model';
$string['modeltimelimitinfo'] = 'Deze instelling beperkt de tijd voor ieder model om de inhoud van de site te analyseren.';
$string['nocourses'] = 'Geen cursussen om te analyseren';
$string['nodata'] = 'Geen data om te analyseren';
$string['noevaluationbasedassumptions'] = 'Modellen gebaseerd op aannames kunnen niet worden geëvalueerd.';
$string['noinsights'] = 'Geen inzichten gerapporteerd';
$string['noinsightsmodel'] = 'Dit model genereert geen inzichten';
$string['nonewdata'] = 'Geen nieuwe gegevens beschikbaar';
$string['nonewranges'] = 'Nog geen nieuwe voorspellingen';
$string['nonewtimeranges'] = 'Geen nieuwe tijdsspanne; er is niets te voorspellen.';
$string['nopredictionsyet'] = 'Nog geen voorspellingen beschikbaar';
$string['noranges'] = 'Nog geen voorspellingen';
$string['notrainingbasedassumptions'] = 'Modellen gebaseerd op aannames hoeven niet getraind te worden.';
$string['notuseful'] = 'Niet bruikbaar';
$string['novaliddata'] = 'Geen geldige data beschikbaar';
$string['novalidsamples'] = 'Er zijn geen geldige voorbeelden beschikbaar';
$string['onlycli'] = 'Analyseproces uitvoeren enkel via command line';
$string['onlycliinfo'] = 'Analyseprocessen, zoals evaluatiemodellen, het trainen van de machine lerende algoritmes of voorspellingen maken, kunnen wel wat tijd in beslag nemen. Ze lopen als cron-taken en kunnen geforceerd gestart worden via command line. Schakel deze instelling uit als je wil dat site managers deze procedures manueel via de webinterface kunnen starten.';
$string['predictionsprocessor'] = 'Voorspellingsprocessor';
$string['predictionsprocessor_help'] = 'Een voorspellingsprocessor is het machine lerende achtergrondproces dat de gegevenssets verwerkt door het berekenen van modelindicatoren en doelen. Elk model kan een andere processor gebruiken. Degene die je hier opgeeft zal de standaard zijn.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Indicatorberekeningen';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'De context';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Berekening eindtijd';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'De indicator berekeningsklasse';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'Het voorbeeld-ID';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'De oorsprongtabel van het voorbeeld';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Berekening starttijd';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Wanneer de voorspelling gemaakt is';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'De berekende waarde';
$string['privacy:metadata:analytics:predictionactions'] = 'Voorspellingsacties';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'De actienaam';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'De voorspellings-ID';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Wanneer de voorspelling was gedaan';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'De gebruiker die de actie uitvoerde';
$string['privacy:metadata:analytics:predictions'] = 'Voorspellingen';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Indicator berekeningen';
$string['privacy:metadata:analytics:predictions:contextid'] = 'De context';
$string['privacy:metadata:analytics:predictions:modelid'] = 'De model-ID';
$string['privacy:metadata:analytics:predictions:prediction'] = 'De voorspelling';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'De voorspellingsscore';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'De index van de tijdssplitsingsmethode';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'Het voorbeeld-ID';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Wanneer de voorspelling gedaan is';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Eindtijd berekeningen';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Starttijd berekeningen';
$string['processingsitecontents'] = 'Site inhoud verwerken';
$string['successfullyanalysed'] = 'Succesvol geanalyseerd';
$string['timesplittingmethod'] = 'Tijdssplitsingsmethode';
$string['timesplittingmethod_help'] = 'De tijdssplitsingsmethode verdeelt de cursusduur in delen; de voorspellingsmachine zal aan het eind van deze delen lopen. Het wordt aanbevolen om enkel die tijdssplitsingsmethodes in te schakelen die je gaat gebruiken. Het evaluatieproces zal door alle ingeschakelde tijdssplitsingsmethodes gaan, dus hoe meer je er inschakelt, hoe trager het evaluatieproces zal zijn.';
$string['viewprediction'] = 'Bekijk details van voorspelling';
