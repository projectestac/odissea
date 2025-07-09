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
 * Strings for component 'booking', language 'nl', version '4.4'.
 *
 * @package     booking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutmodaloptiondateform'] = 'Maak aangepaste datums aan
(bijv. voor geblokkeerde evenementen of voor enkele datums die afwijken van de datumreeks).';
$string['accessdenied'] = 'Toegang geweigerd';
$string['activatemails'] = 'Activeer e-mails (bevestigingen, notificaties en meer)';
$string['active'] = 'Actief';
$string['activitycompletionsuccess'] = 'De geselecteerde gebruikers zijn gemarkeerd voor activiteitsvoltooiing.';
$string['activitycompletiontext'] = 'Bericht dat naar de gebruiker moet worden verzonden wanneer de boekingsoptie is voltooid';
$string['activitycompletiontextmessage'] = 'Je hebt volgende boekinsoptie voltooid:

{$a->bookingdetails}

Ga naar cursus: {$a->courselink}
Bekijk alle boekingsopties: {$a->bookinglink}';
$string['activitycompletiontextsubject'] = 'Boekingsoptie voltooid';
$string['addastemplate'] = 'Voeg toe als sjabloon';
$string['addbookingrule'] = 'Voeg regel toe';
$string['addcategory'] = 'Bewerk categorieën';
$string['addholiday'] = 'Voeg vakanties toe';
$string['additionalpricecategories'] = 'Prijscategorieën toevoegen of bewerken';
$string['addmorebookings'] = 'Voeg meer boekingen toe';
$string['addnewcategory'] = 'Voeg een nieuwe categorie toe';
$string['addnewreporttemplate'] = 'Voeg nieuw rapportsjabloon toe';
$string['addnewtagtemplate'] = 'Voeg een nieuw tag-sjabloon toe.';
$string['addoptiondate'] = 'Voeg datum toe';
$string['addpricecategory'] = 'Voeg prijscategorie toe';
$string['address'] = 'Adres';
$string['addsemester'] = 'Voeg semester toe';
$string['addtocalendar'] = 'Voeg toe aan cursuskalender';
$string['addtocalendardesc'] = 'Cursuskalendergebeurtenissen zijn zichtbaar voor alle gebruikers in een cursus. Als je niet wil dat die gemaakt wordt, dan kun je deze instelling uitschakelen en standaard blokkeren. Er zullen wel altijd gebruikerskalendergebeurtenissen gemaakt worden voor elke boeking.';
$string['addtogroup'] = 'Meld gebruikers automatisch aan in een groep.';
$string['addtogroup_help'] = 'Meld gebruikers automatisch aan in een groep - er wordt automatisch een groep aangemaakt met de naam: Boeking naam - optie naam';
$string['addusertogroup'] = 'Voeg gebruikers toe aan een groep';
$string['advancedoptions'] = 'Geavanceerde opties';
$string['aftercompletedtext'] = 'Na activiteit voltooiing';
$string['aftercompletedtext_help'] = 'Laat dit leeg om de standaard tekst van de site te gebruiken. Je kunt volgende plaatshouders gebruiken in de tekst:
<ul>
<li>{bookingdetails} - Gedetailleerde samenvatting van de boeking (inclusief sessies en link naar boekingsoptie)</li>
<li>{gotobookingoption} - Link naar de boekingsoptie</li>
<li>{status} - Boeking status</li>
<li>{participant}</li>
<li>{email} - Gebruikerse-mail</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Naam van de eerste leraar</li>
<li>{teachers} - Lijst van alle leraren</li>
<li>{teacherN} - Naam van een specifieke leraar, vb. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - QR-code met gebruikersID</li>
<li>{qr_username} - QR-code met gebruikersnaam</li>
<li>{dates} - Sessietijden</li>
<li>{shorturl} - Korte url van de optie</li>
<li>{usercalendarurl} - Link om te abonneren op de gebruikerskalender (persoonlijke gebeurtenissen)</li>
<li>{coursecalendarurl} - Link om te abonneren op de cursuskalender (cursusgebeurtenissen)</li>
</ul>';
$string['alertrecalculate'] = '<b>Waarschuwing!</b> Alle prijzen worden herrekend en alle oude prijzen worden overschreven.';
$string['allbookingoptions'] = 'Download gebruikers voor alle boekingsoptie.';
$string['allchangessaved'] = 'Alle wijzigingen zijn bewaard.';
$string['allcomments'] = 'Iedereen kan een reactie geven';
$string['allmailssend'] = 'Er is een e-mail verzonden naar alle gebruikers!';
$string['allowupdate'] = 'Sta toe om boekingsoptie te updaten.';
$string['allratings'] = 'Iedereen kan beoordelen';
$string['allteachers'] = 'Alle leraren';
$string['allusersbooked'] = 'Alle {$a} geselecteerde gebruikers zijn succesvol overgeboekt naar deze boekingsoptie.';
$string['alreadyonlist'] = 'Je krijgt een melding';
$string['alreadypassed'] = 'Al behaald';
$string['answer'] = 'Antwoorden';
$string['answered'] = 'Beantwoord';
$string['applyunitfactor'] = 'Eenheidsfactor toevoegen';
$string['applyunitfactor_desc'] = 'Als deze instelling actief is, wordt de hierboven ingestelde lesblok (bijv. 45 min) gebruikt
om het aantal lesblokken te berekenen. Dit aantal wordt gebruikt als factor voor de prijsformule.
Voorbeeld: Een boekingsoptie heeft een datumreeks zoals "ma, 15:00 - 16:30". Het duurt dus 2 lesblokken (elk 45 min).
Er wordt dus een eenheidsfactor van 2 toegepast op de prijsformule.';
$string['asglobaltemplate'] = 'Gebruik als site sjabloon';
$string['associatedcourse'] = 'Geassocieerde cursus';
$string['astemplate'] = 'Gebruik als sjabloon in deze cursus';
$string['attachedfiles'] = 'Toegevoegde bestanden';
$string['autcrheader'] = 'Automatisch aanmaken van boekingsopties';
$string['autcrwhatitis'] = 'Als deze optie is ingeschakeld, wordt er automatisch een nieuwe boekingsoptie gemaakt en wordt er een gebruiker als boekingsbeheerder / leraar aan toegewezen. Gebruikers worden geselecteerd op basis van een veldwaarde voor een aangepast gebruikersprofiel.';
$string['autoenrol'] = 'Meld gebruikers automatisch aan';
$string['autoenrol_help'] = 'Indien geselecteerd worden gebruikers aangemeld in de bijbehorende cursus zodra ze de boeking maken, en afgemeld uit die cursus zodra de boeking wordt geannuleerd.';
$string['automaticcoursecreation'] = 'Automatisch aanmaken van Moodle-cursussen (PRO)';
$string['availability'] = 'Nog beschikbaar';
$string['availabilityconditions'] = 'Beschikbaarheidsvoorwaarden';
$string['available'] = 'Beschikbare plaatsen';
$string['availableplaces'] = 'Beschikbare plaatsen: {$a->available} van {$a->maxanswers}';
$string['backtoresponses'] = 'Terug naar reacties';
$string['banusernames'] = 'Ban gebruikersnamen';
$string['banusernames_help'] = 'Schrijf in het veld de gebruikersnamen - gescheiden door een komma - die je wilt verhinderen om in te inschrijven. Je kunt gebruikersnamen die eindigen op gmail.com of yahoo.com bannen door alleen te schrijven: gmail.com, yahoo.com.';
$string['banusernameswarning'] = 'Je gebruikersnaam staat op een ban-lijst, je kunt geen boeking maken.';
$string['beforebookedtext'] = 'Voor boeking';
$string['beforebookedtext_help'] = 'Laat dit leeg om de standaard tekst van de site te gebruiken. Je kunt volgende plaatshouders gebruiken in de tekst:
<ul>
<li>{bookingdetails} - Gedetailleerde samenvatting van de boeking (inclusief sessies en link naar boekingsoptie)</li>
<li>{gotobookingoption} - Link naar de boekingsoptie</li>
<li>{status} - Boeking status</li>
<li>{participant}</li>
<li>{email} - Gebruikerse-mail</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Naam van de eerste leraar</li>
<li>{teachers} - Lijst van alle leraren</li>
<li>{teacherN} - Naam van een specifieke leraar, vb. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - QR-code met gebruikersID</li>
<li>{qr_username} - QR-code met gebruikersnaam</li>
<li>{dates} - Sessietijden</li>
<li>{shorturl} - Korte url van de optie</li>
<li>{usercalendarurl} - Link om te abonneren op de gebruikerskalender (persoonlijke gebeurtenissen)</li>
<li>{coursecalendarurl} - Link om te abonneren op de cursuskalender (cursusgebeurtenissen)</li>
</ul>';
$string['beforecompletedtext'] = 'Na boeking';
$string['beforecompletedtext_help'] = 'Laat dit leeg om de standaard tekst van de site te gebruiken. Je kunt volgende plaatshouders gebruiken in de tekst:
<ul>
<li>{bookingdetails} - Gedetailleerde samenvatting van de boeking (inclusief sessies en link naar boekingsoptie)</li>
<li>{gotobookingoption} - Link naar de boekingsoptie</li>
<li>{status} - Boeking status</li>
<li>{participant}</li>
<li>{email} - Gebruikerse-mail</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Naam van de eerste leraar</li>
<li>{teachers} - Lijst van alle leraren</li>
<li>{teacherN} - Naam van een specifieke leraar, vb. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - QR-code met gebruikersID</li>
<li>{qr_username} - QR-code met gebruikersnaam</li>
<li>{dates} - Sessietijden</li>
<li>{shorturl} - Korte url van de optie</li>
<li>{usercalendarurl} - Link om te abonneren op de gebruikerskalender (persoonlijke gebeurtenissen)</li>
<li>{coursecalendarurl} - Link om te abonneren op de cursuskalender (cursusgebeurtenissen)</li>
</ul>';
$string['biggerthan'] = 'Is groter dan (nummer)';
$string['booked'] = 'Ingeschreven';
$string['bookedpast'] = 'Ingeschreven (cursus beeïndigd)';
$string['bookedtext'] = 'Inschrijvingsbevestiging';
$string['bookedtextmessage'] = 'Uw boeking is geregistreerd:

{$a->bookingdetails}
<p>##########################################</p>
Boeking status: {$a->status}
Deelnemer:   {$a->participant}

Om al je geboekte cursussen te bekijken, klik op de volgende link: {$a->bookinglink}
Het geassocieerde cursus kan je hier vinden: {$a->courselink}';
$string['bookedtextsubject'] = 'Boekingsbevestiging voor {$a->title}';
$string['bookedtextsubjectbookingmanager'] = 'Nieuwe boeking voor {$a->title} door {$a->participant}';
$string['bookedusers'] = 'Ingeschreven gebruikers';
$string['booking'] = 'Inschrijving';
$string['booking:addeditownoption'] = 'Voeg een nieuwe optie toe en wijzig eigen opties.';
$string['booking:addinstance'] = 'Voeg een nieuwe inschrijving toe';
$string['booking:bookforothers'] = 'Boek voor anderen';
$string['booking:canseeinvisibleoptions'] = 'Bekijk onzichtbare opties.';
$string['booking:cansendmessages'] = 'Kan berichten versturen';
$string['booking:changelockedcustomfields'] = 'Kan vergrendelde aangepaste boekingsopties wijzigen.';
$string['booking:choose'] = 'Inschrijven';
$string['booking:comment'] = 'Voeg commentaar toe';
$string['booking:communicate'] = 'Kan communiceren';
$string['booking:deleteresponses'] = 'Verwijder reacties';
$string['booking:downloadresponses'] = 'Download reacties';
$string['booking:managecomments'] = 'Beheer commentaar';
$string['booking:manageoptiontemplates'] = 'Optiesjablonen beheren';
$string['booking:rate'] = 'Beoordeel gekozen boekingopties';
$string['booking:readallinstitutionusers'] = 'Toon alle gebruikers';
$string['booking:readresponses'] = 'Lees reacties';
$string['booking:semesters'] = 'Boeken: semesters';
$string['booking:sendpollurl'] = 'Stuur enquête-url';
$string['booking:sendpollurltoteachers'] = 'Stuur enquête-url naar docenten';
$string['booking:subscribeusers'] = 'Schrijf andere gebruikers in';
$string['booking:updatebooking'] = 'Beheer boekingopties';
$string['booking:viewallratings'] = 'Bekijk alle ruwe beoordelingen, gegeven door individuelen';
$string['booking:viewanyrating'] = 'Bekijk de totale beoordeling die iemand heeft ontvangen';
$string['booking:viewrating'] = 'Bekijk het totaal van de beoordeling die je gekregen hebt';
$string['bookingaction'] = 'Actie';
$string['bookingattachment'] = 'Bijlage';
$string['bookingcategory'] = 'Categorie';
$string['bookingchangedtext_help'] = 'Geef een 0 in om het wijzigen van meldingen uit te schakelen

