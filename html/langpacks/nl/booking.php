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
 * Strings for component 'booking', language 'nl', version '3.11'.
 *
 * @package     booking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'Actief';
$string['activitycompletionsuccess'] = 'De geselecteerde gebruikers zijn gemarkeerd voor activiteitsvoltooiing.';
$string['addastemplate'] = 'Voeg toe als sjabloon';
$string['addcategory'] = 'Bewerk categorieën';
$string['addeditbooking'] = 'Bewerk boeking';
$string['addmorebookings'] = 'Voeg meer boekingen toe';
$string['addnewbookingoption'] = 'Voeg een nieuwe boekingsoptie toe';
$string['addnewbookingoptionfromtemplate'] = 'Voeg een nieuwe boekingsoptie toe vanaf sjabloon';
$string['addnewcategory'] = 'Voeg een nieuwe categorie toe';
$string['addnewinstitution'] = 'Voeg een nieuwe organisatie toe';
$string['addnewtagtemplate'] = 'Voeg een nieuw tag-sjabloon toe.';
$string['address'] = 'Adres';
$string['addteachers'] = 'Voeg docenten toe.';
$string['addtocalendar'] = 'Voeg toe aan kalender.';
$string['addtogroup'] = 'Meld gebruikers automatisch aan in een groep.';
$string['addtogroup_help'] = 'Meld gebruikers automatisch aan in een groep - er wordt automatisch een groep aangemaakt met de naam "Boeking naam - optie naam"';
$string['addusertogroup'] = 'Voeg gebruikers toe aan een groep';
$string['advancedoptions'] = 'Geavanceerde opties';
$string['aftercompletedtext'] = 'Na activiteit voltooiing';
$string['aftercompletedtext_help'] = 'Laat het veld leeg om de standaard tekst te gebruiken. Je kunt een van de volgende plaatshouders gebruiken in de tekst:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} -  mailadres gebruiker</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Sessie tijden</li>
<li>{shorturl} - verkorte url naar boekingsoptie</li>
</ul>';
$string['agreetobookingpolicy'] = 'Ik ga akkoord met de volgende boekingsvoorwaarden.';
$string['allbookingoptions'] = 'Download gebruikers voor alle boekingsoptie.';
$string['allchangessave'] = 'Alle veranderingen zijn bewaard.';
$string['allcomments'] = 'Iedereen kan een reactie geven';
$string['allmailssend'] = 'Er is een e-mail verzonden naar alle gebruikers!';
$string['allowdelete'] = 'Sta toe dat gebruikers zichzelf uitschrijven van een boekingoptie.';
$string['allowupdate'] = 'Sta toe om boekingsoptie te updaten.';
$string['allratings'] = 'Iedereen kan beoordelen';
$string['allusersbooked'] = 'Alle {$a} geselecteerde gebruikers zijn succesvol overgeboekt naar deze boekingsoptie.';
$string['answer'] = 'Antwoorden';
$string['answered'] = 'Beantwoord';
$string['asglobaltemplate'] = 'Gebruik als site sjabloon';
$string['associatedcourse'] = 'Geassocieerde cursus';
$string['astemplate'] = 'Gebruik als sjabloon in deze cursus';
$string['attachedfiles'] = 'Toegevoegde bestanden';
$string['attachical'] = 'Voeg een enkele ical-gebeurtenis toe per boeking';
$string['attachicaldesc'] = 'Als dit is ingesteld wordt er een ical event als bijlage toegevoegd aan een e-mail notificatie. De ical zal alleen de start -en eindtijd bevatten die of in de boeking optie is ingesteld of de starttijd van de eerste sessie en de eindtijd van de laatste sessie.';
$string['attachicalsess'] = 'Voel alle sessies toe als een ical-gebeurtenis';
$string['attachicalsessdesc'] = 'Als dit is ingesteld zal de e-mailnotificatie een ical-gebeurtenis als bijlage toevoegen met alle sessie-data die ingesteld zijn bij een boekingsoptie.';
$string['autoenrol'] = 'Meld gebruikers automatisch aan';
$string['autoenrol_help'] = 'Wanneer geselecteerd worden gebruikers aangemeld in de geassocieerde cursus op het moment dat ze de inschrijving maken. Gebruikers worden van de cursus afgemeld wanneer ze de inschrijving annuleren.';
$string['availability'] = 'Nog beschikbaar';
$string['available'] = 'Beschikbare plaatsen';
$string['availableplaces'] = 'Beschikbare plaatsen: {$a->available} van {$a->maxanswers}';
$string['backtoresponses'] = '<< Terug naar reacties';
$string['banusernames'] = 'Ban gebruikersnamen';
$string['banusernames_help'] = 'Schrijf in het veld de gebruikersnamen - gescheiden door een komma - die je wilt verhinderen om in te inschrijven. Je kunt gebruikersnamen die eindigen op gmail.com of yahoo.com verhinderen door alleen te schrijven: gmail.com, yahoo.com.';
$string['banusernameswarning'] = 'Je gebruikersnaam staat op een ban-lijst, je kunt je dus niet inschrijven.';
$string['beforebookedtext'] = 'Voor boeking';
$string['beforebookedtext_help'] = 'Laat het veld leeg om de standaard tekst te gebruiken. Je kunt een van de volgende plaatshouders gebruiken in de tekst:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} -  mailadres gebruiker</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - verkorte url naar boekingsoptie</li>
</ul>';
$string['beforecompletedtext'] = 'Na boeking';
$string['beforecompletedtext_help'] = 'Laat het veld leeg om de standaard tekst te gebruiken. Je kunt een van de volgende plaatshouders gebruiken in de tekst:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} -  mailadres gebruiker</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Sessie tijden</li>
<li>{shorturl} - verkorte url naar boekingsoptie</li>
</ul>';
$string['booked'] = 'Ingeschreven';
$string['bookedpast'] = 'Ingeschreven (cursus beeïndigd)';
$string['bookedtext'] = 'Inschrijvingsbevestiging';
$string['bookedtext_help'] = 'Laat het veld leeg om de standaard tekst te gebruiken. Je kunt een van de volgende plaatshouders gebruiken in de tekst:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} -  mailadres gebruiker</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Sessie tijden</li>
<li>{shorturl} - verkorte url naar boekingsoptie</li>
</ul>';
$string['bookedusers'] = 'Ingeschreven gebruikers';
$string['booking'] = 'Inschrijving';
$string['booking:addeditownoption'] = 'Voeg een nieuwe optie toe en wijzig eigen opties.';
$string['booking:addinstance'] = 'Voeg een nieuwe inschrijving toe';
$string['booking:choose'] = 'Inschrijven';
$string['booking:comment'] = 'Voeg commentaar toe';
$string['booking:communicate'] = 'Kan communiceren';
$string['booking:deleteresponses'] = 'Verwijder reacties';
$string['booking:downloadresponses'] = 'Download reacties';
$string['booking:managecomments'] = 'Beheer commentaar';
$string['booking:rate'] = 'Beoordeel gekozen boekingopties';
$string['booking:readallinstitutionusers'] = 'Toon alle gebruikers';
$string['booking:readresponses'] = 'Lees reacties';
$string['booking:sendpollurl'] = 'Stuur enquête-url';
$string['booking:sendpollurltoteachers'] = 'Stuur enquête-url naar docenten';
$string['booking:subscribeusers'] = 'Schrijf andere gebruikers in';
$string['booking:updatebooking'] = 'Beheer boekingopties';
$string['booking:viewallratings'] = 'Bekijk alle ruwe beoordelingen, gegeven door individuelen';
$string['booking:viewanyrating'] = 'Bekijk de totale beoordeling die iemand heeft ontvangen';
$string['booking:viewrating'] = 'Bekijk het totaal van de beoordeling die je gekregen hebt';
$string['bookingattachment'] = 'Bijlage';
$string['bookingcategory'] = 'Categorie';
$string['bookingclose'] = 'Tot';
$string['bookingdeleted'] = 'Je inschrijving is geannuleerd';
$string['bookingduration'] = 'Duur';
$string['bookingfull'] = 'Er zijn geen beschikbare plaatsen';
$string['bookingfulldidntregister'] = 'Optie is vol, ik heb geen gebruikers overgezet!';
$string['bookingmanagererror'] = 'De ingegeven gebruikersnaam is niet juist. De gebruiker bestaat niet of er is meer dan een gebruiker met deze gebruikersnaam (bijvoorbeeld: je hebt mnet en lokale authenticatie aanstaan)';
$string['bookingmeanwhilefull'] = 'Intussen heeft iemand anders de laatste plaats genomen';
$string['bookingname'] = 'Boekingsnaam';
$string['bookingopen'] = 'Open';
$string['bookingoption_created'] = 'Boekingsoptie aangemaakt';
$string['bookingoption_deleted'] = 'Boekingsoptie verwijderd';
$string['bookingoption_updated'] = 'Boekingsoptie geupdate';
$string['bookingoptioncalendarentry'] = 'Ga naar <a href="{$a}">boekingsoptie</a>.';
$string['bookingoptionname'] = 'Boekingoptie naam';
$string['bookingoptionsfromtemplatemenu'] = 'Nieuwe boekingsoptie van sjabloon';
$string['bookingoptionsmenu'] = 'Inschrijf opties';
$string['bookingoptiontext'] = 'De boekingstekst is afhankelijk van de boekingstatus';
$string['bookingoptiontitle'] = 'Boekingsoptie titel';
$string['bookingorganizatorname'] = 'Naam organisator';
$string['bookingpoints'] = 'Cursuspunten';
$string['bookingpolicy'] = 'Inschrijfvoorwaarden';
$string['bookingpollurl'] = 'Enquête url';
$string['bookingpollurlteachers'] = 'Docenten enquête url';
$string['bookingsaved'] = 'Je inschrijving is succesvol bewaard. Je kunt nu verder gaan met het inschrijven op andere cursussen.';
$string['bookingtags'] = 'Tags';
$string['bookingtext'] = 'Boekingstekst';
$string['booknow'] = 'Inschrijven';
$string['bookotherusers'] = 'Inschrijven andere gebruikers';
$string['booktootherbooking'] = 'Schrijf gebruikers in op een andere boekingoptie';
$string['bookuserswithoutcompletedactivity'] = 'Geboekte gebruikers zonder activiteitsvoltooiing';
$string['btnbooknowname'] = 'Naam van knop "Inschrijven"';
$string['btncacname'] = 'Naam van knop "Bevestig activiteit voltooiing"';
$string['btncancelname'] = 'Naam van knop "Annuleer inschrijving"';
$string['cancancelbook'] = 'Sta toe dat gebruikers zelf mogen annuleren of inschrijven wanneer de boekingoptie openstaat?';
$string['cancancelbookdays'] = 'Gebruikers mogen hun boeking niet n dagen voor start annuleren';
$string['cancancelbookdaysno'] = 'Geen limiet';
$string['cancel'] = 'Annuleren';
$string['cancelbooking'] = 'Annuleer inschrijving';
$string['canmanageoptiontemplates'] = 'Heeft het recht om boekingsoptie templates te beheren.';
$string['cannotremovesubscriber'] = 'Je moet de activiteitsvoltooing verwijderen voor je de boeking kunt annuleren. De boeking is niet geannuleerd!';
$string['categories'] = 'Categorieën';
$string['category'] = 'Categorie';
$string['categoryname'] = 'Categorienaam';
$string['cfgsignin'] = 'Instellingen presentielijst';
$string['cfgsignin_desc'] = 'Presentielijst instellen';
$string['choosecourse'] = 'Kies een cursus';
$string['choosepdftitle'] = 'Selecteer de titel die op de presentielijst moet worden getoond';
$string['closed'] = 'Boekingoptie gesloten';
$string['comments'] = 'Commentaar';
$string['completed'] = 'Voltooid';
$string['completedcomments'] = 'Alleen bij een voltooide activiteit';
$string['completedratings'] = 'Alleen bij een voltooide activiteit';
$string['completionmodule'] = 'Activiteit voltooid';
$string['completionmodule_help'] = 'Verwijder alle gebruikers die deze activiteit hebben voltooid. Gebruikers zullen verwijderd worden door op de knop te klikken op de rapportage pagina.';
$string['conectedbooking'] = 'Gerelateerde boeking';
$string['conectedbooking_help'] = 'De boeking optie accepteert het overschrijven van geboekte gebruikers. U kunt aangeven van welke optie en hoeveel gebruikers je wilt accepteren.';
$string['confirmactivtyfrom'] = 'Bevestig gebruikers activiteit van';
$string['confirmationmessage'] = 'Je boeking is geregistreerd.


