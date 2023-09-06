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
 * Strings for component 'workshopallocation_scheduled', language 'gl', version '4.1'.
 *
 * @package     workshopallocation_scheduled
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'Procesamento en segundo plano para asignación programada';
$string['currentstatus'] = 'Estado actual';
$string['currentstatusexecution'] = 'Estado';
$string['currentstatusexecution1'] = 'Executado o {$a->datetime}';
$string['currentstatusexecution2'] = 'Vai ser executado de novo o {$a->datetime}';
$string['currentstatusexecution3'] = 'Vai ser executado o {$a->datetime}';
$string['currentstatusexecution4'] = 'Agardando pola execución';
$string['currentstatusnext'] = 'Seguinte execución';
$string['currentstatusnext_help'] = 'Nalgúns casos, programarase a asignación para ser executada automaticamente de novo aínda que xa houbese sido executada. Isto pode suceder, por exemplo, se a data límite para entregas foi ampliada.';
$string['currentstatusreset'] = 'Restabelecer';
$string['currentstatusreset_help'] = 'Gardar este formulario coa caixa marcada fará que se reinicie o estado actual. Toda a información sobre a execución anterior retirarase de tal xeito que poida volver a ser executada de novo a asignación (se está activada enriba).';
$string['currentstatusresetinfo'] = 'Marque a caixa e garde o formato para reiniciar o resultado da execución';
$string['currentstatusresult'] = 'Resultado da execución recente';
$string['enablescheduled'] = 'Activar a asignación programada';
$string['enablescheduledinfo'] = 'Asignar automaticamente as entregas ao final da fase de entregas.';
$string['pluginname'] = 'Asignación programada';
$string['privacy:metadata'] = 'O engadido de Asignación programada non almacena datos persoais. Os datos persoais reais sobre quen vai avaliar a quen están almacenados polo propio módulo de Obradoiro e son a base para exportar os detalles das avaliacións.';
$string['randomallocationsettings'] = 'Axustes da asignación';
$string['randomallocationsettings_help'] = 'Aquí defínense os parámetros para o método de asignación ao chou. Serán usados polo engadido de asignación ao chou para facer a asignación das entregas.';
$string['resultdisabled'] = 'Desactivada a asignación programada';
$string['resultenabled'] = 'Activada a asignación programada';
$string['resultexecuted'] = 'Correcto';
$string['resultfailed'] = 'Non foi posíbel asignar automaticamente as entregas';
$string['resultfailedconfig'] = 'Mal configurada a asignación programada';
$string['resultfaileddeadline'] = 'O obradoiro non ten definida a data límite para as entregas';
$string['resultfailedphase'] = 'O obradoiro non está en fase de entregas';
$string['resultvoid'] = 'Non se asignaron entregas';
$string['resultvoiddeadline'] = 'Aínda non se sobrepasou a data límite de entragas';
$string['resultvoidexecuted'] = 'Xa foi executada a asignación';
$string['scheduledallocationsettings'] = 'Axustes da asignación programada';
$string['scheduledallocationsettings_help'] = 'Se activa método de asignación programada, asignará automaticamente as entregas para ser avaliadas ao final da fase de entregas. O final da fase pode definirse no obradoiro axustando a «Data límite para entregas».

Internamente, o método de asignación ao chou executase cos parámetros predeterminados neste formato. Isto significa que a asignación programada funciona como se o profesor executase por si mesmo a asignación ao chou ao final da fase de entregas, empregando os axustes de asignación descritos embaixo.

Observe que a asignación programada NON se executará se vostede, manualmente, cambia o obradoiro para a fase de avaliación antes de que remate a fase de entregas. Nese caso ten que asignar as entregas persoalmente. O método de asignación programada é particularmente útil cando se  emprega xunto coa característica de cambio automático de fase.';
$string['setup'] = 'Configurar a asignación programada';
