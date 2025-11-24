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
 * Strings for component 'enrol_classicpay', language 'ro', version '4.5'.
 *
 * @package     enrol_classicpay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin:page:legal'] = '<p>Classic Pay și Classic Pay Plus au fost dezvoltate de Sebsoft.</p>
<p>Cu toate acestea, Sebsoft poate <i>not</i>, fi tras la răspundere în orice mod sau poate fi ținut responsabil pentru procesarea tranzacțiilor prin intermediul acestui sistem.<br/>
Toate cererile de răspundere vor fi respinse a priori.</p>
<p>În calitate de comerciant (sau de proprietar al site-ului) veți fi obligat să plătiți Pay.nl printr-un contract (legal) în scopul obținerii fondurilor colectate (adică plățile efectuate).<br/>
Plata va fi asigurată de „Stichting Derdengelden Pay.nl”, persoana juridică responsabilă de gestionarea fondurilor dvs..<br/>
Sebsoft vă va trimite o factură pentru toate tranzacțiile efectuate și/ sau facturile generate (aplicabile pentru ClassicPay Plus).</p>';
$string['api:notconfigured'] = 'Nu ați configurat încă tokenul PAYNL Merchant.<br/>
Va rugăm să vă configurați setările, petru a include un tokenPAYNL Merchant sau <a href="{$a}">aplicați aici</a>';
$string['apply:addsignee'] = 'Adăugați un semnatar';
$string['apply:addsignee_help'] = 'Dacă doriți să adăugați un semnatar, completați utmăroarele câmpuri.';
$string['apply:alreadyconfigured'] = 'Ați configurat deja tokenul PAYNL Merchant.';
$string['apply:authorizedtosign'] = 'Autorizat să semneze';
$string['apply:authorizedtosign:no'] = 'Nu';
$string['apply:authorizedtosign:shared'] = 'Autorizat ditribuit să semneze';
$string['apply:authorizedtosign:yes'] = 'Autorizat să semneze independent';
$string['apply:authorizedtosign_help'] = 'Indică faptul că sunteți autorizat să semnați. Dacă semnatarul nu este cunoscut, mențineți opțiunea NU';
$string['apply:bankaccountnumber'] = 'Număr de cont bancar (IBAN)';
$string['apply:bankaccountnumber_help'] = 'Număr de cont bancar. Acesta trebuie să fie un cont IBAN pentru Europa.';
$string['apply:bankaccountowner'] = 'Titular de cont bancar';
$string['apply:bankaccountowner_help'] = 'Numele titularului contului bancar';
$string['apply:bankcity'] = 'Localitate bancă';
$string['apply:bankcity_help'] = 'Numele localității în care se află banca dumneavoastră.';
$string['apply:bankdocument'] = 'Copia soldului contului bancar';
$string['apply:bankdocument_help'] = 'Copia celui mai recent sold al contului dumneavostră bancar. Acest document este necesar în vederea validării.<br/>
Se permite ca toate detaliile privind plata să nu poată fi citite, atât timp cât detaliile contului sunt vizibile.';
$string['apply:bankname'] = 'Nume bancă';
$string['apply:bankname_help'] = 'NUmele băncii dumneavoastră, de exemplu, Rabobank, ING, ...';
$string['apply:bic'] = 'BIC/ Swift';
$string['apply:bic_help'] = 'Codul BIC sau SWIFT';
$string['apply:button:addsignee'] = 'Adăugați {no} semnatarul(semnatarii) pe formular';
$string['apply:city'] = 'Localitate';
$string['apply:city_help'] = 'Localitatea în care se află organizația';
$string['apply:cocdocument'] = 'Extras COC';
$string['apply:cocdocument_help'] = 'Extras din înregistrarea la Registrul Comerțului. Acest document este necesar în vederea validării.';
$string['apply:cocnumber'] = 'Numărul COC';
$string['apply:cocnumber_help'] = 'Numărul de înregistrare la Registrul Comerțului';
$string['apply:companyname'] = 'Nume organizație';
$string['apply:companyname_help'] = 'Numele organizației dumneavoastră';
$string['apply:countrycode'] = 'Cod țară';
$string['apply:countrycode_help'] = 'Țara în care se află organizația';
$string['apply:cpp:error'] = 'Eroare la comutarea Classic Pay plus: {$a}';
$string['apply:cpp:fail'] = 'Comutare Classic Pay plus nereușită';
$string['apply:cpp:success'] = 'Comutare Classic Pay plus reușită';
$string['apply:email'] = 'Adresă e-mail';
$string['apply:email_help'] = 'Adresă e-mail. Acest lucru este necesar pentru ca PAYNL să poată lua legătura cu dumneavoastră cu privire la cererea dumneavoastră.';
$string['apply:fail'] = '<div><p>Înregistrare nereușită:</p><p>{$a->errcode}: {$a->error}</p><p>{$a->info}</p></div>';
$string['apply:firstname'] = 'Prenume';
$string['apply:firstname_help'] = 'Prenumele dumneavoastră';
$string['apply:gender'] = 'Sex';
$string['apply:gender:female'] = 'Feminin';
$string['apply:gender:male'] = 'Masculin';
$string['apply:gender_help'] = 'Sexul dumneavoastră';
$string['apply:header:details'] = 'Informații privind înregistrarea';
$string['apply:header:paymentprofiles'] = 'Metode de plată aplicabile pentru cerere';
$string['apply:header:signees'] = 'Opțional, semnatari suplimentari pentru cerere';
$string['apply:housenumber'] = 'Numărul casei';
$string['apply:housenumber_help'] = 'Numărul casei organizației';
$string['apply:iddocument'] = 'Document de identificare';
$string['apply:iddocument_help'] = 'Copia recentă a ID-ului (pașaport sau card ID) sau copia permisului de conducere.';
$string['apply:information'] = '<div class="enrol-classicpay-info"><strong>Informații importante privind cererea.</strong><br/>
Vă rugăm să citiți cu atenție instrucțiunile, înainte de a aplica.<br/>
<ul>
<li>Asigurați-vă că ați completat acest formular în cunoștință de cauză și cu onestitate.</li>
<li>Verificați din nou formularul, înainte de a-l transmite.</li>
<li>Rețineți că <b>all</b> documentele sunt, de fapt, necesare pentru cererea dumneavoastră.</li>
<li>Încărcarea tuturor documentelor necesare va urgenta solicitarea dumneavoastră.</li>
<li>Solicitarea dumneavoastră nu va fi sistată, dacă nu încărcați documentele necesare.<br/>
Veți putea începe imediat, cu condiția ca solicitarea dumneavoastră să fie reușită<br/>
Cu toate acestea, vom lua legătura cu dumneavoastră cu privire la documentele necesare, pe care va trebui să le furnizați.<br/>
Nefurnizarea acestor documente sau orice alt tip de abuz pot avea drept consecință suspendarea contului dumneavoastră.</li>
<li>Abuzul va fi raportat autorităților și poate duce la dezactivarea sau anularea contului dumneavoastră, fie de către noi, fie de către furnizorul de servicii de plată.</li>
<li>Falsificarea documentelor solicitate va duce la raportarea dumneavoastră către autorități, fie de către noi, fie de către furnizorul de servicii de plată.</li>
<li><b><i>Dacă nu au fost aprobate toate documentele, fondurile dumneavoastră nu vor fi eliberate de către furnizorul de servicii de plată.</i></b></li>
</ul></div>';
$string['apply:invoiceinterval_help'] = 'Cât de des doriți ca facturile să fie procesate?';
$string['apply:languageid'] = 'Limbă ID';
$string['apply:languageid_help'] = 'Limba preferată pentru contul dumneavoastră';
$string['apply:lastname'] = 'Nume';
$string['apply:lastname_help'] = 'Numele dumneavostră';
$string['apply:nav'] = 'Solicitare PAYNL Merchant.';
$string['apply:page:heading'] = 'Aplicați pentru un token PAYNL Merchant.';
$string['apply:paymentprofile'] = 'Metodă(e) de plată';
$string['apply:phone'] = 'Număr de telefon';
$string['apply:phone2'] = 'Număr de telefon alternativ';
$string['apply:phone2_help'] = 'Număr de telefonr secundar. Dacă nu este necesar, puteți lăsa acest spațiu gol';
$string['apply:phone_help'] = 'Numărul de telefon la care puteți fi contactat. Vom încerca să vă contactăm, dacă vor apărea probleme cu privire la solicitare';
$string['apply:sendemail_help'] = 'Indică dacă doriți să primiți un e-mail de înregistrare și care este tipul acestuia.';
$string['apply:settlebalance_help'] = '??';
$string['apply:sitename'] = 'Nume site';
$string['apply:sitename_help'] = 'Nume site. Acesta este necesar pentru înregistrarea programului.';
$string['apply:siteurl'] = 'Adresa URL a site-ului';
$string['apply:siteurl_help'] = 'Adresa URL a site-ului. Acesta este necesar pentru înregistrarea programului.';
$string['apply:street'] = 'Stradă';
$string['apply:street_help'] = 'Adresa organizației';
$string['apply:submit'] = 'Aplică';
$string['apply:success'] = '<div><p>Înregistrarea a fost primită și procesată cu succes</p><p>{$a->info}</p>';
$string['apply:ubo'] = 'UBO';
$string['apply:ubo_help'] = 'UBO';
$string['apply:usecompanyauth_help'] = 'Utilizați autentificarea organizației?';
$string['apply:vatnumber'] = 'Cont TVA';
$string['apply:vatnumber_help'] = 'Codul de înregistrare în scopuri de TVA al organizației';
$string['apply:zipcode'] = 'Cod poștal';
$string['apply:zipcode_help'] = 'Codul poștal al organizației';
$string['assignrole'] = 'Alocă rol';
$string['button:cppo:update'] = 'Actualizează metodele de plată';
$string['button:pay'] = 'Plătește';
$string['checkcode'] = 'Verificați codul cuponului';
$string['classicpay:config'] = 'Configurați classicpay';
$string['classicpay:createcoupon'] = 'Creează cupoane';
$string['classicpay:deletecoupon'] = 'Șterge cupoane';
$string['classicpay:editcoupon'] = 'Editează cupoane';
$string['classicpay:manage'] = 'Gestionează classicpay';
$string['classicpay:plus:description'] = '<div class="enrol-classicpay-info">Când solicitați un cont Classicpay Plus, această acțiune presupune aplicarea pentru crearea/ solicitarea facturilor.<br/>
Acest lucru presupune câteva costuri suplimentare, dar avantajul său este că, atât dumneavoastră, cât și utilizatorul final veți primi automat o factură de la serviciul nostru după achiziționarea unui curs.<br/>
Activând Classicpay Plus, sunteți în mod automat de acord să vi se factureze 10 cenți pentru fiecare tranzacție, pe lângă celelalte costuri ale tranzacțiilor.<br/>
Noi le vom factura periodic. Veți primi o factură pentru numărul de facturi generate.<br/>
Prima generare a unei facturi este cea mai importantă. Nu este neapărat ca numărul de tranzacții dintr-o anumită perioadă să fie același cu numărul de facturi generate.</div>';
$string['classicpay:plus:status:error'] = 'Eroare la verificarea contului classicpay plus: {$a}';
$string['classicpay:plus:status:invalid'] = 'Nu dețineți un cont classicpay plus';
$string['classicpay:plus:status:valid'] = 'Dețineți un cont classicpay plus';
$string['classicpay:unenrol'] = 'Retrage utilizatori';
$string['classicpay:unenrolself'] = 'Retrageți-vă';
$string['cost'] = 'Costuri înscriere';
$string['coupon:delete'] = 'Șterge cuponul';
$string['coupon:delete:warn'] = '<p>Urmează să ștergeți un cupon cu următoarele detalii.</p>
<p>Curs: <i>{$a->course}</i><br/>Cod cupon: <i>{$a->code}</i><br/>Validity: <i>{$a->validfrom} - {$a->validto}</i></p>
<p>Sunteți sigur că doriți acest lucru?</p>';
$string['coupon:deleted'] = 'Cuponul a fost șters cu succes';
$string['coupon:details'] = 'Detalii cupon';
$string['coupon:edit'] = 'Editează cuponul existent';
$string['coupon:expired'] = 'Codul cuponului a expirat';
$string['coupon:invalid'] = 'Codul cuponului nu este valid';
$string['coupon:invoice'] = 'Solicitați din nou factura';
$string['coupon:new'] = 'Adaugă un cupon nou';
$string['coupon:newprice'] = 'Discount: {$a->percentage}<br/>Discount: {$a->currency} {$a->discount}<br/>Preț nou: <b>{$a->currency} {$a->newprice}</b>';
$string['coupon:saved'] = 'Cuponul a fost inserat cu succes';
$string['coupon:status:active'] = 'ACTIV';
$string['coupon:status:expired'] = 'EXPIRAT';
$string['coupon:status:impending'] = 'IMINENT';
$string['coupon:status:maxused'] = 'MAXIM UTILIZĂRI';
$string['coupon:updated'] = 'Datele cuponului au fost actualizate cu succes';
$string['couponcode'] = 'Cod cupon';
$string['couponcodeexists'] = 'Codul cuponului există deja';
$string['couponcodemissing'] = 'Codul cuponului trebuie setat';
$string['coupons:backtooverview'] = 'Înapoi la lista cupoanelor';
$string['coupontype'] = 'Tip';
$string['coupontype:percentage'] = 'Procent';
$string['coupontype:value'] = 'Valoare';
$string['cp:apply'] = 'Solicitare distribuitor';
$string['cp:coupons'] = 'Gestionează cupoanele';
$string['cp:legal'] = 'Informații privind răspunderea';
$string['cp:paynlconnection'] = 'Informații serviciu Classicpay';
$string['cp:subscriptions'] = 'Înscrieri';
$string['cp:transactions'] = 'Tranzacții';
$string['cppapply:disable'] = 'Dezactivează Classicpay Plus';
$string['cppapply:enable'] = 'Activează Classicpay Plus';
$string['cppapply:header'] = 'Status cont Classicpay Plus';
$string['cppoapply:header:paymentprofiles'] = 'Ați configurat metodele de plată';
$string['cppoapply:paymentprofiles:setting'] = '<div class="enrol-classicpay-info"><span style="color:red">*&nbsp;</span>Pentru următoarele metode de plată este necesară furnizarea informațiilor suplimentare privind contul.<br/>
La selectarea acestora, veți primi un e-mail de confirmare prin care veți fi informat că vom lua legătura cu dumneavoastră pentru detalii.<br/></div>';
$string['cppoapply:paymentprofiles:simple'] = '<div class="enrol-classicpay-info">Metode disponibile gratuit.<br/>
Aceste metode pot fi activate sau dezactivate fără a fi necesare alte detalii.</div>';
$string['currency'] = 'Monedă';
$string['defaultrole'] = 'Alocarea implicită a rolului';
$string['defaultrole_desc'] = 'Selectați poziția care trebuie alocată utilizatorilor pe parcursul înscrierilor la ClassicPay';
$string['enablecoupon'] = 'Activați cupoanele?';
$string['enablecoupon_help'] = 'Bifați această opțiune, pentru a activa introducerea implicită a cupoanelor pe ecranul de plată.
O puteți activa sau dezactiva la nivelul fiecărei sesiuni de înscriere.';
$string['enabled'] = 'Activată';
$string['enabled_desc'] = 'Status-ul gateway-ului, dacă acesta poate fi tilizat, pentru a genera o tranzacție';
$string['enrol:already'] = 'Ați fost deja înscris la curs: {$a->fullname}';
$string['enrol:fail'] = 'Ați fost înscris la acest curs.';
$string['enrol:fail:tx'] = 'Status-ul tranzacției dumneavoastră este: {$a->statusname}.';
$string['enrol:ok'] = 'Vă mulțumim.<br> Ați fost înscris acum la curs: {$a->fullname}';
$string['enrolenddate'] = 'Data de finalizare';
$string['enrolenddate_help'] = 'Dacă este activată, utilizatorii se pot înscrie numai până la acea dată.';
$string['enrolenddaterror'] = 'Data de finalizare a înscrierii nu poate fi înaintea datei de începere';
$string['enrolperiod'] = 'Durata înscrierii';
$string['enrolperiod_desc'] = 'Intervalul implicit de timp în care înscrierea este validă. Dacă este setat la zero, durata înscrierii va fi implicit nelimitată.';
$string['enrolperiod_help'] = 'Intervalul implicit de timp în care înscrierea este validă, începând cu momentul în care utilizatorul este înscris. Dacă este dezactivat, intervalul înscrierii va fi implicit nelimitat.';
$string['enrolstartdate'] = 'Data de începere';
$string['enrolstartdate_help'] = 'Dacă este activată, utilizatorii pot fi înscriși numai începând cu acea dată.';
$string['entiresite'] = 'Întregul site/ orice curs';
$string['err:getserviceprofiles'] = 'Eroare la încărcarea opțiunilor de plată: {$a->error}';
$string['err:percentage-exceed'] = 'Procentul de discount nu poate depăși 100%';
$string['err:percentage-negative'] = 'Procentul de discount nu poate fi negativ';
$string['err:setserviceprofiles'] = 'Eroare la actualizarea opțiunilor de plată: {$a->error}';
$string['err:value-negative'] = 'Discountul nu poate fi negativ';
$string['event:payment:complete'] = 'Plata Classicpay a fost finalizată';
$string['event:payment:started'] = 'Plata Classicpay a început';
$string['expiredaction'] = 'Acțiunea de expirare a înscrierii';
$string['expiredaction_help'] = 'Selectați acțiunea care trebuie întreprinsă atunci când expiră înscrierea utilizatorului. Vă rugăm să observați că unele date și setări ale utilizatorului sunt șterse pe durata retragerii de la curs.';
$string['expirymessageenrolledbody'] = 'Stimate {$a->user},

