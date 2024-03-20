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
 * Strings for component 'quiz_overview', language 'gl', version '4.1'.
 *
 * @package     quiz_overview
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'Amosar todos os intentos';
$string['allattemptscontributetograde'] = 'Todos os intentos contribúen á cualificación final do usuario.';
$string['allstudents'] = 'Amosar todo {$a}';
$string['attemptsonly'] = 'Amosar {$a} con tentativas unicamente';
$string['attemptsprepage'] = 'Intentos amosados por páxina';
$string['deleteselected'] = 'Eliminar os intentos seleccionados';
$string['done'] = 'Feito';
$string['err_failedtodeleteregrades'] = 'Non foi posíbel eliminar as cualificacións de intentos calculados';
$string['err_failedtorecalculateattemptgrades'] = 'Non foi posíbel recalcular as cualificacións do intento';
$string['highlightinggraded'] = 'O intento do usuario que contribúe á cualificación final está resaltado.';
$string['needed'] = 'Necesario';
$string['noattemptsonly'] = 'Amosar {$a} sen tentativas unicamente';
$string['noattemptstoregrade'] = 'Ningún intento necesita recualificación';
$string['nogradepermission'] = 'Non ten permiso para cualificar esta proba.';
$string['onlyoneattemptallowed'] = 'Só se permite un intento por usuario nesta proba.';
$string['optallattempts'] = 'todos os intentos';
$string['optallstudents'] = 'todos os {$a} que tentaron ou non resolver esta proba';
$string['optattemptsonly'] = '{$a} que tentaron resolver a proba';
$string['optnoattemptsonly'] = '{$a} que non tentaron resolver a proba';
$string['optonlyregradedattempts'] = 'que foron recualificadas / están marcadas porque necesitan recualificarse';
$string['overview'] = 'Cualificacións';
$string['overviewdownload'] = 'Descarga da vista xeral';
$string['overviewfilename'] = 'cualificacións';
$string['overviewreport'] = 'Informe das cualificacións';
$string['overviewreportgraph'] = 'Número total de alumnos que acadaron os intervalos de cualificación';
$string['overviewreportgraphgroup'] = 'Número de alumnos do grupo «{$a}» que acadaron os intervalos de cualificación';
$string['pagesize'] = 'Tamaño da páxina';
$string['pluginname'] = 'Cualificacións';
$string['preferencespage'] = 'Preferencias só para esta páxina';
$string['preferencessave'] = 'Amosar informe';
$string['preferencesuser'] = 'As súas preferencias para este informe';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'Indica se se amosan as puntuacións para cada intervalo de preguntas.';
$string['privacy:preference:slotmarks:no'] = 'As puntuacións non se amosan xunto co intervalo de preguntas.';
$string['privacy:preference:slotmarks:yes'] = 'As puntuacións amósanse xunto co intervalo de preguntas.';
$string['regrade'] = 'Volver cualificar';
$string['regradeall'] = 'Volver cualificar todo';
$string['regradealldry'] = 'Simulacro de recualificación completa';
$string['regradealldrydo'] = 'Recualificar os intentos marcados cando necesiten recualificación ({$a})';
$string['regradealldrydogroup'] = 'Recualificar os intentos ({$a->countregradeneeded}) marcados como necesitados de recualificación no grupo «{$a->groupname}»';
$string['regradealldrygroup'] = 'Simulacro de recualificación completa para o grupo «{$a->groupname}»';
$string['regradeallgroup'] = 'Recualificación completa para o grupo «{$a->groupname}»';
$string['regradecomplete'] = 'Recualificación realizada satisfactorimente';
$string['regradedsuccessfullyxofy'] = 'Recualificado satisfactoriamente ({$a->done}/{$a->count})';
$string['regradeheader'] = 'Recualificando';
$string['regradeselected'] = 'Volver cualificar os intentos seleccionados';
$string['regradingattemptissue'] = 'Franxa {$a->slot}: {$a->reason}';
$string['regradingattemptxofy'] = 'Recualificando o intento ({$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = 'Non foi posíbel recualificar as seguintes preguntas no intento {$a->attemptnum} por {$a->name} (id {$a->attemptid})';
$string['regradingattemptxofywithdetails'] = 'Recualificación do intento ({$a->done}/{$a->count}) - Intento {$a->attemptnum} por {$a->name} (id {$a->attemptid})';
$string['show'] = 'Amosar / descargar';
$string['showattempts'] = 'Só amosar / descargar os intentos';
$string['showdetailedmarks'] = 'Puntuación para cada pregunta';
$string['showinggraded'] = 'Amosando só o intento cualificado para cada usuario.';
$string['showinggradedandungraded'] = 'Amosando os intentos cualificados e sen cualificar para cada usuario. O intento cualificado para cada usuario está resaltado. O método de cualificación para esta proba é o {$a}.';
$string['studentingroup'] = '«{$a->coursestudent}» no grupo «{$a->groupname}»';
$string['studentingrouplong'] = '«{$a->coursestudent}» neste grupo';
