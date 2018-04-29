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
 * Strings for component 'assign', language 'fr', branch 'MOODLE_32_STABLE'
 *
 * @package   assign
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Vous avez des devoirs qui requièrent votre attention';
$string['addattempt'] = 'Autoriser une autre tentative';
$string['addnewattempt'] = 'Ajouter une tentative';
$string['addnewattemptfromprevious'] = 'Ajouter une tentative basée sur le travail remis précédemment';
$string['addnewattemptfromprevious_help'] = 'Ceci copiera le contenu du travail remis précédemment pour vous permettre d\'y travailler.';
$string['addnewattempt_help'] = 'Ceci créera un travail vide pour vous permettre d\'y travailler.';
$string['addnewgroupoverride'] = 'Ajouter une exception de groupe';
$string['addnewuseroverride'] = 'Ajouter une exception utilisateur';
$string['addsubmission'] = 'Ajouter un travail';
$string['allocatedmarker'] = 'Évaluateur attribué';
$string['allocatedmarker_help'] = 'L\'évaluateur attribué pour ce travail';
$string['allowsubmissions'] = 'Autoriser l\'utilisateur à ajouter ou modifier ses travaux pour ce devoir.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Les détails du devoir et le formulaire de remise de document seront disponibles dès le <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Autoriser la remise dès le';
$string['allowsubmissionsfromdate_help'] = 'Si ce réglage est activé, les participants ne pourront pas remettre de document avant cette date. Dans le cas contraire, ils pourront immédiatement remettre des documents.';
$string['allowsubmissionsfromdatesummary'] = 'Ce devoir acceptera la remise de documents dès le <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'Autoriser l\'ajout et la modification de travaux';
$string['alwaysshowdescription'] = 'Toujours afficher la description';
$string['alwaysshowdescription_help'] = 'Si ce réglage est désactivé, la description du devoir ci-dessus ne sera visible qu\'à partir de la date d\'ouverture du formulaire de remise.';
$string['applytoteam'] = 'Appliquer les notes et le feedback à tout le groupe';
$string['assign:addinstance'] = 'Ajouter un devoir';
$string['assign:editothersubmission'] = 'Modifier le travail d\'un autre étudiant';
$string['assign:exportownsubmission'] = 'Exporter ses propres devoirs remis';
$string['assignfeedback'] = 'Plugin feedback';
$string['assignfeedbackpluginname'] = 'Plugin feedback';
$string['assign:grade'] = 'Évaluer un devoir';
$string['assign:grantextension'] = 'Octroyer des prolongations';
$string['assign:manageallocations'] = 'Gérer les évaluateurs attribués à des travaux remis';
$string['assign:managegrades'] = 'Relire et publier les notes';
$string['assign:manageoverrides'] = 'Gérer les exceptions de devoir';
$string['assignmentisdue'] = 'Devoir à effectuer';
$string['assignmentmail'] = '{$a->grader} a donné un feedback pour le travail remis pour «&nbsp;{$a->assignment}&nbsp;».

