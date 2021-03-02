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
 * Strings for component 'enrol_mnet', language 'sv', version '3.8'.
 *
 * @package     enrol_mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error_multiplehost'] = 'En instans av MNet-registreringsmodulen finns redan för den här värden. Endast en instans per värd och/eller en instans för "Alla värdar" är tillåten.';
$string['instancename'] = 'Namn på registreringsmetod';
$string['instancename_help'] = 'Du kan också byta namn på den här instansen av MNet-registreringsmetoden. Om du lämnar det här fältet tomt används standardinstansnamnet som innehåller namnet på fjärrvärden och den tilldelade rollen för användarna.';
$string['mnet:config'] = 'Konfigurera MNet-registreringsinstanser';
$string['mnet_enrol_description'] = 'Offentliggör den här tjänsten för att tillåta administratörer hos {$a} att registrera sina studenter på kurser som Du har skapat på Din server. <br/><ul><li><em>Beroende</em>: Du måste även <strong>offentliggöra</strong> SSO (tillhandahållare av tjänster) tjänsten hos {$a}.</li><li><em>Beroende</em>: Du måste även <strong>abonnera</strong> på SSO (tillhandahållare av identiteter) tjänsten hos {$a}.</li></ul><br/>Abonnera på den här tjänsten för att det ska vara möjligt att registrera Dina studenter på kurser hos {$a}.<br/><ul><li><em>Beroende</em>: Du måste även <strong>abonnera</strong> på SSO (tillhandahållare av tjänster) tjänsten hos {$a}.</li><li><em>Beroende</em>: Du måste även <strong>offentliggöra</strong> SSO (tillhandahållare av identiteter) tjänsten hos {$a}.</li></ul><br/>';
$string['mnet_enrol_name'] = 'Fjärregistrerings-tjänst';
$string['pluginname'] = 'MNet fjärregistreringar';
$string['pluginname_desc'] = 'Tillåter en fjärr MNet-värd att registrera sina användare i våra kurser.';
$string['privacy:metadata'] = 'Pluginmodulen MNet-fjärregistrering lagrar ingen personlig information.';
$string['remotesubscriber'] = 'Fjärrvärd';
$string['remotesubscriber_help'] = 'Välj "Alla värdar" för att öppna den här kursen för alla MNet-värdar som vi erbjuder fjärrregistreringstjänsten till. Eller välj en enda värd för att göra den här kursen tillgänglig endast för sina användare.';
$string['remotesubscribersall'] = 'Alla värdar';
$string['roleforremoteusers'] = 'Roll för deras användare';
$string['roleforremoteusers_help'] = 'Vilken roll får fjärranvändarna från den valda värden.';
