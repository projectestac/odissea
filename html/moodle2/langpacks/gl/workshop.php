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
 * Strings for component 'workshop', language 'gl', branch 'MOODLE_28_STABLE'
 *
 * @package   workshop
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregategrades'] = 'Volver calcular as cualificacións';
$string['aggregation'] = 'Agregación de cualificacións';
$string['allocate'] = 'Asignar entregas';
$string['allocatedetails'] = 'agardábase: {$a->expected}<br />entregouse: {$a->submitted}<br />para localizar: {$a->allocate}';
$string['allocation'] = 'Asignación de entregas';
$string['allocationconfigured'] = 'Configurada asignación';
$string['allocationdone'] = 'Feita a asignación';
$string['allocationerror'] = 'Erro de asignación';
$string['allsubmissions'] = 'Todos os envíos';
$string['alreadygraded'] = 'Xa cualificado';
$string['areaconclusion'] = 'Texto de conclusión';
$string['areainstructauthors'] = 'Instrucións para a entrega';
$string['areainstructreviewers'] = 'Instrucións para a avaliación';
$string['areaoverallfeedbackattachment'] = 'Anexos globais de comentarios';
$string['areaoverallfeedbackcontent'] = 'Textos globais de comentarios';
$string['areasubmissionattachment'] = 'Anexos da entrega';
$string['areasubmissioncontent'] = 'Textos da entrega';
$string['assess'] = 'Avaliar';
$string['assessedexample'] = 'Entrega de exemplo avaliada';
$string['assessedsubmission'] = 'Entrega avaliada';
$string['assessingexample'] = 'Avaliando a entrega de exemplo';
$string['assessingsubmission'] = 'Avaliando a entrega';
$string['assessment'] = 'Avaliación';
$string['assessmentby'] = 'por <a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = 'Avaliación de {$a}';
$string['assessmentbyyourself'] = 'A súa avaliación';
$string['assessmentdeleted'] = 'Avaliación desasignada';
$string['assessmentend'] = 'Data límite de avaliacións';
$string['assessmentendbeforestart'] = 'A data límite de avaliacións non pode ser anterior á data de comezo da avaliación';
$string['assessmentenddatetime'] = 'Data límite da avalición: {$a->daydatetime} ({$a->distanceday})';
$string['assessmentendevent'] = '{$a} (data límite das avaliacións)';
$string['assessmentform'] = 'Forma de avaliación';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">Avaliación</a> de <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentreference'] = 'Avaliación de referencia';
$string['assessmentreferenceconflict'] = 'Non é posíbel avaliar unha entrega de exemplo para que xa fixo unha avaliación de de referencia.';
$string['assessmentreferenceneeded'] = 'Ten que avaliar esta entrega de exemplo, para proporcionar unha avaliación de referencia. Prema no botón «Continuar» para avaliar a entrega.';
$string['assessmentsettings'] = 'Axustes da avaliación';
$string['assessmentstart'] = 'Aberto para avaliacións desde';
$string['assessmentstartdatetime'] = 'Aberto para avaliacións desde {$a->daydatetime} ({$a->distanceday})';
$string['assessmentstartevent'] = '{$a} (aberto para avaliacións)';
$string['assessmentweight'] = 'Ponderación da avaliación';
$string['assignedassessments'] = 'Entregas asignadas para avaliar';
$string['assignedassessmentsnone'] = 'Non ten entregas asignadas para avaliar';
$string['backtoeditform'] = 'Volver ao formulario de edición';
$string['byfullname'] = 'por <a href="{$a->url}">{$a->name}</a>';
$string['calculategradinggrades'] = 'Calcular as cualificacións da avaliación';
$string['calculategradinggradesdetails'] = 'agardábase: {$a->expected}<br />calculouse: {$a->calculated}';
$string['calculatesubmissiongrades'] = 'Calcular as cualificacións das entregas';
$string['calculatesubmissiongradesdetails'] = 'agardábase: {$a->expected}<br />calculouse: {$a->calculated}';
$string['chooseuser'] = 'Escoller un usuario...';
$string['clearaggregatedgrades'] = 'Limpar todas as cualificacións agregadas';
$string['clearaggregatedgradesconfirm'] = 'Confirma que quere limpar as cualificacións calculadas para as entregas e as cualificacións da avaliación?';
$string['clearaggregatedgrades_help'] = 'As cualificacións agregadas para a entrega e as cualificacións de avaliación restableceranse. Pode volver calcular estas cualificacións desde o principio na Fase de cualificación das avaliacións.';
$string['clearassessments'] = 'Limpar as avaliacións';
$string['clearassessmentsconfirm'] = 'Confirma que quere limpar todas as cualificacións de avaliación?. Non poderá volver a obter a información por vostede mesmo, os avaliadores terán que avaliar de novo as entregas asignadas.';
$string['clearassessments_help'] = 'As cualificacións calculadas para as entregas e as cualificacións de avaliación restableceranse. A información sobre como encher os formularios conservase, mais todos os avaliadores deberán abrir o formulario de avaliación de novo e volver gardalo, para que se calculen de novo as cualificacións.';
$string['conclusion'] = 'Conclusión';
$string['conclusion_help'] = 'O texto de conclusión amosáselle aos participantes na fin da actividade.';
$string['configexamplesmode'] = 'Modo predeterminado na avaliación dos exemplos nos obradoiros';
$string['configgrade'] = 'Cualificación máxima predeterminada para as entregas nos obradoiros';
$string['configgradedecimals'] = 'Número predeterminados de díxitos que se deberían amosar despois do punto decimal ao amosar as cualificacións.';
$string['configgradinggrade'] = 'Cualificación máxima predeterminada para a avaliación nos obradoiros';
$string['configmaxbytes'] = 'O tamaño máximo predeterminado do ficheiro entregado para todos os obradoiros (suxeito ao límite do curso e a outra configuración local)';
$string['configstrategy'] = 'Estratexia de cualificación predeterminada para os obradoiros';
$string['createsubmission'] = 'Comezar a preparación da súa entrega';
$string['daysago'] = 'vai {$a} días';
$string['daysleft'] = 'restan {$a} días';
$string['daystoday'] = 'hoxe';
$string['daystomorrow'] = 'mañá';
$string['daysyesterday'] = 'onte';
$string['deadlinesignored'] = 'A vostede non se lle aplican as restricións de tempo';
$string['editassessmentform'] = 'Editar o formato de avaliación';
$string['editassessmentformstrategy'] = 'Editar o formato de avaliación ({$a})';
$string['editingassessmentform'] = 'Editando o formato de avaliación';
$string['editingsubmission'] = 'Editando a entrega';
$string['editsubmission'] = 'Editar envío';
$string['err_multiplesubmissions'] = 'Mentres se estaba a editar este formulario, gardouse outra versión da entrega. Non se permiten entregas múltiples por usuario.';
$string['err_removegrademappings'] = 'Non é posíbel retirar as asignacións de cualificacións non usadas';
$string['evaluategradeswait'] = 'Agarde ata que se teñan feito as avaliacións e calculado as cualificacións';
$string['evaluation'] = 'Cualificación das avaliacións';
$string['evaluationmethod'] = 'Método de cualificación das avaliacións';
$string['evaluationmethod_help'] = 'O método de cualificación  das avaliacións determina como se calculan as cualificacións nas avaliacións. Pode deixar que se volvan calcular as cualificacións segundo diferentes axustes a non ser que xa estea satisfeito co resultado.';
$string['evaluationsettings'] = 'Axustes da cualificación das avaliacións';
$string['eventassessableuploaded'] = 'Foi enviada unha entrega.';
$string['eventassessmentevaluated'] = 'Avaliación verificada';
$string['eventassessmentevaluationsreset'] = 'Restablecer as verificacións de avaliacións';
$string['eventassessmentreevaluated'] = 'Avaliación verificada de novo';
$string['eventphaseswitched'] = 'Fase cambiada';
$string['eventsubmissionassessed'] = 'Entrega avaliada';
$string['eventsubmissionassessmentsreset'] = 'Limpadas as avaliacións das entregas';
$string['eventsubmissioncreated'] = 'Entrega creada';
$string['eventsubmissionreassessed'] = 'Entrega avaliada de novo';
$string['eventsubmissionupdated'] = 'Entrega actualizada';
$string['eventsubmissionviewed'] = 'Entrega vista';
$string['example'] = 'Entrega de exemplo';
$string['exampleadd'] = 'Engadir unha entrega de exemplo';
$string['exampleassess'] = 'Avaliar a entrega de exemplo';
$string['exampleassessments'] = 'Entregas de exemplo para avaliar';
$string['exampleassesstask'] = 'Avaliar exemplos';
$string['exampleassesstaskdetails'] = 'agardábase: {$a->expected}<br />avaliouse: {$a->assessed}';
$string['examplecomparing'] = 'Comparación das avaliacións da entrega de exemplo';
$string['exampledelete'] = 'Eliminar o exemplo';
$string['exampledeleteconfirm'] = 'Confirma que quere eliminar a seguinte entrega de exemplo? Prema no botón «Continuar» para eliminar a entrega.';
$string['exampleedit'] = 'Editar o exemplo';
$string['exampleediting'] = 'Editando o exemplo';
$string['exampleneedassessed'] = 'O primeiro que ten que facer é avaliar os exemplos';
$string['exampleneedsubmission'] = 'Debe enviar o seu traballo e avaliar todos os envíos de exemplo primeiro';
$string['examplesbeforeassessment'] = 'Os exemplos estarán dispoñíbeis após enviar a súa propia entrega, e teñen que seren avaliados antes da avaliación por pares';
$string['examplesbeforesubmission'] = 'Debe avaliar os exemplos antes da entrega propia';
$string['examplesmode'] = 'Modo de avaliación de exemplos';
$string['examplesubmissions'] = 'Envíos de exemplo';
$string['examplesvoluntary'] = 'A avaliación de entregas de exemplo é voluntaria';
$string['feedbackauthor'] = 'Comentario para o autor';
$string['feedbackauthorattachment'] = 'Anexo';
$string['feedbackby'] = 'Comentario por {$a}';
$string['feedbackreviewer'] = 'Comentario para o revisor';
$string['feedbacksettings'] = 'Comentarios';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br /><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span>';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = 'Cualificacións outorgadas';
$string['gradecalculated'] = 'Cualificación calculada para a entrega';
$string['gradedecimals'] = 'Posicións decimais nas cualificacións';
$string['gradegivento'] = '&gt;';
$string['gradeinfo'] = 'Cualificación: {$a->received} de {$a->max}';
$string['gradeitemassessment'] = '{$a->workshopname} (avaliación)';
$string['gradeitemsubmission'] = '{$a->workshopname} (entrega)';
$string['gradeover'] = 'Anular a cualificación da entrega';
$string['gradereceivedfrom'] = '&lt;';
$string['gradesreport'] = 'Informe de cualificacións do obradoiro';
$string['gradinggrade'] = 'Cualificación para avaliación';
$string['gradinggradecalculated'] = 'Cualificación calculada da avaliación';
$string['gradinggrade_help'] = 'Este axuste especifica a cualificación máxima que pode obterse na avaliación dunha entrega.';
$string['gradinggradeof'] = 'Cualificación da avaliación (de {$a})';
$string['gradinggradeover'] = 'Anular a cualificación da avaliación';
$string['gradingsettings'] = 'Axustes da cualificación';
$string['groupnoallowed'] = 'Non se lle permite acceder a ningún grupo neste obradoiro';
$string['iamsure'] = 'Si, confirmo';
$string['info'] = 'Información';
$string['instructauthors'] = 'Instrucións para a entrega';
$string['instructreviewers'] = 'Instrucións para a avaliación';
$string['introduction'] = 'Descrición';
$string['latesubmissions'] = 'Entregas atrasadas';
$string['latesubmissionsallowed'] = 'Permítense entregas atrasadas';
$string['latesubmissions_desc'] = 'Permitir entregas fora de prazo';
$string['latesubmissions_help'] = 'De estar activado, un autor pode entregar o seu traballo despois da data límite de entrega ou durante a fase de avaliación. As entregas posteriores non se poden editar.';
$string['maxbytes'] = 'Tamaño máximo de anexo na entrega';
$string['modulename'] = 'Taller';
$string['modulename_help'] = 'O módulo de actividade obradoiro activa a recollida, revisión e avaliación por pares do traballo dos alumnos.

