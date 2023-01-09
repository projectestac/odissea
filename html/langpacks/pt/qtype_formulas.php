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
 * Strings for component 'qtype_formulas', language 'pt', version '3.11'.
 *
 * @package     qtype_formulas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abserror'] = 'Erro absoluto';
$string['addmorepartsblanks'] = 'Acrescentar mais {no} partes';
$string['algebraic_formula'] = 'Fórmula algébrica';
$string['answer'] = 'Resposta*';
$string['answer_help'] = '**Obrigatório**.
Deve ser uma lista de números ou uma lista de strings, dependendo do tipo de resposta escolhido. Quando há apenas uma resposta, um número ou string pode digitado diretamente. Tenha em atenção que o número de elementos na lista define o número de campos de resposta para esta parte.
<pre class="prettyprint">123<br>[1, 0, 0, 1]<br>a<br>[1, a, b]<br>"exp(-a t)"<br>["vx t","vy t - 0.5 a t^2"]</pre>';
$string['answercombinedunitmulti'] = 'Resposta e unidade da parte {$a->part}';
$string['answercombinedunitsingle'] = 'Resposta e unidade';
$string['answercoordinatemulti'] = 'Campo de resposta {$a->numanswer} da parte {$a->part}';
$string['answercoordinatesingle'] = 'Campo de resposta {$a->numanswer}';
$string['answermark'] = 'Nota da parte';
$string['answermark_help'] = '**Obrigatório**.
A nota para a resposta desta parte, que deve ser um número maior que 0.
A nota predefinida de toda a pergunta é a soma de todas as notas das partes.

Nota: Se o campo da nota desta parte for deixado em branco, a parte será excluída quando a pergunta for guardada.';
$string['answermulti'] = 'Resposta à parte {$a->part}';
$string['answerno'] = 'Parte {$a}';
$string['answersingle'] = 'Resposta';
$string['answertype'] = 'Tipo de resposta';
$string['answertype_help'] = 'Existem quatro tipos de resposta.

As respostas de número, fórmula numérica e numérica requerem número ou uma lista de números como resposta.

As respostas de fórmula algébrica requerem uma string ou lista de strings como resposta.

