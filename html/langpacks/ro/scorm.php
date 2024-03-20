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
 * Strings for component 'scorm', language 'ro', version '4.1'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Activare';
$string['activityloading'] = 'Veţi fi direcţionat automat spre activitatea solicitată în';
$string['activityoverview'] = 'Aveți pachete SCORM care necesită atenție';
$string['activitypleasewait'] = 'Se încarcă activitatea, vă rugăm așteptați ...';
$string['adminsettings'] = 'Setări admin';
$string['advanced'] = 'Parametri';
$string['aicchacpkeepsessiondata'] = 'Sesiune de date AICC HACP';
$string['aicchacpkeepsessiondata_desc'] = 'Durata de timp în zile pentru păstrarea datelor externe ale sesiunii AICC HACP (o setare ridicată va umple tabelul cu date vechi, dar poate fi utilă la depanare)';
$string['aicchacptimeout'] = 'Timeout AICC HACP';
$string['aicchacptimeout_desc'] = 'Durata în minute în care o sesiune externă AICC HACP poate rămâne deschisă';
$string['aiccuserid'] = 'AICC trece ID-ul numeric de utilizator';
$string['aiccuserid_desc'] = 'Standardul AICC pentru numele de utilizator este foarte restrictiv în comparație cu Moodle și permite numai caractere alfanumerice, liniuță și subliniere. Perioadele, spațiile și simbolul @ nu sunt permise. Dacă este activat, numerele de ID de utilizator sunt transmise pachetului AICC în loc de nume de utilizator.';
$string['aliasonly'] = 'Când selectați un fișier imsmanifest.xml dintr-un depozit, trebuie să utilizați un alias / comandă rapidă pentru acest fișier.';
$string['allowapidebug'] = 'Activați depanarea și urmărirea API-ului (setați masca de captură cu apidebugmask)';
$string['allowtypeaicchacp'] = 'Activați AICC HACP extern';
$string['allowtypeaicchacp_desc'] = 'Dacă este activat, acest lucru permite comunicarea externă AICC HACP fără a necesita conectarea utilizatorului pentru solicitările de postare din pachetul extern AICC';
$string['allowtypeexternal'] = 'Activați tipul de pachet extern';
$string['allowtypeexternalaicc'] = 'Activați adresa URL AICC directă';
$string['allowtypeexternalaicc_desc'] = 'Dacă este activată, aceasta permite o adresă URL directă către un pachet AICC simplu';
$string['allowtypelocalsync'] = 'Activați tipul de pachet descărcat';
$string['apidebugmask'] = 'Mască de captare a depanării API - utilizați o regex simplă pe &lt;username&gt;:&lt;activityname&gt; de exemplu. admin:. * va depana numai pentru utilizatorul administrator';
$string['areacontent'] = 'Fișiere de conținut';
$string['areapackage'] = 'Pachet fișiere';
$string['asset'] = 'Fişier curs';
$string['assetlaunched'] = 'Fişier - Afişat';
$string['attempt'] = 'Încercare';
$string['attempt1'] = '1 încercare de parcurgere';
$string['attempts'] = 'Încercări de parcurgere';
$string['attemptsmanagement'] = 'Managementul încercărilor';
$string['attemptstatusall'] = 'Tabloul de bord și pagina de intrare';
$string['attemptstatusentry'] = 'Numai pagina de intrare';
$string['attemptstatusmy'] = 'Doar Dashboard';
$string['attemptsx'] = '{$a} încercări de parcurgere';
$string['attr_error'] = 'Valoare incorectă pentru atributul ({$a->attr}) în tag-ul {$a->tag}.';
$string['autocommit'] = 'Comitere automată';
$string['autocommit_help'] = 'Dacă este activată, datele SCORM sunt salvate automat în baza de date. Util pentru obiectele SCORM care nu își salvează datele în mod regulat.';
$string['autocommitdesc'] = 'Salvați automat datele SCORM dacă pachetul SCORM nu le salvează.';
$string['autocontinue'] = 'Continuare automată';
$string['autocontinue_help'] = 'Dacă este activat, obiectele de învățare ulterioare sunt lansate automat, altfel trebuie utilizat butonul Continuare.';
$string['autocontinuedesc'] = 'Dacă este activat, obiectele de învățare ulterioare sunt lansate automat, altfel trebuie utilizat butonul Continuare.';
$string['averageattempt'] = 'Numărul mediu de încercări de parcurgere';
$string['badarchive'] = 'Trebuie să furnizați un fișier zip valid';
$string['badimsmanifestlocation'] = 'S-a găsit un fișier imsmanifest.xml, dar acesta nu se afla în rădăcina fișierului zip, vă rugăm să împachetați din nou fișierul SCORM';
$string['badmanifest'] = 'Au apărut erori de manifest: vezi înregistrarea erorilor';
$string['browse'] = 'Previzualizare';
$string['browsed'] = 'Căutat';
$string['browsemode'] = 'Mod de previzualizare';
$string['browserepository'] = 'Căutare în depozitul de date';
$string['calculatedweight'] = 'Ponderea calculată';
$string['calendarend'] = 'Obiectul {$a} se închide';
$string['calendarstart'] = '{$a} se deschide';
$string['cannotaccess'] = 'Nu puteți denumi acest script astfel';
$string['cannotfindsco'] = 'Nu s-a putut găsi SCO';
$string['chooseapacket'] = 'Selectaţi sau actualizaţi un pachet';
$string['closebeforeopen'] = 'Ați specificat o dată de închidere înainte de data de deschidere.';
$string['collapsetocwinsize'] = 'Restrângeți TOC când dimensiunea ferestrei de mai jos';
$string['collapsetocwinsizedesc'] = 'Această setare vă permite să specificați dimensiunea ferestrei sub care TOC ar trebui să se restrînsă automat.';
$string['compatibilitysettings'] = 'Setări compatibilitate';
$string['completed'] = 'Finalizat';
$string['completiondetail:allscos'] = 'Completați toate părțile acestei activități';
$string['completiondetail:completionscore'] = 'Primește o notă de {$a} sau mai mare';
$string['completiondetail:completionstatuscompleted'] = 'Finalizează activitatea';
$string['completiondetail:completionstatuscompletedorpassed'] = 'Completați sau promovați activitatea';
$string['completiondetail:completionstatuspassed'] = 'Promovați activitatea';
$string['completionscorerequired'] = 'Necesită notă minimă';
$string['completionscorerequired_help'] = 'Activarea acestei setări va necesita ca un utilizator să aibă cel puțin scorul minim introdus pentru a fi marcat complet în această activitate SCORM, precum și orice alte cerințe de finalizare a activității.';
$string['completionscorerequireddesc'] = 'Pentru finalizare este necesar un scor minim de {$a}';
$string['completionstatus_completed'] = 'Completat';
$string['completionstatus_passed'] = 'Trecut';
$string['completionstatusallscos'] = 'Solicitați tuturor scos-urilor să returneze starea de finalizare';
$string['completionstatusallscos_help'] = 'Unele pachete SCORM conțin mai multe componente sau „scos” - când este activat, toate scosurile din pachet trebuie să returneze lecția_status relevantă pentru ca această activitate să fie marcată ca fiind completă.';
$string['completionstatusrequired'] = 'Solicită status';
$string['completionstatusrequired_help'] = 'Verificarea unuia sau mai multor stări va necesita ca un utilizator să obțină cel puțin unul dintre stările verificate pentru a fi marcat complet în această activitate SCORM, precum și orice alte cerințe de finalizare a activității.';
$string['completionstatusrequireddesc'] = 'Cursantul trebuie să obțină cel puțin unul dintre următoarele stări: {$a}';
$string['confirmloosetracks'] = 'ATENŢIE: un alt pachet a fost ales sau pachetul existent a fost modificat. În cazul în care structura pachetului s-a modificat, este posibil ca în cursul operaţiunii de actualizare unele din înregistrările activităţilor cursanţilor să se piardă.';
$string['contents'] = 'Conţinuturi';
$string['coursepacket'] = 'Pachet curs';
$string['coursestruct'] = 'Structură curs';
$string['crontask'] = 'Procesare de fundal pentru SCORM';
$string['currentwindow'] = 'Fereastra curentă';
$string['datadir'] = 'Eroare sistem de fișiere: Nu se poate crea directorul de date de curs';
$string['defaultdisplaysettings'] = 'Setări implicite de afișare';
$string['defaultgradesettings'] = 'Setări implicite de notă';
$string['defaultothersettings'] = 'Alte setări implicite';
$string['deleteallattempts'] = 'Şterge toate încercările de parcurgere SCORM';
$string['deleteattemptcheck'] = 'Sunteți absolut sigur că doriți să ștergeți complet aceste încercări?';
$string['deleteselected'] = 'Şterge încercările selectate';
$string['deleteuserattemptcheck'] = 'Sunteți absolut sigur că doriți să ștergeți complet toate încercările dumneavoastră?';
$string['details'] = 'Detalii înregistrare activitate';
$string['directories'] = 'Afişare link-uri director';
$string['disabled'] = 'Dezactivat';
$string['display'] = 'Afişare pachet';
$string['displayactivityname'] = 'Afișați numele activității';
$string['displayactivityname_help'] = 'Dacă se afișează sau nu numele activității deasupra playerului SCORM.';
$string['displayattemptstatus'] = 'Afișează starea încercării';
$string['displayattemptstatus_help'] = 'Această preferință permite un rezumat al încercărilor utilizatorilor de a se afișa în blocul de prezentare generală a cursului din Tabloul de bord și / sau pagina de intrare SCORM.';
$string['displayattemptstatusdesc'] = 'Dacă un rezumat al încercărilor utilizatorului este afișat în blocul de prezentare generală a cursului în Tabloul de bord și / sau în pagina de intrare SCORM.';
$string['displaycoursestructure'] = 'Afișați structura cursului pe pagina de intrare';
$string['displaycoursestructure_help'] = 'Dacă este activat, cuprinsul este afișat pe pagina de schiță SCORM.';
$string['displaycoursestructuredesc'] = 'Dacă este activat, cuprinsul este afișat pe pagina de schiță SCORM.';
$string['displaydesc'] = 'Dacă se afișează pachetul SCORM într-o fereastră nouă.';
$string['displaysettings'] = 'Setări afișare';
$string['dnduploadscorm'] = 'Adăugați un pachet SCORM';
$string['domxml'] = 'Librărie externă DOMXML';
$string['element'] = 'Element';
$string['enter'] = 'Intră';
$string['entercourse'] = 'Accesare curs';
$string['errorlogs'] = 'Lista erori';
$string['eventattemptdeleted'] = 'Încercare ștearsă';
$string['eventinteractionsviewed'] = 'Interacțiuni vizualizate';
$string['eventreportviewed'] = 'Raport vizualizat';
$string['eventscolaunched'] = 'Sco lansat';
$string['eventscorerawsubmitted'] = 'Scor SCORM trimis în formă brută';
$string['eventstatussubmitted'] = 'Statutul SCORM trimis';
$string['eventtracksviewed'] = 'Piste vizualizate';
$string['eventuserreportviewed'] = 'Raport utilizator vizualizat';
$string['everyday'] = 'In fiecare zi';
$string['everytime'] = 'La fiecare utilizare';
$string['exceededmaxattempts'] = 'Ați atins numărul maxim de încercări';
$string['exit'] = 'Ieşire curs';
$string['exitactivity'] = 'Ieşire activitate';
$string['expired'] = 'Ne pare rău, această activitate închisă în {$a} nu mai este disponibilă';
$string['external'] = 'Interval actualizare pachete externe';
$string['failed'] = 'Eşuat';
$string['finishscorm'] = 'Dacă ați terminat de vizualizat această resursă, {$a}';
$string['finishscormlinkname'] = 'click aici pentru a vă întoarce la pagina principală';
$string['firstaccess'] = 'Prima accesare';
$string['firstattempt'] = 'Prima încercare parcurgere';
$string['floating'] = 'Plutire';
$string['forceattemptalways'] = 'Întotdeauna';
$string['forceattemptoncomplete'] = 'Când încercarea anterioară a fost finalizată, a trecut sau a eșuat';
$string['forcecompleted'] = 'Forțează finalizarea';
$string['forcecompleted_help'] = 'Dacă este activată, starea încercării curente este forțată să fie „finalizată”. (Se aplică numai pachetelor SCORM 1.2.)';
$string['forcecompleteddesc'] = 'Această preferință setează valoarea implicită pentru setarea de forțează finalizarea';
$string['forcejavascript'] = 'Forțează utilizatorii să activeze JavaScript';
$string['forcejavascript_desc'] = 'Dacă este activat (recomandat), acesta împiedică accesul la obiectele SCORM atunci când JavaScript nu este acceptat / activat într-un browser al utilizatorilor. Dacă este dezactivat, utilizatorul poate vizualiza SCORM, dar comunicarea API va eșua și nu vor fi salvate informații despre notă.';
$string['forcejavascriptmessage'] = 'Este necesar JavaScript pentru a vizualiza acest obiect, vă rugăm să activați JavaScript în browserul dvs. și să încercați din nou.';
$string['forcenewattempts'] = 'Forțează o nouă încercare';
$string['forcenewattempts_help'] = 'Există 3 opțiuni:

