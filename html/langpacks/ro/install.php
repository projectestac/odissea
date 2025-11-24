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
 * Strings for component 'install', language 'ro', version '4.5'.
 *
 * @package     install
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'Directorul admin specificat este incorect';
$string['admindirname'] = 'Director Admin';
$string['admindirsetting'] = 'Foarte puțini webhosts folosesc / admin ca adresă URL specială pentru a accesa un
     panoul de control sau ceva de genul acesta. Din păcate, acest lucru intră în conflict cu
     locație standard pentru paginile de administrare Moodle. Puteți rezolva acest lucru
     redenumirea directorului de administrare din instalarea dvs. și plasarea acestuia
     nume nou aici. De exemplu: <br /> <br /> <b> moodleadmin </b> <br /> <br />
     Aceasta va remedia linkurile de administrator din Moodle.';
$string['admindirsettinghead'] = 'Se setează Admin Directory...';
$string['admindirsettingsub'] = 'Foarte puțini webhosts folosesc / admin ca adresă URL specială pentru a accesa un
     panoul de control sau ceva de genul acesta. Din păcate, acest lucru intră în conflict cu
     locație standard pentru paginile de administrare Moodle. Puteți rezolva acest lucru
     redenumirea directorului de administrare din instalarea dvs. și plasarea acestuia
     nume nou aici. De exemplu: <br /> <br /> <b> moodleadmin </b> <br /> <br />
     Aceasta va remedia linkurile de administrator din Moodle.';
$string['availablelangs'] = 'Pachete de limbă disponibile';
$string['caution'] = 'Atenţie';
$string['chooselanguage'] = 'Selectaţi o limbă';
$string['chooselanguagehead'] = 'Selectare limbă';
$string['chooselanguagesub'] = 'Vă rugăm selectaţi limba pentru interfaţa de instalare, limba selectată va fi folosită EXCLUSIV în cadrul procedurii de instalare. Ulterior veţi putea selecta limba în care doriţi să fie afişată interfaţa.';
$string['cliadminemail'] = 'Noua adresă de email a utilizatorului admin';
$string['cliadminpassword'] = 'Noua parola de utilizator a adminului';
$string['cliadminusername'] = 'Numele de utilizator pentru contul de admin';
$string['clialreadyconfigured'] = 'Fișierul de configurare config.php există deja. Te rugăm să utilizezi admin/cli/install_database.php pentru a instala Moodle pe acest site.';
$string['clialreadyinstalled'] = 'Fișierul de configurare config.php există deja. Vă rugăm să folosiți dmin/cli/install_database.php to pentru a upgrada Moodle pentru acest site.';
$string['cliinstallfinished'] = 'Instalare completă realizată cu succes.';
$string['cliinstallheader'] = 'Program command line installation {$a} Moodle';
$string['climustagreelicense'] = 'În modul non interactiv trebuie să acceptați licența prin specificarea opțiunii -- sunt de acord cu licența';
$string['cliskipdatabase'] = 'Omitere instalare bază de date';
$string['clisupportemail'] = 'Adresa de email pentru asistență';
$string['clitablesexist'] = 'Tabele de baze de date deja prezente; Instalarea CLI nu poate continua.';
$string['compatibilitysettings'] = 'Se verifică setările PHP...';
$string['compatibilitysettingshead'] = 'Se verifică setările PHP...';
$string['compatibilitysettingssub'] = 'Server-ul dumneavoastră ar trebui să treacă toate aceste teste pentru ca Moodle să ruleze corect';
$string['configfilenotwritten'] = 'Script-ul de instalare nu a putut să creze în mod automat un fișier care conține setările dumneavoastră config.php  probabil pentru că directorul Moodle nu poate fi scris. Aveți posibilitatea să copiați manual următorul cod într-un fișier denumit config.php în directorul root Moodle.';
$string['configfilewritten'] = 'config.php a fost creat cu succes';
$string['configurationcomplete'] = 'Configurare finalizată';
$string['configurationcompletehead'] = 'Finalizare configurare';
$string['configurationcompletesub'] = 'Moodle a făcut o încercare de salvare a fişierului de configurare a sitului dumneavoastră în directorul root al Moodle.';
$string['database'] = 'Bază de date';
$string['databasehead'] = 'Setări baza de date';
$string['databasehost'] = 'Gazdă baza de date';
$string['databasename'] = 'Nume baza de date';
$string['databasepass'] = 'Parolă baza de date';
$string['databaseport'] = 'Port bază de date';
$string['databasesocket'] = 'Socket Unix';
$string['databasetypehead'] = 'Alegere driver baza de date';
$string['databasetypesub'] = 'Moodle permite mai multe tipuri de servere de baze de date. Vă rugăm să contactați administratorul serverului, dacă nu știți ce tip să utilizați.';
$string['databaseuser'] = 'Utilizator baza de date';
$string['dataroot'] = 'Director date';
$string['datarooterror'] = '„Directorul de date” specificat de dvs. nu a putut fi găsit sau creat. Fie corectați calea, fie creați manual acel director.';
$string['datarootpermission'] = 'Permisiuni directoare date';
$string['datarootpublicerror'] = '„Directorul de date” pe care l-ați specificat este accesibil direct prin web, trebuie să utilizați un director diferit.';
$string['dbconnectionerror'] = 'Nu s-a putut realiza conexiunea cu baza de date specificată de dumneavoastră. Vă rugăm verificaţi setările făcute pentru baza de date.';
$string['dbcreationerror'] = 'Eroare creare bază de date. Nu s-a putut crea baza de date cu numele şi setările furnizate.';
$string['dbhost'] = 'Server gazdă';
$string['dbpass'] = 'Parolă';
$string['dbport'] = 'Port';
$string['dbprefix'] = 'Prefix tabele';
$string['dbtype'] = 'Tip';
$string['directorysettings'] = '<p>Vă rugăm să confirmați locațiile unde a fost instalat Moodle.</p>

