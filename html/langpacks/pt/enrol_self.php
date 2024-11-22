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
 * Strings for component 'enrol_self', language 'pt', version '4.1'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'A inscrição está desativada ou inativa';
$string['canntenrolearly'] = 'Ainda não é possível inscrever-se; as inscrições iniciam {$a}.';
$string['canntenrollate'] = 'Não é possível inscrever mais utilizadores, pois as inscrições terminaram {$a}.';
$string['cohortnonmemberinfo'] = 'Apenas os membros do Grupo global \'{$a}\' podem autoinscrever-se.';
$string['cohortonly'] = 'Apenas membros do Grupo global';
$string['cohortonly_help'] = 'A autoinscrição pode ser restrita apenas a membros de um Grupo global específico. Tenha em atenção que a alteração desta configuração não tem efeito sobre as inscrições existentes.';
$string['confirmbulkdeleteenrolment'] = 'Tem a certeza de que pretende apagar essas inscrições do utilizador?';
$string['customwelcomemessage'] = 'Mensagem de boas-vindas personalizada';
$string['customwelcomemessage_help'] = 'Pode definir uma mensagem personalizada em texto simples ou autoformatação-Moodle, incluindo código HTML e tags multilingues .

Os seguintes espaços reservados podem ser incluídos na mensagem:

* Nome da disciplina {$a->coursename}
* Hiperligação para a página de perfil do utilizador {$a->profileurl}
* E-mail do utilizador {$a->email}
* Nome completo do utilizador {$a->fullname}';
$string['defaultrole'] = 'Atribuição de papel predefinido';
$string['defaultrole_desc'] = 'Selecione o papel que deve ser atribuído aos utilizadores durante a autoinscrição.';
$string['deleteselectedusers'] = 'Apagar inscrição dos utilizadores selecionados';
$string['editselectedusers'] = 'Editar inscrição dos utilizadores selecionados';
$string['enrolenddate'] = 'Data de fim';
$string['enrolenddate_help'] = 'Se ativar esta opção, os utilizadores podem autoinscrever-se apenas até esta data.';
$string['enrolenddaterror'] = 'A data de fim de inscrição não pode ser anterior à data de início';
$string['enrolme'] = 'Inscrever-me';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_desc'] = 'Duração predefinida da inscrição. Se for definida como zero, a validade da inscrição será ilimitada por predefinição.';
$string['enrolperiod_help'] = 'Intervalo de tempo durante o qual a inscrição é válida, a partir do momento em que o utilizador se inscreve. Se desativado, a duração da inscrição será ilimitada.';
$string['enrolstartdate'] = 'Data de início';
$string['enrolstartdate_help'] = 'Se ativar esta opção, os utilizadores podem autoinscrever-se apenas a partir desta data.';
$string['expiredaction'] = 'Ação de expiração da inscrição';
$string['expiredaction_help'] = 'Selecione a ação a ser executada quando a inscrição do utilizador expira. Tenha em atenção que alguns dados e configurações do utilizador são eliminados da disciplina durante o cancelamento da inscrição na disciplina.';
$string['expirymessageenrolledbody'] = 'Caro(a) {$a->user},

Esta é uma notificação a informar que a sua inscrição na disciplina \'{$a->course}\' expira em {$a->timeend}.

