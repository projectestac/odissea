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
 * Strings for component 'enrol_lti', language 'es', version '3.11'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = 'Nota: Se recomienda que la configuración de administración del sitio \'Permitir incrustación de marcos\' esté habilitada para que las herramientas se muestren dentro de un marco en lugar de en una nueva ventana.';
$string['authltimustbeenabled'] = 'Nota: Este plugin requiere que el plugin de autenticación LTI esté también habilitado.';
$string['cartridgeurl'] = 'URL del cartucho';
$string['couldnotestablishproxy'] = 'No se pudo establecer un proxy con el cliente.';
$string['enrolenddate'] = 'Fecha de fin';
$string['enrolenddate_help'] = 'Si está activado, los usuarios pueden acceder únicamente hasta ese día.';
$string['enrolenddateerror'] = 'La fecha de inicio de la matriculación no puede ser previa a la fecha de fin de la matriculación.';
$string['enrolisdisabled'] = 'El plugin \'Publicar como herramienta LTI\' está deshabilitado.';
$string['enrolmentfinished'] = 'Matriculación finalizada.';
$string['enrolmentnotstarted'] = 'La matriculación no ha comenzado.';
$string['enrolperiod'] = 'Duración de la matrícula';
$string['enrolperiod_help'] = 'Cantidad de tiempo durante el cual la matrícula es válida, empezando desde el momento en el que los usuarios se auto matriculan desde el sistema remoto. Si está deshabilitado la duración de la matrícula es ilimitada.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si está habilitado los usuarios solo pueden acceder desde esta fecha en adelante.';
$string['failedrequest'] = 'Petición fallida. Motivo: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Para acceder a la herramienta, por favor sigue el enlace de debajo.';
$string['gradesync'] = 'Sincronización de calificaciones';
$string['gradesync_help'] = 'Si las calificaciones de la herramienta se envían al sistema remoto (consumidor LTI).';
$string['incorrecttoken'] = 'El token era incorrecto. Verifique la URL y vuelva a intentarlo o póngase en contacto con el administrador de esta herramienta.';
$string['invalidrequest'] = 'Solicitud inválida';
$string['invalidtoolconsumer'] = 'Consumidor de herramienta no válido.';
$string['launchdetails'] = 'Detalles de lanzamiento';
$string['launchdetails_help'] = 'Se requiere una URL de cartucho (también llamada URL de configuración) más una URL secreta o de inicio para configurar la herramienta.';
$string['launchurl'] = 'URL de inicio';
$string['lti:config'] = 'Configurar instancias de \'Publicar como herramienta LTI\'';
$string['lti:unenrol'] = 'Desmatricular usuarios de un curso';
$string['maxenrolled'] = 'Máximo de usuarios matriculados';
$string['maxenrolled_help'] = 'El número máximo de usuarios remotos que pueden acceder a la herramienta. Si se establece en cero, el número de usuarios inscritos es ilimitado.';
$string['maxenrolledreached'] = 'Se alcanzó el número máximo de usuarios remotos autorizados para acceder a la herramienta.';
$string['membersync'] = 'Sincronización del usuario';
$string['membersync_help'] = 'Si una tarea programada sincroniza a los usuarios inscritos en el sistema remoto con las inscripciones en este curso, creando una cuenta para cada usuario remoto según sea necesario e inscribiéndolos o cancelando su inscripción según sea necesario.

Si se establece en no, en el momento en que un usuario remoto acceda a la herramienta, se le creará una cuenta y se inscribirá automáticamente.';
$string['membersyncmode'] = 'Modo de sincronización del usuario';
$string['membersyncmode_help'] = 'Si los usuarios remotos deben inscribirse y/o darse de baja de este curso.';
$string['membersyncmodeenrolandunenrol'] = 'Inscribir usuarios nuevos y cancelar la inscripción a los que faltan';
$string['membersyncmodeenrolnew'] = 'Matricular nuevos usuarios.';
$string['membersyncmodeunenrolmissing'] = 'Desmatricular usuarios inexistentes';
$string['notoolsprovided'] = 'No se han proporcionado herramientas';
$string['opentool'] = 'Abrir herramienta';
$string['pluginname'] = 'Publicar como herramienta LTI';
$string['pluginname_desc'] = 'El complemento \'Publicar como herramienta LTI\', junto con el complemento de autenticación LTI, permite a los usuarios remotos acceder a cursos y actividades seleccionados. En otras palabras, Moodle funciona como un proveedor de herramientas LTI.';
$string['privacy:metadata:enrol_lti_users'] = 'La lista de usuarios matriculados a través de un proveedor LTI';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'El momento en el que el usuario accedió por última vez al curso';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'La última calificación que se registró del usuario';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'El momento en el que el usuario fue matriculado';
$string['privacy:metadata:enrol_lti_users:userid'] = 'El ID del usuario';
$string['registration'] = 'Registro de herramientas publicadas';
$string['registrationurl'] = 'URL de registro';
$string['registrationurl_help'] = 'Si se utiliza una URL de registro (también llamada URL de proxy), la herramienta se configura automáticamente.';
$string['remotesystem'] = 'Sistema remoto';
$string['requirecompletion'] = 'Requerir la finalización del curso o la actividad antes de la sincronización de calificaciones';
$string['returnurlnotset'] = 'No se estableció la URL de retorno.';
$string['roleinstructor'] = 'Rol para el profesor';
$string['roleinstructor_help'] = 'El rol asignado en la herramienta al profesor remoto.';
$string['rolelearner'] = 'Rol para el estudiante';
$string['rolelearner_help'] = 'El rol asignado en la herramienta al estudiante remoto.';
$string['secret'] = 'Secreta';
$string['secret_help'] = 'Una cadena de caracteres que se comparte con el sistema remoto (consumidor LTI) para proporcionar acceso a la herramienta.';
$string['sharedexternaltools'] = 'Publicado como herramientas LTI';
$string['successfulregistration'] = 'Registro con éxito';
$string['tasksyncgrades'] = 'Publicar como herramienta LTI de sincronización de calificaciones';
$string['tasksyncmembers'] = 'Publicar como herramienta LTI de sincronización de usuarios';
$string['toolsprovided'] = 'Herramientas publicadas';
$string['toolsprovided_help'] = 'Una herramienta se puede compartir con otro sitio proporcionando detalles de lanzamiento o una URL de registro.';
$string['tooltobeprovided'] = 'Herramientas para ser publicadas';
$string['toolurl'] = 'URL de la herramienta';
$string['userdefaultvalues'] = 'Valores por defecto del usuario';
