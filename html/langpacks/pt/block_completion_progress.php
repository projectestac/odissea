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
 * Strings for component 'block_completion_progress', language 'pt', version '4.4'.
 *
 * @package     block_completion_progress
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completed_colour'] = '#73A839';
$string['completed_colour_descr'] = 'Código HTML da cor para elementos que já estão concluídos';
$string['completed_colour_title'] = 'Cor dos elementos concluídos';
$string['completion_not_enabled'] = 'A verificação da conclusão não está ativa neste site.';
$string['completion_not_enabled_course'] = 'A verificação da conclusão não está ativa nesta disciplina.';
$string['completion_progress:addinstance'] = 'Adicionar um novo bloco Barra de Progresso';
$string['completion_progress:myaddinstance'] = 'Adicionar um bloco Barra de Progresso ao Painel do utilizador';
$string['completion_progress:overview'] = 'Ver resumo da disciplina na Barra de Progresso para todos os alunos';
$string['completion_progress:showbar'] = 'Mostrar a barra no bloco Barra de Progresso';
$string['config_activitiesincluded'] = 'Atividades incluídas';
$string['config_activitycompletion'] = 'Todas as atividades com verificação da conclusão';
$string['config_default_title'] = 'Barra de Progresso';
$string['config_group'] = 'Visível apenas para o grupo ou agrupamento';
$string['config_header_monitored'] = 'Monitorizado';
$string['config_icons'] = 'Utilizar ícones na barra';
$string['config_longbars'] = 'Como mostrar as barras longas';
$string['config_orderby'] = 'Ordenação dos itens da barra';
$string['config_orderby_course_order'] = 'Ordem na disciplina';
$string['config_orderby_due_time'] = '{$a}';
$string['config_percentage'] = 'Mostrar percentagem aos alunos';
$string['config_scroll'] = 'Com barra de deslocamento';
$string['config_selectactivities'] = 'Selecione as atividades';
$string['config_selectedactivities'] = 'Atividades selecionadas';
$string['config_squeeze'] = 'Comprimida';
$string['config_title'] = 'Título alternativo';
$string['config_wrap'] = 'Em várias linhas';
$string['coursenametoshow'] = 'Nome da disciplina a mostrar no Painel do utilizador';
$string['defaultlongbars'] = 'Apresentação predefinida das barras longas';
$string['forceiconsinbar'] = 'Forçar ícones na barra de progresso';
$string['fullname'] = 'Nome completo da disciplina';
$string['futureNotCompleted_colour'] = '#025187';
$string['futureNotCompleted_colour_descr'] = 'Código HTML da cor para futuros elementos que ainda não estão concluídos';
$string['futureNotCompleted_colour_title'] = 'Cor dos elementos futuros não-concluídos';
$string['how_activitiesincluded_works'] = 'Como funcionam as atividades incluídas';
$string['how_activitiesincluded_works_help'] = '<p>Por predefinição, todas as atividades com verificação da conclusão são incluídas na barra de progresso.</p><p> Também pode selecionar manualmente as atividades a serem incluídas.</p>';
$string['how_group_works'] = 'Como funcionam os grupos visíveis';
$string['how_group_works_help'] = '<p>Se selecionar um grupo ou agrupamento, a exibição do bloco apenas será visível para o grupo ou agrupamento selecionado.</p>';
$string['how_longbars_works'] = 'Como são apresentadas as barras longas';
$string['how_longbars_works_help'] = '<p>Quando a barra excede um determinado tamanho, pode ser apresentada de uma das seguintes maneiras:</p><ul><li>Comprimida numa só barra horizontal</li>
<li>Com barra de deslocamento para poder ver os segmentos da barra que excedem o tamanho definido</li>
<li>Em várias linhas para mostrar todos os segmentos da barra repartidos por várias linhas</li>
</ul><p>Tenha em atenção que quando a barra está em várias linhas, o indicador AGORA não é exibido.</p>';
$string['how_ordering_works'] = 'Como funciona a ordenação';
$string['how_ordering_works_help'] = '<p>Existem duas maneiras de ordenar as atividades na Barra de Progresso:</p><ul><li><em>Pela data prevista de conclusão </em>(predefinido)<br/>São utilizadas as datas previstas de conclusão das atividades/recursos para ordenar os elementos na barra. Quando as atividades/recursos não têm uma data prevista de conclusão, é utilizada a ordem tal como na disciplina. Se for utilizada esta opção, o indicador AGORA é exibido.</li>
 <li><em>Ordem na disciplina</em><br/>As atividades/recursos são apresentadas na mesma ordem em que estão na página da disciplina. Quando esta opção é escolhida, as datas previstas de conclusão são ignoradas. Se for utilizada esta opção, o indicador AGORA não é exibido.</li></ul>';
