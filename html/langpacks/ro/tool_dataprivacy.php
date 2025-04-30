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
 * Strings for component 'tool_dataprivacy', language 'ro', version '4.4'.
 *
 * @package     tool_dataprivacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Activități și resurse';
$string['addcategory'] = 'Adăugați categorie';
$string['addnewdefaults'] = 'Adăugați un nou modul implicit';
$string['addpurpose'] = 'Adăugați un scop';
$string['addroleoverride'] = 'Adăugați suprascrierea rolului';
$string['allowfiltering'] = 'Permite filtrarea de export pentru cursuri';
$string['allowfiltering_desc'] = 'Dacă este activat, responsabilul de confidențialitate poate alege să exporte datele utilizatorilor doar din cursurile selectate nu din toate cursurile. Când această funcție este activată, cererile de export vor începe de la „În așteptare” și pot fi aprobate numai după finalizarea procesului din fundal.';
$string['approve'] = 'Aproba';
$string['approvedrequestsubmitted'] = 'Solicitarea dvs. a fost trimisă și va fi procesată în curând.';
$string['approverequest'] = 'Aprobă cererea';
$string['approverequestall'] = 'Aprobă cererea (toate datele)';
$string['approveselectedcourses'] = 'Aprobă cursurile selectate';
$string['automaticdatadeletionapproval'] = 'Aprobarea solicitării ștergerii automate a datelor';
$string['automaticdatadeletionapproval_desc'] = 'Dacă este activată, solicitările de ștergere a datelor sunt aprobate automat. <br/> Rețineți că aprobarea automată se va aplica numai noilor solicitări de ștergere a datelor cu această setare activată. Solicitările de ștergere a datelor existente în așteptarea aprobării vor trebui în continuare aprobate manual de către responsabilul cu confidențialitatea.';
$string['automaticdataexportapproval'] = 'Aprobarea solicitării exportului automat de date';
$string['automaticdataexportapproval_desc'] = 'Dacă este activată, solicitările de export de date sunt aprobate automat. <br/> Rețineți că aprobarea automată se va aplica numai noilor solicitări de export de date cu această setare activată. Solicitările existente de export de date în așteptarea aprobării vor trebui în continuare aprobate manual de către DPO.';
$string['automaticdeletionrequests'] = 'Creați cereri de ștergere automată a datelor';
$string['automaticdeletionrequests_desc'] = 'Dacă este activată, va fi creată automat o solicitare de ștergere a datelor pentru orice cont de utilizator șters manual.';
$string['bulkapproverequests'] = 'Aprobă solicitările';
$string['bulkdenyrequests'] = 'Respinge cererile';
$string['cachedef_contextlevel'] = 'Nivelul contextului, scopul și categoria';
$string['cachedef_purpose'] = 'Scopurile datelor';
$string['cachedef_purpose_overrides'] = 'Scopul suprascrie în instrumentul de confidențialitate a datelor';
$string['cancelrequest'] = 'Anulează cererea';
$string['cancelrequestconfirmation'] = 'Doriți să anulați această solicitare de date?';
$string['cannotreset'] = 'Nu s-a putut reseta această solicitare. Numai cererile respinse pot fi resetate.';
$string['categories'] = 'Categorii';
$string['categorieslist'] = 'Lista categoriilor de date';
$string['category'] = 'Categorie';
$string['category_help'] = 'O categorie din registrul de date descrie un tip de date. Se poate adăuga o nouă categorie sau, dacă este selectat Moștenire, se aplică categoria de date dintr-un context superior. Contextele sunt (de la mic la mare): Blocuri> Module de activitate> Cursuri> Categorii de cursuri> Site.';
$string['categorycreated'] = 'Categorie creată';
$string['categorydefault'] = 'Categorie implicită';
$string['categorydefault_help'] = 'Categoria implicită este categoria de date aplicată oricărei instanțe noi. Dacă este selectat Moștenire, se aplică categoria de date dintr-un context superior. Contextele sunt (de la mic la mare): Blocuri> Module de activitate> Cursuri> Categorii de cursuri> Utilizator> Site.';
$string['categoryupdated'] = 'Categoria actualizată';
$string['close'] = 'Închide';
$string['compliant'] = 'Conform';
$string['confirmapproval'] = 'Doriți cu adevărat să aprobați această solicitare de date?';
$string['confirmbulkapproval'] = 'Doriți cu adevărat să aprobați în bloc solicitările de date selectate?';
$string['confirmbulkdenial'] = 'Sigur doriți să refuzați în bloc solicitările de date selectate?';
$string['confirmcompletion'] = 'Sigur doriți să marcați această solicitare de utilizator ca fiind completă?';
$string['confirmcontextdeletion'] = 'Sigur doriți să confirmați ștergerea contextelor selectate? Aceasta va șterge, de asemenea, toate datele utilizatorului pentru sub-contextele respective.';
$string['confirmdenial'] = 'Sigur doriți să refuzați această solicitare de date?';
$string['confirmrequestresubmit'] = 'Sigur doriți să anulați solicitarea curentă {$a->type} pentru {$a->username} și să o retrimiteți?';
$string['contactdataprotectionofficer'] = 'Contactați ofițerul de confidențialitate (DPO)';
$string['contactdataprotectionofficer_desc'] = 'Dacă este activată, utilizatorii vor putea contacta responsabilul cu confidențialitatea și pot solicita date printr-un link de pe pagina lor de profil.';
$string['contactdpoviaprivacypolicy'] = 'Vă rugăm să contactați ofițerul de confidențialitate așa cum este descris în politica de confidențialitate.';
$string['contextlevelname10'] = 'Site';
$string['contextlevelname30'] = 'Utilizatori';
$string['contextlevelname40'] = 'Categorii de cursuri';
$string['contextlevelname50'] = 'Cursuri';
$string['contextlevelname70'] = 'Module de activitate';
$string['contextlevelname80'] = 'Blocuri';
$string['contextpurposecategorysaved'] = 'Scop și categorie salvate.';
$string['createcategory'] = 'Creați o categorie de date';
$string['createdeletedatarequest'] = 'Creați o solicitare de ștergere a datelor';
$string['createnewdatarequest'] = 'Creați o nouă solicitare de date';
$string['createpurpose'] = 'Creați un scop de date';
$string['creationauto'] = 'Automat';
$string['creationmanual'] = 'Manual';
$string['datadeletion'] = 'Ștergerea datelor';
$string['datadeletionpagehelp'] = 'Datele pentru care perioada de păstrare a expirat sunt enumerate aici. Vă rugăm să examinați și să confirmați ștergerea datelor, care va fi apoi executată de sarcina programată „Ștergeți contextele expirate”.';
$string['dataprivacy:downloadallrequests'] = 'Descărcați datele exportate pentru toată lumea';
$string['dataprivacy:downloadownrequest'] = 'Descărcați propriile date exportate';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = 'Solicitați ștergerea datelor pentru minori';
$string['dataprivacy:makedatarequestsforchildren'] = 'Faceți cereri de date pentru minori';
$string['dataprivacy:managedataregistry'] = 'Gestionați registrul de date';
$string['dataprivacy:managedatarequests'] = 'Gestionați solicitările de date';
$string['dataprivacy:requestdelete'] = 'Solicitați ștergerea datelor pentru dvs.';
$string['dataprivacy:requestdeleteforotheruser'] = 'Solicitați ștergerea datelor în numele altui utilizator';
$string['dataregistry'] = 'Registrul de date';
$string['dataregistryinfo'] = 'Registrul de date permite setarea categoriilor (tipurilor de date) și a scopurilor (motivele procesării datelor) pentru tot conținutul de pe site - de la utilizatori și cursuri până la activități și blocuri. Pentru fiecare scop, se poate stabili o perioadă de păstrare. Când a expirat o perioadă de păstrare, datele sunt semnalate și listate pentru ștergere, în așteptarea confirmării administratorului.';
$string['datarequestcreatedforuser'] = 'Cerere de date creată pentru {$a}';
$string['datarequestcreatedfromscheduledtask'] = 'Creat automat dintr-o activitate programată (utilizator șters preexistent).';
$string['datarequestcreatedupondelete'] = 'Creat automat la ștergerea utilizatorului.';
$string['datarequestemailsubject'] = 'Cerere de date: {$a}';
$string['datarequests'] = 'Solicitări de date';
$string['dataretentionexplanation'] = 'Acest rezumat prezintă categoriile și scopurile implicite pentru păstrarea datelor utilizatorilor. Anumite zone pot avea categorii și scopuri mai specifice decât cele enumerate aici.';
$string['dataretentionsummary'] = 'Rezumatul păstrării datelor';
$string['datecomment'] = '[{$a->date}]:
  {$a->comment}';
