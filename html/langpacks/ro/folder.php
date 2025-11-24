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
 * Strings for component 'folder', language 'ro', version '4.5'.
 *
 * @package     folder
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bynameondate'] = 'după {$a->name} - {$a->date}';
$string['contentheader'] = 'Conținut';
$string['display'] = 'Afișează conținutul dosarelor';
$string['display_help'] = 'Dacă alegeți să afișați conținutul folderului pe o pagină a cursului, nu va exista niciun link către o pagină separată. Descrierea va fi afișată numai dacă este bifată „Afișează descrierea pe pagina cursului”. Rețineți că în acest caz acțiunile vizualizare a cursanților nu pot fi jurnalizate.';
$string['displayinline'] = 'În linie pe pagina unui curs';
$string['displaypage'] = 'Pe o pagină separată';
$string['dnduploadmakefolder'] = 'Dezarhivați fișierele și creați dosarul';
$string['downloadfolder'] = 'Descarcă folderul';
$string['eventallfilesdownloaded'] = 'Arhiva zip a folderului descărcat';
$string['eventfolderupdated'] = 'Folder actualizat';
$string['folder:addinstance'] = 'Adaugă un nou folder';
$string['folder:managefiles'] = 'Gestionați fișierele din modulul folder';
$string['folder:view'] = 'Vezi conținutul folderului';
$string['foldercontent'] = 'Fișiere și subfoldere';
$string['forcedownload'] = 'Descarcă forțat fișierele';
$string['forcedownload_help'] = 'Dacă anumite fișiere, cum ar fi imagini sau fișiere HTML, ar trebui să fie afișate în browser, mai degrabă decât să fie descărcate. Rețineți că, din motive de securitate, setarea ar trebui să fie anulată numai dacă toți utilizatorii cu capacitatea de a gestiona fișiere din folder sunt utilizatori de încredere.';
$string['indicator:cognitivedepth'] = 'Informații cognitive despre resursa de tip folder';
$string['indicator:cognitivedepth_help'] = 'Acest indicator se bazează pe profunzimea cognitivă atinsă de cursant într-o resursă Folder.';
$string['indicator:cognitivedepthdef'] = 'Informații cognitive despre resursa de tip folder';
$string['indicator:cognitivedepthdef_help'] = 'Participantul a atins acest procent din angajamentul cognitiv oferit de resursele Folder în timpul acestui interval de analiză (Nivele = Fără vizualizare, Vizualizare)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Informații sociale despre resursa de tip folder';
$string['indicator:socialbreadth_help'] = 'Acest indicator se bazează pe angajamentul social atins de cursant într-o resursă Folder.';
$string['indicator:socialbreadthdef'] = 'Informații sociale despre resursa de tip folder';
$string['indicator:socialbreadthdef_help'] = 'Participantul a atins acest procent din angajamentul social oferit de resursele Folderului în timpul acestui interval de analiză (Nivele = Fără participare, Participant singur)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['maxsizetodownload'] = 'Dimensiunea maximă de descărcare a dosarului (MB)';
$string['maxsizetodownload_help'] = 'Dimensiunea maximă a folderului care poate fi descărcat ca fișier zip. Dacă este setat la zero, dimensiunea folderului este nelimitată.';
$string['modulename'] = 'Dosar';
$string['modulename_help'] = 'Resursa de tip folder permite unui profesor să afișeze un număr de fișiere conexe într-un singur folder, reducând dimensiunile paginii principale a cursului. Un dosar zip poate fi încărcat și dezarhivat pentru afișare, sau poate fi creat un folder gol și încărcate fișiere în el.

Un folder se poate utiliza:

* Pentru o serie de fișiere pe un singur subiect, de exemplu un set de lucrări de examinare în format pdf sau o colecție de fișiere imagine pentru a fi utilizate în proiectele studenților
* Pentru a oferi un spațiu de încărcare comun pentru profesori pe pagina cursului (păstrând folderul ascuns, astfel încât numai profesorii să îl poată vedea)';
$string['modulename_link'] = 'mod/folder/view';
$string['modulenameplural'] = 'Dosare';
$string['newfoldercontent'] = 'Conținut de folder nou';
$string['noautocompletioninline'] = 'Finalizarea automată la vizualizarea activității nu poate fi selectată împreună cu opțiunea „Afișare în linie”';
$string['page-mod-folder-view'] = 'Pagina principală a resursei de tip folder';
$string['page-mod-folder-x'] = 'Orice pagină a resursei de tip folder';
$string['pluginadministration'] = 'Administrare dosar';
$string['pluginname'] = 'Dosar';
$string['privacy:metadata'] = 'Pluginul resursă de tip folder nu stochează date personale.';
$string['search:activity'] = 'Dosar';
$string['showdownloadfolder'] = 'Afișați butonul de descărcare al dosarului';
$string['showdownloadfolder_help'] = 'Dacă este setat la „da”, va fi afișat un buton care să permită descărcarea conținutului folderului ca fișier zip.';
$string['showexpanded'] = 'Afișați dosarele extinse';
$string['showexpanded_help'] = 'Dacă este setat la „da”, subdirectoarele sunt afișate în mod implicit extinse; în caz contrar sunt afișate restânse.';
