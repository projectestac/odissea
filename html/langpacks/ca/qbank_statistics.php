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
 * Strings for component 'qbank_statistics', language 'ca', version '4.5'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = 'Necessita comprovació?';
$string['discrimination_index_help'] = 'Es marca que una pregunta és probable que necessiti comprovació en funció de les estadístiques de la pregunta. Per exemple, si els estudiants obtenen una puntuació baixa a la pregunta però una puntuació alta a tot el qüestionari, o una puntuació alta a la pregunta però una puntuació baixa a tot el qüestionari, aleshores hi pot haver un problema amb la pregunta, com ara que la resposta incorrecta estigui establerta com a correcta. No obstant això, les estadístiques no són infal·libles; això només és una pista que indica que la pregunta s\'hauria de comprovar.';
$string['discriminative_efficiency'] = 'Eficiència discriminativa';
$string['discriminative_efficiency_help'] = 'L\'eficiència discriminativa és una estimació estadística de com de bé la pregunta avalua els alumnes, en la qual un valor més alt és millor. Un valor especialment baix pot indicar un problema amb la pregunta. Una pregunta molt difícil o molt fàcil (amb un índex de facilitat que s\'acosti al 0% o al 100%) també pot portar a un valor baix.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['emptyvalue'] = '-';
$string['facility_index'] = 'Índex de facilitat';
$string['facility_index_help'] = 'L\'índex de facilitat dona una nota mitjana (com a percentatge) obtinguda a la pregunta (totes les versions) a tots els qüestionaris en què s\'ha intentat respondre la pregunta. Un valor més alt normalment indica una pregunta més fàcil.';
$string['likely'] = 'Probablement sí';
$string['na'] = 'No disponible';
$string['pluginname'] = 'Estadístiques de preguntes';
$string['privacy:metadata'] = 'El connector d\'estadístiques del banc de preguntes no desa cap dada personal.';
$string['unlikely'] = 'Poc probable';
$string['verylikely'] = 'Molt probablement';