Boekingsstatus: {$a->status}
Deelnemer: {$a->participant}
Cursus: {$a->title}
Datum: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Klik op de volgende link om al je geboekte cursussen te bekijken: {$a->bookinglink}
Klik op de link om naar de cursus te gaan: {$a->courselink}';
$string['confirmationmessagesettings'] = 'Bevestiging e-mailinstellingen';
$string['confirmationmessagewaitinglist'] = 'Hallo {$a->participant},

Je boeking is geregistreerd.


Boekingsstatus: {$a->status}
Deelnemer: {$a->participant}
Cursus: {$a->title}
Datum: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Klik op de volgende link om al je geboekte cursussen te bekijken: {$a->bookinglink}';
$string['confirmationsubject'] = 'Boekingsbevestiging voor {$a->title}';
$string['confirmationsubjectbookingmanager'] = 'Nieuwe boeking voor {$a->title} door {$a->participant}';
$string['confirmationsubjectwaitinglist'] = 'Boekingsstatus voor {$a->title}';
$string['confirmationsubjectwaitinglistmanager'] = 'Boekingsstatus voor {$a->title}';
$string['confirmbookingoffollowing'] = 'Bevestig alsjeblieft de boeking voor de volgende cursus.';
$string['confirmdeletebookingoption'] = 'Weet je zeker dat je deze boekingsoptie wilt verwijderen?';
$string['confirmoptioncompletion'] = '(herstel)Bevestig voltooiing';
$string['confirmpresence'] = 'Bevestig presentie';
$string['confirmusers'] = 'Bevestig gebruikers activiteit';
$string['confirmuserswith'] = 'Bevestig gebruikers die een activiteit voltooid hebben of een badge hebben ontvangen';
$string['copy'] = '- Kopieer';
$string['copyonlythisbookingurl'] = 'Kopieer deze boekingsurl';
$string['copypollurl'] = 'Kopieer enquête url';
$string['copytoclipboard'] = 'Kopieer naar klembord: CTRL+C, Enter';
$string['coursedate'] = 'Datum';
$string['courseendtime'] = 'Eindtijd van de cursus';
$string['coursestarttime'] = 'Starttijd van de cursus';
$string['createdby'] = 'Boekingsmodule ontwikkeld door edublabs.org';
$string['csvfile'] = 'CSV-bestand';
$string['csvfile_help'] = 'CSV-bestand moet bestaan uit één kolom genaamd Institution.';
$string['customfield'] = 'Andere velden die ingesteld moeten worden in de boekingsoptie. Deze velden worden getoond in het boekingsoptieoverzicht.';
$string['customfieldconfigure'] = 'Andere boekingsoptievelden';
$string['customfielddef'] = 'Ander boekingsoptieveld';
$string['customfielddesc'] = 'Nadat je een aangepast veld hebt toegevoegd. Kun je in de boekingsoptie de waarde van het veld invullen. De ingevulde waarde wordt getoond in de beschrijving van de boekingsoptie.';
$string['customfieldoptions'] = 'Lijst van mogelijke waardes';
$string['customfieldtype'] = 'Veldtype';
$string['customlabels'] = 'Aangepast labels';
$string['dateerror'] = 'Verkeerde datum in lijn {$a}:';
$string['datenotset'] = 'Datum is niet ingesteld';
$string['dateparseformat'] = 'Datumopmaak';
$string['dateparseformat_help'] = 'Gebruik alsjeblieft de datumopmaak zoals gespecificeerd in het CSV bestand. Raadpleeg eventueel <a href="http://php.net/manual/en/function.date.php">voor de mogelijkheden</a> .';
$string['days'] = '{$a} dagen';
$string['daystonotify'] = 'Het aantal dagen voor de start van de  gebeurtenis dat je deelnemers op de hoogte wilt stellen.';
$string['daystonotify2'] = 'Stel deelnemers op de hoogte met een tweede notificatie voor de aanvang van de gebeurtenis.';
$string['daystonotify_help'] = 'Deze functionaliteit werkt alleen als de start en einddatum van een boekingsoptie is ingesteld. Vul 0 in om de functionaliteit uit te zetten.';
$string['defaultbookingoption'] = 'Standaard boekingsopties';
$string['defaultdateformat'] = 'j.n.Y H:i:s';
$string['defaulttemplate'] = 'Standaard sjabloon';
$string['defaulttemplatedesc'] = 'Standaard boekingsoptie sjabloon, wanneer een nieuwe boekingsoptie gemaakt wordt.';
$string['delcustfield'] = 'Verwijder dit veld en alle bijbehorende veldinstellingen in de boekingsopties';
$string['deletebooking'] = 'Weet je zeker dat je wilt uitschrijven voor de volgende cursus? <br /><br /> <b>{$a} </b>';
$string['deletebookingoption'] = 'Verwijder deze boekingsoptie';
$string['deletecategory'] = 'Verwijder';
$string['deletedbookingmessage'] = 'Boeking voor volgende cursus verwijderd: {$a->title}