Os alumnos poden entregar calquera contido dixital (ficheiros) tales como documentos procesados por palabras ou follas de cálculo e tamén poden escribir directamente dentro dun campo utilizando o editor de texto.

As entregas son avaliadas utilizando un formulario de avaliación multicriterio definido polo profesor. O proceso de avaliación por pares e a comprensión do formulario de avaliación pódese practicar previamente con exemplos de entregas fornecidas polo profesor, xunto cunha avaliación de referencia. Aos alumnos dáselles a oportunidade de avaliar unha ou máis das entregas dos seus pares. As entregas e os revisores poden ser anónimos se se require.

Os alumnos obteñen dúas cualificacións nunha actividade de seminario - unha cualificación pola súa entrega e outra pola avaliación das entregas dos seus pares. Ambas cualificacións gárdanse no libro de cualificacións.';
$string['modulename_link'] = 'mod/workshop/view';
$string['modulenameplural'] = 'Talleres';
$string['mysubmission'] = 'A miña entrega';
$string['nattachments'] = 'Número máximo de anexos por entrega';
$string['noexamples'] = 'Aínda non hai exemplos neste obradoiro';
$string['noexamplesformready'] = 'Debe definir a forma de avaliación antes de proporcionar envíos de exemplo';
$string['nogradeyet'] = 'Aínda non hai cualificación';
$string['nosubmissionfound'] = 'Non se atoparon entregas deste usuario';
$string['nosubmissions'] = 'Aínda non hai entregas neste obradoiro';
$string['notassessed'] = 'Aínda sen avaliar';
$string['nothingtoreview'] = 'Non hai nada que revisar';
$string['notoverridden'] = 'Sen anular';
$string['noworkshops'] = 'Non hai obradoiros neste curso';
$string['noyoursubmission'] = 'Aínda non entregou o seu traballo';
$string['nullgrade'] = '-';
$string['overallfeedback'] = 'Comentario global';
$string['overallfeedbackfiles'] = 'Número máximo de anexos globais de comentarios';
$string['overallfeedbackmaxbytes'] = 'Tamaño máximo de anexos globais de comentarios';
$string['overallfeedbackmode'] = 'Mo do de comentario global';
$string['overallfeedbackmode_0'] = 'Desactivado';
$string['overallfeedbackmode_1'] = 'Activado e opcional';
$string['overallfeedbackmode_2'] = 'Activado e requirido';
$string['overallfeedbackmode_help'] = 'Se está activado, aparecerá un campo de texto na parte inferior do formulario de avaliación. Os revisores poderán poñer nel a avaliación global da entrega, ou proporcionar unha explicación adicional da súa avaliación.';
$string['page-mod-workshop-x'] = 'Calquera páxina do módulo de obradoiro';
$string['participant'] = 'Participante';
$string['participantrevierof'] = 'O participante é revisor de';
$string['participantreviewedby'] = 'O participante é revisado por';
$string['phaseassessment'] = 'Fase de avaliación';
$string['phaseclosed'] = 'Pechada';
$string['phaseevaluation'] = 'Fase de cualificación das avaliacións';
$string['phasesetup'] = 'Fase de configuración';
$string['phasesoverlap'] = 'A fase de entrega e a fase de avaliación, non poden solaparse';
$string['phasesubmission'] = 'Fase de entrega';
$string['pluginadministration'] = 'Administración do obradoiro';
$string['pluginname'] = 'Taller';
$string['prepareexamples'] = 'Preparar unha entrega de exemplo';
$string['previewassessmentform'] = 'Vista previa';
$string['publishedsubmissions'] = 'Entregas publicadas';
$string['publishsubmission'] = 'Publicar a entrega';
$string['publishsubmission_help'] = 'As entregas publicadas estarán dispoñíbeis para os demais cando o obradoiro estea pechado.';
$string['reassess'] = 'Avaliar novamente';
$string['receivedgrades'] = 'Cualificacións recibidas';
$string['recentassessments'] = 'Avaliacións do obradoiro:';
$string['recentsubmissions'] = 'Entregas do obradoiro:';
$string['resetassessments'] = 'Eliminar todas as avaliacións';
$string['resetassessments_help'] = 'Vostede pode escoller eliminar soamente as avaliacións asignadas sen afectar as entregas. De eliminarse entregas, as súas avaliacións serán eliminadas implicitamente e esta opción é ignorada. Teña en conta que isto tamén inclúe ás avaliacións de entregas de exemplo.';
$string['resetphase'] = 'Cambiar para a fase de configuración';
$string['resetphase_help'] = 'Se activa isto, todos os obradoiros poranse na fase de configuración inicial.';
$string['resetsubmissions'] = 'Eliminar todas as entregas';
$string['resetsubmissions_help'] = 'Todas as entregas e as súas avaliacións van seren eliminadas. isto non afecta ás entregas de exemplo.';
$string['saveandclose'] = 'Gardar e pechar';
$string['saveandcontinue'] = 'Garda e continuar editando';
$string['saveandpreview'] = 'Gardar e facer unha vista previa';
$string['saveandshownext'] = 'Gardar e amosar o seguinte';
$string['selfassessmentdisabled'] = 'Auto-avaliación desactivada';
$string['showingperpage'] = 'Amosando {$a} elementos por páxina';
$string['showingperpagechange'] = 'Cambiar ...';
$string['someuserswosubmission'] = 'Canda menos un autor aínda non entregou o seu traballo';
$string['sortasc'] = 'Orde ascendente';
$string['sortdesc'] = 'Orde descendente';
$string['strategy'] = 'Estratexia das cualificacións';
$string['strategyhaschanged'] = 'A estratexia de cualificación do obradoiro cambiou desde que foi aberto o formato para editalo.';
$string['strategy_help'] = 'A estratexia de cualificación determina a forma de avaliación utilizada e o método de cualificación das entregas. Hai 4 opcións:

 * Cualificación acumulativa - Realízanse comentarios e cualificacións sobre os aspectos especificados.
 * Comentarios - Fanse comentarios sobre aspectos específicos, mais non se outorga cualificación.
 * Número de erros - Realízanse comentarios e unha cualificación tipo si/non sobre as afirmacións realizadas.
 * Rúbrica - Realizase unha avaliación de nivel respecto aos criterios especificados';
