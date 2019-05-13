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
 * Strings for component 'tool_langimport', language 'pt', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_langimport
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Não é possível fazer a ligação ao servidor de descargas e, por isso, não é possível instalar ou atualizar automaticamente os pacotes linguísticos. Faça a descarga do(s) ficheiro(s) ZIP apropriado(s) desde <a href="{$a->src}">{$a->src}</a> e descompacte-o(s) manualmente para a pasta de dados <code>{$a->dest}</code>';
$string['install'] = 'Instalar os pacotes linguísticos selecionados';
$string['installedlangs'] = 'Pacotes linguísticos instalados';
$string['langimport'] = 'Importação de pacote linguístico';
$string['langimportdisabled'] = 'O recurso de importação de pacote linguístico foi desativado. Tem que atualizar os pacotes linguísticos manualmente no sistema de ficheiros. Não se esqueça de limpar as caches após a atualização.';
$string['langpackinstalled'] = 'O pacote linguístico \'{$a}\' foi instalado com sucesso';
$string['langpackinstalledevent'] = 'Pacote linguístico instalado';
$string['langpacknotremoved'] = 'Ocorreu um erro: a instalação do pacote linguístico \'{$a}\' não foi concluída. Por favor, verifique as permissões do ficheiro.';
$string['langpackremoved'] = 'O pacote linguístico \'{$a}\' foi desinstalado';
$string['langpackremovedevent'] = 'Pacote linguístico desinstalado';
$string['langpackupdated'] = 'O pacote linguístico \'{$a}\' foi atualizado com sucesso';
$string['langpackupdatedevent'] = 'Pacote linguístico atualizado';
$string['langpackupdateskipped'] = 'Foi ignorada a atualização do pacote linguistico \'{$a}\'';
$string['langpackuptodate'] = 'O pacote linguístico \'{$a}\' está atualizado';
$string['langupdatecomplete'] = 'Atualização do pacote linguístico concluída';
$string['missingcfglangotherroot'] = 'Falta o valor de configuração $CFG->langotherroot';
$string['missinglangparent'] = 'Falta o idioma ascendente <em>{$a->parent}</em> em <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'O pacote linguístico Inglês não pode ser instalado.';
$string['nolangupdateneeded'] = 'Todos os pacotes linguísticos instalados estão atualizados. Não é necessária qualquer atualização.';
$string['pluginname'] = 'Pacotes linguísticos';
$string['privacy:metadata'] = 'O módulo Pacotes linguísticos não armazena dados pessoais.';
$string['purgestringcaches'] = 'Limpar caches das strings';
$string['selectlangs'] = 'Selecione os pacotes linguísticos que pretende desinstalar';
$string['uninstall'] = 'Desinstalar os pacotes linguísticos selecionados';
$string['uninstallconfirm'] = 'Está prestes a desinstalar completamente o(s) pacote(s) linguístico(s): {$a}. Tem a certeza?';
$string['updatelangs'] = 'Atualizar todos os pacotes linguísticos instalados';
