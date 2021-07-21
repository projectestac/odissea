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
 * Strings for component 'studentquiz', language 'fr', version '3.11'.
 *
 * @package     studentquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abort_button'] = 'Abandonner';
$string['add_comment'] = 'Ajouter un commentaire';
$string['add_reply'] = 'Ajouter une réponse';
$string['after_answering_end_date'] = 'La possibilité de répondre à cette activité StudentQuiz est terminée depuis le {$a}.';
$string['after_submission_end_date'] = 'La possibilité de soumettre des questions dans cette activité StudentQuiz est terminée depuis le {$a}.';
$string['anonymous_user_name'] = 'Utilisateur anonyme #{$a}';
$string['answeringndbeforestart'] = 'Le délai de réponse ne peut être précisé avant la date d\'ouverture des réponses';
$string['api_state_change_success_content'] = 'L\'état/la visibilité de la question a été changé(e) avec succès';
$string['api_state_change_success_title'] = 'Succès';
$string['approve'] = 'Approuver';
$string['approve_toggle'] = 'Dés/Aprouver';
$string['approved'] = '✓';
$string['approved_column_name'] = 'Approuvée';
$string['approved_veryshort'] = 'A';
$string['approveselectedscheck'] = 'Voulez-vous vraiment dés/approuver les questions suivantes ?<br /><br />{$a}';
$string['average_column_name'] = 'Moyenne';
$string['before_answering_end_date'] = 'La possibilité de répondre à cette activité StudentQuiz se termine le {$a}.';
$string['before_answering_start_date'] = 'Ouvert aux réponses à partir du {$a}.';
$string['before_submission_end_date'] = 'La possibilité de soumettre des questions dans cette activité StudentQuiz se termine le {$a}.';
$string['before_submission_start_date'] = 'Ouvert à la soumission de questions à partir du {$a}.';
$string['cachedef_permissionssync'] = 'Suivi de la synchronisation des autorisations StudentQuiz';
$string['cannotcapturecommenthistory'] = 'Impossible de créer un événement d\'historique pour ce commentaire';
$string['changeselectedsstate'] = 'Modifier l\'état des questions suivantes : <br /><br />{$a}';
$string['collapseall'] = 'Réduire tous les commentaires';
$string['collapsecomment'] = 'Réduire le commentaire';
$string['comment_author'] = 'Auteur';
$string['comment_cannot_update'] = 'Impossible de mettre à jour le commentaire';
$string['comment_column_name'] = 'Commentaires';
$string['comment_error'] = 'Veuillez commenter';
$string['comment_error_unsaved'] = 'Voulez-vous d\'abord enregistrer ce commentaire ?';
$string['comment_help'] = 'Écrire un commentaire';
$string['comment_help_help'] = 'Écrire un commentaire à propos de la question';
$string['comment_veryshort'] = 'C';
$string['commenthistory'] = 'Historique des commentaires';
$string['confirmdeletecomment'] = 'Voulez-vous vraiment supprimer ce commentaire ?';
$string['createnewquestion'] = 'Créer une nouvelle question';
$string['createnewquestionfirst'] = 'Créer une première question';
$string['creator_anonym_fullname'] = 'Étudiant anonyme';
$string['current_of_total'] = '{$a->current} sur {$a->total}';
$string['delete'] = 'Supprimer';
$string['deletecomment'] = 'Supprimer le commentaire';
$string['deletedbyauthor'] = 'Ce commentaire a été supprimé le {$a}.';
$string['deletedbyuser'] = 'Ce commentaire a été supprimé par {$a->user} le {$a->date}.';
$string['deletedcomment'] = 'Commentaire supprimé.';
$string['describe_already_deleted'] = 'Ce commentaire est déjà supprimé.';
$string['describe_not_creator'] = 'Ce n\'est pas votre commentaire.';
$string['describe_out_of_time_delete'] = 'Le délai de suppression de ce commentaire est dépassé.';
$string['describe_out_of_time_edit'] = 'Le délai d\'édition de ce commentaire est dépassé';
$string['difficulty_all_column_name'] = 'Difficulté pour le groupe';
$string['difficulty_level_column_name'] = 'Difficulté';
$string['difficulty_title'] = 'Barre de difficulté';
$string['editcomment'] = 'Éditer le commentaire';
$string['editedcommenthistory'] = 'Modifié par {$a->lastesteditedcommentauthorname} à {$a->lastededitedcommenttime}';
$string['editedcommenthistorylinktext'] = 'Historique';
$string['editorplaceholder'] = 'Saisissez votre commentaire ici...';
$string['emailautomationnote'] = 'Veuillez prendre note qu\'il s\'agit d\'un message automatisé – cette adresse courriel n\'est pas vérifiée.';
$string['emailcommentaddedbody'] = 'Bonjour {$a->recepientname},

Votre question « {$a->questionname} » du cours « {$a->coursename} » dans l\'activité StudentQuiz « {$a->modulename} » a été commentée par « {$a->actorname} » à « {$a->timestamp} ».

Le commentaire est le suivant : « {$a->commenttext} »

