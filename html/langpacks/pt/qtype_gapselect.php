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
 * Strings for component 'qtype_gapselect', language 'pt', version '4.5'.
 *
 * @package     qtype_gapselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Adicionar mais {no} opções';
$string['answer'] = 'Resposta';
$string['blanknumber'] = 'Em branco {$a}';
$string['choices'] = 'Opções';
$string['choicex'] = 'Opção [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'lista pendente';
$string['combinedcontrolnamegapselectplural'] = 'listas pendentes';
$string['correctansweris'] = 'Resposta correta: {$a}';
$string['errorblankchoice'] = 'Por favor, verifique as opções: A opção {$a} está em branco.';
$string['errormissingchoice'] = 'Por favor, verifique o texto da pergunta: {$a} não foi encontrado nas opções! Apenas é permitido que sejam utilizados como espaços reservados, números com opções de resposta especificadas.';
$string['errornoslots'] = 'O texto da pergunta deve conter espaços reservados como [[1]] para exibir os locais onde faltam as palavras.';
$string['errorquestiontextblank'] = 'Deverá inserir algum texto da pergunta.';
$string['group'] = 'Grupo';
$string['pleaseputananswerineachbox'] = 'Por favor, coloque uma resposta em cada caixa.';
$string['pluginname'] = 'Selecionar palavras em falta';
$string['pluginname_help'] = 'As perguntas do tipo Selecionar palavras em falta exige que os alunos selecionem opções a partir de listas pendentes. [[1]], [[2]], [[3]], ... são utilizados como espaços reservados no texto da pergunta, com as respostas corretas especificadas como opções de resposta 1, 2, 3, ... respetivamente. Caso pretenda aumentar o grau de dificuldade da pergunta deverá adicionar opções de resposta extra. As opções de resposta poderão ser agrupadas para restringir as opções disponíveis em cada lista pendente de seleção.';
$string['pluginname_link'] = 'question/type/gapselect';
$string['pluginnameadding'] = 'Adicionar pergunta do tipo selecionar palavras em falta';
$string['pluginnameediting'] = 'Editar pergunta do tipo selecionar palavras em falta';
$string['pluginnamesummary'] = 'As palavras em falta no texto de uma pergunta são preenchidas através de listas pendentes.';
$string['privacy:metadata'] = 'O módulo Pergunta do tipo Selecionar palavras em falta permite que os autores das perguntas definam opções predefinidas como preferências do utilizador.';
$string['privacy:preference:defaultmark'] = 'A avaliação predefinida para uma determinada pergunta.';
$string['privacy:preference:penalty'] = 'A penalização para cada tentativa incorreta quando o comportamento das perguntas é \'Interativo com múltiplas tentativas\' ou \'Modo adaptável\'.';
$string['privacy:preference:shuffleanswers'] = 'Se as respostas devem, ou não, ser baralhadas automaticamente.';
$string['regradeissuenumchoiceschanged'] = 'O número de opções no grupo \'{$a}\' foi alterado.';
$string['regradeissuenumgroupsschanged'] = 'O número de grupos de escolhas foi alterado.';
$string['shuffle'] = 'Baralhar';
$string['tagsnotallowed'] = '\'{$a->tag}\' não é permitida. (Apenas é permitida \'{$a->allowed}\')';
$string['tagsnotallowedatall'] = '\'{$a->tag\'} não é permitida. (Não é permitida a utilização de HTML)';