Je kunt volgende plaatshouders gebruiken in de tekst:
<ul>
<li>{bookingdetails} - Gedetailleerde samenvatting van de boeking (inclusief sessies en link naar boekingsoptie)</li>
<li>{gotobookingoption} - Link naar de boekingsoptie</li>
<li>{status} - Boeking status</li>
<li>{participant}</li>
<li>{email} - Gebruikerse-mail</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Naam van de eerste leraar</li>
<li>{teachers} - Lijst van alle leraren</li>
<li>{teacherN} - Naam van een specifieke leraar, vb. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - QR-code met gebruikersID</li>
<li>{qr_username} - QR-code met gebruikersnaam</li>
<li>{dates} - Sessietijden</li>
<li>{shorturl} - Korte url van de optie</li>
<li>{usercalendarurl} - Link om te abonneren op de gebruikerskalender (persoonlijke gebeurtenissen)</li>
<li>{coursecalendarurl} - Link om te abonneren op de cursuskalender (cursusgebeurtenissen)</li>
</ul>';
$string['bookingchangedtextsubject'] = 'Verander melding voor {$a->title}';
$string['bookingclosingtime'] = 'Tot';
$string['bookingcondition'] = 'Voorwaarde';
$string['bookingdeleted'] = 'Je inschrijving is geannuleerd';
$string['bookingduration'] = 'Duur';
$string['bookingfull'] = 'Er zijn geen beschikbare plaatsen';
$string['bookingfulldidntregister'] = 'Optie is vol, ik heb geen gebruikers overgezet!';
$string['bookingimages'] = 'Upload koptekst afbeeldingen voor boekingsopties - ze moeten exact dezelfde naam hebben als de waarde van het geselecteerde aangepaste veld in elke boekingsoptie.';
$string['bookinginstance'] = 'Boekingsinstantie';
$string['bookinginstancetemplatename'] = 'Sjabloonnaam boekingsinstantie';
$string['bookinginstancetemplatessettings'] = 'Sjablonen voor boekingsinstanties';
$string['bookingmanagererror'] = 'De ingegeven gebruikersnaam is niet juist. De gebruiker bestaat niet of er is meer dan een gebruiker met deze gebruikersnaam (bijvoorbeeld: je hebt mnet en lokale authenticatie aanstaan)';
$string['bookingmeanwhilefull'] = 'Intussen heeft iemand anders de laatste plaats genomen';
$string['bookingname'] = 'Boekingsnaam';
$string['bookingopen'] = 'Open';
$string['bookingopeningtime'] = 'Van';
$string['bookingoptioncalendarentry'] = '<a href="{$a}" class="btn btn-primary">Boek nu...</a>';
$string['bookingoptiondefaults'] = 'Standaardinstellingen voor boekingsopties';
$string['bookingoptionimage'] = 'Afbeelding uploaden';
$string['bookingoptionname'] = 'Boekingoptie naam';
$string['bookingoptionprice'] = 'Prijs';
$string['bookingoptionsfromtemplatemenu'] = 'Nieuwe boekingsoptie van sjabloon';
$string['bookingoptionsmenu'] = 'Inschrijf opties';
$string['bookingoptiontitle'] = 'Boekingsoptie titel';
$string['bookingorganizatorname'] = 'Naam organisator';
$string['bookingplacesenoughmessage'] = 'Nog genoeg plaatsen beschikbaar.';
$string['bookingplacesfullmessage'] = 'Geen plaatsen meer beschikbaar.';
$string['bookingplaceslowmessage'] = 'Nog maar een paar boekingsplaatsen beschikbaar';
$string['bookingpoints'] = 'Cursuspunten';
$string['bookingpolicy'] = 'Inschrijfvoorwaarden';
$string['bookingpollurl'] = 'Enquête url';
$string['bookingpollurlteachers'] = 'Docenten enquête url';
$string['bookingpricecategory'] = 'Prijscatagorie';
$string['bookingpricesettings'] = 'Prijsinstellingen';
$string['bookingrule'] = 'Regel';
$string['bookingruleaction'] = 'Actie van de regel';
$string['bookingrulecondition'] = 'Conditie van de regel';
$string['bookingrules'] = 'Boeking: Definieer globale regels (PRO)';
$string['bookingsaved'] = 'Je inschrijving is succesvol bewaard. Je kunt nu verder gaan met het inschrijven op andere cursussen.';
$string['bookingsettings'] = 'Boeking: Hoofdinstellingen';
$string['bookingtags'] = 'Tags';
$string['bookingtext'] = 'Boekingstekst';
$string['booknow'] = 'Inschrijven';
$string['bookotherusers'] = 'Inschrijven andere gebruikers';
$string['booktootherbooking'] = 'Schrijf gebruikers in op een andere boekingoptie';
$string['bookuserswithoutcompletedactivity'] = 'Geboekte gebruikers zonder activiteitsvoltooiing';
$string['bstcourse'] = 'Cursus';
$string['bstcoursestarttime'] = 'Datum / Tijd';
$string['bstinstitution'] = 'Instituut';
$string['bstlink'] = 'Toon';
$string['bstlocation'] = 'Locatie';
$string['bstmanageresponses'] = 'Beheer reacties';
$string['bstparticipants'] = 'Deelnemers';
$string['bstteacher'] = 'Leraar(en)';
$string['bsttext'] = 'Boekingsoptie';
$string['bstwaitinglist'] = 'Op de wachtlijst';
$string['btnbooknowname'] = 'Naam van knop "Nu boeken"';
$string['btncacname'] = 'Naam van knop "Bevestig activiteitsvoltooiing"';
$string['btncancelname'] = 'Naam van knop "Annuleer boeking"';
$string['btnviewavailable'] = 'Bekijk beschikbare opties';
$string['cachedef_bookingoptions'] = 'Boekingsopties (cache)';
$string['cachedef_bookingoptionsanswers'] = 'Boekingsopties antwoorden (cache)';
$string['cachedef_bookingoptionsettings'] = 'Boekingsopties instellingen (cache)';
$string['cachedef_cachedbookinginstances'] = 'Boekingsinstanties (cache)';
$string['cachedef_cachedpricecategories'] = 'Boekingsprijscategorieën (cache)';
$string['cachedef_cachedprices'] = 'Boekingsprijzen (cache)';
$string['cachedef_cachedsemesters'] = 'Semesters (cache)';
$string['caladdascourseevent'] = 'Voeg toe aan kalender (alleen zichtbaar voor de deelnemers van de cursus)';
$string['caladdassiteevent'] = 'Voeg toe aan kalender (zichtbaar voor alle gebruikers)';
$string['cancancelbookdays'] = 'Verbied dat gebruikers hun boeking n dagen voor de start annuleren. Een negatief getal betekent dat gebruikers hun boeking nog n dagen NA de cursusstart kunnen annuleren.';
$string['cancancelbookdaysno'] = 'Geen limiet';
$string['cancel'] = 'Annuleren';
$string['cancelallusers'] = 'Annuleer de boeking van alle gebruikers';
$string['cancelbooking'] = 'Annuleer inschrijving';
$string['canceloption'] = 'Annuleer boekingsoptie';
$string['cancelthisbookingoption'] = 'Annuleer deze boekingsoptie';
$string['cannotremovesubscriber'] = 'Je moet de activiteitsvoltooing verwijderen voor je de boeking kunt annuleren. De boeking is niet geannuleerd!';
$string['categories'] = 'Categorieën';
$string['category'] = 'Categorie';
$string['categoryname'] = 'Categorienaam';
$string['cfgsignin'] = 'Instellingen presentielijst';
$string['cfgsignin_desc'] = 'Presentielijst instellen';
$string['changeinfoadded'] = 'is toegevoegd:';
$string['changeinfocfadded'] = 'Een veld is toegevoegd:';
$string['changeinfocfchanged'] = 'Een veld is gewijzigd:';
$string['changeinfocfdeleted'] = 'Een veld is verwijderd:';
$string['changeinfochanged'] = 'is gewijzigd:';
$string['changeinfodeleted'] = 'is verwijderd';
$string['changeinfosessionadded'] = 'Een sessie is toegevoegd';
$string['changeinfosessiondeleted'] = 'Een sessie is verwijderd';
$string['changenew'] = '[NIEUW]';
$string['changeold'] = '[VERWIJDERD]';
$string['changesemester'] = 'Wijzig semester';
$string['changesemester:warning'] = '<strong>Kijk uit!:</strong> Door op "behoud wijzigingen" te klikken worden alle gegevens verwijderd en vervangen door de gegevens van het geselecteerde semester.';
$string['choose...'] = 'Kies...';
$string['choosepdftitle'] = 'Selecteer de titel die op de presentielijst moet worden getoond';
$string['chooseperiod'] = 'Selecteer tijdsperiode';
$string['choosesemester'] = 'Kies semester';
$string['closed'] = 'Boekingoptie gesloten';
$string['comments'] = 'Commentaar';
$string['completed'] = 'Voltooid';
$string['completedcomments'] = 'Alleen bij een voltooide activiteit';
$string['completedratings'] = 'Alleen bij een voltooide activiteit';
$string['completionmodule'] = 'Gebruikersboekingen in bulk verwijderen inschakelen, nadat geselecteerde cursusactiviteit is voltooid';
$string['completionmodule_help'] = 'Knop voor in bulk verwijderen reacties op boekingen weergeven, als een andere cursusactiviteit is voltooid. De boekingen van gebruikers worden met een klik verwijderd van de rapportenpagina! Alleen activiteiten met ingeschakelde activiteitsvoltooiing kunnen worden geselecteerd.';
$string['confirmactivtyfrom'] = 'Bevestig gebruikers activiteit van';
$string['confirmationmessagesettings'] = 'Bevestiging e-mailinstellingen';
$string['confirmbookingoffollowing'] = 'Bevestig alsjeblieft de boeking voor de volgende cursus.';
$string['confirmcanceloption'] = 'Bevestig de annulering van de boekingsoptie';
$string['confirmcanceloptiontitle'] = 'Verander de status van de boekingsoptie';
$string['confirmdeletebookingoption'] = 'Weet je zeker dat je deze boekingsoptie wilt verwijderen?';
$string['confirmoptioncompletion'] = '(herstel)Bevestig voltooiing';
$string['confirmpresence'] = 'Bevestig presentie';
$string['confirmusers'] = 'Bevestig gebruikers activiteit';
$string['confirmuserswith'] = 'Bevestig gebruikers die een activiteit voltooid hebben of een badge hebben ontvangen';
$string['contains'] = 'bevat (tekst)';
$string['containsnot'] = 'bevat niet (tekst)';
$string['copy'] = '- Kopieer';
$string['copyonlythisbookingurl'] = 'Kopieer deze boekingsurl';
$string['copypollurl'] = 'Kopieer enquête url';
$string['copytoclipboard'] = 'Kopieer naar klembord: CTRL+C, Enter';
$string['coursedate'] = 'Datum';
$string['courseendtime'] = 'Eindtijd van de cursus';
$string['coursepageshortinfolbl'] = 'Korte informatie';
$string['coursestarttime'] = 'Starttijd van de cursus';
$string['courseurl'] = 'Cursus-URL';
$string['createnewbookingoption'] = 'Nieuwe boekingsoptie';
$string['csvfile'] = 'CSV-bestand';
$string['customdownloadreport'] = 'Download rapportage';
$string['customfield'] = 'Andere velden die ingesteld moeten worden in de boekingsoptie. Deze velden worden getoond in het boekingsoptieoverzicht.';
$string['customfieldconfigure'] = 'Andere boekingsoptievelden';
$string['customfielddef'] = 'Ander boekingsoptieveld';
$string['customfielddesc'] = 'Nadat je een aangepast veld hebt toegevoegd. Kun je in de boekingsoptie de waarde van het veld invullen. De ingevulde waarde wordt getoond in de beschrijving van de boekingsoptie.';
$string['customfieldname'] = 'Veldnaam';
$string['customfieldoptions'] = 'Lijst van mogelijke waardes';
$string['customfields'] = 'Aangepaste velden';
$string['customfieldtype'] = 'Veldtype';
$string['customfieldvalue'] = 'Waarde';
$string['dateandtime'] = 'Datum en tijd';
$string['dateerror'] = 'Verkeerde datum in lijn {$a}:';
$string['datenotset'] = 'Datum is niet ingesteld';
$string['dateparseformat'] = 'Datumopmaak';
$string['dateparseformat_help'] = 'Gebruik alsjeblieft de datumopmaak zoals gespecificeerd in het CSV bestand. Raadpleeg eventueel <a href="http://php.net/manual/en/function.date.php">voor de mogelijkheden</a> .';
$string['dates'] = 'Datums';
$string['dayofweektime'] = 'Dag & Tijd';
$string['days'] = '{$a} dagen';
$string['daystonotify'] = 'Het aantal dagen voor de start van de  gebeurtenis dat je deelnemers op de hoogte wilt stellen.';
$string['daystonotify2'] = 'Tweede notificatie om deelnemers te verwittigen voor de aanvang van de gebeurtenis.';
$string['daystonotify_help'] = 'Deze functionaliteit werkt alleen als de start en einddatum van een boekingsoptie is ingesteld. Vul 0 in om de functionaliteit uit te zetten.';
$string['daystonotifysession_help'] = 'Geef 0 in  om de e-mailnotificaties uit te schakelen voor deze sessie';
$string['defaultbookingoption'] = 'Standaard boekingsopties';
$string['defaultdateformat'] = 'j.n.Y H:i:s';
$string['defaultpriceformula'] = 'Prijsformule';
$string['defaulttemplate'] = 'Standaard sjabloon';
$string['defaulttemplatedesc'] = 'Standaard boekingsoptie sjabloon, wanneer een nieuwe boekingsoptie gemaakt wordt.';
$string['defaultvalue'] = 'Standaard prijswaarde';
$string['delcustfield'] = 'Verwijder dit veld en alle bijbehorende veldinstellingen in de boekingsopties';
$string['deletebooking'] = 'Weet je zeker dat je wilt uitschrijven voor de volgende cursus? <br /><br /> <b>{$a} </b>';
$string['deletebookingrule'] = 'Verwijder regel';
$string['deletecategory'] = 'Verwijder';
$string['deletecustomfield'] = 'Aangepaste veld verwijderen?';
$string['deletedbookingusermessage'] = 'Beste {$a->participant},

