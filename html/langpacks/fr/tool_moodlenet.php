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
 * Strings for component 'tool_moodlenet', language 'fr', version '4.4'.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingaresource'] = 'Ajout de contenu depuis MoodleNet';
$string['aria:enterprofile'] = 'Saisir votre ID de profil MoodleNet';
$string['aria:footermessage'] = 'Parcourir les contenus de MoodleNet';
$string['autoenablenotification'] = '<p>À partir de Moodle 4.0, l’intégration de <a href="https://moodle.net/">MoodleNet</a> est activée par défaut dans les fonctions avancées. Les utilisateurs ayant la capacité de créer et de gérer des activités peuvent parcourir MoodleNet dans le sélecteur d’activités et importer des ressources MoodleNet dans leurs cours.</p><p>Si désiré, une instance différente de MoodleNet peut être indiquée dans les <a href="{$a->settingslink}">réglages de MoodleNet interne</a>.</p>';
$string['autoenablenotification_subject'] = 'Réglage par défaut de MoodleNet modifié.';
$string['browsecontentmoodlenet'] = 'Ou parcourir les contenus de MoodleNet';
$string['clearsearch'] = 'Réinitialiser la recherche';
$string['connectandbrowse'] = 'Connectez-vous et parcourez :';
$string['defaultmoodlenet'] = 'URL MoodleNet';
$string['defaultmoodlenet_desc'] = 'L’URL de l’instance MoodleNet disponible via le sélecteur d’activités.';
$string['defaultmoodlenetname'] = 'Nom de l’instance de MoodleNet';
$string['defaultmoodlenetname_desc'] = 'Le nom de l’instance MoodleNet disponible via le sélecteur d’activités.';
$string['defaultmoodlenetnamevalue'] = 'MoodleNet Central';
$string['enablemoodlenet'] = 'Activer l’intégration de MoodleNet (interne)';
$string['enablemoodlenet_desc'] = 'Si ce réglage est activé, un utilisateur ayant les permissions requises pour créer et gérer des activités peut parcourir MoodleNet depuis le sélecteur d’activités et importer des ressources de MoodleNet dans ses cours. Un utilisateur ayant les permissions requises pour restaurer les sauvegardes peut également sélectionner des fichiers de sauvegarde sur MoodleNet et les restaurer dans Moodle.';
$string['errorduringdownload'] = 'Une erreur est survenue lors du téléchargement du fichier : {$a}';
$string['footermessage'] = 'Ou parcourir les contenus de';
$string['forminfo'] = 'Votre ID de profil MoodleNet sera enregistré automatiquement dans votre profil sur ce site.';
$string['importconfirm'] = 'Vous allez importer le contenu « {$a->resourcename} ({$a->resourcetype}) » dans le cours « {$a->coursename} ». Voulez-vous vraiment continuer ?';
$string['importconfirmnocourse'] = 'Vous allez importer le contenu « {$a->resourcename} ({$a->resourcetype}) » dans votre site. Voulez-vous vraiment continuer ?';
$string['importformatselectguidingtext'] = 'Dans quel format voulez-vous ajouter le contenu « {$a->name} ({$a->type}) » à votre cours ?';
$string['importformatselectheader'] = 'Sélectionner le format d’affichage du contenu';
$string['inputhelp'] = 'Ou, si vous avez déjà un compte MoodleNet, copier l’ID de votre profil MoodleNet et collez-le ici :';
$string['instancedescription'] = 'MoodleNet est une plateforme de média social ouverte pour enseignants et formateurs, qui met l’accent sur la curation collaborative de collections de ressources ouvertes.';
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-example@moodle.net';
$string['invalidmoodlenetprofile'] = '{$userprofile} n’est pas formaté correctement';
$string['missinginvalidpostdata'] = 'L’information de ressource de MoodleNet est soit manquante, soit dans un format incorrect. Si cela se reproduit, veuillez contacter l’administrateur du site.';
$string['mnetprofile'] = 'Profil MoodleNet';
$string['mnetprofiledesc'] = '<p>Indiquez ici les informations de votre profil MoodleNet à transférer vers votre profil lorsque vous visitez MoodleNet.</p>';
$string['moodlenetnotenabled'] = 'L’intégration avec MoodleNet doit être activée dans Administration du site > MoodleNet pour que les importations de ressources puissent être traitées.';
$string['moodlenetsettings'] = 'Réglages MoodleNet interne';
$string['notification'] = 'Vous allez importer le contenu « {$a->name} ({$a->type}) » dans votre site. Sélectionnez le cours auquel il doit être ajouté ou <a href="{$a->cancellink}">annulez l’importation</a>.';
$string['pluginname'] = 'MoodleNet';
$string['privacy:metadata'] = 'L’outil MoodleNet n’enregistre aucune donnée personnelle. Il facilite simplement la communication avec MoodleNet.';
$string['profilevalidationerror'] = 'Un problème est survenu lors de la validation de votre ID de profil MoodleNet';
$string['profilevalidationfail'] = 'Veuillez saisir un ID de profil MoodleNet valide';
$string['profilevalidationpass'] = 'Excellent !';
$string['removedmnetprofilenotification'] = 'En raison de modifications récentes sur la plateforme MoodleNet, les utilisateurs ayant déjà enregistré leur ID de profil MoodleNet sur le site doivent saisir un ID de profil dans son nouveau format pour s’authentifier sur MoodleNet.';
$string['removedmnetprofilenotification_subject'] = 'Modification de format de l’ID de profil MoodleNet';
$string['saveandgo'] = 'Enregistrer et continuer';
$string['searchcourses'] = 'Rechercher des cours';
$string['selectpagetitle'] = 'Sélectionner une page';
$string['uploadlimitexceeded'] = 'La taille du fichier {$a->filesize} dépasse la taille maximale de {$a->uploadlimit} octets autorisée pour l’utilisateur.';
