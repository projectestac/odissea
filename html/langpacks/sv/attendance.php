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
 * Strings for component 'attendance', language 'sv', version '4.5'.
 *
 * @package     attendance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'F';
$string['Afull'] = 'Frånvarande';
$string['Eacronym'] = 'GF';
$string['Efull'] = 'Giltig frånvaro';
$string['Lacronym'] = 'S';
$string['Lfull'] = 'Sen';
$string['Pacronym'] = 'N';
$string['Pfull'] = 'Närvarande';
$string['absenteereport'] = 'Frånvarorapport';
$string['acronym'] = 'Akronym';
$string['add'] = 'Lägg till';
$string['addedrecip'] = 'Lade till {$a} ny mottagare';
$string['addedrecips'] = 'Lade till {$a} nya mottagare';
$string['addmultiplesessions'] = 'Lägg till multipla sessioner';
$string['addsession'] = 'Lägg till session';
$string['adduser'] = 'Lägg till användare';
$string['addwarning'] = 'Lägg till varning';
$string['all'] = 'Alla';
$string['allcourses'] = 'Alla kurser';
$string['allowupdatestatus'] = 'Tillåt eleverna att uppdatera sin egen närvaro';
$string['allowupdatestatus_desc'] = 'Om det här alternativet är markerat kommer eleverna att kunna uppdatera sin närvaro för en session efter att de redan själva rapporterat sin närvaro.';
$string['allowupdatestatus_help'] = 'Om det här alternativet är markerat kommer eleverna att kunna uppdatera sin närvaro för en session efter att de redan själva rapporterat sin närvaro.';
$string['allpast'] = 'Alla tidigare';
$string['allsessions'] = 'Alla sessioner';
$string['allsessionstotals'] = 'Totalt för valda sessioner';
$string['attendance:addinstance'] = 'Lägg till ny närvaroaktivitet';
$string['attendance:canbelisted'] = 'Visas i deltagarlistan';
$string['attendance:changeattendances'] = 'Ändra närvaro';
$string['attendance:changepreferences'] = 'Ändra inställningar';
$string['attendance:export'] = 'Exportera rapporter';
$string['attendance:import'] = 'Importera sessioner från fil (csv)';
$string['attendance:manageattendances'] = 'Hantera närvaro';
$string['attendance:managetemporaryusers'] = 'Hantera tillfälliga användare';
$string['attendance:manualautomark'] = 'Tillåt manuell initiering av automatisk närvaromarkering';
$string['attendance:takeattendances'] = 'Tar upp närvaro';
$string['attendance:view'] = 'Visa närvaro';
$string['attendance:viewreports'] = 'Visa rapporter';
$string['attendance:viewsummaryreports'] = 'Visa kursrapporter';
$string['attendance:warningemails'] = 'Kan bli prenumerant av e-post med frånvarande användare';
$string['attendance_already_submitted'] = 'Din närvaro har redan registrerats.';
$string['attendance_no_status'] = 'Ingen giltig närvarostatus hittades. Du kanske är för sen för att kunna ange närvarostatus.';
$string['attendancedata'] = 'Närvaroinformation';
$string['attendancefile'] = 'Närvarofil (CSV-format)';
$string['attendancefile_help'] = 'Filen måste vara en CSV-fil med en rubrikrad och fält som identifierar användaren och tidpunkt för då närvaron registrerades, t.ex. (<code>email</code>, <code>scantime</code>) eller (<code>username</code>, <code>time</code>).';
$string['attendancegrade'] = 'Närvarobetyg';
$string['attendancenotset'] = 'Du måste ange din närvaro';
$string['attendancenotstarted'] = 'Registrering av närvaro är inte startad för denna kurs';
$string['attendancepercent'] = 'Närvaroprocent';
$string['attendancereport'] = 'Närvaro';
$string['attendanceslogged'] = 'Loggad närvaro';
$string['attendancestaken'] = 'Registrerad närvaro';
$string['attendancesuccess'] = 'Närvaro registrerad';
$string['attendanceupdated'] = 'Närvaro uppdaterad';
$string['attendanceuserreport'] = 'Närvarorapport';
$string['attforblockdirstillexists'] = 'gamla mod / attforblock katalogen finns kvar - du måste ta bort den här katalogen på servern innan du kör den här uppgraderingen.';
$string['attrecords'] = 'Närvaroregister';
$string['autoassignstatus'] = 'Välj automatiskt högsta tillgängliga status';
$string['autoassignstatus_help'] = 'Om förkryssat kommer studenter automatiskt tilldelas högsta tillgängliga betyg.';
$string['automark'] = 'Automatisk närvaromarkering';
$string['automark_help'] = 'Gör att närvaromarkeringen kan slutföras automatiskt. Om "Ja" kommer studenterna automatiskt att markeras beroende på deras första besök i kursen. Om "Ange som omarkerad vid slutet av sessionen" kommer alla deltagare som inte har markerat sin närvaro att anges till den omarkerade status som valts.';
$string['automarkall'] = 'Ja';
$string['automarkclose'] = 'Ange som omarkerad vid slutet av sessionen';
$string['automarkingcomplete'] = 'Automatisk markering slutförd';
$string['automarkingnotavailableyet'] = 'Den här närvarosessionen använder automatisk närvaromarkering vid sessionens avslut. Den här sessionen är inte avslutad ännu.';
$string['automarkingnotenabled'] = 'Automatisk närvaromarkering är inte aktiverad i den här närvarosessionen';
$string['automarktask'] = 'Kontrollera om det finns närvarosessioner som kräver automatisk närvaromarkering';
$string['automarkuseempty'] = 'Hantering av automatisk markering';
$string['automarkuseempty_desc'] = 'Om markerad, kommer statusobjekt som har en tom / ej angiven "tillgänglig för"-inställning att tillåtas vid automatisk markering';
$string['autorecorded'] = 'autoregistrerad';
$string['availability'] = 'Tillgänglighet för egen närvarorapportering';
$string['availability_help'] = 'Begränsa tillgängligheten för den här statusen. <br> Om alternativet "Begränsad tid" är valt anger du antalet minuter som denna status är tillgänglig efter att sessionen startat. Detta gäller när eleverna markerar sin egen närvaro.';
$string['availabilityalways'] = 'Alltid';
$string['availabilitylimitedtime'] = 'Begränsad tid';
$string['availabilityno'] = 'Nej';
$string['availablebeforesession'] = 'Tillgängligt före sessionsstart';
$string['availablebeforesession_help'] = 'När deltagarna markerar sin egen närvaro, låt denna status väljas innan sessionen börjar.';
$string['averageattendance'] = 'Genomsnittlig närvaro';
$string['averageattendancegraded'] = 'Genomsnittlig närvaro';
$string['backtoparticipants'] = 'Tillbaka till deltagarlistan';
$string['below'] = 'Under {$a}%';
$string['calclose'] = 'Stäng';
$string['calendarevent'] = 'Skapa kalenderhändelse för session';
$string['calendarevent_help'] = 'Om aktiverad kommer en kalenderhändelse att skapas för den här sessionen. Om den är inaktiverad kommer eventuell befintlig kalenderhändelse för den här sessionen att tas bort.';
$string['caleventcreated'] = 'Kalenderhändelse för session skapades';
$string['caleventdeleted'] = 'Kalenderhändelse för sessionen togs bort';
$string['calmonths'] = 'Januari,Februari,Mars,April,Maj,Juni,Juli,Augusti,September,Oktober,November,December';
$string['calshow'] = 'Välj datum';
$string['calweekdays'] = 'Sö,Må,Ti,On,To,Fr,Lö';
$string['cannottakeforgroup'] = 'Du kan inte ta närvaro för grupp "{$a}"';
$string['cannottakethisgroup'] = 'Du är inte medlem i kursgruppen den här närvarosessionen är relaterad till. Din närvaro har inte registrerats.';
$string['cantaddstatus'] = 'Du måste ange akronym och beskrivning.';
$string['canthidestatus'] = 'Du kan inte dölja denna status eftersom den redan används i den här närvaroaktiviteten';
$string['categoryreport'] = 'Kurskategorirapport';
$string['changeattendance'] = 'Ändra närvaro';
$string['changeduration'] = 'Ändra varaktighet';
$string['changesession'] = 'Ändra session';
$string['checkweekdays'] = 'Välj veckodagar som faller inom det valda datumintervallet.';
$string['closed'] = 'Den här sessionen är för närvarande inte tillgänglig för egen närvaromarkering';
$string['column'] = 'kolumn';
$string['columnmap'] = 'Kolumnmappning';
$string['columnmap_help'] = 'För varje fält väljer du motsvarande kolumn i CSV-filen.';
$string['columns'] = 'kolumner';
$string['commonsession'] = 'Alla studenter';
$string['commonsessions'] = 'Alla studenter';
$string['confirm'] = 'Bekräfta';
$string['confirmcolumnmappings'] = 'Bekräfta kolumnmappning';
$string['confirmdeletehiddensessions'] = 'Är du säker på att du vill ta bort {$a->count} sessioner som är schemalagda till innan kursstart ({$a->date})?';
$string['confirmdeleteuser'] = 'Är du säker på att du vill ta bort användare \'{$a->fullname}\' ({$a->email})?<br/>All närvaroinformation kommer tas bort permanent.';
$string['copyfrom'] = 'Kopiera närvarodata från';
$string['countofselected'] = 'Antal valda';
$string['course'] = 'Kurs';
$string['coursemessage'] = 'Meddela kursanvändare';
$string['courseshortname'] = 'Kortnamn';
$string['coursesummary'] = 'Kursrapport';
$string['createmultiplesessions'] = 'Skapa flera sessioner';
$string['createmultiplesessions_help'] = 'Med den här funktionen kan du skapa flera sessioner i ett enkelt steg. Sessionerna börjar på datumet för bassessionen och fortsätter tills \'upprepa till\' datum.

