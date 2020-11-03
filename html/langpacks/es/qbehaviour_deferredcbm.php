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
 * Strings for component 'qbehaviour_deferredcbm', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   qbehaviour_deferredcbm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Precisión';
$string['accuracyandbonus'] = 'Precisión + Bono';
$string['assumingcertainty'] = 'No ha seleccionado un grado de certeza. Asumiendo: {$a}.';
$string['cbmgrades_help'] = 'Con Puntaje Basado en Certeza = PBC (Certainty Based Marking = CBM) el tener todas las preguntas correctas con C=1 (baja certeza) da una puntuación de 100%. Las calificaciones pueden ser tan altas como del 300% si todas las preguntas fueran correctas y con C=3 (alta certeza). Los prejuicios (mostrar confianza en respuestas erroneas) hacen que las calificaciones bajen mucho más de lo que lo harían respuestas equivocadas que se reconozcan como de poca confianza. Esto podría inclusive llegar a calificaciones globales negativas.

**Precisión** es el % de correctas, ignorando la certeza, pero ponderando para la puntuación máxima de cada pregunta. El poder distiguir exitosamente las respuestas más confiables de las menos confiables da una mejor calificación que si se eligira la misma certeza para cada pregunta. Esto se refleja en el **Bono PBC**. **Precisión** + **Bono PBC** es una mejor medida del conocimiento que la mera **Precisión**. Los prejuicios pueden conducir a un bono negativo; una advertencia para revisar con cuidado qué es lo que si se sabe contra lo que no se sabe.';
$string['certainty'] = 'Certeza';
$string['certainty1'] = 'No mucho (menor a 67%)';
$string['certainty2'] = 'Regular (más de 67%)';
$string['certainty3'] = 'Muy (más de 80%)';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['howcertainareyou'] = 'Grado de certeza{$a->help}: {$a->choices}';
$string['judgementok'] = 'Ok';
$string['judgementsummary'] = 'Respuestas: {$a->responses}. Precisión: {$a->fraction}. (Rango óptimo {$a->idealrangelow} a {$a->idealrangehigh}). Usted estuvo {$a->judgement} usando éste nivel de certeza.';
$string['noquestions'] = 'No hay respuestas';
$string['pluginname'] = 'Retroalimentación diferida con CBM';
$string['weightx'] = 'Peso {$a}';
