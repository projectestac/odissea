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
 * Strings for component 'cachestore_mongodb', language 'fr', branch 'MOODLE_38_STABLE'
 *
 * @package   cachestore_mongodb
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'Base de données';
$string['database_help'] = 'Le nom de la base de données à utiliser';
$string['extendedmode'] = 'Utiliser les clefs étendues';
$string['extendedmode_help'] = 'Si ce réglage est activé, des ensembles complets de clefs seront utilisés par ce plugin. Ceci n\'est pas encore utilisé à l\'interne, mais pourrait vous servir d\'investiguer manuellement le plugin MongoDB si vous le désirez.
L\'activation chargera un peu le serveur et ne doit donc être choisie que si nécessaire.';
$string['password'] = 'Mot de passe';
$string['password_help'] = 'Le mot de passe du compte utilisé pour la connexion.';
$string['pleaseupgrademongo'] = 'Vous utilisez une ancienne version de l\'extension PHP Mongo (antérieure à 1.3). D\'anciennes versions de cette extension ne seront plus supportées à l\'avenir. Veuillez penser à faire une mise à jour.';
$string['pluginname'] = 'MongoDB';
$string['privacy:metadata:mongodb'] = 'Le plugin de stockage de cache MongoDB enregistre des données brièvement, de par sa fonction de mise en cache. Ces données sont enregistrées sur un serveur Memcached, où les données sont supprimées régulièrement.';
$string['privacy:metadata:mongodb:data'] = 'Les diverses données enregistrées en cache';
$string['replicaset'] = 'Ensemble réplicat';
$string['replicaset_help'] = 'L\'ensemble réplicat auquel se connecter. Si renseigné, le maître sera déterminé au moyen de la commande de base de donnée ismaster. Il pourrait arriver que la connexion soit faite vers un serveur qui n\'est même pas indiqué.';
$string['server'] = 'Serveur';
$string['server_help'] = 'La chaîne de connexion pour le serveur à utiliser. Plusieurs serveurs peuvent être indiqués en les séparant par des virgules';
$string['testserver'] = 'Serveurs de test';
$string['testserver_desc'] = 'Une adresse de connexion permettant d\'effectuer des tests. Si un serveur de test a été indiqué, la performance de MongoDB peut être testée depuis la page de performance des caches, accessible via le bloc d\'administration.
Exemple : mongodb://127.0.0.1:27017';
$string['username'] = 'Nom d\'utilisateur';
$string['username_help'] = 'Le nom d\'utilisateur à employer pour établir une connexion.';
$string['usesafe'] = 'Utiliser <i>usesafe</i>';
$string['usesafe_help'] = 'Si ce réglage est activé, l\'option <i>usesafe</i> sera utilisée lors des opération d\'insertion, de récupération et de suppression. Si vous avez indiqué un <i>replica</i>, ceci sera le cas de toute façon.';
$string['usesafevalue'] = 'Valeur <i>usesafe</i>';
$string['usesafevalue_help'] = 'Vous pouvez indiquer une valeur spécifique pour <i>usesafe</i>. Elle déterminera le nombre de serveurs sur lesquels des opérations doivent avoir été terminées avant qu\'elles soient considérées comme terminées.';
