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
 * Strings for component 'qtype_numerical', language 'eu', version '3.11'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Onartutako errorea';
$string['addmoreanswerblanks'] = 'Zuriuneak {no} erantzun gehiagotarako';
$string['addmoreunitblanks'] = 'Zuriuneak {no} unitate gehiagotarako';
$string['answercolon'] = 'Erantzuna:';
$string['answererror'] = 'Errorea';
$string['answermustbenumberorstar'] = 'Erantzunak zenbakia behar du izan, adibidez -1.234 edo 3e8, eta bestela \'*\'.';
$string['answerno'] = '{$a} erantzuna';
$string['decfractionofquestiongrade'] = 'galderaren kalifikazioaren zatiki gisa (0-1)';
$string['decfractionofresponsegrade'] = 'erantzunaren kalifikazioaren zatiki gisa (0-1)';
$string['decimalformat'] = 'hamartarrak';
$string['editableunittext'] = 'testua sartzeko elementua';
$string['errornomultiplier'] = 'Unitate honetarako biderkatzailea adierazi behar duzu';
$string['errorrepeatedunit'] = 'Ezin duzu izen bereko bi unitate izan';
$string['geometric'] = 'Geometrikoa';
$string['invalidnumber'] = 'Zenbaki baliagarria idatzi behar duzu.';
$string['invalidnumbernounit'] = 'Zenbaki baliagarria idatzi behar duzu. Ez sartu unitatea zure erantzunean.';
$string['invalidnumericanswer'] = 'Sartu dituzun erantzunetako bat ez da zenbaki baliagarria.';
$string['invalidnumerictolerance'] = 'Sartu dituzun tolerantzietako bat ez da zenbaki baliagarria.';
$string['leftexample'] = 'ezkerrean, adibidez $1.00 edo £1.00';
$string['manynumerical'] = 'Unitateak aukerakoak dira. Unitatea sartuz gero, erantzunak 1. Unitatera bihurtzeko erabiltzen da kalifikatu aurretik.';
$string['multiplier'] = 'Biderkatzailea';
$string['nominal'] = 'Nominala';
$string['noneditableunittext'] = 'Editatu EZIN den testua 1. Unitaterako';
$string['nonvalidcharactersinnumber'] = 'Zenbakian karaktere EZ baliagarriak';
$string['notenoughanswers'] = 'Gutxienez erantzun bat zehaztu behar duzu';
$string['nounitdisplay'] = 'Ez dago kalifikaziorako unitaterik';
$string['numericalmultiplier'] = 'Biderkatzailea';
$string['numericalmultiplier_help'] = 'Biderkatzailea erantzun zuzenaren zenbakia biderkatuko duen faktorea da.

Lehen unitatearen (1. Unitatea) lehenetsitako biderkatzailea 1 da.  Beraz erantzun zuzenaren zenbakia 5500 bada eta modu lehenetsian 1 biderkatzailea duen 1. Unitate bezala W jartzen baduzu, erantzun zuzena 5500 W izango da.

Honi kW unitatea gehitzen badiozu 0.001 biderkatzailearekin, 5.5 kW ere erantzun zuzen gisa hartuko da. Honek esan nahi du 5500W eta 5.5kW erantzun zuzentzat hartuko direla.

