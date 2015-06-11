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
 * Strings for component 'availability_grade', language 'pt', branch 'MOODLE_28_STABLE'
 *
 * @package   availability_grade
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_items'] = 'Itens de avaliação em cache para estimar a disponibilidade condicional';
$string['cachedef_scores'] = 'Notas dos utilizadores em cache para estimar a disponibilidade condicional';
$string['description'] = 'Exigir que os alunos atinjam uma nota em específico.';
$string['error_backwardrange'] = 'Ao especificar um intervalo de nota, o valor mínimo tem de ser inferior ao valor máximo.';
$string['error_invalidnumber'] = 'Os intervalos de nota devem ser especificados com percentagens válidas.';
$string['error_selectgradeid'] = 'Tem de selecionar um item de avaliação para a condição de nota.';
$string['label_max'] = 'Percentagem da nota máxima (exclusive)';
$string['label_min'] = 'Percentagem da nota mínima (inclusive)';
$string['missing'] = '(atividade em falta)';
$string['option_max'] = 'tem de ser <';
$string['option_min'] = 'tem de ser ≥';
$string['pluginname'] = 'Restrição por notas';
$string['requires_any'] = 'Tem uma nota em <strong>{$a}</strong>';
$string['requires_max'] = 'Recebeu uma pontuação adequada em <strong>{$a}</strong>';
$string['requires_min'] = 'Pontuação mínima necessária em <strong>{$a}</strong>';
$string['requires_notany'] = 'Não tem uma nota em <strong>{$a}</strong>';
$string['requires_notgeneral'] = 'Não obteve uma determinada nota em <strong>{$a}</strong>';
$string['requires_range'] = 'Obteve uma pontuação específica em <strong>{$a}</strong>';
$string['title'] = 'Nota';
