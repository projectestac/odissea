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
 * Strings for component 'gradingform_rubric', language 'eu', version '3.11'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Gehitu irizpidea';
$string['additionalfeedback'] = 'Feedback gehigarria';
$string['alwaysshowdefinition'] = 'Baimendu ikasleei erabilitako errubrika aurreikusten (bestela, errubrika kalifikatu ondoren baino ez da ikusiko).';
$string['backtoediting'] = 'Itzuli editatzera';
$string['confirmdeletecriterion'] = 'Ziur zaude irizpidea ezabatu nahi duzula?';
$string['confirmdeletelevel'] = 'Ziur zaude maila hau ezabatu nahi duzula?';
$string['criterion'] = '{$a}. irizpidea';
$string['criterionaddlevel'] = 'Gehitu maila';
$string['criteriondelete'] = 'Ezabatu irizpidea';
$string['criterionduplicate'] = 'Bikoiztu irizpidea';
$string['criterionempty'] = 'Egin klik irizpidea editatzeko';
$string['criterionmovedown'] = 'Mugitu behera';
$string['criterionmoveup'] = 'Mugitu gora';
$string['criterionremark'] = '{$a->description} irizpidearen iruzkina: {$a->remark}';
$string['definerubric'] = 'Zehaztu errubrika';
$string['description'] = 'Deskribapena';
$string['enableremarks'] = 'Baimendu kalifikatzaileari irizpide bakoitzerako testu-iruzkinak gehitzea';
$string['err_mintwolevels'] = 'Irizpide bakoitzak gutxienez bi maila izan behar du';
$string['err_nocriteria'] = 'Errubrikak gutxienez irizpide bat izan behar du';
$string['err_nodefinition'] = 'Mailaren definizioa ezin da hutsik egon';
$string['err_nodescription'] = 'Irizpidearen deskribapena ezin da hutsik egon';
$string['err_novariations'] = 'Irizpide maila guztiek ezin dute puntuazio berdina izan';
$string['err_scoreformat'] = 'Maila bakoitzeko puntu-kopuruak baliozko zenbaki bat izan behar du';
$string['err_totalscore'] = 'Errubrikaren bidez kalifikatzean gehienez eman daitekeen puntu-kopuruak zero baino handiagoa izan behar du';
$string['gradingof'] = '{$a} kalifikatzen';
$string['level'] = 'Maila {$a->definition}, {$a->score} puntuak.';
$string['leveldefinition'] = '{$a} mailaren definizioa';
$string['leveldelete'] = 'Ezabatu {$a} maila';
$string['levelempty'] = 'Egin klik maila editatzeko';
$string['levelsgroup'] = 'Maila-taldeak';
$string['lockzeropoints'] = 'Kalkulatu gutxieneko kalifikazioa errubrikaren gutxieneko puntuazioa izan dadin.';
$string['lockzeropoints_help'] = 'Ezarpen hau soilik aplikatzen da errubrikaren irizpide guztien gutxieneko puntuazioen batura 0 baino handiagoa bada. Markatuz gero, jardueran lor daitekeen gutxieneko kalifikazioa errubrikaren irizpide guztien gutxieneko puntuazioa izango da. Markatu gabe utziz gero, errubrikaren gutxieneko puntuazioa aktibitatearen gutxieneko puntuazioa izateko egokituko da (0 izango da eskala bat erabiltzen ez bada).';
$string['name'] = 'Izena';
$string['needregrademessage'] = 'Errubrikaren definizioa aldatu da ikasle hau kalifikatu ondoren. Ikasleak ezin du ikusi errubrika hau egiaztatu eta kalifikazioa eguneratu arte.';
$string['notset'] = 'Zehaztu gabe';
$string['pluginname'] = 'Errubrika';
$string['pointsvalue'] = '{$a} puntu';
$string['previewrubric'] = 'Aurreikusi errubrika';
$string['privacy:metadata:criterionid'] = 'Kalifikatzen den irizpidearen identifikatzailea';
$string['privacy:metadata:fillingssummary'] = 'Errubrikak sortutako erabiltzailearen kalifikazioaren inguruko informazioa gordetzen du';
$string['privacy:metadata:instanceid'] = 'Jarduera bateko kalifikazioaren identifikatzailea';
$string['privacy:metadata:levelid'] = 'Errubrikan lortutako maila';
$string['privacy:metadata:remark'] = 'Ebaluatutako errubrika-irizpidearekin lotutako iruzkinak';
$string['regrademessage1'] = 'Aldaketak egin behar dituzu kalifikatzeko erabili den errubrika batean. Mesedez, adierazi orain arteko kalifikazioak berrikusi behar diren. Ezarpen hau gaitzen baduzu, errubrika ikasleei ezkutatuko zaie euren elementua berriz kalifikatu arte.';
$string['regrademessage5'] = 'Kalifikatzeko erabilia izan den errubrika batean aldaketa nabarmenak egin behar dituzu. Kalifikazio liburuaren balioa ez da aldatuko, baina errubrika ikasleei ezkutatuko zaie euren elementua berriz kalifikatu arte.';
$string['regradeoption0'] = 'Ez markatu berriz kalifikatzeko';
$string['regradeoption1'] = 'Markatu berriz kalifikatzeko';
$string['restoredfromdraft'] = 'OHARRA: pertsona hau kalifikatzeko azken saiakera ez da ondo gorde, beraz, zirriborro-kalifikazioak berreskuratu dira. Aldaketa hauek bertan behera utzi nahi badituzu, erabili azpiko \'Utzi\' botoia.';
$string['rubric'] = 'Errubrika';
$string['rubricmapping'] = 'Puntuazioetatik kalifikazioetara lotura egiteko arauak';
$string['rubricmappingexplained'] = 'Errubrika honentzako gutxieneko puntuazioa  <b>{$a->minscore} puntu</b> da. Jardueraren gutxieneko kalifikaziora bihurtuko da (eskalarik erabiltzen ez bada, 0 izango da). Gehieneko puntuazioa <b>{$a->maxscore} puntu</b> da, eta gehieneko kalifikaziora bihurtuko da. Erdiko puntuazioak era berean eraldatuko dira.

