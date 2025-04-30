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
 * Strings for component 'enrol_lmb', language 'ro', version '4.4'.
 *
 * @package     enrol_lmb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving'] = 'După ce vă salvați setările, vă recomandăm să';
$string['always'] = 'Întotdeauna';
$string['assignroles'] = 'Atribuiți roluri';
$string['authmethod'] = 'Setați metoda de autorizare la';
$string['authmethodhelp'] = 'Selectați la ce metodă de autorizare trebuie să seteze conturile modulul LMB.';
$string['bannerextractimport'] = 'Banner XML Import';
$string['bannerxmlfolder'] = 'Locația folderului XML Banner';
$string['bannerxmlfoldercomp'] = 'Tratați folderul XML Banner ca fiind cuprinzător';
$string['bannerxmlfoldercomphelp'] = 'Dacă această opțiune este selectată, atunci înregistrările lipsă din fișierele extrase vor fi abandonate.';
$string['bannerxmlfolderhelp'] = 'Calea (pe serverul Moodle) către directorul unde va fi localizat un set de fișiere XML.';
$string['bannerxmllocation'] = 'Localizare fișier XML';
$string['bannerxmllocationcomp'] = 'Tratați fișierul XML Banner ca fiind cuprinzător';
$string['bannerxmllocationcomphelp'] = 'Dacă această opțiune este selectată, atunci înscrierile lipsă din fișierul extras vor fi abandonate.';
$string['bannerxmllocationhelp'] = 'Calea (pe serverul Moodle) în care se află fișierul XML pe care doriți să îl importați.';
$string['bizdowngrace'] = 'Trimiteți mesaj pentru timpul de grație în timpul orelor de lucru';
$string['bizdowngracehelp'] = 'Câte minute pot trece de la ultimul mesaj LMB înainte ca mesajele de avertizare să fie trimise în timpul orelor de lucru. Faceți setarea la 0, pentru a dezactiva verificările în această perioadă.';
$string['blacklist'] = 'Lista neagră';
$string['categorytype'] = 'Categorii de cursuri';
$string['categorytypehelp'] = 'Aceasta vă permite să selectați în ce categorii doriți să fie create cursurile. Opțiuni:
<ul>
<li> Termeni: această setare va asigura plasarea cursurilor în categorii cu numele termenului/ semestrului lor.
<li> Departamente: această setare va asigura plasarea cursurilor în categorii cu numele departamentului gazdă.
<li> Coduri departament: utilizează codul scurt al departamentului, în loc de numele complet.
<li> Termeni, apoi Departamente: această setare va asigura plasarea cursurilor în categorii cu numele departamentului gazdă, care este cuprins într-un termen părinte numit pentru termen/ semestru.
<li> Termeni, apoi Coduri departamentale: Este la fel ca Termeni, apoi Departamente, dar utilizează codul scurt al departamentului în locul numelui său complet.
<li> Conținut selectat: cu această setare, selectați categoria existentă în care doriți să fie plasate cursurile din al doilea meniu derulant.
</ul>';
$string['cathidden'] = 'Creați categorii noi ca "ascunse"';
$string['cathiddenhelp'] = 'Creați categorii noi ca "ascunse".';
$string['catnested'] = 'Concentrați noi categorii sub cursul selectat';
$string['catnestedhelp'] = 'Când este bifată, vor fi create noi categorii în cadrul categoriei selectate. Dacă această opțiune nu este bifată, categoriile vor fi create în spațiul rădăcină. Această opțiune nu are efect, atunci când este utilizată opțiunea categoriei „Selectat”.';
$string['catselect'] = 'Categorie selectată';
$string['catselecthelp'] = '';
$string['commadelimit'] = '(Delimitat prin virgulă)';
$string['computesections'] = 'Calculați numărul de secțiuni';
$string['computesectionshelp'] = 'Calculați numărul de secțiuni/ subiecte de afișat, pe baza numărului de săptămâni dintr-un curs.';
$string['consolidateusers'] = 'Consolidați numele de utilizator existente';
$string['consolidateusershelp'] = 'Dacă utilizatorul nu poate fi găsit cu codul sursă așteptat (număr), dar se găsește o potrivire cu numele de utilizator, conturile vor fi consolidate. Folosiți această opțiune, numai dacă știți că numele de utilizator sunt unice și nu se vor ciocni.';
$string['coursehidden'] = 'Creați cursuri noi ascunse';
$string['coursehiddenalways'] = 'Întotdeauna';
$string['coursehiddencron'] = 'Bazat pe setarea cron';
$string['coursehiddenhelp'] = 'Specificați dacă noile cursuri trebuie create în stare "ascunsă" sau nu. Opțiuni:
<ul>
<li> Niciodată: cursurile nu vor fi niciodată create ca "ascunse" (adică, întotdeauna sunt create ca "vizibile")
<li> Bazat pe setarea cron: Cursul va fi creat cu setul de vizibilitate al acestuia, în baza setării „Afișați cu multe zile înainte de începerea cursului”. Dacă data de începere a cursului a trecut deja sau începe în numărul de zile specificat, acesta va fi vizibil. Dacă va apărea mai departe în viitor, va fi creat în stare ascunsă.
<li> Întotdeauna: cursurile vor fi întotdeauna create în stare ascunsă
</ul>';
$string['coursehiddennever'] = 'Niciodată';
$string['courseshorttitle'] = 'Numele scurt al cursului';
$string['courseshorttitlehelp'] = 'Acesta conține șablonul pentru crearea numelui scurt al cursului. Vedeți mai sus etichetele disponibile.';
$string['coursetitle'] = 'Numele complet al cursului';
$string['coursetitlehelp'] = 'Acesta conține șablonul pentru crearea numelui complet al cursului.
<p> Puteți dicta modul în care doriți ca numele complete și scurte ale cursului să fie formatate cu ajutorul următoarelor steaguri. Aapariția acestor steaguri în setare va fi înlocuită cu informațiile corespunzătoare despre curs. Textul, care nu este separat de un steag, va fi păstrat așa cum este.</p>
<p><ul>
<li>[SOURCEDID] - La fel ca [CRN].[TERM]<br />
<li>[CRN] - Numărul cursului/ secțiunii<br />
<li>[TERM] - Codul termenului<br />
<li>[TERMNAME] - Titlul complet al termenului<br />
<li>[LONG] - La fel ca [DEPT]-[NUM]-[SECTION]<br />
<li>[FULL] - Titlul complet al cursului<br />
<li>[RUBRIC] - La fel ca [DEPT]-[NUM]<br />
<li>[DEPT] - Codul scurt al departamentului<br />
<li>[NUM] - Codul departamentului pentru curs<br />
<li>[SECTION] - Numărul secțiunii cursului<br />
</ul></p>
<p>Exemplu: Setarea "[RUBRIC]-[CRN]-[FULL]" ar arăta așa "ENG-341-12345-English History" pentru un curs cu acea informație.</p>';
$string['createnewusers'] = 'Creați conturi de utilizator pentru utilizatorii care nu sunt încă înregistrați în Moodle';
$string['createnewusershelp'] = 'Această setare va permite modulului LMB să creeze noi utilizatori Moodle conform instrucțiunilor Banner/LMB.';
$string['createusersemaildomain'] = 'Creați numai utilizatori cu e-mail în acest domeniu';
$string['createusersemaildomainhelp'] = 'Dacă această setare are o valoare, numai utilizatorii care au o adresă de e-mail în domeniul dat vor avea un cont generat pentru ei de modulul LMB.';
$string['cron'] = 'Opțiuni Cron';
$string['cronunhidecourses'] = 'Afișează cursurile';
$string['cronunhidecourseshelp'] = 'Cu această opțiune selectată, în fiecare seară, în jurul miezului nopții, modulul va afișa automat cursurile Banner/LMB care încep în numărul de zile specificat în „Dezvăluie cu multe zile înainte de începerea cursului”. De exemplu, dacă această opțiune este selectată, „Afișați cu câteva zile înainte de începerea cursului” este setat la 7 și există un curs care începe în 14-06-2009, atunci el va fi vizibil automat în dimineața zilei de 07.06.2009. Data de începere a cursului este determinată de intervalul de timp->data de începere furnizată odată cu cursul de către Banner/LMB.';
$string['cronunhidedays'] = 'Afișează acest lucru cu atâtea zile înainte de începerea cursului';
$string['cronunhidedayshelp'] = 'Acesta este numărul de zile înainte de începerea unui curs, când urmează să fie afișat. Setați la 0, pentru ca cursul să se afișeze în ziua în care începe.';
$string['cronxmlfile'] = 'Verificați fișierul XML în timpul cron';
$string['cronxmlfilehelp'] = 'Dacă această opțiune este activată, modulul va verifica fișierul XML de fiecare dată când va fi apelat cron, pentru a vedea dacă data modificării sale s-a schimbat de la ultima procesare. Dacă așa e, atunci acesta va fi procesat.';
$string['cronxmlfolder'] = 'Verificați folderul XML în timpul cron';
$string['cronxmlfolderhelp'] = 'Dacă această opțiune este activată, modulul va încerca să proceseze folderul extract, de fiecare dată când este apelat cron.';
$string['customfield1help'] = 'Numele scurt al câmpului personalizat care trebuie mapat.';
$string['customfield1mapping'] = 'Câmp profil personalizat';
$string['customfield1source'] = 'Sursă de câmp profil personalizat';
$string['customfield1sourcehelp'] = 'Sursă pentru câmpul profilului de utilizator personalizat';
$string['defaultcity'] = 'Oraș';
$string['defaultcityhelp'] = 'Ce trebuie folosit ca oraș.
<ul>
<li>Utilizator XML "localitate": Folosiți valoarea furnizată de XML.
<li>Utilizare dată dacă "localitate" lipsă: utilizați valoarea furnizată de XML sau orașul dat, dacă nu este specificat.
<li>Utilizați întotdeauna orașul dat: utilizați întotdeauna orașul specificat.
</ul>';
$string['deleteusers'] = 'Ștergeți conturile de utilizator, când este specificat în XML';
$string['deleteusershelp'] = 'Dacă această setare a fost bifată, modulul LMB va șterge înregistrările utilizatorilor din Moodle, atunci când este indicat.';
$string['deptcat'] = 'Departamente';
$string['deptcodecat'] = 'Coduri departamentale';
$string['description'] = 'Acest modul oferă o modalitate de a integra Moodle cu Banner. Puteți utiliza Luminis Message Broker, pentru a furniza actualizări în timp real, în același mod ca WebCT, sau prin intermediul fișierelor de export Banner. <br /> <br /> Acest modul nu este afiliat sau aprobat de Ellucian în niciun fel.';
$string['disableenrol'] = 'Dezactivați Înscrierile';
$string['disableenrolhelp'] = 'Dezactivați înscrierile, în loc să le anulați. Previne posibilele pierderi de date în unele versiuni și configurații ale Moodle, atunci când se renunță la unii utilizatori și se re-adăugă la un curs.';
$string['disablesecurity'] = 'Dezactivați securitatea de autentificare la distanță';
$string['disablesecurityhelp'] = 'Când este bifată, autentificarea pe LMB va fi dezactivată. Aceasta creează o breșă de securitate, dar poate fi necesară pentru unele configurări de conexiune sau testare.';
$string['donterroremail'] = 'Eroare la utilizatorul omis din cauza e-mailului';
$string['donterroremailhelp'] = 'Dacă este selectat, un utilizator care nu are adresă de e-mail nu va produce o eroare de jurnal.';
$string['dropprecentlimit'] = 'Nu renunțați la mai mult de acest procent de înscrieri';
$string['dropprecentlimithelp'] = 'Când efectuați o procesare cuprinzătoare XML, înscrierile lipsă sunt tratate ca picături. Această setare va face ca modulul să omită procesul de renunțare dacă mai mult de acest procent din numărul total de înscrieri într-un termen este setat să fie abandonat';
$string['emailname'] = 'Adresa de e-mail (înainte de @)';
$string['endbiztime'] = 'Sfârșitul programului de lucru';
$string['endbiztimehelp'] = 'Acesta este momentul de încheiere pentru programul de lucru.';
$string['filterlist'] = 'Lista filtrelor';
$string['filterlisthelp'] = 'O listă delimitată de returnare (unul pe linie) de termeni care trebuie utilizați cu modul de filtrare de mai sus. Poate fi folosit în două moduri:
<ul>
<li> Simplu - pur și simplu plasați un cod de termen pe linie.
<li> Avansat - Fiecare linie poate conține expresii regulate PHP, ceea ce înseamnă că puteți selecta toți termenii 2015, utilizând <code> 2015. * </code>. Fiecare linie este acoperită intern cu <code> / ^ </code> și <code> $ / </code>.
</ul>';
$string['filtermode'] = 'Mod de filtrare';
$string['filtermodehelp'] = 'Filtrarea termenilor permite dezactivarea selectivă a procesării mesajelor de termen, curs și înscriere care petrec termeni filtrați. Această setare selectează în ce mod va rula termenul de filtrare
<ul>
<li> Dezactivat - nu va avea loc nicio filtrare.
<li> Listă albă - În modul listă albă, termenii care se potrivesc în lista Filtru sunt procesați în mod normal. Toți ceilalți termeni sunt eliminați (neprocesați).
<li> Listă neagră - în modul listă neagră, termenii care se potrivesc în lista Filtru sunt filtrate (nu sunt procesate). Toți ceilalți termeni sunt prelucrați în mod normal.
</ul>
Filtrarea unui termen, care se află deja în sistem, nu îl va elimina; vor fi omise doar cele noi actualizate din Banner. Dacă nu mai filtrați un termen, nu veți provoca intrarea în vigoare a mesajelor filtrate anterior - ar trebui să rulați un extras complet ori de câte ori „dezarhivați” un termen.';
$string['forceadr'] = 'Forțare adresă';
$string['forceadrhelp'] = 'Forțați întotdeauna adresa stradală a utilizatorului, astfel încât ea să se potrivească cu XML, chiar dacă a fost modificată manual.';
$string['forcecat'] = 'Categorie de forțare la actualizare';
$string['forcecathelp'] = 'Această opțiune va face ca, categoria să fie modificată la setarea de mai sus ori de câte ori apare o actualizare LMB/Banner, chiar dacă a fost modificată manual.';
$string['forcecity'] = 'Forțează orașul la actualizare';
$string['forcecityhelp'] = 'Forțați întotdeauna adresa/ orașul utilizatorului, astfel încât acestea să se potrivească cu XML, chiar dacă au fost modificate manual.';
$string['forcecomputesections'] = 'Forțați secțiunile de calcul';
$string['forcecomputesectionshelp'] = 'Secțiunea Forțată contează la actualizare, dar nu mai mult decât cea existentă, ea nu elimină niciodată secțiunile.';
$string['forceemail'] = 'Forțați adresa de e-mail la actualizare';
$string['forceemailhelp'] = 'Forțați întotdeauna adresa de e-mail a utilizatorului, astfel încât ea să se potrivească cu XML, chiar dacă a fost modificată manual.';
$string['forcename'] = 'Forțați numele la actualizare';
$string['forcenamehelp'] = 'Forțați întotdeauna numele utilizatorului, astfel încât el să se potrivească cu XML, chiar dacă a fost modificat manual.';
$string['forcepassword'] = 'Forțați parola la actualizare';
$string['forcepasswordhelp'] = 'Când aceasta este setată și când sunt setate un tip și o sursă de autentificare corespunzătoare, parola utilizatorului este setată la parola LMB, ori de câte ori este primit un mesaj. Dacă nu este bifată, parola va fi setată numai la crearea utilizatorului.';
$string['forceshorttitle'] = 'Forțați numele scurt al cursului la actualizare';
$string['forceshorttitlehelp'] = 'Dacă această opțiune este selectată, atunci când apare o actualizare a unui curs prin LMB/ Banner, numele scurt va fi setat, așa cum este descris în setările „Numele scurt al cursului”, chiar dacă numele scurt a fost modificat manual. Dacă opțiunea nu este setată, numele scurt va fi setat numai în timpul creării inițiale a cursului.';
$string['forcetele'] = 'Forțați numărul de telefon la actualizare';
$string['forcetelehelp'] = 'Forțați întotdeauna numărul de telefon al utilizatorului, astfel încât să se potrivească cu XML, chiar dacă a fost modificat manual.';
$string['forcetitle'] = 'Forțați numele cursului la actualizare';
$string['forcetitlehelp'] = 'Dacă această opțiune este selectată, atunci când apare o actualizare a unui curs prin LMB/ Banner, numele va fi setat, așa cum este descris în setările „Numele complet al cursului”, chiar dacă numele a fost modificat manual. Dacă opțiunea nu este setată, numele va fi setat numai în timpul creării inițiale a cursului.';
$string['fullemail'] = 'Adresa de e-mail completă';
$string['header'] = 'Folosiți Banner/ Luminis Message Broker Module versiunea {$a->version}. <br>
Instrumentele LMB s-au mutat în blocul de setări, sub Administrarea site-ului> Plugin-uri> Înscrieri> Banner / Luminis Message Broker> Instrumente </a>.';
$string['ignoredomaincase'] = 'Ignorați capitalizarea domeniului';
$string['ignoredomaincasehelp'] = 'Setați comparația domeniului, astfel încât să nu distingă majusculele și minusculele.';
$string['ignoreemailcase'] = 'Ignorați majuscula adreselor de e-mail';
$string['ignoreemailcasehelp'] = 'Toate adresele de e-mail vor fi convertite în minuscule, când va fi selectată această opțiune.';
$string['ignoreusernamecase'] = 'Convertiți numele de utilizator în minuscule';
$string['ignoreusernamecasehelp'] = 'Toate numele de utilizator vor fi convertite în minuscule, atunci când această opțiune este selectată. Moodle necesită, în general, nume de utilizator minuscule.';
$string['importnow'] = 'importați chiar acum';
$string['includeadr'] = 'Includeți adresa de stradă';
$string['includeadrhelp'] = 'Includeți adresa de utilizator a utilizatorului în profilul Moodle.';
$string['includecity'] = 'Includeți orașul';
$string['includecityhelp'] = 'Includeți orașul utilizatorului în profilul Moodle.';
$string['includetele'] = 'Includeți telefonul';
$string['includetelehelp'] = 'Includeți numărul de telefon al utilizatorului în profilul Moodle, dacă acesta este furnizat de XML.';
$string['livefilterlist'] = 'Lista de filtre de la distanță a gazdei';
$string['livefilterlisthelp'] = 'Lista de filtrare la distanță a gazdei este o listă delimitată de returnare (una pe linie) a mașinilor la distanță, pentru a permite sau a nu permite pe baza setării modului de filtrare a gazdei la distanță. <br>
Fiecare linie va fi unul dintre următoarele 3 formate:
<ul>
<li> Nume gazdă - <code> H: hostname.tld </code> - Aceasta se va potrivi cu numele gazdei pe care o rezolvă adresa de la distanță. Se pot utiliza valori ale expresiilor regulate. Fiecare linie este învelită intern cu <code> | ^ </code> și <code> $ | </code>. </li>
<li> Adresă IP - <code> I: 192.168.2.1 </code> - Aceasta se va potrivi cu adresa IP a aparatului la distanță. Se pot utiliza valori ale expresiilor regulate. Fiecare linie este învelită intern cu <code> | ^ </code> și <code> $ | </code>. </li>
<li> Nume gazdă - <code> S: 192.168.2.0/32 </code> - Aceasta va potrivi adresa IP de la distanță cu o mască de subrețea standard. Compatibil cu IPv4 și IPv6. Valorile expresiilor regulate <b> nu </b> pot fi utilizate. <br>
    3 tipuri compatibile:
    <ul>
        <li> xxx.xxx.xxx.xxx/nn sau xxxx: xxxx: xxxx: xxxx: xxxx: xxxx: xxxx / nnn - Format standard pentru masca de subrețea </li>
        <li> xxx.xxx.xxx.xxx-aaa sau xxxx: xxxx: xxxx: xxxx: xxxx: xxxx: xxxx :: xxxx-aaaa - O gamă de adrese IP din ultimul grup </li>
        <li> xxx.xxx sau xxx.xxx. sau xxx: xxx: xxxx sau xxx: xxx: xxxx. - Adresă IP parțială (potriviți-le pe toate care care încep cu partea furnizată) </li>
    </ul>
