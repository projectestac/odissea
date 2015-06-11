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
 * Strings for component 'editor_atto', language 'fr', branch 'MOODLE_28_STABLE'
 *
 * @package   editor_atto
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'Connexion au serveur impossible. Si vous envoyez cette page maintenant, vos modifications seront perdues.';
$string['autosavefrequency'] = 'Fréquence de l\'enregistrement automatique';
$string['autosavefrequency_desc'] = 'La durée entre deux tentatives d\'enregistrement automatique d\'un champ de texte. Atto enregistre automatiquement à la fréquence spécifiée le texte saisi, afin de pouvoir le récupérer lorsqu\'un utilisateur revient au même formulaire.';
$string['autosavesucceeded'] = 'Brouillon enregistré';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'La ligne « {$a} » n\'est pas dans le format correct';
$string['errorgroupisusedtwice'] = 'Le groupe « {$a} » est défini à double ; les noms de groupe doivent être uniques.';
$string['errornopluginsorgroupsfound'] = 'Aucun plugin ni groupe trouvé ; veuillez ajouter des groupes et des plugins.';
$string['errorpluginisusedtwice'] = 'Le plugin « {$a} » est défini à double ; les plugins doivent être définis une seule fois.';
$string['errorpluginnotfound'] = 'Le plugin « {$a} » ne peut pas être utilisé ; il semble qu\'il ne soit pas installé.';
$string['errortextrecovery'] = 'Le texte brouillon n\'a malheureusement pas pu être restauré.';
$string['infostatus'] = 'Information';
$string['pluginname'] = 'Éditeur HTML Atto';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['recover'] = 'Récupérer';
$string['settings'] = 'Réglages barres Atto';
$string['subplugintype_atto'] = 'Plugin Atto';
$string['subplugintype_atto_plural'] = 'Plugins Atto';
$string['textrecovered'] = 'Un brouillon de ce texte a été récupéré automatiquement.';
$string['toolbarconfig'] = 'Configuration barre d\'outils';
$string['toolbarconfig_desc'] = 'La liste des plugins et l\'ordre dans lequel ils sont affichés peut être configurée ici. La configuration consiste en groupes (un par ligne) suivis par une liste (ordonnée) des plugins de ce groupe. Le groupe est séparé des plugins par un signe d\'égalité et les plugins sont séparés par des virgules. Le nom des groupes doit être unique et indiquer ce que les boutons ont en commun. Les boutons et noms des groupes ne peuvent pas être répétés et ne doivent comporter que des caractères alphanumériques.';
$string['warningstatus'] = 'Avertissement';
