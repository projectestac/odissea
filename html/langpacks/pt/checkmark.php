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
 * Strings for component 'checkmark', language 'pt', version '3.11'.
 *
 * @package     checkmark
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absent'] = 'Faltou';
$string['activateindividuals'] = 'Ativar a função individual';
$string['addnewgroupoverride'] = 'Adicionar exceção para grupo';
$string['addnewuseroverride'] = 'Adicionar exceção para utilizador';
$string['addsubmission'] = 'Adicionar submissão';
$string['all'] = 'Tudo';
$string['all_absent'] = 'Todos os participantes que faltaram';
$string['all_attendant'] = 'Todos os participantes presentes';
$string['all_unknown'] = 'Com estado desconhecido na assiduidade';
$string['all_with_presentationgrading'] = 'Todos os participantes com nota da apresentação';
$string['all_without_presentationgrading'] = 'Todos os participantes sem nota da apresentação';
$string['allowresubmit'] = 'Pode repetir a submissão';
$string['allowresubmit_help'] = 'Se ativar esta opção, os alunos podem voltar a submeter as checkmarks depois de terem sido avaliadas (para serem reavaliadas).';
$string['allowsubmissionsfromdate'] = 'Permitir submissões após';
$string['allowsubmissionsfromdate_help'] = 'Se ativar esta opção, os alunos não poderão submeter antes dessa data. Se desativada, os alunos poderão submeter imediatamente.';
$string['alreadygraded'] = 'A sua submissão já foi avaliada e não é permitido voltar a submeter.';
$string['alwaysshowdescription'] = 'Mostrar sempre a descrição';
$string['alwaysshowdescription_help'] = 'Se desativada, a descrição da tarefa acima só será visível para os alunos na data "Permitir submissões após".';
$string['attendance'] = 'Assiduidade';
$string['attendance_help'] = 'A coluna mostra o estado da assiduidade dos alunos:<br /><ul><li>? - desconhecido</li><li>✓ - presente</li><li>✖ - ausente</li></ul>';
$string['attendance_not_set_grade_locked'] = 'A assiduidade de {$a} não pôde ser definida, porque a nota está bloqueada ou foi substituída na pauta.';
$string['attendancegradebook'] = 'Mostrar a assiduidade na pauta';
$string['attendancegradebook_help'] = 'Se ativar esta opção, a assiduidade será mostrada na pauta como um item extra de avaliação:<ul><li>Sem nota - estado desconhecido </li><li>Nota 0 - faltou</li><li> Nota 1 - presente</li></ul>';
$string['attendancegradelink'] = 'Ligar a assiduidade ao cálculo automático das notas das submissões';
$string['attendancegradelink_help'] = 'Se ativar esta opção, pode ligar os registos da assiduidade com as notas da Checkmark calculadas automaticamente. Os pontos do módulo Checkmark são apenas agregados se a assiduidade do participante foi devidamente registada.';
$string['attendancegradelink_hint'] = '<b>Atenção</b>: as notas calculadas automaticamente estão associados à assiduidade.';
$string['attendancestatus'] = 'Estado atual da sua assiduidade';
$string['attendant'] = 'Presente';
$string['autograde_all'] = 'Avaliar todas as submissões';
$string['autograde_confirm'] = 'Está prestes a atualizar as notas e feedback de <strong>{$a}</strong>. As notas e feedback já existentes serão substituídos.';
$string['autograde_confirm_continue'] = 'Tem a certeza que pretende continuar?';
$string['autograde_custom'] = 'Avaliar utilizadores selecionados';
$string['autograde_error'] = 'Ocorreu um erro durante a avaliação automática.';
$string['autograde_failed'] = 'A avaliação automática falhou!';
$string['autograde_no_users_selected'] = 'Nenhum participante foi selecionado para avaliação. Selecione os utilizadores através das caixas de seleção na coluna mais à esquerda da tabela abaixo.';
$string['autograde_non_numeric_grades'] = 'A avaliação automática requer que seja definida uma nota máxima numérica. Isto pode ser definido nas configurações da instância.';
$string['autograde_notsupported'] = 'Esta escala não é suportada pela avaliação automática.';
$string['autograde_one_success'] = 'Avaliação automática efetuada com sucesso! 1 submissão atualizada';
$string['autograde_req'] = 'Avaliar';
$string['autograde_str'] = 'Avaliação automática';
$string['autograde_str_help'] = 'A avaliação automática calcula as notas dos participantes de acordo com os pontos por verificação e número de verificações assinaladas. Todos os pontos são somados e o total é usado como nota para a pauta. <ul><li>Avaliar os  utilizadores selecionados - apenas estes utilizadores serão avaliados. Se um utilizador não enviou nada, será adicionada uma submissão vazia.</li><li>Avaliar os que requerem avaliação - avalia todas as  submissões em que a data de submissão é mais atual do que a data de avaliação correspondente</li><li>Avaliar todas as submissões - todas as submissões presentes são avaliadas (para esta instância). NÃO adiciona submissões vazias.</li></ul><br />A nota é calculada com base nas notas das verificações e número de verificações assinaladas: <ul><li>Avaliação normal: cada verificação é igualmente ponderada (nota com número inteiro). A nota é calculada pela multiplicação da soma de verificações com o quociente da nota da Checkmark com o número de checkmarks.</li><li>Pesos individuais: a nota total é a soma das notas das verificações (de acordo com as configurações da instância).</li></ul>';
$string['autograde_strall'] = 'Todas as submissões';
$string['autograde_strchanged'] = 'Devido à avaliação automática, as notas do(s) aluno(s) <strong>{$a}</strong> serão alteradas.';
$string['autograde_strmultiplesubmissions'] = '{$a} submissões';
$string['autograde_stronesubmission'] = '1 submissão';
$string['autograde_strreq'] = 'Submissões que requerem  atualização da nota';
$string['autograde_success'] = 'Avaliação automática bem sucedida! {$a} submissões atualizadas.';
$string['autograde_users_with_unknown_attendance'] = 'ATENÇÃO: {$a} submissões NÃO puderam ser avaliadas automaticamente devido ao estado desconhecido da assiduidade!';
$string['autogradebuttonstitle'] = 'Calcular as notas das submissões da Checkmark {$a}';
$string['availabledate'] = 'Submissões a partir de';
$string['availabledate_help'] = 'Data de início do período de submissão. Os alunos podem submeter após esta data.';
$string['bulk'] = 'Processamento em grupo';
$string['bulk_help'] = 'Aqui pode executar ações como "configuração da assiduidade", "avaliação automática" ou combinações em várias entradas.<br />
<ul>
<li><strong>marcar como presente:</strong> Os utilizadores selecionados serão registados como presentes</li>
<li><strong>marcar como ausente:</strong> Os utilizadores selecionados serão registados como ausentes</li>
<li><strong>avaliar automaticamente:</strong> Calcular a nota de modo automático para os utilizadores selecionados</li>
<li><strong>marcar como presente e avaliar:</strong> Os utilizadores selecionados serão registados como presentes e serão classificados automaticamente a seguir</li>
<li><strong>marcar como ausente e avaliar:</strong> Os utilizadores selecionados serão registados como ausentes e serão classificados automaticamente a seguir</li>
</ul><br />
<strong>Nota:</strong> Se a assiduidade estiver associada às notas, somente os utilizadores presentes receberão pontos para as verificações assinaladas.
Os utilizadores ausentes terão 0 pontos e os utilizadores com estado de assiduidade desconhecido serão ignorados!';
$string['bulk_no_users_selected'] = 'Nenhum participante foi selecionado. Selecione os utilizadores através das caixas de seleção na coluna mais à esquerda da tabela abaixo.';
$string['cannotviewcheckmark'] = 'Não tem permissões para visualizar esta checkmark';
$string['cantfixevent'] = 'Não foi possível corrigir o evento com ID {$a->id}, com o nome {$a->name} ({$a->matches} ocorrências).';
$string['cfg_nowarning'] = 'Sem aviso';
$string['cfg_pdfexampleswarning'] = 'Quantidade de verificações para mostrar aviso na exportação para PDF';
$string['cfg_pdfexampleswarning_desc'] = 'Quantidade mínima de verificações que acima da qual será mostrado um aviso, uma vez que não pode ser garantida uma exportação razoável em PDF. Normalmente não tem que alterarar isto, exceto quando não quer que seja mostrado o aviso ou se quiser alterar a sua instalação.';
$string['checkbrokengradebookgrades'] = 'Verificar ligação das notas à pauta';
$string['checkbrokengradebookgrades_desc'] = 'Devido a um bug na versão 2.9.1 da Checkmark, as notas não foram transferidas para a pauta corretamente.
As seguintes submissões foram afetadas por este bug:';
$string['checkbrokengradebookgrades_mail'] = 'Devido a um bug na versão 2.9.1 da Checkmark, as notas não foram transferidas para a pauta corretamente.
As seguintes submissões foram afetadas por este bug e foram corrigidas automaticamente:';
$string['checkmark:addinstance'] = 'Adicionar uma instância Checkmark';
$string['checkmark:grade'] = 'Avaliar a Checkmark';
$string['checkmark:gradepresentation'] = 'Avaliar a apresentação';
$string['checkmark:manageoverrides'] = 'Gerir exceções da Checkmark';
$string['checkmark:submit'] = 'Submeter a checkmark';
$string['checkmark:trackattendance'] = 'Registar assiduidade dos alunos';
$string['checkmark:view'] = 'Ver a checkmark';
$string['checkmark:view_preview'] = 'Pré-visualizar';
$string['checkmark_overviewsummary'] = 'Foram marcadas {$a->checked_examples} / {$a->total_examples} verificações ({$a->checked_grade} / {$a->total_grade} pontos)<br />{$a->grade}<br />';
$string['checkmark_overviewsummary_nograde'] = 'Foram marcadas {$a->checked_examples} / {$a->total_examples} verificações<br />{$a->grade}<br />';
$string['checkmark_summary'] = 'Foram marcadas <span id="examples">{$a->checked_examples}</span> do total de {$a->total_examples} verificações.<br />(Nota: <span id="grade">{$a->checked_grade}</span> do máximo de {$a->total_grade} pontos)';
$string['checkmarkdetails'] = 'Detalhes da Checkmark';
$string['checkmarkisdue'] = 'O trabalho da Checkmark já fechou';
$string['checkmarkmail'] = '{$a->grader} publicou um feedback na sua
submissão da Checkmark \'{$a->checkmark}\'

