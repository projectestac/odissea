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
 * Strings for component 'tool_customlang', language 'eu', version '4.4'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Gorde kateak hizkuntza-paketean';
$string['checkout'] = 'Ireki hizkuntza-paketea editatzeko';
$string['checkoutdone'] = 'Hizkuntza-paketea eguneratu da';
$string['checkoutinprogress'] = 'Hizkuntza-paketea eguneratzen';
$string['cliexportfileexists'] = '{$a->lang} hizkuntzarako fitxategia dagoeneko existitzen da. Fitxategia gainidatzi nahi baduzu --override=true aukera gehitu ezazu.';
$string['cliexportfilenotfoundforcomponent'] = 'Ez da aurkitu {$a->lang} hizkuntzarako {$a->filepath} fitxategia. Fitxategi hau saltatuko da.';
$string['cliexportheading'] = 'Hizkuntza-fitxategiak esportatzen hasi dira.';
$string['cliexportnofilefoundforlang'] = 'Ez dago esportatzeko fitxategirik. Fitxategi honen esportatzea saltatuko da.';
$string['cliexportstartexport'] = '{$a} hizkuntza esportatzen';
$string['cliexportzipdone'] = 'Zip fitxategia sortu da: {$a}';
$string['cliexportzipfail'] = 'Ezin da {$a} fitxategia sortu';
$string['clifiles'] = '{$a}(e)ra inportatzeko fitxategiak';
$string['cliimporting'] = 'Inportatu kate-fitxategiak ({$a} modua)';
$string['climissingfiles'] = 'Baliozko fitxategiak falta dira';
$string['climissinglang'] = 'Hizkuntza falta da';
$string['climissingmode'] = 'Modua falta edo baliogabea da (baliozkoak all, new edo update dira)';
$string['climissingsource'] = 'Fitxategia edo direktorioa falta da';
$string['clinolog'] = 'Ez dago ezer {$a}(e)ra inportatzeko';
$string['confirmcheckin'] = 'Aldatutako kateak zure hizkuntza-pakete lokalean gordetzekotan zara. Honela pertsonalizatutako kateak itzultzailearengandik zure guneko datuen direktoriora esportatuko dira eta zure gunea aldatutako kateak erabiltzen hasiko da. Egin klik \'Jarraitu\' botoian egiaztatzeko.';
$string['customlang:edit'] = 'Editatu itzulpen lokala';
$string['customlang:export'] = 'Esportatu itzulpen-lokala';
$string['customlang:view'] = 'Ikusi itzulpen lokala';
$string['editlangpack'] = 'Editatu hizkuntza-paketea';
$string['export'] = 'Esportatu pertsonalizatutako kateak';
$string['exportfilter'] = 'Aukeratu esportatu beharreko osagaia(k)';
$string['exportzipfilename'] = 'pertsonalizatutakohizkuntza-esportazioa-{$a->lang}.zip';
$string['filter'] = 'Iragazi kateak';
$string['filtercomponent'] = 'Erakutsi osagai hauek dituzten kateak';
$string['filtercustomized'] = 'Pertsonalizatuak soilik';
$string['filtermodified'] = 'Soilik saio honetan aldatutakoak';
$string['filteronlyhelps'] = 'Laguntza soilik';
$string['filtershowstrings'] = 'Erakutsi kateak';
$string['filterstringid'] = 'Kate-identifikatzailea';
$string['filtersubstring'] = 'Ondokoa duten kateak soilik';
$string['headingcomponent'] = 'Osagaia';
$string['headinglocal'] = 'Pertsonalizazio lokala';
$string['headingstandard'] = 'Testu estandarra';
$string['headingstringid'] = 'Katea';
$string['import'] = 'Inportatu pertsonalizatutako kateak';
$string['import_all'] = 'Sortu edo eguneratu osagaietako kate guztiak';
$string['import_mode'] = 'Inportatze-modua';
$string['import_new'] = 'Sortu soilik pertsonalizazio lokalik ez duten kateak';
$string['import_update'] = 'Eguneratu soilik pertsonalizazio lokala duten kateak';
$string['importfile'] = 'Inportatu fitxategia';
$string['langpack'] = 'Hizkuntza-osagaia(k)';
$string['markinguptodate'] = 'Pertsonalizazioa eguneratu gisa markatzen';
$string['markinguptodate_help'] = 'Pertsonalizatutako itzulpena zaharkitua gera daiteke katea zure gunean pertsonalizatu zenetik jatorrizko Ingelesezko edo itzulpen ofiziala aldatu bada. Berrikusi pertsonalizatutako itzulpena. Eguneratuta irizten badiozu, markatu laukitxoa. Bestela, editatu ezazu.';
$string['markuptodate'] = 'markatu eguneratu gisa';
$string['modifiedno'] = 'Ez dago aldatutako katerik gordetzeko.';
$string['modifiednum'] = '{$a} aldatutako kate daude. Aldaketa horiek zure hizkuntza-paketean gorde nahi dituzu?';
$string['nolocallang'] = 'Ez da aurkitu kate lokalik.';
$string['nostringsfound'] = 'Ez da katerik aurkitu. Mesedez, aldatu iragazkiaren ezarpenak.';
$string['notice_ignorenew'] = '{$a->component}/{$a->stringid} katea baztertuko da ez dagoelako pertsonalizatuta.';
$string['notice_ignoreupdate'] = '{$a->component}/{$a->stringid} katea baztertuko da dagoeneko zehaztuta dagoelako.';
$string['notice_inexitentstring'] = 'Ez da {$a->component}/{$a->stringid} katea aurkitu.';
$string['notice_missingcomponent'] = '{$a->component} osagaia falta da.';
$string['notice_success'] = '{$a->component}/{$a->stringid} katea ondo eguneratu da.';
$string['placeholder'] = 'Gakoak';
$string['placeholder_help'] = 'Gakoak `{$a}` edo `{$a->zerbait}` moduko adierazpen bereziak dira. Katea erakusten denean balio batekin ordezkatzen dira.

Garrantzitsua da gakoa jatorrizko katean dagoen modu zehatzean kopiatzea. Ez ezazu euskaratu edo aldatu bere norabidea.';
$string['placeholderwarning'] = 'kateak gakoren bat dauka';
$string['pluginname'] = 'Hizkuntzen pertsonalizazioa';
$string['privacy:metadata'] = 'Hizkuntzen pertsonalizazioa pluginak ez du datu pertsonalik biltzen.';
$string['savecheckin'] = 'Gorde aldaketak hizkuntza-paketean';
$string['savecontinue'] = 'Aplikatu aldaketak eta jarraitu editatzen';