Je boeking voor {$a->title} ({$a->startdate} {$a->starttime}) is geannuleerd.';
$string['deletedbookingusersubject'] = 'Inschrijving voor {$a->title} geannuleerd.';
$string['deletedrule'] = 'Regel verwijderd.';
$string['deletedtext'] = 'Bericht geannuleerde boeking (0 om uit te schakelen)';
$string['deletedtextmessage'] = 'Boekingsoptie is verwijderd: {$a->title}

Gebruiker: {$a->participant}
Titel: {$a->title}
Datum: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Cursus: {$a->courselink}
Boekinglink: {$a->bookinglink}';
$string['deletedtextsubject'] = 'Verwijderde boeking: {$a->title} door {$a->participant}';
$string['deletedusers'] = 'Verwijderde gebruikers';
$string['deleteholiday'] = 'Verwijder vakantie';
$string['deleteoptiondate'] = 'Verwijder datum';
$string['deleteresponsesactivitycompletion'] = 'Verwijder alle gebruikers die de activiteit {$a} voltooid hebben.';
$string['deleterule'] = 'Verwijder';
$string['deletesemester'] = 'Verwijder semester';
$string['deletesubcategory'] = 'Verwijder alsjeblieft eerst alle subcategorieën in deze categorie!';
$string['deletethisbookingoption'] = 'Verwijder deze boekingsoptie';
$string['deleteuserfrombooking'] = 'Weet je zeker dat je deze gebruikers wilt verwijderen van de boeking?';
$string['delnotification'] = 'Je hebt {$a->del} van de {$a->all} gebruikers verwijderd. Gebruikers die een voltooide activiteit hadden, kunnen niet verwijderd worden!';
$string['delnotificationactivitycompletion'] = 'Je hebt {$a->del} van de  {$a->all} gebruikers verwijderd. Gebruikers, die de activiteit voltooid hebben, kunnen niet verwijderd worden!';
$string['description'] = 'Beschrijving';
$string['disablebookingusers'] = 'Boeking van gebruikers uitschakelen - Verberg de knop Inschrijven.';
$string['disablepricecategory'] = 'Prijscategorie uitschakelen';
$string['disablepricecategory_help'] = 'Wanneer je een prijscategorie uitschakelt, kun je deze niet meer gebruiken.';
$string['download'] = 'Downloaden';
$string['downloadallresponses'] = 'Download alle reacties van alle boekingsopties.';
$string['downloadusersforthisoptionods'] = 'Download gebruikers als .ods';
$string['downloadusersforthisoptionxls'] = 'Download gebruikers als .xls';
$string['duplicatename'] = 'Deze boekingsoptie naam bestaat al. Kies een andere naam.';
$string['duplicationrestore'] = 'Dupliceren, backup maken en terugzetten';
$string['duplicationrestoreentities'] = 'Inclusief entiteiten';
$string['duplicationrestoreprices'] = 'Inclusief prijzen';
$string['duplicationrestoreteachers'] = 'Inclusief leraren';
$string['duration:minutes'] = 'Duur (minuten)';
$string['editbookingoption'] = 'Pas boekingsoptie aan';
$string['editcategory'] = 'Bewerk';
$string['editingoptiondate'] = 'Je bent op dit moment bezig met deze sessie te bewerken';
$string['editinstitutions'] = 'Bewerk organisaties';
$string['editotherbooking'] = 'Andere boekingsregels';
$string['editrule'] = 'Bewerk';
$string['edittag'] = 'Bewerk';
$string['editteachers'] = 'Bewerk';
$string['editteacherslink'] = 'Bewerk docenten';
$string['educationalunitinminutes'] = 'Duur van een lesblok (minuten)';
$string['enable'] = 'Inschakelen';
$string['enablecompletion'] = 'Aantal boekingen';
$string['enablecompletiongroup'] = 'Aantal boekingsopties';
$string['endtimenotset'] = 'Einddatum is niet ingesteld';
$string['enrolledcomments'] = 'alleen aangemelde gebruikers';
$string['enrolledinoptions'] = 'al ingeschreven in boekingsopties:';
$string['enrolledratings'] = 'Alleen aangemelde gebruikers';
$string['enrolmentstatus'] = 'Schrijf gebruikers niet direct in, maar pas op cursus begin datum.';
$string['entervalidurl'] = 'Vul alstublieft een geldige URL in!';
$string['equals'] = 'Heeft precies deze waarde (tekst of getal)';
$string['equalsnot'] = 'Heeft niet precies deze waarde (tekst of getal)';
$string['error:choosevalue'] = 'Je moet hier een waarde kiezen.';
$string['error:entervalue'] = 'Je moet een waarde hier neerzetten.';
$string['error:failedtosendconfirmation'] = 'De onderstaande gebruiker heeft geen bevestigingsmail ontvangen:

