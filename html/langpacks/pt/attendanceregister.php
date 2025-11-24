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
 * Strings for component 'attendanceregister', language 'pt', version '4.5'.
 *
 * @package     attendanceregister
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['are_you_sure_to_delete_offline_session'] = 'Tem a certeza de que pretende apagar esta sessão offline?';
$string['attendanceregister:addinstance'] = 'Adicionar uma nova instância de Registo de presenças';
$string['attendanceregister:addotherofflinesess'] = 'Pode adicionar sessões offline no registo de outras pessoas';
$string['attendanceregister:addownofflinesess'] = 'Pode adicionar sessões offline no seu próprio registo';
$string['attendanceregister:deleteotherofflinesess'] = 'Pode apagar sessões offline no registo de outras pessoas';
$string['attendanceregister:deleteownofflinesess'] = 'Pode apagar sessões offline no seu próprio registo';
$string['attendanceregister:recalcsessions'] = 'Pode forçar o recalculo das sessões do Registo de presenças';
$string['attendanceregister:tracked'] = 'É monitorizado pelo Registo de presenças';
$string['attendanceregister:viewotherregisters'] = 'Pode visualizar o Registo de presenças de outros';
$string['attendanceregister:viewownregister'] = 'Pode visualizar o seu próprio Registo de presenças';
$string['back_to_normal'] = 'Versão normal';
$string['back_to_tracked_user_list'] = 'Voltar à lista de utilizadores';
$string['click_for_detail'] = 'clique para detalhes';
$string['comments'] = 'Comentários';
$string['completiondurationgroup'] = 'Total de tempo monitorizado';
$string['completiontotalduration'] = 'Requer tempo [minutos]';
$string['count'] = '#';
$string['crontask'] = 'Recalcular registos de presenças das sessões';
$string['dayscertificable'] = 'Dias atrás';
$string['dayscertificable_exceeded'] = 'Não pode ser mais do que {$a} dias atrás';
$string['dayscertificable_help'] = 'Limita a "idade" das sessões offline.<br />
Um aluno não pode registar uma sessão offline mais \'antiga\' do que o número de dias aqui indicado.';
$string['duration'] = 'Duração';
$string['duration_hh_mm'] = '{$a->hours} h {$a->minutes} min';
$string['duration_mm'] = '{$a->minutes} min';
$string['enable_offline_sessions_certification'] = 'Permitir sessões offline';
$string['end'] = 'Fim';
$string['first_calc_at_next_cron_run'] = 'Qualquer sessão anterior será mostrada após a próxima execução do Cron';
$string['force_recalc_all_session'] = 'Recalcular todas as sessões online';
$string['force_recalc_all_session_help'] = 'Apagar e recalcular todas as sessões online dos utilizadores monitorizados.<br />
Normalmente <b>não é necessário</b> fazê-lo! <br />
Novas sessões são calculadas automaticamente em segundo plano (com algum atraso).<br />
Esta operação pode ser útil <b>apenas</b>:
<ul>
<li>Depois de mudar o papel do utilizador, anteriormente tinha um papel diferente numa das disciplinas supervisionadas (por exemplo, mudar de professor para aluno, quando o aluno é monitorizado e o professor não é).</li>
<li>Depois de modificar as configurações do Registo de presenças que afetam o cálculo das sessões (por exemplo, <i>Modo de registo de presenças</i>,
<i>Tempo limite da sessão online</i>)</li>
</ul>
<b>Não é necessário recalcular quando se inscreve novos utilizadores</b>!<br /><br />
O recalculo pode ser executado imediatamente ou agendado para execução na próxima execução do Cron. A execução programada pode ser mais eficiente em disciplinas com muitos utilizadores.';
$string['force_recalc_all_session_now'] = 'Recalcular sessões';
$string['force_recalc_user_session'] = 'Recalcular as sessões online deste utilizador';
$string['force_recalc_user_session_help'] = 'Apagar e recalcular todas as sessões online deste utilizador.<br />
Normalmente <b>não é necessário</b> fazê-lo! <br />
Novas sessões são calculadas automaticamente em segundo plano (com algum atraso).<br />
Esta operação pode ser útil <b>apenas</b>:
<ul>
<li>Depois de mudar o papel do utilizador, anteriormente tinha um papel diferente numa das disciplinas supervisionadas (por exemplo, mudar de professor para aluno, quando o aluno é monitorizado e o professor não é).</li>
<li>Depois de modificar as configurações do Registo que afetam o cálculo das sessões (por exemplo, <i>Modo de registo de presenças</i>,
<i>Tempo limite da sessão online</i>)</li>
</ul>';
$string['fullname'] = 'Nome';
$string['grandtotal_time'] = 'Tempo total';
$string['insert_new_offline_session'] = 'Inserir uma nova sessão de trabalho offline';
$string['insert_new_offline_session_for_another_user'] = 'Inserir uma nova sessão de trabalho offline para {$a->fullname}';
$string['last_calc_online_session_logout'] = 'Fim da última sessão online registada (exceto sessão atual)';
$string['last_session_logout'] = 'Fim da última sessão';
$string['last_site_access'] = 'Última atividade no site';
$string['last_site_login'] = 'Último início de sessão no site';
$string['login_must_be_before_logout'] = 'Início após o fim!';
$string['logout_is_future'] = 'Não pode ser no futuro';
$string['mandatory_offline_sessions_comments'] = 'Comentários obrigatórios';
$string['mandatoryofflinespecifycourse'] = 'Obrigatória a seleção da disciplina';
$string['mandatoryofflinespecifycourse_help'] = 'Será obrigatório especificar uma disciplina em sessões offline';
$string['maynotaddselfcertforother'] = 'Não pode adicionar sessões offline para outros utilizadores.';
$string['mod_attendance_recalculation'] = 'O módulo recalcula o registo para atualizar as sessões';
$string['modulename'] = 'Registo de presenças';
$string['modulename_help'] = 'O Registo de presenças calcula o tempo que os utilizadores estiveram a trabalhar online nas disciplinas.<br />
Opcionalmente, permite o registo de atividades offline dos utilizadores.<br />
Dependendo do modo de registo, o Registo de presenças pode monitorizar atividades numa só disciplina, em todas as disciplinas de uma categoria ou em todas as disciplinas "Meta-ligadas" à disciplina na qual o Registo de presenças foi adicionado.<br />
As sessões de trabalho online são calculadas através das entradas do registo guardadas pelo Moodle.<br />
<b>As novas sessões online são adicionadas pelo Cron, com algum atraso, após o utilizador terminar sessão.</b>';
$string['modulenameplural'] = 'Registos de Presenças';
$string['myattendanceregisteraggregates'] = 'O meu registo de presença agrega valores';
$string['myattendanceregistersessions'] = 'As sessões do meu registo de presença';
$string['never'] = '(nunca)';
$string['no_refcourse'] = '(nenhum disciplina especificada)';
$string['no_session'] = 'Sem sessão';
$string['no_session_for_this_user'] = '- Sem sessão para este utilizador -';
$string['no_tracked_user'] = '- Nenhum utilizador monitorizado neste Registo de presenças -';
$string['not_specified'] = '(não especificado)';
$string['offline'] = 'Offline';
$string['offline_refcourse_duration'] = 'Duração offline, Disciplina:';
$string['offline_session_comments'] = 'Comentários';
$string['offline_session_comments_help'] = 'Descreva o tópico da sessão de trabalho offline.';
$string['offline_session_deleted'] = 'Apagada sessão offline';
$string['offline_session_end'] = 'Fim';
$string['offline_session_ref_course'] = 'Ref.Disciplina';
$string['offline_session_ref_course_help'] = 'Selecionar a disciplina em que foi feito o trabalho offline ou a disciplina onde está o tópico do trabalho.';
$string['offline_session_saved'] = 'Guardada nova sessão offline';
$string['offline_session_start'] = 'Início';
$string['offline_session_start_help'] = 'Selecione a data de início e data de fim & Hora da sessão de trabalho offline que deseja submeter.<br />
A sessão offline não pode sobrepor-se com nenhuma sessão já gravada, seja online ou offline, nem com a sessão online atual.';
$string['offline_sessions_certification'] = 'Sessões  de trabalho offline';
$string['offline_sessions_certification_help'] = 'Permite que os utilizadores insiram sessões de trabalho offline.<br />
É um tipo de <i>auto certificação</i> do trabalho realizado.<br />
Pode ser útil se a "burocracia" requer a manutenção de um registo das atividades de cada aluno.<br />
Apenas utilizadores reais podem adicionar sessões offline: <i>Autenticado como ... </i> administrador não pode!';
$string['offline_sessions_total_duration'] = 'Total Offline';
$string['offlinecomments'] = 'Comentários do utilizador';
$string['offlinecomments_help'] = 'Permite adicionar comentários às sessões offline';
$string['offlinespecifycourse'] = 'Especificar a disciplina das sessões offline';
$string['offlinespecifycourse_help'] = 'Permite que o utilizador selecione a disciplina que está relacionada com a sessão offline.<br />
Apenas é significativo se o Registo de presenças monitorizar mais do que uma disciplina (ou seja, se o Modo de registo é "Todas as disciplinas da mesma categoria" ou "Todas as disciplinas ligadas por meta-disciplina")';
$string['online'] = 'Online';
$string['online_offline'] = 'Online/Offline';
$string['online_session_updated'] = 'Sessões online atualizadas';
$string['online_session_updated_report'] = 'As sessões online de {$a->fullname} foram atualizadas: encontradas {$a->numnewsessions} novas sessões';
$string['online_sessions_total_duration'] = 'Total de tempo das sessões online';
$string['onlyrealusercanaddofflinesessions'] = 'Apenas um utilizador real pode adicionar sessões offline';
$string['onlyrealusercandeleteofflinesessions'] = 'Apenas um utilizador real pode apagar sessões offline';
$string['overlaps_current_session'] = 'Sobrepõe-se com a sessão online atual (desde o início da sessão atual)';
$string['overlaps_old_sessions'] = 'Sobrepõe-se com outra sessão, online ou offline';
$string['participants_attendance_report_viewed'] = 'Visualizado o relatório de presenças dos participantes';
$string['pluginadministration'] = 'Administração do Registo de presenças';
$string['pluginname'] = 'Registo de presenças';
$string['prev_site_login'] = 'Penúltimo início de sessão no site';
$string['recalc_already_pending'] = '(agendado para a próxima execução do Cron)';
$string['recalc_complete'] = 'Recalculo das sessões concluído com sucesso';
$string['recalc_scheduled'] = 'O recalculo das sessões foi agendado. Será executado na próxima execução do Cron';
$string['recalc_scheduled_on_next_cron'] = 'O recalculo das sessões está agendado para a próxima execução do Cron';
$string['ref_course'] = 'Disciplina Ref.';
$string['registername'] = 'Nome do registo';
$string['registertype'] = 'Modo de registo de presenças';
$string['registertype_help'] = 'O modo de registo de presenças determina quais as disciplinas monitorizadas pelo Registo de presenças (ou seja, onde será monitorizada a atividade do utilizador):<br/>
* _Apenas esta disciplina_: apenas na disciplina onde está o módulo do Registo de presenças.<br/>
* _Todas as disciplinas da mesma categoria_: será monitorizada a atividade em todas as disciplinas da categoria desta disciplina.<br/>
* _Todas as disciplinas ligadas por meta-disciplina_: será monitorizada a atividade nesta disciplina assim como em todas as disciplinas ligadas por meta-disciplina.';
$string['schedule_reclalc_all_session'] = 'Agendar "Recalcular sessões"';
$string['select_a_course'] = '- Selecione uma disciplina -';
$string['select_a_course_if_any'] = '- Selecione uma disciplina (se alguma) -';
$string['session_added_by_another_user'] = 'Adicionada por: {$a}';
$string['sessions_grandtotal_duration'] = 'Tempo Total';
$string['sessiontimeout'] = 'Tempo limite de sessão online';
$string['sessiontimeout_help'] = 'O tempo limite de sessão é usado para estimar a duração da sessão online.<br />As sessões online terão pelo menos <b>metade</b> do tempo limite de sessão.<br />
Tenha em atenção que, se o tempo limite da sessão for muito longo, o Registo tende a super-estimar a duração das sessões online.<br />Se for muito curto, sessões reais serão divididas em muitas sessões mais curtas.<br />
<h4>Explicação longa</h4>
As sessões de trabalho online são <b>estimadas</b> de acordo com as entradas no registo do utilizador nas disciplinas monitorizadas (ver <i>Modo de registo de presenças</i>).<br/>
Se existir um período de tempo menor do que o tempo limite de sessão entre duas entradas consecutivas do registo, o Registo considera que o utilizador esteve continuamente online (ou seja, a sessão continuou).<br />
Se passou um período de tempo maior que o tempo limite da sessão, o Registo entende que o utilizador interrompeu o trabalho online <b>metade</b> do tempo limite de sessão após a entrada anterior do registo (ou seja, terminou a sessão) e voltou novamente na entrada seguinte do registo (ou seja, iniciou uma nova sessão)';
$string['show_my_sessions'] = 'Mostrar as minhas sessões';
$string['show_printable'] = 'Versão para impressão';
$string['standardlog_disabled'] = 'O registo do Moodle não está ativado. A sessão de todos os novos utilizadores não está a ser monitorizada';
$string['standardlog_readonly'] = 'O registo do Moodle é só de leitura. A sessão de todos os novos utilizadores não está a ser monitorizada';
$string['start'] = 'Início';
$string['total_time_offline'] = 'Total Offline';
$string['total_time_online'] = 'Total Online';
$string['tracked_courses'] = 'Disciplinas monitorizadas';
$string['tracked_users'] = 'Utilizadores monitorizados';
$string['type_category'] = 'Todas as disciplinas da mesma categoria';
$string['type_course'] = 'Apenas esta disciplina';
$string['type_meta'] = 'Todas as disciplinas ligadas por meta-disciplina';
$string['unknown'] = '(desconhecido)';
$string['unreasoneable_session'] = 'Tem a certeza? Esta operação demorará mais do que {$a} horas!';
$string['updating_online_sessions_of'] = 'A atualizar sessões online de {$a}';
$string['user_attendance_addoffline'] = 'Utilizador adicionou um registo de presença offline';
$string['user_attendance_deloffline'] = 'Utilizador apagou um registo de presença offline';
$string['user_attendance_details_viewed'] = 'Visualizados detalhes das presenças do utilizador';
$string['user_sessions_summary'] = 'Resumo das sessões do utilizador';