Diferentes tipos de respostas irão impor diferentes restrições ao inserir respostas, por isso, os alunos precisarão saber como inseri-los.
O formato verifica o código da pergunta e também os informará quando o que digitarem estiver errado. Leia a documentação para mais detalhes.';
$string['answerunitmulti'] = 'Unidade da parte {$a->part}';
$string['answerunitsingle'] = 'Unidade';
$string['checkvarshdr'] = 'Verificar a instanciação das variáveis';
$string['choiceno'] = 'Não';
$string['choiceyes'] = 'Sim';
$string['commonsiunit'] = 'Unidade do SI';
$string['correctansweris'] = 'Uma possível resposta correta é: {$a}';
$string['correctfeedback'] = 'Por cada resposta correta';
$string['correctfeedback_help'] = 'Este feedback será mostrado aos alunos que obtiverem a nota máxima nesta parte. Pode incluir variáveis globais e locais que serão substituídas pelos seus valores';
$string['correctness'] = 'Critério de avaliação*';
$string['correctness_help'] = '**Obrigatório**. Pode escolher qualquer erro relativo ou erro absoluto com um intervalo de erro. O erro relativo não pode ser usado para o tipo de resposta algébrica.
Para uma definição precisa do erro relativo e do erro absoluto, quando há mais de um campo de resposta, consulte a documentação.';
$string['correctnessexpert'] = 'Especialista';
$string['correctnesssimple'] = 'Modo simplificado';
$string['defaultanswermark'] = 'Nota predefinida da parte';
$string['defaultanswermark_desc'] = 'Nota predefinida da parte para novas partes de pergunta';
$string['defaultanswertype'] = 'Tipo de resposta predefinido';
$string['defaultanswertype_desc'] = 'Tipo de resposta predefinido para novas partes de pergunta';
$string['defaultcorrectness'] = 'Critério de avaliação predefinido';
$string['defaultcorrectness_desc'] = 'Critério de avaliação predefinido para novas partes de pergunta';
$string['defaultunitpenalty'] = 'Unidade predefinida de penalização';
$string['defaultunitpenalty_desc'] = 'Penalização predefinida para unidade errada (0-1)';
$string['error_algebraic_var'] = 'Erro de sintaxe na definição da variável algébrica.';
$string['error_answer_missing'] = 'Não foi definida qualquer resposta.';
$string['error_answerbox_duplicate'] = 'Cada marcador de espaço de resposta só pode ser usado uma vez numa parte.';
$string['error_answertype_mistmatch'] = 'Tipo de resposta incompatível: o tipo de resposta numérica requer um número e o tipo de resposta algébrica requer string';
$string['error_criterion'] = 'Os critérios de avaliação devem ser calculados para um único número.';
$string['error_eval_numerical'] = 'Algumas expressões não podem ser avaliadas numericamente.';
$string['error_fixed_range'] = 'Erro de sintaxe de um intervalo fixo.';
$string['error_forbid_char'] = 'A fórmula ou expressão contém caracteres ou operadores não permitidos.';
$string['error_forloop'] = 'Erro de sintaxe do ciclo For.';
$string['error_forloop_expression'] = 'A expressão do ciclo For deve ser uma lista.';
$string['error_forloop_var'] = 'Variável do ciclo For tem alguns erros.';
$string['error_func_param'] = 'Número incorreto ou tipo errado de parâmetros para a função {$a}()';
$string['error_mark'] = 'A nota da resposta deve ser um valor maior que 0.';
$string['error_no_answer'] = 'É necessária pelo menos uma resposta.';
$string['error_placeholder_format'] = 'Formato de marcador de espaço de resposta incorreto ou com caracteres proibidos.';
$string['error_placeholder_main_duplicate'] = 'Marcador de espaço de resposta duplicado no texto da pergunta principal.';
$string['error_placeholder_missing'] = 'Este marcador de espaço de resposta está em falta no texto da pergunta principal.';
$string['error_placeholder_sub_duplicate'] = 'Este marcador de espaço de resposta já foi definido noutra parte.';
$string['error_placeholder_too_long'] = 'O tamanho do espaço de resposta é limitado a 40 caracteres.';
$string['error_randvars_set_size'] = 'O número de elementos a gerar no conjunto deve ser maior que 1.';
$string['error_randvars_type'] = 'Todos os elementos do conjunto devem ser do mesmo tipo e exatamente do mesmo tamanho.';
$string['error_rule'] = 'Erro na análise da regra!';
$string['error_ruleid'] = 'Não existe qualquer regra no ficheiro com o ID/nome.';
$string['error_subexpression_empty'] = 'Uma sub-expressão está vazia.';
$string['error_syntax'] = 'Erro de sintaxe.';
$string['error_unit'] = 'Erro de análise da unidade!';
$string['error_unitpenalty'] = 'A penalização deve ser um número entre 0 e 1.';
$string['error_validation_eval'] = 'Erro na tentativa de cálculo!';
$string['error_vars_array_index_nonnumeric'] = 'Um valor não numérico não pode ser usado como índice da lista.';
$string['error_vars_array_index_out_of_range'] = 'Índice da lista fora do intervalo!';
$string['error_vars_array_size'] = 'O tamanho da lista deve estar entre 1 e 1000.';
$string['error_vars_array_type'] = 'Os elementos na mesma lista devem ser do mesmo tipo, número ou string.';
$string['error_vars_array_unsubscriptable'] = 'A variável não é assinável.';
$string['error_vars_bracket_mismatch'] = 'Parêntese incorreto.';
$string['error_vars_end_separator'] = 'Falta um separador do trabalho no final .';
$string['error_vars_name'] = 'A sintaxe do nome da variável está incorreta.';
$string['error_vars_reserved'] = 'A função {$a}() é reservada e não pode ser usada como variável.';
$string['error_vars_string'] = 'Erro! Ou é uma string sem fechar as aspas ou o uso de caracteres não permitidos, tais como, \'.';
$string['error_vars_undefined'] = 'A variável \'{$a}\' não foi definida.';
$string['feedback'] = 'Feedback geral da parte';
$string['feedback_help'] = 'O feedback desta parte será mostrado a todos os alunos. Pode incluir variáveis globais e locais que serão substituídas pelos seus valores';
$string['functiontakesatleasttwo'] = 'A função {$a} deve ter pelo menos dois argumentos';
$string['functiontakesnoargs'] = 'A função {$a} não tem argumentos';
$string['functiontakesonearg'] = 'A função {$a} deve ter exatamente um argumento';
$string['functiontakesoneortwoargs'] = 'A função {$a} deve ter um ou dois argumentos';
$string['functiontakesthreeargs'] = 'A função {$a} deve ter exatamente três argumentos';
$string['functiontakestwoargs'] = 'A função {$a} deve ter exatamente dois argumentos';
$string['globalvarshdr'] = 'Variáves';
$string['illegalformulasyntax'] = 'Sintaxe de fórmula incorreta que começa com \'{$a}\'';
$string['incorrectfeedback'] = 'Para qualquer resposta incorreta';
$string['incorrectfeedback_help'] = 'Este feedback será mostrado aos alunos que não obtiverem qualquer nota nesta parte. Pode incluir variáveis globais e locais que serão substituídas pelos seus valores';
$string['instantiate'] = 'Criar instância';
$string['mainq'] = 'Pergunta principal';
$string['modelanswer'] = 'Modelo de resposta';
$string['none'] = 'Nenhum';
$string['number'] = 'Número';
$string['number_unit'] = 'Número e unidade';
$string['numdataset'] = 'Número de conjunto de dados';
$string['numeric'] = 'Numérico';
$string['numeric_unit'] = 'Numérico e unidade';
$string['numerical_formula'] = 'Fórmula numérica';
$string['numerical_formula_unit'] = 'Fórmula numérica e unidade';
$string['otherrule'] = 'Outras regras';
$string['otherrule_help'] = 'O "autor" da pergunta pode definir regras adicionais de conversão para outras unidades base aceites. Consulte a documentação para os usos avançados.';
$string['partiallycorrectfeedback'] = 'Para qualquer resposta parcialmente correta';
$string['partiallycorrectfeedback_help'] = 'Este feedback será mostrado aos alunos que não obtiverem a nota máxima nesta parte. Pode incluir variáveis globais e locais que serão substituídas pelos seus valores';
$string['placeholder'] = 'Nome do espaço de resposta';
$string['placeholder_help'] = 'Um marcador de espaço de resposta (espaço reservado) é usado para identificar a localização no texto da pergunta principal que será substituído pelo conteúdo da parte. É um sequência de caracteres alfanuméricos prefixados por \'**#**\', por exemplo, #1, #2a, #2b e #A.
Se este campo for deixado vazio, a parte será anexada no final do texto da pergunta principal.';
$string['pleaseputananswer'] = 'Digite uma resposta em cada campo de entrada.';
$string['pluginname'] = 'Fórmulas';
$string['pluginname_help'] = 'Para começar a usar este tipo de pergunta, visite a página <a href="https://moodleformulas.org/">moodleformulas.org</a>.

