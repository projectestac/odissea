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
 * Strings for component 'qtype_ordering', language 'pt', version '3.8'.
 *
 * @package     qtype_ordering
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'Posição absoluta';
$string['addmultipleanswers'] = 'Adicionar mais {$a} itens';
$string['addsingleanswer'] = 'Adicionar mais 1 item';
$string['allornothing'] = 'Tudo ou nada';
$string['answer'] = 'Item texto';
$string['answerheader'] = 'Item arrastável {no}';
$string['correctorder'] = 'Ordem correta dos itens:';
$string['defaultanswerformat'] = 'Formato de resposta predefinido';
$string['defaultquestionname'] = 'Arraste os seguintes itens para a ordem correta.';
$string['duplicatesnotallowed'] = 'Não é permitida a duplicação de itens arrastáveis. O texto "{$a->text}" já está em uso em \'{$a->item}\'.';
$string['editingordering'] = 'A editar pergunta de Ordenação';
$string['gradedetails'] = 'Detalhes da avaliação';
$string['gradingtype'] = 'Método de avaliação';
$string['gradingtype_help'] = 'Escolha o método de avaliação.

**Tudo ou nada**
: Se todos os itens estão na posição correta, a pontuação obtida é igual à pontuação máxima, caso contrário, a pontuação é zero.

**Posição absoluta**
: Um item é considerado correto, se está na mesma posição como na resposta correta. A pontuação mais alta possível para a pergunta é **a mesma** que o número de itens mostrados ao aluno.

**Posição relativa à resposta correta**
: Um item é considerado correto se estiver na mesma posição da resposta correta. Itens corretos recebem uma pontuação igual ao número de itens mostrados menos um. Itens incorretos recebem uma pontuação igual ao número de itens mostrados menos um e menos a "distância" do item à sua posição correta. Assim, se ***n*** itens são mostrados ao aluno, o número de pontuações possíveis para cada item é ***(n - 1)*** e a pontuação mais alta possível para a pergunta é ***n x (n - 1)***, o que é o mesmo que ***(n² - n)***.

**Relação ao seguinte (excluindo o último)**
: Um item é considerado correto se a seguir está o mesmo item que está na resposta correta. O item da última posição não é verificado. A pontuação mais alta possível para a questão é **menos um** que o número de itens mostrados ao aluno.

**Relação ao seguinte (incluindo o último)**
: Um item é considerado correto se a seguir está o mesmo item que está na resposta correta. O último item não pode ter qualquer item a seguir. A pontuação mais alta possível para a questão é **a mesma** que o número de itens mostrados ao aluno.

**Relação ao anterior e ao seguinte**
: Um item é considerado correto, se ambos os itens anterior e seguinte são os mesmos que estão na resposta correta. O primeiro não pode  ter nenhum item antes e o último item não pode ter nenhum item a seguir. Assim, existem dois pontos possíveis para cada item e a pontuação mais alta possível para a questão é **o dobro** que o número de itens mostrados ao aluno.

**Relativo a TODOS os itens anteriores e seguintes**
: Um item é considerado correto se for precedido por todos os mesmos itens tal como na resposta correta e é seguido pelos mesmos itens tal como na resposta correta. A ordem dos itens anteriores não importa assim como não importa a ordem dos itens a seguir. Assim, se ***n*** itens são mostrados ao aluno, o número de pontos disponíveis para cada item é ***(n - 1)*** e a nota mais alta possível para a questão é ***n x (n - 1)***, que é o mesmo que ***(n² - n)***.

**Maior subconjunto ordenado**
: A nota é o número de itens no maior subconjunto de itens ordenados. A pontuação mais alta possível para a questão é igual ao número de itens mostrados. Um subconjunto deve ter pelo menos dois itens. Os subconjuntos não precisam de começar no primeiro item (mas podem) e não precisam de ser contíguos (mas podem ser). Se houver vários subconjuntos de igual tamanho, os itens no subconjunto que se encontra em primeiro lugar, da esquerda para a direita, serão mostrados como corretos. Os outros itens serão considerados como incorretos.

