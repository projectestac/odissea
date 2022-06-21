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
 * Strings for component 'assign', language 'nl', version '3.11'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitydate:submissionsdue'] = 'Sluit op:';
$string['activitydate:submissionsopen'] = 'Geopend vanaf:';
$string['activitydate:submissionsopened'] = 'Geopend:';
$string['activityoverview'] = 'Je hebt opdrachten die nagekeken moeten worden';
$string['addattempt'] = 'Nog een poging toestaan';
$string['addnewattempt'] = 'Een nieuwe poging toevoegen';
$string['addnewattempt_help'] = 'Dit zal een nieuwe lege inzending voor je maken waaraan je dan kunt werken.';
$string['addnewattemptfromprevious'] = 'Een  nieuwe poging toevoegen, gebaseerd op de vorige inzending';
$string['addnewattemptfromprevious_help'] = 'Dit zal de inhoud van je vorige inzending kopiëren naar een nieuwe inzending waaraan je dan verder kunt werken.';
$string['addnewgroupoverride'] = 'Groep overschrijven toevoegen';
$string['addnewuseroverride'] = 'Gebruiker overschrijven toevoegen';
$string['addsubmission'] = 'Inzending toevoegen';
$string['addsubmission_help'] = 'Je hebt nog geen inzending ingediend.';
$string['allocatedmarker'] = 'Toegewezen beoordelaar';
$string['allocatedmarker_help'] = 'Beoordelaar toegewezen aan deze inzending.';
$string['allowsubmissions'] = 'Sta de gebruiker toe om inzendingen te blijven maken voor deze opdracht.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'De opdrachtdetails en het instuurformulier zullen beschikbaar zijn vanaf <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Insturen toestaan vanaf';
$string['allowsubmissionsfromdate_help'] = 'Indien ingeschakeld zullen leerlingen niet kunnen insturen voor deze datum. Indien uitgeschakeld zullen leerlingen hun opdracht onmiddellijk kunnen insturen.';
$string['allowsubmissionsfromdatesummary'] = 'Deze opdracht zal inzendingen ontvangen vanaf <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'Sta het wijzigen van ingestuurde opdrachten toe';
$string['alwaysshowdescription'] = 'Toon de beschrijving altijd';
$string['alwaysshowdescription_help'] = 'Indien uitgeschakeld, zal de opdrachtbeschrijving voor de leerlingen pas zichtbaar worden vanaf de "Insturen toestaan vanaf"-datum.';
$string['applytoteam'] = 'Cijfers en feedback aan de hele groep geven';
$string['assign:addinstance'] = 'Voeg een nieuwe opdracht toe';
$string['assign:editothersubmission'] = 'Bewerk een inzending van een andere leerling';
$string['assign:exportownsubmission'] = 'Exporteer je opdracht';
$string['assign:grade'] = 'Beoordeel opdracht';
$string['assign:grantextension'] = 'Geef extra tijd';
$string['assign:manageallocations'] = 'Beheer toegewezen beoordelaars';
$string['assign:managegrades'] = 'Bekijk cijfers en geef ze vrij';
$string['assign:manageoverrides'] = 'Beheer opdrachtoverschrijvingen';
$string['assign:receivegradernotifications'] = 'Ontvang meldingen van de beoordelaar';
$string['assign:releasegrades'] = 'Geef cijfers vrij';
$string['assign:revealidentities'] = 'Identiteit leerlingen tonen';
$string['assign:reviewgrades'] = 'Bekijk cijfers';
$string['assign:showhiddengrader'] = 'Zie de identiteit van een verborgen beoordeler';
$string['assign:submit'] = 'Stuur opdracht in';
$string['assign:view'] = 'Bekijk opdracht';
$string['assign:viewblinddetails'] = 'Bekijk de identiteit van de leerling wanneer anoniem insturen is ingeschakeld';
$string['assign:viewgrades'] = 'Bekijk cijfers';
$string['assign:viewownsubmissionsummary'] = 'Bekijk samenvatting van eigen inzending';
$string['assignfeedback'] = 'Feedback plugin';
$string['assignfeedbackpluginname'] = 'Feedback plugin';
$string['assignmentisdue'] = 'Opdracht moet worden ingeleverd';
$string['assignmentmail'] = '{$a->grader} heeft feedback gepost voor je ingestuurde opdracht voor \'{$a->assignment}\'

Je kunt de feedback nalezen onderaan je ingestuurde opdracht: {$a->url}';
$string['assignmentmailhtml'] = '<p>{$a->grader} heeft feedback gepost voor je ingestuurde opdracht voor <i>\'{$a->assignment}\'</i></p>

<p>Je kunt de feedback nalezen onderaan je <a href="{$a->url}">ingestuurde opdracht</a></p>';
$string['assignmentmailsmall'] = '{$a->grader} heeft feedback gepost voor je ingestuurde opdracht voor \'{$a->assignment}\'
Je kunt de feedback nalezen onderaan je ingestuurde opdracht';
$string['assignmentname'] = 'Naam van de opdracht';
$string['assignmentplugins'] = 'Opdracht plugins';
$string['assignmentsperpage'] = 'Opdrachten per pagina';
$string['assignsubmission'] = 'Inzendingsplugin';
$string['assignsubmissionpluginname'] = 'Inzendingsplugin';
$string['attemptheading'] = 'Poging {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Vorige pogingen';
$string['attemptnumber'] = 'Pogingnummer';
$string['attemptreopenmethod'] = 'Bijkomende pogingen';
$string['attemptreopenmethod_help'] = 'Deze instelling bepaalt of een leerling bijkomende pogingen kan insturen voor de opdracht. Voor elke inzending wordt de poging, het cijfer en de feedback bewaard en die kan bekeken worden door leraar en leerling.
De beschikbare opties zijn:

