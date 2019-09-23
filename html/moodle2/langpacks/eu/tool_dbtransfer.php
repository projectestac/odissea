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
 * Strings for component 'tool_dbtransfer', language 'eu', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_dbtransfer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'Migraziorako eskuragarri dauden datu-base kontrolatzaileak';
$string['cliheading'] = 'Datu-basearen migrazioa - ziurta ezazu migrazioa egin bitartean inor ez dela zerbitzarira sartzen ari!';
$string['climigrationnotice'] = 'Datu-basearen migrazioa martxan da, mesedez itxaron migrazioa burutu, zerbitzariko kudeatzaileak konfigurazioa eguneratu eta $CFG->dataroot/climaintenance.html fitxategia ezabatzen duenera arte.';
$string['convertinglogdisplay'] = 'Erregistroak erakusteko ekintzak bihurtzen';
$string['dbexport'] = 'Datu-basearen esportazioa';
$string['dbtransfer'] = 'Datu-basearen migrazioa';
$string['enablemaintenance'] = 'Gaitu mantenu-modua';
$string['enablemaintenance_help'] = 'Aukera honek mantenu-modua gaitzen du datu-basearen migrazioa egin bitartean eta amaitu ondoren, erabiltzaileak migrazioa burutu bitartean sartzea eragotziz. Mesedez kontuan izan eguneratzea amaitu ondoren kudeatzaileak eskuz $CFG->dataroot/climaintenance.html fitxategia ezabatu beharko duela funtzionamendu normala berriz hasteko.';
$string['exportdata'] = 'Esportatu datuak';
$string['notargetconectexception'] = 'Sentitzen dugu, ezin da konektatu helburu den datu-basearekin.';
$string['options'] = 'Aukerak';
$string['pluginname'] = 'Datu-basearen transferentzia';
$string['privacy:metadata'] = 'Datu-basearen transferentzia pluginak ez du datu pertsonalik biltzen.';
$string['targetdatabase'] = 'Helburuko datu-basea';
$string['targetdatabasenotempty'] = 'Helburuko datu-baseak ezin du emandako aurrizki bera duen taularik izan!';
$string['transferdata'] = 'Transferitu datuak';
$string['transferdbintro'] = 'Script-ak datu-base honetako eduki guztiak beste datu-base zerbitzari batera transferituko ditu. Datu-base mota ezberdinen arteko datu-migrazioak egiteko erabili ohi da.';
$string['transferdbtoserver'] = 'Transferitu Moodle-ko datu-base hau beste zerbitzari batera';
$string['transferringdbto'] = '{$a->dbtypefrom} datu-basea {$a->dbtype} motako "{$a->dbname}" datu-basera transferitzen "{$a->dbhost}" -n';
