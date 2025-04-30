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
 * Strings for component 'auth_shibboleth', language 'eu', version '4.4'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'Autentifikazio-metodoaren logoa';
$string['auth_shib_auth_logo_description'] = 'Eman zure erabiltzaileei ezaguna egingo zaien logo bat Shibboleth autentifikazio-metodoarentzat. Hau Shibboleth federeazioaren logoa izan daiteke, esaterako <tt>SWITCHaai Login</tt>, <tt>InCommon Login</tt> edo antzeko bat.';
$string['auth_shib_auth_method'] = 'Autentifikazio-metodoaren izena';
$string['auth_shib_auth_method_description'] = 'Eman Shibboleth autentifikazio-metodoarentzako zure erabiltzaileei ezaguna egingo zaien izen bat. Hau zure Shibboleth federazioaren izena izan daiteke, ad. <tt>SWITCHaai Login</tt>,  <tt>InCommon Login</tt> edo antzeko bat.';
$string['auth_shib_changepasswordurl'] = 'Pasahitza aldatzeko URLa';
$string['auth_shib_contact_administrator'] = 'Zerrendako erakundeekin inolako loturarik ez baduzu eta zerbitzari honetako ikastaro baterako sarbide behar baduzu, mesedez jarri harremanetan guneko <a href="mailto:{$a}">Moodle kudeatzailearekin</a>.';
$string['auth_shib_convert_data'] = 'Datuen aldaketarako APIa';
$string['auth_shib_convert_data_description'] = 'API hau aurrerago Shibboleth-ek emandako datuak aldatzeko erabil dezakezu. <a href="{$a}">IRAKUR NAZAZU</a> dokumentua irakurri ezazu argibide gehigarriak ikusteko.';
$string['auth_shib_convert_data_filepath_warning'] = 'Ezin duzu guneko oraingo datu-direktorioan ($CFG->dataroot) dagoen fitxategi bat datuen aldaketarako API gisa erabili.';
$string['auth_shib_convert_data_warning'] = 'Fitxategirik ez dago, edo zerbitzariaren prozesuak ezin du irakurri.';
$string['auth_shib_idp_list'] = 'Nortasun-hornitzaileak';
$string['auth_shib_idp_list_description'] = 'Sartu erabiltzaileari sarbide-orrian aukeran emateko Identitate-Hornitzaileen entityID-ak.<br />Errenkada bakoitzean komaz banatuta IdP-aren entityID-a (ikusi Shibboleth metadatuen fitxategia) eta IdP-aren izena agertu behar dira menuaren zerrendan erakutsiko diren moduan.<br />Hautazko hirugarren parametro gisa erabiliko den Shibboleth saioaren abiarazlearen kokapena gehitu dezakezu zure Moodle instalazioa multi-federazio konfigurazio baten parte bada.';
$string['auth_shib_instructions'] = 'Erabili <a href="{$a}">Shibboleth login</a> Shibboleth-en bidez sartzeko zure erakundeak onartzen badu. Bestela, hemen erakusten den sarrera arrunteko formularioa erabili.';
$string['auth_shib_instructions_help'] = 'Hemen zure erabiltzaileei Shibboleth erabiltzeko argibide pertsonalizatuak eman beharko zenizkieke. Sarbide-orriko argibideen atalean agertu beharko lirateke, eta "<b>{$a}</b>" esteka erakutsi, Shibboletheko erabiltzaileak erraz sar daitezen. Zuriz utziz gero, argibide estandarrak erakutsiko dira (ez Shibboleth-enak berak)';
$string['auth_shib_instructions_key'] = 'Sartzeko argibideak';
$string['auth_shib_integrated_wayf'] = 'Moodleren WAYF zerbitzua';
$string['auth_shib_integrated_wayf_description'] = 'Aukera hau gaituz gero, Moodlek bere WAYF zerbitzua erabiliko du Shibboleth-en konfiguratuta dagoenaren ordez. Moodlek sarbide-orri alternatibo honetan menuko zerrenda bat erakutsiko du eta bertan erabiltzaileak bere Identitate Hornitzailea aukeratu beharko du.';
$string['auth_shib_logout_return_url'] = 'Saioa amaitzean erabili beharreko ordezko URLa.';
$string['auth_shib_logout_return_url_description'] = 'Sartu saioa amaitu ondoren Shibboleth erabiltzaileak berbideratzeko erabiliko den URLa.<br />Hutsik utziz gero, erabiltzaileak Moodlek bideratzen dituen kokapenera bideratuko dira.';
$string['auth_shib_logout_url'] = 'Shibboleth Zerbitzu Hornitzailearen saio-amaiera kudeatzeko URLa';
$string['auth_shib_logout_url_description'] = 'Sartu Shibboleth Zerbitzu Hornitzailearen saio-amaiera kudeatzeko URLa. Hau normalean <tt>/Shibboleth.sso/Logout</tt> da';
$string['auth_shib_no_organizations_warning'] = 'Lehenetsitako WAYF zerbitzua erabili nahi baduzu, komaz banatuta Identitate-Kudeatzaileen entityID-ak, izenak sartu behar dituzu, eta hautazkoa den saioaren abiarazlea ere sartu dezakezu.';
$string['auth_shib_only'] = 'Shibboleth soilik';
$string['auth_shib_only_description'] = 'Markatu aukera hau soilik Shibboleth autentifikazioa behartu nahi baduzu.';
$string['auth_shib_username_description'] = 'Moodlen erabiltzaile izen gisa erabiliko den Shibboleth zerbitzariaren testuinguru aldagaiaren izena';
$string['auth_shibboleth_errormsg'] = 'Mesedez, aukera ezazu zein erakundetakoa zaren!';
$string['auth_shibboleth_login'] = 'Shibboleth sarbidea';
$string['auth_shibboleth_login_long'] = 'Saioa hasi Moodlen Shibboleth-en bidez';
$string['auth_shibboleth_manual_login'] = 'Eskuzko sarbidea';
$string['auth_shibboleth_select_member'] = 'Ni hemengo kidea naiz:';
$string['auth_shibboleth_select_organization'] = 'Shibboleth bidezko autentifikaziorako, mesedez aukeratu menuan zure erakundea:';
$string['auth_shibbolethdescription'] = 'Metodo honen bitartez erabiltzaileak Shibboleth erabilita sortu eta autentifikatzen dira. Konfigurazioaren xehetasunetarako ikusi ezazu <a href="{$a}">Shibboleth IRAKUR NAZAZU</a> dokumentua.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'Shibboleth autentifikazio-pluginak ez du datu pertsonalik biltzen.';
$string['shib_invalid_account_error'] = 'Shibboleth bidez autentikatu behar zarela ematen du baina Moodlek ez du zure erabiltzaile-izenarentzako kontu baliagarririk. Baliteke zure kontua ez existitzea edo etenda egotea.';
$string['shib_no_attributes_error'] = 'Badirudi Shibboleth-ek autentifikatu zaituela, baina Moodlek ez du erabiltzaile-atributurik jaso. Zure nortasun-emaileak beharrezkoak diren atributuak ({$a}) Moodle exekutatzen ari den Zerbitzu Emaileari pasa dizkiola ziurtatu, edo zerbitzari honetako webmasterrari jakinarazi.';
$string['shib_not_all_attributes_error'] = 'Moodle Shibboleth-en atributu batzuk behar ditu, kasu honetan agertzen ez direnak. Atributuak hauek dira: {$a}<br />Mesedez, web masterrarekin edo nortasun-emailearekin harremanetan jarri.';
$string['shib_not_set_up_error'] = 'Ez dirudi Shibboleth autentifikazioa zuzena denik orri honetan Shibboleth-en testuinguruko aldagaiak ez daudelako. Shibboleth autentifikazioa nola definitzen den jakin nahi baduzu, <a href="{$a}">IRAKUR NAZAZU</a> dokumentua kontsultatu edo Moodleren instalazio honetako web masterrarekin harremanetan jarri, mesedez.';