* Nooit - slechts één inzending mogelijk.
* Manueel - er kunnen bijkomende pogingen toegestaan worden door een leraar.
* Automatisch tot geslaagd - de leerling kan automatisch meer pogingen insturen tot de leerling een cijfer behaalt dat ingesteld is als cesuur in het cijferlijst voor deze opdracht.';
$string['attemptreopenmethod_manual'] = 'Manueel';
$string['attemptreopenmethod_none'] = 'Nooit';
$string['attemptreopenmethod_untilpass'] = 'Automatisch tot geslaagd';
$string['attemptsettings'] = 'Poginginstellingen';
$string['availability'] = 'Beschikbaarheid';
$string['backtoassignment'] = 'Terug naar opdracht';
$string['batchoperationconfirmaddattempt'] = 'Nog een poging toestaan voor de geselecteerde inzendingen?';
$string['batchoperationconfirmdownloadselected'] = 'Geselecteerde inzendingen downloaden?';
$string['batchoperationconfirmgrantextension'] = 'Geef extra tijd voor alle';
$string['batchoperationconfirmlock'] = 'Blokkeer alle geselecteerde inzendingen?';
$string['batchoperationconfirmremovesubmission'] = 'Weet je zeker dat je de geselecteerde opdrachten wilt verwijderen?';
$string['batchoperationconfirmreverttodraft'] = 'Alle geselecteerde inzendingen terug naar kladwerk zetten?';
$string['batchoperationconfirmsetmarkingallocation'] = 'Beoordelaars toewijzen voor alle geselecteerde inzendingen?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'De status van de beoordelings-workflow voor alle geselecteerde inzendingen instellen?';
$string['batchoperationconfirmunlock'] = 'Alle geselecteerde opdrachten deblokkeren?';
$string['batchoperationlock'] = 'blokkeer inzendingen';
$string['batchoperationreverttodraft'] = 'inzendingen terugdraaien naar kladwerk';
$string['batchoperationsdescription'] = 'Met geselecteerde...';
$string['batchoperationunlock'] = 'deblokkeer inzendingen';
$string['batchsetallocatedmarker'] = 'Wijs een beoordelaar toe aan {$a} geselecteerde gebruiker(s).';
$string['batchsetmarkingworkflowstateforusers'] = 'Stel de status van de beoordelings-workflow in voor {$a} geselecteerde gebruiker(s)';
$string['blindmarking'] = 'Anoniem insturen';
$string['blindmarking_help'] = 'Anoniem insturen verbergt de identiteit van leerlingen voor de beoordelaars. De instellingen voor anoniem insturen zullen geblokkeerd worden als er minstens één inzending of één beoordeling is gebeurd voor deze opdracht.';
$string['blindmarkingenabledwarning'] = 'Voor deze activiteit is anoniem insturen ingeschakeld. Cijfers zullen niet aan het cijferboek toegevoegd worden tot de identiteit van de leerlingen vrijgegeven is via het actiemenu van het beoordelen.';
$string['cachedef_overrides'] = 'Informatie gebruiker- en groepsoverschrijving';
$string['calendardue'] = '{$a} moet worden ingeleverd';
$string['calendargradingdue'] = '{$a} moet worden beoordeeld';
$string['changefilters'] = 'Wijzig filters';
$string['changeuser'] = 'Wijzig gebruiker';
$string['choosegradingaction'] = 'Beoordelingsactie';
$string['choosemarker'] = 'Kies...';
$string['chooseoperation'] = 'Kies bewerking';
$string['clickexpandreviewpanel'] = 'Klik om overzichtsscherm te openen';
$string['collapsegradepanel'] = 'Beoordelingsscherm inklappen';
$string['collapsereviewpanel'] = 'Overzichtsscherm inklappen';
$string['comment'] = 'Commentaar';
$string['completiondetail:submit'] = 'Stuur in';
$string['completionsubmit'] = 'Leerling moet deze activiteit insturen om ze te voltooien';
$string['configshowrecentsubmissions'] = 'Iedereen kan in rapportages over "Recente activiteit" zien dat er opdrachten zijn ingestuurd.';
$string['confirmbatchgradingoperation'] = 'Weet je zeker dat je wil {$a->operation} voor {$a->count} leerlingen?';
$string['confirmsubmission'] = 'Weet je zeker dat je je werk wil insturen voor beoordeling? Je zult geen wijzigingen meer kunnen aanbrengen.';
$string['confirmsubmissionheading'] = 'Bevestig de inzending';
$string['conversionexception'] = 'Kon opdracht niet converteren. Het probleem was: {$a}.';
$string['couldnotconvertgrade'] = 'Kon beoordelingscijfer van de opdracht niet converteren voor gebruiker {$a}.';
$string['couldnotconvertsubmission'] = 'Kon inzending van de opdracht niet converteren voor gebruiker {$a}';
$string['couldnotcreatecoursemodule'] = 'Kon cursusmodule niet aanmaken.';
$string['couldnotcreatenewassignmentinstance'] = 'Kon geen nieuwe opdrachtinstantie maken.';
$string['couldnotfindassignmenttoupgrade'] = 'Kon geen oude opdracht-instantie vinden om te upgraden.';
$string['crontask'] = 'Achtergrondproces voor de opdracht module';
$string['currentassigngrade'] = 'Huidige cijfer in opdracht';
$string['currentattempt'] = 'Deze poging {$a}';
$string['currentattemptof'] = 'Dit is poging {$a->attemptnumber} ({$a->maxattempts} pogingen zijn toegestaan).';
$string['currentgrade'] = 'Huidig cijfer in de cijferlijst';
$string['cutoffdate'] = 'Afsluitdatum';
$string['cutoffdate_help'] = 'Indien ingesteld zal een opdracht geen inzendingen meer ontvangen na deze datum zonder extra tijd';
$string['cutoffdatecolon'] = 'Einde termijn: {$a}';
$string['cutoffdatefromdatevalidation'] = 'Afsluitdatum kan niet voor startdatum zijn.';
$string['cutoffdatevalidation'] = 'Afsluitdatum kan niet voor einddatum zijn.';
$string['defaultlayout'] = 'Standaard layout herstellen';
$string['defaultsettings'] = 'Standaard opdrachtinstellingen';
$string['defaultsettings_help'] = 'Deze instellingen definiëren de standaardinstellingen voor alle nieuwe opdrachten.';
$string['defaultteam'] = 'Standaard groep';
$string['deleteallsubmissions'] = 'Verwijder alle inzendingen';
$string['description'] = 'Beschrijving';
$string['disabled'] = 'Uitgeschakeld';
$string['downloadall'] = 'Download alle inzendingen';
$string['downloadasfolders'] = 'Download inzendingen in mappen';
$string['downloadasfolders_help'] = 'inzendingen kunnen gedownload worden in mappen. Elke inzending wordt in een aparte map gezet, waarbij de mappenstructuur behouden blijft voor alle onderliggende mappen en waarbij de bestanden niet hernoemd worden.';
$string['downloadselectedsubmissions'] = 'Download geselecteerde inzendingen';
$string['duedate'] = 'Uiterste inleverdatum';
$string['duedate_help'] = 'Dit is wanneer de opdracht moet afgegeven worden. Opdrachten mogen te laat afgegeven worden,  maar zullen dan als te laat gemarkeerd worden. Om te verhinderen dat opdrachten na een bepaalde datum ingestuurd worden, kun je een afsluitdatum instellen.';
$string['duedatecolon'] = 'Sluit op: {$a}';
$string['duedateno'] = 'Geen uiterste inleverdatum';
$string['duedatereached'] = 'De datum waarop deze opdracht moest afgegeven worden is nu voorbij.';
$string['duedatevalidation'] = 'Einddatum kan niet voor startdatum zijn.';
$string['duplicateoverride'] = 'Kopieer overschrijving';
$string['editaction'] = 'Acties...';
$string['editattemptfeedback'] = 'Bewerk cijfer een feedback van poging nummer {$a}';
$string['editingpreviousfeedbackwarning'] = 'Je bewerkt de feedback van een vorige poging. Dit is poging {$a->attemptnumber} van {$a->totalattempts} pogingen.';
$string['editingstatus'] = 'Status bewerken';
$string['editonline'] = 'Bewerk online';
$string['editoverride'] = 'Bewerk overschrijving';
$string['editsubmission'] = 'Bewerk inzending';
$string['editsubmission_help'] = 'Je kunt je inzending nog steeds wijzigen.';
$string['editsubmissionother'] = 'Bewerk inzending voor {$a}';
$string['enabled'] = 'Ingeschakeld';
$string['errornosubmissions'] = 'Er zijn geen inzendingen om te downloaden';
$string['errorquickgradingvsadvancedgrading'] = 'De cijfers werden niet bewaard omdat deze opdracht nu op geavanceerd beoordelen is ingesteld';
$string['errorrecordmodified'] = 'De cijfers werden niet bewaard omdat iemand één of meer gegevens heeft gewijzigd sinds jij de pagina hebt geladen.';
$string['eventallsubmissionsdownloaded'] = 'Alle inzendingen zijn gedownload.';
$string['eventassessablesubmitted'] = 'Er is een inzending ingestuurd.';
$string['eventbatchsetmarkerallocationviewed'] = 'Toewijzing batch set beoordeler  bekeken';
$string['eventbatchsetworkflowstateviewed'] = 'Batch set workflow-status bekeken';
$string['eventextensiongranted'] = 'Er is een verlenging toegestaan.';
$string['eventfeedbackupdated'] = 'Feedback aangepast';
$string['eventfeedbackviewed'] = 'Feedback bekeken';
$string['eventgradingformviewed'] = 'Beoordelingsformulier bekeken';
$string['eventgradingtableviewed'] = 'beoordelingstabel bekeken';
$string['eventidentitiesrevealed'] = 'De identiteiten zijn vrijgegeven.';
$string['eventmarkerupdated'] = 'De toegewezen beoordelaar is aangepast.';
$string['eventoverridecreated'] = 'Opdrachtoverschrijving gemaakt';
$string['eventoverridedeleted'] = 'Opdrachtoverschrijving verwijderd';
$string['eventoverrideupdated'] = 'Opdrachtoverschrijving aangepast';
$string['eventremovesubmissionformviewed'] = 'Verwijder inzendingsbevestiging bekeken.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Bevestigingspagina toon identiteiten bekeken';
$string['eventstatementaccepted'] = 'De gebruiker heeft de gebruikersverklaring van deze inzending aanvaard.';
$string['eventsubmissionconfirmationformviewed'] = 'Formulier bevestig insturen bekeken.';
$string['eventsubmissioncreated'] = 'Inzending gemaakt';
$string['eventsubmissionduplicated'] = 'De gebruiker heeft zijn inzending gedupliceerd.';
$string['eventsubmissionformviewed'] = 'Inzendingsformulier bekeken';
$string['eventsubmissiongraded'] = 'De inzending is beoordeeld.';
$string['eventsubmissionlocked'] = 'De inzendingen zijn geblokkeerd voor een gebruiker.';
$string['eventsubmissionstatusupdated'] = 'De status van de inzending is aangepast.';
$string['eventsubmissionstatusviewed'] = 'De status van de inzending is bekeken.';
$string['eventsubmissionunlocked'] = 'De inzendingen zijn vrijgegeven voor een gebruiker.';
$string['eventsubmissionupdated'] = 'De gebruiker heeft zijn inzending bewaard.';
$string['eventsubmissionviewed'] = 'Inzending bekeken';
$string['eventworkflowstateupdated'] = 'De status van de workflow is aangepast.';
$string['expandreviewpanel'] = 'Beoordelingsscherm openklappen';
$string['extensionduedate'] = 'Extra tijd einddatum';
$string['extensionnotafterduedate'] = 'De extra tijd einddatum moet na de einddatum zijn.';
$string['extensionnotafterfromdate'] = 'De extra tijd einddatum moet na de startdatum zijn';
$string['feedback'] = 'Feedback';
$string['feedbackavailableanonhtml'] = 'Je hebt nieuwe feedback op je
opdracht indiening voor \'<i>{$a->assignment}</i>\'<br /><br />
Je kunt zien dat deze is toegevoegd aan je <a href="{$a->url}"> opdrachtinzending </a>.';
$string['feedbackavailableanonsmall'] = 'Nieuwe feedback voor opdracht {$a->assignment}';
$string['feedbackavailableanontext'] = 'Je hebt nieuwe feedback op je
opdracht indienen voor \'{$a->assignment}\'

