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
 * Strings for component 'workshopallocation_random', language 'sv', version '4.4'.
 *
 * @package     workshopallocation_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addselfassessment'] = 'Lägg till egenbedömningar';
$string['allocationaddeddetail'] = 'Ny bedömning att göra: <strong>{$a->reviewername}</strong> är granskare av <strong>{$a->authorname}</strong>';
$string['allocationdeallocategraded'] = 'Det gick inte att ta tillbaka fördelningen av betygsatt bedömning: granskare <strong>{$a->reviewername}</strong>, inlämnande författare <strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = 'Återanvände utvärdering: <strong>{$a->reviewername}</strong> behölls som utvärderare av <strong>{$a->authorname}</strong>';
$string['allocationsettings'] = 'Fördelningsinställning';
$string['assessmentdeleteddetail'] = 'Utvärderare borttagen: <strong>{$a->reviewername}</strong> utvärderar inte längre <strong>{$a->authorname}</strong>';
$string['assesswosubmission'] = 'Deltagarna kan utvärdera utan att ha lämnat in något';
$string['confignumofreviews'] = 'Standardantal inlämningar som ska fördelas slumpmässigt';
$string['excludesamegroup'] = 'Förhindra bedömning från kollegor från samma grupp';
$string['noallocationtoadd'] = 'Inga fördelningar att lägga till';
$string['nogroupusers'] = '<p>Varning: Om Workshopen är i \'Synliga/separata grupper\'-läge MÅSTE användare vara medlem av minst en grupp för att kunna få kollegie-bedömningar tilldela till sig av detta verktyg. Icke-grupperade användare kan fortfarande få nya självbedömningar eller få befintliga bedömningar borttagna.</p>
<p>Dessa användare är för närvarande inte medlemmar i en grupp: {$a}</p>';
$string['numofdeallocatedassessment'] = 'Tar bort {$a} fördelade utvärderingar';
$string['numofrandomlyallocatedsubmissions'] = 'Fördelar {$a} slumpmässiga inlämningar';
$string['numofreviews'] = 'Antal utvärderingar';
$string['numofselfallocatedsubmissions'] = 'Auto-fördelar {$a} inlämning(ar)';
$string['numperauthor'] = 'per inlämning';
$string['numperreviewer'] = 'per utvärderare';
$string['pluginname'] = 'Slumpmässig fördelning';
$string['privacy:metadata'] = 'Pluginmodulen Slumpmässig fördelning lagrar inga personuppgifter. Faktiska personuppgifter om vem som ska bedöma vem lagras av själva Workshop-modulen och de ligger till grund för export av bedömningsuppgifterna.';
$string['randomallocationdone'] = 'Slumpmässig fördelning gjord';
$string['removecurrentallocations'] = 'Ta bort nuvarande fördelningar';
$string['resultnomorepeers'] = 'Inga flera kollegor tillgängliga';
$string['resultnomorepeersingroup'] = 'Inga flera kollegor tillgängliga i denna enskilda grupp';
$string['resultnotenoughpeers'] = 'För få tillgängliga kolleger';
$string['resultnumperauthor'] = 'Försöker dela ut {$a} utvärderare per författare';
$string['resultnumperreviewer'] = 'Försöker fördela {$a} utvärdering(ar) per utvärderare';
$string['stats'] = 'Aktuell fördelningsstatistik';
