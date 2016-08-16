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
 * Strings for component 'cachestore_memcache', language 'de', branch 'MOODLE_31_STABLE'
 *
 * @package   cachestore_memcache
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clustered'] = 'Servercluster aktivieren';
$string['clusteredheader'] = 'Server aufteilen';
$string['clustered_help'] = 'Die Funktion wird genutzt, um einmal zu lesen und mehrere Funktionen auszuführen.

Die Idee hinter dem Konzept liegt darin, einen verbesserten Store für Load-balanced Konfigurationen zur Verfügung zu stellen.  Der Store holt Daten von einem Server (meist localhost) setzt sie aber für mehrere (alle server im load-balanced Pool). Für Caches mit sehr hohen read-to-set ratios spart dies Last im Netzwerk deutlich.

Wenn die Einstellung aktiviert wird, wird der oben aufgeführte Server zum Abholen der Daten verwandt.';
$string['pluginname'] = 'Memcache';
$string['prefix'] = 'Key Prefix';
$string['prefix_help'] = 'Der Prefix wird für alle Schlüsselbezeichnungen des MemCache-Servers genutzt.
* Wenn Sie nur eine Moodle-Instanz auf dem Server betreiben kann der Standardwert bestehen bleiben.
* Die Länge ist auf 5 Zeichen beschränkt.';
$string['prefixinvalid'] = 'Ungültiger Schlüssel. Verwenden Sie nur a-z A-Z o-9 -_.';
$string['servers'] = 'Server';
$string['serversclusterinvalid'] = 'Wenn das Clustering aktiviert wird, ist die Angabe genau eines Servers notwendig.';
$string['servers_help'] = 'Diese Option legt die Server für den Memcache Adapter fest.
Verwenden Sie für jeden Server eine neue Zeile. Tragen Sie die Serveradresse, den Port (optonal) und die Gewichtung (optonal) ein.  Wenn kein Port angegeben ist, wird der standardmäßige Port 11211 verwendet.

Beispiele:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

Wenn unten *Cluster-Server aktivieren* ausgewählt ist, darf nur ein Server angegeben sein. Normalerweise ist das ein Name, der sich auf die lokale Maschine bezieht, z.B. 127.0.0.1 oder localhost.';
$string['sessionhandlerconflict'] = 'Warnung: Eine Memcache Instanz ({$a}) ist so konfiguriert, dass sie den gleichen Memcached Server wie Sessons verwendet. Das Löschen aller Caches wird gleichzeitig auch alle Sessions löschen.';
$string['setservers'] = 'Server setzen';
$string['setservers_help'] = 'Diese Option legt die Server fest, die aktualisiert werden, wenn sich Daten im Cache geändert haben. Geben Sie für jeden Server den vollständigen Namen an.
Es **muss** jeder Server enthalten sein, der in der Liste *Server* aufgeführt ist, auch mit einem anderen Hostmamen.
Benutzen Sie für jeden Server eine neue Zeile. Tragen Sie die Serveradresse und optional einen Port ein.
Wenn kein Port eingetragen ist, wird der Standardport 11211 verwendet.

z.B.:
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = 'Testserver';
$string['testservers_desc'] = 'In diesem Feld können eine oder mehrere Verbindungsadressen zu Memcache-Servern angegeben werden. Wenn ein entsprechender Testserver vorhanden ist, kann die Memcache-Performance über die Cache-Seite im Administrationsblock getestet werden.
Beispielserver: 127.0.0.1:11211';
