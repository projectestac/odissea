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
 * Strings for component 'completion', language 'fr', version '4.1'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Obtenir la note';
$string['achievingpassinggrade'] = 'Atteindre la note minimale de réussite';
$string['activities'] = 'Activités';
$string['activitiescompleted'] = 'Achèvement d’activité';
$string['activitiescompletednote'] = 'Remarque : l’achèvement d’activité doit être activé pour une activité au moins, afin qu’il apparaisse dans la liste ci-dessus.';
$string['activitieslabel'] = 'Activités / ressources';
$string['activityaggregation'] = 'La condition requiert';
$string['activityaggregation_all'] = 'TOUTES les activités sélectionnées doivent être achevées';
$string['activityaggregation_any'] = 'UNE des activités sélectionnées doit être achevée';
$string['activitycompletion'] = 'Achèvement d’activité';
$string['activitycompletionupdated'] = 'Modifiations enregistrées';
$string['activitygradenotrequired'] = 'Note non requise';
$string['activitygradetopassnotset'] = 'Cette activité n’a pas de note pour passer valide. Elle peut être spécifiée dans les réglages de l’activité, section Note.';
$string['affectedactivities'] = 'Les modifications vont toucher les <b>{$a}</b> activités ou ressources :';
$string['aggregationmethod'] = 'Méthode de combinaison';
$string['all'] = 'Tous';
$string['any'] = 'Un au moins';
$string['approval'] = 'Approbation';
$string['areyousureoverridecompletion'] = 'Voulez-vous vraiment écraser l’état d’achèvement actuel de cette activité pour cet utilisateur et le marquer comme « {$a} » ?';
$string['badautocompletion'] = 'Lorsque vous utilisez le suivi automatique de l’achèvement, vous devez activer au moins une exigence (ci-dessous).';
$string['badcompletiongradeitemnumber'] = 'Impossible d’exiger une note pour <b>{$a}</b> parce que l’évaluation pour {$a} n’est pas activée.';
$string['bulkactivitycompletion'] = 'Modification par lots de l’achèvement d’activité';
$string['bulkactivitydetail'] = 'Sélectionner les activités à modifier par lots.';
$string['bulkcompletiontracking'] = 'Suivi de l’achèvement';
$string['bulkcompletiontracking_help'] = '<strong>Aucun :</strong> ne pas indiquer d’achèvement d’activité

<strong>Manuel :</strong> les étudiants peuvent marquer manuellement l’activité comme achevée

