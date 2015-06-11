<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'cachestore_memcached', language 'de', branch 'MOODLE_28_STABLE'
 *
 * @package   cachestore_memcached
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Buffer schreiben';
$string['bufferwrites_help'] = '(De-)Aktiviert gepufferte I/O. Das Aktivieren verursacht Speicherkommandos zum \'puffern\', statt zum senden. Jede Aktio, die Daten abfragt, löst Puffer statt Sendeprozesse zur externen Verbindung aus. Das Schließen oder Beenden der Verbindung verursacht ebenfalls ein Puffern der Daten zur Übertragung zur externen Verbindung.';
$string['clustered'] = 'Clusterserver aktivieren';
$string['clusteredheader'] = 'Server aufteilen';
$string['clustered_help'] = 'Die Funktion wird genutzt, um einmal zu lesen und mehrere Funktionen auszuführen.

Die Idee hinter dem Konzept liegt darin, einen verbesserten Store für Load-balanced Konfigurationen zur Verfügung zu stellen.  Der Store holt Daten von einem Server (meist localhost) setzt sie aber für mehrere (alle server im load-balanced Pool). Für Caches mit sehr hohen read-to-set ratios spart dies Last im Netzwerk deutlich.

Wenn die Einstellung aktiviert wird, wird der oben aufgeführte Server zum Abholen der Daten verwandt.';
$string['hash'] = 'Hash-Verfahren';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Standard (einzeln)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Legt den Hash-Algorithmus für die Schlüssel fest. Jeder Hash-Algorithmus hat seine Vor- und Nachteile. Nehmen Sie den Standardwert wenn sie sich nicht weiteren Details auskennen.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Prefix-Schlüssel';
$string['prefix_help'] = 'Dies kann verwandt werden, um eine \'domain\' für Ihre Schlüsselwerte für mehrere memcached Speicher auf einer einzelnen memcached Installation zu erzeugen. Sie darf nicht länger als 16 Zeichen sein.';
$string['prefixinvalid'] = 'Ungültiger Schlüssel. Verwenden Sie nur a-z A-Z o-9 -_.';
$string['serialiser_igbinary'] = 'Serialiser igbinary';
$string['serialiser_json'] = 'Serialiser JSON';
$string['serialiser_php'] = 'Standardmäßiger PHP-Serialiser';
$string['servers'] = 'Server';
$string['serversclusterinvalid'] = 'Wenn das Clustering aktiviert wird, ist die Angabe genau eines Servers notwendig.';
$string['servers_help'] = 'Diese Option legt die Server fest, die für den Memcached Adapter benutzt werden sollen.
Benutzen Sie für jeden Server eine neue Zeile. Tragen Sie die Serveradresse und optional einen Port und einen Rang ein.
Wenn kein Port eingetragen ist, wird der Standardport 11211 verwendet.

z.B.:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

Falls *Clustered Server aktiviert* sind! darf nur ein Server in der Liste stehen. Normalerweise wird hier dann ein Name angegeben, der auf die lokale Maschine verweist, also localhost oder 127.0.0.1.';
$string['sessionhandlerconflict'] = 'Warnung: Eine Memcached Instanz ({$a}) ist so konfiguriert, dass sie den gleichen Memcached Server wie Sessons verwendet. Das Löschen aller Caches wird gleichzeitig auch alle Sessions löschen.';
$string['setservers'] = 'Server auswählen';
$string['setservers_help'] = 'Dies ist die Liste der Server, die aktualisiert werden wenn Daten im Cache verändert werden.  Aufgeführt wird der vollständige Name für jeden Server im Pool.
Es **müssen** die Server, die unter *Server* oben enthalten sein, auch wenn es einen anderen Hostnamen gibt.
In jeder Zeile wird ein Server mit Serveradresse und optional einem Port eingetragen.
Wenn kein Port eingetragen wird, wird Port 11211 verwendet.

Zum Beispiel:
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = 'Testserver';
$string['testservers_desc'] = 'In diesem Feld können eine oder mehrere Verbindungsadressen zu Memcached-Servern angegeben werden. Wenn ein entsprechender Testserver vorhanden ist, kann die Memcached-Performance über die Cache-Seite im Administrationsblock getestet werden.
Beispielserver: 127.0.0.1:11211';
$string['usecompression'] = 'Komprimierung benutzen';
$string['usecompression_help'] = '(De-)Aktiviert die Kompression für die Ladelast. Nach der Aktivierung werden Werte, die eine definierte Grenzgröße (derzeit 100 Bytes) übersteigen, beim Speichern komprimiert und beim Aufruf transparent dekomprimiert.';
$string['useserialiser'] = 'Serialiser verwenden';
$string['useserialiser_help'] = 'Legt das Serialisierungsprogramm für die Serialisierung nicht-skalare Werte fest. Die gültigen Serialisierungsprogramme sind Memcached :: SERIALIZER_PHP oder Memcached :: SERIALIZER_IGBINARY. Letztere wird nur unterstützt, wenn memcached mit konfiguriert ist - enable-memcached-igbinary Option und die igbinary Erweiterung geladen wird.';
