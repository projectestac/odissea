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
 * Strings for component 'quiz_statistics', language 'sv', version '3.11'.
 *
 * @package     quiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Faktiskt svar';
$string['allattempts'] = 'alla försök';
$string['allattemptsavg'] = 'Genomsnittlig betyg på samtliga försök';
$string['allattemptscount'] = 'Totalt antal fullgjorda bedömningsförsök';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = '({$a->number}) "{$a->name}" variant {$a->variant}';
$string['analysisofresponses'] = 'Analys av svaren';
$string['analysisofresponsesfor'] = 'Analys av svaren för {$a}';
$string['analysisvariant'] = '"{$a->name}" variant {$a->variant}';
$string['attempts'] = 'Försök';
$string['attemptsall'] = 'alla försök';
$string['attemptsfirst'] = 'första försöket';
$string['backtoquizreport'] = 'Återgå till huvudsidan för statistisk rapport.';
$string['calculatefrom'] = 'Beräkna statistik från';
$string['calculatingallstats'] = 'Beräkning av statistik för test, frågor och analys av svarsdata';
$string['cic'] = 'Koefficient för intern konsistens (för {$a})';
$string['completestatsfilename'] = 'Komplett statistik';
$string['count'] = 'Räkna';
$string['counttryno'] = 'Räkna försök {$a}';
$string['coursename'] = 'Kursnamn';
$string['detailedanalysis'] = 'Mer detaljerad analys av svaren på den här frågan';
$string['detailedanalysisforvariant'] = 'Mer detaljerad analys av svaren på varianten {$a} av den här frågan';
$string['discrimination_index'] = 'Diskrimineringsindex';
$string['discriminative_efficiency'] = 'Diskriminierings effektivitet';
$string['downloadeverything'] = 'Ladda ned full rapport som';
$string['duration'] = 'Öppen för';
$string['effective_weight'] = 'Effektiv vikt';
$string['errordeleting'] = 'Fel vid borttagande av gamla {$a}-poster.';
$string['errormedian'] = 'Fel vid hämtning av median';
$string['errorpowerquestions'] = 'Det gick inte att hämta data för att beräkna variansen för frågebetyg.';
$string['errorpowers'] = 'Fel vid hämtning av data för att beräkna varians för testbetyg';
$string['errorrandom'] = 'Det gick inte att hämta data för underobjekt.';
$string['errorratio'] = 'Felkvot ({$a})';
$string['errorstatisticsquestions'] = 'Fel vid hämtning av data för att beräkna statistik för frågebetyg';
$string['facility'] = 'Lätthetsindex';
$string['firstattempts'] = 'första försök';
$string['firstattemptsavg'] = 'Genomsnittlig poäng på första försök';
$string['firstattemptscount'] = 'Antal slutförda och betygsatta första försök';
$string['frequency'] = 'Frekvens';
$string['highestattempts'] = 'försök med högsta betyget';
$string['highestattemptsavg'] = 'Medelbetyg för högst bedömda försök';
$string['intended_weight'] = 'Avsedd viktning';
$string['kurtosis'] = 'Excessfördelning/kurtosis ({$a})';
$string['lastattempts'] = 'senaste försök';
$string['lastattemptsavg'] = 'Medelbetyg för de senaste försöken';
$string['lastcalculated'] = '{$a->count} försök sedan senaste beräkning ({$a->lastcalculated}).';
$string['maximumfacility'] = 'Maximal lätthet';
$string['median'] = 'Medianpoäng ({$a})';
$string['medianfacility'] = 'Medianlätthet';
$string['minimumfacility'] = 'Minsta lätthet';
$string['modelresponse'] = 'Modellsvar';
$string['nameforvariant'] = 'Variant {$a->variant} av {$a->name}';
$string['negcovar'] = 'Negativ kovarians för betyg med totalt försöksbetyg';
$string['negcovar_help'] = 'Den här frågans betyg för den här uppsättningen försök i testet varierar på motsatt sätt till det övergripande försöksbetyget. Detta innebär att det övergripande försöksbetyget tenderar att vara under genomsnittet när betyget för denna fråga är över genomsnittet och vice versa.

Vår ekvation för faktisk frågevikt kan inte beräknas i detta fall. Beräkningarna för faktisk frågevikt för andra frågor i detta quiz är den faktiska frågevikten för dessa frågor om de markerade frågorna med en negativ kovarians ges ett maximalt betyg på noll.

Om du redigerar ett test och ger dessa frågor med negativ kovarians ett maxbetyg på noll kommer den faktiska frågevikten för dessa frågor att vara noll och den verkliga faktiska frågevikten för andra frågor kommer att vara som beräknat just nu.';
$string['nogradedattempts'] = 'Inga försök har gjorts för det här testet, eller alla försök har frågor som kräver manuell bedömning.';
$string['nostudentsingroup'] = 'Inga deltagare i gruppen';
$string['optiongrade'] = 'Partiellt tillägg';
$string['partofquestion'] = 'Del av fråga';
$string['pluginname'] = 'Statistik';
$string['position'] = 'Position';
$string['positions'] = 'Position(er)';
$string['privacy:metadata'] = 'Även om pluginprogrammet Test-statistik har databastabeller är data aggregerat och beskriver inte en unik individ.';
$string['questioninformation'] = 'Information om fråga';
$string['questionname'] = 'Fråga';
$string['questionnumber'] = 'Fr.';
$string['questionstatistics'] = 'Statistik för fråga';
$string['questionstatsfilename'] = 'frågestatistik';
$string['questiontype'] = 'Frågetyp';
$string['quizinformation'] = 'Information om test';
$string['quizname'] = 'Test';
$string['quizoverallstatistics'] = 'Statistik för testet';
$string['quizstatisticscleanuptask'] = 'Städa upp gamla statistikcacheposter för kunskapstest';
$string['quizstructureanalysis'] = 'Analys av test';
$string['random_guess_score'] = 'Slumpad gissningspoäng';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['rangeofvalues'] = 'Statistikomfång för dessa frågor';
$string['recalculatenow'] = 'Beräkna om';
$string['reportsettings'] = 'Inställningar för statistikberäkning';
$string['response'] = 'Svar';
$string['skewness'] = 'Snedfördelning ({$a})';
$string['slotstructureanalysis'] = 'Strukturell analys för frågenummer {$a}';
$string['standarddeviation'] = 'Standaravvikelse ({$a})';
$string['standarddeviationq'] = 'Standaravvikelse';
$string['standarderror'] = 'Medelfel ({$a})';
$string['statistics'] = 'Statistik';
$string['statistics:view'] = 'Visa statistikrapport';
$string['statisticsreport'] = 'Statistikrapport';
$string['statisticsreportgraph'] = 'Statistik för frågepositioner';
$string['statsfor'] = 'Statistik för test ({$a})';
$string['variant'] = 'Variant';
$string['viewanalysis'] = 'Visa detaljer';
$string['whichtries'] = 'Analysera svar för';
