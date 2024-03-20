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
 * Strings for component 'webservice', language 'ro', version '4.1'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Excepție de control al accesului';
$string['actwebserviceshhdr'] = 'Protocoale web service active';
$string['addaservice'] = 'Adaugă serviciu';
$string['addcapabilitytousers'] = 'Verificarea permisiuni pentru utilizatorilor';
$string['addcapabilitytousersdescription'] = 'Utilizatorii ar trebui să aibă două permisiuni - webservice:createtoke și o permisiune corespunzătoarea protocoalelor folosite, de exemplu webservice/rest:use, webservice/soap:use. Pentru a se realiza acest lucru, creați un rol pentru servicile web cu capacități adecvate permise și asignați-l utilizatorului de servicii web ca un rol de sistem.';
$string['addexternalservice'] = 'Adaugă serviciu extern';
$string['addfunction'] = 'Adaugă funcție';
$string['addfunctionhelp'] = 'Selectați funcția pentru a adăuga serviciul.';
$string['addfunctions'] = 'Adaugă funcții';
$string['addfunctionsdescription'] = 'Selectați funcțiile necesare pentru noul serviciu creat.';
$string['addrequiredcapability'] = 'Asignare/eliminare permisiuni necesare';
$string['addservice'] = 'Adaugă un nou serviciu: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Adaugă funcții seviciului "{$a}"';
$string['allusers'] = 'Toți utilizatorii';
$string['apiexplorer'] = 'Navigare API';
$string['apiexplorernotavalaible'] = 'Navigarea API nu este încă disponibilă.';
$string['arguments'] = 'Argumente';
$string['authmethod'] = 'Metodă de autentificare';
$string['callablefromajax'] = 'Callable de la AJAX';
$string['cannotcreatetoken'] = 'Nu aveți permisiunea să creați un token web service petru serviciul {$a}.';
$string['cannotgetcoursecontents'] = 'Nu se poate extrage conținutul cursurilor';
$string['checkusercapability'] = 'Verificarea permisiunilor utilizatorului';
$string['checkusercapabilitydescription'] = 'Utilizatorul trebuie să aibă capabilități corespunzătoare în conformitate cu protocoalele utilizate, de exemplu,  webservice/rest:use, webservice/soap:use. Pentru a realiza acest lucru, creați un rol pentru servicii web cu capabilități de protocol permise și atribuiți-l pentru utilizatorului de servicii web ca un rol de sistem.';
$string['configwebserviceplugins'] = 'Pentru motive de securitate, doar protocoalele care sunt în folosință ar trebui să fie active.';
$string['context'] = 'Context';
$string['createservicedescription'] = 'Un serviciu este un set de funcții de servicii web. Veți permite utilizatorului accesul la un nou serviciu. De pe pagina <strong> Adăugați serviciu</strong> bifați opțiunie \'Activează\' și "utilizatori autorizați". Selectați "Fără capacitatea necesară".';
$string['createserviceforusersdescription'] = 'Un serviciu este un set de funcții de servicii web. Veți permite utilizatorilor accesul la un nou serviciu. De pe pagina <strong> Adăugați serviciu</strong> bifați opțiunea \'Activează\' și debifați opțiunile "utilizatori autorizați". Selectați "Fără capacitatea necesară".';
$string['createtoken'] = 'Creează token';
$string['createtokenforuser'] = 'Creează token pentru utilizator';
$string['createtokenforuserdescription'] = 'Crează un token pentru utilizatorul de servicii web.';
$string['createuser'] = 'Creează un utilizator specific';
$string['createuserdescription'] = 'Este necesar un utilizator web service pentru a reprezenta sistemul de control Moodle.';
$string['criteriaerror'] = 'Lipsește permisiunea de a căuta pe baza unui criteriu.';
$string['default'] = 'Implicit la "{$a}"';
$string['deleteaservice'] = 'Șterge serviciul';
$string['deleteservice'] = 'Șterge serviciul: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Ștergând serviciul, veți șterge și token-urile conexe acestui serviciu. Sunteți sigur că doriți să ștergeți serviciul extern  "{$a}"?';
$string['deletetoken'] = 'Șterge token';
$string['deletetokenconfirm'] = 'Sunteți sigur că doriți să ștergeți acest token pentru servicii web pentru <strong>{$a->user}</strong> pe serviciul <strong>{$a->service}</strong>?';
$string['deprecated'] = 'Depreciat';
$string['disabledwarning'] = 'Toate protocoalele de servicii web sunt dezactivate. Opțiunea "Activează serviciile web" poate fi găsită la Opțiuni avansate.';
$string['doc'] = 'Documentație';
$string['docaccessrefused'] = 'Nu aveți permisiunea să ștergeți documentația acestui token';
$string['downloadfiles'] = 'Poate descărca fișiere';
$string['downloadfiles_help'] = 'Dacă este activat serviciul, orice user poate să downloadeze fișiere folosind cheia sa de securitate. Sunt, însă, restricționați la fișierele pe care au permisiunea să le downloadeze din site.';
$string['editaservice'] = 'Editare serviciu';
$string['editexternalservice'] = 'Editează serviciu extern';
$string['editservice'] = 'Editează serviciul: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Activat';
$string['enabledocumentation'] = 'Activați documentația pentru dezvoltatori';
$string['enabledocumentationdescription'] = 'Documentația detaliată de servicii web este disponibilă pentru protocoalele activate.';
$string['enableprotocols'] = 'Activați protocoalele';
$string['enableprotocolsdescription'] = 'Cel puțin un protocol ar trebui să fie activat. Din motive de securitate, numai protocoalele care urmează a fi utilizate trebuie să fie activate.';
$string['enablews'] = 'Activați serviciile web';
$string['enablewsdescription'] = 'Serviciile Web trebuie să fie activate la Opțiuni avansate.';
$string['entertoken'] = 'Inserați o cheie de securitate/token:';
$string['error'] = 'Eroare: {$a}';
$string['errorcatcontextnotvalid'] = 'Nu puteți executa funcții în contextul categoriei (category id:{$a->catid}). Mesajul de eroare în context a fost: {$a->message}';
$string['errorcodes'] = 'Mesaj de eroare';
$string['errorcoursecontextnotvalid'] = 'Nu puteți executa funcții în contextul cursului (course id:{$a->courseid}). Mesajul de eroare în context a fost: {$a->message}';
$string['errorinvalidparam'] = 'Parametrul "{$a}" nu este valid.';
$string['errornotemptydefaultparamarray'] = 'Parametrul de descriere a serviciului web numit \'{$a}\' este o structură unică sau multiplă. Valoarea implicită poate fi doar un array gol. Verificați descrierea serviciului web.';
$string['erroroptionalparamarray'] = 'Serviciul web de descriere a parametrului numit \'{$a}\' e o structură singulară sau multiplă. Nu poate fi setat ca VALUE_OPTIONAL. Verificați descrierea serviciului web.';
$string['eventwebservicefunctioncalled'] = 'Funcția de serviciu web numită';
$string['eventwebserviceloginfailed'] = 'Autentificare la serviciul web nereușită';
$string['eventwebserviceservicecreated'] = 'Serviciu web creat';
$string['eventwebserviceservicedeleted'] = 'Serviciu web șters';
$string['eventwebserviceserviceupdated'] = 'Serviciu web actualizat';
$string['eventwebserviceserviceuseradded'] = 'Utilizator de service de servicii web adăugat';
$string['eventwebserviceserviceuserremoved'] = 'Utilizator de servicii web eliminat';
$string['eventwebservicetokencreated'] = 'Token pentru serviciul web creat';
$string['eventwebservicetokensent'] = 'Token pentru serviciul web trimis';
$string['execute'] = 'Execută';
$string['executewarnign'] = 'AVERTIZARE! Dacă apăsați "execute", baza de date va fi modificată iar schimbările nu vor putea fi făcute automat!';
$string['externalservice'] = 'Serviciu extern';
$string['externalservicefunctions'] = 'Funcții ale serviciului extern';
$string['externalservices'] = 'Servicii externe';
$string['externalserviceusers'] = 'Utilizatori ai serviciului extern';
$string['failedtolog'] = 'Nu s-a putut autentifica';
$string['filenameexist'] = 'Numele de fișier există deja: {$a}';
$string['forbiddenwsuser'] = 'Nu se poate crea token pentru un utilizator neconfirmat, șters, suspendat sau doar vizitator.';
$string['function'] = 'Funcție';
$string['functions'] = 'Funcții';
$string['generalstructure'] = 'Structură generală';
$string['information'] = 'Informație';
$string['installexistingserviceshortnameerror'] = 'Un serviciu web cu prescurtarea "{$a}" există deja. Nu se poate instala/updata un serviciu web diferit cu acest nume prescurtat.';
$string['installserviceshortnameerror'] = 'Eroare de codare: numele scurt al serviciului „{$a}” poate conține doar caractere alfanumerice (litere și cifre), subliniere (_), cratimă (-) sau punct (.)';
$string['invalidextparam'] = 'Parametru api extern nu este valid: {$a}';
$string['invalidextresponse'] = 'Răspuns api extern nu este valid: {$a}';
$string['invalidiptoken'] = 'Token nu este valid - IP-ul dumneavoastră nu este acceptat';
$string['invalidtimedtoken'] = 'Token nu este valid - Token expirat';
$string['invalidtoken'] = 'Token nu este valid - Token-ul nu a fost găsit';
$string['iprestriction'] = 'Restricție IP';
$string['iprestriction_help'] = 'Utilizatorul va trebui să apeleze la serviciile web din IP-urile enumerate (separate prin virgula).';
$string['key'] = 'Cheie';
$string['keyshelp'] = 'Cheile sunt folosite pentru a vă accesa contul Moodle din aplicații externe.';
$string['loginrequired'] = 'Restricționat pentru utilizatorii autentificați';
$string['manageprotocols'] = 'Administrare protocoale';
$string['managetokens'] = 'Administrare token-uri';
$string['missingcaps'] = 'Capabilități care lipsesc';
$string['missingcaps_help'] = 'Lista de capabilități declarate de serviciu pe care utilizatorul selectat nu le are. Unele funcționalități ale serviciului pot să nu fie disponibile fără aceste capabilități';
$string['missingpassword'] = 'Lipsește parola';
$string['missingrequiredcapability'] = 'Capabilitatea {$a} este necesară.';
$string['missingusername'] = 'Lipsește numele de utilizator';
$string['missingversionfile'] = 'Eroare de codare: version.php file lipsește pentru această componentă {$a}';
$string['nameexists'] = 'Acest nume este deja utilizat de către un alt serviciu';
$string['nocapabilitytouseparameter'] = 'Utilizatorul nu are capabilitatea necesară pentru a utiliza parametrul {$a}';
$string['nofunctions'] = 'Acest serviciu nu are funcții';
$string['norequiredcapability'] = 'Nu este necesară o permisiune';
$string['notoken'] = 'Această listă de token-uri este goală.';
$string['onesystemcontrolling'] = 'Permite unui serviciu extern să controleze Moodle';
$string['onesystemcontrollingdescription'] = 'Următorii pași vă ajută să setați serviciile Moodle pentru a permite unui sistem extern să interacționeze cu Moodle. Aceasta presupune să setați un token (cheie de securitate) ca metodă de autentificare.';
$string['onlyseecreatedtokens'] = 'Puteți vizualiza doar token-urile pe care le-ați creat.';
$string['operation'] = 'Operațiune';
$string['optional'] = 'Operațiune';
$string['passwordisexpired'] = 'Parola a expirat';
$string['phpparam'] = 'XML-RPC (structură PHP)';
$string['phpresponse'] = 'XML-RPC (structură PHP)';
$string['postrestparam'] = 'Cod PHP pentru REST (POST request)';
$string['potusers'] = 'Utilizatori neautorizați';
$string['potusersmatching'] = 'Niciun utilizator autorizat';
$string['print'] = 'Tipărește tot';
$string['privacy:metadata:serviceusers'] = 'O listă de utilizatori care pot utiliza un anumit serviciu extern';
$string['privacy:metadata:serviceusers:iprestriction'] = 'IP restricționat de la utilizarea serviciului';
$string['privacy:metadata:serviceusers:timecreated'] = 'Data cînd a fost creată înregistrarea';
$string['privacy:metadata:serviceusers:userid'] = 'ID-ul utilizatorului';
$string['privacy:metadata:serviceusers:validuntil'] = 'Data până când este validă autorizația';
$string['privacy:metadata:tokens'] = 'O înregistrare de jetoane pentru interacțiunea cu Moodle prin servicii web sau aplicații mobile.';
$string['privacy:metadata:tokens:creatorid'] = 'ID-ul utilizatorului care a creat token-ul';
$string['privacy:metadata:tokens:iprestriction'] = 'IP restricționat de la utilizarea acestui token';
$string['privacy:metadata:tokens:lastaccess'] = 'Când a fost utilizat token-ul ultima dată';
$string['privacy:metadata:tokens:privatetoken'] = 'Un token mai privat folosit ocazional pentru a valida anumite operațiuni, cum ar fi SSO';
$string['privacy:metadata:tokens:timecreated'] = 'Când a fost creat token-ul';
$string['privacy:metadata:tokens:token'] = 'Token-ul utilizatorului';
$string['privacy:metadata:tokens:tokentype'] = 'Tipul de token';
$string['privacy:metadata:tokens:userid'] = 'Identificatorul utilizatorului căruia îi aparține token-ul';
$string['privacy:metadata:tokens:validuntil'] = 'Până când este token-ul valid';
$string['privacy:request:notexportedsecurity'] = 'Nu este exportat din motive de securitate';
$string['protocol'] = 'Protocol';
$string['removefunction'] = 'Eliminare';
$string['removefunctionconfirm'] = 'Sunteți sigur că doriți să ștergeți funcția "{$a->function}" din serviciul "{$a->service}"?';
$string['requireauthentication'] = 'Această metodă necesită autentificare cu permisiunea xxx.';
$string['required'] = 'Necesar';
$string['requiredcapability'] = 'Capacitate necesară';
$string['requiredcapability_help'] = 'Dacă este activ, doar utilizatorii cu permisiunile necesare pot accesa serviciul.';
$string['requiredcaps'] = 'Permisiuni necesare';
$string['resettokencomplete'] = 'Token-ul selectat a fost resetat';
$string['resettokenconfirm'] = 'Sunteți sigur că doriți să resetați cheia serviciului web <strong>{$a->user}</strong>pe serviciul <strong>{$a->service}</strong>?';
$string['resettokenconfirmsimple'] = 'Sunteți sigur că doriți să resetați cheia? Orice link salvat care conține vechea cheie, nu va mai funcționa.';
$string['response'] = 'Răspuns';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'Contul restaurat trebuie să aibă parola resetată  înainte de a obține un token.';
$string['restparam'] = 'REST (POST parametri)';
$string['restrictedusers'] = 'Doar utilizatori autorizați';
$string['restrictedusers_help'] = 'Această setare stabilește dacă toți utilizatorii cu permisiunea de a crea un token de servicii web pot genera un token pentru acest serviciu prin cheile de securitate de pe paginile lor sau dacă numai utilizatorii autorizați pot face acest lucru.';
$string['securitykey'] = 'Cheie de securitate (token)';
$string['securitykeys'] = 'Chei de securitate';
$string['selectauthorisedusers'] = 'Selectare utilizatori autorizați';
$string['selectedcapability'] = 'Selectați';
$string['selectedcapabilitydoesntexit'] = 'Setul actual de capabilități cerute ({$a}) nu mai există. Vă rugăm să îl schimbați și să salvați modificările.';
$string['selectservice'] = 'Selectează un serviciu';
$string['selectspecificuser'] = 'Selectează un utlizator specific';
$string['selectspecificuserdescription'] = 'Adaugă utilizatorul de servicii web ca un utilizator autorizat.';
$string['service'] = 'Serviciu';
$string['servicehelpexplanation'] = 'Un serviciu este un set de funcții. Un serviciu poate fi accesat de către toți utilizatorii sau doar de utilizatori specifici.';
$string['servicename'] = 'Denumirea serviciului';
$string['servicenotavailable'] = 'Serviciul web nu este disponibil. (Nu există sau ar putea fi dezactivat.)';
$string['servicerequireslogin'] = 'Serviciul web nu este disponibil. (Sesiunea a fost deconectată sau a expirat.)';
$string['servicesbuiltin'] = 'Servicii built-in';
$string['servicescustom'] = 'Servicii particularizate';
$string['serviceusers'] = 'Utilizatori autorizați';
$string['serviceusersettings'] = 'Setări utilizator';
$string['serviceusersmatching'] = 'Concordanță utilizatori autorizați';
$string['serviceuserssettings'] = 'Schimbare setări pentru utilizatorii autorizați';
$string['shortnametaken'] = 'Numele prescurtat este folosit deja pentru alt serviciu ({$a})';
$string['simpleauthlog'] = 'Autentificare simplă';
$string['step'] = 'Pas';
$string['supplyinfo'] = 'Mai multe detalii';
$string['testauserwithtestclientdescription'] = 'Simulați accesul extern la serviciu utilizând clientul de testare a serviciului web. Înainte de a face acest lucru, conectați-vă ca utilizator cu funcția moodle / webservice: createtoken și obțineți cheia de securitate (token) prin pagina de preferințe a utilizatorului. Veți utiliza acest simbol în clientul de testare. În clientul de testare, alegeți și un protocol activat cu autentificare token. <strong> AVERTISMENT: Funcțiile pe care le testați vor fi EXECUTATE pentru acest utilizator, deci fiți atenți la ceea ce alegeți să testați! </strong>';
$string['testclient'] = 'Client de testare a serviciului web';
$string['testclientdescription'] = '* Clientul de testare a serviciului web <strong> execută </strong> funcțiile pentru <strong> REAL </strong>. Nu testați funcții pe care nu le cunoașteți. <br/> * Toate funcțiile de servicii web existente nu sunt încă implementate în clientul de testare. <br/> * Pentru a verifica dacă un utilizator nu poate accesa unele funcții, puteți testa unele funcții pe care nu le-ați permis. <br/> * Pentru a vedea mesaje de eroare mai clare, setați depanarea la <strong> {$a->mode} </strong> în {$a->atag}.';
$string['testwithtestclient'] = 'Testați serviciul';
$string['testwithtestclientdescription'] = 'Simulati accesul extern la serviciu folosind testul clientului pentru servicii web. Utilizați un protocol activat cu token de autentificare. <strong>AVERTIZARE: Funcția pe care o testați VA FI EXECUTATĂ, deci alegeți cu atenție ceea ce va fi testat!</strong>';
$string['token'] = 'Token';
$string['tokenauthlog'] = 'Token autentificare';
$string['tokencreatedbyadmin'] = 'Poate fi resetat doar de către administrator (*)';
$string['tokencreator'] = 'Creator';
$string['tokenfilter'] = 'Filtru token-uri';
$string['tokenfilterreset'] = 'Afișează toate token-urile';
$string['tokenfiltersubmit'] = 'Alegeți doar token-urile care se potrivesc';
$string['unknownoptionkey'] = 'Cheie opțională necunoscută ({$a})';
$string['unnamedstringparam'] = 'Un parametru string nu este denumit';
$string['updateusersettings'] = 'Actualizare';
$string['uploadfiles'] = 'Se pot încărca fișiere';
$string['uploadfiles_help'] = 'Dacă este activ, orice utilizator poate încărca fișiere cu cheile lor de securitate pentru propria lor zonă de fișiere confidențiale sau o zonă de fișiere draft. Vor fi aplicate cotele de utilizator pentru fișiere.';
$string['userasclients'] = 'Utilizatori considerați clienți cu token';
$string['userasclientsdescription'] = 'Următorii pași vă ajută să configurați serviciul web Moodle pentru utilizatori ca clienți. Acești pași ajută, de asemenea, la configurarea metodei de autentificare a simbolului recomandat (chei de securitate). În acest caz de utilizare, utilizatorul își va genera simbolul din pagina cheilor de securitate prin intermediul paginii de preferințe.';
$string['usermissingcaps'] = 'Lipsesc capabilități: {$a}';
$string['usernameorid'] = 'Nume de utilizator  / ID utilizator';
$string['usernameorid_help'] = 'Inserați un nume de utilizator sau un id de utilizator.';
$string['usernameoridnousererror'] = 'Niciun utilizator nu s-a găsit cu acest nume de utilizator/id utilizator.';
$string['usernameoridoccurenceerror'] = 'Mai mulți utilizatori au fost găsiți cu acest nume de utilizator. Inserați ID-ul utilizatorului.';
$string['usernotallowed'] = 'Utilizatorului nu îi este permis acest serviciu. Prima dată trebuie să îi permiteți acestui utilizator accesul pe {$a}\' pagina de administrare.';
$string['userservices'] = 'Serviciile utilizatorului: {$a}';
$string['usersettingssaved'] = 'Setările utilizatorului sunt salvate';
$string['validuntil'] = 'Valid până la';
$string['validuntil_help'] = 'În cazul în care este setat, serviciul va fi inactivat după această dată pentru acest utilizator.';
$string['webservice'] = 'Serviciu web';
$string['webservices'] = 'Servicii web';
$string['webservicesoverview'] = 'Vizualizare completă';
$string['webservicetokens'] = 'Token-uri servicii web';
$string['wrongusernamepassword'] = 'Nume de utilizator sau parolă incorecte';
$string['wsaccessuserdeleted'] = 'Acces web serviciu refuzat  pentru numele de utilizator șters: {$a}';
$string['wsaccessuserexpired'] = 'Acces web serviciu refuzat pentru numele de utilizator cu parola expirată: {$a}';
$string['wsaccessusernologin'] = 'Accesul la serviciul web refuzat pentru utilizatorul fără autentificare: {$a}';
$string['wsaccessusersuspended'] = 'Acces web serviciu refuzat pentru numele de utilizator suspendat: {$a}';
$string['wsaccessuserunconfirmed'] = 'Acces web serviciu refuzat pentru numele de utilizator cu numele de utilizator neconfirmt: {$a}';
$string['wsclientdoc'] = 'Documentație client Moodle web service';
$string['wsdocapi'] = 'Documentație API';
$string['wsdocumentation'] = 'Documentație serviciu web';
$string['wsdocumentationdisable'] = 'Documentația serviciului web este dezactivată';
$string['wsdocumentationintro'] = 'Pentru a crea un client va recomandăm să citiți {$a->doclink}';
$string['wsdocumentationlogin'] = 'sau inserați numele de utilizator și parola serviciului web al dumneavoastră';
$string['wspassword'] = 'Parolă servicu web';
$string['wsusername'] = 'Nume de utilizator pentru serviciul web';
