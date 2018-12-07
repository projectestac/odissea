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
 * Strings for component 'qtype_ordering', language 'pt', branch 'MOODLE_34_STABLE'
 *
 * @package   qtype_ordering
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'Posição absoluta';
$string['addingordering'] = 'Adicionar uma pergunta de Ordenação';
$string['addmoreanswers'] = 'Adicionar mais {$a} itens';
$string['allornothing'] = 'Tudo ou nada';
$string['answer'] = 'Item texto';
$string['answerheader'] = 'Item arrastável {no}';
$string['correctorder'] = 'A ordem correta para estes itens é a seguinte:';
$string['defaultanswerformat'] = 'Formato de resposta predefinido';
$string['defaultquestionname'] = 'Arraste os seguintes itens para a ordem correta.';
$string['editingordering'] = 'Edição de pergunta de Ordenação';
$string['gradedetails'] = 'Detalhes da avaliação';
$string['gradingtype'] = 'Tipos de avaliação';
$string['gradingtype_help'] = 'Escolha o tipo de avaliação.

**Tudo ou nada**
: Se todos os itens estão na posição correta, a pontuação obtida é igual à pontuação máxima, caso contrário, a pontuação é zero.

**Posição absoluta**
: Um item é considerado correto, se está na mesma posição como na resposta correta. A pontuação mais alta possível para a questão é **a mesma** que o número de itens mostrados ao aluno.

**Relação ao seguinte (excluindo o último)**
: Um item é considerado correto se a seguir está o mesmo item que está na resposta correta. O item da última posição não é verificado. A pontuação mais alta possível para a questão é **menos um** que o número de itens mostrados ao aluno.

**Relação ao seguinte (incluindo o último)**
: Um item é considerado correto se a seguir está o mesmo item que está na resposta correta. O último item não pode ter qualquer item a seguir. A pontuação mais alta possível para a questão é **a mesma** que o número de itens mostrados ao aluno.

**Relação ao anterior e seguinte**
: Um item é considerado correto, se ambos os itens anterior e seguinte são os mesmos que estão na resposta correta. O primeiro não pode  ter nenhum item antes e o último item não pode ter nenhum item a seguir. Assim, existem dois pontos possíveis para cada item e a pontuação mais alta possível para a questão é **o dobro** que o número de itens mostrados ao aluno.

**Relativo a todos os itens anteriores e seguintes**
: Um item é considerado correto se for precedido por todos os mesmos itens tal como na resposta correta e é seguido pelos mesmos itens tal como na resposta correta. A ordem dos itens anteriores não importa assim como não importa a ordem dos itens a seguir. Assim, se ***n*** itens são mostrados ao aluno, o número de pontos disponíveis para cada item é ***(n - 1)*** e a nota mais alta possível para a questão é ***n x (n - 1)***, que é o mesmo que ***(n² - n)***.

**Maior subconjunto ordenado**
: A nota é o número de itens no maior subconjunto de itens ordenados. A pontuação mais alta possível para a questão é igual ao número de itens mostrados. Um subconjunto deve ter pelo menos dois itens. Os subconjuntos não precisam de começar no primeiro item (mas podem) e não precisam de ser contíguos (mas podem ser). Se houver vários subconjuntos de igual tamanho, os itens no subconjunto que se encontra em primeiro lugar, da esquerda para a direita, serão mostrados como corretos. Os outros itens serão considerados como incorretos.

**Maior subconjunto de contíguos**
: A nota é o número de itens no maior subconjunto de itens contíguos. A pontuação mais alta possível para a questão é igual ao número de itens mostrados. Um subconjunto deve ter pelo menos dois itens. Os subconjuntos não precisam de começar no primeiro item (mas podem) mas TÊM DE SER CONTÍGUOS. Se houver vários subconjuntos de igual tamanho, os itens no subconjunto que se encontra em primeiro lugar, da esquerda para a direita, serão mostrados como corretos. Os outros itens serão considerados como incorretos.';
$string['horizontal'] = 'Horizontal';
$string['layouttype'] = 'Layout dos itens';
$string['layouttype_help'] = 'Escolha se pretende dispor os itens verticalmente ou horizontalmente.';
$string['longestcontiguoussubset'] = 'Maior subconjunto de contíguos';
$string['longestorderedsubset'] = 'Maior subconjunto ordenado';
$string['noresponsedetails'] = 'Não estão disponíveis detalhes sobre a resposta a esta questão.';
$string['noscore'] = 'Sem pontuação';
$string['notenoughanswers'] = 'Ordenação deve ter mais do que {$a} respostas.';
$string['pluginname'] = 'Ordenação';
$string['pluginnameadding'] = 'Adicionar uma questão de Ordenação';
$string['pluginnameediting'] = 'Editar uma questão de Ordenação';
$string['pluginname_help'] = 'Vários itens são mostrados de forma desordenada. Os itens podem ser arrastados para uma ordem significativa.';
$string['pluginnamesummary'] = 'Dispor os itens desorganizados numa ordem significativa.';
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
$string['selectcount_help'] = 'O número de itens a mostrar quando a questão é exibida num teste.';
$string['selectrandom'] = 'Selecionar um subconjunto aleatório de itens';
$string['selecttype'] = 'Tipo de seleção de itens';
$string['selecttype_help'] = 'Escolha se quer mostrar todos os itens ou apenas um subconjunto de itens.';
$string['showgrading'] = 'Detalhes da avaliação';
$string['showgrading_help'] = 'Escolha se pretende mostrar ou ocultar os detalhes do cálculo da nota quando um aluno revê a resposta a esta pergunta de Ordenação.';
$string['vertical'] = 'Vertical';
