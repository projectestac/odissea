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
 * Strings for component 'auth_db', language 'pt', version '4.5'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'Não foi possível ligar à base de dados externa';
$string['auth_dbcannotreadtable'] = 'Não é possível ler a tabela externa.';
$string['auth_dbcantconnect'] = 'Não foi possível ligar à base de dados de autenticação…';
$string['auth_dbchangepasswordurl_key'] = 'URL para alteração da senha';
$string['auth_dbcolumnlist'] = 'A tabela externa contém as seguintes colunas:<br /> {$a}';
$string['auth_dbdebugauthdb'] = 'Depuração do ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Depuração da ligação do ADOdb à base de dados externa - utilizar quando se obtiver uma página vazia no início de sessão. Não deve ser usado em sites em produção.';
$string['auth_dbdeleteuser'] = 'Foi apagado o utilizador {$a->name} com o id {$a->id}';
$string['auth_dbdeleteusererror'] = 'Erro ao apagar o utilizador {$a}';
$string['auth_dbdescription'] = 'Este método usa uma base de dados externa para verificar se um nome de utilizador e senha são válidos. Se for uma conta nova, a informação de outros campos pode ser também usada na criação da conta Moodle.';
$string['auth_dbextencoding'] = 'Codificação da base de dados externa';
$string['auth_dbextencodinghelp'] = 'Codificação usada na base de dados externa';
$string['auth_dbextrafields'] = 'Estes campos são opcionais. Pode optar por preencher alguns campos do perfil do utilizador com informação da base de dados externa indicada aqui.<p>Se deixar estes campos vazios serão usados os valores predefinidos.</p><p>Em qualquer caso, o utilizador poderá alterar estes dados depois de autenticar-se no Moodle.</p>';
$string['auth_dbfieldpass'] = 'Nome do campo que contém as senhas';
$string['auth_dbfieldpass_key'] = 'Campo senha';
$string['auth_dbfielduser'] = 'Nome do campo que contém os nomes de utilizador. Este campo deve ser do tipo de dados de caráter variável (varchar).';
$string['auth_dbfielduser_key'] = 'Campo nome de utilizador';
$string['auth_dbhost'] = 'Computador onde está alojado o servidor da base de dados. Use um sistema de entrada DSN se estiver a usar ODBC. Use uma entrada PDO DSN se estiver a usar PDO.';
$string['auth_dbhost_key'] = 'Servidor';
$string['auth_dbinsertuser'] = 'Foi criado o utilizador {$a->name} com o id {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'Erro ao inserir {$a->username} - o utilizador com este nome já foi criado através do módulo \'{$a->auth}';
$string['auth_dbinsertusererror'] = 'Erro ao criar o utilizador {$a}';
$string['auth_dbname'] = 'Nome da própria base de dados. Deixe em branco se estiver a usar um DSN ODBC. Deixe em branco se o seu PDO DSN já contém o nome da base de dados.';
$string['auth_dbname_key'] = 'Nome da base de dados';
$string['auth_dbnoexttable'] = 'Não foi especificada a tabela externa.';
$string['auth_dbnouserfield'] = 'Não foi especificada o campo de utilizador externo.';
$string['auth_dbpass'] = 'Senha do utilizador indicado acima';
$string['auth_dbpass_key'] = 'Senha';
$string['auth_dbpasstype'] = '<p>Especifique o formato do campo da senha que está em uso.</p> <p>Utilize \'interno\' se quiser que a base de dados externa faça a gestão dos nomes de utilizadores e endereços de e-mail, mas que seja o Moodle a gerir as senhas. Se usar o modo \'interno\', tem de inserir um campo de endereço de e-mail na base de dados externa e tem de ativar a tarefa agendada \'\\auth_db\\task\\sync_users\'. O Moodle enviará um e-mail aos novos utilizadores com uma senha temporária.</p>';
$string['auth_dbpasstype_key'] = 'Formato da senha';
$string['auth_dbreviveduser'] = 'O utilizador {$a->name} com ID {$a->id} foi reativado';
$string['auth_dbrevivedusererror'] = 'Erro ao reativar o utilizador {$a}';
$string['auth_dbsaltedcrypt'] = 'Crypt one-way string hashing';
$string['auth_dbsetupsql'] = 'Comando de configuração do SQL';
$string['auth_dbsetupsqlhelp'] = 'Comando SQL especial para configuração da base de dados. É usado frequentemente para configurar a codificação da comunicação. Exemplo para MySQL e PostgreSQL: <em>SET NAMES "utf8"</em>';
$string['auth_dbsuspenduser'] = 'O utilizador {$a->name} com ID {$a->id} foi suspenso';
$string['auth_dbsuspendusererror'] = 'Erro ao suspender o utilizador {$a}';
$string['auth_dbsybasequoting'] = 'Usar formato de aspas Sybase';
$string['auth_dbsybasequotinghelp'] = 'Usar o estilo de Sybase de escaping de aspas - necessário para Oracle, MS SQL e outras bases de dados. Não usar com MySQL!';
$string['auth_dbsyncuserstask'] = 'Sincronização de utilizadores';
$string['auth_dbtable'] = 'Nome da tabela na base de dados';
$string['auth_dbtable_key'] = 'Tabela';
$string['auth_dbtableempty'] = 'A tabela externa está vazia.';
$string['auth_dbtype'] = 'Tipo de base de dados (consulte a documentação <a href="http://adodb.org/dokuwiki/doku.php" target="_blank">ADOdb - camada de abstração da base de dados para PHP</a> para mais detalhes).';
$string['auth_dbtype_key'] = 'Base de dados';
$string['auth_dbupdateerror'] = 'Ocorreu um erro ao atualizar a base de dados externa.';
$string['auth_dbupdateusers'] = 'Atualizar utilizadores';
$string['auth_dbupdateusers_description'] = 'Bem como ao inserir novos utilizadores, atualizar os utilizadores já existentes.';
$string['auth_dbupdatinguser'] = 'A atualizar o utilizador {$a->name} com ID {$a->id}';
$string['auth_dbuser'] = 'Nome de utilizador da conta com permissão de leitura na base de dados';
$string['auth_dbuser_key'] = 'Utilizador da base de dados';
$string['auth_dbuserstoadd'] = 'Registos de utilizador a adicionar: {$a}';
$string['auth_dbuserstoremove'] = 'Registos de utilizador a remover: {$a}';
$string['pluginname'] = 'Base de dados externa';
$string['privacy:metadata'] = 'O módulo de autenticação Base de dados externa não armazena quaisquer dados pessoais.';
