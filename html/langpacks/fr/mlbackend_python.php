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
 * Strings for component 'mlbackend_python', language 'fr', version '4.5'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'La configuration du serveur est incomplète.';
$string['errorserver'] = 'Erreur serveur {$a}';
$string['host'] = 'Hôte';
$string['hostdesc'] = 'Hôte';
$string['packageinstalledshouldbe'] = 'Le paquetage Python « moodlemlbackend » doit être mis à jour. La version installée est {$a->installed}, alors que la version requise est {$a->required}.';
$string['packageinstalledtoohigh'] = 'Le paquetage python « moodlemlbackend » n’est pas compatible avec cette version de Moodle. La version requise est {$a->required} ou ultérieure, pour autant qu’elle soit compatible avec l’API. La version installée {$a->installed} est trop récente.';
$string['password'] = 'Mot de passe';
$string['passworddesc'] = 'Chaîne de caractères utilisée comme mot de passe pour la communication entre le serveur Moodle et le serveur Python.';
$string['pluginname'] = 'Programme d’apprentissage automatique en Python';
$string['port'] = 'Port';
$string['portdesc'] = 'Port';
$string['privacy:metadata'] = 'Le plugin Programme d’apprentissage automatique en Python n’enregistre aucune donnée personnelle.';
$string['pythonpackagenotinstalled'] = 'Le paquetage Python « moodlemlbackend » a un problème ou n’est pas installé. Veuillez lancer la commande « {$a} » en ligne de commande pour plus de détails.';
$string['pythonpathnotdefined'] = 'Le chemin d’accès à votre exécutable Python n’est pas défini. Veuillez le configurer en visitant la page « {$a} ».';
$string['secure'] = 'Utiliser HTTPS';
$string['securedesc'] = 'Ce réglage détermine s’il faut utiliser HTTP ou HTTPS.';
$string['serversettingsinfo'] = 'Si le réglage « Utiliser un serveur » est activé, les réglages du serveur seront affichés.';
$string['tensorboardinfo'] = 'Lancer TensorBoard en ligne de commande en tapant «  tensorboard --logdir=\'{$a}\' » dans votre serveur web.';
$string['username'] = 'Nom d’utilisateur';
$string['usernamedesc'] = 'Chaîne de caractères utilisée comme nom d’utilisateur pour la communication entre le serveur Moodle et le serveur Python.';
$string['useserver'] = 'Utiliser un serveur';
$string['useserverdesc'] = 'Le programme d’apprentissage automatique en Python n’est pas installé sur le serveur web, mais sur un autre serveur.';