Boekingsstatus: {$a->status}
Deelnemer:   {$a->participant}
Boekingsoptie:  {$a->title}
Datum: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Link: {$a->bookinglink}
Gekoppelde cursus: {$a->courselink}';
$string['error:identifierexists'] = 'Kies een andere ID. Deze bestaat al.';
$string['error:mustnotbeempty'] = 'Mag niet leeg zijn';
$string['error:nofieldchosen'] = 'Je moet een veld kiezen';
$string['error:reasonfornoteacher'] = 'Voeg een reden toe waarom er geen leraren present waren op deze dag.';
$string['error:reasonforsubstituteteacher'] = 'Voeg een reden toe voor de vervangende leraar(en).';
$string['error:reasontoolong'] = 'Reden is te lang, geef een kortere tekst.';
$string['error:wrongteacherid'] = 'Foutmelding: Geen gebruiker kon gevonden worden voor de verstrekte "lerarenid".';
$string['errorduplicatepricecategoryidentifier'] = 'De ID\'s van de prijscategorieën moeten uniek zijn.';
$string['errorduplicatepricecategoryname'] = 'De namen van de prijscategorieën moeten uniek zijn.';
$string['errorduplicatesemesteridentifier'] = 'de ID\'s van de semesters moeten uniek zijn.';
$string['errorduplicatesemestername'] = 'Semesternamen moeten uniek zijn.';
$string['erroremptycustomfieldname'] = 'Aangepaste veldnaam mag niet leeg zijn.';
$string['erroremptycustomfieldvalue'] = 'Aangepaste veldwaarde mag niet leeg zijn.';
$string['erroremptypricecategoryidentifier'] = 'Prijscategorie ID mag niet leeg zijn.';
$string['erroremptypricecategoryname'] = 'Prijscategorie naam mag niet leeg zijn.';
$string['erroremptysemesteridentifier'] = 'Semester ID is nodig!';
$string['erroremptysemestername'] = 'Semesternaam mag niet leeg zijn';
$string['errorholidayend'] = 'Vakantie mag niet eindigen voor de startdatum';
$string['errorholidaystart'] = 'Vakantie mag niet starten na de einddatum';
$string['erroroptiondateend'] = 'Einddatum moet na de startdatum zijn.';
$string['erroroptiondatestart'] = 'Startdatum moet voor de einddatum zijn.';
$string['errorpagination'] = 'Vul alstublieft een nummer in dat groter is dan 0';
$string['errorsemesterend'] = 'Semestereinde moet na de semesterstart.';
$string['errorsemesterstart'] = 'Semesterstart moet voor het semestereinde.';
$string['errortoomanydecimals'] = 'Maximaal 2 decimalen toegestaan.';
$string['eventalreadyover'] = 'Dit evenement is al over.';
$string['eventduration'] = 'Gebeurtenisduur';
$string['eventpoints'] = 'Punten';
$string['eventtype'] = 'Gebeurtenistype';
$string['excelfile'] = 'CSV bestand met activiteitsvoltooiing';
$string['existingsubscribers'] = 'Bestaande inschrijvers';
$string['expired'] = 'Sorry, deze activiteit is op {$a} gesloten en niet langer beschikbaar';
$string['fillinatleastoneoption'] = 'Je moet minimaal 2 mogelijke antwoorden ingeven.';
$string['filterbtn'] = 'Filter';
$string['filterenddate'] = 'Tot';
$string['filterstartdate'] = 'Van';
$string['forcourse'] = 'voor cursus';
$string['friday'] = 'Vrijdag';
$string['full'] = 'Vol';
$string['fullname'] = 'Volledige naam';
$string['fullybooked'] = 'Volgeboekt';
$string['generaterecnum'] = 'Genereer nummers';
$string['generaterecnumareyousure'] = 'Dit zal nieuwe nummers genereren en de oude permanent verwijderen!';
$string['generaterecnumnotification'] = 'Er zijn nieuwe nummers gegenereerd.';
$string['globalactivitycompletiontext'] = 'Bericht wat verstuurd moet worden wanneer een boekingsoptie is voltooid (algemene sjabloon)';
$string['globalbookedtext'] = 'Boekingsbevestiging (algemene sjabloon)';
$string['globalbookingchangedtext'] = 'Bericht wat verstuurd moet worden wanneer een boekingsoptie is gewijzigd (wordt alleen verstuurd naar gebruikers die al geboekt hebben). Gebruik de tijdelijke aanduiding {changes} om veranderingen te zien. Vul 0 in om notificaties uit te zetten. (Algemene sjabloon)';
$string['globalcurrency'] = 'Munteenheid';
$string['globalcurrencydesc'] = 'Kies een munteenheid voor de boekingsoptie prijzen';
$string['globaldeletedtext'] = 'Geannuleerde boekingsbericht (algemene sjabloon)';
$string['globalmailtemplates'] = 'Algemene e-mailsjablonen';
$string['globalmailtemplates_desc'] = 'Alleen beschikbaar in de PRO-versie. Na activatie kun je naar de instellingen van een boekingsinstantie gaan en de bron van mailtemplates instellen op globaal.';
$string['globalnotifyemail'] = 'Deelnemer notificatie voor het begin (algemene sjabloon)';
$string['globalnotifyemailteachers'] = 'Lerarennotificatie voor het begin (algemene sjabloon)';
$string['globalpollurlteacherstext'] = 'Bericht voor de poll-URL verzonden naar docenten (algemene sjabloon)';
$string['globalpollurltext'] = 'Bericht voor het verzenden van poll-URL naar geboekte gebruikers (algemeen sjabloon)';
$string['globalstatuschangetext'] = 'Statuswijzigingsbericht (algemeen sjabloon)';
$string['globaluserleave'] = 'Gebruiker heeft zijn/haar eigen boeking geannuleerd (algemeen sjabloon)';
$string['globalwaitingtext'] = 'Wachtlijstbevestiging (algemeen sjabloon)';
$string['gotobooking'] = 'Boekingen';
$string['gotobookingoption'] = 'Ga naar boekingsoptie';
$string['gotomanageresponses'] = '&lt;&lt; Beheer reacties';
$string['groupdeleted'] = 'Deze boekingsoptie maakt automatisch groepen aan in de geselecteerde cursus. Maar de groep is handmatig verwijderd uit de cursus. Klik op de checkbox hieronder om de groep en inschrijvingen weer aan te maken.';
$string['groupexists'] = 'De groep bestaat al in de gekozen cursus, kies alstublieft een andere naam voor de boekingsoptie';
$string['groupname'] = 'Groepnaam';
$string['helptext:placeholders'] = '<p>
<a data-toggle="Klap dicht" href="#collapsePlaceholdersHelptext" role="button" aria-expanded="false" aria-controls="collapsePlaceholdersHelptext">
  <i class="fa fa-question-circle" aria-hidden="true"></i><span>&nbsp;Je kan de volgende tijdelijke aanduidingen gebruiken...</span>