Vous pouvez le consulter en annexe à votre travail&nbsp;: {$a->url}';
$string['assignmentmailhtml'] = '<p>{$a->grader} a donné un feedback pour le travail remis pour «&nbsp;<em>{$a->assignment}</em>&nbsp;».</p>
<p>Vous pouvez le consulter en annexe à <a href="{$a->url}">votre travail</a>.</p>';
$string['assignmentmailsmall'] = '{$a->grader} a donné un feedback pour le travail remis pour «&nbsp;{$a->assignment}&nbsp;». Vous pouvez le consulter en annexe à votre travail';
$string['assignmentname'] = 'Nom du devoir';
$string['assignmentplugins'] = 'Plugins de devoir';
$string['assignmentsperpage'] = 'Devoirs par page';
$string['assign:receivegradernotifications'] = 'Recevoir les notifications des envois des évaluateurs';
$string['assign:releasegrades'] = 'Publier les notes';
$string['assign:revealidentities'] = 'Révéler l’identité des étudiants';
$string['assign:reviewgrades'] = 'Relire les notes';
$string['assignsubmission'] = 'Plugin de remise';
$string['assignsubmissionpluginname'] = 'Plugin de remise';
$string['assign:submit'] = 'Envoyer le devoir';
$string['assign:view'] = 'Accéder à un devoir';
$string['assign:viewblinddetails'] = 'Voir les identités des étudiants quand l\'évaluation à l\'aveugle est activée';
$string['assign:viewgrades'] = 'Affichage des notes';
$string['attemptheading'] = 'Tentative {$a->attemptnumber}&nbsp;: {$a->submissionsummary}';
$string['attempthistory'] = 'Tentatives précédentes';
$string['attemptnumber'] = 'Numéro de tentative';
$string['attemptreopenmethod'] = 'Réouverture des travaux remis';
$string['attemptreopenmethod_help'] = 'Détermine comment les travaux remis par les étudiants sont rouverts. Les options disponibles sont :
<ul>
<li>Jamais - Le travail de l\'étudiant ne peut pas être rouvert.</li>
<li>Manuellement - Le travail de l\'étudiant peut être rouvert par un enseignant.</li>
<li>Automatiquement jusqu\'à réussite - Le travail est rouvert automatiquement jusqu\'à ce que l\'étudiant atteigne la note nécessaire pour réussir le devoir ; cette note est indiquée dans le carnet de notes (section Configuration du carnet de notes).</li>
</ul>';
$string['attemptreopenmethod_manual'] = 'Manuellement';
$string['attemptreopenmethod_none'] = 'Jamais';
$string['attemptreopenmethod_untilpass'] = 'Automatiquement jusqu\'à réussite';
$string['attemptsettings'] = 'Réglages de tentative';
$string['availability'] = 'Disponibilité';
$string['backtoassignment'] = 'Retour au devoir';
$string['batchoperationconfirmaddattempt'] = 'Autoriser une autre tentative pour les travaux remis sélectionnés';
$string['batchoperationconfirmdownloadselected'] = 'Télécharger les travaux remis sélectionnés ?';
$string['batchoperationconfirmgrantextension'] = 'Octroyer une prolongation pour tous les travaux sélectionnés&nbsp;?';
$string['batchoperationconfirmlock'] = 'Verrouiller tous les travaux sélectionnés&nbsp;?';
$string['batchoperationconfirmreverttodraft'] = 'Remettre tous les travaux sélectionnés dans l\'état brouillon&nbsp;?';
$string['batchoperationconfirmsetmarkingallocation'] = 'Définir l\'attribution de l\'évaluation pour tous les devoirs remis sélectionnés&nbsp;?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'Définir le statut de l\'évaluation pour tous les devoirs remis sélectionnés ?';
$string['batchoperationconfirmunlock'] = 'Déverrouiller tous les travaux sélectionnés&nbsp;?';
$string['batchoperationlock'] = 'verrouiller les travaux remis';
$string['batchoperationreverttodraft'] = 'remettre à l\'état de brouillon les travaux remis';
$string['batchoperationsdescription'] = 'Avec la sélection...';
$string['batchoperationunlock'] = 'déverrouiller les travaux remis';
$string['batchsetallocatedmarker'] = 'Évaluateur attribué pour {$a} utilisateurs sélectionnés.';
$string['batchsetmarkingworkflowstateforusers'] = 'Statut d\'évaluation défini pour {$a} utilisateurs sélectionnés.';
$string['blindmarking'] = 'Évaluation à l\'aveugle';
$string['blindmarkingenabledwarning'] = 'L\'évaluation à l\'aveugle est activée pour cette activité.';
$string['blindmarking_help'] = 'L\'évaluation à l\'aveugle cache aux évaluateurs l\'identité des étudiants. Les réglages de l\'évaluation à l\'aveugle seront verrouillés dès qu\'un travail aura été remis ou une note donnée pour ce devoir.';
$string['changefilters'] = 'Modifier les filtres';
$string['changegradewarning'] = 'Ce devoir comporte des travaux évalués. La modification de la note ne déclenchera pas automatiquement le calcul des notes existantes. Pour modifier la note, vous devez ré-évaluer tous les travaux remis.';
$string['changeuser'] = 'Modifier l\'utilisateur';
$string['choosegradingaction'] = 'Action d\'évaluation';
$string['choosemarker'] = 'Sélectionner...';
$string['chooseoperation'] = 'Choisir une opération';
$string['clickexpandreviewpanel'] = 'Cliquer pour développer le panneau de relecture';
$string['collapsegradepanel'] = 'Minimiser le panneau des notes';
$string['collapsereviewpanel'] = 'Minimiser le panneau de relecture';
$string['comment'] = 'Commentaire';
$string['completionsubmit'] = 'Le participant doit remettre quelque chose pour terminer cette activité';
$string['configshowrecentsubmissions'] = 'Tout le monde peut voir les notifications de remise dans les rapports d\'activité récente.';
$string['confirmbatchgradingoperation'] = 'Voulez-vous vraiment {$a->operation} pour {$a->count} étudiants&nbsp;?';
$string['confirmsubmission'] = 'Voulez-vous vraiment remettre votre travail pour évaluation&nbsp;? Vous ne pourrez plus effectuer de changement.';
$string['conversionexception'] = 'Impossible de convertir le devoir. Exception retournée&nbsp;: {$a}.';
$string['couldnotconvertgrade'] = 'Impossible de convertir la note du devoir de l\'utilisateur {$a}';
$string['couldnotconvertsubmission'] = 'Impossible de convertir le travail remis de l\'utilisateur {$a}';
$string['couldnotcreatecoursemodule'] = 'Impossible de créer le module de cours.';
$string['couldnotcreatenewassignmentinstance'] = 'Impossible de créer l\'instance du nouveau devoir.';
$string['couldnotfindassignmenttoupgrade'] = 'Impossible de trouver l\'instance de l\'ancien devoir à mettre à jour.';
$string['currentattempt'] = 'Ceci est la tentative {$a}.';
$string['currentattemptof'] = 'Ceci est la tentative {$a->attemptnumber} ({$a->maxattempts} tentatives autorisées).';
$string['currentgrade'] = 'Note actuelle dans le carnet de notes';
$string['cutoffdate'] = 'Date limite';
$string['cutoffdatecolon'] = 'Date limite : {$a}';
$string['cutoffdatefromdatevalidation'] = 'La date limite doit être ultérieure à la date après laquelle la remise des devoirs est permise.';
$string['cutoffdate_help'] = 'Si cette date est indiquée, le devoir n\'autorisera aucune remise de travail après ce délai, sauf octroi d\'une prolongation.';
$string['cutoffdatevalidation'] = 'La date limite ne peut pas être antérieure au délai de remise.';
$string['defaultlayout'] = 'Restaurer la disposition par défaut';
$string['defaultsettings'] = 'Réglages par défaut des devoirs';
$string['defaultsettings_help'] = 'Ces réglages définissent les réglages par défaut de tous les nouveaux devoirs.';
$string['defaultteam'] = 'Groupe par défaut';
$string['deleteallsubmissions'] = 'Supprimer tous les travaux remis';
$string['description'] = 'Description';
$string['disabled'] = 'Désactivé';
$string['downloadall'] = 'Télécharger tous les travaux remis';
$string['downloadasfolders'] = 'Télécharger les travaux remis dans des dossiers';
$string['downloadasfolders_help'] = 'Lorsque la remise d\'un devoir consiste en plus d\'un fichier, les travaux remis peuvent être téléchargés dans des dossiers. Si ce réglage est activé, les fichiers de chaque étudiant seront placés dans un dossier séparé, avec les éventuels sous-dossiers, et ne seront pas renommés.';
$string['downloadselectedsubmissions'] = 'Télécharger les travaux remis sélectionnés';
$string['duedate'] = 'Date de remise';
$string['duedatecolon'] = 'Date de remise : {$a}';
$string['duedate_help'] = 'Cette date est celle du délai de remise du devoir. La remise des devoirs sera autorisée après cette date, mais les devoirs remis après cette date seront marqués en retard. Pour empêcher la remise de travaux après une certaine date, veuillez indiquer une date limite de remise.';
$string['duedateno'] = 'Pas de date de remise';
$string['duedatereached'] = 'La date de remise de ce devoir est passée';
$string['duedatevalidation'] = 'La date de remise doit être postérieure à la date à partir de laquelle les remises sont autorisées.';
$string['duplicateoverride'] = 'Dupliquer l\'exception';
$string['editaction'] = 'Actions...';
$string['editattemptfeedback'] = 'Modifier la note et le feedback pour la tentative numéro {$a}.';
$string['editingpreviousfeedbackwarning'] = 'Vous modifiez le feedback d\'une tentative précédente. Ceci est la tentative {$a->attemptnumber} de {$a->totalattempts}.';
$string['editingstatus'] = 'Statut d\'édition';
$string['editoverride'] = 'Modifier l\'exception';
$string['editsubmission'] = 'Modifier le travail';
$string['editsubmission_help'] = 'Modifier votre travail remis';
$string['editsubmissionother'] = 'Modifier le travail de {$a}';
$string['enabled'] = 'Activé';
$string['errornosubmissions'] = 'Il n\'y a pas de devoir remis à télécharger';
$string['errorquickgradingvsadvancedgrading'] = 'Les notes n\'ont pas été enregistrées, car ce devoir utilise actuellement l\'évaluation avancée';
$string['errorrecordmodified'] = 'Les notes n\'ont pas été enregistrées, car quelqu\'un a modifié une ou plusieurs notes depuis que vous avez chargé cette page.';
$string['eventallsubmissionsdownloaded'] = 'Tous les travaux téléchargés';
$string['eventassessablesubmitted'] = 'Travail de devoir remis';
$string['eventbatchsetmarkerallocationviewed'] = 'Page d\'attribution des évaluateurs consultée';
$string['eventbatchsetworkflowstateviewed'] = 'Page de définition des statuts d\'évaluation consultée';
$string['eventextensiongranted'] = 'Extension accordée';
$string['eventfeedbackupdated'] = 'Feedback modifié';
$string['eventfeedbackviewed'] = 'Feedback consulté';
$string['eventgradingformviewed'] = 'Formulaire d\'évaluation consulté';
$string['eventgradingtableviewed'] = 'Table d\'évaluation consultée';
$string['eventidentitiesrevealed'] = 'Identités révélées';
$string['eventmarkerupdated'] = 'Évaluateur modifié';
$string['eventoverridecreated'] = 'Exception de devoir créée';
$string['eventoverridedeleted'] = 'Exception de devoir supprimée';
$string['eventoverrideupdated'] = 'Exception de devoir modifiée';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Page de confirmation de révélation des identités consultée';
$string['eventstatementaccepted'] = 'Énoncé du travail accepté par l\'utilisateur';
$string['eventsubmissionconfirmationformviewed'] = 'Formulaire de confirmation de remise consulté';
$string['eventsubmissioncreated'] = 'Travail de devoir créé';
$string['eventsubmissionduplicated'] = 'Travail de devoir dupliqué';
$string['eventsubmissionformviewed'] = 'Formulaire de remise consulté';
$string['eventsubmissiongraded'] = 'Travail de devoir évalué';
$string['eventsubmissionlocked'] = 'Travaux d\'un utilisateur verrouillés';
$string['eventsubmissionstatusupdated'] = 'Statut du travail modifié';
$string['eventsubmissionstatusviewed'] = 'Statut du travail remis consulté';
$string['eventsubmissionunlocked'] = 'Travaux d\'un utilisateur déverrouillés';
$string['eventsubmissionupdated'] = 'Travail de devoir modifié';
$string['eventsubmissionviewed'] = 'Travail remis consulté';
$string['eventworkflowstateupdated'] = 'Statut du flux de travail modifié';
$string['expandreviewpanel'] = 'Développer le panneau de relecture';
$string['extensionduedate'] = 'Date de prolongation';
$string['extensionnotafterduedate'] = 'La date de prolongation doit être ultérieure à la date de remise';
$string['extensionnotafterfromdate'] = 'La date de prolongation doit être ultérieure à la date après laquelle la remise des devoirs est permise.';
$string['feedback'] = 'Feedback';
$string['feedbackavailablehtml'] = '{$a->username} a donné un feedback pour le travail remis pour «&nbsp;<em>{$a->assignment}</em>&nbsp;».<br /><br />Vous pouvez le consulter en annexe à <a href="{$a->url}">votre travail</a>.';
$string['feedbackavailablesmall'] = '{$a->username} a donné un feedback pour le devoir {$a->assignment}';
$string['feedbackavailabletext'] = '{$a->username} a donné un feedback pour le travail remis pour «&nbsp;{$a->assignment}&nbsp;».

