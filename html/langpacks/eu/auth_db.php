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
 * Strings for component 'auth_db', language 'eu', version '3.11'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'Ezin izan da kanpoko datu-basera konektatu.';
$string['auth_dbcannotreadtable'] = 'Ezin izan da kanpoko datu-basea irakurri.';
$string['auth_dbcantconnect'] = 'Ezin izan da zehaztutako autentifikaziorako datu-basearekin konektatu';
$string['auth_dbchangepasswordurl_key'] = 'Pasahitza aldatzeko URLa';
$string['auth_dbcolumnlist'] = 'Kanpoko taulak ondoko zutabe hauek ditu:<br />{$a}';
$string['auth_dbdebugauthdb'] = 'ADOdb garbitu';
$string['auth_dbdebugauthdbhelp'] = 'Araztu ADOdb konexioa kanpoko datu-basera - erabili orri hutsa jasotzen baduzu saioa hastean. Ez erabili lanean ari diren guneetan!';
$string['auth_dbdeleteuser'] = 'Ezabatutako {$a->name} id {$a->id} erabiltzailea';
$string['auth_dbdeleteusererror'] = 'Eorrea {$a} erabiltzailea ezabatzean';
$string['auth_dbdescription'] = 'Metodo honek kanpoko datu-base taula bat erabiltzen du emandako erabiltzaile-izen eta pasahitz bat baliozkoa den egiaztatzeko.  kontua berria bada, beste eremuetako informazioa ere zeharka kopiatu daiteke Moddlen.';
$string['auth_dbextencoding'] = 'Kanpoko datu-basearen kodifikazioa';
$string['auth_dbextencodinghelp'] = 'Erabiltzailearen kodifikazioa kanpoko datu-basean';
$string['auth_dbextrafields'] = '<p>Eremu hauek hautazkoak dira. Moodle erabiltzaileen eremu batzuk hemen zehaztutako <b>kanpoko datu-base eremuetatik</b> aurrez betetzea erabaki dezakezu.</p><p>Hutsik uzten badituzu, lehenetsitako balioak erabiliko dira.</p><p>Edozein kasutan, erabiltzaileek eremu guztiak editatzeko aukera izango dute behin saioa hasita.</p>';
$string['auth_dbfieldpass'] = 'Pasahitzak dituen eremuaren izena';
$string['auth_dbfieldpass_key'] = 'Pasahitzaren eremua';
$string['auth_dbfielduser'] = 'Erabiltzaile-izenak dituen eremuaren izena. Eremu honek varchar data moduko izan behar du.';
$string['auth_dbfielduser_key'] = 'Erabiltzaile-izenaren eremua';
$string['auth_dbhost'] = 'Datu-base zerbitzaria dagoen ordenagailua. ODBC erabiliz gero, erabil ezazu sistemako DSN sarrera bat. PDO erabiliz gero, erabil ezazu PDO DSN sarrera bat.';
$string['auth_dbhost_key'] = 'Ostalaria';
$string['auth_dbinsertuser'] = '{$a->name} id {$a->id} erabiltzailea txertatuta';
$string['auth_dbinsertuserduplicate'] = 'Errorea {$a->username} erabiltzailea sartzean - erabiltzaile-izen hori duen erabiltzailea dagoeneko sortuta dago \'{$a->auth}\' pluginaren bitartez.';
$string['auth_dbinsertusererror'] = 'Errorea {$a} erabiltzailea txertatzean';
$string['auth_dbname'] = 'Datu-basearen izena. Hutsik utzi ODBC DSN bat erabiliz gero. Hutsik utzi zure PDO DSNak dagoeneko datu-basearen izena badauka.';
$string['auth_dbname_key'] = 'Datu-basearen izena';
$string['auth_dbnoexttable'] = 'Ez da zehaztu kanpoko taula.';
$string['auth_dbnouserfield'] = 'Ez da zehaztu erabiltzaile-eremua.';
$string['auth_dbpass'] = 'Goiko erabiltzaile-izenarekin bat datorren pasahitza';
$string['auth_dbpass_key'] = 'Pasahitza';
$string['auth_dbpasstype'] = '<p>Pasahitzaren eremuak erabiltzen duen formatua zehaztu.</p> <p>Erabili \'barrukoa\' kanpo datu-baseak erabiltzaile eta helbide elektronikoak kudeatzea baina pasahitzak Moodlek kudeatzea nahi baduzu. \'Barrukoa\' erabiliz gero kanpo datu-baseko helbide elektronikoaren eremuan betetako helbide elektronikoa eman beharko duzu, eta \\auth_db\\task\\sync_users programatutako ataza gaitu beharko duzu. Moodlek erabiltzaile berriei e-mail bat bidaliko die behin-behineko pasahitz batekin.</p>';
$string['auth_dbpasstype_key'] = 'Pasahitzaren formatua';
$string['auth_dbreviveduser'] = '{$a->name} id {$a->id} erabiltzailea berreskuratuta';
$string['auth_dbrevivedusererror'] = 'Errorea {$a} erabiltzailea berreskuratzean';
$string['auth_dbsaltedcrypt'] = 'Zifratu zentzu-bakarreko hash metodoa erabiliz.';
$string['auth_dbsetupsql'] = 'SQL ezarpen-komandoa';
$string['auth_dbsetupsqlhelp'] = 'Datu-basearen konfigurazio berezirako SQL komandoa, maiz komunikazio kodifikazioa konfiguratzeko erabilia - MySQL eta PostgreSQLrako adibidea: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Kontua etendako erabiltzailea ({$a->name}) eta IDa {$a->id}';
$string['auth_dbsuspendusererror'] = 'Errorea {$a} erabiltzailea suspenditzean';
$string['auth_dbsybasequoting'] = 'Erabili sybase kakotxak (quotes)';
$string['auth_dbsybasequotinghelp'] = 'Sybase motako kakotx sinpleen ihesbidea - beharrezkoa Oracle, MS SQL eta beste datu-base batzuetan. Ez erabil MySQL-rentzat!';
$string['auth_dbsyncuserstask'] = 'Sinkronizatu erabiltzaileak ataza';
$string['auth_dbtable'] = 'Taularen izena datu-basean';
$string['auth_dbtable_key'] = 'Taula';
$string['auth_dbtableempty'] = 'Kanpoko taula hutsik dago.';
$string['auth_dbtype'] = 'Datu-base mota (ikusi dokumentazioa <a href="http://adodb.org/dokuwiki/doku.php" target="_blank">ADOdb - Database Abstraction Layer for PHP</a> zehaztasun gehiagorako).';
$string['auth_dbtype_key'] = 'Datu-basea';
$string['auth_dbupdateerror'] = 'Errorea kanpoko datu-basea eguneratzean.';
$string['auth_dbupdateusers'] = 'Eguneratu erabiltzaileak';
$string['auth_dbupdateusers_description'] = 'Erabiltzaile berriak sortzeaz gain, lehendik daudenak eguneratu.';
$string['auth_dbupdatinguser'] = '{$a->name} id {$a->id} erabiltzailea eguneratzen';
$string['auth_dbuser'] = 'Datu-basean irakurtzeko baimena duen erabiltzaile-izena';
$string['auth_dbuser_key'] = 'Datu-basearen erabiltzailea';
$string['auth_dbuserstoadd'] = 'Gehituko diren erabiltzailearen sarrerak: {$a}';
$string['auth_dbuserstoremove'] = 'Ezabatuko diren erabiltzailearen sarrerak: {$a}';
$string['pluginname'] = 'Kanpoko datu-basea';
$string['privacy:metadata'] = 'Kanpoko datu-baserako autentifikazio-pluginak ez du datu pertsonalik biltzen.';
