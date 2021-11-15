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
 * Strings for component 'publication', language 'pt', version '3.11'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Adicionar ficheiros';
$string['allfiles'] = 'Todos os ficheiros';
$string['allowedfiletypes'] = 'Tipos de ficheiros permitidos';
$string['allowedfiletypes_err'] = 'Verifique a entrada! Extensões ou separadores de ficheiros inválidos';
$string['allowedfiletypes_help'] = 'Os tipos de ficheiros aceites podem ser limitados inserindo uma lista separada por vírgulas de tipos MIME, por exemplo, \'video/mp4, audio/mp3, image/png, image/jpeg\', ou extensões de ficheiros, incluindo o ponto, por exemplo, \'.png, .jpg\'. Se o campo for deixado vazio, todos os tipos de ficheiros serão permitidos.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Os detalhes do trabalho e o formulário de submissão estarão disponíveis a partir de <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Desde';
$string['allowsubmissionsfromdate_import'] = 'Aprovação desde';
$string['allowsubmissionsfromdate_upload'] = 'Envio desde';
$string['allowsubmissionsfromdateh'] = 'Período para Enviar/Aprovar';
$string['allowsubmissionsfromdateh_help'] = 'Pode definir o período de tempo durante o qual os alunos podem carregar ficheiros ou dar a sua aprovação para publicação do(s) ficheiro(s). Durante este período de tempo, os alunos podem editar o(s) ficheiro(s), assim como, podem retirar a aprovação para publicação.';
$string['allowsubmissionsfromdatesummary'] = 'Este trabalho aceitará submissões a partir de <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Mostrar sempre a descrição';
$string['alwaysshowdescription_help'] = 'Se desativar esta opção, a descrição do trabalho acima só ficará visível para os alunos na data "Aceitar trabalhos a partir de".';
$string['approval_timeover'] = 'Só pode modificar a sua aprovação durante o período de alteração.';
$string['approvalchange'] = 'Estado da aprovação alterado';
$string['approved'] = 'Aprovado';
$string['approveusers'] = 'Visível para todos';
$string['assignment'] = 'Trabalho';
$string['assignment_help'] = 'Escolha o trabalho de onde importar os ficheiros. De momento, os trabalhos de grupo não são suportados e, portanto, não são selecionáveis.';
$string['assignment_notfound'] = 'O trabalho a partir da qual os ficheiros foram importados não foi encontrado.';
$string['assignment_notset'] = 'Nenhum trabalho foi escolhido.';
$string['autoimport'] = 'Sincronizar automaticamente com o Trabalho';
$string['autoimport_help'] = 'Se ativar esta opção, as novas submissões serão, no trabalho correspondente, importadas automaticamente no módulo da Pasta do Aluno. (Opcional) A aprovação do estudante deve ser obtida novamente para os novos ficheiros.';
$string['availability'] = 'Período para Envio/Aprovação';
$string['choose'] = 'Escolha...';
$string['configautoimport'] = 'Se preferir que as submissões dos alunos sejam automaticamente importadas para as instâncias da Pasta do Aluno. Esse recurso pode ser ativado / desativado para cada instância da Pasta do aluno separadamente.';
$string['configmaxbytes'] = 'Tamanho máximo predefinido para todos os ficheiros na Pasta do Aluno.';
$string['configmaxfiles'] = 'Número máximo de anexos permitidos por utilizador.';
$string['configobtainstudentapproval'] = 'Os documentos ficarão visíveis após o consentimento do aluno.';
$string['configobtainteacherapproval'] = 'Por predefinição, os documentos dos alunos estão visíveis para todos os outros participantes.';
$string['configrequiremodintro'] = 'Desative esta opção se não quiser forçar os utilizadores a inserir a descrição de cada atividade.';
$string['courseuploadlimit'] = 'Limite da disciplina';
$string['currentlynotapproved'] = '* Atualmente não aprovado ou reprovado.';
$string['cutoffdate'] = 'Data de fecho';
$string['cutoffdate_help'] = 'Se ativar esta opção, não serão aceites submissões do trabalho após esta data, exceto se houver prorrogação do prazo.';
$string['cutoffdate_import'] = 'Última aprovação até';
$string['cutoffdate_upload'] = 'Última possibilidade de envio até';
$string['cutoffdatefromdatevalidation'] = 'A data de fecho deve ser após a data de inicio das submissões.';
$string['cutoffdatevalidation'] = 'A data de fecho não pode ser anterior à data limite de submissão.';
$string['details'] = 'Detalhes';
$string['downloadall'] = 'Descarregar todos os ficheiros como ZIP';
$string['duedate'] = 'até';
$string['duedate_help'] = 'Quando é atingido o fim do prazo de submissão do trabalho, as submissões continuarão a ser permitidas após esta data, mas quaisquer trabalhos apresentados depois desta data serão marcadas como \'Fora do prazo\'. Para evitar submissões após uma determinada data - defina a data de fim do trabalho.';
$string['duedate_import'] = 'Aprovação até';
$string['duedate_upload'] = 'até';
$string['duedatevalidation'] = 'Data limite de submissão tem de ser depois da data incial.';
$string['edit_timeover'] = 'Os ficheiros só podem ser editados durante o período de alteração.';
$string['edit_uploads'] = 'Editar/Enviar ficheiros';
$string['emailstudentsmail'] = '{$a->username} alterou o estado da aprovação de \'{$a->filename}\'
em \'{$a->publication}\' para {$a->apstatus} ({$a->dayupdated} às {$a->timeupdated}).

