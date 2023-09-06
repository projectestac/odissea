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
 * Strings for component 'availability_grade', language 'it', version '4.1'.
 *
 * @package     availability_grade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_items'] = 'Elementi di valutazione per il computo delle condizioni per l\'accesso';
$string['cachedef_scores'] = 'Valutazioni dell\'utente per il computo delle condizioni per l\'accesso';
$string['description'] = 'Criterio di accesso basato sulla valutazione.';
$string['error_backwardrange'] = 'Se si specifica un intervallo di valutazioni, il valore minimo deve essere inferiore al valore massimo.';
$string['error_invalidnumber'] = 'Gli ntervalli di valutazioni devono essere specificati con percentuali valide';
$string['error_selectgradeid'] = 'Devi selezionare un elemento di valutazione per la condizione';
$string['label_max'] = 'Percentuale massima (non inclusa)';
$string['label_min'] = 'Percentuale minima (inclusa)';
$string['missing'] = '(attività mancante)';
$string['option_max'] = 'deve essere <';
$string['option_min'] = 'deve essere  ≥';
$string['pluginname'] = 'Criterio basato sulla valutazione';
$string['privacy:metadata'] = 'l plugin "criterio di accesso basato sulla valutazione" non memorizza dati personali.';
$string['requires_any'] = 'Aver ricevuto una valutazione in <strong>{$a}</strong>';
$string['requires_max'] = 'Non aver ottenuto una determinata valutazione in <strong>{$a}</strong>';
$string['requires_min'] = 'Aver ottenuto o superato la valutazione richiesta in <strong>{$a}</strong>';
$string['requires_notany'] = 'Non aver ricevuto una valutazione in <strong>{$a}</strong>';
$string['requires_notgeneral'] = 'Non aver ottenuto una determinata valutazione in <strong>{$a}</strong>';
$string['requires_range'] = 'Aver ricevuto una valutazione compresa in un dato intervallo in <strong>{$a}</strong>';
$string['title'] = 'Valutazione';
