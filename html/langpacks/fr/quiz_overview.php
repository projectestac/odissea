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
 * Strings for component 'quiz_overview', language 'fr', version '4.5'.
 *
 * @package     quiz_overview
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'Afficher toutes les tentatives';
$string['allattemptscontributetograde'] = 'Toutes les tentatives comptent pour la note finale du participant.';
$string['allstudents'] = 'Afficher tous les {$a}';
$string['attemptsonly'] = 'N’afficher que les {$a} avec tentatives';
$string['attemptsprepage'] = 'Tentatives affichées par page';
$string['deleteselected'] = 'Supprimer les tentatives sélectionnées';
$string['done'] = 'Effectué';
$string['err_failedtodeleteregrades'] = 'Échec de la suppression des notes calculées de la tentative';
$string['err_failedtorecalculateattemptgrades'] = 'Échec du re-calcul des notes de la tentative';
$string['highlightinggraded'] = 'La tentative comptant pour la note finale est surlignée pour chaque participant.';
$string['needed'] = 'Nécessaire';
$string['noattemptsonly'] = 'N’afficher / télécharger que les {$a} sans tentatives';
$string['noattemptstoregrade'] = 'Aucune tentative ne doit être ré-évaluée';
$string['nogradepermission'] = 'Vous n’avez les permissions requises pour évaluer ce test.';
$string['onlyoneattemptallowed'] = 'Une seule tentative par participant est autorisée pour ce test.';
$string['optallattempts'] = 'toutes les tentatives';
$string['optallstudents'] = 'Tous les {$a}';
$string['optattemptsonly'] = '{$a} ayant effectué le test';
$string['optnoattemptsonly'] = '{$a} n’ayant pas effectué le test';
$string['optonlyregradedattempts'] = 'recalculées ou marquées comme devant être recalculées';
$string['overview'] = 'Notes';
$string['overviewdownload'] = 'Téléchargement vue d’ensemble';
$string['overviewfilename'] = 'notes';
$string['overviewreport'] = 'Rapport d’évaluation';
$string['overviewreportgraph'] = 'Nombre total de participants dans l’intervalle de notes';
$string['overviewreportgraphgroup'] = 'Nombre total de participants du groupe « {$a} » dans l’intervalle de notes';
$string['pagesize'] = 'Taille de page';
$string['pluginname'] = 'Notes';
$string['preferencespage'] = 'Préférences pour cette page';
$string['preferencessave'] = 'Afficher le rapport';
$string['preferencesuser'] = 'Vos préférences pour ce rapport';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'S’il faut afficher les points pour chaque question.';
$string['privacy:preference:slotmarks:no'] = 'Les points ne sont pas affichés à côté de la question.';
$string['privacy:preference:slotmarks:yes'] = 'Les points sont affichés à côté de la question.';
$string['regrade'] = 'Recalculer';
$string['regrade_allattempts'] = 'Toutes les tentatives';
$string['regrade_allquestions'] = 'Toutes les questions';
$string['regrade_attempts'] = 'Recalculer des tentatives…';
$string['regrade_commitregrade'] = 'Effectuer le recalcul';
$string['regrade_dryrun'] = 'Essai à blanc';
$string['regrade_help'] = 'Cette option recalcule automatiquement les notes des tentatives, en utilisant si possible la version actuelle de chaque question. Une simulation permet de prévisualiser les modifications des notes sans modifier les tentatives.';
$string['regrade_link'] = 'Quiz_grades_report#Re-grading_attempts';
$string['regrade_regradeneedednotificationmessage'] = 'La dernière simulation de recalcul a montré que les points de {$a->questions} questions dans {$a->attempts} tentatives seront modifiés.';
$string['regrade_regradenow'] = 'Recalculer maintenant';
$string['regrade_selectedattempts'] = 'Tentatives sélectionnées';
$string['regrade_selectedquestions'] = 'Questions sélectionnées';
$string['regradeall'] = 'Tout recalculer';
$string['regradealldry'] = 'Simuler un recalcul complet';
$string['regradealldrydo'] = 'Recalcul des {$a} tentatives marquées comme devant être recalculées';
$string['regradealldrydogroup'] = 'Recalcul des {$a->countregradeneeded} tentatives marquées comme devant être recalculées pour le groupe « {$a->groupname} »';
$string['regradealldrygroup'] = 'Simulation de recalcul complet pour le groupe « {$a->groupname} »';
$string['regradeallgroup'] = 'Recalcul complet pour le groupe « {$a->groupname} »';
$string['regradecomplete'] = 'Recalcul des notes terminé';
$string['regradedsuccessfullyxofy'] = 'Ré-évaluation terminée ({$a->done}/{$a->count})';
$string['regradeheader'] = 'Ré-évaluation';
$string['regradeselected'] = 'Recalcul les tentatives sélectionnées';
$string['regradingattemptissue'] = 'Insertion {$a->slot} : {$a->reason}';
$string['regradingattemptxofy'] = 'Ré-évaluation de la tentative ({$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = 'Les questions suivantes n’ont pas pu être recalculées dans la tentative {$a->attemptnum} de {$a->name} (id {$a->attemptid})';
$string['regradingattemptxofywithdetails'] = 'Ré-évaluation de la tentative ({$a->done}/{$a->count}) - Tentative {$a->attemptnum} de {$a->name} (id {$a->attemptid})';
$string['show'] = 'Afficher/télécharger';
$string['showattempts'] = 'N’afficher/télécharger que les tentatives';
$string['showdetailedmarks'] = 'Points pour chaque question';
$string['showinggraded'] = 'Afficher seulement les tentatives évaluées de chaque participant.';
$string['showinggradedandungraded'] = 'Afficher toutes les tentatives de chaque participant. La tentative évaluée est surlignée pour chaque utilisateur. La méthode d’évaluation pour ce test est {$a}.';
$string['studentingroup'] = '« {$a->coursestudent} » du groupe « {$a->groupname} »';
$string['studentingrouplong'] = '« {$a->coursestudent} » dans ce groupe';
