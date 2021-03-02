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
 * Strings for component 'editor_atto', language 'gl', version '3.8'.
 *
 * @package     editor_atto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'Non foi posíbel conectar co servidor. Se envía esta páxina agora, os seus cambios poden perderse.';
$string['autosavefrequency'] = 'Frecuencia de gardado automático';
$string['autosavefrequency_desc'] = 'Este é o número de segundos entre os intentos de gardar automaticamente. Atto gardará automaticamente o texto no editor de acordo con esta configuración, de xeito que o texto pode ser restaurado automaticamente cando o mesmo usuario volva ao mesmo formulario';
$string['autosaves'] = 'Información de gardado automático do editor';
$string['autosavesucceeded'] = 'Versión preliminar gardada';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'A liña «{$a}» non ten o formato correcto.';
$string['errorgroupisusedtwice'] = 'O grupo «{$a}» defínese dúas veces; os nomes dos grupos deben ser únicos.';
$string['errornopluginsorgroupsfound'] = 'Non se atoparon engadidos nin grupos; engada algúns grupos e engadidos.';
$string['errorpluginisusedtwice'] = 'O engadido «{$a}» úsase dúas veces; os engadidos só se poden definir unha vez.';
$string['errorpluginnotfound'] = 'Non é posíbel empregar o engadido «{$a}»; Semella que non está instalado.';
$string['errortextrecovery'] = 'Desafortunadamente non foi posíbel restaurar a versión preliminar.';
$string['infostatus'] = 'Información';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['pluginname'] = 'Editor HTML Atto';
$string['privacy:metadata:database:atto_autosave'] = 'Versións preliminares do editor de texto gardadas automaticamente.';
$string['privacy:metadata:database:atto_autosave:drafttext'] = 'O texto que se gardou.';
$string['privacy:metadata:database:atto_autosave:timemodified'] = 'O momento no que foi modificado o contido.';
$string['privacy:metadata:database:atto_autosave:userid'] = 'O ID do usuario cuxos datos foron gardados.';
$string['recover'] = 'Recuperar';
$string['settings'] = 'Axustes da barra de ferramentas do Atto';
$string['subplugintype_atto'] = 'Engadido Atto';
$string['subplugintype_atto_plural'] = 'Engadidos Atto';
$string['taskautosavecleanup'] = 'Eliminar as versións preliminares gardados automaticamente xa caducadas da base de datos.';
$string['textrecovered'] = 'A versión preliminar deste texto foi restaurada automaticamente.';
$string['toolbarconfig'] = 'Configuración da barra de tarefas';
$string['toolbarconfig_desc'] = 'A lista de engadidos e a orde na que se amosan pode configurarse aquí. A configuración consiste en grupos (un por liña) seguidos da lista ordenada de engadidos para ese grupo. O grupo está separado dos engadidos cun signo igual e os engadidos están separados por comas. Os nomes dos grupos deben ser únicos e deben indicar o que teñen en común os botóns. Os nomes dos botóns e os grupos non deben repetirse e só poden conter caracteres alfanuméricos.';
$string['warningstatus'] = 'Aviso';
