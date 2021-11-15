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
 * Strings for component 'grading', language 'es', version '3.11'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = 'Se ha seleccionado \'{$a->method}\' como el método activo de calificación  para el área \'{$a->area}\'';
$string['activemethodinfonone'] = 'No se ha seleccionado el método avanzado de calificación para el área \'{$a->area}\'. Se usará el método simple directo de calificación.';
$string['changeactivemethod'] = 'Cambiar método de calificación activo a';
$string['clicktoclose'] = 'clic para cerrar';
$string['error:gradingunavailable'] = 'El método de calificación avanzada no está configurado apropiadamente. Por favor, revise todas las opciones de calificación del foro en las configuraciones del foro.';
$string['error:notinrange'] = 'Se proporcionó una calificación no válida "{$a->grade}". Las calificaciones deben estar entre 0 y {$a->maxgrade}.';
$string['exc_gradingformelement'] = 'No es posible crear un formulario de calificación';
$string['formnotavailable'] = 'Se ha seleccionado un método de calificación avanzada, pero el formulario de calificación aún no está disponible. Debería definirlo antes utilizando el enlace existente en el menú de Administración.';
$string['gradingformunavailable'] = 'Tenga en cuenta que el formulario de calificación avanzada no está listo en este momento. Se utilizará el método simple de calificación hasta que el formulario sea válido.';
$string['gradingmanagement'] = 'Calificación avanzada';
$string['gradingmanagementtitle'] = 'Calificación avanzada: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Método de calificación';
$string['gradingmethod_help'] = 'Elija el método de calificación avanzada que se debe utilizar para calcular las calificaciones en este contexto.

Para deshabilitar la calificación avanzada y volver al método  de calificación por defecto, elija \'Calificación simple directa\'.';
$string['gradingmethodnone'] = 'Calificación simple directa';
$string['gradingmethods'] = 'Métodos de calificación';
$string['manageactionclone'] = 'Nuevo formulario a partir de una plantilla';
$string['manageactiondelete'] = 'Eliminar el formulario actual definido';
$string['manageactiondeleteconfirm'] = 'Usted va a eliminar el formulario de calificación \'{$a->formname}\' y toda la información asociada de \'{$a->component} ({$a->area})\'. Por favor, asegúrese de que comprende las siguientes consecuencias:

* No hay forma de deshacer la operación.
* Usted puede cambiar a otro método de calificación, incluida la "Calificiación simple directa" sin eliminar este formulario.
* Toda la información almacenada mediante los formularios de calificación se perderá.
* Los resultados de las calificaciones calculadas guardadas en el libro de calificaciones no se verá afectados. Sin embargo, la explicación de cómo se han calculado no estará disponible.
* Esta operación no afecta a eventuales copias de este formulario en otras actividades.';
$string['manageactiondeletedone'] = 'El formulario se eliminó correctamente';
$string['manageactionedit'] = 'Editar la definición del formulario actual';
$string['manageactionnew'] = 'Nuevo formulario desde cero';
$string['manageactionshare'] = 'Publicar el formulario como una nueva plantilla';
$string['manageactionshareconfirm'] = 'Está a punto de cuardar una copia del formulario de calificación \'{$a}\' como una plantilla pública. Otros usuarios de su sitio podrán crear nuevos formularios de calificación para sus actividades a partir de esta plantilla.';
$string['manageactionsharedone'] = 'El formulario se guardó correctamente como plantilla';
$string['noitemid'] = 'No es posible calificar. El elemento de calificación no existe.';
$string['nosharedformfound'] = 'No se ha encontrado plantilla';
$string['privacy:metadata:grading_definitions'] = 'Información básica sobre un formulario de calificación avanzado definido en un área calificable.';
$string['privacy:metadata:grading_definitions:areaid'] = 'El ID de área donde se define el formulario de calificación avanzada.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'El ID de definición de calificación de donde se copió.';
$string['privacy:metadata:grading_definitions:description'] = 'La descripción del método de calificación avanzado.';
$string['privacy:metadata:grading_definitions:method'] = 'El método de calificación responsable de la definición.';
$string['privacy:metadata:grading_definitions:name'] = 'El nombre de la definición de calificación avanzada.';
$string['privacy:metadata:grading_definitions:options'] = 'Algunas configuraciones de esta definición de calificación.';
$string['privacy:metadata:grading_definitions:status'] = 'El estado de esta definición de calificación avanzada.';
$string['privacy:metadata:grading_definitions:timecopied'] = 'El momento en que se copió la definición de calificación.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'El momento en que se creó la definición de calificación.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'La hora en que se modificó por última vez la definición de calificación.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'El ID del usuario que creó la definición de calificación.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'El ID del usuario que modificó por última vez la definición de calificación.';
$string['privacy:metadata:grading_instances'] = 'Registro de evaluación de un elemento calificable evaluado por un evaluador.';
$string['privacy:metadata:grading_instances:feedback'] = 'La retroalimentación dada por el usuario.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'El formato de texto de los comentarios proporcionados por el usuario.';
$string['privacy:metadata:grading_instances:raterid'] = 'El ID del usuario que calificó la instancia de calificación.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'La calificación de la instancia de calificación.';
$string['privacy:metadata:grading_instances:status'] = 'El estado de esta instancia de calificación.';
$string['privacy:metadata:grading_instances:timemodified'] = 'La hora en que se modificó por última vez la instancia de calificación.';
$string['privacy:metadata:gradingformpluginsummary'] = 'Datos para el método de calificación.';
$string['searchownforms'] = 'Incluir mis propios formularios';
$string['searchtemplate'] = 'Búsqueda de formularios de calificación';
$string['searchtemplate_help'] = 'Usted puede buscar aquí un formulario de calificación y utilizarlo como una plantilla para crear un nuevo formulario de calificación. Simplemente escriba palabras que formen parte del nombre del formulario, la descripción o el cuerpo del mismo. Para buscar una frase, ponga toda la consulta entre comillas dobles.

Por defecto, sólo los formularios de calificación que se han guardado como plantillas compartidas se incluyen en los resultados de búsqueda. También puede incluir todos sus propios formularios de calificación en los resultados de la búsqueda. De esta manera, puede reutilizar sus los formularios de calificación sin necesidad de  compartirlos. Sólo los formularios marcados como "listo para su uso" pueden ser reutilizados de esta manera.';
$string['statusdraft'] = 'Borrador';
$string['statusready'] = 'Listo para su uso';
$string['templatedelete'] = 'Eliminar';
$string['templatedeleteconfirm'] = 'Esta a punto de borrar la plantilla compartida \'{$a}\'. Eliminar una plantilla no afecta a los formularios existentes creados a partir de la misma.';
$string['templateedit'] = 'Editar';
$string['templatepick'] = 'Utilice esta plantilla';
$string['templatepickconfirm'] = '¿Desea usar el formulario de calificación \'{$a->formname}\' como una plantilla para el nuevo formulario de calificación en \'{$a->component} ({$a->area})\'?';
$string['templatepickownform'] = 'Utilice este formulario como plantilla';
$string['templatesource'] = 'Localización: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Formulario propio';
$string['templatetypeshared'] = 'Plantilla compartida';
