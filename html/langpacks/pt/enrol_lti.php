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
 * Strings for component 'enrol_lti', language 'pt', version '4.5'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontent'] = 'Adicionar conteúdo';
$string['adddeployment:deploymentid'] = 'ID da implementação';
$string['adddeployment:deploymentid_help'] = 'A cada implementação da ferramenta (este site) numa plataforma será atribuído um ID da implementação exclusivo para o registo. O ID da implementação deve ser registado com a ferramenta (este site) antes que sejam permitidas as inicializações da respetiva implementação da ferramenta.';
$string['adddeployment:invaliddeploymentiderror'] = 'ID da implementação inválido. Este ID da implementação já existe o registo desta aplicação.';
$string['adddeployment:name'] = 'Nome da implementação';
$string['addtocourse'] = 'Adicionar à disciplina';
$string['addtogradebook'] = 'Adicionar à pauta';
$string['allowframeembedding'] = 'Nota: Recomenda-se a ativação da configuração "Permitir incorporar em frames" em Administração do Site / Segurança / Segurança HTTP para que estas ferramentas sejam mostradas numa frame em vez de numa nova janela.';
$string['authltimustbeenabled'] = 'Nota: Este módulo requer que o módulo de autenticação LTI também esteja ativo.';
$string['cartridgeurl'] = 'URL do Cartridge';
$string['cookiesarerequired'] = 'Os cookies estão bloqueados pelo seu navegador';
$string['cookiesarerequiredinfo'] = 'Esta ferramenta não pode ser iniciada porque o seu navegador parece estar a bloquear cookies de terceiros.
<br><br>
Para usar esta ferramenta, tente alterar as configurações de cookies do seu navegador ou usar um navegador diferente.';
$string['copiedtoclipboard'] = '{$a} copiado para a área de transferência';
$string['copytoclipboard'] = 'Copiar para a área de transferência';
$string['couldnotestablishproxy'] = 'Não foi possível estabelecer um proxy com o consumidor.';
$string['customproperties'] = 'Propriedades personalizadas';
$string['deeplinkingurl'] = 'URL da vinculação';
$string['deletedactivity'] = 'Atividade apagada';
$string['deletedactivityalt'] = 'A atividade partilhada por esta instância foi apagada';
$string['deletedactivitydescription'] = 'A atividade partilhada por esta instância foi apagada. Pode selecionar outra atividade para partilhar se editar a instância ou, se já não for necessário, pode simplesmente apagar a instância. Ao apagar a instância irá remover todas as inscrições de utilizadores associadas.';
$string['deploymentadd'] = 'Adicionar implementação';
$string['deploymentaddnotice'] = 'Implementação adicionada';
$string['deploymentdelete'] = 'Apagar implementação';
$string['deploymentdeleteconfirm'] = 'Aviso: Apagar uma implementação resultará na perda de acesso de qualquer utilizador que siga as hiperligações de recursos vinculados a esta implementação da ferramenta na plataforma. Os serviços de sincronização de membros e as notas também serão apagados para estes recursos. Tem a certeza de que pretende apagar o ID da implementação \'{$a}\'?';
$string['deploymentdeletenotice'] = 'Implementação apagada';
$string['deploymentid'] = 'ID da implementação';
$string['deployments'] = 'Implementações';
$string['deploymentsinfo'] = 'Um ID de implementação é gerado pela plataforma quando a ferramenta for disponibilizada num contexto. Pode ocorrer no ato da inscrição, ou pode ocorrer posteriormente, quando a ferramenta é disponibilizada para uma disciplina ou categoria específica. O ID da implementação tem de ser registado antes que sejam permitidas as inicializações da respetiva implementação da ferramenta.';
$string['details'] = 'Detalhes';
$string['editplatformdetails'] = 'Editar detalhes da plataforma';
$string['endpointltiversionnotice'] = 'Os endpoints da ferramenta abaixo são apenas para configuração manual de LTI 1.3. Para versões anteriores (1.1/2.0), os detalhes para os consumidores podem ser encontrados na página \'Publicado como ferramenta LTI\', acessível através da navegação da disciplina.';
$string['enrolenddate'] = 'Data de fim';
$string['enrolenddate_help'] = 'Se ativar esta opção, os utilizadores apenas poderão aceder até esta data.';
$string['enrolenddateerror'] = 'A data de fim de inscrição não pode ser anterior à data de início';
$string['enrolisdisabled'] = 'O módulo \'Publicar como ferramenta LTI\' está desativado.';
$string['enrolltiversionincorrect'] = 'A funcionalidade não está configurada para ser usada em LTI antigo (versões 1.1/2.0). Contacte o administrador desta ferramenta.';
$string['enrolmentfinished'] = 'As inscrições já terminaram.';
$string['enrolmentnotstarted'] = 'As inscrições ainda não iniciaram.';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_help'] = 'Intervalo de tempo durante o qual as inscrições são válidas, começando no momento em que o utilizador se inscreve a partir de um sistema externo. Se desativado, a duração da inscrição será ilimitada.';
$string['enrolstartdate'] = 'Data de início';
$string['enrolstartdate_help'] = 'Se ativar esta opção, os utilizadores apenas poderão aceder a partir desta data em diante.';
$string['existingregistrationerror'] = 'Já existe um registo para este emissor e ID do cliente.';
$string['failedrequest'] = 'Pedido falhado pela seguinte razão: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Por favor, clique na hiperligação abaixo para aceder à ferramenta.';
$string['gradesync'] = 'Sincronização da avaliação';
$string['gradesync_help'] = 'Se as notas da ferramenta são enviadas para o sistema externo (Cliente LTI).';
$string['incorrecttoken'] = 'O token estava incorreto. Verifique o URL e tente novamente ou contacte o administrador desta ferramenta.';
$string['invalidexpiredregistrationurl'] = 'URL de registo inválido ou expirado. Verifique o URL e tente novamente.';
$string['invalidrequest'] = 'Pedido inválido';
$string['invalidtoolconsumer'] = 'Consumidor de ferramenta inválido.';
$string['jwksurl'] = 'URL do JWKS';
$string['launchdetails'] = 'Detalhes';
$string['launchdetails_help'] = 'Um URL do Cartridge (também chamado de URL de configuração) e a senha ou um URL de inicialização são necessários para configurar a ferramenta.';
$string['launchurl'] = 'URL de inicialização';
$string['loginurl'] = 'URL de autenticação';
$string['lti13'] = 'LTI Advantage';
$string['lti13launchdetails'] = 'Detalhes';
$string['lti13launchdetails_help'] = 'O URL de inicialização e as propriedades personalizadas são necessárias apenas ao configurar manualmente na plataforma uma hiperligação para um recurso. Sempre que possível, os professores devem favorecer o processo de seleção de conteúdo (deep linking) para a criação de hiperligações para recursos.';
$string['lti:config'] = 'Configurar \'Publicar como ferramenta LTI\'';
$string['lti:unenrol'] = 'Cancelar inscrição dos utilizadores na disciplina';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = 'Ocorreu um problema ao obter a configuração OpenID da plataforma. O resultado não era um JSON válido. Isto também pode ser causado pela configuração de hosts bloqueados. Verifique se o seu site está configurado para ligar-se ao domínio da plataforma e tente novamente usando um novo URL de registo.';
$string['ltiadvlauncherror:invaliddeployment'] = 'Dados de inicialização ou configuração da ferramenta inválidos. A implementação não foi encontrada (ID da implementação: {$a}).';
$string['ltiadvlauncherror:invalidid'] = 'Dados de inicialização inválidos. O recurso \'{$a}\' está indisponível ou não existe.';
$string['ltiadvlauncherror:invalidregistration'] = 'Dados de inicialização ou configuração da ferramenta inválidos. Não foi possível encontrar o registo da plataforma (emissor: {$a->platform}, ID do cliente: {$a->clientid}).';
$string['ltiadvlauncherror:missingid'] = 'Dados de inicialização inválidos. É necessário o campo de declaração personalizado \'id\' para iniciar uma atividade ou recurso em LTI Advantage.';
$string['ltilegacy'] = 'LTI antigas (1.1/2.0)';
$string['ltilegacydeprecatednotice'] = 'As ferramentas LTI antigas (1.1/2.0) estão obsoletas. O conteúdo deve ser partilhado usando LTI Advantage.';
$string['ltiversion'] = 'Versão LTI';
$string['ltiversion_help'] = 'A versão LTI que será usada para aceder o conteúdo publicado.