Para possíveis perguntas, visite a página <a href="https://moodleformulas.org/">moodleformulas.org</a>.

Para as diferentes opções no formulário de edição abaixo, visite a página <a href="https://moodleformulas.org/">moodleformulas.org</a>.

Para obter toda a informação, visite a página <a href="https://moodleformulas.org/">moodleformulas.org</a>.';
$string['pluginnameadding'] = 'A adicionar uma pergunta de fórmulas';
$string['pluginnameediting'] = 'A editar uma pergunta de fórmulas';
$string['pluginnamesummary'] = 'Tipo de pergunta com valores aleatórios e respostas múltiplas
Os campos de resposta podem ser colocados em qualquer lugar para  criar perguntas envolvendo várias estruturas, tais como, vetores, polinómios e matrizes.
Outras características, como a verificação de unidades e perguntas com várias partes, também são integradas de forma fácil e simples de usar.';
$string['postunit'] = 'Unidade';
$string['postunit_help'] = 'Pode especificar a unidade aqui. Este tipo de pergunta foi especialmente projetado para unidades SI, por isso, um espaço vazio representa o "produto" de diferentes "unidades base" e <tt>^</tt> é usado para expoentes.
Além disso, <tt>/</tt> pode ser usado para o expoente inverso. Qualquer permutação da unidade base é tratada da mesma forma.
Os alunos devem usar o mesmo formato de entrada. Por exemplo,

<pre class="prettyprint">1 m<br>0.1 m^2<br>20 m s^(-1)<br>400 kg m/s<br>100 kW</pre>';
$string['previewerror'] = 'Nenhuma visualização disponível. Verifique a sua definição de variáveis aleatórias, variáveis globais, variáveis locais das partes e respostas. Mensagem de erro original:';
$string['privacy:metadata'] = 'O módulo de tipo de pergunta Fórmulas não armazena qualquer dado pessoal.';
$string['qtextpreview'] = 'Pré-visualizar';
$string['questiontext'] = 'Texto da pergunta';
$string['questiontext_help'] = 'Além do texto normal da pergunta, também pode usar variáveis globais e marcadores de espaços de resposta.

As variáveis globais serão substituídas pelos seus valores e os marcadores de de espaços de resposta serão substituídos por partes.
Um exemplo simples com variáveis <tt> A, B, C </tt> e marcadores de espaços de resposta <tt> #1, #2, #3 </tt> é:

<pre class="prettyprint">Qual é o resultado de {A} + {B}?<br>{#1}<br>Qual é o resultado de {A} - {B}?<br>{#2}<br>Qual é o resultado de {C} / {B}?<br>{#3}</pre>';
$string['relerror'] = 'Erro relativo';
$string['renew'] = 'Atualizar';
$string['ruleid'] = 'Regras básicas de conversão';
$string['ruleid_help'] = 'Este tipo de pergunta possui um sistema integrado de conversão de unidades e regras básicas de conversão.

O básico são as regras das "Unidades do SI" que irão converter unidades padrão como por exemplo, unidade para comprimento, km, m, cm e mm. Esta opção não tem efeito se nenhuma unidade tiver sido usada.';
$string['settingusepopup'] = 'Usar dicas de ajuda';
$string['settingusepopup_desc'] = 'Mostrar a resposta correta e comentários numa dica de ajuda';
$string['subqoptions'] = 'Configurações da unidade';
$string['subqtext'] = 'Texto da parte';
$string['subqtext_help'] = 'Os campos de texto e os campos de resposta podem ser especificados aqui. Os marcadores de espaços de resposta (espaços reservados) que podem ser usados para especificar locais de campos de resposta são:

<pre class="prettyprint">{_0}<br>{_1}<br>{_2}<br>...<br>{_u}</pre>

Os <tt>{_0}, {_1}, {_2}</tt> são os campos de entrada para valores e o <tt> {_u} </tt> é o campo de entrada para a unidade.

Todos os campos em falta são anexados automaticamente no final do texto da parte. Um caso especial é quando <tt>{_0}, {_u}</tt> são especificados consecutivamente e há apenas uma campo de resposta e unidade, ou seja, <tt>{_0}{_u}</tt>, serão combinados num único e longo campo de entrada da resposta para a resposta e unidade.';
$string['unit'] = 'Unidade';
$string['unitpenalty'] = 'Desconto por unidade errada (0-1) *';
$string['unitpenalty_help'] = 'Esta opção especifica o valor de penalização ao aluno por uma unidade errada.

De ser entre 0 e 1. Se for o valor 1, a unidade e a resposta devem estar corretas ao mesmo tempo para obter a nota. O seja, a unidade e a resposta são tratadas como uma entidade única. Por outro lado, se for o valor 0, os alunos podem obter a nota total apenas para a resposta correta. Todas as strings aleatórias não terão efeito no final da resposta.

Por isso, recomenda-se usar o valor 1 sempre que a resposta não tiver uma unidade associada.';
$string['unsupportedformulafunction'] = 'A função {$a} não é suportada';
$string['vars1'] = 'Variáveis locais';
$string['vars1_help'] = 'Pode definir aqui variáveis da mesma forma que as variáveis globais são definidas ao nível da pergunta. As variáveis definidas aqui podem ser usadas na resposta ou no feedback da parte e o seu âmbito de visibilidade é limitado à parte.';
$string['vars2'] = 'Variáveis de avaliação';
$string['vars2_help'] = 'Todas as variáveis locais e as respostas do aluno podem ser usadas aqui. Consulte a documentação para usos avançados.';
$string['varsdata'] = 'Conjunto de dados instanciado';
$string['varsglobal'] = 'Variáveis globais';
$string['varsglobal_help'] = 'As fórmulas podem ser especificadas aqui para manipular as variáveis aleatórias instanciadas (todas as variáveis aleatórias estão disponíveis aqui).
A lista completa de funções e operadores matemáticos são fornecidos na documentação.

<pre class="prettyprint">a = 1.11111;<br>b = exp(3);<br>c = A + a + b;<br>d = sin(1.5*pi()) + c;<br>e = round(a, 0);<br>f = [0,1,2,3][A];<br>g = ["zero","um","dois","três"][A];<br>distância = sqrt(a*a + b*b);</pre>';
$string['varsrandom'] = 'Variáveis aleatórias';
$string['varsrandom_help'] = 'Os novos valores aleatórios são gerados para estas variáveis no início de cada tentativa. Pode definir um conjunto de elementos para escolher:

<pre class="prettyprint">A = {1,2,3};<br>C = {[1,-1], [2,-2], [3,-3]};<br>E = {10:100:10, 100, 1000};</pre>

Os elementos podem ser números, strings ou listas destes. No início de uma nova tentativa, um elemento será "puxado" a partir do conjunto e atribuído à variável à esquerda. Além disso, para um conjunto de números, pode usar a notação de intervalo como 10: 100: 10 (veja o exemplo E acima). < p>';
$string['varsstatistics'] = 'Estatisticas';
$string['yougotnright'] = 'Respondeu corretamente a {$a->num} parte(s) desta pergunta.';
