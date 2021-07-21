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
 * Strings for component 'portfolio_flickr', language 'sv', version '3.11'.
 *
 * @package     portfolio_flickr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'API-nyckel';
$string['contenttype'] = 'Innehållstyper';
$string['err_noapikey'] = 'Ingen API-nyckel';
$string['err_noapikey_help'] = 'Det finns ingen API-nyckel som har konfigurerats för det här plugin-programmet. Du kan hämta en sådan på Flickrs sida för tjänster.';
$string['hidefrompublicsearches'] = 'Vill Du dölja dessa bilder för offentliga sökningar?';
$string['isfamily'] = 'Synlig för familj';
$string['isfriend'] = 'Synlig för vänner';
$string['ispublic'] = 'Offentlig (vem som helst kan se dem)';
$string['moderate'] = 'Måttlig/t';
$string['noauthtoken'] = 'Det gick inte att hämta någon "token" för autentisering för användning i den här sessionen.';
$string['other'] = 'Konst, illustration, CGI eller andra icke-fotografiska bilder';
$string['photo'] = 'Foton';
$string['pluginname'] = 'Flickr.com';
$string['privacy:metadata'] = 'Den här pluginmodulen skickar data externt till ett länkat Flickr-konto. Den lagrar inte data lokalt.';
$string['privacy:metadata:data'] = 'Personuppgifter som överförs från portföljens undersystem.';
$string['restricted'] = 'Avgränsad';
$string['safe'] = 'Säker';
$string['safetylevel'] = 'Säkerhetsnivå';
$string['screenshot'] = 'Skärmbilder';
$string['set'] = 'Ställ in';
$string['setupinfo'] = 'Instruktioner för inställningar';
$string['setupinfodetails'] = 'Om du vill hämta API-nyckeln och den hemliga strängen, gå till <a href="{$a->applyurl}">ansök om en ny nyckel</a>. När ny nyckel och hemlighet har genererats åt dig följer du länken "Redigera autentiserings-flöde för den här appen" på sidan. Välj \'Apptyp\' till \'Webbprogram\'. I fältet "Callback-URL" anger du värdet: <br /><code>{$a->callbackurl}</code>.<br />Du kan även ange din Moodle-webbplatsbeskrivning och logotyp. Dessa värden kan ställas in senare på <a href="{$a->keysurl}">sidan</a> som visar dina Flickr-program.';
$string['sharedsecret'] = 'Hemlig sträng';
$string['title'] = 'Titel';
$string['uploadfailed'] = 'Det gick inte att ladda upp bild/er till flickr.com:	 {$a}';
