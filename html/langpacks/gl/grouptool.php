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
 * Strings for component 'grouptool', language 'gl', version '4.1'.
 *
 * @package     grouptool
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activated_group'] = 'Grupo activado';
$string['activated_groups'] = 'Grupos activados!';
$string['active'] = 'Activo';
$string['activegroups'] = 'Grupos activos';
$string['add_member'] = 'Engadir a <strong>{$a->username}</strong> ao grupo <strong>{$a->groupname}</strong>';
$string['added_member'] = 'Engadiuse a <strong>{$a->username}</strong> ao grupo <strong>{$a->groupname}</strong>';
$string['administration'] = 'Administración';
$string['administration_alt'] = 'Creación de grupo/agrupamento e axustes para os grupos activos desta instancia';
$string['agroups'] = 'Grupos activos';
$string['ajax_edit_size_help'] = 'Gardar o novo tamaño con &lt;Intro&gt;, use &lt;ESC&gt; para cancelar, déixeo baleiro para eliminar o tamaño individual';
$string['all_groups_full'] = 'Non foi posíbel rexistrar <strong>{$a}</strong> en ningún grupo porque todos os grupos están cheos.';
$string['allow_multiple'] = 'Múltiples rexistros';
$string['allow_multiple_help'] = 'Permitir que os alumnos se inscriban en máis de 1 grupo ao mesmo tempo. Debe especificar cantos grupos teñen que escoller como mínimo (= mínimo de grupos a escoller) e cantos grupos poden escoller como máximo (= máximo de grupos a escoller).';
$string['allow_reg'] = 'Activar o autorexistro';
$string['allow_reg_help'] = 'Activar o autorexistro para os alumnos para que poidan rexistrarse nos grupos activos, que se escollen a continuación.';
$string['allow_unreg'] = 'Permitir darse de baixa';
$string['allow_unreg_help'] = 'Permite que os alumnos se dean de baixa ou cambien a outros grupos antes (opcional) da data límite.';
$string['allowed'] = 'Permitido';
$string['already_marked'] = 'Este grupo xa estaba marcado para o rexistro!';
$string['already_member'] = '<strong>{$a->username}</strong> xa é membro do grupo <strong>{$a->groupname}</strong>';
$string['already_occupied'] = 'O lugar do grupo <strong>{$a->grpname}</strong> xa está ocupado porque outro usuario completou o rexistro máis rápido. Busca outro grupo!';
$string['already_queued'] = '<strong>{$a->username}</strong> xa está na cola no grupo <strong>{$a->groupname}</strong> !';
$string['already_registered'] = '<strong>{$a->username}</strong> xa está rexistrado no grupo <strong>{$a->groupname}</strong> !';
$string['alwaysshowdescription'] = 'Amosar sempre a descrición';
$string['alwaysshowdescription_help'] = 'Se está desactivado, a descrición da ferramenta de grupos anterior só será visible para os alumnos na data de «Inicio do rexistro».';
$string['asterisk_marks_moodle_registrations'] = 'Os usuarios co asterisco (*) xa están rexistrados no respectivo grupo Moodle';
$string['availabledate'] = 'Inicio do rexistro';
$string['availabledate_help'] = 'Inicio do período de rexistro. Após esta data, o alumnado poderá rexistrarse nos grupos seleccionados (se está activado).';
$string['availabledateno'] = 'Sempre dispoñíbel';
$string['cant_enrol'] = 'Non é posíbel inscribir o usuario automaticamente no curso.';
$string['cfg_addinstanceset_head'] = 'Axustes adicionais de instancias';
$string['cfg_addinstanceset_head_info'] = 'Axustes adicionais para a ferramenta de grupos.';
$string['cfg_admin_head'] = 'Axustes predeterminados na administración de vistas';
$string['cfg_admin_head_info'] = 'Axustes estándar para a lapela de administración de vistas da ferramenta de grupos.';
$string['cfg_allow_multiple'] = 'Múltiples rexistros';
$string['cfg_allow_multiple_desc'] = 'Permitir que os alumnos estean rexistrados en máis de 1 grupo ao mesmo tempo de xeito predeterminado.';
$string['cfg_allow_reg'] = 'Permitir o autorexistro';
$string['cfg_allow_reg_desc'] = 'Permitir que, de xeito prederminado, os alumnos se rexistren a si mesmos';
$string['cfg_allow_unreg'] = 'Permitir darse de baixa';
$string['cfg_allow_unreg_desc'] = 'Os usuarios deberían poder darse de baixa e cambiar de grupo?';
$string['cfg_choose_max'] = 'Escoller o máximo';
$string['cfg_choose_max_desc'] = 'En cantos grupos deberían poder rexistrarse os usuarios ao mesmo tempo de xeito predeterminado?';
$string['cfg_choose_min'] = 'Escoller o mínimo';
$string['cfg_choose_min_desc'] = 'Cal é o mínimo predeterminado de grupos que teñen que escoller os usuarios?';
$string['cfg_force_dereg'] = 'Forzar a baixa na ferramenta de grupos';
$string['cfg_force_dereg_desc'] = 'Forzar a baixa non só da ferramenta de grupos senón tamén do grupo de Moodle.';
$string['cfg_force_importreg'] = 'Forzar o rexistro na ferramenta de grupos';
$string['cfg_force_importreg_desc'] = 'Forzar mediante a ferramenta de grupos no grupo de Moodle que os usuarios importados sexan rexistrados forzosamente nesta instancia da ferramenta de grupos tamén.';
$string['cfg_groups_queues_limit'] = 'Lugares de cola por grupo';
$string['cfg_groups_queues_limit_desc'] = 'De xeito predeterminado, determina cantos alumnos diferentes se poden poñer en cola nun grupo ao mesmo tempo.';
$string['cfg_grpsize'] = 'Tamaño do grupo estándar global';
$string['cfg_grpsize_desc'] = 'Tamaño de grupo estándar usado en todas partes na ferramenta de grupos';
$string['cfg_ifgroupdeleted'] = 'Se se eliminan grupos';
$string['cfg_ifgroupdeleted_desc'] = 'Deberíanse volver crear os grupos eliminados para a instancia de ferramenta de grupos ou deberían eliminarse as referencias en ferramenta de grupos (incluíndo os datos do grupo, os rexistros e a cola)? Nota: Se selecciona «volver crear o grupo», entón os grupos volveranse a crear automaticamente após a eliminación en «Administración do curso/Usuarios/Grupos».';
$string['cfg_ifmemberadded'] = 'Se se engaden membros do grupo';
$string['cfg_ifmemberadded_desc'] = 'Os novos membros do grupo engadidos a través de Moodle tamén deberían ser rexistrados na ferramenta de grupos ou ignorarse?';
$string['cfg_ifmemberremoved'] = 'Se se retiran membros do grupo';
$string['cfg_ifmemberremoved_desc'] = 'Deberíanse eliminar os rexistros da ferramenta de grupos se os usuarios son eliminados do grupo Moodle correspondente?';
$string['cfg_immediate_reg'] = 'Rexistro inmediato';
$string['cfg_immediate_reg_desc'] = 'Deberíase pasar cada rexistro aos grupos de Moodle?';
$string['cfg_importfields'] = 'Comparar campos para importación/rexistro';
$string['cfg_importfields_desc'] = 'Definir cales son os campos da táboa de usuarios que se deben comparar cos datos ao importar ou cancelar o rexistro de usuarios. Búscanse nos campos un por un ata que se atope unha coincidencia única. Os valores posíbeis/útiles son, por exemplo: nome de usuario, número de identificación, correo-e. ATENCIÓN: non se comproba que os nomes dos campos sexan correctos. Caracteres permitidos: a-z, A-Z e «,»';
$string['cfg_instance_head'] = 'Axustes predeterminados das instancisa';
$string['cfg_instance_head_info'] = 'Axustes predeterminados para as novas instancias da ferramenta de grupos.';
$string['cfg_max_queues'] = 'Máx. de lugares na cola simultáneos por participante';
$string['cfg_max_queues_desc'] = 'Determina en cantos grupos diferentes se pode poñer en cola un usuario ao mesmo tempo de xeito predeterminado.';
$string['cfg_moodlesync_head'] = 'Comportamento da sincronización';
$string['cfg_moodlesync_head_info'] = 'Como deberían comportarse os grupos ferramenta se se engaden/eliminan membros do grupo Moodle ou se eliminan grupos individuais';
$string['cfg_name_scheme'] = 'Esquema de nomes estándar';
$string['cfg_name_scheme_desc'] = 'Esquema de nomes estándar usado para a creación de grupos';
$string['cfg_show_members'] = 'Amosar os membros do grupo';
$string['cfg_show_members_desc'] = 'Determina se os membros do grupo deben estar visíbeis de xeito predeterminado';
$string['cfg_use_individual'] = 'Utilizar o tamaño individual';
$string['cfg_use_individual_desc'] = 'Se debe utilizarse de xeito predeterminado o tamaño individual de grupo para cada grupo';
$string['cfg_use_queue'] = 'Usar a cola';
$string['cfg_use_queue_desc'] = 'Se debe utilizarse de xeito predeterminado o rexistro en cola de grupos completo';
$string['cfg_use_size'] = 'Utilizar o tamaño do grupo';
$string['cfg_use_size_desc'] = 'Se debe utilizarse de xeito predeterminado o tamaño do grupo';
$string['cfg_users_queues_limit'] = 'Lugares de cola por usuario';
$string['cfg_users_queues_limit_desc'] = 'Determina en cantos grupos diferentes se pode poñer en cola un usuario ao mesmo tempo de xeito predeterminado.';
$string['change_group'] = 'Cambiar grupo';
$string['change_group_to'] = 'Continuar co cambio de grupo a <strong>{$a->groupname}</strong>?';
$string['change_group_to_success'] = 'Cambio de grupo satisfactorio! <strong>{$a->username}</strong> agora está rexistrado no grupo <strong>{$a->groupname}</strong> !';
$string['changes_saved'] = 'Cambios gardados';
$string['checkbox_control_header'] = 'Des/marcar grupos e agrupamentos';
$string['checkbox_control_header_help'] = '<p>Ao usar esta función, pode activar/desactivar grupos dun ou máis agrupamentos dentro da súa ferramenta de grupos:
    <ol>
        <li>Escolla no campo de selección múltiple «Todos» (activaranse/desactivaranse todos os grupos dispoñíbeis), un agrupamento ou varios agrupamentos (cambiando á selección múltiple usando a pequena icona situada a ao carón e usando Ctrl + clic).</li>
        <li>Utilice unha das seguintes opcións «Seleccionar/Desmarcar/Inverter»:
            <ul>
                <li><b>Seleccionar:</b> activaranse os grupos dos grupos escollidos.</li>
                <li><b>Desmarcar:</b> desactivaranse os grupos dos grupos escollidos </li>
                <li><b>Inverter:</b> activaranse todos os grupos dos agrupamentos non escollidos. </li>
            </ul>
        </li>
        <li>Asumir a súa elección facendo clic no botón «Ir».</li>
    </ol>
