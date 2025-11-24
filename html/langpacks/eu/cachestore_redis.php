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
 * Strings for component 'cachestore_redis', language 'eu', version '4.5'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'CA fitxategiaren bidea';
$string['ca_file_help'] = 'Ziurtagiri Autoritate fitxategiaren kokapena fitxategi-sistema lokalean';
$string['clustermode'] = 'Cluster modua';
$string['clustermode_help'] = 'Gaituz gero cluster moduak Redis cluster funtzioa exekutatuko du, eta era horretan zure zerbitzariari hainbat zerbitzariei zerbitzua eman eta eskaera konkurrenteak aldi berean kudeatzea ahalbidetuko zaio.';
$string['clustermodeunavailable'] = 'Redis-eko Cluster modua ez dago eskuragarri une honetan. Egiaztatu ezazu PHPko Redis luzapenak Redis Cluster funtzionalitatea onartzen duela.';
$string['compressor_none'] = 'Konpresiorik ez.';
$string['compressor_php_gzip'] = 'Erabili gzip konpresioa.';
$string['compressor_php_zstd'] = 'Erabili Zstandard konpresioa.';
$string['connectiontimeout'] = 'Konexio denbora-muga';
$string['connectiontimeout_help'] = 'Ezarpen honek Redis zerbitzarira konektatzen saiatzerakoan denbora-muga bat zehazten du.';
$string['encrypt_connection'] = 'Erabili TLS zifratzea.';
$string['encrypt_connection_help'] = 'Erabili TLS zifratzea Redisera konektatzeko. Ez erabili \'tls://\' Rediseko hostalari-izenean, horren ordez aukera hau erabili ezazu.';
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
$string['serializer_igbinary'] = 'Igbinary serializatzailea';
$string['serializer_php'] = 'PHP serializatzaile lehenetsia';
$string['server'] = 'Zerbitzaria(k)';
$string['server_help'] = 'Probetarako erabiliko den Redis zerbitzaria.

Adibiderako balio batzuk:

* testredis.abc.com - Redis zerbitzari batera hostalari-izenaren bitartez konektatzeko (6379 ataka lehenetsia).
* testredis.abc.com:1234 - Redis zerbitzari batera hostalari-izenaren bitartez ataka zehatz batera konektatzeko.
* 1.2.3.4 - Redis zerbitzari batera IP helbide bitartez konektatzeko (6379 ataka lehenetsia).
* 1.2.3.4:1234 - Redis zerbitzari batera IP helbide bitartez ataka zehatz batera konektatzeko.
* unix:///var/redis.sock - Redis zerbitzari batera Unix socket bat erabilita konektatzeko.
* /var/redis.sock - Redis zerbitzari batera Unix socket bat erabilita konektatzeko (formatu alternatiboa).

Cluster modua gaituta badago, zehaztu ezazu zerrenda zerbitzari bakoitza lerro berri batean, adibidez:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

Informazio gehiagorako ikusi <a href="https://redis.io/docs/reference/clients/#accepting-client-connections" target="_new">Bezero konexioak onartzen</a> eta <a href="https://redis.io/resources/clients/#php" target="_new">Redis PHP bezeroak</a> (ingelesez).';
$string['task_ttl'] = 'Askatu iraungitako Redis cachearen sarrerek erabilitako memoria';
$string['test_clustermode'] = 'Cluster modua';
$string['test_clustermode_desc'] = 'Gaitu Redis-eko probak Cluster moduan.';
$string['test_password'] = 'Probetarako zerbitzariaren pasahitza';
$string['test_password_desc'] = 'Probetarako Redis zerbitzariaren pasahitza';
$string['test_serializer'] = 'Serializatzailea';
$string['test_serializer_desc'] = 'Probetarako erabilitako serializatzailea.';
$string['test_server'] = 'Probetarako zerbitzaria';
$string['test_server_desc'] = 'Probetarako erabiliko den Redis zerbitzaria.

Adibiderako balio batzuk:

* testredis.abc.com - Redis zerbitzari batera hostalari-izenaren bitartez konektatzeko (6379 ataka lehenetsia).
* testredis.abc.com:1234 - Redis zerbitzari batera hostalari-izenaren bitartez ataka zehatz batera konektatzeko.
* 1.2.3.4 - Redis zerbitzari batera IP helbide bitartez konektatzeko (6379 ataka lehenetsia).
* 1.2.3.4:1234 - Redis zerbitzari batera IP helbide bitartez ataka zehatz batera konektatzeko.
* unix:///var/redis.sock - Redis zerbitzari batera Unix socket bat erabilita konektatzeko.
* /var/redis.sock - Redis zerbitzari batera Unix socket bat erabilita konektatzeko (formatu alternatiboa).

Cluster modua gaituta badago, zehaztu ezazu zerrenda zerbitzari bakoitza lerro berri batean, adibidez:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

Informazio gehiagorako ikusi <a href="https://redis.io/docs/reference/clients/#accepting-client-connections" target="_new">Bezero konexioak onartzen</a> eta <a href="https://redis.io/resources/clients/#php" target="_new">Redis PHP bezeroak</a> (ingelesez).';
$string['test_ttl'] = 'TTL probatzen';
$string['test_ttl_desc'] = 'Exekutatu errendimendu-proba TTL (multzo motelagoak) behar duen cache bat erabilita.';
$string['usecompressor'] = 'Erabili konprimitzailea';
$string['usecompressor_help'] = 'Serializatu ondoren erabili beharreko konprimitzailea zehazten du. Moodleren Cache API mailan egiten da, ez php-redis mailan.';
$string['useserializer'] = 'Erabili serializatzailea';
$string['useserializer_help'] = 'Serializatzeko erabiliko den serializatzailea zehazten du.
Baliozkoak diren serializatzaileak Redis::SERIALIZER_PHP edo Redis::SERIALIZER_IGBINARY dira.
Azken hau soilik onartzen da phpredis --enable-redis-igbinary aukerarekin konfiguratuta eta igbinary hedapena kargatuta dagoenean.';
