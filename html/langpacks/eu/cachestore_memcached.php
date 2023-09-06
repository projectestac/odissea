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
 * Strings for component 'cachestore_memcached', language 'eu', version '4.1'.
 *
 * @package     cachestore_memcached
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Idazteko buffer-ak';
$string['bufferwrites_help'] = 'Buffer bidezko diskoko idazketa-irakurketak (I/O) gaitu edo desgaitzen ditu. Buffer bidezko idazketa-irakurketek biltegiratze-komandoak bidali beharrean "bufferatu" egiten ditu. Datuak eskuratzen dituen edozein ekintzak buffer hau urruneko zerbitzarira bidaltzea eragiten du. Konexioa amaitzea edo ixteak ere buferatutako datuak urruneko konexiora bidaltzea eragingo dute.';
$string['clustered'] = 'Gaitu taldekatutako zerbitzariak';
$string['clustered_help'] = 'Ezarpen hau behin-irakurri guztietan-ezarri funtzionalitatea baimentzeko erabiltzen da.

Nahitako erabilera-kasua karga-banatze konfigurazioetan biltegi hobetu bat sortzea da. Biltegiak zerbitzari batetik jasoko du datua (normalean localhost), baina anitzetan ezarriko du (karga-banatze guneko zerbitzari guztietan). Irakurketa-ratio handiko cacheetarako, ezarpen honek sare-gainkarga esanguratsua aurrezten du.

Ezarpen hau gaituta dagoenean, datuak eskuratzeko goiko zerrendan zehaztutako zerbitzariak erabiliko dira.';
$string['clusteredheader'] = 'Banatu zerbitzariak';
$string['hash'] = 'Hash metodoa';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Lehenetsitakoa (banaka)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Elementuen gakoetan erabiliko den hash algoritmoa zehazten du. Hash algoritmo bakoitzak bere abantailak eta desabantailak ditu. Erabili lehenetsitakoa, ez badakizu edo berdin badizu.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['isshared'] = 'Partekatutako cachea';
$string['isshared_help'] = 'Beste aplikazioren bat ere zure memcached zerbitzaria erabiltzen ari da?

Cachea beste aplikazio batzuekin partekatzen bada aplikazio honetako cachea garbitzen denean, aplikazio honenak diren datuak soilik ezabatzen direla bermatzeko, gako bakoitza banaka ezabatuko da (kanpoko aplikazioen cacheetako datuak aldatu gabe utzita). Aukera honek cachea garbitzeko unean errendimendua kaltetu dezake, zure zerbitzariaren konfigurazioaren arabera.

Aplikazio honentzako dedikatutako cachea erabiltzen ari bazara cache osorik ezabatu daiteke beste aplikazioren baten datuak ezabatzeko arriskurik izan gabe. Aukera honek cachea garbitzeko unean errendimendu hobea izango du.';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Gakoen aurrizkia';
$string['prefix_help'] = 'Aukera hau zure elementuen gakoentzako "domeinu" bat sortzeko erabili daiteke, eta horrela memecached instalazio bakarrean memcached biltegi anitz sortzeko aukera izango duzu. Ezin da 16 karaktere baino luzeagoa izan gako-luzera arazoak gertatzen ez direla bermatzeko.';
$string['prefixinvalid'] = 'Aurrizki baliogabea. Ondoko hauek baino ezin dira erabili: a-z A-Z 0-9-_.';
$string['privacy:metadata:memcached'] = 'Memcached cache-biltegi pluginak datuak laburki gordetzen ditu bere cache-funtzioaren baitan. Datu hauek Memcached zerbitzari batean gordetzen dira, eta bertan datuak erregularki ezabatzen dira.';
$string['privacy:metadata:memcached:data'] = 'Cachean gordetako era askotako datuak';
$string['serialiser_igbinary'] = 'igbinary serializatzailea.';
$string['serialiser_json'] = 'JSON serializatzailea.';
$string['serialiser_php'] = 'Lehenetsitako PHP serializatzailea.';
$string['servers'] = 'Zerbitzariak';
$string['servers_help'] = 'Hemen memcached egokitzaileak erabiliko dituen zerbitzariak zehazten dira.
Errenkada bakoitzean zerbitzari bat zehaztu behar da, zerbitzariaren helbidea eta aukeran ataka eta pisua zehaztuta.
Atakarik zehazten ez bada lehenetsitako ataka (11211) erabiliko da.

