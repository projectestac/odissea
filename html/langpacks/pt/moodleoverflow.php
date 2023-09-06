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
 * Strings for component 'moodleoverflow', language 'pt', version '4.1'.
 *
 * @package     moodleoverflow
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addanewdiscussion'] = 'Adicionar novo tópico de discussão';
$string['addanewreply'] = 'Adicionar nova resposta';
$string['allowcoursereputation'] = 'Somar a reputação dentro de uma disciplina.';
$string['allownegativereputation'] = 'Permitir reputação negativa?';
$string['allownegativereputation_help'] = 'Se configurado para sim, a reputação dos utilizadores dentro de uma disciplina ou dentro de um módulo pode ser negativa. Se definido como não, a reputação irá parar de diminuir em zero.';
$string['allowratingchange'] = 'Permitir alterar as classificações';
$string['allsubscribe'] = 'Subscrever todos os fóruns';
$string['allunsubscribe'] = 'Cancelar subscrição de todos os fóruns';
$string['anonym_you'] = 'Anónimo (utilizador)';
$string['anonymous'] = 'Anónimo';
$string['anonymous:everything'] = 'Perguntas e respostas (irreversível)';
$string['anonymous:only_questions'] = 'Apenas perguntas (irreversível)';
$string['anonymous_help'] = 'O nome de utilizador estará oculto em todas as perguntas (e respostas). <br>AVISO: depois das perguntas (e respostas) forem tornadas anónimas, esta operação não poderá ser revertida.<br>A configuração só pode ser alterada para um nível superior de anonimato.';
$string['areaattachment'] = 'Anexos';
$string['areapost'] = 'Mensagens';
$string['attachment'] = 'Anexo';
$string['attachment_help'] = 'Pode opcionalmente anexar um ou mais ficheiros a uma publicação no fórum. Se anexar uma imagem, ela será mostrada após a mensagem.';
$string['attachments'] = 'Anexos';
$string['bynameondate'] = 'por {$a->name} ({$a->rating}) - {$a->date}';
$string['bynameondatenorating'] = 'por {$a->name} - {$a->date}';
$string['cannotcreatediscussion'] = 'Não foi possível criar uma nova discussão';
$string['cannotdeletepost'] = 'Não pode apagar esta publicação!';
$string['cannotfindparentpost'] = 'Não foi possível localizar o principal antecedente da publicação {$a}';
$string['cannotreply'] = 'Não pode responder a esta publicação';
$string['cannottrack'] = 'Não foi possível parar o seguimento do fórum';
$string['cannotunsubscribe'] = 'Não foi possível cancelar a subscrição do fórum';
$string['cannotupdatepost'] = 'Não pode atualizar esta publicação';
$string['cleanreadtime'] = 'Hora para marcar as publicações antigas como lidas';
$string['clicktosubscribe'] = 'Sem subscrição ativa desta discussão. Clique para subscrever.';
$string['clicktounsubscribe'] = 'Subscrição ativa para esta discussão. Clique para cancelar a subscrição.';
$string['configallowcoursereputation'] = 'Permitir a soma da reputação de todas as instâncias da disciplina atual?';
$string['configallowratingchange'] = 'Um utilizador pode alterar as suas classificações?';
$string['configcleanreadtime'] = 'A hora do dia para limpar mensagens antigas da tabela "lida".';
$string['configforcedreadtracking'] = 'Permitir que MoodleOverflow seja configurado para seguimento de leitura forçado. Isto resultará num menor desempenho para alguns utilizadores, particularmente em disciplinas com muitas instâncias MoodleOverflow e muitas publicações. Quando desativado, qualquer MoodleOverflow previamente configurado para \'Forçar\' é tratado como opcional.';
$string['configmanydiscussions'] = 'Número máximo de discussões mostradas por página numa instância do MoodleOverflow';
$string['configmaxattachments'] = 'Número máximo predefinido de anexos permitidos por publicação.';
$string['configmaxbytes'] = 'Tamanho máximo predefinido para todos os anexos do fórum (sujeito aos limites da disciplina e outras configurações locais)';
$string['configmaxeditingtime'] = 'A duração máxima é de 3600 segundos (= uma hora).';
$string['configmaxmailingtime'] = 'As publicações mais "velhas" que este número de horas não serão enviadas aos utilizadores. Isto ajudará a evitar problemas onde o Cron não está a funcionar durante muito tempo.';
$string['configoldpostdays'] = 'Número de dias, após os quais, qualquer publicação é considerada lida.';
$string['configpreferteachersmark'] = 'A resposta marcada como solução pelo responsável da disciplina tem prioridade sobre a resposta marcada como útil pelo iniciante da discussão.';
$string['configreputationnotnegative'] = 'Proibir que a reputação dos utilizadores seja negativa.';
$string['configtrackingtype'] = 'Configuração predefinida para o seguimento de leitura.';
$string['configtrackmoodleoverflow'] = 'Defina para \'Sim\' se pretender seguir lida/não lida para cada utilizador.';
$string['configvotescaledownvote'] = 'A reputação que um "voto negativo" dá à publicação';
$string['configvotescalehelpful'] = 'A reputação que um "marcar como útil" dá à publicação';
$string['configvotescalesolved'] = 'A reputação que um "marcar como solução" dá à publicação';
$string['configvotescaleupvote'] = 'A reputação que um "voto positivo" dá à publicação';
$string['configvotescalevote'] = 'A reputação que a "votação" dá à publicação';
$string['confirmsubscribe'] = 'Pretende realmente subscrever o fórum \'{$a}\'?';
$string['confirmsubscribediscussion'] = 'Pretende realmente subscrever a discussão? \'{$a->discussion}\' do fórum \'{$a->moodleoverflow}\'?';
$string['confirmunsubscribe'] = 'Pretende realmente cancelar a subscrição de \'{$a}\'?';
$string['confirmunsubscribediscussion'] = 'Pretende realmente cancelar a subscrição da discussão? \'{$a->discussion}\' do fórum \'{$a->moodleoverflow}\'?';
$string['couldnotadd'] = 'Não foi possível adicionar a sua publicação devido a um erro desconhecido';
$string['couldnotdeletereplies'] = 'Desculpe, isto não pode ser apagado, já que algumas pessoas já responderam';
$string['couldnotupdate'] = 'Não foi possível atualizar a sua publicação devido a um erro desconhecido';
$string['coursewidereputation'] = 'Reputação de vários módulos?';
$string['coursewidereputation_help'] = 'Se configurado para sim, a reputação dos utilizadores será a soma de todos os módulos MoodleOverflow desta disciplina.';
$string['crontask'] = 'Trabalhos de manutenção de MoodleOverflow';
$string['delete'] = 'Apagar';
$string['deletesure'] = 'Tem a certeza de que pretende apagar esta publicação?';
$string['deletesureplural'] = 'Tem a certeza de que pretende apagar esta publicação e todas as respostas? ({$a} mensagens)';
$string['disallowsubscribe'] = 'Não são permitidas subscrições';
$string['discussionlocked'] = 'Esta discussão foi bloqueada e por isso já não pode responder a ela.';
$string['discussionname'] = 'Nome da discussão';
$string['discussionnownotsubscribed'] = '{$a->name} NÃO será notificado de novas publicações em \'{$a->discussion}\' de \'{$a->moodleoverflow}\'';
$string['discussionnowsubscribed'] = '{$a->name} SERÁ notificado de novas publicações em \'{$a->discussion}\' de \'{$a->moodleoverflow}\'';
$string['discussions'] = 'Discussões';
$string['discussionsubscription'] = 'Subscrição da discussão';
$string['discussionsubscription_help'] = 'Subscrever uma discussão significa que receberá notificações de novas publicações para a discussão.';
$string['downvotenotchangeable'] = 'Voto negativo (não alterável)';
$string['edit'] = 'Editar';
$string['editedby'] = 'Editada por {$a->name} - original submetido {$a->date}';
$string['editedpostupdated'] = 'A publicação de {$a} foi atualizada';
$string['erroremptymessage'] = 'A mensagem da publicação não pode estar vazia';
$string['erroremptysubject'] = 'O assunto da publicação não pode estar vazio';
$string['errorwhiledelete'] = 'Ocorreu um erro ao apagar o registo.';
$string['eventdiscussioncreated'] = 'Discussão criada';
$string['eventdiscussiondeleted'] = 'Discussão apagada';
$string['eventdiscussionsubscriptioncreated'] = 'Criada subscrição da discussão';
$string['eventdiscussionsubscriptiondeleted'] = 'Apagada subscrição da discussão';
$string['eventdiscussionviewed'] = 'Discussão visualizada';
$string['eventpostcreated'] = 'Publicação criada';
$string['eventpostdeleted'] = 'Publicação apagada';
$string['eventpostupdated'] = 'Publicação atualizada';
$string['eventratingcreated'] = 'Classificação criada';
$string['eventratingdeleted'] = 'Classificação apagada';
$string['eventratingupdated'] = 'Classificação atualizada';
$string['eventreadtrackingdisabled'] = 'Seguimento de leitura desativado';
$string['eventreadtrackingenabled'] = 'Seguimento de leitura ativado';
$string['eventsubscriptioncreated'] = 'Subscrição criada';
$string['eventsubscriptiondeleted'] = 'Subscrição apagada';
$string['everyonecannowchoose'] = 'Todos podem optar por subscrever';
$string['everyoneisnowsubscribed'] = 'A partir de agora, todos estão subscritos neste fórum';
$string['everyoneissubscribed'] = 'Todos estão subscritos neste fórum';
$string['forcedreadtracking'] = 'Permitir o seguimento de leitura forçado';
$string['generalmoodleoverflows'] = 'Fóruns nesta disciplina';
$string['gotoindex'] = 'Gerir preferências';
$string['grademaxgradeerror'] = 'A nota máxima deve ser um número inteiro positivo diferente de 0';
$string['gradesreport'] = 'Relatório das notas';
$string['gradesupdated'] = 'Notas atualizadas';
$string['hiddenmoodleoverflowpost'] = 'Publicação oculta do fórum';
$string['invaliddiscussionid'] = 'O ID da discussão estava incorreto';
$string['invalidforcesubscribe'] = 'Modo inválido de subscrição forçada';
$string['invalidmoodleoverflowid'] = 'O ID do fórum estava incorreto';
$string['invalidparentpostid'] = 'O ID do ascendente da publicação estava incorreto';
$string['invalidpostid'] = 'ID de publicação inválido - {$a}';
$string['invalidratingid'] = 'A classificação enviada não é nem um voto positivo nem um voto negativo.';
$string['mailindexlink'] = 'Alterar as suas preferências do fórum: {$a}';
$string['manydiscussions'] = 'Discussões por página';
$string['markallread'] = 'Marcar como lidas todas as publicações nesta discussão.';
$string['markdiscussionreadsuccessful'] = 'A discussão foi marcada como lida.';
$string['markhelpful'] = 'Marcar como útil';
$string['markmoodleoverflowreadsuccessful'] = 'Todas as publicações foram marcadas como lidas.';
$string['marknothelpful'] = 'Não útil';
$string['marknotsolved'] = 'Remover a marcação de solução';
$string['markread'] = 'Marcar como lida';
$string['markreadfailed'] = 'Uma publicação da discussão não pode ser marcada como lida.';
$string['marksolved'] = 'Marcar como solução';
$string['markunread'] = 'Marcar como não lida';
$string['maxattachments'] = 'Número máximo de anexos';
$string['maxattachments_help'] = 'Esta configuração especifica o número máximo de fichjeiros que podem ser anexados a uma publicação no fórum.';
$string['maxattachmentsize'] = 'Tamanho máximo do anexo';
$string['maxattachmentsize_help'] = 'Esta configuração especifica o maior tamanho de ficheiro que pode ser anexado a uma publicação no fórum.';
$string['maxeditingtime'] = 'Tempo máximo para edição de uma publicação pelo seu proprietário (segundos)';
$string['maxmailingtime'] = 'Tempo máximo de envio';
$string['message'] = 'Mensagem';
$string['messageprovider:posts'] = 'Notificação de novas publicações';
$string['modulename'] = 'MoodleOverflow';
$string['modulename_help'] = 'O módulo permite que os participantes usem uma estrutura de fórum de pergunta-resposta. A exibição do fórum não é cronológica uma vez que a ordem baseia-se numa votação colaborativa em vez de ser na data e hora das publicações.';
$string['modulenameplural'] = 'MoodleOverflows';
$string['moodleoverflow'] = 'MoodleOverflow';
$string['moodleoverflow:addinstance'] = 'Adicionar nova instância de MoodleOverflow';
$string['moodleoverflow:allowforcesubscribe'] = 'Permitir subscrição forçada';
$string['moodleoverflow:createattachment'] = 'Criar anexos';
$string['moodleoverflow:deleteanypost'] = 'Apagar publicações';
$string['moodleoverflow:deleteownpost'] = 'Apagar as próprias publicações';
$string['moodleoverflow:editanypost'] = 'Editar publicações';
$string['moodleoverflow:managesubscriptions'] = 'Gerir subscrições';
$string['moodleoverflow:marksolved'] = 'Marcar uma publicação como solução';
$string['moodleoverflow:ratehelpful'] = 'Marcar uma publicação como útil';
$string['moodleoverflow:ratepost'] = 'Avaliar uma publicação';
$string['moodleoverflow:replypost'] = 'Responder numa discussão';
$string['moodleoverflow:startdiscussion'] = 'Iniciar uma discussão';
$string['moodleoverflow:viewdiscussion'] = 'Visualizar discussão';
$string['moodleoverflowauthorhidden'] = 'Autor (oculto)';
$string['moodleoverflowbodyhidden'] = 'Não pode visualizar esta publicação, provavelmente porque não publicou na discussão, o tempo de edição máximo ainda não terminou, a discussão não iniciou ou a discussão já terminou.';
$string['moodleoverflowfieldset'] = 'Exemplo de conjunto de campos personalizado';
$string['moodleoverflowname'] = 'Nome';
$string['moodleoverflows'] = 'MoodleOverflows';
$string['moodleoverflowsubjecthidden'] = 'Assunto (oculto)';
$string['nodiscussions'] = 'Ainda não existem tópicos de discussão neste fórum.';
$string['noguestpost'] = 'Desculpa, os visitantes não podem publicar.';
$string['noguesttracking'] = 'Desculpa, os visitantes não podem configurar opções de seguimento.';
$string['noonecansubscribenow'] = 'As subscrições estão desativadas';
$string['nopermissiontosubscribe'] = 'Não tem permissão para visualizar subscritores';
$string['nopostmoodleoverflow'] = 'Desculpe, não tem permissão para publicar neste fórum.';
$string['noratemoodleoverflow'] = 'Desculpe, não tem permissão para votar neste fórum.';
$string['noratingchangeallowed'] = 'Não tem permissão para alterar as suas classificações.';
$string['notexists'] = 'A discussão já não existe';
$string['notpartofdiscussion'] = 'Esta publicação não faz parte de uma discussão';
$string['notrackmoodleoverflow'] = 'Não seguir publicações não lidas';
$string['notstartuser'] = 'Apenas o utilizador que iniciou a discussão pode marcar uma resposta como útil.';
$string['notteacher'] = 'Apenas os responsáveis da disciplina podem fazer isto.';
$string['noviewdiscussionspermission'] = 'Não tem permissão para visualizar discussões neste fórum';
$string['nowallsubscribed'] = 'Todos os fóruns da disciplina \'{$a}\' estão subscritos.';
$string['nowallunsubscribed'] = 'Nenhum fórum da disciplina \'{$a}\' está subscrito.';
$string['nownotsubscribed'] = '{$a->name} NÃO será notificado de novas publicações em \'{$a->moodleoverflow}\'';
$string['nownottracking'] = '{$a->name} NÃO está a seguir o fórum \'{$a->moodleoverflow}\'';
$string['nowsubscribed'] = '{$a->name} SERÁ notificado de novas publicações em \'{$a->moodleoverflow}\'';
$string['nowtracking'] = '{$a->name} ESTÁ a seguir o fórum \'{$a->moodleoverflow}\'.';
$string['oldpostdays'] = 'Marcar como lida após';
$string['parent'] = 'Mostrar ascendente';
$string['permalink'] = 'Apontador';
$string['pluginadministration'] = 'Administração de MoodleOverflow';
$string['pluginname'] = 'MoodleOverflow';
$string['postaddedsuccess'] = 'A sua publicação foi adicionada com sucesso.';
$string['postaddedtimeleft'] = 'Tem {$a} para editar se quiser fazer qualquer alteração.';
$string['postbyuser'] = '{$a->post} por {$a->user}';
$string['postincontext'] = 'Ver a publicação no contexto';
$string['postmailinfolink'] = 'Isto é uma cópia de uma mensagem publicada em {$a->coursename}.