* <strong>Upprepa på</strong>: Välj de dagar i veckan då din klass kommer att träffas (till exempel måndag/onsdag/fredag).
* <strong>Upprepa varje</strong>: Detta anger frekvensen. Om din klass kommer att träffas varje vecka, välj 1; om det kommer att träffas varannan vecka, välj 2; varje 3: e vecka, välj 3, etc.
* <strong>Upprepa till</strong>: Välj sista dagen för klassen (den sista dagen du vill ta närvaro).';
$string['createonesession'] = 'Skapa en session för kursen';
$string['csvdelimiter'] = 'CSV-avgränsare';
$string['currentlyselectedusers'] = 'Valda användare';
$string['customexportfields'] = 'Exportera anpassade profilfält';
$string['customexportfields_help'] = 'Ytterligare anpassade användarfält att visa exportrapporten.';
$string['customfields'] = 'Anpassade sessionsfält';
$string['date'] = 'Datum';
$string['days'] = 'Dagar';
$string['defaultdisplaymode'] = 'Standardinställning för visningsläge';
$string['defaults'] = 'Standardinställningar';
$string['defaultsessionsettings'] = 'Standardinställningar för session';
$string['defaultsessionsettings_help'] = 'Dessa inställningar anger standardinställningarna för alla nya sessioner';
$string['defaultsettings'] = 'Standardinställningar för närvaro';
$string['defaultsettings_help'] = 'De här inställningarna anger standard för nya närvaroaktiviteter';
$string['defaultstatus'] = 'Standardstatus';
$string['defaultsubnet'] = 'Standardnätverk';
$string['defaultsubnet_help'] = 'Närvaroregistrering kan begränsas till specifika subnät genom att ange en kommaseparerad lista med partiella eller fullständiga IP-adresser. De värden som anges i fältet är standardvärden som kommer att användas då nya sessioner skapas.';
$string['defaultview'] = 'Standardvy efter inloggning';
$string['defaultview_desc'] = 'Detta är standardvyn som visas för lärare efter första inloggningen.';
$string['defaultwarnings'] = 'Standardvarningar';
$string['defaultwarningsettings'] = 'Standardinställningar för varningar';
$string['defaultwarningsettings_help'] = 'Dessa inställningar anger standardinställningarna för alla nya varningar';
$string['delete'] = 'Ta bort';
$string['deletecheckfull'] = 'Är du helt säker på att du vill ta bort {$a} helt, inklusive all användardata?';
$string['deletedgroup'] = 'Gruppen som är associerad med denna session har tagits bort';
$string['deletehiddensessions'] = 'Ta bort alla dolda sessioner';
$string['deletelogs'] = 'Ta bort närvarodata';
$string['deleteselected'] = 'Ta bort vald';
$string['deletesession'] = 'Ta bort session';
$string['deletesessions'] = 'Ta bort alla sessioner';
$string['deleteuser'] = 'Ta bort användare';
$string['deletewarningconfirm'] = 'Är du säker på att du vill ta bort denna varning?';
$string['deletingsession'] = 'Tar bort session i kursen';
$string['deletingstatus'] = 'Tar bort status för kursen';
$string['description'] = 'Beskrivning';
$string['display'] = 'Skärm';
$string['displaymode'] = 'Skärmläge';
$string['donotusepaging'] = 'Använd inte paginering';
$string['downloadexcel'] = 'Ladda ned i Excel-format';
$string['downloadooo'] = 'Ladda ned i OpenOffice-format';
$string['downloadtext'] = 'Ladda ned som text';
$string['duration'] = 'Varaktighet';
$string['editsession'] = 'Redigera session';
$string['edituser'] = 'Redigera användare';
$string['emailcontent'] = 'Innehåll';
$string['emailcontent_default'] = 'Hej %userfirstname%,
din närvaro i %coursename% har sjunkit under %warningpercent% och är just nu %percent% - hoppas allt är bra med dig!

