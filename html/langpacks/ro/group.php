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
 * Strings for component 'group', language 'ro', version '4.1'.
 *
 * @package     group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Adăugat de  {$a}';
$string['addgroup'] = 'Adaugă utilizatorul în grup';
$string['addgroupstogrouping'] = 'Adaugă grup la grupare';
$string['addgroupstogroupings'] = 'Adaugă/şterge grupuri';
$string['adduserstogroup'] = 'Adaugă/şterge utilizatori';
$string['allocateby'] = 'Alocă membri';
$string['anygrouping'] = '[Orice grupare]';
$string['autocreategroups'] = 'Creare automată de grupuri';
$string['backtogroupings'] = 'Înapoi la grupări';
$string['backtogroups'] = 'Înapoi la grupuri';
$string['badnamingscheme'] = 'Trebuie să conţină exact un caracter \'@\' sau un caracter \'#\'';
$string['byfirstname'] = 'În ordine alfabetică după prenume, nume';
$string['byidnumber'] = 'În ordine alfabetică după număr identificator';
$string['bylastname'] = 'În ordine alfabetică după nume, prenume';
$string['createautomaticgrouping'] = 'Creează automat grupare';
$string['creategroup'] = 'Creează grup';
$string['creategrouping'] = 'Creează grupare';
$string['creategroupinselectedgrouping'] = 'Creează grup în cadrul grupării';
$string['createingrouping'] = 'Gruparea grupurilor create automat';
$string['createorphangroup'] = 'Creează grup neafiliat';
$string['csvdelimiter'] = 'Separator CSV';
$string['databaseupgradegroups'] = 'Versiunea grupurilor este în prezent {$a}';
$string['defaultgrouping'] = 'Grupare implicită';
$string['defaultgroupingname'] = 'Grupare';
$string['defaultgroupname'] = 'Grup';
$string['deleteallgroupings'] = 'Şterge toate grupările';
$string['deleteallgroups'] = 'Şterge toate grupurile';
$string['deletegroupconfirm'] = 'Sigur doriţi ştergerea grupului \'{$a}\'?';
$string['deletegrouping'] = 'Şterge grupare';
$string['deletegroupingconfirm'] = 'Sunteţi sigur că doriţi să ştergeţi gruparea {$a}? (Grupurile din cadrul grupării nu vor fi şterse)';
$string['deletegroupsconfirm'] = 'Sigur doriţi ştergerea următoarelor grupuri?';
$string['deleteselectedgroup'] = 'Şterge grupul selectat';
$string['editgroupingsettings'] = 'Editează setări grupare';
$string['editgroupsettings'] = 'Editează setări grup';
$string['editusersgroupsa'] = 'Editează grupurile pentru "{$a}"';
$string['enablemessaging'] = 'Mesagerie în grup';
$string['enablemessaging_help'] = 'Dacă este activat, membrii grupului pot trimite mesaje celorlalți din grupul lor prin sertarul de mesagerie.';
$string['encoding'] = 'Codificare';
$string['enrolmentkey'] = 'Cheie de înregistrare';
$string['enrolmentkey_help'] = 'O cheie de înscriere permite accesul la curs să fie limitat doar la cei care cunosc cheia. Dacă este specificată o cheie de înscriere în grup, atunci nu numai că introducerea acelei chei va permite utilizatorului să participe la curs, dar va deveni automat membru al acestui grup.

