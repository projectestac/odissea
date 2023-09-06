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
 * Strings for component 'cachestore_memcached', language 'pt', version '4.1'.
 *
 * @package     cachestore_memcached
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Escrita do Buffer';
$string['bufferwrites_help'] = 'Ativa ou desativa o buffer I/O. Ativar o buffer I/O faz com que os comandos de armazenamento do "buffer" em vez de ser enviado. Qualquer ação que recupera dados faz com que o buffer seja enviado para a conexão remota. Sair ou fechar a conexão também fará com que os dados no buffer sejam encaminhados para a conexão remota.';
$string['clustered'] = 'Ativar servidores em cluster';
$string['clustered_help'] = 'Esta opção é usada para permitir a funcionalidade \'read-one, set-multi\'.

A utilização pretendida consiste em melhorar o armazenamento para as configurações de balanceamento. O armazenamento irá pesquisar num servidor (normalmente o servidor local), mas definido para muitos (todos os servidores no load-balance pool). Para caches com uma leitura muito elevada que permitem definir rácios, isto reduz significativamente a sobrecarga na rede.

Quando esta opção está ativada, a lista de servidores acima será usado para procurar.';
$string['clusteredheader'] = 'Dividir servidores';
$string['hash'] = 'Método Hash';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Predefinido (um de cada vez)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Especifica o algoritmo de hash usado para as chaves de itens. Cada algoritmo de hash tem as suas vantagens e desvantagens. Opte pelo valor predefinido, se não souber ao certo ou se não for uma questão relevante.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmurar';
$string['isshared'] = 'Cache partilhada';
$string['isshared_help'] = 'O seu servidor da memcache também está a ser utilizado por outras aplicações?

Se a cache é partilhada por outras aplicações, então cada chave será excluída individualmente para garantir que apenas são eliminados os dados pertencentes a essa aplicação (o que deixará os dados da cache da aplicação externa inalterados). Isto pode provocar uma diminuição de desempenho quando limpar a cache, dependendo da configuração do seu servidor.

Se estiver a utilizar uma cache dedicada para esta aplicação, então a cache pode ser eliminada seguramente sem qualquer risco de destruição de dados de cache de outra aplicação. Isto deve resultar num aumento de desempenho quando limpar a cache.';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Chave de prefixo';
$string['prefix_help'] = 'Isto pode ser usado para criar um "domínio" para as suas chaves de itens que lhe permite criar vários armazenamentos da memcached numa única instalação memcached. Não pode ter mais do que 16 caracteres, a fim de garantir que não se deparará com questões fundamentais de comprimento inesperadas.';
$string['prefixinvalid'] = 'Prefixo inválido. Pode usar apenas a-z A-Z 0-9-_.';
$string['privacy:metadata:memcached'] = 'O armazenamento de cache do módulo Memcached armazena dados temporariamente como parte da sua funcionalidade de armazenamento em cache. Esses dados são armazenados num servidor Memcache e são removidos regularmente.';
$string['privacy:metadata:memcached:data'] = 'Vários dados armazenados na cache';
$string['serialiser_igbinary'] = 'O serializador igbinary.';
$string['serialiser_json'] = 'O serializador JSON.';
$string['serialiser_php'] = 'O serializador predefinido de PHP.';
$string['servers'] = 'Servidores';
$string['servers_help'] = 'Esta configuração define os servidores que devem ser utilizados por este adaptador memcache.
Os servidores devem ser indicados um por linha e consiste no endereço do servidor e, opcionalmente, uma porta e importância.
Caso nenhuma porta seja indicada, será utilizada a porta padrão (11211).

Exemplo:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

Se ativar a configuração *Ativar servidores em cluster*, apenas poderá estar listado um servidor. Normalmente é o nome da máquina local, como por exemplo, 127.0.0.1 ou localhost.';
$string['serversclusterinvalid'] = 'É necessário precisamente um servidor quando o clustering está ativado.';
$string['sessionhandlerconflict'] = 'Aviso: uma instância de memcache ({$a}) foi configurada para usar o mesmo servidor de memcache que as sessões. Apagar o conteúdo de todas as caches fará com que também sejam apagadas as sessões.';
$string['setservers'] = 'Definir servidores';
$string['setservers_help'] = 'Lista de servidores que serão atualizados quando os dados são modificados na cache. Geralmente o nome completo de cada servidor na pool.

Tem de incluir o servidor listado acima em Servers, ainda que com um hostname diferente.

Os servidores devem ser definidos um por linha e consistir num endereço de servidor e, opcionalmente, uma porta.

Se não for definida a porta, será usada a porta predefinida (11211).

Exemplo: <pre>server.url.com ipaddress:port</pre>';
$string['testservers'] = 'Servidores de teste';
$string['testservers_desc'] = 'Uma ou mais strings de ligação para servidores memchache para serem testadas. Se um servidor de teste tiver sido especificado, o desempenho de memcache pode ser testado usando a página de desempenho de cache no bloco de administração.
Exemplo: 127.0.0.1:11211';
$string['upgrade200recommended'] = 'Recomenda-se que atualize a extensão PHP Memcached para a versão 2.0.0 ou superior.
A versão da extensão PHP Memcached em uso não fornece a funcionalidade que o Moodle utiliza para garantir uma cache de modo seguro. Até atualizar, recomendamos que não configure quaisquer outras aplicações para utilizar os mesmos servidores de Memcache tal como o Moodle está configurado para usar.';
$string['usecompression'] = 'Usar compressão';
$string['usecompression_help'] = 'Ativa ou desativa a carga de compressão. Quando ativado, os valores de itens superiores a um determinado limite (atualmente 100 bytes) será compactado durante o armazenamento e descompactados durante a recuperação de forma transparente.';
$string['useserialiser'] = 'Usar serializador';
$string['useserialiser_help'] = 'Especifica o serializador a usar para a serialização de valores não-scalar. Os serializers válidos são Memcached :: SERIALIZER_PHP ou Memcached :: SERIALIZER_IGBINARY. Este último só é suportada quando o memcached é configurado com a opção "enable-memcached-igbinary" e a extensão igbinary é carregada.';
