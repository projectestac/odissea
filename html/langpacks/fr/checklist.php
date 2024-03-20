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
 * Strings for component 'checklist', language 'fr', version '4.1'.
 *
 * @package     checklist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomments'] = 'Ajouter des commentaires';
$string['additem'] = 'Ajouter';
$string['additemalt'] = 'Ajouter un nouvel élément à la liste';
$string['additemhere'] = 'Insérer le nouvel élément après celui-ci';
$string['addownitems'] = 'Ajouter vos propres éléments';
$string['addownitems-stop'] = 'Arrêt d’ajout d’éléments';
$string['allowmodulelinks'] = 'Autoriser les liens vers les éléments';
$string['anygrade'] = 'Tout';
$string['anygrouping'] = 'Aucun groupement';
$string['autopopulate'] = 'Montrer les éléments du cours dans la liste des tâches';
$string['autopopulate_help'] = 'Cela ajoutera automatiquement une liste de toutes les ressources et les activités dans le cadre actuel dans la liste. <br />
Cette liste sera mise à jour avec tous les changements en cours, lorsque vous visitez la page « Modifier » pour la liste des tâches. <br />
Les éléments peuvent être cachés dans la liste, en cliquant sur l’icône « Cacher » à côté d’eux.<br />
Pour supprimer les éléments automatiques de la liste, modifier cette option en cliquant sur « Non », puis cliquez sur « Supprimer des éléments de cours » sur la page « Modifier ».';
$string['autoupdate'] = 'Cochez quand les modules sont terminés';
$string['autoupdate2'] = 'Vérifier lorsque les modules sont terminés';
$string['autoupdate2_help'] = 'Cela va automatiquement cocher les éléments de votre Liste des tâches lorsque vous terminez l’activité concernée dans le cours. <br />
Si le suivi d’achèvement est activé pour une activité particulière, il sera utilisé pour cocher l’élément dans la liste. <br>
Sinon, « terminer » une activité varie d’une activité à une autre - « afficher » une ressource, « réaliser » un test ou « déposer » un devoir, « publier » sur un forum ou participer à un chat, etc. (pour plus de détails sur les causes exactes indiquant qu’une activité est « terminée », demandez à votre administrateur de site de regarder dans le fichier "mod/checklist/classes/local/autoupdate.php") <br>
Si un élément est lié à un cours et que l’achèvement est activé pour ce cours, l’élément sera mis à jour lorsque ce cours sera marqué comme terminé.';
$string['autoupdate_help'] = 'Cela va automatiquement cocher les éléments de votre Liste des tâches lorsque vous terminez l’activité concernée dans le cours. <br />
Si le suivi d’achèvement est activé pour une activité particulière, il sera utilisé pour cocher l’élément dans la liste. <br>
Sinon, « terminer » une activité varie d’une activité à une autre - « afficher » une ressource, « réaliser » un test ou « déposer » un devoir, « publier » sur un forum ou participer à un chat, etc. (pour plus de détails sur les causes exactes indiquant qu’une activité est « terminée », demandez à votre administrateur de site de regarder dans le fichier "mod/checklist/classes/local/autoupdate.php") <br>';
$string['autoupdatenote'] = 'Si le choix « Étudiant » pour la modification automatique est coché, les mises à jour ne seront pas affichées dans les listes des tâches pour « Enseignant seul »';
$string['autoupdatewarning_both'] = 'Il y a des éléments sur cette liste qui seront automatiquement modifiés (comme ceux que les étudiants disent avoir terminé). Cependant, dans le cas d’une liste des tâches commune « étudiant et enseignant », les barres de progression ne seront pas modifiées tant qu’un enseignant n’accepte pas les notes attribuées.';
$string['autoupdatewarning_student'] = 'Il y a des éléments sur cette liste qui seront automatiquement modifiés (comme ceux que les étudiants disent avoir terminé).';
$string['autoupdatewarning_teacher'] = 'Certains éléments de cette liste seront automatiquement mis à jour (au fur et à mesure que les étudiants terminent l’activité correspondante).';
$string['calendardescription'] = 'Cet élément a été ajouté par la liste des tâches : {$a}';
$string['canceledititem'] = 'Effacer';
$string['changetextcolour'] = 'Prochaine couleur de texte';
$string['checkeditemsdeleted'] = 'Éléments de la liste des tâches supprimés';
$string['checklist'] = 'Liste des tâches';
$string['checklist:addinstance'] = 'Ajouter une nouvelle liste des tâches';
$string['checklist:edit'] = 'Créer et éditer des liste des tâches';
$string['checklist:emailoncomplete'] = 'Recevoir par mail quand c’est terminé';
$string['checklist:preview'] = 'Prévisualisation d’une liste des tâches';
$string['checklist:updatelocked'] = 'Modification des marques verrouillée';
$string['checklist:updateother'] = 'Modification des marques des liste des tâches des étudiants';
$string['checklist:updateown'] = 'Modification de vos marques des liste des tâches';
$string['checklist:viewmenteereports'] = 'Voir la progression du stagiaire (seul)';
$string['checklist:viewreports'] = 'Voir la progression des étudiants';
$string['checklistautoupdate'] = 'Autoriser les listes des tâches à être modifiées automatiquement';
$string['checklistfor'] = 'Liste des tâches pour';
$string['checklistintro'] = 'Introduction';
$string['checklistsettings'] = 'Paramètres';
$string['checks'] = 'Marques';
$string['choosecourse'] = 'Choisir le cours…';
$string['comments'] = 'Commentaires';
$string['completiondetail:items'] = 'Éléments à cocher : {$a}';
$string['completiondetail:percent'] = 'Éléments à cocher : {$a} %';
$string['completionpercent'] = 'Nombre d’éléments qui doivent être cochés :';
$string['completionpercentgroup'] = 'À cocher obligatoirement';
$string['completionpercentgroup_help'] = 'Si « pourcentage des éléments » est sélectionné, les utilisateurs doivent cocher au moins le pourcentage spécifié des éléments de la liste de contrôle pour être considérés comme « complets ». Si « éléments » est sélectionné, l’utilisateur doit cocher au moins autant d’éléments individuels dans la liste. Notez que si vous spécifiez ici un nombre d’éléments supérieur au nombre d’éléments de la liste de contrôle, elle ne sera jamais marquée comme terminée.';
$string['configchecklistautoupdate'] = 'Avant de permettre cela, vous devez faire quelques modifications au code Moodle, merci de voir le « mod/checklist/README.txt » pour plus de détails';
$string['configshowcompletemymoodle'] = 'Si ce réglage n’est pas activé, les listes terminées ne seront pas affichées dans le « Tableau de bord »';
$string['configshowmymoodle'] = 'Si ce réglage n’est pas activé, l’activité liste des tâches (avec des barres de progression) ne sera plus affichée dans le « Tableau de bord »';
$string['configshowupdateablemymoodle'] = 'Si cette case est cochée, seules les listes modifiables seront affichées dans le « Tableau de bord »';
$string['confirmdeleteitem'] = 'Voulez-vous vraiment effacer définitivement cet élément de la liste des tâches ?';
$string['deleteitem'] = 'Effacer cet élément';
$string['duedatesoncalendar'] = 'Ajouter les dates d’échéance au calendrier';
$string['edit'] = 'Modifier la Liste des tâches';
$string['editchecks'] = 'Modifier les coches';
$string['editdatesstart'] = 'Modifier les dates';
$string['editdatesstop'] = 'Arrêt de l’édition des dates';
$string['edititem'] = 'Modifier cet élément';
$string['emailoncomplete'] = 'Envoyer un courriel à l’enseignant quand la liste des tâches est complète';
$string['emailoncomplete_help'] = 'Quand une liste est complète, un courriel de notification est envoyé à tous les enseignants du cours. <br />
Un administrateur peut contrôler qui reçoit ce courriel en utilisant la capacité « mod: check-list / emailoncomplete » - par défaut, tous les enseignants et enseignants non éditeurs ont cette capacité.';
$string['emailoncompletebody'] = 'L’utilisateur {$a->user} a complété sa liste des tâches « {$a->checklist} »
Voir la Liste des tâches ici :';
$string['emailoncompletebodyown'] = 'Vous avez terminé la liste de tâches « {$a->checklist} » dans le cours « {$a->coursename} »
Accéder à la liste ici :';
$string['emailoncompletesubject'] = 'L’utilisateur {$a->user} a complété sa liste des tâches « {$a->checklist} »';
$string['emailoncompletesubjectown'] = 'Vous avez terminé la liste des tâches « {$a->checklist} »';
$string['enterurl'] = 'Entrer l’URL…';
$string['errorchecklistitemnotvalid'] = 'L’identifiant de l’élément de la liste des tâches n’appartient pas à ce module de cours !';
$string['eventchecklistcomplete'] = 'Liste des tâches complète';
$string['eventeditpageviewed'] = 'Page d’édition vue';
$string['eventreportviewed'] = 'Rapport consulté';
$string['eventstudentchecksupdated'] = 'Tâches de l’étudiant mises à jour';
$string['eventteacherchecksupdated'] = 'Tâches de l’enseignant mises à jour';
$string['export'] = 'Exportation des éléments';
$string['forceupdate'] = 'Modification des coches pour les éléments automatiques';
$string['gradetocomplete'] = 'Évaluation pour terminer';
$string['grouping'] = 'Groupement';
$string['guestsno'] = 'Vous n’avez pas l’autorisation de voir cette liste des tâches';
$string['headingitem'] = 'Cet élément est une étiquette, il n’y aura pas de case à cocher à côté';
$string['import'] = 'Import d’éléments';
$string['importfile'] = 'Choisir le fichier à importer';
$string['importfromcourse'] = 'Tout le cours';
$string['importfromsection'] = 'Section courante';
$string['indentitem'] = 'Décaler l’élément';
$string['itemcomplete'] = 'Terminé';
$string['items'] = 'Éléments de la liste des tâches';
$string['itemstype'] = 'Éléments';
$string['linkcourses'] = 'Autoriser la liaison d’éléments entre cours';
$string['linkcourses_desc'] = 'Si le réglage est activé, les éléments de la liste des tâches peuvent être liés à des cours au sein de Moodle - marqués comme étant complets lorsque le cours associé est terminé. L’activation de cette option peut avoir des répercussions sur la performance lors de l’édition des éléments de la liste sur des sites avec un grand nombre de cours.';
$string['linkto'] = 'Lien vers';
$string['linktocourse'] = 'Cours associé avec cet élément';
$string['linktomodule'] = 'Activité associée à cet élément';
$string['linktourl'] = 'Lien associé avec cet élément';
$string['lockteachermarks'] = 'Verrouillage des coches de l’enseignant';
$string['lockteachermarks_help'] = 'Lorsque ce paramètre est activé, une fois qu’un enseignant a sauvé une coche « Oui », il ne sera plus possible de changer la valeur. Les utilisateurs ayant la capacité « mod/checklist:updatelocked » seront toujours en mesure de changer la coche.';
$string['lockteachermarkswarning'] = 'Remarque : une fois que vous avez enregistré ces coches, il vous sera impossible de changer toutes les coches « Oui »';
$string['modulename'] = 'Liste des tâches';
$string['modulename_help'] = 'L’activité ­« Liste des tâches » permet aux enseignants de créer des listes de tâches pour le suivi des étudiants.';
$string['modulename_link'] = 'mod/checklist/view';
$string['modulenameplural'] = 'Listes des tâches';
$string['moveitemdown'] = 'Descendre l’élément';
$string['moveitemup'] = 'Monter l’élément';
$string['noitems'] = 'Pas d’élément dans la liste des tâches';
$string['onlyenrolled'] = 'Uniquement les utilisateurs actifs';
$string['onlyenrolleddesc'] = 'Si sélectionné, seuls les utilisateurs avec une inscription active sont affichés (dé-sélectionner pour l’ancien comportement)';
$string['openlinkinnewwindow'] = 'Ouvrir dans un nouvel onglet ?';
$string['optionalhide'] = 'Cacher les options des éléments';
$string['optionalitem'] = 'Cet élément est optionnel';
$string['optionalshow'] = 'Montrer les options des éléments';
$string['or'] = 'OU';
$string['percent'] = 'Pourcentage des éléments';
$string['percentcomplete'] = 'Éléments obligatoires';
$string['percentcompleteall'] = 'Tous les éléments';
$string['pluginadministration'] = 'Administration de la liste des tâches';
$string['pluginname'] = 'Liste des tâches';
$string['preview'] = 'Prévisualisation';
$string['privacy:metadata:checklist_check'] = 'Informations sur les éléments de la liste des tâches qui ont été cochés par l’utilisateur (ou coché par un enseignant pour un utilisateur) pour une liste des tâches donnée';
$string['privacy:metadata:checklist_check:item'] = 'L’identifiant de l’élément de la liste des tâches qui a été coché';
$string['privacy:metadata:checklist_check:teacherid'] = 'L’identifiant de l’enseignant qui a mis à jour en dernier l’état de cet élément';
$string['privacy:metadata:checklist_check:teachermark'] = 'L’état attribué à cet élément, pour l’utilisateur, par un enseignant';
$string['privacy:metadata:checklist_check:teachertimestamp'] = 'Heure à laquelle l’enseignant a attribué un statut à cet élément pour la dernière fois';
$string['privacy:metadata:checklist_check:userid'] = 'L’identifiant de l’utilisateur qui a coché l’élément (ou, s’il a été coché par un enseignant, l’utilisateur pour lequel celui-ci a été coché)';
$string['privacy:metadata:checklist_check:usertimestamp'] = 'Heure à laquelle l’utilisateur a coché cet élément pour la dernière fois (0 si cet élément n’est pas coché pour l’instant)';
$string['privacy:metadata:checklist_comment'] = 'Informations à propos des commentaires faits par un enseignant concernant la progression de l’utilisateur pour une liste des tâches donnée';
$string['privacy:metadata:checklist_comment:commentby'] = 'L’identifiant de l’utilisateur (enseignant) qui a fait ce commentaire';
$string['privacy:metadata:checklist_comment:itemid'] = 'L’identifiant de l’élément de la liste de tâche relatif à ce commentaire';
$string['privacy:metadata:checklist_comment:text'] = 'Le texte du commentaire';
$string['privacy:metadata:checklist_comment:userid'] = 'L’identifiant de l’utilisateur (étudiant) auquel ce commentaire fait référence';
$string['privacy:metadata:checklist_comment_student'] = 'Commentaires qui ont été faits par un étudiant sur une liste des tâches donnée';
$string['privacy:metadata:checklist_comment_student:itemid'] = 'L’identifiant de l’élément de la liste des tâches auquel le commentaire se rapporte';
$string['privacy:metadata:checklist_comment_student:text'] = 'Le texte du commentaire';
$string['privacy:metadata:checklist_comment_student:usermodified'] = 'Identifiant de l’utilisateur (étudiant) qui a fait ce commentaire';
$string['privacy:metadata:checklist_item'] = 'Informations à propos des éléments privés que l’utilisateur a ajouté à la liste des tâches donnée';
$string['privacy:metadata:checklist_item:checklist'] = 'L’identifiant de la liste des tâches à laquelle ce élément privé a été ajouté';
$string['privacy:metadata:checklist_item:displaytext'] = 'Le texte de l’élément privé de la liste des tâches';
$string['privacy:metadata:checklist_item:userid'] = 'L’identifiant de l’utilisateur qui a créé cet élément privé (ou 0 pour les éléments créés par un utilisateur et visibles de tous les utilisateurs)';
$string['progress'] = 'Progression';
$string['removeauto'] = 'Supprimer les éléments du module du cours';
$string['report'] = 'Afficher la progression';
$string['reporttablesummary'] = 'Tableau montrant les éléments de la liste que chaque étudiant a terminé';
$string['requireditem'] = 'Cet élément est requis - il doit être complété';
$string['resetchecklistprogress'] = 'Réinitialiser la progression et les éléments de l’utilisateur';
$string['savechecks'] = 'Sauvegarder';
$string['showcolorchooser'] = 'Afficher le sélecteur de couleur';
$string['showcolorchooserdesc'] = 'Affiche le sélecteur de couleur des éléments de la liste dans edit.php';
$string['showcompletemymoodle'] = 'Afficher les listes des tâches terminées dans le « Tableau de bord »';
$string['showfulldetails'] = 'Afficher tous les détails';
$string['showhidechecked'] = 'Afficher/masquer les éléments sélectionnés';
$string['showmymoodle'] = 'Afficher les listes des tâches dans le « Tableau de bord »';
$string['showprogressbars'] = 'Afficher les barres de progression';
$string['showupdateablemymoodle'] = 'Afficher uniquement les listes des tâches modifiables dans le « Tableau de bord »';
$string['student_comment_created'] = 'Commentaire étudiant créé';
$string['student_comment_updated'] = 'Commentaire étudiant mis à jour';
$string['student_comment_updated_desc'] = 'L’utilisateur avec l’identifiant {$a->userid} a mis à jour un commentaire dans la liste des tâches avec l’identifiant du module de cours {$a->cmid} pour avoir le texte « {$a->commenttext} »';
$string['studentcomments'] = 'L’utilisateur peut ajouter ses propres commentaires aux éléments de la liste des tâches';
$string['teacheralongsidecheck'] = 'Étudiant et Enseignant';
$string['teachercomments'] = 'Les enseignants peuvent ajouter des commentaires';
$string['teacherdate'] = 'Date de dernière modification de l’élément par l’enseignant';
$string['teacheredit'] = 'Mises à jour par';
$string['teacherid'] = 'Dernier enseignant à avoir modifié la coche';
$string['teachermarkno'] = 'L’enseignant ne confirme pas que cet élément est terminé';
$string['teachermarkundecided'] = 'L’enseignant n’a pas encore coché cet élément';
$string['teachermarkyes'] = 'L’enseignant confirme que cet élément est terminé';
$string['teachernoteditcheck'] = 'Seulement l’étudiant';
$string['teacheroverwritecheck'] = 'Seulement l’enseignant';
$string['theme'] = 'Thème graphique pour afficher la liste des tâches';
$string['togglecolumn'] = 'Colonne de basculement';
$string['toggledates'] = 'Basculer les dates';
$string['togglerow'] = 'Ligne de basculement';
$string['unindentitem'] = 'Élément non indenté';
$string['update_student_comment_failed'] = 'Échec de la mise à jour du commentaire de l’étudiant';
$string['updatecompletescore'] = 'Sauvegarder les notes d’achèvement';
$string['updateitem'] = 'Modification';
$string['userdate'] = 'Date de dernière modification de l’élément par l’utilisateur';
$string['useritemsallowed'] = 'L’utilisateur peut ajouter ses propres éléments';
$string['useritemsdeleted'] = 'Éléments de l’utilisateur supprimés';
$string['view'] = 'Voir la liste des tâches';
$string['viewall'] = 'Voir tous les étudiants';
$string['viewallcancel'] = 'Effacer';
$string['viewallsave'] = 'Sauvegarder';
$string['viewsinglereport'] = 'Voir la progression de cet utilisateur';
$string['viewsingleupdate'] = 'Modifier la progression de cet utilisateur';
$string['yesnooverride'] = 'Oui, ne peut pas remplacer';
$string['yesoverride'] = 'Oui, peut remplacer';