För att få ut det mesta möjliga av din kurs borde du öka din närvaro. Hör gärna av dig om du behöver support.';
$string['emailcontent_help'] = 'När en varning skickas till en deltagare hämtar det e-postinnehållet från detta fälte. Följande platshållare kan användas:

<ul>
<li>%coursename%</li>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%userid%</li>
<li>%warningpercent%</li>
<li>%attendancename%</li>
<li>%cmid%</li>
<li>%numtakensessions%</li>
<li>%points%</li>
<li>%maxpoints%</li>
<li>%percent%</li>
</ul>';
$string['emailsubject'] = 'Rubrik';
$string['emailsubject_default'] = 'Närvarovarning';
$string['emailsubject_help'] = 'När en varning skickas till en student hämtar det ämnesrubriken från detta fält.';
$string['emailuser'] = 'Meddela användare';
$string['emailuser_help'] = 'Om markerat kommer en varning skickas till studenten.';
$string['emptyacronym'] = 'Tomma akronymer är inte tillåtna. Statusposten uppdaterades inte.';
$string['emptydescription'] = 'Tomma beskrivningar är inte tillåtna. Statusposten uppdaterades inte.';
$string['enablecalendar'] = 'Skapa kalenderhändelser';
$string['enablecalendar_desc'] = 'Om det här alternativet är aktiverat skapas en kalenderhändelse för varje närvarosession. När du har ändrat den här inställningen bör du köra återställ kalender-rapporten.';
$string['enablewarnings'] = 'Aktivera varningar';
$string['enablewarnings_desc'] = 'Detta gör att en varningsuppsättning kan definieras för en närvaro och att e-postnotiser skickas till användaren om närvaron sjunker under den konfigurerade tröskeln.<br/><strong>VARNING: Detta är en ny funktion och den har inte testats utförligt. Använd på egen risk och återkoppla i moodle forum om du tycker att det fungerar bra.</strong>';
$string['encoding'] = 'Teckenkodning';
$string['encoding_help'] = 'Detta avser streckkodsformatet som används på studenternas id-kort. Vanliga typer av streckkodningsscheman inkluderar Code-39, Code-128 och UPC-A.';
$string['endofperiod'] = 'Slutet av perioden';
$string['endtime'] = 'Sluttid för session';
$string['enrolmentend'] = 'Registreringen slutar {$a}';
$string['enrolmentstart'] = 'Registreringen börjar {$a}';
$string['enrolmentsuspended'] = 'Registrering pausad';
$string['enterpassword'] = 'Ange lösenord';
$string['error:coursehasnoattendance'] = 'Det finns inga närvaroaktiviteter i kursen med kortnamnet \'{$a}\'.';
$string['error:coursenotfound'] = 'Kan inte hitta kursen {$a}.';
$string['error:qrcode'] = 'För att kunna använda QR-kod måste alternativet <strong>Tillåt att studenterna själva registrerar sin närvaro</strong> vara markerat! Hoppar över.';
$string['error:sessioncourseinvalid'] = 'Ogiltig sessionskurs! Hoppar över.';
$string['error:sessiondateinvalid'] = 'Ogiltigt sessionsdatum! Hoppar över.';
$string['error:sessionendinvalid'] = 'Ogiltig sluttid för session! Hoppar över.';
$string['error:sessionstartinvalid'] = 'Ogiltig starttid för session! Hoppar över.';
$string['error:statusnotfound'] = 'Användare: {$a->extuser} har ett statusvärde som inte kunde hittas: {$a->status}';
$string['error:timenotreadable'] = 'Användare: {$a->extuser} har en skanningstidpunkt som inte kunde konverteras av <code>strtotime</code>: {$a->scantime}';
$string['error:userduplicate'] = 'Användaren {$a} hittades två gånger i importen. Vänligen inkludera endast en post per användare.';
$string['error:usernotfound'] = 'Det gick inte att hitta användare med {$a->userfield} satt till {$a->extuser}';
$string['errorgroupsnotselected'] = 'Välj en eller flera grupper';
$string['errorinaddingsession'] = 'Ett fel inträffade då sessionen skulle läggas till';
$string['erroringeneratingsessions'] = 'Ett fel inträffade då sessionerna skulle skapas';
$string['eventdurationupdated'] = 'Sessionens varaktighet uppdaterad';
$string['eventreportviewed'] = 'Närvarorapport visad';
$string['eventscreated'] = 'Kalenderhändelser skapade';
$string['eventsdeleted'] = 'Kalenderhändelser borttagna';
$string['eventsessionadded'] = 'Session tillagd';
$string['eventsessiondeleted'] = 'Session borttagen';
$string['eventsessionipshared'] = 'IP-adresserna står i konflikt med varandra för egen närvaroregistrering.';
$string['eventsessionsimported'] = 'Sessioner importerade';
$string['eventsessionupdated'] = 'Session uppdaterad';
$string['eventstatusadded'] = 'Status tillagd';
$string['eventstatusupdated'] = 'Status uppdaterad';
$string['eventstudentattendancesessionsupdated'] = 'Sessionsrapport uppdaterad';
$string['eventstudentattendancesessionsviewed'] = 'Sessionsrapport visad';
$string['eventtaken'] = 'Närvaro registrerad';
$string['eventtakenbystudent'] = 'Närvaro registrerad av student';
$string['export'] = 'Exportera';
$string['extrarestrictions'] = 'Ytterligare begränsningar';
$string['formattexttype'] = 'Formatering';
$string['from'] = 'från:';
$string['gradebookexplanation'] = 'Betyg i betygsbok';
$string['gradebookexplanation_help'] = 'Modulen Närvaro visar ditt aktuella närvarobetyg baserat på antalet poäng du har tjänat in hittills och antalet maxpoäng som kunde ha tjänats in hittills. Den omfattar inte framtida klassperioder (sessioner). I betygsboken baseras ditt närvarobetyg på din aktuella närvaroprocent och antalet poäng som kan tjänas in under hela kursens varaktighet, inklusive framtida klassperioder (sessioner). Dina närvarobetyg i närvaromodulen visas kanske inte samma antal poäng som i betygsboken, men, procentandelen är densamma.

