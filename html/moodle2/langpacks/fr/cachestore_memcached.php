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
 * Strings for component 'cachestore_memcached', language 'fr', branch 'MOODLE_34_STABLE'
 *
 * @package   cachestore_memcached
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Écritures du tampon';
$string['bufferwrites_help'] = 'Active ou désactive les entrées/sorties en tampon. L\'activation a pour résultat que les commandes de stockage sont mise en tampon au lieu d\'être envoyées. Toute action qui récupère des données a pour effet d\'envoyer ce tampon à la connexion distante. La coupure de la connexion causera également l\'envoi du tampon au serveur distant.';
$string['clustered'] = 'Activer les serveurs en cluster';
$string['clusteredheader'] = 'Serveurs partagés';
$string['clustered_help'] = 'Ce réglage est utilisé pour permettre la fonctionnalité lire une fois, définir plusieurs fois.

L\'utilisation visée est la création d\'un cache amélioré pour les configurations avec répartition de charge (<i>load balanced</i>). Le cache récupérera les données à partir d\'un serveur (habituellement localhost), mais écrira les définitions sur plusieurs serveurs (tous les serveurs sur lesquels la charge est répartie). Pour les caches dans lesquels le rapport lecture/définition est très élevé, cette fonctionnalité permet de réduire l\'utilisation du réseau de façon significative.

Si ce réglage est activé, les serveurs de la liste ci-dessus seront utilisés pour récupérer le contenu du cache.';
$string['hash'] = 'Méthode de hachage';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Par défaut (un à la fois)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Spécifie l\'algorithme de hachage utilisé pour les clefs. Chaque algorithme a ses forces et ses faiblesses. Si vous ne savez pas lequel choisir, utilisez le réglage par défaut.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['isshared'] = 'Cache partagé';
$string['isshared_help'] = 'Votre serveur Memcached est-il utilisé pour d\'autres applications ?

C\'est c\'est le cas, chacun de éléments du cache sera supprimé individuellement, afin de s\'assurer que seuls les données de Moodle sont purgées et que le cache de données des autres applications n\'est pas touché. Il pourra en résulter une réduction des performances lors de l\'effacement du cache, suivant la configuration de votre serveur.

Si vous utilisez un cache dédié pour Moodle, la totalité du cache peut être purgée en toute sécurité sans risque de détruire le cache d\'autres applications. La performance sera alors meilleure lors de l\'effacement du cache.';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Préfixe de clef';
$string['prefix_help'] = 'Ce réglage peut être utilisé pour créer un « domaine » pour vos clefs, permettant de disposer de plusieurs dépôts memcached sur une unique installation memcached. La chaîne indiquée ne doit pas dépasser 16 caractères.';
$string['prefixinvalid'] = 'Préfixe non valide. Vous ne pouvez utiliser que les caractères a-z A-Z 0-9-_.';
$string['privacy:metadata:memcached'] = 'Le plugin de stockage de cache Memcached enregistre des données brièvement, de par sa fonction de mise en cache. Ces données sont enregistrées sur un serveur Memcached, où les données sont supprimées régulièrement.';
$string['privacy:metadata:memcached:data'] = 'Les diverses données enregistrées en cache';
$string['serialiser_igbinary'] = 'Le serialiseur igbinary';
$string['serialiser_json'] = 'Le serialiseur JSON';
$string['serialiser_php'] = 'Le serialiseur par défaut PHP';
$string['servers'] = 'Serveurs';
$string['serversclusterinvalid'] = 'Un serveur exactement doit être indiqué lorsque la mise des serveurs en cluster est activée.';
$string['servers_help'] = 'Ce réglage permet de spécifier les serveurs devant être utilisés par cet adaptateur memcached.
Les adresses des serveurs doivent être indiquées un par ligne, avec optionnellement un port et une pondération.
Si le port n\'est pas indiqué, le port par défaut (11211) sera utilisé.

Exemple :
<pre>
url.serveur.fr
adresse_ip:port
nom_serveur:port:pondération
</pre>

Si le réglage *Activer les serveurs en cluster* ci-dessous est activé, un unique serveur doit être indiqué dans cette liste. Il s\'agit habituellement d\'un nom qui pointe vers la machine locale, par exemple 127.0.0.1 ou localhost.';
$string['sessionhandlerconflict'] = 'Attention ! Une instance de memcached ({$a}) a été configurée de sorte à utiliser le même serveur memcached pour les sessions. La suppression de tous les caches aura pour conséquence que les sessions seront également effacées.';
$string['setservers'] = 'Serveurs de définition';
$string['setservers_help'] = 'Ce réglage permet de spécifier la liste des serveurs sur lesquels les données seront mises à jour lorsque les données du cache sont modifiées. Il s\'agit en général du nom de domaine complet de tous les serveurs sur lesquels la charge est répartie.
La liste **doit** comporter le serveur indiqué dans la liste spécifiée dans le champ *Serveurs* ci-dessus, même si c\'est avec un nom différent.
Les adresses des serveurs doivent être indiquées une par ligne, avec optionnellement un port.
Si le port n\'est pas indiqué, le port par défaut (11211) sera utilisé.

Exemple :
<pre>
url.serveur.fr
adresse_ip:port
</pre>';
$string['testservers'] = 'Serveurs de test';
$string['testservers_desc'] = 'Une ou plusieurs adresses de connexion permettant de tester des serveurs memcached. Si un serveur de test a été indiqué, la performance de memcached peut être testée depuis la page de performance des caches, accessible via le bloc d\'administration.
Exemple : 127.0.0.1:11211';
$string['upgrade200recommended'] = 'Il est recommandé de mettre à jour l\'extension Memcached de PHP à la version 2.0.0 ou ultérieure. La version que vous utilisez actuellement ne dispose pas de la fonctionnalité permettant à Moodle d\'assurer un cache en mode bac à sable. Jusqu\'à une éventuelle mise à jour, il n\'est pas recommandé que d\'autres applications utilisent le même serveur Memcached que Moodle.';
$string['usecompression'] = 'Utiliser la compression';
$string['usecompression_help'] = 'Active ou désactive la compression des données envoyées. Une fois ce réglage activé, les valeurs plus grandes qu\'un certain seuil (actuellement 100 octets) sont compressées de façon transparente durant le stockage et décompressées lors de l\'utilisation.';
$string['useserialiser'] = 'Utiliser le sérialiseur';
$string['useserialiser_help'] = 'Spécifie le sérialiseur à utiliser pour les valeurs non scalaires. Les valeurs valides sont Memcached::SERIALIZER_PHP et Memcached::SERIALIZER_IGBINARY.
Cette dernière n\'est supportée que si memcached est configuré avec l\'option --enable-memcached-igbinary et si l\'extension igbinary est chargée.';
