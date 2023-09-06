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
 * Strings for component 'condition', language 'es', version '4.1'.
 *
 * @package     condition
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = 'Agregar {no} condiciones de actividad al formulario';
$string['addgrades'] = 'Agregar {no} condiciones de calificación al formulario';
$string['adduserfields'] = 'Añadir {no} condiciones de campo de usuario.';
$string['availabilityconditions'] = 'Restricciones de acceso';
$string['availablefrom'] = 'Permitir el acceso desde';
$string['availablefrom_help'] = '<strong>Permitir el acceso desde/hasta la fecha</strong>, determina el periodo de tiempo durante el que los estudiantes pueden acceder a la actividad mediante un enlace situado en la página del curso.

La diferencia entre las fechas de <strong>acceso desde/hasta</strong> y las condiciones de temporalización de la actividad <strong>abrir/cerrar actividad</strong> es que estos últimos parámetros muestran a los estudiantes la descripción de la actividad en el curso mientras que  <strong>Permitir el acceso  desde/hasta la fecha</strong> restringen incluso la visualización de esta descripción.';
$string['availableuntil'] = 'Permitir el acceso hasta';
$string['badavailabledates'] = 'Fechas no válidas. Si se ajustan ambas fechas, la fecha \'Permitir el acceso desde\' debe ser anterior a la fecha \'Permitir el acceso hasta\'.';
$string['badgradelimits'] = 'Si Usted marca tanto un límite inferior y un límite superior, el límte superior debe ser mayor que el inferior.';
$string['completion_complete'] = 'debe marcarse como completada';
$string['completion_fail'] = 'debe estar completa con calificación de suspenso';
$string['completion_incomplete'] = 'no debe estar marcada como completa';
$string['completion_pass'] = 'debe estar completa con calificación de aprobado';
$string['completioncondition'] = 'Condición de finalización de actividad';
$string['completioncondition_help'] = 'Este ajuste determina cualesquiera condiciones de finalización de la actividad, que deben cumplirse para acceder a la actividad. Note que el rastreo de finalización debe ajustarse antes de que se pueda determinar la condición de finalización de la actividad.

Si se desea, se pueden ajustar múltiples condiciones de finalización de la actividad. Si se hace así, la actividad sólo estará disponible cuando se cumplan TODAS las condiciones de finalización.';
$string['completionconditionsection'] = 'Condición para completar actividad';
$string['completionconditionsection_help'] = 'Esta configuración determina las condiciones para completar una actividad que deben cumplirse para poder acceder a la sección. Observe que el seguimiento de  completado debe de habilitarse primeramente antes de configurar una condición de completado de actividad.

Se pueden configurar múltiples condiciones de completado si así se desea. Si se hace así, solamente se permitirá el acceso a la sección cuando TODAS las condiciones de completado hayan sido satisfechas.';
$string['configenableavailability'] = 'Si se activa, esta opción le permite fijar las condiciones (basadas en la fecha, la calificación o el grado de finalización) que controlan si una actividad está disponible.';
$string['contains'] = 'contiene';
$string['doesnotcontain'] = 'no contiene';
$string['enableavailability'] = 'Habilitar acceso condicional';
$string['endswith'] = 'termina en';
$string['fielddeclaredmultipletimes'] = 'No puede declarar el mismo campo más de una vez por actividad.';
$string['grade_atleast'] = 'debe ser al menos';
$string['grade_upto'] = 'y menos que';
$string['gradecondition'] = 'Condición de calificación';
$string['gradecondition_help'] = 'Este ajuste determina las condiciones sobre calificaciones previas que deben haberse obtenido para poder acceder a la actividad.

Si se desea, se pueden establecer varias condiciones de calificación para acceder a la actividad. Si se hace así, la actividad sólo estará disponible cuando se cumplan TODAS las condiciones de calificación establecidas.';
$string['gradeconditionsection'] = 'Condición de calificación';
$string['gradeconditionsection_help'] = 'Este ajuste determina las condiciones sobre calificaciones previas que deben haberse obtenido para poder acceder a la sección.

