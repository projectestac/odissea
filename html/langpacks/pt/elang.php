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
 * Strings for component 'elang', language 'pt', version '4.5'.
 *
 * @package     elang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedlanguages'] = 'Idiomas de conteúdo permitidos';
$string['allowedlanguages_desc'] = 'Os idiomas de conteúdo oferecidos ao criar ou editar um ditado em vídeo. Não selecione nenhum para oferecer a lista completa. Uma atividade mantém o idioma guardado mesmo que o remova daqui mais tarde.';
$string['allowtranscriptdownload'] = 'Transferência da transcrição pelos participantes';
$string['allowtranscriptdownload_help'] = 'Quando está ativo, os participantes podem transferir a ficha de trabalho da transcrição, com cada lacuna oculta, como PDF, Word, OpenDocument ou texto.

Está inativo por predefinição. O pessoal docente com permissão pode transferir a transcrição sempre, seja qual for esta definição.';
$string['allowtranscriptdownload_label'] = 'Os participantes podem transferir a ficha de trabalho';
$string['completiondetail_completionfinishattempt'] = 'Concluir uma tentativa';
$string['completionfinishattempt'] = 'O participante tem de concluir uma tentativa';
$string['cuepausemode'] = 'Pausa no fim das legendas';
$string['cuepausemode_auto'] = 'Automático';
$string['cuepausemode_help'] = 'Se o média para no fim de uma legenda.

* Automático — a reprodução continua e só para no fim de uma legenda enquanto se estiver a trabalhar nessa legenda, ou seja, depois de clicar nela ou numa das suas lacunas, ou quando o foco do teclado está numa delas.
* Parar em cada legenda sem resposta — a reprodução para no fim de cada legenda que ainda tem uma lacuna vazia e espera que seja retomada.
* Nunca parar — a reprodução continua até ao fim do média.

