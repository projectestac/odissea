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
 * Strings for component 'qtype_shortanswer', language 'fr', version '3.11'.
 *
 * @package     qtype_shortanswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = '{no} emplacements supplémentaires vides';
$string['answer'] = 'Réponse : {$a}';
$string['answermustbegiven'] = 'Vous devez fournir une réponse s\'il y a une note ou un feedback.';
$string['answerno'] = 'Réponse {$a}';
$string['caseno'] = 'Non, la casse n\'est pas importante';
$string['casesensitive'] = 'Sensible à la casse';
$string['caseyes'] = 'Oui, la casse doit correspondre';
$string['correctansweris'] = 'La réponse correcte est : {$a}';
$string['correctanswers'] = 'Réponses correctes';
$string['filloutoneanswer'] = 'Vous devez fournir au moins une réponse possible. Les réponses laissées vides ne seront pas utilisées. Le caractère « * » peut être utilisé comme joker pour remplacer n\'importe quel caractère. La première réponse correspondante sera utilisée pour déterminer le score et le feedback.';
$string['notenoughanswers'] = 'Ce type de question demande au moins {$a} réponses';
$string['pleaseenterananswer'] = 'Veuillez saisir une réponse.';
$string['pluginname'] = 'Réponse courte';
$string['pluginname_help'] = 'Pour répondre à la question (qui peut contenir une image), les participants doivent écrire un mot ou une phrase courte. Il peut y avoir plusieurs réponses correctes, chacune avec une note différente. Si l\'option « Sensible à la casse » est activée, vous pourrez alors avoir des notes différentes pour « Cheval » et « cheval ».';
$string['pluginnameadding'] = 'Ajout d\'une question à réponse courte';
$string['pluginnameediting'] = 'Modification d\'une question à réponse courte';
$string['pluginnamesummary'] = 'Permet une réponse d\'un ou quelques mots, évaluée en comparant divers modèles de réponses, pouvant contenir des jokers.';
$string['privacy:metadata'] = 'Le plugin de type de question Réponse courte permet aux auteurs de questions d\'enregistrer des préférences par défaut.';
$string['privacy:preference:defaultmark'] = 'Le nombre de points par défaut pour une question.';
$string['privacy:preference:penalty'] = 'La pénalité pour chaque tentative incorrecte lorsque les questions sont utilisées dans le comportement « Interactif avec essais multiples » ou « Adaptatif ».';
$string['privacy:preference:usecase'] = 'Si les réponses sont sensibles à la casse.';