Notă: Cheile de înscriere în grup trebuie să fie activate în setările de autoînscriere și trebuie specificată și o cheie de înscriere pentru curs.';
$string['enrolmentkeyalreadyinuse'] = 'Această cheie de înrolare este deja folosită pentru alt grup';
$string['erroraddremoveuser'] = 'S-a produs o eroare la adăugarea/ştergerea utilizatorului {$a} la grup';
$string['erroreditgroup'] = 'S-a produs o eroare la crearea/actualizarea grupului {$a}';
$string['erroreditgrouping'] = 'S-a produs o eroare la crearea/actualizarea grupării {$a}';
$string['errorinvalidgroup'] = 'Eroare, grup {$a} incorect';
$string['errorremovenotpermitted'] = 'Nu aveți permisiunea de a șterge membrii grupului {$a} adăugați în mod automat';
$string['errorselectone'] = 'Înainte de a alege această opţiune selectaţi un singur grup';
$string['errorselectsome'] = 'Înainte de a alege această opţiune selectaţi unul sau mai multe grupuri';
$string['evenallocation'] = 'Notă: pentru a balansa alocarea grupurilor, numărul de membri din cadrul fiecărui grup diferă de cel pe care l-aţi specificat.';
$string['eventgroupcreated'] = 'Grup creat';
$string['eventgroupdeleted'] = 'Grup șters';
$string['eventgroupingcreated'] = 'Grupare creată';
$string['eventgroupingdeleted'] = 'Grupare ștearsă';
$string['eventgroupinggroupassigned'] = 'Grup asignat grupării';
$string['eventgroupinggroupunassigned'] = 'Grup scos din grupare';
$string['eventgroupingupdated'] = 'Grupare actualizată';
$string['eventgroupmemberadded'] = 'Membru al grupului adăugat';
$string['eventgroupmemberremoved'] = 'Membru al grupului șters';
$string['eventgroupupdated'] = 'Grup actualizat';
$string['existingmembers'] = 'Membri existenţi: {$a}';
$string['exportgroupsgroupings'] = 'Descarcă grupuri și grupări sub formă de';
$string['filtergroups'] = 'Filtrează grupuri după:';
$string['group'] = 'Grup';
$string['groupaddedsuccesfully'] = 'Grupul {$a} a fost adăugat cu succes';
$string['groupaddedtogroupingsuccesfully'] = 'Grup {$a->groupname} adăugat în grupare {$a->groupingname} cu succes';
$string['groupby'] = 'Creați automat pe baza';
$string['groupdescription'] = 'Descriere grup';
$string['groupinfo'] = 'Informaţii despre grupul selectat';
$string['groupinfomembers'] = 'Informaţii despre membrii selectaţi';
$string['groupinfopeople'] = 'Informaţii despre persoanele selectate';
$string['grouping'] = 'Grupare';
$string['grouping_help'] = 'O grupare este o uniune de grupuri din cadrul unui curs. Dacă se selectează o grupare, cursanții atribuiți diferitelor grupuri din cadrul grupării vor avea posibilitatea să lucreze împreună.';
$string['groupingaddedsuccesfully'] = 'Grupare {$a} adăugată cu succes';
$string['groupingdescription'] = 'Descriere grupare';
$string['groupingname'] = 'Nume grupare';
$string['groupingnameexists'] = 'În cadrul acestui curs există deja o grupare cu numele \'{$a}\'. Vă rugăm alegeţi alt nume.';
$string['groupings'] = 'Grupări';
$string['groupingsection'] = 'Acces la grupări';
$string['groupingsection_help'] = 'O grupare este un ansamblu de grupuri din cadrul unui curs. Dacă se selectează o grupare, doar cursanții asignați grupurilor din cadrul acestei grupări vor avea acces la această secțiune.';
$string['groupingsonly'] = 'Exclusiv grupări';
$string['groupmember'] = 'Membrul grupului';
$string['groupmemberdesc'] = 'Rol standard pentru un membru al grupului.';
$string['groupmembers'] = 'Membri ai grupului';
$string['groupmemberssee'] = 'Afişează membri grup';
$string['groupmembersselected'] = 'Membrii grupului selectat';
$string['groupmode'] = 'Mod Grupuri';
$string['groupmode_help'] = '* Fără grupuri
* Grupuri separate: Cursanții sunt împărțiți în grupuri și pot vedea doar activitatea grupului lor.
* Grupuri vizibile: Cursanții sunt împărțiți în grupuri, dar pot vedea activitatea altor grupuri.

Modul de grup setat la nivel de curs este modul implicit pentru toate activitățile. Dacă modul de grup este impus la nivel de curs, acesta nu poate fi schimbat într-o activitate.';
$string['groupmodeforce'] = 'Mod Grupuri obligatoriu';
$string['groupmodeforce_help'] = 'Modul de grup este impus pentru toate activitățile și nu poate fi modificat într-o activitate.';
$string['groupmy'] = 'Grupul meu';
$string['groupname'] = 'Nume grup';
$string['groupnameexists'] = 'Există deja un grup cu numele \'{$a}\' în cadrul acestui curs, vă rugăm alegeţi alt nume.';
$string['groupnotamember'] = 'Ne pare rău, nu sunteţi membru al acestui grup';
$string['groups'] = 'Grupuri';
$string['groupscount'] = 'Grupuri ({$a})';
$string['groupsettingsheader'] = 'Grupuri';
$string['groupsgroupings'] = 'Grupuri și Grupări';
$string['groupsinselectedgrouping'] = 'Grupuri în:';
$string['groupsnone'] = 'Fără grupuri';
$string['groupsonly'] = 'Doar grupuri';
$string['groupspreview'] = 'Previzualizare grupuri';
$string['groupsseparate'] = 'Grupuri separate';
$string['groupsvisible'] = 'Grupuri vizibile';
$string['grouptemplate'] = 'Grup @';
$string['hidepicture'] = 'Ascunde imagine';
$string['importgroups'] = 'Importă grupuri';
$string['importgroups_help'] = 'Grupurile pot fi importate prin fișier text. Formatul fișierului ar trebui să fie după cum urmează:

* Fiecare linie a fișierului conține o înregistrare
* Fiecare înregistrare este o serie de date separate prin virgule
* Prima înregistrare conține o listă de nume de câmp care definesc formatul restului fișierului
* Numele de câmp obligatoriu este numele de grup
* Numele de câmp opționale sunt groupidnumber, description, enrolmentkey, groupingname, enablemessaging';
$string['importgroups_link'] = 'group/import';
$string['includeonlyactiveenrol'] = 'Include doar utilizatorii activi';
$string['includeonlyactiveenrol_help'] = 'Dacă este activată, utilizatorii suspendați nu vor fi incluși în grupuri';
$string['javascriptrequired'] = 'Această pagină necesită JavaScript pentru a fi activat.';
$string['memberofgroup'] = 'Grup membru al: {$a}';
$string['members'] = 'Număr de membri într-un grup';
$string['membersofselectedgroup'] = 'Membri ai:';
$string['mygroups'] = 'Grupurile mele';
$string['namingscheme'] = 'Convenţie nume';
$string['namingscheme_help'] = 'Simbolul (@) poate fi utilizat pentru a crea grupuri cu nume care conţin litere. De exemplu, Grupul @ va genera grupuri numite Grupul A, Grupul B, Grupul C, ...

Simbolul diez (#) poate fi utilizat pentru a crea grupuri cu nume care conţin numere. De exemplu, Grupul # va genera grupurile Grupul 1, Grupul 2, Grupul 3, ...';
$string['newgrouping'] = 'Grupare nouă';
$string['newpicture'] = 'Imagine nouă';
$string['newpicture_help'] = 'Selectează o imagine în format JPG sau PNG. Imaginea va fi decupată într-un pătrat și redimensionată la 100x100 pixeli.';
$string['noallocation'] = 'Fără alocare';
$string['nogroup'] = 'Nu există grup';
$string['nogrouping'] = 'Fără grupare';
$string['nogroups'] = 'În cadrul acestui curs nu au fost definite încă grupuri';
$string['nogroupsassigned'] = 'Nu au fost atribuite grupuri';
$string['nopermissionforcreation'] = 'Grupul "{$a}" nu a putut fi creat deoarece nu ai permisiunea de a crea grupuri';
$string['nosmallgroups'] = 'Previne crearea grupurilor cu prea puțini utilizatori';
$string['notingroup'] = 'Ignoră utilizatorii din grupuri';
$string['notingrouping'] = 'Nu face parte dintr-o grupare';
$string['notingrouplist'] = 'Nu face parte dintr-un grup';
$string['nousersinrole'] = 'Nu există utilizatori care să aibă rolul selectat şi să îndeplinească condiţiile cerute';
$string['number'] = 'Număr grupuri/membri';
$string['numgroups'] = 'Număr de grupuri';
$string['nummembers'] = 'Număr de membri în cadrul unui grup';
$string['othergroups'] = 'Alte grupuri';
$string['overview'] = 'Privire de ansamblu';
$string['potentialmembers'] = 'Membri potenţiali: {$a}';
$string['potentialmembs'] = 'Membri potențiali';
$string['printerfriendly'] = 'Afişare pentru imprimare';
$string['privacy:metadata:core_message'] = 'Conversațiile grupului';
$string['privacy:metadata:groups'] = 'O înregistrare a apartenenței la grup.';
$string['privacy:metadata:groups:groupid'] = 'ID-ul grupului';
$string['privacy:metadata:groups:timeadded'] = 'Marcajul de timp care indică momentul în care utilizatorul a fost adăugat la grup.';
$string['privacy:metadata:groups:userid'] = 'ID-ul utilizatorului asociat grupului.';
$string['random'] = 'Aleatoriu';
$string['removefromgroup'] = 'Elimină utilizatorul din grup {$a}';
$string['removefromgroupconfirm'] = 'Ești sigur că vrei să elimini utilizatorul "{$a->user}" din grup "{$a->group}"?';
$string['removegroupfromselectedgrouping'] = 'Şterge grup din grupare';
$string['removegroupingsmembers'] = 'Şterge toate grupurile din toate grupările';
$string['removegroupsmembers'] = 'Şterge toţi membrii grupului';
$string['removeselectedusers'] = 'Şterge utilizatorii selectaţi';
$string['selectfromgroup'] = 'Selectează membri din grup';
$string['selectfromgrouping'] = 'Selectează membri din grupare';
$string['selectfromrole'] = 'Selectează membri cu rol';
$string['showgroupsingrouping'] = 'Afişează grupuri în grupare';
$string['showmembersforgroup'] = 'Afişează membrii unui grup';
$string['toomanygroups'] = 'Nu există suficienţi utilizatori pentru a completa numărul de grupuri existente - există doar {$a} utilizatori cărora le-a fost atribuit rolul selectat.';
$string['usercount'] = 'Număr utilizatori';
$string['usercounttotal'] = 'Număr utilizatori ({$a})';
$string['usergroupmembership'] = 'Apartenenţa utilizatorului selectat:';
