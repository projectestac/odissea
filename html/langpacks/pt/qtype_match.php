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
 * Strings for component 'qtype_match', language 'pt', version '3.11'.
 *
 * @package     qtype_match
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = 'Resposta {$a}';
$string['availablechoices'] = 'Opções de escolha';
$string['blanksforxmorequestions'] = 'Adicionar mais {no} campos em branco';
$string['correctansweris'] = 'A resposta correcta é: {$a}';
$string['deletedchoice'] = '[Opção apagada]';
$string['deletedsubquestion'] = 'Esta parte da pergunta foi apagada depois da tentativa ter sido iniciada.';
$string['filloutthreeqsandtwoas'] = 'Tem de definir pelo menos 2 perguntas e 3 respostas. Pode definir respostas erradas extra se definir uma resposta com a respetiva pergunta em branco. Perguntas em que tanto a pergunta como a resposta estão em branco serão ignoradas.';
$string['nomatchinganswer'] = 'Tem de especificar uma resposta que corresponda à pergunta \'{$a}\'.';
$string['nomatchinganswerforq'] = 'Tem que especificar uma resposta para esta pergunta';
$string['notenoughqsandas'] = 'Tem que inserir no mínimo {$a->q} perguntas e {$a->a} respostas.';
$string['notenoughquestions'] = 'Tem que inserir no mínimo {$a} pares de pergunta-resposta';
$string['pleaseananswerallparts'] = 'Por favor, responda a todas as partes da pergunta.';
$string['pluginname'] = 'Correspondência';
$string['pluginname_help'] = 'Nas perguntas de correspondência o aluno tem de realizar a ligação correta entre uma lista de nomes ou frases (perguntas) e outra listagem (respostas).';
$string['pluginname_link'] = 'pergunta/tipo/correspondência';
$string['pluginnameadding'] = 'A adicionar pergunta de correspondência';
$string['pluginnameediting'] = 'A editar pergunta de correspondência';
$string['pluginnamesummary'] = 'A resposta consiste na correspondência entre termos.';
$string['privacy:metadata'] = 'O módulo Pergunta do tipo Correspondência permite que os autores das perguntas definam opções predefinidas como preferências do utilizador.';
$string['privacy:preference:defaultmark'] = 'A avaliação predefinida para uma determinada pergunta.';
$string['privacy:preference:penalty'] = 'A penalização para cada tentativa incorreta quando o comportamento das perguntas é \'Interativo com múltiplas tentativas\' ou \'Modo adaptável\'.';
$string['privacy:preference:shuffleanswers'] = 'Se as respostas devem, ou não, ser baralhadas automaticamente.';
$string['shuffle'] = 'Baralhar';
$string['shuffle_help'] = 'Se ativar esta opção, a ordem das opções de resposta é definida aleatoriamente a cada nova tentativa, tendo em conta que a opção "Baralhar perguntas" nas opções de edição do teste também se encontra ativa.';