Gebruiker: {$a->participant}
Titel: {$a->title}
Datum: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Cursus: {$a->courselink}
Boeking link: {$a->bookinglink}';
$string['deletedbookingsubject'] = 'Verwijderde inschrijving: {$a->title} door {$a->participant}';
$string['deletedbookingusermessage'] = 'Beste {$a->participant},

Je boeking voor {$a->title} ({$a->startdate} {$a->starttime}) is geannuleerd.';
$string['deletedbookingusersubject'] = 'Inschrijving voor {$a->title} geannuleerd.';
$string['deletedrule'] = 'Regel verwijderd.';
$string['deletedtext'] = 'Bericht geannuleerde boeking';
$string['deletedtext_help'] = 'Laat het veld leeg om de standaard tekst van de site te gebruiken. Je kunt de onderstaande plaatshouders gebruiken in de tekst:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is aantal docenten exclusief {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Voeg QR code toen met gebruikersid</li>
<li>{qr_username} - Voeg QR code toe met gebruikersnaam</li>
<li>{times} - Sessie tijden</li>
<li>{shorturl} - Verkorte URL boekingoptie</li>
</ul>';
$string['deleteresponsesactivitycompletion'] = 'Verwijder alle gebruikers die de activiteit {$a} voltooid hebben.';
$string['deleterule'] = 'Verwijder';
$string['deletesubcategory'] = 'Verwijder alsjeblieft eerst alle subcategorieën in deze categorie!';
$string['deleteuserfrombooking'] = 'Weet je zeker dat je deze gebruikers wilt verwijderen van de boeking?';
$string['delnotification'] = 'Je hebt {$a->del} van de {$a->all} gebruikers verwijderd. Gebruikers die een voltooide activiteit hadden, kunnen niet verwijderd worden!';
$string['delnotificationactivitycompletion'] = 'Je hebt {$a->del} van de  {$a->all} gebruikers verwijderd. Gebruikers, die de activiteit voltooid hebben, kunnen niet verwijderd worden!';
$string['disablebookingusers'] = 'Boeking van gebruikers uitschakelen - Verberg de knop Inschrijven.';
$string['donotselectcourse'] = 'Geen cursus geselecteerd';
$string['dontuse'] = 'Gebruik geen sjabloon';
$string['download'] = 'Downloaden';
$string['downloadallresponses'] = 'Download alle reacties van alle boekingsopties.';
$string['downloadusersforthisoptionods'] = 'Download gebruikers als .ods';
$string['downloadusersforthisoptionxls'] = 'Download gebruikers als .xls';
$string['duplicatebooking'] = 'Dupliceer deze boekingsoptie';
$string['duplicatename'] = 'Deze boekingsoptie naam bestaat al. Kies een andere naam.';
$string['editcategory'] = 'Bewerk';
$string['editingoptiondate'] = 'Je bent op dit moment bezig met deze sessie te bewerken';
$string['editinstitutions'] = 'Bewerk organisaties';
$string['editotherbooking'] = 'Andere boekingsregels';
$string['editrule'] = 'Bewerk';
$string['edittag'] = 'Bewerk';
$string['editteachers'] = 'Bewerk';
$string['editteacherslink'] = 'Bewerk docenten';
$string['enablecompletion'] = 'Zet aan dat je handmatig de activiteitsvoltooiing kan doen bij de reacties in de boekingsoptie.';
$string['enablecompletiongroup'] = 'Aantal boekingsopties';
$string['enablepresence'] = 'Activeer presentie';
$string['endtimenotset'] = 'Einddatum is niet ingesteld';
$string['enrolledcomments'] = 'alleen aangemelde gebruikers';
$string['enrolledinoptions'] = 'al ingeschreven in boekingsopties:';
$string['enrolledratings'] = 'Alleen aangemelde gebruikers';
$string['enrolmentstatus'] = 'Schrijf gebruikers niet direct in, maar pas op cursus begin datum.';
$string['entervalidurl'] = 'Vul alstublieft een geldige URL in!';
$string['error:failedtosendconfirmation'] = 'De onderstaande gebruiker heeft geen bevestigingsmail ontvangen:

