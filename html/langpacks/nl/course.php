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
 * Strings for component 'course', language 'nl', version '4.1'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'Voettekst voor activiteitkiezer';
$string['activitychooseractivefooter_desc'] = 'De activiteitenkiezer kan plug-ins ondersteunen die items aan de voettekst toevoegen.';
$string['activitychoosercategory'] = 'Activiteitenkiezer';
$string['activitychooserhidefooter'] = 'Geen voettekst';
$string['activitychooserrecommendations'] = 'Aanbevolen activiteiten';
$string['activitychoosersettings'] = 'Instellingen activiteitenkiezer';
$string['activitychoosertabmode'] = 'Tabs activiteitenkiezer';
$string['activitychoosertabmode_desc'] = 'Met de activiteitenkiezer kunnen leraren makkelijk activiteiten en bronnen kiezen om toe te voegen aan hun cursus. Deze instelling bepaalt welke tabs er moeten in getoond worden. Merk op dat de favorieten-tab enkel getoond wordt voor een gebruiker die één of meer activiteiten als favoriet aangeduid heeft en dat de aanbevolen-tab enkel getoond wordt als de site-beheerder enkele specifieke activiteiten aanbevolen heeft.';
$string['activitychoosertabmodeone'] = 'Favorieten, alle, activiteiten, bronnen, aanbevolen';
$string['activitychoosertabmodethree'] = 'Favorieten, activiteiten, bronnen, aanbevolen';
$string['activitychoosertabmodetwo'] = 'Favorieten, alle, aanbevolen';
$string['activitydate:closed'] = 'Gesloten:';
$string['activitydate:closes'] = 'Sluit:';
$string['activitydate:opened'] = 'Geopend:';
$string['activitydate:opens'] = 'Geopend vanaf:';
$string['aria:coursecategory'] = 'Cursuscategorie';
$string['aria:courseimage'] = 'Cursusafbeelding';
$string['aria:coursename'] = 'Cursusnaam';
$string['aria:courseshortname'] = 'Cursus korte naam';
$string['aria:defaulttab'] = 'Standaardactiviteiten';
$string['aria:favourite'] = 'Cursus heeft ster';
$string['aria:favouritestab'] = 'Activiteiten met ster';
$string['aria:modulefavourite'] = 'Ster activiteit {$a}';
$string['aria:recommendedtab'] = 'Aanbevolen activiteiten';
$string['browsecourseadminindex'] = 'Blader door de cursusadministratie met deze index.';
$string['browsesettingindex'] = 'Blader door instellingen met deze index.';
$string['completion_automatic:done'] = 'Voltooid:';
$string['completion_automatic:failed'] = 'Mislukt:';
$string['completion_automatic:todo'] = 'Nog te doen:';
$string['completion_manual:aria:done'] = '{$a} is als voltooid aangeduid. Klik om ongedaan te maken.';
$string['completion_manual:aria:markdone'] = '{$a} als voltooid aanduiden';
$string['completion_manual:done'] = 'Voltooid';
$string['completion_manual:markdone'] = 'Als voltooid aanduiden';
$string['completion_setby:auto:done'] = 'Klaar: {$a->condition}(ingesteld door {$a->setby})';
$string['completion_setby:auto:todo'] = 'To-do: {$a->condition} (ingesteld door {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname} is door {$a->setby} als voltooid aangeduid. Klik om ongedaan te maken.';
$string['completion_setby:manual:markdone'] = '{$a->activityname} is door {$a->setby} als niet voltooid aangeduid. Klik om als voltooid aan te duiden.';
$string['completionrequirements'] = 'Voltooiingsvoorwaarden voor {$a}';
$string['courseaccess'] = 'Toegang tot cursus';
$string['coursealreadyfinished'] = 'Cursus reeds geëindigd';
$string['coursecontentnotification'] = 'Melding van inhoudswijziging verzenden';
$string['coursecontentnotification_help'] = 'Je kunt een melding naar de cursusgebruikers sturen over elke nieuwe of bijgewerkte bron of activiteit. Enkel gebruikers met toegang tot de activiteit of bron zullen een melding krijgen.';
$string['coursecontentnotifnew'] = '{$a->coursename} nieuwe inhoud';
$string['coursecontentnotifnewbody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> is nieuw in de cursus <a href="{$a-> courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Wijzig je meldingsvoorkeuren</a></p>';
$string['coursecontentnotifupdate'] = '{$a->coursename} inhoudswijziging';
$string['coursecontentnotifupdatebody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> is gewijzigd in de cursus <a href="{$a- >courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Wijzig hier je meldingsvoorkeuren</a></p>';
$string['coursenotyetfinished'] = 'De cursus is nog niet geëindigd';
$string['coursenotyetstarted'] = 'De cursus is nog niet begonnen';
$string['courseparticipants'] = 'Cursusdeelnemers';
$string['coursetoolong'] = 'De cursus is te lang';
$string['customfield_islocked'] = 'Vergrendeld';
$string['customfield_islocked_help'] = 'Als het veld is vergrendeld, kunnen alleen gebruikers met de mogelijkheid om vergrendelde aangepaste velden te wijzigen (standaard gebruikers met alleen de standaardrol van manager) dit in de cursusinstellingen wijzigen.';
$string['customfield_notvisible'] = 'Niemand';
$string['customfield_visibility'] = 'Zichtbaar voor';
$string['customfield_visibility_help'] = 'Deze instelling bepaalt wie de aangepaste veldnaam en -waarden kan zien in de lijst met cursussen of in de aangepaste veldenfilter of op de startpagina.';
$string['customfield_visibletoall'] = 'Iedereen';
$string['customfield_visibletoteachers'] = 'Leraren';
$string['customfieldsettings'] = 'Gemeenschappelijke cursusinstellingen voor aangepaste velden';
$string['daystakingcourse'] = 'Dagen cursus';
$string['downloadcontent'] = 'Opnemen in cursusdownloads';
$string['downloadcontent_help'] = 'Moet deze activiteit of bron mee opgenomen worden in het zip-bestand met cursusinhoud om te downloaden? Bestand, map, pagina en label kunnen volledig gedownload worden. Voor alle ander activiteiten en bronnen kan enkel de naam en beschrijving gedownload worden. Deze optie vereist dat downloaden van cursusinhoud ingeschakeld is in de cursusinstellingen.

De instelling heeft geen effect op het downloaden van inhoud op de mobiele app voor offline gebruik.';
$string['downloadcourseconfirmation'] = 'Je gaat een zip-bestand met de cursusinhoud downloaden (zonder items die niet kunnen gedownload worden en bestanden groter dan {$a}).';
$string['downloadcoursecontent'] = 'Download cursusinhoud';
$string['downloadcoursecontent_help'] = 'Deze instelling bepaalt of cursusinhoud gedownload mag worden door gebruikers met de download cursus-mogelijkheid (standaard gebruikers met de leerling of leraar rol).';
$string['enabledownloadcoursecontent'] = 'Cursusinhoud downloaden inschakelen';
$string['errorendbeforestart'] = 'De einddatum ({$a}) is vóór de startdatum van de cursus.';
$string['favourite'] = 'Favoriete cursus';
$string['gradetopassnotset'] = 'Deze cursus heeft geen cijfer om te slagen ingesteld. Het kan worden ingesteld in het cijfer van de cursus (cijferlijst-instelling).';
$string['informationformodule'] = 'Informatie over de activiteit {$a}';
$string['module'] = 'Activiteit';
$string['namewithlink'] = 'Categorienaam met link';
$string['noaccesssincestartinfomessage'] = 'Hallo {$a->userfirstname},
<p>Een aantal leerlingen van {$a->coursename} hebben de cursus nog nooit bezocht.</p>';
$string['nocourseactivity'] = 'Niet genoeg cursusactiviteit tussen het begin en het einde van de cursus';
$string['nocourseendtime'] = 'De cursus heeft geen eindtijd';
$string['nocoursesections'] = 'Geen cursussecties';
$string['nocoursestudents'] = 'Geen leerlingen';
$string['norecentaccessesinfomessage'] = 'Hallo {$a->userfirstname},
<p>Een aantal leerlingen van {$a->coursename} hebben de cursus al een hele tijd niet meer bezocht.</p>';
$string['noteachinginfomessage'] = 'Hallo {$a->userfirstname},
<p>Van cursussen met startdata in de volgende week is vastgesteld dat ze geen leraren- of leerlingen hebben.</p>';
$string['participants:perpage'] = 'Aantal deelnemers per pagina';
$string['participants:perpage_help'] = 'Het aantal gebruikers dat per pagina getoond wordt op de deelnemerspagina in elke cursus.';
$string['participantsnavigation'] = 'Deelnemers tertiaire navigatie.';
$string['privacy:completionpath'] = 'Cursusvoltooiing';
$string['privacy:favouritespath'] = 'Informatie over cursus met ster';
$string['privacy:metadata:activityfavouritessummary'] = 'Het cursussysteem bevat informatie over welke items van de activiteitenkiezer door de gebruiker zijn gemarkeerd met een ster.';
$string['privacy:metadata:completionsummary'] = 'De cursus bevat voltooiingsinformatie over de gebruiker.';
$string['privacy:metadata:favouritessummary'] = 'De cursus bevat informatie die verband houdt met het plaatsen van een ster door de gebruiker.';
$string['privacy:perpage'] = 'Het aantal te tonen cursussen per pagina.';
$string['recommend'] = 'Adviseren';
$string['recommendcheckbox'] = 'Aanbevolen activiteit: {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->dateiffstr} na het begin van de cursus';
$string['relativedatessubmissionduedatebefore'] = '{$a->dateiffstr} voor het begin van de cursus';
$string['searchactivitiesbyname'] = 'Zoek naar activiteiten op naam';
$string['searchresults'] = 'Zoekresultaten: {$a}';
$string['studentsatriskincourse'] = 'Leerlingen lopen risico in {$a} cursus';
$string['studentsatriskinfomessage'] = 'Hallo {$a->userfirstname},
<p>Leerlingen van de cursus {$a->coursename} hebben een risico van uitvallen of niet slagen.</p>';
$string['submitsearch'] = 'Zoekopdracht indienen';
$string['target:coursecompetencies'] = 'Leerlingen die het risico lopen niet de competenties te behalen die aan een cursus zijn toegewezen';
$string['target:coursecompetencies_help'] = 'Dit doel beschrijft of een leerling het risico loopt de competenties die aan een cursus zijn toegewezen niet te behalen. Dit doel gaat er van uit dat alle competenties die aan de cursus zijn toegewezen, aan het einde van de cursus moeten zijn behaald.';
$string['target:coursecompletion'] = 'Leerlingen lopen het risico niet te voldoen aan de voorwaarden voor het voltooien van de cursus';
$string['target:coursecompletion_help'] = 'Dit doel beschrijft of de leerling geacht wordt het risico te lopen niet aan de voorwaarden voor het voltooien van de cursus te voldoen.';
$string['target:coursedropout'] = 'Leerlingen die het risico lopen om te stoppen';
$string['target:coursedropout_help'] = 'Dit doel beschrijft of de leerling het risico loopt om met de cursus te stoppen.';
$string['target:coursegradetopass'] = 'Leerlingen die het risico lopen het minimumcijfer voor de cursus niet te behalen';
$string['target:coursegradetopass_help'] = 'Dit doel beschrijft of de leerling het risico loopt het minimumcijfer voor de cursus niet te behalen.';
$string['target:noaccesssincecoursestart'] = 'Leerlingen die nog geen toegang hebben gehad tot de cursus';
$string['target:noaccesssincecoursestart_help'] = 'Dit doel beschrijft leerlingen die nooit toegang hebben gehad tot een cursus waarvoor ze zijn ingeschreven.';
$string['target:noaccesssincecoursestartinfo'] = 'Volgende leerlingen zijn aangemeld in een cursus die begonnen is, maar ze hebben de cursus nog nooit bezocht.';
$string['target:norecentaccesses'] = 'Leerlingen die recent geen toegang hebben gehad tot de cursus';
$string['target:norecentaccesses_help'] = 'Dit doel beschrijft leerlingen die aangemeld zijn in een cursus maar die de cursus niet bezocht hebben binnen het analyse-interval (standaard afgelopen maand).';
$string['target:norecentaccessesinfo'] = 'Volgende leerlingen die aangemeld zijn in een cursus hebben die cursus niet bezocht binnen het analyse-interval (standaard afgelopen maand).';
$string['target:noteachingactivity'] = 'Cursussen die waarschijnlijk niet zullen starten';
$string['target:noteachingactivity_help'] = 'Dit doel beschrijft of cursussen die in de komende week starten, lesactiviteiten zullen hebben.';
$string['target:noteachingactivityinfo'] = 'Volgende cursussen die de komende dagen zullen starten hebben een probleem want er zijn geen leerlingen of leraren in aangemeld';
$string['targetlabelstudentcompetenciesno'] = 'Leerling die waarschijnlijk de competenties behaalt die aan een cursus zijn toegewezen';
$string['targetlabelstudentcompetenciesyes'] = 'Leerling die het risico loopt  de competenties die aan een cursus zijn toegewezen niet te behalen';
$string['targetlabelstudentcompletionno'] = 'Leerling die waarschijnlijk voldoet aan de voorwaarden voor het voltooien van de cursus';
$string['targetlabelstudentcompletionyes'] = 'Leerling die het risico loopt niet te voldoen aan de voorwaarden voor het voltooien van de cursus';
$string['targetlabelstudentdropoutno'] = 'Loopt geen risico';
$string['targetlabelstudentdropoutyes'] = 'Leerling loopt het risico om te stoppen';
$string['targetlabelstudentgradetopassno'] = 'Leerling die waarschijnlijk het minimumcijfer haalt om te slagen voor de cursus.';
$string['targetlabelstudentgradetopassyes'] = 'Leerling loopt het risico om het minimumcijfer om te slagen voor de cursus niet te halen.';
$string['targetlabelteachingno'] = 'Cursussen die waarschijnlijk niet zullen starten';
$string['targetlabelteachingyes'] = 'Gebruikers met onderwijsmogelijkheden die toegang hebben tot de cursus';
