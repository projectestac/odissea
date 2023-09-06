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
 * Strings for component 'enrol_lti', language 'es', version '4.1'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontent'] = 'Añadir contenido';
$string['adddeployment:deploymentid'] = 'ID del despliegue';
$string['adddeployment:deploymentid_help'] = 'A cada despliegue de la herramienta (este sitio) en una plataforma le será asignado una ID de despliegue que es única para el registro. La ID del despliegue debe estar registrada con la herramienta (este sitio) antes de que sean permitidas las invocaciones desde el despliegue respectivo de la herramienta.';
$string['adddeployment:invaliddeploymentiderror'] = 'ID del despliegue inválido. Esta ID del despliegue ya existe para este registro de App.';
$string['adddeployment:name'] = 'Nombre del despliegue';
$string['addtocourse'] = 'Añadir al curso';
$string['addtogradebook'] = 'Añadir al libro de calificaciones';
$string['allowframeembedding'] = 'Nota: Se recomienda que la configuración de administración del sitio \'Permitir incrustación de marcos\' esté habilitada para que las herramientas se muestren dentro de un marco en lugar de en una nueva ventana.';
$string['authltimustbeenabled'] = 'Nota: Este plugin requiere que el plugin de autenticación LTI esté también habilitado.';
$string['cartridgeurl'] = 'URL del cartucho';
$string['copiedtoclipboard'] = '{$a} copiado al portapapeles';
$string['copytoclipboard'] = 'Copiar al portapapeles';
$string['couldnotestablishproxy'] = 'No se pudo establecer un proxy con el cliente.';
$string['customproperties'] = 'Propiedades personalizadas';
$string['deeplinkingurl'] = 'URL enlazado profundo';
$string['deletedactivity'] = 'Actividad eliminada';
$string['deletedactivityalt'] = 'La actividad compartida por esta instancia ha sido eliminada';
$string['deletedactivitydescription'] = 'La actividad compartida por esta instancia ha sido eliminada. Usted puede seleccionar otra actividad para compartir al editar la instancia; o, si ya no se necesita, usted puede simplemente eliminar la instancia. Eliminar la instancia quitará cualquier inscripción de usuario asociada.';
$string['deploymentadd'] = 'Añadir un despliegue';
$string['deploymentaddnotice'] = 'Despliegue añadido';
$string['deploymentdelete'] = 'Eliminar despliegue';
$string['deploymentdeleteconfirm'] = 'Advertencia: El eliminar un despliegue  resultará en una pérdida de acceso para cualquier usuario que siga enlaces de recursos amarrados a este despliegue de herramienta en la plataforma. Los servicios de sincronización de calificación y miembros también serán removidos para estos recursos. ¿Está seguro de querer eliminar deployment ID \'{$a}\'?';
$string['deploymentdeletenotice'] = 'Despliegue eliminado';
$string['deploymentid'] = 'ID del despliegue';
$string['deployments'] = 'Despliegues';
$string['deploymentsinfo'] = 'Una ID del despliegue será generada por la plataforma cuando la herramienta sea hecha disponible en un contexto. Esto puede ocurrir al momento del registro, o podría ocurrir después, cuando la herramienta sea hecha disponible a un curso o categoría específica. La ID del despliegue debe ser ingresada aquí antes de que sean permitidos los despliegues desde el despliegue de esa herramienta.';
$string['details'] = 'Detalles';
$string['editplatformdetails'] = 'Editar detalles de la plataforma';
$string['endpointltiversionnotice'] = 'Los endpoints de herramienta inferiores son solamente para la configuración manual LTI 1.3. Para versiones anteriores (1.1/2.0), los detalles para los consumidores pueden ser encontrados en la página de \'Publicados como herramientas LTI\', accesible vía la navegación del curso.';
$string['enrolenddate'] = 'Fecha de fin';
$string['enrolenddate_help'] = 'Si está activado, los usuarios pueden acceder únicamente hasta ese día.';
$string['enrolenddateerror'] = 'La fecha de inicio de la matriculación no puede ser previa a la fecha de fin de la matriculación.';
$string['enrolisdisabled'] = 'El plugin \'Publicar como herramienta LTI\' está deshabilitado.';
$string['enrolltiversionincorrect'] = 'El recurso no está configurado para su uso en versiones heredadas de LTI (versiones 1.1/2.0). Por favor, contacte con el administrador de esta herramienta.';
$string['enrolmentfinished'] = 'Matriculación finalizada.';
$string['enrolmentnotstarted'] = 'La matriculación no ha comenzado.';
$string['enrolperiod'] = 'Duración de la matrícula';
$string['enrolperiod_help'] = 'Cantidad de tiempo durante el cual la matrícula es válida, empezando desde el momento en el que los usuarios se auto matriculan desde el sistema remoto. Si está deshabilitado la duración de la matrícula es ilimitada.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si está habilitado los usuarios solo pueden acceder desde esta fecha en adelante.';
$string['existingregistrationerror'] = 'Ya existe un registro para este emisor y ID de cliente.';
$string['failedrequest'] = 'Petición fallida. Motivo: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Para acceder a la herramienta, por favor sigue el enlace de debajo.';
$string['gradesync'] = 'Sincronización de calificaciones';
$string['gradesync_help'] = 'Si las calificaciones de la herramienta se envían al sistema remoto (consumidor LTI).';
$string['incorrecttoken'] = 'El token era incorrecto. Verifique la URL y vuelva a intentarlo o póngase en contacto con el administrador de esta herramienta.';
$string['invalidexpiredregistrationurl'] = 'URL de registro inválida o expirada. Por favor compruebe la URL  e inténtelo nuevamente.';
$string['invalidrequest'] = 'Solicitud inválida';
$string['invalidtoolconsumer'] = 'Consumidor de herramienta no válido.';
$string['jwksurl'] = 'URL JWKS';
$string['launchdetails'] = 'Detalles de lanzamiento';
$string['launchdetails_help'] = 'Se requiere una URL de cartucho (también llamada URL de configuración) más una URL secreta o de inicio para configurar la herramienta.';
$string['launchurl'] = 'URL de inicio';
$string['loginurl'] = 'URL para iniciar ingreso';
$string['lti13'] = 'LTI Advantage';
$string['lti13launchdetails'] = 'Detalles de invocación';
$string['lti13launchdetails_help'] = 'La URL de invocación y las propiedades personalizadas solamente son requeridas cuando se configura manualmente un enlace a recurso en la plataforma. Donde sea posible, los profesores debería favorecer el proceso de la selección del contenido (enlace profundo) para la creación de enlaces a recursos.';
$string['lti:config'] = 'Configurar instancias de \'Publicar como herramienta LTI\'';
$string['lti:unenrol'] = 'Desmatricular usuarios de un curso';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = 'Hubo un problema al buscar la configuración de OpenID desde la plataforma. El resultado no era JSON válido. Esto también podría ser causado por configuración de hosts bloqueados. Por favor asegúrese de que su sitio esté configurado para conectar al dominio de la plataforma e inténtelo nuevamente usando una nueva URL de registro.';
$string['ltiadvlauncherror:invaliddeployment'] = 'Configuración de herramienta o datos de invocación inválidos. No se pudo encontrar el despliegue (deployment ID: {$a}).';
$string['ltiadvlauncherror:invalidid'] = 'Datos inválidos de invocación.  El recurso \'{$a}\' no está disponible o no existe.';
$string['ltiadvlauncherror:invalidregistration'] = 'Configuración de herramienta o datos para invocar inválidos. No se pudo encontrar un registro de la plataforma  (emisor: {$a->platform}, client ID: {$a->clientid}).';
$string['ltiadvlauncherror:missingid'] = 'Datos inváli dos de invocación. El campo personalizado \'id\' es requerido para invocar una actividad o un recurso sobre LTI Advantage.';
$string['ltilegacy'] = 'Legacy LTI (1.1/2.0)';
$string['ltilegacydeprecatednotice'] = 'Las herramientas Legacy LTI (1.1/2.0) están deprecadas. El contenido debería de ser compartido usando  LTI Advantage.';
$string['ltiversion'] = 'Versión LTI';
$string['ltiversion_help'] = 'La versión de LTI que se usará para acceder al contenido publicado.