Pode visualizar o feedback anexado à sua submissão em:

{$a->url}';
$string['checkmarkmailhtml'] = '{$a->grader} publicou um feedback na sua
submissão da Checkmark \'<i>{$a->checkmark}</i>\'<br /><br />

Pode visualizar o feedback anexado à sua <a href="{$a->url}">submissão</a>.';
$string['checkmarkmailsmall'] = '{$a->grader} publicou um feedback na sua
submissão da Checkmark \'{$a->checkmark}\'. Pode visualizar o feedback anexado à sua submissão';
$string['checkmarkname'] = 'Nome da Checkmark';
$string['checkmarks'] = 'Checkmarks';
$string['checkmarkstatstitle'] = 'Checkmark global da disciplina';
$string['checkmarksubmission'] = 'Submissões da Checkmark';
$string['checksummary'] = 'Resumo da Checkmark';
$string['choose'] = 'Com a seleção...';
$string['comment'] = 'Comentário';
$string['completiondetail:submit'] = 'Criar submissão';
$string['completionsubmit'] = 'O aluno tem de submeter nesta atividade para concluí-la';
$string['configshowrecentsubmissions'] = 'Todos podem ver as notificações de envios em relatórios de atividade recente.';
$string['couldfixevent'] = 'Pode ser corrigido com sucesso o evento com ID {$a->id}, com o nome de {$a->name}.';
$string['count_individuals_mismatch'] = 'A quantidade de nomes individuais ({$a->namecount}) não corresponde à quantidade de notas individuais ({$a->gradecount})!';
$string['coursemisconf'] = 'Existe um erro na configuração da disciplina';
$string['currentgrade'] = 'Nota atual na pauta';
$string['custom_settings'] = 'definições personalizadas';
$string['cutoffdate'] = 'Data de fecho';
$string['cutoffdate_help'] = 'Se ativar esta opção, a data corresponde ao final do período de submissão. Após esta data, nenhum aluno será capaz de submeter. Se desativar a opção, os alunos podem submeter mesmo após a data limite';
$string['data_preview'] = 'Pré-visualizar dados';
$string['data_preview_help'] = 'Clique em [+] ou [-] para mostrar ou ocultar colunas na pré-visualização da impressão.';
$string['data_settings'] = 'Configurações da impressão';
$string['datasettingstitle'] = 'Configurações dos dados';
$string['dates_overwritten'] = 'As datas foram substiuídas!';
$string['defaultsettings'] = 'Configurações predefinidas das checkmarks';
$string['defaultsettings_help'] = 'Estas configurações definem os valores predefinidos para todas as novas atividades Checkmark.';
$string['deletealloverrides'] = 'Eliminar todas as datas substituídas';
$string['deleteallsubmissions'] = 'Apagar todas as submissões';
$string['description'] = 'Descrição';
$string['downloadall'] = 'Descarregar todas checkmarks como ZIP';
$string['due'] = 'Checkmark fora de prazo';
$string['duedate'] = 'Data limite das submissões';
$string['duedate_help'] = 'Fim do período normal de submissão. Após esta data, os alunos podem submeter, mas será marcada como fora de prazo.';
$string['duedateno'] = 'Sem data limite';
$string['duedatevalidation'] = 'A data limite deve ser posterior à data disponível';
$string['early'] = '{$a} antes do fim do prazo';
$string['editmysubmission'] = 'Editar a minha submissão';
$string['editoverride'] = 'Editar exceção';
$string['element_disabled'] = 'O elemento abaixo está destivado devido a submissões já existentes.';
$string['elements_disabled'] = 'Os elementos abaixo estão destivados devido a submissões já existentes.';
$string['emailstudents'] = 'Alertas por e-mail para os alunos';
$string['emailteachermail'] = '{$a->username} atualizou a sua submissão da
checkmark \'{$a->checkmark}\' em {$a->dayupdated} às {$a->timeupdated}.