Vous pouvez examiner cette question à : {$a->questionurl}.';
$string['emailcommentaddedsmall'] = 'Votre question « {$a->questionname} » a été commentée par {$a->actorname}.';
$string['emailcommentaddedsubject'] = 'La question suivante a été commentée : {$a->questionname}';
$string['emailcommentdeletedbody'] = 'Bonjour {$a->recepientname},

Le commentaire « {$a->commenttime} » à la question « {$a->questionname} » du cours « {$a->coursename} » dans l\'activité StudentQuiz « {$a->modulename} » a été supprimée par « {$a->actorname} » à « {$a->timestamp} ».

Le commentaire était le suivant : « {$a->commenttext} »

Vous pouvez examiner cette question à : {$a->questionurl}.';
$string['emailcommentdeletedsmall'] = 'Le commentaire à votre question « {$a->questionname} » a été supprimé par {$a->actorname}.';
$string['emailcommentdeletedsubject'] = 'Commentaire supprimé pour la question : {$a->questionname}';
$string['emaildigestbody'] = 'Ceci est votre récapitulatif {$a->digesttype} de notifications pour l\'activité StudentQuiz <b>{$a->modulename}</b> disponible ici&nbsp;:';
$string['emaildigestbody_section_content'] = 'Votre question <b>{$a->questionname}</b> a été <b>{$a->actiontype}</b> par <b>{$a->actorname}</b>';
$string['emaildigestbody_section_title'] = 'Notification {$a->seq}, {$a->timestamp';
$string['emaildigestsubject'] = 'Récapitulatif de notifications StudentQuiz';
$string['emailminecommentdeletedbody'] = 'Bonjour {$a->recepientname},

Le commentaire « {$a->commenttime} » à la question « {$a->questionname} » du cours « {$a->coursename} » dans l\'activité StudentQuiz « {$a->modulename} » a été supprimée par « {$a->actorname} » à « {$a->timestamp} ».

Le commentaire était le suivant : « {$a->commenttext} »

