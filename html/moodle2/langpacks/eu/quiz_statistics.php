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
 * Strings for component 'quiz_statistics', language 'eu', branch 'MOODLE_36_STABLE'
 *
 * @package   quiz_statistics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Oraingo erantzuna';
$string['allattempts'] = 'saiakera guztiak';
$string['allattemptsavg'] = 'Saiakera guztien batez bestekoak';
$string['allattemptscount'] = 'Denera osorik kalifikatutako saiakera-kopurua';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = '({$a->number}) "{$a->name}" {$a->variant}-(r)en aldaera';
$string['analysisofresponses'] = 'Erantzunen analisia';
$string['analysisofresponsesfor'] = 'Erantzunen analisia {$a}-rako';
$string['analysisvariant'] = '"{$a->name}" {$a->variant}-(r)en aldaera';
$string['attempts'] = 'Saiakerak';
$string['attemptsall'] = 'saiakera guztiak';
$string['attemptsfirst'] = 'lehenengo saiakera';
$string['backtoquizreport'] = 'Itzuli estatistika-txostenaren orri nagurira.';
$string['calculatefrom'] = 'Kalkulatu estatistikak hemendik:';
$string['calculatingallstats'] = 'Galdetegiaren eta galderen estatistikak kalkulatzen eta erantzunen datuen analisia egiten';
$string['cic'] = 'Barne-tinkotasun koefizientea ({$a}-(r)entzat)';
$string['completestatsfilename'] = 'estatistikaosoak';
$string['count'] = 'Kopurua';
$string['counttryno'] = 'Zenbatu {$a} Saiakera';
$string['coursename'] = 'Ikastaroaren izena';
$string['detailedanalysis'] = 'Galdera honetarako erantzunen analisi zehatzagoa';
$string['detailedanalysisforvariant'] = 'Galdera honetarako erantzunen {$a}-(r)en aldaeraren analisi zehatzagoa';
$string['discrimination_index'] = 'Diskriminazio-indizea';
$string['discriminative_efficiency'] = 'Efizientzia diskriminatzailea';
$string['downloadeverything'] = 'Jaitsi txosten osoa honela';
$string['duration'] = 'Irekita tarte honetan:';
$string['effective_weight'] = 'Benetako pisua';
$string['errordeleting'] = 'Errorea {$a} erregistro zahar ezabatzean';
$string['errormedian'] = 'Errorea mediana lortzerakoan';
$string['errorpowerquestions'] = 'Errorea galderen kalifikazioen aldaera kalkulatzeko datuak jasotzean';
$string['errorpowers'] = 'Errorea galdetegiaren kalifikazioen aldaera kalkulatzeko datuak jasotzean';
$string['errorrandom'] = 'Errorea azpielementuaren datuak lortzean';
$string['errorratio'] = 'Ratio-errorea ({$a}-(r)entzat)';
$string['errorstatisticsquestions'] = 'Errorea galderen kalifikazioen estatistikak kalkulatzeko datuak lortzean';
$string['facility'] = 'Erraztasun-indizea';
$string['firstattempts'] = 'lehenbiziko saiakerak';
$string['firstattemptsavg'] = 'Lehenbiziko saiakeraren batez besteko kalifikazioa';
$string['firstattemptscount'] = 'Osorik kalifikaturiko lehen saiakera-kopurua';
$string['frequency'] = 'Maiztasuna';
$string['highestattempts'] = 'kalifikazio altueneko saiakera';
$string['highestattemptsavg'] = 'Kalifikazio altueneko saiakeren batez besteko kalifikazioa';
$string['intended_weight'] = 'Planifikatutako pisua';
$string['kurtosis'] = 'Emaitzen zapaltasun banaketa ({$a}-(r)entzat)';
$string['lastattempts'] = 'azken saiakera';
$string['lastattemptsavg'] = 'Azken saiakeren batez besteko kalifikazioa';
$string['lastcalculated'] = 'Azkenengoz kalkulatua orain dela {$a->lastcalculated}, ordutik {$a->count} saiakera egon dira.';
$string['maximumfacility'] = 'Gehienezko erraztasuna';
$string['median'] = 'Kalifikazioaren mediana ({$a}-(r)entzat)';
$string['medianfacility'] = 'Erraztasunaren mediana';
$string['minimumfacility'] = 'Gutxieneko erraztasuna';
$string['modelresponse'] = 'Ereduzko erantzuena';
$string['nameforvariant'] = '{$a->name}-(r)en {$a->variant} aldaera';
$string['negcovar'] = 'Kalifikazioaren kobariantza negatiboa saiakera osoaren kalifikazioarekiko';
$string['negcovar_help'] = 'Galdera honen saiakera multzo honentzako kalifikazioa galdetegiaren batez besteko saiakeren kalifikazioaren kontrako zentzuan aldatzen da. Honek batez besteko saiakeren kalifikazioa batez bestetik behera joateko joera duela eta galdera honentzako batez bestetik gorako joera duela esan nahi du, edo alderantziz.

