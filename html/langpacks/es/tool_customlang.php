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
 * Strings for component 'tool_customlang', language 'es', version '3.11'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Guardar cadenas en el paquete de idioma';
$string['checkout'] = 'Abrir el paquete de idioma para editar';
$string['checkoutdone'] = 'Paquete de idioma cargado';
$string['checkoutinprogress'] = 'Cargando paquete de idioma';
$string['cliexportfileexists'] = 'El archivo para {$a->lang} ya existe, omitiendo. Si desea sobrescribir, añada la opción --override=true.';
$string['cliexportfilenotfoundforcomponent'] = 'No se encontró el archivo {$a->filepath} para el idioma {$a->lang}. Omitiendo este archivo.';
$string['cliexportheading'] = 'Comenzando a exportar archivos de idioma.';
$string['cliexportnofilefoundforlang'] = 'No se encontró ningún archivo para exportar. Omitiendo la exportación para este idioma.';
$string['cliexportstartexport'] = 'Exportando idioma {$a}';
$string['cliexportzipdone'] = 'Archivo zip creado: {$a}';
$string['cliexportzipfail'] = 'No se puede crear el archivo zip {$a}';
$string['clifiles'] = 'Archivos a importar en {$a}';
$string['cliimporting'] = 'Importar cadena de archivos (modo {$a})';
$string['climissingfiles'] = 'Faltan archivos válidos';
$string['climissinglang'] = 'Falta idioma';
$string['climissingmode'] = 'Falta modo o no es válido (los valores válidos son todo, nuevo o actualizar)';
$string['climissingsource'] = 'Falta archivo o directorio';
$string['clinolog'] = 'Nada que importar en {$a}';
$string['confirmcheckin'] = 'Está a punto de guardar cambios en su paquete de idioma local. Este proceso exportará las cadenas personalizadas desde el traductor hasta el directorio de datos de su sitio y su sitio comenzará a utilizar las cadenas modificadas. Pulse el botón \'Continuar\' para iniciar el guardado.';
$string['customlang:edit'] = 'Editar traducción local';
$string['customlang:export'] = 'Exportar traducción local';
$string['customlang:view'] = 'Mostrar traducción local';
$string['export'] = 'Exportar cadenas personalizadas';
$string['exportfilter'] = 'Seleccionar componente(s) para exportar';
$string['filter'] = 'Filtro de cadenas';
$string['filtercomponent'] = 'Mostrar cadenas de estos componentes';
$string['filtercustomized'] = 'Sólo las personalizadas';
$string['filtermodified'] = 'Sólo las modificadas en esta sesión';
$string['filteronlyhelps'] = 'Sólo los textos de ayuda';
$string['filtershowstrings'] = 'Mostrar cadenas';
$string['filterstringid'] = 'Identificador de la cadena';
$string['filtersubstring'] = 'Cadenas que contienen';
$string['headingcomponent'] = 'Identificador';
$string['headinglocal'] = 'Traducción local personalizada';
$string['headingstandard'] = 'Texto estándar';
$string['headingstringid'] = 'Cadena';
$string['import'] = 'Importar cadenas personalizadas';
$string['import_all'] = 'Crear o actualizar todas las cadenas de los componentes';
$string['import_mode'] = 'Modo importar';
$string['import_new'] = 'Crear sólo cadenas sin la personalización local';
$string['import_update'] = 'Actualizar sólo cadenas con personalización local';
$string['importfile'] = 'Importar archivo';
$string['langpack'] = 'Componente(s) del idioma';
$string['markinguptodate'] = 'Marcando la personalización como actualizada';
$string['markinguptodate_help'] = 'La traducción personalizada puede quedar obsoleta si los paquetes del Inglés original o la traducción principal se han modificado posteriormente a la personalización de su sitio. Revise la traducción personalizada. Si ve que está actualizada, haga clic en la casilla de verificación. Edítela de lo contrario.';
$string['markuptodate'] = 'Marcar como actualizado';
$string['modifiedno'] = 'No existen cadenas modificadas para guardar.';
$string['modifiednum'] = 'Hay {$a} cadenas modificadas. ¿Desea guardar estos cambios a su paquete de idioma local?';
$string['nolocallang'] = 'No se encontraron cadenas locales.';
$string['nostringsfound'] = 'No se han encontrado cadenas, modifique la configuración del filtro';
$string['notice_ignorenew'] = 'Ignorando la cadena {$a->component}/{$a->stringid} porque no está personalizada.';
$string['notice_ignoreupdate'] = 'Ignorando la cadena {$a->component}/{$a->stringid} porque ya está definida.';
$string['notice_inexitentstring'] = 'Cadena {$a->component}/{$a->stringid} no encontrada.';
$string['notice_missingcomponent'] = 'Falta componente {$a->component}';
$string['notice_success'] = 'Cadena  {$a->component}/{$a->stringid} actualizada correctamente.';
$string['placeholder'] = 'Marcadores de posición';
$string['placeholder_help'] = 'Las variables son elementos especiales, como \'{$a}\' o \'{$a->algo_más}\' dentro de una cadena. Se reemplazan con un valor cuando se aplica la cadena .

Es importante copiarlas exactamente igual a como están en la cadena original. No las traduzca ni cambie su estructura interna.';
$string['placeholderwarning'] = 'Las cadenas contienen marcadores de posicion';
$string['pluginname'] = 'Personalización del idioma';
$string['privacy:metadata'] = 'El complemento de personalización de idioma no almacena ningún dato personal.';
$string['savecheckin'] = 'Guardar los cambios del paquete de idioma';
$string['savecontinue'] = 'Aplicar los cambios y continuar editando';
