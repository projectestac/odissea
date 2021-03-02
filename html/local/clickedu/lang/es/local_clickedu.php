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

$string['pluginname'] = 'Clickedu';

// Capabilities
$string['clickedu:syncusers'] = 'Sincronizar usuarios de Clickedu';
$string['clickedu:synccourses'] = 'Sincronizar cursos de Clickedu';
$string['clickedu:synccontents'] = 'Sincronizar contenidos de Clickedu';

// Events
$string['eventcontentssynced'] = 'Contenidos sincronizados';
$string['eventcoursessynced'] = 'Cursos sincronizados';
$string['eventinvalidresponsereceived'] = 'Respuesta no vàlida recibida';
$string['eventuserauthenticated'] = 'Usuario autenticado';
$string['eventuserssynced'] = 'Usuarios sincronizados';

// Authentication
$string['authentication'] = 'Autenticación con Clickedu';
$string['authenticationdesc'] = 'Introduzca su nombre de usuario y contraseña de Clickedu';
$string['noauthorization'] = '
Por motivos de seguridad, para que la sincronización sea aceptada
tiene que acceder a <a href="{$a}" target="_blank">Clickedu</a> desde
su ordenador y concederle permisos de acceso a través del icono
"Conexiones externas" (menú superior derecho). Entonces, el estado de
la autorización pasará de "pendiente" a "aceptada" y, cuando entre de
nuevo a la plataforma Moodle, sus datos se cargarán.';

// Errors
$string['connectionerror'] = 'No se ha podido conectar con el servicio web de Clickedu.';
$string['invalidresponse'] = 'Se ha recibido una respuesta no válida de Clickedu: {$a}';
$string['errorresponse'] = ' Se ha recibido un error de Clickedu: {$a}';
$string['notconfigured'] = 'La extensión Clickedu no está configurada.';
$string['coursenotfound'] = 'Curso con idnumber "{$a}" no encontrado.';
$string['gradeitemnotfound'] = 'Ítem de calificación con id "{$a}" no ecnontrado.';

// Settings
$string['configwebserviceurl'] = 'URL del servicio web';
$string['configwebserviceurldesc'] = 'URL del servicio web de Clickedu.';
$string['configsyncusers'] = 'Sincronización de usuarios';
$string['configsyncusersdesc'] = 'Permitir la sincronización de usuarios de Clickedu.';
$string['configsynccourses'] = 'Sincronización de cursos';
$string['configsynccoursesdesc'] = 'Permitir la sincronización de cursos de Clickedu.';
$string['configsynccontents'] = 'Sincronización de contenidos';
$string['configsynccontentsdesc'] = 'Permitir la sincronización de contenidos de Clickedu.';
$string['configmoodlews'] = 'Servicio web calificaciones';
$string['configmoodlewsdesc'] = 'Activar el servicio web de Moodle para sincronizar las calificaciones con Clickedu.';
$string['configmoodlewstoken'] = 'Token servicio web calificaciones y SSO';
$string['configmoodlewstokendesc'] = 'Token usado por el servicio web de calificaciones y el acceso por SSO.';
$string['configcoursecat'] = 'Categoría de curso';
$string['configcoursecatdesc'] = 'Categoría donde se crearán los cursos nuevos.';
$string['configteacherrole'] = 'Rol profesor';
$string['configteacherroledesc'] = 'Rol que se asignará a los profesores.';
$string['configstudentrole'] = 'Rol estudiante';
$string['configstudentroledesc'] = 'Rol que se asignará a los estudiantes.';
$string['configadvdebug'] = 'Depuración';
$string['configadvdebugdesc'] = 'mostrar información de depuración';

// Sync users
$string['extendedusernamecharsrequired'] = 'Es necesario activar el parámetro {$a}.';
$string['newusersemail'] = 'Hola {$a->firstname},

Se han creado {$a->users} usuarios nuevos en \'{$a->sitename}\'.  Sus nombres de usuario
y contraseña están en fichero CSV adjunto llamado {$a->attachname}.

Salutaciones del administrador de \'{$a->sitename}\'.
{$a->signoff}';
$string['newuserscreated'] = 'Se han creado {$a} usuarios nuevos.';
$string['newusers'] = '
Hay {$a} usuarios nuevos en Clickedu. Se creará una cuenta de Moodle
par cada uno, con el mismo nombre de usaurio que tienen en Clickedu, y
una contraseña temporal que tendrán que cambiar en entrar por primera
vez. Se enviará la lista de nombres de usuario y contraseñas a su
dirección de correo electrónico.';
$string['nonewusers'] = 'No hay usuarios nuevos en Clickedu.';
$string['syncingusers'] = 'Sincronizando usuarios';
$string['syncusers'] = 'Sincronizar usuarios';

