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
 * Strings for component 'qcreate', language 'pt', version '4.4'.
 *
 * @package     qcreate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclosed'] = 'A atividade está encerrada.';
$string['activitygrade'] = 'Obteve uma avaliação de {$a->grade} em {$a->outof} nesta atividade.';
$string['activityname'] = 'Nome da atividade';
$string['activityopen'] = 'A atividade está aberta.';
$string['addminimumquestionshdr'] = 'Número obrigatório de questões por tipo de pergunta (opcional)';
$string['addmorerequireds'] = 'Adicionar mais tipos de questões obrigatórias';
$string['allandother'] = 'Para permitir todos os tipos de pergunta, assinale \'{$a}\' e desmarque tudo o resto.';
$string['allowall'] = 'Permitir todos os tipos de pergunta';
$string['allowedqtypes'] = 'Tipos de pergunta permitidas';
$string['allowedqtypes_help'] = 'Especifique os tipos de pergunta permitidos. Se selecionar "Permitir todos os tipos de pergunta\', os alunos podem criar questões de qualquer tipo até ao valor especificado no \'Total de questões a avaliar\'.';
$string['allquestions'] = '0 - (Todas as questões)';
$string['alreadydone'] = 'Elaborou {$a} questões deste tipo.';
$string['alreadydoneextra'] = 'Elaborou {$a} questões extra deste tipo.';
$string['alreadydoneextraone'] = 'Elaborou uma questão extra deste tipo.';
$string['alreadydoneone'] = 'Elaborou uma questão deste tipo.';
$string['and'] = '{$a}  e também';
$string['andmorenewquestions'] = 'e mais {$a} nova(s) questão(ões).';
$string['attemptqcreatenow'] = 'Tentar criar questão agora';
$string['automaticgrade'] = 'Obteve uma avaliação automática de {$a->grade} em {$a->outof} para estas questões, uma vez que elaborou {$a->done} de {$a->required} questões necessárias.';
$string['availability'] = 'Disponibilidade';
$string['betterthangrade'] = 'Questões com avaliação <strong>manual</strong> igual ou melhor do que';
$string['clickhere'] = 'Clique aqui para criar uma questão do tipo \'{$a}\'.';
$string['clickhereanother'] = 'Clique aqui para criar outra questão do tipo \'{$a}\'.';
$string['close'] = 'Encerrar a atividade a';
$string['closebeforeopen'] = 'Não foi possível atualizar a atividade Criar Questões. Especificou uma data de fecho anterior à da data abertura.';
$string['closeon'] = 'Encerrar a';
$string['comma'] = '{$a},';
$string['comment'] = 'Comentário';
$string['completionquestions'] = 'O aluno deve criar:';
$string['completionquestions_help'] = 'Se ativado, esta atividade é considerada completa quando o aluno elaborar este número de questões (avaliadas ou não).';
$string['completionquestionsdesc'] = 'O aluno deve criar pelo menos {$a} questão/questões';
$string['completionquestionsgroup'] = 'Questões necessárias';
$string['confirmdeletequestion'] = 'Tem a certeza de que pretende eliminar esta questão?';
$string['createdquestions'] = 'Questões criadas';
$string['creating'] = 'Criar Questões';
$string['deletegrades'] = 'Eliminar questões criadas e de avaliação manual';
$string['donequestionno'] = 'Completou {$a->done} de {$a->no} questões do tipo \'{$a->qtypestring}\'. Estão listadas abaixo .';
$string['eventeditpageviewed'] = 'Visualizada a página de edição da elaboração de questões';
$string['eventoverviewviewed'] = 'Vista geral da elaboração de questões visualizada';
$string['eventquestiongraded'] = 'Questão avaliada';
$string['eventquestionregraded'] = 'Questão reavaliada';
$string['exportgood'] = 'Exportar as melhores perguntas';
$string['exportgoodquestions'] = 'Exportar questões que tenham sido avaliadas acima de um determinado valor';
$string['exportnaming'] = 'Adicionar prefixo ao nome das questões exportadas';
$string['exportquestions'] = 'Exportar questões para um ficheiro';
$string['exportselection'] = 'Exportar apenas estas questões';
$string['extraqdone'] = 'Elaborou uma questão extra.';
$string['extraqgraded'] = 'Será avaliada 1 das questões de qualquer um dos tipos abaixo';
$string['extraqsdone'] = 'Elaborou {$a->extraquestionsdone} questões extra.';
$string['extraqsgraded'] = 'Serão avaliadas {$a->extrarequired} questões de qualquer um dos tipos abaixo';
$string['finalgrade'] = 'Nota final de {$a}';
$string['fullstop'] = '{$a}.';
$string['grade'] = 'Nota';
$string['grade_help'] = 'Nota final da atividade que aparece na pauta. É possível definir "Nenhuma nota" para que a atividade não seja avaliada .';
$string['gradeallautomatic'] = 'A avaliação é completamente automática, não há avaliação manual.';
$string['gradeallmanual'] = 'A avaliação é totalmente manual, não há avaliação automática.';
$string['gradeavailablehtml'] = '{$a->username} avaliou a questão \'<i>{$a->questionname}</i>\' que criou para a atividade \'<i>{$a->qcreate}</i>\'<br /><br />
Pode visualizar na <a href="{$a->url}">página da atividade</a>.';
$string['gradeavailablesmall'] = '{$a->username} avaliou a questão que criou para a atividade \'{$a->qcreate}\'';
$string['gradeavailabletext'] = '{$a->username} avaliou a questão elaborada \'{$a->questionname}\' para a atividade \'{$a->qcreate}\'

