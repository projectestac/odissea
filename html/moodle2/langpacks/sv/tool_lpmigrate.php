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
 * Strings for component 'tool_lpmigrate', language 'sv', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_lpmigrate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Tillåta kurser';
$string['allowedcourses_help'] = 'Välj kurser som ska migreras till det nya ramverket. Om ingen kurs är specifierad kommer alla kurser att migreras.';
$string['continuetoframeworks'] = 'Fortsätt till ramverk';
$string['coursecompetencymigrations'] = 'Migrering av kurskompetenser';
$string['coursemodulecompetencymigrations'] = 'Migrationer av kursaktivitet och resurskompetenser.';
$string['coursemodulesfound'] = 'Kursaktiviteter eller resurser hittade';
$string['coursesfound'] = 'Kurser hittade';
$string['coursestartdate'] = 'Kursers startdatum';
$string['coursestartdate_help'] = 'Om aktiverad kommer kurser med startdatum före det specificerade datumet ej att migreras';
$string['disallowedcourses'] = 'Ej tillåtna kurser';
$string['disallowedcourses_help'] = 'Välj någon eller några kurser som INTE ska migreras till ramverket';
$string['errorcannotmigratetosameframework'] = 'Kan inte migrera från och till samma ramverk';
$string['errorcouldnotmapcompetenciesinframework'] = 'Kunde inte fästa till någon kompetens i detta ramverk.';
$string['errors'] = 'Fel';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Fel vid migrering av kurskompetensen: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Fel vid migrering av aktivitet eller resurskompetens: {$a}';
$string['excludethese'] = 'Exkludera dessa';
$string['explanation'] = 'Detta verktyg kan uppdatera ett ramverk för kompetenser till en nyare version. Den söker för kompetenser i kurser och aktiviteter med hjälp av det äldre ramverket och uppdaterar länkarna så de pekar på det nya ramverket.

Det är inte rekommenderat att redigera de äldre versionerna av kompetenserna direkt då detta ändra alla kompetenser som redan gets i användares studieplaner.

En bra arbetsgång är att importera en ny version av ramverket, gömma det gamla ramverket och sedan med detta verktyg migrera nya kurser till det nya ramverket';
$string['findingcoursecompetencies'] = 'Hitta kurskompetenser';
$string['findingmodulecompetencies'] = 'Hitta aktivitet och resurskompetenser';
$string['frameworks'] = 'Ramverk';
$string['limittothese'] = 'Begränsa till dessa';
$string['lpmigrate:frameworksmigrate'] = 'Migrera ramverk';
$string['migrateframeworks'] = 'Migrera ramverk';
$string['migratefrom'] = 'Migrera från';
$string['migratefrom_help'] = 'Välj de äldre ramverket som används nu';
$string['migratemore'] = 'Migrera mer';
$string['migrateto'] = 'Migrera till';
$string['migrateto_help'] = 'Välj den nyare versionen av ramverket. Det är endast möjligt att välja ett ramverk som inte är dolt.';
$string['migratingcourses'] = 'Migrering av kurser';
$string['missingmappings'] = 'Saknade kartläggningar';
$string['performmigration'] = 'Utför migrering';
$string['pluginname'] = 'Verktyg för migrering av kompetenser';
$string['results'] = 'Resultat';
$string['startdatefrom'] = 'Startdatum från';
$string['unmappedin'] = 'Ej kartlagd i {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'Kurskompetens kunde inte tas bort.';
$string['warningcouldnotremovemodulecompetency'] = 'Aktiviteten eller resurskompetensen kunde inte tas bort.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'Kurskompetensens mål finns redan';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'Målets aktivitet eller resurskompetens finns redan.';
$string['warnings'] = 'Varningar';
