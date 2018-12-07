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
 * Strings for component 'auth_shibboleth', language 'eu', branch 'MOODLE_34_STABLE'
 *
 * @package   auth_shibboleth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_method'] = 'Autentifikazio-metodoaren izena';
$string['auth_shib_auth_method_description'] = 'Eman Shibboleth autentifikazio-metodoarentzako zure erabiltzaileei ezaguna egingo zaien izen bat. Hau zure Shibboleth federazioaren izena izan daiteke, ad. <tt>SWITCHaai Login</tt>,  <tt>InCommon Login</tt> edo antzeko bat.';
$string['auth_shibbolethdescription'] = 'Metodo honen bidez <a href="http://shibboleth.internet2.edu/">Shibboleth</a> zerbitzari batera konektatu zaitezke kontu berriak sortu eta konprobatzeko.<br />Ziurtatu ezazu Shibboleth-eko <a href="../auth/shibboleth/README.txt">IRAKUR NAZAZU</a> dokumentua irakurri duzula Moodle-n Shibboleth konfiguratzen jakiteko.';
$string['auth_shibboleth_errormsg'] = 'Mesedez, aukera ezazu zein erakundetakoa zaren!';
$string['auth_shibboleth_login'] = 'Shibboleth sarbidea';
$string['auth_shibboleth_login_long'] = 'Saioa hasi Moodle-n  Shibboleth-en bidez';
$string['auth_shibboleth_manual_login'] = 'Eskuzko sarbidea';
$string['auth_shibboleth_select_member'] = 'Ni hemengo kidea naiz:';
$string['auth_shibboleth_select_organization'] = 'Shibboleth bidezko autentifikaziorako, mesedez aukeratu zure erakundea menuan:';
$string['auth_shib_changepasswordurl'] = 'Pasahitza aldatzeko URLa';
$string['auth_shib_contact_administrator'] = 'Zerrendako erakundeekin inolako loturarik ez baduzu eta zerbitzari honetako ikastaro baterako sarbide behar baduzu, mesedez jarri harremanetan guneko <a href="mailto:{$a}">Moodle kudeatzailearekin</a>.';
$string['auth_shib_convert_data'] = 'Datuen aldaketarako APIa';
$string['auth_shib_convert_data_description'] = 'API hau aurrerago Shibboleth-ek emandako datuak aldatzeko erabil dezakezu. <a href="../auth/shibboleth/README.txt" target="_blank">README</a> irakurri argibide gehigarriak ikusteko.';
$string['auth_shib_convert_data_warning'] = 'Fitxategirik ez dago, edo zerbitzariaren prozesuak ezin du irakurri.';
$string['auth_shib_idp_list'] = 'Nortasun-hornitzaileak';
$string['auth_shib_idp_list_description'] = 'Sartu erabiltzaileari sarrera-orrian aukeran emateko Identitate-Hornitzaileen entityID-ak.<br />Errenkada bakoitzean komaz banatuta IdP-aren entityID-a (ikusi Shibboleth metadatuen fitxategia) eta IdP-aren izena agertu behar dira menuaren zerrendan erakutsiko diren moduan.<br />Aukerazko hirugarren parametro gisa erabiliko den Shibboleth saioaren abiarazlearen kokapena gehitu dezakezu zure Moodle instalazioa multi-federazio konfigurazio baten parte bada.';
$string['auth_shib_instructions'] = '<a href="{$a}">Shibboleth login</a> erabili Shibboleth-en bidez sartzeko zure erakundeak onartzen badu.<br />Bestela, hemen erakusten den sarrera arrunteko formularioa erabili.';
$string['auth_shib_instructions_help'] = 'Hemen zure erabiltzaileei Shibboleth erabiltzeko argibide pertsonalizatuak eman beharko zenizkieke. Sarbide orriko argibideen atalean agertu beharko lirateke, eta "<b>{$a}</b>" esteka erakutsi, Shibboletheko erabiltzaileak erraz sar daitezen. Zuriz utziz gero, argibide estandarrak erakutsiko dira (ez Shibboleth-enak berak)';
$string['auth_shib_instructions_key'] = 'Sartzeko argibideak';
$string['auth_shib_integrated_wayf'] = 'Moodle-ren WAYF zerbitzua';
$string['auth_shib_integrated_wayf_description'] = 'Hau gaitzen baduzu, Moodle-k bere WAYF zerbitzua erabiliko du Shibboleth-en konfiguratuta dagoenaren ordez. Moodle-k sarrera-orri alternatibo honetan menuko zerrenda bat erakutsiko du eta bertan erabiltzaileak bere Identitate Hornitzailea aukeratu beharko du.';
$string['auth_shib_logout_return_url'] = 'Saioa amaitzean erabili beharreko ordezko URLa.';
$string['auth_shib_logout_return_url_description'] = 'Sartu saioa amaitu ondoren Shibboleth erabiltzaileak berbideratzeko erabiliko den URLa.<br />Hutsik utziz gero, erabiltzaileak Moodle-k bideratzen dituen kokapenera bideratuko dira.';
$string['auth_shib_logout_url'] = 'Shibboleth Zerbitzu Hornitzailearen saio-amaiera kudeatzeko URLa';
$string['auth_shib_logout_url_description'] = 'Sartu Shibboleth Zerbitzu Hornitzailearen saio-amaiera kudeatzeko URLa. Hau normalean <tt>/Shibboleth.sso/Logout</tt> da';
$string['auth_shib_no_organizations_warning'] = 'Berezko WAYF zerbitzua erabili nahi baduzu, komaz banatuta Identitate-Kudeatzaileen entityID-ak, izenak sartu behar dituzu, eta aukerazkoa den saioaren abiarazlea ere sartu dezakezu.';
$string['auth_shib_only'] = 'Shibboleth soilik';
$string['auth_shib_only_description'] = 'Aukera hau hartu soilik Shibboleth autentikazioa bortxatu nahi baduzu.';
$string['auth_shib_username_description'] = 'Moodlen erabiltzaile izen gisa erabiliko den Shibboleth zerbitzariaren testuinguru aldagaiaren izena';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'Shibboleth autentifikazio-pluginak ez du datu pertsonalik biltzen.';
$string['shib_invalid_account_error'] = 'Shibboleth bidez autentikatu behar zarela ematen du baina Moodle-k ez du zure erabiltzaile-izenarentzako kontu baliagarririk. Baliteke zure kontua ez existitzea edo etenda egotea.';
$string['shib_no_attributes_error'] = 'Badirudi Shibboleth-ek autentikatu zaituela, baina Moodlek ez du erabiltzaile-atributurik jaso. Zure nortasun-emaileak beharrezkoak diren ({$a}) atributuak Moodle egikaritzen ari den Zerbitzu Emaileari pasa dizkiola ziurtatu, edo zerbitzari honetako webmasterrari jakinarazi.';
$string['shib_not_all_attributes_error'] = 'Moodle Shibboleth-en atributu batzuk behar ditu, kasu honetan agertzen ez direnak. Atributuak hauek dira: {$a}<br />Mesedez, web masterrarekin edo nortasun-emailearekin harremanetan jarri.';
$string['shib_not_set_up_error'] = 'Ez dirudi Shibboleth autentifikazioa zuzena denik orri honetan Shibboleth-en testuinguruko aldagaiak ez daudelako. Shibboleth autentikazioa nola definitzen den jakin nahi baduzu, <a href="README.txt">README</a> fitxategia kontsultatu edo Moodle-ren instalazio honetako web masterrarekin harremanetan jarri, mesedez.';
