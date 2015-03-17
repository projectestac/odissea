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
 * Strings for component 'etherpadlite', language 'en', branch 'MOODLE_26_STABLE'
 *
 * @package   etherpadlite
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminguests'] = 'Guests allowed to write?';
$string['adminguestsdesc'] = 'With this set, someone who is allowed to, can allow guests to write in his specific etherpadlite module';
$string['apikey'] = 'ApiKey';
$string['apikeydesc'] = 'This is the apiKey this module needs, to communicate with your server. n This key is stored on your webserver';
$string['checkssl'] = 'Verify HTTPS cert';
$string['checkssldesc'] = 'With this set, the HTTPS certificate of the etherpadlite server will be checked, to prevent man in the middle attacks';
$string['cookiedomain'] = 'Cookie Domain';
$string['cookiedomaindesc'] = 'Here you can enter the domain, which should be stored in the session cookie,
									  so that the etherpadlite server recognize it. When moodle runs on the domain moodle.example.com and your etherpadlite server on etherpadlite.example.com then your cookie domain should be .example.com.';
$string['cookietime'] = 'Session elapse time';
$string['cookietimedesc'] = 'Here you have to enter the time in seconds until the session should be valid';
$string['etherpadlite'] = 'Etherpad Lite';
$string['etherpadlite:addinstance'] = 'Add new pad';
$string['etherpadlitefieldset'] = 'Custom example fieldset';
$string['etherpadliteintro'] = 'Etherpadlite Intro';
$string['etherpadlitename'] = 'Etherpadlite Name';
$string['guestsallowed'] = 'Are Guests allowed to write?';
$string['guestsallowed_help'] = 'This determines, if a guests is allowed to write. If not, then he will only see the content';
$string['modulename'] = 'Etherpad Lite (beta)';
$string['modulename_help'] = 'The Etherpad Lite module enables the students and teacher to write text in a collaborative way. (The text is synced as they type)

(The etherpad server, which stands behind this module, is still in beta stage. That\'s why problems might occur, but aren\'t expected)';
$string['modulenameplural'] = 'Etherpad Lites';
$string['padname'] = 'Padname for all instances';
$string['padnamedesc'] = 'A general padname can be helpful, if you want to find all instances from this installation on your etherpadlite server. Pad groups are generated autmatically';
$string['pluginadministration'] = 'etherpad lite administration';
$string['pluginname'] = 'Etherpad Lite';
$string['ssl'] = 'Https Redirect';
$string['ssldesc'] = 'With this set, your site will redirect itself to https, if an etherpad is opened (eyecandy for the user)';
$string['summaryguest'] = 'You are logged in as guest. That\'s why you can only see the readonly version of this Pad. Reload the page to get new changes.';
$string['url'] = 'Server URL';
$string['urldesc'] = 'This is the URL to your Etherpadlite server in the form: http[s]://host[:port]/[subDir/]';
