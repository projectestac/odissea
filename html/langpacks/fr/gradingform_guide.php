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
 * Strings for component 'gradingform_guide', language 'fr', branch 'MOODLE_38_STABLE'
 *
 * @package   gradingform_guide
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Ajouter un commentaire fréquemment utilisé';
$string['addcriterion'] = 'Ajouter un critère';
$string['additionalcomments'] = 'Commentaires additionnels';
$string['additionalcommentsforcriterion'] = 'Commentaires supplémentaires pour le critère, {$a}';
$string['alwaysshowdefinition'] = 'Afficher le guide d\'évaluation aux participants';
$string['backtoediting'] = 'Retour à la modification';
$string['clicktocopy'] = 'Cliquer pour copier ce texte dans le feedback du critère';
$string['clicktoedit'] = 'Cliquer pour modifier';
$string['clicktoeditname'] = 'Cliquer pour modifier le nom du critère';
$string['comment'] = 'Commentaire';
$string['commentpickerforcriterion'] = 'Sélecteur de commentaires fréquents d\'utilisateurs pour les commentaires supplémentaires';
$string['comments'] = 'Commentaires fréquemment utilisés';
$string['commentsdelete'] = 'Supprimer le commentaire';
$string['commentsempty'] = 'Cliquer pour modifier le commentaire';
$string['commentsmovedown'] = 'Déplacer vers le bas';
$string['commentsmoveup'] = 'Déplacer vers le haut';
$string['confirmdeletecriterion'] = 'Voulez-vous vraiment supprimer cet élément ?';
$string['confirmdeletelevel'] = 'Voulez-vous vraiment supprimer ce niveau ?';
$string['criterion'] = 'Nom du critère';
$string['criteriondelete'] = 'Supprimer le critère';
$string['criterionempty'] = 'Cliquer pour modifier le critère';
$string['criterionmovedown'] = 'Déplacer vers le bas';
$string['criterionmoveup'] = 'Déplacer vers le haut';
$string['criterionname'] = 'Nom du critère';
$string['criterionremark'] = 'Remarque du critère {$a}';
$string['definemarkingguide'] = 'Guide d\'évaluation';
$string['description'] = 'Description';
$string['descriptionmarkers'] = 'Description pour évaluateurs';
$string['descriptionstudents'] = 'Description pour étudiants';
$string['err_maxscoreisnegative'] = 'Le score maximum n\'est pas valide : les valeurs négatives ne sont pas permises';
$string['err_maxscorenotnumeric'] = 'Le score maximal pour le critère doit être numérique';
$string['err_nocomment'] = 'Le commentaire ne peut pas être vide';
$string['err_nodescription'] = 'La description pour participants ne peut pas être vide';
$string['err_nodescriptionmarkers'] = 'La description pour évaluateurs ne peut pas être vide';
$string['err_nomaxscore'] = 'Le score maximal du critère ne peut pas être vide';
$string['err_noshortname'] = 'Le nom du critère ne peut pas être vide';
$string['err_scoreinvalid'] = 'Le score pour {$a->criterianame} n\'est pas valide : le score max est de {$a->maxscore}';
$string['err_scoreisnegative'] = 'Le score donné à « {$a->criterianame} » n\'est pas valide : les valeurs négatives ne sont pas permises.';
$string['err_shortnametoolong'] = 'Le nom des critères ne doit pas dépasser 256 caractères.';
$string['gradingof'] = 'Évaluation de {$a}';
$string['guide'] = 'Guide d\'évaluation';
$string['guidemappingexplained'] = 'Attention : votre guide d\'évaluation définit une note maximale de <b>{$a->maxscore}</b>, alors que la note maximale de l\'activité est de {$a->modulegrade}. La note maximale du guide d\'évaluation sera modifiée pour correspondre à la note maximale du module.<br />Toutes les notes seront converties en conformité et arrondies à la note disponible la plus proche.';
$string['guidenotcompleted'] = 'Veuillez fournir une note valide pour chaque critère';
$string['guideoptions'] = 'Options du guide d\'évaluation';
$string['guidestatus'] = 'État du guide d\'évaluation actuel';
$string['hidemarkerdesc'] = 'Cacher les descriptions des critères pour les évaluateurs';
$string['hidestudentdesc'] = 'Cacher les descriptions des critères pour les participants';
$string['informationforcriterion'] = 'Information sur {$a}';
$string['insertcomment'] = 'Insérer un commentaire utilisé souvent';
$string['maxscore'] = 'Note maximale';
$string['name'] = 'Nom';
$string['needregrademessage'] = 'Le guide d\'évaluation a été modifié après que cet participant a été évalué. Le participant ne pourra voir ce guide que lorsque vous aurez vérifié le guide et modifié la note.';
$string['outof'] = 'Score sur {$a}';
$string['pluginname'] = 'Guide d\'évaluation';
$string['previewmarkingguide'] = 'Prévisualiser le guide d\'évaluation';
$string['privacy:metadata:criterionid'] = 'Un identifiant de critère pour l\'évaluation avancée.';
$string['privacy:metadata:fillingssummary'] = 'Enregistre les informations sur une note d\'utilisateur et le feedback pour le guide d\'évaluation.';
$string['privacy:metadata:instanceid'] = 'Un identifiant de note utilisé par une activité.';
$string['privacy:metadata:preference:showmarkerdesc'] = 'S\'il faut afficher à l\'évaluateur la description des critères';
$string['privacy:metadata:preference:showstudentdesc'] = 'S\'il faut afficher à l\'étudiant la description des critères';
$string['privacy:metadata:remark'] = 'Remarques en lien avec ce critère de note.';
$string['privacy:metadata:score'] = 'Un score pour ce critère de note.';
$string['regrademessage1'] = 'Vous allez enregistrer des modifications d\'un guide d\'évaluation qui a déjà été utilisé pour donner des notes. Veuillez indiquer si les notes déjà données doivent être revues. Dans ce cas, ce guide ne sera visible pour les participants que lorsque vous aurez réévalué leur travail.';
$string['regrademessage5'] = 'Vous allez enregistrer d\'importantes modifications d\'un guide d\'évaluation qui a déjà été utilisé pour donner des notes. Les notes ne seront pas modifiées dans le carnet de notes, mais le guide ne sera visible pour les participants que lorsque vous aurez réévalué leur travail.';
$string['regradeoption0'] = 'Ne pas marquer pour réévaluation';
$string['regradeoption1'] = 'Marquer pour réévaluation';
$string['restoredfromdraft'] = 'Remarque : l\'enregistrement de la dernière évaluation de cette personne n\'a pas été pris en compte de manière correcte. Les notes temporaires ont été restaurées. Si vous voulez annuler ces modifications, veuillez cliquer sur le bouton « Annuler » ci-dessous.';
$string['save'] = 'Enregistrer';
$string['saveguide'] = 'Enregistrer le guide d\'évaluation et le rendre disponible';
$string['saveguidedraft'] = 'Enregistrer comme brouillon';
$string['score'] = 'Note';
$string['scoreforcriterion'] = 'Score pour {$a}';
$string['score_help'] = 'Saisir pour {$a->criterion} un score entre 0 et {$a->maxscore}.';
$string['showmarkerdesc'] = 'Afficher les descriptions des critères pour les évaluateurs';
$string['showmarkspercriterionstudents'] = 'Afficher aux participants les notes par critère';
$string['showstudentdesc'] = 'Afficher les descriptions des critères pour les participants';