Om du till exempel har tjänat 8 av 10 poäng hittills (80 % närvaro) och närvaron för hela kursen är värd 50 poäng, visas i närvaromodulen 8/10 och i betygsboken 40/50. Du har ännu inte tjänat 40 poäng men 40 är motsvarande poängvärde som din nuvarande närvaroprocent på 80%. Det poängvärde du har tjänat in i närvaromodulen kan aldrig minska, eftersom det endast baseras på närvaro hittills; dock kan närvaropoängvärdet som visas i betygsboken öka eller minska beroende på din framtida närvaro, eftersom det baseras på närvaron i hela kursen.';
$string['graded'] = 'Betygsatta sessioner';
$string['gridcolumns'] = 'Tabellkolumner';
$string['group'] = 'Grupp';
$string['groups'] = 'Grupper';
$string['groupsession'] = 'Studentgrupp';
$string['groupsessionsby'] = 'Gruppera sessioner efter';
$string['hiddensessions'] = 'Dolda sessioner';
$string['hiddensessions_help'] = 'Sessioner döljs om deras schemalagda datum infaller före kursens startdatum.

Du kan använda den här funktionen för att dölja äldre sessioner i stället för att ta bort dem. Endast synliga sessioner kommer att visas i Betygsboken.';
$string['hiddensessionsdeleted'] = 'Alla dolda sessioner borttagna';
$string['hideextrauserdetails'] = 'Dölj ytterligare användardetaljer';
$string['hidensessiondetails'] = 'Dölj sessionsdetaljer';
$string['identifyby'] = 'Identifiera student via';
$string['import'] = 'Importera';
$string['importfile'] = 'Importera fil';
$string['importfile_help'] = 'Importera fil';
$string['importsessions'] = 'Importera sessioner';
$string['importstatus'] = 'Statusfält';
$string['importstatus_help'] = 'Detta gör att ett statusvärde kan ingå i importen - t.ex. värden såsom N, S eller F';
$string['includeabsentee'] = 'Inkludera session när frånvarorapporten skapas';
$string['includeabsentee_help'] = 'Om markerad kommer den här sessionen inkluderas i frånvarorapporten.';
$string['includeall'] = 'Välj alla sessioner';
$string['includedescription'] = 'Inkludera sessionsbeskrivning';
$string['includenottaken'] = 'Inkludera sessioner med frånvaro';
$string['includeqrcode'] = 'Inkludera QR-kod';
$string['includeremarks'] = 'Inkludera kommentarer';
$string['incorrectpassword'] = 'Du har angett ett felaktikt lösenord och din närvaro har inte sparats. V.g. ange rätt det korrekta lösenordet.';
$string['incorrectpasswordshort'] = 'Fel lösenord, närvaro inte sparad.';
$string['indetail'] = 'I detalj...';
$string['indicator:cognitivedepth'] = 'Närvaro kognitiv';
$string['indicator:cognitivedepth_help'] = 'Denna indikator baseras på det kognitiva djup som uppnåtts av studenten i en Närvaroaktivitet.';
$string['indicator:cognitivedepthdef'] = 'Närvaro kognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Deltagaren har uppnått denna procentandel av det kognitiva engagemanget som erbjuds av Närvaromodulen under detta analysintervall (Nivåer = Ingen visning, Visning)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Närvaro social';
$string['indicator:socialbreadth_help'] = 'Denna indikator baseras på den sociala bredd som uppnåtts av studenten i en Närvaroaktivitet.';
$string['indicator:socialbreadthdef'] = 'Närvaro social';
$string['indicator:socialbreadthdef_help'] = 'Deltagaren har nått denna procentandel av det sociala engagemanget som erbjuds av Närvaroaktiviteterna under detta analysintervall (Nivåer = Inget deltagande, Deltagaren ensamt)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidaction'] = 'Du måste välja åtgärd';
$string['invalidemails'] = 'Du måste ange adresser till befintliga användarkonton. Kunde inte hitta: {$a}';
$string['invalidimportfile'] = 'Ogiltigt filformat.';
$string['invalidsessionenddate'] = 'Datumet kan inte inträffa tidigare än sessionsdatumet';
$string['invalidsessionendtime'] = 'Sluttiden måste infalla efter starttiden';
$string['invalidstatus'] = 'Du har valt en ogiltig status. Vänligen försök igen.';
$string['iptimemissing'] = 'Ogiltiga minuter att publicera';
$string['jumpto'] = 'Hoppa till';
$string['keepsearching'] = 'Fortsätt söka';
$string['lasttaken'] = 'Senaste närvaroregistrering';
$string['manualtriggerauto'] = 'Initiera automatisk närvaromarkering manuellt';
$string['marksessionimportcsvhelp'] = 'Med det här formuläret kan du ladda upp en csv-fil som innehåller en användaridentifierare och en status - statusfältet kan vara status-akronymen eller den tid då närvaro spelades in för den användaren. Om ett tidsvärde är passerat då det kommer att försöka tilldela statusvärdet med högsta tillgängliga betyg vid den tidpunkten.';
$string['maxpossible'] = 'Högsta möjliga';
$string['maxpossible_help'] = 'Visar poängen varje användare kan uppnå om de får de maximala poängen i varje session som ännu inte tagits (tidigare och framtida):
    <ul>
    <li><strong>Poäng</strong>: den maximala poängen varje användare kan uppnå för alla sessioner.</li>
    <li><strong>Procent</strong>: maximal procentuell andel varje användare kan uppnå för alla sessioner.</li>
    </ul>';
$string['maxpossiblepercentage'] = 'Högsta procentsats';
$string['maxpossiblepoints'] = 'Maxpoäng';
$string['maxwarn'] = 'Maximalt antal e-postvarningar';
$string['maxwarn_help'] = 'Det maximala antalet gånger som en varning ska skickas (endast en varning per session skickas)';
$string['mergeuser'] = 'Slå ihop användare';
$string['messagedselecteduserfailed'] = 'Det gick inte att skicka meddelande till en eller flera användare. Aktivera debug-läge för att få ytterligare information om detta fel.';
$string['mobilesessionfrom'] = 'Visa inte sessioner äldre än';
$string['mobilesessionfrom_help'] = 'Tillåter att listan över sessioner begränsas vid markering i appen - visar bara sessioner som startat sedan det här värdet';
$string['mobilesessionto'] = 'Visa kommande sessioner';
$string['mobilesessionto_help'] = 'Tillåter att listan över sessioner begränsas till att endast visa ett litet antal framtida sessioner.';
$string['mobilesettings'] = 'Inställningar för mobilapp';
$string['mobilesettings_help'] = 'Dessa inställningar styr Moodles mobila app-beteende';
$string['modulename'] = 'Närvaro';
$string['modulename_help'] = 'Närvaroaktivitetsmodulen gör det möjligt för en lärare att ta upp närvaro under en lektion och eleverna att se sin egen närvaro.

