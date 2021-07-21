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
 * Strings for component 'tool_generator', language 'eu', version '3.11'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bigfile'] = 'Fitxategi handia: {$a}';
$string['courseexplanation'] = 'Erreminta honek probarako atal, jarduera eta fitxategi anitz dituen ikastaro arruntak sortzen ditu.

Honen helburua sistemaren osagai ezberdinen errendimendua eta fidagarritasuna modu estandarizatu batean neurtzea da (hala nola segurtasun-kopiak eta berreskuratzea).

Proba hau garrantzitsua da bizitza-errealeko egoeretan (1.000 jarduerako ikastaroarekin adibidez) sistemaren huts egiteak gertatu direlako maiz.

Erreminta honekin sortutako ikastaroek datu-basean eta fitxategi-sisteman tamaina handia har dezakete (dozenaka gigabyte). Espazio hori berreskuratzeko ikastaroak ezabatu beharko dituzu (eta hainbat garbiketa-zeregin exekutatu arte itxaron).

**Ez erabili erreminta hau lanean dagoen sistema batean**. Erabili soilik garapenerako zerbitzarietan. (Istripuzko erabilerak ekiditeko, funtzio hau desgaituta dago GARATZAILEA arazketa-maila aukeratu ezean.)';
$string['coursesize_0'] = 'XS (~10KB; ~ segundo batean sortua)';
$string['coursesize_1'] = 'S (~10MB; ~30 segundotan sortua)';
$string['coursesize_2'] = 'M (~100MB; ~2 minututan sortua)';
$string['coursesize_3'] = 'L (~1GB; ~30 minututan sortua)';
$string['coursesize_4'] = 'XL (~10GB; ~2 ordutan sortua)';
$string['coursesize_5'] = 'XXL (~20GB; ~4 ordutan sortua)';
$string['coursewithoutusers'] = 'Aukeratutako ikastaroak ez du erabiltzailerik';
$string['createcourse'] = 'Sortu ikastaroa';
$string['createtestplan'] = 'Sortu proba-plana';
$string['creating'] = 'Ikastaroa sotzen';
$string['done'] = '({$a}) eginda';
$string['downloadtestplan'] = 'Jaitsi proba-plana';
$string['downloadusersfile'] = 'Deskargatu erabiltzaile-fitxategia';
$string['error_nocourses'] = 'Ez dago proba-plana sortzeko ikastarorik';
$string['error_noforumdiscussions'] = 'Aukeratutako ikastaroak ez dauka foro-eztabaidarik';
$string['error_noforuminstances'] = 'Aukeratutako ikastaroak ez dauka foroa moduluaren instantziarik';
$string['error_noforumreplies'] = 'Aukeratutako ikastaroak ez du foro-erantzunik';
$string['error_nonexistingcourse'] = 'Zehaztutako ikastaroa ez da existitzen.';
$string['error_nopageinstances'] = 'Aukeratutako ikastaroak ez dauka orria moduluaren instantziarik';
$string['error_notdebugging'] = 'Ez dago zerbitzari honetan eskuragarri arazketan ez dagoelako GARATZAILEA ezarrita';
$string['error_nouserspassword'] = 'Proba-plan bat sortzeko aurretik config.php fitxategian $CFG->tool_generator_users_password parametroa zehaztu behar duzu.';
$string['fullname'] = 'Probarako ikastaroa: {$a->size}';
$string['maketestcourse'] = 'Sortu probetarako ikastaroa';
$string['maketestplan'] = 'Sortu JMeter proba-plana';
$string['notenoughusers'] = 'Aukeratutako ikastaroak ez dauka nahikoa erabiltzailerik';
$string['pluginname'] = 'Ausazko ikastaro-sortzailea';
$string['privacy:metadata'] = 'Garapenerako datu-sortzailea pluginak ez du datu pertsonalik biltzen.';
$string['progress_checkaccounts'] = '({$a}) erabiltzaile-kontuak egiaztatzen';
$string['progress_coursecompleted'] = 'Ikastaroa osatu da ({$a}s)';
$string['progress_createaccounts'] = 'Erabiltzaile-kontuak sortzen ({$a->from}(e)tik {$a->to})(e)ra';
$string['progress_createassignments'] = '({$a}) zereginak sortzen';
$string['progress_createbigfiles'] = '({$a}) fitxategi handiak sortzen';
$string['progress_createcourse'] = '{$a} ikastaroa sortzen';
$string['progress_createforum'] = 'Froa sortzen ({$a} mezu)';
$string['progress_createpages'] = 'Orriak sortzen ({$a})';
$string['progress_createsmallfiles'] = 'Fitxategi txikiak sortzen ({$a})';
$string['progress_enrol'] = '({$a}) ikastaroan erabiltzaileak matrikulatzen';
$string['progress_sitecompleted'] = 'Gunea osatu da ({$a}s)';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (~10MB; 3 ikastaro, ~30 segundotan sortuak)';
$string['sitesize_1'] = 'S (~50MB; 8 ikastaro, ~2 minututan sortuak)';
$string['sitesize_2'] = 'M (~200MB; 73 ikastaro, ~10 minututan sortuak)';
$string['sitesize_3'] = 'L (~1\'5GB; 277 ikastaro, ~1\'5 ordutan sortuak)';
$string['sitesize_4'] = 'XL (~10GB; 1065 ikastaro, ~5 ordutan sortuak)';
$string['sitesize_5'] = 'XXL (~20GB; 4177 ikastaro, ~10 ordutan sortuak)';
$string['size'] = 'Ikastaroaren tamaina';
$string['smallfiles'] = 'Fitxategi txikiak';
$string['targetcourse'] = 'Probatu helburuko ikastaroa';
$string['testplanexplanation'] = 'Erreminta honek JMeter-eko proba-plan fitxategia sortzen du erabiltzaile-kredentzialen fitxategiarekin batera.

