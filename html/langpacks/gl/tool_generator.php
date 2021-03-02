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
 * Strings for component 'tool_generator', language 'gl', version '3.8'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bigfile'] = 'Ficheiro grande {$a}';
$string['courseexplanation'] = 'Esta ferramenta crea cursos de proba estándar que inclúen moitas
seccións, actividades e ficheiros.

isto pretende fornecer unha medida estandarizada para comprobar a fiabilidade e rendemento
de varios compoñentes do sistema (como copia de seguridade e restauración).

Esta proba é importante porque houbo moitos casos anteriormente onde, ao atoparse
en casos de uso real (por exemplo, un curso con 1.000 actividades), o sistema non funciona.

Os cursos creados con esta función poden ocupar unha gran cantidade de base de datos e
espazo do sistema de ficheiros (decenas de gigabytes). Terá que borrar os cursos
(e agardar por varias pasadas de limpeza) para liberar este espazo de novo.

** Non empregue esta función nun sistema en vivo **. Úsea só nun servidor de desenvolvemento.
(Para evitar o uso accidental, esta función está desactivada a non ser que tamén teña seleccionado
o nivel de depuración DEVELOPER.)';
$string['coursesize_0'] = 'XS (~10KB; crear en ~1 segundo)';
$string['coursesize_1'] = 'S (~10MB; crear en ~30 segundos)';
$string['coursesize_2'] = 'M (~100MB; crear en ~2 minutos)';
$string['coursesize_3'] = 'L (~1GB; crear en ~30 minutos)';
$string['coursesize_4'] = 'XL (~10GB; crear en ~2 horas)';
$string['coursesize_5'] = 'XXL (~20GB; crear en ~4 horas)';
$string['coursewithoutusers'] = 'O curso seleccionado non ten usuarios';
$string['createcourse'] = 'Crear curso';
$string['createtestplan'] = 'Crear plan de proba';
$string['creating'] = 'Creando o curso';
$string['done'] = 'feito ({$a}s)';
$string['downloadtestplan'] = 'Descargar plan de proba';
$string['downloadusersfile'] = 'Descargar ficheiro de usuarios';
$string['error_nocourses'] = 'Non hai cursos para xerar o plan de probas';
$string['error_noforumdiscussions'] = 'O curso seleccionado non contén discusión no foro';
$string['error_noforuminstances'] = 'O curso seleccionado non contén as instancias do módulo do foro';
$string['error_noforumreplies'] = 'O curso seleccionado non contén respostas no foro';
$string['error_nonexistingcourse'] = 'O curso especificado non existe';
$string['error_nopageinstances'] = 'O curso seleccionado non contén as instancias do módulo de páxina';
$string['error_notdebugging'] = 'Non está dispoñíbel neste servidor porque a depuración non está configurada como DEVELOPER';
$string['error_nouserspassword'] = 'Debe estabelecer $CFG->tool_generator_users_password en config.php para xerar o plan de proba';
$string['fullname'] = 'Probar curso: {$a->size}';
$string['maketestcourse'] = 'Facer curso de proba';
$string['maketestplan'] = 'Facer un plan de proba JMeter';
$string['notenoughusers'] = 'O curso seleccionado non ten usuarios abondo';
$string['pluginname'] = 'Xerador de datos de desenvolvemento';
$string['privacy:metadata'] = 'O engadido de Xerador de datos de desenvolvemento non almacena ningún dato persoal.';
$string['progress_checkaccounts'] = 'Verificando contas de usuario ({$a})';
$string['progress_coursecompleted'] = 'Curso completado ({$a}s)';
$string['progress_createaccounts'] = 'Creando contas de usuarios ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'Creando tarefas ({$a})';
$string['progress_createbigfiles'] = 'Creando ficheiros grandes ({$a})';
$string['progress_createcourse'] = 'Creando o curso {$a}';
$string['progress_createforum'] = 'Creando foro ({$a} publicacións)';
$string['progress_createpages'] = 'Creando páxinas ({$a})';
$string['progress_createsmallfiles'] = 'Creando ficheiros pequenos ({$a})';
$string['progress_enrol'] = 'Matriculando usuarios no curso ({$a})';
$string['progress_sitecompleted'] = 'Sitio completado ({$a}s)';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (~10MB; 3 cursos, creados en ~30 segundos)';
$string['sitesize_1'] = 'S (~50MB; 8 cursos, creados en ~2 minutos)';
$string['sitesize_2'] = 'M (~200MB; 73 cursos, creados en ~10 minutos)';
$string['sitesize_3'] = 'L (~1,5GB; 277 cursos, creados en ~1,5 horas)';
$string['sitesize_4'] = 'XL (~10GB; 1065 cursos, creados en ~5 horas)';
$string['sitesize_5'] = 'XXL (~20GB; 4177 cursos, creados en ~10 horas)';
$string['size'] = 'Tamaño do curso';
$string['smallfiles'] = 'Ficheiros pequenos';
$string['targetcourse'] = 'Probar curso destino';
$string['testplanexplanation'] = 'Esta ferramenta crea un ficheiro de plan de proba de JMeter xunto co ficheiro de credenciais de usuario.

Este plan de proba está deseñado para funcionar xunto con {$a}, o que facilita a execución do plan de probas nun contorno específico de Moodle, recolle información sobre as pistas e compara os resultados, polo que terá que descargar e usar o test_runner.sh ou seguir as instrucións de instalación e uso.

Debe definir un contrasinal para os usuarios do curso en config.php (p. ex. $CFG->tool_generator_users_password = \'moodle\';).';
$string['testplansize_0'] = 'XS ({$a->users} usuarios, {$a->loops} bucles e {$a->rampup} período de incremento)';
$string['testplansize_1'] = 'S ({$a->users} usuarios, {$a->loops} bucles e {$a->rampup} período de incremento)';
$string['testplansize_2'] = 'M ({$a->users} usuarios, {$a->loops} bucles e {$a->rampup} período de incremento)';
$string['testplansize_3'] = 'L ({$a->users} usuarios, {$a->loops} bucles e {$a->rampup} período de incremento)';
$string['testplansize_4'] = 'XL ({$a->users} usuarios, {$a->loops} bucles e {$a->rampup} período de incremento)';
$string['testplansize_5'] = 'XXL ({$a->users} usuarios, {$a->loops} bucles e {$a->rampup} período de incremento)';
$string['updateuserspassword'] = 'Actualizar o contrasinal dos usuarios do curso';
$string['updateuserspassword_help'] = 'JMeter precisa iniciar sesión como usuario do curso, pode configurar o contrasinal dos usuarios usando $CFG->tool_generator_users_password en config.php; esta configuración actualiza o contrasinal dos usuarios do curso segundo $CFG->tool_generator_users_password. Pode ser útil se usa un curso non xerado por tool_generator ou $CFG->tool_generator_users_password ou se non foi estabelecido cando creou os cursos de proba.';