Pode ser visualizada em :

{$a->url}';
$string['emailteachermailhtml'] = '{$a->username} atualizou a sua submissão da
checkmark <i>\'{$a->checkmark}\' em {$a->dayupdated} às {$a->timeupdated}</i><br /><br />

Pode ser visualizada <a href="{$a->url}">nesta hiperligação</a>.';
$string['emailteachers'] = 'Enviar alerta por e-mail aos professores';
$string['emailteachers_help'] = 'Se ativar esta opção, os professores recebem uma notificação por e-mail sempre que os alunos adicionam ou atualizam uma submissão.

Apenas são notificados os professores que são capazes de avaliar a checkmark específica. Por exemplo, se a disciplina usar grupos separados, os professores restritos a grupos específicos não receberão notificação sobre os alunos de outros grupos.';
$string['emptysubmission'] = 'Ainda não efetuou qualquer submissão';
$string['enablenotification'] = 'Enviar notificações';
$string['enablenotification_help'] = 'Se ativar esta opção, os alunos serão notificados sempre que as submissões (ou apresentações correspondentes) são avaliadas ou é registada a sua assiduidade.';
$string['end_of_submission_for'] = 'Fim da submissão para {$a}';
$string['errornosubmissions'] = 'Não existem submissões disponíveis para descarregar';
$string['eventexamplecreated'] = 'Verificação criada';
$string['eventexampledeleted'] = 'Verificação apagada';
$string['eventexampleupdated'] = 'Verificação atualizada';
$string['eventgradeupdated'] = 'Nota atualizada';
$string['eventoverridecreated'] = 'Criada exceção da Checkmark';
$string['eventoverridedeleted'] = 'Exceção da Checkmark apagada';
$string['eventoverrideprioritychanged'] = 'Prioridade trocada da exceção de grupo da Checkmark';
$string['eventoverrideupdated'] = 'Exceção da Checkmark atualizada';
$string['eventsubmissionoverwritten'] = 'Submissão substituída';
$string['eventsubmissionsexported'] = 'Submissão exportada';
$string['eventsubmissionupdated'] = 'Submissão atualizada';
$string['eventviewprintpreview'] = 'Efetuada a pré-visualização';
$string['eventviewsubmissions'] = 'Submissões visualizadas';
$string['example_preview_title'] = 'Pré-visualizar';
$string['example_preview_title_help'] = 'A pré-visualização mostra uma visão geral das opções da Checkmark.';
$string['examplecount_changed_after_submission'] = 'O número de verificações não pode ser alterado após haver uma submissão.';
$string['examplegrades'] = 'Notas individuais';
$string['examplegrades_help'] = 'Definir o peso para cada verificação. Estes serão separados pelo delimitador pretendido, o que está entre os parênteses.';
$string['examplenames'] = 'Nomes individuais';
$string['examplenames_help'] = 'Definir o nome de cada verificação. Estes serão separados pelo delimitador pretendido, o que está entre os parênteses.';
$string['exampleprefix'] = 'Prefixo individual';
$string['exampleprefix_help'] = 'Pode adicionar um prefixo individual que será automaticamente colocado na frente de todos os nomes individuais. Este campo pode ficar vazio.';
$string['export'] = 'Exportar';
$string['exporttemplate_grades'] = 'Lista de classificação simples';
$string['exporttemplate_grades_extended'] = 'Lista de classificação completa';
$string['exporttemplate_signature'] = 'Lista de assinaturas simples';
$string['exporttemplate_signature_extended'] = 'Lista de assinaturas completa';
$string['exporttemplates'] = 'Modelo';
$string['exporttemplates_help'] = 'Exportação rápida com modelos predefinidos<br />
<ul>
    <li><strong>Definições personalizadas:</strong><br />
        nenhum modelo é usado, todas as configurações devem ser feitas manualmente</li>
    <li><strong>Lista de classificação simples:</strong><br />
        retrato, fonte pequena, com cabeçalho/rodapé, nomes impressos numa linha<br />
        contém as colunas: [fullname, examples, grade]</li>
    <li><strong>Lista de classificação completa:</strong><br />
        paisagem, fonte pequena, com cabeçalho/rodapé, nomes impressos numa linha<br />
        contém as colunas: [fullname, idnumber, examples, checked, grade]</li>
    <li><strong>Lista de assinaturas simples:</strong><br />
       retrato, fonte pequena, com cabeçalho/rodapé, nomes impressos numa linha<br />
        contém as colunas: [fullname, examples, signature]</li>
    <li><strong>Lista de assinaturas completa:</strong><br />
         paisagem, fonte pequena, com cabeçalho/rodapé, nomes impressos numa linha<br />
        contém as colunas: [fullname, idnumber, examples, checked, grade, signature]</li>