Vous pouvez le consulter en annexe à votre travail&nbsp;: {$a->url}';
$string['feedbackplugin'] = 'Plugin feedback';
$string['feedbackpluginforgradebook'] = 'Le plugin feedback qui transmettra des commentaires au carnet de notes';
$string['feedbackpluginforgradebook_help'] = 'La transmission des commentaires au carnet de notes ne peut pas être effectuée par plusieurs plugins de feedback.';
$string['feedbackplugins'] = 'Plugins de feedback';
$string['feedbacksettings'] = 'Réglages de feedback';
$string['feedbacktypes'] = 'Types de feedback';
$string['filesubmissions'] = 'Remise de fichiers';
$string['filter'] = 'Filtre';
$string['filternone'] = 'Aucun filtre';
$string['filternotsubmitted'] = 'Non remis';
$string['filterrequiregrading'] = 'Nécessite évaluation';
$string['filtersubmitted'] = 'Devoir rendu';
$string['fixrescalednullgrades'] = 'Ce devoir comporte des notes erronées. Vous pouvez <a href="{$a->link}">corriger automatiquement ces notes</a>. Ceci pourrait avoir une influence sur les totaux du cours.';
$string['fixrescalednullgradesconfirm'] = 'Voulez-vous vraiment corriger les notes erronées ? Toutes les notes concernées seront supprimées. Ceci pourrait avoir une influence sur les totaux du cours.';
$string['fixrescalednullgradesdone'] = 'Notes corrigées.';
$string['gradeabovemaximum'] = 'La note doit être inférieure ou égale à {$a}.';
$string['gradebelowzero'] = 'La note doit être supérieure ou égale à zéro.';
$string['gradecanbechanged'] = 'La note peut être modifiée';
$string['gradechangessaveddetail'] = 'Les modifications à la note et au feedback ont été enregistrées';
$string['graded'] = 'Noté';
$string['gradedby'] = 'Évalué par';
$string['gradedon'] = 'Évalué le';
$string['gradelocked'] = 'Cette note est verrouillée ou modifiée dans le carnet de notes.';
$string['gradeoutof'] = 'Note sur {$a}';
$string['gradeoutofhelp'] = 'Note';
$string['gradeoutofhelp_help'] = 'Saisir ici la note pour le travail de l\'étudiant. On peut indiquer des décimales.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} a modifié son travail remis pour le devoir «&nbsp;<em>{$a->assignment}</em>&nbsp;» le {$a->timeupdated}.<br /><br />Le travail remis est <a href="{$a->url}">disponible sur le site web</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} a modifié son travail remis pour le devoir {$a->assignment}.';
$string['gradersubmissionupdatedtext'] = '{$a->username} a modifié son travail remis pour le devoir «&nbsp;{$a->assignment}&nbsp;» le {$a->timeupdated}.

