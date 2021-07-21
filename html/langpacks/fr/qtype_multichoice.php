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
 * Strings for component 'qtype_multichoice', language 'fr', version '3.11'.
 *
 * @package     qtype_multichoice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerhowmany'] = 'Plusieurs réponses ou une seule ?';
$string['answerhowmany_desc'] = 'Ce réglage détermine si la question demande par défaut une seule réponse (boutons radio) ou plusieurs réponses (cases à cocher).';
$string['answernumbering'] = 'Numéroter les choix ?';
$string['answernumbering123'] = '1., 2., 3., etc.';
$string['answernumberingABCD'] = 'A., B., C., etc.';
$string['answernumberingIIII'] = 'I., II., III., etc.';
$string['answernumbering_desc'] = 'Style de numérotation par défaut.';
$string['answernumberingabc'] = 'a., b., c., etc.';
$string['answernumberingiii'] = 'i., ii., iii., etc.';
$string['answernumberingnone'] = 'Sans numérotation';
$string['answersingleno'] = 'Réponses multiples autorisées';
$string['answersingleyes'] = 'Une seule réponse';
$string['choiceno'] = 'Réponse {$a}';
$string['choices'] = 'Réponses possibles';
$string['clearchoice'] = 'Effacer mon choix';
$string['clozeaid'] = 'Tapez le mot manquant';
$string['correctansweris'] = 'La réponse correcte est : {$a}';
$string['correctanswersare'] = 'Les réponses correctes sont : {$a}';
$string['correctfeedback'] = 'Pour toute réponse correcte';
$string['deletedchoice'] = 'Ce choix a été supprimé après le début de la tentative';
$string['errfractionsaddwrong'] = 'La somme des notes positives que vous avez indiquées positive ne donne pas 100%<br />Leur somme est de {$a}%';
$string['errfractionsnomax'] = 'L\'un des choix proposés devrait être à 100%, afin qu\'il soit<br />possible d\'obtenir une note maximale pour cette question.';
$string['errgradesetanswerblank'] = 'Note donnée, mais la réponse est vide';
$string['feedback'] = 'Feedback';
$string['fillouttwochoices'] = 'Vous devez donner au moins deux réponses. Les réponses laissées vides ne seront pas utilisées.';
$string['fractionsaddwrong'] = 'La somme des notes positives que vous avez choisies n\'est pas égale à 100%.<br />Leur somme est de {$a}%.<br />Voulez-vous revenir en arrière pour corriger cette question ?';
$string['fractionsnomax'] = 'Une des réponses doit être à 100%, de sorte qu\'il soit<br />possible d\'obtenir la note maximale pour cette question.<br />Voulez-vous revenir en arrière pour corriger cette question ?';
$string['incorrectfeedback'] = 'Pour toute réponse incorrecte';
$string['notenoughanswers'] = 'Ce type de question requiert au moins {$a} réponses';
$string['overallcorrectfeedback'] = 'Feedback pour les réponses correctes';
$string['overallfeedback'] = 'Feedback général';
$string['overallincorrectfeedback'] = 'Feedback pour les réponses fausses';
$string['overallpartiallycorrectfeedback'] = 'Feedback pour les réponses partiellement correctes';
$string['partiallycorrectfeedback'] = 'Pour toute réponse partiellement correcte';
$string['pleaseselectananswer'] = 'Veuillez sélectionner une réponse.';
$string['pleaseselectatleastoneanswer'] = 'Veuillez sélectionner au moins une réponse.';
$string['pluginname'] = 'Choix multiple';
$string['pluginname_help'] = 'Pour répondre à la question (qui peut inclure une image) les participants peuvent choisir parmi plusieurs propositions. Une question à choix multiple peut avoir une réponse (QCU) ou plusieurs réponses (QCM) correctes.';
$string['pluginnameadding'] = 'Ajouter une question à choix multiple';
$string['pluginnameediting'] = 'Modification d\'une question à choix multiple';
$string['pluginnamesummary'] = 'Permet la sélection d\'une ou plusieurs réponses dans une liste prédéfinie.';
$string['privacy:metadata'] = 'Le plugin de type de question Choix multiple permet aux auteurs de questions d\'enregistrer des préférences par défaut.';
$string['privacy:preference:answernumbering'] = 'Le style d\'énumération à utiliser (« 1., 2., 3., ...» ; « a., b., c., ...» ; etc.)';
$string['privacy:preference:defaultmark'] = 'Le nombre de points par défaut pour une question.';
$string['privacy:preference:penalty'] = 'La pénalité pour chaque tentative incorrecte lorsque les questions sont utilisées dans le comportement « Interactif avec essais multiples » ou « Adaptatif ».';
$string['privacy:preference:showstandardinstruction'] = 'Si les instructions standard doivent être affichées';
$string['privacy:preference:shuffleanswers'] = 'Si les réponses doivent être mélangées automatiquement.';
$string['privacy:preference:single'] = 'Si la réponse est unique avec des boutons radio ou multiple avec des cases à cocher.';
$string['selectmulti'] = 'Veuillez choisir au moins une réponse :';
$string['selectone'] = 'Veuillez choisir une réponse :';
$string['showstandardinstruction'] = 'Afficher les instructions standards';
$string['showstandardinstruction_help'] = 'Lorsque ce réglage est activé, les instructions « Sélectionner une option : » ou « Sélectionner une ou plusieurs options : ») sera affichée avant les réponses aux questions à choix multiple.';
$string['shuffleanswers'] = 'Mélanger les réponses possibles ?';
$string['shuffleanswers_desc'] = 'Ce réglage détermine si par défaut les réponses proposées doivent être mélangées à chaque tentative.';
$string['shuffleanswers_help'] = 'Si vous cochez cette option, l\'ordre des réponses proposées sera mélangé aléatoirement au début de chaque tentative d\'un test contenant cette question, à condition que l\'option « Mélanger les réponses possibles » soit également activée dans les réglages du test.';
$string['singleanswer'] = 'Choisir une réponse.';
$string['toomanyselected'] = 'Vous avez sélectionné trop d\'options.';
