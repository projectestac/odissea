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
 * Strings for component 'enrol_imsenterprise', language 'ro', version '4.5'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'După ce ați salvat setările, vă recomandăm';
$string['allowunenrol'] = 'Permite datelor IMS să anuleze înscrierea cursanților/formatorilor';
$string['allowunenrol_desc'] = 'Dacă este activat, înscrierile la cursuri vor fi eliminate, atunci când este specificat în datele Enterprise.';
$string['basicsettings'] = 'Setări de bază';
$string['categoryidnumber'] = 'Permite numărul ID al categoriei';
$string['categoryidnumber_desc'] = 'Dacă este activat, IMS Enterprise va crea o categorie cu număr de ID';
$string['categoryseparator'] = 'Caracter separator de categorii';
$string['categoryseparator_desc'] = 'Obligatoriu atunci când „Permiteți numărul ID categoriei” este activat. Flosiți un caracter pentru a separa numele categoriei și numărul ID.';
$string['coursesettings'] = 'Opțiuni date despre curs';
$string['createnewcategories'] = 'Creați noi categorii de cursuri (ascunse) dacă nu sunt găsite în Moodle';
$string['createnewcategories_desc'] = 'Dacă elementul <org><orgunit> este prezent în datele primite ale unui curs, conținutul acestuia va fi folosit pentru a specifica o categorie, dacă respectivul curs urmează să fie creat de la zero. Plugin-ul NU va reclasifica cursurile existente.

Dacă nu există nicio categorie cu numele dorit, atunci va fi creată o categorie ascunsă.';
$string['createnewcourses'] = 'Creați cursuri noi (ascunse), dacă nu le găsiți în Moodle';
$string['createnewcourses_desc'] = 'Dacă este activat, plugin-ul de înscriere IMS Enterprise poate crea cursuri noi pentru orice găsește în datele IMS, dar nu în baza de date Moodle. Cursurile nou create sunt inițial ascunse.';
$string['createnewusers'] = 'Creați conturi de utilizator pentru utilizatorii care nu sunt încă înregistrați în Moodle';
$string['createnewusers_desc'] = 'Datele de înregistrare IMS Enterprise descriu de obicei un set de utilizatori. Dacă este activat, pot fi create conturi pentru orice utilizator care nu se găsește în baza de date Moodle.

Utilizatorii sunt căutați mai întâi după numărul lor de identificare și apoi după numele de utilizator Moodle. Parolele nu sunt importate de pluginul IMS Enterprise. Utilizarea unui plugin de autentificare este recomandată pentru autentificarea utilizatorilor.';
$string['cronfrequency'] = 'Frecvența procesării';
$string['deleteusers'] = 'Ștergeți conturile de utilizator în momentul specificat în datele IMS';
$string['deleteusers_desc'] = 'Dacă este activat, datele de înscriere IMS Enterprise pot specifica ștergerea conturilor de utilizator (dacă semnalizatorul „rectifică status” este setat la 3, ceea ce reprezintă ștergerea unui cont). Înscrierea utilizatorului nu este ștearsă efectiv din baza de date Moodle, așa cum se obișnuiește în Moodle, ci este setat un simbol pentru a marca contul ca șters..';
$string['disableenrolmentandremoveallroles'] = 'Suspendare înscriere și eliminare roluri';
$string['disableenrolonly'] = 'Doar suspendare înscriere';
$string['doitnow'] = 'efectuați un import IMS Enterprise chiar acum';
$string['emptyattribute'] = 'Lăsați spațiul necompletat';
$string['filelockedmail'] = 'Fișierul text, pe care îl utilizați pentru înregistrări bazate pe fișiere IMS ({$a}), nu poate fi șters prin procesul cron. Acest lucru înseamnă, de obicei, că permisiunile nu sunt corecte. Vă rugăm să remediați permisiunile, astfel încât Moodle să poată șterge fișierul; altfel ar putea fi procesat în mod repetat.';
$string['filelockedmailsubject'] = 'Eroare semnificativă: fișier de înscriere';
$string['fixcasepersonalnames'] = 'Scrieți numele personale cu majuscule';
$string['fixcaseusernames'] = 'Scrieți numele personale cu litere mici';
$string['ignore'] = 'Ignoră';
$string['importimsfile'] = 'Importă fișier IMS Enterprise';
$string['imsenterprise:config'] = 'Configurează sesiunea de înscrieri IMS Enterprise';
$string['imsenterprisecrontask'] = 'Procesarea fișierului de înscriere';
$string['imsrolesdescription'] = 'Specificația IMS Enterprise include 8 tipuri distincte de roluri. Vă rugăm să selectați modul în care doriți ca acestea să fie atribuite în Moodle, inclusiv dacă vreuna dintre ele ar trebui ignorată.';
$string['location'] = 'Localizarea fișierului';
$string['logtolocation'] = 'Locația de ieșire a fișierului jurnal (necompletat pentru situațiile în care nu există conectare)';
$string['mailadmins'] = 'Notifică administratorul prin e-mail';
$string['mailusers'] = 'Notifică utilizatorii prin e-mail';
$string['messageprovider:imsenterprise_enrolment'] = 'Mesaj de înscriere IMS Enterprise';
$string['miscsettings'] = 'Diverse';
$string['nestedcategories'] = 'Permiteți categorii în serie';
$string['nestedcategories_desc'] = 'Dacă este activată, IMS Enterprise va crea categorii în serie';
$string['noaction'] = 'Nu există nicio acțiune';
$string['pluginname'] = 'Fișier IMS Enterprise';
$string['pluginname_desc'] = 'Această metodă va verifica și procesa în mod repetat un fișier text formatat special în locația pe care o specificați. Fișierul trebuie să respecte specificațiile IMS Enterprise care conțin elemente XML de persoană, grup și membru.';
$string['privacy:metadata'] = 'Plugin-ul de înregistrare a fișierelor IMS Enterprise nu memorează date personale.';
$string['processphoto'] = 'Adăugați la profil date privind fotografia utilizatorului';
$string['processphotowarning'] = 'Avertisment: Procesarea imaginilor poate adăuga o sarcină semnificativă asupra serverului. Vă recomandăm să nu activați această opțiune, dacă se preconizează procesarea unui număr mare de studenți.';
$string['removeenrolmentandallroles'] = 'Șterge înscrierile și rolurile';
$string['restricttarget'] = 'Procesați datele, numai dacă este specificată următoarea țintă';
$string['restricttarget_desc'] = 'Un fișier de date IMS Enterprise ar putea fi destinat mai multor „ținte” - LMS-uri diferite sau sisteme diferite în cadrul unei școli/ universități. Este posibil să specificați în fișierul Enterprise că datele sunt destinate unuia sau mai multor sisteme țintă denumite, menționându-le în etichetele <target> conținute în eticheta <properties>.

