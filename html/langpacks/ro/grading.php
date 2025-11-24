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
 * Strings for component 'grading', language 'ro', version '4.5'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '"{$a->method} \'este selectată ca metodă de notare activă pentru        "{$a->area}\' zona';
$string['activemethodinfonone'] = 'Nu este selectată nicio metodă avansată de notare pentru \'{$a->area}\' zona. Va fi folosită notarea simplă.';
$string['changeactivemethod'] = 'Schimbă metoda actuală de notare';
$string['clicktoclose'] = 'click pentru a închide';
$string['error:gradingunavailable'] = 'Metoda avansată de notare nu este setată corect. Vă rugăm să verificați toate opțiunile de evaluare a forumului în setările forumului.';
$string['error:notinrange'] = 'Nota \'{$a->grade}\' oferită nu este validă. Notele trebuie să fie între 0 și {$a->maxgrade}.';
$string['exc_gradingformelement'] = 'Imposibil de instanțiat elementul formularului de notare';
$string['formnotavailable'] = 'A fost selectată o metodă avansată de notare, dar forma de notare încă trebuie definită.';
$string['gradingformunavailable'] = 'Vă rugăm să rețineți: formularul de notare avansată nu este finalizat acum. Metodă de clasificare simplă va fi utilizată până când formularul va avea un statut valid.';
$string['gradingmanagement'] = 'Notare avansată';
$string['gradingmanagementtitle'] = 'Notare avansată: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Metodă de notare';
$string['gradingmethod_help'] = 'Alegeți metoda de notare avansată care ar trebui să fie utilizată pentru calcularea notelor în contextul dat.

Pentru a dezactiva notarea avansată și a reveni la mecanismul de notare implicit, alegeți "Notare simplă directă".';
$string['gradingmethodnone'] = 'Notare simplă directă';
$string['gradingmethods'] = 'Metode de notare';
$string['manageactionclone'] = 'Creează formular nou de notare dintr-un șablon';
$string['manageactiondelete'] = 'Șterge formularul definit în prezent';
$string['manageactiondeleteconfirm'] = 'Aveți de gând să ștergeți formularul de notare \'{$a->formname}\'  și toate informațiile asociate de la \'{$a->component} ({$a->area})\'.  Vă rugăm să vă asigurați că ați înțeles următoarele consecințe:

* Nu există nici o modalitate de a anula această operație.
* Puteți alege o altă metodă de clasificare, inclusiv "clasificarea simplă directă" fără a șterge acest formular.
* Toate informațiile cu privire la modul în care formularele sunt completate vor fi pierdute.
* Notele calculate și stocate în catalog nu vor fi afectate. Cu toate acestea, explicația privind modul în care acestea au fost calculate nu va fi disponibilă.
* Această operațiune nu afectează eventualele copii ale acestui formular în alte activități.';
$string['manageactiondeletedone'] = 'Formularul a fost șters cu succes';
$string['manageactionedit'] = 'Editează definiția actuală a formularului';
$string['manageactionnew'] = 'Definește noul formular  de clasificare de la zero';
$string['manageactionshare'] = 'Publică formularul sub formă de șablon nou';
$string['manageactionshareconfirm'] = 'Veți salva o copie a formularului de clasificare \'{$a}\' ca un nou șablon public. Alti utilizatori din site-ul dumneavoastră vor putea să creeze noi formulare de notare în activitățile lor din acel șablon.';
$string['manageactionsharedone'] = 'Formularul a fost salvat cu succes sub formă de șablon';
$string['noitemid'] = 'Notarea nu este posibilă. Elementul notat nu există.';
$string['nosharedformfound'] = 'Nu a fost găsit niciun șablon';
$string['privacy:metadata:grading_definitions'] = 'Informații de bază despre un formular de notare avansat definit într-o zonă de notare.';
$string['privacy:metadata:grading_definitions:areaid'] = 'ID-ul zonei unde este definit formularul de notare avansat.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'ID-ul definiției de notare de unde a fost copiat.';
$string['privacy:metadata:grading_definitions:description'] = 'Descrierea metodei avansate de notare.';
$string['privacy:metadata:grading_definitions:method'] = 'Metoda de notare care este responsabilă pentru definiție.';
$string['privacy:metadata:grading_definitions:name'] = 'Numele definiției avansate de notare.';
$string['privacy:metadata:grading_definitions:options'] = 'Unele setări ale acestei definiții de notare.';
$string['privacy:metadata:grading_definitions:status'] = 'Starea acestei definiții avansate de notare.';
$string['privacy:metadata:grading_definitions:timecopied'] = 'Ora la care a fost copiată definiția de notare.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'Ora la care a fost creată definiția de notare.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'Ora la care a fost modificată ultima dată definiția de notare.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'ID-ul utilizatorului care a creat definiția de notare.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'ID-ul utilizatorului care a modificat ultima dată definiția de notare.';
$string['privacy:metadata:grading_instances'] = 'Înregistrare de evaluare pentru un articol gradabil evaluat de un evaluator.';
$string['privacy:metadata:grading_instances:feedback'] = 'Feedback-ul oferit de utilizator.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'Formatul feedback-ului oferit de utilizator.';
$string['privacy:metadata:grading_instances:raterid'] = 'ID-ul utilizatorului care a evaluat instanța de notare.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'Nota pentru instanța de notare.';
$string['privacy:metadata:grading_instances:status'] = 'Starea acestei instanțe de notare.';
$string['privacy:metadata:grading_instances:timemodified'] = 'Ora la care ultima instanță de notare a fost modificată ultima dată.';
$string['privacy:metadata:gradingformpluginsummary'] = 'Date pentru metoda de notare.';
$string['searchownforms'] = 'Include propriile mele formulare';
$string['searchtemplate'] = 'Căutare formulare de notare';
$string['searchtemplate_help'] = 'Puteți căuta un formular de notare și să îl folosiți ca un șablon pentru noile formulare de notare de aici. Pur și simplu tastați cuvinte care ar trebui să apară undeva în numele formularului, în descrierea sau în cuprinsul formularului. Pentru a căuta o frază, inserați întreaga interogare în ghilimele duble.

În mod implicit, numai formularele de notare care au fost salvate ca șabloane comune sunt incluse în rezultatele de căutare. Puteți include, de asemenea toate formularele dumneavoastră de notare în rezultatele de căutare. În acest fel, puteți pur și simplu re-utiliza formularele de clasificare fără partajarea lor. Doar formularele marcate ca "gata de utilizare" pot fi re-utilizat în acest fel.';
$string['statusdraft'] = 'Draft';
$string['statusready'] = 'Gata pentru utilizare';
$string['templatedelete'] = 'Șterge';
$string['templatedeleteconfirm'] = 'Doriți să ștergeți șablonul partajat \'{$a}\'. Ștergerea unui șablon nu afectează formularele existente care au fost create pe baza lui.';
$string['templateedit'] = 'Editează';
$string['templatepick'] = 'Folosește acest șablon';
$string['templatepickconfirm'] = 'Doriți să utilizați formularul de notare "{$a->formname}\' ca un șablon pentru noul formular de notare în \'{$a->component} ({$a->area})\'?';
$string['templatepickownform'] = 'Utilizează acest formular ca un șablon';
$string['templatesource'] = 'Locație: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Formular propriu';
$string['templatetypeshared'] = 'Șablon partajat';
