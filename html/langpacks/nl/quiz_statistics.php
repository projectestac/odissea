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
 * Strings for component 'quiz_statistics', language 'nl', branch 'MOODLE_38_STABLE'
 *
 * @package   quiz_statistics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Antwoord';
$string['allattempts'] = 'alle pogingen';
$string['allattemptsavg'] = 'Gemiddelde cijfer voor alle pogingen';
$string['allattemptscount'] = 'Totaal aantal volledig beoordeelde pogingen';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = '({$a->number}) "{$a->name}" variant {$a->variant}';
$string['analysisofresponses'] = 'Analyse van pogingen';
$string['analysisofresponsesfor'] = 'Analyse van antwoorden voor {$a}';
$string['analysisvariant'] = '"{$a->name}" variant {$a->variant}';
$string['attempts'] = 'Pogingen';
$string['attemptsall'] = 'alle pogingen';
$string['attemptsfirst'] = 'eerste poging';
$string['backtoquizreport'] = 'Terug naar startpagina statistisch rapport';
$string['calculatefrom'] = 'Bereken statistieken van';
$string['calculatingallstats'] = 'Statistieken voor de test, vragen en analyse van antwoordgegevens aan het berekenen';
$string['cic'] = 'Coëfficiënt van interne consistentie (voor {$a})';
$string['completestatsfilename'] = 'completestats';
$string['count'] = 'Aantal';
$string['counttryno'] = 'Aantal pogingen {$a}';
$string['coursename'] = 'Cursusnaam';
$string['detailedanalysis'] = 'Meer gedetailleerde analyse van de antwoorden op deze vraag';
$string['detailedanalysisforvariant'] = 'Meer gedetailleerde analyse van de antwoorden op variant {$a} van deze vraag';
$string['discrimination_index'] = 'Discriminatie-index';
$string['discriminative_efficiency'] = 'Discriminatieve efficientie';
$string['downloadeverything'] = 'Download volledig rapport als';
$string['duration'] = 'Open voor';
$string['effective_weight'] = 'Effectieve weging';
$string['errordeleting'] = 'Fout bij het verwijderen van oude {$a} records.';
$string['errormedian'] = 'Fout bij het ophalen van de mediaan';
$string['errorpowerquestions'] = 'Fout bij het ophalen van gegevens om de variatie op beoordeling van vragen te berekenen';
$string['errorpowers'] = 'Fout bij het ophalen van gegevens om de variatie op de testresultaten te berekenen';
$string['errorrandom'] = 'Fout bij het opvragen van gegevens voor het sub item';
$string['errorratio'] = 'Foutenratio (voor  {$a})';
$string['errorstatisticsquestions'] = 'Fout bij het verkrijgen van gegevens om statistieken te berekenen over deze vragen';
$string['facility'] = 'Gemakkelijkheidsindex';
$string['firstattempts'] = 'eerste pogingen';
$string['firstattemptsavg'] = 'Gemiddelde cijfer voor eerste poging';
$string['firstattemptscount'] = 'Aantal volledig beoordeelde eerste pogingen';
$string['frequency'] = 'Frequentie';
$string['highestattempts'] = 'hoogst beoordeelde poging';
$string['highestattemptsavg'] = 'Gemiddeld cijfer van de hoogst beoordeelde pogingen';
$string['intended_weight'] = 'Bedoelde weging';
$string['kurtosis'] = 'Score distributiekurtosis (voor {$a})';
$string['lastattempts'] = 'laatste poging';
$string['lastattemptsavg'] = 'Gemiddeld cijfer van de laatste pogingen';
$string['lastcalculated'] = 'Er zijn {$a->count} pogingen sinds de laatste berekening, {$a->lastcalculated} geleden.';
$string['maximumfacility'] = 'Maximum';
$string['median'] = 'Mediaancijfer (voor {$a})';
$string['medianfacility'] = 'Mediaan';
$string['minimumfacility'] = 'Minimum';
$string['modelresponse'] = 'Voorbeeldantwoord';
$string['nameforvariant'] = 'Variant {$a->variant} van {$a->name}';
$string['negcovar'] = 'Negatieve cijfercovariantie met totaalcijfer van de poging';
$string['negcovar_help'] = 'Het cijfer voor deze vraag van deze set testpogingen wijkt in tegenovergestelde richting af van het algemeen cijfer van de pogingen. Dit betekent dat het algemene gemiddelde van de poging is eerder lager dan het gemiddelde wanneer het cijfer voor deze vraag boven het gemiddelde is en omgekeerd.

Onze vergelijking voor effectieve vraagweging kan in dit geval niet berekend worden. De berekeningen voor effectieve vraagweging voor andere vragen in deze test zijn de effectieve vraagwegingen voor deze vragen als de gemarkeerde vragen met een negatieve covariantie een maximumcijfer 0 gegeven worden.

Als je een test bewerkt en de vragen met een negatieve covariantie een maximumcijfer 0 geeft, dat zal de weging van deze vraag 0 zijn en zal de echte weging van deze vraag 0 zijn en zullen de echte effectieve wegingen van de andere vragen berekend worden.';
$string['nogradedattempts'] = 'Er zijn nog geen pogingen gemaakt voor deze test, of alle pogingen hebben vragen die manueel beoordeeld moeten worden.';
$string['nostudentsingroup'] = 'Er zijn nog geen leerlingen in deze groep';
$string['optiongrade'] = 'Gedeeltelijke puntscore';
$string['partofquestion'] = 'Deel van vraag';
$string['pluginname'] = 'Statistieken';
$string['position'] = 'Plaats';
$string['positions'] = 'Plaats(en)';
$string['privacy:metadata'] = 'Hoewel de test statistiekenplugin databanktabellen heeft, beschrijven de geaggregeerde gegevens geen uniek individu.';
$string['questioninformation'] = 'Vraaginformatie';
$string['questionname'] = 'Vraagnaam';
$string['questionnumber'] = 'V#';
$string['questionstatistics'] = 'Vraagstatistieken';
$string['questionstatsfilename'] = 'vraagstatistieken';
$string['questiontype'] = 'Vraagtype';
$string['quizinformation'] = 'Testinformatie';
$string['quizname'] = 'Testnaam';
$string['quizoverallstatistics'] = 'Algemene teststatistieken';
$string['quizstatisticscleanuptask'] = 'Opruimen van oude cache-records voor testtatistieken';
$string['quizstructureanalysis'] = 'Analyse teststructuur';
$string['random_guess_score'] = 'Gok-score';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['rangeofvalues'] = 'Reeks statistieken voor deze vragen';
$string['recalculatenow'] = 'Herbereken nu';
$string['reportsettings'] = 'Instellingen statistische berekening';
$string['response'] = 'Antwoord';
$string['skewness'] = 'Score verdelingsscheefheid (voor {$a})';
$string['slotstructureanalysis'] = 'Structurele analyse van vraag nummer {$a}';
$string['standarddeviation'] = 'Standaarddeviatie (voor {$a})';
$string['standarddeviationq'] = 'Standaarddeviatie';
$string['standarderror'] = 'Standaardafwijking (voor {$a})';
$string['statistics'] = 'Statistieken';
$string['statisticsreport'] = 'Statistisch rapport';
$string['statisticsreportgraph'] = 'Statistiek voor vraagposities';
$string['statistics:view'] = 'Bekijk rapport teststatistieken';
$string['statsfor'] = 'Teststatistieken (voor {$a})';
$string['variant'] = 'Variant';
$string['viewanalysis'] = 'Bekijk details';
$string['whichtries'] = 'Analyse antwoorden voor';