Pode consultar aqui:

    {$a->url}';
$string['emailstudentsmailhtml'] = '{$a->username} alterou o estado da aprovação de \'{$a->filename}\'
em <i>\'{$a->publication}\'</i> para <b>{$a->apstatus}</b> ({$a->dayupdated} às {$a->timeupdated})<br /><br />

Já está <a href="{$a->url}">disponível</a> para consulta.';
$string['emailteachermail'] = '---------------------------------------------------------------------\\n{$a->username} carregou o ficheiro \'{$a->filename}\'
em \'{$a->publication}\' {$a->dayupdated} às {$a->timeupdated}.

Pode consultar aqui:

    {$a->url}---------------------------------------------------------------------\\n';
$string['emailteachermailhtml'] = '{$a->username} carregou o ficheiro \'{$a->filename}\'
em <i>\'{$a->publication}\' {$a->dayupdated} às {$a->timeupdated}</i><br /><br />
Já está <a href="{$a->url}">disponível</a> para consulta.';
$string['entiresperpage'] = 'Número de participantes por página';
$string['eventpublicationapprovalchanged'] = 'Alterada aprovação do ficheiro';
$string['eventpublicationduedateextended'] = 'Prazo foi prorrogado';
$string['eventpublicationfiledeleted'] = 'Ficheiro apagado';
$string['eventpublicationfileimported'] = 'Ficheiro importado';
$string['eventpublicationfileuploaded'] = 'Ficheiro carregado';
$string['extensionduedate'] = 'Prorrogação da data limite';
$string['extensionnotafterduedate'] = 'A data da prorrogação deve ser posterior à data limite';
$string['extensionnotafterfromdate'] = 'A data da prorrogação deve ser posterior à data inicial';
$string['extensionto'] = 'Prorrogar até';
$string['filedetails'] = 'Detalhes';
$string['filesofthesetypes'] = 'Podem ser adicionados ficheiros destes tipos:';
$string['go'] = 'Executar';
$string['grantextension'] = 'Prolongar o prazo';
$string['groupapprovalmode'] = 'Modo de aprovação do grupo';
$string['groupapprovalmode_all'] = 'TODOS os membros do grupo têm que aprovar';
$string['groupapprovalmode_help'] = 'Aqui pode definir se é a aprovação de todos os membros do grupo ou apenas a aprovação de pelo menos um membro do grupo é necessária para que os ficheiros fiquem visíveis. Os ficheiros só ficarão visíveis após a aprovação por todos os membros do grupo ou pelo menos um membro do grupo.';
$string['groupapprovalmode_single'] = 'pelo menos UM membro tem que aprovar';
$string['guideline'] = 'Visível para todos:';
$string['hidden'] = 'Oculto';
$string['importfrom_err'] = 'Tem que escolher o trabalho de onde deseja importar.';
$string['maxbytes'] = 'Tamanho máximo do anexo';
$string['maxfiles'] = 'Número máximo de anexos';
$string['messageprovider:publication_updates'] = 'Notificações';
$string['mode'] = 'Modo (origem dos ficheiros)';
$string['mode_help'] = 'Escolha se os alunos podem carregar ficheiros para a pasta ou se são ficheiros submetidos num determinado Trabalho.';
$string['modeimport'] = 'obter de um trabalho';
$string['modeupload'] = 'carregar ficheiros';
$string['modulename'] = 'Pasta do Aluno';
$string['modulename_help'] = 'A **Pasta do Aluno** tem as seguintes funcionalidades:

