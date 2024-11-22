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
 * Strings for component 'organizer', language 'nl', version '4.1'.
 *
 * @package     organizer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absolutedeadline'] = 'Einde inschrijving';
$string['absolutedeadline_help'] = 'Vink dit aan om de datum en tijd in te stellen waarna deelnemers geen acties meer kunnen doen.';
$string['actionlink_delete'] = 'verwijderen';
$string['actionlink_edit'] = 'bewerken';
$string['actionlink_eval'] = 'cijfer';
$string['actionlink_print'] = 'afdrukken';
$string['actions'] = 'Actie';
$string['actions_help'] = 'Te ondernemen actie.';
$string['addappointment'] = 'Afspraak toevoegen';
$string['addslots_placesinfo'] = 'Met deze handeling zullen {$a->numplaces} nieuwe mogelijke plekken worden aangemaakt, met een totaal van {$a->totalplaces} mogelijke plekken voor {$a->numstudents} leerlingen.';
$string['addslots_placesinfo_group'] = 'Met deze handeling zullen {$a->numplaces} nieuwe mogelijke plekken worden aangemaakt, met een totaal van {$a->totalplaces} mogelijke plekken voor {$a->numgroups} groepen.';
$string['allowcreationofpasttimeslots'] = 'Tijdslots aanmaken in het verleden';
$string['allowedprofilefieldsprint'] = 'Toegestane gebruikersprofielvelden';
$string['allowedprofilefieldsprint2'] = 'Toegestane gebruikersprofielvelden voor het afdrukken van enkele tijdslots in organizer';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'De informatie en het registratieformulier zullen beschikbaar zijn vanaf <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Begin inschrijving';
$string['allowsubmissionsfromdate_help'] = 'Vink dit aan als je wilt dat deze organizer vanaf een bepaald moment in tijd beschikbaar is voor leerlingen.';
$string['allowsubmissionsfromdatesummary'] = 'Deze organizer aanvaardt inschrijvingen van <strong>{$a}</strong>';
$string['allowsubmissionstodate'] = 'Einde inschrijving';
$string['alwaysshowdescription'] = 'Beschrijving altijd tonen';
$string['alwaysshowdescription_help'] = 'Indien uitgeschakeld wordt de beschrijving hierboven pas beschikbaar vanaf de \'startdatum registratie\'.';
$string['applicant'] = 'Dit is de persoon die de groep heeft ingeschreven';
$string['appointment_reminder_student:fullmessage'] = 'Hallo {$a->receivername}!

Als onderdeel van de cursus {$a->courseid} {$a->coursefullname} heb je een afspraak {$a->sendername} op {$a->date} om {$a->time} in {$a->location}.

Moodle Meldingensysteem';
$string['appointment_reminder_student:group:fullmessage'] = 'Hallo {$a->receivername}!

Als onderdeel van de cursus {$a->courseid} {$a->coursefullname} heb je een groepsafspraak {$a->sendername} op {$a->date} om {$a->time} in {$a->location}.

