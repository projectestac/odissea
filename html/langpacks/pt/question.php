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
 * Strings for component 'question', language 'pt', version '4.1'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Ação';
$string['addanotherhint'] = 'Adicionar outra ajuda';
$string['addcategory'] = 'Adicionar categoria';
$string['addmorechoiceblanks'] = 'Adicionar mais {no} opções de resposta';
$string['adminreport'] = 'Relatório de possíveis problemas na sua base de dados de perguntas.';
$string['advancedsearchoptions'] = 'Opções de pesquisa';
$string['alltries'] = 'Todas as tentativas';
$string['answer'] = 'Resposta';
$string['answers'] = 'Respostas';
$string['answersaved'] = 'Resposta guardada';
$string['answerx'] = 'Resposta {$a}';
$string['attemptfinished'] = 'Tentativa terminada';
$string['attemptfinishedsubmitting'] = 'A submeter a tentativa terminada: {$a}';
$string['attemptoptions'] = 'Opções das tentativas';
$string['availableq'] = 'Disponibilidade';
$string['badbase'] = 'Má base antes de  **: {$a}**';
$string['behaviour'] = 'Comportamento';
$string['behaviourbeingused'] = 'Comportamento em uso: {$a}';
$string['broken'] = 'É uma "hiperligação quebrada". Aponta para um ficheiro que não existe.';
$string['byandon'] = '<em>{$a->time}</em> por <em>{$a->user}</em>';
$string['cannotcopybackup'] = 'Não foi possível copiar o ficheiro da cópia de segurança';
$string['cannotcreate'] = 'Não foi possível criar uma nova entrada na tabela \'question_attempts\'';
$string['cannotcreatepath'] = 'Não é possível criar o caminho: {$a}';
$string['cannotdeletebehaviourinuse'] = 'Não pode apagar o comportamento \'{$a}\'. Está a ser usado em tentativas de realização de Testes.';
$string['cannotdeletecate'] = 'Não pode apagar a categoria porque encontra-se como predefinida para este contexto.';
$string['cannotdeleteneededbehaviour'] = 'Não pode apagar o comportamento da pergunta \'{$a}\'. Existem outros comportamentos instalados que dependem deste.';
$string['cannotdeleteqtypeinuse'] = 'Não pode apagar o tipo de pergunta \'{$a}\'. Existem perguntas deste tipo na base de dados de perguntas.';
$string['cannotdeleteqtypeneeded'] = 'Não pode apagar o tipo de pergunta \'{$a}\'. Existem outros tipos de perguntas que dependem deste.';
$string['cannotdeletetopcat'] = 'As categorias de topo não podem ser apagadas.';
$string['cannotedittopcat'] = 'As categorias de topo não podem ser editadas.';
$string['cannotenable'] = 'O tipo de pergunta \'{$a}\' não pode ser criada diretamente.';
$string['cannotenablebehaviour'] = 'O comportamento da pergunta \'{$a}\' não pode ser usado diretamente. É para uso interno apenas.';
$string['cannotfindcate'] = 'Não foi possível encontrar registo da categoria';
$string['cannotfindquestionfile'] = 'Não foi possível encontrar o ficheiro da pergunta no Zip';
$string['cannotgetdsfordependent'] = 'Não foi possível obter a série de dados para a questão! (question: {$a->id}, datasetitem: {$a->item})';
$string['cannotgetdsforquestion'] = 'Não foi possível obter a série de dados especificada para a questão calculada! (question: {$a})';
$string['cannothidequestion'] = 'Não é possível ocultar a pergunta';
$string['cannotimportformat'] = 'Este formato ainda não está implementado!';
$string['cannotinsertquestion'] = 'Não foi possível adicionar a nova pergunta!';
$string['cannotinsertquestioncatecontext'] = 'Não foi possível inserir a nova categoria {$a->cat} porque o ID do contexto é inválido {$a->ctx}';
$string['cannotloadquestion'] = 'Não foi possível carregar a pergunta';
$string['cannotmovequestion'] = 'Não pode usar este script para mover perguntas que possuem ficheiros associados a partir de outras áreas.';
$string['cannotopenforwriting'] = 'Não é possível abrir para editar: {$a}';
$string['cannotpreview'] = 'Não pode pré-visualizar estas perguntas!';
$string['cannotread'] = 'Não é possível ler o ficheiro importado (ou está vazio)';
$string['cannotregradedifferentqtype'] = 'Não é possível reavaliar com uma pergunta de um tipo diferente.';
$string['cannotretrieveqcat'] = 'Não foi possível recuperar a categoria da pergunta';
$string['cannotunhidequestion'] = 'Ocorreu um erro ao mostrar a pergunta';
$string['cannotunzip'] = 'Não foi possível compactar o ficheiro.';
$string['cannotwriteto'] = 'Não é possível editar perguntas exportadas para \'{$a}\'';
$string['categories'] = 'Categorias';
$string['category'] = 'Categoria';
$string['categorycurrent'] = 'Categoria atual';
$string['categorycurrentuse'] = 'Usar esta categoria';
$string['categorydoesnotexist'] = 'Esta categoria não existe';
$string['categoryinfo'] = 'Informação da categoria';
$string['categorymove'] = 'A categoria \'{$a->name}\' contém {$a->count} perguntas (algumas podem estar ocultas ou serem perguntas aleatórias ainda em uso em testes). Por favor, escolha outra categoria de destino.';
$string['categorymoveto'] = 'Guardar na categoria';
$string['categorynamecantbeblank'] = 'O nome da categoria não pode estar em branco.';
$string['categorynamewithcount'] = '{$a->name} ({$a->questioncount})';
$string['categorynamewithidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['categorynamewithidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->questioncount})';
$string['changeoptions'] = 'Alterar opções';
$string['changepublishstatuscat'] = '<a href="{$a->caturl}">A categoria "{$a->name}"</a> na disciplina "{$a->coursename}" mudará o seu estado de partilha de {$a->changefrom} para {$a->changeto}.';
$string['check'] = 'Submeter';
$string['chooseqtypetoadd'] = 'Escolha o tipo de pergunta para adicionar';
$string['clearwrongparts'] = 'Limpar respostas incorretas';
$string['clickflag'] = 'Marcar pergunta';
$string['clicktoflag'] = 'Marcar esta pergunta para referência futura';
$string['clicktounflag'] = 'Desmarcar esta pergunta';
$string['clickunflag'] = 'Remover marcação';
$string['closepreview'] = 'Fechar pré-visualização';
$string['combinedfeedback'] = 'Feedback combinado';
$string['comment'] = 'Comentário';
$string['commented'] = 'Comentado: {$a}';
$string['commentormark'] = 'Comentar e/ou alterar avaliação';
$string['comments'] = 'Comentários';
$string['commentx'] = 'Comentário: {$a}';
$string['complete'] = 'Respondida';
$string['contexterror'] = 'Não deveria ter chegado a este ponto se não está a mover a categoria para outro contexto.';
$string['copy'] = 'Copiar de {$a} e alterar hiperligações.';
$string['correct'] = 'Correta';
$string['correctfeedback'] = 'Para qualquer resposta correta';
$string['correctfeedbackdefault'] = 'A sua resposta está correta.';
$string['created'] = 'Criada';
$string['createdby'] = 'Criada por';
$string['createdmodifiedheader'] = 'Criada / Atualizada';
$string['createnewquestion'] = 'Criar uma nova pergunta';
$string['cwrqpfs'] = 'Perguntas aleatórias escolhidas a partir de subcategorias.';
$string['cwrqpfsinfo'] = '<p>Durante a atualização para o Moodle 1.9, vamos separar as categorias das perguntas em diferentes contextos. O estado de partilha de algumas categorias de perguntas e suas perguntas terá de ser alterado. Isso será necessário nos casos em que uma ou mais perguntas \'aleatórias\' num teste se encontrem em diferentes  categorias partilhadas e não partilhadas (que é o caso neste site). Isso acontece quando uma pergunta aleatória é configurada para selecionar perguntas de subcategorias e algumas dessas subcategorias têm uma configuração de partilha diferente da configuração da categoria ascendente onde a pergunta aleatória foi criada.</p>
<p>Durante a atualização para o Moodle 1.9, o estado de partilha das seguintes categorias de onde são selecionadas perguntas aleatórias de categorias ascendentes, será alterado para o mesmo estado da categoria em que se encontra a pergunta que seleciona perguntas aleatórias. As perguntas afetadas continuarão a funcionar em todos os testes existentes, enquanto não sejam apagadas.</p>';
$string['cwrqpfsnoprob'] = 'Nenhuma categoria de perguntas do seu site é afetada pelo problema das \'Perguntas aleatórias escolhidas a partir de subcategorias\'.';
$string['decimalplacesingrades'] = 'Casas decimais nas notas';
$string['defaultfor'] = 'Categoria predefinida de {$a}';
$string['defaultinfofor'] = 'Categoria predefinida para perguntas partilhadas no contexto \'{$a}\'';
$string['defaultmark'] = 'Nota predefinida';
$string['defaultmarkmustbepositive'] = 'A nota predefinida tem de ser positiva.';
$string['deletecoursecategorywithquestions'] = 'Existem perguntas na base de dados de perguntas associadas a esta categoria da disciplina. Se continuar, elas serão apagadas. Poderá primeiro movê-las para outras categorias usando a base de dados de perguntas.';
$string['deletequestioncheck'] = 'Irá apagar a seguinte pergunta e todas as suas versões:<br /><br />{$a}';
$string['deletequestionscheck'] = 'Irá apagar as seguintes perguntas e todas as respetivas versões:<br /><br />{$a}';
$string['deletequestiontitle'] = 'Apagar pergunta?';
$string['deletequestiontitle_plural'] = 'Apagar perguntas?';
$string['deleteselectedquestioncheck'] = 'Irá apagar as versões selecionadas da seguinte pergunta:<br /><br />{$a}';
$string['deleteversiontitle'] = 'Apagar versão selecionada?';
$string['deleteversiontitle_plural'] = 'Apagar versões selecionadas?';
$string['deletingbehaviour'] = 'A apagar o comportamento das perguntas \'{$a}\'';
$string['deletingqtype'] = 'A apagar o tipo de pergunta \'{$a}\'';
$string['didnotmatchanyanswer'] = '[Não corresponde nenhuma resposta]';
$string['disabled'] = 'Desativado';
$string['displayoptions'] = 'Opções de visualização';
$string['disterror'] = 'Esta distribuição {$a} causou problemas';
$string['donothing'] = 'Não copiar nem mover ficheiros, nem alterar hiperligações.';
$string['editcategories'] = 'Editar categorias';
$string['editcategories_help'] = 'Ao invés de serem apresentadas numa enorme lista, as perguntas podem ser agrupadas em categorias e subcategorias.

