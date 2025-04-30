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
 * Strings for component 'enrol_meta', language 'nl', version '4.4'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Voeg toe aan groep';
$string['coursesort'] = 'Bron cursuslijst volgorde';
$string['coursesort_help'] = 'Wanneer de broncursus aan de doelcursus gelinkt wordt, hoe moeten de broncursussen dan geordend worden?';
$string['creategroup'] = 'Maak nieuwe groep';
$string['defaultgroupnametext'] = '{$a->name} cursus {$a->increment}';
$string['enrolmetasynctask'] = 'Koepelcursus aanmeldingssynchronisatietaak';
$string['linkedcourse'] = 'Link cursus';
$string['meta:config'] = 'Configureer meta aanmeldingsinstellingen';
$string['meta:selectaslinked'] = 'Selecteer cursus als koepelcursus';
$string['meta:unenrol'] = 'Meld de geschorste gebruikers af';
$string['nosyncroleids'] = 'Niet-gesynchroniseerde rollen';
$string['nosyncroleids_desc'] = 'Selecteer rollen die niet gesynchroniseerd moeten worden tussen de broncursus en de doelcursus.';
$string['pluginname'] = 'Link naar koepelcursus';
$string['pluginname_desc'] = 'De koepelcursus link synchroniseert aanmeldingen en rollen van de broncursus naar de doelcursus.';
$string['privacy:metadata:core_group'] = 'De koepelcursus aanmeldingsplugin kan een nieuwe groep maken of een bestaande gebruiken en er deelnemers aan toevoegen vanuit de broncursus.';
$string['samemetacourse'] = 'Je kunt geen koepelcursus koppelen aan zichzelf.';
$string['syncall'] = 'Synchroniseer alle aangemelde gebruikers';
$string['syncall_desc'] = 'Indien ingeschakeld worden alle aangemelde gebruikers gesynchroniseerd van de broncursus, zelfs als ze daar geen rol hebben. Anders zullen enkel gebruikers die minstens één rol hebben aangemeld worden in de doelcursus.';
$string['unknownmetacourse'] = 'Onbekende koepelcursus korte naam';
$string['wscannotcreategroup'] = 'Geen toestemming om groep te maken in gekoppelde cursus-ID = {$a}.';
$string['wsinvalidcourse'] = 'Cursus-ID = {$a} bestaat niet of je hebt geen toestemming om te linken met koepelcursus aanmelding.';
$string['wsinvalidmetacourse'] = 'Koepelcursus id = {$a} bestaat niet of je hebt geen toestemming om een aanmelding toe te voegen.';
$string['wsnoinstancesspecified'] = 'Geen instanties opgegeven';
