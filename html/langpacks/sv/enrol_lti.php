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
 * Strings for component 'enrol_lti', language 'sv', version '3.11'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = 'OBS! Det är rekommenderat att webbplatsinställningen \'Tillåt inbäddning i ramar\' är aktiverad, så att verktyg visas i en ram i stället för i ett nytt fönster.';
$string['authltimustbeenabled'] = 'OBS! Den här pluginmodulen kräver att även pluginmodulen för LTI-autentisering också är aktiverad.';
$string['cartridgeurl'] = 'Cartridge-URL';
$string['couldnotestablishproxy'] = 'Kunde inte etablera proxy mot konsument.';
$string['deletedactivity'] = 'Borttagen aktivitet';
$string['deletedactivityalt'] = 'Aktiviteten som delas av denna instans har tagits bort';
$string['deletedactivitydescription'] = 'Aktiviteten som delas av den här instansen har tagits bort. Du kan välja en annan aktivitet att dela genom att redigera instansen eller, om den inte längre behövs, helt enkelt ta bort instansen. Om du tar bort instansen tas alla associerade användarregistreringar bort.';
$string['enrolenddate'] = 'Slutdatum';
$string['enrolenddate_help'] = 'Om det här alternativet är aktiverat kan användarna bara registrera sig fram till detta datum.';
$string['enrolenddateerror'] = 'Sista datum för registrering kan inte infalla innan startdatum';
$string['enrolisdisabled'] = 'Pluginmodulen \'Publicera som LTI-verktyg\' är inaktiverad.';
$string['enrolmentfinished'] = 'Registreringen avslutad.';
$string['enrolmentnotstarted'] = 'Registreringen har inte börjat.';
$string['enrolperiod'] = 'Registreringens varaktighet';
$string['enrolperiod_help'] = 'Den tid som registreringen är giltig, från och med det ögonblick som användaren registrerar sig från fjärrsystemet. Om inaktiverat är registreringstiden obegränsad.';
$string['enrolstartdate'] = 'Startdatum';
$string['enrolstartdate_help'] = 'Om det här datumet är aktiverat kan användarna endast komma åt från och med det här datumet.';
$string['failedrequest'] = 'Misslyckad begäran. Orsak: {$a->reason}';
$string['frameembeddingnotenabled'] = 'För att använda verktyget, klicka på nedanstående länk.';
$string['gradesync'] = 'Betygssynkronisering';
$string['gradesync_help'] = 'Om betyg från verktyget skickas till fjärrsystemet (LTI-konsument).';
$string['incorrecttoken'] = 'Felaktigt token. Kontrollera URL:en och försök igen, eller kontakta administratören för det här verktyget.';
$string['invalidrequest'] = 'Ogiltig begäran';
$string['invalidtoolconsumer'] = 'Ogiltig verktygskonsument.';
$string['launchdetails'] = 'Uppstartsdetaljer';
$string['launchdetails_help'] = 'En konfigurations-URL (även kallad <em>cartridge-URL</em>) plus hemlighet eller en start-URL krävs för att konfigurera verktyget.';
$string['launchurl'] = 'Uppstarts-URL';
$string['lti:config'] = 'Konfigurera instanser av \'Publicera som LTI-verktyg\'';
$string['lti:unenrol'] = 'Avregistrera användare från kursen';
$string['maxenrolled'] = 'Maximalt antal registrerade användare';
$string['maxenrolled_help'] = 'Det maximala antalet fjärranvändare som kan komma åt verktyget. Om inställt på noll är antalet registrerade användare obegränsat.';
$string['maxenrolledreached'] = 'Det maximala antalet fjärranvändare som tillåts ha åtkomst till verktyget har uppnåtts.';
$string['membersync'] = 'Användarsynkronisering';
$string['membersync_help'] = 'Om en schemalagd aktivitet synkroniserar registrerade användare i fjärrsystemet med registreringar i den här kursen och skapar ett konto för varje fjärranvändare efter behov och registrerar eller avregistrerar dem efter behov.

Om det är inställt på nej skapas ett konto för dem när en fjärranvändare kommer åt verktyget och de registreras automatiskt.';
$string['membersyncmode'] = 'Synkroniseringsläge för användare';
$string['membersyncmode_help'] = 'Om fjärranvändare ska registreras och/eller avregistreras från den här kursen.';
$string['membersyncmodeenrolandunenrol'] = 'Registrera nya och avregistrera saknade användare';
$string['membersyncmodeenrolnew'] = 'Registrera nya användare';
$string['membersyncmodeunenrolmissing'] = 'Avregistrera saknade användare';
$string['notoolsprovided'] = 'Inga verktyg tillhandahölls';
$string['opentool'] = 'Öppna verktyg';
$string['pluginname'] = 'Publicera som LTI-verktyg';
$string['pluginname_desc'] = 'Pluginmodulen \'Publicera som LTI-verktyg\', tillsammans med LTI-autentiseringsmodulen gör det möjligt för fjärranvändare att komma åt valda kurser och aktiviteter. Med andra ord fungerar Moodle som en LTI-verktygsleverantör.';
$string['privacy:metadata:enrol_lti_users'] = 'Listan med användare som registrerats via en LTI-leverantör.';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Tidpunkten då användaren senast loggade in på kursen';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Det senaste betyg som noterats för användaren';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Tidpunkt då användaren registrerades';
$string['privacy:metadata:enrol_lti_users:userid'] = 'ID för användaren';
$string['registration'] = 'Publicerad verktygsregistrering';
$string['registrationurl'] = 'Registrerings-URL';
$string['registrationurl_help'] = 'Om en registreringsadress (även kallad proxy-URL) används, konfigureras verktyget automatiskt.';
$string['remotesystem'] = 'Fjärrsystem';
$string['requirecompletion'] = 'Kräv kurs- eller aktivitetsslutförande före betygssynkronisering';
$string['returnurlnotset'] = 'Retur-URL:en har inte angetts.';
$string['roleinstructor'] = 'Roll för lärare';
$string['roleinstructor_help'] = 'Rollen som tilldelas i verktyget till fjärrläraren.';
$string['rolelearner'] = 'Roll för elev';
$string['rolelearner_help'] = 'Rollen som tilldelas i verktyget till fjärrstudenten.';
$string['secret'] = 'Hemlighet';
$string['secret_help'] = 'En teckensträng som delas med fjärrsystemet (LTI-konsument) för att ge åtkomst till verktyget.';
$string['sharedexternaltools'] = 'Publicerad som LTI-verktyg';
$string['successfulregistration'] = 'Registreringen lyckades';
$string['tasksyncgrades'] = 'Synkronisering av betyg för Publicera som LTI-verktyg';
$string['tasksyncmembers'] = 'Synkronisering av användare för Publicera som LTI-verktyg';
$string['toolsprovided'] = 'Publicerade verktyg';
$string['toolsprovided_help'] = 'Ett verktyg kan delas med en annan webbplats genom att tillhandahålla antingen uppstartsinformation eller en registreringsadress.';
$string['tooltobeprovided'] = 'Verktyg som ska publiceras';
$string['toolurl'] = 'Verktygs-URL';
$string['userdefaultvalues'] = 'Standardvärden för användare';