Vous pouvez examiner cette question à : {$a->questionurl}.';
$string['emailminecommentdeletedsmall'] = 'Votre commentaire sur la question « {$a->questionname} » a été supprimé par {$a->actorname}.';
$string['emailminecommentdeletedsubject'] = 'Commentaire supprimé pour la question : {$a->questionname}';
$string['emailsalutation'] = 'Cher {$a},';
$string['emailsinglebody'] = 'Votre question <b>{$a->questionname}</b> dans l\'activité StudentQuiz <b>{$a->modulename}</b> du cours <b>{$a->coursename}</b> a été {$a->eventname} par <b>{$a->actorname}</b> le <b>{$a->timestamp}</b>.';
$string['emailsinglebody_reviewlink'] = 'Vous pouvez réviser cette question ici&nbsp;:';
$string['error_form_validation'] = '{$a}';
$string['error_sendalert'] = 'Il y a eu une erreur lors de l\'envoi de votre rapport à {$a}.
Le rapport n\'a pas pu être envoyé.';
$string['expandall'] = 'Développer tous les commentaires';
$string['expandcomment'] = 'Développer le commentaire';
$string['filter'] = 'Filtre';
$string['filter_advanced_element'] = '{$a} (élément avancé)';
$string['filter_comment_label_date'] = 'Date';
$string['filter_comment_label_forename'] = 'Prénom';
$string['filter_comment_label_sort_by'] = 'Trier par :';
$string['filter_comment_label_sort_toggle'] = 'Trier par {$a->field} {$a->type}';
$string['filter_comment_label_surname'] = 'Nom de famille';
$string['filter_ishigher'] = 'Est plus élevé';
$string['filter_islower'] = 'Est inférieur';
$string['filter_label_approved'] = 'Questions approuvées';
$string['filter_label_comment'] = 'Commentaires';
$string['filter_label_createdate'] = 'Création';
$string['filter_label_difficulty_level'] = 'Difficulté';
$string['filter_label_fast_filters'] = 'Filtres rapides pour les questions';
$string['filter_label_myattempts'] = 'Mes tentatives';
$string['filter_label_mydifficulty'] = 'Ma difficulté';
$string['filter_label_mylastattempt'] = 'Ma dernière tentative';
$string['filter_label_myrate'] = 'Ma notation';
$string['filter_label_onlyapproved'] = 'Appouvées';
$string['filter_label_onlyapproved_help'] = 'Questions approuvées par votre enseignant';
$string['filter_label_onlydifficult'] = 'Difficiles pour le groupe';
$string['filter_label_onlydifficult_help'] = 'Question dont la difficulté moyenne est supérieure à {$a}%.';
$string['filter_label_onlydifficultforme'] = 'Difficiles pour moi';
$string['filter_label_onlydifficultforme_help'] = 'Question ayant pour moi une difficulté plus grande que {$a}%';
$string['filter_label_onlygood'] = 'De qualité';
$string['filter_label_onlygood_help'] = 'Question avec une note moyenne d\'au moins {$a} étoiles';
$string['filter_label_onlymine'] = 'Mes questions';
$string['filter_label_onlymine_help'] = 'Questions que vous avez créées.';
$string['filter_label_onlynew'] = 'Non répondues';
$string['filter_label_onlynew_help'] = 'Questions auxquelles vous n\'avez jamais répondu.';
$string['filter_label_question'] = 'Titre de la question';
$string['filter_label_question_creation_item'] = '{$a->creationtext} {$a->rowtext} {$a->inputtext}';
$string['filter_label_question_creation_item_inputtext'] = '{$a->inputtext} {$a->inputtype}';
$string['filter_label_questiontext'] = 'Contenu de la question';
$string['filter_label_rates'] = 'Notation';
$string['filter_label_show_mine'] = 'Mes questions';
$string['filter_label_tags'] = 'Tag';
$string['finish_button'] = 'Fin';
$string['image_placeholder'] = '[Image]';
$string['invalidcomment'] = 'invalidcomment';
$string['invalidemail'] = 'Cette adresse de courriel n\'est pas valide. Veuillez saisir une seule adresse de courriel.';
$string['lastattempt_right'] = '✓';
$string['lastattempt_right_label'] = 'Dernière tentative correcte';
$string['lastattempt_wrong'] = '✗';
$string['lastattempt_wrong_label'] = 'Dernière tentative incorrecte';
$string['latest_column_name'] = 'Dernières';
$string['manager_anonym_fullname'] = 'Gestionnaire anonyme';
$string['message'] = 'Message';
$string['messageprovider:commentadded'] = 'Notification d\'ajout de commentaire';
$string['messageprovider:commentdeleted'] = 'Notification de suppression de commentaire';
$string['messageprovider:minecommentdeleted'] = 'Notification de suppression de mon commentaire';
$string['migrate_already_done'] = 'Rien n\'a été fait car cette activité a déjà été migrée !';
$string['migrate_ask'] = 'La vitesse de StudentQuiz s\'est améliorée avec la version 3.2.1, mais cet ensemble de questions est toujours basé sur une version antérieure.
Les questions et les quiz seront chargés plus rapidement si vous exécutez cette migration accélérée. Vous bénéficierez d\'un chargement plus rapide ; rien d\'autre ne changera.';
$string['migrate_studentquiz'] = 'Migrer les questions de StudentQuiz avant la version 3.2.1 vers la version plus rapide avec des valeurs agrégées';
$string['migrate_studentquiz_short'] = 'Accélérer cette série de questions';
$string['migrated_successful'] = 'Cette activité a été correctement migrée !';
$string['mine_column_name'] = 'Moi';
$string['missingparam'] = 'Un paramètre requis est manquant ou erroné';
$string['moderator'] = 'Modérateur';
$string['modulename'] = 'StudentQuiz';
$string['modulename_help'] = 'L\'activité StudentQuiz permet aux étudiants d\'ajouter des questions pour l’ensemble des participants. Dans l\'aperçu de l’activité StudentQuiz, les élèves peuvent filtrer les questions. Ils peuvent également utiliser les questions filtrées avec l’ensemble des contributions pour s\'entraîner. L\'enseignant a la possibilité d\'anonymiser la colonne « Créée par ».<br><br>L\'activité StudentQuiz attribue aux étudiants des points pour les motiver à ajouter des questions et à s\'entraîner. Les points sont listés dans un tableau de classement.';
$string['modulenameplural'] = 'StudentQuizzes';
$string['more'] = 'Plus';
$string['myattempts_column_name'] = 'Mes tentatives';
$string['mydifficulty_column_name'] = 'Ma difficulté';
$string['mylastattempt_column_name'] = 'Ma dernière tentative';
$string['myrate_column_name'] = 'Mon classement';
$string['nav_export'] = 'Exporter';
$string['nav_import'] = 'Importer';
$string['needtoallowatleastoneqtype'] = 'Vous devez autoriser au moins un type de question';
$string['next_button'] = 'Suivant';
$string['no_comment'] = '-';
$string['no_comments'] = 'Pas de commentaires';
$string['no_difficulty_level'] = '-';
$string['no_myattempts'] = '-';
$string['no_mylastattempt'] = '-';
$string['no_mylastattempt_label'] = 'La question n\'est pas répondue';
$string['no_questions_add'] = 'Il n\'y a pas de question dans ce StudentQuiz. Vous pouvez librement en ajouter.';
$string['no_questions_filter'] = 'Aucune question ne correspond à vos critères. Réinitialisez le filtre pour voir toutes les questions.';
$string['no_questions_selected_message'] = 'Merci de sélectionner au moins une question pour démarrer le quiz.';
$string['no_rates'] = '-';
$string['no_tags'] = '-';
$string['nocommenthistoryexist'] = 'Il n\'y pas d\'historique pour ce commentaire.';
$string['not_approved'] = '✗';
$string['num_questions'] = '{$a} questions';
$string['number_column_name'] = 'Tentative';
$string['numberreply'] = '{$a} réponses';
$string['onlyrootcommentcanreply'] = 'Seul le premier niveau de commentaire peut faire l\'objet d\'une réponse';
$string['pagesize'] = 'Taille de la page :';
$string['please_enrole_message'] = 'Veuillez vous inscrire à ce cours pour voir vos progrès personnels';
$string['pluginadministration'] = 'Administration de StudentQuiz';
$string['pluginname'] = 'StudentQuiz';
$string['previous_button'] = 'Précédent';
$string['privacy:metadata:mod_studentquiz_comment_sort'] = 'Préférence de l\'utilisateur pour le type de filtre de commentaire.';
$string['privacy:metadata:studentquiz_attempt'] = 'Représente une tentative des utilisateurs de répondre à une série de questions.';
$string['privacy:metadata:studentquiz_attempt:categoryid'] = 'Identifiant de la catégorie.';
$string['privacy:metadata:studentquiz_attempt:questionusageid'] = 'Identifiant de l\'usage de la question.';
$string['privacy:metadata:studentquiz_attempt:studentquizid'] = 'Identifiant du StudentQuiz.';
$string['privacy:metadata:studentquiz_attempt:userid'] = 'Identifiant de l\'utilisateur.';
$string['privacy:metadata:studentquiz_comment'] = 'Enregistrer les commentaires des questions.';
$string['privacy:metadata:studentquiz_comment:comment'] = 'Commentaire de la question.';
$string['privacy:metadata:studentquiz_comment:created'] = 'Date et heure de création du commentaire.';
$string['privacy:metadata:studentquiz_comment:deleteuserid'] = 'Identifiant de l\'utilisateur qui a supprimé le commentaire';
$string['privacy:metadata:studentquiz_comment:edituserid'] = 'Identifiant de l\'utilisateur qui a édité le commentaire';
$string['privacy:metadata:studentquiz_comment:parentid'] = 'Identifiant du commentaire parent. 0 : commentaire de premier niveau.';
$string['privacy:metadata:studentquiz_comment:questionid'] = 'Identifiant de la question.';
$string['privacy:metadata:studentquiz_comment:status'] = 'Status du commentaire';
$string['privacy:metadata:studentquiz_comment:timemodified'] = 'Date de modification du commentaire';
$string['privacy:metadata:studentquiz_comment:userid'] = 'Identifiant de l\'utilisateur.';
$string['privacy:metadata:studentquiz_comment_history'] = 'Enregistrer l\'historique des commentaires';
$string['privacy:metadata:studentquiz_comment_history:commentid'] = 'ID du commentaire';
$string['privacy:metadata:studentquiz_comment_history:timemodified'] = 'Date de modification du commentaire';
$string['privacy:metadata:studentquiz_comment_history:userid'] = 'ID de l\'utilisateur qui a modifié le commentaire';
$string['privacy:metadata:studentquiz_progress'] = 'Enregistrer les informations sur la progression de l\'étudiant sur cette question.';
$string['privacy:metadata:studentquiz_progress:attempts'] = 'Nombre de tentatives de réponses à cette question.';
$string['privacy:metadata:studentquiz_progress:correctattempts'] = 'Nombre de réponses justes.';
$string['privacy:metadata:studentquiz_progress:lastanswercorrect'] = '0 : la dernière réponse était fausse ou indéfinie, 1 : la dernière réponse était correcte.';
$string['privacy:metadata:studentquiz_progress:questionid'] = 'Identifiant de la question.';
$string['privacy:metadata:studentquiz_progress:studentquizid'] = 'Identifiant du StudentQuiz.';
$string['privacy:metadata:studentquiz_progress:userid'] = 'Identifiant de l\'utilisateur.';
$string['privacy:metadata:studentquiz_rate'] = 'Enregistrer les notes des questions';
$string['privacy:metadata:studentquiz_rate:questionid'] = 'Identifiant de la question.';
$string['privacy:metadata:studentquiz_rate:rate'] = 'Note de la question.';
$string['privacy:metadata:studentquiz_rate:userid'] = 'Identifiant de l\'utilisateur.';
$string['progress_bar_caption'] = 'Votre progression dans cette activité StudentQuiz';
$string['questionsinuse'] = '(* Les questions marquées d\'un astérisque sont déjà utilisées dans certains quiz.)';
$string['ranking_block_title'] = 'Classement';
$string['ranking_block_title_anonymised'] = 'Classement (anonymisé)';
$string['rate_all_column_name'] = 'Classement de tous';
$string['rate_column_name'] = 'Évaluation';
$string['rate_error'] = 'Merci d\'évaluer';
$string['rate_help'] = 'Évaluer la question';
$string['rate_help_help'] = 'Évaluer la question.<br />1 étoile est très mauvais, et 5 étoiles est très bon';
$string['rate_multi_stars_desc'] = '{$a} étoiles sélectionnées';
$string['rate_one_star_desc'] = '1 étoile sélectionnée';
$string['rate_points'] = 'Points';
$string['rate_title'] = 'Note';
$string['ratingbar_title'] = 'Barre d\'évaluation';
$string['remove_comment'] = 'Supprimer';
$string['remove_comment_label'] = 'Supprimer le commentaire';
$string['replies'] = 'Réponses';
$string['reply'] = 'Réponse';
$string['replycomment'] = 'Répondre';
$string['report_comment_condition1'] = 'Contenu abusif';
$string['report_comment_condition2'] = 'Relève du harcèlement';
$string['report_comment_condition3'] = 'Contient des contenus obscènes tels que la pornographie';
$string['report_comment_condition4'] = 'Contenu diffamatoire ou calomnieux';
$string['report_comment_condition5'] = 'Le contenu ne respecte pas le droit d\'auteur';
$string['report_comment_condition6'] = 'Le contenu est contraire aux règles pour une autre raison';
$string['report_comment_condition_more'] = 'Autres informations (facultatif)';
$string['report_comment_emailappendix'] = 'Vous recevez ce courriel parce que votre adresse de courriel a été utilisée sur l\'activité StudentQuiz afin de signaler un commentaire inacceptable.';
$string['report_comment_emailpreface'] = 'Un commentaire a été signalé par {$a->fullname} ({$a->username},
{$a->email}).';
$string['report_comment_emailsubject'] = 'Commentaire signalé {$a->commentid}: {$a->coursename} {$a->studentquizname}';
$string['report_comment_feedback'] = 'Votre signalement a été envoyé avec succès. Un membre de l\'équipe va en prendre connaissance et en étudier le contenu.';
$string['report_comment_info'] = 'La fonction « Rapport » peut envoyer ce commentaire à un membre de l\'équipe qui en prendra connaissance et en étudiera le contenu. <strong>Veuillez utiliser cette fonction uniquement si vous pensez que le commentaire enfreint les
règles</strong>.';
$string['report_comment_invalid'] = 'Vous devez préciser la raison pour laquelle vous signalez ce commentaire.';
$string['report_comment_invalid_checkbox'] = 'Vous devez cocher au moins une des cases.';
$string['report_comment_link_text'] = 'Cliquez ici pour un aperçu';
$string['report_comment_not_available'] = 'La fonction de signalement d\'un commentaire n\'est pas disponible.';
$string['report_comment_pagename'] = 'Signaler un commentaire comme étant inacceptable';
$string['report_comment_reasons'] = 'Raisons du signalement du commentaire :';
$string['report_comment_reporter_detail'] = '{$a->fullname} ({$a->username} ; {$a->email} ; {$a->ip})';
$string['report_comment_reporter_info'] = '<strong>Détails de l\'utilisateur qui fait le signalement</strong> :';
$string['report_comment_submit'] = 'Envoyer le signalement';
$string['reportcomment'] = 'Signaler';
$string['reportcomment_title'] = 'Signaler un commentaire comme étant inacceptable';
$string['reportquiz_admin_title'] = 'Statistiques de l\'étudiant';
$string['reportquiz_stats_all_last_attempt_correct'] = 'Moyenne des dernières réponses correctes pour l\'ensemble des participants';
$string['reportquiz_stats_all_last_attempt_incorrect'] = 'Moyenne des dernières réponses incorrectes pour l\'ensemble des participants';
$string['reportquiz_stats_all_percentage_correct_answers'] = 'Pourcentage de réponses correctes pour l\'ensemble des participants';
$string['reportquiz_stats_all_percentage_correct_answers_help'] = 'Somme des réponses correctes / somme de toutes les réponses.';
$string['reportquiz_stats_all_progress'] = 'Progression moyenne de l\'ensemble des participants';
$string['reportquiz_stats_all_progress_help'] = 'Progression moyenne des participants basée sur l\'ensemble des participants';
$string['reportquiz_stats_all_question_attempts_correct'] = 'Moyenne des réponses correctes pour l\'ensemble des participants';
$string['reportquiz_stats_all_question_attempts_incorrect'] = 'Moyenne des réponses incorrectes pour l\'ensemble des participants';
$string['reportquiz_stats_all_questions_answered'] = 'Moyenne de toutes les réponses pour l\'ensemble des participants';
$string['reportquiz_stats_all_questions_answered_help'] = 'Nombre moyen de réponses données par l\'ensemble des participants';
$string['reportquiz_stats_all_questions_approved'] = 'Nombre de questions approuvées';
$string['reportquiz_stats_all_questions_approved_help'] = 'Les enseignants peuvent approuver les questions pour en vérifier l\'exactitude. C\'est le nombre de questions approuvées dans cette activité StudentQuiz.';
$string['reportquiz_stats_all_questions_created'] = 'Nombre de questions dans cette activité StudentQuiz';
$string['reportquiz_stats_all_questions_created_help'] = 'Nombre de questions créées par les participants';
$string['reportquiz_stats_all_rates_average'] = 'Évaluation moyenne de toutes les questions';
$string['reportquiz_stats_all_rates_average_help'] = 'La note de chaque question est la moyenne des étoiles qu\'elle a reçues par les participants.  Exemple : Les participants ont créé 4 questions. Si la question A a été notée 3 étoiles par ces derniers, la question B = 4 étoiles, la question C = 2 étoiles et la question D = 5 étoiles, alors la moyenne de toutes les questions est de 3,5.';
$string['reportquiz_stats_own_last_attempt_correct'] = 'Nombre de vos dernières réponses correctes';
$string['reportquiz_stats_own_last_attempt_incorrect'] = 'Nombre de vos dernières réponses incorrectes';
$string['reportquiz_stats_own_percentage_correct_answers'] = 'Pourcentage de vos réponses correctes';
$string['reportquiz_stats_own_percentage_correct_answers_help'] = 'Pourcentage de toutes vos réponses correctes parmi l\'ensemble de vos réponses données dans cette activité StudentQuiz. Les réponses partiellement correctes comptent comme des mauvaises réponses.';
$string['reportquiz_stats_own_progress'] = 'Progression personnelle';
$string['reportquiz_stats_own_progress_help'] = 'Pourcentage de vos dernières réponses correctes parmi l\'ensemble des questions de cette activité StudentQuiz. Les réponses partiellement correctes comptent comme des mauvaises réponses.';
$string['reportquiz_stats_own_question_attempts_correct'] = 'Total de vos réponses correctes';
$string['reportquiz_stats_own_question_attempts_incorrect'] = 'Total de vos réponses incorrectes';
$string['reportquiz_stats_own_questions_answered'] = 'Total de vos réponses';
$string['reportquiz_stats_own_questions_answered_help'] = 'Nombre de toutes les réponses données dans cette activité StudentQuiz.';
$string['reportquiz_stats_own_questions_approved'] = 'Nombre de vos questions approuvées';
$string['reportquiz_stats_own_questions_approved_help'] = 'Les enseignants peuvent approuver les questions pour en vérifier l\'exactitude. Il s\'agit du nombre de questions approuvées dans le cadre de cette activité StudentQuiz.';
$string['reportquiz_stats_own_questions_created'] = 'Nombre de questions auxquelles vous avez contribué';
$string['reportquiz_stats_own_questions_created_help'] = 'Nombre de questions auxquelles vous avez contribué dans cette acctivité StudentQuiz';
$string['reportquiz_stats_own_rates_average'] = 'Vous avez reçu la note moyenne de';
$string['reportquiz_stats_own_rates_average_help'] = 'La note de chaque question est la moyenne des étoiles qu\'elle a reçues des participants.  Exemple : Vous avez créé les questions A et B. Si votre question A a été notée 3 étoiles par les participants et votre question B 4 étoiles, alors la moyenne des notes que vous avez reçues est de 3,5.';
$string['reportquiz_stats_title'] = 'Statistiques';
$string['reportquiz_total_attempt'] = 'Nombre de fois que l\'utilisateur a lancé le quiz';
$string['reportquiz_total_obtained_marks'] = 'Note totale';
$string['reportquiz_total_questions_answered'] = 'Total de réponses';
$string['reportquiz_total_questions_right'] = 'Total de réponses correctes';
$string['reportquiz_total_questions_wrong'] = 'Réponses fausses';
$string['reportquiz_total_users'] = 'Nombre de participants';
$string['reportrank_table_column_approvedquestions'] = 'Points pour les questions approuvées';
$string['reportrank_table_column_communitystatus'] = 'Statistiques de l\'ensemble';
$string['reportrank_table_column_correctanswers'] = 'Réponses corrects';
$string['reportrank_table_column_countquestions'] = 'Points pour les questions créées';
$string['reportrank_table_column_description'] = 'Description';
$string['reportrank_table_column_factor'] = 'Point';
$string['reportrank_table_column_fullname'] = 'Nom complet';
$string['reportrank_table_column_incorrectanswers'] = 'Réponses incorrectes';
$string['reportrank_table_column_lastcorrectanswers'] = 'Points pour les derniers essais corrects';
$string['reportrank_table_column_lastincorrectanswers'] = 'Points pour les derniers essais incorrects';
$string['reportrank_table_column_points'] = 'Points';
$string['reportrank_table_column_progress'] = 'Progression personnelle';
$string['reportrank_table_column_quantifier_name'] = 'Nom';
$string['reportrank_table_column_rank'] = 'Rang';
$string['reportrank_table_column_summeanrates'] = 'Points pour les étoiles reçues';
$string['reportrank_table_column_total_points'] = 'Total des points';
$string['reportrank_table_column_value'] = 'Valeur';
$string['reportrank_table_column_yourstatus'] = 'Statistiques personnelles';
$string['reportrank_table_quantifier_caption'] = 'Comment vos points sont calculés';
$string['reportrank_table_title'] = 'Classement étudiants - Top 10';
$string['reportrank_table_title_for_manager'] = 'Classement de l\'étudiant';
$string['reportrank_title'] = 'Classement';
$string['review_button'] = 'Bilan';
$string['savechanges'] = 'Enregistrer les changements';
$string['scheduled_task_send_digest_notification'] = 'Envoi d\'un récapitulatif de notifications';
$string['setting_question_publishing'] = 'Publication des questions';
$string['setting_question_publishing_automatic'] = 'Publier automatiquement les nouvelles questions';
$string['setting_question_publishing_help'] = 'Les questions publiées apparaissent dans la banque de questions pour que les autres étudiants puissent les jouer. Vous pouvez soit autoriser la publication automatique de toutes les questions, soit demander une approbation avant de les publier. <br>Notez que ce paramètre ne peut pas être modifié une fois qu\'une question a été créée dans le StudentQuiz.';
$string['setting_question_publishing_require_approval'] = 'Exiger l\'approbation avant de publier';
$string['settings_allowallqtypes'] = 'Autoriser tous les types de questions';
$string['settings_allowedqtypes'] = 'Types de questions autorisés';
$string['settings_allowedqtypes_help'] = 'Limiter les types de questions autorisés à ceux sélectionnés';
$string['settings_anonymous'] = 'Anonymiser les étudiants';
$string['settings_anonymous_help'] = 'Les étudiants ne pourront pas voir le nom des autres étudiants.';
$string['settings_anonymous_label'] = 'Rendre les étudiants anonymes';
$string['settings_approvedquantifier'] = 'Points par question approuvée';
$string['settings_approvedquantifier_help'] = 'Points pour chaque question approuvée';
$string['settings_approvedquantifier_label'] = 'Points pour chaque question approuvée';
$string['settings_availability_close_answering_from'] = 'Fermer la possibilité de répondre aux questions à partir du';
$string['settings_availability_close_submission_from'] = 'Fermer la possibilité de proposer des questions à partir du';
$string['settings_availability_open_answering_from'] = 'Ouvrir la possibilité de répondre aux questions à partir du';
$string['settings_availability_open_submission_from'] = 'Ouvrir la possibilité de proposer des questions à partir du';
$string['settings_commentdeletionperiod'] = 'Période de modification/suppression des commentaires (minutes)';
$string['settings_commentdeletionperiod_help'] = 'Définissez la durée (en minutes) pendant laquelle le bouton Modifier/Supprimer sera disponible pour les étudiants pour modifier/supprimer leur propre commentaire (ou la réponse à un commentaire) une fois qu\'il est publié. Des valeurs comprises entre 0 et 60 minutes sont autorisées. Si la période de suppression est fixée à 0, les étudiants ne peuvent pas modifier/supprimer leurs propres commentaires. Notez que les enseignants et les administrateurs pourront toujours modifier/supprimer les commentaires des étudiants, et voir également le contenu de tout commentaire supprimé.';
$string['settings_email_digest_first_day'] = 'Premier jour de la semaine ?';
$string['settings_email_digest_first_day_help'] = 'Si vous avez sélectionné un récapitulatif hebdomadaire, cette option vous permet de définir le premier jour (à partir de 00h:00m:00 de ce jour) de la période de sept jours. Ceci est particulièrement utile si l\'activité commence à mi-semaine, par exemple.';
$string['settings_email_digest_type'] = 'Type de récapitulatif par courriel';
$string['settings_email_digest_type_daily_digest'] = 'Récapitulatif quotidien';
$string['settings_email_digest_type_help'] = 'StudentQuiz a diverses notifications que vous pouvez activer, comme informer l\'auteur de la question d\'un changement d\'état (par exemple, un enseignant a approuvé l\'une de ses questions). Vous pouvez utiliser ce paramètre pour spécifier la fréquence de ces notifications. Les courriels de résumé ne seront envoyés que lorsqu\'il y aura au moins une notification dans la période définie';
$string['settings_email_digest_type_no_digest'] = 'Aucun récapitulatif (un courriel par action)';
$string['settings_email_digest_type_weekly_digest'] = 'Récapitulatif hebdomadaire';
$string['settings_excluderoles'] = 'Exclure les rôles dans le classement';
$string['settings_excluderoles_help'] = 'Les rôles sélectionnés sont cachés dans les classements, les utilisateurs inscrits dans ces rôles peuvent toujours participer normalement à l\'activité';
$string['settings_excluderoles_label'] = 'Rôles dans le classement à exclure';
$string['settings_forcecommenting'] = 'Obliger à commenter';
$string['settings_forcecommenting_help'] = 'Obliger la personne qui a répondu à une question à la commenter';
$string['settings_forcerating'] = 'Obliger la notation';
$string['settings_forcerating_help'] = 'Obliger la personne qui a répondu à une question à la noter';
$string['settings_lastcorrectanswerquantifier'] = 'Détail pour les dernières réponses correctes';
$string['settings_lastcorrectanswerquantifier_help'] = 'Points pour chaque bonne réponse à la dernière tentative';
$string['settings_lastcorrectanswerquantifier_label'] = 'Points pour les dernières réponses correctes';
$string['settings_lastincorrectanswerquantifier'] = 'Détail pour les dernières mauvaises réponses';
$string['settings_lastincorrectanswerquantifier_help'] = 'Points pour chaque réponse fausse ou partiellement fausse lors de la dernière tentative';
$string['settings_lastincorrectanswerquantifier_label'] = 'Points pour les dernières mauvaises réponses';
$string['settings_notification'] = 'Paramètres de notification';
$string['settings_questionquantifier'] = 'Détail pour les questions créées';
$string['settings_questionquantifier_help'] = 'Points pour chaque question créée';
$string['settings_questionquantifier_label'] = 'Points pour chaque question créée';
$string['settings_ratequantifier'] = 'Détail de la notation';
$string['settings_ratequantifier_help'] = 'Points pour chaque étoile reçue.';
$string['settings_ratequantifier_label'] = 'Multiplicateur de la moyenne des étoiles reçues pour une question';
$string['settings_removeqbehavior'] = 'Supprimer le plugin de comportement des questions de StudentQuiz';
$string['settings_removeqbehavior_help'] = 'Cette information ne doit apparaître qu\'une seule fois lors de la mise à jour. Nous vous informons que nous avons détecté que notre plugin de comportement des questions StudentQuiz est installé. Ce plugin n\'est plus nécessaire et nous essayons donc de le supprimer automatiquement. Si vous voyez toujours ce paramètre, veuillez désinstaller manuellement le plugin de comportement des questions de StudentQuiz <a href="{$a}">ici</a>.';
$string['settings_removeqbehavior_label'] = 'Supprimer le plugin de comportement des questions de StudentQuiz';
$string['settings_reportingemail'] = 'Adresse de courriel pour signaler des commentaires offensants';
$string['settings_reportingemail_help'] = 'Si cette adresse de courriel est fournie, un lien vers le rapport apparaît à côté de chaque commentaire. Les utilisateurs peuvent cliquer sur le lien pour signaler des commentaires offensants. Les informations seront envoyées à cette adresse.

