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
 * Strings for component 'cachestore_redis', language 'ro', version '4.5'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'Calea către fișierul certificat';
$string['ca_file_help'] = 'Locația fișierului  Certificate Authority în local filesystem';
$string['clustermode'] = 'Mod Cluster';
$string['clustermode_help'] = 'Activarea modului cluster va rula funcția Redis Cluster, permițând serverului dvs. să deservească mai multe servere pentru a gestiona cereri simultane.';
$string['clustermodeunavailable'] = 'Clusterul Redis este momentan indisponibil. Vă rugăm să vă asigurați că extensia PHP Redis acceptă funcționalitatea Redis Cluster.';
$string['compressor_none'] = 'Fără compresie.';
$string['compressor_php_gzip'] = 'Folosiți compresia gzip.';
$string['compressor_php_zstd'] = 'Folosiți compresia Zstandard.';
$string['encrypt_connection'] = 'Utilizează criptare TLS.';
$string['encrypt_connection_help'] = 'Folosește TLS pentru conectare la Redis. Nu folosi \'tls://\' în denumirea gazdei, folosește în schimb această opțiune.';
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
$string['serializer_igbinary'] = 'Serializator igbinary';
$string['serializer_php'] = 'Serializator PHP implicit';
$string['server'] = 'Server(e)';
$string['server_help'] = 'Server Redis de folosit pentru testare.

Câteva valori de exemplu:

* testredis.abc.com - Pentru a vă conecta la un server Redis după numele de gazdă (Port 6379 implicit).
* testredis.abc.com:1234 - Pentru a vă conecta la un server Redis prin nume de gazdă cu un anumit port.
* 1.2.3.4 - Pentru a vă conecta la un server Redis prin adresa IP (Port 6379 în mod implicit).
* 1.2.3.4:1234 - Pentru a vă conecta la un server Redis prin adresa IP cu un anumit port.
* unix:///var/redis.sock - Pentru a vă conecta la un server Redis folosind un socket Unix.
* /var/redis.sock - Pentru a vă conecta la un server Redis folosind un socket Unix (format alternativ).

Dacă modul cluster este activat, specificați serverele separate printr-o linie nouă, de exemplu:<br>
   172.23.0.11<br>
   172.23.0.12<br>
   172.23.0.13<br>

Pentru informații suplimentare, consultați <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">Acceptarea conexiunilor client</a> și <a href="https://redis .io/resources/clients/#php">Clienți PHP Redis</a>.';
$string['task_ttl'] = 'Elibarați memoria folosită de datele expirate în memoria cache a serverului cache.';
$string['test_clustermode'] = 'Mod Cluster';
$string['test_clustermode_desc'] = 'Activare test în modul Redis Cluster.';
$string['test_password'] = 'Testați parola serverului';
$string['test_password_desc'] = 'Redisă parola serverului de testare.';
$string['test_serializer'] = 'Serializator';
$string['test_serializer_desc'] = 'Serializator de utilizat pentru testare.';
$string['test_server'] = 'Server test';
$string['test_server_desc'] = 'Server Redis de folosit pentru testare.

Câteva valori de exemplu:

* testredis.abc.com - Pentru a vă conecta la un server Redis după numele de gazdă (Port 6379 implicit).
* testredis.abc.com:1234 - Pentru a vă conecta la un server Redis prin nume de gazdă cu un anumit port.
* 1.2.3.4 - Pentru a vă conecta la un server Redis prin adresa IP (Port 6379 în mod implicit).
* 1.2.3.4:1234 - Pentru a vă conecta la un server Redis prin adresa IP cu un anumit port.
* unix:///var/redis.sock - Pentru a vă conecta la un server Redis folosind un socket Unix.
* /var/redis.sock - Pentru a vă conecta la un server Redis folosind un socket Unix (format alternativ).

Dacă modul cluster este activat, specificați serverele separate printr-o linie nouă, de exemplu:<br>
   172.23.0.11<br>
   172.23.0.12<br>
   172.23.0.13<br>

Pentru informații suplimentare, consultați <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">Acceptarea conexiunilor client</a> și <a href="https://redis .io/resources/clients/#php">Clienți PHP Redis</a>.';
$string['test_ttl'] = 'Se testează TTL';
$string['test_ttl_desc'] = 'Rulați testul de performanță folosind un cache care necesită TTL (seturi mai lente).';
$string['usecompressor'] = 'Folosiți compresorul';
$string['usecompressor_help'] = 'Specifică compresorul de utilizat după serializare. Se face la nivelul API Moodle Cache, nu la nivelul php-redis.';
$string['useserializer'] = 'Folosiți serializatorul';
$string['useserializer_help'] = 'Specifică serializatorul de utilizat pentru serializare.
Serializatorii valabili sunt Redis :: SERIALIZER_PHP sau Redis :: SERIALIZER_IGBINARY.
Acesta din urmă este acceptat numai atunci când phpredis este configurat cu opțiunea --enable-redis-igbinary și extensia igbinary este încărcată.';
