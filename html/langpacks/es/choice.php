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
 * Strings for component 'choice', language 'es', version '3.11'.
 *
 * @package     choice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoices'] = 'Añadir más opciones';
$string['allowmultiple'] = 'Permitir seleccionar más de una opción';
$string['allowupdate'] = 'Permitir la actualización de la consulta';
$string['answered'] = 'Contestado';
$string['atleastoneoption'] = 'Necesita proporcionar al menos una respuesta posible.';
$string['calendarend'] = '{$a} cierran';
$string['calendarstart'] = '{$a} abren';
$string['cannotsubmit'] = 'Lo lamentamos, se ha producido un error con el envío de su respuesta. Por favor inténtelo de nuevo.';
$string['choice'] = 'Consulta';
$string['choice:addinstance'] = 'Añadir una nueva opción';
$string['choice:choose'] = 'Registrar una elección';
$string['choice:deleteresponses'] = 'Modificar y eliminar respuestas';
$string['choice:downloadresponses'] = 'Descargar respuestas';
$string['choice:readresponses'] = 'Ver respuestas';
$string['choice:view'] = 'Ver actividad de consulta';
$string['choiceactivityname'] = 'Consulta: {$a}';
$string['choiceclose'] = 'Permite respuestas hasta';
$string['choicecloseson'] = 'La consulta se cierra el {$a}';
$string['choicefull'] = 'Una o más de las opciones que Usted ha seleccionado ya se han llenado. Su respuesta no ha sido guardada. Por favor, haga otra selección.';
$string['choicename'] = 'Título de la consulta';
$string['choiceopen'] = 'Permitir respuestas a partir de';
$string['choiceoptions'] = 'Opciones de la Consulta';
$string['choiceoptions_help'] = 'Aquí es donde usted especifica las opciones que los participantes tienen para escoger.

Puede rellenar cualquier número de éstas. Si deja alguna en blanco, no aparecerá en el cuestionario. Si necesita más de 8 opciones, haga clic en el botón "Espacios en blanco para 3 opciones más".';
$string['choicesaved'] = 'Su elección ha sido guardada';
$string['choicetext'] = 'Texto de la opción';
$string['chooseaction'] = 'Elija una acción ...';
$string['chooseoption'] = 'Cambiar a: {$a}';
$string['closebeforeopen'] = 'Has especificado una fecha de cierre previa a la de la fecha de apertura.';
$string['completiondetail:submit'] = 'Elija una opción';
$string['completionsubmit'] = 'Mostrar como completada cuando el usuario selecciona una opción';
$string['description'] = 'Descripción';
$string['deselectalloption'] = 'Des-seleccionar todos "{$a}"';
$string['displayhorizontal'] = 'Mostrar horizontalmente';
$string['displaymode'] = 'Modo de visualización de las opciones';
$string['displayvertical'] = 'Mostrar verticalmente';
$string['eventanswercreated'] = 'Respuesta de consulta añadida';
$string['eventanswerdeleted'] = 'Respuesta de consulta eliminada';
$string['eventanswersubmitted'] = 'Consulta hecha';
$string['eventanswerupdated'] = 'Consulta actualizada';
$string['eventreportdownloaded'] = 'Informe de selección descargado';
$string['eventreportviewed'] = 'Informe de Consulta visto';
$string['expired'] = 'Esta actividad cerró el {$a}.';
$string['full'] = '(Lleno)';
$string['havetologin'] = 'Debe entrar antes de remitir su elección';
$string['includeinactive'] = 'Incluir respuestas de usuarios inactivos/suspendidos';
$string['indicator:cognitivedepth'] = 'Elección cognitiva';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en una actividad Elección.';
$string['indicator:cognitivedepthdef'] = 'Elección cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje de compromiso cognitivo ofrecido por las actividades de Elección durante este intervalo de análisis (Niveles = Sin ver, Ver, Enviar, Ver retroalimentación)';
$string['indicator:socialbreadth'] = 'Consulta social';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en una actividad Consulta.';
$string['indicator:socialbreadthdef'] = 'Consulta social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por las actividades de Consulta durante este intervalo de análisis (Niveles = Sin participación, Participante solo, Participante con otros)';
$string['limit'] = 'Límite';
$string['limita'] = 'Límite: {$a}';
$string['limitanswers'] = 'Limitar el número de respuestas permitidas';
$string['limitanswers_help'] = 'Esta opción le permite limitar el número de participantes que pueden seleccionar cada opción a elegir. Cuando se alcanza el límite, entonces nadie más puede elegir esa opción.

Por favor tenga en cuenta que si Usted usa esta actividad en modo de grupo, entonces el límite es por grupo. Por ejemplo, si el límite es configurado a 5, entonces 5 miembros de cada grupo pueden seleccionar la opción, Si hay 3 grupos, esto significaría que hasta 5 x 3 = 15 participantes podrían seleccionar la opción.

Si los límites están deshabilitados, entonces cualquier número de participantes puede seleccionar cada una de las opciones.';
$string['limitno'] = 'Límite {no}';
$string['modulename'] = 'Consulta';
$string['modulename_help'] = 'El módulo Consulta permite al profesor hacer una pregunta especificando las posibles respuestas posibles.

Los resultados de la elección puede ser publicados después que los estudiantes hayan respondido, después de cierta fecha, o no publicarse. Los resultados pueden ser publicados, con los nombres de los estudiantes o de forma anónima.

