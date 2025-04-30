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
 * Strings for component 'antivirus', language 'pt', version '4.4'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Módulos antivírus disponíveis';
$string['antiviruscommonsettings'] = 'Configurações gerais do antivírus';
$string['antiviruses'] = 'Módulos antivírus';
$string['antivirussettings'] = 'Gerir módulos antivírus';
$string['configantivirusplugins'] = 'Selecione o módulo antivírus que pretende utilizar e organize os módulos pela ordem em que serão aplicados.';
$string['dataerrordesc'] = 'Ocorreu um erro ao verificar dados.';
$string['dataerrorname'] = 'Erro ao verificar dados';
$string['datainfecteddesc'] = 'Foram detetados dados infetados.';
$string['datainfectedname'] = 'Dados infetados';
$string['datastream'] = 'Dados';
$string['emailadditionalinfo'] = 'Detalhes adicionais retornados do mecanismo do antivírus:';
$string['emailauthor'] = 'Atualizado por:';
$string['emailcontenthash'] = 'Hash do conteúdo:';
$string['emailcontenttype'] = 'Tipo de conteúdo:';
$string['emaildate'] = 'Data de carregamento:';
$string['emailfilename'] = 'Nome do ficheiro:';
$string['emailfilesize'] = 'Tamanho do ficheiro:';
$string['emailgeoinfo'] = 'Geolocalização';
$string['emailinfectedfiledetected'] = 'Detetado ficheiro infetado';
$string['emailipaddress'] = 'Endereço IP:';
$string['emailreferer'] = 'Referência:';
$string['emailreport'] = 'Relatório:';
$string['emailscanner'] = 'Scanner:';
$string['emailscannererrordetected'] = 'Ocorreu um erro ao examinar';
$string['emailsubject'] = '{$a} :: Notificação do antivírus ClamAV';
$string['enablequarantine'] = 'Ativar quarentena';
$string['enablequarantine_help'] = 'Se ativar esta opção, todos os ficheiros detetados como vírus serão mantidos numa pasta de quarentena para posterior exame ([dataroot]/{$a}).
O carregamento para o Moodle falhará.
Se houver alguma verificação de vírus ao nível do sistema de ficheiros, a pasta de quarentena deve ser excluída da verificação do antivírus para evitar a deteção dos ficheiros em quarentena.';
$string['fileerrordesc'] = 'Ocorreu um erro ao verificar ficheiro.';
$string['fileerrorname'] = 'Erro ao verificar ficheiro';
$string['fileinfecteddesc'] = 'Foi detetado um ficheiro infetado.';
$string['fileinfectedname'] = 'Ficheiro infetado';
$string['notifyemail'] = 'E-mail para notificação de alerta do antivírus';
$string['notifyemail_help'] = 'O endereço de e-mail para notificações quando um vírus for detetado.
Se ficar em branco, serão enviadas notificações a todos os administradores do site.';
$string['notifylevel'] = 'Nível de notificação';
$string['notifylevel_help'] = 'Os diferentes níveis de informação sobre os quais pretende ser notificado';
$string['notifylevelerror'] = 'Detetado ameaças e problemas de verificação';
$string['notifylevelfound'] = 'Apenas detetado ameaças';
$string['privacy:metadata'] = 'O Sistema Antivirus não armazena quaisquer dados pessoais.';
$string['quarantinedfiles'] = 'Ficheiros da quarentena do antivírus';
$string['quarantinedisabled'] = 'Quarentena está desativada. O ficheiro não foi armazenado.';
$string['quarantinetime'] = 'Permanência máxima em quarentena';
$string['quarantinetime_desc'] = 'Os ficheiros em quarentena anteriores ao período especificado serão apagados.';
$string['taskcleanup'] = 'Limpeza dos ficheiros da quarentena';
$string['threshold'] = 'Limite da verificação de estado';
$string['threshold_desc'] = 'Até quando verificar os resultados anteriores de erros, etc. conforme relatado em {$a}.';
$string['unknown'] = 'Desconhecido';
$string['virusfound'] = '{$a->item} foi verificado por um detetor de vírus e foi considerado infetado!';
