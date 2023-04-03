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
 * Strings for component 'attendance', language 'pt', version '3.11'.
 *
 * @package     attendance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'F';
$string['Afull'] = 'Faltou';
$string['Eacronym'] = 'D';
$string['Efull'] = 'Dispensado';
$string['Lacronym'] = 'A';
$string['Lfull'] = 'Atrasado';
$string['Pacronym'] = 'P';
$string['Pfull'] = 'Presente';
$string['absenteereport'] = 'Relatório de faltas';
$string['acronym'] = 'Sigla';
$string['add'] = 'Adicionar';
$string['addedrecip'] = 'Adicionado {$a} novo destinatário';
$string['addedrecips'] = 'Adicionados {$a} novos destinatários';
$string['addmultiplesessions'] = 'Múltiplas sessões';
$string['addsession'] = 'Adicionar sessão';
$string['adduser'] = 'Adicionar utilizador';
$string['addwarning'] = 'Adicionar aviso';
$string['all'] = 'Todas';
$string['allcourses'] = 'Todas as disciplinas';
$string['allpast'] = 'Todas as anteriores';
$string['allsessions'] = 'Todas as sessões';
$string['allsessionstotals'] = 'Total das sessões selecionadas';
$string['attendance:addinstance'] = 'Adicionar uma nova atividade de Assiduidade';
$string['attendance:canbelisted'] = 'Aparece na lista';
$string['attendance:changeattendances'] = 'Editar assiduidade';
$string['attendance:changepreferences'] = 'Editar preferências';
$string['attendance:export'] = 'Exportar relatórios';
$string['attendance:import'] = 'Importar sessões de ficheiros (csv)';
$string['attendance:manageattendances'] = 'Gerir a assiduidade';
$string['attendance:managetemporaryusers'] = 'Gerir utilizadores temporários';
$string['attendance:takeattendances'] = 'Registar assiduidade';
$string['attendance:view'] = 'A ver a assiduidade';
$string['attendance:viewreports'] = 'A visualizar relatórios';
$string['attendance:viewsummaryreports'] = 'Ver relatórios do resumo por disciplina';
$string['attendance:warningemails'] = 'Pode ser subscrito em e-mails de utilizadores ausentes';
$string['attendance_already_submitted'] = 'A sua assiduidade já foi registada pelo professor.';
$string['attendance_no_status'] = 'Nenhum estado válido estava disponível - pode estar atrasado para registar a assiduidade.';
$string['attendancedata'] = 'Dados da assiduidade';
$string['attendancefile'] = 'Ficheiro de assiduidade (formato csv)';
$string['attendancefile_help'] = 'O ficheiro tem de ser um ficheiro CSV com uma linha de cabeçalho e campos para identificar o utilizador e a assiduidade registada, por exemplo: email,scantime (e-mail, hora do registo) ou username,time (nome de utilizador,hora)';
$string['attendanceforthecourse'] = 'Assiduidade';
$string['attendancegrade'] = 'Avaliação da assiduidade';
$string['attendancenotset'] = 'Tem de registar a sua assiduidade';
$string['attendancenotstarted'] = 'A assiduidade ainda não foi iniciada nesta disciplina';
$string['attendancepercent'] = 'Percentagem de assiduidade';
$string['attendancereport'] = 'Relatório de assiduidade';
$string['attendanceslogged'] = 'Assiduidades registadas';
$string['attendancestaken'] = 'Assiduidades marcadas';
$string['attendancesuccess'] = 'A assiduidade foi registada com sucesso';
$string['attendanceupdated'] = 'A assiduidade foi atualizada com sucesso';
$string['attforblockdirstillexists'] = 'ainda existe uma pasta \'mod/attforblock\' antiga - tem que a apagar no servidor antes de fazer a atualização.';
$string['attrecords'] = 'Registos de assiduidade';
$string['autoassignstatus'] = 'Selecionar automaticamente o estado mais favorável';
$string['autoassignstatus_help'] = 'Se ativar esta opção, será atribuída automaticamente aos alunos a nota mais alta disponível.';
$string['automark'] = 'Registo automático';
$string['automark_help'] = 'Permite que o registo seja realizado automaticamente.
Se "Sim" os alunos serão automaticamente registados, dependendo do seu primeiro acesso à disciplina.
Se "Sem registo no fim da sessão", qualquer aluno que não tenha registado a sua assiduidade, será registado com o estado atribuido automaticamente a não registados que foi selecionado na configuração do conjunto de estados.';
$string['automarkall'] = 'Sim';
$string['automarkclose'] = 'Sem registo no fim da sessão';
$string['automarktask'] = 'Verificar a assiduidade das sessões que exigem marcação automática';
$string['automarkuseempty'] = 'Controlo da disponibilidade de estados';
$string['automarkuseempty_desc'] = 'Se ativar esta opção, os itens de estado que na configuração "Disponibilidade" estão vazios/não definidos, serão permitidos quando os alunos registam a sua presença';
$string['autorecorded'] = 'guardado automaticamente pelo sistema';
$string['averageattendance'] = 'Assiduidade média';
$string['averageattendancegraded'] = 'Assiduidade média';
$string['backtoparticipants'] = 'Voltar à lista de participantes';
$string['below'] = 'Abaixo de {$a}%';
$string['calclose'] = 'Fechar';
$string['calendarevent'] = 'Criar evento no calendário para a sessão';
$string['calendarevent_help'] = 'Se ativar esta opção, será criado um evento no calendário para esta sessão.
Se desativada, qualquer evento existente no calendário para esta sessão será apagado.';
$string['caleventcreated'] = 'Foi criado com sucesso um evento no calendário para a sessão';
$string['caleventdeleted'] = 'O evento no calendário da sessão foi eliminado com sucesso';
$string['calmonths'] = 'Janeiro,Fevereiro,Março,Abril,Maio,Junho,Julho,Agosto,Setembro,Outubro,Novembro,Dezembro';
$string['calshow'] = 'Escolha a data';
$string['calweekdays'] = 'Do,2ª,3ª,4ª,5ª,6ª,Sa';
$string['cannottakeforgroup'] = 'Não pode registar a assiduidade do grupo "{$a}"';
$string['cannottakethisgroup'] = 'Não é um membro do grupo da disciplina ao se refere esta esta sessão de assiduidade. A sua assiduidade não foi registada.';
$string['cantaddstatus'] = 'Tem de indicar uma sigla e uma descrição ao adicionar um novo estado.';
$string['categoryreport'] = 'Relatório da categoria da disciplina';
$string['changeattendance'] = 'Editar assiduidade';
$string['changeduration'] = 'Alterar duração';
$string['changesession'] = 'Editar sessão';
$string['checkweekdays'] = 'Seleccione os dias da semana que se enquadram dentro do intervalo de datas selecionado da sessão.';
$string['closed'] = 'De momento, esta sessão não permite que os alunos registem a sua presença';
$string['column'] = 'coluna';
$string['columnmap'] = 'Mapeamento das colunas';
$string['columnmap_help'] = 'Para cada um dos campos apresentados, selecione a coluna correspondente no ficheiro CSV.';
$string['columns'] = 'colunas';
$string['commonsession'] = 'Todos os alunos';
$string['commonsessions'] = 'Todos os alunos';
$string['confirm'] = 'Confirmar';
$string['confirmcolumnmappings'] = 'Confirmar mapeamento das colunas';
$string['confirmdeletehiddensessions'] = 'Tem a certeza de que pretende apagar {$a->count} sessões agendadas para antes da data de início da disciplina ({$a->date})?';
$string['confirmdeleteuser'] = 'Tem a certeza de que pretende excluir da assiduidade o utilizador \'{$a->fullname}\' ({$a->email})?<br/>Todos os registos de assiduidade deste utilizador serão eliminados definitivamente.';
$string['copyfrom'] = 'Copiar dados de assiduidade de';
$string['countofselected'] = 'Número de selecionados';
$string['course'] = 'Disciplina';
$string['coursemessage'] = 'Mensagem aos utilizadores da disciplina';
$string['courseshortname'] = 'Nome curto da disciplina';
$string['coursesummary'] = 'Resumo por disciplina';
$string['createmultiplesessions'] = 'Criar várias sessões';
$string['createmultiplesessions_help'] = 'Se ativar esta opção, pode criar várias sessões num único e simples passo. As sessões começam na \'Data da sessão\' e continuam até à data \'Repetir até\'.

