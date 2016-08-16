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
 * Strings for component 'auth_googleoauth2', language 'fr', branch 'MOODLE_31_STABLE'
 *
 * @package   auth_googleoauth2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

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
$string['oauth2displaybuttons'] = 'Afficher les boutons sur la page d\'authentification.';
$string['signinwithanaccount'] = 'Se connecter avec {$a}';
$string['unknownfirstname'] = 'Prénom inconnu';
$string['unknownlastname'] = 'Nom inconnu';