</p>';
$string['choose'] = 'Escoller...';
$string['choose_group'] = 'Ten que escoller un nome grupo obxectivo!';
$string['choose_max'] = 'Máximo de grupos a escoller';
$string['choose_max_text'] = 'Permíteselle escoller <strong>{$a}</strong> grupo(s) como máximo!';
$string['choose_min'] = 'Mínimo de grupos a escoller';
$string['choose_min_max_text'] = 'Ten que escoller entre <strong>{$a->min}</strong> e <strong>{$a->max}</strong> grupos!';
$string['choose_min_text'] = 'Ten que escoller polo menos <strong>{$a}</strong> grupo(s)!';
$string['choose_minmax_title'] = 'Grupos a escoller';
$string['choose_targetgroup_import'] = 'Importar a grupos';
$string['choose_targetgroup_unregister'] = 'Dar de baixa do(s) grupo(s)';
$string['chooseactivity'] = 'Ten que escoller unha actividade antes de que se poidan amosar os datos.';
$string['completiondetail:register'] = 'Rexistrarse en grupos: {$a}';
$string['completionregister'] = 'O alumno debe estar rexistrado nos grupos:';
$string['condition_prevent_access'] = 'As condicións actuais impídenlle acceder á instancia da ferramenta de grupos.';
$string['confirm_delete'] = 'Está a piques de eliminar o grupo por completo. Isto eliminará todos os membros deste grupo de xeito irrecuperable. Estás SEGURO de que quere continuar?';
$string['confirm_delete_title'] = 'Confirma que quere eliminar este elemento?';
$string['copied_grade_feedback'] = 'Cualificación do grupo<br />
 +Envío de: <strong>{$a->student}</strong><br />
 +Cualificado por: <strong>{$a->teacher}</strong><br />
 +Data/Hora orixinal: <strong>{$a->date}</strong><br />
 +Comentarios: <strong>{$a->feedback}</strong>';
$string['copy'] = 'Copiar';
$string['copy_chosen'] = 'Copia escollida';
$string['copy_grade_confirm'] = 'Quere seguir copiando esta cualificación?';
$string['copy_grade_overwrite_confirm'] = 'Quere seguir copiando esta cualificación? As cualificacións anteriores existentes serán sobrescritas!';
$string['copy_grades_confirm'] = 'Quere seguir copiando estas cualificacións?';
$string['copy_grades_errors'] = 'Produciuse polo menos 1 erro ao copiar as cualificacións:';
$string['copy_grades_overwrite_confirm'] = 'Quere seguir copiando estas cualificacións? As cualificacións anteriores existentes serán sobrescritas!';
$string['copy_grades_success'] = 'As seguintes cualificacións foron actualizadas correctamente:';
$string['copy_refgrades_feedback'] = 'Copiar as cualificacións de referencia e os comentarios dos grupos seleccionados doutros membros do grupo';
$string['copygrade'] = 'Copiar a cualificación';
$string['could_not_add'] = 'Non foi posíbel engadir <strong>{$a->username}</strong> ao grupo <strong>{$a->groupname}</strong>';
$string['couldnt_move_down'] = 'Non foi posíbel mover o grupo cara abaixo!';
$string['couldnt_move_up'] = 'Non foi posíbel mover o grupo cara arriba!';
$string['createGroups'] = 'Crear grupos';
$string['create_1_person_groups'] = 'Crear grupos de 1 persoa';
$string['create_1_person_groups_help'] = 'Crea grupos de 1 persoa: aquí créase un grupo para cada usuario escollido. Ademais de # e @ pode usar as seguintes etiquetas que serán substituídas polos datos dos usuarios:
<ul>
<li>[username] - o «nome de usuario» do usuario</li>
<li>[firstname] - o nome do usuario</li>
<li>[lastname] - o apelido do usuario</li>
<li>[idnumber]  o número de identificación do usuario</li>
</ul>
 Se faltan algúns datos, a etiqueta substituirase por «nomeetiquetaXX» onde XX significa o número do grupo.';