$string['submission'] = 'Envío';
$string['submissionattachment'] = 'Anexo';
$string['submissionby'] = 'Entregado por {$a}';
$string['submissioncontent'] = 'Contido da entrega';
$string['submissionend'] = 'Fin dos envíos';
$string['submissionendbeforestart'] = 'A data límite para as entregas non pode especificarse como anterior a data na se abre o prazo de entrega';
$string['submissionenddatetime'] = 'Data límite da entrega: {$a->daydatetime} ({$a->distanceday})';
$string['submissionendevent'] = '{$a} (fin dos envíos)';
$string['submissionendswitch'] = 'Cambiar para a seguinte fase após a data límite para entregas';
$string['submissionendswitch_help'] = 'Se especifica a data límite para as entregas e esta caixa está marcada, o obradoiro cambiará automaticamente a fase de avaliación após a data límite de entregas.

Se activa esta característica, recomendase que defina tamén o método de asignación programada. Se non se asignan as entregas, non é posíbel facer avaliacións incluso se o obradoiro estiver en fase de avaliación.';
$string['submissiongrade'] = 'Cualificación para a entrega';
$string['submissiongrade_help'] = 'Este axuste especifica a cualificación máxima que pode obterse polo traballo entregado.';
$string['submissiongradeof'] = 'Cualificación para a entrega (de {$a})';
$string['submissionsettings'] = 'Configuración de entregas';
$string['submissionstart'] = 'Comezo dos envíos';
$string['submissionstartdatetime'] = 'Aberto para entregas desde {$a->daydatetime} ({$a->distanceday})';
$string['submissionstartevent'] = '{$a} (comezo dos envíos)';
$string['submissiontitle'] = 'Título';
$string['subplugintype_workshopallocation'] = 'Método de asignación de entregas';
$string['subplugintype_workshopallocation_plural'] = 'Métodos de asignación de entregas';
$string['subplugintype_workshopeval'] = 'Método de avaliación das cualificacións';
$string['subplugintype_workshopeval_plural'] = 'Métodos de avaliación das cualificacións';
$string['subplugintype_workshopform'] = 'Estratexia de cualificación';
$string['subplugintype_workshopform_plural'] = 'Estratexias das cualificacións';
$string['switchingphase'] = 'Cambiando a fase';
$string['switchphase'] = 'Cambiar a fase';
$string['switchphase10info'] = 'Está a piques de cambiar o obradoiro a <strong>Fase de instalación</strong>. Nesta fase, os usuarios non poden modificar a súa entrega ou as súas avaliacións. Os profesores poden usar esta fase para cambiar a configuración do obradoiro e modificar a estratexia de cualificación ou a forma de avaliación.';
$string['switchphase20info'] = 'Está a piques de cambiar o obradoiro a <strong>Fase de entrega</strong>. Nesta fase, os alumnos poden enviar os seus traballos (dentro dos prazos de control de acceso existentes, se foron estabelecidos). Os profesores poden asignar entregas para seren revisadas por pares.';
$string['switchphase30auto'] = 'O obradoiro cambiará automaticamente a fase de avaliación após {$a->daydatetime} ({$a->distanceday})';
$string['switchphase30info'] = 'Está a piques de cambiar o obradoiro a <strong>Fase de avaliación</strong>. Nesta fase, os revisores poden avaliar os traballos que lles foron asignados (dentro dos prazos de control de acceso existentes, se foron estabelecidos).';
$string['switchphase40info'] = 'Está a piques de cambiar o obradoiro a <strong>Fase de cualificación das avaliacións</strong> do obradoiro. Nesta fase, os usuarios non poden modificar as súas entregas ou as avaliacións. Os profesores poden empregar as ferramentas de cualificación de avaliacións para calcular as cualificacións finais e fornecer comentarios para os revisores.';
$string['switchphase50info'] = 'Está a piques de pechar o obradoiro. Isto dará como resultado que as cualificacións calculadas aparecerán no libro de cualificacións. Os alumnos poden ver as súas entregas e e as avaliacións destas.';
$string['taskassesspeers'] = 'Avaliar pares';
$string['taskassesspeersdetails'] = 'total: {$a->total}<br />pendente: {$a->todo}';
$string['taskassessself'] = 'Avaliarse a un mesmo';
$string['taskconclusion'] = 'Proporcionar unha conclusión da actividade';
$string['taskinstructauthors'] = 'Proporcionar instrucións para a entrega';
$string['taskinstructreviewers'] = 'Proporcionar instrucións para a avaliación';
$string['taskintro'] = 'Estabelecer a descrición do obradoiro';
$string['tasksubmit'] = 'Entregar o seu trabllo';
$string['toolbox'] = 'Caixa de ferramentas do obradoiro';
$string['undersetup'] = 'Estase a configurar o obradoiro. Agarde ata que cambie á seguinte fase.';
$string['useexamples'] = 'Empregar exemplos';
$string['useexamples_desc'] = 'Proporciónanse exemplos de entregas para practicar a avaliación';
$string['useexamples_help'] = 'Si está activado, os usuarios poden practicar a avaliación sobre unha ou máis entregas de exemplo e comparar a súa avaliación cunha avaliación de referencia. Esta cualificación non contabiliza para a cualificación da avaliación.';
$string['usepeerassessment'] = 'Empregar a avaliación por pares';
$string['usepeerassessment_desc'] = 'Os alumnos poden avaliar o traballo dos outros';
$string['usepeerassessment_help'] = 'Se está activado, un usuario pode recibir entregas doutros usuarios para avalialas e recibirá una cualificación pola avaliación, ademais dunha cualificación pola propia entrega.';
$string['userdatecreated'] = 'entregado o <span>{$a}</span>';
$string['userdatemodified'] = 'modificado o <span>{$a}</span>';
$string['userplan'] = 'Planificador do obradoiro';
$string['userplan_help'] = 'O planificador do obradoiro amosa todas as fases da actividade e a lista de tarefas de cada fase. A fase actual vese resaltada e indícanse as tarefas rematadas cunha marca de verificación';
$string['useselfassessment'] = 'Empregar a autoavaliación';
$string['useselfassessment_desc'] = 'Os alumnos poden avaliar o seu propio traballo';
$string['useselfassessment_help'] = 'Se está activado, un usuario pode ser asignado a sua propia entrega para avaliala e recibirá una cualificación pola avaliación, ademais dunha cualificación pola propia entrega.';
$string['weightinfo'] = 'Ponderación: {$a}';
$string['withoutsubmission'] = 'Revisor sen entrega propia';
$string['workshop:addinstance'] = 'Engadir un novo obradoiro';
$string['workshop:allocate'] = 'Asignar entregas para revisar';
$string['workshop:editdimensions'] = 'Editar o formato de avaliación';
$string['workshop:ignoredeadlines'] = 'Ignorar as restricións de tempo';
$string['workshop:manageexamples'] = 'Administrar as entregas de exemplo';
$string['workshopname'] = 'Nome do obradoiro';
$string['workshop:overridegrades'] = 'Anular as cualificacións calculadas';
$string['workshop:peerassess'] = 'Avaliar por pares';
$string['workshop:publishsubmissions'] = 'Publicar as entregas';
$string['workshop:submit'] = 'Entregar';
$string['workshop:switchphase'] = 'Cambiar a fase';
$string['workshop:view'] = 'Ver o obradoiro';
$string['workshop:viewallassessments'] = 'Ver todas as avaliacións';
$string['workshop:viewallsubmissions'] = 'Ver todas as entregas';
$string['workshop:viewauthornames'] = 'Ver os nomes dos autores';
$string['workshop:viewauthorpublished'] = 'Ver os autores das entregas publicadas';
$string['workshop:viewpublishedsubmissions'] = 'Ver as entregas publicadas';
$string['workshop:viewreviewernames'] = 'Ver os nomes dos revisores';
$string['yourassessment'] = 'A súa avaliación';
$string['yourgrades'] = 'A súa cualificación';
$string['yoursubmission'] = 'A súa entrega';
