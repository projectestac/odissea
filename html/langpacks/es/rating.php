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
 * Strings for component 'rating', language 'es', version '3.11'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Promedio de valoraciones';
$string['aggregatecount'] = 'Número de valoraciones';
$string['aggregatemax'] = 'Calificación máxima';
$string['aggregatemin'] = 'Calificación mínima';
$string['aggregatenone'] = 'No hay valoraciones';
$string['aggregatesum'] = 'Suma de valoraciones';
$string['aggregatetype'] = 'Tipo de consolidación';
$string['aggregatetype_help'] = 'El tipo de consolidación define cómo se combinan las puntuaciones para formar la nota final en el libro de calificaciones.

* Promedio de calificaciones- La media de todas las calificaciones
* Número de calificaciones - El número de elementos calificados se convierte en la nota final. Tenga en cuenta que el total no puede exceder la nota máxima de la actividad
* Máxima calificación - La calificación más alta se convierte en la nota final
* Mínima calificación - La calificación más baja se convierte en la nota final
* Suma de calificaciones- Todas las calificaciones se suman. Tenga en cuenta que el total no puede exceder la nota máxima de la actividad.

Si "No hay valoraciones" está seleccionado, entonces la actividad no aparece en el libro de calificaciones.';
$string['allowratings'] = '¿Permitir que los ítems sean calificados?';
$string['allratingsforitem'] = 'Todas las valoraciones emitidas';
$string['capabilitychecknotavailable'] = 'La comprobación de capacidades no está disponible hasta que se guarde la actividad';
$string['couldnotdeleteratings'] = 'Lo sentimos, no se puede eliminar, puesto que alguien lo ha calificado';
$string['norate'] = 'No se permite calificar ítems.';
$string['noratings'] = 'No se han emitido valoraciones';
$string['noviewanyrate'] = 'Sólo puede consultar los resultados de elementos realizados por usted';
$string['noviewrate'] = 'No tiene permiso para ver las valoraciones de los ítems';
$string['privacy:metadata:rating'] = 'La valoración ingresada por el usuario se almacena junto con una identificación del ítem que fue valorado.';
$string['privacy:metadata:rating:rating'] = 'La valoración numérica que el usuario ingresó.';
$string['privacy:metadata:rating:timecreated'] = 'La hora en la cual la primera valoración fue realizada.';
$string['privacy:metadata:rating:timemodified'] = 'La última hora de actualización de la valoración.';
$string['privacy:metadata:rating:userid'] = 'El usuario que hizo la valoración.';
$string['rate'] = 'Calificar';
$string['ratepermissiondenied'] = 'No tiene permiso para calificar este ítem';
$string['rating'] = 'Calificación';
$string['ratinginvalid'] = 'La calificación no es correcta';
$string['ratings'] = 'Calificaciones';
$string['ratingtime'] = 'Limitar las valoraciones a los elementos con fechas en este rango:';
$string['rolewarning'] = 'Roles con permiso para calificar';
$string['rolewarning_help'] = 'Para enviar valoraciones los usuarios necesitan el permiso \'moodle/rating:rate\'  y cualquier capacidad adicional específica del módulo. Los usuarios asignados a los roles siguientes deberían poder valorar ítems. La lista de roles puede ser modificada a través del enlace a permisos en el bloque de configuración o en el menú de acciones, dependiendo del tema vigente.';
$string['scaleselectionrequired'] = 'Cuando seleccione un tipo de agregación de valoraciones también debe elegir si usar una escala o establecer una puntuación máxima.';