- <strong>Repetir nos dias</strong>: Selecione os dias da semana em que ocorre a sessão (por exemplo, segunda/quarta/sexta).<br />
- <Strong>Repetir a cada</strong>: Permite definir a frequência com que ocorre. Se a sessão ocorre a cada semana, selecione 1, se ocorre a cada duas semanas, selecione 2, a cada 3 semanas, selecione 3, etc.<br />
- <Strong>Repetir até</strong>: Selecione o último dia em que ocorre a sessão (o último dia que pretende registar a assiduidade).';
$string['createonesession'] = 'Criar uma sessão para a disciplina';
$string['csvdelimiter'] = 'Delimitador CSV';
$string['currentlyselectedusers'] = 'Utilizadores selecionados';
$string['customexportfields'] = 'Exportar campos de perfil do utilizador personalizados';
$string['customexportfields_help'] = 'Campos extras de perfil do utilizador personalizados para mostrar no relatório de exportação.';
$string['date'] = 'Data';
$string['days'] = 'Dias';
$string['defaultdisplaymode'] = 'Modo de apresentação predefinido';
$string['defaults'] = 'Predefinições';
$string['defaultsessionsettings'] = 'Configurações predefinidas da sessão';
$string['defaultsessionsettings_help'] = 'Estas configurações definem os valores predefinidos para todas as novas sessões';
$string['defaultsettings'] = 'Configurações predefinidas da assiduidade';
$string['defaultsettings_help'] = 'Estas configurações definem os valores predefinidos para todas as novas  atividades de Assiduidade';
$string['defaultstatus'] = 'Estados predefinidos';
$string['defaultsubnet'] = 'Endereço de rede predefinido';
$string['defaultsubnet_help'] = 'O registo da assiduidade pode ser restringido a determinadas sub-redes se especificar uma lista de endereços IP, parciais ou completos, separados por vírgulas. Este é o valor predefinido usado ao criar novas sessões.';
$string['defaultview'] = 'Vista predefinida ao aceder';
$string['defaultview_desc'] = 'Vista predefinida mostrada aos professores no primeiro acesso.';
$string['defaultwarnings'] = 'Predefinições dos avisos';
$string['defaultwarningsettings'] = 'Configurações predefinidas dos avisos';
$string['defaultwarningsettings_help'] = 'Configurações predefinidas para todos os novos avisos';
$string['delete'] = 'Apagar';
$string['deletecheckfull'] = 'Tem a certeza absoluta de que pretende apagar completamente o item \'{$a}\', incluindo todos os dados do utilizador?';
$string['deletedgroup'] = 'O grupo asssociado a esta sessão foi eliminado';
$string['deletehiddensessions'] = 'Apagar sessões ocultas';
$string['deletelogs'] = 'Apagar dados da assiduidade';
$string['deleteselected'] = 'Apagar as selecionadas';
$string['deletesession'] = 'Apagar sessão';
$string['deletesessions'] = 'Apagar todas as sessões';
$string['deleteuser'] = 'Apagar utilizador';
$string['deletewarningconfirm'] = 'Tem a certeza de que pretende apagar este aviso?';
$string['deletingsession'] = 'A apagar sessão da disciplina';
$string['deletingstatus'] = 'Estado da eliminação na disciplina';
$string['description'] = 'Descrição';
$string['display'] = 'Apresentação';
$string['displaymode'] = 'Modo de apresentação';
$string['donotusepaging'] = 'Sem paginação';
$string['downloadexcel'] = 'Descarregar em formato Excel (xlsx)';
$string['downloadooo'] = 'Descarregar em formato OpenOffice (ods)';
$string['downloadtext'] = 'Descarregar em formato de texto (txt)';
$string['duration'] = 'Duração';
$string['editsession'] = 'Editar sessão';
$string['edituser'] = 'Editar utilizador';
$string['emailcontent'] = 'Mensagem';
$string['emailcontent_default'] = 'Olá %userfirstname%,
A sua assiduidade na disciplina %coursename% %attendancename% está abaixo de %warningpercent% e é atualmente de %percent%.
Esperamos que esteja bem!!

