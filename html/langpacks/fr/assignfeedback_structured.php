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
 * Strings for component 'assignfeedback_structured', language 'fr', version '3.11'.
 *
 * @package     assignfeedback_structured
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['close'] = 'Fermer';
$string['criteria'] = 'Critères de feedback';
$string['criteria_help'] = 'Entrez un nom (et éventuellement une description) pour chaque critère sur lequel vous souhaitez formuler des commentaires. Tout critère non nommé sera ignoré. Tous les champs seront verrouillés une fois les commentaires reçus pour tous les critères.';
$string['criteriafieldsadd'] = 'Ajouter plus de critères';
$string['criteriaset'] = 'Ensemble de critères';
$string['criteriaset_help'] = 'Cliquez sur ce bouton pour sélectionner un ensemble de critères précédemment enregistré afin de configurer automatiquement les détails des critères ci-dessous.';
$string['criteriasetconfirmdelete'] = 'Voulez-vous vraiment effacer définitivement l\'ensemble de critères « {$a} » ?';
$string['criteriasetconfirmuse'] = 'Voulez-vous vraiment faire cela ? Cette opération écrasera les critères actuellement configurés pour ce devoir.';
$string['criteriasetname'] = 'Nom de groupe de critères';
$string['criteriasetname_help'] = 'Le nom d’un ensemble de critères doit être unique sur l’ensemble du site. Veuillez le choisir avec soin.';
$string['criteriasetnameedit'] = 'Éditer le nom de groupe de critères';
$string['criteriasetnameenter'] = 'Entrer un nom unique';
$string['criteriasetnameused'] = 'Malheureusement, il existe déjà un ensemble de critères nommé « {$a} ». Veuillez essayez un nom différent.';
$string['criteriasetnameusedtitle'] = 'Nom déjà utilisé';
$string['criteriasetnoname'] = 'Vous devez indiquer un nom pour l\'ensemble de critères.';
$string['criteriasetnonametitle'] = 'Aucun nom indiqué';
$string['criteriasetnotdeleted'] = 'Malheureusement, le critère défini « {$a} » n\'a pas pu être supprimé. Veuillez réessayer ou signaler cette erreur à votre administrateur.';
$string['criteriasetnotsaved'] = 'Malheureusement, les critères définis n\'ont pas pu être sauvegardés. Veuillez réessayer ou signaler cette erreur à votre administrateur.';
$string['criteriasetnotupdated'] = 'Malheureusement, les critères définis n\'ont pas pu être mis à jour. Veuillez réessayer ou signaler cette erreur à votre administrateur.';
$string['criteriasetpublish'] = 'Partager avec d\'autres utilisateurs';
$string['criteriasetpublish_help'] = 'Cochez cette case pour permettre à quiconque de faire une copie de ce groupe de critères. Par défaut, il n\'est disponible que pour vous.';
$string['criteriasetsave'] = 'Enregistrer le groupe de critères';
$string['criteriasetsave_help'] = 'Cliquez sur ce bouton et attribuez un nom unique à votre groupe de critères pour le copier facilement dans d\'autres devoirs.';
$string['criteriasetsaved'] = 'Groupe de critère enregistré';
$string['criteriasetsavedsuccess'] = 'Votre groupe de critères « {$a} » a été enregistré avec succès.';
$string['criteriasetselect'] = 'Sélectionner un groupe de critères…';
$string['criteriasetshared'] = 'Partagé';
$string['criteriasetsmanage'] = 'Gérer les groupes de critères';
$string['criteriasetsmanage_help'] = 'Cliquez sur ce bouton pour afficher et gérer vos propres groupes de critères enregistrés.';
$string['criteriasetsowned'] = 'Vos groupes de critères';
$string['criteriasetssaved'] = 'Enregistrer les groupes de critères';
$string['criteriasetsshared'] = 'Partager les groupes de critères';
$string['criteriasetsshowshared'] = 'Afficher les groupes de critères partagés';
$string['criteriasetupdated'] = 'Groupe de critères mis à jour';
$string['criteriasetupdatedsuccess'] = 'Votre groupe de critères a été mis à jour.';
$string['criteriasetuse'] = 'Utiliser ce groupe';
$string['criteriasetusesaved'] = 'Utiliser un groupe de critères enregistré';
$string['criteriaused'] = 'Les critères de ce devoir ne peuvent plus être modifiés, car certains feedbacks ont déjà été donnés.';
$string['criteriondesc'] = 'Description du critère {$a} (facultatif)';
$string['criterionname'] = 'Nom du critère {$a}';
$string['criteriontitle'] = '<span class="criterion-name">{$a->name} :</span> <span class="criterion-desc">{$a->desc}</span>';
$string['default'] = 'Activé par défaut';
$string['default_help'] = 'Si ce réglage est défini, cette méthode de feedback sera activée par défaut pour tous les nouveaux devoirs.';
$string['enabled'] = 'Feedbacks structurés';
$string['enabled_help'] = 'Si ce réglage est activé, l’enseignant sera en mesure de définir un nombre quelconque de critères sur lesquels fournir des feedbacks spécifiques.';
$string['escapetocancel'] = 'Échapper pour annuler';
$string['noownedsets'] = 'Vous n\'avez actuellement aucun groupe enregistré.';
$string['nopermissionstodelete'] = 'Désolé, mais vous ne disposez pas actuellement des autorisations nécessaires pour supprimer vos groupes de critères enregistrés.';
$string['nopermissionstomanage'] = 'Désolé, mais vous ne disposez pas actuellement des autorisations nécessaires pour gérer vos groupes de critères enregistrés.';
$string['nopermissionstopublish'] = 'Désolé, mais vous ne disposez pas actuellement des autorisations nécessaires pour partager vos groupes de critères enregistrés';
$string['nopermissionstosave'] = 'Désolé, mais vous ne disposez pas actuellement des autorisations nécessaires pour enregistrer vos groupes de critères enregistrés.';
$string['nopermissionstoupdate'] = 'Désolé, mais vous ne disposez pas actuellement des autorisations nécessaires pour mettre à jour vos groupes de critères enregistrés.';
$string['nosharedsets'] = 'Il n\'y a actuellement aucun groupe partagé disponible.';
$string['pluginname'] = 'Feedbacks structurés';
$string['privacy:metadata:assignmentid'] = 'ID du devoir';
$string['privacy:metadata:commentpurpose'] = 'Le texte du commentaire.';
$string['privacy:metadata:critdescpurpose'] = 'La description du critère auquel le commentaire se rapporte.';
$string['privacy:metadata:criterionpurpose'] = 'Le nom du critère auquel le commentaire se rapporte.';
$string['privacy:metadata:gradepurpose'] = 'L\'ID de la note associée au feedback.';
$string['privacy:metadata:tablesummary'] = 'Cela permet de stocker les commentaires des correcteurs en tant que feedback pour l’élève sur des aspects spécifiques de leur travail remis.';
$string['privacy:path'] = 'Feedback structuré';
$string['structured:manageowncriteriasets'] = 'Gérer vos groupes de critères enregistrés';
$string['structured:publishcriteriasets'] = 'Rendre les groupes de critères enregistrés disponibles pour les autres utilisateurs';
$string['structuredfilename'] = 'structured.html';