<p><b>Adresa web:</b>
Se specifică adresa de web completă de unde va fi accesat Moodle.
Dacă site-ul web este accesibil prin intermediul mai multor adrese URL, selectați-o pe cea mai simplă  pe care cursanții dumneavoastră o folosesc. Nu includeți un trailing slash.</p>

<p><b>Director Moodle :</b>
Specificați calea completă a directorului în această instalare
Asigurați-vă că upper/lower case este corect.</p>

<p><b>Data directory:</b>
Aveți nevoie de un loc undeMoodle poate salva fișierele încărcate. Acest director ar trebui să fie ușor de citit și poate fi SCRiS de către utilizatorii serverului web (de obicei, "nobody" sau "apache"), dar nu trebuie să fie accesibile în mod direct, pe web. Programul de instalare va încerca să-l creeze, dacă nu există.</p>';
$string['directorysettingshead'] = 'Vă rugăm să confirmați locația acestei instalări Moodle';
$string['directorysettingssub'] = '<b>Adresa web:</b>
Se specifică adresa de web completă în cazul unde va fi accesat Moodle .
Dacă site-ul web este accesibil prin intermediul mai multor adrese URL, selectați-o pe cea mai simplă pe care o folosesc cursanții
Nu includeți a trailing slash.
<br />
<br />
<b>Director Moodle :</b>
Specificați completă a directorului la această instalare
Asigurați-vă că upper/lower case este corect.
<br />
<br />
<b>Data directory:</b>
Aveți nevoie de un loc undeMoodle poate salva fișierele încărcate. Acest director ar trebui să fie ușor de citit și poate fi SCRiS de către utilizatorii serverului web (de obicei, "nobody" sau "apache"), dar nu trebuie să fie accesibile în mod direct, pe web. Programul de instalare va încerca să-l creeze, dacă nu există.</p>';
$string['dirroot'] = 'Director Moodle';
$string['dirrooterror'] = 'Setarea "Moodle directory " pare a fi incorectă - nu putem găsi o instalare Moodle . Valoarea de mai jos a fost resetată.';
$string['download'] = 'Descarcă';
$string['downloadlanguagebutton'] = 'Descarcă modulul de localizare  &quot;{$a}&quot;';
$string['downloadlanguagehead'] = 'Descarcă modulul de localizare';
$string['downloadlanguagenotneeded'] = 'Puteţi continua procesul de instalare folosind modulul de localizare implicit "{$a}".';
$string['downloadlanguagesub'] = 'Aveți acum posibilitatea de a descărca un language pack și să continuați procesul de instalare în această limbă. <br /><br /> Dacă nu puteți să descărcați language pack, procesul de instalare va continua în limba engleză. (Odată ce procesul de instalare este complet, veți avea posibilitatea de a descărca și instala language pack suplimentare.)';
$string['doyouagree'] = 'Sunteți de acord? (da/nu):';
$string['environmenthead'] = 'Se verifică mediul...';
$string['environmentsub'] = 'Verificăm dacă diferitele componente ale sistemului dumneavoastră îndeplinesc cerințele sistemului';
$string['environmentsub2'] = 'Fiecare versiune Moodle are o anumită cerință minimă PHP și un număr de extensii PHP obligatorii.
Verificarea completă a mediului se face înainte de fiecare instalare și upgrade. Vă rugăm să contactați administratorul serverului, dacă nu știți cum se instalează noua versiune sau dacă activați extensiile PHP.';
$string['errorsinenvironment'] = 'Verificarea mediului eșuată!';
$string['fail'] = 'Eșuare';
$string['fileuploads'] = 'Încărcare fişiere';
$string['fileuploadserror'] = 'Acest parametru trebuie să fie activat';
$string['fileuploadshelp'] = '<p>Încărcarea fișierelor este dezactivată pe serverul dumneavoastră.</p>

