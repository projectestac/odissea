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
 * Strings for component 'mediagallery', language 'pt', version '3.11'.
 *
 * @package     mediagallery
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addagallery'] = 'Adicionar uma galeria';
$string['addanitem'] = 'Adicionar um item';
$string['addbulkitems'] = 'Adicionar itens em massa';
$string['addfiles'] = 'Adicionar ficheiro(s)';
$string['addsamplegallery'] = 'Adicionar um exemplo de galeria';
$string['allowcomments'] = 'Permitir comentários';
$string['allowcomments_help'] = 'Permitir que os utilizadores comentem em itens e galerias.';
$string['allowlikes'] = 'Permitir "Gosto"';
$string['allowlikes_help'] = 'Permitir que os utilizadores \'gostem\' de itens numa galeria.';
$string['areagallery'] = 'Galerias';
$string['areaitem'] = 'Itens';
$string['arealowres'] = 'Baixa resolução';
$string['areathumbnail'] = 'Miniaturas';
$string['assignedit'] = 'Editar trabalho';
$string['assignsubmit'] = 'Submeter trabalho';
$string['assignsubmitted'] = 'Trabalho submetido';
$string['automatic'] = 'Automático';
$string['beingprocessed'] = 'em processamento';
$string['bottom'] = 'Fundo';
$string['broadcaster'] = 'Emissor';
$string['broadcaster_help'] = 'Quem foi o distribuidor que divulgou este trabalho?';
$string['caption'] = 'Legenda';
$string['caption_help'] = 'A legenda para este item na galeria. Esta legenda será exibida ao lado do item. Se optar por deixar em branco, o nome do ficheiro (ou o url) será exibido como legenda.';
$string['captionposition'] = 'Posição da legenda';
$string['carousel'] = 'Carrossel';
$string['choosecontent'] = 'Selecione um ficheiro para carregar ou um URL nas opções abaixo.';
$string['close'] = 'Fechar';
$string['collection'] = 'Coleção';
$string['collection_help'] = 'A coleção a partir da qual pesquisar.';
$string['collectionwasdeleted'] = 'Esta coleção já não existe e foi removida desta disciplina.';
$string['collmode'] = 'Modo da coleção';
$string['collmode_help'] = 'Isto decide se a coleção estará apenas no Moodle ou se será vinculada ao theBox. Uma vez definido, este valor não pode ser alterado.

<ul><li>Padrão: a coleção, respetivas galerias e itens, são armazenados exclusivamente no Moodle.</li></ul>';
$string['colltype'] = 'Tipo de coleção';
$string['colltype_help'] = 'O tipo de coleção determina o que nível os utilizadores podem interagir com a coleção e seu conteúdo.

