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
 * Strings for component 'gradeimport_xml', language 'pt', version '3.11'.
 *
 * @package     gradeimport_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errbadxmlformat'] = 'Erro - formato XML inválido';
$string['errduplicategradeidnumber'] = 'Erro - existem duas notas com o número de identificação \'{$a}\' nesta disciplina. Tal não devia ser possível.';
$string['errduplicateidnumber'] = 'Erro - número de identificação duplicado';
$string['errincorrectgradeidnumber'] = 'Erro - o número de identificação \'{$a}\' do ficheiro de importação não corresponde a nenhuma nota.';
$string['errincorrectidnumber'] = 'Erro - número de identificação incorreto';
$string['errincorrectuseridnumber'] = 'Erro - o número de identificação \'{$a}\' do ficheiro de importação não corresponde a nenhum utilizador.';
$string['error'] = 'Ocorreram erros';
$string['errorduringimport'] = 'Ocorreu um erro ao tentar importar: {$a}';
$string['fileurl'] = 'URL do ficheiro remoto';
$string['fileurl_help'] = 'O campo do ficheiro URL remoto serve para pesquisar informação num servidor remoto, tal como informação de um aluno no sistema.';
$string['importxml'] = 'Importar XML';
$string['importxml_help'] = 'As notas podem ser importadas através de um ficheiro XML que contenha os números de ID dos utilizadores e os números de ID das atividades.
Para obter o formato correto, exporte primeiro algumas notas para um ficheiro XML e visualize-o.';
$string['pluginname'] = 'Ficheiro XML';
$string['privacy:metadata'] = 'O módulo Importar ficheiro XML não armazena quaisquer dados pessoais.';
$string['xml:publish'] = 'Publicar notas importadas a partir do ficheiro XML';
$string['xml:view'] = 'Importar notas a partir do ficheiro XML';
