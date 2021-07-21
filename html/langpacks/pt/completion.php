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
 * Strings for component 'completion', language 'pt', version '3.11'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Atingir nota';
$string['activities'] = 'Atividades';
$string['activitiescompleted'] = 'Conclusão da atividade';
$string['activitiescompletednote'] = 'Nota: A conclusão da atividade deve estar definida para que esta seja exibida na lista acima.';
$string['activitieslabel'] = 'Atividades / recursos';
$string['activityaggregation'] = 'Requisito da condição:';
$string['activityaggregation_all'] = 'TODAS as atividades selecionadas estão concluídas';
$string['activityaggregation_any'] = 'QUALQUER UMA das atividades selecionadas está concluída';
$string['activitycompletion'] = 'Conclusão da atividade';
$string['activitycompletionupdated'] = 'Alterações guardadas com sucesso';
$string['activitygradenotrequired'] = 'Nota não obrigatória';
$string['affectedactivities'] = 'As alterações irão afetar as seguintes atividades ou recursos (<b>{$a}</b>):';
$string['aggregationmethod'] = 'Requer verificação de';
$string['all'] = 'Todos';
$string['any'] = 'Qualquer';
$string['approval'] = 'Aprovação';
$string['areyousureoverridecompletion'] = 'Tem a certeza de que pretende alterar o estado atual de conclusão desta atividade para este utilizador e assinalá-la como "{$a}"?';
$string['badautocompletion'] = 'Quando seleciona a conclusão automática, tem de ativar pelo menos uma das condições apresentadas abaixo.';
$string['badcompletiongradeitemnumber'] = 'A exigência de nota não pode ser ativada para <b>{$a}</b> porque a avaliação por {$a} não está ativada.';
$string['bulkactivitycompletion'] = 'Editar em massa a conclusão de atividades';
$string['bulkactivitydetail'] = 'Selecione as atividades/recursos que pretende editar em grupo';
$string['bulkcompletiontracking'] = 'Verificação da conclusão';
$string['bulkcompletiontracking_help'] = '<strong>Nenhuma:</strong> Os alunos não assinalam a conclusão da atividade

<strong>Manual:</strong> Os alunos podem marcar manualmente a atividade como concluída

<strong>Condicionada:</strong> Mostrar a atividade como concluída quando estão verificadas determinadas condições';
$string['checkactivity'] = 'Caixa de seleção para atividade/recurso: {$a}';
$string['checkall'] = 'Marcar ou desmarcar todas as atividades e recursos';
$string['checkallsection'] = 'Marcar ou desmarcar todas as atividades e recursos da secção: {$a}';
$string['completeactivity'] = 'Completar a atividade';
$string['completed'] = 'Concluída';
$string['completedunlocked'] = 'Opções de conclusão desbloqueadas';
$string['completedunlockedtext'] = 'Quando guardar as alterações, o estado de conclusão de todos os alunos será apagado. Se não desejar que isto aconteça, não guarde as alterações.';
$string['completedwarning'] = 'Opções de conclusão bloqueadas';
$string['completedwarningtext'] = 'Um ou mais alunos ({$a}) já assinalaram esta atividade como concluída. Se alterar as opções de conclusão irá apagar o estado de conclusão destes alunos, podendo gerar alguma confusão. Por isso, as opções foram bloqueadas e não devem ser desbloqueadas, exceto se for absolutamente necessário.';
$string['completion'] = 'Verificação da conclusão';
$string['completion-alt-auto-enabled'] = 'A atividade é dada como concluída pelo sistema quando se verificarem as condições: {$a}';
$string['completion-alt-auto-fail'] = 'Concluída: {$a} (não atingiu nota de aprovação)';
$string['completion-alt-auto-n'] = 'Não concluída: {$a}';
$string['completion-alt-auto-n-override'] = 'Não concluída: {$a->modname} (marcada por {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Concluída: {$a} (atingiu nota de aprovação)';
$string['completion-alt-auto-y'] = 'Concluída: {$a}';
$string['completion-alt-auto-y-override'] = 'Concluída: {$a->modname} (marcada por {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Os alunos podem assinalar a atividade como concluída: {$a}';
$string['completion-alt-manual-n'] = 'Não concluída: \'{$a}\'. Clique para assinalar como concluída';
$string['completion-alt-manual-n-override'] = 'Não concluída: {$a->modname} (marcada por {$a->overrideuser}). Selecione para marcar como concluída.';
$string['completion-alt-manual-y'] = 'Concluída: \'{$a}\'. Clique para marcar como não concluída';
$string['completion-alt-manual-y-override'] = 'Concluída: {$a->modname} (marcada por {$a->overrideuser}). Selecione para marcar como não concluída.';
$string['completion-fail'] = 'Concluída (não atingiu a nota de aprovação)';
$string['completion-n'] = 'Por concluir';
$string['completion-n-override'] = 'Não concluída (marcada por {$a})';
$string['completion-pass'] = 'Concluída (atingiu a nota de aprovação)';
$string['completion-y'] = 'Concluída';
$string['completion-y-override'] = 'Concluída (marcada por {$a})';
$string['completion_automatic'] = 'Dar como concluída quando se verificarem as seguintes condições';
$string['completion_help'] = 'Se ativar esta opção, a conclusão da atividade será controlada, manualmente ou automaticamente, com base em determinadas condições. Podem ser definidas várias condições, se necessário. Neste caso, a atividade apenas será dada como concluída quando TODAS as condições se verificarem.