Inschrijf status: {$a->status}
Deelnemer:   {$a->participant}
Cursus:   {$a->title}
Datum: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Link: {$a->bookinglink}
Gekoppelde cursus: {$a->courselink}';
$string['errorpagination'] = 'Vul alstublieft een nummer in dat groter is dan 0';
$string['eventbooking_cancelled'] = 'Inschrijving geannuleerd';
$string['eventbookingoption_booked'] = 'Inschrijfoptie geboekt';
$string['eventduration'] = 'Gebeurtenisduur';
$string['eventpoints'] = 'Punten';
$string['eventreport_viewed'] = 'Rapport bekeken';
$string['eventteacher_added'] = 'Docenten toegevoegd';
$string['eventteacher_removed'] = 'Docenten verwijderd';
$string['eventtype'] = 'Gebeurtenistype';
$string['eventuserprofilefields_updated'] = 'Gebruikersprofiel geüpdatet';
$string['excelfile'] = 'CSV bestand met activiteitsvoltooiing';
$string['existingsubscribers'] = 'Bestaande inschrijvers';
$string['expired'] = 'Sorry, deze activiteit is op {$a} gesloten en niet langer beschikbaar';
$string['fields'] = 'Velden tonen in een verschillende context';
$string['fillinatleastoneoption'] = 'Je moet minimaal 2 mogelijke antwoorden ingeven.';
$string['forcourse'] = 'voor cursus';
$string['full'] = 'Vol';
$string['fullname'] = 'Volledige naam';
$string['generatenewurl'] = 'Genereer een nieuwe korte url';
$string['generaterecnum'] = 'Genereer nummers';
$string['generaterecnumareyousure'] = 'Dit zal nieuwe nummers genereren en de oude permanent verwijderen!';
$string['generaterecnumnotification'] = 'Er zijn nieuwe nummers gegenereerd.';
$string['goenrol'] = 'Ga naar registratie';
$string['googleapikey'] = 'Google API key';
$string['googleapikey_desc'] = 'API key voor Google verkorte. Ga naar:  https://developers.google.com/url-shortener/v1/getting_started#APIKey';
$string['gotobooking'] = '<< Boekingen';
$string['gotop'] = 'Ga naar boven';
$string['groupdeleted'] = 'Deze boekingsoptie maakt automatisch groepen aan in de geselecteerde cursus. Maar de groep is handmatig verwijderd uit de cursus. Klik op de checkbox hieronder om de groep en inschrijvingen weer aan te maken.';
$string['groupexists'] = 'De groep bestaat al in de gekozen cursus, kies alstublieft een andere naam voor de boekingsoptie';
$string['groupname'] = 'Groepnaam';
$string['hidedescription'] = 'Verberg beschrijving';
$string['hours'] = '{$a} uren';
$string['howmanyusers'] = 'Hoeveel gebruikers mag je boeken?';
$string['icalcancel'] = 'Indien een gebeurtenis geannuleerd wordt voeg een ical-bijlage toe als geannuleerde gebeurtenis';
$string['icalcanceldesc'] = 'Wanneer een gebruiker een inschrijving annuleert of verwijderd wordt van de ingeschreven gebruikerslijst, voeg dan een ical bijlage toe als een geannuleerde gebeurtenis.';
$string['icalcfg'] = 'Instellingen van de ical bijlages';
$string['icalcfgdesc'] = 'De ical.ics bestanden maken het mogelijk om de boekingsdata toe te voegen aan de persoonlijke kalender. De ical.ics bestand wordt als bijlage toegevoegd aan het e-mail bericht.';
$string['icalfieldlocation'] = 'De tekst die getoond word in het ical veld locatie.';
$string['icalfieldlocationdesc'] = 'Kies uit het dropdown menu welke tekst er gebruikt moet worden voor het kalenderveld "locatie"';
$string['import_failed'] = 'Het importeren is niet gelukt vanwege:';
$string['import_partial'] = 'De import is voor een gedeelte voltooid. De volgende CSV regels zijn niet geïmporteerd:';
$string['importcsvbookingoption'] = 'Importeer CSV met boekingsopties';
$string['importcsvtitle'] = 'Importeer CSV';
$string['importexcelbutton'] = 'Importeer activiteitsvoltooiing';
$string['importexceltitle'] = 'Importeer activiteitsvoltooiing';
$string['importfinished'] = 'Het importeren is voltooid!';
$string['importinfo'] = 'Import informatie; de volgende kolommen kunnen toegevoegd worden in een CSV upload .';
$string['includeteachers'] = 'Voeg docenten toe aan de presentielijst';
$string['infonobookingoption'] = 'Gebruik het blok {$a} om uw eerste boekingsoptie toe te voegen';
$string['institution'] = 'Organisatie';
$string['institutionname'] = 'Organisatienaam';
$string['institutions'] = 'Organisaties';
$string['lblacceptingfrom'] = 'Naam label "Aanvaarden van"';
$string['lblbooking'] = 'Naam label "Inschrijving"';
$string['lblbooktootherbooking'] = 'Naam op knop "Schrijf gebruikers in op andere boekingsoptie"';
$string['lblinstitution'] = 'Naam label "Organisatie"';
$string['lbllocation'] = 'Naam label "Locatie"';
$string['lblname'] = 'Naam label "Naam"';
$string['lblnumofusers'] = 'Naam label "Aantal gebruikers"';
$string['lblsputtname'] = 'Naam label "Stuur een enquête-url naar leraren"';
$string['lblsurname'] = 'Naam label "Achternaam"';
$string['lblteachname'] = 'Naam label "Leraren"';
$string['leftandrightdate'] = '{$a->leftdate} tot {$a->righttdate}';
$string['limit'] = 'Beperk';
$string['limitanswers'] = 'Beperk het aantal deelnemers';
$string['limitanswers_help'] = 'Als je deze optie wijzigt en je mensen hebt geboekt, kunt je ze zonder kennisgeving verwijderen!';
$string['location'] = 'Locatie';
$string['mailconfirmationsent'] = 'Je ontvangt zo snel mogelijk een bevestigingsmail .';
$string['managebooking'] = 'Beheer';
$string['manageoptiontemplates'] = 'Kan sjablonen maken';
$string['maxoverbooking'] = 'Maximaal aantal plaatsen op de wachtlijst';
$string['maxparticipantsnumber'] = 'Maximaal aantal gebruikers';
$string['maxperuser'] = 'Maximaal aantal huidige boekingen per gebruiker';
$string['maxperuser_help'] = 'Het maximale aantal boekingen dat een individuele gebruiker in deze activiteit tegelijk kan maken. Wanneer een boeking eindtijd is bereikt, wordt deze niet meer meegeteld.';
$string['maxperuserwarning'] = 'Je hebt op dit moment {$a->count} van de {$a->limit} maximale aantal beschikbare boekingen ({$a->eventtype}) in gebruik voor jouw account.';
$string['messageprovider:bookingconfirmation'] = 'Boeking bevestigingen';
$string['messagesend'] = 'Je bericht is verzonden';
$string['messagesubject'] = 'Onderwerp';
$string['messagetext'] = 'Bericht';
$string['minutes'] = '{$a} minuten';
$string['modulename'] = 'Boeking';
$string['modulenameplural'] = 'Boekingen';
$string['moveoptionto'] = 'Verschuif een boekingsoptie naar een andere boekingsactiviteit';
$string['multiicalfiles'] = 'Voeg een ical bestand per datum toe voor MS outlook 2010 gebruikers.';
$string['multiicalfilesdesc'] = 'Alleen MS Outlook 2010 ondersteund geen multi data in 1 ical bestand. Eerdere -en latere versies ondersteunen (Ex. outlook 365) deze functie wel. Wanneer je berichten stuurt naar MS Outlook gebruikers, activeer deze functie dan.';
$string['multiselect'] = 'Meerdere selecties';
$string['mustchooseone'] = 'Je moet een optie kiezen voordat je kunt bewaren. Er is niets bewaard.';
$string['mustfilloutuserinfobeforebooking'] = 'Vul alsjeblieft de persoonlijke boekingsinformatie in, voordat je verder gaat met het boekingsformulier.';
$string['mybookings'] = 'Mijn boekingen';
$string['myoptions'] = 'Opties die ik beheer';
$string['newtemplatesaved'] = 'Nieuw boekingsoptie sjabloon is bewaard.';
$string['next'] = 'Volgende';
$string['no'] = 'Nee';
$string['nobookingselected'] = 'Geen boekingsoptie geselecteerd';
$string['nocomments'] = 'Schakel commentaar uit';
$string['nocourse'] = 'Geen cursus geselecteerd voor deze boekingsoptie';
$string['nodateset'] = 'Cursusdatum is niet ingesteld';
$string['noguestchoose'] = 'Sorry, gasten zijn niet toegestaan om een boeking te doen.';
$string['noratings'] = 'Schakel sterbeoordelen uit';
$string['noresultsviewable'] = 'De resultaten kunnen op dit moment niet getoond worden.';
$string['norighttobook'] = 'Het is niet mogelijk om in je huidige rol een boeking te maken. Neem alsjeblieft contact op met de site-beheerder om je de juiste rechten te geven.';
$string['nosubscribers'] = 'Er zijn geen leraren toegevoegd!';
$string['notallbooked'] = 'De volgende gebruikers konden niet overgeboekt worden doordat het maximaal aantal geboekte gebruikers is bereikt of beperkt aantal beschikbare plaatsen waren op de boekingsoptie:{$a}';
$string['notbooked'] = 'Nog niet geboekt.';
$string['notconectedbooking'] = 'Niet gekoppeld';
$string['noteacherfound'] = 'Geen leraren gevonden in de lijn {$a}:';
$string['notemplate'] = 'Gebruik niet als sjabloon.';
$string['notes'] = 'Bookingsnotities';
$string['notificationsubject'] = 'Toekomstige cursus....';
$string['notificationtext'] = 'Notificatie tekst dat getoond wordt bij activiteitsvoltooiing.';
$string['notificationtext_help'] = 'Laat het veld leeg om de standaard tekst te gebruiken. Je kunt een van de volgende plaatshouders gebruiken in de tekst:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} -  mailadres gebruiker</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Sessie tijden</li>
<li>{shorturl} - verkorte url naar boekingsoptie</li>
</ul>';
$string['notificationtextmessage'] = 'De cursus gaat van start:

