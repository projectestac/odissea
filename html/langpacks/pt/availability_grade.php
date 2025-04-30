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
 * Strings for component 'availability_grade', language 'pt', version '4.4'.
 *
 * @package     availability_grade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_items'] = 'Itens de avaliação em cache para estimar a disponibilidade condicional';
$string['cachedef_scores'] = 'Notas dos utilizadores em cache para estimar a disponibilidade condicional';
$string['description'] = 'Exigir que os alunos atinjam determinada nota.';
$string['error_backwardrange'] = 'Ao especificar um intervalo de nota, o valor mínimo tem de ser inferior ao valor máximo.';
$string['error_invalidnumber'] = 'Os intervalos de nota devem ser especificados com percentagens válidas.';
$string['error_selectgradeid'] = 'Tem de selecionar um item de avaliação para a condição Nota.';
$string['label_max'] = 'Nota máxima em percentagem (exclusive)';
$string['label_min'] = 'Nota mínima em percentagem (inclusive)';
$string['missing'] = '(atividade em falta)';
$string['option_max'] = 'tem de ser <';
$string['option_min'] = 'tem de ser ≥';
$string['pluginname'] = 'Condição de acesso com base em notas';
$string['privacy:metadata'] = 'O módulo Condição de acesso com base em notas não armazena quaisquer dados pessoais.';
$string['requires_any'] = 'Tem nota em <strong>{$a}</strong>';
$string['requires_max'] = 'Tem uma nota insuficiente em <strong>{$a}</strong>';
$string['requires_min'] = 'Atingiu a nota mínima em <strong>{$a}</strong>';
$string['requires_notany'] = 'Não tem nota em <strong>{$a}</strong>';
$string['requires_notgeneral'] = 'Não obteve determinada nota em <strong>{$a}</strong>';
$string['requires_range'] = 'Obteve uma determinada nota em <strong>{$a}</strong>';
$string['title'] = 'Nota';
