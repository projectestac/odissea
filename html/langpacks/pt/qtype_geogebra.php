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
 * Strings for component 'qtype_geogebra', language 'pt', version '4.5'.
 *
 * @package     qtype_geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconstraints'] = 'Adicionar restrições (condições) às variáveis.';
$string['addmorevarblanks'] = 'Espaço em branco para mais {no} variáveis';
$string['answerinvalid'] = 'A string na resposta é inválida. Não deveria estar a ocorrer.';
$string['answermissing'] = 'A resposta está em falta. Pode acontecer se o JavaScript não está ativado no navegador ou ocorreu um erro desconhecido';
$string['answervar'] = 'Variáveis para avaliação automática';
$string['answervar_help'] = 'Para avaliação automática: Um nome de um objeto booleano no GeoGebra que é verdadeiro se o aluno resolveu a pergunta (parcialmente). Soma todas as notas de todas as variáveis booleanas. A pergunta está correta se alguma combinação exceder 100%, mas deve haver pelo menos uma combinação que some exatamente 100%. Deixe em branco para a avaliação manual.';
$string['applet_advanced_settings'] = 'Configurações avançadas...';
$string['constraints'] = 'Restrições (condições)';
$string['constraints_help'] = 'Existem restrições para variáveis, como por exemplo: "a < b", que não puderam ser declaradas usando as opções do controlo deslizante? Separe as restrições por vírgulas. São suportadas as relações: <, <=, >, > = (menor, menor ou igual, maior, maior ou igual). Se precisar de uma igualdade, deve usar a mesma variável que usou ao criar a folha do GeoGebra. Os intervalos dinâmicos, ou seja, o uso de variáveis para controlo deslizante mín./máx., não são suportados.';
$string['constraintswrongortoohard'] = '{$a->inequalities} estão erradas ou muito difíceis de encontrar. Foram tentadas (força bruta) {$a->tries} vezes em {$a->time} segundos. Talvez no futuro usaremos um método mais eficaz...';
$string['dragndrop'] = 'Arraste e largue um ficheiro GeoGebra em qualquer lugar na secção do Applet GeoGebra';
$string['enable_label_drags'] = 'Ativar arrastamento de etiquetas';
$string['enable_right_click'] = 'Ativar clique do lado direito e edição com teclado';
$string['enable_shift_drag_zoom'] = 'Ativar Shift-Arrastar & Zoom';
$string['feedback'] = 'Feedback quando a variável é verdadeira';
$string['feedback_help'] = 'O feedback é obtido automaticamente da legenda da variável no ficheiro GeoGebra.';
$string['geogebraapplet'] = 'Applet GeoGebra';
$string['getvars'] = 'Obter variáveis que podem ser aleatórias a partir do applet';
$string['ggbfilemissing'] = 'A string base64 está em falta na resposta. Pode acontecer se o JavaScript não está ativado no navegador ou ocorreu um erro desconhecido';
$string['ggbturl'] = 'URL ou ID do GeoGebra';
$string['ggbturl_help'] = 'Pode usar o botão de partilha no GeoGebra e copiar e colar a o URL ou usar o repositório GeoGebra. O applet e os parâmetros são armazenados na base de dados. O applet não será recarregado do GeoGebra a menos que seja solicitado. Também é possível fornecer apenas a ID ou a chave de partilha do applet.';
$string['ggbxmlmissing'] = 'A string XML está em falta na resposta. Pode acontecer se o JavaScript não está ativado no navegador ou ocorreu um erro desconhecido';
$string['invalidinequality'] = '{$a} é inválido';
$string['isexercise'] = 'Use GeoGebra-Exercise para verificar a pergunta';
$string['isexercise_help'] = 'O applet contém ferramentas definidas pelo utilizador que podem ser usadas para verificação automática do exercício.\\nAtenção: Todas as respostas abaixo não são aplicáveis neste caso!';
$string['israndomized'] = 'Existem variáveis que devem ser aleatórias?';
$string['loadapplet'] = '(Re)carregar e mostrar';
$string['loadapplet_help'] = '(Re)Carregar o applet do GeoGebra e armazenar a nova versão do GeoGebra na base de dados.';
$string['mineqmax'] = 'O Mín e o Máx para a escolha aleatória não estão especificados corretamente para a variável {$a}. Não especificou o mínimo e máximo do controlo deslizante ou o elemento não é um controlo deslizante. Provavelmente terá que corrigir o erro no seu ficheiro GeoGebra.';
$string['minplusstepgtmax'] = 'O Mín mais o incremento é maior do que o máximo para a variável {$a}. Provavelmente terá que corrigir o erro no seu ficheiro GeoGebra.';
$string['noappletloaded'] = 'Nenhum applet carregado! Verifique se o URL está correto e se consegue visualizar o applet após escolher a hiperligação ou (re)carregar o applet';
$string['nofractionsumeq1'] = 'Pelo menos uma combinação das notas deve somar 100%';
$string['pluginname'] = 'GeoGebra';
$string['pluginname_help'] = 'Pergunta que o aluno pode resolver utilizando o GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';
$string['pluginnameadding'] = 'A adicionar uma pergunta GeoGebra';
$string['pluginnameediting'] = 'A editar uma pergunta GeoGebra';
$string['pluginnamesummary'] = 'Uma versão de perguntas numéricas com variáveis que usa o GeoGebra para mostrar a pergunta e verificar a resposta quando o aluno responde ao teste.';
$string['randomizedbutnovars'] = 'Selecionou que a pergunta deve ser aleatória, mas não especificou nenhuma variável válida para ser aleatória.';
$string['randomizedvar'] = 'Variáveis que serão aleatórias';
$string['randomizedvar_help'] = 'Variáveis (separadas por vírgula) cujos valores devem ser aleatórios. Use as opções do controlo deslizante no GeoGebra para declarar o Mín, o Máx e o Incremento. Estas variáveis também podem ser usadas no texto da pergunta, colocando-as entre parênteses curvos, por exemplo: {a}';
$string['show_algebra_input'] = 'Mostrar barra de entrada';
$string['show_menu_bar'] = 'Mostrar menu';
$string['show_reset_icon'] = 'Mostrar ícone para reiniciar a construção';
$string['show_tool_bar'] = 'Mostrar a barra de ferramentas';
$string['stepzero'] = 'O incremento é 0 para a variável {$a}. Ou não especificou o incremento do controlo deslizante ou o elemento não é um controlo deslizante. Provavelmente terá que corrigir o erro no seu ficheiro GeoGebra.';
$string['useafile'] = '... ou use um ficheiro ggb';
$string['valuecheckedfor'] = 'Objeto booleano (lógico) no GeoGebra que é usado para verificar a correção.';
$string['variablenamewrong'] = 'Não foi encontrada qualquer variável com esse nome no ficheiro GeoGebra.';
$string['variableno'] = 'Variável {$a}';
$string['variables'] = 'Variáveis';
$string['willbereadfromfile'] = 'Será lido no GeoGebra ... (ver botão de ajuda)';
