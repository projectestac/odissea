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
 * Strings for component 'block_sharing_cart', language 'es', version '3.11'.
 *
 * @package     block_sharing_cart
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_string'] = 'Actividad:';
$string['backup'] = 'Copiar a la Bolsa de Recursos';
$string['backup_heavy_load_warning_message'] = 'Si la sección contiene varias actividades, el tiempo de procesamiento será mayor.';
$string['bulkdelete'] = 'Borrado masivo';
$string['clicktomove'] = 'Haga clic para moverse aquí';
$string['clipboard'] = 'Copiar este item compartido';
$string['confirm_backup'] = '¿Quiere copiar está actividad a la Bolsa de Recursos?';
$string['confirm_backup_section'] = '¿Desea copiar esta sección del curso y sus actividades / recursos en carrito para compartir?';
$string['confirm_delete'] = '¿Está seguro de querer borrar?';
$string['confirm_delete_selected'] = '¿Está seguro de querer borrar todos los elementos seleccionados?';
$string['confirm_restore'] = '¿Quiere copiar este item al curso?';
$string['confirm_userdata'] = '¿Quiere incluir datos de usuario en la copia de esta actividad?';
$string['conflict_description'] = '¿Quiere sobrescribir la información de la sección en el curso?';
$string['conflict_description_note'] = '*Los formatos de resumen de la sección (color de fuente, imágenes, etc.) y la configuración de disponibilidad se sobrescribirán después de copiarlos al curso.';
$string['conflict_no_overwrite'] = 'Conservar el nombre y la configuración de la sección actual <strong>"{$a}"</strong>';
$string['conflict_overwrite_title'] = 'Sobrescribir el nombre y la configuración de la sección a <strong>"{$a}"</strong>';
$string['conflict_submit'] = 'Continuar';
$string['copy_section'] = 'Copiar sección';
$string['copy_section_title'] = 'Copiar la sección seleccionada';
$string['copyhere'] = 'Copiar aquí';
$string['define_required_capabilities'] = 'Defina las capacidades necesarias';
$string['delete_folder'] = 'y todo su contenido';
$string['folder_string'] = 'Carpeta:';
$string['forbidden'] = 'Usted no tene permisos para acceder a este elemento compartido';
$string['inprogess_pleasewait'] = 'Espere por favor…';
$string['invalidoperation'] = 'Se detectó una operación no válida';
$string['label_image_replaced_text'] = '(Etiqueta: Imagen)';
$string['missing_capabilities'] = 'Faltan capacidades requeridas: {$a}';
$string['missing_capability'] = 'Falta la capacidad requerida: {$a}';
$string['modal_bulkdelete_confirm'] = 'Eliminar seleccionado';
$string['modal_bulkdelete_title'] = 'Seguro que quieres borrar';
$string['modal_checkbox'] = '¿Quieres copiar los datos del usuario? (Por ejemplo, entradas de glosario / wiki / base de datos)';
$string['modal_confirm_backup'] = 'Confirmar';
$string['modal_confirm_delete'] = 'Borrar';
$string['movedir'] = 'Mover a la carpeta';
$string['no_backup_support'] = 'No hay soporte de respaldo para este módulo';
$string['notarget'] = 'Destino no encontrado';
$string['pluginname'] = 'Bolsa de Recursos';
$string['privacy:metadata:block_sharing_cart'] = 'Los datos del carrito para compartir se almacenan aquí';
$string['privacy:metadata:block_sharing_cart:ctime'] = 'Hora de creación';
$string['privacy:metadata:block_sharing_cart:modicon'] = 'Icono del módulo de actividad';
$string['privacy:metadata:block_sharing_cart:modname'] = 'El nombre del módulo de actividad';
$string['privacy:metadata:block_sharing_cart:modtext'] = 'El título del módulo de actividad';
$string['privacy:metadata:block_sharing_cart:tree'] = 'El título de la carpeta del carrito para compartir que se muestra en el bloque';
$string['privacy:metadata:block_sharing_cart:userid'] = 'El ID de usuario';
$string['privacy:metadata:block_sharing_cart:weight'] = 'Orden de artículos, clasificación en orden ascendente';
$string['privacy:metadata:block_sharing_cart_plugins'] = 'Los datos de los complementos del carrito para compartir se almacenan aquí';
$string['privacy:metadata:block_sharing_cart_plugins:data'] = 'Compartir datos de complementos de carrito';
$string['privacy:metadata:block_sharing_cart_plugins:plugin'] = 'El nombre del complemento';
$string['privacy:metadata:block_sharing_cart_plugins:userid'] = 'El ID de usuario';
$string['recordnotfound'] = 'Elemento compartido no encontrado';
$string['requireajax'] = 'La Bolsa de Recursos requiere AJAX';
$string['requirejs'] = 'La Bolsa de Recursos requiere habilitar JavaScript en su navegador';
$string['restore'] = 'Copiar al curso';
$string['restore_heavy_load_warning_message'] = 'El tiempo de carga es mayor porque se están procesando más de 10 actividades/recursos.';
$string['section_name_conflict'] = 'Conflicto de sección';
$string['settings:userdata_copyable_modtypes'] = 'Tipos de módulos que pueden ser copiados';
$string['settings:userdata_copyable_modtypes_desc'] = 'Mientras se copia una actividad en la Bolsa de Recursos, un diálogo muestra si la opción de la copia de la actividad incluye sus datos de usuarios o no, y si el tipo de módulo seleccionado anteriormente y el usuario tienen las capacidades: <strong>moodle/backup:userinfo</strong>,
<strong>moodle/backup:anonymise</strong> y <strong>moodle/restore:userinfo</strong>.
(Por defecto, solo el rol de administrador tiene esas capacidades.)';
$string['settings:workaround_qtypes'] = 'Solución para tipos de preguntas';
$string['settings:workaround_qtypes_desc'] = 'La solución para la restauración de preguntas deberá ser actualizada si el tipo de pregunta está activo.
Cuando las preguntas a restaurar ya existan, sin embargo, esos datos apareceran como inconsistentes. El remedio intentará crear duplicados en lugar de reclicar los datos existentes.
Será útil para evitar errores de restauración del tipo <i>error_question_match_sub_missing_in_db</i>.';
$string['sharing_cart'] = 'Bolsa de recursos';
$string['sharing_cart:addinstance'] = 'Añadir un nuevo bloque Bolsa de Recursos';
$string['sharing_cart_help'] = '<h2 class="helpheading">Operación</h2>
<dl style="margin-left:0.5em;">
<dt>Copiando del curso a Bolsa de Recursos</dt>
<dd>Aparecerá un pequeño icono de copia de Bolsa de Recurso al final de cada
recurso o actividad dentro de un curso.
Clique ese icono para enviar una copia del recurso o actividad a la bolsa de recursos.
Solo se clonará la actividad sin datos de usuario.</dd>
<dt>Copiando desde Bolsa de Recursos al curso</dt>
<dd>Clique el icono de "copiar a un curso" y seleccione el destino de cada sección.
O clique "cancelar" que esta junto a ese icono.</dd>
<dt>Creando carpetas dentro de Bolsa de Recursos</dt>
<dd>Clique el icono "mover dentro de una carpeta".
Un elemento de escritura aparecerá si no hay carpeta.
O puede seleccionar una carpeta existente en la lista desplegable.
Se remplazará con un elemento de entrada si clica el icono de "editar"</dd>
</dl>';
$string['unexpectederror'] = 'Ocurrió un error no esperado';
$string['uninstalled_plugin_warning_title'] = 'Este complemento está desinstalado. Intentar recuperar esto sin reinstalar el complemento: {$a} provocará errores. La restauración está deshabilitada';
$string['variouscourse'] = 'de varios cursos';