Si elle est laissée vide, la fonction de rapport ne sera pas affichée (sauf si un site l\'adresse de déclaration a été fournie).

Plusieurs adresses de courriel peuvent être ajoutées à condition qu\'elles soient séparées par un point-virgule.';
$string['settings_section_description_default'] = 'Ces valeurs définissent les valeurs par défaut lors de la création d\'une nouvelle activité StudentQuiz';
$string['settings_section_header_comment_rating'] = 'Paramètres de commentaire et de notation';
$string['settings_section_header_question'] = 'Paramètres des questions';
$string['settings_section_header_ranking'] = 'Paramètres de classement';
$string['show_less'] = 'Afficher moins';
$string['show_more'] = 'Afficher plus';
$string['slot_of_slot'] = 'Question {$a->slot} sur {$a->slots} dans cet ensemble';
$string['start_quiz_button'] = 'Démarrer le quiz';
$string['state_approved'] = 'Approuvée';
$string['state_change_tooltip_approved'] = 'La question est approuvée. Cliquez ici pour modifier l\'état de cette question';
$string['state_change_tooltip_changed'] = 'La question est modifiée. Cliquez ici pour modifier l\'état de cette question';
$string['state_change_tooltip_disapproved'] = 'La question est désapprouvée. Cliquez ici pour changer l\'état de cette question';
$string['state_change_tooltip_new'] = 'La question est nouvelle. Cliquez ici pour changer l\'état de cette question';
$string['state_changed'] = 'Modifiée';
$string['state_column_name'] = 'État';
$string['state_column_name_veryshort'] = 'E';
$string['state_disapproved'] = 'Désapprouvée';
$string['state_new'] = 'Nouveau';
$string['state_toggle'] = 'Changer d\'état';
$string['statistic_block_approvals'] = 'Questions approuvées';
$string['statistic_block_created'] = 'Questions créées';
$string['statistic_block_disapprovals'] = 'Questions désapprouvées';
$string['statistic_block_new_changed'] = 'Questions nouvelles/modifiées';
$string['statistic_block_progress_available'] = 'Questions disponibles';
$string['statistic_block_progress_last_attempt_correct'] = 'Dernier essai correct';
$string['statistic_block_progress_last_attempt_incorrect'] = 'Dernier essai incorrect';
$string['statistic_block_progress_never'] = 'Questions jamais répondues';
$string['statistic_block_title'] = 'Ma progression';
$string['studentquiz'] = 'studentquiz';
$string['studentquiz:addinstance'] = 'Ajouter une nouvelle instance pour l\'activité StudentQuiz';
$string['studentquiz:emailnotifyapproved'] = 'Notification d\'approbation de question';
$string['studentquiz:emailnotifychanged'] = 'Notification de modification de question';
$string['studentquiz:emailnotifycommentadded'] = 'Notification d\'ajout de commentaire';
$string['studentquiz:emailnotifycommentdeleted'] = 'Notification de suppression de commentaire';
$string['studentquiz:manage'] = 'Questions modérées sur l\'activité StudentQuiz';
$string['studentquiz:previewothers'] = 'Prévisualisez les questions des autres sur l\'activité StudentQuiz';
$string['studentquiz:submit'] = 'Proposer les questions de l\'activité StudentQuiz';
$string['studentquiz:unhideanonymous'] = 'Possibilité de voir les vrais noms même lorsque l\'anonymat est activé';
$string['studentquiz:view'] = 'Voir les questions de l\'activité StudentQuiz';
$string['studentquizname'] = 'Nom du de l\'activité StudentQuiz';
$string['studentquizname_help'] = 'Le nom de l\'activité StudentQuiz';
$string['submissionendbeforestart'] = 'La date limite de soumission ne peut être précisée avant la date d\'ouverture des soumissions';
$string['tags'] = 'Tags';
$string['unapprove'] = 'Retirer l\'approbation';