$string['create_assign_groupings'] = 'Crear/Asignar agrupamentos';
$string['create_fromto_groups'] = 'Crear grupos con números dun intervalo (p. ex., do 34 ao 89), <strong>sen asignación automática</strong> de membros do grupo';
$string['create_fromto_groups_help'] = 'Crear grupos con números dun intervalo (p. ex., do 34 ao 89): use este modo para crear grupos (que faltan) (p. ex., Grupo 4, Grupo 5, Grupo 6). Só tes que inserir límites e cantos díxitos queres usar polo menos para os nomes (p. ex., 1, 01, 001, 0001...). É posíbel definir un determinado tamaño de grupo con «Número M de membros do grupo». Non haberá <strong>asignación automática</strong> de membros do grupo.';
$string['create_groupings_confirm'] = 'Quere continuar creando agrupamentos como se viu anteriormente?';
$string['create_groupings_confirm_problem'] = 'Produciuse polo menos 1 erro (consulte a vista previa anterior)!';
$string['create_groups_confirm'] = 'Quere continuar creando grupos como se viu anteriormente?';
$string['create_groups_confirm_problem'] = 'Ao tentar crear novos grupos baseados no esquema de nomes atópanse conflitos - ver vista previa - os grupos de Moodle deben ter nomes únicos. O conflito pode deberse a grupos existentes co mesmo nome ou a un erro de sintaxe no esquema de nomenclatura (... p. ex., baleiro, falta o símbolo #).';
$string['create_n_m_groups'] = 'Crear N grupos para M membros, <strong>sen asignación automática</strong> de membros do grupo';
$string['create_n_m_groups_help'] = 'Crear N grupos para M membros - Crear con este modo un número específico de grupos (N grupos) cun tamaño de grupo específico (M membros), p. ex., sete grupos con espazo para tres membros cada un. Non haberá <strong>asignación automática</strong> de membros do grupo.';
$string['createinsertgrouping'] = 'Engadir ao agrupamento';
$string['deactivated_group'] = 'Grupo desactivado';
$string['deactivated_groups'] = 'Grupos desactivados!';
$string['define_amount_groups'] = 'Definir o número N de grupos';
$string['define_amount_groups_help'] = 'Definir o número N de grupos: Vostede escolle os usuarios de que rol quere empregar para a creación do grupo e introduza a cantidade desexada de grupos no campo de texto «Número de grupos/membros». No esquema de nomes pode introducir un esquema de nomes para os grupos que utilicen
<ul>
<li> # (substituirase polo número do grupo) e</li>
<li> @ (substituirase por unha letra que represente o número de grupo)</li>
</ul>
A continuación, os usuarios escollidos distribúense na cantidade desexada de grupos.';
$string['define_amount_members'] = 'Definir o número M de membros do grupo';
$string['define_amount_members_help'] = 'Define o número M de membros do grupo: Aquí dille aa ferramenta de grupos cantos membros debería ter cada grupo. A cantidade necesaria de grupos calcularase automaticamente. Se marca «Evitar o último grupo pequeno», os usuarios deste grupo espállanse sobre os outros se o índice de enchemento dos últimos grupos é inferior ao 70%.';
$string['delete_reference'] = 'Eliminar da ferramenta de grupos';
$string['description'] = 'Descrición';
$string['deselect'] = 'Desmarcar';
$string['determinismerror'] = 'O remate do rexistro non pode ser antes do inicio do rexistro ou no pasado.';
$string['digits'] = 'Mínimo de díxitos';
$string['disabled'] = 'Desactivado';
$string['drag'] = 'Mover';
$string['due'] = 'Grupo ferramenta pendente';
$string['duedate'] = 'Fin do rexistro';
$string['duedate_help'] = 'Fin do prazo de rexistro. Após esta data, os alumnos xa non poden rexistrarse e o profesor accede á funcionalidade de resolución de colas, etc.';
$string['duedateno'] = 'Sen data límite';
$string['early'] = '{$a} cedo';
$string['error_activating_group'] = 'Produciuse un erro ao activar o grupo <strong>{$a->groupid}</strong> na ferramenta de grupos <strong>{$a->grouptoolid}</strong> !';
$string['error_at'] = 'Erro en';
$string['error_deactivating_group'] = 'Produciuse un erro ao desactivar o grupo <strong>{$a->groupid}</strong> na ferramenta de grupos <strong>{$a->grouptoolid}</strong> !';
$string['error_getting_data'] = 'Produciuse un erro ao obter os datos do grupo. Non se devolveu ningún ou máis de un grupo!';
$string['error_saving_new_order'] = 'Produciuse un erro ao gardar a nova orde para grupos: <strong>{$a}</strong>';
$string['eventagrpcreated'] = 'Grupo activo creado';
$string['eventagrpdeleted'] = 'Grupo activo eliminado';
$string['eventagrpsupdated'] = 'Grupos activos actualizados';
$string['eventdequeuingstarted'] = 'Comezou a retirada da cola';
$string['eventgroupcreationstarted'] = 'Comezou a creación do grupo';
$string['eventgroupgraded'] = 'Grupo cualificado';
$string['eventgroupingscreated'] = 'Agrupamentos creados';
$string['eventgrouprecreated'] = 'Grupo creado de novo';
$string['eventoverviewexported'] = 'Visión xeral exportada';
$string['eventqueueentrycreated'] = 'Creouse a entrada en cola';
$string['eventqueueentrydeleted'] = 'Eliminouse a entrada en cola';
$string['eventregistrationcreated'] = 'Rexistro creado';
$string['eventregistrationdeleted'] = 'Rexistro eliminado';
$string['eventregistrationpushstarted'] = 'Iniciouse o proceso de rexistro';
$string['eventuserimported'] = 'Usuario importado';
$string['eventuserlistexported'] = 'Exportouse a lista de usuarios';
$string['eventusermoved'] = 'Usuario movido';
$string['exceedgroupqueuelimit'] = 'Excedendo o límite de cola do grupo!';
$string['exceedgroupsize'] = 'Excedendo o tamaño do grupo!';
$string['exceeduserqueuelimit'] = 'Excedendo o límite de cola de usuarios!';
$string['exceeduserreglimit'] = 'Excedendo o límite de rexistro de usuarios!';
$string['feedbackplural'] = 'Comentarios';
$string['filters_legend'] = 'Filtrar datos';
$string['filterunoccupied'] = 'Amosar só os grupos con prazas libres';
$string['followchanges'] = 'Seguir os cambios';
$string['forceregistration'] = 'Forzar o rexistro na ferramenta de grupos';
$string['forceregistration_help'] = 'Teña en conta que os grupos da ferramenta de grupos difiren fundamentalmente dos grupos estándar de Moodle do curso. Marque a caixa de verificación se quere importar os usuarios ao grupo de ferramentas de grupo así como ao grupo estándar de Moodle.';
$string['found_multiple'] = 'Non é posíbel identificalo de forma única, atopáronse varios usuarios:';
$string['free'] = 'Libre';
$string['fromgttoerror'] = 'O valor «para» debe ser maior ou igual que o valor «de»';
$string['fullgroup'] = 'O grupo está cheo';
$string['general_information'] = 'Información xeral';
$string['general_registration_exception'] = 'Produciuse unha excepción xeral de rexistro e non podemos determinar por que de xeito automático.';
$string['global_userstats'] = '<strong>{$a->reg_users}</strong> de <strong>{$a->users}</strong> usuarios están rexistrados. <strong>{$a->notreg_users}</strong> aínda sen rexistrar.';
$string['grading'] = 'Cualificando';
$string['grading_activity_title'] = 'Actividade';
$string['grading_alt'] = 'Ferramentas para copiar as cualificacións dun membro do grupo a todos os demais do grupo, xa sexa para un grupo ou para un conxunto de grupos.';
$string['grading_filter_select_title'] = 'Grupo ou grupos';
$string['grading_filter_select_title_help'] = 'Escolla que grupo ou grupos quere usar:<ul><li> Sen conflitos - todos os grupos, nos que só un membro do grupo foi cualificado para a actividade escollida</li><li> Todos - todos os grupos</li><li> «Nome do grupo» - só o grupo seleccionado especificamente</li></ul>';
$string['grading_grouping_select_title'] = 'Filtrar agrupamento';
$string['group_administration'] = 'Administrar grupos';
$string['group_administration_alt'] = 'Administrar grupos e agrupamentos (activos)';
$string['group_assign_error'] = 'Non foi posíbel asignar o grupo!';
$string['group_assign_error_prev'] = 'Non é posíbel asignar o grupo!';
$string['group_creation'] = 'Crear grupos';
$string['group_creation_alt'] = 'Crear grupos';
$string['group_creation_failed'] = 'Fallou a creación de grupos!';
$string['group_creation_success'] = 'Grupos creados correctamente!';
$string['group_not_found'] = 'Non foi posíbel atopar o grupo {$a->groupid <strong>}</strong> na ferramenta de grupos <strong>{$a->grouptoolid}</strong> !';
$string['group_not_in_grouping'] = 'O grupo escollido non é membro do agrupamento escollido!';
$string['group_or_member_count'] = 'Número de grupos/membros';
$string['group_places'] = 'Prazas do grupo';
$string['group_places_help'] = 'O campo «Prazas do grupo» informa (separado por unha barra invertida) en primeiro lugar sobre o número total de prazas do grupo, en segundo lugar sobre o número de prazas libres e en terceiro lugar sobre o número de prazas do grupo que xa están ocupadas.';
$string['groupchange_from_non_unique_reg'] = 'Non é posíbel pode cambiar de grupo por mor de que o grupo anterior non é único.';
$string['groupcreation'] = 'Creación de grupos';
$string['groupcreationmode'] = 'Modo';
$string['groupfromtodigits'] = 'De, ata e díxitos dos nomes dos grupos:';
$string['groupinfo'] = 'Información do grupo';
$string['grouping_assign_error'] = 'Non foi posíbel asignar correctamente o agrupamento:';
$string['grouping_assign_error_prev'] = 'Non é posíbel asignar correctamente o agrupamento:';
$string['grouping_assign_success'] = 'Asignáronse correctamente:';
$string['grouping_assign_success_prev'] = 'Pódese asignar correctamente:';
$string['grouping_creation_error'] = 'Non foi posíbel crear o agrupamento!';
$string['grouping_creation_error_prev'] = 'Non é posíbel crear o agrupamento!';
$string['grouping_creation_only_success'] = 'O agrupamento creouse correctamente!';
$string['grouping_creation_only_success_prev'] = 'O agrupamento pódese crear correctamente!';
$string['grouping_creation_success'] = 'Creouse correctamente o agrupamento e asignóuselle o grupo <strong>{$a}</strong> !';
$string['grouping_creation_success_prev'] = 'Pode crear un agrupamento e asignarlle o grupo <strong>{$a}</strong> .';
$string['grouping_exists_error'] = 'Non foi posíbel crear un agrupamento porque xa existe un agrupamento con este nome.';
$string['grouping_exists_error_prev'] = 'Non é posíbel crear un agrupamento porque xa existe un agrupamento con este nome.';
$string['groupings_created_and_groups_added'] = 'Agrupamento(s) creado(s) e/ou grupo(s) engadidos!';
$string['groupingscreation'] = 'Crear e asignar agrupamentos';
$string['groupingselect'] = 'Agrupamentos para grupos seleccionados';
$string['groupingselect_help'] = 'Crear agrupamentos para os grupos seleccionados:<ul>
<li> Cree UN agrupamento para todos os grupos seleccionados. O nome do agrupamento pódese escoller libremente.</li>
<li> Cree un agrupamento para CADA grupo seleccionado. O agrupamento recibe o nome do grupo respectivo.</li>
<li> Engada os grupos seleccionados a un agrupamento existente</li></ul>';
$string['groupoverview'] = 'Visión xeral do grupo';
$string['groups_created'] = 'Grupos creados correctamente!';
$string['groups_queues_limit'] = 'Lugares de cola por grupo';
$string['groups_queues_limit_help'] = 'Limita os lugares dispoñíbeis da cola por grupo se está activado';
$string['groupselection'] = 'Selección de grupo';
$string['groupselection_help'] = 'Escolla os grupos/persoas para os que quere copiar a cualificación de referencia e o comentario escollidos activando as caixas de verificación correspondentes. Se só se amosa un grupo, seleccione a fonte para copiar a cualificación escollida usando o botón correspondente á dereita da entrada.';
$string['groupsize'] = 'Tamaño do grupo';
$string['groupsize_gets_enabled'] = 'Se continúa, o tamaño do grupo activarase automaticamente. Evite ese comportamento usando 0 como <strong>{$a->field}</strong>';
$string['groupsize_individual_gets_enabled'] = 'Se continúa, o tamaño individual do grupo activarase automaticamente. Evite ese comportamento usando 0 como <strong>{$a->field}</strong> para non usar o tamaño do grupo en absoluto ou use<strong>{$a->globalsize}</strong> para activar só o tamaño global do grupo!';
$string['groupstatus'] = 'Estado';
$string['groupstatus_help'] = 'O estado actual dun grupo visualízase coa cor:<ul><li> Verde - grupo activo. O grupo está asignado a esta ferramenta de grupo. Se o autorexistro está activo, os alumnos poderán rexistrarse neste grupo.</li><li> Gris - grupo inactivo. O grupo non está dispoñíbel nesta ferramenta de grupo.</li></ul> Premendo no símbolo pódese cambiar o estado.';
$string['grouptool'] = 'Ferramenta de grupos';
$string['grouptool:addinstance'] = 'Engadir unha instancia da ferramenta de grupo ao curso.';
$string['grouptool:administrate_groups'] = 'Administrar grupos e agrupamentos (activos)';
$string['grouptool:create_groupings'] = 'Crear agrupamentos usando a ferramenta de grupos.';
$string['grouptool:create_groups'] = 'Crear grupos usando a ferramenta de grupos';
$string['grouptool:export'] = 'Exportar datos de grupo e rexistro a diferentes formatos';
$string['grouptool:grade'] = 'Copiar as cualificacións dun membro do grupo a outros';
$string['grouptool:grade_own_group'] = 'Copiar as cualificacións dun membro do grupo a outros se a cualificación orixinal foi dada por min';
$string['grouptool:move_students'] = 'Mover os alumnos a outros grupos.';
$string['grouptool:register'] = 'Rexistrarse nun grupo activo usando a ferramenta de grupos';
$string['grouptool:register_students'] = 'Rexistrar os alumnos nun grupo activo mediante a ferramenta de grupos (Tamén se usa para resolver colas)';
$string['grouptool:unregister_students'] = 'Dar de baixa os alumnos dos grupos mediante a ferramenta de grupos.';
$string['grouptool:view_description'] = 'Ver a descrición das ferramentas de grupos';
$string['grouptool:view_groups'] = 'Ver grupos activos';
$string['grouptool:view_own_registration'] = 'Ver rexistro(s) propio(s).';
$string['grouptool:view_registrations'] = 'Ver quen está rexistrado/en cola en que grupo activo usando a ferramenta de grupo';
$string['grouptool:view_regs_course_overview'] = 'Ver unha lista de usuarios que contén quen está rexistrado/en cola en que grupo activo mediante a ferramenta de grupo.';
$string['grouptool:view_regs_course_view'] = 'Ver unha lista de usuarios que contén quen está rexistrado/en cola en que grupo activo mediante a ferramenta de grupo.';
$string['grouptool:view_regs_group_overview'] = 'Ver unha lista agrupada que contén quen está rexistrado/en cola en que grupo activo mediante a ferramenta de grupo.';
$string['grouptool:view_regs_group_view'] = 'Ver unha lista agrupada que contén quen está rexistrado/en cola en que grupo activo mediante a ferramenta de grupo.';
$string['grouptoolfieldset'] = 'Axustes de instancia';
$string['grouptoolname'] = 'Nome da ferramenta de grupo';
$string['grouptoolname_help'] = 'O nome da instancia da ferramenta de grupos';
$string['groupuser_import'] = 'Importar usuarios do grupo';
$string['groupuser_unregister'] = 'Dar de baixa usuarios do grupo';
$string['grp_marked'] = 'Marcado para rexistro';
$string['grpsizezeroerror'] = 'O tamaño do grupo debe ser maior ou igual a 1. Non se permiten letras nin outros símbolos.';
$string['ifgroupdeleted'] = 'Se se eliminan grupos';
$string['ifgroupdeleted_help'] = 'Deberíanse volver crear os grupos eliminados para a instancia de ferramenta de grupos ou deberían eliminarse as referencias en ferramenta de grupos (datos adicionais do grupo, os rexistros e a cola)? Nota: Se selecciona «volver crear o grupo», entón os grupos volveranse a crear automaticamente após a eliminación en «Administración do curso/Usuarios/Grupos».';
$string['ifmemberadded'] = 'Se se engaden membros do grupo';
$string['ifmemberadded_help'] = 'Os novos membros do grupo engadidos a través de Moodle tamén deberían ser rexistrados na ferramenta de grupos ou ignorarse?';
$string['ifmemberremoved'] = 'Se se retiran membros do grupo';
$string['ifmemberremoved_help'] = 'Deberíanse eliminar os rexistros da ferramenta de grupos se os usuarios son eliminados do grupo Moodle correspondente';
$string['ignorechanges'] = '& Ignorar os cambios';
$string['ignored_not_found_users'] = 'Non foi posíbel engadir polo menos un usuario ao grupo!';
$string['ignored_not_found_users_unregister'] = 'Non foi posíbel atopar polo menos un usuario!';
$string['ignoring_not_found_users'] = 'Non se atopou polo menos un usuario na base de datos. Todos eses usuarios serán ignorados!';
$string['immediate_reg'] = 'Rexistro inmediato';
$string['immediate_reg_help'] = 'Se está activado, as baixas no rexistro van ser remitidas ao sistema Moodle. Se non está activado, os rexistros almacenaranse na caché na ferramenta de grupos e o profesor poderá envialas ao sistema Moodle.';
$string['import'] = 'Importar';
$string['import_conflict_user_queued'] = 'O usuario <strong>{$a->fullname}</strong> xa está na cola no grupo <strong>{$a->groupname}</strong> !';
$string['import_desc'] = 'Importar usuarios mediante a lista de números ID a determinados grupos';
$string['import_in_inactive_group_rejected'] = 'O rexistro na ferramenta de grupos <strong>{$a}</strong> foi rexeitado por mor da inactividade do mesmo. Active o grupo nesta ferramenta de grupos para activar o rexistro.';
$string['import_in_inactive_group_warning'] = 'Nota: o grupo <strong>{$a}</strong> está actualmente inactivo no contexto da ferramenta de grupos e, polo tanto, non se amosará.';
$string['import_progress_completed'] = 'Importación completada';
$string['import_progress_import'] = 'Importar usuario';
$string['import_progress_preview_completed'] = 'Completouse a vista previa da importación';
$string['import_progress_search'] = 'Buscar usuario';
$string['import_progress_start'] = 'Iniciar a importación';
$string['import_skipped'] = 'Omitiuse o usuario <strong>{$a->fullname}</strong> para o grupo <strong>{$a->groupname}</strong>!';
$string['import_user'] = 'Importouse <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) correctamente no grupo <strong>{$a->groupname}</strong>.';
$string['import_user_prev'] = 'Importouse <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) no grupo <strong>{$a->groupname}</strong>.';
$string['import_user_problem'] = 'Prduciuse un problema durante a importación de <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong> - <strong>{$a->id}</strong>) no grupo <strong>{$a->groupname}</strong>.';
$string['importbutton'] = 'Importar usuarios';
$string['inactive'] = 'Inactivo';
$string['inactivegroups'] = 'Grupos inactivos';
$string['inactivegroups_hide'] = 'Agochar os grupos inactivos';
$string['inactivegroups_show'] = 'Amosar os grupos inactivos';
$string['includedeleted'] = 'Incluír os usuarios eliminados';
$string['includedeleted_help'] = 'Se está marcado, os usuarios eliminados non se eliminarán da lista. As contas de usuario eliminadas non se poden matricular no curso durante o proceso de importación.';
$string['incomplete_only_label'] = 'amosar só os grupos aos que lle faltan as cualificacións';
$string['incorrect_tab'] = 'Lapela incorrecta, esta lapela non está dispoñíbel.';
$string['individual_size_info'] = '* Tamaño do grupo dos axustes da ferramenta de grupos';
$string['intro'] = 'Descrición';
$string['invert'] = 'Inverter';
$string['landscape'] = 'Apaisado';
$string['late'] = '{$a} fóra de prazo';
$string['limit'] = 'límite';
$string['loading'] = 'cargando...';
$string['max_queues_reached'] = 'Acadouse o máximo nas colas!';
$string['max_regs_reached'] = 'Acadouse o máximo de rexistros!';
$string['maxmembers'] = 'Tamaño global do grupo';
$string['messageprovider:grouptool_moveupreg'] = 'Rexistro por avance na cola';
$string['missing_source_selection'] = 'Non se seleccionou ningunha orixe!';
$string['modulename'] = 'Ferramenta de grupos';
$string['modulename_help'] = 'O módulo de ferramenta de grupos serve para diferentes tipos de tarefas relacionadas co grupo:<ul><li>Permite crear grupos en diferentes modalidades (cantidade de grupos/membros do grupo, grupos unipersoais, intervalo de grupos) así como agrupamentos para cada grupo.</li><li>Ademais, pódese utilizar para ofrecerlle aos alumnos a posibilidade de rexistrarse en determinados grupos durante un período definido.</li><li>O módulo tamén ten a capacidade de cualificar en grupo, é dicir, copiar as cualificacións das actividades dun membro do grupo a outros membros do grupo.</li><li>Importación de usuarios a grupos mediante lista de números de identificación</li><li>cunha vista xeral de cada grupo de cursos, incluíndo todos os rexistros, membros, colas, etc. E a posibilidade de exportar estes datos a diferentes formatos de ficheiros (PDF/XLSX/ODS/TXT).</li><li>Lista exportábel de todos os usuarios do curso, incluíndo os seus rexistros, colas, etc.</li></ul><p>(!) Teña en conta que os grupos da ferramenta de grupos difiren fundamentalmente dos grupos estándar de Moodle do curso. Para garantir a coherencia entre os tipos de grupos, configure os parámetros da sección «Comportamento ante os cambios en Moodle» en «Seguir os cambios».</p>';
$string['modulenameplural'] = 'Ferramentas do grupos';
$string['moodlesync'] = 'Comportamento ante os cambios en Moodle';
$string['moodlesync_help'] = 'Como deberían comportarse os grupos ferramenta se se engaden/eliminan membros do grupo Moodle ou se eliminan grupos individuais';
$string['moreregsthanpossible'] = 'Os rexistros obrigatorios para o completado non poden ser máis do máximo permitido';
$string['move_user'] = 'Mover da cola ao grupo';
$string['movedown'] = 'Move 1 cara abaixo';
$string['moveup'] = 'Move 1 cara arriba';
$string['multiple'] = 'Xestionar usuarios do grupo';
$string['multiple_desc'] = 'Múltiples rexistros/baixas';
$string['must_specify_groupingname'] = 'Ten que darlle un nome ao agrupamento!';
$string['mustbegt0'] = 'O mínimo de grupos a escoller debe ser superior ou igual a 0. Non se admiten letras nin outros símbolos.';
$string['mustbegtoeqmin'] = 'Debe ser maior ou igual ao mínimo';
$string['mustbeposint'] = 'O número máximo de grupos a escoller debe ser superior ou igual a 1. Non se admiten letras nin outros símbolos.';
$string['mygroups_only_label'] = 'Amosar só as entradas das orixes que cualifiquei';
$string['myoverview_registrations_missing'] = 'Faltan rexistros';
$string['name_scheme_tags'] = '<span class="tag firstname">[nome]</span>
<span class="tag lastname">[apelido]</span>
<span class="tag idnumber">[número ID]</span>
<span class="tag username">[nome de usuario]</span>
<span class="tag alpha">@</span>
<span class="tag number">#</span>';
$string['nameschemenotunique'] = 'Os nomes de grupos deste esquema de nomes non son únicos ( <strong>{$a}</strong> ). Escolla outro ou use # (índice numérico) ou @ (índice alfabético) para crear nomes de grupos únicos.';
$string['namingscheme'] = 'Esquema de nomes';
$string['namingscheme_help'] = '<p>O esquema de nomes define como se nomearán os grupos automaticamente cando engada novos grupos.</p>
<p>Tome nota de:<br />
<ol><li>O nome dun grupo ten que ser único dentro do seu curso Moodle.</li>
<li>Se quere crear máis dun grupo de vez, ten que usar etiquetas para crear nomes únicos.</li></ol></p>
<p>Cada unha destas etiquetas substituirase nos nomes finais dos grupos. As etiquetas entre corchetes - [] - están relacionadas cos datos dos usuarios e os símbolos # e @ substituiranse polo número de serie do grupo. Se JavaScript está activado, pode, simplemente, premer nas etiquetas para anexalas ao esquema de nomes. Teña en conta que os nomes dos grupos teñen que ser únicos en cada curso e, polo tanto, é posíbel que teña que modificar o esquema de nomes ata que estea libre de conflitos.</p>';
$string['no_conflictfree_to_display'] = 'Non hai grupos sen conflitos para amosar. Polo tanto, tentamos amosar todo!';
$string['no_data_to_display'] = 'Non hai datos de grupo(s) para amosar!';
$string['no_grades_present'] = 'Non hai cualificacións para amosar';
$string['no_groupmembers_to_display'] = 'Non hai membros do grupo para amosar. Polo tanto, tentamos amosar todos os grupos.';
$string['no_groups_to_display'] = 'Non hai grupos para amosar!';
$string['no_queues_to_resolve'] = 'Non hai colas para resolver!';
$string['no_registrations'] = 'Sen rexistros';
$string['no_target_selected'] = 'Non hai ningún destino para a operación de copia seleccionada. Debe seleccionar polo menos 1 destino!';
$string['no_users_to_display'] = 'Non hai usuarios para amosar!';
$string['noaccess'] = 'Vostede non ten acceso a este módulo (quizais non pertenza ao grupo correcto?)!';
$string['nobody_queued'] = 'Ninguén na cola';
$string['nodeletion'] = 'A eliminación deste grupo está desactivada por mor de que polo menos unha instancia da ferramenta de grupos neste curso está configurada para volver crear o grupo ao eliminalo.';
$string['nogroupingselected'] = 'Non se seleccionaron agrupamentos.';
$string['nogroups'] = 'Non hai grupos neste curso.';
$string['nogroupsactive'] = 'Non hai grupos activos nesta ferramenta de grupos.';
$string['nogroupschoose'] = 'Escoller grupos';
$string['nogroupscreate'] = 'Crear grupos';
$string['nogroupsinactive'] = 'Non hai grupos inactivos nesta ferramenta de grupos.';
$string['nogrouptools'] = 'Non hai ferramentas de grupos!';
$string['nonconflicting'] = 'Sen conflitos';
$string['noregistrationdue'] = 'sen límite';
$string['nosmallgroups'] = 'Evitar grupos pequenos';
$string['nosmallgroups_help'] = 'Se está activado, garante que cada grupo estea cuberto polo menos nun 70 % do seu tamaño. Se un (ou máis precisamente o último) grupo se enchese a menos do 70%, os usuarios deste grupo repártense entre outros grupos, o que fai que teñan máis membros dos especificados.';
$string['not_allowed_to_show_members'] = 'Vostede non tes permiso para ver esta información!';
$string['not_graded_by_me'] = 'Cualificado por outro usuario';
$string['not_in_queue_or_registered'] = '<strong>{$a->username}</strong> non está nin rexistrado nin en cola no grupo <strong>{$a->groupname}</strong>';
$string['not_permitted'] = 'Non permitido';
$string['not_registered'] = 'Vostede aínda non está rexistrado!';
$string['not_synced_reg_present'] = 'están presentes rexistros sen sincronizar';
$string['notenoughregs'] = 'O usuario necesita máis rexistros!';
$string['nothing_to_push'] = 'Nada para enviar';
$string['notification:group_recreated'] = 'Volveuse crear o grupo <a href="{$a->groupurl}" title="{$a->groupname}">{$a->groupname}</a> por mor de que a ferramenta de grupos <a href="{$a->grouptoolurl}" title="{$a->grouptoolname}">{$a->grouptoolname}</a> está configurada para volver crear os grupos eliminados.';
$string['notification:registrations_recreated'] = 'Os membros do grupo <a href="{$a->groupurl}" title="{$a->groupname}">{$a->groupname}</a> foron engadidos de novo por mor de que a ferramenta de grupos <a href="{$a->grouptoolurl}" title="{$a->grouptoolname}">$a->grouptoolname}</a> está configurada para volver crear os grupos eliminados. O propio grupo foi creado de novo por outra instancia da ferramenta de grupos.';
$string['nowhere_queued'] = 'Non está en cola';
$string['number_of_groups'] = 'Número N de grupos';
$string['number_of_members'] = 'Número M de membros do grupo';
$string['number_of_students'] = 'Número de alumnos';
$string['occupied'] = 'Ocupado';
$string['onenewgrouping'] = 'En UN novo agrupamento';
$string['onenewgroupingpergroup'] = 'Un agrupamento POR grupo';
$string['orientation'] = 'Orientación do PDF';
$string['outdated'] = 'desviándose';
$string['overflowwarning'] = 'Se continúa importando, superarase o tamaño do grupo na instancia <strong>{$a->instancename}</strong>!';
$string['overview'] = 'Vista xeral';
$string['overview_alt'] = 'Vista xeral dos grupos e membros do grupo';
$string['overview_tab'] = 'Vista do grupo';
$string['overview_tab_alt'] = 'Abrir a vista do grupo';
$string['overwrite_label'] = 'Sobrescribir as cualificacións existentes';
$string['place_allocated_in_group_success'] = 'O grupo <strong>{$a->groupname}</strong> foi marcado correctamente para o rexistro';
$string['pluginadministration'] = 'Administración da ferramenta de grupos';
$string['pluginname'] = 'Ferramenta de grupos';
$string['portrait'] = 'Vertical';
$string['preview'] = 'Vista previa';
$string['privacy:metadata:agrpid'] = 'Identificador da representación do grupo Moodle na ferramenta de grupos.';
$string['privacy:metadata:enrolexplanation'] = 'A ferramenta de grupos matricula usuarios que aínda non están matriculados no curso durante a importación para poder engadilos ao(s) grupo(s) ao(s) que importar.';
$string['privacy:metadata:gradesexplanation'] = 'A ferramenta de grupos e quen de copiar as cualificacións dun usuario a outros membros do mesmo grupo.';
$string['privacy:metadata:groupexplanation'] = 'A ferramenta de grupos está a xestionar os membros dos grupos de Moodle.';
$string['privacy:metadata:messageexplanation'] = 'A ferramenta de grupos envía mensaxes aos usuarios que están promovidos dende a cola ata que se rexistran.';
$string['privacy:metadata:mod_grouptool_group_filter'] = 'Para que grupo filtrar?';
$string['privacy:metadata:mod_grouptool_mygroups_only'] = 'Só deberían considerarse/amosarse grupos propios.';
$string['privacy:metadata:modified_by'] = 'Identificador do usuario se foi modificado por outra persoa.';
$string['privacy:metadata:queued'] = 'Contén todos os usuarios da cola.';
$string['privacy:metadata:registered'] = 'Contén os usuarios rexistrados e os usuarios marcados para o rexistro.';
$string['privacy:metadata:timestamp'] = 'Data e hora na que se modificou o rexistro por última vez.';
$string['privacy:metadata:userid'] = 'Identificador do usuario.';
$string['queue'] = 'Cola';
$string['queue_and_multiple_reg_title'] = 'Colas e múltiples rexistros';
$string['queue_in_group'] = 'Continuar coa cola <strong>{$a->username}</strong> no grupo <strong>{$a->groupname}</strong> ?';
$string['queue_in_group_success'] = 'Posto na cola correctamente <strong>{$a->username}</strong> no grupo <strong>{$a->groupname}</strong> !';
$string['queue_you_in_group'] = 'Proceder a poñelo na cola no grupo <strong>{$a->groupname}</strong> ?';
$string['queue_you_in_group_success'] = 'Foi posto correctamente na cola no grupo <strong>{$a->groupname}</strong> !';
$string['queued'] = 'Na cola';
$string['queued_in_group_info'] = '<strong>{$a->username}</strong> en cola no grupo <strong>{$a->groupname}</strong>';
$string['queued_on_rank'] = 'En cola no posto nº {$a}';
$string['queueing_is'] = 'Facer cola é';
$string['queues'] = 'Colas';
$string['queues_max'] = 'Máx. de lugares na cola simultáneos por participante';
$string['queuesgrp'] = 'Cola e máximo de lugares na cola';
$string['queuesgrp_help'] = 'Se están activadas as colas, os alumnos que tentan rexistrarse nun grupo completo, quedan na cola ata que alguén se dea de baixa do mesmo grupo. Unha vez rematado o prazo, o profesor ten a posibilidade de mover os alumnos a outros grupos se aínda están na cola, onde os grupos se enchen utilizando a orde de clasificación actual da lista de grupos. Debe definir un número máximo de grupos nos que se pode poñer na cola un usuario.<br /> Limita o máximo de entradas de cola simultáneas para cada persoa nesta ferramenta de grupos.';
$string['queuesizeerror'] = 'O numero de lugares na cola debe ser superior ou igual a 0. Non se admiten letras nin outros símbolos.';
$string['queuespresent'] = 'As colas xa están presentes! Estas colas eliminaranse se continúa. Para continuar prema de novo no botón de gardar!';
$string['queuespresenterror'] = 'Hai usuarios listados nas colas. No pode desactivar as colas ata que se resolvan.';
$string['rank'] = 'Posición';
$string['recreate_group'] = 'Volver crear o grupo';
$string['reference_grade_feedback'] = 'Cualificación de referencia / Comentarios';
$string['refresh_table_button'] = 'Actualizar a vista previa';
$string['reg_in_full_group'] = 'Non é posíbel o rexistro de <strong>{$a->username}</strong> no grupo <strong>{$a->groupname}</strong> , xa que o grupo está cheo.';
$string['reg_not_open'] = 'Non é posíbel o rexistro polo momento. Quizais o prazo rematou ou non se permitiu en absoluto.';
$string['reg_you_in_full_group'] = 'Non é posíbel rexistrarse no grupo <strong>{$a->groupname}</strong> , xa que o grupo está cheo!';
$string['register'] = 'Rexistrar';
$string['register_in_group'] = 'Confirma que quere rexistrar a <strong>{$a->username}</strong> no grupo <strong>{$a->groupname}</strong> ?';
$string['register_in_group_success'] = '<strong>{$a->username}</strong> está rexistrado correctamente no grupo <strong>{$a->groupname}</strong> !';
$string['register_you_in_group'] = 'Confirma que quere rexistrarse no grupo <strong>{$a->groupname}</strong> ?';
$string['register_you_in_group_success'] = 'Vostede rexistrouse correctamente no grupo <strong>{$a->groupname}</strong> !';
$string['register_you_in_group_successmail'] = 'Vostede rexistrouse correctamente no grupo <strong>{$a->groupname}</strong> !';
$string['register_you_in_group_successmailhtml'] = 'Vostede rexistrouse correctamente no grupo <strong>{$a->groupname}</strong> !';
$string['registered'] = 'Rexistrado';
$string['registered_in_group_info'] = '{$a->username} está rexistrado no grupo <strong>{$a->groupname}</strong>';
$string['registered_on_rank'] = 'Rexistrado no posto nº {$a}';
$string['registration_missing'] = 'Falta 1 rexistro';
$string['registration_period_end'] = 'Fin do rexistro para';
$string['registration_period_start'] = 'Comezo do rexistro para';
$string['registrationdue'] = 'Fin do rexistro';
$string['registrationnotification'] = '{$a->course->shortname} -> {$a->modulenameplural} -> {$a->grouptoolname}
----------------------------------------------------------
{$a->message}
----------------------------------------------------------';
$string['registrations'] = 'Rexistros de grupos';
$string['registrations_missing'] = 'Faltan {$a} rexistros';
$string['regpresent'] = 'O usuario xa é {$a}';
$string['rename_failed'] = 'Fallou o cambio de nome!';
$string['renamed_group'] = 'Grupo renomeado!';
$string['require_registration'] = 'Requirir rexistros';
$string['require_registration_help'] = 'Cantidade mínima de grupos nos que os alumnos deben rexistrarse para marcar esta actividade como rematada. Os puntos nas colas non son considerados pola regra. Se o número é superior a 1, hai que activar «Múltiples rexistros» e «Máximo de grupos a escoller» debe ser maior ou igual a este valor.';
$string['reset_agrps'] = 'Restabelecer grupos activos';
$string['reset_agrps_help'] = 'Restabelece todos os grupos de cursos para que estean inactivos para as ferramentas de grupos. Isto tamén eliminará todos os rexistros e colas nas ferramentas de grupos deste curso.';
$string['reset_queues'] = 'Restabelecer as colas';
$string['reset_queues_help'] = 'As colas elimínanse automaticamente se se restabelecen os grupos.';
$string['reset_registrations'] = 'Restabelecer os rexistros';
$string['reset_registrations_help'] = 'Os rexistros elimínanse automaticamente se se restabelecen os grupos activos.';
$string['reset_transparent_unreg'] = 'Dar de baixa o rexistro de todos os membros do grupo';
$string['reset_transparent_unreg_help'] = 'Retirar todos os usuarios deses grupos que están representados por grupos activos de ferramentas de grupos';
$string['resize'] = 'Cambiar o tamaño';
$string['resized_group'] = 'Cambiou o tamaño do grupo!';
$string['resolve_queue'] = 'Resolver colas';
$string['resolve_queue_legend'] = 'Resolver colas';
$string['resolve_queue_title'] = 'Resolver colas pendentes';
$string['search:activity'] = 'Ferramenta de grupos: información da actividade';
$string['select'] = 'Seleccionar';
$string['selected'] = 'Seleccionado';
$string['selectfromcohort'] = 'Seleccionar os membros do círculo';
$string['selectfromgroup'] = 'Seleccionar os membros do grupo';
$string['selectfromgroup_help'] = 'Asignar só os membros do grupo indicado a grupos creados recentemente';
$string['selectfromgrouping'] = 'Seleccionar os membros do agrupamento';
$string['selectfromgrouping_help'] = 'Asignar só os membros do agrupamento en grupos creados recentemente';
$string['selectmultiple'] = 'seleccionar varios';
$string['selectsingle'] = 'seleccionar só un';
$string['selfregistration'] = 'Rexistro';
$string['selfregistration_alt'] = 'Rexistrarse nun ou máis grupos (dependendo dos axustes)';
$string['setactive'] = 'Activar';
$string['setinactive'] = 'Desactivar';
$string['settingspage'] = 'Editar os axustes de grupo';
$string['show_members'] = 'Amosar os membros do grupo';
$string['show_members_help'] = 'Permite aos alumnos (en determinadas circunstancias) ver quen está xa rexistrado nun grupo.<br />
<ul>
    <li> <strong>Non:</strong> non amosar os membros dos grupos en absoluto</li>
    <li> <strong>Todos - após a data límite:</strong> amosa os membros dos grupos de todos os grupos após a data límite</li>
    <li> <strong>Propio - após a data límite:</strong> amosa os membros dos propios grupos do usuario após a data límite</li>
    <li> <strong>Propio - após o rexistro:</strong> amosa os membros dos propios grupos do usuario após de que este se rexistrase ou fose rexistrado por outra persoa</li>
    <li> <strong>Si:</strong> amosar os membros dos grupos</li>
