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
 * Strings for component 'report_security', language 'ro', version '4.5'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_antivirus_details'] = 'Această status verifică dacă a existat sau nu o eroare recentă detectată pe baza pragului setat în setările principale antivirus.';
$string['check_antivirus_error'] = '{$a->errors} au fost găsite în ultima {$a->lookback}';
$string['check_antivirus_info'] = 'În prezent nu este activ niciun scanner antivirus.';
$string['check_antivirus_logstore_not_supported'] = 'Nu se poate verifica starea scanerelor antivirus din cauza tipului de depozit de jurnal alese';
$string['check_antivirus_name'] = 'Antivirus';
$string['check_antivirus_ok'] = '{$a->scanners} scanner(e) antivirusactivat(e), nu au fost detectate probleme în ultima {$a->lookback}';
$string['check_configrw_details'] = '<p> Este recomandat ca permisiunile de fișier ale <code> config.php </code> să fie modificate după instalare, astfel încât fișierul să nu poată fi modificat de serverul web.
Vă rugăm să rețineți că această măsură nu îmbunătățește semnificativ securitatea serverului, deși poate încetini sau limita exploatările generale. </p>';
$string['check_configrw_name'] = 'Writable config.php';
$string['check_configrw_ok'] = 'config.php nu poate fi modificat de scripturi PHP.';
$string['check_configrw_warning'] = 'Scripturile PHP nu pot modifica  config.php.';
$string['check_cookiesecure_details'] = '<p> Dacă comunicarea https este activată, este recomandat să activați trimiterea de cookie-uri securizate. Ar trebui să aveți o redirecționare permanentă de la http la https și să serviți în mod ideal și anteturile HSTS. </p>';
$string['check_cookiesecure_error'] = 'Vă rugăm activaţi funcţionalitatea secure cookies.';
$string['check_cookiesecure_http'] = 'Trebuie să activați https pentru a utiliza cookie-uri securizate';
$string['check_cookiesecure_name'] = 'Secure cookies';
$string['check_cookiesecure_ok'] = 'Secure cookies activat.';
$string['check_crawlers_details'] = '<p>Setarea "Open to Google" permite motoarelor de căutare să acceseze cursurile în calitate de utilizatori vizitatori. Dacă nu aţi activat funcţionalitatea de logare ca utilizator vizitator nu are sens să activaţi această setare.</p>';
$string['check_crawlers_error'] = 'Accesul motoarelor de căutare este activat dar nu este activat accesul ca utilizator vizitator';
$string['check_crawlers_info'] = 'Motoarele de căutare pot accesa situl ca utilizator vizitator';
$string['check_crawlers_name'] = 'Deschis pentru motoare de căutare';
$string['check_crawlers_ok'] = 'Accesul motorului de căutare nu este activat.';
$string['check_defaultuserrole_details'] = '<p>Tuturor utilizatorilor conectați li se oferă capabilități ale rolului de utilizator implicit. Asigurați-vă că nu sunt permise capabilități cu risc acestui rol.</p>
<p>Singurul tip de rol vechi acceptat pentru rolul implicit de utilizator este <em>Utilizator autentificat</em>. Capabilitatea de vizualizare a cursului nu trebuie să fie activată.</p>
<p>Vă rugăm să verificați dacă opțiunea de aprobare a cererii de ștergere automată a datelor (tool_dataprivacy | automaticdatadeletionapproval) este activată. Utilizatorii pot solicita ștergeri de date care ar putea șterge cantități mari de date.</p>';
$string['check_defaultuserrole_error'] = 'Rolul implicit "{$a}" a fost incorect definit!';
$string['check_defaultuserrole_name'] = 'Rol implicit pentru toţi utilizatorii';
$string['check_defaultuserrole_notset'] = 'Rolul implicit nu a fost setat.';
$string['check_defaultuserrole_ok'] = 'Rolul implicit pentru toţi utilizatorii a fost definit corect.';
$string['check_dirindex_info'] = 'Indexul directorului nu ar trebui să fie activat';
$string['check_displayerrors_details'] = '<p>Nu se recomandă activarea parametrului PHP <code>display_errors</code> pe situri de producţie deoarece mesajele de eroare pot să conţină informaţii confidenţiale despre serverul dumneavoastră.</p>';
$string['check_displayerrors_error'] = 'Setarea PHP de afişare a erorilor este activată. Se recomandă dezactivarea acestei setări.';
$string['check_displayerrors_name'] = 'Afişare erori PHP';
$string['check_displayerrors_ok'] = 'Afişare erori PHP a fost dezactivat.';
$string['check_dotfiles_info'] = 'Toate dotfiles cu excepția /.well-known/*, nu ar trebui să fie publice.';
$string['check_emailchangeconfirmation_details'] = '<p>Se recomandă folosirea unui câmp de confirmare a parolei atunci când utilizatorii doresc modificare adresei de email completate în profil. Dacă această setare nu este activată, spammerii ar putea încerca să folosească serverul la trimiterea de spam.</p>
<p>Câmpul de email ar putea de asemenea să fie blocat pentru pluginurile de autentificare, dar această posibilitate nu este luată în calcul în acest moment.</p>';
$string['check_emailchangeconfirmation_error'] = 'Utilizatorii pot să completeze orice adresă de email.';
$string['check_emailchangeconfirmation_info'] = 'Utilizatorii pot furniza adrese de email doar din domeniile permise.';
$string['check_emailchangeconfirmation_name'] = 'Confirmare schimbare email';
$string['check_emailchangeconfirmation_ok'] = 'Confirmare la schimbarea adresei de email din profil.';
$string['check_embed_details'] = '<p>Posibilitatea "Unlimited object embedding" este foarte periculoasă - orice utilizator înregistrat poate să lanseze un atac de tip XSS împotriva celorlalţi utilizatori ai serverului. Această setare ar trebui dezactivată pe serverele de producţie.</p>';
$string['check_embed_error'] = 'Setarea "unlimited object embedding" este activată - această setare este foarte periculoasă pentru majoritatea serverelor.';
$string['check_embed_name'] = 'Permiteți EMBED ȘI OBJECT';
$string['check_embed_ok'] = 'Setarea "Unlimited object embedding" nu este permisă';
$string['check_frontpagerole_details'] = '<p>Rolul implicit acordat tuturor utilizatorilor autentificați pentru activitățile din Prima pagină. Asigurați-vă că nu sunt permise capacități riscante pentru acest rol.</p>
<p>Este recomandat să fie creat un rol special în acest scop și să nu fie utilizat un rol de tip moștenit.</p>';
$string['check_frontpagerole_error'] = 'A fost detectat rolul principal al site-ului definit incorect „{$a}”!';
$string['check_frontpagerole_name'] = 'Rol prima pagină';
$string['check_frontpagerole_notset'] = 'Rolul pentru prima pagină nu a fost definit.';
$string['check_frontpagerole_ok'] = 'Setarea rolului pentru prima pagină este corectă.';
$string['check_guestrole_details'] = '<p>Rolul de utilizator vizitator este folosit pentru vizitatorii ocazionali ai sitului, pentru utilizatorii care nu se loghează şi pentru a permite accesul temporar la cursuri pentru anumiţi utilizatori vizitatori. Vă rugăm să vă asiguraţi că pentru acest rol nu este activată permisiunea de a realiza operaţiuni riscante.</p>
<p>Singurul tip de rol moştenire acceptat pentru rolul de utilizator vizitator este <em>Vizitator</em>.</p>';
$string['check_guestrole_error'] = 'Rolul de utilizator vizitator  "{$a}" a fost incorect definit!';
$string['check_guestrole_name'] = 'Utilizator vizitator';
$string['check_guestrole_notset'] = 'Rolul de utilizator vizitator nu a fost setat';
$string['check_guestrole_ok'] = 'Rolul de utilizator vizitator a fost corect definit.';
$string['check_nodemodules_details'] = '<p> Directorul <code> {$a->path} </code> conține module Node.js și dependențele acestora, de obicei instalate de utilitarul NPM. Aceste module pot fi necesare pentru dezvoltarea locală a Moodle, cum ar fi pentru utilizarea cadrului Grunt. Nu sunt necesare pentru a rula un site Moodle în producție și pot conține cod potențial periculos, expunând site-ul dvs. la atacuri de la distanță. </p> <p> Este recomandat să eliminați directorul dacă site-ul este disponibil printr-un URL public, sau cel puțin interzice accesul web la acesta în configurația serverului dvs. web. </p>';
$string['check_nodemodules_info'] = 'Directorul node_modules nu ar trebui să fie prezent pe site-urile publice.';
$string['check_nodemodules_name'] = 'Directorul modulelor Node.js';
$string['check_openprofiles_details'] = 'Profilurile de utilizator deschise pot fi abuzate de către spammeri. Se recomandă ca fie <code> Forțați utilizatorii să se conecteze la profiluri </code>, fie <code> Forțați utilizatorii să se conecteze </code> sunt activate.';
$string['check_openprofiles_error'] = 'Oricine poate să vadă profilul utilizatorilor fără să se logheze.';
$string['check_openprofiles_name'] = 'Profile utilizatori publice';
$string['check_openprofiles_ok'] = 'Pentru vizualizarea profilului unui utilizator este necesară logarea pe sit.';
$string['check_passwordpolicy_details'] = '<p> Se recomandă setarea unei politici de parolă, deoarece ghicirea parolei este de cele mai multe ori cel mai simplu mod de a obține acces neautorizat.
Totuși, nu faceți cerințele prea stricte, deoarece acest lucru poate duce la faptul că utilizatorii nu își pot aminti parolele și fie le uită, fie le notează. </p>';
$string['check_passwordpolicy_error'] = 'Politica de parole nu a fost setată.';
$string['check_passwordpolicy_name'] = 'Politica de parole';
$string['check_passwordpolicy_ok'] = 'Politica de parole activată.';
$string['check_preventexecpath_details'] = '<p>Permiterea căilor executabile să fie setate prin GUI de administrare este un vector pentru escaladarea privilegiilor. Acest lucru trebuie forțat în config.php:</p><p><code>$CFG->preventexecpath = true;</code></p>';
$string['check_preventexecpath_name'] = 'Căi executabile';
$string['check_preventexecpath_ok'] = 'Căile executabile pot fi configurate doar în config.php.';
$string['check_preventexecpath_warning'] = 'Căile executabile pot fi setate în Admin GUI.';
$string['check_publicpaths_403'] = '(A returnat 403, ideal ar trebui să fie 404)';
$string['check_publicpaths_generic'] = 'fișierele {$a} nu ar trebui să fie publice';
$string['check_publicpaths_name'] = 'Verificați toate căile publice / private';
$string['check_publicpaths_ok'] = 'Toate căile interne nu sunt public accesibile';
$string['check_publicpaths_warning'] = 'Unele căi interne sunt public accesibile';
$string['check_riskadmin_detailsok'] = '<p>Vă rugăm verificaţi următoarea listă cu utilizatori administratori:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Vă rugăm verificaţi următoarea listă cu utilizatori administratori::</p>{$a->admins}
<p>Se recomandă atribuirea rolului de administrator exclusiv pentru contextul de sistem. Următorii utilizatori deţin roluri de administratori (nepermise) în alte contexte:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Administratori';
$string['check_riskadmin_ok'] = 'Au fost identificaţi {$a} utilizatori cu rolul de administrator server';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) verificaţi atribuirea rolurilor</a>';
$string['check_riskadmin_warning'] = 'S-au găsit alocări pentru {$a->admincount} administratori de server și {$a->unsupcount} administrator neacceptate.';
$string['check_riskbackup_details_overriddenroles'] = '<p> Aceste suprascrieri active oferă utilizatorilor posibilitatea de a include datele utilizatorului în copiile de rezervă. Vă rugăm să vă asigurați că această permisiune este necesară. </p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Următoarele roluri de administrator de sistem permit utilizatorilor să includă datele utilizatorilor în operaţiunea de realizare a cópiilor de siguranţă. Asiguraţi-vă că această permisiune este necesară.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>Datorită permisiunilor din cadrul rolurilor de mai sus sau a permisiunilor la nivel local, următoarele conturi de utilizator au permisiunea să includă informaţii confidenţiale despre utilizatorii înscrişi la cursuri în procesul de realizare a cópiilor de siguranţă. Asiguraţi-vă că acestea sunt conturi (a) ale unor persoane de încredere (b) protejate cu parole greu de ghicit:</p> {$a}';
$string['check_riskbackup_detailsok'] = 'Niciun rol nu permite în mod explicit includerea datelor confidenţiale ale utilizatorilor în procesul de realizare a cópiilor de siguranţă. Totuşi, utilizatorii administratori care au activată permisiunea de a realiza orice operaţiune pot face acest lucru.';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} in {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Includere a datelor despre utilizatori în procesul de realizare a cópiilor de siguranţă';
$string['check_riskbackup_ok'] = 'Niciun rol nu permite în mod explicit includerea datelor despre utilizatori în procesul de realizare a cópiilor de siguranţă';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) in {$a->contextname}</a>';
$string['check_riskbackup_warning'] = 'S-au găsit {$a->rolecount} roluri, {$a->overridecount} suprascrieri și {$a->usercount} utilizatori cu posibilitatea de a copia datele utilizatorului.';
$string['check_riskxss_details'] = '<p>RISK_XSS sunt permisiuni pentru realizarea tuturor operaţiunilor considerate riscante şi care se acordă doar persoanelor de încredere.</p>
<p>Vă rugăm verificaţi această listă cu utilizatori şi asiguraţi-vă că sunt persoane de încredere înainte de a le permite accesul la server:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'Utilizatori de încredere pentru XSS';
$string['check_riskxss_warning'] = 'RISK_XSS - au fost identificaţi {$a} utilizatori care trebuie să fie de încredere.';
$string['check_unsecuredataroot_details'] = '<p>Directorul dataroot nu trebuie să fie accesibil de pe Web. Cel mai sigur mod de a vă asigura că directorul dataroot nu este accesibil de pe Web este să vă asiguraţi că folosiţi un un director în afara directorulu public de Web.</p>
<p>În cazul în care transferaţi acest director, va trebui să actualizaţi în mod corespunzător setarea <code>$CFG->dataroot</code> din <code>config.php</code>.</p>';
$string['check_unsecuredataroot_error'] = 'Directorul dumneavoastră dataroot <code>{$a}</code> este situat într-o locaţie greşită şi este expus pe Web!';
$string['check_unsecuredataroot_name'] = 'Director dataroot expus riscurilor';
$string['check_unsecuredataroot_ok'] = 'Directorul dataroot nu trebuie să fie accesibil via Web.';
$string['check_unsecuredataroot_warning'] = 'Directorul dumneavoastră dataroot <code>{$a}</code> este într-o locaţie incorectă şi este posibil să fie expus pe Web.';
$string['check_upgradefile_info'] = 'Fișierele cu observații ale procesului de actualizare nu ar trebui să fie publice';
$string['check_vendordir_details'] = '<p> Directorul <code> {$a->path} </code> conține diverse biblioteci terțe și dependențele acestora, instalate de obicei de PHP Composer. Aceste biblioteci pot fi necesare pentru dezvoltarea locală a Moodle, cum ar fi instalarea cadrului PHPUnit. Nu sunt necesare pentru a rula un site Moodle în producție și pot conține cod potențial periculos, expunând site-ul dvs. la atacuri de la distanță. </p> <p> Este recomandat să eliminați directorul dacă site-ul este disponibil printr-un URL public, sau cel puțin interzice accesul web la acesta în configurația serverului dvs. web. </p>';
$string['check_vendordir_info'] = 'Directorul vendor nu ar trebui să apară pe site-uri publice.';
$string['check_vendordir_name'] = 'Director Vendor';
$string['check_webcron_details'] = '<p> Rularea cronului dintr-un browser web poate expune informații privilegiate utilizatorilor anonimi. Este recomandat să executați cronul numai din linia de comandă sau să setați o parolă cron pentru acces la distanță. </p>';
$string['check_webcron_name'] = 'Web cron';
$string['check_webcron_ok'] = 'Utilizatorii anonimi nu pot accesa cron.';
$string['check_webcron_warning'] = 'Utilizatorii anonimi pot accesa cron.';
$string['configuration'] = 'Configurare';
$string['description'] = 'Descriere';
$string['details'] = 'Detalii';
$string['eventreportviewed'] = 'Raport de verificare a securității vizualizat';
$string['issue'] = 'Problemă';
$string['pluginname'] = 'Verificări de securitate';
$string['privacy:metadata'] = 'Plugin-ul Security overview nu stochează date personale.';
$string['security:view'] = 'Afişare raport securitate';
$string['timewarning'] = 'Este posibil ca procesarea datelor poate să dureze, vă rugăm să aşteptaţi finalizarea operaţiunii...';
