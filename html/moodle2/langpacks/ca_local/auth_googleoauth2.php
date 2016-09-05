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

$string['auth_googleclientid'] = 'El vostre ID/secret de client es pot generar a la <a href="https://code.google.com/apis/console">API de la consola de Google</a>
 Project > APIS & AUTH > Credentials > Create new Client ID > Web application:</p>
<ul>
<li><strong>Authorized Javascript origins</strong>: {$a->jsorigins}</li>
<li><strong>Authorized Redirect URI</strong>: {$a->redirecturls}</li>
</ul>
<p>Cal també que <strong>habiliteu la "Google+ API"</strong> a Project > APIS & AUTH > APIs</p>
<p>Més informació a la <a href="http://agora.xtec.cat/moodle/moodle/mod/glossary/view.php?id=461&mode=entry&hook=1801" target="_blank">pregunta freqüent</a>.</p>';

$string['auth_googleclientsecret'] = 'Veieu més amunt.';

$string['auth_googleoauth2description'] = 'Permet als usuaris connectar-se al lloc amb un proveïdor extern d\'autenticació Google. El primer cop que un usuari es connecta amb un proveïdor d\'autenticació, es crea un compte nou. <a href="'.$CFG->wwwroot.'/admin/search.php?query=authpreventaccountcreation">Evita la creació de comptes ous durant el procediment d\'autenticació</a> <b>s\'ha de desactivar</b>.';

$string['auth_sign-in_with'] = 'Entra amb {$a->providername}';
$string['signinwithanaccount'] = 'Entra amb {$a}';
