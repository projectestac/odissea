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
 * Strings for component 'cachestore_redis', language 'it', version '4.5'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'Percorso del file della CA';
$string['ca_file_help'] = 'Posizione nel file system del file della Certificate Authority';
$string['clustermode'] = 'Modalità cluster';
$string['clustermode_help'] = 'L\'abilitazione della modalità cluster eseguirà la funzione Redis Cluster, consentendo al server di servire più server per gestire richieste simultanee contemporaneamente.';
$string['clustermodeunavailable'] = 'Il cluster Redis non è al momento disponibile. Assicurarsi che l\'estensione PHP Redis supporti la funzionalità Redis Cluster.';
$string['compressor_none'] = 'Senza compressione.';
$string['compressor_php_gzip'] = 'Utilizza compressione gzip.';
$string['compressor_php_zstd'] = 'Utilizza compressione Zstandard.';
$string['connectiontimeout'] = 'Timeout di connessione';
$string['connectiontimeout_help'] = 'Imposta il timeout di connessione al server Redis.';
$string['encrypt_connection'] = 'Utilizza crittografia TLS';
$string['encrypt_connection_help'] = 'Utilizza TLS per collegarsi a Redis. Utilizzare questa impostazione senza aggiungere \'tls://\' nel nome dell\'host Redis.';
$string['password'] = 'Password';
$string['password_help'] = 'La password del server Redis';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Prefisso chiave';
$string['prefix_help'] = 'Il prefisso dei nomi delle chiavi del server Redis.
* Se il server Redis è utilizzato solamente da una istanza Moodle, è possibile lasciare il valore al suo default.
* a causa di limiti nella lunghezza delle chiavi, è possibile utilizzare al massimo 5 caratteri.';
$string['prefixinvalid'] = 'Il prefisso non è valido. È possibile utilizzare a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = 'Il plugin cachestore "Redis" memorizza dati per breve tempo in quanto può fungere da cache. Tali dati sono memorizzati su un server Redis, dal quale vengono rimossi regolarmente.';
$string['privacy:metadata:redis:data'] = 'Dati memorizzati in cache';
$string['serializer_igbinary'] = 'Il serializzatore igbinary';
$string['serializer_php'] = 'Il serializzatore di default del PHP';
$string['server'] = 'Server';
$string['server_help'] = 'Server Redis da utilizzare per il test.

Alcuni esempi:

* testredis.abc.com - Per connettersi a un server Redis tramite nome host (porta 6379 per impostazione di default).
* testredis.abc.com:1234 - Per connettersi a un server Redis tramite nome host con una porta specifica.
* 1.2.3.4 - Per connettersi a un server Redis tramite indirizzo IP (porta 6379 per impostazione di defaut).
* 1.2.3.4:1234 - Per connettersi a un server Redis tramite indirizzo IP con una porta specifica.
* unix:///var/redis.sock - Per connettersi a un server Redis utilizzando un socket Unix.
* /var/redis.sock - Per connettersi a un server Redis utilizzando un socket Unix (formato alternativo).

se è attiva la modalità cluster, indicare ogni server su una linea separata:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

Consultare <a href="https://redis.io/docs/reference/clients/#accepting-client-connections" target="_new">Accettare le connessioni client</a> e <a href="https:// redis.io/resources/clients/#php" target="_new">client PHP Redis</a> per ulteriori informazioni.';
$string['task_ttl'] = 'Liberazione memoria occupata da elementi scaduti presenti nella cache Redis';
$string['test_clustermode'] = 'Modalità cluster';
$string['test_clustermode_desc'] = 'Abilita test in modalità cluster Redis.';
$string['test_password'] = 'Password del server di test';
$string['test_password_desc'] = 'La password del server di test Redis';
$string['test_serializer'] = 'Serializzatore';
$string['test_serializer_desc'] = 'Il serializer da utilizzare per il test.';
$string['test_server'] = 'Server di test';
$string['test_server_desc'] = 'Il server Redis da utilizzare per i test.

Alcuni esempi:

* testredis.abc.com - Per connettersi a un server Redis tramite nome host (porta 6379 per impostazione di default).
* testredis.abc.com:1234 - Per connettersi a un server Redis tramite nome host con una porta specifica.
* 1.2.3.4 - Per connettersi a un server Redis tramite indirizzo IP (porta 6379 per impostazione di default).
* 1.2.3.4:1234 - Per connettersi a un server Redis tramite indirizzo IP con una porta specifica.
* unix:///var/redis.sock - Per connettersi a un server Redis utilizzando un socket Unix.
* /var/redis.sock - Per connettersi a un server Redis utilizzando un socket Unix (formato alternativo).

se è attiva la modalità cluster, indicare ogni server su una linea separata:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

Consultare <a href="https://redis.io/docs/reference/clients/#accepting-client-connections" target="_new">Accettazione delle connessioni client</a> e <a href="https:// redis.io/resources/clients/#php" target="_new">client PHP Redis</a> per ulteriori informazioni.';
$string['test_ttl'] = 'Test TTL in corso';
$string['test_ttl_desc'] = 'Esegui il test di prestazioni utilizzando una cache che supporta il TTL (set più lente).';
$string['usecompressor'] = 'Utilizza compressore';
$string['usecompressor_help'] = 'Il compressore da utilizzare dopo la serializzazione. Effettuate a livello delle CAche API di Moodle, non al livello di php-redis.';
$string['useserializer'] = 'Utilizza serializzatore';
$string['useserializer_help'] = 'Il serializzatore da utilizzare. Sono validi Redis::SERIALIZER_PHP oppure Redis::SERIALIZER_IGBINARY. L\'ultimo dei due è supportato solo se phpredis è configurato con l\'opzione  --enable-redis-igbinary ed è caricata l\'esensioen igbinary.';
