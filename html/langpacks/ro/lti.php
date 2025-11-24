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
 * Strings for component 'lti', language 'ro', version '4.5'.
 *
 * @package     lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Acceptă';
$string['accept_grades'] = 'Acceptați notele din instrument';
$string['accept_grades_admin'] = 'Acceptați notele din instrument';
$string['accept_grades_admin_help'] = 'Specificați dacă furnizorul de instrument extern poate adăuga, actualiza, citi și șterge notele asociate instanțelor acestui instrument.

Unii furnizori de  instrumente externe acceptă raportarea notelor înapoi la Moodle pe baza acțiunilor întreprinse în cadrul instrumentului, creând experiență mai integrată.';
$string['accept_grades_from_tool'] = 'Permite ca {$a} să adauge note în catalog';
$string['accept_grades_help'] = 'Specificați dacă furnizorul de instrumente extern poate adăuga, actualiza, citi și șterge notele asociate numai acestei instanțe de instrumente externe.

Unii furnizori de instrumente externe acceptă raportarea notelor înapoi la Moodle pe baza acțiunilor întreprinse în cadrul instrumentului extern, creând o experiență mai integrată.

Rețineți că această setare poate fi ignorată în configurația instrumentului extern.';
$string['accepted'] = 'Acceptat';
$string['action'] = 'Acțiune';
$string['activate'] = 'Activați';
$string['activatetoadddescription'] = 'Va trebui să activați această unealtă înainte de a adăuga o descriere.';
$string['active'] = 'Activ';
$string['activity'] = 'Activitate';
$string['add_ltiadv'] = 'Adăugați LTI Advantage';
$string['add_ltilegacy'] = 'Adăugați compatibilitate LTI';
$string['addnewapp'] = 'Activați aplicația externă.';
$string['addserver'] = 'Adăugați un nou server de încredere';
$string['addtool'] = 'Adaugă instrument';
$string['addtype'] = 'Adăugați un instrument preconfigurat';
$string['allow'] = 'Permite';
$string['allowsetting'] = 'Permiteți instrumentului să stocheze 8K de setări în Moodle';
$string['always'] = 'Întotdeauna';
$string['autoaddtype'] = 'Adăugați instrument';
$string['automatic'] = 'Automat, pe baza adresei URL a instrumentului';
$string['baseurl'] = 'Adresa URL de bază / numele înregistrării instrumentului';
$string['basiclti'] = 'LTI';
$string['basiclti_base_string'] = 'Șir de bază LTI OAuth';
$string['basiclti_endpoint'] = 'Punct final de lansare LTI';
$string['basiclti_in_new_window'] = 'Activitatea dumneavoastră s-a deschis într-o fereastră nouă';
$string['basiclti_in_new_window_open'] = 'Deschide în fereastră nouă';
$string['basiclti_parameters'] = 'Parametrii de lansare LTI';
$string['basicltiactivities'] = 'Activități LTI';
$string['basicltifieldset'] = 'Set de câmpuri de exemplu personalizat';
$string['basicltiintro'] = 'Descrierea activității';
$string['basicltiname'] = 'Denumirea activității';
$string['basicltisettings'] = 'Setări de interoperabilitate a instrumentului de învățare de bază (LTI)';
$string['cachedef_keyset'] = 'Memorează în cache informațiile despre seturile de taste ale instrumentelor';
$string['cancel'] = 'Anulează';
$string['cancelled'] = 'Anulat';
$string['cannot_delete'] = 'Nu puteți șterge configurația acestui instrument.';
$string['cannot_edit'] = 'Nu este posibil să editați configurația acestui instrument.';
$string['capabilities'] = 'Capabilități';
$string['capabilities_help'] = 'Selectați acele funcții pe care doriți să le oferiți furnizorului de instrumente. Pot fi selectate mai multe capacități.';
$string['capabilitiesrequired'] = 'Acest instrument necesită acces la următoarele date pentru a activa:';
$string['cleanaccesstokens'] = 'Eliminarea instrumentului extern al jetoanelor de acces expirate';
$string['click_to_continue'] = '<a href="{$a->link} "target ="_ top "> Faceți clic pentru a continua </a>';
$string['clientidadmin'] = 'ID-ul clientului';
$string['clientidadmin_help'] = 'ID-ul clientului este o valoare unică utilizată pentru a identifica un instrument. Este creat automat pentru fiecare instrument care utilizează profilul de securitate JWT introdus în LTI 1.3 și ar trebui să facă parte din detaliile transmise furnizorului de instrumente, astfel încât să poată configura conexiunea la sfârșitul lor.';
$string['comment'] = 'Comentariu';
$string['configpassword'] = 'Parola implicită a instrumentului de la distanță';
$string['configpreferheight'] = 'Înălțime preferată implicită';
$string['configpreferwidget'] = 'Setați widgetul ca lansare implicită';
$string['configpreferwidth'] = 'Lățime preferată implicită';
$string['configresourceurl'] = 'Adresa URL implicită a resursei';
$string['configtoolurl'] = 'Adresa URL implicită a instrumentului la distanță';
$string['configtypes'] = 'Activați aplicațiile LTI';
$string['configured'] = 'Configurat';
$string['confirmtoolactivation'] = 'Sigur doriți să activați acest instrument?';
$string['contentitem_deeplinking'] = 'Suportă conectarea profundă (mesaj de conținut)';
$string['contentitem_deeplinking_help'] = 'Dacă este bifată, opțiunea „Selectare conținut” va fi disponibilă la adăugarea unui instrument extern.';
$string['contentitem_multiple_description'] = 'Următoarele elemente vor fi adăugate la cursul dvs.:';
$string['contentitem_multiple_graded'] = 'Activitate gradată (nota maximă: {$a})';
$string['contentselected'] = 'Conținut selectat';
$string['course_tool_types'] = 'Instrumente de curs';
$string['courseactivitiesorresources'] = 'Activitățile cursului sau resursele';
$string['courseexternaltooladd'] = 'Adaugă nou instrument extern LTI';
$string['courseexternaltooladdsuccess'] = '{$a} adăugat.';
$string['courseexternaltooledit'] = 'Editează {$a}';
$string['courseexternaltooleditsuccess'] = 'Modificări salvate.';
$string['courseexternaltooliconalt'] = 'Pictogramă a {$a}';
$string['courseexternaltools'] = 'Instrumente externe LTI';
$string['courseexternaltoolsinfo'] = 'Instrumentele externe LTI sunt aplicații suplimentare pe care le puteți integra în cursul dvs., cum ar fi conținutul interactiv sau evaluările. Cursanții le pot accesa și utiliza fără a părăsi cursul.';
$string['courseexternaltoolsnoeditpermissions'] = 'Nu ai permisiunea să editeză acest instrument (legătura) de curs';
$string['courseexternaltoolsnoviewpermissions'] = 'Vezi instrumentele externe ale cursului';
$string['courseid'] = 'Numărul ID-ului cursului';
$string['courseinformation'] = 'Informații despre curs';
$string['courselink'] = 'Mergi la curs';
$string['coursemisconf'] = 'Cursul este mal configurat';
$string['coursetooldeleted'] = '{$a} șters';
$string['createdon'] = 'Creat în';
$string['curllibrarymissing'] = 'Este necesară extensia PHP cURL pentru instrumentul extern.';
$string['custom'] = 'Particularizați parametrii';
$string['custom_config'] = 'Utilizarea configurației personalizate a instrumentului';
$string['custom_help'] = 'Parametrii personalizați sunt setări utilizate de furnizorul de instrumente. De exemplu, un parametru personalizat poate fi utilizat pentru afișare
o resursă specifică de la furnizor. Fiecare parametru trebuie introdus pe o linie separată folosind un format de „nume = valoare”; de exemplu, „capitolul = 3”.

