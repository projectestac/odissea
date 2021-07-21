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
 * Strings for component 'report_performance', language 'gl', version '3.11'.
 *
 * @package     report_performance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = 'Copia de seguridade automática';
$string['check_backup_comment_disable'] = 'O proceso de copia de seguridade pode afectar ao rendemento. No caso de activalas, as copias de seguridade deberían programarse para que se realicen fóra das horas punta.';
$string['check_backup_comment_enable'] = 'O proceso de copia de seguridade pode afectar ao rendemento. Deberían programarse para que se realicen fóra das horas punta.';
$string['check_backup_details'] = 'Ao activar as copias de seguridade, creranse automaticamente ficheiros de todos os cursos no servidor na hora que vostede especifique. <p>Durante este proceso, consumiranse máis recursos do servidor e pode afectarlle ao rendemento.</p>';
$string['check_cachejs_comment_disable'] = 'Se está activado, mellorará o rendemento ao cargar as páxinas.';
$string['check_cachejs_comment_enable'] = 'Se o desactiva, é probábel que as páxinas se carguen mais amodo.';
$string['check_cachejs_details'] = 'Gardar na caché e comprimir JavaScript mellorará notabelmente o rendemento ao cargar as páxinas. É moi recomendábel para sitios en produción.';
$string['check_debugmsg_comment_developer'] = 'Se o estabelece a calquera opción que sexa diferente de DESENVOLVEDOR, pode melloras un chisco o rendemento.';
$string['check_debugmsg_comment_nodeveloper'] = 'Se o estabelece a DESENVOLVEDOR, pode verse afectado o rendemento.';
$string['check_debugmsg_details'] = 'Sería moi raro que houber algunha vantaxe en poñelo no nivel para desenvolvedor, a non ser que sexa solicitado por un desenvolvedor.<p>Unha vez teña a mensaxe de erro, e o teña copiado e pegado en algures, é MOI RECOMENDÁBEL que configure a depuración (Debug) a NADA. As mensaxes de depuración poden dar pistas aos crackers sobre os axustes do seu sitio e poden afectar o rendemento.</p>';
$string['check_enablestats_comment_disable'] = 'O rendemento pode verse afectado polo procesamento de estatísticas. Se o activa, os axustes de estatísticas deberían facerse con tino.';
$string['check_enablestats_comment_enable'] = 'O rendemento pode verse afectado polo procesamento de estatísticas. Os axustes de estatísticas deberían facerse con tino.';
$string['check_enablestats_details'] = 'Ao activar isto, procésanse os rexistros en cronjob e colectase algunhas estatísticas. Dependendo da cantidade de tráfico no seu sitio, isto pode demorar bastante. <p>Durante este proceso, consumiranse máis recursos do servidor e pode afectarlle ao rendemento.</p>';
$string['check_themedesignermode_comment_disable'] = 'Se está activado, as follas de imaxes e estilos NON son almacenadas na caché, dando como resultado unha perda significativa no rendemento.';
$string['check_themedesignermode_comment_enable'] = 'Se o desactiva, as follas de imaxes e estilos son almacenadas na caché, dando como resultado unha mellora no rendemento.';
$string['check_themedesignermode_details'] = 'Isto adoita ser a causa de sitios Moodle lentos. <p>De media pode requirirse polo menos o dobre da cantidade de CPU para executar un sitio Moodle con modo de deseñador de temas activado.</p>';
$string['comments'] = 'Comentarios';
$string['disabled'] = 'Desactivado';
$string['edit'] = 'Editar';
$string['enabled'] = 'Activado';
$string['issue'] = 'Incidencia';
$string['morehelp'] = 'máis axuda';
$string['performance:view'] = 'Ver o informe de rendemento';
$string['performancereportdesc'] = 'Este informe lista incidencias que poden afectar ao rendemento do sitio {$a}';
$string['pluginname'] = 'Vista xeral do rendemento';
$string['privacy:metadata'] = 'O engadido de vista xeral do rendemento non almacena ningún dato persoal.';
$string['value'] = 'Valor';
