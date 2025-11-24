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
 * Strings for component 'quiz_statistics', language 'ro', version '4.5'.
 *
 * @package     quiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Răspunsul real';
$string['allattempts'] = 'toate încercările';
$string['allattemptsavg'] = 'Nota medie a tuturor încercăriloe';
$string['allattemptscount'] = 'Numărul total de încercări complete notate';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = '({$a->number}) "{$a->name}" variabilă {$a->variant}';
$string['analysisofresponses'] = 'Analiza răspunsurilor';
$string['analysisofresponsesfor'] = 'Analiza răspunsurilor lui {$a}';
$string['analysisvariant'] = '"{$a->name}" variabilă {$a->variant}';
$string['attempts'] = 'Încercări';
$string['attemptsall'] = 'toate încercările';
$string['attemptsfirst'] = 'prima încercare';
$string['backtoquizreport'] = 'Înapoi la pagina principală cu rapoartele statistice.';
$string['calculatefrom'] = 'Calculează statisticile de la';
$string['calculatingallstats'] = 'Se calculează statistici pentru teste, întrebări și se analizează răspunsurile';
$string['cic'] = 'Coeficientul de consistență internă (for {$a})';
$string['completestatsfilename'] = 'statistici complete';
$string['count'] = 'Contor';
$string['counttryno'] = 'Contor încercarea {$a}';
$string['coursename'] = 'Nume curs';
$string['detailedanalysis'] = 'Analize mai detaliate a răspunsurilor la această întrebare';
$string['detailedanalysisforvariant'] = 'Analize mai detaliate a răspunsurilor la variabila {$a} acestei întrebări';
$string['discrimination_index'] = 'Indicele discriminării';
$string['discriminative_efficiency'] = 'Eficiență discriminatorie';
$string['downloadeverything'] = 'Descărcați raportul complet ca';
$string['duration'] = 'Deschis pentru';
$string['effective_weight'] = 'Pondere efectivă';
$string['errordeleting'] = 'A apărut o eroare în timpul ștergerii vechilor {$a} înregistrări .';
$string['errormedian'] = 'Eroare la preluarea medianei';
$string['errorpowerquestions'] = 'Eroare la preluarea datelor pentru a calcula varianța pentru notele întrebărilor';
$string['errorpowers'] = 'Eroare la preluarea datelor pentru a calcula varianța pentru notele testelor';
$string['errorrandom'] = 'Eroare la obținerea datelor subelementale';
$string['errorratio'] = 'Raport de eroare (pentru {$a})';
$string['errorstatisticsquestions'] = 'Eroare la preluarea datelor pentru a calcula statisticile pentru notele întrebărilor';
$string['facility'] = 'Indicele de facilitate';
$string['firstattempts'] = 'primele încercări';
$string['firstattemptsavg'] = 'Nota medie a primelor încercări';
$string['firstattemptscount'] = 'Numărul de încercări inițiale notate complet';
$string['frequency'] = 'Frecvență';
$string['getstatslockprogress'] = 'Se așteaptă task-ul în desfășurare. Vă rugăm să așteptați sau să încercați din nou mai târziu.';
$string['getstatslocktimeout'] = 'Timeout pentru blocarea calculului statisticilor';
$string['getstatslocktimeoutdesc'] = 'Câte secunde să așteptați pentru o blocare atunci când încercați să efectuați un calcul statistic pentru un test. Această setare există în principal pentru testare, nu o modificați decât dacă știți ce faceți.';
$string['highestattempts'] = 'încercare cu nota cea mai mare';
$string['highestattemptsavg'] = 'Nota medie a încercărilor cu cea mai mare notă';
$string['intended_weight'] = 'Pondere intenționată';
$string['kurtosis'] = 'Scorul de distribuție Kurtosis (pentru {$a})';
$string['lastattempts'] = 'cea mai recentă încercare';
$string['lastattemptsavg'] = 'Nota medie a ultimelor încercări';
$string['lastcalculated'] = 'Ultima dată calculată acum {$a->lastcalculated} au existat {$a->count} încercări de atunci.';
$string['maximumfacility'] = 'Facilitate maximă';
$string['median'] = 'Nota medie (for {$a})';
$string['medianfacility'] = 'Facilitate medie';
$string['minimumfacility'] = 'Facilitate minimă';
$string['modelresponse'] = 'Model de răspuns';
$string['nameforvariant'] = 'Variantă {$a->variant} a {$a->name}';
$string['negcovar'] = 'Covarianța negativă a gradului cu nota de încercare totală';
$string['negcovar_help'] = 'Nota acestei întrebări pentru acest set de încercări la test variază într-un mod opus nivelului general de încercare. Aceasta înseamnă că nota generală a încercării tinde să fie sub medie atunci când nota pentru această întrebare este peste medie și invers.