Ce travail est disponible ici&nbsp;:

{$a->url}';
$string['gradestudent'] = 'Évaluer l\'étudiant&nbsp;: (id={$a->id}, fullname={$a->fullname}).';
$string['gradeuser'] = 'Note {$a}';
$string['grading'] = 'Évaluation';
$string['gradingchangessaved'] = 'Les modifications de note ont été enregistrées';
$string['gradingmethodpreview'] = 'Critères d\'évaluation';
$string['gradingoptions'] = 'Options';
$string['gradingstatus'] = 'Statut de l\'évaluation';
$string['gradingstudent'] = 'Évaluation d\'étudiant';
$string['gradingsummary'] = 'Résumé de l\'évaluation';
$string['grantextension'] = 'Octroyer une prolongation';
$string['grantextensionforusers'] = 'Octroyer une prolongation à {$a} étudiants';
$string['groupoverrides'] = 'Exceptions de groupe';
$string['groupoverridesdeleted'] = 'Exceptions de groupe supprimées';
$string['groupsnone'] = 'Il n\'y a pas de groupe dans ce cours';
$string['groupsubmissionsettings'] = 'Réglages de remises en groupe';
$string['hiddenuser'] = 'Participant';
$string['hideshow'] = 'Cacher/afficher';
$string['inactiveoverridehelp'] = '* L\'étudiant n\'est pas dans le groupe correct ou n\'a pas le rôle adéquat pour effectuer le devoir, ou le devoir est caché';
$string['instructionfiles'] = 'Fichiers d\'instructions';
$string['introattachments'] = 'Fichiers supplémentaires';
$string['introattachments_help'] = 'Des fichiers supplémentaires à utiliser dans le devoir peuvent être ajoutés, par exemple des modèles de réponse. Les liens de téléchargement de ces fichiers seront affichés sur la page du devoir, sous la description.';
$string['invalidfloatforgrade'] = 'La note fournie n\'a pas pu être interprétée&nbsp;: {$a}';
$string['invalidgradeforscale'] = 'La note fournie n\'est pas valide dans le barème actuel';
$string['invalidoverrideid'] = 'ID d\'exception non valide';
$string['lastmodifiedgrade'] = 'Dernière modification (note)';
$string['lastmodifiedsubmission'] = 'Dernière modification (travail remis)';
$string['latesubmissions'] = 'Devoirs en retard';
$string['latesubmissionsaccepted'] = 'Permis jusqu\'au {$a}';
$string['loading'] = 'Chargement...';
$string['locksubmissionforstudent'] = 'Empêcher la remise d\'autres travaux par l\'étudiant&nbsp;: (id={$a->id}, fullname={$a->fullname}).';
$string['locksubmissions'] = 'Verrouiller la remise des travaux';
$string['manageassignfeedbackplugins'] = 'Gérer les plugins de feedback des devoirs';
$string['manageassignsubmissionplugins'] = 'Gérer les plugins de remise de travaux des devoirs';
$string['marker'] = 'Évaluateur';
$string['markerfilter'] = 'Filtre d\'évaluateurs';
$string['markerfilternomarker'] = 'Pas de marqueur';
$string['markingallocation'] = 'Utiliser l\'attribution d\'évaluateurs';
$string['markingallocation_help'] = 'Si ce réglage est activé en même temps que les flux d\'évaluation, les évaluateurs peuvent être attribués à des participants.';
$string['markingworkflow'] = 'Utiliser les flux d\'évaluation';
$string['markingworkflow_help'] = 'Si ce réglage est activé, l\'évaluation passera par différentes étapes d\'un flux de travail avant d\'être publiée pour les participants. Ce processus permet une évaluation en plusieurs tours, ainsi que la publication simultanée des évaluations de tous les participants.';
$string['markingworkflowstate'] = 'Statut du flux d\'évaluation';
$string['markingworkflowstate_help'] = 'La liste des statuts d\'évaluation à votre disposition est déterminée par vos permissions et peut comprendre :

