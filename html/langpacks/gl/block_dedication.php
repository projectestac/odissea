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
 * Strings for component 'block_dedication', language 'gl', version '3.11'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_button'] = 'Ferramenta de dedicación ao curso';
$string['access_info'] = 'Só para profesores:';
$string['connectionratiorow'] = 'Conexións por día';
$string['dedication:addinstance'] = 'Permitir engadir o bloque de dedicación ao curso';
$string['dedication:use'] = 'Permitir usar o bloque de dedicación ao curso';
$string['dedication_estimation'] = 'O teu tempo de dedicación estimado é';
$string['dedicationall'] = 'Dedicación de todos os membros do curso. Fai clic no nome dunha persoa para ver a súa dedicación con detalle.';
$string['dedicationgroup'] = 'Dedicación de todos os membros do grupo <em>{$a}</em>. Fai clic no nome dunha persoa para ver a súa dedicación con detalle.';
$string['dedicationrow'] = 'Dedicación ao curso';
$string['form'] = 'Configuración de dedicación ao curso';
$string['form_help'] = 'O tempo de dedicación é estimado a partir do concepto de sesión e duración da mesma, aplicado ás entradas que hai no rexistro.

<strong>Clic:</strong> Cada vez que un usuario accede a un recurso en Moodle gárdase unha entrada no rexistro.

<strong>Sesión:</strong> Conxunto de dous ou máis clics consecutivos, que teñan un intervalo de tempo non superior ao máximo estabelecido.

<strong>Duración da sesión:</strong> Tempo transcurrido entre o primeiro e o último clic dunha sesión.

<strong>Tempo de dedicación:</strong> É a suma das duracións das sesións do usuario.';
$string['form_text'] = 'Selecciona o intervalo de datas e o tempo máximo entre clics dunha mesma sesión.';
$string['limit'] = 'Límite entre clics (en minutos)';
$string['limit_help'] = 'O límite entre clics define se dous clics son, ou non, parte da mesma sesión';
$string['maxtime'] = 'Fin do intervalo';
$string['maxtime_help'] = 'Considerar só as entradas de rexistro que foron creadas antes desta data';
$string['meandedication'] = '<strong>Dedicación media:</strong> {$a}';
$string['mintime'] = 'Inicio do intervalo';
$string['mintime_help'] = 'Considerar só as entradas de rexistro que foron creadas despois desta data';
$string['pagetitle'] = '{$a}: dedicación ao curso';
$string['period'] = 'Intervalo dende <em>{$a->mintime}</em> ata <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Tempo transcurrido:</strong> {$a}';
$string['perioddiffrow'] = 'Tempo transcurrido';
$string['pluginname'] = 'Dedicación ao curso';
$string['sessionduration'] = 'Duración';
$string['sessionstart'] = 'Inicio de sesión';
$string['show_dedication'] = 'Amosar o tempo de dedicación aos alumnos';
$string['show_dedication_help'] = 'Por defecto, o tempo de dedicación só poden consultado os profesores. Se marca esta opción, os alumnos poderán ver o seu tempo de dedicación.';
$string['sincerow'] = 'Dende';
$string['submit'] = 'Calcular';
$string['torow'] = 'Ata';
$string['totaldedication'] = '<strong>Dedicación total:</strong> {$a}';
$string['userdedication'] = 'Dedicación ao curso con detalle <em>{$a}</em>.';
