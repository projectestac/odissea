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
 * Strings for component 'cohort', language 'fr', branch 'MOODLE_32_STABLE'
 *
 * @package   cohort
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Ajouter une cohorte';
$string['allcohorts'] = 'Toutes les cohortes';
$string['anycohort'] = 'Tout';
$string['assign'] = 'Ajouter membres';
$string['assigncohorts'] = 'Attribuer des membres à des cohortes';
$string['assignto'] = 'Membres de la cohorte « {$a} »';
$string['backtocohorts'] = 'Retour aux cohortes';
$string['bulkadd'] = 'Ajouter à la cohorte';
$string['bulknocohort'] = 'Aucune cohorte disponible';
$string['categorynotfound'] = 'Soit la catégorie {$a} est introuvable, soit vous n\'avez pas l\'autorisation d\'y créer une cohorte. Le contexte par défaut sera utilisé.';
$string['cohort'] = 'Cohorte';
$string['cohorts'] = 'Cohortes';
$string['cohortsin'] = '{$a} : cohortes disponibles';
$string['component'] = 'Source';
$string['contextnotfound'] = 'Soit le contexte {$a} est introuvable, soit vous n\'avez pas l\'autorisation d\'y créer une cohorte. Le contexte par défaut sera utilisé.';
$string['csvcontainserrors'] = 'Des erreurs ont été détectées dans les données CSV. Voir les détails ci-dessous.';
$string['csvcontainswarnings'] = 'Des avertissements ont été émis lors de l\'analyse des données CSV. Voir les détails ci-dessous.';
$string['csvextracolumns'] = 'Les colonnes <b>{$a}</b> seront ignorées.';
$string['currentusers'] = 'Utilisateurs actuels';
$string['currentusersmatching'] = 'Utilisateurs actuels correspondant à';
$string['defaultcontext'] = 'Contexte par défaut';
$string['delcohort'] = 'Supprimer cohorte';
$string['delconfirm'] = 'Voulez-vous vraiment supprimer la cohorte « {$a} »?';
$string['description'] = 'Description';
$string['displayedrows'] = '{$a->displayed} rangées affichées sur {$a->total}.';
$string['duplicateidnumber'] = 'Une cohorte de même identifiant existe déjà';
$string['editcohort'] = 'Modifier cohorte';
$string['editcohortidnumber'] = 'Modifier l\'Id de la cohorte';
$string['editcohortname'] = 'Modifier le nom de la cohorte';
$string['eventcohortcreated'] = 'Cohorte créée';
$string['eventcohortdeleted'] = 'Cohorte supprimée';
$string['eventcohortmemberadded'] = 'Utilisateur ajouté à une cohorte';
$string['eventcohortmemberremoved'] = 'Utilisateur retiré d\'une cohorte';
$string['eventcohortupdated'] = 'Cohorte modifiée';
$string['external'] = 'Cohorte externe';
$string['idnumber'] = 'Identifiant cohorte';
$string['memberscount'] = 'Effectif de la cohorte';
$string['name'] = 'Nom';
$string['namecolumnmissing'] = 'Il y a un problème dans le format du fichier CSV. Veuillez vérifier qu\'il comporte les noms des colonnes.';
$string['namefieldempty'] = 'Le nom du champ ne peut pas être vide';
$string['newidnumberfor'] = 'Nouvel identifiant pour la cohorte {$a}';
$string['newnamefor'] = 'Nouveau nom pour la cohorte {$a}';
$string['nocomponent'] = 'Création manuelle';
$string['potusers'] = 'Utilisateurs potentiels';
$string['potusersmatching'] = 'Utilisateurs potentiels correspondants';
$string['preview'] = 'Prévisualisation';
$string['removeuserwarning'] = 'En retirant des utilisateurs de cohortes, la désinscription de ces utilisateurs de plusieurs cours pourrait survenir. Il pourrait s\'ensuivre la suppression de réglages utilisateur, de notes, d\'affiliation à des groupes et tout autre information utilisateur dans les cours affectés.';
$string['search'] = 'Rechercher';
$string['searchcohort'] = 'Rechercher dans la cohorte';
$string['selectfromcohort'] = 'Sélectionner des membres de la cohorte';
$string['systemcohorts'] = 'Cohortes système';
$string['unknowncohort'] = 'Cohorte inconnue ({$a}) !';
$string['uploadcohorts'] = 'Déposer des cohortes';
$string['uploadcohorts_help'] = 'Des cohortes peuvent être déposées au moyen d\'un fichier texte. Le format de ce fichier doit répondre aux critères ci-dessous :

* chaque ligne du fichier contient un enregistrement ;
* chaque enregistrement est une série de données séparées par une virgule ou un autre délimiteur ;
* un seul champ est obligatoire, dénommé <i>name</i> ;
* les autres champs sont optionnels, et sont dénommés <i>idnumber</i>, <i>description</i>, <i>descriptionformat</i>, <i>visible</i>, <i>context</i>, <i>category</i>, <i>category_id</i>, <i>category_idnumber</i>, <i>category_path</i>.';
$string['uploadedcohorts'] = '{$a} cohortes déposées';
$string['useradded'] = 'Utilisateur ajouté à la cohorte « {$a} »';
$string['visible'] = 'Visible';
$string['visible_help'] = 'Les cohortes peuvent être vues par les utilisateurs disposant de la capacité « moodle/cohort:view » dans le contexte de la cohorte.<br />
Les cohortes visibles peuvent aussi être vues par les utilisateurs dans les cours enfants.';