* Non évalué - l\'évaluateur n\'a pas encore commencé l\'évaluation
* En cours d\'évaluation - l\'évaluateur a commencé l\'évaluation, qui n\'est pas encore terminée
* Évaluation terminée - l\'évaluateur a terminé l\'évaluation, mais peut encore la revoir pour des vérifications ou corrections
* En relecture - l\'évaluation a été transmise à l\'enseignant responsable de sa vérification
* Prêt pour publication - l\'enseignant chargé de la relecture est satisfait de l\'évaluation, mais n\'a pas encore décidé de la publier
* Publiée - l\'étudiant peut consulter ses notes et feedbacks';
$string['markingworkflowstateinmarking'] = 'En cours d\'évaluation';
$string['markingworkflowstateinreview'] = 'En relecture';
$string['markingworkflowstatenotmarked'] = 'Non évalué';
$string['markingworkflowstatereadyforrelease'] = 'Prêt pour publication';
$string['markingworkflowstatereadyforreview'] = 'Évaluation terminée';
$string['markingworkflowstatereleased'] = 'Publié';
$string['maxattempts'] = 'Nombre maximal de tentatives';
$string['maxattempts_help'] = 'Le nombre maximal de tentatives de remise pouvant être effectuées par un étudiant. Une fois ce nombre atteint, le travail remis ne pourra plus être rouvert.';
$string['maxgrade'] = 'Note maximale';
$string['maxperpage'] = 'Nombre de devoirs par page';
$string['maxperpage_help'] = 'Le nombre maximum de devoirs qu\'un évaluateur peut voir dans la page d\'évaluation des devoirs. Pratique pour éviter des lenteurs d\'affichage dans les cours où il y a de très nombreux participants.';
$string['messageprovider:assign_notification'] = 'Notifications de devoirs';
$string['modulename'] = 'Devoir';
$string['modulename_help'] = 'Le module d\'activité devoir permet à un enseignant de communiquer aux participants des tâches, de récolter des travaux et de leur fournir feedbacks et notes.

Les étudiants peuvent remettre des travaux sous forme numérique (fichiers), par exemple des documents traitement de texte, feuilles de calcul, images, sons ou séquences vidéo. En complément ou en plus, le devoir peut demander aux étudiants de saisir directement un texte. Un devoir peut aussi être utilisé pour indiquer aux étudiants des tâches à effectuer dans le monde réel et ne nécessitant pas la remise de fichiers numériques. Les étudiants peuvent remettre un devoir individuellement ou comme membres d\'un groupe.

