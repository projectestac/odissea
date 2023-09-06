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
 * Strings for component 'checklist', language 'nl', version '4.1'.
 *
 * @package     checklist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomments'] = 'Maak opmerkingen';
$string['additem'] = 'Toevoegen';
$string['additemalt'] = 'Voeg een nieuwe item toe aan de lijst.';
$string['additemhere'] = 'Voeg een nieuw item toe na dit item.';
$string['addownitems'] = 'Voeg eigen items toe.';
$string['addownitems-stop'] = 'Stop toevoegen van eigen items';
$string['allowmodulelinks'] = 'Sta module-links toe';
$string['anygrade'] = 'Elke';
$string['anygrouping'] = 'Elke groepering';
$string['autopopulate'] = 'Toon cursusmodules in de controlelijst';
$string['autopopulate_help'] = 'Dit voegt automatisch een lijst toe in de controlelijst van alle bronnen en activiteiten in de huidige cursus.<br />
Deze lijst wordt bijgewerkt met eventuele wijzigingen in de cursus, telkens wanneer je de pagina \'Bewerken\' voor de controlelijst bezoekt.<br />
Items uit de lijst kunnen worden verborgen, door op het \'Verberg\'-icoon ernaast te klikken.<br />
Als je de automatische items uit de lijst wilt verwijderen, wijzig je deze optie terug naar \'Nee\' en klik je op \'Verwijder cursus module items\' op de pagina \'Bewerken\'.';
$string['autoupdate'] = 'Vink af als modules zijn afgerond';
$string['autoupdate2'] = 'Vink af als cursussen of modules zijn afgerond';
$string['autoupdate2_help'] = 'Dit zal automatisch items uit jouw controlelijst afvinken als je de betreffende activiteit in de cursus afrondt.<br />
Als het bijhouden van voltooien van een specifieke activiteit, dat gebruikt wordt om het onderdeel af te vinken in de lijst, is ingeschakeld <br> In het andere geval, "afronden" van een activiteit is onderling verschillend - "bekijk" een bron, "voeg toe" een test of opdracht, "plaats" op een forum of neem deel aan een chat, enz. (Om te weten welke details een activiteit markeert als "voltooid", vraag de site-beheerder in het bestand \'mod/checklist/classes/local/autoupdate.php\' te kijken)<br> Als een item gekoppeld is aan een cursus en die cursus heeft activiteitsvoltooing daarvoor ingeschakeld, dan wordt het item bijgewerkt wanneer die cursus als voltooid is gemarkeerd.';
$string['autoupdate_help'] = 'Dit zal automatisch items uit jouw controlelijst afvinken als u de betreffende activiteit in de cursus voltooit.<br />
Als het bijhouden van voltooien van een specifieke activiteit is ingeschakeld, dan wordt dat gebruikt om het onderdeel af te vinken in de lijst. <br>
In het andere geval is het \'voltooien van een activiteit is verschillend van activiteit tot activiteit - \'bekijk\' een bron, \'insturen voor een test of opdracht, "plaats" op een forum of neem deel aan een chat, enz. (Vraag de site-beheerder in het bestand \'mod/checklist/classes/local/autoupdate.php\' te kijken om te weten welke details een activiteit als \'voltooid\' markeert)<br>';
$string['autoupdatenote'] = 'Het cijfer voor de "leerling" wordt automatisch geüpdatet -  er worden geen updates getoond voor de controlelijsten "Alleen leraren".';
$string['autoupdatewarning_both'] = 'Er zijn items op deze lijst die automatisch worden bijgewerkt (als leerlingen de bijbehorende activiteit voltooien). Aangezien dit een \'leerling en leraar\' controlelijst is, worden de voortgangsbalken niet bijgewerkt totdat een leraar akkoord gaat met de gegeven cijfers.';
$string['autoupdatewarning_student'] = 'Er zijn items op deze lijst die automatisch worden bijgewerkt (als leerlingen de bijbehorende activiteit voltooien).';
$string['autoupdatewarning_teacher'] = 'Er zijn items op deze lijst die automatisch worden bijgewerkt (als leerlingen de bijbehorende activiteit voltooien).';
$string['calendardescription'] = 'Deze gebeurtenis was toegevoegd door de controlelijst: {$a}';
$string['canceledititem'] = 'Annuleren.';
$string['changetextcolour'] = 'Volgende tekstkleur';
$string['checkeditemsdeleted'] = 'Aangevinkte items verwijderd';
$string['checklist'] = 'controlelijst';
$string['checklist:addinstance'] = 'Voeg een nieuwe controlelijst toe';
$string['checklist:edit'] = 'Maak en wijzig controlelijst';
$string['checklist:emailoncomplete'] = 'Ontvang een e-mail als voltooid is';
$string['checklist:preview'] = 'Een controlelijst bekijken';
$string['checklist:updatelocked'] = 'Vergrendelde controlelijstmarkeringen wijzigen';
$string['checklist:updateother'] = 'Wijzig controlelijstmarkeringen van leerlingen';
$string['checklist:updateown'] = 'Wijzig eigen controlelijstmarkeringen';
$string['checklist:viewmenteereports'] = 'Bekijk (alleen maar) voortgang van de mentor';
$string['checklist:viewreports'] = 'Bekijk voortgang leerlingen';
$string['checklistautoupdate'] = 'Sta controlelijst toe om automatisch te updaten';
$string['checklistfor'] = 'Controlelijst voor';
$string['checklistintro'] = 'Introductie';
$string['checklistsettings'] = 'Instellingen';
$string['checks'] = 'Vinkjes';
$string['choosecourse'] = 'Kies cursus...';
$string['comments'] = 'Opmerkingen';
$string['completiondetail:items'] = 'Afvinkitems: {$a}';
$string['completiondetail:percent'] = 'Afvinkitems: {$a}%';
$string['completionpercent'] = 'Percentage van items die afgevinkt moeten zijn:';
$string['completionpercentgroup'] = 'Vereist afgevinkt te worden';
$string['configchecklistautoupdate'] = 'Voor je dit toestaat moet je enkele wijzigingen aanbrengen in de core Moodle-code. Zie mod/checklist/README.txt voor details';
$string['configshowcompletemymoodle'] = 'Als dit niet afgevinkt is, dan zullen voltooide controlelijsten niet op de Moodle Startpagina getoond worden';
$string['configshowmymoodle'] = 'Als dit niet afgevinkt is, dan zullen controlelijst-activiteiten (met progressiebalk) niet meer op de Moodle Startpagina getoond worden';
$string['configshowupdateablemymoodle'] = 'Als dit afgevinkt is, dan zullen enkel aanpasbare controlelijsten getoond worden op de Moodle Startpagina';
$string['confirmdeleteitem'] = 'Weet u zeker dat u dit item permanent wilt verwijderen?';
$string['deleteitem'] = 'Verwijder dit item.';
$string['duedatesoncalendar'] = 'Zet einddatum op kalender';
$string['edit'] = 'Wijzig controlelijst';
$string['editchecks'] = 'Wijzig checks';
$string['editdatesstart'] = 'Wijzig datums';
$string['editdatesstop'] = 'Einde wijzigen';
$string['edititem'] = 'Wijzig dit item';
$string['emailoncomplete'] = 'Stuur een e-mail wanneer de controlelijst is voltooid:';
$string['emailoncomplete_help'] = 'Wanneer een controlelijst is voltooid, kan er een melding per mail worden gestuurd: aan de leerling die hem heeft voltooid, aan alle leraren in de cursus of aan beide.<br />
Een site-beheerder kan instellen wie deze mail ontvangt met het recht \'mod:checklist/emailoncomplete\' - standaard hebben alle leraren en leraren (niet bewerken) dit recht.';
$string['emailoncompletebody'] = 'Gebruiker {$a->user} heeft controlelijst \'{$a->checklist}\' in de cursus \'{$a->coursename}\' afgerond. Bekijk de controlelijst hier:';
$string['emailoncompletebodyown'] = 'Je hebt de controlelijst \'{$a->checklist}\' in de cursus \'{$a->coursename}\' voltooid. Bekijk de controlelijst hier:';
$string['emailoncompletesubject'] = 'Gebruiker {$a->user} heeft de controlelijst \'{$a->checklist}\' voltooid.';
$string['emailoncompletesubjectown'] = 'Je hebt de controlelijst \'{$a->checklist}\' voltooid.';
$string['enterurl'] = 'Geef URL...';
$string['errorchecklistitemnotvalid'] = 'Checklist item id hoort niet bij deze cursusmodule!';
$string['eventchecklistcomplete'] = 'Controlelijst afgerond';
$string['eventeditpageviewed'] = 'Bewerk pagina bekeken';
$string['eventreportviewed'] = 'Rapport bekeken';
$string['eventstudentchecksupdated'] = 'Leerlingcontrole geüpdatet';
$string['eventteacherchecksupdated'] = 'Lerarencontrole geüpdatet';
$string['export'] = 'Exporteer items';
$string['forceupdate'] = 'Pas controles aan voor alle automatische items';
$string['gradetocomplete'] = 'Te voltooien cijfer:';
$string['grouping'] = 'Zichtbaar voor groepering';
$string['guestsno'] = 'U hebt geen toestemming om deze controlelijst te bekijken.';
$string['headingitem'] = 'Dit item is een kop - er zal geen selectievakje naast staan';
$string['import'] = 'Importeer items';
$string['importfile'] = 'Kies te importeren bestand';
$string['importfromcourse'] = 'Hele cursus';
$string['importfromsection'] = 'Huidige sectie';
$string['indentitem'] = 'Item inspringen';
$string['itemcomplete'] = 'Voltooid.';
$string['items'] = 'Controlelijst-items';
$string['itemstype'] = 'Items';
$string['linkcourses'] = 'Items linken aan cursus toestaan';
$string['linkcourses_desc'] = 'Wanneer ingeschakeld, kunnen de checklist-items worden gekoppeld aan cursussen binnen Moodle - ze worden gemarkeerd als voltooid wanneer de bijbehorende cursus is afgerond. Als u deze optie inschakelt, kunnen dit gevolgen hebben voor de prestaties bij het bewerken van controlelijst-items op sites met een groot aantal cursussen.';
$string['linkto'] = 'Link aan';
$string['linktocourse'] = 'Cursus geassocieerd met dit item';
$string['linktomodule'] = 'Activiteit geassocieerd met dit item';
$string['linktourl'] = 'Link geassocieerd met dit item';
$string['lockteachermarks'] = 'Blokkeer cijfers van leraar';
$string['lockteachermarks_help'] = 'Wanneer deze instelling is ingeschakeld zal ze niet kunnen worden wijzigen wanneer de leraar een ja-markering heeft bewaard. Gebruikers met de mogelijkheid \'mod/checklist:updatelocked\' zullen toch deze markering kunnen wijzigen.';
$string['lockteachermarkswarning'] = 'Merk op: als je deze markeringen bewaard hebt, dan zul je de \'ja\'-markeringen niet meer kunnen wijzigen.';
$string['modulename'] = 'Controlelijst';
$string['modulename_help'] = 'Met de controlelijstmodule kan een leraar een controlelijst / \'te doen\' lijst / takenlijst maken die zijn leerlingen doorlopen.';
$string['modulename_link'] = 'mod/checklist/view';
$string['modulenameplural'] = 'Controlelijst';
$string['moveitemdown'] = 'Item lager';
$string['moveitemup'] = 'Item hoger';
$string['noitems'] = 'Geen items in de controlelijst';
$string['onlyenrolled'] = 'Alleen actieve gebruikers';
$string['onlyenrolleddesc'] = 'Indien geselecteerd, worden alleen gebruikers met actieve inschrijvingen weergegeven in checklists (deselecteer om terug te keren naar het oude gedrag)';
$string['openlinkinnewwindow'] = 'In een nieuw venster openen?';
$string['optionalhide'] = 'Verberg optionele items';
$string['optionalitem'] = 'Dit item is optioneel';
$string['optionalshow'] = 'Laat optionele items zien';
$string['or'] = 'OF';
$string['percent'] = 'Percentage van items';
$string['percentcomplete'] = 'Verplichte items';
$string['percentcompleteall'] = 'Alle items';
$string['pluginadministration'] = 'Instellingen controlelijst';
$string['pluginname'] = 'Controlelijst';
$string['preview'] = 'Bekijken';
$string['privacy:metadata:checklist_check'] = 'Informatie over welke checklistitems zijn afgevinkt door de gebruiker (of afgevinkt door een docent voor de gebruiker) op een bepaalde checklist';
$string['privacy:metadata:checklist_check:item'] = 'De ID van het checklistitem dat is afgevinkt';
$string['privacy:metadata:checklist_comment:text'] = 'De tekst van de opmerking';
$string['privacy:metadata:checklist_comment_student:text'] = 'De tekst van de opmerking';
$string['privacy:metadata:checklist_comp_notification:checklistid'] = 'De ID van de controlelijst';
$string['privacy:metadata:checklist_comp_notification:iscomplete'] = '1 voltooid en 0 niet voltooid';
$string['privacy:metadata:checklist_comp_notification:userid'] = 'De ID van de gebruiker die de checklist heeft ingevuld';
$string['privacy:metadata:checklist_item'] = 'Informatie over privé-items die de gebruiker heeft toegevoegd aan de gegeven checklist';
$string['progress'] = 'Voortgang';
$string['removeauto'] = 'Verwijder cursusmodule-items';
$string['report'] = 'Bekijk voortgang';
$string['reporttablesummary'] = 'Deze tabel laat alle items zien die de leerling heeft voltooid';
$string['requireditem'] = 'Dit item is verplicht - het moet worden voltooid';
$string['resetchecklistprogress'] = 'Reset controlelijstvoortgang en persoonlijke items';
$string['savechecks'] = 'Opslaan';
$string['showcolorchooser'] = 'Toon kleur selector';
$string['showcolorchooserdesc'] = 'Toont de kleurkiezer van de lijstelementen in edit.php';
$string['showcompletemymoodle'] = 'Toon voltooide controlelijsten op \'Mijn startpagina\'';
$string['showfulldetails'] = 'Bekijk alle details';
$string['showhidechecked'] = 'Toon/verberg geselecteerde items';
$string['showmymoodle'] = 'Toon controlelijsten op \'Mijn startpagina\'';
$string['showprogressbars'] = 'Bekijk voortgangsbalken';
$string['showupdateablemymoodle'] = 'Toon alleen wijzigbare controlelijsten op \'Mijn startpagina\'';
$string['student_comment_created'] = 'Reactie van leerling gemaakt';
$string['student_comment_updated'] = 'Reactie van leerling geüpdatet';
$string['student_comment_updated_desc'] = 'De gebruiker met id {$a->userid} heeft een opmerking in de checklist bijgewerkt met cursusmodule-id {$a->cmid} om tekst \'{$a->commenttext}\' te hebben';
$string['studentcomments'] = 'Gebruikers kunnen hun eigen opmerkingen toevoegen aan checklistitems';
$string['teacheralongsidecheck'] = 'Leerling en leraar';
$string['teachercomments'] = 'Leraar kan opmerkingen toevoegen.';
$string['teacherdate'] = 'Maak een afspraak met een docent die dit item als laatste heeft geüpdatet';
$string['teacheredit'] = 'Wijzigingen door';
$string['teacherid'] = 'De leraar die als laatste dit cijfer heeft geüpdatet.';
$string['teachermarkno'] = 'De leraar heeft aangegeven dat je dit nog NIET voltooid hebt.';
$string['teachermarkundecided'] = 'De leraar heeft dit nog niet gemarkeerd';
$string['teachermarkyes'] = 'De leraar heeft aangegeven dat je dit voltooid hebt';
$string['teachernoteditcheck'] = 'Alleen leerling';
$string['teacheroverwritecheck'] = 'Alleen leraar';
$string['theme'] = 'Controlelijst-thema';
$string['togglecolumn'] = 'Wissel Kolom';
$string['toggledates'] = 'Wissel namen en datums';
$string['togglerow'] = 'Wissel Rij';
$string['unindentitem'] = 'Item niet inspringen';
$string['update_student_comment_failed'] = 'Reactie van leerling updaten is gefaalt';
$string['updatecompletescore'] = 'Sla voltooiingsgraden op';
$string['updateitem'] = 'Update';
$string['userdate'] = 'Maak een afspraak met een gebruiker die dit item als laatste heeft geüpdatet.';
$string['useritemsallowed'] = 'Gebruiker kan eigen items toevoegen';
$string['useritemsdeleted'] = 'Items van gebruikers verwijderd';
$string['view'] = 'Bekijk controlelijst';
$string['viewall'] = 'Bekijk alle leerlingen';
$string['viewallcancel'] = 'Annuleren';
$string['viewallsave'] = 'Opslaan';
$string['viewsinglereport'] = 'Bekijk voortgang voor deze gebruiker';
$string['viewsingleupdate'] = 'Wijzig voortgang voor deze gebruiker';
$string['yesnooverride'] = 'Ja, kan niet overschrijven';
$string['yesoverride'] = 'Ja, kan overschrijven';
