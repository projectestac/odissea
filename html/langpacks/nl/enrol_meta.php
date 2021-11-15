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
 * Strings for component 'enrol_meta', language 'nl', version '3.11'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Voeg toe aan groep';
$string['coursesort'] = 'Cursuslijst instellen';
$string['coursesort_help'] = 'Dit bepaalt of de lijst met cursussen die gelinkt kunnen worden gesorteerd worden volgens een bepaalde sorteervolgorde (bijvoorbeeld de volgorde die ingesteld in Site-beheer>Cursussen>Beheer cursussen en categorieën) of in alfabetische volgorde.';
$string['creategroup'] = 'Maak nieuwe groep';
$string['defaultgroupnametext'] = '{$a->name} cursus {$a->increment}';
$string['enrolmetasynctask'] = 'Koepelcursus aanmeldingssynchronisatietaak';
$string['linkedcourse'] = 'Link cursus';
$string['meta:config'] = 'Configureer meta aanmeldingsinstellingen';
$string['meta:selectaslinked'] = 'Selecteer cursus als koepelcursus';
$string['meta:unenrol'] = 'Meld de geschorste gebruikers af';
$string['nosyncroleids'] = 'Niet-gesynchroniseerde rollen';
$string['nosyncroleids_desc'] = 'Standaard zijn alle roltoewijzingen op cursus niveau gesynchroniseerd van bovenliggende tot onderliggende cursussen. Rollen die hier geselecteerd zijn, worden niet opgenomen in het synchronisatie proces. De rollen die beschikbaar zijn voor synchronisatie worden bij de volgende crontaak bijgewerkt.';
$string['pluginname'] = 'Link naar koepelcursus';
$string['pluginname_desc'] = 'Koepelcursus aanmeldingsplugin synchroniseert aanmeldingen en rollen tussen twee verschillende cursussen';
$string['privacy:metadata:core_group'] = 'Inschrijven meta-plug-in kan een nieuwe groep maken of een bestaande groep gebruiken om alle deelnemers aan de gekoppelde cursus toe te voegen.';
$string['syncall'] = 'Synchroniseer alle aangemelde gebruikers';
$string['syncall_desc'] = 'Indien ingeschakeld worden alle aangemelde gebruikers gesynchroniseerd, zelfs als ze geen rol hebben in de bovenliggende cursus.';