Este sigur să lăsați acest câmp neschimbat, cu excepția cazului în care este indicat de furnizorul de instrumente.';
$string['custominstr'] = 'Particularizați parametrii';
$string['debuglaunch'] = 'Opțiune de depanare';
$string['debuglaunchoff'] = 'Lansare normală';
$string['debuglaunchon'] = 'Lansarea depanării';
$string['default'] = 'Implicit';
$string['default_launch_container'] = 'Container de lansare implicit';
$string['default_launch_container_help'] = 'Containerul de lansare afectează afișarea instrumentului atunci când este lansat de la curs. Unele containere de lansare oferă mai mult ecran
proprietățile imobiliare ale instrumentului, iar altele oferă o senzație mai integrată cu mediul Moodle.

* ** Implicit ** - Utilizați containerul de lansare specificat de configurația instrumentului.
* ** Încorporați ** - Instrumentul este afișat în fereastra Moodle existentă, într-un mod similar cu majoritatea celorlalte tipuri de activități.
* ** Încorporați, fără blocuri ** - Instrumentul este afișat în fereastra existentă Moodle, cu doar comenzile de navigare
         În partea de sus a paginii.
* ** Fereastră nouă ** - Instrumentul se deschide într-o fereastră nouă, ocupând tot spațiul disponibil.
         În funcție de browser, se va deschide într-o filă nouă sau într-o fereastră pop-up.
         Este posibil ca browserele să împiedice deschiderea ferestrei noi.';
$string['delegate'] = 'Delegat profesor';
$string['delegate_tool'] = 'Așa cum se specifică în definiția Deep Linking sau Delegate la profesor';
$string['delete'] = 'Ștergeți';
$string['delete_confirmation'] = 'Sigur doriți să ștergeți acest instrument preconfigurat?';
$string['deletecoursetool'] = 'Șterge {$a}';
$string['deletecoursetoolconfirm'] = 'Această acțiune va șterge {$a} din instrumentele LTI disponibile în cursul tău.';
$string['deletecoursetoolwithusageconfirm'] = '{$a} este utilizat în prezent în cel puțin o activitate din cursul tău. Dacă ștergi acest instrument, activitățile care îl folosesc nu vor mai funcționa.<br><br>Ești sigur că vrei să ștergi {$a}?';
$string['deletetype'] = 'Ștergeți instrumentul preconfigurat';
$string['display_description'] = 'Afișează descrierea activității cînd studenții accesează instrumentul';
$string['display_description_help'] = 'Conținutul acestui instrument este afișat încorporat într-o pagină a cursului. Această setare determină dacă descrierea activității este afișată în pagina respectivă.';
$string['display_name'] = 'Afișați numele activității când studenții accesează instrumentul';
$string['display_name_help'] = 'Conținut din acest instrument este afișat încorporat într-o pagină a cursului. Această setare determină dacă denumirea activității este afișată în pagina respectivă.';
$string['domain_mismatch'] = 'Domeniul URL-ului instrumentului nu se potrivește cu configurația instrumentului.';
$string['donot'] = 'Nu trimite';
$string['donotaccept'] = 'Nu accepta';
$string['donotallow'] = 'Nu permite';
$string['dontshowinactivitychooser'] = 'Nu afișa în fereastra de selectare a activității';
$string['duplicateregurl'] = 'Această adresă URL de înregistrare este deja utilizată';
$string['dynreg_update_btn_new'] = 'Înregistrați ca instrument extern nou';
$string['dynreg_update_btn_update'] = 'Actualizează';
$string['dynreg_update_name'] = 'Denumirea instrumentului';
$string['dynreg_update_notools'] = 'Nu a fost găsit niciun instrument în context.';
$string['dynreg_update_text'] = 'Există instrumente existente atașate domeniului de înregistrare. Doriți să actualizați unul deja instalat
instrument extern sau creați un nou instrument extern?';
$string['dynreg_update_url'] = 'Legătură principală';
$string['dynreg_update_version'] = 'Versiune LTI';
$string['dynreg_update_warn_dupdomain'] = 'Nu este recomandat să aveți multiple instrumente externe în același domeniu.';
$string['editdescription'] = 'Faceți click aici pentru a oferi o descriere acestui instrument';
$string['editmanualinstancedeprecationwarning'] = 'Activitățile Instrument extern configurate manual nu mai sunt acceptate. Nu vă faceți griji, această activitate va funcționa în continuare așa cum este, dar nu mai puteți face modificări la configurația instrumentului de aici.
<br><br>
Pentru a face modificări instrumentului sau pentru a crea noi activități cu acesta, instrumentul trebuie adăugat la cursul în meniul cursului Mai multe > Instrumente externe LTI. Apoi, veți putea crea activități noi, selectând instrumentul direct în selectorul de activități.
<br><br>
Puteți citi mai multe despre adăugarea instrumentelor externe LTI în documentația <a href="{$a}" target="_blank">Instrument extern</a>.';
$string['edittype'] = 'Editați instrumentul preconfigurat';
$string['embed'] = 'Încorporat';
$string['embed_no_blocks'] = 'Încorporați, fără blocuri';
$string['enableemailnotification'] = 'Trimiteți e-mailuri de notificare';
$string['enableemailnotification_help'] = 'Dacă este activat, elevii vor primi notificări prin e-mail atunci când trimiterile lor de instrumente sunt notate.';
$string['enterkeyandsecret'] = 'Introduceți cheia de consum și secretul partajat';
$string['enterkeyandsecret_help'] = 'Dacă vi s-a dat o cheie de consum și / sau un secret comun, introduceți-le aici';
$string['entitycourseexternaltools'] = 'Instrumente externe LTI';
$string['errorbadurl'] = 'Adresa URL nu este un instrument URL valid sau un cartuș.';
$string['errorincorrectconsumerkey'] = 'Cheia consumatorului este incorectă.';
$string['errorinvaliddata'] = 'Datele nu sunt valide: {$a}';
$string['errorinvalidmediatype'] = 'Tipul de conținut media nu este valid: {$a}';
$string['errorinvalidresponseformat'] = 'Format nevalid de răspuns la conținut.';
$string['errormisconfig'] = 'Instrument neconfigurat. Vă rugăm să cereți administratorului Moodle să repare configurația instrumentului.';
$string['errortooltypenotfound'] = 'Tipul instrumentului LTI nu a fost găsit.';
$string['existing_window'] = 'Fereastră existentă';
$string['extensions'] = 'Servicii de extensie LTI';
$string['external_tool_type'] = 'Instrument preconfigurat';
$string['external_tool_type_help'] = '* ** Automat, pe baza URL-ului instrumentului ** - Cea mai bună configurație a instrumentului este selectată automat. Dacă adresa URL a instrumentului nu este recunoscută, este posibil să fie necesară introducerea manuală a detaliilor de configurare a instrumentului.
* ** Un instrument preconfigurat specific ** - Configurarea instrumentului pentru instrumentul specificat va fi utilizată atunci când comunicați cu furnizorul extern de instrumente. Dacă adresa URL a instrumentului nu pare să aparțină furnizorului de instrumente, va fi afișat un avertisment. Nu este întotdeauna necesar să introduceți o adresă URL a instrumentului.
* ** Configurare personalizată ** - Este posibil să fie necesară introducerea manuală a unei chei de consum și a unui secret partajat. Cheia de consum și secretul partajat pot fi obținute de la furnizorul de instrumente. Cu toate acestea, nu toate instrumentele necesită o cheie de consumator și un secret comun, caz în care câmpurile pot fi lăsate necompletate.