Kontuan izan onartutako errorea ere biderkatzen dela, eta beraz 100W-ko errorea 0.1kW errore bihurtuko dela.';
$string['oneunitshown'] = '1. Unitatea erantzun kutxaren ondoan automatikoki erakusten da.';
$string['onlynumerical'] = 'Unitateak ez dira ezertarako erabiltzen. Zenbakizko erantzuna baino ez da kalifikatuko.';
$string['pleaseenterananswer'] = 'Mesedez, idatzi erantzun bat.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Mesedez sartu zure erantzuna milakakoen banatzailea ({$a}) erabili gabe.';
$string['pluginname'] = 'Zenbakizkoa';
$string['pluginname_help'] = 'Ikaslearen ikuspuntutik, zenbakizko galdera bat erantzun laburreko galdera baten modukoa da. Ezberdintasuna zenbakizko erantzunek errore onargarri bat izan dezaketela da. Honek muga batzuen barruko erantzunak erantzun bakar gisa kalifikatzeko aukera ematen du. Esaterako, erantzun zuzena 10 bada eta errore onargarria 2 bada, 8 eta 12 arteko erantzun guztiak zuzentzat hartuko dira.';
$string['pluginnameadding'] = 'Zenbakizko galdera bat gehitzen';
$string['pluginnameediting'] = 'Zenbakizko galdera editatzen';
$string['pluginnamesummary'] = 'Zenbakizko erantzun bat behar du, gehienetan unitatetan, eta erantzun-tarte batekin alderatuta kalifikatzen da, malgutasun-tartearekin.';
$string['privacy:metadata'] = 'Zenbakizkoa galdera mota pluginak egileari aukera lehenetsiak erabiltzaile hobespen gisa gordetzea baimentzen dio.';
$string['privacy:preference:defaultmark'] = 'Emandako galderarentzako puntuazio lehenetsia.';
$string['privacy:preference:multichoicedisplay'] = 'Unitateak testu-eremu gisa, aukera anizkoitz gisa edo zabaltzen den menu gisa erakutsiko den.';
$string['privacy:preference:penalty'] = 'Saiakera ez-zuzen bakoitzaren penalizazioa galderek \'Interaktiboa hainbat saiakerarekin\' ala \'Egokitze modua\' jokaera erabiltzen dutenean.';
$string['privacy:preference:unitgradingtypes'] = 'Unitatearen penalizazioa erantzunaren kalifikazioaren zatiki gisa (0-1) edo galderaren kalifikazioaren zatiki gisa aplikatuko den.';
$string['privacy:preference:unitpenalty'] = 'Erantzunaren edo galderen zein zatiki aplikatuko da?';
$string['privacy:preference:unitrole'] = 'Unitatea beharrezkoa, aukerazkoa edo desgaituta egongo den.';
$string['privacy:preference:unitsleft'] = 'Unitatea ezkerrean (esaterako $ edo £) edo eskuinean (esaterako kg. edo km.) erakutsiko den.';
$string['relative'] = 'Erlatiboa';
$string['rightexample'] = 'eskuinean, adibidez 1.00cm edo 1.00km';
$string['selectunit'] = 'Aukeratu unitate bat';
$string['selectunits'] = 'Aukeratu unitateak';
$string['studentunitanswer'] = 'Unitateak sartu behar dira erabilita';
$string['tolerancetype'] = 'Tolerantzia mota';
$string['unit'] = 'Unitatea';
$string['unitappliedpenalty'] = 'Kalifikazio hauek {$a}-ko penalizazioa dute unitate egokia ez jartzeagatik.';
$string['unitchoice'] = 'aukera anizkoitzeko aukeraketa';
$string['unitedit'] = 'Editatu unitatea';
$string['unitgraded'] = 'Unitatea derrigorrezkoa da, eta kalifikatuko da.';
$string['unithandling'] = 'Unitatearen erabilera';
$string['unitincorrect'] = 'Ez duzu unitate zuzena eman.';
$string['unitmandatory'] = 'Derrigorrezkoa';
$string['unitmandatory_help'] = '* Erantzuna idatzitako unitatea erabilita kalifikatuko da.

* Unitatearen penalizazioa aplikatuko da unitatearen eremua hutsik utziz gero.';
$string['unitnotselected'] = 'Unitatea aukeratu behar duzu.';
$string['unitonerequired'] = 'Gutxienez unitate bat zehaztu behar duzu';
$string['unitoptional'] = 'Aukerako unitatea';
$string['unitoptional_help'] = '* Unitatearen eremua hutsik ez badago, erantzuna unitate hori erabilita kalifikatuko da.

* Unitatea gaizki idatzita badago edo ezezaguna bada, erantzuna baliogabekotzat hartuko da.';
$string['unitpenalty'] = 'Unitatearen penalizazioa';
$string['unitpenalty_help'] = 'Penalizazioa aplikatuko da

* unitatearen eremuan unitate izen egokia sartzen ez bada, edo
* unitatea balioaren eremuan sartzen bada';
$string['unitposition'] = 'Unitateen kokapena';
$string['units'] = 'Unitateak';
$string['unitselect'] = 'zabaltzen den menua';
$string['unitx'] = '{no}. Unitatea';
$string['validnumberformats'] = 'Zenbaki-formatu onargarriak';
$string['validnumberformats_help'] = '* zenbaki arruntak 13500.67, 13 500.67, 13500,67 edo 13 500,67

* zure hizkuntza paketearen ezarpenak (langconfig.php fitxategia) koma(,) erabiltzen badu *beti* milakakoen banatzaile bezala hamartarren puntua (.) jarri, adibidez 13,500.67 edo 13,500.

* era esponentzialetarako, adibidez 1.350067 * 10<sup>4</sup>, erabili 1.350067 E4 edo 1.350067 E04';
$string['validnumbers'] = '13500.67, 13 500.67, 13,500.67, 13500,67, 13 500,67, 1.350067 E4 edo 1.350067 E04';
$string['xmustbenumeric'] = '{$a}(e)k zenbakia izan behar du.';
$string['xmustnotbenumeric'] = '{$a}(e)k ezin da zenbakia.';
$string['youmustenteramultiplierhere'] = 'Biderkatzaile bat zehaztu behar duzu';
