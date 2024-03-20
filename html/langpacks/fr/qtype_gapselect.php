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
 * Strings for component 'qtype_gapselect', language 'fr', version '4.1'.
 *
 * @package     qtype_gapselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Espaces vides pour {no} choix supplémentaires';
$string['answer'] = 'Réponse';
$string['blanknumber'] = 'Vide {$a}';
$string['choices'] = 'Choix';
$string['choicex'] = 'Choix [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'menu déroulant';
$string['combinedcontrolnamegapselectplural'] = 'menus déroulants';
$string['correctansweris'] = 'La réponse correcte est : {$a}';
$string['errorblankchoice'] = 'Veuillez sélectionner un choix : le choix {$a} est vide.';
$string['errormissingchoice'] = 'Veuillez vérifier le texte de la question : {$a} n’a pas été trouvé parmi les choix possibles ! Seuls les numéros de choix existants peuvent être utilisés comme paramètres fictifs.';
$string['errornoslots'] = 'Le texte de la question doit contenir des espaces reservés du type [[1]] pour définir l’emplacement des mots qui seront choisis.';
$string['errorquestiontextblank'] = 'Veuillez saisir le texte de la question.';
$string['group'] = 'Groupe';
$string['pleaseputananswerineachbox'] = 'Veuillez placer une réponse dans chaque boîte';
$string['pluginname'] = 'Sélectionner les mots manquants';
$string['pluginname_help'] = 'Les questions à mots manquants demandent au participant de choisir les réponses correctes dans des menus déroulants. Les marqueurs [[1]], [[2]], [[3]]… sont utilisés comme paramètres fictifs dans le texte de la question, avec les choix corrects correspondants 1, 2, 3… respectivement. Des réponses supplémentaires (distracteurs) peuvent être ajoutées pour rendre la question plus difficile à répondre. Les choix disponibles peuvent être groupés afin de restreindre les réponses disponibles dans chaque menu déroulant.';
$string['pluginname_link'] = 'question/type/gapselect';
$string['pluginnameadding'] = 'Ajout d’une question permettant de sélectionner le mot manquant';
$string['pluginnameediting'] = 'Modification d’une question permettant de sélectionner le mot manquant';
$string['pluginnamesummary'] = 'Les mots manquants dans le texte de la question sont remplis par des menus déroulants.';
$string['privacy:metadata'] = 'Le plugin de type de question Sélectionner les mots manquants permet aux auteurs de questions d’enregistrer des préférences par défaut.';
$string['privacy:preference:defaultmark'] = 'Le nombre de points par défaut pour une question.';
$string['privacy:preference:penalty'] = 'La pénalité pour chaque tentative incorrecte lorsque les questions sont utilisées dans le comportement « Interactif avec essais multiples » ou « Adaptatif ».';
$string['privacy:preference:shuffleanswers'] = 'Si les réponses doivent être mélangées automatiquement.';
$string['regradeissuenumchoiceschanged'] = 'Le nombre de choix du groupe {$a} a été modifié.';
$string['regradeissuenumgroupsschanged'] = 'Le nombre de groupes de choix a été modifié.';
$string['shuffle'] = 'Mélanger';
$string['tagsnotallowed'] = '{$a->tag} n’est pas permis (seulement {$a->allowed} sont permis).';
$string['tagsnotallowedatall'] = '{$a->tag} n’est pas permis (aucun code HTML n’est permis ici).';