### Editarea instrumentului preconfigurat

Trei pictograme sunt disponibile după meniul derulant al instrumentului preconfigurat:

* ** Adăugare ** - Creați o configurație a instrumentului la nivel de curs. Toate instanțele de instrumente externe din acest curs pot utiliza configurația instrumentului.
* ** Editați ** - Selectați un instrument la nivel de curs din meniul derulant, apoi faceți clic pe această pictogramă. Detaliile despre configurația instrumentului pot fi editate.
* ** Ștergeți ** - Eliminați instrumentul selectat la nivel de curs.';
$string['external_tool_types'] = 'Instrumente preconfigurate';
$string['failedtoconnect'] = 'Moodle nu a putut comunica cu sistemul "{$a}"';
$string['failedtocreatetooltype'] = 'Nu s-a putut crea instrumentul nou. Verificați adresa URL și încercați din nou.';
$string['failedtodeletetoolproxy'] = 'Ștergerea înregistrării instrumentului nu a reușit. Poate fi necesar să accesați „Gestionați înregistrările de instrumente externe” și să le ștergeți manual.';
$string['filter_basiclti_configlink'] = 'Configurați site-urile preferate și parolele acestora';
$string['filter_basiclti_password'] = 'Parola este obligatorie';
$string['filterconfig'] = 'Administrare LTI';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = 'Utilizați o configurație existentă pentru instanța configurată greșit';
$string['fixnew'] = 'Configurare nouă';
$string['fixnewconf'] = 'Definiți o nouă configurație pentru instanța configurată greșit';
$string['fixold'] = 'Folosește existent';
$string['force_ssl'] = 'Forțează SSL';
$string['force_ssl_help'] = 'Selectarea acestei opțiuni forțează toate lansările către acest furnizor de instrumente să utilizeze SSL.

În plus, toate cererile de servicii web de la furnizorul de instrumente vor utiliza SSL.

Dacă utilizați această opțiune, confirmați că acest site Moodle și furnizorul de instrumente acceptă SSL.';
$string['forced_help'] = 'Această setare a fost forțată într-o configurație a instrumentului la nivel de curs sau de site. Este posibil să nu o modificați din această interfață.';
$string['generaltool'] = 'Instrument general';
$string['global_tool_types'] = 'Instrumente preconfigurate';
$string['grading'] = 'Rutare de calificare';
$string['icon_url'] = 'URL pictogramă';
$string['icon_url_help'] = 'URL-ul pictogramei permite modificarea pictogramei care apare în lista cursurilor pentru această activitate. În loc să folosiți valoarea implicită
Pictograma LTI, poate fi specificată o pictogramă care transmite tipul de activitate.';
$string['id'] = 'Identificator';
$string['indicator:cognitivedepth'] = 'LTI cognitiv';
$string['indicator:cognitivedepth_help'] = 'Acest indicator se bazează pe profunzimea cognitivă atinsă de student într-o activitate LTI.';
$string['indicator:cognitivedepthdef'] = 'LTI cognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Participantul a atins acest procent din angajamentul cognitiv oferit de activitățile LTI în acest interval de analiză (niveluri = Fără vizualizare, Vizualizare, Trimitere, Vizualizare feedback)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'LTI social';
$string['indicator:socialbreadth_help'] = 'Acest indicator se bazează pe amploarea socială la care a ajuns studentul într-o activitate LTI.';
$string['indicator:socialbreadthdef'] = 'LTI social';
$string['indicator:socialbreadthdef_help'] = 'Participantul a atins acest procent din implicarea socială oferită de activitățile LTI în timpul acestui interval de analiză (Nivele = Fără participare, Participant singur, Participant cu alții)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['initiatelogin'] = 'Lansați adresa URL de autentificare';
$string['initiatelogin_help'] = 'Adresa URL a instrumentului către care urmează să fie trimise cererile de inițiere a unei autentificări. Această adresă URL este necesară înainte ca un mesaj să poată fi trimis cu succes instrumentului.';
$string['invalidid'] = 'ID LTI a fost incorect';
$string['jwtsecurity'] = 'LTI 1.3';
$string['keytype'] = 'Tipul cheii publice';
$string['keytype_help'] = 'Metoda de autentificare utilizată pentru validarea instrumentului.';
$string['keytype_keyset'] = 'URL-ul setului de taste';
$string['keytype_rsa'] = 'Tasta RSA';
$string['launch_in_moodle'] = 'Instrument de lansare în Moodle';
$string['launch_in_popup'] = 'Lansați instrumentul într-o fereastră pop-up';
$string['launch_url'] = 'Adresa URL a instrumentului';
$string['launch_url_help'] = 'Adresa URL a instrumentului indică adresa web a Instrumentului extern și poate conține informații suplimentare, cum ar fi resursa de afișat.
Dacă nu sunteți sigur ce să introduceți pentru adresa URL a instrumentului, vă rugăm să consultați furnizorul de instrumente pentru mai multe informații.

