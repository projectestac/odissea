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
 * Strings for component 'auth_shibboleth', language 'de', version '4.1'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'Logo für Authentifizierungsmethode';
$string['auth_shib_auth_logo_description'] = 'Stellen Sie ein Logo für die Authentifizierungsmethode \'Shibboleth\' bereit, die Ihren Nutzer/innen vertraut vorkommt. Dies könnte das Logo  Ihrer Shibboleth-Föderation sein, z.B. <tt> SWITCHaai Login </tt> oder <tt> InCommon Login </tt> oder ähnlich.';
$string['auth_shib_auth_method'] = 'Name der Authentifizierungsmethode';
$string['auth_shib_auth_method_description'] = 'Vergeben Sie für die verwendete Shibboleth-Methode einen Titel, der den Nutzern vertraut ist, z.B. der Titel des Shibboleth-Verbunds (<tt>SWITCHaai Login</TT> oder <tt>Gemeinsamer Login</tt>.';
$string['auth_shib_changepasswordurl'] = 'URL zur Kennwortänderung';
$string['auth_shib_contact_administrator'] = 'Falls Sie nicht dieser Organisation zugeordnet wurden und Kurszugriff benötigen, nehmen Sie bitte mit <a href="mailto:{$a}">Moodle Administrator/innen</a> Kontakt auf.';
$string['auth_shib_convert_data'] = 'Datenmodifikation APU';
$string['auth_shib_convert_data_description'] = 'Sie können diese API nutzen, um die von Shibboleth bereitgestellten Daten anzupassen. Weitere Infos: <a href="{$a}">README</a>.';
$string['auth_shib_convert_data_filepath_warning'] = 'Sie können keine Datei verwenden, die sich im aktuellen Website-Datenverzeichnis befindet ($CFG->dataroot) wie die Datenänderungs-API.';
$string['auth_shib_convert_data_warning'] = 'Die Datei existiert nicht oder ist vom Server nicht lesbar.';
$string['auth_shib_idp_list'] = 'Identity-Provider';
$string['auth_shib_idp_list_description'] = 'Stellen Sie eine Liste der Identity-Provider zur Verfügung aus der die Nutzer auf der Loginseite auswählen können. <br />In jeder Zeile muss ein kommagetrenntes Tupple für identityID der IdP (siehe Shibboleth Medatadtendatei) und Name des IdP wie es in der Dropdown-Liste gezeigt werden soll eingetragen werden.<br />
Als optionaler dritter Parameter kann der Ort des Shibboleth Session Initators eingetragen werden, falls die Moodle-Installation im Verbund genutzt wird.';
$string['auth_shib_instructions'] = 'Nutzen Sie den <a href="{$a}">Shibboleth-Login</a>, um Zugang über Shibboleth zu erhalten, wenn Ihre Institution dies unterstützt. Andernfalls verwenden Sie das normale Login.';
$string['auth_shib_instructions_help'] = 'Tragen Sie hier Informationen für Ihre Nutzer/innen ein, die ihnen den Zugang mit Hilfe von Shibboleth erklären. Diese werden auf der Loginseite angzeigt. Der Text sollte einen Link "<b>{$a}</b>" enthalten, damit ein einfachere Login möglich ist. Wenn Sie das Feld leer lassen, werden die Standard-Texte angezeigt und keine Hinweise auf den Shibboleth Login.';
$string['auth_shib_instructions_key'] = 'Login-Anweisungen';
$string['auth_shib_integrated_wayf'] = 'Moodle WAYF Service';
$string['auth_shib_integrated_wayf_description'] = 'Mit der Aktivierung verwendet Moodle den eigenen WAYF Service an Stelle des für Shibboleth konfigurierten. Moodle zeigt dann eine Dropdownliste der verfügbaren alternativen Login-Seiten, wo der Identity Provider ausgewählen wird.';
$string['auth_shib_logout_return_url'] = 'Alternative URL nach Logout';
$string['auth_shib_logout_return_url_description'] = 'Auf diese Seite werden Shibboleth-Nutzer nach dem Logout geleitet.<br />Bleibt das Feld leer wird die Standardseite von Moodle genutzt.';
$string['auth_shib_logout_url'] = 'Shibboleth Service Provider Logout URL Handler';
$string['auth_shib_logout_url_description'] = 'Tragen Sie die URL für den Shibboleth Service Provider Logout Handler ein. Typischerweise ist dies <tt>Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Wenn Sie den integrierten WAYF Dienst verwenden wollen, ist es erforderlich eine kommaseparierte Liste von Identity Provider entityIDs, ihren Namen und Optional einen Session Initiator einzutragen.';
$string['auth_shib_only'] = 'nur Shibboleth';
$string['auth_shib_only_description'] = 'Diese Option legt fest, dass eine Shibboleth-Authentifizierung bevorzugt wird.';
$string['auth_shib_username_description'] = 'Name der Shibboleth Umgebungsvariable, die als Moodle-Nutzername verwandt werden soll';
$string['auth_shibboleth_errormsg'] = 'Wählen Sie die Organisation aus, bei der Sie Mitglied sind!';
$string['auth_shibboleth_login'] = 'Shibboleth Login';
$string['auth_shibboleth_login_long'] = 'Login für Moodle über Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Manueller Login';
$string['auth_shibboleth_select_member'] = 'Ich bin Mitglied von ...';
$string['auth_shibboleth_select_organization'] = 'Zur Authentifizierung über Shibboleth wählen Sie Ihre Organisation aus dem Dropdown-Menü aus:';
$string['auth_shibbolethdescription'] = 'Mit diesem Verfahren können Sie die Verbindung zu einem bestehenden Shibboleth Server herstellen, um Zugänge zu prüfen und anzulegen.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'Das Plugin \'Shibboleth-Authentifizierung\' speichert keine personenbezogenen Daten.';
$string['shib_invalid_account_error'] = 'Sie scheinen über Shibboleth authentifiziert zu sein, aber Moodle findet kein gültiges Nutzerkonto zu Ihrem Anmeldenamen. Ihr Nutzerkonto könnte ungültig geworden sein oder es existiert gar nicht.';
$string['shib_no_attributes_error'] = 'Sie versuchen vermutlich, die Shibboleth Authentifizierung zu verwenden. Moodle hat jedoch keine Attribute für die Nutzer/innen erhalten. Prüfen Sie bitte, ob der Identity Provider die erforderlichen Attribute ({$a}) dem Moodle-Serviceprovider zur Verfügung stellt oder informieren Sie den Webmaster des Servers.';
$string['shib_not_all_attributes_error'] = 'Moodle benötigt einige Shibboleth-Attribute, die derzeit nicht bereitgestellt werden. Es handelt sich um die Attribute: {$a}<br />Benachrichtigen Sie bitte den Webmaster des Servers oder Ihren Identity Provider.';
$string['shib_not_set_up_error'] = 'Die Shibboleth-Authentifizierung scheint nicht richtig eingerichtet zu sein, denn es sind keine Shibboleth-Umgebungsvariablen verfügbar. Beachten Sie das <a href="{$a}">README</a> mit weiteren Infos zur Einrichtung der Shibboleth-Authentifizierung.';
