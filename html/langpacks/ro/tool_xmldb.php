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
 * Strings for component 'tool_xmldb', language 'ro', version '4.1'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Actual';
$string['addpersistent'] = 'Adăugați câmpuri persistente obligatorii';
$string['aftertable'] = 'După tabel:';
$string['back'] = 'Înapoi';
$string['backtomainview'] = 'Mergi înapoi la început';
$string['cannotuseidfield'] = 'Nu se poate insera câmpul „id”. Este o coloană autonumerică';
$string['change'] = 'Schimbă';
$string['charincorrectlength'] = 'Lungime incorectă a câmpului caracter';
$string['check_bigints'] = 'Caută numere întregi incorecte in baza de date';
$string['check_defaults'] = 'Caută valori implicite inconsecvente';
$string['check_foreign_keys'] = 'Căutați încălcări ale cheilor externe';
$string['check_indexes'] = 'Caută indecşii DB care lipsesc';
$string['check_oracle_semantics'] = 'Căutați semantică incorectă de lungime';
$string['checkbigints'] = 'Verificați numerele întregi';
$string['checkdefaults'] = 'Verifică valori implicite';
$string['checkforeignkeys'] = 'Verificați cheile externe';
$string['checkindexes'] = 'Verifică indecşii';
$string['checkoraclesemantics'] = 'Verifică semantica';
$string['completelogbelow'] = '(vezi mai jos înregistrarea completă a tuturor detaliilor căutării)';
$string['confirmcheckbigints'] = 'Această funcționalitate va căuta <a href="https://tracker.moodle.org/browse/MDL-11038"> câmpuri întregi potențiale greșite </a> în serverul Moodle, generând (dar nu executând!) Automat cele necesare Instrucțiuni SQL pentru a avea toate numerele întregi din baza dvs. de date definite corect.

Odată generate, puteți copia astfel de declarații și le puteți executa în siguranță cu interfața dvs. SQL preferată (nu uitați să faceți backup datelor înainte de a face acest lucru).

Este foarte recomandat să rulați cea mai recentă (+ versiune) disponibilă a versiunii Moodle înainte de a executa căutarea unor numere întregi greșite.

Această funcționalitate nu efectuează nicio acțiune împotriva DB (doar citește din acesta), deci poate fi executată în siguranță în orice moment.';
$string['confirmcheckdefaults'] = 'Această funcționalitate va căuta valori implicite inconsistente în serverul dvs. Moodle, generând (dar nu executând!) Instrucțiunile SQL necesare pentru a avea toate valorile implicite definite corect.

Odată generate, puteți copia astfel de declarații și le puteți executa în siguranță cu interfața dvs. SQL preferată (nu uitați să faceți backup datelor înainte de a face acest lucru).

Este foarte recomandat să rulați cea mai recentă (+ versiune) disponibilă a versiunii Moodle înainte de a executa căutarea unor valori implicite incoerente.

Această funcționalitate nu efectuează nicio acțiune împotriva DB (doar citește din acesta), deci poate fi executată în siguranță în orice moment.';
$string['confirmcheckforeignkeys'] = 'Această funcționalitate va căuta potențiale încălcări ale cheilor străine definite în definițiile install.xml. (Moodle nu generează în prezent constrângeri reale de chei străine în baza de date, motiv pentru care pot fi prezente date nevalide.)

Este foarte recomandat să rulați cea mai recentă (+ versiune) disponibilă a versiunii Moodle înainte de a efectua căutarea unor potențiale încălcări ale cheilor străine.

Această funcționalitate nu efectuează nicio acțiune împotriva DB (doar citește din acesta), deci poate fi executată în siguranță în orice moment.';
$string['confirmcheckindexes'] = 'Această funcționalitate va căuta potențiali indici lipsă în serverul dvs. Moodle, generând (dar nu executând!) Automat instrucțiunile SQL necesare pentru a menține totul actualizat.

Odată generate, puteți copia astfel de declarații și le puteți executa în siguranță cu interfața dvs. SQL preferată (nu uitați să faceți backup datelor înainte de a face acest lucru).

