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
 * Strings for component 'publication', language 'nl', version '4.5'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Bestanden toevoegen';
$string['allfiles'] = 'Alle inzendingen';
$string['allowedfiletypes'] = 'Toegestane bestandstypes';
$string['allowedfiletypes_err'] = 'Controleer bestand! Bestandstype is niet bekend';
$string['allowedfiletypes_help'] = 'Ondersteunde bestandstypes kunnen beperkt worden door een door komma\'s gescheiden lijst van mimetypes in te voeren, bijv. \'video/mp4, audio/mp3, image/png, image/jpeg\' of bestandsextensies inclusief een punt, bijv. \'.png, .jog\'. Als dit veld leeg wordt gelaten, zijn alle bestandstypes toegestaan.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'De opdrachtinformatie en insturen zijn beschikbaar vanaf <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Van';
$string['allowsubmissionsfromdate_import'] = 'Goedkeuring van';
$string['allowsubmissionsfromdate_upload'] = 'Uploaden vanaf';
$string['allowsubmissionsfromdatesummary'] = 'Deze opdracht aanvaardt inzendingen van <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Beschrijving altijd tonen';
$string['alwaysshowdescription_help'] = 'Wanneer dit is uitgeschakeld, wordt bovenstaande opdrachtbeschrijving pas zichtbaar voor leerlingen vanaf de datum "Uploaden / Goedkeuren vanaf".';
$string['approval_required'] = 'Wachten op beslissing';
$string['approval_timeover'] = 'Je kunt je toestemming alleen aanpassen tijdens de bewerkingsperiode.';
$string['approvalchange'] = 'Publicatiestatus gewijzigd';
$string['approvalfromdate'] = 'Goedkeuring vanaf';
$string['approvalsettings'] = 'Instellingen voor publicatie';
$string['approvaltodate'] = 'Goedkeuring tot';
$string['approved'] = 'Goedgekeurd';
$string['approveusers'] = 'Goedkeuring geven';
$string['assignment'] = 'Opdracht';
$string['assignment_help'] = 'Selecteer de opdracht waar je bestanden uit wilt importeren vanuit individuele of groepsinzendingen.';
$string['assignment_notfound'] = 'De opdracht waarvan de bestanden zijn geïmporteerd, kon niet meer worden gevonden.';
$string['assignment_notset'] = 'Er is geen opdracht geselecteerd.';
$string['availability'] = 'Bewerkingsperiode (uploaden of goedkeuren)';
$string['choose'] = 'Selecteer ...';
$string['completiondetail:upload'] = 'Een bestand uploaden';
$string['completionupload'] = 'Leerling moet een bestand uploaden';
$string['configautoimport'] = 'Als je de voorkeur hebt dat inzendingen van leerlingen automatisch worden geïmporteerd in instanties van Publicatie. Deze functie kan worden in-/uitgeschakeld voor iedere instantie van Publicatie.';
$string['configmaxbytes'] = 'Standaard maximale grootte voor alle bestanden in de Publicatie.';
$string['configmaxfiles'] = 'Standaard maximaal aantal toegestane bijlagen per gebruiker.';
$string['courseuploadlimit'] = 'Cursusuploadlimiet';
$string['currentlynotapproved'] = '* Nog niet goedgekeurd of afgewezen voor publicatie.';
$string['cutoffdate'] = 'Afsluitdatum';
$string['cutoffdate_help'] = 'Indien ingesteld, worden er na deze datum geen inzendingen meer aanvaard zonder uitstel.';
$string['cutoffdate_import'] = 'Laatste goedkeuring tot';
$string['cutoffdate_upload'] = 'Uiterste sluitingsdatum uploaden';
$string['cutoffdatefromdatevalidation'] = 'De afsluitdatum moet vallen na de datum voor aanvaarden inzendingen.';
$string['cutoffdatevalidation'] = 'De afsluitdatum kan niet eerder zijn dan de deadline voor insturen.';
$string['details'] = 'Details';
$string['downloadall'] = 'Alle ingestuurde bestanden downloaden als ZIP';
$string['duedate'] = 'Tot';
$string['duedate_help'] = 'Wanneer dit is ingeschakeld, kunnen deelnemers hun bestanden niet meer insturen na deze datum. Als de optie is uitgeschakeld, kunnen deelnemers altijd insturen.';
$string['duedate_import'] = 'Goedkeuring tot';
$string['duedate_upload'] = 'Uploaden tot';
$string['duedatevalidation'] = 'De deadline voor insturen moet later zijn dan de datum vanaf wanneer insturen is toegestaan.';
$string['edit_timeover'] = 'Je kunt alleen bestanden bewerken tijdens de bewerkingsperiode.';
$string['edit_uploads'] = 'Bestanden bewerken / uploaden';
$string['email:filechange:footer'] = '</ul><br />Controleer of je toestemming voor publicatie vereist is.';
$string['email:filechange_import:subject'] = 'Bestand(en) geïmporteerd';
$string['email:filechange_upload:header'] = '<b>{$a->username}</b> heeft de volgende bestanden geüpload naar <b>\'{$a->publication}\'</b> op {$a->dayupdated} om {$a->timeupdated}:<br /><ul>';
$string['email:filechange_upload:subject'] = 'Bestand(en) geüpload';
$string['email:statuschange:filename'] = '<li>\'{$a->filename}\' naar \'<b>{$a->apstatus}</b>\'</li>';
$string['email:statuschange:footer'] = '</ul>';
$string['email:statuschange:header'] = 'De publicatiestatus van de volgende bestanden voor <b>\'{$a->publication}\'</b> is gewijzigd op {$a->dayupdated} om {$a->timeupdated} door <b>{$a->username}</b>:<br /><ul>';
$string['email:statuschange:subject'] = 'Publicatiestatus gewijzigd';
$string['entiresperpage'] = 'Deelnemers tonen per pagina';
$string['eventoverridecreated'] = 'Overschrijving publicatie aangemaakt';
$string['eventoverridedeleted'] = 'Overschrijving publicatie verwijderd';
$string['eventoverrideupdated'] = 'Overschrijving publicatie bijgewerkt';
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
$string['filter'] = 'Filter';
$string['filter:allfiles'] = 'Alle ingestuurde bestanden';
$string['filter:approvalrequired'] = 'Wachten op beslissing';
$string['filter:approved'] = 'Goedgekeurde ingestuurde bestanden';
$string['filter:nofiles'] = 'Geen ingestuurd bestand';
$string['filter:nofilter'] = 'Geen filter';
$string['filter:rejected'] = 'Afgewezen ingestuurde bestanden';
$string['giveapproval'] = 'Goedkeuring geven';
$string['go'] = 'Start';
$string['grantextension'] = 'Uitstel verlenen';
$string['group_approved'] = 'Goedgekeurd door alle groepsleden.';
$string['guideline'] = 'Publicatie van ingestuurde bestanden';
$string['hidden'] = 'Niet gepubliceerd';
$string['importfrom_err'] = 'Je moet een opdracht kiezen waar je ingestuurde bestanden uit wilt importeren.';
$string['maxbytes'] = 'Maximale grootte bijlage';
$string['maxbytes_help'] = 'Door leerlingen geüploade bestanden mogen maximaal zo groot zijn.';
$string['maxfiles'] = 'Maximum aantal bijlagen';
$string['maxfiles_help'] = 'Iedere leerling kan maximaal dit aantal bestanden uploaden voor diens inzending.';
$string['messageprovider:publication_updates'] = 'Meldingen van Publicatie';
$string['mode'] = 'Modus';
$string['mode_help'] = 'Kies of leerlingen documenten kunnen uploaden of dat hun inzendingen voor een opdracht geïmporteerd moeten worden.';
$string['modeimport'] = 'Bestanden importeren uit een Opdracht';
$string['modeupload'] = 'Bestanden rechtstreeks naar deze activiteit uploaden';
$string['modulename'] = 'Publicatie';
$string['modulename_help'] = 'Publicatie biedt de volgende functionaliteit:<br>
<ul>
<li>Leerlingen kunnen bestanden uploaden of deze importeren vanuit een activiteit Opdracht</li>
<li>Deze bestanden worden automatisch gepubliceerd (worden voor iedereen zichtbaar gemaakt) of nadat leerlingen en/of leraren daarvoor goedkeuring hebben gegeven.</li>
<li>Leerlingen en/of leraren ontvangen een melding wanneer leerlingen een bestand uploaden of wijzigen, of wanneer een bestand wordt geïmporteerd of bijgewerkt vanuit een activiteit Opdracht. Ook ontvangen leerlingen en/of leraren een melding bij wijzigingen in de publicatiestatus.</li>
</ul>';
$string['modulenameplural'] = 'Publicaties';
$string['myfiles'] = 'Eigen bestanden';
$string['mygroupfiles'] = 'Bestanden van mijn groep';
$string['name'] = 'Naam';
$string['noentries'] = 'Geen bijdragen';
$string['nofiles'] = 'Geen bestanden';
$string['nofilestodisplay'] = 'Er zijn op het moment geen bestanden beschikbaar of gepubliceerd';
$string['nofilestozip'] = 'Geen bestanden om te comprimeren naar Zip';
$string['nonexistentfiletypes'] = 'De volgende bestandstypes werden niet herkend: {$a}';
$string['nopublicationsincourse'] = 'Er is geen instantie van Publicatie in deze cursus.';
$string['nothing_to_show_groups'] = 'Er is niets om te tonen - er zijn geen groepen beschikbaar';
$string['nothing_to_show_users'] = 'Er is niets om te tonen - er zijn geen leerlingen beschikbaar';
$string['nothingtodisplay'] = 'Er zijn geen bijdragen om te tonen';
$string['notice'] = '<strong>Opgelet: </strong>';
$string['notifications'] = 'Meldingen';
$string['notify:setting:0'] = 'Geen meldingen';
$string['notify:setting:1'] = 'Alleen leraren';
$string['notify:setting:2'] = 'Alleen leerlingen';
$string['notify:setting:3'] = 'Zowel leraren als leerlingen';
$string['notify:statuschange'] = 'Meldingen over wijzigingen in publicatiestatus';
$string['notify:statuschange_admin'] = 'Standaardinstelling voor meldingen bij wijzigingen in publicatiestatus';
$string['notifystudents'] = 'Stuur een melding naar leerlingen over wijzigingen in de publicatie';
$string['notifystudents_help'] = 'Wanneer dit is ingeschakeld, ontvangen leerlingen een melding wanneer de publicatiestatus van een van hun geüploade bestanden wijzigt.';
$string['notifyteacher'] = 'Stuur een melding naar leraren over ingestuurde bestanden';
$string['notifyteacher_help'] = 'Wanneer dit is ingeschakeld, ontvangen leraren een melding wanneer leerlingen een bestand uploaden.';
$string['obtainapproval_automatic'] = 'Automatisch';
$string['obtainapproval_required'] = 'Vereist';
$string['obtaingroupapproval'] = 'Goedkeuring door groep';
$string['obtaingroupapproval_admin'] = 'Standaardinstelling voor groepsgoedkeuring';
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
$string['withselected'] = 'Met geselecteerde...';
$string['zipusers'] = 'Download als ZIP';