Proba-plan hau {$a}-(r)ekin funtzionatzeko dago diseinatua, Moodleko ingurune zehatz batean proba-planak exekutatzea erraztu, exekuzioaren inguruko informazioa bildu eta emaitzak konparatzen dituena, eta beraz, hau jaitsi eta bere test_runner.sh script-a erabili edo instalazio eta erabilera argibideak jarraitu beharko duzu.

Ikastaroko erabiltzaileentzako pasahitza config.php fitxategian zehaztu beharko duzu ($CFG->tool_generator_users_password = \'moodle\'; adibidez). Pasahitz honek ez dauka lehenetsitako baliorik erremintaren erabilera okerra ekiditeko. Pasahitzak eguneratzeko aukera erabili beharko duzu zure ikastaroko erabiltzaileek beste pasahitz batzuk badituzte edo tool_generator erreminta erabilita $CFG->tool_generator_users_password balioa zehaztu gabe sortu baziren.

Aukera hori tool_generator-en parte da eta beraz ondo funtzionatzen du ikastaro eta gune sortzailearen bidez sortutako ikastaroekin, eta erabili daiteke ere gutxienez hurrengo baldintzak betetzen dituztenekin:

*Matrikulatutako erabiltzaile nahiko (aukeratzen duzun proba-planaren tamainaren arabera), pasahitzean \'moodle\'  jarrita dutelarik
* Orri-moduluaren instantzia bat
*Foro-moduluaren instantzia bat, gutxienez eztabaida bat eta erantzun batekin.

Proba-plan handiak exekutatzean ziur aski zure zerbitzariaren ahalmena kontuan hartu nahiko duzu, JMeter-ek sortutako karga bereziki handia izan daiteke-eta. Areagotze-tartea hari kopuruaren arabera (erabiltzaileak) doitu da mota honetako arazoak txikiagotze aldera, baina karga handia da horrela ere.

**Ez exekutatu proba-planik lanean dagoen sistema batean**. Erreminta honek JMeter elikatzeko fitxategiak baino ez ditu sortzen eta ez da arriskutsua berez, baina **INOIZ EZ** zenuke proba-plan hau lanean dagoen gune batean exekutatu.';
$string['testplansize_0'] = 'XS ({$a->users} erabiltzaile, {$a->loops} begizta (loop) eta {$a->rampup} areagotze-tarte)';
$string['testplansize_1'] = 'S ({$a->users} erabiltzaile, {$a->loops} begizta (loop) eta {$a->rampup} areagotze-tarte)';
$string['testplansize_2'] = 'M ({$a->users} erabiltzaile, {$a->loops} begizta (loop) eta {$a->rampup} areagotze-tarte)';
$string['testplansize_3'] = 'L ({$a->users} erabiltzaile, {$a->loops} begizta (loop) eta {$a->rampup} areagotze-tarte)';
$string['testplansize_4'] = 'XL ({$a->users} erabiltzaile, {$a->loops} begizta (loop) eta {$a->rampup} areagotze-tarte)';
$string['testplansize_5'] = 'XXL ({$a->users} erabiltzaile, {$a->loops} begizta (loop) eta {$a->rampup} areagotze-tarte)';
$string['updateuserspassword'] = 'Eguneratu ikastaroko erabiltzaileen pasahitza';
$string['updateuserspassword_help'] = 'JMeter ikastaroko erabiltzaile gisa sartu behar da, eta erabiltzailearen pasahitza ezar dezakezu config.php fitxategiko $CFG->tool_generator_users_password parametroan; ezarpen honek ikastaroko erabiltzailearen pasahitza $CFG->tool_generator_users_password-ren arabera eguneratzen du. Erabilgarria izan daiteke tool_generator erabili gabe sortutako ikastaro bat erabiltzen ari bazara edo probarako ikastaroak sortu zenituenean $CFG->tool_generator_users_password zehaztu gabe bazegoen.';
