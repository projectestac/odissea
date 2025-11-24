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
 * Strings for component 'qtype_algebra', language 'pt', version '4.5'.
 *
 * @package     qtype_algebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Espaços para mais {no} respostas';
$string['addmorevariableblanks'] = 'Espaços para mais {no} variáveis';
$string['algebraoptions'] = 'Opções';
$string['allfunctions'] = 'Todas as funções';
$string['allowedfuncs'] = 'Funções permitidas';
$string['allowedfuncs_help'] = '**AINDA NÃO IMPLEMENTADO**

Estes controlos podem ser usados para restringir as funções que os alunos podem usar nas suas respostas. Se a opção "Todas as funções" está ativa, não há restrições sobre as funções que os alunos podem usar nas suas respostas. É a opção predefinida. Para restringir as funções permitidas desmarque a opção "Todas as funções" e assinale as funções permitidas.';
$string['allowedfunctions'] = 'Funções permitidas';
$string['answer'] = 'Resposta: {$a}';
$string['answerboxprefix'] = 'A utilizar como prefixo à caixa de resposta ao mostrar a pergunta';
$string['answermustbegiven'] = 'Deve indicar uma resposta se houver avaliação ou feedback.';
$string['answerno'] = 'Resposta {$a}';
$string['answerprefix'] = 'Prefixo à caixa de resposta';
$string['answerprefix_help'] = 'O texto inserido aqui será colocado à esquerda da caixa de texto onde os alunos inserem as respostas. Por exemplo, se na pergunta pretende-se o resultado da função f(x), neste campo poderá ser indicado "f(x)= " (sem aspas).';
$string['answerx'] = 'Resposta {no}';
$string['badclosebracket'] = 'Fecho de parêntesis inválido';
$string['badequivtype'] = 'Tipo inválido: só pode comparar termos de análise com outros termos de análise';
$string['badfuncargs'] = 'Argumentos inválidos para a função \'{$a}\'';
$string['braces'] = '\\(...\\)';
$string['brackets'] = '[...]';
$string['cdot'] = '\\cdot';
$string['checktolerance'] = 'Tolerância da verificação';
$string['compalgorithm'] = 'Algoritmo de comparação';
$string['compareby'] = 'Algoritmo de comparação';
$string['compareby_help'] = 'Permite escolher o método pelo qual as respostas dos alunos são comparadas com todas as respostas à perguntas. As diferentes possibilidades são:

SAGE: utiliza o software matemático Open Source <a href="http://www.sagemath.org/">SAGE</a> para realizar uma comparação algébrica simbólica total.

Avaliação: este método gera números aleatórios para as variáveis da pergunta e depois compara a resposta do aluno com a resposta da pergunta para aquele conjunto de valores.

