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
 * Strings for component 'mnet', language 'ro', version '4.5'.
 *
 * @package     mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (self-signed)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (signed)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP unencrypted';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (self-signed)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (signed)';
$string['aboutyourhost'] = 'Despre serverul dumneavoastră';
$string['accesslevel'] = 'Nivel de acces';
$string['addhost'] = 'Adaugă server';
$string['addnewhost'] = 'Adaugă un nou server';
$string['addtoacl'] = 'Adaugă la Acces Control';
$string['allhosts'] = 'Toate gazdele';
$string['allhosts_no_options'] = 'La vizualizarea multiple hosts nu sunt opţiuni disponibile';
$string['allow'] = 'Permite';
$string['allowaccess'] = 'Permite accesul';
$string['applicationtype'] = 'Tip de aplicație';
$string['authfail_nosessionexists'] = 'Autorizarea a eșuat: sesiunea mnet nu există.';
$string['authfail_sessiontimedout'] = 'Autorizarea a eșuat: sesiunea mnet a expirat.';
$string['authfail_usermismatch'] = 'Autorizarea nu a reușit: utilizatorul nu corespunde';
$string['authmnetdisabled'] = 'Moodle Networking <em>Authentication plugin</em>este <strong>dezactivat</strong>.';
$string['badcert'] = 'Acesta nu este un certificat valid';
$string['certdetails'] = 'Detalii sigure';
$string['configmnet'] = 'MNet permite comunicarea acestui server cu alte servere sau servicii.';
$string['couldnotgetcert'] = 'Nu a fost găsit un certificat la <br />{$a}. <br />Gazda poate fi căzută sau configurată incorect.';
$string['couldnotmatchcert'] = 'Aceasta nu se potrivește cu certificatul publicat în prezent de către serverul web.';
$string['courses'] = 'cursuri';
$string['courseson'] = 'cursuri despre';
$string['current_transport'] = 'Transmisie curentă';
$string['currentkey'] = 'Cheie publică curentă';
$string['databaseerror'] = 'Nu s-au putut scrie detaliile în baza de date.';
$string['deleteaserver'] = 'Eliminare server';
$string['deletedhostinfo'] = 'Această gazdă a fost ștearsă. Dacă doriți să anulați ștergerea, schimbați statusul șters înapoi la "nu".';
$string['deletedhosts'] = 'Gazde șterse: {$a}';
$string['deletehost'] = 'Şterge server';
$string['deletekeycheck'] = 'Sunteţi sigur că doriţi să ştergeţi această cheie?';
$string['deleteoutoftime'] = 'Fereastra de 60 de secunde pentru a șterge această cheie a expirat. Vă rugăm să începeți din nou.';
$string['deleteuserrecord'] = 'SSO ACL: șterge înregistrarea pentru utilizator \'{$a->user}\' de la {$a->host}.';
$string['deletewrongkeyvalue'] = 'A apărut o eroare. Dacă nu ați încercat să ștergeți cheia SSL a serverului dumneavoastră, este posibil să fi fost fost obiectul unui atac malware. Nu a fost întreprinsă nicio acțiune.';
$string['deny'] = 'Interzice';
$string['denyaccess'] = 'Nu permite accesul';
$string['description'] = 'Descriere';
$string['duplicate_usernames'] = 'Nu am reușit să creăm un index pe coloanele "mnethostid" și "utilizator" în tabelul dumneavoastră cu utilizatori. <br /> Aceasta se poate întâmpla atunci când aveți <a href="{$a}" target="_blank"> nume de utilizatori duplicate în </a> tabelul dumneavoastră cu utilizatori. <br /> Upgrade-ul dumneavoastră trebuie să fie completat cu succes. Faceți click pe link-ul de mai sus iar instrucțiunile cu privire la rezolvarea aceastei probleme vor apărea într-o fereastră nouă. Le puteți folosi la sfârșitul upgrade-ului. <br />';
$string['enabled_for_all'] = '(This service has been enabled for all hosts).';
$string['enterausername'] = 'Completaţi aici un nume de utilizator sau o listă cu nume de utilizatori, folosiţi virgula ca separator';
$string['error7020'] = 'Această eroare apare în mod normal dacă site-ul la distanță a creat o înregistrare pentru dvs. cu wwwroot greșit, de exemplu, https://yoursite.com în loc de https://www.yoursite.com. Vă rugăm să contactați administratorul site-ului la distanță cu wwwroot (așa cum se specifică în config.php) și cereți-i să actualizeze înregistrarea pentru gazda dvs.';
$string['error7022'] = 'Mesajul trimis către site-ul de la distanță a fost criptat corect, dar nu a fost semnat. Acest lucru este foarte neașteptat; probabil că ar trebui să înregistrați o eroare dacă se întâmplă acest lucru (oferind cât mai multe informații despre versiunile aplicației respective etc.).';
$string['error7023'] = 'Site-ul remote a încercat să decripteze mesajul cu toate cheile pe care le are înregistrate pentru site-ul tau. Toate au eșuat. S-ar putea să rezolvați această problemă printr-o cheie manuală cu site-ul remote. Acest lucru este puțin probabil să apară, decât dacă nu ați comunicat cu site-ul remote pentru câteva luni.';
$string['error7024'] = 'Trimiteți un mesaj necriptat către site-ul la distanță, dar site-ul la distanță nu acceptă comunicarea necriptată de pe site-ul dvs. Acest lucru este foarte neașteptat; probabil că ar trebui să înregistrați o eroare dacă se întâmplă acest lucru (oferind cât mai multe informații despre versiunile aplicației în cauză etc.).';
$string['error7026'] = 'Cheia cu care a fost semnat mesajul dumneavoastră diferă de cheia pe care o are gazda la distanță pentru serverul dumneavoastră. Mai mult, gazda de la distanță a încercat să utilizeze cheia actuală dar nu a reușit. Vă rugăm să reintroduceți manual cheia gazdei de la distanță și să încercați din nou.';
$string['error709'] = 'Situl remote nu a reuşit să obţină o cheie SSL de la dumneavoastră.';
$string['eventaccesscontrolcreated'] = 'Control acces creat';
$string['eventaccesscontrolupdated'] = 'Control acces actualizat';
$string['expired'] = 'Această cheie expiră la';
$string['expires'] = 'Valabil până la';
$string['expireyourkey'] = 'Elimină această cheie';
$string['expireyourkeyexplain'] = 'Moodle rotește automat cheile la fiecare 28 de zile (în mod implicit), dar aveti optiunea de a <em> manual </ em> seta ca fiind expirată această cheie în orice moment. Acest lucru va fi util numai dacă credeți că această cheie a fost compromisă. Un înlocuitor va fi imediat generat automat. <br /> Ștergerea aceastei chei va face imposibilă comunicarea altor aplicații cu dumneavoastră, până când contactați manual fiecare administrator și să le oferiți noua cheie.';
$string['exportfields'] = 'Câmpuri de export';
$string['failedaclwrite'] = 'Nu a reușit să se scrie pe lista de control al accesului MNet pentru utilizator "{$a}".';
$string['findlogin'] = 'Găsiți autentificare';
$string['forbidden-function'] = 'Acea funcţie nu a fost activată pentru RPC.';
$string['forbidden-transport'] = 'Metoda de transport pe care încercaţi să o folosiţi nu este permisă.';
$string['forcesavechanges'] = 'Forțați salvarea modificărilor';
$string['helpnetworksettings'] = 'Configurați comunicarea MNet';
$string['hidelocal'] = 'Ascunde utilizatori locali';
$string['hideremote'] = 'Ascunde utilizatori remote';
$string['host'] = 'host';
$string['hostcoursenotfound'] = 'Host or course not found';
$string['hostdeleted'] = 'Gazda ștearsă';
$string['hostexists'] = 'O înregistrare există deja pentru o gazdă cu acest nume de  gazdă (se poate să fie șters). <a href="{$a}">Editează înregistrarea</a>';
$string['hostlist'] = 'Lista gazdelor din rețea';
$string['hostname'] = 'Hostname';
$string['hostnamehelp'] = 'Numele complet al domeniului pentru remote host, ex. www.exemplu.com';
$string['hostnotconfiguredforsso'] = 'Acest server nu este configurat pentru autentificarea de la distanță.';
$string['hostsettings'] = 'Setările gazdei';
$string['http_self_signed_help'] = 'Permite conexiuni folosind un Certificat SSL DIY auto-semnat pe host-ul de la distanță.';
$string['http_verified_help'] = 'Permite conexiuni utilizând un Certificat SSL verificat în PHP pe host-ul de la distanţă, dar prin protocolul http (nu https).';
$string['https_self_signed_help'] = 'Permite conexiuni folosind un permis auto-semnat DIY SSL în PHP pe host-ul de la distanţă prin HTTP.';
$string['https_verified_help'] = 'Permite conexiuni utilizând un Certificat SSL verificat pe host-ul de la distanţă';
$string['id'] = 'Identificator';
$string['idhelp'] = 'Această valoare este atribuită automat şi nu poate fi modificată';
$string['importfields'] = 'Câmpuri de importat';
$string['inspect'] = 'Inspectează';
$string['installnosuchfunction'] = 'Eroare de codare! Se încearcă instalarea unei funcții MNET xmlrpc ({$a-> method}) dintr-un fișier ({$a-> file}) și nu se poate găsi!';
$string['installnosuchmethod'] = 'Eroare de codare! Se încearcă instalarea unei metode MNET xmlrpc ({$a-> method}) pe o clasă ({$a-> class}) și nu se poate găsi!';
$string['installreflectionclasserror'] = 'Eroare de codificare! Introspecția MNet nu a reușit pentru metoda \'{$a->metoda}\' în clasa \'{$a->clasa}\'. Mesajul de eroare inițial, în cazul în care vă ajută, este: \'{$a->eroare}\'';
$string['installreflectionfunctionerror'] = 'Eroare de codificare! Introspecția MNet nu a reușit pentru funcția \'{$a->metoda}\' în fișierul \'{$a->fișier}\'. Mesajul de eroare inițial, în cazul în care vă ajută, este: \'{$a->eroare}\'';
$string['invalidaccessparam'] = 'Parametru de acces incorect.';
$string['invalidactionparam'] = 'Parametru de acţiune incorect.';
$string['invalidhost'] = 'Trebuie să furnizezați un identificator valid al gazdei';
$string['invalidpubkey'] = 'Aceasta nu este o cheie SSL validă. ({$a})';
$string['invalidurl'] = 'Parametru URL incorect.';
$string['ipaddress'] = 'Adresă IP';
$string['is_in_range'] = 'Adresa IP <code> {$a} </ code> reprezintă o gazdă de încredere validă.';
$string['ispublished'] = '{$a} a activat acest serviciu pentru dumneavoastră.';
$string['issubscribed'] = '{$} este abonarea la acest serviciu de pe gazda dumneavoastră.';
$string['keydeleted'] = 'Cheia a fost ștearsă și înlocuită cu succes.';
$string['keydeletedcancelled'] = 'Nu s-au adus modificări cheii.';
$string['keymismatch'] = 'Cheia publică pe care o dețineți pentru această gazdă este diferită de cheia publică din prezent. Cheia publicată în prezent este:';
$string['last_connect_time'] = 'Ultima conectare a avut loc la';
$string['last_connect_time_help'] = 'Ora la care v-ați conectat  ultima oară la acest host.';
$string['last_transport_help'] = 'Conexiunea pe care aţi folosit-o ultima oară când ați accesat acest host.';
$string['leavedefault'] = 'Utilizează în schimb setările implicite';
$string['listservices'] = 'Listă de servicii';
$string['loginlinkmnetuser'] = '<br /> Dacă sunteți utilizator de la distanță MNet și puteți <a href="{$a}"> confirma adresa de email aici </a>, puteți fi redirecționat către pagina de autentificare. <br />';
$string['logs'] = 'arhive';
$string['managemnetpeers'] = 'Administrare perechi';
$string['method'] = 'Metodă';
$string['methodhelp'] = 'Metodă de ajutor pentru {$a}';
$string['methodsavailableonhost'] = 'Metode disponibile pe {$a}';
$string['methodsavailableonhostinservice'] = 'Metode disponibile pentru {$a-> service} pe {$a->host}';
$string['methodsignature'] = 'Metodă semnătură pentru {$}';
$string['mnet'] = 'MNet';
$string['mnet_concatenate_strings'] = 'Concatenează (până la) 3 siruri de caractere și returnează rezultatul';
$string['mnet_session_prohibited'] = 'Utilizatorii din serverul dumneavoastră local nu au permisiunea în prezent să se mute la {$a}';
$string['mnetdisabled'] = 'MNet este <strong>disabled</strong>.';
$string['mnetidprovider'] = 'Identificatorul provider-ului MNET';
$string['mnetidproviderdesc'] = 'Puteți folosi această facilitate pentru a prelua un link la care vă puteți conecta, dacă puteți oferi adresa de e-mail corectă care corespunde numelui de utilizator cu care ați incercat anterior să vă conectați.';
$string['mnetidprovidermsg'] = 'Ar trebui să puteți să vă conectați la providerul dumneavoastră {$a}.';
$string['mnetidprovidernotfound'] = 'Ne pare rău, dar nu s-au putut găsi alte informații';
$string['mnetpeers'] = 'Peers';
$string['mnetservices'] = 'Servicii';
$string['mnetsettings'] = 'Setări MNet';
$string['moodle_home_help'] = 'Adresa către pagina principală a aplicației MNet pe server, ex: /moodle/.';
$string['name'] = 'Nume';
$string['net'] = 'Rețelistică';
$string['networksettings'] = 'Setări rețea';
$string['never'] = 'Niciodată';
$string['noaclentries'] = 'No entries in the SSO access control list';
$string['noaddressforhost'] = 'Ne pare rau, dar acel nume de gazdă ({$a}) nu a putut fi rezolvat!';
$string['nocurl'] = 'Librăria PHP cURL nu a fost instalată';
$string['nolocaluser'] = 'No local record exists for remote user.';
$string['nomodifyacl'] = 'Nu aveți permisiunea de a modifica lista de control acces MNet.';
$string['nonmatchingcert'] = 'Subiectul certificatului: <br /><em>{$a->subject}</em <br/> nu se potrivește cu gazda de la care a provenit: <br/><em>{$a- gazdă } </em>.';
$string['nopubkey'] = 'A apărut o problemă la preluarea cheii publice. <br /> Poate gazda nu permite MNet sau cheia este invalidă.';
$string['nosite'] = 'Nu s-a putut găsi cursul la nivelul site-ului';
$string['nosuchfile'] = 'Fişierul/funcţionalitatea {$a} nu există.';
$string['nosuchfunction'] = 'Nu s-a putut localiza funcția sau funcția este interzisă pentru RPC.';
$string['nosuchmodule'] = 'Funcția a fost folosită în mod incorect și nu a putut fi localizată. Vă rugăm să utilizați
mod/modulename/lib/functionname format.';
$string['nosuchpublickey'] = 'Nu s-a putut obține cheia publică pentru verificarea semnăturii.';
$string['nosuchservice'] = 'The RPC service is not running on this host.';
$string['nosuchtransport'] = 'No transport with that ID exists.';
$string['notBASE64'] = 'Acest șir nu este în format codificat base64. Nu poate fi o cheie validă.';
$string['notPEM'] = 'Această cheie nu este în format PEM. Nu va funcționa.';
$string['not_in_range'] = 'Adresa IP <code>{$a}</code> nu reprezintă o gazdă validă.';
$string['notenoughidpinfo'] = 'Providerul dumneavoastră de identitate nu ne dă suficiente informații pentru a crea sau actualiza contul dumneavoastră local. Ne pare rău!';
$string['notinxmlrpcserver'] = 'Se încearcă a se accesa clientul MNet la distanță, nu în timpul execuției serverului XMLRPC';
$string['notmoodleapplication'] = 'AVERTIZARE: Aceasta nu este o aplicație Moodle, așadar unele dintre metodele de inspecție pot să nu funcționeze corespunzător.';
$string['notpermittedtojump'] = 'Nu aveți permisiunea de a începe o sesiune la distanță de pe acest server Moodle.';
$string['notpermittedtojumpas'] = 'Nu puteți începe o sesiune la distanță în timp ce sunteți logat ca și un alt utilizator.';
$string['notpermittedtoland'] = 'Nu aveţi permisiunea să începeţi această sesiune remote.';
$string['off'] = 'Off';
$string['on'] = 'On';
$string['options'] = 'Opțiuni';
$string['peerprofilefielddesc'] = 'Aici puteți suprascrie setările globale pentru domeniile de profil  trimise și importate atunci când sunt creați noi utilizatori';
$string['permittedtransports'] = 'Metode de transport permise';
$string['phperror'] = 'O eroare internă PHP a împiedicat crerea dumneavoastră de a fi îndeplinită complet.';
$string['position'] = 'Poziție';
$string['postrequired'] = 'Funcția de ștergere necesită o cerere POST.';
$string['privacy:metadata'] = 'Plugin-ul MNet nu stochează date personale.';
$string['profileexportfields'] = 'Fișiere de trimis';
$string['profilefielddesc'] = 'Aici puteți configura lista câmpurilor de profil care sunt trimise și primite prin MNet atunci când sunt create conturi de utilizator sau sunt actualizate. De asemenea, puteți suprascrie acest lucru pentru fiecare pereche MNet în mod individual. Rețineți că următoarele câmpuri sunt trimise întotdeauna și nu sunt opționale: {$a}';
$string['profilefields'] = 'Câmpuri de profil';
$string['profileimportfields'] = 'Câmpuri de importat';
$string['promiscuous'] = 'Promiscuu';
$string['publickey'] = 'Cheie publică';
$string['publickey_help'] = 'Cheia publică de acces este în mod automat obţinută de la serverul de la distanţă.';
$string['publickeyrequired'] = 'Trebuie să furnizați o cheie publică.';
$string['publish'] = 'Publică';
$string['reallydeleteserver'] = 'Sunteţi sigur că doriţi ştergerea serverului?';
$string['receivedwarnings'] = 'S-au primit următoarele atenţionări';
$string['recordnoexists'] = 'Înregistrarea nu există.';
$string['reenableserver'] = 'Nu - selectați această opțiune pentru a reactiva acest server.';
$string['registerallhosts'] = 'Înregistrați toate gazdele (mod promiscuu)';
$string['registerallhostsexplain'] = 'Puteți alege să înregistrați toate gazdele care încearcă să se conecteze  în mod automat. Acest lucru înseamnă că o înregistrare va apărea în lista de gazde pentru orice site MNet care se conectează  și cere cheia publica. <br/> Aveți opțiunea de mai jos pentru a configura serviciile pentru "Toate gazdele" și prin activarea unor servicii, puteți furniza servicii către orice server remote.';
$string['registerhostsoff'] = 'Înregistrarea tuturor gazdelor este în prezent <b>off</b>';
$string['registerhostson'] = 'Înregistrarea tuturor gazdelor este în prezent <b>on</b>';
$string['remotecourses'] = 'Cursuri la distanță';
$string['remotehost'] = 'Gazde remote';
$string['remotehosts'] = 'Remote hosts';
$string['remoteuser'] = 'Utlizator la distanță {$a->remotetype}';
$string['remoteuserinfo'] = 'Profil preluat de la <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['requiresopenssl'] = 'Networking requires the OpenSSL extension';
$string['restore'] = 'Restaurează';
$string['returnvalue'] = 'Returnare valoare';
$string['reviewhostdetails'] = 'Revizuiți detaliile gazdei';
$string['reviewhostservices'] = 'Examinați serviciile gazdei';
$string['selectaccesslevel'] = 'Vă rugăm selectaţi din listă un nivel de acces.';
$string['selectahost'] = 'Vă rugăm să selectați o gazdă remote.';
$string['service'] = 'Nume serviciu';
$string['serviceid'] = 'ID serviciu';
$string['servicesavailableonhost'] = 'Servicii disponibile pe {$a}';
$string['serviceswepublish'] = 'Servicii publicate pe {$a}.';
$string['serviceswesubscribeto'] = 'Servicii de pe {$a} la care suntem subscrişi.';
$string['settings'] = 'Setări';
$string['showlocal'] = 'Afişează utilizatori locali';
$string['showremote'] = 'Afişează utilizatori remote';
$string['ssl_acl_allow'] = 'SSO ACL: Permite accesul utilizatorului \'{$a->user}\' de la \'{$a->host}\'';
$string['ssl_acl_deny'] = 'SSO ACL: Refuză accesul utilizatorului \'{$a->user}\' de la \'{$a->host}\'';
$string['sslverification'] = 'Verificare SSL';
$string['sslverification_help'] = 'Această opțiune vă permite să configurați nivelul de securitate la conectarea cu un peer folosind HTTPS.

