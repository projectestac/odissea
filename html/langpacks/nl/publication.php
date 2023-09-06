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
 * Strings for component 'publication', language 'nl', version '4.1'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Bestanden toevoegen';
$string['allfiles'] = 'Alle bestanden';
$string['allowedfiletypes'] = 'Toegestane bestandstypes';
$string['allowedfiletypes_err'] = 'Controleer bestand! Bestandstype is niet bekend';
$string['allowedfiletypes_help'] = 'Ondersteunde bestandstypes kunnen beperkt worden door een door komma\'s gescheiden lijst van mimetypes in te voeren, bijv. \'video/mp4, audio/mp3, image/png, image/jpeg\' of bestandsextensies inclusief een punt, bijv. \'.png, .jog\'. Als dit veld leeg wordt gelaten, zijn alle bestandstypes toegestaan.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'De opdrachtinformatie en insturen zijn beschikbaar vanaf <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'van';
$string['allowsubmissionsfromdate_import'] = 'Goedkeuring van';
$string['allowsubmissionsfromdate_upload'] = 'Gelegenheid voor uploaden vanaf';
$string['allowsubmissionsfromdateh'] = 'Tijdslot voor uploaden/goedkeuren';
$string['allowsubmissionsfromdateh_help'] = 'Je kunt de periode instellen waarbinnen leerlingen bestanden kunnen uploaden of hun goedkeuring voor publicatie kunnen geven. Gedurende deze periode kunnen leerlingen hun bestanden bewerken en kunnen ze ook hun goedkeuring voor publicatie intrekken.';
$string['allowsubmissionsfromdatesummary'] = 'Deze opdracht aanvaardt inzendingen van <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Beschrijving altijd tonen';
$string['alwaysshowdescription_help'] = 'Indien uitgeschakeld is de activiteitsbeschrijving alleen zichtbaar voor leerlingen vanaf de datum vanaf wanneer inzendingen zijn toegestaan.';
$string['approval_timeover'] = 'Je kunt je goedkeuring alleen wijzigen tijdens de wijzigingsperiode.';
$string['approvalchange'] = 'Goedkeuringsstatus gewijzigd';
$string['approved'] = 'Goedgekeurd';
$string['approveusers'] = 'Zichtbaar voor iedereen';
$string['assignment'] = 'Opdracht';
$string['assignment_help'] = 'Selecteer de opdracht om bestanden van te importeren. Op dit moment worden groepsopdrachten nog niet ondersteund en is het niet mogelijk deze te selecteren.';
$string['assignment_notfound'] = 'De opdracht waarvan de bestanden zijn geïmporteerd, kon niet meer worden gevonden.';
$string['assignment_notset'] = 'Er is geen opdracht geselecteerd.';
$string['autoimport'] = 'Automatisch synchroniseren met Opdracht';
$string['autoimport_help'] = 'Indien ingeschakeld worden nieuwe inzendingen in ge gekoppelde Opdracht automatisch geïmporteerd in de activiteit Publicatie. (Optioneel) Goedkeuring van de leerling moet opnieuw worden verkregen voor nieuwe bestanden.';
$string['availability'] = 'Tijdslot voor uploaden/goedkeuren';
$string['choose'] = 'selecteer ...';
$string['configautoimport'] = 'Als je de voorkeur hebt dat inzendingen van leerlingen automatisch worden geïmporteerd in instanties van Publicatie. Deze functie kan worden in-/uitgeschakeld voor iedere instantie van Publicatie.';
$string['configmaxbytes'] = 'Standaard maximale grootte voor alle bestanden in de Publicatie.';
$string['configmaxfiles'] = 'Standaard maximaal aantal toegestane bijlagen per gebruiker.';
$string['configobtainstudentapproval'] = 'Documenten zijn zichtbaar na instemming van leerling.';
$string['configobtainteacherapproval'] = 'Documenten van leerlingen zijn standaard zichtbaar voor alle andere deelnemers.';
$string['configrequiremodintro'] = 'Schakel deze optie uit als je gebruikers niet wilt dwingen een beschrijving toe te voegen bij iedere activiteit.';
$string['courseuploadlimit'] = 'Cursusuploadlimiet';
$string['currentlynotapproved'] = '* Op dit moment nog niet goed- of afgekeurd.';
$string['cutoffdate'] = 'Afsluitdatum';
$string['cutoffdate_help'] = 'Indien ingesteld, worden er na deze datum geen inzendingen meer aanvaard zonder uitstel.';
$string['cutoffdate_import'] = 'Laatste goedkeuring tot';
$string['cutoffdate_upload'] = 'Laatste gelegenheid voor uploaden tot';
$string['cutoffdatefromdatevalidation'] = 'De afsluitdatum moet vallen na de datum voor aanvaarden inzendingen.';
$string['cutoffdatevalidation'] = 'De afsluitdatum kan niet eerder zijn dan de deadline voor insturen.';
$string['details'] = 'Details';
$string['downloadall'] = 'Download alle bestanden als ZIP';
$string['duedate'] = 'tot';
$string['duedate_help'] = 'Dit is wanneer de opdracht moet worden ingestuurd. Inzendingen zijn nog steeds toegestaan na deze datum, maar worden als te laat aangemerkt. Om inzendingen na een bepaalde datum te voorkomen stel je de afsluitdatum van de opdracht in.';
$string['duedate_import'] = 'Goedkeuring tot';
$string['duedate_upload'] = 'Gelegenheid voor uploaden tot';
$string['duedatevalidation'] = 'De deadline voor insturen moet later zijn dan de datum vanaf wanneer insturen is toegestaan.';
$string['edit_timeover'] = 'Bestanden kunnen alleen worden bewerkt tijdens de wijzigingsperiode.';
$string['edit_uploads'] = 'Bewerk/upload bestanden';
$string['emailstudentsmail'] = '{$a->username} heeft de goedkeuringsstatus van \'{$a->filename}\' gewijzigd voor \'{$a->publication}\' naar {4a->apstatus} op {$a->dayupdated} om {$a->timeupdated}.

