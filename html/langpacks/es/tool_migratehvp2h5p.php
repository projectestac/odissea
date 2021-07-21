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
 * Strings for component 'tool_migratehvp2h5p', language 'es', version '3.11'.
 *
 * @package     tool_migratehvp2h5p
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempted'] = 'Intentos de usuarios';
$string['cannot_migrate'] = 'No se puede migrar la actividad';
$string['contenttype'] = 'Tipo de contenido';
$string['copy2cb'] = '¿Deberían añadirse estos contenidos al banco de contenido?';
$string['copy2cb_no'] = 'No; solamente deberían ser creados en la actividad.';
$string['copy2cb_yeswithlink'] = 'Si; y debería ser usado un enlace hacia estos archivos en la actividad.';
$string['copy2cb_yeswithoutlink'] = 'Si; pero una copia será usada en la actividad (los cambios en el banco de contenido no se reflejarán en la actividad)';
$string['error_contenttypeh5p_disabled'] = 'El tipo "H5P" de banco de contenido está deshabilitado. Debe ser habilitado para migrar actividades desde mod_hvp y añadirlas al banco de contenido también. Usted puede habilitar este tipo de contenido desde  \'Administración del sitio | Plugins | Banco de contenido | Gestionar tipos de contenido\' o ejecutar nuevamente la herramienta de migración y elegir \'No, solamente deberían ser creados en la actividad.\' (o \'copy2cb=0\' si está ejecutando la migración desde la Interfaz para Línea de Comando) para evitar la creación de archivos en el banco de contenido.';
$string['error_modh5pactivity_disabled'] = 'La actividad H5P está deshabilitada. Debe ser habilitada para migrar actividades desde mod_hvp';
$string['event_hvp_migrated'] = 'mod_hvp migrado a mod_h5pactivity';
$string['graded'] = 'Usuarios calificados';
$string['hvpactivities'] = 'Actividades mod_hvp pendientes';
$string['id'] = 'Id';
$string['keeporiginal'] = 'Seleccione que hacer con la actividad original luego de ser migrada';
$string['keeporiginal_delete'] = 'Borrar la actividad original';
$string['keeporiginal_hide'] = 'Ocultar la actividad original';
$string['keeporiginal_nothing'] = 'Mantener la actividad original como está';
$string['migrate'] = 'Migrar';
$string['migrate_fail'] = 'Error en la migración de la actividad hvp con id {$a}';
$string['migrate_gradesoverridden'] = 'Actividad original mod_hvp "{$a->name}", con id {$a->id}, migrada exitosamente. Sin embargo la misma tiene algunas anulaciones de calificación tales como retroalimentación, que no han sido migradas porque la actividad original está configurada con una calificación máxima inválida (debe ser mayor a 0 para que sea migrada al libro de calificaciones).';
$string['migrate_gradesoverridden_notdelete'] = 'Actividad original mod_hvp "{$a->name}", con id {$a->id}, migrada exitosamente. Sin embargo la misma tiene algunas anulaciones de calificación tales como retroalimentación, que no han sido migradas porque la actividad original está configurada con una calificación máxima inválida (debe ser mayor a 0 para que sea migrada al libro de calificaciones).  La actividad original ha sido ocultada en lugar de eliminada.';
$string['migrate_success'] = 'Actividad Hvp con id {$a} migrada con éxito';
$string['nohvpactivities'] = 'No hay actividades mod_hvp para migrar a mod_h5pactivity.';
$string['pluginname'] = 'Migrar contenido de mod_hvp a mod_h5pactivity';
$string['privacy:metadata'] = 'Migre contenido de mod_hvp a mod_h5pactivity no almacena ninguna información personal';
$string['savedstate'] = 'Estado guardado';
$string['selecthvpactivity'] = 'Seleccione {$a} actividad mod_hvp';
$string['settings'] = 'Configuración de migración';
