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
 * Strings for component 'analytics', language 'sv', version '3.11'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analyserbara {$a->analysableid} användes inte: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analyserbara {$a->analysableid} är inte giltig för detta mål: {$a->result}';
$string['analysisinprogress'] = 'Analyseras fortfarande av en tidigare körning';
$string['analytics'] = 'Analysfunktioner';
$string['analyticsdisabled'] = 'Analysfunktionerna är inaktiverade. Du kan aktivera dem under ”Administration av webbplats > Avancerade egenskaper”.';
$string['analyticslogstore'] = 'Lagringsplats för logg som används av analysfunktionerna';
$string['analyticslogstore_help'] = 'Lagringsplatsen som kommer användas av analysfunktionens API för att läsa användaraktiviteter.';
$string['analyticssettings'] = 'Analysinställningar';
$string['analyticssiteinfo'] = 'Webbplatsinställningar';
$string['calclifetime'] = 'Behåll analysberäkningar i';
$string['configlcalclifetime'] = 'Detta anger hur lång tid du vill behålla beräkningsdata. Detta kommer inte att ta bort förutsägelser, men tar bort de data som används för att generera förutsägelserna. Standardalternativet här är bäst eftersom det håller din diskanvändning under kontroll. Men, om du använder beräkningstabeller för andra ändamål, kanske du vill öka detta värde.';
$string['defaultpredictionsprocessor'] = 'Standardmotor för generering av förutsägelser';
$string['defaultpredictoroption'] = 'Standardmotor ({$a})';
$string['defaulttimesplittingmethods'] = 'Standardintervall för modellutvärdering';
$string['defaulttimesplittingmethods_help'] = 'Analysintervallet definierar när systemet ska beräkna förutsägelser och den del av aktivitetsloggar som kommer att beaktas för dessa förutsägelser. Modellutvärderingsprocessen kommer att iterera genom dessa analysintervall om inte ett specifikt analysintervall anges.';
$string['disabledmodel'] = 'Inaktiverad modell';
$string['erroralreadypredict'] = 'Filen {$a} har redan använts för att generera förutsägelser.';
$string['errorcannotreaddataset'] = 'Datauppsättningsfilen {$a} kan inte läsas.';
$string['errorcannotusetimesplitting'] = 'Analysintervallet kan inte användas för denna modell.';
$string['errorcannotwritedataset'] = 'Kan inte skriva till datauppsättningsfilen {$a}.';
$string['errorexportmodelresult'] = 'Maskininlärningsmodellen kan inte exporteras';
$string['errorimport'] = 'Fel vid import av JSON-filen.';
$string['errorimportmissingclasses'] = 'Dessa analyskomponenter är inte tillgängliga på denna webbplats: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'Den tillhandahållna modellen kräver att följande pluginmoduler installeras: {$a}. Observera att versionerna inte nödvändigtvis behöver matcha med de versioner som är installerade på din webbplats. Att installera samma eller en nyare version av pluginmodulen bör fungera i de flesta fall.';
$string['errorimportversionmismatches'] = 'Versionerna för följande komponenter skiljer sig från den version som finns installerad på den här webbplatsen: {$a}. Du kan använda alternativet \'Ignorera versionsglapp\' för att ignorera dessa skillnader.';
$string['errorinvalidcontexts'] = 'Några av de valda kontexten kan inte användas för detta mål.';
$string['errorinvalidindicator'] = 'Ogiltig {$a}-indikator.';
$string['errorinvalidtarget'] = 'Ogiltigt {$a}-mål.';
$string['errorinvalidtimesplitting'] = 'Ogiltigt analysintervall. Försäkra dig om att du angivit det fullständiga klassnamnet.';
$string['errornocontextrestrictions'] = 'Det valda målet stödjer inte kontextbegränsningar';
$string['errornoexportconfig'] = 'Ett fel uppstod vid export av modellkonfigurationen.';
$string['errornoexportconfigrequirements'] = 'Enbart icke-statiska modeller med ett analysintervall kan exporteras.';
$string['errornoindicators'] = 'Denna modell saknar indikatorer.';
$string['errornopredictresults'] = 'Inga resultat returnerades från förutsägelsemotorn. Kontrollera utdatakataloginnehållet för mer information.';
$string['errornoroles'] = 'Lärar- eller elevroller har inte definierats. Du kan definiera dessa på sidan för inställningar av analysfunktionen.';
$string['errornotarget'] = 'Denna modell har inga mål.';
$string['errornotimesplittings'] = 'Denna modell har inget analysintervall.';
$string['errorpredictioncontextnotavailable'] = 'Förutsägelsekontextet är inte längre tillgängligt.';
$string['errorpredictionformat'] = 'Felaktigt format för förutsägelseberäkning';
$string['errorpredictionnotfound'] = 'Förutsägelse kunde inte hittas';
$string['errorpredictionsprocessor'] = 'Fel i förutsägelseprocessor: {$a}';
$string['errorpredictwrongformat'] = 'Returvärdet från förutsägelseprocessorn kan inte avkodad: ”{$a}”';
$string['errorprocessornotready'] = 'Den valda förutsägelseprocessorn är inte redo: {$a}';
$string['errorsamplenotavailable'] = 'Det bearbetade förutsägelseurvalet är inte längre tillgängligt.';
$string['errorunexistingmodel'] = 'Icke-existerande modell {$a}';
$string['errorunexistingtimesplitting'] = 'Det valda analysintervallet är inte tillgängligt.';
$string['errorunknownaction'] = 'Okänd åtgärd';
$string['eventinsightsviewed'] = 'Insikter visade';
$string['eventpredictionactionstarted'] = 'Förutsägelseprocess startad';
$string['fixedack'] = 'Acceptera';
$string['incorrectlyflagged'] = 'Felaktigt flaggad';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'Systemet genererade en insikt åt dig.';
$string['insightinfomessageplain'] = 'Systemet genererade en insikt åt dig: {$a}';
$string['insightmessagesubject'] = 'Nya insikter för ”{$a}”';
$string['invalidanalysablefortimesplitting'] = 'Kan inte analyseras med analysintervallet {$a}.';
$string['invalidtimesplitting'] = 'Modell med ID {$a} måste ha ett analysintervall innan den kan tränas.';
$string['levelinstitution'] = 'Utbildningsnivå';
$string['levelinstitutionisced0'] = 'Förskolenivå';
$string['levelinstitutionisced1'] = 'Grundskolenivå 1-6';
$string['levelinstitutionisced2'] = 'Grundskolenivå 7-9';
$string['levelinstitutionisced3'] = 'Gymnasienivå';
$string['levelinstitutionisced4'] = 'Eftergymnasial nivå, ej högskolenivå';
$string['levelinstitutionisced5'] = 'Högskolenivå <3 år';
$string['levelinstitutionisced6'] = 'Kandidatnivå';
$string['levelinstitutionisced7'] = 'Magisternivå';
$string['levelinstitutionisced8'] = 'Forskarnivå';
$string['modeinstruction'] = 'Hur bedrivs undervisningen?';
$string['modeinstructionblendedhybrid'] = 'Både ansikte mot ansikte och on-line';
$string['modeinstructionfacetoface'] = 'Ansikte mot ansikte';
$string['modeinstructionfullyonline'] = 'Uteslutande on-line';
$string['modeloutputdir'] = 'Katalog för modellresultat';
$string['modeloutputdirinfo'] = 'Katalog där förutsägelsemotorer lagrar all utvärderingsdata. Denna kan vara användbar vid felsökningar och forskning.';
$string['modeloutputdirwithdefaultinfo'] = 'Katalog där förutsägelsemotorer lagrar all utvärderingsdata. Denna kan vara användbar vid felsökningar och forskning. Om fältet lämnats tomt används {$a} som standard.';
$string['modeltimelimit'] = 'Tidsgräns för analys per modell';
$string['modeltimelimitinfo'] = 'Den här inställningen begränsar den tid som varje modell ägnar åt att analysera webbplatsinnehållet.';
$string['neutral'] = 'Neutral';
$string['neverdelete'] = 'Ta aldrig bort beräkningar';
$string['nocourses'] = 'Inga kurser att analysera';
$string['nodata'] = 'Inga data att analysera';
$string['noevaluationbasedassumptions'] = 'Modeller baserade på antaganden kan inte utvärderas.';
$string['noinsights'] = 'Inga insikter rapporterade';
$string['noinsightsmodel'] = 'Denna modell genererar inga insikter';
$string['nonewdata'] = 'Ingen ny data tillgänglig. Modellen kommer analyseras efter nästa analysintervall.';
$string['nonewranges'] = 'Det finns inga förutsägelser ännu. Modellen kommer analyseras efter nästa analysintervall.';
$string['nopredictionsyet'] = 'Det finns inga förutsägelser ännu';
$string['noranges'] = 'Det finns inga förutsägelser ännu.';
$string['notapplicable'] = 'Inte tillämpligt';
$string['notrainingbasedassumptions'] = 'Modeller baserade på antaganden kräver ingen träning';
$string['notuseful'] = 'Ej användbar';
$string['novaliddata'] = 'Ingen giltig data finns tillgänglig';
$string['novalidsamples'] = 'Inga giltiga urval finns';
$string['onlycli'] = 'Analysfunktionens processer körs endast via kommandoraden.';
$string['onlycliinfo'] = 'Analysprocesser, såsom att utvärdera modeller, träna algoritmer för maskininlärning eller hämta förutsägelser kan vara tidskrävande. Dessa körs som cron-aktiviteter eller kan köras manuellt via kommandoraden. Om inaktiverat kan analysprocesserna köras via webbgränssnittet.';
$string['percentonline'] = 'Procentandel on-line';
$string['percentonline_help'] = 'Om din organisation erbjuder utbildningar både ansikte mot ansikte och on-line anger du här hur stor procentandel av elevarbetet som sker on-line i Moodle. Ange ett värde mellan 0 och 100.';
$string['predictionsprocessor'] = 'Förutsägelseprocessor';
$string['predictionsprocessor_help'] = 'En förutsägelsemotor är den maskininlärnings-backend som bearbetar de datauppsättningar som genereras genom att beräkna modellers indikatorer och mål. Varje enskild modell kan använda en specifik beräkningsmotor. Den som anges här kommer att vara standard.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Indikatorberäkningar';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Kontexten';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Sluttid för beräkningar';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'Beräkningsklass för indikatorn';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'Urvals-ID';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'Urvalets tabellkälla';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Starttid för beräkning';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'När förutsägelsen gjordes';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'Beräknat värde';
$string['privacy:metadata:analytics:predictionactions'] = 'Förutsägelseårgärder';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'Åtgärdsnamn';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'Förutsägelse-ID';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'När förutsägelseåtgärden utfördes';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'Användare som utförde åtgärden';
$string['privacy:metadata:analytics:predictions'] = 'Förutsägelser';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Indikatorberäkningar';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Kontext';
$string['privacy:metadata:analytics:predictions:modelid'] = 'Modell-ID:t';
$string['privacy:metadata:analytics:predictions:prediction'] = 'Förutsägelsen';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Poäng för förutsägelsen';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Analysintervallets index';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'Urvals-ID';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'När förutsägelsen gjordes';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Sluttid för beräkningar';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Starttid för beräkningar';
$string['processingsitecontents'] = 'Beabetar webbplatsinnehåll';
$string['successfullyanalysed'] = 'Analyserades';
$string['timesplittingmethod'] = 'Analysintervall';
$string['timesplittingmethod_help'] = 'Analysintervallet definierar när systemet ska beräkna förutsägelser och den del av aktivitetsloggar som kommer att beaktas för dessa förutsägelser. Kursens varaktighet kan till exempel delas in i delar, med en förutsägelse som genereras i slutet av varje del.';
$string['typeinstitution'] = 'Institutionstyp';
$string['typeinstitutionacademic'] = 'Akademisk';
$string['typeinstitutionngo'] = 'Icke-statlig organisation';
$string['typeinstitutiontraining'] = 'Företag';
$string['useful'] = 'Användbar';
$string['viewdetails'] = 'Visa detaljer';
$string['viewinsight'] = 'Visa insikter';
$string['viewinsightdetails'] = 'Visa insiktsdetaljer';
$string['viewprediction'] = 'Visa förutsägelsedetaljer';
$string['washelpful'] = 'Var detta till nytta?';