<p>Moodle poate fi, totuși, instalat, dar fără această abilitate, nu veți putea
    să încărcați fișiere în curs sau imagini noi de profil ale utilizatorului.</p>

<p>Pentru a activa încărcarea de imagini, dumneavoastră (sau administratorul de sistem) va trebui să
   editați fișierul principal php.ini în sistem și să schimbați setarea
   <b>file_uploads</b> în \'1\'.</p>';
$string['inputdatadirectory'] = 'Director date:';
$string['inputwebadress'] = 'Adresă web:';
$string['inputwebdirectory'] = 'Director Moodle:';
$string['installation'] = 'Instalare';
$string['invaliddbprefix'] = 'Prefix nevalid. Prefixul poate consta numai din litere mici și subliniere.';
$string['langdownloaderror'] = 'Din păcate, limba "{$a}" nu a putut fi descărcată. Procesul de instalare va continua în limba engleză.';
$string['langdownloadok'] = 'Limba "{$a}" a fost instalată cu succes. Procesul de instalare va continua în această limbă.';
$string['memorylimit'] = 'Limită de memorie';
$string['memorylimiterror'] = 'Limita de memorie PHP este setată destul de jos... să aveți probleme mai târziu.';
$string['memorylimithelp'] = '<p> Limita de memorie PHP pentru serverul dvs. este setată în prezent la {$a}. </p>

<p> Acest lucru poate determina Moodle să aibă probleme de memorie mai târziu, în special
   dacă aveți o mulțime de module activate și / sau o mulțime de utilizatori. </p>

<p> Vă recomandăm să configurați PHP cu o limită mai mare, dacă este posibil, cum ar fi 40M.
   Există mai multe moduri de a face acest lucru pe care le puteți încerca: </p>
<ol>
<li> Dacă puteți, recompilați PHP cu <i> --enable-memory-limit </i>.
    Aceasta va permite Moodle să stabilească singură limita de memorie. </li>
<li> Dacă aveți acces la fișierul php.ini, puteți schimba <b> memory_limit </b>
    stabilind acolo ceva de genul 40M. Dacă nu aveți acces, s-ar putea
    să îi puteți cere administratorului să facă acest lucru pentru dvs. </li>
<li> Pe unele servere PHP puteți crea un fișier .htaccess în directorul Moodle
    care conține această linie:
    <blockquote> <div> php_value memory_limit 40M </div> </blockquote>
    <p> Cu toate acestea, pe unele servere, acest lucru va împiedica <b> toate </b> paginile PHP să funcționeze
    (veți vedea erori când vă uitați la pagini), așa că va trebui să eliminați fișierul .htaccess. </p> </li>
