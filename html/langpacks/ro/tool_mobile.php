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
 * Strings for component 'tool_mobile', language 'ro', version '4.5'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'Depanarea ADOdb este activată. Ar trebui să fie dezactivat în setările pluginului de autentificare a bazei de date externe sau înscrierea bazei de date externe.';
$string['androidappid'] = 'Identificatorul unic al aplicației Android';
$string['androidappid_desc'] = 'Această setare poate fi lăsată ca implicită, cu excepția cazului în care aveți o aplicație Android personalizată.';
$string['apppolicy'] = 'Adresa URL a politicii aplicației';
$string['apppolicy_help'] = 'Adresa URL a unei politici pentru utilizatorii aplicației, care este listată în pagina Despre din aplicație. Dacă câmpul este lăsat gol, va fi utilizată în schimb adresa URL a politicii site-ului.';
$string['apprequired'] = 'Această funcționalitate este disponibilă numai atunci când este accesată prin intermediul aplicației mobile sau desktop Moodle.';
$string['autologinkeygenerationlockout'] = 'Generarea cheilor de autentificare automată este blocată. Trebuie să așteptați {$a} minute între cereri.';
$string['autologinmintimebetweenreq'] = 'Durata minimă de timp între solicitările de autentificare automată';
$string['autologinmintimebetweenreq_desc'] = 'Timpul minim dintre solicitările de conectare automată din aplicația mobilă. Dacă utilizatorilor aplicației li se cere frecvent să-și introducă datele de acces atunci când vizualizează conținut încorporat de pe site, atunci setați o valoare mai mică.';
$string['autologinnotallowedtoadmins'] = 'Autentificarea automată nu este permisă pentru administratorii site-ului.';
$string['autologout'] = 'Fortează înhiderea sesiunii de către utilizatori';
$string['autologout_desc'] = 'Din motive de securitate, puteți impune deconectarea automată pentru utilizatori atunci când părăsesc sau închid aplicația sau aceasta trece în fundal. Utilizatorii vor trebui să se conecteze din nou când revin la aplicație.';
$string['autologoutcustom'] = 'Timp personalizat după ce utilizatorii părăsesc sau închid aplicația';
$string['autologoutinmediate'] = 'Imediat după ce utilizatorii părăsesc sau închid aplicația';
$string['autologouttime'] = 'Temporizator de deconectare automată';
$string['cachedef_plugininfo'] = 'Aceasta stochează lista de pluginuri cu suplimente mobile';
$string['cachedef_subscriptiondata'] = 'Aceasta stochează informații legate de abonamentul aplicației de Moodle.';
$string['clickheretolaunchtheapp'] = 'Faceți clic aici dacă aplicația nu se deschide automat.';
$string['configmobilecssurl'] = 'Un fișier CSS pentru a customiza interfața app a mobilului dumneavoastră.';
$string['customlangstrings'] = 'Șiruri de limbă personalizate';
$string['customlangstrings_desc'] = 'Cuvintele și expresiile afișate în aplicație pot fi personalizate aici. Introduceți fiecare șir de limbă personalizat pe o nouă linie cu format: identificator de șir, șir de limbă personalizat și cod de limbă, separate prin caractere de țeavă. De exemplu:
<pre>
mm.user.student | Learner | en
mm.user.student | Aprendiz | es
</pre>
Pentru o listă completă a identificatorilor de șiruri, consultați documentația.';
$string['custommenuitems'] = 'Elemente de meniu personalizat';
$string['custommenuitems_desc'] = 'Elementele suplimentare pot fi adăugate la meniul principal al aplicației, specificându-le aici. Introduceți fiecare element de meniu personalizat pe un nou rând cu format: textul articolului, adresa URL a link-ului, metoda de deschidere a linkului și codul limbii (opțional, pentru afișarea articolului numai pentru utilizatorii limbii specificate), separați prin caractere.

Metodele de deschidere a linkurilor sunt: aplicație (pentru conectarea la o activitate acceptată de aplicație), inappbrowser (pentru deschiderea unui link într-un browser fără a părăsi aplicația), browser (pentru deschiderea linkului în browserul implicit al dispozitivului în afara aplicației) și încorporat (pentru afișarea linkului într-un iframe într-o pagină nouă în aplicație).

Atunci când articolelor le lipsește o traducere pentru o anumită limbă, acestea vor folosi alte limbi ca alternativă, cu excepția cazului în care codul de limbă este adăugat „_only”.