Läraren kan skapa flera sessioner och kan markera närvarostatusen som "Närvarande", "Frånvarande", "Sen" eller "Ursäktad" eller ändra statusarna så att de passar deras behov.

Rapporter finns tillgängliga för hela klassen eller enskilda elever.';
$string['modulenameplural'] = 'Närvaro';
$string['months'] = 'Månader';
$string['moreattendance'] = 'Närvaro registrerad för sidan';
$string['moveleft'] = 'Flytta vänster';
$string['moveright'] = 'Flytta höger';
$string['multisessionexpanded'] = 'Flera sessioner visas expanderade';
$string['multisessionexpanded_desc'] = 'Visa som standard "Flera sessioner"-inställningarna som expanderade när du skapar nya sessioner.';
$string['mustselectusers'] = 'Måste välja användare att exportera';
$string['name'] = 'Namn';
$string['newdate'] = 'Nytt datum';
$string['newduration'] = 'Ny varaktighet';
$string['newstatusset'] = 'Ny statusuppsättning';
$string['noabsentstatusset'] = 'Statusuppsättningen som används har ingen status som kan användas när den inte är markerad.';
$string['noattendanceusers'] = 'Det är inte möjligt att exportera några data eftersom det inte finns några studenter registrerade på kursen.';
$string['noattforuser'] = 'Det finns inga närvaroregistreringar för användaren';
$string['noautomark'] = 'Inaktiverad';
$string['nocapabilitytotakethisattendance'] = 'Du försökte ändra närvaron för en session med cmid: {$a}, som du inte har behörighet att ändra.';
$string['nodescription'] = 'Standardsession';
$string['noeventstoreset'] = 'Det finns inga kalenderhändelser som kräver uppdatering.';
$string['nogroups'] = 'Den här aktiviteten har ställts in för att använda grupper, men det finns inga grupper i kursen.';
$string['noguest'] = 'Gäster kan inte se närvaro';
$string['noofdaysabsent'] = 'Antal frånvarodagar';
$string['noofdaysexcused'] = 'Antal dagar med giltig frånvaro';
$string['noofdayslate'] = 'Antal dagar försenad';
$string['noofdayspresent'] = 'Antal närvarodagar';
$string['nosessiondayselected'] = 'Ingen dag vald för sessionen';
$string['nosessionexists'] = 'Det finns inga sessioner för denna kurs';
$string['nosessionsselected'] = 'Inga sessioner valda';
$string['notfound'] = 'Hittade ingen närvaroaktivitet i denna kurs!';
$string['notifytask'] = 'Skicka varningar till användare';
$string['notmember'] = 'inte&nbsp;medlem';
$string['notset'] = 'ej angiven';
$string['nounmarkedstatusset'] = 'Ingen omarkerad status har konfigurerats för den här sessionen (id:{$a->sessionid}). Uppdatera <a href="{$a->url}">Statusuppsättningen</a> för att åtgärda detta.';
$string['noupgradefromthisversion'] = 'Närvaromodulen kan inte uppgradera från den version av <em>attforblock</em> du har installerat. Vänligen ta bort <em>attforblock</em> eller uppgradera den till den senaste versionen innan du installerar den nya närvaromodulen.';
$string['numsessions'] = 'Antal sessioner';
$string['numsessionstaken'] = 'Antal närvarosessioner';
$string['olddate'] = 'Gammalt datum';
$string['onactivitycompletion'] = 'Vid slutförande av aktivitet';
$string['onlyselectedusers'] = 'Exportera specifika användare';
$string['overallsessions'] = 'För alla sessioner';
$string['overallsessions_help'] = 'Visa statistik för sessioner där närvaro inte registrerats (historiska och framtida):
    <ul>
    <li><strong>Sessioner</strong>: totalt antal sessioner.</li>
    <li><strong>Poäng</strong>: poäng för de gjorda närvaroregistreringarna.</li>
    <li><strong>Procentandel</strong>: procentandel poäng för gjorda närvaroregistreringar relativt det maximala antalet poäng för alla sessioner.</li>
    </ul>';
$string['oversessionstaken'] = 'För alla sessioner med närvaro';
$string['oversessionstaken_help'] = 'Visa statistik för sessioner där närvaro registrerats:
    <ul>
    <li><strong>Sessioner</strong>: antal redan gjorda närvaroregistreringar.</li>
    <li><strong>Poäng</strong>: poäng för de gjorda närvaroregistreringarna.</li>
    <li><strong>Procentandel</strong>: procentandel poäng för gjorda närvaroregistreringar relativt det maximala antalet poäng för alla sessioner.</li>
    </ul>';
