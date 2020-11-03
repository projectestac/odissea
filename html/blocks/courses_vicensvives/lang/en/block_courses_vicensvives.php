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

$string['pluginname'] = 'Courses Vicens Vives';

// Settings.
$string['apiurl'] = 'URL API';
$string['sharekey'] = 'Clave compartida';
$string['sharepass'] = 'Secreto compartido';

$string['configapiurl'] = 'URL del web service de Vicens Vives';
$string['configsharekey'] = 'Clave  compartida con el Web Service de Vicens Vives para obtener la información de los libros.';
$string['configsharepass'] = 'Secreto compartido con el Web Service de Vicens Vives para obtener la información de los libros.';

$string['connectok'] = 'La conexión con Vicens Vives se ha establecido correctamente';
$string['connectfail'] = 'La conexión con Vicens Vives ha fallado, comprueba las credenciales';

$string['maxcourses'] = 'Número de cursos';
$string['defaultcategory'] = 'Categoría para cursos';

$string['configdefaultcategory'] = 'Categoría por defecto para los cursos de libros de Vicens Vives.';
$string['configmaxcourses'] = 'Número de cursos que se muestra en el bloque.';

$string['configmoodlews'] = 'Web service de Moodle';
$string['configmoodlewsdesc'] = 'Se configurará el web service de Moodle y se sincronizará el token con Vicens Vives.';

// Errors.
$string['wsnotconfigured'] = 'El Web Service de Vicens Vives no está configurado.';
$string['wsauthfailed'] = 'Ha fallado la autentificación con el Web Service de Vicens Vives.';
$string['wsunknownerror'] = 'Se ha producido un error inesperado en conectar con el Web Service de Vicens Vives.';
$string['wssitemismatch'] = 'Las credenciales (clave y secreto compartido) ya se están utilitzando en otra instalación de Moodle.';
$string['booknotfetched'] = 'No se ha podido obtener el libro.';
$string['moodlewsnotinstalled'] = 'El plugin del web service de calificaciones no está instalado.';
$string['moodlewsnotenabled'] = 'El web service de calificaciones no está activado, se configurará en guardar los cambios.';

// Contenido del bloque.
$string['show_more'] = 'Ver más...';
$string['show_courses'] = 'Ver cursos';

// Páginas del bloque.
$string['courses'] = 'Cursos';
$string['books'] = 'Libros';
$string['addcourse'] = 'Crear un nuevo curso';
$string['nohaycursos'] = 'No hay cursos que mostrar';
$string['searchresult'] = '{$a->found} de {$a->total} libros';
$string['searchempty'] = '{$a} libros';
$string['standardformat'] = 'Estándar de Moodle (por temas)';

// Tabla libros.
$string['fullname'] = 'Nombre';
$string['subject'] = 'Materia';
$string['level'] = 'Nivel';
$string['isbn'] = 'ISBN';
$string['actions'] = 'Acciones';
$string['nobooksfound'] = 'No se han encontrado libros';

// Crear el curs.
$string['create'] = 'Crear';
$string['format'] = 'Formato';
$string['cancel'] = 'Cancelar';
$string['createwarning'] = 'Este proceso puede tardar unos minutos.';
$string['creatingcourse'] = 'Creando curso';
$string['gotocourse'] = 'Ir al curso';
$string['editingteachernotexist'] = "No se ha podido matricular al usuario: El rol 'editingteacher' no existe.";
$string['manualnotenable'] = "No se ha podido matricular al usuario: La matriculación manual no está activada.";
$string['nofetchbook'] = 'No se ha podido obtener el libro';
$string['nocreatecourse'] = 'Nos se ha podido crear el curso';
$string['nocreatestructure'] = 'No se ha podido crear la estructura del curso';

// Actualizar curso.
$string['updateingcourse'] = 'Actualizando curso';
$string['updatedunits'] = 'Unidades añadidas o actualizadas';
$string['noupdatedunits'] = 'No hay actualizaciones para este libro.';

// Permisos.
$string['courses_vicensvives:addinstance'] = 'Crear instancia del bloque.';
$string['courses_vicensvives:myaddinstance'] = 'Crear instancia del bloque en my.';

// Event.
$string['eventwebservicecalled'] = 'Web service llamado';

// Privacy.
$string['privacy:metadata'] = 'The Courses Vicens Vives block only shows data stored in other locations.';

// Generate content.
$string['generatingcontent'] = 'Generating content:';
