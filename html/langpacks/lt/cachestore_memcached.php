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
 * Strings for component 'cachestore_memcached', language 'lt', version '4.5'.
 *
 * @package     cachestore_memcached
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Buferizuotas įrašymas';
$string['bufferwrites_help'] = 'Įjungia arba išjungia buferinį I/O. Įjungus buferinį I/O, saugojimo komandos „buferiuojasi“, o ne siunčiamos. Bet koks veiksmas, nuskaitantis duomenis, sukelia šio buferio siuntimą į nuotolinį ryšį. Nutraukus ryšį arba nutraukus ryšį, buferiniai duomenys taip pat bus perkelti į nuotolinį ryšį.';
$string['clustered'] = 'Įgalinti sugrupuotus serverius';
$string['clustered_help'] = 'Tai naudojama norint leisti read-one, set-multi funkcionalumus.

Numatytas naudojimo atvejis – sukurti patobulintą subalansuotų apkrovos konfigūracijų saugyklą. Saugykla bus paimta iš vieno serverio (paprastai „localhost“), bet nustatyta daugybei (visi serveriai apkrovos balanso telkinyje). Talpykloms, kurių skaitymo ir nustatymo santykis yra labai didelis, tai žymiai sumažina tinklo sąnaudas.

Kai šis nustatymas įjungtas, gavimui bus naudojamas aukščiau nurodytas serveris.';
$string['clusteredheader'] = 'Padalinti serverį';
$string['hash'] = 'Maišos metodas';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Numatytasis (po vieną)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Nurodo elementų raktams naudojamą maišos algoritmą. Kiekvienas maišos algoritmas turi savo privalumų ir trūkumų. Jei nežinote arba jums nerūpi, pasirinkite numatytąjį.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['isshared'] = 'Bendrinama talpykla';
$string['isshared_help'] = 'Ar jūsų atmintinėje išsaugotą serverį taip pat naudoja kitos programos?

Jei talpyklą dalijasi kitos programos, kiekvienas raktas bus ištrintas atskirai, siekiant užtikrinti, kad būtų išvalyti tik šiai programai priklausantys duomenys (išorinės programos talpyklos duomenys paliekami nepakitę). Dėl to gali sumažėti našumas išvalant talpyklą, atsižvelgiant į jūsų serverio konfigūraciją.

Jei naudojate šiai programai skirtą talpyklą, visą talpyklą galima saugiai išvalyti, nerizikuojant sunaikinti kitos programos talpyklos duomenis. Dėl to turėtų padidėti našumas išvalant talpyklą.';
$string['pluginname'] = '„Memcached“';
$string['prefix'] = 'Priešdėlio raktas';
$string['prefix_help'] = 'Tai gali būti naudojama kuriant elementų raktų „domeną“, leidžiantį sukurti kelias atmintyje esančias saugyklas vienoje atmintyje. Jis negali būti ilgesnis nei 16 simbolių, kad būtų išvengta rakto ilgio problemų.';
$string['prefixinvalid'] = 'Netinkamas prefiksas. Galite naudoti tik a-z A-Z 0-9-_.';
$string['privacy:metadata:memcached'] = '„Memcached“ talpyklos papildinys trumpai saugo duomenis kaip talpyklos funkcijos dalį. Šie duomenys saugomi „Memcache“ serveryje, kur duomenys reguliariai šalinami.';
$string['privacy:metadata:memcached:data'] = 'Įvairūs duomenys, saugomi talpykloje';
$string['serialiser_igbinary'] = 'Igbinarinis serializatorius.';
$string['serialiser_json'] = 'JSON serializatorius.';
$string['serialiser_php'] = 'Numatytasis PHP serializatorius.';
$string['servers'] = 'Serveriai';
$string['servers_help'] = 'Tai nustato serverius, kuriuos turėtų naudoti šis atminties talpyklos adapteris.
Serveriai turi būti apibrėžti po vieną eilutėje ir sudaryti iš serverio adreso ir pasirinktinai prievado bei svorio.
Jei prievadas nenurodytas, naudojamas numatytasis prievadas (11211).

Pavyzdžiui:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

Jei toliau įjungta *Įgalinti sugrupuotus serverius*, čia turi būti tik vienas serveris. Paprastai tai būtų pavadinimas, kuris visada yra vietiniame kompiuteryje, pvz., 127.0.0.1 arba localhost.';
$string['serversclusterinvalid'] = 'Įjungus klasterizavimą, reikia tiksliai vieno serverio.';
$string['sessionhandlerconflict'] = 'Įspėjimas: atmintyje išsaugotas egzempliorius ({$a}) sukonfigūruotas naudoti tą patį atmintinėje išsaugotą serverį kaip seansus. Išvalius visas talpyklas, bus išvalytos ir sesijos.';
$string['setservers'] = 'Nustatyti serverius';
$string['setservers_help'] = 'Tai serverių, kurie bus atnaujinami, kai keičiami duomenys talpykloje, sąrašas. Paprastai kiekvieno telkinio serverio pilnas pavadinimas.
Jame **turi** būti įtrauktas serveris, nurodytas aukščiau esančiame *Serveriai*, net jei jis yra kitu prieglobos pavadinimu.
Serveriai turi būti apibrėžti po vieną eilutėje ir sudaryti iš serverio adreso ir pasirinktinai prievado.
Jei prievadas nenurodytas, naudojamas numatytasis prievadas (11211).

Pavyzdžiui:
<pre>
server.url.com
ipaddress:port
</pre>
serveris.url.com
IP adresas: prievadas
</pre>';
$string['testservers'] = 'Testuoti serverius';
$string['testservers_desc'] = 'Viena ar daugiau prisijungimo eilučių, skirtų atmintyje išsaugotiems serveriams išbandyti. Jei buvo nurodytas bandomasis serveris, atminties talpyklos veikimą galima išbandyti naudojant administravimo bloko talpyklos našumo puslapį.
Pavyzdžiui: 127.0.0.1:11211';
$string['upgrade200recommended'] = 'Rekomenduojame atnaujinti savo „Memcached“ PHP plėtinį į 2.0.0 ar naujesnę versiją.
Šiuo metu naudojama „Memcached“ PHP plėtinio versija nesuteikia „Moodle“ funkcijų, kad užtikrintų smėlio dėžės talpyklą. Kol neatnaujinsite, rekomenduojame nekonfigūruoti jokių kitų programų, kad jos naudotų tuos pačius atmintinės talpyklos serverius, kokius yra sukonfigūruotas naudoti Moodle.';
$string['usecompression'] = 'Naudoti glaudinimą';
$string['usecompression_help'] = 'Įjungia arba išjungia naudingosios apkrovos glaudinimą. Kai įjungta, elementų reikšmės, ilgesnės nei tam tikra riba (šiuo metu 100 baitų), bus suglaudintos saugojimo metu ir išskleidimo metu skaidriai.';
$string['useserialiser'] = 'Naudoti serializatorių';
$string['useserialiser_help'] = 'Nurodomas serializatorius, naudojamas neskaliarinėms reikšmėms suskirstyti.
Galiojantys serializatoriai yra Memcached::SERIALIZER_PHP arba Memcached::SERIALIZER_IGBINARY.
Pastarasis palaikomas tik tada, kai memcached yra sukonfigūruotas su parinktimi --enable-memcached-igbinary ir įkeliamas igbinary plėtinys.';
