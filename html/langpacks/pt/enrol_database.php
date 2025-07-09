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
 * Strings for component 'enrol_database', language 'pt', version '4.4'.
 *
 * @package     enrol_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:config'] = 'Configurar instâncias de inscrição da base de dados';
$string['database:unenrol'] = 'Cancelar a inscrição de utilizadores suspensos';
$string['dbencoding'] = 'Codificação da base de dados';
$string['dbhost'] = 'Servidor da base de dados';
$string['dbhost_desc'] = 'Digite o IP do servidor da base de dados ou o nome do host. Use um nome do sistema DSN se estiver a usar ODBC. Use PDO DSN se estiver a usar PDO.';
$string['dbname'] = 'Nome da base de dados';
$string['dbname_desc'] = 'Deixe em branco se estiver a usar um nome DSN no servidor da base de dados.';
$string['dbpass'] = 'Senha de acesso à base de dados';
$string['dbsetupsql'] = 'Comando de configuração da base de dados';
$string['dbsetupsql_desc'] = 'Comando SQL para configuração especial de base de dados, geralmente utilizado para configurar codificação de comunicação - exemplo para MySQL e PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'Usar estilo sybase para fazer escaping de plicas';
$string['dbsybasequoting_desc'] = 'Esta configuração é necessária para bases de dados Oracle, MS SQL e outras. Não deve ser usada em bases de dados MySQL.';
$string['dbtype'] = 'Driver da base de dados';
$string['dbtype_desc'] = 'Esta configuração define o nome do <em>driver</em> da base de dados ADOdb correspondente ao motor da base de dados externa.';
$string['dbuser'] = 'Utilizador de acesso à base de dados';
$string['debugdb'] = 'Depuração do ADOdb';
$string['debugdb_desc'] = 'Se ativar esta opção, será feita a análise da ligação do ADOdb à base de dados externa. Esta funcionalidade deve ser utilizada quando surge uma página em branco durante o processo de autenticação. Esta configuração não deve ser usada em sites em produção!';
$string['defaultcategory'] = 'Categoria predefinida para as novas disciplinas criadas';
$string['defaultcategory_desc'] = 'Categoria predefinida para disciplinas criadas autonomamente. Usado quando não é especificado novo ID de categoria ou não foi encontrada.';
$string['defaultrole'] = 'Papel predefinido';
$string['defaultrole_desc'] = 'Papel que será atribuído se não houver nenhum definido na tabela externa.';
$string['ignorehiddencourses'] = 'Ignorar disciplinas ocultas';
$string['ignorehiddencourses_desc'] = 'Se ativar esta opção, os utilizadores não serão inscritos em disciplinas não disponíveis para os alunos.';
$string['localcategoryfield'] = 'Nome do campo "Categoria" na tabela do Moodle';
$string['localcoursefield'] = 'Nome do campo "Disciplina" na tabela do Moodle';
$string['localrolefield'] = 'Nome do campo "Papel" na tabela do Moodle';
$string['localuserfield'] = 'Nome do campo "Utilizador" na tabela do Moodle';
$string['newcoursecategory'] = 'Nome do campo "Identificador da categoria de novas disciplinas" na tabela do Moodle';
$string['newcoursefullname'] = 'Nome do campo "Nome completo de nova disciplina" na tabela do Moodle';
$string['newcourseidnumber'] = 'Nome do campo "ID de nova disciplina" na tabela do Moodle';
$string['newcourseshortname'] = 'Nome do campo "Nome curto de nova disciplina" na tabela do Moodle';
$string['newcoursetable'] = 'Nome da tabela externa de novas disciplinas';
$string['newcoursetable_desc'] = 'Nome da tabela que contém as disciplinas que devem ser criadas automaticamente. Se este campo estiver estiver, quer dizer que não serão criadas disciplinas.';
$string['pluginname'] = 'Base de dados externa';
$string['pluginname_desc'] = 'Este módulo de inscrição permite a utilização de bases de dados externas (de praticamente qualquer tipo) para gerir inscrições. É obrigatório que a base de dados externa contenha pelo menos os campos ID de disciplina e ID de utilizador. Estes campos serão sincronizados com os campos definidos localmente.';
$string['privacy:metadata'] = 'O módulo Base de dados externa não armazena quaisquer dados pessoais.';
$string['remotecoursefield'] = 'Nome do campo "Disciplina" na tabela externa';
$string['remotecoursefield_desc'] = 'Nome do campo na tabela externa que é usado na sincronização com a tabela de disciplinas do Moodle.';
$string['remoteenroltable'] = 'Nome da tabela externa de inscrições';
$string['remoteenroltable_desc'] = 'Nome da tabela externa que contém as inscrições dos utilizadores. Se este campo estiver em branco as inscrições dos utilizadores não serão sincronizadas.';
$string['remoteotheruserfield'] = 'Campo Outro utilizador';
$string['remoteotheruserfield_desc'] = 'O nome do campo na tabela externa que está a ser usada para assinalar atribuições do papel "Outro utilizador".';
$string['remoterolefield'] = 'Nome do campo "Papel" na tabela externa';
$string['remoterolefield_desc'] = 'Nome do campo na tabela externa que é usado na sincronização com a tabela de papéis do Moodle.';
$string['remoteuserfield'] = 'Nome do campo "Utilizador" na tabela externa';
$string['remoteuserfield_desc'] = 'Nome do campo na tabela externa que é usado na sincronização com a tabela de utilizadores do Moodle.';
$string['settingsheaderdb'] = 'Ligação à base de dados externa';
$string['settingsheaderlocal'] = 'Mapeamento local de campos';
$string['settingsheadernewcourses'] = 'Criação de novas disciplinas';
$string['settingsheaderremote'] = 'Sincronização externa de inscrições';
$string['syncenrolmentstask'] = 'Sincronização de inscrições com base de dados externa';
$string['templatecourse'] = 'Modelo para novas disciplinas';
$string['templatecourse_desc'] = 'Opcional: as configurações das disciplinas criadas autonomamente podem ser copiadas de um modelo de disciplina ou de outra disciplina já existente. Indique neste campo o nome curto da disciplina a usar como modelo.';
