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
 * Strings for component 'offlinequiz', language 'pt', version '3.11'.
 *
 * @package     offlinequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add'] = 'Adicionar';
$string['addarandomquestion'] = 'uma pergunta aleatória';
$string['addarandomquestion_help'] = 'O Moodle adiciona uma seleção aleatória de perguntas de escolha múltipla (ou questões de escolha múltipla de Tudo-ou-Nada) ao grupo atual do Teste Offline. O número de perguntas adicionadas pode ser definido. As perguntas são escolhidas a partir da categoria atual (e, se selecionada, também das suas subcategorias).';
$string['addarandomselectedquestion'] = 'Adicionar uma pergunta selecionada aleatoriamente';
$string['addlist'] = 'Adicionar lista';
$string['addnewpagesafterselected'] = 'Adicionar quebras de página depois das perguntas selecionadas';
$string['addnewquestion'] = 'uma nova pergunta';
$string['addnewquestionsqbank'] = 'Adicionar perguntas à categoria {$a->catname}: {$a->link}';
$string['addnewuseroverride'] = 'Adicionar exceção para utilizador';
$string['addpagebreak'] = 'Adicionar quebra de página';
$string['addpagehere'] = 'Adicionar página aqui';
$string['addparts'] = 'Adicionar participantes';
$string['addquestionfrombankatend'] = 'Adicionar no final a partir da base de dados de perguntas';
$string['addquestionfrombanktopage'] = 'Adicionar pergunta da base de dados à página {$a}';
$string['addrandom'] = 'Adicionar aleatoriamente {$a} pergunta(s) de escolha múltipla&nbsp;';
$string['addrandomfromcategory'] = 'uma pergunta aleatória';
$string['addrandomquestion'] = 'uma pergunta aleatória';
$string['addrandomquestiontoofflinequiz'] = 'A adicionar perguntas ao Teste Offline \'{$a->name}\' (grupo \'{$a->group}\')';
$string['addrandomquestiontopage'] = 'Adicionar uma pergunta aleatória à página {$a}';
$string['addtoofflinequiz'] = 'Adicionar ao Teste Offline';
$string['addtoqueue'] = 'Adicionar à fila';
$string['allinone'] = 'Todas as';
$string['alllists'] = 'Todas as listas';
$string['allornothing'] = 'Tudo-ou-nada';
$string['allresults'] = 'Mostrar todos os resultados';
$string['allstudents'] = 'Mostrar todos os alunos';
$string['alwaysavailable'] = 'Sempre disponível';
$string['analysis'] = 'Análise do elemento';
$string['answerform'] = 'Formulário das respostas';
$string['answerformforgroup'] = 'Formulário das resposta do grupo \'{$a}\'';
$string['answerforms'] = 'Formulários das respostas';
$string['answerpdfxy'] = 'Formulário das respostas ({$a}->maxquestions questions / {$a}->maxanswers options)';
$string['areyousureremoveselected'] = 'Tem a certeza de que pretende apagar todas as perguntas selecionadas?';
$string['attemptexists'] = 'Tentativa';
$string['attemptsexist'] = 'Já não é possível adicionar ou remover perguntas.';
$string['attemptsnum'] = 'Resultados: {$a}';
$string['attemptsonly'] = 'Mostrar apenas os alunos com tentativas';
$string['attendances'] = 'Presenças';
$string['basicideasofofflinequiz'] = 'As ideias básicas na elaboração de um Teste Offline';
$string['blackwhitethreshold'] = 'Limite de preto/branco';
$string['bulksavegrades'] = 'Guardar notas';
$string['calibratescanner'] = 'Calibrar scanner';
$string['cannoteditafterattempts'] = 'Não é possível adicionar ou remover perguntas porque já existem resultados concluídos. ({$a})';
$string['category'] = 'Categoria';
$string['changed'] = 'O resultado foi alterado.';
$string['changeevaluationmode'] = 'Alterar a maneira como é feita a avaliação. Só é possível se permitido pelo administrador.';
$string['checkparts'] = 'Assinalar participantes selecionados como presentes';
$string['checkuserid'] = 'Verificar o ID do grupo/utilizador';
$string['chooseagroup'] = 'Escolha um grupo...';
$string['closebeforeopen'] = 'Não foi possível atualizar o Teste Offline. A data de fecho é anterior à data de abertura.';
$string['closestudentview'] = 'Fechar Vista do aluno';
$string['closewindow'] = 'Fechar janela';
$string['cmmissing'] = 'Está em falta o módulo da disciplina do Teste Offline com ID {$a}';
$string['completiondetail:passgrade'] = 'Obter nota de aprovação';
$string['completionpass'] = 'Aprovar para concluir';
$string['completionpass_help'] = 'Os alunos só concluem este Teste Offline se obtiverem uma nota igual ou superior à nota de aprovação definida nas opções da nota';
$string['configblackwhitethreshold'] = 'Define o limite para a conversão de preto/branco entre 1 e 99 - Quanto mais alto, mais branco deve ser o píxel importado para ser reconhecido como branco. Qualquer outro valor não tem conversão em preto/branco.';
$string['configdecimalplaces'] = 'Número de casas decimais ao mostrar as notas do Teste Offline.';
$string['configdisableimgnewlines'] = 'Se ativar esta opção, a inserção de novas linhas antes e depois das imagens será destivada nos formulário das perguntas em PDF. Aviso: pode levar a problemas de formatação.';
$string['configexperimentalevaluation'] = 'Avaliação experimental das folhas das respostas';
$string['configexperimentalevaluationdesc'] = '<b>NÃO USAR EM SITES EM PRODUÇÃO</b>! Esta opção é usada para testes alfa do novo algoritmo de avaliação. Se esta opção estiver ativada, poderá ativá-la nas opções da instância Teste Offline. Não encorajamos o uso desta opção. Não existe suporte para dados perdidos devido à ativação dessa opção.';
$string['configintro'] = 'Os valores aqui definidos são usados como valores predefinidos para as configurações de novos Testes Offline.';
$string['configkeepfilesfordays'] = 'Define o número de dias que os ficheiros de imagem enviados são mantidos em armazenamento temporário. Durante este período de tempo, os ficheiros de imagem estão disponíveis no relatório de administração do Teste Offline.';
$string['configonlylocalcategories'] = 'Não é permitida a categoria de perguntas partilhadas.';
$string['configpapergray'] = 'valor do branco do papel, que é usado para avaliação das folhas das resposta';
$string['configshuffleanswers'] = 'Baralhar respostas';
$string['configshufflequestions'] = 'Se ativar esta opção, a ordem das perguntas nos grupos do Teste Offline será aleatoriamente baralhada cada vez que recriar a pré-visualização no separador "Criar formulários".';
$string['configshufflewithin'] = 'Se ativar esta opção, as partes que compõem as perguntas individuais serão aleatoriamente baralhadas quando os formulários das perguntas e das respostas forem criados.';
$string['configuseridentification'] = 'A fórmula que representa a identificação do utilizador. Esta fórmula é usada para vincular os formulários das respostas com os utilizadores no sistema. O lado direito da equação deve indicar um campo na tabela dos utilizadores do Moodle.';
$string['confirmremovequestion'] = 'Tem a certeza de que pretende apagar esta pergunta de \'{$a}\'?';
$string['copy'] = 'Cópia';
$string['copyright'] = '<strong>Aviso: Os textos nesta página são apenas para sua informação pessoal. Como qualquer outro texto, estão sob restrições de direitos de autor. Não tem permissão para copiá-los ou mostrá-los a outras pessoas!</strong>';
$string['copyselectedtogroup'] = 'Copiar as perguntas selecionadas para o grupo: {$a}';
$string['copytogroup'] = 'Adicionar todas as perguntas ao grupo: {$a}';
$string['correct'] = 'correto';
$string['correcterror'] = 'resolver';
$string['correctforgroup'] = 'Respostas corretas do grupo \'{$a}\'';
$string['correctionform'] = 'Correção';
$string['correctionforms'] = 'Formulários da correção';
$string['correctionoptionsheading'] = 'Opções da correção';
$string['correctupdated'] = 'O formulário da correção para o grupo \'{$a}\' foi atualizado.';
$string['couldnotgrab'] = 'Não foi possível gravar a imagem "{$a}"';
$string['couldnotregister'] = 'Não foi possível registar o utilizador {$a}';
$string['createcategoryandaddrandomquestion'] = 'Criar categorias e adicionar pergunta aleatória';
$string['createlistfirst'] = 'Adicionar participantes';
$string['createofflinequiz'] = 'Criar formulários';
$string['createpartpdferror'] = 'Não foi possível criar o formulário PDF da lista de participantes \'{$a}\'. A lista pode estar vazia.';
$string['createpdf'] = 'Formulário';
$string['createpdferror'] = 'Não foi possível criar o formulário do grupo \'{$a}\'. Talvez não haja perguntas no grupo.';
$string['createpdffirst'] = 'Criar lista PDF primeiro';
$string['createpdfforms'] = 'Criar formulários';
$string['createpdfs'] = 'Formulários';
$string['createpdfsparticipants'] = 'Formulários PDF das lista de participantes';
$string['createquestionandadd'] = 'Criar uma nova pergunta e adicioná-la ao teste.';
$string['createquiz'] = 'Criar formulários';
$string['csvfile'] = 'Ficheiro CSV';
$string['csvformat'] = 'Ficheiro de texto com valores separados por vírgula (CSV)';
$string['csvplus1format'] = 'Documento de texto com dados em bruto (CSV)';
$string['csvpluspointsformat'] = 'Documento de texto com pontos (CSV)';
$string['darkgray'] = 'Cinzento escuro';
$string['datanotsaved'] = 'Não foi possível guardar as configurações';
$string['decimalplaces'] = 'Casas decimais';
$string['decimalplaces_help'] = 'Número de dígitos que devem ser mostrados depois do ponto decimal ao mostrar as notas do Teste Offline.';
$string['deletelistcheck'] = 'Tem a certeza absoluta de que pretende apagar a lista selecionada e todos os seus participantes?';
$string['deletepagecheck'] = 'Tem a certeza de que pretende apagar as páginas selecionadas?';
$string['deletepagesafterselected'] = 'Eliminar quebras de página depois das perguntas selecionadas';
$string['deletepartcheck'] = 'Tem a certeza de que pretende eliminar os participantes selecionados?';
$string['deleteparticipantslist'] = 'Apagar a lista de participantes';
$string['deletepdfs'] = 'Apagar documentos';
$string['deleteresultcheck'] = 'Deseja realmente apagar os resultados selecionados?';
$string['deleteselectedpart'] = 'Apagar os participantes selecionados';
$string['deleteselectedresults'] = 'Apagar os resultados selecionados';
$string['deletethislist'] = 'Apagar esta lista';
$string['deleteupdatepdf'] = 'Apagar e atualizar os formulários PDF';
$string['difficultytitle'] = 'Dificuldade';
$string['difficultytitlea'] = 'Dificuldade A';
$string['difficultytitleb'] = 'Dificuldade B';
$string['difficultytitlediff'] = 'Diferença';
$string['disableimgnewlines'] = 'Desativar novas linhas antes e depois das imagens';
$string['disableimgnewlines_help'] = 'Esta opção desativa novas linhas antes e depois das imagens nos formulário das perguntas em PDF. Aviso: pode levar a problemas de formatação.';
$string['displayoptions'] = 'Opções de visualização';
$string['done'] = 'concluído';
$string['downloadallzip'] = 'Descarregar tudo num ficheiro ZIP';
$string['downloadpartpdf'] = 'Descarregar ficheiro PDF da lista \'{$a}\'';
$string['downloadpdfs'] = 'Descarregar documentos';
$string['downloadresultsas'] = 'Descarregar resultados como:&nbsp;';
$string['dragtoafter'] = 'Após {$a}';
$string['dragtostart'] = 'Para o início';
$string['editgroupquestions'] = 'Editar perguntas do grupo';
$string['editgroups'] = 'Editar grupos do Teste Offline';
$string['editingofflinequiz'] = 'A editar perguntas do grupo';
$string['editingofflinequiz_help'] = 'Ao criar um Teste Offline, os conceitos básicos são:
<ul><li>O teste, com perguntas numa ou mais páginas</li>
<li>A base de dados de perguntas, que armazena cópias de todas as perguntas organizadas em categorias</li></ul>';
$string['editingofflinequizx'] = 'Editar Teste Offline: {$a}';
$string['editlist'] = 'Editar lista';
$string['editlists'] = 'Editar listas';
$string['editmaxmark'] = 'Alterar a nota máxima';
$string['editofflinequiz'] = 'Editar Teste Offline';
$string['editofflinesettings'] = 'Editar configurações';
$string['editorder'] = 'Editar ordenação';
$string['editparticipants'] = 'Editar participantes';
$string['editquestion'] = 'Editar pergunta';
$string['editquestions'] = 'Editar perguntas';
$string['editscannedform'] = 'Editar o formulário digitalizado';
$string['editthislist'] = 'Editar esta lista';
$string['emptygroups'] = 'Alguns grupos do Teste Offline estão vazios. Por favor, adicione algumas perguntas.';
$string['enroluser'] = 'Inscrever utilizador';
$string['erroraccessingreport'] = 'Não tem permissão para visualizar este relatório.';
$string['errorreport'] = 'Relatório dos erros de importação';
$string['eventattemptdeleted'] = 'Eliminada a tentativa do Teste Offline';
$string['eventattemptpreviewstarted'] = 'Iniciada a pré-visualização da tentativa do Teste Offline';
$string['eventattemptreviewed'] = 'A tentativa do Teste Offline foi revista';
$string['eventattemptsummaryviewed'] = 'Visualizado o resumo da tentativa do Teste Offline';
$string['eventattemptviewed'] = 'Tentativa do Teste Offline visualizada';
$string['eventdocscreated'] = 'Foram criados os formulários das perguntas e das respostas do Teste Offline';
$string['eventdocsdeleted'] = 'Foram apagados os formulários das perguntas e das resposta do Teste Offline';
$string['eventeditpageviewed'] = 'Página de edição do Teste Offline visualizada';
$string['eventofflinequizattemptsubmitted'] = 'Tentativa do Teste Offline submetida';
$string['eventoverridecreated'] = 'A substituição do Teste Offline foi criada';
$string['eventoverridedeleted'] = 'A substituição do Teste Offline foi apagada';
$string['eventoverrideupdated'] = 'A substituição do Teste Offline foi atualizada';
$string['eventparticipantmarked'] = 'Participante do Teste Offline marcado manualmente';
$string['eventquestionmanuallygraded'] = 'Pergunta avaliada manualmente';
$string['eventreportviewed'] = 'Relatório de Teste Offline visualizado';
$string['eventresultsregraded'] = 'Resultados do Teste Offline reavaliados';
$string['everythingon'] = 'ativado';
$string['excelformat'] = 'Documento Excel (XLSX)';
$string['experimentalevaluation'] = 'Avaliação experimental das folhas das respostas';
$string['experimentalevaluation_help'] = 'Avaliação experimental das folhas das respostas';
$string['fileformat'] = 'Formato das folhas das perguntas';
$string['fileformat_help'] = 'Escolha o formato que pretende para as folhas das perguntas: PDF, DOCX ou TEX. Os formulários das respostas e as folhas da correção serão sempre gerados no formato PDF.';
$string['fileprefixanswer'] = 'form_resposta';
$string['fileprefixcorrection'] = 'form_correção';
$string['fileprefixform'] = 'form_perguntas';
$string['fileprefixparticipants'] = 'lista_participantes';
$string['filesizetolarge'] = 'Alguns dos seus ficheiros de imagem são muito grandes. As dimensões serão redimensionadas durante a interpretação. Por favor, tente digitalizar com uma resolução entre 200 e 300 dpi e no modo preto e branco. Isto irá acelerar a interpretação da próxima vez.';
$string['filterbytags'] = 'Filtrar por etiquetas';
$string['fontsize'] = 'Tamanho do tipo de letra';
$string['forautoanalysis'] = 'Para análise automática dos dados';
$string['formforcorrection'] = 'Formulário da correção do grupo \'{$a}\'';
$string['formforgroup'] = 'Formulário das perguntas do grupo \'{$a}\'';
$string['formforgroupdocx'] = 'Formulário das perguntas do grupo \'{$a}\' (DOCX)';
$string['formforgrouplatex'] = 'Formulário das perguntas do grupo \'{$a}\' (LATEX)';
$string['formsexist'] = 'Os formulários já foram criados';
$string['formsexistx'] = 'Os formulários já foram criados (<a href="{$a}">Descarregar formulários</a>)';
$string['formsheetsettings'] = 'Configurações do formulário';
$string['formspreview'] = 'Pré-visualização dos formulários';
$string['formwarning'] = 'O formulário das respostas não está definido. Entre em contacto com o administrador.';
$string['fromquestionbank'] = 'da base de dados de perguntas';
$string['functiondisabledbysecuremode'] = 'A funcionalidade está atualmente desativada';
$string['generalfeedback'] = 'Feedback geral';
$string['generalfeedback_help'] = 'O feedback geral é o texto que é mostrado depois de uma tentativa de resposta a uma pergunta. Ao contrário do feedback específico para uma pergunta, que depende da resposta dada, o feedback geral é sempre o mesmo a ser mostrado.';
$string['generatepdfform'] = 'Gerar formulário PDF';
$string['grade'] = 'Nota';
$string['gradedon'] = 'Avaliado em';
$string['gradedscannedform'] = 'Formulário digitalizado com as notas';
$string['gradeiszero'] = '<b>Atenção</b>: A nota máxima para este Teste Offline é 0 pontos!';
$string['gradeswarning'] = 'As notas das perguntas têm de ser números!';
$string['gradewarning'] = 'A nota da pergunta tem de ser um número!';
$string['gradingofflinequiz'] = 'Avaliações';
$string['gradingofflinequizx'] = 'Avaliações: {$a}';
$string['gradingoptionsheading'] = 'Opções da avaliação';
$string['greeniscross'] = 'contadas como uma cruz';
$string['group'] = 'Grupo';
$string['groupoutofrange'] = 'Grupo fora do intervalo e foi substituído pelo grupo A.';
$string['groupquestions'] = 'Perguntas do grupo';
$string['hasresult'] = 'Já existe este resultado';
$string['hotspotdeletiontask'] = 'Apagar hotspots';
$string['html'] = 'HTML';
$string['idnumber'] = 'N.º de identificação (ID)';
$string['imagefile'] = 'Ficheiro de imagem';
$string['imagenotfound'] = 'Ficheiro de imagem \'{$a}\' não foi encontrado';
$string['imagenotjpg'] = 'A imagem não é jpg ou png: {$a}';
$string['imagickwarning'] = 'Falta o imagemagick: peça ao administrador do sistema para instalar a biblioteca imagemagick e verifique o caminho para o binário convertido nas suas configurações do filtro da notação TeX. Não pode importar ficheiros TIFF sem o imagemagick!';
$string['import'] = 'Importar';
$string['importedon'] = 'Importação';
$string['importerror11'] = 'Existe outro resultado';
$string['importerror12'] = 'Utilizador não registado';
$string['importerror13'] = 'Nenhum dado do grupo';
$string['importerror14'] = 'Não foi possível guardar';
$string['importerror15'] = 'Marcações incertas';
$string['importerror16'] = 'Erro na página';
$string['importerror17'] = 'Páginas incompletas';
$string['importerror21'] = 'Não foi possível guardar';
$string['importerror22'] = 'Marcações incertas';
$string['importerror23'] = 'Utilizador não consta da lista';
$string['importerror24'] = 'Lista não detetada';
$string['importforms'] = 'Importar formulários das respostas';
$string['importfromto'] = 'A importar {$a->from} a {$a->to} do total de {$a->total}.';
$string['importisfinished'] = 'A importação para o Teste Offline "{$a}" está concluída.';
$string['importlinkresults'] = 'Hiperligação para os resultados: {$a}';
$string['importlinkverify'] = 'Hiperligação para as verificações: {$a}';
$string['importmailsubject'] = 'Notificação de importação do Teste Offline';
$string['importnew'] = 'Importar';
$string['importnew_help'] = '<p>
Pode importar simples ficheiros de imagens digitalizadas ou vários ficheiros de imagens digitalizadas num ficheiro ZIP. O módulo de Teste Offline irá processar os ficheiros de imagem em segundo plano.
Os nomes dos ficheiros não são relevantes, mas não devem conter caracteres especiais, tais como ä. As imagens devem ser GIFs, PNGs
ou TIFs. Recomenda-se uma resolução entre 200 e 300 dpi.</p>';
$string['importnumberexisting'] = 'Número de formulários duplicados: {$a}';
$string['importnumberpages'] = 'Número de páginas importadas com sucesso: {$a}';
$string['importnumberresults'] = 'Número de importados: {$a}';
$string['importnumberverify'] = 'Número de formulários que precisam de verificação: {$a}';
$string['importtimefinish'] = 'Processo finalizado {$a}';
$string['importtimestart'] = 'Processo iniciado {$a}';
$string['inconsistentdata'] = 'Dados inconsistentes: {$a}';
$string['info'] = 'Informação';
$string['infoshort'] = 'i';
$string['insecuremarkings'] = 'As marcações incertas necessitam de correção manual';
$string['insecuremarkingsforquestion'] = 'É necessário corrigir manualmente as marcações incertas da pergunta';
$string['insertnumber'] = 'Por favor, insira o número de identificação correto indicado pela moldura azul.';
$string['instruction1'] = 'Este formulário das respostas será digitalizado e importado para a plataforma. Por favor, não dobre nem manche. Utilize uma caneta preta ou azul para marcar os campos:';
$string['instruction2'] = 'Apenas as marcações bem indicadas podem ser interpretadas corretamente! Se pretender corrigir uma marcação, preencha completamente a caixa com a cor utilizada. Este campo será interpretado como uma caixa vazia:';
$string['instruction3'] = 'Tenha em atenção que as caixas corrigidas não podem ser marcadas novamente. Por favor, não escreva fora das caixas.';
$string['introduction'] = 'Introdução';
$string['invalidformula'] = 'Fórmula inválida para identificação do utilizador. A fórmula deve ter a forma <prefix>[<#digits>]<suffix>=<db-field&>.';
$string['invalidnumberofdigits'] = 'Número inválido de dígitos usados. Apenas são permitidos digitos de 1 a 9.';
$string['invaliduserfield'] = 'Campo inválido da tabela de utilizadores utilizada.';
$string['invigilator'] = 'Vigilante';
$string['ischecked'] = 'A participação está verificada';
$string['isnotchecked'] = 'A participação não está verificada';
$string['itemdata'] = 'Itemdata';
$string['keepfilesfordays'] = 'Número de dias para manter ficheiros';
$string['letter'] = 'Letra';
$string['lightgray'] = 'Cinzento claro';
$string['linktoscannedform'] = 'Ver formulário das respostas digitalizado';
$string['listnotdetected'] = 'Não foi possível detetar o código de barras da lista!';
$string['logdeleted'] = 'Entrada do registo {$a} apagada.';
$string['logourl'] = 'URL do logótipo';
$string['logourldesc'] = 'Hiperligação para um ficheiro de imagem que será mostrada no canto superior direito dos formulários das resposta, por exemplo: <b>http://www.yoursite.tld/mylogo.png</b> ou <b>../path/to/your/logo.png</b>. O tamanho máximo permitido é de 520 x 140 píxeis. Os formulários das respostas não poderão ser avaliados se a imagem exceder o tamanho máximo!';
$string['lowertrigger'] = 'Segundo limite inferior';
$string['lowertriggerzero'] = 'O segundo limite inferior é zero';
$string['lowerwarning'] = 'Primeiro limite inferior';
$string['lowerwarningzero'] = 'O primeiro limite inferior é zero';
$string['marginwarning'] = 'Por favor, imprima os ficheiros PDF apresentados sem margens adicionais!<br />Evite distribuir fotocópias dos mesmos aos alunos.';
$string['marks'] = 'Notas';
$string['matrikel'] = 'número do aluno';
$string['maxgradewarning'] = 'A nota máxima tem de ser um número!';
$string['maxmark'] = 'Pontuação máxima';
$string['membersinplist'] = '{$a->count} participantes na lista <a href="{$a->url}">{$a->name}</a>';
$string['missingimagefile'] = 'Falta ficheiro de imagem';
$string['missingitemdata'] = 'Resposta(s) em falta para o utilizador {$a}';
$string['missinglogdata'] = 'Dados de registo em falta para o resultado existente.';
$string['missingquestion'] = 'Esta pergunta parece já não existir';
$string['missinguserid'] = 'Falta o número de identificação do utilizador! Não foi possível ler o código de barras!';
$string['modulename'] = 'Teste Offline';
$string['modulename_help'] = 'Este módulo permite que o professor crie testes offline com perguntas de múltipla escolha. As perguntas são mantidas na base de dados de perguntas do Moodle e podem ser reutilizadas nas disciplinas e até mesmo entre as disciplinas. Os testes offline podem ser descarregados como ficheiros PDF, DOCX ou LaTeX. Os alunos marcam as suas respostas nas folhas de formulário. As folhas do formulário são digitalizadas e as respostas são importadas para o sistema.';
$string['modulenameplural'] = 'Testes Offline';
$string['moodleprocessing'] = 'Permitir o Moodle processar os dados';
$string['movecorners'] = 'Em primeiro lugar, altere as posições das marcações dos cantos. Use a opção Arrastar e Largar.';
$string['moveselectedonpage'] = 'Mover perguntas selecionadas para a página: {$a}';
$string['multianswersforsingle'] = 'Várias respostas para uma pergunta de escolha única';
$string['multichoice'] = 'Escolha múltipla';
$string['multipleanswers'] = 'Escolha pelo menos uma resposta.';
$string['name'] = 'Nome';
$string['neededcorrection'] = '<strong>Atenção: Algumas das suas respostas necessitaram de correção manual. Veja os quadrados vermelhos na imagem abaixo.
<br />Implicou a intervenção manual por parte de um professor e atrasou a publicação dos resultados do Teste Offline!</strong>';
$string['newgrade'] = 'Avaliado';
$string['newpage'] = 'Nova página';
$string['noattemptexists'] = 'Não existem resultados';
$string['noattempts'] = 'Ainda não foram importados os resultados!';
$string['noattemptsonly'] = 'Mostrar apenas os alunos sem resultados';
$string['nocourse'] = 'Está em falta a disciplina com ID {$a->course} a que pertence o Teste Offline com ID {$a->offlinequiz}.';
$string['nogradesseelater'] = 'Este teste ainda não foi avaliado para {$a}. Os resultados serão publicados aqui.';
$string['nogroupdata'] = 'Nenhum dado de grupo para o utilizador {$a}';
$string['nomcquestions'] = 'Não existem perguntas de escolha múltipla no grupo \'{$a}\'!';
$string['noofflinequiz'] = 'Não existe nenhum Teste Offline com ID {$a}!';
$string['nopages'] = 'Nenhuma página foi importada';
$string['noparticipantsfound'] = 'Não foram encontrados participantes';
$string['nopdfscreated'] = 'Nenhum documento foi criado!';
$string['noquestions'] = 'Alguns grupos do Teste Offline estão vazios. Por favor, adicione algumas perguntas.';
$string['noquestionselected'] = 'Nenhuma pergunta foi selecionada!';
$string['noquestionsfound'] = 'Não existem perguntas no grupo \'{$a}\'!';
$string['noquestionsonpage'] = 'Página em branco';
$string['noresults'] = 'Não existem resultados.';
$string['noreview'] = 'Não está autorizado a rever este Teste Offline';
$string['noscannedpage'] = 'Não existe página digitalizada com o ID {$a}!';
$string['notagselected'] = 'Nenhuma etiqueta selecionada';
$string['nothingtodo'] = 'Nenhuma tarefa por realizar!';
$string['notxtfile'] = 'Sem ficheiro TXT';
$string['notyetgraded'] = 'Ainda não avaliadas';
$string['nozipfile'] = 'Não existe ficheiro ZIP';
$string['numattempts'] = 'Número de resultados importados: {$a}';
$string['numattemptsqueue'] = '{$a} formulário(s) das respostas foi/foram adicionados à fila. Será enviada uma mensagem para o seu endereço de e-mail após o processamento dos dados.';
$string['numattemptsverify'] = 'Formulários digitalizados a aguardar correção: {$a}';
$string['numberformat'] = 'O valor tem que ser um número com {$a} dígitos!';
$string['numbergroups'] = 'Número de grupos';
$string['numpages'] = '{$a} páginas importadas';
$string['numquestionsx'] = 'N.º de perguntas: {$a}';
$string['numusersadded'] = 'adicionados {$a} participantes';
$string['odsformat'] = 'Documento OpenDocument (ODS)';
$string['offlineimplementationfor'] = 'Implementação Offline para';
$string['offlinequiz:addinstance'] = 'Adicionar um Teste Offline';
$string['offlinequiz:attempt'] = 'Tentar responder a testes';
$string['offlinequiz:changeevaluationmode'] = 'Torna possível alterar o modo de avaliação. AVISO: NÃO USE EM SISTEMAS DE PRODUÇÃO!';
$string['offlinequiz:createofflinequiz'] = 'Criar formulários do Teste Offline';
$string['offlinequiz:deleteattempts'] = 'Apagar resultados do Teste Offline';
$string['offlinequiz:grade'] = 'Avaliar manualmente Testes Offline';
$string['offlinequiz:manage'] = 'Gestão de Testes Offline';
$string['offlinequiz:preview'] = 'Pré-visualizar Testes Offline';
$string['offlinequiz:view'] = 'Ver informação do Teste Offline';
$string['offlinequiz:viewreports'] = 'Ver relatórios de Testes Offline';
$string['offlinequizcloses'] = 'O Teste Offline fecha';
$string['offlinequizcloseson'] = 'A revisão deste Teste Offline vai terminar em {$a}';
$string['offlinequizisclosed'] = 'Teste Offline fechado';
$string['offlinequizisclosedwillopen'] = 'Teste Offline fechado (abre {$a})';
$string['offlinequizisopen'] = 'Este teste está aberto';
$string['offlinequizisopenwillclose'] = 'Teste Offline aberto (fecha {$a})';
$string['offlinequizopenedon'] = 'Este teste abriu {$a}';
$string['offlinequizopens'] = 'Teste Offline abre';
$string['offlinequizsettings'] = 'Configurações';
$string['offlinequizwillopen'] = 'Teste Offline abre {$a}';
$string['oneclickenrol'] = 'Inscrição com 1 clique';
$string['oneclickenroldesc'] = 'Se ativar esta opção, os professores têm a possibilidade de inscrever utilizadores com 1 clique ao corrigir os formulários das respostas (quando ocorre o erro "Utilizador não inscrito na disciplina").';
$string['oneclickrole'] = 'Papel na inscrição com 1 clique';
$string['oneclickroledesc'] = 'Escolha o papel a ser atribuído para a inscrição com 1 clique. Apenas podem ser selecionados os papéis com o arquétipo "aluno".';
$string['onlylocalcategories'] = 'Apenas categorias de perguntas locais';
$string['orderandpaging'] = 'Ordenação e paginação';
$string['orderandpaging_help'] = 'Os números 10, 20, 30, ... oposto a cada pergunta indicam a ordem das perguntas. Os números aumentam de 10 em 10 de modo a deixar espaço para que outras perguntas possam ser inseridas. Para reordenar as perguntas, mude os números e clique no botão "Reordenar perguntas". Para adicionar quebras de página após perguntas específicas, marque as caixas de seleção ao lado das perguntas e clique no botão "Adicionar quebra de página após as perguntas selecionadas". Para organizar as perguntas em várias páginas, clique no botão Repaginar e selecione o número desejado de perguntas por página.';
$string['orderingofflinequiz'] = 'Ordenação e paginação';
$string['otherresultexists'] = 'Já existe um resultado diferente para {$a}. A importação foi ignorada! Apague o resultado primeiro.';
$string['outof'] = '{$a->grade} de um máximo de {$a->maxgrade}';
$string['outofshort'] = '{$a->grade}/{$a->maxgrade}';
$string['overallfeedback'] = 'Feedback global';
$string['overview'] = 'Visão global';
$string['overviewdownload_help'] = 'Descarregar visão global';
$string['page-mod-offlinequiz-edit'] = 'Editar página do Teste Offline';
$string['page-mod-offlinequiz-x'] = 'Qualquer página de Teste Offline';
$string['pagecorrected'] = 'Folha com a lista de participantes corrigida foi importada';
$string['pageevaluationtask'] = 'Avaliação das folhas das respostas do Teste Offline';
$string['pageimported'] = 'Importada folha da lista de participantes';
$string['pagenotdetected'] = 'Não foi possível ler o código de barras da página!';
$string['pagenumberimported'] = 'Importada folha {$a} da lista de participantes';
$string['pagenumberupdate'] = 'Atualização do número de página';
$string['pagesizeparts'] = 'Número de participantes por página:';
$string['papergray'] = 'Valor do branco do papel';
$string['papergray_help'] = 'Se as partes brancas dos formulários das respostas digitalizados estiverem muito escuras, pode corrigir ao definir este valor como cinzento escuro.';
$string['partcheckedwithoutresult'] = '<a href="{$a->url}">{$a->count} participantes verificados sem resultado</a>';
$string['partcheckedwithresult'] = '{$a} participantes verificados com resultado';
$string['partial'] = 'parcial';
$string['participants'] = 'Participantes';
$string['participants_help'] = '<p>As listas de participantes são necessárias para grandes testes offline com muitos participantes. Ajudam o professor a verificar quais foram os alunos que participaram no teste e se todos os resultados foram importados corretamente.
Pode adicionar utilizadores em listas diferentes. Cada lista pode, por exemplo, conter os participantes numa determinada sala. Os participantes podem ser membros de um grupo especial. A ferramenta de registo de grupos pode ser usada para criar esses grupos.
As listas de participantes podem ser descarregadas como ficheiros PDF, impressas e marcadas com cruzes, tal como os formulários  das respostas dos testes offline. Depois, podem ser carregadas e os alunos assinalados serão considerados como presentes na base de dados.
Por favor, evite manchas no código de barras porque são utilizados para identificar os alunos.</p>';
$string['participantsinlists'] = 'Participantes nas listas';
$string['participantslist'] = 'Lista de participantes';
$string['participantslists'] = 'Participantes';
$string['partimportnew'] = 'A carregar lista de participantes';
$string['partimportnew_help'] = '<p>
Neste separador pode carregar as listas de participantes já preenchidas. Pode enviar um único ficheiro de imagem digitalizada ou vários ficheiros de imagens digitalizadas num ficheiro ZIP. O módulo de Teste Offline processará os ficheiros de imagem em segundo plano.
Os nomes dos ficheiros não são relevantes, mas não devem conter caracteres especiais, tais como ä, ö ou üs. As imagens devem ser GIF, PNG ou TIF. Recomenda-se uma resolução entre 200 e 300 dpi.</p>';
$string['partuncheckedwithoutresult'] = '{$a} participantes não verificados sem resultado';
$string['partuncheckedwithresult'] = '<a href="{$a->url}">{$a->count} participantes não verificados com resultado</a>';
$string['pdfdeletedforgroup'] = 'Apagado o formulário do grupo \'{$a}\'';
$string['pdfintro'] = 'Informação adicional';
$string['pdfintro_help'] = 'Esta informação será impressa na primeira página das folhas das perguntas e deve conter informações gerais sobre como preencher o formulário das resposta.';
$string['pdfintrotext'] = '<b>Como responder corretamente?</b><br/>Este formulário das respostas será digitalizado automaticamente. Por favor não dobre ou manche. Utilize uma caneta preta ou azul para marcar os campos. Se quiser corrigir uma resposta, deve preencher completamente a caixa errada com a cor utilizada. O campo será interpretado como uma caixa vazia.<br/>';
$string['pdfintrotoolarge'] = 'A introdução é muito longa (máximo 2000 caracteres).';
$string['pdfscreated'] = 'Os formulários PDF já foram criados';
$string['pdfsdeletedforgroup'] = 'Apagados os formulários do grupo \'{$a}\'';
$string['pearlywhite'] = 'Branco pérola';
$string['pluginadministration'] = 'Administração do Teste Offline';
$string['pluginname'] = 'Teste Offline';
$string['point'] = 'ponto';
$string['present'] = 'Presente';
$string['preventsamequestion'] = 'Impedir a utilização da mesma pergunta em grupos diferentes';
$string['preview'] = 'Pré-visualização';
$string['previewforgroup'] = 'Pré-visualização das perguntas do grupo \'{$a}\'';
$string['previewquestion'] = 'Pré-visualização da pergunta';
$string['printstudycodefield'] = 'Imprimir campo do código de estudo na folha das perguntas';
$string['printstudycodefield_help'] = 'Se ativar esta opção, o campo do código de estudo será impresso na primeira página das folhas das perguntas.';
$string['privacy:data_folder_name'] = 'Dados do Teste Offline';
$string['questionanalysis'] = 'Análise da dificuldade';
$string['questionanalysistitle'] = 'Tabela de Análise da dificuldade';
$string['questionbankcontents'] = 'Conteúdo da base de dados de perguntas';
$string['questionforms'] = 'Formulários das perguntas';
$string['questioninfoanswers'] = 'Número de respostas corretas';
$string['questioninfocorrectanswer'] = 'resposta correta';
$string['questioninfocorrectanswers'] = 'respostas corretas';
$string['questioninfonone'] = 'Nada';
$string['questioninfoqtype'] = 'Tipo de pergunta';
$string['questionname'] = 'Nome da pergunta';
$string['questionpage'] = 'Página';
$string['questionsheet'] = 'Folha de rosto do Teste Offline';
$string['questionsheetlatextemplate'] = '% !TEX encoding = UTF-8 Unicode
\\documentclass[11pt,a4paper]{article}
\\usepackage[utf8x]{inputenc}
\\usepackage[T1]{fontenc}
\\textwidth 16truecm
\\textheight 23truecm
\\setlength{\\oddsidemargin}{0cm}
\\setlength{\\evensidemargin}{0cm}
\\setlength{\\topmargin}{-1cm}
\\usepackage{amsmath} % for \\implies etc
\\usepackage{amsfonts} % for \\mathbb etc
\\usepackage[colorlinks=true,urlcolor=dunkelrot,linkcolor=black]{hyperref} % Para usar hiperligações
\\usepackage{ifthen}
\\usepackage{enumitem}
\\usepackage{xcolor}
\\usepackage{ulem}
\\parindent 0pt % sem identação no início de uma secção
\\renewcommand\\UrlFont{\\sf}
\\usepackage{lastpage}
\\usepackage{fancyhdr}
\\pagestyle{fancy}
\\chead{\\sc \\TestTitle, Group \\Group}
\\cfoot{Seite \\thepage/\\pageref{LastPage}}
\\makeatletter %%% desativar quebras de página entre respostas
\\@beginparpenalty=10000
\\@itempenalty=10000
\\makeatother
%
\\newcommand{\\answerIs}[1]{} %%%Desativar mostrar a resposta correta
% \\newcommand{\\answerIs}[1]{[#1]} %%%Ativar mostrar a resposta correta
%%%


% ===========================================================================================================
%%% Dados da disciplina:
\\newcommand{\\Group}{{$a->groupname}}
\\newcommand{\\Title}{{$a->activityname}}
%%% Ou usar {{$a->coursename} como nome da disciplina
\\newcommand{\\Date}

\\newcommand{\\TestTitle}{%
\\begin{center}
{\\bf \\Large Question sheet}\\\\[3mm]
\\fbox{
\\begin{tabular}{rl}
\\rule{0pt}{25pt} Nome: & $\\underline{\\hspace*{8cm}}$ \\rule{20pt}{0pt}\\\\[5mm]
ID: & $\\underline{\\hspace*{8cm}}$\\\\[5mm]
\\ifthenelse{\\equal{true}{{$a->printstudycodefield}}}{\\rule{10pt}{0pt} Código: & $\\underline{\\hspace*{8cm}}$\\\\[5mm]}{}
\\rule[-20pt]{0pt}{20pt} Assinatura: & $\\underline{\\hspace*{8cm}}$
\\end{tabular}}
\\end{center}
}

\\InputIfFileExists{offline_test_extras.tex}{}{} % Configurações extras do utilizador

\\begin{document}


% ===========================================================================================================
\\TestTitle

% ===========================================================================================================


\\bigskip
% ===========================================================================================================

{$a->pdfintrotext}

% ===========================================================================================================

\\newpage

% ===========================================================================================================


{$a->latexforquestions}


\\end{document}';
$string['questionsin'] = 'Perguntas em';
$string['questionsingroup'] = 'Perguntas no grupo';
$string['questionsinthisofflinequiz'] = 'Perguntas neste Teste Offline';
$string['questiontextisempty'] = '[Texto de pergunta vazio]';
$string['quizdate'] = 'Data e hora';
$string['quizopenclose'] = 'Datas de abertura e fecho';
$string['quizopenclose_help'] = 'Os alunos só podem ver a(s) sua(s) tentativa(s) enquanto a revisão estiver disponível.';
$string['quizquestions'] = 'Perguntas do Teste';
$string['randomfromexistingcategory'] = 'Pergunta aleatória a partir de uma categoria existente';
$string['randomnumber'] = 'Número de perguntas aleatórias';
$string['randomquestionusinganewcategory'] = 'Pergunta aleatória de uma nova categoria';
$string['readjust'] = 'Reajustar';
$string['reallydeletepdfs'] = 'Tem a certeza de que pretende apagar os ficheiros dos formulários?';
$string['reallydeleteupdatepdf'] = 'Tem a certeza de que pretende apagar e atualizar a lista de participantes?';
$string['recreatepdfs'] = 'Recriar PDFs';
$string['recurse'] = 'Incluir também as perguntas das subcategorias';
$string['rediswrong'] = 'marcação incorreta ou cruz em falta';
$string['refreshpreview'] = 'Atualizar pré-visualização';
$string['regrade'] = 'Reavaliação';
$string['regradedisplayexplanation'] = '<b>Atenção:</b> A reavaliação não altera as notas que foram ajustadas manualmente!';
$string['regradinginfo'] = 'Se alterar a pontuação de uma pergunta, deverá reavaliar o teste offline para atualizar os resultados dos participantes.';
$string['regradingquiz'] = 'Reavaliação';
$string['regradingresult'] = 'A reavaliar o resultado do utilizador {$a}...';
$string['reloadpreview'] = 'Recarregar pré-visualização';
$string['reloadquestionlist'] = 'Recarregar a lista das perguntas';
$string['remove'] = 'Apagar';
$string['removeemptypage'] = 'Eliminar página vazia';
$string['removepagebreak'] = 'Eliminar quebra de página';
$string['removeselected'] = 'Apagar selecionados';
$string['reordergroupquestions'] = 'Reordenar perguntas do grupo';
$string['reorderquestions'] = 'Reordenar perguntas';
$string['reordertool'] = 'Mostrar ferramenta de reordenação';
$string['repaginate'] = 'Repaginar com {$a} perguntas por página';
$string['repaginatecommand'] = 'Repaginar';
$string['repaginatenow'] = 'Repaginar agora';
$string['reportends'] = 'Fim da revisão dos resultados';
$string['reportoverview'] = 'Visão global';
$string['reportstarts'] = 'Início da revisão dos resultados';
$string['resetofflinequizzes'] = 'Reiniciar dados do Teste Offline';
$string['resultexists'] = 'Já existe o mesmo resultado para {$a}. O resultado importado não foi considerado';
$string['resultimport'] = 'Importar resultados';
$string['results'] = 'Resultados';
$string['review'] = 'Revisão';
$string['reviewbefore'] = 'Permitir a revisão enquanto o Teste Offline está aberto';
$string['reviewclosed'] = 'Após o fecho do Teste Offline';
$string['reviewcloses'] = 'Revisão termina em';
$string['reviewimmediately'] = 'Imediatamente após a tentativa';
$string['reviewincludes'] = 'A revisão inclui';
$string['reviewofresult'] = 'Revisão do resultado';
$string['reviewopens'] = 'Revisão disponível em';
$string['reviewoptions'] = 'Visível para os alunos';
$string['reviewoptions_help'] = 'Com estas opções, pode controlar o que os alunos podem ver após a importação dos resultados. Também pode definir as horas de início e fim para o relatório de resultados. As caixas de seleção significam:
<table>
<tr><td style="vertical-align: top;"><b>A tentativa</b></td><td>
O texto das perguntas e respostas será mostrado aos alunos. Poderão ver as respostas que escolheram mas as respostas corretas não serão indicadas.</td>
</td></tr>
<tr><td style="vertical-align: top;"><b>Se correto</b></td><td>
Esta opção só pode ser ativada se a opção "A tentativa" estiver ativada. Se ativar esta opção, os alunos poderão ver quais das respostas escolhidas estão corretas (fundo verde) ou incorretas (fundo vermelho).
</td></tr>
<tr><td style="vertical-align: top;"><b>Pontuações</b></td><td>
O grupo (por exemplo, B), são mostradas as pontuações (nota obtida, nota total para as perguntas, obtida em percentagem, por exemplo, 40/80 (50)) e a nota (por exemplo, 50 de um máximo de 100). Além disso, se "A tentativa" estiver selecionada, a pontuação obtida e a pontuação máxima serão mostradas para cada pergunta.
</td></tr>
<tr><td style="vertical-align: top;"><b>Feedback específico</b></td><td>
Feedback que depende da resposta dada pelo aluno.
</td></tr>
<tr><td style="vertical-align: top;"><b>Feedback geral</b></td><td>
<p>O feedback geral é mostrado ao aluno após a importação dos resultados. Ao contrário do feedback específico, que depende do tipo de pergunta e da resposta que o aluno deu, o mesmo texto de feedback geral é mostrado a todos os alunos.</p>
<p></p><p>Pode usar o feedback geral para dar aos alunos uma resposta completa e talvez uma hiperligação para mais informações que poderão usar se não entenderem as perguntas.</p>
</td></tr>
<tr><td style="vertical-align: top;"><b>Resposta corretas</b></td><td>
É mostrado quais respostas estão corretas ou incorretas. Esta opção apenas está disponível se "A tentativa" estiver definida.
</td></tr>
<tr><td style="vertical-align: top;"><b>Formulário digitalizado</b></td><td>
São mostrados os formulários de resposta digitalizados. As caixas assinaladas estão marcadas com quadrados verdes.
</td></tr>
<tr><td style="vertical-align: top;"><b>Formulário digitalizado com as notas</b></td><td>
São mostrados os formulários de resposta digitalizados. As caixas assinaladas estão marcadas com quadrados verdes. Marcações erradas e/ou em falta estão destacadas. Além disso, uma tabela mostra a nota máxima e a nota obtida para cada pergunta.
</td></tr>
</table>';
$string['reviewoptionsheading'] = 'Opções da revisão';
$string['rimport'] = 'Carregar/Corrigir';
$string['rotate'] = 'Rodar';
$string['rotatingsheet'] = 'A folha foi rodada...';
$string['save'] = 'Guardar';
$string['saveandshow'] = 'Guardar e mostrar alterações ao aluno';
$string['savescannersettings'] = 'Guardar as configurações do scanner';
$string['scannedform'] = 'Formulário digitalizado';
$string['scannerformfortype'] = 'Formulário para o tipo {$a}';
$string['scanneroptions'] = 'Configurações do scanner';
$string['scannerpdfs'] = 'Formulários vazios';
$string['scannerpdfstext'] = 'Descarregue os formulários vazios se pretender usar o seu próprio software de scanner.';
$string['scanningoptionsheading'] = 'Opções da digitalização';
$string['score'] = 'Pontuação';
$string['search:activity'] = 'Teste Offline - informação da atividade';
$string['select'] = 'Selecionar';
$string['selectagroup'] = 'Selecione o grupo';
$string['selectall'] = 'Selecionar todos';
$string['selectcategory'] = 'Selecionar categoria';
$string['selectdifferentgroup'] = 'Por favor, selecione um grupo diferente!';
$string['selectedattempts'] = 'Tentativas selecionadas...';
$string['selectformat'] = 'Selecionar formato...';
$string['selectgroup'] = 'Selecione o grupo';
$string['selectlist'] = 'Selecione uma lista ou tente ajustar a folha:';
$string['selectmultipletoolbar'] = 'Selecionar múltiplas barras de ferramentas';
$string['selectnone'] = 'Desmarcar todos';
$string['selectpage'] = 'Selecione o número da página ou tente ajustar a folha:';
$string['selectquestiontype'] = '-- Selecionar tipo de pergunta --';
$string['showallparts'] = 'Mostrar todos os {$a} participantes';
$string['showcopyright'] = 'Mostrar declaração de direitos de autor';
$string['showcopyrightdesc'] = 'Se ativar esta opção, uma declaração de direitos de autor será mostrada na página de revisão dos resultados do aluno.';
$string['showgrades'] = 'Imprimir avaliação das perguntas';
$string['showgrades_help'] = 'Esta opção determina se as notas máximas das perguntas do Teste Offline devem, ou não, ser impressas nas folhas das perguntas.';
$string['showmissingattemptonly'] = 'Mostrar todos os participantes verificados ainda sem resultado';
$string['showmissingcheckonly'] = 'Mostrar todos os participantes não verificados já com resultado';
$string['shownumpartsperpage'] = 'Mostrar {$a} participantes por página';
$string['showquestioninfo'] = 'Imprimir informações acerca das perguntas';
$string['showquestioninfo_help'] = 'Com esta opção pode controlar as informações adicionais da pergunta que poderão ser impressas nas folhas das perguntas.
Pode escolher um destes:
<ul>
<li> Nada
<li> Tipo de pergunta - depende do tipo de pergunta: Escolha única, Escolha múltipla, Escolha múltipla de Tudo-ou-Nada
<li> Número de respostas corretas
</ul>';
$string['showstudentview'] = 'Mostrar Vista do aluno';
$string['showtutorial'] = 'Mostrar tutorial aos alunos';
$string['showtutorial_help'] = 'Esta opção determina se os alunos podem ver um tutorial sobre os conceitos básicos dos testes offline. O tutorial fornece informações sobre como lidar com os diferentes tipos de documentos dos testes offline. Numa parte interativa eles aprendem a marcar sua identificação de aluno corretamente. <br />
<b>Atenção:</b><br />
Se definir esta opção para "Sim", mas ocultar o teste offline, a hiperligação para o tutorial não será visível. Neste caso, pode adicionar um URL para o tutorial na página da disciplina.';
$string['showtutorialdescription'] = 'Pode adicionar uma hiperligação para o tutorial na página da disciplina usando o seguinte URL:';
$string['shuffleanswers'] = 'Baralhar respostas';
$string['shufflequestions'] = 'Baralhar as perguntas';
$string['shufflequestionsanswers'] = 'Baralhar perguntas e respostas';
$string['shufflequestionsselected'] = 'Foi definida a opção de baralhar as perguntas, por isso, algumas ações relativas às páginas não estão disponíveis. Para alterar, consulte {$a}.';
$string['shufflewithin'] = 'Baralhar dentro das perguntas';
$string['shufflewithin_help'] = 'Se ativar esta opção, as respostas de cada pergunta serão baralhadas aleatoriamente cada vez que pressionar o botão \'Baralhar perguntas e respostas / Recarregar a lista de perguntas\' na visualização do formulário.
Nota: Esta configuração só se aplica a perguntas que tenham a opção de baralhar ativa.';
$string['signature'] = 'Assinatura';
$string['singlechoice'] = 'Escolha única';
$string['standard'] = 'Padrão';
$string['starttutorial'] = 'Iniciar tutorial sobre o teste';
$string['statistics'] = 'Estatísticas';
$string['statisticsplural'] = 'Estatísticas';
$string['statsoverview'] = 'Visão global das Estatísticas';
$string['studycode'] = 'Código';
$string['temporaryfiledeletiontask'] = 'Apagar ficheiros temporários';
$string['theattempt'] = 'A tentativa';
$string['timesup'] = 'Terminou o tempo!';
$string['totalmarksx'] = 'Total de pontos: {$a}';
$string['totalpointsx'] = 'Total de pontos: {$a}';
$string['totalquestionsinrandomqcategory'] = 'Total de {$a} perguntas na categoria.';
$string['trigger'] = 'Limite inferior/superior';
$string['tutorial'] = 'Tutorial para Testes Offline';
$string['type'] = 'Tipo';
$string['uncheckparts'] = 'Assinalar participantes selecionados como ausente';
$string['updatedsumgrades'] = 'O somatório de todas as notas do grupo {$a->letter} foi recalculado para {$a->grade}.';
$string['upgradingfilenames'] = 'A atualizar nomes dos documentos: Teste Offline {$a->done}/{$a->outof} (ID do Teste Offline {$a->info})';
$string['upgradingilogs'] = 'A atualizar páginas digitalizadas: página digitalizada {$a->done}/{$a->outof} <br/>(ID do Teste Offline {$a->info})';
$string['upgradingofflinequizattempts'] = 'A atualizar tentativas do teste: Teste Offline {$a->done}/{$a->outof} (ID do Teste Offline {$a->info})';
$string['upload'] = 'Carregar/Corrigir';
$string['uploadpart'] = 'Carregar/Corrigir listas de participantes';
$string['uppertrigger'] = 'Segundo limite superior';
$string['uppertriggerzero'] = 'O segundo limite superior é zero';
$string['upperwarning'] = 'Primeiro limite superior';
$string['upperwarningzero'] = 'O primeiro limite superior é zero';
$string['useradded'] = 'O utilizador {$a} foi adicionado';
$string['userdoesnotexist'] = 'O utilizador {$a} não existe no sistema';
$string['useridentification'] = 'Identificação do utilizador';
$string['useridviolation'] = 'Encontrados vários utilizadores';
$string['userimported'] = 'O utilizador {$a} foi importado e avaliado';
$string['usernotincourse'] = 'O utilizador {$a} não pertence à disciplina.';
$string['usernotinlist'] = 'Utilizador não registado na lista!';
$string['usernotregistered'] = 'O utilizador {$a} não está inscrito na disciplina';
$string['userpageimported'] = 'Página única importada para o utilizador {$a}';
$string['valuezero'] = 'O valor não pode ser zero';
$string['viewresults'] = 'Ver resultados';
$string['white'] = 'Branco';
$string['withselected'] = 'Com a seleção...';
$string['zerogradewarning'] = 'Aviso: a nota deste TesteOffline é 0.0!';
$string['zipfile'] = 'Ficheiro ZIP';
$string['zipok'] = 'Ficheiro ZIP importado';