$string['daterequested'] = 'Data solicitată';
$string['daterequesteddetail'] = 'Data solicitării:';
$string['defaultexpired'] = 'Date pentru toți utilizatorii';
$string['defaultexpiredexcept'] = 'Date pentru toți utilizatorii, cu excepția celor care dețin oricare dintre următoarele roluri: <br>
{$a->unexpired}';
$string['defaultsinfo'] = 'Categoriile și scopurile implicite sunt aplicate tuturor instanțelor noi și existente în care nu este setată o valoare.';
$string['defaultssaved'] = 'Implicite salvate';
$string['defaultswarninginfo'] = 'Avertisment: Modificarea acestor valori implicite poate afecta perioada de păstrare a instanțelor existente.';
$string['defaultunexpired'] = 'Numai date pentru utilizatorii care dețin oricare dintre următoarele roluri: <br>
{$a->expired}';
$string['defaultunexpiredwithexceptions'] = 'Numai date pentru utilizatorii care dețin oricare dintre următoarele roluri: <br>
{$a->expired}
Cu excepția cazului în care dețin și unul dintre următoarele roluri: <br>
{$a->unexpired}';
$string['deletecategory'] = 'Ștergeți categoria';
$string['deletecategorytext'] = 'Sigur doriți să ștergeți categoria „{$a}”?';
$string['deletedefaults'] = 'Ștergeți valorile implicite: {$a}';
$string['deletedefaultsconfirmation'] = 'Sigur doriți să ștergeți categoria și scopul implicit pentru modulele {$a}?';
$string['deleteexistingdeleteduserstask'] = 'Creați o solicitare de ștergere a datelor pentru utilizatorii șterși pre-existenți';
$string['deleteexpiredcontextstask'] = 'Ștergeți contextele expirate';
$string['deleteexpireddatarequeststask'] = 'Ștergeți fișierele de export cerere de date expirate';
$string['deletemyaccount'] = 'Șterge contul meu';
$string['deletepurpose'] = 'Ștergeți scopul';
$string['deletepurposetext'] = 'Sigur doriți să ștergeți scopul „{$a}”?';
$string['deny'] = 'Respinge';
$string['denyrequest'] = 'Respinge cererea';
$string['deprecated'] = 'Depreciat';
$string['deprecatedexplanation'] = 'Acest plugin folosește o versiune veche a uneia dintre interfețele de confidențialitate și ar trebui actualizat.';
$string['download'] = 'Descarcă';
$string['downloadexpireduser'] = 'Descărcarea a expirat. Trimiteți o nouă solicitare dacă doriți să exportați datele dvs. personale.';
$string['dporolemapping'] = 'Maparea rolului responsabilului de confidențialitate';
$string['dporolemapping_desc'] = 'Responsabilul cu confidențialitatea poate gestiona solicitările de date. Instrumentul de capacitate / confidențialitate de date: cererile gestionate trebuie să fie permise pentru ca un rol să fie listat ca opțiune de mapare a rolului unui ofițer de confidențialitate.';
$string['duplicaterole'] = 'Rolul deja specificat';
$string['editcategories'] = 'Editați categoriile';
$string['editcategory'] = 'Editați categoria';
$string['editdefaults'] = 'Editați valorile implicite: {$a}';
$string['editmoduledefaults'] = 'Editați valorile implicite ale modulului';
$string['editpurpose'] = 'Editați scopul';
$string['editpurposes'] = 'Editați scopurile';
$string['effectiveretentionperiodcourse'] = '{$a} (după data de încheiere a cursului)';
$string['effectiveretentionperioduser'] = '{$a} (de la ultima accesare a site-ului de către utilizator)';
$string['emailsalutation'] = 'Stimate {$a},';
$string['errorcannotrequestdeleteforother'] = 'Nu aveți permisiunea de a crea o solicitare de ștergere pentru acest utilizator.';
$string['errorcannotrequestdeleteforself'] = 'Nu aveți permisiunea de a crea o solicitare de ștergere pentru dvs.';
$string['errorcannotrequestexportforself'] = 'Nu aveți permisiunea de a crea cerere de export pentru dumneavoastră.';
$string['errorcontactdpodisabled'] = 'Opțiunea de a contacta ofițerul de protecție a datelor cu caracter personal este dezactivată.';
$string['errorcontexthasunexpiredchildren'] = 'Contextul „{$a}” are încă sub-contexte care nu au expirat încă. Niciun context nu a fost marcat pentru ștergere.';
$string['errorinvalidrequestcomments'] = 'Câmpul de comentarii poate conține numai text simplu.';
$string['errorinvalidrequestcreationmethod'] = 'Metoda de creare a solicitării nu este validă!';
$string['errorinvalidrequeststatus'] = 'Stare solicitării nu este validă!';
$string['errorinvalidrequesttype'] = 'Tipul de solicitare nu este valid!';
$string['errornocapabilitytorequestforothers'] = 'Utilizatorul {$a->requestedby} nu are capacitatea de a efectua o cerere de date în numele utilizatorului {$a->userid}';
$string['errornoexpiredcontexts'] = 'Nu există contexte expirate de procesat';
$string['errornoselectedcourse'] = 'Trebuie să selectezi cel puțin un curs';
$string['errorrequestalreadyexists'] = 'Aveți deja o solicitare în curs.';
$string['errorrequestnotfound'] = 'Cererea nu a fost găsită';
$string['errorrequestnotwaitingforapproval'] = 'Solicitarea nu așteaptă aprobarea. Fie nu este încă gata, fie a fost deja procesată.';
$string['errorsendingmessagetodpo'] = 'A apărut o eroare la încercarea de a trimite un mesaj către {$a}.';
$string['exceptionnotificationbody'] = '<p> A apărut o excepție la apelarea <b> {$a->fullmethodname} </b>. <br> Aceasta înseamnă că pluginul <b> {$a->component} </b> nu a finalizat procesarea datelor . Următoarele informații de excepție pot fi transmise dezvoltatorului de pluginuri: </p> <pre> {$a->message} <br>

