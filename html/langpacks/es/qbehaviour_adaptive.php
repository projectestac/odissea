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
 * Strings for component 'qbehaviour_adaptive', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   qbehaviour_adaptive
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['disregardedwithoutpenalty'] = 'La entrega no era válida, y se ha obviado sin penalización.';
$string['gradingdetails'] = 'Puntos para este envío:
{$a->raw}/{$a->max}.';
$string['gradingdetailsadjustment'] = 'Con las penalizaciones previas da como resultado
<strong>{$a->cur}/{$a->max}</strong>.';
$string['gradingdetailspenalty'] = 'Este envío supone una penalización de {$a}.';
$string['gradingdetailspenaltytotal'] = 'Total de penalizaciones hasta ahora: {$a}.';
$string['gradingdetailswithadjustment'] = 'Puntos para este envío: {$a->raw}/{$a->max}. Contando con los intentos anteriores, daría <strong>{$a->cur}/{$a->max}</strong>.';
$string['gradingdetailswithadjustmentpenalty'] = 'Puntos para este envío: {$a->raw}/{$a->max}. Contando con los intentos anteriores, daría <strong>{$a->cur}/{$a->max}</strong>. A este envío se le aplicó una penalización de {$a->penalty}.';
$string['gradingdetailswithadjustmenttotalpenalty'] = 'Puntos para este envío: {$a->raw}/{$a->max}. Contando con los intentos anteriores, daría <strong>{$a->cur}/{$a->max}</strong>.  A este envío se le aplicó una penalización de {$a->penalty}. Penalizaciones totales hasta el momento: {$a->totalpenalty}.';
$string['gradingdetailswithpenalty'] = 'Puntos para este envío: {$a->raw}/{$a->max}. A este envío se le aplicó una penalización de {$a->penalty}.';
$string['gradingdetailswithtotalpenalty'] = 'Puntos para este envío: {$a->raw}/{$a->max}. A este envío se le aplicó una penalización de {$a->penalty}. Penalizaciones totales hasta el momento: {$a->totalpenalty}.';
$string['notcomplete'] = 'Sin finalizar';
$string['pluginname'] = 'Modo adaptativo';
