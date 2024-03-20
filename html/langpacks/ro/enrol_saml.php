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
 * Strings for component 'enrol_saml', language 'ro', version '4.1'.
 *
 * @package     enrol_saml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Alocă rol';
$string['created_group_info'] = 'Descriere pentru grupuri noi';
$string['created_group_info_description'] = 'Setați în acest câmp textul care va fi utilizat pentru descrierea grupurilor noi create de extensie';
$string['defaultperiod'] = 'Perioada de înscriere implicită';
$string['defaultperiod_desc'] = 'Setarea duratei implicite a perioadei de înscreiri implicite (în secunde).';
$string['enrolledincourserole'] = 'Înscris în "{$a->course}" ca "{$a->role}"';
$string['enrolusers'] = 'Înscrie utilizatori';
$string['error_instance_creation'] = 'Există o instanță inactivă a acestui plugin SAML pentru acest curs "{$a}", activați-l în loc să creați unul nou';
$string['group_prefix'] = 'Prefix pentru grupurile gestionate';
$string['group_prefix_description'] = 'Definiți un prefix, dacă doriți ca extensia să gestioneze numai grupurile care corespund prefixului. Lăsați-l necompletat, pentru a le gestiona pe toate. Câmp cu valori multiple separate prin virgulă';
$string['logfile'] = 'Fișier jurnal';
$string['logfile_description'] = 'Dacă fișierul este definit, informațiile de înscriere pentru cursuri și grupuri vor fi stocate. (Folosiți o cale absolută sau Moodle va salva acest fișier în folderul moodledata).';
$string['pluginname'] = 'Înscrieri SAML';
$string['pluginname_desc'] = 'Plugin-ul de înscrieri saml permite utilizatorilor să se înscrie automat la cursuri, atunci când se conectează cu ajutorul plugin-ul auth / saml pe baza datelor furnizate de furnizorul de identitate. (asigurați-vă că furnizați cartografierea cursului și a rolurilor în setările plugin-ului auth / saml)';
$string['saml:config'] = 'Configurați sesiunile de înscriere saml';
$string['saml:enrol'] = 'Înscrie utilizatorii';
$string['saml:manage'] = 'Gestionează înscrierile utilizatorilor';
$string['saml:unenrol'] = 'Retrage utilizatori de la curs';
$string['saml:unenrolself'] = 'Retrageți-vă de la curs';
$string['status'] = 'Activează înscrierile saml';
$string['status_desc'] = 'Permite accesul la cursuri al utilizatorilor înscriși intern. Acesta trebuie activat în majoritatea cazurilor.';
$string['status_help'] = 'Această setare determină dacă utilizatorii pot fi înscriși automat prin autentificare saml.';
$string['statusdisabled'] = 'Dezactivat';
$string['statusenabled'] = 'Activat';
$string['unenrolselfconfirm'] = 'Sunteți sigur că doriți să vă retrageți de la cursul "{$a}"?';
$string['unenroluser'] = 'Sunteți sigur că doriți să-l retrageți pe "{$a->user}" de la cursul "{$a->course}"?';
$string['unenrolusers'] = 'Retrage utilizatori';
$string['wscannotenrol'] = 'Instanța de plugin SAML nu poate înscrie un utilizator la cursul id = {$a->courseid}';
$string['wsnoinstance'] = 'Sesiunea plugin-ului de înscriere SAML nu există sau este dezactivată pentru cursul (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Nu aveți permisiunea de a atribui această rolului ({$a->roleid}) acestui utilizator ({$a->userid}) în acest curs({$a->courseid}).';
