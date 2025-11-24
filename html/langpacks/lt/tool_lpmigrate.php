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
 * Strings for component 'tool_lpmigrate', language 'lt', version '4.5'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Leidžiami kursai';
$string['allowedcourses_help'] = 'Pasirinkite kursus, kuriuose sistema bus pakeista. Jei kursas nenurodytas, visuose kursuose bus keičiama.';
$string['continuetoframeworks'] = 'Tęsti sistemas';
$string['coursecompetencymigrations'] = 'Kurso kompetencijų kaitaliojimas';
$string['coursemodulecompetencymigrations'] = 'Kurso veiklų ir išteklių kompetencijų kaitaliojimas';
$string['coursemodulesfound'] = 'Rasta kurso veiklų ar išteklių';
$string['coursesfound'] = 'Rasti kursai';
$string['coursestartdate'] = 'Kursų pradžios data';
$string['coursestartdate_help'] = 'Jei įjungta, kursai, kurių pradžios data yra iki nurodytos datos, nebus keičiami.';
$string['disallowedcourses'] = 'Neleidžiami kursai';
$string['disallowedcourses_help'] = 'Pasirinkite kursus, kuriuose sistemos NEGALI būti keičiamos.';
$string['errorcannotmigratetosameframework'] = 'Negalima kaitalioti tos pačios sistemos.';
$string['errorcouldnotmapcompetenciesinframework'] = 'Nepavyko susieti kompetencijų šioje sistemoje.';
$string['errors'] = 'Klaidos';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Klaida keičiant kurso kompetenciją: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Klaida keičiant veiklos ar ištekliaus kompetenciją: {$a}';
$string['excludethese'] = 'Išskirti šiuos';
$string['explanation'] = 'Šis įrankis gali būti naudojamas atnaujinti kompetencijos sistemą į naujesnę versiją.
Kursuose ir veiklose ieškoma kompetencijų, naudojančių senesnę sistemą, ir jų nuorodos yra atnaujinamos į naująją sistemą.

Nerekomenduojama tiesiogiai redaguoti seno kompetencijų rinkinio, nes tai pakeistų visas kompetencijas, kurios jau buvo suteiktos naudotojų mokymosi planuose.

Įprastai turėtumėte importuoti naują sistemos versiją, paslėpti seną sistemą, tuomet naudojant šį įrankį keisti naujus kursus į naują sistemą.';
$string['findingcoursecompetencies'] = 'Ieškoma kurso kompetencijų';
$string['findingmodulecompetencies'] = 'Ieškoti veiklos ar išteklių kompetencijų';
$string['frameworks'] = 'Sistemos';
$string['limittothese'] = 'Taikyti šiems';
$string['lpmigrate:frameworksmigrate'] = 'Sistemų kaitaliojimas';
$string['migrateframeworks'] = 'Sistemų kaitaliojimas';
$string['migratefrom'] = 'Keisti iš';
$string['migratefrom_help'] = 'Pasirinkite seną sistemą, kuri šiuo metu naudojama.';
$string['migratemore'] = 'Keisti daugiau';
$string['migrateto'] = 'Keisti į';
$string['migrateto_help'] = 'Pasirinkite sistemos naujesnę versiją. Galima pasirinkti tik nepaslėptą sistemą.';
$string['migratingcourses'] = 'Keičiami kursai';
$string['missingmappings'] = 'Trūkstami susiejimai';
$string['performmigration'] = 'Atlikti keitimą';
$string['pluginname'] = 'Kompetencijų kaitaliojimo įrankis';
$string['privacy:metadata'] = 'Kompetencijų perkėlimo įrankio papildinys nesaugo jokių asmeninių duomenų.';
$string['results'] = 'Rezultatai';
$string['startdatefrom'] = 'Pradžios data nuo';
$string['unmappedin'] = 'Nesusieta {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'Kurso kompetencija negali būti pašalinta.';
$string['warningcouldnotremovemodulecompetency'] = 'Veiklos ar ištekliaus kompetencija negali būti pašalinta.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'Kursų kompetencija jau yra priskirta.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'Veiklos ar ištekliaus kompetencija jau yra priskirta.';
$string['warnings'] = 'Įspėjimai';