Lors de l\'évaluation des devoirs, les enseignants peuvent donner aux étudiants des feedbacks, leur envoyer des fichiers : travaux annotés, documents avec commentaires ou feedbacks audio. Les devoirs peuvent être évalués au moyen d\'une note numérique, d\'un barème spécifique ou d\'une méthode avancée comme une grille d\'évaluation. Les notes définitives sont enregistrées dans le carnet de notes.';
$string['modulenameplural'] = 'Devoirs';
$string['moreusers'] = '{$a} de plus...';
$string['multipleteams'] = 'Membre de plusieurs groupes';
$string['multipleteamsgrader'] = 'Membre de plusieurs groupes ; impossible donc de remettre un travail.';
$string['mysubmission'] = 'Mon travail&nbsp;:';
$string['newsubmissions'] = 'Devoirs rendus';
$string['noattempt'] = 'Aucune tentative';
$string['noclose'] = 'Pas de date de fermeture';
$string['nofiles'] = 'Aucun fichier.';
$string['nofilters'] = 'Aucun filtre';
$string['nograde'] = 'Aucune note.';
$string['nolatesubmissions'] = 'Aucun devoir en retard accepté';
$string['nomoresubmissionsaccepted'] = 'Permis uniquement pour les participants ayant obtenu une prolongation';
$string['none'] = 'Aucun';
$string['noonlinesubmissions'] = 'Ce devoir ne requiert pas de fichier à remettre de votre part';
$string['noopen'] = 'Pas de date de début';
$string['nooverridedata'] = 'Vous devez indiquer une exception pour au moins un des réglages du devoir.';
$string['nosavebutnext'] = 'Suivant';
$string['nosubmission'] = 'Rien n\'a été déposé pour ce devoir';
$string['nosubmissionsacceptedafter'] = 'Aucun devoir accepté après';
$string['noteam'] = 'Membre d\'aucun groupe';
$string['noteamgrader'] = 'Membre d\'aucun groupe ; impossible donc de remettre un travail.';
$string['notgraded'] = 'Non évalué';
$string['notgradedyet'] = 'Pas encore évalué';
$string['notifications'] = 'Notifications';
$string['notsubmittedyet'] = 'Pas encore rendu';
$string['nousers'] = 'Aucun utilisateur';
$string['nousersselected'] = 'Aucun utilisateur sélectionné';
$string['numberofdraftsubmissions'] = 'Brouillons';
$string['numberofparticipants'] = 'Participants';
$string['numberofsubmissionsneedgrading'] = 'Nécessitant évaluation';
$string['numberofsubmittedassignments'] = 'Remis';
$string['numberofteams'] = 'Groupes';
$string['offline'] = 'Aucun travail à remettre requis';
$string['open'] = 'Ouvert';
$string['outlinegrade'] = 'Note&nbsp;: {$a}';
$string['outof'] = '{$a->current} de {$a->total}';
$string['overdue'] = '<span class="flagged-tag">Le devoir est en retard de {$a}</span>';
$string['override'] = 'Exception';
$string['overridedeletegroupsure'] = 'Voulez-vous vraiment supprimer l\'exception du groupe {$a} ?';
$string['overridedeleteusersure'] = 'Voulez-vous vraiment supprimer l\'exception de l\'utilisateur {$a} ?';
$string['overridegroup'] = 'Exception de groupe';
$string['overridegroupeventname'] = '{$a->assign} - {$a->group}';
$string['overrides'] = 'Exceptions';
$string['overrideuser'] = 'Exception utilisateur';
$string['overrideusereventname'] = '{$a->assign} - Exception';
$string['page-mod-assign-view'] = 'Page principale du module devoir';
$string['page-mod-assign-x'] = 'Toute page du module devoir';
$string['paramtimeremaining'] = '{$a} restants';
$string['participant'] = 'Participant';
$string['pluginadministration'] = 'Administration du devoir';
$string['pluginname'] = 'Devoir';
$string['preventsubmissionnotingroup'] = 'Requiert un groupe pour remettre un devoir';
$string['preventsubmissionnotingroup_help'] = 'Si ce réglage est activé, les utilisateurs qui ne sont pas membres d\'un groupe ne pourront pas remettre de devoir.';
$string['preventsubmissions'] = 'Empêcher l\'utilisateur de déposer ou de modifier des travaux pour ce devoir.';
$string['preventsubmissionsshort'] = 'Empêcher l\'ajout et la modification de travaux';
$string['previous'] = 'Précédent';
$string['quickgrading'] = 'Évaluation rapide';
$string['quickgradingchangessaved'] = 'Les modifications de notes ont été enregistrées';
$string['quickgrading_help'] = 'L\'évaluation rapide vous permet d\'attribuer des notes (et compétences) directement dans le tableau des travaux remis. L\'évaluation rapide n\'est pas compatible avec l\'évaluation avancée et n\'est pas recommandée si plusieurs utilisateurs effectuent l\'évaluation.';
$string['quickgradingresult'] = 'Évaluation rapide';
$string['recordid'] = 'Identifiant';
$string['removeallgroupoverrides'] = 'Supprimer toutes les exceptions de groupe';
$string['removealluseroverrides'] = 'Supprimer toutes les exceptions utilisateur';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'L\'option de réouverture « Automatiquement jusqu\'à réussite » n\'est pas compatible avec l\'évaluation à l\'aveugle, car les notes ne sont transmises au carnet de notes qu\'après que le nom de l\'étudiant est révélé.';
$string['requireallteammemberssubmit'] = 'Exiger la validation du dépôt par tous les membres du groupe';
$string['requireallteammemberssubmit_help'] = 'Si ce réglage est activé, tous les membres du groupe doivent cliquer sur le bouton de remise du devoir pour que le travail du groupe soit considéré comme remis. Dans le cas contraire, le travail du groupe sera considéré comme remis dès que l\'un de ses membres clique sur le bouton de remise.';
$string['requiresubmissionstatement'] = 'Demander aux étudiants d\'accepter la déclaration de remise pour tous les devoirs';
$string['requiresubmissionstatement_help'] = 'Lorsque ce réglage est activé, les étudiants doivent accepter une déclaration pour pour tous les devoirs de cette plateforme. Le texte de cette déclaration peut être modifié par l\'administrateur. Par défaut, sa teneur est : « Ce document est le fruit de mon propre travail, excepté les extraits dûment cités de travaux d\'autres personnes.»';
$string['revealidentities'] = 'Révéler les identités des étudiants';
$string['revealidentitiesconfirm'] = 'Voulez-vous vraiment révéler les identités des étudiants pour ce devoir&nbsp;? Cette opération ne peut pas être annulée. Une fois les identités révélées, les notes seront transmises au carnet de notes.';
$string['reverttodefaults'] = 'Revenir aux réglages par défaut du devoir';
$string['reverttodraft'] = 'Remettre les travaux remis en état de brouillon.';
$string['reverttodraftforstudent'] = 'Remettre à l\'état de brouillon le travail de l\'étudiant&nbsp;: (id={$a->id}, fullname={$a->fullname}).';
$string['reverttodraftshort'] = 'Remettre le travail à l\'état de brouillon';
$string['reviewed'] = 'Relu';
$string['save'] = 'Enregistrer';
$string['saveallquickgradingchanges'] = 'Enregistrer toutes les évaluations rapides';
$string['saveandcontinue'] = 'Enregistrer et continuer';
$string['savechanges'] = 'Enregistrer';
$string['savegradingresult'] = 'Note';
$string['savenext'] = 'Enregistrer et afficher la suite';
$string['saveoverrideandstay'] = 'Enregistrer et ajouter une autre exception';
$string['savingchanges'] = 'Enregistrement des modifications...';
$string['scale'] = 'Barème';
$string['search:activity'] = 'Devoir – information sur l\'activité';
$string['selectedusers'] = 'Utilisateurs sélectionnés';
$string['selectlink'] = 'Sélectionner...';
$string['selectuser'] = 'Sélectionner {$a}';
$string['sendlatenotifications'] = 'Informer les évaluateurs des travaux en retard';
$string['sendlatenotifications_help'] = 'Si ce réglage est activé, les évaluateurs (normalement les enseignants) recevront un message lorsque les étudiants remettent un travail en retard. La façon dont le message est délivré est configurable.';
$string['sendnotifications'] = 'Informer les évaluateurs des travaux remis';
$string['sendnotifications_help'] = 'Si ce réglage est activé, les évaluateurs (en principe les enseignants) recevront un message chaque fois qu\'un étudiant remet un travail pour ce devoir, qu\'il soit en avance, à temps ou en retard. La méthode d\'envoi des messages est configurable.';
$string['sendstudentnotifications'] = 'Notifier les étudiants';
$string['sendstudentnotificationsdefault'] = 'Réglages par défaut pour «&nbsp;Notifier les étudiants&nbsp;»';
$string['sendstudentnotificationsdefault_help'] = 'Définit la valeur par défaut de la case à cocher «&nbsp;Notifier les étudiants&nbsp;» sur le formulaire d\'évaluation.';
$string['sendstudentnotifications_help'] = 'Si ce réglage est activé, les étudiants reçoivent un message lors de la modification d\'une note ou d\'un feedback.';
$string['sendsubmissionreceipts'] = 'Envoyer aux étudiants un accusé de réception';
$string['sendsubmissionreceipts_help'] = 'Ce réglage permet d\'activer les accusés de réception pour les étudiants. Les étudiants recevront une notification chaque fois qu\'ils remettent un travail pour un devoir.';
$string['setmarkerallocationforlog'] = 'Définition de l\'évaluateur&nbsp;: (id={$a->id}, nom={$a->fullname}, évaluateur={$a->marker}).';
$string['setmarkingallocation'] = 'Définir l\'évaluateur attribué';
$string['setmarkingworkflowstate'] = 'Définir le statut du flux d\'évaluation';
$string['setmarkingworkflowstateforlog'] = 'Définition du statut du flux d\'évaluation : ( id={$a->id}, nom={$a->fullname}, état={$a->state}).';
$string['settings'] = 'Réglages du devoir';
$string['showrecentsubmissions'] = 'Afficher les remises récentes';
$string['status'] = 'Statut';
$string['studentnotificationworkflowstateerror'] = 'Le statut de l\'évaluation doit être « Publiée » pour en informer les étudiants.';
$string['submission'] = 'Devoir rendu';
$string['submissioncopiedhtml'] = '<p>Vous avez copié votre travail remis précédent pour <em>{$a->assignment}</em>.</p>
<p>Vous pouvez consulter l\'état de votre <a href="{$a->url}">travail remis</a>.</p>';
$string['submissioncopiedsmall'] = 'Vous avez copié votre travail remis précédent pour <em>{$a->assignment}</em>.';
$string['submissioncopiedtext'] = 'Vous avez copié votre travail remis précédent pour <em>{$a->assignment}</em>.