De exemplu:
<pre>
Ajutor pentru aplicație | https: //someurl.xyz/help | inappbrowser
Notele mele | https: //someurl.xyz/local/mygrades/index.php | embedded | en
Mis calificări | https: //someurl.xyz/local/mygrades/index.php | embedded | es
Veți vedea acest lucru numai în engleză | https: //someurl.xyz/english | browser | en_only
</pre>';
$string['darkmode'] = 'Mod întunecat';
$string['disabledfeatures'] = 'Funcții dezactivate';
$string['disabledfeatures_desc'] = 'Selectați aici caracteristicile pe care doriți să le dezactivați în aplicația mobilă pentru site-ul dvs. Vă rugăm să rețineți că unele funcții enumerate aici ar putea fi deja dezactivate prin alte setări ale site-ului. Va trebui să vă deconectați și să vă conectați din nou în aplicație pentru a vedea modificările.';
$string['displayerrorswarning'] = 'Afișarea mesajelor de depanare (debugdisplay) este activată. Ar trebui să fie dezactivat.';
$string['downloadcourse'] = 'Descărcați cursul';
$string['downloadcourses'] = 'Descărcați cursuri';
$string['enablesmartappbanners'] = 'Activați banner de Moodle App';
$string['enablesmartappbanners_desc'] = 'Dacă este activat, un banner care promovează aplicația mobilă va fi afișat la accesarea site-ului folosind un browser mobil.';
$string['filetypeexclusionlist'] = 'Lista de excludere a tipului de fișier';
$string['filetypeexclusionlist_desc'] = 'Selectați toate tipurile de fișiere care nu sunt utilizate pe un dispozitiv mobil. Astfel de fișiere vor fi listate în curs, apoi, dacă un utilizator încearcă să le deschidă, va fi afișat un avertisment care vă informează că tipul de fișier nu este destinat utilizării pe un dispozitiv mobil. Utilizatorul poate apoi anula sau ignora avertismentul și poate deschide fișierul oricum.';
$string['filetypeexclusionlistplaceholder'] = 'Lista de excludere a tipului de fișier mobil';
$string['forcedurlscheme'] = 'Dacă doriți să permiteți deschiderea numai a aplicației dvs. personalizate Moodle printr-o fereastră a browserului, atunci specificați schema URL a acesteia aici. Dacă doriți să permiteți doar aplicația oficială Moodle, atunci setați valoarea implicită. Lăsați câmpul gol dacă doriți să permiteți orice aplicație.';
$string['forcedurlscheme_key'] = 'URL schemă';
$string['forcelogout'] = 'Deconectare forțată';
$string['forcelogout_desc'] = 'Dacă este activată această opțiune, utilizatorii vor fi întotdeauna complet deconectați chiar și atunci când schimbă conturile. Ei trebuie apoi să-și reinsereze parola data viitoare când doresc să acceseze site-ul.';
$string['getmoodleonyourmobile'] = 'Obțineți aplicația mobilă';
$string['h5poffline'] = 'Vizualizați conținutul H5P offline';
$string['httpsrequired'] = 'Este necesar HTTPS';
$string['insecurealgorithmwarning'] = 'Se pare că certificatul HTTPS folosește un algoritm nesigur pentru semnare (SHA-1). Vă rugăm să încercați să actualizați certificatul.';
$string['invalidcertificatechainwarning'] = 'Se pare că lanțul de certificate nu este valid. Acest certificat poate funcționa pentru un browser dar nu și pentru o aplicație mobilă.';
$string['invalidcertificateexpiredatewarning'] = 'Se pare că certificatul HTTPS pentru site a expirat.';
$string['invalidcertificatestartdatewarning'] = 'Se pare că certificatul HTTPS pentru site nu este încă valid (cu o dată de început în viitor).';
$string['invalidprivatetoken'] = 'Jetonul privat nu este valid. Jetonul nu trebuie să fie gol sau să fie transmis prin intermediul parametrului GET.';
$string['invaliduserquotawarning'] = 'Cota de utilizator (spațiul de date) este setată la un număr care nu este valid. Ar trebui să fie setat la un număr valid (o valoare întreagă) în setările de securitate ale site-ului.';
$string['iosappid'] = 'Identificatorul unic al aplicației iOS';
$string['iosappid_desc'] = 'Această setare poate fi lăsată ca implicită, cu excepția cazului în care aveți o aplicație iOS personalizată.';
$string['launchviasiteinbrowser'] = 'Lansează site-ul prin intermediul browser-ului';
$string['loginintheapp'] = 'Prin intermediul aplicației';
$string['logininthebrowser'] = 'Prin fereastra browserului (pentru pluginuri SSO)';
$string['loginintheembeddedbrowser'] = 'Prin intermediul unui browser încorporat (pentru plugin-uri SSO)';
$string['logoutconfirmation'] = 'Sigur doriți să vă deconectați de la aplicația mobilă de pe dispozitivele dvs. mobile? Deconectându-vă, va trebui apoi să vă reintroduceți numele de utilizator și parola în aplicația mobilă de pe toate dispozitivele pe care aveți aplicația instalată.';
$string['mainmenu'] = 'Meniu principal';
$string['managefiletypes'] = 'Gestionați tipurile de fișiere';
$string['minimumversion'] = 'Dacă este specificată o versiune a aplicației (3.8.0 sau o versiune ulterioară), oricăror utilizatori care utilizează o versiune mai veche a aplicației li se va solicita să își actualizeze aplicația înainte de a li se permite accesul la site.';
$string['minimumversion_key'] = 'Este necesară versiunea minimă a aplicației';
$string['mobileapp'] = 'Aplicație mobilă';
$string['mobileappearance'] = 'Aspect mobil';
$string['mobileappenabled'] = 'Acest site are activat accesul la aplicația mobilă. <br /> <a href="{$a}"> Descărcați aplicația mobilă </a>.';
$string['mobileappsubscription'] = 'Abonament aplicație de mobil.';
$string['mobileauthentication'] = 'Autentificare mobilă';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Funcții mobile';
$string['mobilenotificationsdisabledwarning'] = 'Notificările mobile nu sunt activate. Acestea ar trebui activate în setările de notificare.';
$string['mobilesettings'] = 'Setări aplicație de mobil';
$string['moodleappsportalfeatureswarning'] = 'Rețineți că unele funcții pot fi restricționate în funcție de abonamentul la aplicația Moodle. Pentru detalii, accesați <a href="{$a}" target="_blank"> Portalul de aplicații Moodle </a>.';
$string['notifications'] = 'Notificări';
$string['notificationsactivedevices'] = 'Dispozitive active';
$string['notificationscurrentactivedevices'] = 'Dispozitive care primesc notificări luna aceasta';
$string['notificationsignorednotifications'] = 'Notificările nu au fost trimise';
$string['notificationslimitreached'] = 'Limita lunară de dispozitive active pentru utilizatori a fost depășită. Notificările pentru unii utilizatori nu vor fi trimise. Este recomandat să vă actualizați planul de aplicație în <a href="{$a}" target="_blank"> Portalul de aplicații Moodle </a>.';
$string['notificationsmissingwarning'] = 'Statisticile privind notificările aplicației Moodle nu au putut fi recuperate. Acest lucru este cel mai probabil deoarece notificările mobile nu sunt încă activate pe site. Le puteți activa în Administrare site / Mesagerie / Mobil.';
$string['notificationsnewdevices'] = 'Dispozitive noi';
$string['notificationsseemore'] = 'Notă: statisticile de utilizare a aplicației Moodle nu sunt calculate în timp real. Pentru a accesa statistici mai detaliate, inclusiv date din lunile precedente, vă rugăm să vă conectați la <a href="{$a}" target="_blank"> Portalul de aplicații Moodle </a>.';
$string['notificationssentnotifications'] = 'Notificări trimise';
$string['oauth2identityproviders'] = 'Furnizorii de identitate OAuth 2';
$string['offlineuse'] = 'Utilizare offline';
$string['pluginname'] = 'Instrumente pentru aplicații Moodle';
$string['pluginnotenabledorconfigured'] = 'Plugin-ul nu este activat sau configurat.';
$string['privacy:metadata:core_userkey'] = 'Cheile utilizatorului utilizate pentru a crea cheia de autentificare automată pentru utilizatorul curent.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Data ultimei cereri de chei de autentificare automată. Între fiecare solicitare sunt necesare 6 minute.';
$string['qrcodedisabled'] = 'Accesul prin cod QR este dezactivat';
$string['qrcodeformobileappaccess'] = 'Cod QR de acces la aplicația mobilă';
$string['qrcodeformobileapploginabout'] = 'Scanați codul QR cu aplicația mobilă și veți fi autentificat automat. Codul QR va expira în {$a}.';
$string['qrcodeformobileappurlabout'] = 'Scanați codul QR cu aplicația dvs. mobilă pentru a completa adresa URL a site-ului în aplicația dvs.';
$string['qrcodetype'] = 'Acces cod QR';
$string['qrcodetype_desc'] = 'Un cod QR poate fi furnizat pentru ca utilizatorii de aplicații mobile să îl poată scana. Acesta poate fi utilizat pentru a completa adresa URL a site-ului sau în cazul în care site-ul este securizat utilizând HTTPS, pentru a conecta automat utilizatorul fără a fi nevoie să introduceți numele de utilizator și parola.';
$string['qrcodetypelogin'] = 'Cod QR cu autentificare automată';
$string['qrcodetypeurl'] = 'Cod QR cu adresa URL a site-ului';
$string['qrkeyttl'] = 'Durata cheii de autentificare QR';
$string['qrkeyttl_desc'] = 'Perioada de timp pentru care este valabil un cod QR pentru autentificare.';
$string['qrsameipcheck'] = 'Autentificare QR cu același IP';
$string['qrsameipcheck_desc'] = 'Dacă utilizatorii trebuie să utilizeze aceeași rețea atât pentru generarea, cât și pentru scanarea unui cod QR pentru autentificare. Dezactivează-l numai dacă utilizatorii raportează probleme cu autentificarea QR.';
$string['qrsiteadminsnotallowed'] = 'Din motive de securitate, conectarea prin cod QR nu este permisă pentru administratorii site-ului sau dacă sunteți conectat ca alt utilizator.';
$string['readingthisemailgettheapp'] = 'Citești acest mesaj într-un e-mail? <a href="{$a}">Descarcă aplicația mobilă și primește notificări pe dispozitivul tău mobil</a>.';
$string['remoteaddons'] = 'Suplimente la distanță';
$string['responsivemainmenuitems'] = 'Elemente de meniu Responsive';
$string['scanqrcode'] = 'Scanează codul QR';
$string['selfsignedoruntrustedcertificatewarning'] = 'Se pare că certificatul HTTPS este autosemnat sau nu este de încredere. Aplicația mobilă va funcționa numai cu site-uri de încredere. Vă rugăm să utilizați orice verificator SSL online pentru a diagnostica problema. Dacă acesta indică faptul că certificatul dvs. este OK, puteți ignora acest avertisment.';
$string['setuplink'] = 'Pagina de descărcare a aplicației';
$string['setuplink_desc'] = 'Adresa URL a paginii cu opțiuni de descărcare a aplicației mobile din App Store și Google Play. Link-ul de descărcare a aplicației este afișat în subsolul paginii și în profilul unui utilizator. Lăsați necompletat pentru a nu afișa un link.';
$string['smartappbanners'] = 'Bannere de aplicații';
$string['subscription'] = 'Abonament';
$string['subscriptioncreated'] = 'Data de început';
$string['subscriptionerrorrequest'] = 'A apărut o eroare neașteptată la încercarea de a recupera informațiile de abonament pentru aplicația Moodle.';
$string['subscriptionexpiration'] = 'Data expirării';
$string['subscriptionfeaturenotapplied'] = 'Această funcție este configurată pe site-ul dvs., dar nu este inclusă în planul aplicației Moodle. Astfel, setarea nu va avea niciun efect.';
$string['subscriptionfeatures'] = 'Funcții de abonament';
$string['subscriptionlimitsurpassed'] = 'Limita de abonament a fost depășită';
$string['subscriptionregister'] = 'Pentru detalii despre diversele planuri de aplicații și pentru a accesa statisticile de utilizare a aplicației Moodle, accesați <a href="{$a}" target="_blank"> Portalul de aplicații Moodle </a>.';
$string['subscriptionsseemore'] = 'Notă: Informațiile afișate nu sunt actualizate în timp real. Poate fi necesar să vă deconectați și să vă conectați din nou pentru a vedea actualizările. Pentru informații despre actualizarea planului de aplicație, conectați-vă la <a href="{$a}" target="_blank"> Portalul de aplicații Moodle </a>.';
$string['switchaccount'] = 'Schimbă contul';
$string['typeoflogin'] = 'Tipul de autentificare';
$string['typeoflogin_desc'] = 'Dacă site-ul folosește o metodă de autentificare SSO, atunci selectați printr-o fereastră de browser sau printr-un browser încorporat. Un browser încorporat oferă o experiență de utilizare mai bună, deși nu funcționează cu toate pluginurile SSO.';
$string['viewqrcode'] = 'Vizualizați codul QR';
