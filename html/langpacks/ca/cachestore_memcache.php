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
 * Strings for component 'cachestore_memcache', language 'ca', branch 'MOODLE_34_STABLE'
 *
 * @package   cachestore_memcache
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clustered'] = 'Habilita servidors en clúster';
$string['clusteredheader'] = 'Divideix els servidors';
$string['clustered_help'] = 'Això s\'utilitza per permetre sols lectura, permet funcionalitats múltiples.

L\'ús previst és crear un magatzem millorat per a les configuracions de càrrega. El magatzem s\'ha pogut recuperar d\'un servidor (normalment localhost), però està configurat per molts (tots els servidors del grup). Per a les memòries cau amb alts coeficients de lectura per a configurar els coeficients, això estalvia una quantitat significativa de sobrecàrrega de la xarxa.

Quan s\'habilita aquesta configuració, el servidor especificat serà utilitzat per recuperar.';
$string['pluginname'] = 'Memòria cau';
$string['prefix'] = 'Prefix de la clau';
$string['prefix_help'] = 'Aquest prefix s\'utilitza per a tots els noms claus al servidor de memòria cau.
* Si només teniu una instància Moodle fent servir aquest servidor, podeu deixar aquest valor per defecte. * A causa de les restriccions de longitud de clau, només es permet un màxim de 5 caràcters.';
$string['prefixinvalid'] = 'Prefix invàlid. Sols podeu utilitzar a-z A-Z 0-9-_.';
$string['servers'] = 'Servidors';
$string['serversclusterinvalid'] = 'Caldrà exactament un servidor quan s\'habiliti el clúster.';
$string['servers_help'] = 'Això configura els servidors que han de ser utilitzats per aquest adaptador de memòria cau. Els servidors s\'han de definir un per línia, i consisteixen en una adreça de servidor i, opcionalment, un port i el pes. Si no es proporciona cap port, s\'utilitza el port per defecte (11211).
Per exemple:
<pre>
servidor.url.com
adreçaip: port
nomservidor:port:pes </pre>

Si habilita a sota «Habilita servidors en clúster», hi ha d\'haver un sol servidor dels enumerats aquí. Això sol ser un nom que sempre es resol a l\'equip local, com 127.0.0.1 o localhost.';
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
$string['testservers'] = 'Servidor de prova';
$string['testservers_desc'] = 'Una o més cadenes de connexió per a servidors de memòria cau per posar-los a prova. Si un servidor de prova s\'ha especificat, llavors el rendiment de la memòria cau es pot provar fent servir la pàgina de rendiment de la memòria cau al bloc d\'administració.
N\'és un exemple: 127.0.0.1:11211';
