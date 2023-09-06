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
 * Strings for component 'qtype_match', language 'fr', version '4.1'.
 *
 * @package     qtype_match
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = 'Réponse {$a}';
$string['availablechoices'] = 'Choix disponibles';
$string['blanksforxmorequestions'] = '{no} emplacements supplémentaires vides';
$string['correctansweris'] = 'La réponse correcte est : {$a}';
$string['deletedchoice'] = '[Choix supprimé]';
$string['deletedsubquestion'] = 'Cette partie de la question a été supprimée après le début de la tentative';
$string['filloutthreeqsandtwoas'] = 'Vous devez fournir au moins deux questions et trois réponses. Vous pouvez donner d\'autres réponses fausses en indiquant une réponse à une question vide. Les entrées avec une question et une réponse toutes deux vides seront ignorées.';
$string['nomatchinganswer'] = 'Vous devez indiquer une réponse à la question « {$a} ».';
$string['nomatchinganswerforq'] = 'Vous devez indiquez une réponse pour cette question.';
$string['notenoughqsandas'] = 'Vous devez fournir au moins {$a->q} questions et {$a->a} réponses.';
$string['notenoughquestions'] = 'Vous devez fournir au moins {$a} paires de questions et réponses.';
$string['pleaseananswerallparts'] = 'Merci de répondre à tous les éléments de la question.';
$string['pluginname'] = 'Appariement';
$string['pluginname_help'] = 'La question d\'appariement demande au participant de faire correspondre une liste de termes (questions) avec une autre liste de termes (réponses).';
$string['pluginname_link'] = 'question/type/match';
$string['pluginnameadding'] = 'Ajout d\'une question d\'appariement';
$string['pluginnameediting'] = 'Modification d\'une question d\'appariement';
$string['pluginnamesummary'] = 'La réponse à chaque sous-question doit être choisie parmi une liste de possibilités prédéfinies.';
$string['privacy:metadata'] = 'Le plugin de type de question Appariement permet aux auteurs de questions d\'enregistrer des préférences par défaut.';
$string['privacy:preference:defaultmark'] = 'Le nombre de points par défaut pour une question.';
$string['privacy:preference:penalty'] = 'La pénalité pour chaque tentative incorrecte lorsque les questions sont utilisées dans le comportement « Interactif avec essais multiples » ou « Adaptatif ».';
$string['privacy:preference:shuffleanswers'] = 'Si les réponses doivent être mélangées automatiquement.';
$string['regradeissuenumchoiceschanged'] = 'Le nombre de choix a été modifié.';
$string['regradeissuenumstemschanged'] = 'Le nombre de sous-questions a été modifié.';
$string['shuffle'] = 'Mélanger';
$string['shuffle_help'] = 'Si ce réglage est activé, l\'ordre des questions est fixé aléatoirement avant chaque tentative, pour autant que l\'option « Mélanger les réponses possibles » soit activée dans les paramètres du test. Dans une question d\'appariement, seules les questions sont affectées par ce réglage. Les choix de réponses sont toujours mélangés aléatoirement.';