Cada categoria tem um contexto que determina onde as perguntas podem ser usadas:

* Contexto da atividade - As perguntas apenas estão disponíveis numa determinada atividade
* Contexto da disciplina - As perguntas estão disponíveis em todas as atividades da disciplina
* Contexto da categoria da disciplina -  As perguntas estão disponíveis em todas as atividades da disciplina e nas restantes disciplinas da mesma categoria
* Contexto do sistema - As perguntas estão disponíveis em todas as disciplinas e atividades do site

As categorias são também usadas para a criação de perguntas aleatórias selecionadas a partir de uma determinada categoria.';
$string['editcategories_link'] = 'pergunta/categoria';
$string['editcategory'] = 'Editar categoria';
$string['editingcategory'] = 'A editar uma categoria';
$string['editingquestion'] = 'A editar pergunta';
$string['editquestion'] = 'Editar pergunta';
$string['editquestions'] = 'Editar perguntas';
$string['editthiscategory'] = 'Editar esta categoria';
$string['emptyxml'] = 'Erro desconhecido - imsmanifest.xml vazio';
$string['enabled'] = 'Ativado';
$string['erroraccessingcontext'] = 'Não é possível aceder ao contexto';
$string['errordeletingquestionsfromcategory'] = 'Erro ao apagar perguntas da categoria \'{$a}\'.';
$string['errorduringpost'] = 'Ocorreu um erro durante o pós-processamento!';
$string['errorduringpre'] = 'Ocorreu um erro durante o pré-processamento!';
$string['errorduringproc'] = 'Ocorreu um erro durante o processamento!';
$string['errorduringregrade'] = 'Não foi possível reavaliar a pergunta {$a->qid}, levando ao estado {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'Erro: não é possível copiar o ficheiro {$a}.';
$string['errorfilecannotbemoved'] = 'Erro: não é possível mover o ficheiro {$a}.';
$string['errorfileschanged'] = 'Erro: os ficheiros com hiperligações às perguntas de origem mudaram desde a exibição do formulário.';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'A pergunta ({$a}) aparece mais do que uma vez com pesos diferentes em diferentes posições do teste. Isto não é suportado pelo relatório de estatísticas e poderá comprometer a fiabilidade das estatísticas para esta pergunta.';
$string['errormanualgradeoutofrange'] = 'A nota {$a->grade} para a pergunta {$a->name} não se encontra entre 0 e {$a->maxgrade}. A avaliação e o feedback não foram guardados.';
$string['errormovingquestions'] = 'Erro ao mover perguntas com os ID\'s {$a}.';
$string['errorpostprocess'] = 'Ocorreu um erro durante o pós-processamento!';
$string['errorpreprocess'] = 'Ocorreu um erro durante o pré-processamento!';
$string['errorprocess'] = 'Ocorreu um erro durante o processamento!';
$string['errorprocessingresponses'] = 'Ocorreu um erro enquanto processava as suas respostas ({$a}). Clique em \'Continuar\' para voltar à página em que estava e tente novamente.';
$string['errorsavingcomment'] = 'Ocorreu um erro ao guardar na base de dados o comentário da pergunta {$a->name}.';
$string['errorsavingflags'] = 'Ocorreu um erro ao guardar a marcação.';
$string['errorupdatingattempt'] = 'Ocorreu um erro ao atualizar na base de dados a tentativa {$a->id}.';
$string['eventquestioncategorycreated'] = 'Criada categoria de pergunta';
$string['eventquestioncategorydeleted'] = 'Apagada categoria de perguntas';
$string['eventquestioncategorymoved'] = 'Movida categoria de perguntas';
$string['eventquestioncategoryupdated'] = 'Categoria de perguntas atualizada';
$string['eventquestioncategoryviewed'] = 'Categoria de perguntas visualizada';
$string['eventquestioncreated'] = 'Pergunta criada';
$string['eventquestiondeleted'] = 'Pergunta apagada';
$string['eventquestionmoved'] = 'Pergunta movida';
$string['eventquestionsexported'] = 'Perguntas exportadas';
$string['eventquestionsimported'] = 'Perguntas importadas';
$string['eventquestionupdated'] = 'Pergunta atualizada';
$string['eventquestionviewed'] = 'Pergunta visualizada';
$string['export'] = 'Exportar';
$string['exportasxml'] = 'Exportar como Moodle XML';
$string['exportcategory'] = 'Exportar a categoria';
$string['exportcategory_help'] = 'Esta configuração determina a categoria a partir da qual as perguntas serão exportadas.

