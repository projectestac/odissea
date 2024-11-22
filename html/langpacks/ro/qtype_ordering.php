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
 * Strings for component 'qtype_ordering', language 'ro', version '4.1'.
 *
 * @package     qtype_ordering
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'Poziție absolută';
$string['addmultipleanswers'] = 'Adaugă încă {$a} elemente';
$string['addsingleanswer'] = 'Adaugă încă un element';
$string['allornothing'] = 'Tot sau nimic';
$string['answer'] = 'Textul elementului';
$string['answerheader'] = 'Element care poate fi repoziționat {no}';
$string['correctorder'] = 'Ordinea corectă a acestor elemente este următoarea:';
$string['defaultanswerformat'] = 'Format implicit al răspunsului';
$string['defaultquestionname'] = 'Repoziționați următoarele elemente în ordinea corectă.';
$string['duplicatesnotallowed'] = 'Duplicarea elementelor care pot fi repoziționate nu este permisă. Șirul "{$a->text}" este deja folosit în {$a->item}.';
$string['editingordering'] = 'Se editează întrebarea de tip ordonare';
$string['gradedetails'] = 'Detalii despre notă';
$string['gradingtype'] = 'Tip de notare';
$string['gradingtype_help'] = 'Alegeți tipul de calcul al notării.

**Totul sau nimic**
&nbsp; Dacă toate elementele sunt în poziția corectă, atunci se acordă note complete. În caz contrar, nota este zero.

**Poziție absolută**
&nbsp; Un element este considerat corect dacă se află în aceeași poziție ca și în răspunsul corect. Cel mai mare scor posibil pentru întrebare este **la fel cu** numărul de elemente afișate cursantului.

**Față de poziția corectă**
&nbsp; Un element este considerat corect dacă se află în aceeași poziție ca și în răspunsul corect. Elementele corecte primesc un scor egal cu numărul de elemente afișate minus unu. Elementele incorecte primesc un scor egal cu numărul de elemente afișate minus unu și minus distanța articolului față de poziția corectă. Astfel, dacă cursantului îi sunt afișate ***n*** elemente, numărul de note disponibile pentru fiecare element este ***(n - 1)***, iar cea mai mare notă disponibilă pentru întrebare este *** n x (n - 1)***, care este aceiași cu ***(n² - n)***.

**Față de următorul element (excluzând ultimul)**
&nbsp; Un element este considerat corect dacă este urmat de același element ca și în răspunsul corect. Elementul din ultima pozitie nu este bifat. Astfel, cel mai mare scor posibil pentru întrebare este **cu unu mai puțin decât** numărul de elemente afișate cursantului.

**Față de următorul element (inclusiv ultimul)**
&nbsp; Un element este considerat corect dacă este urmat de același element ca și în răspunsul corect. Acesta include ultimul element care nu trebuie să aibă niciun element după el. Astfel, cel mai mare scor posibil pentru întrebare este **la fel cu** numărul de elemente afișate cursantului.

**Relativ atât la elementele anterioare, cât și la cele următoare**
&nbsp; Un element este considerat corect dacă ambiele elemente anterioare și următoare sunt identice cu cele din răspunsul corect. Primul element nu ar trebui să aibă un element anterior, iar ultimul element nu trebuie să aibă nicun element următor. Astfel, există două puncte posibile pentru fiecare element, iar cel mai mare punctaj posibil pentru întrebare este de **dublu** numărul de elemente afișate cursantului.

**Față de TOATE elementele anterioare și următoare**
&nbsp; Un element este considerat corect doar dacă este precedat de toate aceleași elemente ca în răspunsul corect și este urmat de toate aceleași elemente așa cum este în răspunsul corect. Ordinea elementelor anterioare nu contează și nici ordinea elementelor următoare. Astfel, dacă cursantului îi sunt afișate ***n*** elemente, numărul de note disponibile pentru fiecare element este ***(n - 1)***, iar cea mai mare notă disponibilă pentru întrebare este *** n x (n - 1)***, care este aceeași cu ***(n² - n)***.

**Cel mai lung subset ordonat**
&nbsp; Nota este numărul de elemente din cel mai lung subset ordonat de elemente . Nota cea mai mare posibilă este aceeași cu numărul de elemente afișate. Un subset ordonat trebuie să aibă cel puțin două elemente. Subseturile nu trebuie să înceapă de la primul element (dar pot) și nu trebuie să fie învecinate (dar pot fi). Acolo unde există mai multe subseturi de lungime egală, elementele din subsetul care este găsit primul, când se caută de la stânga la dreapta, vor fi afișate ca fiind corecte. Alte elemente vor fi marcate ca incorecte.

