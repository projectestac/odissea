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
 * Strings for component 'block_configurable_reports', language 'pt', version '3.11'.
 *
 * @package     block_configurable_reports
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitypost'] = 'Submissões da atividade';
$string['activityview'] = 'Visualizações da atividade';
$string['addreport'] = 'Adicionar relatório';
$string['anyone'] = 'Todos';
$string['anyone_summary'] = 'Qualquer utilizador poderá ver este relatório';
$string['availablemarks'] = 'Notas disponíveis';
$string['average'] = 'Média';
$string['badconditionexpr'] = 'Expressão de condição incorreta';
$string['badsize'] = 'Dimensão incorreta. Deve ser em % ou px';
$string['badtablewidth'] = 'Largura incorreta. Tem de ser em % (percentagem) ou um valor absoluto';
$string['bar'] = 'Barras';
$string['barsummary'] = 'Gráfico de barras';
$string['blockname'] = 'Relatórios personalizados';
$string['calcs'] = 'Cálculos';
$string['categories'] = 'Categorias';
$string['categoryfield'] = 'Campo da categoria';
$string['categoryfieldorder'] = 'Ordenação do campo da categoria';
$string['ccoursefield'] = 'Condição do campo da disciplina';
$string['cellalign'] = 'Alinhamento da célula';
$string['cellsize'] = 'Dimensão da célula';
$string['cellwrap'] = 'Moldar texto na célula';
$string['column'] = 'Coluna';
$string['columnandcellproperties'] = 'Propriedades das colunas e das células';
$string['columncalculations'] = 'Cálculos da coluna';
$string['columns'] = 'Colunas';
$string['comp_calcs'] = 'Cálculos';
$string['comp_calcs_help'] = '<p>Pode adicionar cálculos para as colunas, como por exemplo: média do número de utilizadores inscritos nas disciplinas</p>

<p>Mais informações: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">documentação do módulo</a></p>';
$string['comp_calculations'] = 'Cálculos';
$string['comp_calculations_help'] = '<p>Pode adicionar cálculos para as colunas, como por exemplo: média do número de utilizadores inscritos nas disciplinas</p>';
$string['comp_columns'] = 'Colunas';
$string['comp_columns_help'] = '<p>Pode escolher as diferentes colunas que pretende no seu relatório, dependendo do tipo de relatório</p>

<p>Mais informações: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">documentação do módulo</a></p>';
$string['comp_conditions'] = 'Condições';
$string['comp_conditions_help'] = '<p>Pode definir as condições aqui (por exemplo, apenas disciplinas desta categoria, apenas utilizadores de Portugal, etc.).</p>

<p>Pode adicionar uma expressão lógica se estiver a usar mais do que uma condição.</p>

<p>Mais informações: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">documentação do módulo</a></p>';
$string['comp_customsql'] = 'SQL personalizado';
$string['comp_customsql_help'] = '<p>Adicione uma consulta SQL funcional. Não use o prefixo da base de dados Moodle $CFG->prefix. Use "prefix_" sem aspas </p>
<p>Exemplo: SELECT * FROM prefix_disciplina </p>

<p>Pode encontrar muitos relatórios SQL aqui: <a href="http://docs.moodle.org/pt/ad-hoc_contributed_reports" target="_blank">relatórios ad hoc de terceiros</a> < / p>

<p>Uma estrutura atualizada das tabelas do Moodle e as suas relações interligadas: <a href="https://docs.moodle.org/dev/Database_Schema" target="_blank">esquema da base de dados</a></p>

<p>Pelo facto de suportar os relatórios de consultas CustomSQL de Tim Hunt, pode usar qualquer consulta.</p>

<p>Não se esqueça de adicionar um "Filtro por datas" se estiver a usar relatórios com tokens de tempo.</p>

<p>Para usar filtros, consulte: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">tutorial sobre criar um relatório SQL</a></p>';
$string['comp_filters'] = 'Filtros';
$string['comp_filters_help'] = '<p>Pode escolher aqui os filtros a serem exibidos.</p>

<p>Um filtro permite que o utilizador escolha colunas do relatório para filtrar os resultados do relatório.</p>

<p>Para usar filtros, se o tipo é relatório SQL, consulte: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">tutorial sobre criar um relatório SQL</a></p>

