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
 * Strings for component 'offlinequiz_statistics', language 'sv', version '4.4'.
 *
 * @package     offlinequiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Faktiskt svar';
$string['allattempts'] = 'alla försök';
$string['allattemptsavg'] = 'Genomsnittligt betyg';
$string['allattemptscount'] = 'Totalt antal fullständigt betygsatta resultat';
$string['allgroups'] = 'Statistik för alla offline-kunskapstestgrupper';
$string['analysisofresponses'] = 'Svarsanalys';
$string['analysisofresponsesfor'] = 'Analys av svar från {$a}';
$string['attempts'] = 'Försök';
$string['attemptsall'] = 'alla försök';
$string['attemptsfirst'] = 'första försöket';
$string['backtoquestionsandanswers'] = 'Tillbaka till statistiksidan';
$string['bestgrade'] = 'Högsta betyg som uppnåtts';
$string['calculatefrom'] = 'Beräkna statistik för';
$string['cic'] = 'Koefficient för intern överensstämmelse';
$string['completestatsfilename'] = 'fullständigstatistik';
$string['correct'] = 'Korrekt besvarad';
$string['count'] = 'Antal';
$string['coursename'] = 'Kursnamn';
$string['detailedanalysis'] = 'Detaljanalys av svaren på denna fråga';
$string['differentquestions'] = 'Dina offline-kunskapstestgrupper innehåller olika frågeuppsättningar.';
$string['differentsumgrades'] = 'Dina offline-kunskapstest har olika betygssummor ({$a}). Därför kan medelbetyget, medianvärdet och standardavvikelsen inte beräknas.';
$string['discrimination_index'] = '';
$string['discriminative_efficiency'] = 'Diskriminerande effektivitet';
$string['downloadeverything'] = 'Ladda ned fullständig rapport som';
$string['duration'] = 'Öppen i';
$string['effective_weight'] = 'Faktisk vikt';
$string['errordeleting'] = 'Fel vid borttagning av {$a} poster.';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'Fråga ({$a}) förekommer mer än en gång med olika vikter och på olika platser i kunskapstestet. Detta stöds för närvarande inte av statistikrapporten och kan göra statistiken för denna fråga otillförlitlig.';
$string['errormedian'] = 'Fel vid hämtning av medianvärdet';
$string['errorpowerquestions'] = 'Det gick inte att hämta data för att beräkna variansen för frågerebetyg';
$string['errorpowers'] = 'Det gick inte att hämta data för att beräkna variansen för betygen i kunskapstestet';
$string['errorrandom'] = 'Fel vid hämtning av delobjektdata';
$string['errorratio'] = 'Felkvot';
$string['errorstatisticsquestions'] = 'Fel vid hämtning av data för att beräkna statistik för frågebetyg';
$string['facility'] = 'Facilitetsindex';
$string['firstattempts'] = 'första försöken';
$string['firstattemptsavg'] = 'Medelbetyg vid förstaförsök';
$string['firstattemptscount'] = 'Antal slutförda betygsatta förstaförsök';
$string['frequency'] = 'Frekvens';
$string['intended_weight'] = 'Avsedd vikt';
$string['kurtosis'] = 'Kurtosis hos poängfördelningen';
$string['lastcalculated'] = 'Beräknades senast för {$a->lastcalculated} sedan. Det har gjorts {$a->count} försök efter det.';
$string['maxgrade'] = 'Högsta möjliga betyg';
$string['median'] = 'Medianbetyg';
$string['modelresponse'] = 'Modellsvar';
$string['negcovar'] = 'Negativ kovarians för betyg i med totalbetyg för försök';
$string['negcovar_help'] = 'Den här frågans resultat för den här uppsättningen försök i offline-testet varierar på motsatt sätt i förhållande till övergripande testresultatet. Detta innebär att de övergripande betyget i testet tenderar att vara under genomsnittet när betyget för denna fråga är över genomsnittet och vice versa.

Formeln för effektiv frågevikt kan inte beräknas i detta fall. Beräkningarna för effektiv frågevikt för andra frågor i detta test är den effektiva frågevikten för dessa frågor om de markerade frågorna med en negativ kovarians ges ett maximalt betyg på noll.

Om du redigerar ett offline-test och ger dessa frågor med negativ kovarians ett maxbetyg på noll kommer den effektiva frågevikten för dessa frågor att vara noll och den faktiska effektiva frågevikten för andra frågor kommer att vara som de nu är beräknade.';
$string['nostudentsingroup'] = 'Det finns ännu inga studenter i denna grupp';
$string['offlinequizinformation'] = 'Information om offline-kunskapstest';
$string['offlinequizname'] = 'Namn';
$string['offlinequizoverallstatistics'] = 'Övergripande statistik';
$string['offlinequizstructureanalysis'] = 'Strukturanalys för offline-kunskapstest';
$string['optiongrade'] = 'Partiellt tillägg';
$string['partially'] = 'Delvis korrekt besvarad';
$string['partofquestion'] = '#Svar';
$string['pluginname'] = 'Statistik för offline-kunskapstest';
$string['position'] = 'Position';
$string['positions'] = 'Position(er)';
$string['preferencespage'] = 'Inställningar för den här specifika sidan';
$string['preferencessave'] = 'Spara inställningar';
$string['privacy:metadata'] = 'Denna pluginmodul lagrar ingen personinformation.';
$string['questionandanswerstats'] = 'Frågor + Svar';
$string['questionandanswerstatsheader'] = 'Statistik - Fråge- och svarsanalys';
$string['questioninformation'] = 'Frågeinformation';
$string['questionname'] = 'Frågenamn';
$string['questionnumber'] = 'F#';
$string['questionstatistics'] = 'Frågestatistik';
$string['questionstats'] = 'Frågeanalys';
$string['questionstatsfilename'] = 'frågestatistik';
$string['questionstatsheader'] = 'Statistik - Frågeanalys';
$string['questiontype'] = 'Frågetyp';
$string['random_guess_score'] = 'Slumpmässig chansningspoäng';
$string['recalculatenow'] = 'Räkna om nu';
$string['remarks'] = 'Anteckning';
$string['response'] = 'Svar';
$string['skewness'] = 'Skevhet hos poängfördelningen';
$string['standarddeviation'] = 'Standardavvikelse';
$string['standarddeviationq'] = 'Standardavvikelse';
$string['standarderror'] = 'Standardmätosäkerhet';
$string['statistics'] = 'Statistik';
$string['statistics:componentname'] = 'Statistikrapport';
$string['statistics:view'] = 'Visa statistik';
$string['statisticsforgroup'] = 'Statistik för grupp';
$string['statisticshelp'] = 'Hjälp om statistik';
$string['statisticsreport'] = 'Statistikrapport';
$string['statisticsreportgraph'] = 'Statistik för frågepositioner';
$string['statsfor'] = 'Statistik (för {$a})';
$string['statsoverview'] = 'Översikt';
$string['statsoverviewheader'] = 'Översikt';
$string['worstgrade'] = 'Lägstabetyg';
$string['wrong'] = 'Felaktigt besvarad';