<strong>Avec conditions :</strong> marquer l’activité comme achevée lorsque des conditions sont remplies';
$string['checkactivity'] = 'Case à cocher pour l’activité/ressource : {$a}';
$string['checkall'] = 'Cocher ou décocher toutes les activités et ressources';
$string['checkallsection'] = 'Cocher ou décocher toutes les activités et ressources de la section suivante : {$a}';
$string['completeactivity'] = 'Terminer l’activité';
$string['completed'] = 'Terminé';
$string['completedunlocked'] = 'Options d’achèvement déverrouillées';
$string['completedunlockedtext'] = 'À l’enregistrement de ce formulaire, les données d’achèvement seront supprimées, puis recalculées lorsque c’est possible. Pour éviter ceci, continuer sans enregistrer.';
$string['completedwarning'] = 'Options d’achèvement verrouillées';
$string['completedwarningtext'] = 'Cette activité est marquée comme terminée pour un ou plusieurs étudiants. En déverrouillant de ce réglage pour effectuer une modification, puis enregistrant le formulaire, les données d’achèvement seront supprimées, puis recalculées lorsque c’est possible. L’achèvement manuel ne peut pas être recalculé, et les étudiants devront dans ce cas de nouveau marquer l’activité comme terminée.';
$string['completion'] = 'Suivi d’achèvement';
$string['completion-alt-auto-enabled'] = 'Le système marquera cet élément comme terminé selon les conditions : {$a}';
$string['completion-alt-auto-fail'] = 'Terminé : {$a} (n’a pas atteint la note minimale de réussite)';
$string['completion-alt-auto-n'] = 'Non terminé : {$a}';
$string['completion-alt-auto-n-override'] = 'Non terminé : {$a->modname} (défini par {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Terminé : {$a} (a atteint la note minimale de réussite)';
$string['completion-alt-auto-y'] = 'Terminé : {$a}';
$string['completion-alt-auto-y-override'] = 'Terminé : {$a->modname} (défini par {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Les participants peuvent marquer manuellement cet élément comme terminé : {$a}';
$string['completion-alt-manual-n'] = 'Non terminé : {$a}. Sélectionner pour marquer comme terminé.';
$string['completion-alt-manual-n-override'] = 'Non terminé : {$a->modname} (défini par {$a->overrideuser}). Sélectionner pour marquer comme terminé.';
$string['completion-alt-manual-y'] = 'Terminé : {$a}. Sélectionner pour marquer comme non terminé.';
$string['completion-alt-manual-y-override'] = 'Terminé : {$a->modname} (défini par {$a->overrideuser}). Sélectionner pour marquer comme non terminé.';
$string['completion-fail'] = 'Terminé (n’a pas atteint la note minimale de réussite)';
$string['completion-n'] = 'Pas terminé';
$string['completion-n-override'] = 'Non terminé (défini par {$a})';
$string['completion-pass'] = 'Terminé (note minimale de réussite atteinte)';
$string['completion-y'] = 'Terminé';
$string['completion-y-override'] = 'Terminé (défini par {$a})';
$string['completion_automatic'] = 'Afficher l’activité comme terminée dès que les conditions sont remplies';
$string['completion_help'] = 'Cette option permet d’activer le suivi de l’achèvement des activités, manuellement ou automatiquement, sur la base de conditions choisies. Plusieurs conditions peuvent être exigées simultanément. Dans ce cas, l’activité sera considérée comme terminée si toutes les conditions sont remplies.';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = 'Les participants peuvent marquer manuellement cette activité comme terminée';
$string['completion_none'] = 'Ne pas afficher l’état d’achèvement';
$string['completionactivitydefault'] = 'Utiliser le réglage par défaut de l’activité';
$string['completiondefault'] = 'Suivi d’achèvement par défaut';
$string['completiondisabled'] = 'Désactivé. Pas affiché dans les réglages de l’activité';
$string['completionduration'] = 'Inscription';
$string['completionenabled'] = 'Activé. La configuration s’effectue dans les réglages des activités';
$string['completionexpected'] = 'Achèvement attendu le';
$string['completionexpected_help'] = 'Ce réglage détermine la date à laquelle l’activité devrait être terminée. Lorsque la date approche, l’activité est listée dans le bloc Chronologie sur le tableau de bord.';
$string['completionexpecteddesc'] = 'Achèvement attendu le {$a}';
$string['completionexpectedfor'] = '{$a->instancename} doit être achevée';
$string['completionicons'] = 'Coches d’achèvement';
$string['completionicons_help'] = 'Une coche à côté du nom de l’activité peut être utilisée pour indiquer que l’activité est terminée.

Si la bordure de la case à cocher est traitillée, une coche apparaîtra automatiquement lorsque l’activité sera terminée d’après les conditions fixées par l’enseignant.

