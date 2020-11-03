<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'cachestore_memcache', language 'pt', branch 'MOODLE_34_STABLE'
 *
 * @package   cachestore_memcache
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clustered'] = 'Ativar servidores em cluster';
$string['clusteredheader'] = 'Dividir servidores';
$string['clustered_help'] = 'Esta opção é usada para permitir a funcionalidade \'read-one, set-multi\'.

A utilização pretendida consiste em melhorar o armazenamento para as configurações de balanceamento. O armazenamento irá procurar num servidor (normalmente localmente), mas definido para muitos (todos os servidores no load-balance pool). Para caches com uma leitura muito elevada que permitem definir rácios, isto reduz significativamente a sobrecarga na rede.

Quando esta opção está ativada, a lista de servidores acima será usado para fetching.';
$string['pluginname'] = 'Memcache';
$string['prefix'] = 'Prefixo da chave';
$string['prefix_help'] = 'Este prefixo é usado para todos os nomes de chave no servidor memcache.

*Se só tiver uma instância Moodle a usar este servidor, pode deixar este valor configurado por predefinição.

*Devido às restrições de extensão da chave, é permitido um máximo de 5 caracteres.';
$string['prefixinvalid'] = 'Prefixo inválido. Pode usar apenas a-z A-Z 0-9-_.';
$string['privacy:metadata:memcache'] = 'O armazenamento de cache do módulo Memcache armazena dados temporariamente como parte da sua funcionalidade de armazenamento em cache. Esses dados são armazenados num servidor Memcache e são removidos regularmente.';
$string['privacy:metadata:memcache:data'] = 'Vários dados armazenados na cache';
$string['servers'] = 'Servidores';
$string['serversclusterinvalid'] = 'É necessário precisamente um servidor quando o clustering está ativado.';
$string['servers_help'] = 'Esta configuração define os servidores que devem ser utilizados por este adaptador memcache.
Os servidores devem ser indicados um por linha e consiste no endereço do servidor e, opcionalmente, uma porta e importância.
Caso nenhuma porta seja indicada, será utilizada a porta padrão (11211).

Por exemplo:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

Se ativar a configuração *Ativar servidores em cluster*, apenas poderá estar listado um servidor. Normalmente é o nome da máquina local, como por exemplo 127.0.0.1 ou localhost.';
$string['sessionhandlerconflict'] = 'Aviso: uma instância de memcache ({$a}) foi configurada para usar o mesmo servidor de memcache que as sessões. Ao apagar o conteúdo de todas as caches fará com que também sejam apagadas as sessões.';
$string['setservers'] = 'Definir servidores';
$string['setservers_help'] = 'Esta é a lista de servidores que serão atualizados quando os dados são modificados na cache. Geralmente o nome completo de cada servidor na pool.

Deve incluir o servidor listado acima em Servers, ainda que por um hostname diferente.

Os servidores devem ser definidos um por linha e consistir num endereço de servidor e, opcionalmente, uma porta.

Se nenhuma porta for definida, então será usada a porta predefinida (11211).

Por exemplo: <pre> server.url.com ipaddress: port </pre>';
$string['testservers'] = 'Servidores de teste';
$string['testservers_desc'] = 'Uma ou mais conexões para servidores memchache para testar. Se um servidor de teste tiver sido especificado, o desempenho de memcache pode ser testado usando a página de desempenho de cache no bloco de administração. Por exemplo: 127.0.0.1:11211';
