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
 * Strings for component 'enrol_lti', language 'pt', version '3.11'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = 'Nota: Recomenda-se a ativação da configuração "Permitir incorporar em frames" em Administração do Site / Segurança / Segurança HTTP para que estas ferramentas sejam mostradas numa frame em vez de numa nova janela.';
$string['authltimustbeenabled'] = 'Nota: Este módulo requer que o módulo de autenticação LTI também esteja ativo.';
$string['cartridgeurl'] = 'URL do Cartridge';
$string['couldnotestablishproxy'] = 'Não foi possível estabelecer um proxy com o consumidor.';
$string['enrolenddate'] = 'Data de fim';
$string['enrolenddate_help'] = 'Se ativar esta opção, os utilizadores apenas poderão aceder até esta data.';
$string['enrolenddateerror'] = 'A data de fim de inscrição não pode ser anterior à data de início';
$string['enrolisdisabled'] = 'O módulo \'Publicar como ferramenta LTI\' está desativado.';
$string['enrolmentfinished'] = 'As inscrições já terminaram.';
$string['enrolmentnotstarted'] = 'As inscrições ainda não iniciaram.';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_help'] = 'Período de tempo durante o qual as inscrições são válidas, começando no momento em que o utilizador se inscreve a partir de um sistema externo. Se desativar esta opção, a duração da inscrição será ilimitada.';
$string['enrolstartdate'] = 'Data de início';
$string['enrolstartdate_help'] = 'Se ativar esta opção, os utilizadores apenas poderão aceder a partir desta data em diante.';
$string['failedrequest'] = 'Pedido falhado pela seguinte razão: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Por favor, clique na hiperligação abaixo para aceder à ferramenta.';
$string['gradesync'] = 'Sincronização da avaliação';
$string['gradesync_help'] = 'Se as notas da ferramenta são enviadas para o sistema externo (Cliente LTI) .';
$string['incorrecttoken'] = 'O token estava incorreto. Verifique o URL e tente novamente ou entre em contacto com o administrador desta ferramenta.';
$string['invalidrequest'] = 'Pedido inválido';
$string['invalidtoolconsumer'] = 'Consumidor de ferramenta inválido.';
$string['launchdetails'] = 'Detalhes do lançamento';
$string['launchdetails_help'] = 'Um URL do Cartridge (também chamado de URL de configuração) e a senha são necessários para configurar a ferramenta.';
$string['launchurl'] = 'Abrir URL';
$string['lti:config'] = 'Configurar \'Publicar como ferramenta LTI\'';
$string['lti:unenrol'] = 'Cancelar inscrição dos utilizadores na disciplina';
$string['maxenrolled'] = 'Número máximo de utilizadores inscritos';
$string['maxenrolled_help'] = 'O número máximo de utilizadores externos que podem aceder à ferramenta. Se definir como zero, o número de utilizadores inscritos é ilimitado.';
$string['maxenrolledreached'] = 'Foi atingido o número máximo de utilizadores externos autorizados a aceder à ferramenta.';
$string['membersync'] = 'Sincronizar utilizadores';
$string['membersync_help'] = 'Determina se é, ou não, executada uma tarefa regular para sincronizar as inscrições nesta disciplina com os utilizadores registados num sistema remoto, sendo criada uma conta para cada utilizador existente no sistema remoto e, se necessário, inscrevendo-os ou cancelando a inscrição, conforme requerido.

Se desativar esta opção, sempre que um utilizador remoto acede a esta ferramenta, será criada uma conta de utilizador e este ficará automaticamente inscrito.';
$string['membersyncmode'] = 'Modo de sincronização de utilizadores';
$string['membersyncmode_help'] = 'Define se os utilizadores externos devem ser inscritos e/ou desinscritos desta disciplina.';
$string['membersyncmodeenrolandunenrol'] = 'Inscrever novos utilizadores e cancelar a inscrição dos utilizadores ausentes';
$string['membersyncmodeenrolnew'] = 'Inscrever novos utilizadores';
$string['membersyncmodeunenrolmissing'] = 'Cancelar inscrição dos utilizadores ausentes';
$string['notoolsprovided'] = 'Não existem ferramentas';
$string['opentool'] = 'Abrir ferramenta';
$string['pluginname'] = 'Publicar como ferramenta LTI';
$string['pluginname_desc'] = 'O módulo \'Publicar como ferramenta LTI\' em conjunto com o módulo de autenticação LTI permite que utilizadores externos possam aceder a disciplinas e atividades selecionadas. Por outras palavras, o Moodle funciona como um fornecedor de ferramenta LTI.';
$string['privacy:metadata:enrol_lti_users'] = 'Lista de utilizadores inscritos via LTI';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'A data/hora do último acesso do utilizador à disciplina';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Última avaliação registada do utilizador';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'A data/hora em que o utilizador foi inscrito';
$string['privacy:metadata:enrol_lti_users:userid'] = 'ID do utilizador';
$string['registration'] = 'Registo de ferramentas publicadas';
$string['registrationurl'] = 'URL de registo';
$string['registrationurl_help'] = 'Se um URL de registo (também chamado de URL de proxy) é usado, a ferramenta é configurada automaticamente.';
$string['remotesystem'] = 'Sistema externo';
$string['requirecompletion'] = 'Requer a conclusão prévia da disciplina ou da atividade para sincronizar as notas';
$string['returnurlnotset'] = 'O URL devolvido não foi definido.';
$string['roleinstructor'] = 'Papel para o professor';
$string['roleinstructor_help'] = 'O papel atribuído na ferramenta para o professor externo.';
$string['rolelearner'] = 'Papel para o aluno';
$string['rolelearner_help'] = 'O papel atribuído na ferramenta para o aluno externo.';
$string['secret'] = 'Senha';
$string['secret_help'] = 'Um texto que é partilhado com o sistema externo (Cliente LTI) para permitir o acesso à ferramenta.';
$string['sharedexternaltools'] = 'Publicado como ferramentas LTI';
$string['successfulregistration'] = 'Registo efetuado com sucesso';
$string['tasksyncgrades'] = 'Sincronização das notas de Publicar como ferramenta LTI';
$string['tasksyncmembers'] = 'Sincronização dos utilizadores de Publicar como ferramenta LTI';
$string['toolsprovided'] = 'Ferramentas publicadas';
$string['toolsprovided_help'] = 'Uma ferramenta pode ser partilhada com outro site fornecendo detalhes de lançamento ou hiperligação de registo.';
$string['tooltobeprovided'] = 'Ferramenta a ser publicada';
$string['toolurl'] = 'URL da ferramenta';
$string['userdefaultvalues'] = 'Valores predefinidos do utilizador';
