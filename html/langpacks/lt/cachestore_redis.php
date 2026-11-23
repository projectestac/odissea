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
 * Strings for component 'cachestore_redis', language 'lt', version '4.5'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'CA failo kelias';
$string['clustermode'] = 'Klasterio režimas';
$string['clustermode_help'] = 'Įjungus klasterio režimą, bus naudojama Redis Cluster funkcija, leidžianti jūsų serveriui aptarnauti kelis serverius ir vienu metu apdoroti lygiagrečias užklausas.';
$string['clustermodeunavailable'] = 'Redis Cluster šiuo metu nepasiekiamas. Įsitikinkite, kad PHP Redis plėtinys palaiko Redis Cluster funkcijas.';
$string['compressor_none'] = 'Nesuglaudintas.';
$string['compressor_php_gzip'] = 'Naudoti gzip glaudinimą.';
$string['compressor_php_zstd'] = 'Naudoti Zstandard glaudinimą.';
$string['connectiontimeout'] = 'Prisijungimo skirtasis laikas';
$string['connectiontimeout_help'] = 'Nustato skirtąjį laiką bandant prisijungti prie Redis serverio.';
$string['encrypt_connection'] = 'Naudoti TLS šifravimą.';
$string['password'] = 'Slaptažodis';
$string['password_help'] = 'Tai nustato Redis serverio slaptažodį.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Rakto prefiksas';
$string['prefix_help'] = 'Šis priešdėlis naudojamas visiems Redis serverio raktų pavadinimams.
* Jei šį serverį naudojate tik vienam Moodle egzemplioriui, galite palikti šią reikšmę numatytąją.
* Dėl rakto ilgio apribojimų, leidžiama ne daugiau kaip 5 simboliai.';
$string['prefixinvalid'] = 'Netinkamas prefiksas. Galite naudoti tik a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = '„Redis“ talpyklos papildinys trumpai saugo duomenis kaip talpyklos funkcijos dalį. Šie duomenys saugomi Redis serveryje, kur duomenys reguliariai šalinami.';
$string['privacy:metadata:redis:data'] = 'Įvairūs duomenys, saugomi talpykloje';
$string['serializer_igbinary'] = 'Igbinarinis serializatorius';
$string['serializer_php'] = 'Numatytasis PHP serializatorius';
$string['server'] = 'Serveris (-iai)';
$string['server_help'] = 'Testavimui naudojamas Redis serveris.

Keletas reikšmių pavyzdžių:

* testredis.abc.com - prisijungti prie Redis serverio pagal pagrindinio kompiuterio vardą (pagal numatytuosius nustatymus prievadas 6379).
* testredis.abc.com:1234 - prisijungti prie Redis serverio pagal pagrindinio kompiuterio vardą per konkretų prievadą.
* 1.2.3.4 - prisijungti prie Redis serverio pagal IP adresą (pagal numatytuosius nustatymus prievadas 6379).
* 1.2.3.4:1234 - prisijungti prie Redis serverio pagal IP adresą per konkretų prievadą.
* unix:///var/redis.sock - prisijungti prie Redis serverio naudojant Unix lizdą.
* /var/redis.sock - prisijungti prie Redis serverio naudojant Unix lizdą (alternatyvus formatas).

Jei įjungtas klasterio režimas, serverius nurodykite atskirose eilutėse, pvz.:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

Daugiau informacijos rasite <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">Accepting Client Connections</a> ir <a href="https://redis.io/resources/clients/#php">Redis PHP clients</a>.';
$string['task_ttl'] = 'Atlaisvinkite atmintį, kurią naudoja pasibaigę „Redis“ talpyklų įrašai';
$string['test_clustermode'] = 'Klasterio režimas';
$string['test_clustermode_desc'] = 'Įjungti testavimą „Redis“ klasterio režimu.';
$string['test_password'] = 'Testuoti serverio slaptažodį';
$string['test_password_desc'] = 'Redis bandomojo serverio slaptažodis.';
$string['test_serializer'] = 'Serializatorius';
$string['test_serializer_desc'] = 'Serializatorius, naudojamas bandymams.';
$string['test_server'] = 'Testuoti serverį';
$string['test_server_desc'] = 'Testavimui naudojamas Redis serveris.

Keletas reikšmių pavyzdžių:

* testredis.abc.com - prisijungti prie Redis serverio pagal pagrindinio kompiuterio vardą (pagal numatytuosius nustatymus prievadas 6379).
* testredis.abc.com:1234 - prisijungti prie Redis serverio pagal pagrindinio kompiuterio vardą per konkretų prievadą.
* 1.2.3.4 - prisijungti prie Redis serverio pagal IP adresą (pagal numatytuosius nustatymus prievadas 6379).
* 1.2.3.4:1234 - prisijungti prie Redis serverio pagal IP adresą per konkretų prievadą.
* unix:///var/redis.sock - prisijungti prie Redis serverio naudojant Unix lizdą.
* /var/redis.sock - prisijungti prie Redis serverio naudojant Unix lizdą (alternatyvus formatas).

Jei įjungtas klasterio režimas, serverius nurodykite atskirose eilutėse, pvz.:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

Daugiau informacijos rasite <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">Accepting Client Connections</a> ir <a href="https://redis.io/resources/clients/#php">Redis PHP clients</a>.';
$string['test_ttl'] = 'TTL testavimas';
$string['test_ttl_desc'] = 'Vykdyti našumo testą naudojant talpyklą, kuriai reikalingas TTL (lėtesni rinkiniai).';
$string['usecompressor'] = 'Naudoti kompresorių';
$string['usecompressor_help'] = 'Nurodomas kompresorius, kuris bus naudojamas po serijos. Tai daroma Moodle Cache API lygiu, o ne php-redis lygiu.';
$string['useserializer'] = 'Naudoti serializatorių';
$string['useserializer_help'] = 'Nurodomas serializatorius, naudojamas serializavimui.
Galiojantys serializatoriai yra Redis::SERIALIZER_PHP arba Redis::SERIALIZER_IGBINARY.
Pastarasis palaikomas tik tada, kai phpredis sukonfigūruotas su parinktimi --enable-redis-igbinary ir įkeliamas igbinary plėtinys.';
