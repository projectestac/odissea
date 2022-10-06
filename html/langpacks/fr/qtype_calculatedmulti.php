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
 * Strings for component 'qtype_calculatedmulti', language 'fr', branch 'MOODLE_38_STABLE'
 *
 * @package   qtype_calculatedmulti
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answeroptions'] = 'Options à choix';
$string['answeroptions_help'] = 'La formule de choix suggérée est …<strong>{={x}+..}</strong>…';
$string['pluginname'] = 'Calculée à choix multiple';
$string['pluginnameadding'] = 'Ajout d\'une question calculée à choix multiple';
$string['pluginnameediting'] = 'Modification d\'une question calculée à choix multiple';
$string['pluginname_help'] = 'Les questions calculées à choix multiple se présentent comme des questions à choix multiple standard, mais peuvent utiliser des variables, placées entre deux accolades, qui sont remplacées par des valeurs quand le test est lancé. Par exemple, pour la question « Quelle est l\'aire d\'un rectangle de longueur {a} et de largeur {b} ?» l\'un des choix disponible sera {={a}*{b}} (où le symbole * représente la multiplication).';
$string['pluginnamesummary'] = 'Les questions calculées à choix multiple sont comme des questions à choix multiple, dans lesquelles les éléments de choix peuvent inclure des résultats de fonctions intégrant des valeurs de variables tirées aléatoirement d\'un jeu de données au lancement du test.';
$string['privacy:metadata'] = 'Le plugin de type de question Calculée à choix multiple n\'enregistre aucune donnée personnelle.';
