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
 * Strings for component 'tool_generator', language 'sv', version '4.4'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bigfile'] = 'Stor fil {$a}';
$string['courseexplanation'] = 'Det här verktyget skapar standardtestkurser som omfattar många
avsnitt, aktiviteter och filer.

Detta är avsett att erbjuda ett standardiserat sätt att kontrollera tillförlitligheten
och prestandan hos olika systemkomponenter (till exempel säkerhetskopiering och återställning).

Detta test är viktigt eftersom det tidigare har förekommit många fall där systemet inte fungerat vid praktisk användning (t.ex. för en kurs med 1, 000 aktiviteter).

Kurser som skapas med hjälp av den här funktionen kan uppta en stor mängd databas- och
filsystems-utrymme (tiotals gigabyte). Du kommer att behöva ta bort kurserna
(och vänta på olika rensningskörningar) för att frigöra det här utrymmet igen.

**Använd inte den här funktionen i ett produktionssystem**. Använd endast på en utvecklingsserver.
(För att undvika oavsiktlig användning inaktiveras denna funktion om du inte också har valt
felsökningsnivån <code>UTVECKLARE</code> under <em>Hantera webbplats -> Utveckling -> Felsökning -> Felsökningsmeddelanden</em>).';
$string['coursesize_0'] = 'XS (~10KB; skapa på ~1 sekund)';
$string['coursesize_1'] = 'S (~10MB; skapa på ~30 sekunder)';
$string['coursesize_2'] = 'M (~100MB; skapa på ~2 minuter)';
$string['coursesize_3'] = 'L (~1GB; skapa på ~30 minuter)';
$string['coursesize_4'] = 'XL (~10GB; skapa på ~2 timmar)';
$string['coursesize_5'] = 'XXL (~20GB; skapa på ~4 timmar)';
$string['coursewithoutusers'] = 'Det finns inga användare i den valda kursen';
$string['createcourse'] = 'Skapa kurs';
$string['createtestplan'] = 'Skapa testplan';
$string['creating'] = 'Skapar kurs';
$string['done'] = 'klar ({$a} sek.)';
$string['downloadtestplan'] = 'Ladda ned testplan';
$string['downloadusersfile'] = 'Ladda ned användarfil';
$string['error_nocourses'] = 'Det finns ingen kurser att använda för att skapa testplan';
$string['error_noforumdiscussions'] = 'Det finns inga forumdiskussioner i de valda kurserna';
$string['error_noforuminstances'] = 'Det finns inga forum i de valda kurserna';
$string['error_noforumreplies'] = 'Det finns inga forumsvar i de valda kurserna';
$string['error_nonexistingcourse'] = 'Kursen finns inte';
$string['error_nopageinstances'] = 'Det finns inga sidor i kursen';
$string['error_notdebugging'] = 'Inte tillgängligt på denna server eftersom <em>Felsökningsmeddelanden</em> inte är inställt på <code>UTVECKLARE</code>';
$string['error_nouserspassword'] = 'Du behöver ange ett värde för $CFG->tool_generator_users_password i config.php för att kunna skapa testplanen';
$string['fullname'] = 'Testkurs: {$a->size}';
$string['maketestcourse'] = 'Skapa en testkurs';
$string['maketestplan'] = 'Skapa JMeter-testplan';
$string['notenoughusers'] = 'Det finns inte tillräckligt med användare i den valda kursen';
$string['pluginname'] = 'Datagenerator för utveckling';
$string['privacy:metadata'] = 'Pluginmodulen Datagenerator för utveckling lagrar ingen personinformation.';
$string['progress_checkaccounts'] = 'Kontrollerar användarkonton ({$a})';
$string['progress_coursecompleted'] = 'Kurs slutförd ({$a})';
$string['progress_createaccounts'] = 'Skapar användarkonton ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'Skapar uppgifter ({$a})';
$string['progress_createbigfiles'] = 'Skapar stora filer ({$a})';
$string['progress_createcourse'] = 'Skapar kurs ({$a})';
$string['progress_createforum'] = 'Skapar forum ({$a} inlägg)';
$string['progress_createpages'] = 'Skapar sidor ({$a})';
$string['progress_createsmallfiles'] = 'Skapar små filer ({$a})';
$string['progress_enrol'] = 'Registrerar deltagare på kurs ({$a})';
$string['progress_sitecompleted'] = 'Webbplats klar ({$a}s)';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (~10MB; 3 kurser, skapade på ~30 sekunder)';
$string['sitesize_1'] = 'S (~50MB; 8 kurser, skapade på ~2 minuter)';
$string['sitesize_2'] = 'M (~200MB; 73 kurser, skapade på ~10 minuter)';
$string['sitesize_3'] = 'L (~1.5GB; 277 kurser, skapade på ~1.5 timmar)';
$string['sitesize_4'] = 'XL (~10GB; 1065 kurser, skapade på ~5 timmar)';
$string['sitesize_5'] = 'XXL (~20GB; 4177 kurser, skapade på ~10 timmar)';
$string['size'] = 'Kursstorlek';
$string['smallfiles'] = 'Små filer';
$string['targetcourse'] = 'Testa målkurs';
$string['testplanexplanation'] = 'Det här verktyget skapar en JMeter-testplanfil tillsammans med filen med användarautentiseringsuppgifter.

