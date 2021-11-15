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
 * Strings for component 'qtype_multichoice', language 'pt', version '3.11'.
 *
 * @package     qtype_multichoice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerhowmany'] = 'Resposta única ou múltiplas respostas';
$string['answerhowmany_desc'] = 'Se, por predefinição, deve ser uma resposta única (botões de rádio) ou respostas múltiplas (caixas de verificação).';
$string['answernumbering'] = 'Numerar as opções?';
$string['answernumbering123'] = '1., 2., 3., ...';
$string['answernumberingABCD'] = 'A., B., C., ...';
$string['answernumberingIIII'] = 'I., II., III., ...';
$string['answernumbering_desc'] = 'O estilo de numeração predefinido.';
$string['answernumberingabc'] = 'a., b., c., ...';
$string['answernumberingiii'] = 'i., ii., iii., ...';
$string['answernumberingnone'] = 'Sem numeração';
$string['answersingleno'] = 'São permitidas múltiplas respostas';
$string['answersingleyes'] = 'Apenas uma resposta';
$string['choiceno'] = 'Resposta {$a}';
$string['choices'] = 'Respostas disponíveis';
$string['clearchoice'] = 'Limpar a minha escolha';
$string['clozeaid'] = 'Introduza a palavra em falta';
$string['correctansweris'] = 'Resposta correta: {$a}';
$string['correctanswersare'] = 'Respostas corretas: {$a}';
$string['correctfeedback'] = 'Para qualquer resposta correta';
$string['deletedchoice'] = 'Esta opção foi apagada após a tentativa ter sido iniciada.';
$string['errfractionsaddwrong'] = 'As notas positivas que escolheu não somam 100%<br />Em vez disso somam {$a}%';
$string['errfractionsnomax'] = 'Uma das respostas deve ter a nota de 100% para que seja possível obter a pontuação máxima nesta pergunta.';
$string['errgradesetanswerblank'] = 'A nota foi atribuida mas a resposta está em branco';
$string['feedback'] = 'Feedback';
$string['fillouttwochoices'] = 'Deve preencher pelo menos duas respostas. As respostas em branco serão ignoradas.';
$string['fractionsaddwrong'] = 'As notas positivas que selecionou não prefazem 100%.<br />A soma é de {$a}%.<br /> Pretende voltar atrás e corrigir esta pergunta?';
$string['fractionsnomax'] = 'Uma das notas deve ser 100%, para que seja <br />possível obter a pontuação máxima nesta pergunta.<br />Quer voltar atrás e alterar a pergunta?';
$string['incorrectfeedback'] = 'Para qualquer resposta incorreta';
$string['notenoughanswers'] = 'Este tipo de pergunta requer pelo menos {$a} respostas';
$string['overallcorrectfeedback'] = 'Feedback para qualquer resposta correta';
$string['overallfeedback'] = 'Feedback global';
$string['overallincorrectfeedback'] = 'Feedback para qualquer resposta incorreta';
$string['overallpartiallycorrectfeedback'] = 'Feedback para qualquer resposta parcialmente correta';
$string['partiallycorrectfeedback'] = 'Para qualquer resposta parcialmente correta';
$string['pleaseselectananswer'] = 'Selecione uma resposta.';
$string['pleaseselectatleastoneanswer'] = 'Selecione pelo menos uma resposta.';
$string['pluginname'] = 'Escolha múltipla';
$string['pluginname_help'] = 'Ao responder a uma pergunta (que pode incluir imagens) o aluno escolhe a resposta correta entre uma série de opções. Uma pergunta de escolha múltipla pode ter uma ou várias respostas corretas.';
$string['pluginname_link'] = 'pergunta/tipo/escolhamúltipla';
$string['pluginnameadding'] = 'A adicionar pergunta de escolha múltipla';
$string['pluginnameediting'] = 'A editar pergunta de escolha múltipla';
$string['pluginnamesummary'] = 'Permite a seleção de uma ou mais respostas a partir de uma lista de respostas predefinida.';
$string['privacy:metadata'] = 'O módulo Pergunta do tipo Escolha múltipla permite que os autores das perguntas definam opções predefinidas como preferências do utilizador.';
$string['privacy:preference:answernumbering'] = 'O tipo de numeração que deve ser usado (\'1., 2., 3., ...\', \'a., b., c., ...\' etc.)';
$string['privacy:preference:defaultmark'] = 'A avaliação predefinida para uma determinada pergunta.';
$string['privacy:preference:penalty'] = 'A penalização para cada tentativa incorreta quando o comportamento das é o \'Interativo com múltiplas tentativas\' ou \'Modo adaptável \'.';
$string['privacy:preference:showstandardinstruction'] = 'Se deve ser mostrada, ou não, a instrução predefinida.';
$string['privacy:preference:shuffleanswers'] = 'Se as respostas devem, ou não, ser baralhadas automaticamente.';
$string['privacy:preference:single'] = 'Se a resposta é única com botões de rádio ou múltipla com caixas de seleção.';
$string['selectmulti'] = 'Selecione uma ou mais opções:';
$string['selectone'] = 'Selecione uma opção:';
$string['showstandardinstruction'] = 'Mostrar instruções predefinidas';
$string['showstandardinstruction_help'] = 'Se pretende mostrar, ou não, as instruções "Selecione uma opção:" ou "Selecione uma ou mais opções:" antes das opções de respostas.';
$string['shuffleanswers'] = 'Baralhar opções de resposta';
$string['shuffleanswers_desc'] = 'Se ativar esta opção, as opções serão aleatoriamente baralhadas em cada tentativa, por predefinição.';
$string['shuffleanswers_help'] = 'Se ativar esta opção, a ordem das opções de resposta é definida aleatoriamente em cada nova tentativa, desde que a opção "Baralhar perguntas" nas opções de configuração do teste também esteja ativa.';
$string['singleanswer'] = 'Escolha uma resposta.';
$string['toomanyselected'] = 'Selecionou demasiadas opções';
