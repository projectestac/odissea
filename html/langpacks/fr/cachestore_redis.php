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
 * Strings for component 'cachestore_redis', language 'fr', version '4.5'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'Chemin d’accès au fichier CA';
$string['ca_file_help'] = 'Emplacement du fichier Certificate Authority dans le système de fichiers local';
$string['clustermode'] = 'Mode cluster';
$string['clustermode_help'] = 'L’activation du mode cluster lancera la fonction Redis Cluster, permettant à votre serveur de traiter des requêtes simultanées sur plusieurs serveurs.';
$string['clustermodeunavailable'] = 'Le mode Redis Cluster n’est actuellement pas disponible. Veuillez vous assurer que l’extension Redis de PHP prend en charge la fonctionnalité Redis Cluster.';
$string['compressor_none'] = 'Pas de compression.';
$string['compressor_php_gzip'] = 'Utiliser la compression gzip.';
$string['compressor_php_zstd'] = 'Utiliser la compression Zstandard.';
$string['connectiontimeout'] = 'Délai de connexion';
$string['connectiontimeout_help'] = 'Ce réglage détermine le délai lors des tentatives de connexion au serveur Redis';
$string['encrypt_connection'] = 'Utiliser le chiffrement TLS';
$string['encrypt_connection_help'] = 'Utiliser le chiffrement TLS pour se connecter à Redis. Ne pas indiquer « tls:// » dans le nom d’hôte de Redis ; utiliser pour cela ce réglage.';
$string['password'] = 'Mot de passe';
$string['password_help'] = 'Ce réglage définit le mot de passe du serveur Redis.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Préfixe des clefs';
$string['prefix_help'] = 'Ce préfixe est utilisé pour toutes les clefs du serveur Redis.
* S’il n’y a qu’une instance de Moodle qui utilise ce serveur, la valeur par défaut peut être conservée.
* En raison de la longueur limités des clefs, le préfixe ne doit pas dépasser 5 caractères.';
$string['prefixinvalid'] = 'Préfixe non valide. Les seuls caractères autorisés sont a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = 'Le plugin de stockage de cache Redis enregistre des données brièvement, de par sa fonction de mise en cache. Ces données sont enregistrées sur un serveur Redis, où les données sont supprimées régulièrement.';
$string['privacy:metadata:redis:data'] = 'Les diverses données enregistrées en cache';
$string['serializer_igbinary'] = 'Sérialiseur igbinary';
$string['serializer_php'] = 'Sérialiseur PHP par défaut.';
$string['server'] = 'Serveur(s)';
$string['server_help'] = 'Le serveur Redis à utiliser pour les tests.

Quelques exemples possibles :

* testredis.abc.com - Pour se connecter à un serveur Redis par nom d’hôte (le port est par défaut 6379).
* testredis.abc.com:1234 - Pour se connecter à un serveur Redis par nom d’hôte avec un port spécifique.
* 1.2.3.4 -  Pour se connecter à un serveur Redis par adresse IP (le port est par défaut 6379).
* 1.2.3.4:1234 - Pour se connecter à un serveur Redis par adresse IP avec un port spécifique.
* unix:///var/redis.sock - Pour se connecter à un serveur Redis au moyen d’une socket Unix.
* /var/redis.sock - Pour se connecter à un serveur Redis au moyen d’une socket Unix (autre possibilité).

Si le mode cluster est activé, indiquer les serveurs chacun sur une nouvelle ligne, par exemple :<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

Consulter <a href="https://redis.io/docs/reference/clients/#accepting-client-connections" target="_new">Accepting Client Connections</a> (en anglais) et <a href="https://redis.io/resources/clients/#php" target="_new">Redis PHP clients</a> (en anglais) pour plus d’informations.';
$string['task_ttl'] = 'Libérer la mémoire utilisée par les caches Redis expirés';
$string['test_clustermode'] = 'Mode cluster';
$string['test_clustermode_desc'] = 'Activer les tests dans Redis en mode cluster';
$string['test_password'] = 'Tester le mot de passe';
$string['test_password_desc'] = 'Test du mot de passe du serveur Redis.';
$string['test_serializer'] = 'Sérialiseur';
$string['test_serializer_desc'] = 'Sérialiseur à utiliser pour les tests.';
$string['test_server'] = 'Serveur de test';
$string['test_server_desc'] = 'Le serveur Redis à utiliser pour les tests.

Quelques exemples possibles :

* testredis.abc.com - Pour se connecter à un serveur Redis par nom d’hôte (le port est par défaut 6379).
* testredis.abc.com:1234 - Pour se connecter à un serveur Redis par nom d’hôte avec un port spécifique.
* 1.2.3.4 -  Pour se connecter à un serveur Redis par adresse IP (le port est par défaut 6379).
* 1.2.3.4:1234 - Pour se connecter à un serveur Redis par adresse IP avec un port spécifique.
* unix:///var/redis.sock - Pour se connecter à un serveur Redis au moyen d’une socket Unix.
* /var/redis.sock - Pour se connecter à un serveur Redis au moyen d’une socket Unix (autre possibilité).

Si le mode cluster est activé, indiquer les serveurs chacun sur une nouvelle ligne :<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

Consulter <a href="https://redis.io/docs/reference/clients/#accepting-client-connections" target="_new">Accepting Client Connections</a> (en anglais) et <a href="https://redis.io/resources/clients/#php" target="_new">Redis PHP clients</a> (en anglais) pour plus d’informations.';
$string['test_ttl'] = 'TTL de test';
$string['test_ttl_desc'] = 'Lancer le test de performance avec un cache nécessitant un TTL (jeux plus lents).';
$string['usecompressor'] = 'Utiliser le compresseur';
$string['usecompressor_help'] = 'Indique le compresseur à utiliser après sérialisation. La compression est effectuée au niveau de l’API de cache de Moodle, pas au niveau de php-redis.';
$string['useserializer'] = 'Utiliser le sérialiseur';
$string['useserializer_help'] = 'Indique l’outil à utiliser pour la sérialisation. Les sérialiseurs valides sont Redis::SERIALIZER_PHP et Redis::SERIALIZER_IGBINARY. Ce dernier n’est pris en charge que lorsque phpredis est configuré avec l’option --enable-redis-igbinary et que l’extension <em>igbinary</em> est installée.';
