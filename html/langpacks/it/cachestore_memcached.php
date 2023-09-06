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
 * Strings for component 'cachestore_memcached', language 'it', version '4.1'.
 *
 * @package     cachestore_memcached
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Buffer write';
$string['bufferwrites_help'] = 'Abilita o disabilita il buffered I/O. I comandi I/O di memorizzazione saranno inseriti in un buffer invece di essere inviati. Qualsiasi azione di recupero dati provocherà l\'invio del buffer verso la connessione remota. L\'invio dei dati nel buffer verso la connessione remota sarà causato anche dalla interruzione o chiusura della connessione.';
$string['clustered'] = 'Abilita server in cluster';
$string['clustered_help'] = 'Abilita la funzionalità "read-one set-multi".

Permette di disporre di uno store più performante adatto a configurazioni in load balancing. Lo store leggerà da un solo server (generalmente localhost) ma scriverà su tutti i server che compongono il pool di load balancing. Per cache con un rapporto molto alto di letture/scritture si riduce notevolmente l\'overhead dovuto alla rete.

Abilitando questa impostazione, il server indicato sopra sarà usato per la lettura.';
$string['clusteredheader'] = 'Split server';
$string['hash'] = 'Metodo di hash';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Default (one-at-a-time)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'L\'algoritmo di hashing da utilizzare per gli elementi chiave. Ciascun algoritmo di hasing ha i pregi e difetti, se non li conoscete o non vi interessa, è possibile lasciare i valori al loro default.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['isshared'] = 'Cache condivisa';
$string['isshared_help'] = 'Se il server memcached è condiviso da altre applicazioni, è possibile eliminare le chiavi individualmente per essere sicuri di svuotare solo i dati di questa applicazione. In base alla configurazione del server, è possibile che lo svuotamento della cache risulti più lento.

Se il server memcache è dedicato, è possibile eliminare senza rischi l\'intero contenuto della cache, con possibili vantaggi prestazionali durante lo svuotamento delle cache.';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Prefisso chiave';
$string['prefix_help'] = 'Consente la creazione di un "dominio" per gli elementi di una chiave, consentendo di avere store memcached multipli in un\'unica  installazione memcached. Il prefisso non deve superare i 16 caratteri per evitare problemi di lunghezza della chiave.';
$string['prefixinvalid'] = 'Prefisso non valido. È possibile usare solamente i caratteri a-z A-Z 0-9-_.';
$string['privacy:metadata:memcached'] = 'Il plugin cachestore "Memcached" memorizza dati per breve tempo in quanto può fungere da cache. Tali dati sono memorizzati su un server Memcache, dal quale vengono rimossi regolarmente.';
$string['privacy:metadata:memcached:data'] = 'Dati memorizzati in cache';
$string['serialiser_igbinary'] = 'Il serializzatore igbinary.';
$string['serialiser_json'] = 'Il serializzatore JSON.';
$string['serialiser_php'] = 'Il serializzatore PHP di default.';
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
$string['sessionhandlerconflict'] = 'Attenzione: l\'istanza memcached ({$a}) è stata configurata per usare lo stesso server memcached usato per le sessioni. Lo svuotamento delle cache provocherà anche l\'eliminazione delle sessioni.';
$string['setservers'] = 'Set server';
$string['setservers_help'] = 'L\'elenco dei server da aggiornare quando i dati della cache vengono modificati. In genere il nome qualificato di ciascun server appartenente al pool.
È **obbligatorio** inserire anche il server indicato sopra nella impostazione **Server**, anche usando un nome host diverso.
Ogni riga deve contenere un solo server con, opzionalmente, la porta.
Se la porta non viene indicata sarà usata la porta di default  (11211).

Esempio:
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = 'Test server';
$string['testservers_desc'] = 'Una più stringhe di connessione ad un server memcached da utilizzare per test. Il server di test consente di provare le prestazioni della cache memcached tramite la pagina amministrativa "Test prestazioni". Esempio: 127.0.0.1:11211';
$string['upgrade200recommended'] = 'Si raccomanda di aggiornare l\'estensione PHP Memcached alla versione 2.0.0 o superiore.
La versione dell\'estensione PHP Memcached attualmente utilizzate non prevede le funzionalità richieste da Moodle per una cache confinata. Finchè non aggiornerai è bene non configurare altre applicazioni per utilizzare lo stesso server Memcached utilizzato da Moodle.';
$string['usecompression'] = 'Usa compressione';
$string['usecompression_help'] = 'Abilita o disabilita la compressione del payload. L\'impostazione consente di comprimere  in fase di memorizzazione gli elementi più grandi di una data soglia  (al momento 100 byte), decomprimendoli poi in modo trasparente durante il recupero.';
$string['useserialiser'] = 'Usa serializzatore';
$string['useserialiser_help'] = 'Il serializzatore da usare per serializzare valori non scalari. Serializzatori validi sono Memcached::SERIALIZER_PHP oppure Memcached::SERIALIZER_IGBINARY. Quest\'ultimo è supportato solo se memcached è stato configurato con l\'opzione --enable-memcached-igbinary ed è stata caricata l\'estensione igbinary.';