Cursus:   {$a->title}
Datum: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}';
$string['notificationtextsubject'] = 'Informatie over de cursusstart!';
$string['notifyemail'] = 'Notificatie voor start';
$string['notifyemail_help'] = 'Laat het veld leeg om de standaard tekst te gebruiken. Je kunt een van de volgende plaatshouders gebruiken in de tekst:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} -  mailadres gebruiker</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Sessie tijden</li>
<li>{shorturl} - verkorte url naar boekingsoptie</li>
</ul>';
$string['notifyemaildefaultmessage'] = 'Je inschrijving is geregistreerd

Inschrijf status: {$a->status}
Deelnemer:   {$a->participant}
Cursus:   {$a->title}
Datum: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Link: {$a->bookinglink}
Klik op de link om alle cursussen te bekijken waar je voor ingeschreven bent: {$a->bookinglink}
De gekoppelde cursus is hier te vinden: {$a->courselink}';
$string['notopenyet'] = 'Sorry, deze activiteit is niet beschikbaar tot {$a}';
$string['notstarted'] = 'Nog niet begonnen.';
$string['nouserfound'] = 'Geen gebruiker gevonden:';
$string['nousers'] = 'Geen gebruikers!';
$string['numberrows'] = 'Aantal rijen';
$string['numberrowsdesc'] = 'Elke rij op de presentielijst zal genummerd worden. Het nummer staat aan de linkerkant in dezelfde kolom als de naam.';
$string['numgenerator'] = 'Zet record nummering aan?';
$string['numrec'] = 'Record nummer';
$string['onlythisbookingurl'] = 'Link naar deze boekings-URL';
$string['onwaitinglist'] = 'Je staat op de wachtlijst';
$string['optiondates'] = 'Meerdaagse sessie';
$string['optiondatesmessage'] = 'Sessie {$a->number}: {$a->date} <br> Van: {$a->starttime} <br> Tot: {$a->endtime}';
$string['optiondatessuccessfullydelete'] = 'Sessie tijd was verwijderd.';
$string['optiondatessuccessfullysaved'] = 'Sessie tijd is bewaard.';
$string['optiondatestime'] = 'Sessietijd';
$string['optionid'] = 'Optie-ID';
$string['optionmenu'] = 'Deze boekingsoptie';
$string['optionsfields'] = 'Velden op de boeking optie overzichtpagina';
$string['optiontemplatename'] = 'Naam sjabloon boekingsoptie';
$string['optiontemplatessettings'] = 'Boekingsopties sjablonen';
$string['organizatorname'] = 'Naam organisator';
$string['otherbookingaddrule'] = 'Voeg nieuwe regel toe';
$string['otherbookinglimit'] = 'Limiet';
$string['otherbookinglimit_help'] = 'Hoeveel gebruikers je accepteer van de optie. Vul 0 om onbeperkt aantal gebruikers te accepteren.';
$string['otherbookingnumber'] = 'Aantal gebruikers';
$string['otherbookingoptions'] = 'Accepteren van';
$string['otherbookingsuccessfullysaved'] = 'Regel bewaard!';
$string['paginationnum'] = 'Aantal records per pagina';
$string['pdfdate'] = 'Boekingsdatum/data:';
$string['pdflandscape'] = 'Liggend';
$string['pdflocation'] = 'Locatie:';
$string['pdfportrait'] = 'Staand';
$string['pdfroom'] = 'Ruimte';
$string['pdfsignature'] = 'Handtekening';
$string['pdfstudentname'] = 'Naam leerling';
$string['pdftodaydate'] = 'Datum:';
$string['pluginadministration'] = 'Boekingsadministratie';
$string['pluginname'] = 'Boeking';
$string['pollstrftimedate'] = '%Y-%m-%d';
$string['pollurl'] = 'Enquête-URL';
$string['pollurl_help'] = 'Je kunt de onderstaande plaatshouders gebruiken in de tekst:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is aantal docenten exclusief {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Voeg QR code toen met gebruikersid</li>
<li>{qr_username} - Voeg QR code toe met gebruikersnaam</li>
<li>{times} - Sessie tijden</li>
<li>{shorturl} - Verkorte URL boekingoptie</li>
</ul>';
$string['pollurlteachers'] = 'URL lerarenenquête';
$string['pollurlteachers_help'] = 'Je kunt de onderstaande plaatshouders gebruiken in de tekst:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is aantal docenten exclusief {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Voeg QR code toen met gebruikersid</li>
<li>{qr_username} - Voeg QR code toe met gebruikersnaam</li>
<li>{times} - Sessie tijden</li>
<li>{shorturl} - Verkorte URL boekingoptie</li>
</ul>';
$string['pollurlteacherstext'] = 'Bericht om de enquête url te versturen naar de leraars';
$string['pollurlteacherstext_help'] = 'Laat het veld leeg om de standaard tekst te gebruiken. Je kunt een van de volgende plaatshouders gebruiken in de tekst:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} -  mailadres gebruiker</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Sessie tijden</li>
<li>{shorturl} - verkorte url naar boekingsoptie</li>
</ul>';
$string['pollurlteacherstextmessage'] = 'Neem de enquête alsjeblieft

