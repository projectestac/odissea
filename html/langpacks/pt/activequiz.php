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
 * Strings for component 'activequiz', language 'pt', version '3.11'.
 *
 * @package     activequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activequiz:addinstance'] = 'Adicionar instância de Teste Ativo';
$string['activequiz:attempt'] = 'Responder a Teste Ativo';
$string['activequiz:control'] = 'Controlar um Teste Ativo. (normalmente é apenas para os professores)';
$string['activequiz:editquestions'] = 'Editar questões de um Teste Ativo';
$string['activequiz:seeresponses'] = 'Ver respostas de outros alunos para as classificar';
$string['activequiz:viewownattempts'] = 'Permite que que os alunos vejam as suas próprias tentativas de realização do teste';
$string['activequizintro'] = 'Introdução';
$string['activequizsettings'] = 'Configurações gerais do Teste Ativo';
$string['activitygrades'] = 'Notas da atividade:';
$string['addquestion'] = 'Adicionar questão';
$string['addtoquiz'] = 'Adicionar';
$string['anonymousresponses'] = 'Respostas dos alunos são anónimas';
$string['anonymousresponses_help'] = 'Tornar anónimas as respostas dos alunos na vista do professor para que, caso o seu écrã esteja a ser projetado, não sejam visíveis os nomes dos alunos ou os nomes de grupos';
$string['anonymoususer'] = 'Anónimo';
$string['assessed'] = 'Avaliada';
$string['assessed_help'] = 'Ative esta caixa para assinalar o teste como avaliado';
$string['attempt_grade'] = 'Avaliar tentativa';
$string['attemptno'] = 'Nº da tentativa';
$string['attempts'] = 'Tentativas';
$string['attemptstarted'] = 'Já iniciou uma tentativa. Clique abaixo para continuar a sua tentativa em aberto';
$string['attemptstartedalready'] = 'Já foi iniciada uma tentativa por um dos membros do seu grupo';
$string['attemptview'] = 'Ver tentativa';
$string['cantaddquestiontwice'] = 'Não é possível adicionar a mesma questão mais do que uma vez num teste';
$string['cantinitattempts'] = 'Não é possível inicializar tentativas para si';
$string['closesession'] = 'Fechar sessão';
$string['closingsession'] = 'A fechar sessão';
$string['countdatasetlabel'] = 'Número de respostas';
$string['defaultquestiontime'] = 'Duração predefinida das questões';
$string['defaultquestiontime_help'] = 'A duração predefinida para exibir cada questão.<br /> Pode ser redefinida em cada questão.';
$string['edit'] = 'Editar teste';
$string['editpage_opensession_error'] = 'Não é possível editar uma questão do teste ou alterar a sua estrutura enquanto uma sessão estiver aberta.';
$string['enabledquestiontypes'] = 'Ativar tipos de questões';
$string['enabledquestiontypes_info'] = 'Tipos de questões que podem ser usadas na atividade Teste Ativo.';
$string['endquestion'] = 'Finalizar questão';
$string['errorregrade'] = 'Houve um erro na tentativa de reavaliar todos os testes';
$string['eventattemptstarted'] = 'Tentativa iniciada';
$string['eventattemptviewed'] = 'Tentativa visualizada';
$string['eventquestionanswered'] = 'Questão respondida na tentativa';
$string['eventquestionmanuallygraded'] = 'Questão avaliada manualmente';
$string['feedbackintro'] = 'Feedback para a sua questão. Por favor aguarde que o professor inicie a próxima questão';
$string['firstsession'] = 'Primeira sessão';
$string['fullanonymize'] = 'Respostas dos alunos totalmente anónimas';
$string['fullanonymize_help'] = 'Se selecionar esta opção, as respostas desta sessão não serão avaliadas nem aplicadas aos alunos.';
$string['gatheringresults'] = 'A recolher os resultados...';
$string['gotosession'] = 'Ir para a sessão em curso';
$string['grademethod'] = 'Método de avaliação da sessão';
$string['grademethod_help'] = 'Este é o método usado na avaliação. Este método serve para a avaliação com várias sessões no mesmo teste ativo';
$string['gradesettings'] = 'Configurações da avaliação';
$string['groupattendance'] = 'Permitir registar presenças do grupo';
$string['groupattendance_help'] = 'Se ativar esta opção, o aluno que está a responder ao teste pode seleccionar quais os alunos do seu grupo que estão presentes.';
$string['grouping'] = 'Agrupamento';
$string['grouping_help'] = 'Selecione o agrupamento que gostaria de usar para agrupar os alunos';
$string['groupmembership'] = 'Participação no grupo';
$string['groupworksettings'] = 'Configuração dos grupos';
$string['hide_correct_answer'] = 'Ocultar resposta correta';
$string['hidenotresponded'] = 'Ocultar não respondidas';
$string['hidestudentresponses'] = 'Ocultar respostas';
$string['highestsessiongrade'] = 'Classificação mais alta da sessão';
$string['indvquestiontime'] = 'Tempo da questão';
$string['indvquestiontime_help'] = 'Tempo da questão em segundos';
$string['instructorquizinst'] = '<p>Por favor, aguarde nesta página até os alunos estarem todos ligados. Depois de clicar em <b>Iniciar teste</b>, o teste irá começar a primeira questão</p>
<p>
<p>Controlos:</p>
<ul>
<li>
Recolocar a questão
<ul>
<li>
Permite ao professor voltar a colocar a questão atual ou a anterior (disponível durante a revisão de uma questão).
</li>
</ul>
</li>
<li>
Próxima questão
<ul>
<li>
Continuar para a questão seguinte (disponível durante a revisão de uma questão).
</li>
</ul>
</li>
<li>
Finalizar questão
<ul>
<li>
Finaliza a questão atual. Também permite ao professor terminar uma questão com o tempo ainda a decorrer (disponível enquanto a questão estiver a ser executada). <i>Se a questão não tem limite de tempo, o professor tem de clicar em <b>Finalizar questão.</b></i>
</li>
</ul>
</li>
<li>
Ir para a questão
<ul>
<li>
Abre uma caixa de diálogo para direcionar todos os alunos para uma questão específica no teste (disponível durante a revisão de uma questão).
</li>
</ul>
</li>
<li>
Fechar sessão
<ul>
<li>
Fecha a sessão atual, bem como todas as tentativas para os alunos. Serão automaticamente avaliadas todas as tentativas (disponível a qualquer momento).
</li>
</ul>
</li>
<li>
Atualizar resultados
<ul>
<li>
Atualiza as respostas dos alunos na caixa de informações. Permite ao professor averiguar quantos alunos ou grupos já responderam e quantos ainda têm de responder (disponível durante a revisão de uma questão).
</li>
</ul>
</li>
<li>
Ocultar/Mostrar Não respondida
<ul>
<li>
Oculta ou mostra a caixa de informações que exibe quantos alunos ou grupos já responderam e os alunos ou grupos que ainda têm de responder (disponível quando uma questão é colocada).
</li>
</ul>
</li>
<li>
Mostrar resposta correta
<ul>
<li>
Permite ao professor ver a resposta correta para a questão selecionada (disponível durante a revisão de uma questão). Não mostra a resposta correta para as questões de avaliação manual, tais como perguntas de desenvolvimento ou questões de desenho.
</li>
</ul>
</li>
</ul>
</p>';
$string['instructorsessionsgoing'] = 'Já existe uma sessão em curso. Por favor clique no botão abaixo para ir para a sessão';
$string['invalid_indvquestiontime'] = 'Tempo para responder deve ser um número inteiro igual ou superior a 0';
$string['invalid_numberoftries'] = 'Número de tentativas deve ser um número inteiro igual ou superior a 1';
$string['invalid_points'] = 'A pontuação é obrigatória e deve ser um número maior do que 0';
$string['invalidattemptaccess'] = 'Não tem permissão para aceder a esta tentativa';
$string['invalidgroupid'] = 'É necessário um \'group id\' válido para os alunos';
$string['invalidquestionattempt'] = 'Uma questão inválida ($a->questionname) foi adicionada à tentativa do Teste.';
$string['isanonymous'] = 'Todas as respostas a este teste ativo são anónimas';
$string['joinquiz'] = 'Juntar-se ao Teste';
$string['joinquizinstructions'] = 'Clique abaixo para juntar-se ao Teste';
$string['jumptoquesetioninstructions'] = 'Selecione uma questão para ir para:';
$string['jumptoquestion'] = 'Ir para a questão';
$string['lastsession'] = 'Última sessão';
$string['loading'] = 'A inicializar o Teste';
$string['manualcomment'] = 'Comentário manual';
$string['manualcomment_help'] = 'O comentário que os professores podem adicionar quando classificam uma tentativa';
$string['marks'] = 'Classificações';
$string['marks_help'] = 'A nota numérica para cada questão e a pontuação total da tentativa';
$string['modulename'] = 'Teste Ativo';
$string['modulename_help'] = '<p>A atividade de Teste Ativo permite ao professor criar e administrar testes em tempo real. Todos os tipos de perguntas dos testes normais podem ser utilizadas no Teste Ativo.</p>
<p>Teste Ativo permite a participação individual ou em grupo. É possível responder em grupo mas os pontos obtidos durante o teste ativo somente serão atribuídos aos participantes que assistiram à sessão. As questões podem ser configuradas para permitir várias tentativas. Pode ser definido um tempo limite para terminar automaticamente a questão, ou o professor pode terminar manualmente a questão e passar para a seguinte. O professor também tem a capacidade de saltar para diferentes questões durante a execução da sessão. Os professores podem monitorar a participação individual ou de grupos, respostas em tempo real dos participantes e a colocação das questões. </p>
<p>Cada tentativa do teste é marcada automaticamente como um teste normal (com a exceção de questões de ensaio ou PoodLL) e a nota é registada na pauta. A classificação para a participação em grupo pode ser feita automaticamente, transferindo a nota do aluno que respondeu para os outros membros do grupo. </p>
<p>O professor tem opções para mostrar sugestões, dar feedback e mostrar as respostas corretas aos alunos mediante a conclusão do teste. </p>
<p>Teste Ativo pode ser usado como um meio para a Aprendizagem Baseada em Equipe dentro do Moodle. </p>';
$string['modulenameplural'] = 'Testes Ativos';
$string['nextquestion'] = 'Próxima questão';
$string['no_questions'] = 'Ainda não foram adicionadas questões ao teste.';
$string['nochangegroups'] = 'Não pode alterar os grupos após a criação de sessões ou não há agrupamentos definidos nessa disciplina.';
$string['nochangegroups_label'] = '&nbsp;';
$string['nofeedback'] = 'Não há feedback para esta questão';
$string['nosession'] = 'Não existe sessão aberta';
$string['notime'] = 'Sem limite de tempo';
$string['notime_help'] = 'Marque este campo para não ter "cronómetro" nesta questão. <p>O professor terá de clicar em \'Finalizar questão\' para prosseguir</p>';
$string['notresponded'] = 'Número de tentativas não respondidas';
$string['notries'] = 'Foram esgotadas as tentativas para responder a esta questão';
$string['numberoftries'] = 'Número de tentativas';
$string['numberoftries_help'] = 'Número de tentativas para tentar responder a uma questão. Os alunos continuarão sujeitos ao limite de tempo da questão';
$string['overallgrade'] = 'Nota global: {$a->overallgrade} / {$a->scale}';
$string['percentagedatasetlabel'] = 'Percentagem de respostas dadas';
$string['pluginadministration'] = 'Administração do Teste Ativo';
$string['pluginname'] = 'Teste Ativo';
$string['points'] = 'Pontuação';
$string['points_help'] = 'Pontuação da questão';
$string['qdeleteerror'] = 'Não foi possível eliminar a questão';
$string['qdeletesucess'] = 'Questão eliminada com sucesso';
$string['qmoveerror'] = 'Não foi possível mover a questão';
$string['qmovesuccess'] = 'Questão movida com sucesso';
$string['question'] = 'Questão';
$string['questiondelete'] = 'Eliminar a questão {$a}';
$string['questionedit'] = 'Editar questão';
$string['questionfinished'] = 'Questão terminada, à espera dos resultados';
$string['questionlist'] = 'Lista de questões';
$string['questionmovedown'] = 'Mover para baixo a questão {$a}';
$string['questionmoveup'] = 'Mover para cima a questão {$a}';
$string['quiznotrunning'] = 'De momento o teste ainda não está a decorrer - espere que o professor o inicie. Use o botão de recarregar para  atualizar esta página e verificar novamente';
$string['regradeallgrades'] = 'Reavaliar';
$string['reload_results'] = 'Atualizar resultados';
$string['repollquestion'] = 'Recolocar a questão';
$string['response_attempt_controls'] = 'Editar/Ver tentativa';
$string['responses'] = 'Ver respostas';
$string['reviewafter'] = 'Após o fecho das sessões';
$string['reviewoptionsettings'] = 'Opções de revisão';
$string['savequestion'] = 'Guardar questão';
$string['scale'] = 'Nota mais alta';
$string['scale_help'] = 'Este valor (inteiro) será a escala para quaisquer que sejam os pontos recebidos no teste.';
$string['select_group'] = 'Selecione o grupo';
$string['selectsession'] = 'Selecione a sessão que pretende rever:    ';
$string['sessionaverage'] = 'Média da sessão';
$string['sessionclosed'] = 'Sessão fechada';
$string['sessionname'] = 'Nome da sessão';
$string['sessionname_required'] = 'É necessário um nome da sessão';
$string['sessionnametext'] = '<span style="font-weight: bold">Sessão: </span>';
$string['show_correct_answer'] = 'Mostrar resposta correta';
$string['showhistoryduringquiz'] = 'Mostrar histórico de respostas';
$string['showhistoryduringquiz_help'] = 'Mostrar o histórico de respostas do aluno/grupo para esta questão ao rever respostas durante um teste.';
$string['shownotresponded'] = 'Mostrar não respondidas';
$string['showstudentresponses'] = 'Mostrar respostas';
$string['start_session'] = 'Iniciar sessão';
$string['startedon'] = 'Iniciado em';
$string['startquiz'] = 'Iniciar teste';
$string['studentquizinst'] = '<p>Por favor, aguarde que o professor inicie o teste. Uma vez iniciado, verá um cronómetro em contagem decrescente para começar a primeira questão</p>';
$string['successregrade'] = 'Teste reavaliado com sucesso';
$string['teacherjoinquizinstruct'] = 'Marque se pretender experimentar sozinho o teste<br /> (é necessário iniciar o teste numa janela separada)';
$string['teacherstartinstruct'] = 'Marque para começar um teste para os alunos<br /> Use a caixa de texto para definir um nome para esta sessão (ajuda para quando revê os resultados numa data posterior).';
$string['theattempt'] = 'Tentativa';
$string['theattempt_help'] = 'Se o aluno pode rever a tentativa.';
$string['timecompleted'] = 'Concluído em';
$string['timemodified'] = 'Modificado em';
$string['timertext'] = 'A questão termina e será submetida automaticamente em:';
$string['trycount'] = 'Tem {$a->tries} tentativas.';
$string['unabletocreate_session'] = 'Não é possível criar sessão';
$string['view'] = 'Ver teste';
$string['viewstats'] = 'Ver estatísticas do teste';
$string['waitforquestion'] = 'Tempo de espera para surgir a questão:';
$string['waitforquestiontime'] = 'Tempo de espera para a questão';
$string['waitforquestiontime_help'] = 'Tempo de espera para a questão iniciar';
$string['waitforrevewingend'] = 'O professor está a rever a questão anterior. Por favor, aguarde que a próxima questão inicie';
$string['waitstudent'] = 'À espera que os alunos se liguem ao teste';
$string['workedingroups'] = 'Irão participar em grupos.';
$string['workedingroups_help'] = 'Marque esta caixa para indicar que os alunos irão participar em grupos. Certifique-se de selecionar um agrupamento abaixo';
