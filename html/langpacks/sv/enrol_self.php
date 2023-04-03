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
 * Strings for component 'enrol_self', language 'sv', version '3.11'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'Registrering är stängd eller inaktiverad';
$string['canntenrolearly'] = 'Du kan inte registrera dig ännu; registreringen öppnar {$a}.';
$string['canntenrollate'] = 'Kursen är stängd för registrering sedan {$a}.';
$string['cohortnonmemberinfo'] = 'Endast medlemmar av kohort {$a} kan självregistrera.';
$string['cohortonly'] = 'Endast kohortmedlemmarna';
$string['cohortonly_help'] = 'Självregistrering kan begränsas till medlemmar av en viss kohort. Observera att om du ändrar den här inställningen har detta ingen effekt på befintliga registreringar.';
$string['confirmbulkdeleteenrolment'] = 'Vill du verkligen ta bort registreringen för dessa användare?';
$string['customwelcomemessage'] = 'Anpassat välkomstmeddelande';
$string['customwelcomemessage_help'] = 'Ett anpassat välkomstmeddelande kan läggas till som oformaterad text eller som Moodle autoformaterad text, inklusive HTML-taggar och flerspråkliga taggar.

Följande platshållare kan inkluderas i meddelandet:

* Kursnamn {$a->coursename}
* Länk till användarens profilsida {$a->profileurl}
* Användar e-post {$a->email}
* Användarens fullständiga namn {$a->fullname}';
$string['defaultrole'] = 'Standardroll';
$string['defaultrole_desc'] = 'Bestäm vilken roll användare som anger en registreringsnyckel ska få i kursen.';
$string['deleteselectedusers'] = 'Ta bort registreringar för valda deltagare';
$string['editselectedusers'] = 'Redigera registreringar';
$string['enrolenddate'] = 'Slutdatum';
$string['enrolenddate_help'] = 'Om aktiverat, kan användare inte registrera sig på kursen med registreringsnyckel efter det angivna datumet.';
$string['enrolenddaterror'] = 'Datum för registrering kan inte vara senare än startdatumet.';
$string['enrolme'] = 'Registrera mig';
$string['enrolperiod'] = 'Registreringens varaktighet';
$string['enrolperiod_desc'] = 'Standarvaraktighet för registreringens giltighet. 0 = obegränsad.';
$string['enrolperiod_help'] = 'Den tid som registreringen är giltig, med början i det ögonblick då användaren registrerar sig. Om du inaktiverat kommer tiden för registreringens giltighet vara obegränsad.';
$string['enrolstartdate'] = 'Startdatum';
$string['enrolstartdate_help'] = 'Om aktiverat, kan användare registrera sig på kursen med registreringsnyckel från och med det angivna datumet.';
$string['expiredaction'] = 'Åtgärd vid förfallen registrering';
$string['expiredaction_help'] = 'Välj den åtgärd som ska utföras då registreringen förfaller. Vänligen tänk på att viss användardata och vissa inställningar tas bort från kursen vid avregistreringen.';
$string['expirymessageenrolledbody'] = 'Hej {$a->user},

Din registrering till kursen \'{$a->course}\' upphör den {$a->timeend}. Efter detta datum kommer du inte längre kunna logga in till kursen.

