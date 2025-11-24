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
 * Strings for component 'quiz_statistics', language 'lt', version '4.5'.
 *
 * @package     quiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Tikrasis atsakas';
$string['allattempts'] = 'visų bandymų';
$string['allattemptsavg'] = 'Visų bandymų įvertinimų vidurkis';
$string['allattemptscount'] = 'Visas bandymų skaičius';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = '({$a->number}) "{$a->name}" variantas {$a->variant}';
$string['analysisofresponses'] = 'Atsakymų analizė';
$string['analysisofresponsesfor'] = '{$a} atsakymų analizė.';
$string['analysisvariant'] = '"{$a->name}" variantas {$a->variant}';
$string['attempts'] = 'Bandymai';
$string['attemptsall'] = 'visų bandymų';
$string['attemptsfirst'] = 'pirmasis bandymas';
$string['backtoquizreport'] = 'Atgal į pagrindinį statistinės ataskaitos puslapį.';
$string['calculatefrom'] = 'Apskaičiuoti statistiką iš';
$string['calculatingallstats'] = 'Testo statistikos skaičiavimas, klausimų ir atsakymų duomenų analizė';
$string['cic'] = 'Vidinio nuoseklumo koeficientas (skirta {$a})';
$string['completestatsfilename'] = 'Užbaigimo statistika';
$string['count'] = 'Skaičius';
$string['counttryno'] = 'Bandymų skaičius {$a}';
$string['coursename'] = 'Kursų pavadinimas';
$string['detailedanalysis'] = 'Išsamesnė atsakymų į šį klausimą analizė';
$string['detailedanalysisforvariant'] = 'Šio klausimo varianto {$a} atsakymų detali analizė';
$string['discrimination_index'] = 'Diskriminacijos indeksas';
$string['discriminative_efficiency'] = 'Skiriamosios gebos paveikumas';
$string['downloadeverything'] = 'Parsisiųsti visą ataskaitą kaip';
$string['duration'] = 'Atidarymas, skirtas';
$string['effective_weight'] = 'Paveikus svoris';
$string['errordeleting'] = 'Klaida bandant panaikinti senus {$a} įrašus.';
$string['errormedian'] = 'Iškviečiant medianą įvyko klaida';
$string['errorpowerquestions'] = 'Iškviečiant klausimo įverčių kintamųjų skaičiavimo duomenis įvyko klaida';
$string['errorpowers'] = 'Iškviečiant testo įverčių kintamųjų skaičiavimo duomenis įvyko klaida';
$string['errorrandom'] = 'Gaunant antrinio elemento duomenis įvyko klaida';
$string['errorratio'] = 'Klaidų santykis (skirtas {$a})';
$string['errorstatisticsquestions'] = 'Iškviečiant klausimo įverčių statistikos skaičiavimo duomenis įvyko klaida';
$string['facility'] = 'Sunkumo indeksas';
$string['firstattempts'] = 'pirmųjų bandymų';
$string['firstattemptsavg'] = 'Pirmųjų bandymų įvertinimų vidurkis';
$string['firstattemptscount'] = 'Pirmųjų bandymų skaičius';
$string['frequency'] = 'Dažnis';
$string['getstatslockprogress'] = 'Laukiama vykdomos užduoties. Palaukite arba bandykite vėliau.';
$string['highestattempts'] = 'aukščiausiu balu įvertinto bandymo';
$string['highestattemptsavg'] = 'Aukščiausiai įvertintų bandymų vidutinis įvertinimų';
$string['intended_weight'] = 'Numatytasis svoris';
$string['kurtosis'] = 'Balų pasiskirstymo ekscesas (skirtas {$a})';
$string['lastattempts'] = 'paskutinio bandymo';
$string['lastattemptsavg'] = 'Paskutinių bandymų vidutinis įvertinimas';
$string['lastcalculated'] = 'Vėliausiai apskaičiuota prieš {$a->lastcalculated}, nuo tada buvo bandyta {$a->count} kartų (-us).';
$string['maximumfacility'] = 'Maksimalus lengvumas';
$string['median'] = 'Medianos įvertinimas (skirtas {$a})';
$string['medianfacility'] = 'Medianinis lengvumas';
$string['minimumfacility'] = 'Minimalus lengvumas';
$string['modelresponse'] = 'Modelio atsakas';
$string['nameforvariant'] = '{$a->variant} variantas {$a->name}';
$string['negcovar'] = 'Neigiama įvertinimo kovariacija su visu bandymo įvertinimu';
$string['negcovar_help'] = 'Šis testo bandymų rinkinio klausimų įvertinimas yra priešingas bendram bandymų įvertinimui. Tai reiškia, kad bendras bandymų įvertinimas būna žemesnis už vidurkį, kai klausimo įvertinimas yra aukštesnis už vidurkį, ir atvirkščiai.

