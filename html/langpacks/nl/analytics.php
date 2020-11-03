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
 * Strings for component 'analytics', language 'nl', branch 'MOODLE_38_STABLE'
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
$string['analyticsdisabled'] = 'Analytics is uitgeschakeld. Je kunt het inschakelen in "Sitebeheer> Geavanceerde functies"';
$string['analyticslogstore'] = 'Log store gebruikt voor analytics';
$string['analyticslogstore_help'] = 'De log store die gebruikt zal worden door de analytics API om de activiteit van gebruikers te lezen.';
$string['analyticssettings'] = 'Instellingen analytics';
$string['analyticssiteinfo'] = 'Site informatie';
$string['defaultpredictionsprocessor'] = 'Standaard voorspellingsprocessor';
$string['defaultpredictoroption'] = 'Standaard processor ({$a})';
$string['defaulttimesplittingmethods'] = 'Standaard analyse-intervallen voor de evaluatie van het model';
$string['defaulttimesplittingmethods_help'] = 'Het analyse-interval bepaalt wanneer het systeem voorspellingen zal berekenen en het deel van de logs dat gebruikt zal worden voor deze voorspellingen. Het modelevaluatieproces zal door deze analyse-intervallen gaan tenzij een specifiek analyse-interval werd opgegeven.';
$string['disabledmodel'] = 'Uitgeschakeld model';
$string['erroralreadypredict'] = 'Bestand {$a} is al gebruikt om te voorspellen.';
$string['errorcannotreaddataset'] = 'Het dataset-bestand {$a} kan niet worden gelezen.';
$string['errorcannotusetimesplitting'] = 'Het opgegeven analyse-interval kan niet worden gebruikt op dit model.';
$string['errorcannotwritedataset'] = 'Het dataset-bestand {$a} kan niet worden geschreven.';
$string['errorexportmodelresult'] = 'Het machine-leermodel kan niet worden geëxporteerd.';
$string['errorimport'] = 'Fout bij het importeren van het meegeleverde JSON-bestand.';
$string['errorimportmissingclasses'] = 'De volgende analytische componenten zijn niet beschikbaar op deze site: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'Voor het geleverde model moeten de volgende plug-ins worden geïnstalleerd: {$a}. Let op: de versies hoeven niet overeen te komen met de versies die op uw site zijn geïnstalleerd. Het installeren van dezelfde of nieuwere versie van de plug-in zou in de meeste gevallen goed moeten zijn.';
$string['errorimportversionmismatches'] = 'De versie van de volgende componenten verschilt van deze site: {$a}. U kunt de optie \'Negeer niet-overeenkomende versies negeren\' gebruiken om deze verschillen te negeren.';
$string['errorinvalidcontexts'] = 'Sommige van de geselecteerde cursussen kunnen niet in dit doel gebruikt worden.';
$string['errorinvalidindicator'] = 'Ongeldige {$a} indicator';
$string['errorinvalidtarget'] = 'Ongeldig {$a} doel';
$string['errorinvalidtimesplitting'] = 'Ongeldige analyse-interval; voeg de fully qualified class name toe.';
$string['errornocontextrestrictions'] = 'Het geselecteerde doel ondersteunt geen contextrestricties';
$string['errornoexportconfig'] = 'Er is een probleem opgetreden bij het exporteren van de modelconfiguratie.';
$string['errornoexportconfigrequirements'] = 'Alleen niet-statische modellen met analyse-intervallen kunnen worden geëxporteerd.';
$string['errornoindicators'] = 'Dit model heeft geen enkele indicator.';
$string['errornopredictresults'] = 'Geen resultaten gekregen van de voorspellingsprocessor. Controleer de inhoud van de map voor de output voor meer informatie.';
$string['errornoroles'] = 'Rollen voor leerling of leraar zijn niet gedefinieerd. Definieer ze op de instellingenpagina voor analytics.';
$string['errornotarget'] = 'Dit model heeft geen enkel doel.';
$string['errornotimesplittings'] = 'Dit model heeft geen analyse-interval.';
$string['errorpredictioncontextnotavailable'] = 'Deze voorspellingscontext is niet meer beschikbaar.';
$string['errorpredictionformat'] = 'Onjuist format voor voorspellingsberekeningen';
$string['errorpredictionnotfound'] = 'Voorspellingen niet gevonden';
$string['errorpredictionsprocessor'] = 'Fout voorspellingsverwerker: {$a}';
$string['errorpredictwrongformat'] = 'Wat de voorspellingsprocessor teruggaf kan niet gedecodeerd worden: "{$a}"';
$string['errorprocessornotready'] = 'De geselecteerde voorspellingsprocessor is nog niet klaar: {$a}';
$string['errorsamplenotavailable'] = 'Het voorspelde deel is niet meer beschikbaar.';
$string['errorunexistingmodel'] = 'Niet-bestaand model {$a}';
$string['errorunexistingtimesplitting'] = 'Het geselecteerde analyse-interval is niet beschikbaar.';
$string['errorunknownaction'] = 'Onbekende actie';
$string['eventinsightsviewed'] = 'Inzichten bekeken';
$string['eventpredictionactionstarted'] = 'Voorspellingsproces gestart';
$string['fixedack'] = 'Aanvaard';
$string['incorrectlyflagged'] = 'Onjuist gemarkeerd';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'Het systeem heeft enkele inzichten voor jou gegenereerd.';
$string['insightinfomessageplain'] = 'Het systeem heeft een inzicht voor jou gegenereerd: {$a}';
$string['insightmessagesubject'] = 'Nieuw inzicht voor "{$a}"';
$string['invalidanalysablefortimesplitting'] = 'Dit kan niet geanalyseerd worden met het {$a} analyse-interval.';
$string['invalidtimesplitting'] = 'Model met ID {$a} heeft een analyse-interval nodig voor het kan gebruikt worden om te trainen.';
$string['levelinstitution'] = 'Opleidingsniveau';
$string['levelinstitutionisced0'] = 'Voorschools onderwijs (voor Basisonderwijs)';
$string['levelinstitutionisced1'] = 'Basisonderwijs';
$string['levelinstitutionisced2'] = 'Lager middelbaar onderwijs';
$string['levelinstitutionisced3'] = 'Hoger middelbaar onderwijs';
$string['levelinstitutionisced4'] = 'Postsecundair niet-tertiair onderwijs (mogelijk bedrijfs- of gemeenschaps- / NGO-training)';
$string['levelinstitutionisced5'] = 'Kortcyclisch tertiair onderwijs (mogelijk bedrijfs- of gemeenschaps- / NGO-training)';
$string['levelinstitutionisced6'] = 'Bachelor of gelijkwaardig niveau';
$string['levelinstitutionisced7'] = 'Master of gelijkwaardig niveau';
$string['levelinstitutionisced8'] = 'Doctoraal of gelijkwaardig niveau';
$string['modeinstruction'] = 'Wijze van instructie';
$string['modeinstructionblendedhybrid'] = 'Gemengd of hybride';
$string['modeinstructionfacetoface'] = 'Face-to-face';
$string['modeinstructionfullyonline'] = 'Volledig online';
$string['modeloutputdir'] = 'Output-map voor modellen';
$string['modeloutputdirinfo'] = 'De map waar voorspellingsprocessoren al hun evaluatie-informatie opslaan. Nuttig voor foutopsporing en onderzoek.';
$string['modeloutputdirwithdefaultinfo'] = 'Directory waar voorspellingsprocessors alle evaluatie-informatie opslaan. Handig voor foutopsporing en onderzoek. Indien leeg, wordt \'<strong> {$ a} </strong>\' als standaard gebruikt.';
$string['modeltimelimit'] = 'Tijdslimiet analyse per model';
$string['modeltimelimitinfo'] = 'Deze instelling beperkt de tijd voor ieder model om de inhoud van de site te analyseren.';
$string['neutral'] = 'Neutrale';
$string['nocourses'] = 'Geen cursussen om te analyseren';
$string['nodata'] = 'Geen data om te analyseren';
$string['noevaluationbasedassumptions'] = 'Modellen gebaseerd op aannames kunnen niet worden geëvalueerd.';
$string['noinsights'] = 'Geen inzichten gerapporteerd';
$string['noinsightsmodel'] = 'Dit model genereert geen inzichten';
$string['nonewdata'] = 'Geen nieuwe gegevens beschikbaar. Dit model zal geanalyseerd worden na het volgende analyse-interval.';
$string['nonewranges'] = 'Nog geen nieuwe voorspellingen. Dit model zal geanalyseerd worden na het volgende analyse-interval.';
$string['nopredictionsyet'] = 'Nog geen voorspellingen beschikbaar';
$string['noranges'] = 'Nog geen voorspellingen';
$string['notapplicable'] = 'Niet toepasbaar';
$string['notrainingbasedassumptions'] = 'Modellen gebaseerd op aannames hoeven niet getraind te worden.';
$string['notuseful'] = 'Niet bruikbaar';
$string['novaliddata'] = 'Geen geldige data beschikbaar';
$string['novalidsamples'] = 'Er zijn geen geldige voorbeelden beschikbaar';
$string['onlycli'] = 'Analyseproces uitvoeren enkel via command line';
$string['onlycliinfo'] = 'Analyseprocessen, zoals evaluatiemodellen, het trainen van de machine lerende algoritmes of voorspellingen maken, kunnen wel wat tijd in beslag nemen. Ze lopen als cron-taken en kunnen geforceerd gestart worden via command line. Schakel deze instelling uit als je wil dat site managers deze procedures manueel via de webinterface kunnen starten.';
$string['percentonline'] = 'Percentage online';
$string['percentonline_help'] = 'Als uw organisatie gemengde of hybride cursussen aanbiedt, welk percentage van het leerlingenwerk wordt online uitgevoerd in Moodle? Voer een cijfer tussen 0 en 100 in.';
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
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'De index van het analyse-interval';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'Het voorbeeld-ID';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Wanneer de voorspelling gedaan is';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Eindtijd berekeningen';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Starttijd berekeningen';
$string['processingsitecontents'] = 'Site inhoud verwerken';
$string['successfullyanalysed'] = 'Succesvol geanalyseerd';
$string['timesplittingmethod'] = 'Analyse-interval';
$string['timesplittingmethod_help'] = 'Het analyse-interval bepaalt wanneer het systeem voorspellingen zal berekenen en het deel van de activiteiten-logs dat zal gebruikt worden voor deze voorspellingen. Hiermee kan bijvoorbeeld de cursus opgesplitst worden in tijdsblokken en een voorspelling kan berekend worden aan het einde van elk deel.';
$string['typeinstitution'] = 'Type instelling';
$string['typeinstitutionacademic'] = 'Academisch';
$string['typeinstitutionngo'] = 'Niet-gouvernementele organisatie (NGO)';
$string['typeinstitutiontraining'] = 'Bedrijfstrainingen';
$string['useful'] = 'Nuttig';
$string['viewdetails'] = 'Bekijk details';
$string['viewinsight'] = 'Bekijk inzicht';
$string['viewinsightdetails'] = 'Bekijk inzicht';
$string['viewprediction'] = 'Bekijk details van voorspelling';
$string['washelpful'] = 'Was dit nuttig?';
