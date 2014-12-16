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
 * Strings for component 'block_dedication', language 'fr', branch 'MOODLE_26_STABLE'
 *
 * @package   block_dedication
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_button'] = 'Degré d\'implication';
$string['access_info'] = 'Accessible uniquement aux enseignants';
$string['connectionratiorow'] = 'Connexions par jour';
$string['dedication:addinstance'] = 'Permettre d\'ajouter le bloc Implication';
$string['dedicationall'] = 'Implication de tous les membres du cours. Cliquez sur un nom pour visualiser le détail de son implication dans le cours.';
$string['dedication_estimation'] = 'Le temps que vous avez consacré à ce cours est estimé à';
$string['dedicationgroup'] = 'Tous les membres du groupe <em>{$a}</em>. Choisissez un membre pour visualiser le détail de son implication dans le cours.';
$string['dedicationrow'] = 'Implication dans le cours';
$string['dedication:use'] = 'Permettre l\'utilisation du bloc Implication dans le cours';
$string['form'] = 'Configuration du bloc Implication dans le cours';
$string['form_help'] = 'Le temps estimé est basé sur le concept de Session et de Durée de session appliqués à la connexion.
<strong>Clic:</strong> Chaque fois qu\'un utilisateur accède à une page sur Moodle, une entrée de journal est stockée.
<strong>Session:</strong> ensemble de deux clics consécutifs ou plus dans un intervalle de temps qui ne dépasse pas l\'intervalle défini.
<strong>Durée de session:</strong> temps écoulé entre le premier et le dernier clic de la session.
<strong>Temps consacré:</strong> somme de toutes les durées de sessions pour un utilisateur.';
$string['form_text'] = 'Sélectionnez la plage de dates et l\'intervalle maximum entre deux clics d\'une même session.';
$string['limit'] = 'Limite entre clics (en minutes)';
$string['limit_help'] = 'L\'intervalle entre deux clics définit si deux clics font partie d\'une même session ou non.';
$string['maxtime'] = 'Fin de la période';
$string['maxtime_help'] = 'Considère uniquement les entrées de journal terminant avant cette date';
$string['meandedication'] = '<strong>Implication moyenne:</strong> {$a}';
$string['mintime'] = 'Début de la période';
$string['mintime_help'] = 'Considère uniquement les entrées de journal après cette date';
$string['pagetitle'] = '{$a}: implication dans le cours';
$string['period'] = 'Période du <em>{$a->mintime}</em> au <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Temps écoulé:</strong>  {$a}';
$string['perioddiffrow'] = 'Temps écoulé';
$string['pluginname'] = 'Implication dans le cours';
$string['sessionduration'] = 'Durée';
$string['sessionstart'] = 'Début de la session';
$string['show_dedication'] = 'Montrer leur implication aux étudiants';
$string['show_dedication_help'] = 'Par défaut, le temps dédié n\'est visible que par les enseignants. Ce paramétrage permet aux étudiants de voir dans le bloc le temps qu\'il ont consacré au cours.';
$string['sincerow'] = 'Du';
$string['submit'] = 'Calculer';
$string['torow'] = 'Au';
$string['totaldedication'] = '<strong>Temps dédié:</strong> {$a}';
$string['userdedication'] = 'Détails de l\'implication dans le cours de <em>{$a}</em>.';
