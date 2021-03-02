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
 * Strings for component 'auth_mnet', language 'ca', version '3.8'.
 *
 * @package     auth_mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_mnet_auto_add_remote_users'] = 'Si l\'habiliteu, es crearà automàticament un compte d\'usuari local quan un usuari remot entri per primera vegada.';
$string['auth_mnet_roamin'] = 'Els usuaris d\'aquests servidors seran admesos al vostre lloc';
$string['auth_mnet_roamout'] = 'Els vostres usuaris seran admesos en aquests servidors';
$string['auth_mnet_rpc_negotiation_timeout'] = 'Temps d\'espera en segons per a l\'autenticació sobre transport XMLRPC.';
$string['auth_mnetdescription'] = 'Els usuaris són autenticats d\'acord amb la xarxa de confiança definida en els paràmetres de Moodle en Xarxa.';
$string['auto_add_remote_users'] = 'Afegeix automàticament usuaris remots';
$string['pluginname'] = 'Autenticació Moodle en Xarxa';
$string['rpc_negotiation_timeout'] = 'Temps màxim negociació RPC';
$string['sso_idp_description'] = 'Publiqueu aquest servei a fi de permetre que els vostres usuaris passin al lloc Moodle {$a} sense necessitat de tornar a iniciar-hi una sessió. <ul><li><em>Dependència</em>: també us haureu de <strong>subscriure</strong> al servei SSO (proveïdor de servei) del lloc {$a}.</li></ul><br />Subscriviu-vos a aquest servei a fi de permetre que usuaris autenticats del lloc {$a} entrin al vostre lloc sense iniciar-hi una sessió nova. <ul><li><em>Dependència</em>: també haureu de <strong>publicar</strong> el servei SSO (proveïdor de servei) per a {$a}.</li></ul><br />';
$string['sso_idp_name'] = 'SSO (proveïdor d\'identitat)';
$string['sso_mnet_login_refused'] = 'Al nom d\'usuari {$a->user} no li és permès d\'iniciar la sessió des del lloc {$a->host}.';
$string['sso_sp_description'] = 'Publiqueu aquest servei a fi de permetre que usuaris autenticats del lloc {$a} accedeixin al vostre lloc sense necessitat de tornar a iniciar-hi una sessió. <ul><li><em>Dependència</em>: també us haureu de <strong>subscriure</strong> al servei SSO (proveïdor d\'identitat) del lloc {$a}.</li></ul><br />Subscriviu-vos a aquest servei a fi de permetre que els vostres usuaris passin al lloc Moodle {$a} sense necessitat de tornar a iniciar-hi una sessió. <ul><li><em> Dependència </em>: també haureu de <strong>publicar</strong> el servei SSO (proveïdor d\'identitat) per a {$a}.</li></ul><br />';
$string['sso_sp_name'] = 'SSO (proveïdor de servei)';
