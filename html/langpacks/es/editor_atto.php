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
 * Strings for component 'editor_atto', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   editor_atto
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'No se puede conectar con el servidor. Si envía esta página ahora, los cambios podrían perderse.';
$string['autosavefrequency'] = 'Frecuencia de autoguardado';
$string['autosavefrequency_desc'] = 'Este es el número de segundos entre los intentos de auto guardado. Atto guardará automáticamente el texto del editor de acuerdo a este parámetro, de tal forma que el texto pueda ser restaurado cuando el mismo usuario vuelva al mismo formulario.';
$string['autosavesucceeded'] = 'Borrador guardado.';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'La línea \'{$a}\' no tiene un formato adecuado.';
$string['errorgroupisusedtwice'] = 'El grupo \'{$a}\' está definido dos veces; el nombre de los grupos debe ser único.';
$string['errornopluginsorgroupsfound'] = 'No se han encontrado grupos o plugins; por favor añade algunos grupos o plugins.';
$string['errorpluginisusedtwice'] = 'El plugin \'{$a}\' está usado dos veces; los plugins pueden estar definidos solamente una vez.';
$string['errorpluginnotfound'] = 'El plugin \'{$a}\' no puede ser utilizado; no parece que esté instalado.';
$string['errortextrecovery'] = 'Desafortunadamente la versión en borrador no pudo ser restaurada.';
$string['infostatus'] = 'Información';
$string['pluginname'] = 'Editor HTML Atto';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['recover'] = 'Recuperar';
$string['settings'] = 'Opciones de la barra herramienta de Atto';
$string['subplugintype_atto'] = 'Atto plugin';
$string['subplugintype_atto_plural'] = 'Atto plugins';
$string['taskautosavecleanup'] = 'Eliminar de la base de datos borradores caducados automáticamente guardados.';
$string['textrecovered'] = 'Una versión en borrador de este texto ha sido automáticamente restaurada.';
$string['toolbarconfig'] = 'Configurar barra de herramientas';
$string['toolbarconfig_desc'] = 'El listado de plugings y el orden en el que se muestran puede configurarse desde aquí. La configuración consiste en indicar grupos (uno por línea), seguidos de la lista ordenada de plugings para ese grupo. El grupo se separa de los plugins con un símbolo de igual mientras que los plugins se separan por comas. Los nombre de los grupos deben ser únicos y deben indicar lo que los botones tienen en común. Los nombres de los botones y del grupo no deben repetirse y sólo pueden contener caracteres alfanuméricos.';
$string['warningstatus'] = 'Aviso';
