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
 * Strings for component 'cachestore_memcache', language 'fr', branch 'MOODLE_34_STABLE'
 *
 * @package   cachestore_memcache
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clustered'] = 'Activer les serveurs en cluster';
$string['clusteredheader'] = 'Serveurs divisés';
$string['clustered_help'] = 'Ce réglage est utilisé pour permettre la fonctionnalité lire une fois, définir plusieurs fois.

L\'utilisation visée est la création d\'un cache amélioré pour les configurations avec répartition de charge (<i>load balanced</i>). Le cache récupérera les données à partir d\'un serveur (habituellement localhost), mais écrira les définitions sur plusieurs serveurs (tous les serveurs sur lesquels la charge est répartie). Pour les caches dans lesquels le rapport lecture/définition est très élevé, cette fonctionnalité permet de réduire l\'utilisation du réseau de façon significative.

Si ce réglage est activé, les serveurs de la liste ci-dessus seront utilisés pour récupérer le contenu du cache.';
$string['pluginname'] = 'Memcache';
$string['prefix'] = 'Préfixe de clef';
$string['prefix_help'] = 'Ce préfixe est utilisé pour tous les noms de clef sur le serveur memcache.
* Si vous n\'avez qu\'une instance de Moodle qui tourne sur ce serveur, vous pouvez laisser la valeur par défaut.
* Un maximum de 5 caractères est autorisé.';
$string['prefixinvalid'] = 'Préfixe non valide. Vous ne pouvez utiliser que les caractères a-z A-Z 0-9-_.';
$string['privacy:metadata:memcache'] = 'Le plugin de stockage de cache Memcache enregistre des données brièvement, de par sa fonction de mise en cache. Ces données sont enregistrées sur un serveur Memcache, où les données sont supprimées régulièrement.';
$string['privacy:metadata:memcache:data'] = 'Les diverses données enregistrées en cache';
$string['servers'] = 'Serveurs';
$string['serversclusterinvalid'] = 'Un serveur exactement doit être indiqué lorsque la mise des serveurs en cluster est activée.';
$string['servers_help'] = 'Ce réglage permet de spécifier les serveurs devant être utilisés par cet adaptateur memcache.
Les adresses des serveurs doivent être indiquées une par ligne, avec optionnellement un port et une pondération.
Si le port n\'est pas indiqué, le port par défaut (11211) sera utilisé.

Exemple :
<pre>
url.serveur.fr
adresse_ip:port
nom_serveur:port:pondération
</pre>

Si le réglage *Activer les serveurs en cluster* ci-dessous est activé, un unique serveur doit être indiqué dans cette liste. Il s\'agit habituellement d\'un nom qui pointe vers la machine locale, par exemple 127.0.0.1 ou localhost.';
$string['sessionhandlerconflict'] = 'Attention ! Une instance de memcache ({$a}) a été configurée de sorte à utiliser le même serveur memcache pour les sessions. La suppression de tous les caches aura pour conséquence que les sessions seront également effacées.';
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
$string['testservers_desc'] = 'Une ou plusieurs adresses de connexion permettant de tester des serveurs memcache. Si un serveur de test a été indiqué, la performance de memcache peut être testée depuis la page de performance des caches, accessible via le bloc d\'administration.
Exemple : 127.0.0.1:11211';
