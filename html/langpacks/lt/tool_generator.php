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
 * Strings for component 'tool_generator', language 'lt', version '4.5'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalmodules'] = 'Papildomos veiklos';
$string['bigfile'] = 'Didelis failas {$a}';
$string['courseexplanation'] = 'Šis įrankis sukuria standartinius testavimo kursus, kuriuose yra daug skyrių, veiklų ir failų.

Tai skirta pateikti standartizuotą įvairių sistemos komponentų (pvz., atsarginės kopijos ir atkūrimo) patikimumo ir našumo tikrinimo priemonę.

Šis testas svarbus, nes anksčiau buvo daug atvejų, kai susidūrus su realaus naudojimo atvejais (pvz., kursas su 1 000 veiklų), sistema neveikia.

Kursai, sukurti naudojant šią funkciją, gali užimti daug duomenų bazės ir failų sistemos vietos (dešimtis gigabaitų). Turėsite ištrinti kursus (ir palaukti įvairių valymo darbų), kad vėl atlaisvintumėte šią vietą.

**Nenaudokite šios funkcijos tiesioginėje sistemoje**. Naudokite tik kūrėjo serveryje. (Kad išvengtumėte netyčinio naudojimo, ši funkcija išjungta, nebent taip pat pasirinkote DEVELOPER derinimo lygį.)';
$string['coursesize_0'] = 'XS (~10KB; sukuriama per ~1 sekundę)';
$string['coursesize_1'] = 'S (~10MB; sukuriama per ~30 sekundžių)';
$string['coursesize_2'] = 'M (~100MB; sukuriama per ~2 minutes)';
$string['coursesize_3'] = 'L (~1GB; sukuriama per ~30 minučių)';
$string['coursesize_4'] = 'XL (~10GB; sukuriama per ~2 valandas)';
$string['coursesize_5'] = 'XXL (~20GB; sukuriama per ~4 valandas)';
$string['coursewithoutusers'] = 'Pasirinktas kursas neturi naudotojų';
$string['createcourse'] = 'Kurti kursą';
$string['createtestplan'] = 'Sukurti testo planą';
$string['creating'] = 'Kuriamas kursas';
$string['done'] = 'atlikta ({$a}s)';
$string['downloadtestplan'] = 'Atsisiųsti testavimo planą';
$string['downloadusersfile'] = 'Atsisiųsti naudotojo failą';
$string['error_nocourses'] = 'Nėra kursų, kurie sudarytų testo planą';
$string['error_noforumdiscussions'] = 'Pasirinktame kurse nėra forumų diskusijoms';
$string['error_noforuminstances'] = 'Pasirinktame kurse nėra forumo modulio atvejų';
$string['error_noforumreplies'] = 'Pasirinktame kurse nėra forumo atsakymų';
$string['error_nonexistingcourse'] = 'Nurodytas kursas neegzistuoja';
$string['error_nopageinstances'] = 'Pasirinktame kurse nėra Puslapio modulio egzempliorių';
$string['error_notdebugging'] = 'Nepasiekiamas šiame serveryje, nes derinimas nenustatytas į DEVELOPER';
$string['error_nouserspassword'] = 'Norėdami sukurti bandymo planą, config.php turite nustatyti $CFG->tool_generator_users_password';
$string['execute'] = 'Vykdyti';
$string['execute_cleanup'] = 'Valymo scenarijai';
$string['execute_scenarios'] = 'Testavimo scenarijai';
$string['fullname'] = 'Testinis kursas: {$a->size}';
$string['maketestcourse'] = 'Sukurti bandomąjį kursą';
$string['maketestplan'] = 'Sudaryti JMeter bandymo planą';
$string['notenoughusers'] = 'Pasirinktas kursas neturi pakankamai naudotojų';
$string['pluginname'] = 'Atsitiktinis kursų generatorius';
$string['privacy:metadata'] = 'Diegimo duomenų generatoriaus papildinys nesaugo jokių asmens duomenų.';
$string['progress_checkaccounts'] = 'Tikrinamos naudotojų paskyros ({$a})';
$string['progress_coursecompleted'] = 'Kursas baigtas ({$a})';
$string['progress_createaccounts'] = 'Naudotojų paskyrų kūrimas ({$a->from} – {$a->to})';
$string['progress_createassignments'] = 'Kuriamos užduotys ({$a})';
$string['progress_createbigfiles'] = 'Didelių failų kūrimas ({$a})';
$string['progress_createcourse'] = 'Kuriamas kursas {$a}';
$string['progress_createforum'] = 'Kuriamas forumas ({$a} žinutės)';
$string['progress_createpages'] = 'Kuriami puslapiai ({$a})';
$string['progress_createsmallfiles'] = 'Mažų failų kūrimas ({$a})';
$string['progress_createusers'] = 'Naudotojų paskyrų kūrimas ({$a})';
$string['progress_enrol'] = 'Naudotojų registravimas į kursus ({$a})';
$string['progress_sitecompleted'] = 'Svetainė baigta ({$a} sek.)';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (~10MB; 3 kursai, sukurti per ~30 sekundžių)';
$string['sitesize_1'] = 'S (~50MB; 8 kursai, sukurti per ~2 minutes)';
$string['sitesize_2'] = 'M (~200MB; 73 kursai, sukurti per ~10 minučių)';
$string['sitesize_3'] = 'L (~1\'5GB; 277 kursai,sukurti per ~1\'5 valandos)';
$string['sitesize_4'] = 'XL (~10GB; 1065 kursai, sukurti per ~5 valandas)';
$string['sitesize_5'] = 'XXL (~20GB; 4177 kursai, sukurti per ~10 valandų)';
$string['size'] = 'Kurso dydis';
$string['smallfiles'] = 'Maži failai';
$string['step_example'] = 'Žingsnio pavyzdys:';
$string['targetcourse'] = 'Bandymo tikslinis kursas';
$string['testplanexplanation'] = 'Šis įrankis sukuria JMeter bandymo plano failą kartu su vartotojo kredencialų failu.

