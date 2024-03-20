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
 * Strings for component 'enrol_auto', language 'ro', version '4.1'.
 *
 * @package     enrol_auto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auto:config'] = 'Configurează sesiunea automată de înscriere';
$string['auto:manage'] = 'Gestionează utilizatorii înscriși';
$string['auto:unenrol'] = 'Retrage utilizatorii de la curs';
$string['auto:unenrolself'] = 'Retrageți-vă de la curs';
$string['courseview'] = 'Vizualizare curs';
$string['customwelcomemessage'] = 'Personalizează mesajul de întâmpinare';
$string['customwelcomemessage_help'] = 'Mesajul de întâmpinare personalizat poate fi adăugat ca text simplu sau în format automat Moodle, incluzând etichete HTML și multi-lang.

Următorii substituenți pot fi incluși în mesaj:

* Nume curs {$a->coursename}
* Link către pagina de profil a utilizatorului {$a->profileurl}';
$string['defaultrole'] = 'Alocarea implicită a rolului';
$string['defaultrole_desc'] = 'Selectați poziția care trebuie alocată utilizatorilor pe parcursul înscrierii automate.';
$string['editenrolment'] = 'Editează înscrierea';
$string['enrolon'] = 'Înscrie';
$string['enrolon_desc'] = 'Eveniment care va declanșa o înscriere automată.';
$string['enrolon_help'] = 'Selectați evenimentul care ar trebui să declanșeze o înscriere automată.

**Course view** - Înscrie un utilizator în momentul vizualizării cursului.<br>

**User login** - Înscrie utilizatorii în momentul autentificării.<br>

**Course activity/resource view** - Înscrie un utilizator, atunci când este vizualizată una dintre activitățile/ resursele selectate.<br>
*OBSERVAȚIE:* această opțiune necesită o sesiune de înscriere a accesului vizitatorilor.';
$string['modview'] = 'Vizualizare activitate/ resursă curs';
$string['modviewmods'] = 'Activitate/ resursă';
$string['modviewmods_desc'] = 'Vizualizarea oricăreia dintre resurse/ activități va declanșa o înscriere automată.';
$string['pluginname'] = 'Înscriere automată';
$string['pluginname_desc'] = 'Plugin-ul de înscriere automată va înscrie în mod automat utilizatorii în momentul vizualizării cursului/ activității/ resursei.';
$string['privacy:metadata'] = 'Plugin-ul de înscriere automată nu memorează datele personale.';
$string['requirepassword'] = 'Este necesară cheia de înscriere';
$string['requirepassword_desc'] = 'Este necesară cheia de înscriere la cursurile noi, pentru a preveni eliminarea unor astfel de chei din cursurile existente.';
$string['role'] = 'Rol alocat implicit';
$string['sendcoursewelcomemessage'] = 'Transmite mesaj de întâmpinare la curs';
$string['sendcoursewelcomemessage_help'] = 'Dacă este activat, utilizatorii vor primi un mesaj de întâmpinare prin intermediul e-mail-ului, atunci când sunt înscriși automat.';
$string['status'] = 'Permite înscrierile automate';
$string['status_desc'] = 'Permite implicit înscrierea automată a utilizatorilor la curs.';
$string['status_help'] = 'Această setare determină dacă plugin-ul de înscriere automată este activat pentru acest curs.';
$string['unenrol'] = 'Retrage utilizatorul';
$string['unenrolselfconfirm'] = 'Sunteți sigur că doriți să vă retrageți de la curs "{$a}"?';
$string['unenroluser'] = 'Doriți să-l retrageți pe "{$a->user}" de la curs "{$a->course}"?';
$string['userlogin'] = 'Autentificare utilizator';
$string['welcometocourse'] = 'Bine ai venit la {$a}';
$string['welcometocoursetext'] = 'Bine ai venit la {$a->coursename}!

Dacă încă nu ai procedat astfel, editează pagina de profil pentru ca noi să aflăm mai multe despre tine:

{$a->profileurl}';
