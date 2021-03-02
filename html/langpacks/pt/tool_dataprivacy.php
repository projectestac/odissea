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
 * Strings for component 'tool_dataprivacy', language 'pt', version '3.8'.
 *
 * @package     tool_dataprivacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Atividades e recursos';
$string['addcategory'] = 'Adicionar categoria';
$string['addnewdefaults'] = 'Adicionar uma nova predefinição de módulo';
$string['addpurpose'] = 'Adicionar finalidade';
$string['addroleoverride'] = 'Adicionar exceção de papel';
$string['approve'] = 'Aprovar';
$string['approverequest'] = 'Aprovar pedido';
$string['automaticdeletionrequests'] = 'Criar solicitações automáticas de eliminação de dados';
$string['automaticdeletionrequests_desc'] = 'Se ativar esta opção, uma solicitação de eliminação de dados será criada automaticamente sempre que uma conta de utilizador for apagada manualmente.';
$string['bulkapproverequests'] = 'Aprovar pedidos';
$string['bulkdenyrequests'] = 'Recusar pedidos';
$string['cachedef_contextlevel'] = 'Finalidade e categoria dos níveis de contexto';
$string['cachedef_purpose'] = 'Finalidade dos dados';
$string['cachedef_purpose_overrides'] = 'Exceções de finalidade na ferramenta de privacidade de dados';
$string['cancelrequest'] = 'Cancelar pedido';
$string['cancelrequestconfirmation'] = 'Tem a certeza de que pretende cancelar este pedido?';
$string['cannotreset'] = 'Não é possível repor este pedido. Apenas os pedidos rejeitados podem ser repostos.';
$string['categories'] = 'Categorias';
$string['categorieslist'] = 'Lista de categorias';
$string['category'] = 'Categoria';
$string['category_help'] = 'A categoria no registo de dados descreve o tipo de dados. Uma nova categoria pode ser adicionada ou, se estiver selecionado herdar, é aplicada uma categoria de dados de um contexto superior. Contextos são (do nível mais baixo para o mais elevado) Blocos > Módulos de atividade > disciplinas > Categorias de disciplinas > utilizador > Site.';
$string['categorycreated'] = 'Categoria criada';
$string['categorydefault'] = 'Categoria predefinida';
$string['categorydefault_help'] = 'A categoria predefinida é a categoria de dados aplicada a qualquer nova instância. Se estiver selecionado herdar, é aplicada a categoria de dados de um contexto superior. Contextos são (do nível mais baixo para o mais elevado) Blocos > Módulos de atividade > disciplinas > Categorias de disciplinas > utilizador > Site.';
$string['categoryupdated'] = 'Categoria atualizada';
$string['close'] = 'Fechar';
$string['compliant'] = 'Em conformidade';
$string['confirmapproval'] = 'Tem a certeza de que pretende aprovar esta solicitação de dados?';
$string['confirmbulkapproval'] = 'Pretende aprovar em massa as solicitações de dados selecionadas?';
$string['confirmbulkdenial'] = 'Pretende recusar em massa as solicitações de dados selecionadas?';
$string['confirmcompletion'] = 'Tem a certeza de que pretende marcar esta solicitação do utilizador como concluída?';
$string['confirmcontextdeletion'] = 'Tem a certeza de que pretende confirmar a eliminação dos contextos selecionados? Irá apagar toda a informação do utilizador nos respetivos subcontextos.';
$string['confirmdenial'] = 'Tem a certeza de que pretende negar esta solicitação de dados?';
$string['confirmrequestresubmit'] = 'Tem a certeza de que pretende cancelar a solicitação atual de {$a->type} de {$a->username} e resubmetê-la?';
$string['contactdataprotectionofficer'] = 'Contactar o responsável pela privacidade';
$string['contactdataprotectionofficer_desc'] = 'Se ativar esta opção, os utilizadores poderão entrar em contacto com o responsável pela privacidade do site e fazer uma solicitação de dados através de uma hiperligação na sua página de perfil.';
$string['contactdpoviaprivacypolicy'] = 'Entre em contacto com o responsável pela privacidade do site, conforme descrito na política de privacidade.';
$string['contextlevelname10'] = 'Site';
$string['contextlevelname30'] = 'Utilizadores';
$string['contextlevelname40'] = 'Categorias de disciplinas';
$string['contextlevelname50'] = 'Disciplinas';
$string['contextlevelname70'] = 'Módulos de atividades';
$string['contextlevelname80'] = 'Blocos';
$string['contextpurposecategorysaved'] = 'Finalidade e categoria guardadas';
$string['createcategory'] = 'Criar categoria';
$string['createdeletedatarequest'] = 'Criar solicitação de eliminação de dados';
$string['createnewdatarequest'] = 'Criar um novo pedido de dados';
$string['createpurpose'] = 'Criar finalidade';
$string['creationauto'] = 'Automaticamente';
$string['creationmanual'] = 'Manualmente';
$string['datadeletion'] = 'Apagamento de dados';
$string['datadeletionpagehelp'] = 'Esta página lista os dados que já ultrapassaram o período de retenção. Por favor, reveja e confirme o apagamento dos dados. Uma vez confirmado, o apagamento será processado na próxima execução da tarefa agendada "Apagar contextos expirados"';
$string['dataprivacy:downloadallrequests'] = 'Descarregar dados exportados de todos';
$string['dataprivacy:downloadownrequest'] = 'Descarregar os seus próprios dados exportados';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = 'Solicitar eliminação de dados de menores';
$string['dataprivacy:makedatarequestsforchildren'] = 'Fazer solicitações de dados de crianças';
$string['dataprivacy:managedataregistry'] = 'Gestão de registo de dados';
$string['dataprivacy:managedatarequests'] = 'Gerir solicitações de dados';
$string['dataprivacy:requestdelete'] = 'Solicitar eliminação de dados pessoais';
$string['dataprivacy:requestdeleteforotheruser'] = 'Solicitar eliminação de dados em nome de outro utilizador';
$string['dataregistry'] = 'Registo de dados';
$string['dataregistryinfo'] = 'O registo de dados permite que categorias (tipo de dados) e finalidades (razão pela qual os dados são processados) sejam configuradas para todos os conteúdos do site - desde utilizadores e disciplinas a atividades e blocos. Para cada finalidade o período de retenção deve ser definido. Quando um período de retenção tiver expirado, os dados são marcados e listados para eliminação, ficando a aguardar confirmação do administrador.';
$string['datarequestcreatedforuser'] = 'Solicitação de dados criada por {$a}';
$string['datarequestcreatedfromscheduledtask'] = 'Criada automaticamente a partir de uma tarefa agendada (utilizador apagado previamente).';
$string['datarequestcreatedupondelete'] = 'Criado automaticamente após a eliminação do utilizador.';
$string['datarequestemailsubject'] = 'Solicitação de dados: {$a}';
$string['datarequests'] = 'Solicitações de dados';
$string['dataretentionexplanation'] = 'Este resumo mostra as categorias e finalidades predefinidas para reter dados do utilizador. Certas áreas podem ter categorias e finalidades mais específicas do que as listadas aqui.';
$string['dataretentionsummary'] = 'Resumo da retenção de dados';
$string['datecomment'] = '[{$a->date}]:
{$a->comment}';
$string['daterequested'] = 'Data do pedido';
$string['daterequesteddetail'] = 'Data do pedido:';
$string['defaultexpired'] = 'Dados para todos os utilizadores';
$string['defaultexpiredexcept'] = 'Dados para todos os utilizadores, exceto aqueles que tenham algum dos seguintes papéis:<br>{$a->unexpired}';
$string['defaultsinfo'] = 'As categorias e finalidades predefinidas são aplicadas a todas as instâncias já existentes ou recém-criadas em que nenhum valor não está definido.';
$string['defaultssaved'] = 'Predefinições guardadas';
$string['defaultswarninginfo'] = '<b>Atenção</b>: A alteração destas predefinições pode afetar o período de retenção de instâncias existentes.';
$string['defaultunexpired'] = 'Apenas dados dos utilizadores que tenham algum dos seguintes papéis:<br>
{$a->expired}';
$string['defaultunexpiredwithexceptions'] = 'Apenas dados dos utilizadores que tenham algum dos seguintes papéis:<br>
{$a->expired}
A menos que também tenham algum dos seguintes papéis:<br>
{$a->unexpired}';
$string['deletecategory'] = 'Apagar categoria';
$string['deletecategorytext'] = 'Tem a certeza de que pretende apagar a categoria \'{$a}\'?';
$string['deletedefaults'] = 'Apagar predefinições: {$a}';
$string['deletedefaultsconfirmation'] = 'Tem a certeza de que pretende apagar a categoria e finalidade predefinidas de {$a} módulos?';
$string['deleteexistingdeleteduserstask'] = 'Criar pedido de eliminação de dados para utilizadores já apagados';
$string['deleteexpiredcontextstask'] = 'Apagar contextos expirados';
$string['deleteexpireddatarequeststask'] = 'Apagar ficheiros de exportação de solicitação de dados já expiradas';
$string['deletemyaccount'] = 'Apagar a minha conta';
$string['deletepurpose'] = 'Apagar finalidade';
$string['deletepurposetext'] = 'Tem a certeza de que pretende apagar a finalidade \'{$a}\'?';
$string['deny'] = 'Recusar';
$string['denyrequest'] = 'Recusar pedido';
$string['deprecated'] = 'Descontinuado';
$string['deprecatedexplanation'] = 'Este módulo está a usar uma versão antiga de uma das interfaces de privacidade e deve ser atualizado.';
$string['download'] = 'Descarregar';
$string['downloadexpireduser'] = 'Expirou o prazo para descarregar. Envie uma nova solicitação se pretende exportar os seus dados pessoais.';
$string['dporolemapping'] = 'Atribuir papel de responsável pela privacidade';
$string['dporolemapping_desc'] = 'O responsável pela privacidade pode gerir as solicitações de dados. A permissão \'tool/dataprivacy:managedatarequests\' deve ser ativada para um papel a ser usado como Responsável pela privacidade.';
$string['duplicaterole'] = 'Papel já especificado';
$string['editcategories'] = 'Editar categorias';
$string['editcategory'] = 'Editar categoria';
$string['editdefaults'] = 'Editar predefinições: {$a}';
$string['editmoduledefaults'] = 'Editar as predefinições do módulo';
$string['editpurpose'] = 'Editar finalidade';
$string['editpurposes'] = 'Editar finalidades';
$string['effectiveretentionperiodcourse'] = '{$a} (após a data de fim da disciplina)';
$string['effectiveretentionperioduser'] = '{$a} (Desde a última vez que o utilizador acedeu ao site)';
$string['emailsalutation'] = 'Caro/a {$a},';
$string['errorcannotrequestdeleteforother'] = 'Não tem permissão para criar uma solicitação de eliminação de dados para este utilizador.';
$string['errorcannotrequestdeleteforself'] = 'Não tem permissão para criar uma solicitação de eliminação dos seus dados.';
$string['errorcontexthasunexpiredchildren'] = 'O contexto "{$a}" ainda tem subcontextos que ainda não expiraram. Nenhum contexto foi assinalado para apagamento.';
$string['errorinvalidrequestcomments'] = 'O campo de comentário apenas pode conter texto simples.';
$string['errorinvalidrequestcreationmethod'] = 'Método de criação de pedido inválido!';
$string['errorinvalidrequeststatus'] = 'Estado de solicitação inválido!';
$string['errorinvalidrequesttype'] = 'Tipo de solicitação inválido!';
$string['errornocapabilitytorequestforothers'] = 'O utilizador {$a->requestedby} não tem permissão para realizar a solicitação de dados em nome do utilizador {$a->userid}';
$string['errornoexpiredcontexts'] = 'Não existem contextos expirados para processar';
$string['errorrequestalreadyexists'] = 'Já existe uma solicitação em andamento.';
$string['errorrequestnotfound'] = 'Pedido não encontrado';
$string['errorrequestnotwaitingforapproval'] = 'A solicitação não está a aguardar aprovação. Ou ainda não está concluída ou já foi processada.';
$string['errorsendingmessagetodpo'] = 'Ocorreu um erro ao tentar enviar uma mensagem para {$a}.';
$string['exceptionnotificationbody'] = '<p>Exceção ocorreu enquanto processava <b>{\\$a->fullmethodname}</b>.<br>Isto significa que o módulo <b>{\\$a->component}</b> não completou o processamento de dados. Em baixo, pode encontrar informação da exceção que pode ser transmitida pelo programador do módulo.</p><pre>{\\$a->message}<br>\\n\\n{\\$a->backtrace}</pre>';
$string['exceptionnotificationsubject'] = 'Ocorreu uma exceção durante o processamento dos dados de privacidade';
$string['expandplugin'] = 'Expandir e colapsar o módulo.';
$string['expandplugintype'] = 'Expandir e colapsar o tipo de módulo.';
$string['expiredretentionperiodtask'] = 'Período de retenção expirado';
$string['expiredrolewithretention'] = '{$a->retention} (Expirado)';
$string['expiry'] = 'Expiração';
$string['explanationtitle'] = 'Ícones usados nesta página e o que significam.';
$string['external'] = 'Adicional';
$string['externalexplanation'] = 'Foi instalado um módulo adicional neste site';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = 'Página principal do site';
$string['gdpr_art_6_1_a_description'] = 'O titular dos dados deu o seu consentimento para o tratamento dos seus dados pessoais para uma ou mais finalidades específicas';
$string['gdpr_art_6_1_a_name'] = 'Consentimento (RGPD Artº 6º 1(a))';
$string['gdpr_art_6_1_b_description'] = 'O tratamento for necessário para a execução de um contrato no qual o titular dos dados é parte, ou para diligências pré-contratuais a pedido do titular dos dados';
$string['gdpr_art_6_1_b_name'] = 'Contrato (RGPD Artº 6º 1(b))';
$string['gdpr_art_6_1_c_description'] = 'O tratamento for necessário para o cumprimento de uma obrigação jurídica a que o responsável pelo tratamento esteja sujeito';
$string['gdpr_art_6_1_c_name'] = 'Obrigação jurídica (RGPD Artº 6º 1(b))';
$string['gdpr_art_6_1_d_description'] = 'O tratamento for necessário para a defesa de interesses vitais do titular dos dados ou de outra pessoa singular';
$string['gdpr_art_6_1_d_name'] = 'Interesses vitais (RGPD Artº 6º 1(d))';
$string['gdpr_art_6_1_e_description'] = 'O tratamento é necessário ao exercício de funções de interesse público ou ao exercício da autoridade pública de que está investido o responsável pelo tratamento';
$string['gdpr_art_6_1_e_name'] = 'Funções de interesse público (RGPD Artº 6º 1(e))';
$string['gdpr_art_6_1_f_description'] = 'O tratamento for necessário para efeito dos interesses legítimos prosseguidos pelo responsável pelo tratamento ou por terceiros, exceto se prevalecerem os interesses ou direitos e liberdades fundamentais do titular que exijam a proteção dos dados pessoais, em especial se o titular for uma criança';
$string['gdpr_art_6_1_f_name'] = 'Interesses legítimos (RGPD Artº 6º 1(f))';
$string['gdpr_art_9_2_a_description'] = 'O titular dos dados deu o seu consentimento explícito para o tratamento desses dados pessoais para uma ou mais finalidades específicas, exceto se o direito da União ou de um Estado-Membro previr que a proibição a que se refere o nº 1 do Artº 9 do RGPD não pode ser anulada pelo titular dos dados';
$string['gdpr_art_9_2_a_name'] = 'Consentimento explícito (RGPD Artº 9.2(a))';
$string['gdpr_art_9_2_b_description'] = 'Se o tratamento for necessário para efeitos do cumprimento de obrigações e do exercício de direitos específicos do responsável pelo tratamento ou do titular dos dados em matéria de legislação laboral, de segurança social e de proteção social, na medida em que esse tratamento seja permitido pelo direito da União ou dos Estados-Membros ou ainda por uma convenção coletiva nos termos do direito dos Estados-Membros que preveja garantias adequadas dos direitos fundamentais e dos interesses do titular dos dados';
$string['gdpr_art_9_2_b_name'] = 'Legislação de segurança/proteção social (RGPD Artº 9.2(b))';
$string['gdpr_art_9_2_c_description'] = 'Se o tratamento for necessário para proteger os interesses vitais do titular dos dados ou de outra pessoa singular, no caso de o titular dos dados estar física ou legalmente incapacitado de dar o seu consentimento';
$string['gdpr_art_9_2_c_name'] = 'Proteção dos interesses vitais (RGPD Artº 9.2(c))';
$string['gdpr_art_9_2_d_description'] = 'Se o tratamento for efetuado, no âmbito das suas atividades legítimas e mediante garantias adequadas, por uma fundação, associação ou qualquer outro organismo sem fins lucrativos e que prossiga fins políticos, filosóficos, religiosos ou sindicais, e desde que esse tratamento se refira exclusivamente aos membros ou antigos membros desse organismo ou a pessoas que com ele tenham mantido contactos regulares relacionados com os seus objetivos, e que os dados pessoais não sejam divulgados a terceiros sem o consentimento dos seus titulares';
$string['gdpr_art_9_2_d_name'] = 'Atividades legítimas relativas a membros de fundação, associação ou outro organismo sem fins lucrativos (RGPD Artº 9.2(d))';
$string['gdpr_art_9_2_e_description'] = 'Se o tratamento se referir a dados pessoais que tenham sido manifestamente tornados públicos pelo seu titular';
$string['gdpr_art_9_2_e_name'] = 'Dados tornados públicos pelo titular (RGPD Artº 9.2(e))';
$string['gdpr_art_9_2_f_description'] = 'Se o tratamento for necessário à declaração, ao exercício ou à defesa de um direito num processo judicial ou sempre que os tribunais atuem no exercício da suas função jurisdicional';
$string['gdpr_art_9_2_f_name'] = 'Processo judicial (RGPD Artº 9.2(f))';
$string['gdpr_art_9_2_g_description'] = 'Se o tratamento for necessário por motivos de interesse público importante, com base no direito da União ou de um Estado-Membro, que deve ser proporcional ao objetivo visado, respeitar a essência do direito à proteção dos dados pessoais e prever medidas adequadas e específicas que salvaguardem os direitos fundamentais e os interesses do titular dos dados';
$string['gdpr_art_9_2_g_name'] = 'Interesse público importante (RGPD Artº 9.2(g))';
$string['gdpr_art_9_2_h_description'] = 'Se o tratamento for necessário para efeitos de medicina preventiva ou do trabalho, para a avaliação da capacidade de trabalho do empregado, o diagnóstico médico, a prestação de cuidados ou tratamentos de saúde ou de ação social ou a gestão de sistemas e serviços de saúde ou de ação social com base no direito da União ou dos Estados-Membros ou por força de um contrato com um profissional de saúde, sob reserva das condições e garantias previstas no nº 3 do Artº 9 do RGPD,';
$string['gdpr_art_9_2_h_name'] = 'Medicina preventiva ou do trabalho (RGPD Artº 9.2(h))';
$string['gdpr_art_9_2_i_description'] = 'Se o tratamento for necessário por motivos de interesse público no domínio da saúde pública, tais como a proteção contra ameaças transfronteiriças graves para a saúde ou para assegurar um elevado nível de qualidade e de segurança dos cuidados de saúde e dos medicamentos ou dispositivos médicos, com base no direito da União ou dos Estados--Membros que preveja medidas adequadas e específicas que salvaguardem os direitos e liberdades do titular dos dados, em particular o sigilo profissional';
$string['gdpr_art_9_2_i_name'] = 'Saúde pública (RGPD Artº 9.2(i))';
$string['gdpr_art_9_2_j_description'] = 'Se o tratamento for necessário para fins de arquivo de interesse público, para fins de investigação científica ou histórica ou para fins estatísticos, em conformidade com o artigo 89.o, n.o 1, com base no direito da União ou de um Estado-Membro, que deve ser proporcional ao objetivo visado, respeitar a essência do direito à proteção dos dados pessoais e prever medidas adequadas e específicas para a defesa dos direitos fundamentais e dos interesses do titular dos dados';
$string['gdpr_art_9_2_j_name'] = 'Interesse público ou investigação científica/histórica/estatística (RGPD Artº 9.2(j))';
$string['hide'] = 'Contrair todos';
$string['httpwarning'] = 'Qualquer dado descarregado deste site pode não estar encriptado. Entre em contacto com o administrador do sistema e solicite que seja instalado o SSL neste site.';
$string['inherit'] = 'Herdado';
$string['lawfulbases'] = 'Fundamento legal';
$string['lawfulbases_help'] = 'Selecione pelo menos uma opção que servirá de fundamento legal para tratar os dados pessoais. Para detalhes sobre estes fundamentos legais consulte o nº 1 do Artº 6º do RGPD';
$string['markcomplete'] = 'Marcar como concluído';
$string['markedcomplete'] = 'A sua consulta foi marcada como concluída pelo responsável da privacidade.';
$string['message'] = 'Mensagem';
$string['messagelabel'] = 'Mensagem:';
$string['messageprovider:contactdataprotectionofficer'] = 'Solicitações de dados';
$string['messageprovider:datarequestprocessingresults'] = 'Resultados do processamento dos pedidos de dados';
$string['messageprovider:notifyexceptions'] = 'Notificações de exceções de solicitações de dados';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'Meus pedidos de dados pessoais';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} crianças';
$string['newrequest'] = 'Novo pedido';
$string['noactivitiestoload'] = 'Sem atividades';
$string['noassignedroles'] = 'Nenhum papel atribuído neste contexto';
$string['noblockstoload'] = 'Sem blocos';
$string['nocategories'] = 'Ainda não existem categorias';
$string['nocoursestoload'] = 'Sem atividades';
$string['nodatarequests'] = 'Não existem solicitações de dados';
$string['nodatarequestsmatchingfilter'] = 'Não exitem pedidos de dados correspondentes ao filtro indicado';
$string['noexpiredcontexts'] = 'Este contexto não tem quaisquer dados cujo período de retenção tenha expirado.';
$string['nopersonaldatarequests'] = 'Não tem solicitações de dados pessoais';
$string['nopurposes'] = 'Ainda não existem finalidades';
$string['nosubjectaccessrequests'] = 'Não existem solicitações de dados nas quais precise agir';
$string['nosystemdefaults'] = 'Ainda não foram definidas a finalidade e a categoria do site.';
$string['notset'] = 'Não definido (usar valor predefinido)';
$string['notyetexpired'] = '{$a} (ainda não expirado)';
$string['overrideinstances'] = 'Reiniciar instâncias com valores personalizados';
$string['pluginname'] = 'Proteção de dados';
$string['pluginname_help'] = 'Módulo de proteção de dados';
$string['pluginregistry'] = 'Registo de privacidade do módulo';
$string['pluginregistrytitle'] = 'Registo de conformidade de privacidade do módulo';
$string['privacy'] = 'Privacidade';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'Os filtros atualmente aplicados à página de solicitações de dados.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'Número de solicitações de dados que o utilizador prefere ver por página';
$string['privacy:metadata:request'] = 'Informações de solicitações de dados pessoais (solicitações de acesso e eliminação de pedidos) feitas para este site.';
$string['privacy:metadata:request:comments'] = 'Qualquer comentário do utilizador que acompanhe a solicitação.';
$string['privacy:metadata:request:dpocomment'] = 'Comentários feitos pelo responsável pela privacidade em relação à solicitação.';
$string['privacy:metadata:request:requestedby'] = 'O ID do utilizador que faz a solicitação, se feito em nome de outrem.';
$string['privacy:metadata:request:timecreated'] = 'O registo de data e hora a que a solicitação foi feita pelo utilizador.';
$string['privacy:metadata:request:userid'] = 'O ID do utilizador a quem pertence a solicitação';
$string['privacyofficeronly'] = 'Apenas os utilizadores com o papel de responsável de privacidade ({$a}) têm acesso a este conteúdo';
$string['privacyrequestexpiry'] = 'Validade da solicitação de dados';
$string['privacyrequestexpiry_desc'] = 'A duração de tempo em que as solicitações de dados aprovadas estarão disponíveis para transferência antes de expirarem. Se definido como zero, não há limite de tempo.';
$string['protected'] = 'Protegido';
$string['protectedlabel'] = 'A retenção destes dados tem um precedente legal mais elevado sobre o pedido do utilizador para ser esquecido. Estes dados serão apagados após o período de retenção ter expirado.';
$string['purpose'] = 'Finalidade';
$string['purpose_help'] = 'A finalidade descreve a razão para processar os dados. Uma nova finalidade pode ser adicionada ou, se estiver selecionado herdar, é aplicada a finalidade de um contexto mais elevado. Contextos são (do nível mais baixo para o mais elevado) Blocos > Módulos de atividade > disciplinas > Categorias de disciplinas > utilizador > Site.';
$string['purposecreated'] = 'Finalidade criada';
$string['purposedefault'] = 'Finalidade predefinida';
$string['purposedefault_help'] = 'A finalidade predefinida é a finalidade aplicada a qualquer nova instância. Se estiver selecionado herdar, é aplicada a finalidade de um contexto mais elevado. Contextos são (do nível mais baixo para o mais elevado) Blocos > Módulos de atividade > disciplinas > Categorias de disciplinas > utilizador > Site.';
$string['purposeoverview'] = 'Uma finalidade descreve a política de uso e retenção para os dados armazenados. A base para armazenar e reter os dados também é descrita na finalidade.';
$string['purposes'] = 'Finalidades';
$string['purposeslist'] = 'Lista das finalidade dos dados';
$string['purposeupdated'] = 'Finalidade atualizada';
$string['replyto'] = 'Responder para';
$string['requestactions'] = 'Ações';
$string['requestapproved'] = 'A solicitação foi aprovada';
$string['requestby'] = 'Pedido por';
$string['requestbydetail'] = 'Solicitado por:';
$string['requestcomments'] = 'Comentários';
$string['requestcomments_help'] = 'Esta caixa permite que insira mais detalhes sobre sua solicitação de dados.';
$string['requestcreation'] = 'Criação';
$string['requestdenied'] = 'A solicitação foi negada';
$string['requestemailintro'] = 'recebeu uma solicitação de dados:';
$string['requestfor'] = 'Utilizador';
$string['requestmarkedcomplete'] = 'A solicitação foi marcada como completa';
$string['requestorigin'] = 'Sítio';
$string['requestsapproved'] = 'Os pedidos foram aprovados';
$string['requestsdenied'] = 'Os pedidos foram rejeitados';
$string['requeststatus'] = 'Estado';
$string['requestsubmitted'] = 'A sua solicitação foi enviada para o responsável pela privacidade do site';
$string['requesttype'] = 'Tipo';
$string['requesttype_help'] = 'Selecione o motivo pelo qual gostaria de entrar em contacto com o responsável pela privacidade. Esteja ciente de que a eliminação de todos os dados pessoais resultará na impossibilidade de se autenticar no site.';
$string['requesttypedelete'] = 'Apagar todos os meus dados pessoais';
$string['requesttypedeleteshort'] = 'Apagar';
$string['requesttypeexport'] = 'Exportar todos os meus dados pessoais';
$string['requesttypeexportshort'] = 'Exportar';
$string['requesttypeothers'] = 'Solicitação genérica';
$string['requesttypeothersshort'] = 'Mensagem';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = 'Considerar como ativas as disciplinas sem data de fim';
$string['requireallenddatesforuserdeletion_desc'] = 'Ao calcular a expiração de um utilizador, vários fatores são considerados:

* a data/hora da última autenticação do utilizador é comparada com o período de retenção dos utilizadores; e
* se o utilizador está ativamente inscrito em alguma disciplina.

Ao verificar a inscrição ativa numa disciplina, se a disciplina não tiver data/hora de fim, esta configuração será usada para determinar se a disciplina é considerada ativa ou não.

Se oa disciplina não tiver data de fim e essa configuração estiver ativa, o utilizador não poderá ser apagado.';
$string['requiresattention'] = 'Requer atenção.';
$string['requiresattentionexplanation'] = 'Este módulo não implementa a API de privacidade do Moodle. Se este módulo armazenar quaisquer dados pessoais, não será possível exportá-los ou apagá-los através do sistema de privacidade do Moodle.';
$string['resubmitrequest'] = 'Reenviar pedido para {$a->type} para {$a->username}';
$string['resubmitrequestasnew'] = 'Reenviar como novo pedido';
$string['resubmittedrequest'] = 'O pedido existente de {$a->type} para {$a->username} foi cancelado e reenviado';
$string['resultdeleted'] = 'Solicitou recentemente que a sua conta e os dados pessoais em {$a} fossem apagados. Este processo foi concluído e, por isso, não poderá autenticar-se.';
$string['resultdownloadready'] = 'A cópia dos seus dados pessoais, que solicitou recentemente em {$a}, está disponível para descarregar através da hiperligação abaixo.';
$string['retentionperiod'] = 'Período de retenção';
$string['retentionperiod_help'] = 'O período de retenção específica durante quanto tempo os dados devem ser mantidos. Quando o período de retenção tiver expirado os dados são marcados e listados para eliminação, ficando a aguardar confirmação do administrador.';
$string['retentionperiodnotdefined'] = 'Não foi definido qualquer período de retenção';
$string['retentionperiodzero'] = 'Sem prazo de retenção';
$string['reviewdata'] = 'Rever dados';
$string['role'] = 'Papel';
$string['role_help'] = 'O papel ao qual a exceção deve ser aplicada.';
$string['roleoverride'] = 'Exceção de papel';
$string['roleoverrideoverview'] = 'A política de retenção predefinida pode ser redefinida para utilizadores com papeis específicos, permitindo que especifique uma política de retenção mais longa ou mais curta. Um utilizador só expira quando todos os seus papeis expirarem.';
$string['roleoverrides'] = 'Exceções de papel';
$string['selectbulkaction'] = 'Por favor, selecione uma ação em massa.';
$string['selectdatarequests'] = 'Por favor, selecione solicitações de dados.';
$string['selectuserdatarequest'] = 'Selecione os pedidos de dados para {$a->requesttype} de {$a->username}.';
$string['send'] = 'Enviar';
$string['sensitivedatareasons'] = 'Razões para processamento de dados pessoais sensíveis';
$string['sensitivedatareasons_help'] = 'Selecione uma ou mais razões que isentam a proibição de tratamento de dados pessoais sensíveis relativas a esta finalidade. Para mais informações, consulte o nº 2 do Artº 9º do RGPD';
$string['setdefaults'] = 'Predefinições';
$string['showdataretentionsummary'] = 'Mostrar resumo da retenção de dados';
$string['showdataretentionsummary_desc'] = 'Se ativar esta opção, uma hiperligação para o resumo da retenção de dados é mostrada no rodapé da página e nos perfis dos utilizadores.';
$string['statusapproved'] = 'Aprovado';
$string['statusawaitingapproval'] = 'A aguardar aprovação';
$string['statuscancelled'] = 'Cancelado';
$string['statuscomplete'] = 'Concluída';
$string['statusdeleted'] = 'Apagado';
$string['statusdetail'] = 'Estado:';
$string['statusexpired'] = 'Expirado';
$string['statuspending'] = 'Pendente';
$string['statuspreprocessing'] = 'Pré-processamento';
$string['statusprocessing'] = 'Processamento';
$string['statusready'] = 'Pronto para descarregar';
$string['statusrejected'] = 'Rejeitado';
$string['subjectscope'] = 'Âmbito do assunto';
$string['subjectscope_help'] = 'O âmbito do assunto lista os papeis que podem ser atribuídos neste contexto.';
$string['summary'] = 'Resumo da configuração do registo';
$string['systemconfignotsetwarning'] = 'Ainda não foi definida uma finalidade e uma categoria para o site. Enquanto não estiverem definidos, todos os dados serão apagados ao processar solicitações de eliminação.';
$string['tobedeleted'] = 'Dados a apagar';
$string['unexpiredrolewithretention'] = '{$a->retention} (Não expirado)';
$string['user'] = 'Utilizador';
$string['userlistexplanation'] = 'Este módulo tem um fornecedor de base, mas deve implementar também o fornecedor de lista de utilizadores para suporte total da funcionalidade de privacidade.';
$string['userlistnoncompliant'] = 'Está em falta o fornecedor da lista de utilizadores';
$string['viewrequest'] = 'Visualizar o pedido';
$string['visible'] = 'Expandir tudo';