Alguns formatos de importação, como o GIFT e Moodle XML, permitem guardar a categoria e o seu contexto sendo mais tarde possível recuperá-los no processo de importação (opcional). Se necessário, deverá escolher as opções necessárias.';
$string['exporterror'] = 'Ocorreram erros durante a exportação!';
$string['exportfilename'] = 'perguntas';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportonequestion'] = 'Descarregar esta pergunta no formato XML Moodle';
$string['exportquestions'] = 'Exportar perguntas para ficheiro';
$string['exportquestions_help'] = 'Esta função permite a exportação total de uma categoria de perguntas (e todas as subcategorias). Tenha em atenção que, dependendo do formato de ficheiro selecionado, alguns dados e certos tipos de perguntas podem não ser exportados.';
$string['exportquestions_link'] = 'pergunta/exportar';
$string['feedback'] = 'Feedback';
$string['fieldinquestion'] = '{$a->fieldname} {$a->questionindentifier}';
$string['fieldinquestionpre'] = '{$a->questionindentifier} {$a->fieldname}';
$string['filecantmovefrom'] = 'Os ficheiros das perguntas não podem ser movidos porque não tem permissão para apagar ficheiros do local de onde pretende mover as perguntas.';
$string['filecantmoveto'] = 'Os ficheiros das perguntas não podem ser movidos porque não tem permissão para adicionar ficheiros no local para onde pretende mover as perguntas.';
$string['fileformat'] = 'Formato do ficheiro';
$string['filesareacourse'] = 'área de ficheiros da disciplina';
$string['filesareasite'] = 'área de ficheiros do site';
$string['filestomove'] = 'Mover/copiar ficheiros para {$a}?';
$string['fillincorrect'] = 'Preencher as respostas corretas';
$string['filterbytags'] = 'Filtrar por palavra-chave...';
$string['firsttry'] = 'Primeira tentativa';
$string['flagged'] = 'Marcada';
$string['flagthisquestion'] = 'Marcar esta pergunta';
$string['formquestionnotinids'] = 'O formulário continha uma pergunta que não está nos IDs das perguntas';
$string['fractionsnomax'] = 'Uma das respostas deve ter a nota de 100% para que seja possível obter a pontuação máxima nesta pergunta.';
$string['generalfeedback'] = 'Feedback geral';
$string['generalfeedback_help'] = 'O feedback geral é exibido ao aluno depois de ter concluído a pergunta. Ao contrário do feedback específico, que depende do tipo de pergunta e da resposta dada pelo aluno, o feedback geral é igual para todos os alunos.