<p>Mais informações: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">documentação do módulo</a></p>';
$string['comp_ordering'] = 'Ordenação';
$string['comp_ordering_help'] = '<p>Pode escolher aqui o modo de ordenação utilizando campos.</p>

<p>Mais informações: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">documentação do módulo</a></p>';
$string['comp_permissions'] = 'Permissões';
$string['comp_permissions_help'] = '<p>Pode escolher aqui quem pode visualizar o relatório.</p>

<p>Mais informações: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">documentação do módulo</a></p>';
$string['comp_plot'] = 'Gráficos';
$string['comp_plot_help'] = '<p>Pode adicionar gráficos ao seu relatório baseado nas colunas e valores do relatório</p>

<p>Mais informações: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">documentação do módulo</a></p>';
$string['comp_template'] = 'Modelo';
$string['comp_template_help'] = '<p>Pode modificar a estrutura do relatório criando um modelo</p>

<p>Para criar um modelo, veja os marcadores de substituição que pode usar no cabeçalho, rodapé e para cada registo do relatório usando os botões de ajuda ou a informação disponível na página.</p>

<p>Mais informações: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">documentação do módulo</a></p>';
$string['componenthelp'] = 'Ajuda do componente';
$string['conditionexpr'] = 'Condição';
$string['conditionexpr_conditions'] = 'Condição';
$string['conditionexpr_conditions_help'] = '<p>Pode combinar condições usando expressões lógicas</p>
<p>Insira uma expressão lógica válida com estes operadores: and e or.</p>';
$string['conditionexpr_permissions'] = 'Condição';
$string['conditionexpr_permissions_help'] = '<p>Pode combinar condições usando expressões lógicas</p>
<p>Insira uma expressão lógica válida com estes operadores: and e or.</p>';
$string['conditionexprhelp'] = 'Insira uma condição válida, por exemplo: (c1 and c2) or (c4 and c3)';
$string['conditions'] = 'Condições';
$string['configurable_reports:addinstance'] = 'Adicionar novo bloco de Relatórios personalizados';
$string['configurable_reports:manageownreports'] = 'Gerir os relatórios do próprio';
$string['configurable_reports:managereports'] = 'Gerir relatórios';
$string['configurable_reports:managesqlreports'] = 'Gerir relatórios SQL';
$string['configurable_reports:myaddinstance'] = 'Adicionar novo bloco de Relatórios personalizados ao Painel do utilizador';
$string['configurable_reports:viewreports'] = 'Visualizar relatórios';
$string['confirmdeletereport'] = 'Tem a certeza de que pretende apagar este relatório?';
$string['coursecategories'] = 'Filtro da categoria da disciplina';
$string['coursecategory'] = 'Disciplina na categoria';
$string['coursechild'] = 'Disciplinas descendentes de';
$string['coursededicationtime'] = 'Tempo de dedicação à discplina';
$string['coursefield'] = 'Campo da disciplina';
$string['coursefieldorder'] = 'Ordenação do campo da disciplina';
$string['coursemodules'] = 'Módulo da disciplina';
$string['courseparent'] = 'Disciplinas cuja ascendente é';
$string['courses'] = 'Disciplinas';
$string['coursestats'] = 'Estatísticas da disciplina';
$string['cron'] = 'Execução diária automática';
$string['cron_help'] = 'Agendar esta consulta para ser executar todos os dias (à noite)';
$string['crondescription'] = 'Agendar esta consulta para ser executar todos os dias (à noite)';
$string['crrepository'] = 'Repositório dos relatórios';
$string['crrepositoryinfo'] = 'Repositório remoto partilhado com relatórios de amostra totalmente funcionais (nome do proprietário da conta do GitHub + barra + nome do repositório)';
$string['currentreportcourse'] = 'Disciplina do relatório atual';
$string['currentreportcourse_summary'] = 'A disciplina na qual o relatório foi criado';
$string['currentuser'] = 'Utilizador atual';
$string['currentuser_summary'] = 'O utilizador que está a visualizar o relatório';
$string['currentusercourses'] = 'Disciplinas em que utilizador atual está inscrito';
$string['currentusercourses_summary'] = 'Lista das disciplinas dos utilizadores atuais (apenas disciplinas visíveis)';
$string['currentuserfinalgrade'] = 'Nota final do utilizador atual na disciplina';
$string['currentuserfinalgrade_summary'] = 'Esta coluna mostra a nota final do utilizador atual na linha da disciplina';
$string['cuserfield'] = 'Condição do campo do utilizador';
$string['custom'] = 'Personalizado';
$string['customdateformat'] = 'Formato de data personalizado';
$string['customsql'] = 'SQL personalizado';
$string['datatables'] = 'Ativar biblioteca DataTables do JS';
$string['datatables_emptytable'] = 'Sem dados disponíveis na tabela';
$string['datatables_first'] = 'Primeiro';
$string['datatables_info'] = 'A mostrar _START_ até _END_ de_TOTAL_ registos';
$string['datatables_infoempty'] = 'A mostrar de 0 até 0 de 0 registos';
$string['datatables_infofiltered'] = '(filtrado de _MAX_total registos)';
$string['datatables_last'] = 'Último';
$string['datatables_lengthmenu'] = 'Mostrar _MENU_ registos';
$string['datatables_loadingrecords'] = 'A carregar...';
$string['datatables_next'] = 'Seguinte';
$string['datatables_previous'] = 'Anterior';
$string['datatables_processing'] = 'A processar...';
$string['datatables_search'] = 'Procurar:';
$string['datatables_sortascending'] = ': ative para ordenar as colunas por ordem crescente';
$string['datatables_sortdescending'] = ': ative para ordenar as colunas por ordem crescente';
$string['datatables_zerorecords'] = 'Nenhum registo coincidente foi encontrado';
$string['datatablesinfo'] = 'Biblioteca DataTables do JS (ordenação de colunas, cabeçalho fixo, pesquisa, paginação ...)';
$string['date'] = 'Data';
$string['dateformat'] = 'Formato da data';
$string['dbhost'] = 'Servidor da base de dados';
$string['dbhostinfo'] = 'Nome do servidor da base de dados remota (no qual serão executadas as nossas consultas SQL)';
$string['dbname'] = 'Nome da base de dados';
$string['dbnameinfo'] = 'Nome da base de dados remota (no qual serão executadas as nossas consultas SQL)';
$string['dbpass'] = 'Senha da base de dados';
$string['dbpassinfo'] = 'Senha da base de dados remota (para o nome de utilizador indicado acima)';
$string['dbuser'] = 'Nome de utilizador da base de dados';
$string['dbuserinfo'] = 'Nome de utilizador da base de dados remota (deve ter privilégios SELECT na base de dados indicada acima)';
$string['decimals'] = 'Casas decimais';
$string['direction'] = 'Direção';
$string['disabled'] = 'Desativado';
$string['displayglobalreports'] = 'Mostrar relatórios globais';
$string['displayreportslist'] = 'Mostrar a lista de relatórios no corpo do bloco';
$string['donotshowtime'] = 'Não mostrar informações das datas';
$string['download'] = 'Descarregar';
$string['downloadreport'] = 'Descarregar relatório';
$string['email_message'] = 'Mensagem';
$string['email_send'] = 'Enviar';
$string['email_subject'] = 'Assunto';
$string['enabled'] = 'Ativado';
$string['enableglobal'] = 'Tornar num relatório global (acessível desde qualquer disciplina)';
$string['enablejsordering'] = 'Ativar ordenação JavaScript';
$string['enablejspagination'] = 'Ativar paginação JavaScript';
$string['endtime'] = 'Data e hora de fim';
$string['enrolledstudents'] = 'Alunos inscritos';
$string['error_field'] = 'Campo não permitido';
$string['error_operator'] = 'Operador não permitido';
$string['error_value_expected_integer'] = 'Tem de ser um número inteiro';
$string['excludedeletedusers'] = 'Excluir utilizadores apagados (apenas nos relatórios SQL)';
$string['executeat'] = 'Executar às';
$string['executeatinfo'] = 'O cron do Moodle executará consultas SQL agendadas após o horário selecionado. Uma vez em cada 24h';
$string['export_csv'] = 'Exportar no formato CSV';
$string['export_json'] = 'Exportar no formato JSON';
$string['export_ods'] = 'Exportar no formato ODS';
$string['export_xls'] = 'Exportar no formato XLS';
$string['exportoptions'] = 'Opções da exportação';
$string['exportreport'] = 'Exportar relatório';
$string['fcoursefield'] = 'Filtro do campo da disciplina';
$string['field'] = 'Campo';
$string['filter'] = 'Filtro';
$string['filter_all'] = 'Tudo';
$string['filter_apply'] = 'Aplicar';
$string['filter_searchtext'] = 'Procurar texto';
$string['filter_searchtext_summary'] = 'Filtro do texto livre';
$string['filtercategories'] = 'Filtrar categorias';
$string['filtercategories_summary'] = 'Filtrar por categoria';
$string['filtercoursecategories'] = 'Filtro da categoria da disciplina';
$string['filtercoursecategories_summary'] = 'Filtrar disciplinas por qualquer categoria ascendente';
$string['filtercoursemodules'] = 'Módulo da disciplina';
$string['filtercoursemodules_summary'] = 'Filtrar módulo da disciplina';
$string['filtercourses'] = 'Disciplinas';
$string['filtercourses_summary'] = 'Este filtro mostra a lista de disciplinas. Apenas pode ser selecionada uma disciplina de cada vez';
$string['filterenrolledstudents'] = 'Alunos inscritos por disciplina';
$string['filterenrolledstudents_summary'] = 'Filtrar um utilizador (por ID) dos alunos inscritos na disciplina';
$string['filterrole'] = 'papel';
$string['filterrole_summary'] = 'Filtrar por papeis do sistema (professor, aluno, ...)';
$string['filters'] = 'Filtros';
$string['filtersemester'] = 'Semestre (Hebraico)';
$string['filterstartendtime_summary'] = 'Filtro data inicial/final';
$string['filtersubcategories'] = 'Categoria (incluir subcategorias)';
$string['filtersubcategories_summary'] = 'Usar: %%FILTER_CATEGORIES:mdl_course_category.path%%';
$string['filteruser'] = 'Utilizador da disciplina atual';
$string['filteruser_summary'] = 'Filtrar um utilizador (por ID) dos utilizadores atuais da disciplina atual';
$string['filterusers'] = 'Utilizador do sistema';
$string['filterusers_summary'] = 'Filtrar um utilizador (por ID) da lista de utilizadores do sistema';
$string['filteryearhebrew'] = 'Semestre (Hebraico)';
$string['filteryearhebrew_summary'] = 'O filtro está a usar anos hebraicos (תשעג,...)';
$string['filteryearnumeric'] = 'Ano (Numérico)';
$string['filteryearnumeric_summary'] = 'Filtro está a usar anos numéricos (2017, ...)';
$string['filteryears'] = 'Ano (Numérico)';
$string['filteryears_list'] = '2014,2015,2016,2017,2018,2019';
$string['filteryears_summary'] = 'Filtrar por ano (representação numérica, 2014 ...)';
$string['finalgradeincurrentcourse'] = 'Nota final na disciplina atual';
$string['fixeddate'] = 'Data fixa';
$string['footer'] = 'Rodapé';
$string['forcemidnight'] = 'Forçar meia-noite (24 horas)';
$string['fsearchuserfield'] = 'Caixa de pesquisa do campo do utilizador';
$string['fuserfield'] = 'Filtro do campo do utilizador';
$string['global'] = 'Relatório global';
$string['global_help'] = 'Os relatórios globais podem ser acedidos de qualquer disciplina na plataforma bastando adicionar &courseid=MY_COURSE_ID no URL do relatório';
$string['globalstatsshouldbeenabled'] = 'As estatísticas do site devem estar ativadas. Vá a Administração do Site / Funcionalidades avançadas para ativar e depois Administração do Site / Servidor / Estatísticas';
$string['groupseries'] = 'Agrupar séries';
$string['groupvalues'] = 'Agrupar valores iguais (soma)';
$string['head_color'] = 'Cor do fundo do gráfico';
$string['head_data'] = 'Dados do gráfico';
$string['head_size'] = 'Tamanho do gráfico';
$string['header'] = 'Cabeçalho';
$string['height'] = 'Altura';
$string['importfromrepository'] = 'Importar relatório de repositório';
$string['importreport'] = 'Importar relatório';
$string['includesubcats'] = 'Incluir subcategorias';
$string['jsordering'] = 'Ordenação por JavaScript';
$string['jsordering_help'] = 'A ordenação por JavaScript permite que ordene a tabela do relatório sem recarregar a página';
$string['label_field'] = 'Campo da etiqueta';
$string['label_field_help'] = 'O campo que permite nomear os diferentes elementos representados no gráfico';
$string['lastexecutiontime'] = 'Tempo gasto = {$a} (segundos)';
$string['legacylognotenabled'] = 'Tem de ativar o Registo de atividade de retrocompatibilidade
Vá a Administração do Site / Módulos / Ferramenta de registo /  Gerir unidades de armazenamento de registo
Nas configurações do Registo de atividade de retrocompatibilidade, ative Registo de dados de retrocompatibilidade';
$string['limitcategories'] = 'Limitar categorias num gráfico';
$string['line'] = 'Gráfico de linhas';
$string['linesummary'] = 'Um gráfico de linhas com várias séries de dados';
$string['listofsqlreports'] = 'Clique em <b>F11</b> quando o cursor estiver no editor para alternar a edição para ecrã inteiro. A tecla <b>Esc</b> também pode ser usada para sair da edição em ecrã inteiro.<br/><br/><a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">Lista de relatórios SQL de terceiros</a>';
$string['managereports'] = 'Gerir relatórios';
$string['max'] = 'Máximo';
$string['min'] = 'Mínimo';
$string['missingcolumn'] = 'É necessário pelo menos uma coluna';
$string['module'] = 'Módulo';
$string['newreport'] = 'Novo relatório';
$string['nocalcsyet'] = 'Sem cálculos';
$string['nocolumnsyet'] = 'Sem colunas';
$string['noconditionsyet'] = 'Sem condições';
$string['noexplicitprefix'] = 'Sem prefixo explícito';
$string['nofiltersyet'] = 'Sem filtros';
$string['nofilteryet'] = 'Sem filtros';
$string['noorderingyet'] = 'Sem ordenação';
$string['nopermissionsyet'] = 'Sem permissões';
$string['noplotyet'] = 'Sem gráficos';
$string['norecordsfound'] = 'Nenhum registo foi encontrado';
$string['noreportsavailable'] = 'Não existem relatórios disponíveis';
$string['norowsreturned'] = 'Nenhuma linha retornada';
$string['nosemicolon'] = 'Nenhum ponto e vírgula';
$string['notallowedwords'] = 'Palavras não permitidas';
$string['operator'] = 'Operador';
$string['ordering'] = 'Ordenação';
$string['others'] = 'Outros';
$string['pagination'] = 'Paginação';
$string['pagination_help'] = 'Número de registos a mostra por página. Zero significa sem paginação';
$string['parentcategory'] = 'Categoria ascendente';
$string['percent'] = 'Percentagem';
$string['permissions'] = 'Permissões';
$string['pie'] = 'Circular';
$string['pieareaname'] = 'Nome';
$string['pieareavalue'] = 'Valor';
$string['piesummary'] = 'Gráfico circular';
$string['plot'] = 'Gráficos';
$string['pluginname'] = 'Relatórios personalizados';
$string['previousdays'] = 'Dias seguintes';
$string['previousend'] = 'Dias anteriores';
$string['previousstart'] = 'Execução anterior';
$string['printreport'] = 'Imprimir relatório';
$string['privacy:metadata:block_configurable_reports'] = 'O bloco Relatórios personalizados contém relatórios personalizados da disciplina.';
$string['privacy:metadata:block_configurable_reports:components'] = 'A configuração do relatório. Contém a consulta, os filtros, ...';
$string['privacy:metadata:block_configurable_reports:courseid'] = 'ID disciplina';
$string['privacy:metadata:block_configurable_reports:global'] = 'Se o relatório está acessível em todas as disciplinas ou não';
$string['privacy:metadata:block_configurable_reports:lastexecutiontime'] = 'Tempo que demorou para este relatório ser executado na última vez em que foi executado (milissegundos).';
$string['privacy:metadata:block_configurable_reports:name'] = 'O nome do relatório';
$string['privacy:metadata:block_configurable_reports:ownerid'] = 'O ID do utilizador que criou o relatório';
$string['privacy:metadata:block_configurable_reports:summary'] = 'A descrição do relatório';
$string['privacy:metadata:block_configurable_reports:type'] = 'O tipo de relatório';
$string['privacy:metadata:block_configurable_reports:visible'] = 'Se o relatório é visível ou não';
$string['puserfield'] = 'Valor do campo do utilizador';
$string['puserfield_summary'] = 'Utilizador com o valor selecionado no campo selecionado';
$string['queryfailed'] = 'Ocorreu um erro na consulta <code><pre>{$a}</pre></code>';
$string['querysql'] = 'Consulta SQL';
$string['remote'] = 'Executar na base de dados remota';
$string['remote_help'] = 'Pretende executar esta consulta na base de dados remota?';
$string['remotedescription'] = 'Executar esta consulta na base de dados remota';
$string['remotequerysql'] = 'Consulta SQL';
$string['report'] = 'Relatório';
$string['report_categories'] = 'Relatório das categorias';
$string['report_courses'] = 'Relatório das disciplinas';
$string['report_sql'] = 'Relatório SQL';
$string['report_timeline'] = 'Relatório por datas';
$string['report_users'] = 'Relatório de utilizadores';
$string['reportcategories'] = '1) Escolha uma categoria de relatório remoto';
$string['reportcolumn'] = 'Outra coluna do relatório';
$string['reportcreated'] = 'Relatório criado com sucesso';
$string['reportlimit'] = 'Máximo de linhas no relatório';
$string['reportlimitinfo'] = 'Limite o número de linhas que são exibidas na tabela do relatório (5000 linhas é o valor predefinido. É recomendável ter algum limite, para que os utilizadores não sobrecarreguem a base de dados)';
$string['reports'] = 'Relatórios';
$string['reportscapabilities'] = 'Relatório de permissões';
$string['reportscapabilities_summary'] = 'Utilizadores com a permissão moodle/site: viewreports ativada';
$string['reportsincategory'] = '2) Escolha um relatório da lista';
$string['reporttable'] = 'Tabela do relatório';
$string['reporttable_help'] = '<p>Largura da tabela que exibirá os registos do relatório.</p>

