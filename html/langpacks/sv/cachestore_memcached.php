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
 * Strings for component 'cachestore_memcached', language 'sv', version '4.1'.
 *
 * @package     cachestore_memcached
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Bufferskrivningar';
$string['bufferwrites_help'] = 'Aktiverar eller inaktiverar buffrad I/O. Om du aktiverar kommandot buffrad I/O blir lagringskommandon "buffrade" i stället för att skickas. Alla åtgärder som hämtar data gör att den här bufferten skickas till fjärranslutningen. Om du avslutar anslutningen eller stänger anslutningen skickas även de buffrade data till fjärranslutningen.';
$string['clustered'] = 'Aktivera klustrade tjänster';
$string['clustered_help'] = 'Detta används för att tillåta read-one, set-multi-funktioner.

Det avsedda användningsfallet är att skapa ett förbättrat lager för lastbalanserade konfigurationer. Lagret hämtas från en server (vanligtvis localhost), men ställs in på många (alla servrar i lastbalanseringspoolen). För cacheminnen med mycket höga läs-till-set-förhållanden sparar detta en betydande mängd nätverksbelastning.

När den här inställningen är aktiverad används servern ovan för hämtning.';
$string['clusteredheader'] = 'Dela upp servrar';
$string['hash'] = 'Hashmetod';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Standard (en åt gången)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Anger hash-algoritmen som används för objektnycklsrns. Varje hash-algoritm har sina fördelar och nackdelar. Använf standard om du inte vet eller inte bryr dig om vilket.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['isshared'] = 'Delad cache';
$string['isshared_help'] = 'Används din memcached-server också av andra applikationer?

Om cachen delas av andra program tas varje nyckel bort individuellt för att säkerställa att endast data som ägs av det här programmet rensas (vilket lämnar extern programcachedata oförändrad). Detta kan resultera i minskad prestanda vid rensning av cacheminnet, beroende på serverkonfigurationen.

Om du använder en dedikerad cache för det här programmet kan hela cachen tömmas utan risk att förstöra ett annat programs cachedata. Detta bör resultera i ökad prestanda vid rensning av cacheminnet.';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Prefixnyckel';
$string['prefix_help'] = 'Detta kan användas för att skapa en "domän" för dina objektsnycklar så att du kan skapa flera memcached lager för en enda memcached-installation. Namnet kan inte vara längre än 16 tecken för att säkerställa att längdproblem inte uppstår.';
$string['prefixinvalid'] = 'Ogiltigt prefix. Du kan enbart använda a-z A-Z 0-9-_.';
$string['privacy:metadata:memcached'] = 'Pluginmodulen Memcached cachestore lagrar data kort som en del i sin cachelagringsfunktionalitet. Dessa data lagras på en Memcache-server där data regelbundet tas bort.';
$string['privacy:metadata:memcached:data'] = 'De olika data som lagras i cacheminnet';
$string['serialiser_igbinary'] = 'Igbinary-serialiserare';
$string['serialiser_json'] = 'JSON-serialiserare';
$string['serialiser_php'] = 'Standard PHP-serialiserare.';
$string['servers'] = 'Servrar';
$string['servers_help'] = 'Detta ställer in servrarna som ska användas av denna memcached adapter.
Servrar ska definieras en per rad och bestå av en serveradress och eventuellt en port och viktning.
Om ingen port anges används standardporten (11211).

Till exempel:
<pre>
server.url.com
ipaddress:port
servernamn:port:viktning
</pre>

Om *Aktivera klustrade servrar* är aktiverat nedan får det enbart anges en server här. Detta är vanligtvis ett namn som alltid pekar på den lokala datorn, som 127.0.0.1 eller localhost.';
$string['serversclusterinvalid'] = 'Exakt <em>en</em> server krävs när klustring aktiverats.';
$string['sessionhandlerconflict'] = 'Varning: En memcached-instans ({$a}) har konfigurerats för att använda samma memcached server som sessionerna. Om du tömmer alla cacheminnen tas även sessionerna bort.';
$string['setservers'] = 'Uppsatta servrar';
$string['setservers_help'] = 'Det här är listan över servrar som uppdateras när data ändras i cacheminnet. I allmänhet det fullständigt kvalificerade namnet på varje server i poolen.
Det **måste** inkludera servern som listas i *Servrar* ovan, även om det är med ett annat värdnamn.
Servrar ska definieras en per rad och bestå av en serveradress och eventuellt en port.
Om ingen port anges används standardporten (11211).

Till exempel:
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = 'Testservrar';
$string['testservers_desc'] = 'En eller flera anslutningssträngar för memcached servrar att testa mot. Om en testserver har angetts kan memcached-prestanda testas med hjälp av cacheprestandasidan i administrationsblocket.
Ett exempel: 127.0.0.1:11211';
$string['upgrade200recommended'] = 'Vi rekommenderar att du uppgraderar ditt Memcached PHP-tillägg till version 2.0.0 eller senare.
Den version av Memcached PHP-tillägget som du för närvarande använder tillhandahåller inte den funktionalitet moodle använder för att säkerställa en cache i avgränsat läge. Tills du uppgraderar rekommenderar vi att du inte konfigurerar några andra program att använda samma Memcached-servrar som Moodle är konfigurerad att använda.';
$string['usecompression'] = 'Använd komprimering';
$string['usecompression_help'] = 'Aktiverar eller inaktiverar nyttolastkomprimering. När det är aktiverat komprimeras objektsvärden längre än ett visst tröskelvärde (för närvarande 100 byte) vid lagring och dekomprimeras vid hämtningen. Komprimering och dekomprimeringen sker automatiskt.';
$string['useserialiser'] = 'Använd serialiserare';
$string['useserialiser_help'] = 'Anger den serialiserare som ska användas för serialisering av värden som inte är skalärvärden.
De giltiga serialisatorerna är Memcached::SERIALIZER_PHP eller Memcached::SERIALIZER_IGBINARY.
Det senare stöds bara när memcached är konfigurerat med <code>--enable-memcached-igbinary</code>-alternativet och igbinary-tillägget är inläst.';