Šis testavimo planas sukurtas veikti kartu su {$a}, kuris palengvina bandymo plano vykdymą konkrečioje Moodle aplinkoje, renka informaciją apie vykdymus ir palygina rezultatus, todėl turėsite jį atsisiųsti ir naudoti test_runner.sh scenarijų arba vadovaukitės diegimo ir naudojimo instrukcijomis.

Jūs turite nustatyti slaptažodį kurso vartotojams config.php (pvz., $CFG->tool_generator_users_password = \'moodle\';). Šiam slaptažodžiui nėra numatytos reikšmės, kad būtų išvengta netyčinio įrankio naudojimo. Slaptažodžių atnaujinimo parinktį turite naudoti tuo atveju, jei kurso naudotojai turi kitus slaptažodžius arba juos sugeneravo tool_generator, bet nenustačius $CFG->tool_generator_users_password reikšmės.

Tai yra tool_generator dalis, todėl gerai veikia su kursų generuojamais kursais ir svetainių generatoriais, taip pat gali būti naudojamas su bet kokiu kursu, kuriame yra:

* Pakankamai užsiregistravusių naudotojų (priklauso nuo pasirinkto bandymo plano dydžio), kurių slaptažodis iš naujo nustatytas į „moodle“
* Puslapio modulio egzempliorius
* Forumo modulio egzempliorius su bent viena diskusija ir vienu atsakymu

Vykdydami didelius bandymo planus, galbūt norėsite atsižvelgti į savo serverio pajėgumą, nes JMeter sugeneruotas apkrovos kiekis gali būti ypač didelis. Padidinimo laikotarpis buvo pakoreguotas atsižvelgiant į gijų (naudotojų) skaičių, kad būtų sumažintos tokios problemos, tačiau apkrova vis tiek didžiulė.

**Nevykdykite bandymo plano veikiančioje sistemoje**. Ši funkcija sukuria tik JMeter tiekimo failus, todėl pati savaime nėra pavojinga, tačiau **NIEKADA** neturėtumėte vykdyti šio bandymo plano produkcinėje svetainėje.';
$string['testplansize_0'] = 'XS ({$a->users} naudotojai, {$a->loops} kilpos ir {$a->ramp up} padidinimo laikotarpis)';
$string['testplansize_1'] = 'S ({$a->users} naudotojai, {$a->loops} kilpos ir {$a->ramp up} padidinimo laikotarpis)';
$string['testplansize_2'] = 'M ({$a->users} naudotojai, {$a->loops} kilpos ir {$a->ramp up} padidinimo laikotarpis)';
$string['testplansize_3'] = 'L ({$a->users} naudotojai, {$a->loops} kilpos ir {$a->ramp up} padidinimo laikotarpis)';
$string['testplansize_4'] = 'XL ({$a->users} naudotojai, {$a->loops} kilpos ir {$a->ramp up} padidinimo laikotarpis)';
$string['testplansize_5'] = 'XXL ({$a->users} naudotojai, {$a->loops} kilpos ir {$a->ramp up} padidinimo laikotarpis)';
$string['testscenario'] = 'Kurti testavimo scenarijus';
$string['testscenario_errorparsing'] = 'Klaida analizuojant funkcijų failą: {$a}';
$string['testscenario_file'] = 'Funkcijų failas';
$string['testscenario_invalidfile'] = 'Failo formatas negalioja arba jame yra netinkamų žingsnių.';
$string['testscenario_invalidstep'] = 'Nežinomas veiksmas. Testavimo scenarijų kūrimas priima tik generatoriaus žingsnius.';
$string['testscenario_nosteps'] = 'Faile nėra jokių veiksmų, kuriuos reikėtų atlikti.';
$string['testscenario_scenarionosteps'] = 'Šiame scenarijuje nėra jokių etapų.';
$string['testscenario_steps'] = 'Testavimo scenarijaus etapai:';
$string['updateuserspassword'] = 'Atnaujinti kurso naudotojų slaptažodį';
$string['updateuserspassword_help'] = 'JMeter turi prisijungti kaip kurso naudotojai, naudotojo slaptažodį galite nustatyti naudodami $CFG->tool_generator_users_password config.php; šis nustatymas atnaujina kurso naudotojo slaptažodį pagal $CFG->tool_generator_users_password. Tai gali būti naudinga tuo atveju, jei naudojate kursą, kurio nesugeneravo tool_generator arba $CFG->tool_generator_users_password nebuvo nustatytas kuriant bandomuosius kursus.';