LTI Advantage permite que se publique contenido en plataformas con registro previo sin necesidad de hacer cambios en la plantaforma cuando el nuevo contenido se publica. El contrato de seguridad es entre la plataforma y la herramienta.

Las versiones heredadas (1.1 y 2.0) requieren que se cree en el consumidor un nuevo registro en la herramienta para cada parte de nuevo contenido publicado porque cada parte de contenido publicado tiene su propio contrato de seguridad con el sitio del consumidor y debe configurarse caso a caso.';
$string['managedeployments'] = 'Gestionar despliegues';
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
$string['moodle'] = 'Moodle';
$string['nodeployments'] = 'No se encontraron despliegues de herramienta';
$string['nopublishedcontent'] = 'Aun no se han publicado recursos o actividades';
$string['noregisteredplatforms'] = 'Sin plataformas registradas';
$string['notoolsprovided'] = 'No se han proporcionado herramientas';
$string['opensslconfiginvalid'] = 'LTI 1.3 requiere que esté configurada y disponible para su servidor web un openssl.cnf válido. Por favor póngase en contacto con el administrador del sitio para configurar y habilitar openssl para este sitio.';
$string['opentool'] = 'Abrir herramienta';
$string['platformdetails'] = 'Detalles de la plataforma';
$string['platformdetailsinfo'] = 'Una vez que la herramienta se ha configurado en la plataforma, deben grabarse detalles de la plataforma aquí para terminar el registro.
<ul>
<li>En registros dinámicos, esta información se habrá configurado automáticamente y no serán necesarios más cambios.</li>
<li>En registros manuales, esta información debe copiarse manualmente desde la plataforma.</li>
</ul>';
$string['pluginname'] = 'Publicar como herramienta LTI';
$string['pluginname_desc'] = 'El complemento \'Publicar como herramienta LTI\', junto con el complemento de autenticación LTI, permite a los usuarios remotos acceder a cursos y actividades seleccionados. En otras palabras, Moodle funciona como un proveedor de herramientas LTI.';
$string['privacy:metadata:enrol_lti_users'] = 'La lista de usuarios matriculados a través de un proveedor LTI';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'El momento en el que el usuario accedió por última vez al curso';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'La última calificación que se registró del usuario';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'El momento en el que el usuario fue matriculado';
$string['privacy:metadata:enrol_lti_users:userid'] = 'El ID del usuario';
$string['provisioningmode'] = 'Modo provisionamiento';
$string['provisioningmode_help'] = 'Este ajuste determina cómo se manejan las cuentas en el primer lanzamiento. Hay varios modos soportados:
<ul>
<li>Sólo nuevas cuentas (automático). Las cuentas se crearán automáticamente para los usuarios que lanzan desde la plataforma. Este es el ajuste por defecto para lanzamientos de estudiantes.</li>
<li>Nuevas cuentas y existentes (provocado). Se ofrecerá al usuario que elija qué hacer. Puede decidir entre enlazar con una cuenta existente o que se le cree una nueva cuenta.</li>
<li>Sólo cuentas existentes (provocado). Se pedirá al usuario enlazar con una cuenta existente y no podrá acceder los recursos de la herramienta sin haberlo hecho.</li>
</ul>';
$string['provisioningmodestudentlaunch'] = 'Alumno invoca primero modo de provisionamiento';
$string['provisioningmodeteacherlaunch'] = 'Profesor invoca primero modo de provisionamiento';
$string['publishedcontent'] = 'Contenido publicado';
$string['publishedcontent_help'] = 'Un recurso o una actividad publicada puede ser usado en plataformas registradas vía el flujo de la selección de contenido (enlazado profundo). Adicionalmente, un enlace a recurso puede ser creado manualmente en la plataforma al usar la URL de invocación y las propiedades personalizadas proporcionadas.';
$string['registeredplatforms'] = 'Plataformas registradas';
$string['registeredplatformsltiversionnotice'] = 'Las plataformas enlistadas debajo están registradas para comunicación LTI 1.3. Para versiones anteriores, no se requiere registro del cliente.';
$string['registerplatform:accesstokenurl'] = 'URL de token de acceso';
$string['registerplatform:accesstokenurl_help'] = 'La URL a donde serán enviadas las solicitudes del token de acceso por la herramienta. Será proporcionada por la plataforma.';
$string['registerplatform:authrequesturl'] = 'URL de solicitud de autenticación';
$string['registerplatform:authrequesturl_help'] = 'La URL a donde serán enviadas las solicitudes de autenticación OpenID Connect por la herramienta. Será proporcionada por la plataforma.';
$string['registerplatform:clientid'] = 'ID del cliente';
$string['registerplatform:clientid_help'] = 'Una cadena de caracteres usada para identificar el registro de la herramienta en la plataforma. Será proporcionado por la plataforma.';
$string['registerplatform:duplicateregistrationerror'] = 'ID inválida del cliente. Esta ID del cliente ya está registrada para la ID de plataforma proporcionada.';
$string['registerplatform:invalidurlerror'] = 'URL inválida. ¿Ha incluido http:// o https://?';
$string['registerplatform:jwksurl'] = 'URL del conjunto de claves públicas';
$string['registerplatform:jwksurl_help'] = 'La URL del conjunto de claves públicas o JWKS, usada para obtener la clave pública. Será proporcionada por la plataforma.';
$string['registerplatform:name'] = 'Nombre de la plataforma';
$string['registerplatform:name_help'] = 'Un nombre corto que describe la plataforma. Esto puede ser cambiado en cualquier momento.';
$string['registerplatform:platformid'] = 'ID de plataforma (emisor)';
$string['registerplatform:platformid_help'] = 'La URL que identifica a la plataforma de aprendizaje del tercero. Será proporcionado por la plataforma.';
$string['registerplatformadd'] = 'Registrar una plataforma';
$string['registerplatformaddnotice'] = 'Registro de plataforma añadido';
$string['registerplatformdelete'] = 'Eliminar registro de plataforma';
$string['registerplatformdeleteconfirm'] = '¿Está seguro de querer eliminar el registro para la plataforma \'{$a}\'? Esto también quitará todas las implementaciones de herramienta almacenadas con este registro.';
$string['registerplatformdeletenotice'] = 'Registro de plataforma eliminado';
$string['registerplatformedit'] = 'Editar registro';
$string['registerplatformeditnotice'] = 'Registro de plataforma actualizado';
$string['registration'] = 'Registro de herramientas publicadas';
$string['registrationdeeplinklabel'] = 'Añadir contenido desde {$a}';
$string['registrationdynamic'] = 'Registro dinámico';
$string['registrationmanual'] = 'Registro manual';
$string['registrationresourcelinklabel'] = 'Invocar contenido desde {$a}';
$string['registrationstatus'] = 'Estado';
$string['registrationstatusactive'] = 'Activo';
$string['registrationstatuspending'] = 'Pendiente';
$string['registrationurl'] = 'URL de registro';
$string['registrationurl_help'] = 'Si se utiliza una URL de registro (también llamada URL de proxy), la herramienta se configura automáticamente.';
$string['registrationurlinfomessage'] = 'Si la plataforma soporta el Registro Dinámico, use la URL de registro inferior. Para más información sobre el registro dinámico, vea la documentación <a href="{$a}">Publicar como herramienta LTI</a>.';
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
$string['tooldetails'] = 'Detalles de la herramienta';
$string['toolsprovided'] = 'Herramientas publicadas';
$string['toolsprovided_help'] = 'Una herramienta se puede compartir con otro sitio proporcionando detalles de lanzamiento o una URL de registro.';
$string['tooltobeprovided'] = 'Herramientas para ser publicadas';
$string['toolurl'] = 'URL de la herramienta';
$string['userdefaultvalues'] = 'Valores por defecto del usuario';
$string['viewplatformdetails'] = 'Ver detalles de la plataforma';
$string['viewtoolendpoints'] = 'Ver endpoints de la herramienta';