Enquête url {pollurlteachers}';
$string['pollurlteacherstextsubject'] = 'Neem de enquête alsjeblieft';
$string['pollurltext'] = 'Bericht voor om de enquête url te versturen naar geboekte gebruikers.';
$string['pollurltext_help'] = 'Laat het veld leeg om de standaard tekst te gebruiken. Je kunt een van de volgende plaatshouders gebruiken in de tekst:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} -  mailadres gebruiker</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Sessie tijden</li>
<li>{shorturl} - verkorte url naar boekingsoptie</li>
</ul>';
$string['pollurltextmessage'] = 'Vul alsjeblieft de enquête in

Enquête-url {pollurl}';
$string['pollurltextsubject'] = 'Vul alsjeblieft de enquête in';
$string['potentialsubscribers'] = 'Mogelijke inschrijvers';
$string['presence'] = 'Presentie';
$string['previous'] = 'Vorige';
$string['privacy:metadata:booking_answers'] = 'Geeft een boeking op een evenement weer.';
$string['privacy:metadata:booking_answers:bookingid'] = 'ID van het evenement';
$string['privacy:metadata:booking_answers:notes'] = 'Aanvullende notities';
$string['privacy:metadata:booking_answers:optionid'] = 'Geeft meer informatie over een evenement, bv een zomer -of wintereditie.';
$string['privacy:metadata:booking_answers:status'] = 'Statusinformatie van deze boeking';
$string['privacy:metadata:booking_answers:timecreated'] = 'Tijdstempel wanneer boeking voor het aangemaakt';
$string['privacy:metadata:booking_answers:timemodified'] = 'Tijdstempel wanneer de boeking voor het laatst is gewijzigd';
$string['privacy:metadata:booking_answers:userid'] = 'Gebruiker dat geboekt is voor dit evenement';
$string['privacy:metadata:booking_answers:waitinglist'] = 'Of de gebruiker op een wachtlijst staat';
$string['privacy:metadata:booking_ratings'] = 'Dit representeert de waardering van een evenement';
$string['privacy:metadata:booking_ratings:optionid'] = 'Welke versie van een evenement is beoordeeld';
$string['privacy:metadata:booking_ratings:rate'] = 'Toegewezen beoordeling';
$string['privacy:metadata:booking_ratings:userid'] = 'De gebruiker die dit evenement heeft beoordeeld';
$string['privacy:metadata:booking_teachers'] = 'Vertegenwoordigt de leraar van een evenement';
$string['privacy:metadata:booking_teachers:completed'] = 'Wanneer de taak is voltooid';
$string['privacy:metadata:booking_teachers:optionid'] = 'Welke versie van een evenement is geleerd';
$string['privacy:metadata:booking_teachers:userid'] = 'De gebruiker die gedoceerd heeft op dit evenement';
$string['question'] = 'Vraag';
$string['ratings'] = 'Boekingsoptie beoordeling';
$string['ratingsuccess'] = 'De beoordelingen zijn succesvol bijgewerkt';
$string['recreategroup'] = 'Herstel de groep en meld deelnemers hiervoor aan in de geselecteerde cursus.';
$string['removeafterminutes'] = 'Verwijder activiteitsvoltooing na N minuten';
$string['removeresponses'] = 'Verwijder alle reacties';
$string['removeuseronunenrol'] = 'Verwijder gebruiker van de boekingsmodule, wanneer deze is afgemeld in de cursus?';
$string['reportfields'] = 'Te downloaden reactie velden (csv, xls-download)';
$string['reset'] = 'Terugzetten';
$string['responses'] = 'Reacties';
$string['responsesfields'] = 'Velden die getoond worden op de "beheer reactie" pagina';
$string['responsesto'] = 'Reacties tot {$a}';
$string['rootcategory'] = 'Root';
$string['savenewtagtemplate'] = 'Bewaar';
$string['searchdate'] = 'Datum';
$string['searchname'] = 'Voornaam';
$string['searchsurname'] = 'Achternaam';
$string['searchtag'] = 'Zoek tags';
$string['searchwaitinglist'] = 'Op wachtlijst';
$string['select'] = 'Selectie';
$string['selectanoption'] = 'Selecteer een boekingsoptie';
$string['selectatleastoneuser'] = 'Selecteer alsjeblieft minstens 1 gebruiker!';
$string['selectcategory'] = 'Selecteer categorie';
$string['selectfield'] = 'Drop-down menu';
$string['selectoptionid'] = 'Selecteer alsjeblieft een optie!';
$string['selectoptioninotherbooking'] = 'Optie';
$string['selectpresencestatus'] = 'Kies presentie status';
$string['sendconfirmmail'] = 'Stuur een bevestigingsmail';
$string['sendconfirmmailtobookingmanger'] = 'Stuur een bevestigingsmail naar de boekingsmanager';
$string['sendcustommessage'] = 'Stuur een privé-bericht';
$string['sendmailtobooker'] = 'Inschrijven andere gebruikers: Stuur een mail naar de boekingsmanager in plaats van de geboekte gebruiker.';
$string['sendmailtobooker_help'] = 'Activeer deze optie als je wilt dat de bevestigingen naar de boekingsmanagers gestuurd worden in plaats van de ingeschreven gebruiker. Dit is alleen relevant voor boekingen die gedaan worden op de pagina "Inschrijven andere gebruikers".';
$string['sendpollurltoteachers'] = 'Stuur enquête-URL';
$string['sendreminderemail'] = 'Stuur een herinneringsmail';
$string['sendreminderemailsuccess'] = 'Notificatie e-mail is verstuurd!';
$string['shorturl'] = 'Verkorte URL voor deze optie';
$string['showactive'] = 'Actieve boekingen';
$string['showallbookings'] = 'Alle boekingen';
$string['showcustomfields'] = 'Andere boekingsoptievelden';
$string['showcustomfields_desc'] = 'Selecteer de andere boekingsoptievelden die getoond moeten worden op de presentielijst.';
$string['showdescription'] = 'Toon beschrijving';
$string['showhelpfullnavigationlinks'] = 'Toon navigatie links.';
$string['showhelpfullnavigationlinks_help'] = 'Toon "ga naar registratie" en "ga naar boven".';
$string['showinapi'] = 'Toon in API?';
$string['showmybookingsonly'] = 'Mijn boekingen';
$string['showonlymyinstitutions'] = 'Mijn organisatie';
$string['showviews'] = 'Weergaven om weer te geven in het overzicht met boekingsopties';
$string['sign_in_sheet_download'] = 'Download presentielijst';
$string['signature'] = 'Handtekening';
$string['signinaddemptyrows'] = 'Kies hier het aantal lege rijen die aan de presentielijst toegevoegd moeten worden voor deelnemers die zich niet hebben aangemeld';
$string['signincustfields'] = 'Andere profielvelden';
$string['signincustfields_desc'] = 'Selecteer de andere profielvelden die getoond moeten worden op de presentielijst.';
$string['signinextracols'] = 'Toegevoegde kolom';
$string['signinextracols_desc'] = 'Je kan wel tot 3 extra kolommen toevoegen aan de presentielijst. Vul de kolomtitel in of laat het leeg voor géén extra kolom.';
$string['signinextracols_heading'] = 'Extra kolommen op de presentielijst';
$string['signinlogo'] = 'Logo tonen op de presentielijst';
$string['signinlogofooter'] = 'Toon logo in de voettekst van de presentielijst';
$string['signinlogoheader'] = 'Logo tonen in de kop van de presentielijst';
$string['signinonesession'] = 'Toon de geselecteerde sessietijd op de presentielijst';
$string['signinsheetfields'] = 'Presentielijst velden (PDF)';
$string['spaceleft'] = 'ruimte mogelijk';
$string['spacesleft'] = 'ruimtes mogelijk';
$string['startendtimeknown'] = 'Begin -en eindtijd van de cursus zijn bekend';
$string['starttimenotset'] = 'Begintijd is niet ingesteld';
$string['status_attending'] = 'Present';
$string['status_complete'] = 'Voltooid';
$string['status_failed'] = 'Onvoldoende/mislukt';
$string['status_incomplete'] = 'Incompleet';
$string['status_noshow'] = 'Niet aanwezig';
$string['status_unknown'] = 'Onbekend';
$string['statuschangebookedmessage'] = 'Beste {$a->participant},