Ecuația noastră pentru ponderea efectivă a întrebării nu poate fi calculată în acest caz. Calculele pentru ponderea efectivă a întrebărilor pentru alte întrebări din acest test sunt ponderea efectivă a întrebărilor pentru aceste întrebări dacă întrebărilor evidențiate cu covarianță negativă li se acordă un grad maxim de zero.

Dacă editați un test și acordați aceste întrebări cu covarianță negativă o notă maximă de zero, atunci ponderea efectivă a întrebărilor va fi zero, iar ponderea efectivă reală a întrebărilor pentru alte întrebări va fi calculată acum.';
$string['nogradedattempts'] = 'Nu au fost încercări la acest test sau toate încercările au întrebări care necesită notare manuală.';
$string['nostats'] = 'Nu s-a putut finaliza calculul statisticilor. Este posibil existe un calcul care durează mult. Te rugăm să încerci din nou mai târziu.';
$string['nostudentsingroup'] = 'Nu există cursanți în acest grup încă';
$string['optiongrade'] = 'Credit parțial';
$string['partofquestion'] = 'Parte a întrebării';
$string['pluginname'] = 'Statistici';
$string['position'] = 'Pozitie';
$string['positions'] = 'Poziție(i)';
$string['privacy:metadata'] = 'Deși pluginul Statisticile testului are tabele de baze de date, datele sunt date agregate și nu descriu un individ unic.';
$string['questioninformation'] = 'Informații despre întrebări';
$string['questionname'] = 'Denumirea întrebării';
$string['questionnumber'] = 'Î#';
$string['questionstatistics'] = 'Statistici ale întrebărilor';
$string['questionstatsfilename'] = 'questionstats';
$string['questiontype'] = 'Tip de întrebare';
$string['quizinformation'] = 'Informații despre chestionar';
$string['quizname'] = 'Denumire chestionar';
$string['quizoverallstatistics'] = 'Statistici generale';
$string['quizstructureanalysis'] = 'Analiza structurii chestionarului';
$string['random_guess_score'] = 'Scor ghicit aleatoriu';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['rangeofvalues'] = 'Gama de statistici pentru aceste întrebări';
$string['recalculatenow'] = 'Recalculați acum';
$string['recalculatetask'] = 'Recalcularea statisticilor întrebărilor';
$string['reportsettings'] = 'Setările calculului statisticilor';
$string['response'] = 'Răspuns';
$string['skewness'] = 'Asigurarea distribuției scorului (pentru {$a})';
$string['slotstructureanalysis'] = 'Analiza structurală pentru întrebarea cu numărul {$a}';
$string['standarddeviation'] = 'Deviație standard (a {$a})';
$string['standarddeviationq'] = 'Deviație standard';
$string['standarderror'] = 'Eroare standard (a {$a})';
$string['statistics'] = 'Statistici';
$string['statistics:view'] = 'Vezi raportul statisticilor';
$string['statisticsreport'] = 'Raportul statisticilor';
$string['statisticsreportgraph'] = 'Statistici pentru pozițiile întrebărilor';
$string['statsfor'] = 'Statisticile testului (a {$a})';
$string['variant'] = 'Variabilă';
$string['viewanalysis'] = 'Vizualizare detalii';
$string['whichtries'] = 'Analizare răspunsuri pentru';