As atividades concluídas serão apresentadas na página da disciplina com um visto junto do nome da atividade .';
$string['completion_link'] = 'atividade/conclusão';
$string['completion_manual'] = 'Os alunos podem marcar a atividade como concluída';
$string['completion_none'] = 'Não verificar conclusão da atividade';
$string['completionactivitydefault'] = 'Usar configuração predefinida da atividade';
$string['completiondefault'] = 'Configuração predefinida da verificação da conclusão';
$string['completiondisabled'] = 'Desativada, não mostrar nas configurações das atividades';
$string['completionduration'] = 'Inscrição';
$string['completionenabled'] = 'Ativada, via configurações da conclusão e das atividades';
$string['completionexpected'] = 'Data prevista de conclusão';
$string['completionexpected_help'] = 'Esta configuração especifica a data prevista em que a atividade deve estar concluída.';
$string['completionexpecteddesc'] = 'Conclusão prevista em {$a}';
$string['completionexpectedfor'] = '{$a->instancename} deve estar concluída';
$string['completionicons'] = 'Caixas de verificação da conclusão';
$string['completionicons_help'] = 'Um visto junto ao nome de uma atividade serve para indicar que a atividade está concluída.

Se for exibida uma caixa com o limite tracejado, o visto aparecerá automaticamente quando a atividade for concluída de acordo com as condições definidas pelo professor.