* Nu - Dacă o încercare anterioară este finalizată, trecută sau eșuată, cursantului i se va oferi opțiunea de a intra în modul de revizuire sau de a începe o nouă încercare.
* Când încercarea anterioară a fost finalizată, a trecut sau a eșuat - Aceasta se bazează pe pachetul SCORM care stabilește starea „finalizat”, „trecut” sau „eșuat”.
* Întotdeauna - Fiecare reintrare la activitatea SCORM va genera o nouă încercare și cursantului nu va fi readus în același punct în care a atins în încercarea anterioară.';
$string['found'] = 'Manifest găsit';
$string['frameheight'] = 'Înălțimea cadrului de scenă sau a ferestrei.';
$string['framewidth'] = 'Lățimea cadrului de scenă sau a ferestrei.';
$string['fromleft'] = 'De la stânga';
$string['fromtop'] = 'De sus';
$string['fullscreen'] = 'Pe tot ecranul';
$string['general'] = 'Informaţii generale';
$string['gradeaverage'] = 'Punctaj mediu';
$string['gradeforattempt'] = 'Nota pentru încercare';
$string['gradehighest'] = 'Punctaj maxim';
$string['grademethod'] = 'Metodă de punctare';
$string['grademethod_help'] = 'Metoda de notare definește modul în care se determină nota pentru o singură încercare a activității.