// Sync courses
$string['synccourses'] = 'Sincronizar cursos';
$string['nocourses'] = 'No hay cursos en Clickedu.';
$string['courses'] = '
Hay {$a} cursos en Clickedu. Se crearán los cursos que faltan y se
actualitzarán las matriculaciones de los cursos existentes.';
$string['coursecreate'] = 'Se creará';
$string['courseupdate'] = 'Se actualitzará';
$string['coursenochanges'] = 'Sin cambios';
$string['syncingcourses'] = 'Sincronizando cursos';
$string['coursessynced'] = 'Se han sincronizado los cursos.';

// Sync contnets
$string['synccontents'] = 'Sincronizar contenidos';
$string['synccontentsnotice'] = '
Los contenidos de este curso serán actualizados con los contenidos de
Clickedu. Se perderán los cambios realizados en los recursos
importados de Clickedu. Se conservarán las actividades y recursos
creados manualmente.
';
$string['nocontents'] = 'No hay contenidos en Clickedu para este curso.';
$string['contentssynced'] = 'Se han sincronizado los contenidos.';
$string['syncingcontents'] = 'Sincronizando contenidos';

// Privacy
$string['privacy:metadata'] = 'The local Clickedu only shows data stored in other locations.';

//debug
$string['debug:timelimit'] = 'Aumentando limite de tiempo de ejecución';
$string['debug:syncoursesinit'] = 'Sincronizando {$a} cursos';
$string['debug:enrolledteachers'] = '{$a} profesores matriculados';
$string['debug:unenrolledteachersx'] = '{$a} profesores desmatriculados';
$string['debug:enrolledstudents'] = '{$a} estudiantes matriculados';
$string['debug:unenrolledstudents'] ='{$a} estudiantes desmatriculados';
$string['debug:setcat'] = 'Categoria por defecto id {$a}';
$string['debug:initcourseprocessing'] = 'Iniciando procesamiento de {$a} cursos';
$string['debug:coursenoid'] = 'Curso para sincronizar que debe ser creado';
$string['debug:coursenoidcreated'] = 'Curso para sincronizar creado con id {$a}';
$string['debug:checkenrolinstance'] = 'Comprobando si curso tiene instancia de matriculación en modo manual habilitadas';
$string['debug:checkenrolinstanceok'] = 'El curso id {$a} tiene matriculación manual habilitada';
$string['debug:checkenrolinstanceko'] = 'El curso id {$a} no tiene matriculación manual habilitada';
$string['debug:enroltasks'] = 'Iniciando tareas de matriculación y desmatriculación';
$string['debug:unenrolteacher'] = 'Desmatricular profesor {$a->userid} de instancia de matriculación {$a->id}';
$string['debug:unenrolstudent'] = 'Desmatricular alumnno {$a->userid} de instancia de matriculación {$a->id}';
$string['debug:enrolteacher'] = 'Matricular profesor {$a->userid} en instancia de matriculación {$a->id}';
$string['debug:enrolstudent'] = 'Matricular alumnno {$a->userid} en instancia de matriculación {$a->id}';
$string['debug:triggersyncevent'] = 'Disparando evento local_clickedu_event_courses_synced para {$a} cursos';
$string['debug:coursesyncended'] = 'Sincronización de cursos completada';
$string['debug:syncusersbegin'] = 'Inicio de sincronización de usuarios';
$string['debug:syncusersprocessing'] = 'Procesando {$a} usuarios';
$string['debug:syncuserscreate'] = 'Creando {$a} usuarios';
$string['debug:syncuserscreateuser'] = 'Creado usuario id {$a}';
$string['debug:syncuserssendemail'] = 'Enviando password a usuario id {$a}';
$string['debug:syncusersemailsupport'] = 'Envio email pwd: usuario de soporte id {$a}';
$string['debug:syncusersemailsending'] = 'Enviando email pwd a usuario id {$a}';
$string['debug:syncusersemailsent'] = 'Enviado email pwd a usuario id {$a}';
$string['debug:syncuserscsv'] = 'Generando CSV de usuarios creados';
$string['debug:syncuserscsvexport'] = 'Preparando export de usuarios a CSV';
$string['debug:syncuserscsvexportdata'] = 'Preparando datos de usuarios para CSV';
$string['debug:syncuserscsvexportdatarow'] = 'Cargando fila csv del usuario id {$a->id} - {$a->username}';
$string['debug:syncuserscsvemail'] = 'Generando fichero csv {$a}';
$string['debug:syncuserscsvemailsending'] = 'Enviando fichero CSV a usuario id {$a->userid} - {$a->username}';
$string['debug:syncuserscsvemailsent'] = 'Enviado fichero CSV a usuario id {$a->userid} - {$a->username}';
$string['debug:syncuserstrigger'] = 'Disparando evento local_clickedu_event_users_synced para {$a} usuarios';
$string['debug:synccontentget'] = 'Obteniendo los contenidos del curso id {$a}';
$string['debug:synccontentgetnull'] = 'El curso id {$a} es SITE y no tiene contenidos';
$string['debug:synccontentwsconf'] = 'Obteniendo config del servicio web';
$string['debug:synccontentwscall'] = 'Llamada al webservice para curso cgap {$a}';
$string['debug:synccontentwsparam'] = 'Parametros de llamada webservice auth_token:{$a->token} # auth_secret:{$a->secret} # id:{$a->id} # query:{$a->query}# cons_key:{$a->cons_key} # cons_secret:{$a->cons_secret}';
$string['debug:synccontentwsxtparam'] = 'Parametros de llamada webservice extra {$a}';
$string['debug:synccontentwsurl'] = 'Parametros de webservice - url: {$a}';
$string['debug:synccontentwscurl'] = 'Llamada al webservice - curl POSTFIELDS {$a}';
$string['debug:synccontentwscurlurl'] = 'Llamada al webservice - curl URL {$a}';
$string['debug:synccontentwscurlstatus'] = 'Llamada al webservice - curl response status {$a}';
$string['debug:synccontentwsjsondecode'] =  'Llamada al webservice - json decode response';
$string['debug:synccontentwsresult'] = 'Llamada al webservice - result {$a}';
$string['debug:synccontentnocontinguts'] = 'No se encuentran contenidos para curso idnumber {$a}';
$string['debug:synccontentsections'] = 'Alojando contenidos de curso idnumber {$a} en secciones';
$string['debug:synccontentplacemain'] = 'Alojando contenido id {$a->contid} - {$a->nom}';
$string['debug:synccontentplacemainsection'] = 'Sección de contenido id {$a->contid} - {$a->nom}';
$string['debug:synccontentplacemainmod'] = 'Módulo de contenido id {$a->contid} - {$a->nom}';
$string['debug:synccontentplacemaintext'] = 'Textos de contenido id {$a->contid} - {$a->nom}';
$string['debug:synccontentplacemainvincles'] = 'Vinculos de contenido id {$a->contid} - {$a->nom}';
$string['debug:synccontentplacemainarxius'] = 'Arxius de contenido id {$a->contid} - {$a->nom}';
$string['debug:synccontentplacemainsessions'] = '{$a->sessions} sesiones de contenido id {$a->contid} - {$a->nom}';
$string['debug:synccontentbegin'] = 'Sincronizando contenidos de curso {$a}';
$string['debug:synccontentsecmod'] = 'Total de contenidos a sincronizar {$a}';
$string['debug:synccontentupdcourse'] = 'Actualizando curso - num secciones {$a}';
$string['debug:synccontentupdcourseres'] = 'Actualizando {$a} modulos de la seccion';
$string['debug:synccontentupdcmod'] = 'Sincronizando seccion {$a->section} - cmod idnumber {$a->cmidnumber} ';
$string['debug:synccontentmodinit'] = 'Sincronizando modulo {$a}';
$string['debug:synccontentmodupd'] = 'Actualizando modulo ya existente {$a}';
$string['debug:synccontentmodadd'] = 'Añadiendo modulo {$a}';
$string['debug:synccontentmodmove'] = 'Moviendo modulo a seccion';
$string['debug:synccontentremoveclkedu'] = 'Eliminación de recursos que ya no existen en Clickedu';
$string['debug:synccontentremovemod'] = 'Eliminando recurso idnumber {$a}';
$string['debug:synccontentrebuild'] = 'Reconstruyendo cache del curso';
$string['debug:synccontentevent'] = 'Disparando evento local_clickedu_event_contents_synced::create_from_course';

$string['debug:clickedudebug'] = 'Depuración Clickedu';

$string['debug:loginbegin'] = 'Inicio de login de usuario';
$string['debug:loginended'] = 'Fin de login de usuario';
$string['debug:tokenempty'] = 'El token está vacio revisa la configuración';
$string['debug:invalidhash'] = 'Falló el cálculo del hash requesthash: "{$a->requesthash}" !=  hash: "{$a->hash}"';
$string['debug:loginsignaturedata'] = 'Datos cálculo data: "{$a->data}" y  key: "{$a->key}"';
$string['debug:loginrequesthasexpired'] = 'Ha caducado el tiempo de la petición: "{$a->time}" y  debia ser menor: "{$a->timeTo}"';
$string['debug:userinvalid'] = 'El usuario es inválido para useridnumber {$a->$useridnumber}, revisa el siguiente objeto"';