</a>
</p>
<div class="collapse" id="collapsePlaceholdersHelptext">
  <div class="card card-body">
    <ul>
        <li>{bookingdetails} - Gedetailleerde samenvatting van het boekingsoptie (incl. sessies en de link naar boekingsoptie</li>
        <li>{gotobookingoption} - Link naar boekingsoptie</li>
        <li>{status} - Boekingsstatus</li>
        <li>{participant}</li>
        <li>{email} - Gebruikers e-mail</li>
        <li>{title}</li>
        <li>{duration}</li>
        <li>{starttime}</li>
        <li>{endtime}</li>
        <li>{startdate}</li>
        <li>{enddate}</li>
        <li>{courselink}</li>
        <li>{bookinglink}</li>
        <li>{pollurl}</li>
        <li>{pollurlteachers}</li>
        <li>{location}</li>
        <li>{institution}</li>
        <li>{address}</li>
        <li>{eventtype}</li>
        <li>{teacher} - Naam van de eerste leraar</li>
<li>{teachers} - Lijst van alle leraren</li>
        <li>{teacherN} - Naam van een specifieke docent, bijv. {teacher1}</li>
        <li>{pollstartdate}</li>
        <li>{qr_id} - Voeg QR-Code toe met het gebruikers ID</li>
        <li>{qr_username} - Voeg QR-code toe met de gebruikersnaam</li>
        <li>{dates} - Sessie tijden</li>
        <li>{shorturl} - korte URL van optie</li>
        <li>{usercalendarurl} - Link naar abonneren op gebruikerskalender (persoonlijke evenementen)</li>
        <li>{coursecalendarurl} - Link naar abonneren op cursus kalender (cursus evenementen)</li>
    </ul>
  </div>
</div>';
$string['hidedescription'] = 'Verberg beschrijving';
$string['hidelistoncoursepage'] = 'Verberg lijst op cursuspagina (standaard)';
$string['holiday'] = 'Vakantie';
$string['holidayend'] = 'Einde';
$string['holidayendactive'] = 'Einde is niet op de zelfde dag';
$string['holidayname'] = 'Vakantienaam (optioneel)';
$string['holidays'] = 'Vakanties';
$string['holidaystart'] = 'Vakantie (begin)';
$string['hours'] = '{$a} uren';
$string['howmanytimestorepeat'] = 'Hoeveel keer herhalen?';
$string['howmanyusers'] = 'Maximaal aantal gebruikers dat de leraar heeft ingesteld voor de optie \'kan boeken\'';
$string['howoftentorepeat'] = 'Hoe vaak herhalen?';
$string['icalcancel'] = 'Indien een gebeurtenis geannuleerd wordt voeg een ical-bijlage toe als geannuleerde gebeurtenis';
$string['icalcanceldesc'] = 'Wanneer een gebruiker een inschrijving annuleert of verwijderd wordt van de ingeschreven gebruikerslijst, voeg dan een ical bijlage toe als een geannuleerde gebeurtenis.';
$string['icalcfg'] = 'Instellingen van de ical bijlages';
$string['icalcfgdesc'] = 'De ical.ics bestanden maken het mogelijk om de boekingsdata toe te voegen aan de persoonlijke kalender. De ical.ics bestand wordt als bijlage toegevoegd aan het e-mail bericht.';
$string['icalfieldlocation'] = 'De tekst die getoond wordt in het iCal veld locatie.';
$string['icalfieldlocationdesc'] = 'Kies uit het keuzemenu welke tekst er gebruikt moet worden voor het kalenderveld "locatie"';
$string['importcsvbookingoption'] = 'Importeer CSV met boekingsopties';
$string['importcsvtitle'] = 'Importeer CSV';
$string['importexcelbutton'] = 'Importeer activiteitsvoltooiing';
$string['importexceltitle'] = 'Importeer activiteitsvoltooiing';
$string['importfinished'] = 'Het importeren is voltooid!';
$string['importinfo'] = 'Import informatie; de volgende kolommen kunnen toegevoegd worden in een CSV upload .';
$string['inarray'] = 'gebruiker heeft een van deze door komma\'s gescheiden waarden';
$string['includeteachers'] = 'Voeg docenten toe aan de presentielijst';
$string['infoalreadybooked'] = '<div class="infoalreadybooked"><i>Je hebt al geboekt voor deze optie.</i></div>';
$string['infonobookingoption'] = 'Gebruik het instellingenblok of -icoon bovenaan de pagina om een boekingsoptie toe te voegen';
$string['institution'] = 'Organisatie';
$string['institutions'] = 'Organisaties';
$string['isempty'] = 'veld is leeg';
$string['isnotempty'] = 'veld is niet leeg';
$string['lblacceptingfrom'] = 'Label: aanvaarden van';
$string['lblbooking'] = 'Naam label "Boeking"';
$string['lblbooktootherbooking'] = 'Naam op knop "Schrijf gebruikers in op andere boekingsoptie"';
$string['lblinstitution'] = 'Label: organisatie';
$string['lbllocation'] = 'Label: locatie';
$string['lblname'] = 'Label: naam';
$string['lblnumofusers'] = 'Label: aantal gebruikers';
$string['lblsputtname'] = 'Label: Stuur een enquête-url naar leraren';
$string['lblsurname'] = 'Label: achternaam';
$string['lblteachname'] = 'Label: Leraren';
$string['leftandrightdate'] = '{$a->leftdate} tot {$a->righttdate}';
$string['licensekey'] = 'PRO licentie sleutel';
$string['licensekeycfg'] = 'Activeer PRO versie';
$string['limit'] = 'Beperk';
$string['limitanswers'] = 'Beperk het aantal deelnemers';
$string['limitanswers_help'] = 'Als je deze optie wijzigt en je mensen hebt geboekt, kunt je ze zonder kennisgeving verwijderen!';
$string['linkgotobookingoption'] = 'Ga naar geboekte optie: {$a}</a>';
$string['location'] = 'Locatie';
$string['lowerthan'] = 'is lager dan (nummer)';
$string['mailconfirmationsent'] = 'Je ontvangt zo snel mogelijk een bevestigingsmail .';
$string['managebooking'] = 'Beheer';
$string['manageoptiontemplates'] = 'Beheren van sjablonen voor boekingsopties';
$string['manageresponses'] = 'Beheer reacties';
$string['maxoverbooking'] = 'Maximaal aantal plaatsen op de wachtlijst';
$string['maxparticipantsnumber'] = 'Maximaal aantal gebruikers';
$string['maxperuser'] = 'Maximaal aantal huidige boekingen per gebruiker';
$string['maxperuser_help'] = 'Het maximale aantal boekingen dat een individuele gebruiker in deze activiteit tegelijk kan maken. Wanneer een boeking eindtijd is bereikt, wordt deze niet meer meegeteld.';
$string['maxperuserwarning'] = 'Je hebt op dit moment {$a->count} van de {$a->limit} maximale aantal beschikbare boekingen ({$a->eventtype}) in gebruik voor jouw account.';
$string['messageprovider:bookingconfirmation'] = 'Boeking bevestigingen';
$string['messagesend'] = 'Je bericht is verzonden';
$string['messagesubject'] = 'Onderwerp';
$string['messagetext'] = 'Bericht';
$string['minanswers'] = 'Min. aantal deelnemers';
$string['minutes'] = '{$a} minuten';
$string['missinghours'] = 'Ontbrekede uren';
$string['modaloptiondateformtitle'] = 'Aangepaste datums';
$string['modulename'] = 'Boeking';
$string['modulenameplural'] = 'Boekingen';
$string['monday'] = 'Maandag';
$string['moveoptionto'] = 'Verschuif een boekingsoptie naar een andere boekingsactiviteit';
$string['multiselect'] = 'Meerdere selecties';
$string['mustchooseone'] = 'Je moet een optie kiezen voordat je kunt bewaren. Er is niets bewaard.';
$string['mustfilloutuserinfobeforebooking'] = 'Vul alsjeblieft de persoonlijke boekingsinformatie in, voordat je verder gaat met het boekingsformulier.';
$string['mybookingsbooking'] = 'Boeking (Curses)';
$string['mybookingsoption'] = 'Optie';
$string['newcourse'] = 'Nieuwe cursus';
$string['newoptiondate'] = 'Creëer een nieuwe sessie';
$string['newtemplatesaved'] = 'Nieuw boekingsoptie sjabloon is bewaard.';
$string['next'] = 'Volgende';
$string['no'] = 'Nee';
$string['nobookingpossible'] = 'Boeken niet mogelijk';
$string['nobookingselected'] = 'Geen boekingsoptie geselecteerd';
$string['nocomments'] = 'Schakel commentaar uit';
$string['nocourse'] = 'Geen cursus geselecteerd voor deze boekingsoptie';
$string['noguestchoose'] = 'Sorry, gasten zijn niet toegestaan om een boeking te doen.';
$string['noratings'] = 'Schakel sterbeoordelen uit';
$string['noresultsviewable'] = 'De resultaten kunnen op dit moment niet getoond worden.';
$string['norighttobook'] = 'Het is niet mogelijk om in je huidige rol een boeking te maken. Neem alsjeblieft contact op met de site-beheerder om je de juiste rechten te geven.';
$string['nosubscribers'] = 'Er zijn geen leraren toegevoegd!';
$string['notallbooked'] = 'De volgende gebruikers konden niet overgeboekt worden doordat het maximaal aantal geboekte gebruikers is bereikt of beperkt aantal beschikbare plaatsen waren op de boekingsoptie:{$a}';
$string['notbooked'] = 'Nog niet geboekt.';
$string['notconectedbooking'] = 'Niet gekoppeld';
$string['noteacherfound'] = 'De gebruiker op lijn {$a} bestaat niet op het platform.';
$string['noteacherset'] = 'Geen leraar';
$string['notemplate'] = 'Gebruik niet als sjabloon.';
$string['notes'] = 'Boekingsnotities';
$string['notificationlist'] = 'Notificatielijst';
$string['notificationtext'] = 'Notificatiebericht';
$string['notifyemail'] = 'Deelnemersnotificatie voor start';
$string['notifyemailmessage'] = 'Uw boeking start binnenkort

Boeking status: {$a->status}
Deelnemer: {$a->participant}
Boekingsoptie: {$a->title}
Datum: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Om al je geboekte cursussen te bekijken, klik de volgende link: {$a->bookinglink}
Het geassocieerde cursus kan hier gevonden worden: {$a->courselink}';
$string['notifyemailsubject'] = 'Je boeking start binnenkort';
$string['notifyemailteachers'] = 'Docentmelding voor aanvang (PRO)';
$string['notifyemailteacherssubject'] = 'Je boeking start gauw';
$string['notinarray'] = 'Gebruiker heeft geen van deze met komma\'s gescheiden waardes';
$string['notopenyet'] = 'Sorry, deze activiteit is niet beschikbaar tot {$a}';
$string['notstarted'] = 'Nog niet begonnen.';
$string['nouserfound'] = 'Geen gebruiker gevonden:';
$string['nousers'] = 'Geen gebruikers!';
$string['numberrows'] = 'Aantal rijen';
$string['numberrowsdesc'] = 'Elke rij op de presentielijst zal genummerd worden. Het nummer staat aan de linkerkant in dezelfde kolom als de naam.';
$string['numgenerator'] = 'Zet record nummering aan?';
$string['numrec'] = 'Record nummer';
$string['onlyusersfrominstitution'] = 'Je kan alleen gebruikers toevoegen van dit instituut: {$a}';
$string['onwaitinglist'] = 'Je staat op de wachtlijst';
$string['optionannotation'] = 'interne annotatie';
$string['optionbookabletitle'] = '{$a->title} is weer beschikbaar';
$string['optiondate'] = 'Datum';
$string['optiondateend'] = 'Einde';
$string['optiondates'] = 'Meerdaagse sessie';
$string['optiondatesmessage'] = 'Sessie {$a->number}: {$a->date} <br> Van: {$a->starttime} <br> Tot: {$a->endtime}';
$string['optiondatessuccessfullydelete'] = 'Sessie tijd was verwijderd.';
$string['optiondatessuccessfullysaved'] = 'Sessie tijd is bewaard.';
$string['optiondatestart'] = 'Start';
$string['optiondatestime'] = 'Sessietijd';
$string['optionid'] = 'Optie-ID';
$string['optionidentifier'] = 'Unieke identificatie';
$string['optionmenu'] = 'Deze boekingsoptie';
$string['optionsfields'] = 'Velden op de boeking optie overzichtpagina';
$string['optiontemplatename'] = 'Naam sjabloon boekingsoptie';
$string['optiontemplatessettings'] = 'Boekingsopties sjablonen';
$string['optionvisibility'] = 'Zichtbaarheid';
$string['optionvisible'] = 'Zichtbaar voor iedereen (standaard)';
$string['organizatorname'] = 'Naam organisator';
$string['otherbookingaddrule'] = 'Voeg nieuwe regel toe';
$string['otherbookinglimit'] = 'Limiet';
$string['otherbookinglimit_help'] = 'Hoeveel gebruikers je accepteer van de optie. Vul 0 om onbeperkt aantal gebruikers te accepteren.';
$string['otherbookingnumber'] = 'Aantal gebruikers';
$string['otherbookingoptions'] = 'Accepteren van';
$string['otherbookingsuccessfullysaved'] = 'Regel bewaard!';
$string['overridecondition'] = 'Conditie';
$string['overrideoperator:and'] = 'EN';
$string['overrideoperator:or'] = 'OF';
$string['paginationnum'] = 'Aantal records per pagina';
$string['pdflandscape'] = 'Liggend';
$string['pdfportrait'] = 'Staand';
$string['pluginadministration'] = 'Boekingsadministratie';
$string['pluginname'] = 'Boeking';
$string['pollstrftimedate'] = '%Y-%m-%d';
$string['pollurl'] = 'Enquête-URL';
$string['pollurlteachers'] = 'URL lerarenenquête';
$string['pollurlteacherstext'] = 'Bericht om de enquête url te versturen naar de leraars';
$string['pollurlteacherstextmessage'] = 'Neem de enquête alsjeblieft

Enquête url: <a href="{pollurlteachers}" target="_blank">{pollurlteachers}</a>';
$string['pollurlteacherstextsubject'] = 'Vul de enquête in alsjeblieft';
$string['pollurltext'] = 'Bericht voor om de enquête url te versturen naar geboekte gebruikers.';
$string['pollurltextmessage'] = 'Vul alsjeblieft de enquête in

Enquête-url: <a href="{pollurl}" target="_blank">{pollurl}</a>';
$string['pollurltextsubject'] = 'Vul alsjeblieft de enquête in';
$string['potentialsubscribers'] = 'Mogelijke inschrijvers';
$string['presence'] = 'Presentie';
$string['previous'] = 'Vorige';
$string['price'] = 'Prijs';
$string['pricecategory'] = 'Prijscategorie';
$string['pricecurrency'] = 'Munteenheid';
$string['priceformulaadd'] = 'Absolute waarde';
$string['question'] = 'Vraag';
$string['ratings'] = 'Boekingsoptie beoordeling';
$string['reason'] = 'Reden';
$string['recalculateall'] = 'Bereken alle prijzen';
$string['recreategroup'] = 'Herstel de groep en meld deelnemers hiervoor aan in de geselecteerde cursus.';
$string['recurringheader'] = 'Terugkerende opties';
$string['removeafterminutes'] = 'Verwijder activiteitsvoltooing na N minuten';
$string['removeresponses'] = 'Verwijder alle reacties';
$string['removeuseronunenrol'] = 'Verwijder gebruiker van de boeking wanneer deze is afgemeld in de geassocieerde cursus?';
$string['repeatthisbooking'] = 'Herhaal deze optie';
$string['reportfields'] = 'Te downloaden reactie velden (csv, xls-download)';
$string['reportremindermessage'] = '{$a->bookingdetails}';
$string['reservedusers'] = 'Gebruikers met kortetermijnreserveringen';
$string['reset'] = 'Terugzetten';
$string['responses'] = 'Reacties';
$string['responsesfields'] = 'Velden die getoond worden op de  beheer reactie pagina';
$string['responsesto'] = 'Reacties tot {$a}';
$string['resultofcohortorgroupbooking'] = '<p>Dit is het resultaat van je site-groep boeking</p>
<ul>
<li>{$a->sumcohortmembers} gebruikers gevonden in de geselecteerde site-groep</li>
<li>{$a->sumgroupmembers} gebruikers gevonden in de geselecteerde groepen</li>
<li><b>{$a->subscribedusers} gebruikers zijn geboekt voor deze optie</b></li>
</ul>';
$string['rootcategory'] = 'Root';
$string['saturday'] = 'Zaterdag';
$string['saveinstanceastemplate'] = 'Boekingsinstantie toevoegen aan sjabloon';
$string['savenewtagtemplate'] = 'Bewaar';
$string['scgfbookgroupscohorts'] = 'Boek cohort(s) of groep(en)';
$string['scgfcohortheader'] = 'Site-groep abonnement';
$string['scgfgroupheader'] = 'Groepsabonnement';
$string['scgfselectcohorts'] = 'Selecteer site-groep(en)';
$string['scgfselectgroups'] = 'Selecteer groep(en)';
$string['search'] = 'Zoek...';
$string['searchdate'] = 'Datum';
$string['searchname'] = 'Voornaam';
$string['searchsurname'] = 'Achternaam';
$string['searchtag'] = 'Zoek tags';
$string['searchwaitinglist'] = 'Op wachtlijst';
$string['select'] = 'Selectie';
$string['selectanoption'] = 'Selecteer een boekingsoptie';
$string['selectatleastoneuser'] = 'Selecteer alsjeblieft minstens 1 gebruiker!';
$string['selectcategory'] = 'Selecteer bovenliggende categorie';
$string['selectfield'] = 'Drop-down menu';
$string['selectoptionid'] = 'Selecteer alsjeblieft een optie!';
$string['selectoptioninotherbooking'] = 'Optie';
$string['selectpresencestatus'] = 'Kies presentie status';
$string['semester'] = 'Semester';
$string['semesterend'] = 'Laatste dag van het semester';
$string['semesterend_help'] = 'De dag waarop het semester eindigt';
$string['semesteridentifier'] = 'Identificatie';
$string['semestername'] = 'Naam';
$string['semesters'] = 'Semesters';
$string['semesterssaved'] = 'Semesters zijn bewaard';
$string['semesterstart'] = 'Eerste dag van het semester';
$string['semesterstart_help'] = 'De dag waarop het semester start.';
$string['sendmailtobooker'] = 'Inschrijven andere gebruikers: Stuur een mail naar de boekingsmanager in plaats van de geboekte gebruiker.';
$string['sendmailtobooker_help'] = 'Activeer deze optie als je wilt dat de bevestigingen naar de boekingsmanagers gestuurd worden in plaats van de ingeschreven gebruiker. Dit is alleen relevant voor boekingen die gedaan worden op de pagina "Inschrijven andere gebruikers".';
$string['sendpollurltoteachers'] = 'Stuur enquête-URL';
$string['sendreminderemail'] = 'Stuur een herinneringsmail';
$string['sendreminderemailsuccess'] = 'Notificatie e-mail is verstuurd!';
$string['sessions'] = 'Sessie(s)';
$string['showcustomfields'] = 'Andere boekingsoptievelden';
$string['showcustomfields_desc'] = 'Selecteer de andere boekingsoptievelden die getoond moeten worden op de presentielijst.';
$string['showdates'] = 'Toon datums';
$string['showdescription'] = 'Toon beschrijving';
$string['showinapi'] = 'Toon in API?';
$string['showmybookingsonly'] = 'Mijn boekingen';
$string['showviews'] = 'Weergaven om weer te geven in het overzicht met boekingsopties';
$string['signature'] = 'Handtekening';
$string['signinadddatemanually'] = 'Voeg datums handmatig toe';
$string['signinaddemptyrows'] = 'Lege rijen toevoegen';
$string['signincustfields'] = 'Andere profielvelden';
$string['signincustfields_desc'] = 'Selecteer de andere profielvelden die getoond moeten worden op de presentielijst.';
$string['signinextracols'] = 'Toegevoegde kolom';
$string['signinextracols_desc'] = 'Je kan wel tot 3 extra kolommen toevoegen aan de presentielijst. Vul de kolomtitel in of laat het leeg voor géén extra kolom.';
$string['signinhidedate'] = 'Verberg datum';
$string['signinlogo'] = 'Logo tonen op de presentielijst';
$string['signinlogofooter'] = 'Toon logo in de voettekst van de presentielijst';
$string['signinlogoheader'] = 'Logo tonen in de kop van de presentielijst';
$string['signinonesession'] = 'Toon data in de kop';
$string['signinsheetaddress'] = 'Adres:';
$string['signinsheetdate'] = 'Datum(s):';
$string['signinsheetdatetofillin'] = 'Datum:';
$string['signinsheetfields'] = 'Presentielijst velden (PDF)';
$string['signinsheetlocation'] = 'Locatie:';
$string['spaceleft'] = 'ruimte mogelijk';
$string['spacesleft'] = 'ruimtes mogelijk';
$string['starttimenotset'] = 'Begintijd is niet ingesteld';
$string['status'] = 'Status:';
$string['statuschangetext'] = 'Bericht wijziging status';
$string['submitandgoback'] = 'Sla op en ga terug';
$string['subscribersto'] = 'Leraren voor \'{$a}\'';
$string['subscribetocourse'] = 'Meld gebruikers aan in de cursus';
$string['subscribeuser'] = 'Weet je zeker dat je gebruikers wilt aanmelden in de volgende cursus?';
$string['substitutions'] = 'Vervanging(en)';
$string['successfulldeleted'] = 'Categorie is verwijderd!';
$string['sucesfullcompleted'] = 'Activiteit is succesvol voltooid voor gebruikers.';
$string['sucesfullytransfered'] = 'Gebruikers zijn succesvol overgeboekt.';
$string['sunday'] = 'Zondag';
$string['tagdeleted'] = 'Tagtemplate was verwijderd!';
$string['tagsuccessfullysaved'] = 'Tag is bewaard.';
$string['tagtag'] = 'Tag';
$string['tagtemplates'] = 'Tag-sjablonen';
$string['tagtext'] = 'Tekst';
$string['taken'] = 'Bezet';
$string['teacher'] = 'Leraar';
$string['teacherroleid'] = 'Meld de docent aan op de cursus met de rol';
$string['teachers'] = 'Leraren';
$string['teachersforoption'] = 'Leraren';
$string['templatedeleted'] = 'Sjabloon verwijderd!';
$string['terminated'] = 'Beëindigd';
$string['textfield'] = 'Enkele lijn tekstinvoer';
$string['thursday'] = 'Donderdag';
$string['timecreated'] = 'Aanmaakt op tijdstip';
$string['timerestrict'] = 'Beperk de beantwoording van deze periode: gebruik deze functionaliteit niet! Deze zal verwijderd worden. Gebruik alstublieft de instellingen "Beperk toegang" om de boekingssactiviteit voor een bepaalde periode beschikbaar te stellen.';
$string['titleprefix'] = 'Voorvoegsel';
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
$string['tuesday'] = 'Dinsdag';
$string['unlimitedplaces'] = 'Onbeperkt';
$string['updatebooking'] = 'Bewerk deze boekingsoptie';
$string['usedinbooking'] = 'Je kunt deze categorie niet verwijderen, omdat het gebruikt wordt in een boeking!';
$string['usedinbookinginstances'] = 'Het sjabloon wordt gebruikt in de volgende boekingsinstanties';
$string['usercalendarentry'] = 'Je hebt deze  <a href="{$a}">sessie</a> geboekt.';
$string['userdownload'] = 'Download gebruikers';
$string['usergavereason'] = '{$a} gaf de volgende reden om te annuleren:';
$string['userid'] = 'Gebruikers-ID';
$string['userleave'] = 'De gebruiker heeft zelf zijn/haar boeking geannuleerd (geef 0 om uit te schakelen)';
$string['usernameofbookingmanager'] = 'Kies een boekingsbeheerder';
$string['usernameofbookingmanager_help'] = 'Vul hier de gebruikersnaam in van de gebruiker die in het veld "van" getoond moet worden van de bevestigingsmail. Wanneer de "Stuur bevestigings e-mail naar de boekingsmanager" is ingeschakeld, is dit de gebruiker die een kopie ontvangt van de bevestigingsmails.';
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
$string['waitingtextsubject'] = 'Boekingsstatus voor {$a->title} is veranderd';
$string['waitingtextsubjectbookingmanager'] = 'Boekingsstatus voor {$a->title} is veranderd';
$string['waitspaceavailable'] = 'Beschikbare plaatsen op de wachtlijst';
$string['wednesday'] = 'Woensdag';
$string['week'] = 'Week';
$string['whichview'] = 'Standaardweergave voor boekingsopties';
$string['whichviewerror'] = 'Je moet de standaardweergave toevoegen: Weergave om weer te geven in het boekingsopties overzicht.';
$string['withselected'] = 'Met de geselecteerde gebruikers:';
$string['wrongdataallfields'] = 'Vul alsjeblieft alle velden in!';
$string['yes'] = 'Ja';
$string['yourselection'] = 'Jouw selectie';