{$a->backtrace} </pre>';
$string['exceptionnotificationsubject'] = 'A apărut o excepție în timpul procesării datelor de confidențialitate';
$string['expandplugin'] = 'Extindeți și restrângeți pluginul.';
$string['expandplugintype'] = 'Extindeți și restrângeți tipul de plugin.';
$string['expiredretentionperiodtask'] = 'Perioada de păstrare expirată';
$string['expiredrolewithretention'] = '{$a->retention} (Expirat)';
$string['expiry'] = 'Expirare';
$string['explanationtitle'] = 'Pictogramele folosite pe această pagină și ce înseamnă.';
$string['external'] = 'Adiţional';
$string['externalexplanation'] = 'Un plugin suplimentar instalat pe acest site.';
$string['filterexportdata'] = 'Aprobă cererea (date din cursurile selectate)';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = 'Curs de pe prima pagină';
$string['gdpr_art_6_1_a_description'] = 'Persoana vizată și-a dat acordul pentru prelucrarea datelor sale personale pentru unul sau mai multe scopuri specifice';
$string['gdpr_art_6_1_a_name'] = 'Consimțământ (GDPR Art. 6.1 litera (a))';
$string['gdpr_art_6_1_b_description'] = 'Prelucrarea este necesară pentru executarea unui contract la care persoana vizată este parte sau pentru a lua măsuri la cererea persoanei vizate înainte de a încheia un contract.';
$string['gdpr_art_6_1_b_name'] = 'Contract (GDPR Art. 6.1 litera (b))';
$string['gdpr_art_6_1_c_description'] = 'Prelucrarea este necesară pentru respectarea unei obligații legale la care este supus operatorul';
$string['gdpr_art_6_1_c_name'] = 'Obligație legală (GDPR Art. 6.1 litera (c))';
$string['gdpr_art_6_1_d_description'] = 'Prelucrarea este necesară pentru a proteja interesele vitale ale persoanei vizate sau ale altei persoane fizice';
$string['gdpr_art_6_1_d_name'] = 'Interese vitale (GDPR Art. 6.1 litera (d))';
$string['gdpr_art_6_1_e_description'] = 'Prelucrarea este necesară pentru îndeplinirea unei sarcini efectuate în interes public sau în exercitarea autorității oficiale învestite de operator';
$string['gdpr_art_6_1_e_name'] = 'Sarcină de lucru publică (GDPR Art. 6.1 (e))';
$string['gdpr_art_6_1_f_description'] = 'Prelucrarea este necesară în scopul intereselor legitime urmărite de operator sau de o terță parte, cu excepția cazului în care aceste interese sunt depășite de interesele sau drepturile și libertățile fundamentale ale persoanei vizate care necesită protecția datelor cu caracter personal, în special atunci când datele subiectul este un copil';
$string['gdpr_art_6_1_f_name'] = 'Interese legitime (GDPR Art. 6.1 (f))';
$string['gdpr_art_9_2_a_description'] = 'Persoana vizată și-a dat acordul explicit pentru prelucrarea acestor date cu caracter personal pentru unul sau mai multe scopuri specificate, cu excepția cazurilor în care legislația Uniunii sau a statelor membre prevede că interdicția menționată la alineatul (1) din articolul 9 din GDPR nu poate fi ridicată de către persoana vizată';
$string['gdpr_art_9_2_a_name'] = 'Consimțământ explicit (GDPR Art. 9.2 (a))';
$string['gdpr_art_9_2_b_description'] = 'Prelucrarea este necesară pentru îndeplinirea obligațiilor și exercitarea drepturilor specifice ale operatorului sau ale persoanei vizate în domeniul dreptului muncii și al securității sociale și al protecției sociale, în măsura în care este autorizat de legislația Uniunii sau a statului membru sau acord colectiv în conformitate cu legislația statelor membre care prevede garanții adecvate pentru drepturile fundamentale și interesele persoanei vizate';
$string['gdpr_art_9_2_b_name'] = 'Legea privind ocuparea forței de muncă și securitatea socială / protecția (GDPR Art. 9.2 (b))';
$string['gdpr_art_9_2_c_description'] = 'Prelucrarea este necesară pentru a proteja interesele vitale ale persoanei vizate sau ale altei persoane fizice în cazul în care persoana vizată este incapabilă fizic sau juridic de a-și da acordul';
$string['gdpr_art_9_2_c_name'] = 'Protecția intereselor vitale (GDPR Art. 9.2 (c))';
$string['gdpr_art_9_2_d_description'] = 'Prelucrarea se desfășoară în cursul activităților sale legitime cu garanții adecvate de către o fundație, o asociație sau orice alt organism non-profit cu scop politic, filozofic, religios sau sindical și cu condiția ca prelucrarea să se refere numai la membri sau foști membri ai organismului sau persoanelor care au contact regulat cu acesta în legătură cu scopurile acestuia și că datele personale nu sunt divulgate în afara acelui organism fără acordul persoanelor vizate';
$string['gdpr_art_9_2_d_name'] = 'Activități legitime privind membrii / contactele strânse ale unei fundații, asociații sau alte organisme non-profit (GDPR Art. 9.2 (d))';
$string['gdpr_art_9_2_e_description'] = 'Prelucrarea se referă la datele cu caracter personal care sunt făcute în mod vădit publice de către persoana vizată';
$string['gdpr_art_9_2_e_name'] = 'Date făcute publice de către persoana vizată (GDPR Art. 9.2 (e))';
$string['gdpr_art_9_2_f_description'] = 'Prelucrarea este necesară pentru stabilirea, exercitarea sau apărarea cererilor legale sau ori de câte ori instanțele acționează în calitatea lor judecătorească';
$string['gdpr_art_9_2_f_name'] = 'Reclamații legale și acțiuni judiciare (GDPR Art. 9.2 (f))';
$string['gdpr_art_9_2_g_description'] = 'Prelucrarea este necesară din motive de interes public substanțial, pe baza legislației Uniunii sau a statelor membre, care trebuie să fie proporțională cu scopul urmărit, să respecte esența dreptului la protecția datelor și să prevadă măsuri adecvate și specifice pentru a proteja drepturile fundamentale și interesele persoanei vizate';
$string['gdpr_art_9_2_g_name'] = 'Interes public substanțial (GDPR Art. 9.2 (g))';
$string['gdpr_art_9_2_h_description'] = 'Prelucrarea este necesară în scopul medicinei preventive sau a muncii, pentru evaluarea capacității de lucru a angajatului, diagnostic medical, furnizarea de îngrijire sau tratament de sănătate sau social sau gestionarea sistemelor și serviciilor de sănătate sau asistență socială pe baza Legislația Uniunii sau a statelor membre sau în conformitate cu contractul cu un profesionist din domeniul sănătății și sub rezerva condițiilor și garanțiilor menționate la alineatul (3) din articolul 9 din GDPR';
$string['gdpr_art_9_2_h_name'] = 'Scopuri medicale (GDPR Art. 9.2 (h))';
$string['gdpr_art_9_2_i_description'] = 'Prelucrarea este necesară din motive de interes public în domeniul sănătății publice, cum ar fi protejarea împotriva amenințărilor transfrontaliere grave la adresa sănătății sau asigurarea unor standarde ridicate de calitate și siguranță a asistenței medicale și a medicamentelor sau dispozitivelor medicale, pe baza Uniunii sau legislația statelor membre care prevede măsuri adecvate și specifice pentru a proteja drepturile și libertățile persoanei vizate, în special secretul profesional';
$string['gdpr_art_9_2_i_name'] = 'Sănătate publică (GDPR Art. 9.2 (i))';
$string['gdpr_art_9_2_j_description'] = 'Prelucrarea este necesară în scopuri de arhivare în interes public, în scopuri de cercetare științifică sau istorică sau în scopuri statistice în conformitate cu articolul 89 alineatul (1), pe baza legislației Uniunii sau a statelor membre, care trebuie să fie proporțională cu scopul urmărit, să respecte esența dreptului la protecția datelor și prevede măsuri adecvate și specifice pentru a proteja drepturile fundamentale și interesele persoanei vizate';
$string['gdpr_art_9_2_j_name'] = 'Interes public sau cercetare științifică / istorică / statistică (GDPR Art. 9.2 (j))';
$string['hide'] = 'Restrângeți totul';
$string['httpwarning'] = 'Este posibil ca orice date descărcate de pe acest site să nu fie criptate. Vă rugăm să contactați administratorul de sistem și să solicitați instalarea SSL pe acest site.';
$string['inherit'] = 'Moştenit';
$string['lawfulbases'] = 'Bazele legale';
$string['lawfulbases_help'] = 'Selectați cel puțin o opțiune care va servi drept bază legală pentru prelucrarea datelor cu caracter personal. Pentru detalii despre aceste baze legale, consultați <a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank"> GDPR Art. 6.1 </a>';
$string['markcomplete'] = 'Marcați ca fiind completă';
$string['markedcomplete'] = 'Întrebarea dvs. a fost marcată ca completă de către responsabilul cu confidențialitatea.';
$string['message'] = 'Mesaj';
$string['messagelabel'] = 'Mesaj:';
$string['messageprovider:contactdataprotectionofficer'] = 'Solicitări de date';
$string['messageprovider:datarequestprocessingresults'] = 'Rezultatele procesării cererii de date';
$string['messageprovider:notifyexceptions'] = 'Datele solicită notificări cu excepții';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'Solicitările mele de date cu caracter personal';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} copii';
$string['newrequest'] = 'Cerere nouă';
$string['noactivitiestoload'] = 'Fără activități';
$string['noassignedroles'] = 'Nu există roluri atribuite în acest context';
$string['noblockstoload'] = 'Fără blocuri';
$string['nocategories'] = 'Nu există încă categorii';
$string['nocoursestoload'] = 'Fără activități';
$string['nocoursetofilter'] = 'Utilizatorul nu este înscris la niciun curs de selectat';
$string['nodatarequests'] = 'Nu există cereri de date';
$string['nodatarequestsmatchingfilter'] = 'Nu există cereri de date care să corespundă filtrului dat';
$string['noexpiredcontexts'] = 'Acest nivel de context nu are date pentru care perioada de păstrare a expirat.';
$string['nopersonaldatarequests'] = 'Nu aveți nicio solicitare de date cu caracter personal';
$string['nopurposes'] = 'Nu există încă scopuri';
$string['nosubjectaccessrequests'] = 'Nu există cereri de date pe care trebuie să le acționați';
$string['nosystemdefaults'] = 'Scopul și categoria site-ului nu au fost încă definite.';
$string['notset'] = 'Nu este setat (utilizați valoarea implicită)';
$string['notyetexpired'] = '{$a} (încă nu a expirat)';
$string['overrideinstances'] = 'Resetați instanțele cu valori personalizate';
$string['pluginname'] = 'Confidențialitatea datelor';
$string['pluginname_help'] = 'Plugin pentru confidențialitatea datelor';
$string['pluginregistry'] = 'Registrul de confidențialitate al plugin-urilor';
$string['pluginregistrytitle'] = 'Registrul de conformitate a confidențialității pluginului';
$string['privacy'] = 'Confidențialitate';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'Filtrele aplicate în prezent la pagina de solicitări de date.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'Numărul de cereri de date pe care utilizatorul preferă să le vadă pe o singură pagină';
$string['privacy:metadata:purpose'] = 'Informații din scopul utilizării datelor din acest site.';
$string['privacy:metadata:purpose:usermodified'] = 'Identificatorul utilizatorului care a modificat scopul';
$string['privacy:metadata:request'] = 'Informații din solicitările de date cu caracter personal (solicitări de acces și ștergere a subiectului) efectuate pentru acest site.';
$string['privacy:metadata:request:comments'] = 'Orice comentariu al utilizatorului care însoțește cererea.';
$string['privacy:metadata:request:dpocomment'] = 'Orice comentarii făcute de responsabilul de confidențialitate al site-ului cu privire la cerere.';
$string['privacy:metadata:request:requestedby'] = 'ID-ul utilizatorului care face cererea, dacă este făcut în numele altui utilizator.';
$string['privacy:metadata:request:timecreated'] = 'Marcajul de timp care indică momentul în care solicitarea a fost făcută de utilizator.';
$string['privacy:metadata:request:userid'] = 'ID-ul utilizatorului căruia îi aparține solicitarea';
$string['privacyofficeronly'] = 'Doar utilizatorii cărora li se atribuie un rol de responsabil de confidențialitate ({$a}) au acces la acest conținut';
$string['privacyrequestexpiry'] = 'Data expirării cererii';
$string['privacyrequestexpiry_desc'] = 'Ora în care solicitările de date aprobate vor fi disponibile pentru descărcare înainte de expirare. Dacă este setat la zero, atunci nu există nicio limită de timp.';
$string['protected'] = 'Protejat';
$string['protectedlabel'] = 'Păstrarea acestor date are un precedent legal mai ridicat față de cererea unui utilizator de a fi uitat. Aceste date vor fi șterse numai după expirarea perioadei de păstrare.';
$string['purpose'] = 'Scop';
$string['purpose_help'] = 'Scopul descrie motivul procesării datelor. Se poate adăuga un nou scop sau, dacă este selectat Moștenire, se aplică scopul dintr-un context superior. Contextele sunt (de la mic la mare): Blocuri> Module de activitate> Cursuri> Categorii de cursuri> Utilizator> Site.';
$string['purposecreated'] = 'Scopul creat';
$string['purposedefault'] = 'Scop implicit';
$string['purposedefault_help'] = 'Scopul implicit este scopul aplicat oricărei instanțe noi. Dacă este selectat Moștenire, se aplică scopul dintr-un context superior. Contextele sunt (de la mic la mare): Blocuri> Module de activitate> Cursuri> Categorii de cursuri> Utilizator> Site.';
$string['purposeoverview'] = 'Un scop descrie politica de utilizare și păstrare intenționată a datelor stocate. Baza pentru stocarea și păstrarea acestor date este, de asemenea, descrisă în acest scop.';
$string['purposes'] = 'Scopuri';
$string['purposeslist'] = 'Lista scopurilor de date';
$string['purposeupdated'] = 'Scop actualizat';
$string['replyto'] = 'Răspunde';
$string['requestactions'] = 'Acțiuni';
$string['requestapproved'] = 'Solicitarea a fost aprobată';
$string['requestby'] = 'Solicitat de';
$string['requestbydetail'] = 'Solicitat de:';
$string['requestcomments'] = 'Comentarii';
$string['requestcomments_help'] = 'Această casetă vă permite să introduceți orice detalii suplimentare despre solicitarea dvs. de date.';
$string['requestcreation'] = 'Creare';
$string['requestdenied'] = 'Cererea a fost respinsă';
$string['requestemailintro'] = 'Ați primit o solicitare de date:';
$string['requestfor'] = 'Utilizator';
$string['requestmarkedcomplete'] = 'Solicitarea a fost marcată ca fiind completă';
$string['requestorigin'] = 'Site';
$string['requestsapproved'] = 'Solicitările au fost aprobate';
$string['requestsdenied'] = 'Cererile au fost respinse';
$string['requeststatus'] = 'Status';
$string['requestsubmitted'] = 'Solicitarea dvs. a fost trimisă agentului de confidențialitate';
$string['requesttype'] = 'Tip';
$string['requesttype_help'] = 'Selectați motivul pentru care contactați responsabilul cu confidențialitatea. Rețineți că ștergerea tuturor datelor cu caracter personal va face ca dvs. să nu vă mai puteți conecta la site.';
$string['requesttypedelete'] = 'Ștergeți toate datele mele personale';
$string['requesttypedeleteshort'] = 'Șterge';
$string['requesttypeexport'] = 'Exportați toate datele mele personale';
$string['requesttypeexportallowfiltering'] = 'Exportă datele mele personale';
$string['requesttypeexportshort'] = 'Export';
$string['requesttypeothers'] = 'Cerere de informații generale';
$string['requesttypeothersshort'] = 'Mesaj';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = 'Considerați cursurile fără dată de încheiere ca fiind active';
$string['requireallenddatesforuserdeletion_desc'] = 'La calcularea expirării utilizatorului, sunt luați în considerare mai mulți factori:

* ultima oră de conectare a utilizatorului este comparată cu perioada de păstrare a utilizatorilor; și
* dacă utilizatorul este înscris activ la cursuri.

Când verificați înscrierea activă la un curs, dacă cursul nu are o dată de încheiere, atunci această setare este utilizată pentru a determina dacă acel curs este considerat activ sau nu.

Dacă cursul nu are o dată de încheiere și această setare este activată, atunci utilizatorul nu poate fi șters.';
$string['requiresattention'] = 'Necesită atenție.';
$string['requiresattentionexplanation'] = 'Acest plugin nu implementează API-ul de confidențialitate Moodle. Dacă acest plugin stochează date cu caracter personal, acesta nu va putea fi exportat sau șters prin sistemul de confidențialitate al Moodle.';
$string['resubmitrequest'] = 'Retrimiteți cererea {$a->type} pentru {$a->username}';
$string['resubmitrequestasnew'] = 'Retrimiteți ca cerere nouă';
$string['resubmittedrequest'] = 'Solicitarea existentă {$a->type} pentru {$a->username} a fost anulată și retrimisă';
$string['resultdeleted'] = 'Ați solicitat recent să vă ștergeți contul și datele personale în {$a}. Acest proces a fost finalizat și nu vă veți mai putea autentifica.';
$string['resultdownloadready'] = 'Copia datelor dvs. personale de la {$a} pe care ați solicitat-o recent este acum disponibilă pentru descărcare de pe următorul link.';
$string['retentionperiod'] = 'Perioada de retenție';
$string['retentionperiod_help'] = 'Perioada de păstrare specifică durata pentru care ar trebui păstrate datele. Când perioada de păstrare a expirat, datele sunt semnalate și listate pentru ștergere, în așteptarea confirmării administratorului.';
$string['retentionperiodnotdefined'] = 'Nu a fost definită nicio perioadă de păstrare';
$string['retentionperiodzero'] = 'Fără perioadă de păstrare';
$string['reviewdata'] = 'Examinați datele';
$string['role'] = 'Rol';
$string['role_help'] = 'Rolul la care ar trebui să se aplice suprascrierea.';
$string['roleoverride'] = 'Suprascrierea rolului';
$string['roleoverrideoverview'] = 'Politica de păstrare implicită poate fi anulată pentru anumite roluri de utilizator, permițându-vă să specificați o politică de păstrare mai lungă sau mai scurtă. Un utilizator este expirat numai când toate rolurile sale au expirat.';
$string['roleoverrides'] = 'Suprascrierile rolului';
$string['selectbulkaction'] = 'Vă rugăm să selectați o acțiune în bloc.';
$string['selectcourses'] = 'Selectează cursurile pentru export';
$string['selectdatarequests'] = 'Vă rugăm să selectați cererile de date.';
$string['selectuserdatarequest'] = 'Selectați cererea de date {$a->username} {$a->requesttype}.';
$string['send'] = 'Trimite';
$string['sensitivedatareasons'] = 'Motive sensibile de prelucrare a datelor cu caracter personal';
$string['sensitivedatareasons_help'] = 'Selectați unul sau mai multe motive aplicabile care exceptează interzicerea prelucrării datelor cu caracter personal sensibile legate de acest scop. Pentru mai multe informații, consultați <a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank"> GDPR Art. 9.2 </a>';
$string['setdefaults'] = 'Setați valorile implicite';
$string['showdataretentionsummary'] = 'Afișați rezumatul păstrării datelor';
$string['showdataretentionsummary_desc'] = 'Dacă este activată, un link către rezumatul păstrării datelor este afișat în subsolul paginii și în profilurile utilizatorilor.';
$string['statusapproved'] = 'Aprobat';
$string['statusawaitingapproval'] = 'Așteaptă aprobarea';
$string['statuscancelled'] = 'Anulat';
$string['statuscomplete'] = 'Complet';
$string['statusdeleted'] = 'Șters';
$string['statusdetail'] = 'Stare:';
$string['statusexpired'] = 'Expirat';
$string['statuspending'] = 'In asteptarea';
$string['statuspreprocessing'] = 'Pre-procesare';
$string['statusprocessing'] = 'Prelucrare';
$string['statusready'] = 'Descărcare pregătiă';
$string['statusrejected'] = 'Respins';
$string['subjectscope'] = 'Domeniul de aplicare al subiectului';
$string['subjectscope_help'] = 'Domeniul de aplicare al subiectului enumeră rolurile care pot fi atribuite în acest context.';
$string['summary'] = 'Rezumatul configurării registrului';
$string['systemconfignotsetwarning'] = 'Scopul și categoria site-ului nu au fost definite. Când acestea nu sunt definite, toate datele vor fi eliminate atunci când se procesează solicitările de ștergere.';
$string['tobedeleted'] = 'Date de șters';
$string['unexpiredrolewithretention'] = '{$a->retention} (Nexspirat)';
$string['user'] = 'Utilizator';
$string['userlistexplanation'] = 'Acest plugin are furnizorul de bază, dar ar trebui să pună în aplicare și furnizorul de liste de utilizatori pentru sprijin complet al funcționalității de confidențialitate.';
$string['userlistnoncompliant'] = 'Furnizorul listei de utilizatori lipsește';
$string['viewrequest'] = 'Vizualizați solicitarea';
$string['visible'] = 'Extinde toate';
