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
 * Strings for component 'grading', language 'pt', branch 'MOODLE_34_STABLE'
 *
 * @package   grading
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->method}\'é selecionado como o método de avaliação ativo para a área \'{$a->area}';
$string['activemethodinfonone'] = 'Não existe um método de avaliação avançado selecionado para a area \'{$a->area}\' . Será usada a avaliação direta simples.';
$string['changeactivemethod'] = 'Alterar o método de avaliação ativo para';
$string['clicktoclose'] = 'clique para fechar';
$string['exc_gradingformelement'] = 'Não é possível instanciar o elemento da grelha de avaliação';
$string['formnotavailable'] = 'O Método de avaliação avançado foi selecionado para ser usado no Trabalho mas a grelha de avaliação ainda não se encontra definida. Poderá ser necessário editá-la primeiro a partir da respetiva opção no bloco Administração.';
$string['gradingformunavailable'] = 'Atenção: a grelha de avaliação ainda não está configurada. Será usado o método de avaliação simples direta até que a grelha esteja configurada.';
$string['gradingmanagement'] = 'Método de avaliação avançado';
$string['gradingmanagementtitle'] = 'Método de avaliação avançado: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Método de avaliação';
$string['gradingmethod_help'] = 'Escolha o método de avaliação avançado que deverá ser usado para calcular as notas neste contexto.

Para desativar a avaliação avançada e voltar ao método de avaliação predefinido, selecione a opção \'Avaliação simples direta\'.';
$string['gradingmethodnone'] = 'Avaliação simples direta';
$string['gradingmethods'] = 'Métodos de avaliação';
$string['manageactionclone'] = 'Criar nova grelha de avaliação a partir de um modelo';
$string['manageactiondelete'] = 'Apagar a grelha definida';
$string['manageactiondeleteconfirm'] = 'Está prestes a apagar a grelha \'{$a->formname}\' e toda a informação associada de \'{$a->component} ({$a->area})\'. Por favor, certifique-se de que tem conhecimento do seguinte:

* Não existe forma de voltar atrás após esta operação.
* Pode alterar para outro método de avaliação incluindo o \'Avaliação simples direta\' sem apagar esta grelha.
* Todas as informações sobre como as grelhas de avaliação estão preenchidas serão perdidas.
* Os resultados guardados na pauta não serão afetados. No entanto, a explicação de como foram calculados não estará disponível.
* Esta operação não afetará eventuais cópias desta grelha noutras atividades.';
$string['manageactiondeletedone'] = 'A grelha foi apagado com sucesso';
$string['manageactionedit'] = 'Editar as definições da grelha';
$string['manageactionnew'] = 'Criar nova grelha de avaliação';
$string['manageactionshare'] = 'Publicar a grelha como um novo modelo.';
$string['manageactionshareconfirm'] = 'Está prestes a guardar uma cópia da grelha de avaliação \'{$a}\' como um novo modelo público. Outros utilizadores no seu site poderão criar novas grelhas de avaliação nas suas atividades a partir deste modelo.';
$string['manageactionsharedone'] = 'A grelha de avaliação foi guardada com sucesso como modelo.';
$string['noitemid'] = 'A avaliação não é possivel, o item de avaliação não existe.';
$string['nosharedformfound'] = 'Não foram encontrados modelos';
$string['privacy:metadata:grading_definitions'] = 'Informação básica sobre um formulário de avaliação avançado na área definida.';
$string['privacy:metadata:grading_definitions:areaid'] = 'O ID da área onde o formulário de avaliação avançada é definido.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'O ID de definição da avaliação de onde isto foi copiado.';
$string['privacy:metadata:grading_definitions:description'] = 'A descrição do método de avaliação avançada';
$string['privacy:metadata:grading_definitions:method'] = 'O método de avaliação que é responsável pela definição.';
$string['privacy:metadata:grading_definitions:name'] = 'O nome da definição de avaliação avançada';
$string['privacy:metadata:grading_definitions:options'] = 'Algumas configurações desta definição de avaliação';
$string['privacy:metadata:grading_definitions:status'] = 'O estado desta avaliação avançada';
$string['privacy:metadata:grading_definitions:timecopied'] = 'A hora a que a definição da avaliação foi copiada.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'A hora a que a definição da avaliação foi criada.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'A hora a que a definição da avaliação foi modificada.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'O ID do utilizador que criou a definição de avaliação.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'O ID do utilizador que modificou a definição de avaliação pela última vez.';
$string['privacy:metadata:gradingformpluginsummary'] = 'Dados do método de avaliação.';
$string['privacy:metadata:grading_instances'] = 'registo da avaliação para um item avaliado por um avaliador.';
$string['privacy:metadata:grading_instances:feedback'] = 'O feedback atribuído pelo utilizador.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'O formato de texto do feedback atribuído pelo utilizador.';
$string['privacy:metadata:grading_instances:raterid'] = 'O ID do utilizador que avaliou a instância de avaliação.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'A avaliação para a instância de avaliação.';
$string['privacy:metadata:grading_instances:status'] = 'O estado desta instância de avaliação';
$string['privacy:metadata:grading_instances:timemodified'] = 'A hora em que a instância de avaliação foi modificado pela última vez.';
$string['searchownforms'] = 'incluir as minhas grelhas';
$string['searchtemplate'] = 'Pesquisar grelhas de avaliação';
$string['searchtemplate_help'] = 'Pode pesquisar por uma grelha de avaliação e usá-la aqui como modelo a partir da nova grelha de avaliação. Basta inserir as palavras que devem aparecer em algum lugar no nome da grelha, na sua descrição ou no próprio corpo da grelha. Para pesquisar uma frase, insira a expressão inteira entre aspas.

Por predefinição, apenas as grelhas de avaliação que foram guardados como modelos partilhados são incluídos nos resultados da pesquisa. Também pode incluir todas as suas grelhas nos resultados da pesquisa. Desta forma, pode simplesmente re-utilizar as suas grelhas de avaliação sem partilhá-los. Apenas as grelhas marcados como \'Pronto a usar\' podem ser usados desta forma.';
$string['statusdraft'] = 'Rascunho';
$string['statusready'] = 'Pronto a usar';
$string['templatedelete'] = 'Apagar';
$string['templatedeleteconfirm'] = 'Está prestes a apagar a grelha partilhada \'{$a}\'. Apagar um modelo não afeta as grelhas existentes que foram criados a partir dele.';
$string['templateedit'] = 'Editar';
$string['templatepick'] = 'Usar este modelo';
$string['templatepickconfirm'] = 'Pretende usar a grelha de avaliação \'{$a->formname}\' como modelo para a nova grelha em \'{$a->component} ({$a->area})\'?';
$string['templatepickownform'] = 'Usar esta grelha como modelo';
$string['templatesource'] = 'Localização: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Grelha próprio';
$string['templatetypeshared'] = 'Modelo partilhado';