* Os participantes podem carregar documentos que ficarão imediatamente disponíveis para outros participantes ou depois de verificar os documentos e dar o seu consentimento.
* Um trabalho pode ser escolhido como a fonte para uma Pasta do Aluno. O professor pode decidir que documentos do trabalho estarão visíveis para todos os participantes. Os professores também podem deixar os participantes decidir se os seus documentos devem ou não estar visíveis para os outros.';
$string['modulenameplural'] = 'Pastas dos alunos';
$string['myfiles'] = 'Ficheiros próprios';
$string['mygroupfiles'] = 'Ficheiros dos meus grupos';
$string['name'] = 'Nome da pasta';
$string['noentries'] = 'Sem entradas';
$string['nofiles'] = 'Nenhum ficheiro disponível';
$string['nofilestozip'] = 'Nenhum ficheiro para comprimir (zip)';
$string['nonexistentfiletypes'] = 'Os seguintes tipos de ficheiros não foram reconhecidos: {$a}';
$string['nopublicationsincourse'] = 'Não existem instâncias de Pasta do Aluno nesta disciplina.';
$string['nothing_to_show_groups'] = 'nada para mostrar - nenhum grupo disponível';
$string['nothing_to_show_users'] = 'nada para mostrar - nenhum aluno disponível';
$string['nothingtodisplay'] = 'Nenhuma entrada para mostrar';
$string['notice'] = '<strong>Atenção</strong>:';
$string['notice_groupimportrequireallapproval'] = 'Decida se os seus ficheiros estão disponíveis para todos. Todos os membros do grupo devem aprovar para que o ficheiro fique visível.';
$string['notice_groupimportrequireoneapproval'] = 'Decida se os seus ficheiros estão disponíveis para todos. Uma única aprovação, de qualquer membro do grupo, é suficiente para o ficheiro ficar visível. Discuta internamente com o grupo se o seu ficheiro deve estar visível ou não antes de aprová-lo!';
$string['notice_importnoapproval'] = 'Os seguintes ficheiros estão visíveis para todos';
$string['notice_importrequireapproval'] = 'Decida se os seus ficheiros estão disponíveis para todos.';
$string['notice_uploadnoapproval'] = 'Todos os ficheiros estarão visíveis para todos imediatamente após o envio. Ao professor reserva-se o direito, a qualquer instante, de ocultar ficheiros publicados.';
$string['notice_uploadrequireapproval'] = 'Todos os ficheiros enviados só ficarão visíveis após a aprovação/avaliação do professor';
$string['notifications'] = 'Notificações';
$string['notifystudents'] = 'Notificar os alunos sobre alterações da aprovação';
$string['notifystudents_help'] = 'Se ativar esta opção, os alunos receberão uma mensagem sempre que for alterado o estado da aprovação de qualquer um dos seus ficheiros carregados. Os métodos de envio da mensagem são configuráveis.';
$string['notifyteacher'] = 'Notificar os avaliadores sobre os carregamentos de ficheiros';
$string['notifyteacher_help'] = 'Se ativar esta opção, os avaliadores (geralmente professores) receberão uma mensagem sempre que um aluno carregar um ficheiro. Os métodos de envio da mensagem são configuráveis.';
$string['obtainstudentapproval'] = 'Obter aprovação';
$string['obtainstudentapproval_help'] = 'Decida se a aprovação dos alunos é necessária: <br><ul><li> Sim - os ficheiros só ficarão visíveis para todos após a aprovação do aluno. O professor pode selecionar os alunos/ficheiros para pedir aprovação.</li><li> Não - a aprovação do aluno não será obtida através do Moodle. A visibilidade do ficheiro depende apenas da decisão do professor.</li></ul>';
$string['obtainteacherapproval'] = 'Aprovado por predefinição';
$string['obtainteacherapproval_help'] = 'Decida se os ficheiros ficarão visíveis após o envio ou não:<br><ul><li> Sim - todos os ficheiros ficarão imediatamente visíveis para todos</li><li> Não - os ficheiros só serão publicados depois da aprovação do professor</li></ul>';
$string['optionalsettings'] = 'Opções';
$string['pending'] = 'Pendente';
$string['pluginadministration'] = 'Administração da Pasta do Aluno';
$string['pluginname'] = 'Pasta do Aluno';
$string['privacy:metadata:approval'] = 'Se o membro do grupo aprovou ou rejeitou o ficheiro';
$string['privacy:metadata:contenthash'] = 'Hash SHA1do conteúdo do ficheiro, usado para determinar se o ficheiro foi alterado.';
$string['privacy:metadata:extduedates'] = 'Armazena informações sobre datas de fim substituídas/prorrogada de mod_publication.';
$string['privacy:metadata:extensionduedate'] = 'A data de fim efetiva para o utilizador poderá ser substituída/prorrogada.';
$string['privacy:metadata:fileid'] = 'Identificador do ficheiro';
$string['privacy:metadata:filename'] = 'O nome do ficheiro';
$string['privacy:metadata:files'] = 'Armazena informações (identificador, a quem pertence, de onde veio, hash do conteúdo, nome do ficheiro e se foi aprovado pelo professor e/ou pelo aluno) sobre os ficheiros submetidos/importados para a mod_publication.';
$string['privacy:metadata:groupapproval'] = 'Armazena informações sobre a aprovação ou rejeição de membros do grupo de ficheiros importados da submissão do grupo.';
$string['privacy:metadata:publicationfileexplanation'] = 'Ficheiros e textos online convertidos de submissões para este módulo são armazenados através da API de ficheiros do Moodle.';
$string['privacy:metadata:publicationperpage'] = 'Quantas entradas devem ser mostradas numa única página da tabela?';
$string['privacy:metadata:studentapproval'] = 'Se o aluno aprovou ou rejeitou o ficheiro';
$string['privacy:metadata:teacherapproval'] = 'Se o professor aprovou ou rejeitou o ficheiro';
$string['privacy:metadata:timecreated'] = 'A hora e a data em que o registo de dados foi criado.';
$string['privacy:metadata:timemodified'] = 'A data e hora mais recentes da atualização/modificação do registo de dados.';
$string['privacy:metadata:type'] = 'Marca a origem do ficheiro (carregado pelo aluno, importado da submissão de um trabalho ou texto online convertido da submissão do trabalho).';
$string['privacy:metadata:userid'] = 'Identificador do utilizador';
$string['privacy:path:files'] = 'ficheiros';
$string['privacy:path:resources'] = 'recursos';
$string['privacy:type:import'] = 'ficheiro importado';
$string['privacy:type:onlinetext'] = 'texto online importado';
$string['privacy:type:upload'] = 'ficheiro carregado';
$string['publication:addinstance'] = 'Adicionar nova Pasta do Aluno';
$string['publication:approve'] = 'Decidir a visibilidade dos ficheiros para todos os alunos';
$string['publication:grantextension'] = 'Prolongar o prazo';
$string['publication:receiveteachernotification'] = 'Receber notificações dos professores';
$string['publication:upload'] = 'Carregar ficheiros para uma Pasta do Aluno';
$string['publication:view'] = 'Ver Pasta do Aluno';
$string['publicfiles'] = 'Ficheiros públicos';
$string['published_aftercheck'] = 'Não, apenas após a aprovação por um professor';
$string['published_immediately'] = 'Sim, sem a aprovação por um professor';
$string['rejected'] = 'Rejeitado';
$string['rejectusers'] = 'Oculto para todos';
$string['requiremodintro'] = 'Requer descrição da atividade';
$string['reset'] = 'Reverter';
$string['reset_userdata'] = 'Todos os dados';
$string['resetstudentapproval'] = 'Repor estado';
$string['save_changes'] = 'Gravar alterações';
$string['saveapproval'] = 'Gravar aprovação';
$string['savestudentapprovalwarning'] = 'Tem a certeza que pretende gravar estas alterações? Não pode alterar o estado assim que estiver definido.';
$string['saveteacherapproval'] = 'Gravar aprovação';
$string['search:activity'] = 'Pasta do Aluno - informações da atividade';
$string['show_details'] = 'Mostrar detalhes';
$string['status'] = 'Estado';
$string['status:approved'] = 'aprovado';
$string['status:approvednot'] = 'rejeitado';
$string['student_approve'] = 'aprovar';
$string['student_approved'] = 'aprovado';
$string['student_pending'] = 'oculto (não aprovado)';
$string['student_reject'] = 'rejeitar';
$string['student_rejected'] = 'rejeitado';
$string['studentapproval'] = 'Estado';
$string['studentapproval_help'] = 'A coluna de estado representa a resposta dos alunos à aprovação:

