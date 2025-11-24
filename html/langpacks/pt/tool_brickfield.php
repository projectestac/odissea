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
 * Strings for component 'tool_brickfield', language 'pt', version '4.5'.
 *
 * @package     tool_brickfield
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessibility'] = 'Acessibilidade';
$string['accessibilitydisabled'] = 'A ferramenta de acessibilidade Brickfield não está ativada neste site. Contacte o administrador do site para ativar.';
$string['accessibilityreport'] = 'Ferramenta de acessibilidade';
$string['accessibilitytool'] = 'Ferramenta de acessibilidade Brickfield';
$string['accessibilitytools'] = 'Ferramentas de acessibilidade Brickfield';
$string['activate'] = 'Ativar';
$string['activated'] = 'O módulo está ativado e pronto a usar.';
$string['activationform'] = 'Registo Brickfield';
$string['activationheader'] = 'Ativação Brickfield';
$string['activationinfo'] = '<p>Para usar este módulo, tem de inserir, no formulário abaixo, as chaves válidas do registo deste site.</p><p>Por favor, <a href="{$a}" data-action="send_info" target="_blank">registe os seus dados no Portal Brickfield</a> (abre numa nova janela) para obter as chaves, se ainda não as tem.</p><p>Depois de ativadas, as suas chaves serão validadas através da tarefa agendada Cron.</p>';
$string['activityresults:pluginname'] = 'Relatório da ferramenta de acessibilidade para detalhe da atividade';
$string['activityresults:toolname'] = 'Resumo da análise da atividade';
$string['activityresults:toolshortname'] = 'Análise da atividade';
$string['advanced:pluginname'] = 'Relatório avançado da ferramenta de acessibilidade';
$string['advanced:toolname'] = 'Descrição avançada';
$string['advanced:toolshortname'] = 'Avançado';
$string['allcourses'] = 'Todas as disciplinas revistas ({$a})';
$string['allcoursescat'] = 'Todos as disciplinas revistas da categoria {$a->catname} ({$a->count})';
$string['analysis:byrequest'] = 'Por pedido';
$string['analysis:disabled'] = 'Desativada';
$string['analysistype'] = 'Ativar pedidos de análise';
$string['analysistype_desc'] = 'Se ativar esta opção, permitirá que possa ser solicitada a análise do conteúdo';
$string['analysistypedisabled'] = 'A análise do conteúdo está desativada';
$string['bannercontentone'] = 'A ferramenta de acessibilidade Enterprise possui um conjunto completo de recursos para ajudar a sua organização a melhorar a acessibilidade das suas disciplinas. Contacte os <a href="{$a}">Brickfield Education Labs</a> para solicitar uma demonstração gratuita dos recursos avançados.';
$string['bannercontenttwo'] = 'Construir uma plataforma de ensino e aprendizagem eficaz e inclusiva, encontrando conteúdo que não respeita as diretrizes, corrigindo os problemas e preparando o conteúdo da sua disciplina Moodle para o futuro com ficheiros acessíveis, editor e funcionalidades avançadas.';
$string['bannerheadingone'] = 'Atualizar para ferramenta de acessibilidade Enterprise';
$string['batch'] = 'Limite do lote';
$string['brickfield'] = 'Ferramentas Brickfield';
$string['brickfield:viewcoursetools'] = 'Ver relatórios por disciplinas';
$string['brickfield:viewsystemtools'] = 'Ver relatórios de todas as disciplinas';
$string['bulkprocesscaches'] = 'Processamento em massa da colocação em cache';
$string['bulkprocesscourses'] = 'Processamento em massa da verificação de acessibilidade de lotes';
$string['buttonone'] = 'Obter uma demo gratuita';
$string['cachepending'] = 'O resumo dos dados está a ser compilado';
$string['checkdesc:alinksdontopennewwindow'] = 'As hiperligações que abrem numa nova janela devem avisar os utilizadores com antecedência.';
$string['checkdesc:amustcontaintext'] = 'Uma hiperligação deve conter texto para ser percetível.';
$string['checkdesc:areadontopennewwindow'] = 'As áreas, usadas em mapas de imagens, que abrem numa nova janela devem avisar os utilizadores com antecedência.';
$string['checkdesc:areahasaltvalue'] = 'As áreas, usadas em mapas de imagens, devem ter texto alternativo (alt), similar às imagens.';
$string['checkdesc:asuspiciouslinktext'] = 'O texto da hiperligação deve ser descritivo e deve fornecer contexto sobre o destino.';
$string['checkdesc:basefontisnotused'] = 'Elementos "basefont" (tradicionalmente usados para formatação) não são acessíveis e não devem ser usados.';
$string['checkdesc:blinkisnotused'] = 'Elementos "blink", que piscam, não são acessíveis e não devem ser usados.';
$string['checkdesc:boldisnotused'] = 'Elementos "b" (negrito) não devem ser usados. Em vez disso, use o elemento "strong".';
$string['checkdesc:contenttoolong'] = 'O conteúdo total da página não pode exceder 500 palavras.';
$string['checkdesc:csstexthascontrast'] = 'O contraste entre a cor do texto e a cor do fundo é muito baixo.';
$string['checkdesc:embedhasassociatednoembed'] = 'Elementos "embed" (para incorporar multimédia) devem ser usados com os respetivos elementos "noembed".';
$string['checkdesc:headerh3'] = 'Os cabeçalhos após os cabeçalhos H3 (a opção de cabeçalho grande do editor) não devem quebrar a hierarquia dos cabeçalhos da página.';
$string['checkdesc:headershavetext'] = 'Um cabeçalho deve conter texto para ser percetível.';
$string['checkdesc:iisnotused'] = 'Não devem ser usados elementos em "i" (itálico). Em vez disso, use o elemento "em".';
$string['checkdesc:imgaltisdifferent'] = 'O texto alternativo da imagem (alt) não deve ser o nome do ficheiro da imagem.';
$string['checkdesc:imgaltistoolong'] = 'Certifique-se que o texto alternativo da imagem (alt) é suficientemente conciso para descrever a imagem.';
$string['checkdesc:imgaltnotemptyinanchor'] = 'O texto alternativo da imagem (alt) não deve estar em branco, especialmente quando a imagem é uma hiperligação.';
$string['checkdesc:imgaltnotplaceholder'] = 'O texto alternativo da imagem (alt) não deve ser um texto simples de espaço reservado, como por exemplo, "imagem".';
$string['checkdesc:imghasalt'] = 'O texto alternativo da imagem (alt) deve existir para elementos de imagem, a menos que seja puramente decorativa, sem significado.';
$string['checkdesc:imgwithmaphasusemap'] = 'Mapas de imagem, com áreas clicáveis, têm de corresponder com os elementos "usemap" e "map".';
$string['checkdesc:legendtextnotempty'] = 'Elementos "legend", usados para legendar elementos \'fieldset\', devem conter texto.';
$string['checkdesc:marqueeisnotused'] = 'Elementos "marquee" (rolagem automática) não são acessíveis e não devem ser usados.';
$string['checkdesc:noheadings'] = 'A ausência de cabeçalhos torna o conteúdo menos estruturado e de difícil leitura.';
$string['checkdesc:objectmusthaveembed'] = 'Elementos "object" (para incorporar recursos externos) devem ter os correspondentes elementos "embed".';
$string['checkdesc:objectmusthavetitle'] = 'Elementos "object" (para incorporar recursos externos) devem ter a descrição dos respetivos "title".';
$string['checkdesc:objectmusthavevalidtitle'] = 'Elementos "object" (para incorporar recursos externos) devem ter os respetivos "title" com o texto.';
$string['checkdesc:strikeisnotused'] = 'Elementos "strike" (rasurado) não devem ser usados. Em substituição, devem ser usados elementos "del" (apagado).';
$string['checkdesc:tabledatashouldhaveth'] = 'Preferencialmente, as tabelas devem ter cabeçalhos.';
$string['checkdesc:tablesummarydoesnotduplicatecaption'] = 'As tabelas "resumos" e "legendas" não devem ser idênticas.';
$string['checkdesc:tabletdshouldnotmerge'] = 'Idealmente, as tabelas não devem ter células unidas.';
$string['checkdesc:tablethshouldhavescope'] = 'Os "scopes" de linha ou coluna da tabela (usados para mapear a linha e a coluna de cada célula) devem ser declarados.';
$string['checkidvalidation'] = 'Verificação de ID de verificação inválidos';
$string['checkscompleted'] = 'Verificações concluídas : {$a}';
$string['checktype'] = 'Verificar grupo';
$string['checktype:form'] = 'Formulário';
$string['checktype:image'] = 'Imagem';
$string['checktype:layout'] = 'Aparência';
$string['checktype:link'] = 'Hiperligação';
$string['checktype:media'] = 'Multimédia';
$string['checktype:table'] = 'Tabela';
$string['checktype:text'] = 'Texto';
$string['checktyperesults:pluginname'] = 'Relatório da ferramenta de acessibilidade dos tipos de conteúdo';
$string['checktyperesults:toolname'] = 'Resumo dos tipos de conteúdo';
$string['checktyperesults:toolshortname'] = 'Tipos de conteúdo';
$string['cmpercent'] = 'Percentagem global das atividades';
$string['cmpercenterrors'] = 'Percentagem global dos erros';
$string['cmpercenttitle'] = 'Percentagem global da análise das atividades versus erros';
$string['confirmationmessage'] = 'Esta disciplina foi agendada para análise. A análise será concluída o mais breve possível por {$a}. Depois de concluída, verifique novamente.';
$string['contactadmin'] = 'Contacte o seu administrador para concluir o registo.';
$string['contactus'] = 'Contacte-nos';
$string['contentfive'] = 'Corrigir automaticamente as tags HTML desatualizadas.';
$string['contentfour'] = 'Identifica que atividades têm mais problemas de acessibilidade para dar prioridade ao esforço.';
$string['contentone'] = 'Avalia automaticamente o conteúdo da sua disciplina e avaliações para problemas de acessibilidade.';
$string['contentsix'] = 'Fornece aos professores dicas no momento certo para criar um conteúdo melhor.';
$string['contentthree'] = 'Forneça aos alunos conteúdo em formatos acessíveis, incluindo Áudio, ePub e Braille eletrónico.';
$string['contenttwo'] = 'Atualização em massa do texto pouco claro ou em falta nas hiperligações, nas descrições das imagens e legendas dos vídeos.';
$string['contenttypeerrors'] = 'Resultados totais dos testes do conteúdo da atividade por disciplina e por tipo de conteúdo.';
$string['contentyperesults'] = 'Total de aprovados/reprovados por áreas de conteúdo por disciplina.';
$string['contextid'] = 'ID do contexto';
$string['core_course'] = 'Disciplina';
$string['core_question'] = 'Bancos de perguntas';
$string['count'] = 'Contagem';
$string['country'] = 'País';
$string['country_help'] = 'País do site';
$string['coursecount'] = 'Número de disciplinas';
$string['deletehistoricaldata'] = 'Apagar o histórico dos resultados das verificações';
$string['dependency'] = 'Depende de';
$string['emptycategory'] = 'Não existem disciplina na categoria  {$a}';
$string['emptytagcourses'] = 'Nenhum resultado encontrado para disciplinas com as palavras-chave indicadas';
$string['enableaccessibilitytools'] = 'Ativar ferramentas de acessibilidade';
$string['enableaccessibilitytools_desc'] = 'Se ativar esta opção, serão fornecidas ferramentas para ajudar a identificar problemas de acessibilidade nas disciplinas.';
$string['error:nocoursespecified'] = 'Este relatório resumido requer um ID de disciplina válido. Aceda à ferramenta de acessibilidade a partir de uma disciplina.';
$string['errorlink'] = 'Editar instância de erro de{$a}';
$string['errors'] = 'Erros: {$a}';
$string['errors:pluginname'] = 'Lista de erros da ferramenta de acessibilidade';
$string['errors:toolname'] = 'Sumário da lista de erros';
$string['errors:toolshortname'] = 'Lista de erros';
$string['eventanalysis_requested'] = 'Requisitada a análise do conteúdo';
$string['eventanalysis_requesteddesc'] = 'Foi requisitada a análise do conteúdo da disciplina \'{$a}\'.';
$string['eventreport_downloaded'] = 'Resumo da acessibilidade descarregado';
$string['eventreport_downloadeddesc'] = 'Foi descarregado o resumo da acessibilidade da disciplina com ID {$a}.';
$string['eventreport_viewed'] = 'Relatório de acessibilidade visualizado';
$string['eventreport_vieweddesc'] = 'Foi visualizado o relatório de acessibilidade da disciplina com ID {$a->course}, da categoria com ID {$a->category}, separador {$a->tab}.';
$string['failed'] = 'Falha';
$string['failedcount'] = 'Falha: {$a}';
$string['footerheading'] = 'Secção do rodapé';
$string['fullcachedone'] = 'Desativar o re-executar a colocação em cache';
$string['hashcorrect'] = 'O código inserido está correto.';
$string['hashincorrect'] = 'O código inserido está incorreto.';
$string['headingfive'] = 'Correções do HTML';
$string['headingfour'] = 'Focar esforço';
$string['headingone'] = 'Avaliar conteúdo';
$string['headingsix'] = 'Suporte de desempenho';
$string['headingthree'] = 'Formato de ficheiros acessíveis';
$string['headingtwo'] = 'Correção';
$string['hideshow'] = 'Ocultar/Mostrar';
$string['icon:analytics-custom'] = 'Ícone de analítica';
$string['icon:file-edit-custom'] = 'Ícone de editar ficheiro';
$string['icon:hands-helping-custom'] = 'Ícone de mãos de ajuda';
$string['icon:search-plus-custom'] = 'Ícone de pesquisa';
$string['icon:tools-custom'] = 'Ícone de ferramentas';
$string['icon:wand-magic-custom'] = 'ícone de varinha mágica';
$string['inactive'] = 'O módulo está desativado e não pode ser usado. Por favor, insira as chaves válidas do registo e clique no botão \'Ativar\'.';
$string['innercontextid'] = 'ID de contexto interno';
$string['installed'] = 'Módulo instalado';
$string['installedcli'] = 'Módulo instalado via linha de comandos';
$string['installeddescription'] = 'O módulo foi instalado. A redirecionar para o formulário de ativação.';
$string['invalidaccessibilitytool'] = 'Solicitado submódulo de acessibilidade inválido';
$string['invalidcategoryid'] = 'Categoria inválida, verifique o que inseriu';
$string['invalidcourseid'] = 'Disciplina inválida, verifique o que inseriu';
$string['invalidlinkphrases'] = 'clique | clique aqui | aqui | mais | mais aqui | informações | informações aqui | ler mais | ler mais aqui | mais informações | mais informações aqui | mais detalhes | mais detalhes aqui';
$string['language'] = 'Idioma';
$string['language_help'] = 'Idioma do site';
$string['messageprovider:warningcheckid'] = 'Aviso de ID de verificação inválidos';
$string['mobileservice'] = 'Serviços Mobile ativados ({$a})';
$string['module'] = 'Módulo';
$string['modulename'] = 'Nome';
$string['moreinfo'] = 'Mais informação';
$string['newwindowphrases'] = 'nova janela|nova-janela|nova_janela';
$string['noerrorsfound'] = 'Não foram encontrados quaisquer erros comuns de acessibilidade para os parâmetros de pesquisa indicados.';
$string['norecords'] = 'Não foi encontrado qualquer registo relevante para os parâmetros de pesquisa indicados.';
$string['notregistered'] = 'A ferramenta de acessibilidade tem de ser registada.';
$string['notvalidated'] = 'A ferramenta de acessibilidade está funcional enquanto é validada.';
$string['numcourses'] = 'Número de disciplinas ({$a})';
$string['numfactivities'] = 'Número de atividades ({$a})';
$string['numfiles'] = 'Número de ficheiros ({$a})';
$string['numinstances'] = 'Número de instâncias';
$string['numusers'] = 'Número de utilizadores ({$a})';
$string['pagedesc:checktype'] = '<p>Para resumir e analisar os resultados das várias verificações realizadas, as verificações foram agrupadas em diferentes tipos de conteúdo. Sendo assim, todos os resultados da verificação de acessibilidade relacionados com imagens estão no grupo do tipo de conteúdo "Imagem", todos os resultados da verificação de acessibilidade relacionados com a aparência estão no grupo do tipo de conteúdo "Aparência" e assim por diante.</p<p>As atividades estão incluídas como atividades, recursos ou áreas de conteúdo relacionadas com as próprias disciplinas.</p><p>A página do gráfico do tipo de conteúdo exibe a análise de erros por grupo de tipo de conteúdo: Imagem, Aparência, Hiperligação, Multimédia, Tabela e Texto.</ p>';
$string['pagedesc:pertarget'] = '<p>Para resumir e analisar os resultados da verificação por atividade, os resultados da verificação foram agrupados nas diferentes atividades detetadas.</p><p> As atividades são incluídas como atividades, recursos ou outras áreas de conteúdo relacionadas com as respetivas disciplinas. Cada atividade sem erros detetados é considerada como aprovada, cada atividade com um ou mais erros detetados é considerada como reprovada. A proporção de atividades aprovadas e reprovadas é mostrada de seguida.</p><p>A página do gráfico dos detalhes das atividades mostra a proporção de instâncias aprovadas e reprovadas no total, por atividade, como por exemplo, trabalhos, disciplina, etc.</p>';
$string['pagedesctitle:checktype'] = 'Tipos de conteúdo detalhados';
$string['pagedesctitle:pertarget'] = 'Análise da atividade detalhada';
$string['passed'] = 'Aprovado';
$string['passedcount'] = 'Aprovado: {$a}';
$string['passrate'] = 'Taxa de aprovação: {$a}%';
$string['pdf:filename'] = 'RelatórioResumo_Brickfield_IDdisciplina-{$a}';
$string['percheckerrors'] = 'Número de testes específicos e erros por verificação por disciplina.';
$string['perpage'] = 'Itens a mostrar por página';
$string['pluginname'] = 'Ferramenta de acessibilidade';
$string['printable:downloadpdf'] = 'Descarregar PDF';
$string['printable:pluginname'] = 'Relatório resumido da ferramenta de acessibilidade';
$string['printable:printreport'] = 'Relatório imprimível';
$string['printable:toolname'] = 'Relatório do resumo';
$string['printable:toolshortname'] = 'Relatório do resumo';
$string['privacy:metadata'] = 'O módulo Relatório de verificações de acessibilidade não armazena quaisquer dados pessoais.';
$string['processanalysisrequests'] = 'Processamento de solicitações de análise de conteúdo';
$string['registernow'] = 'Faça o registo aqui.';
$string['registration'] = 'Formulário de registo';
$string['registrationinfo'] = '<p>O processo de registo permite que use a versão \'Starter\' da ferramenta de acessibilidade Brickfield no seu site Moodle registado.</p><p>Esta utilização está sujeita aos <a href="{$a}" target="_blank">termos e condições Brickfield Education Labs</a> (abre numa nova janela) e com os quais concorda ao usar a ferramenta.</p>';
$string['release'] = 'Versão do Moodle ({$a})';
$string['remaining'] = '({$a}  erros restantes)';
$string['response:0'] = 'Este URL não aponta para qualquer lugar';
$string['response:404'] = 'URL da página encontrada';
$string['schedule:blocknotscheduled'] = '<p>Esta disciplina ainda não foi agendada para análise de modo a verificar a existência de problemas comuns de acessibilidade.</p>';
$string['schedule:notscheduled'] = '<p>Esta disciplina ainda não foi agendada para análise para verificar a existência de problemas comuns de acessibilidade.</p><p>Ao clicar no botão \'Submeter para análise\', confirma que pretende que todo o conteúdo HTML relevante da disciplina, tais como: descrições das secções, descrições das atividades, perguntas, páginas e muito mais, seja agendado para análise.</p><p>Esta análise fará várias verificações comuns de acessibilidade no conteúdo HTML da disciplina e os resultados serão exibidos nas páginas de relatório da ferramentas de acessibilidade. A análise será processada em segundo plano, pelas tarefas agendadas do Moodle, e a rapidez de conclusão dependerá dos tempos e agendamentos de execução das tarefas.<p>';
$string['schedule:requestanalysis'] = 'Submeter para análise';
$string['schedule:scheduled'] = 'Esta disciplina já está em lista de espera para análise.';
$string['schedule:sitenotscheduled'] = '<p>O conteúdo global (independente da disciplina) ainda não foi agendado para análise para verificar a existência de problemas comuns de acessibilidade.</p><p>Ao clicar no botão \'Submeter para análise\', confirma que pretende que todo o conteúdo global relevante (independente da disciplina) seja agendado para análise.</p><p>Esta análise fará várias verificações comuns de acessibilidade no conteúdo e os resultados serão exibidos nas páginas de relatório da ferramentas de acessibilidade. A análise será processada em segundo plano, pelas tarefas agendadas do Moodle, e a rapidez de conclusão dependerá dos tempos e agendamentos de execução das tarefas.</p>';
$string['schedule:sitescheduled'] = 'O conteúdo global (independentemente da disciplina) foi agendado para análise.';
$string['secretkey'] = 'Chave API';
$string['secretkey_help'] = 'Este código é recebido por e-mail após o registo.';
$string['sendfollowinginfo'] = '<p>As informações abaixo indicadas serão enviadas periodicamente para contribuir apenas para as estatísticas gerais. Não serão tornadas públicas em nenhuma listagem central.</p>{$a}';
$string['settings'] = 'Configurações da ferramenta de acessibilidade';
$string['sitehash'] = 'Chave secreta';
$string['sitehash_help'] = 'Este código é recebido por e-mail após o registo.';
$string['taberrors'] = 'Verificar erros';
$string['targetavetitle'] = 'Média de erros por atividade';
$string['targetpercentage'] = 'Percentagem de instâncias aprovadas/reprovadas por atividade';
$string['targetratio'] = 'Taxa de aprovação na atividade';
$string['tblcheck'] = 'Verificar';
$string['tblcheckexample'] = 'Exemplo';
$string['tblcheckfailed'] = 'Erro na verificação';
$string['tblchecksummary'] = 'Resumo';
$string['tbledit'] = 'Editar';
$string['tblerrorcount'] = 'Erros';
$string['tblhtmlcode'] = 'Código HTML existente';
$string['tblinstance'] = 'Instância';
$string['tblline'] = 'Linha';
$string['tbloverallpercentage'] = 'Erros globais %';
$string['tblpercentage'] = 'Percentagem';
$string['tblpreview'] = 'Pré-visualização';
$string['tbltarget'] = 'Atividade';
$string['tblupdateto'] = 'Atualizado para';
$string['titleactivityresultsall'] = 'Resultados por atividade: todas as atividades revistas ({$a->count} disciplinas)';
$string['titleactivityresultspartial'] = 'Resultados por atividade: disciplina {$a->name}';
$string['titleall'] = 'Detalhes do erro: todas as disciplinas revistas ({$a- count} disciplinas)';
$string['titlechecktyperesultsall'] = 'Resultados por tipo de conteúdo: todas as atividades revistas ({$a->count} disciplinas)';
$string['titlechecktyperesultspartial'] = 'Resultados por tipo de conteúdo: disciplina {$a->name}';
$string['titleerrorsall'] = 'Detalhes do erro:&nbsp;(a mostrar os primeiros {$a} erros)';
$string['titleerrorscount'] = 'Detalhes do erro: (a mostrar os primeiros {$a} erros)';
$string['titleerrorspartial'] = 'Detalhes do erro: disciplina {$a->name}';
$string['titlepartial'] = 'Detalhes do erro: disciplina {$a->name}';
$string['titleprintableall'] = 'Disciplina {$a->name}';
$string['titleprintablepartial'] = 'Disciplina {$a->name}';
$string['tools'] = 'Relatórios';
$string['toperrors'] = 'Erros mais comuns';
$string['toptargets'] = 'Atividades com erros';
$string['totalactivities'] = 'Total de atividades';
$string['totalactivitiescount'] = 'Total de atividades: {$a}';
$string['totalareas'] = 'Total de áreas';
$string['totalerrors'] = 'Total de erros';
$string['totalgrouperrors'] = 'Total (soma) de erros por tipo de conteúdo';
$string['updatesummarydata'] = 'Atualização dos dados de resumo do site';
$string['usersmobileregistered'] = 'Número de utilizadores com dispositivos móveis registados ({$a})';
$string['validationerror'] = 'Ocorreu um erro na validação da chave de registo. Verifique se estão corretos o URL e as chaves do seu site registado.';
$string['warningcheckidbody'] = 'Existe um problema com uma verificação Brickfield que está ativa mas não listada na base de dados. Por favor, averigue a situação.';
$string['warningcheckidsubject'] = 'Aviso de ID de verificação da ferramenta Brickfield';
