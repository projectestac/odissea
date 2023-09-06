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
 * Strings for component 'rating', language 'fr', version '4.1'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Moyenne des évaluations';
$string['aggregatecount'] = 'Nombre d\'évaluations';
$string['aggregatemax'] = 'Évaluation maximale';
$string['aggregatemin'] = 'Évaluation minimale';
$string['aggregatenone'] = 'Pas d\'évaluation';
$string['aggregatesum'] = 'Somme des évaluations';
$string['aggregatetype'] = 'Type de combinaison';
$string['aggregatetype_help'] = 'Le type de combinaison définit comment les évaluations sont combinées pour former la note finale dans le carnet de notes.

* Moyenne des évaluations : la moyenne de toutes les évaluations
* Nombre d\'évaluations : le nombre des éléments évalués est la note finale. Ce total ne peut pas dépasser la note maximale fixée pour l\'activité
* Maximum : la note finale est l\'évaluation la plus haute
* Minimum : la note finale est l\'évaluation la plus basse
* Somme : Toutes les évaluations sont additionnées. Ce total ne peut pas dépasser la note maximale fixée pour l\'activité

Si l\'option « Aucune évaluation » est sélectionnée, l\'activité n\'apparaîtra pas dans le carnet de notes.';
$string['allowratings'] = 'Permettre aux éléments d\'être évalués ?';
$string['allratingsforitem'] = 'Toutes les évaluations données';
$string['capabilitychecknotavailable'] = 'La vérification des capacités n\'est pas disponible tant que l\'activité n\'est pas enregistrée';
$string['couldnotdeleteratings'] = 'Cet élément ne peut pas être supprimé, car des utilisateurs l\'ont déjà évalué';
$string['norate'] = 'L\'évaluation d\'éléments n\'est pas permise !';
$string['noratings'] = 'Aucune évaluation remise';
$string['noviewanyrate'] = 'Vous ne pouvez voir que les résultats des éléments que vous avez produits';
$string['noviewrate'] = 'Vous n\'avez pas les permissions requises pour voir les évaluations des éléments';
$string['privacy:metadata:rating'] = 'Les évaluations saisies par l\'utilisateur sont enregistrées avec une information de lien vers l\'élément qui a été évalué.';
$string['privacy:metadata:rating:rating'] = 'Évaluation numérique saisie par l\'utilisateur.';
$string['privacy:metadata:rating:timecreated'] = 'Date et heure de la première évaluation.';
$string['privacy:metadata:rating:timemodified'] = 'Date et heure de la dernière modification de l\'évaluation.';
$string['privacy:metadata:rating:userid'] = 'Utilisateur ayant fait l\'évaluation.';
$string['rate'] = 'Évaluer';
$string['ratepermissiondenied'] = 'Vous n\'avez pas les permissions requises pour évaluer cet élément';
$string['rating'] = 'Évaluation';
$string['ratinginvalid'] = 'L\'évaluation n\'est pas valide';
$string['ratings'] = 'Évaluations';
$string['ratingtime'] = 'Restreindre l\'évaluation aux éléments dont les dates sont dans cet intervalle :';
$string['rolewarning'] = 'Rôles avec permission d\'évaluer';
$string['rolewarning_help'] = 'Les rôles permettant d\'évaluer sont ceux qui ont la capacité moodle/rating:rate, ainsi que toute capacité d\'évaluation spécifique aux activités. Il est possible de donner plus de permissions d\'évaluation via la page Permissions.';
$string['scaleselectionrequired'] = 'Lors du choix d\'un type de tendance centrale pour des notes, vous devez également doit choisir un barème, soit fixer un nombre de points maximum.';
