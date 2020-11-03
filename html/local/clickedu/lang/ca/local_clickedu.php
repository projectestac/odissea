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
$string['syncingcourses'] = 'Sincronitzant cursos';
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
