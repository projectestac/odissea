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
 * Strings for component 'book', language 'ro', version '4.1'.
 *
 * @package     book
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Adaugă un nou capitol';
$string['addafterchapter'] = 'Adăugați un capitol nou după „{$a->title}”';
$string['book:addinstance'] = 'Adaugă o nouă carte';
$string['book:edit'] = 'Editează capitolele cărții';
$string['book:read'] = 'Vezi cartea';
$string['book:viewhiddenchapters'] = 'Vizualizați capitolele ascunse';
$string['chapterandsubchaptersdeleted'] = 'Capitolul „{$a->title}” și subcapitolele sale {$a->subchapters} au fost șterse';
$string['chapterdeleted'] = 'Capitolul „{$a->title}” a fost șters';
$string['chapters'] = 'Capitole';
$string['chaptertitle'] = 'Titlul capitolului';
$string['confchapterdelete'] = 'Sunteți sigur(ă) că doriți să ștergeți acest capitol?';
$string['confchapterdeleteall'] = 'Sunteți sigur(ă) că doriți să ștergeți acest capitol și toate subcapitolele lui?';
$string['content'] = 'Conținut';
$string['customtitles'] = 'Titluri particularizate';
$string['customtitles_help'] = 'În mod normal, titlul capitolului este afișat în cuprins (TOC) ȘI ca un titlu deasupra conținutului.

Dacă este bifată caseta de selectare a titlurilor personalizate, titlul capitolului NU este afișat ca un antet deasupra conținutului. Un titlu diferit (poate mai lung decât titlul capitolului) poate fi introdus ca parte a conținutului.';
$string['deletechapter'] = 'Șterge capitolul "{$a}"';
$string['editchapter'] = 'Editează capitolul "{$a}"';
$string['editingchapter'] = 'Se editează capitolul';
$string['errorchapter'] = 'Eroare la citirea capitolului.';
$string['eventchaptercreated'] = 'Capitol creat';
$string['eventchapterdeleted'] = 'Capitol șters';
$string['eventchapterupdated'] = 'Capitol actualizat';
$string['eventchapterviewed'] = 'Capitol vizualizat';
$string['hidechapter'] = 'Ascunde capitolul "{$a}"';
$string['indicator:cognitivedepth'] = 'Informații cognitive despre carte';
$string['indicator:cognitivedepth_help'] = 'Acest indicator se bazează pe angajamentul cognitiv atins de cursant într-o resursă de tip carte.';
$string['indicator:cognitivedepthdef'] = 'Informații cognitive despre carte';
$string['indicator:cognitivedepthdef_help'] = 'Participantul a atins acest procent din angajamentul cognitiv oferit de activitățile de tip carte în acest interval de analiză (niveluri = fără vizualizare, vizualizare)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Informații sociale despre carte';
$string['indicator:socialbreadth_help'] = 'Acest indicator se bazează pe amploarea socială atinsă de cursant într-o resursă de tip carte.';
$string['indicator:socialbreadthdef'] = 'Informații sociale despre carte';
$string['indicator:socialbreadthdef_help'] = 'Participantul a atins acest procent din angajamentul social oferit de activitățile de tip carte în acest interval de analiză (niveluri = Fără participare, Participare)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['modulename'] = 'Carte';
$string['modulename_help'] = 'Modulul de tip carte permite profesorului să creeze o resursă cu mai multe pagini într-un format asemănător cărții, cu capitole și subcapitole. Cărțile pot conține fișiere media, precum și text și sunt utile pentru afișarea unor pasaje lungi de informații care pot fi împărțite în secțiuni.

Se poate folosi o carte

* Pentru a afișa materialul de lectură pentru module individuale de studiu
* Ca manual de utilizare, tutoriale sau pașii unui flux
* Ca portofoliu de lucrări ale cursanților';
$string['modulename_link'] = 'mod/book/view';
$string['modulenameplural'] = 'Cărți';
$string['movechapterdown'] = 'Mută capitolul în jos "{$a}"';
$string['movechapterup'] = 'Mută capitolul în sus "{$a}"';
$string['navexit'] = 'Ieșiți din activitatea carte';
$string['navimages'] = 'Imagini';
$string['navnext'] = 'Următorul';
$string['navnexttitle'] = 'Următorul: {$a}';
$string['navoptions'] = 'Opțiuni disponibile pentru linkuri de navigare';
$string['navoptions_desc'] = 'Opțiuni pentru afișarea navigării pe paginile cărții';
$string['navprev'] = 'Precedent';
$string['navprevtitle'] = 'Precedent: {$a}';
$string['navstyle'] = 'Stilul de navigare';
$string['navstyle_help'] = '* Imagini - Pictogramele sunt utilizate pentru navigare
* Text - Titlurile capitolelor sunt utilizate pentru navigare';
$string['navtext'] = 'Text';
$string['navtoc'] = 'Doar TOC';
$string['nocontent'] = 'Nu s-a adăugat conținut cărții';
$string['numbering'] = 'Formatare capitol';
$string['numbering0'] = 'Nici unul';
$string['numbering1'] = 'Numere';
$string['numbering2'] = 'Liniuțe';
$string['numbering3'] = 'Indentat';
$string['numbering_help'] = '* Niciuna - Titlurile capitolelor și subcapitolelor nu au indentare
* Numere - Capitolele și titlurile subcapitolelor sunt numerotate 1, 1.1, 1.2, 2, ...
* Liniuțe - subcapitolele sunt indentate și afișate cu liniuță în cuprins
* Indentat - subcapitolele sunt indentate în cuprins';
$string['numberingoptions'] = 'Opțiuni disponibile pentru formatarea capitolelor';
$string['numberingoptions_desc'] = 'Opțiuni pentru afișarea capitolelor și subcapitolelor în cuprins';
$string['page-mod-book-x'] = 'Orice pagină a modulului de tip carte';
$string['pluginadministration'] = 'Administrare carte';
$string['pluginname'] = 'Carte';
$string['previouschapter'] = 'Capitolul anterior';
$string['privacy:metadata'] = 'Resursa de tip carte nu stochează date personale.';
$string['removeallbooktags'] = 'Eliminați toate etichetele cărții';
$string['search:activity'] = 'Carte - informații despre resurse';
$string['search:chapter'] = 'Carte - capitole';
$string['showchapter'] = 'Afișează capitolul "{$a}"';
$string['subchapter'] = 'Subcapitol';
$string['subchapternotice'] = '(Disponibil numai după ce primul capitol a fost creat)';
$string['subplugintype_booktool'] = 'Instrument de tip carte';
$string['subplugintype_booktool_plural'] = 'Instrumente de tip carte';
$string['tagarea_book_chapters'] = 'Capitole de carte';
$string['tagsdeleted'] = 'Etichetele de carte au fost șterse';
$string['toc'] = 'Cuprins';
$string['top'] = 'sus';