Para responder, clique nesta hiperligação: {$a->replylink}';
$string['postmailsubject'] = '{$a->courseshortname}: {$a->subject}';
$string['postnotexist'] = 'A publicação solicitada não existe';
$string['posts'] = 'Publicações';
$string['posttomoodleoverflow'] = 'Publicar no fórum';
$string['postupdated'] = 'A tua publicação foi atualizada';
$string['preferteachersmark'] = 'Prefere as avaliações do responsável da disciplina?';
$string['privacy:anonym_discussion_name'] = 'Anónimo na discussão';
$string['privacy:anonym_post_message'] = 'Este conteúdo foi apagado.';
$string['privacy:anonym_user_name'] = 'Anónimo';
$string['privacy:discussionsubscriptionpreference'] = 'Escolheu a seguinte preferência de subscrição de discussão para este fórum: "{$a->preference}"';
$string['privacy:grade'] = 'A sua nota neste fórum MoodleOverflow.';
$string['privacy:metadata:core_files'] = 'O Moodleoverflow armazena ficheiros que foram enviados pelo utilizador para fazer parte de uma publicação no fórum.';
$string['privacy:metadata:moodleoverflow_discuss_subs'] = 'Informações sobre as subscrições em discussões específicas no fórum. Inclui quando um utilizador optou por subscrever uma discussão ou cancelar a subscrição de uma discussão.';
$string['privacy:metadata:moodleoverflow_discuss_subs:discussion'] = 'O ID da discussão que foi subscrita/cancelada a subscrição.';
$string['privacy:metadata:moodleoverflow_discuss_subs:preference'] = 'Data/hora do início da subscrição.';
$string['privacy:metadata:moodleoverflow_discuss_subs:userid'] = 'O ID do utilizador que alterou as configurações da subscrição.';
$string['privacy:metadata:moodleoverflow_discussions'] = 'Informações sobre discussões do fórum. Inclui as discussões que um utilizador iniciou.';
$string['privacy:metadata:moodleoverflow_discussions:name'] = 'Nome da discussão';
$string['privacy:metadata:moodleoverflow_discussions:timemodified'] = 'A data/hora em que a discussão foi modificada pela última vez (por exemplo, foi feita uma publicação).';
$string['privacy:metadata:moodleoverflow_discussions:userid'] = 'O ID do utilizador que iniciou a discussão.';
$string['privacy:metadata:moodleoverflow_discussions:usermodified'] = 'O ID do último utilizador que modificou a discussão';
$string['privacy:metadata:moodleoverflow_posts'] = 'Informações sobre as publicações do fórum. Inclui a data em que um utilizador escreveu as publicações.';
$string['privacy:metadata:moodleoverflow_posts:created'] = 'Data de criação da publicação.';
$string['privacy:metadata:moodleoverflow_posts:discussion'] = 'O ID da discussão para a qual esta publicação está contribuir.';
$string['privacy:metadata:moodleoverflow_posts:message'] = 'O texto desta publicação.';
$string['privacy:metadata:moodleoverflow_posts:modified'] = 'Data da última modificação.';
$string['privacy:metadata:moodleoverflow_posts:parent'] = 'O ID da publicação à qual se refere esta publicação.';
$string['privacy:metadata:moodleoverflow_posts:userid'] = 'O ID do utilizador que enviou esta publicação.';
$string['privacy:metadata:moodleoverflow_ratings'] = 'Informações sobre a classificação das publicações. Inclui quando um utilizador avaliou uma publicação e a respetiva classificação.';
$string['privacy:metadata:moodleoverflow_ratings:discussionid'] = 'O ID da discussão à qual pertence a publicação classificada.';
$string['privacy:metadata:moodleoverflow_ratings:firstrated'] = 'A data em que a classificação foi enviada.';
$string['privacy:metadata:moodleoverflow_ratings:lastchanged'] = 'A data da última alteração da classificação.';
$string['privacy:metadata:moodleoverflow_ratings:moodleoverflowid'] = 'O ID do fórum Moodleoverflow que contém a publicação classificada.';
$string['privacy:metadata:moodleoverflow_ratings:postid'] = 'O ID da publicação que foi classificada.';
$string['privacy:metadata:moodleoverflow_ratings:rating'] = 'A classificação enviada. 0 = neutro, 1 = negativa, 2 = positiva, 3 = útil, 4 = solução';
$string['privacy:metadata:moodleoverflow_ratings:userid'] = 'O ID do utilizador que enviou a classificação.';
$string['privacy:metadata:moodleoverflow_read'] = 'Informações sobre o seguimento da leitura das publicações. Inclui quando as publicações foram lidas por um utilizador.';
$string['privacy:metadata:moodleoverflow_read:discussionid'] = 'O ID da discussão ao qual pertence a publicação lida.';
$string['privacy:metadata:moodleoverflow_read:firstread'] = 'A data em que a publicação foi lida pela primeira vez.';
$string['privacy:metadata:moodleoverflow_read:lastread'] = 'A data em que a publicação foi lida pelo utilizador pela última vez.';
$string['privacy:metadata:moodleoverflow_read:postid'] = 'O ID da publicação que foi lida.';
$string['privacy:metadata:moodleoverflow_read:userid'] = 'O ID do utilizador que leu a publicação.';
$string['privacy:metadata:moodleoverflow_subscriptions'] = 'Informações sobre subscrições de fóruns. Inclui os fóruns que um utilizador subscreveu.';
$string['privacy:metadata:moodleoverflow_subscriptions:moodleoverflow'] = 'O ID do fórum MoodleOverflow que o utilizador subscreveu.';
$string['privacy:metadata:moodleoverflow_subscriptions:userid'] = 'O ID do utilizador que subscreveu o fórum.';
$string['privacy:metadata:moodleoverflow_tracking'] = 'Informações sobre o seguimento de fóruns. Inclui os fóruns que um utilizador não segue.';
$string['privacy:metadata:moodleoverflow_tracking:moodleoverflowid'] = 'O ID do fórum MoodleOverflow que não é seguido pelo utilizador.';
$string['privacy:metadata:moodleoverflow_tracking:userid'] = 'O ID do utilizador que não segue o fórum.';
$string['privacy:postwasread'] = 'Esta publicação foi lida pela primeira vez {$a->firstread} e, mais recentemente, lida {$a->lastread}';
$string['privacy:readtrackingdisabled'] = 'Optou por não seguir as publicações que leu neste fórum.';
$string['privacy:subscribedtoforum'] = 'Tem subscrição ativa neste fórum.';
$string['rateownpost'] = 'Não pode avaliar a sua própria publicação.';
$string['ratingfailed'] = 'A classificação falhou. Tente novamente.';
$string['ratingheading'] = 'Classificação e reputação';
$string['ratingpreference'] = 'Mostrar primeiro';
$string['ratingpreference_help'] = 'As respostas podem ser marcadas como solução e como úteis. Esta opção decide qual delas será fixada como a primeira resposta da discussão. Existem duas opções:

* Útil - A marca de útil do autor de uma discussão será fixada no topo da discussão
* Resolvida - A marca de solução por um professor será fixada no topo da discussão';
$string['ratingtoold'] = 'As classificações só podem ser alteradas nos 30 minutos após o primeiro voto.';
$string['re'] = 'Re:';
$string['reply'] = 'Comentar';
$string['replyfirst'] = 'Responder';
$string['reputation'] = 'Reputação';
$string['reputationnotnegative'] = 'Reputação apenas positiva?';
$string['scalefactor'] = 'Fator de escala';
$string['scalefactor_help'] = 'A classificação do utilizador é dividida pelo fator de escala para obter a nota de cada utilizador. Se a nota resultante for maior que a nota máxima, o valor será limitado à nota máxima especificada';
$string['scalefactorerror'] = 'O fator de escala deve ser um número inteiro positivo diferente de 0';
$string['smallmessage'] = '{$a->user} publicou em \'{$a->moodleoverflowname}\'';
$string['starterrating'] = 'Útil';
$string['subject'] = 'Assunto';
$string['subscribe'] = 'Subscrever este fórum';
$string['subscribed'] = 'Subscrito';
$string['subscribeenrolledonly'] = 'Apenas os utilizadores inscritos podem subscrever as notificações de novas publicações.';
$string['subscribestart'] = 'Quero ser notificado acerca das novas publicações neste fórum';
$string['subscribestop'] = 'Não quero ser notificado acerca das novas publicações neste fórum';
$string['subscriptionauto'] = 'Subscrição automática';
$string['subscriptiondisabled'] = 'Subscrição desativada';
$string['subscriptionforced'] = 'Subscrição forçada';
$string['subscriptionmode'] = 'Modo de subscrição';
$string['subscriptionmode_help'] = 'Quando um participante é subscrito no fórum, significa que receberá notificações de publicações no fórum. Existem 4 opções do modo de subscrição:

* Subscrição opcional - Os participantes podem escolher se devem ou não subscrever
* Subscrição forçada - Todos estão subscritos e não podem cancelar a subscrição
* Subscrição automática - Todos estão subscritos inicialmente, mas podem optar por cancelar a subscrição a qualquer momento
* Subscrição desativada - As subscrições não são permitidas

Nota: Qualquer alteração no modo de subscrição afetará apenas os utilizadores que se inscrevam futuramente na disciplina mas afetará não os já existentes.';
$string['subscriptionoptional'] = 'Subscrição opcional';
$string['subscriptiontrackingheader'] = 'Subscrição e acompanhamento';
$string['taskcleanreadrecords'] = 'Trabalho de manutenção de MoodleOverflow para limpar registos de leitura antigos';
$string['tasksendmails'] = 'Trabalho de manutenção de MoodleOverflow para enviar e-mail';
$string['taskupdategrades'] = 'Tarefa de manutenção do MoodleOverflow para atualizar as notas';
$string['teacherrating'] = 'Solução';
$string['tracking'] = 'Seguir';
$string['trackingoff'] = 'Off';
$string['trackingon'] = 'Forçar';
$string['trackingoptional'] = 'Opcional';
$string['trackingtype'] = 'Seguimento de leitura';
$string['trackingtype_help'] = 'O acompanhamento da leitura permite que os participantes verifiquem facilmente quais as publicações que ainda não viram/leram, destacando as novas publicações.

