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
 * Strings for component 'auth_oauth2', language 'ca', version '4.1'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Ja existeix un usuari en aquest lloc amb aquest nom d\'usuari. Si aquest és el vostre compte, inicieu la sessió introduint el vostre nom d’usuari i contrasenya i afegiu-lo com a compte enllaçat a través de la pàgina de preferències.';
$string['alreadylinked'] = 'Aquest compte extern ja està enllaçat a un altre compte d\'aquest lloc';
$string['auth_oauth2description'] = 'Autenticació basada en l\'estàndard OAuth 2';
$string['auth_oauth2settings'] = 'Configuració de l\'autenticació OAuth 2.';
$string['confirmaccountemail'] = 'Hola, {$a->fullname},

S\'ha fet la sol·licitud d\'un compte nou amb la vostra adreça de correu electrònic a \'{$a->sitename}\'.

Per confirmar aquesta sol·licitud i enllaçar aquests accessos, feu clic a aquesta adreça web:

{$a->link}

A la majoria dels programes de correu, aquesta adreça hauria d\'aparèixer com un enllaç blau on heu de fer clic. Si això no funciona, retalleu l\'adreça i enganxeu-la en el camp d\'ubicació al capdamunt de la finestra del navegador.

Si necessiteu ajuda, poseu-vos en contacte amb l’administrador del lloc, {$a->admin}

Si no heu fet aquesta sol·licitud, algú altre podria estar intentant posar en risc el vostre compte.
Poseu-vos en contacte immediatament amb l\'administrador del lloc.';
$string['confirmaccountemailsubject'] = '{$a}: confirmació del compte';
$string['confirmationinvalid'] = 'L\'enllaç de confirmació o és no vàlid o bé ha caducat. Comenceu de nou el procés d\'autenticació per tal de generar un correu electrònic de confirmació nou.';
$string['confirmationpending'] = 'Aquest compte està pendent del correu de confirmació.';
$string['confirmlinkedloginemail'] = 'Hola, {$a->fullname},

S\'ha fet una sol·licitud per enllaçar l\'autenticació de {$a->issuername} {$a->linkedemail} al vostre compte al lloc «{$a->sitename}» mitjançant la vostra adreça de correu electrònic.

Per confirmar aquesta sol·licitud i enllaçar aquests accessos, feu clic a aquesta adreça web:

{$a->link}

A la majoria dels programes de correu, aquesta adreça hauria d\'aparèixer com un enllaç blau on heu de fer clic. Si això no funciona, retalleu l\'adreça i enganxeu-la en el camp d\'ubicació al capdamunt de la finestra del navegador.

Si necessiteu ajuda, poseu-vos en contacte amb l’administrador del lloc, {$a->admin}

Si no heu fet aquesta sol·licitud, algú altre podria estar intentant posar en risc el vostre compte.
Poseu-vos en contacte immediatament amb l\'administrador del lloc.';
$string['confirmlinkedloginemailsubject'] = '{$a}: confirmació d\'inici de sessió enllaçada';
$string['createaccountswarning'] = 'Aquest connector d\'autenticació permet que els usuaris puguin crear comptes al vostre lloc. Podeu habilitar la configuració «authpreventaccountcreation» si utilitzeu aquest connector.';
$string['createnewlinkedlogin'] = 'Enllaceu un compte nou ({$a})';
$string['emailconfirmlink'] = 'Enllaceu els vostres comptes';
$string['emailconfirmlinksent'] = '<p>S\'ha trobat un compte amb aquesta mateixa adreça electrònica que encara no està enllaçat.</p>
   <p>Els comptes han d\'estar enllaçats abans de poder-vos autenticar.</p>
   <p>S\'ha enviat un missatge de correu electrònic a la vostra adreça de correu <b>{$a}</b>.</p>
   <p>El missatge conté unes instruccions senzilles per enllaçar els vostres comptes.</p>
   <p>Si teniu algun problema, si us plau, contacteu amb l\'administrador del lloc.</p>';
