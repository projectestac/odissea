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
 * Strings for component 'auth_shibboleth', language 'pt', version '3.11'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'Logótipo do método de autenticação';
$string['auth_shib_auth_logo_description'] = 'Indique um logótipo para o método de autenticação Shibboleth que seja familiar para os seus utilizadores. Pode usar, por exemplo, o logótipo da sua federação Shibboleth, por exemplo, <tt>SWITCHaai Login</tt> ou <tt>InCommon Login</tt> ou outro similar';
$string['auth_shib_auth_method'] = 'Nome do método de autenticação';
$string['auth_shib_auth_method_description'] = 'Indique um nome para o método de autenticação Shibboleth que seja familiar para os seus utilizadores. Pode usar, por exemplo, o nome da sua federação Shibboleth: SWITCHaai Login ou InCommon Login';
$string['auth_shib_changepasswordurl'] = 'URL para alteração da senha:';
$string['auth_shib_contact_administrator'] = 'Caso não esteja associado às organizações indicadas e precise de aceder a uma disciplina neste servidor, por favor, contacte o <a href="mailto:{$a}">Administrador Moodle</a>.';
$string['auth_shib_convert_data'] = 'API de modificação de dados';
$string['auth_shib_convert_data_description'] = 'Pode utilizar esta API para modificar os dados provenientes do servidor Shibboleth. Para mais informações, consulte a página <a href="{$a}">README</a>.';
$string['auth_shib_convert_data_filepath_warning'] = 'Não pode usar um ficheiro que está localizado na pasta atual dos dados do site ($CFG->dataroot) como a API de modificação de dados.';
$string['auth_shib_convert_data_warning'] = 'O ficheiro não existe ou não está disponível para leitura pelo processo do servidor web!';
$string['auth_shib_idp_list'] = 'Fornecedores de identidade';
$string['auth_shib_idp_list_description'] = 'Indique uma lista de fornecedores de identidade para que os utilizadores possam escolher um ao se autenticar.<br />Em cada linha devem ser indicados, separados por vírgulas, o identificador do fornecedor de identidade (consultar o ficheiro Shibboleth de metadados) e o seu nome (tal como deve ser apresentado aos utilizadores).<br />Opcionalmente pode ainda ser indicada a localização do iniciador de sessão Shibboleth que será usado pelo Moodle caso faça parte de uma federação.';
$string['auth_shib_instructions'] = 'Se a sua instituição o disponibilizar, pode entrar com <a href="{$a}">autenticação Shibboleth</a>. Em alternativa pode usar o formulário de autenticação normal nesta página.';
$string['auth_shib_instructions_help'] = 'Texto de instruções para explicar a autenticação Shibboleth aos utilizadores. Esta informação será mostrada na página de autenticação, na secção de instruções. As instruções deverão incluir a hiperligação "<b>{$a}</b>" para os utilizadores clicarem quando quiserem autenticar-se no site.';
$string['auth_shib_instructions_key'] = 'Instruções de autenticação';
$string['auth_shib_integrated_wayf'] = 'Serviço WAYF do Moodle';
$string['auth_shib_integrated_wayf_description'] = 'Se ativar esta opção, o Moodle usará o seu próprio serviço WAYF em vez do configurado para Shibboleth. O Moodle irá mostrar uma lista pendente na página alternativa de autenticação onde o utilizador tem que selecionar o seu Provedor de Identidade.';
$string['auth_shib_logout_return_url'] = 'URL alternativo para a página de destino após terminar sessão';
$string['auth_shib_logout_return_url_description'] = 'Indique o URL da página para onde deverão ser direcionados os utilizadores Shibboleth quando terminam a sua sessão.<br />Se este campo estiver vazio, os utilizadores serão direcionados para a página que estiver predefinida no Moodle.';
$string['auth_shib_logout_url'] = 'URL para processamento de saída do fornecedor de serviço Shibboleth';
$string['auth_shib_logout_url_description'] = 'Indique o URL da página que deve fazer o processamento de saída de sessão do fornecedor de serviço Shibboleth. Ex: /Shibboleth.sso/Logout';
$string['auth_shib_no_organizations_warning'] = 'Se quiser integrar o serviço WAYF deverá fornecer uma lista de identicadores dos fornecedores de identidade, os seus nomes e, opcionalmente, um iniciador de sessão (separados por vírgulas).';
$string['auth_shib_only'] = 'Apenas Shibboleth';
$string['auth_shib_only_description'] = 'Ative esta configuração se quiser forçar autenticação Shibboleth';
$string['auth_shib_username_description'] = 'Nome da variável de ambiente do servidor web Shibboleth que deverá ser utilizada como nome de utilizador no Moodle.';
$string['auth_shibboleth_errormsg'] = 'Por favor, selecione a organização à qual pertence!';
$string['auth_shibboleth_login'] = 'Autenticação Shibboleth';
$string['auth_shibboleth_login_long'] = 'Autenticar-se no Moodle via Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Autenticação Manual';
$string['auth_shibboleth_select_member'] = 'Sou membro de...';
$string['auth_shibboleth_select_organization'] = 'Para autenticar-se via Shibboleth, por favor, selecione a sua organização da lista pendente:';
$string['auth_shibbolethdescription'] = 'Com este método os utilizadores serão criados e autenticados utilizando  Shibboleth. Para mais informações sobre como configurar o seu Moodle com Shibboleth, consulte a página <a href="{$a}">Shibboleth README</a>.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'O módulo de autenticação Shibboleth não armazena quaisquer dados pessoais.';
$string['shib_invalid_account_error'] = 'Aparentemente encontra-se autenticado via Shibboleth, no entanto o Moodle não encontra uma conta válida associada ao seu nome de utilizador. A sua conta pode não existir ou pode ter sido suspensa.';
$string['shib_no_attributes_error'] = 'Foi identificado como um utilizador autenticado via Shibboleth, mas o Moodle não recebeu quaisquer informações de utilizador. Confirme, por favor, que o seu fornecedor de identidade está a disponibilizar essa informação ({$a}) ao fornecedor de serviço que o Moodle está a usar. Em alternativa, contacte o administrador do site.';
$string['shib_not_all_attributes_error'] = 'O Moodle precisa de alguns atributos Shibboleth que não encontrou no seu perfil. Os atributos necessários: {$a}<br />Por favor, contacte o administrador do site ou o seu fornecedor de identidade.';
$string['shib_not_set_up_error'] = 'A autenticação Shibboleth parece não estar corretamente configurada porque não foram detetadas variáveis de ambiente Shibboleth nesta página. Consulte a página <a href="{$a}">README</a> para mais instruções sobre como configurar a autenticação Shibboleth ou contacte o administrador do site.';
