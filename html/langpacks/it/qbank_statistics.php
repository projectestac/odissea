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
 * Strings for component 'qbank_statistics', language 'it', version '4.5'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = 'Da controllare';
$string['discrimination_index_help'] = 'Le statistiche possono indicare delle domande che necessitano di essere controllate.  Una domanda può risultare. Ad esempio, se gli studenti ottengono un punteggio basso sulla domanda ma un punteggio alto sull\'intero quiz, o un punteggio alto sulla domanda ma un punteggio basso sull\'intero quiz, allora potrebbe esserci un problema con la domanda come l\'ua risposta errata impostata come corretta. Le statistiche tuttavia non sono infallibili, si tratta solo di suggerimenti che consigliano di controllata la domanda.';
$string['discriminative_efficiency'] = 'Efficienza discriminante';
$string['discriminative_efficiency_help'] = 'L\'efficienza discriminante è una stima statistica di quanto la domanda sia in grado di valutare gli studenti; un valore più alto è migliore. Un valore particolarmente basso può indicare un problema nella domanda. Anche una domanda molto difficile o facile (con un indice di facilità vicino allo 0% o al 100%) può portare a un valore basso.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['emptyvalue'] = '-';
$string['facility_index'] = 'Indice di semplicità';
$string['facility_index_help'] = 'L\'indice di semplicità indica il voto medio (in percentuale) ottenuto sulla domanda (tutte le versioni) in tutti i quiz in cui la domanda è stata tentata. Un valore più alto indica normalmente una domanda più facile.';
$string['likely'] = 'Probabile';
$string['na'] = 'N/D';
$string['pluginname'] = 'Statistiche della domanda';
$string['privacy:metadata'] = 'Il plugin Statistiche delle domande del deposito delle domande non memorizza dati personali.';
$string['unlikely'] = 'Improbabile';
$string['verylikely'] = 'Molto probabile';
