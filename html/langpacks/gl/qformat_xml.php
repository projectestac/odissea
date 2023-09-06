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
 * Strings for component 'qformat_xml', language 'gl', version '4.1'.
 *
 * @package     qformat_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['invalidxml'] = 'Ficheiro XML incorrecto, agardábase unha cadea de texto (usar CDATA?)';
$string['pluginname'] = 'Formato XML de Moodle';
$string['pluginname_help'] = 'Este é un formato específico de Moodle para importar e exportar preguntas.';
$string['pluginname_link'] = 'qformat/xml';
$string['privacy:metadata'] = 'O engadido de formato de preguntas XML non almacena ningún dato persoal.';
$string['truefalseimporterror'] = '<b>Advertencia</b>: A pregunta verdadeiro/falso «{$a->questiontext}» non pode ser importada correctamente. Non está claro se a resposta correcta é verdadeira ou falsa. A pregunta foi importada asumindo que a resposta é «{$a->answer}». Se non é correcta, debe editar a pregunta.';
$string['unsupportedexport'] = 'A pregunta tipo {$a} no está admitida para a exportación XML';
$string['xmlimportnoname'] = 'Falta o nome da pregunta no ficheiro XML';
$string['xmlimportnoquestion'] = 'Falta o texto da pregunta no ficheiro XML';
$string['xmltypeunsupported'] = 'A pregunta tipo {$a} no está admitida para a importación XML';
