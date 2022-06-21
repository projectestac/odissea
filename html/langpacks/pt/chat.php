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
 * Strings for component 'chat', language 'pt', version '3.11'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Tem sessões de Chat a decorrer em breve';
$string['ajax'] = 'Versão com AJAX';
$string['autoscroll'] = 'Scroll automático';
$string['beep'] = 'Chamar';
$string['bubble'] = 'Balões de texto';
$string['cantlogin'] = 'Não foi possível entrar no chat!';
$string['chat:addinstance'] = 'Adicionar novo chat';
$string['chat:chat'] = 'Aceder a uma sala de chat';
$string['chat:deletelog'] = 'Apagar as gravações do chat';
$string['chat:exportparticipatedsession'] = 'Exportar sessão de chat em que participou';
$string['chat:exportsession'] = 'Exportar qualquer sessão de chat';
$string['chat:readlog'] = 'Ver gravações do chat';
$string['chat:talk'] = 'Submeter mensagens no chat';
$string['chat:view'] = 'Ver atividade Chat';
$string['chatintro'] = 'Descrição';
$string['chatname'] = 'Designação';
$string['chatreport'] = 'Sessões de chat';
$string['chattime'] = 'Próxima sessão de chat';
$string['compact'] = 'Compacto';
$string['composemessage'] = 'Compor mensagem';
$string['configmethod'] = 'O método de chat com AJAX proporciona uma inteface de chat baseado em AJAX que contacta o servidor regularmente para atualização. O método normal de chat precisa que os clientes contactem regularmente o servidor para obter atualizações. Não precisa de nenhuma configuração e funciona em qualquer parte, mas poderá sobrecarregar o servidor quando estão muitas pessoas no chat. A utilização dum servidor daemon requer acesso via shell ao Unix, mas o resultado é um ambiente de chat mais rápido e escalável.';
$string['confignormalupdatemode'] = 'Normalmente, as atualizações da sala de chat são feitas de forma eficiente usando o comando <em>Keep-Alive</em> do HTTP 1.1, mas esse método gera uma grande carga no servidor. Um método mais avançado consiste em usar a estratégia de  <em>Stream</em> para enviar atualizações para os utilizadores. A utilização do <em>Stream</em> tem uma escalabilidade melhor (semelhante à do método chat) mas o seu servidor poderá não suportar este método.';
$string['configoldping'] = 'Qual o tempo máximo sem resposta para considerar que o utilizador está desconectado (em segundos)? Este é apenas um limite superior pois habitualmente quando um utilizador se desconecta tal é detetado rapidamente. Valores reduzidos irão exigir mais do servidor. Se estiver a utilizar o método normal <strong>nunca</strong> defina este valor para menos de 2 x o tempo de Atualizar sala';
$string['configrefreshroom'] = 'Com que frequência será atualizada a sala de chat (em segundos)? Um valor muito baixo fará com que a resposta da sala de chat seja mais rápida, mas vai impor uma carga mais pesada ao seu servidor quando o número de participantes no chat for elevado. Se estiver a usar atualizações <em>Stream</em>, pode escolher uma frequência de atualização superior - tente o valor 2.';
$string['configrefreshuserlist'] = 'Com que frequência deve ser atualizada a lista de participantes? (em segundos)';
$string['configserverhost'] = 'O nome do computador onde se encontra o servidor daemon.';
$string['configserverip'] = 'O endereço IP do servidor acima.';
$string['configservermax'] = 'Número máximo de participantes permitido';
$string['configserverport'] = 'Porta a usar no servidor para o daemon';
$string['coursetheme'] = 'Tema da disciplina';
$string['crontask'] = 'Processamento em segundo plano do módulo Chat';
$string['currentchats'] = 'Sessões de chat ativas';
$string['currentusers'] = 'Utilizadores no chat';
$string['deletesession'] = 'Apagar sessão';
$string['deletesessionsure'] = 'Tem a certeza de que pretende apagar a gravação desta sessão?';
$string['donotusechattime'] = 'Sem hora definida';
$string['enterchat'] = 'Clique aqui para entrar no chat';
$string['entermessage'] = 'Introduza a sua mensagem';
$string['errornousers'] = 'Não foi encontrado nenhum utilizador!';
$string['eventmessagesent'] = 'Mensagem enviada';
$string['eventsessionsviewed'] = 'Sessões visualizadas';
$string['explaingeneralconfig'] = 'Estas configurações serão  <strong>sempre</strong> aplicadas.';
$string['explainmethoddaemon'] = 'Estas configurações aplicam-se unicamente se tiver selecionado "Servidor daemon de Chat" na opção Método do Chat';
$string['explainmethodnormal'] = 'Estas configurações aplicam-se unicamente se tiver selecionado o "Normal" na opção Método do Chat';
$string['generalconfig'] = 'Configuração geral';
$string['idle'] = 'Sem atividade';
$string['indicator:cognitivedepth'] = 'Compreensão do Chat';
$string['indicator:cognitivedepth_help'] = 'Este indicador é baseado na capacidade cognitiva alcançada pelo aluno na atividade Chat.';
$string['indicator:cognitivedepthdef'] = 'Compreensão do Chat';
$string['indicator:cognitivedepthdef_help'] = 'O participante alcançou esta percentagem da capacidade cognitiva oferecida pelas atividades Chat durante esse intervalo de análise (Níveis = Não visualizado, Visualizado, Submetido, Visualizado feedback)';
$string['indicator:socialbreadth'] = 'Socialização do Chat';
$string['indicator:socialbreadth_help'] = 'Este indicador é baseado na extensão social alcançada pelo aluno na atividade Chat.';
$string['indicator:socialbreadthdef'] = 'Socialização do Chat';
$string['indicator:socialbreadthdef_help'] = 'O participante alcançou esta percentagem do relacionamento social oferecido pelas atividades Chat durante esse intervalo de análise (Níveis = Sem participação, Participante individual, Participante com outros)';
$string['inputarea'] = 'Área de entrada';
$string['invalidid'] = 'Não foi possível encontrar a sala de chat!';
$string['list_all_sessions'] = 'Listar todas as sessões';
$string['list_complete_sessions'] = 'Listar apenas sessões concluídas.';
$string['listing_all_sessions'] = 'Listagem de todas as sessões';
$string['messagebeepseveryone'] = '{$a} chama toda a gente!';
$string['messagebeepsyou'] = '{$a} acabou de o chamar!';
$string['messageenter'] = '{$a} acabou de entrar neste chat';
$string['messageexit'] = '{$a} acabou de sair deste chat';
$string['messages'] = 'Mensagens';
$string['messageyoubeep'] = 'Você chamou {$a}';
$string['method'] = 'Método do Chat';
$string['methodajax'] = 'AJAX';
$string['methoddaemon'] = 'Servidor daemon de Chat';
$string['methodnormal'] = 'Normal';
$string['modulename'] = 'Chat';
$string['modulename_help'] = 'A atividade Chat permite aos alunos participarem numa sessão síncrona via web.