Puteți introduce o adresă URL a cartușului dacă aveți una, iar restul detaliilor formularului se vor completa automat.

Dacă ați selectat un instrument preconfigurat, este posibil să nu fie nevoie să introduceți o adresă URL a instrumentului. Dacă legătura cu instrumentul este utilizată doar pentru lansare
în sistemul furnizorului de instrumente și nu mergeți la o resursă specifică, probabil va fi cazul.';
$string['launchinpopup'] = 'Lansați containerul';
$string['launchinpopup_help'] = 'Containerul de lansare afectează afișarea instrumentului atunci când este lansat de la curs. Unele containere de lansare oferă mai mult ecran
proprietățile imobiliare ale instrumentului, iar altele oferă o senzație mai integrată cu mediul Moodle.

* ** Implicit ** - Utilizați containerul de lansare specificat de configurația instrumentului.
* ** Încorporați ** - Instrumentul este afișat în fereastra Moodle existentă, într-un mod similar cu majoritatea celorlalte tipuri de activități.
* ** Încorporați, fără blocuri ** - Instrumentul este afișat în fereastra existentă Moodle, cu doar comenzile de navigare
         În partea de sus a paginii.
* ** Fereastră nouă ** - Instrumentul se deschide într-o fereastră nouă, ocupând tot spațiul disponibil.
         În funcție de browser, se va deschide într-o filă nouă sau într-o fereastră pop-up.
         Este posibil ca browserele să împiedice deschiderea ferestrei noi.';
$string['launchoptions'] = 'Opțiuni de lansare';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'Adăugați configurații de instrumente specifice cursului';
$string['lti:addinstance'] = 'Adăugați un nou instrument extern';
$string['lti:addmanualinstance'] = 'Adăugați un instrument configurat manual';
$string['lti:addmanualinstanceprohibitederror'] = 'Crearea manuală a instrumentelor fără definiție de instrument de curs nu mai este acceptată. Creați mai întâi un instrument de curs și apoi utilizați-l pentru a crea instanțe de activitate.';
$string['lti:addpreconfiguredinstance'] = 'Adăugați un instrument preconfigurat';
$string['lti:admin'] = 'Fii administrator atunci când instrumentul este lansat';
$string['lti:grade'] = 'Vizualizați notele returnate de instrumentul extern';
$string['lti:manage'] = 'Fiți instructor atunci când instrumentul este lansat';
$string['lti:requesttooladd'] = 'Solicitați ca un instrument să fie configurat la nivel de site';
$string['lti:view'] = 'Lansați activități de instrumente externe';
$string['lti_administration'] = 'Editați instrumentul preconfigurat';
$string['lti_errormsg'] = 'Instrumentul a returnat următorul mesaj de eroare: „{$a}”';
$string['lti_launch_error'] = 'A apărut o eroare la lansarea instrumentului extern:';
$string['lti_launch_error_tool_request'] = '<p>
Pentru a trimite o cerere pentru ca un administrator să finalizeze configurarea instrumentului, faceți clic pe <a href="{$a->admin_request_url} "target =" _ top "> aici </a>.
</p>';
$string['lti_launch_error_unsigned_help'] = '<p> Această eroare poate fi rezultatul lipsei unei chei de consum și a unui secret comun pentru furnizorul de instrumente. </p>
<p> Dacă aveți o cheie de consum și un secret partajat, îl puteți introduce atunci când editați instanța externă a instrumentului (asigurați-vă că sunt vizibile opțiunile avansate). </p>
<p> Alternativ, puteți <a href="{$a->course_tool_editor} "> crea o configurație a furnizorului de instrumente la nivel de curs </a>. </p>';
$string['lti_tool_request_added'] = 'Cererea de configurare a instrumentului a fost trimisă cu succes. Poate fi necesar să contactați un administrator pentru a finaliza configurarea instrumentului.';
$string['lti_tool_request_existing'] = 'O configurație a instrumentului pentru domeniul instrumentului a fost deja trimisă.';
$string['ltisettings'] = 'Setări LTI';
$string['ltiunknownserviceapicall'] = 'Apel API de serviciu necunoscut LTI.';
$string['ltiversion'] = 'Versiunea LTI';
$string['ltiversion_help'] = 'Versiunea LTI utilizată pentru semnarea mesajelor și a cererilor de servicii: LTI 1.0 / 1.1 și LTI 2.0 utilizează profilul de securitate OAuth 1.0A; LTI 1.3.0 folosește JWT-uri.';
$string['main_admin'] = 'Ajutor general';
$string['main_admin_help'] = 'Instrumentele externe permit utilizatorilor Moodle să interacționeze cu resursele de învățare găzduite de la distanță. Printr-un protocol special de lansare, instrumentul la distanță are acces la informații generale despre utilizatorul de lansare. De exemplu, numele instituției, ID-ul cursului, ID-ul utilizatorului și alte informații, cum ar fi numele sau adresa de e-mail a utilizatorului.

Instrumentele enumerate pe această pagină sunt separate în trei categorii:

* ** Activ ** - Acești furnizori de instrumente au fost aprobați și configurați de un administrator. Instrumentele pot fi utilizate din orice curs de pe acest site. Dacă se introduce o cheie a consumatorului și o cheie secretă, se stabilește o relație de încredere între acest site și instrumentul la distanță, oferind un canal de comunicare sigur.
* ** În așteptare ** - Acești furnizori de instrumente au venit printr-un import de pachete, dar nu au fost configurați de un administrator. Profesorii pot folosi în continuare instrumente de la acești furnizori dacă au o cheie a consumatorului și o cheie secretă, sau dacă niciuna nu este necesară.
* ** Respins ** - Acești furnizori de instrumente sunt semnalizați ca fiind cei pe care un administrator nu intenționează să îi pună la dispoziție pe site. Profesorii pot folosi în continuare instrumente de la acești furnizori dacă au o cheie a consumatotului și o cheie secretă, sau dacă niciuna nu este necesară.';
$string['manage_external_tools'] = 'Gestionați instrumentele';
$string['manage_tool_proxies'] = 'Gestionați înregistrările de instrumente externe';
$string['manage_tools'] = 'Gestionați instrumentele preconfigurate';
$string['manuallyaddtype'] = 'Alternativ, puteți <a href="{$a}"> configura manual un instrument </a>.';
$string['miscellaneous'] = 'Diverse';
$string['misconfiguredtools'] = 'Au fost detectate instanțe neconfigurate ale instrumentului';
$string['missingparameterserror'] = 'Pagina este greșit configurată: „{$a}”';
$string['module_class_type'] = 'Tipul modulului Moodle';
$string['modulename'] = 'Instrument extern';
$string['modulename_help'] = 'Modulul de activitate a instrumentului extern permite elevilor să interacționeze cu resursele de învățare și activitățile de pe alte site-uri web. De exemplu, un instrument extern ar putea oferi acces la un nou tip de activitate sau materiale de învățare de la un editor.

