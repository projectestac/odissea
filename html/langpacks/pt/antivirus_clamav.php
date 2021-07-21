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
 * Strings for component 'antivirus_clamav', language 'pt', version '3.11'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'De momento, existe um problema com a verificação do AntiVirus. O seu ficheiro {$a->item} não foi enviado. Por favor, tente novamente mais tarde.';
$string['clamfailed'] = 'Não foi possível iniciar o antivírus ClamAV. A mensagem de erro foi {$a}. A listagem de saída produzida pelo ClamAV:';
$string['clamfailureonupload'] = 'Em caso de falha do Antivírus ClamAV';
$string['configclamactlikevirus'] = 'Considerar ficheiros como vírus';
$string['configclamdonothing'] = 'Considerar ficheiros como limpos de vírus';
$string['configclamfailureonupload'] = 'Se selecionar \'Considerar ficheiros como limpos de vírus\', os ficheiros serão movidos para a diretoria de destino. Se a opção \'Recusar carregamento, tentar novamente\' for selecionada, será exibida uma mensagem para o utilizador tentar novamente mais tarde. Se selecionar a opção \'Considerar ficheiros como vírus\', os ficheiros carregados serão movidos para a área de quarentena ou serão apagados. Aviso: Com esta opção, se por algum motivo o ClamAV falhar na execução (geralmente devido a um \'pathtoclam\' inválido), TODOS os ficheiros carregados serão movidos para a área de quarentena ou serão apagados.';
$string['configclamtryagain'] = 'Recusar carregamento, tentar novamente';
$string['errorcantopensocket'] = 'A ligação ao socket de domínio UNIX resultou no erro {$a}';
$string['errorclamavnoresponse'] = 'O Antivírus ClamAV não responde. Verifique o estado de execução do daemon.';
$string['errornounixsocketssupported'] = 'O transporte do socket de domínio Unix não é suportado neste sistema. Por favor, utilize antes a opção da linha de comandos.';
$string['invalidpathtoclam'] = 'Moodle foi configurado para executar ClamAV quando for enviado um ficheiro mas a localização indicada para o antivírus ClamAV ({$a}) não é válida.';
$string['pathtoclam'] = 'Linha de comandos';
$string['pathtoclamdesc'] = 'Se o método de execução estiver configurado para "linha de comandos", introduza o caminho para o Antivírus ClamAV aqui. No Linux será /usr/bin/clamscan ou /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Socket de domínio Unix';
$string['pathtounixsocketdesc'] = 'Se o método de execução estiver configurado para "socket de domínio Unix", introduza aqui o caminho para o Antivírus ClamAV. No Linux Debian isto será /var/run/clamav/clamd.ctl. Por favor, certifique-se de que o daemon clamav tem acesso de leitura aos ficheiros carregados e a forma mais fácil de garantir é adicionar o utilizador \'clamav\' ao seu grupo webserver (\'www-data\' no Linux  Debian).';
$string['pluginname'] = 'Antivírus ClamAV';
$string['privacy:metadata'] = 'O módulo ClamAV antivirus não armazena quaisquer dados pessoais.';
$string['quarantinedir'] = 'Pasta da Quarentena';
$string['runningmethod'] = 'Método de execução';
$string['runningmethodcommandline'] = 'Linha de comandos';
$string['runningmethoddesc'] = 'Método de execução do Antivírus ClamAV. A linha de comandos é utilizada por predefinição, contudo em sistemas Unix pode ser conseguido um melhor desempenho através da utilização de sockets do sistema.';
$string['runningmethodtcpsocket'] = 'socket TCP';
$string['runningmethodunixsocket'] = 'Socket de domínio Unix';
$string['tcpsockethost'] = 'Servidor do TCP socket';
$string['tcpsockethostdesc'] = 'Nome do domínio do servidor ClamAV';
$string['tcpsocketport'] = 'Porta do TCP socket';
$string['tcpsocketportdesc'] = 'A porta a ser usada ao ligar-se ao ClamAV';
$string['tries'] = 'Tentativas de verificação';
$string['tries_desc'] = 'Número de tentativas que o ClamAV tentará quando ocorrer um erro durante o processo de verificação.';
$string['tries_notice'] = 'O ClamAV tentou verificar {$a->tries} vezes.
{$a->notice}';
$string['unknownerror'] = 'Ocorreu um erro desconhecido com o ClamAV.';