Adibidez:
<pre>
zerbitzari.url.eus
iphelbidea:ataka
zerbitzariizena:ataka:pisua
</pre>

Azpian *Gaitu taldekatutako zerbitzariak* markatuta badago hemen zerbitzari bakarra egon beharko du. Hau makina lokalera bideratzen duen izena izan ohi da, 127.0.0.1 edo localhost modukoa.';
$string['serversclusterinvalid'] = 'Zehazki zerbitzari bat behar da zerbitzari-taldekatzea gaituta dagoenean.';
$string['sessionhandlerconflict'] = 'Kontuz: saioak gordetzeko memcached zerbitzari bera erabiltzen duen memcached instantzia bat ({$a}) dago konfiguratuta. Cache guztiak garbituz gero saioak ere ezabatu egingo dira.';
$string['setservers'] = 'Ezarri zerbitzariak';
$string['setservers_help'] = 'Cacheko datuak aldatzen direnean eguneratuko diren zerbitzarien zerrenda da hau, normalean guneko zerbitzari bakoitzaren izen osoa.
Goiko *Zerbitzariak* zerrendan zehaztutako zerbitzaria ere agertuko **behar** da hemen, ostalari-izen ezberdinarekin bada ere.
Errenkada bakoitzean zerbitzari bat zehaztu behar da, zerbitzariaren helbidea eta aukeran ataka zehaztuta.
Atakarik zehazten ez bada lehenetsitako ataka (11211) erabiliko da.

Adibidez:
<pre>
zerbitzari.url.eus
iphelbidea:ataka
</pre>';
$string['testservers'] = 'Probetarako zerbitzariak';
$string['testservers_desc'] = 'memcached zerbitzariekin konexio-proba egiteko karaktere-katea edo kateak. Probetarako zerbitzari bat zehaztu bada memcached-en errendimendua kudeaketa blokeko Cache atalaren Probatu errendimendua orria erabiliz probatu daiteke.
Adibidez: 127.0.0.1:11211';
$string['upgrade200recommended'] = 'Zure PHPko Memcached hedapena 2.0.0 bertsiora edo goragoko batera eguneratzea gomendatzen dizugu.
Une honetan erabiltzen ari zaren PHPko Memcached hedapenak ez du Moodlek erabiltzen duen "sandboxed cache" funtzioa eskaintzen. Eguneratu bitartean Moodlek erabiltzen duen Memcached zerbitzari bera erabiltzen duen beste aplikaziorik ez konfiguratzea gomendatzen dizugu.';
$string['usecompression'] = 'Erabili konpresioa';
$string['usecompression_help'] = 'Konpresioa gaitu edo desgaitzen du. Gaituz gero, atalase batetik goragoko elementuen balioak (une honetan 100 byte) gordetzerakoan konprimatuko dira eta berriz eskuratzean gardenki deskonprimatuko dira.';
$string['useserialiser'] = 'Erabili serializatzailea';
$string['useserialiser_help'] = 'Eskalarrak ez diren balioak serializatzeko erabiliko den serializatzailea zehazten du.
Baliozkoak diren serializatzaileak Memcached::SERIALIZER_PHP edo Memcached::SERIALIZER_IGBINARY dira.
Azken hau soilik onartzen da memcached --enable-memcached-igbinary aukerarekin konfiguratuta eta igbinary hedapena kargatuta dagoenean.';
