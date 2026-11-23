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
 * Strings for component 'qtype_geogebra'
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] = 'Gehitu murrizketak (baldintzak) aldagaiei.';
$string['addmorevarblanks'] = '{no} hutsune aldagai gehiagoretzat';
$string['answerinvalid'] = 'Erantzunaren karaktere-zerrenda ez da onargarria. Honelakorik ez litzateke gertatu behar.';
$string['answermissing'] = 'Ez da erantzunik jaso. Beharbada Javascript desgaitua dago zure nabigatzailean edo bestelako errore ezezagunen bat gertatu da.';
$string['answervar'] = 'Sailkapen automatikorako aldagaiak';
$string['answervar_help'] = 'Nota automatikoki jartzeko: Ikasleak galdera (neurri batean) ongi erantzun badu, "egia" balioa hartuko duen GeoGebrako objektu boolear baten izena. Aldagai boolear guztiak batuko dira. Konbinaketa 100% baino handiagoa den edozein kasutan erantzuna ontzat hartuko da baina 100% balioa zehazki hartzen duen konbinaketaren bat egon behar da gutxienez. Nota eskuz jartzeko, hutsik utzi.';
$string['applet_advanced_settings'] = 'Ezarpen Aurreratuak...';
$string['constraints'] = 'Murrizketak (baldintzak)';
$string['constraints_help'] = 'Ba al dago irristailuaren aukeren bidez ezarri ezin daitekeen a<b bezalako aldagaiaren baldintzarik? Komen bidez bereizi behar dira. Onartutako erlazioak hauek dira: <, <=, >,>= . Berdintza behar baduzu, aldagai berdina erabili behar duzu GeoGebra lan-orria sortzerakoan. Tarte dinamikoak ez daude erabilgarri; adibidez, irristailu baten max/min aldagai baten bidez definitzea.';
$string['constraintswrongortoohard'] = '{$a->inequalities} ez dira zuzenak edota betetzen zailak dira. {$a->tries} aldiz saiatu gara (indarrez) {$a->time} segundoan. Beharbada etorkizunean metodo hoberen bat erabiliko dugu...';
$string['dragndrop'] = 'Arrastatu GeoGebra-artxiboa GeoGebra-appleta eremuko edozein tokitara';
$string['enable_label_drags'] = 'Gaitu Etiketen Arrastatzea';
$string['enable_right_click'] = 'Gaitu Eskuin Klika eta Teklatuz Editatzea';
$string['enable_shift_drag_zoom'] = 'Gaitu Maius-arrastatzea eta Zooma';
$string['feedback'] = 'Aldagaia egia denean agertu beharreko erantzuna.';
$string['feedback_help'] = 'Erantzuna automatikoki jasotzen da GeoGebra-artxiboko aldagaiaren izenburutik.';
$string['geogebraapplet'] = 'GeoGebra-eraikuntza';
$string['getvars'] = 'Appletetik  eskuratu zorizko bihur daitezkeen aldagaiak';
$string['ggbfilemissing'] = 'Ez da 64 oinarriko karaktere-zerrenda aurkitu. Beharbada Javascript desgaitua dago zure nabigatzailean (edo bestelako errore ezezagunen bat gertatu da).';
$string['ggbturl'] = 'GeoGebrako Lan-orriaren URL edo ID-a';
$string['ggbturl_help'] = 'GeoGebran partekatzeko botoia erabili, esteka kopiatu eta itsats dezakezu edota GeoGebra-biltegia erabil dezakezu. Eraikuntza eta parametroak datu-basean gordetzen dira. Eraikuntza ez da GeoGebratik birkargatuko eskatu ezean. Eraikuntzaren IDa eta partekatzeko kodea ematea ere posible da.';
$string['ggbxmlmissing'] = 'Ez da XML karaktere-zerrenda aurkitu erantzunan. Beharbada Javascript desgaitua dago zure nabigatzailean (edo bestelako errore ezezagunen bat gertatu da).';
$string['invalidinequality'] = '{$a} ez da onargarria';
$string['isexercise'] = 'Erabili GeoGebra-ariketa galdera egiaztatzeko';
$string['isexercise_help'] = 'Eraikuntzak ariketa egiaztatzeko erabil daitezkeen erabiltzaileak sortutako tresnak ditu. Kontuz: Kasu horretan hurrengo erantzunak ezin dira aplikatu!';
$string['israndomized'] = 'Ba al dago zorizko bihurtu behar den aldagairik?';
$string['loadapplet'] = '(Ber)kargartu eta erakutsi eraikuntza';
$string['loadapplet_help'] = '(Bir)kargatu appleta GeoGebratik eta gorde bertsio berria datu-basean GeoGebratik.';
$string['mineqmax'] = '{$a} aldagaia zorizko bihurtzeko, ez dira bere min eta max egoki zehaztu. Beharbada ez dituzu irristailuaren min eta max zehaztu edota objektua ez da irristailua. Zure Geogebra-artxiboan zuzendu beharko duzu segur aski.';
$string['minplusstepgtmax'] = 'Minimoa gehi gehikuntza {$a} aldagaiaren balio maximoa baino handiagoa da; zure Geobebra-artxiboan zuzendu beharko duzu segur aski.';
$string['noappletloaded'] = 'Ez da appletik kargatu! Egiaztatu URLa zuzena dela eta appletik ikusten ote duzun esteka aukeratu edota appleta (bir)kargatu ostean';
$string['nofractionsumeq1'] = 'Nota-sortaren baten batura gutxienez 100% izan behar da';
$string['pluginname_help'] = 'GeoGebra erabiliz ikasleek erantzun ditzaketen galderak';
$string['pluginnameadding'] = 'Gehitu GeoGebra-galdera';
$string['pluginnameediting'] = 'Editatu GeoGebra-galdera';
$string['pluginnamesummary'] = 'Galdetegia betetzerakoan galderak erakusteko eta egiaztatzeko GeoGebrak erabiltzen duen kalkulatutako erantzunen bertsioa.';
$string['randomizedbutnovars'] = 'Galdera zorizkoa izatea aukeratu duzu baina ez duzu zorizko bihurtu behar den aldagai egokirik zehaztu.';
$string['randomizedvar'] = 'Ausazko bihurtu beharreko aldagaiak';
$string['randomizedvar_help'] = 'Zorizko bihurtu behar diren aldagaiak (komen bidez bereizita). Erabili GeoGebrako irristailuaren aukerak Min, Max eta gehikuntza ezartzeko. Aldagai hauek galderaren testuan erabil daitezke giltza artean idatziz; adibidez: {a}';
$string['show_algebra_input'] = 'Erakutsi Tresna-barra';
$string['show_menu_bar'] = 'Erakutsi Menua';
$string['show_reset_icon'] = 'Erakutsi Eraikuntza Berrezartzeko Ikonoa';
$string['show_tool_bar'] = 'Erakutsi Tresna-barra';
$string['stepzero'] = '{$a} aldagaiaren gehikuntza 0 da; ez duzu irristailuaren gehikuntza zehaztu edota objektua ez da irristailua. Zure Geogebra-artxiboan zuzendu beharko duzu segur aski.';
$string['useafile'] = '... edota erabili ggb-artxiboren bat';
$string['valuecheckedfor'] = 'Zuzentasuna egiaztatzeko erabiltzen den GeoGebrako objektu boolearra.';
$string['variablenamewrong'] = 'Ezin izan da izen hori duen aldagairik aurkitu GeoGebra-artxiboan.';
$string['variableno'] = '{$a} Aldagaia';
$string['variables'] = 'Aldagaiak';
$string['willbereadfromfile'] = 'GeoGebran irakurriko da... (ikusi laguntza-botoia)';