$string['how_selectactivities_works'] = 'Como funcionam as atividades incluídas';
$string['how_selectactivities_works_help'] = '<p>Para selecionar manualmente as atividades que pretende incluir na barra, garanta que a opção "Atividades incluídas" está definida para "Atividades selecionadas".</p><p>Apenas podem ser incluídas as atividades com verificação da conclusão definida.</p><p>Mantenha pressionada a tecla CTRL para selecionar várias atividades.</p>';
$string['indeterminate'] = '?';
$string['lastonline'] = 'Último acesso';
$string['mouse_over_prompt'] = 'Passe o rato sobre a barra ou clique para mais informações.';
$string['no_activities_config_message'] = 'Não existem atividades ou recursos com verificação da conclusão definida ou não foram selecionadas atividades e/ou recursos. Defina a verificação da conclusão das atividades e recursos, e em seguida, configure este bloco.';
$string['no_activities_message'] = 'Não existem atividades ou recursos a serem monitorizados. Altere as configurações para ativar a monitorização.';
$string['no_blocks'] = 'Não está configurado nenhum bloco de Barra de Progresso nas suas disciplinas.';
$string['no_courses'] = 'Não está inscrito em nenhuma disciplina. Apenas serão exibidas as barras de disciplinas em que está inscrito.';
$string['no_visible_activities_message'] = 'Todas as atividades monitorizadas estão ocultas.';
$string['notCompleted_colour'] = '#C71C22';
$string['notCompleted_colour_descr'] = 'Código HTML da cor dos atuais elementos que ainda não estão concluídos';
$string['notCompleted_colour_title'] = 'Cor dos elementos não-concluídos';
$string['not_all_expected_set'] = 'Nem todas as atividades com verificação da conclusão têm definida a "{$a}".';
$string['now_indicator'] = 'AGORA';
$string['overview'] = 'Visão global dos alunos';
$string['pluginname'] = 'Barra de Progresso';
$string['privacy:metadata'] = 'O bloco Barra de Progresso mostra apenas dados de conclusão existentes.';
$string['progress'] = 'Progresso';
$string['progressbar'] = 'Barra de Progresso';
$string['selectitem'] = 'Selecionar \'{$a}\'';
$string['shortname'] = 'Nome curto da disciplina';
$string['showallinfo'] = 'Mostrar todas as informações';
$string['showinactive'] = 'Mostrar alunos inativos na Visão global';
$string['showlastincourse'] = 'Mostrar o último acesso do aluno à disciplina na Visão global';
$string['submitted'] = 'Submetido';
$string['submittednotcomplete_colour'] = '#FFCC00';
$string['submittednotcomplete_colour_descr'] = 'Código HTML da cor dos elementos que já foram submetidos mas que ainda não estão concluídos';
$string['submittednotcomplete_colour_title'] = 'Cor dos elementos submetidos mas não concluídos';
$string['time_expected'] = 'Data prevista de conclusão';
$string['why_set_the_title'] = 'Porquê definir um título para a instância do bloco?';
$string['why_set_the_title_help'] = '<p>Podem haver várias instâncias do bloco Barra de Progresso. Pode usar diferentes blocos para monitorizar diferentes conjuntos de atividades ou recursos. Por exemplo, pode acompanhar o progresso dos trabalhos num bloco e dos testes noutro. Por este motivo pode substituir o título predefinido do bloco e definir um título mais apropriado para cada caso.</p>';
$string['why_show_precentage'] = 'Porquê mostrar uma percentagem de progresso aos alunos?';
$string['why_show_precentage_help'] = '<p>É possível mostrar a percentagem global do progresso aos alunos.</p><p>A percentagem é calculada dividindo o número de elementos completos pelo número total de elementos na barra.</p>
<p>A percentagem do progresso aparece quando os alunos passam o rato por cima de um elemento na barra.</p>';
$string['why_use_icons'] = 'Porquê usar ícones?';
$string['why_use_icons_help'] = '<p>Pode querer adicionar os ícones de concluído (✓) ou por concluir (×) na Barra de Progresso de modo a tornar este bloco visualmente mais acessível aos alunos com daltonismo.</p>
<p>Também pode tornar o objetivo do bloco mais claro se achar que as cores não são intuitivas, seja por razões pessoais ou culturais.</p>';
$string['wrapafter'] = 'Quando em várias linhas, limitar o número de linhas a';
