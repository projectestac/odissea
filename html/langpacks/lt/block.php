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
 * Strings for component 'block', language 'lt', version '4.5'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addblock'] = 'Pridėti {$a} bloką';
$string['anypagematchingtheabove'] = 'Bet kuris puslapis atitinka esantį viršuje';
$string['appearsinsubcontexts'] = 'Rodoma antriniuose kontekstuose';
$string['assignrolesinblock'] = 'Priskirti vaidmenis {$a} bloke';
$string['blocksdrawertoggle'] = 'Slėpti/rodyti blokus';
$string['blocksettings'] = 'Bloko parametrai';
$string['bracketfirst'] = '{$a} (pirmas)';
$string['bracketlast'] = '{$a} (paskutinis)';
$string['configureblock'] = 'Konfigūruoti {$a} bloką';
$string['contexts'] = 'Puslapių kontekstai';
$string['contexts_help'] = 'Kontekstai yra labiau specifiniai puslapių tipai, kur šis blokas gali būti atvaizduojamas originalaus bloko vietoje.Jūs turėsite skirtingus pasirinkimus, priklausomai nuo originalaus bloko vietos ir jūsų dabartinės vietos. Pavyzdžiui, jūs galite apriboti bloką atvaizduoti tik kurso diskusijų puslapiuose pridėdami bloką prie kurso (padarant jį matomą visiem puslapiams), tada nuėjus į forumą ir vėl redaguojant bloko nustatymus, apriboti rodymą tik forumo puslapiams.';
$string['createdat'] = 'Tikroji bloko vieta';
$string['createdat_help'] = 'Pradinė vieta, kurioje buvo sukurtas blokas. Dėl bloko nustatymų jis gali būti rodomas kitose pradinės vietos vietose (kontekstuose). Pavyzdžiui, kurso puslapyje sukurtas blokas gali būti rodomas to kurso veikloje. Svetainės pagrindiniame puslapyje sukurtas blokas gali būti rodomas visoje svetainėje.';
$string['defaultregion'] = 'Numatytoji sritis';
$string['defaultregion_help'] = 'Temos gali apibrėžti vieną ar daugiau pavadintų blokų regionų kur blokai yra atvaizduojami. Šis nustatymas nusako kur šis blokas turėtų atsirasti pagal numatytą. Regionas gali būti perrašytas specifiniuose puslapiuose, jei reikia.';
$string['defaultweight'] = 'Numatytoji svarba';
$string['defaultweight_help'] = 'Numatytas svoris leidžia jums pasirinkti kur maždaug blokas turėtų atsirasti pasirinktame regione, viršuje ar apačioje. Galutinė padėtis yra apskaičiuojama nuo visų blokų tame regione (pavyzdžiui, tik vienas blokas gali būti viršuje). Ši reikšmė gali būti perrašyta specifiniuose puslapiuose, jei reikia.';
$string['deleteblock'] = 'Ištrinti {$a} bloką';
$string['deleteblockcheck'] = 'Tai ištrins bloką {$a}.';
$string['deleteblockinprogress'] = 'Vykdomas {$a} bloko pašalinimas...';
$string['deleteblockwarning'] = '<p>Ketinate ištrinti bloką, kuris rodomas kitur.</p><p>Pradinė bloko vieta: {$a->location}<br />Rodyti puslapių tipuose:{$a->pagetype}</ p><p>Ar tikrai norite tęsti?</p>';
$string['deletecheck'] = 'Ištrinti {$a} bloką!';
$string['deletecheck_modal'] = 'Naikinti bloką?';
$string['hideblock'] = 'Paslėpti {$a} bloką';
$string['hidepanel'] = 'Slėpti skydelį';
$string['moveblock'] = 'Perkelti {$a} bloką';
$string['moveblockafter'] = 'Perkelti bloką po {$a} bloku';
$string['moveblockbefore'] = 'Perkelti bloką prieš {$a} bloką';
$string['moveblockinregion'] = 'Perkelti bloką į {$a} regioną';
$string['movingthisblockcancel'] = 'Perkeliamas šis blokas ({$a})';
$string['myblocks'] = 'Mano blokai';
$string['onthispage'] = 'Šiame puslapyje';
$string['pagetypes'] = 'Puslapių tipai';
$string['pagetypewarning'] = 'Ankščiau nurodytas puslapio tipas neegzistuoja. Prašau pasirinkti jums labiausiai tinkamą puslapį iš žemiau esančių.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Įrašo, kai naudotojas prijungė bloką';
$string['privacy:metadata:userpref:hiddenblock'] = 'Įrašo, kada naudotojas sutraukė / paslėpė bloką';
$string['privacy:request:blockisdocked'] = 'Nurodo, ar blokas buvo prijungtas prie doko';
$string['privacy:request:blockishidden'] = 'Nurodo, ar blokas buvo paslėptas / sutrauktas';
$string['region'] = 'Sritis';
$string['restrictpagetypes'] = 'Apriboti šiuos puslapių tipus';
$string['showblock'] = 'Rodyti {$a} bloką';
$string['showoncontextandsubs'] = 'Rodyti {$a} ir visuose čia esančiuose puslapiuose';
$string['showoncontextonly'] = 'Rodyti tik {$a}';
$string['showonentiresite'] = 'Rodyti visoje svetainėje';
$string['showonfrontpageandsubs'] = 'Rodyti svetainės pradiniame puslapyje ir visuose puslapiuose, įtrauktuose į svetainės pradinį puslapį';
$string['showonfrontpageonly'] = 'Rodyti tik svetainės pradiniame puslapyje';
$string['subpages'] = 'Konkreti puslapio dalis';
$string['thisspecificpage'] = 'Šis konkretus puslapis (puslapis {$a})';
$string['visible'] = 'Matoma';
$string['weight'] = 'Svarba';
$string['wherethisblockappears'] = 'Kur rodomas blokas';
