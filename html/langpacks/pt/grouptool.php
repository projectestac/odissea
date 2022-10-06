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
 * Strings for component 'grouptool', language 'pt', version '3.11'.
 *
 * @package     grouptool
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activated_group'] = 'Grupo ativado';
$string['activated_groups'] = 'Grupos ativados!';
$string['active'] = 'Ativo';
$string['activegroups'] = 'Grupos ativos';
$string['add_member'] = 'Adicionar <strong>{$a->username}</strong> ao grupo <strong>{$a->groupname}</strong>';
$string['added_member'] = '<strong>{$a->username}</strong> foi dicionado  ao grupo <strong>{$a->groupname}</strong>';
$string['administration'] = 'Administração';
$string['administration_alt'] = 'Criação do grupo/agrupamento e configurações dos grupos ativos desta instância';
$string['agroups'] = 'Grupos ativos';
$string['ajax_edit_size_help'] = '[Enter] para guardar o novo tamanho, [ESC] para cancelar, vazio para apagar o tamanho';
$string['all_groups_full'] = '<strong>{$a}</strong> não pôde ser registado em nenhum grupo porque todos os grupos estão cheios!';
$string['allow_multiple'] = 'Registo múltiplos';
$string['allow_multiple_help'] = 'Permitir aos alunos o registo em mais do que um grupo ao mesmo tempo. Tem que especificar o número mínimo de grupos que têm que escolher (= mínimo de grupos para escolher) e o número máximo de grupos que podem escolher (= máximo de grupos para escolher).';
$string['allow_reg'] = 'Permitir o auto-registo';
$string['allow_reg_help'] = 'Permitir aos alunos o auto-registo nos grupos ativos, que são escolhidos abaixo.';
$string['allow_unreg'] = 'Permitir cancelamento do registo';
$string['allow_unreg_help'] = 'Permitir aos alunos o cancelamento do registo ou que possam mudar para outros grupos antes (opcional) da data limite.';
$string['allowed'] = 'Permitido';
$string['already_marked'] = 'Este grupo já estava marcado para registo!';
$string['already_member'] = '<strong>{$a->username}</strong> já é membro do grupo <strong>{$a->groupname}</strong>';
$string['already_occupied'] = 'A vaga no grupo <strong>{$a->grpname}</strong> já está ocupada porque outro utilizador concluiu o registo mais rapidamente. Por favor, procure outro grupo!';
$string['already_queued'] = '<strong>{$a->username}</strong> já está em fila de espera no grupo <strong>{$a->groupname}</strong>!';
$string['already_registered'] = '<strong>{$a->username}</strong> já está está registado no grupo <strong>{$a->groupname}</strong>!';
$string['alwaysshowdescription'] = 'Mostrar sempre a descrição';
$string['alwaysshowdescription_help'] = 'Se desativar esta opção, a descrição acima apenas ficará visível para os alunos durante o período de registo.';
$string['asterisk_marks_moodle_registrations'] = 'Os utilizadores marcados com asterisco (*) já estão registados nos respetivos grupos do Moodle';
$string['availabledate'] = 'Data de início dos registos';
$string['availabledate_help'] = 'Início do período de registo. Se ativo, após esta data os alunos podem registar-se nos grupos selecionados.';
$string['availabledateno'] = 'Sempre disponível';
$string['cant_enrol'] = 'Não é possível inscrever automaticamente o utilizador na disciplina.';
$string['cfg_addinstanceset_head'] = 'Configurações adicionais da instância';
$string['cfg_addinstanceset_head_info'] = 'Configurações adicionais para a Ferramenta de Grupos.';
$string['cfg_admin_head'] = 'Configurações predefinidas na vista de administração';
$string['cfg_admin_head_info'] = 'Configurações predefinidas no separador de administração na visualização da Ferramenta de Grupos.';
$string['cfg_allow_multiple'] = 'Registos múltiplos';
$string['cfg_allow_multiple_desc'] = 'Se ativar esta opção, irá permitir, por predefinição, que os alunos sejam registados em mais do que um grupo ao mesmo tempo.';
$string['cfg_allow_reg'] = 'Permitir o auto-registo';
$string['cfg_allow_reg_desc'] = 'Por predefinição, permitir que os alunos registem-se a si próprios';
$string['cfg_allow_unreg'] = 'Permitir cancelamento do registo';
$string['cfg_allow_unreg_desc'] = 'Os utilizadores podem cancelar o registo e mudar de grupo?';
$string['cfg_choose_max'] = 'Máximo de grupos';
$string['cfg_choose_max_desc'] = 'Por predefinição, em quantos grupos os utilizadores podem registar-se ao mesmo tempo?';
$string['cfg_choose_min'] = 'Mínimo de grupos';
$string['cfg_choose_min_desc'] = 'Por predefinição, qual o número mínimo de grupos em que os utilizadores devem registar-se?';
$string['cfg_force_dereg'] = 'Forçar o cancelamento do registo';
$string['cfg_force_dereg_desc'] = 'Forçar o cancelamento do registo não apenas da Ferramenta de Grupos mas também dos grupos Moodle.';
$string['cfg_force_importreg'] = 'Forçar o registo na Ferramenta de Grupos';
$string['cfg_force_importreg_desc'] = 'Forçar via Ferramenta de Grupos que para os utilizadores importados em grupos Moodle seja também forçado o registo naquela instância da Ferramenta de Grupos.';
$string['cfg_groups_queues_limit'] = 'Lugares da fila por grupo';
$string['cfg_groups_queues_limit_desc'] = 'Determina o número predefinido de diferentes alunos que podem ser colocados em fila de espera num grupo ao mesmo tempo.';
$string['cfg_grpsize'] = 'Tamanho predefinido global do grupo';
$string['cfg_grpsize_desc'] = 'Tamanho de grupo predefinido usado em todas as Ferramentas de Grupos';
$string['cfg_ifgroupdeleted'] = 'Se os grupos forem apagados';
$string['cfg_ifgroupdeleted_desc'] = 'Os grupos apagados devem ser recriados para a instância da Ferramenta de Grupos ou devem ser apagadas todas as referências (incluindo dados de grupo, registos e filas)? ATENÇÃO: Se selecionar "Recriar grupo", os grupos serão recriados automaticamente após a eliminação em "Administração da disciplina / Utilizadores / Grupos"';
$string['cfg_ifmemberadded'] = 'Se os membros do grupo são adicionados';
$string['cfg_ifmemberadded_desc'] = 'Os novos membros do grupo adicionados através do Moodle também devem ser registados na Ferramenta de Grupos ou devem ser ignorados?';
$string['cfg_ifmemberremoved'] = 'Se os membros do grupo forem apagados';
$string['cfg_ifmemberremoved_desc'] = 'Os registos na Ferramentas de Grupos devem ser excluídos se os utilizadores forem excluídos do grupo Moodle correspondente?';
$string['cfg_immediate_reg'] = 'Registo imediato';
$string['cfg_immediate_reg_desc'] = 'Deve cada registo ser passado para os grupos Moodle?';
$string['cfg_importfields'] = 'Comparar campos para importação/cancelar registo';
$string['cfg_importfields_desc'] = 'Define que campos da tabela de utilizadores devem ser comparados aos dados quando importar/cancelar registo dos utilizadores. Os campos são pesquisados um a um até encontrar uma correspondência única (exata). Valores possíveis/úteis são, por exemplo: nome de utilizador, número de identificação e e-mail. ATENÇÃO: não existe nenhuma verificação para nomes de campo corretos. Caracteres permitidos: a-z, A-Z e \',\'';
$string['cfg_instance_head'] = 'Configurações predefinidas da instância';
$string['cfg_instance_head_info'] = 'Configurações predefinidas para novas instâncias da Ferramenta de Grupos.';
$string['cfg_max_queues'] = 'Número máximo de colocações em filas';
$string['cfg_max_queues_desc'] = 'Determina, por predefinição, em quantos grupos diferentes um utilizador pode ser colocado em fila de espera ao mesmo tempo.';
$string['cfg_moodlesync_head'] = 'Comportamento na sincronização';
$string['cfg_moodlesync_head_info'] = 'Como devem comportar-se os grupos criados através da ferramenta caso os membros do grupo Moodle sejam adicionados/apagados ou quando grupos únicos são apagados';
$string['cfg_name_scheme'] = 'Esquema predefinido do nome';
$string['cfg_name_scheme_desc'] = 'Esquema predefinido para o nome dos grupos a usar na criação dos grupos';
$string['cfg_show_members'] = 'Mostrar os membros do grupo';
$string['cfg_show_members_desc'] = 'Determina se os membros do grupo devem estar visíveis por predefinição';
$string['cfg_use_individual'] = 'Usar tamanho individual';
$string['cfg_use_individual_desc'] = 'Se ativar esta opção, por predefinição, para cada grupo será usado o tamanho individual de grupo.';
$string['cfg_use_queue'] = 'Usar filas de espera';
$string['cfg_use_queue_desc'] = 'Se ativar esta opção, por predefinição, serão usadas as filas de espera no registo em grupos já preenchidos.';
$string['cfg_use_size'] = 'Usar o tamanho do grupo';
$string['cfg_use_size_desc'] = 'Se tamanho do grupo deve ser limitado por predefinição';
$string['cfg_users_queues_limit'] = 'Lugares de fila por utilizador';
$string['cfg_users_queues_limit_desc'] = 'Determina o número predefinido de diferentes grupos em que um utilizador pode ser colocado em fila de espera ao mesmo tempo.';
$string['change_group'] = 'Mudar de grupo';
$string['change_group_to'] = 'Continuar com a mudança para o grupo <strong>{$a->groupname}</strong>?';
$string['change_group_to_success'] = 'Mudança de grupo bem sucedida! <strong>{$a->username}</strong> ficou agora registado no grupo <strong>{$a->groupname}</strong>!';
$string['changes_saved'] = 'Alterações guardadas com sucesso';
$string['checkbox_control_header'] = 'Seleção de grupos e agrupamentos';
$string['checkbox_control_header_help'] = '<p>Ao usar esta função, pode ativar/desativar grupos de um ou mais agrupamentos nesta Ferramenta de Grupos:
<ol>
<li>Escolha no campo de seleção múltipla "Todos" (todos os grupos disponíveis serão ativados/desativados), um ou vários agrupamentos (mude para selecionar vários usando o ícone ao lado e depois faça Ctrl + clique).</li>
<li>Use uma das seguintes opções "Selecione/Desselecione/Inverter":
<ul>
<li><b>Selecione:</b> Os grupos do(s) agrupamento(s) escolhido(s) serão ativados.</li>
<li><b>Desselecione:</b> Os grupos do(s) agrupamento(s) escolhido(s) serão desativados.</li>
<li><b>Inverter:</b> Todos os grupos dos agrupamentos não selecionados serão ativados.</li>
</ul>
</li>
<li>Faça a sua escolha e clique no botão "Executar".</li>
</ol>
</p>';
$string['choose'] = 'Escolha...';
$string['choose_group'] = 'Deve escolher um grupo-destino!';
$string['choose_max'] = 'Máximo de grupos a escolher';
$string['choose_max_text'] = 'Tem permissão para escolher <strong>{$a}</strong> grupo(s) no máximo!';
$string['choose_min'] = 'Mínimo de grupos a escolher';
$string['choose_min_max_text'] = 'Tem que escolher entre o mínimo de <strong>{$a->min}</strong> até ao máximo de <strong>{$a->max}</strong> grupos!';
$string['choose_min_text'] = 'Tem que escolher pelo menos <strong>{$a}</strong> grupo(s)!';
$string['choose_minmax_title'] = 'Grupos a escolher';
$string['choose_targetgroup_import'] = 'Importar para os grupos';
$string['choose_targetgroup_unregister'] = 'Cancelar registo dos grupos';
$string['chooseactivity'] = 'Tem que escolher uma atividade para que os dados possam ser mostrados!';
$string['completiondetail:register'] = 'Registar em {$a} grupos';
$string['completionregister'] = 'O aluno tem de estar inscrito em grupos:&nbsp;';
$string['condition_prevent_access'] = 'As condições atuais impedem que aceda a esta instância de Ferramenta de Grupos!';
$string['confirm_delete'] = 'Está prestes a apagar completamente o grupo. Isto removerá de modo irrecuperável todos os membros deste grupo. Tem a certeza que pretende continuar?';
$string['confirm_delete_title'] = 'Pretende realmente apagar este elemento?';
$string['copied_grade_feedback'] = 'Classificação do grupo<br />
+ Submissão por: <strong>{$a->student}</strong><br />
+ Classificação por: <strong>{$a->teacher}</strong><br />
+ Data/hora original: <strong>{$a->date}</strong><br />
+ Feedback: <strong>{$a->feedback}</strong>';
$string['copy'] = 'Copiar';
$string['copy_chosen'] = 'Copiar a escolhida';
$string['copy_grade_confirm'] = 'Continuar a copiar esta nota?';
$string['copy_grade_overwrite_confirm'] = 'Continuar a copiar esta nota? A nota já existente será substituída!';
$string['copy_grades_confirm'] = 'Continuar a copiar estas notas?';
$string['copy_grades_errors'] = 'Ocorreu pelo menos 1 erro durante a cópia das notas:';
$string['copy_grades_overwrite_confirm'] = 'Continuar a copiar estas notas? As notas já existentes serão substituídas!';
$string['copy_grades_success'] = 'As seguintes notas foram atualizadas com sucesso:';
$string['copy_refgrades_feedback'] = 'Para os grupos selecionados, copiar para os outros membros do grupo as notas de referência e o feedback';
$string['copygrade'] = 'Copiar a nota';
$string['could_not_add'] = 'Não foi possível adicionar <strong>{$a->username}</strong> ao grupo <strong>{$a->groupname}</strong>';
$string['couldnt_move_down'] = 'Não é possível mover o grupo para baixo!';
$string['couldnt_move_up'] = 'Não é possível mover o grupo para cima!';
$string['createGroups'] = 'Criar grupos';
$string['create_1_person_groups'] = 'Criar grupos de 1 pessoa';
$string['create_1_person_groups_help'] = 'Criar grupos de 1 pessoa - é criado um grupo para cada utilizador escolhido. Além dos símbolos # e @ pode usar os seguintes marcadores que serão substituídos pelos dados dos utilizadores:
<ul>
<li>[username] - o nome de utilizador</li>
<li>[firstname] - o nome próprio do utilizador</li>
<li>[lastname] - o apelido do utilizador</li>
<li>[idnumber] - o número de identificação (ID) do utilizador</li>
</ul>
Se algum faltar algum dado, o marcador será substituído por nomedomarcadorXX, onde XX representa o número do grupo.';
$string['create_assign_groupings'] = 'Criar/Atribuir agrupamentos';
$string['create_fromto_groups'] = 'Criar grupos com números de um intervalo (exemplo, de 34 a 89),&nbsp;<strong>sem atribuição automática</strong>&nbsp;dos membros do grupo';
$string['create_fromto_groups_help'] = 'Criar grupos com números de um intervalo (por exemplo, de 34 a 89) - use este modo para criar grupos em falta (ou seja, Grupo 4, Grupo 5, Grupo 6). Indique os limites e o número de dígitos que pretende usar, pelo menos para os nomes (exemplo, 1, 01, 001, 0001 ...). É possível definir um determinado tamanho do grupo com "M membros por grupo". Não haverá <strong>atribuição automática</strong> dos membros do grupo.';
$string['create_groupings_confirm'] = 'Pretende criar agrupamentos tal como apresentado acima?';
$string['create_groupings_confirm_problem'] = 'Ocorreu pelo menos 1 erro (consulte a visualização acima)!';
$string['create_groups_confirm'] = 'Pretende criar grupos tal como apresentado acima?';
$string['create_groups_confirm_problem'] = 'Ao tentar criar os novos grupos com base no esquema de nome pretendido foram detetados conflitos - ver pré-visualização - os grupos Moodle devem ter nomes exclusivos. O conflito pode ser devido ao facto de já existirem grupos com o mesmo nome ou a um erro de sintaxe no esquema de nomenclatura (exemplo: campo em branco, símbolo # em falta).';
$string['create_n_m_groups'] = 'Criar N grupos para M membros, <strong>sem atribuição automática</strong> dos membros do grupo';
$string['create_n_m_groups_help'] = 'Criar N grupos para M membros - use este modo para criar um número específico de grupos (N grupos) com um tamanho de grupo específico (M membros). Por exemplo, sete grupos com espaço para três membros cada um. Não haverá <strong>atribuição automática</strong> dos membros do grupo.';
$string['createinsertgrouping'] = 'Adicionar ao agrupamento';
$string['deactivated_group'] = 'Grupo desativado';
$string['deactivated_groups'] = 'Grupos desativados!';
$string['define_amount_groups'] = 'Definir o número de N grupos';
$string['define_amount_groups_help'] = 'Criar N grupos - escolha os utilizadores do papel para a criação dos grupo e indique o número pretendido de grupos no campo \'Número de N grupos\'. No esquema de nomes, pode inserir um esquema de nomes para os grupos usando:
<ul>
<li> # (será substituído pelo número do grupo) e </li>
<li> @ (será substituído por uma letra que representa o número do grupo) </li>
</ul>
Os utilizadores escolhidos serão distribuídos pelo número pretendido de grupos.';
$string['define_amount_members'] = 'Definir o número de M membros por grupo';
$string['define_amount_members_help'] = 'Criar N grupos para M membros - indique quantos membros que cada grupo deve idealmente ter. O número necessário de grupos será calculado automaticamente. Se verificar que o último grupo tem poucos membros, os utilizadores do último grupo serão distribuídos nos outros grupos, caso a taxa de preenchimento dos últimos grupos esteja abaixo de 70%.';
$string['delete_reference'] = 'Apagar da Ferramenta de Grupos';
$string['description'] = 'Descrição';
$string['deselect'] = 'Desselecionar';
$string['determinismerror'] = 'A data de fim de registo não pode ser antes do início do registo ou no passado.';
$string['digits'] = 'Mínimo de dígitos&nbsp;';
$string['disabled'] = 'Desativado';
$string['drag'] = 'Mover';
$string['due'] = 'Data de fim da Ferramenta de Grupos';
$string['duedate'] = 'Data de fim dos registos';
$string['duedate_help'] = 'Fim do período de registo. Após esta data, os alunos não podem registar-se e o professor tem acesso à funcionalidade de resolução das filas, etc.';
$string['duedateno'] = 'Sem data de fim';
$string['early'] = '{$a} mais cedo';
$string['error_activating_group'] = 'Ocorreu um erro ao ativar o grupo <strong>{$a->groupid}</strong> na Ferramenta de Grupos <strong>{$a->grouptoolid}</strong>!';
$string['error_at'] = 'Erro em';
$string['error_deactivating_group'] = 'Ocorreu um erro ao desativar o grupo <strong>{$a->groupid}</strong> na Ferramenta de Grupos <strong>{$a->grouptoolid}</strong>!';
$string['error_getting_data'] = 'Erro ao obter os dados do grupo! Nenhum ou mais de 1 grupo foi encontrado!';
$string['error_saving_new_order'] = 'Erro ao guardar nova ordem para grupos: <strong>{$a}</strong>';
$string['eventagrpcreated'] = 'Grupo ativo criado';
$string['eventagrpdeleted'] = 'Grupo ativo apagado';
$string['eventagrpsupdated'] = 'Grupos ativos atualizados';
$string['eventdequeuingstarted'] = 'Início da resolução das filas';
$string['eventgroupcreationstarted'] = 'Início da criação de grupos';
$string['eventgroupgraded'] = 'Grupo avaliado';
$string['eventgroupingscreated'] = 'Agrupamento criado';
$string['eventgrouprecreated'] = 'Grupo recriado';
$string['eventoverviewexported'] = 'Vista geral exportada';
$string['eventqueueentrycreated'] = 'Criada entrada na fila';
$string['eventqueueentrydeleted'] = 'Apagada entrada na fila';
$string['eventregistrationcreated'] = 'Registo criado';
$string['eventregistrationdeleted'] = 'Registo apagado';
$string['eventregistrationpushstarted'] = 'Forçado o início de registo';
$string['eventuserimported'] = 'Utilizador importado';
$string['eventuserlistexported'] = 'Exportada a lista de utilizadores';
$string['eventusermoved'] = 'Utilizador movido';
$string['exceedgroupqueuelimit'] = 'A exceder o limite da fila do grupo!';
$string['exceedgroupsize'] = 'A exceder o tamanho do grupo!';
$string['exceeduserqueuelimit'] = 'A excedendo o limite de filas para o utilizador!';
$string['exceeduserreglimit'] = 'A exceder o limite de registos do utilizador!';
$string['feedbackplural'] = 'Feedbacks';
$string['filters_legend'] = 'Filtrar os dados';
$string['filterunoccupied'] = 'Mostrar apenas grupos com lugares vazios';
$string['followchanges'] = 'Seguir as alterações';
$string['forceregistration'] = 'Forçar o registo na Ferramenta de Grupos';
$string['forceregistration_help'] = 'Tenha em atenção que os grupos da Ferramenta de Grupos diferem fundamentalmente dos grupos Moodle da disciplina. Marque a caixa de seleção se pretende importar os utilizadores para o grupo da Ferramenta de Grupos assim como para o grupo do Moodle.';
$string['found_multiple'] = 'Não é possível identificar de forma exclusiva, foram encontrados vários utilizadores:';
$string['free'] = 'Livre';
$string['fromgttoerror'] = 'Valor de destino tem que ser maior ou igual ao valor de origem';
$string['fullgroup'] = 'Grupo cheio';
$string['general_information'] = 'Informação geral';
$string['general_registration_exception'] = 'Ocorreu uma exceção geral no registo e não é possível determinar automaticamente a causa!';
$string['global_userstats'] = '<strong>{$a->reg_users}</strong> de <strong>{$a->users}</strong> utilizadores estão registados. <strong>{$a->notreg_users}</strong> por registar.';
$string['grading'] = 'Avaliação';
$string['grading_activity_title'] = 'Atividade';
$string['grading_alt'] = 'Ferramentas para copiar notas de um membro do grupo para todos os outros membros do grupo, seja para um grupo ou para um conjunto de grupos.';
$string['grading_filter_select_title'] = 'Grupo ou grupos';
$string['grading_filter_select_title_help'] = 'Escolha o grupo ou grupos a usar:<ul><li>Sem conflitos - todos os grupos, em que apenas um membro do grupo obteve uma nota para a atividade escolhida</li><li>Todos - todos os grupos</li><li>"Nome do grupo" - apenas o grupo especificamente selecionado</li></ul>';
$string['grading_grouping_select_title'] = 'Filtrar agrupamentos';
$string['group_administration'] = 'Administrar grupos';
$string['group_administration_alt'] = 'Administrar grupos (ativos) e agrupamentos';
$string['group_assign_error'] = 'Não foi possível atribuir grupo!';
$string['group_assign_error_prev'] = 'Não é possível atribuir grupo!';
$string['group_creation'] = 'Criar grupos';
$string['group_creation_alt'] = 'Criar grupos';
$string['group_creation_failed'] = 'Falha na criação de grupos!';
$string['group_creation_success'] = 'Grupos criados com sucesso!';
$string['group_not_found'] = 'O grupo <strong>{$a->groupid}</strong> não foi encontrado na Ferramenta de Grupos <strong>{$a->grouptoolid}</strong>!';
$string['group_not_in_grouping'] = 'O grupo selecionado não faz parte do agrupamento escolhido!';
$string['group_or_member_count'] = 'Número de Grupos/Membros';
$string['group_places'] = 'Lugares no grupo';
$string['group_places_help'] = 'O campo informa, em primeiro lugar, o número total de lugares do grupo, em segundo lugar, o número de lugares livres e, em terceiro lugar, o número de lugares do grupo que já estão ocupados (separados por uma barra invertida).';
$string['groupchange_from_non_unique_reg'] = 'Não é possível mudar de grupo devido ao facto do ex-grupo não ser exclusivo!';
$string['groupcreation'] = 'Criação de grupo';
$string['groupcreationmode'] = 'Modo';
$string['groupfromtodigits'] = 'De ... a ... & dígitos nos nomes dos grupos';
$string['groupinfo'] = 'Informações do grupo';
$string['grouping_assign_error'] = 'Não foi possível atribuir com êxito ao agrupamento:';
$string['grouping_assign_error_prev'] = 'Não pode ser atribuído com êxito ao agrupamento:';
$string['grouping_assign_success'] = 'Foram atribuídos com êxito:';
$string['grouping_assign_success_prev'] = 'Pode ser atribuído com êxito:';
$string['grouping_creation_error'] = 'Não foi possível criar agrupamento!';
$string['grouping_creation_error_prev'] = 'Não é possível criar agrupamento!';
$string['grouping_creation_only_success'] = 'Agrupamento criado com sucesso!';
$string['grouping_creation_only_success_prev'] = 'Agrupamento pode ser criado com sucesso!';
$string['grouping_creation_success'] = 'Agrupamento criado e ao qual foi adicionado o grupo <strong>{$a}</strong>!';
$string['grouping_creation_success_prev'] = 'Pode criar agrupamento e adicionar o grupo <strong>{$a}</strong>!';
$string['grouping_exists_error'] = 'Não foi possível criar o agrupamento porque já existe um agrupamento com este nome!';
$string['grouping_exists_error_prev'] = 'Não é possível criar o agrupamento porque já existe um agrupamento com este nome!';
$string['groupings_created_and_groups_added'] = 'Agrupamento(s) criado(s) e/ou grupo(s) adicionado(s)!';
$string['groupingscreation'] = 'Criar e atribuir agrupamentos';
$string['groupingselect'] = 'Agrupamentos para os grupos selecionados';
$string['groupingselect_help'] = 'Criar agrupamentos para os grupos selecionados:<ul>
<li>Criar UM agrupamento para todos os grupos selecionados. O nome do agrupamento pode ser escolhido livremente</li>
<li>Criar um agrupamento para CADA grupo selecionado. O agrupamento é nomeado após o respetivo grupo</li>
<li>Adicionar os grupos selecionados a um agrupamento existente</li></ul>';
$string['groupoverview'] = 'Visão global do grupo';
$string['groups_created'] = 'Grupos criados com sucesso!';
$string['groups_queues_limit'] = 'Número de lugares da fila por grupo';
$string['groups_queues_limit_help'] = 'Se ativar esta opção, pode definir o número máximo de lugares da fila por grupo';
$string['groupselection'] = 'Seleção de grupo';
$string['groupselection_help'] = 'Selecione os grupos/pessoas para os quais deseja copiar a nota de referência e o feedback escolhidos ativando as caixas de seleção correspondentes. Se apenas um grupo for mostrado, selecione a origem para copiar a nota escolhida usando o botão correspondente à direita da entrada.';
$string['groupsize'] = 'Tamanho do grupo';
$string['groupsize_gets_enabled'] = 'Se continuar, a definição do tamanho do grupo será ativada automaticamente. Para impedir este comportamento, use 0 como <strong>{$a->field}</strong>';
$string['groupsize_individual_gets_enabled'] = 'Se continuar, o tamanho específico de cada grupo será ativado automaticamente. Para impedir este comportamento, use 0 como <strong>{$a->field}</strong> para não usar o tamanho do grupo ou use <strong>{$a->globalsize}</strong> para ativar apenas o tamanho do Grupo global!';
$string['groupstatus'] = 'Estado';
$string['groupstatus_help'] = 'O estado atual de um grupo é visualizado pela cor:<ul><li>Verde - grupo ativo. O grupo está atribuído a esta Ferramenta de Grupos. Se o auto-registo estiver ativo, os alunos podem registsrem-se neste grupo.</li><li>Cinzento - grupo inativo. O grupo não está disponível nesta Ferramenta de Grupos.</li></ul>Ao clicar no símbolo, o estado pode ser alterado.';
$string['grouptool'] = 'Ferramenta de Grupos';
$string['grouptool:addinstance'] = 'Adicionar uma instância de Ferramenta de Grupos à disciplina.';
$string['grouptool:administrate_groups'] = 'Administrar grupos (ativos) e agrupamentos';
$string['grouptool:create_groupings'] = 'Criar agrupamentos com a Ferramenta de Grupos.';
$string['grouptool:create_groups'] = 'Criar grupos com a Ferramenta de Grupos';
$string['grouptool:export'] = 'Exportar grupo e dados de registo para diferentes formatos';
$string['grouptool:grade'] = 'Copiar as notas de um membro do grupo para outros';
$string['grouptool:grade_own_group'] = 'Copiar as notas de um membro do grupo para outras pessoas se a nota original tiver sido dada por mim';
$string['grouptool:move_students'] = 'Mover alunos para outros grupos.';
$string['grouptool:register'] = 'Auto registar-se num grupo ativo usando a Ferramenta de Grupos';
$string['grouptool:register_students'] = 'Registar os alunos num grupo ativo usando a Ferramenta de Grupos (também usado para resolver filas).';
$string['grouptool:unregister_students'] = 'Cancelar o registo de alunos de grupos usando a Ferramenta de Grupos.';
$string['grouptool:view_description'] = 'Ver descrição das Ferramentas de Grupos';
$string['grouptool:view_groups'] = 'Ver grupos ativos';
$string['grouptool:view_own_registration'] = 'Ver registo(s) próprio(s).';
$string['grouptool:view_registrations'] = 'Ver com a Ferramenta de Grupos, quem está registado/em fila em cada grupo ativo';
$string['grouptool:view_regs_course_overview'] = 'Ver, com a Ferramenta de Grupos, a lista de utilizadores que estão registados/em fila em cada grupo ativo.';
$string['grouptool:view_regs_course_view'] = 'Ver, com a Ferramenta de Grupos, a lista de utilizadores que estão registados/em fila em cada grupo ativo.';
$string['grouptool:view_regs_group_overview'] = 'Ver uma lista agrupada de quem está registado/em fila em cada grupo ativo, usando a Ferramenta de Grupos.';
$string['grouptool:view_regs_group_view'] = 'Ver uma lista agrupada de quem está registado/em fila em cada grupo ativo, usando a Ferramenta de Grupos.';
$string['grouptoolfieldset'] = 'Configurações da instância';
$string['grouptoolname'] = 'Nome';
$string['grouptoolname_help'] = 'Nome da instância da Ferramenta de Grupos';
$string['groupuser_import'] = 'Importar utilizadores do grupo';
$string['groupuser_unregister'] = 'Cancelar o registo de utilizadores do grupo';
$string['grp_marked'] = 'Marcado para registo';
$string['grpsizezeroerror'] = 'O tamanho do grupo deve ser maior ou igual a 1. Não são permitidas letras ou outros sinais.';
$string['ifgroupdeleted'] = 'Se os grupos forem apagados';
$string['ifgroupdeleted_help'] = 'Devem os grupos excluídos ser recriados para a instância da Ferramenta de Grupos ou devem ser excluídas as referências na Ferramenta (dados adicionais do grupo, registos e fila)?
Nota: Se selecionar "Recriar grupo", os grupos serão recriados automaticamente após a eliminação em "Administração da disciplina / Utilizadores / Grupos".';
$string['ifmemberadded'] = 'Se forem adicionados membros ao grupo';
$string['ifmemberadded_help'] = 'Devem os novos membros do grupo, adicionados via Moodle, ser também registados na Ferramenta de Grupos ou devem ser ignorados?';
$string['ifmemberremoved'] = 'Se forem removidos membros do grupo';
$string['ifmemberremoved_help'] = 'Devem os registos na Ferramenta de Grupos ser apagados se os utilizadores forem excluídos do Grupo Moodle correspondente?';
$string['ignorechanges'] = 'Ignorar alterações';
$string['ignored_not_found_users'] = 'Pelo menos um utilizador não foi adicionado ao grupo!';
$string['ignored_not_found_users_unregister'] = 'Não foi possível encontrar pelo menos um utilizador!';
$string['ignoring_not_found_users'] = 'Pelo menos um utilizador não foi encontrado na base de dados. Todos estes utilizadores serão ignorados!';
$string['immediate_reg'] = 'Registo imediato';
$string['immediate_reg_help'] = 'Se ativar esta opção, os cancelamentos dos registos serão repercutidos para o sistema Moodle. Se não estiver ativa, os registos serão armazenados em cache na Ferramenta de Grupos e poderão ser enviados pelo professor para o sistema Moodle.';
$string['import'] = 'Importação';
$string['import_conflict_user_queued'] = 'O utilizador <strong>{$a->fullname}</strong> já está em fila de espera do grupo <strong>{$a->groupname}</strong>!';
$string['import_desc'] = 'Importar utilizadores via lista de números de identificação em determinados grupos';
$string['import_in_inactive_group_rejected'] = 'O registo no grupo <strong>{$a}</strong> da Ferramenta de Grupos foi rejeitado devido a inatividade. Ative o grupo nesta Ferramenta de Grupos para ativar o registo.';
$string['import_in_inactive_group_warning'] = 'Nota: O grupo <strong>{$a}</strong> está atualmente inativo no contexto da Ferramenta de Grupos e, portanto, não será exibido.';
$string['import_progress_completed'] = 'Importação concluída';
$string['import_progress_import'] = 'Importar utilizador';
$string['import_progress_preview_completed'] = 'Pré-visualização de importação concluída';
$string['import_progress_search'] = 'Pesquisar utilizador';
$string['import_progress_start'] = 'Iniciar a importação';
$string['import_skipped'] = 'O utilizador <strong>{$a->fullname}</strong> foi ignorado para o grupo <strong>{$a->groupname}</strong>!';
$string['import_user'] = 'A importação de <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) para o grupo <strong>{$a->groupname}</strong> foi bem-sucedida.';
$string['import_user_prev'] = 'Importar <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) para o grupo <strong>{$a->groupname}</strong>.';
$string['import_user_problem'] = 'Ocorreu um erro durante a importação de <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong> - <strong>{$a->id}</strong>) para o grupo <strong>{$a->groupname}</strong>.';
$string['importbutton'] = 'Importar utilizadores';
$string['inactive'] = 'Inativo';
$string['inactivegroups'] = 'Grupos inativos';
$string['inactivegroups_hide'] = 'Ocultar grupos inativos';
$string['inactivegroups_show'] = 'Mostrar grupos inativos';
$string['includedeleted'] = 'Incluir utilizadores apagados';
$string['includedeleted_help'] = 'Se ativar esta opção, os utilizadores apagados não serão excluidos da lista. As contas de utilizadores apagados não podem ser inscritas na disciplina durante o processo de importação.';
$string['includeonlyactiveenrol'] = 'Incluir apenas inscrições ativas';
$string['includeonlyactiveenrol_help'] = 'Se ativar esta opção, os utilizadores suspensos não serão incluídos nos grupos.';
$string['incomplete_only_label'] = 'Mostrar apenas grupos com notas em falta';
$string['incorrect_tab'] = 'Separador incorreto, este separador não está disponível!';
$string['individual_size_info'] = '* Configurações do tamanho do grupo da Ferramenta de Grupos';
$string['intro'] = 'Descrição';
$string['invert'] = 'Inverter';
$string['landscape'] = 'Paisagem';
$string['late'] = '{$a} atrasado';
$string['limit'] = 'limite';
$string['loading'] = 'a carregar...';
$string['max_queues_reached'] = 'Atingido o máximo da fila!';
$string['max_regs_reached'] = 'Atingido o máximo de registos!';
$string['maxmembers'] = 'Tamanho do Grupo global';
$string['messageprovider:grouptool_moveupreg'] = 'Efetuar registo ao subir na fila de espera';
$string['missing_source_selection'] = 'Nenhuma origem selecionada!';
$string['modulename'] = 'Ferramenta de Grupos';
$string['modulename_help'] = 'O módulo Ferramenta de Grupos é indicado para diferentes tipos de tarefas relacionadas com grupos:<ul><li>Permite criar grupos em diferentes modos (número de grupos/membros, grupos de uma só pessoa, intervalo de grupos), bem como agrupamentos para cada grupo.</li><li>Pode ser usado para dar aos alunos a possibilidade de se registarem em determinados grupos durante um período de tempo definido.</li><li>O módulo também tem a capacidade de classificar grupos - copiando as notas de uma atividade de 1 membro do grupo para outros membros do grupo.</li><li>Importar utilizadores para grupos através de lista com números de identificação.</li><li>Vista geral dos grupos da disciplina, incluindo todos os registos, membros, filas, etc. É possível exportar estes dados para diferentes formatos de ficheiro (PDF/XLSX/ODS/TXT).</li><li>Lista exportável de todos os utilizadores da disciplina, incluindo os seus registos, filas, etc.</li></ul><p>Tenha em atenção que os grupos da Ferramenta de grupos diferem fundamentalmente dos grupos Moodle da disciplina. Para garantir a consistência entre os tipos de grupo, defina os parâmetros da secção "Comportamento nas alterações do Moodle" para  "Seguir as alterações".</p>';
$string['modulenameplural'] = 'Ferramentas de gGrupos';
$string['moodlesync'] = 'Comportamento nas alterações do Moodle';
$string['moodlesync_help'] = 'Comportamento das Ferramentas de Grupos se os membros do grupo Moodle forem adicionados/apagados ou os grupos únicos forem apagados';
$string['moreregsthanpossible'] = 'Os número de registos necessários para conclusão não podem ser superiores ao máximo de registos permitidos';
$string['move_user'] = 'Mover da fila para o grupo';
$string['movedown'] = 'Mover para baixo';
$string['moveup'] = 'Mover para cima';
$string['multiple'] = 'Gerir utilizadores de grupos';
$string['multiple_desc'] = 'Registos/cancelamentos de registos em massa';
$string['must_specify_groupingname'] = 'Tem que indicar um nome para o agrupamento!';
$string['mustbegt0'] = 'O número mínimo de grupos a serem escolhidos deve ser maior ou igual a 0. Não são permitidas letras ou outros sinais.';
$string['mustbegtoeqmin'] = 'Tem que ser maior ou igual ao mínimo';
$string['mustbeposint'] = 'O número máximo de grupos a serem escolhidos deve ser maior ou igual a 1. Não são permitidas letras ou outros sinais.';
$string['mygroups_only_label'] = 'Mostrar apenas entradas de origens que eu avaliei';
$string['myoverview_registrations_missing'] = 'Registos em falta';
$string['name_scheme_tags'] = '<span class="tag firstname">[firstname]</span>
<span class="tag lastname">[lastname]</span>
<span class="tag idnumber">[idnumber]</span>
<span class="tag username">[username]</span>
<span class="tag alpha">@</span>
<span class="tag number">#</span>';
$string['nameschemenotunique'] = 'O nomes dos grupos deste esquema de nomes não são exclusivos  (<strong>{$a}</strong>). Por favor, escolha outro ou use # (índice numérico) ou @ (índice alfabético) para criar nomes de grupos exclusivos.';
$string['namingscheme'] = 'Esquema de nomes';
$string['namingscheme_help'] = '<p>O esquema de nomes define como os grupos serão automaticamente nomeados  quando adicionar novos grupos.</p>
<p>Por favor, tem em atenção que:<br />
<ol><li>O nome de um grupo tem de ser único dentro da disciplina.</li>
<li>Se pretender criar mais do que um grupo de uma só vez, deve usar palavras-chave para criar nomes exclusivos. </li></ol></p>
<p>Cada uma destas palavras-chave será substituída nos nomes finais do grupo. As palavras-chave nos [ ] estão relacionadas com os dados dos utilizadores e os símbolos # e @ serão substituídos pelo número de série dos grupos. Se o JavaScript estiver ativo, basta clicar nas palavras-chave para anexá-las ao esquema de nomes. Tenha em atenção que os nomes dos grupos têm de ser únicos em cada disciplina e, portanto, pode ter que alterar o esquema de nomes até que esteja livre de conflitos.</p>';
$string['no_conflictfree_to_display'] = 'Não existem grupos sem conflitos para mostrar. Em vez disso, tentámos mostrar todos!';
$string['no_data_to_display'] = 'Não existem dados do(s) grupo(s) para mostrar!';
$string['no_grades_present'] = 'Sem notas para mostrar';
$string['no_groupmembers_to_display'] = 'Nenhum membro do grupo para mostrar. Em vez disso, tentámos mostrar todos os grupos!';
$string['no_groups_to_display'] = 'Não existem grupos para mostrar!';
$string['no_queues_to_resolve'] = 'Não existem filas para resolver!';
$string['no_registrations'] = 'Sem registos';
$string['no_target_selected'] = 'Não há destino para a operação de cópia selecionada. Deve selecionar pelo menos 1 destino!';
$string['no_users_to_display'] = 'Nenhum utilizador para mostrar!';
$string['noaccess'] = 'Não tem acesso a este módulo (sem permissão ou talvez não pertença ao grupo correto)!';
$string['nobody_queued'] = 'Fila vazia';
$string['nodeletion'] = 'Não é possível apagar este grupo porque pelo menos uma instância de Ferramenta de Grupos nesta disciplina está definida para recriar o grupo ao eliminar!';
$string['nogroupingselected'] = 'Nenhum agrupamento foi selecionado!';
$string['nogroups'] = 'Não existem grupos nesta disciplina.';
$string['nogroupsactive'] = 'Nenhum grupo ativo nesta Ferramenta de Grupos.';
$string['nogroupschoose'] = 'Escolher grupos';
$string['nogroupscreate'] = 'Criar grupos';
$string['nogroupsinactive'] = 'Nenhum grupo inativo nesta Ferramenta de Grupos.';
$string['nogrouptools'] = 'Não existem Ferramentas de Grupos!';
$string['nonconflicting'] = 'Sem conflitos';
$string['noregistrationdue'] = 'Ilimitado';
$string['nosmallgroups'] = 'Evitar grupos pequenos';
$string['nosmallgroups_help'] = 'Se ativar esta opção, garante que cada grupo é preenchido por pelo menos 70% da lotação! Se um (ou mais precisamente o último) grupo estiver preenchido com menos de 70%, os utilizadores deste grupo serão distribuídos pelos outros grupos, fazendo com que estes tenham mais membros do que o especificado!';
$string['not_allowed_to_show_members'] = 'Não tem permissão para visualizar esta informação!';
$string['not_graded_by_me'] = 'Avaliado por outro utilizador';
$string['not_in_queue_or_registered'] = '<strong>{$a->username}</strong> não está registado nem está em fila de espera do grupo <strong>{$a->groupname}</strong>';
$string['not_permitted'] = 'Não permitido';
$string['not_registered'] = 'Ainda não está registado!';
$string['not_synced_reg_present'] = 'não existem registos sincronizados';
$string['notenoughregs'] = 'O utilizador precisa de mais registos!';
$string['nothing_to_push'] = 'Nada para forçar!';
$string['notification:group_recreated'] = 'O grupo <a href="{$a->groupurl}" mosaico="{$a->groupname}">{$a->groupname}</a> foi recriado devido ao facto da ferramenta de grupos <a href="{$a->grouptoolurl}" mosaico="{$a->grouptoolname}">$a->grouptoolname}</a> estar definida para recriar grupos apagados.';
$string['notification:registrations_recreated'] = 'Os membros do grupo <a href="{$a->groupurl}" mosaico="{$a->groupname}">{$a->groupname}</a> foram adicionados novamente devido ao facto da ferramenta de grupos <a href="{$a->grouptoolurl}" mosaico="{$a->grouptoolname}">$a->grouptoolname}</a> estar definida para recriar grupos apagados. O próprio grupo foi recriado por outra instância da ferramenta de grupos.';
$string['nowhere_queued'] = 'Não colocado em fila';
$string['number_of_groups'] = 'Número de N grupos';
$string['number_of_members'] = 'Número de M membros';
$string['number_of_students'] = 'Número de alunos';
$string['occupied'] = 'Ocupado';
$string['onenewgrouping'] = 'NOVO agrupamento';
$string['onenewgroupingpergroup'] = 'Um agrupamento POR grupo';
$string['orientation'] = 'Orientação do PDF';
$string['outdated'] = 'divergente';
$string['overflowwarning'] = 'Se continuar a importar, o tamanho do grupo na instância <strong>{$a->instancename}</strong> será excedido!';
$string['overview'] = 'Visão global';
$string['overview_alt'] = 'Visão global dos grupos e membros dos grupos';
$string['overview_tab'] = 'Vista de grupo';
$string['overview_tab_alt'] = 'Vista de grupo aberto';
$string['overwrite_label'] = 'Substituir as notas existentes';
$string['place_allocated_in_group_success'] = 'O grupo <strong>{$a->groupname}</strong> foi marcado com sucesso para registo';
$string['pluginadministration'] = 'Administração da Ferramenta de Grupos';
$string['pluginname'] = 'Ferramenta de Grupos';
$string['portrait'] = 'Retrato';
$string['preview'] = 'Pré-visualização';
$string['privacy:metadata:agrpid'] = 'Identificador da representação do grupo Moodle na Ferramenta de Grupos.';
$string['privacy:metadata:enrolexplanation'] = 'A Ferramenta de Grupos insere utilizadores não inscritos na disciplina durante a importação para poder adicioná-los ao(s) grupo(s) para o qual importar.';
$string['privacy:metadata:gradesexplanation'] = 'A Ferramenta de Grupos pode copiar notas de um utilizador para outros membros do mesmo grupo.';
$string['privacy:metadata:groupexplanation'] = 'A Ferramenta de Grupos está a gerir os membros dos grupos do Moodle.';
$string['privacy:metadata:messageexplanation'] = 'A Ferramenta de Grupos envia mensagens aos utilizadores promovidos da fila para serem registados.';
$string['privacy:metadata:mod_grouptool_group_filter'] = 'Que grupo pretende filtrar?';
$string['privacy:metadata:mod_grouptool_mygroups_only'] = 'Apenas os grupos próprios devem ser considerados/mostrados.';
$string['privacy:metadata:modified_by'] = 'Identificador do utilizador, se modificado por outra pessoa.';
$string['privacy:metadata:queued'] = 'Contém todos os utilizadores em fila.';
$string['privacy:metadata:registered'] = 'Contém os utilizadores registados e os marcados para registo.';
$string['privacy:metadata:timestamp'] = 'Data e hora da última modificação';
$string['privacy:metadata:userid'] = 'Identificador do utilizador';
$string['queue'] = 'Colocar em fila';
$string['queue_and_multiple_reg_title'] = 'Filas e registos duplicados';
$string['queue_in_group'] = 'Continuar com a colocação de <strong>{$a->username}</strong> em fila de espera do grupo <strong>{$a->groupname}</strong>!';
$string['queue_in_group_success'] = 'A colocação de <strong>{$a->username}</strong> em fila de espera do grupo <strong>{$a->groupname}</strong> foi efetuada com sucesso!';
$string['queue_you_in_group'] = 'Continuar com a colocação em fila de espera do grupo <strong>{$a->groupname}</strong>!';
$string['queue_you_in_group_success'] = 'Foi colocado em fila de espera do grupo <strong>{$a->groupname}</strong> com sucesso!';
$string['queued'] = 'Em fila';
$string['queued_in_group_info'] = '<strong>{$a->username}</strong> foi colocado em fila de espera do grupo <strong>{$a->groupname}</strong>';
$string['queued_on_rank'] = 'Colocado na posição #{$a} da fila';
$string['queueing_is'] = 'Colocar em fila';
$string['queues'] = 'Filas';
$string['queues_max'] = 'Máximo de lugares simultâneos na fila por participante';
$string['queuesgrp'] = 'Fila e máximo de lugares na fila';
$string['queuesgrp_help'] = 'Se ativar a opção de colocar em filas, os alunos ao tentarem registar-se num grupo cheio, ficam em fila até que alguém cancele o registo no mesmo grupo. Após o prazo de registo, o professor tem a capacidade de mover os alunos para outros grupos se eles ainda estiverem em fila, onde os grupos são preenchidos usando a ordem de classificação atual da lista de grupos. Deve definir um número máximo de grupos nos quais um utilizador pode ser colocado em fila.<br />Limita o máximo de entradas simultâneas em fila para cada pessoa nesta Ferramenta de Grupos.';
$string['queuesizeerror'] = 'Os números de lugares da fila devem ser maiores ou iguais a 0. Não são permitidas letras ou outros sinais.';
$string['queuespresent'] = 'Já existem filas! Estas serão eliminadas se continuar. Para avançar, clique novamente no botão Guardar!';
$string['queuespresenterror'] = 'Existem utilizadores listados em filas. Não pode desativar as filas até que elas sejam resolvidas.';
$string['rank'] = 'Posição';
$string['recreate_group'] = 'Recriar grupo';
$string['reference_grade_feedback'] = 'Nota de referência/Feedback';
$string['refresh_table_button'] = 'Recarregar a pré-visualização';
$string['reg_in_full_group'] = 'Não é possível o registo de <strong>{$a->username}</strong> no grupo <strong>{$a->groupname}</strong> porque o grupo está cheio!';
$string['reg_not_open'] = 'De momento, o registo não é possível. Talvez o prazo tenha terminado ou nunca tenha sido permitido.';
$string['reg_you_in_full_group'] = 'Não é possível o registo no grupo <strong>{$a->groupname}</strong> porque o grupo está cheio!';
$string['register'] = 'Registar';
$string['register_in_group'] = 'Tem a certeza de que pretende registar <strong>{$a->username}</strong> no grupo <strong>{$a->groupname}</strong>?';
$string['register_in_group_success'] = 'Registo bem sucedido de <strong>{$a->username}</strong> no grupo <strong>{$a->groupname}</strong>!';
$string['register_you_in_group'] = 'Tem a certeza de que pretende registar-se no grupo <strong>{$a->groupname}</strong>?';
$string['register_you_in_group_success'] = 'Registou-se com sucesso no grupo <strong>{$a->groupname}</strong>!';
$string['register_you_in_group_successmail'] = 'Registou-se com sucesso no grupo <strong>{$a->groupname}</strong>!';
$string['register_you_in_group_successmailhtml'] = 'Registou-se com sucesso no grupo <strong>{$a->groupname}</strong>!';
$string['registered'] = 'Registados';
$string['registered_in_group_info'] = '{$a->username} foi registado no grupo <strong>{$a->groupname}</strong>';
$string['registered_on_rank'] = 'Registado na posição #{$a}';
$string['registration_missing'] = '1 registo em falta';
$string['registration_period_end'] = 'Fim do registo para';
$string['registration_period_start'] = 'Início do registo para';
$string['registrationdue'] = 'Data de fim dos registos';
$string['registrationnotification'] = '{$a->course->shortname} -> {$a->modulenameplural} -> {$a->grouptoolname}
----------------------------------------------------------
{$a->message}
----------------------------------------------------------';
$string['registrations'] = 'Registo no grupo';
$string['registrations_missing'] = '{$a} registos em falta';
$string['regpresent'] = 'Utilizador já {$a}';
$string['rename_failed'] = 'Ocorreu um erro ao renomear!';
$string['renamed_group'] = 'Grupo foi renomeado!';
$string['require_registration'] = 'Requer registos';
$string['require_registration_help'] = 'O número mínimo de grupos em que os alunos têm de se inscrever para marcar esta atividade como concluída. Não são considerados pela regra as vagas em filas de espera. Se o número for maior do que 1, é necessário ativar "Registos múltiplos" e "Máximo de grupos a escolher" tem de ser maior ou igual a esse valor.';
$string['reset_agrps'] = 'Reiniciar os grupos ativos';
$string['reset_agrps_help'] = 'Reiniciar todos os grupos da disciplina para ficarem inativos na Ferramenta de Grupos. Irá excluir também todos os registos e filas na Ferramenta de Grupos desta disciplina!';
$string['reset_queues'] = 'Reiniciar filas';
$string['reset_queues_help'] = 'As filas são apagadas automaticamente se os grupos ativos forem reiniciados.';
$string['reset_registrations'] = 'Reiniciar registos';
$string['reset_registrations_help'] = 'Os registos são apagados automaticamente se os grupos ativos forem reiniciados.';
$string['reset_transparent_unreg'] = 'Cancelar o registo de todos os membros do grupo';
$string['reset_transparent_unreg_help'] = 'Remover todos os utilizadores dos grupos que são representados por grupos ativos da Ferramenta de Grupos';
$string['resize'] = 'Alterar tamanho';
$string['resized_group'] = 'Tamanho do grupo alterado!';
$string['resolve_queue'] = 'Resolver filas';
$string['resolve_queue_legend'] = 'Resolver filas';
$string['resolve_queue_title'] = 'Resolver filas pendentes';
$string['search:activity'] = 'Ferramenta de Grupos - informações da atividade';
$string['select'] = 'Selecionar';
$string['selected'] = 'Selecionado';
$string['selectfromcohort'] = 'Selecionar membros de grupos globais';
$string['selectfromgroup'] = 'Selecionar membros do grupo';
$string['selectfromgroup_help'] = 'Alocar apenas membros de um determinadogrupo em grupos recém-criados';
$string['selectfromgrouping'] = 'Selecionar membros do agrupamento';
$string['selectfromgrouping_help'] = 'Alocar apenas membros de um determinado agrupamento em grupos recém-criados';
$string['selectmultiple'] = 'selecionar vários';
$string['selectsingle'] = 'selecionar um';
$string['selfregistration'] = 'Registo';
$string['selfregistration_alt'] = 'Registar-se num ou mais grupos (dependendo das configurações)';
$string['setactive'] = 'Ativar';
$string['setinactive'] = 'Desativar';
$string['settingspage'] = 'Editar configurações do grupo';
$string['show_members'] = 'Mostrar membros do grupo';
$string['show_members_help'] = 'Permite que os alunos (em determinadas circunstâncias) possam ver quem já está registado num grupo.<br />
<ul>
<li><strong>Não:</strong> não mostrar os membros dos grupos</li>
<li><strong>Tudo - após data de fim:</strong> mostrar os membros do grupo de todos os grupos após a data de fim</li>
<li><strong>Próprios - após data de fim:</strong> mostrar os membros dos grupos a que pertence o utilizador após a data de fim</li>
<li><strong>Próprios - após o registo:</strong> mostrar os membros dos grupos a que pertence o utilizador depois de se registar ou ser registado por outra pessoa</li>
<li><strong>Sim:</strong> Mostrar membros dos grupos</li>
</ul>';
$string['showafterdue'] = 'Tudo - depois da data de fim';
$string['showownafterdue'] = 'Próprios - após data de fim';
$string['showownafterreg'] = 'Próprios - após o registo';
$string['size'] = 'Tamanho do grupo';
$string['size_grp'] = 'Configurações do tamanho do grupo';
$string['size_grp_help'] = 'Se a opção tamanho do grupo estiver ativa, o máximo de membros em cada grupo ficará limitado (definido para toda a instância via campo de texto). Se adicionalmente o "tamanho individual" for ativado, o tamanho de cada grupo pode ser definido na lista abaixo.';
$string['skip_user_import'] = 'Ignorado na importação';
$string['skipped'] = 'Ignorado';
$string['sortlist_no_data'] = 'Não existem grupos!';
$string['source'] = 'Origem';
$string['source_missing'] = 'Não existe uma origem para copiar!';
$string['sources_missing'] = 'Há pelo menos 1 grupo sem origem escolhida para copiar!';
$string['start'] = 'Executar';
$string['status'] = 'Estado';
$string['status_help'] = '<ul>
<li><strong>✔</strong> inscrito em Grupos do Moodle e na Ferramenta de Grupos</li>
<li><strong>?</strong> inscrito em Grupos do Moodle mas não na Ferramenta de Grupos</li>
<li><strong>+</strong> inscrito na Ferramenta de Grupos mas não em Grupos do Moodle</li>
<li><strong>1, 2, 3, ...</strong> em fila na Ferramenta de Grupos</li>
</ul>';
$string['successfully_deleted_groups'] = 'Grupos apagados com sucesso!';
$string['swapped_groups'] = 'Grupos trocados <strong>{$a->a}</strong> (ordem <strong>{$a->aorder}</strong>) e <strong>{$a->b}</strong> (ordem <strong>{$a->border}</strong>)!';
$string['switched_to_all_groups'] = 'Alterado o filtro de grupo para todos os grupos!';
$string['target'] = 'Destino';
$string['too_many_queue_places'] = 'Não é possível colocar <strong>{$a->username}</strong> em fila de espera no grupo <strong>{$a->groupname}</strong> porque <strong>{$a->username}</strong> já está em fila de espera de muitos grupos!';
$string['too_many_regs'] = 'O utilizador já se encontra registado/em fila de espera de um grande número de grupos!';
$string['toolessregspresent'] = 'Pelo menos 1 utilizador está registado em menos grupos, por isso, o mínimo de grupos para escolher tem que ser no máximo {$a}.';
$string['toomanyregs'] = '<b>Atenção</b>: Em pelo menos um grupo, existem mais membros do que o especificado pelo novo tamanho de grupo desejado.<br /> Reduza o número de membros nos grupos antes de alterar o tamanho do grupo.';
$string['toomanyregspresent'] = 'Pelo menos 1 utilizador está registado em muitos grupos, por isso, o máximo de grupos para escolher deve ser pelo menos {$a}.';
$string['total'] = 'Total';
$string['unqueue'] = 'Remover da fila';
$string['unqueue_from_group'] = 'Continuar com a remoção de <strong>{$a->username}</strong> da fila de espera do grupo <strong>{$a->groupname}</strong>?';
$string['unqueue_from_group_success'] = 'O utilizador <strong>{$a->username}</strong> foi removido com sucesso da fila de espera do grupo <strong>{$a->groupname}</strong>!';
$string['unqueue_you_from_group'] = 'Continuar com a sua remoção da fila de espera do grupo <strong>{$a->groupname}</strong>?';
$string['unqueue_you_from_group_success'] = 'Foi removido com sucesso da fila de espera do grupo <strong>{$a->groupname}</strong>!';
$string['unreg'] = 'Cancelar registo';
$string['unreg_from_group'] = 'Continuar o cancelamento do registo de <strong>{$a->username}</strong> no grupo <strong>{$a->groupname}</strong>?';
$string['unreg_from_group_success'] = 'Cancelou com sucesso o registo de <strong>{$a->username}</strong> no grupo <strong>{$a->groupname}</strong>!';
$string['unreg_is'] = 'Cancelar registo';
$string['unreg_not_allowed'] = 'Não é permitido cancelar o registo!';
$string['unreg_you_from_group'] = 'Continuar o cancelamento do seu registo no grupo <strong>{$a->groupname}</strong>?';
$string['unreg_you_from_group_success'] = 'Cancelou com sucesso o seu registo no grupo <strong>{$a->groupname}</strong>!';
$string['unregfrommgroups'] = 'Forçar cancelamento do registo da Ferramenta de Grupos';
$string['unregfrommgroups_help'] = 'Cancelar o registo de utilizadores não apenas na Ferramenta de Grupos mas também dos grupos Moodle.';
$string['unregister'] = 'Cancelamento de registos';
$string['unregister_conflict_user_not_in_group'] = 'O utilizador <strong>{$a->fullname}</strong> não pertence ao grupo <strong>{$a->groupname}</strong>!';
$string['unregister_desc'] = 'Cancelar registo de vários utilizadores';
$string['unregister_from_inactive_group_warning'] = 'Atenção: O grupo <strong>{$a}</strong> está atualmente inativo no contexto da Ferramenta de Grupos e, por isso, não será exibido.';
$string['unregister_in_inactive_group_warning'] = 'Atenção: O grupo <strong>{$a}</strong> está atualmente inativo no contexto da Ferramenta de Grupos e, por isso, não será exibido.';
$string['unregister_progress_completed'] = 'Cancelamento de registos completo';
$string['unregister_progress_preview_completed'] = 'Visualização do cancelamento de registo concluída';
$string['unregister_progress_start'] = 'Iniciar cancelamento de registos';
$string['unregister_progress_unregister'] = 'Cancelar registo do utilizador';
$string['unregister_skipped'] = 'Foi ignorado o utilizador <strong>{$a->fullname}</strong> para o grupo <strong>{$a->groupname}</strong>!';
$string['unregister_user'] = 'O cancelamento do registo de <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) no grupo <strong>{$a->groupname}</strong> foi concluído com sucesso.';
$string['unregister_user_from_moodle_group'] = 'O cancelamento do registo de <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) no grupo Moodle <strong>{$a->groupname}</strong> foi concluído com sucesso.';
$string['unregister_user_not_in_group'] = 'O utilizador <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) não pertence ao grupo <strong>{$a->groupname}</strong>!';
$string['unregister_user_only_in_moodle_group'] = 'O utilizador <strong>{$a->fullname}</strong> está apenas no grupo Moodle <strong>{$a->groupname}</strong> mas não no grupo da ferramenta de grupos!';
$string['unregister_user_prev'] = 'Cancelamento do registo de <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) no grupo <strong>{$a->groupname}</strong>.';
$string['unregisterbutton'] = 'Cancelar registo de utilizadores';
$string['update_grouplist_success'] = 'Grupos ativos atualizados com sucesso!';
$string['updatemdlgrps'] = 'Registar nos grupos Moodle';
$string['uptodate'] = 'atualizado';
$string['use_all_or_chosen'] = 'Usar todos ou selecionado';
$string['use_all_or_chosen_help'] = 'Selecione "Todos" para criar um agrupamento para cada grupo da disciplina. Use "Selecionados" para criar agrupamentos somente para os grupos selecionados.';
$string['use_individual'] = 'Usar o tamanho individual por grupo';
$string['use_individual_help'] = 'Substituir o tamanho global do grupo com o valor individual para cada grupo. Estes são definidos através da lista ordenada de grupos mostrada abaixo.';
$string['use_queue'] = 'Usar filas';
$string['use_queue_help'] = 'Os alunos podem colocar-se na fila de espera em grupos já preenchidos. Esta configuração só pode ser usada se o autorregistro estiver ativado e se estiver definido o limite do tamanho do grupo.';
$string['use_size'] = 'Ativado';
$string['user_has_too_less_regs'] = 'O cancelamento de registo/fila de espera não é possível porque <strong>{$a->username}</strong> está em fila de espera/registado em muito menos grupos!';
$string['user_is_deleted'] = 'A conta de utilizador encontrada (ID <strong>{$a->id}</strong>, Nome: <strong>{$a->fullname}</strong>) já está apagada. Sendo assim, não é possível a inscrição nesta disciplina.';
$string['user_move_prev'] = '<strong>{$a->user}</strong> será movido da fila de espera do grupo <strong>{$a->from_group}</strong> para o grupo <strong>{$a->to_group}</strong>!';
$string['user_moved'] = '<strong>{$a->user}</strong> foi movido da fila de espera do grupo <strong>{$a->from_group}</strong> para o grupo <strong>{$a->to_group}</strong>!';
$string['user_not_found'] = 'O utilizador <strong>{$a}</strong> não foi encontrado!';
$string['userlist'] = 'Lista de utilizadores';
$string['userlist_alt'] = 'Ver lista de utilizadores e respetivos registos. Exportar dados dos utilizadores e dos seus grupos em diferentes formatos (PDF, texto simples, Excel, etc.).';
$string['userlist_help'] = 'Lista de números de identificação separados por um ou mais dos seguintes caracteres <ul><li>[,] vírgula</li><li>[;] ponto e vírgula</li><li>[ ] espaço em branco</li><li>[\\n] nova linha</li><li>[\\r] mudança de linha</li><li>[\\t] tabulador</li></ul>';
$string['userlist_tab'] = 'Vista da disciplina';
$string['userlist_tab_alt'] = 'Vista da disciplina iniciada';
$string['users_queues_limit'] = 'Lugares em filas por utilizador';
$string['users_queues_limit_help'] = 'Se ativar esta opção, pode definir o número máximo de lugares em filas que um utilizador pode estar';
$string['users_tab'] = 'Participantes';
$string['users_tab_alt'] = 'Mostrar participantes';
$string['view_registrations'] = 'ver registos';
$string['viewmoodlegroups'] = 'Grupos Moodle da disciplina';
$string['with_selection'] = 'Com a seleção...';
$string['you_are_already_marked'] = 'Já marcou o grupo <strong>{$a->groupname}</strong> para registo!';
$string['you_are_already_queued'] = 'Já está está em fila de espera no grupo <strong>{$a->groupname}</strong>!';
$string['you_are_already_registered'] = 'Já está está registado no grupo <strong>{$a->groupname}</strong>!';
$string['you_are_not_in_queue_or_registered'] = 'Não está registado nem está em fila de espera no grupo <strong>{$a->groupname}</strong>';
$string['you_change_group_to_success'] = 'Mudança de grupo bem sucedida! Está agora registado no grupo <strong>{$a->groupname}</strong>!';
$string['you_have_too_less_regs'] = 'Cancelar o registo/remover de fila não é possível porque está em fila de espera/registado em muito menos grupos!';
$string['you_have_too_many_queue_places'] = 'Não é possível colocar-lhe em fila de espera no grupo <strong>{$a->groupname}</strong> porque já está em fila em muitos grupos!';
$string['your_place_allocated_in_group_success'] = 'Marcou com sucesso o grupo <strong>{$a->groupname} </strong> para registo';
