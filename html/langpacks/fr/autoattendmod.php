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
 * Strings for component 'autoattendmod', language 'fr', version '3.11'.
 *
 * @package     autoattendmod
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoattendmod:addinstance'] = 'Ajouter un nouveau module de présence automatique';
$string['autoattendmod:receivemail'] = 'Recevoir une notification par courriel';
$string['autoattendmod:view'] = 'Afficher le module';
$string['autoattendmod:viewreports'] = 'Afficher les rapports';
$string['autoattendmod_options'] = 'Options du module de présence automatique';
$string['backup_block'] = 'Lorsque ce cours est sauvegardé, les données de présence sont sauvegardées par le bloc présence automatique.';
$string['backup_block_help'] = 'Dans cette version, le bloc présence automatique gère les données de présence. Même si vous supprimez un module présence automatique, les données de présence du cours restent dans la base de données.';
$string['backup_block_title'] = 'Sauvegarde des données de présence';
$string['description'] = 'Description';
$string['email_allrep'] = 'Envoyer par courriel tous les rapports aux enseignants';
$string['email_allrep_help'] = 'Si le courriel est activé et que cette case est cochée, les rapports de présence sont envoyés tous les jours par courriel ; si elle n\'est pas cochée, un seul rapport de présence est envoyé';
$string['email_allrep_title'] = 'Envoyer tous les rapports';
$string['email_enable'] = 'Activer la notification par courriel des données de présence pour les enseignants';
$string['email_enable_help'] = 'Si cette case est cochée, à la fin d\'une session, les données de présence sont envoyées aux enseignants par courriel. Cependant, vous devez ajouter la capacité autoattendmod:receivemail au rôle « Enseignant ».';
$string['email_enable_title'] = 'Résultat de la notification pour les enseignants';
$string['email_key'] = 'Activer la notification par courriel du mot-clef de présence aux enseignants';
$string['email_key_help'] = 'Si cette case est cochée, lorsqu\'une session a commencé, le mot-clef de présence est envoyé aux enseignants par courriel. Cependant, vous devez ajouter la capacité autoattendmod:receivemail au rôle « Enseignant ».';
$string['email_key_title'] = 'Mot-clef de notification pour les enseignants';
$string['email_user'] = 'Activer la notification par courriel des données de présence pour les étudiants';
$string['email_user_help'] = 'Si cette case est cochée, lorsque la participation des étudiants change, une notification est envoyée à l\'étudiant par courriel. Cependant, vous devez ajouter la capacité autoattendmod:receivemail au rôle « Étudiant ».';
$string['email_user_title'] = 'Notification aux étudiants';
$string['excelver_disp'] = 'Utiliser l\'ancien format Excel (Excel2007) lors du téléchargement';
$string['excelver_disp_help'] = 'Si vous ne parvenez pas à télécharger le rapport Excel, veuillez vérifier ceci.';
$string['excelver_title'] = 'Utiliser l\'ancien Excel2007';
$string['feedback_disp'] = 'Afficher le lien de feedback';
$string['feedback_disp_help'] = 'Si cette case est décochée, les liens vers le feedback ne s\'affichent pas';
$string['feedback_title'] = 'Lien de feedback';
$string['firstinstallblock'] = 'Veuillez d\'abord installer le bloc présence automatique.';
$string['firstinstanceblock'] = 'Veuillez d\'abord ajouter le bloc présence automatique dans ce cours.';
$string['misconfigured'] = 'Le cours n\'est pas configuré correctement';
$string['modidincorrect'] = 'L\'ID de l\'activité du cours est incorrect';
$string['modincorrect'] = 'L\'activité du cours est incorrecte. <br /> Il est possible que le bloc Présence automatique ne soit pas installé.';
$string['modulename'] = 'Présence automatique';
$string['modulename_help'] = 'Vous ne pouvez ajouter qu\'une seule activité de présence automatique par cours. Si vous supprimez cette activité, cela n\'affectera pas les présences ! <br />
Vous pouvez utiliser cette activité seulement avec le bloc Présence automatique. Merci d\'ajouter un bloc Présence automatique avant d\'ajouter cette activité. <br />
Cette activité prend en compte la saisie semi-automatique des présences, et inclue des notes dans le carnet de notes général du cours.';
$string['modulenameplural'] = 'Présence automatique';
$string['modulenamesimple'] = 'Présence automatique';
$string['name'] = 'Nom';
$string['onlyonemodule'] = 'Une seule instance du module de présence automatique peut être créée par cours.';
$string['permit_homeroom'] = 'Autoriser l\'accès à partir du module Homeroom';
$string['permit_homeroom_help'] = 'Si cette case est cochée, le module Homeroom n\'accède pas à ce module/bloc de présence automatique';
$string['permit_homeroom_title'] = 'Pour le module Homeroom';
$string['pluginadministration'] = 'Administration des présensences automatiques';
$string['pluginname'] = 'Activité Présence automatique';
$string['session_num'] = 'Nombre de sessions';
$string['summertime_disp'] = 'L\'heure d\'été peut être réglée lors des sessions.';
$string['summertime_disp_help'] = 'Vous pouvez régler l\'heure d\'été pour certaines sessions.';
$string['summertime_title'] = 'Utiliser l\'heure d\'été';
$string['use_item'] = 'utiliser {$a}';
$string['username_manage'] = 'Gestion du nom d\'utilisateur';
