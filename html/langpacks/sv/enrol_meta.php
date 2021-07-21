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
 * Strings for component 'enrol_meta', language 'sv', version '3.11'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Lägg till grupp';
$string['coursesort'] = 'Sortera kurslista';
$string['coursesort_help'] = 'Detta avgör om listan över kurser som kan länkas sorteras efter sorteringsordning (dvs. enligt sorteringsinställningarna angivna under <em>Hantera webbplats &#10132; Kurser &#10132; Hantera kurser och kategorier</em>) eller alfabetiskt enligt kursinställningarna.';
$string['creategroup'] = 'Ny grupp';
$string['defaultgroupnametext'] = '{$a->name}kurs {$a->increment}';
$string['enrolmetasynctask'] = 'Synkronisera metaregistreringar';
$string['linkedcourse'] = 'Länka kurs';
$string['meta:config'] = 'Konfigurera instanser av Metaregistrering';
$string['meta:selectaslinked'] = 'Ange kurs som metalänkad';
$string['meta:unenrol'] = 'Avregistrera avstängda användare';
$string['nosyncroleids'] = 'Roller som inte synkroniseras';
$string['nosyncroleids_desc'] = 'Som standard synkroniseras alla rolltilldelningar på kursnivå från överordnade till underordnade kurser. Roller som väljs här kommer inte att ingå i synkroniseringsprocessen. Rollerna som är tillgängliga för synkronisering kommer att uppdateras vid nästa cron-körning.';
$string['pluginname'] = 'Kursregistrering via kursmetalänk';
$string['pluginname_desc'] = 'Pluginmodulen Kursmetalänk synkroniserar kursregistreringar och roller i två olika kurser.';
$string['privacy:metadata:core_group'] = 'Pluginmodulen Kursmetalänk kan skapa grupper eller använda en befintlig grupp för att lägga till alla deltagare från den länkade kursen.';
$string['syncall'] = 'Synkronisera alla registrerade användare.';
$string['syncall_desc'] = 'Om aktiverat synkroniseras samtliga användare även om de inte har någon roll i den överordnade kursen. Om inaktiverat registreras enbart användare med minst en synkroniserad roll i den överordnade kursen.';
