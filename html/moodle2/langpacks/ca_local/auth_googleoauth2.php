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
 * Strings for component 'auth_google', language 'ca'
 *
 * @package   auth_googleoauth2
 * @author Mònica Grau
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_githubclientsecret'] = 'Clau secreta de l\'aplicació de Facebook.';
$string['auth_githubclientsecret_key'] = 'Github client secret';
$string['auth_googleclientid'] = '<p>El vostre ID de client es pot generar a <a href="https://code.google.com/apis/console">Google console API</a>
 Project > APIS & AUTH > Credentials > Create new Client ID > Web application:</p>
<ul>
<li><strong>Authorized Javascript origins</strong>: {$a->jsorigins}</li>
<li><strong>Authorized Redirect URI</strong>: {$a->redirecturls}</li>
</ul>
<p>També és necessari <strong>habilitar la "Google+ API"</strong> a Project > APIS & AUTH > APIs</p>
<p>Més informació a la <a href="http://agora.xtec.cat/moodle/moodle/mod/glossary/view.php?id=461&mode=entry&hook=1801" target="_blank">pregunta freqüent</a>.</p>';

$string['auth_googleclientsecret'] = 'Veieu més amunt.';

$string['auth_googleuserprefix'] = 'Aquest és el prefix del nom d\'usuari que es farà servir per a cada usuari nou autenticat mitjançant Google Oauth2. Canvieu-lo si crea conflicte amb alguna cosa del vostre Moodle. En un Moodle per defecte no és necessari fer aquest canvi.';
$string['auth_googleoauth2description'] = 'Permet als usuaris connectar-se al lloc amb un proveidor extern d\'autenticació Google. El primer cop que un usuari es connecta amb un proveidor d\'autenticació, es crea un compte nou. <a href="'.$CFG->wwwroot.'/admin/search.php?query=authpreventaccountcreation">Evita la creació de nous comptes durant el procediment d\'autenticació</a> <b>s\'ha de desactivar</b>.';
$string['couldnotauthenticate'] = 'La autenticació ha fallat - Proveu d\'entrar de nou.';
$string['couldnotauthenticateuserlogin'] = 'Mètode d\'autenticació incorrecte.<br/>
Proveu a autenticar-vos de nou amb el vostre nom d\'usuari i cotrasenya.<br/>
<br/>
<a href="{$a->loginpage}">Proveu de nou</a>.<br/>
<a href="{$a->forgotpass}">Heu oblidat la vostra contrasenya</a>?';
$string['oauth2displaybuttons'] = 'Mostra els botons a la pàgina d\'autenticació';
$string['oauth2displaybuttonshelp'] = 'Mostra els botos d\'autenticació de Google/Facebook/... a la part de dalt de la pàgina d\'autenticació. Si voleu posar els botons a un altre lloc, podeu deshabilitar aquesta opció i afegir el codi següent:
{$a}';
$string['auth_sign-in_with'] = 'Entra amb {$a->providername}';
$string['moreproviderlink'] = 'Entra amb un altre servei.';
$string['unknownfirstname'] = 'Nom desconegut';
$string['unknownlastname'] = 'Cognom desconegut';