Para tirar o máximo proveito da disciplina, deve melhorar a sua assiduidade. Entre em contacto, se precisar de mais suporte.';
$string['emailcontent_help'] = 'Quando um aviso é enviado a um aluno, a mensagem do e-mail é o conteúdo deste campo. Podem ser usados os seguintes itens:
<ul>
<li>%coursename%</li>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%userid%</li>
<li>%warningpercent%</li>
<li>%attendancename%</li>
<li>%cmid%</li>
<li>%numtakensessions%</li>
<li>%points%</li>
<li>%maxpoints%</li>
<li>%percent%</li>
</ul>';
$string['emailsubject'] = 'Assunto';
$string['emailsubject_default'] = 'Aviso de faltas';
$string['emailsubject_help'] = 'Quando um aviso é enviado a um aluno, o assunto do e-mail é o conteúdo deste campo.';
$string['emailuser'] = 'Enviar e-mail';
$string['emailuser_help'] = 'Se ativar esta opção, será enviado um aviso ao aluno.';
$string['emptyacronym'] = 'Não são permitidas siglas em branco. Registo não foi atualizado.';
$string['emptydescription'] = 'Não são permitidas descrições em branco. Registo não foi atualizado.';
$string['enablecalendar'] = 'Criar eventos no calendário';
$string['enablecalendar_desc'] = 'Se ativar esta opção, será criado um evento no calendário para cada sessão da assiduidade. Depois de alterar esta configuração, deve executar a reinicialização do calendário.';
$string['enablewarnings'] = 'Ativar o uso de avisos';
$string['enablewarnings_desc'] = 'Permite que seja definido um aviso para notificações acerca da assiduidade que será enviado por e-mail aos utilizadores quando a assiduidade for abaixo do limite estabelecido. <br/><strong>AVISO: Este recurso é novo e não foi testado exaustivamente. Use-o por seu próprio risco e forneça feedback nos fóruns do Moodle se achar que funciona bem.</strong>';
$string['encoding'] = 'Codificação';
$string['encoding_help'] = 'Refere-se ao tipo de codificação do código de barras usado no cartão de identificação dos alunos. Tipos típicos de esquemas de codificação do código de barras incluem Code-39, Code-128 e UPC-A';
$string['endofperiod'] = 'Fim do período';
$string['endtime'] = 'Hora do fim da sessão';
$string['enrolmentend'] = 'Inscrição do aluno termina em {$a}';
$string['enrolmentstart'] = 'Inscrição do aluno inicia em {$a}';
$string['enrolmentsuspended'] = 'Inscrição suspensa';
$string['enterpassword'] = 'Inserir senha';
$string['error:coursehasnoattendance'] = 'A disciplina com o nome curto \'{$a}\' não tem atividades de assiduidade.';
$string['error:coursenotfound'] = 'A disciplina com o nome curto \'{$a}\' não foi encontrada.';
$string['error:qrcode'] = 'Permitir que os alunos registem a própria assiduidade deve estar ativado para usar o código QR! A ignorar.';
$string['error:sessioncourseinvalid'] = 'A sessão da disciplina é inválida! A ignorar.';
$string['error:sessiondateinvalid'] = 'A data da sessão é inválida! A ignorar.';
$string['error:sessionendinvalid'] = 'A hora de fim da sessão é inválida! A ignorar.';
$string['error:sessionstartinvalid'] = 'A hora de início da sessão é inválida! A ignorar.';
$string['error:statusnotfound'] = 'O utilizador \'{$a->extuser}\' tem um valor de estado que não foi encontrado: {$a->status}';
$string['error:timenotreadable'] = 'O utilizador \'{$a->extuser}\' tem uma data de registo que não pode ser convertida por pela função \'strtotime\': {$a->status}';
$string['error:userduplicate'] = 'O utilizador \'{$a}\' aparece mais do que uma vez na importação. Inclua apenas um registo por utilizador.';
$string['error:usernotfound'] = 'Não foi possível encontrar o utilizador com o campo \'{$a->userfield}\' definido por \'{$a->extuser}\'';
$string['errorgroupsnotselected'] = 'Selecione um ou mais grupos';
$string['errorinaddingsession'] = 'Erro ao adicionar a sessão';
$string['erroringeneratingsessions'] = 'Erro ao criar as sessões';
$string['eventdurationupdated'] = 'Duração da sessão atualizada';
$string['eventreportviewed'] = 'Visualizado o relatório da assiduidade';
$string['eventscreated'] = 'Criados eventos no calendário';
$string['eventsdeleted'] = 'Apagados eventos no calendário';
$string['eventsessionadded'] = 'Sessão adicionada';
$string['eventsessiondeleted'] = 'Sessão eliminada';
$string['eventsessionipshared'] = 'Conflito de IP no registo da própria assiduidade';
$string['eventsessionsimported'] = 'Sessões importadas';
$string['eventsessionupdated'] = 'Sessão atualizada';
$string['eventstatusadded'] = 'Adicionado estado';
$string['eventstatusupdated'] = 'Estado atualizado';
$string['eventstudentattendancesessionsupdated'] = 'Relatório da sessão atualizado';
$string['eventstudentattendancesessionsviewed'] = 'Relatório de sessão visualizado';
$string['eventtaken'] = 'Assiduidade registada';
$string['eventtakenbystudent'] = 'Assiduidade registada pelo aluno';
$string['export'] = 'Exportar';
$string['extrarestrictions'] = 'Restrições adicionais';
$string['formattexttype'] = 'A formatar';
$string['from'] = 'das: ';
$string['gradebookexplanation'] = 'Nota na pauta';
$string['gradebookexplanation_help'] = 'O módulo Assiduidade mostra a classificação da assiduidade atual baseada no número de pontos obtidos até à data e o número de pontos que podiam ter sido ganhos até à data; não inclui períodos de aulas futuras. Na pauta, a classificação é baseada na percentagem de assiduidade atual e no número de pontos que podem ser ganhos durante toda a extensão da disciplina, incluindo períodos de aulas futuras. Como tal, as classificações de assiduidade apresentadas no módulo Assiduidade e na pauta podem não ter o mesmo número de pontos mas referem-se à mesma percentagem.

