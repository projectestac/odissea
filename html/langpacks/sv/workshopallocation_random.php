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
 * Strings for component 'workshopallocation_random', language 'sv', branch 'MOODLE_38_STABLE'
 *
 * @package   workshopallocation_random
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allocationdeallocategraded'] = 'Det går inte att ta bort redan betygsatt bedömning
: utvärderare <strong>{$a->reviewername}</strong>, inlämnare: <strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = 'Återanvände utvärdering: <strong>{$a->reviewername}</strong> behölls som utvärderare av <strong>{$a->authorname}</strong>';
$string['allocationsettings'] = 'Inställningar för tilldelning av utvärderare';
$string['assessmentdeleteddetail'] = 'Utvärderare borttagen: <strong>{$a->reviewername}</strong> utvärderar inte längre <strong>{$a->authorname}</strong>';
$string['assesswosubmission'] = 'Deltagarna får utvärdera utan att ha lämnat in något själva';
$string['confignumofreviews'] = 'Standard antal inlämningar som slumpmässigt tilldelas';
$string['excludesamegroup'] = 'Förhindra bedömning från samma grupp';
$string['noallocationtoadd'] = 'Inga tilldelningar att lägga till';
$string['nogroupusers'] = '<p>Varning: Om workshopen är i läget \'synliga grupper\' eller \'separata grupper\', så måste användarna höra till åtminstone en grupp för att detta verktyg ska tilldela dem utvärderingar. Användare utan grupp kan fortfarande ges nya självutvärderingar eller få redan existerande utvärderingar borttagna.</p>
<p>Följande användare saknar grupp: {$a}</p>';
$string['numofdeallocatedassessment'] = 'Raderar {$a} utvärderingstilldelning(ar)';
$string['numofrandomlyallocatedsubmissions'] = 'Tilldela slumpmässigt {$a} tilldelningar';
$string['numofreviews'] = 'Antalet givna utvärderingar';
$string['numperreviewer'] = 'per utvärderare';
$string['pluginname'] = 'Slumpmässig fördelning';
$string['randomallocationdone'] = 'Slumpmässig fördelning gjord';
$string['removecurrentallocations'] = 'Radera nuvarande tilldelningar';
$string['resultnomorepeers'] = 'Inga flera kolleger tillgängliga';
$string['resultnomorepeersingroup'] = 'Inga flera kolleger tillgängliga i denna separata grupp';
$string['resultnotenoughpeers'] = 'För få tillgängliga kolleger';
$string['resultnumperauthor'] = 'Försöker dela ut {$a} utvärderare per författare';
$string['resultnumperreviewer'] = 'Försöker dela ut {$a} utvärdering(ar) per utvärderare';
$string['stats'] = 'Statistik för tilldelningen';
