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
 * Strings for component 'tool_customlang', language 'lt', version '4.5'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Užregistruoti eilutes į diska';
$string['checkout'] = 'Užregistruoti eilutes į vertėją';
$string['checkoutdone'] = 'Eilutės sėkmingai užregistruotos vertėjuje.';
$string['checkoutinprogress'] = 'Eilutės užregistruojamos vertėjuje';
$string['cliexportfileexists'] = 'Failas {$a->lang} jau yra, praleidžiamas. Jei norite perrašyti, pridėkite parinktį --override=true.';
$string['cliexportfilenotfoundforcomponent'] = 'Failas {$a->filepath} nerastas kalbai {$a->lang}. Praleidžiamas šis failas.';
$string['cliexportheading'] = 'Pradedama eksportuoti lang failus.';
$string['cliexportnofilefoundforlang'] = 'Nerasta failo, kurį būtų galima eksportuoti. Praleidžiamas šios kalbos eksportavimas.';
$string['cliexportstartexport'] = 'Eksportuojama kalba {$a}';
$string['cliexportzipdone'] = 'ZIP sukurtas : {$a}';
$string['cliexportzipfail'] = 'Nepavyko sukurti ZIP {$a}';
$string['clifiles'] = 'Failai, kuriuos reikia importuoti į {$a}';
$string['cliimporting'] = 'Importuoti failų eilutę (režimas {$a})';
$string['climissingfiles'] = 'Trūksta galiojančių failų';
$string['climissinglang'] = 'Trūksta kalbos';
$string['climissingmode'] = 'Trūksta arba netinkamas režimas (galioja viskas, naujas arba atnaujintas)';
$string['climissingsource'] = 'Trūksta failo arba aplanko';
$string['clinolog'] = 'Nėra ką importuoti į {$a}';
$string['confirmcheckin'] = 'Ketinate įrašyti vietinės kalbos paketo pakeitimus. Taip tinkintos eilutės iš vertėjo bus eksportuotos į jūsų svetainės duomenų katalogą ir svetainė pradės naudoti pakeistas eilutes. Norėdami tęsti išsaugojimą, paspauskite „Tęsti“.';
$string['customlang:edit'] = 'Redaguoti vietinius vertimus';
$string['customlang:export'] = 'Eksportuoti vietinį vertimą';
$string['customlang:view'] = 'Peržiūrėti vietinius vertimus';
$string['editlangpack'] = 'Redaguoti kalbos paketą';
$string['export'] = 'Eksportuoti pasirinktines eilutes';
$string['exportfilter'] = 'Pasirinkti eksportuojamą (-us) komponentą (-us).';
$string['exportzipfilename'] = 'customlang-export-{$a->lang}.zip';
$string['filter'] = 'Filtruoti eilutes';
$string['filtercomponent'] = 'Rodyti šių komponentų eilutes';
$string['filtercustomized'] = 'Tik pritaikytos';
$string['filtermodified'] = 'Tik šioje sesijoje pakeistos';
$string['filteronlyhelps'] = 'Tik pagalba';
$string['filtershowstrings'] = 'Rodyti eilutes';
$string['filterstringid'] = 'Eilutės vardas';
$string['filtersubstring'] = 'Tik eilutės su';
$string['headingcomponent'] = 'Komponentas';
$string['headinglocal'] = 'Vietinis pritaikymas';
$string['headingstandard'] = 'Standartinis tekstas';
$string['headingstringid'] = 'Eilutė';
$string['import'] = 'Importuoti pasirinktines eilutes';
$string['import_all'] = 'Sukurti arba atnaujinti visas komponento (-ų) eilutes';
$string['import_mode'] = 'Importavimo režimas';
$string['import_new'] = 'Kurkite tik eilutes be vietinio tinkinimo';
$string['import_update'] = 'Atnaujinti tik eilutes vietiniu tinkinimu';
$string['importfile'] = 'Importuoti failą';
$string['langpack'] = 'Kalbos komponentas (-ai)';
$string['markinguptodate'] = 'Pritaikymas žymimas kaip naujausias.';
$string['markinguptodate_help'] = 'Pritaikytas vertimas gali tapti pasenęs jei angliškas tekstas pasikeitė nuo tada kai eilutė buvo pakeista jūsų svetainėje. Peržiūrėkite pakeistas eilutės vertėjuje. Jeigu viskas yra naujausia, pažymėkite žymės langelį. Kitu atveju redaguokite.';
$string['markuptodate'] = 'pažymėti kaip naujausia';
$string['modifiedno'] = 'Nėra pakeistų eilučių kurias būtų galima užregistruoti.';
$string['modifiednum'] = 'Yra {$a} pakeistų eilučių. Jūs';
$string['nolocallang'] = 'Vietinių eilučių nerasta.';
$string['nostringsfound'] = 'Nerasta nei viena eilutė, prašau pakeisti filtravimo nustatymus';
$string['notice_ignorenew'] = 'Nepaisoma eilutės {$a->component}/{$a->stringid}, nes ji nėra tinkinta.';
$string['notice_ignoreupdate'] = 'Ignoruojama eilutė {$a->component}/{$a->stringid}, nes ji jau apibrėžta.';
$string['notice_inexitentstring'] = 'Eilutė {$a->component}/{$a->stringid} nerasta.';
$string['notice_missingcomponent'] = 'Trūksta komponento {$a->component}.';
$string['notice_success'] = 'Eilutė {$a->component}/{$a->stringid} sėkmingai atnaujinta.';
$string['placeholder'] = 'Vietos rezervavimo ženklai';
$string['placeholder_help'] = 'Vietos rezervavimo ženklai yra specialus teiginys kaip \'{$a}\' arba `{$a->something}` eilutėje. Jie yra pakeičiami reikšme kai eilutė yra atspausdinama. Yra labai svarbu nukopijuoti juos tokius kokie jie yra originalioje eilutėje. Neverskite jų ar nekeiskite jų kairės į dešinę orientacijos.';
$string['placeholderwarning'] = 'eilutėje yra vietos rezervavimo ženklas';
$string['pluginname'] = 'Kalbos pritaikymas';
$string['privacy:metadata'] = 'Kalbos tinkinimo papildinys nesaugo jokių asmeninių duomenų.';
$string['savecheckin'] = 'Išsaugoti ir užregistruoti eilutes failuose';
$string['savecontinue'] = 'Išsaugoti ir tęsti redagavimą';