Paveikaus klausimo svorio lygties šiuo atveju apskaičiuoti neįmanoma. Kitų šio testo klausimų paveikaus svorio apskaičiavimų rezultati reiškia, kad šių klausimų svoris paveikus, jei paryškintų klausimų su neigiama koveriacija maksimalus įvertinimas yra nulis.

Jei redaguojate testą ir suteikiate šiam (-iems) klausimui (-ams) su neigiama koveriacija maksimalų įvertinimą – nulis, tada paveikus šių klausimų svoris bus lygus nuliui, o tikras paveikus kitų klausimų svoris bus toks, kaip apskaičiuota dabar.';
$string['nogradedattempts'] = 'Šio testo nebuvo bandoma atlikti arba visuose bandymuose yra klausimų, kuriuos reikia įvertinti rankiniu būdu.';
$string['nostats'] = 'Nepavyko užbaigti statistikos skaičiavimo. Gali būti, kad vyksta ilgai trunkantis skaičiavimas. Prašome pabandyti vėliau.';
$string['nostudentsingroup'] = 'Šioje grupėje dar nėra besimokančiųjų';
$string['optiongrade'] = 'Dalinis kreditas';
$string['partofquestion'] = 'Dalis klausimo';
$string['pluginname'] = '„Statistics“';
$string['position'] = 'Vieta';
$string['positions'] = 'Vieta (-os)';
$string['privacy:metadata'] = 'Nors Testo statistikos papildinys turi duomenų bazių lenteles, duomenys yra apibendrinti ir neaprašo unikalaus asmens.';
$string['questioninformation'] = 'Klausimo informacija';
$string['questionname'] = 'Klausimo pavadinimas';
$string['questionnumber'] = 'Kl. Nr.';
$string['questionstatistics'] = 'Klausimo statistiniai duomenys';
$string['questionstatsfilename'] = 'Klausimo statistika';
$string['questiontype'] = 'Klausimo tipas';
$string['quizinformation'] = 'Testo informacija';
$string['quizname'] = 'Testo pavadinimas';
$string['quizoverallstatistics'] = 'Bendrieji testo statistiniai duomenys';
$string['quizstructureanalysis'] = 'Testo struktūros analizė';
$string['random_guess_score'] = 'Atsitiktinio spėjimo balas';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['rangeofvalues'] = 'Šių klausimų statistikos diapazonas';
$string['recalculatenow'] = 'Perskaičiuoti dabar';
$string['recalculatetask'] = 'Perskaičiuoti klausimo statistiką';
$string['reportsettings'] = 'Statistikos skaičiavimų nustatymai';
$string['response'] = 'Atsakyti';
$string['skewness'] = 'Balų pasiskirstymo asimetrijos koeficientas (skirtas {$a})';
$string['slotstructureanalysis'] = 'Klausimo, kurio numeris {$a} struktūrinė analizė';
$string['standarddeviation'] = 'Standartinis nuokrypis (skirtas {$a})';
$string['standarddeviationq'] = 'Standartinis nuokrypis';
$string['standarderror'] = 'Standartinė paklaida (skirta {$a})';
$string['statistics'] = 'Statistika';
$string['statistics:view'] = 'Peržiūrėti statistinę ataskaitą';
$string['statisticsreport'] = 'Statistinė ataskaita';
$string['statisticsreportgraph'] = 'Klausimų vietų statistiniai duomenys';
$string['statsfor'] = 'Testo statistiniai duomenys (skirtas {$a})';
$string['variant'] = 'Variantas';
$string['viewanalysis'] = 'Išsamiau';
$string['whichtries'] = 'Analizuoti atsakymus';
