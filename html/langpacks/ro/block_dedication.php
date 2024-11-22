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
 * Strings for component 'block_dedication', language 'ro', version '4.1'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_filter_courseid_help'] = 'Filtrare raport după denumire curs';
$string['admin_filter_form'] = 'Configurare bloc Timp petrecut în curs';
$string['admin_filter_form_help'] = 'Timpul este estimat pe baza conceptelor Sesiune și Durata sesiunii aplicate jurnalizării accesărilor cursului.

<strong>Click:</strong> De fiecare dată când un utilizator accesează o pagină din Moodle, se  efectuează o juranlizare a acelei sesiuni.

<strong>Sesiune:</strong> set de două sau mai multe clickuri consecutive în care timpul din curs dintre fiecare pereche de clickuri consecutive nu depășește un timp maxim stabilit.

<strong>Durata sesiunii:</strong> timpul din curs dintre prima și ultima accesare (click-uri) din sesiune.

<strong>Durata sesiunii:</strong> suma tuturor sesiunilor unui utilizator.';
$string['admin_filter_form_text'] = 'Selectează intervalul de date și timpul maxim dintre accesările (click) efectuate de utilizatori în aceeași sesiune.';
$string['admin_filter_maxtime'] = 'Încheierea perioadei';
$string['admin_filter_maxtime_help'] = 'Considerați doar accesările cursului până la această dată';
$string['admin_filter_mintime'] = 'Începerea perioadei';
$string['admin_filter_mintime_help'] = 'Considerați doar accesările cursului după această dată';
$string['admin_filter_submit'] = 'Calculați';
$string['allloglifetime'] = 'Păstrați istoricul sesiunilor timp de';
$string['averagetimespent'] = '<strong>Timp mediu petrecut în curs:</strong> {$a}';
$string['cleanuptask'] = 'Procesul de curățare al istoricului sesiunilor';
$string['collect_dedication'] = 'Colectare date pentru blocul Timp petrecut în curs';
$string['configallloglifetime'] = 'Se specifică perioada de timp cât doriți să păstrați date despre durata sesiunilor. Sesiunile care sunt mai vechi decât această setare sunt șterse automat.';
$string['connectionratiorow'] = 'Conexiuni pe zi';
$string['dedication:addinstance'] = 'Se permite adăugarea blocului Timp petrecut în curs';
$string['dedication:myaddinstance'] = 'Se permite adăugarea blocului Timp petrecut în curs de pagina Tablou de bord';
$string['dedication:viewreports'] = 'Se permite vizualizarea rapoartelor Timpului petrecut în curs';
$string['dedicationall'] = 'Timpul petrecut în curs de către toți cursanții. Dați click pe orice nume pentru a afla informații detaliate despre timpul petrecut în curs de utilizatorul respectiv.';
$string['dedicationrow'] = 'Timp petrecut în curs';
$string['enrolmententity'] = 'Înscriere';
$string['enrolmentmethod'] = 'Metodă de înscriere';
$string['entity_dedication'] = 'Timp petrecut în curs';
$string['excludesessionslessthan'] = 'Omite sesiunile mai mici decât {$a}';
$string['group'] = 'Grup';
$string['groupentity'] = 'Grup';
$string['ignore_sessions_limit'] = 'Ignoră limita sesiunii';
$string['ignore_sessions_limit_desc'] = 'Elimină sesiunile mai scurte, orice valoare mai mică decât această valoare (în minute) va fi ignorată în raportul Timp petrecut în curs.';
$string['lastupdated'] = 'Ultima actualizare: {$a}';
$string['period'] = 'Perioada de la <em>{$a->mintime}</em> la <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Timp în curs:</strong>  {$a}';
$string['pluginname'] = 'Timp petrecut în curs';
$string['privacy:metadata'] = 'Plugin-ul block_dedication stochează durata de timp pe care utilizatorii au petrecut-o în cursuri.';
$string['privacy:metadata:block_dedication:courseid'] = 'Identificatorulii cursului pentru care se generează raportul Timpului petrecut în curs';
$string['privacy:metadata:block_dedication:timespent'] = 'Timp petrecut în curs';
$string['privacy:metadata:block_dedication:timestart'] = 'Data de începere a jurnalizării sesiunilor';
$string['privacy:metadata:block_dedication:userid'] = 'ID-ul utilizatorului pentru care se generează raportul Timp petrecut în curs';
$string['report_dedication'] = 'Raportul Instrumentului Timp petrecut în curs';
$string['report_timespent'] = 'Raport Timp petrecut în curs';
$string['session_limit'] = 'Limita sesiunii';
$string['session_limit_desc'] = 'Durata sesiunii pentru pagina de filtrare a rapoartelor';
$string['sessionduration'] = 'Durata sesiunii';
$string['sessiondurationsum'] = 'Durata sesiunii (sum)';
$string['sessionstart'] = 'Începere sesiune';
$string['showestimatedtime'] = 'Afișarea timpului petrecut în curs pentru utilizatori.';
$string['showestimatedtime_help'] = 'Această setare a blocului permite utilizatorilor să vadă timpul estimat petrecut în curs.';
$string['timespent_estimation'] = 'Timpul estimat petrecut în curs este:';
$string['timespentincourse'] = 'Timp petrecut în curs';
$string['timespentreport'] = 'Raport complet';
$string['timespenttasknotrunning'] = 'Procesul de calcul al Timpului petrecut în timp nu a rulat încă.';
$string['totaltimespent'] = '<strong>Timpul total petrecut în curs:</strong> {$a}';
$string['userdedication'] = 'Detalii despre timpul petrecut în curs de <em>{$a}</em>.';
$string['viewsessiondurationreport'] = 'Vizualizare raport al duratei sesiunii';
