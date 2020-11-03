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
 * Strings for component 'enrol_self', language 'sv', branch 'MOODLE_38_STABLE'
 *
 * @package   enrol_self
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrolearly'] = 'Kursen är öppnar för registrering den {$a}.';
$string['canntenrollate'] = 'Kursen är stängd för registrering sedan den {$a}.';
$string['cohortnonmemberinfo'] = 'Endast medlemmar av kohort {$a} kan självregistrera';
$string['cohortonly'] = 'Endast kohortmedlemmarna';
$string['cohortonly_help'] = 'Självregistrering kan begränsas till medlemmar av en viss kohort. Observera att om du ändrar den här inställningen har detta ingen effekt på befintliga registreringar.';
$string['confirmbulkdeleteenrolment'] = 'Vill du verkligen ta bort registreringen för dessa användare?';
$string['customwelcomemessage'] = 'Välkomstmeddelande';
$string['defaultrole'] = 'Förinställd roll för användare';
$string['defaultrole_desc'] = 'Bestäm vilken roll användare som anger kursnyckeln ska få i kursen.';
$string['deleteselectedusers'] = 'Ta bort registreringar för valda deltagare';
$string['editselectedusers'] = 'Editera valda användarregistreringar';
$string['enrolenddate'] = 'Slutdatum';
$string['enrolenddate_help'] = 'Om aktiverat, kan användare inte koppla sig till kurssidan med kursnyckeln efter det angivna datumet.';
$string['enrolenddaterror'] = 'Datum för registrering kan inte vara senare än startdatumet.';
$string['enrolme'] = 'Koppla mig';
$string['enrolperiod'] = 'Längd på period som användaren kopplas.';
$string['enrolperiod_desc'] = 'Standard tidslängd som registreringen är giltig (i sekunder). Om satt till noll, kommer registreringens varaktighet att vara obegränsad som standard.';
$string['enrolstartdate'] = 'Startdatum';
$string['enrolstartdate_help'] = 'Om aktiverat, kan användare koppla sig till kurssidan med kursnyckeln från och med det angivna datumet.';
$string['expirymessageenrolledbody'] = 'Hej {$a->user},

din registrering i kursen \'{$a->course}\' upphör den {$a->timeend}. Efter det kommer du inte att kunna logga in till kursen längre.

Om du behöver hjälp eller har frågor är du välkommen att kontakta {$a->enroller}.';
$string['expirynotifyall'] = 'Registrerare och registrerad användare';
$string['expirynotifyenroller'] = 'Registrerare endast';
$string['groupkey'] = 'Använd grupp-kursnycklar.';
$string['groupkey_desc'] = 'Använd grupp-kursnycklar som förinställning.';
$string['keyholder'] = 'Du bör ha fått denna kursnyckel från';
$string['longtimenosee'] = 'Koppla bort inaktiva användare efter';
$string['longtimenosee_help'] = 'Om användare inte har besökt kurssidan inom angiven tid kopplas de automatiskt bort.';
$string['maxenrolled'] = 'Maximalt antal kopplade användare';
$string['maxenrolled_help'] = 'Det maximala antal användare som kan koppla sig själva. Värdet 0 innebär ett obegränsat antal.';
$string['nopassword'] = 'Ingen kursnyckel behövs.';
$string['password'] = 'Kursnyckel';
$string['password_help'] = 'En kursnyckel låter användare som känner till kursnyckeln koppla sig själva till kursen.
Om fältet lämnas blankt kan vilken användare som helst koppla sig själv till kursen. Kursnyckeln behöver bara användas första gången man kopplar sig till kursen.';
$string['passwordinvalid'] = 'Felaktig kursnyckel, vänligen försök igen';
$string['passwordinvalidhint'] = 'Den angivna kursnyckeln var felaktig, var vänlig försök igen.<br />
(Här är ett tips - det börjar med \'{$a}\')';
$string['pluginname'] = 'Kursnyckel';
$string['pluginname_desc'] = 'Med en "kursnyckel" kan användare själva koppla sig till kurssidor. Metoden måste ha lagts till den aktuella kursen, vilket görs under "Metoder för att koppla användare".';
$string['requirepassword'] = 'Begär kursnyckel';
$string['requirepassword_desc'] = 'Kräv kursnyckel i nya kurser och förhindra avlägsnande av kursnyckel från befintliga kurser.';
$string['role'] = 'Tilldela roll';
$string['self:config'] = 'Konfigurera självregistrerings instanser';
$string['self:manage'] = 'Hantera registrerade användare';
$string['self:unenrol'] = 'Koppla bort användare från kursen';
$string['self:unenrolself'] = 'Koppla bort sig själv från kursen';
$string['sendcoursewelcomemessage'] = 'Skicka välkomstmeddelande';
$string['sendcoursewelcomemessage_help'] = 'Om aktiverad får användaren ett välkomstmeddelande via epost då hen kopplar sig till kursen.';
$string['showhint'] = 'Visa ledtråd';
$string['showhint_desc'] = 'Visa första bokstaven i gäst-nyckeln.';
$string['status'] = 'Aktivera befintliga registreringar';
$string['status_desc'] = 'Aktivera sjävregistreringsmetod i nya kurser.';
$string['status_help'] = 'Om inaktiverat medför att alla existerande självregistreringar blir avbrutna och nya användare kan inte registrera.';
$string['unenrol'] = 'Koppla bort deltagare';
$string['unenrolselfconfirm'] = 'Vill du verkligen koppla bort dig från "{$a}"?';
$string['unenroluser'] = 'Vill du verkligen avregistrera "{$a->user}" från kursen "{$a->course}"?';
$string['welcometocourse'] = 'Välkommen till {$a}';
$string['welcometocoursetext'] = 'Varmt välkommen till {$a->coursename}!

En av de första sakerna Du bör göra är att ändra Din profilsida
inuti kursen så att vi kan lära oss mer om Dig:

  {$a->profileurl}';