Gure benetako pisua kalkulatzeko ekuazioa ezin da kalkulatu kasu honetan. Galdetegi honetako beste galderentzako benetako pisuaren kalkulua galdera bakoitzaren benetako pisua da nabarmenduta dauden kobariantza negatiboa duten galderei emandako kalifikazioa gehienez zero bada.

Galdetegia editatzen baduzu kobariantza negatiboa duten nabarmandutako galdera hauen gehienezko kalifikazioa zero izateko, orduan galdera hauen benetako pisua zero izango da eta beste galderen benetako pisua orain kalkulatu dena izango da.';
$string['nogradedattempts'] = 'Ez da saiakerarik egin galdetegi honetan, edo egindako saiakera guztiek eskuzko kalifikazioa behar dute.';
$string['nostudentsingroup'] = 'Oraindik ez dago ikaslerik talde honetan';
$string['optiongrade'] = 'Kalifikazio partziala';
$string['partofquestion'] = 'Galdera zati bat';
$string['pluginname'] = 'Estatistikak';
$string['position'] = 'Kokalekua';
$string['positions'] = 'kokalekua(k)';
$string['privacy:metadata'] = 'Galdetegien Estatistikak pluginak datu-baseko taulak dituen arren, bertako datuak agregatuak dira eta ez dute norbanakorik deskribaptzen.';
$string['questioninformation'] = 'Galderaren informazioa';
$string['questionname'] = 'Galderaren izena';
$string['questionnumber'] = 'G#';
$string['questionstatistics'] = 'Galderen estatistikak';
$string['questionstatsfilename'] = 'galderaestatistikak';
$string['questiontype'] = 'Galdera-mota';
$string['quizinformation'] = 'Galdetegiaren informazioa';
$string['quizname'] = 'Galdetegiaren izena';
$string['quizoverallstatistics'] = 'Galdetegiaren estatistika orokorrak';
$string['quizstructureanalysis'] = 'Galdetegiaren egituraren analisia';
$string['random_guess_score'] = 'Ausaz erantzundakoen kalifikazioa';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['rangeofvalues'] = 'Galdera hauetarako estatistika-tartea';
$string['recalculatenow'] = 'Berriz kalkulatu orain';
$string['reportsettings'] = 'Estatistikak kalkulatzeko ezarpenak';
$string['response'] = 'Erantzuna';
$string['skewness'] = 'Kalifikazioen asimetria-banaketa ({$a}-(r)entzat)';
$string['slotstructureanalysis'] = 'Egitura-analisia {$a} zenbakizko galderarentzat';
$string['standarddeviation'] = 'Desbiderapen estandarra ({$a}-(r)entzat)';
$string['standarddeviationq'] = 'Desbiderapen estandarra';
$string['standarderror'] = 'Errore estandarra ({$a}-(r)entzat)';
$string['statistics'] = 'Estatistikak';
$string['statistics:componentname'] = 'Galdetegi-estatistiken txostena';
$string['statisticsreport'] = 'Estatistiken txostena';
$string['statisticsreportgraph'] = 'Estatistikak galderen kokalekuaz';
$string['statistics:view'] = 'Ikusi estatistiken txostena';
$string['statsfor'] = 'Galdetegiaren estatitstikak (({$a}-rentzat)';
$string['variant'] = 'Aldaera';
$string['viewanalysis'] = 'Ikusi xehetasunak';
$string['whichtries'] = 'Aztertu erantzunak honentzat';
