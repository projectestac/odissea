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
 * Strings for component 'publication', language 'sv', version '4.4'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Lägg till filer';
$string['allfiles'] = 'Alla filer';
$string['allowedfiletypes'] = 'Accepterade filtyper';
$string['allowedfiletypes_err'] = 'Kontrollera! Ogiltig filtyp eller ogiltiga tecken i filnamnet!';
$string['allowedfiletypes_help'] = 'Godkända filtyper kan begränsas genom att ange en kommaseparerad lista med mimetyper, t.ex. \'video / mp4, audio / mp3, image / png, image / jpeg\' eller filtillägg inklusive en punkt, t.ex. \'.png, .jpg\'. Om fältet lämnas tomt är alla filtyper tillåtna.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Uppgiftsinformationen och inlämningsformuläret kommer att vara tillgängliga från <strong>{$a} </strong>';
$string['allowsubmissionsfromdate'] = 'Från';
$string['allowsubmissionsfromdate_import'] = 'Medgivande kan ges från';
$string['allowsubmissionsfromdate_upload'] = 'Filer kan laddas upp från';
$string['allowsubmissionsfromdatesummary'] = 'Denna uppgift accepterar inlämningar från <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Visa alltid beskrivning';
$string['alwaysshowdescription_help'] = 'Om inaktiverat kommer uppgiftsbeskrivningen ovan att visas endast för studenter från datumet "Tillåt inlämning från".';
$string['approval_timeover'] = 'Du kan bara ändra ditt medgivande under tidsperioden för uppladdning / medgivande.';
$string['approvalchange'] = 'Status för medgivande ändrad';
$string['approved'] = 'Godkänd';
$string['approveusers'] = 'Publicera';
$string['assignment'] = 'Uppgift';
$string['assignment_help'] = 'Välj uppgiften du vill importera filer från. För tillfället stöds inte gruppuppgifter och dessa kan därför inte väljas.';
$string['assignment_notfound'] = 'Uppgiften från vilken filerna hämtades kan inte längre hittas.';
$string['assignment_notset'] = 'Ingen uppgift har valts';
$string['availability'] = 'Tidsperiod för uppladdning / medgivande';
$string['choose'] = 'Vänligen välj...';
$string['configautoimport'] = 'Om du föredrar att studentbidrag importeras automatiskt till studentmapp. Denna funktion kan aktiveras / inaktiveras för varje studentmapp separat.';
$string['configmaxbytes'] = 'Förinställd maxstorlek för alla filer i studentmappen.';
$string['configmaxfiles'] = 'Förinställt tillåtet maxantal bifogade filer per användare.';
$string['configobtainstudentapproval'] = 'Filer publiceras / blir synliga efter studentens medgivande';
$string['configobtainteacherapproval'] = 'Studenters filer är som standard synliga (publicerade) för alla andra deltagare.';
$string['configrequiremodintro'] = 'Avaktivera denna om du inte vill tvinga lärare att alltid ge en beskrivning av aktiviteten.';
$string['courseuploadlimit'] = 'Maximal filstorlek för kurs';
$string['currentlynotapproved'] = '* För närvarande varken godkänd eller nekad';
$string['cutoffdate'] = 'Avstängningsdatum';
$string['cutoffdate_help'] = 'Om aktiverad kommer inte uppgiften att acceptera inlämningar efter satt datum och tid utan förlängning.';
$string['cutoffdate_import'] = 'Avstängningsdatum för medgivande';
$string['cutoffdate_upload'] = 'Avstängningsdatum för uppladdning';
$string['cutoffdatefromdatevalidation'] = 'Avstängningsdatum måste ligga efter öppningsdatum';
$string['cutoffdatevalidation'] = 'Avstängningsdatum kan inte vara före Stoppdatum/tid';
$string['details'] = 'Detaljer';
$string['downloadall'] = 'Ladde ned alla som zip-fil';
$string['duedate'] = 'Till';
$string['duedate_help'] = 'Stoppdatum/tid är då inlämningen ska vara klar. Inlämningar kommer fortfarande att vara tillåtna efter detta datum men alla uppdrag som skickas in efter detta datum markeras som sena.
För att förhindra inlämningar efter ett visst datum - ställ in uppgiftens Avstängningsdatum.';
$string['duedate_import'] = 'Medgivande kan ges till';
$string['duedate_upload'] = 'Filer kan laddas upp till';
$string['duedatevalidation'] = 'Stoppdatum/tid måste vara senare än "Tillåt inlämningar från".';
$string['edit_timeover'] = 'Filer kan bara redigeras under ändringsperioden.';
$string['edit_uploads'] = 'Redigera / Ladda upp filer';
$string['entiresperpage'] = 'Deltagare per sida';
$string['eventpublicationapprovalchanged'] = 'Medgivande ändrat';
$string['eventpublicationduedateextended'] = 'Avstängningsdatum för publicering förlängt';
$string['eventpublicationfiledeleted'] = 'Studentmapp radera filer';
$string['eventpublicationfileimported'] = 'Studentmapp filimport';
$string['eventpublicationfileuploaded'] = 'Studentmapp filuppladdning';
$string['extensionduedate'] = 'Förlängningens stoppdatum/tid';
$string['extensionnotafterduedate'] = 'Förlängningsdatum måste vara efter Stoppdatum/tid';
$string['extensionnotafterfromdate'] = 'Förlängningsdatum måste vara efter "Tillåt inlämningar från"';
$string['extensionto'] = 'Förlängning till';
$string['filedetails'] = 'Detaljer';
$string['filesofthesetypes'] = 'Filer av dessa format kan ladda upp:';
$string['go'] = 'Kör';
$string['grantextension'] = 'Ge förlängning';
$string['guideline'] = 'Publicerat:';
$string['hidden'] = 'Ej publicerad';
$string['importfrom_err'] = 'Du måste välja en uppgift att importera från';
$string['maxbytes'] = 'Max filstorlek';
$string['maxfiles'] = 'Max antal filer';
$string['messageprovider:publication_updates'] = 'Publiceringsnotifikationer';
$string['mode'] = 'Typ av studentmapp';
$string['mode_help'] = 'Välj om studenter ska kunna ladda upp filer direkt till mappen eller om filerna ska importeras från en uppgift.';
$string['modeimport'] = 'Hämta filer från en uppgift';
$string['modeupload'] = 'Studenter kan ladda upp filer';
$string['modulename'] = 'Studentmapp';
$string['modulename_help'] = 'Aktiviteten Studentmapp har följande funktioner: <br>- Studenter kan ladda upp dokument som blir tillgängliga för andra studenter omedelbart, eller efter att lärare har kontrollerat dokumenten medgivit publicering. <br>- En uppgift kan väljas som källa för en Studentmapp. Läraren kan bestämma vilka filer och online-texter i uppgiften som ska vara synliga för alla studenter (publicerade). Lärare kan också välja att studenterna behöver ge medgivande och avgöra huruvida deras filer ska vara synliga / publiceras för övriga studenter.';
$string['modulenameplural'] = 'Studentmappar';
$string['myfiles'] = 'Egna filer';
$string['mygroupfiles'] = 'Min grupps filer';
$string['name'] = 'Namn på studentmappen';
$string['noentries'] = 'Inga inlämningar';
$string['nofiles'] = '<i>Du har inga filer här än.</i>';
$string['nofilestozip'] = 'Inga filer att zippa';
$string['nonexistentfiletypes'] = 'Följande filtyper kändes inte igen: {$a}';
$string['nopublicationsincourse'] = 'Det finns inga Studentmappar i den här kursen.';
$string['nothing_to_show_groups'] = '<strong>Inget att visa - inga filer är tillgängliga</strong>';
$string['nothing_to_show_users'] = '<strong>Inget att visa - inga filer är tillgängliga</strong>';
$string['nothingtodisplay'] = '<strong>Inget att visa</strong>';
$string['notice'] = '<strong>Notera:</strong>';
$string['notifications'] = 'Notifikationer';
$string['notifystudents'] = 'Notifiera studenter om ändring av medgivandestatus';
$string['notifystudents_help'] = 'Om aktiverad får eleverna ett meddelande när medgivandestatusen för en av deras uppladdningar ändras. Meddelandemetoden kan konfigureras i användarens egna inställningar för notifikationer.';
$string['notifyteacher'] = 'Meddela lärare om uppladdningar';
$string['notifyteacher_help'] = 'Om aktiverad får lärare ett meddelande när en student laddar upp en fil. Meddelandemetoden kan konfigureras i användarens egna inställningar för notifikationer.';
$string['obtainstudentapproval'] = 'Medgivande behövs';
$string['obtainstudentapproval_help'] = 'Bestäm om studenternas medgivande kommer att behövas för publicering: <br> <ul> <li> Ja - filer kommer att vara synliga för studenter först efter att studenten har medgivit detta. Lärare kan välja enskilda studenter / filer för att be om medgivande. </li> <li> Nej - studentens medgivande kommer inte att begäras via MyMoodle. Filens synlighet för andra studenter ställs in av läraren. </li> </ul>';
$string['obtainteacherapproval'] = 'Godkänn automatiskt';
$string['obtainteacherapproval_help'] = 'Bestäm om filer ska vara synliga omedelbart efter uppladdning: <br> <ul> <li> Ja - alla filer kommer att vara synliga för alla studenter direkt </li> <li> Nej - filer kommer att publiceras först efter läraren godkänt </li> </ul>';
$string['optionalsettings'] = 'Alternativ';
$string['pending'] = 'Väntar';
$string['pluginadministration'] = 'Administrera Studentmapp';
$string['pluginname'] = 'Studentmapp';
$string['publication:addinstance'] = 'Lägg till en ny Studentmapp';
$string['publication:approve'] = 'Bestäm om filerna ska vara publicerade för alla studenter';
$string['publication:grantextension'] = 'Ge förlängning';
$string['publication:receiveteachernotification'] = 'Ta emot notifikationer för lärare';
$string['publication:upload'] = 'Ladda upp filer till Studentmapp';
$string['publication:view'] = 'Visa Studentmapp';
$string['publicfiles'] = 'Publicerade filer';
$string['published_aftercheck'] = 'Efter godkännande av lärare';
$string['published_immediately'] = 'Omedelbart efter uppladdning';
$string['rejected'] = 'Ej godkänd';
$string['rejectusers'] = 'Dölj för alla';
$string['requiremodintro'] = 'Kräv beskrivning av aktiviteten';
$string['reset'] = 'Återställ';
$string['reset_userdata'] = 'Alla data';
$string['resetstudentapproval'] = 'Återställ status';
$string['save_changes'] = 'Spara ändringar';
$string['saveapproval'] = 'Spara medgivande';
$string['savestudentapprovalwarning'] = 'Är du säker på att du vill spara ändringarna. Du kan inte ändra statusen när den väl är satt.';
$string['saveteacherapproval'] = 'Spara godkännande';
$string['search:activity'] = 'Studentmapp - information om aktiviteten';
$string['show_details'] = 'Visa detaljer';
$string['status:approved'] = 'Godkänd';
$string['status:approvednot'] = 'Nekad';
$string['student_approve'] = 'medge publicering';
$string['student_approved'] = 'Publicering medgiven';
$string['student_pending'] = 'Dold (ej godkänt)';
$string['student_reject'] = 'Avvisa';
$string['student_rejected'] = 'Publicering avvisad';
$string['studentapproval_help'] = 'Kolumnstatusen visar studentens svar angående medgivande: *