Vous pouvez consulter l\'état de votre travail remis&nbsp;:

 {$a->url}';
$string['submissiondrafts'] = 'Exiger que les étudiants cliquent sur le bouton « Envoyer le devoir »';
$string['submissiondrafts_help'] = 'Si ce réglage est activé, les étudiants devront explicitement cliquer sur le bouton « Envoyer le devoir » pour confirmer que leur devoir est terminé. Cela permet aux étudiants de conserver dans le système une version brouillon de leur travail avant de l\'envoyer. Si le réglage est activé après que des étudiants ont déjà remis leur travaux, ceux-ci seront considérés comme définitifs.';
$string['submissioneditable'] = 'L\'étudiant peut modifier ce travail remis';
$string['submissionempty'] = 'Rien n\'a été remis';
$string['submissionlog'] = 'Étudiant&nbsp;: {$a->fullname}, statut&nbsp;: {$a->status}';
$string['submissionmodified'] = 'Des données de remise sont déjà présentes. Veuillez quitter cette page et essayer à nouveau.';
$string['submissionmodifiedgroup'] = 'La remise a été modifiée par quelqu\'un d\'autre. Veuillez quitter cette page et essayer à nouveau.';
$string['submissionnotcopiedinvalidstatus'] = 'Le travail remis n\'a pas été copié, car il a été modifié depuis sa réouverture.';
$string['submissionnoteditable'] = 'L\'étudiant ne peut pas modifier ce travail remis';
$string['submissionnotready'] = 'Ce travail n\'est pas prêt à être remis&nbsp;:';
$string['submissionplugins'] = 'Plugins de remise';
$string['submissionreceipthtml'] = '<p>Vous avez remis un travail pour le devoir «&nbsp;<em>{$a->assignment}</em>&nbsp;»</p>
<p>Vous pouvez consulter l\'état de votre <a href="{$a->url}">travail</a>.</p>';
$string['submissionreceiptotherhtml'] = 'Votre travail pour «&nbsp;<em>{$a->assignment}</em>&nbsp;» a été remis.<br /><br />
Vous pouvez consulter le statut de votre <a href="{$a->url}">travail remis</a>.';
$string['submissionreceiptothersmall'] = 'Votre travail pour {$a->assignment} a été remis.';
$string['submissionreceiptothertext'] = 'Votre travail pour «&nbsp;{$a->assignment}&nbsp;» a été remis.

Vous pouvez consulter le statut de votre travail remis&nbsp;:

    {$a->url}';
$string['submissionreceipts'] = 'Envoyer les accusés de réception';
$string['submissionreceiptsmall'] = 'Vous avez remis votre travail pour le devoir {$a->assignment}';
$string['submissionreceipttext'] = 'Vous avez remis un travail pour le devoir «&nbsp;{$a->assignment}&nbsp;».

