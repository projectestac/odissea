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
 * Strings for component 'qtype_calculatedmulti', language 'ca', version '4.4'.
 *
 * @package     qtype_calculatedmulti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answeroptions'] = 'Opcions';
$string['answeroptions_help'] = 'L\'opció suggerida per a la fórmula és ...<strong>{={x}+..}</strong>...';
$string['pluginname'] = 'Opció múltiple calculada';
$string['pluginname_help'] = 'Les preguntes d\'opció múltiple amb càlcul són semblants a les preguntes d\'opció múltiple en què als seus elements de selecció es poden incloure resultats de fórmules numèriques usant comodins entre claus que són substituïts per valors individuals quan es visualitza el qüestionari. Per exemple, si tenim la pregunta: «Quina és l\'àrea d\'un rectangle de longitud {l} i amplada {w}?», una de les opcions és {= {l}*{w}} (on * significa multiplicació).';
$string['pluginname_link'] = 'question/type/calculatedmulti';
$string['pluginnameadding'] = 'S\'està afegint una pregunta d\'opció múltiple calculada.';
$string['pluginnameediting'] = 'S\'està editant una pregunta d\'opció múltiple calculada';
$string['pluginnamesummary'] = 'Les preguntes d\'opció múltiple amb càlcul són semblants a les les preguntes d\'opció múltiple en les quals els elements de selecció poden incloure resultats de formules presos de valors numèrics que són seleccionats aleatòriament d\'un conjunt quan s\'intenta resoldre el qüestionari.';
