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
 * Strings for component 'block_grade_me', language 'it', version '4.5'.
 *
 * @package     block_grade_me
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alt_gradebook'] = 'Vai al registro valutatore di  {$a->course_name}…';
$string['alt_mark'] = 'verifica';
$string['alt_mod'] = 'Vai al registro valutatore di {$a->mod_name}…';
$string['excess'] = 'Ci sono più di {$a->maxcourses} corsi con attività non valutate.';
$string['expand'] = 'Minimizza / Espandi tutto';
$string['grade_me:addinstance'] = 'Aggiungere blocco Valutami';
$string['grade_me:myaddinstance'] = 'Aggiungere blocco Valutami alla pagina My Moodle';
$string['grade_me_tools'] = 'Strumenti';
$string['grade_me_tools_desc'] = '<p><a href="{$a}/blocks/grade_me/quiz_update_ngrade.php">Aggiorna i tentativi dei quiz in attesa di valutazione</a></p>';
$string['link_grade_img'] = 'Valuta l\'attività...';
$string['link_gradebook'] = 'Vai a {$a->course_name}…';
$string['link_gradebook_icon'] = 'Vai al registro valutatore di {$a->course_name}…';
$string['link_mod'] = 'Vai a {$a->mod_name}';
$string['link_mod_img'] = 'Vai al registro valutatore di {$a->mod_name}…';
$string['link_user_profile'] = 'Profilo di {$a->first_name}…';
$string['nothing'] = 'Nulla da valutare!';
$string['pluginname'] = 'Valutami';
$string['pluginname-reset'] = 'Valutami - Esegui il reset della tabella';
$string['quiz_update_ngrade_complete'] = 'Aggiornamento completato';
$string['quiz_update_ngrade_success'] = 'L\'elenco dei tentativi dei quiz è stato aggiornato, sono presenti {$a} domande in attesa di valutazione.';
$string['settings_adminviewall'] = 'Gli amministratori visualizzano tutte le attività da valutare';
$string['settings_configadminviewall'] = 'Consente agli amministratori di visualizzare tutte le attività non valutate - anche all\'interno dei corsi in cui non hanno il ruolo di valutatore.';
$string['settings_configenablepre'] = 'Visualizza nel blocco Valutami le attività non valutate presenti nel modulo "{$a->plugin_name}"';
$string['settings_configmaxcourses'] = 'Imposta il numero massimo di corsi in cui sono presenti attività da valutare che è possibile visualizzare. Un numero elevato potrebbe impattare negativamente sulle performance.';
$string['settings_enablepre'] = 'Visualizza';
$string['settings_maxcourses'] = 'Massimo numero di corsi da visualizzare';
$string['title'] = 'Valutami';