Om du behöver hjälp eller har frågor är du välkommen att kontakta {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Meddelande vid förfallen registrering';
$string['expirymessageenrollerbody'] = 'Självregistrering i kursen {$a->course} upphör att gälla inom de närmaste {$a->threshold} för följande användare:

{$a->users}

För att förlänga deras inskrivning, gå till {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Meddelande vid förfallen registrering';
$string['expirynotifyall'] = 'Lärare och registrerad användare';
$string['expirynotifyenroller'] = 'Endast lärare';
$string['groupkey'] = 'Använd grupp-registreringsnycklar.';
$string['groupkey_desc'] = 'Använd grupp-registreringsnycklar som standard.';
$string['groupkey_help'] = 'Förutom att begränsa åtkomsten till kursen till endast de som känner till nyckeln, innebär användning av gruppregistreringsnycklar att användare automatiskt läggs till i grupper när de registrerar sig i kursen.

OBS! En registreringsnyckel för kursen måste anges i inställningarna för självregistrering samt för grupp-registreringsnycklarna i gruppinställningarna.';
$string['keyholder'] = 'Du bör ha fått denna registreringsnyckel från:';
$string['longtimenosee'] = 'Avregistrera inaktiva användare efter';
$string['longtimenosee_help'] = 'Om användare inte har besökt kurssidan inom angiven tid avregistreras de automatiskt.';
$string['maxenrolled'] = 'Maximalt antal registrerade användare';
$string['maxenrolled_help'] = 'Det maximala antal användare som kan registrera sig själva. 0 = obegränsat antal.';
$string['maxenrolledreached'] = 'Det maximala antalet användare som kan självregistrera sig har redan uppnåtts.';
$string['messageprovider:expiry_notification'] = 'Meddelande vid förfallen registrering';
$string['newenrols'] = 'Tillåt nya registreringar';
$string['newenrols_desc'] = 'Tillåt som standard att användare kan registrera sig själva i kurser.';
$string['newenrols_help'] = 'Denna inställning avgör om en användare kan registrera sig i denna kurs.';
$string['nopassword'] = 'Ingen registreringsnyckel behövs.';
$string['password'] = 'Registreringsnyckel';
$string['password_help'] = 'Med en registreringsnyckel begränsas tillgången till en kurs till endast de som känner till nyckeln.

Om fältet lämnas tomt, kan alla användare registrera sig på kursen.

Om en registreringsnyckel anges kommer alla användare som försöker registrera sig på kursen att bli uppmanade att använda nyckeln. Observera att en användare endast behöver använda registreringsnyckeln EN GÅNG när de registrerar på kursen.';
$string['passwordinvalid'] = 'Felaktig registreringsnyckel, vänligen försök igen';
$string['passwordinvalidhint'] = 'Den angivna registreringsnyckeln var felaktig. Vänligen försök igen.<br />
(Här är ett tips - det börjar med \'{$a}\')';
$string['pluginname'] = 'Självregistrering';
$string['pluginname_desc'] = 'Pluginmodulen <em>Självregistrering</em> gör det möjligt för användare att välja vilka kurser de vill delta i. Kurserna kan vara skyddade med en registreringsnyckel. Internt sker registreringen med hjälp av pluginmodulen <em>Manuell registrering</em> varför även denna måste vara aktiverad i kursen.';
$string['privacy:metadata'] = 'Pluginmodulen Självregistrering lagrar ingen personinformation.';
$string['requirepassword'] = 'Kräv registreringsnyckel';
$string['requirepassword_desc'] = 'Kräv registreringsnyckel i nya kurser och förhindra borttagande av registreringsnyckel från befintliga kurser.';
$string['role'] = 'Standardtilldelad roll';
$string['self:config'] = 'Konfigurera självregistreringsinstanser';
$string['self:enrolself'] = 'Registrera dig på en kurs';
$string['self:holdkey'] = 'Visas som nyckelinnehavaren vid självregistrering';
$string['self:manage'] = 'Hantera registrerade användare';
$string['self:unenrol'] = 'Avregistrera användare från kursen';
$string['self:unenrolself'] = 'Avregistrera dig sig själv från kursen';
$string['sendcoursewelcomemessage'] = 'Skicka välkomstmeddelande';
$string['sendcoursewelcomemessage_help'] = 'När en användare själv registrerar sig på kursen kan hen få ett välkomstmeddelande via e-post. Om det skickas från kurskontakten (som standard, läraren), och fler än en användare har den här rollen, skickas e-postmeddelandet från den första användaren som tilldelats rollen.';
$string['sendexpirynotificationstask'] = 'Skicka meddelande om självregistreringar som förfallit';
$string['showhint'] = 'Visa ledtråd';
$string['showhint_desc'] = 'Visa första bokstaven i registreringsnyckeln.';
$string['status'] = 'Tillåt befintliga registreringar';
$string['status_desc'] = 'Aktivera sjävregistreringsmetod i nya kurser.';
$string['status_help'] = 'Om aktiverad och \'Tillåt nya inskrivningar\' samtidigt är inaktiverad kan endast användare som själv anmält sig tidigare komma åt kursen. Om inaktiverad är denna självinskrivningsmetod de facto inaktiverad, eftersom alla befintliga självinskrivningar är avstängda och nya användare kan registrera sig själva.';
$string['syncenrolmentstask'] = 'Synkronisera självregistreringar';
$string['unenrol'] = 'Avregistrera användare';
$string['unenrolselfconfirm'] = 'Vill du verkligen avregistrera dig från "{$a}"?';
$string['unenroluser'] = 'Vill du verkligen avregistrera "{$a->user}" från kursen "{$a->course}"?';
$string['unenrolusers'] = 'Avregistrera användare';
$string['usepasswordpolicy'] = 'Lösenordsprincip';
$string['usepasswordpolicy_desc'] = 'Använd standardlösenordsprincip för registreringsnycklar.';
$string['welcometocourse'] = 'Välkommen till {$a}';
$string['welcometocoursetext'] = 'Varmt välkommen till {$a->coursename}!

Om du inte redan gjort så, bör du uppdatera din profilsida så att vi kan lära känna dig bättre:

  {$a->profileurl}';
