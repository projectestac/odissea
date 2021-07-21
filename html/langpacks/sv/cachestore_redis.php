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
 * Strings for component 'cachestore_redis', language 'sv', version '3.11'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['compressor_none'] = 'Ingen komprimering.';
$string['compressor_php_gzip'] = 'Används gzip-komprimering.';
$string['compressor_php_zstd'] = 'Använd Zstandardkomprimering.';
$string['password'] = 'Lösenord';
$string['password_help'] = 'Detta sätter lösenordet för Redis-servern.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Nyckelprefix';
$string['prefix_help'] = 'Detta prefix används för alla nyckelnamn på Redis-servern.
* Om du bara har en Moodle-instans som använder den här servern kan du lämna detta värde som det är.
* På grund av begränsningar i nyckellängd tillåts högst 5 tecken.';
$string['prefixinvalid'] = 'Ogiltigt prefix. Du kan enbart använda a-z A-Z 0-9 -_';
$string['privacy:metadata:redis'] = 'Pluginmodulen Redis lagra data tillfälligt som en del av dess cachefunktionalitet. Den cachade informationen lagras på en Redis-server där den regelbundet rensas.';
$string['privacy:metadata:redis:data'] = 'Den lagrade cachedatan';
$string['serializer_igbinary'] = 'Igbinary-serialiseraren';
$string['serializer_php'] = 'Standard PHP-serialiseraren.';
$string['server'] = 'Server';
$string['server_help'] = 'Detta anger värdnamn och IP-adress för den Redis-server som ska användas.';
$string['test_password'] = 'Lösenord för testserver';
$string['test_password_desc'] = 'Lösenord för kontroll av Redis-servern.';
$string['test_serializer'] = 'Serialiserare';
$string['test_serializer_desc'] = 'Serialiserare att använda för testning.';
$string['test_server'] = 'Testserver';
$string['test_server_desc'] = 'Redis-server att använda för testning.';
$string['usecompressor'] = 'Använd komprimerare';
$string['usecompressor_help'] = 'Anger vilken komprimering som ska användas efter serialisering. Det görs på Moodle Cache API-nivå, inte på php-redis nivå.';
$string['useserializer'] = 'Använd serialiserare';
$string['useserializer_help'] = 'Anger den serialiserare som ska användas för serialisering.
Giltiga serialiserare är Redis::SERIALIZER_PHP eller Redis::SERIALIZER_IGBINARY.
Det senare stöds endast när phpredis konfigureras med --enable-redis-igbinary alternativet och igbinary tillägget laddats.';