Este foarte recomandat să rulați cea mai recentă (+ versiune) disponibilă a versiunii Moodle înainte de a executa căutarea indexurilor lipsă.

Această funcționalitate nu efectuează nicio acțiune împotriva DB (doar citește din acesta), deci poate fi executată în siguranță în orice moment.';
$string['confirmcheckoraclesemantics'] = 'Această funcționalitate va căuta <a href="https://tracker.moodle.org/browse/MDL-29322"> coloanele Oracle varchar2 utilizând semantica BYTE </a> în serverul dvs. Moodle, generând (dar nu executând!) Automat instrucțiunile SQL necesare pentru ca toate coloanele să fie convertite pentru a utiliza în schimb semantica CHAR (mai bună pentru compatibilitatea cross-db și lungimea maximă a conținutului crescut).

Odată generate, puteți copia astfel de declarații și le puteți executa în siguranță cu interfața dvs. SQL preferată (nu uitați să faceți backup datelor înainte de a face acest lucru).

Este foarte recomandat să rulați cea mai recentă (+ versiune) disponibilă a lansării Moodle înainte de a executa căutarea semanticii BYTE.

Această funcționalitate nu efectuează nicio acțiune împotriva DB (doar citește din acesta), deci poate fi executată în siguranță în orice moment.';
$string['confirmdeletefield'] = 'Sunteți absolut sigur că doriți să ștergeți câmpul:';
$string['confirmdeleteindex'] = 'Sunteţi absolut siguri că doriţi să eliminaţi acest index:';
$string['confirmdeletekey'] = 'Sunteţi absolut siguri că doriţi să eliminaţi această cheie:';
$string['confirmdeletetable'] = 'Sunteţi absolut siguri că doriţi să eliminaţi acest tabel:';
$string['confirmdeletexmlfile'] = 'Sunteţi absolut siguri că doriţi să eliminaţi  acest fişier:';
$string['confirmrevertchanges'] = 'Sunteţi absolut siguri că doriţi să anulaţi modificările realizate asupra:';
$string['create'] = 'Creează';
$string['createtable'] = 'Creează tabel:';
$string['defaultincorrect'] = 'Valoare implicită incorectă';
$string['delete'] = 'Șterge';
$string['delete_field'] = 'Şterge câmp';
$string['delete_index'] = 'Şterge index';
$string['delete_key'] = 'Şterge cheie';
$string['delete_table'] = 'Șterge tabel';
$string['delete_xml_file'] = 'Șterge fișier XML';
$string['doc'] = 'Doc';
$string['docindex'] = 'Indexul documentației:';
$string['documentationintro'] = 'Această documentație este generată automat din definiția bazei de date XMLDB. Este disponibil numai în limba engleză.';
$string['down'] = 'Jos';
$string['duplicate'] = 'Duplicat';
$string['duplicatefieldname'] = 'Există deja alt câmp cu această denumire';
$string['duplicatefieldsused'] = 'Câmpuri duplicate utilizate';
$string['duplicateindexname'] = 'Numele indexului duplicat';
$string['duplicatekeyname'] = 'O altă cheie cu acest nume există';
$string['duplicatetablename'] = 'Există deja alt tabel cu acest nume';
$string['edit'] = 'Modifică';
$string['edit_field'] = 'Editează câmpul';
$string['edit_field_save'] = 'Salvează câmpul';
$string['edit_index'] = 'Editează indexul';
$string['edit_index_save'] = 'Salvează indexul';
$string['edit_key'] = 'Modifică cheie';
$string['edit_key_save'] = 'Salvați cheia';
$string['edit_table'] = 'Editează tabelul';
$string['edit_table_save'] = 'Salvează tabelul';
$string['edit_xml_file'] = 'Modifică fișier XML';
$string['enumvaluesincorrect'] = 'Valori incorecte pentru câmp de enumerare';
$string['expected'] = 'Așteptat';
$string['extensionrequired'] = 'Ne pare rău - extensia PHP „{$a}” este necesară pentru această acțiune. Vă rugăm să instalați extensia dacă doriți să utilizați această caracteristică.';
$string['extraindexesfound'] = 'S-au găsit indexuri suplimentare';
$string['field'] = 'Câmp';
$string['fieldnameempty'] = 'Denumirea câmpului nu este completată';
$string['fields'] = 'Câmpuri';
$string['fieldsnotintable'] = 'Câmpul nu există în tabel';
$string['fieldsusedinindex'] = 'Acest câmp este folosit ca index';
$string['fieldsusedinkey'] = 'Acest câmp este folosit ca cheie.';
$string['filemodifiedoutfromeditor'] = 'Avertisment: Fișier modificat local în timp ce utilizați editorul XMLDB. Salvarea va suprascrie modificările locale.';
$string['filenotwriteable'] = 'Fişier fără permisiuni de scriere';
$string['fkunknownfield'] = 'Cheia externă {$a->keyname} de pe tabel {$a->tablename} indică un câmp inexistent {$a->reffield} în tabelul de referință {$a->reftable}.';
$string['fkunknowntable'] = 'Cheia externă {$a->keyname} de pe tabel {$a->tablename} indică un tabel inexistent {$a->reftable}.';
$string['fkviolationdetails'] = 'Cheia străină {$a->keyname} din tabelul {$a->tablename} este încălcată de {$a->numviolations} din rândurile {$a->numrows}.';
$string['float2numbernote'] = 'Observație: Deși câmpurile „float” sunt 100% acceptate de XMLDB, se recomandă migrarea în loc a câmpurilor „numerice”.';
$string['floatincorrectdecimals'] = 'Număr incorect de zecimale pentru câmp de tip real';
$string['floatincorrectlength'] = 'Lungime incorectă pentru câmp de tip real';
$string['generate_all_documentation'] = 'Toată documentația';
$string['generate_documentation'] = 'Documentație';
$string['gotolastused'] = 'Du-te la ultimul fişier folosit';
$string['incorrectfieldname'] = 'Nume incorect';
$string['incorrectindexname'] = 'Numele indexului incorect';
$string['incorrectkeyname'] = 'Numele incorect al cheii';
$string['incorrecttablename'] = 'Numele tabelului este incorect';
$string['index'] = 'Index';
$string['indexes'] = 'Indecşi';
$string['indexnameempty'] = 'Numele indexului este gol';
$string['integerincorrectlength'] = 'Lungime incorectă pentru câmp de tip întreg';
$string['key'] = 'Cheie';
$string['keynameempty'] = 'Numele cheii nu poate fi gol';
$string['keys'] = 'Chei';
$string['listreservedwords'] = 'Lista de Cuvinte Rezervate <br />(se foloseşte la actualizarea listei cu cuvinte rezervate <a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB_reserved_words</a> updated)';
$string['load'] = 'Încarcă';
$string['main_view'] = 'Pagina principală';
$string['masterprimaryuniqueordernomatch'] = 'Câmpurile din cheia dvs. externă trebuie să fie listate în aceeași ordine în care sunt listate în CHEIA UNICĂ din tabelul de referință.';
$string['missing'] = 'Lipsesc';
$string['missingindexes'] = 'Indecşii care lipseau au fost găsiţi';
$string['mustselectonefield'] = 'Pentru a putea vizualiza acţiunile legate de un câmp trebuie să selectaţi câmpul dorit!';
$string['mustselectoneindex'] = 'Pentru a putea vizualiza acţiunile legate de un index trebuie să selectaţi indexul dorit!';
$string['mustselectonekey'] = 'Pentru a putea vizualiza acţiunile legate de o cheie trebuie să selectaţi cheia dorită!';
$string['new_table_from_mysql'] = 'Tabel nou de la MySQL';
$string['newfield'] = 'Câmp nou';
$string['newindex'] = 'Index nou';
$string['newkey'] = 'Cheie nouă';
$string['newtable'] = 'Tabel nou';
$string['newtablefrommysql'] = 'Tabel nou de la MySQL';
$string['nofieldsspecified'] = 'Nu sunt specificate câmpuri';
$string['nomasterprimaryuniquefound'] = 'Coloanele la care se referă cheia străină trebuie să fie incluse într-o CHEIE primară sau unică în tabelul de referință. Rețineți că coloana care se află într-un INDICE UNIC nu este suficient de bună.';
$string['nomissingorextraindexesfound'] = 'Nu au fost găsiți indexuri lipsă sau suplimentare, deci nu este necesară nicio altă acțiune.';
$string['noreffieldsspecified'] = 'Nu sunt specificate câmpuri de referință';
$string['noreftablespecified'] = 'Tabelul de referință specificat nu a fost găsit';
$string['noviolatedforeignkeysfound'] = 'Nu s-au găsit chei străine încălcate';
$string['nowrongdefaultsfound'] = 'Nu au fost identificate valori implicite inconsecvente, nu este nevoie să realizaţi nicio acţiune asupra bazei de date.';
$string['nowrongintsfound'] = 'Nu au fost identificate numere întregi greşite, nu este nevoie să realizaţi nicio acţiune asupra bazei de date.';
$string['nowrongoraclesemanticsfound'] = 'Nu s-au găsit coloane Oracle care utilizează semantica BYTE, DB-ul dvs. nu are nevoie de alte acțiuni.';
$string['numberincorrectdecimals'] = 'Număr incorect de zecimale pentru câmp numeric';
$string['numberincorrectlength'] = 'Lungime incorectă pentru câmp numeric';
$string['numberincorrectwholepart'] = 'Piesă de număr întreg prea mare pentru câmpul numeric';
$string['pendingchanges'] = 'Notă: Ați efectuat modificări la acest fișier. Ele pot fi salvate în orice moment.';
$string['pendingchangescannotbesaved'] = 'Există modificări în acest fișier, dar nu pot fi salvate! Vă rugăm să verificați dacă atât directorul cât și „install.xml” din acesta au permisiuni de scriere pentru serverul web.';
$string['pendingchangescannotbesavedreload'] = 'Există modificări în acest fișier, dar nu pot fi salvate! Vă rugăm să verificați dacă atât directorul cât și „install.xml” din acesta au permisiuni de scriere pentru serverul web. Apoi reîncărcați această pagină și ar trebui să puteți salva aceste modificări.';
$string['persistentfieldscomplete'] = 'Au fost adăugate următoarele câmpuri:';
$string['persistentfieldsconfirm'] = 'Doriți să adăugați următoarele câmpuri:';
$string['persistentfieldsexist'] = 'Următoarele câmpuri există deja:';
$string['pluginname'] = 'Editor XMLDB';
$string['primarykeyonlyallownotnullfields'] = 'Cheile primare nu pot fi nule';
$string['privacy:metadata'] = 'Pluginul editor XMLDB nu stochează date personale.';
$string['reconcile_files'] = 'Căutați fișiere XMLDB care trebuie reconciliate';
$string['reconcile_files_intro'] = 'Această funcționalitate analizează conținutul tuturor fișierelor XMLDB pentru a verifica dacă se potrivesc cu rezultatele generării lor din editorul XMLDB.