Je kunt zien dat het is toegevoegd aan je opdrachtverzending:

       {$a->url}';
$string['feedbackavailablehtml'] = '{$a->username} heeft feedback gegeven op je ingestuurde opdracht voor \'<i>{$a->assignment}</i>\'<br /><br />
Je kunt die bekijken bij je <a href="{$a->url}">ingestuurde opdracht</a>.';
$string['feedbackavailablesmall'] = '{$a->username} heeft feedback gegeven voor opdracht {$a->assignment}';
$string['feedbackavailabletext'] = '{$a->username} heeft feedback gegeven op je ingestuurde opdracht voor \'{$a->assignment}\'

Je kunt die bekijken bij je ingestuurde opdracht:

{$a->url}';
$string['feedbackplugin'] = 'Feedback plugin';
$string['feedbackpluginforgradebook'] = 'Feedbackplugin om opmerkingen naar de cijferlijst te sturen';
$string['feedbackpluginforgradebook_help'] = 'Slechts één opdracht feedbackplugin kan feedback naar de cijferlijst sturen.';
$string['feedbackplugins'] = 'Feedback plugins';
$string['feedbacksettings'] = 'Feedback-instellingen';
$string['feedbacktypes'] = 'Feedbacktypes';
$string['filesubmissions'] = 'Ingestuurde bestanden';
$string['filter'] = 'Filter';
$string['filterdraft'] = 'Ontwerp';
$string['filtergrantedextension'] = 'Verleen verlenging';
$string['filternone'] = 'Geen filter';
$string['filternotsubmitted'] = 'Niet ingestuurd';
$string['filterrequiregrading'] = 'Beoordelen vereist';
$string['filtersubmitted'] = 'Ingestuurd';
$string['fixrescalednullgrades'] = 'Deze opdracht bevat foute cijfers. Je kunt ze  <a href="{$a->link}">automatisch herstellen</a>. Dit kan de cursustotalen wijzigen.';
$string['fixrescalednullgradesconfirm'] = 'Weet je zeker dat je foute cijfers wil herstellen? Alle foute cijfers zullen verwijderd worden. Dit kan je cursustotaal wijzigen.';
$string['fixrescalednullgradesdone'] = 'Cijfers hersteld.';
$string['gradeabovemaximum'] = 'Cijfer moet gelijk zijn aan of kleiner zijn dan {$a}.';
$string['gradebelowzero'] = 'Cijfer moet groter of gelijk zijnj aan nul.';
$string['gradecanbechanged'] = 'Het cijfer kan gewijzigd worden';
$string['gradechangessaveddetail'] = 'De wijzigingen aan het cijfer en feedback werden bewaard';
$string['graded'] = 'Beoordeeld';
$string['gradedby'] = 'Beoordeeld door';
$string['gradedfollowupsubmit'] = 'Beoordeeld - opvolgingsinzending ontvangen';
$string['gradedon'] = 'Beoordeeld op';
$string['gradeitem:submissions'] = 'Inzendingen';
$string['gradelocked'] = 'Dit cijfer is geblokkeerd of overschreven in de cijferlijst.';
$string['gradeoutof'] = 'Cijfer op {$a}';
$string['gradeoutofhelp'] = 'Cijfer';
$string['gradeoutofhelp_help'] = 'Geef hier het cijfer voor de opdracht van de leerling. Je mag ook decimalen gebruiken.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} heeft de inzending voor opdracht <i>{$a->assignment}</i> aangepast om {$a->timeupdated}.<br /><br />
Je kunt ze <a href="{$a->url}"> nakijken op de website</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} heeft de ingestuurde taak aangepast voor opdracht {$a->assignment}';
$string['gradersubmissionupdatedtext'] = '{$a->username} heeft de inzending voor opdracht {$a->assignment} aangepast om {$a->timeupdated}.

