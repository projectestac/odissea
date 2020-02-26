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
 * Strings for component 'antivirus_clamav', language 'pt', branch 'MOODLE_36_STABLE'
 *
 * @package   antivirus_clamav
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'Não foi possível arrancar o antivírus Clam. A mensagem de erro foi {$a}. Segue-se a listagem de saída produzida pelo Clam:';
$string['clamfailureonupload'] = 'Em caso de falha do Antivírus ClamAV';
$string['configclamactlikevirus'] = 'Considerar ficheiros como vírus';
$string['configclamdonothing'] = 'Considerar ficheiros como limpos de vírus';
$string['configclamfailureonupload'] = 'Se configurou o Antivírus Clam para examinar os ficheiros carregados, mas este está configurado incorretamente ou não funciona por algum motivo desconhecido, como deverá comportar-se? Se escolher \'Considerar ficheiros como vírus\', estes serão movidos para a área de quarentena ou serão excluídos. Se escolher \'Considerar ficheiros como limpos de vírus\', os ficheiros serão movidos para a pasta de destino como normalmente. De qualquer forma, os administradores serão alertados de que o Antivírus Clam falhou. Se escolher \'Considerar ficheiros como vírus\' e por algum motivo o Antivírus Clam falhar ao ser executado (normalmente porque indicou um caminho inválido para este), TODOS os ficheiros carregados serão movidos para a área de quarentena ou serão excluídos. Tenha cuidado com esta configuração.';
$string['errorcantopensocket'] = 'A ligação ao socket de domínio UNIX resultou no erro {$a}';
$string['errorclamavnoresponse'] = 'O Antivírus ClamAV não responde; verifique o estado de execução do daemon.';
$string['errornounixsocketssupported'] = 'O transporte do socket de domínio Unix não é suportado neste sistema. Por favor, utilize antes a opção da linha de comandos.';
$string['invalidpathtoclam'] = 'Moodle foi configurado para executar clam quando for enviado um ficheiro, mas a localização indicada para o antivírus Clam, {$a}, não é válida.';
$string['pathtoclam'] = 'Linha de comandos';
$string['pathtoclamdesc'] = 'Se o método de execução estiver configurado para "linha de comandos", introduza o caminho para o Antivírus ClamAV aqui. No Linux será /usr/bin/clamscan ou /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Socket de domínio Unix';
$string['pathtounixsocketdesc'] = 'Se o método de execução estiver configurado para "socket de domínio Unix", introduza o caminho para o Antivírus ClamAV aqui. No Linux Debian isto será /var/run/clamav/clamd.ctl. Por favor, certifique-se de que o daemon clamav tem acesso de leitura aos ficheiros carregados e a forma mais fácil de garantir é adicionar o utilizador \'clamav\' ao seu grupo webserver (\'www-data\' no Linux  Debian).';
$string['pluginname'] = 'Antivírus ClamAV';
$string['privacy:metadata'] = 'O módulo ClamAV antivirus não armazena nenhum dado pessoal.';
$string['quarantinedir'] = 'Pasta da Quarentena';
$string['runningmethod'] = 'Método de execução';
$string['runningmethodcommandline'] = 'Linha de comandos';
$string['runningmethoddesc'] = 'Método de execução do Antivírus ClamAV. A linha de comandos é utilizada por predefinição, contudo em sistemas Unix pode ser conseguido um melhor desempenho através da utilização de sockets do sistema.';
$string['runningmethodunixsocket'] = 'Socket de domínio Unix';
$string['unknownerror'] = 'Ocorreu um erro desconhecido com o clam.';