<ul>
<li>Coleção de instrutor: apenas utilizadores que podem avaliar a coleção podem adicionar/editar o respetivo conteúdo. É usado principalmente para que os instrutores criem coleções de exemplo ou um conjunto de galerias sem permitir que os utilizadores criem as suas próprias galerias.</li>
<li>Coleção de contribuição: permite que os utilizadores criem as suas próprias galerias e itens, mas a coleção não pode ser usada como parte de uma submissão de um trabalho.</li>
<li>Coleção de trabalhos: os utilizadores só podem ver as galerias que eles ou os seus grupos criaram (se estiver no modo de grupo). Pode ser usado como parte de uma submissão de um trabalho.</li>
<li>Coleção de trabalhos revistos por pares: os utilizadores podem ver galerias de outros utilizadores/grupos e gostar/comentar se estas funcionalidades estiverem ativadas. Pode ser usado como parte de uma submissão de um trabalho.</li></ul>';
$string['colltypeassignment'] = 'Coleção de trabalhos';
$string['colltypecontributed'] = 'Coleção de contribuição';
$string['colltypeinstructor'] = 'Coleção de instrutor';
$string['colltypepeerreviewed'] = 'Coleção de trabalhos revistos por pares';
$string['colltypesingle'] = 'Coleção simples';
$string['comments'] = 'Comentários';
$string['completegallery'] = 'Galeria completa';
$string['configdisablestandardgallery'] = 'Impedir que os utilizadores criem galerias padrão.';
$string['configenablethebox'] = 'Tem de ser ativado para que os utilizadores criem novas coleções e conteúdo baseados no theBox. Se desativada, as coleções existentes do theBox exibirão uma mensagem a informar que a atividade está indisponível no momento. As coleções padrão não serão afetadas.';
$string['configmaxbytes'] = 'Tamanho máximo de ficheiro de item predefinido para todas as coleções multimédia no site (sujeito aos limites da disciplina e outras configurações locais)';
$string['confirmcollectiondelete'] = 'Confirmação para apagar coleção';
$string['confirmgallerydelete'] = 'Confirmação para apagar galeria';
$string['confirmitemdelete'] = 'Confirmação para apagar item';
$string['content'] = 'Conteúdo';
$string['content_help'] = 'O item que pretende adicionar à sua galeria.';
$string['contentbulk'] = 'Conteúdo';
$string['contentbulk_help'] = 'Pode selecionar um ficheiro Zip contendo várias imagens, que serão extraídas para o diretório de imagens após o carregamento.';
$string['contentbulkheader'] = 'Aqui pode carregar um ficheiro Zip com multimédia. Cada ficheiro dentro do Zip será adicionado como um item na galeria, por isso, certifique-se à priori de que estão no Zip apenas os ficheiros que pretende carregar. As pastas dentro do ficheiro Zip são ignoradas.';
$string['contentlinked'] = 'Conteúdo';
$string['contentlinked_help'] = 'Depois que um item é vinculado ao conteúdo no theBox, não é possível alterar o ficheiro vinculado.';
$string['contentlinkedinfo'] = 'Este item está vinculado ao ficheiro {$a} no theBox.';
$string['contributable'] = 'Contribuível';
$string['contributable_help'] = 'Quando uma galeria é de contribuição, ela permite que outros utilizadores adicionem conteúdo à sua galeria. Eles estarão limitados apenas a editar os seus próprios itens. O criador da galeria tem permissão para remover itens da galeria.';
$string['copyright'] = 'Direitos de autor';
$string['copyright_help'] = 'Define a licença de direitos de autor para todos os itens carregados através deste formulário.';
$string['createdby'] = 'Criada por: {$a}';
$string['creator'] = 'Criador';
$string['datecreated'] = 'Data de criação';
$string['deletegallery'] = 'Apagar galeria';
$string['deleteitem'] = 'Apagar item';
$string['deleteitemtype'] = 'Apagar {$a}';
$string['deleteorremovecollection'] = 'Se pretende remover a hiperligação para a coleção sem apagar o conteúdo, clique em Submeter.<br/><br/>

Se pretende remover a hiperligação para a coleção e apagar o conteúdo, digite DELETE na caixa de texto abaixo e clique em Submeter.';
$string['deleteorremovecollectionwarn'] = 'Ao apagar reconhece que está:<br/>
- a remover a hiperligação para a coleção multimédia<br/>
- a apagar a coleção e/ou todas as galerias e todo o conteúdo do theBox<br/>
- a desativar todas as hiperligações criadas noutras disciplinas para esta coleção ou para o seu conteúdo';
$string['deleteorremovegallery'] = 'Se pretende remover a hiperligação para a galeria sem apagar o conteúdo, clique em Submeter.<br/><br/>

Se pretende remover a hiperligação para a galeria e apagar o conteúdo, digite DELETE na caixa de texto abaixo e clique em Submeter.';
$string['deleteorremovegallerywarn'] = 'Ao apagar reconhece que está:<br/>
- a remover a hiperligação para a galeria multimédia<br/>
- a apagar a galeria e todo o conteúdo do theBox<br/>
- a desativar todas as hiperligações criadas noutras disciplinas para esta galeria ou para o seu conteúdo';
$string['deleteorremoveitem'] = 'Se pretende remover a hiperligação para a galeria sem apagar o conteúdo, clique em Submeter.<br/><br/>

