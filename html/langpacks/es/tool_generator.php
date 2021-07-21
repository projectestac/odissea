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
 * Strings for component 'tool_generator', language 'es', version '3.11'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bigfile'] = 'Fichero grande {$a}';
$string['courseexplanation'] = 'Esta herramienta crea cursos de prueba estándar que incluyen muchas secciones, actividades , y archivos.

Esto está dirigido a proporcionar una medida estandarizada para revisar la confiablilidad y desempeño de varios componentes del sistema (tales como copia de seguridad y restauración).

Esta prueba es importante porque previamente han habido muchos casos en donde, al encontrarse con casos de uso en la vida real (por ejemplo, cursos con 1000 actividades), el sistema no funciona.

Los cursos creados con esta característica pueden ocupar una gran cantidad de espacio en la base de datos y el sistema de archivos (decenas de gigabytes). Necesitará eliminar los cursos (y esperar varias pasadas de limpieza) para liberar de nuevo este espacio.

**No use esta característica en un sistema en producción**. Úselo solamente en un servidor para desarrollo. (Para prevenir uso accidental, esta característica está deshabilitada a menos que también haya seleccionado el nivel de depuración DESARROLLADOR (DEVELOPER debugging level) .';
$string['coursesize_0'] = 'XS (~10KB; creado en ~1 segundo)';
$string['coursesize_1'] = 'S (~10MB; creado en ~30 segundos)';
$string['coursesize_2'] = 'M (~100MB; creado en ~2 minutos)';
$string['coursesize_3'] = 'L (~1GB; creado en ~30 minutos)';
$string['coursesize_4'] = 'XL (~10GB; creado en ~2 horas)';
$string['coursesize_5'] = 'XXL (~20GB; creado en ~4 horas)';
$string['coursewithoutusers'] = 'El curso seleccionado no tiene usuarios';
$string['createcourse'] = 'Crear curso';
$string['creating'] = 'Creando curso';
$string['done'] = 'finalizado  ({$a}s)';
$string['downloadusersfile'] = 'Descargar fichero de usuarios';
$string['error_noforumdiscussions'] = 'El curso seleccionado no contiene foros de discusión';
$string['error_noforuminstances'] = 'El curso seleccionado no contiene instancias de foros';
$string['error_noforumreplies'] = 'El curso seleccionado no contiene respuestas al foro';
$string['error_nonexistingcourse'] = 'El curso especificado no existe';
$string['error_nopageinstances'] = 'El curso seleccionado no contiene instancias de página';
$string['error_notdebugging'] = 'No disponible en este servidor porque la depuración no está configurada a DESARROLLADOR';
$string['fullname'] = 'Curso de test: {$a->size}';
$string['maketestcourse'] = 'Hacer curso de prueba';
$string['notenoughusers'] = 'El curso seleccionado no tiene suficientes usuarios';
$string['pluginname'] = 'Generador de cursos aleatorio';
$string['progress_checkaccounts'] = 'Comprobando cuentas de usuario ({$a})';
$string['progress_coursecompleted'] = 'Curso completado ({$a}s)';
$string['progress_createaccounts'] = 'Creando cuenta de usuarios ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'Creando tareas ({$a})';
$string['progress_createbigfiles'] = 'Creando ficheros grandes ({$a})';
$string['progress_createcourse'] = 'Creando curso {$a}';
$string['progress_createforum'] = 'Creando foro ({$a} posts)';
$string['progress_createpages'] = 'Creando páginas ({$a})';
$string['progress_createsmallfiles'] = 'Creando archivos pequeños ({$a})';
$string['progress_enrol'] = 'Matriculando usuarios en el curso ({$a})';
$string['progress_sitecompleted'] = 'Sitio completado ({$a}s)';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'L';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (~10MB; 3 cursos, creados en ~30 segundos)';
$string['sitesize_1'] = 'S (~50MB; 8 cursos, creados en ~2 minutos)';
$string['sitesize_2'] = 'M (~200MB; 73 cursos, creados en ~10 minutos)';
$string['sitesize_3'] = 'L (~1\'5GB; 277 cursos, creados en ~1\'5 horas)';
$string['sitesize_4'] = 'XL (~10GB; 1065 cursos, creados en ~5 horas)';
$string['sitesize_5'] = 'XXL (~20GB; 4177 cursos, creados en ~10 horas)';
$string['size'] = 'Tamaño del curso';
$string['smallfiles'] = 'Ficheros pequeños';