</ul>';
$string['extended_until'] = 'Prolongado até {$a}';
$string['failedupdatefeedback'] = 'Falha ao atualizar o feedback da submissão para o utilizador {$a}';
$string['feedback'] = 'Feedback';
$string['feedbackfromteacher'] = 'Feedback recebido de {$a}';
$string['feedbackupdated'] = 'Foram atualizados os feedback de {$a} utilizadores';
$string['filter'] = 'Filtro';
$string['filtergrantedextension'] = 'Prolongar prazo';
$string['filternotsubmitted'] = 'Não submetido';
$string['firstexamplenumber'] = 'Número da primeira verificação';
$string['firstexamplenumber_help'] = 'Número inicial. Aos seguintes será adicionado o valor 1 ao número do seu antecessor.';
$string['flexiblenaming'] = 'Nome/avaliação individual';
$string['flexiblenaming_help'] = 'Se ativar esta opção, serão usados nomes personalizados e notas específicas para cada verificação.';
$string['forced'] = 'substituído pelo professor';
$string['forcesinglelinenames'] = 'Forçar nomes numa linha única';
$string['forcesinglelinenames_help'] = '<p>Obriga o nome a ser escrito numa única linha no PDF.</p>
<p><b>Atenção</b>: Se houver muitas colunas ou o nome for muito longo, ficará distorcido e pode tornar-se ilegível. Se isso acontecer, oculte algumas colunas de menor importância para ter mais espaço para o nome.</p>';
$string['format'] = 'Formato';
$string['grade'] = 'Nota';
$string['grade_attendence_name'] = 'Nota da assiduidade';
$string['grade_automatically'] = 'avaliar automaticamente';
$string['grade_checks_name'] = 'Nota das checkmarks';
$string['grade_help'] = 'Quando as funções individuais estão ativadas a nota total tem que ser a soma das notas de todas as verificações (máximo 100).<br />Quando está a usar valores padrão, a nota tem que ser um múltiplo inteiro do número de verificações. Deste modo, os pontos por verificação são ajustados automaticamente.<br />Com o Javascript ativado, e se usar funções individuais, a nota é selecionada automaticamente. Se usar valores padrão com o Javascript ativado, apenas serão aceites múltiplos inteiros do número de verificações.';
$string['grade_mismatch'] = 'A nota tem de ser um múltiplo inteiro da quantidade de verificações!';
$string['grade_presentation_name'] = 'Nota da apresentação';
$string['graded'] = 'Avaliada';
$string['gradesum_mismatch'] = 'A soma das notas individuais não corresponde às notas totais escolhidas ({$a->gradesum}/{$a->maxgrade})!';
$string['gradingdue'] = 'Lembrar de classificar até';
$string['gradingdue_help'] = 'Data prevista até à qual a avaliação dos trabalhos deve estar concluída. Esta data é usada para dar prioridade às notificações no painel dos professores.';
$string['gradingsummary'] = 'Resumo da avaliação';
$string['grant_extension'] = 'prolongar prazo';
$string['group_dates_overridden'] = 'As datas para o grupo {$a} foram substituídas!';
$string['groupoverride_edit'] = 'Editar exceção para o grupo {$a}';
$string['groupoverrides'] = 'Exceções de grupo';
$string['groupsnone'] = 'Não pode aceder a nenhum grupo.';
$string['guestnosubmit'] = 'Os visitantes não têm permissão para submeter. Tem que autenticar-se/registar-se antes de poder enviar a sua resposta.';
$string['guestnoupload'] = 'Os visitantes não têm permissão para enviar ficheiros';
$string['hidealltoggle'] = 'Ocultar todas as verificações';
$string['hideexamples'] = 'Ocultar as verificações na tabela das submissões';
$string['hideintro'] = 'Ocultar descrição até à data "Disponível a partir de"';
$string['hideintro_help'] = 'Se ativar esta opção, a descrição da Checkmark estará oculta até à data "Disponível a partir de". Apenas o nome da Checkmark é apresentado.';
$string['inactiveoverridehelp'] = '* O aluno não está no grupo ou não tem o papel correto para realizar a tarefa';
$string['informstudents'] = 'Enviar notificações';
$string['informstudents_help'] = 'Se ativar esta opção, os participantes irão recebe uma notificação sobre o estado da sua assiduidade.';
$string['introattachments'] = 'Ficheiros adicionais';
$string['introattachments_help'] = 'Podem ser adicionados ficheiros adicionais para uso na Checkmark, como por exemplo, modelos de resposta. As hiperligações para descarregar os ficheiros serão exibidas na página da Checkmark, abaixo da descrição.';
$string['invalidcheckmark'] = 'Checkmark incorreta';
$string['invalidid'] = 'O ID da Checkmark estava incorreto';
$string['invaliduserid'] = 'Número ID do utilizador incorreto';
$string['itemstocount'] = 'Contagem';
$string['lastgrade'] = 'Última nota';
$string['late'] = '{$a} fora de prazo';
$string['latesubmissions'] = 'Submissões fora do prazo';
$string['latesubmissionsaccepted'] = 'Permitido até {$a}';
$string['latesubmissionwarning'] = 'A submissão foi rejeitada uma vez que foi feita fora de prazo';
$string['manycolumnsinpdfwarning'] = '<b>Atenção</b>: Devido ao grande número de verificações e ao espaço limitado, não pode ser assegurada uma exportação razoável em PDF. Tente ocultar colunas desnecessárias ou exportar para XLSX ou ODS e adapte a aparência no programa de folha de cálculo.';
$string['maximumgrade'] = 'Nota máxima';
$string['messageprovider:checkmark_updates'] = 'Notificações da Checkmark';
$string['modulename'] = 'Checkmark';
$string['modulename_help'] = 'As Checkmarks permitem que os professores especifiquem uma tarefa na qual os alunos devem assinalar as verificações que podem ser avaliadas.';
$string['modulenameplural'] = 'Checkmarks';
$string['needattendanceentrycount'] = 'Requer registo da assiduidade';
$string['newsubmissions'] = 'Checkmarks submetidas';
$string['noattempts'] = 'Nenhuma tentativa efetuada';
$string['nochangeviolation'] = 'Tem de substituir pelo menos uma das configurações da Checkmark.';
$string['nocheckmarks'] = 'Ainda não existe qualquer Checkmark';
$string['noclose'] = 'Sem data de fecho';
$string['nolatesubmissions'] = 'Não são permitidas';
$string['nomoresubmissions'] = 'Não são permitidas mais submissões.';
$string['nomoresubmissionsaccepted'] = 'Permitido apenas aos participantes que receberam prolongamento do prazo';
$string['nonnegativeintrequired'] = 'Tem ser inteiro e maior ou igual a zero (>=0)!';
$string['noopen'] = 'Sem data de início';
$string['norequiregrading'] = 'Não existem checkmarks que seja necessário avaliar';
$string['nostudents'] = 'Não existem utilizadores para mostrar!';
$string['nostudentsmatching'] = 'Não existem utilizadores que correspondam às configurações atuais!';
$string['nosubmission'] = 'Nenhuma checkmark foi submetida';
$string['nosubmisson'] = 'Nenhuma checkmark foi submetida';
$string['notactive'] = 'Não ativo';
$string['notavailableyet'] = 'Desculpe, esta Checkmark ainda não está disponível.<br />As instruções da Checkmark serão mostradas aqui na data indicada abaixo.';
$string['notgradedyet'] = 'Ainda não avaliado';
$string['notsubmittedyet'] = 'Ainda não submetido';
$string['nousers'] = 'Não existem utilizadores para mostrar!';
$string['numberofexamples'] = 'Número de verificações';
$string['numberofexamples_help'] = 'Número de verificações nesta Checkmark';
$string['numberofparticipants'] = 'Participantes';
$string['numberofsubmissionsneedgrading'] = 'Necessita avaliação';
$string['numberofsubmittedassignments'] = 'Submetido';
$string['open'] = 'Início';
$string['operation'] = 'Operação';
$string['optimum'] = 'Ótimo';
$string['optionalsettings'] = 'Configurações opcionais';
$string['overridden'] = 'Substituída';
$string['override'] = 'Substituir';
$string['override_and_next'] = 'Substituir e criar nova';
$string['override_groups_dates'] = 'Substituir datas dos grupos';
$string['override_users_dates'] = 'Substituir datas dos utilizadores';
$string['overridedeletegroupsure'] = 'Tem a certeza de que pretende apagar a exceção para o grupo {$a}?';
$string['overridedeleteusersure'] = 'Tem a certeza de que pretende apagar a exceção para o utilizador {$a}?';
$string['overrides'] = 'Exceções';
$string['page-mod-checkmark-submissions'] = 'Página de submissão do módulo Checkmark';
$string['page-mod-checkmark-view'] = 'Página principal do módulo Checkmark';
$string['page-mod-checkmark-x'] = 'Todas as páginas do módulo Checkmark';
$string['pagesize'] = 'Número de submissões por página';
$string['pagesize_help'] = 'Se o número de participantes registados na disciplina for muito grande, escolha "Ótimo" para otimizar a distribuição das entradas da lista de acordo com o tamanho do texto escolhido e a orientação da página.';
$string['pdfpageorientation'] = 'Orientação da página';
$string['pdfpagesize'] = 'Número de submissões por página';
$string['pdfpagesize_help'] = 'Se o número de participantes registados na disciplina for muito grande,
escolha "Ótimo" para otimizar a distribuição das entradas da lista de acordo com o tamanho de texto escolhido e a orientação da página.';
$string['pdfprintheader'] = 'Imprimir cabeçalho/rodapé';
$string['pdfprintheader_help'] = 'Se ativar esta opção, os cabeçalhos e rodapés serão impressos';
$string['pdfprintheaderlong'] = 'Se ativar esta opção, os cabeçalhos e rodapés serão impressos';
$string['pdfsettings'] = 'Configurações do PDF';
$string['pdftextsize'] = 'Tamanho do texto';
$string['pluginadministration'] = 'Administração da Checkmark';
$string['pluginname'] = 'Checkmark';
$string['popupinnewwindow'] = 'Abrir numa janela pop-up';
$string['posintrequired'] = 'Tem de ser inteiro e maior que zero (> 0)!';
$string['posintst100required'] = 'Tem que ser um inteiro do intervalo [0,100] (0 <= X <= 100)!';
$string['presentationfeedback'] = 'Feedback da apresentação';
$string['presentationfeedback_table'] = 'Feedback (apresentação)';
$string['presentationgrade'] = 'Nota da apresentação';
$string['presentationgrade_short'] = 'PT';
$string['presentationgrade_table'] = 'Nota (apresentação)';
$string['presentationgradebook'] = 'Mostrar nota da apresentação na pauta';
$string['presentationgradebook_help'] = 'Esta opção determina se a nota da apresentação é mostrada, ou não, na pauta como item extra de avaliação.';
$string['presentationgrading'] = 'Registar notas das apresentações';
$string['presentationgrading_grade'] = 'Avaliar a apresentação';
$string['presentationgrading_grade_help'] = 'Estes elementos determinam como pode ser avaliada a apresentação. Para a nota pode selecionar: <ul><li><strong>nenhuma</strong> - nenhuma nota será registada, mas pode usar um texto como feedback.</li><li><strong>escala</strong> - use uma escala para avaliar a apresentação do aluno </li><li><strong>pontos</strong> - use um valor numérico para avaliar a apresentação do aluno</li></ul>';
$string['presentationgrading_help'] = 'Se ativar esta opção, as notas da apresentação podem ser registadas como elemento informativo extra da avaliação.';
$string['presentationgradingcount'] = 'Apresentações avaliadas';
$string['presentationheader'] = 'Avaliação da apresentação';
$string['printsettingstitle'] = 'Configurações da exportação';
$string['privacy:metadata:attendance'] = 'Estado da assiduidade do utilizador';
$string['privacy:metadata:grade'] = 'Nota do utilizador';
$string['privacy:metadata:submission:timemodified'] = 'A data e a hora mais recentes em que a submissão foi atualizada/modificada.';
$string['privacy:metadata:subsys:message'] = 'A atividade Checkmark envia mensagens para os utilizadores se receberem feedback e para os professores se alguém submeter (se estiver ativo).';
$string['privacy:metadata:timeavailable'] = 'Intervalo de tempo desde o início do período de submissão.';
$string['privacy:metadata:timedue'] = 'Data limite para submeter.';
$string['privacy:path:feedback'] = 'feedback';
$string['privacy:path:submission'] = 'submissão';
$string['quickgrade'] = 'Permitir a avaliação rápida';
$string['quickgrade_help'] = 'Se ativar esta opção, várias checkmarks podem ser avaliadas numa só página. Adicione as notas e comentários, e em seguida, clique no botão "Guardar tudo" para gravar todas as alterações efetuadas na página.';
$string['remembertoupdategrades'] = 'Nesta Checkmark existem submissões que foram avaliadas automaticamente. É altamente recomendado que atualize ou reavalie as submissões se alterou as notas das verificações!';
$string['requiregrading'] = 'Requerem avaliação';
$string['requiresubmit'] = 'Requer submissão';
$string['reviewed'] = 'Revistas';
$string['saveallfeedback'] = 'Guardar tudo';
$string['search:activity'] = 'Checkmark - informações da atividade';
$string['select'] = 'Selecionar';
$string['selection'] = 'Com a seleção';
$string['sendnotifications'] = 'Enviar notificações';
$string['seperatenamecolumns'] = 'Dividir o nome completo em colunas separadas';
$string['seperatenamecolumns_help'] = 'Se ativar esta opção, todas as partes que constituem o nome completo (nome e apelido) serão divididas em colunas separadas.';
$string['setabsent'] = 'marcar como ausente';
$string['setabsentandgrade'] = 'marcar como ausente e avaliar';
$string['setattendant'] = 'marcar como presente';
$string['setattendantandgrade'] = 'marcar como presente e avaliar';
$string['showalltoggle'] = 'Mostrar todas as verificações';
$string['showrecentsubmissions'] = 'Mostrar as submissões recentes';
$string['signature'] = 'Assinatura';
$string['start'] = 'Executar';
$string['str_userid'] = 'ID do aluno';
$string['strallononepage'] = 'Imprimir todas as páginas';
$string['strassignment'] = 'Tarefa';
$string['strautograded'] = '[avaliação automática]';
$string['strexample'] = 'Verificação';
$string['strexamples'] = 'Verificações';
$string['strlandscape'] = 'Paisagem';
$string['strlarge'] = 'Grande';
$string['strmedium'] = 'Médio';
$string['strpapersizes'] = 'Tamanho do papel';
$string['strpoint'] = 'Ponto';
$string['strpoints'] = 'Pontos';
$string['strportrait'] = 'Retrato';
$string['strprint'] = 'Descarregar ficheiro';
$string['strprintpreview'] = 'Exportar';
$string['strprintpreviewtabalt'] = 'Abrir exportação';
$string['strrefreshdata'] = 'Atualizar pré-visualização dos dados';
$string['strsmall'] = 'Pequeno';
$string['strstdexamplecount'] = 'Contagem de verificações';
$string['strstdexamplecountdesc'] = 'Número predefinido de verificações que será usado';
$string['strstdexamplestart'] = 'Número da primeira verificação';
$string['strstdexamplestartdesc'] = 'Número da primeira verificação';
$string['strstdgrades'] = 'Notas predefinidas';
$string['strstdgradesdesc'] = 'Notas se for usada a "Nomeação individual"';
$string['strstdnames'] = 'Nomes predefinidos';
$string['strstdnamesdesc'] = 'Nomes das verificações se for usada a "Nomeação individual"';
$string['strsubmissions'] = 'Submissões';
$string['strsubmissionstabalt'] = 'Visualização de submissões abertas';
$string['strsum'] = 'Soma';
$string['strvalidmsgtime'] = 'Duração da validade da mensagem';
$string['strvalidmsgtimedesc'] = 'Número de dias após os quais as notificações da avaliação para os utilizadores já não serão enviadas.';
$string['studentpreview'] = 'Pré-visualização do aluno';
$string['submission'] = 'Submissão';
$string['submissionfeedback'] = 'Feedback da submissão';
$string['submissions'] = 'Submissões';
$string['submissionsamount'] = '{$a->submitted} de {$a->total} alunos já submeteram.';
$string['submissionsaved'] = 'As suas alterações foram gravadas';
$string['submissionsgraded'] = '{$a->graded} de {$a->all} submissões avaliadas';
$string['submissionsnotgraded'] = '{$a->reqgrading} de {$a->all} submissões não avaliadas';
$string['submitcheckmark'] = 'Submeta utilizando este formulário';
$string['submitted'] = 'Submetidas';
$string['submitted_entries'] = 'Submetidas';
$string['summary_abs'] = 'x/y verificações assinaladas';
$string['summary_rel'] = '% verificações assinaladas';
$string['timeremaining'] = 'Tempo restante';
$string['trackattendance'] = 'Registar assiduidade';
$string['trackattendance_help'] = 'Se ativar esta opção, pode registar a assiduidade dos participantes.';
$string['ungraded'] = 'Sem nota';
$string['unknown'] = 'Desconhecido';
$string['user_dates_overridden'] = 'As datas do utilizador foram substituídas!';
$string['usermisconf'] = 'Existe um erro na configuração do utilizador';
$string['usernosubmit'] = 'Desculpe mas não tem permissão para submeter qualquer checkmark.';
$string['useroverride'] = 'Exceção de utilizador';
$string['useroverride_edit'] = 'Editar exceção de utilizador';
$string['useroverrides'] = 'Exceções de utilizador';
$string['usersnone'] = 'Nenhum aluno tem acesso a esta tarefa.';
$string['viewfeedback'] = 'Ver notas e feedback da Checkmark';
$string['viewmysubmission'] = 'Ver a minha submissão';
$string['viewsubmissions'] = 'Visualizar todas as submissões';
$string['yoursubmission'] = 'A sua submissão';
$string['zippedgrouppdfs'] = 'Grupos em PDFs separados';
