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
 * Strings for component 'enrol', language 'nl', version '4.1'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Beschikbare cursus aanmeldingsplugins';
$string['addinstance'] = 'Methode toevoegen';
$string['addinstanceanother'] = 'Voeg methode toe en maak nog één';
$string['ajaxnext25'] = 'Volgende 25...';
$string['ajaxoneuserfound'] = '1 gebruiker gevonden';
$string['ajaxxmoreusersfound'] = 'Meer dan {$a} gebruikers gevonden';
$string['ajaxxusersfound'] = '{$a} gebruikers gevonden';
$string['assignnotpermitted'] = 'Je hebt het recht niet om rollen toe te wijzen in deze cursus';
$string['bulkuseroperation'] = 'Bulk gebruikersbewerking';
$string['configenrolplugins'] = 'Selecteer alle vereiste plugins en zet ze in de juiste volgorde.';
$string['custominstancename'] = 'Aangepaste instantienaam';
$string['defaultenrol'] = 'Voeg toe aan nieuwe cursussen';
$string['defaultenrol_desc'] = 'Het is mogelijk om deze plugin standaard aan alle nieuwe cursussen toe te voegen.';
$string['deleteinstanceconfirm'] = 'Je gaat de aanmeldingsplugin "{$a->name}" verwijderen. Alle  {$a->users} aangemelde gebruikers zullen hierdoor afgemeld worden en al hun cursusgerelateerde gegevens, zoals cijfers, groeplidmaatschap en foruminschrijvingen zullen verwijderd worden.