Pentru a crea o activitate externă de instrumente, este necesar un furnizor de instrumente care acceptă LTI (Learning Tools Interoperability). Un profesor poate crea o activitate de instrument extern sau poate folosi un instrument configurat de administratorul site-ului.

Activitățile instrumentului extern diferă de resursele URL în câteva moduri:

* Instrumentele externe sunt conștiente de context, adică au acces la informații despre utilizatorul care a lansat instrumentul, cum ar fi instituția, cursul și numele
* Instrumentele externe acceptă citirea, actualizarea și ștergerea notelor asociate instanței de activitate
* Configurațiile externe ale instrumentelor creează o relație de încredere între site-ul dvs. și furnizorul de instrumente, permițând o comunicare sigură între aceștia';
$string['modulename_link'] = 'mod/lti/view';
$string['modulename_shortcut_link'] = 'mod/lti/view/custom';
$string['modulenameplural'] = 'Instrumente externe';
$string['modulenamepluralformatted'] = 'Instrumente externe';
$string['name'] = 'Nume';
$string['never'] = 'Niciodată';
$string['new_window'] = 'Fereastră nouă';
$string['no_lti_configured'] = 'Nu sunt configurate instrumente externe active.';
$string['no_lti_pending'] = 'Nu există instrumente externe în așteptare.';
$string['no_lti_rejected'] = 'Nu există instrumente externe respinse.';
$string['no_lti_tools'] = 'Nu sunt configurate instrumente externe.';
$string['no_tp_accepted'] = 'Nu există înregistrări de instrumente externe acceptate.';
$string['no_tp_cancelled'] = 'Nu există înregistrări de instrumente externe anulate.';
$string['no_tp_configured'] = 'Nu sunt configurate înregistrări de instrumente externe neînregistrate.';
$string['no_tp_pending'] = 'Nu există înregistrări de instrumente externe în așteptare.';
$string['no_tp_rejected'] = 'Nu există înregistrări de instrumente externe respinse.';
$string['noattempts'] = 'Nu s-au făcut încercări cu această instanță a instrumentului';
$string['nocourseexternaltoolsnotice'] = 'Nu există încă instrumente externe LTI.';
$string['noltis'] = 'Nu există instanțe de instrumente externe';
$string['noprofileservice'] = 'Serviciul de profil nu a fost găsit';
$string['noservers'] = 'Nu s-au găsit servere';
$string['notypes'] = 'În prezent, nu există instrumente LTI configurate în Moodle. Faceți clic pe linkul Instalare de mai sus pentru a adăuga unele.';
$string['noviewusers'] = 'Niciun utilizator nu a fost găsit cu permisiuni pentru a utiliza acest instrument';
$string['oauthsecurity'] = 'LTI 1.0/1.1';
$string['opensslconfiginvalid'] = 'LTI 1.3 necesită ca un openssl.cnf valid să fie configurat și disponibil pentru serverul dvs. web. Vă rugăm să contactați administratorul site-ului pentru a configura și activa openssl pentru acest site.';
$string['optionalsettings'] = 'Setări opționale';
$string['organization'] = 'Detalii în legătură cu organizația';
$string['organizationdescr'] = 'Descrierea organizației';
$string['organizationid_default'] = 'ID-ul organizației implicit';
$string['organizationid_default_help'] = 'Valoarea implicită de utilizat pentru ID-ul organizației. ID-ul site-ului identifică această instalare a Moodle.';
$string['organizationidguid'] = 'ID-ul organizației';
$string['organizationidguid_help'] = 'Un identificator unic pentru această instanță Moodle a fost transmis instrumentului ca GUID de instanță a platformei.

Dacă acest câmp este lăsat necompletat, va fi utilizată valoarea implicită.';
$string['organizationurl'] = 'URL-ul organizației';
$string['organizationurl_help'] = 'Adresa URL de bază a acestei instanțe Moodle.

Dacă acest câmp este lăsat necompletat, va fi utilizată o valoare implicită pe baza configurației site-ului.';
$string['pagesize'] = 'Trimiteri afișate pe pagină';
$string['parameter'] = 'Parametrii instrumentului';
$string['parameter_help'] = 'Parametrii instrumentului sunt setări solicitate de către furnizorul de instrumente în proxy-ul instrument acceptat.';
$string['password'] = 'Secret împărtășit';
$string['password_admin'] = 'Secret împărtășit';
$string['password_admin_help'] = 'Secretul partajat poate fi gândit ca o parolă utilizată pentru autentificarea accesului la instrument. Ar trebui furnizat
împreună cu cheia de consum de la furnizorul de instrumente.

Instrumente care nu necesită comunicare sigură de la Moodle și nu oferă servicii suplimentare (cum ar fi raportarea calificărilor)
s-ar putea să nu necesite un secret comun.';
$string['password_help'] = 'Pentru instrumentele preconfigurate, nu este necesar să introduceți un secret partajat aici, deoarece secretul partajat va fi
furnizate ca parte a procesului de configurare.

Acest câmp trebuie introdus dacă se creează un link către un furnizor de instrumente care nu este deja configurat.
Dacă furnizorul de instrumente trebuie utilizat de mai multe ori în acest curs, adăugarea unei configurații a instrumentului de curs este o idee bună.

Secretul partajat poate fi gândit ca o parolă utilizată pentru autentificarea accesului la instrument. Ar trebui furnizat
împreună cu cheia de consum de la furnizorul de instrumente.

