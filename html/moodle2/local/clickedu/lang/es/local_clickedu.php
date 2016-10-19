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