Va fi afișată o listă de fișiere care trebuie reconciliate (regenerate), iar editorul XMLDB poate fi folosit pentru a le remedia.';
$string['reconcile_files_no'] = 'Toate fișierele sunt OK. Nu este necesară reconcilierea.';
$string['reconcile_files_yes'] = 'S-au găsit fișiere de reconciliat:';
$string['reconcilefiles'] = 'Reconciliere fișiere XMLDB';
$string['reserved'] = 'Rezervat';
$string['reservedwords'] = 'Cuvinte rezervate';
$string['revert'] = 'Revino';
$string['revert_changes'] = 'Anulează schimbările';
$string['save'] = 'Salvează';
$string['searchresults'] = 'Rezultatele căutării';
$string['selectaction'] = 'Selectaţi acţiunea:';
$string['selectdb'] = 'Selectaţi baza de date:';
$string['selectfieldkeyindex'] = 'Selectaţi câmp/cheie/index:';
$string['selectonecommand'] = 'Pentru a vedea codul PHP al unei Acţiuni selectaţi-o din listă';
$string['selectonefieldkeyindex'] = 'Pentru a vedea codul PHP al unui Câmp/Chei/Index selectaţi-l din listă';
$string['selecttable'] = 'Selectaţi tabel:';
$string['table'] = 'Tabel';
$string['tablenameempty'] = 'Denumirea tabelului nu poate fi necompletată';
$string['tables'] = 'Tabele';
$string['unknownfield'] = 'Se referă la un câmp necunoscut';
$string['unknowntable'] = 'Se referă la un tabel necunoscut';
$string['unload'] = 'Descarcă';
$string['up'] = 'Sus';
$string['view'] = 'Vizualizare';
$string['view_reserved_words'] = 'Vizualizaţi cuvintele rezervate';
$string['view_structure_php'] = 'Vizualizaţi structura PHP';
$string['view_structure_sql'] = 'Vizualizaţi structura SQL';
$string['view_table_php'] = 'Vizualizaţi tabel PHP';
$string['view_table_sql'] = 'Vizualizaţi tabel SQL';
$string['viewedited'] = 'Vizualizaţi modificările';
$string['vieworiginal'] = 'Vizualizaţi originalul';
$string['viewphpcode'] = 'Vizualizaţi codul PHP';
$string['viewsqlcode'] = 'Vizualizaţi codul SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Chei străine încălcate';
$string['violatedforeignkeysfound'] = 'Au fost găsite chei străine încălcate';
$string['violations'] = 'Încălcări';
$string['wrong'] = 'Greșit';
$string['wrongdefaults'] = 'Au fost identificaţi parametri impliciţi greşiţi';
$string['wrongints'] = 'Au fost identificate numere întregi greşite';
$string['wronglengthforenum'] = 'Lungime incorectă pentru câmpul de tip enumerare';
$string['wrongnumberofreffields'] = 'Număr greșit de câmpuri de referință';
$string['wrongoraclesemantics'] = 'Semantică Oracle BYTE greșită găsită';
$string['wrongreservedwords'] = 'Cuvinte rezervate utilizate în prezent<br />(numele tablelelor nu sunt importante dacă utilizaţi $CFG->prefix)';
$string['yesextraindexesfound'] = 'S-au găsit următorii indici suplimentari.';
$string['yesmissingindexesfound'] = '<p> Unele indexuri lipsă au fost găsite în DB-ul dvs. Iată detaliile și instrucțiunile SQL necesare pentru a fi executate cu interfața SQL preferată pentru a le crea pe toate. Nu uitați să faceți mai întâi backup pentru datele dvs.! </p>
<p> După aceasta, este foarte recomandat să executați din nou acest utilitar pentru a verifica dacă nu se mai găsesc indici lipsă. </p>';
$string['yeswrongdefaultsfound'] = '<p> Unele setări implicite inconsistente au fost găsite în DB. Iată detaliile lor și instrucțiunile SQL necesare pentru a fi executate cu interfața dvs. SQL preferată pentru a le remedia pe toate. Nu uitați să faceți mai întâi backup pentru datele dvs.! </p>
<p> După ce faceți acest lucru, este foarte recomandat să executați din nou acest utilitar pentru a verifica dacă nu se mai găsesc valori implicite incoerente. </p>';
$string['yeswrongintsfound'] = '<p> Unele numere întregi greșite au fost găsite în baza dvs. de date. Iată detaliile și instrucțiunile SQL necesare pentru a fi executate cu interfața dvs. SQL preferată pentru a le remedia. Nu uitați să faceți mai întâi backup pentru datele dvs.! </p>
<p> După remedierea acestora, este foarte recomandat să executați din nou acest utilitar pentru a verifica dacă nu se mai găsesc numere întregi greșite. </p>';
$string['yeswrongoraclesemanticsfound'] = '<p> Unele coloane Oracle care utilizează semantică BYTE au fost găsite în DB-ul dvs. Iată detaliile și instrucțiunile SQL necesare pentru a fi executate cu interfața SQL preferată pentru a le converti pe toate. Nu uitați să faceți mai întâi backup pentru datele dvs.! </p>
<p> După ce faceți acest lucru, este foarte recomandat să executați din nou acest utilitar pentru a verifica dacă nu mai sunt găsite semantice greșite. </p>';