**Cel mai lung subset învecinat**
&nbsp; Nota este numărul de elemente din cel mai lung subset contigu de elemente. Nota cea mai mare posibilă este aceeași cu numărul de elemente afișate. Un subset trebuie să aibă cel puțin două elemente. Subseturile nu trebuie să înceapă de la primul element (dar pot) și TREBUIE SĂ FIE CONTIGUE. Acolo unde există mai multe subseturi de lungime egală, elementele din subsetul care este găsit primul, când se caută de la stânga la dreapta, vor fi afișate ca fiind corecte. Alte elemente vor fi marcate ca fiind incorecte.';
$string['highlightresponse'] = 'Evidențiere răspuns ca incorect sau corect';
$string['horizontal'] = 'Orizontal';
$string['itemplural'] = 'elemente';
$string['itemsingular'] = 'element';
$string['layouttype'] = 'Aspectul elementelor';
$string['layouttype_help'] = 'Alegeți modul în care vor fi afișate elementele, vertical sau orizontal.';
$string['longestcontiguoussubset'] = 'Cel mai mare subset învecinat';
$string['longestorderedsubset'] = 'Cel mai lung subset ordonat';
$string['noresponsedetails'] = 'Ne pare rău, nu sunt disponibile informații despre răspunsul la această întrebare.';
$string['noscore'] = 'Fără notă';
$string['notenoughanswers'] = 'Întrebările de tip Ordonare trebuie să aibă mai mult de {$a} răspunsuri.';
$string['numberingstyle'] = 'Numerotați opțiunile?';
$string['numberingstyle123'] = '1., 2., 3., ...';
$string['numberingstyleABCD'] = 'A., B., C., ...';
$string['numberingstyleIIII'] = 'I., II., III., ...';
$string['numberingstyle_desc'] = 'Stilul de numerotare implicit.';
$string['numberingstyle_help'] = 'Alegeți stilul de numerotare pentru elementele din această întrebare care pot fi repoziționate.';
$string['numberingstyleabc'] = 'a., b., c., ...';
$string['numberingstyleiii'] = 'i., ii., iii., ...';
$string['numberingstylenone'] = 'Fără numerotare';
$string['pluginname'] = 'Ordonare';
$string['pluginname_help'] = 'Mai multe elemente sunt afișate într-o ordine amestecată. Elementele pot fi repoziționate într-o ordine logică.';
$string['pluginname_link'] = 'question/type/ordering';
$string['pluginnameadding'] = 'Se adugă o întrebare de tip Ordonare';
$string['pluginnameediting'] = 'Se editează o întrebare de tip Ordonare';
$string['pluginnamesummary'] = 'Aranjați elementele amestecate într-o ordine logică.';
$string['positionx'] = 'Poziție {$a}';
$string['privacy:metadata'] = 'Plugin-ul ordering question type nu stochează date personale.';
$string['regradeissuenumitemschanged'] = 'Numărul elementelor care pot fi repoziționate s-a modificat.';
$string['relativeallpreviousandnext'] = 'Relativ la TOATE elementele anterioare și următoare';
$string['relativenextexcludelast'] = 'Relativ la următorul articol (excluzând ultimul)';
$string['relativenextincludelast'] = 'Relativ la următorul articol (inclusiv ultimul)';
$string['relativeonepreviousandnext'] = 'Relativ atât la elementele anterioare, cât și la cele următoare';
$string['relativetocorrect'] = 'Relativ la poziția corectă';
$string['removeeditor'] = 'Stergeți editorul HTML';
$string['removeitem'] = 'Șterge element care poate fi repoziționat';
$string['scoredetails'] = 'Aici sunt punctajele pentru fiecare element al acestui răspuns:';
$string['selectall'] = 'Selectați toți itemii';
$string['selectcontiguous'] = 'Selectați un subset învechit de elemente';
$string['selectcount'] = 'Dimensiune subset';
$string['selectcount_help'] = 'Numărul de itemi care vor fi afișați atunci când întrebarea apare într-un test.';
$string['selectrandom'] = 'Selectează un subset aleatoriu de elemente';
$string['selecttype'] = 'Tip de selectare a elementelor';
$string['selecttype_help'] = 'Alegeți dacă doriți să afișați toate elementele sau un subset de elemente.';
$string['showgrading'] = 'Detalii despre notare';
$string['showgrading_help'] = 'Alegeți dacă doriți să afișați sau să ascundeți detaliile calculului punctajului atunci când un cursant revizuiește un răspuns la această întrebare de tip Ordonare.';
$string['vertical'] = 'Vertical';
$string['yougotnincorrect'] = 'Aveți $a->numincorrect} {$a->numincorrectplural} incorecte.';
$string['yougotnpartial'] = 'Aveți {$a->numpartial} {$a->numpartialplural} parțial corecte.';
$string['yougotnright'] = 'Aveți {$a->numright} {$a->numrightplural} corecte.';
