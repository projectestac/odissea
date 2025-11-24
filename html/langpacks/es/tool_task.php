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
 * Strings for component 'tool_task', language 'es', version '4.5'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'Ad hoc';
$string['adhocempty'] = 'La cola de tareas Ad hoc está vacía';
$string['adhocqueueold'] = 'La tarea más antigua es {$a->age}, que es más de {$a->max}';
$string['adhocqueuesize'] = 'La cola de tareas Ad hoc tiene {$a} tareas';
$string['adhoctaskid'] = 'ID de tarea Ad hoc: {$a}';
$string['adhoctaskrun'] = 'Ejecución de tareas ad hoc comenzada';
$string['adhoctasks'] = 'Tareas Ad hoc';
$string['adhoctasksdue'] = 'Tareas ad hoc caducadas';
$string['adhoctasksfailed'] = 'Tareas ad hoc que fallaron';
$string['adhoctasksfuture'] = 'Tareas ad hoc futuras';
$string['adhoctasksrunning'] = 'Tareas ad hoc ejecutándose';
$string['asap'] = '<abbr title="Lo antes posible">ASAP</abbr>';
$string['backtoadhoctasks'] = 'Volver a tareas ad hoc';
$string['backtoscheduledtasks'] = 'Regresar a trabajos agendados';
$string['blocking'] = 'Bloqueando';
$string['cannotfindthepathtothecli'] = 'No se puede encontrar la ruta hacia el ejecutable de PHP CLI, por lo que se abortó la ejecución del trabajo. Configure la "Ruta hacia PHP CLI" en "Administración del sitio / Servidor / Rutas del sistema"';
$string['checkadhocqueue'] = 'Cola de tareas Ad hoc';
$string['checkcronrunning'] = 'Cron en ejecución';
$string['checklongrunningtaskcount'] = 'Tareas de larga ejecución: {$a}';
$string['checklongrunningtasks'] = 'Tareas de larga ejecución';
$string['checkmaxfaildelay'] = 'Retardo máximo en fallos de tareas';
$string['classname'] = 'Nombre de clase';
$string['clearfaildelay_confirm'] = '¿Está seguro de querer borrar el retraso por fallo para el quehacer \'{$a}\'? Después de borrar el retraso, el quehacer correrá de acuerdo a su propia agenda.';
$string['component'] = 'Componente';
$string['corecomponent'] = 'Núcleo';
$string['crondisabled'] = 'El cron está deshabilitado. No se iniciarán nuevas tareas. El sistema no funcionará correctamente hasta que se vuelva a activar.';
$string['cronok'] = 'El cron se está ejecutando frecuentemente';
$string['default'] = 'Por defecto';
$string['defaultx'] = 'Por defecto: {$a}';
$string['disabled'] = 'Deshabilitado';
$string['disabled_help'] = 'Los trabajos agendados deshabilitados no son ejecutados desde cron; sin embargo, todavía podrían ejecutarse manualmente mediante la herramienta CLI de Interfaz por Línea de Comando.';
$string['edittaskschedule'] = 'Editar tarea programada: {$a}';
$string['enablerunnow'] = 'Permitir \'Ejecutar ahora\' (Run now) para tareas programadas';
$string['enablerunnow_desc'] = 'Permitirle a administradores el correr un solo trabajo agendado inmediatamente, en lugar de esperar para que corra como está agendado. El trabajo corre en el servidor web, por lo que algunos sitios podrían desear deshabilitar esta característica para evitar problemas potenciales de desempeño.';
$string['faildelay'] = 'Retardo del fallo';
$string['failed'] = 'Fallo';
$string['fromcomponent'] = 'Del componente: {$a}';
$string['hostname'] = 'Nombre del host';
$string['lastcronstart'] = 'Tiempo desde la última ejecución del cron: {$a}';
$string['lastruntime'] = 'Último arranque';
$string['lastupdated'] = 'Actualizado por última vez {$a}.';
$string['nextruntime'] = 'Siguiente arranque';
$string['noclassname'] = 'No se ha especificado el nombre de la clase';
$string['notasks'] = 'No hay tareas a ejecutar';
$string['payload'] = 'Carga útil';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'Plugin deshabilitado';
$string['pluginname'] = 'Configuración de la tarea programada';
$string['privacy:metadata'] = 'El complemento de Configuración de trabajo agendado no almacena ningún dato personal.';
$string['resettasktodefaults'] = 'Restablecer la configuración de la tarea programada a por defecto';
$string['resettasktodefaults_help'] = 'Esto descartará cualquier cambio local y revertirá la agenda para este trabajo a sus configuraciones originales';
$string['run_adhoctasks'] = 'Ejecutar tareas ad hoc';
$string['runadhoc'] = '¿Ejecutar tareas ad hoc ahora?';
$string['runadhoc_confirm'] = 'Las tareas ahora se ejecutarán en el servidor web y puede que tarden un tiempo en terminar.';
$string['runadhoctask'] = 'Ejecutar "{$a->task}" ID de tarea {$a->taskid}';
$string['runadhoctasks'] = 'Ejecutar todas las tareas "{$a}"';
$string['runadhoctasksfailed'] = 'Falló la ejecución de tareas "{$a}"';
$string['runagain'] = 'Ejecutar de nuevo';
$string['runclassname'] = 'Ejecutar todo';
$string['runclassnamefailedonly'] = 'Falló la ejecución de todo';
$string['runningalltasks'] = 'Ejecutando todas las tareas';
$string['runningfailedtasks'] = 'Ejecutando tareas fallidas';
$string['runningtasks'] = 'Tareas ejecutándose ahora';
$string['runnow'] = 'Ejecutar ahora';
$string['runnow_confirm'] = '¿Está seguro de querer correr este trabajo agendado ‘{$a}’ ahora? El trabajo agendado correrá en el servidor web y puede tomar bastante tiempo para completarse.';
$string['runpattern'] = 'Correr patrón';
$string['scheduled'] = 'Programadas';
$string['scheduledtaskchangesdisabled'] = 'Se han impedido modificaciones a la lista de trabajos (\'\'tasks\'\') agendados en la configuración de Moodle';
$string['scheduledtasks'] = 'Tareas programadas';
$string['showall'] = 'Mostrar todo';
$string['showfailedonly'] = 'Mostrar sólo las fallidas';
$string['showsummary'] = 'Mostrar resumen de tareas ad hoc';
$string['slowtask'] = 'La tarea se ha ejecutado durante más de {$a}';
$string['started'] = 'Iniciadas';
$string['taskage'] = 'Tiempo de ejecución';
$string['taskdetails'] = 'Tareas ejecutándose durante más de {$a->time} (max {$a->maxtime}): {$a->count}';
$string['taskdisabled'] = 'Tareas deshabilitadas';
$string['taskfailures'] = '{$a} tarea(s) fallidas';
$string['taskid'] = 'ID de la tarea';
$string['tasklogs'] = 'Registros de tareas';
$string['tasknofailures'] = 'No hay tareas fallidas';
$string['taskrunningtime'] = 'La tarea se ha ejecutado durante {$a}';
$string['taskscheduleday'] = 'Día';
$string['taskscheduleday_help'] = 'Campo del día de la semana para la programación de tareas. El campo usa el mismo formato que el cron de Unix. Algunos ejemplos:

* <strong>*</strong> Cada día
* <strong>*/2</strong> Un día sí y otro no
* <strong>1</strong> El primer día de cada mes
* <strong>1,15</strong> El primer día y el día 15 de cada mes';
$string['taskscheduledayofweek'] = 'Día de la semana';
$string['taskscheduledayofweek_help'] = 'Campo del día de la semana para la programación de tareas. El campo usa el mismo formato que el cron de Unix. Algunos ejemplos:

* <strong>*</strong> Cada día
* <strong>0</strong> Cada domingo
* <strong>6</strong> Cada sábado
* <strong>1,5</strong> Cada lunes y viernes';
$string['taskschedulehour'] = 'Hora';
$string['taskschedulehour_help'] = 'Campo de hora para agenda de trabajo. El campo usa el mismo formato que el cron para Unix. Algunos ejemplos son:

* <strong>*</strong> Cada hora
* <strong>*/2</strong> Cada 2 horas
* <strong>2-10</strong> Cada hora desde las 2am hasta las 10am (inclusive)
* <strong>2,6,9</strong> 2am, 6am y 9am';
$string['taskscheduleminute'] = 'Minuto';
$string['taskscheduleminute_help'] = 'Campo de minuto para agenda de trabajo. El campo usa el mismo formato que el cron para Unix. Algunos ejemplos son:

* <strong>*</strong> Cada minuto
* <strong>*/5</strong> Cada 5 minutos
* <strong>2-10</strong> Cada minuto entre 2 y 10 después de la hora (inclusive)<
* <strong>2,6,9</strong>  2, 6 y 9 minutos después de la hora';
$string['taskschedulemonth'] = 'Mes';
$string['taskschedulemonth_help'] = 'Campo de mes para agenda de trabajo. El campo usa el mismo formato que el cron para Unix. Algunos ejemplos son:


* <strong>*</strong> Cada mes
* <strong>*/2</strong> Un mes si y otro no
* <strong>1</strong> Cada Enero
* <strong>1,5</strong> Cada Enero y Mayo';
$string['viewlogs'] = 'Ver registros de {$a}';