</li>
</ul>';
$string['livefiltermode'] = 'Modul de filtrare gazdă la distanță';
$string['livefiltermodehelp'] = 'Filtrarea gazdei la distanță permite blocarea selectivă a gazdelor la distanță care se conectează la interfața de import live.
<ul>
<li> Dezactivat - nu va avea loc nicio filtrare.
<li> Listă albă - În modul listă albă, gazdele la distanță care sunt potrivite în lista de filtre au permisiunea de a se conecta normal. Toate celelalte gazde sunt filtrate (blocate).
<li> Lista neagră - în modul listă neagră, gazdele la distanță care sunt potrivite în lista de filtrare sunt filtrate (blocate). Toate celelalte gazde au permisiunea de a se conecta normal.
</ul>';
$string['liveinfo'] = 'Adresa URL a importului live al acestui site se află la adresa {$a}';
$string['livesettings'] = 'Setări Live Import';
$string['lmb:enrol'] = 'Înscrieți utilizatorii';
$string['lmb:manage'] = 'Gestionați înscrierile utilizatorilor';
$string['lmb:unenrol'] = 'Anulați utilizatorii de la curs';
$string['lmb:unenrolself'] = 'Anulează propria înscriere la curs';
$string['lmbcheck'] = 'Notificare LMB Inactivitate';
$string['lmbcheckhelp'] = 'Când această casetă este bifată, se va executa o verificare în fiecare perioadă cron, pentru a vedea dacă Luminis Message Broker trimite mesaje către Moodle.';
$string['lmbnotificationemails'] = 'Adrese de e-mail de notificare';
$string['lmbnotificationemailshelp'] = 'O listă separată prin virgulă a tuturor adreselor de e-mail care ar trebui să primească mesaje de avertizare de la verificarea timpului LMB.';
$string['lmbpasswd'] = 'Parola de autentificare la distanță';
$string['lmbpasswdhelp'] = 'Aceasta este setarea parolei folosite, pentru a limita accesul la interfața LMB.';
$string['lmbusername'] = 'Nume utilizator de autentificare la distanță';
$string['lmbusernamehelp'] = 'Aceasta este setarea de nume de utilizator folosită pentru a limita accesul la interfața LMB. Aceasta, împreună cu parola, vor fi utilizate pentru verificarea autentificării HTTP. Ar trebui să corespundă setărilor din configurația Luminis Message Broker.';
$string['locality'] = 'XML utilizator "localitate"';
$string['logerrors'] = 'Numai erori de jurnal';
$string['logerrorshelp'] = 'Dacă această casetă este bifată, numai erorile vor fi înregistrate în fișierul jurnal. Dacă nu este bifată, toate evenimentele vor fi înregistrate.';
$string['logpercent'] = 'Jurnal% completat atunci când rulați procesele batch.';
$string['logsettings'] = 'Setări jurnal';
$string['logtolocation'] = 'Locația de ieșire a fișierului jurnal (necompletat pentru jurnalizare)';
$string['logtolocationhelp'] = 'Aceasta este locația în care doriți să fie salvat fișierul jurnal. Aceasta ar trebui să fie o cale absolută pe server. Fișierul specificat ar trebui să existe deja și trebuie să poată fi scris în procesul serverului web.';
$string['never'] = 'Niciodată';
$string['nickname'] = 'Folosiți porecla';
$string['nicknamehelp'] = 'Dacă porecla este inclusă XML, utilizați-o în locul prenumelui propriu-zis.';
$string['nomessage'] = 'Nu s-au primit mesaje de la Luminis Message Broker';
$string['nomessagefull'] = 'Moodle nu a primit un mesaj de la Luminis Message Broker în {$a}.';
$string['nonbizdowngrace'] = 'Trimiteți mesajul timp de grație în afara orelor de lucru';
$string['nonbizdowngracehelp'] = 'Câte minute pot trece de la ultimul mesaj LMB, înainte ca mesajele de avertizare să fie trimise în afara orelor de program. Setați la 0, pentru a dezactiva verificările în această perioadă.';
$string['none'] = 'Niciunul';
$string['off'] = 'Oprit';
$string['onerror'] = 'Numai la eroare';
$string['otherpassword'] = 'Altă sursă de parole';
$string['otherpasswordhelp'] = '';
$string['otheruserid'] = 'Altă sursă ID utilizator';
$string['otheruseridhelp'] = '';
$string['page_backfillenddates'] = 'Date de finalizare a cursului de completare';
$string['page_cleanxlsdrops'] = 'Curățați drops-urile XLS';
$string['page_extractprocess'] = 'Extras de proces';
$string['page_importnow'] = 'Fișier Proces';
$string['page_lmbstatus'] = 'Stare LMB';
$string['page_prunelmbtables'] = 'Curățare tabele';
$string['page_reprocessenrolments'] = 'Reprocesați înscrierile';
$string['parsecourse'] = 'XML Parse - Curs';
$string['parsecoursexml'] = 'Analiza cursului XML';
$string['parsecoursexmlhelp'] = 'Procesați înregistrările XML ale cursului. Când nu este bifat, înregistrările vor fi complet omise.';
$string['parseenrol'] = 'XML Parse - Înscriere';
$string['parseenrolxml'] = 'Analizați înscrierea XML';
$string['parseenrolxmlhelp'] = 'Procesați înregistrările de înscriere. Cursul de analiză și Persoana de analiză trebuie să fie activate. Când nu este bifat, înregistrările vor fi omise integral.';
$string['parseperson'] = 'XML Parse - Persoană';
$string['parsepersonxml'] = 'Analizați persoana XML';
$string['parsepersonxmlhelp'] = 'Procesați înregistrările XML ale persoanei. Când nu este bifat, înregistrările vor fi omise integral.';
$string['parsexls'] = 'XML Parse - Crosslisting';
$string['parsexlsxml'] = 'Analizați XML din lista de rețele';
$string['parsexlsxmlhelp'] = 'Când este bifat, va fi procesat Crosslist XML. Analiza XML a cursului trebuie să fie activată. Când nu este bifat, înregistrările vor fi omise integral.';
$string['passwordsource'] = 'Sursă parolă';
$string['passwordsourcehelp'] = 'Aceasta determină care va fi parola utilizatorilor creați
<ul>
<li> Niciuna: nu setați o parolă internă Moodle. Utilizați această opțiune, dacă utilizați o metodă de autorizare externă, cum ar fi LDAP.
<li> useridtype - ID de autentificare: utilizați valoarea furnizată în câmpul de parolă al etichetei de identificare a utilizatorului marcată cu „ID de autentificare”.
<li> useridtype - SCTID: utilizați valoarea furnizată în câmpul de parolă al etichetei de identificare a utilizatorului care este marcată cu "SCTID".
<li> useridtype - ID-ul de e-mail: utilizați valoarea furnizată în câmpul de parolă al etichetei de identificare a utilizatorului care este marcată cu "Email ID".
<li> useridtype - Altele: utilizați valoarea furnizată în câmpul de parolă al etichetei userid care este marcată, așa cum este indicat în caseta de text.
</ul>';
$string['performlmbcheck'] = 'Efectuați verificarea timpului de oprire LMB';
$string['pluginname'] = 'Banner/ Broker de mesaje Luminis';
$string['recordsctid'] = 'Înregistrați ID-ul SCT';
$string['recordsctidhelp'] = 'Înregistrați ID-ul SCT al utilizatorului în baza de date. Pentru utilizare cu schimb de note.';
$string['recovergrades'] = 'Recuperați notele vechi pentru utilizatorii reînscriși';
$string['recovergradeshelp'] = 'Dacă utilizatorii sunt reînscriși la un curs, încercați să recuperați vechile note. Acesta a fost comportamentul standard în Moodle 1.9.x și mai jos.';
$string['removelangs'] = '<b><font color=red>Notice:</font> Se pare că fișierele de limbă vechi Banner/ Luminis Message Broker sunt încă instalate. Vă rugăm să eliminați fișierul "$a/enrol_lmb.php" și dosarul "$a/help/enrol/lmb".</b>';
$string['selectedcat'] = 'Selectat:';
$string['sourdidfallback'] = 'Înapoi la sourcedid dacă numele de utilizator nu a fost găsit';
$string['sourdidfallbackhelp'] = 'Setați user-ul la persoanele provenite din identificare, dacă nu este găsit un nume de utilizator. În general, utilizatorii nu vor cunoaște acest număr; deci, nu se vor putea autentifica, dar vor crea contul ca un substituent până la primirea unor date mai complete.';
$string['standardcity'] = 'Oraș standard';
$string['standardcityhelp'] = '';
$string['startbiztime'] = 'Începutul programului de lucru';
$string['startbiztimehelp'] = 'Acesta este momentul de început pentru ceea ce considerați a fi "ore de lucru (de vârf)" (de luni până vineri). Acest lucru vă permite să setați diferite alocări de timp înainte ca LMB să fie considerat scăzut, în funcție de ora din zi.';
$string['storexml'] = 'Stocați XML brut de la LMB în tabel';
$string['storexmlhelp'] = 'Acest lucru dictează când mesajele XML de la Luminis Message Broker sunt stocate în tabelul enrol_lmb_raw_xml. Acest lucru permite o depanare mai mare, dar principalele XML conțin date sensibile care nu ar trebui stocate. Opțiuni:
<ul>
<li> Niciodată: XML nu va fi stocat niciodată.
<li> La eroare: XML va fi stocat, numai dacă există o eroare la procesarea acestuia.
<li> Întotdeauna: XML va fi stocat întotdeauna.
</ul>';
$string['termcat'] = 'Termeni';
$string['termdeptcat'] = 'Termeni, apoi Departamente';
$string['termdeptcodecat'] = 'Termeni, apoi Coduri departamentale';
$string['termfilter'] = 'Filtrarea termenilor';
$string['tools'] = 'Instrumente';
$string['unenrolmember'] = 'Anulați înscrierea membrilor la curs, când vi se recomandă';
$string['unenrolmemberhelp'] = 'Anulați  (sau "delistați") membrii de la un curs, atunci când este primit un mesaj XML adecvat.';
$string['usemoodlecoursesettings'] = 'Utilizați setările implicite ale cursului Moodle';
$string['usemoodlecoursesettingshelp'] = 'Când creați un curs nou, utilizați opțiunile implicite de setare a cursului care se regăsesc în setările de administrare Moodle, în loc să utilizați setările codificate în acest modul.';
$string['userestrictdates'] = 'Utilizați datele restricționate';
$string['userestrictdateshelp'] = 'Dacă este specificat în înscriere, setați datele de început și de sfârșit ale înscrierii în Moodle.';
$string['useridtypeemail'] = 'useridtype - Email ID';
$string['useridtypelogin'] = 'useridtype - Login ID';
$string['useridtypeother'] = 'useridtype - Other:';
$string['useridtypesctid'] = 'useridtype - SCTID';
$string['usernamesource'] = 'Sursa numelui de utilizator';
$string['usernamesourcehelp'] = 'Aceasta determină care va fi numele de utilizator al utilizatorilor creați
<ul>
<li> Adresă de e-mail completă: întreaga adresă de e-mail este utilizată ca nume de utilizator.
<li> Nume de e-mail (înainte de @): utilizați porțiunea adresei de e-mail înainte de @.
<li> useridtype - ID de autentificare: utilizați valoarea furnizată în eticheta de identificare a utilizatorului, care este marcată cu „ID de autentificare”.
<li> useridtype - SCTID: utilizați valoarea furnizată în eticheta userid care este marcată cu „SCTID”.
<li> useridtype - ID de e-mail: utilizați valoarea furnizată în eticheta de identificare a utilizatorului care este marcată cu „ID-ul de e-mail”.
<li> useridtype - Altele: utilizați valoarea furnizată în eticheta userid care este marcată, așa cum este indicat în caseta de text.
</ul>';
$string['usestandardcity'] = 'Folosiți întotdeauna orașul dat:';
$string['usestandardcityxml'] = 'Folosiți date, dacă lipsește "localitate":';
$string['usestatusfiles'] = 'Utilizați fișiere de stare pentru folderul XML';
$string['usestatusfileshelp'] = 'Această opțiune creează fișiere în folderul XML, pentru a indica starea curentă a procesării. Acest lucru permite scripturilor externe să fie la curent cu starea curentă, astfel încât acestea să nu modifice conținutul directorului dintr-un extras de procesare în prezent. </p>
<p> Dacă această opțiune este bifată, folderul XML Banner trebuie să poată fi scris de serverul web. Pentru a permite începerea unui extras, trebuie plasat un fișier gol, care poate fi scris în folderul XML numit "start". Când procesul de extragere începe, scriptul elimină acel fișier și creează un fișier numit „procesare”. După finalizarea procesării, fișierul „procesare” va fi eliminat și va fi creat un fișier „terminat”. </p>';
$string['whitelist'] = 'Listă albă';
$string['xlsmergecourse'] = 'Curs combinat';
$string['xlsmergegroups'] = 'Plasați utilizatorii în cursuri combinate în grupuri';
$string['xlsmergegroupshelp'] = 'Dacă această opțiune este selectată, utilizatorii vor fi plasați în grupuri cu un curs combinat pe baza numărului lor original de curs.';
$string['xlsmetacourse'] = 'Meta curs';
$string['xlsshorttitle'] = 'Numele scurt al cursului încrucișat';
$string['xlsshorttitledivider'] = 'Divizorul de nume scurt';
$string['xlsshorttitledividerhelp'] = 'Acesta este șirul care va fi plasat între fiecare șir de membri definit în "Repetitor de nume scurt". Pentru detalii, consultați descrierea completă a divizorului Crosslist.';
$string['xlsshorttitlehelp'] = 'Acesta conține șablonul pentru crearea numelui scurt al cursului în cazul cursurilor încrucișate. Consultați descrierea completă a titlului Crosslist pentru detalii.';
$string['xlsshorttitlerepeat'] = 'Repetator de nume scurt';
$string['xlsshorttitlerepeathelp'] = 'Acesta conține șablonul pentru secțiunea [REPETĂ] a numelui scurt al cursului și va fi repetat pentru fiecare curs membru din lista încrucișată. Consultați descrierea completă a repetorului Crosslist pentru detalii.';
$string['xlstitle'] = 'Numele complet al cursului încrucișat';
$string['xlstitledivider'] = 'Divizorul de nume complet';
$string['xlstitledividerhelp'] = 'Acesta este șirul care va fi plasat între fiecare șir membru definit în "Repetor de nume complet".
<p>"divizor de nume" este plasat între fiecare "repetor de nume"/</p>
<p> "divizor de nume" nu trebuie să conțină nicio semnalizare înlocuitoare.</p>
<p>Exemplu: Spuneți că aveți două cursuri, 12345.200710 și 54321.200710, și sunt încrucișate cu codul de listă încrucișată XLSAA200710. Dacă stabiliți "Numele complet al cursului încrucișat" la "[XLSID] - [REPEAT]", "Repetatorul de nume complet" la "[CRN]", și "Divizorul de nume complet" la " / ", titlul complet rezultat al cursului încrucișat ar fi "XLSAA200710 - 12345 / 54321".</p>';
$string['xlstitlehelp'] = 'Acesta conține șablonul pentru crearea numelui complet al cursului în cazul cursurilor încrucișate.
<p> Șablonul de nume încrucișat funcționează în același mod, ca și setarea "Numele complet al cursului", cu câteva diferențe, așa cum este subliniat aici.</p>
<p>Șablonul de nume încrucișat poate conține aceleași steaguri ca și "Numele complet al cursului<?php helpbutton("titlulcursului", "Mai multe detalii despre această opțiune", "enrol-lmb"); ?>". Dacă oricare dintre aceste steaguri este prezent, ele vor fi înlocuite cu datele corespunzătoare din primul curs, pentru a se alătura listei încrucișate</p>
<p>În plus față de steagurile standard, se adaugă 2 steaguri noi:
<ul>
<li>[XLSID] - Identificatorul banner-ului pentru lista încrucișată<br />
<li>[REPEAT] - Semnalizatorul va fi înlocuit de șirul generat cu setările "nume repetator" și "divizor de nume".<br />
</ul></p>
<p>Exemplu: Să spunem că aveți două cursuri, 12345.200710 și 54321.200710, și sunt încrucișate cu codul de listă încrucișată XLSAA200710. Dacă stabiliți "Numele complet al cursului încrucișat" la "[XLSID] - [REPEAT]", "Repetatorul de nume complet" la "[CRN]", și "Divizorul de nume complet" la " / ", titlul complet rezultat al cursului încrucișat ar fi "XLSAA200710 - 12345 / 54321.</p>';
$string['xlstitlerepeat'] = 'Repetator de nume complet';
$string['xlstitlerepeathelp'] = 'Acesta conține șablonul pentru secțiunea [REPETĂ] a numelui complet al cursului și va fi repetat pentru fiecare curs membru din lista încrucișată.
<p>Valoarea "repetator de nume" funcționează la fel ca setarea "Numele complet al cursului", cu excepția faptului că se va repeta pentru fiecare curs membru din lista de crosslist și "name divider" va fi plasat între repetări ulterioare.</p>
<p>Repetatoarele de nume pot conține aceleași stegulețe ca "Numele complet al cursului<?php helpbutton("titlulcursului", "Mai multe detalii despre această opțiune", "enrol/lmb"); ?>".</p>
<p>În plus față de steagurile standard, se adaugă 1 steaguri noi:
<ul>
<li>[XLSID] - Identificatorul banner-ului pentru lista încrucișată<br />
</ul></p>
<p>Example: Să spunem că aveți două cursuri, 12345.200710 și 54321.200710, și sunt încrucișate cu codul listei încrucișate XLSAA200710. Dacă setați "Numele complet al cursului încrucișat" la "[XLSID] - [REPEAT]", "Repetatorul de nume complet" la "[CRN]", și "Divizorul de nume complet" la " / ", titlul complet rezultat al cursului încrucișat ar fi "XLSAA200710 - 12345 / 54321".</p>';
$string['xlstype'] = 'Tipul cursului încrucișat';
$string['xlstypehelp'] = 'Acesta determină modul în care vor fi tratate cursurile încrucișate în Moodle. Opțiuni:
<ul>
<li> Curs combinat: această setare va face ca, cursurile separate din lista încrucișată să fie lăsate goale, fără înscrieri. Toți membrii vor fi înscriși direct la cursul încrucișat.
<li> Meta curs: această setare va determina membrii să fie înscriși la cursurile individuale, în timp ce cursul crosslisted este format prin realizarea unui meta-curs care conține toate cursurile individuale.
</ul>';