**Maior subconjunto de contíguos**
: A nota é o número de itens no maior subconjunto de itens contíguos. A pontuação mais alta possível para a questão é igual ao número de itens mostrados. Um subconjunto deve ter pelo menos dois itens. Os subconjuntos não precisam de começar no primeiro item (mas podem) mas TÊM DE SER CONTÍGUOS. Se houver vários subconjuntos de igual tamanho, os itens no subconjunto que se encontra em primeiro lugar, da esquerda para a direita, serão mostrados como corretos. Os outros itens serão considerados como incorretos.';
$string['horizontal'] = 'Horizontal';
$string['layouttype'] = 'Estrutura dos itens';
$string['layouttype_help'] = 'Escolha se pretende dispor os itens verticalmente ou horizontalmente.';
$string['longestcontiguoussubset'] = 'Maior subconjunto de contíguos';
$string['longestorderedsubset'] = 'Maior subconjunto ordenado';
$string['noresponsedetails'] = 'Não estão disponíveis detalhes acerca da resposta a esta pergunta.';
$string['noscore'] = 'Sem pontuação';
$string['notenoughanswers'] = 'Perguntas de Ordenação devem ter mais do que {$a} respostas.';
$string['numberingstyle'] = 'Numerar as opções?';
$string['numberingstyle123'] = '1., 2., 3., ...';
$string['numberingstyleABCD'] = 'A., B., C., ...';
$string['numberingstyleIIII'] = 'I., II., III., ...';
$string['numberingstyle_desc'] = 'O estilo de numeração predefinido';
$string['numberingstyle_help'] = 'Escolha o estilo de numeração para os itens arrastáveis desta pergunta.';
$string['numberingstyleabc'] = 'a., b., c., ...';
$string['numberingstyleiii'] = 'i., ii., iii., ...';
$string['numberingstylenone'] = 'Sem numeração';
$string['pluginname'] = 'Ordenação';
$string['pluginname_help'] = 'Vários itens são mostrados de forma desordenada. Os itens podem ser arrastados para uma ordem significativa.';
$string['pluginnameadding'] = 'Adicionar uma pergunta de Ordenação';
$string['pluginnameediting'] = 'A editar uma pergunta de Ordenação';
$string['pluginnamesummary'] = 'Dispor os itens desorganizados numa ordem significativa.';
$string['positionx'] = 'Posição {$a}';
$string['privacy:metadata'] = 'O módulo do tipo de pergunta de Ordenação não armazena qualquer dado pessoal.';
$string['relativeallpreviousandnext'] = 'Em relação a TODOS os itens anteriores e seguintes';
$string['relativenextexcludelast'] = 'Em relação ao item seguinte (excluindo o último)';
$string['relativenextincludelast'] = 'Em relação ao item seguinte (incluindo o último)';
$string['relativeonepreviousandnext'] = 'Em relação a ambos os itens anteriores e seguintes';
$string['relativetocorrect'] = 'Em relação à posição correta';
$string['removeeditor'] = 'Remover editor HTML';
$string['removeitem'] = 'Eliminar item arrastável';
$string['scoredetails'] = 'Pontuação para cada item nesta resposta:';
$string['selectall'] = 'Selecionar todos os itens';
$string['selectcontiguous'] = 'Seleccionar um subconjunto contíguo de itens';
$string['selectcount'] = 'Tamanho do subconjunto';
$string['selectcount_help'] = 'O número de itens a mostrar quando a pergunta é mostrada num teste.';
$string['selectrandom'] = 'Selecionar um subconjunto aleatório de itens';
$string['selecttype'] = 'Tipo de seleção de itens';
$string['selecttype_help'] = 'Escolha se pretender mostrar todos os itens ou apenas um subconjunto de itens.';
$string['showgrading'] = 'Detalhes da avaliação';
$string['showgrading_help'] = 'Escolha se pretende mostrar, ou não, os detalhes do cálculo da nota quando um aluno revê a resposta a esta pergunta de Ordenação.';
$string['vertical'] = 'Vertical';
