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
 * Strings for component 'enrol_ldap', language 'ro', version '4.1'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Alocarea rolului \'{$a->role_shortname}\' către utilizator \'{$a->user_username}\' la cursul \'{$a->course_shortname}\' (id {$a->course_id})';
$string['assignrolefailed'] = 'Nu a reușit alocarea rolului  \'{$a->role_shortname}\' către utilizator \'{$a->user_username}\' la cursul \'{$a->course_shortname}\' (id {$a->course_id})';
$string['autocreate'] = '<p>Cursurile pot fi create automat, dacă există înscrieri la un curs care nu este creat încă în Moodle</p><p>Dacă utilizați crearea automată a cursurilor, vă recomandăm să eliminați următoarele funcții: moodle/course:changeidnumber, moodle/course:changeshortname, moodle/course:changefullname și moodle/course:changesummary din rolurile relevante, pentru a preveni modificarea celor patru câmpuri de curs specificate mai sus (număr ID, numele prescurtat, numele complet și rezumatul).</p>';
$string['autocreate_key'] = 'Creare automată';
$string['autocreation_settings'] = 'Setări automate de creare a cursului';
$string['autoupdate_settings'] = 'Setări de actualizare automată a cursului';
$string['autoupdate_settings_desc'] = '<p>Selectați câmpurile de actualizat, când rulează scriptul de sincronizare (enrol/ldap/cli/sync.php).</p><p>Când este selectat cel puțin un câmp, va avea loc o actualizare.</p>';
$string['bind_dn'] = 'Dacă doriți să folosiți un utilizator legat pentru a căuta utilizatori, specificați-l aici. Ceva asemănător cu \'cn=ldapuser,ou=public,o=org\\';
$string['bind_dn_key'] = 'Numele distinct al utilizatorului legat';
$string['bind_pw'] = 'Parola pentru utilizatorul legat';
$string['bind_pw_key'] = 'Parolă';
$string['bind_settings'] = 'Setări de legare';
$string['cannotcreatecourse'] = 'Cursul nu poate fi creat: lipsesc datele necesare din înregistrarea LDAP!';
$string['cannotupdatecourse'] = 'Cursul nu poate fi actualizat: lipsesc datele necesare din înregistrarea LDAP! Numărul de ID al cursului: \'{$a->idnumber}\\';
$string['cannotupdatecourse_duplicateshortname'] = 'Cursul nu poate fi actualizat: numele prescurtat este duplicat. Se omite cursul cu numărul de ID \'{$a->idnumber}\'...';
$string['category'] = 'Categoria cursurilor create automat';
$string['category_key'] = 'Categorie';
$string['contexts'] = 'Contexte LDAP';
$string['couldnotfinduser'] = 'Nu poate fi găsit utilizatorul \'{$a}\', treci mai departe';
$string['course_fullname'] = 'Opțional: Atribut LDAP pentru a obține numele complet de la';
$string['course_fullname_key'] = 'Nume complet';
$string['course_fullname_updateonsync'] = 'Actualizați numele complet în timpul scriptului de sincronizare';
$string['course_fullname_updateonsync_key'] = 'Actualizați numele complet';
$string['course_idnumber'] = 'Atribut LDAP pentru a obține numărul ID-ului cursului. De regulă, \'cn\' sau \'uid\'.';
$string['course_idnumber_key'] = 'Numpăr ID';
$string['course_search_sub'] = 'Caută apartenența la grup din subcontexte';
$string['course_search_sub_key'] = 'Caută subcontexte';
$string['course_settings'] = 'Setările înscrierii la curs';
$string['course_shortname'] = 'Opțional: atribut LDAP pentru a obține numele prescurtat';
$string['course_shortname_key'] = 'Nume prescurtat';
$string['course_shortname_updateonsync'] = 'Actualizați numele prescurtat în timpul scriptului de sincronizare';
$string['course_shortname_updateonsync_key'] = 'Actualizați numele prescurtat';
$string['course_summary'] = 'Opțional: atribut LDAP pentru a obține rezumatul';
$string['course_summary_key'] = 'Rezumat';
$string['course_summary_updateonsync'] = 'Actualizați rezumatul în timpul scriptului de sincronizare';
$string['course_summary_updateonsync_key'] = 'Actualizați rezumatul';
$string['coursenotexistskip'] = 'Cursul \'{$a}\' nu există și crearea automată este dezactivată, treci mai departe';
$string['courseupdated'] = 'Cursul cu numărul ID \'{$a->idnumber}\' a fost actualizat cu succes.';
$string['courseupdateskipped'] = 'Cursul cu numărul ID \'{$a->idnumber}\' nu trebuie actualizat. Treceți mai departe...';
$string['createcourseextid'] = 'CREARE Utilizator înscris la un curs inexistent \'{$a->courseextid}\\';
$string['createnotcourseextid'] = 'Utilizator înscris la un curs inexistent \'{$a->courseextid}\\';
$string['creatingcourse'] = 'Creare curs \'{$a}\'...';
$string['duplicateshortname'] = 'Crearea cursului a eșuat. Nume prescurtat duplicat. Se omite cursul cu numărul de identificare \'{$a->idnumber}\'...';
$string['editlock'] = 'Valoare de blocare';
$string['emptyenrolment'] = 'Înscriere goală pentru poziția \'{$a->role_shortname}\' din cursul \'{$a->course_shortname}\\';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = 'Înscrie utilizatorul \'{$a->user_username}\' la cursul \'{$a->course_shortname}\' (id {$a->course_id})';
$string['enroluserenable'] = 'Activează înscrierea utilizatorului \'{$a->user_username}\' la cursul \'{$a->course_shortname}\' (id {$a->course_id})';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group() nu acceptă tipul de utilizator selectat: {$a}';
$string['extcourseidinvalid'] = 'Identificatorul cursului extern nu este valid!';
$string['extremovedsuspend'] = 'Dezactivează înscrierea pentru utilizatorul \'{$a->user_username}\' la cursul \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedsuspendnoroles'] = 'Dezactivează înscrierea și rolurile eliminate pentru utilizatorul \'{$a->user_username}\' la cursul \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedunenrol'] = 'Retrage utilizatorul \'{$a->user_username}\' de la curs \'{$a->course_shortname}\' (id {$a->course_id})';
$string['failed'] = 'Nereușit!';
$string['general_options'] = 'Opțiuni generale';
$string['group_memberofattribute'] = 'Numele atributului care specifică grupul căruia  îi aparține un anumit utilizator sau grup (ex., memberOf, groupMembership, etc.)';
$string['group_memberofattribute_key'] = '\'Membru al\' atribut';
$string['host_url'] = 'Specifică gazda LDAP din adresa URL-sub forma \'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\\';
$string['host_url_key'] = 'Adresa URL a gazdei';
$string['idnumber_attribute'] = 'Dacă apartenența la grup conține nume distincte, specificați același atribut pe care l-ați folosit pentru cartografierea utilizatorului \'Număr ID\' în setările de autentificare LDAP.';
$string['idnumber_attribute_key'] = 'Atributul numărului ID';
$string['ldap:manage'] = 'Gestionați sesiunile de înscriere LDAP';
$string['ldap_encoding'] = 'Specificați codificarea utilizată de serverul LDAP. Cel mai probabil utf-8, MS AD v2 folosește codificarea implicită a platformei, cum ar fi cp1252, cp1250 etc.';
$string['ldap_encoding_key'] = 'Codificare LDAP';
$string['memberattribute'] = 'Atribut membru LDAP';
$string['memberattribute_isdn'] = 'Dacă apartenența la grup conține nume distincte, trebuie să le specificați aici. În acest caz, trebuie să configurați și setările rămase în această secțiune.';
$string['memberattribute_isdn_key'] = 'Atributul membru folosește dn';
$string['nested_groups'] = 'Doriți să utilizați grupuri imbricate (grupuri de grupuri) pentru înscriere?';
$string['nested_groups_key'] = 'Grupuri imbricate';
$string['nested_groups_settings'] = 'Setări grupuri imbricate';
$string['nosuchrole'] = 'Niciun astfel de rol: \'{$a}\\';
$string['objectclass'] = 'objectClass folosit pentru a căuta cursuri. De regulă, \'group\' sau \'posixGroup\\';
$string['objectclass_key'] = 'Clasă obiect';
$string['ok'] = 'OK!';
$string['opt_deref'] = 'Dacă apartenența la grup conține nume distincte, specificați modul în care sunt tratate alias-urile în timpul unei căutări. Selectați una dintre următoarele valori: \'Nu\' (LDAP_DEREF_NEVER) sau \'Da\' (LDAP_DEREF_ALWAYS).';
$string['opt_deref_key'] = 'Alias-uri de referință';
$string['phpldap_noextension'] = '<em>Modulul PHP LDAP nu pare să fie prezent. Vă rugăm să vă asigurați că este instalat și activat, dacă doriți să utilizați acest plugin de înscriere.</em>';
$string['pluginname'] = 'Înscrieri LDAP';
$string['pluginname_desc'] = '<p>Puteți utiliza un server LDAP, pentru a vă controla înscrierile. Se presupune că arborele dumneavoastră LDAP conține grupuri care cartografiază cursurile și că fiecare dintre aceste grupuri/ cursuri va avea intrări de membru pentru a le asocia cursanților.</p><p>Se presupune că toate cursurile sunt definite ca grupuri în LDAP, fiecare grup având mai multe câmpuri de membru (<em>member</em> or <em>memberUid</em>) care conțin o identificare unică a utilizatorului.</p><p>Pentru a utiliza înregistrarea LDAP, utilizatorii dvs.<strong>must</strong> pentru a avea un câmp valid de număr de ID. Grupurile LDAP trebuie să aibă acel număr de identificare în câmpurile de membri pentru ca un utilizator să fie înscris la curs. Acest lucru va funcționa de obicei bine dacă utilizați deja autentificarea LDAP.</p><p>Înscrierile vor fi actualizate la conectarea utilizatorului. De asemenea, puteți rula un script, pentru a menține înscrierile sincronizate. Uitați-vă în <em>enrol/ldap/cli/sync.php</em>.</p><p>Acest plugin poate fi, de asemenea, setat, pentru a crea automat cursuri noi, atunci când apar noi grupuri în LDAP.</p>';
$string['pluginnotenabled'] = 'Plugin-ul nu este activat!';
$string['privacy:metadata'] = 'Plugin-ul pentru înscrieri LDAP nu stochează date personale.';
$string['role_mapping'] = '<p>Pentru fiecare rol, trebuie să specificați toate contextele LDAP în care se află grupurile care reprezintă cursurile. Separați diferite contexte cu un punct și virgulă (;).</p><p>De asemenea, trebuie să specificați atributul pe care îl folosește serverul LDAP, pentru a deține membrii unui grup. Acesta este de obicei \'membru\' sau \'IDmembru\'.</p>';
$string['role_mapping_attribute'] = 'Atribut membru LDAP pentru {$a}';
$string['role_mapping_context'] = 'Contextele LDAP pentru {$a}';
$string['role_mapping_key'] = 'Mapare roluri din LDAP';
$string['roles'] = 'Cartografierea rolului';
$string['server_settings'] = 'Setări server LDAP';
$string['synccourserole'] = '== Sincronizarea cursului \'{$a->idnumber}\' pentru poziția \'{$a->role_shortname}\\';
$string['syncenrolmentstask'] = 'Sincronizați sarcina de înscrieri LDAP';
$string['template'] = 'Opțional: cursurile create automat își pot copia setările dintr-un curs șablon';
$string['template_key'] = 'Șablon';
$string['unassignrole'] = 'Anularea atribuirii rolului \'{$a->role_shortname}\' către utilizatorul \'{$a->user_username}\' de la cursul \'{$a->course_shortname}\' (id {$a->course_id})';
$string['unassignrolefailed'] = 'Nu s-a putut anula atribuirea rolului \'{$a->role_shortname}\' către utilizatorul \'{$a->user_username}\' de la cursul \'{$a->course_shortname}\' (id {$a->course_id})';
$string['unassignroleid'] = 'Anularea atribuirii ID-ului rolului \'{$a->role_id}\' către ID-ul utilizatorului \'{$a->user_id}\\';
$string['updatelocal'] = 'Actualizați datele locale';
$string['user_attribute'] = 'Dacă apartenența la grup conține nume distincte, specificați atributul folosit pentru a numi/ căuta utilizatori. Dacă utilizați autentificarea LDAP, această valoare trebuie să se potrivească cu atributul specificat în cartografierea \'Număr ID \' din plugin-ul de autentificare LDAP.';
$string['user_attribute_key'] = 'Atributul numărului identificator';
$string['user_contexts'] = 'Dacă apartenența la grup conține nume distincte, specificați lista contextelor în care se află utilizatorii. Separați diferite contexte cu un punct și virgulă (;). De exemplu: \'ou=users,o=org; ou=others,o=org\'.';
$string['user_contexts_key'] = 'Contexte';
$string['user_search_sub'] = 'Dacă apartenența la grup conține nume distincte, specificați dacă identificarea utilizatorilor se face și în sub-contexte.';
$string['user_search_sub_key'] = 'Căutați subcontexte';
$string['user_settings'] = 'Setări căutare utilizator';
$string['user_type'] = 'Dacă apartenența la grup conține nume distincte, specificați modul în care utilizatorii sunt stocați în LDAP';
$string['user_type_key'] = 'Tip de utilizator';
$string['version'] = 'Versiunea protocolului LDAP pe care îl folosește serverul dvs.';
$string['version_key'] = 'Versiune';