Nenhum dos dois primeiros modos para numa legenda cujas lacunas estejam todas preenchidas: isso é trabalho terminado, e parar aí pediria uma tecla sem efeito. Significa também que uma segunda passagem pelo exercício só para onde ainda falta alguma coisa.';
$string['cuepausemode_nostop'] = 'Nunca parar';
$string['cuepausemode_stop'] = 'Parar em cada legenda sem resposta';
$string['editcontent'] = 'Editar o conteúdo';
$string['editor_addcue'] = 'Adicionar segmento';
$string['editor_addgap'] = 'Criar uma lacuna a partir da seleção';
$string['editor_addhint'] = 'Adicionar pista';
$string['editor_addvariant'] = 'Adicionar variante';
$string['editor_advanced'] = 'Definições avançadas';
$string['editor_algoexact'] = 'Correspondência exata';
$string['editor_algorithm'] = 'Comparação de respostas';
$string['editor_algowordrecognized'] = 'Aceitar respostas próximas';
$string['editor_answers'] = 'Variantes aceites';
$string['editor_autosaved'] = 'Todas as alterações foram guardadas.';
$string['editor_autosaveerror'] = 'Não foi possível guardar automaticamente — use Guardar para tentar de novo.';
$string['editor_captureend'] = 'Definir o fim a partir da reprodução';
$string['editor_capturestart'] = 'Definir o início a partir da reprodução';
$string['editor_cueactions'] = 'Ações do segmento';
$string['editor_cuecount'] = 'Segmentos: {$a}';
$string['editor_currentmedia'] = 'Média atual:';
$string['editor_deletecue'] = 'Eliminar o segmento';
$string['editor_deletegap'] = 'Eliminar a lacuna';
$string['editor_emptytranscript'] = '(ainda sem texto)';
$string['editor_endtime'] = 'Fim';
$string['editor_formatsubrip'] = 'SubRip (.srt)';
$string['editor_formatwebvtt'] = 'WebVTT (.vtt)';
$string['editor_gapcount'] = 'Lacunas: {$a}';
$string['editor_gaprange'] = 'Posição da lacuna (caracteres)';
$string['editor_gotomedia'] = 'Ir para Média';
$string['editor_heading'] = 'Editar legendas e lacunas';
$string['editor_hints'] = 'Pistas';
$string['editor_hinttext'] = 'Texto da pista';
$string['editor_hinttype'] = 'Tipo';
$string['editor_hinttype_firstletter'] = 'Primeira letra';
$string['editor_hinttype_partial'] = 'Parcial';
$string['editor_hinttype_solution'] = 'Solução';
$string['editor_hinttype_text'] = 'Texto livre';
$string['editor_hinttype_translation'] = 'Tradução';
$string['editor_hinttype_wordlength'] = 'Comprimento da palavra';
$string['editor_import'] = 'Importar legendas';
$string['editor_importappend'] = 'Acrescentar aos segmentos existentes';
$string['editor_importapply'] = 'Importar';
$string['editor_importcancel'] = 'Cancelar';
$string['editor_importcheck'] = 'Verificar o conteúdo';
$string['editor_importchecking'] = 'A verificar…';
$string['editor_importcuecount'] = 'Segmentos encontrados';
$string['editor_importduration'] = 'Duração';
$string['editor_importedcues'] = 'Segmentos importados: {$a}';
$string['editor_importfilehint'] = 'Escolha um ficheiro WebVTT (.vtt) ou SubRip (.srt) com legendas.';
$string['editor_importformat'] = 'Formato';
$string['editor_importfromfile'] = 'Carregar um ficheiro';
$string['editor_importfromtext'] = 'Colar texto';
$string['editor_importgapcount'] = 'Lacunas encontradas';
$string['editor_importhint'] = 'Cole conteúdo WebVTT ou SubRip e importe-o como segmentos.';
$string['editor_importparseerror'] = 'Não foi possível ler este conteúdo como WebVTT ou SubRip.';
$string['editor_importpastedtext'] = 'Texto colado';
$string['editor_importreaderror'] = 'Não foi possível ler o ficheiro.';
$string['editor_importready'] = 'Pronto a importar';
$string['editor_importreplace'] = 'Substituir todos os segmentos';
$string['editor_importreplacedcues'] = 'Segmentos substituídos; importados de novo: {$a}';
$string['editor_importsource'] = 'Origem';
$string['editor_importsummary'] = 'O que foi encontrado';
$string['editor_importtoolarge'] = 'Este ficheiro ocupa {$a->size}; a importação aceita no máximo {$a->max}.';
$string['editor_importwrongtype'] = 'Escolha um ficheiro de legendas ({$a}).';
$string['editor_insertafter'] = 'Inserir um segmento a seguir';
$string['editor_insertbefore'] = 'Inserir um segmento antes';
$string['editor_invalidtime'] = 'Introduza um tempo no formato mm:ss.SSS, por exemplo 01:05.400.';
$string['editor_linkurl'] = 'Ligação de referência';
$string['editor_linkurl_help'] = 'Mostrada junto à lacuna como sítio onde consultar a palavra. Deixe vazio para não oferecer nenhuma.';
$string['editor_loaderror'] = 'Não foi possível carregar o editor. Recarregue a página.';
$string['editor_loading'] = 'A carregar o editor…';
$string['editor_maxlength'] = 'Comprimento máximo';
$string['editor_maxlength_help'] = 'Limita quanto um participante pode escrever. 0 significa sem limite.';
$string['editor_media'] = 'Média';
$string['editor_mediafile'] = 'Ficheiro carregado';
$string['editor_mediakind'] = 'Tipo de média';
$string['editor_medianone'] = 'Nenhum';
$string['editor_mediaprovider'] = 'Fornecedor';
$string['editor_mediaproviderref'] = 'Referência do fornecedor';
$string['editor_mediaproviderrefhint'] = 'Identificador ou ligação do vídeo numa forma comum (por exemplo youtu.be/…).';
$string['editor_mediasaved'] = 'Média guardado.';
$string['editor_mediaurl'] = 'URL direto do média';
$string['editor_nocues'] = 'Ainda não há segmentos. Adicione um ou importe legendas.';
$string['editor_nocueselected'] = 'Selecione um segmento da lista para o editar.';
$string['editor_nocuesmatch'] = 'Nenhum segmento corresponde a esta pesquisa.';
$string['editor_nogaps'] = 'Sem lacunas';
$string['editor_nomedia'] = 'nenhum';
$string['editor_nomedianotice'] = 'Acrescente primeiro o ficheiro de vídeo ou áudio no separador Média. As legendas são sincronizadas com o média, por isso o editor precisa dele antes de poder trabalhar em segmentos e lacunas.';
$string['editor_novideotrack'] = 'Este navegador não consegue descodificar a faixa de vídeo deste média (só o áudio é reproduzido); os participantes veriam uma imagem preta. Recodifique o ficheiro como H.264/MP4 (por exemplo com ffmpeg ou HandBrake) e carregue-o de novo.';
$string['editor_onboardinggaps'] = 'Selecione uma palavra num segmento e transforme-a numa lacuna.';
$string['editor_onboardingimport'] = 'Importe legendas WebVTT/SubRip, ou acrescente segmentos à mão.';
$string['editor_onboardingintro'] = 'Crie um exercício em três passos:';
$string['editor_onboardingmedia'] = 'Escolha um média (carregamento, URL ou fornecedor).';
$string['editor_onboardingtitle'] = 'Comece o seu exercício';
$string['editor_onlywarnings'] = 'Apenas os segmentos com avisos';
$string['editor_parsegaps'] = 'Reconhecer as marcas de lacuna: [palavra] cria uma lacuna com pistas permitidas, {palavra} uma sem elas.';
$string['editor_penalty'] = 'Penalização';
$string['editor_poster'] = 'Imagem de capa';
$string['editor_preview'] = 'Pré-visualização do participante';
$string['editor_publish'] = 'Publicar';
$string['editor_published'] = 'Versão publicada.';
$string['editor_removehint'] = 'Remover a pista';
$string['editor_removevariant'] = 'Remover';
$string['editor_ruleapplied'] = 'Criadas %count% lacunas a partir da regra.';
$string['editor_ruleapply'] = 'Aplicar %count% lacunas';
$string['editor_ruleerror'] = 'Não foi possível gerar as lacunas.';
$string['editor_ruleeverynth'] = 'A cada n palavras';
$string['editor_rulefound'] = 'A regra encontrou %count% lacunas.';
$string['editor_rulegenerate'] = 'Gerar lacunas';
$string['editor_ruleinterval'] = 'Intervalo (n)';
$string['editor_ruletype'] = 'Regra de lacunas';
$string['editor_rulewordlist'] = 'Palavras a ocultar';
$string['editor_rulewords'] = 'Lista de palavras';
$string['editor_save'] = 'Guardar o rascunho';
$string['editor_saved'] = 'Rascunho guardado.';
$string['editor_saveerror'] = 'Não foi possível guardar o rascunho.';
$string['editor_savemedia'] = 'Guardar o média';
$string['editor_saving'] = 'A guardar…';
$string['editor_searchcues'] = 'Pesquisar nos segmentos';
$string['editor_selecttext'] = 'Selecione primeiro a palavra a ocultar na transcrição.';
$string['editor_solution'] = 'Solução';
$string['editor_starttime'] = 'Início';
$string['editor_transcript'] = 'Transcrição';
$string['editor_unsaved'] = 'Alterações por guardar';
$string['editor_uploadmedia'] = 'Carregar ficheiros de média';
$string['editor_variantisregex'] = 'Tratar {$a} como expressão regular';
$string['editor_variantmatching'] = 'Como são comparadas as variantes aceites';
$string['editor_warnemptysolution'] = 'Uma lacuna sem solução';
$string['editor_warnnotranscript'] = 'Sem texto';
$string['editor_warntiming'] = 'O fim não é posterior ao início';
$string['editor_waveform'] = 'Forma de onda do áudio';
$string['elang:addinstance'] = 'Adicionar um novo ditado em vídeo';
$string['elang:attempt'] = 'Realizar um ditado em vídeo';
$string['elang:deleteattempts'] = 'Eliminar as tentativas dos participantes';
$string['elang:exportreports'] = 'Exportar relatórios com dados pessoais';
$string['elang:exportsolution'] = 'Exportar a transcrição completa com as soluções';
$string['elang:exporttranscript'] = 'Exportar a ficha de trabalho como documento';
$string['elang:manage'] = 'Criar e editar o conteúdo dos exercícios';
$string['elang:useregex'] = 'Usar expressões regulares nas respostas aceites';
$string['elang:view'] = 'Ver um ditado em vídeo';
$string['elang:viewreports'] = 'Ver os relatórios dos participantes';
$string['error_attemptnotinprogress'] = 'Esta tentativa já não está em curso.';
$string['error_couldnotobtainlock'] = 'Não foi possível obter um bloqueio para esta operação. Tente de novo.';
$string['error_draftrevisionmismatch'] = 'Este rascunho mudou desde que o carregou. Recarregue-o e tente de novo.';
$string['error_duplicatecuekey'] = 'Dois segmentos partilham a chave «{$a}»; cada segmento precisa de uma chave única.';
$string['error_duplicategapkey'] = 'Duas lacunas do mesmo segmento partilham a chave «{$a}»; cada lacuna precisa de uma chave única.';
$string['error_duplicatehintlevel'] = 'Uma lacuna tem duas pistas no nível {$a}; cada nível tem de ser único.';
$string['error_gapnotinattemptversion'] = 'Esta lacuna não pertence à versão do exercício desta tentativa.';
$string['error_importnocues'] = 'Não foi possível ler nenhuma legenda deste conteúdo. Um ficheiro WebVTT ou SubRip tem uma linha de tempo como 00:00:01.000 --> 00:00:04.000 acima de cada legenda.';
$string['error_importnotutf8'] = 'Este ficheiro não é UTF-8 válido. Foi provavelmente guardado numa codificação antiga — abra-o num editor de texto e guarde-o de novo como UTF-8.';
$string['error_importtoolarge'] = 'Este ficheiro ocupa {$a->size}; a importação aceita no máximo {$a->max}. Um ficheiro de legendas da gravação de uma aula é muito mais pequeno, por isso é pouco provável que seja um.';
$string['error_importtoomanycues'] = 'Este ficheiro contém {$a->count} legendas; a importação aceita no máximo {$a->max}.';
$string['error_invalidcuepausemode'] = 'Escolha uma das opções disponíveis para a pausa no fim das legendas.';
$string['error_invalidgradingalgorithm'] = 'O algoritmo de avaliação «{$a}» não é exact nem wordrecognized.';
$string['error_invalidhinttype'] = 'O tipo de pista «{$a}» não é um dos tipos permitidos.';
$string['error_invalidisregex'] = 'O marcador de expressão regular de uma variante tem de ser 0 ou 1.';
$string['error_invalidmediakind'] = 'O tipo de média escolhido não é file, url nem provider.';
$string['error_invalidpenalty'] = 'A penalização de uma pista tem de estar entre 0 e 1.';
$string['error_invalidproviderref'] = '«{$a}» não é um identificador ou ligação de vídeo reconhecido para este fornecedor.';
$string['error_invalidregexpattern'] = '«{$a}» não é uma expressão regular válida.';
$string['error_invalidsolutionavailability'] = 'Escolha uma das opções disponíveis para quando os participantes podem ver a transcrição com as soluções.';
$string['error_invalidsourceurl'] = 'Introduza um endereço completo que comece por http:// ou https://, ou uma ligação do YouTube ou Vimeo.';
$string['error_invalidsubtitleposition'] = 'Escolha uma das opções disponíveis para onde as legendas são mostradas.';
$string['error_invalidv1cuejson'] = 'Não foi possível processar este segmento da versão 1.';
$string['error_negativegapoffset'] = 'A posição e o comprimento de uma lacuna não podem ser negativos.';
$string['error_noaccesstoattempt'] = 'Não tem acesso a esta tentativa.';
$string['error_nomorehints'] = 'Não há mais pistas disponíveis para esta lacuna.';
$string['error_nopublishedversion'] = 'Este exercício ainda não tem conteúdo publicado.';
$string['error_responsetoolong'] = 'A sua resposta é demasiado longa. O máximo para esta lacuna é de {$a} caracteres.';
$string['error_solutionnotavailable'] = 'A transcrição com as soluções não está disponível para si nesta atividade.';
$string['error_staleattemptstate'] = 'A sua vista desta tentativa está desatualizada. Recarregue o estado atual e tente de novo.';
$string['error_transcriptnotavailable'] = 'Não há nenhuma transcrição disponível para transferir nesta atividade.';
$string['error_unknowngaprule'] = 'Tipo de regra de lacunas desconhecido «{$a}».';
$string['error_unknownmediaprovider'] = '«{$a}» não é um dos fornecedores de média suportados.';
$string['error_versionnotadraft'] = 'Só pode ser editada uma versão em estado de rascunho.';
$string['error_versionnotfound'] = 'Esta versão do exercício já não existe.';
$string['error_versionnotpublishable'] = 'Esta versão não pode ser publicada: {$a}';
$string['export_audienceaftersubmission'] = 'Os participantes podem transferi-la depois de concluírem uma tentativa';
$string['export_audiencealways'] = 'Os participantes podem transferi-la a qualquer momento';
$string['export_audiencestaff'] = 'Apenas pessoal docente com permissão — não disponível para os participantes';
$string['export_docx'] = 'Transferir como Word (DOCX)';
$string['export_downloadpdf'] = 'Transferir o PDF';
$string['export_heading'] = 'Exportar a transcrição';
$string['export_intro'] = 'Transfira a transcrição deste exercício em vários formatos.';
$string['export_moreformats'] = 'Mais formatos';
$string['export_nocontent'] = 'Ainda não há nenhuma transcrição publicada para exportar.';
$string['export_odt'] = 'Transferir como OpenDocument (ODT)';
$string['export_pdf'] = 'Transferir como PDF';
$string['export_solution'] = 'Transcrição com as soluções';
$string['export_solutionhint'] = 'O texto completo com a solução de cada lacuna visível.';
$string['export_text'] = 'Transferir como texto';
$string['export_versionnote'] = 'As exportações baseiam-se na versão atualmente publicada deste exercício.';
$string['export_worksheet'] = 'Ficha de trabalho (lacunas ocultas)';
$string['export_worksheethint'] = 'O texto com cada lacuna oculta. Pronto a distribuir como material dos participantes.';
$string['exporttranscript'] = 'Exportar a transcrição';
$string['filearea_media'] = 'Média';
$string['filearea_poster'] = 'Imagem de capa';
$string['gradingheading'] = 'Avaliação das respostas';
$string['import_badtiming'] = 'Não foi possível ler a linha de tempo: {$a}';
$string['import_emptytranscript'] = 'Um segmento sem texto foi ignorado.';
$string['import_warnlinetoolong'] = 'O bloco {$a->block} foi ignorado: contém uma linha com mais de {$a->max} caracteres, o que não é uma linha de legenda.';
$string['jarothreshold'] = 'Limiar de semelhança';
$string['jarothreshold_help'] = 'Para as lacunas definidas como «Aceitar respostas próximas», este é o valor mínimo de semelhança de Jaro entre a resposta esperada e a escrita. O valor 1 exige uma correspondência exata após a normalização própria do idioma; valores mais baixos aceitam grafias cada vez mais diferentes.';
$string['jarothresholdrange'] = 'O limiar tem de estar entre 0 e 1.';
$string['language'] = 'Idioma do conteúdo';
$string['language_help'] = 'Escolha o idioma do conteúdo do exercício. Determina como as respostas são comparadas, incluindo maiúsculas e minúsculas e a transliteração. Escolha «Genérico (não especificado)» se não deve ser aplicado nenhum tratamento próprio de um idioma. As novas versões de conteúdo partem desta definição.';
$string['language_none'] = 'Genérico (não especificado)';
$string['media_cuenote'] = 'As legendas e lacunas existentes são mantidas quando muda de média. Os respetivos tempos não são ajustados, por isso verifique-os depois no editor.';
$string['media_current'] = 'Média atual';
$string['media_heading'] = 'Média';
$string['media_intro'] = 'Escolha o vídeo ou o áudio em que este exercício assenta. As legendas são sincronizadas com ele, por isso vem primeiro.';
$string['media_none'] = 'Ainda não foi definido nenhum média para este exercício.';
$string['media_othersource'] = 'Outra origem';
$string['media_providerhint'] = 'Fornecedores reconhecidos: {$a}. Qualquer outro endereço é usado como URL direto do média.';
$string['media_sourceurl'] = 'URL do média';
$string['media_sourceurl_help'] = 'Cole o endereço de um vídeo em vez de carregar um ficheiro — uma ligação do YouTube ou do Vimeo, ou o endereço direto de um ficheiro de média.

