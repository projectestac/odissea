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
 * Strings for component 'auth_oauth2', language 'fr', branch 'MOODLE_36_STABLE'
 *
 * @package   auth_oauth2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Un utilisateur avec ce nom d\'utilisateur existe déjà sur ce site. Si c\'est votre compte, veuillez vous connecter avec votre nom et mot de passe et l\'ajouter comme connexion liée dans vos préférences.';
$string['alreadylinked'] = 'Ce compte externe est déjà lié à un compte sur ce site.';
$string['auth_oauth2description'] = 'Authentification basée sur les standards OAuth 2.';
$string['auth_oauth2settings'] = 'Réglages d\'authentification OAuth 2.';
$string['confirmaccountemail'] = 'Bonjour,

Un nouveau compte a été demandé sur « {$a->sitename} » a été demandée en utilisant votre adresse de courriel.

Pour confirmer votre nouveau compte, veuillez visiter la page web suivante :

{$a->link}

Dans la plupart des logiciels de courriel, cette adresse devrait apparaître comme un lien de couleur bleue qu\'il vous suffit de cliquer. Si cela ne fonctionne pas, copiez ce lien et collez-le dans la barre d\'adresse de votre navigateur web.

Si vous avez besoin d\'aide, veuillez contacter l\'administrateur du site,
{$a->admin}

Si vous n\'avez pas demandé de compte, quelqu\'un cherche peut-être à compromettre votre compte. Contactez immédiatement l\'administrateur du site.';
$string['confirmaccountemailsubject'] = '{$a} : confirmation de compte';
$string['confirmationinvalid'] = 'Le lien de confirmation n\'est pas valide ou est échu. Veuillez recommencer le processus de connexion afin de générer un nouveau message de confirmation.';
$string['confirmationpending'] = 'Ce compte est en attente de confirmation par courriel.';
$string['confirmlinkedloginemail'] = 'Bonjour,

Une requête a été effectuée avec votre adresse de courriel pour lier le compte {$a->issuername} ({$a->linkedemail}) à votre compte sur la plateforme « {$a->sitename} ».

Pour confirmer cette demande et lier ces comptes, veuillez visiter la page web suivante :

{$a->link}

Dans la plupart des logiciels de courriel, cette adresse devrait apparaître comme un lien de couleur bleue qu\'il vous suffit de cliquer. Si cela ne fonctionne pas, copiez ce lien et collez-le dans la barre d\'adresse de votre navigateur web.

Si vous avez besoin d\'aide, veuillez contacter l\'administrateur du site,
{$a->admin}

Si vous n\'avez pas demandé ceci, quelqu\'un cherche peut-être à compromettre votre compte. Contactez immédiatement l\'administrateur du site.';
$string['confirmlinkedloginemailsubject'] = '{$a} : confirmation de liaison de compte';
$string['createaccountswarning'] = 'Ce plugin d\'authentification permet aux utilisateurs de créer des comptes sur votre site. Si vous utilisez ce plugin, il est peut-être judicieux d\'activer le réglage « Empêcher la création de compte lors de l\'authentification » (authpreventaccountcreation).';
$string['createnewlinkedlogin'] = 'Lier un nouveau compte ({$a})';
$string['emailconfirmlink'] = 'Lier vos comptes';
$string['emailconfirmlinksent'] = '<p>Un compte existant avec cette adresse de courriel a été trouvé, mais il n\'est pas encore lié.</p>
   <p>Les comptes doivent être liés pour que vous puissiez vous connecter.</p>
   <p>Un message a été envoyé à votre adresse <b>{$a}</b></p>
   <p>Il contient des instructions simples pour lier vos comptes.</p>
   <p>En cas de difficulté, contactez l\'administrateur de la plateforme.</p>';
$string['info'] = 'Compte externe';
$string['issuer'] = 'Service OAuth 2';
$string['issuernologin'] = 'Cet fournisseur d\'identité ne peut pas être utilisé pour se connecter';
$string['linkedlogins'] = 'Connexions liées';
$string['linkedloginshelp'] = 'Aide sur les connexion liées';
$string['loginerror_authenticationfailed'] = 'Le processus d\'authentification a échoué.';
$string['loginerror_cannotcreateaccounts'] = 'Un compte avec votre adresse de courriel n\'a pas pu être trouvé.';
$string['loginerror_invaliddomain'] = 'L\'adresse de courriel n\'est pas autorisées sur ce site.';
$string['loginerror_nouserinfo'] = 'Aucune donnée utilisateur n\'a été renvoyée. Le service OAuth 2 a peut-être été configuré incorrectement.';
$string['loginerror_userincomplete'] = 'Les données utilisateur renvoyée ne contenaient pas de nom d\'utilisateur ni d\'adresse de courriel. Le service OAuth 2 a peut-être été configuré incorrectement.';
$string['noissuersavailable'] = 'Aucun des services OAuth2 configurés ne vous permet de lier des comptes';
$string['notenabled'] = 'Le plugin d\'authentification OAuth2 n\'est pas activé.';
$string['notloggedindebug'] = 'La tentative de connexion a échoué. Raison : {$a}';
$string['notwhileloggedinas'] = 'Les comptes liées ne peuvent pas être gérés lorsque vous êtes connecté sous le nom d\'un autre utilisateur.';
$string['oauth2:managelinkedlogins'] = 'Gérer ses propres comptes liés';
$string['plugindescription'] = 'Ce plugin d\'authentification affiche une liste de fournisseurs d\'identité sur la page de connexion de Moodle. En choisissant un fournisseur d\'identité, les utilisateurs peuvent se connecter avec leurs données d\'authentification issues d\'un fournisseur OAuth 2.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'Authentification OAuth 2';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Ce plugin est connecté au sous-système d\'authentification.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'Le jeton de confirmation';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'L\'horodatage de l\'expiration du jeton de confirmation';
$string['privacy:metadata:auth_oauth2:email'] = 'L\'adresse de courriel externe correspondant à ce compte.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'L\'identifiant du fournisseur OAuth 2 pour ce compte OAuth 2';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'Comptes OAuth 2 liés à un compte d\'utilisateur de Moodle.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'L\'horodatage du lien entre le compte utilisateur et le compte OAuth 2.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'L\'horodatage de la modification de cet enregistrement.';
$string['privacy:metadata:auth_oauth2:userid'] = 'L\'identifiant du compte utilisateur auquel le compte OAuth 2 est lié.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'L\'identifiant de l\'utilisateur qui a modifié ce compte.';
$string['privacy:metadata:auth_oauth2:username'] = 'Le nom d\'utilisateur externe qui correspond à ce compte.';
