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
 * Strings for component 'enrol_meta', language 'ro', version '4.1'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Adăugați la grup';
$string['coursesort'] = 'Sortează lista cursurilor';
$string['coursesort_help'] = 'Aceasta determină dacă lista cursurilor, care pot fi legate, sunt sortate după ordinea de sortare (adică, ordinea setată în Administrarea site-ului> Cursuri> Gestionați cursurile și categoriile) sau alfabetic după setarea cursului.';
$string['creategroup'] = 'Creați un grup nou';
$string['defaultgroupnametext'] = '{$a->name} curs {$a->increment}';
$string['enrolmetasynctask'] = 'Sarcină de sincronizare meta-înscriere';
$string['linkedcourse'] = 'Link curs';
$string['meta:config'] = 'Configurați instanțe de meta-înscriere';
$string['meta:selectaslinked'] = 'Selectați cursul ca meta-link';
$string['meta:unenrol'] = 'Retrageți utilizatorii suspendați';
$string['nosyncroleids'] = 'Roluri care nu sunt sincronizate';
$string['nosyncroleids_desc'] = 'În mod implicit, toate atribuțiile de rol la nivel de curs sunt sincronizate de la cursuri-părinte la cursuri-copil. Rolurile selectate aici nu vor fi incluse în procesul de sincronizare. Rolurile disponibile pentru sincronizare vor fi actualizate în următoarea execuție cron.';
$string['pluginname'] = 'Meta-link-ul cursului';
$string['pluginname_desc'] = 'Plugin-ul pentru înscrierea meta-link-ului cursului sincronizează înscrierile și rolurile din două cursuri diferite.';
$string['privacy:metadata:core_group'] = 'Înscrierea meta-plugin-ului poate crea un grup nou sau poate utiliza un grup existent, pentru a adăuga toți participanții la curs.';
$string['syncall'] = 'Sincronizați toți utilizatorii înscriși';
$string['syncall_desc'] = 'Dacă este activat, toți utilizatorii înscriși sunt sincronizați, chiar dacă nu au niciun rol în cursul-părinte, dacă sunt dezactivați, doar utilizatorii care au cel puțin un rol sincronizat sunt înscriși în cursul copil.';
$string['wscannotcreategroup'] = 'Nicio permisiune de a crea un grup în ID curs asociat = {$a}.';
$string['wsinvalidcourse'] = 'Id-ul cursului = {$a} nu există sau nu există permisiunea de a conecta în meta-înscriere.';
$string['wsinvalidmetacourse'] = 'Meta curs id = {$a} nu există sau nu există permisiunea de a adăuga instanță de înscriere.';
$string['wsnoinstancesspecified'] = 'Nu există instanțe specificate';
