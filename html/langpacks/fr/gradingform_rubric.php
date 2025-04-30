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
 * Strings for component 'gradingform_rubric', language 'fr', version '4.4'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Ajouter critère';
$string['additionalfeedback'] = 'Feedback additionnel';
$string['alwaysshowdefinition'] = 'Permet aux utilisateurs de prévisualiser la grille d’évaluation (sinon, la grille ne sera visible qu’après l’évaluation)';
$string['backtoediting'] = 'Retour à l’édition';
$string['confirmdeletecriterion'] = 'Voulez-vous vraiment supprimer ce critère ?';
$string['confirmdeletelevel'] = 'Voulez-vous vraiment supprimer ce niveau ?';
$string['criterion'] = 'Critère {$a}';
$string['criterionaddlevel'] = 'Ajouter niveau';
$string['criteriondelete'] = 'Supprimer le critère';
$string['criterionduplicate'] = 'Critère à double';
$string['criterionempty'] = 'Cliquer pour ajouter un critère';
$string['criterionmovedown'] = 'Déplacer vers le bas';
$string['criterionmoveup'] = 'Déplacer vers le haut';
$string['criterionremark'] = 'Remarque pour le critère {$a->description} : {$a->remark}';
$string['definerubric'] = 'Définir grille d’évaluation';
$string['description'] = 'Description';
$string['enableremarks'] = 'Permettre à l’évaluateur d’ajouter des remarques textuelles pour chaque critère';
$string['err_mintwolevels'] = 'Chaque critère doit avoir au moins deux niveaux';
$string['err_nocriteria'] = 'Une grille d’évaluation doit comporter au moins un critère';
$string['err_nodefinition'] = 'La définition du niveau doit être renseignée';
$string['err_nodescription'] = 'La description du critère doit être renseignée';
$string['err_novariations'] = 'Les niveaux du critère ne doivent pas attribuer le même nombre de points';
$string['err_scoreformat'] = 'Le nombre de points pour chaque niveau doit être un nombre valide';
$string['err_totalscore'] = 'Le nombre maximal de points possible lors de l’évaluation au moyen de la grille d’évaluation doit être plus grand que zéro';
$string['gradingof'] = 'Évaluation de {$a}';
$string['level'] = 'Niveau {$a->definition}, {$a->score} points.';
$string['leveldefinition'] = 'Définition du niveau {$a}';
$string['leveldelete'] = 'Supprimer le niveau {$a}';
$string['levelempty'] = 'Cliquer pour modifier le niveau';
$string['levelsgroup'] = 'Groupe de niveaux';
$string['lockzeropoints'] = 'Calculer la note sur la base de la note minimale possible de la grille d’évaluation';
$string['lockzeropoints_help'] = 'Ce réglage ne s’applique que si la somme du nombre minimal de points de chaque critère est plus grande que 0. S’il est activé, le score minimal possible pour l’activité sera la note minimale possible de la rubrique. S’il n’est pas activé, le score minimal de la grille d’évaluation sera converti vers la note minimale disponible dans l’activité (qui est 0, à moins qu’un barème ne soit utilisé).';
$string['name'] = 'Nom';
$string['needregrademessage'] = 'La définition de la grille d’évaluation a été modifiée après que ce participant a été évalué. Le participant ne pourra voir cette grille d’évaluation avant que vous mettiez à jour la note.';
$string['notset'] = 'Non défini';
$string['pluginname'] = 'Grille d’évaluation';
$string['pointsvalue'] = '{$a} points';
$string['previewrubric'] = 'Prévisualiser la grille d’évaluation';
$string['privacy:metadata:criterionid'] = 'Un identifiant pour une critère spécifique évalué.';
$string['privacy:metadata:fillingssummary'] = 'Enregistre les informations sur la note de l’utilisateur créée par la grille d’évaluation.';
$string['privacy:metadata:instanceid'] = 'Un identifiant en lien avec une note dans une activité.';
$string['privacy:metadata:levelid'] = 'Le niveau obtenu dans la grille d’évaluation.';
$string['privacy:metadata:remark'] = 'Remarques en lien avec le critère de la grille d’évaluation évaluée.';
$string['regrademessage1'] = 'Vous êtes sur le point d’enregistrer des modifications à une grille d’évaluation déjà utilisée pour donner des notes. Veuillez indiquer si les notes existantes doivent être recalculées. Dans ce cas, la grille d’évaluation ne sera visible pour les étudiants que lorsque leur note aura été recalculée.';
$string['regrademessage5'] = 'Vous êtes sur le point d’enregistrer des modifications importantes à une grille d’évaluation déjà utilisée pour une évaluation. La valeur dans le carnet de notes ne sera pas modifiée, mais la grille d’évaluation ne sera visible pour les étudiants que lorsque leur note aura été recalculée.';
$string['regradeoption0'] = 'Ne pas marquer pour recalcul';
$string['regradeoption1'] = 'Marquer pour recalcul';
$string['restoredfromdraft'] = 'Remarque ! La dernière tentative d’évaluation de ce participant n’a pas été enregistrée correctement. Les notes brouillons ont donc été restaurées. Si vous désirez effacer ces modifications, utilisez le bouton « Annuler » ci-dessous.';
$string['rubric'] = 'Grille d’évaluation';
$string['rubricmapping'] = 'Règles de correspondances entre score et note';
$string['rubricmappingexplained'] = 'Le score minimal possible pour cette grille d’évaluation est de <b>{$a->minscore} points</b>. Ce score sera converti en la note minimale disponible pour cette activité (c’est-à-dire 0, à moins qu’un barème ne soit utilisé). Le score maximal possible de <b>{$a->maxscore} points</b> sera converti en la note maximale disponible pour cette activité. Les scores intermédiaires seront convertis en cohérence.

