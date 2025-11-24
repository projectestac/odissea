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
 * Strings for component 'qtype_ddmarker', language 'lt', version '4.5'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Dar {no} tuščios žymės';
$string['alttext'] = 'Alt. tekstas';
$string['answer'] = 'Atsakymas';
$string['bgimage'] = 'Fono vaizdas';
$string['clearwrongparts'] = 'Perkelti neteisingai padėtas žymes atgal į numatytąją pradžios poziciją po paveiksliuku';
$string['coords'] = 'Koordinatės';
$string['correctansweris'] = 'Teisingas atsakymas yra:{$a}';
$string['draggableimage'] = 'Velkamas paveiksliukas';
$string['draggableitem'] = 'Velkamas elementas';
$string['draggableitemheader'] = 'Velkamas elementas {$a}';
$string['draggableitemtype'] = 'Tipas';
$string['draggableword'] = 'Velkamas tekstas';
$string['dropbackground'] = 'Fono paveikslėlis žymių metimui';
$string['dropzone'] = 'Metimo zona {$a}';
$string['dropzoneheader'] = 'Metimo zonos';
$string['dropzones'] = 'Metimo zonos';
$string['dropzones_help'] = 'Numetimo zonos gali būti apibrėžtos koordinatėmis arba nuvilktos į vietą aukščiau esančioje peržiūroje.

Pirmiausia pasirinkus formą (apskritimą, stačiakampį arba daugiakampį), peržiūros viršuje, kairėje, bus pridėta nauja kritimo zonos forma. Gali būti naudinga sumažinti teisingo atsakymo zoną, kad galėtumėte matyti peržiūrą redaguodami metimo zonas.

Formos redagavimas pradedamas spustelėjus figūrą peržiūroje, kad būtų rodomi redagavimo įrankiai. Galite perkelti figūrą naudodami centrinį redagavimo elementą arba koreguoti figūros matmenis viršūnių elementais.

Tik daugiakampiams, laikant valdymo mygtuką (komandų mygtuką, jei naudojate „Mac“) ir spustelėjus viršūnės rankenėlę, daugiakampyje bus pridėta nauja viršūnė. Išlaikykite kuo paprastesnę daugiakampio formą, nekertant linijų.

Trys formos, naudojančios koordinates tokiu būdu:

* Apskritimas: centras_x, centras_y; spindulys<br>pavyzdžiui: <code>80, 100; 50</code>
* Daugiakampis: x1, y1; x2, y2; ...; xn, yn<br>pavyzdžiui: <code>20, 60; 100, 60; 20, 100</code>
* Stačiakampis: viršus_kairė_x, viršus_kairė_y; plotis, aukštis<br>pavyzdžiui: <code>20, 60; 80, 40</code>';
$string['followingarewrong'] = 'Žymės įdėtos netinkamoje srityje: {$a}.';
$string['followingarewrongandhighlighted'] = 'Neteisingai įdėtos žymės: {$a}. Paryškinta(-os) žymė(-s) dabar rodoma(-os) su teisinga vieta(-omis). Spauskite ant žymės, kad paryškintumėte leistiną sritį.';
$string['formerror_dragrequired'] = 'Prie šio klausimo turite pridėti bent vieną žymę.';
$string['formerror_droprequired'] = 'Šiam klausimui turite nustatyti bent vieną metimo zoną.';
$string['formerror_nobgimage'] = 'Jūs turite pasirinkti paveiksliuką, kuri naudosite kaip foną "vilkti ir palikti" plotui.';
$string['formerror_noitemselected'] = 'Jūs nurodėte metimo zoną, bet nepasirinkote žymės, kuri turi būti perkelta į zoną.';
$string['formerror_nosemicolons'] = 'Jūsų koordinačių eilutėje nėra kabliataškių. Jūsų koordinatės {$a->shape} turėtų būti išreikštos kaip - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Tik „{$a}“ žymės leidžiamos vertintojo žymoje.';
$string['formerror_onlyusewholepositivenumbers'] = 'Prašome naudoti tik sveikus teigiamus skaičius apibrėžti x, y koordinatėms ir/ar formos pločiui ir aukščiui. Jūsų koordinatės {$a->shape} turėtų būti išreikštos kaip - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Daugiakampiui Jūs turite nurodyti bent 3 taškus. Jūsų koordinatės {$a->shape} turėtų būti išreikštos kaip - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Jūs įvedėte tas pačias koordinates du kartus. Kiekvienas taškas turi būti unikalus. Jūsų koordinatės {$a->shape} turėtų būti išreikštos kaip - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'Forma, kurią nustatėte išeina iš fono paveikslėlio ribų.';
$string['formerror_toomanysemicolons'] = 'Yra per daug kabliataškiais atskirtų dalių koordinatėse, kurias Jūs nurodėte. Jūsų koordinatės {$a->shape} turėtų būti išreikštos kaip - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'Plotis ir aukštis, kuriuos jūs nurodėte, yra neatpažįstami. Jūsų koordinatės {$a->shape} turėtų būti išreikštos kaip - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'x, y koordinatės, kurias Jūs nurodėte yra neatpažįstamos. Jūsų koordinatės {$a->shape} turėtų būti išreikštos kaip - {$a->coordsstring}.';
$string['infinite'] = 'Begalinis';
$string['marker'] = 'Žymė';
$string['marker_n'] = 'Žymė {no}';
$string['markers'] = 'Žymės';
$string['nolabel'] = 'Nėra žymės teksto';
$string['noofdrags'] = 'Skaičius';
$string['pleasedragatleastonemarker'] = 'Jūsų atsakymas yra nebaigtas; Jūs turite padėti bent vieną žymę ant paveiksliuko.';
$string['pluginname'] = 'Vilkti ir palikti žymes';
$string['pluginname_help'] = '"Vilkti ir palikti žymes" reikalauja respondentų imti teksto žymes ir mesti jas ant numatytos metimo zonos, ant fono paveiksliuko.';
$string['pluginname_link'] = 'question/type/ddmarker';
$string['pluginnameadding'] = 'Pridedamas vilkti ir palikti žymes';
$string['pluginnameediting'] = 'Redaguojamas vilkti ir palikti žymes';
$string['pluginnamesummary'] = 'Žymės yra velkamos ir paliekamos ant fono paveiksliuko.

