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
 * Strings for component 'enrol_manual', language 'pt', branch 'MOODLE_38_STABLE'
 *
 * @package   enrol_manual
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Avançado';
$string['alterstatus'] = 'Alterar estado da inscrição';
$string['altertimeend'] = 'Alterar data de fim';
$string['altertimestart'] = 'Alterar data de início';
$string['assignrole'] = 'Atribuir papel';
$string['assignroles'] = 'Atribuir papeis';
$string['browsecohorts'] = 'Ver a lista de Grupos globais';
$string['browseusers'] = 'Ver lista de utilizadores';
$string['confirmbulkdeleteenrolment'] = 'Tem a certeza de que pretende apagar a inscrição destes utilizadores?';
$string['defaultperiod'] = 'Duração predefinida da inscrição';
$string['defaultperiod_desc'] = 'Duração predefinida da inscrição.  Se for definida como zero, a validade da inscrição será ilimitada por predefinição.';
$string['defaultperiod_help'] = 'Tempo predefinido durante o qual as inscrições são válidas a partir do momento em que o aluno é inscrito.';
$string['defaultstart'] = 'Início das inscrições predefinido';
$string['deleteselectedusers'] = 'Apagar inscrição dos utilizadores selecionados';
$string['editselectedusers'] = 'Editar inscrição dos utilizadores selecionados';
$string['enrolledincourserole'] = 'Inscrito na disciplina "{$a->course}" como "{$a->role}"';
$string['enrolusers'] = 'Inscrever utilizadores';
$string['enroluserscohorts'] = 'Inscrever utilizadores e grupos globais selecionados';
$string['expiredaction'] = 'Ação de expiração da inscrição';
$string['expiredaction_help'] = 'Selecione a ação a implementar quando a inscrição do utilizador expira. Tenha em atenção que alguns dados e configurações do utilizador são removidos da disciplina durante o cancelamento da inscrição.';
$string['expirymessageenrolledbody'] = 'Caro(a) {$a->user},

Esta é uma notificação de que a sua inscrição na disciplina \'{$a->course}\' expira em {$a->timeend}.

Se precisar de ajuda, por favor, contacte {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notificação de expiração da inscrição';
$string['expirymessageenrollerbody'] = 'A inscrição na disciplina \'{$a->course}\' irá expirar nos próximos {$a->threshold} para os seguintes utilizadores:

{$a->users}

Para prolongar estas inscrições, vá a {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificação de expiração da inscrição';
$string['manual:config'] = 'Configurar instâncias de inscrição manuais';
$string['manual:enrol'] = 'Inscrever utilizadores';
$string['manual:manage'] = 'Gerir inscrições de utilizadores';
$string['manualpluginnotinstalled'] = 'O módulo "Manual" ainda não foi instalado';
$string['manual:unenrol'] = 'Remover inscrições de utilizadores da disciplina';
$string['manual:unenrolself'] = 'Remover a sua inscrição desta disciplina';
$string['messageprovider:expiry_notification'] = 'Notificações de expiração de inscrições manuais';
$string['now'] = 'Agora';
$string['pluginname'] = 'Inscrições manuais';
$string['pluginname_desc'] = 'O módulo de inscrições manuais permite que os utilizadores sejam inscritos através de uma hiperligação no bloco de configurações > Administração da disciplina, por um utilizador com as permissões necessárias (ex: professor). Normalmente este módulo deve estar ativo, uma vez que alguns módulos de inscrição, como o de autoinscrição, dependem deste módulo.';
$string['privacy:metadata'] = 'O módulo Inscrições manuais não armazena dados pessoais.';
$string['selectcohorts'] = 'Selecionar grupos globais';
$string['selection'] = 'Selecão';
$string['selectusers'] = 'Selecionar utilizadores';
$string['sendexpirynotificationstask'] = 'Tarefa de envio de notificações de expiração de inscrições manuais';
$string['status'] = 'Ativar inscrições manuais';
$string['status_desc'] = 'Permitir que os utilizadores inscritos internamente possam aceder à disciplina. Isto deve ser permitido na maior parte das situações.';
$string['statusdisabled'] = 'Desativado';
$string['statusenabled'] = 'Ativo';
$string['status_help'] = 'Este parâmetro define se os utilizadores podem ser inscritos manualmente, através de uma hiperligação no bloco de administração da disciplina e por um utilizador com as permissões necessárias (ex: professor).';
$string['syncenrolmentstask'] = 'Tarefa de sincronização de inscrições manuais';
$string['unenrol'] = 'Cancelar inscrição do utilizador';
$string['unenrolselectedusers'] = 'Cancelar inscrição dos utilizadores selecionados';
$string['unenrolselfconfirm'] = 'Tem a certeza de que pretende remover a sua inscrição da disciplina "{$a}"?';
$string['unenroluser'] = 'Tem a certeza de que pretende remover a inscrição de "{$a->user}" da disciplina "{$a->course}"?';
$string['unenrolusers'] = 'Cancelar inscrição dos utilizadores';
$string['wscannotenrol'] = 'O módulo não permite inscrever manualmente um utilizador na disciplina id = {$a->courseid}';
$string['wsnoinstance'] = 'O módulo de inscrição manual não existe ou está desativado para a disciplina (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Não tem permissão para atribuir o papel ({$a->roleid}) ao utilizador ({$a->userid}) na disciplina ({$a->courseid}).';