$string['pageof'] = 'Sida {$a->page} av {$a->numpages}';
$string['participant'] = 'Deltagare';
$string['password'] = 'Lösenord';
$string['passwordgrp'] = 'Studentlösenord';
$string['passwordgrp_help'] = 'Om ifyllt måste deltagarna ange det här lösenordet innan de kan registrera sin egen närvarostatus i sessionen. Om fältet lämnas tomt krävs inget lösenord.';
$string['passwordheader'] = 'Använd nedanstående lösenord för att registrera din närvaro';
$string['passwordrequired'] = 'Du måste ange ett lösenord innan du kan lämna in din närvaro';
$string['percentage'] = 'Procentandel';
$string['percentageallsessions'] = 'Procentandel för alla sessioner';
$string['percentagesessionscompleted'] = 'Procentandel sessioner med närvaro';
$string['pluginadministration'] = 'Administrera närvaro';
$string['pluginname'] = 'Närvaro';
$string['points'] = 'Poäng';
$string['pointsallsessions'] = 'Poäng för alla sessioner';
$string['pointssessionscompleted'] = 'Poäng sessioner med närvaro';
$string['preferences_desc'] = 'Ändringar i statusuppsättningar kommer att påverka befintliga närvarosessioner och kan påverka bedömningar.';
$string['preventsharederror'] = 'Möjligheten till egen närvaroregistrering har inaktiverats för en session eftersom den här enheten verkar ha använts för att registrera närvaro för en annan deltagare.';
$string['preventsharedip'] = 'Förhindra att studenter använder samma IP-adress';
$string['preventsharedip_help'] = 'Förhindrar studenter från att använda samma enhet (identifierad via IP-adressen) för att registrera närvaro åt andra studenter.';
$string['preventsharediptime'] = 'Tid för att tillåta återanvändning av IP-adress (minuter)';
$string['preventsharediptime_help'] = 'Tillåt att en IP-adress återanvänds för att registrera närvaro i den här sessionen efter att den här tiden har förflutit.';
$string['preview'] = 'Förhandsgranska fil';
$string['previewhtml'] = 'Förhandsgranska HTML';
$string['priorto'] = 'Sessionens startdatum infaller före kursens startdatum ({$a}). Detta innebär att sessionen kommer vara dold (ej åtkomlig). Du kan när som helst ändra kursens startdatum (se kursinställningar) för att få tillgång till tidigare sessioner.<br><br>Vänligen ändra sessionens startdatum eller klicka återigen på "Lägg till" för att bekräfta befintligt sessionsdatum.';
$string['privacy:metadata:attendancelog'] = 'Ligg över närvaroregistreringar.';
$string['privacy:metadata:attendancesessions'] = 'Sessioner för vilka närvaro kommer registreras.';
$string['privacy:metadata:attendancewarningdone'] = 'Logg över varningar som skickas till användare gällande deras närvaro.';
$string['privacy:metadata:duration'] = 'Sessionsvaraktighet i sekunder';
$string['privacy:metadata:groupid'] = 'Grupp-ID associerat med sessionen.';
$string['privacy:metadata:ipaddress'] = 'Den IP-adress som användes vid närvaroregistreringen.';
$string['privacy:metadata:lasttaken'] = 'Tidsstämpel för när sessionsnärvaro senast registrerades.';
$string['privacy:metadata:lasttakenby'] = 'Användar-ID för den senaste användaren som registrerade närvaro i den här sessionen';
$string['privacy:metadata:notifyid'] = 'ID för närvarosession varningen är associerad med.';
$string['privacy:metadata:remarks'] = 'Kommentarer för användarens närvaro.';
$string['privacy:metadata:sessdate'] = 'Tidstämpel för när sessionen börjar.';
$string['privacy:metadata:sessionid'] = 'ID för närvarosession.';
$string['privacy:metadata:statusid'] = 'ID för studentens närvarostatus.';
$string['privacy:metadata:statusset'] = 'Statusuppsättning som status-ID:t hör till.';
$string['privacy:metadata:studentid'] = 'ID för deltagare som får närvaron registrerad.';
$string['privacy:metadata:takenby'] = 'Användar-ID för den användare som registrerade närvaro för deltagaren.';
$string['privacy:metadata:timemodified'] = 'Tidsstämpel för när sessionen senast ändrades';
$string['privacy:metadata:timesent'] = 'Tidsstämpel när varning skickades.';
$string['privacy:metadata:timetaken'] = 'Tidsstämpel för när närvaro registrerades för studenten.';
$string['privacy:metadata:userid'] = 'ID för användaren att skicka varning till.';
$string['processingfile'] = 'Bearbetar fil';
$string['qr_cookie_error'] = 'QR-session har löpt ut.';
$string['qr_pass_wrong'] = 'QR-lösenordet är fel eller så har det förfallit.';
$string['qrcode'] = 'QR-kod';
$string['qrcodeandpasswordheader'] = 'Använd nedanstående QR-kod eller lösenord för att registrera din närvaro';
$string['qrcodeheader'] = 'Skanna QR-koden nedan för att registrera din närvaro';
$string['qrcodevalidafter'] = 'sekunder';
$string['qrcodevalidbefore'] = 'Giltighetstid QR-kod:';
$string['randompassword'] = 'Slumpmässigt lösenord';
$string['remark'] = 'Kommentar för: {$a}';
$string['remarks'] = 'Kommentarer';
$string['repeatasfollows'] = 'Upprepa ovanstående session enligt följande';
$string['repeatevery'] = 'Upprepa varje';
$string['repeaton'] = 'Upprepa på';
$string['repeatuntil'] = 'Upprepa till';
$string['report'] = 'Rapport';
$string['reportsessiondate'] = 'Sessionsdatum';
$string['reportsessionduration'] = 'Sessionslängd';
$string['reportsessionlasttaken'] = 'Tidpunkt för senaste session (lärare)';
$string['required'] = 'Obligatoriskt*';
$string['requiredentries'] = 'Tillfälliga poster skriver över deltagarnärvaro-poster';
$string['requiredentry'] = 'Hjälpguide för sammanslagning av tillfälliga användare';
$string['requiredentry_help'] = '<p align="center"><b>Närvaro</b></p>
<p align="left"><strong>Slå ihop konton</strong></p>
<p align="left">
<table border="2" cellpadding="4">
<tr>
<th>Moodleanvändare</th>
<th>Tillfällig användare</th>
<th>Åtgärd</th>
</tr>
<tr>
<td>Närvaroinformation</td>
<td>Närvaroinformation</td>
<td>Tillfällig användare åsidosätter Moodleanvändare</td>
</tr>
<tr>
<td>Ingen närvaroinformation</td>
<td>Närvaroinformation</td>
<td>Närvaroinformation för den tillfällige användaren kommer att föras över till Moodleanvändaren</td>
</tr>
<tr>
<td>Närvaroinformation</td>
<td>Ingen närvaroinformation</td>
<td>Den tillfällige användaren kommer tas bort</td>
</tr>
<tr>
<td>Ingen närvaroinformation</td>
<td>Ingen närvaroinformation/td>
<td>Den tillfällige användaren tas bort</td>
</tr>
</table>