Pode usar o feedback geral para dar ao aluno uma explicação detalhada da resposta e hiperligações para informação relevante para a sua compreensão.';
$string['getcategoryfromfile'] = 'Obter categoria a partir de ficheiro&nbsp;';
$string['getcontextfromfile'] = 'Obter contexto a partir de ficheiro';
$string['hintn'] = 'Ajuda {no}';
$string['hintnoptions'] = 'Opções da ajuda {no}';
$string['hinttext'] = 'Texto de ajuda';
$string['howquestionsbehave'] = 'Modo de comportamento das perguntas';
$string['howquestionsbehave_help'] = 'Os alunos podem interagir com as perguntas do teste de diferentes formas. Por exemplo, pode configurar o teste de forma a que os alunos insiram uma resposta em cada pergunta e só após submeterem todo o teste obterão a sua nota e/ou feedback (modo feedback diferido).

Em alternativa, pode configurar de modo a que os alunos obtenham feedback imediato à medida que vão submetendo as respostas a cada pergunta, e se não acertarem, possam responder de novo (modo interativo com múltiplas tentativas).

Estes são provavelmente os dois modos de comportamento mais usados.';
$string['howquestionsbehave_link'] = 'question/behaviour';
$string['idnumber'] = 'Número de identificação (ID)';
$string['idnumber_help'] = 'Se usado, o número de identificação (ID) tem de ser único dentro de cada categoria de perguntas. É outro modo de identificar uma pergunta, que às vezes é útil, mas geralmente pode ficar em branco.';
$string['ignorebroken'] = 'Ignorar ligações quebradas';
$string['import'] = 'Importar';
$string['importcategory'] = 'Importar para a categoria';
$string['importcategory_help'] = 'Esta configuração determina a categoria para a qual as perguntas serão importadas.

Alguns formatos de importação, tal como o GIFT e Moodle XML, permitem guardar as perguntas, assim como as suas categorias e contextos. Para usar esta opção, certifique-se que assinala as opções necessárias. Se ainda não existirem as categorias especificadas no ficheiros, elas serão criadas durante a importação.';
$string['importerror'] = 'Ocorreu um erro durante o processo de importação';
$string['importerrorquestion'] = 'Erro ao importar pergunta.';
$string['importfromcoursefiles'] = '… ou escolha um ficheiro da disciplina para importar.';
$string['importfromupload'] = 'Selecione um ficheiro…';
$string['importingquestions'] = 'A importar {$a} perguntas do ficheiro';
$string['importparseerror'] = 'Foram encontrados erros ao analisar o ficheiro de importação, não sendo possível importar qualquer pergunta. Para importar perguntas sem erros, altere a configuração \'Parar em caso de erro\' para Não e tente novamente';
$string['importquestions'] = 'Importar perguntas a partir de ficheiro';
$string['importquestions_help'] = 'Esta função permite importar, via ficheiro de texto, uma variedade de formatos de perguntas. Tenha em atenção que o ficheiro deverá usar a codificação UTF-8.';
$string['importquestions_link'] = 'pergunta/importar';
$string['importwrongfileencoding'] = 'O ficheiro selecionado não usa a codificação de caracteres UFT-8. Os ficheiros \'{$a}\' têm de usar UTF-8.';
$string['importwrongfiletype'] = 'O tipo de ficheiro que selecionou ({$a->actualtype}) não corresponde ao tipo esperado neste formato de importação ({$a->expectedtype}).';
$string['impossiblechar'] = 'Foi detetado, como caráter parênteses, um caráter não compatível \'{$a}\'';
$string['includesubcategories'] = 'Mostrar perguntas das subcategorias';
$string['incorrect'] = 'Incorreta';
$string['incorrectfeedback'] = 'Para qualquer resposta incorreta';
$string['incorrectfeedbackdefault'] = 'A sua resposta está incorreta.';
$string['information'] = 'Informação';
$string['invalidanswer'] = 'Resposta incompleta';
$string['invalidarg'] = 'Sem argumentos válidos fornecidos ou configuração do servidor incorreta';
$string['invalidcategoryidforparent'] = 'ID da categoria ascendente inválido!';
$string['invalidcategoryidtomove'] = 'ID da categoria inválido para mover!';
$string['invalidconfirm'] = 'Confirmação incorreta';
$string['invalidcontextinhasanyquestions'] = 'Um contexto inválido foi passado a question_context_has_any_questions.';
$string['invalidgrade'] = 'As notas ({$a}) não correspondem às opções definidas - a pergunta foi ignorada';
$string['invalidpenalty'] = 'Penalização inválida';
$string['invalidwizardpage'] = 'Incorreto ou nenhuma página do assistente foi especificada';
$string['lastmodifiedby'] = 'Última modificação por';
$string['lasttry'] = 'Última tentativa';
$string['linkedfiledoesntexist'] = 'O ficheiro, convertido em hiperligação {$a}, não existe.';
$string['makechildof'] = 'Tornar subcategoria de \'{$a}\'';
$string['makecopy'] = 'Guardar como nova pergunta';
$string['maketoplevelitem'] = 'Tornar categoria de topo';
$string['manualgradeinvalidformat'] = 'Esse número não é válido.';
$string['manualgradeoutofrange'] = 'Esta nota está fora do intervalo válido.';
$string['manuallygraded'] = 'Avaliada manualmente com \'{$a->mark}\' com o comentário: {$a->comment}';
$string['mark'] = 'Nota';
$string['markedoutof'] = 'Nota';
$string['markedoutofmax'] = 'Nota: {$a}';
$string['markoutofmax'] = 'Nota: {$a->mark} em {$a->max}';
$string['marks'] = 'Nota';
$string['matchgrades'] = 'Corresponder notas';
$string['matchgrades_help'] = 'As notas importadas devem corresponder a um dos valores válidos - 100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5, 0 (incluindo valores negativos). Caso contrário, existem duas opções:

