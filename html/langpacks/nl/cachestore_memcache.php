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
 * Strings for component 'cachestore_memcache', language 'nl', version '4.1'.
 *
 * @package     cachestore_memcache
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clustered'] = 'Clusterserver inschakelen';
$string['clustered_help'] = 'Dit wordt gebruikt om lees één, schrijf veel functionaliteit mogelijk te maken.

Het bedoelde gebruik is om een geöptimaliseerder opslagruimte te maken voor configuratie die load-balancing gebruiken. De opslagruimte zal van één server (gewoonlijk localhost), maar schrijft weg naar veel server (alle servers in de load balance pool). Voor caches waarbij de lees/schrijfverhouding erg groot is, bespaart dit veel netwerkbelasting.

Wanneer deze instelling is ingeschakeld, dan wordt de server hierboven opgelijst.';
$string['clusteredheader'] = 'Split servers';
$string['pluginname'] = 'Memcache';
$string['prefix'] = 'Sleutel voorvoegsel';
$string['prefix_help'] = 'Dit prefix wordt gebruikt voor alle sleutelnamen op de memcacheserver.
* Als je slechts één Moodleinstantie op deze server hebt, kun je deze waarde standaard laten.
* Door de beperking op de sleutellengte mag je slechts 5 tekens gebruiken.';
$string['prefixinvalid'] = 'Ongeldige prefix. Je mag enkel a-z A-Z 0-9 _ gebruiken';
$string['privacy:metadata:memcache'] = 'De Memcache-plugin bewaart gegevens kort als deel van zijn cachingsfunctie. Deze gegevens worden bewaard op een Memcache-server en daar regelmatig gewist.';
$string['privacy:metadata:memcache:data'] = 'De gegevens die in cache bewaard worden';
$string['servers'] = 'Servers';
$string['servers_help'] = 'Hiermee worden de servers ingesteld die door de memcache-adaptor gebruikt moeten worden. Servers moeten één per regel gedefiniëerd worden en moeten een serveradres en optioneel een poort en weging bevatten. Als er geen poort opgegeven wordt, dan wordt de standaardpoort gebruikt (11211).

Bijvoorbeeld:
<pre>
server.url.com
ipadres:poort
servernaam:poort:weging
</pre>

Als *Cluster servers* ingeschakeld is onderaan, dan moet er minstens één server daar in de lijst voorkomen. Dit kan de naam zijn die altijd de lokale machine geeft, bijvoorbeeld 127.0.0.1 of localhost.';
$string['serversclusterinvalid'] = 'Er is één server vereist wanneer je clustering inschakeld.';
$string['sessionhandlerconflict'] = 'Waarschuwing: een memcache instantie ({$a}) is geconfigureerd om dezelfde memcached server te gebruiken voor sessies. Het leegmaken van alle caches zal er voor zorgen dat ook sessies worden verwijderd.';
$string['setservers'] = 'Set servers';
$string['setservers_help'] = 'Dt is de lijst van servers die aangepast zal worden wanneer gegevens in de cache gewijzigd worden. Meestal de fully qualified domain name voor elke server in de pool.

De server in de lijst *Servers* hier boven **moet** in de lijst staan, zelfs al is het met een andere hostnaam.
Servers moeten één per lijn gedefinieerd worden en moeten bestaan uit een servernaam en optioneel een poort.
Als er geen poort opgegeven wordt, dan wordt de standaardpoort (11211) gebruikt.

Bijvoorbeeld:
<pre>
server.url.com
ip-adres:poort
</pre>';
$string['testservers'] = 'Testservers';
$string['testservers_desc'] = 'Eén of meer connectiestrings om de memcache-servers tegen te testen. Als er een testserver is opgegeven, dan kan de performantie getest worden door de cache performantiepagina te gebruiken in het administratieblok. Bijvoorbeeld: 127.0.0.1:11211';