Pode visualizar na página da atividade:

{$a->url}';
$string['gradecomment'] = 'Comentário para a pergunta \'{$a->qname}\' criado por {$a->user}';
$string['graded'] = 'Avaliada';
$string['grademixed'] = 'A avaliação é {$a->automatic}% automática e {$a->manual}% manual.';
$string['gradequestions'] = 'Avaliar questões';
$string['graderatio'] = 'Relação da avaliação automática/manual';
$string['graderatio_help'] = 'Pode especificar como a nota final será dividida: a percentagem para a avaliação automática está à esquerda e a da avaliação manual está à direita. A avaliação automática é a "dada" pelo sistema pelo facto de simplesmente elaborar uma questão.';
$string['graderatiois'] = 'Relação da avaliação automática/manual: {$a}';
$string['graderatiooptions'] = '{$a->automatic}/{$a->manual}';
$string['gradesdeleted'] = 'Questões e avaliações manuais removidas';
$string['grading'] = 'Avaliar questões';
$string['indicator:cognitivedepth'] = 'Compreensão de Criar Questões';
$string['indicator:cognitivedepth_help'] = 'Este indicador é baseado na capacidade cognitiva alcançada pelo aluno na atividade Criar Questões.';
$string['indicator:socialbreadth'] = 'Socialização de Criar Questões';
$string['indicator:socialbreadth_help'] = 'Este indicador é baseado na extensão social alcançada pelo aluno na atividade Criar Questões.';
$string['intro'] = 'Descrição';
$string['invalidqcreatezid'] = 'ID de Criar Questões inválido';
$string['manualgrade'] = 'Um professor concedeu-lhe a nota de {$a->grade} em {$a->outof} para as questões que elaborou.';
$string['marked'] = 'Assinaladas';
$string['messageprovider:gradernotification'] = 'Notificação de questão criada';
$string['messageprovider:studentnotification'] = 'Notificação de questão avaliada';
$string['minimumquestions'] = 'Mínimo de questões';
$string['minimumquestions_help'] = 'Indique aqui o número de questões, do tipo especificado acima, que o aluno deve criar.';
$string['modulename'] = 'Criar Questões';
$string['modulename_help'] = 'A atividade **Criar Questões** permite ao professor pedir aos alunos para elaborarem questões.
Pode ser especificado o número de questões necessárias, os tipos de perguntas disponíveis e o número de questões exigido para cada tipo de pergunta.';
$string['modulename_link'] = 'mod/qcreate/view';
$string['modulenameplural'] = 'Criar Questões';
$string['needsgrading'] = 'Necessita avaliação';
$string['needsregrading'] = 'Necessário reavaliar';
$string['needtoallowatleastoneqtype'] = 'Tem de permitir pelo menos um tipo de pergunta';
$string['needtoallowqtype'] = 'Tem de permitir questões do tipo \'{$a}\' se pretende exigir um número mínimo de questões deste tipo que é necessário elaborar.';
$string['newquestions'] = 'Nenhuma questão elaborada';
$string['noofquestionstotal'] = 'Total de questões a avaliar';
$string['noofquestionstotal_help'] = 'Número total de questões que o aluno deve elaborar. Este número deve ser igual ou maior do que o número mínimo de questões obrigatórias';
$string['noquestions'] = 'Nenhuma questão foi elaborada';
$string['noquestionsabove'] = 'Não existem questões de avaliação manual com nota acima de {$a->betterthan} na categoria \'{$a->categoryname}\'.';
$string['notgraded'] = 'Ainda não avaliada';
$string['nothingtosave'] = 'Nada a guardar';
$string['notifications'] = 'Notificações';
$string['nousers'] = 'Não há utilizadores inscritos nesta disciplina/neste grupo.';
$string['open'] = 'Abrir a atividade a';
$string['open_help'] = 'Pode especificar quando a atividade Criar questões está acessível para os utilizadores elaborarem questões. Os alunos não podem elaborar questões antes do início nem após o encerramento.';
$string['openafterclose'] = 'Não foi possível atualizar a atividade Criar Questões. Especificou uma data de abertura posterior à da data fecho.';
$string['openclosedatesupdated'] = 'Foram atualizadas as datas de abertura e de fecho da atividade Criar questões';
$string['openmustbemorethanclose'] = 'O início da atividade tem de ser anterior ao encerramento';
$string['openon'] = 'Inicia';
$string['overview'] = 'Vista Global';
$string['pagesize'] = 'Número de questões a mostrar por página&nbsp;';
$string['pluginadministration'] = 'Administração de Criar Questões';
$string['pluginname'] = 'Criar Questões';
$string['preview'] = 'Pré-visualizar';
$string['previewquestion'] = 'Pré-visualizar a questão';
$string['qcreate'] = 'qcreate';
$string['qcreate:addinstance'] = 'Adicionar instância de Criar Questões';
$string['qcreate:grade'] = 'Avaliar questão';
$string['qcreate:receivegradernotifications'] = 'Receber notificações dos avaliadores';
$string['qcreate:receivestudentnotifications'] = 'Receber notificações dos alunos';
$string['qcreate:submit'] = 'Enviar questão';
$string['qcreate:view'] = 'Ver a atividade de Criar Questões';
$string['qcreatecloses'] = 'A atividade Criar Questões encerra';
$string['qcreateeventcloses'] = 'Termina a \'{$a}\'';
$string['qcreateeventopens'] = 'Inicia a \'{$a}\'';
$string['qcreateopens'] = 'A atividade Criar Questões abre';
$string['qsgraded'] = 'Serão avaliadas {$a} questões de qualquer um destes tipos:';
$string['qtype'] = 'Tipo de pergunta';
$string['qtype_help'] = 'Neste menu especifica o tipo de pergunta que os alunos devem criar.';
$string['questiongrade'] = 'Nota da questão \'{$a->qname}\' criada por {$a->user}';
$string['questions'] = 'questões para completar esta atividade';
$string['questionscreated'] = '{$a} questões criadas';
$string['questiontogradehtml'] = '{$a->username} criou uma nova questão <i>\'{$a->questionname}\'</i> na atividade <i>\'{$a->qcreate}\' em {$a->timeupdated}</i><br /><br />
Está <a href="{$a->url}">disponível no site</a>.';
$string['questiontogradesmall'] = '{$a->username} criou uma nova questão para {$a->qcreate}.';
$string['questiontogradetext'] = '{$a->username} criou uma nova questão \'{$a->questionname}\'
para a atividade \'{$a->qcreate}\' em {$a->timeupdated}