* Erro, caso a nota não esteja listada - Se a pergunta contiver alguma nota não listada será exibida uma mensagem de erro e a pergunta não será importada;

* Nota mais próxima, caso não esteja listada - Se a nota não corresponder a nenhum valor da lista será alterada para o valor mais próximo da lista.';
$string['matchgradeserror'] = 'Mostrar erro se a nota não estiver na lista';
$string['matchgradesnearest'] = 'Nota mais próxima se não estiver na lista';
$string['missingcourseorcmid'] = 'É necessário inserir o ID da disciplina ou cmid para print_question.';
$string['missingcourseorcmidtolink'] = 'É necessário inserir o ID da disciplina ou cmid para get_question_edit_link.';
$string['missingimportantcode'] = 'Falta código importante no tipo de pergunta: {$a}';
$string['missingoption'] = 'Faltam as opções da pergunta de respostas incorporadas {$a}';
$string['modified'] = 'Última atualização';
$string['move'] = 'Mover de {$a} e alterar hiperligações.';
$string['movecategory'] = 'Mover categoria';
$string['movedquestionsandcategories'] = 'As perguntas e categorias foram movidas de {$a->oldplace} para {$a->newplace}.';
$string['movelinksonly'] = 'Alterar apenas o destino das hiperligações. Não mover nem copiar os ficheiros.';
$string['moveq'] = 'Mover pergunta(s)';
$string['moveqtoanothercontext'] = 'Mover pergunta para outro contexto.';
$string['moveto'] = 'Mover para';
$string['movingcategory'] = 'A mover categoria';
$string['movingcategoryandfiles'] = 'Tem a certeza de que pretende mover a categoria {$a->name} e todas as categorias filhas para o contexto "{$a->contextto}"?<br /> Foram encontrados {$a->urlcount} ficheiros ligados a perguntas em {$a->fromareaname}. Pretende copiar ou mover estes ficheiros para {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Tem a certeza de que pretende mover a categoria "{$a->name}" e todas as  categorias filhas para o contexto de "{$a->contextto}"?';
$string['movingquestions'] = 'A mover perguntas e ficheiros';
$string['movingquestionsandfiles'] = 'Tem a certeza de que pretende mover a(s) pergunta(s) {$a->questions}} para o contexto de <strong>"{$a->tocontext}"</strong>?<br /> Foram encontrados {$a->urlcount} ficheiros ligados às perguntas em {$a->fromareaname}. Pretende copiar ou mover esses ficheiros para {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Tem a certeza de que pretende mover a(s) pergunta(s) {$a->questions}} para o contexto de <strong>"{$a->tocontext}"</strong>?<br />
<strong>Não existem</strong> ficheiros ligados a essa(s) pergunta(s) em {$a->fromareaname}.';
$string['needtochoosecat'] = 'Tem de escolher uma categoria para onde pretende mover esta pergunta ou clique em \'Cancelar\'.';
$string['nocate'] = 'Não existe a categoria \'{$a}\'!';
$string['nopermissionadd'] = 'Não tem permissão para adicionar perguntas aqui.';
$string['nopermissionedit'] = 'Não tem permissão para editar perguntas a partir daqui.';
$string['nopermissionmove'] = 'Não tem permissão para mover perguntas a partir desta categoria. Tem de guardar a pergunta nesta categoria ou como uma nova pergunta.';
$string['noprobs'] = 'Não foram encontrados problemas na base de dados das perguntas.';
$string['noquestionbanks'] = 'Nenhum módulo da base de dados de perguntas encontrado.';
$string['noquestions'] = 'Não foram encontradas perguntas para exportação. Certifique-se que selecionou uma categoria com perguntas.';
$string['noquestionsinfile'] = 'Não existem perguntas no ficheiro de importação';
$string['noresponse'] = 'Sem resposta';
$string['notagfiltersapplied'] = 'Nenhum filtro aplicado';
$string['notanswered'] = 'Não respondida';
$string['notchanged'] = 'Não modificada desde a última tentativa';
$string['notenoughanswers'] = 'Esse tipo de pergunta exige pelo menos {$a} respostas';
$string['notenoughdatatoeditaquestion'] = 'Não foi especificado o tipo de pergunta, seu código e o da categoria.';
$string['notenoughdatatomovequestions'] = 'Tem de indicar os ID das perguntas que pretende mover.';
$string['notflagged'] = 'Sem marcação';
$string['notgraded'] = 'Sem avaliação';
$string['notshown'] = 'Não mostrar';
$string['notyetanswered'] = 'Por responder';
$string['notyourpreview'] = 'Esta pré-visualização não lhe pertence';
$string['novirtualquestiontype'] = 'Não foi encontrada nenhuma pergunta virtual para o tipo de pergunta {$a}';
$string['numqas'] = 'N.º tentativas';
$string['numquestions'] = 'N.º de perguntas';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} ocultas, +{$a->numdraft} rascunhos)';
$string['options'] = 'Opções';
$string['page-question-category'] = 'Página da categoria de perguntas';
$string['page-question-edit'] = 'Página de edição de perguntas';
$string['page-question-export'] = 'Página de exportação de perguntas';
$string['page-question-import'] = 'Página de importação de perguntas';
$string['page-question-x'] = 'Qualquer página de perguntas';
$string['parent'] = 'Ascendente';
$string['parentcategory'] = 'Categoria ascendente';
$string['parentcategory_help'] = 'A categoria ascendente é aquela em que a nova categoria será incluída como subcategoria. "Topo" significa que esta categoria não será subcategoria de nenhuma outra. Os contextos da categoria são mostrados a negrito. Deverá existir pelo menos uma categoria em cada contexto.';
$string['parentcategory_link'] = 'pergunta/categoria';
$string['parenthesisinproperclose'] = 'Os parêntesis antes de **não estão devidamente fechados em {$a}**';
$string['parenthesisinproperstart'] = 'Os parêntesis antes de **não estão devidamente abertos em {$a}**';
$string['parsingquestions'] = 'A ler perguntas do ficheiro importado.';
$string['partiallycorrect'] = 'Parcialmente correta';
$string['partiallycorrectfeedback'] = 'Para qualquer resposta parcialmente correta';
$string['partiallycorrectfeedbackdefault'] = 'A sua resposta está parcialmente correta.';
$string['penaltyfactor'] = 'Fator de penalização';
$string['penaltyfactor_help'] = 'Este campo determina a fração da nota obtida que será subtraída por cada resposta errada. Aplica-se unicamente aos testes que usem o \'Modo adaptável\'.