Equivalência: é o método mais simples. Só realiza as comparações mais básicas entre expressões.';
$string['compareequiv'] = 'Equivalência';
$string['compareeval'] = 'Avaliação';
$string['comparesage'] = 'SAGE';
$string['correctansweris'] = 'A resposta correta: {$a}';
$string['correctanswers'] = 'Respostas corretas';
$string['decimal'] = '.';
$string['defaultmethod'] = 'Método de comparação predefinido';
$string['disallow'] = 'Resposta não permitida';
$string['disallow_help'] = 'contém uma expressão que não é permitida como resposta.
Os alunos ao inserirem uma resposta que corresponda a esta expressão não serão avaliados na pergunta, mesmo que a resposta corresponda a uma resposta à pergunta.';
$string['disallowans'] = 'Resposta não permitida';
$string['disallowanswer'] = 'Resposta não permitida';
$string['displayresponse'] = 'Mostrar resposta';
$string['dollar'] = '$...$';
$string['dollars'] = '$$...$$';
$string['duplicatevar'] = 'Nome da variável duplicado: \'{$a}\' já foi definido.';
$string['dynamic'] = 'Usar pedido dinâmico AJAX';
$string['editingalgebra'] = 'A editar uma pergunta de Álgebra';
$string['evalchecks'] = 'Verificações da avaliação';
$string['exceptionmessage'] = '{$a}';
$string['filloutoneanswer'] = 'Deve indicar pelo menos uma resposta possível. As respostas em branco não serão consideradas. A primeira resposta que corresponda será utilizada para determinar a pontuação e o feedback. Apenas são permitidas as variáveis definidas acima';
$string['filloutonevariable'] = 'Deve indicar pelo menos uma variável.';
$string['formuladisplay'] = 'Método de exibição da fórmula de resposta';
$string['host'] = 'URL do servidor anfitrião SAGE';
$string['iframe'] = 'Usar elemento Iframe';
$string['illegalplusminus'] = 'Foi encontrado um + ou - num local inválido';
$string['illegalvarname'] = 'Nome incorreto da variável \'{$a}\': igual ao nome de uma função ou de uma constante especial.';
$string['invalidanswer'] = 'Resposta inválida ou não reconhecida';
$string['mismatchedbracket'] = 'Erro nos parêntesis: o tipo de parêntesis não corresponde a \'{$a}\'';
$string['mismatchedcloseb'] = 'Erro nos parêntesis: faltou abrir parêntesis';
$string['mismatchedopenb'] = 'Erro nos parêntesis: falta fechar parêntesis';
$string['missingonearg'] = 'Erro de sintaxe: falta o argumento para o operador \'{$a}\'';
$string['missingtwoargs'] = 'Erro de sintaxe: o operador \'{$a}\' requer dois argumentos';
$string['morethantwoargs'] = 'Tentativa de comparar um termo com mais de 2 argumentos - nenhum código para este caso!';
$string['multiplyoperator'] = 'Operador TEX para a multiplicação';
$string['nargswrong'] = 'Número incorreto de argumentos para o termo \'{$a}\'';
$string['nchecks'] = 'Número de verificações da avaliação';
$string['nchecks_help'] = 'Número de verificações da avaliação utilizadas no algoritmo de comparação da avaliação';
$string['noevaluate'] = 'O método de avaliação do termo \'{$a}\' ainda não foi implementado';
$string['notanumber'] = 'Valor inválido: deve ser um número';
$string['notenoughanswers'] = 'Tem de indicar pelo menos uma resposta.';
$string['notenoughvars'] = 'Tem de indicar pelo menos uma variável.';
$string['notopterm'] = 'Erro de sintaxe : não é possível condensar para um operador único de nível superior';
$string['novarmax'] = 'Não foi especificado o limite máximo para a variável.';
$string['novarmin'] = 'Não foi especificado o limite mínimo para a variável.';
$string['options'] = 'Opções';
$string['parseerror'] = 'Erro ao analisar a função: \'{$a}\'';
$string['pluginname'] = 'Álgebra';
$string['pluginname_help'] = 'O aluno digita uma fórmula como resposta que contém uma ou mais variáveis. A exatidão é avaliada utilizando um dos três métodos diferentes.';
$string['pluginname_link'] = 'question/type/algebra';
$string['pluginnameadding'] = 'A adicionar uma pergunta de Álgebra';
$string['pluginnameediting'] = 'A editar uma pergunta de Álgebra';
$string['pluginnamesummary'] = 'O aluno digita uma fórmula que pode conter uma ou mais variáveis. A exatidão é avaliada utilizando um dos três métodos diferentes.';
$string['port'] = 'Porta do servidor SAGE';
$string['privacy:metadata'] = 'O módulo de tipo de pergunta de Álgebra não armazena qualquer dado pessoal.';
$string['restoreqdbfailed'] = 'Falha no restauro da pergunta de álgebra: erro de gravação na base de dados';
$string['restorevardbfailed'] = 'Falha no restauro da variável da pergunta de álgebra: erro de gravação na base de dados';
$string['texdelimiters'] = 'Delimitadores para expressões TeX';
$string['times'] = '\\vezes';
$string['tolerance'] = 'Tolerância para verificações da avaliação';
$string['tolerance_help'] = 'Determina a diferença máxima entre as avaliações numéricas da resposta do aluno e as respostas à pergunta que serão permitidas para contar como correspondente.';
$string['toleranceltzero'] = 'Tolerância deve ser igual ou maior do que zero';
$string['undeclaredvar'] = 'Encontrada variável não declarada \'{$a}\'';
$string['undefinedfunction'] = 'Função indefinida \'{$a}\'';
$string['undefinedvar'] = 'Variável(eis) indefinida(s) {$a} utilizada numa ou mais respostas.';
$string['undefinedvariable'] = 'Encontrada variável indefinida \'{$a}\' ao avaliar numericamente uma expressão';
$string['unknownterm'] = 'Erro de sintaxe: termo desconhecido encontrado em \'{$a}\' na expressão';
$string['unusedvar'] = 'Esta variável não é utlizada em qualquer resposta.';
$string['uri'] = 'URI do servidor SAGE';
$string['variable'] = 'Variável';
$string['variable_help'] = 'Os nomes de todas as variáveis usadas nas respostas devem ser indicados aqui. Os valores mínimos e máximos apenas são necessários se for utilizado o algoritmo de comparação da avaliação.';
$string['variablename'] = 'Nome';
$string['variableno'] = 'Variável {$a}';
$string['variables'] = 'Variáveis';
$string['variablex'] = 'Variável {no}';
$string['varmax'] = 'Valor máximo';
$string['varmin'] = 'Valor mínimo';
$string['varmingtmax'] = 'O valor mínimo deve ser menor que o valor máximo.';
