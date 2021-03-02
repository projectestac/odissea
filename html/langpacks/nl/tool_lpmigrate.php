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
 * Strings for component 'tool_lpmigrate', language 'nl', version '3.8'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Toegestane cursussen';
$string['allowedcourses_help'] = 'Selecteer cursussen die naar het nieuwe framework gemigreerd moeten worden. Als geen enkele cursus gespecificeerd wordt, dan zullen alle cursussen gemigreerd worden.';
$string['continuetoframeworks'] = 'Ga verder naar frameworks';
$string['coursecompetencymigrations'] = 'Cursus competentiemigraties';
$string['coursemodulecompetencymigrations'] = 'Cursusactiviteit en bronnen competentiemigraties';
$string['coursemodulesfound'] = 'Cursusactiviteiten of bronnen gevonden';
$string['coursesfound'] = 'Cursussen gevonden';
$string['coursestartdate'] = 'Cursus startdatum';
$string['coursestartdate_help'] = 'Indien ingeschakeld zullen cursussen met een startdatum voor de opgegeven datum niet gemigreerd worden.';
$string['disallowedcourses'] = 'Niet te migreren cursussen';
$string['disallowedcourses_help'] = 'Selecteer cursussen die NIET gemigreerd mogen worden naar het nieuwe framework.';
$string['errorcannotmigratetosameframework'] = 'Kan niet migreren naar hetzelfde framework.';
$string['errorcouldnotmapcompetenciesinframework'] = 'Kon niet koppelen naar een competentie in dit framework.';
$string['errors'] = 'Fouten';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Fout tijdens het migreren van cursuscompetentie: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Fout tijdens het migreren van de activiteit- of broncompetentie: {$a}';
$string['excludethese'] = 'Deze uitsluiten';
$string['explanation'] = 'Deze tool kan gebruikt worden om een competentieframework te updaten naar een nieuwe versie. De tool zoekt naar competenties in cursussen en activiteiten die het oude framework gebruiken en past de links aan om te verwijzen naar het nieuwe framework.

Het wordt afgeraden om de oude set competenties rechtstreeks te bewerken, omdat dit alle competenties zou wijzigen die al toegekend zijn aan studieplannen van gebruikers.

De werkwijze is om de nieuwe versie van een framework te importeren, het oude framework te verbergen en dan deze tool te gebruiken om de nieuwe cursussen naar het nieuwe framework te migreren.';
$string['findingcoursecompetencies'] = 'Zoeken naar cursuscompetenties';
$string['findingmodulecompetencies'] = 'Zoeken naar activiteit- en broncompetenties';
$string['frameworks'] = 'Frameworks';
$string['limittothese'] = 'Beperk tot deze';
$string['lpmigrate:frameworksmigrate'] = 'Migreer frameworks';
$string['migrateframeworks'] = 'Migreer frameworks';
$string['migratefrom'] = 'Migreer van';
$string['migratefrom_help'] = 'Selecteer ouder te gebruiken framework';
$string['migratemore'] = 'Nog migreren';
$string['migrateto'] = 'Migreer naar';
$string['migrateto_help'] = 'Selecteer de nieuwere versie van het framework. Je kunt enkel een niet-verborgen framework selecteren.';
$string['migratingcourses'] = 'Cursussen migreren';
$string['missingmappings'] = 'Ontbrekende koppelingen';
$string['performmigration'] = 'Migratie uitvoeren';
$string['pluginname'] = 'Competenties migratie-tool';
$string['privacy:metadata'] = 'De competentie migratie tool-plugin bewaart geen persoonlijke gegevens.';
$string['results'] = 'Resultaten';
$string['startdatefrom'] = 'Startdatum van';
$string['unmappedin'] = 'Ongekoppeld in {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'De cursuscompetentie kon niet verwijderd worden.';
$string['warningcouldnotremovemodulecompetency'] = 'De activiteit- of broncompetentie kon niet verwijderd worden.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'De cursuscompetentie bestaat al op de bestemming.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'De activiteit- of broncompetentie bestaat al op de bestemming.';
$string['warnings'] = 'Waarschuwingen';
