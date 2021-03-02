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
 * Strings for component 'course', language 'sv', version '3.8'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aria:coursecategory'] = 'Kurskategori';
$string['aria:courseimage'] = 'Kursbild';
$string['aria:coursename'] = 'Kursnamn';
$string['aria:courseshortname'] = 'Kortnamn för kurs';
$string['aria:favourite'] = 'Kursen är favoritmärkt';
$string['coursealreadyfinished'] = 'Kursen är redan avslutad';
$string['coursenotyetfinished'] = 'Kursen har inte avslutats ännu';
$string['coursenotyetstarted'] = 'Kursen har inte börjat';
$string['coursetoolong'] = 'Kursen är för lång';
$string['customfield_islocked'] = 'Låst';
$string['customfield_islocked_help'] = 'Om fältet är låst kan enbart användare som har behörighet att ändra låsta anpassade fält göra denna ändring i kursinställningarna. Förinställningen är att enbart användare med den förinställda rollen \'manager\' har denna behörighet.';
$string['customfield_notvisible'] = 'Ingen';
$string['customfield_visibility'] = 'Synlig för';
$string['customfield_visibility_help'] = 'Denna inställning bestämmer vem som kan se namnet på det anpassade fältet i listan över kurser eller i filtret för anpassade fält i översikten.';
$string['customfield_visibletoall'] = 'Alla';
$string['customfield_visibletoteachers'] = 'Lärare';
$string['customfieldsettings'] = 'Gemensamma inställningar för anpassade fält';
$string['errorendbeforestart'] = 'Kursens slutdatum ({$a}) inträffar före kursens startdatum.';
$string['favourite'] = 'Favoritmärkt kurs';
$string['gradetopassnotset'] = 'För denna kurs finns ingen inställning gjord för vilka betyg som krävs för att bli godkänd. Detta kan ställas in i betygskomponenten för kursen (Inställningar för betygsbok).';
$string['noaccesssincestartinfomessage'] = 'Hej {$a->userfirstname},

</br><br/>några deltagare i {$a->coursename} har aldrig varit inne i kursen.';
$string['nocourseactivity'] = 'Otillräcklig kursaktivitet mellan kursens början och slut';
$string['nocourseendtime'] = 'Kursen har ingen sluttid';
$string['nocoursesections'] = 'Inga sektioner i kursen';
$string['nocoursestudents'] = 'Inga studenter';
$string['norecentaccessesinfomessage'] = 'Hej {$a->userfirstname},

</br><br/>några deltagare i {$a->coursename} har inte varit inne i kursen på ett tag.';
$string['privacy:completionpath'] = 'Fullföljande av kurs';
$string['privacy:favouritespath'] = 'Favoritmärkt kursinformation';
$string['privacy:metadata:completionsummary'] = 'Kursen innehåller information om användarens fullföljande av kursen.';
$string['privacy:metadata:favouritessummary'] = 'Kursen innehåller information som relaterar till att användaren favoritmärkt kursen.';
$string['privacy:perpage'] = 'Antalet kurser som ska visas per sida.';
$string['studentsatriskincourse'] = 'Deltagare i riskzonen i kursen {$a}';
$string['target:coursecompetencies'] = 'Deltagare som är i riskzonen för att inte uppnå de kompetenser som ingår i kursen.';
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