Por exemplo, se ganhou 8 pontos em 10 até à data (80% de assiduidade) e a assiduidade na disciplina valer 50 pontos, o módulo de assiduidade irá apresentar 8/10 e a pauta irá apresentar 40/50. Se ainda não ganhou 40 pontos, 40 é o valor de pontos equivalente aos 80% da sua assiduidade atual. O valor de pontos que ganhou no módulo Assiduidade nunca diminui, uma vez que baseia-se exclusivamente na assiduidade até à data, contudo, o valor de pontos da assiduidade apresentado na pauta pode aumentar ou diminuir dependendo da assiduidade futura, uma vez que baseia-se na assiduidade de toda a disciplina.';
$string['graded'] = 'Sessões avaliadas';
$string['gridcolumns'] = 'Colunas da grelha';
$string['group'] = 'Grupo';
$string['groups'] = 'Grupos';
$string['groupsession'] = 'Grupo de alunos';
$string['groupsessionsby'] = 'Agrupar sessões por';
$string['hiddensessions'] = 'Sessões ocultas';
$string['hiddensessions_help'] = 'As sessões ficam ocultas se agendadas para antes da data de início da disciplina. Altere a data de início da disciplina para mostrar as sessões ocultas.
Pode usar esta funcionalidade para ocultar sessões antigas ao invés de as apagar. Lembre-se que apenas as sessões visíveis aparecem na pauta.';
$string['hiddensessionsdeleted'] = 'Todas as sessões ocultas foram eliminadas';
$string['hideextrauserdetails'] = 'Ocultar detalhes adicionais do utilizador';
$string['hidensessiondetails'] = 'Ocultar detalhes da sessão';
$string['identifyby'] = 'Identificar aluno por';
$string['import'] = 'Importar';
$string['importfile'] = 'Importar ficheiro';
$string['importfile_help'] = 'Importar ficheiro';
$string['importsessions'] = 'Importar sessões';
$string['importstatus'] = 'Campo do estado';
$string['importstatus_help'] = 'Permite que um valor do estado seja incluído na importação - por exemplo, valores como P, F ou A';
$string['includeabsentee'] = 'Incluir sessão ao calcular o relatório de ausências';
$string['includeabsentee_help'] = 'Se ativar esta opção, esta sessão será incluída nos cálculos do relatório de ausências.';
$string['includeall'] = 'Selecionar todas as sessões';
$string['includedescription'] = 'Incluir descrição da sessão';
$string['includenottaken'] = 'Incluir sessões sem registos';
$string['includeqrcode'] = 'Incluir código QR';
$string['includeremarks'] = 'Incluir comentários';
$string['incorrectpassword'] = 'A senha digitada está incorreta e a sua assiduidade não foi registada. Digite a senha correta.';
$string['incorrectpasswordshort'] = 'Senha incorreta. Assiduidade não registada';
$string['indetail'] = 'Ao pormenor...';
$string['indicator:cognitivedepth'] = 'Compreensão da Assiduidade';
$string['indicator:cognitivedepth_help'] = 'Este indicador é baseado na extensão social alcançada pelo aluno numa atividade de Assiduidade.';
$string['indicator:cognitivedepthdef'] = 'Compreensão da Assiduidade';
$string['indicator:cognitivedepthdef_help'] = 'O participante alcançou esta percentagem da capacidade cognitiva oferecida pela atividade Assiduidade durante esse intervalo de análise (Níveis = Não visualizado, Visualizado)';
$string['indicator:socialbreadth'] = 'Socialização da Assiduidade';
$string['indicator:socialbreadth_help'] = 'Este indicador é baseado na extensão social alcançada pelo aluno numa atividade Assiduidade.';
$string['indicator:socialbreadthdef'] = 'Socialização da Assiduidade';
$string['indicator:socialbreadthdef_help'] = 'O participante alcançou esta percentagem do relacionamento social proposto pelas atividades Trabalho durante este intervalo de análise (Níveis = Sem participação, Participante individual)';
$string['invalidaction'] = 'Tem de selecionar uma ação';
$string['invalidemails'] = 'Tem de especificar endereços pertencentes a contas de utilizador existentes. Não foi possível encontrar: {$a}';
$string['invalidimportfile'] = 'Formato de ficheiro inválido';
$string['invalidsessionenddate'] = 'Esta data não pode ser anterior à data da sessão';
$string['invalidsessionendtime'] = 'A hora de fim deve ser posterior à hora de início';
$string['invalidstatus'] = 'Selecionou um estado inválido. Tente novamente';
$string['iptimemissing'] = 'Minutos inválidos para libertar IP';
$string['jumpto'] = 'Saltar para';
$string['keepsearching'] = 'Continuar a pesquisar';
$string['marksessionimportcsvhelp'] = 'Este formulário permite que carregue um ficheiro CSV contendo um identificador do utilizador e um estado - o campo de estado pode ser a sigla do estado ou a hora em que a assiduidade foi registada para aquele utilizador. Se for indicado um valor de data/hora, o sistema tentará atribuir o valor de estado com a nota mais alta disponível naquele momento.';
$string['maxpossible'] = 'Máximo possível';
$string['maxpossible_help'] = 'Mostra a pontuação que cada utilizador pode obter se receber o máximo de pontos em cada sessão ainda sem registos (passado e futuro):
<ul>
<li><strong>Pontos</strong>: máximo de pontos que cada utilizador pode obter em todas as sessões.</li>
<li><strong>Percentagem</strong>: percentagem máxima que cada utilizador pode obter em todas as sessões.</li>
</ul>';
$string['maxpossiblepercentage'] = 'Máxima percentagem possível';
$string['maxpossiblepoints'] = 'Máximo de pontos possível';
$string['maxwarn'] = 'Número máximo de e-mails de aviso';
$string['maxwarn_help'] = 'O número máximo de vezes que um aviso deve ser enviado (apenas um aviso por sessão)';
$string['mergeuser'] = 'Unir utilizador';
$string['mobilesessionfrom'] = 'Mostrar sessões a partir de';
$string['mobilesessionfrom_help'] = 'Permite que a lista de sessões seja restrita ao registar assiduidade via Aplicação móvel Moodle - mostra apenas as sessões iniciadas desde o valor aqui indicado.';
$string['mobilesessionto'] = 'Mostrar próximas sessões';
$string['mobilesessionto_help'] = 'Permite que a lista de sessões seja restrita para mostrar apenas um pequeno número de sessões futuras.';
$string['mobilesettings'] = 'Configurações da Aplicação móvel Moodle';
$string['mobilesettings_help'] = 'Estas configurações controlam o comportamento da Aplicação móvel Moodle';
$string['modulename'] = 'Assiduidade';
$string['modulename_help'] = 'O módulo de atividade Assiduidade permite ao professor registar a presença dos alunos durante a sessão e permite aos alunos verificar o seu registo de assiduidade.

