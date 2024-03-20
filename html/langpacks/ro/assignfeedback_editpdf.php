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
 * Strings for component 'assignfeedback_editpdf', language 'ro', version '4.1'.
 *
 * @package     assignfeedback_editpdf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'Adaugă la quicklist';
$string['annotationcolour'] = 'Culoare adnotare';
$string['black'] = 'Negru';
$string['blue'] = 'Albastru';
$string['cannotopenpdf'] = 'Nu se poate deschide PDF. Fișierul poate fi corupt sau este într-un format neacceptat.';
$string['clear'] = 'Șterge';
$string['colourpicker'] = 'Se alege culoarea';
$string['command'] = 'Comandă:';
$string['comment'] = 'Comentarii';
$string['commentcolour'] = 'Culoare comentariu';
$string['commentcontextmenu'] = 'Meniu comentariu contextual';
$string['commentindex'] = 'Indexul comentariilor';
$string['commentlabel'] = '{$a->pnum}.{$a->cnum}';
$string['couldnotsavepage'] = 'Nu se poate salva pagina {$a}';
$string['currentstamp'] = 'Ștampilă';
$string['default'] = 'Activat în mod implicit';
$string['default_help'] = 'Dacă este setată, această metodă de feedback va fi activată în mod implicit pentru toate lucrările noi.';
$string['deleteannotation'] = 'Ștergeți adnotarea';
$string['deletecomment'] = 'Șterge comentariu';
$string['deletefeedback'] = 'Șterge feedback în format PDF';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = 'Descărcați feedback în format PDF';
$string['draftchangessaved'] = 'Adnotările la draft au fost salvate';
$string['drag'] = 'Drag (Trage)';
$string['editpdf'] = 'Adnotare PDF';
$string['editpdf_help'] = 'Adnotați temele cursanților direct în browser și faceți un PDF care se poate descărca și edita.';
$string['enabled'] = 'Adnotare PDF';
$string['enabled_help'] = 'Dacă este activat, profesorul va putea crea fișiere PDF adnotate atunci când evaluează și notează răspunsurile. Acest lucru permite profesorului să adauge comentarii, desene și ștampile direct deasupra temei cursantului. Adnotarea se face în browser și nu este necesar niciun software suplimentar. Adnotarea se poate face DOAR pe fișierele de tip PDF trimise de studenți.';
$string['errorgenerateimage'] = 'Eroare la generarea de imagini cu ghostscript, informații pentru debug: {$a}';
$string['errorpdfpage'] = 'A apărut o eroare în timpul generării acestei pagini';
$string['expcolcomments'] = 'Extinde/Minimizează toate comentariile';
$string['filter'] = 'Filtrează comentarii...';
$string['generatefeedback'] = 'Generează feedback PDF';
$string['generatingpdf'] = 'Se genereză feedback PDF';
$string['gotopage'] = 'Mergi la pagina';
$string['green'] = 'Verde';
$string['gsimage'] = 'Imagine de testare ghostscript';
$string['highlight'] = 'Highlight';
$string['jsrequired'] = 'Este nevoie de JavaScript pentru a adnota un PDF. Vă rugăm să activați JavaScript în browser pentru a utiliza această caracteristică.';
$string['launcheditor'] = 'Se lansează editorul PDF';
$string['line'] = 'Linie';
$string['loadingeditor'] = 'Se încarcă editorul PDF';
$string['navigatenext'] = 'Pagina următoare (Alt/Shift-Alt/Ctrl-Option + {$a})';
$string['navigateprevious'] = 'Pagina precedentă (Alt/Shift-Alt/Ctrl-Option + {$a})';
$string['output'] = 'Output:';
$string['oval'] = 'Oval';
$string['pagenumber'] = 'Pagina {$a}';
$string['pagexofy'] = 'Pagina {$a->page} din {$a->total}';
$string['partialwarning'] = 'Unele dintre fișierele din această temă pot fi accesate numai prin descărcare directă.';
$string['pathtogspathdesc'] = 'Vă rugăm să rețineți că adnotarea PDF necesită stabilirea path-ului către ghostscript {$a}.';
$string['pen'] = 'Stilou';
$string['pluginname'] = 'Adnotări PDF';
$string['preparesubmissionsforannotation'] = 'Pregătiți lucrările pentru adnotare';
$string['privacy:metadata:colourpurpose'] = 'Culoarea comentariului sau adnotării';
$string['privacy:metadata:conversionpurpose'] = 'Fișierele sunt convertite în PDF-uri pentru a permite adnotările.';
$string['privacy:metadata:filepurpose'] = 'Stochează un PDF adnotat cu feedback pentru utilizator.';
$string['privacy:metadata:rawtextpurpose'] = 'Stochează text brut pentru date rapide.';
$string['privacy:metadata:tablepurpose'] = 'Stochează comentariile din lista rapidă a profesorului';
$string['privacy:metadata:userid'] = 'ID-ul utilizatorului';
$string['privacy:path'] = 'Feedback PDF';
$string['rectangle'] = 'Dreptunghi';
$string['red'] = 'Roșu';
$string['result'] = 'Rezultat:';
$string['rotateleft'] = 'Rotiți cu 90 grade înspre stânga';
$string['rotateright'] = 'Rotiți cu 90 grade înspre dreapta';
$string['searchcomments'] = 'Caută comentarii';
$string['select'] = 'Selectează';
$string['stamp'] = 'Ștampilă';
$string['stamppicker'] = 'Alegerea ștampilei';
$string['stamps'] = 'Ștampile';
$string['stampsdesc'] = 'Ștampilele trebuie să fie fișiere cu imagine (dimensiunea recomandată: 40x40). Aceste imagini pot fi folosite cu instrumentul de ștampile pentru a adnota PDF.';
$string['test_doesnotexist'] = 'Calea ghostscript indică un fișier inexistent';
$string['test_empty'] = 'Calea ghostscript este necompletată - vă rugăm sa inserați calea corectă';
$string['test_isdir'] = 'Calea ghostscript indică un folder, vă rugăm să includeți programul ghostscript în calea specificată';
$string['test_notestfile'] = 'Testul PDF lipsește';
$string['test_notexecutable'] = 'Calea ghostscript indică un fișier care nu este executabil';
$string['test_ok'] = 'Calea ghostscript pare a fi OK - vă rugăm să verificați dacă puteți vedea mesajul în imaginea de mai jos';
$string['testgs'] = 'Path de test ghostscript';
$string['tool'] = 'Unealtă';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = 'Vezi PDF adnotat...';
$string['white'] = 'Alb';
$string['yellow'] = 'Galben';