Se precisar de ajuda, por favor, contacte {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notificação de expiração da autoinscrição';
$string['expirymessageenrollerbody'] = 'A autoinscrição na disciplina \'{$a->course}\' irá expirar nos próximos {$a->threshold} para os seguintes utilizadores:

{$a->users}

Para prolongar estas inscrições, vá a {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificação de expiração da autoinscrição';
$string['expirynotifyall'] = 'Responsável pela inscrição e utilizador inscrito';
$string['expirynotifyenroller'] = 'Apenas o responsável pela inscrição';
$string['groupkey'] = 'Usar senhas de inscrição de grupo';
$string['groupkey_desc'] = 'Usar senhas de inscrição de grupo como configuração predefinida.';
$string['groupkey_help'] = 'Para além de restringir o acesso à disciplina apenas aos utilizadores que têm a senha de inscrição, também é possível definir senhas de inscrição nos grupos, o que faz com que os utilizadores, ao se inscreverem na disciplina, fiquem automaticamente integrados num grupo.

Nota: Uma senha de inscrição para a disciplina deve ser especificada nas configurações de autoinscrição, bem como as senhas de inscrição do grupo nas configurações do grupo.';
$string['keyholder'] = 'Deve ter recebido esta chave de inscrição de:';
$string['longtimenosee'] = 'Cancelar inscrição inativa após';
$string['longtimenosee_help'] = 'Se os utilizadores não acederem a uma disciplina durante muito tempo, a inscrição será automaticamente cancelada. Este parâmetro especifica o limite de tempo de inatividade.';
$string['maxenrolled'] = 'Número máximo de inscrições permitidas';
$string['maxenrolled_help'] = 'Especifica o número máximo de utilizadores que podem autoinscrever-se autonomamente. Se o valor for zero (0), não existe limite.';
$string['maxenrolledreached'] = 'O número máximo de inscrições já foi atingido.';
$string['messageprovider:expiry_notification'] = 'Notificações de expiração da autoinscrição';
$string['newenrols'] = 'Permitir novas autoinscrições';
$string['newenrols_desc'] = 'Permitir, por predefinição, que os utilizadores se autoinscrevam nas novas disciplinas.';
$string['newenrols_help'] = 'Esta configuração determina se o utilizador se pode inscrever nesta disciplina.';
$string['nopassword'] = 'Não necessário senha de inscrição.';
$string['password'] = 'Senha de inscrição';
$string['password_help'] = 'A senha de inscrição permite restringir o acesso à disciplina apenas aos utilizadores que conheçam a senha de inscrição.

Se este campo for deixado em branco, qualquer utilizador poderá inscrever-se nesta disciplina.

Se for especificada uma senha, qualquer utilizador que tente aceder à disciplina terá que indicar esta senha. Este procedimento SÓ acontece no momento da inscrição nas disciplinas. Os acessos posteriores dos alunos inscritos dispensam a indicação desta senha.';
$string['passwordinvalid'] = 'A senha de inscrição que indicou não é a correta. Por favor, tente novamente';
$string['passwordinvalidhint'] = 'A senha de inscrição que indicou não é a correta. Por favor, tente novamente. Sugestão: A primeira letra é "{$a}"';
$string['passwordmatchesgroupkey'] = 'Esta chave de inscrição já está a ser usada como chave de inscrição de grupo.';
$string['pluginname'] = 'Autoinscrição';
$string['pluginname_desc'] = 'Este módulo permite aos utilizadores decidir em que disciplinas pretendem inscrever-se. As disciplinas podem ser protegidas por uma senha de inscrição. Internamente a inscrição é feita através do módulo de inscrições manuais, pelo que este módulo tem de estar igualmente ativo na disciplina.';
$string['privacy:metadata'] = 'O módulo Autoinscrição não armazena quaisquer dados pessoais.';
$string['requirepassword'] = 'Pedir senha de inscrição';
$string['requirepassword_desc'] = 'Esta configuração faz com que as novas disciplinas criadas peçam sempre senha de inscrição e evita que as disciplinas que já existem possam deixar de pedir a senha.';
$string['role'] = 'Atribuir papel';
$string['self:config'] = 'Configurar instâncias de autoinscrição';
$string['self:enrolself'] = 'Autoinscrever-se na disciplina';
$string['self:holdkey'] = 'Aparecer como titular da chave de inscrição';
$string['self:manage'] = 'Gerir utilizadores inscritos';
$string['self:unenrol'] = 'Cancelar inscrições de alunos da disciplina';
$string['self:unenrolself'] = 'Cancelar a sua inscrição na disciplina';
$string['sendcoursewelcomemessage'] = 'Enviar mensagem de boas-vindas';
$string['sendcoursewelcomemessage_help'] = 'Quando um utilizador se inscreve na disciplina, pode receber um e-mail com uma mensagem de boas-vindas. Se for determinado para ser enviado do contacto da disciplina (por predefinição, o professor) e mais do que um utilizador tem o papel de professor, o e-mail será enviado do primeiro utilizador a quem foi atribuído o papel de professor.';
$string['sendexpirynotificationstask'] = 'Envio de notificações de expiração de autoinscrições';
$string['showhint'] = 'Mostrar sugestão';
$string['showhint_desc'] = 'Se ativar esta opção, será mostrada aos utilizadores a primeira letra da senha de inscrição.';
$string['status'] = 'Manter ativas as autoinscrições atuais';
$string['status_desc'] = 'Ativar o método de autoinscrição nas novas disciplinas.';
$string['status_help'] = 'Se definido como Não, todos os participantes existentes que se autoinscreveram na disciplina deixarão de ter acesso.';
$string['syncenrolmentstask'] = 'Sincronização de autoinscrições';
$string['unenrol'] = 'Cancelar inscrição do utilizador';
$string['unenrolselfconfirm'] = 'Tem a certeza de que pretende cancelar a sua inscrição na disciplina "{$a}"?';
$string['unenroluser'] = 'Tem a certeza de que pretende cancelar a inscrição de "{$a->user}" na disciplina "{$a->course}"?';
$string['unenrolusers'] = 'Cancelar inscrições';
$string['usepasswordpolicy'] = 'Usar a política de senhas do site';
$string['usepasswordpolicy_desc'] = 'Se ativar esta opção, a senha de inscrição nas disciplinas terá que obedecer às mesmas regras que as senhas das contas dos utilizadores.';
$string['welcometocourse'] = 'Bem-vindo(a) a "{$a}"';
$string['welcometocoursetext'] = 'Bem-vindo(a) à disciplina "{$a->coursename}"!

Se ainda não o fez, edite o seu perfil do utilizador para sabermos mais a seu respeito:
{$a->profileurl}';