Het is hier beschikbaar:

   {$a->url}';
$string['emailstudentsmailhtml'] = '{$a->username} heeft de goedkeuringsstatus van \'{$a-filename}\' gewijzigd voor <i>\'{$a->publication}\'</i> naar <b>{$a->apstatus}</b> op {$a->dayupdated} om {$a->timeupdated}.<br /><br />
Het is <a href="{$a->url}">beschikbaar op de website</a>.';
$string['emailteachermail'] = '---------------------------------------------------------------------\\n{$a->username} heeft \'{$a->filename}\' geüpload
voor  \'{$a->publication}\' op {$a->dayupdated} om {$a->timeupdated}.

Het is hier beschikbaar:

    {$a->url}---------------------------------------------------------------------\\n';
$string['emailteachermailhtml'] = '{$a->username} heeft  \'{$a-filename}\' geüpload voor <i>\'{$a->publication}\'  op {$a->dayupdated} om {$a->timeupdated}</i>.<br /><br />
Het is <a href="{$a->url}">beschikbaar op de website</a>.';
$string['entiresperpage'] = 'Deelnemers tonen per pagina';
$string['eventpublicationapprovalchanged'] = 'Bestandsgoedkeuring Publicatie gewijzigd';
$string['eventpublicationduedateextended'] = 'Deadline van Publicatie is uitgesteld';
$string['eventpublicationfiledeleted'] = 'Bestand in Publicatie verwijderd';
$string['eventpublicationfileimported'] = 'Bestand in Publicatie geïmporteerd';
$string['eventpublicationfileuploaded'] = 'Bestand in Publicatie geüpload';
$string['extensionduedate'] = 'Deadline uitstel voor insturen';
$string['extensionnotafterduedate'] = 'De datum voor uitstel moet later zijn dan de deadline voor insturen';
$string['extensionnotafterfromdate'] = 'De datum voor uitstel moet later zijn dan de datum voor aanvaarden inzendingen';
$string['extensionto'] = 'Uitstel tot';
$string['filedetails'] = 'Informatie';
$string['filesofthesetypes'] = 'Bestanden van deze types kunnen worden toegevoegd:';
$string['go'] = 'Start';
$string['grantextension'] = 'Uitstel verlenen';
$string['groupapprovalmode'] = 'Groepsgoedkeuringsmodus';
$string['groupapprovalmode_all'] = 'ALLE groepsleden moeten goedkeuren';
$string['groupapprovalmode_help'] = 'Hier bepaal je of goedkeuring van alle groepsleden of van ten minste één groepslid vereist is voordat bestanden zichtbaar zijn. De bestanden zijn pas zichtbaar na goedkeuring van ofwel alle ofwel ten minste één groepslid.';
$string['groupapprovalmode_single'] = 'Ten minste EEN groepslid moet goedkeuren';
$string['guideline'] = 'zichtbaar voor iedereen:';
$string['hidden'] = 'verborgen';
$string['importfrom_err'] = 'Selecteer een opdracht waarvan je wilt importeren';
$string['maxbytes'] = 'Maximale grootte bijlage';
$string['maxfiles'] = 'Maximum aantal bijlagen';
$string['messageprovider:publication_updates'] = 'Meldingen van Publicatie';
$string['mode'] = 'Modus';
$string['mode_help'] = 'Stel in of leerlingen documenten kunnen uploaden naar Publicatie of dat documenten in een opdracht als bron dienen.';
$string['modeimport'] = 'Documenten ophalen uit een opdracht';
$string['modeupload'] = 'Leerlingen kunnen documenten uploaden';
$string['modulename'] = 'Publicatie';
$string['modulename_help'] = 'Publicatie biedt de volgende mogelijkheden:

* Deelnemers kunnen documenten uploaden die onmiddellijk of na controle en goedkeuring door jou beschikbaar zijn voor anderen.
* Er kan een opdracht geselecteerd worden als de basis voor een Publicatie. De leraar bepaalt welke documenten uit de opdracht zichtbaar zijn voor alle deelnemers. Leraren kunnen de deelnemers ook laten bepalen of hun documenten voor anderen zichtbaar zijn.';
$string['modulenameplural'] = 'Publicaties';
$string['myfiles'] = 'Eigen bestanden';
$string['mygroupfiles'] = 'Bestanden van mijn groep';
$string['name'] = 'Naam Publicatie';
$string['noentries'] = 'Geen bijdragen';
$string['nofiles'] = 'Geen bestanden';
$string['nofilestozip'] = 'Geen bestanden om te comprimeren naar Zip';
$string['nonexistentfiletypes'] = 'De volgende bestandstypes werden niet herkend: {$a}';
$string['nopublicationsincourse'] = 'Er zijn geen instanties van Publicatie in deze cursus.';
$string['nothing_to_show_groups'] = 'Er is niets om te tonen - er is geen groep beschikbaar';
$string['nothing_to_show_users'] = 'Er is niets om te tonen - er zijn geen leerlingen beschikbaar';
$string['nothingtodisplay'] = 'Er zijn geen bijdragen om te tonen';
$string['notice'] = 'Let op:';
$string['notice_groupimportrequireallapproval'] = 'Stel in of je bestanden voor iedereen zichtbaar zijn. Alle groepsleden moeten goedkeuring geven voordat het bestand zichtbaar is.';
$string['notice_groupimportrequireoneapproval'] = 'Stel in of je bestanden voor iedereen zichtbaar zijn. Goedkeuring van één ander groepslid is voldoende om het bestand zichtbaar te maken. Bespreek in je groep of je bestand zichtbaar moet zijn voordat je dit goedkeurt.';
$string['notice_importnoapproval'] = 'De volgende bestanden zijn voor iedereen zichtbaar.';
$string['notice_importrequireapproval'] = 'Stel in of je bestanden voor iedereen zichtbaar zijn.';
$string['notice_uploadnoapproval'] = 'Bestanden zijn na uploaden voor alle deelnemers zichtbaar. De moderator heeft het recht om geplaatste bestanden te verbergen.';
$string['notice_uploadrequireapproval'] = 'Alle geüploade bestanden worden pas zichtbaar na beoordeling door de leraar';
$string['notifications'] = 'Meldingen';
$string['notifystudents'] = 'Melding naar leerlingen over wijzigingen in goedkeuring';
$string['notifystudents_help'] = 'Indien ingeschakeld ontvangen leerlingen een bericht wanneer de goedkeuringsstatus van een van hun uploads verandert. Het is instelbaar hoe berichten worden verstuurd.';
$string['notifyteacher'] = 'Melding naar beoordelaars over uploads';
$string['notifyteacher_help'] = 'Indien ingeschakeld ontvangen beoordelaars (doorgaans leraren) een bericht wanneer een leerling een bestand uploadt. Het is instelbaar hoe berichten worden verstuurd.';
$string['obtainstudentapproval'] = 'Goedkeuring verkrijgen';
$string['obtainstudentapproval_help'] = 'Bepaal of goedkeuring door leerlingen moet worden verkregen: <br><ul><li>Ja - Bestanden zijn pas beschikbaar voor iedereen na goedkeuring van leerling. De leraar kan individuele leerlingen / bestanden selecteren om goedkeuring te vragen.</li><li>Nee - Goedkeuring van de leerling wordt niet via Moodle verkregen. De zichtbaarheid van het bestand is alleen de beslissing van de leraar.</li></ul>';
$string['obtainteacherapproval'] = 'Standaard goedgekeurd';
$string['obtainteacherapproval_help'] = 'Bepaal of bestanden onmiddellijk na uploaden zichtbaar zijn of niet: <br><ul><li>Ja - Alle bestanden zijn direct voor iedereen zichtbaar.</li><li>Nee - Bestanden worden pas gepubliceerd na goedkeuring door de leraar.</li></ul>';
$string['optionalsettings'] = 'Opties';
$string['pending'] = 'In afwachting';
$string['pluginadministration'] = 'Publicatiebeheer';
$string['pluginname'] = 'Publicatie';
$string['privacy:metadata:approval'] = 'Of het groepslid het bestand heeft goed- of afgekeurd.';
$string['privacy:metadata:contenthash'] = 'SHA1 hash van de bestandsinhoud, gebruikt om te bepalen of het bestand is gewijzigd.';
$string['privacy:metadata:extduedates'] = 'Bewaart informatie over overschreven / uitgestelde deadlines voor mod_publication.';
$string['privacy:metadata:extensionduedate'] = 'De effectieve deadline voor de gebruiker vanwege overschrijven / uitstellen.';
$string['privacy:metadata:fileid'] = 'Identifier van het bestand.';
$string['privacy:metadata:filename'] = 'Bestandsnaam.';
$string['privacy:metadata:files'] = 'Bewaart informatie (identifier, van wie het bestand is, waar het vandaan kwam, hash van inhoud, bestandsnaam en of het is goedgekeurd door leraar en/of leerling) over de geüploade / geïmporteerde bestanden in mod_publication.';
$string['privacy:metadata:groupapproval'] = 'Bewaart informatie over de goed- of afkeuring door groepsleden van geïmporteerde bestanden uit de groepsinzending.';
$string['privacy:metadata:publicationfileexplanation'] = 'Bestanden en geconverteerde online-tekstinzendingen voor deze plugin worden via de File API van Moodle bewaard.';
$string['privacy:metadata:publicationperpage'] = 'Hoeveel bijdragen er op een enkele pagina van de tabel moeten worden weergegeven!';
$string['privacy:metadata:studentapproval'] = 'Of de leerling het bestand heeft goed- of afgekeurd.';
$string['privacy:metadata:teacherapproval'] = 'Of de leraar het bestand heeft goed- of afgekeurd.';
$string['privacy:metadata:timecreated'] = 'De datum en tijd waarop het gegevensrecord werd aangemaakt.';
$string['privacy:metadata:timemodified'] = 'De meest recente datum en tijd waarop het gegevensrecord werd bijgewerkt / aangepast.';
$string['privacy:metadata:type'] = 'Geeft de oorsprong van het bestand weer (geüpload door leerling, geïmporteerd uit opdrachtinzending, geconverteerde online tekst uit opdrachtinzending).';
$string['privacy:metadata:userid'] = 'Identifier van de gebruiker.';
$string['privacy:path:files'] = 'Bestanden';
$string['privacy:path:resources'] = 'Bronnen';
$string['privacy:type:import'] = 'geïmporteerd bestand';
$string['privacy:type:onlinetext'] = 'geïmporteerde online tekst';
$string['privacy:type:upload'] = 'Geüpload bestand';
$string['publication:addinstance'] = 'Voeg een nieuwe studenten folder toe';
$string['publication:approve'] = 'Bepaal of bestanden zichtbaar zijn voor elke student';
$string['publication:grantextension'] = 'Geef uitstel';
$string['publication:receiveteachernotification'] = 'Meldingen voor leraren ontvangen';
$string['publication:upload'] = 'Upload bestanden naar een student folder';
$string['publication:view'] = 'Bekijk student folder';
$string['publicfiles'] = 'Gedeelde bestanden';
$string['published_aftercheck'] = 'Nee, alleen na goedkeuring door een leraar';
$string['published_immediately'] = 'Ja onmiddellijk, zonder goedkeuring door een leraar';
$string['rejected'] = 'Afgewezen';
$string['rejectusers'] = 'Onzichtbaar voor iedereen';
$string['requiremodintro'] = 'Vereis activiteitsbeschrijving';
$string['reset'] = 'Terugdraaien';
$string['reset_userdata'] = 'Alle gegevens';
$string['resetstudentapproval'] = 'Status terugzetten';
$string['save_changes'] = 'Bewaar de wijzigingen';
$string['saveapproval'] = 'Goedkeuring opslaan';
$string['savestudentapprovalwarning'] = 'Weet je zeker dat je deze wijzigingen wilt bewaren? Je kunt de status niet meer wijzigingen nadat deze is ingesteld.';
$string['saveteacherapproval'] = 'Goedkeuring opslaan';
$string['search:activity'] = 'Publicatie - informatie over activiteit';
$string['show_details'] = 'Informatie tonen';
$string['status'] = 'Status';
$string['status:approved'] = 'Goedgekeurd';
$string['status:approvednot'] = 'Afgewezen';
$string['student_approve'] = 'Goedkeuren';
$string['student_approved'] = 'Goedgekeurd';
$string['student_pending'] = 'Niet zichtbaar (niet goedgekeurd)';
$string['student_reject'] = 'Afwijzen';
$string['student_rejected'] = 'Afgewezen';
$string['studentapproval'] = 'Status';
$string['studentapproval_help'] = 'De kolom \'Status\' toont het antwoord van de leerling op de goedkeuring:

* ? - wacht op goedkeuring
* ✓ - goedgekeurd
* ✖ - afgewezen';
$string['teacher_approved'] = 'Zichtbaar (goedgekeurd)';
$string['teacher_pending'] = 'Wacht op bevestiging';
$string['teacher_rejected'] = 'Afgewezen';
$string['teacherapproval'] = 'Goedkeuring';
$string['teacherapproval_help'] = 'Huidige beslissing over bestanden, zichtbaarheid voor alle deelnemers: <br /><ul><li>Selecteer... - Nog niet goed- of afgekeurde bestanden zijn niet zichtbaar.</lI><li>Ja - Goedgekeurd, bestanden zijn zichtbaar</li><li>Nee - Afgekeurd, de bestanden zijn niet zichtbaar.</li></ul>';
$string['total'] = 'Totaal';
$string['updatefiles'] = 'Bestanden bijwerken';
$string['updatefileswarning'] = 'Bestanden van individuele leerlingen in de Publicatie worden bijgewerkt met hun inzendingen voor de opdracht. Reeds zichtbare bestanden van leerlingen worden ook vervangen, als ze worden verwijderd of ververst - de instelling van de student wat betreft zichtbaarheid verandert niet.';
$string['uploaded'] = 'Geüpload';
$string['visibility'] = 'zichtbaar voor iedereen';
$string['visible'] = 'zichtbaar';
$string['visibleforstudents'] = 'zichtbaar voor iedereen';
$string['visibleforstudents_no'] = 'Dit bestand is NIET zichtbaar voor leerlingen';
$string['visibleforstudents_yes'] = 'Leerlingen kunnen dit bestand zien';
$string['warning_changefromobtainstudentapproval'] = 'Als je deze wijziging doorvoert, kun jij als enige bepalen welke bestanden voor alle leerlingen zichtbaar zijn. De leerlingen wordt niet om goedkeuring gevraagd. Alle als goedgekeurd gemarkeerde bestanden worden voor alle leerlingen zichtbaar, ongeacht hun beslissingen.';
$string['warning_changefromobtainteacherapproval'] = 'Zodra je deze instelling activeert, worden alle geüploade bestanden voor andere deelnemers zichtbaar. Alle geüploade bestanden worden zichtbaar. Je kunt handmatig bestanden voor bepaalde leerlingen verbergen.';
$string['warning_changetoobtainstudentapproval'] = 'Als je deze wijziging doorvoert, wordt de leerlingen goedkeuring gevraagd voor alle als zichtbaar gemarkeerde bestanden. Bestanden worden pas na goedkeuring van de leerlingen zichtbaar.';
$string['warning_changetoobtainteacherapproval'] = 'Zodra je deze instelling deactiveert, worden alle geüploade bestanden automatisch voor andere deelnemers verborgen. Je zult moeten bepalen welke bestanden zichtbaar zijn. Bestanden die al zichtbaar waren, worden verborgen.';
$string['withselected'] = 'Met geselecteerde...';
$string['zipusers'] = 'Download als ZIP';
