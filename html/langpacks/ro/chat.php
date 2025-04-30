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
 * Strings for component 'chat', language 'ro', version '4.4'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Aveți sesiuni de Cameră de discuții viitoare';
$string['ajax'] = 'Versiune folosind AJAX';
$string['autoscroll'] = 'Scroll automat';
$string['beep'] = 'Beep';
$string['bubble'] = 'Balon';
$string['cantlogin'] = 'Nu puteți intra în Camera de discuții!!';
$string['chat:addinstance'] = 'Adaugă o nouă Cameră de discuții';
$string['chat:chat'] = 'Accesaţi o cameră de discuţii';
$string['chat:deletelog'] = 'Şterge jurnalele discuţiilor';
$string['chat:exportparticipatedsession'] = 'Exportă sesiunile de Cameră de discuții la care ați participat';
$string['chat:exportsession'] = 'Exportă orice sesiune de Cameră de discuții';
$string['chat:readlog'] = 'Vezi jurnalele discuțiilor';
$string['chat:talk'] = 'Participă la discuţii';
$string['chat:view'] = 'Vizualizați activitatea Cameră de discuții';
$string['chatintro'] = 'Descriere';
$string['chatname'] = 'Denumirea camerei de discuții';
$string['chatreport'] = 'Sesiuni de discuţii';
$string['chattime'] = 'Ora de începere a următoarei sesiuni';
$string['compact'] = 'Compact';
$string['composemessage'] = 'Compuneți un mesaj';
$string['configmethod'] = 'Metoda de chat AJAX oferă o interfață de chat bazată pe AJAX, care contactează serverul în mod regulat pentru actualizări. Metoda normală de chat implică clienții care contactează periodic serverul pentru actualizări. Nu necesită configurare și funcționează peste tot, dar poate crea o încărcare mare pe server dacă mulți utilizatori conversează pe chat. Utilizarea unui demon de server necesită acces shell la Unix, dar are ca rezultat un mediu de chat rapid scalabil.';
$string['confignormalupdatemode'] = 'Actualizările camerelor de discuţii sunt de obicei realizate eficient prin intermediul funcţionalităţii <em>Keep-Alive</em> a HTTP 1.1, însă acest lucru înseamnă o încărcare destul de mare a serverului. O metodă mai avansată ar fi folosirea strategiei <em>Stream</em> pentru trimiterea actualizărilor la utilizatori. Folosirea <em>Stream</em> permite eficientizarea încărcării serverului (similar cu metoda chatd) dar este posibil ca această metodă să nu fie compatibilă cu serverul dumneavoastră.';
$string['configoldping'] = 'Care este intervalul de timp maxim după care se detectează deconectarea unui utilizator? (secunde) Aceasta este valoarea maximă, de obicei deconectarea se detectează foarte rapid. Dacă introduceţi aici o valoare mică acest lucru ar putea încărca serverul. Dacă folosiţi metoda normală, nu setaţi <strong>niciodadă</strong> această valoare mai mică decât 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Cât de des se va actualiza camera de discuţii? (secunde). Dacă introduceţi aici o valoare mică, respectiva cameră de discuţii va părea mai rapidă însă acest lucru va însemna o încărcătură mai mare pentru server atunci când sunt mulţi utilizatori. Dacă folosiţi pentru actualizare metoda <em>Stream</em> puteţi selecta frecvenţe mai mari de actualizare - încercaţi cu 2.';
$string['configrefreshuserlist'] = 'Cât de des se va actualiza lista de utilizatori? (secunde)';
$string['configserverhost'] = 'Hostname-ul calculatorului unde se află daemonul serverului';
$string['configserverip'] = 'Adresa IP numerică ce corespunde hostname-ului completat în câmpul de mai sus';
$string['configservermax'] = 'Număr maxim de clienţi admişi';
$string['configserverport'] = 'Portul de pe server ce va fi utilizat de daemon';
$string['coursetheme'] = 'Tema cursului';
$string['crontask'] = 'Procesare de fundal pentru modulul Cameră de discuții';
$string['currentchats'] = 'Sesiuni de discuţii active';
$string['currentusers'] = 'Utilizatori logaţi';
$string['deletesession'] = 'Şterge această sesiune';
$string['deletesessionsure'] = 'Sunteţi sigur că doriţi ştergerea acestei sesiuni?';
$string['donotusechattime'] = 'Nu afişa ora la care au loc discuțiile';
$string['enterchat'] = 'Participați la discuție';
$string['entermessage'] = 'Inserați mesajul dumneavoastră';
$string['errornousers'] = 'Nu s-a găsit niciun utilizator!';
$string['eventmessagesent'] = 'Mesaj trimis';
$string['eventsessionsviewed'] = 'Sesiune vizualizată';
$string['explaingeneralconfig'] = 'Aceste setări sunt folosite <strong>întotdeauna</strong>';
$string['explainmethoddaemon'] = 'Aceste setări au efect numai dacă „Daemon server chat” este selectat ca metodă de Cameră de discuții.';
$string['explainmethodnormal'] = 'Aceste setări au efect numai dacă Normal este selectat ca metodă de Cameră de discuții.';
$string['generalconfig'] = 'Configurări generale';
$string['idle'] = 'Inactiv';
$string['indicator:cognitivedepth'] = 'Informații cognitive despre Cameră de discuții';
$string['indicator:cognitivedepth_help'] = 'Acest indicator se bazează pe implicarea cognitivă atinsă de student într-o activitate de tipul Cameră de discuții.';
$string['indicator:cognitivedepthdef'] = 'Informații cognitive despre Cameră de discuții';
$string['indicator:cognitivedepthdef_help'] = 'Participantul a atins acest procent din implicarea cognitivă oferită de activitatea Cameră de discuții în timpul acestui interval de analiză (niveluri = Fără vizualizare, Vizualizare, Trimitere, Vizualizare feedback, Comentariu la feedback)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Informații sociale despre Camera de discuții';
$string['indicator:socialbreadth_help'] = 'Acest indicator se bazează pe implicarea socială atinsă de cursant într-o activitate de tipul Cameră de discuții.';
$string['indicator:socialbreadthdef'] = 'Informații sociale despre Cameră de discuții';
$string['indicator:socialbreadthdef_help'] = 'Participantul a atins acest procent din implicarea socială oferită de activitatea Cameră de discuții în timpul acestui interval de analiză (Nivele = Fără participare, Participant singur, Participant cu alții)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['inputarea'] = 'Zona de introducere text';
$string['invalidid'] = 'Nu a fost găsită acea cameră de discuții';
$string['list_all_sessions'] = 'Listează toate sesiunile';
$string['list_complete_sessions'] = 'Listează doar sesiunile complete.';
$string['listing_all_sessions'] = 'Se listează toate sesiunile';
$string['messagebeepseveryone'] = '{$a} trimite o atenţionare la toţi utilizatorii!';
$string['messagebeepsyou'] = '{$a} v-a trimis o atenţionare!';
$string['messageenter'] = '{$a} a intrat în această cameră de discuţii';
$string['messageexit'] = '{$a} a ieşit din această cameră de discuţii';
$string['messages'] = 'Mesaje';
$string['messageyoubeep'] = 'L-ai sunat pe {$a}';
$string['method'] = 'Metodă Cameră de discuții';
$string['methodajax'] = 'Metodă Ajax';
$string['methoddaemon'] = 'Server Cameră de discuții';
$string['methodnormal'] = 'Metoda normală';
$string['modulename'] = 'Cameră de discuții';
$string['modulename_help'] = 'Modulul de activitate de tip chat permite participanților să aibă discuții sincrone în timp real, în format pe text.