A versão LTI Advantage permite que o conteúdo seja publicado em plataformas pré-registadas sem a necessidade de fazer alterações na plataforma sempre que um novo conteúdo for publicado. O contrato de segurança é entre a plataforma e a ferramenta.

As versões antigas (1.1 e 2.0) exigem que seja criado no consumidor um novo registo da ferramenta para cada conteúdo recém-publicado porque cada conteúdo publicado tem o seu próprio contrato de segurança com o site do consumidor e deve ser configurado caso a caso.';
$string['managedeployments'] = 'Gerir implementações';
$string['maxenrolled'] = 'Número máximo de utilizadores inscritos';
$string['maxenrolled_help'] = 'O número máximo de utilizadores externos que podem aceder à ferramenta. Se definir como zero, o número de utilizadores inscritos é ilimitado.';
$string['maxenrolledreached'] = 'Foi atingido o número máximo de utilizadores externos autorizados a aceder à ferramenta.';
$string['membersync'] = 'Sincronizar utilizadores';
$string['membersync_help'] = 'Determina se é, ou não, executada uma tarefa regular para sincronizar as inscrições nesta disciplina com os utilizadores registados num sistema remoto, sendo criada uma conta para cada utilizador existente no sistema remoto e, se necessário, inscrevendo-os ou cancelando a inscrição, conforme requerido.

