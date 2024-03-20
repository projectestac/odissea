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
 * Strings for component 'block_xp', language 'pt', version '4.1'.
 *
 * @package     block_xp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['activityoresourceis'] = 'A atividade ou o recurso é {$a}';
$string['addacondition'] = 'Adicionar uma condição';
$string['addarule'] = 'Adicionar uma regra';
$string['addinstructions'] = 'Adicionar mais informação';
$string['additionalresources'] = 'Recursos adicionais';
$string['addlevel'] = 'Adicionar nível';
$string['addoninstallationerror'] = 'Foi detetado um problema com o complemento (local_xp). Parece não estar instalado corretamente. Um administrador deve finalizar a sua instalação.';
$string['addonnotactivated'] = 'Este suplemento não está ativado.';
$string['addrulesformhelp'] = 'A última coluna define a quantidade de pontos obtidos de experiência quando um critério é cumprido.';
$string['admindefaultrulesintro'] = 'As regras mostradas a seguir serão usadas como regras predefinidas nas disciplinas às quais o bloco seja adicionado.';
$string['admindefaultsettingsintro'] = 'As configurações abaixo serão usadas como predefinições quando o bloco for adicionado a uma disciplina. Algumas configurações podem ser bloqueadas e, neste caso, o seu valor é estritamente aplicado em todas as instâncias do módulo.';
$string['admindefaultvisualsintro'] = 'A seguinte configuração será usada como predefinição quando o bloco for adicionado a uma disciplina.';
$string['adminscanearnxp'] = 'Os administradores podem ganhar pontos';
$string['adminscanearnxp_desc'] = 'Por padrão, os administradores não estão incluídos no grupo de utilizadores que podem ganhar pontos. Isso ocorre porque os administradores sempre têm a permissão _block/xp:earnxp_, permitindo-lhes recolher continuamente pontos em todos os lugares. Pode usar esta configuração para permitir que os administradores também ganhem pontos.';
$string['anonymity'] = 'Anonimato';
$string['anonymity_help'] = 'Esta configuração controla se os participantes podem, ou não, ver o nome e o avatar dos outros.';
$string['apply'] = 'Aplicar';
$string['awardaxpwhen'] = '<strong>{$a}</strong> pontos de experiência são atribuídos quando:';
$string['badgeaward'] = 'Distintivo a atribuir';
$string['badgeawarddesc'] = 'Um distintivo a atribuir quando o utilizador atinge o nível.';
$string['basepoints'] = 'Pontos base';
$string['basepointslineardesc'] = 'O incremento mínimo entre cada nível.';
$string['basepointsrelativedesc'] = 'O número de pontos para começar.';
$string['basexp'] = 'Algoritmo base';
$string['blockappearance'] = 'Aparência do bloco';
$string['blockappearancemovedtopluginsettings'] = 'As configurações de aparência do bloco foram movidas para a página de configurações do módulo.';
$string['cachedef_filters'] = 'Filtros de nível';
$string['cachedef_ruleevent_eventslist'] = 'Lista de alguns eventos';
$string['cannotbesetindefaults'] = 'Isso não pode ser definido nos valores padrão.';
$string['cannotearnpoints'] = 'Não pode ganhar pontos.';
$string['cannotshowblockconfig'] = 'Normalmente são mostradas aqui  as configurações da aparência mas não foi possível encontrar o bloco. Para alterar a aparência do bloco, volte [aqui]({$a}) (ou onde adicionou o bloco), ative o modo de edição e siga a opção "Configurar o bloco" na lista pendente do bloco. Se não encontrar o bloco, adicione-o novamente à sua disciplina.';
$string['cannotshowblockconfigsys'] = 'Normalmente são mostradas aqui as configurações da aparência mas não foi possível encontrar o bloco. Pode estar em falta na [página inicial]({$a->fp}) e no [painel predefinido] ({$a->mysys}) dos utilizadores ou presente em ambos. Para editar as configurações aqui, verifique se aparecem apenas em alguma delas.';
$string['changelevelformhelp'] = 'Se alterar o número de níveis, as medalhas personalizadas de cada nível serão temporariamente desativadas para prevenir níveis sem medalhas. Se alterar o número de níveis vá à página \'Visuais\' para reativar as medalhas personalizadas após guardar este formulário.';
$string['cheatguard'] = 'Controlo de fraudes';
$string['clicktoselectcm'] = 'Clique para selecionar uma atividade ou recurso';
$string['cmselector'] = 'Seletor de módulo da disciplina';
$string['coefxp'] = 'Coeficiente do algorítmo';
$string['colon'] = '{$a->a}: {$a->b}';
$string['compatibilitycheck'] = 'Verificação de compatibilidade';
$string['configblockrankingsnapshot'] = 'Mostrar instantâneo da grelha de classificação';
$string['configblockrankingsnapshot_help'] = 'O instantâneo da grelha de classificação exibe a classificação do utilizador. Também tentará exibir as duas pessoas ao redor do utilizador. Esta funcionalidade requer que a tabela de classificação seja ativada e que sejam mostradas as classificações.';
$string['configdescription'] = 'Introdução';
$string['configdescription_help'] = 'Uma pequena introdução mostrada no bloco. Os alunos podem rejeitar a mensagem e, neste caso, não será mostrada novamente.';
$string['configheader'] = 'Configurações';
$string['configrecentactivity'] = 'Mostrar últimas recompensas';
$string['configrecentactivity_help'] = 'Quando definida como \'Sim\', o bloco mostrará uma pequena lista de eventos recentes que recompensaram o aluno com pontos.';
$string['configtitle'] = 'Título';
$string['configtitle_help'] = 'Título do bloco';
$string['congratulationsyouleveledup'] = 'Parabéns!';
$string['coolthanks'] = 'Muito bom, obrigado!';
$string['courselog'] = 'Registos da disciplina';
$string['coursereport'] = 'Relatório da disciplina';
$string['courserules'] = 'Regras da disciplina';
$string['courseselectedcolon'] = 'Disciplina selecionada:';
$string['coursesettings'] = 'Configurações da disciplina';
$string['coursevisuals'] = 'Visuais da disciplina';
$string['currencysign'] = 'Símbolo de pontos';
$string['currencysign_help'] = 'Com esta configuração, pode alterar o significado dos pontos. Será exibido ao lado da quantidade de pontos que cada utilizador tem como substituto da referência a _pontos de experiência_. Escolha um dos símbolos fornecidos ou faça o upload do seu próprio!';
$string['currencysignxp'] = 'XP (Pontos de Experiência)';
$string['customizelevels'] = 'Personalizar os níveis';
$string['dangerzone'] = 'Zona de perigo';
$string['defaultlevels'] = 'Níveis predefinidos';
$string['defaultrules'] = 'Regras predefinidas';
$string['defaultrulesformhelp'] = 'Estas são as regras predefinidas fornecidas pelo módulo. Fornecem automaticamente pontos predefinidos e ignoram alguns eventos redundantes. As regras que definir têm precedência sobre elas.';
$string['defaultsettings'] = 'Configurações predefinidas';
$string['defaultvisuals'] = 'Aparência padrão';
$string['deletecondition'] = 'Apagar condição';
$string['deleterule'] = 'Apagar regra';
$string['description'] = 'Descrição';
$string['difference'] = 'Dif.';
$string['difficulty'] = 'Método de cálculo de pontos';
$string['difficultyflat'] = 'Igual';
$string['difficultyflatdesc'] = 'Todos os níveis requerem o mesmo número de pontos para atingir.';
$string['difficultylinear'] = 'Crescente';
$string['difficultylineardesc'] = 'Os níveis demoram progressivamente mais tempo para atingir.';
$string['difficultylinearincrdesc'] = 'O número de pontos usado para a dificuldade progressiva.';
$string['difficultypointincrease'] = 'Aumento de pontos';
$string['difficultyrelative'] = 'Acumulativo';
$string['difficultyrelativedesc'] = 'Os níveis tornam-se exponencialmente mais difíceis de atingir.';
$string['difficultyrelativeincrdesc'] = 'A percentagem de pontos a aumentar a partir do nível anterior.';
$string['discoverlevelupplus'] = 'Descobre o Level Up XP+';
$string['dismissnotice'] = 'Dispensar aviso';
$string['displayeveryone'] = 'Mostrar todos';
$string['displaynneighbours'] = 'Mostrar {$a} vizinhos';
$string['displayoneneigbour'] = 'Mostrar 1 vizinho';
$string['displayparticipantsidentity'] = 'Mostrar a identidade dos participantes';
$string['displayrank'] = 'Mostrar classificação';
$string['displayrelativerank'] = 'Mostrar classificação relativa';
$string['documentation'] = 'Documentação';
$string['drops'] = 'Drops';
$string['drops_help'] = 'Em videojogos, alguns personagens podem _largar_ itens ou pontos de experiência no chão para o jogador apanhar. Esses itens e pontos são comumente chamados de drops. No Level Up XP, drops são códigos abreviados (por exemplo, `[xpdrop abcdef]`) que um instrutor pode colocar no conteúdo regular do Moodle. Quando encontrados por um utilizador, esses drops serão _apanhados_ e uma certa quantidade de pontos será atribuída. Atualmente, os drops são invisíveis para o utilizador e atribuem pontos passivamente na primeira vez que são encontrados. Os drops podem ser usados para atribuir pontos de forma inteligente quando um determinado tipo de conteúdo é consumido por um estudante. Aqui estão algumas ideias: - Coloque um drop no feedback de um teste apenas visível para pontuações perfeitas - Coloque um drop em conteúdo profundo para recompensar seu consumo - Coloque um drop numa discussão interessante no fórum - Coloque um drop numa página de difícil acesso num módulo de lições [Mais informações](https://docs.levelup.plus/xp/docs/how-to/use-drops?ref=blockxp_help)';
$string['dropsintro'] = 'Drops são trechos de código colocados diretamente no conteúdo que atribuem pontos quando encontrados por um utilizador.';
$string['editingdefaultsettingsinwholesitemodenotice'] = '**Atenção!** Não está a modificar as configurações atualmente ativas; em vez disso, está a editar os valores padrão. Como o Level Up XP é usado em todo o site, a sua intenção é provavelmente alterar as configurações em todo o site. [Navegue aqui]({$a->url}) para alterar essas configurações ou siga o link "Configurações" do bloco XP.';
$string['editinstructions'] = 'Editar informação';
$string['enablecheatguard'] = 'Ativar prevenção de fraude';
$string['enablecheatguard_help'] = 'A prevenção de fraude oferece um mecanismo simples e barato para evitar que os alunos abusem do sistema ao usar técnicas óbvias, como atualizar a mesma página indefinidamente ou repetir a mesma ação várias vezes.

