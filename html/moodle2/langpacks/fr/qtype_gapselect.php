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
 * Strings for component 'qtype_gapselect', language 'fr', branch 'MOODLE_31_STABLE'
 *
 * @package   qtype_gapselect
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Espaces vides pour {no} choix supplémentaires';
$string['answer'] = 'Réponse';
$string['choices'] = 'Choix';
$string['choicex'] = 'Choix {no}';
$string['combinedcontrolnamegapselect'] = 'liste déroulante';
$string['combinedcontrolnamegapselectplural'] = 'listes déroulantes';
$string['correctansweris'] = 'La réponse correcte est : {$a}';
$string['errorblankchoice'] = 'Veuillez sélectionner un choix : le choix {$a} est vide.';
$string['errormissingchoice'] = 'Veuillez vérifier le texte de la question : {$a} n\'a pas été trouvé parmi les choix possibles ! Seuls les numéros de choix existants peuvent être utilisés dans les espaces réservés.';
$string['errornoslots'] = 'Le texte de la question doit contenir des espaces reservés du type [[1]] pour définir l\'emplacement des mots qui seront choisis.';
$string['errorquestiontextblank'] = 'Veuillez saisir le texte de la question.';
$string['group'] = 'Groupe';
$string['pleaseputananswerineachbox'] = 'Veuillez placer une réponse dans chaque boîte';
$string['pluginname'] = 'Sélectionner les mots manquants';
$string['pluginnameadding'] = 'Ajout d\'une question permettant de sélectionner le mot manquant';
$string['pluginnameediting'] = 'Modification d\'une question permettant de sélectionner le mot manquant';
$string['pluginname_help'] = 'Les questions à mots manquants demandent au participer de choisir les réponses correctes dans des menus déroulants. Les marqueurs [[1]], [[2]], [[3]], ... sont utilisés comme paramètres fictifs dans le texte de la question, avec les choix corrects correspondants 1, 2, 3, … respectivement. Des réponses supplémentaires peuvent être ajoutées pour rendre la question plus difficile à répondre. Les choix disponibles peuvent être groupés afin de restreindre les réponses disponibles dans chaque menu déroulant.';
$string['pluginname_link'] = 'question/type/gapselect';
$string['pluginnamesummary'] = 'Les mots manquants dans le texte de la question sont comblés par des menus déroulants.';
$string['shuffle'] = 'Mélanger';
$string['tagsnotallowed'] = '{$a->tag} n\'est pas permis (seulement {$a->allowed} sont permis).';
$string['tagsnotallowedatall'] = '{$a->tag} n\'est pas permis (aucun code HTML n\'est permis ici).';