* ? - aprovação pendente
* ✓ - aprovação concedida
* ✖ - aprovação recusada';
$string['teacher_approved'] = 'visível (aprovado)';
$string['teacher_pending'] = 'confirmação pendente';
$string['teacher_rejected'] = 'recusado';
$string['teacherapproval'] = 'Aprovação';
$string['teacherapproval_help'] = 'Decisão atual sobre os ficheiros, para serem visíveis a todos os participantes: <br /><ul><li>Escolha... - ainda não aprovado ou reprovado, os ficheiros não são visíveis.</li><li>Sim - aprovado, os ficheiros são visíveis.</li><li>Não - reprovado, os ficheiros não são visíveis.</li></ul>';
$string['total'] = 'total';
$string['updatefiles'] = 'Atualizar ficheiros';
$string['updatefileswarning'] = 'Os ficheiros de um aluno na própria Pasta do Auno serão atualizados com a sua submissão do trabalho. Os ficheiros dos alunos que estejam visíveis serão também substituídos, se forem apagados ou atualizados - as configurações do aluno quanto à visibilidade não serão alteradas.';
$string['uploaded'] = 'Carregado';
$string['visibility'] = 'Visível para todos';
$string['visible'] = 'Visível';
$string['visibleforstudents'] = 'Visível para todos';
$string['visibleforstudents_no'] = 'Este ficheiro NÃO está visível para os alunos';
$string['visibleforstudents_yes'] = 'Os alunos podem ver este ficheiro';
$string['warning_changefromobtainstudentapproval'] = 'Se executar esta alteração, apenas você pode decidir quais os ficheiros que estarão visíveis para todos os alunos. Aos alunos não é pedida a aprovação. Todos os ficheiros marcados como aprovados ficarão visíveis para todos os alunos, independentemente das decisões dos alunos.';
$string['warning_changefromobtainteacherapproval'] = 'Após ativar esta opção, todos os ficheiros enviados ficarão visíveis para os outros participantes. Todos os ficheiros carregados ficarão visíveis. Pode manualmente ocultar os ficheiros para determinados alunos.';
$string['warning_changetoobtainstudentapproval'] = 'Se executar esta alteração, aos alunos é solicitada a aprovação para todos os ficheiros marcados como visíveis. Os ficheiros só ficarão visíveis após a aprovação dos alunos.';
$string['warning_changetoobtainteacherapproval'] = 'Depois de desativar esta opção, os ficheiros carregados não ficarão automaticamente visíveis para os outros participantes. Terá que determinar quais ficheiros são visíveis. Os ficheiros visíveis ficarão ocultos.';
$string['withselected'] = 'Com os selecionados...';
$string['zipusers'] = 'Descarregar como ZIP';
