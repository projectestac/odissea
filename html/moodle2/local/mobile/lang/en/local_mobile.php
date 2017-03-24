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
 * Strings for component 'local_mobile', language 'en'.
 *
 * @package   local_mobile
 * @copyright 2014 Juan Leyva <juan@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['cannotcreatetoken'] = 'Automatic token generation is not available to site administrators (they must create a token manually in the site)';
$string['local_mobiledescription'] = 'Plugin that extends the Mobile service features';
$string['pluginname'] = 'Moodle Mobile additional features';
$string['pluginnotenabledorconfigured'] = 'The Moodle Mobile local plugin must be enabled and configured in order to launch the app';
$string['local_mobilesettings'] = 'Settings';
$string['local_mobiletypeoflogin'] = 'Choose the type of login';
$string['local_mobiletypeoflogin_key'] = 'Type of login';
$string['local_mobileurlscheme'] = 'Use this setting to force the URL scheme for login via a browser window. In most of the cases it should be left empty.';
$string['local_mobileurlscheme_key'] = 'URL scheme';

$string['loginintheapp'] = 'Via the app';
$string['logininthebrowser'] = 'Via a browser window (for SSO plugins)';
$string['loginintheinappbrowser'] = 'Via an embedded browser (for SSO plugins)';
$string['checkpluginconfiguration'] = 'Check plugin configuration';
$string['enableadditionalservice'] = 'Enable the Moodle Mobile additional features service';
$string['enableadditionalservicedescription'] = 'This service must be enabled.';
$string['allowpermissions'] = 'Grant permissions to the authenticated user role';
$string['allowpermissionsdescription'] = 'Edit the Authenticated user role and allow the capability moodle/webservice:createtoken';
$string['clickheretolaunchtheapp'] = 'Please, click here if the app does not open automatically';

$string['customlangstrings'] = 'Custom language strings';
$string['customlangstrings_desc'] = 'Words and phrases displayed in the app can be customised here. Enter each custom language string on a new line with format: string identifier, custom language string and language code, separated by pipe characters. For example:
<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
</pre>
For a complete list of string identifiers see <a href="https://github.com/moodlehq/moodlemobile-phonegapbuild/blob/master/build/lang/en.json">this list</a>.';

$string['custommenuitems'] = 'Custom menu items';
$string['custommenuitems_desc'] = 'Additional items can be added to the app\'s main menu by specifying them here. Enter each custom menu item on a new line with format: item text, link URL, link-opening method (inappbrowser, browser or embedded) and language code (optional, for displaying the item to users of the specified language only), separated by pipe characters. For example:
<pre>
App\'s help | https://someurl.xyz/help | inappbrowser | en
Visit our SIS | https://someurl.xyz | browser | en
My grades | https://someurl.xyz/local/mygrades/index.php | embedded | en
Mis calificaciones | https://someurl.xyz/local/mygrades/index.php | embedded | es
</pre>
Use inappbrowser when you want to open the link in a browser without leaving the app, use browser for opening the link in the device default browser and embedded if you want to display the link embedded in a new page in the app.';

$string['disabledfeatures'] = 'Disabled features';
$string['disabledfeatures_desc'] = 'Select here the features you want to disable in the Mobile app for your site. Please note that some features listed here could be already disabled via other site settings. You will have to log out and log in again in the app to see the changes.';

$string['forcelogout'] = 'Force log out';
$string['forcelogout_desc'] = 'If enabled, the app option \'Change site\' is replaced by \'Log out\'. This results in the user being completely logged out. They must then re-enter their password the next time they wish to access the site.';

$string['mainmenu'] = 'Main menu';
$string['mobilefeatures'] = 'Mobile features';
$string['notifications'] = 'Notifications';
$string['remoteaddons'] = 'Remote add-ons';