Una Consulta puede utilizarse

* Para realizar una encuesta rápida que estimule a los alunmos a reflexionar sobre un tema

* Para comprobar rápidamente que los estudiantes han entendido algo concreto

* Para facilitar la toma de decisiones, por ejemplo permitiendo a los estudiantes votar algún aspecto relacionado con el curso.';
$string['modulenameplural'] = 'Consultas';
$string['moveselectedusersto'] = 'Mover los usuarios seleccionados a...';
$string['multiplenotallowederror'] = 'En esta consulta no está permito seleccionar más de una respuesta';
$string['mustchooseone'] = 'Debe elegir una respuesta antes de guardar. No se ha guardado nada.';
$string['noguestchoose'] = 'Lo sentimos, los invitados no pueden responder encuestas.';
$string['noresultsviewable'] = 'Los resultados no pueden verse en este momento.';
$string['notanswered'] = 'Sin contestar aún';
$string['notenrolledchoose'] = 'Lo sentimos, solo los usuarios matriculados pueden seleccionar una opción.';
$string['notopenyet'] = 'Esta actividad no estará disponible hasta el {$a}.';
$string['numberofuser'] = 'Número de respuestas';
$string['numberofuserinpercentage'] = 'Porcentaje de respuestas';
$string['openafterclose'] = 'Usted ha especificado una fecha de apertura posterior a  la fecha de cierre.';
$string['option'] = 'Opción';
$string['optionno'] = 'Opción {no}';
$string['options'] = 'Opciones';
$string['page-mod-choice-x'] = 'Cualquier página del módulo Consulta';
$string['pluginadministration'] = 'Administración';
$string['pluginname'] = 'Consulta';
$string['previewing'] = 'Esta es solo una vista previa de las opciones disponibles para esta actividad. Podrá hacer una elección cuando se abra.';
$string['previewonly'] = 'Esta es solamente una previsualización de las opciones disponibles para esta actividad. No podrá enviar su respuesta a la consulta hasta el {$a}.';
$string['privacy'] = 'Privacidad de los resultados';
$string['privacy:metadata:choice_answers'] = 'Información acerca de la(s) respuesta(s) elegida(s) por el usuario para una actividad de consulta dada';
$string['privacy:metadata:choice_answers:choiceid'] = 'La ID de la actividad de Consulta';
$string['privacy:metadata:choice_answers:optionid'] = 'La ID de la opción que el usuario seleccionó.';
$string['privacy:metadata:choice_answers:timemodified'] = 'El sello de tiempo que indica cuando fue modificada la Consulta por el usuario';
$string['privacy:metadata:choice_answers:userid'] = 'La ID del usuario que contesta esta actividad de Consulta';
$string['publish'] = 'Publicar resultados';
$string['publishafteranswer'] = 'Mostrar los resultados a los estudiantes después de que respondan';
$string['publishafterclose'] = 'Mostrar los resultados a los estudiantes sólo después de cerrar la consulta';
$string['publishalways'] = 'Mostrar siempre los resultados a los estudiantes';
$string['publishanonymous'] = 'Publicar resultados anónimamente, sin mostrar los nombres de los alumnos';
$string['publishinfoanonafter'] = 'Podrá ver los resultados de forma anónima una vez responda.';
$string['publishinfoanonclose'] = 'Podrá ver los resultados de forma anónima una vez finalice la actividad.';
$string['publishinfofullafter'] = 'Podrá ver los resultados completos una vez responda.';
$string['publishinfofullclose'] = 'Podrá ver los resultados completos una vez finalice la actividad.';
$string['publishinfonever'] = 'Los resultados de esta actividad no se publicarán después de su respuesta.';
$string['publishnames'] = 'Publicar resultados con los nombres de los alumnos';
$string['publishnot'] = 'No publicar los resultados';
$string['removemychoice'] = 'Eliminar mi elección';
$string['removeresponses'] = 'Eliminar todas las respuestas';
$string['responses'] = 'Respuestas';
$string['responsesa'] = 'Respuestas: {$a}';
$string['responsesresultgraphheader'] = 'Vista de gráfica';
$string['responsesto'] = 'Respuestas para {$a}';
$string['results'] = 'Resultados';
$string['savemychoice'] = 'Guardar mi elección';
$string['search:activity'] = 'Consulta - información de actividad';
$string['selectalloption'] = 'Seleccionar todos "{$a}"';
$string['showavailable'] = 'Mostrar espacios disponibles';
$string['showavailable_help'] = 'Muestra a los participantes el límite de cada opción y el número de respuestas hasta ahora.';
$string['showpreview'] = 'Mostrar previsualización';
$string['showpreview_help'] = 'Permitir a los estudiantes ver las opciones disponibles antes de que la consulta esté abierta para enviar.';
$string['showunanswered'] = 'Mostrar columna de no respondidas';
$string['spaceleft'] = 'espacio disponible';
$string['spacesleft'] = 'espacios disponibles';
$string['taken'] = 'Tomadas';
$string['userchoosethisoption'] = 'Usuarios que eligieron esta opción';
$string['viewallresponses'] = 'Ver {$a} respuestas';
$string['viewchoices'] = 'Ver respuestas';
$string['withselected'] = 'Con seleccionados';
$string['yourselection'] = 'Su elección';
