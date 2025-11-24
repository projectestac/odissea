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
 * Strings for component 'cachestore_redis', language 'nl', version '4.5'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'CA-bestandspad';
$string['ca_file_help'] = 'Locatie van het certificaatautoriteitbestand op het lokale bestandssysteem';
$string['clustermode'] = 'Clustermodus';
$string['clustermode_help'] = 'Als je dit inschakelt, wordt de Redis-clusterfunctie uitgevoerd, waardoor je server meerdere servers kan bedienen om gelijktijdige verzoeken af te handelen.';
$string['clustermodeunavailable'] = 'Redis Cluster is momenteel niet beschikbaar. Zorg ervoor dat de PHP Redis-extensie de Redis Cluster-functionaliteit ondersteunt.';
$string['compressor_none'] = 'Geen compressie.';
$string['compressor_php_gzip'] = 'Gebruik gzip-compressie.';
$string['compressor_php_zstd'] = 'Gebruik Zstandard-compressie.';
$string['encrypt_connection'] = 'Gebruik TLS-encryptie.';
$string['encrypt_connection_help'] = 'Gebruik TLS om verbinding te maken met Redis. Gebruik  \'tls://\' niet in de hostnaam voor Redis, gebruik in plaats daarvan deze optie.';
$string['password'] = 'Wachtwoord';
$string['password_help'] = 'Dit stelt het wachtwoord in van de Redis-server.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Sleutelprefix';
$string['prefix_help'] = 'Deze prefix wordt gebruikt voor alle sleutelnamen op de Redis-server.
* Als je maar één Moodle-instantie draait op deze server, dan kun je deze waarde leeg laten.
* Door beperkingen op de sleutellengte is het maximale aantal tekens beperkt tot 5.';
$string['prefixinvalid'] = 'Ongeldige prefix. Je mag alleen a-z A-Z 0-9-_ gebruiken.';
$string['privacy:metadata:redis'] = 'De Redis cache store bewaart gegevens kort als deel van zijn cachingsfunctie. Deze gegevens worden bewaard op een Redis-server en daar regelmatig gewist.';
$string['privacy:metadata:redis:data'] = 'De gegevens die in cache bewaard worden';
$string['serializer_igbinary'] = 'Igbinary-serializer.';
$string['serializer_php'] = 'Standaard PHP-serializer.';
$string['server'] = 'Server(s)';
$string['server_help'] = 'Dit stelt de hostnaam, IP-adres of Unix-socket in van de te gebruiken Redis-server.

Enkele voorbeelden van instellingen:

* testredis.abc.com - Om met een Redisserver te verbinden met hostnaam  (Standaard via poort 6379).
* testredis.abc.com:1234 - Om met een Redisserver te verbinden met hostnaam  met een specifieke poort.
* 1.2.3.4 - Om met een Redisserver te verbinden met een IP-adres (Standaard via poort 6379).
* 1.2.3.4:1234 - Om met een Redisserver te verbinden via IP-adres met een specifieke poort.
* unix:///var/redis.sock - Om met een Redisserver te verbinden via een Unix socket.
* /var/redis.sock - Om met een Redisserver te verbinden via een Unix socket (alternatief formaat).

Als de clustermodus is ingeschakeld, geef dan servers op, gescheiden dooreen nieuwe regel. Bijvoorbeeld:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

Zie <a href="https://redis.io/docs/reference/clients/#accepting-client-connections" target="_new">Client-verbindingen aanvaarden</a> en <a href="https://redis.io/resources/clients/#php" target="_new">Redis PHP clients</a> voor meer informatie.';
$string['task_ttl'] = 'Maak geheugen vrij dat gebruikt wordt door verlopen items in de Redis cache';
$string['test_clustermode'] = 'Clustermodus';
$string['test_clustermode_desc'] = 'Schakel Test in Redis-clustermodus in.';
$string['test_password'] = 'Testserver wachtwoord';
$string['test_password_desc'] = 'Redis testserver wachtwoord';
$string['test_serializer'] = 'Serializer';
$string['test_serializer_desc'] = 'Te gebruiken serializer voor testen';
$string['test_server'] = 'Testserver';
$string['test_server_desc'] = 'Redis testserver.

Enkele voorbeelden van instellingen:

* testredis.abc.com - Om met een Redisserver te verbinden met hostnaam  (Standaard via poort 6379).
* testredis.abc.com:1234 - Om met een Redisserver te verbinden met hostnaam  met een specifieke poort.
* 1.2.3.4 - Om met een Redisserver te verbinden met een IP-adres (Standaard via poort 6379).
* 1.2.3.4:1234 - Om met een Redisserver te verbinden via IP-adres met een specifieke poort.
* unix:///var/redis.sock - Om met een Redisserver te verbinden via een Unix socket.
* /var/redis.sock - Om met een Redisserver te verbinden via een Unix socket (alternatief formaat).

Als de clustermodus is ingeschakeld, geef dan servers op, gescheiden dooreen nieuwe regel. Bijvoorbeeld:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

Zie <a href="https://redis.io/docs/reference/clients/#accepting-client-connections" target="_new">Client-verbindingen aanvaarden</a> en <a href="https://redis.io/resources/clients/#php" target="_new">Redis PHP clients</a> voor meer informatie.';
$string['test_ttl'] = 'TTL testen';
$string['test_ttl_desc'] = 'Start de performantietests met een cache die TTL vereist (tragere sets).';
$string['usecompressor'] = 'Gebruik een compressor';
$string['usecompressor_help'] = 'Specificeert de compressor die moet worden gebruikt na serialisatie. Het wordt gedaan op Moodle Cache API-niveau, niet op php-redis-niveau.';
$string['useserializer'] = 'Gebruik serializer';
$string['useserializer_help'] = 'Specificeert de te gebruiken serializer.
De geldige serializers zijn Redis::SERIALIZER_PHP of Redis::SERIALIZER_IGBINARY.
De laatste wordt enkel ondersteund wanneer phpredis geconfigureerd is met de --enable-redis-igbinary-optie en de igbinary-extensie geladen is.';