</p>
<p align="left"><strong>I samtliga fall kommer den tillfällige användaren tas bort efter sammanslagningsåtgärden</strong></p>';
$string['requiresubnet'] = 'Kräv nätverksadress';
$string['requiresubnet_help'] = 'Närvaroregistreringen kan begränsas till specifika subnät genom att ange en kommaseparerad lista med delvisa eller fullständiga IP-adresser.';
$string['resetcaledarcreate'] = 'Kalenderhändelser har aktiverats men ett antal befintliga sessioner har inga händelser. Vill du skapa kalenderhändelser för alla befintliga sessioner?';
$string['resetcaledardelete'] = 'Kalenderhändelser har inaktiverats men ett antal befintliga sessioner har händelser som bör tas bort. Vill du ta bort alla befintliga händelser?';
$string['resetcalendar'] = 'Återställ kalender';
$string['resetdescription'] = 'Kom ihåg att borttagning av närvarodata kommer att ta bort information ur databasen. Enklast är att bara dölja äldre sessioner efter att ha ändrat kursens startdatum!';
$string['resetstatuses'] = 'Återställ statusar till standard';
$string['restoredefaults'] = 'Återställ till standard';
$string['resultsperpage'] = 'Resultat per sida';
$string['resultsperpage_desc'] = 'Antal studenter som visas per sida';
$string['rotateqrcode'] = 'Byt QR-kod';
$string['rotateqrcode_cleartemppass_task'] = 'Aktivitet för att rensa tillfälliga lösenord genererade av QR-kodsfunktionen.';
$string['rotateqrcodeexpirymargin'] = 'Marginal vid QR-kod och lösenordsbyte';
$string['rotateqrcodeexpirymargin_desc'] = 'Anger giltighetsmarginalen för användning av det föregående lösenordet efter att det nya genererats.';
$string['rotateqrcodeinterval'] = 'Intervall för generering av QR-kod och lösenord (i sekunder)';
$string['rotateqrcodeinterval_desc'] = 'Intervallet avgör hur ofta en ny QR-kod och lösenord ska genereras.';
$string['save'] = 'Spara närvaro';
$string['saveandshownext'] = 'Spara och visa nästa sida';
$string['scantime'] = 'Avläsningstidpunkt';
$string['scantime_help'] = 'Detta gör att en tidsstämpel kan inkluderas i importfilen - den kommer att försöka konvertera tidsstämpeln som skickas med hjälp av PHP strtotime-funktionen och sedan använda närvarostatusinställningar för att bestämma vilken status som ska anges för användaren';
$string['search:activity'] = 'Närvaro - aktivitetsinformation';
$string['selectactivity'] = 'Välj aktivitet';
$string['session'] = 'Session';
$string['session_help'] = 'Session';
$string['sessionadded'] = 'Sessionen har lagts till';
$string['sessionalreadyexists'] = 'Session finns redan för det här datumet';
$string['sessiondate'] = 'Datum';
$string['sessiondays'] = 'Sessionsdagar';
$string['sessiondeleted'] = 'Session borttagen';
$string['sessiondescription'] = 'Beskrivning';
$string['sessionduplicate'] = 'Det finns en dubblettsession för kursen: {$a->course} i närvaron: {$a->activity}, {$a->date}';
$string['sessionexist'] = 'Sessionen har inte lagts till (finns redan)!';
$string['sessiongenerated'] = 'En session har lagts till';
$string['sessions'] = 'Sessioner';
$string['sessionsallcourses'] = 'Alla kurser';
$string['sessionsbyactivity'] = 'Närvaroinstans';
$string['sessionsbycourse'] = 'Kurs';
$string['sessionsbydate'] = 'Vecka';
$string['sessionscompleted'] = 'Sessioner med närvaro';
$string['sessionscurrentcourses'] = 'Nuvarande kurser';
$string['sessionsgenerated'] = '{$a} sessioner har genererats';
$string['sessionsids'] = 'ID för sessioner:';
$string['sessionsnotfound'] = 'Det finns inga sessioner i det valda tidsspannet';
$string['sessionstartdate'] = 'Startdatum';
$string['sessionstotal'] = 'Totalt antal sessioner';
$string['sessionsupdated'] = 'Sessioner uppdaterade';
$string['sessiontype'] = 'Typ';
$string['sessiontype_help'] = 'Du kan lägga till sessioner för alla deltagare eller för en grupp deltagare. Möjligheten att lägga till olika typer beror på aktivitetsgruppsläget.

