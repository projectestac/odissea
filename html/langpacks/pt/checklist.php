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
 * Strings for component 'checklist', language 'pt', version '3.11'.
 *
 * @package     checklist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomments'] = 'Adicionar comentários';
$string['additem'] = 'Adicionar';
$string['additemalt'] = 'Adicionar um novo item à lista';
$string['additemhere'] = 'Inserir novo item após este';
$string['addownitems'] = 'Adicionar itens próprios';
$string['addownitems-stop'] = 'Parar de adicionar itens próprios';
$string['allowmodulelinks'] = 'Permitir hiperligações para módulos';
$string['anygrade'] = 'Qualquer';
$string['anygrouping'] = 'Qualquer agrupamento';
$string['autopopulate'] = 'Mostrar módulos da disciplina na lista de verificação';
$string['autopopulate_help'] = 'Isto irá adicionar automaticamente uma lista de todos os recursos e atividades da disciplina atual para a lista de verificação.<br />
Esta lista será atualizada com quaisquer alterações à disciplina, sempre que visitar a página "Editar" da lista de verificação. <br />
Alguns itens podem ser escondidos da lista, clicando no ícone de "ocultar" ao lado destes.<br />
Para remover os itens automáticos da lista, deve alterar esta opção para \'Não\', e em seguida clicar em \'Remover itens da disciplina" na página "Editar".';
$string['autoupdate'] = 'Assinalar quando os módulos são concluídos';
$string['autoupdate2'] = 'Assinalar quando concluir disciplinas ou módulos';
$string['autoupdate2_help'] = 'Isto irá assinalar automaticamente os itens da sua lista de verificação quando concluir a atividade relevante na disciplina.<br />
Se a verificação da conclusão de atividades estiver ativa para uma determinada atividade, esta será usada para assinalar o item na lista.<br>
Por outro lado, \'concluir\' uma atividade depende do tipo de atividade - \'ver\' um recurso, \'submeter\' um teste ou um trabalho, \'publicar\' num fórum ou aceder a um chat, etc. (para mais detalhes sobre exatamente o que é necessário para uma atividade ser marcada como \'concluída\', pergunte ao administrador para pesquisar no ficheiro \'mod/checklist/classes/local/autoupdate.php\').<br>
Se um item estiver vinculado a uma disciplina com a verificação da conclusão ativa, o item será atualizado quando esta disciplina for marcada como concluída.';
$string['autoupdate_help'] = 'Isto irá assinalar automaticamente os itens da sua lista de verificação quando concluir a atividade relevante na disciplina.<br />
Se a verificação da conclusão de atividades estiver ativa para uma determinada atividade, esta será usada para assinalar o item na lista.<br>
Por outro lado, \'concluir\' uma atividade depende do tipo de atividade - \'ver\' um recurso, \'submeter\' um teste ou um trabalho, \'publicar\' num fórum ou aceder a um chat, etc. (para mais detalhes sobre exatamente o que é necessário para uma atividade ser marcada como \'concluída\', pergunte ao administrador para pesquisar no ficheiro \'mod/checklist/classes/local/autoupdate.php\').<br>';
$string['autoupdatenote'] = 'É a verificação do \'aluno\' que é atualizada automaticamente - nenhuma atualização serão mostrada nas listas de verificação de \'Professores apenas\'';
$string['autoupdatewarning_both'] = 'Há itens desta lista que serão atualizados automaticamente (logo que os alunos concluirem a actividade relacionada). No entanto, se for uma lista de \'Alunos e professores\', as barras de progresso não serão atualizadas até que um professor concorde com as verificações assinaladas pelo aluno.';
$string['autoupdatewarning_student'] = 'Há itens desta lista que serão atualizados automaticamente (logo que os alunos concluirem a actividade relacionada).';
$string['autoupdatewarning_teacher'] = 'Existem itens nesta lista que serão atualizados automaticamente (à medida que os alunos concluírem a atividade relacionada).';
$string['calendardescription'] = 'Este evento foi inserido pela lista de verificação: {$a}';
$string['canceledititem'] = 'Cancelar';
$string['changetextcolour'] = 'Cor do texto seguinte';
$string['checkeditemsdeleted'] = 'Os itens marcados foram apagados';
$string['checklist'] = 'checklist';
$string['checklist:addinstance'] = 'Adicionar uma nova Checklist';
$string['checklist:edit'] = 'Criar e editar checklists';
$string['checklist:emailoncomplete'] = 'Receber e-mails de conclusão';
$string['checklist:preview'] = 'Pré-visualizar a checklist';
$string['checklist:updatelocked'] = 'Atualizar marcações bloqueadas da lista de verificação';
$string['checklist:updateother'] = 'Atualizar marcações dos alunos da checklist';
$string['checklist:updateown'] = 'Atualizar as suas marcações da checklist';
$string['checklist:viewmenteereports'] = 'Visualização do progresso do aluno (apenas)';
$string['checklist:viewreports'] = 'Visualização do progresso do aluno';
$string['checklistautoupdate'] = 'Permitir a atualização automática das checklists';
$string['checklistfor'] = 'Checklist para';
$string['checklistintro'] = 'Descrição';
$string['checklistsettings'] = 'Definições';
$string['checks'] = 'Marcas de verificação';
$string['choosecourse'] = 'Escolha a disciplina...';
$string['comments'] = 'Comentários';
$string['completiondetail:items'] = 'Desmarcar itens: {$a}';
$string['completiondetail:percent'] = 'Desmarcar itens: {$a}';
$string['completionpercent'] = 'Número de itens que devem ser desmarcados:';
$string['completionpercentgroup'] = 'É necessário desmarcar';
$string['completionpercentgroup_help'] = 'Se for selecionado \'Percentagem de itens\', os utilizadores devem marcar pelo menos a percentagem especificada dos itens da lista de verificação para serem considerados \'concluídos\'. Se for selecionado \'Itens\', o utilizador deve marcar pelo menos esse número de itens individuais na lista. Tenha atenção que, se especificar aqui um número de itens maior do que o número de itens na lista de verificação, ele nunca será marcado como concluído.';
$string['configchecklistautoupdate'] = 'Antes de permitir isso, deve fazer algumas alterações ao código do core Moodle, consulte mod/checklist/README.txt para mais detalhes';
$string['configshowcompletemymoodle'] = 'Se desativar esta opção, as listas de verificação de conclusão estarão ocultas na "Minha página" do Moodle';
$string['configshowmymoodle'] = 'Se estiver desmarcada, as atividades \'listas de verificação\' (com barra de progressão) não aparecem na "Minha página" do Moodle';
$string['configshowupdateablemymoodle'] = 'Se estiver assinalada, apenas as listas de verificação atualizáveis estarão visíveis na "Minha página" do Moodle';
$string['confirmdeleteitem'] = 'Tem certeza de que deseja apagar permanentemente este item da checklist?';
$string['deleteitem'] = 'Apagar este item';
$string['duedatesoncalendar'] = 'Adicionar datas de prazo ao calendário';
$string['edit'] = 'Editar lista de verificação';
$string['editchecks'] = 'Editar verificações';
$string['editdatesstart'] = 'Editar datas';
$string['editdatesstop'] = 'Parar a edição de datas';
$string['edititem'] = 'Editar este item';
$string['emailoncomplete'] = 'Enviar e-mail quando a lista de verificação estiver concluída';
$string['emailoncomplete_help'] = 'Quando uma lista de verificação for concluída, uma notificação de e-mail pode ser enviada para o aluno que a completou, a todos os professores da disciplina ou a ambos. <br />
Um administrador pode definir quem recebe este e-mail usando a permissão \'mod:checklist/emailoncomplete\' - por defeito, todos os professores e os professores não editores têm esta permissão.';
$string['emailoncompletebody'] = 'O utilizador {$a->user} concluiu a checklist \'{$a->checklist}\' da disciplina \'{$a->coursename}\'.
Veja a checklist aqui:';
$string['emailoncompletebodyown'] = 'Concluiu a checklist \'{$a->checklist}\' da disciplina \'{$a->coursename}\'.
Veja a checklist aqui:';
$string['emailoncompletesubject'] = 'O utilizador {$a->user} concluiu a checklist \'{$a->checklist}\'';
$string['emailoncompletesubjectown'] = 'Concluiu a checklist \'{$a->checklist}\'';
$string['enterurl'] = 'Digite o url...';
$string['eventchecklistcomplete'] = 'Checklist concluída';
$string['eventeditpageviewed'] = 'Página de edição visualizada';
$string['eventreportviewed'] = 'Relatório visualizado';
$string['eventstudentchecksupdated'] = 'Verificações do aluno atualizadas';
$string['eventteacherchecksupdated'] = 'Verificações do professor atualizadas';
$string['export'] = 'Exportar itens';
$string['forceupdate'] = 'Atualização das marcas de todos os itens automáticos';
$string['gradetocomplete'] = 'Nota de conclusão:';
$string['grouping'] = 'Visível para agrupamento';
$string['guestsno'] = 'Não tem permissão para visualizar esta checklist';
$string['headingitem'] = 'Este item é um título - não terá uma caixa de seleção ao lado';
$string['import'] = 'Importar itens';
$string['importfile'] = 'Escolha o ficheiro para importar';
$string['importfromcourse'] = 'A disciplina toda';
$string['importfromsection'] = 'Secção actual';
$string['indentitem'] = 'Avançar item';
$string['itemcomplete'] = 'Concluído';
$string['items'] = 'Itens da checklist';
$string['itemstype'] = 'Itens';
$string['linkcourses'] = 'Permite ligar itens a disciplinas';
$string['linkcourses_desc'] = 'Se ativar esta opção, os itens da lista de verificação podem ser vinculados a disciplinas dentro do Moodle - serão marcados como completos quando a disciplina associada for concluída. Esta opção quando ativa, pode causar algumas implicações de desempenho quando editar itens da lista de verificação em sites com um grande número de disciplinas.';
$string['linkto'] = 'Ligar a';
$string['linktocourse'] = 'Disciplina associada a este item';
$string['linktomodule'] = 'Atividade associada a este item';
$string['linktourl'] = 'Hiperligação associada a este item';
$string['lockteachermarks'] = 'Bloquear verificações do professor';
$string['lockteachermarks_help'] = 'Quando esta configuração está ativa, assim que um professor guardar uma marca \'Sim\', não é possível alterá-la. < br/>Só os utilizadores com a permissão \'mod/checklist:updatelocked\' serão capazes de alterar a marca.';
$string['lockteachermarkswarning'] = 'Nota: Depois de guardar estas marcações, não será possível alterar qualquer das marcações \'Sim\'';
$string['modulename'] = 'Checklist';
$string['modulename_help'] = 'O módulo **Checklist** permite ao professor criar uma lista de verificação / lista de tarefas para os seus alunos trabalharem / concluírem.';
$string['modulenameplural'] = 'Checklists';
$string['moveitemdown'] = 'Mover para baixo';
$string['moveitemup'] = 'Mover para cima';
$string['noitems'] = 'Nenhum item na checklist';
$string['onlyenrolled'] = 'Apenas utilizadores ativos';
$string['onlyenrolleddesc'] = 'Se ativar esta opção, apenas os utilizadores com inscrições ativas são mostrados nas listas de verificação (desmarque para voltar ao comportamento antigo)';
$string['openlinkinnewwindow'] = 'Abrir numa nova janela?';
$string['optionalhide'] = 'Ocultar itens opcionais';
$string['optionalitem'] = 'Este item é opcional';
$string['optionalshow'] = 'Mostrar itens opcionais';
$string['or'] = 'OU';
$string['percent'] = 'Percentagem de itens';
$string['percentcomplete'] = 'Itens obrigatórios';
$string['percentcompleteall'] = 'Todos os itens da lista';
$string['pluginadministration'] = 'Administração da Checklist';
$string['pluginname'] = 'Checklist';
$string['preview'] = 'Pré-visualização';
$string['privacy:metadata:checklist_check'] = 'Informações sobre quais itens da lista de verificação foram verificados pelo utilizador (ou verificados por um professor para o utilizador) numa determinada lista de verificação';
$string['privacy:metadata:checklist_check:item'] = 'ID do item da lista de verificação que foi verificado';
$string['privacy:metadata:checklist_check:teacherid'] = 'ID do professor que atualizou o estado deste item pela última vez';
$string['privacy:metadata:checklist_check:teachermark'] = 'O estado atribuído para este item, para o utilizador, por um professor';
$string['privacy:metadata:checklist_check:teachertimestamp'] = 'A data/hora em que o professor atribuiu pela última vez um estado a este item';
$string['privacy:metadata:checklist_check:userid'] = 'ID do utilizador que marcou o item (ou, se marcado por um professor, o utilizador para o qual foi feita marcação)';
$string['privacy:metadata:checklist_check:usertimestamp'] = 'A data/hora em que o utilizador marcou pela última vez (0 se o item estiver desmarcado no momento)';
$string['privacy:metadata:checklist_comment'] = 'Informações sobre os comentários feitos por um professor sobre a progressão do utilizador numa determinada lista de verificação';
$string['privacy:metadata:checklist_comment:commentby'] = 'ID do utilizador (professor) que fez este comentário';
$string['privacy:metadata:checklist_comment:itemid'] = 'ID do item da lista de verificação ao qual o comentário se refere';
$string['privacy:metadata:checklist_comment:text'] = 'Texto do comentário';
$string['privacy:metadata:checklist_comment:userid'] = 'ID do utilizador (aluno) ao qual este comentário se refere';
$string['privacy:metadata:checklist_item'] = 'Informações sobre itens privador que o utilizador adicionou à lista de verificação fornecida';
$string['privacy:metadata:checklist_item:checklist'] = 'ID da lista de verificação à qual foi adicionado este item privado';
$string['privacy:metadata:checklist_item:displaytext'] = 'Texto do item privado da lista de verificação';
$string['privacy:metadata:checklist_item:userid'] = 'ID do utilizador que criou este item privado (0 para itens que são criados por um professor e mostrado para todos os utilizadores)';
$string['progress'] = 'Progresso';
$string['removeauto'] = 'Remover os itens da disciplina';
$string['report'] = 'Ver progresso dos alunos';
$string['reporttablesummary'] = 'Tabela onde estão registados os itens da checklist que cada aluno já concluiu';
$string['requireditem'] = 'Este item é obrigatório - tem de ser ser concluído';
$string['resetchecklistprogress'] = 'Repor o progresso da checklist e os itens do utilizador';
$string['savechecks'] = 'Guardar';
$string['showcolorchooser'] = 'Mostrar seletor de cores';
$string['showcolorchooserdesc'] = 'Mostra o seletor de cores dos elementos da lista em \'edit.php\'';
$string['showcompletemymoodle'] = 'Mostrar listas de verificação concluídas no Painel do utilizador';
$string['showfulldetails'] = 'Mostrar todos os detalhes';
$string['showhidechecked'] = 'Mostrar/ocultar itens selecionados';
$string['showmymoodle'] = 'Mostrar listas de verificação no Painel do utilizador';
$string['showprogressbars'] = 'Mostrar barras de progresso';
$string['showupdateablemymoodle'] = 'Mostrar apenas listas de verificação atualizáveis no Painel do utilizador';
$string['teacheralongsidecheck'] = 'Alunos e professores';
$string['teachercomments'] = 'Professores podem adicionar comentários';
$string['teacherdate'] = 'Data da última atualização deste item por um professor';
$string['teacheredit'] = 'Atualizada por';
$string['teacherid'] = 'O professor que fez a última atualização desta marca';
$string['teachermarkno'] = 'O professor declara que ainda NÃO concluíste';
$string['teachermarkundecided'] = 'O professor ainda não marcou';
$string['teachermarkyes'] = 'O professor declara que já concluíste';
$string['teachernoteditcheck'] = 'Apenas os alunos';
$string['teacheroverwritecheck'] = 'Apenas os professores';
$string['theme'] = 'Tema de visualização da checklist';
$string['togglecolumn'] = 'Alternar coluna';
$string['toggledates'] = 'Mostar/ocultar nomes & datas';
$string['togglerow'] = 'Alternar linha';
$string['unindentitem'] = 'Não avançar item';
$string['updatecompletescore'] = 'Guardar notas de conclusão';
$string['updateitem'] = 'Atualizar';
$string['userdate'] = 'Data da última atualização deste item pelo utilizador';
$string['useritemsallowed'] = 'Utilizador pode adicionar os seus próprios itens';
$string['useritemsdeleted'] = 'Foram eliminados os itens do utlizador';
$string['view'] = 'Ver checklist';
$string['viewall'] = 'Ver todos os alunos';
$string['viewallcancel'] = 'Cancelar';
$string['viewallsave'] = 'Guardar';
$string['viewsinglereport'] = 'Ver o progresso deste utilizador';
$string['viewsingleupdate'] = 'Atualizar o progresso deste utilizador';
$string['yesnooverride'] = 'Sim, sem substituir';
$string['yesoverride'] = 'Sim, pode substituir';
