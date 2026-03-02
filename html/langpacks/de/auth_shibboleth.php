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
 * Strings for component 'auth_shibboleth', language 'de', version '4.5'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'Logo für Authentifizierungsmethode';
$string['auth_shib_auth_logo_description'] = 'Stellen Sie ein Logo für die Shibboleth-Authentifizierung bereit, das Ihren Nutzer/innen vertraut vorkommt. Dies könnte das Logo  Ihres Shibboleth-Verbunds sein, z.B. <tt> SWITCHaai Login </tt> oder <tt> InCommon Login </tt>.';
$string['auth_shib_auth_method'] = 'Name der Authentifizierungsmethode';
$string['auth_shib_auth_method_description'] = 'Geben Sie einen Namen für die Shibboleth-Authentifizierung an, der Ihren Nutzer/innen vertraut ist, z.B. der Name des Shibboleth-Verbunds, z.B. <tt>SWITCHaai Login</tt> oder <tt>InCommon Login</tt>.';
$string['auth_shib_changepasswordurl'] = 'URL zur Kennwortänderung';
$string['auth_shib_contact_administrator'] = 'Falls Sie nicht dieser Organisation zugeordnet wurden und Kurszugriff benötigen, nehmen Sie bitte mit den <a href="mailto:{$a}">Administrator/innen</a> Kontakt auf.';
$string['auth_shib_convert_data'] = 'Datenmodifikation APU';
$string['auth_shib_convert_data_description'] = 'Sie können diese API nutzen, um die von Shibboleth bereitgestellten Daten anzupassen. Weitere Infos: <a href="{$a}">README</a>.';
$string['auth_shib_convert_data_filepath_warning'] = 'Sie können keine Datei verwenden, die sich im aktuellen Website-Datenverzeichnis befindet ($CFG->dataroot) wie die Datenänderungs-API.';
$string['auth_shib_convert_data_warning'] = 'Die Datei existiert nicht oder ist vom Server nicht lesbar.';
$string['auth_shib_idp_list'] = 'Identity-Provider';
$string['auth_shib_idp_list_description'] = 'Stellen Sie eine Liste der Identity-Provider bereit, aus der die Nutzer/innen auf der Anmeldeseite auswählen können. <br />In jeder Zeile muss ein kommagetrennte Angabe für identityID des IDP (siehe Shibboleth Medatadtendatei) und Name des IDP vorhanden sein, wie es in der Dropdown-Liste gezeigt werden soll.<br />
Als optionalen dritten Parameter können Sie den Ort des Shibboleth Session Initators eintragen, falls Ihr Moodle im Verbund genutzt wird.';
$string['auth_shib_instructions'] = 'Nutzen Sie die <a href="{$a}">Shibboleth Login</a>, um Zugang über Shibboleth zu erhalten, wenn Ihre Institution dies unterstützt. Andernfalls verwenden Sie die normale Anmeldung.';
$string['auth_shib_instructions_help'] = 'Tragen Sie hier Informationen für Ihre Nutzer/innen ein, die ihnen den Zugang mit Hilfe von Shibboleth erklären. Diese werden auf der Loginseite angzeigt. Der Text sollte einen Link "<b>{$a}</b>" enthalten, damit ein einfachere Login möglich ist. Wenn Sie das Feld leer lassen, wird der standardmäßige Text angezeigt und keine Hinweise auf den Shibboleth Login.';
$string['auth_shib_instructions_key'] = 'Anmeldeanleitung';
$string['auth_shib_integrated_wayf'] = 'Moodle WAYF Service';
$string['auth_shib_integrated_wayf_description'] = 'Mit der Aktivierung verwendet Moodle den eigenen WAYF Service, nicht den für Shibboleth konfigurierten. Moodle zeigt dann eine Dropdown-Liste der verfügbaren alternativen Anmeldeseiten, wo die Nutzer/innen der Identity Provider auswählen.';
$string['auth_shib_logout_return_url'] = 'Alternative URL nach Logout';
$string['auth_shib_logout_return_url_description'] = 'Auf diese Seite werden Shibboleth-Nutzer/innen nach dem Logout geleitet.<br />Bleibt das Feld leer wird die Standardseite von Moodle genutzt.';
$string['auth_shib_logout_url'] = 'Shibboleth Service Provider Logout URL Handler';
$string['auth_shib_logout_url_description'] = 'Tragen Sie die URL für den Shibboleth Service Provider Logout Handler ein. Typischerweise ist dies <tt>Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Wenn Sie den integrierten WAYF Dienst verwenden möchten, ist es erforderlich eine kommaseparierte Liste von Identity Provider entityIDs, deren Namen und optional einen Session Initiator einzutragen.';
$string['auth_shib_only'] = 'nur Shibboleth';
$string['auth_shib_only_description'] = 'Diese Option legt fest, dass eine Shibboleth-Authentifizierung bevorzugt wird.';
$string['auth_shib_username_description'] = 'Shibboleth-Umgebungsvariable, die als Moodle-Nutzername verwendet werden soll';
$string['auth_shibboleth_errormsg'] = 'Wählen Sie die Organisation aus, bei der Sie Mitglied sind!';
$string['auth_shibboleth_login'] = 'Shibboleth Login';
$string['auth_shibboleth_login_long'] = 'Anmeldung über Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Manuelle Anmeldung';
$string['auth_shibboleth_select_member'] = 'Ich bin Mitglied von ...';
$string['auth_shibboleth_select_organization'] = 'Zur Authentifizierung über Shibboleth wählen Sie Ihre Organisation aus dem Dropdown-Menü aus:';
$string['auth_shibbolethdescription'] = 'Bei dieser Methode werden Nutzer/innen mit Shibboleth erstellt und authentifiziert. Einzelheiten zur Einrichtung finden Sie in <a href="{$a}">Shibboleth-README</a>.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'Das Plugin \'Shibboleth-Authentifizierung\' speichert keine personenbezogenen Daten.';
$string['shib_invalid_account_error'] = 'Sie scheinen über Shibboleth authentifiziert zu sein, aber Moodle findet kein gültiges Nutzerkonto zu Ihrem Anmeldenamen. Ihr Nutzerkonto könnte ungültig geworden sein oder es existiert gar nicht.';
$string['shib_no_attributes_error'] = 'Sie versuchen vermutlich, die Shibboleth Authentifizierung zu verwenden. Moodle hat jedoch keine Nutzerattribute erhalten. Prüfen Sie bitte, ob der Identity Provider die erforderlichen Attribute ({$a}) dem Moodle-Serviceprovider zur Verfügung stellt oder informieren Sie die Administrator/innen.';
$string['shib_not_all_attributes_error'] = 'Moodle benötigt einige Shibboleth-Attribute, die derzeit nicht bereitgestellt werden. Es handelt sich um die Attribute: {$a}<br />Benachrichtigen Sie bitte die Administrator/innen oder Ihren Identity Provider.';
$string['shib_not_set_up_error'] = 'Die Shibboleth-Authentifizierung scheint nicht richtig eingerichtet zu sein, denn es sind keine Shibboleth-Umgebungsvariablen verfügbar. Beachten Sie das <a href="{$a}">README</a> mit weiteren Infos zur Einrichtung der Shibboleth-Authentifizierung.';
