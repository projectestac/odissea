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
 * Strings for component 'tool_lpmigrate', language 'sv', version '4.5'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Tillåtna kurser';
$string['allowedcourses_help'] = 'Välj kurser som ska migreras till det nya ramverket. Om ingen kurs är specifierad kommer alla kurser att migreras.';
$string['continuetoframeworks'] = 'Fortsätt till ramverk';
$string['coursecompetencymigrations'] = 'Kurskompetensmigreringar';
$string['coursemodulecompetencymigrations'] = 'Kursaktivitets- och resurskompetensmigreringar';
$string['coursemodulesfound'] = 'Kursaktiviteter eller -resurser hittades';
$string['coursesfound'] = 'Kurser hittades';
$string['coursestartdate'] = 'Kursers startdatum';
$string['coursestartdate_help'] = 'Om aktiverad kommer kurser med startdatum före det specificerade datumet ej att migreras';
$string['disallowedcourses'] = 'Ej tillåtna kurser';
$string['disallowedcourses_help'] = 'Välj kurser som INTE ska migreras till det nya ramverket';
$string['errorcannotmigratetosameframework'] = 'Kan inte migrera från och till samma ramverk';
$string['errorcouldnotmapcompetenciesinframework'] = 'Kunde inte mappa till någon kompetens i detta ramverk.';
$string['errors'] = 'Fel';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Fel vid migrering av kurskompetensen: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Fel vid migrering av aktivitets- eller resurskompetens: {$a}';
$string['excludethese'] = 'Exkludera dessa';
$string['explanation'] = 'Det här verktyget kan användas för att uppdatera ett kompetensramverk till en nyare version. Det söker efter kompetenser i kurser och aktiviteter med hjälp av det äldre ramverket och uppdaterar länkarna så att de pekar på det nya ramverket.

Det är inte rekommenderat att redigera den gamla uppsättningen av kompetenser direkt, eftersom detta skulle ändra alla de kompetenser som redan har tilldelats i användarnas studieplaner.

Vanligtvis importerar du den nya versionen av ett ramverk, döljer det gamla ramverket, och använder sedan det här verktyget för att migrera nya kurser till det nya ramverket.';
$string['findingcoursecompetencies'] = 'Hittar kurskompetenser';
$string['findingmodulecompetencies'] = 'Hittar aktivitets- och resurskompetenser';
$string['frameworks'] = 'Ramverk';
$string['limittothese'] = 'Begränsa till dessa';
$string['lpmigrate:frameworksmigrate'] = 'Migrera ramverk';
$string['migrateframeworks'] = 'Migrera ramverk';
$string['migratefrom'] = 'Migrera från';
$string['migratefrom_help'] = 'Välj det äldre ramverket som för närvarande används';
$string['migratemore'] = 'Migrera fler';
$string['migrateto'] = 'Migrera till';
$string['migrateto_help'] = 'Välj den nyare versionen av ramverket. Det är endast möjligt att välja ett ramverk som inte är dolt.';
$string['migratingcourses'] = 'Migrerar kurser';
$string['missingmappings'] = 'Mappningar saknas';
$string['performmigration'] = 'Utför migrering';
$string['pluginname'] = 'Verktyg för kompetensmigreringar';
$string['privacy:metadata'] = 'Verktyget för kompetensmigreringar lagrar ingen personlig information.';
$string['results'] = 'Resultat';
$string['startdatefrom'] = 'Startdatum från';
$string['unmappedin'] = 'Ej mappad i {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'Kurskompetensen kunde inte tas bort.';
$string['warningcouldnotremovemodulecompetency'] = 'Aktivitets- eller resurskompetensen kunde inte tas bort.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'Målkurskompetensen finns redan';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'Målaktivitets- eller -resurskompetensen finns redan.';
$string['warnings'] = 'Varningar';