Si se desea, se pueden establecer varias condiciones de calificación para acceder a la sección. Si se hace así, la sección sólo estará disponible cuando se cumplan TODAS las condiciones de calificación establecidas.';
$string['gradeitembutnolimits'] = 'Debe introducir un límite superior, inferior, o ambos.';
$string['gradelimitsbutnoitem'] = 'Debe escojer un elemento de calificación.';
$string['gradesmustbenumeric'] = 'Las calificaciones mínima y máxima deben ser numéricas (o en blanco)';
$string['groupingnoaccess'] = 'Usted actualmente no pertenece a un grupo que tenga acceso a esta sección.';
$string['isempty'] = 'está vacío';
$string['isequalto'] = 'es igual a';
$string['isnotempty'] = 'no está vacío';
$string['none'] = '(ninguna)';
$string['notavailableyet'] = 'Aún no disponible';
$string['requires_completion_0'] = 'No disponible a menos que la actividad <strong>{$a}</strong> esté incompleta.';
$string['requires_completion_1'] = 'No disponible hasta que la actividad <strong>{$a}</strong> esté marcada como completa.';
$string['requires_completion_2'] = 'No disponible hasta que la actividad <strong>{$a}</strong> esté completa y aprobada.';
$string['requires_completion_3'] = 'No disponible a menos que la actividad <strong>{$a}</strong> esté completa y suspensa.';
$string['requires_date'] = 'Disponible desde {$a}.';
$string['requires_date_before'] = 'Disponible hasta {$a}.';
$string['requires_date_both'] = 'Disponible desde {$a->from} hasta {$a->until}.';
$string['requires_date_both_single_day'] = 'Disponible en {$a}.';
$string['requires_grade_any'] = 'No disponible hasta que usted tenga una calificación en <strong>{$a}</strong>.';
$string['requires_grade_max'] = 'No disponible a menos que usted consiga una calificación apropiada en <strong>{$a}</strong>.';
$string['requires_grade_min'] = 'Not available until you achieve a required score in <strong>{$a}</strong>.';
$string['requires_grade_range'] = 'No disponible hasta que se alcance la puntuación establecida en la actividad <strong>{$a}</strong>.';
$string['requires_grouping'] = 'Disponible sólo para el agupamiento <strong>{$a}</strong>.';
$string['requires_user_field_contains'] = 'No disponible hasta que <strong>{$a->field}</strong> contenga <strong>{$a->value}</strong>.';
$string['requires_user_field_doesnotcontain'] = 'No disponible si tu <strong>{$a->field}</strong> contiene <strong>{$a->value}</strong>.';
$string['requires_user_field_endswith'] = 'No disponible hasta que <strong>{$a->field}</strong> termine en <strong>{$a->value}</strong>.';
$string['requires_user_field_isempty'] = 'No disponible hasta que <strong>{$a->field}</strong> esté vacío.';
$string['requires_user_field_isequalto'] = 'No disponible hasta que <strong>{$a->field}</strong> es igual a <strong>{$a->value}</strong>.';
$string['requires_user_field_isnotempty'] = 'No disponible si tu <strong>{$a->field}</strong> está vacío.';
$string['requires_user_field_startswith'] = 'No disponible hasta que <strong>{$a->field}</strong> comience por <strong>{$a->value}</strong>.';
$string['showavailability'] = 'Acceso antes del inicio de la actividad';
$string['showavailability_hide'] = 'Ocultar completamente la actividad';
$string['showavailability_show'] = 'Mostrar actividad en gris, con información de restricción';
$string['showavailabilitysection'] = 'Antes de que pueda accederse a esta sección';
$string['showavailabilitysection_hide'] = 'Ocultar la sección completamente';
$string['showavailabilitysection_show'] = 'Mostrar la sección en gris pálido, con información sobre la restricción';
$string['startswith'] = 'comienza con';
$string['userfield'] = 'Campo de usuario';
$string['userfield_help'] = 'Se puede restringir el acceso basándose en cualquier campo del perfil de los usuarios.';
$string['userrestriction_hidden'] = 'Restringido (completamente oculto, no mensaje): ‘{$a}’';
$string['userrestriction_visible'] = 'Restringido: ‘{$a}’';
