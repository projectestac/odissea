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
 * Strings for component 'enrol', language 'pt', branch 'MOODLE_38_STABLE'
 *
 * @package   enrol
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Módulos de inscrição disponíveis';
$string['addinstance'] = 'Adicionar método';
$string['addinstanceanother'] = 'Adicionar método e criar outro';
$string['ajaxnext25'] = 'Próximos 25...';
$string['ajaxoneuserfound'] = 'Um utilizador encontrado';
$string['ajaxxmoreusersfound'] = 'Mais de {$a} utilizadores encontrados';
$string['ajaxxusersfound'] = '{$a} utilizadores encontrados';
$string['assignnotpermitted'] = 'Não tem permissões para atribuir papéis nesta disciplina';
$string['bulkuseroperation'] = 'Operações de utilizadores em massa';
$string['configenrolplugins'] = 'Selecione todos os módulos necessários e coloque-os pela ordem correta.';
$string['custominstancename'] = 'Nome personalizado da instância';
$string['defaultenrol'] = 'Adicionar a instância a novas disciplinas';
$string['defaultenrol_desc'] = 'Se ativar esta opção, este módulo estará ativo por predefinição nas novas disciplinas criadas.';
$string['deleteinstanceconfirm'] = 'Está prestes a apagar o método de inscrição "{$a->name}". Todos os {$a->users} utilizadores atualmente inscritos através deste método deixarão de estar inscritos e quaisquer informações relacionadas com a disciplina, tais como notas, participação em grupos ou subscrições de fórum, serão apagadas. Tem a certeza de ue pretende continuar?';
$string['deleteinstanceconfirmself'] = 'Tem a certeza absoluta de que pretende eliminar a instância "{$a->name}" que lhe dá acesso a esta disciplina? Se continuar, é possível que deixe de poder aceder a esta disciplina.';
$string['deleteinstancenousersconfirm'] = 'Está prestes a apagar o método de inscrição "{$a->name}". Tem a certeza de que pretende continuar?';
$string['disableinstanceconfirmself'] = 'Tem a certeza absoluta de que pretende desativar a instância "{$a->name}" que lhe dá acesso a esta disciplina? Se continuar, é possível que deixe de poder aceder a esta disciplina.';
$string['durationdays'] = '{$a} dias';
$string['editenrolment'] = 'Editar papel';
$string['edituserenrolment'] = 'Editar a inscrição de {$a}';
$string['enrol'] = 'Inscrever';
$string['enrolcandidates'] = 'Utilizadores não inscritos';
$string['enrolcandidatesmatching'] = 'A procurar utilizadores não inscritos';
$string['enrolcohort'] = 'Inscrever grupo global';
$string['enrolcohortusers'] = 'Inscrever utilizadores';
$string['enroldetails'] = 'Detalhes da inscrição';
$string['enrollednewusers'] = 'Foram inscritos {$a} novos utilizadores';
$string['enrolledusers'] = 'Utilizadores inscritos';
$string['enrolledusersmatching'] = 'A procurar utilizadores inscritos';
$string['enrolme'] = 'Inscrever-me nesta disciplina';
$string['enrolmentinstances'] = 'Métodos de inscrição';
$string['enrolmentmethod'] = 'Método de inscrição';
$string['enrolmentnew'] = 'Nova inscrição em {$a}';
$string['enrolmentnewuser'] = 'O utilizador "{$a->user}" inscreveu-se na disciplina "{$a->course}"';
$string['enrolmentoptions'] = 'Opções de inscrição';
$string['enrolments'] = 'Inscrições';
$string['enrolnotpermitted'] = 'Não tem permissões para inscrever utilizadores nesta disciplina';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enroltimecreated'] = 'Data da inscrição';
$string['enroltimeend'] = 'Validade da inscrição';
$string['enroltimeendinvalid'] = 'A data final de inscrição deve ser após a data de início de inscrição';
$string['enroltimestart'] = 'Início da inscrição';
$string['enrolusage'] = 'Instâncias / inscrições';
$string['enrolusers'] = 'Inscrever utilizadores';
$string['enrolxusers'] = 'Inscrever {$a} utilizadores';
$string['errajaxfailedenrol'] = 'A inscrição do utilizador falhou';
$string['errajaxsearch'] = 'Erro ao procurar utilizadores';
$string['erroreditenrolment'] = 'Ocorreu um erro ao tentar editar o papel dos utilizadores';
$string['errorenrolcohort'] = 'Ocorreu um erro ao criar uma instância de sincronização de inscrições de grupos globais nesta disciplina.';
$string['errorenrolcohortusers'] = 'Ocorreu um erro ao inscrever membros de grupos globais nesta disciplina.';
$string['errorthresholdlow'] = 'A notificação deve ser feita, pelo menos, 1 dia antes.';
$string['errorwithbulkoperation'] = 'Ocorreu um erro durante o processamento da alteração da sua inscrição';
$string['eventenrolinstancecreated'] = 'Método de inscrição criado';
$string['eventenrolinstancedeleted'] = 'Método de inscrição apagado';
$string['eventenrolinstanceupdated'] = 'Método de inscrição atualizado';
$string['eventuserenrolmentcreated'] = 'Utilizador inscrito na disciplina';
$string['eventuserenrolmentdeleted'] = 'Utilizador excluído da disciplina';
$string['eventuserenrolmentupdated'] = 'Atualização de exclusão do utilizador';
$string['expirynotify'] = 'Notificar antes da inscrição expirar';
$string['expirynotifyall'] = 'Responsável pela inscrição e utilizador inscrito';
$string['expirynotifyenroller'] = 'Apenas o responsável pela inscrição';
$string['expirynotify_help'] = 'Esta configuração determina se são enviadas, ou não, as mensagens de notificação de fim da inscrição.';
$string['expirynotifyhour'] = 'Hora de envio das notificações de fim da inscrição';
$string['expirythreshold'] = 'Limite de notificação';
$string['expirythreshold_help'] = 'Os utilizadores devem ser notificados quanto tempo antes de expirar a inscrição?';
$string['extremovedaction'] = 'Ação de cancelamento de inscrição externa';
$string['extremovedaction_help'] = 'Selecione a ação a realizar quando a inscrição de um utilizador desaparece da fonte externa de inscrições. De notar que alguma informação do utilizador e respetivas configurações são apagadas quando a inscrição é cancelada.';
$string['extremovedkeep'] = 'Manter os utilizadores inscritos';
$string['extremovedsuspend'] = 'Desativar inscrições na disciplina';
$string['extremovedsuspendnoroles'] = 'Desativar inscrições na disciplina e remover atribuições de papéis';
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
$string['migratetomanual'] = 'Migrar para inscrições manuais';
$string['nochange'] = 'Sem alteração';
$string['noexistingparticipants'] = 'Não existem participantes';
$string['nogroup'] = 'Sem grupo';
$string['noguestaccess'] = 'Os visitantes não têm acesso a esta disciplina. Por favor, autentique-se.';
$string['none'] = 'Nenhum';
$string['notenrollable'] = 'Esta disciplina não aceita inscrições neste momento.';
$string['notenrolledusers'] = 'Outros utilizadores';
$string['otheruserdesc'] = 'Estes utilizadores não estão inscritos nesta disciplina mas têm papéis atribuídos (herdados ou atribuídos diretamente).';
$string['participationactive'] = 'Ativo(a)';
$string['participationnotcurrent'] = 'Não atual';
$string['participationstatus'] = 'Estado';
$string['participationsuspended'] = 'Suspenso(a)';
$string['periodend'] = 'até {$a}';
$string['periodnone'] = '{$a} inscrito(s)';
$string['periodstart'] = 'desde {$a}';
$string['periodstartend'] = 'desde {$a->start} até {$a->end}';
$string['privacy:metadata:user_enrolments'] = 'Inscrições';
$string['privacy:metadata:user_enrolments:enrolid'] = 'A instância do módulo de inscrição';
$string['privacy:metadata:user_enrolments:modifierid'] = 'O ID do utilizador que modificou pela última vez a inscrição do utilizador.';
$string['privacy:metadata:user_enrolments:status'] = 'O estado da inscrição do utilizador numa disciplina';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'O módulo de base Gestão de inscrições armazena os utilizadores inscritos.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'A hora em que a inscrição do utilizador foi criada.';
$string['privacy:metadata:user_enrolments:timeend'] = 'A data/hora em que termina a inscrição do utilizador.';
$string['privacy:metadata:user_enrolments:timemodified'] = 'A hora em que a inscrição do utilizador foi modificada.';
$string['privacy:metadata:user_enrolments:timestart'] = 'A data e hora a que inicia a inscrição do utilizador.';
$string['privacy:metadata:user_enrolments:userid'] = 'O ID do utilizador.';
$string['proceedtocourse'] = 'Avançar para o conteúdo da disciplina';
$string['recovergrades'] = 'Recuperar as notas antigas do utilizador (se possível)';
$string['rolefromcategory'] = 'Papel "{$a->role}" herdado da categoria da disciplina';
$string['rolefrommetacourse'] = 'Papel "{$a->role}" herdado de disciplina ascendente';
$string['rolefromsystem'] = 'Papel "{$a->role}" atribuído no contexto do site';
$string['rolefromthiscourse'] = 'Papel "{$a->role}" atribuído no contexto da disciplina';
$string['sendfromcoursecontact'] = 'Do contacto da disciplina';
$string['sendfromkeyholder'] = 'Do titular da chave';
$string['sendfromnoreply'] = 'Do endereço \'Não responder\'';
$string['startdatetoday'] = 'Hoje';
$string['synced'] = 'Sincronizado(a)';
$string['testsettings'] = 'Definições de teste';
$string['testsettingsheading'] = 'Testar configurações da inscrição - {$a}';
$string['totalenrolledusers'] = '{$a} utilizadores inscritos';
$string['totalotherusers'] = '{$a} outros utilizadores';
$string['totalunenrolledusers'] = 'Cancelada a inscrição de {$a} utilizadores';
$string['unassignnotpermitted'] = 'Não tem permissões para remover atribuições de papéis nesta disciplina';
$string['unenrol'] = 'Cancelar inscrição';
$string['unenrolconfirm'] = 'Tem a certeza de que pretende cancelar a inscrição do utilizador "{$a->user}" na disciplina "{$a->course}" (anteriormente inscrito pelo método "{$a->enrolinstancename}") ?';
$string['unenrolme'] = 'Cancelar a minha inscrição em {$a}';
$string['unenrolnotpermitted'] = 'Não tem permissões para cancelar a inscrição deste utilizador nesta disciplina';
$string['unenrolroleusers'] = 'Cancelar a inscrição de utilizadores';
$string['uninstallmigrating'] = 'Migrar "{$a}" inscrições';
$string['unknowajaxaction'] = 'A ação pedida é desconhecida';
$string['unlimitedduration'] = 'Ilimitado';
$string['userremovedfromselectiona'] = 'O utilizador "{$a}" foi removido da seleção.';
$string['usersearch'] = 'Procurar';
$string['withselectedusers'] = 'Com os utilizadores selecionados';
$string['youenrolledincourse'] = 'Está inscrito na disciplina.';
$string['youunenrolledfromcourse'] = 'Não está inscrito na disciplina "{$a}".';