În general, nu trebuie să vă faceți griji în legătură cu acest aspect. Lăsați setarea necompletată și Moodle va procesa întotdeauna fișierul de date, indiferent dacă este specificată sau nu o țintă. În caz contrar, completați numele exact care va fi afișat în interiorul etichetei <target>.';
$string['roles'] = 'Roluri';
$string['settingfullname'] = 'Etichetă de descriere IMS pentru numele complet al cursului';
$string['settingfullnamedescription'] = 'Numele complet este un câmp obligatoriu pentru curs; deci, trebuie să definiți eticheta de descriere selectată în fișierul IMS Enterprise';
$string['settingshortname'] = 'Etichetă de descriere IMS pentru denumirea scurtă a cursului';
$string['settingshortnamedescription'] = 'Numele prescurtat este un câmp obligatoriu pentru curs; deci, trebuie să definiți eticheta de descriere selectată în fișierul IMS Enterprise';
$string['settingsummary'] = 'Etichetă de descriere IMS pentru rezumatul cursului';
$string['settingsummarydescription'] = 'Este un câmp opțional, selectați „Lăsați-l gol”, dacă nu doriți să specificați un rezumat al cursului';
$string['sourcedidfallback'] = 'Utilizați „ID sursă” în situația în care câmpul „ID utilizator” nu este identificat';
$string['sourcedidfallback_desc'] = 'În datele IMS, câmpul <sourcedid> reprezintă codul de identificare persistent pentru o persoană, așa cum este utilizat în sistemul sursă. Câmpul <userid> este un câmp separat care ar trebui să conțină codul de identificare folosit de utilizator la conectare. În multe cazuri, aceste două coduri pot fi unul și același - dar nu întotdeauna.

Unele sisteme de informații pentru studenți nu reușesc să genereze câmpul <utilizator>. În acest caz, ar trebui să activați această setare, pentru a permite utilizarea <sourcedid> ca ID de utilizator Moodle. În caz contrar, lăsați această setare dezactivată.';
$string['truncatecoursecodes'] = 'Trunchiați codurile de curs la această lungime';
$string['truncatecoursecodes_desc'] = 'În unele situații, este posibil să vă doriți să trunchiați codurile existente de curs la o lungime specificată înainte de procesare. În acest caz, introduceți numărul de caractere din această casetă. În caz contrar, lăsați caseta necompletată și trunchierea nu va fi efectuată.';
$string['unenrolaction'] = 'Acțiune de anulare a înscrierii';
$string['unenrolaction_desc'] = 'Acțiune care trebuie întreprinsă atunci când unui utilizator i se anulează înscrierea la un curs (se aplică numai atunci când setarea de anulare a înscrierii de mai sus este activată).';
$string['updatecourses'] = 'Actualizează curs';
$string['updatecourses_desc'] = 'Dacă este activat, plugin-ul de înscriere IMS Enterprise poate actualiza numele complete și denumirile prescurtate ale cursului (dacă semnalizatorul „rectifică status” este setat la 2, ceea ce reprezintă o actualizare).';
$string['updateusers'] = 'Actualizați conturile de utilizator în momentul specificat în datele IMS';
$string['updateusers_desc'] = 'Dacă este activată, datele de înscriere IMS Enterprise pot specifica modificările conturilor de utilizator (dacă semnalizatorul „rectifică status” este setat la 2, ceea ce reprezintă o actualizare).';
$string['usecapitafix'] = 'Bifați această casetă, dacă utilizați Capita (deoarece formatul XML este ușor diferit)';
$string['usecapitafix_desc'] = 'S-a dovedit că sistemul de date pentru studenți produs de Capita  prezintă o ușoară eroare în rezultatul XML. Dacă utilizați Capita, ar trebui să activați această setare - altfel, lăsați-o bifată.';
$string['usersettings'] = 'Opțiuni date utilizator';
$string['zeroisnotruncation'] = '0 înseamnă "fără trunchiere"';
