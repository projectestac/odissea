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
 * Strings for component 'fileconverter_unoconv', language 'pt', version '3.11'.
 *
 * @package     fileconverter_unoconv
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'Caminho para o conversor de documento unoconv';
$string['pathtounoconv_help'] = 'Caminho para o conversor de documentos unoconv. É um executável capaz de converter entre formatos de documentos suportados pelo LibreOffice. Isto é opcional, mas se for especificado, o Moodle irá utilizá-lo para converter automaticamente entre formatos de documento. Isto é utilizado para suportar uma grande variedade de tipos de ficheiro na funcionalidade do Trabalho que permite fazer anotações em ficheiros no formato PDF.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = 'O módulo Conversor de documento unoconv não armazena dados pessoais.';
$string['test_unoconv'] = 'Testar o caminho do unoconv';
$string['test_unoconvdoesnotexist'] = 'O caminho para o unoconv não aponta para o programa unoconv. Reveja as configurações do caminho.';
$string['test_unoconvdownload'] = 'Descarregar o ficheiro de teste convertido em pdf.';
$string['test_unoconvempty'] = 'O caminho unoconv não está definido. Por favor, reveja as configurações para definir o caminho.';
$string['test_unoconvisdir'] = 'O caminho para o unoconv aponta para uma pasta. Por favor, inclua o programa unoconv no caminho especificado';
$string['test_unoconvnotestfile'] = 'Está em falta o documento de teste a ser convertido em PDF';
$string['test_unoconvnotexecutable'] = 'O caminho para o unoconv aponta para um ficheiro que não é executável';
$string['test_unoconvok'] = 'O caminho para o unoconv parece estar configurado corretamente.';
$string['test_unoconvversionnotsupported'] = 'A versão do unoconv instalada não é suportada.';
