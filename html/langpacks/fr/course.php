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
 * Strings for component 'course', language 'fr', version '4.1'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'Pied de page du sélecteur d’activités';
$string['activitychooseractivefooter_desc'] = 'Le sélecteur d’activités prend en charge des plugins qui ajoutent des éléments à son pied de page';
$string['activitychoosercategory'] = 'Sélecteur d’activité';
$string['activitychooserhidefooter'] = 'Pas de pied de page';
$string['activitychooserrecommendations'] = 'Activités recommandées';
$string['activitychoosersettings'] = 'Réglages du sélecteur d’activités';
$string['activitychoosertabmode'] = 'Onglets du sélecteur d’activités';
$string['activitychoosertabmode_desc'] = 'Le sélecteur d’activité permet à l’enseignant de choisir facilement les activités et ressources à ajouter à leur cours. Ce réglage détermine les onglets à y afficher. L’onglet « Favoris » n’est affiché que si l’utilisateur a marqué une ou plusieurs activités comme favorites et l’onglet « Recommandés » n’est affiché que si l’administrateur du site a défini certaines activités comme recommandées.';
$string['activitychoosertabmodeone'] = 'Favoris, Tout, Activités, Ressources, Recommandés';
$string['activitychoosertabmodethree'] = 'Favoris, Activités, Ressources, Recommandés';
$string['activitychoosertabmodetwo'] = 'Favoris, Tout, Recommandés';
$string['activitydate:closed'] = 'Terminé :';
$string['activitydate:closes'] = 'Se termine :';
$string['activitydate:opened'] = 'Ouvert :';
$string['activitydate:opens'] = 'S’ouvre :';
$string['aria:coursecategory'] = 'Catégorie de cours';
$string['aria:courseimage'] = 'Image du cours';
$string['aria:coursename'] = 'Nom du cours';
$string['aria:courseshortname'] = 'Nom abrégé du cours';
$string['aria:defaulttab'] = 'Activités par défaut';
$string['aria:favourite'] = 'Le cours est marqué comme favori';
$string['aria:favouritestab'] = 'Activités favorites';
$string['aria:modulefavourite'] = 'Marquer l’activité {$a} comme favorite';
$string['aria:recommendedtab'] = 'Les activités recommandées';
$string['browsecourseadminindex'] = 'Parcourir l’administration du cours avec ce menu.';
$string['browsesettingindex'] = 'Parcourir les réglages avec ce menu.';
$string['completion_automatic:done'] = 'Terminé :';
$string['completion_automatic:failed'] = 'Échec :';
$string['completion_automatic:todo'] = 'À faire :';
$string['completion_manual:aria:done'] = '{$a} est marqué comme terminé. Cliquer pour annuler.';
$string['completion_manual:aria:markdone'] = 'Marquer {$a} comme terminé';
$string['completion_manual:done'] = 'Terminé';
$string['completion_manual:markdone'] = 'Marquer comme terminé';
$string['completion_setby:auto:done'] = 'Terminé : {$a->condition} (fixée par {$a->setby})';
$string['completion_setby:auto:todo'] = 'À faire : {$a->condition} (fixée par {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname} est marqué comme terminé par {$a->setby}. Cliquer pour annuler.';
$string['completion_setby:manual:markdone'] = '{$a->activityname} est marqué comme non terminé par {$a->setby}. Cliquer pour marquer comme terminé.';
$string['completionrequirements'] = 'Conditions d’achèvement pour {$a}';
$string['courseaccess'] = 'Accès au cours';
$string['coursealreadyfinished'] = 'Cours déjà terminé';
$string['coursecontentnotification'] = 'Envoyer une notification de modification de contenu';
$string['coursecontentnotification_help'] = 'Cocher la case pour envoyer aux participants au cours une notification lors de la création ou de la modification de cette ressource ou activité. La notification ne sera envoyée qu’aux utilisateurs ayant accès à l’activité ou à la ressource.';
$string['coursecontentnotifnew'] = 'Nouveau contenu de {$a->coursename}';
$string['coursecontentnotifnewbody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> a été créé dans le cours <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Modifier vos préférences de notification</a></p>';
$string['coursecontentnotifupdate'] = 'Changement de contenu de {$a->coursename}';
$string['coursecontentnotifupdatebody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> a été modifié dans le cours <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Modifier vos préférences de notification</a></p>';
$string['coursenotyetfinished'] = 'Le cours n’est pas encore terminé';
$string['coursenotyetstarted'] = 'Le cours n’a pas encore commencé';
$string['courseparticipants'] = 'Participants au cours';
$string['coursetoolong'] = 'Le cours est trop long';
$string['customfield_islocked'] = 'Verrouillé';
$string['customfield_islocked_help'] = 'Si le champ est verrouillé, seuls les gestionnaires avec la capacité « Modifier les champs verrouillés » (par défaut ceux ayant le rôle de gestionnaire) pourront le modifier dans le formulaire d’édition du cours';
$string['customfield_notvisible'] = 'Personne';
$string['customfield_visibility'] = 'Visible pour';
$string['customfield_visibility_help'] = 'Ce réglage détermine qui peut voir le nom et la valeur du champ personnalisé dans la liste des cours ou dans le filtre des champs personnalisés disponibles du Tableau de bord.';
$string['customfield_visibletoall'] = 'Tout le monde';
$string['customfield_visibletoteachers'] = 'Enseignants';
$string['customfieldsettings'] = 'Réglages des champs personnalisés de cours communs';
$string['daystakingcourse'] = 'Jours de participation au cours';
$string['downloadcontent'] = 'Inclure dans les téléchargement de cours';
$string['downloadcontent_help'] = 'Ce réglage détermine si l’activité doit être incluse dans le fichier ZIP des contenus du cours disponible pour téléchargement. Les fichiers, dossiers, pages et étiquettes peuvent être téléchargées intégralement. Seuls le nom et la description des autres activités sont téléchargés. Cette option requiert l’activation du téléchargement des contenus de cours dans les réglages du cours,

Le réglage n’a aucun effet sur le téléchargement des contenus pour usage hors ligne via l’app mobile.';
$string['downloadcourseconfirmation'] = 'Vous allez télécharger un fichier ZIP des contenus du cours (à l’exclusion des éléments ne pouvant pas être téléchargés et des fichiers dont la taille dépasse {$a}).';
$string['downloadcoursecontent'] = 'Téléchargement des contenus du cours';
$string['downloadcoursecontent_help'] = 'Ce réglage détermine si les contenus de cours peuvent être téléchargés par les utilisateurs disposant de la capacité adéquate (par défaut ceux qui ont le rôle d’étudiant ou d’enseignant).';
$string['enabledownloadcoursecontent'] = 'Activer le téléchargement de contenus de cours';
$string['errorendbeforestart'] = 'La date de fin ({$a}) est antérieure à la date du début du cours.';
$string['favourite'] = 'Cours marqué comme favori';
$string['gradetopassnotset'] = 'Ce cours n’a pas de note pour passer. Une telle note peut être indiquée dans l’élément d’évaluation du cours (configuration du carnet de notes).';
$string['informationformodule'] = 'Information sur l’activité {$a}';
$string['module'] = 'Activité';
$string['namewithlink'] = 'Nom de catégorie avec lien';
$string['noaccesssincestartinfomessage'] = 'Bonjour {$a->userfirstname},
<p>Certains étudiants du cours {$a->coursename} n’ont jamais accédé au cours.</p>';
$string['nocourseactivity'] = 'Pas assez d’activités de cours entre le début et la fin du cours';
$string['nocourseendtime'] = 'Le cours n’a pas de date de fin';
$string['nocoursesections'] = 'Aucune section de cours';
$string['nocoursestudents'] = 'Aucun étudiant';
$string['norecentaccessesinfomessage'] = 'Bonjour {$a->userfirstname},
<p>Certains étudiants du cours {$a->coursename} n’ont pas accédé récemment au cours.</p>';
$string['noteachinginfomessage'] = 'Bonjour {$a->userfirstname},
<p>Des cours dont la date de début est fixé la semaine prochaine ont été identifiés comme sans enseignant ou sans inscription d’étudiant.</p>';
$string['participants:perpage'] = 'Nombre de participants par page';
$string['participants:perpage_help'] = 'Le nombre d’utilisateurs affichés par page sur la page des participants de chaque cours.';
$string['participantsnavigation'] = 'Navigation participants';
$string['privacy:completionpath'] = 'Achèvement de cours';
$string['privacy:favouritespath'] = 'Information sur le marquage comme favori du cours';
$string['privacy:metadata:activityfavouritessummary'] = 'Le système des cours contient des informations sur les éléments du sélecteur d’activités qui ont été marqués comme favoris par l’utilisateur.';
$string['privacy:metadata:completionsummary'] = 'Le cours contient des informations d’achèvement concernant l’utilisateur.';
$string['privacy:metadata:favouritessummary'] = 'Le cours contient des informations en lien avec son marquage comme cours favori par l’utilisateur.';
$string['privacy:perpage'] = 'Le nombre de cours à afficher par page.';
$string['recommend'] = 'Recommander';
$string['recommendcheckbox'] = 'Recommander l’activité {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} après le début du cours';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} avant le début du cours';
$string['searchactivitiesbyname'] = 'Rechercher des activités par nom';
$string['searchresults'] = 'Résultats de la recherche : {$a}';
$string['studentsatriskincourse'] = 'Étudiants en risque de décrochage dans le cours {$a}';
$string['studentsatriskinfomessage'] = 'Bonjour {$a->userfirstname},
<p>Des étudiants dans le cours {$a->coursename} ont été identifiés comme en risque de décrochage.</p>';
$string['submitsearch'] = 'Rechercher';
$string['target:coursecompetencies'] = 'Étudiants risquant de ne pas atteindre les compétences attribuées à un cours';
$string['target:coursecompetencies_help'] = 'Cette cible décrit si un étudiant est considéré comme risquant de ne pas atteindre les compétences attribuées à un cours. Elle considère que toutes les compétences attribuées au cours doivent être atteintes avant la fin du cours.';
$string['target:coursecompletion'] = 'Étudiants risquant de ne pas remplir les conditions d’achèvement du cours';
$string['target:coursecompletion_help'] = 'Cette cible décrit si l’étudiant est considéré comme risquant de ne pas remplir les conditions d’achèvement du cours.';
$string['target:coursedropout'] = 'Étudiants risquant de décrocher';
$string['target:coursedropout_help'] = 'Cette cible décrit si un étudiant est considéré comme risquant de décrocher.';
$string['target:coursegradetopass'] = 'Étudiants risquant de ne pas atteindre la note minimale pour passer le cours';
$string['target:coursegradetopass_help'] = 'Cette cible décrit si un étudiant est considéré comme risquant de ne pas atteindre la note minimale pour passer le cours.';
$string['target:noaccesssincecoursestart'] = 'Étudiants qui n’ont pas encore accédé au cours';
$string['target:noaccesssincecoursestart_help'] = 'Cette cible décrit les étudiant qui n’ont pas encore accédé à un cours auxquels ils sont inscrits.';
$string['target:noaccesssincecoursestartinfo'] = 'Les étudiants suivants sont inscrits dans un cours qui a commencé, mais ils n’ont jamais accédé au cours.';
$string['target:norecentaccesses'] = 'Étudiant qui n’ont pas accédé récemment au cours';
$string['target:norecentaccesses_help'] = 'Cette cible identifie les étudiants qui n’ont pas accédé à un cours auxquels ils sont inscrits durant l’intervalle fixé pour l’analyse (par défaut, le mois passé).';
$string['target:norecentaccessesinfo'] = 'Les étudiants suivants n’ont pas accédé aux cours auxquels ils sont inscrits dans l’intervalle d’analyse fixé (par défaut le mois dernier).';
$string['target:noteachingactivity'] = 'Cours risquant de ne pas avoir lieu';
$string['target:noteachingactivity_help'] = 'Cette cible décrit si les cours devant commencer durant la semaine à venir ont des activités d’enseignement.';
$string['target:noteachingactivityinfo'] = 'Les cours suivants devant commencer les jours prochains risquent de ne pas pouvoir commencer parce qu’ils n’ont pas d’enseignant ou d’étudiant inscrits.';
$string['targetlabelstudentcompetenciesno'] = 'Étudiant qui atteindra probablement les compétences attribuées à un cours';
$string['targetlabelstudentcompetenciesyes'] = 'Étudiant qui n’atteindra probablement pas les compétences attribuées à un cours';
$string['targetlabelstudentcompletionno'] = 'Étudiant qui remplira probablement les conditions d’achèvement du cours';
$string['targetlabelstudentcompletionyes'] = 'Étudiant qui risque de ne pas remplir les conditions d’achèvement du cours';
$string['targetlabelstudentdropoutno'] = 'Pas en risque de décrochage';
$string['targetlabelstudentdropoutyes'] = 'Étudiant en risque de décrochage';
$string['targetlabelstudentgradetopassno'] = 'Étudiant qui atteindra probablement la note minimale pour passer le cours.';
$string['targetlabelstudentgradetopassyes'] = 'Étudiant risquant de ne pas atteindre la note minimale pour passer le cours.';
$string['targetlabelteachingno'] = 'Cours risquant de ne pas avoir lieu';
$string['targetlabelteachingyes'] = 'Utilisateurs avec capacités d’enseignement qui ont accès au cours';
