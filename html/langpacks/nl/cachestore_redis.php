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
 * Strings for component 'cachestore_redis', language 'nl', version '4.1'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['compressor_none'] = 'Geen compressie.';
$string['compressor_php_gzip'] = 'Gebruik gzip-compressie.';
$string['compressor_php_zstd'] = 'Gebruik Zstandard-compressie.';
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
$string['serializer_igbinary'] = 'De igbinary-serializer.';
$string['serializer_php'] = 'De standaard PHP-serializer.';
$string['server'] = 'Server';
$string['server_help'] = 'Dit stelt de hostnaam of IP-adres in van de te gebruiken Redis-server.';
$string['task_ttl'] = 'Maak geheugen vrij dat gebruikt wordt door verlopen items in de Redis cache';
$string['test_password'] = 'Testserver wachtwoord';
$string['test_password_desc'] = 'Redis testserver wachtwoord';
$string['test_serializer'] = 'Serializer';
$string['test_serializer_desc'] = 'Te gebruiken serializer voor testen';
$string['test_server'] = 'Testserver';
$string['test_server_desc'] = 'Redis testserver';
$string['test_ttl'] = 'TTL testen';
$string['test_ttl_desc'] = 'Start de performantietests met een cache die TTL vereist (tragere sets).';
$string['usecompressor'] = 'Gebruik een compressor';
$string['usecompressor_help'] = 'Specificeert de compressor die moet worden gebruikt na serialisatie. Het wordt gedaan op Moodle Cache API-niveau, niet op php-redis-niveau.';
$string['useserializer'] = 'Gebruik serializer';
$string['useserializer_help'] = 'Specificeert de te gebruiken serializer.
De geldige serializers zijn Redis::SERIALIZER_PHP of Redis::SERIALIZER_IGBINARY.
De laatste wordt enkel ondersteund wanneer phpredis geconfigureerd is met de --enable-redis-igbinary-optie en de igbinary-extensie geladen is.';