Um endereço introduzido aqui substitui um ficheiro carregado. Deixe-o vazio para usar o carregamento acima.

Um vídeo de fornecedor é reproduzido na moldura do próprio fornecedor, que não comunica o tempo de reprodução. Um exercício destes mostra sempre as legendas por baixo do média e nunca para no fim das legendas.

**Para onde vão os dados.** Uma moldura do YouTube ou do Vimeo liga o navegador de cada participante a essa empresa, que recebe assim o seu endereço IP e os dados do seu dispositivo. Por predefinição, o exercício pergunta antes de o fazer. Se a sua instituição tem um servidor de média próprio — Opencast, Panopto, Kaltura ou semelhante — cole antes o endereço direto do ficheiro a partir daí: é tratado como um URL de média normal, mantém a posição das legendas e a definição de pausa que escolheu, e não há nenhum terceiro envolvido.';
$string['migratev1_approvalheading'] = 'Migradas, a aguardar verificação';
$string['migratev1_approvebutton'] = 'Aprovar esta migração';
$string['migratev1_approved'] = 'O ditado em vídeo {$a} foi marcado como aprovado.';
$string['migratev1_colactivity'] = 'Atividade';
$string['migratev1_colalgorithm'] = 'Algoritmo de avaliação';
$string['migratev1_colcues'] = 'Segmentos';
$string['migratev1_colgaps'] = 'Lacunas';
$string['migratev1_colissues'] = 'Problemas';
$string['migratev1_collearners'] = 'Participantes';
$string['migratev1_confirmdecommission'] = 'Isto elimina DE FORMA IRREVERSÍVEL as tabelas antigas da versão 1 e elang.options. Não é possível anular. Continuar?';
$string['migratev1_confirmmigrate'] = 'Isto coloca em fila uma tarefa em segundo plano que escreve os dados da versão 2 para cada atividade listada acima. As tabelas da versão 1 e elang.options ficam intactas. Continuar?';
$string['migratev1_decommissionblocked'] = 'A eliminação continua bloqueada; veja a lista abaixo.';
$string['migratev1_decommissionblockedintro'] = 'A eliminação está bloqueada até que:';
$string['migratev1_decommissionbutton'] = 'Eliminar os dados antigos da versão 1';
$string['migratev1_decommissioned'] = 'Os dados antigos da versão 1 foram eliminados.';
$string['migratev1_decommissionheading'] = 'Desativação dos dados da versão 1';
$string['migratev1_decommissionready'] = 'Todas as atividades da versão 1 foram migradas e aprovadas. As tabelas antigas e elang.options podem agora ser eliminadas. Esta operação é irreversível.';
$string['migratev1_heading'] = 'Migrar as atividades da versão 1';
$string['migratev1_migratebutton'] = 'Migrar estas atividades';
$string['migratev1_noissues'] = 'Nenhum';
$string['migratev1_nonepending'] = 'Não há atividades da versão 1 a aguardar migração.';
$string['migratev1_nonependingapproval'] = 'Não há atividades migradas a aguardar verificação.';
$string['migratev1_notablespresent'] = 'Não foram encontradas tabelas antigas da versão 1 neste sítio. Não há nada a migrar.';
$string['migratev1_parseerrorcount'] = 'Segmentos que não foi possível processar: {$a}';
$string['migratev1_pendingheading'] = 'Ainda por migrar';
$string['migratev1_queued'] = 'A tarefa de migração foi colocada em fila. Será executada na próxima passagem do cron, ou de imediato através de admin/cli/adhoc_task.php --execute.';
$string['migratev1_verifiedclean'] = 'Verificado: os dados migrados correspondem à origem da versão 1 sem divergências.';
$string['migratev1_verifieddiscrepancies'] = 'A verificação encontrou divergências em relação à origem da versão 1: {$a}';
$string['migratev1_verifyfailed'] = 'Não foi possível verificar esta atividade: {$a}';
$string['modulename'] = 'Ditado em vídeo';
$string['modulename_help'] = 'A atividade ditado em vídeo permite aos participantes preencher lacunas em legendas sincronizadas enquanto veem ou ouvem um vídeo.

