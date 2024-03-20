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
 * Strings for component 'tool_langimport', language 'pt', version '4.1'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Não é possível ligar ao servidor de descargas e, por isso, não é possível instalar ou atualizar automaticamente os pacotes linguísticos. Descarregue de <a href="{$a->src}">{$a->src}</a> o(s) ficheiro(s) Zip apropriado(s) e descompacte-o(s) manualmente para a pasta dos dados <code>{$a->dest}</code>';
$string['install'] = 'Instalar os pacotes linguísticos selecionados';
$string['installedlangs'] = 'Pacotes linguísticos instalados';
$string['installfailed'] = 'Ocorreu um erro ao instalar os pacotes linguísticos!';
$string['installfinished'] = 'A instalação dos pacotes linguísticos está concluída.';
$string['installpending'] = 'Os seguintes pacotes linguísticos serão instalados em breve: {$a}.';
$string['installscheduled'] = 'Pacotes linguísticos agendados para instalação.';
$string['langimport'] = 'Importação de pacote linguístico';
$string['langimportdisabled'] = 'O recurso de importação de pacote linguístico foi desativado. Tem de atualizar os pacotes linguísticos manualmente no sistema de ficheiros. Não se esqueça de limpar as caches após a atualização.';
$string['langpackinstalled'] = 'O pacote linguístico \'{$a}\' foi instalado com sucesso';
$string['langpackinstalledevent'] = 'Pacote linguístico instalado';
$string['langpacknotremoved'] = 'Ocorreu um erro: a instalação do pacote linguístico \'{$a}\' não foi concluída. Por favor, verifique as permissões do ficheiro.';
$string['langpackremoved'] = 'O pacote linguístico \'{$a}\' foi desinstalado';
$string['langpackremovedevent'] = 'Pacote linguístico desinstalado';
$string['langpackupdated'] = 'O pacote linguístico \'{$a}\' foi atualizado com sucesso';
$string['langpackupdatedevent'] = 'Pacote linguístico atualizado';
$string['langpackupdateskipped'] = 'Foi ignorada a atualização do pacote linguístico \'{$a}\'';
$string['langpackuptodate'] = 'O pacote linguístico \'{$a}\' está atualizado';
$string['langunsupported'] = '<p>O seu servidor parece não suportar totalmente os seguintes idiomas:</p><ul>{$a->missinglocales}</ul><p>Em vez disso, será usada a locale global ({$a->globallocale}) para formatar determinadas cadeias, tais como datas ou números.</p>';
$string['langupdatecomplete'] = 'Atualização dos pacotes linguísticos concluída';
$string['missingcfglangotherroot'] = 'Falta o valor de configuração $CFG->langotherroot';
$string['missinglangparent'] = 'Falta o idioma ascendente <em>{$a->parent}</em> em <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'O pacote linguístico Inglês não pode ser instalado.';
$string['nolangupdateneeded'] = 'Todos os pacotes linguísticos instalados estão atualizados. Não é necessária qualquer atualização.';
$string['pluginname'] = 'Pacotes linguísticos';
$string['privacy:metadata'] = 'O módulo Pacotes linguísticos não armazena dados pessoais.';
$string['purgestringcaches'] = 'Limpar caches das strings';
$string['search'] = 'Pesquisar os pacotes de idiomas disponíveis';
$string['selectlangs'] = 'Selecione os pacotes linguísticos que pretende desinstalar';
$string['uninstall'] = 'Desinstalar os pacotes linguísticos selecionados';
$string['uninstallconfirm'] = 'Está prestes a desinstalar completamente o(s) pacote(s) linguístico(s): {$a}. Tem a certeza?';
$string['updatelangs'] = 'Atualização de todos os pacotes linguísticos instalados';
$string['updatelangsnote'] = 'Atualizar todos os pacotes linguísticos instalados (ao clicar no botão) pode demorar muito tempo e esgotar o tempo limite. Em vez disso, é recomendado usar a tarefa agendada \'{$a->taskname}\' (que é executada todos os dias, por predefinição).';
