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
 * Strings for component 'oublog', language 'pt', version '4.5'.
 *
 * @package     oublog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Infelizmente não têm acesso à página pretendida.';
$string['accordion_closed'] = 'Fechado';
$string['accordion_open'] = 'Abre';
$string['activeblogs'] = 'Ativo';
$string['addcomment'] = 'Adicionar comentário';
$string['addlink'] = 'Adicionar hiperligação';
$string['addpost'] = 'Adicionar tópico';
$string['advancedoptions'] = 'Opções avançadas';
$string['afterendcomment'] = 'Não pode submeter um comentário neste momento. Os comentários terminaram em {$a}.';
$string['afterendcommentcapable'] = 'Os alunos puderam comentar os tópicos até {$a}.<br/>Têm permissão para comentar depois desta data.';
$string['afterendpost'] = 'Não pode criar tópicos neste momento. A criação de tópicos terminou em {$a}.';
$string['afterendpostcapable'] = 'Os alunos puderam criar os seus tópicos até {$a}.<br/>Têm permissão para criar tópicos depois desta data.';
$string['allowcomments'] = 'Permitir comentários';
$string['allowcomments_help'] = '‘Sim, de utilizadores registados’ permite comentários de utilizadores que têm acesso ao tópico

‘Sim, todos’ permite comentários de utilizadores e do público em geral. Vai receber um e-mail para aprovar ou rejeitar comentários de utilizadores que não estão autenticados.