Se pretende remover a hiperligação para a galeria e apagar o conteúdo, digite DELETE na caixa de texto abaixo e clique em Submeter.';
$string['deleteorremoveitemwarn'] = 'Ao apagar reconhece que está:<br/>
- a remover a hiperligação para o item multimédia<br/>
- a apagar o item multimédia do theBox<br/>
- a desativar todas as hiperligações criadas noutras disciplinas para este item multimédia';
$string['disablestandardgallery'] = 'Desativar galerias padrão';
$string['displayfullcaption'] = 'Exibir o texto completo da legenda';
$string['download'] = 'Descarregar';
$string['editgallery'] = 'Editar galeria';
$string['editgallerysettings'] = 'Editar configurações da galeria';
$string['edititem'] = 'Editar item';
$string['edititemtype'] = 'Editar {$a}';
$string['editthisgallery'] = 'Editar esta galeria';
$string['enablethebox'] = 'Ativar theBox';
$string['enforcedefaults'] = 'Forçar predefinições da galeria';
$string['enforcedefaults_help'] = 'Se ativar esta opção, serão aplicadas as predefinições da galeria determinados pelo instrutor.';
$string['errorchooseimportoption'] = 'Selecione uma opção de importação';
$string['errornotyouritem'] = 'Não pode editar este objeto multimédia. Pertence a outro utilizador.';
$string['errortheboxunavailable'] = 'Parece que theBox não está disponível de momento. Por favor, tente novamente mais tarde.';
$string['errortoomanygalleries'] = 'Desculpe, você ou o seu grupo excedeu o número máximo de galerias permitidas nesta coleção ({$a}).';
$string['errortoomanyitems'] = 'Esta galeria já possui o número máximo de itens permitidos ({$a}).';
$string['eventcollectiondeleted'] = 'Coleção apagada';
$string['eventgallerycreated'] = 'Galeria criada';
$string['eventgallerydeleted'] = 'Galeria apagada';
$string['eventgalleryupdated'] = 'Galeria atualizada';
$string['eventgalleryviewed'] = 'Galeria visualizada';
$string['eventitemcreated'] = 'Item criado';
$string['eventitemdeleted'] = 'Item apagado';
$string['eventitemupdated'] = 'Item atualizado';
$string['exifmissing'] = 'Sem isto, os ficheiros jpg/tiff não podem ser rodados para a orientação correta em coleções multimédia.';
$string['export'] = 'Exportar';
$string['exportascsv'] = 'Exportar como CSV';
$string['exportgallery'] = 'Exportar galeria';
$string['externalurl'] = 'URL externo';
$string['externalurl_help'] = 'Atualmente são suportadas hiperligações para imagens e vídeos do YouTube.';
$string['filename'] = 'Nome do ficheiro';
$string['filesize'] = 'Tamanho do ficheiro';
$string['foundxresults'] = 'Resultados da pesquisa: {$a}';
$string['gallery'] = 'Galeria';
$string['galleryfocus'] = 'Foco da galeria';
$string['galleryfocus_help'] = 'O foco predefinido da galeria (determina quais tipos de ficheiro são apresentados como foco da galeria). Se definido como uma galeria do YouTube, o foco é bloqueado para Vídeo.';
$string['galleryname'] = 'Nome';
$string['gallerythumbnail'] = 'Usar com miniatura';
$string['gallerythumbnail_help'] = 'Se selecionado, a miniatura deste item é usada como miniatura da galeria.';
$string['galleryviewoptions'] = 'Opções de visualização da galeria';
$string['galleryviewoptions_help'] = 'Determina as opções de visualização da galeria que estão disponíveis para os alunos.';
$string['gridview'] = 'Grelha';
$string['gridviewcolumns'] = 'Colunas na vista de grelha';
$string['gridviewcolumns_help'] = 'Número de colunas mostradas na vista de grelha.';
$string['gridviewrows'] = 'Linhas na vista de grelha';
$string['gridviewrows_help'] = 'Número de linhas mostradas na vista de grelha.';
$string['group'] = 'Grupo';
$string['group_help'] = 'Como é membro de vários grupos (ou tem permissão para gerir grupos nesta disciplina), defina o grupo ao qual deseja associar a galeria.';
$string['information'] = 'Informação';
$string['itemdisplay'] = 'Visualização do item';
$string['itemdisplay_help'] = 'Incluir este item na exibição da galeria (por exemplo, carrossel).';
$string['like'] = 'Gosto';
$string['likedby'] = 'Gosto por';
$string['maxbytes'] = 'Tamanho máximo (por item)';
$string['maxgalleries'] = 'Máximo de galerias por utilizador/grupo';
$string['maxgalleries_help'] = 'O número máximo de galerias que um utilizador (ou grupo se usar modo de grupo) pode criar nesta coleção.

Atenção: Em coleções de instrutores, este valor é sempre ilimitado.';
$string['maxgalleriesreached'] = 'Número máximo de galerias adicionadas';
$string['maxitems'] = 'Número máximo itens por galeria';
$string['maxitems_help'] = 'O número máximo de itens que um utilizador pode colocar numa galeria desta coleção.