Se for exibida uma caixa com o limite sólido, significa que pode clicar sobre ela para colocar o visto, indicando assim que concluiu a atividade (se mudar de ideias, clique novamente para remover o visto).';
$string['completionmenuitem'] = 'Conclusão';
$string['completionnotenabled'] = 'A conclusão não está ativa';
$string['completionnotenabledforcourse'] = 'A conclusão não está ativa para esta disciplina';
$string['completionnotenabledforsite'] = 'A conclusão não está ativa para este site';
$string['completionondate'] = 'Data de conclusão';
$string['completionondatevalue'] = 'Data em que a disciplina será marcada como concluída';
$string['completionsettingslocked'] = 'Configurações da conclusão bloqueadas';
$string['completionupdated'] = 'Atualização da conclusão da atividade <b>{$a}</b>';
$string['completionusegrade'] = 'Requer nota';
$string['completionusegrade_desc'] = 'Os alunos têm de ter uma nota para concluir a atividade';
$string['completionusegrade_help'] = 'Se ativar esta opção, a atividade é considerada concluída quando for atribuída uma nota ao aluno. Os ícones de aprovação ou reprovação podem aparecer caso tenha sido definida uma nota mínima para aprovação.';
$string['completionview'] = 'Requer visualização';
$string['completionview_desc'] = 'Os alunos têm de visualizar a atividade para a concluir';
$string['configcompletiondefault'] = 'A configuração predefinida para a verificação da conclusão quando são criadas novas atividades.';
$string['configenablecompletion'] = 'Se ativar esta opção, será possível definir as condições de conclusão das disciplinas e das atividades. Recomenda-se que defina condições de conclusão da atividade para que seja mostrada informação relevante aos utilizadores no bloco \'Minhas disciplinas\' no Painel do utilizador.';
$string['confirmselfcompletion'] = 'Confirmar autoconclusão';
$string['courseaggregation'] = 'Requisito da condição:';
$string['courseaggregation_all'] = 'TODAS as disciplinas selecionadas estão concluídas';
$string['courseaggregation_any'] = 'QUALQUER UMA das disciplinas selecionadas está concluída';
$string['coursealreadycompleted'] = 'Já concluiu esta disciplina';
$string['coursecomplete'] = 'Disciplina concluída';
$string['coursecompleted'] = 'Disciplina concluída';
$string['coursecompletedmessage'] = '<p>Parabéns!</p><p>Concluiu a disciplina: <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'Conclusão da disciplina';
$string['coursecompletioncondition'] = 'Condição: {$a}';
$string['coursegrade'] = 'Nota da disciplina';
$string['coursesavailable'] = 'Disciplinas disponíveis';
$string['coursesavailableexplaination'] = 'Nota: As condições de conclusão da disciplina devem estar definidas na disciplina para que esta seja exibida na lista acima.';
$string['criteria'] = 'Critérios';
$string['criteriagroup'] = 'Grupo de critérios';
$string['criteriarequiredall'] = 'Todos os critérios abaixo são exigidos';
$string['criteriarequiredany'] = 'Qualquer dos critérios abaixo é necessário';
$string['csvdownload'] = 'Descarregar em formato de folha de cálculo (UTF-8 .csv)';
$string['datepassed'] = 'Data de aprovação';
$string['days'] = 'Dias';
$string['daysoftotal'] = '{$a->days} de {$a->total}';
$string['defaultcompletion'] = 'Predefinições da conclusão de atividades';
$string['defaultcompletionupdated'] = 'Alterações guardadas com sucesso';
$string['deletecompletiondata'] = 'Apagar informação da conclusão';
$string['dependencies'] = 'Dependências';
$string['dependenciescompleted'] = 'Conclusão de outras disciplinas';
$string['detail_desc:receivegrade'] = 'Obter uma nota';
$string['detail_desc:view'] = 'Visualizar';
$string['editcoursecompletionsettings'] = 'Editar configurações de conclusão da disciplina';
$string['enablecompletion'] = 'Ativar verificação da conclusão';
$string['enablecompletion_help'] = 'Se ativar esta opção, as condições de conclusão da atividade podem ser definidas nas configurações da atividade e/ou podem ser definidas as condições de conclusão da disciplina. Recomenda-se que esta opção esteja ativa para que os dados significativos sejam mostrados no bloco \'Minhas disciplinas\' no Painel do utilizador.';
$string['enrolmentduration'] = 'Duração da inscrição';
$string['enrolmentdurationlength'] = 'O utilizador tem de se manter inscrito por';
$string['err_noactivities'] = 'Não há nenhuma atividade configurada com a verificação da conclusão ativa  na disciplina, por isso não pode ser exibida nenhuma atividade. Pode ativar a verificação da conclusão das atividades editando as suas configurações.';
$string['err_nocourses'] = 'A verificação da conclusão não está ativa em nenhuma outra disciplina, por isso nenhuma pode ser exibida. Ative a verificação da conclusão nas configurações das outras disciplinas.';
$string['err_nograde'] = 'Não foi definida nenhuma nota de aprovação para esta disciplina. Para ativar este tipo de critério deve definir uma nota de aprovação para a disciplina.';
$string['err_noroles'] = 'Não existem papéis com a permissão \'moodle/course:markcomplete\' nesta disciplina.';
$string['err_nousers'] = 'Não existem alunos nesta disciplina ou grupo para o qual as informações sobre conclusões são exibidas. (As informações da conclusão apenas são mostradas aos utilizadores com a permissão \'A ser mostrado nos relatórios de conclusão\'. Esta permissão é permitida apenas para o papel predefinido de aluno, portanto, se não houver alunos, verá esta mensagem.)';
$string['err_settingslocked'] = 'Um ou mais alunos já cumprem os critérios definidos e, por isso, as opções de configuração foram bloqueadas. Desbloquear as opções de verificação da conclusão apagará os dados existentes dos utilizadores e poderá gerar alguma confusão.';
$string['err_system'] = 'Ocorreu um erro interno no sistema. (Os administradores do sistema podem consultar informações sobre o erro para saber mais detalhes)';
$string['eventcoursecompleted'] = 'Disciplina concluída';
$string['eventcoursecompletionupdated'] = 'Atualização da conclusão da disciplina';
$string['eventcoursemodulecompletionupdated'] = 'Atualização da conclusão de atividades da disciplina';
$string['eventdefaultcompletionupdated'] = 'A predefinição da conclusão de atividades da disciplina foi atualizada';
$string['excelcsvdownload'] = 'Descarregar em formato compatível com Excel (.csv)';
$string['fraction'] = 'Fração';
$string['graderequired'] = 'Nota mínima exigida';
$string['gradexrequired'] = 'Nota mínima exigida {$a}';
$string['hiddenrules'] = 'Algumas configurações específicas de <b>{$a}</b> estão ocultas. Para as visualizar, selecione apenas estas atividades.';
$string['inprogress'] = 'Em progresso';
$string['manual'] = 'Manual';
$string['manualcompletionby'] = 'Conclusão manual por outros';
$string['manualcompletionbynote'] = 'Nota: A permissão \'moodle/course:markcomplete\' tem de ser atribuída a um papel para que seja mostrado na lista acima.';
$string['manualselfcompletion'] = 'Conclusão manual pelo próprio';
$string['manualselfcompletionnote'] = 'Nota: Se ativar a a autoconclusão manual, o bloco Autoconclusão deve ser adicionado à disciplina.';
$string['markcomplete'] = 'Marcar como concluída';
$string['markedcompleteby'] = 'Conclusão assinalada por {$a}';
$string['markingyourselfcomplete'] = 'Marcar como concluída';
$string['modifybulkactions'] = 'Altere as ações que pretende usar na edição em grupo';
$string['moredetails'] = 'Mais informações';
$string['nocriteriaset'] = 'Não foram definidos critérios para esta disciplina';
$string['nogradeitem'] = 'A nota mínima não pode ser ativada para \'<b>{$a}</b>\' porque a atividade não tem avaliação.';
$string['notcompleted'] = 'Por concluir';
$string['notenroled'] = 'Não está inscrito como aluno nesta disciplina';
$string['nottracked'] = 'Atualmente não está a ser monitorizado pela verificação da conclusão nesta disciplina';
$string['notyetstarted'] = 'Ainda não iniciou';
$string['overallaggregation'] = 'Requisitos de conclusão';
$string['overallaggregation_all'] = 'A disciplina está concluída quando se verificam TODAS as condições';
$string['overallaggregation_any'] = 'A disciplina está concluída quando se verifica QUALQUER UMA das condições';
$string['pending'] = 'Pendente';
$string['periodpostenrolment'] = 'Período após inscrição';
$string['privacy:metadata:completionstate'] = 'Se a atividade foi concluída';
$string['privacy:metadata:course'] = 'O identificador da disciplina';
$string['privacy:metadata:coursecompletedsummary'] = 'Armazena informação sobre utilizadores que concluíram os critérios de uma disciplina';
$string['privacy:metadata:coursemoduleid'] = 'ID da atividade';
$string['privacy:metadata:coursemodulesummary'] = 'Armazena dados da conclusão da atividade para um utilizador';
$string['privacy:metadata:coursesummary'] = 'Armazena dados da conclusão da disciplina para um utilizador';
$string['privacy:metadata:gradefinal'] = 'Avaliação final recebida pela conclusão da disciplina';
$string['privacy:metadata:overrideby'] = 'O ID do utilizador que remarcou a conclusão de atividade';
$string['privacy:metadata:reaggregate'] = 'Se a conclusão da disciplina foi reagrupada.';
$string['privacy:metadata:timecompleted'] = 'A data/hora da conclusão da disciplina.';
$string['privacy:metadata:timeenrolled'] = 'A data/hora em que o utilizador foi inscrito na disciplina.';
$string['privacy:metadata:timemodified'] = 'A data/hora em que a conclusão da atividade foi modificada';
$string['privacy:metadata:timestarted'] = 'A data/hora de início da disciplina.';
$string['privacy:metadata:unenroled'] = 'Se foi cancelada a inscrição do utilizador na disciplina';
$string['privacy:metadata:userid'] = 'O ID do utilizador com dados da conclusão da disciplina e da atividade';
$string['privacy:metadata:viewed'] = 'Se a atividade foi visualizada';
$string['progress'] = 'Progresso do aluno';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Progresso: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Reconhecimento de aprendizagem anterior';
$string['remainingenroledfortime'] = 'Manter-se inscrito por um determinado período de tempo';
$string['remainingenroleduntildate'] = 'Manter-se inscrito até uma determinada data';
$string['reportpage'] = 'Mostrar participantes {$a->from} a {$a->to} de {$a->total}.';
$string['requiredcriteria'] = 'Critério obrigatório';
$string['resetactivities'] = 'Repor conclusão para todas as atividades e recursos selecionados';
$string['restoringcompletiondata'] = 'A registar dados de conclusão';
$string['roleaggregation'] = 'Requisito da condição:';
$string['roleaggregation_all'] = 'TODOS os papéis confirmam manualmente a conclusão';
$string['roleaggregation_any'] = 'QUALQUER UM dos papéis confirma manualmente a conclusão';
$string['roleidnotfound'] = 'ID do papel de utilizador \'{$a}\' não encontrado';
$string['saved'] = 'Guardado';
$string['seedetails'] = 'Ver detalhes';
$string['select'] = 'Selecionar';
$string['self'] = 'Auto';
$string['selfcompletion'] = 'Autoconclusão';
$string['showcompletionconditions'] = 'Mostrar condições de conclusão da atividade';
$string['showcompletionconditions_help'] = 'As condições de conclusão da atividade são sempre mostradas na página da atividade. Esta configuração determina se as condições de conclusão da atividade também são mostradas abaixo de cada atividade na página da disciplina.';
$string['showinguser'] = 'A mostrar utilizador';
$string['unenrolingfromcourse'] = 'Cancelar inscrição na disciplina';
$string['unenrolment'] = 'Cancelamento da inscrição';
$string['unit'] = 'Unidade';
$string['unlockcompletion'] = 'Desbloquear opções de conclusão';
$string['unlockcompletiondelete'] = 'Desbloquear opções de conclusão e apagar dados de conclusão do utilizador';
$string['updateactivities'] = 'Atualizar o estado de conclusão das atividades selecionadas';
$string['usealternateselector'] = 'Usar o seletor alternativo de disciplinas';
$string['usernotenroled'] = 'O utilizador não está inscrito nesta disciplina';
$string['viewcoursereport'] = 'Ver relatório da disciplina';
$string['viewingactivity'] = 'Visualizar {$a}';
$string['withconditions'] = 'Com condições:';
$string['writingcompletiondata'] = 'A registar dados da conclusão';
$string['xdays'] = '{$a} dias';
$string['yourprogress'] = 'O seu progresso';