Moodle Meldingensysteem';
$string['appointment_reminder_student:group:smallmessage'] = 'Je hebt een groepsafspraak met {$a->sendername} op {$a->date} om {$a->time} in{$a->location}.';
$string['appointment_reminder_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Herinnering groepsafspraak';
$string['appointment_reminder_student:smallmessage'] = 'Je hebt een afspraak met {$a->sendername} op {$a->date} om {$a->time} in{$a->location}.';
$string['appointment_reminder_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Afspraakherinnering';
$string['appointment_reminder_teacher:digest:fullmessage'] = 'Hallo {$a->receivername}!

Je hebt morgen de volgende afspraken:

{$a->digest}

Moodle Meldingensysteem';
$string['appointment_reminder_teacher:digest:smallmessage'] = 'Je hebt een overzicht ontvangen van je afspraken voor morgen.';
$string['appointment_reminder_teacher:digest:subject'] = 'Afsprakenoverzicht';
$string['appointment_reminder_teacher:fullmessage'] = 'Hallo {$a->receivername}!

Als onderdeel van de cursus {$a->courseid} {$a->coursefullname} heb je een afspraak met leerlingen op {$a->date} om {$a->time} in {$a->location}.

Moodle Meldingensysteem';
$string['appointment_reminder_teacher:group:digest:fullmessage'] = 'Hallo {$a->receivername}!

Je hebt morgen de volgende afspraken:

{$a->digest}

Moodle Meldingensysteem';
$string['appointment_reminder_teacher:group:digest:smallmessage'] = 'Je hebt een afsprakenoverzicht voor morgen ontvangen.';
$string['appointment_reminder_teacher:group:digest:subject'] = 'Afsprakenoverzicht';
$string['appointment_reminder_teacher:smallmessage'] = 'Je hebt een afspraak met leerlingen op {$a->date} om {$a->time} in {$a->location}.';
$string['appointment_reminder_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Afspraakherinnering';
$string['appointmentcomments'] = 'Opmerkingen';
$string['appointmentcomments_help'] = 'Aanvullende informatie over de afspraak kan hier worden toegevoegd';
$string['appointmentdatetime'] = 'Datum en tijd';
$string['appointmentdeleted_notify_student:fullmessage'] = 'Hallo {$a->receivername}!

Je afspraak in de cursus {$a->courseshortname} op {$a->date} om {$a->time} in {$location} is verwijderd.';
$string['appointmentdeleted_notify_student:group:fullmessage'] = 'Hallo {$a->receivername}!

Je afspraak in de cursus {$a->courseshortname} op {$a->date} om {$a->time} in {$location} is verwijderd.';
$string['appointmentdeleted_notify_student:group:smallmessage'] = 'Je afspraak op {$a->date} om {$a->time} in de organizer \'{$a->organizername}\' is verwijderd.';
$string['appointmentdeleted_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Afspraak verwijderd';
$string['appointmentdeleted_notify_student:smallmessage'] = 'Je afspraak op {$a->date} om {$a->time} in de organizer \'{$a->organizername}\' is verwijderd.';
$string['appointmentdeleted_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Afspraak verwijderd';
$string['assign'] = 'Toewijzen';
$string['assign_notify_student:fullmessage'] = 'Hallo {$a->receivername}!

Als onderdeel van de cursus {$a->courseid} {$a->coursefullname} is er een afspraak met {$a->slot_teacher} op {$a->date} om {$a->time} door {$a->sendername} aan je toegewezen.

Leraar: {$a->slot_teacher}
Locatie: {$a->slot_location}
Datum: {$a->date} om {$a-time}

Moodle Meldingensysteem';
$string['assign_notify_student:group:fullmessage'] = 'Hallo {$a->receivername}!

Als onderdeel van de cursus {$a->courseid} {$a->coursefullname} is er een afspraak met {$a->slot_teacher} op {$a->date} om {$a->time} door {$a->sendername} aan jouw groep {$a->groupname} toegewezen.

Leraar: {$a->slot_teacher}
Locatie: {$a->slot_location}
Datum: {$a->date} om {$a-time}

Moodle Meldingensysteem';
$string['assign_notify_teacher:fullmessage'] = 'Hallo {$a->receivername}!

Als onderdeel van de cursus {$a->courseid} {$a->coursefullname} is er een afspraak met {$a->participantname} op {$a->date} om {$a->time} door {$a->sendername} aan je toegewezen.

Deelnemer: {$a->participantname}
Locatie: {$a->slot_location}
Datum: {$a->date} om {$a-time}

Moodle Meldingensysteem';
$string['assign_notify_teacher:group:fullmessage'] = 'Hallo {$a->receivername}!

Als onderdeel van de cursus {$a->courseid} {$a->coursefullname} is er een afspraak met de groep {$a->groupname} op {$a->date} om {$a->time} door {$a->sendername} aan je toegewezen.

Groep: {$a->groupname}
Locatie: {$a->slot_location}
Datum: {$a->date} om {$a-time}

Moodle Meldingensysteem';
$string['assign_title'] = 'Afspraak toewijzen';
$string['atlocation'] = 'op';
$string['attended'] = 'bijgewoond';
$string['auth'] = 'Authenticatiemethode';
$string['availability'] = 'Beschikbaarheid';
$string['availablefrom'] = 'Afspraken mogelijk vanaf';
$string['availablegrouplist'] = 'Beschikbare groepen';
$string['availableslotsfor'] = 'Beschikbare tijdslots';
$string['back'] = 'Terug';
$string['btn_add'] = 'Nieuwe tijdslots toevoegen';
$string['btn_assign'] = 'Tijdslot toewijzen';
$string['btn_comment'] = 'Opmerking bewerken';
$string['btn_delete'] = 'Geselecteerde tijdslots verwijderen';
$string['btn_deleteappointment'] = 'Afspraak verwijderen';
$string['btn_deletesingle'] = 'Geselecteerd tijdslot verwijderen';
$string['btn_edit'] = 'Geselecteerde tijdslots bewerken';
$string['btn_editsingle'] = 'Geselecteerde tijdslots bewerken';
$string['btn_eval'] = 'Geselecteerde tijdslots beoordelen';
$string['btn_eval_short'] = 'Cijfer';
$string['btn_evalsingle'] = 'Geselecteerde tijdslots beoordelen';
$string['btn_print'] = 'Geselecteerde tijdslots afdrukken';
$string['btn_printsingle'] = 'Geselecteerde tijdslots afdrukken';
$string['btn_queue'] = 'Wachtrij';
$string['btn_reeval'] = 'Opnieuw beoordelen';
$string['btn_register'] = 'Inschrijven';
$string['btn_remind'] = 'Herinnering versturen';
$string['btn_reregister'] = 'Opnieuw aanmelden';
$string['btn_save'] = 'Opmerking bewaren';
$string['btn_send'] = 'Verzenden';
$string['btn_sendall'] = 'Herinnering versturen aan alle deelnemers zonder voldoende afspraken:';
$string['btn_start'] = 'Start';
$string['btn_unqueue'] = 'Uit wachtrij verwijderen';
$string['btn_unregister'] = 'Afmelden';
$string['calendarsettings'] = 'Kalenderinstellingen';
$string['can_reregister'] = 'Je kunt je opnieuw registreren voor een andere afspraak';
$string['cannot_eval'] = 'Beoordelen niet mogelijk, de leerling heeft een';
$string['cfg_dontshowidentity'] = 'Identiteit verbergen';
$string['cfg_dontshowidentity_desc'] = 'Verberg de identiteit van een deelnemer in de lijst met tijdsloten';
$string['cfg_limitedwidth'] = 'Kleiner contentgebied';
$string['configahead'] = 'vooruit';
$string['configday'] = 'dag';
$string['configdays'] = 'dag';
$string['configdontsend'] = 'Niet verzenden';
$string['confighour'] = 'uur';
$string['confighours'] = 'uren';
$string['configminute'] = 'minuut';
$string['configminutes'] = 'minuten';
$string['configmonth'] = 'maand';
$string['configmonths'] = 'maanden';
$string['confignever'] = 'Nooit';
$string['configweek'] = 'week';
$string['configweeks'] = 'weken';
$string['configyear'] = 'jaar';
$string['confirm_delete'] = 'Verwijderen';
$string['confirm_organizer_remind_all'] = 'Verzenden';
$string['create'] = 'Aanmaken';
$string['created'] = 'Aangemaakt';
$string['createsubmit'] = 'Tijdslots aanmaken';
$string['crontaskname'] = 'Crontaak Organizer';
$string['datetemplate'] = '%d-%m-%Y';
$string['datetime'] = 'Datetime';
$string['datetime_help'] = 'Datum & tijd van tijdslot';
$string['day'] = 'dag';
$string['day_0'] = 'Maandag';
$string['day_1'] = 'Dinsdag';
$string['day_2'] = 'Woensdag';
$string['day_3'] = 'Donderdag';
$string['day_4'] = 'Vrijdag';
$string['day_5'] = 'Zaterdag';
$string['day_6'] = 'Zondag';
$string['day_pl'] = 'dagen';
$string['dbid'] = 'DB ID';
$string['print_return'] = 'Terug naar overzicht tijdslots';
$string['printsubmit'] = 'Afdrukbare tabel tonen';
$string['recipientname'] = '&lt;naam ontvanger&gt;';
$string['reg_status'] = 'Status inschrijving';
$string['reg_status_not_registered'] = 'Niet ingeschreven';
$string['reg_status_organizer_expired'] = 'Organizer verlopen';
$string['reg_status_registered'] = 'Inschreven';
$string['reg_status_slot_attended'] = 'Bijgewoond';
$string['reg_status_slot_available'] = 'Tijdslot beschikbaar';
$string['reg_status_slot_expired'] = 'Tijdslot verlopen';
$string['reg_status_slot_full'] = 'Tijdslot vol';
$string['reg_status_slot_not_attended'] = 'Niet bijgewoond';
$string['reg_status_slot_past_deadline'] = 'Tijdslot voorbij deadline';
$string['register_notify_teacher:queue:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Leerling in wachtrij geplaatst';
$string['register_reminder_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Herinnering inschrijving';
$string['register_reminder_student:smallmessage'] = 'Schrijf je in voor een (nieuw) tijdslot.';
$string['register_reminder_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Herinnering inschrijving';
$string['relative_deadline_now'] = 'Vanaf nu';
$string['relativedeadline'] = 'Relative deadline';
$string['slot'] = 'Afspraak';
$string['slot_anonymous'] = 'Anoniem tijdslot';
$string['slot_slotvisible'] = 'Leden alleen zichtbaar indien eigen tijdslot';
$string['slot_visible'] = 'Leden in tijdslot altijd zichtbaar';
$string['slotassignedby'] = 'Tijdslot toegewezen door';
$string['slotdetails'] = 'Details tijdslot';
$string['slotfrom'] = 'van';
$string['slotlistempty'] = 'Er zijn geen tijdslots gevonden.';
$string['slotperiodendtime'] = 'Einddatum';
$string['slotperiodheader'] = 'Tijdslots genereren voor datumbereik';
$string['slotperiodstarttime'] = 'Startdatum';
$string['slotto'] = 'aan';
$string['status'] = 'Details status';
$string['status_help'] = 'Huidige status voor dit tijdslot';
$string['status_no_entries'] = 'Deze organizer heeft geen ingeschreven deelnemers.';
$string['stroptimal'] = 'optimaal';
$string['studentcomment_title'] = 'Opmerkingen van deelnemers';
$string['taballapp'] = 'Afspraken';
$string['tabstatus'] = 'Status inschrijving';
$string['tabstud'] = 'Weergave als leerling';
$string['teacher'] = 'Leraar';
$string['teacher_help'] = 'Lijst leraren voor dit tijdslot';
$string['teacher_unchanged'] = '-- onveranderd --';
$string['teachercomment_title'] = 'Opmerkingen leraar';
$string['teacherfeedback_title'] = 'Terugkoppeling leraar';
$string['teacherid'] = 'Leraar';
$string['teacherid_help'] = 'Selecteer de leraar om de afspraken te leiden';
$string['teacherinvisible'] = 'Leraar verborgen';
$string['teachervisible'] = 'Leraar zichtbaar';
$string['th_appdetails'] = 'Details';
$string['th_comments'] = 'Opmerking deelnemer';
$string['th_datetime'] = 'Datum en tijd';
$string['th_datetimedeadline'] = 'Datum en tijd';
$string['th_details'] = 'Status';
$string['th_duration'] = 'Duur';
$string['th_email'] = 'E-mail';
$string['th_teacher'] = 'Leraar';
$string['th_teachercomments'] = 'Opmerking van leraar';
$string['timeshift'] = 'Absolute einddatum verzetten';
$string['timeslot'] = 'Tijdslot in Organizer';
$string['timetemplate'] = '%H:%M';
$string['title_add'] = 'Nieuwe afspraken toevoegen';
$string['title_comment'] = 'Je opmerkingen bewerken';
$string['title_delete'] = 'Geselecteerde tijdslots verwijderen';
$string['title_delete_appointment'] = 'Toegewezen afspraak verwijderen';
$string['title_edit'] = 'Geselecteerde tijdslots bewerken';
$string['title_eval'] = 'Geselecteerde tijdslots beoordelen';
$string['title_print'] = 'Slots afdrukken';
$string['totalday'] = 'xxx slots voor yyy personen';
$string['trainer'] = 'Trainer';
$string['trainerid'] = 'Leraar';
$string['trainerid_help'] = 'Selecteer de leraar die de afspraak zal leiden';
$string['unavailableslot'] = 'Dit slot is beschikbaar vanaf';
$string['unknown'] = 'Onbekend';
$string['visibility_all'] = 'Zichtbaar';
$string['visibility_anonymous'] = 'Anoniem';
$string['visible'] = 'Slot zichtbaar';
$string['with'] = 'met';
