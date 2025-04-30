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
 * Strings for component 'filter_embedquestion', language 'pt', version '4.4'.
 *
 * @package     filter_embedquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attemptoptions'] = 'Opções da tentativa';
$string['authorizedsecrets'] = 'Chaves secretas autorizadas';
$string['authorizedsecrets_desc'] = 'Adicione as chaves secretas de outros servidores aqui, cada um por linha, para que as perguntas incorporadas que foram importadas funcionem corretamente.<br/><br/>A chave secreta deste servidor é <code>{$a}</code>.';
$string['chooserandomly'] = 'Escolher aleatoriamente uma pergunta desta categoria';
$string['corruptattempt'] = 'A sua tentativa anterior para mostrar uma pergunta aqui parou de funcionar. Se clicar em continuar, ela será apagada e será criada uma nova tentativa.';
$string['corruptattemptwithreason'] = 'A sua tentativa anterior de resposta a uma pergunta aqui deixou de funcionar. ({$a}) Se clicar em continuar, a tentativa será removida e será criada uma nova tentativa.';
$string['defaultsheading'] = 'Opções predefinidas para perguntas incorporadas';
$string['defaultsheading_desc'] = 'As opções predefinidas que controlam como aparecem e qual o comportamento das perguntas incorporadas. São os valores a ser usados, se não forem configurados outros para cada pergunta em particular.';
$string['defaultx'] = 'Predefinição ({$a})';
$string['displayoptions'] = 'Mostrar opções';
$string['embedquestion'] = 'Incorporar pergunta';
$string['errormaxmarknumber'] = 'A pontuação máxima deve ser um número.';
$string['errornopermissions'] = 'Não tem permissão para incorporar esta pergunta.';
$string['errorunknownquestion'] = 'Pergunta desconhecida ou não partilhável.';
$string['errorvariantformat'] = 'A variante deve ser um número inteiro positivo.';
$string['errorvariantoutofrange'] = 'A variante deve ser um número inteiro positivo (no máximo {$a}).';
$string['filtername'] = 'Incorporar perguntas';
$string['generalfeedback_desc'] = 'Se por predefinição, deve ser mostrado, ou não, o feedback geral em perguntas incorporadas.';
$string['howquestionbehaves'] = 'Comportamento da pergunta';
$string['howquestionbehaves_desc'] = 'O comportamento predefinido a usar nas perguntas incorporadas.';
$string['iframetitle'] = 'Pergunta incorporada';
$string['invalidcategory'] = 'A categoria com o ID "{$a->catid}" não existe em "{$a->contextname}".';
$string['invalidemptycategory'] = 'A categoria "{$a->catname}" em "{$a->contextname}" não contém perguntas incorporáveis.';
$string['invalidquestion'] = 'A pergunta com ID "{$a->qid}" não existe na categoria "{$a->catname}" [{$a->catidnumber}]".';
$string['invalidrandomquestion'] = 'Não é possível gerar uma pergunta aleatória da categoria "{$a}".';
$string['invalidtoken'] = 'Esta pergunta não está corretamente configurada.';
$string['markdp_desc'] = 'O número predefinido de dígitos que devem ser mostrados depois da vírgula ao mostrar as notas em perguntas incorporadas.';
$string['markedoutof'] = 'Pontuação máxima';
$string['marks_desc'] = 'Se por predefinição, devem ser mostradas, ou não, as informações da pontuação numérica nas perguntas incorporadas.';
$string['nameandcount'] = '{$a->name} ({$a->count})';
$string['nameandidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['nameidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->count})';
$string['noguests'] = 'Os visitantes não têm permissão para interagir com perguntas incorporadas.';
$string['notyourattempt'] = 'Esta não é sua a tentativa.';
$string['pluginname'] = 'Incorporar perguntas';
$string['privacy:metadata'] = 'O filtro Incorporar perguntas não armazena quaisquer dados pessoais.';
$string['questionidnumber'] = 'ID da pergunta';
$string['questionidnumberchanged'] = 'A pergunta que está a ser respondida aqui já não tem o ID \'{$a}\'.';
$string['questionnolongerhasidnumber'] = 'A pergunta que está a ser respondida aqui já não tem ID.';
$string['questionnolongerincategory'] = 'A pergunta que está a ser respondida aqui já não está na categoria com o ID \'{$a}\'.';
$string['responsehistory_desc'] = 'Se por predefinição, deve ser mostrado, ou não, o histórico de respostas para perguntas incorporadas.';
$string['restart'] = 'Responder novamente';
$string['rightanswer_desc'] = 'Se por predefinição, deve ser mostrada, ou não, a resposta correta em perguntas incorporadas. Recomenda-se a não utilização desta funcionalidade, mas os autores das perguntas devem explicar a resposta correta no feedback geral das perguntas.';
$string['securityheading'] = 'Configurações de segurança';
$string['specificfeedback_desc'] = 'Se por predefinição, deve ser mostrado, ou não, o feedback específico à resposta do aluno em perguntas incorporadas.';
$string['taskcleanup'] = 'Limpar tentativas de perguntas incorporadas';
$string['title'] = 'Pergunta incorporada';
$string['warningfilteroffglobally'] = 'Aviso: o filtro Incorporar perguntas está desativado ao nível global do site.';
$string['warningfilteroffhere'] = 'Aviso: o filtro Incorporar perguntas está desativado nesta disciplina.';
$string['whethercorrect_desc'] = 'Se os alunos receberão indicações, ou não, acerca das respostas em perguntas incorporadas. As indicações tanto podem ser descrições textuais (\'Correta\', \'Parcialmente correta\' ou \'Incorreta\') com também podem ser indicações com símbolos coloridos.';
$string['whichquestion'] = 'Escolher pergunta';
