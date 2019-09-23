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
 * Strings for component 'repository_googledocs', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   repository_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Intern und Extern';
$string['cachedef_folder'] = 'Google-Datei-IDs für Verzeichnisse im Systemkonto';
$string['clientid'] = 'Client ID';
$string['configplugin'] = 'Einstellungen für Google Drive';
$string['defaultreturntype'] = 'Standardmäßiger Rückgabewert';
$string['docsformat'] = 'Standardmäßiges Importformat für Document';
$string['drawingformat'] = 'Standardmäßiges Importformat für Drawing';
$string['external'] = 'Extern (in Moodle werden nur Links gespeichert)';
$string['fileoptions'] = 'Die Typen und Standardeinstellungen für zurückgegebene Dateien werden hier konfiguriert. Beachten Sie, dass alle extern verlinkten Dateien aktualisiert werden, so dass der Eigentümer das Moodle-Systemkonto ist.';
$string['googledocs:view'] = 'Google Drive Dateiverzeichnis anzeigen';
$string['importformat'] = 'Standardmäßige Importformate für Google Apps konfigurieren';
$string['internal'] = 'Intern (Dateien werden in Moodle gespeichert)';
$string['issuer'] = 'OAuth2-Service';
$string['issuer_help'] = 'Wählen Sie den OAuth-2-Service aus, der für die Verbindung mit der Google Drive API konfiguriert ist. Wenn der Service bisher noch nicht existiert, dann müssen Sie den Service anlegen.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link zu den OAuth-2-Services-EInstellungen">OAuth-2-Services-Einstellungen</a>';
$string['oauthinfo'] = '<p>Um dieses Plugin nutzen zu können, ist eine Registrierung bei Google erforderlich. Entsprechende Informationen finden Sie auf <a href="{$a->docsurl}">Google OAuth 2.0 Setup</a>.</p><p>Während der Registrierung müssen Sie folgende URL als \'Authorized Redirect URIs\' eingeben: <br />{$a->callbackurl}</p>Sie erhalten nach der Registrierung eine Client ID und ein Secret, mit denen Sie alle Plugins für Google Drive und Picasa konfigurieren können.</p><p>Der Service für \'Drive API\' muss zusätzlich aktiviert werden. </p>';
$string['owner'] = 'Eigentümer/in: {$a}';
$string['pluginname'] = 'Google Drive';
$string['presentationformat'] = 'Standardmäßiges Importformat für Presentation';
$string['privacy:metadata:repository_googledocs'] = 'Das Google Drive Repository Plugin speichert keine personenbezogenen Daten. Es überträgt aber Nutzerdaten von Moodle an ein externes System';
$string['privacy:metadata:repository_googledocs:email'] = 'E-Mail-Adresse des Google-Drive-Repository-Nutzers';
$string['privacy:metadata:repository_googledocs:searchtext'] = 'Suchanfrage des Google-Drive-Repository-Nutzers';
$string['searchfor'] = 'Suche nach {$a}';
$string['secret'] = 'Secret';
$string['servicenotenabled'] = 'Zugriff nicht konfiguriert. Prüfen Sie, ob der \'Drive API\'-Service aktiviert wurde.';
$string['spreadsheetformat'] = 'Standardmäßiges Importformat für Spreadsheet';
$string['supportedreturntypes'] = 'Unterstützte Dateien';
