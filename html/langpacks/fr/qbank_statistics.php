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
 * Strings for component 'qbank_statistics', language 'fr', version '4.5'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = 'Nécessite vérification ?';
$string['discrimination_index_help'] = 'Sur la base de ses statistiques, une question est indiquée comme nécessitant une vérification. Par exemple, si les étudiants obtiennent un mauvais score à une question, mais un score élevé au test (ou le contraire), il est possible qu’il y ait un problème avec cette question, comme une réponse fausse indiquée comme correcte. Les statistiques ne sont cependant pas infaillibles ; il s’agit d’une simple indication que la question devrait être vérifiée.';
$string['discriminative_efficiency'] = 'Efficience discriminative';
$string['discriminative_efficiency_help'] = 'L’efficience discriminative est une estimation statistique de la qualité de la question pour évaluer les étudiants ; une valeur élevée indique une question plus efficiente. Une faible efficience discriminative peut indiquer un problème dans une question. Une question très difficile ou très facile (avec un index de facilité proche de 0% ou de 100%) peut également avoir pour conséquence une faible efficience discriminative.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['emptyvalue'] = '–';
$string['facility_index'] = 'Indice de facilité';
$string['facility_index_help'] = 'L’indice de facilité fournit le score moyen (en pourcentage) obtenu à la question (toutes les versions) dans tous les tests où la question a été tentée. Un indice de facilité élevé indique normalement une question facile.';
$string['likely'] = 'Probable';
$string['na'] = 'N/A';
$string['pluginname'] = 'Statistiques de question';
$string['privacy:metadata'] = 'Le plugin de banque de question Statistiques de question n’enregistre aucune donnée personnelle.';
$string['unlikely'] = 'Improbable';
$string['verylikely'] = 'Très probable';