O professor pode criar múltiplas sessões e pode registar a assiduidade como "Presente", "Faltou", "Atrasado" ou "Dispensado" ou modificar os estados de acordo com as necessidades.

Estão disponíveis relatórios de toda a turma ou de alunos individuais.';
$string['modulenameplural'] = 'Assiduidades';
$string['months'] = 'Meses';
$string['moreattendance'] = 'Assiduidade registada com sucesso nesta página';
$string['moveleft'] = 'Mover para esquerda';
$string['moveright'] = 'Mover para direita';
$string['multisessionexpanded'] = 'Múltiplas sessões expandido';
$string['multisessionexpanded_desc'] = 'Por predefinição, ao criar novas sessões, mostrar as configurações de "Múltiplas sessões" como expandidas.';
$string['mustselectusers'] = 'Tem de selecionar utilizadores para exportar';
$string['newdate'] = 'Nova data';
$string['newduration'] = 'Nova duração';
$string['newstatusset'] = 'Novo conjunto de estados';
$string['noabsentstatusset'] = 'O conjunto de estados em uso não tem um estado para usar quando não for registado pelo aluno.';
$string['noattendanceusers'] = 'Não é possível exportar os dados porque não existem alunos inscritos na disciplina.';
$string['noattforuser'] = 'Não existem quaisquer registos de assiduidade para este utilizador';
$string['noautomark'] = 'Desativado';
$string['nocapabilitytotakethisattendance'] = 'Tentou alterar a assiduidade de uma sessão com o cmid: {$a} para o qual não tem permissão para modificar.';
$string['nodescription'] = 'Sessão de aula normal';
$string['noeventstoreset'] = 'Não existem eventos no calendário que exijam atualização.';
$string['nogroups'] = 'Esta atividade foi configurada para usar grupos, mas não existem grupos nesta disciplina.';
$string['noguest'] = 'Visitantes não podem consultar a assiduidade';
$string['noofdaysabsent'] = 'N.º dias que faltou';
$string['noofdaysexcused'] = 'N.º dias dispensado';
$string['noofdayslate'] = 'N.º dias atrasado';
$string['noofdayspresent'] = 'N.º dias presente';
$string['nosessiondayselected'] = 'Não foi selecionado o dia da sessão';
$string['nosessionexists'] = 'Não existem sessões nesta disciplina';
$string['nosessionsselected'] = 'Não foram selecionadas sessões';
$string['notfound'] = 'Não foi encontrada a atividade Assiduidade nesta disciplina!';
$string['notifytask'] = 'Enviar avisos aos utilizadores';
$string['notmember'] = 'não é membro';
$string['notset'] = 'não definido';
$string['noupgradefromthisversion'] = 'O módulo de Assiduidade não pode ser atualizado a partir da versão de \'attforblock\' que está instalada. Por favor, apague \'attforblock ou atualize para a última versão antes de instalar o novo módulo Assiduidade';
$string['numsessions'] = 'Número de sessões';
$string['olddate'] = 'Data antiga';
$string['onactivitycompletion'] = 'Ao completar atividade';
$string['onlyselectedusers'] = 'Exportar utilizadores específicos';
$string['overallsessions'] = 'Todas as sessões';
$string['overallsessions_help'] = 'Mostrar estatísticas de todas as sessões, incluindo as sessões ainda sem assiduidade registada (passado e futuro):
<ul>
<li><strong>Sessões</strong>: número total de sessões.</li>
<li><strong>Pontos</strong>: pontos atribuídos com base nas sessões com registos.</li>
<li><strong>Percentagem</strong>: percentagem de pontos atribuídos em relação ao máximo de pontos possíveis de todas as sessões.</li>
</ul>';
$string['oversessionstaken'] = 'Sessões realizadas';
$string['oversessionstaken_help'] = 'Mostrar estatísticas para as sessões com assiduidade registada:
<ul>
<li><strong>Sessões</strong>: número de sessões com registos.</li>
<li><strong>Pontos</strong>: pontos atribuídos com base nas sessões com registos.</li>
<li><strong>Percentagem</strong>: percentagem de pontos atribuídos em relação ao máximo de pontos possíveis das sessões com registos.</li>
</ul>';
$string['pageof'] = 'Página {$a->page} de {$a->numpages}';
$string['participant'] = 'Participante';
$string['password'] = 'Senha';
$string['passwordgrp'] = 'Senha do aluno';
$string['passwordgrp_help'] = 'Se ativar esta opção, os alunos são obrigados a digitar esta senha antes de poderem definir o seu estado da assiduidade para esta sessão. Se deixar em branco não será necessário a senha.';
$string['passwordrequired'] = 'Tem de digitar a senha da sessão antes de poder enviar a sua assiduidade';
$string['percentage'] = 'Percentagem';
$string['percentageallsessions'] = 'Percentagem de todas as sessões';
$string['percentagesessionscompleted'] = 'Percentagem de todas as sessões com registos';
$string['pluginadministration'] = 'Administração da Assiduidade';
$string['pluginname'] = 'Assiduidade';
$string['points'] = 'Pontos';
$string['pointsallsessions'] = 'Pontos de todas as sessões';
$string['pointssessionscompleted'] = 'Pontos de todas as sessões com registos';
$string['preferences_desc'] = 'Alterações nos estados afetarão a assiduidade das sessões existentes e podem afetar a avaliação.';
$string['preventsharederror'] = 'O registo da própria assiduidade foi desativado na sessão porque este dispositivo parece ter sido usado para registar a assiduidade de outro aluno.';
$string['preventsharedip'] = 'Impedir partilha do endereço IP';
$string['preventsharedip_help'] = 'Impedir que os alunos usem o mesmo dispositivo (identificado como usando o mesmo endereço IP) para registar a assiduidade de outros alunos.';
$string['preventsharediptime'] = 'Intervalo de tempo para a reutilização do endereço IP (minutos)';
$string['preventsharediptime_help'] = 'Permitir que um endereço IP seja reutilizado para registar assiduidade nesta sessão após decorrer este intervalo de tempo.';
$string['preview'] = 'Pré-visualização do ficheiro';
$string['previewhtml'] = 'Pré-visualização em formato HTML';
$string['priorto'] = 'A data da sessão é anterior à data de início da disciplina ({$a}) por isso todas as sessões agendadas antes desta data estarão ocultas (não acessíveis). A qualquer momento pode alterar a data de início da disciplina  (ver configurações da disciplina) de modo a ter acesso às sessões anteriores.<br><br>Altere a data da sessão ou clique novamente no botão "Adicionar sessão" para confirmar.';
$string['privacy:metadata:attendancelog'] = 'Relatório dos registos das assiduidade do utilizador';
$string['privacy:metadata:attendancesessions'] = 'Sessões nas quais será registada a assiduidade.';
$string['privacy:metadata:attendancewarningdone'] = 'Relatório dos avisos enviados aos utilizadores acerca da sua assiduidade.';
$string['privacy:metadata:duration'] = 'Duração da sessão em segundos';
$string['privacy:metadata:groupid'] = 'ID do grupo associado à sessão';
$string['privacy:metadata:ipaddress'] = 'Endereço IP de onde foi registada a assiduidade.';
$string['privacy:metadata:lasttaken'] = 'Data e hora de quando a assiduidade na sessão foi registada pela última vez';
$string['privacy:metadata:lasttakenby'] = 'ID do último utilizador que registou a assiduidade nesta sessão';
$string['privacy:metadata:notifyid'] = 'ID do aviso da assiduidade da sessão a que está associado.';
$string['privacy:metadata:remarks'] = 'Comentários sobre a assiduidade do utilizador.';
$string['privacy:metadata:sessdate'] = 'Data e hora do início da sessão';
$string['privacy:metadata:sessionid'] = 'ID da assiduidade da sessão.';
$string['privacy:metadata:statusid'] = 'ID do estado da assididade do aluno.';
$string['privacy:metadata:statusset'] = 'Conjunto de estados ao qual pertence o ID de estado.';
$string['privacy:metadata:studentid'] = 'ID do aluno de quem foi registada a assiduidade.';
$string['privacy:metadata:takenby'] = 'ID do utilizador que registou a assiduidade pelo aluno.';
$string['privacy:metadata:timemodified'] = 'Data e hora da última modificação da sessão';
$string['privacy:metadata:timesent'] = 'Data e hora do envio do aviso.';
$string['privacy:metadata:timetaken'] = 'Data e hora do registo da assiduidade pelo aluno.';
$string['privacy:metadata:userid'] = 'ID do utilizador a quem enviar aviso.';
$string['processingfile'] = 'A processar ficheiro';
$string['qr_cookie_error'] = 'O QR da sessão expirou.';
$string['qr_pass_wrong'] = 'A senha do QR está incorreta ou expirou.';
$string['qrcode'] = 'Código QR';
$string['randompassword'] = '&nbsp;Senha aleatória&nbsp;';
$string['remark'] = 'Comentários de: {$a}';
$string['remarks'] = 'Comentários';
$string['repeatasfollows'] = 'Modo de repetição da sessão:';
$string['repeatevery'] = 'Repetir a cada';
$string['repeaton'] = 'Repetir nos dias';
$string['repeatuntil'] = 'Repetir até';
$string['report'] = 'Relatório';
$string['required'] = 'Obrigatório*';
$string['requiredentries'] = 'Registos temporários substituem registos da assiduidade do participante';
$string['requiredentry'] = 'Guia de ajuda para unir utilizador temporário';
$string['requiredentry_help'] = '<p align="center"><b>Assiduidade</b></p>
<p align="left"><strong>Unir Contas</strong></p>
<p align="left">
<table border="2" cellpadding="4">
<tr>
<th>Utilizador Moodle</th>
<th>Utilizador Temporário</th>
<th>Ação</th>
</tr>
<tr>
<td>Dados da assuidade</td>
<td>Dados da assuidade</td>
<td>Utilizador temporário substituirá utilizador Moodle</td>
</tr>
<tr>
<td>Sem dados de assiduidade</td>
<td>Dados da assuidade</td>
<td>Assiduidade de utilizador temporário será transferida para utilizador Moodle</td>
</tr>
<tr>
<td>Dados da assuidade</td>
<td>>Sem dados de assiduidade</td>
<td>Utilizador temporário será apagado</td>
</tr>
<tr>
<td>Sem dados de assiduidade</td>
<td>Sem dados de assiduidade</td>
<td>Utilizador temporário será apagado</td>
</tr>
</table>

