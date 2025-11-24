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
 * Strings for component 'enrol_waitlist', language 'sv', version '4.5'.
 *
 * @package     enrol_waitlist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmation'] = 'Om du fortsätter kommer du att registreras på den här kursen.<br><br>Är du helt säker på att du vill göra det här?';
$string['confirmation_cancel'] = 'Avbryt';
$string['confirmation_no'] = 'Nej';
$string['confirmation_yes'] = 'Ja';
$string['confirmationfull'] = '<strong>Denna kurs är för närvarande fullbokad.</strong> Om du fortsätter kommer du att placeras på en väntelista och registreras automatiskt och informeras via e-post om det blir några platser lediga.';
$string['continue'] = 'fortsätt';
$string['customwelcomemessage'] = 'Anpassat välkomstmeddelande';
$string['defaultrole'] = 'Standardroll';
$string['defaultrole_desc'] = 'Välj roll som användarna får då de registrerar sig';
$string['disable'] = 'Du kan inte registrera dig själv i denna kurs.';
$string['enrolenddate'] = 'Slutdatum';
$string['enrolenddate_help'] = 'Om aktiverat kan användare endast registrera sig själva t.o.m. detta datum.';
$string['enrolenddaterror'] = 'Slutdatum för registrering kan inte infalla före startdatum.';
$string['enrolme'] = 'Registrera mig';
$string['enrolperiod'] = 'Registreringens varaktighet';
$string['enrolperiod_desc'] = 'Standardtid som registreringen är giltig (i sekunder). 0 = obegränsad.';
$string['enrolperiod_help'] = 'Den tid som registreringen är giltig, från och med det ögonblick som användaren registrerar sig. Om den är inaktiverad är registreringstiden obegränsad.';
$string['enrolstartdate'] = 'Startdatum';
$string['enrolstartdate_help'] = 'Om det här alternativet är aktiverat kan användarna bara registrera sig från och med detta datum.';
$string['enrolusers'] = 'Registrera användare';
$string['faculty'] = 'Fakultet';
$string['groupkey'] = 'Använd gruppregistreringsnycklar';
$string['groupkey_desc'] = 'Använd som standard gruppregistreringsnycklar.';
$string['groupkey_help'] = 'Förutom att begränsa åtkomsten till kursen till endast de som känner till nyckeln, innebär användning av en gruppregistreringsnyckel att användare automatiskt läggs till i gruppen när de registrerar sig i kursen.

Om du vill använda en gruppregistreringsnyckel måste en registreringsnyckel anges i kursinställningarna samt gruppregistreringsnyckeln i gruppinställningarna.';
$string['lineconfirm'] = '<br>Är du helt säker på att du vill göra detta?';
$string['lineinfo'] = '<br>Antal personer före dig på väntelistan:';
$string['longtimenosee'] = 'Avregistrera inaktiva efter';
$string['longtimenosee_help'] = 'Om användare inte har besökt en kurs på länge avregistreras de automatiskt. Den här parametern anger den tidsgränsen.';
$string['manage::assign'] = 'Tilldela';
$string['manage::define'] = 'Definiera';
$string['maxenrolled'] = 'Max antal registrerade användare';
$string['maxenrolled_help'] = 'Anger det maximala antalet användare som kan vänta på att registrera sig. 0 betyder ingen gräns.';
$string['maxenrolledreached'] = 'Maximalt antal användare som tillåts registrera sig via väntelista har redan nåtts.';
$string['nocursefields'] = 'Inga fält';
$string['password'] = 'Registreringsnyckel';
$string['password_help'] = 'En registreringsnyckel gör att åtkomsten till kursen kan begränsas till endast de som känner till nyckeln.

Om fältet lämnas tomt kan alla användare anmäla sig till kursen.

Om en registreringsnyckel anges måste alla användare som försöker registrera sig i kursen ange nyckeln. Observera att en användare bara behöver ange registreringsnyckeln EN GÅNG när de registrerar sig i kursen.';
$string['passwordinvalid'] = 'Ogiltig registreringsnyckel. Vänligen försök igen';
$string['passwordinvalidhint'] = 'Den registreringsnyckeln var ogiltig. Vänligen försök igen<br>
(Ett tips - den börjar med \'{$a}\')';
$string['pluginname'] = 'Registrering via väntelista';
$string['pluginname_desc'] = 'Pluginmodulen Registrering via väntelista gör det möjligt för användare att välja vilka kurser de vill delta i. Kurserna kan skyddas av en registreringsnyckel. Internt görs registreringen via den manuella registreringspluginmodulen som måste vara aktiverad i samma kurs.';
$string['privacy:metadata:user_enrol_waitlist'] = 'Lagrar användarmetadata i fältet userid';
$string['privacy:metadata:user_enrol_waitlist:userid'] = 'Lagrar metadata för användaren i Användar-ID fältet';
$string['profilecreatefield'] = 'Nytt fält';
$string['profiledescription2'] = 'Beskrivning2';
$string['profilefield'] = 'Fält';
$string['requirepassword'] = 'Kräv registreringsnyckel';
$string['requirepassword_desc'] = 'Kräv registreringsnyckel i nya kurser och förhindra att registreringsnyckeln tas bort från befintliga kurser.';
$string['role'] = 'Tilldela roll';
$string['sendcoursewelcomemessage'] = 'Skicka välkomstmeddelande';
$string['sendcoursewelcomemessage_help'] = 'Om det här alternativet är aktiverat får användarna ett välkomstmeddelande via e-post när de registrera sig via väntelista i en kurs.';
$string['showhint'] = 'Visa ledtråd';
$string['showhint_desc'] = 'Visa första bokstaven i gästregistreringsnyckeln.';
$string['status'] = 'Tillåt registreringar via väntelista';
$string['status_desc'] = 'Tillåt som standard användare att registrera sig via väntelista i kursen.';
$string['status_help'] = 'Den här inställningen avgör om en användare kan registrera sig (och även avregistrera sig om de har rätt behörighet) själva från kursen.';
$string['task:update_enrolments'] = 'Uppdatera registreringar';
$string['unenrolwaitlistconfirm'] = 'Vill du verkligen avregistrera <b>"{$a}"</b>?';
$string['usepasswordpolicy'] = 'Använd lösenordspolicy';
$string['usepasswordpolicy_desc'] = 'Använd standardlösenordsprincipen för registreringsnycklar.';
$string['users_on_waitlist'] = 'Användare på väntelista';
$string['waitlist:config'] = 'Konfigurera instanser för väntelista';
$string['waitlist:manage'] = 'Hantera registrerade användare';
$string['waitlist:unenrol'] = 'Avregistrera användare från kursen';
$string['waitlist:unenrolself'] = 'Avregistrera dig själv från kursen';
$string['waitlist:unenrolwaitlist'] = 'Avregistrera från väntelista i kursen';
$string['waitlisted_users'] = 'Användare på vänt';
$string['waitlistinfo'] = '<b>Denna kurs är för närvarande bokad.</b>  Tack för din ansökan. Du har placerats på en väntelista och kommer att informeras via e-post om en plats blir ledig.';
$string['welcometocourse'] = 'Välkommen till {$a}';
$string['welcometocoursetext'] = '<p>Välkommen till {$a->coursename}!</p>


<p>Startdatum: {$a->startdate}</p>

<p>Beskrivning: </p>

	<p>{$a->summary}</p>';
