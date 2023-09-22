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
 * Strings for component 'report_performance', language 'pt', version '4.1'.
 *
 * @package     report_performance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = 'Cópia de segurança automática';
$string['check_backup_comment_disable'] = 'O desempenho pode ser afetado durante a execução das cópias de segurança. Se ativar esta opção, tenha em atenção em agendar as cópias de segurança para os períodos de menor atividade do servidor.';
$string['check_backup_comment_enable'] = 'O desempenho pode ser afetado durante a execução das cópias de segurança. As cópias de segurança devem ser agendadas para os períodos de menor atividade do servidor.';
$string['check_backup_details'] = '<p>Ativar a realização de cópias de segurança automáticas irá criar automaticamente no servidor, e à hora que especificou, arquivos de todas as disciplinas. <p<Durante este processo, serão consumidos mais recursos e isto poderá afetar o desempenho.<p/>';
$string['check_cachejs_comment_disable'] = 'Se ativar esta opção, o desempenho do carregamento das páginas será melhorado.';
$string['check_cachejs_comment_enable'] = 'Se desativar esta opção, o carregamento das páginas poderá ser mais lento.';
$string['check_cachejs_details'] = 'A caching e compressão de JavaScript melhora muito o desempenho do carregamento da página. É altamente recomendado para sites de produção.';
$string['check_dbschema_errors'] = 'O esquema da base de dados não está alinhado.';
$string['check_dbschema_name'] = 'Verificação do esquema da base de dados';
$string['check_dbschema_ok'] = 'O esquema da base de dados está correto.';
$string['check_debugmsg_comment_developer'] = 'Se for definido para outro que não PROGRAMADOR, o desempenho pode ser melhorado ligeiramente.';
$string['check_debugmsg_comment_nodeveloper'] = 'Se for definido para PROGRAMADOR, o desempenho pode ser ligeiramente afetado.';
$string['check_debugmsg_details'] = 'Raramente existem vantagens em ativar o nível de \'PROGRAMADOR\', a menos que seja solicitado por um programador.<p>Após ter obtido a mensagem de erro, copie e guarde a mensagem noutro local, é ALTAMENTE RECOMENDADO alterar o nível de PROGRAMADOR para \'Nada\'. As mensagens de erro podem dar pistas da configuração do seu site a um pirata informático e podem afetar o desempenho.';
$string['check_enablestats_comment_disable'] = 'O desempenho pode ser afetado pelo processamento das estatísticas. Se ativar esta opção, as configurações das estatísticas devem ser definidas cuidadosamente.';
$string['check_enablestats_comment_enable'] = 'O desempenho pode ser afetado pelo processamento das estatísticas. As configurações das estatísticas devem ser definidas cuidadosamente.';
$string['check_enablestats_details'] = 'Ativar esta opção irá processar os registos de atividade em cronjob e reunir algumas estatísticas. Dependendo da quantidade de tráfego do seu site, isto pode levar algum tempo. <p> Durante este processo, serão consumidos mais recursos do servidor, o que pode afetar o desempenho. </p>';
$string['check_themedesignermode_comment_disable'] = 'Se ativar esta opção, as imagens e as folhas de estilo não serão armazenadas em cache, o que resultará numa degradação significativa do desempenho.';
$string['check_themedesignermode_comment_enable'] = 'Se desativar esta opção, as imagens e as folhas de estilo serão armazenadas em cache, o que resultará numa melhoria significativa do desempenho.';
$string['check_themedesignermode_details'] = 'Este é muitas vezes o motivo pelo qual os sites Moodle ficam lentos. <p> Em média, pode exigir, pelo menos, o dobro de recursos do CPU para executar um site Moodle com o Modo de desenho do tema ativo. </p>';
$string['comments'] = 'Comentários';
$string['disabled'] = 'Desativado';
$string['edit'] = 'Editar';
$string['enabled'] = 'Ativado';
$string['issue'] = 'Problema';
$string['morehelp'] = 'mais ajuda';
$string['performance:view'] = 'Ver relatório de desempenho';
$string['performancereportdesc'] = 'Este relatório exibe uma listagem de problemas que podem afetar o desempenho do site {$a}';
$string['pluginname'] = 'Visão global do desempenho';
$string['privacy:metadata'] = 'O módulo Visão global do desempenho não armazena quaisquer dados pessoais.';
$string['value'] = 'Valor';