</p>
<p align="left"><strong>Utilizador temporário será sempre apagado  após a ação de unir</strong></p>';
$string['requiresubnet'] = 'Requerer endereço de rede';
$string['requiresubnet_help'] = 'O registo da assiduidade pode ser restringido a apenas determinadas sub-redes se especificar uma lista dos endereços IP, parciais ou completos, separados por vírgulas.';
$string['resetcaledarcreate'] = 'Os eventos no calendário foram ativados mas existem várias sessões sem eventos. Pretende criar eventos no calendário para todas as sessões existentes?';
$string['resetcaledardelete'] = 'Os eventos no calendário foram desativados mas várias sessões existentes têm eventos que devem ser apagados. Pretende apagar todos os eventos existentes?';
$string['resetcalendar'] = 'Reiniciar calendário';
$string['resetdescription'] = 'Lembre-se que ao apagar dados da assiduidade irá apaga informação da base de dados. Pode simplesmente ocultar sessões antigas se alterar a data de início da disciplina!';
$string['resetstatuses'] = 'Repor estados para valores iniciais';
$string['restoredefaults'] = 'Repor os valores iniciais';
$string['resultsperpage'] = 'Resultados por página';
$string['resultsperpage_desc'] = 'Número de alunos a mostrar por página';
$string['rotateqrcode'] = 'Regenerar o código QR';
$string['rotateqrcode_cleartemppass_task'] = 'Tarefa de limpeza de senhas temporárias geradas pela funcionalidade de regeneração do código QR';
$string['rotateqrcodeexpirymargin'] = 'Margem de tempo (segundos) para expirar o código QR/senha regenerado';
$string['rotateqrcodeexpirymargin_desc'] = 'Intervalo de tempo (segundos) para permitir código QR expirado/senha expirada.';
$string['rotateqrcodeinterval'] = 'Intervalo de regeneração do código QR/senha (segundos)';
$string['rotateqrcodeinterval_desc'] = 'Intervalo de tempo (segundos) para regenerar o código QR/senha.';
$string['save'] = 'Guardar assiduidade';
$string['scantime'] = 'Data/hora de registo';
$string['scantime_help'] = 'Isto permite que um carimbo de data/hora seja incluído no ficheiro de importação - o sistema tentará converter o carimbo de data/hora indicado usando a função \'strtotime\' do PHP e usar as configurações do estado da assiduidade para decidir qual o estado a definir para o utilizador';
$string['search:activity'] = 'Assiduidade - informações da atividade';
$string['selectactivity'] = 'Selecionar atividade';
$string['session'] = 'Sessão';
$string['session_help'] = 'Sessão';
$string['sessionadded'] = 'Sessão adicionada com sucesso';
$string['sessionalreadyexists'] = 'Já existe uma sessão nesta data';
$string['sessiondate'] = 'Data';
$string['sessiondays'] = 'Dias da sessão';
$string['sessiondeleted'] = 'Sessão apagada com sucesso';
$string['sessionduplicate'] = 'Existe uma sessão duplicada na disciplina: {$a->course} na assiduidade: {$a->activity}, {$a->date}';
$string['sessionexist'] = 'A sessão não foi adicionada (já existe)!';
$string['sessiongenerated'] = 'Foi criada uma sessão com sucesso';
$string['sessions'] = 'Sessões';
$string['sessionsallcourses'] = 'Todas as disciplinas';
$string['sessionsbyactivity'] = 'Instância de Assiduidade';
$string['sessionsbycourse'] = 'Disciplina';
$string['sessionsbydate'] = 'Semana';
$string['sessionscompleted'] = 'Sessões realizadas';
$string['sessionscurrentcourses'] = 'Disciplinas atuais';
$string['sessionsgenerated'] = 'Foram criadas {$a} sessões com sucesso';
$string['sessionsids'] = 'IDs das sessões:';
$string['sessionsnotfound'] = 'Não existem sessões no intervalo de tempo seleccionado';
$string['sessionstartdate'] = 'Data de início da sessão';
$string['sessionstotal'] = 'Número total de sessões';
$string['sessionsupdated'] = 'Sessões atualizadas';
$string['sessiontype'] = 'Tipo';
$string['sessiontype_help'] = 'Pode adicionar sessões para todos os alunos ou para um grupo de alunos. A capacidade de adicionar tipos diferentes de sessões depende do modo de grupo da atividade.