Se desativar esta opção, sempre que um utilizador remoto acede a esta ferramenta, será criada uma conta de utilizador e este ficará automaticamente inscrito.';
$string['membersyncmode'] = 'Modo de sincronização de utilizadores';
$string['membersyncmode_help'] = 'Define se os utilizadores externos devem ser inscritos e/ou cancelada a inscrição nesta disciplina.';
$string['membersyncmodeenrolandunenrol'] = 'Inscrever novos utilizadores e cancelar a inscrição dos utilizadores ausentes';
$string['membersyncmodeenrolnew'] = 'Inscrever novos utilizadores';
$string['membersyncmodeunenrolmissing'] = 'Cancelar inscrição dos utilizadores ausentes';
$string['moodle'] = 'Moodle';
$string['nodeployments'] = 'Nenhuma implementação de ferramenta encontrada';
$string['nopublishedcontent'] = 'Ainda não foi publicado qualquer recurso ou atividade';
$string['noregisteredplatforms'] = 'Nenhuma plataforma registada';
$string['notoolsprovided'] = 'Não existem ferramentas';
$string['opensslconfiginvalid'] = 'LTI 1.3 requer que esteja configurado um \'openssl.cnf\' válido e disponível para o seu servidor web. Contacte o administrador do site para configurar e ativar o \'openssl\' para este site.';
$string['opentool'] = 'Abrir ferramenta';
$string['platformdetails'] = 'Detalhes da plataforma';
$string['platformdetailsinfo'] = 'Após terminada a configuração da ferramenta na plataforma, os detalhes da plataforma devem ser registados aqui para concluir o registo.
<ul>
<li>Para registos dinâmicos, esta informação será definida automaticamente e não serão necessárias quaisquer alterações.</li>
<li>Para registos manuais, esta informação tem de ser copiada manualmente da plataforma.</li>
</ul>';
$string['pluginname'] = 'Publicar como ferramenta LTI';
$string['pluginname_desc'] = 'O módulo \'Publicar como ferramenta LTI\' em conjunto com o módulo de autenticação LTI permite que utilizadores externos possam aceder a disciplinas e atividades selecionadas. Por outras palavras, o Moodle funciona como um fornecedor de ferramenta LTI.';
$string['privacy:metadata:enrol_lti_users'] = 'Lista de utilizadores inscritos via LTI';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'A data e hora do último acesso do utilizador à disciplina';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Última avaliação registada do utilizador';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Data e hora em que o utilizador foi inscrito';
$string['privacy:metadata:enrol_lti_users:userid'] = 'ID do utilizador';
$string['provisioningmode'] = 'Modo de provisionamento';
$string['provisioningmode_help'] = 'Esta configuração determina como são tratadas as contas na primeira inicialização. São suportados vários modos :
<ul>
<li>Apenas novas contas (automático). As contas serão criadas automaticamente para os utilizadores que iniciarem a partir da plataforma. É o valor predefinido para inicialização dos alunos.</li>
<li>Contas novas e existentes (perguntar). O utilizador poderá escolher o que fazer. Pode decidir vincular uma conta já existente ou criar uma nova conta. É a opção mais flexível e é a predefinição para inicialização dos professores.</li>
<li>Apenas contas existentes (perguntar). Será pedido ao utilizador para vincular uma conta existente e não poderá aceder aos recursos da ferramenta se não o fizer.</li>
</ul>';
$string['provisioningmodestudentlaunch'] = 'Modo de provisionamento da primeira inicialização do aluno';
$string['provisioningmodeteacherlaunch'] = 'Modo de provisionamento da primeira inicialização do professor';
$string['publishedcontent'] = 'Conteúdo publicado';
$string['publishedcontent_help'] = 'Um recurso ou uma atividade publicada pode ser usada em plataformas registadas por meio do fluxo de seleção de conteúdo (deep linking). Além disso, pode ser criada manualmente na plataforma uma hiperligação para o recurso usando o URL de inicialização e fornecidas as propriedades personalizadas.';
$string['registeredplatforms'] = 'Plataformas registadas';
$string['registeredplatformsltiversionnotice'] = 'As plataformas listadas abaixo estão registadas para comunicação LTI 1.3. Para versões anteriores, não é necessário o registo do consumidor.';
$string['registerplatform:accesstokenurl'] = 'URL do token de acesso';
$string['registerplatform:accesstokenurl_help'] = 'O URL para onde serão enviados pela ferramenta os pedidos de token de acesso. Será fornecido pela plataforma.';
$string['registerplatform:authrequesturl'] = 'URL do pedido de autenticação';
$string['registerplatform:authrequesturl_help'] = 'O URL para onde serão enviados pela ferramenta os pedidos de autenticação do OpenID Connect. Será fornecido pela plataforma.';
$string['registerplatform:clientid'] = 'ID do cliente';
$string['registerplatform:clientid_help'] = 'Uma string usada para identificar o registo da ferramenta na plataforma. Será fornecida pela plataforma.';
$string['registerplatform:duplicateregistrationerror'] = 'ID do cliente inválido. Este ID do cliente já está registado para o ID da plataforma fornecido.';
$string['registerplatform:invalidurlerror'] = 'URL inválido. Incluiu http:// ou https://?';
$string['registerplatform:jwksurl'] = 'URL do conjunto de chaves públicas';
$string['registerplatform:jwksurl_help'] = 'O conjunto de chaves públicas ou URL do JWKS, usado para obter a chave pública da plataforma. Será fornecido pela plataforma.';
$string['registerplatform:name'] = 'Nome da plataforma';
$string['registerplatform:name_help'] = 'Um nome curto que descreve a plataforma. Pode ser alterado a qualquer momento.';
$string['registerplatform:platformid'] = 'ID da plataforma (emissor)';
$string['registerplatform:platformid_help'] = 'O URL que identifica a plataforma de aprendizagem de terceiros. Será fornecido pela plataforma.';
$string['registerplatformadd'] = 'Registar plataforma';
$string['registerplatformaddnotice'] = 'Registo da plataforma adicionado';
$string['registerplatformdelete'] = 'Apagar registo da plataforma';
$string['registerplatformdeleteconfirm'] = 'Tem a certeza de que pretende apagar o registo da plataforma \'{$a}\'? Isto também apagará todas as implementações de ferramentas armazenadas neste registo.';
$string['registerplatformdeletenotice'] = 'Registo da plataforma apagado';
$string['registerplatformedit'] = 'Editar registo';
$string['registerplatformeditnotice'] = 'Registo da plataforma atualizado';
$string['registration'] = 'Registo de ferramentas publicadas';
$string['registrationdeeplinklabel'] = 'Adicionar conteúdo desde {$a}';
$string['registrationdynamic'] = 'Registo dinâmico';
$string['registrationmanual'] = 'Registo manual';
$string['registrationresourcelinklabel'] = 'Iniciar conteúdo desde {$a}';
$string['registrationstatus'] = 'Estado';
$string['registrationstatusactive'] = 'Ativo';
$string['registrationstatuspending'] = 'Pendente';
$string['registrationurl'] = 'URL de registo';
$string['registrationurl_help'] = 'Se um URL de registo (também chamado de URL de proxy) é usado, a ferramenta é configurada automaticamente.';
$string['registrationurlinfomessage'] = 'Se a plataforma suportar o registo dinâmico, use o URL abaixo. Para mais informações sobre o registo dinâmico, consulte a documentação <a href="{$a}">Publicar como ferramenta LTI</a>.';
$string['remotesystem'] = 'Sistema externo';
$string['requirecompletion'] = 'Requer a conclusão prévia da disciplina ou da atividade para sincronizar as notas';
$string['returnurlnotset'] = 'O URL devolvido não foi definido.';
$string['roleinstructor'] = 'Papel para o professor';
$string['roleinstructor_help'] = 'O papel atribuído na ferramenta para o professor externo.';
$string['rolelearner'] = 'Papel para o aluno';
$string['rolelearner_help'] = 'O papel atribuído na ferramenta para o aluno externo.';
$string['secret'] = 'Senha';
$string['secret_help'] = 'Uma string de texto que é partilhada com o sistema externo (Cliente LTI) para permitir o acesso à ferramenta.';
$string['sharedexternaltools'] = 'Publicado como ferramentas LTI';
$string['successfulregistration'] = 'Registo efetuado com sucesso';
$string['tasksyncgrades'] = 'Sincronização das notas de Publicar como ferramenta LTI';
$string['tasksyncmembers'] = 'Sincronização dos utilizadores de Publicar como ferramenta LTI';
$string['tooldetails'] = 'Detalhes da ferrramenta';
$string['toolsprovided'] = 'Ferramentas publicadas';
$string['toolsprovided_help'] = 'Uma ferramenta pode ser partilhada com outro site fornecendo detalhes de inicialização ou hiperligação de registo.';
$string['tooltobeprovided'] = 'Ferramenta a ser publicada';
$string['toolurl'] = 'URL da ferramenta';
$string['userdefaultvalues'] = 'Valores predefinidos do utilizador';
$string['viewplatformdetails'] = 'Ver os detalhes da plataforma';
$string['viewtoolendpoints'] = 'Ver os endpoints da ferramenta';