Instrumente care nu necesită comunicare sigură de la Moodle și nu oferă servicii suplimentare (cum ar fi raportarea calificărilor)
s-ar putea să nu necesite un secret comun.';
$string['pending'] = 'În progres';
$string['pluginadministration'] = 'Administrarea instrumentelor externe';
$string['pluginname'] = 'Instrument extern';
$string['preferheight'] = 'Înălțimea preferată';
$string['preferwidget'] = 'Preferă lansarea widgetului';
$string['preferwidth'] = 'Lățimea preferată';
$string['press_to_submit'] = 'Apăsați pentru a lansa această activitate';
$string['privacy'] = 'Confidențialitate';
$string['privacy:metadata:coursefullname'] = 'Numele complet al cursului de la care utilizatorul accesează LTI Consumer';
$string['privacy:metadata:courseid'] = 'Identificatorul cursului de la care utilizatorul accesează LTI Consumer';
$string['privacy:metadata:courseidnumber'] = 'Numărul de identificare al cursului de la care utilizatorul accesează LTI Consumer';
$string['privacy:metadata:courseshortname'] = 'Numele scurt al cursului de la care utilizatorul accesează LTI Consumer';
$string['privacy:metadata:createdby'] = 'Utilizatorul care a creat înregistrarea';
$string['privacy:metadata:email'] = 'Adresa de e-mail a utilizatorului care accesează consumatorul LTI';
$string['privacy:metadata:externalpurpose'] = 'Consumatorul LTI furnizează informații despre utilizator și context furnizorului de instrumente LTI.';
$string['privacy:metadata:firstname'] = 'Prenumele utilizatorului care accesează LTI Consumer';
$string['privacy:metadata:fullname'] = 'Numele complet al utilizatorului care accesează consumatorul LTI';
$string['privacy:metadata:lastname'] = 'Numele de utilizator al utilizatorului care accesează LTI Consumer';
$string['privacy:metadata:lti_submission'] = 'Depunere LTI';
$string['privacy:metadata:lti_submission:datesubmitted'] = 'Marcajul de timp care indică momentul trimiterii';
$string['privacy:metadata:lti_submission:dateupdated'] = 'Marcajul de timp care indică când a fost modificată trimiterea';
$string['privacy:metadata:lti_submission:gradepercent'] = 'Nota pentru utilizator ca procentaj';
$string['privacy:metadata:lti_submission:originalgrade'] = 'Nota originală pentru utilizator';
$string['privacy:metadata:lti_submission:userid'] = 'ID-ul utilizatorului care a trimis pentru activitatea LTI';
$string['privacy:metadata:lti_tool_proxies'] = 'Proxy-uri LTI';
$string['privacy:metadata:lti_tool_proxies:name'] = 'Numele proxy LTI';
$string['privacy:metadata:lti_types'] = 'Tipuri LTI';
$string['privacy:metadata:lti_types:name'] = 'Numele de tip LTI';
$string['privacy:metadata:role'] = 'Rolul în curs pentru utilizatorul care accesează LTI Consumer';
$string['privacy:metadata:timecreated'] = 'Când a fost creată înregistrarea';
$string['privacy:metadata:timemodified'] = 'Când a fost modificată înregistrarea';
$string['privacy:metadata:userid'] = 'ID-ul utilizatorului care accesează consumatorul LTI';
$string['privacy:metadata:useridnumber'] = 'Numărul de identificare al utilizatorului care accesează consumatorul LTI';
$string['privacy:metadata:username'] = 'Numele de utilizator al utilizatorului care accesează consumatorul LTI';
$string['publickey'] = 'Cheie publică';
$string['publickey_help'] = 'Cheia publică (în format PEM) furnizată de instrument pentru a permite verificarea semnăturilor mesajelor primite și a cererilor de servicii.';
$string['publickeyset'] = 'Set de chei publice';
$string['publickeyset_help'] = 'Set de chei publice de unde acest site va prelua cheia publică a instrumentului pentru a permite verificarea semnăturilor mesajelor primite și a cererilor de servicii.';
$string['quickgrade'] = 'Permiteți clasificarea rapidă';
$string['quickgrade_help'] = 'Dacă este activată, mai multe instrumente pot fi clasificate pe o singură pagină. Adăugați note și comentarii, apoi faceți clic pe butonul „Salvați toate feedback-urile mele” pentru a salva toate modificările pentru pagina respectivă.';
$string['redirect'] = 'Veți fi redirecționat în câteva secunde. Dacă nu sunteți, apăsați butonul.';
$string['redirectionuris'] = 'URI (uri) de redirecționare';
$string['redirectionuris_help'] = 'O listă de URI-uri (una pe fiecare linie) pe care instrumentul le folosește atunci când face cereri de autorizare. Cel puțin unul trebuie să fie înregistrat înainte ca un mesaj să poată fi trimis cu succes instrumentului.';
$string['register'] = 'Inregistreaza-te';
$string['register_warning'] = 'Pagina de înregistrare pare să dureze ceva timp să se deschidă. Dacă nu apare, verificați dacă ați introdus adresa URL corectă în setările de configurare. Dacă Moodle folosește https, asigurați-vă că instrumentul pe care îl configurați acceptă https și utilizați https în adresa URL.';
$string['registertype'] = 'Configurați o nouă înregistrare a instrumentului extern';
$string['registration_options'] = 'Opțiuni de înregistrare';
$string['registrationname'] = 'Numele furnizorului de instrumente';
$string['registrationname_help'] = 'Introduceți numele furnizorului de instrumente înregistrat.';
$string['registrationurl'] = 'Adresa URL de înregistrare';
$string['registrationurl_help'] = 'Adresa URL de înregistrare ar trebui să fie disponibilă de la furnizorul de instrumente ca locație către care trebuie trimise cererile de înregistrare.';
$string['reject'] = 'Respinge';
$string['rejected'] = 'Respins';
$string['resource'] = 'Resursă';
$string['resourcekey'] = 'Cheia consumatorului';
$string['resourcekey_admin'] = 'Cheia consumatorului';
$string['resourcekey_admin_help'] = 'Cheia de consum poate fi gândită ca un nume de utilizator utilizat pentru autentificarea accesului la instrument.
Poate fi folosit de furnizorul de instrumente pentru a identifica în mod unic site-ul Moodle de pe care utilizatorii se lansează în instrument.

Cheia de consum trebuie furnizată de furnizorul de instrumente. Metoda de a obține o cheie de consum variază între
furnizorii de instrumente. Poate fi un proces automat sau poate necesita un dialog cu furnizorul de instrumente.

Instrumente care nu necesită comunicare sigură de la Moodle și nu oferă servicii suplimentare (cum ar fi raportarea calificărilor)
s-ar putea să nu necesite o cheie de resursă.';
$string['resourcekey_help'] = 'Pentru instrumentele preconfigurate, nu este necesar să introduceți o cheie de resursă aici, deoarece va fi cheia de consum
furnizate ca parte a procesului de configurare.

Acest câmp trebuie introdus dacă se creează un link către un furnizor de instrumente care nu este deja configurat.
Dacă furnizorul de instrumente trebuie utilizat de mai multe ori în acest curs, adăugarea unei configurații a instrumentului de curs este o idee bună.

Cheia de consum poate fi gândită ca un nume de utilizator utilizat pentru autentificarea accesului la instrument.
Poate fi folosit de furnizorul de instrumente pentru a identifica în mod unic site-ul Moodle de pe care utilizatorii se lansează în instrument.

Cheia de consum trebuie furnizată de furnizorul de instrumente. Metoda de a obține o cheie de consum variază între
furnizorii de instrumente. Poate fi un proces automat sau poate necesita un dialog cu furnizorul de instrumente.

