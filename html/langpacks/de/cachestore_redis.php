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
 * Strings for component 'cachestore_redis', language 'de', version '4.4'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'CA-Dateipfad';
$string['ca_file_help'] = 'Certificate Authority im lokalen Dateisystem';
$string['clustermode'] = 'Cluster-Modus';
$string['clustermode_help'] = 'Durch die Aktivierung des Cluster-Modus wird die Redis-Cluster-Funktion ausgeführt, sodass Ihr Server mehrere Server bedienen und gleichzeitige Anfragen gleichzeitig verarbeiten kann.';
$string['clustermodeunavailable'] = 'Der Redis-Cluster ist derzeit nicht verfügbar. Stellen Sie bitte sicher, dass die PHP-Redis-Erweiterung die Redis-Cluster-Funktionalität unterstützt.';
$string['compressor_none'] = 'Keine Komprimierung';
$string['compressor_php_gzip'] = 'GZIP-Komprimierung';
$string['compressor_php_zstd'] = 'Z-Kompimierung';
$string['connectiontimeout'] = 'Verbindungs-Timeout';
$string['connectiontimeout_help'] = 'Dadurch wird das Timeout beim Verbindungsversuch mit dem Redis-Server festgelegt.';
$string['encrypt_connection'] = 'TLS-Verschlüsselung verwenden';
$string['encrypt_connection_help'] = 'Verwenden Sie TLS, um eine Verbindung zu Redis herzustellen. Verwenden Sie nicht "tls://" im Hostnamen für Redis, sondern verwenden Sie stattdessen diese Option.';
$string['password'] = 'Kennwort';
$string['password_help'] = 'Tragen Sie das Passwort des Redis-Servers ein';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Key-Prefix';
$string['prefix_help'] = 'Der Prefix wird für alle Schlüsselnamen des Redis-Servers genutzt.
* Wenn Sie nur eine Moodle-Instanz auf diesem Server verwenden, kann der Default Wert verwendet werden
* Aufgrund von Längenbeschränkungen sind max. 5 Zeichen zulässig.';
$string['prefixinvalid'] = 'Ungültiges Vorzeichen. Sie können nur a-z A-Z 0-9-_ nutzen.';
$string['privacy:metadata:redis'] = 'Das Redis Cachestore-Plugin speichert kurzfristig Daten. Sie werden regelmäßig gelöscht.';
$string['privacy:metadata:redis:data'] = 'Verschiedene im Cache gespeicherte Daten';
$string['serializer_igbinary'] = 'igbinary Serializer';
$string['serializer_php'] = 'Standard PHP Serializer';
$string['server'] = 'Server';
$string['server_help'] = 'Redis-Server zum Testen.

Beispiele:

* testredis.abc.com – Zum Herstellen einer Verbindung zu einem Redis-Server über den Hostnamen (standardmäßig Port 6379).
* testredis.abc.com:1234 – Zum Herstellen einer Verbindung zu einem Redis-Server über den Hostnamen mit einem bestimmten Port.
* 1.2.3.4 – Zum Herstellen einer Verbindung zu einem Redis-Server über die IP-Adresse (standardmäßig Port 6379).
* 1.2.3.4:1234 – Zum Herstellen einer Verbindung zu einem Redis-Server über die IP-Adresse mit einem bestimmten Port.
* unix:///var/redis.sock – Zum Herstellen einer Verbindung zu einem Redis-Server über einen Unix-Socket.
* /var/redis.sock – Zum Herstellen einer Verbindung zu einem Redis-Server über einen Unix-Socket (alternatives Format).

Wenn der Clustermodus aktiviert ist, geben Sie die Server durch eine neue Zeile getrennt an, zum Beispiel:<br>
   172.23.0.11<br>
   172.23.0.12<br>
   172.23.0.13<br>

Weitere Infos finden Sie unter <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">Akzeptieren von Clientverbindungen</a> und <a href="https://redis .io/resources/clients/#php">Redis PHP-Clients</a>.';
$string['task_ttl'] = 'Speicher freigeben, der von abgelaufenen Redis Caches verwendet wird';
$string['test_clustermode'] = 'Cluster-Modus';
$string['test_clustermode_desc'] = 'Aktivieren Sie den Test im Redis-Clustermodus.';
$string['test_password'] = 'Testserver-Passwort';
$string['test_password_desc'] = 'Redis Testserver-Passwort';
$string['test_serializer'] = 'Serializer';
$string['test_serializer_desc'] = 'Serializer zur Verwendung beim Testen';
$string['test_server'] = 'Testserver';
$string['test_server_desc'] = 'Redis-Server zum Testen.

Beispiele:

* testredis.abc.com – Zum Herstellen einer Verbindung zu einem Redis-Server über den Hostnamen (standardmäßig Port 6379).
* testredis.abc.com:1234 – Zum Herstellen einer Verbindung zu einem Redis-Server über den Hostnamen mit einem bestimmten Port.
* 1.2.3.4 – Zum Herstellen einer Verbindung zu einem Redis-Server über die IP-Adresse (standardmäßig Port 6379).
* 1.2.3.4:1234 – Zum Herstellen einer Verbindung zu einem Redis-Server über die IP-Adresse mit einem bestimmten Port.
* unix:///var/redis.sock – Zum Herstellen einer Verbindung zu einem Redis-Server über einen Unix-Socket.
* /var/redis.sock – Zum Herstellen einer Verbindung zu einem Redis-Server über einen Unix-Socket (alternatives Format).

Wenn der Clustermodus aktiviert ist, geben Sie die Server durch eine neue Zeile getrennt an, zum Beispiel:<br>
   172.23.0.11<br>
   172.23.0.12<br>
   172.23.0.13<br>

Weitere Infos finden Sie unter <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">Akzeptieren von Clientverbindungen</a> und <a href="https://redis .io/resources/clients/#php">Redis PHP-Clients</a>.';
$string['test_ttl'] = 'TTL testen';
$string['test_ttl_desc'] = 'Leistungstest ausführen, der einem Cache mit TTL (langsamere Einstellungen) erfordert.';
$string['usecompressor'] = 'Komprimierung verwenden';
$string['usecompressor_help'] = 'Diese Einstellung gibt den Kompressor an, der nach der Serialisierung verwendet werden soll. Dies erfolgt auf Moodle Cache-API-Ebene, nicht auf PHP-Redis-Ebene.';
$string['useserializer'] = 'Serializer verwenden';
$string['useserializer_help'] = 'Diese Option legt den Serializer fest, der für die Serialisierung verwendet werden soll.
Die gültigen Serializer sind Redis::SERIALIZER_PHP oder Redis::SERIALIZER_IGBINARY.
Letzterer wird nur unterstützt, wenn phpredis mit der Option --enable-redis-igbinary konfiguriert ist und die PHP-Extension igbinary geladen ist.';
