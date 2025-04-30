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
 * Strings for component 'qtype_gapfill', language 'pt', version '4.4'.
 *
 * @package     qtype_gapfill
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addhinttext'] = 'Adicionar texto da dica ao formulário de edição';
$string['addhinttext_text'] = 'Preencher as duas primeiras dicas na seção Múltiplas tentativas do formulário';
$string['additemsettings'] = 'Adicionar configurações dos espaços';
$string['answerdisplay'] = 'Mostrar respostas';
$string['answerdisplay_help'] = 'Arrastar e largar mostra uma lista de palavras que podem ser arrastadas para os espaços em branco, o preenchimento de espaço em branco mostra espaços sem opções de resposta, a lista pendente mostra a mesma lista de respostas corretas (e incorretas) para cada campo';
$string['blank'] = 'em branco';
$string['cannotimport'] = 'Não é possível importar';
$string['casesensitive'] = 'Distinguir maiúsculas de minúsculas';
$string['casesensitive_help'] = 'Quando ativar esta opção, se a resposta correta for GATO, a resposta gato será considerada como incorreta';
$string['correct'] = 'Feedback quando correto';
$string['correctanswer'] = 'Resposta correta';
$string['course'] = 'Ajuda sobre importação';
$string['coursenotfound'] = 'Disciplina não encontrada. Verifique o nome curto da disciplina';
$string['courseshortname'] = 'Nome curto da disciplina';
$string['courseshortname_help'] = 'Digite o nome curto da disciplina de onde importar a pergunta. Isto resulta numa importação de pergunta xml padrão desde o ficheiro example_questions.xml existente na pasta das perguntas do tipo Preencher espaços em branco.';
$string['delimitchars'] = 'Caracteres delimitadores';
$string['delimitchars_help'] = 'Altere os caracteres que delimitam um campo para outros diferentes dos predefinidos [ ]. Útil para perguntas sobre linguagens de programação';
$string['delimitset_text'] = 'Definir os delimitadores dos espaços para poder adicionar % % para o %gato% sentou-se no %tapete%';
$string['disableregex'] = 'Desativar Regex';
$string['disableregex_help'] = 'Desativar o processamento de expressões regulares e realizar uma comparação padrão das expressões. Isto pode ser útil para perguntas HTML onde os símbolos (< e >) devem ser tratados como texto e na matemática, onde símbolos como * serão vistos como texto em vez de expressões';
$string['disableregexset_text'] = 'Desativar processamento de expressões regulares nas respostas';
$string['displaydragdrop'] = 'arrastar e largar';
$string['displaydropdown'] = 'lista pendente';
$string['displaygapfill'] = 'preencher espaços em branco';
$string['distractor1'] = 'azul,sapato,pequeno';
$string['distractor2'] = 'azul,sapato,pequeno';
$string['duplicatepartialcredit'] = 'Pontuação parcial porque existem respostas duplicadas';
$string['editquestiontext'] = 'Editar texto da pergunta';
$string['example1'] = 'Arraste os verbos para os espaços em branco. Ele [riu] e [sentou-se]';
$string['example2'] = 'Selecione os verbos das listas pendentes. Ele [riu] e [sentou-se]';
$string['example3'] = 'De onde é o canguru? [Austrália]. O próximo espaço aceitará gato ou cão [gato|cão]';
$string['fixedgapsize'] = 'Tamanho fixo do espaço';
$string['fixedgapsize_help'] = 'Ao tentar responder à questão, todos os espaços serão definidos para o tamanho do maior espaço. Isso elimina a hipótese do tamanho do espaço ser uma dica para a resposta correta. Por exemplo, se os espaços são [verde] e [amarelo] seria claro que o amarelo era para o espaço maior';
$string['fixedgapsizeset_text'] = 'Define o tamanho do espaço igual ao tamanho do maior espaço';
$string['gap_plural'] = 'espaços';
$string['gap_singular'] = 'espaço';
$string['gapfill'] = 'Preencher espaços em branco';
$string['importexamples'] = 'Importar';
$string['incorrect'] = 'Feedback quando incorreto';
$string['itemsettings_button'] = 'Configurações dos itens';
$string['itemsettings_button_help'] = 'Ao clicar no botão alterna para o modo de configuração, para inserir configurações por espaço, tal como, feedback para respostas corretas ou incorretas. Se clicar na palavra de um espaço delimitado irá ver o formulário de configurações';
$string['itemsettingsbutton'] = 'Configurações dos espaços';
$string['itemsettingserror'] = 'Só funciona com o editor Atto. Vá a Administração do Site / Módulos / Editores de texto / Gerir editores e depois altere para Editor HTML Atto';
$string['letterhint0'] = 'A primeira letra da resposta correta será adicionada em cada espaço em branco incorreto quando clicar em "Tentar novamente".';
$string['letterhint1'] = 'A próxima letra da resposta correta será adicionada quando clicar em "Tentar novamente".';
$string['letterhints'] = 'Dicas de letras';
$string['letterhints_help'] = 'Adicionar uma letra da resposta correta, como uma dica no modo interativo, quando é indicada uma resposta incorreta. As dicas devem ser fornecidas em "Múltiplas tentativas" para que funcione';
$string['letterhints_text'] = 'Adicionar uma letra da resposta correta, como uma dica no modo interativo, quando é indicada uma resposta incorreta';
$string['moreoptions'] = 'Mais opções';
$string['noduplicates'] = 'Sem duplicados';
$string['noduplicates_help'] = 'Quando esta opção está ativa, cada resposta deve ser única. Isto poderá ser útil quando um campo tem um operador |, por exemplo: "Quais são as cores das medalhas Olímpicas?" e cada campo tem [ouro | prata | bronze]. Se o aluno inserir ouro em todos os campos apenas o primeiro será avaliado (no entanto os outros também terão um visto). Na realidade trata-se de descartar respostas duplicadas para fins de avaliação.';
$string['optionsaftertext'] = 'Mostrar opções após o texto';
$string['optionsaftertext_help'] = 'As opções de resposta com item arrastável serão mostradas após o corpo do texto em vez de acima';
$string['optionsaftertext_text'] = 'Itens arrastáveis depois do corpo de texto';
$string['or'] = 'ou';
$string['pleaseenterananswer'] = 'Por favor, indique uma resposta';
$string['pluginname'] = 'Preencher espaços em branco';
$string['pluginname_help'] = 'Coloque as palavras a utilizar dentro de parêntesis retos, por exemplo O [gato] sentou-se no [tapete].
Se esteira ou tapete puderem ser opção utilize [esteira | tapete]. Lista pendente e Arrastar e Largar permitem mostrar uma lista de respostas baralhadas e que pode incluir respostas opcionais erradas / de distracção.';
$string['pluginname_link'] = '/question/type/gapfill';
$string['pluginnameadding'] = 'Adicionar uma questão Preencher espaços em branco';
$string['pluginnameediting'] = 'Editar Preencher espaço em branco';
$string['pluginnamesummary'] = 'Um tipo de pergunta de preenchimento de espaços em branco. Tem menos capacidades que a pergunta do tipo Respostas incorporadas (Cloze) mas tem uma sintaxe mais simples. Permite resposta através de arrastar e largar ou por lista pendente, com ou sem elementos de distração (respostas erradas).';
$string['privacy:null_reason'] = 'O tipo de pergunta Preencher espaços em branco não afeta nem armazena dados em si.';
$string['questioncatnotfound'] = 'Categoria de pergunta não encontrada. Clique <a href={$a}>aqui</a> para inicializar e depois no botão retroceder do navegador';
$string['questionsmissing'] = 'Não foi incluído nenhum campo no texto da pergunta';
$string['questiontext'] = 'Texto da pergunta';
$string['questiontext_help'] = 'Coloque delimitadores em torno das palavras que se tornarão parte do texto';
$string['singleuse'] = 'Itens arrastáveis de uso único';
$string['singleuse_help'] = 'Remover os itens arrastáveis da lista quando largados num espaço em branco';
$string['singleuse_text'] = 'Remover os itens arrastáveis da lista quando largados num espaço em branco';
$string['visitquestions'] = 'Clique <a href={$a}>aqui</a> para visualizar as perguntas';
$string['wronganswers'] = 'Respostas erradas';
$string['wronganswers_help'] = 'Lista de palavras incorretas separadas por vírgulas. É aplicado apenas nos modos: arrastar e largar e lista pendente';
$string['yougotnrightcount'] = 'Concluiu corretamente {$a->num} {$a->gaporgaps} de {$a->outof}.';
