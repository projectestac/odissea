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
 * Strings for component 'cachestore_memcached', language 'ca', version '4.1'.
 *
 * @package     cachestore_memcached
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Habilita la memòria intermèdia';
$string['bufferwrites_help'] = 'Habilita o inhabilita la memòria intermèdia d\'entrada/sortida. Habilitar la memòria intermèdia d\'entrada/sortida provoca que les ordres d\'emmagatzematge vagin a la memòria intermèdia en lloc de ser enviades. Qualsevol acció que recuperi les dades fa que les dades de la memòria intermèdia s\'enviïn a la connexió remota. Abandonar la connexió o el tancament de la connexió també farà que les dades emmagatzemades en la memòria intermèdia siguin enviades a la connexió remota.';
$string['clustered'] = 'Habilita servidors en clúster';
$string['clustered_help'] = 'Això s\'utilitza per permetre sols lectura, permet funcionalitats múltiples.

L\'ús previst és crear un magatzem millorat per a les configuracions de càrrega. El magatzem s\'ha pogut recuperar d\'un servidor (normalment localhost), però està configurat per molts (tots els servidors del grup). Per a les memòries cau amb alts coeficients de lectura per a configurar els coeficients, això estalvia una quantitat significativa de sobrecàrrega de la xarxa.

Quan s\'habilita aquesta configuració, el servidor especificat serà utilitzat per recuperar.';
$string['clusteredheader'] = 'Divideix els servidors';
$string['hash'] = 'Mètode resum';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Per defecte (pas a pas)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Especifica l\'algoritme resum utilitzat per l\'element de la clau. Cada algoritme resum té avantatges i desavantatges. Utilitzeu el valor per defecte si no esteu segurs o no us importa.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['isshared'] = 'Cau compartit';
$string['isshared_help'] = 'Hi ha altres aplicacions que estiguin utilitzant el vostre servidor memcauat («memcached»)?

Si el cau és compartit per altres aplicacions, cada clau s\'esborrarà individualment, per tal d\'assegurar que només es purguin les dades propietat d\'aquesta aplicació (i que es deixin sense canvis les dades encauades de les aplicacions externes). Aquest comportament pot comportar un alentiment durant la purga del cau, en funció de la configuració del vostre servidor.

Si, en canvi, heu configurat un cau dedicat per a aquesta aplicació, es pot buidar tot el cau de forma segura sense risc de destruir les dades encauades d\'altres aplicacions. Això farà que el purgat del cau vagi més de pressa.';
$string['pluginname'] = 'Memòria cau';
$string['prefix'] = 'Prefix de la clau';
$string['prefix_help'] = 'Això pot ser usat per crear un «domini» de les seues claus que li permetrà crear diversos magatzems de memòria cau en una sola instal·lació cau. No pot tenir més de 16 caràcters, a fi de garantir que no es tinguem problemes de longitud de clau.';
$string['prefixinvalid'] = 'Prefix invàlid. Sols podeu utilitzar a-z A-Z 0-9-_.';
$string['serialiser_igbinary'] = 'El serializador «igbinary».';
$string['serialiser_json'] = 'El serialitzador JSON';
$string['serialiser_php'] = 'El serialitzador per defecte de PHP';
$string['servers'] = 'Servidors';
$string['servers_help'] = 'Això configura els servidors que han de ser utilitzats per aquest adaptador de memòria cau. Els servidors s\'han de definir un per línia, i es componen d\'una adreça de servidor i, opcionalment, un port i pes. Si no es proporciona cap port, s\'utilitza el port per defecte (11211).
Per exemple:
<pre> server.url.com
adreçaIP: port
nom_servidor: port: pes
</pre>

Si habilita a sota «Habilita servidors en clúster», hi ha d\'haver un sol servidor dels enumerats aquí. Això sol ser un nom que sempre es resol a l\'equip local, com 127.0.0.1 o localhost.';
$string['serversclusterinvalid'] = 'Caldrà exactament un servidor quan s\'habiliti el clúster.';
$string['sessionhandlerconflict'] = 'Avís: Una instància de memòria cau  ({$a}) ha de ser configurada per usar el mateix servidor de memòries cau a les sessions. Purgar totes les memòries cau produirà que les sessions es purguin també.';
$string['setservers'] = 'Configura els servidors';
$string['setservers_help'] = 'Aquesta és la llista de servidors que s\'actualitzaran quan les dades siguin modificades a la memòria cau. En general, es posa el nom complet de cada servidor al conjunt.
**Cal** incloure el servidor enumerat a la llista *Servidors* de més amunt, encara que sigui en un nom d\'amfitrió diferent.
Els servidors han d\'estar definits un per línia, que consisteix en una adreça de servidor i, de forma opcional, un port.
Si no es proporciona cap port, s\'usa el port per defecte (11211).

Per exemple:
<pre>
servidor.url.com
adreçaip:port
</pre>';
$string['testservers'] = 'Servidors de prova';
$string['testservers_desc'] = 'Una o més cadenes de connexió per a servidors de memòria cau per posar-los a prova. Si un servidor de prova s\'ha especificat, llavors el rendiment de la memòria cau es pot provar fent servir la pàgina de rendiment de la memòria cau al bloc d\'administració.
N\'és un exemple: 127.0.0.1:11211';
$string['upgrade200recommended'] = 'Recomanem que actualitzeu l\'extensió «memcached» de PHP a la versió 2.0.0 com a mínim.
La versió de l\'extensió «memcached» de PHP que esteu utilitzant actualment no admet la funcionalitat que necessita Moodle per tal d\'assegurar un cau protegit. Fins que no actualitzeu, us recomanem que no configureu cap altra aplicació que utilitzi els mateixos servidors memcauats que utilitza Moodle.';
$string['usecompression'] = 'Utilitza compressió';
$string['usecompression_help'] = 'Habilita o inhabilita la compressió de la càrrega útil. Quan està habilitat, els elements de valor de més d\'un cert llindar (actualment 100 bytes) es comprimeixen durant l\'emmagatzematge i es descomprimeixen durant la recuperació de manera transparent.';
$string['useserialiser'] = 'Usa serialitzador';
$string['useserialiser_help'] = 'Especifica el serialitzador que s\'ha d\'usar per serialitzar valors no escalars.
Els serialitzadors vàlids són Memcached :: SERIALIZER_PHP o Memcached :: SERIALIZER_IGBINARY. Aquest últim només s\'admet quan memcached està configurat amb l\'opció --enable-memcached-igbinary i l\'extensió igbinary està carregada.';
