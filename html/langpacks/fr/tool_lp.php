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
 * Strings for component 'tool_lp', language 'fr', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_lp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['activities'] = 'Activités';
$string['addcohorts'] = 'Ajouter des cohortes';
$string['addcohortstosync'] = 'Ajouter des cohortes à synchroniser';
$string['addcompetency'] = 'Ajouter une compétence';
$string['addcoursecompetencies'] = 'Ajouter des compétences au cours';
$string['addcrossreferencedcompetency'] = 'Ajouter une compétence transversale';
$string['addingcompetencywillresetparentrule'] = 'L\'ajout d\'une compétence supprimera la règle définie sur « {$a} ». Voulez-vous continuer ?';
$string['addnewcompetency'] = 'Ajouter une compétence';
$string['addnewcompetencyframework'] = 'Ajouter un référentiel de compétences';
$string['addnewplan'] = 'Ajouter un plan de formation';
$string['addnewtemplate'] = 'Ajouter un modèle de plan de formation';
$string['addnewuserevidence'] = 'Ajouter une preuve d\'acquis';
$string['addtemplatecompetencies'] = 'Ajouter des compétences au modèle de plan de formation';
$string['aisrequired'] = '« {$a} » est requis';
$string['aplanswerecreated'] = '{$a} plans de formation ont été créés.';
$string['aplanswerecreatedmoremayrequiresync'] = '{$a} plans de formation ont été créés. D\'autres plans de formation seront créés lors de la prochaine synchronisation.';
$string['assigncohorts'] = 'Attribuer des cohortes';
$string['averageproficiencyrate'] = 'Le niveau d\'acquisition de compétences pour les plans de formation achevés basés sur ce modèle est de {$a} %.';
$string['cancelreviewrequest'] = 'Annuler la demande de validation';
$string['cannotaddrules'] = 'Cette compétence ne peut pas être configurée';
$string['cannotcreateuserplanswhentemplateduedateispassed'] = 'De nouveaux plans de formation ne peuvent pas être créés. Le délai de ce modèle est échu ou sur le point d\'échoir.';
$string['cannotcreateuserplanswhentemplatehidden'] = 'De nouveaux plans de formation ne peuvent pas être créés tant que ce modèle est caché.';
$string['category'] = 'Catégorie';
$string['chooserating'] = 'Sélectionner une évaluation…';
$string['cohortssyncedtotemplate'] = 'Cohortes synchronisées à ce modèle de plan de formation';
$string['competenciesforframework'] = 'Compétences de {$a}';
$string['competenciesmostoftennotproficient'] = 'Compétences non atteintes le plus souvent dans les plans de formation achevés';
$string['competenciesmostoftennotproficientincourse'] = 'Compétences non atteintes le plus souvent dans ce cours';
$string['competencycannotbedeleted'] = 'La compétence « {$a} » ne peut pas être supprimée';
$string['competencycreated'] = 'Compétence créée';
$string['competencycrossreferencedcompetencies'] = '{$a} compétences transversales';
$string['competencyframework'] = 'Référentiel de compétences';
$string['competencyframeworkcreated'] = 'Référentiel de compétences créé.';
$string['competencyframeworkname'] = 'Nom';
$string['competencyframeworkroot'] = 'Pas de parent (compétence de niveau supérieur)';
$string['competencyframeworks'] = 'Référentiels de compétences';
$string['competencyframeworksrepository'] = 'Dépôt de référentiels de compétences';
$string['competencyframeworkupdated'] = 'Référentiel de compétences modifié.';
$string['competencyoutcome_complete'] = 'Marqué comme atteint';
$string['competencyoutcome_evidence'] = 'Joindre une preuve d\'acquis';
$string['competencyoutcome_none'] = 'Aucun';
$string['competencyoutcome_recommend'] = 'Recommander la compétence';
$string['competencypicker'] = 'Sélecteur de compétences';
$string['competencyrule'] = 'Règle de compétence';
$string['competencyupdated'] = 'Compétence modifiée';
$string['completeplan'] = 'Terminer ce plan de formation';
$string['completeplanconfirm'] = 'Définir le plan de formation « {$a} » comme terminé ? Le statut actuel des compétences de tous les utilisateurs sera enregistré et le plan de formation sera mis en lecture seule.';
$string['configurecoursecompetencysettings'] = 'Configurer les compétences du cours';
$string['configurescale'] = 'Configurer les barèmes';
$string['coursecompetencies'] = 'Compétences du cours';
$string['coursecompetencyratingsarenotpushedtouserplans'] = 'Les évaluations de compétences de ce cours n\'ont pas d\'influence sur les plans de formation.';
$string['coursecompetencyratingsarepushedtouserplans'] = 'Les évaluations de compétences de ce cours sont immédiatement reportées dans les plans de formation.';
$string['coursecompetencyratingsquestion'] = 'Lorsqu\'une compétence est évaluée, l\'évaluation doit-elle être reportée dans les plans de formation, ou seulement appliquée à ce cours ?';
$string['coursesusingthiscompetency'] = 'Cours liés à cette compétence';
$string['coveragesummary'] = '{$a->competenciescoveredcount} sur {$a->competenciescount} compétences sont couvertes ({$a->coveragepercentage} %)';
$string['createlearningplans'] = 'Créer des plans de formation';
$string['createplans'] = 'Créer des plans de formation';
$string['crossreferencedcompetencies'] = 'Compétences transversales';
$string['default'] = 'Défaut';
$string['deletecompetency'] = 'Supprimer la compétence « {$a} » ?';
$string['deletecompetencyframework'] = 'Supprimer le référentiel de compétences « {$a} » ?';
$string['deletecompetencyparenthasrule'] = 'Supprimer la compétence « {$a} » ? Cette action supprimera également la règle définie sur la compétence parente.';
$string['deleteplan'] = 'Supprimer le plan de formation « {$a} » ?';
$string['deleteplans'] = 'Supprimer les plans de formation';
$string['deletetemplate'] = 'Supprimer le modèle de plan de formation « {$a} » ?';
$string['deletetemplatewithplans'] = 'Ce modèle possède des plans de formations liés. Veuillez indiquer comment procéder pour ces plans.';
$string['deletethisplan'] = 'Supprimer ce plan de formation';
$string['deletethisuserevidence'] = 'Supprimer cette preuve d\'acquis';
$string['deleteuserevidence'] = 'Supprimer la preuve d\'acquis « {$a} » ?';
$string['description'] = 'Description';
$string['duedate'] = 'Délai d\'achèvement';
$string['duedate_help'] = 'La date à laquelle le plan de formation doit être achevé.';
$string['editcompetency'] = 'Modifier la compétence';
$string['editcompetencyframework'] = 'Modifier le référentiel de compétences';
$string['editplan'] = 'Modifier le plan de formation';
$string['editrating'] = 'Modifier l\'évaluation';
$string['edittemplate'] = 'Modifier le modèle de plan de formation';
$string['editthisplan'] = 'Modifier ce plan de formation';
$string['editthisuserevidence'] = 'Modifier cette preuve d\'acquis';
$string['edituserevidence'] = 'Modifier la preuve d\'acquis';
$string['evidence'] = 'Preuve';
$string['filterbyactivity'] = 'Filtrer les compétences par ressource ou activité';
$string['findcourses'] = 'Chercher des cours';
$string['frameworkcannotbedeleted'] = 'Le référentiel de compétences « {$a} » ne peut pas être supprimé';
$string['hidden'] = 'Caché';
$string['hiddenhint'] = '(caché)';
$string['idnumber'] = 'Identifiant';
$string['inheritfromframework'] = 'Hérité du référentiel (défaut)';
$string['itemstoadd'] = 'Éléments à ajouter';
$string['jumptocompetency'] = 'Aller à la compétence';
$string['jumptouser'] = 'Aller à l\'utilisateur';
$string['learningplancompetencies'] = 'Compétences du plan de formation';
$string['learningplans'] = 'Plans de formation';
$string['levela'] = 'Niveau {$a}';
$string['linkcompetencies'] = 'Lier les compétences';
$string['linkcompetency'] = 'Lier la compétence';
$string['linkedcompetencies'] = 'Compétences';
$string['linkedcourses'] = 'Cours liés';
$string['linkedcourseslist'] = 'Cours liés :';
$string['listcompetencyframeworkscaption'] = 'Liste des référentiels de compétences';
$string['listofevidence'] = 'Liste des preuves d\'acquis';
$string['listplanscaption'] = 'Liste des plans de formation';
$string['listtemplatescaption'] = 'Liste des modèles de plan de formations';
$string['loading'] = 'Chargement…';
$string['locatecompetency'] = 'Placer une compétence';
$string['managecompetenciesandframeworks'] = 'Gérer les compétences et les référentiels';
$string['modcompetencies'] = 'Compétences de cours';
$string['modcompetencies_help'] = 'Compétences de cours liées à cette activité';
$string['move'] = 'Déplacer';
$string['movecompetency'] = 'Déplacer la compétence';
$string['movecompetencyafter'] = 'Déplacer la compétence après « {$a} »';
$string['movecompetencyframework'] = 'Déplacer le référentiel de compétences';
$string['movecompetencytochildofselfwillresetrules'] = 'Le déplacement de la compétence supprimera sa propre règle ainsi que les règles définies sur la compétence parente et la compétence de destination. Voulez-vous continuer ?';
$string['movecompetencywillresetrules'] = 'Le déplacement de la compétence supprimera les règles définies sur la compétence parente et la compétence de destination. Voulez-vous continuer ?';
$string['moveframeworkafter'] = 'Déplacer le référentiel de compétences après « {$a} »';
$string['movetonewparent'] = 'Déplacer';
$string['myplans'] = 'Mes plans de formation';
$string['nfiles'] = '{$a} fichier(s)';
$string['noactivities'] = 'Aucune activité';
$string['nocompetencies'] = 'Aucune compétence n\'a été créée dans ce référentiel.';
$string['nocompetenciesinactivity'] = 'Aucune compétence n\'a été liée à cette activité ou ressource.';
$string['nocompetenciesincourse'] = 'Aucune compétence n\'a été liée à ce cours.';
$string['nocompetenciesinevidence'] = 'Aucune compétence n\'a été liée à cette preuve d\'acquis.';
$string['nocompetenciesinlearningplan'] = 'Aucune compétence n\'a été loué à ce plan de formation';
$string['nocompetenciesinlist'] = 'Aucune compétence n\'a été sélectionnée';
$string['nocompetenciesintemplate'] = 'Aucune compétence n\'a été liée à ce modèle de plan de formation.';
$string['nocompetencyframeworks'] = 'Aucun référentiel de compétences n\'a encore été créé.';
$string['nocompetencyselected'] = 'Aucune compétence sélectionnée';
$string['nocrossreferencedcompetencies'] = 'Aucune autre compétence n\'est transversale pour cette compétence.';
$string['noevidence'] = 'Aucune preuve d\'acquis';
$string['nofiles'] = 'Aucun fichier';
$string['nolinkedcourses'] = 'Aucun cours n\'est lié à cette compétence';
$string['noparticipants'] = 'Aucun participant trouvé';
$string['noplanswerecreated'] = 'Aucun plan de formation n\'a été créé.';
$string['notemplates'] = 'Aucun modèle de plan de formation n\'a encore été créé.';
$string['nourl'] = 'Aucune URL';
$string['nouserevidence'] = 'Aucune preuve d\'acquis n\'a encore été ajoutée.';
$string['nouserplans'] = 'Aucun plan de formation n\'a encore été créé.';
$string['oneplanwascreated'] = 'Un plan de formation a été créé.';
$string['outcome'] = 'Objectif';
$string['parentcompetency'] = 'Parent';
$string['parentcompetency_edit'] = 'Modifier le parent';
$string['parentcompetency_help'] = 'Définir la compétence parente sous laquelle cette compétence sera ajoutée. Cela peut être une autre compétence dans le même référentiel, soit le niveau supérieur du référentiel de compétences.';
$string['path'] = 'Chemin :';
$string['planapprove'] = 'Rendre actif';
$string['plancompleted'] = 'Plan de formation achevé';
$string['plancreated'] = 'Plan de formation créé';
$string['plandescription'] = 'Description';
$string['planname'] = 'Nom';
$string['plantemplate'] = 'Sélectionner un modèle de plan de formation';
$string['plantemplate_help'] = 'Un plan de formation créé à partir d\'un modèle contiendra la liste des compétences correspondant à ce modèle. Le modification effectuées au modèle selon répercutée dans tous les plans de formation créés à partir de ce modèle.';
$string['planunapprove'] = 'Remettre à l\'état de brouillon';
$string['planupdated'] = 'Plan de formation modifié';
$string['pluginname'] = 'Plans de formation';
$string['points'] = 'Points';
$string['pointsgivenfor'] = 'Points donnés pour « {$a} »';
$string['privacy:metadata'] = 'Le plugin Plans de formation n\'enregistre aucune donnée personnelle.';
$string['proficient'] = 'Compétence acquise';
$string['progress'] = 'Progrès';
$string['rate'] = 'Évaluer';
$string['ratecomment'] = 'Commentaire sur la preuve';
$string['rating'] = 'Évaluation';
$string['ratingaffectsonlycourse'] = 'L\'évaluation d\'une compétence ne modifie cette compétence que dans ce cours';
$string['ratingaffectsuserplans'] = 'L\'évaluation d\'une compétence modifie également cette compétence dans tous les plans de formation';
$string['reopenplan'] = 'Rouvrir le plan de formation';
$string['reopenplanconfirm'] = 'Rouvrir le plan de formation « {$a} » ? Dans ce cas, le statut des compétences utilisateur précédemment enregistré à l\'instant de l\'achèvement du plan sera supprimé et le plan sera à nouveau actif.';
$string['requestreview'] = 'Demander la validation';
$string['reviewer'] = 'Relecteur';
$string['reviewstatus'] = 'Statut de validation';
$string['savechanges'] = 'Enregistrer les modifications';
$string['scale'] = 'Barème';
$string['scale_help'] = 'Un barème détermine comment est mesuré le seuil d\'acquisition d\'une compétence. Après avoir choisi un barème, il est nécessaire de le configurer.

