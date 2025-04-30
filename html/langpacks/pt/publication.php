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
 * Strings for component 'publication', language 'pt', version '4.4'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Adicionar ficheiros';
$string['allfiles'] = 'Submissões de ficheiros';
$string['allowedfiletypes'] = 'Tipos de ficheiro permitidos';
$string['allowedfiletypes_err'] = 'Verifique a entrada! Extensões ou separadores de ficheiros inválidos';
$string['allowedfiletypes_help'] = 'Os tipos de ficheiro aceites podem ser limitados inserindo uma lista separada por vírgulas de tipos MIME, por exemplo, \'video/mp4, audio/mp3, image/png, image/jpeg\', ou extensões de ficheiros, incluindo o ponto, por exemplo: \'.png, .jpg\'. Se o campo em branco, todos os tipos de ficheiro serão permitidos.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Os detalhes do trabalho e o formulário de submissão estarão disponíveis a partir de <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Desde';
$string['allowsubmissionsfromdate_help'] = 'Se ativar esta opção estiver, os participantes não poderão enviar os seus ficheiros antes desta data. Se a opção estiver desativada, os participantes poderão começar a enviar imediatamente.';
$string['allowsubmissionsfromdate_import'] = 'Aprovação desde';
$string['allowsubmissionsfromdate_upload'] = 'Envio desde';
$string['allowsubmissionsfromdatesummary'] = 'Este trabalho aceitará submissões a partir de <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Mostrar sempre a descrição';
$string['alwaysshowdescription_help'] = 'Se desativar esta opção, a descrição do trabalho acima só ficará visível para os alunos na data "Enviar/Aprovar a partir de".';
$string['approval_required'] = 'Decisão pendente';
$string['approval_timeover'] = 'Só pode modificar a sua aprovação durante o período de edição.';
$string['approvalchange'] = 'Estado da publicação alterado';
$string['approved'] = 'Aprovado';
$string['approveusers'] = 'dar aprovação';
$string['assignment'] = 'Trabalho';
$string['assignment_help'] = 'Escolha o trabalho de onde importar os ficheiros de submissões individuais ou de grupo.';
$string['assignment_notfound'] = 'O trabalho a partir da qual os ficheiros foram importados não foi encontrado.';
$string['assignment_notset'] = 'Nenhum trabalho foi escolhido.';
$string['availability'] = 'Período de edição (enviar ou aprovar)';
$string['choose'] = 'Escolha...';
$string['completiondetail:upload'] = 'Carregar ficheiro';
$string['completionupload'] = 'O aluno tem de submeter um ficheiro';
$string['configautoimport'] = 'Se preferir que as submissões dos alunos sejam automaticamente importadas para as instâncias da Pasta do Aluno. Esse recurso pode ser ativado / desativado para cada instância da Pasta do aluno separadamente.';
$string['configmaxbytes'] = 'Tamanho máximo predefinido para todos os ficheiros na Pasta do Aluno.';
$string['configmaxfiles'] = 'Número máximo de anexos permitidos por utilizador.';
$string['configobtainstudentapproval'] = 'Os ficheiros só serão publicados (visíveis para todos) após a aprovação do aluno e do professor.';
$string['configobtainteacherapproval'] = 'Por predefinição, os documentos dos alunos estão visíveis para todos os outros participantes.';
$string['configrequiremodintro'] = 'Desative esta opção se não quiser forçar os utilizadores a inserir a descrição de cada atividade.';
$string['courseuploadlimit'] = 'Limite da disciplina';
$string['currentlynotapproved'] = '* Atualmente não aprovado ou reprovado para publicação.';
$string['cutoffdate'] = 'Data de fecho';
$string['cutoffdate_help'] = 'Se ativar esta opção, não serão aceites submissões do trabalho após esta data, exceto se houver prorrogação do prazo.';
$string['cutoffdate_import'] = 'Última aprovação até';
$string['cutoffdate_upload'] = 'Último envio até';
$string['cutoffdatefromdatevalidation'] = 'A data de fecho deve ser após a data de início das submissões.';
$string['cutoffdatevalidation'] = 'A data de fecho não pode ser anterior à data limite de submissão.';
$string['details'] = 'Detalhes';
$string['downloadall'] = 'Descarregar todos os ficheiros submetidos';
$string['duedate'] = 'Até';
$string['duedate_help'] = 'Quando é atingido o fim do prazo de submissão do trabalho, as submissões continuarão a ser permitidas após esta data, mas quaisquer trabalhos apresentados depois desta data serão marcadas como \'Fora do prazo\'. Para evitar submissões após uma determinada data - defina a data de fim do trabalho.';
$string['duedate_import'] = 'Aprovação até';
$string['duedate_upload'] = 'Enviar até';
$string['duedatevalidation'] = 'Data limite de submissão tem de ser depois da data incial.';
$string['edit_timeover'] = 'Os ficheiros só podem ser editados durante o período de edição.';
$string['edit_uploads'] = 'Editar/enviar ficheiros';
$string['entiresperpage'] = 'Número de participantes por página';
$string['eventpublicationapprovalchanged'] = 'Alterada aprovação do ficheiro';
$string['eventpublicationduedateextended'] = 'O prazo foi prorrogado';
$string['eventpublicationfiledeleted'] = 'Ficheiro apagado';
$string['eventpublicationfileimported'] = 'Ficheiro importado';
$string['eventpublicationfileuploaded'] = 'Ficheiro carregado';
$string['extensionduedate'] = 'Prorrogação da data limite';
$string['extensionnotafterduedate'] = 'A data da prorrogação deve ser posterior à data limite';
$string['extensionnotafterfromdate'] = 'A data da prorrogação deve ser posterior à data inicial';
$string['extensionto'] = 'Prorrogar até';
$string['filedetails'] = 'Detalhes';
$string['filesofthesetypes'] = 'Podem ser adicionados ficheiros destes tipos:';
$string['filter'] = 'Filtro';
$string['filter:allfiles'] = 'Todas as submissões de ficheiros';
$string['filter:approvalrequired'] = 'Decisão pendente';
$string['filter:approved'] = 'Submissões de ficheiros aprovadas';
$string['filter:nofiles'] = 'Sem submissão de ficheiro';
$string['filter:nofilter'] = 'Sem filtro';
$string['filter:rejected'] = 'Submissões de ficheiros rejeitadas';
$string['giveapproval'] = 'Dar aprovação';
$string['go'] = 'Executar';
$string['grantextension'] = 'Prolongar o prazo';
$string['guideline'] = 'Publicação dos ficheiros das submissões';
$string['hidden'] = 'Não publicado';
$string['importfrom_err'] = 'Tem que escolher o trabalho de onde deseja importar a os ficheiros submetidos.';
$string['maxbytes'] = 'Tamanho máximo do anexo';
$string['maxfiles'] = 'Número máximo de anexos';
$string['messageprovider:publication_updates'] = 'Notificações';
$string['mode'] = 'Modo (origem dos ficheiros)';
$string['mode_help'] = 'Escolha se os alunos podem carregar documentos aqui ou se as submissões de um trabalho serão importados.';
$string['modeimport'] = 'Importar ficheiros de uma atividade Trabalho';
$string['modeupload'] = 'Carregar ficheiros diretamente na atividade atual';
$string['modulename'] = 'Pasta do Aluno';
$string['modulename_help'] = 'A Pasta do Aluno tem as seguintes funcionalidades:<br><ul><li>Os alunos podem carregar ficheiros, que serão imediatamente publicados ou depois de revisão e aprovação de um professor para publicação.</li><li>Um trabalho pode ser escolhido como a fonte para a Pasta do Aluno. O professor pode decidir que ficheiros do trabalho são publicados (visíveis para todos os alunos). Os professores também podem deixar os alunos decidirem se os seus ficheiros devem, ou não, estar visíveis para todos.</li></ul>';
$string['modulenameplural'] = 'Pastas dos alunos';
$string['myfiles'] = 'Ficheiros próprios';
$string['mygroupfiles'] = 'Ficheiros dos meus grupos';
$string['name'] = 'Nome da pasta';
$string['noentries'] = 'Sem entradas';
$string['nofiles'] = 'Nenhum ficheiro disponível';
$string['nofilestodisplay'] = 'De momento não existem ficheiros disponíveis ou ainda não publicados.';
$string['nofilestozip'] = 'Nenhum ficheiro para comprimir (zip)';
$string['nonexistentfiletypes'] = 'Os seguintes tipos de ficheiro não foram reconhecidos: {$a}';
$string['nopublicationsincourse'] = 'Não existe instância de Pasta do Aluno nesta disciplina.';
$string['nothing_to_show_groups'] = 'Nada para mostrar - nenhum grupo disponível';
$string['nothing_to_show_users'] = 'Nada para mostrar - nenhum aluno disponível';
$string['nothingtodisplay'] = 'Nenhuma entrada para mostrar';
$string['notice'] = '<strong>Atenção</strong>:';
$string['notifications'] = 'Notificações';
$string['notifystudents'] = 'Notificar os alunos sobre alterações da publicação';
$string['notifystudents_help'] = 'Se ativar esta opção, os alunos receberão uma mensagem sempre que for alterado o estado da aprovação de qualquer um dos seus ficheiros carregados.';
$string['notifyteacher'] = 'Notificar os professores sobre os carregamentos de ficheiros';
$string['notifyteacher_help'] = 'Se ativar esta opção, os  professores receberão uma mensagem sempre que um aluno carregar um ficheiro.';
$string['obtainstudentapproval'] = 'Publicação dos ficheiros submetidos';
$string['obtainstudentapproval_help'] = 'Esta opção determina como ocorre a publicação (visibilidade) dos ficheiros enviados: <br><ul><li><strong>É necessária a aprovação dos professores</strong> - Os ficheiros enviados serão revistos e publicados pelos professores</li>< li><strong>É necessária a aprovação dos alunos e dos professores</strong> - Alunos e professores devem concordar com a publicação, caso contrário, não estarão visíveis</li></ul>';
$string['obtainstudentapproval_yes'] = 'Requer aprovação dos professores e dos alunos';
$string['obtainteacherapproval'] = 'Publicação dos ficheiros submetidos';
$string['obtainteacherapproval_help'] = 'Decida se os ficheiros ficarão visíveis,ou não, após o envio:<br><ul><li> Sim - todos os ficheiros ficarão imediatamente visíveis para todos</li><li> Não - os ficheiros só serão publicados depois da aprovação do professor</li></ul>';
$string['obtainteacherapproval_no'] = 'Requer aprovação dos professores';
$string['obtainteacherapproval_yes'] = 'Aprovado automaticamente';
$string['optionalsettings'] = 'Opções';
$string['overdue'] = 'O período de edição já terminou';
$string['overview'] = 'Global';
$string['pending'] = 'Pendente';
$string['pluginadministration'] = 'Administração da Pasta do Aluno';
$string['pluginname'] = 'Pasta do Aluno';
$string['privacy:metadata:approval'] = 'Se o membro do grupo aprovou ou rejeitou a publicação do ficheiro.';
$string['privacy:metadata:contenthash'] = 'Hash SHA1do conteúdo do ficheiro, usado para determinar se o ficheiro foi alterado.';
$string['privacy:metadata:extduedates'] = 'Armazena informações sobre datas de fim substituídas/prorrogada de mod_publication.';
$string['privacy:metadata:extensionduedate'] = 'A data de fim efetiva para os alunos devido à substituição/prorrogação.';
$string['privacy:metadata:fileid'] = 'Identificador do ficheiro';
$string['privacy:metadata:filename'] = 'O nome do ficheiro';
$string['privacy:metadata:files'] = 'Armazena informações (identificador, a quem pertence, de onde veio, hash do conteúdo, nome do ficheiro e se foi aprovado pelo professor e/ou pelo aluno) sobre os ficheiros submetidos/importados para a mod_publication.';
$string['privacy:metadata:groupapproval'] = 'Armazena informações sobre a aprovação ou rejeição de ficheiros por membros do grupo de ficheiros importados da submissão do grupo.';
$string['privacy:metadata:publicationfileexplanation'] = 'Ficheiros e textos online convertidos de submissões para este módulo são armazenados através da API de ficheiros do Moodle.';
$string['privacy:metadata:publicationperpage'] = 'Quantas entradas devem ser mostradas numa única página da tabela?';
$string['privacy:metadata:studentapproval'] = 'Se o aluno aprovou ou rejeitou a publicação do ficheiro.';
$string['privacy:metadata:teacherapproval'] = 'Se o professor aprovou ou rejeitou a publicação do ficheiro.';
$string['privacy:metadata:timecreated'] = 'A hora e a data em que o registo de dados foi criado.';
$string['privacy:metadata:timemodified'] = 'A data e hora mais recentes da atualização/modificação do registo de dados.';
$string['privacy:metadata:type'] = 'Marca a origem do ficheiro (carregado pelo aluno, importado da submissão de um trabalho ou texto online convertido da submissão do trabalho).';
$string['privacy:metadata:userid'] = 'Identificador do utilizador';
$string['privacy:path:files'] = 'Ficheiros';
$string['privacy:path:resources'] = 'Recursos';
$string['privacy:type:import'] = 'Ficheiro importado';
$string['privacy:type:onlinetext'] = 'Texto online importado';
$string['privacy:type:upload'] = 'Ficheiro carregado';
$string['publication:addinstance'] = 'Adicionar nova Pasta do Aluno';
$string['publication:approve'] = 'Decidir se os ficheiros devem ser publicados (visíveis para todos os participantes)';
$string['publication:grantextension'] = 'Prolongar o prazo';
$string['publication:receiveteachernotification'] = 'Receber notificações dos professores';
$string['publication:upload'] = 'Carregar ficheiros para uma Pasta do Aluno';
$string['publication:view'] = 'Ver Pasta do Aluno';
$string['publicationstatus'] = 'Publicação';
$string['publicationstatus_help'] = 'O estado da publicação representa a aprovação do professor e a publicação final: <ul><li><i class="fa fa-check text-success fa-fw"></i> O ficheiro está publicado e visível para todos os participantes</li><li><i class="fa fa-times text-danger fa-fw"></i> O ficheiro não foi publicado (a aprovação ainda não foi dada ou foi rejeitado) e não está visível</li></ul>';
$string['publicfiles'] = 'Ficheiros publicados';
$string['published_aftercheck'] = 'Requer aprovação dos professores';
$string['published_immediately'] = 'Aprovado automaticamente';
$string['rejected'] = 'Rejeitado';
$string['rejectusers'] = 'Rejeitado';
$string['requiremodintro'] = 'Requer descrição da atividade';
$string['reset'] = 'Reverter';
$string['reset_userdata'] = 'Todos os dados';
$string['resetstudentapproval'] = 'Reverter aprovação';
$string['save_changes'] = 'Gravar alterações';
$string['saveapproval'] = 'Guardar alterações';
$string['savestudentapprovalwarning'] = 'Tem a certeza de que pretende guardar estas alterações? Não pode alterar o estado da publicação assim que for definido.';
$string['saveteacherapproval'] = 'Guardar alterações';
$string['search:activity'] = 'Pasta do Aluno - informações da atividade';
$string['show_details'] = 'Mostrar detalhes';
$string['status'] = 'Estado';
$string['status:approved'] = 'Aprovado';
$string['status:approvednot'] = 'Rejeitado';
$string['status:approvedrevoke'] = 'Revogado';
$string['student_approve'] = 'Aprovar';
$string['student_approved'] = 'Aprovado';
$string['student_pending'] = 'Decisão pendente';
$string['student_reject'] = 'Rejeitar';
$string['student_rejected'] = 'Rejeitado';
$string['studentapproval'] = 'Aprovação (alunos)';
$string['studentapproval_help'] = 'Na coluna “Aprovação (alunos)” o feedback dos alunos é exibido como:<br><ul><li><i class="fa fa-question fa-fw text-warning"></i> - Decisão pendente</li><li><i class="fa fa-check text-success fa-fw"></i> - Aprovação concedida</li><li><i class="fa fa-times text-danger fa-fw"></i> - Aprovação recusada</li></ul>';
$string['teacher_approve'] = 'Aprovar';
$string['teacher_approved'] = 'Publicado';
$string['teacher_pending'] = 'Desição pendente';
$string['teacher_reject'] = 'Rejeitar';
$string['teacher_rejected'] = 'Não publicado (rejeitado)';
$string['teacherapproval'] = 'Aprovação';
$string['teacherapproval_help'] = 'Aprovação/rejeição atual dos ficheiros, ou seja, se estão visíveis, ou não, para todos os participantes: <br><ul><li><strong>Escolher...</strong> - decisão pendente/nenhuma aprovação dada ou rejeitada, estes ficheiros não estão visíveis.</li><li><strong>Aprovar</strong> - aprovação concedida, estes ficheiros estão publicados e, portanto, visíveis para todos.</li><li><strong>Rejeitar</strong> - nenhuma aprovação dada , estes ficheiros não estão publicados e, portanto, não estão visíveis.</li></ul>';
$string['total'] = 'Total';
$string['updatefiles'] = 'Atualizar ficheiros';
$string['updatefileswarning'] = 'Os ficheiros já importados serão substituídos ou apagados se os ficheiros originais do trabalho forem atualizados ou apagados. As configurações do aluno, como a aprovação para publicação, permanecem como estão.';
$string['uploaded'] = 'Carregado';
$string['visibility'] = 'Publicado';
$string['visible'] = 'Publicado';
$string['visibleforstudents'] = 'Publicado';
$string['visibleforstudents_no'] = 'Este ficheiro NÃO está publicado (não visível para os alunos).';
$string['visibleforstudents_yes'] = 'Este ficheiro está publicado (visível para os alunos).';
$string['withselected'] = 'Com os selecionados...';
$string['zipusers'] = 'Descarregar ficheiros selecionados';