Atenção: Em coleções de instrutores, este valor é sempre ilimitado.';
$string['maxitemsreached'] = 'Adicionado o número máximo de itens';
$string['mediagallery'] = 'Coleção multimédia';
$string['mediagallery:addinstance'] = 'Adicionar uma instância de Coleção multimédia';
$string['mediagallery:comment'] = 'Comentar numa galeria ou item de coleção multimédia';
$string['mediagallery:grade'] = 'Avaliar galeria multimédia';
$string['mediagallery:like'] = 'Capacidade de gostar de itens numa coleção multimédia';
$string['mediagallery:manage'] = 'Gerir uma instância de coleção multimédia';
$string['mediagallery:viewall'] = 'Permissão de visualizar todas as galerias de um coleção multimédia';
$string['mediagalleryfieldset'] = 'Conjunto de campos de exemplo personalizado';
$string['mediagalleryname'] = 'Nome da coleção multimédia';
$string['mediagalleryname_help'] = 'O nome que pretende dar à sua coleção multimédia.';
$string['mediainformation'] = 'Informação';
$string['mediasize'] = 'Tamanho';
$string['mediasizelg'] = 'Grande';
$string['mediasizemd'] = 'Médio';
$string['mediasizesm'] = 'Pequeno';
$string['mediatype'] = 'Tipo';
$string['medium'] = 'Meio';
$string['medium_help'] = 'Meio usado para criar o trabalho (exemplo: pintura, fotografia, som, etc).';
$string['metainfobulkheader'] = 'Os valores abaixo serão usados como metadados iniciais para cada um dos itens adicionados acima.';
$string['mode'] = 'Modo da galeria';
$string['mode_help'] = 'Define o tipo de conteúdo que a galeria suporta. Uma vez definido, este valor não pode ser alterado.

<ul><li>Standard: os utilizadores podem adicionar qualquer tipo de conteúdo multimédia.</li>
<li>YouTube: apenas podem ser adicionados à galeria vídeos do YouTube.</li></ul>';
$string['modestandard'] = 'Padrão';
$string['modethebox'] = 'theBox';
$string['modeyoutube'] = 'YouTube';
$string['modulename'] = 'Coleção multimédia';
$string['modulename_help'] = 'Use o módulo Coleção multimédia para criar galerias de conteúdo multimédia.

Os utilizadores podem criar as suas próprias galerias de imagens, vídeo ou áudio por sua própria ou em grupos.


O conteúdo carregado será apresentado em formato de carrossel ou como miniaturas em grelha. Clique em qualquer uma das miniaturas para focar a imagem e permitir que navegue pela galeria. Os utilizadores podem "Gostar" e comentar o conteúdo que podem ver nas suas próprias galerias e noutras.';
$string['modulenameplural'] = 'Coleções multimédia';
$string['moralrights'] = 'Direitos morais';
$string['moralrights_help'] = 'Pretende fazer valer os seus direitos morais?