[Mais informação] (https://docs.levelup.plus/xp/docs/getting-started/cheat-guard?ref=blockxp_help)';
$string['enableinfos'] = 'Ativar página de informação';
$string['enableinfos_help'] = 'Se definida como \'Não\', aos alunos não será permitida a visualização da página de informações.';
$string['enableladder'] = 'Ativar a grelha de classificação';
$string['enableladder_help'] = 'Se definida como \'Não\', os alunos não poderão ver a grelha de classificação.';
$string['enablelevelupnotif'] = 'Ativar notificações de subida de nível';
$string['enablelevelupnotif_help'] = 'Se definida como \'Sim\', será mostrada aos alunos, numa janela pop-up, uma mensagem de felicitação pelo novo nível alcançado.';
$string['enablelogging'] = 'Ativar registos';
$string['enablexpgain'] = 'Ativar ganho de pontuação';
$string['enablexpgain_help'] = 'Quando definida como \'Não\', ninguém ganhará pontos de experiência na disciplina. Isto é útil para "congelar" a experiência ganha ou para ativar o congelamento por um certo período de tempo.

Tenha em atenção que isto pode ser controlado de forma mais pormenorizada através da permissão \'block/xp:earnxp\'.';
$string['entersearchterm'] = 'Indique o termo a pesquisar';
$string['errorcontextcoursemismatchforwholesite'] = 'O URL desta página <em>Subir de nível</em> não corresponde à configuração atual do módulo. A sua configuração atual determina que <em>Subir de nível</em> possa ser usado \'Em todo o site\', no entanto, esta página espera que seja usado \'Por disciplina\'. Por favor, <a href="{$a->nexturl}">clique aqui</a> para ir para a página correta. Procure a configuração de administrador \'block_xp_context\', caso pretenda alterar a sua configuração.';
$string['errorcontextcoursemismatchpercourse'] = 'O URL desta página de <em>Subir de nível</em> não corresponde à configuração atual do módulo. A sua configuração atual determina que <em>Subir de nível</em> seja usado \'Por disciplina\', no entanto, esta página espera que seja usado \'Em todo o site\'. Provavelmente, foi originado num <em>bloco</em> que foi adicionado ao painel ou à página principal numa configuração diferente. Terá de remover o bloco das últimas páginas e usá-lo apenas em disciplinas individuais.';
$string['errorformvalues'] = 'Existem alguns erros nos valores do formulário. Por favor, corrija-os.';
$string['errorlevelsincorrect'] = 'O número mínimo de níveis é 2';
$string['errornotalllevelsbadgesprovided'] = 'Não foram definidas medalhas para todos os níveis. Faltam: {$a}';
$string['errorunknownevent'] = 'Erro: evento desconhecido';
$string['errorunknownmodule'] = 'Erro: módulo desconhecido';
$string['errorxprequiredlowerthanpreviouslevel'] = 'Os pontos são menores ou iguais à do nível anterior.';
$string['event_user_leveledup'] = '';
$string['eventis'] = 'O evento é {$a}';
$string['eventname'] = 'Nome do evento';
$string['eventproperty'] = 'Propriedades do evento';
$string['eventsrules'] = '';
$string['eventsrules_help'] = 'Este módulo usa os eventos para atribuir pontuação às ações executadas pelos alunos.
Pode usar o formulário abaixo para adicionar as suas próprias regras e modificar as regras predefinidas.

É recomendado que verifique os registos do módulo para identificar quais os eventos que são acionados à medida que os alunos realizam ações na disciplina.

Recursos adicionais:

- [Como são calculados os pontos de experiência?] (https://docs.levelup.plus/xp/docs/getting-started/points-calculation?ref=blockxp_help)
- [Regras de resolução de problemas] (https://docs.levelup.plus/xp/docs/troubleshooting/event-rule-not-working?ref=blockxp_help)';
$string['eventsrulesintro'] = 'Observa ações e atribui pontos aos estudantes à medida que as realizam.';
$string['eventtime'] = 'Data do evento';
$string['filterbyuser'] = 'Filtrar por utilizador';
$string['filtermodules'] = 'Módulos de filtro';
$string['for1day'] = 'Por um dia';
$string['for1month'] = 'Por um mês';
$string['for1week'] = 'Por uma semana';
$string['for3days'] = 'Por 3 dias';
$string['forever'] = 'Para sempre';
$string['forthewholesite'] = 'No site';
$string['give'] = 'dar';
$string['gotofullladder'] = 'Ir para grelha de classificação geral';
$string['graderules'] = 'Regras de notas';
$string['graderules_help'] = 'Os estudantes ganharão tantos pontos quanto as suas notas. Uma nota de 5/10 e uma nota de 5/100 atribuirão ao estudante 5 pontos. Quando a nota do estudante muda várias vezes, ele ganhará pontos equivalentes à nota máxima que recebeu. Os pontos nunca são retirados dos estudantes, e as notas negativas são ignoradas. Exemplo: Alice envia um trabalho e recebe a nota de 40/100. No _Level Up XP_, Alice recebe 40 pontos pela sua nota. Alice tenta novamente o trabalho, mas desta vez a sua nota é reduzida para 25/100. Os pontos de Alice no _Level Up XP_ não mudam. Na sua última tentativa, Alice marca 60/100, ela ganha mais 20 pontos no _Level Up XP_, o seu total de pontos ganhos é 60. [Mais em _Level Up XP_ documentação](https://docs.levelup.plus/xp/docs/how-to/grade-based-rewards?ref=blockxp_help)';
$string['graderulesintro'] = 'As regras de notas permitem que os utilizadores recebam pontos iguais às notas que recebem.';
$string['grid'] = 'Grelha';
$string['hasbadgeaward'] = 'Conjunto de distintivo a atribuir';
$string['hasdescription'] = 'Conjunto de descrição';
$string['hasname'] = 'Conjunto de nome';
$string['hasnobadgeaward'] = 'Sem distintivo a atribuir';
$string['hasnodescription'] = 'Sem descrição';
$string['hasnoname'] = 'Sem nome';
$string['hasnopopupmessage'] = 'Sem mensagem popup';
$string['haspopupmessage'] = 'Conjunto de mensagem popup';
$string['hideparticipantsidentity'] = 'Ocultar a identidade dos participantes';
$string['hiderank'] = 'Ocultar classificação';
$string['importpoints'] = 'Importar pontos';
$string['importpoints_help'] = 'A importação pode ser utilizada para _aumentar_ os pontos dos alunos ou para os _substituir_ pelo valor fornecido. Note que a importação __não utiliza__ o mesmo formato que o relatório exportado. O formato necessário está descrito na [documentação](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help), onde está disponível um [ficheiro de exemplo](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help#sample-file).';
$string['importpointsintro'] = 'Importar pontos de um ficheiro CSV e, opcionalmente, enviar uma mensagem ao destinatário.';
$string['incourses'] = 'Nas disciplinas';
$string['ineffective'] = 'Ineficaz';
$string['infos'] = 'Informação';
$string['installed'] = 'Instalado';
$string['instructions'] = 'Mais informação';
$string['invalidxp'] = 'Valor XP inválido';
$string['keeplogs'] = 'Manter registos (logs)';
$string['ladder'] = 'Grelha de classificação';
$string['ladderadditionalcols'] = 'Colunas adicionais';
$string['ladderadditionalcols_help'] = 'Esta configuração determina que colunas adicionais são mostradas na grelha de classificação. Pressione a tecla CTRL ou CMD enquanto clica para selecionar mais do que uma coluna ou para desmarcar uma coluna já selecionada.';
$string['ladderempty'] = 'A grelha de classificação está vazia, certifique-se de voltar mais tarde!';
$string['learnmore'] = 'Saber mais';
$string['level'] = 'Nível';
$string['levelbadges'] = 'Medalhas dos níveis';
$string['levelbadges_help'] = 'Carregar imagens para substituir a aparência de níveis individuais. Os ficheiros devem ter o nome [nível].[extensão do ficheiro], por exemplo, 1.png, 2.jpg, etc. Recomendamos imagens com o tamanho de 100x100 pixels, em qualquer um dos seguintes tipos: GIF, JPEG, PNG e SVG.';
$string['levelbadgesformhelp'] = 'Nomes dos ficheiros: [nivel].[extensão do ficheiro]. Por exemplo: 1.png, 2.jpg, etc...<br/>Tamanho da imagem recomendado: 100 x 100 (px).';
$string['levelcount'] = 'Número de níveis';
$string['leveldesc'] = 'Descrição do nível';
$string['leveldesc_help'] = 'Breve descrição do nível que é mostrada na página de informações ao lado do próprio nível. Pode usar para descrever uma recompensa para os alunos que atingem o nível, para incluir instruções sobre como trabalhar nesse nível, para descrever o nível de uma maneira lúdica (por exemplo, apenas as almas mais corajosas são conhecidas por atingir este nível), etc.';
$string['leveldescriptiondesc'] = 'Breve descrição do nível, exibida aos alunos na página de informação.';
$string['levelname'] = 'Nome do nível';
$string['levelname_help'] = 'Um nome abreviado para mostrar em vez do predefinido _Nível # 1_, _Nível # 2_, etc, que é mostrado em determinadas ocasiões. Se atribuir nomes a alguns níveis, recomendamos que dê um nome a todos os níveis!';
$string['levelpointslength'] = 'Comprimento';
$string['levelpointsstart'] = 'Iniciar';
$string['levels'] = 'Níveis';
$string['levelsappearance'] = 'Aparência dos Níveis';
$string['levelssaved'] = 'Os níveis foram guardados.';
$string['levelswillbereset'] = 'Atenção! Ao guardar este formulário serão recalculados os níveis de todos os participantes!';
$string['levelup'] = 'Subir de nível';
$string['levelupoptionsunavailableforlevelone'] = 'Opções relacionadas com a obtenção do nível não estão disponíveis para o primeiro nível.';
$string['levelupplus'] = 'Subir de nível Plus';
$string['levelx'] = 'Nível #{$a}';
$string['likenotice'] = '<strong>Gosta deste módulo?</strong> Por favor, <a href="{$a->moodleorg}" target="_blank">adicione-o aos seus favoritos</a> em Moodle.org e <a href="{$a->github}" target="_blank">marque-o com uma estrela</a> no GitHub.';
$string['limitparticipants'] = 'Limitar número de participantes';
$string['limitparticipants_help'] = 'Esta configuração controla quem aparece na lista de classificação. Os vizinhos são os participantes classificados acima e abaixo do utilizador atual. Por exemplo, ao escolher \'Mostrar 2 vizinhos\', apenas os dois participantes classificados diretamente acima e abaixo do utilizador atual serão mostrados.';
$string['list'] = 'Lista';
$string['logging'] = 'Registos';
$string['manually'] = 'Manualmente';
$string['maxactionspertime'] = 'Máximo de ações no intervalo de tempo';
$string['maxactionspertime_help'] = 'O número máximo de ações que contarão para pontos de experiência (XP) durante o intervalo de tempo indicado. Qualquer ação subsequente será ignorada.';
$string['maxlevelexcl'] = 'nível max!';
$string['menu'] = 'Menu';
$string['missing'] = 'Em falta';
$string['movecondition'] = 'Mover condição';
$string['moverule'] = 'Mover regra';
$string['name'] = 'Nome';
$string['navbardisplay'] = 'Mostrar na barra de navegação';
$string['navbardisplay_desc'] = 'Quando ativado, o nível do utilizador será exibido na barra de navegação superior. Se o plugin for usado "Por cursos", só aparecerá nos cursos. Note que esta funcionalidade depende muito do tema e pode não funcionar bem, ou mesmo não funcionar, com temas de terceiros. [Saiba mais](https://docs.levelup.plus/xp/docs/navbar-display)';
$string['navdrops'] = 'Quedas';
$string['naveventrules'] = 'Regras do evento';
$string['navgraderules'] = 'Regras de avaliação';
$string['navimport'] = 'Importar';
$string['navinfos'] = 'Informação';
$string['navladder'] = 'Grelha de classificação';
$string['navlevels'] = 'Níveis';
$string['navlevelssetup'] = 'Configuração';
$string['navlog'] = 'Registo';
$string['navpoints'] = 'Pontos';
$string['navpromo'] = 'Plus';
$string['navreport'] = 'Relatório';
$string['navrules'] = 'Regras';
$string['navsettings'] = 'Configurações';
$string['navvisuals'] = 'Aparência';
$string['nextlevelin'] = 'próximo nível em';
$string['nodescription'] = 'Sem descrição';
$string['noissuesidentified'] = 'Não foram identificados problemas';
$string['nologsrecordedyet'] = 'Ainda não existem registos guardados.';
$string['noname'] = 'Sem nome';
$string['notecompatibilityissues'] = 'Por favor, note os problemas de compatibilidade identificados abaixo:';
$string['notesomesettingslocked'] = 'Tenha em atenção que algumas configurações podem não ser editáveis se forem bloqueadas por um administrador.';
$string['numberoflevels'] = 'Número de níveis';
$string['occasionally'] = 'Ocasionalmente';
$string['outofsync'] = 'Fora de sincronia';
$string['outofsyncexcessive'] = 'Fora de sincronia excessiva';
$string['outofsyncexcessiveinfo'] = 'O XP+ é excessivamente mais antigo que o XP, o que pode levar a problemas inesperados. Para evitar malfuncionamento, o XP+ pode desativar-se automaticamente no futuro.';
$string['outofsyncinfo'] = 'Os plugins de XP não são compatíveis entre si, o que pode levar a problemas inesperados.';
$string['participant'] = 'Participante';
$string['participants'] = 'Participantes';
$string['participatetolevelup'] = 'Participe na disciplina para ganhar pontos de experiência e subir de nível!';
$string['perpagecolon'] = 'Por página:';
$string['pickaconditiontype'] = 'Escolha um tipo de condição';
$string['pluginavailabilityxpdesc'] = 'Este módulo permite que os instrutores restrinjam o acesso às atividades com base nos níveis dos alunos.';
$string['pluginenrolxpdesc'] = 'Este módulo permite a inscrição automática em disciplinas com base no nível do aluno noutra disciplina.';
$string['pluginname'] = 'Subir de nível';
$string['pluginshortcodesdesc'] = 'Este módulo permite que os instrutores personalizem o seu material incluindo no conteúdo elementos relacionados com o Subir de nível (pontos, nível, grelha de classificação, …), além de ocultar ou mostrar conteúdo com base no nível do aluno.';
$string['pluginsoutofsync'] = '_Os módulos não estão em sincronia! __

Isto significa que atualizou o _Subir de nível_ mas não _Subir de nível Plus_. Embora façamos o nosso melhor para tentar evitar quaisquer problemas, algumas funcionalidades podem não funcionar corretamente, incluindo o próprio _Subir de nível_. Recomendamos que atualize o _Subir de nível Plus_ para a última versão. [Ler mais] ({$a->url})';
$string['pluginxmaybeincompatible'] = 'Esta versão de {$a->name} ({$a->componente}) pode ser incompatível com o Moodle {$a->versão}.';
$string['pointsintimelinker'] = 'por';
$string['pointsperlevel'] = 'Pontos por nível';
$string['pointsrequired'] = 'Pontos necessários';
$string['popupnotificationmessage'] = 'Mensagem de notificação pop-up';
$string['popupnotificationmessagedesc'] = 'Mensagem opcional a ser exibida na notificação pop-up que parabeniza o utilizador por atingir o nível.';
$string['potentialmoodleincompatibility'] = 'Incompatibilidade potencial com o Moodle';
$string['privacy:metadata:log'] = 'Guardar registo dos eventos';
$string['privacy:metadata:log:eventname'] = 'Nome do evento';
$string['privacy:metadata:log:time'] = 'A data em que ocorreu';
$string['privacy:metadata:log:userid'] = 'O utilizador que ganhou os pontos';
$string['privacy:metadata:log:xp'] = 'Os pontos atribuídos ao evento';
$string['privacy:metadata:prefintro'] = 'Registar se o utilizador descartou a introdução do bloco';
$string['privacy:metadata:prefladderpagesize'] = 'O tamanho de página preferido do utilizador ao visualizar a grelha de classificação';
$string['privacy:metadata:preflevelup'] = 'Registar se o utilizador deve ver a notificação de subida de nível';
$string['privacy:metadata:prefnotices'] = 'Registar se o utilizador fechou o aviso de suporte';
$string['privacy:metadata:prefseenpromo'] = 'Registar quando o utilizador visualizou a página promocional';
$string['privacy:metadata:xp'] = 'Armazenar os pontos e o nível dos utilizadores';
$string['privacy:metadata:xp:lvl'] = 'O nível do utilizador';
$string['privacy:metadata:xp:userid'] = 'O utilizador';
$string['privacy:metadata:xp:xp'] = 'Pontuação do utilizador';
$string['privacy:path:addon'] = 'Suplemento';
$string['privacy:path:level'] = 'Nível';
$string['privacy:path:logs'] = 'Registos';
$string['progress'] = 'Progresso';
$string['progressbar'] = 'Barra de progressão';
$string['promocheatguard'] = 'Esta prevenção de fraude não foi projetada para cobrir períodos de tempo longos. Por favor, considere atualizar para <em>Subir de nível Plus</em> para desbloquear prazos mais longos e outras funcionalidades. <a href="{$a->url} ">Ler mais</a>.';
$string['promocontactintro'] = 'Contacte-nos para mais informações. Não mordemos e respondemos rapidamente!';
$string['promocontactus'] = 'Contactar';
$string['promoemailusat'] = 'Envie um e-mail para _levelup@branchup.tech_.';
$string['promoerrorsendingemail'] = 'Ohh! Não foi possível enviar a mensagem... envie-nos um e-mail diretamente para: {$a}. Obrigado!';
$string['promogetnow'] = 'Obtenha o XP+ agora!';
$string['promoifpreferemailusat'] = 'Psst! Se preferir, envie-nos um e-mail diretamente para _ {$a} _.';
$string['promointro'] = 'Torne-se o mestre do jogo! Desbloqueie funcionalidades adicionais e leve a gamificação a um patamar totalmente novo com o Level Up XP+!';
$string['promointroinstalled'] = 'O suplemento _Subir de nível Plus_ está instalado no seu sistema e todos as funcionalidades foram ativadas.';
$string['promorulesdidyouknow'] = 'Sabia que com <em>Subir de nível Plus</em> os alunos podem receber pontos para <em>concluírem as disciplinas</em> e <em>atividades</em>, ou até receber pontos de acordo com as suas <em>notas</em>? <a href="{$a->url}">Saiba mais aqui</a>.';
$string['promoyourmessagewassent'] = 'Obrigado. A sua mensagem foi enviada. Entraremos em contacto consigo em breve.';
$string['property:action'] = 'Ação do evento';
$string['property:component'] = 'Componente do evento';
$string['property:crud'] = 'CRUD do evento';
$string['property:eventname'] = 'Nome do evento';
$string['property:target'] = 'Alvo do evento';
$string['questreleasenotice'] = 'Temos o prazer de anunciar o nosso **novo módulo de gamificação**: **Subir de nível Quest** 🥳. Transforme as suas disciplinas em **aventuras emocionantes**, repletas de **estratégias de compromisso** e **comemorações** 🤯! Confira o [site da Quest]({$a->questurl}) e a nossa [nota de lançamento]({$a->questblogurl}).';
$string['quickeditpoints'] = 'Edição rápida de pontos';
$string['rank'] = 'Posição';
$string['ranking'] = 'Classificação';
$string['ranking_help'] = 'O rank é a posição absoluta do utilizador atual no quadro de líderes. O rank relativo é a diferença em pontos de experiência entre um utilizador e os seus vizinhos.';
$string['reallydeleteuserstate'] = 'Apagar um utilizador só é útil para removê-lo da grelha de classificação. Para qualquer outro motivo, recomenda-se que defina a pontuação do utilizador como 0. Tenha em atenção que apagar um utilizador não afeta a capacidade de ganhar pontos no futuro.

Importante: quando está a usar o _Subir de nível_ para todo o site, apagá-los fará com que deixem de constar nos relatórios. Neste caso, não poderá atribuir novamente os pontos. No entanto, se estiver a usar o _Subir de nível _ por disciplina, o aluno poderá ainda aparecer nos relatórios, se estiver inscrito na disciplina.

Tem a certeza absoluta de que pretende apagar os pontos deste utilizador?';
$string['reallydeleteuserstateandlogs'] = 'Ao apagar um utilizador remove-o da grelha de classificação e remove todos os registos associados.

A remoção dos registos pode permitir que um utilizador ganhe novamente pontos por ações anteriores. Se a sua intenção é apenas redefinir a pontuação, recomenda-se que defina a pontuação do utilizador como 0. Tenha em atenção que apagar um utilizador não afeta a capacidade de ganhar pontos no futuro.

Importante: quando está a usar o _Subir de nível_ para todo o site, apagá-los fará com que deixem de constar nos relatórios. Neste caso, não poderá atribuir novamente os pontos. No entanto, se estiver a usar o _Subir de nível _ por disciplina, o aluno poderá ainda aparecer nos relatórios, se estiver inscrito na disciplina.

Tem a certeza absoluta de que pretende apagar os pontos e registo deste utilizador?';
$string['reallyresetallcoursestodefaults'] = 'Tem a certeza de que pretende repor todas as disciplinas para os valores predefinidos? Esta ação é irreversível.';
$string['reallyresetcourselevelstodefaults'] = 'Reiniciar realmente os níveis do curso para os níveis padrão? Esta ação não é reversível.';
$string['reallyresetcourserulestodefaults'] = 'Tem a certeza de que pretende repor as regras da disciplina para os valores predefinidos? Esta ação é irreversível.';
$string['reallyresetcoursevisualstodefaults'] = 'Reiniciar realmente a aparência dos níveis do curso para a aparência padrão? Esta ação não é reversível.';
$string['reallyresetdata'] = 'Pretende realmente reinicializar os níveis e pontos de todos os participantes desta disciplina?';
$string['reallyresetgroupdata'] = 'Pretende realmente reinicializar os níveis e pontos para todos os elementos deste grupo?';
$string['reallyreverttopluginsdefaults'] = 'Tem a certeza de que pretende redefinir as regras para as predefinições sugeridas pelo módulo? Esta ação é irreversível.';
$string['recentrewards'] = 'Reconhecimentos recentes';
$string['recommended'] = 'Recomendado';
$string['recommendedplugins'] = 'Módulos recomendados';
$string['releasenotes'] = 'Notas de lançamento';
$string['remaining'] = 'remanescente';
$string['removefilter'] = 'Remover filtro';
$string['reportisempty'] = 'O relatório está vazio. O aluno ainda não ganhou pontos de experiência.';
$string['reportisemptyenrolstudents'] = 'O relatório está vazio. Os alunos estão inscritos nesta disciplina?';
$string['requires'] = 'Requer';
$string['resetallcoursestodefaults'] = 'Repor todas as disciplinas para os valores predefinidos';
$string['resetallcoursestodefaultsintro'] = 'Clique no botão abaixo para repor as regras da disciplina para os valores predefinidos';
$string['resetcoursedata'] = 'Reinicializar os dados da disciplina';
$string['resetcourserulestodefaults'] = 'Repor as regras da disciplina para os valores predefinidos';
$string['resetgroupdata'] = 'Reinicializar informações do grupo';
$string['resetlevelstodefaults'] = 'Redefinir níveis para padrões';
$string['resetvisualstodefaults'] = 'Redefinir aparência para padrões';
$string['resultsfilteredforn'] = 'Resultados filtrados para {$a}.';
$string['reverttopluginsdefaults'] = 'Reverter para as predefinições do módulo';
$string['reverttopluginsdefaultsintro'] = 'Use o botão abaixo se pretender reverter as configurações acima para as predefinições do módulo. As regras de disciplinas já existentes não serão afetadas.';
$string['reward'] = 'Reconhecimento';
$string['rule'] = 'Regra';
$string['rule:contains'] = 'contém';
$string['rule:eq'] = 'é igual a';
$string['rule:eqs'] = 'é estritamente igual a';
$string['rule:gt'] = 'é maior que';
$string['rule:gte'] = 'é maior ou igual a';
$string['rule:lt'] = 'é menor que';
$string['rule:lte'] = 'é menor ou igual a';
$string['rule:regex'] = 'Corresponde à regex';
$string['rulecm'] = 'Atividade ou Recurso';
$string['rulecm_help'] = 'Essa condição é cumprida quando o evento ocorre na atividade ou no recurso especificado.';
$string['rulecmdesc'] = 'A atividade ou recurso é \'{$a->contextname}\'.';
$string['rulecmdescwithcourse'] = 'A atividade ou recurso é: \'{$a->contextname}\' na disciplina \'{$a->coursename}\'.';
$string['rulecminfo'] = 'Esta condição requer que a ação ocorra numa atividade ou recurso específico.';
$string['ruleevent'] = 'Evento específico';
$string['ruleeventdesc'] = 'O evento é \'{$a->eventname}\'';
$string['ruleeventinfo'] = 'Escolha a ação que os utilizadores devem executar numa lista selecionada de eventos.';
$string['ruleproperty'] = 'Propriedades do evento';
$string['rulepropertydesc'] = 'A propriedade \'{$a->property}\' {$a->compare} \'{$a->value}\'.';
$string['rulepropertyinfo'] = 'Esta condição é para utilizadores avançados com conhecimento técnico dos eventos e das respetivas propriedades.';
$string['ruleset'] = 'Conjunto de condições';
$string['ruleset:all'] = 'TODAS as condições são verdadeiras';
$string['ruleset:any'] = 'QUALQUER das condições é verdadeira';
$string['ruleset:none'] = 'NENHUMA das condições é verdadeira';
$string['rulesetinfo'] = 'Combinar várias condições numa só.';
$string['rulesformhelp'] = '<p>Este módulo faz uso de eventos para atribuir pontos de experiência por ações executadas pelos alunos. Pode usar o formulário abaixo para adicionar regras personalizadas e visualizar as regras predefinidas.</p>
<p>Verifique o <a href="{$a->log}">registo</a> do módulo para identificar que eventos são desencadeados quando executa ações na disciplina. Também pode obter mais informações sobre esses eventos ao consultar: <a href="{$a->list}">lista de todos os eventos</a> e <a href="{$a->doc}">documentação para programadores</a>. Os quatro tipos de eventos de experiência são: criar, ler, atualizar e apagar (<b>Creation</b>, <b>Reading</b>, <b>Updating</b> and <b>Deleting</b> - CRUD).</p>
<p>Tenha em atenção que o módulo não considera:
<ul>
    <li>Ações executadas por administradores, visitantes ou utilizadores não autenticados.</li>
    <li>Ações executadas por utilizadores sem a permissão \'<em>block/xp:earnxp</em>\'.</li>
    <li>Ações repetidas num curto espaço de tempo, para prevenir fraudes.</li>
    <li>Eventos que o nível educacional não é igual a \'<em>Participar</em>\'.</li>
</ul>
</p>';
$string['searchandselectcourse'] = 'Pesquisar e selecionar uma disciplina';
$string['searchandselectmodule'] = 'Pesquisar e selecionar uma atividade ou recurso';
$string['send'] = 'Enviar';
$string['setpoints'] = 'Definir pontos';
$string['shortcode:xpbadge'] = 'A medalha que corresponde ao nível do utilizador atual.';
$string['shortcode:xpiflevel'] = 'Mostrar o conteúdo quando o nível do utilizador atual corresponde.';
$string['shortcode:xpiflevel_help'] = 'Consulte os exemplos abaixo para opções de formatação. Quando um nível é estritamente específico, o conteúdo será mostrado independentemente das outras regras.
As regras _maior_ e _menor que_ devem corresponder ao conteúdo a ser mostrado. Tenha em atenção que com isto pode, às vezes, resultar em conteúdo que nunca ser mostrado!
Lembre-se que os professores, ou os utilizadores com permissão de edição, podem ver tudo.

`` `
[xpiflevel 1 3 5]
Mostrado se o nível do utilizador for exatamente 1, 3 ou 5.
[/xpiflevel]

[xpiflevel>3]
Mostrado se o nível do utilizador for maior que 3.
[/xpiflevel]

[xpiflevel>=3]
Mostrado se o nível do utilizador for maior ou igual a 3.
[/xpiflevel]

[xpiflevel>=10 <20 30]
Mostrado se o nível do utilizador for maior ou igual a 10 E é estritamente menor que 20 OU é exatamente igual a 30.
[/xpiflevel]

[xpiflevel<=10>=20]
Nunca é mostrado porque o nível do utilizador nunca pode ser menor ou igual a 10 E maior ou igual a 20.
[/xpiflevel]
`` `

Note que estes códigos de configuração NÃO PODEM ser aninhados uns dentro dos outros.';
$string['shortcode:xpladder'] = 'Mostrar uma parte da grelha de classificação';
$string['shortcode:xpladder_help'] = 'Por padrão, será exibida uma parte da tabela de classificação em torno do utilizador atual.```[xpladder]```Para exibir os 10 melhores alunos em vez dos vizinhos do utilizador atual, defina o parâmetro `top`. Pode opcionalmente definir o número de utilizadores a serem exibidos como `top=20`.```[xpladder top][xpladder top=15]```Um link para a tabela completa será exibido automaticamente abaixo da tabela. Se não quiser exibir tal link, adicione o argumento `hidelink`.```[xpladder hidelink]```Por padrão, a tabela não inclui a coluna de progresso que exibe a barra de progresso. Se tal coluna tiver sido selecionada nas colunas adicionais nas configurações da tabela de classificação, pode usar o argumento `withprogress` para a exibir.```[xpladder withprogress]```Note que quando um curso está a usar grupos, a tabela de classificação adivinhará qual grupo exibir.';
$string['shortcode:xplevelname'] = 'Mostrar o nome do nível';
$string['shortcode:xplevelname_help'] = 'Por predefinição, a etiqueta mostra o nome do nível do utilizador atual.
Como alternativa, pode usar o argumento \'level\' para exibir o nome de um nível específico.

`` ``
[xplevelname]
[xplevelname level = 5]
`` ``

Se o argumento \'level\' for indicado e o nível não existir, nada será exibido.';
$string['shortcode:xppoints'] = 'Exibe um número de pontos formatados como pontos de experiência.';
$string['shortcode:xppoints_help'] = 'Por padrão, isto mostra o número de pontos do utilizador atual. Alternativamente, pode especificar um número para substituir este valor. A estilização dos pontos dependerá de ser exibido um valor arbitrário ou os pontos do utilizador atual. Pode usar o argumento `plain` para remover qualquer estilização.```[xppoints][xppoints 500][xppoints 123 plain]```';
$string['shortcode:xpprogressbar'] = 'Barra de progressão do utilizador atual para o próximo nível.';
$string['somefeaturesrequireotherplugins'] = 'Algumas funcionalidades requerem a instalação de módulos adicionais.';
$string['someoneelse'] = 'Outra pessoa';
$string['somethinghappened'] = 'Algo aconteceu';
$string['taskcollectionloggerpurge'] = 'Limpar todos os registos (logs)';
$string['taskusagereport'] = 'Relatório de utilização';
$string['thankyou'] = 'Obrigado!';
$string['timebetweensameactions'] = 'Intervalo de tempo obrigatório entre ações idênticas';
$string['timebetweensameactions_help'] = 'O tempo mínimo necessário antes de uma ação que já aconteceu anteriormente ser aceite novamente. Uma ação é considerada idêntica se for colocada no mesmo contexto e objeto; ler um post num fórum será considerado idêntico se o mesmo post for lido novamente. Quando este valor está vazio ou igual a zero, não se aplica.';
$string['timeformaxactions'] = 'Intervalo de tempo para o máximo de ações';
$string['timeformaxactions_help'] = 'O intervalo de tempo (em segundos) durante o qual o utilizador não pode exceder um número máximo de ações.';
$string['tinytimedays'] = '{$a}d';
$string['tinytimehours'] = '{$a}h';
$string['tinytimeminutes'] = '{$a}m';
$string['tinytimenow'] = 'agora';
$string['tinytimeolderyearformat'] = '%b %Y';
$string['tinytimeseconds'] = '{$a}s';
$string['tinytimeweeks'] = '{$a}s';
$string['tinytimewithinayearformat'] = '%b %e';
$string['total'] = 'Total';
$string['unknownbadgea'] = 'Distintivo desconhecido ({$a})';
$string['unknowneventa'] = 'Evento desconhecido ({$a})';
$string['unlockfeaturewithxpplus'] = 'Desbloqueie esta funcionalidade com o XP+. <a href="{$a}">Saiba mais</a>';
$string['updateandpreview'] = 'Atualizar e visualizar';
$string['upgradingplugins'] = 'A atualizar os módulos';
$string['urlaccessdeprecated'] = 'O acesso por via deste URL foi preterido. Atualize as suas hiperligações.';
$string['usagereport'] = 'Partilhar relatório de utilização';
$string['usagereport_desc'] = 'Partilhe periodicamente de forma anónima informações de utilização com os desenvolvedores do módulo. As informações ajudarão a entender melhor como o módulo está a ser usado e influenciarão o seu desenvolvimento. As informações partilhadas contêm informações básicas sobre o site Moodle (URL, versão) e informações de utilização sobre o módulo (número de utilizadores que ganham pontos, visão global das configurações, regras usadas, ...).';
$string['usealgo'] = 'Usar o algoritmo';
$string['usecustomlevelbadges'] = 'Usar medalhas personalizadas dos níveis';
$string['usecustomlevelbadges_help'] = 'Quando definida como \'Sim\', tem de fornecer uma imagem para cada nível.';
$string['usingalgo'] = 'Usar algoritmo';
$string['value'] = 'Valor';
$string['valuessaved'] = 'Os valores foram guardados com sucesso.';
$string['viewas'] = 'Visualizar como';
$string['viewlogs'] = 'Ver registos';
$string['viewtheladder'] = 'Visualizar a lista de classificação';
$string['visualsintro'] = 'Personalize a aparência dos níveis e o significado dos pontos.';
$string['wewillreplyat'] = 'Responderemos em: _ {$a} _.';
$string['when'] = 'Quando';
$string['wherearexpused'] = 'Onde são usados os pontos?';
$string['wherearexpused_desc'] = 'Quando selecionado \'Nas disciplinas\', os pontos de experiência ganhos apenas são considerados na disciplina em que o bloco foi adicionado. Quando escolher \'No site\', um utilizador pode "Subir de nível" em todo o site, ao invés de apenas por disciplina, e todas as experiências obtidas no site serão usadas.';
$string['whoops'] = 'Whoops!';
$string['xp'] = 'Pontos de experiência';
$string['xp:addinstance'] = 'Adicionar um novo bloco';
$string['xp:earnxp'] = 'A ganhar pontos';
$string['xp:manage'] = 'Gerir todos os aspetos dos pontos de experiência';
$string['xp:myaddinstance'] = 'Adicionar o bloco ao meu Painel do utilizador';
$string['xp:view'] = 'Visualizar o bloco e páginas relacionadas';
$string['xp:viewlogs'] = 'Visualizar registos';
$string['xp:viewreport'] = 'Ver relatório';
$string['xpgaindisabled'] = 'Ganho de pontos desativado';
$string['xpplusrequired'] = 'XP+ necessário';
$string['xprequired'] = 'XP obrigatório';
$string['xptogo'] = '[[{$a}]] para terminar';
$string['youleveledupexcl'] = 'Subiste de nível!';
$string['youreachedlevel'] = 'Atingiu o nível:';
$string['youreachedlevela'] = 'Alcançaste o nível {$a}!';
$string['yourmessage'] = 'Sua mensagem';
$string['yourownrules'] = 'Regras pessoais';