Os docentes importam um ficheiro de legendas WebVTT ou SubRip, marcam palavras ou expressões como lacunas e definem com que rigor as respostas são comparadas. Os participantes percorrem a transcrição segmento a segmento, pedem pistas penalizadas e recebem retorno imediato.';
$string['modulenameplural'] = 'Ditados em vídeo';
$string['nav_exportshort'] = 'Exportar';
$string['nav_media'] = 'Média';
$string['nav_reports'] = 'Tentativas';
$string['nav_subtitles'] = 'Legendas e lacunas';
$string['noinstances'] = 'Não há ditados em vídeo nesta disciplina.';
$string['overview_attempts'] = 'Tentativas';
$string['playbackheading'] = 'Reprodução e legendas';
$string['playbackoverlayhint'] = 'Uma legenda sobreposta à imagem mostra apenas a que está a ser reproduzida, por isso a reprodução para sempre no fim de uma legenda que ainda tem lacunas por preencher. Aqui não há nada a escolher.';
$string['playbackproviderhint'] = 'Um vídeo do YouTube ou do Vimeo é reproduzido pelo fornecedor na sua própria moldura, que não comunica o tempo de reprodução. Um exercício destes mostra sempre as legendas por baixo do média e nunca para no fim das legendas, seja qual for a opção escolhida acima. Os ficheiros carregados e os URL diretos respeitam ambas as definições.';
$string['player_check'] = 'Verificar a resposta';
$string['player_consentaccept'] = 'Carregar o vídeo a partir de {$a}';
$string['player_consentdetail'] = 'Reproduzi-lo liga o seu navegador a {$a}. O {$a} recebe o seu endereço IP e informação sobre o seu dispositivo, e pode ler cookies que já tenha colocado. Nada é enviado até que escolha carregar o vídeo.';
$string['player_consentheading'] = 'Este vídeo é fornecido por {$a}';
$string['player_finish'] = 'Concluir a tentativa';
$string['player_finished'] = 'Tentativa concluída. Pontuação: %score%%';
$string['player_finishincomplete'] = 'Lacunas ainda vazias: {$a}. Concluir a tentativa mesmo assim?';
$string['player_gaplabel'] = 'Lacuna %gap%';
$string['player_gaplink'] = 'Abrir a ligação';
$string['player_hint'] = 'Mostrar uma pista';
$string['player_loaderror'] = 'Não foi possível carregar o exercício. Recarregue a página.';
$string['player_loading'] = 'A carregar o exercício…';
$string['player_nocontent'] = 'Ainda não foi publicado nenhum conteúdo para o exercício. Volte mais tarde.';
$string['player_novideotrack'] = 'O seu navegador não consegue mostrar a faixa de vídeo deste média; o áudio será reproduzido mesmo assim. Informe o seu docente.';
$string['player_outdatedattempt'] = 'Este exercício foi atualizado desde que iniciou esta tentativa. Está a continuar no conteúdo anterior; conclua esta tentativa para da próxima vez trabalhar com o exercício atualizado.';
$string['player_progress'] = '{$a->done} de {$a->total} lacunas respondidas';
$string['player_ready'] = 'Exercício pronto.';
$string['player_scorelabel'] = 'Pontuação: %score%%';
$string['player_stateaccepted'] = 'Aceite';
$string['player_statecorrect'] = 'Correta';
$string['player_statehinted'] = 'Pista utilizada';
$string['player_stateincorrect'] = 'Incorreta';
$string['player_submitfailed'] = 'Não foi possível guardar a sua resposta. Tente de novo.';
$string['player_transcriptheading'] = 'Transcrição';
$string['pluginadministration'] = 'Administração do ditado em vídeo';
$string['pluginname'] = 'Ditado em vídeo';
$string['privacy_metadata_elang'] = 'Para cada atividade, o registo de quem aprovou a migração unidirecional do respetivo conteúdo da 1.x.';
$string['privacy_metadata_elang_attempt'] = 'Para cada tentativa num exercício, a atividade guarda quem a fez, quando, até onde chegou e como foi pontuada.';
$string['privacy_metadata_elang_attempt_answeredgaps'] = 'Quantas lacunas o participante respondeu nesta tentativa.';
$string['privacy_metadata_elang_attempt_attemptnumber'] = 'O número sequencial desta tentativa para o utilizador e a atividade.';
$string['privacy_metadata_elang_attempt_correctgaps'] = 'Quantas lacunas foram aceites como corretas nesta tentativa.';
$string['privacy_metadata_elang_attempt_exactgaps'] = 'Quantas lacunas foram respondidas com correspondência exata de caracteres nesta tentativa.';
$string['privacy_metadata_elang_attempt_hintedgaps'] = 'Para quantas lacunas o participante pediu uma pista nesta tentativa.';
$string['privacy_metadata_elang_attempt_score'] = 'A pontuação obtida nesta tentativa.';
$string['privacy_metadata_elang_attempt_state'] = 'Se a tentativa está em curso, concluída ou abandonada.';
$string['privacy_metadata_elang_attempt_timefinish'] = 'O momento em que a tentativa foi concluída.';
$string['privacy_metadata_elang_attempt_timemodified'] = 'O momento da última atualização da tentativa.';
$string['privacy_metadata_elang_attempt_timestart'] = 'O momento em que a tentativa começou.';
$string['privacy_metadata_elang_attempt_totalgaps'] = 'O número total de lacunas na versão do exercício desta tentativa.';
$string['privacy_metadata_elang_attempt_userid'] = 'O identificador do utilizador que fez a tentativa.';
$string['privacy_metadata_elang_attempt_versionid'] = 'A versão do exercício em que esta tentativa foi feita.';
$string['privacy_metadata_elang_migrationapproveduserid'] = 'O utilizador que aprovou a migração desta atividade a partir do mod_elang 1.x. É guardado para que a aprovação continue auditável.';
$string['privacy_metadata_elang_response'] = 'Para cada lacuna que um participante responde dentro de uma tentativa, a atividade guarda o texto da resposta e como foi avaliada.';
$string['privacy_metadata_elang_response_accepted'] = 'Se a resposta foi aceite como correta para esta lacuna.';
$string['privacy_metadata_elang_response_hintlevel'] = 'O nível de pista mais alto revelado ao participante para esta lacuna.';
$string['privacy_metadata_elang_response_responsetext'] = 'O texto que o participante escreveu para esta lacuna.';
$string['privacy_metadata_elang_response_resultstate'] = 'A classificação que o avaliador atribuiu a esta resposta (exata, palavra reconhecida, incorreta ou vazia).';
$string['privacy_metadata_elang_response_score'] = 'Os pontos que esta resposta contribuiu, após qualquer penalização por pista.';
$string['privacy_metadata_elang_response_timecreated'] = 'O momento em que esta resposta foi submetida pela primeira vez.';
$string['privacy_metadata_elang_response_timemodified'] = 'O momento da última atualização desta resposta.';
$string['privacy_metadata_elang_response_tries'] = 'Quantas vezes o participante submeteu uma resposta para esta lacuna.';
$string['privacy_metadata_elang_version'] = 'Para cada versão de conteúdo, a atividade guarda que utilizador a alterou pela última vez.';
$string['privacy_metadata_elang_version_usermodified'] = 'O utilizador que alterou esta versão de conteúdo pela última vez. É guardado para permitir verificar quem editou o conteúdo do exercício.';
$string['privacy_provider_externallink'] = 'Quando um exercício assenta num vídeo do YouTube ou do Vimeo, abri-lo liga o navegador do participante a esse fornecedor. O plugin não envia nada por si, mas a ligação é provocada pela atividade. Se chega ou não a acontecer depende da definição do sítio sobre o consentimento ao fornecedor e do acordo do participante.';
$string['privacy_provider_ipaddress'] = 'O endereço IP a partir do qual o navegador do participante se liga.';
$string['privacy_provider_useragent'] = 'Os dados de navegador e dispositivo que o navegador envia.';
$string['provider_vimeo'] = 'Vimeo';
$string['provider_youtube'] = 'YouTube';
$string['providerconsent'] = 'Perguntar antes de incorporar o YouTube ou o Vimeo';
$string['providerconsent_desc'] = 'Os exercícios que assentam num vídeo do YouTube ou do Vimeo mostram um aviso em vez do vídeo e só o incorporam depois de o participante concordar. Sem isto, o fornecedor recebe o endereço IP e os dados de navegador do participante assim que a página abre — antes de alguém carregar em reproduzir. Desative-o apenas se a sua instituição obtiver este consentimento por outra via.';
$string['report_actions'] = 'Ações';
$string['report_answered'] = 'Respondidas';
$string['report_attemptnumber'] = 'Tentativa';
$string['report_back'] = 'Voltar a todas as tentativas';
$string['report_correct'] = 'Corretas';
$string['report_delete'] = 'Eliminar';
$string['report_deleteconfirm'] = 'Eliminar definitivamente esta tentativa e todas as suas respostas? Não é possível anular.';
$string['report_deleted'] = 'A tentativa foi eliminada.';
$string['report_exact'] = 'Exatas';
$string['report_export'] = 'Exportar';
$string['report_filterany'] = 'Todas';
$string['report_filterapply'] = 'Aplicar os filtros';
$string['report_filterattempt'] = 'Número da tentativa';
$string['report_filterfrom'] = 'Iniciada a partir de';
$string['report_filterrangeerror'] = 'O fim do intervalo é anterior ao seu início.';
$string['report_filterreset'] = 'Limpar os filtros';
$string['report_filterstate'] = 'Estado';
$string['report_filterto'] = 'Iniciada até';
$string['report_filteruser'] = 'Participante';
$string['report_finished'] = 'Concluídas';
$string['report_heading'] = 'Tentativas';
$string['report_hinted'] = 'Com pista';
$string['report_hints'] = 'Nível da pista';
$string['report_kpianswered'] = 'Respondidas';
$string['report_kpiattempts'] = 'Tentativas mostradas';
$string['report_kpiaverage'] = 'Pontuação média (concluídas)';
$string['report_kpicorrect'] = 'Aceites';
$string['report_kpiexact'] = 'Exatamente certas';
$string['report_kpifinished'] = 'Concluídas';
$string['report_kpihinted'] = 'Usaram uma pista';
$string['report_kpihintedgaps'] = 'Precisaram de uma pista';
$string['report_noattempts'] = 'Ainda não há tentativas.';
$string['report_nogaps'] = 'A versão em que esta tentativa foi feita não tem lacunas.';
$string['report_nomatchingattempts'] = 'Nenhuma tentativa corresponde a estes filtros.';
$string['report_noresponse'] = 'Sem resposta';
$string['report_response'] = 'Resposta';
$string['report_result'] = 'Resultado';
$string['report_result_empty'] = 'Vazia';
$string['report_result_exact'] = 'Exata';
$string['report_result_incorrect'] = 'Incorreta';
$string['report_result_none'] = '—';
$string['report_result_wordrecognized'] = 'Reconhecida';
$string['report_score'] = 'Pontuação';
$string['report_solution'] = 'Solução';
$string['report_started'] = 'Iniciada';
$string['report_state'] = 'Estado';
$string['report_state_abandoned'] = 'Abandonada';
$string['report_state_finished'] = 'Concluída';
$string['report_state_inprogress'] = 'Em curso';
$string['report_transcript'] = 'Transcrição';
$string['report_tries'] = 'Tentativas de resposta';
$string['report_user'] = 'Participante';
$string['report_view'] = 'Ver';
$string['reports'] = 'Relatórios';
$string['resetattempts'] = 'Eliminar todas as tentativas e respostas dos participantes';
$string['solutionavailability'] = 'Transcrição com as soluções para os participantes';
$string['solutionavailability_aftersubmission'] = 'Depois de a tentativa estar concluída';
$string['solutionavailability_always'] = 'A qualquer momento';
$string['solutionavailability_help'] = 'Quando os participantes podem transferir a transcrição completa com a solução de cada lacuna visível.