* No modo "Nenhum grupo" pode adicionar apenas as sessões para todos os alunos.
* No modo "Grupos separados" pode adicionar apenas as sessões para um grupo de alunos.
* No modo "Grupos visíveis" pode adicionar os dois tipos de sessões.';
$string['sessiontypeshort'] = 'Tipo';
$string['sessionunknowngroup'] = 'A sessão especifica grupo(s) desconhecido(s): {$a}';
$string['sessionupdated'] = 'Sessão atualizada com sucesso';
$string['set_by_student'] = 'Autorregisto';
$string['setallstatuses'] = 'Definir estado para';
$string['setallstatusesto'] = 'Definir estado para «{$a}»';
$string['setperiod'] = 'Intervalo de tempo, em minutos, para libertar o IP';
$string['settings'] = 'Configurações';
$string['setunmarked'] = 'Atribuido automaticamente a não registados';
$string['setunmarked_help'] = 'Se ativar o \'Registo automático\' na sessão, o estado assinalado será atribuido ao  aluno se a sua assiduidade ficou por registar.';
$string['showdefaults'] = 'Mostrar predefinições';
$string['showduration'] = 'Mostrar duração';
$string['showextrauserdetails'] = 'Mostrar detalhes adicionais do utilizador';
$string['showqrcode'] = 'Mostrar código QR';
$string['showsessiondescriptiononreport'] = 'Mostrar descrição da sessão no relatório';
$string['showsessiondescriptiononreport_desc'] = 'Mostrar a descrição da sessão na listagem do relatório de assiduidade.';
$string['showsessiondetails'] = 'Mostrar detalhes da sessão';
$string['somedisabledstatus'] = '(Algumas opções foram removidas quando a sessão foi iniciada.)';
$string['sortedgrid'] = 'Grelha ordenada';
$string['sortedlist'] = 'Lista ordenada';
$string['startofperiod'] = 'Início do período';
$string['starttime'] = 'Hora de início';
$string['status'] = 'Estado';
$string['statusall'] = 'tudo';
$string['statusdeleted'] = 'Estado eliminado';
$string['statuses'] = 'Estados';
$string['statusset'] = 'Conjunto de estados \'{$a}\'';
$string['statussetsettings'] = 'Conjunto de estados';
$string['statusunselected'] = 'não selecionado';
$string['strftimedm'] = '%d %b';
$string['strftimedmw'] = '<nobr>%a %b %d</nobr>';
$string['strftimedmy'] = '%d %b %Y';
$string['strftimedmyhm'] = '%d %b %Y %H:%M';
$string['strftimedmyw'] = '<nobr>%a, %d %b %Y</nobr>';
$string['strftimeh'] = '%H';
$string['strftimehm'] = '%H:%M';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentavailability'] = 'Disponibilidade (minutos)';
$string['studentavailability_help'] = 'Quando os alunos registam a própria assiduidade, quantos minutos, após a sessão começar, é que o estado está disponível?
<br/>Se estiver vazio, este estado estará sempre disponível, se definido como 0, estará sempre oculto para os alunos.';
$string['studentid'] = 'ID do aluno';
$string['studentmarked'] = 'A sua assiduidade nesta sessão ficou registada.';
$string['studentmarking'] = 'Registo do aluno';
$string['studentpassword'] = 'Senha do aluno';
$string['studentrecordingexpanded'] = 'Registo do aluno expandido';
$string['studentrecordingexpanded_desc'] = 'Por predefinição, ao criar novas sessões, mostrar as configurações de "Registo do aluno" como expandidas.';
$string['studentscanmark'] = 'Permitir que os alunos registem a própria assiduidade';
$string['studentscanmark_desc'] = 'Se ativar esta opção, os professores podem permitir que os alunos registem a sua assiduidade.';
$string['studentscanmark_help'] = 'Se ativar esta opção, os alunos podem alterar o estado da sua assiduidade da sessão.';
$string['studentscanmarksessiontime'] = 'Os alunos registam a assiduidade durante o tempo da sessão';
$string['studentscanmarksessiontime_desc'] = 'Se ativar esta opção, os alunos só podem registar a sua assiduidade durante a sessão.';
$string['studentscanmarksessiontimeend'] = 'Fim da sessão (minutos)';
$string['studentscanmarksessiontimeend_desc'] = 'Se a sessão não tiver uma hora de fim, quantos minutos a sessão deve estar disponível para que os alunos registem a sua assiduidade?';
$string['submit'] = 'Enviar';
$string['submitattendance'] = 'Registar assiduidade';
$string['submitpassword'] = 'Enviar senha';
$string['subnet'] = 'Sub-rede';
$string['subnetactivitylevel'] = 'Permitir configuração de sub-rede no nível da atividade';
$string['subnetactivitylevel_desc'] = 'Se ativar esta opção, os professores podem substituir a sub-rede predefinida no nível da atividade ao criar uma assiduidade. Caso contrário, será usada a predefinição do site ao criar uma sessão.';
$string['subnetwrong'] = 'A assiduidade só pode ser registada a partir de determinados locais e este computador não está na lista permitida.';
$string['summary'] = 'Resumo';
$string['tablerenamefailed'] = 'Ocorreu um erro ao alterar o nome da tabela do antigo \'attforblock\' para assiduidade';
$string['tactions'] = 'Ação';
$string['takeattendance'] = 'Registar assiduidade';
$string['takensessions'] = 'Sessões com registos';
$string['tcreated'] = 'Criada';
$string['tempaddform'] = 'Adicionar utilizador temporário';
$string['tempexists'] = 'Já existe um utilizador temporário com este endereço de e-mail';
$string['temptable'] = 'Lista de utilizadores temporários';
$string['tempuser'] = 'Utilizador temporário';
$string['tempusermerge'] = 'Unir utilizador temporário';
$string['tempusers'] = 'Utilizadores temporários';
$string['tempusersedit'] = 'Editar utilizadores temporários';
$string['tempuserslist'] = 'Utilizadores temporários';
$string['thirdpartyemails'] = 'Notificar outros utilizadores';
$string['thirdpartyemails_help'] = 'Lista de outros utilizadores que serão notificados (requer a permissão \'mod/attendance:viewreports\').';
$string['thirdpartyemailsubject'] = 'Aviso de faltas';
$string['thirdpartyemailtext'] = '{$a->firstname} {$a->lastname}, a sua assiduiodade à disciplina {$a->coursename} {$a->aname} é inferior a {$a->warningpercent} ({$a->percent})';
$string['thirdpartyemailtextfooter'] = 'Está a receber esta mensagem porque o professor desta disciplina adicionou o seu e-mail à lista de destinatários';
$string['thiscourse'] = 'Esta disciplina';
$string['time'] = 'Horário';
$string['timeahead'] = 'Não podem ser criadas múltiplas sessões que excedem um ano. Deve ajustar as datas de início e de fim.';
$string['to'] = 'às:&nbsp;';
$string['todate'] = '(até à data)';
$string['triggered'] = 'Primeira notificação';
$string['tuseremail'] = 'E-mail';
$string['tusername'] = 'Nome completo';
$string['ungraded'] = 'Sessões não avaliadas';
$string['unknowngroup'] = 'Grupo desconhecido';
$string['unknownstatus'] = 'ID de estado desconhecido: {$a}';
$string['update'] = 'Atualizar';
$string['uploadattendance'] = 'Carregar assiduidade de CSV';
$string['usedefaultsubnet'] = 'Usar predefinição';
$string['usemessageform'] = 'ou use o formulário abaixo para enviar uma mensagem aos alunos selecionados';
$string['userexists'] = 'Já existe um utilizador real com este endereço de e-mail';
$string['userid'] = 'ID do utilizador';
$string['userimportfield'] = 'Campo externo do utilizador';
$string['userimportfield_help'] = 'Campo do ficheiro CSV carregado que contém a identificação do utilizador';
$string['userimportto'] = 'Campo do utilizador Moodle';
$string['userimportto_help'] = 'Campo Moodle que corresponde aos dados da importação do CSV';
$string['users'] = 'Utilizadores a exportar';
$string['usestatusset'] = 'Estados';
$string['variable'] = 'variável';
$string['variablesupdated'] = 'Variáveis atualiadas com sucesso';
$string['versionforprinting'] = 'versão para impressão';
$string['viewmode'] = 'Modo de visualização';
$string['warnafter'] = 'Número de sessões antes do aviso';
$string['warnafter_help'] = 'Os avisos só serão acionados quando o utilizador tiver assiduidade registada a pelo menos este número de sessões.';
$string['warningdeleted'] = 'Aviso apagado';
$string['warningdesc'] = 'Estes avisos serão automaticamente adicionados a novas atividades de Assiduidade. Se mais de um aviso for emitido exatamente ao mesmo tempo, apenas o aviso com o limiar mais baixo será enviado.';
$string['warningdesc_course'] = 'Os limiares dos avisos aqui estabelecidos afetam o relatório de faltas e permitem que os alunos e terceiros sejam notificados. Se mais de um aviso for emitido exatamente ao mesmo tempo, apenas o aviso com o limiar mais baixo será enviado.';
$string['warningfailed'] = 'Não pode criar um aviso que use a mesma percentagem e o mesmo número de sessões.';
$string['warningpercent'] = 'Avisar quando for inferior a';
$string['warningpercent_help'] = 'Será emitido um aviso quando a percentagem geral for inferior ao valor selecionado.';
$string['warnings'] = 'Avisos';
$string['warningthreshold'] = 'Limiar do aviso';
$string['warningupdated'] = 'Avisos atualizados';
$string['week'] = 'semana(s)';
$string['weekcommencing'] = 'Início da semana';
$string['weeks'] = 'Semanas';
$string['youcantdo'] = 'Nada a fazer';