? - väntar på medgivande
* ✓ - Publicering medgiven
* ✖ - Publicering avvisad';
$string['teacher_approved'] = 'Publicerad av lärare';
$string['teacher_pending'] = 'Väntar på bekräftande';
$string['teacher_rejected'] = 'Ännu ej godkänd av lärare';
$string['teacherapproval'] = 'Godkänd för publicering';
$string['teacherapproval_help'] = 'Aktuell status för filer, vilket visas för alla deltagare: <br /><ul><li>Välj... - varken godkänd eller nekad ännu, filerna visas inte.</li><li>Ja - godkänd, filerna visas.</li><li>Nej - Nekad, filerna visas inte.</li></ul>';
$string['total'] = 'totalt';
$string['updatefiles'] = 'Uppdatera filer';
$string['updatefileswarning'] = 'Filer från en enskild student i studentmappen uppdateras med hans / hennes inlämning av uppgiften. Redan publicerade filer från studenter kommer också att ersättas om de raderats eller uppdaterats - studentens inställningar för publiceringen kommer inte att ändras.';
$string['uploaded'] = 'Uppladdad';
$string['visibility'] = 'Publicerad';
$string['visible'] = 'Publicerad';
$string['visibleforstudents'] = 'Publicerad';
$string['visibleforstudents_no'] = 'Den här filen är inte synlig för studenter';
$string['visibleforstudents_yes'] = 'Studenter kan se den här filen';
$string['withselected'] = 'Med valda...';
$string['zipusers'] = 'Ladda ned som zip-fil';