* Fără: nu există nici un nivel de securitate
* Verificați doar gazdă: validează domeniul certificatului SSL
* Verificați gazda și peer (recomandat): validează domeniul și emitentul certificatului SSL';
$string['ssoaccesscontrol'] = 'Control acces SSO';
$string['ssoacldescr'] = 'Utilizați această pagină pentru a oferi/respinge accesul utilizatorilor la host-uri MNet. Acest lucru este posibil când oferiți servicii SSO pentru utilizatorii la distanță. Pentru a  putea controla <em>local</em> users\' abilitatea utilizatorilor de a utiliza alte Host-uri MNet, folosiți sistemul de roluri pentru a le oferi <em>mnetlogintoremote</em> accesul.';
$string['ssoaclneeds'] = 'Pentru această funcționalitate să funcționeze, trebuie să aveți Networking activat, plus plugin-ul de autentificare MNet activat.';
$string['strict'] = 'Strict';
$string['subscribe'] = 'Subscriere';
$string['system'] = 'Sistem';
$string['testclient'] = 'Test client MNet';
$string['testtrustedhosts'] = 'Testează o adresă';
$string['testtrustedhostsexplain'] = 'Inserați o adresă IP pentru a vedea dacă este o gazdă de încredere.';
$string['theypublish'] = 'Pulblică';
$string['theysubscribe'] = 'Se abonează';
$string['transport_help'] = 'Aceste opţiuni sunt reciproce, astfel încât puteți obliga un host de la distanță să utilizeze un certificat semnat SSL doar dacă serverul dvs are de asemenea un certificat semnat SSL.';
$string['trustedhosts'] = 'XML-RPC hosts';
$string['trustedhostsexplain'] = '<p> Mecanismul gazdelor de încredere permite anumitor mașini să execute apeluri prin XML-RPC către orice parte a API-ului Moodle. Acest lucru este disponibil pentru scripturi pentru a controla comportamentul Moodle și poate fi o opțiune foarte periculoasă de activat. Dacă aveți dubii, păstrați-l. </p>
<p> <strong> Acest lucru nu este necesar pentru nicio funcție MNet standard! </strong> Porniți-o numai dacă știți ce faceți. </p>
<p> Pentru ao activa, introduceți o listă de adrese IP sau rețele,
câte una pe fiecare linie. Câteva exemple: </p>
Gazda dvs. locală: <br /> 127.0.0.1 <br /> Gazda dvs. locală (cu un bloc de rețea): <br /> 127.0.0.1/32 <br /> Numai gazda cu adresa IP 192.168.0.7:<br />192.168.0.7/32 <br /> Orice gazdă cu o adresă IP între 192.168.0.1 și 192.168.0.255: <br /> 192.168.0.0/24 <br /> Orice gazdă de orice fel: <br /> 192.168.0.0 / 0 <br /> Evident, ultimul exemplu este <strong> nu </strong> o configurație recomandată.';
$string['turnitoff'] = 'Închide';
$string['turniton'] = 'Deschide';
$string['type'] = 'Tip';
$string['unknown'] = 'Necunoscut';
$string['unknownerror'] = 'S-a întâmpinat o eroare necunoscută în timpul negocierii.';
$string['usercannotchangepassword'] = 'Nu puteţi să modificaţi aici parola dumneavoastră pentru ca sunteţi un utilizator de tip remote';
$string['userchangepasswordlink'] = '<br /> Pentru a vă putea modifica parola accesaţi <a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a>.';
$string['usernotfullysetup'] = 'Profilul dumneavoastră de utilizator este incomplet. Trebuie să mergeți înapoi la <a href="{$a}">providerul dumneavoastră</a> și să vă asigurați că profilul dumneavoastră este complet acolo. S-ar putea să fie nevoie să vă delogați și să vă logați din nou pentru ca această acțiune să aibă efect.';
$string['usersareonline'] = 'Atenţie: {$a} utilizatori de pe acel server sunt logaţi în prezent pe situl dumneavoastră.';
$string['validated_by'] = 'Este validat de rețea: <code> {$a} </code>';
$string['verifyhostandpeer'] = 'Verifică gazdă și peer';
$string['verifyhostonly'] = 'Verifică doar gazda';
$string['verifysignature-error'] = 'Verificarea semnăturii a eșuat. A apărut o eroare.';
$string['verifysignature-invalid'] = 'Verificarea semnăturii a eșuat. Se pare că acest document nu a fost semnat de către dumneavoastră.';
$string['version'] = 'Versiune';
$string['warning'] = 'Atenție';
$string['wrong-ip'] = 'Adresa dumneavoastră IP nu corespunde adresei pe care o avem înregistrată.';
$string['xmlrpc-missing'] = 'Trebuie să aveți  XML-RPC instalat în PHP configurat pentru a putea folosi această caracteristică.';
$string['yourhost'] = 'Gazda dumneavoastră';
$string['yourpeers'] = 'Perechile dumneavoastră';
