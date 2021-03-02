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
 * Strings for component 'auth_cas', language 'pt', version '3.8'.
 *
 * @package     auth_cas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['CASform'] = 'Escolha do método de autenticação';
$string['accesCAS'] = 'Utilizadores CAS';
$string['accesNOCAS'] = 'outros utilizadores';
$string['auth_cas_auth_logo'] = 'Logótipo do método de autenticação';
$string['auth_cas_auth_logo_description'] = 'Forneça um logótipo para o método de autenticação do CAS que seja familiar para seus utilizadores.';
$string['auth_cas_auth_name'] = 'Nome do método de autenticação';
$string['auth_cas_auth_name_description'] = 'Indique um nome para o método de autenticação CAS que seja familiar para os seus utilizadores.';
$string['auth_cas_auth_service'] = 'CAS (Serviço de Autenticação Central)';
$string['auth_cas_auth_user_create'] = 'Criar utilizadores externamente';
$string['auth_cas_baseuri'] = 'URL do servidor (vazio se não houver baseUri)<br />Por exemplo, se o servidor CAS responder a servidor.dominio.pt/CAS/ então<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'URI base';
$string['auth_cas_broken_password'] = 'Não pode prosseguir sem modificar a sua senha. No entanto não existe nenhuma página disponível para o fazer. Por favor, contacte o Administrador do Moodle.';
$string['auth_cas_cantconnect'] = 'A parte LDAP do módulo CAS não consegue ligar ao servidor: {$a}';
$string['auth_cas_casversion'] = 'Versão do protocolo CAS';
$string['auth_cas_certificate_check'] = 'Definir como "Sim" se se pretender validar o certificado do servidor.';
$string['auth_cas_certificate_check_key'] = 'Validação de servidor';
$string['auth_cas_certificate_path'] = 'Caminho para o ficheiro da cadeia CA (formato PEM) para validação de certificado do servidor';
$string['auth_cas_certificate_path_empty'] = 'Se ativar a validação de servidor terá que indicar o caminho para o certificado';
$string['auth_cas_certificate_path_key'] = 'Caminho para o certificado';
$string['auth_cas_changepasswordurl'] = 'URL para modificação da senha';
$string['auth_cas_create_user'] = 'Ative esta configuração se pretender inserir utilizadores autenticados com CAS na base de dados do Moodle. Se esta configuração estiver desativada, apenas os utilizadores que já existirem na base de dados do Moodle terão acesso ao site.';
$string['auth_cas_create_user_key'] = 'Criar utilizador';
$string['auth_cas_curl_ssl_version'] = 'A versão SSL (2 ou 3) para utilização. Por predefinição o PHP determina esta questão automaticamente, no entanto, em alguns casos isto deverá ser definido manualmente.';
$string['auth_cas_curl_ssl_version_SSLv2'] = 'SSLv2';
$string['auth_cas_curl_ssl_version_SSLv3'] = 'SSLv3';
$string['auth_cas_curl_ssl_version_TLSv10'] = 'TLSv1.0';
$string['auth_cas_curl_ssl_version_TLSv11'] = 'TLSv1.1';
$string['auth_cas_curl_ssl_version_TLSv12'] = 'TLSv1.2';
$string['auth_cas_curl_ssl_version_TLSv1x'] = 'TLSv1.x';
$string['auth_cas_curl_ssl_version_default'] = 'Por predefinição';
$string['auth_cas_curl_ssl_version_key'] = 'Versão SSL cURL';
$string['auth_cas_enabled'] = 'Ative esta configuração se pretender utilizar autenticação CAS';
$string['auth_cas_hostname'] = 'Nome do servidor CAS <br />Exemplo: servidor.dominio.pt';
$string['auth_cas_hostname_key'] = 'Nome do servidor';
$string['auth_cas_invalidcaslogin'] = 'Não foi possível validar os seus dados de autenticação.';
$string['auth_cas_language'] = 'Idioma selecionado';
$string['auth_cas_language_key'] = 'Idioma';
$string['auth_cas_logincas'] = 'Acesso por ligação segura';
$string['auth_cas_logout_return_url'] = 'Forneça o URL para onde os utilizadores autenticados via CAS devem ser redirecionados depois sair. <br /> Se deixar este campo por preencher, os utilizadores serão redirecionados para a localização para onde o Moodle redireciona os utilizadores';
$string['auth_cas_logout_return_url_key'] = 'URL alternativo para redirecionamento depois de sair';
$string['auth_cas_logoutcas'] = 'Ative esta configuração se pretende sair do CAS quando termina a sessão Moodle';
$string['auth_cas_logoutcas_key'] = 'Opções de saída do CAS';
$string['auth_cas_multiauth'] = 'Ative esta configuração se pretende ter multiplas autenticações (CAS e outras)';
$string['auth_cas_multiauth_key'] = 'Autenticações adicionais';
$string['auth_cas_port'] = 'Porta do servidor CAS';
$string['auth_cas_port_key'] = 'Porta';
$string['auth_cas_proxycas'] = 'Selecione o valor "Sim" se pretender usar CAS no modo proxy';
$string['auth_cas_proxycas_key'] = 'Modo proxy';
$string['auth_cas_server_settings'] = 'Configuração do servidor CAS';
$string['auth_cas_text'] = 'Ligação segura';
$string['auth_cas_use_cas'] = 'Usar CAS';
$string['auth_cas_version'] = 'Versão do protocolo CAS a usar';
$string['auth_casdescription'] = 'Este método utiliza um servidor CAS (Central Authentication Service) para autenticar utilizadores num ambiente SSO (Single Sign On). Também poderá utilizar a autenticação simples LDAP. Se o nome de utilizador e senha forem validados pelo servidor CAS, o Moodle criará um novo utilizador na sua base de dados, aproveitando os atributos do utilizador do LDAP se necessário. Em autenticações futuras do mesmo utilizador apenas o nome de utilizador e senha serão verificados.';
$string['auth_casnotinstalled'] = 'Não pode utilizar o método de autenticação CAS porque o módulo LDAP do PHP não está instalado.';
$string['noldapserver'] = 'Não existem servidores LDAP configurados para CAS! A sincronização está desativa..';
$string['pluginname'] = 'Servidor CAS (SSO)';
$string['privacy:metadata'] = 'O módulo de autenticação Servidor CAS (SSO) não armazena nenhum dado pessoal.';
$string['synctask'] = 'Tarefa de sincronização dos utilizadores de CAS';