</ol>';
$string['mysqliextensionisnotpresentinphp'] = 'PHP nu a fost configurat corect cu extensia MySQLi pentru ca acesta să comunice cu MySQL. Vă rugăm să verificați fișierul php.ini sau să recompilați PHP.';
$string['nativeauroramysql'] = 'Aurora MySQL (native/auroramysql)';
$string['nativeauroramysqlhelp'] = '<p> Baza de date este locul unde sunt stocate majoritatea setărilor și datelor Moodle și trebuie configurate aici. </p>
<p> Numele bazei de date, numele de utilizator și parola sunt câmpuri obligatorii; prefixul tabelului este opțional. </p>
<p> Numele bazei de date poate conține doar caractere alfanumerice, dolar ($) și subliniere (_). </p>
<p> Dacă baza de date nu există în prezent și utilizatorul pe care îl specificați are permisiunea, Moodle va încerca să creeze o nouă bază de date cu permisiunile și setările corecte. </p>
<p> Acest driver nu este compatibil cu motorul MyISAM vechi. </p>';
$string['nativemariadb'] = 'MariaDB (native/mariadb)';
$string['nativemariadbhelp'] = '<p> Baza de date este locul unde sunt stocate majoritatea setărilor și datelor Moodle și trebuie configurate aici. </p>
<p> Numele bazei de date, numele de utilizator și parola sunt câmpuri obligatorii; prefixul tabelului este opțional. </p>
<p> Numele bazei de date poate conține doar caractere alfanumerice, dolar ($) și subliniere (_). </p>
<p> Dacă baza de date nu există în prezent și utilizatorul pe care îl specificați are permisiunea, Moodle va încerca să creeze o nouă bază de date cu permisiunile și setările corecte. </p>
<p> Acest driver nu este compatibil cu motorul MyISAM vechi. </p>';
$string['nativemysqli'] = 'MySQL îmbunătațit (native/mysqli)';
$string['nativemysqlihelp'] = '<p>Baza de date este locul unde sunt stocate cele mai multe date și setări Moodle care trebuie să fie configurate aici.</p>
<p>Câmpurile obligatorii sunt: numele bazei de date, numele de utilizator și parola; prefixul tabelului este opțional.</p>
<p>În cazul în care baza de date nu există în prezent, iar utilizatorul specificat are permisiunea necesară, Moodle va încerca să creeze o nouă bază de date cu permisiunile și setările corecte.</p>';
$string['nativeoci'] = 'Oracle (native/oci)';
$string['nativeocihelp'] = 'Acum trebuie să configurați baza de date în care vor fi stocate cele mai multe date Moodle.
Această bază de date trebuie să fi fost deja creată și un nume de utilizator și o parolă create pentru a o accesa. Prefixul tabelului este obligatoriu.';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativepgsqlhelp'] = '<p>Baza de date este locul unde sunt stocate cele mai multe date și setări Moodle care trebuie să fie configurate aici.</p>
<p>Câmpurile obligatorii sunt: numele bazei de date, numele de utilizator și parola.</p>
<p>Baza de date trebuie să existe deja, iar utilizatorul trebuie să aibă acces pentru citire și scriere.</p>';
$string['nativesqlsrv'] = 'SQL*Server Microsoft (native/sqlsrv)';
$string['nativesqlsrvhelp'] = 'Acum trebuie să configurați baza de date în care vor fi stocate cele mai multe date Moodle.
Această bază de date trebuie să fi fost deja creată și un nume de utilizator și o parolă create pentru a o accesa. Prefixul tabelului este obligatoriu.';
$string['nativesqlsrvnodriver'] = 'Microsoft Drivers pentru SQL Server pentru PHP nu sunt instalate sau nu sunt configurate corect.';
$string['ociextensionisnotpresentinphp'] = 'PHP nu a fost configurat corect cu extensia OCI8 pentru a putea comunica cu Oracle. Vă rugăm să verficați fișierul php.ini sau să recompilați PHP.';
$string['pass'] = 'Trecere';
$string['paths'] = 'Căi';
$string['pathserrcreatedataroot'] = 'Data directory ({$a->dataroot}) nu poate fi creat de către installer.';
$string['pathshead'] = 'Confirmare căi';
$string['pathsrodataroot'] = 'Directorul dataroot nu poate fi scris.';
$string['pathsroparentdataroot'] = 'Directorul parent ({$a->parent}) nu poate fi scris. Directorul data ({$a->dataroot}) nu poate fi creat de persoana care îl instalează.';
$string['pathssubadmindir'] = 'Foarte puțini webhosts folosesc / admin ca adresă URL specială pentru a accesa un
panoul de control sau ceva de genul acesta. Din păcate, acest lucru intră în conflict cu locația standard pentru paginile de administrare Moodle. Puteți rezolva acest lucru
redenumirea directorului de administrare din instalarea dvs. și plasarea acestui nou nume aici. De exemplu: <em> moodleadmin </em>. Aceasta va remedia linkurile de administrator din Moodle.';
$string['pathssubdataroot'] = '<p>Un director unde Moodle va stoca tot conținutul unui fișier încărcat de către utilizatori.</p>
<p>Acest director trebuie să poată fi citit și scris de către utilizatorii serverului web (de obicei \'www-data\', \'nobody\', or \'apache\').</p>
<p>Nu trebuie să fie direct accesibil de pe web.</p>
<p>Dacă directorul nu există în prezent, procesul de instalare va încerca să îl creeze.</p>';
$string['pathssubdirroot'] = '<p>Calea completă către directorul care conține codul Moodle .</p>';
$string['pathssubwwwroot'] = '<p> Adresa completă unde va fi accesat Moodle, adică adresa pe care utilizatorii o vor introduce în bara de adrese a browserului lor pentru a accesa Moodle. </p>
<p> Nu este posibil să accesați Moodle utilizând mai multe adrese. Dacă site-ul dvs. este accesibil prin mai multe adrese, alegeți-l pe cel mai simplu și configurați o redirecționare permanentă pentru fiecare dintre celelalte adrese. </p>
<p> Dacă site-ul dvs. este accesibil atât de pe Internet, cât și de pe o rețea internă (uneori numită Intranet), atunci utilizați adresa publică aici. </p>
<p> Dacă adresa curentă nu este corectă, vă rugăm să modificați adresa URL din bara de adrese a browserului dvs. și să reporniți instalarea. </p>';
$string['pathsunsecuredataroot'] = 'Locația dataroot nu este sigură';
$string['pathswrongadmindir'] = 'Directorul admin nu există';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP nu a fost configurat corect cu extensia PGSQL pentru a putea comunica cu PGSQL. Vă rugăm să verficați fișierul php.ini sau să recompilați PHP.';
$string['phpextension'] = 'extensie PHP {$a}';
$string['phpversion'] = 'Versiune PHP';
$string['phpversionhelp'] = '<p> Moodle necesită o versiune PHP de cel puțin 5.6.5 sau 7.1 (7.0.x are unele limitări ale motorului). </p>
<p> În prezent executați versiunea {$a}. </p>
<p> Trebuie să faceți upgrade PHP sau să vă mutați la o gazdă cu o versiune mai nouă de PHP. </p>';
$string['releasenoteslink'] = 'Pentru informații despre această versiune Moodle, vă rugăm să citiți notele informative de la {$a}';
$string['safemode'] = 'Modul de siguranță';
$string['safemodeerror'] = 'Este posibili ca Moodle să nu poată funcţiona cu Safe Mode';
$string['safemodehelp'] = '<p>Moodle poate avea o varietate de probleme când modul safe este on, nu cea din urmă o reprezintă faptul că
     probabil nu se permite crearea de noi fișiere.</p>

<p>Modul safe este, de obicei, activat doar de web hosts paranoici, deci trebuie
     să gasiți o nouă companie de hostind pentru site-ul dumneavoastră Moodle.</p>

<p>Puteți continua instalarea, dacă doriți, dar așteptați-vă să apară probleme mai târziu.</p>';
$string['sessionautostart'] = 'Sesiune Auto Start';
$string['sessionautostarterror'] = 'Acest parametru ar trebui să fie dezactivat';
$string['sessionautostarthelp'] = '<p>Moodle necesită suportul sesiunilor și nu va funcționa fără aceasta.</p>

<p>Sesiunile pot fi activate în fișierul php.ini ... căutați session.auto_start parameter.</p>';
$string['sqliteextensionisnotpresentinphp'] = 'PHP nu a fost configurat corect cu extensia SQLite. Vă rugăm să verificați fișierul php.ini sau să recompilați PHP.';
$string['upgradingqtypeplugin'] = 'Se actualizează întrebarea/tipul de plugin';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Vedeți această pagină deoarece ați instalat și lansat cu succes pachetul  <strong>{$a->packname} {$a->packversion}</strong> în computerul dumneavoastră. Felicitări!';
$string['welcomep30'] = 'Această versiune <strong>{$a->installername}</strong> include aplicații pentru a crea un mediu în care <strong>Moodle</strong> va funcționa, și anume:';
$string['welcomep40'] = 'Pachetul include și <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Utilizarea tuturor aplicațiilor din acest pachet este guvernată de licențele respective. Pachetul complet <strong> {$a->installername} </strong> este <a href="https://www.opensource.org/docs/definition_plain.html"> open source </a> și este distribuit în licența <a href="https://www.gnu.org/copyleft/gpl.html"> GPL </a>.';
$string['welcomep60'] = 'Următoarele pagini vă oferă pași ușor de urmat pentru a
   configura și seta <strong>Moodle</strong> în computerul       dumneavoastră. Puteți accepta setările implicite
    sau, opțional, să le modificați pentru a corespunde nevoilor dumneavoastră.';
$string['welcomep70'] = 'Click pe butonul "Next" de mai jos pentru a continua setarea <strong>Moodle</strong>.';
$string['wwwroot'] = 'Adresă Web';
$string['wwwrooterror'] = '"Adresa Web" nu pare să fie valabilă - această instalare Moodle nu pare să se afle la această adresă. Valoarea de mai jos a fost resetată.';
