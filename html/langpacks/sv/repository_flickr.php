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
 * Strings for component 'repository_flickr', language 'sv', version '4.4'.
 *
 * @package     repository_flickr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'API-nyckel';
$string['callbackurl'] = 'Callback-URL';
$string['callbackurltext'] = '<ol>
<li>Gå till <a href="http://www.flickr.com/services/api/keys/">Flickr API Keys</a> igen.</li>
<li>Försäkra dig om att callback-adressen för den här Flickr-nyckeln är <strong>{$a}</strong></li></ol>';
$string['callbackwarning'] = '<ol>
<li>Hämta en <a href="http://www.flickr.com/services/api/keys/">Flickr API-nyckel och hemlighet</a> från Flickr för denna Moodle-webbplats.</li>
<li>Ange dessa uppgifter här, klicka därefter på <kbd>Spara</kbd> och sedan <kbd>Inställningar</kbd> för att komma tillbaka till den här sidan. Du kommer då att se att Moodle genererat en callback-URL åt dig.</li>
<li>Redigera inställningarna för dina <a href="http://www.flickr.com/services/api/keys/">Flickr-nycklar</a> igen och ställ in callback-URL:en.</li></ol>';
$string['configplugin'] = 'Flickr-konfiguration';
$string['emailaddress'] = 'E-post';
$string['flickr:view'] = 'Visa Flickr-filer';
$string['invalidemail'] = 'Ogiltig Flickr e-postadress';
$string['notitle'] = 'utantitel';
$string['nullphotolist'] = 'Det finns inga foton i detta kontot';
$string['pluginname'] = 'Flickr';
$string['pluginname_help'] = 'Lagring på flickr.com';
$string['privacy:metadata:repository_flickr'] = 'Pluginmodulen Flickr lagrar ingen personinformation, men överför användardata från Moodle till fjärrsystemet.';
$string['privacy:metadata:repository_flickr:preference:repository_flickr_access_token'] = 'Inställningen för Flickr-lagringsplatsens OAuth token.';
$string['privacy:metadata:repository_flickr:preference:repository_flickr_access_token_secret'] = 'Flickr-lagringsplatsen OAuth hemlighet. Denna exkluderas vid export av sekretessdata.';
$string['privacy:metadata:repository_flickr:text'] = 'Användarens sökfråga för Flickr.';
$string['remember'] = 'Kom ihåg mig';
$string['secret'] = 'Hemlighet';
$string['username'] = 'Flickr e-postadress';
