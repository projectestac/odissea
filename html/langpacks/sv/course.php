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
 * Strings for component 'course', language 'sv', version '4.5'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'Sidfot i aktivitetsväljaren';
$string['activitychooseractivefooter_desc'] = 'Aktivitetsväljaren har stöd för pluginmoduler som lägger till objekt i sidfoten.';
$string['activitychoosercategory'] = 'Aktivitetsväljare';
$string['activitychooserhidefooter'] = 'Ingen sidfot';
$string['activitychooserrecommendations'] = 'Rekommenderade aktiviteter';
$string['activitychoosersettings'] = 'Inställningar för aktivitetsväljaren';
$string['activitychoosertabmode'] = 'Flikar i aktivitetsväljaren';
$string['activitychoosertabmode_desc'] = 'Aktivitetsväljaren gör det möjligt för lärare att enkelt välja de aktiviteter och resurser de vill lägga till i deras kurs. Denna inställning avgör vilka flikar som ska visas i aktivitetsväljaren. Tänk på att fliken för favoritmärkta aktiviteter är synlig för en användare enbart om användaren favoritmärkt en eller flera aktiviteter. Likaså är fliken som visar rekommenderade aktiviteter enbart synlig om sajtens administratör angivit några rekommenderade aktiviteter.';
$string['activitychoosertabmodeone'] = 'Favoritmärkta, Alla, Aktiviteter, Resurser, Rekommenderade';
$string['activitychoosertabmodethree'] = 'Favoritmärkta, Aktiviteter, Resurser, Rekommenderade';
$string['activitychoosertabmodetwo'] = 'Favoritmärkta, Alla, Rekommenderade';
$string['activitydate:closed'] = 'Stängdes:';
$string['activitydate:closes'] = 'Stänger:';
$string['activitydate:opened'] = 'Öppnades:';
$string['activitydate:opens'] = 'Öppnar:';
$string['aria:coursecategory'] = 'Kurskategori';
$string['aria:courseimage'] = 'Kursbild';
$string['aria:coursename'] = 'Kursnamn';
$string['aria:courseshortname'] = 'Kortnamn för kurs';
$string['aria:defaulttab'] = 'Förvalda aktiviteter';
$string['aria:favourite'] = 'Kursen är favoritmärkt';
$string['aria:favouritestab'] = 'Favoritmärkta aktiviteter';
$string['aria:modulefavourite'] = 'Markera aktiviteten {$a} som favorit';
$string['aria:recommendedtab'] = 'Rekommenderade aktiviteter';
$string['browsecourseadminindex'] = 'Bläddra i kursadministrationen med detta index.';
$string['browsesettingindex'] = 'Bläddra i inställningarna med detta index.';
$string['completion_automatic:done'] = 'Slutförd:';
$string['completion_automatic:failed'] = 'Underkänd:';
$string['completion_automatic:todo'] = 'Att göra:';
$string['completion_manual:aria:done'] = '{$a} är markerad som slutförd. Tryck för att ångra.';
$string['completion_manual:aria:markdone'] = 'Markera {$a} som slutförd';
$string['completion_manual:done'] = 'Slutförd';
$string['completion_manual:markdone'] = 'Markera som slutförd';
$string['completion_setby:auto:done'] = 'Klar: {$a->condition} (satt av {$a->setby})';
$string['completion_setby:auto:todo'] = 'Att göra: {$a->condition} (satt av {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname} har markerats som slutförd av {$a->setby}. Tryck för att ångra.';
$string['completion_setby:manual:markdone'] = '{$a->activityname} har markerats som ej slutförd av {$a->setby}. Tryck för att ångra.';
$string['completionrequirements'] = 'Slutförandevillkor för <b>{$a}</b>';
$string['courseaccess'] = 'Kursåtkomst';
$string['coursealreadyfinished'] = 'Kursen är redan avslutad';
$string['coursecontentnotification'] = 'Avisera om ändrat innehåll';
$string['coursecontentnotification_help'] = 'Markera kryssrutan om du vill meddela kursdeltagarna om den nya eller ändrade aktiviteten eller resursen. Endast användare som kan komma åt aktiviteten eller resursen får meddelandet.';
$string['coursecontentnotifnew'] = '{$a->coursename} nytt innehåll';
$string['coursecontentnotifnewbody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> är ny i kursen <a href="{$a->courselink}">{$a->coursename}</a>.</p> <p><a href="{$a->notificationpreferenceslink}">Ändra dina meddelandeinställningar</a></p>';
$string['coursecontentnotifupdate'] = '{$a->coursename} ändrat innehåll';
$string['coursecontentnotifupdatebody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> har ändrats i kursen <a href="{$a->courselink}">{$a->coursename}</a>.</p> <p><a href="{$a->notificationpreferenceslink}">Ändra dina meddelandeinställningar</a></p>';
$string['coursenotyetfinished'] = 'Kursen har inte avslutats ännu';
$string['coursenotyetstarted'] = 'Kursen har inte börjat';
$string['courseparticipants'] = 'Kursdeltagare';
$string['coursetoolong'] = 'Kursen är för lång';
$string['customfield_islocked'] = 'Låst';
$string['customfield_islocked_help'] = 'Om fältet är låst kan enbart användare som har behörighet att ändra låsta anpassade fält göra denna ändring i kursinställningarna. Standard är att enbart användare med standardrollen <em>Chef</em> har denna behörighet.';
$string['customfield_notvisible'] = 'Ingen';
$string['customfield_visibility'] = 'Synlig för';
$string['customfield_visibility_help'] = 'Denna inställning bestämmer vem som kan se namnet på det anpassade fältet i listan över kurser eller i filtret för anpassade fält i översikten.';
$string['customfield_visibletoall'] = 'Alla';
$string['customfield_visibletoteachers'] = 'Lärare';
$string['customfieldsettings'] = 'Grundläggande inställningar för anpassade fält';
$string['daystakingcourse'] = 'Dagar på kurs';
$string['downloadcontent'] = 'Inkludera i kursnedladdningar';
$string['downloadcontent_help'] = 'Ska den här aktiviteten eller resursen inkluderas i ZIP-filen i det nedladdningsbara kursinnehållet? Filer, mappar, sidor och etiketter kan laddas ned i sin helhet. För alla andra aktiviteter och resurser hämtas endast namn och beskrivning. Det här alternativet kräver att nedladdnings av kursinnehåll aktiverats i kursinställningarna.

Inställningen påverkar inte nedladdning av mobilappinnehåll för offlineanvändning.';
$string['downloadcourseconfirmation'] = 'Du håller på att ladda ned en ZIP-fil med kursinnehåll (exklusive objekt som inte går att ladda ned samt filer större än {$a}).';
$string['downloadcoursecontent'] = 'Ladda ned kursinnehåll';
$string['downloadcoursecontent_help'] = 'Den här inställningen avgör om kursinnehållet får hämtas av användare med behörighet att ladda ned kursinnehåll (som standard användare med rollen student eller lärare).';
$string['enabledownloadcoursecontent'] = 'Tillåt nedladdning av kursinnehåll';
$string['errorendbeforestart'] = 'Kursens slutdatum ({$a}) inträffar före kursens startdatum.';
$string['favourite'] = 'Favoritmärkt kurs';
$string['filterbyname'] = 'Filtrera efter namn';
$string['gradetopassnotset'] = 'För denna kurs finns ingen inställning gjord för vilka betyg som krävs för att bli godkänd. Detta kan ställas in i betygsobjektet i kursen (Inställningar för betygsbok).';
$string['informationformodule'] = 'Information om {$a}-aktiviteten';
$string['module'] = 'Aktivitet';
$string['namewithlink'] = 'Kategorinamn med länk';
$string['noaccesssincestartinfomessage'] = 'Hej {$a->userfirstname},
<p>Några av deltagarna i {$a->coursename} har aldrig varit inne i kursen.</p>';
$string['nocourseactivity'] = 'Otillräcklig kursaktivitet mellan kursens början och slut';
$string['nocourseendtime'] = 'Kursen har ingen sluttid';
$string['nocoursesections'] = 'Inga kurssektioner';
$string['nocoursestudents'] = 'Inga studenter';
$string['norecentaccessesinfomessage'] = 'Hej {$a->userfirstname},
<p>Några av deltagarna i {$a->coursename} har inte besökt kursen på ett tag.</p>';
$string['noteachinginfomessage'] = 'Hej {$a->userfirstname},
<p>Kurser med startdatum i nästa vecka har konstaterats sakna lärare eller registrerade studenter.<p>';
$string['participants:perpage'] = 'Antal deltagare per sida';
$string['participants:perpage_help'] = 'Ange antalet deltagare att visa per sida';
$string['participantsnavigation'] = 'Tertiär navigering.';
$string['privacy:completionpath'] = 'Slutförande av kurs';
$string['privacy:favouritespath'] = 'Favoritmärkt kursinformation';
$string['privacy:metadata:activityfavouritessummary'] = 'Kurssystemet innehåller information om vilka aktiviteter från aktivitetsväljaren som märkts som favoriter av användaren.';
$string['privacy:metadata:completionsummary'] = 'Kursen innehåller information om användarens slutförande av kursen.';
$string['privacy:metadata:favouritessummary'] = 'Kursen innehåller information som relaterar till att användaren favoritmärkt kursen.';
$string['privacy:perpage'] = 'Antalet kurser som ska visas per sida.';
$string['recommend'] = 'Rekommendera';
$string['recommendcheckbox'] = 'Rekommendera aktiviteten \'{$a}\'';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} efter kursstart';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} innan kursstart';
$string['searchactivitiesbyname'] = 'Sök efter aktiviteter via namn';
$string['searchresults'] = 'Sökresultat: {$a}';
$string['sectionlink'] = 'Permalänk';
$string['studentsatriskincourse'] = 'Deltagare i riskzonen i kursen {$a}';
$string['studentsatriskinfomessage'] = 'Hej {$a->userfirstname},
<p>Studenter i kursen {$a->coursename} har identifierats löpa risk.<p>';
$string['submitsearch'] = 'Sök';
$string['target:coursecompetencies'] = 'Deltagare som löper risk att inte uppnå de kompetenser som kopplats till kursen.';
$string['target:coursecompetencies_help'] = 'Detta mål beskriver huruvida en deltagare löper risk att inte uppnå de kompetenser som kopplats till en kurs. Detta mål antar att alla kompetenser som kopplats till kursen måste uppnås innan kursens slut.';
$string['target:coursecompletion'] = 'Deltagare som är i riskzonen för att inte uppfylla villkoren för slutförande av kursen.';
$string['target:coursecompletion_help'] = 'Detta mål beskriver huruvida deltagaren anses löpa risk att inte uppnå villkoren som angivits för att anses ha slutfört kursen.';
$string['target:coursedropout'] = 'Deltagare som är i riskzonen att avbryta kursen.';
$string['target:coursedropout_help'] = 'Detta mål beskriver huruvida deltagaren anses löpa risk att hoppa av kursen.';
$string['target:coursegradetopass'] = 'Deltagare som är i riskzonen att inte uppnå minimibetyget för att klara kursen.';
$string['target:coursegradetopass_help'] = 'Detta mål beskriver huruvida deltagaren löper risk att inte uppnå den lägsta betygsnivå som angivits för att klara kursen.';
$string['target:noaccesssincecoursestart'] = 'Deltagare som inte varit inne i kursen ännu.';
$string['target:noaccesssincecoursestart_help'] = 'Detta mål beskriver deltagare som är registrerade på en kurs, men som aldrig varit inne på den.';
$string['target:noaccesssincecoursestartinfo'] = 'Följande deltagare är registrerade på en kurs som redan har startat. Men de har aldrig varit inne i den kursen.';
$string['target:norecentaccesses'] = 'Deltagare som inte varit inne i kursen den senaste tiden.';
$string['target:norecentaccesses_help'] = 'Detta mål identifierar deltagare som (inom det angivna intervallet) inte varit inne på en kurs de registrerats på. Det förinställda intervallet är den senaste månaden.';
$string['target:norecentaccessesinfo'] = 'Följande deltagare har inte varit inne i kursen som de är registrerade på under den tid som är satt som analysintervall (standardsinställningen är en månad).';
$string['target:noteachingactivity'] = 'Kurser som löper risk att inte starta';
$string['target:noteachingactivity_help'] = 'Detta mål beskriver huruvida kurser som börjar den kommande veckan kommer att innehålla aktiviteter från lärare.';
$string['target:noteachingactivityinfo'] = 'Följande kurser som ska börja de närmaste dagarna löper risk att inte kunna börja eftersom det inte finns några registrerade lärare eller deltagare på kurserna.';
$string['targetlabelstudentcompetenciesno'] = 'Deltagare som troligtvis uppnår de kompetenser som kopplats till en kurs';
$string['targetlabelstudentcompetenciesyes'] = 'Deltagare som löper risk att inte uppnå de kompetenser som kopplats till en kurs';
$string['targetlabelstudentcompletionno'] = 'Deltagare som troligtvis uppnår kriterierna för att slutförandet av kursen';
$string['targetlabelstudentcompletionyes'] = 'Deltagare som löper risk att inte uppfylla kriterierna för slutförandet av kursen';
$string['targetlabelstudentdropoutno'] = 'Löper ingen risk';
$string['targetlabelstudentdropoutyes'] = 'Deltagare som löper risk att hoppa av kursen';
$string['targetlabelstudentgradetopassno'] = 'Deltagare som troligtvis kommer att uppfylla betygskriterierna som krävs för att bli godkända på kursen.';
$string['targetlabelstudentgradetopassyes'] = 'Deltagare som löper risk att inte uppfylla betygskriterierna för att bli godkända på kursen.';
$string['targetlabelteachingno'] = 'Kurser som löper risk att inte börja';
$string['targetlabelteachingyes'] = 'Användare som är lärare och som har tillgång till kursen';