* Nunca — só os docentes a podem transferir.
* Depois de a tentativa estar concluída — um participante pode transferi-la assim que concluir uma tentativa nesta atividade.
* A qualquer momento — um participante pode transferi-la mesmo antes de responder.

O pessoal docente com permissão pode transferi-la sempre, seja qual for esta definição.';
$string['solutionavailability_never'] = 'Nunca';
$string['subplugintype_elangscript'] = 'Gestor de escrita';
$string['subplugintype_elangscript_plural'] = 'Gestores de escrita';
$string['subtitleposition'] = 'Apresentação das legendas';
$string['subtitleposition_below'] = 'Por baixo do média';
$string['subtitleposition_help'] = 'Onde são mostradas as legendas interativas.

* Por baixo do média — toda a transcrição fica por baixo do média, numa área de deslocamento própria, acompanhando a reprodução.
* No vídeo, em baixo ou em cima — só a legenda que está a ser reproduzida é desenhada sobre o média.

Um média só de áudio não tem imagem sobre a qual desenhar, por isso usa sempre a apresentação por baixo do média. A definição em si é mantida e volta a aplicar-se assim que a atividade usar um vídeo.';
$string['subtitleposition_overlaybottom'] = 'No vídeo — em baixo';
$string['subtitleposition_overlaytop'] = 'No vídeo — em cima';
$string['task_migratev1activities'] = 'Migrar as atividades da versão 1';
$string['transcriptheading'] = 'Transcrição para os participantes';
$string['validate_cueafterend'] = '{$a->where}: termina aos {$a->endtime} ms, depois do média ({$a->duration} ms). A reprodução nunca lá pode chegar.';
$string['validate_cueendbeforestart'] = '{$a}: o fim não é posterior ao início.';
$string['validate_cuewhere'] = 'Segmento {$a->sortorder} ({$a->cuekey})';
$string['validate_emptysolution'] = 'A solução de {$a} está vazia.';
$string['validate_hintlevels'] = 'Os níveis de pista de {$a} não formam uma sequência contínua a começar em 1.';
$string['validate_negativetime'] = '{$a}: o tempo de início é anterior ao começo da gravação.';
$string['validate_nocues'] = 'A versão não tem segmentos.';
$string['validate_nogaps'] = 'A versão não tem lacunas a responder.';
$string['validate_nonpositivelength'] = 'O comprimento em caracteres de {$a} tem de ser positivo.';
$string['validate_rangeoutside'] = 'O intervalo de caracteres de {$a} fica fora da respetiva transcrição.';
$string['validate_rangeoverlap'] = 'O intervalo de caracteres de {$a} sobrepõe-se a outra lacuna.';
$string['validate_unknownalgorithm'] = 'O algoritmo de avaliação «{$a->algorithm}» de {$a->where} não é reconhecido.';
$string['validate_where'] = 'a lacuna {$a->gapkey} no segmento {$a->cuekey}';
$string['verify_algorithmmismatch'] = 'Lacuna {$a->gapkey}: o algoritmo de avaliação é «{$a->actual}», esperava-se «{$a->expected}».';
$string['verify_attemptcount'] = 'O número de tentativas migradas é {$a->actual}, esperavam-se {$a->expected} participantes distintos da 1.x.';
$string['verify_jarothreshold'] = 'O limiar de comparação de respostas é {$a->actual}, esperava-se {$a->expected}.';
$string['verify_missingattempt'] = 'Utilizador {$a}: esperava-se uma tentativa migrada, não foi encontrada nenhuma.';
$string['verify_missingcue'] = 'Segmento {$a}: falta o segmento migrado.';
$string['verify_missinggap'] = 'Lacuna {$a}: falta a lacuna migrada.';
$string['verify_missinghint'] = 'Lacuna {$a}: a versão 1 permitia ajuda aqui, mas não foi migrada nenhuma pista.';
$string['verify_orphancue'] = 'Segmento {$a}: não foi encontrado nenhum segmento correspondente da versão 1.';
$string['verify_orphangap'] = 'Lacuna {$a}: não foi encontrada nenhuma lacuna correspondente da versão 1.';
$string['verify_rangemismatch'] = 'Lacuna {$a}: o intervalo de caracteres não corresponde à origem da versão 1.';
$string['verify_responsecount'] = 'Utilizador {$a->userid}: o número de respostas migradas é {$a->actual}, esperava-se {$a->expected}.';
$string['verify_solutionmismatch'] = 'Lacuna {$a->gapkey}: a solução é «{$a->actual}», esperava-se «{$a->expected}».';
$string['verify_transcriptmismatch'] = 'Segmento {$a}: a transcrição não corresponde à origem da versão 1.';
$string['verify_unexpectedhint'] = 'Lacuna {$a}: a versão 1 não permitia ajuda aqui, mas foi migrada uma pista.';
