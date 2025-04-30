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
 * Strings for component 'search', language 'pt', version '4.4'.
 *
 * @package     search
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Pesquisa avançada';
$string['all'] = 'Tudo';
$string['allareas'] = 'Todas as áreas';
$string['allcourses'] = 'Todas as disciplinas';
$string['allusers'] = 'Todos';
$string['author'] = 'Autor';
$string['authorname'] = 'Nome do autor';
$string['back'] = 'Voltar';
$string['beadmin'] = 'Só um administrador pode usar esta página.';
$string['checkdb'] = 'Verificar base de dados';
$string['checkdbadvice'] = 'Verifique a base de dados para detetar problemas.';
$string['checkdir'] = 'Verificar pasta';
$string['checkdiradvice'] = 'Assegure-se de que a pasta dos dados existe e não é só de leitura.';
$string['commenton'] = 'Comentar';
$string['confirm_delete'] = 'Tem a certeza de que pretende apagar o índice de {$a}? Até que a área de pesquisa seja indexada, os utilizadores não obterão resultados de pesquisa desta área.';
$string['confirm_deleteall'] = 'Tem a certeza de que pretende apagar agora todo o conteúdo indexado? Até que o site seja indexado novamente, os utilizadores não obterão resultados de pesquisa.';
$string['confirm_indexall'] = 'Tem a certeza de que pretende atualizar agora o conteúdo indexado? Se uma grande quantidade de conteúdo precisar de indexação, a operação de indexação pode demorar muito tempo. Para servidores ativos, normalmente deve deixar a indexação para a tarefa agendada \'Indexação de pesquisa global\'.';
$string['confirm_reindexall'] = 'Tem a certeza de que pretende reindexar agora todo o conteúdo do site? Se o seu site contiver uma grande quantidade de conteúdo, a operação de indexação demorará um longo tempo e os utilizadores poderão não obter resultados completos da pesquisa até que esteja concluída.';
$string['content:courserole'] = '{$a->role} em {$a->course}';
$string['core-all'] = 'Tudo';
$string['core-course-content'] = 'Conteúdo da disciplina';
$string['core-courses'] = 'Disciplinas';
$string['core-other'] = 'Outro';
$string['core-users'] = 'Utilizadores';
$string['createanindex'] = 'criar um índice';
$string['createdon'] = 'Criado';
$string['database'] = 'Base de dados';
$string['databasestate'] = 'A indexar o estado da base de dados';
$string['datadirectory'] = 'Pasta dos dados';
$string['deleteindex'] = 'Apagar o índice {$a}';
$string['deletionsinindex'] = 'Eliminações no índice';
$string['docmodifiedon'] = 'Última atualização {$a}';
$string['doctype'] = 'Tipo de documento';
$string['doctypenotsupported'] = 'Este tipo específico de documento ainda não é suportado';
$string['documents'] = 'documentos';
$string['documentsfor'] = 'Documentos para';
$string['documentsindatabase'] = 'Documentos na base de dados';
$string['documentsinindex'] = 'Documentos no índice';
$string['duration'] = 'Duração';
$string['emptydatabaseerror'] = 'A tabela da base de dados não existe ou não contém índice';
$string['enginenotfound'] = 'Motor de busca \'{$a}\' não encontrado.';
$string['enginenotinstalled'] = 'Motor de busca \'{$a}\' não está instalado.';
$string['enginenotselected'] = 'Não selecionou nenhum motor de busca.';
$string['engineserverstatus'] = 'O motor de busca não está disponível. Por favor, contacte o administrador.';
$string['enteryoursearchquery'] = 'Introduza os termos da pesquisa';
$string['error_indexing'] = 'Ocorreu um erro durante a indexação';
$string['errorareanotavailable'] = 'A área de pesquisa {$a} não está disponível.';
$string['errors'] = 'Erros';
$string['everywhere'] = 'Onde quer que possa aceder';
$string['filesinindexdirectory'] = 'Ficheiros na pasta de índice';
$string['filterheader'] = 'Filtro';
$string['fromtime'] = 'Modificado após';
$string['globalsearch'] = 'Pesquisa global';
$string['globalsearchdisabled'] = 'A pesquisa global não está ativa.';
$string['gradualreindex'] = 'Reindexação gradual {$a}';
$string['gradualreindex_confirm'] = 'Tem a certeza de que pretende reindexar {$a}? Isto pode levar algum tempo, no entanto, os dados existentes continuam disponíveis durante a reindexação.';
$string['gradualreindex_queued'] = 'Foi solicitada a reindexação para {$a->name} ({$a->count} contextos). Esta indexação será realizada pela tarefa agendada "Indexação de pesquisa global".';
$string['incourse'] = 'na disciplina {$a}';
$string['index'] = 'Indexar';
$string['indexwhendisabledfullnotice'] = 'A indexação não é permitida quando a pesquisa está desativada. Para ativar, por favor, veja a configuração \'<a href="{$a->url}">Indexar quando desativada</a>\'.';
$string['indexwhendisabledshortnotice'] = 'A indexação não está disponível.';
$string['invalidindexerror'] = 'A pasta de índice contém um índice inválido, ou não contém índice.';
$string['ittook'] = 'Demorou';
$string['matchingfile'] = 'Verificado a partir do ficheiro <span class="filename">{$a}</span>';
$string['matchingfiles'] = 'Verificado a partir dos ficheiros:';
$string['mycoursesonly'] = 'Apenas as minhas disciplinas';
$string['next'] = 'Seguinte';
$string['noindexmessage'] = 'Administração: Parece não existir um índice de pesquisa. Por favor,';
$string['noresults'] = 'Sem resultados';
$string['normalsearch'] = 'Pesquisa normal';
$string['notitle'] = 'Sem título';
$string['openedon'] = 'aberto em';
$string['optimize'] = 'Otimizar';
$string['order'] = 'Ordem dos resultados';
$string['order_location'] = 'Dar priopridade aos resultados relacionados com {$a}';
$string['order_relevance'] = 'Resultados mais relevantes em primeiro';
$string['priority'] = 'Prioritário';
$string['priority_normal'] = 'Normal';
$string['priority_reindexing'] = 'A reindexar';
$string['privacy:metadata'] = 'O subsistema de pesquisa não armazena quaisquer dados pessoais.';
$string['progress'] = 'Progresso';
$string['queryerror'] = 'A pesquisa que indicou não pôde ser analisada pelo motor de busca: {$a}';
$string['queueheading'] = 'Fila de indexação adicional ({$a} itens)';
$string['resultsreturnedfor'] = 'resultados devolvidos para';
$string['runindexer'] = 'Executar indexante (real)';
$string['runindexertest'] = 'Teste de execução do indexador';
$string['schemanotupdated'] = 'O esquema de pesquisa está desatualizado.';
$string['schemaversionunknown'] = 'O mecanismo de procura desconhece a versão atual do esquema.';
$string['score'] = 'Classificação';
$string['search'] = 'Pesquisar';
$string['search:course'] = 'Disciplinas';
$string['search:course_teacher'] = 'Professor da disciplina';
$string['search:customfield'] = 'Campos personalizados da disciplina';
$string['search:message_received'] = 'Mensagens - recebidas';
$string['search:message_sent'] = 'Mensagens - enviadas';
$string['search:mycourse'] = 'Minhas disciplinas';
$string['search:section'] = 'Secções da disciplina';
$string['search:user'] = 'Utilizadores';
$string['searcharea'] = 'Área de pesquisa';
$string['searchareacategories'] = 'Categorias da área de pesquisa';
$string['searching'] = 'A pesquisar em...';
$string['searchnotpermitted'] = 'Não tem autorização para realizar uma pesquisa';
$string['searchsetupdescription'] = 'Os passos seguintes irão ajudá-lo a configurar a pesquisa global do Moodle.';
$string['searchwithin'] = 'Pesquisar dentro';
$string['seconds'] = 'segundos';
$string['solutions'] = 'Soluções';
$string['statistics'] = 'Estatísticas';
$string['step'] = 'Passo';
$string['thesewordshelpimproverank'] = 'Estas palavras ajudam a melhorar a posição relativa';
$string['thesewordsmustappear'] = 'Estas palavras têm de estar presentes';
$string['thesewordsmustnotappear'] = 'Estas palavras não podem estar presentes';
$string['title'] = 'Título';
$string['tofetchtheseresults'] = 'para obter estes resultados';
$string['topresults'] = 'Melhores resultados';
$string['totalsize'] = 'Tamanho total';
$string['totime'] = 'Modificado antes de';
$string['type'] = 'Tipo';
$string['uncompleteindexingerror'] = 'A indexação não foi concluída com sucesso. Por favor, comece de novo.';
$string['versiontoolow'] = 'A pesquisa global requer o PHP 5.0.0 ou posterior';
$string['viewresultincontext'] = 'Visualizar este resultado no contexto';
$string['wordsintitle'] = 'Palavras no título';