* L\'élément choisi pour le réglage « Défaut » est l\'évaluation qui sera attribuée lorsqu\'une compétence est atteinte de manière automatique.
* Le(s) élément(s) choisi(s) pour « Compétence acquise » indique(nt) la(les) valeur(s) qui marqueront les compétences comme acquises lors de l\'évaluation de la compétence.';
$string['scalevalue'] = 'Valeur du barème';
$string['search'] = 'Recherche…';
$string['selectcohortstosync'] = 'Sélectionner les cohortes à synchroniser';
$string['selectcompetencymovetarget'] = 'Sélectionner un emplacement vers lequel déplacer cette compétence :';
$string['selectedcompetency'] = 'Compétence sélectionnée';
$string['selectuserstocreateplansfor'] = 'Sélectionner les utilisateurs pour lesquels créer des plans de formation';
$string['sendallcompetenciestoreview'] = 'Envoyer toutes les compétences en validation pour la preuve d\'acquis « {$a} »';
$string['sendcompetenciestoreview'] = 'Envoyer les compétences pour validation';
$string['shortname'] = 'Nom';
$string['sitedefault'] = '(Réglage par défaut du site)';
$string['startreview'] = 'Commencer la validation';
$string['state'] = 'État';
$string['status'] = 'Statut';
$string['stopreview'] = 'Terminer la validation';
$string['stopsyncingcohort'] = 'Stopper la synchronisation des cohortes';
$string['taxonomies'] = 'Taxonomies';
$string['taxonomy_add_behaviour'] = 'Ajouter un comportement';
$string['taxonomy_add_competency'] = 'Ajouter une compétence';
$string['taxonomy_add_concept'] = 'Ajouter un concept';
$string['taxonomy_add_domain'] = 'Ajouter un domaine';
$string['taxonomy_add_indicator'] = 'Ajouter un indicateur';
$string['taxonomy_add_level'] = 'Ajouter un niveau';
$string['taxonomy_add_outcome'] = 'Ajouter un objectif';
$string['taxonomy_add_practice'] = 'Ajouter un entraînement';
$string['taxonomy_add_proficiency'] = 'Ajouter une aptitude';
$string['taxonomy_add_skill'] = 'Ajouter une habileté';
$string['taxonomy_add_value'] = 'Ajouter une valeur';
$string['taxonomy_edit_behaviour'] = 'Modifier un comportement';
$string['taxonomy_edit_competency'] = 'Modifier une compétence';
$string['taxonomy_edit_concept'] = 'Modifier un concept';
$string['taxonomy_edit_domain'] = 'Modifier un domaine';
$string['taxonomy_edit_indicator'] = 'Modifier un indicateur';
$string['taxonomy_edit_level'] = 'Modifier un niveau';
$string['taxonomy_edit_outcome'] = 'Modifier un objectif';
$string['taxonomy_edit_practice'] = 'Modifier un entraînement';
$string['taxonomy_edit_proficiency'] = 'Modifier une aptitude';
$string['taxonomy_edit_skill'] = 'Modifier une habileté';
$string['taxonomy_edit_value'] = 'Modifier une valeur';
$string['taxonomy_parent_behaviour'] = 'Comportement parent';
$string['taxonomy_parent_competency'] = 'Compétence parente';
$string['taxonomy_parent_concept'] = 'Concept parent';
$string['taxonomy_parent_domain'] = 'Domaine parent';
$string['taxonomy_parent_indicator'] = 'Indicateur parent';
$string['taxonomy_parent_level'] = 'Niveau parent';
$string['taxonomy_parent_outcome'] = 'Objectif parent';
$string['taxonomy_parent_practice'] = 'Entraînement parent';
$string['taxonomy_parent_proficiency'] = 'Aptitude parente';
$string['taxonomy_parent_skill'] = 'Habileté parente';
$string['taxonomy_parent_value'] = 'Valeur parente';
$string['taxonomy_selected_behaviour'] = 'Comportement sélectionné';
$string['taxonomy_selected_competency'] = 'Compétence sélectionnée';
$string['taxonomy_selected_concept'] = 'Concept sélectionné';
$string['taxonomy_selected_domain'] = 'Domaine sélectionné';
$string['taxonomy_selected_indicator'] = 'Indicateur sélectionné';
$string['taxonomy_selected_level'] = 'Niveau sélectionné';
$string['taxonomy_selected_outcome'] = 'Objectif sélectionné';
$string['taxonomy_selected_practice'] = 'Entraînement sélectionné';
$string['taxonomy_selected_proficiency'] = 'Aptitude sélectionnée';
$string['taxonomy_selected_skill'] = 'Habileté sélectionnée';
$string['taxonomy_selected_value'] = 'Valeur sélectionnée';
$string['template'] = 'Modèle de plan de formation';
$string['templatebased'] = 'Basé sur un modèle';
$string['templatecohortnotsyncedwhileduedateispassed'] = 'Les cohortes ne sont pas synchronisées si la date d\'échéance du modèle est passée.';
$string['templatecohortnotsyncedwhilehidden'] = 'Les cohortes ne sont pas synchronisées lorsque ce modèle est caché.';
$string['templatecompetencies'] = 'Compétences du modèle de plan de formation';
$string['templatecreated'] = 'Modèle de plan de formation créé';
$string['templatename'] = 'Nom';
$string['templates'] = 'Modèles de plan de formation';
$string['templateupdated'] = 'Modèle de plan de formation modifié';
$string['totalrequiredtocomplete'] = 'Total requis pour achever';
$string['unlinkcompetencycourse'] = 'Délier la compétence « {$a} » du cours ?';
$string['unlinkcompetencyplan'] = 'Délier la compétence « {$a} » du plan de formation ?';
$string['unlinkcompetencytemplate'] = 'Délier la compétence « {$a} » du modèle de plan de formation ?';
$string['unlinkplanstemplate'] = 'Délier les plans de formation de leur modèle';
$string['unlinkplantemplate'] = 'Délier du modèle de plan de formation';
$string['unlinkplantemplateconfirm'] = 'Délier le plan de formation « {$a} » de son modèle ? Toute modification au modèle ne sera plus appliquée au plan de formation. Cette action ne peut pas être annulée.';
$string['uponcoursecompletion'] = 'Lors de l\'achèvement du cours :';
$string['uponcoursemodulecompletion'] = 'Lors de l\'achèvement de l\'activité :';
$string['usercompetencyfrozen'] = 'Cet élément est maintenant gelé. Il reflète le statut de la compétence de l\'utilisateur lorsque son plan de formation a été marqué comme achevé.';
$string['userevidence'] = 'Preuve d\'acquis';
$string['userevidencecreated'] = 'Preuve d\'acquis créée';
$string['userevidencedescription'] = 'Description';
$string['userevidencefiles'] = 'Fichiers';
$string['userevidencename'] = 'Nom';
$string['userevidencesummary'] = 'Résumé';
$string['userevidenceupdated'] = 'Preuve d\'acquis modifiée';
$string['userevidenceurl'] = 'URL';
$string['userevidenceurl_help'] = 'L\'URL doit commencer par « http:// » ou « https:// ».';
$string['viewdetails'] = 'Afficher les détails';
$string['visible'] = 'Visible';
$string['visible_help'] = 'Un référentiel de compétences peut être caché, par exemple s\'il est en cours de modification ou de mise à jour.';
$string['when'] = 'Quand';
$string['xcompetencieslinkedoutofy'] = '{$a->x} compétences sur {$a->y} liées à des cours';
$string['xcompetenciesproficientoutofy'] = '{$a->x} compétences sur {$a->y} sont acquises';
$string['xcompetenciesproficientoutofyincourse'] = 'Vous avez acquis {$a->x} compétences sur {$a->y} dans ce cours.';
$string['xplanscompletedoutofy'] = '{$a->x} plans de formation sur {$a->y} achevés pour ce modèle';
