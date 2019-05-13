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
 * Strings for component 'cachestore_memcached', language 'nl', branch 'MOODLE_34_STABLE'
 *
 * @package   cachestore_memcached
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Schrijfbuffer';
$string['bufferwrites_help'] = 'Schakelt de buffer voor I/O in of uit. De buffer inschakelen zorgt ervoor dat opslagcommando\'s gebufferd worden in plaats van onmiddellijk verzonden. Gelijk welke activiteit die gegevens opvraagt zorgt ervoor dat deze buffer naar de externe connectie gestuurd wordt. Het beëindigen van de connectie of het sluiten van de connectie veroorzaakt ook het verzenden van de gebufferde gegevens naar de externe connectie.';
$string['clustered'] = 'Geclusterde servers inschakelen';
$string['clusteredheader'] = 'Servers splitsen';
$string['clustered_help'] = 'Dit wordt gebruikt om lees één, schrijf veel functionaliteit mogelijk te maken.

Het bedoelde gebruik is om een geöptimaliseerder opslagruimte te maken voor configuratie die load-balancing gebruiken. De opslagruimte zal van één server (gewoonlijk localhost), maar schrijft weg naar veel server (alle servers in de load balance pool). Voor caches waarbij de lees/schrijfverhouding erg groot is, bespaart dit veel netwerkbelasting.

Wanneer deze instelling is ingeschakeld, dan wordt de server hierboven opgelijst.';
$string['hash'] = 'Versleutelmethode';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Standaard (één tegelijk)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A64';
$string['hash_help'] = 'Bepaalt het versleutelalgoritme dat gebruikt wordt voor de itemsleutels. Elk versleutelalgoritme heeft zijn voordelen en nadelen. Gebruik de standaardinstelling als je het niet weet of als het voor jou niet belangrijk is.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['isshared'] = 'Gedeelde cache';
$string['isshared_help'] = 'Wordt je Memcached server ook gebruikt door andere applicaties?

Als de cache gedeeld wordt door andere applicaties, dan zal elke sleutel afzonderlijk verwijderd worden om er zekere van te zijn dat enkel gegevens van deze applicatie verwijderd worden (en terwijl externe applicatiedata ongewijzigd laten). Dit kan een verminderde performantie opleveren tijdens het verwijderen van je cache, afhankelijk van je serverconfiguratie.

Als je een toegewezen cache gebruikt voor deze applicatie, dan kan de hele cache veilig gewist worden zonder het risico gegevens van andere applicaties te vernielen. Dit zou een beter resultaat moeten opleveren tijdens het leegmaken van de cache.';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Prefix sleutel';
$string['prefix_help'] = 'Dit kan gebruikt worden om een "domein" voor je itemsleutels te zetten, waardoor je meerdere memcached opslagruimten op één enkele memcached installatie kan maken. Dit kan niet langer dan 16 tekens zijn om te verzekeren dat sleutellengtes geen problemen gaan veroorzaken.';
$string['prefixinvalid'] = 'Ongeldige prefix. Je mag enkel a-z A-Z 0-9 _ gebruiken';
$string['privacy:metadata:memcached'] = 'De Memcached-plugin bewaart gegevens kort als deel van zijn cachingsfunctie. Deze gegevens worden bewaard op een Memcache-server en daar regelmatig gewist.';
$string['privacy:metadata:memcached:data'] = 'De gegevens die in cache bewaard worden';
$string['serialiser_igbinary'] = 'De igbinary serializer.';
$string['serialiser_json'] = 'De JSON serializer.';
$string['serialiser_php'] = 'De standaard PHP serialiser.';
$string['servers'] = 'Servers';
$string['serversclusterinvalid'] = 'Eén server is vereist wanneer clusters ingeschakeld wordt.';
$string['servers_help'] = 'Dit stelt de servers in die door de memcached adaptor gebruikt zouden moeten worden. Servers moeten één per lijn gedefinieerd worden en moeten bestaan uit een serveradres en optioneel een poort en een weging.
Indien er geen poort wordt opgegeven, dan wordt de standaardpoort (11211) gebruikt.

Bijvoorbeeld:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

In indien * Geclusterede servers inschakelen* is ingeschakeld onderaan, dan moet er hier één server in de lijst staan. Dit is gewoonlijk een naam die de lokale machine weergeeft, zoals localhost of 127.0.0.1.';
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
$string['upgrade200recommended'] = 'We raden aan dat je je Memcached PHP extentie upgrade naar versie 2.0.0 of hoger.
De versie van de Memcached PHP extentie die je nu gebruikt geeft de functionaliteit niet die Moodle gebruikt om een sandbox cache te maken. Zolang je de upgrade niet uitgevoerd hebt, raden we je aan om geen andere applicaties te configureren om dezelfde Memcached servers te gebruiken die Moodle gebruikt.';
$string['usecompression'] = 'Gebruik compressie';
$string['usecompression_help'] = 'Schakelt compressie in of uit. Indien ingeschakeld worden waarden groter dan een bepaalde drempelwaarde (op dit moment 100 bytes) gecomprimeerd tijdens de opslag en transparant gedecomprimeerd wanneer ze opgevraagd worden.';
$string['useserialiser'] = 'Gebruik serialiser';
$string['useserialiser_help'] = 'Specificeert de serializer te gebruiken om niet-scalaire waarden te serialiseren. De geldige serializers zijn Memcached :: SERIALIZER_PHP of Memcached :: SERIALIZER_IGBINARY. Deze laatste wordt alleen ondersteund als memcached is geconfigureerd met - enable-memcached-igbinary optie en als de igbinary extensie is geladen.';