Se configurado para opcional, o seguimento é ativado por predefinição, mas os participantes podem desativar o seguimento.

Se \'Permitir o seguimento de leitura forçado\' estiver ativo em Administração do Site / Módulos / Atividades / MoodleOverflow, uma outra opção está disponível - Forçar. Isto significa que o seguimento está sempre ativo.';
$string['trackmoodleoverflow'] = 'Seguir publicações não lidas';
$string['unknownerror'] = 'Isto não estava previsto acontecer.';
$string['unreadposts'] = 'Publicações não lidas';
$string['unreadpostsnumber'] = '{$a} publicações não lidas';
$string['unreadpostsone'] = '1 publicação não lida';
$string['unsubscribe'] = 'Cancelar subscrição deste fórum';
$string['unsubscribediscussion'] = 'Cancelar subscrição desta discussão';
$string['unsubscribediscussionlink'] = 'Cancelar subscrição da discussão: {$a}';
$string['unsubscribelink'] = 'Cancelar subscrição do fórum: {$a}';
$string['updategrades'] = 'Atualizar notas';
$string['upvotenotchangeable'] = 'Voto positivo (não alterável)';
$string['votescaledownvote'] = 'Reputação: Voto negativo';
$string['votescalehelpful'] = 'Reputação: Útil';
$string['votescalesolved'] = 'Reputação: Solução';
$string['votescaleupvote'] = 'Reputação: Voto positivo';
$string['votescalevote'] = 'Reputação: Votação';
$string['yournewtopic'] = 'Tópico de discussão';
$string['yourreply'] = 'A sua resposta';