Eskala bat erabiltzen bada kalifikazio baten ordez, puntuazioa bihurtuko da eskalaren elementuetako batean, jarraian doazen zenbaki osoak bailiran.

Kalifikazio-kalkulu hau aldatu daiteke formularioa editatu eta \'Kalkulatu gutxieneko kalifikazioa errubrikaren gutxieneko puntuazioa izan dadin\' aukera markatuta.';
$string['rubricnotcompleted'] = 'Mesedez, aukeratu zerbait irizpide bakoitzerako';
$string['rubricoptions'] = 'Errubrikaren aukerak';
$string['rubricstatus'] = 'Oraingo errubrikaren egoera';
$string['save'] = 'Gorde';
$string['saverubric'] = 'Gorde errubrika eta utzi erabiltzeko prest';
$string['saverubricdraft'] = 'Gorde zirriborro gisa';
$string['scoreinputforlevel'] = 'Puntu-sarrera {$a} mailarentzat';
$string['scorepostfix'] = '{$a} puntu';
$string['showdescriptionstudent'] = 'Erakutsi errubrikaren deskribapena ikasleei';
$string['showdescriptionteacher'] = 'Erakutsi errubrikaren deskribapena ebaluatu bitartean';
$string['showremarksstudent'] = 'Erakutsi iruzkinak ikasleei';
$string['showscorestudent'] = 'Erakutsi maila bakoitzaren puntuak ikasleei';
$string['showscoreteacher'] = 'Erakutsi maila bakoitzeko puntuak ebaluatu bitartean';
$string['sortlevelsasc'] = 'Mailentzako ordenatze-irizpidea:';
$string['sortlevelsasc0'] = 'Goitik behera puntu-kopuruaren arabera';
$string['sortlevelsasc1'] = 'Behetik gora puntu-kopuruaren arabera';
$string['zerolevelsabsent'] = 'Kontuz: errubrikaren gutxieneko puntuazioa ez da 0; honek aktibitatean ezusteko puntuazioak eragin ditzake. Hau ekiditeko, irizpide bakoitzaren lehen mailak 0 puntu izan behar du.<br>
Ohar hau alde batera utz dezakezu kalifikatzeko eskala bat erabiltzen baduzu, eta errubrikaren gutxieneko mailak eskalaren gutxieneko mailekin bat badatoz.';
