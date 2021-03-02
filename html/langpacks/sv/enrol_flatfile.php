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
 * Strings for component 'enrol_flatfile', language 'sv', version '3.8'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'Filkodning';
$string['expiredaction'] = 'Åtgärd vid förfallen registrering';
$string['expiredaction_help'] = 'Välj den åtgärd som ska utföras då registreringen förfaller. Vänligen tänk på att viss användardata och vissa inställningar tas bort från kursen vid avregistreringen.';
$string['filelockedmail'] = 'Den textfil du använder för filbaserade registreringar ({$a}) kan inte tas bort av cronprocessen. Detta innebär vanligtvis att det är något fel med rättigheterna på den. Vänligen modifiera rättigheterna så att Moodle kan ta bort filen annars kan den komma att bli återkommande bearbetad.';
$string['filelockedmailsubject'] = 'Viktigt fel: registreringsfilen';
$string['flatfile:manage'] = 'Hantera användaregistreringar manuellt';
$string['flatfile:unenrol'] = 'Avregistrera användare manuellt från kursen';
$string['flatfileenrolments'] = 'Filbaserad (CSV) kursregistrering';
$string['flatfilesync'] = 'Synkronisera filbaserade kursregistreringar';
$string['location'] = 'Sökväg till fil';
$string['notifyadmin'] = 'Meddela administratör';
$string['notifyenrolled'] = 'Meddela registrerade användare';
$string['notifyenroller'] = 'Notifiera registreringsansvarig användare';
$string['pluginname'] = 'Filbaserad (CSV) kursregistrering';
$string['privacy:metadata:enrol_flatfile'] = 'Pluginmodulen Filbaserad (CSV) kursregistrering kan lagra personlig information i enrol_flatfile-tabellen relaterad till framtida registreringar.';
