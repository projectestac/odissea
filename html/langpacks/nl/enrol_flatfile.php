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
 * Strings for component 'enrol_flatfile', language 'nl', version '3.11'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'Bestandsencodering';
$string['expiredaction'] = 'Actie bij verlopen van de aanmelding';
$string['expiredaction_help'] = 'Kies een actie die moet gebeuren wanneer de aanmelding van een gebruiker verloopt. Merk op dat sommige gebruikersgegevens en instellingen worden verwijderd tijdens het afmelden uit een cursus.';
$string['filelockedmail'] = 'Het tekstbestand dat je gebruikt voor bestandsgebaseerde inschrijvingen ({$a}) kan niet verwijderd worden door het cron-proces. Dit is gewoonlijk omdat de rechten op het bestand verkeerd ingesteld zijn. Zet aub de rechten zo dat Moodle het bestand kan verwijderen, anders wordt dat herhaaldelijk verwerkt.';
$string['filelockedmailsubject'] = 'Belangrijke fout: aanmeldingsbestand';
$string['flatfile:manage'] = 'Beheer aanmelding van gebruikers manueel';
$string['flatfile:unenrol'] = 'Gebruikers manueel uit de cursus halen';
$string['flatfileenrolments'] = 'Aanmeldingen via platte tekst (CSV)';
$string['flatfilesync'] = 'Synchronisatie aanmelding tekstbestand';
$string['location'] = 'Bestandslokatie';
$string['location_desc'] = 'Geef het volledige pad voor het aanmeldingsbestand. Dit bestand wordt automatisch verwijderd nadat het verwerkt is.';
$string['mapping'] = 'Rolkoppeling voor tekstbestand';
$string['messageprovider:flatfile_enrolment'] = 'Aanmeldingsberichten tekstbestand aanmeldingen';
$string['notifyadmin'] = 'Waarschuw beheerders';
$string['notifyenrolled'] = 'Stuur melding naar aangemelde gebruikers';
$string['notifyenroller'] = 'Stuur melding naar de verantwoordelijke voor aanmeldingen';
$string['pluginname'] = 'Tekstbestand (CSV)';
$string['pluginname_desc'] = 'Deze methode zal regelmatig een tekstbestand controleren en verwerken dat op de plaats staat die je opgeeft.
Het bestand is een kommagescheiden bestand dat vier tot zes velden per lijn heeft:
<pre class="informationbox">
*  operation, role, idnumber(user), idnumber(course) [, starttime, endtime]
where:
*  operation        = add | del
*  role             = student | teacher | teacheredit
*  idnumber(user)   = idnumber in the user table NB not id
*  idnumber(course) = idnumber in the course table NB not id
*  starttime        = start time (in seconds since epoch) - optional
*  endtime          = end time (in seconds since epoch) - optional
</pre>
Het zou er kunnen uitzien zoals dit:
<pre class="informationbox">
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'De platte tekst aanmeldingsplugin kan persoonlijke gegevens van gebruikers bewaren die verband houden met hun toekomstige aanmeldingen in de enrol_flatfile-tabel.';
$string['privacy:metadata:enrol_flatfile:action'] = 'De aanmeldingsactie wordt verwacht op de gegeven datum';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'De cursusID waarmee de aanmelding verband houdt';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'De ID van de rol die toegewezen of verwijderd wordt.';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'Het tijdstip waarop de aanmeldingswijziging eindigt';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'Het tijdstip waarop deze aanmelding gewijzigd is';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'Het tijdstip waarop de aanmelding begint';
$string['privacy:metadata:enrol_flatfile:userid'] = 'De ID van de gebruiker waarop de roltoewijzing betrekking heeft';
