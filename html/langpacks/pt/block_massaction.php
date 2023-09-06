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
 * Strings for component 'block_massaction', language 'pt', version '4.1'.
 *
 * @package     block_massaction
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_contentchangednotification'] = 'Enviar notificação de alteração do conteúdo';
$string['action_delete'] = 'Apagar';
$string['action_duplicate'] = 'Duplicar';
$string['action_duplicatetocourse'] = 'Duplicar para outra disciplina';
$string['action_duplicatetosection'] = 'Duplicar para a secção';
$string['action_hide'] = 'Ocultar';
$string['action_makeavailable'] = 'Tornar disponível';
$string['action_moveleft'] = 'Recuar (mover para a esquerda)';
$string['action_moveright'] = 'Avançar (mover para direita)';
$string['action_movetosection'] = 'Mover para secção';
$string['action_show'] = 'Mostar';
$string['actionexecuted'] = 'A ação que solicitou foi executada.';
$string['applicablecourseformats'] = 'Formatos de disciplina aplicáveis';
$string['applicablecourseformats_description'] = 'O bloco Ações em Massa estará disponível apenas para os formatos de disciplina selecionados.<br />Os valores pré-selecionados são aqueles que foram testados e são suportados pelo programador do módulo. Adicione outros formatos por sua responsabilidade.';
$string['backgroundtaskinformation'] = 'A ação que selecionou está a ser executada em segundo plano. Pode continuar o seu trabalho enquanto não termina.';
$string['blockname'] = 'Ações em Massa';
$string['blocktitle'] = 'Ações em Massa';
$string['choosecoursetoduplicateto'] = 'Selecione a disciplina para a qual pretende duplicar os módulos da disciplina selecionados';
$string['choosesectiontoduplicateto'] = 'Selecione a secção para a qual pretende que os módulos da disciplina selecionados sejam duplicados.';
$string['choosetargetcourse'] = 'Selecione a disciplina de destino';
$string['choosetargetsection'] = 'Selecione a secção de destino';
$string['confirmcourseselect'] = 'Selecione a disciplina';
$string['confirmsectionselect'] = 'Selecione a secção';
$string['deletecheck'] = 'Confirmar apagar em massa';
$string['deletecheckconfirm'] = 'Tem a certeza de que pretende apagar o(s) módulo(s) abaixo?';
$string['deselectall'] = 'Desselecionar tudo';
$string['duplicatemaxactivities'] = 'Máximo de módulos da disciplina para duplicar';
$string['duplicatemaxactivities_description'] = 'Número máximo de módulos da disciplina que podem ser duplicados ao mesmo tempo sem executar o processo como tarefa em segundo plano. Se definido como "0", todas as operações de duplicação serão executadas como tarefa em segundo plano.';
$string['invalidaction'] = 'Ação desconhecida: {$a}';
$string['invalidcourseid'] = 'ID da disciplina inválido';
$string['invalidcoursemodule'] = 'Módulo de disciplina inválido';
$string['invalidmoduleid'] = 'ID do módulo inválido: {$a}';
$string['jsonerror'] = 'Erro de codificação: formato JSON inválido';
$string['keepsectionnum'] = 'Manter o número da secção original';
$string['limittoenrolled'] = 'Limitar a lista de disciplinas às que o utilizador está inscrito';
$string['limittoenrolled_description'] = 'Se ativar esta opção, a seleção disciplina da funcionalidade "Duplicar para outra disciplina" ficará limitada às disciplinas nas quais o utilizador está inscrito. É recomendado ativar nas instâncias com muitas disciplinas, porque não limitar as disciplinas provavelmente resultará em problemas de desempenho e tempos limite. A desativação desta opção é por sua conta e risco.';
$string['massaction:addinstance'] = 'Adicionar um novo bloco de Ações em Massa';
$string['massaction:sendcontentchangednotifications'] = 'Enviar notificação de alteração de conteúdo';
$string['massaction:use'] = 'Usar o bloco de Ações em Massa';
$string['modulename'] = 'Nome da atividade';
$string['moduletype'] = 'Tipo de atividade';
$string['multipleinstances'] = 'Não pode existir haver várias instâncias deste bloco na mesma página. <br />Por favor, remova as instâncias adicionais.';
$string['newsection'] = 'Nova secção';
$string['noaction'] = 'Nenhuma ação foi especificada';
$string['noactionsavailable'] = 'Não tem permissão para executar nenhuma das operações possíveis que este bloco possibilita';
$string['nocaptobackup'] = 'Não tem permissões suficientes para realizar cópia de segurança na disciplina';
$string['nocaptorestore'] = 'Não tem permissões suficientes para realizar restauro na disciplina';
$string['noitemselected'] = 'Selecione pelo menos um item para aplicar a Ação em Massa';
$string['nomovingtargetselected'] = 'Selecione uma secção de destino';
$string['notargetcourseidspecified'] = 'Não foi especificado o ID da disciplina de destino';
$string['pluginname'] = 'Ações em Massa';
$string['privacy:metadata'] = 'Este bloco oferece apenas a possibilidade de aplicar operações padrão, em simultâneo, em vários módulos da disciplina.
Nenhum dado é armazenado por este bloco.';
$string['sectionnotexist'] = 'A secção de destino não existe';
$string['sectionselect'] = 'Seleção de secção';
$string['sectionselect_help'] = 'Só pode selecionar secções que incluem pelo menos um módulo do disciplina.
Além disso, ao usar o formato de curso Mosaicos ou Um Tópico, só pode selecionar secções que estão visíveis no momento.';
$string['selectall'] = 'Marcar tudo';
$string['selectallinsection'] = 'Selecionar tudo na secção';
$string['sourcecourseidlost'] = 'Não foi encontrado o ID da disciplina de origem';
$string['unusable'] = 'A funcionalidade de ação em massa não pode ser usada neste formato de disciplina ou no tema atual';
$string['usage'] = 'Utilização do bloco Ações em Massa';
$string['usage_help'] = '<p>Este bloco permite que os professores executem, em simultâneo, ações em vários recursos ou atividades, em vez de ter que executar ações repetidas em itens individuais.</p>
<p>Para usar este bloco, o Javascript deve estar ativo no seu navegador e deve estar no modo de edição da página inicial da disciplina. Os formatos de disciplinas suportados são: Semana, Tópicos, Mosaicos e Tópicos Contraídos.</p>
<p>As ações suportadas incluem apagar, avançar/recuar, ocultar/mostrar e mover.
Para selecionar itens para executar ações, basta clicar na caixa de seleção à esquerda do mesmo na página principal da disciplina, ou pode selecionar todos os itens numa secção usando o bloco. Para executar as ações, clique na ação que pretende executar dentro do bloco. </p>';
$string['withselected'] = 'Com a seleção';