Je kunt ze hier vinden:

{$a->url}';
$string['gradestudent'] = 'Beoordeel leerling: (id={$a->id}, naam={$a->fullname}).';
$string['gradeuser'] = 'Cijfer {$a}';
$string['grading'] = 'Beoordeling';
$string['gradingchangessaved'] = 'De cijferwijzigingen zijn bewaard';
$string['gradingduedate'] = 'Herinner me eraan om te beoordelen tegen';
$string['gradingduedate_help'] = 'De verwachte datum waarop het beoordelen van de inzending  moet worden voltooid. Deze datum wordt gebruikt om prioriteiten te melden op de startpagina voor leraren.';
$string['gradingdueduedatevalidation'] = 'De "herinner me eraan om te beoordelen tegen"-datum kan niet vroeger zijn dan de Uiterste inleverdatum.';
$string['gradingduefromdatevalidation'] = 'De "herinner me eraan om te beoordelen tegen"-datum kan niet vroeger zijn dan de "insturen toestaan vanaf"-datum.';
$string['gradingmethodpreview'] = 'Beoordelingscriteria';
$string['gradingoptions'] = 'Opties';
$string['gradingstatus'] = 'Beoordelingsstatus';
$string['gradingstudent'] = 'Leerling beoordelen';
$string['gradingsummary'] = 'Samenvatting beoordeling';
$string['grantextension'] = 'Geef extra tijd';
$string['grantextensionforusers'] = 'Geef extra tijd voor {$a} leerlingen';
$string['groupoverrides'] = 'Groepsoverschrijvingen';
$string['groupoverridesdeleted'] = 'Groepsoverschrijvingen verwijderd';
$string['groupsnone'] = 'Er zijn geen groepen waar je toegang toe hebt.';
$string['groupsubmissionsettings'] = 'Instellingen groepswerk';
$string['hiddenuser'] = 'Deelnemer';
$string['hidegrader'] = 'Verberg identiteit van beoordelaar voor leerlingen';
$string['hidegrader_help'] = 'Indien ingeschakeld wordt de identiteit van een gebruiker die een opdracht beoordeelt, verborgen, zodat leerlingen niet kunnen zien wie hun werk heeft gemarkeerd.

Merk op dat deze instelling geen invloed heeft op het veld voor opmerkingen op de beoordelingspagina.';
$string['hideshow'] = 'Verberg/toon';
$string['inactiveoverridehelp'] = '* Deze overschrijving is niet actief omdat de toegang tot de activiteit voor deze gebruiker beperkt is. Dit kan te wijten zijn aan roltoewijzingen, andere beperkingen of omdat de activiteit verborgen is.';
$string['indicator:cognitivedepth'] = 'Opdracht cognitief';
$string['indicator:cognitivedepth_help'] = 'Deze indicator is gebaseerd op de cognitieve diepte die door de leerling is bereikt in een opdracht-activiteit.';
$string['indicator:cognitivedepthdef'] = 'Cognitieve Opdracht';
$string['indicator:cognitivedepthdef_help'] = 'De deelnemer heeft dit percentage van de cognitieve betrokkenheid van de toewijzingsactiviteiten tijdens dit analyse-interval bereikt (Niveaus = Geen weergave, Bekijken, Verzenden, Feedback bekijken, Reageren op feedback, Opnieuw verzenden na het bekijken van feedback)';
$string['indicator:socialbreadth'] = 'Opdracht sociaal';
$string['indicator:socialbreadth_help'] = 'Deze indicator is gebaseerd op de sociale breedte die door de leerling is bereikt in een opdracht-activiteit.';
$string['indicator:socialbreadthdef'] = 'Sociale Opdracht';
$string['indicator:socialbreadthdef_help'] = 'De deelnemer heeft dit percentage van de maatschappelijke betrokkenheid van de toewijzingsactiviteiten tijdens dit analyse-interval bereikt (niveaus = geen deelname, alleen deelnemer, deelnemer met anderen)';
$string['instructionfiles'] = 'Instructiebestanden';
$string['introattachments'] = 'Extra bestanden';
$string['introattachments_help'] = 'Er kunnen extra bestanden voor het gebruik in de opdracht, zoals antwoordsjablonen, toegevoegd worden. Onder de beschrijving van de opdracht zullen er dan downloadlinks verschijnen.';
$string['invalidfloatforgrade'] = 'De gegeven beoordeling kon niet begrepen worden: {$a}';
$string['invalidgradeforscale'] = 'De gegeven beoordeling was niet geldig in de gebruikte schaal';
$string['invalidoverrideid'] = 'Ongeldig overschrijvings-ID';
$string['lastmodifiedgrade'] = 'Laatst gewijzigd (beoordeling)';
$string['lastmodifiedsubmission'] = 'Laatst gewijzigd (inzending)';
$string['latesubmissions'] = 'Te late inzendingen';
$string['latesubmissionsaccepted'] = 'Toegestaan tot {$a}';
$string['loading'] = 'Laden ...';
$string['locksubmissionforstudent'] = 'Verhinder het insturen voor leerling (id={$a->id}, naam={$a->fullname}).';
$string['locksubmissions'] = 'Blokkeer insturen';
$string['manageassignfeedbackplugins'] = 'Beheer opdracht feedback plugins';
$string['manageassignsubmissionplugins'] = 'Beheer opdracht instuur plugins';
$string['marker'] = 'Beoordelaar';
$string['markerfilter'] = 'Filter beoordelaars';
$string['markerfilternomarker'] = 'Geen beoordelaar';
$string['markingallocation'] = 'Gebruik toewijzing beoordelaars';
$string['markingallocation_help'] = 'Indien dit ingeschakeld is samen met de beoordelingsworkflow, dan kun je beoordelaars toewijzen aan individuele leerlingen.';
$string['markingworkflow'] = 'Gebruik beoordelings-workflow';
$string['markingworkflow_help'] = 'Indien ingeschakeld zullen beoordelingen door een workflow gaan, vooraleer ze aan leerlingen vrijgegeven worden. Dit laat meerdere beoordelingssessies toe zodat de cijfers tegelijk aan alle leerlingen gegeven kunnen worden.';
$string['markingworkflowstate'] = 'Status van de beoordelings-workflow';
$string['markingworkflowstate_help'] = 'De lijst van workflow statussen waaruit je kunt kiezen (afhankelijk van je rechten):

