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
 * Strings for component 'cachestore_redis', language 'ro', version '4.1'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['compressor_none'] = 'Fără compresie.';
$string['compressor_php_gzip'] = 'Folosiți compresia gzip.';
$string['compressor_php_zstd'] = 'Folosiți compresia Zstandard.';
$string['password'] = 'Parolă';
$string['password_help'] = 'Aceasta setează parola serverului Redis.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Prefix cheie';
$string['prefix_help'] = 'Acest prefix este utilizat pentru toate numele cheilor de pe serverul Redis.
* Dacă aveți o singură instanță Moodle folosind acest server, puteți lăsa această valoare implicită.
* Datorită restricțiilor de lungime a cheii, este permisă maximum 5 caractere.';
$string['prefixinvalid'] = 'Prefixul nu este valid. Puteți folosi doar a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = 'Plugin-ul Redis cachestore stochează datele pe scurt, ca parte a funcționalității sale de cache. Aceste date sunt stocate pe un server Redis unde datele sunt eliminate în mod regulat.';
$string['privacy:metadata:redis:data'] = 'Diferitele date stocate în cache';
$string['serializer_igbinary'] = 'Serializatorul igbinary.';
$string['serializer_php'] = 'Serializatorul PHP implicit.';
$string['server'] = 'Server';
$string['server_help'] = 'Setează numele gazdei sau adresa IP a serverului Redis care va fi utilizată.';
$string['task_ttl'] = 'Elibarați memoria folosită de datele expirate în memoria cache a serverului cache.';
$string['test_password'] = 'Testați parola serverului';
$string['test_password_desc'] = 'Redisă parola serverului de testare.';
$string['test_serializer'] = 'Serializator';
$string['test_serializer_desc'] = 'Serializator de utilizat pentru testare.';
$string['test_server'] = 'Server test';
$string['test_server_desc'] = 'Serverul Redis care va fi folosit pentru testare';
$string['test_ttl'] = 'Se testează TTL';
$string['test_ttl_desc'] = 'Rulați testul de performanță folosind un cache care necesită TTL (seturi mai lente).';
$string['usecompressor'] = 'Folosiți compresorul';
$string['usecompressor_help'] = 'Specifică compresorul de utilizat după serializare. Se face la nivelul API Moodle Cache, nu la nivelul php-redis.';
$string['useserializer'] = 'Folosiți serializatorul';
$string['useserializer_help'] = 'Specifică serializatorul de utilizat pentru serializare.
Serializatorii valabili sunt Redis :: SERIALIZER_PHP sau Redis :: SERIALIZER_IGBINARY.
Acesta din urmă este acceptat numai atunci când phpredis este configurat cu opțiunea --enable-redis-igbinary și extensia igbinary este încărcată.';
