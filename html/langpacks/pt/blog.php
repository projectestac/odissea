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
 * Strings for component 'blog', language 'pt', version '3.11'.
 *
 * @package     blog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'Adicionar nova mensagem';
$string['addnewexternalblog'] = 'Registar um blogue externo';
$string['assocdescription'] = 'Se está a escrever sobre uma disciplina/ou atividade selecione-a aqui.';
$string['associated'] = 'Associado a {$a}';
$string['associatewithcourse'] = 'Blogue da disciplina \'{$a->coursename}\'';
$string['associatewithmodule'] = 'Blogue sobre {$a->modtype}: {$a->modname}';
$string['association'] = 'Associação';
$string['associations'] = 'Associações';
$string['associationunviewable'] = 'Esta mensagem não pode ser visualizada até que seja associada uma disciplina ou a pasta \'Publicar para\' seja alterada.';
$string['autotags'] = 'Adicionar palavras-chave';
$string['autotags_help'] = 'Insira uma ou mais palavras-chave locais (separadas por vírgulas) que pretende adicionar automaticamente a cada mensagem do blogue copiada do blogue externo no seu blogue local.';
$string['backupblogshelp'] = 'Quando ativos, os blogues são incluídos nas cópias de segurança automáticas do site';
$string['blockexternalstitle'] = 'Blogues externos';
$string['blog'] = 'Blogue';
$string['blogaboutthis'] = 'Blogue sobre \'{$a->type}\'';
$string['blogaboutthiscourse'] = 'Adicionar mensagem sobre esta disciplina';
$string['blogaboutthismodule'] = 'Adicionar mensagem sobre {$a}';
$string['blogadministration'] = 'Administração do blogue';
$string['blogdeleteconfirm'] = 'Pretende apagar do blogue a mensagem \'{$a}\'?';
$string['blogdisable'] = 'O sistema de blogues está desativado!';
$string['blogentries'] = 'Mensagens do blogue';
$string['blogentriesabout'] = 'Mensagens do blogue: {$a}';
$string['blogentriesbygroupaboutcourse'] = 'Mensagens de blogue sobre \'{$a->course}\' por {$a->group}';
$string['blogentriesbygroupaboutmodule'] = 'Mensagens de blogue sobre \'{$a->mod}\' por {$a->group}';
$string['blogentriesbyuseraboutcourse'] = 'Mensagens de blogue sobre \'{$a->course}\' por {$a->user}';
$string['blogentriesbyuseraboutmodule'] = 'Mensagens de blogue sobre \'{$a->mod}\' por {$a->user}';
$string['blogentrybyuser'] = 'Mensagem de blogue por {$a}';
$string['blogpreferences'] = 'Preferências do blogue';
$string['blogs'] = 'Blogues';
$string['blogscourse'] = 'Blogues da disciplina';
$string['blogssite'] = 'Blogues do site';
$string['blogtags'] = 'Palavras-chave do blogue';
$string['cannotviewcourseblog'] = 'Não tem permissão para ver blogues nesta disciplina';
$string['cannotviewcourseorgroupblog'] = 'Não tem permissão para ver blogues nesta disciplina/grupo';
$string['cannotviewsiteblog'] = 'Não tem permissão para ver todos os blogues';
$string['cannotviewuserblog'] = 'Não tem permissão para ler os blogues dos utilizadores';
$string['configexternalblogcrontime'] = 'Frequência com que o Moodle verifica a existência de novas mensagens em blogues externos.';
$string['configmaxexternalblogsperuser'] = 'Número de blogues externos que cada utilizador tem permissão para ligar ao seu blogue no Moodle.';
$string['configuseblogassociations'] = 'Ativa a associação de mensagens dos blogues a disciplinas e módulos de disciplinas.';
$string['configuseexternalblogs'] = 'Permite que os utilizadores definam listas RSS de blogues externos. O Moodle verifica regularmente estas listas dos blogues e copia novas entradas para o blogue local do utilizador.';
$string['courseblog'] = 'Blogue da disciplina: {$a}';
$string['courseblogdisable'] = 'Os blogues de disciplina não se encontram ativos';
$string['courseblogs'] = 'Os utilizadores só podem ver blogues de pessoas com quem partilham uma disciplina';
$string['deleteblogassociations'] = 'Apagar associações entre blogues';
$string['deleteblogassociations_help'] = 'Se ativar esta opção, as entradas do blogue não serão mais associadas a esta disciplina ou a quaisquer atividades ou recursos. As entradas do blogue não se apagam automaticamente.';
$string['deleteentry'] = 'Apagar mensagem';
$string['deleteexternalblog'] = 'Cancelar o registo deste blogue externo';
$string['deleteotagswarn'] = 'Tem a certeza de que pretende apagar esta(s) palavra(s)-chave de todas as entradas nos blogues e removê-la(s) do sistema?';
$string['description'] = 'Descrição';
$string['description_help'] = 'Insira uma ou duas frases que resumam os conteúdos do seu blogue externo. (Se não inserir nenhuma descrição, será usada a descrição do seu blogue externo).';
$string['donothaveblog'] = 'Não possui um blogue próprio.';
$string['editentry'] = 'Editar mensagem';
$string['editexternalblog'] = 'Editar este blogue externo';
$string['emptybody'] = 'As mensagens do blogue têm de conter texto';
$string['emptyrssfeed'] = 'O URL que indicou não aponta para uma lista RSS válida';
$string['emptytitle'] = 'O título das entradas do blogue tem de conter texto';
$string['emptyurl'] = 'Tem de indicar um URL que aponte para uma lista RSS válida';
$string['entrybody'] = 'Texto da mensagem';
$string['entrybodyonlydesc'] = 'Descrição da mensagem';
$string['entryerrornotyours'] = 'Esta mensagem não é da sua autoria';
$string['entrysaved'] = 'A sua mensagem foi gravada';
$string['entrytitle'] = 'Título da mensagem';
$string['eventblogassociationadded'] = 'Associação de blogue criada';
$string['eventblogassociationdeleted'] = 'Associação de blogue eliminada';
$string['eventblogentriesviewed'] = 'Entradas de blogue visualizadas';
$string['eventblogexternaladded'] = 'Blogue externo registado';
$string['eventblogexternalremoved'] = 'Cancelado o registo do blogue externo';
$string['eventblogexternalupdated'] = 'Blogue externo atualizado';
$string['evententryadded'] = 'Entrada de blogue adicionada';
$string['evententrydeleted'] = 'Entrada de blogue eliminada';
$string['evententryupdated'] = 'A mensagem do blogue foi atualizada';
$string['eventexternalblogsviewed'] = 'Visualizados os blogues externos registados';
$string['externalblogcrontime'] = 'Agendar cron do blogue externo';
$string['externalblogdeleteconfirm'] = 'Cancelar o registo deste blogue externo?';
$string['externalblogdeleted'] = 'O blogue externo foi cancelado';
$string['externalblogs'] = 'Blogues externos';
$string['feedisinvalid'] = 'Esta lista é inválida';
$string['feedisvalid'] = 'Esta lista é válida';
$string['filterblogsby'] = 'Filtrar mensagens por…';
$string['filtertags'] = 'Filtrar palavras-chave';
$string['filtertags_help'] = 'Pode usar esta opção para filtrar mensagens. Se especificar palavras-chave (separadas por vírgulas), apenas as mensagens com essas palavras-chave irão ser copiadas do blogue externo.';
$string['groupblog'] = 'Blogue do grupo: {$a}';
$string['groupblogdisable'] = 'Os blogues de grupo não estão ativos';
$string['groupblogentries'] = 'Entradas do blogue associadas a {$a->coursename} pelo grupo {$a->groupname}';
$string['groupblogs'] = 'Os utilizadores só podem ver blogues de pessoas com quem partilham um grupo';
$string['incorrectblogfilter'] = 'Filtro incorreto';
$string['intro'] = 'Esta lista RSS foi automaticamente gerado a partir de um ou mais blogues';
$string['invalidgroupid'] = 'ID de grupo inválido';
$string['invalidurl'] = 'O URL não está disponível';
$string['linktooriginalentry'] = 'Ligar à mensagem original';
$string['maxexternalblogsperuser'] = 'Número máximo de blogues externos por utilizador';
$string['myprofileuserblogs'] = 'Visualizar todas as entradas de blogue';
$string['name'] = 'Nome';
$string['name_help'] = 'Insira um nome descritivo para o seu blogue externo. (Se não inserir nenhum nome, será usado o título do blogue).';
$string['noentriesyet'] = 'Não existem mensagens visíveis';
$string['noguestpost'] = 'Os visitantes não podem adicionar mensagens aos blogues!';
$string['nopermissionstodeleteentry'] = 'Não tem permissão para apagar esta mensagem';
$string['norighttodeletetag'] = 'Não tem permissão para apagar esta palavra-chave - {$a}';
$string['nosuchentry'] = 'A mensagem não existe';
$string['notallowedtoedit'] = 'Não está autorizado a editar esta mensagem';
$string['numberofentries'] = 'Número de mensagens: {$a}';
$string['numberoftags'] = 'Número de palavras-chave a exibir';
$string['page-blog-edit'] = 'Edição de páginas do blogue';
$string['page-blog-index'] = 'Páginas de listagem do blogue';
$string['page-blog-x'] = 'Todas as páginas do blogue';
$string['pagesize'] = 'Número de entradas do blogue por página';
$string['permalink'] = 'Hiperligação permanente';
$string['personalblogs'] = 'Os utilizadores só podem ver os seus blogues';
$string['preferences'] = 'Preferências do blogue';
$string['privacy:metadata:core_comments'] = 'Comentários associados a entradas no blogue';
$string['privacy:metadata:core_files'] = 'Ficheiros anexados a entradas de blogue';
$string['privacy:metadata:core_tag'] = 'Palavras-chave associadas a entradas de blogue';
$string['privacy:metadata:external'] = 'Uma hiperligacão para uma lista RSS externa';
$string['privacy:metadata:external:description'] = 'Descrição da lista';
$string['privacy:metadata:external:filtertags'] = 'A lista de palavras-chave para filtrar as entradas';
$string['privacy:metadata:external:name'] = 'Nome da lista';
$string['privacy:metadata:external:timefetched'] = 'A data e hora em que a lista foi recuperada pela última vez';
$string['privacy:metadata:external:timemodified'] = 'A data e hora em que a associação foi modificada pela última vez';
$string['privacy:metadata:external:url'] = 'O URL da lista';
$string['privacy:metadata:external:userid'] = 'ID do utilizador que adicionou a entrada de blogue externo';
$string['privacy:metadata:post'] = 'Informação relacionada com entradas no blogue';
$string['privacy:metadata:post:content'] = 'Conteúdo de uma entrada de blogue externa';
$string['privacy:metadata:post:created'] = 'Data em que a entrada foi criada';
$string['privacy:metadata:post:lastmodified'] = 'Data em que a entrada de blogue foi modificada pela última vez';
$string['privacy:metadata:post:publishstate'] = 'Se a entrada é visível, ou não, para os outros';
$string['privacy:metadata:post:subject'] = 'O título da entrada do blogue';
$string['privacy:metadata:post:summary'] = 'O texto da entrada do blogue';
$string['privacy:metadata:post:uniquehash'] = 'Identificador único para uma entrada externa, geralmente um URL';
$string['privacy:metadata:post:userid'] = 'ID do utilizador que adicionou a entrada de blogue';
$string['privacy:metadata:post:usermodified'] = 'O utilizador que modificou a entrada pela última vez';
$string['privacy:path:blogassociations'] = 'Tópicos de blogues associados';
$string['privacy:unknown'] = 'Desconhecido';
$string['publishto'] = 'Publicar para';
$string['publishto_help'] = 'Existem 3 opções:

* O próprio (rascunho) - Apenas você e o administrador podem ver a mensagem
* Qualquer pessoa neste site - Quem estiver registado no site pode ler a mensagem
* Todos - Qualquer pessoa, incluindo visitantes, pode ler esta mensagem';
$string['publishtocourse'] = 'Os utilizadores partilham uma disciplina consigo';
$string['publishtocourseassoc'] = 'Membros da disciplina associada';
$string['publishtocourseassocparam'] = 'Membros de {$a}';
$string['publishtogroup'] = 'Os utilizadores partilham um grupo consigo';
$string['publishtogroupassoc'] = 'Os seus membros do grupo na disciplina associada';
$string['publishtogroupassocparam'] = 'Os membros do grupo em {$a}';
$string['publishtonoone'] = 'O próprio (rascunho)';
$string['publishtosite'] = 'Qualquer pessoa neste site';
$string['publishtoworld'] = 'Todos';
$string['readfirst'] = 'Ler primeiro';
$string['relatedblogentries'] = 'Mensagens do blogue relacionadas';
$string['retrievedfrom'] = 'Obtido em';
$string['rssfeed'] = 'Listas RSS do blogue';
$string['searchterm'] = 'Pesquisar: {$a}';
$string['settingsupdatederror'] = 'Ocorreu um erro e as preferências não foram atualizadas';
$string['siteblogdisable'] = 'O blogue do site não está ativo';
$string['siteblogheading'] = 'Blogue do site';
$string['siteblogs'] = 'Todos os utilizadores do site podem ver todas as entradas do blogue';
$string['tagdatelastused'] = 'Data da última utilização da palavra-chave';
$string['tagparam'] = 'Palavra-chave: {$a}';
$string['tags'] = 'Palavras-chave';
$string['tagsort'] = 'Apresentar palavras-chave ordenadas por';
$string['tagtext'] = 'Texto da palavra-chave';
$string['timefetched'] = 'Momento da última sincronização';
$string['timewithin'] = 'Exibir palavras-chave utilizadas durante estes dias';
$string['updateentrywithid'] = 'A atualizar mensagem';
$string['url'] = 'URL da lista RSS';
$string['url_help'] = 'Indique o URL das listas RSS do seu blogue externo.';
$string['useblogassociations'] = 'Ativar associação de blogues';
$string['useexternalblogs'] = 'Ativar blogues externos';
$string['userblog'] = 'Blogue do utilizador: {$a}';
$string['userblogentries'] = 'Entradas do blogue por {$a}';
$string['valid'] = 'Válido';
$string['viewallblogentries'] = 'Todas as mensagens sobre {$a}';
$string['viewallmodentries'] = 'Ver todas as mensagens sobre {$a->type}';
$string['viewallmyentries'] = 'Ver as minhas mensagens';
$string['viewblogentries'] = 'Mensagens sobre {$a->type}';
$string['viewblogsfor'] = 'Ver todas as mensagens de…';
$string['viewcourseblogs'] = 'Ver todas as mensagens sobre esta disciplina';
$string['viewentriesbyuseraboutcourse'] = 'Ver mensagens desta disciplina por {$a}';
$string['viewgroupblogs'] = 'Ver mensagens por grupo…';
$string['viewgroupentries'] = 'Mensagens do grupo';
$string['viewmodblogs'] = 'Ver mensagens por módulo…';
$string['viewmodentries'] = 'Módulo mensagens';
$string['viewmyentries'] = 'Minhas mensagens';
$string['viewmyentriesaboutcourse'] = 'Ver as minhas mensagens sobre esta disciplina';
$string['viewmyentriesaboutmodule'] = 'Ver as minhas mensagens sobre {$a}';
$string['viewsiteentries'] = 'Ver todas as mensagens';
$string['viewuserentries'] = 'Ver todas as mensagens de {$a}';
$string['worldblogs'] = 'Todos podem ler as mensagens configuradas para estarem acessíveis a todos';
$string['wrongexternalid'] = 'ID de blogue externo incorreto';
$string['wrongpostid'] = 'ID da mensagem incorreto';