Chat-ul poate fi o activitate unică sau poate fi repetat la aceeași oră în fiecare zi sau în fiecare săptămână. Sesiunile de chat sunt salvate și pot fi puse la dispoziția tuturor pentru vizualizare sau restricționate doar pentru utilizatorii cu capacitatea de a vizualiza jurnalele sesiunilor de chat.

Chat-urile sunt utile mai ales atunci când un grup nu se poate întâlni față în față, cum ar fi

* Întâlniri regulate ale cursanților care participă la cursuri online pentru a le permite să împărtășească experiențe cu alții în același curs, dar într-o locație diferită
* Un cursant care nu poate participa temporar la o discuție personală cu profesorul pentru a ajunge la muncă
* Cursanții din experiența de lucru se reunesc pentru a discuta despre experiențele lor între ei și profesorul lor
* Copiii mai mici folosesc chat-ul acasă seara ca introducere controlată (monitorizată) în lumea rețelelor sociale
* O sesiune de întrebări și răspunsuri cu un vorbitor invitat într-o altă locație
* Sesiuni pentru a ajuta elevii să se pregătească pentru teste în care profesorul sau alți cursanții ar pune întrebări eșantion';
$string['modulename_link'] = 'mod/chat/view';
$string['modulenameplural'] = 'Discuții';
$string['neverdeletemessages'] = 'Nu şterge niciodată mesajele';
$string['nextchattime'] = 'Când va avea loc următoarea discuție:';
$string['no_complete_sessions_found'] = 'Nu s-au găsit sesiuni complete.';
$string['nochat'] = 'Nu s-a găsit nicio discuție';
$string['noguests'] = 'Această Cameră de discuții nu este deschisă vizitatorilor';
$string['nomessages'] = 'Nu a fost trimis încă niciun mesaj';
$string['nopermissiontoseethechatlog'] = 'Nu aveți permisiunea să vedeți jurnalele din Camera de discuții.';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Nu este programată nicio sesiune';
$string['notallowenter'] = 'Nu aveți voie să intrați în Camera de discuții';
$string['notlogged'] = 'Nu sunteți autentificat!';
$string['oldping'] = 'Timp deconectare';
$string['page-mod-chat-x'] = 'Orice pagină a modulului Cameră de discuții';
$string['pastchats'] = 'Sesiuni de discuţii anterioare';
$string['pastsessions'] = 'Sesiuni încheiate';
$string['pluginadministration'] = 'Administrare Cameră de discuții';
$string['pluginname'] = 'Cameră de discuții';
$string['privacy:metadata:chat_messages_current'] = 'Sesiunea Cameră de discuții curentă. Aceste date sunt temporare și sunt șterse după ștergerea sesiunii Cameră de discuții';
$string['privacy:metadata:chat_users'] = 'Urmărește ce utilizatori sunt în ce camere de discuții';
$string['privacy:metadata:chat_users:firstping'] = 'Ora primului acces la camera de discuții';
$string['privacy:metadata:chat_users:ip'] = 'IP utilizator';
$string['privacy:metadata:chat_users:lang'] = 'Limba utilizatorului';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Ora ultimului mesaj din această cameră de discuții';
$string['privacy:metadata:chat_users:lastping'] = 'Ora ultimului acces la camera de discuții';
$string['privacy:metadata:chat_users:userid'] = 'ID-ul utilizatorului';
$string['privacy:metadata:chat_users:version'] = 'Cum a accesat utilizatorul camera de discuții (sockets / basic / ajax / header_js)';
$string['privacy:metadata:messages'] = 'O jurnalizare a mesajelor trimise în timpul unei sesiuni de discuții';
$string['privacy:metadata:messages:issystem'] = 'Dacă mesajul este un mesaj generat de sistem';
$string['privacy:metadata:messages:message'] = 'Mesajul';
$string['privacy:metadata:messages:timestamp'] = 'Ora la care a fost trimis mesajul.';
$string['privacy:metadata:messages:userid'] = 'ID-ul de utilizator al autorului mesajului';
$string['refreshroom'] = 'Actualizare cameră discuţii';
$string['refreshuserlist'] = 'Actualizează listă utilizatori';
$string['removemessages'] = 'Şterge toate mesajele';
$string['repeatdaily'] = 'La aceeaşi oră în fiecare zi';
$string['repeatnone'] = 'Fără repetiţii - se publică doar timpul specificat';
$string['repeattimes'] = 'Repetați / publicați orele sesiunii';
$string['repeatweekly'] = 'La aceeaşi oră în fiecare săptămână';
$string['saidto'] = 'zis catre';
$string['savemessages'] = 'Păstrează sesiuni anterioare';
$string['search:activity'] = 'Camera de discuții - informații privind activitatea';
$string['seesession'] = 'Vezi sesiunea aceasta';
$string['send'] = 'Trimis';
$string['sending'] = 'Se trimite';
$string['serverhost'] = 'Nume server';
$string['serverip'] = 'IP server';
$string['servermax'] = 'Număr maxim de utilizatori';
$string['serverport'] = 'Port server';
$string['sessions'] = 'Sesiuni discuţii';
$string['sessionstartsin'] = 'Următoarea sesiune de discuții va începe {$a} de acum.';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Toţi utilizatorii pot vizualiza sesiunile anterioare';
$string['studentseereports_help'] = 'Daca alegeți Nu, doar utilizatorii care au activată setarea mod/chat:readlog vor putea să consulte jurnalele de conversație';
$string['talk'] = 'Vorbiți';
$string['updatemethod'] = 'Metodă actualizare';
$string['updaterate'] = 'Rata de actualizare:';
$string['userlist'] = 'Lista utilizatorilor';
$string['usingchat'] = 'Folosind Camera de discuții';
$string['usingchat_help'] = 'Modulul Cameră de discuții conține anumite caracteristici pentru a face discuțiile un pic mai plăcute.

Modulul de chat conţine anumite caracteristici pentru a face chatul un pic mai plăcut.
 *Smileys - Orice feţe zâmbitoare (emoticons), pe care le tastaţi în altă parte în Moodle pot fi, de asemenea, tastate și aici, de exemplu :-)
* Link-uri- adresele diferitelor site-uri vor fi transformate automat în linkuri
* Emoting- Puteti tasta "/me" sau ":" pentru a exprima o stare sau emoție, de exemplu, dacă numele dumneavoastră este Raul şi tastaţi":laughs!" sau "/me laughs!" atunci toată lumea va vedea "Raul râde!"
* Beep - Aveţi posibilitatea să trimiteţi un sunet la alţi participanţi, făcând click pe link-ul "bip" de lângă numele lor (în Yahoo Messenger aceași acțiune se numește Buzz). Puteți să dați beep la toți participanții la chat deodată dacă tastați "beep all".
* HTML - Dacă sunteți familiar cu limbajul HTML, îl puteţi folosi în textul dvs. pentru a: insera imagini, sunete sau pentru a scrie cu text de diferite culori.';
$string['viewreport'] = 'Vizualizează sesiuni de discuţii anterioare';
