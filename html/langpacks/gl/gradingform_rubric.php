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

/**
 * Strings for component 'gradingform_rubric', language 'gl', branch 'MOODLE_38_STABLE'
 *
 * @package   gradingform_rubric
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Engadir criterio';
$string['additionalfeedback'] = 'Comentario adicional';
$string['alwaysshowdefinition'] = 'Permitirlle aos usuarios obter unha vista previa da rúbrica empregada no módulo (do contrario a rúbrica só será visíbel despois da cualificación)';
$string['backtoediting'] = 'Volver á edición';
$string['confirmdeletecriterion'] = 'Confirma que quere eliminar este criterio?';
$string['confirmdeletelevel'] = 'Confirma que quere eliminar este nivel?';
$string['criterion'] = 'Criterio {$a}';
$string['criterionaddlevel'] = 'Engadir nivel';
$string['criteriondelete'] = 'Eliminar criterio';
$string['criterionduplicate'] = 'Duplicar criterio';
$string['criterionempty'] = 'Prema para editar o criterio';
$string['criterionmovedown'] = 'Baixar';
$string['criterionmoveup'] = 'Subir';
$string['criterionremark'] = 'Comentarios para criterio {$a->description}: {$a->remark}';
$string['definerubric'] = 'Definir rúbrica';
$string['description'] = 'Descrición';
$string['enableremarks'] = 'Permitirlle ao corrector engadir novas correccións para cada criterio';
$string['err_mintwolevels'] = 'Cada criterio debe ter polo menos dous niveis';
$string['err_nocriteria'] = 'A rúbrica debe conter polo menos un criterio';
$string['err_nodefinition'] = 'A definición do nivel non pode estar baleira';
$string['err_nodescription'] = 'A descrición do criterio non pode estar baleira';
$string['err_novariations'] = 'Os niveis de criterio non poden valer todos a mesma cantidade de puntos';
$string['err_scoreformat'] = 'O número de puntos para cada nivel debe ser un número correcto e non negativo';
$string['err_totalscore'] = 'O número máximo de puntos posíbeis cando se cualifica pola rúbrica debe ser maior que cero';
$string['gradingof'] = 'Cualificando {$a}';
$string['level'] = 'Nivel {$a->definition}, {$a->score} puntos.';
$string['leveldefinition'] = 'Definición do nivel {$a}';
$string['leveldelete'] = 'Eliminar o nivel {$a}';
$string['levelempty'] = 'Prema para editar o nivel';
$string['levelsgroup'] = 'Grupo de niveles';
$string['lockzeropoints'] = 'Calcular a cualificación baseándose na rúbrica que teña unha puntuación mínima de 0';
$string['lockzeropoints_help'] = 'Este axuste só se aplica se a suma do número mínimo de puntos para cada criterio é maior que 0. Se está marcada, a cualificación mínima alcanzable para a rúbrica será maior que 0. Se non está marcada, asignarase a puntuación mínima posíbel para a rúbrica á cualificación mínima dispoñíbel para a actividade (que é 0 a non ser que se use unha escala).';
$string['name'] = 'Nome';
$string['needregrademessage'] = 'A definición da rúbrica foi cambiada após que este alumno fose cualificado. O alumno non pode ver esta rúbrica ata que vostede comprobe a rúbrica e actualice a cualificación.';
$string['notset'] = 'Non estabelecido';
$string['pluginname'] = 'Rúbrica';
$string['pointsvalue'] = '{$a} puntos';
$string['previewrubric'] = 'Vista previa da rúbrica';
$string['privacy:metadata:criterionid'] = 'Un identificador para un criterio específico que está a ser cualificado.';
$string['privacy:metadata:fillingssummary'] = 'Almacena información sobre a cualificación do usuario creada pola rúbrica.';
$string['privacy:metadata:instanceid'] = 'Un identificador relacionado cunha cualificación nunha actividade.';
$string['privacy:metadata:levelid'] = 'O nivel obtido na rúbrica.';
$string['privacy:metadata:remark'] = 'Observacións relacionadas co criterio de rúbrica.';
$string['regrademessage1'] = 'Está a piques de gardar os cambios nunha rúbrica que xa foi empregada para cualificación. Indique se as cualificacións existentes necesitan ser revisadas. Se estabelece isto entón a rúbrica agochase para os alumnos ata que o elemento sexa cualificado de novo.';
$string['regrademessage5'] = 'Está a piques de gardar cambios significativos nunha rúbrica que xa foi empregada para cualificación. O valor no libro de cualificacións non cambiará, mais a rúbrica agochase para os alumnos ata que o elemento sexa cualificado de novo.';
$string['regradeoption0'] = 'Non corrixir para volver cualificar';
$string['regradeoption1'] = 'Corrixir para volver cualificar';
$string['restoredfromdraft'] = 'NOTA: O último intento para cualificar a esta persoa non foi gardado correctamente mais as cualificacións das versións preliminares foron restauradas. Se quere cancelar os cambios empregue o botón «Cancelar» de embaixo.';
$string['rubric'] = 'Rúbrica';
$string['rubricmapping'] = 'Puntuación das regras de asignación de cualificación';
$string['rubricmappingexplained'] = 'A puntuación mínima posíbel para esta rúbrica é  <b>{$a->minscore} puntos</b> e converteranse na cualificación mínima dispoñíbel neste módulo (que é cero a non ser que se empregue a escala). A puntuación máxima <b>{$a->maxscore} puntos</b> converterase na cualificación máxima. As puntuacións intermedias serán convertidas respectivamente.

Se se usa unha escala para a cualificación, a puntuación redondearase e converterase aos elementos de escala coma se fosen números enteiros consecutivos.

Este cálculo de cualificación pode modificarse editando o formulario e premendo na caixa «Calcular a cualificación baseándose na rúbrica que teña unha puntuación mínima de 0».';
$string['rubricnotcompleted'] = 'Escolla algo para cada criterio';
$string['rubricoptions'] = 'Opcións da rúbrica';
$string['rubricstatus'] = 'Estado actual da rúbrica';
$string['save'] = 'Gardar';
$string['saverubric'] = 'Gardar a a rúbrica e deixala rematada';
$string['saverubricdraft'] = 'Gardar como versión preliminar';
$string['scoreinputforlevel'] = 'Entrada de puntuación para o nivel {$a}';
$string['scorepostfix'] = '{$a} puntos';
$string['showdescriptionstudent'] = 'Presenta a descrición da rúbrica aos que están a seren cualificados';
$string['showdescriptionteacher'] = 'Presenta a descrición da rúbrica durante a avaliación';
$string['showremarksstudent'] = 'Amosar as novas correccións aos que están a seren cualificados';
$string['showscorestudent'] = 'Presenta os puntos para cada nivel aos que están a seren cualificados';
$string['showscoreteacher'] = 'Presenta os puntos para cada nivel durante a avaliación';
$string['sortlevelsasc'] = 'Criterio de ordenación para os niveis:';
$string['sortlevelsasc0'] = 'Descendente por número de puntos';
$string['sortlevelsasc1'] = 'Ascendente por número de puntos';
$string['zerolevelsabsent'] = 'Aviso: A puntuación mínima posible para esta rubrica non é 0; isto pode producir notas inesperadas para a actividade. Para evitar isto, cada criterio debería ter un nivel con 0 puntos.<br>
Esta advertencia pode ignorarse se se usa unha escala para a cualificación e os niveis mínimos da rúbrica corresponden ao valor mínimo da escala.';
