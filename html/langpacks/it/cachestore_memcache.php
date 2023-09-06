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
 * Strings for component 'cachestore_memcache', language 'it', version '4.1'.
 *
 * @package     cachestore_memcache
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clustered'] = 'Abilita server in cluster';
$string['clustered_help'] = 'Abilita la funzionalità "read-one set-multi".

Permette di disporre di uno store più performante adatto a configurazioni in load balancing. Lo store leggerà da un solo server (generalmente localhost) ma scriverà su tutti i server che compongono il pool di load balancing. Per cache con un rapporto molto alto di letture/scritture si riduce notevolmente l\'overhead dovuto alla rete.

Abilitando questa impostazione, il server indicato sopra sarà usato per la lettura.';
$string['clusteredheader'] = 'Split server';
$string['pluginname'] = 'Memcache';
$string['prefix'] = 'Prefisso chiave';
$string['prefix_help'] = 'Il prefisso da usare per tutti nomi delle chiavi nel server memcache.
* se il server ospita una singola istanza Moodle, è possibile lasciare il nome al suo default
* a causa di limitazioni sulla lunghezza delle chiavi, il prefisso può essere lungo al massimo 5 caratteri.';
$string['prefixinvalid'] = 'Prefisso non valido. E\' possibile usare solamente a-z A-Z 0-9-_.';
$string['privacy:metadata:memcache:data'] = 'Dati memorizzati in cache';
$string['servers'] = 'Server';
$string['servers_help'] = 'Imposta i server utilizzati dall\'adapter memcached.
I server devono essere impostati usando una linea per ciascun server specificando obbligatoriamente l\'indirizzo e opzionalmente la porta ed il peso. In assenza di indicazione sulla porta sarà utilizzata la porta di default (11211).

Esempio:
<pre>
server.url.com
ipaddress:porta
nomeserver:porta:peso
</pre>

Se viene utilizzata l\'impostazione *Abilita server in cluster*, allora nell\'elenco dovrà essere presente un solo server, in genere il nome o l\'IP della macchina locale come ad esempio 127.0.0.1 oppure localhost.';
$string['serversclusterinvalid'] = 'Con il clustering abilitato nell\'elenco deve essere presente un solo server.';
$string['sessionhandlerconflict'] = 'Attenzione: l\'istanza memcache ({$a}) è stata configurata per usare lo stesso server memcache usato anche per le sessioni. Lo svuotamento delle cache provocherà anche l\'eliminazione delle sessioni.';
$string['setservers'] = 'Set Server';
$string['setservers_help'] = 'L\'elenco dei server da aggiornare quando i dati della cache vengono modificati. In genere il nome qualificato di ciascun server appartenentre al pool di load balancing.
E\' **obbligatorio** inserire anche il server indicato sopra nella impostazione **Server**, anche usando un nome host diverso.
Ogni riga deve contenere un solo server con, opzionalmente, la porta.
Se la porta non viene indicata sarà usata la porta di default  (11211).

Esempio:
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = 'Test server';
$string['testservers_desc'] = 'Una più stringhe di connessione ad un server memcache da utilizzare per test. Il server di test consente di provare le prestazioni della cache memcache tramite la pagina amministrativa "Test prestazioni". Esempio: 127.0.0.1:11211';