Está disponível em:
 {$a->url}';
$string['requiredanyplural'] = 'É necessário {$a->no} questões de qualquer tipo de pergunta';
$string['requiredanysingular'] = 'É necessário uma questão de qualquer tipo de pergunta';
$string['requiredplural'] = 'É necessário {$a->no} questões do tipo de pergunta \'{$a->qtypestring}\'';
$string['requiredquestions'] = 'Questões a criar:';
$string['requiredsingular'] = 'É necessário 1 questão do tipo de pergunta \'{$a->qtypestring}\'';
$string['saveallfeedback'] = 'Guardar todo o feedback';
$string['saveallfeedbackandgrades'] = 'Guardar todas as notas e todo o feedback';
$string['search:activity'] = 'Atividades de Criar Questões';
$string['selectone'] = 'Escolha um tipo...';
$string['sendgradernotifications'] = 'Notificar os avaliadores';
$string['sendgradernotifications_help'] = 'Se ativar esta opção, os avaliadores (geralmente professores) recebem uma mensagem sempre que um aluno cria uma nova questão. Os métodos de mensagem são configuráveis.';
$string['sendstudentnotifications'] = 'Notificar os alunos';
$string['sendstudentnotifications_help'] = 'Se ativar esta opção, os alunos recebem uma mensagem quando uma das suas questões é avaliada.';
$string['show'] = 'Mostrar&nbsp;';
$string['showgraded'] = ' questões que não precisam de ser avaliadas&nbsp;';
$string['showneedsregrade'] = ' questões que precisam de ser reavaliadas&nbsp;';
$string['showungraded'] = '&nbsp;questões que precisam de ser avaliadas';
$string['specifictext'] = 'Texto específico';
$string['studentaccessaddonly'] = 'Criar apenas as questões';
$string['studentaccessedit'] = 'Pré-visualizar, ver/guardar como nova e editar/apagar';
$string['studentaccessheader'] = 'Acesso dos alunos às questões';
$string['studentaccesspreview'] = 'Pré-visualizar apenas';
$string['studentaccesssaveasnew'] = 'Pré-visualizar e ver/guardar como nova';
$string['studentqaccess'] = 'Para serem "donos" das questões';
$string['studentqaccess_help'] = 'Use este menu para definir os direitos de acesso dos alunos às questões que eles criam.';
$string['studentshavedone'] = 'Os alunos criaram {$a} questões.';
$string['synchronizeqaccesstask'] = 'Sincronizar as capacidades dos alunos de acesso às questões';
$string['timeclose'] = 'Atividade encerra {$a->timeclose}';
$string['timeclosed'] = 'A atividade encerrou {$a}.';
$string['timecreated'] = 'Data de criação';
$string['timenolimit'] = 'Não foram definidas as datas';
$string['timeopen'] = 'A atividade abre {$a->timeopen}';
$string['timeopenclose'] = 'A atividade está aberta de {$a->timeopen} a {$a->timeclose}';
$string['timeopened'] = 'Atividade iniciada {$a}.';
$string['timewillclose'] = 'A atividade irá encerrar {$a}.';
$string['timewillopen'] = 'A atividade irá iniciar {$a}.';
$string['timing'] = 'Duração da atividade';
$string['todoquestionno'] = 'Ainda falta {$a->stillrequiredno} questões do tipo \'{$a->qtypestring}\'.';
$string['totalgrade'] = 'Nota total';
$string['totalgradeis'] = 'Nota total: {$a}';
$string['totalrequiredislessthansumoftotalsforeachqtype'] = 'O total requerido é inferior à soma das notas totais de cada tipo de pergunta.<br />Deve ser igual ou maior!';
$string['updategradestask'] = 'Atualizar as notas da atividade Criar Questões';
$string['username'] = 'Nome do utilizador/criador';
$string['viewgrading'] = 'Avaliar questões';
$string['youhavedone'] = 'Elaborou {$a} questões.';
$string['youvesetmorethanonemin'] = 'Foi configurado mais do que um número mínimo de questões para o tipo de pergunta \'{$a}\'!';
