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
 * Strings for component 'auth_googleoauth2', language 'fr', version '3.11'.
 *
 * @package     auth_googleoauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_facebookclientid_key'] = 'ID application Facebook';
$string['auth_githubclientid_key'] = 'ID Client Github';
$string['auth_googleclientid_key'] = 'ID client Google';
$string['auth_googleoauth2description'] = 'Permettre à un utilisateur de se connecter au site via un fournisseur externe d\'identification : Google/Facebook/Windows Live.
La première fois que l\'utilisateur se connecte avec un fournisseur d\'identification, un nouveau compte est créé.
Le blocage de la création de compte (paramètre administrateur authpreventaccountcreation) lors de l\'authentification <b> ne doit pas</b > être imposé.';
$string['auth_googlesettings'] = 'Paramètres';
$string['couldnotauthenticate'] = 'L\'authentification a échoué - Veuillez essayer de vous connecter à nouveau.';
$string['couldnotauthenticateuserlogin'] = 'La méthode d’authentification a échoué.<br/>
Veuillez essayer de vous connecter à nouveau avec votre nom d\'utilisateur et votre mot de passe.<br/>
<br/>
<a href="{$a->loginpage}">Essayez à nouveau</a>.<br/>
<a href="{$a->forgotpass}">Mot de passe oublié</a> ?';
$string['couldnotgetgoogleaccesstoken'] = 'Le fournisseur d\'authentification nous a informé d\'une erreur de communication. Veuillez essayer de vous connecter à nouveau.';
$string['emailaddressmustbeverified'] = 'Votre adresse courriel n\'a pas été vérifiée par la méthode d\'authentification que vous avez sélectionnée. Vous avez probablement oublié de cliquer sur le lien « vérification de l\'adresse courriel » que Google ou Facebook vous a envoyé lors de votre abonnement à leur service.';
$string['faileduserdetails'] = 'Le site a réussi à se connecter au fournisseur sélectionné, mais n\'a pas réussi à récupérer vos données d\'utilisateur. Si vous utilisez Google, vérifiez que l\'administrateur du site a activé l\'API Google+ dans la console de Google développeur ; ceci est la cause la plus commune de cette erreur.';
$string['moreproviderlink'] = 'Se connecter avec un autre service.';
$string['noaccountyet'] = 'Vous n\'êtes pas encore autorisé à utiliser le site. Veuillez contacter votre administrateur et lui demander d\'activer votre compte.';
$string['othermoodle'] = 'Antre authentification Moodle';
$string['pluginname'] = 'Oauth2';
$string['signinwithanaccount'] = 'Se connecter avec {$a}';
$string['stattitle'] = 'Statistiques de connexion pour les  {$a - > periodindays} derniers jours (depuis l\'installation du plugin/la mise à jour)';
$string['unknownfirstname'] = 'Prénom inconnu';
$string['unknownlastname'] = 'Nom inconnu';
