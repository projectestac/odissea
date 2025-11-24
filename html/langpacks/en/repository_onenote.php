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
 * Strings for component 'repository_onenote', language 'en', version '4.5'.
 *
 * @package     repository_onenote
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_foldername'] = 'Folder name cache';
$string['clientid'] = 'Client ID';
$string['configplugin'] = 'Configure Microsoft OneNote';
$string['errorauthoidcnotconfig'] = 'The OpenID Connect authentication plugin or the Microsoft Account local plugin must be configured to use the OneNote repository.';
$string['notconfigured'] = '<p class="error">To use this plugin, you must first configure the <a href="{$a}/admin/settings.php?section=local_o365">Office 365 plugins</a></p>';
$string['oauthinfo'] = '<p>To use this plugin, you must register your site <a href="https://account.live.com/developers/applications">with Microsoft</a>.<p>As part of the registration process, you will need to enter the following URL as \'Redirect domain\':</p><p>{$a->callbackurl}</p>Once registered, you will be provided with a client ID and secret which can be entered here.</p>';
$string['onenote:view'] = 'View OneNote Notebooks';
$string['pluginname'] = 'Microsoft OneNote';