<p>Se usar um modelo, esta opção não terá qualquer efeito </p>';
$string['reporttableui'] = 'Tipo de tabela do relatório';
$string['reporttableuiinfo'] = 'Mostrar a tabela do relatório como: Tabela HTML simples com barra de rolamento, jQuery com ordenação de colunas ou biblioteca DataTables do JS (ordenação de colunas, cabeçalho fixo, pesquisa, paginação, ...)';
$string['repository'] = 'Repositório dos relatórios';
$string['repository_help'] = 'Pode importar exemplos de relatórios de um repositório público partilhado.

Tenha em atenção que há um limite diário de acessos ao repositório.

Se a ligação ao repositório não estiver a funcionar, pode descarregar manualmente o relatório a partir de <a href="https://github.com/jleyva/moodle-configurable_reports_repository" target="_blank">https://github.com/jleyva/moodle-configurable_reports_repository</a> e depois importe-o usando a botão "Importar relatório" mostrado abaixo';
$string['role'] = 'Papel';
$string['roleincourse'] = 'Utilizadores com os papéis selecionados no relatório da disciplina';
$string['roleusersn'] = 'Número de utilizadores com o papel ...';
$string['searchtext'] = 'Procurar texto';
$string['semester'] = 'Semestre (Hebraico)';
$string['serieid'] = 'Coluna da série';
$string['sessionlimittime'] = 'Limite entre cliques (em minutos)';
$string['sessionlimittime_help'] = 'O limite entre cliques define se dois cliques fazem parte da mesma sessão ou não';
$string['setcourseid'] = 'Definir courseid';
$string['sharedsqlrepository'] = 'Repositório sql partilhado';
$string['sharedsqlrepositoryinfo'] = 'Nome do proprietário da conta do GitHub + barra + nome do repositório';
$string['sqlsecurity'] = 'Segurança SQL';
$string['sqlsecurityinfo'] = 'Desative para executar consultas SQL com instruções para inserir dados';
$string['sqlsyntaxhighlight'] = 'Destacar SQL';
$string['sqlsyntaxhighlightinfo'] = 'Destaque a sintaxe SQL no editor de código (biblioteca CodeMirror do JS)';
$string['startendtime'] = 'Filtrar por data inicial/final';
$string['starttime'] = 'Data e hora de início';
$string['stat'] = 'Estatística';
$string['statsactiveenrolments'] = 'Inscrições ativas (na última semana)';
$string['statslogins'] = 'Autenticações na plataforma';
$string['statstotalenrolments'] = 'Total de inscrições';
$string['student'] = 'Aluno';
$string['subcategories'] = 'Categoria (Incluir subcategorias)';
$string['sum'] = 'Soma';
$string['tablealign'] = 'Alinhamento da tabela';
$string['tablecellpadding'] = 'Margens da célula';
$string['tablecellspacing'] = 'Espaçamento entre células';
$string['tableclass'] = 'Classe da tabela';
$string['tablewidth'] = 'Largura da tabela';
$string['template'] = 'Modelo';
$string['template_marks'] = 'Marcadores do modelo';
$string['template_marks_help'] = '<p>Pode usar qualquer uma destes marcadores de substituição:</p>

