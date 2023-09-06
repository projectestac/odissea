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
 * Strings for component 'repository_dropbox', language 'sv', version '4.1'.
 *
 * @package     repository_dropbox
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Dropbox API-nyckel';
$string['cachelimit'] = 'Cachegräns';
$string['cachelimit_info'] = 'Ange den maximala storleken på filer (i byte) som ska cachelagras på servern för Dropbox alias/genvägar. Cachelagrade filer erbjuds när källan inte längre är tillgänglig. Tomt värde eller noll beryder cachelagring av alla filer oavsett storlek.';
$string['configplugin'] = 'Dropboxkonfiguration';
$string['crontask'] = 'Bakgrundsbearbetning av Dropbox-lagringsplats';
$string['dropbox'] = 'Dropbox';
$string['dropbox:view'] = 'Visa en Dropbox-katalog';
$string['instruction'] = 'Du kan hämta din API-nyckel och hemlighet från <a href="https://www.dropbox.com/developers/apps">Dropbox developers</a>. När du ställer in din nyckel väljer du "Full Dropbox" för "Access level".';
$string['issuer'] = 'OAuth2-tjänst';
$string['issuer_help'] = 'Välj den OAuth2-tjänst som är konfigurerad för att kommunicera med Dropbox API:t. Om tjänsten inte finns behöver du skapa den.';
$string['logoutdesc'] = '(Logga ut när du är klar med Dropbox)';
$string['notitle'] = 'ingentitel';
$string['oauth2redirecturi'] = 'OAuth 2 omdirigerings-URL';
$string['pluginname'] = 'Dropbox';
$string['privacy:metadata:repository_dropbox'] = 'Pluginmodulen Dropbox lagrar ingen personinformation, men överför användardata från Moodle till fjärrsystemet.';
$string['privacy:metadata:repository_dropbox:query'] = 'Användarens sökfrågetext för Dropbox-lagringsplatsen.';
$string['remember'] = 'Kom ihåg mig';
$string['secret'] = 'Dropbox-hemlighet';
