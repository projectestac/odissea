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
 * Strings for component 'search_solr', language 'pt', version '4.1'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'O servidor Solr indicado não está disponível ou o índice especificado não existe';
$string['connectionsettings'] = 'Configurações da ligação';
$string['errorcreatingschema'] = 'Erro ao criar o esquema Solr: {$a}';
$string['errorsolr'] = 'O motor de busca Solr relatou um erro: {$a}';
$string['errorvalidatingschema'] = 'Erro ao validar o esquema Solr: O campo {$a->fieldname} não existe. Por favor, <a href="{$a->setupurl}">siga esta hiperligação</a> para configurar os campos necessários.';
$string['extensionerror'] = 'A Extensão PHP do Apache Solr não está instalada. Por favor, consulte a documentação.';
$string['fileindexing'] = 'Ativar a indexação de ficheiros';
$string['fileindexing_help'] = 'Se o seu instalador Solr o suportar, esta funcionalidade permite que o Moodle envie ficheiros para indexação.
Precisará de reindexar todo o conteúdo do site depois de ativar esta opção para que todos os ficheiros sejam adicionados.';
$string['fileindexsettings'] = 'Configurações de indexação de ficheiros';
$string['maxindexfilekb'] = 'Tamanho máximo dos ficheiros (KB) para indexar';
$string['maxindexfilekb_help'] = 'Os ficheiros com tamanho maior que o valor indicado não serão incluídos na indexação. Se definir como zero, todos os ficheiros serão indexados, independentemente do tamanho.';
$string['minimumsolr4'] = 'Solr 4.0 é a versão mínima necessária para o Moodle';
$string['missingconfig'] = 'O seu servidor Apache Solr ainda não está configurado no Moodle.';
$string['multivaluedfield'] = 'O campo "{$a}" devolveu uma matriz em vez de um número escalar. Por favor, apague esta indexação, crie uma nova e execute o parâmetro setup_schema.php novamente antes de indexar os dados no Solr.';
$string['nodatafromserver'] = 'Não existem dados no servidor';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'Este módulo envia dados externamente para um motor de busca Solr. Não armazena dados localmente.';
$string['privacy:metadata:data'] = 'Dados pessoais transferidos através do subsistema de pesquisa.';
$string['schemafieldautocreated'] = 'O campo "{$a}" já existe no esquema Solr. Provavelmente esqueceu-se de executar este script antes de indexar os dados e os campos foram criados automaticamente pelo Solr. Por favor, apague esta indexação, crie uma nova e execute o parâmetro setup_schema.php novamente antes de indexar os dados no Solr.';
$string['schemasetupfromsolr5'] = 'A sua versão Solr é inferior a 5.0. Este script apenas consegue configurar o seu esquema caso a versão do Solr seja 5.0 ou superior. Deverá configurar manualmente os campos do seu esquema, de acordo com o parâmetro  \\search_solr\\document::get_default_fields_definition().';
$string['searchinfo'] = 'Procurar consultas na base de dados';
$string['searchinfo_help'] = 'O campo a ser pesquisado pode ser especificado na pesquisa se adicionar um prefixo, tais com \'título:\', \'conteúdo:\', \'nome:\', ou \'introdução:\'. Por exemplo, ao pesquisar por \'título:notícias\' irão aparecer resultados com a palavra \'notícias\' no título.

Os operadores booleanos (\'AND\', \'OR\', \'NOT\') podem ser usados para combinar ou excluir palavras-chave.

Os caracteres especiais (\'*\' ou \'?\') podem ser usados para representar caracteres na pesquisa.';
$string['setupok'] = 'O esquema está pronto para ser utilizado.';
$string['solrauthpassword'] = 'Senha da autenticação por HTTP';
$string['solrauthuser'] = 'Nome de utilizador da autenticação por HTTP';
$string['solrhttpconnectionport'] = 'Porta';
$string['solrhttpconnectiontimeout'] = 'Tempo limite da sessão';
$string['solrhttpconnectiontimeout_desc'] = 'O tempo limite da sessão de HTTP é o tempo máximo permitido, em segundos, para a operação de transferência de dados por HTTP.';
$string['solrindexname'] = 'Nome do índice';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'O motor Solr não é o motor de busca configurado';
$string['solrsecuremode'] = 'Modo seguro';
$string['solrserverhostname'] = 'Nome do servidor';
$string['solrserverhostname_desc'] = 'Nome de domínio do servidor Solr.';
$string['solrsetting'] = 'Configurações Solr';
$string['solrsslcainfo'] = 'Nome dos certificados CA SSL';
$string['solrsslcainfo_desc'] = 'Nome do ficheiro que contém um ou mais certificados CA para verificar os pares com';
$string['solrsslcapath'] = 'Caminho dos certificados CA SSL';
$string['solrsslcapath_desc'] = 'Caminho do diretório que contém múltiplos certificados CA para verificar os pares com';
$string['solrsslcert'] = 'Certificado SSL';
$string['solrsslcert_desc'] = 'Nome do ficheiro para um certificado privado PEM-formatted';
$string['solrsslkey'] = 'Chave SSL';
$string['solrsslkey_desc'] = 'Nome do ficheiro para a chave privada PEM-formatted';
$string['solrsslkeypassword'] = 'Senha da chave SSL';
$string['solrsslkeypassword_desc'] = 'Senha para o ficheiro da chave privada PEM-formatted';
