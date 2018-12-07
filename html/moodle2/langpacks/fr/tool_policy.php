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
 * Strings for component 'tool_policy', language 'fr', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_policy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = 'Je confirme que j\'ai reçu une demande pour donner mon consentement pour un ou des utilisateurs.';
$string['acceptancecount'] = '{$a->agreedcount} sur {$a->policiescount}';
$string['acceptancenote'] = 'Remarques';
$string['acceptancepolicies'] = 'Politiques';
$string['acceptancessavedsucessfully'] = 'Les accords ont été enregistrés.';
$string['acceptancestatusoverall'] = 'Globalement';
$string['acceptanceusers'] = 'Utilisateurs';
$string['actions'] = 'Actions';
$string['activate'] = 'Définir le statut comme « Actif »';
$string['activateconfirm'] = '<p>Vous êtes sur le point d\'activer la politique « <em>{$a->name}</em> » et de faire de la version <em>{$a->revision}</em> la version actuelle.</p><p>Tous les utilisateurs devront accepter cette nouvelle version pour utiliser le site.</p>';
$string['activateconfirmyes'] = 'Activer';
$string['activating'] = 'Activation d\'une politique';
$string['agreed'] = 'Accord donné';
$string['agreedby'] = 'Accord donné par';
$string['agreedno'] = 'Consentement refusé';
$string['agreednowithlink'] = 'Consentement refusé ; cliquer pour donner votre consentement au nom de l\'utilisateur pour {$a}';
$string['agreednowithlinkall'] = 'Consentement refusé ; cliquer pour donner votre consentement au nom de l\'utilisateur pour toutes les politiques';
$string['agreedon'] = 'Accord donné le';
$string['agreedyes'] = 'Accord donné';
$string['agreedyesonbehalf'] = 'Consentement donné au nom de l\'utilisateur';
$string['agreedyesonbehalfwithlink'] = 'Consentement donné au nom de l\'utilisateur ; cliquer pour révoquer le consentement pour {$a}';
$string['agreedyesonbehalfwithlinkall'] = 'Consentement donné au nom de l\'utilisateur ; cliquer pour révoquer le consentement pour toutes les politiques';
$string['agreedyeswithlink'] = 'Consentement donné ; cliquer pour révoquer le consentement pour {$a}';
$string['agreedyeswithlinkall'] = 'Consentement donné ; cliquer pour révoquer le consentement pour toutes les politiques';
$string['agreepolicies'] = 'Veuillez accepter les politiques suivantes';
$string['backtotop'] = 'Retour en haut';
$string['consentbulk'] = 'Consentement';
$string['consentdetails'] = 'Consentement donné au nom de l\'utilisateur';
$string['consentpagetitle'] = 'Consentement';
$string['contactdpo'] = 'Pour toute question en lien avec les politiques, veuillez contacter le Délégué à la protection des données.';
$string['dataproc'] = 'Traitement des données personnelles';
$string['deleteconfirm'] = '<p>Voulez-vous vraiment supprimer la politique « <em>{$a->name}</em> »?</p><p>Cette opération ne peut pas être annulée.</p>';
$string['deleting'] = 'Suppression d\'une version';
$string['editingpolicydocument'] = 'Modification de politique';
$string['errorpolicyversionnotfound'] = 'Il n\'y a pas de version de politique avec cet identifiant.';
$string['errorsaveasdraft'] = 'Une modification mineure ne peut pas être enregistrée comme brouillon';
$string['errorusercantviewpolicyversion'] = 'L\'utilisateur n\'a pas accès à cette version de la politique.';
$string['event_acceptance_created'] = 'Accord de politique créé';
$string['event_acceptance_updated'] = 'Accord de politique modifié';
$string['filtercapabilityno'] = 'Permission : ne peut pas donner son accord';
$string['filtercapabilityyes'] = 'Permission : peut donner son accord';
$string['filterplaceholder'] = 'Rechercher un terme ou sélectionner un filtre';
$string['filterpolicy'] = 'Politique : {$a}';
$string['filterrevision'] = 'Version : {$a}';
$string['filterrevisionstatus'] = 'Version : {$a->name} ({$a->status})';
$string['filterrole'] = 'Rôle : {$a}';
$string['filters'] = 'Filtres';
$string['filterstatusno'] = 'Statut : pas accepté';
$string['filterstatusyes'] = 'Statut : accepté';
$string['guestconsent:continue'] = 'Continuer';
$string['guestconsentmessage'] = 'Si vous continuez à consulter ce site web, vous acceptez nos politiques :';
$string['iagree'] = 'J\'accepte {$a}';
$string['iagreetothepolicy'] = 'Donner son consentement au nom de l\'utilisateur';
$string['inactivate'] = 'Définir le statut comme « Inactif »';
$string['inactivating'] = 'Désactivation d\'une politique';
$string['inactivatingconfirm'] = '<p>Vous êtes sur le point de désactiver la politique « <em>{$a->name}</em> », version <em>{$a->revision}</em>.</p>';
$string['inactivatingconfirmyes'] = 'Désactiver';
$string['invalidversionid'] = 'Il n\'y a pas de politique avec cet identifiant !';
$string['irevokethepolicy'] = 'Révoquer le consentement';
$string['managepolicies'] = 'Gérer les politiques';
$string['minorchange'] = 'Modification mineur';
$string['minorchangeinfo'] = 'Une modification mineure ne change pas le sens de la politique. Les utilisateurs ne doivent pas accepter à nouveau la politique si la modification est marquée comme mineure.';
$string['movedown'] = 'Déplacer vers le bas';
$string['moveup'] = 'Déplacer vers le haut';
$string['mustagreetocontinue'] = 'Avant de continuer, vous devez accepter toutes ces politiques.';
$string['newpolicy'] = 'Nouvelle politique';
$string['newversion'] = 'Nouvelle version';
$string['nofiltersapplied'] = 'Aucun filtre appliqué';
$string['nopermissiontoagreedocs'] = 'Pas de permission d\'accepter les politiques';
$string['nopermissiontoagreedocsbehalf'] = 'Pas de permission d\'accepter les politiques au nom de cet utilisateur';
$string['nopermissiontoagreedocsbehalf_desc'] = 'Désolé, vous n\'avez pas les autorisations requises pour accepter les politiques suivantes au nom de {$a} :';
$string['nopermissiontoagreedocscontact'] = 'Pour plus d\'aide, veuillez contacter';
$string['nopermissiontoagreedocs_desc'] = 'Désolé, vous n\'avez pas les autorisations requises pour accepter les politiques.<br />Vous ne pourrez pas utiliser ce site tant que les politiques suivantes ne sont pas acceptées :';
$string['nopermissiontoviewpolicyversion'] = 'Vous n\'avez pas la permission de consulter cette version de la politique.';
$string['nopolicies'] = 'Il n\'y a pas de politique avec version active pour les utilisateurs enregistrés.';
$string['pluginname'] = 'Politiques';
$string['policiesagreements'] = 'Politiques et accords';
$string['policy:accept'] = 'Accepter les politiques';
$string['policy:acceptbehalf'] = 'Donner le consentement aux politiques au nom de quelqu\'un d\'autre';
$string['policydocaudience'] = 'Consentement utilisateur';
$string['policydocaudience0'] = 'Tous les utilisateurs';
$string['policydocaudience1'] = 'Utilisateurs authentifiés';
$string['policydocaudience2'] = 'Utilisateurs anonymes';
$string['policydoccontent'] = 'Politique complète';
$string['policydochdrpolicy'] = 'Politique';
$string['policydochdrversion'] = 'Version du document';
$string['policydocname'] = 'Nom';
$string['policydocrevision'] = 'Version';
$string['policydocsummary'] = 'Résumé';
$string['policydocsummary_help'] = 'Ce texte fournit un résumé de la politique, de préférence sous une forme simplifiée et facilement compréhensible, dans un langage simple et accessible.';
$string['policydoctype'] = 'Type';
$string['policydoctype0'] = 'Politique de site';
$string['policydoctype1'] = 'Politique de confidentialité';
$string['policydoctype2'] = 'Politique de tiers';
$string['policydoctype99'] = 'Autre politique';
$string['policy:managedocs'] = 'Gérer les politiques';
$string['policyversionacceptedinbehalf'] = 'Le consentement à cette politique a été donné en votre nom.';
$string['policyversionacceptedinotherlang'] = 'Le consentement à cette version de la politique a été donné dans une langue différente.';
$string['policy:viewacceptances'] = 'Consulter les rapports des accords des utilisateurs';
$string['previousversions'] = '{$a} versions antérieures';
$string['privacy:metadata:acceptances'] = 'Informations sur les accord des utilisateurs aux politiques du site';
$string['privacy:metadata:acceptances:lang'] = 'La langue actuelle était affichée lors du consentement à la politique.';
$string['privacy:metadata:acceptances:note'] = 'Tous les commentaires ajoutés par un utilisateur lorsqu\'il a donné son consentement au nom d\'un autre utilisateur';
$string['privacy:metadata:acceptances:policyversionid'] = 'L\'identifiant de la version de la politique acceptée.';
$string['privacy:metadata:acceptances:status'] = 'Le statut de l\'accord.';
$string['privacy:metadata:acceptances:timecreated'] = 'La date et l\'heure à laquelle l\'utilisateur a accepté la politique';
$string['privacy:metadata:acceptances:timemodified'] = 'La date et l\'heure à laquelle l\'utilisateur a modifié son consentement';
$string['privacy:metadata:acceptances:userid'] = 'L\'identifiant de l\'utilisateur qui a accepté la politique.';
$string['privacy:metadata:acceptances:usermodified'] = 'L\'identifiant de l\'utilisateur qui a accepté la politique, si le consentement est fait au nom d\'un autre utilisateur.';
$string['privacysettings'] = 'Réglages de confidentialité';
$string['readpolicy'] = 'Veuillez consulter notre {$a}';
$string['refertofullpolicytext'] = 'Veuillez vous référer à la {$a} complète pour consulter le texte.';
$string['revokeacknowledgement'] = 'Je confirme que j\'ai reçu une demande de révoquer le consentement au nom d\'un ou de plusieurs utilisateurs.';
$string['revokedetails'] = 'Révoquer le consentement';
$string['save'] = 'Enregistrer';
$string['saveasdraft'] = 'Enregistrer comme brouillon';
$string['selectpolicyandversion'] = 'Utiliser le filtre ci-dessus pour sélectionner la politique et/ou la version';
$string['selectuser'] = 'Sélection l\'utilisateur {$a}';
$string['selectusersforconsent'] = 'Sélectionner des utilisateurs pour donner le consentement au nom de';
$string['settodraft'] = 'Créer un brouillon';
$string['status'] = 'Statut de la politique';
$string['status0'] = 'Brouillon';
$string['status1'] = 'Active';
$string['status2'] = 'Inactive';
$string['statusinfo'] = 'Une politique ayant le statut « Active » doit être acceptée par les utilisateurs, soit lors de leur première connexion, soit lors de leur prochaine connexion si ce sont des utilisateurs existants.';
$string['steppolicies'] = 'Politique {$a->numpolicy} sur {$a->totalpolicies}';
$string['useracceptancecount'] = '{$a->agreedcount} sur {$a->userscount} ({$a->percent}%)';
$string['useracceptancecountna'] = 'Non disponible';
$string['useracceptances'] = 'Accords des utilisateurs';
$string['userpolicysettings'] = 'Politiques';
$string['usersaccepted'] = 'Accords';
$string['viewarchived'] = 'Consulter les versions antérieures';
$string['viewconsentpageforuser'] = 'Consultation de cette page au nom de {$a}';
