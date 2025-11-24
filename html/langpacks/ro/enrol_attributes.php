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
 * Strings for component 'enrol_attributes', language 'ro', version '4.5'.
 *
 * @package     enrol_attributes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcondition'] = 'Adăugă condiție';
$string['addgroup'] = 'Adaugă grup';
$string['ajax-error'] = 'A apărut o eroare';
$string['ajax-okforced'] = 'OK, {$a} utilizatorii au fost înscriși';
$string['ajax-okpurged'] = 'OK, înscrierile au fost eliminate';
$string['attributes:config'] = 'Configurează sesiune plugin';
$string['attributes:manage'] = 'Gestionarea utilizatorilor înscriși';
$string['attributes:unenrol'] = 'Retrage utilizatori de la curs';
$string['attributes:unenrolself'] = 'Retrageți-vă de la curs';
$string['attrsyntax'] = 'Reguli privind câmpurile din profilul utilizatorului';
$string['attrsyntax_help'] = '<p>Aceste reguli se pot aplica numai câmpurilor personalizate ale profilului utilizatorului.</p>';
$string['confirmforce'] = 'Acesta va (re)înscrie toți utilizatorii care corespund acestei reguli.';
$string['confirmpurge'] = 'Acesta va elimina toate înscrieriile care corespund acestei reguli.';
$string['defaultrole'] = 'Rol implicit';
$string['defaultrole_desc'] = 'Poziția implicită utilizată pentru a înscrie persoanele cu acest plugin (fiecare sesiunea se poate suprapune acesteia).';
$string['defaultwhenexpired'] = 'Comportament implicit după expirarea atributelor';
$string['defaultwhenexpired_desc'] = 'Ce trebuie făcut cu utilizatorii care nu mai corespund regulii atributelor. Această setare poate fi anulată în fiecare sesiune de înscrieri.';
$string['deletecondition'] = 'Șterge condiție';
$string['force'] = 'Grăbește înscrierile acum';
$string['mappings'] = 'Cartografiere Shibboleth';
$string['mappings_desc'] = 'Când este utilizată autentificarea Shibboleth, acest plugin poate actualiza în mod automat profilul utilizatorului la fiecare autentificare.<br><br>De exemplu, dacă doriți să actualizați câmpuri din profilul utilizatorului <code>homeorganizationtype</code> cu atributul Shibboleth <code>Shib-HomeOrganizationType</code> (cu condiția ca aceasta să fie variabila de mediu disponibilă pentru server în momentul conectării), puteți introduce pe o singură linie: <code>Shib-HomeOrganizationType:homeorganizationtype</code><br>Puteți introduce atâtea linii, câte sunt necesare.<br><br>Nu completați acest spațiu, dacă nu doriți să utilizați această caracteristică sau autentificarea Shibboleth.';
$string['observelogins'] = 'Înscrie imediat utilizatorii la conectare';
$string['observelogins_desc'] = 'Încercați să înscrieți utilizatorii, imediat ce s-au autentificat. Această opțiune va avea impact de performanță asupra site-ului dumneavoastră și poate fi dezactivată în situația în care mai mulți utilizatori se conectează simultan, iar înscrierea lor imediată devine un blocaj.';
$string['pluginname'] = 'Înscriere după câmpurile profilului de utilizator';
$string['privacy:metadata'] = 'Plugin-ul de înscrieri Înscriere după câmpurile profilului de utilizator nu memorează datele personale.';
$string['profilefields'] = 'Câmpurile de profil care urmează a fi utilizate în selector';
$string['profilefields_desc'] = 'Ce câmpuri din profilul de utilizator pot fi utilizate la configurarea unei sesiuni de înscriere ?<br><br><b>Dacă nu selectați aici niciun rol, pulgin-ul va fi discutabil și, prin urmare, dezactivează utilizarea acestuia la cursuri.</b><br>Cu toate acestea, caracteristica de mai jos poate fi utilizată în acest caz.';
$string['purge'] = 'Elimină înscrieri';
$string['removewhenexpired'] = 'Retragere după expirarea atributelor';
$string['removewhenexpired_help'] = 'Retragerea utilizatorilor la autentificare dacă nu mai corespund regulii atributelor.';
$string['whenexpired'] = 'Comportamentul după expirarea atributelor';
$string['whenexpired_help'] = 'Ce trebuie făcut cu utilizatorii care nu mai corespund regulii atributelor.';
$string['whenexpireddonothing'] = 'Păstrează utilizatorul înscris';
$string['whenexpiredremove'] = 'Utilizator retras';
$string['whenexpiredsuspend'] = 'Suspendă utilizatorul';
