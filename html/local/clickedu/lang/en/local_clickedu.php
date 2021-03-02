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
$string['clickedu:syncusers'] = 'Sync users from Clickedu';
$string['clickedu:synccourses'] = 'Sync courses from Clickedu';
$string['clickedu:synccontents'] = 'Sync contents from Clickedu';

// Events
$string['eventcontentssynced'] = 'Contents synced';
$string['eventcoursessynced'] = 'Courses synced';
$string['eventinvalidresponsereceived'] = 'Invalid response received';
$string['eventuserauthenticated'] = 'User authenticated';
$string['eventuserssynced'] = 'Users synced';

// Authentication
$string['authentication'] = 'Clickedu authentication';
$string['authenticationdesc'] = 'Please enter your username and password from Clickedu';
$string['noauthorization'] = '
For security reasons, to accept the synchronization you need to access
<a href="{$a}" target="_blank">Clickedu</a> from your computer and
grant access permissions under the icon "External links" (on the top
right corner). Then, the status of the authorization will change from
"pending" to "accepted" and, the next time you log in using the Moodle
platform, your data will be loaded.';

// Errors
$string['connectionerror'] = 'Could not connect to Clickedu web service.';
$string['invalidresponse'] = 'Invalid response received from Clickedu: {$a}';
$string['errorresponse'] = 'Error received from Clickedu: {$a}';
$string['notconfigured'] = 'Clickedu plugin is not configured.';
$string['coursenotfound'] = 'Course with idnumber "{$a}" not found.';
$string['gradeitemnotfound'] = 'Grade item with id "{$a}" not found.';

// Settings
$string['configwebserviceurl'] = 'Web service URL';
$string['configwebserviceurldesc'] = 'URL of the Clickedu web service.';
$string['configsyncusers'] = 'User synchronization';
$string['configsyncusersdesc'] = 'Allow synchronization of users from Clickedu.';
$string['configsynccourses'] = 'Course synchronization';
$string['configsynccoursesdesc'] = 'Allow synchronization of courses from Clickedu.';
$string['configsynccontents'] = 'Contents synchronization';
$string['configsynccontentsdesc'] = 'Allow synchronization of contents from Clickedu.';
$string['configmoodlews'] = 'Grades web service';
$string['configmoodlewsdesc'] = 'Enable Moodle web service for syncing grades with Clickedu.';
$string['configmoodlewstoken'] = 'Grades web service and SSO token';
$string['configmoodlewstokendesc'] = 'Token used for the grades web service and SSO access.';
$string['configcoursecat'] = 'Course category';
$string['configcoursecatdesc'] = 'Category where new courses will be created.';
$string['configteacherrole'] = 'Teacher role';
$string['configteacherroledesc'] = 'Role to assign to teachers.';
$string['configstudentrole'] = 'Student role';
$string['configstudentroledesc'] = 'Role to assign to students.';
$string['configadvdebug'] = 'Debug';
$string['configadvdebugdesc'] = 'show debug information';



// Sync users
$string['extendedusernamecharsrequired'] = 'You need to enable the setting {$a}.';
$string['newusersemail'] = 'Hi {$a->firstname},

{$a->users} new users have been created at \'{$a->sitename}\'.  Their
username and temporary passwords are attached in a CSV called
{$a->attachname}.

Cheers from the \'{$a->sitename}\' administrator,
{$a->signoff}';
$string['newuserscreated'] = '{$a} new users have been created.';
$string['newusers'] = '
There are {$a} new users in Clickedu. A Moodle account will be created
for each user with the same username they have in Clickedu, and a
temporary password that they will have to change at the first
login. The list of userames and passwords will be sent to you by
email.';
$string['nonewusers'] = 'There are no new users in Clickedu.';
$string['syncingusers'] = 'Syncing users';
$string['syncusers'] = 'Sync users';

// Sync courses
$string['synccourses'] = 'Sync courses';
$string['nocourses'] = 'There are no courses in Clickedu.';
$string['courses'] = '
There are {$a} courses in Clickedu. Missing courses will be created
and the enrolments of the existing courses will be updated.';
$string['coursecreate'] = 'To be created';
$string['courseupdate'] = 'To be updated';
$string['coursenochanges'] = 'No changes';
$string['syncingcourses'] = 'Syncing courses';
$string['coursessynced'] = 'Courses synced.';

// Sync contnets
$string['synccontents'] = 'Sync contents';
$string['synccontentsnotice'] = '
The contents of this course will be updated with the contents in
Clickedu. Changes made in resources imported from Clickedu will be
lost. Activities and resources added manually to the course will be
preserved.
';
$string['nocontents'] = 'There are no contents in Clickedu for this course.';
$string['contentssynced'] = 'Contents synced.';
$string['syncingcontents'] = 'Syncing contents';


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