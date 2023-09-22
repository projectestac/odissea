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
 * Strings for component 'quiz_overview', language 'es', version '4.1'.
 *
 * @package     quiz_overview
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'Mostrar todos los intentos';
$string['allattemptscontributetograde'] = 'Todos los intentos contribuyen a la calificación final del usuario.';
$string['allstudents'] = 'Mostrar todos los {$a}';
$string['attemptsonly'] = 'Mostrar solamente {$a} con intentos';
$string['attemptsprepage'] = 'Intentos mostrados por página';
$string['deleteselected'] = 'Eliminar los intentos seleccionados';
$string['done'] = 'Hecho';
$string['err_failedtodeleteregrades'] = 'No se han podido eliminar las calificaciones de intentos calculados';
$string['err_failedtorecalculateattemptgrades'] = 'No se han podido recalcular las calificaciones del intento';
$string['highlightinggraded'] = 'El intento del usuario que contribuye a la calificación final está resaltado.';
$string['needed'] = 'Necesario';
$string['noattemptsonly'] = 'Mostrar/descargar solamente {$a} sin intentos';
$string['noattemptstoregrade'] = 'Ningún intento necesita recalificación';
$string['nogradepermission'] = 'No tiene permiso para calificar este cuestionario.';
$string['onlyoneattemptallowed'] = 'Sólo se permite un intento por usuario en este cuestionario.';
$string['optallattempts'] = 'todos los intentos';
$string['optallstudents'] = 'todos los {$a} que han intentado o no el cuestionario';
$string['optattemptsonly'] = '{$a} que han intentado el cuestionario';
$string['optnoattemptsonly'] = '{$a} que no han intentado el concurso';
$string['optonlyregradedattempts'] = 'que han sido recalificadas / están marcadas porque necesitan recalificarse';
$string['overview'] = 'Calificaciones';
$string['overviewdownload'] = 'Descargar visión general';
$string['overviewfilename'] = 'calificaciones';
$string['overviewreport'] = 'Informe de calificaciones';
$string['overviewreportgraph'] = 'Número total de estudiantes que alcanzan rangos de calificación';
$string['overviewreportgraphgroup'] = 'Número de estudiantes del grupo \'{$a}\' que han alcanzado los rangos de calificación';
$string['pagesize'] = 'Tamaño de página';
$string['pluginname'] = 'Calificaciones';
$string['preferencespage'] = 'Preferencias sólo para esta página';
$string['preferencessave'] = 'Guardar preferencias';
$string['preferencesuser'] = 'Sus preferencias para este informe';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'Si mostrar los puntos para cada espacio de preguntas.';
$string['privacy:preference:slotmarks:no'] = 'Los puntos no se muestran junto al espacio de la pregunta.';
$string['privacy:preference:slotmarks:yes'] = 'Los puntos se muestran junto al espacio de la pregunta.';
$string['regrade'] = 'Recalificar';
$string['regradeall'] = 'Recalificar todo';
$string['regradealldry'] = 'Simulacro de recalificación completa';
$string['regradealldrydo'] = 'Recalificar los intentos marcados cuando necesiten recalificación ({$a})';
$string['regradealldrydogroup'] = 'Recalificar intentos ({$a->countregradeneeded}) marcados como necesitados de recalificación en el grupo \'{$a->groupname}\'';
$string['regradealldrygroup'] = 'Simulacro de recalificación completa para el grupo \'{$a->groupname}\'';
$string['regradeallgroup'] = 'Recalificación completa para el grupo \'{$a->groupname}\'';
$string['regradecomplete'] = 'Recalificación terminada';
$string['regradedsuccessfullyxofy'] = 'Se terminó de calificar ({$a->done}/{$a->count})';
$string['regradeheader'] = 'Recalificando';
$string['regradeselected'] = 'Volver a calificar los intentos seleccionados';
$string['regradingattemptissue'] = 'Puesto {$a->slot}: {$a->reason}';
$string['regradingattemptxofy'] = 'Recalificando el intento ({$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = 'Las siguientes preguntas no pudieron recalificarse en el intento{$a->attemptnum} de {$a->name} (id {$a->attemptid})';
$string['regradingattemptxofywithdetails'] = 'Recalificando intento ({$a->done}/{$a->count}) - Intento {$a->attemptnum} por {$a->name} (id {$a->attemptid})';
$string['show'] = 'Mostrar / descargar';
$string['showattempts'] = 'Solo mostrar / descargar intentos';
$string['showdetailedmarks'] = 'Puntos para cada pregunta';
$string['showinggraded'] = 'Mostrando sólo el intento calificado para cada usuario.';
$string['showinggradedandungraded'] = 'Mostrando los intentos calificados y no calificados para cada usuario. El intento calificado para cada usuario está resaltado. El método de calificación para este cuestionario es {$a}.';
$string['studentingroup'] = '\'{$a->coursestudent}\' en el grupo \'{$a->groupname}\'';
$string['studentingrouplong'] = '\'{$a->coursestudent}\' en este grupo';
