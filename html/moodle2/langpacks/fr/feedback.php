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
 * Strings for component 'feedback', language 'fr', branch 'MOODLE_36_STABLE'
 *
 * @package   feedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Ajouter une question';
$string['add_pagebreak'] = 'Ajouter un saut de page';
$string['adjustment'] = 'Disposition des options';
$string['after_submit'] = 'Après l\'envoi';
$string['allowfullanonymous'] = 'Permettre l\'anonymat complet';
$string['analysis'] = 'Analyse';
$string['anonymous'] = 'Anonyme';
$string['anonymous_edit'] = 'Enregistrer les noms d\'utilisateur';
$string['anonymous_entries'] = 'Réponses anonymes ({$a})';
$string['anonymous_user'] = 'Utilisateur anonyme';
$string['answerquestions'] = 'Répondre aux questions';
$string['append_new_items'] = 'Ajouter de nouveaux éléments';
$string['autonumbering'] = 'Numéroter automatiquement les questions';
$string['autonumbering_help'] = 'Active ou désactive les numéros automatiques des questions';
$string['average'] = 'Moyenne';
$string['bold'] = 'Gras';
$string['calendarend'] = '{$a} se termine';
$string['calendarstart'] = '{$a} s\'ouvre';
$string['cannotaccess'] = 'Il n\'est possible d\'accéder à ce feedback que depuis un cours';
$string['cannotsavetempl'] = 'L\'enregistrement des modèles n\'est pas autorisé';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'Captcha n\'a pas été configuré.';
$string['check'] = 'Choix multiple - plusieurs réponses';
$string['checkbox'] = 'Choix multiple - plusieurs réponses sont permises (cases à cocher)';
$string['check_values'] = 'Réponses possibles';
$string['choosefile'] = 'Sélectionner un fichier';
$string['chosen_feedback_response'] = 'Réponse choisie pour le feedback';
$string['closebeforeopen'] = 'La date de fin indiquée est antérieure à la date de début.';
$string['completed'] = 'Terminé';
$string['completed_feedbacks'] = 'Réponses envoyées';
$string['completedon'] = 'Terminé le {$a}';
$string['complete_the_form'] = 'Répondre aux questions';
$string['completionsubmit'] = 'Afficher comme terminé quand l\'utilisateur a envoyé le feedback';
$string['configallowfullanonymous'] = 'Si ce réglage est activé, les activités feedback sur la page d\'accueil pourront être effectuées par les utilisateurs sans nécessiter d\'authentification.';
$string['confirmdeleteentry'] = 'Voulez-vous vraiment supprimer cette saisie ?';
$string['confirmdeleteitem'] = 'Voulez-vous vraiment supprimer cet élément ?';
$string['confirmdeletetemplate'] = 'Voulez-vous vraiment supprimer ce modèle ?';
$string['confirmusetemplate'] = 'Voulez-vous vraiment utiliser ce modèle ?';
$string['continue_the_form'] = 'Continuer à répondre aux questions';
$string['count_of_nums'] = 'Nombre des numéros';
$string['courseid'] = 'Identifiant de cours';
$string['creating_templates'] = 'Enregistrer ces questions en tant que nouveau modèle';
$string['delete_entry'] = 'Supprimer entrée';
$string['delete_item'] = 'Supprimer question';
$string['delete_old_items'] = 'Supprimer anciens éléments';
$string['delete_pagebreak'] = 'Supprimer le saut de page';
$string['delete_template'] = 'Supprimer modèle';
$string['delete_templates'] = 'Supprimer modèle...';
$string['depending'] = 'Dépendances';
$string['depending_help'] = 'Il est possible d\'afficher un élément en fonction de la valeur d\'un autre élément.<br />
<strong>Voici un exemple.</strong><br />
<ul>
<li>D\'abord, créer un élément dont la valeur va déterminer l\'affichage d\'autres éléments.</li>
<li>Ajouter ensuite un saut de page.</li>
<li>Pour terminer, ajouter les éléments dont l\'affichage dépendra de la valeur du premier élément créé. Sélectionner ce dernier élément dans la liste intitulée « Éléments de dépendance » et indiquer la valeur requise dans le champ « Valeur de la dépendance ».</li>
</ul>
<strong>La structure des éléments ressemblera à ceci :</strong>
<ol>
<li>Élément Q : Possédez-vous une voiture ? R : oui/non</li>
<li>Saut de page</li>
<li>Élément Q : De quelle couleur est votre voiture ?<br /> (cet élément dépend de l\'élément 1 avec la valeur = oui)</li>
<li>Élément Q : Pourquoi n\'avez-vous pas de voiture ?<br /> (cet élément dépend de l\'élément 1 avec la valeur = non)</li>
<li>... autres éléments</li>
</ol>';
$string['dependitem'] = 'Élément de dépendance';
$string['dependvalue'] = 'Valeur de la dépendance';
$string['description'] = 'Description';
$string['do_not_analyse_empty_submits'] = 'Ne pas analyser les remises vides';
$string['downloadresponseas'] = 'Télécharger les réponses sous :';
$string['dropdown'] = 'Choix multiple - une seule réponse possible (menu déroulant)';
$string['dropdownlist'] = 'Choix multiple - une seule réponse (menu déroulant)';
$string['dropdownrated'] = 'Menu déroulant (valué)';
$string['dropdown_values'] = 'Réponses';
$string['drop_feedback'] = 'Retirer de ce cours';
$string['edit_item'] = 'Modifier question';
$string['edit_items'] = 'Modifier les questions';
$string['email_notification'] = 'Activer la notification des remises';
$string['email_notification_help'] = 'Si ce réglage est activé, les enseignants recevront par courriel notifications des remises des feedbacks.';
$string['emailteachermail'] = '{$a->username} a terminé l\'activité feedback « {$a->feedback} »

Vous pouvez la voir ici :

{$a->url}';
$string['emailteachermailhtml'] = '<p>{$a->username} a effectué l\'activité feedback « <i>{$a->feedback}</i> ».</p>
<p>Vous pouvez la consulter <a href="{$a->url}">sur le site</a>.</p>';
$string['entries_saved'] = 'Vos réponses ont été enregistrées. Merci.';
$string['eventresponsedeleted'] = 'Réponse supprimée';
$string['eventresponsesubmitted'] = 'Réponse remise';
$string['export_questions'] = 'Exporter les questions';
$string['export_to_excel'] = 'Exporter vers Excel';
$string['feedback:addinstance'] = 'Ajouter un feedback';
$string['feedbackclose'] = 'Permettre les réponses jusqu\'au';
$string['feedback:complete'] = 'Terminer un feedback';
$string['feedbackcompleted'] = '{$a->username} a terminé {$a->feedbackname}';
$string['feedback:createprivatetemplate'] = 'Créer un modèle privé';
$string['feedback:createpublictemplate'] = 'Créer un modèle public';
$string['feedback:deletesubmissions'] = 'Supprimer les envois terminés';
$string['feedback:deletetemplate'] = 'Supprimer modèle';
$string['feedback:edititems'] = 'Modifier des éléments';
$string['feedback_is_not_for_anonymous'] = 'Les utilisateurs anonymes ne peuvent pas utiliser de feedback';
$string['feedback_is_not_open'] = 'Le feedback n\'est pas ouvert';
$string['feedback:mapcourse'] = 'Associer des cours aux feedbacks globaux';
$string['feedbackopen'] = 'Permettre les réponses dès le';
$string['feedback:receivemail'] = 'Recevoir les notifications par courriel';
$string['feedback:view'] = 'Accéder à une activité feedback';
$string['feedback:viewanalysepage'] = 'Accéder à la page d\'analyse après la remise';
$string['feedback:viewreports'] = 'Accéder aux rapports';
$string['file'] = 'Fichier';
$string['filter_by_course'] = 'Filtrer par cours';
$string['handling_error'] = 'Une erreur est survenue lors du traitement d\'une action du module feedback';
$string['hide_no_select_option'] = 'Cacher l\'option « Sans réponse »';
$string['horizontal'] = 'Horizontal';
$string['importfromthisfile'] = 'Importer depuis ce fichier';
$string['import_questions'] = 'Importer des questions';
$string['import_successfully'] = 'Importation réussie';
$string['indicator:cognitivedepth'] = 'Feedback : aspect cognitif';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l\'étudiant dans une activité Feedback.';
$string['indicator:socialbreadth'] = 'Feedback : aspect social';
$string['indicator:socialbreadth_help'] = 'Cet indicateur se base sur l\'interaction sociale atteinte par l\'étudiant dans une activité Feedback.';
$string['info'] = 'Information';
$string['infotype'] = 'Type d\'information';
$string['insufficient_responses'] = 'Nombre insuffisant de réponses';
$string['insufficient_responses_for_this_group'] = 'Il n\'y a pas assez de réponses pour ce groupe';
$string['insufficient_responses_help'] = 'Pour que ce feedback soit anonyme, il doit y avoir au moins 2 réponses.';
$string['item_label'] = 'Étiquette';
$string['item_name'] = 'Question';
$string['label'] = 'Étiquette';
$string['labelcontents'] = 'Contenu';
$string['mapcourse'] = 'Associer les feedbacks aux cours';
$string['mapcourse_help'] = 'Par défaut, les formulaires de feedback créé sur la page d\'accueil sont disponibles sur tout le site et apparaissent dans tous les cours qui utilisent le bloc feedback. Vous pouvez imposer l\'affichage du formulaire de feedback en créant un bloc fixe ou limiter les cours dans lesquels un formulaire de feedback est affiché en associant un feedback à un ou plusieurs cours.';
$string['mapcourseinfo'] = 'Ce feedback global est disponible pour tous les cours, par l\'intermédiaire du bloc feedback. Vous pouvez cependant limiter les cours où il peut apparaître en les associant explicitement. Rechercher le cours et associez-le à ce feedback.';
$string['mapcoursenone'] = 'Aucun cours associé. Le feedback est disponible pour tous les cours';
$string['mapcourses'] = 'Associer le feedback aux cours';
$string['mappedcourses'] = 'Cours associés';
$string['mappingchanged'] = 'La correspondance de cours a été modifiée';
$string['maximal'] = 'Maximum';
$string['messageprovider:message'] = 'Rappel de feedback';
$string['messageprovider:submission'] = 'Notification de feedback';
$string['minimal'] = 'Minimum';
$string['mode'] = 'Mode';
$string['modulename'] = 'Feedback';
$string['modulename_help'] = 'Le module d\'activité feedback permet à l\'enseignant de créer un questionnaire d\'enquête personnalisé pour collecter des informations de la part des participants au moyen de divers types de questions, notamment à choix multiple ou à réponses courtes.

Si désiré, les réponses peuvent être anonymes et les résultats affichés à tous les participants ou aux enseignants seulement. Une activité feedback affichée sur la page d\'accueil du site peut également être remplie par des utilisateurs non connectés.

Les activités feedback peuvent être utilisées pour :

* l\'évaluation des cours, afin d\'améliorer les contenus pour des participants ultérieurs
* permettre aux participants de s\'inscrire à des modules de cours, des manifestations, etc.
* des enquêtes anonymes sur les choix de cours, les règlements d\'écoles, etc.
* des enquêtes anti-harcèlement dans lesquelles les participants annoncent anonymement des incidents';
$string['modulenameplural'] = 'Feedbacks';
$string['move_item'] = 'Déplacer cette question';
$string['multichoice'] = 'Choix multiple';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'Choix multiple (évalué)';
$string['multichoicetype'] = 'Type de choix multiple';
$string['multichoice_values'] = 'Valeurs du choix multiple';
$string['multiplesubmit'] = 'Permettre plusieurs remises';
$string['multiplesubmit_help'] = 'Si ce réglage est activé pour les questionnaires anonymes, les utilisateurs peuvent remplir un feedback indéfiniment.';
$string['name'] = 'Nom';
$string['name_required'] = 'Nom requis';
$string['next_page'] = 'Page suivante';
$string['no_handler'] = 'Aucun action n\'existe pour';
$string['no_itemlabel'] = 'Aucune étiquette';
$string['no_itemname'] = 'Pas de nom d\'élément';
$string['no_items_available_yet'] = 'Aucune question n\'a encore été mise en place';
$string['non_anonymous'] = 'Le nom du participant sera enregistré et affiché avec ses réponses';
$string['non_anonymous_entries'] = 'Réponses non anonymes ({$a})';
$string['non_respondents_students'] = 'Étudiants sans réponse ({$a})';
$string['not_completed_yet'] = 'Pas encore terminé';
$string['no_templates_available_yet'] = 'Aucun modèle disponible';
$string['not_selected'] = 'Sans réponse';
$string['not_started'] = 'Pas commencé';
$string['numberoutofrange'] = 'Nombre en dehors de l\'intervalle permis';
$string['numeric'] = 'Réponse numérique';
$string['numeric_range_from'] = 'Intervalle de';
$string['numeric_range_to'] = 'Intervalle jusqu\'à';
$string['of'] = 'sur';
$string['oldvaluespreserved'] = 'Toutes les anciennes questions et les valeurs attribuées seront conservées';
$string['oldvalueswillbedeleted'] = 'Les questions en cours et toutes les réponses seront supprimées.';
$string['only_one_captcha_allowed'] = 'Un seul captcha est autorisé par feedback';
$string['openafterclose'] = 'Vous avez indiqué une date d\'ouverture postérieure à la date de fermeture.';
$string['overview'] = 'Vue d\'ensemble';
$string['page'] = 'Page';
$string['page_after_submit'] = 'Message de fin';
$string['pagebreak'] = 'Saut de page';
$string['page-mod-feedback-x'] = 'Toute page du module feedback';
$string['pluginadministration'] = 'Administration du feedback';
$string['pluginname'] = 'Feedback';
$string['position'] = 'Position';
$string['previous_page'] = 'Page précédente';
$string['privacy:metadata:completed'] = 'Un enregistrement des réponses du feedback';
$string['privacy:metadata:completed:anonymousresponse'] = 'Si la réponse doit être traitée de façon anonyme.';
$string['privacy:metadata:completed:timemodified'] = 'La date et l\'heure de la modification de la réponse.';
$string['privacy:metadata:completedtmp'] = 'Un enregistrement des réponses qui sont encore en cours.';
$string['privacy:metadata:completed:userid'] = 'L\'identifiant de l\'utilisateur qui a terminé l\'activité feedback.';
$string['privacy:metadata:value'] = 'Un enregistrement de la réponse à une question.';
$string['privacy:metadata:valuetmp'] = 'Un enregistrement de la réponse à une question dans une réponse de feedback en cours.';
$string['privacy:metadata:value:value'] = 'La réponse choisie.';
$string['public'] = 'Public';
$string['question'] = 'Question';
$string['questionandsubmission'] = 'Réglages de questions et d\'envoi';
$string['questions'] = 'Questions';
$string['questionslimited'] = 'Affichage des {$a} premières questions. Affichez les réponses individuelles ou téléchargez les données pour tout afficher.';
$string['radio'] = 'Choix multiple - une réponse';
$string['radio_values'] = 'Réponses';
$string['ready_feedbacks'] = 'Préparer les feedbacks';
$string['required'] = 'Requis';
$string['resetting_data'] = 'Réinitialiser les réponses du feedback';
$string['resetting_feedbacks'] = 'Réinitialisation des feedbacks';
$string['response_nr'] = 'Réponse No';
$string['responses'] = 'Réponses';
$string['responsetime'] = 'Heure de réponse';
$string['save_as_new_item'] = 'Enregistrer comme nouvelle question';
$string['save_as_new_template'] = 'Enregistrer comme modèle';
$string['save_entries'] = 'Remettre vos réponses';
$string['save_item'] = 'Enregistrer question';
$string['saving_failed'] = 'Échec de l\'enregistrement';
$string['search:activity'] = 'Feedback – information sur l\'activité';
$string['search_course'] = 'Rechercher cours';
$string['searchcourses'] = 'Rechercher les cours';
$string['searchcourses_help'] = 'Rechercher le code ou le nom du(des) cours que vous voulez associer à ce feedback';
$string['selected_dump'] = 'Les index sélectionnés de la variable $SESSION sont indiqués ci-dessous :';
$string['send'] = 'Envoyer';
$string['send_message'] = 'Envoyer message';
$string['show_all'] = 'Tout afficher';
$string['show_analysepage_after_submit'] = 'Afficher la page d\'analyse';
$string['show_entries'] = 'Afficher les réponses';
$string['show_entry'] = 'Afficher la réponse';
$string['show_nonrespondents'] = 'Afficher les utilisateurs sans réponse';
$string['site_after_submit'] = 'Site après remise';
$string['sort_by_course'] = 'Trier par cours';
$string['started'] = 'Commencé';
$string['startedon'] = 'Commencé le {$a}';
$string['subject'] = 'Sujet';
$string['switch_item_to_not_required'] = 'Définir comme non requis';
$string['switch_item_to_required'] = 'Définir comme requis';
$string['template'] = 'Modèle';
$string['template_deleted'] = 'Modèle supprimé';
$string['templates'] = 'Modèles';
$string['template_saved'] = 'Modèle enregistré';
$string['textarea'] = 'Réponse longue';
$string['textarea_height'] = 'Nombre de lignes';
$string['textarea_width'] = 'Largeur';
$string['textfield'] = 'Réponse courte';
$string['textfield_maxlength'] = 'Nombre maximum de caractères acceptés';
$string['textfield_size'] = 'Largeur du champ';
$string['there_are_no_settings_for_recaptcha'] = 'Il n\'y a pas de réglage pour le captcha';
$string['this_feedback_is_already_submitted'] = 'Vous avez déjà effectué cette activité.';
$string['typemissing'] = 'Valeur « type » manquante';
$string['update_item'] = 'Enregistrer les modifications de la question';
$string['url_for_continue'] = 'URL vers activité suivante';
$string['url_for_continue_help'] = 'Une fois le feedback envoyé, un bouton continuer est afficher qui envoie vers la page du cours. Vous pouvez indiquer ici optionnellement l\'URL de l\'activité à effectuer après le feedback.';
$string['use_one_line_for_each_value'] = 'Utilisez une ligne pour chaque réponse !';
$string['use_this_template'] = 'Utiliser avec ce modèle';
$string['using_templates'] = 'Utiliser un modèle';
$string['vertical'] = 'Vertical';