Si un barème est utilisé pour l’évaluation, le score sera arrondi et converti en les éléments du barème comme s’il s’agissait d’entiers consécutifs.

Il est possible de changer la méthode de calcul de la note en modifiant le formulaire et en cochant la case « Calculer la note sur la base de la note minimale possible de la grille d’évaluation ».';
$string['rubricnotcompleted'] = 'Veuillez choisir quelque chose pour chaque critère';
$string['rubricoptions'] = 'Options de grille d’évaluation';
$string['rubricstatus'] = 'Statut actuel de la grille d’évaluation';
$string['save'] = 'Enregistrer';
$string['saverubric'] = 'Enregistrer la grille d’évaluation et la rendre prête à l’usage';
$string['saverubricdraft'] = 'Enregistrer comme brouillon';
$string['scoreinputforlevel'] = 'Score saisi pour le niveau {$a}';
$string['scorepostfix'] = '{$a} points';
$string['showdescriptionstudent'] = 'Afficher la description de la grille d’évaluation aux participants évalués';
$string['showdescriptionteacher'] = 'Afficher la description de la grille d’évaluation durant l’évaluation';
$string['showremarksstudent'] = 'Afficher les remarques aux participants évalués';
$string['showscorestudent'] = 'Afficher les points de chaque niveau aux participants évalués';
$string['showscoreteacher'] = 'Afficher les points de chaque niveau durant l’évaluation';
$string['sortlevelsasc'] = 'Ordre de tri pour les niveaux :';
$string['sortlevelsasc0'] = 'Descendant par nombre de points';
$string['sortlevelsasc1'] = 'Ascendant par nombre de points';
$string['zerolevelsabsent'] = 'Attention ! le score minimal pour cette rubrique n’est pas 0, ce qui peut conduire à des notes inattendues pour l’activité. Afin d’éviter ceci, chaque critère doit comporter un niveau avec 0 points.</br>Cet avertissement peut être ignoré si un barème est utilisé pour l’évaluation et que les niveaux minimaux de la rubrique correspondent à la valeur minimale du barème.';