Există 4 metode de notare:

* Obiecte de învățare - Numărul de obiecte de învățare finalizate / trecute
* Cea mai mare notă - Cel mai mare scor obținut la toate obiectele de învățare trecute
* Nota medie - Media tuturor scorurilor
* Nota sumă - Suma tuturor scorurilor';
$string['grademethoddesc'] = 'Metoda de notare definește modul în care se determină nota pentru o singură încercare a activității.';
$string['gradereported'] = 'Nota raportată';
$string['gradescoes'] = 'Obiecte de învățare';
$string['gradesettings'] = 'Setări notă';
$string['gradesum'] = 'Sumă punctaje';
$string['height'] = 'Înălţime';
$string['hidden'] = 'Ascunde';
$string['hidebrowse'] = 'Dezactivează mod Previzualizare';
$string['hidebrowse_help'] = 'Modul de previzualizare permite unui student să parcurgă o activitate înainte de a o încerca. Dacă modul previzualizare este dezactivat, butonul de previzualizare este ascuns.';
$string['hidebrowsedesc'] = 'Modul de previzualizare permite unui student să parcurgă o activitate înainte de a o încerca.';
$string['hideexit'] = 'Ascunde link ieşire';
$string['hidereview'] = 'Ascunde buton Verificare';
$string['hidetoc'] = 'Afișați structura cursului în player';
$string['hidetoc_help'] = 'Cum este afișat cuprinsul în playerul SCORM';
$string['hidetocdesc'] = 'Această setare specifică modul în care este afișat cuprinsul în playerul SCORM.';
$string['highestattempt'] = 'Cea mai completă încercare de parcurgere';
$string['identifier'] = 'Identificatorul întrebării';
$string['incomplete'] = 'Incomplet';
$string['indicator:cognitivedepth'] = 'SCORM cognitiv';
$string['indicator:cognitivedepth_help'] = 'Acest indicator se bazează pe profunzimea cognitivă atinsă de cursant într-o activitate SCORM.';
$string['indicator:cognitivedepthdef'] = 'SCORM cognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Participantul a atins acest procent din angajamentul cognitiv oferit de activitățile SCORM în timpul acestui interval de analiză (niveluri = Fără vizualizare, Vizualizare, Trimitere, Vizualizare feedback)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'SCORM social';
$string['indicator:socialbreadth_help'] = 'Acest indicator se bazează pe amploarea socială la care a ajuns cursantul într-o activitate SCORM.';
$string['indicator:socialbreadthdef'] = 'SCORM social';
$string['indicator:socialbreadthdef_help'] = 'Participantul a atins acest procent din angajamentul social oferit de activitățile SCORM pe parcursul acestui interval de analiză (Nivele = Fără participare, Participant singur)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'Informații';
$string['interactions'] = 'Interacţiuni';
$string['invalidactivity'] = 'Activitatea SCORM este incorectă';
$string['invalidhacpsession'] = 'Sesiune HACP nevalidă';
$string['invalidmanifestname'] = 'Doar fișierele imsmanifest.xml sau .zip pot fi selectate';
$string['invalidmanifestresource'] = 'AVERTISMENT: Următoarele resurse au fost menționate în manifest, dar nu au putut fi găsite:';
$string['invalidstatus'] = 'Status-ul nu este valid';
$string['invalidurl'] = 'URL specificat nevalid';
$string['invalidurlhttpcheck'] = 'URL specificat nevalid. Mesaj debug:<pre>{$a->cmsg}</pre>';
$string['last'] = 'Ultima accesare la';
$string['lastaccess'] = 'Ultima accesare';
$string['lastattempt'] = 'Ultima încercare finalizată';
$string['lastattemptlock'] = 'Blocat după ultima încercare';
$string['lastattemptlock_help'] = 'Dacă este activat, un cursant este împiedicat să lanseze playerul SCORM după ce a folosit toate încercările alocate.';
$string['lastattemptlockdesc'] = 'Dacă este activat, un cursantul este împiedicat să lanseze playerul SCORM după ce a folosit toate încercările alocate.';
$string['location'] = 'Afişare bara locaţie';
$string['masteryoverride'] = 'Starea suprascrierilor a scorului de finalizare';
$string['masteryoverride_help'] = 'Dacă este activat și este furnizat un scor de măiestrie, atunci când este apelat LMSFinish și a fost setat un scor brut, starea va fi recalculată folosind scorul brut și scorul de măiestrie și orice statut furnizat de SCORM (inclusiv „incomplet”) va fi suprascris.';
$string['masteryoverridedesc'] = 'Această preferință setează implicit setarea de suprascriere a scorului de finalizare';
$string['max'] = 'Punctaj maxim';
$string['maximumattempts'] = 'Număr încercări de parcurgere';
$string['maximumattempts_help'] = 'Această setare permite restricționarea numărului de încercări. Se aplică numai pentru pachetele SCORM 1.2 și AICC.';
$string['maximumattemptsdesc'] = 'Acest parametru stabileşte numărul maxim implicit de încercări de parcurgere a unei activităţi';
$string['maximumgradedesc'] = 'Acest parametru stabileşte punctajul maxim care poate fi atribuit pentru o activitate';
$string['menubar'] = 'Afişare bară meniuri';
$string['min'] = 'Punctaj minim';
$string['missing_attribute'] = 'Atributul {$a->attr} lipseşte din tag-ul {$a->tag}';
$string['missing_tag'] = 'Atributul {$a->tag} lipseşte';
$string['missingparam'] = 'Un parametru necesar lipsește sau este greșit';
$string['mode'] = 'Mod';
$string['modulename'] = 'Pachet SCORM';
$string['modulename_help'] = 'Un pachet SCORM este o colecție de fișiere care sunt ambalate conform unui standard agreat pentru obiecte de învățare. Modulul de activitate SCORM permite ca pachetele SCORM sau AICC să fie încărcate ca fișier zip și adăugate la un curs.