Weet je zeker dat je verder wil gaan?';
$string['deleteinstanceconfirmself'] = 'Weet je zeker dat je instantie "{$a->name}" waardoor je zelf toegang tot de cursus krijgt wil verwijderen? Het is mogelijk dat je niet meer in deze cursus kan als je hiermee verder gaat.';
$string['deleteinstancenousersconfirm'] = 'Je gaat de aanmeldingsmethode {$a->name}" verwijderen. Weet je zeker dat je wil verdergaan?';
$string['disableinstanceconfirmself'] = 'Weet je zeker dat je instantie "{$a->name}" waardoor je zelf toegang tot de cursus krijgt wil uitschakelen? Het is mogelijk dat je niet meer in deze cursus kan als je hiermee verder gaat.';
$string['durationdays'] = '{$a} dagen';
$string['editenrolment'] = 'Bewerk aanmelding';
$string['edituserenrolment'] = 'Bewerk aanmelding van {$a}';
$string['enrol'] = 'Meld aan';
$string['enrolcandidates'] = 'Niet aangemelde gebruikers';
$string['enrolcandidatesmatching'] = 'Mogelijke niet aangemelde gebruikers';
$string['enrolcohort'] = 'Site-groep aanmelden';
$string['enrolcohortusers'] = 'Gebruikers aanmelden';
$string['enroldetails'] = 'Aanmeldingsdetails';
$string['enrollednewusers'] = 'Met succes {$a} nieuwe gebruikers aangemeld';
$string['enrolledusers'] = 'Aangemelde gebruikers';
$string['enrolledusersmatching'] = 'Aangemelde gebruikers';
$string['enrolme'] = 'Meld me aan bij deze cursus';
$string['enrolment'] = 'Aanmelding';
$string['enrolmentinstances'] = 'Aanmeldingsbeheer';
$string['enrolmentmethod'] = 'Aanmeldingsmethode';
$string['enrolmentnew'] = 'Nieuwe aanmelding in {$a}';
$string['enrolmentnewuser'] = '{$a->user} is aangemeld bij de cursus "{$a->course}"';
$string['enrolmentoptions'] = 'Aanmeldingsopties';
$string['enrolments'] = 'Aanmeldingen';
$string['enrolmentupdatedforuser'] = 'De aanmelding voor gebruiker "{$a->fullname}" is aangepast';
$string['enrolnotpermitted'] = 'Je hebt het recht niet om iemand aan te melden in deze cursus';
$string['enrolperiod'] = 'Aanmeldingsperiode';
$string['enroltimecreated'] = 'Aanmelding aangemaakt';
$string['enroltimeend'] = 'Aanmelding eindigt';
$string['enroltimeendinvalid'] = 'Aanmeldingseinddatum moet na de aanmeldingsstartdatum zijn';
$string['enroltimestart'] = 'Aanmelding begint';
$string['enrolusage'] = 'Exemplaren / Aanmeldingen';
$string['enrolusers'] = 'Meld gebruikers aan';
$string['enrolxusers'] = '{$a} gebruikers aanmelden';
$string['errajaxfailedenrol'] = 'Aanmelden gebruiker mislukt';
$string['errajaxsearch'] = 'Fout bij het zoeken naar gebruikers';
$string['erroreditenrolment'] = 'Er is een fout opgetreden bij het bewerken van de aanmelding van een gebruiker';
$string['errorenrolcohort'] = 'Fout bij het maken van een site-groep sync-aanmelding in deze cursus.';
$string['errorenrolcohortusers'] = 'Fout bij het aanmelden van site-groepsleden in deze cursus';
$string['errorthresholdlow'] = 'De notificatietijd moet minstens 1 dag zijn.';
$string['errorwithbulkoperation'] = 'Er is een fout opgetreden bij het in bulk bewerken van aanmeldingswijzigingen.';
$string['eventenrolinstancecreated'] = 'Aanmeldingsinstantie aangemaakt';
$string['eventenrolinstancedeleted'] = 'Aanmeldingsinstantie verwijderd';
$string['eventenrolinstanceupdated'] = 'Aanmelding geüpdatet';
$string['eventuserenrolmentcreated'] = 'Gebruiker aangemeld in cursus';
$string['eventuserenrolmentdeleted'] = 'Gebruiker afgemeld uit cursus';
$string['eventuserenrolmentupdated'] = 'Gebruikersaanmelding aangepast';
$string['expirynotify'] = 'Melden voor het vervallen van de aanmelding';
$string['expirynotify_help'] = 'Deze instelling bepaalt of meldingen voor het vervallen van aanmeldingen al dan niet verzonden worden.';
$string['expirynotifyall'] = 'Aanmelder en aangemelde gebruiker';
$string['expirynotifyenroller'] = 'Enkel aanmelder';
$string['expirynotifyhour'] = 'Om welk uur moeten meldingen voor het vervallen van de aanmelding verstuurd worden?';
$string['expirythreshold'] = 'Tijd op voorhand';
$string['expirythreshold_help'] = 'Hoe lang voor het vervallen van de aanmelding moeten gebruikers gewaarschuwd worden?';
$string['extremovedaction'] = 'Externe afmeldingsactie';
$string['extremovedaction_help'] = 'Kies een actie om uit te voeren wanneer een gebruikersaanmelding verdwijnt uit een externe aanmeldingsbron. Merk op dat sommige gebruikersgegevens en instellingen verwijderd worden tijdens het afmelden van een cursus.';
$string['extremovedkeep'] = 'Hou de gebruiker aangemeld';
$string['extremovedsuspend'] = 'Schakel aanmelding bij de cursus uit';
$string['extremovedsuspendnoroles'] = 'Schakel aanmelding bij de cursus uit en verwijder rollen';
$string['extremovedunenrol'] = 'Meld de gebruiker af van de cursus';
$string['finishenrollingusers'] = 'Beëindig het aanmelden van gebruikers';
$string['foundxcohorts'] = '{$a} site-brede groepen gevonden';
$string['instanceadded'] = 'Methode toegevoegd';
$string['instanceeditselfwarning'] = 'Waarschuwing:';
$string['instanceeditselfwarningtext'] = 'Je bent in deze cursus aangemeld door deze aanmeldingsmethode. Het wijzigen hiervan kan je toegang tot deze cursus onmogelijk maken.';
$string['invalidenrolduration'] = 'Ongeldige inschrijvingsduur';
$string['invalidenrolinstance'] = 'Ongeldige aanmelding';
$string['invalidrequest'] = 'Ongeldige aanvraag';
$string['invalidrole'] = 'Ingeldige rol';
$string['manageenrols'] = 'Beheer aanmeldingsplugins';
$string['manageinstance'] = 'Beheer';
$string['method'] = 'Methode';
$string['migratetomanual'] = 'Verplaats naar manuele aanmeldingen';
$string['nochange'] = 'Geen wijziging';
$string['noexistingparticipants'] = 'Er bestaan geen deelnemers';
$string['nogroup'] = 'Geen groep';
$string['noguestaccess'] = 'Gasten hebben geen toegang tot deze cursus. Probeer aan te melden.';
$string['none'] = 'Geen';
$string['notenrollable'] = 'Je kunt je nu niet aanmelden in deze cursus.';
$string['notenrolledusers'] = 'Andere gebruikers';
$string['otheruserdesc'] = 'Volgende gebruikers zijn niet aangemeld in deze cursus, maar hebben er wel rollen geërfd of toegewezen.';
$string['participationactive'] = 'Actief';
$string['participationnotcurrent'] = 'Niet actief';
$string['participationstatus'] = 'Status';
$string['participationsuspended'] = 'Geschorst';
$string['periodend'] = 'tot {$a}';
$string['periodnone'] = 'aangemeld {$a}';
$string['periodstart'] = 'van {$a}';
$string['periodstartend'] = 'van {$a->start} tot {$a->end}';
$string['privacy:metadata:user_enrolments'] = 'Aanmeldingen';
$string['privacy:metadata:user_enrolments:enrolid'] = 'Een aanmeldingsplugininstantie';
$string['privacy:metadata:user_enrolments:modifierid'] = 'De ID van de gebruiker die laatst de gebruikersaanmelding heeft gewijzigd';
$string['privacy:metadata:user_enrolments:status'] = 'De status van de aanmelding van een gebruiker in een cursus';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'De core aanmeldingsplugin bewaart aangemelde gebruikers.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'Het tijdstip waarop de aanmelding van de gebruiker is aangemaakt';
$string['privacy:metadata:user_enrolments:timeend'] = 'Het tijdstip waarop de aanmelding van de gebruiker eindigt';
$string['privacy:metadata:user_enrolments:timemodified'] = 'Het tijdstip waarop de aanmelding van de gebruiker gewijzigd is';
$string['privacy:metadata:user_enrolments:timestart'] = 'Het tijdstip waarop de aanmelding van de gebruiker start';
$string['privacy:metadata:user_enrolments:userid'] = 'De ID van de gebruiker';
$string['proceedtocourse'] = 'Ga verder naar cursusinhoud';
$string['recovergrades'] = 'Herstel de oude cijfers van de gebruiker indien mogelijk';
$string['rolefromcategory'] = '{$a->role} (geërfd van cursuscategorie)';
$string['rolefrommetacourse'] = '{$a->role} (geërfd van bovenliggende cursus)';
$string['rolefromsystem'] = '{$a->role} (toegewezen op site-niveau)';
$string['rolefromthiscourse'] = '{$a->role} (toegewezen in deze cursus)';
$string['sendfromcoursecontact'] = 'Van het cursuscontact';
$string['sendfromkeyholder'] = 'Van de sleutelhouder';
$string['sendfromnoreply'] = 'Van het niet-beantwoordenadres';
$string['startdatetoday'] = 'Vandaag';
$string['synced'] = 'Gesynchroniseerd';
$string['testsettings'] = 'Testinstellingen';
$string['testsettingsheading'] = 'Test aanmeldingsinstellingen - {$a}';
$string['timeended'] = 'Tijd afgelopen';
$string['timeenrolled'] = 'Tijd aangemeld';
$string['timereaggregated'] = 'Tijd opnieuw samengevoegd';
$string['timestarted'] = 'Tijd begonnen';
$string['totalenrolledusers'] = '{$a} aangemelde gebruikers';
$string['totalotherusers'] = '{$a} andere gebruikers';
$string['totalunenrolledusers'] = '{$a} afgemelde gebruikers';
$string['unassignnotpermitted'] = 'Je hebt het recht niet om rollen te verwijderen in deze cursus';
$string['unenrol'] = 'Zeg lidmaatschap op';
$string['unenrolconfirm'] = 'Wil je echt gebruiker "{$a->user}" van cursus "{$a->course}" afmelden (was aangemeld via "{$a->enrolinstancename}") ?';
$string['unenrolleduser'] = 'De gebruiker "{$a->fullname}"  is uitgeschreven voor de cursus';
$string['unenrolme'] = 'Zeg mijn lidmaatschap van {$a} op';
$string['unenrolnotpermitted'] = 'Je hebt het recht niet om deze gebruiker af te melden uit deze cursus.';
$string['unenrolroleusers'] = 'Gebruikers afmelden';
$string['uninstallmigrating'] = 'Migreren van "{$a}" aanmeldingen';
$string['unknowajaxaction'] = 'Onbekende actie gevraagd';
$string['unlimitedduration'] = 'Onbeperkt';
$string['userremovedfromselectiona'] = 'Gebruiker "{$a}"  is uit de selectie verwijderd.';
$string['usersearch'] = 'Zoek';
$string['withselectedusers'] = 'Met geselecteerde gebruikers';
$string['youenrolledincourse'] = 'Je bent aangemeld in de cursus.';
$string['youunenrolledfromcourse'] = 'Je bent niet meer aangemeld in cursus "{$a} ".';