Den här testplanen är utformad för att fungera tillsammans med {$a}, vilket gör det enklare att köra testplanen i en specifik Moodle-miljö. Den samlar in information om körningarna och jämför resultaten. Du måste ladda ner den och använda <code>test_runner.sh</code>-skriptet eller följa installations- och användningsanvisningarna.

Du måste ställa in ett lösenord för kursanvändarna i <code>config.php</code> (t.ex. <code>$CFG->tool_generator_users_password = \'moodle\';</code>). Det finns inget standardvärde för det här lösenordet för att förhindra oavsiktlig användning av verktyget. Du måste använda alternativet <em>uppdatera lösenord</em> om dina kursanvändare har andra lösenord eller om de genererades av tool_generator men utan att ange ett $CFG->tool_generator_users_password-värde.

Det är en del av tool_generator så det fungerar bra tillsammans med kurserna som genereras av kurserna och webbplatsgeneratorerna. Det kan
också användas för alla kurser som innehåller minst:

* Tillräckligt många registrerade användare (beror på testplanens storlek) med lösenordet återställt till "moodle"
* En sidmodulinstans
* En forummodulinstans med minst en diskussion och ett svar

Du kanske vill överväga servrarnas kapacitet när du kör stora testplaner eftersom mängden data som ska läsas in av JMeter kan vara stor. Uppvarvningsperioden har justerats efter antalet trådar (användare) för att minska denna typ av problem, men belastningen kan fortfarande vara mycket stor.

**Kör inte testplanen på ett live-system**. Den här funktionen skapar bara skripten som i sin tur ska användas av JMeter och är i sig inte farlig att köra. Du bör dock **ALDRIG** köra den här testplanen på en webbplats i produktion.';
$string['testplansize_0'] = 'XS ({$a->users} användare, {$a->loops} loopar och {$a->rampup} ökningsperiod)';
$string['testplansize_1'] = 'S ({$a->users} användare, {$a->loops} loopar och {$a->rampup} ökningsperiod)';
$string['testplansize_2'] = 'M ({$a->users} användare, {$a->loops} loopar och {$a->rampup} ökningsperiod)';
$string['testplansize_3'] = 'L ({$a->users} användare, {$a->loops} loopar och {$a->rampup} ökningsperiod)';
$string['testplansize_4'] = 'XL ({$a->users} användare, {$a->loops} loopar och {$a->rampup} ökningsperiod)';
$string['testplansize_5'] = 'XXL ({$a->users} användare, {$a->loops} loopar och {$a->rampup} ökningsperiod)';
$string['updateuserspassword'] = 'Uppdatera användarlösenord';
$string['updateuserspassword_help'] = 'JMeter måste logga in som kursanvändare. Du kan ställa in användarnas lösenord under <code>$CFG->tool_generator_users_password</code> i <em>config.php</em>. Den här inställningen uppdaterar kursanvändarens lösenord enligt $CFG->tool_generator_users_password. Detta kan vara användbart om du använder en kurs som inte genereras av tool_generator eller $CFG->tool_generator_users_password inte har angetts när du skapade testkurserna.';
