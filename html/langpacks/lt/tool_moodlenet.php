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
 * Strings for component 'tool_moodlenet', language 'lt', version '4.5'.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingaresource'] = 'Turinio pridėjimas iš MoodleNet';
$string['aria:enterprofile'] = 'Įveskite savo MoodleNet profilio ID';
$string['aria:footermessage'] = 'Naršykite turinį MoodleNet';
$string['autoenablenotification'] = '<p>Moodle 4.0 ir naujesnėje versijoje <a href="https://moodle.net/">MoodleNet</a> integravimas įgalintas pagal numatytuosius nustatymus skiltyje Išplėstinės funkcijos. Naudotojai, galintys kurti ir valdyti veiklas, gali naršyti MoodleNet per veiklos parinkiklį ir importuoti MoodleNet išteklius į savo kursus.</p><p>Jei pageidaujama, gali būti nurodytas alternatyvus MoodleNet egzempliorius <a href="{$a->settingslink}">MoodleNet nustatymai</a>.</p>';
$string['autoenablenotification_subject'] = 'Numatytasis MoodleNet nustatymas pakeistas.';
$string['browsecontentmoodlenet'] = 'Arba ieškokite turinio MoodleNet';
$string['clearsearch'] = 'Išvalyti paiešką';
$string['connectandbrowse'] = 'Prisijungti ir naršyti:';
$string['defaultmoodlenet'] = 'MoodleNet URL';
$string['defaultmoodlenet_desc'] = 'MoodleNet egzemplioriaus URL, pasiekiamas per veiklos parinkiklį.';
$string['defaultmoodlenetname'] = 'MoodleNet egzemplioriaus pavadinimas';
$string['defaultmoodlenetname_desc'] = 'MoodleNet egzemplioriaus pavadinimas, pasiekiamas per veiklos parinkiklį.';
$string['defaultmoodlenetnamevalue'] = 'MoodleNet Central';
$string['enablemoodlenet'] = 'Įgalinti MoodleNet integraciją (inbound)';
$string['enablemoodlenet_desc'] = 'Jei įjungta, naudotojas, galintis kurti ir valdyti veiklas, gali naršyti MoodleNet per veiklos parinkiklį ir importuoti MoodleNet išteklius į savo kursą. Be to, naudotojas, galintis atkurti atsargines kopijas, gali pasirinkti atsarginės kopijos failą MoodleNet ir atkurti jį į Moodle.';
$string['errorduringdownload'] = 'Atsisiunčiant failą įvyko klaida: {$a}';
$string['footermessage'] = 'Arba ieškokite turinio';
$string['forminfo'] = 'Jūsų MoodleNet profilio ID bus automatiškai išsaugotas jūsų profilyje šioje svetainėje.';
$string['importconfirm'] = 'Jūs ketinate importuoti turinį „{$a->resourcename} ({$a->resourcetype})“ į kursą „{$a->coursename}“. Ar tikrai norite tęsti?';
$string['importconfirmnocourse'] = 'Ketinate importuoti turinį „{$a->resourcename} ({$a->resourcetype})“ į savo svetainę. Ar tikrai norite tęsti?';
$string['importformatselectguidingtext'] = 'Kokiu formatu norėtumėte, kad turinys „{$a->name} ({$a->type})“ būtų įtrauktas į jūsų kursą?';
$string['importformatselectheader'] = 'Pasirinkti turinio rodymo formatą';
$string['inputhelp'] = 'Arba, jei jau turite MoodleNet paskyrą, nukopijuokite ID iš savo MoodleNet profilio ir įklijuokite jį čia:';
$string['instancedescription'] = 'MoodleNet yra atvira socialinės žiniasklaidos platforma, skirta pedagogams, daugiausia dėmesio skiriant bendrai atvirų išteklių kolekcijų kuravimui.';
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-example@moodle.net';
$string['invalidmoodlenetprofile'] = '$userprofile netinkamai suformatuotas';
$string['missinginvalidpostdata'] = 'Trūksta MoodleNet išteklių informacijos arba jos formatas yra netinkamas.
Jei tai kartojasi, susisiekite su svetainės administratoriumi.';
$string['mnetprofile'] = 'MoodleNet profilis';
$string['mnetprofiledesc'] = '<p>Čia įveskite savo MoodleNet profilio informaciją, kad lankantis MoodleNet būtumėte nukreipti į savo profilį.</p>';
$string['moodlenetnotenabled'] = 'Kad būtų galima apdoroti išteklių importą, MoodleNet integracija turi būti įjungta Svetainės administravime / MoodleNet.';
$string['moodlenetsettings'] = 'MoodleNet gaunamo ryšio nustatymai';
$string['notification'] = 'Ketinate importuoti turinį „{$a->name} ({$a->type})“ į savo svetainę. Pasirinkite kursą, prie kurio jis turėtų būti įtrauktas, arba <a href="{$a->cancellink}">atšaukite</a>.';
$string['pluginname'] = 'MoodleNet';
$string['privacy:metadata'] = 'MoodleNet įrankis tik palengvina kominikavimą su MoodleNet. Jis nesaugo jokių duomenų.';
$string['profilevalidationerror'] = 'Bandant patvirtinti jūsų MoodleNet profilio ID kilo problema';
$string['profilevalidationfail'] = 'Įveskite galiojantį MoodleNet profilio ID';
$string['profilevalidationpass'] = 'Atrodo gerai!';
$string['removedmnetprofilenotification'] = 'Dėl naujausių MoodleNet platformos pakeitimų visi naudotojai, anksčiau svetainėje išsaugoję savo MoodleNet profilio ID, norėdami autentifikuotis MoodleNet platformoje, turės įvesti MoodleNet profilio ID nauju formatu.';
$string['removedmnetprofilenotification_subject'] = 'MoodleNet profilio ID formato keitimas';
$string['saveandgo'] = 'Išsaugoti ir eiti';
$string['searchcourses'] = 'Ieškoti kursų';
$string['selectpagetitle'] = 'Pasirinkti puslapį';
$string['uploadlimitexceeded'] = 'Failo dydis {$a->file size} viršija naudotojo įkėlimo limitą ({$a->upload limit} baitai).';
