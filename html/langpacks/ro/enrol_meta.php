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
 * Strings for component 'enrol_meta', language 'ro', version '4.5'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Adăugați la grup';
$string['coursesort'] = 'Lista ordonată a cursurilor sursă';
$string['coursesort_help'] = 'Când conectați cursul sursă la cursul țintă, cum ar trebui să fie ordonate cursurile sursă?';
$string['creategroup'] = 'Creați un grup nou';
$string['defaultgroupnametext'] = '{$a->name} curs {$a->increment}';
$string['enrolmetasynctask'] = 'Sarcină de sincronizare meta-înscriere';
$string['linkedcourse'] = 'Link curs';
$string['meta:config'] = 'Configurați instanțe de meta-înscriere';
$string['meta:selectaslinked'] = 'Selectați cursul ca meta-link';
$string['meta:unenrol'] = 'Retrageți utilizatorii suspendați';
$string['nosyncroleids'] = 'Roluri care nu sunt sincronizate';
$string['nosyncroleids_desc'] = 'Selectați orice rol care nu ar trebui sincronizat între cursul sursă și cursul țintă.';
$string['pluginname'] = 'Meta-link-ul cursului';
$string['pluginname_desc'] = 'Link-ul meta cursului sincronizează înscrierile și rolurile din cursul sursă în cursul țintă.';
$string['privacy:metadata:core_group'] = 'Plugin-ul meta link pentru înscriere în curs poate crea un grup nou sau poate utiliza un grup existent pentru a adăuga participanți din cursul sursă.';
$string['samemetacourse'] = 'Nu poți adăuga o legătură meta către același curs';
$string['syncall'] = 'Sincronizați toți utilizatorii înscriși';
$string['syncall_desc'] = 'Dacă este activată opțiunea, toți utilizatorii înscriși sunt sincronizați din cursul sursă, chiar dacă nu au niciun rol în curs.
În caz contrar, doar utilizatorii care au cel puțin un rol sunt înscriși la cursul țintă.';
$string['unknownmetacourse'] = 'Denumire prescurtată a cursului meta necunoscută';
$string['wscannotcreategroup'] = 'Nicio permisiune de a crea un grup în ID curs asociat = {$a}.';
$string['wsinvalidcourse'] = 'ID-ul cursului = {$a} nu există sau nu aveți permisiunea de a adăuga meta-link al cursului.';
$string['wsinvalidmetacourse'] = 'Meta curs ID = {$a} nu există sau nu aveți permisiunea de a adăuga o instanță de înscriere.';
$string['wsnoinstancesspecified'] = 'Nu există instanțe specificate';
