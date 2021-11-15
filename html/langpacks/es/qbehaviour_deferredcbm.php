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
 * Strings for component 'qbehaviour_deferredcbm', language 'es', version '3.11'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Precisión';
$string['accuracyandbonus'] = 'Precisión + Bono';
$string['assumingcertainty'] = 'No ha seleccionado un grado de certeza. Asumiendo: {$a}.';
$string['averagecbmmark'] = 'Puntuación promedio CBM';
$string['basemark'] = 'Puntuación base {$a}';
$string['breakdownbycertainty'] = 'Desglose por certeza';
$string['cbmbonus'] = 'Bono CBM';
$string['cbmgradeexplanation'] = 'Para CBM (Marca Basada en Certeza), la calificación de arriba se muestra relativa al máximo para todas las correctas en C=1.';
$string['cbmgrades'] = 'Calificaciones CBM (Marca Basada en Certeza)';
$string['cbmgrades_help'] = 'Con Puntuación Basado en Certeza = PBC (Certainty Based Marking = CBM) el tener todas las preguntas correctas con C=1 (baja certeza) da una puntuación de 100%. Las calificaciones pueden ser tan altas como del 300% si todas las preguntas fueran correctas y con C=3 (alta certeza). Los prejuicios (mostrar confianza en respuestas erroneas) hacen que las calificaciones bajen mucho más de lo que lo harían respuestas equivocadas que se reconozcan como de poca confianza. Esto podría inclusive llegar a calificaciones globales negativas.

**Precisión** es el % de correctas, ignorando la certeza, pero ponderando para la puntuación máxima de cada pregunta. El poder distiguir exitosamente las respuestas más confiables de las menos confiables da una mejor calificación que si se eligira la misma certeza para cada pregunta. Esto se refleja en el **Bono PBC**. **Precisión** + **Bono PBC** es una mejor medida del conocimiento que la mera **Precisión**. Los prejuicios pueden conducir a un bono negativo; una advertencia para revisar con cuidado qué es lo que si se sabe contra lo que no se sabe.';
$string['cbmmark'] = 'Puntuación CBM {$a}';
$string['certainty'] = 'Certeza';
$string['certainty-1'] = 'Ni idea';
$string['certainty1'] = 'C=1 (No está seguro: <67%)';
$string['certainty2'] = 'C=2 (Seguro a medias: >67%)';
$string['certainty3'] = 'C=3 (Bastante seguro: >80%)';
$string['certainty_help'] = 'La calificación basada en certeza requiere que indique cómo de seguro está con su respuesta. Los niveles disponibles son:

Nivel de certeza | C = 1 (No está seguro) | C = 2 (Seguro a medias) | C = 3 (Bastante seguro)
------------------- | ------------ | --------- | ----------------
Marque si es correcto | 1 | 2 | 3
Marque si está mal | 0 | -2 | -6
Probabilidad correcta | <67% | 67-80% | > 80%

Las mejores notas se obtienen reconociendo la incertidumbre. Por ejemplo, si cree que hay más de 1 entre 3 posibilidades de estar equivocado, debe introducir C = 1 y evitar el riesgo de una puntuación negativa.';
$string['certaintyshort-1'] = 'Ni idea';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Ni idea';
$string['foransweredquestions'] = 'Resultados solo para las {$a} preguntas respondidas';
$string['forentirequiz'] = 'Resultados para el cuestionario completo ({$a} preguntas)';
$string['howcertainareyou'] = 'Grado de certeza{$a->help}: {$a->choices}';
$string['judgementok'] = 'Ok';
$string['judgementsummary'] = 'Respuestas: {$a->responses}. Precisión: {$a->fraction}. (Rango óptimo {$a->idealrangelow} a {$a->idealrangehigh}). Usted estuvo {$a->judgement} usando éste nivel de certeza.';
$string['noquestions'] = 'No hay respuestas';
$string['overconfident'] = 'demasiado seguro';
$string['pluginname'] = 'Retroalimentación diferida con CBM';
$string['privacy:metadata'] = 'El complemento de comentarios diferidos con comportamiento de preguntas de CBM no almacena ningún dato personal.';
$string['slightlyoverconfident'] = 'un poco demasiado confiado';
$string['slightlyunderconfident'] = 'un poco bajo en confianza';
$string['underconfident'] = 'bajo en confianza';
$string['weightx'] = 'Peso {$a}';
