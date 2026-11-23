<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_geogebra'
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] = 'Adauga constrângeri (condiții) în variabile.';
$string['addmorevarblanks'] = 'Rubrica pentru {no} mai multe variabile';
$string['answerinvalid'] = 'Răspunsul-string în replica este invalid. Acest lucru nu ar trebui să se întâmple.';
$string['answermissing'] = 'Răspunsul în replică lipsește. Probabil că JavaScript nu este activat în browser-ul sau a apărut o eroare necunoscută';
$string['answervar'] = 'Variabile pentru automate de sortare';
$string['answervar_help'] = 'Pentru automate de sortare: Un nume din un obiect boolean în GeoGebra care este adevărat în cazul în care studentul a rezolvat problema (parțial). Însumează toate clasele pentru toate variabilele booleene. Întrebarea este corectă dacă orice combinație depășește 100%, dar ar trebui să existe cel puțin o combinație care rezumă la exact 100%. Lăsați necompletat pentru clasificare manual.';
$string['applet_advanced_settings'] = 'Advanced Settings...';
$string['constraints'] = 'Constrângeri (condiții)';
$string['constraints_help'] = 'Există constrângeri de variabile, cum ar fi a <b, care nu ar putea fi declarate folosind opțiunile slider? Separate prin virgulă. Relațiile suportate sunt: <, <=,>,> =. Dacă aveți nevoie de o egalitate va trebui să utilizați aceeași variabilă la crearea foaia de lucru GeoGebra. Intervale dinamice, de exemplu, folosind variabilele pentru cursor min / max nu sunt suportate.';
$string['constraintswrongortoohard'] = '{$a->inequalities} sunt greșite sau prea greu pentru a fi realizate, noi am încercat (forță brută) {$a->tries} ori în {$a->time} secunde. Poate vom folosi o metodă mai bună în viitor ...';
$string['dragndrop'] = 'Drag and drop a GeoGebra file anywhere on the GeoGebra Applet section';
$string['enable_label_drags'] = 'Enable Dragging of Labels';
$string['enable_right_click'] = 'Enable Right Click and Keyboard Editing';
$string['enable_shift_drag_zoom'] = 'Enable Shift-Drag & Zoom';
$string['feedback'] = 'Feedback atunci când variabila este adevărat';
$string['feedback_help'] = 'Feedback-ul este preluat automat din captura din variabilă a fișierul GeoGebra.';
$string['geogebraapplet'] = 'GeoGebra Applet';
$string['getvars'] = 'Luați variabilele care poate fi aleatoriu din applet';
$string['ggbfilemissing'] = 'Șirul base64 în răspuns lipsește. Probabil JavaScript nu este activat în browser-ul sau a apărut o eroare necunoscută';
$string['ggbturl'] = 'URL-ul sau ID-ul al fișei de lucru GeoGebra';
$string['ggbturl_help'] = 'Ai putea folosi fie butonul de partajare de la GeoGebra și copiați și inserați link-ul sau utilizați magazia GeoGebra. Applet-ul și parametrii sunt stocate în baza de date, applet-ul nu va fi reîncărcată din GeoGebra excepția cazului în care a solicitat. Doar asigurarea ID-ul sau partajarea cheie al applet-uluicare este suportat';
$string['ggbxmlmissing'] = 'Șirul XML în răspuns lipsește. Probabil JavaScript nu este activat în browser-ul sau a apărut o eroare necunoscută';
$string['invalidinequality'] = '{$a} este invalid';
$string['isexercise'] = 'Use GeoGebra-Exercise for checking the question';
$string['isexercise_help'] = 'The applet contains user-defined tools which can be used for automatic checking of the exercise.\nBeware: All answers below are not applicable in this case!';
$string['israndomized'] = 'Există variabile care ar trebui să fie aleatorii?';
$string['loadapplet'] = '(Re)încărcare și arată applet';
$string['loadapplet_help'] = '(Re)încărcați applet-ul de la GeoGebra și depozitați noua versiune din GeoGebra în baza de date.';
$string['mineqmax'] = 'Min și Max pentru randomizare nu sunt specificate în mod adecvat pentru variabila {$a}, fie nu ați specificat cursorul min și maxim sau elementul nu este un cursorde fel. Probabil va trebui să corecteze acest lucru în fișierul GeoGebra.';
$string['minplusstepgtmax'] = 'Min plus incrementat este mai mare decât Max pentru variabila {$a}, probabil va trebui să corecteze acest lucru în fișierul GeoGebra.';
$string['noappletloaded'] = 'Nici un Applet încărcat! Verificați dacă adresa URL este corectă și dacă vedeți un applet după alegerea un link sau (re)încărcarea applet';
$string['nofractionsumeq1'] = 'Cel puțin o combinatie de note trebuie să rezume până la 100%';
$string['pluginname_help'] = 'Întrebări în cazul în care studentul poate rezolva problema cu ajutorul GeoGebra';
$string['pluginnameadding'] = 'Adaugarea unei întrebări GeoGebra';
$string['pluginnameediting'] = 'Editarea unei întrebări GeoGebra';
$string['pluginnamesummary'] = 'O versiune de întrebări calculate care utilizează GeoGebra pentru a arăta întrebarea și să verifice răspunsul când se face testul.';
$string['randomizedbutnovars'] = 'Ati selectat că întrebarea ar trebui să fie aleatorie, dar nu a specificat nici o variabilă valabilă să fie aleatorie.';
$string['randomizedvar'] = 'Variabilele care se să fie aleatorie';
$string['randomizedvar_help'] = 'Variabile pe care ar trebui să fie să fie aleatorie (separate prin virgulă). Utilizați opțiunea cursor în GeoGebra să o declare Min, Max și Incrementarea. Aceste variabile pot fi de asemenea folosite în textul discuție prin instalarea acestora cu acolade, de exemplu: {a}';
$string['show_algebra_input'] = 'Show Input Bar';
$string['show_menu_bar'] = 'Show Menu';
$string['show_reset_icon'] = 'Show Icon to Reset Construction';
$string['show_tool_bar'] = 'Show Toolbar';
$string['stepzero'] = 'Incrementarea este 0 pentru variabila {$ 5}; fie nu ați specificat incrementarea cursorul sau elementul nu este un cursor. Probabil va trebui să corecteze acest lucru în fișierul GeoGebra.';
$string['useafile'] = '... or use a ggb-file';
$string['valuecheckedfor'] = 'Obiect boolean în GeoGebra care este folosit pentru a verifica corectitudinea.';
$string['variablenamewrong'] = 'O variabilă cu acest nume nu a putut fi găsită în fișierul GeoGebra.';
$string['variableno'] = 'Variabila {$a}';
$string['variables'] = 'Variable';
$string['willbereadfromfile'] = 'Va fi citit din GeoGebra ... (vezi butonul de ajutor)';
