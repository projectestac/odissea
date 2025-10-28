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
 * Strings for component 'block_stash', language 'pt', version '4.4'.
 *
 * @package     block_stash
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Aceitar';
$string['add'] = 'Adicionar';
$string['additem'] = 'Adicionar um item';
$string['addnewdrop'] = 'Adicionar nova localização';
$string['addnewtradeitem'] = 'Adicionar novo item a esta troca';
$string['addtoinventory'] = 'Adicionar um item ao inventário.';
$string['addtrade'] = 'Adicionar um widget de troca';
$string['addtradeitem'] = 'Adicionar item para troca';
$string['advancedreset'] = 'Reinício avançado';
$string['aftercreatinglocationhelp'] = 'Depois de criar o item e a localização, é necessário adicionar o código na disciplina para que o item seja exibido. Depois de personalizar como o item vai ser mostrado aos alunos, copie o código abaixo e cole-o no seu conteúdo, por exemplo, na descrição de um trabalho.';
$string['appearance'] = 'Aparência';
$string['backtostart'] = 'Voltar ao ecrã inicial';
$string['buttontext'] = 'Texto do botão';
$string['completed'] = 'Concluído';
$string['configdeleted'] = 'Configuração eliminada';
$string['configupdated'] = 'Configuração atualizada';
$string['configurationtitle'] = 'Título do Inventário';
$string['configureremoval'] = 'Configurar eliminação';
$string['copypaste'] = 'Copie e cole no editor em diferentes atividades da disciplina.';
$string['copytoclipboard'] = 'Copiar para área de transferência';
$string['cost'] = 'Custo';
$string['createquizzes'] = 'Crie um teste nesta disciplina para configurar';
$string['createtrade'] = 'Criar pedido de troca';
$string['decline'] = 'Recusar';
$string['delete'] = 'Apagar';
$string['deletedrop'] = 'Apagar {$a}';
$string['deleteitem'] = 'Apagar {$a}';
$string['deleteswap'] = 'Apagar troca';
$string['deleteuseritem'] = 'Apagar {$a} para este utilizador';
$string['details'] = 'Detalhes';
$string['dropa'] = 'Localização \'{$a}\'';
$string['dropname'] = 'Localização';
$string['dropname_help'] = 'O nome da localização é útil apenas para facilitar a organização, não é mostrado aos alunos.';
$string['drops'] = 'Localizações';
$string['drops_help'] = '<p>Localizações são locais onde os itens estão no <em>mundo virtual</em>. Sem uma <em>localização</em> um item não pode ser selecionado por um aluno.</p>
<p>Localizações vêem com algumas opções, incluindo o número de vezes que um aluno pode selecionar e como elas reaparecerão depois de serem selecionadas.</p>
<p>Por exemplo, os alunos precisam de um <em>item chave</em> para aceder a uma atividade, deverá definir de forma que os alunos apenas consigam escolhê-la uma vez naquela localização.</p>
<p>Porém se eles precisam de <em>5 moedas</em> para aceder a outra, deverá definir que a moeda reapareça diariamente para encorajar os alunos a aceder à disciplina todos os dias.</p>
<p>Note que os itens não aparecem na disciplina por magia, deve adicionar um código especial num dos conteúdos para que o item seja exibido.</p>';
$string['dropslist'] = 'Lista de localizações';
$string['dropsnippet'] = 'Código para \'{$a}\'';
$string['dropsummary'] = 'Resumo de localização';
$string['edit'] = 'Alterar';
$string['editdrop'] = 'Alterar a localização \'{$a}\'';
$string['edititem'] = 'Alterar item \'{$a}\'';
$string['edittrade'] = 'Editar widget de troca \'{$a}\\';
$string['edittradeitem'] = 'Editar item para troca \'{$a}\\';
$string['eginthecastle'] = 'Por exemplo: no castelo';
$string['enabled'] = 'Ativo';
$string['eventitemacquired'] = 'Um item foi escolhido';
$string['eventswapaccepted'] = 'Foi aceite uma troca';
$string['eventswapcreated'] = 'Foi criada uma troca';
$string['filtershortcodesnotactive'] = 'O módulo de filtro Códigos abreviados está instalado mas não se encontra ativo nesta disciplina. Aceda a <a href="{$a->activeurl}" target="_blank">esta página</a> para ativar o módulo nesta disciplina.';
$string['filtershortcodesnotenabled'] = 'O módulo de filtro Códigos Abreviados está instalado, mas ainda não se encontra ativo <a href="{$a->enableurl}" target="_blank">enabled</a>.';
$string['filtershortcodesnotinstalled'] = 'Recomenda-se que instale e ative o <a href="{$a->installurl}" target="_blank">módulo de filtro Códigos Abreviados</a>. Facilitará e tornará mais segura a utilização de códigos do inventário. Também permite trocas.';
$string['filterstashdeprecated'] = 'Encontra-se  a utilizar uma versão anterior do plugin de filtro Inventário, que já não é suportada. Recomenda-se que instale e ative esta versão <a href="{$a->installurl}" target="_blank">filtro Códigos abreviados</a>. Também permite trocas.';
$string['filterstashnotactive'] = 'O módulo filtro foi instalado mas não foi ativado para esta disciplina. Visite <a href="{$a->activeurl}" target="_blank">esta página</a> para o ativar para esta disciplina.';
$string['filterstashnotenabled'] = 'O módulo filtro foi instalado mas ainda não foi <a href="{$a->enableurl}" target="_blank">ativado</a>.';
$string['filterstashnotinstalled'] = 'Recomenda-se a instalação e ativação do <a href="{$a->installurl}" target="_blank">filtro Inventário</a>. Torna mais fácil e confiável o uso de códigos de inventário. Também permite trocas.';
$string['filterstashwrongversion'] = 'O plugin de filtro que tem instalado trata-se de uma versão anterior e não suporta trocas. Por favor entre <a href="{$a}" target="_blank">aqui</a> para obter a versão mais recente.';
$string['from'] = 'De';
$string['gain'] = 'Ganho';
$string['gainloss'] = 'Ganhar ou perder';
$string['gaintitle'] = 'Título do ganho';
$string['gaintitle_help'] = 'Título para a coluna de itens adquiridos pelo utilizador nesta troca.';
$string['generalsettings'] = 'Configurações gerais';
$string['grouponly'] = 'Permitir apenas trocas entre estudantes do mesmo grupo';
$string['image'] = 'Imagem';
$string['imageandbutton'] = 'Imagem e botão';
$string['item'] = 'Item';
$string['itemamountlimit'] = 'Quantidade máxima';
$string['itemamountlimit_help'] = 'Esta é a quantidade máxima deste item raro disponível para todos os alunos da disciplina';
$string['itemamountupdate'] = 'A quantidade para este item foi atualizada';
$string['itemdeleted'] = 'Este item foi removido';
$string['itemdetail'] = 'Detalhes';
$string['itemdetail_help'] = 'Detalhes sobre o item';
$string['itemimage'] = 'Imagem';
$string['itemimage_help'] = 'Esta imagem será utilizada para mostrar o item. O tamanho recomendado é de 100x100 pixels.';
$string['itemname'] = 'Nome do item';
$string['itemname_help'] = 'O nome do item que será mostrado aos alunos.';
$string['itemremoval'] = 'Remoção de item';
$string['items'] = 'Itens';
$string['itemslist'] = 'Lista de itens';
$string['itemsremoved'] = 'Itens removidos';
$string['leaderboard'] = 'Mostrar leaderboard';
$string['leaderboard_groups'] = 'Mostrar apenas utilizadores dos meus grupos no leaderboard';
$string['leaderboards'] = 'Leaderboards';
$string['locations'] = 'Localizações';
$string['loss'] = 'Perda';
$string['losstitle'] = 'Título da perda';
$string['losstitle_help'] = 'Título para a coluna de itens perdidos pelo utilizador nesta troca.';
$string['maxnumber'] = 'Valor máximo';
$string['maxpickup'] = 'Fornecimentos';
$string['maxpickup_help'] = 'O número de vezes que um item pode ser escolhido por cada aluno nesta localização. Por exemplo, se definir o valor \'1\', o item apenas estará disponível uma vez por aluno. Se definir \'5\', cada aluno pode "apanhar" o item 5 cinco vezes nesta localização. Um valor diferente de \'1\' é melhor se usado em combinação com o \'Intervalo entre escolhas\'.';
$string['mostitems'] = 'A maior parte dos itens';
$string['mostsingularitem'] = 'A maior parte de um item singular especificado';
$string['mostsingularitemname'] = 'A maior parte de \'{$a}\'';
$string['mostuniqueitems'] = 'A maior parte dos itens únicos';
$string['myitems'] = 'Os meus itens';
$string['myrequests'] = 'Os meus pedidos';
$string['navdrops'] = 'Localizações';
$string['navinventory'] = 'Itens escondidos';
$string['navitems'] = 'Itens';
$string['navleaderboadsettings'] = 'Configurações do Leaderboard';
$string['navreport'] = 'Relatório';
$string['navtrade'] = 'Troca';
$string['new'] = 'Novo';
$string['next'] = 'Seguinte';
$string['nofilterandnotiny'] = '📢 Sabe que existe um novo plugin para o editor TinyMCE que facilita muito a criação de itens e trocas? Baixe e instale os <a href="https://moodle.org/plugins/filter_shortcodes">shortcodes do plugin de filtro</a> e o <a href="https://moodle.org/plugins/tiny_stash">plugin do editor TinyMCE TinyStash</a> para melhorar muito sua experiência de criação de stash. Um vídeo de prévia está disponível no link anterior do TinyStash.';
$string['noitems'] = 'Nenhum item selecionado';
$string['noitemstotrade'] = 'Não tem itens para trocar';
$string['nomorescarceitems'] = 'A quantidade máxima deste item já foi alocada. Considere aumentar a quantidade para este item.';
$string['none'] = 'Nenhum';
$string['noquizzes'] = 'Não existem testes';
$string['nosingularitem'] = 'Adicione pelo menos um item para usar este leaderboard.';
$string['notiny'] = '📢 Sabe que existe um novo plugin para o editor TinyMCE que facilita muito a criação de itens e trocas? Baixe e instale o <a href="https://moodle.org/plugins/tiny_stash">plugin TinyMCE TinyStash</a> para melhorar muito sua experiência de criação de stash. Um vídeo de prévia está disponível no link anterior.';
$string['notrecorded'] = 'Não gravado';
$string['number'] = 'Número';
$string['offerdetail'] = 'Você solicitou uma troca com este aluno pelos seguintes itens.';
$string['offereditems'] = 'Itens oferecidos';
$string['offers'] = 'Ofertas';
$string['offers:zero'] = 'Não existem ofertas';
$string['offersdetail:zero'] = 'Vá ao centro de trocas para iniciar uma troca ou espere que alguém lhe ofereça uma troca.';
$string['participantswithitem'] = 'Participantes com este item';
$string['pickupa'] = 'Apanhar \'{$a}\'';
$string['pickupinterval'] = 'Tempo de indisponibilidade';
$string['pickupinterval_help'] = 'Tempo necessário para que o item reapareça aos alunos que já obtiveram este item. Por exemplo, se criou um item \'biscoito\', pode definir o Tempo de indisponibilidade de 24 horas para simular o tempo que leva para que o padeiro coza outro. É importante notar que os alunos não são afetados pelas escolhas dos outros participantes. Esta configuração não tem efeito quando \'Fornecimentos\' está definido como \'1\'.';
$string['pluginname'] = 'Inventário';
$string['previous'] = 'Anterior';
$string['privacy:metadata:pickup'] = 'Registo dos itens recolhidos numa determinada localização.';
$string['privacy:metadata:pickup:dropid'] = 'ID da localização';
$string['privacy:metadata:pickup:lastpickup'] = 'Hora da última recolha.';
$string['privacy:metadata:pickup:pickupcount'] = 'Quantidade recolhida na localização.';
$string['privacy:metadata:pickup:timecreated'] = 'Data em que o registo foi criado.';
$string['privacy:metadata:pickup:timemodified'] = 'Data da última alteração do registo.';
$string['privacy:metadata:pickup:userid'] = 'ID do utilizador que recolheu.';
$string['privacy:metadata:swap'] = 'Um registro de trocas entre utilizadores';
$string['privacy:metadata:swap:initiator'] = 'A pessoa que fez uma oferta de troca';
$string['privacy:metadata:swap:message'] = 'Mensagem relativa à troca';
$string['privacy:metadata:swap:messageformat'] = 'Formato da mensagem';
$string['privacy:metadata:swap:receiver'] = 'A pessoa que está a receber a oferta de troca';
$string['privacy:metadata:swap:stashid'] = 'A instância de stash da qual esta troca faz parte';
$string['privacy:metadata:swap:status'] = 'O estado da troca';
$string['privacy:metadata:swap:timecreated'] = 'O momento em que a oferta de troca foi feita';
$string['privacy:metadata:swap:timemodified'] = 'Sempre que a oferta de troca for atualizada';
$string['privacy:metadata:useritem'] = 'Registo dos itens do utilizador.';
$string['privacy:metadata:useritem:itemid'] = 'ID do item.';
$string['privacy:metadata:useritem:quantity'] = 'Quantidade detida.';
$string['privacy:metadata:useritem:timecreated'] = 'Data em que o registo foi criado.';
$string['privacy:metadata:useritem:timemodified'] = 'Data da última alteração do registo.';
$string['privacy:metadata:useritem:userid'] = 'ID do utilizador a que pertence o item.';
$string['quantity'] = 'Quantidade';
$string['reallydeletedrop'] = 'Tem a certeza de que pretende apagar esta localização?';
$string['reallydeleteitem'] = 'Tem a certeza de que pretende apagar este item?';
$string['reallyresetstashof'] = 'Tem a certeza de que pretende reinicializar completamente o inventário de {$a}?';
$string['report'] = 'Relatório';
$string['resetstashof'] = 'Reinicializar o inventário de {$a}';
$string['saveandnext'] = 'Guardar e seguinte';
$string['savechanges'] = 'Gravar alterações';
$string['settings'] = 'Configurações';
$string['setup'] = 'Configurar';
$string['shortcode:stashdrop'] = 'Mostrar um item para o utilizador recolher.';
$string['shortcode:stashtrade'] = 'Mostrar o widget de troca.';
$string['snippet'] = 'Código';
$string['stash'] = 'Inventário';
$string['stash:acquireitems'] = 'Utilizador é capaz de escolher itens';
$string['stash:addinstance'] = 'Adicionar o bloco a uma página';
$string['stash:view'] = 'Visualizar inventário e o seu conteúdo';
$string['stashdisabled'] = 'O inventário não está ativo. O bloco foi adicionado à disciplina?';
$string['text'] = 'Texto';
$string['thedrophasbeendeleted'] = 'A localização \'{$a}\' foi apagada';
$string['theitemhasbeendeleted'] = 'O item \'{$a}\' foi apagado';
$string['thestashofhasbeenreset'] = 'O inventário de {$a} foi reinicializado';
$string['thetradehasbeendeleted'] = 'O widget de troca \'{$a}\' foi eliminado.';
$string['thetradeitemhasbeendeleted'] = 'O item de troca foi eliminado.';
$string['title'] = 'Título';
$string['to'] = 'Para';
$string['trade'] = 'Trocar';
$string['tradecenter'] = 'Centro de tocas';
$string['tradecenter:zero'] = 'Selecione um item ou utilizador acima';
$string['tradecenterdetail:zero'] = 'Ao encontrar um item, verá uma lista de utilizadores que possuem esses itens para iniciar uma troca. Ao selecionar um utilizador, será apresentada uma lista dos seus artigos para troca.';
$string['tradecreated'] = 'Troca criada \'{$a}\\';
$string['tradedetails'] = 'Detalhes da troca';
$string['tradeitem'] = 'Item de troca';
$string['tradeitems'] = 'Itens de troca';
$string['tradelist'] = 'Lista de widgets de troca';
$string['tradename'] = 'Nome da Troca';
$string['tradename_help'] = 'Nome do widget de troca, que pode ser mostrado aos alunos.';
$string['tradesnotenabled'] = 'As trocas não estão ativas';
$string['tradestatusapproved'] = 'Troca aprovada';
$string['tradestatuscompleted'] = 'Troca concluída';
$string['tradestatusdeclined'] = 'Troca rejeitada';
$string['tradestatusviewed'] = 'Troca visualizada';
$string['tradewidget'] = 'Criar uma troca.';
$string['tradewidget_help'] = '<p>Este widget de troca permite ganhar itens da coluna à esquerda em troca de itens da coluna à direita.</p><p>Clique no símbolo + no fim da caixa para adicionar itens a essa coluna.</p><p>A quantidade de um item tem de ser um número positivo.</p>';
$string['unlimited'] = 'Ilimitado';
$string['useritemswap'] = 'Permitir que os alunos troquem os itens entre si.';
$string['view'] = 'ver';
$string['whataredrops'] = 'O que são localizações?';
$string['whatisadrophelp'] = 'Uma localização é um local onde pretende mostrar um item.';
$string['whatisatradedrophelp'] = 'Uma localização é o local onde pretende mostrar o seu widget de troca.';
$string['whatisthisthing'] = 'O que é isto? De certeza que lhe pode dar utilidade!';
$string['whatsnext'] = 'O que vem a seguir?';
$string['whatsthis'] = 'O que é isto?';
$string['yourinventoryisempty'] = 'O inventário está vazio.';