Je inschrijfstatus is veranderd. Je bent nu geregistreerd in {$a->title}.

Inschrijf status: {$a->status}
Deelnemer:   {$a->participant}
Cursus:   {$a->title}
Datum: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Link: {$a->bookinglink}
Klik op de link om alle cursussen te bekijken waar je voor ingeschreven bent: {$a->bookinglink}
De gekoppelde cursus is hier te vinden: {$a->courselink}';
$string['statuschangebookedsubject'] = 'Inschrijfstatus veranderd voor {$a->title}';
$string['statuschangetext'] = 'Bericht wijziging status';
$string['statuschangetext_help'] = 'Laat het veld leeg om de standaard tekst te gebruiken. Je kunt een van de volgende plaatshouders gebruiken in de tekst:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} -  mailadres gebruiker</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Sessie tijden</li>
<li>{shorturl} - verkorte url naar boekingsoptie</li>
</ul>';
$string['submitandaddnew'] = 'Bewaar en voeg nieuwe toe';
$string['subscribersto'] = 'Leraren voor \'{$a}\\';
$string['subscribetocourse'] = 'Meld gebruikers aan in de cursus';
$string['subscribeuser'] = 'Weet je zeker dat je gebruikers wilt aanmelden in de volgende cursus?';
$string['successfulldeleted'] = 'Categorie is verwijderd!';
$string['successfulldeletedinstitution'] = 'Instituut is verwijderd!';
$string['sucesfullcompleted'] = 'Activiteit is succesvol voltooid voor gebruikers.';
$string['sucesfullytransfered'] = 'Gebruikers zijn succesvol overgeboekt.';
$string['tagsuccessfullysaved'] = 'Tag is bewaard.';
$string['tagtag'] = 'Tag';
$string['tagtemplates'] = 'Tag-sjablonen';
$string['tagtext'] = 'Tekst';
$string['taken'] = 'Bezet';
$string['teacherroleid'] = 'Meld de docent aan op de cursus met de rol';
$string['teachers'] = 'Leraren';
$string['templatedeleted'] = 'Sjabloon verwijderd!';
$string['terminated'] = 'Beëindigd';
$string['textfield'] = 'Enkele lijn tekstinvoer';
$string['timecloseoption'] = 'Beperk de beschikbaarheid van deze boekingsoptie tot een bepaalde datum.';
$string['timecreated'] = 'Aanmaakt op tijdstip';
$string['timerestrict'] = 'Beperk de beantwoording van deze periode: gebruik deze functionaliteit niet! Deze zal verwijderd worden. Gebruik alstublieft de instellingen "Beperk toegang" om de boekingssactiviteit voor een bepaalde periode beschikbaar te stellen.';
$string['to'] = 'tot';
$string['toomuchusersbooked'] = 'Het maximaal aantal gebruikers dat je kunt inschrijven is: {$a}.';
$string['topic'] = 'Onderwerp';
$string['transefusers'] = 'Boek gebruikers over.';
$string['transfer'] = 'Overboeken';
$string['transferheading'] = 'Boek de geselecteerde gebruikers op de geselecteerde boekingsoptie';
$string['transferhelp'] = 'Boek de gebruikers die de activiteit van de geselecteerde optie niet hebben voltooid over naar {$a}.';
$string['transferoptionsuccess'] = 'De boekingsoptie en de gebruikers zijn succesvol overgeboekt.';
$string['transferproblem'] = 'Het volgende kon niet worden overboekt door een belemmering op de boekingsoptie of bij de gebruiker {$a}';
$string['transfersuccess'] = 'De gebruikers zijn succesvol overgeboekt naar de nieuwe boekingsoptie.';
$string['unlimited'] = 'Er is geen beperking op het maximaal aantal beschikbare plaatsen.';
$string['updatebooking'] = 'Bewerk deze boekingsoptie';
$string['usedinbooking'] = 'Je kunt deze categorie niet verwijderen, omdat het gebruikt wordt in een boeking!';
$string['usedinbookinginstances'] = 'Het sjabloon wordt gebruikt in de volgende boekingsinstanties';
$string['usercalendarentry'] = 'Je bent ingeschreven voor deze  <a href="{$a}">sessie</a>.';
$string['userdownload'] = 'Download gebruikers';
$string['userid'] = 'Gebruikers-ID';
$string['userleave'] = 'De gebruiker heeft zelf zijn/haar boeking geannuleerd';
$string['userleave_help'] = 'Laat het veld leeg om de standaard tekst te gebruiken. Je kunt een van de volgende plaatshouders gebruiken in de tekst:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} -  mailadres gebruiker</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Sessie tijden</li>
<li>{shorturl} - verkorte url naar boekingsoptie</li>
</ul>';
$string['userleavebookedmessage'] = 'Beste {$a->participant},

