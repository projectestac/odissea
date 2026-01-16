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
 * Strings for component 'enrol', language 'pt', version '4.5'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Módulos de inscrição disponíveis';
$string['addinstance'] = 'Adicionar método';
$string['addinstanceanother'] = 'Adicionar método e criar outro';
$string['ajaxnext25'] = 'Próximos 25...';
$string['ajaxoneuserfound'] = 'Um utilizador encontrado';
$string['ajaxxmoreusersfound'] = 'Mais de {$a} utilizadores encontrados';
$string['ajaxxusersfound'] = '{$a} utilizadores encontrados';
$string['assignnotpermitted'] = 'Não tem permissão para atribuir papéis nesta disciplina.';
$string['bulkuseroperation'] = 'Operações de utilizadores em massa';
$string['configenrolplugins'] = 'Selecione todos os módulos necessários e coloque-os pela ordem correta.';
$string['custominstancename'] = 'Nome personalizado da instância';
$string['customwelcomemessage'] = 'Mensagem de boas-vindas personalizada';
$string['customwelcomemessage_help'] = 'Formatos aceites: Texto simples ou Autoformatação Moodle. Tags HTML e tags multilingues também são aceites, bem como os seguintes espaços reservados:
<ul>
<li>Nome da disciplina {$a->coursename}</li>
<li>Hiperligação para a página de perfil do utilizador {$a->profileurl}</li>
<li>E-mail do utilizador {$a->email}</li>
<li>Nome completo do utilizador {$a->fullname}</li>
<li>Nome do utilizador {$a->firstname}</li>
<li>Apelido do utilizador {$a->lastname}</li>
<li>Papel do utilizador na disciplina {$a->courserole}</li>
</ul>';
$string['customwelcomemessageplaceholder'] = 'Olá {$a->firstname}, está inscrito/a na disciplina {$a->coursename}';
$string['defaultenrol'] = 'Adicionar instância às novas disciplinas';
$string['defaultenrol_desc'] = 'Se ativar esta opção, este módulo estará ativo por predefinição nas novas disciplinas criadas.';
$string['deleteinstanceconfirm'] = 'Está prestes a apagar o método de inscrição "{$a->name}". Todos os utilizadores atualmente inscritos através deste método ({$a->users}) deixarão de estar inscritos e quaisquer informações relacionadas com a disciplina, tais como notas, participação em grupos ou subscrições de fóruns, serão apagadas. Tem a certeza de que pretende continuar?';
$string['deleteinstanceconfirmself'] = 'Tem a certeza absoluta de que pretende eliminar a instância "{$a->name}" que lhe dá acesso a esta disciplina? Se continuar, é possível que deixe de poder aceder a esta disciplina.';
$string['deleteinstancenousersconfirm'] = 'Está prestes a apagar o método de inscrição "{$a->name}". Tem a certeza de que pretende continuar?';
$string['disableinstanceconfirmself'] = 'Tem a certeza absoluta de que pretende desativar a instância "{$a->name}" que lhe dá acesso a esta disciplina? Se continuar, é possível que deixe de poder aceder a esta disciplina.';
$string['durationdays'] = '{$a} dias';
$string['editenrolment'] = 'Editar inscrição';
$string['edituserenrolment'] = 'Editar inscrição de {$a}';
$string['enrol'] = 'Inscrever';
$string['enrolcandidates'] = 'Utilizadores não inscritos';
$string['enrolcandidatesmatching'] = 'A pesquisar utilizadores não inscritos';
$string['enrolcohort'] = 'Inscrever num Grupo global';
$string['enrolcohortusers'] = 'Inscrever utilizadores';
$string['enroldetails'] = 'Detalhes da inscrição';
$string['enrollednewusers'] = 'Foram inscritos {$a} novos utilizadores';
$string['enrolledusers'] = 'Utilizadores inscritos';
$string['enrolledusersmatching'] = 'A pesquisar utilizadores inscritos';
$string['enrolme'] = 'Inscrever-me nesta disciplina';
$string['enrolment'] = 'Inscrição';
$string['enrolmentinstances'] = 'Métodos de inscrição';
$string['enrolmentmethod'] = 'Método de inscrição';
$string['enrolmentnew'] = 'Nova inscrição em {$a}';
$string['enrolmentnewuser'] = 'O utilizador "{$a->user}" inscreveu-se na disciplina "{$a->course}"';
$string['enrolmentoptions'] = 'Opções de inscrição';
$string['enrolments'] = 'Inscrições';
$string['enrolmentupdatedforuser'] = 'A inscrição do utilizador "{$a->fullname}" foi atualizada';
$string['enrolnotpermitted'] = 'Não tem permissão para inscrever utilizadores nesta disciplina';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enroltimecreated'] = 'Data da inscrição';
$string['enroltimeend'] = 'Validade da inscrição';
$string['enroltimeendinvalid'] = 'A data final de inscrição deve ser após a data de início de inscrição';
$string['enroltimestart'] = 'Início da inscrição';
$string['enrolusage'] = 'Instâncias / inscrições';
$string['enrolusers'] = 'Inscrever utilizadores';
$string['enrolxusers'] = 'Inscrever {$a} utilizadores';
$string['errajaxfailedenrol'] = 'A inscrição do utilizador falhou';
$string['errajaxsearch'] = 'Erro ao pesquisar utilizadores';
$string['erroreditenrolment'] = 'Ocorreu um erro ao tentar editar a inscrição dos utilizadores';
$string['errorenrolcohort'] = 'Ocorreu um erro ao criar uma instância de sincronização de inscrições de Grupos globais nesta disciplina.';
$string['errorenrolcohortusers'] = 'Ocorreu um erro ao inscrever membros de Grupos globais nesta disciplina.';
$string['errorthresholdlow'] = 'A notificação deve ser enviada, pelo menos, 1 dia antes.';
$string['errorwithbulkoperation'] = 'Ocorreu um erro durante o processamento da alteração da sua inscrição';
$string['eventenrolinstancecreated'] = 'Método de inscrição criado';
$string['eventenrolinstancedeleted'] = 'Método de inscrição apagado';
$string['eventenrolinstanceupdated'] = 'Método de inscrição atualizado';
$string['eventuserenrolmentcreated'] = 'Utilizador inscrito na disciplina';
$string['eventuserenrolmentdeleted'] = 'Utilizador excluído da disciplina';
$string['eventuserenrolmentupdated'] = 'Atualização da inscrição do utilizador';
$string['expirynotify'] = 'Notificar antes da inscrição expirar';
$string['expirynotify_help'] = 'Esta configuração determina se são, ou não, enviadas as mensagens de notificação de expiração da inscrição.';
$string['expirynotifyall'] = 'Responsável pela inscrição e utilizador inscrito';
$string['expirynotifyenroller'] = 'Apenas o responsável pela inscrição';
$string['expirynotifyhour'] = 'Hora de envio das notificações de expiração da inscrição';
$string['expirythreshold'] = 'Limite de notificação';
$string['expirythreshold_help'] = 'Os utilizadores devem ser notificados quanto tempo antes de expirar a inscrição?';
$string['extremovedaction'] = 'Ação de cancelamento da inscrição externa';
$string['extremovedaction_help'] = 'Selecione a ação a realizar quando a inscrição de um utilizador desaparece da fonte externa de inscrições. Tenha em atenção que alguma informação do utilizador e respetivas configurações são apagadas quando a inscrição é cancelada.';
$string['extremovedkeep'] = 'Manter o utilizador inscrito';
$string['extremovedsuspend'] = 'Desativar inscrição na disciplina';
$string['extremovedsuspendnoroles'] = 'Desativar inscrição na disciplina e remover atribuições de papéis';
$string['extremovedunenrol'] = 'Cancelar inscrição do utilizador na disciplina';
$string['finishenrollingusers'] = 'Terminar inscrições';
$string['foundxcohorts'] = 'Foram encontrados {$a} Grupos globais';
$string['instanceadded'] = 'Método adicionado';
$string['instanceeditselfwarning'] = 'Aviso:';
$string['instanceeditselfwarningtext'] = 'Está inscrito nesta disciplina através deste método de inscrição e as alterações podem afetar o seu acesso a esta disciplina.';
$string['invalidenrolduration'] = 'Duração da inscrição inválida';
$string['invalidenrolinstance'] = 'Instância de inscrição inválida';
$string['invalidrequest'] = 'Pedido inválido';
$string['invalidrole'] = 'Papel inválido';
$string['manageenrols'] = 'Gerir módulos de inscrição';
$string['manageinstance'] = 'Gerir';
$string['method'] = 'Método';
$string['migratetomanual'] = 'Migrar para inscrições manuais';
$string['nochange'] = 'Sem alteração';
$string['noexistingparticipants'] = 'Não existem participantes';
$string['nogroup'] = 'Sem grupo';
$string['noguestaccess'] = 'Os visitantes não têm acesso a esta disciplina. Por favor, autentique-se.';
$string['none'] = 'Nenhum';
$string['notenrollable'] = 'De momento, esta disciplina não aceita inscrições.';
$string['notenrolledusers'] = 'Outros utilizadores';
$string['otheruserdesc'] = 'Estes utilizadores não estão inscritos nesta disciplina mas têm papéis atribuídos (herdados ou atribuídos diretamente).';
$string['participationactive'] = 'Ativo';
$string['participationnotcurrent'] = 'Não atual';
$string['participationstatus'] = 'Estado';
$string['participationsuspended'] = 'Suspenso';
$string['periodend'] = 'até {$a}';
$string['periodnone'] = '{$a} inscrito(s)';
$string['periodstart'] = 'desde {$a}';
$string['periodstartend'] = 'desde {$a->start} até {$a->end}';
$string['plugindisabled'] = 'Módulo de inscrição {$a} está desativado';
$string['privacy:metadata:user_enrolments'] = 'Inscrições';
$string['privacy:metadata:user_enrolments:enrolid'] = 'A instância do módulo de inscrição.';
$string['privacy:metadata:user_enrolments:modifierid'] = 'ID do utilizador que modificou pela última vez a inscrição do utilizador.';
$string['privacy:metadata:user_enrolments:status'] = 'O estado da inscrição do utilizador numa disciplina.';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'O módulo de base Gestão de inscrições armazena os utilizadores inscritos.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'A data e hora em que a inscrição do utilizador foi criada';
$string['privacy:metadata:user_enrolments:timeend'] = 'A data e hora em que termina a inscrição do utilizador.';
$string['privacy:metadata:user_enrolments:timemodified'] = 'A data e hora em que a inscrição do utilizador foi modificada.';
$string['privacy:metadata:user_enrolments:timestart'] = 'A data e hora em que inicia a inscrição do utilizador.';
$string['privacy:metadata:user_enrolments:userid'] = 'ID do utilizador';
$string['recovergrades'] = 'Recuperar as notas antigas do utilizador (se possível)';
$string['rolefromcategory'] = 'Papel "{$a->role}" herdado da categoria da disciplina';
$string['rolefrommetacourse'] = 'Papel "{$a->role}" herdado de disciplina ascendente';
$string['rolefromsystem'] = 'Papel "{$a->role}" atribuído no contexto do site';
$string['rolefromthiscourse'] = 'Papel "{$a->role}" atribuído no contexto da disciplina';
$string['sendcoursewelcomemessage'] = 'Enviar mensagem de boas-vindas à disciplina';
$string['sendcoursewelcomemessage_help'] = 'Ao inscrever um utilizador ou um Grupo global na disciplina, poderá receber um e-mail com uma mensagem de boas-vindas. Se for determinado para ser enviado do contacto da disciplina (por predefinição, o professor) e mais do que um utilizador tem o papel de professor, o e-mail será enviado do primeiro utilizador a quem foi atribuído o papel de professor.';
$string['sendfromcoursecontact'] = 'Do contacto da disciplina';
$string['sendfromkeyholder'] = 'Do titular da chave';
$string['sendfromnoreply'] = 'Do endereço \'Não responder\'';
$string['startdatetoday'] = 'Hoje';
$string['synced'] = 'Sincronizado(a)';
$string['testsettings'] = 'Configurações do teste';
$string['testsettingsheading'] = 'Testar configurações da inscrição - {$a}';
$string['timeended'] = 'Data e hora de fim';
$string['timeenrolled'] = 'Duração da inscrição';
$string['timereaggregated'] = 'Data e hora de reagrupamento';
$string['timestarted'] = 'Data e hora de início';
$string['totalenrolledusers'] = '{$a} utilizadores inscritos';
$string['totalotherusers'] = '{$a} outros utilizadores';
$string['totalunenrolledusers'] = 'Cancelada a inscrição de {$a} utilizadores';
$string['unassignnotpermitted'] = 'Não tem permissão para remover atribuições de papéis nesta disciplina';
$string['unenrol'] = 'Cancelar inscrição';
$string['unenrolconfirm'] = 'Tem a certeza de que pretende cancelar a inscrição do utilizador "{$a->user}" na disciplina "{$a->course}" (anteriormente inscrito pelo método "{$a->enrolinstancename}")?';
$string['unenrolleduser'] = 'Foi cancelada a inscrição do utilizador "{$a->fullname}" na disciplina';
$string['unenrolme'] = 'Cancelar a minha inscrição';
$string['unenrolnotpermitted'] = 'Não tem permissão para cancelar a inscrição deste utilizador nesta disciplina.';
$string['unenrolroleusers'] = 'Cancelar a inscrição de utilizadores';
$string['uninstallmigrating'] = 'Migrar "{$a}" inscrições';
$string['unknowajaxaction'] = 'A ação pedida é desconhecida';
$string['unlimitedduration'] = 'Ilimitado';
$string['userremovedfromselectiona'] = 'O utilizador "{$a}" foi removido da seleção.';
$string['usersearch'] = 'Pesquisar';
$string['withselectedusers'] = 'Com os utilizadores selecionados';
$string['youenrolledincourse'] = 'Está inscrito na disciplina.';
$string['youunenrolledfromcourse'] = 'Não está inscrito na disciplina "{$a}".';