Instrumente care nu necesită comunicare sigură de la Moodle și nu oferă servicii suplimentare (cum ar fi raportarea calificărilor)
s-ar putea să nu necesite o cheie de resursă.';
$string['resourceurl'] = 'Adresa URL a resursei';
$string['restricttocategory'] = 'Restricționează la categorie';
$string['restricttocategory_help'] = 'Pentru a restricționa folosirea acestui instrument în cadrul unei categorii, selectează categoria sau categoriile din listă.';
$string['return_to_course'] = 'Faceți clic pe <a href="{$a->link} "target ="_ top "> aici </a> pentru a reveni la curs.';
$string['saveallfeedback'] = 'Salvează tot feedback-ul meu';
$string['search:activity'] = 'Instrument extern - informații despre activitate';
$string['secure_icon_url'] = 'Adresa URL a pictogramei securizate';
$string['secure_icon_url_help'] = 'Similar cu adresa URL a pictogramei, dar utilizat atunci când site-ul este accesat în siguranță prin SSL. Acest câmp este pentru a împiedica browserul să afișeze un avertisment cu privire la o imagine nesigură.';
$string['secure_launch_url'] = 'Adresa URL a instrumentului securizat';
$string['secure_launch_url_help'] = 'Similar cu adresa URL a instrumentului, dar utilizat în locul URL-ului instrumentului, dacă este necesară o securitate ridicată. Moodle va utiliza adresa URL a instrumentului securizat în loc de adresa URL a instrumentului dacă site-ul Moodle este accesat prin SSL sau dacă configurația instrumentului este setată să se lanseze întotdeauna prin SSL.

Adresa URL a instrumentului poate fi setată și la o adresă https pentru a forța lansarea prin SSL, iar acest câmp poate fi lăsat necompletat.';
$string['selectcontent'] = 'Selectați conținut';
$string['selectcontentvalidationerror'] = 'Trebuie să selectezi conținut pentru această activitate.';
$string['send'] = 'Trimite';
$string['services'] = 'Servicii';
$string['services_help'] = 'Selectați acele servicii pe care doriți să le oferiți furnizorului de instrumente. Pot fi selectate mai multe servicii.';
$string['setupoptions'] = 'Opțiuni de configurare';
$string['share_email'] = 'Distribuiți e-mailul lansatorului cu instrumentul';
$string['share_email_admin'] = 'Distribuiți e-mailul lansatorului cu instrumentul';
$string['share_email_admin_help'] = 'Specificați dacă adresa de e-mail a utilizatorului care lansează instrumentul va fi partajată furnizorului de instrumente.
Furnizorul de instrumente poate avea nevoie de adresele de e-mail ale lansatorului pentru a distinge utilizatorii cu același nume în interfața de utilizare sau pentru a trimite e-mailuri
utilizatorilor pe baza acțiunilor din cadrul instrumentului.';
$string['share_email_help'] = 'Specify whether the e-mail address of the user launching the tool will be shared with the tool provider.

The tool provider may need launcher\'s email addresses to distinguish users with the same name, or send emails to users based on actions within the tool.

Note that this setting may be overridden in the tool configuration.';
$string['share_name'] = 'Distribuiți numele lansatorului cu instrumentul';
$string['share_name_admin'] = 'Distribuiți numele lansatorului cu instrumentul';
$string['share_name_admin_help'] = 'Specificați dacă numele complet al utilizatorului care lansează instrumentul trebuie distribuit furnizorului de instrumente.
Este posibil ca furnizorul de instrumente să aibă nevoie de numele lansatorilor pentru a afișa informații semnificative în cadrul instrumentului.';
$string['share_name_help'] = 'Specificați dacă numele complet al utilizatorului care lansează instrumentul trebuie distribuit furnizorului de instrumente.

Este posibil ca furnizorul de instrumente să aibă nevoie de numele lansatorilor pentru a afișa informații semnificative în cadrul instrumentului.

Rețineți că această setare poate fi ignorată în configurația instrumentului.';
$string['share_roster'] = 'Permiteți instrumentului să acceseze lista acestui curs';
$string['share_roster_admin'] = 'Instrumentul poate accesa lista de cursuri';
$string['share_roster_admin_help'] = 'Specificați dacă instrumentul poate accesa lista utilizatorilor înscriși la cursuri de la care este lansat acest instrument.';
$string['share_roster_help'] = 'Specificați dacă instrumentul poate accesa lista utilizatorilor înscriși la acest curs.

Rețineți că această setare poate fi ignorată în configurația instrumentului.';
$string['show_in_course_activity_chooser'] = 'Afișați în alegerea activității și ca instrument preconfigurat';
$string['show_in_course_lti1'] = 'Utilizarea configurării instrumentului';
$string['show_in_course_lti1_help'] = 'Acest instrument poate fi afișat în selectorul de activitate pe care un profesor îl poate selecta pentru a-l adăuga la un curs. Alternativ, poate fi afișat în meniul derulant al instrumentului preconfigurat atunci când adăugați un instrument extern la un curs. O altă opțiune este ca configurația instrumentului să fie utilizată numai dacă adresa URL exactă a instrumentului este introdusă la adăugarea unui instrument extern la un curs.';
$string['show_in_course_lti2'] = 'Utilizarea configurării instrumentului';
$string['show_in_course_lti2_help'] = 'Acest instrument poate fi afișat în selectorul de activități pe care un profesor îl poate selecta pentru a adăuga la un curs sau în meniul derulant al instrumentului preconfigurat atunci când adăugați un instrument extern la un curs.';
$string['show_in_course_no'] = 'Nu arata; utilizați numai atunci când este introdus un URL de instrument de potrivire';
$string['show_in_course_preconfigured'] = 'Afișați ca instrument preconfigurat atunci când adăugați un instrument extern';
$string['showinactivitychooser'] = 'Afișează în fereastra de selectare a activității';
$string['sitehost'] = 'Numele gazdei site-ului';
$string['siteid'] = 'ID-ul site-ului';
$string['size'] = 'Parametrii de dimensiune';
$string['submission'] = 'Depunere';
$string['submissions'] = 'Propuneri';
$string['submissionsfor'] = 'Trimiteri pentru {$a}';
$string['subplugintype_ltiresource'] = 'Resurse de servicii LTI';
$string['subplugintype_ltiresource_plural'] = 'Resurse de servicii LTI';
$string['subplugintype_ltiservice'] = 'Serviciu LTI';
$string['subplugintype_ltiservice_plural'] = 'Serviciile LTI';
$string['subplugintype_ltisource'] = 'Sursa LTI';
$string['subplugintype_ltisource_plural'] = 'Surse LTI';
$string['successfullycreatedtooltype'] = 'Instrument nou creat cu succes!';
$string['successfullyfetchedtoolconfigurationfromcontent'] = 'Configurarea instrumentului a fost preluată cu succes din conținutul selectat.';
$string['toggle_debug_data'] = 'Comutați datele de depanare';
$string['tool_config_not_found'] = 'Configurarea instrumentului nu a fost găsită pentru această adresă URL.';
$string['tool_settings'] = 'Setări instrument';
$string['tooldescription'] = 'Descrierea instrumentului';
$string['tooldescription_help'] = 'Descrierea instrumentului care va fi afișat profesorilor în lista de activități.

