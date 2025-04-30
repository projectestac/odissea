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
 * Strings for component 'search', language 'ro', version '4.4'.
 *
 * @package     search
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Căutare avansată';
$string['all'] = 'Toate';
$string['allareas'] = 'Toate zonele';
$string['allcourses'] = 'Toate cursurile';
$string['allusers'] = 'Toți utilizatorii';
$string['author'] = 'Autor';
$string['authorname'] = 'Numele autorului';
$string['back'] = 'Înapoi';
$string['beadmin'] = 'Trebuie să fiți administrator pentru a folosi această pagină.';
$string['checkdb'] = 'Verifică baza de date';
$string['checkdbadvice'] = 'Verificați baza de date pentru orice probleme.';
$string['checkdir'] = 'Verifică adresă';
$string['checkdiradvice'] = 'Asiguraţi-vă că directorul de date există şi ca poate fi scris.';
$string['commenton'] = 'Comentează';
$string['confirm_delete'] = 'Sigur doriți să ștergeți indexul pentru {$a}? Până la indexarea zonei de căutare, utilizatorii nu vor obține rezultate ale căutării din această zonă.';
$string['confirm_deleteall'] = 'Sigur doriți să ștergeți tot conținutul indexat acum? Până când site-ul nu va fi indexat din nou, utilizatorii nu vor obține rezultate ale căutării.';
$string['confirm_indexall'] = 'Sigur doriți să actualizați conținutul indexat acum? Dacă o cantitate mare de conținut are nevoie de indexare, aceasta poate dura mult timp. Pentru serverele live, în mod normal, ar trebui să lăsați indexarea sarcinii programate „Indexare globală a căutării”.';
$string['confirm_reindexall'] = 'Sigur doriți să reindexați tot conținutul site-ului acum? Dacă site-ul dvs. conține o cantitate mare de conținut, acest lucru va dura mult timp, iar utilizatorii ar putea să nu obțină rezultate complete ale căutării până când nu vor finaliza.';
$string['content:courserole'] = '{$a->role} în {$a->course}';
$string['core-all'] = 'Toate';
$string['core-course-content'] = 'Conținutul cursului';
$string['core-courses'] = 'Cursuri';
$string['core-other'] = 'Altele';
$string['core-users'] = 'Utilizatori';
$string['createanindex'] = 'creează un index';
$string['createdon'] = 'Creat la';
$string['database'] = 'Bază de date';
$string['databasestate'] = 'Indexare stare bază de date';
$string['datadirectory'] = 'Data directory';
$string['deleteindex'] = 'Ștergeți indexul {$a}';
$string['deletionsinindex'] = 'Ştergeri în index';
$string['docmodifiedon'] = 'Ultima dată modificat în {$a}';
$string['doctype'] = 'Doctype';
$string['doctypenotsupported'] = 'Tipul de document speicficat nu este încă acceptat';
$string['documents'] = 'documente';
$string['documentsfor'] = 'Documente pentru';
$string['documentsindatabase'] = 'Documente în baza de date';
$string['documentsinindex'] = 'Documente în index';
$string['duration'] = 'Durată';
$string['emptydatabaseerror'] = 'Tabela de bază de date nu este prezentă sau nu conţine înregistrări de indecşi.';
$string['enginenotfound'] = 'Motorul {$a} nu a fost găsit';
$string['enginenotinstalled'] = 'Motorul {$a} nu este instalat.';
$string['enginenotselected'] = 'Nu ați selectat niciun motor de căutare';
$string['engineserverstatus'] = 'Motorul de căutare nu este disponibil. Vă rugăm să contactați administratorul.';
$string['enteryoursearchquery'] = 'Introduceți textul de căutat';
$string['error_indexing'] = 'A apărut o eroare în timpul indexării';
$string['errorareanotavailable'] = 'zona de căutare {$a} nu este disponibilă';
$string['errors'] = 'Erori';
$string['everywhere'] = 'Oriunde aveți acces';
$string['filesinindexdirectory'] = 'Fișiere în directorul index';
$string['filterheader'] = 'Filtru';
$string['fromtime'] = 'Modificat după';
$string['globalsearch'] = 'Căutare generală';
$string['globalsearchdisabled'] = 'Căutarea globală nu este permisă';
$string['gradualreindex'] = 'Reindexare treptată {$a}';
$string['gradualreindex_confirm'] = 'Sigur doriți să reindexați {$a}? Acest lucru poate dura ceva timp, deși datele existente vor rămâne disponibile în timpul reindexării.';
$string['gradualreindex_queued'] = 'A fost solicitată reindexarea pentru {$a->name} ({$a->count} contexte). Această indexare va fi realizată de sarcina programată „Indexarea căutării globale”.';
$string['incourse'] = 'în curs {$a}';
$string['index'] = 'Index';
$string['indexwhendisabledfullnotice'] = 'Momentan indexarea nu este permisă, deoarece căutarea este dezactivată. Pentru activare, vă rugăm să verificați setarea <a href="{$a->url}">searchindexwhendisabled</a>.';
$string['indexwhendisabledshortnotice'] = 'Indexarea nu este disponibilă';
$string['invalidindexerror'] = 'Directorul index fie conţine un index incorect fie este gol.';
$string['ittook'] = 'A durat';
$string['matchingfile'] = 'Potrivit din fișierul <span class = "filename">{$a}</span>';
$string['matchingfiles'] = 'Care corespund din fișiere:';
$string['mycoursesonly'] = 'Doar cursurile mele';
$string['next'] = 'Înainte';
$string['noindexmessage'] = 'Admin: se pare că nu există niciun index de căutare. Vă rugăm';
$string['noresults'] = 'Nu sunt rezultate';
$string['normalsearch'] = 'Căutare normală';
$string['notitle'] = 'Fără titlu';
$string['openedon'] = 'deschis la';
$string['optimize'] = 'Optimizează';
$string['order'] = 'Ordinea rezultatelor';
$string['order_location'] = 'Prioritizați rezultatele legate de {$a}';
$string['order_relevance'] = 'Mai întâi cele mai relevante rezultate';
$string['priority'] = 'Prioritate';
$string['priority_normal'] = 'Normal';
$string['priority_reindexing'] = 'Reindexare';
$string['privacy:metadata'] = 'Subsistemul de căutare nu stochează date personale.';
$string['progress'] = 'Progres';
$string['queryerror'] = 'Interogarea furnizată nu a putut fi procesată de către motorul de căutare: {$a}';
$string['queueheading'] = 'Coadă de indexare suplimentară ({$a} articole)';
$string['resultsreturnedfor'] = 'rezultate obţinute pentru';
$string['runindexer'] = 'Rulează indexer (real)';
$string['runindexertest'] = 'Rulează indexer (test)';
$string['schemanotupdated'] = 'Schema de căutare este depășită.';
$string['schemaversionunknown'] = 'Motorul de căutare nu știe despre versiunea actuală a schemei.';
$string['score'] = 'Scor';
$string['search'] = 'Caută';
$string['search:course'] = 'Cursuri';
$string['search:course_teacher'] = 'Profesorul de la curs';
$string['search:customfield'] = 'Câmpuri personalizate de curs';
$string['search:message_received'] = 'Mesaje - primite';
$string['search:message_sent'] = 'Mesaje - trimise';
$string['search:mycourse'] = 'Cursurile mele';
$string['search:section'] = 'Secțiunile de curs';
$string['search:user'] = 'Utilizatori';
$string['searcharea'] = 'Zonă de căutare';
$string['searchareacategories'] = 'Căutați categorii de zone';
$string['searching'] = 'Caut în ...';
$string['searchnotpermitted'] = 'Nu aveți permisiunea să faceți o căutare';
$string['searchsetupdescription'] = 'Următorii pași vă ajută să configurați căutarea globală Moodle.';
$string['searchwithin'] = 'Caută în';
$string['seconds'] = 'secunde';
$string['solutions'] = 'Soluții';
$string['statistics'] = 'Statistici';
$string['step'] = 'Pas';
$string['thesewordshelpimproverank'] = 'Aceste cuvinte ajută la mărirea rangului';
$string['thesewordsmustappear'] = 'Aceste cuvinte trebuie să apară';
$string['thesewordsmustnotappear'] = 'Aceste cuvinte nu trebuie să apară';
$string['title'] = 'Titlu';
$string['tofetchtheseresults'] = 'pentru a aduce aceste rezultate';
$string['topresults'] = 'Cele mai bune rezultate';
$string['totalsize'] = 'Dimensiune totală';
$string['totime'] = 'Modificat înainte';
$string['type'] = 'Tip';
$string['uncompleteindexingerror'] = 'Indexarea nu s-a terminat cu succes, vă rugăm să o reporniți.';
$string['versiontoolow'] = 'Ne pare rău, căutarea globală necesită PHP 5.0.0 sau o versiune ulterioară';
$string['viewresultincontext'] = 'Vezi acest rezultat în context';
$string['wordsintitle'] = 'Cuvinte în titlu';