O fator de penalização poderá ser um número entre 0 e 1. Um fator de penalização de 1 significa que o aluno deverá responder corretamente na primeira tentativa para obter qualquer cotação. Um fator de penalização de 0 implica que o aluno pode tentar quantas vezes quiser de modo a obter a cotação máxima.';
$string['penaltyforeachincorrecttry'] = 'Fator de penalização';
$string['penaltyforeachincorrecttry_help'] = 'Esta opção configura qual a penalização por cada resposta errada quando o teste está definido no modo \'Interativo com múltiplas tentativas\' ou \'Modo adaptável\' e o aluno pode responder várias vezes até obter a resposta correta à pergunta.

A penalização é uma proporção da nota da pergunta, por isso, se a pergunta vale 3 pontos, e o fator de penalização é de 0.3333333, então o aluno tem a nota 3 se acertar à primeira, 2 se acertar à segunda e 1 se apenas acertar à terceira.

Para algumas perguntas com várias partes, este modo de pontuação é aplicado separadamente a cada parte da pergunta. Os detalhes dependem do tipo de pergunta e podem ser complicados, mas o princípio é dar aos alunos, da forma mais justa possível, o crédito pelo conhecimento que demonstraram.';
$string['permissionedit'] = 'Editar esta pergunta';
$string['permissionmove'] = 'Mover esta pergunta';
$string['permissionsaveasnew'] = 'Guardar como nova pergunta';
$string['permissionto'] = 'Tem permissão para:';
$string['previewquestion'] = 'Pré-visualizar a pergunta: {$a}';
$string['privacy:metadata:database:question'] = 'Detalhes de uma pergunta específica.';
$string['privacy:metadata:database:question:createdby'] = 'A pessoa que criou a pergunta.';
$string['privacy:metadata:database:question:generalfeedback'] = 'O feedback geral para esta pergunta.';
$string['privacy:metadata:database:question:modifiedby'] = 'A pessoa que atualizou a pergunta pela última vez.';
$string['privacy:metadata:database:question:name'] = 'O nome da pergunta';
$string['privacy:metadata:database:question:questiontext'] = 'O texto da pergunta';
$string['privacy:metadata:database:question:timecreated'] = 'Data e hora a que esta pergunta foi criada';
$string['privacy:metadata:database:question:timemodified'] = 'A data e hora a que este teste foi atualizado.';
$string['privacy:metadata:database:question_attempt_step_data'] = 'As etapas da tentativa podem ter informação adicional sobre aquela etapa específica. Os dados são armazenados na tabela step_data.';
$string['privacy:metadata:database:question_attempt_step_data:name'] = 'O nome dos dados do item.';
$string['privacy:metadata:database:question_attempt_step_data:value'] = 'O valor dos dados do item.';
$string['privacy:metadata:database:question_attempt_steps'] = 'Cada tentativa tem um número de etapas a indicar diferentes fases, desde o início até estar concluído. Esta tabela armazena a informação sobre cada uma destas etapas.';
$string['privacy:metadata:database:question_attempt_steps:fraction'] = 'A avaliação atribuída a esta tentativa configurado para um valor fora de 1.';
$string['privacy:metadata:database:question_attempt_steps:state'] = 'O estado da tentativa no final da transição.';
$string['privacy:metadata:database:question_attempt_steps:timecreated'] = 'Data e hora em que a transição começou';
$string['privacy:metadata:database:question_attempt_steps:userid'] = 'O utilizador que realizou a transição.';
$string['privacy:metadata:database:question_attempts'] = 'Informação sobre uma tentativas de resposta a uma pergunta específica.';
$string['privacy:metadata:database:question_attempts:flagged'] = 'Uma indicação de que o utilizador marcou esta questão durante uma tentativa.';
$string['privacy:metadata:database:question_attempts:responsesummary'] = 'Resumo da resposta à pergunta.';
$string['privacy:metadata:database:question_attempts:timemodified'] = 'A hora em que a tentativa foi atualizada.';
$string['privacy:metadata:database:question_bank_entries'] = 'Os detalhes sobre uma entrada específica da base de dados de perguntas.';
$string['privacy:metadata:database:question_bank_entries:ownerid'] = 'A pessoa a quem pertence a entrada da base de dados de perguntas.';
$string['privacy:metadata:link:qbehaviour'] = 'O subsistema Pergunta utiliza o módulo Comportamento das perguntas.';
$string['privacy:metadata:link:qformat'] = 'O subsistema Pergunta utiliza o módulo Formato de pergunta com a finalidade de importar e exportar perguntas em diferentes formatos.';
$string['privacy:metadata:link:qtype'] = 'O subsistema Pergunta interage com o módulo Tipo de pergunta que contém os diferentes tipos de pergunta.';
$string['published'] = 'partilhada';
$string['qbanknotfound'] = 'O módulo da base de dados de perguntas \'{$a}\' não existe ou não é reconhecido.';
$string['qtypeveryshort'] = 'T';
$string['question_version'] = 'Versão da pergunta';
$string['questionaffected'] = 'A <a href="{$a->qurl}">pergunta "{$a->name}" ({$a->qtype})</a> está nesta categoria mas também está a ser usada no <a href="{$a->qurl}">teste "{$a->quizname}"</a> da disciplina "{$a->coursename}".';
$string['questionbank'] = 'Base de dados de perguntas';
$string['questionbanknavigation'] = 'Navegação terciária da base de dados de perguntas';
$string['questionbehaviouradminsetting'] = 'Configurações do comportamento das perguntas';
$string['questionbehavioursdisabled'] = 'Comportamentos das perguntas a desativar';
$string['questionbehavioursdisabledexplained'] = 'Insira os comportamentos, separados por vírgulas, que pretende que não apareçam na lista pendente';
$string['questionbehavioursorder'] = 'Ordem dos comportamentos das perguntas';
$string['questionbehavioursorderexplained'] = 'Insira uma lista de comportamentos, separados por vírgulas, pela ordem que pretende que apareçam na lista pendente';
$string['questioncategories'] = 'Categorias de perguntas';
$string['questioncategory'] = 'Categoria de perguntas';
$string['questioncatsfor'] = 'Categorias de perguntas de \'{$a}\'';
$string['questiondoesnotexist'] = 'Esta pergunta não existe';
$string['questionformtagheader'] = '{$a} palavras-chave';
$string['questionidmismatch'] = 'Incoerência nos ID\'s da Pergunta';
$string['questionloaderror'] = 'Não foi possível carregar as opções da pergunta.';
$string['questionname'] = 'Nome da pergunta';
$string['questionnameandquestionversion'] = '{$a->name} v{$a->version}';
$string['questionnamecopy'] = '{$a} (cópia)';
$string['questionno'] = 'Pergunta {$a}';
$string['questionpreviewdefaults'] = 'Predefinições da pré-visualização da pergunta';
$string['questionpreviewdefaults_desc'] = 'Estas configurações predefinidas são usadas quando o utilizador pré-visualiza pela primeira vez uma pergunta na base de dados de perguntas. Depois de pré-visualizar a pergunta, as suas preferências pessoais serão guardadas como preferências do utilizador.';
$string['questions'] = 'Perguntas';
$string['questionsaveerror'] = 'Ocorreram erros ao guardar a pergunta - ({$a})';
$string['questionsinuse'] = '(*) Assinala perguntas que não podem ser apagadas porque estão a ser usadas. Em vez disso, elas ficarão ocultas na base de dados de perguntas, a menos que selecione \'Mostrar perguntas antigas\'.';
$string['questionsmovedto'] = 'As perguntas que ainda se encontram em uso foram movidas para "{$a}" na categoria ascendente da disciplina.';
$string['questionsrescuedfrom'] = 'Perguntas guardadas do contexto \'{$a}\'.';
$string['questionsrescuedfrominfo'] = 'Estas perguntas (algumas das quais podem estar ocultas) foram guardadas quando o contexto \'{$a}\' foi apagado, uma vez que ainda se encontravam em uso em alguns Testes ou outras atividades.';
$string['questiontags'] = 'Palavras-chave das perguntas';
$string['questiontext'] = 'Texto da pergunta';
$string['questiontype'] = 'Tipo de pergunta';
$string['questionuse'] = 'Usar pergunta nesta atividade';
$string['questionvariant'] = 'Variante da pergunta';
$string['questionx'] = 'Pergunta {$a}';
$string['requiresgrading'] = 'Requer avaliação';
$string['responsehistory'] = 'Histórico da resposta';
$string['restart'] = 'Recomeçar';
$string['restartwiththeseoptions'] = 'Recomeçar com estas opções';
$string['restoremultipletopcats'] = 'O ficheiro da cópia de segurança contém mais do que uma categoria de perguntas de nível de topo para o contexto \'{$a}\'.';
$string['reviewresponse'] = 'Rever resposta';
$string['rightanswer'] = 'Resposta correta';
$string['rightanswer_help'] = 'O resumo da resposta correta gerado automaticamente pelo Moodle. A informação gerada pode ser insuficiente, por isso, é de considerar a hipótese de incluir a explicação da resposta correta da pergunta no feedback geral e desativar esta opção.';
$string['save'] = 'Guardar';
$string['savechangesandcontinueediting'] = 'Guardar alterações e continuar a editar';
$string['saved'] = 'Guardado: {$a}';
$string['saveflags'] = 'Guardar o estado das marcações';
$string['selectacategory'] = 'Selecione uma categoria:';
$string['selectaqtypefordescription'] = 'Selecione um tipo de pergunta para ver a sua descrição';
$string['selectcategoryabove'] = 'Selecione a categoria acima';
$string['selectquestionsforbulk'] = 'Selecione as perguntas para ações em massa';
$string['settingsformultipletries'] = 'Múltiplas tentativas';
$string['shareincontext'] = 'Partilhar no contexto \'{$a}\'';
$string['showhidden'] = 'Mostrar perguntas antigas';
$string['showmarkandmax'] = 'Mostrar a nota e a nota máxima';
$string['showmaxmarkonly'] = 'Mostrar apenas a nota máxima';
$string['shown'] = 'Mostrar';
$string['shownumpartscorrect'] = 'Mostrar o número de respostas corretas';
$string['shownumpartscorrectwhenfinished'] = 'Mostrar o número de respostas corretas após a pergunta estar concluída';
$string['showquestiontext'] = 'Mostrar texto da pergunta na lista de perguntas?';
$string['showquestiontext_full'] = 'Sim, com imagens, multimédia';
$string['showquestiontext_off'] = 'Não';
$string['showquestiontext_plain'] = 'Sim, apenas texto';
$string['specificfeedback'] = 'Feedback específico';
$string['specificfeedback_help'] = 'Feedback correspondente à resposta que o aluno selecionou ou inseriu.';
$string['started'] = 'Iniciada';
$string['state'] = 'Estado';
$string['step'] = 'Passo';
$string['steps'] = 'Passos';
$string['stoponerror'] = 'Parar se ocorrer um erro';
$string['stoponerror_help'] = 'Esta configuração determina se o processo de importação é interrompido quando um erro é detetado parando assim a importação, ou se as perguntas com erros são ignoradas sendo apenas importadas as válidas.';
$string['submissionoutofsequence'] = 'Acesso fora da sequência. Por favor, não clique no botão \'Retroceder\' enquanto trabalha nas perguntas do teste.';
$string['submissionoutofsequencefriendlymessage'] = 'Inseriu dados fora da sequência. Este erro pode ocorrer se usar os botões de Avançar e Retroceder do seu navegador. Por favor, não os utilize durante o teste. Também pode suceder se clicar em algo enquanto uma página está a carregar. Clique no botão \'Continuar\' para prosseguir.';
$string['submit'] = 'Submeter';
$string['submitandfinish'] = 'Submeter e finalizar';
$string['submitted'] = 'Submetido: {$a}';
$string['tagarea_question'] = 'Perguntas';
$string['technicalinfo'] = 'Informação técnica';
$string['technicalinfo_help'] = 'A informação técnica é provavelmente apenas necessária para os programadores que trabalham em novos tipos de pergunta. Pode ser útil para detetar problemas com as perguntas.';
$string['technicalinfomaxfraction'] = 'Fração máxima: {$a}';
$string['technicalinfominfraction'] = 'Fração mínima: {$a}';
$string['technicalinfoquestionsummary'] = 'Resumo da pergunta: {$a}';
$string['technicalinforesponsesummary'] = 'Resumo da resposta: {$a}';
$string['technicalinforightsummary'] = 'Resumo da resposta correta: {$a}';
$string['technicalinfostate'] = 'Estado da pergunta: {$a}';
$string['technicalinfovariant'] = 'Variante da pergunta: {$a}';
$string['tofilecategory'] = 'Guardar categoria em ficheiro';
$string['tofilecontext'] = 'Guardar contexto em ficheiro';
$string['topfor'] = 'Nível de topo de {$a}';
$string['uninstallbehaviour'] = 'Desinstalar este comportamento das perguntas.';
$string['uninstallqtype'] = 'Desinstalar este tipo de pergunta.';
$string['unknown'] = 'Desconhecido(a)';
$string['unknownbehaviour'] = 'Comportamento desconhecido: {$a}.';
$string['unknownorunhandledtype'] = 'Tipo de questão não prevista ou desconhecida: {$a}';
$string['unknownquestion'] = 'Pergunta desconhecida: {$a}.';
$string['unknownquestioncatregory'] = 'Categoria desconhecida: {$a}.';
$string['unknownquestiontype'] = 'Tipo de pergunta desconhecida: {$a}.';
$string['unknowntolerance'] = 'Tipo de tolerância desconhecida: {$a}.';
$string['unpublished'] = 'não-partilhada';
$string['unusedcategorydeleted'] = 'Esta categoria foi apagada pois após apagar a disciplina. As perguntas deixaram de ser utilizadas.';
$string['updatedisplayoptions'] = 'Atualizar opções de visualização';
$string['upgradeproblemcategoryloop'] = 'Foram detetados problemas na atualização das categorias. Existe um erro na árvore de categorias. Os IDs das categorias afetados são {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Não foi possível atualizar a categoria de perguntas {$a->name} ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'Foram detetados problemas na atualização das categorias. A categoria {$a->id} tem como categoria ascendente {$a->parent}, que não existe. A categoria ascendente foi alterada para resolver o problema.';
$string['version_selection'] = 'Versão {$a->version}';
$string['whethercorrect'] = 'Correta/incorreta';
$string['whethercorrect_help'] = 'A avaliação na forma de texto \'Correta\', \'Parcialmente correta\' ou \'Incorreta\', ou a cor de realce que expressa essa mesma informação.';
$string['whichtries'] = 'Que tentativas';
$string['withselected'] = 'Com as selecionadas';
$string['wrongprefix'] = 'nameprefix {$a} formatado incorretamente';
$string['xoutofmax'] = '{$a->mark} em {$a->max}';
$string['yougotnright'] = 'Selecionou {$a->num} respostas corretas.';
$string['youmustselectaqtype'] = 'Tem de selecionar um tipo de pergunta.';
$string['yourfileshoulddownload'] = 'A exportação do seu ficheiro deve iniciar dentro de instantes. Se não acontecer nos próximos segundos, por favor, <a href="{$a}">clique aqui</a>.';
