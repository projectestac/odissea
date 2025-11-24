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
 * Strings for component 'tool_dbtransfer', language 'pt', version '4.5'.
 *
 * @package     tool_dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'Drivers de base de dados disponíveis para migração';
$string['cliheading'] = 'Migração da base de dados - assegures-se que ninguém está a aceder ao servidor durante a migração';
$string['climigrationnotice'] = 'Migração de base de dados em curso. Por favor, espere que a migração termine, o administrador atualize as configurações e apague o ficheiro $CFG->dataroot/climaintenance.html';
$string['convertinglogdisplay'] = 'A converter as ações do';
$string['dbexport'] = 'Exportação da base de dados';
$string['dbtransfer'] = 'Migração da base de dados';
$string['enablemaintenance'] = 'Ativar modo de manutenção';
$string['enablemaintenance_help'] = 'Esta opção ativa o modo de manutenção durante e depois da migração da base de dados, impedindo o acesso dos utilizadores até a migração estar completa. Tenha em atenção que para o funcionamento voltar ao normal, o administrador tem de apagar manualmente o ficheiro $CFG->dataroot/climaintenance.html depois de atualizar as configurações em \'config.php\'.';
$string['exportdata'] = 'Exportar dados';
$string['notargetconectexception'] = 'Não é possível ligar à base de dados.';
$string['options'] = 'Opções';
$string['pluginname'] = 'Transferir da base de dados';
$string['privacy:metadata'] = 'O módulo Transferência da base de dados não armazena dados pessoais.';
$string['targetdatabase'] = 'Base de dados alvo';
$string['targetdatabasenotempty'] = 'A base de dados alvo não pode conter nenhuma tabela com o prefixo definido';
$string['transferdata'] = 'Transferir dados';
$string['transferdbintro'] = 'Este script irá transferir todo o conteúdo desta base de dados para outro servidor. É usado para migrar dados para um tipo de base de dados diferente.';
$string['transferdbtoserver'] = 'Transferir a base de dados Moodle para outro servidor';
$string['transferringdbto'] = 'A transferir esta base de dados {$a->dbtypefrom} para a base de dados {$a->dbtype} {$a->dbname} em {$a->dbhost}';
