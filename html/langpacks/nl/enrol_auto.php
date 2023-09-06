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
 * Strings for component 'enrol_auto', language 'nl', version '4.1'.
 *
 * @package     enrol_auto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auto:config'] = 'Instellen automatisch aanmeldingsinstanties';
$string['auto:manage'] = 'Beheer aangemelde gebruikers';
$string['auto:unenrol'] = 'Afmelden gebruikers van een cursus';
$string['auto:unenrolself'] = 'Zelf afmelden van een cursus';
$string['courseview'] = 'Cursus bekijken';
$string['customwelcomemessage'] = 'Aanpassen welkomstboodschap';
$string['customwelcomemessage_help'] = 'Een aangepast welkomstbericht dat toegevoegd kan worden als tekst of als Moodle-auto-opmaak, met HTML-tags en multilang-tags.

Volgende plaatshouders kunnen gebruikt worden in het bericht:

* Cursusnaam {$a->coursename}
* Link naar profielpagina van de gebruiker {$a->profileurl}';
$string['defaultrole'] = 'Standaard toegewezen rol';
$string['defaultrole_desc'] = 'Kies de rol die moet toegewezen worden tijdens automatisch aanmelden.';
$string['editenrolment'] = 'Bewerk aanmelding';
$string['enrolon'] = 'Aanmelden op';
$string['enrolon_desc'] = 'De gebeurtenis die een automatisch aanmelding triggeren.';
$string['enrolon_help'] = 'Kies de gebeurtenis die een automatische aanmelding triggeren.

**Cursus bekijken** - Meld een gebruiker aan wanneer deze een cursus bekijkt.<br>

**Gebruiker inloggen** - Meld een gebruiker aan zodra deze ingelogd. <br>

**Cursus activiteit / bron bekijken** - Meld een gebruiker aan wanneer deze een van de onderstaande activiteiten/bronnen bekijkt.<br>
*Let op:* bij deze optie moet je een Gastentoegang aan staan.';
$string['modview'] = 'Cursus activiteit/bron bekijken';
$string['modviewmods'] = 'Activiteiten/bronnen';
$string['modviewmods_desc'] = 'Het bekijken van een van de geselecteerde activiteiten/bronnen zal het automatisch aanmelden triggeren.';
$string['pluginname'] = 'Automatisch aanmelden';
$string['pluginname_desc'] = 'De automatisch aanmelden plugin meldt gebruikers automatisch aan bij het bekijken van de cursus, de activiteit of een bron.';
$string['requirepassword'] = 'Een aanmeldingssleutel is verplicht.';
$string['requirepassword_desc'] = 'Heeft een aanmeldingssleutel in nieuwe cursussen nodig en houdt tegen dat een aanmeldingssleutel verwijderd wordt van een bestaande cursus.';
$string['role'] = 'Standaard aangewezen rol';
$string['sendcoursewelcomemessage'] = 'Stuur cursus welkomstboodschap';
$string['sendcoursewelcomemessage_help'] = 'Wanneer ingesteld, ontvangen gebruikers bij een automatische aanmelding een welkomstboodschap in hun e-mail.';
$string['status'] = 'Sta automatisch aanmelden toe';
$string['status_desc'] = 'Sta automatisch aanmelden van gebruikers in een cursus standaard toe.';
$string['status_help'] = 'Het is mogelijk om deze plugin standaard aan alle nieuwe cursussen toe te voegen.';
$string['unenrol'] = 'Afmelden gebruiker';
$string['unenrolselfconfirm'] = 'Weet je zeker dat jezelf wilt afmelden voor de cursus "{$a}"?';
$string['unenroluser'] = 'Weet je zeker dat je "{$a->user}" wilt afmelden voor de cursus "{$a->course}"?';
$string['userlogin'] = 'Inloggen gebruiker';
$string['welcometocourse'] = 'Welkom op {$a}';
$string['welcometocoursetext'] = 'Welkom op {$a->coursename}!

Als je het nog niet gedaan hebt, wil je dan je profielpagina aanpassen zodat we meer over jouw kunnen leren:

{$a->profileurl}';