* Niet beoordeeld - de beoordelaar is nog niet begonnen
* Wordt beoordeeld - de beoordelaar is begonnen, maar nog niet klaar
* Beoordelen voltooid - de beoordelaar is klaar, maar kan misschien nog eens herbekijken voor controle of correcties
* Wordt nagekeken - de beoordeling is nu bij de leraar die verantwoordelijk is voor de kwaliteitscontrole
* Klaar om vrij te geven - de verantwoordelijke leraar heeft de beoordeling nagekeken maar wacht voor hij de leerlingen toegang geeft tot de beoordeling
* Vrijgegeven - de leerling kan cijfers en feedback bekijken';
$string['markingworkflowstateinmarking'] = 'Wordt beoordeeld';
$string['markingworkflowstateinreview'] = 'Wordt nagelezen';
$string['markingworkflowstatenotmarked'] = 'Niet beoordeeld';
$string['markingworkflowstatereadyforrelease'] = 'Klaar om vrijgegeven te worden';
$string['markingworkflowstatereadyforreview'] = 'Beoordeling klaar';
$string['markingworkflowstatereleased'] = 'Vrijgegeven';
$string['maxattempts'] = 'Maximum aantal pogingen';
$string['maxattempts_help'] = 'Het maximale aantal pogingen die een leerling kan doen. Na dit aantal pogingen zal een leerling zijn poging niet meer kunnen openen.';
$string['maxgrade'] = 'Maximaal cijfer';
$string['maxperpage'] = 'Maximaal aantal opdrachten per pagina';
$string['maxperpage_help'] = 'Het maximaal aantal opdrachten die een beoordeler kan tonen op de opdracht beoordelingspagina. Nuttig om te verhinderen dat de pagina een time-out fout geeft bij cursussen met heel veel deelnemers.';
$string['messageprovider:assign_notification'] = 'Opdracht meldingen';
$string['modulename'] = 'Opdracht';
$string['modulename_help'] = 'Met de opdrachtactiviteit kan een leraar taken geven aan leerlingen, hun werk ophalen en cijfers en feedback geven.

Leerlingen kunnen gelijk welke digitale inhoud (bestanden), zoals documenten gemaakt met tekstverwerkers, rekenbladen, afbeeldingen, audio- en videobestanden, insturen. Wat eveneens kan, of als aanvulling, is dat leerlingen rechtstreeks tekst typen in een tekstformulier. Een opdracht kan ook gebruikt worden om leerlingen te herinneren aan een niet-digitale opdracht, zoals een kunstwerk.

