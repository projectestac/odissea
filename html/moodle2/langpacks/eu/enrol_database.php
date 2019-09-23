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
 * Strings for component 'enrol_database', language 'eu', branch 'MOODLE_36_STABLE'
 *
 * @package   enrol_database
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:config'] = 'Konfiguratu datu-base bidezko matrikulazio instantziak';
$string['database:unenrol'] = 'Desmatrikulatu kontua etenda duten erabiltzaileak';
$string['dbencoding'] = 'Datu-basearen kodifikazioa';
$string['dbhost'] = 'Datu-basearen ostalaria';
$string['dbhost_desc'] = 'Idatzi datu-basearen zerbitzariaren IPa edo izena. Erabili sistemako DSN izen bat ODBC erabiliz gero. Erabili PDO DSN bat PDO erabiliz gero.';
$string['dbname'] = 'Datu-basearen izena';
$string['dbname_desc'] = 'Hutsik utzi datu-base ostalarian DSN izena erabiliz gero.';
$string['dbpass'] = 'Datu-basearen pasahitza';
$string['dbsetupsql'] = 'Datu-basea konfiguratzeko komandoa';
$string['dbsetupsql_desc'] = 'Datu-basearen konfigurazio berezirako SQL komandoa, maiz komunikazio kodifikazioa konfiguratzeko erabilia - MySQL eta PostgreSQLrako adibidea: <em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'Erabili sybase kakotxak (quotes)';
$string['dbsybasequoting_desc'] = 'Sybase motako kakotx sinpleen ihesbdea - beharezkoa Oracle, MS SQL eta beste datu-base batzuetan. Ez erabil MySQL-rentzat!';
$string['dbtype'] = 'Datu-basearen kontrolatzailea';
$string['dbtype_desc'] = 'ADOdb datu-basearen kontrolatzailearen izena, kanpoko datu-baseko motore-mota.';
$string['dbuser'] = 'Datu-basearen erabiltzailea';
$string['debugdb'] = 'Araztu ADOdb';
$string['debugdb_desc'] = 'Araztu ADOdb konexioa kanpoko datu-basera - erabili orri hutsa jasotzen baduzu saioa hastean. Ez erabili lanean ari diren guneetan!';
$string['defaultcategory'] = 'Ikastaro berrientzako lehenetsitako kategoria';
$string['defaultcategory_desc'] = 'Lehenetsitako kategoria automatikoi sortutako ikastaroentzako. Kategoria IDa zehazten edo aurkitzen ez denean erabiliko da.';
$string['defaultrole'] = 'Lehenetsitako rola';
$string['defaultrole_desc'] = 'Modu lehenetsian esleituko den rola, kanpoko datu-basean rolik zehazten ez denean.';
$string['ignorehiddencourses'] = 'Baztertu ezkutuko ikastaroak';
$string['ignorehiddencourses_desc'] = 'Gaituz gero erabiltzaileak ez dira ikastaroetan matrikulatuko ikastaroak ikasleentzako ezkutuan badaude.';
$string['localcategoryfield'] = 'Lokaleko kategoriaren eremua';
$string['localcoursefield'] = 'Lokaleko ikastaroaren eremua';
$string['localrolefield'] = 'Lokaleko rolaren eremua';
$string['localuserfield'] = 'Lokaleko erabiltzailearen eremua';
$string['newcoursecategory'] = 'Ikastaro-kategoria berriaren eremua';
$string['newcoursefullname'] = 'Ikastaro berriaren izen luzeraren eremua';
$string['newcourseidnumber'] = 'Ikastaro berriaren ID zenbakiaren eremua';
$string['newcourseshortname'] = 'Ikastaro berriaren izen laburraren eremua';
$string['newcoursetable'] = 'Urrutiko ikastaro berrien taula';
$string['newcoursetable_desc'] = 'Zehaztu automatikoki sortu beharreko ikastaroen zerrenda duen taularen izena. Hutsik utziz gero ez da ikastarorik sortuko.';
$string['pluginname'] = 'Kanpoko datu-basea';
$string['pluginname_desc'] = 'Kanpoko datu-base bat erabili dezakezu (ia edozein motatakoa) zure matrikulazioak kudeatzeko. Suposatu egiten da zure kanpoko datu-baseak gutxienez ikastaroaren IDa duen eremua eta erabiltzailearen IDa duen eremua dituela. Eremu hauek datu-base lokaleko ikastaro eta erabiltzaileen tauletan zuk aukeratutako eremuekin konparatuko dira.';
$string['privacy:metadata'] = 'Kanpoko datu-basea matrikulazio-pluginak ez du datu pertsonalik biltzen.';
$string['remotecoursefield'] = 'Urrutiko ikastaroen eremua';
$string['remotecoursefield_desc'] = 'Ikastaroen taulan sarrerak parekatzeko erabiltzen den eremuaren izena urrutiko taulan.';
$string['remoteenroltable'] = 'Urrutiko erabiltzaileen matrikulaziorako taula';
$string['remoteenroltable_desc'] = 'Zehaztu erabiltzaileen matrikulazioen zerrenda duen taularen izena. Hutsik utziz gero ez da matrikulaziorik sinkronizatuko.';
$string['remoteotheruserfield'] = 'Urrutiko Beste Erabiltzailea eremua';
$string['remoteotheruserfield_desc'] = '"Beste Erabiltzaileak" rol esleipena markatzeko urruneko taulan erabiliko den eremuaren izena.';
$string['remoterolefield'] = 'Urrutiko rolaren eremua';
$string['remoterolefield_desc'] = 'Rolen taulan sarrerak parekatzeko erabiltzen den eremuaren izena urrutiko taulan.';
$string['remoteuserfield'] = 'Urrutiko erabiltzailearen eremua';
$string['remoteuserfield_desc'] = 'Erabiltzaileen taulan sarrerak parekatzeko erabiltzen den eremuaren izena urrutiko taulan.';
$string['settingsheaderdb'] = 'Kanpoko datu-basearen konexioa';
$string['settingsheaderlocal'] = 'Eremu lokalen lotura';
$string['settingsheadernewcourses'] = 'Ikastaro berrien sorkuntza';
$string['settingsheaderremote'] = 'Urruneko rolen sinkronizazioa';
$string['templatecourse'] = 'Ikastaro berrien txantiloia';
$string['templatecourse_desc'] = 'Aukerakoa: automatikoki sortutako ikastaroek ezarpenak ikastaro-txantiloi batetik kopiatu ditzakete. Idatzi hemen ikastaro-txantiloiaren izen laburra.';