‘Não’ impede qualquer comentário neste tópico.';
$string['allowcommentsmax'] = 'Permitir comentários (se configurado para o tópico)';
$string['allowimport'] = 'Ativar importação de tópicos';
$string['allowimport_help'] = 'Permitir que o utilizador possa importar página de outras atividades de blog a que tenha acesso';
$string['allowimport_invalid'] = 'Tópicos só podem ser importados quando a atividade é configurada com modo individual.';
$string['alpha'] = 'A a Z';
$string['atom'] = 'Atom';
$string['atomfeed'] = 'Atom feed';
$string['attachments'] = 'Anexos';
$string['attachments_help'] = 'Opcionalmente pode anexar um ou mais ficheiros ao tópico. Se anexar uma imagem, será mostrada depois da mensagem.';
$string['beforeendcomment'] = 'Só pode comentar os tópicos até {$a}.';
$string['beforeendcommentcapable'] = 'Os alunos podem comentar os tópicos até {$a}.<br/>Tem permissão para comentar depois desta data.';
$string['beforeendpost'] = 'Só pode criar tópicos até {$a}.';
$string['beforeendpostcapable'] = 'Os alunos podem criar os seu tópicos até {$a}. <br/>Tem permissão para criar tópicos depois desta data.';
$string['beforestartcomment'] = 'Não pode comentar os tópicos neste momento. Os comentários estão disponíveis a partir de {$a}.';
$string['beforestartcommentcapable'] = 'Os alunos não opdem comentar os tópicos até {$a}. Tem permissão para comentar antes desta data.';
$string['beforestartpost'] = 'Não pode criar tópicos neste momento. A criação de tópicos está disponível a partir de {$a}.';
$string['beforestartpostcapable'] = 'Os alunos não podem criar os seus tópicos até {$a}.<br/>Tem permissão para criar tópicos antes desta data.';
$string['blogfeed'] = '{$a} feeds';
$string['bloginfo'] = 'informação do blog';
$string['blogname'] = 'Nome do blog';
$string['blogoptions'] = 'Opções do blog';
$string['blogsummary'] = 'Sumário do blog';
$string['cancel'] = 'Cancelar';
$string['comment'] = 'Adicionar comentário';
$string['commentalert'] = 'Denunciar comentário';
$string['commentdated'] = 'Data';
$string['commentfrom'] = 'Criação de comentários só permitida a partir de';
$string['commentonby'] = 'Comentário ao tópico <u>{$a->title}</u> {$a->date} de <u>{$a->author}</u>';
$string['commentonbyusers'] = 'Comentário <u>{$a->commenttitle}</u> ao tópico <u>{$a->posttitle}</u> <br> de <u>{$a->author}</u>';
$string['commentposts'] = 'Tópicos mais comentados';
$string['commentposts_info_alltime'] = 'Tópicos com o maior número de comentários';
$string['commentposts_info_thismonth'] = 'Tópicos com o maior número de comentários adicionados no mês passado';
$string['commentposts_info_thisyear'] = 'Tópicos com o maior número de comentários adicionados no ano passado';
$string['comments'] = 'Comentários';
$string['comments_info_alltime'] = '{$a}s com o maior número de comentários';
$string['comments_info_thismonth'] = '{$a}s com o maior número de comentários adicionados no mês passado';
$string['comments_info_thisyear'] = '{$a}s com o maior número de comentários adicionados no ano passado';
$string['commentsby'] = 'Comentários por {$a}';
$string['commentsfeed'] = 'Apenas comentários';
$string['commentsnotallowed'] = 'Não são permitidos comentários';
$string['commentuntil'] = 'Criação de comentários só permitida até';
$string['completioncomments'] = 'O utilizador deve fazer comentários nos tópicos:';
$string['completioncommentsgroup'] = 'Requer comentários';
$string['completioncommentsgroup_help'] = 'Se ativar esta opção, o blog será marcado como concluído assim que o aluno realizar um número especifico de comentários';
$string['completionposts'] = 'O utilizador deve criar tópicos no blog:';
$string['completionpostsgroup'] = 'Requer tópicos';
$string['completionpostsgroup_help'] = 'Se ativar esta opção, o blog será marcado como concluído assim que o aluno realize um número especifico de tópicos';
$string['computingguide'] = 'Guia para OU blogs';
$string['computingguideurl'] = 'Url para guia';
$string['computingguideurlexplained'] = 'Coloque o endereço para o guia do OU blogs';
$string['configmaxattachments'] = 'Número máximo predefinido de anexos permitido por tópico de blog';
$string['configmaxbytes'] = 'Tamanho máximo predefinido para os anexos no site (sujeito aos limites da disciplina e outras configurações locais)';
$string['configremoteserver'] = 'Endereço local (wwwroot) do servidor a ser utilizado para importação dos tópicos. Os blogs desse servidor vão ser mostrados juntamente com os tópicos locais.';
$string['configremotetoken'] = 'Token do serviço de Web service para importação do servidor remoto.';
$string['confirmdeletecomment'] = 'Tem certeza de que pretende apagar este comentário?';
$string['confirmdeletelink'] = 'Tem certeza de que pretende apagar este endereço?';
$string['confirmdeletepost'] = 'Tem certeza de que pretende apagar este tópico?';
$string['contribution'] = 'Participação';
$string['contribution_all'] = 'Participação - Sempre';
$string['contribution_from'] = 'Participação - Desde {$a}';
$string['contribution_fromto'] = 'Participação - De {$a->start} Até {$a->end}';
$string['contribution_to'] = 'Participação - Até {$a}';
$string['copytoself'] = 'Enviar uma cópia para mim';
$string['couldnotaddcomment'] = 'Não foi possível adicionar o comentário';
$string['couldnotaddlink'] = 'Não foi possível adicionar o endereço';
$string['defaultpersonalblogname'] = '{$a->name}\'s {$a->displayname}';
$string['delete'] = 'Apagar';
$string['deleteandemail'] = 'Apagar e enviar email';
$string['deletedblogpost'] = 'Tópico sem título';
$string['deletedby'] = 'Apagado por {$a->fullname}, {$a->timedeleted}';
$string['deleteemailpostbutton'] = 'Apagar e enviar email';
$string['deleteemailpostdescription'] = 'Selecione para apagar o tópico ou apagar e enviar uma notificação personalizada.';
$string['deleteglobalblog'] = 'Não pode apagar um blog global';
$string['details'] = 'Detalhes';
$string['discovery'] = '{$a} utilização';
$string['displayname'] = 'Nome alternativo da atividade (em branco usa padrão)';
$string['displayname_default'] = 'blog';
$string['displayname_help'] = 'Defina um nome alternativo para o tipo de atividade dentro do interface.
Se deixar em branco será utilizado o padão (\'blog\')
O nome alternativo deve começar com minúscula, será capitalizado sempre que necessário.';
$string['displayperiod'] = 'Seletor de participação De data - Até data';
$string['displayperiod_help'] = '<p>Por defeito seleciona todas as entradas</p>
<p>Pode selecionar \'De\' uma data até hoje</p>
<p>Pode selecionar todas as entradas entre uma data \'De\' e \'Até\'</p>
<p>Pu pode selecionar a primeira entrada \'Até\'</p>';
$string['displayversion'] = 'Versão OU blog: <strong>{$a}</strong>';
$string['downloadas'] = 'Descarregar como';
$string['downloadcsv'] = 'Ficheiro separado por vírugula';
$string['edit'] = 'Editar';
$string['editlink'] = 'Endereço para editar';
$string['editonsummary'] = 'Editado {$a->editdate}';
$string['editpost'] = 'Atualizado tópico';
$string['editsummary'] = 'Editado por {$a->editby}, {$a->editdate}';
$string['emailcontenthtml'] = 'Notificação para o avisar que o seu tópico no {$a->activityname} com os seguintes detalhes foi apagado por \'{$a->firstname} {$a->lastname}\':<br />
<br />
Assunto: {$a->subject}<br />
{$a->activityname}: {$a->blog}<br />
Disciplina: {$a->course}<br />
<br />
<a href={$a->deleteurl} title="Ver tópico apagado">Ver tópico apagado</a>';
$string['emailerror'] = 'Ocorreu um erro ao enviar o email';
$string['emailmessage'] = 'Mensagem';
$string['end'] = 'Para';
$string['error_alreadyapproved'] = 'Comentário já aprovado ou rejeitado';
$string['error_grouppubliccomments'] = 'Não pode permitir comentários públicos quando o blog se encontra em modo de grupo';
$string['error_moderatednotallowed'] = 'Moderação de comentário já não é permitida neste blog ou neste tópico';
$string['error_noconfirm'] = 'Coloque o texto de cima, exatamente como mostrado, nesta caixa.';
$string['error_toomanycomments'] = 'Colocou muitos comentários no blog na última hora. Aguarde um pouco e tente novamente.';
$string['error_unspecified'] = 'O sistema não pode completar este pedido porque ocorreu um erro ({$a})';
$string['error_wrongkey'] = 'Chave do comentário incorreta';
$string['event:commentapproved'] = 'Comentário aprovado';
$string['event:commentcreated'] = 'Comentário criado';
$string['event:commentdeleted'] = 'Comentário criado';
$string['event:participationviewed'] = 'Participação vista';
$string['event:postcreated'] = 'Tópico criado';
$string['event:postdeleted'] = 'Tópico apagado';
$string['event:postimported'] = 'Tópico importado';
$string['event:postupdated'] = 'Tópico atualizado';
$string['event:postviewed'] = 'Tópico visualizado';
$string['event:savefailed'] = 'Falha de sessão ao gravar tópico';
$string['event:siteentriesviewed'] = 'Entradas do site visualizadas';
$string['exportedpost'] = 'Tópicos exportados';
$string['exportpostscomments'] = 'Todos os tópicos visíveis e os seus comentários';
$string['exportuntitledpost'] = 'Tópico sem título';
$string['externaldashboardadd'] = 'Adicionar blog ao painel de utilizador';
$string['externaldashboardremove'] = 'Remover blog do painel de utilizador';
$string['extra_emails'] = 'Endereço de e-mail dos outros destinatários';
$string['extra_emails_help'] = 'Coloque um ou mais endereços de email separados por espaços ou ponto-e-vírgula';
$string['extranavolderposts'] = 'Tópicos antigos: {$a->from}-{$a->to}';
$string['extranavtag'] = 'Tag: {$a}';
$string['feedhelp'] = 'Feeds';
$string['feedhelp_help'] = 'Se utilizar feeds pode adicionar endereços Atom ou RSS para mandar os tópicos atualizados.
A maioria dos leitores de feeds suporta Atom e RSS.
Se os comentários estiverem ativados tamém são enviados para os feeds  &lsquo;Apenas comentários&rsquo;.';
$string['feeds'] = 'Feeds';
$string['feedsnotenabled'] = 'Feeds não estão ativados';
$string['foruser'] = 'para {$a}';
$string['globalblogmissing'] = 'Blog global não encontrado';
$string['globalusageexclude'] = 'Excluir estatísticas de uso global';
$string['globalusageexclude_desc'] = 'Lista separada por vírgulas de IDs de utilizadores para excluir das estatísticas para o blog global';
$string['gradesupdated'] = 'Notas atualizadas';
$string['grading'] = 'Avaliação';
$string['grading_help'] = 'Se selecionar esta opção,a nota do blog será adicionada à pauta e será calculada automaticamente.
Não necessita preencher se for um blog não avaliado, ou se pretende avaliar manualmente.';
$string['grading_invalid'] = 'Os tópicos só podem ser avaliados quando o tipo de nota ou o tipo de avaliação são definidos.';
$string['group'] = 'Grupo';
$string['guestblog'] = 'Se tiver uma conta no sistema, por favor <a href=\'{$a}\'>faça o login para acesso total</a>.';
$string['import'] = 'Importar';
$string['import_notallowed'] = 'Importar tópicos encontra-se desabilitado para isso {$a}.';
$string['import_step0_blog'] = 'Importar blog';
$string['import_step0_inst'] = 'Da lista de blogs abaixo, pode importar todo o blog ou importar tópicos selecionados.';
$string['import_step0_nonefound'] = 'Não tem acesso a nenhuma atividade onde os tópicos podem ser importados.';
$string['import_step0_numposts'] = '({$a} tópicos)';
$string['import_step0_selected_posts'] = 'Importar tópicos selecionados';
$string['import_step1_addtag'] = 'Filtrar por tag - {$a}';
$string['import_step1_all'] = 'Selecionar todos';
$string['import_step1_from'] = 'Importado de:';
$string['import_step1_include_label'] = 'Importar tópico - {$a}';
$string['import_step1_inst'] = 'Selecione os tópicos para importar:';
$string['import_step1_none'] = 'Selecionar nenhum';
$string['import_step1_removetag'] = 'Remover filtro tag - {$a}';
$string['import_step1_submit'] = 'Importar';
$string['import_step1_table_include'] = 'Incluir na importação';
$string['import_step1_table_posted'] = 'Data de publicação';
$string['import_step1_table_tags'] = 'Tags';
$string['import_step1_table_title'] = 'Título';
$string['import_step2_conflicts'] = '{$a} tópico(s) foram identificados com';
$string['import_step2_conflicts_submit'] = 'Importar tópicos em conflito';
$string['import_step2_inst'] = 'Importando tópicos:';
$string['import_step2_none'] = 'Nenhum tópico selecionado para importar';
$string['import_step2_prog'] = 'Importação em progresso';
$string['import_step2_total'] = '{$a} tópico(s) importado(s) com sucesso';
$string['includepost'] = 'Incluir tópico';
$string['individualblogs'] = 'Blogs individuais';
$string['individualblogs_help'] = '<p><strong>Não (blog juntos ou em grupos)</strong>: <em>Blogs individuais não são utilizados</em> –
Não existem conjuntos de blogs individuais, todos fazem parte de uma comunidade maior
(depende da configuração \'Modo de grupo\').</p>
<p><strong>Separar blogs individuais</strong>: <em>Os blogs individuais são utilizados de forma particular</em> –
Os utilizadores individuais só podem publicar e ver os seus blogs, a menos que tenham a permissão ("viewindividual") para ver outros blogs individuais.</p>
<p><strong>Blogs individuais visíveis</strong>: <em>Os blogs individuais são utilizados de forma particular pública</em> –
Os utilizadores podem publicar nos seus blogs, mas podem também ver outros blogs individuais</p>';
$string['info'] = 'Participação dentro do período selecionado';
$string['introonpost'] = 'Mostrar introdução ao criar tópico';
$string['invalidblog'] = 'ID do blog inválido';
$string['invalidblogdetails'] = 'Não é possível encontrar detalhes para o tópico {$a}';
$string['invalidblogtags'] = 'Tags inválidas';
$string['invalidcomment'] = 'ID de comentário inválido';
$string['invalidedit'] = 'ID de edição inválido';
$string['invalidformat'] = 'O formato deve ser atom ou rss';
$string['invalidlink'] = 'ID de endereço inválido';
$string['invalidpost'] = 'ID de tópico inválido';
$string['invalidpostid'] = 'Postid inválido';
$string['invalidvisbilitylevel'] = 'Nível de visibilidade inválido {$a}';
$string['invalidvisibility'] = 'Nível de visibilidade inválido';
$string['lastcomment'] = '(último comentário de {$a->fullname}, {$a->timeposted})';
$string['lastmodified'] = 'Último tópico: {$a}';
$string['limits'] = 'Período de contribuição';
$string['links'] = 'Endereços relacionados';
$string['logincomments'] = 'Sim, de utilizadores autenticados';
$string['maxattachments'] = 'Número máximos de anexos';
$string['maxattachments_help'] = 'Esta configuração especifica o número máximo de ficheiros que podem ser anexados num tópico.';
$string['maxattachmentsize'] = 'Tamanho máximo do anexo';
$string['maxattachmentsize_help'] = 'Esta configuração especifica o tamanho máximo da imagem/ficheiro que é usado no tópico.';
$string['maxvisibility'] = 'Máxima visibilidade';
$string['maxvisibility_help'] = '<p><em>Num blog pessoal:</em> <strong>Visível apenas para o criador do blog (privado)</strong> –
ninguém pode ver este tópico</p>
<p><em>Num blog de disciplina:</em> <strong>Vísivel para os participantes do cruso</strong> – para ver o tópico foi lhe concedido acesso ao blog, geralmente por se encontrar inscrito como aluno na disciplina</p>

<p><strong>Visível para todos os que estão autenticados no sistema</strong> – Todos os utilizadores autenticados podem ver o tópico, mesmo que não estejam inscritos em nenhuma disciplina</p>
<p><strong>Visível para qualquer pessoa</strong> – qualquer pessoa na internet consegue visualizar o tópico através do endereço do blog</p>

<p>Esta opção existe em todo o blog, bem como em todos os tópicos. Se a opção for alterada ao nível do blog, torna-se o máximo possível. Por exemplo, se ao nível do blog for definido o primeiro nível, não poderá alterar ao nível do tópico</p>';
$string['maybehiddenposts'] = 'Este {$a->name} pode conter tópicos que estão apenas visíveis para utilizadores autenticados, ou onde apenas utilizadores autenticados podem comentar. Se têm uma conta no sistema, por favor <a href=\'{$a->link}\'>faça login para ter acesso total</a>.';
$string['message'] = 'Mensagem';
$string['moderated_addedcomment'] = 'Obrigado por adicionar o seu comentário, que foi recebido com sucesso. O seu comentário não vai aparecer enquanto não for aprovado pelo autor desta publicação.';
$string['moderated_approve'] = 'Aprovar este comentário';
$string['moderated_authorname'] = 'O seu nome';
$string['moderated_awaiting'] = 'Comentários que aguardam aprovação';
$string['moderated_awaitingnote'] = 'Estes comentários não são visíveis para outros utilizadores, a menos que os aprove. Tenha em consideração que o sistema não conhece a identidade do criador do comentário e que os comentários podem conter hiperligações, que podem <strong>danificar seriamente o seu computador</strong>. Se tiver alguma dúvida, rejeite o comentário <strong>sem abrir as hiperligações</strong>.';
$string['moderated_confirm'] = 'Confirmação';
$string['moderated_confirminfo'] = 'Coloque <strong>sim </strong> em baixo para confirmar que é uma pessoa.';
$string['moderated_confirmvalue'] = 'sim';
$string['moderated_emailhtml'] = '<p>(Email gerado automáticamente. Por favor não resposta.)</p>
<p>Alguém adicionou um comentário ao seu tópico: {$a->postlink}</p>
<p>Necessita de <strong>aprovar o comentário</strong> antes que fique disponível para o público.</p>
<p>O sistema não conhece a identidade do criador do comentário e os comentários podem conter hiperligações, que pode prejudicar <strong>seriamente o seu computador</strong>. Se tiver alguma dúvida, rejeite o comentário <strong>sem abrir as hiperligações</strong>.</p>
<p>Se aprovar o comentário, é responsável pela publicação. Certifique-se que não contém nada que seja contra as regras.</p>
<hr/>
<p>Nome dado: {$a->commenter}</p>
<hr/>
<h3>{$a->commenttitle}</h3>
{$a->comment}
<hr/>
<ul class=\'oublog-approvereject\'>
<li><a href=\'{$a->approvelink}\'>{$a->approvetext}</a></li>
<li><a href=\'{$a->rejectlink}\'>{$a->rejecttext}</a></li>
</ul>
<p>
Pode ignorar este email. O comentário será rejeitado automaticamente depois de 30 dias.
</p>
<p>
Se receber muitos destes e-mails, talvez seja necessário restringir os comentários apenas para utilizadores autenticados.
</p>
<ul class=\'oublog-restrict\'>
<li><a href=\'{$a->restrictpostlink}\'>{$a->restrictposttext}</a></li>
<li><a href=\'{$a->restrictbloglink}\'>{$a->restrictblogtext}</a></li>
</ul>';
$string['moderated_emailsubject'] = 'Comentários que aguardam aprovação: {$a->blog} ({$a->commenter})';
$string['moderated_emailtext'] = 'Email gerado automáticamente. Por favor não resposta.

Alguém adicionou um comentário ao seu tópico:
{$a->postlink}

Necessita de aprovar o comentário antes que fique disponível para o público.

O sistema não conhece a identidade do criador do comentário e os comentários podem conter hiperligações, que pode prejudicar seriamente o seu computador</strong>. Se tiver alguma dúvida, rejeite o comentário sem abrir as hiperligações.

Se aprovar o comentário, é responsável pela publicação. Certifique-se que não contém nada que seja contra as regras.

-----------------------------------------------------------------------
Nome: {$a->commenter}
-----------------------------------------------------------------------
{$a->commenttitle}
{$a->comment}
-----------------------------------------------------------------------

* {$a->approvetext}:
{$a->approvelink}

* {$a->rejecttext}:
{$a->rejectlink}

Pode ignorar este email. O comentário será rejeitado automaticamente depois de 30 dias.

Se receber muitos destes e-mails, talvez seja necessário restringir os comentários apenas para utilizadores autenticados.

* {$a->restrictposttext}:
{$a->restrictpostlink}

* {$a->restrictblogtext}:
{$a->restrictbloglink}';
$string['moderated_info'] = 'Como não está autenticado, o seu comentário só vai ficar disponível depois de aprovação. Se têm uma conta no sistema, por favor faça <a href=\'{$a}\'>login para aceder totalmente ao blog</a>.';
$string['moderated_postername'] = 'utilizando o nome <strong>{$a}</strong>';
$string['moderated_reject'] = 'Rejeitar o comentário';
$string['moderated_rejectedon'] = 'Rejeitado {$a}:';
$string['moderated_restrictblog'] = 'Restringir comentários em todos os seus tópicos neste blog';
$string['moderated_restrictblog_info'] = 'Pretende restringir os comentários em todos os seus tópicos neste blog para que apenas utilizadores autenticados no sistema possam adicionar comentários?';
$string['moderated_restrictpage'] = 'Restringir comentários';
$string['moderated_restrictpost'] = 'Restringir comentários neste tópico';
$string['moderated_restrictpost_info'] = 'Pretende restringir os comentários neste tópico para que apenas utilizadores autenticados no sistema possam adicionar comentários?';
$string['moderated_submitted'] = 'Aguarda moderação';
$string['moderated_typicaltime'] = 'No passado, isto demorou cerca {$a}.';
$string['modulename'] = 'OU blog';
$string['modulename_help'] = 'Isto permite a criação de blogs dentro de um módulo (que são separados do sistema base de blog do Moodle). Pode ter blogs ao nível dos módulos (todos os tópicos para o mesmo blog), blogs de grupo ou blogs individuais. A atividade do blog pode ser renomeada para refletir a finalidade.';
$string['modulenameplural'] = 'OU blogs';
$string['mostcomments'] = 'Mais comentados';
$string['mostposts'] = 'Mais tópicos';
$string['mustprovidepost'] = 'Deve fornecer postid';
$string['myparticipation'] = 'Resumo da minha participação';
$string['ncomments'] = '{$a} comentários';
$string['newblogposts'] = 'Novos tópicos';
$string['newcomment'] = 'Novo comentário';
$string['newerposts'] = 'Tópicos mais recentes';
$string['newpost'] = 'Novo artigo {$a}';
$string['no'] = 'não';
$string['no_blogtogetheroringroups'] = 'Não (blog juntos ou em grupos)';
$string['noblogposts'] = 'Nenhum tópico';
$string['nocomments'] = 'Comentários não são permitidos';
$string['nograde'] = 'Sem avaliação (predefinido)';
$string['noposts'] = 'Não existem tópicos visíveis neste {$a}.';
$string['nopostsnotags'] = 'Não existem tópicos visíveis em {$a->blog}, para a tag {$a->tag}.';
$string['notaddpost'] = 'Não pode adicionar tópico';
$string['notaddpostnogroup'] = 'Não é possível adicionar tópicos sem grupo';
$string['nousercommentpartsfound'] = 'Nenhum comentário adicionado neste período';
$string['nousercomments'] = 'Não foram feitos comentários.';
$string['nousercommentsfound'] = 'Não foram feitos comentários durante o período.';
$string['nousergrade'] = 'Nota do utilizador não disponível.';
$string['nouserpostpartsfound'] = 'Não foram criados tópicos neste período.';
$string['nouserposts'] = 'Nenhum tópico criado.';
$string['nouserpostsfound'] = 'Nenhum tópico criado neste período.';
$string['npending'] = '{$a} comentários que aguardam aprovação';
$string['npendingafter'] = ', {$a} aguardam aprovação';
$string['numbercomments'] = '{$a} comentários';
$string['numbercommentsmore'] = 'Mais {$a} comentário';
$string['numberposts'] = '{$a} tópicos';
$string['numberpostsmore'] = 'Mais {$a} tópicos';
$string['numberviews'] = '{$a} visualizações';
$string['numposts'] = '{$a} tópicos';
$string['official'] = 'Definir';
$string['olderposts'] = 'Tópicos anteriores';
$string['onecomment'] = '{$a} comentário';
$string['onepending'] = '{$a} comentário aguarda aprovação';
$string['onependingafter'] = ', {$a} aguarda aprovação';
$string['onlyworkspersonal'] = 'Apenas funciona em blogs pessoais';
$string['order'] = 'Ordem:';
$string['order_help'] = 'Pode escolher ordenar a listagem das tags utilizadas, em ordem alfabética ou por número de tópicos.
Seleccione as duas hiperligações para alterar o método de  ordenação, a escolha é guardada e será utilizada em vistas subsequentes.';
$string['oublog'] = 'OU blog';
$string['oublog:addinstance'] = 'Adicionar novo blog';
$string['oublog:audit'] = 'Ver tópicos apagados em versões antigas';
$string['oublog:comment'] = 'Comentário num tópico';
$string['oublog:contributepersonal'] = 'Tópico e comentários num blog pessoal';
$string['oublog:exportownpost'] = 'Exportar os meus tópicos';
$string['oublog:exportpost'] = 'Exportar tópico';
$string['oublog:exportposts'] = 'Exportar tópicos';
$string['oublog:grade'] = 'Nota de participação OU Blog';
$string['oublog:ignorecommentperiod'] = 'Ignorar período de tempo do comentário';
$string['oublog:ignorepostperiod'] = 'Ignorar período de tempo do tópico';
$string['oublog:managecomments'] = 'Gerir comentários';
$string['oublog:managelinks'] = 'Gerir hiperligações';
$string['oublog:manageposts'] = 'Gerir tópicos';
$string['oublog:post'] = 'Criar novo tópico';
$string['oublog:rate'] = 'Pode avaliar tópicos.';
$string['oublog:view'] = 'Ver tópico';
$string['oublog:viewallratings'] = 'Veja todas as avaliações dadas';
$string['oublog:viewanyrating'] = 'Ver todas as classificações atribuídas';
$string['oublog:viewindividual'] = 'Ver blogs individuais';
$string['oublog:viewparticipation'] = 'Ver participação OU Blog';
$string['oublog:viewpersonal'] = 'Ver tópicos em blog pessoal';
$string['oublog:viewprivate'] = 'Ver tópicos provados em blogs pessoais';
$string['oublog:viewrating'] = 'Ver a classificação total que recebeu';
$string['oublog_managealerts'] = 'Gerir alertas de tópicos/comentários';
$string['oublogallpostslogin'] = 'Forçar autenticação em todos os tópicos';
$string['oublogallpostslogin_desc'] = 'Ative para forçar a autenticação na página de de blogs pessoais.
Quando ativado apenas os utilizadores autenticados conseguem ver o link da página,';
$string['oublogcrontask'] = 'OU blog trabalhos de manutenção';
$string['oublogintro'] = 'Introdução';
$string['overviewnumentrylog'] = 'Entradas desde a última autenticação';
$string['overviewnumentrylog1'] = 'Entrada desde a última autenticação';
$string['overviewnumentryvw'] = 'Entradas desde a última visualização';
$string['overviewnumentryvw1'] = 'Entrada desde a última visualização';
$string['participation'] = 'Participação';
$string['participation_all'] = 'Participação - Sempre';
$string['participation_from'] = 'Participação - Desde {$a}';
$string['participation_fromto'] = 'Participação - Desde {$a->start} até {$a->end}';
$string['participation_to'] = 'Participação - Até {$a}';
$string['participationbyuser'] = 'Participação por utilizador';
$string['permalink'] = 'Hiperligação permanente';
$string['personalblognotsetup'] = 'Blogs pessoais não configurados';
$string['pluginadministration'] = 'Administração OU Blog';
$string['pluginname'] = 'OU Blog';
$string['postalert'] = 'Relatório tópico';
$string['postauthor'] = 'Autor do tópico';
$string['postdate'] = 'Data do tópico';
$string['postdetail'] = 'Detalhe do tópico';
$string['postedby'] = 'de {$a}';
$string['postedbymoderated'] = 'de  {$a->commenter} aprovado por {$a->approver}, {$a->approvedate})';
$string['postedbymoderatedaudit'] = 'de {$a->commenter} [{$a->ip}] (aprovado por {$a->approver}, {$a->approvedate})';
$string['postfrom'] = 'Criação de tópicos só permitida a partir de';
$string['postinfoblock'] = '<u>{$a->posttitle}</u> <br> <u>{$a->postdate}</u> <br> <u>{$a->sourcelink}</u>';
$string['postmessage'] = 'Tópico';
$string['posts'] = 'Tópicos';
$string['posts_info_alltime'] = '{$a}s com maior número de tópicos';
$string['posts_info_thismonth'] = '{$a}s com maior número de tópicos no último mês';
$string['posts_info_thisyear'] = '{$a}s com maior número de tópicos no último ano';
$string['postsby'] = 'Tópicos por {$a}';
$string['posttime'] = 'Hora do tópico';
$string['posttitle'] = 'Título do tópico';
$string['postuntil'] = 'Criação de tópicos só permitida até';
$string['predefinedtags'] = 'Tags predefinidas';
$string['predefinedtags_help'] = 'Disponibilize aos utilizadores tags para escolherem quando inserem um tópico.
As tags devem ser separadas por vírgulas.';
$string['publiccomments'] = 'Sim, de toda a gente (mesmo que não autenticados)';
$string['publiccomments_info'] = 'Se alguém adicionar um comentário quando não estiver autenticado, vai receber uma notificação por e-mail e pode aprovar o comentário para aprovar ou rejeitar. Isto é necessário para evitar spam.';
$string['re'] = 'Re: {$a}';
$string['recentcomments'] = 'Comentários recentes';
$string['recentposts'] = 'Tópicos recentes';
$string['remoteserver'] = 'Importar de servidor remoto';
$string['remotetoken'] = 'Token para importar de servidor remoto';
$string['removeblogs'] = 'Remova todas as entradas de blog';
$string['reportingemail'] = 'Relatório de endereços de email';
$string['reportingemail_help'] = 'Esta configuração especifica os endereços de e-mail das pessoais que vão ser informadas sobre os problemas com os tópicos ou comentários do OUBlog.
Eles devem ser inseridos separados por vírgulas.';
$string['restricttags'] = 'Opções de tag';
$string['restricttags_help'] = 'Se selecionar esta opção, pode restringir as tags para apenas as definidas ao nível da atividade e/ou exigir que pelo menos uma tag seja adicionada.';
$string['restricttags_req'] = 'Deve inserir tags';
$string['restricttags_req_set'] = 'Deve inserir apenas tags pré-definidas';
$string['restricttags_set'] = 'Permitir apenas tags pré-definidas';
$string['restricttagslist'] = 'Só pode inserir as tags: {$a}';
$string['restricttagsvalidation'] = 'Somente as Tags permitas podem ser adicionadas';
$string['rss'] = 'RSS';
$string['rssfeed'] = 'Feed RSS';
$string['savefailnetwork'] = '<p>Infelizmente, as suas alterações não podem ser guardadas de momento. Isto acontece devido a um erro de rede; O site encontra-se temporariamente indisponível ou ficou sem ligação</p>
<p>A atualização foi desativada neste blog. Para manter as alterações, deve copiar o conteúdo do blog ditado, aceda à página Editar novamente e cole as suas alterações</p>';
$string['savefailtitle'] = 'Tópico não pode ser gravado';
$string['savegrades'] = 'Guardar notas';
$string['searchthisblog'] = 'Pesquisar por {$a}';
$string['sendanddelete'] = 'Enviar e apagar';
$string['separateindividual'] = 'Separados&nbsp;Individuais';
$string['separateindividualblogs'] = 'Separar blogs individuais';
$string['share'] = 'Partilhar tópico';
$string['siteentries'] = 'Ver entradas do site';
$string['start'] = 'De';
$string['statblockon'] = 'Mostrar estatísticas extra de utilização do blog';
$string['statblockon_help'] = 'Ative as estatísticas extras no bloco de Uso.
Blogs pessoais (global), individuais visíveis e grupos visíveis apenas.';
$string['strftimerecent'] = '%d %B %y, %H:%M';
$string['subscribefeed'] = 'Assine um feed (requer software apropriado) para receber uma notificação quando o {$a} é atualizado.';
$string['summary'] = 'Sumário';
$string['tags'] = 'Tags';
$string['tags_help'] = 'As tags são rótulos que ajudam a encontrar e categorizar os tópicos.';
$string['tagsfield'] = 'Tags (separadas por vírgulas)';
$string['tagupdatefailed'] = 'Erro ao actualizar tags';
$string['teachergrading'] = 'Professor a avaliar alunos';
$string['timefilter_alltime'] = 'Desde sempre';
$string['timefilter_close'] = 'Esconder opções';
$string['timefilter_label'] = 'Período de tempo';
$string['timefilter_open'] = 'Mostrar opções';
$string['timefilter_submit'] = 'Atualizar';
$string['timefilter_thismonth'] = 'Último mês';
$string['timefilter_thisyear'] = 'Ano passado';
$string['timestartenderror'] = 'A data final selecionada não pode ser anterior à data de início';
$string['title'] = 'Título';
$string['tweet'] = 'Tweet';
$string['unsupportedbrowser'] = '<p>O sei navegador não consegue mostrar feeds Atom ou RSS</p>
<p>Os feeds são úteis em programas específicos ou em sites separados. Se pretende utilizar este feed, copie e cole o endereço que se encontre na barra de endereço do seu navegador</p>';
$string['untitledcomment'] = 'Comentário sem título';
$string['untitledpost'] = 'Tópico sem título';
$string['url'] = 'Endereço completo';
$string['use'] = 'Mais utilizado';
$string['usergrade'] = 'Nota do utilizador';
$string['userparticipation'] = 'Participação do utilizador';
$string['userrating'] = 'Usar classificações';
$string['usersparticipation'] = 'Participação de todos os utilizadores';
$string['viewallparticipation'] = 'Ver todas as participações';
$string['viewallusers'] = 'Ver todos os utilizadores';
$string['viewallusersingroup'] = 'Ver todos os utilizadores em grupo';
$string['viewblogdetails'] = 'Ver detalhes do blog';
$string['viewblogposts'] = 'Regressar ao blog';
$string['viewedit'] = 'Ver edição';
$string['viewmyparticipation'] = 'Ver a minha participação';
$string['views'] = 'Total de visitas deste {$a}:';
$string['visibility'] = 'Quem pode ler isto?';
$string['visibility_help'] = '<p><strong>Visível para os participantes da disciplina</strong> – para ver o tópico deve ter recebido acesso à atividade, normalmente recebe acesso devido a se encontrar inscrito na disciplina</p>

<p><strong>Visível a todos os utilizadores autenticados</strong> – todos os que estão autenticados podem ver o tópico, mesmo que não esteja inscrito na disciplina.</p>
<p><strong>Visível para toda a gente</strong> – qualquer pessoa pode aceder ao tópico se conhecer o endereço.</p>';
$string['visibleblogusers'] = 'Visível apenas para membros deste blog';
$string['visiblecourseusers'] = 'Visível para participantes nesta disciplina';
$string['visibleindividual'] = 'Visível&nbsp;individual';
$string['visibleindividualblogs'] = 'Blogs individuais visíveis';
$string['visibleloggedinusers'] = 'Visível para todos os utilizadores autenticados no sistema';
$string['visiblepublic'] = 'Visível para toda a gente no mundo';
$string['visibleyou'] = 'Visível apenas ao criador do blog (privado)';
$string['visits'] = 'Mais visitado';
$string['visits_info_active'] = 'Ativo {$a}s (contém um tópico no mês passado) com o maior número de visitas';
$string['visits_info_alltime'] = '{$a}s com o maior número de visitas';
$string['yes'] = 'Sim';