O chat pode ocorrer apenas numa sessão ou repetir-se à mesma hora ao longo de vários dias ou semanas. As sessões são gravadas e podem ser disponibilizadas a todos os alunos ou a apenas ao professor.

O Chat é uma ferramenta particularmente útil em situações em que as pessoas não podem encontrar-se presencialmente, tais como:

* Encontros regulares entre alunos inscritos numa disciplina online, o que lhes permite compartilhar experiências com outros alunos inscritos na mesma disciplina, independentemente do local (cidade ou país) onde se encontrem
* Conversas entre professor e aluno, quando este se encontra temporariamente impedido de comparecer pessoalmente nas aulas, permitindo-lhe recuperar os trabalhos em atraso;
* Para permitir que os alunos se possam reunir fora do contexto de aula e discutir as suas experiências;
* Para os pais terem a oportunidade de monitorizar e acompanhar as suas crianças pela descoberta do mundo das redes sociais;
* Sessões dinamizadas por um orador convidado que se encontra num local distante, permitindo assim a comunicação entre todos os participantes.';
$string['modulename_link'] = 'mod/chat/view';
$string['modulenameplural'] = 'Chats';
$string['neverdeletemessages'] = 'Nunca apagar mensagens';
$string['nextchattime'] = 'Próxima sessão de chat:';
$string['nextsession'] = 'Próxima sessão';
$string['no_complete_sessions_found'] = 'Não foram encontradas sessões concluídas.';
$string['nochat'] = 'Chat não encontrado';
$string['noguests'] = 'O chat não está disponível para visitantes.';
$string['nomessages'] = 'Ainda não existem mensagens';
$string['nopermissiontoseethechatlog'] = 'Não tem permissão para visualizar as gravações do chat';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Nenhuma sessão agendada';
$string['notallowenter'] = 'Não tem permissão para entrar no chat.';
$string['notlogged'] = 'Não está autenticado!';
$string['oldping'] = 'Tempo limite de sem atividade';
$string['page-mod-chat-x'] = 'Qualquer página da atividade chat';
$string['pastchats'] = 'Sessões de chat anteriores';
$string['pluginadministration'] = 'Administração do Chat';
$string['pluginname'] = 'Chat';
$string['privacy:metadata:chat_messages_current'] = 'Sessão atual do chat. Estes dados são temporários e são apagados depois da sessão de chat ser apagada.';
$string['privacy:metadata:chat_users'] = 'Monitoriza que alunos estão em cada sala de Chat';
$string['privacy:metadata:chat_users:firstping'] = 'Hora do primeiro acesso à sala de Chat';
$string['privacy:metadata:chat_users:ip'] = 'IP do utilizador';
$string['privacy:metadata:chat_users:lang'] = 'Idioma do utilizador';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Hora da última mensagem nesta sala de Chat';
$string['privacy:metadata:chat_users:lastping'] = 'Hora do último acesso à sessão de Chat';
$string['privacy:metadata:chat_users:userid'] = 'ID do utilizador';
$string['privacy:metadata:chat_users:version'] = 'Como os utilizadores acedem ao Chat (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'O registo de mensagens enviadas durante a sessão de chat';
$string['privacy:metadata:messages:issystem'] = 'Se a mensagem é, ou não, uma mensagem gerada pelo sistema';
$string['privacy:metadata:messages:message'] = 'A mensagem';
$string['privacy:metadata:messages:timestamp'] = 'Data e hora a que a mensagem foi enviada';
$string['privacy:metadata:messages:userid'] = 'ID do utilizador autor da mensagem';
$string['refreshroom'] = 'Atualizar sala';
$string['refreshuserlist'] = 'Atualizar lista de utilizadores';
$string['removemessages'] = 'Apagar todas as mensagens';
$string['repeatdaily'] = 'Todos os dias à mesma hora';
$string['repeatnone'] = 'Sem repetições - apenas à hora definida';
$string['repeattimes'] = 'Repetir/publicar horário das sessões';
$string['repeatweekly'] = 'Todas as semanas à mesma hora';
$string['saidto'] = 'disse a';
$string['savemessages'] = 'Manter gravação de sessões anteriores durante';
$string['search:activity'] = 'Chat - informações da atividade';
$string['seesession'] = 'Ver sessão';
$string['send'] = 'Enviar';
$string['sending'] = 'A enviar';
$string['serverhost'] = 'Nome do servidor';
$string['serverip'] = 'IP do servidor';
$string['servermax'] = 'Máximo de utilizadores';
$string['serverport'] = 'Porta do servidor';
$string['sessions'] = 'Sessões de chat';
$string['sessionstart'] = 'A próxima sessão de chat será {$a->date} (daqui a {$a->fromnow})';
$string['sessionstartsin'] = 'A próxima sessão de chat começará {$a} a partir de agora.';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Todos podem ver as sessões anteriores';
$string['studentseereports_help'] = 'Se definir como Não, apenas os utilizadores com a permissão \'mod/chat:readlog\' podem ver as gravações das sessões';
$string['talk'] = 'Falar';
$string['updatemethod'] = 'Método de atualização';
$string['updaterate'] = 'Frequência de atualização:';
$string['userlist'] = 'Lista de utilizadores';
$string['usingchat'] = 'A usar o chat';
$string['usingchat_help'] = 'O módulo Chat inclui algumas caraterísticas para tornar o chat mais agradável.
* Ícones expressivos - Qualquer ícone expressivo (emoticon) que pode usar noutras partes do Moodle pode ser usado também aqui e será substituído pela imagem correspondente. Por exemplo, :-)
* Hiperligações - Os endereços da Web serão transformados automaticamente em hiperligações.
* Personalização - Pode começar uma linha com "/me" ou ":" para personalizar a mensagem. Por exemplo, se o seu nome for Joaquim, e escrever ":sorriu!" ou "/me sorriu!", todos os outros participantes verão "Joaquim sorriu!"
* Beeps - Pode enviar um som aos outros participantes clicando em "chamar" junto dos seus nomes. Um atalho útil para chamar todos os participantes consiste em escrever "beep all".
* HTML - Se souber algum código HTML, poderá usá-lo no seu texto para fazer coisas como, por exemplo, inserir imagens, tocar sons ou enviar texto com diferentes cores.';
$string['viewreport'] = 'Ver gravações de sessões anteriores';
