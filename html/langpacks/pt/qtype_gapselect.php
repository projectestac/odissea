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
 * Strings for component 'qtype_gapselect', language 'pt', branch 'MOODLE_38_STABLE'
 *
 * @package   qtype_gapselect
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Espaços para mais {no} opções';
$string['answer'] = 'Resposta';
$string['choices'] = 'Opções';
$string['choicex'] = 'Opção [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'lista pendente';
$string['combinedcontrolnamegapselectplural'] = 'listas pendentes';
$string['correctansweris'] = 'Resposta correta: {$a}';
$string['errorblankchoice'] = 'Por favor, verifique as opções: A opção {$a} está vazia.';
$string['errormissingchoice'] = 'Por favor, verifique o texto da pergunta: {$a} não foi encontrado nas opções! Apenas é permitido que sejam utilizados como espaços reservados, números com opções de resposta especificadas.';
$string['errornoslots'] = 'O texto da pergunta deve conter espaços reservados como [[1]] para exibir os locais onde faltam as palavras.';
$string['errorquestiontextblank'] = 'Deverá inserir algum texto da pergunta.';
$string['group'] = 'Grupo';
$string['pleaseputananswerineachbox'] = 'Por favor, coloque uma resposta em cada caixa.';
$string['pluginname'] = 'Selecionar palavras em falta';
$string['pluginnameadding'] = 'Adicionar pergunta do tipo selecionar palavras em falta';
$string['pluginnameediting'] = 'Editar pergunta do tipo selecionar palavras em falta';
$string['pluginname_help'] = 'As perguntas do tipo Selecionar palavras em falta exige que os alunos selecionem opções a partir de listas pendentes. [[1]], [[2]], [[3]], ... são utilizados como espaços reservados no texto da pergunta, com as respostas corretas especificadas como opções de resposta 1, 2, 3, ... respetivamente. Caso pretenda aumentar o grau de dificuldade da pergunta deverá adicionar opções de resposta extra. As opções de resposta poderão ser agrupadas para restringir as opções disponíveis em cada lista pendente de seleção.';
$string['pluginnamesummary'] = 'As palavras em falta no texto de uma pergunta são preenchidas através de listas pendentes.';
$string['privacy:metadata'] = 'O módulo Pergunta do tipo Selecionar palavras em falta não armazena dados pessoais.';
$string['shuffle'] = 'Baralhar';
$string['tagsnotallowed'] = '{$a->tag} não é permitido. (Apenas {$a->allowed} é permitido.)';
$string['tagsnotallowedatall'] = '{$a->tag} não é permitido. (Aqui não é permitida a utilização de HTML.)';
