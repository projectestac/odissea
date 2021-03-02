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
$string['clickedu:syncusers'] = 'Sincronitzar usuaris de Clickedu';
$string['clickedu:synccourses'] = 'Sincronitzar cursos de Clickedu';
$string['clickedu:synccontents'] = 'Sincronitzar continguts de Clickedu';

// Events
$string['eventcontentssynced'] = 'Continguts sincronitzats';
$string['eventcoursessynced'] = 'Cursos sincranitzats';
$string['eventinvalidresponsereceived'] = 'Resposta no vàlida rebuda';
$string['eventuserauthenticated'] = 'Usuari autenticat';
$string['eventuserssynced'] = 'Usuaris sincronitzats';

// Authentication
$string['authentication'] = 'Autenticació amb Clickedu';
$string['authenticationdesc'] = 'Introduïu el vostre nom d\'usuari i contrasenya de Clickedu';
$string['noauthorization'] = '
Per raons de seguretat, perquè la sincronització sigui acceptada ha
d\'accedir a <a href="{$a}" target="_blank">Clickedu</a> des del seu
ordinador i concedir-li permisos d\'accés a través de la icona
"Connexions externes" (menú superior dret). Un cop fet això, l\'estat
de l\'autorització passarà de "pendent" a "acceptat" i quan accedeixi
de nou a la plataforma Moodle les seves dades s\'hi carregaran.';

// Errors
$string['connectionerror'] = 'No s\'ha pogut connectar amb el servei web de Clickedu.';
$string['invalidresponse'] = 'S\'ha rebut una resposta no vàlida de Clickedu: {$a}';
$string['errorresponse'] = ' S\'ha rrebut un error de Clickedu: {$a}';
$string['notconfigured'] = 'El connector Clickedu no està configurat.';
$string['coursenotfound'] = 'No s\'ha trobat el curs amb idnumber "{$a}".';
$string['gradeitemnotfound'] = 'No s\'ha trobat l\'element de qualificació amb id "{$a}".';

// Settings
$string['configwebserviceurl'] = 'URL del servei web';
$string['configwebserviceurldesc'] = 'URL del servei web de Clickedu.';
$string['configsyncusers'] = 'Sincronització d\'usuaris';
$string['configsyncusersdesc'] = 'Permet la sincronització d\'usuaris de Clickedu.';
$string['configsynccourses'] = 'Sincronització de cursos';
$string['configsynccoursesdesc'] = 'Permet la sincronització de cursos de Clickedu.';
$string['configsynccontents'] = 'Sincronització de continguts';
$string['configsynccontentsdesc'] = 'Permet la sincronització de continguts de Clickedu.';
$string['configmoodlews'] = 'Servei web qualificacions';
$string['configmoodlewsdesc'] = 'Habilita el servei web de Moodle per a sicnronitzar les qualificacions amb Clickedu.';
$string['configmoodlewstoken'] = 'Token servei web qualificacions i SSO';
$string['configmoodlewstokendesc'] = 'Token utilitzat pel servei web de qualificacions i l\'accés per SSO.';
$string['configcoursecat'] = 'Categoria de curs';
$string['configcoursecatdesc'] = 'Categoria on es crearan els cursos nous.';
$string['configteacherrole'] = 'Rol professor';
$string['configteacherroledesc'] = 'Rol que s\'assignarà als professors.';
$string['configstudentrole'] = 'Rol estudiant';
$string['configstudentroledesc'] = 'Rol que s\'assignarà als estudiants.';
$string['configadvdebug'] = 'Depuració';
$string['configadvdebugdesc'] = 'mostrar informació de depuració';

// Sync users
$string['extendedusernamecharsrequired'] = 'Heu d\'habilitar el paràmetre {$a}.';
$string['newusersemail'] = 'Hola {$a->firstname},

S\'han creat {$a->users} usuaris nous a \'{$a->sitename}\'.  Els seus
noms d\'usuari i contrasenyes estan al fitxer CSV adjunt anomenat
{$a->attachname}.

Salutacions de l\'administrador de \'{$a->sitename}\'.
{$a->signoff}';
$string['newuserscreated'] = 'S\'han creat {$a} usuaris nous.';
$string['newusers'] = '
Hi ha {$a} usuaris nous a Clickedu. Es crearà un compte de Moodle per
cada un d\'ells, amb el mateix nom d\'usuari que tenen a Clickedu, i
una contrasenya temporal que hauran de canviar en entrar per primera
vegada. S\'enviarà la llista de noms d\'usuari i contrasenyes a la
vostra adreça de correu electrònic.';
$string['nonewusers'] = 'No hi ha usuaris nous a Clickedu.';
$string['syncingusers'] = 'Sincronitzant usuaris';
$string['syncusers'] = 'Sincronitza usuaris';

// Sync courses
$string['synccourses'] = 'Sincronitza cursos';
$string['nocourses'] = 'No hi ha cursos a Clickedu.';
$string['courses'] = '
Hi ha {$a} cursos a Clickedu. Es crearan els cursos que falten i
s\'actualitzaran les inscripcions dels cursos existents.';
$string['coursecreate'] = 'Es crearà';
$string['courseupdate'] = 'S\'actualitzarà';
$string['coursenochanges'] = 'Sense canvis';
$string['syncingcourses'] = 'Sincronitzant cursos';//debug
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
$string['coursessynced'] = 'S\'han sincronitzat els cursos.';

// Sync contnets
$string['synccontents'] = 'Sincronitza continguts';
$string['synccontentsnotice'] = '
S\'actualitzaran els continguts d\'aquest curs amb els continguts de
Clickedu. Es perdran les modificacions fetes als recursos importats
des de Clickedu. Es conservaran les activitats i recursos creats
manualment.
';
$string['nocontents'] = 'No hi ha continguts a Clickedu per aquest curs.';
$string['contentssynced'] = 'S\'han sincronitzat els continguts.';
$string['syncingcontents'] = 'Sincronitzant els continguts';

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