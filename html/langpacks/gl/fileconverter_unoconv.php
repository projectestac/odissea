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
 * Strings for component 'fileconverter_unoconv', language 'gl', version '4.4'.
 *
 * @package     fileconverter_unoconv
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'Ruta do convertedor de documentos «unoconv»';
$string['pathtounoconv_help'] = 'Ruta dol convertedor de documentos «unoconv». Tratase dun executábel que é quen de converter formatos de documento admitidos por LibreOffice. É opcional, mais se o especifica, Moodle usarao para converter automaticamente entre formatos de documentos. Utilizase para dar compatibilidade a máis de tipos de ficheiros que se usan coa ferramenta de anotación PDF das tarefas.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = 'O complemento de Convertedor de documentos Unoconv non almacena ningún dato persoal.';
$string['test_unoconv'] = 'Probar a ruta a unoconv';
$string['test_unoconvdoesnotexist'] = 'A ruta a unoconv non apunta ao programa unoconv. Revise os axustes da ruta.';
$string['test_unoconvdownload'] = 'Descargue o ficheiro de proba PDF convertido.';
$string['test_unoconvempty'] = 'Non está definida a ruta a unoconv Revise os axustes da ruta.';
$string['test_unoconvisdir'] = 'A ruta a unoconv apunta a un cartafol, inclúa o programa unoconv na ruta que especifique';
$string['test_unoconvnotestfile'] = 'Falta o documento de proba a converter a PDF.';
$string['test_unoconvnotexecutable'] = 'A ruta a unoconv apunta a un ficheiro que non é executábel';
$string['test_unoconvok'] = 'Semella que a ruta a unoconv está configurada correctamente.';
$string['test_unoconvversionnotsupported'] = 'A versión de «unoconv» que ten instalada non é compatíbel.';
