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
 * Strings for component 'cachestore_memcached', language 'de', branch 'MOODLE_36_STABLE'
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
$string['isshared'] = 'Geteilter Cache';
$string['isshared_help'] = 'Wird ihr memcached Server auch von anderen Anwendungen genutzt?

Wenn der Cache mit anderen Anwendungen geteilt wird, dann wird jeder Schlüssel individuell gelöscht um sicherzustellen, dass nur Daten dieser Anwedungen gelöscht werden (Daten in externen Anwendungscaches bleiben unverändert). Dies kann zu verminderter Leistung führen, wenn der Cache geleert wird, dies hängt von ihren Server Einstellungen ab.

Wenn Sie einen bestimmten Cache für diese Anwendung nutzen, dann kann der ganze Cache geleert werden ohne Risiko die Cache Daten einer anderen Anwendung zu zerstören.
Die Löschung des Caches sollte zu erhöhter Leistung führen.';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Prefix-Schlüssel';
$string['prefix_help'] = 'Dies kann verwandt werden, um eine \'domain\' für Ihre Schlüsselwerte für mehrere memcached Speicher auf einer einzelnen memcached Installation zu erzeugen. Sie darf nicht länger als 16 Zeichen sein.';
$string['prefixinvalid'] = 'Ungültiger Schlüssel. Verwenden Sie nur a-z A-Z o-9 -_.';
$string['privacy:metadata:memcached'] = 'Das Memcache Cachestore-Plugin speichert kurzfristig Daten. Sie werden regelmäßig gelöscht.';
$string['privacy:metadata:memcached:data'] = 'Verschiedene im Cache gespeicherte Daten';
$string['serialiser_igbinary'] = 'Serialiser igbinary';
$string['serialiser_json'] = 'Serialiser JSON';
$string['serialiser_php'] = 'Standardmäßiger PHP-Serialiser';
$string['servers'] = 'Server';
$string['serversclusterinvalid'] = 'Wenn das Clustering aktiviert wird, ist die Angabe genau eines Servers notwendig.';
$string['servers_help'] = 'Diese Option legt die Server für den Memcached Adapter fest.
Verwenden Sie für jeden Server eine neue Zeile. Tragen Sie die Serveradresse, den Port (optonal) und die Gewichtung (optonal) ein.  Wenn kein Port angegeben ist, wird der standardmäßige Port 11211 verwendet.

Beispiele:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

Wenn unten *Cluster-Server aktivieren* ausgewählt ist, darf nur ein Server angegeben sein. Normalerweise ist das ein Name, der sich auf die lokale Maschine bezieht, z.B. 127.0.0.1 oder localhost.';
$string['sessionhandlerconflict'] = 'Warnung: Eine Memcached Instanz ({$a}) ist so konfiguriert, dass sie den gleichen Memcached Server wie Sessons verwendet. Das Löschen aller Caches wird gleichzeitig auch alle Sessions löschen.';
$string['setservers'] = 'Server auswählen';
$string['setservers_help'] = 'In der Liste sind die zu aktualisierenden Server aufgeführt, wenn Daten im Cache verändert werden, u.z. mit vollständigem Namen für jeden Server im Pool.
Es **muss** den Server enthalten, der unter *Server* oben gelistet, möglicherweise mit einem anderen Hostnamen.
In jeder Zeile wird ein Server mit Serveradresse und optional einem Port eingetragen.
Wenn kein Port eingetragen wird, wird standardmäßig Port 11211 verwendet.

Beispiel:
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = 'Testserver';
$string['testservers_desc'] = 'In diesem Feld können eine oder mehrere Verbindungsadressen zu Memcached-Servern angegeben werden. Wenn ein entsprechender Testserver vorhanden ist, kann die Memcached-Performance über die Cache-Seite im Administrationsblock getestet werden.
Beispielserver: 127.0.0.1:11211';
$string['upgrade200recommended'] = 'Wir empfehlen Ihnen ein Upgrade Ihrer Memcached PHP Erweiterung auf Version 2.0.0 oder höher.
Die von Ihnen derzeit verwendete Memcached PHP Erweiterung bietet nicht die Funktionalität, die Moodle nutzt, um ein Sandbox Cache sicherzustellen. Wir empfehlen Ihnen bis zum Upgrade keine weiteren Anwendungen mit denselben Memcached Servern zu konfigurieren, die Moodle nutzt.';
$string['usecompression'] = 'Komprimierung benutzen';
$string['usecompression_help'] = '(De-)Aktiviert die Kompression für die Ladelast. Nach der Aktivierung werden Werte, die eine definierte Grenzgröße (derzeit 100 Bytes) übersteigen, beim Speichern komprimiert und beim Aufruf transparent dekomprimiert.';
$string['useserialiser'] = 'Serialiser verwenden';
$string['useserialiser_help'] = 'Legt das Serialisierungsprogramm für die Serialisierung nicht-skalare Werte fest. Die gültigen Serialisierungsprogramme sind Memcached :: SERIALIZER_PHP oder Memcached :: SERIALIZER_IGBINARY. Letztere wird nur unterstützt, wenn memcached mit konfiguriert ist - enable-memcached-igbinary Option und die igbinary Erweiterung geladen wird.';