* I gruppläge "Inga grupper" kan du bara lägga till sessioner för alla deltagare.
* I gruppläge "Separata grupper" kan du bara lägga till sessioner för en grupp deltagare.
* I gruppläge "Synliga grupper" kan du lägga till båda typerna av sessioner.';
$string['sessiontypeshort'] = 'Typ';
$string['sessionunknowngroup'] = 'En session anger okända grupper: {$a}';
$string['sessionupdated'] = 'Sessionen uppdaterades';
$string['set_by_student'] = 'Självregistrerad';
$string['setallstatuses'] = 'Ange status för';
$string['setallstatusesto'] = 'Ange status som «{$a}»';
$string['setperiod'] = 'Angiven tid i minuter för att släppa IP';
$string['settings'] = 'Inställningar';
$string['setunmarked'] = 'Automatisk närvaromarkering';
$string['setunmarked_help'] = 'Om aktiverad i sessionen sätts närvarostatusen automatiskt om studenten inte själv angivit den. Välj i listan nedan vilken status som automatiskt ska anges i dessa fall.';
$string['showdefaults'] = 'Visa standardvärdena';
$string['showduration'] = 'Visa varaktighet';
$string['showextrauserdetails'] = 'Visa ytterligare användardetaljer';
$string['showqrcode'] = 'Visa QR-kod';
$string['showsessiondescriptiononreport'] = 'Visa sessionsbeskrivning i rapport';
$string['showsessiondescriptiononreport_desc'] = 'Visa sessionsbeskrivning i närvarorapporten';
$string['showsessiondetails'] = 'Visa detaljer';
$string['somedisabledstatus'] = '(Vissa alternativ har dolts eftersom sessionen redan börjat.)';
$string['sortedgrid'] = 'Sorterad tabell';
$string['sortedlist'] = 'Sorterad lista';
$string['startofperiod'] = 'Perioden börjar';
$string['starttime'] = 'Starttid';
$string['status'] = 'Status';
$string['statusall'] = 'alla';
$string['statusdeleted'] = 'Status borttagen';
$string['statuses'] = 'Statusar';
$string['statusset'] = 'Statusuppsättning {$a}';
$string['statussetsettings'] = 'Statusuppsättningar';
$string['statustotalcount'] = 'Status {$a} - Totalt';
$string['statustotalcountcurrentweek'] = 'Status {$a} - Totalt för innevarande vecka';
$string['statustotalcountpreviousweek'] = 'Status {$a} - Totalt för föregående vecka';
$string['statusunselected'] = 'avmarkerad';
$string['strftimedm'] = '%d %B';
$string['strftimedmw'] = '<nobr>%A %d %B</nobr>';
$string['strftimedmy'] = '%d %B %Y';
$string['strftimedmyhm'] = '%d %B %Y %H.%M';
$string['strftimedmyw'] = '<nobr>%A %d %B %Y</nobr>';
$string['strftimeh'] = '%H:00';
$string['strftimehm'] = '%H:%M';
$string['strftimeshortdate'] = '%Y-%m-%d';
$string['studentid'] = 'Student-ID';
$string['studentmarked'] = 'Din närvaro för denna session har sparats.';
$string['studentmarking'] = 'Egen närvaroregistrering';
$string['studentpassword'] = 'Studentlösenord';
$string['studentrecordingexpanded'] = 'Expandera "Egen närvaroregistrering"';
$string['studentrecordingexpanded_desc'] = 'Visa "Egen närvaroregistrering" i expanderat läge som standard då nya sessioner skapas.';
$string['studentscanmark'] = 'Tillåt att studenterna själva registrerar sin närvaro';
$string['studentscanmark_desc'] = 'Om markerad kommer lärarna ha möjlighet att tillåta att studenterna själva kan registrera sin närvaro.';
$string['studentscanmark_help'] = 'Om markerad kan studenter själv ändra sin närvarostatus för sessionen.';
$string['studentscanmarksessiontime'] = 'Studenter registrerar sin närvaro under sessionen';
$string['studentscanmarksessiontime_desc'] = 'Om förkryssat kan studenter enbart registrera sin närvaro under sessionen.';
$string['studentscanmarksessiontimeend'] = 'Sessionen slutar efter (minuter)';
$string['studentscanmarksessiontimeend_desc'] = 'Om en session inte har någon sluttid anger detta värde hur länge sessionen är öppen för närvaroregistrering för studenter.';
$string['studentsearlyopentime'] = 'Öppna närvarosessionen i förväg';
$string['studentsearlyopentime_help'] = 'Tillåter att lärare öppnar närvarosessionen i förväg för att kunna ta upp närvaro innan den faktiska lektionen börjar.';
$string['submit'] = 'Skicka in';
$string['submitattendance'] = 'Skicka in närvaro';
$string['submitattendancefuture'] = 'Rapportera framtida frånvaro';
$string['submitpassword'] = 'Ange lösenord';
$string['subnet'] = 'Subnet';
$string['subnetactivitylevel'] = 'Tillåt konfigurering av standardnätverk på aktivitetsnivå';
$string['subnetactivitylevel_desc'] = 'Om markerad kan lärare åsidosätta standardinställningarna för tillåtna IP-adresser på aktivitetsnivå när de skapar en närvaro. I annat fall kommer standardinställningen användas när en session skapas.';
$string['subnetwrong'] = 'Närvaron kan bara sparas från vissa platser. Denna dator finns inte med på listan över tillåtna platser.';
$string['summary'] = 'Sammanfattning';
$string['tablerenamefailed'] = 'Det gick inte att byta namnet på <code>attforblock</code>-tabellen till "attendance"';
$string['tactions'] = 'Åtgärd';
$string['takeattendance'] = 'Markera närvaro';
$string['takensessions'] = 'Sessioner med närvaro';
$string['tcreated'] = 'Skapad';
$string['tempaddform'] = 'Lägg till tillfällig användare';
$string['tempexists'] = 'Det finns redan en temporär användare med denna e-postadress';
$string['temptable'] = 'Tillfälliga användare';
$string['tempuser'] = 'Tillfällig användare';
$string['tempusermerge'] = 'Slå ihop tillfällig användare';
$string['tempusers'] = 'Tillfälliga användare';
$string['tempusersedit'] = 'Redigera tillfällig användare';
$string['tempuserslist'] = 'Tillfälliga användare';
$string['thirdpartyemails'] = 'Notifiera övriga användare';
$string['thirdpartyemails_help'] = 'Lista med övriga användare som kommer notifieras. (Kräver funktionsbehörigheten <code>mod/attendance:viewreports</code>)';
$string['thirdpartyemailsubject'] = 'Närvarovarning';
$string['thirdpartyemailtext'] = '{$a->firstname} {$a->lastname}s närvaro i {$a->coursename} {$a->aname} är lägre än {$a->warningpercent} ({$a->percent})';
$string['thirdpartyemailtextfooter'] = 'Du får detta meddelande eftersom kursens lärare har lagt till din adress på sändlistan.';
$string['thiscourse'] = 'Denna kurs';
$string['time'] = 'Tid';
$string['timeahead'] = 'Multipla sessioner längre än ett år kan inte skapas. Vänligen justera start- och slutdatum.';
$string['timemodified'] = 'Ändrad';
$string['timetaken'] = 'Tidpunkt för närvaroregistrering';
$string['to'] = 'till:';
$string['todate'] = 'till datum';
$string['totalnumsessions'] = 'Totalt antal närvarosessioner';
$string['triggered'] = 'Först notifierad';
$string['tuseremail'] = 'E-post';
$string['tusername'] = 'Fullständigt namn';
$string['ungraded'] = 'Ej betygsatta sessioner';
$string['unknowngroup'] = 'Okänd grupp';
$string['unknownstatus'] = 'Okänt status-ID: {$a}';
$string['update'] = 'Uppdatera';
$string['updateattendance'] = 'Uppdatera närvaro';
$string['uploadattendance'] = 'Ladda upp närvaro från CSV';
$string['usedefaultsubnet'] = 'Använd standard';
$string['usemessageform'] = 'eller använd formuläret nedan för att skicka meddelande till de valda studenterna';
$string['userexistingstatus'] = 'Din närvaro är redan angiven som: <strong>{$a}</strong>. Använd formuläret nedan för att vid behov ändra detta.';
$string['userexists'] = 'Det finns redan en användare med denna e-postadress';
$string['userid'] = 'Användar-ID';
$string['userimportfield'] = 'Externt användarfält';
$string['userimportfield_help'] = 'Fält i CSV-filen som innehåller användar-id';
$string['userimportto'] = 'Användarfält i Moodle';
$string['userimportto_help'] = 'Fält i Moodle som matchar data från CSV-exporten';
$string['users'] = 'Användare att exportera';
$string['usersessiongrade'] = 'Sessionsbetyg för användare';
$string['usersessionremarks'] = 'Användarkommentarer';
$string['usersessiontaken'] = 'Antal användarsessioner';
$string['userstatus'] = 'Närvarostatus';
$string['usestatusset'] = 'Statusuppsättning';
$string['variable'] = 'variabel';
$string['variablesupdated'] = 'Variabler uppdaterade';
$string['versionforprinting'] = 'utskriftsversion';
$string['viewmode'] = 'Visningsläge';
$string['warnafter'] = 'Antal sessioner innan varning kan ske';
$string['warnafter_help'] = 'Varningar kan endast ges efter att användarens närvaro tagits upp minst så här många gånger.';
$string['warningdeleted'] = 'Varning borttagen';
$string['warningdesc'] = 'Dessa varningar kommer automatiskt att läggas till i nya närvaroaktiviteter. Om fler än en varning utlöses exakt samtidigt skickas bara varningen med den lägre varningströskeln.';
$string['warningdesc_course'] = 'Tröskelvärden för varningar som anges här påverkar frånvarorapporten och gör det möjligt att meddela studenter och tredje part. Om fler än en varning utlöses exakt samtidigt skickas bara varningen med den lägre varningströskeln.';
$string['warningfailed'] = 'Det går inte att skapa en varning med samma tröskelvärde och antal sessioner.';
$string['warningpercent'] = 'Varna vid närvaro under (i %)';
$string['warningpercent_help'] = 'Varningar sker om den övergripande närvaron faller under detta procenttal.';
$string['warnings'] = 'Varningar';
$string['warningthreshold'] = 'Varningsgräns';
$string['warningupdated'] = 'Uppdaterade varningar';
$string['week'] = 'vecka/veckor';
$string['weekcommencing'] = 'Veckan börjar';
$string['weeks'] = 'Veckor';
$string['youcantdo'] = 'Du kan inte göra något';