Pastaba: šio tipo klausimai nepasiekiami žmonėms, turintiems regos negalią.';
$string['previewareaheader'] = 'Peržiūra';
$string['previewareamessage'] = 'Pasirinkite fono paveiksliuko failą, įveskite tekstą žymėms ir apibrėžkite metimo zonas ant fono paveiksliuko, kur jos turėtų būti velkamos.';
$string['privacy:metadata'] = 'Vilkti ir palikti žymes klausimo tipo papildinys leidžia klausimų autoriams nustatyti numatytąsias parinktis kaip naudotojo nuostatas.';
$string['privacy:preference:defaultmark'] = 'Numatytasis tam tikro klausimo įvertinimas.';
$string['privacy:preference:penalty'] = 'Bauda už kiekvieną neteisingą bandymą, kai klausimai vykdomi naudojant "Interaktyvus su keliais bandymais" arba "Prisitaikantis režimas".';
$string['privacy:preference:shuffleanswers'] = 'Ar atsakymai turi būti automatiškai maišomi.';
$string['refresh'] = 'Atnaujinti peržiūrą';
$string['shape'] = 'Forma';
$string['shape_circle'] = 'Apskritimas';
$string['shape_circle_coords'] = 'x,y;r (kur x,y yra apskritimo centro koordinatės ir r yra spindulys)';
$string['shape_circle_lowercase'] = 'apskritimas';
$string['shape_polygon'] = 'Daugiakampis';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4... (kur x1, y1 yra pirmos viršūnės koordinatės, x2, y2 yra antros ir t.t. Nereikia kartoti pirmos viršūnės koordinačių, kad uždaryti daugiakampį.)';
$string['shape_polygon_lowercase'] = 'daugiakampis';
$string['shape_rectangle'] = 'Stačiakampis';
$string['shape_rectangle_coords'] = 'x,y;w,h (kur x,y stačiakampio viršutinio kairiojo kampo koordinatės ir w, h yra stačiakampio plotis ir aukštis)';
$string['shape_rectangle_lowercase'] = 'stačiakampis';
$string['showmisplaced'] = 'Pažymėkite metimo zonas, kurios neturėjo teisingos žymės, numestos ant jų';
$string['shuffleimages'] = 'Maišyti metamus elementus kiekvieną kartą bandant klausimą';
$string['stateincorrectlyplaced'] = 'Nurodyti, kokios žymės neteisingai sudėtos';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Metimo zona {$a}';
$string['ytop'] = 'Viršus';