Vous pouvez consulter l\'état de votre travail&nbsp;: {$a->url}';
$string['submissions'] = 'Devoirs rendus';
$string['submissionsclosed'] = 'La remise des travaux est terminée';
$string['submissionsettings'] = 'Réglages de la remise des travaux';
$string['submissionslocked'] = 'L\'ajout, la modification et la suppression de travaux ont été bloqués';
$string['submissionslockedshort'] = 'Devoir verrouillé';
$string['submissionsnotgraded'] = 'Travaux non évalués {$a}';
$string['submissionstatement'] = 'Énoncé de remise';
$string['submissionstatementacceptedlog'] = 'Énoncé de remise accepté par l\'utilisateur {$a}';
$string['submissionstatementdefault'] = 'Ce document est le fruit de mon propre travail, excepté les extraits dûment cités de travaux d\'autres personnes.';
$string['submissionstatement_help'] = 'Énoncé de confirmation de remise';
$string['submissionstatus'] = 'Statut des travaux remis';
$string['submissionstatus_'] = 'Pas de travail remis';
$string['submissionstatus_draft'] = 'Brouillon (non remis)';
$string['submissionstatusheading'] = 'Statut de remise';
$string['submissionstatus_marked'] = 'Noté';
$string['submissionstatus_new'] = 'Non remis';
$string['submissionstatus_reopened'] = 'Rouvert';
$string['submissionstatus_submitted'] = 'Remis pour évaluation';
$string['submissionsummary'] = '{$a->status}. Dernière modification le {$a->timemodified}';
$string['submissionteam'] = 'Groupe';
$string['submissiontypes'] = 'Types de remise';
$string['submitaction'] = 'Envoyer';
$string['submitassignment'] = 'Envoyer le devoir';
$string['submitassignment_help'] = 'Une fois ce devoir envoyé, vous ne pourrez plus y effectuer de modification.';
$string['submitforgrading'] = 'Envoyer pour évaluation';
$string['submitted'] = 'Devoir rendu';
$string['submittedearly'] = 'Le travail a été remis en avance de {$a}';
$string['submittedlate'] = 'Le travail a été remis en retard de {$a}';
$string['submittedlateshort'] = 'En retard de {$a}';
$string['subplugintype_assignfeedback'] = 'Plugin de feedback';
$string['subplugintype_assignfeedback_plural'] = 'Plugins de feedback';
$string['subplugintype_assignsubmission'] = 'Plugin de remise';
$string['subplugintype_assignsubmission_plural'] = 'Plugins de remise';
$string['teamname'] = 'Équipe : {$a}';
$string['teamsubmission'] = 'Les étudiants remettent leur travail en groupe';
$string['teamsubmissiongroupingid'] = 'Groupement pour les groupes d\'étudiants';
$string['teamsubmissiongroupingid_help'] = 'Les groupes de ce groupement seront utilisés pour former les groupes d\'étudiants de ce devoir. Si non renseigné, le jeu de groupes par défaut sera utilisé.';
$string['teamsubmission_help'] = 'Si ce réglage est activé, les étudiants seront répartis en groupes, sur la base du jeu de groupes par défaut ou d\'un groupement choisi. Un travail remis en groupe sera partagé par tous les membres du groupe et tous les membres du groupe verront les modifications du devoir effectuées par les autres membres.';
$string['textinstructions'] = 'Instructions pour le devoir';
$string['timemodified'] = 'Dernière modification';
$string['timeremaining'] = 'Temps restant';
$string['timeremainingcolon'] = 'Temps restant : {$a}';
$string['togglezoom'] = 'Zoom avant/arrière de la région';
$string['ungroupedusers'] = 'Le réglage « Requiert un groupe pour remettre un devoir » est activé et certains utilisateurs ne sont membres d\'aucun groupe ou membres de plusieurs groupes. Cette situation les empêchera de remettre un travail.';
$string['unlimitedattempts'] = 'Illimité';
$string['unlimitedattemptsallowed'] = 'Nombre illimité de tentatives autorisées.';
$string['unlimitedpages'] = 'Illimité';
$string['unlocksubmissionforstudent'] = 'Permettre la remise de travaux pour l\'étudiant&nbsp;: (id={$a->id}, fullname={$a->fullname}).';
$string['unlocksubmissions'] = 'Déverrouiller les remises';
$string['unsavedchanges'] = 'Modifications non enregistrées';
$string['unsavedchangesquestion'] = 'Des modifications aux notes ou au feedback ne sont pas enregistrées. Voulez-vous les enregistrer et continuer ?';
$string['updategrade'] = 'Modifier la note';
$string['updatetable'] = 'Enregistrer et modifier le tableau';
$string['upgradenotimplemented'] = 'La mise à jour n\'est pas implémentée dans le plugin ({$a->type} {$a->subtype})';
$string['userextensiondate'] = 'Prolongation accordée jusqu\'au&nbsp;: {$a}';
$string['usergrade'] = 'Note utilisateur';
$string['useridlistnotcached'] = 'Les modifications aux notes n\'ont pas été enregistrées : il n\'a pas été possible de déterminer à quel travail elles avaient été attribuées.';
$string['useroverrides'] = 'Exceptions utilisateur';
$string['useroverridesdeleted'] = 'Exceptions utilisateur supprimées';
$string['usersnone'] = 'Aucun étudiant n\'a accès à ce devoir.';
$string['userswhoneedtosubmit'] = 'Utilisateurs devant valider l\'envoi du devoir : {$a}';
$string['validmarkingworkflowstates'] = 'Statuts d\'évaluation valides';
$string['viewadifferentattempt'] = 'Consulter un autre travail';
$string['viewbatchmarkingallocation'] = 'Afficher la page d\'attribution des évaluateurs.';
$string['viewbatchsetmarkingworkflowstate'] = 'Afficher la page de définition des statuts d\'évaluation.';
$string['viewfeedback'] = 'Afficher le feedback';
$string['viewfeedbackforuser'] = 'Afficher le feedback de l\'utilisateur {$a}';
$string['viewfull'] = 'Afficher la vue complète';
$string['viewfullgradingpage'] = 'Ouvrir la page d\'évaluation complète pour donner des feedbacks';
$string['viewgradebook'] = 'Afficher le carnet de note';
$string['viewgrading'] = 'Consulter tous les travaux remis';
$string['viewgradingformforstudent'] = 'Afficher la page d\'évaluation de l\'étudiant&nbsp;: (id={$a->id}, fullname={$a->fullname}).';
$string['viewownsubmissionform'] = 'Afficher sa propre page de remise de travaux.';
$string['viewownsubmissionstatus'] = 'Afficher sa propre page de l\'état des travaux remis.';
$string['viewrevealidentitiesconfirm'] = 'Afficher la page de confirmation pour révéler les identités des étudiants';
$string['viewsubmission'] = 'Afficher le travail remis';
$string['viewsubmissionforuser'] = 'Afficher le travail remis de l\'étudiant {$a}';
$string['viewsubmissiongradingtable'] = 'Afficher le tableau des notes du devoir';
$string['viewsummary'] = 'Afficher la vue résumée';
$string['workflowfilter'] = 'Filtre de flux';
$string['xofy'] = '{$a->x} sur {$a->y}';