Ao selecionar sim, está a conceder o seu consentimento para que este item seja potencialmente usado como uma amostra de trabalho.';
$string['noitemsadded'] = 'Nenhum item foi adicionado a esta galeria.';
$string['noitemsfound'] = 'Nenhum item encontrado.';
$string['noitemsselected'] = 'Nenhum item foi selecionado para exportação.';
$string['originalauthor'] = 'Autor original';
$string['originalauthor_help'] = 'O autor original do item.';
$string['other'] = 'outro';
$string['otherfiles'] = 'Outros ficheiros';
$string['others'] = 'outros';
$string['pluginadministration'] = 'Administração da coleção multimédia';
$string['pluginname'] = 'Coleção multimédia';
$string['privacy:metadata:mediagallery_item:externalurl'] = '';
$string['privacy:metadata:mediagallery_item:medium'] = 'Ferramenta usada para criar o trabalho.';
$string['privacy:metadata:mediagallery_item:moralrights'] = 'Se o utilizador reivindicou os seus direitos morais sobre o item.';
$string['privacy:metadata:mediagallery_item:reference'] = '';
$string['productiondate'] = 'Data de produção';
$string['productiondate_help'] = 'A data de produção do original.';
$string['publisher'] = 'Publicador';
$string['publisher_help'] = 'O editor da obra (se houver).';
$string['readonlyfrom'] = 'Disponível a partir de';
$string['readonlyto'] = 'Disponível até';
$string['reference'] = 'Referência';
$string['reference_help'] = 'Referência à coleção (se houver) da qual o trabalho faz parte.';
$string['removecollectionconfirm'] = 'Tem a certeza de que pretende apagar a hiperligação para esta coleção?';
$string['removefromcollection'] = 'Remover da coleção';
$string['removefromgallery'] = 'Remover da galeria';
$string['removegalleryconfirm'] = 'Tem a certeza de que pretende apagar a hiperligação para esta galeria?';
$string['removeitemconfirm'] = 'Tem a certeza de que pretende remover a hiperligação para este item?';
$string['removethecollection'] = 'Remover/apagar a coleção';
$string['restrictavailableinfo'] = 'Para restringir as datas entre as quais esta atividade está disponível, use a secção Condições de acesso abaixo.';
$string['sample'] = 'Exemplo';
$string['search'] = 'Pesquisar';
$string['search_help'] = 'Digite as palavras-chave que pretende pesquisar.';
$string['searchcourseonly'] = 'Apenas esta disciplina';
$string['searchcourseonly_help'] = 'Só pretende pesquisar itens em galerias multimédia nesta disciplina?';
$string['searchdisplayxtoyofzresults'] = '{$a->total} resultado(s) encontrado(s). A mostrar {$a->from}-{$a->to}:';
$string['searchresults'] = 'Resultados da pesquisa';
$string['searchtitle'] = 'Pesquisa na coleção multimédia';
$string['selection'] = 'Seleção';
$string['settingsavailability'] = 'Disponibilidade';
$string['settingsdisplay'] = 'Mostrar lista';
$string['settingsgallery'] = 'Predefinições da galeria';
$string['settingsgallerydisplay'] = 'Exibição da galeria';
$string['settingsvisibility'] = 'Visibilidade';
$string['showall'] = 'Mostrar tudo';
$string['storagereport'] = 'Armazenamento de coleção multimédia';
$string['storagetotalusage'] = 'Uso total de armazenamento no site: {$a}.';
$string['submittedforgrading'] = 'Submetido para avaliação';
$string['synclastcompleted'] = 'Última sincronização concluída';
$string['syncwiththebox'] = 'Sincronizar desde theBox';
$string['tagarea_mediagallery'] = 'Coleções multimédia';
$string['tagarea_mediagallery_gallery'] = 'Galerias multimédia';
$string['tagarea_mediagallery_item'] = 'Itens multimédia';
$string['tags'] = 'Palavras-chave';
$string['theboxisnotenabled'] = 'De momento, esta coleção não está acessível uma vez que está vinculada ao theBox, que de momento não está ativado.';
$string['thumbnail'] = 'Miniatura';
$string['thumbnail_help'] = 'Pode selecionar uma imagem para usar como miniatura na galeria para este item.

Se não fornecer um, um será gerado para si a partir do recurso carregado (para imagens) ou de um ícone de tipo de ficheiro usado (para outros ficheiros).';
$string['thumbnailsperpage'] = 'Miniaturas por página';
$string['thumbnailsperrow'] = 'Miniaturas por linha';
$string['togglefullscreen'] = 'Alternar modo ecrã inteiro';
$string['togglesidebar'] = 'Alternar barra lateral';
$string['toomany'] = 'Muitas galerias. Apague ou altere o tipo de coleção';
$string['top'] = 'Topo';
$string['typeall'] = 'Todos os ficheiros';
$string['typeaudio'] = 'Áudio';
$string['typeimage'] = 'Imagem';
$string['typevideo'] = 'Vídeo';
$string['unlike'] = 'Não gosto';
$string['uploader'] = 'Quem carregou';
$string['viewgallery'] = 'Visualizar galeria';
$string['visibleinstructor'] = 'Visível para instrutores apenas após';
$string['visibleinstructor_help'] = 'Defina a data e hora a partir da qual a galeria estará visível para os instrutores da disciplina. Pode ser útil para permitir que os instrutores acedam antes de todos os outros utilizadores. Os gestores da disciplina com as permissões apropriadas poderão sempre ver a galeria.';
$string['visibleother'] = 'Visível para todos na disciplina após';
$string['visibleother_help'] = 'Defina a data e hora a partir da qual a galeria estará visível para os outros utilizadores da disciplina. Os gestores da disciplina com as permissões apropriadas poderão sempre ver a galeria.';
$string['you'] = 'Utilizador';
$string['youmusttypedelete'] = 'Tem de digitar DELETE para confirmar a ação de apagar.';
$string['youtubeurl'] = 'URL Youtube';