Aceasta ar trebui să descrie pentru ce este instrumentul și ce face și orice informații suplimentare pe care profesorul trebuie să le cunoască.';
$string['tooldetailsaccesstokenurl'] = 'URL jeton de acces';
$string['tooldetailsauthrequesturl'] = 'Adresa URL a cererii de autentificare';
$string['tooldetailsclientid'] = 'ID-ul clientului';
$string['tooldetailsdeploymentid'] = 'ID de implementare';
$string['tooldetailsmailtosubject'] = 'Configurarea instrumentului LTI';
$string['tooldetailsmodalemail'] = 'Email';
$string['tooldetailsmodallink'] = 'Vezi detaliile configurării';
$string['tooldetailsmodaltitle'] = 'Detalii de configurare a instrumentului';
$string['tooldetailsplatformid'] = 'ID-ul platformei';
$string['tooldetailspublickeyseturl'] = 'Adresa URL a setului de chei publice';
$string['toolisbeingused'] = 'Acest instrument este utilizat de {$a} ori';
$string['toolisnotbeingused'] = 'Acest instrument nu a fost încă utilizat';
$string['toolproxy'] = 'Înregistrări de instrumente externe';
$string['toolproxy_help'] = 'Înregistrările de instrumente externe permit administratorilor de site-uri Moodle să configureze instrumente externe dintr-un proxy de instrumente obținut de la un furnizor de instrumente care susține LTI 2.0. O adresă URL de înregistrare furnizată de furnizorul instrumentului este necesară pentru a iniția procesul. Capacitățile și serviciile oferite furnizorului de instrumente sunt selectate la configurarea unei noi înregistrări.

Înregistrările de instrumente listate pe această pagină sunt separate în patru categorii:

* ** Configurat ** - Aceste înregistrări ale instrumentelor au fost configurate, dar procesul de înregistrare nu a fost încă început.
* ** În așteptare ** - Procesul de înregistrare pentru aceste înregistrări de instrumente a fost început, dar nu sa finalizat. Deschideți și salvați setările pentru ao muta
înapoi la categoria „Configurat”.
* ** Acceptat ** - Aceste înregistrări ale instrumentelor au fost aprobate; resursele specificate în proxy-ul instrumentului vor apărea pe pagina de instrumente preconfigurate
cu starea inițială „În așteptare”.
* ** Respins ** - Aceste înregistrări ale instrumentelor sunt cele care au fost respinse în timpul procesului de înregistrare. Deschideți și salvați setările pentru ao muta
înapoi la categoria „Configurat”, astfel încât procesul de înregistrare să poată fi repornit.';
$string['toolproxyregistration'] = 'Înregistrarea instrumentului extern';
$string['toolregistration'] = 'Înregistrarea instrumentului extern';
$string['toolsetup'] = 'Configurarea instrumentului extern';
$string['tooltypeadded'] = 'A fost adăugat un instrument preconfigurat';
$string['tooltypedeleted'] = 'Instrumentul preconfigurat a fost șters';
$string['tooltypenotdeleted'] = 'Nu s-a putut șterge instrumentul preconfigurat';
$string['tooltypenotfounderror'] = 'Instrumentul LTI utilizat în această activitate a fost șters. Dacă ai nevoie de ajutor, contactează profesorul sau administratorule site-ului.';
$string['tooltypes'] = 'Instrumente';
$string['tooltypeupdated'] = 'Instrument preconfigurat actualizat';
$string['toolurl'] = 'Adresa URL a instrumentului';
$string['toolurl_contentitemselectionrequest'] = 'Adresa URL de selecție a conținutului';
$string['toolurl_contentitemselectionrequest_help'] = 'Adresa URL de selecție a conținutului va fi utilizată pentru a lansa pagina de selecție a conținutului de la furnizorul de instrumente. Dacă este gol, va fi utilizată adresa URL a instrumentului';
$string['toolurl_help'] = 'Adresa URL a instrumentului este utilizată pentru a asocia adresele URL ale instrumentului cu configurația corectă a instrumentului. Prefixarea adresei URL cu http (s) este opțională.

În plus, adresa URL de bază este utilizată ca adresă URL a instrumentului dacă o adresă URL a instrumentului nu este specificată în instanța externă a instrumentului.

De exemplu, o adresă URL de bază a * tool.com * se va potrivi cu următoarele:

* tool.com
* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=10
* www.tool.com/quizzes

O adresă URL de bază a * www.tool.com / quizzes * se va potrivi cu următoarele:

* www.tool.com/quizzes
* tool.com/quizzes
* tool.com/quizzes/take.php?id=10

O adresă URL de bază a * quiz.tool.com * se va potrivi cu următoarele:

* quiz.tool.com
* quiz.tool.com/take.php?id=10

Dacă două configurații de instrumente diferite sunt pentru același domeniu, va fi utilizată cea mai specifică potrivire.

De asemenea, puteți introduce o adresă URL a cartușului dacă aveți una și detaliile instrumentului vor fi completate automat.';
$string['toolurlplaceholder'] = 'Adresa URL a instrumentului ...';
$string['typename'] = 'Numele instrumentului';
$string['typename_help'] = 'Numele instrumentului este utilizat pentru a identifica furnizorul de instrumente din cadrul Moodle. Numele introdus va fi vizibil pentru profesori atunci când adaugă instrumente externe în cadrul cursurilor.';
$string['types'] = 'Tipuri';
$string['unabletocreatetooltype'] = 'Instrumentul nu a putut fi creat';
$string['unabletofindtooltype'] = 'Nu s-a putut găsi instrumentul pentru {$a->id}';
$string['unknownstate'] = 'Stare necunoscută';
$string['update'] = 'Actualizează';
$string['usage'] = 'Contor de utilizare';
$string['useraccountinformation'] = 'Informații despre contul de utilizator';
$string['userpersonalinformation'] = 'Informații personale ale utilizatorului';
$string['using_tool_cartridge'] = 'Utilizarea cartușului pentru scule';
$string['using_tool_configuration'] = 'Utilizarea configurării instrumentului:';
$string['validurl'] = 'Un URL valid trebuie să înceapă cu http(s)://';
$string['viewsubmissions'] = 'Vizualizați trimiterile și ecranul de notare';
