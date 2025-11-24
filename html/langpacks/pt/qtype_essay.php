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
 * Strings for component 'qtype_essay', language 'pt', version '4.5'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Tipos de ficheiro permitidos';
$string['acceptedfiletypes_help'] = 'Os tipos de ficheiro permitidos podem ser restringidos se indicar uma lista de extensões de ficheiros. Se deixar o campo em branco, todos os tipos de ficheiro serão permitidos.';
$string['allowattachments'] = 'Permitir anexos';
$string['answerfiles'] = 'Ficheiros da resposta';
$string['answertext'] = 'Texto da resposta';
$string['attachedfiles'] = 'Anexos: {$a}';
$string['attachmentsoptional'] = 'Anexos são opcionais';
$string['attachmentsrequired'] = 'Exigir anexos';
$string['attachmentsrequired_help'] = 'Esta opção especifica o número mínimo de anexos necessários para que uma resposta seja considerada avaliável.';
$string['err_maxminmismatch'] = 'O limite máximo de palavras tem de ser maior que o limite mínimo de palavras';
$string['err_maxwordlimit'] = 'O limite máximo de palavras está ativado mas não está definido';
$string['err_maxwordlimitnegative'] = 'O limite máximo de palavras não pode ser um número negativo';
$string['err_minwordlimit'] = 'O limite mínimo de palavras está ativado mas não está definido';
$string['err_minwordlimitnegative'] = 'O limite mínimo de palavras não pode ser um número negativo';
$string['formateditor'] = 'Editor HTML';
$string['formateditorfilepicker'] = 'Editor HTML com explorador de ficheiros';
$string['formatmonospaced'] = 'Texto simples, fonte monoespaçada';
$string['formatnoinline'] = 'Sem texto online';
$string['formatplain'] = 'Texto simples';
$string['graderinfo'] = 'Informação sobre a avaliação';
$string['graderinfoheader'] = 'Informação do avaliador';
$string['maxbytes'] = 'Tamanho máximo do ficheiro';
$string['maxwordlimit'] = 'Número máximo de palavras';
$string['maxwordlimit_help'] = 'Se a resposta exigir que os alunos digitem texto, pode especificar o número máximo de palavras que o aluno poderá submeter.';
$string['maxwordlimitboundary'] = 'O limite de palavras para esta pergunta é de {$a->limit} palavras e está a tentar submeter {$a->count} palavras. Reduza o número de palavras da sua resposta e tente novamente.';
$string['minwordlimit'] = 'Número mínimo de palavras';
$string['minwordlimit_help'] = 'Se a resposta exigir que os alunos digitem texto, pode especificar o número mínimo de palavras que o aluno terá de submeter.';
$string['minwordlimitboundary'] = 'Esta pergunta requer uma resposta com pelo menos {$a->limit} palavras e está a tentar submeter {$a->count} palavra(s). Aumente o número de palavras da sua resposta e tente novamente.';
$string['mustattach'] = 'Quando é selecionada a opção "Sem texto online" ou as respostas são opcionais, tem de permitir pelo menos um anexo.';
$string['mustrequire'] = 'Quando é selecionada a opção "Sem texto online" ou as respostas são opcionais, tem de exigir pelo menos um anexo.';
$string['mustrequirefewer'] = 'Não pode exigir mais anexos do que aqueles que permite.';
$string['nlines'] = '{$a} linhas';
$string['nonexistentfiletypes'] = 'Os seguintes tipos de ficheiro não foram reconhecidos: {$a}';
$string['pluginname'] = 'Desenvolvimento';
$string['pluginname_help'] = 'Ao responder a uma pergunta, o aluno pode carregar um ou mais ficheiros e/ou inserir texto online. Pode ser fornecido um modelo de resposta. As respostas devem ser avaliadas manualmente.';
$string['pluginname_link'] = 'pergunta/tipo/desenvolvimento';
$string['pluginnameadding'] = 'A adicionar pergunta de desenvolvimento';
$string['pluginnameediting'] = 'A editar pergunta de desenvolvimento';
$string['pluginnamesummary'] = 'Permitir responder com carregamento de ficheiro e/ou texto online. Este tipo de perguntas tem de ser avaliado manualmente.';
$string['privacy:metadata'] = 'O módulo Pergunta do tipo Desenvolvimento permite que os autores das perguntas definam opções predefinidas como preferências do utilizador.';
$string['privacy:preference:attachments'] = 'Número de anexos permitidos.';
$string['privacy:preference:attachmentsrequired'] = 'Número de anexos obrigatórios.';
$string['privacy:preference:defaultmark'] = 'A avaliação predefinida para uma determinada pergunta.';
$string['privacy:preference:maxbytes'] = 'Tamanho máximo do ficheiro.';
$string['privacy:preference:responsefieldlines'] = 'Número de linhas a indicar o tamanho da caixa de entrada (área de texto).';
$string['privacy:preference:responseformat'] = 'Qual é o formato da resposta (editor HTML, texto simples, etc.)?';
$string['privacy:preference:responserequired'] = 'Se o aluno é obrigado, ou não, a inserir texto ou a se a caixa de texto é opcional.';
$string['responsefieldlines'] = 'Tamanho da caixa de resposta';
$string['responseformat'] = 'Formato da resposta';
$string['responseisrequired'] = 'Requerer que o aluno insira texto';
$string['responsenotrequired'] = 'A introdução de texto é opcional';
$string['responseoptions'] = 'Opções da resposta';
$string['responserequired'] = 'Exigir texto';
$string['responsetemplate'] = 'Modelo de resposta';
$string['responsetemplate_help'] = 'Qualquer texto inserido aqui será exibido na caixa de resposta quando inicia uma nova tentativa de resposta à pergunta.';
$string['responsetemplateheader'] = 'Modelo de resposta';
$string['wordcount'] = 'Palavras: {$a}';
$string['wordcounttoofew'] = 'O número de palavras ({$a->count}) é menor do que o mínimo obrigatório de palavras ({$a->limit}).';
$string['wordcounttoomuch'] = 'O número de palavras ({$a->count}) é maior do que o máximo de palavras permitido ({$a->limit}).';
