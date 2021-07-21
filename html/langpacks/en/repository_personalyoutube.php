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
 * Strings for component 'repository_personalyoutube', language 'en', version '3.11'.
 *
 * @package     repository_personalyoutube
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Client ID';
$string['configplugin'] = 'Configuration for personal YouTube repository';
$string['issuer'] = 'OAuth 2 service';
$string['issuer_help'] = 'Select the OAuth 2 service that is configured to talk to the YouTube API. If the service does not exist yet, you will need to create it.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link to OAuth 2 services configuration">OAuth 2 services configuration</a>';
$string['oauthinfo'] = '<p>To use this plugin, you must register your site with Google, as described in the documentation <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>As part of the registration process, you will need to enter the following URL as \'Authorized Redirect URIs\':</p><p>{$a->callbackurl}</p><p>Once registered, you will be provided with a client ID and secret which can be used to configure all Google Services plugins.</p><p>Please also note that you will have to enable the service \'YouTube API\'.</p>';
$string['personalyoutube:view'] = 'View personal YouTube repository';
$string['pluginname'] = 'Personal YouTube';
$string['pluginname_help'] = 'Upload and publish personal YouTube Videos';
$string['privacy:metadata:repository_personalyoutube'] = 'The Personal YouTube repository plugin does not store any personal data, but does transmit user data from Moodle to the remote system.';
$string['privacy:metadata:repository_personalyoutube:email'] = 'The email of the Personal YouTube repository user.';
$string['privacy:metadata:repository_personalyoutube:searchtext'] = 'The Personal YouTube repository user search text query.';
$string['search'] = 'Search';
$string['secret'] = 'Secret';
$string['servicenotenabled'] = 'Access not configured. Make sure the service \'YouTube API\' is enabled.';
$string['uploads'] = 'Uploads';