</ul>';
$string['showafterdue'] = 'Todo - após a data límite';
$string['showownafterdue'] = 'Propio - após a data límite';
$string['showownafterreg'] = 'Propio - após o rexistro';
$string['size'] = 'Tamaño do grupo';
$string['size_grp'] = 'Axustes do tamaño do grupo';
$string['size_grp_help'] = 'Se o tamaño do grupo está activado, o número máximo de membros para cada grupo queda limitado (estabelecido para toda a instancia mediante un campo de texto). Se ademais está activado o «tamaño individual», o tamaño do grupo para cada grupo pódese definir na seguinte lista.';
$string['skip_user_import'] = 'Omitir para importar';
$string['skipped'] = 'Omitido';
$string['sortlist_no_data'] = 'Non hai grupos presentes polo momento!';
$string['source'] = 'Orixe';
$string['source_missing'] = 'Non hai ningunha orixe para copiar!';
$string['sources_missing'] = 'Hai polo menos 1 grupo sen unha orixe escollida para copiar!';
$string['start'] = 'Iniciar';
$string['status'] = 'Estado';
$string['status_help'] = '<ul>
<li><strong>✔</strong> rexistrado no grupo Moodle e na ferramenta de grupos</li>
<li> <strong>?</strong> rexistrado no grupo Moodle mais non na ferramenta de grupos</li>
<li> <strong>+</strong> rexistrado na ferramenta de grupos mais no no grupo Moodle e</li>
<li> <strong>1, 2, 3...</strong> na ferramenta de grupos</li>
</ul>';
$string['successfully_deleted_groups'] = 'Grupos eliminados correctamente!';
$string['swapped_groups'] = 'Grupos intercambiados <strong>{$a->a}</strong> (orde <strong>{$a->aorder}</strong>) and <strong>{$a->b}</strong> (orde <strong>{$a->border}</strong>)!';
$string['switched_to_all_groups'] = 'Cambióuselle o filtro de grupo a todos os grupos.';
$string['target'] = 'Destino';
$string['too_many_queue_places'] = 'Non é posíbel poñer a <strong>{$a->username}</strong> no grupo <strong>{$a->groupname}</strong> por mor de que <strong>{$a->username}</strong> xa está na cola en demasiados grupos.';
$string['too_many_regs'] = 'O usuario xa está rexistrado/en cola en demasiados grupos!';
$string['toolessregspresent'] = 'Polo menos 1 usuario está rexistrado en menos grupos, polo que mínimo de grupos a escoller debe ser como máximo {$a}.';
$string['toomanyregs'] = 'Atención: polo menos nun grupo hai máis membros do grupo dos especificados polo novo tamaño de grupo desexado.<br /> Reduza os membros do grupo antes de cambiar o tamaño do grupo.';
$string['toomanyregspresent'] = 'Polo menos 1 usuario está rexistrado en demasiados grupos, polo que o máximo de grupos a escoller ten que ser polo menos {$a}.';
$string['total'] = 'Total';
$string['unqueue'] = 'Retirar da cola';
$string['unqueue_from_group'] = 'Quere continuar retirando a <strong>{$a->username}</strong> da cola do grupo <strong>{$a->groupname}</strong> ?';
$string['unqueue_from_group_success'] = 'Retirado <strong>{$a->username}</strong> correctamente da cola do grupo <strong>{$a->groupname}</strong> !';
$string['unqueue_you_from_group'] = 'Quere continuar retirándose da cola do grupo <strong>{$a->groupname}</strong> !';
$string['unqueue_you_from_group_success'] = 'Retirado correctamente da cola do grupo <strong>{$a->groupname}</strong> !';
$string['unreg'] = 'Dar de baixa';
$string['unreg_from_group'] = 'Continuar dando de baixa o rexistro de <strong>de {$a->username}</strong> do grupo <strong>{$a->groupname}</strong> ?';
$string['unreg_from_group_success'] = 'Deuse correctamente de baixa o rexistro de <strong>de {$a->username}</strong> do grupo <strong>{$a->groupname}</strong> !';
$string['unreg_is'] = 'Baixa';
$string['unreg_not_allowed'] = 'Non se permite dar de baixa!';
$string['unreg_you_from_group'] = 'Quere continuar dándose de baixa do rexistro do grupo <strong>{$a->groupname}</strong> ?';
$string['unreg_you_from_group_success'] = 'Deuse correctamente de baixa do grupo <strong>{$a->groupname}</strong> !';
$string['unregfrommgroups'] = 'Forzar a baixa da ferramenta de grupos';
$string['unregfrommgroups_help'] = 'Dar de baixa o rexistro de usuarios non só da ferramenta de grupos, senón tamén do grupo de Moodle.';
$string['unregister'] = 'Baixa';
$string['unregister_conflict_user_not_in_group'] = 'O usuario <strong>{$a->fullname}</strong> non está no grupo <strong>{$a->groupname}</strong> !';
$string['unregister_desc'] = 'Dar de baixa o rexistro de varios usuarios';
$string['unregister_from_inactive_group_warning'] = 'Nota: o grupo <strong>{$a}</strong> está actualmente inactivo no contexto da ferramenta de grupos e, polo tanto, non se amosará.';
$string['unregister_in_inactive_group_warning'] = 'Nota: o grupo <strong>{$a}</strong> está actualmente inactivo no contexto da ferramenta de grupos e, polo tanto, non se amosará.';
$string['unregister_progress_completed'] = 'Baixas completadas';
$string['unregister_progress_preview_completed'] = 'Completouse a vista previa da baixa';
$string['unregister_progress_start'] = 'Iniciar a baixa';
$string['unregister_progress_unregister'] = 'Dar de baixa o usuario';
$string['unregister_skipped'] = 'Omitiuse o usuario <strong>{$a->fullname}</strong> para o grupo <strong>{$a->groupname}</strong>!';
$string['unregister_user'] = 'A baixa do rexistro de <strong>{$a->fullname}</strong> ( <strong>{$a->idnumber}</strong> ) do grupo <strong>{$a->groupname}</strong> fíxose correctamente.';
$string['unregister_user_from_moodle_group'] = 'A baixa do rexistro de <strong>{$a->fullname}</strong> ( <strong>{$a->idnumber}</strong> ) do grupo de moodle <strong>{$a->groupname}</strong> fíxose correctamente.';
$string['unregister_user_not_in_group'] = 'O usuario <strong>{$a->fullname}</strong> ( <strong>{$a->idnumber}</strong> ) non está no grupo <strong>{$a->groupname}</strong> !';
$string['unregister_user_only_in_moodle_group'] = 'O usuario <strong>{$a->fullname}</strong> só está no grupo de Moodle <strong>{$a->groupname}</strong> pero non no grupo da ferramenta de grupos!';
$string['unregister_user_prev'] = 'Dando de baixa o rexistro de <strong>{$a->fullname}</strong> ( <strong>{$a->idnumber}</strong> ) do grupo <strong>{$a->groupname}</strong> .';
$string['unregisterbutton'] = 'Dar de baixa usuarios';
$string['update_grouplist_success'] = 'Grupos activos actualizados correctamente!';
$string['updatemdlgrps'] = 'Rexístrese en grupos de Moodle';
$string['uptodate'] = 'actualizado';
$string['use_all_or_chosen'] = 'Usar todo ou o seleccionado';
$string['use_all_or_chosen_help'] = 'Seleccione «Todos» para crear un agrupamento para cada grupo de curso. Use «Seleccionado» para crear agrupamentos só para os grupos marcados.';
$string['use_individual'] = 'Usar o tamaño individual por grupo';
$string['use_individual_help'] = 'Anular o tamaño global do grupo cun valor individual para cada grupo. Estabelécense a través da lista de grupos ordenábeis na parte inferior.';
$string['use_queue'] = 'Usar colas';
$string['use_queue_help'] = 'Os alumnos poden facer cola para os grupos xa cheos. Esta configuración só se pode usar se o rexistro automático está activado e se estabelece un límite de tamaño de grupo.';
$string['use_size'] = 'Activar';
$string['user_has_too_less_regs'] = 'Non é posíbel a baixa/retirada da cola porque <strong>{$a->username}</strong> está rexistrado/en cola en moi poucos grupos!';
$string['user_is_deleted'] = 'A conta de usuario atopada de (ID <strong>{$a->id}</strong> , Nome <strong>{$a->fullname}</strong> ) xa está eliminada. Polo tanto, non é posíbel o rexistro neste curso.';
$string['user_move_prev'] = '<strong>{$a->user}</strong> moverase da cola do grupo <strong>{$a->from_group}</strong> ao grupo <strong>{$a->to_group}</strong> !';
$string['user_moved'] = '<strong>{$a->}}</strong> foi movido da cola do grupo <strong>{$a->from_group}</strong> ao grupo <strong>{$a->to_group}</strong> !';
$string['user_not_found'] = 'Non foi posíbel atopar o usuario <strong>{$a}</strong> !';
$string['userlist'] = 'Lista de usuarios';
$string['userlist_alt'] = 'Ver a lista de usuarios e os seus rexistros. Exportar datos sobre usuarios e os seus grupos en diferentes formatos (PDF, texto simple, Excel, etc.).';
$string['userlist_help'] = 'Lista de números ID separados por un ou máis dos seguintes caracteres<ul><li> [,] coma</li><li> [;] punto e coma</li><li> [ ] espazo</li><li> [\\n] nova liña</li><li> [\\r] retorno de carro</li><li> [\\t] tabulador</li></ul>';
$string['userlist_tab'] = 'Vista do curso';
$string['userlist_tab_alt'] = 'Abrir a vista do curso';
$string['users_queues_limit'] = 'Lugares de cola por usuario';
$string['users_queues_limit_help'] = 'Limitar os lugares dispoñíbeis da cola por usuario se está activado';
$string['users_tab'] = 'Participantes';
$string['users_tab_alt'] = 'Amosar os participantes';
$string['view_registrations'] = 'Ver os rexistros';
$string['viewmoodlegroups'] = 'Aos grupos de Moodle';
$string['with_selection'] = 'Coa selección...';
$string['you_are_already_marked'] = 'Vostede xa marcou o grupo <strong>{$a->groupname}</strong> para rexistrarse!';
$string['you_are_already_queued'] = 'Vostede xa está na cola no grupo <strong>{$a->groupname}</strong> !';
$string['you_are_already_registered'] = 'Vostede xa está rexistrado no grupo <strong>{$a->groupname}</strong> !';
$string['you_are_not_in_queue_or_registered'] = 'Vostede non está rexistrado nin en cola no grupo <strong>{$a->groupname}</strong>';
$string['you_change_group_to_success'] = 'Cambio de grupo correcto! Agora está rexistrado no grupo <strong>{$a->groupname}</strong> !';
$string['you_have_too_less_regs'] = 'Non é posíbel a baixa/retirada da cola porque está rexistrado/en cola en moi poucos grupos!';
$string['you_have_too_many_queue_places'] = 'Non é posíbel poñelo a vostede na cola no grupo <strong>{$a->groupname}</strong> porque xa está en demasiados grupos!';
$string['your_place_allocated_in_group_success'] = 'Vostede marcou correctamente o grupo <strong>{$a->groupname}</strong> para rexistrarse';
