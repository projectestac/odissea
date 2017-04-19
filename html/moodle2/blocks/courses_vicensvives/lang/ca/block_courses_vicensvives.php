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

$string['pluginname'] = 'Cursos Vicens Vives';

// Settings.
$string['apiurl'] = 'URL API';
$string['sharekey'] = 'Clau compartida';
$string['sharepass'] = 'Secret compartit';

$string['configapiurl'] = 'URL del servei web de Vicens Vives';
$string['configsharekey'] = 'Clau compartida amb el servei web de Vicens Vives per obtenir la informació dels llibres.';
$string['configsharepass'] = 'Secret compartit amb el servei web de Vicens Vives per obternir la informació dels llibres.';

$string['connectok'] = "La connexió amb Vicens Vives s'hi ha establert correctament";
$string['connectfail'] = "La connexió amb Vicens Vives ha fallat; comprova'n les credencials";

$string['maxcourses'] = 'Nombre de cursos';
$string['defaultcategory'] = 'Categoria per a cursos';

$string['configdefaultcategory'] = 'Categoria per defecte per als cursos de llibres de Vicens Vives.';
$string['configmaxcourses'] = 'Nombre de cursos que es mostra en el bloc.';

$string['configmoodlews'] = 'Servei web de Moodle';
$string['configmoodlewsdesc'] = 'Es configurarà el servei web de Moodle i se sincronitzarà el token amb Vicens Vives.';

// Errors
$string['wsnotconfigured'] = 'El servei web de Vicens Vives no està configurat.';
$string['wsauthfailed'] = "Ha fallat l'autentificació amb el servei web de Vicens Vives. ";
$string['wsunknownerror'] = 'Hi ha hagut un error inesperat en connectar amb el servei web de Vicens Vives.';
$string['wssitemismatch'] = "Les credencials (clau i secret compartit) ja s'estan utilitzant en una altra instal·lació de Moodle.";
$string['booknotfetched'] = "No s'hi ha pogut obtenir el llibre.";
$string['moodlewsnotinstalled'] = "El plugin del servei web de qualificacions no està instal·lat.";
$string['moodlewsnotenabled'] = "El servei web de qualificacions no està activat; es configurarà quan es desin els canvis.";

// Contenido del bloque.
$string['show_more'] = 'Veure més...';
$string['show_courses'] = 'Veure cursos';

// Páginas del bloque.
$string['courses'] = 'Cursos';
$string['books'] = 'Llibres';
$string['addcourse'] = 'Crear un curs nou';
$string['nohaycursos'] = 'No hi ha cap curs per mostrar';
$string['searchresult'] = '{$a->found} de {$a->total} llibres';
$string['searchempty'] = '{$a} llibres';
$string['standardformat'] = 'Estàndard de Moodle (per unitats)';

// Tabla libros
$string['fullname'] = 'Nom';
$string['subject'] = 'Assignatura';
$string['level'] = 'Nivell';
$string['isbn'] = 'ISBN';
$string['actions'] = 'Accions';
$string['nobooksfound'] = "No s'hi han trobat llibres";

// Crear el curs.
$string['create'] = 'Crear';
$string['format'] = 'Format';
$string['cancel'] = 'Cancel·lar';
$string['createwarning'] = 'Aquest procés pot trigar uns quants minuts.';
$string['creatingcourse'] = 'Creant curs';
$string['gotocourse'] = 'Anar al curs';
$string['editingteachernotexist'] = "L'usuari no s'hi ha pogut matricular: El rol 'editingteacher' no existeix.";
$string['manualnotenable'] = "L'usuari no s'hi ha pogut matricular: La matrícula manual no està activada. ";
$string['nofetchbook'] = "No s'hi ha pogut obtenir el llibre";
$string['nocreatecourse'] = "No s'hi ha pogut crear el curs";
$string['nocreatestructure'] = "No s'hi ha pogut crear l'estructura del curs";

// Actualizar curso
$string['updateingcourse'] = 'Actualitzant curs';
$string['updatedunits'] = 'Unitats afegides o actualitzades';
$string['noupdatedunits'] = 'No hi ha actualitzacions per a aquest llibre.';

// Permisos
$string['courses_vicensvives:addinstance'] = 'Crear instància del bloc.';
$string['courses_vicensvives:myaddinstance'] = 'Crear instància del bloc en my.';

// Event
$string['eventwebservicecalled'] = 'Servei web cridat';