$string['emailpasswordchangeinfo'] = 'Hola, {$a->firstname},

Algú (probablement, vós) ha demanat una contrasenya nova per al vostre compte a «{$a->sitename}».

La vostra contrasenya no es pot restablir, perquè utilitzeu el vostre compte per iniciar la sessió en un altre lloc.

Inicieu la sessió com abans, mitjançant l’enllaç de la pàgina d’inici de sessió.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: informació de canvi de contrasenya';
$string['info'] = 'Compte extern';
$string['issuer'] = 'Servei OAuth 2';
$string['issuernologin'] = 'Aquest emissor no es pot utilitzar per iniciar la sessió';
$string['key'] = 'Clau';
$string['linkedlogins'] = 'Inicis de sessió enllaçats';
$string['linkedloginshelp'] = 'Ajuda amb els inicis de sessió enllaçats';
$string['loggedin'] = 'L\'usuari s\'ha autenticat correctament amb el proveïdor.';
$string['loginerror_authenticationfailed'] = 'El procés d\'autenticació ha fallat.';
$string['loginerror_cannotcreateaccounts'] = 'No s\'ha pogut trobar un compte amb la vostra adreça de correu.';
$string['loginerror_invaliddomain'] = 'No es permet aquesta adreça de correu electrònic en aquest lloc.';
$string['loginerror_nouserinfo'] = 'No s\'ha retornat cap informació de l\'usuari. És possible que el servei OAuth 2 estigui configurat de manera incorrecta.';
$string['loginerror_userincomplete'] = 'La informació de l\'usuari retornada no conté cap nom d\'usuari ni cap adreça de correu electrònic. És possible que el servei OAuth 2 estigui configurat de manera incorrecta.';
$string['noconfiguredidps'] = 'No hi ha proveïdors OAuth2 configurats.';
$string['noissuersavailable'] = 'Cap dels serveis OAuth 2 configurats us permet enllaçar comptes d\'inici de sessió';
$string['notenabled'] = 'El connector d\'autenticació OAuth 2 no està habilitat';
$string['notloggedindebug'] = 'Ha fallat l\'intent d\'inici de sessió. Raó: {$a}';
$string['notwhileloggedinas'] = 'Els inicis de sessió enllaçats no es poden gestionar mentre esteu autenticat com un altre usuari.';
$string['oauth2:managelinkedlogins'] = 'Gestiona els comptes d\'inici de sessió enllaçats propis';
$string['plugindescription'] = 'Aquest connector d’autenticació mostra una llista dels proveïdors d’identitat configurats a la pàgina d’inici de sessió. El fet de seleccionar un proveïdor d’identitat permet als usuaris iniciar la sessió amb les seves credencials d’un proveïdor OAuth 2.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'Autenticació OAuth 2';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Aquest connector està connectat al subsistema d\'autenticació.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'El testimoni de confirmació.';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'La marca horària de quan caduca el testimoni de confirmació.';
$string['privacy:metadata:auth_oauth2:email'] = 'El correu electrònic extern que s’assigna a aquest compte.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'L\'ID de l\'emissor OAuth 2 per a aquest inici de sessió amb OAuth 2';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'Comptes OAuth 2 enllaçats amb el compte Moodle d\'un usuari.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'La marca horària de quan es va enllaçar el compte a l\'inici de sessió amb OAuth 2.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'La marca horària de quan es va modificar aquest registre.';
$string['privacy:metadata:auth_oauth2:userid'] = 'L’identificador (ID) del compte d’usuari al qual s’enllaça el login OAuth 2.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'L\'identificador (ID) de l\'usuari que ha modificat aquest compte.';
$string['privacy:metadata:auth_oauth2:username'] = 'El nom d\'usuari extern que s\'assigna a aquest compte.';
$string['testidplogin'] = 'Prova d\'inici de sessió amb:';
$string['userinfo'] = 'Dades d\'usuari del proveïdor:';
$string['value'] = 'Valor';
