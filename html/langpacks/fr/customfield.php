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
 * Strings for component 'customfield', language 'fr', version '4.4'.
 *
 * @package     customfield
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Action';
$string['addingnewcustomfield'] = 'Ajout d’un nouveau {$a}';
$string['addnewcategory'] = 'Ajouter une catégorie';
$string['afterfield'] = 'Après le champ';
$string['categorynotfound'] = 'Catégorie non trouvée';
$string['checked'] = 'Coché';
$string['commonsettings'] = 'Général';
$string['componentsettings'] = 'Réglages du composant';
$string['confirmdeletecategory'] = 'Voulez-vous vraiment supprimer cette catégorie ? Tous les champs dans cette catégorie seront également supprimés, ainsi que toutes les données qu’ils contiennent. Cette opération ne peut pas être annulée.';
$string['confirmdeletefield'] = 'Voulez-vous vraiment supprimer ce champ et toutes les données qu’il contient ? Cette opération ne peut pas être annulée.';
$string['createnewcustomfield'] = 'Ajouter un champ personnalisé';
$string['customfield'] = 'Champ personnalisé';
$string['customfielddata'] = 'Données des champs personnalisés';
$string['customfields'] = 'Champs personnalisés';
$string['defaultvalue'] = 'Valeur par défaut';
$string['description'] = 'Description';
$string['description_help'] = 'La description est affichée dans le formulaire au-dessous du champ.';
$string['edit'] = 'Modifier';
$string['editcategoryname'] = 'Modifier le nom de catégorie';
$string['editingfield'] = 'Modification de {$a}';
$string['errorfieldtypenotfound'] = 'Type de champ {$a} non trouvé';
$string['erroruniquevalues'] = 'Cette valeur est déjà utilisée.';
$string['eventcategorycreated'] = 'Catégorie de champs personnalisés créée';
$string['eventcategorydeleted'] = 'Catégorie de champs personnalisés supprimée';
$string['eventcategoryupdated'] = 'Catégorie de champs personnalisés modifiée';
$string['eventfieldcreated'] = 'Champ personnalisé créé';
$string['eventfielddeleted'] = 'Champ personnalisé supprimé';
$string['eventfieldupdated'] = 'Champ personnalisé modifié';
$string['fieldname'] = 'Nom';
$string['fieldnotfound'] = 'Champ non trouvé';
$string['fieldshortname'] = 'Nom abrégé';
$string['formfieldcheckshortname'] = 'Ce nom abrégé existe déjà';
$string['invalidshortnameerror'] = 'Le nom abrégé ne peut comporter que des caractères alphanumériques bas de casse et des caractères souligné (_).';
$string['isdataunique'] = 'Donnée unique';
$string['isdataunique_help'] = 'Ce réglage détermine si la valeur saisie doit être unique et n’avoir pas été saisie précédemment.';
$string['isfieldrequired'] = 'Requis';
$string['isfieldrequired_help'] = 'Un champ requis est un champ qui doit être rempli avec une valeur avant d’envoyer le formulaire.';
$string['link'] = 'Lien';
$string['linktarget'] = 'Cible du lien';
$string['modify'] = 'Modifier';
$string['movecategory'] = 'Déplacer « {$a} »';
$string['movefield'] = 'Déplacer « {$a} »';
$string['no'] = 'Non';
$string['nocategories'] = 'Il n’y a pas de champ personnalisé, ni de catégorie.';
$string['nopermissionconfigure'] = 'Vous n’avez pas les permissions requises pour configurer des champs ici.';
$string['notchecked'] = 'Non coché';
$string['otherfields'] = 'Autres champs';
$string['otherfieldsn'] = 'Autres champs {$a}';
$string['privacy:metadata:customfield_data'] = 'Représente des données de champ personnalisé enregistré dans une contexte';
$string['privacy:metadata:customfield_data:charvalue'] = 'Valeur de la donnée, lorsque c’est un caractère';
$string['privacy:metadata:customfield_data:contextid'] = 'L’identifiant du contexte dans lequel les données ont été enregistrées';
$string['privacy:metadata:customfield_data:decvalue'] = 'Valeur de la donnée, lorsque c’est un nombre décimal';
$string['privacy:metadata:customfield_data:fieldid'] = 'Identifiant de la définition du champ';
$string['privacy:metadata:customfield_data:instanceid'] = 'Identifiant de l’instance associée aux données';
$string['privacy:metadata:customfield_data:intvalue'] = 'Valeur de la donnée, lorsque c’est un entier';
$string['privacy:metadata:customfield_data:shortcharvalue'] = 'Valeur de la donnée, lorsque c’est un caractère court';
$string['privacy:metadata:customfield_data:timecreated'] = 'Date et heure de la création des données';
$string['privacy:metadata:customfield_data:timemodified'] = 'Date et heure de la dernière modification des données';
$string['privacy:metadata:customfield_data:value'] = 'Valeur de la donnée, lorsque c’est du texte';
$string['privacy:metadata:customfield_data:valueformat'] = 'Le format de la valeur, lorsque c’est du texte';
$string['privacy:metadata:customfield_data:valuetrust'] = 'Le niveau de confiance de la valeur, quand c’est du texte';
$string['privacy:metadata:customfieldpluginsummary'] = 'Champs pour divers composants';
$string['privacy:metadata:filepurpose'] = 'Fichier annexé aux données du champ personnalisé';
$string['shortname'] = 'Nom abrégé';
$string['shortname_help'] = 'Le nom abrégé du champ doit être unique et ne peut comporter que des caractères alphanumériques bas de casse, des chiffres et des caractères souligné (_). Il n’est affiché nulle part sur le site, mais peut être utilisé pour la synchronisation avec des systèmes externes ou dans des services web.';
$string['showdate'] = 'Afficher la date';
$string['specificsettings'] = 'Réglages spécifiques';
$string['therearenofields'] = 'Il n’y a pas de champ dans cette catégorie';
$string['totopofcategory'] = 'Dans la catégorie du haut {$a}';
$string['type'] = 'Type';
$string['unknownhandler'] = 'Impossible de trouver un gestionnaire pour les champs personnalisés du composant {$a->component} et la zone {$a->area}.';
$string['yes'] = 'Oui';