Je bent uitgeschreven voor {$a->title}.';
$string['userleavebookedsubject'] = 'Je hebt jezelf succesvol uitgeschreven van {$a->title}';
$string['usernameofbookingmanager'] = 'Gebruikersnaam van de boekingsmanager';
$string['usernameofbookingmanager_help'] = 'Vul hier de gebruikersnaam in van de gebruiker die in het veld "van" getoond moet worden van de bevestigingsmail. Wanneer de "Stuur bevestigings e-mail naar de boekingsmanager" is ingeschakeld, is dit de gebruiker die een kopie ontvangt van de bevestigingsmails.';
$string['users'] = '<< Beheer reacties';
$string['usersonlist'] = 'Gebruikers op de lijst';
$string['userssuccessfullenrolled'] = 'Alle gebruikers zijn aangemeld!';
$string['userssuccessfullybooked'] = 'Alle gebruikers zijn ingeschreven op een andere boekingsoptie.';
$string['userssuccessfullygetnewpresencestatus'] = 'Alle gebruikers hebben een nieuwe presentie status.';
$string['userssucesfullygetnewpresencestatus'] = 'Presentie status voor geselecteerde gebruikers zijn succesvol geüpdatet.';
$string['viewallresponses'] = 'Beheer {$a} reacties';
$string['waitinglist'] = 'Wachtlijst';
$string['waitinglisttaken'] = 'Op de wachtlijst';
$string['waitinglistusers'] = 'Gebruikers op de wachtlijst';
$string['waitingplacesavailable'] = 'Beschikbare wachtlijst plaatsen:{$a->overbookingavailable} van {$a->maxoverbooking}';
$string['waitingtext'] = 'Wachtlijstbevestiging';
$string['waitingtext_help'] = 'Laat het veld leeg om de standaard tekst te gebruiken. Je kunt een van de volgende plaatshouders gebruiken in de tekst:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} -  mailadres gebruiker</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Sessie tijden</li>
<li>{shorturl} - verkorte url naar boekingsoptie</li>
</ul>';
$string['waitspaceavailable'] = 'Beschikbare plaatsen op de wachtlijst';
$string['week'] = 'Week';
$string['whichview'] = 'Standaardweergave voor boekingsopties';
$string['whichviewerror'] = 'Je moet de standaardweergave toevoegen: Weergave om weer te geven in het boekingsopties overzicht.';
$string['withselected'] = 'Met de geselecteerde gebruikers:';
$string['wrongdataallfields'] = 'Vul alsjeblieft alle velden in!';
$string['yes'] = 'Ja';
$string['yourselection'] = 'Jouw selectie';
