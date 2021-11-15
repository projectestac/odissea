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
 * Strings for component 'cachestore_memcache', language 'eu', version '3.11'.
 *
 * @package     cachestore_memcache
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clustered'] = 'Gaitu taldekatutako zerbitzariak';
$string['clustered_help'] = 'Ezarpen hau behin-irakurri guztietan-ezarri funtzionalitatea baimentzeko erabiltzen da.

Nahitako erabilera-kasua karga-banatze konfigurazioetan biltegi hobetu bat sortzea da. Biltegiak zerbitzari batetik jasoko du datua (normalean localhost), baina anitzetan ezarriko du (karga-banatze guneko zerbitzari guztietan). Irakurketa-ratio handiko cacheetarako, ezarpen honek sare-gainkarga esanguratsua aurrezten du.

Ezarpen hau gaituta dagoenean, datuak eskuratzeko goiko zerrendan zehaztutako zerbitzariak erabiliko dira.';
$string['clusteredheader'] = 'Bereizi zerbitzariak';
$string['pluginname'] = 'Memcache';
$string['prefix'] = 'Gakoen aurrizkia';
$string['prefix_help'] = 'Aurrizki hau memcache zerbitzariko gakoen izen guztietan erabiliko da
* Zerbitzari hau erabiltzen duen Moodle instantzia bakarra baduzu, hemen berezko balioa utzi dezakezu.
* Luzera mugak direla-eta, hemen gehienez 5 karaktere baimentzen dira.';
$string['prefixinvalid'] = 'Aurrizki baliogabea. Ondoko hauek baino ezin dira erabili: a-z A-Z 0-9-_.';
$string['privacy:metadata:memcache'] = 'Memcache cache-biltegi pluginak datuak laburki gordetzen ditu bere cache-funtzioaren baitan. Datu hauek Memcache zerbitzari batean gordetzen dira, eta bertan datuak erregularki ezabatzen dira.';
$string['privacy:metadata:memcache:data'] = 'Cachean gordetako era askotako datuak';
$string['servers'] = 'Zerbitzariak';
$string['servers_help'] = 'Hemen memcache egokitzaileak erabiliko dituen zerbitzariak zehazten dira.
Errenkada bakoitzean zerbitzari bat zehaztu behar da, zerbitzariaren helbidea eta aukeran ataka eta pisua zehaztuta.
Atakarik zehazten ez bada berezko ataka (11211) erabiliko da.

Adibidez:
<pre>
zerbitzari.url.eus
iphelbidea:ataka
zerbitzariizena:ataka:pisua
</pre>

Azpian *Gaitu taldekatutako zerbitzariak* markatuta badago hemen zerbitzari bakarra egon beharko du. Hau makina lokalera bideratzen duen izena izan ohi da, 127.0.0.1 edo localhost modukoa.';
$string['serversclusterinvalid'] = 'Zehazki zerbitzari bat behar da zerbitzari-taldekatzea gaituta dagoenean.';
$string['sessionhandlerconflict'] = 'Kontuz: saioak gordetzeko memcache zerbitzari bera erabiltzen duen memcache instantzia bat ({$a}) konfiguratu da. Cache guztiak garbituz gero saioak ere ezabatu egingo dira.';
$string['setservers'] = 'Ezarri zerbitzariak';
$string['setservers_help'] = 'Cacheko datuak aldatzen direnean eguneratuko diren zerbitzarien zerrenda da hau, normalean guneko zerbitzari bakoitzaren izen osoa.
Goiko *Zerbitzariak* zerrendan zehaztutako zerbitzaria ere agertuko **behar** da hemen, ostalari-izen ezberdinarekin bada ere.
Errenkada bakoitzean zerbitzari bat zehaztu behar da, zerbitzariaren helbidea eta aukeran ataka zehaztuta.
Atakarik zehazten ez bada berezko ataka (11211) erabiliko da.

Adibidez:
<pre>
zerbitzari.url.eus
iphelbidea:ataka
</pre>';
$string['testservers'] = 'Probetarako zerbitzariak';
$string['testservers_desc'] = 'memcache zerbitzariekin konexio-proba egiteko karaktere-katea edo kateak. Probetarako zerbitzari bat zehaztu bada memcache-ren errendimendua kudeaketa blokeko Cache atalaren Probatu errendimendua orria erabiliz probatu daiteke.
Adibidez: 127.0.0.1:11211';