Si la bordure de la case à cocher est continue, vous pouvez la cocher lorsque vous pensez avoir terminé l’activité. Vous pouvez cliquer une nouvelle fois si vous changez d’avis.';
$string['completionmenuitem'] = 'Achèvement';
$string['completionnotenabled'] = 'L’achèvement n’est pas activé';
$string['completionnotenabledforcourse'] = 'L’achèvement n’est pas activé pour ce cours';
$string['completionnotenabledforsite'] = 'L’achèvement n’est pas activé pour ce site';
$string['completionondate'] = 'Date';
$string['completionondatevalue'] = 'Date à laquelle le cours sera marqué comme terminé';
$string['completionpassgrade'] = 'Requiert une note minimale de réussite';
$string['completionpassgrade_desc'] = 'L’étudiant doit obtenir une note minimale de réussite pour achever cette activité';
$string['completionpassgrade_help'] = 'Si ce réglage est activé, l’activité est considérée comme achevée lorsque l’étudiant obtient une note minimale de réussite.';
$string['completionsettingslocked'] = 'Réglages d’achèvement verrouillés';
$string['completionupdated'] = 'Achèvement modifié pour l’activité <b>{$a}</b>';
$string['completionusegrade'] = 'Note requise';
$string['completionusegrade_desc'] = 'L’étudiant doit recevoir une note pour achever cette activité';
$string['completionusegrade_help'] = 'Si cette option est activée, l’activité est considérée comme terminée quand un étudiant a reçu une note. Si une note minimale de réussite a été définie pour l’activité, des icônes de réussite ou d’échec sont affichées dans le rapport d’achèvement d’activité.';
$string['completionview'] = 'Affichage requis';
$string['completionview_desc'] = 'L’étudiant doit afficher cette activité pour achever l’activité';
$string['configcompletiondefault'] = 'Le réglage par défaut du suivi d’achèvement lors de la création de nouvelles activités.';
$string['configenablecompletion'] = 'Si ce réglage est activé, des conditions d’achèvement de cours et d’activité peuvent être définies. De telles définitions sont recommandées de sorte à afficher des données pertinentes aux utilisateurs dans la vue d’ensemble des cours sur leur tableau de bord.';
$string['confirmselfcompletion'] = 'Confirmer l’auto achèvement';
$string['courseaggregation'] = 'La condition requiert';
$string['courseaggregation_all'] = 'TOUS les cours sélectionnés doivent être achevés';
$string['courseaggregation_any'] = 'UN des cours sélectionnés doit être achevé';
$string['coursealreadycompleted'] = 'Vous avez déjà terminé ce cours';
$string['coursecomplete'] = 'Cours terminé';
$string['coursecompleted'] = 'Cours terminé';
$string['coursecompletedmessage'] = '<p>Félicitations !</p><p>Vous avez terminé le cours <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'Achèvement de cours';
$string['coursecompletioncondition'] = 'Condition : {$a}';
$string['coursecompletionnavigation'] = 'Navigation tertiaire d’achèvement de cours';
$string['coursegrade'] = 'Note du cours';
$string['coursesavailable'] = 'Cours disponibles';
$string['coursesavailableexplaination'] = 'Remarque : des critères d’achèvement de cours doivent être définis pour qu’un cours apparaisse dans la liste ci-dessus.';
$string['criteria'] = 'Critères';
$string['criteriagroup'] = 'Groupe de critères';
$string['criteriarequiredall'] = 'Tous les critères ci-dessous sont requis';
$string['criteriarequiredany'] = 'Un des critères ci-dessous est requis';
$string['csvdownload'] = 'Télécharger en format CSV (UTF-8)';
$string['datepassed'] = 'Date échue';
$string['days'] = 'Jours';
$string['daysoftotal'] = '{$a->days} de {$a->total}';
$string['daysuntilcompletion'] = 'Jours jusqu’à l’achèvement';
$string['defaultcompletion'] = 'Achèvement d’activité par défaut';
$string['defaultcompletionupdated'] = 'Modifications enregistrées';
$string['deletecompletiondata'] = 'Supprimer les données d’achèvement';
$string['dependencies'] = 'Dépendances';
$string['dependenciescompleted'] = 'Achèvement d’autres cours';
$string['detail_desc:receivegrade'] = 'Recevoir une note';
$string['detail_desc:receivepassgrade'] = 'Obtenir une note minimale de réussite';
$string['detail_desc:view'] = 'Consulter';
$string['done'] = 'Terminé';
$string['editcoursecompletionsettings'] = 'Modifier les réglages d’achèvement du cours';
$string['enablecompletion'] = 'Activer le suivi de l’achèvement des activités';
$string['enablecompletion_help'] = 'Si ce réglage est activé, des conditions d’achèvement peuvent être définies pour l’achèvement des activités ou des cours.';
$string['enrolmentduration'] = 'Durée d’inscription';
$string['enrolmentdurationlength'] = 'L’utilisateur doit rester inscrit durant';
$string['err_noactivities'] = 'Le suivi de l’achèvement n’est activé dans aucune activité, et rien ne peut donc être affiché. Vous pouvez activer le suivi de l’achèvement en modifiant les réglages des activités.';
$string['err_nocourses'] = 'Le suivi de l’achèvement n’est activé dans aucun cours. Vous pouvez activer le suivi d’achèvement de cours dans les réglages de chaque cours.';
$string['err_nograde'] = 'Une note minimale pour terminer le cours avec succès n’a pas été spécifiée. Pour activer ce type de critère, veuillez créer une note minimale de réussite pour ce cours.';
$string['err_noroles'] = 'Il n’y a pas de rôle avec la capacité moodle/course:markcomplete dans ce cours.';
$string['err_nousers'] = 'Aucun des participants de ce cours ou de ce groupe n’a de rôle pour lequel le suivi de l’achèvement des activités est activé. Les informations d’achèvement ne sont affichées que pour les utilisateurs disposant de la capacité « Être affiché dans les rapports d’achèvement ». Or cette capacité n’est permise par défaut que pour le rôle Étudiant ; ce message est donc affiché s’il n’y a pas d’étudiant.';
$string['err_settingslocked'] = 'Un ou plusieurs étudiants ont déjà rempli un critère, c’est pourquoi les réglages ont été verrouillés. Le déverrouillage des réglages supprimera les données d’achèvement des utilisateurs et pourrait générer des confusions.';
$string['err_system'] = 'Une erreur interne est survenue dans le système de suivi de l’achèvement des activités. L’administrateur peut activer l’affichage des informations de débogage pour obtenir plus de détails sur cette erreur.';
$string['eventcoursecompleted'] = 'Cours terminé';
$string['eventcoursecompletionupdated'] = 'Achèvement de cours modifié';
$string['eventcoursemodulecompletionupdated'] = 'Achèvement d’activité modifié';
$string['eventdefaultcompletionupdated'] = 'Réglage par défaut pour l’achèvement de l’activité modifié';
$string['excelcsvdownload'] = 'Télécharger en format CSV compatible Excel';
$string['failed'] = 'Échec';
$string['fraction'] = 'Fraction';
$string['graderequired'] = 'Note de cours requise';
$string['gradexrequired'] = '{$a} requis';
$string['hiddenrules'] = 'Certains réglages spécifiques à <b>{$a}</b> ont été cachées. Pour les afficher, désélectionner d’autres activités';
$string['inprogress'] = 'En cours';
$string['manual'] = 'Manuel';
$string['manualcompletionby'] = 'Achèvement manuel par d’autres';
$string['manualcompletionbynote'] = 'Remarque : la capacité moodle/course:markcomplete doit être permise pour un rôle afin qu’il apparaisse dans la liste.';
$string['manualselfcompletion'] = 'Auto-achèvement manuel';
$string['manualselfcompletionnote'] = 'Remarque : le bloc d’auto-achèvement doit être ajouté dans le cours si l’auto-achèvement manuel est activé.';
$string['markcomplete'] = 'Marquer comme terminé';
$string['markedcompleteby'] = 'Marqué comme terminé par {$a}';
$string['markingyourselfcomplete'] = 'Marquer vous-même comme terminé';
$string['modifybulkactions'] = 'Modifier les actions à modifier par lots';
$string['moredetails'] = 'Plus d’informations';
$string['nocriteriaset'] = 'Aucun critère d’achèvement défini pour ce cours';
$string['nogradeitem'] = 'Exiger une note ne peut pas être activé pour <b>{$a}</b> parce que l’activité n’est pas évaluée.';
$string['notcompleted'] = 'Pas terminé';
$string['notenroled'] = 'Vous n’êtes pas inscrit à ce cours';
$string['nottracked'] = 'Vous n’êtes actuellement pas suivi pour l’achèvement de ce cours';
$string['notyetstarted'] = 'Pas encore commencé';
$string['overallaggregation'] = 'Conditions d’achèvement';
$string['overallaggregation_all'] = 'Le cours est achevé lorsque TOUTES les conditions sont remplies';
$string['overallaggregation_any'] = 'Le cours est achevé lorsqu’UNE des conditions est remplie';
$string['pending'] = 'En suspens';
$string['periodpostenrolment'] = 'Durée après l’inscription';
$string['privacy:metadata:completionstate'] = 'Si l’activité a été achevée';
$string['privacy:metadata:course'] = 'Un identifiant de cours';
$string['privacy:metadata:coursecompletedsummary'] = 'Enregistre les informations sur les utilisateurs qui ont achevé des critères dans un cours';
$string['privacy:metadata:coursemoduleid'] = 'L’identifiant de l’activité';
$string['privacy:metadata:coursemodulesummary'] = 'Enregistre les données d’achèvement d’un utilisateur';
$string['privacy:metadata:coursesummary'] = 'Enregistre les données d’achèvement du cours d’un utilisateur.';
$string['privacy:metadata:gradefinal'] = 'Note finale reçue pour l’achèvement du cours';
$string['privacy:metadata:overrideby'] = 'L’identifiant utilisateur de la personne qui a court-circuité l’achèvement de l’activité';
$string['privacy:metadata:reaggregate'] = 'Si l’achèvement de cours a été recalculé.';
$string['privacy:metadata:timecompleted'] = 'La date et l’heure de l’achèvement du cours.';
$string['privacy:metadata:timecreated'] = 'L’horodatage de la création de l’achèvement de l’activité';
$string['privacy:metadata:timeenrolled'] = 'La date et l’heure de l’inscription de l’utilisateur dans le cours';
$string['privacy:metadata:timemodified'] = 'La date et l’heure de la modification de l’achèvement de l’activité';
$string['privacy:metadata:timestarted'] = 'La date et l’heure du début du cours.';
$string['privacy:metadata:unenroled'] = 'Si l’utilisateur a été désinscrit du cours';
$string['privacy:metadata:userid'] = 'L’identifiant de la personne avec les données d’achèvement de cours et d’activité';
$string['privacy:metadata:viewed'] = 'Si l’activité a été consultée';
$string['progress'] = 'Suivi des activités des participants';
$string['progress-title'] = '{$a->user}, {$a->activity} : {$a->state} {$a->date}';
$string['progresstotal'] = 'Progression : {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Reconnaissance d’apprentissages antérieurs';
$string['remainingenroledfortime'] = 'Rester inscrit pendant une durée spécifiée';
$string['remainingenroleduntildate'] = 'Rester inscrit jusqu’à une date spécifiée';
$string['reportpage'] = 'Affichage des utilisateurs {$a->from} à {$a->to} sur {$a->total}.';
$string['requiredcriteria'] = 'Critères requis';
$string['resetactivities'] = 'Réinitialiser toutes les activités et ressources cochées';
$string['restoringcompletiondata'] = 'Écriture des données d’achèvement';
$string['roleaggregation'] = 'La condition demande';
$string['roleaggregation_all'] = 'que TOUS les rôles sélectionnés indiquent que la condition est remplie';
$string['roleaggregation_any'] = 'que l’UN des rôles sélectionnés indique que la condition est remplie';
$string['roleidnotfound'] = 'Rôle d’identifiant {$a} non trouvé';
$string['saved'] = 'Enregistré';
$string['seedetails'] = 'Voir les informations additionnelles';
$string['select'] = 'Sélectionner';
$string['self'] = 'Soi-même';
$string['selfcompletion'] = 'Auto achèvement';
$string['showcompletionconditions'] = 'Afficher les conditions d’achèvement des activités';
$string['showcompletionconditions_help'] = 'Afficher les conditions d’achèvement sur la page de cours.';
$string['showinguser'] = 'Affichage de l’utilisateur';
$string['timecompleted'] = 'Horodatage de l’achèvement';
$string['todo'] = 'À faire';
$string['unenrolingfromcourse'] = 'Désinscription du cours';
$string['unenrolment'] = 'Désinscription';
$string['unit'] = 'Unité';
$string['unlockcompletion'] = 'Déverrouiller les réglages d’achèvement';
$string['unlockcompletiondelete'] = 'Déverrouiller les réglages d’achèvement et effacer les données d’achèvement utilisateur';
$string['updateactivities'] = 'Modifier le statut d’achèvement des activités cochées';
$string['usealternateselector'] = 'Utiliser un autre sélecteur de cours';
$string['usernotenroled'] = 'L’utilisateur n’est pas inscrit à ce cours';
$string['viewcoursereport'] = 'Consulter le rapport du cours';
$string['viewingactivity'] = 'Affichage de {$a}';
$string['withconditions'] = 'Avec conditions';
$string['writingcompletiondata'] = 'Écriture des données d’achèvement';
$string['xdays'] = '{$a} jours';
$string['yourprogress'] = 'Votre progression';