<ul>
<li>##reportname## - Para incluir o nome do relatório</li>
<li>##reportsummary## - Para incluir o sumário do relatório</li>
<li>##graphs## - Para incluir os gráficos</li>
<li>##exportoptions## - Para incluir as opções de exportação</li>
<li>##calculationstable## - Para incluir a tabela de cálculos</li>
<li>##pagination## - Para incluir a paginação</li>

</ul>';
$string['templaterecord'] = 'Modelo do registo';
$string['timeinterval'] = 'Intervalo de tempo';
$string['timeline'] = 'Por datas';
$string['timemode'] = 'Tipo';
$string['totalrecords'] = 'Total de registos = {$a->totalrecords}';
$string['type'] = 'Tipo de relatório';
$string['typeofreport'] = 'Tipo de relatório';
$string['typeofreport_help'] = 'Escolha o tipo de relatório que pretende criar.
Por segurança, o Relatório SQL requer um recurso adicional';
$string['user'] = 'Utilizador da disciplina (id)';
$string['usercompletion'] = 'Estado da conclusão da disciplina do utilizador';
$string['usercompletionsummary'] = 'Estado da conclusão da disciplina';
$string['userfield'] = 'Campo do perfil do utilizador';
$string['userfieldorder'] = 'Ordenação do campo do perfil do utilizador';
$string['usermodactions'] = 'Ações do módulo do utilizador';
$string['usermodoutline'] = 'Estatísticas do módulo do utilizador';
$string['users'] = 'Utilizador do sistema (id)';
$string['usersincohorts'] = 'Utilizadores que são membros de um ou mais agrupamento';
$string['usersincohorts_summary'] = 'Apenas utilizadores que são membros dos agrupamentos selecionados';
$string['usersincoursereport'] = 'Qualquer utilizador no relatório da disciplina';
$string['usersincoursereport_summary'] = 'Qualquer utilizador no relatório da disciplina';
$string['usersincurrentcourse'] = 'Utilizadores no relatório atual da disciplina';
$string['usersincurrentcourse_summary'] = 'Utilizadores com os papéis selecionados no relatório da disciplina';
$string['userstats'] = 'Estatísticas do utilizador';
$string['value'] = 'Valor';
$string['value_fields'] = 'Campos de valor';
$string['value_fields_help'] = 'Campos que devem ser representados no gráfico. Ctrl + clique (Cmd + clique no Mac) para selecionar vários. Se selecionar o campo Etiqueta ou um campo com valores não numéricos, ele será ignorado';
$string['viewreport'] = 'Visualizar relatório';
$string['width'] = 'Largura';
$string['xandynotequal'] = 'Os eixos X e Y não podem ser iguais';
$string['xaxis'] = 'Eixo X';
$string['yaxis'] = 'Eixo Y';
$string['yearhebrew'] = 'Ano (Hebraico)';
$string['yearnumeric'] = 'Ano (Numérico)';
$string['years'] = 'Ano (Numérico)';
$string['youmustselectarole'] = 'É obrigatório escolher um papel';
