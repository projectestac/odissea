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
 * Strings for component 'cachestore_redis', language 'eu', version '3.11'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['compressor_none'] = 'Konpresiorik ez.';
$string['compressor_php_gzip'] = 'Erabili gzip konpresioa.';
$string['compressor_php_zstd'] = 'Erabili Zstandard konpresioa.';
$string['password'] = 'Pasahitza';
$string['password_help'] = 'Aukera honek Redis zerbitzariaren pasahitza zehazten du.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Gakoen aurrizkia';
$string['prefix_help'] = 'Aurrizki hau Redis zerbitzariko gakoen izen guztietan erabiliko da.
* Zerbitzari hau erabiltzen duen Moodle instantzia bakarra baduzu, hemen lehenetsitako balioa utzi dezakezu.
* Luzera mugak direla-eta, hemen gehienez 5 karaktere baimentzen dira.';
$string['prefixinvalid'] = 'Aurrizki baliogabea. Ondoko hauek baino ezin dira erabili: a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = 'Redis cache-biltegi pluginak datuak laburki gordetzen ditu bere cache-funtzioaren baitan. Datu hauek Redis zerbitzari batean gordetzen dira, eta bertan datuak erregularki ezabatzen dira.';
$string['privacy:metadata:redis:data'] = 'Cachean gordetako era askotako datuak';
$string['serializer_igbinary'] = 'igbinary serializatzailea.';
$string['serializer_php'] = 'PHP serializatzaile lehenetsia.';
$string['server'] = 'Zerbitzaria';
$string['server_help'] = 'Hemen erabiliko den Redis zerbitzariaren ostalari-izena edo IP helbidea zehazten da.';
$string['test_password'] = 'Probetarako zerbitzariaren pasahitza';
$string['test_password_desc'] = 'Probetarako Redis zerbitzariaren pasahitza';
$string['test_serializer'] = 'Serializatzailea';
$string['test_serializer_desc'] = 'Probetarako erabilitako serializatzailea.';
$string['test_server'] = 'Probetarako zerbitzaria';
$string['test_server_desc'] = 'Probetarako erabiliko den Redis zerbitzaria';
$string['usecompressor'] = 'Erabili konprimitzailea';
$string['usecompressor_help'] = 'Serializatu ondoren erabili beharreko konprimitzailea zehazten du. Moodleren Cache API mailan egiten da, ez php-redis mailan.';
$string['useserializer'] = 'Erabili serializatzailea';
$string['useserializer_help'] = 'Serializatzeko erabiliko den serializatzailea zehazten du.
Baliozkoak diren serializatzaileak Redis::SERIALIZER_PHP edo Redis::SERIALIZER_IGBINARY dira.
Azken hau soilik onartzen da phpredis --enable-redis-igbinary aukerarekin konfiguratuta eta igbinary hedapena kargatuta dagoenean.';
