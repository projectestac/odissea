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
 * Strings for component 'enrol_auto', language 'fr', version '4.1'.
 *
 * @package     enrol_auto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auto:config'] = 'Configurer les instances d\'inscription automatique';
$string['auto:manage'] = 'Gérer les utilisateurs inscrits';
$string['auto:unenrol'] = 'Désinscrire les utilisateurs du cours';
$string['auto:unenrolself'] = 'Se désinscrire du cours';
$string['courseview'] = 'Affichage du cours';
$string['customwelcomemessage'] = 'Message de bienvenue personnalisé';
$string['customwelcomemessage_help'] = 'Un message de bienvenue personnalisé peut être ajouté en tant que texte pur ou en utilisant le format automatique de Moodle, incluant des balises HTML et des balises multilingues.

Les variables prédéfinies suivantes peuvent être incluses dans le message :

*Nom du cours {$a->coursename}
*Lien vers la page de profil de l\'utilisateur {$a->profileurl}';
$string['defaultrole'] = 'Rôle à attribuer par défaut';
$string['defaultrole_desc'] = 'Sélectionner le rôle qui devrait être attribué aux utilisateurs par l\'inscription automatique.';
$string['editenrolment'] = 'Modifier l\'inscription';
$string['enrolon'] = 'Inscrire sur';
$string['enrolon_desc'] = 'Événement qui conditionne l\'inscription automatique.';
$string['enrolon_help'] = 'Choisir l\'événement qui conditionne l\'inscription automatique.

 **Affichage du cours** - Inscrit l\'utilisateur dès lors qu\'il affiche le cours.<br>

**Login utilisateur** - Inscrit l\'utilisateur dès lors qu\'il se connecte.<br>

**Affichage activité/ressource** - Inscrit l\'utilisateur dès lors que ce dernier affiche l\'une des activités/ressources sélectionnées.<br>
*NOTE :* cette option nécessite l\'activation d\'un accès anonyme au cours.';
$string['modview'] = 'Affichage d\'une activité/ressources du cours';
$string['modviewmods'] = 'Activités/ressources';
$string['modviewmods_desc'] = 'Afficher l\'une quelconque des ressources/activités sélectionnées entraînera l\'inscription automatique.';
$string['pluginname'] = 'Inscription automatique';
$string['pluginname_desc'] = 'Le plugin d\'inscription automatique permet d\'inscrire automatiquement les utilisateurs sur la base de leur simple action d\'afficher le cours, une activité ou une ressource particulières.';
$string['requirepassword'] = 'Exiger une clef d\'inscription';
$string['requirepassword_desc'] = 'Exige une clef d\'inscription pour les nouveaux cours et empêche la suppression des clefs d\'inscription des cours déjà existants.';
$string['role'] = 'Rôle attribué par défaut';
$string['sendcoursewelcomemessage'] = 'Envoyer un message de bienvenue';
$string['sendcoursewelcomemessage_help'] = 'Si activé, les utilisateurs recevront un message de bienvenue par courriel lors de leur inscription automatique.';
$string['status'] = 'Autoriser les inscriptions automatiques';
$string['status_desc'] = 'Autorise les inscriptions automatiques d\'utilisateurs au cours par défaut.';
$string['status_help'] = 'Ce réglage détermine si ce plugin d\'inscription automatique est activé pour ce cours.';
$string['unenrol'] = 'Désinscrire l\'utilisateur';
$string['unenrolselfconfirm'] = 'Voulez-vous vraiment vous désinscrire du cours « {$a} » ?';
$string['unenroluser'] = 'Voulez-vous vraiment désinscrire "{$a->user}" du cours "{$a->course}" ?';
$string['userlogin'] = 'Connexion utilisateur';
$string['welcometocourse'] = 'Bienvenue au cours {$a}';
$string['welcometocoursetext'] = 'Bienvenue au cours {$a->coursename} !

Si vous ne l\'avez pas encore fait, nous vous invitons à remplir votre page de profil afin que nous en sachions un peu plus sur vous :

{$a->profileurl}';