Bij het beoordelen van opdrachten, kunnen leraren feedback geven en bestanden uploaden, zoals beoordeelde bestanden van leerlingen, documenten met opmerkingen of audiobestanden met gesproken tekst. Opdrachten kunnen beoordeeld worden met een numerieke of aangepaste schaal of met geavanceerde beoordelingsmethodes zoals een rubric. Het totaalcijfer wordt opgenomen in de cijferlijst.';
$string['modulenameplural'] = 'Opdrachten';
$string['moreusers'] = '{$a} meer...';
$string['multipleteams'] = 'Lid van meer dan één groep';
$string['multipleteams_desc'] = 'De opdracht vereist insturen in groep. Je bent lid van meer dan één groep. Om te kunnen insturen mag je slechts lid zijn van één groep. Neem contact op met je leraar om je groepslidmaatschap aan te passen.';
$string['multipleteamsgrader'] = 'Lid van meer dan één groep, dus kan geen inzendingen doen.';
$string['mysubmission'] = 'Status van jouw opdracht:&nbsp;';
$string['newsubmissions'] = 'Ingestuurde opdrachten';
$string['nextuser'] = 'Volgende gebruiker';
$string['noattempt'] = 'Geen poging';
$string['noclose'] = 'Geen sluitdatum';
$string['nofiles'] = 'Geen bestanden';
$string['nofilters'] = 'Geen filters';
$string['nograde'] = 'Geen cijfer.';
$string['nolatesubmissions'] = 'Er worden geen te late ingestuurde opdrachten meer aanvaard.';
$string['nomoresubmissionsaccepted'] = 'Enkel toegestaan voor deelnemers die extra tijd gekregen hebben.';
$string['none'] = 'Geen';
$string['noonlinesubmissions'] = 'Voor deze opdracht hoef je niets online in te dienen';
$string['noopen'] = 'Geen openingsdatum';
$string['nooverridedata'] = 'Je moet minstens één van de opdrachtinstellingen overschrijven.';
$string['nosavebutnext'] = 'Volgende';
$string['nosubmission'] = 'Er is nog niets ingestuurd voor deze opdracht';
$string['nosubmissionsacceptedafter'] = 'Er worden geen opdrachten meer aanvaard na';
$string['noteam'] = 'Lid van geen enkele groep';
$string['noteam_desc'] = 'De opdracht vereist insturen in groep. Je bent van geen enkele groep lid, dus je kan niets insturen. Neem contact op met je leraar om in een groep gezet te worden.';
$string['noteamgrader'] = 'Lid van geen enkele groep, dus kan geen inzendingen doen.';
$string['notgraded'] = 'Niet beoordeeld';
$string['notgradedyet'] = 'Nog niet beoordeeld';
$string['notifications'] = 'Meldingen';
$string['notsubmittedyet'] = 'Nog niet ingestuurd';
$string['nousers'] = 'Geen gebruikers';
$string['nousersselected'] = 'Geen gebruikers geselecteerd';
$string['numberofdraftsubmissions'] = 'Kladwerken';
$string['numberofparticipants'] = 'Deelnemers';
$string['numberofsubmissionsneedgrading'] = 'Beoordeling nodig';
$string['numberofsubmittedassignments'] = 'Ingestuurd';
$string['numberofteams'] = 'Groepen';
$string['offline'] = 'Je hoeft niets online in te sturen';
$string['open'] = 'Open';
$string['outlinegrade'] = 'Cijfer: {$a}';
$string['outof'] = '{$a->current} van {$a->total}';
$string['overdue'] = 'Opdracht te laat ingestuurd: {$a}';
$string['override'] = 'Overschrijf';
$string['overridedeletegroupsure'] = 'Weet je zeker dat je de overschrijving voor groep {$a} wil verwijderen?';
$string['overridedeleteusersure'] = 'Weet je zeker dat je de overschrijving voor gebruiker {$a} wil verwijderen?';
$string['overridegroup'] = 'Groep overschrijven';
$string['overridegroupeventname'] = '{$a->assign} - {$a->group}';
$string['overrides'] = 'Overschrijvingen';
$string['overrideuser'] = 'Overschrijf gebruiker';
$string['overrideusereventname'] = '{$a->assign} - Overschrijving';
$string['page-mod-assign-view'] = 'Opdrachtmodule hoofdpagina';
$string['page-mod-assign-x'] = 'Elke opdracht module pagina';
$string['paramtimeremaining'] = '{$a} overgebleven';
$string['participant'] = 'Deelnemer';
$string['pluginadministration'] = 'Opdrachtbeheer';
$string['pluginname'] = 'Opdracht';
$string['preventsubmissionnotingroup'] = 'Groeplidmaatschap vereist om een inzending te maken';
$string['preventsubmissionnotingroup_help'] = 'Indien ingeschakeld zullen enkel gebruikers die lid zijn van een groep een inzending kunnen maken.';
$string['preventsubmissions'] = 'Verhinder de gebruiker om meer in te sturen voor deze opdracht.';
$string['preventsubmissionsshort'] = 'Verhinder het wijzigen van ingestuurde opdrachten';
$string['previous'] = 'Vorige';
$string['previoususer'] = 'Vorige gebruiker';
$string['privacy:attemptpath'] = 'poging {$a}';
$string['privacy:blindmarkingidentifier'] = 'De identificatie, gebruikt voor anoniem insturen';
$string['privacy:gradepath'] = 'cijfer';
$string['privacy:metadata:assigndownloadasfolders'] = 'Een gebruikersvoorkeur waarmee ingesteld wordt of meerdere inzendingen in mappen moeten gedownload worden';
$string['privacy:metadata:assignfeedbackpluginsummary'] = 'Feedback voor de opdracht.';
$string['privacy:metadata:assignfilter'] = 'Filteropties zoals ingestuurd, niet ingestuurd, wacht op beoordeling en langere tijd gegeven.';
$string['privacy:metadata:assigngrades'] = 'Bewaart gebruikerscijfers voor de opdracht';
$string['privacy:metadata:assignmarkerfilter'] = 'Filter het toewijzingsoverzicht met de toegewezen markering.';
$string['privacy:metadata:assignmentid'] = 'Opdracht-ID';
$string['privacy:metadata:assignmessageexplanation'] = 'Berichten worden naar leerlingen gestuurd via het berichtensysteem.';
$string['privacy:metadata:assignoverrides'] = 'Bewaart overschrijvingsinformatie voor de opdracht';
$string['privacy:metadata:assignperpage'] = 'Aantal opdrachten getoond per pagina.';
$string['privacy:metadata:assignquickgrading'] = 'Om in te stellen of snel beoordelen gebruikt wordt of niet.';
$string['privacy:metadata:assignsubmissiondetail'] = 'Bewaart inzendingsinformatie van gebruikers';
$string['privacy:metadata:assignsubmissionpluginsummary'] = 'Inzendingsgegevens voor de opdracht.';
$string['privacy:metadata:assignuserflags'] = 'Bewaart metagegevens over gebruikers, zoals verlengde tijd';
$string['privacy:metadata:assignusermapping'] = 'De koppeling voor anoniem insturen';
$string['privacy:metadata:assignworkflowfilter'] = 'Filter op de verschillende stadia van de workflow.';
$string['privacy:metadata:grade'] = 'Het numerieke cijfer voor de inzending van de opdracht. Kan bepaald worden door schalen, geavanceerde beoordelingsformulieren enz., maar zal altijd terug geconverteerd worden naar een decimaal cijfer.';
$string['privacy:metadata:grader'] = 'De gebruikersID van de beoordelende persoon.';
$string['privacy:metadata:groupid'] = 'GroepsID waarvan de gebruiker lid is.';
$string['privacy:metadata:latest'] = 'Vereenvoudigd vragen die enkel informatie willen over de laatste poging.';
$string['privacy:metadata:mailed'] = 'Heeft deze gebruiker al e-mail ontvangen?';
$string['privacy:metadata:timecreated'] = 'Aanmaaktijd';
$string['privacy:metadata:userid'] = 'ID van de gebruiker.';
$string['privacy:studentpath'] = 'Inzendingen van leerlingen';
$string['privacy:submissionpath'] = 'inzending';
$string['quickgrading'] = 'Snel beoordelen';
$string['quickgrading_help'] = 'Met snel beoordelen kun je rechtstreeks cijfers geven in de tabel met ingstuurde opdrachten. Snel beoordelen is niet compatibel met geavanceerde beoordelingsmethodes en wordt niet aangeraden wanneer er meerdere beoordelaars zijn.';
$string['quickgradingchangessaved'] = 'De wijzigingen aan de cijfers zijn bewaard';
$string['quickgradingresult'] = 'Snel beoordelen';
$string['recordid'] = 'Identificatie';
$string['relativedatessubmissionduedateafter'] = '{$a->dateiffstr} na het begin van de cursus';
$string['relativedatessubmissionduedatebefore'] = '{$a->dateiffstr} voor het begin van de cursus';
$string['relativedatessubmissiontimeleft'] = 'Berekend voor elke leerling';
$string['removeallgroupoverrides'] = 'Verwijder alle groepsoverschrijvingen';
$string['removealluseroverrides'] = 'Verwijder alle gebruikersoverschrijvingen';
$string['removesubmission'] = 'Verwijder ingestuurde opdrachten';
$string['removesubmissionconfirm'] = 'Weet je zeker dat u de indieningsgegevens wilt verwijderen?';
$string['removesubmissionconfirmforstudent'] = 'Weet je zeker dat je de indieningsgegevens voor leerling {$a} wilt verwijderen?';
$string['removesubmissionforstudent'] = 'Verwijder inzending voor leerling: (id={$a->id}, fullname={$a->fullname}).';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'De optie "Opnieuw openen tot geslaagd" is niet compatibel met de optie anoniem insturen, omdat de cijfers niet in de cijferlijst komen tot de identiteit van de leerling vrijgegeven wordt.';
$string['requireallteammemberssubmit'] = 'Eis dat alle groepsleden insturen';
$string['requireallteammemberssubmit_help'] = 'Indien ingeschakeld moeten alle leden van de groep op de insturen-knop klikken voor de opdracht als ingestuurd beschouwd wordt. Indien uitgeschakeld zal de opdracht van de groep als ingestuurd beschouwd worden als één van de leden van de groep op de instuurknop klikt.';
$string['requiresubmissionstatement'] = 'Eis dat leerlingen de voorwaarden voor insturen aanvaarden.';
$string['requiresubmissionstatement_help'] = 'Eisen dat leerlingen de voorwaarden voor insturen aanvaarden voor deze opdracht.';
$string['revealidentities'] = 'Toon identiteit leerlingen';
$string['revealidentitiesconfirm'] = 'Weet je zeker dat je de identiteit van de leerlingen wil tonen voor deze opdracht? Deze operatie kan niet ongedaan gemaakt worden. Als de identiteit van de leerlingen getoond wordt, dan wordt het cijfer vrijgegeven in de cijferlijst.';
$string['reverttodefaults'] = 'Draai terug naar standaardinstellingen voor de opdracht';
$string['reverttodraft'] = 'Zet de ingestuurde opdracht terug naar kladwerk';
$string['reverttodraftforstudent'] = 'Zet de ingestuurde opdracht terug naar kladwerk voor leerling:  (id={$a->id}, naam={$a->fullname}).';
$string['reverttodraftshort'] = 'Zet de ingestuurde opdracht terug naar kladwerk';
$string['reviewed'] = 'Nagekeken';
$string['save'] = 'Bewaar';
$string['saveallquickgradingchanges'] = 'Bewaar alle "snel beoordelen" wijzigingen';
$string['saveandcontinue'] = 'Bewaar en ga verder';
$string['savechanges'] = 'Bewaar de wijzigingen';
$string['savegradingresult'] = 'Cijfer';
$string['savenext'] = 'Bewaar en toon volgende';
$string['saveoverrideandstay'] = 'Bewaar en maak nog een overschrijving';
$string['savingchanges'] = 'Wijzigingen bewaren ...';
$string['scale'] = 'Schaal';
$string['search:activity'] = 'Opdracht - activiteitsinformatie';
$string['selectedusers'] = 'Geselecteerde gebruikers';
$string['selectlink'] = 'Selecteer...';
$string['selectuser'] = 'Selecteer {$a}';
$string['sendlatenotifications'] = 'Stuur een melding naar de beoordelaars over te laat ingestuurde opdrachten';
$string['sendlatenotifications_help'] = 'Indien ingeschakeld zullen beoordelaars (gewoonlijk leraren) een bericht ontvangen wanneer een leerling een opdracht te laat instuurt. De manier van berichtgeving kan ingesteld worden.';
$string['sendnotifications'] = 'Stuur een melding naar beoordelaars over ingestuurde opdrachten';
$string['sendnotifications_help'] = 'Indien ingeschakeld zullen beoordelaars (gewoonlijk leraren) een bericht ontvangen wanneer een leerling een opdracht instuurt, te vroeg, op tijd en te laat. De manier van berichtgeving kan ingesteld worden.';
$string['sendstudentnotifications'] = 'Verwittig leerling';
$string['sendstudentnotifications_help'] = 'Schakel dit in om  leerlingen een bericht te sturen wanneer hun cijfer of feedback wordt aangepast. Als de opdracht een beoordelings-workflow gebruikt of de cijfers zijn verborgen in het beoordelingsrapport, dan zal het bericht niet verstuurd worden voor het cijfer wordt vrijgegeven.';
$string['sendstudentnotificationsdefault'] = 'Standaardinstelling voor \'Verwittig leerlingen\'';
$string['sendstudentnotificationsdefault_help'] = 'Wanneer je een leerling beoordeelt, wil je dan dat het \'verwittig leerling\' selectievakje standaard is aangevinkt?';
$string['sendsubmissionreceipts'] = 'Stuur ontvangstbewijs naar leerlingen';
$string['sendsubmissionreceipts_help'] = 'Dit schakelt ontvangstbewijzen in voor leerlingen. Leerlingen zullen een melding krijgen, telkens ze met succes een opdracht ingestuurd hebben';
$string['setmarkerallocationforlog'] = 'Stel beoordelaarstoewijzing in: (id={$a->id}, Volledige naam ={$a->fullname}, beoordelaar={$a->marker}).';
$string['setmarkingallocation'] = 'Stel toegewezen beoordelaar in';
$string['setmarkingworkflowstate'] = 'Stel status van de beoordelings-workflow in';
$string['setmarkingworkflowstateforlog'] = 'Stel de status van de beoordelings-workflow in : (id = {$a->id}, volledige naam = {$a->fullname}, status = {$a->state}).';
$string['settings'] = 'Opdracht instellingen';
$string['showrecentsubmissions'] = 'Toon recente inzendingen';
$string['status'] = 'Status';
$string['studentnotificationworkflowstateerror'] = 'De status van de beoordelingsworkflow moet op \'vrijgegeven\' gezet worden om de leerlingen een melding te sturen.';
$string['submission'] = 'Ingestuurde opdracht';
$string['submissioncopiedhtml'] = '<p>Je hebt een kopie gemaakt van je vorige opdrachtinzending voor <i>{$a->assignment}</i>\'</p>
<p>Je kunt de status van je opdracht bekijken bij je <a href="{$a->url}">inzending</a>.</p>';
$string['submissioncopiedsmall'] = 'Je hebt je vorige inzending voor opdracht {$a->assignement} gekopieerd.';
$string['submissioncopiedtext'] = 'Je hebt een kopie gemaakt van je vorige poging voor opdracht \'{$a->assignment}\'.