Conținutul este de obicei afișat pe mai multe pagini, cu navigare între pagini. Există diverse opțiuni pentru afișarea conținutului într-o fereastră pop-up, cu un cuprins, cu butoane de navigare etc. Activitățile SCORM includ, în general, întrebări, notele fiind înregistrate în carnetul de note.

Pot fi utilizate activități SCORM

* Pentru prezentarea de conținut multimedia și animații
* Ca instrument de evaluare';
$string['modulename_link'] = 'mod/scorm/view';
$string['modulenameplural'] = 'Pachete SCORM';
$string['myaiccsessions'] = 'Sesiunea mea AICC';
$string['myattempts'] = 'Încercările mele';
$string['nav'] = 'Afișati navigarea';
$string['nav_help'] = 'Această setare specifică dacă se afișează sau se ascund butoanele de navigare și poziția lor.

Există 3 opțiuni:

* Nu - Butoanele de navigare nu sunt afișate
* Sub conținut - Butoanele de navigare sunt afișate sub conținutul pachetului SCORM
* Flotant - Butoanele de navigare sunt afișate flotante, cu poziția din partea de sus și din stânga determinată de pachet.';
$string['navdesc'] = 'Această setare specifică dacă se afișează sau se ascund butoanele de navigare și poziția acestora.';
$string['navigation'] = 'Navigare';
$string['navpositionleft'] = 'Poziția butoanelor de navigare din stânga în pixeli.';
$string['navpositiontop'] = 'Poziția butoanelor de navigare de sus în pixeli.';
$string['networkdropped'] = 'Playerul SCORM a stabilit că conexiunea dvs. la internet nu este de încredere sau a fost întreruptă. Dacă continuați în această activitate SCORM, este posibil ca progresul dvs. să nu fie salvat. <br />
Ar trebui să ieșiți din activitate acum și să reveniți când aveți o conexiune la internet de încredere.';
$string['newattempt'] = 'Începe o nouă încercare de parcurgere';
$string['next'] = 'Continuare';
$string['no_attributes'] = 'Tag-ul {$a->tag} trebuie să aibă asociate atribute';
$string['no_children'] = 'Tag-ul {$a->tag} trebuie să aibă elemente subordonate';
$string['noactivity'] = 'Nu există activitate';
$string['noattemptsallowed'] = 'Numărul de încercări permise';
$string['noattemptsmade'] = 'Numărul de încercări pe care le-ați făcut';
$string['nolimit'] = 'Nr. nelimitat de încercări de parcurgere';
$string['nomanifest'] = 'Pachet de fișiere incorect - lipsește imsmanifest.xml sau structura AICC';
$string['noprerequisites'] = 'Ne pare rău, dar nu aveți condițiile prealabile necesare pentru a accesa această activitate.';
$string['noreports'] = 'Nu există rapoarte';
$string['normal'] = 'Normal';
$string['noscriptnoscorm'] = 'Browserul dvs. nu acceptă JavaScript sau suportul JavaScript este dezactivat. Este posibil ca acest pachet SCORM să nu redea sau să salveze datele corect.';
$string['not_corr_type'] = 'Tip incorect pentru tag-ul {$a->tag}';
$string['notattempted'] = 'Nu s-a încercat parcurgerea';
$string['notopenyet'] = 'Ne pare rău, această activitate nu este disponibilă până în {$a}';
$string['objectives'] = 'Obiective';
$string['openafterclose'] = 'Ați specificat o dată de deschidere după data de închidere';
$string['optallstudents'] = 'toți utilizatorii';
$string['optattemptsonly'] = 'doar utilizatorii cu încercări';
$string['options'] = 'Opțiuni (împiedicat de unele browsere)';
$string['optionsadv'] = 'Opțiuni (Avansat)';
$string['optionsadv_desc'] = 'Dacă este bifată, lățimea și înălțimea vor fi listate ca setări avansate.';
$string['optnoattemptsonly'] = 'doar utilizatorii care nu au încercări';
$string['organization'] = 'Organizaţie';
$string['organizations'] = 'Organizaţii';
$string['othersettings'] = 'Parametri suplimentari';
$string['package'] = 'Fişier pachet';
$string['package_help'] = 'Fișierul pachet este un fișier zip (sau pif) care conține fișiere de definire a cursului SCORM / AICC.';
$string['packagedir'] = 'Eroare sistem de fișiere: Nu se poate crea directorul pachetului';
$string['packagefile'] = 'Nu a fost specificat un fişier care să conţină pachetul';
$string['packagehdr'] = 'Pachet';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Această setare permite specificarea unei adrese URL pentru pachetul SCORM, mai degrabă decât alegerea unui fișier prin selectorul de fișiere.';
$string['page-mod-scorm-x'] = 'Orice pagină a modulului SCORM';
$string['pagesize'] = 'Dimensiune pagină';
$string['passed'] = 'Admis';
$string['php5'] = 'PHP 5 (DOMXML native library)';
$string['pluginadministration'] = 'Administrarea pachetului SCORM';
$string['pluginname'] = 'Pachet SCORM';
$string['popup'] = 'Fereastră nouă';
$string['popuplaunched'] = 'Acest pachet SCORM a fost lansat într-o fereastră pop-up. Dacă ați terminat vizualizarea acestei resurse, faceți clic aici pentru a reveni la pagina cursului';
$string['popupmenu'] = 'Într-un meniu derulant';
$string['popupopen'] = 'Deschide pachet în fereastră nouă';
$string['popupsblocked'] = 'Se pare că ferestrele pop-up sunt blocate, oprind acest pachet SCORM de la redare. Vă rugăm să verificați setările browserului înainte de a încerca din nou.';
$string['position_error'] = 'Tag-ul {$a->tag} nu poate fi element subordonat al tag-ului {$a->parent}';
$string['preferencespage'] = 'Preferințe doar pentru această pagină';
$string['preferencesuser'] = 'Preferințe pentru acest raport';
$string['prev'] = 'Anterior';
$string['privacy:metadata:aicc:data'] = 'Date personale transmise din subsistemul AICC / SCORM.';
$string['privacy:metadata:aicc:externalpurpose'] = 'Acest plugin trimite date extern utilizând AICC HACP.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'Starea lecției care trebuie urmărită';
$string['privacy:metadata:aicc_session:scormmode'] = 'Modul elementului de urmărit';
$string['privacy:metadata:aicc_session:scormstatus'] = 'Starea elementului de urmărit';
$string['privacy:metadata:aicc_session:sessiontime'] = 'Ora sesiunii care trebuie urmărită';
$string['privacy:metadata:aicc_session:timecreated'] = 'Ora când a fost creat elementul urmărit';
$string['privacy:metadata:attempt'] = 'Numărul încercării';
$string['privacy:metadata:scoes_track:element'] = 'Numele elementului de urmărit';
$string['privacy:metadata:scoes_track:value'] = 'Valoarea elementului dat';
$string['privacy:metadata:scorm_aicc_session'] = 'Informațiile despre sesiune ale AICC HACP';
$string['privacy:metadata:scorm_scoes_track'] = 'Datele urmărite ale SCO-urilor aparținând activității';
$string['privacy:metadata:timemodified'] = 'Ora când a fost modificat ultima dată elementul urmărit';
$string['privacy:metadata:userid'] = 'ID-ul utilizatorului care a accesat activitatea SCORM';
$string['protectpackagedownloads'] = 'Protejați descărcările pachetelor';
$string['protectpackagedownloads_desc'] = 'Dacă este activat, pachetele SCORM pot fi descărcate numai dacă utilizatorul are cursul: capacitatea de gestionare a activităților. Dacă sunt dezactivate, pachetele SCORM pot fi oricând descărcate (prin mobil sau prin alte mijloace).';
$string['raw'] = 'Punctaj preliminar';
$string['regular'] = 'Manifest regulat';
$string['report'] = 'Raport';
$string['reportcountallattempts'] = '{$a->nbattempts} încercări pentru utilizatorii {$a->nbusers}, din rezultatele {$a->nbresults}';
$string['reportcountattempts'] = '{$a->nbresults} rezultate ({$a->nbusers} users)';
$string['reports'] = 'Rapoarte';
$string['repositorynotsupported'] = 'Acest depozit nu acceptă conectarea directă la un fișier imsmanifest.xml.';
$string['response'] = 'Răspuns';
$string['result'] = 'Rezultat';
$string['results'] = 'Rezultate';
$string['review'] = 'Verificare';
$string['reviewmode'] = 'Mod verificare';
$string['rightanswer'] = 'Răspuns corect';
$string['scoes'] = 'Obiecte de învățare';
$string['score'] = 'Punctaj';
$string['scorm:addinstance'] = 'Adăugați un nou pachet SCORM';
$string['scorm:deleteownresponses'] = 'Ștergeți încercările proprii';
$string['scorm:deleteresponses'] = 'Şterge încercări parcurgere SCORM';
$string['scorm:savetrack'] = 'Salvează înregistrări activitate';
$string['scorm:skipview'] = 'Ascunde prezentare generală';
$string['scorm:viewreport'] = 'Afişare rapoarte';
$string['scorm:viewscores'] = 'Afişare punctaje';
$string['scormclose'] = 'Disponibil pentru';
$string['scormcourse'] = 'Curs de învățare';
$string['scormloggingoff'] = 'Jurnalizarea API este dezactivată';
$string['scormloggingon'] = 'Jurnalizarea API este activată';
$string['scormopen'] = 'Disponibil de la';
$string['scormresponsedeleted'] = 'Încercări de parcurgere şterse';
$string['scormstandard'] = 'Modul standard SCORM';
$string['scormstandarddesc'] = 'Când este dezactivat, Moodle permite pachetelor SCORM 1.2 să stocheze mai mult decât permite specificațiile și folosește setările de formatare a numelui complet Moodle atunci când treceți numele utilizatorului pachetului SCORM.';
$string['scormtype'] = 'Tip';
$string['scormtype_help'] = 'Această setare determină modul în care pachetul este inclus în curs. Există până la 4 opțiuni:

* Pachet încărcat - Permite alegerea unui pachet SCORM prin selectorul de fișiere
* Manifest SCORM extern - Permite specificarea unei adrese URL imsmanifest.xml. Notă: dacă adresa URL are un nume de domeniu diferit de site-ul dvs., atunci „Pachetul descărcat” este o opțiune mai bună, întrucât altfel notele nu sunt salvate.
* Pachet descărcat - Permite specificarea unei adrese URL a pachetului. Pachetul va fi dezarhivat și salvat local și actualizat atunci când pachetul extern SCORM este actualizat.
* URL AICC extern - această adresă URL este adresa URL de lansare pentru o singură activitate AICC. În jurul acestuia va fi construit un pachet psuedo.';
$string['scrollbars'] = 'Permite derularea ferestrei';
$string['search:activity'] = 'Pachet SCORM - informații despre activitate';
$string['selectall'] = 'Selectați tot';
$string['selectnone'] = 'De-selectatați tot';
$string['show'] = 'Afișați';
$string['sided'] = 'În lateral';
$string['skipview'] = 'Ascunde structura cursului în pagina studentului';
$string['skipview_help'] = 'Această setare specifică dacă pagina cu structura conținutului ar trebui să fie vreodată omisă (neafișată). În cazul în care pachetul conține doar un singur obiect de învățare, pagina cu structura de conținut poate fi oricând omisă.';
$string['skipviewdesc'] = 'Acest parametru permite stabilirea modului implicit (afişează/ascunde) de vizualizare a structurii cursului (cuprins) în pagină';
$string['slashargs'] = 'ATENŢIE: funcţionalitatea "slash arguments" a fost dezactivată în cadrul acestui site şi de aceea este posibil ca obiectele să nu funcţioneze în maniera aşteptată!';
$string['stagesize'] = 'Dimensiune fereastră de lucru';
$string['stagesize_help'] = 'Aceste două setări specifică lățimea cadrului /ferestrei și înălțimea obiectelor de învățare.';
$string['started'] = 'Început la';
$string['status'] = 'Status';
$string['statusbar'] = 'Afişare bara de stare';
$string['student_response'] = 'Răspuns';
$string['subplugintype_scormreport'] = 'Raport';
$string['subplugintype_scormreport_plural'] = 'Rapoarte';
$string['suspended'] = 'Suspendat';
$string['syntax'] = 'Eroare sintaxă';
$string['tag_error'] = 'Tag necunoscut ({$a->tag}) cu următorul conţinut: {$a->value}';
$string['time'] = 'Timp';
$string['title'] = 'Titlu';
$string['toc'] = 'TOC';
$string['too_many_attributes'] = 'Tag-ul {$a->tag} are prea multe atribute';
$string['too_many_children'] = 'Tag-ul {$a->tag} are prea multe elemente subordonate';
$string['toolbar'] = 'Afişare bara de instrumente';
$string['totaltime'] = 'Timp';
$string['trackcorrectcount'] = 'Număr corect';
$string['trackcorrectcount_help'] = 'Numărul de răspunsuri corecte pentru întrebare';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'Acesta este identificatorul setat de pachetul dvs. SCORM pentru această întrebare, specificația SCORM nu permite furnizarea textului complet al întrebării.';
$string['trackingloose'] = 'ATENŢIE: informaţiile din cadrul înregistrării activităţii cursanţilor din cadrul acestui pachet vor fi şterse!';
$string['tracklatency'] = 'Întârziere';
$string['tracklatency_help'] = 'Timpul scurs între momentul în care întrebarea a fost pusă la dispoziția cursantului pentru un răspuns și timpul primului răspuns.';
$string['trackpattern'] = 'Tipar';
$string['trackpattern_help'] = 'Acesta ar fi un răspuns corect la această întrebare, nu arată răspunsul cursanților.';
$string['trackresponse'] = 'Răspuns';
$string['trackresponse_help'] = 'Acesta este răspunsul dat de cursant pentru această întrebare';
$string['trackresult'] = 'Rezultat';
$string['trackresult_help'] = 'Arată dacă cursantul a introdus un răspuns corect.';
$string['trackscoremax'] = 'Punctaj maxim';
$string['trackscoremax_help'] = 'Valoarea maximă care poate fi atribuită scorului brut';
$string['trackscoremin'] = 'Punctaj minim';
$string['trackscoremin_help'] = 'Valoarea minimă care poate fi atribuită scorului brut';
$string['trackscoreraw'] = 'Scor brut';
$string['trackscoreraw_help'] = 'Număr care reflectă performanța cursantului în raport cu intervalul delimitat de valorile min și max';
$string['tracksuspenddata'] = 'Suspendați datele';
$string['tracksuspenddata_help'] = 'Oferă spațiu pentru stocarea și preluarea datelor între sesiunile cursanților';
$string['tracktime'] = 'Durată';
$string['tracktime_help'] = 'Ora la care a început încercarea';
$string['tracktype'] = 'Tip';
$string['tracktype_help'] = 'Tipul întrebării, de exemplu, "alegere" sau "răspuns scurt".';
$string['trackweight'] = 'Pondere';
$string['trackweight_help'] = 'Greutatea atribuită întrebării la calcularea scorului.';
$string['type'] = 'Tip';
$string['typeaiccurl'] = 'URL AICC extern';
$string['typeexternal'] = 'Manifest SCORM extern';
$string['typelocal'] = 'Pachete încărcate';
$string['typelocalsync'] = 'Pachere descărcate';
$string['undercontent'] = 'Sub conținut';
$string['unziperror'] = 'A apărut o eroare în timpul procesului de dezarhivare a pachetului';
$string['updatefreq'] = 'Frecvenţă actualizare automată';
$string['updatefreq_error'] = 'Frecvența de actualizare automată poate fi setată numai când fișierul pachetului este găzduit extern';
$string['updatefreq_help'] = 'Acest lucru permite descărcarea și actualizarea automată a pachetului extern';
$string['updatefreqdesc'] = 'Acest parametru stabileşte frecvenţa implicită de actualizare automată a unei activităţi';
$string['validateascorm'] = 'Validare pachet';
$string['validation'] = 'Rezultatul validării';
$string['validationtype'] = 'Acest parametru stabileşte librăria DOMXML folosită la validarea SCORM Manifest. Dacă nu ştiţi ce opţiune să folosiţi lăsaţi selectată opţiunea implicită.';
$string['value'] = 'Valoare';
$string['versionwarning'] = 'Versiunea manifestului este ulterioară versiunii 1.3, atenţionare la  {$a->tag} tag';
$string['viewallreports'] = 'Afişare rapoarte pentru {$a} încercări de parcurgere';
$string['viewalluserreports'] = 'Afişare rapoarte pentru {$a} utilizatori';
$string['whatgrade'] = 'Punctare încercări de parcurgere';
$string['whatgrade_help'] = 'Dacă sunt permise mai multe încercări, această setare specifică dacă cea mai mare, medie (medie), prima sau ultima încercare finalizată este înregistrată în carnet. Ultima opțiune de încercare finalizată nu include încercările cu starea „eșuată”.

Note privind gestionarea mai multor încercări:

* Opțiunea de a începe o nouă încercare este oferită de o casetă de selectare deasupra butonului Enter de pe pagina structurii de conținut, deci asigurați-vă că oferiți acces la acea pagină dacă doriți să permiteți mai multe încercări.
* Unele pachete SCORM sunt inteligente cu privire la noile încercări, multe nu. Ceea ce înseamnă acest lucru este că dacă elevul reintră într-o încercare existentă, dacă conținutul SCORM nu are logică internă pentru a evita suprascrierea încercărilor anterioare, acestea pot fi suprascrise, chiar dacă încercarea a fost „finalizată” sau „trecută”.
* Setările „Forțare finalizată”, „Forțare încercare nouă” și „Blocare după încercarea finală” oferă, de asemenea, o gestionare suplimentară a încercărilor multiple.';
$string['whatgradedesc'] = 'Dacă cea mai mare, medie (medie), prima sau ultima încercare finalizată este înregistrată în carnet, dacă sunt permise mai multe încercări.';
$string['width'] = 'Lăţime';
$string['window'] = 'Fereastră';
$string['youmustselectastatus'] = 'Trebuie să selectați o stare de solicitat';
