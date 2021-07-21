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
 * Strings for component 'enrol_flatfile', language 'sv', version '3.11'.
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
$string['filelockedmail'] = 'Den textfil du använder för filbaserade kursregistreringar i mappen <b>{$a}</b> kan inte tas bort av Moodle. Detta innebär vanligtvis att det är något problem när det gäller rättigheterna för filen. Vänligen modifiera rättigheterna så att Moodle kan ta bort filen. I annat fall kan den komma att bli återkommande bearbetad.';
$string['filelockedmailsubject'] = 'Viktigt fel: Registreringsfil';
$string['flatfile:manage'] = 'Hantera användaregistreringar manuellt';
$string['flatfile:unenrol'] = 'Avregistrera användare manuellt från kursen';
$string['flatfileenrolments'] = 'Flatfilsbaserad (CSV) kursregistrering';
$string['flatfilesync'] = 'Synkronisera flatfilsbaserade kursregistreringar';
$string['location'] = 'Sökväg till fil';
$string['location_desc'] = 'Ange fullständig sökväg till registreringsfilen. Filen tas bort automatiskt efter bearbetningen.';
$string['mapping'] = 'Rollmappning för flatfil';
$string['messageprovider:flatfile_enrolment'] = 'Meddelanden för flatfilsregistreringar';
$string['notifyadmin'] = 'Meddela administratör';
$string['notifyenrolled'] = 'Meddela registrerade användare';
$string['notifyenroller'] = 'Meddela registreringsansvarig användare';
$string['pluginname'] = 'Flatfil (CSV)';
$string['pluginname_desc'] = 'Den här metoden kommer upprepade gånger att söka efter och bearbeta en specialformaterad textfil på den plats som du anger.
Filen är en kommaavgränsad fil som antas ha fyra eller sex fält per rad:

operation, role, user idnumber, course idnumber [, starttime [, endtime]]

Fältalternativ:

* operation - add | del
* role - student | teacher | teacheredit
* user idnumber - idnumber i användartabellen OBS! inte id
* course idnumber - idnumber i kurstabellen OBS! inte id
* starttime - start time (i sekunder sedan epoch) - valfritt
* endtime - end time ( sekunder sedan epoch) - valfritt

Det kan se ut ungefär så här:
<pre class="informationbox">
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'Pluginmodulen Flatfilsbaserad (CSV) kursregistrering kan lagra personlig information i enrol_flatfile-tabellen relaterad till framtida registreringar.';
$string['privacy:metadata:enrol_flatfile:action'] = 'Den registreringsåtgärd som förväntas på det angivna datumet';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'Det kurs-ID som anmälan avser';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'ID:et för den roll som ska tilldelas eller inte tilldelas';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'Den tidpunkt då registreringen upphör';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'Den tidpunkt då registreringen ändras';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'Den tidpunkt då registreringen startar';
$string['privacy:metadata:enrol_flatfile:userid'] = 'ID:t för den användare som rolltilldelningen avser';
