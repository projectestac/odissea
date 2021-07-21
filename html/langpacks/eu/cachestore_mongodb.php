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
 * Strings for component 'cachestore_mongodb', language 'eu', version '3.11'.
 *
 * @package     cachestore_mongodb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'Datu-basea';
$string['database_help'] = 'Erabiliko den datu-basearen izena';
$string['extendedmode'] = 'Erabili gako luzatuak';
$string['extendedmode_help'] = 'Gaituz gero gako-multzo osoak erabiliko dira pluginarekin lan egitean. Hau oraindik ez da plugin barruan erabiltzen baina MondoDB pluginean eskuz bilatu eta ikertzea baimenduko dizu hala egin nahi izanez gero. Aukera hau gaitzeak gainkarga txiki bat suposatu lezake, beraz soilik behar denean gaitu ezazu.';
$string['password'] = 'Pasahitza';
$string['password_help'] = 'Erabiltzailearen pasahitza konexiorako erabilitako bera da.';
$string['pleaseupgrademongo'] = 'PHPko Mongo hedapenaren bertsio zahar bat erabiltzen ari zara (1.3 baino txikiagoa). Etorkizunean Mongo hedapen zaharren sostengua kenduko da. Mesedez hausnartu eguneratzea egitean.';
$string['pluginname'] = 'MongoDB';
$string['privacy:metadata:mongodb'] = 'MongoDB cache-biltegi pluginak datuak laburki gordetzen ditu bere cache-funtzioaren baitan. Datu hauek MongoDB zerbitzari batean gordetzen dira, eta bertan datuak erregularki ezabatzen dira.';
$string['privacy:metadata:mongodb:data'] = 'Cachean gordetako era askotako datuak';
$string['replicaset'] = 'Erreplika-multzoa';
$string['replicaset_help'] = 'Konektatu beharreko erreplika-multozaren izena. Balio hau emanez gero nagusia zehazteko hazietako ismaster datu-baseko komandoa erabiliko da, eta beraz kontrolatzaileak zerrendatu gabeko zerbitzari batera konektatuta amaitu lezake.';
$string['server'] = 'Zerbitzaria';
$string['server_help'] = 'Ezarpen hau erabili nahi duzun zerbitzariko konexiorako karaktere-katea da. Zerbitzari anitz zehaztu daiteke komaz banatutako zerrenda bat erabilita.';
$string['testserver'] = 'Probetarako zerbitzaria';
$string['testserver_desc'] = 'Probetarako zerbitzari batekin konexioa probatzeko karaktere-katea. Probetarako zerbitzari bat zehaztu bada MondoDB-en errendimendua kudeaketa blokeko Cache atalaren Probatu errendimendua orria erabiliz proba daiteke.
Adibidez: mongodb://127.0.0.1:27017';
$string['username'] = 'Erabiltzaile-izena';
$string['username_help'] = 'Konexioa egitean erabiliko den erabiltzaile-izena.';
$string['usesafe'] = 'Erabili segurua';
$string['usesafe_help'] = 'Gaituz gero insert, get eta remove eragiketak egin bitartean usesafe aukera erabiliko da. Erreplika-multzoa zehaztu baduzu aukera hau beharrezkoa izango da edonola ere.';
$string['usesafevalue'] = 'Erabili balio segurua';
$string['usesafevalue_help'] = 'Erabili segururako (use safe) balio zehatz bat ematea aukeratu dezakezu. Honek zehaztuko du eragiketak osatutzat emateko hauek osatuta izan behar duten zerbitzari-kopurua.';
