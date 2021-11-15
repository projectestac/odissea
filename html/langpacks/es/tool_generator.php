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
$string['createtestplan'] = 'Crear plan de prueba';
$string['creating'] = 'Creando curso';
$string['done'] = 'finalizado  ({$a}s)';
$string['downloadtestplan'] = 'Descargar plan de prueba';
$string['downloadusersfile'] = 'Descargar fichero de usuarios';
$string['error_nocourses'] = 'No hay cursos para generar el plan de prueba';
$string['error_noforumdiscussions'] = 'El curso seleccionado no contiene foros de discusión';
$string['error_noforuminstances'] = 'El curso seleccionado no contiene instancias de foros';
$string['error_noforumreplies'] = 'El curso seleccionado no contiene respuestas al foro';
$string['error_nonexistingcourse'] = 'El curso especificado no existe';
$string['error_nopageinstances'] = 'El curso seleccionado no contiene instancias de página';
$string['error_notdebugging'] = 'No disponible en este servidor porque la depuración no está configurada a DESARROLLADOR';
$string['error_nouserspassword'] = 'Tiene que establecer $CFG->tool_generator_users_password en el archivo config.php para generar el plan de prueba';
$string['fullname'] = 'Curso de test: {$a->size}';
$string['maketestcourse'] = 'Hacer curso de prueba';
$string['maketestplan'] = 'Hacer un plan de prueba de JMeter';
$string['notenoughusers'] = 'El curso seleccionado no tiene suficientes usuarios';
$string['pluginname'] = 'Generador de datos de desarrollo';
$string['privacy:metadata'] = 'El complemento de generador de datos de desarrollo no almacena ningún dato personal.';
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
$string['targetcourse'] = 'Probar curso objetivo';
$string['testplanexplanation'] = 'Esta herramienta crea un archivo de plan de prueba de JMeter junto con el archivo de credenciales de usuario.

Este plan de prueba está diseñado para funcionar junto con {$a}, lo que facilita la ejecución del plan de prueba en un entorno Moodle específico, recopila información sobre las ejecuciones y compara los resultados, por lo que deberá descargarlo y utilizar su script test_runner.sh o seguir las instrucciones de instalación y uso.

Debe establecer una contraseña para los usuarios del curso en el archivo config.php (por ejemplo, $CFG->tool_generator_users_password = \'moodle\';). No existe un valor predeterminado para esta contraseña que evite usos no deseados de la herramienta. Deberá utilizar la opción de actualización de contraseñas en caso de que los usuarios de su curso tengan otras contraseñas o hayan sido generadas por tool_generator pero sin establecer un valor $CFG->tool_generator_users_password.

Es parte de tool_generator por lo que funciona bien con los cursos generados por los generadores de cursos y de sitios,
también se puede utilizar con cualquier curso que contenga, al menos:

* Suficientes usuarios inscritos (depende del tamaño del plan de prueba que seleccione) con el restablecimiento de contraseña a \'moodle\'
* Una instancia del módulo de página
* Una instancia del módulo de foro con al menos una discusión y una respuesta

Es posible que desee considerar la capacidad de sus servidores al ejecutar grandes planes de prueba ya que la cantidad de carga generada por JMeter
puede ser especialmente grande. El período de aceleración se ha ajustado de acuerdo con el número de subprocesos (usuarios) para reducir este tipo
de problemas, pero la carga sigue siendo enorme.

**No ejecute el plan de prueba en un sistema activo**. Esta función solo crea los archivos para alimentar JMeter, por lo que no es peligrosa por
sí misma, pero **NUNCA** debe ejecutar este plan de prueba en un sitio de producción.';
$string['testplansize_0'] = 'XS ({$a->users} usuarios, {$a->loops} bucles y {$a->rampup} periodo de despliegue)';
$string['testplansize_1'] = 'S ({$a->users} usuarios, {$a->loops} bucles y {$a->rampup} periodo de despliegue)';
$string['testplansize_2'] = 'M ({$a->users} usuarios, {$a->loops} bucles y {$a->rampup} periodo de despliegue)';
$string['testplansize_3'] = 'L ({$a->users} usuarios, {$a->loops} bucles y {$a->rampup} periodo de despliegue)';
$string['testplansize_4'] = 'XL ({$a->users} usuarios, {$a->loops} bucles y {$a->rampup} periodo de despliegue)';
$string['testplansize_5'] = 'XXL ({$a->users} usuarios, {$a->loops} bucles y {$a->rampup} periodo de despliegue)';
$string['updateuserspassword'] = 'Actualizar la contraseña de los usuarios del curso';
$string['updateuserspassword_help'] = 'JMeter necesita iniciar sesión como los usuarios del curso, puede establecer la contraseña de los usuarios usando $CFG->tool_generator_users_password en el archivo config.php; esta configuración actualiza la contraseña del usuario del curso de acuerdo con $CFG->tool_generator_users_password. Puede ser útil en caso de que esté utilizando un curso no generado por tool_generator o si no se configuró $CFG->tool_generator_users_password cuando creó los cursos de prueba.';
