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
 * Strings for component 'cachestore_redis', language 'pt', version '4.4'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'Caminho do ficheiro CA';
$string['ca_file_help'] = 'Localização do ficheiro da Autoridade de Certificação (CA) no sistema local de ficheiros';
$string['clustermode'] = 'Modo Cluster';
$string['clustermode_help'] = 'Ao ativar esta opção, executará a função Cluster Redis, permitindo que o seu servidor atenda a vários servidores para lidar com solicitações simultâneas.';
$string['clustermodeunavailable'] = 'O Cluster Redis não está disponível de momento. Certifique-se de que a extensão Redis do PHP oferece suporte à funcionalidade Redis Cluster.';
$string['compressor_none'] = 'Sem compressão.';
$string['compressor_php_gzip'] = 'Usar compressão gzip.';
$string['compressor_php_zstd'] = 'Usar compressão Zstandard.';
$string['connectiontimeout'] = 'Tempo limite de ligação';
$string['connectiontimeout_help'] = 'Define o tempo limite ao tentar ligar-se ao servidor Redis.';
$string['encrypt_connection'] = 'Usar encriptação TLS.';
$string['encrypt_connection_help'] = 'Usar TLS para se ligar ao Redis. Não use \'tls://\' no nome do servidor para Redis, use esta opção.';
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
$string['serializer_igbinary'] = 'Sequenciador igbinary';
$string['serializer_php'] = 'O sequenciador padrão PHP';
$string['server'] = 'Servidor(es)';
$string['server_help'] = 'Servidor Redis para usar em testes.

Alguns valores de exemplo:

* testredis.abc.com - Para ligar a um servidor Redis por nome do host (porta 6379, por predefinição).
* testredis.abc.com:1234 - Para ligar a um servidor Redis por nome de host por uma porta específica.
* 1.2.3.4 - Para ligar a um servidor Redis por endereço IP (porta 6379, por predefinição).
* 1.2.3.4:1234 - Para ligar a um servidor Redis por endereço IP por uma porta específica.
* unix:///var/redis.sock - Para ligar a um servidor Redis usando um socket Unix.
* /var/redis.sock - Para ligar a um servidor Redis usando um socket Unix (formato alternativo).

Se o modo cluster estiver ativo, especifique os servidores separados por uma nova linha, por exemplo:<br>
   172.23.0.11<br>
   172.23.0.12<br>
   172.23.0.13<br>

Para mais informações, consulte as páginas: <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">Aceitar ligações de cliente</a> e <a href="https://redis.io/resources/clients/#php">Clientes Redis PHP</a>.';
$string['task_ttl'] = 'Limpeza de memória usada por entradas expiradas em caches Redis';
$string['test_clustermode'] = 'Modo Cluster';
$string['test_clustermode_desc'] = 'Ativar o Teste no modo Cluster Redis.';
$string['test_password'] = 'Testar a senha do servidor';
$string['test_password_desc'] = 'Testar a senha do servidor Redis.';
$string['test_serializer'] = 'Serializador';
$string['test_serializer_desc'] = 'Serializador a ser usado para testes.';
$string['test_server'] = 'Servidor de teste';
$string['test_server_desc'] = 'Servidor Redis para usar em testes.

Alguns valores de exemplo:

* testredis.abc.com - Para ligar a um servidor Redis por nome do host (porta 6379, por predefinição).
* testredis.abc.com:1234 - Para ligar a um servidor Redis por nome de host por uma porta específica.
* 1.2.3.4 - Para ligar a um servidor Redis por endereço IP (porta 6379, por predefinição).
* 1.2.3.4:1234 - Para ligar a um servidor Redis por endereço IP por uma porta específica.
* unix:///var/redis.sock - Para ligar a um servidor Redis usando um socket Unix.
* /var/redis.sock - Para ligar a um servidor Redis usando um socket Unix (formato alternativo).

Se o modo cluster estiver ativo, especifique os servidores separados por uma nova linha, por exemplo:<br>
   172.23.0.11<br>
   172.23.0.12<br>
   172.23.0.13<br>

Para mais informações, consulte as páginas: <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">Aceitar ligações de cliente</a> e <a href="https://redis.io/resources/clients/#php">Clientes Redis PHP</a>.';
$string['test_ttl'] = 'Testar com TTL';
$string['test_ttl_desc'] = 'Executar o teste de desempenho usando uma cache que requer TTL (mais lento).';
$string['usecompressor'] = 'Usar compressor';
$string['usecompressor_help'] = 'Especifica o compressor a ser usado após a serialização. É feito no nível da API do Moodle Cache e não ao nível php-redis.';
$string['useserializer'] = 'Usar serializador';
$string['useserializer_help'] = 'Especifica o serializador a ser usado para a criação de séries.
Os serializadores válidos são Redis::SERIALIZER_PHP ou Redis::SERIALIZER_IGBINARY.
Este último só é suportado quando phpredis está configurada com a opção --enable-redis-igbinary e a extensão igbinary está carregada.';