Aceasta este o notificare că înscrierea dumneavoastră la cursul \'{$a->course}\' urmează să expire pe data de {$a->timeend}.

Vă rugăm să contactați {$a->enroller}, pentru a beneficia de asistență.';
$string['expirymessageenrolledsubject'] = 'Notificare de expirarea a înscrierii';
$string['expirymessageenrollerbody'] = 'Înscrierea la cursul ul\'{$a->course}\' va expira în următoarele {$a->threshold} pentru următorii utilizatori:

{$a->users}

Pentru a extinde înscrierea acestora, mergeți la {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificare privind expirarea înscrierii';
$string['gettokentime'] = 'Timp pe telecomandaAPI: {$a}';
$string['invoice:requested'] = 'Solicitarea dumneavoastră de procesare a facturii a fost procesată cu succes';
$string['mailadmins'] = 'Notifică administratorul';
$string['mailstudents'] = 'Notifică studenții';
$string['mailteachers'] = 'Notifică formatorii';
$string['maximum'] = 'Maxim';
$string['maxusage'] = 'Utilizare maximă';
$string['maxusage_help'] = 'Numărul maxim permis de utilizări ale acestui cupon.<br/>
Dacă introduceți  0, aceasta însemnă utilizări nelimitate.';
$string['minimum'] = 'Minim';
$string['name'] = 'Nume';
$string['nocost'] = 'Nu există un cost asociat înscrierii la acest curs!';
$string['page:title:spapply'] = 'Aplică pentru PAYNL Merchant';
$string['paylogin'] = 'Conectare la PAYNL';
$string['payment:cancelled'] = 'Ați anulat plata dumneavoastră pentru curs: {$a->fullname}';
$string['paynlapitoken'] = 'Token PAYNL API';
$string['paynlapitoken_desc'] = 'Token-ul este necesar pentru comunicarea cu PAYNL API';
$string['paynlconn:remote:error'] = 'Eroare la apelarea PAY API: {$a}';
$string['paynlmerchantid'] = 'ID distribuitor PAYNL';
$string['paynlmerchantid_desc'] = 'ID-ul distribuitorului este necesar, pentru a-l identifica pe PAYNL API';
$string['paynlserviceid'] = 'ID serviciu PAYNL';
$string['paynlserviceid_desc'] = 'ID-ul serviciului este necesar, pentru a-l identifica pe PAYNL API';
$string['paynlsettings'] = 'Setările contului distribuitorului PAYNL';
$string['paynlsettings_apply'] = '<a href="">Aplică pentru PAYNL</a>';
$string['paynlsettings_desc'] = 'Mai jos va trebui să stabiliți setările distribuitorului PAYNL, care vă vor permite să inițializați și să utilizați plățile.';
$string['percentage'] = 'Procent';
$string['percentagemissing'] = 'Trebuie menționat procentul';
$string['pluginname'] = 'ClassicPay';
$string['pluginname_desc'] = 'Acest plugin vă permite să achiziționați un curs prin gateway-ul PAYNL';
$string['privacy:metadata:enrol_classicpay'] = 'Plugin-ul de înscrieri Classicpay memorează datele utilizatorilor privind tranzacțiile/ înscrierile';
$string['privacy:metadata:enrol_classicpay:cost'] = 'Cuantumul plății, după aplicarea tuturor reducerilor.';
$string['privacy:metadata:enrol_classicpay:courseid'] = 'Cheia primară a bazei de date a cursului(cursurilor) la care este înscris utilizatorul.';
$string['privacy:metadata:enrol_classicpay:discount'] = 'Discountul reprezintă un număr absolut aplicat la plată.';
$string['privacy:metadata:enrol_classicpay:gateway'] = 'Gateway-ul utilizat pentru plată. Fie PayNL, fie Moodle dacă înscrierea a fost gratuită.';
$string['privacy:metadata:enrol_classicpay:gateway_transaction_id'] = 'Numărul întreg utilizat pentru plata prin gateway-ul Pay.';
$string['privacy:metadata:enrol_classicpay:hasinvoice'] = 'Cheia primară a bazei de date folosită pentru a verifica dacă există o factură pentru această plată, panoul clientului Sebsoft deține factura reală.';
$string['privacy:metadata:enrol_classicpay:instanceid'] = 'Cheia primară a bazei de date a sesiunii de înscriere.';
$string['privacy:metadata:enrol_classicpay:orderid'] = 'Cod unic de identificare pentru ordinul de plată.';
$string['privacy:metadata:enrol_classicpay:percentage'] = 'Dacă a fost utilizat un cupon cu o reducere bazată pe procent, acesta arată procentul aplicat.';
$string['privacy:metadata:enrol_classicpay:rawcost'] = 'Cuantumul plății înaintea aplicării vreunei reduceri.';
$string['privacy:metadata:enrol_classicpay:status'] = 'Număr întreg  utilizat intern pentru a verifica starea plății.';
$string['privacy:metadata:enrol_classicpay:statusname'] = 'Status plată care corespunde cu status întreg.';
$string['privacy:metadata:enrol_classicpay:timecreated'] = 'Momentul la care a fost inițializată plata.';
$string['privacy:metadata:enrol_classicpay:timemodified'] = 'Momentul la care a fost modificată plata.';
$string['privacy:metadata:enrol_classicpay:userid'] = 'Cheia primară a utilizatorului Moodle.';
$string['promo'] = 'Plugin-ul de înscriere ClassicPay pentru Moodle';
$string['promodesc'] = 'Acest plugin este realizat de Sebsoft Managed Hosting & Software Development
(<a href=\'http://www.sebsoft.nl/\' target=\'_new\'>http://sebsoft.nl</a>).<br /><br />
{$a}<br /><br />';
$string['purchase'] = 'Achiziționează curs';
$string['registrationcancelled'] = 'Înregistrarea a fost anulată. Veți fi redirecționat către pagina de pornire.';
$string['setserviceprofiles:success'] = 'Opțiuni de plată actualizate cu succes:<br/>{$a}';
$string['settings'] = 'Setări';
$string['status'] = 'Permite înscrieri ClassicPay';
$string['status_desc'] = 'Permite utilizatorilor să folosească ClassicPay, pentru a se înscrie implicit la curs.';
$string['task:process_pending_orders'] = 'Sincronizează statusul comenzii de plată în așteptare, în cazul în care au fost ratate solicitările de modificare';
$string['task:request_invoices'] = 'Sincronizați lanțul de solicitare a facturilor';
$string['task:sync_cpplus'] = 'Sincronizați dacă avem sau nu un cont classicpay PLUS';
$string['th:action'] = 'Acțiune(i)';
$string['th:code'] = 'Cod';
$string['th:cost'] = 'Cost';
$string['th:courseid'] = 'Curs';
$string['th:discount'] = 'Discount';
$string['th:maxusage'] = 'Utilizare maximă';
$string['th:numused'] = '#Utilizare';
$string['th:paymentcreated'] = 'Tranzacția a fost inițiată';
$string['th:paymentmodified'] = 'Ultima actualizare';
$string['th:percentage'] = 'Procent';
$string['th:rawcost'] = 'Tarif curs';
$string['th:status'] = 'Status';
$string['th:txid'] = 'ID tranzacție';
$string['th:type'] = 'Tip';
$string['th:user'] = 'Utilizator';
$string['th:validfrom'] = 'Valabil de la';
$string['th:validto'] = 'Valabil până la';
$string['th:value'] = 'Valoare';
$string['title:cancelpage'] = 'Plată anulată';
$string['title:couponedit'] = 'ClassicPay - Editează cupon';
$string['title:couponmanager'] = 'Gestionarea cupoanelor';
$string['title:couponmanager:delete'] = 'Manager cupon - eliminare';
$string['title:couponmanager:details'] = 'Detalii manager cupon';
$string['title:couponmanager:edit'] = 'Manager cupon - editare';
$string['title:enrolments'] = 'Classicpay - înscrieri';
$string['title:legal'] = 'Classicpay - informații privind răspunderea';
$string['title:returnpage'] = 'Status plată';
$string['title:service'] = 'Classicpay - informații cont';
$string['title:transactions'] = 'ClassicPay - Tranzacții';
$string['validfrom'] = 'Valabil de la';
$string['validfromhigherthanvalidto'] = 'Valabilitatea datelor este cuprinsă în intervalul';
$string['validfrommissing'] = 'Trebuie setată data de începere a valabilității';
$string['validto'] = 'Valabil până la';
$string['validtomissing'] = 'Trebuie setată data de sfărșit a valabilității';
$string['value'] = 'Valoare';
$string['valuemissing'] = 'Trebuie menționată o valoare';
$string['vat'] = 'TVA';
$string['vat_help'] = 'Procent TVA din costul cursului (observație: costul cursului include TVA).';
$string['warn:servicepage'] = '<div class="enrol-classicpay-warn">Fiecare acțiune pe care o efectuați pe această pagină va fi replicată pe serviciul nostru classicpay .<br/>
Înainte de a începe, asigurați-vă că ați citit cu atenție și ați înțeles comentariile.</div>';
