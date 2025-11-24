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
 * Strings for component 'tool_lpmigrate', language 'ro', version '4.5'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Cursuri permise';
$string['allowedcourses_help'] = 'Selectați cursurile care urmează să fie migrate în noul cadru. Dacă nu este specificat niciun curs, atunci toate cursurile vor fi migrate.';
$string['continuetoframeworks'] = 'Continuați cu cadrele de competențe';
$string['coursecompetencymigrations'] = 'Migrarea competențelor cursului';
$string['coursemodulecompetencymigrations'] = 'Activitatea cursului și migrația competenței resurselor';
$string['coursemodulesfound'] = 'Activități de curs sau resurse găsite';
$string['coursesfound'] = 'Cursuri găsite';
$string['coursestartdate'] = 'Data de începere a cursurilor';
$string['coursestartdate_help'] = 'Dacă este activat, cursurile cu o dată de începere anterioară datei specificate nu vor fi migrate.';
$string['disallowedcourses'] = 'Cursuri interzise';
$string['disallowedcourses_help'] = 'Selectați cursurile care NU ar trebui să fie migrate în noul cadru.';
$string['errorcannotmigratetosameframework'] = 'Nu se poate migra din și în același cadru.';
$string['errorcouldnotmapcompetenciesinframework'] = 'Nu s-a putut asocia o competență în acest cadru.';
$string['errors'] = 'Erori';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Eroare la migrarea competenței cursului: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Eroare la migrarea competenței de activitate sau resursă: {$a}';
$string['excludethese'] = 'Excludeți-le';
$string['explanation'] = 'Acest instrument poate fi utilizat pentru a actualiza un cadru de competențe la o versiune mai nouă. Se caută competențe în cursuri și activități folosind cadrul mai vechi și actualizează linkurile pentru a indica noul cadru.

Nu este recomandat să editați direct vechiul set de competențe, deoarece acest lucru ar schimba toate competențele care au fost deja acordate în planurile de învățare ale utilizatorilor.

De obicei, ați importa noua versiune a unui cadru, ați ascunde vechiul cadru, apoi utilizați acest instrument pentru a migra cursuri noi în noul cadru.';
$string['findingcoursecompetencies'] = 'Găsirea competențelor cursului';
$string['findingmodulecompetencies'] = 'Găsirea competențelor de activitate și resurse';
$string['frameworks'] = 'Cadre de competențe';
$string['limittothese'] = 'Limitați la acestea';
$string['lpmigrate:frameworksmigrate'] = 'Migrare cadre de competențe';
$string['migrateframeworks'] = 'Migrare cadre de competențe';
$string['migratefrom'] = 'Migrare din';
$string['migratefrom_help'] = 'Selectați cadrul mai vechi utilizat în prezent.';
$string['migratemore'] = 'Migrați mai multe';
$string['migrateto'] = 'Migrare în';
$string['migrateto_help'] = 'Selectați versiunea mai nouă a cadrului. Este posibil doar să selectați un cadru care nu este ascuns.';
$string['migratingcourses'] = 'Migrare cursuri';
$string['missingmappings'] = 'Mapări lipsă';
$string['performmigration'] = 'Efectuați migrarea';
$string['pluginname'] = 'Instrument de migrare a competențelor';
$string['privacy:metadata'] = 'Pluginul instrumentului de migrare a competențelor nu stochează date personale.';
$string['results'] = 'Rezultate';
$string['startdatefrom'] = 'Data de începere de la';
$string['unmappedin'] = 'Nealocate în {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'Competența cursului nu a putut fi eliminată.';
$string['warningcouldnotremovemodulecompetency'] = 'Competența de activitate sau resursă nu a putut fi eliminată.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'Competența cursului de destinație există deja.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'Activitatea destinației sau competența resurselor există deja.';
$string['warnings'] = 'Avertizări';
