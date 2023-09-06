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
 * Strings for component 'tool_oauth2', language 'pt', version '4.1'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptrisk'] = 'Entendo que desativar a verificação de e-mail pode causar um problema de segurança.';
$string['acceptrisk_help'] = 'Desativar a verificação de e-mail pode potencialmente permitir que um utilizador se autentique como outro.';
$string['authconfirm'] = 'Esta ação concederá à API acesso permanente ao Moodle para a conta autenticada. Destina-se a ser usada como uma conta de sistema para gerir ficheiros que são propriedade do Moodle.';
$string['authconnected'] = 'A conta de sistema está ligada para acesso offline';
$string['authnotconnected'] = 'A conta de sistema não está ligada para acesso offline';
$string['clever_service'] = 'Clever';
$string['configured'] = 'Configurado';
$string['configuredstatus'] = 'Configurado';
$string['connectsystemaccount'] = 'Ligar a uma conta de sistema';
$string['createfromtemplate'] = 'Criar um serviço OAauth2 a partir de um modelo';
$string['createfromtemplatedesc'] = 'Escolha um modelo de serviço OAuth 2 abaixo para criar um novo serviço OAuth com uma configuração válida para um dos tipos de serviços conhecidos. Será criado o serviço OAuth 2, com todos os termos corretos e parâmetros necessários para autenticação, todavia ainda será necessário digitar o ID do cliente e chave secreta para o novo serviço antes que possa ser usado.';
$string['createnewendpoint'] = 'Criar novo endpoint para o emissor "{$a}"';
$string['createnewfacebookissuer'] = 'Criar novo serviço Facebook';
$string['createnewgoogleissuer'] = 'Criar novo serviço Google';
$string['createnewissuer'] = 'Criar novo serviço personalizado';
$string['createnewmicrosoftissuer'] = 'Criar novo serviço Microsoft';
$string['createnewnextcloudissuer'] = 'Criar novo serviço Nextcloud';
$string['createnewservice'] = 'Criar um novo serviço:';
$string['createnewuserfieldmapping'] = 'Criar novo mapeamento de campo de utilizador para o emissor "{$a}"';
$string['custom_service'] = 'Personalizado';
$string['deleteconfirm'] = 'Tem a certeza de que pretende apagar o emissor de identidade "{$a}"? Quaisquer módulos que dependam deste emissor deixarão de funcionar.';
$string['deleteendpointconfirm'] = 'Tem a certeza de que pretende apagar o endpoint "{$a->endpoint}" para o emissor "{$a->issuer}"? Quaisquer módulos que dependam deste endpoint deixarão de funcionar.';
$string['deleteuserfieldmappingconfirm'] = 'Tem a certeza de que pretende apagar o mapeamento de campo do utilizador para o emissor "{$a}"?';
$string['discovered'] = 'Pesquisa de serviço bem-sucedida';
$string['discovered_help'] = 'Pesquisar significa que os endpoints OAuth 2 podem ser determinados automaticamente a partir do URL de base do serviço OAuth. Nem todos os serviços precisam de ser "pesquisados", mas se não forem, os endpoints e as informações do mapeamento dos campos do utilizador precisarão de ser digitados manualmente.';
$string['discoverystatus'] = 'Pesquisa';
$string['editendpoint'] = 'Editar endpoint: {$a->endpoint} para o emissor {$a->issuer}';
$string['editendpoints'] = 'Configurar endpoints';
$string['editissuer'] = 'Alterar dados de identidade do emissor: {$a}';
$string['edituserfieldmapping'] = 'Alterar mapeamento do campo do utilizador para o emissor: {$a}';
$string['edituserfieldmappings'] = 'Configurar mapeamentos de campo do utilizador';
$string['endpointdeleted'] = 'Endpoint apagado';
$string['endpointname'] = 'Nome';
$string['endpointname_help'] = 'Chave utilizada para pesquisar este endpoint. Deve terminar com "_ endpoint".';
$string['endpointsforissuer'] = 'Endpoints para o emissor: {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'URL para este endpoint. Deve usar o protocolo https://.';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['imsobv2p1_service'] = 'Open Badges';
$string['issueralloweddomains'] = 'Domínios de autenticação';
$string['issueralloweddomains_help'] = 'Se ativar esta opção, esta configuração é uma lista de domínios, separados por vírgulas, aos quais as autenticações estão restritas ao usar este fornecedor.';
$string['issueralloweddomains_link'] = 'OAuth_2_login_domains';
$string['issuerbaseurl'] = 'URL base do serviço';
$string['issuerbaseurl_help'] = 'URL base utilizado para aceder ao serviço.';
$string['issuerclientid'] = 'ID do Cliente';
$string['issuerclientid_help'] = 'ID do Cliente OAuth para este emissor.';
$string['issuerclientsecret'] = 'Chave secreta';
$string['issuerclientsecret_help'] = 'Chave secreta do Cliente OAuth para este emissor.';
$string['issuerdeleted'] = 'Emissor de identidade apagado';
$string['issuerdisabled'] = 'Emissor de identidade desativado';
$string['issuerenabled'] = 'Emissor de identidade ativado';
$string['issuerimage'] = 'URL do logótipo';
$string['issuerimage_help'] = 'O URL da imagem usada como logótipo deste emissor. Pode ser mostrada na página de autenticação.';
$string['issuerloginpagename'] = 'Nome exibido na página de autenticação';
$string['issuerloginpagename_help'] = 'Se especificado, este nome será usado na página de autenticação em vez do nome do serviço acima.';
$string['issuerloginparams'] = 'Parâmetros adicionais incluídos numa solicitação de autenticação';
$string['issuerloginparams_help'] = 'Alguns sistemas exigem parâmetros adicionais durante a autenticação para permitir ler o perfil dos utilizadores.';
$string['issuerloginparamsoffline'] = 'Parâmetros adicionais incluídos numa solicitação de autenticação para acesso offline';
$string['issuerloginparamsoffline_help'] = 'Cada sistema OAauth define uma maneira diferente de solicitar acesso offline. Por exemplo, a Google requer os parâmetros adicionais: "access_type=offline&prompt=consent". Estes parâmetros devem estar incluídos no formato do URL do parâmetro de consulta.';
$string['issuerloginscopes'] = 'Âmbitos incluídos numa solicitação de autenticação';
$string['issuerloginscopes_help'] = 'Alguns sistemas requerem âmbitos adicionais na solicitação de autenticação para lerem o perfil básico dos utilizadores. Os âmbitos padrão para um sistema compatível com OpenID Connect são "e-mail de perfil OpenID".';
$string['issuerloginscopesoffline'] = 'Âmbitos incluídos numa solicitação de autenticação para acesso offline';
$string['issuerloginscopesoffline_help'] = 'Cada sistema OAuth tem uma maneira diferente de solicitar acesso offline. Por exemplo, a Microsoft requer o âmbito adicional "offline_access"';
$string['issuername'] = 'Nome';
$string['issuername_help'] = 'Nome do emissor de identidade. Pode ser mostrado na página de autenticação.';
$string['issuerrequireconfirmation'] = 'Requer verificação de e-mail';
$string['issuerrequireconfirmation_help'] = 'Requerer que todos os utilizadores confirmem o seu endereço de e-mail antes de poderem autenticar-se com o OAuth. Isso aplica-se a contas recém-criadas como parte do processo de autenticação ou quando uma conta Moodle já existente está ligada através de OAuth com endereço de e-mail correspondente.';
$string['issuers'] = 'Emissores';
$string['issuersetup'] = 'Instruções detalhadas para configurar os serviços mais comuns de OAuth 2';
$string['issuersetuptype'] = 'Instruções detalhadas para configurar o fornecedor OAauth 2 {$a}';
$string['issuershowonloginpage'] = 'Mostrar na página de autenticação';
$string['issuershowonloginpage_help'] = 'Se o módulo de autenticação OAuth 2 estiver ativado, este emissor de autenticação será mostrado na página de autenticação para permitir que os utilizadores possam autenticar-se com contas deste emissor.';
$string['issuersservicesallow'] = 'Permitir serviços';
$string['issuersservicesnotallow'] = 'Não permitir serviços';
$string['issuerusedforinternal'] = 'Serviços internos';
$string['issuerusedforlogin'] = 'Autenticação';
$string['issuerusein'] = 'Este serviço será usado';
$string['issuerusein_help'] = 'Os serviços OAuth 2 podem ser usados em serviços internos, na página de autenticação ou em ambos, se necessário';
$string['issueruseineverywhere'] = 'Página de autenticação e serviços internos';
$string['issueruseininternalonly'] = 'Apenas serviços internos';
$string['issueruseinloginonly'] = 'Apenas na página de autenticação';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = 'Mostrar na página de autenticação com';
$string['loginissuer'] = 'Permitir autenticação';
$string['microsoft_service'] = 'Microsoft';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = 'Não configurado';
$string['notdiscovered'] = 'A pesquisa de serviço não foi bem sucedida';
$string['notloginissuer'] = 'Não permitir autenticação';
$string['pluginname'] = 'Serviços OAuth 2';
$string['privacy:metadata'] = 'O módulo Serviços OAuth 2 não armazena dados pessoais.';
$string['savechanges'] = 'Guardar alterações';
$string['serviceshelp'] = 'Instruções de configuração do fornecedor de serviços';
$string['systemaccountconnected'] = 'Conta do sistema ligada';
$string['systemaccountconnected_help'] = 'Contas de sistema são usadas para fornecer funcionalidades avançadas aos módulos. Não são apenas necessárias para a funcionalidade de autenticação. Outros módulos que usam o serviço OAuth podem oferecer apenas um conjunto reduzido de funcionalidades se a conta de sistema não estiver ligada. Por exemplo, os repositórios não suportam "hiperligações controladas" sem uma conta de sistema para executar operações de ficheiro.';
$string['systemaccountnotconnected'] = 'Conta do sistema não ligada';
$string['systemauthstatus'] = 'Conta do sistema ligada';
$string['usebasicauth'] = 'Autenticar solicitações de token via cabeçalhos HTTP';
$string['usebasicauth_help'] = 'Utilize o esquema de autenticação HTTP Basic ao enviar o ID do cliente e a senha com um pedido de atualização de token. É recomendado pelo OAuth 2 padrão mas pode não estar disponível com outros emissores.';
$string['userfieldexternalfield'] = 'Nome do campo externo';
$string['userfieldexternalfield_error'] = 'Este campo não pode conter HTML';
$string['userfieldexternalfield_help'] = 'Nome do campo fornecido pelo sistema OAuth externo.';
$string['userfieldinternalfield'] = 'Nome do campo interno';
$string['userfieldinternalfield_help'] = 'Nome do campo do utilizador Moodle que deve ser mapeado a partir do campo externo.';
$string['userfieldmappingdeleted'] = 'Mapeamento do campo de utilizador apagado';
$string['userfieldmappingsforissuer'] = 'Mapeamentos do campo de utilizador para o emissor: {$a}';