Je kunt de status van je inzending zien:

{$a->url}';
$string['submissiondrafts'] = 'Leerlingen moeten op de "Instuur"-knop klikken';
$string['submissiondrafts_help'] = 'Indien ingeschakeld, zullen leerlingen op een instuurknop moeten klikken om hun opdracht als voltooid te verklaren. Dit maakt het mogelijk dat leerlingen een kladwerk van de opdracht op het systeem bewaren. Indien deze instelling van "Nee" naar "Ja" gewijzigd wordt, nadat leerlingen al iets ingestuurd hebben, dan zullen die ingestuurde opdrachten als voltooid beschouwd worden.';
$string['submissioneditable'] = 'Leerling kan zijn ingestuurde opdracht bewerken';
$string['submissionempty'] = 'Er is niets ingestuurd';
$string['submissionlog'] = 'Leerling: {$a->fullname}, Status: {$a->status}';
$string['submissionmodified'] = 'Je hebt bestaande instuurgegevens. Verlaat deze pagina en probeer opnieuw.';
$string['submissionmodifiedgroup'] = 'De ingestuurde taak is gewijzigd door iemand anders. Verlaat deze pagina en probeer opnieuw.';
$string['submissionnotcopiedinvalidstatus'] = 'De poging is niet gekopieerd omdat ze bewerkt is sinds ze heropend was.';
$string['submissionnoteditable'] = 'Leerling kan ingestuurde opdracht niet bewerken';
$string['submissionnotready'] = 'De opdracht is niet klaar om ingestuurd te worden:';
$string['submissionplugins'] = 'Instuurplugins';
$string['submissionreceipthtml'] = '<p>Je hebt een opdracht ingestuurd voor \'<i>{$a->assignment}</i>\'</p><p>
Je kunt de status hiervan volgen <a href="{$a->url}">via deze link</a>.</p>';
$string['submissionreceiptotherhtml'] = 'Je opdracht voor \'<i>{$a->assignment}</i>\' is ingestuurd.<br /><br />
Je kunt de status van je <a href="{$a->url}">opdracht</a> opvolgen.';
$string['submissionreceiptothersmall'] = 'Je opdracht voor {$a->assignment} is ingestuurd.';
$string['submissionreceiptothertext'] = 'Je opdracht voor {$a->assignment} is ingestuurd.

Je kunt de status van je opdracht volgen op:

 {$a->url}';
$string['submissionreceipts'] = 'Stuur instuurbewijzen';
$string['submissionreceiptsmall'] = 'Je hebt je opdracht ingestuurd voor {$a->assignment}';
$string['submissionreceipttext'] = 'Je hebt een opdracht ingestuurd voor \'{$a->assignment}\'.

Je kunt de status hiervan volgen:

{$a->url}';
$string['submissionsclosed'] = 'Insturen afgesloten';
$string['submissionsettings'] = 'Instellingen insturen opdrachten';
$string['submissionslocked'] = 'Voor deze opdracht kan nu niets ingestuurd worden.';
$string['submissionslockedshort'] = 'Wijzigen van je ingestuurde opdracht niet toegestaan';
$string['submissionsnotgraded'] = 'Ingestuurde opdracht niet beoordeeld: {$a}';
$string['submissionstatement'] = 'Voorwaarden voor insturen';
$string['submissionstatement_help'] = 'Verklaring die de leerling moet aanvaarden voor het insturen van zijn opdracht.';
$string['submissionstatementacceptedlog'] = 'Voorwaarden voor insturen aanvaard door gebruiker {$a}';
$string['submissionstatementdefault'] = 'Deze opdracht is mijn eigen werk, behalve waar ik verwijs naar het werk van anderen.';
$string['submissionstatementteamsubmission'] = 'Verklaring groepsinzending';
$string['submissionstatementteamsubmission_help'] = 'Verklaring die elke leerling moet accepteren om het werk van zijn groep in te dienen.';
$string['submissionstatementteamsubmissionallsubmit'] = 'Een verklaring voor de groep waar alle groepsleden hun opdracht indienen';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'Verklaring die de leerling moet accepteren om zijn werk als groepslid in te dienen.';
$string['submissionstatementteamsubmissionallsubmitdefault'] = 'Deze inzending is mijn eigen werk als een groepslid, behalve wanneer ik het gebruik van de werken van andere mensen heb erkend.';
$string['submissionstatementteamsubmissiondefault'] = 'Deze inzending is het werk van mijn groep, behalve wanneer we het gebruik van de werken van andere mensen hebben erkend.';
$string['submissionstatus'] = 'Status ingestuurde opdracht';
$string['submissionstatus_'] = 'Geen ingestuurde opdracht';
$string['submissionstatus_draft'] = 'Kladwerk (nog niet ingestuurd)';
$string['submissionstatus_marked'] = 'Beoordeeld';
$string['submissionstatus_new'] = 'Geen inzending';
$string['submissionstatus_reopened'] = 'Heropend';
$string['submissionstatus_submitted'] = 'Opdracht ingestuurd om te beoordelen';
$string['submissionstatusheading'] = 'Status ingestuurde opdracht';
$string['submissionsummary'] = '{$a->status}. Laatst gewijzigd op {$a->timemodified}';
$string['submissionteam'] = 'Groep';
$string['submissiontypes'] = 'Inzendingstypes';
$string['submitaction'] = 'Insturen';
$string['submitassignment'] = 'Stuur opdracht in';
$string['submitassignment_help'] = 'Als je deze opdracht hebt ingestuurd, dan zul je geen wijzigingen meer kunnen aanbrengen.';
$string['submitforgrading'] = 'Insturen voor beoordeling';
$string['submitted'] = 'Ingestuurd';
$string['submittedearly'] = 'Opdracht was {$a} te vroeg ingestuurd';
$string['submittedlate'] = 'Opdracht was {$a} te laat ingestuurd';
$string['submittedlateshort'] = '{$a} laat';
$string['subpagetitle'] = '{$a->contextname} - {$a->subpage}';
$string['subplugintype_assignfeedback'] = 'Feedback plugin';
$string['subplugintype_assignfeedback_plural'] = 'Feedback plugins';
$string['subplugintype_assignsubmission'] = 'Instuurplugin';
$string['subplugintype_assignsubmission_plural'] = 'Instuurplugins';
$string['teamname'] = 'Team: {$a}';
$string['teamsubmission'] = 'Leerlingen sturen groepsopdracht in';
$string['teamsubmission_help'] = 'Indien ingeschakeld zullen de leerlingen in groepen verdeeld worden, gebaseerd op de standaard set groepen of een aangepaste groepering. De ingestuurde opdracht van een groep zal gedeeld worden door de groepsleden en alle leden van de groep zullen elkaars wijzigingen aan de opdracht zien.';
$string['teamsubmissiongroupingid'] = 'Groepering voor groepen van leerlingen';
$string['teamsubmissiongroupingid_help'] = 'Dit is de groepering die de opdracht zal gebruiken om groepen voor leerlingen te vinden. Indien niet ingesteld zal de standaard set groepen gebruikt worden.';
$string['textinstructions'] = 'Opdracht instructies';
$string['timemodified'] = 'Laatst gewijzigd';
$string['timeremaining'] = 'Resterende tijd';
$string['timeremainingcolon'] = 'Resterende tijd: {$a}';
$string['togglezoom'] = 'Zoom regio in/uit';
$string['ungroupedusers'] = 'De instelling "Groeplidmaatschap vereist om een inzending te maken" is ingeschakeld en sommige gebruikers zijn niet toegewezen aan een groep of zijn lid van meerdere groepen. Dit zal het onmogelijk maken hun opdracht in te sturen.';
$string['ungroupedusersoptional'] = 'De instelling \'Leerlingen sturen groepsopdracht in\' is ingeschakeld en sommige gebruikers maken geen deel uit van een groep of zijn lid van meer dan één groep. Houd er rekening mee dat deze leerlingen zich aanmelden als leden van de \'Standaardgroep\'.';
$string['unlimitedattempts'] = 'Onbeperkt';
$string['unlimitedattemptsallowed'] = 'Onbeperkt aantal pogingen toegestaan.';
$string['unlimitedpages'] = 'Onbeperkt';
$string['unlocksubmissionforstudent'] = 'Insturen toestaan voor leerling:  (id={$a->id}, fullname={$a->fullname}).';
$string['unlocksubmissions'] = 'Insturen deblokkeren';
$string['unsavedchanges'] = 'Wijzigingen niet bewaard';
$string['unsavedchangesquestion'] = 'Er zijn wijzigingen aan cijfers of feedback die niet bewaard zijn. Wil je de wijzigingen bewaren en verder gaan?';
$string['updategrade'] = 'Cijfer aanpassen';
$string['updatetable'] = 'Bewaar en vernieuw tabel';
$string['upgradenotimplemented'] = 'Upgrade nog niet geïmplementeerd in plugin ({$a->type} {$a->subtype})';
$string['userassignmentdefaults'] = 'Standaardwaarden voor toewijzing van gebruikers';
$string['userextensiondate'] = 'Extra tijd gegeven tot: {$a}';
$string['usergrade'] = 'Gebruikerscijfer';
$string['useridlistnotcached'] = 'De wijziging van het cijfer is niet bewaard, want het was niet mogelijk om te bepalen voor welke inzending het cijfer bedoeld was.';
$string['useroverrides'] = 'Gebruikersoverschrijvingen';
$string['useroverridesdeleted'] = 'Gebruikersoverschrijvingen verwijderd';
$string['usersnone'] = 'Er hebben geen leerlingen toegang tot deze opdracht.';
$string['usersubmissioncannotberemoved'] = 'De inzending van {$a} kan niet worden verwijderd.';
$string['userswhoneedtosubmit'] = 'Leerlingen die nog moeten insturen: {$a}';
$string['validmarkingworkflowstates'] = 'Geldige beoordlings-worflow statussen';
$string['viewadifferentattempt'] = 'Bekijk een andere poging';
$string['viewbatchmarkingallocation'] = 'Bekijk pagina voor batch set beoordelingstoewijzing';
$string['viewbatchsetmarkingworkflowstate'] = 'Bekijk batch set workflow statuspagina.';
$string['viewfeedback'] = 'Bekijk feedback';
$string['viewfeedbackforuser'] = 'Bekijk feedback voor gebruiker: {$a}';
$string['viewfull'] = 'Bekijk volledig';
$string['viewfullgradingpage'] = 'Open de volledige beoordelingspagina om feedback te geven';
$string['viewgradebook'] = 'Bekijk de cijferlijst';
$string['viewgrading'] = 'Bekijk alle ingestuurde opdrachten';
$string['viewgradingformforstudent'] = 'Bekijk beoordelingspagina voor leerling:  (id={$a->id}, fullname={$a->fullname}).';
$string['viewownsubmissionform'] = 'Bekijk je eigen pagina om de opdracht in te sturen';
$string['viewownsubmissionstatus'] = 'Bekijk je eigen status van je ingestuurde opdracht';
$string['viewrevealidentitiesconfirm'] = 'Bekijk de toon leerling identiteit bevestigingspagina.';
$string['viewsubmission'] = 'Bekijk ingestuurde opdracht';
$string['viewsubmissionforuser'] = 'Bekijk ingestuurde opdracht voor gebruiker: {$a}';
$string['viewsubmissiongradingtable'] = 'Bekijk beoordelingstabel voor ingestuurde opdracht.';
$string['viewsummary'] = 'Bekijk samenvatting';
$string['workflowfilter'] = 'Workflowfilter';
$string['xofy'] = '{$a->x} van {$a->y}';
