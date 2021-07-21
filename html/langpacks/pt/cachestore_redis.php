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
 * Strings for component 'cachestore_redis', language 'pt', version '3.11'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['compressor_none'] = 'Sem compressão.';
$string['compressor_php_gzip'] = 'Usar compressão gzip.';
$string['compressor_php_zstd'] = 'Usar compressão Zstandard.';
$string['password'] = 'Senha';
$string['password_help'] = 'Definir a senha do servidor Redis.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Prefixo da chave';
$string['prefix_help'] = 'Este prefixo é usado para todos os nomes de chave do servidor Redis.
* Se apenas tem uma instância Moodle a usar este servidor, pode deixar o valor por predefinição.
* Devido às restrições de tamanho da chave, apenas é permitido um máximo de 5 caracteres.';
$string['prefixinvalid'] = 'Prefixo inválido. Apenas pode usar a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = 'O armazenamento de cache do módulo Redis armazena dados temporariamente como parte da sua funcionalidade de armazenamento em cache. Esses dados são armazenados num servidor Redis e são removidos regularmente.';
$string['privacy:metadata:redis:data'] = 'Vários dados armazenados na cache';
$string['serializer_igbinary'] = 'Sequenciador igbinary.';
$string['serializer_php'] = 'O sequenciador padrão PHP.';
$string['server'] = 'Servidor';
$string['server_help'] = 'Isto define o nome do host ou o endereço IP do servidor Redis a utilizar.';
$string['test_password'] = 'Testar a senha do servidor';
$string['test_password_desc'] = 'Testar a senha do servidor Redis.';
$string['test_serializer'] = 'Serializador';
$string['test_serializer_desc'] = 'Serializador a ser usado para testes.';
$string['test_server'] = 'Servidor de teste';
$string['test_server_desc'] = 'Servidor Redis para usar em testes.';
$string['usecompressor'] = 'Usar compressor';
$string['usecompressor_help'] = 'Especifica o compressor a ser usado após a serialização. É feito no nível da API do Moodle Cache e não ao nível php-redis.';
$string['useserializer'] = 'Usar serializador';
$string['useserializer_help'] = 'Especifica o serializador a ser usado para a criação de séries.
Os serializadores válidos são Redis::SERIALIZER_PHP ou Redis::SERIALIZER_IGBINARY.
Este último só é suportado quando phpredis está configurada com a opção --enable-redis-igbinary e a extensão igbinary está carregada.';
