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
 * Strings for component 'block_rss_client', language 'pt', version '3.11'.
 *
 * @package     block_rss_client
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfeed'] = 'Adicionar URL de lista RSS';
$string['addheadlineblock'] = 'Adicionar bloco de cabeçalhos RSS';
$string['addnew'] = 'Adicionar novo';
$string['addnewfeed'] = 'Adicionar nova lista';
$string['cannotmakemodification'] = 'Não tem permissão para alterar esta lista RSS neste momento.';
$string['choosefeedlabel'] = 'Listas RSS exibidas neste bloco:';
$string['clientchannellink'] = 'Site de origem...';
$string['clientnumentries'] = 'Número predefinido de notícias a mostrar por lista RSS.';
$string['clientshowchannellinklabel'] = 'Exibir apontador para o site original? (Se a lista RSS não fornecer o URL não será exibido nada):';
$string['clientshowimagelabel'] = 'Mostrar imagem do canal, se disponível:';
$string['configblock'] = 'Configurar este bloco';
$string['couldnotfindfeed'] = 'Não foi possível encontrar a lista RSS com ID';
$string['couldnotfindloadrssfeed'] = 'Não foi possível encontrar ou carregar a lista RSS.';
$string['customtitlelabel'] = 'Título (deixe em branco para utilizar o título fornecido pela Lista):';
$string['deletefeedconfirm'] = 'Tem a certeza de que pretende apagar esta lista RSS?';
$string['disabledrssfeeds'] = 'As listas RSS estão desativadas';
$string['displaydescriptionlabel'] = 'Exibir descrição de cada notícia?';
$string['editafeed'] = 'Editar lista';
$string['editfeeds'] = 'Editar, subscrever ou cancelar subscrição da lista RSS';
$string['editnewsfeeds'] = 'Editar listas RSS';
$string['editrssblock'] = 'Editar bloco de cabeçalhos RSS';
$string['enableautodiscovery'] = 'Ativar autodescoberta de listas RSS?';
$string['enableautodiscovery_help'] = 'Se ativar esta opção, as listas RSS a exibir numa página são encontradas automaticamente. Por exemplo, se inserir https://docs.moodle.org, então https://docs.moodle.org/en/index.php?title=Special:RecentChanges&feed=rss será encontrada.';
$string['failedfeed'] = 'Falha ao descarregar a lista - repetirá após {$a}';
$string['failedfeeds'] = 'Ocorreu uma falha numa ou mais listas RSS';
$string['feed'] = 'Lista';
$string['feedadded'] = 'Adicionada lista RSS';
$string['feeddeleted'] = 'Lista RSS removida';
$string['feeds'] = 'Lista RSS';
$string['feedsaddedit'] = 'Adicionar/Editar listas RSS';
$string['feedsconfigurenewinstance'] = 'Clique aqui para configurar este bloco para que exiba listas RSS';
$string['feedsconfigurenewinstance2'] = 'Clique no ícone de edição acima para configurar este bloco de modo que exiba listas RSS';
$string['feedupdated'] = 'Lista RSS atualizada';
$string['feedurl'] = 'URL da Lista';
$string['findmorefeeds'] = 'Pesquisar mais listas RSS';
$string['managefeeds'] = 'Gerir todas as minhas listas RSS';
$string['nofeeds'] = 'Não existem listas RSS configuradas para este site.';
$string['numentries'] = 'Entradas por lista';
$string['pickfeed'] = 'Selecionar uma lista RSS';
$string['pluginname'] = 'Lista RSS';
$string['privacy:metadata:block_rss_client:description'] = 'Descrição da lista RSS';
$string['privacy:metadata:block_rss_client:preferredtitle'] = 'O título preferido (personalizado) da lista RSS';
$string['privacy:metadata:block_rss_client:shared'] = 'Se a lista RSS está disponível em todas as disciplinas.';
$string['privacy:metadata:block_rss_client:skiptime'] = 'O tempo definido em segundos que o cron irá esperar entre tentativas para repetir as listas RSS falhadas.';
$string['privacy:metadata:block_rss_client:skipuntil'] = 'O máximo tempo definido que o cron irá  tentar abrir listas RSS falhadas.';
$string['privacy:metadata:block_rss_client:tableexplanation'] = 'Informação do bloco RSS é armazenada aqui.';
$string['privacy:metadata:block_rss_client:title'] = 'O título da lista RSS.';
$string['privacy:metadata:block_rss_client:url'] = 'O URL da lista RSS.';
$string['privacy:metadata:block_rss_client:userid'] = 'ID do utilizador que adicionou a lista RSS.';
$string['refreshfeedstask'] = 'Tarefa de atualização das listas RSS';
$string['remotenewsfeed'] = 'Lista RSS remota';
$string['rss_client:addinstance'] = 'Adicionar um novo bloco Lista RSS';
$string['rss_client:createprivatefeeds'] = 'Criar lista RSS privada';
$string['rss_client:createsharedfeeds'] = 'Criar lista RSS partilhada';
$string['rss_client:manageanyfeeds'] = 'Gerir todas as listas RSS';
$string['rss_client:manageownfeeds'] = 'Gerir listas RSS próprias';
$string['rss_client:myaddinstance'] = 'Adicionar um novo bloco Lista RSS remota ao Painel do utilizador';
$string['seeallfeeds'] = 'Ver todas as listas RSS';
$string['sharedfeed'] = 'Lista RSS partilhada';
$string['shownumentrieslabel'] = 'Número máximo de notícias a exibir por lista RSS';
$string['submitters'] = 'Quem pode definir novas listas RSS? As listas RSS definidas estão disponíveis em qualquer página do site.';
$string['submitters2'] = 'Fornecedores';
$string['timeout'] = 'Tempo, em minutos, antes que a lista RSS expire na cache. Tenha em atenção que este parâmetro define o tempo mínimo antes de expirar. A lista será atualizada na cache na próxima execução do cron, após expirar. Os valores recomendados são de 30 minutos ou mais.';
$string['timeout2'] = 'Tempo limite';
$string['timeoutdesc'] = 'Tempo de vida, em minutos, de uma lista RSS em cache';
$string['updatefeed'] = 'Atualizar URL de uma lista RSS:';
$string['viewfeed'] = 'Ver lista';
