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
 * Strings for component 'local_mobile', language 'fr', branch 'MOODLE_31_STABLE'
 *
 * @package   local_mobile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowpermissions'] = 'Accorder les permissions au rôle utilisateur authentifié';
$string['allowpermissionsdescription'] = 'Modifier le rôle utilisateur authentifié et autoriser la capacité moodle/webservice:createtoken';
$string['cannotcreatetoken'] = 'La génération automatique de jetons n\'est pas disponible pour les administrateurs du site (ils doivent créer manuellement un jeton dans le site)';
$string['checkpluginconfiguration'] = 'Vérifier la configuration du plugin';
$string['clickheretolaunchtheapp'] = 'Cliquez ici si l\'app ne s\'ouvre pas automatiquement.';
$string['customlangstrings'] = 'Chaînes de caractères personnalisées';
$string['customlangstrings_desc'] = 'Les mots et expressions affichées dans l\'App mobile peuvent être personnalisés ici. Saisissez chaque chaîne de caractères personnalisée sur une nouvelle ligne, dans le format suivant : identifiant de chaîne, expression personnalisée, code de langue (séparés par des caractères « barre verticale »). Par exemple :
<pre>
mm.user.student|Learner|en
mm.user.student|Apprenant|fr
</pre>
Une liste complète des identifiants de chaînes de caractères, accompagnée de plus d\'informations, est disponible dans la <a href="{$a}">page de documentation</a>.';
$string['custommenuitems'] = 'Éléments du menu personnalisé';
$string['custommenuitems_desc'] = 'Des éléments supplémentaires peuvent être ajoutés au menu principal de l\'app en les indiquant ici. Saisissez chaque élément sur une nouvelle ligne, dans le format : texte de l\'élément, URL, méthode d\'ouverture de l\'URL (inappbrowser, browser ou embedded) et code de langue (facultatif, pour affichage de l\'élément seulement aux utilisateurs de la langue indiquée), séparés par des caractères « trait vertical.» Par exemple :
<pre>
Aide de l\'app| https://monurl.xyz/aide | inappbrowser | fr
Notre système d\'info | https://monurl.xyz | browser | fr
Mes notes | https://monurl.xyz/local/mygrades/index.php | embedded | fr
My grades | https://monurl.xyz/local/mygrades/index.php | embedded | en
Mis calificaciones | https://monurl.xyz/local/mygrades/index.php | embedded | es
</pre>
Indiquez « inappbrowser » si vous voulez que le lien s\'ouvre dans le navigateur intégré, sans quitter l\'app ; indiquez « browser » pour ouvrir le lien dans le navigateur par défaut de l\'appareil ; utilisez « embedded » pour afficher le lien dans une nouvelle page dans l\'app.';
$string['disabledfeatures'] = 'Fonctionnalités désactivées';
$string['disabledfeatures_desc'] = 'Sélectionnez ici les fonctionnalités que vous voulez désactiver dans l\'App mobile pour votre sure. Certaines fonctionnalités listées ici pourraient être déjà désactivées par d\'autres réglages de la plateforme. Pour voir les modifications dans l\'App mobile, vous devrez vous déconnecter et vous reconnecter.';
$string['enableadditionalservice'] = 'Activer le service fonctionnalités supplémentaires Moodle Mobile';
$string['enableadditionalservicedescription'] = 'Ce service doit être activé.';
$string['forcelogout'] = 'Imposer la déconnexion';
$string['forcelogout_desc'] = 'Si ce réglage est activé, l\'option « Changer de site » est remplacée par « Déconnexion », avec pour conséquence que les utilisateurs sont complètement déconnectés et devront re-saisir leur mot de passe lors de leur prochaine visite.';
$string['local_mobiledescription'] = 'Plugin qui étend les fonctionnalités du service mobile';
$string['local_mobilesettings'] = 'Réglages';
$string['local_mobiletypeoflogin'] = 'Sélectionner un type de connexion';
$string['local_mobiletypeoflogin_key'] = 'Type de connexion';
$string['local_mobileurlscheme'] = 'Schéma d\'URL pour la connexion via une fenêtre de navigateur.';
$string['local_mobileurlscheme_key'] = 'Schéma d\'URL';
$string['loginintheapp'] = 'Via l\'app';
$string['logininthebrowser'] = 'Via un navigateur (pour les plugins SSO)';
$string['mainmenu'] = 'Menu principal';
$string['mobilefeatures'] = 'Fonctionnalités mobiles';
$string['pluginname'] = 'Fonctionnalités supplémentaires Moodle Mobile';
$string['pluginnotenabledorconfigured'] = 'Le plugin local Moodle Mobile doit être activé et configuré pour pouvoir lancer l\'app';
$string['remoteaddons'] = 'Plugins distants';
