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
 * Strings for component 'qbehaviour_deferredcbm', language 'gl', version '4.1'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Precisión';
$string['accuracyandbonus'] = 'Precisión + Bonos';
$string['assumingcertainty'] = 'Non seleccionou un grado de certeza. Asumindo: {$a}';
$string['averagecbmmark'] = 'Puntuación PBC media';
$string['basemark'] = 'Puntuación base {$a}';
$string['breakdownbycertainty'] = 'Detalle por certeza';
$string['cbmbonus'] = 'Bonos PBC';
$string['cbmgradeexplanation'] = 'Para PBC (Puntuación Baseada na Certeza), a cualificación de enriba amosase relativa ao máximo para todas as correctas en C=1.';
$string['cbmgrades'] = 'Cualificacións PBC (Puntuación Baseada na Certeza)';
$string['cbmgrades_help'] = 'Coa Puntuación Baseada na Certeza [PBC (Certainty Based Marking = CBM)] ter todas as preguntas correctas con  C=1 (baixa certeza) da una puntuación de 100%. As cualificacións poden ser tan altas como do 300% se todas as preguntas fosen correctas e con C=3 (alta certeza). Os prexuízos (amosar confianza en respostas erradas) fan que as cualificacións baixen moito máis do que o farían respostas trabucadas que se recoñezan como de pouca confianza. Isto podería inclusive a chegar a cualificacións globais negativas.

**Precisión** é o % de correctas, ignorando a certeza, mais ponderando para a puntuación máxima de cada pregunta. Poder distinguir satisfactoriamente as respostas máis fiábeis das menos fiábeis da una mellor cualificación que se se escollera a mesma certeza para cada pregunta. Isto reflíctese no  **Bono PBC**. **Precisión** + **Bono PBC** é unha mellor medida do coñecemento que a mera **Precisión**. Os prexuízos poden conducir a un bono negativo; unha advertencia para revisar amodo que é o que si se sabe contra o que non se sabe.';
$string['cbmgrades_link'] = 'qbehaviour/deferredcbm/certaintygrade';
$string['cbmmark'] = 'Puntuación PCB {$a}';
$string['certainty'] = 'Certeza';
$string['certainty-1'] = 'Sen idea';
$string['certainty1'] = 'C=1 (Incerto: <67%)';
$string['certainty2'] = 'C=2 (Medio: >67%)';
$string['certainty3'] = 'C=3 (Bastante seguro: >80%)';
$string['certainty_help'] = 'Puntuación Baseada na Certeza (PBC) require que indique que tan fiábel pensa que sexa a súa resposta. Os niveis dispoñíbeis son:

Nivel de Certeza  --   | C=1 (Incerto) | C=2 (Med) | C=3 (Moi seguro)
---------------------- | ------------- | --------- | ----------------
Puntuación correcta    |    1          |    2      |     3
Puntuación  mala       |    0          |   -2      |    -6
Probabilidade correcta |  <67%         | 67-80%    |   >80%

As mellores puntuacións gáñanse ao recoñecer a incerteza. Por exemplo, se pensa que hai máis de 1 probabilidade entre 3 de estar trabucado, Debería escribir  C=1 e así evitar o risco de ter unha puntuación negativa.';
$string['certainty_link'] = 'qbehaviour/deferredcbm/certainty';
$string['certaintyshort-1'] = 'Sen idea';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Sen idea';
$string['foransweredquestions'] = 'Resultados soamente para as {$a} preguntas contestadas';
$string['forentirequiz'] = 'Resultados para (as {$a} preguntas de) toda a proba';
$string['howcertainareyou'] = 'Certeza{$a->help}: {$a->choices}';
$string['judgementok'] = 'Aceptar';
$string['judgementsummary'] = 'Respostas: {$a->responses}. Precisión: {$a->fraction}. (Intervalo óptimo {$a->idealrangelow} a {$a->idealrangehigh}). Estivo usando este nivel de certeza {$a->judgement}.';
$string['noquestions'] = 'Sen respostas';
$string['overconfident'] = 'confiado de máis';
$string['pluginname'] = 'Comentario diferido con PCB';
$string['privacy:metadata'] = 'O engadido de comentario diferido con PCB non almacena ningún dato persoal.';
$string['slightlyoverconfident'] = 'un chisco confiado de máis';
$string['slightlyunderconfident'] = 'un chisco desconfiado';
$string['underconfident'] = 'desconfiado de máis';
$string['weightx'] = 'Ponderación {$a}';
