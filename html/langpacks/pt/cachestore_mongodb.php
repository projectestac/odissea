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
 * Strings for component 'cachestore_mongodb', language 'pt', version '3.11'.
 *
 * @package     cachestore_mongodb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'Base de Dados';
$string['database_help'] = 'Nome da Base de Dados a utilizar';
$string['extendedmode'] = 'Usar chaves alargadas';
$string['extendedmode_help'] = 'Se ativar esta opção, serão usados conjuntos de chaves completos quando se trabalha com o módulo. Isto não é usado internamente, mas permite pesquisar e investigar manualmente o plugin MongoDB, se assim pretender. Ativar esta opção irá adicionar uma pequena sobrecarga, pelo que só deve ser feito se for de facto necessário.';
$string['password'] = 'Senha';
$string['password_help'] = 'Senha do utilizador a ser usada para a ligação';
$string['pleaseupgrademongo'] = 'Está a usar uma versão antiga da extensão PHP Mongo (< 1.3). O suporte para versões antigas da extensão Mongo será descontinuado no futuro. Por favor, considere atualizar esta extensão.';
$string['pluginname'] = 'MongoDB';
$string['privacy:metadata:mongodb'] = 'O armazenamento de cache do módulo MongoDB armazena dados temporariamente como parte da sua funcionalidade de armazenamento em cache. Esses dados são armazenados num servidor MongoDB e são removidos regularmente.';
$string['privacy:metadata:mongodb:data'] = 'Vários dados armazenados na cache';
$string['replicaset'] = 'Conjunto de réplicas';
$string['replicaset_help'] = 'O nome do conjunto de réplicas definido para se conectar. Se este nome for atribuído, o master será determinado utilizando o comando de dados ismaster nas seeds, para que a driver possa parar de ligar a um servidor que nem sequer foi listado.';
$string['server'] = 'Servidor';
$string['server_help'] = 'Esta é a string de ligação para o servidor que pretende usar. Podem ser especificados múltiplos servidores usando uma lista separada por vírgulas.';
$string['testserver'] = 'Servidor de teste';
$string['testserver_desc'] = 'A ligação de um servidor para utilizar em testes. Se um servidor de teste tiver sido especificado, o desempenho de MongoDB pode ser testado usando a página de desempenho de cache no bloco de administração.
Por exemplo: mongodb://127.0.0.1:27017';
$string['username'] = 'Nome de utilizador';
$string['username_help'] = 'Nome de utilizador a usar quando se estabelecer uma ligação.';
$string['usesafe'] = 'Utilização segura';
$string['usesafe_help'] = 'Se ativada, a opção de utilização segura será usada para inserir, obter e remover operações. Se tiver especificado um conjunto de replicas, isto será forçado de qualquer forma.';
$string['usesafevalue'] = 'Utilização de valores seguros';
$string['usesafevalue_help'] = 'Pode optar por fornecer um valor específico para utilização segura. Isto vai determinar o número de servidores que as operçãoes devem concluir antes serem consideradas concluídas.';
