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
 * Strings for component 'workshopallocation_scheduled', language 'ro', version '4.4'.
 *
 * @package     workshopallocation_scheduled
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'Procesare de fundal pentru alocare programată';
$string['currentstatus'] = 'Status actual';
$string['currentstatusexecution'] = 'Status';
$string['currentstatusexecution1'] = 'Executat pe {$a->datetime}';
$string['currentstatusexecution2'] = 'Pentru a fi executat din nou pe {$a->datetime}';
$string['currentstatusexecution3'] = 'Pentru a fi executat pe {$a->datetime}';
$string['currentstatusexecution4'] = 'Așteaptă execuția';
$string['currentstatusnext'] = 'Următoarea execuție';
$string['currentstatusnext_help'] = 'În unele cazuri, alocarea este programată să fie executată din nou automat, chiar dacă a fost deja executată. Acest lucru se poate întâmpla dacă termenul limită de trimitere a fost prelungit, de exemplu.';
$string['currentstatusreset'] = 'Resetează';
$string['currentstatusreset_help'] = 'Salvarea formularului cu această casetă bifată va duce la resetarea stării curente. Toate informațiile despre execuția anterioară vor fi eliminate, astfel încât alocarea să poată fi executată din nou (dacă este activată mai sus).';
$string['currentstatusresetinfo'] = 'Bifați caseta și salvați formularul pentru a reseta rezultatul executării';
$string['currentstatusresult'] = 'Rezultatul execuției recente';
$string['enablescheduled'] = 'Activează alocarea programată';
$string['enablescheduledinfo'] = 'Alocare automată';
$string['pluginname'] = 'Alocare programată';
$string['privacy:metadata'] = 'Pluginul de alocare programată nu stochează date personale. Datele personale reale despre cine urmează să evalueze pe cine sunt stocate chiar de modulul Workshop și constituie baza pentru exportul detaliilor evaluărilor.';
$string['randomallocationsettings'] = 'Setări alocare';
$string['randomallocationsettings_help'] = 'Parametrii pentru metoda alocării aleatorii sunt definiți aici. Acestea vor fi utilizate de pluginul de alocare aleatorie pentru alocarea efectivă a trimiterilor.';
$string['resultdisabled'] = 'Alocarea programată dezactivată';
$string['resultenabled'] = 'Alocarea programată activată';
$string['resultexecuted'] = 'Succes';
$string['resultfailed'] = 'Nu se poate aloca automat propunerile';
$string['resultfailedconfig'] = 'Alocarea programată configurată greșit';
$string['resultfaileddeadline'] = 'Laboratorul nu are definit termene limite de trimitere a propunerilor';
$string['resultfailedphase'] = 'Laboratorului nu este în etapa de acceptare de propuneri';
$string['resultvoid'] = 'Nici o propunere nu a fost alocata';
$string['resultvoiddeadline'] = 'Nu după termenul de trimitere a răspunsurilor';
$string['resultvoidexecuted'] = 'Alocarea a fost deja executată';
$string['scheduledallocationsettings'] = 'Setări alocare programată';
$string['scheduledallocationsettings_help'] = 'Dacă este activată, metoda de alocare planificată va aloca automat trimiterile pentru evaluare la sfârșitul fazei de trimitere. Sfârșitul fazei poate fi definit în setarea atelierului „Termen limită de trimitere răspuns”.

Pe plan intern, metoda de alocare aleatorie se execută cu parametrii predefiniți în acest formular. Înseamnă că alocarea programată funcționează ca și cum profesorul ar fi executat ei înșiși alocarea aleatorie la sfârșitul fazei de trimitere folosind setările de alocare de mai jos.

Rețineți că alocarea programată * nu * este executată dacă comutați manual atelierul în faza de evaluare înainte de termenul limită de trimitere. În acest caz, trebuie să alocați trimiterile dvs. Metoda de alocare programată este deosebit de utilă atunci când este utilizată împreună cu caracteristica de comutare automată a fazelor.';
$string['setup'] = 'Configurare alocare programată';
