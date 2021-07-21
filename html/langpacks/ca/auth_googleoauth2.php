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
 * Strings for component 'auth_googleoauth2', language 'ca', version '3.11'.
 *
 * @package     auth_googleoauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_facebookclientid'] = 'L\'ID de l\'aplicació - es pot trobar a https://developers.facebook.com/apps/.';
$string['auth_facebookclientid_key'] = 'ID de l\'aplicació de Facebook';
$string['auth_facebookclientsecret'] = 'La vostra clau secreta de l\'aplicació - es pot trobar a https://developers.facebook.com/apps/.';
$string['auth_facebookclientsecret_key'] = 'Clau secreta de l\'aplicació de Facebook';
$string['auth_googleclientid'] = 'El vostre ID/secret de client es pot generar a la <a href="https://code.google.com/apis/console">API de la consola de Google</a>
 Project > APIS & AUTH > Credentials > Create new Client ID > Web application:</p>
<ul>
<li><strong>Authorized Javascript origins</strong>: {$a->jsorigins}</li>
<li><strong>Authorized Redirect URI</strong>: {$a->redirecturls}</li>
</ul>
<p>Cal també que <strong>habiliteu la "Google+ API"</strong> a Project > APIS & AUTH > APIs</p>';
$string['auth_googleclientid_key'] = 'ID de client de Google';
$string['auth_googleclientsecret'] = 'El vostre secret de client - es pot trobar a la Google console API.';
$string['auth_googleclientsecret_key'] = 'Secret de client de Google';
$string['auth_googleipinfodbkey'] = 'IpinfoDB és un servei que permet saber quin és el país i la localitat dels visitants. Per tal d\'obtenir una clau, us heu de subscriure al servei: http://www.ipinfodb.com/register.php';
$string['auth_googleipinfodbkey_key'] = 'Clau IPinfoDB';
$string['auth_googleoauth2description'] = 'Permet als usuaris connectar-se al lloc a través d\'un proveïdor extern d\'autenticació: Google/Facebook/Windows Live.
El primer cop que un usuari es connecta amb un proveïdor d\'autenticació, es crea un compte nou. Per aquest motiu <b>cal que desactiveu</b> el paràmetre <a href="\'.$CFG->wwwroot.\'/admin/search.php?query=authpreventaccountcreation">Evita la creació de comptes nous durant el procediment d\'autenticació</a>.';
$string['auth_googlesettings'] = 'Configuració';
$string['auth_sign-in_with'] = 'Inicia la sessió amb {$a->providername}';
$string['couldnotauthenticate'] = 'L\'autenticació ha fallat - Proveu a iniciar la sessió de nou.';
$string['couldnotauthenticateuserlogin'] = 'S\'ha produït un error en el mètode d\'autenticació.<br/>
Proveu a iniciar de nou la sessió amb el vostre nom d\'usuari i contrasenya.<br/>
<br/>
<a href="{$a->loginpage}">Proveu de nou</a>.<br/>
<a href="{$a->forgotpass}">Heu oblidat la vostra contrasenya</a>?';
$string['couldnotgetgoogleaccesstoken'] = 'El proveïdor de l\'autenticació ha retornat un error de comunicació. Torneu a intentar-ho de nou.';
$string['emailaddressmustbeverified'] = 'La vostra adreça de correu electrònic no s\'ha verificat pel mètode d\'autenticació que havíeu seleccionat. Segurament heu oblidat fer clic a l\'enllaç "verify email address" que Google o Facebook.';
$string['moreproviderlink'] = 'Registreu-vos amb un altre servei.';
$string['noaccountyet'] = 'No teniu permís per fer servir aquest lloc. Contacteu amb el vostre administrador i demaneu-li que activi el vostre compte.';
$string['pluginname'] = 'Oauth2';
$string['signinwithanaccount'] = 'Entra amb {$a}';
$string['unknownfirstname'] = 'Nom desconegut';
$string['unknownlastname'] = 'Cognom desconegut';
