<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_dataprivacy', language 'pt', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_dataprivacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Atividades e recursos';
$string['addcategory'] = 'Adicionar categoria';
$string['addpurpose'] = 'Adicionar finalidade';
$string['approve'] = 'Aprovar';
$string['approverequest'] = 'Aprovar pedido';
$string['cachedef_contextlevel'] = 'Finalidade e categoria dos níveis de contexto';
$string['cachedef_purpose'] = 'Finalidade dos dados';
$string['cancelrequest'] = 'Cancelar pedido';
$string['cancelrequestconfirmation'] = 'Tem a certeza que pretende cancelar este pedido?';
$string['categories'] = 'Categorias';
$string['categorieslist'] = 'Lista de categorias';
$string['category'] = 'Categoria';
$string['categorycreated'] = 'Categoria criada';
$string['categorydefault'] = 'Categoria predefinida';
$string['categorydefault_help'] = 'A categoria predefinida é a categoria de dados aplicada a qualquer nova instância. Se estiver selecionado herdar, é aplicada a categoria de dados de um contexto superior. Contextos são (do nível mais baixo para o mais elevado) Blocos > Módulos de atividade > disciplinas > Categorias de disciplinas > utilizador > Site.';
$string['category_help'] = 'A categoria no registo de dados descreve o tipo de dados. Uma nova categoria pode ser adicionada ou, se estiver selecionado herdar, é aplicada uma categoria de dados de um contexto superior. Contextos são (do nível mais baixo para o mais elevado) Blocos > Módulos de atividade > disciplinas > Categorias de disciplinas > utilizador > Site.';
$string['categoryupdated'] = 'Categoria atualizada';
$string['close'] = 'Fechar';
$string['compliant'] = 'Em conformidade';
$string['confirmapproval'] = 'Tem a certeza que pretende aprovar esta solicitação de dados?';
$string['confirmcontextdeletion'] = 'Tem a certeza que pretende confirmar o apagamento dos contextos selecionados? Isto irá apagar toda a informação do utilizador nos respetivos subcontextos.';
$string['confirmdenial'] = 'Tem a certeza que pretende negar esta solicitação de dados?';
$string['contactdataprotectionofficer'] = 'Contactar o responsável pela proteção de dados';
$string['contactdataprotectionofficer_desc'] = 'Se ativar esta opção, os utilizadores poderão entrar em contacto com o responsável pela proteção de dados do site e fazer uma solicitação de dados através de uma hiperligação na sua página de perfil.';
$string['contactdpoviaprivacypolicy'] = 'Entre em contacto com o responsável pela proteção de dados do site, conforme descrito na Política de Privacidade.';
$string['contextlevelname10'] = 'Site';
$string['contextlevelname30'] = 'Utilizadores';
$string['contextlevelname40'] = 'Categorias de disciplinas';
$string['contextlevelname50'] = 'Disciplinas';
$string['contextlevelname70'] = 'Módulos de atividades';
$string['contextlevelname80'] = 'Blocos';
$string['contextpurposecategorysaved'] = 'Finalidade e categoria guardadas';
$string['createcategory'] = 'Criar categoria';
$string['createpurpose'] = 'Criar finalidade';
$string['datadeletion'] = 'Apagamento de dados';
$string['datadeletionpagehelp'] = 'Esta página lista os dados que já ultrapassaram o período de retenção. Por favor reveja e confirme o apagamento dos dados. Uma vez confirmado, o apagamento será processado na próxima execução da tarefa agendada "Apagar contextos expirados"';
$string['dataprivacy:makedatarequestsforchildren'] = 'Fazer solicitações de dados de crianças';
$string['dataprivacy:managedataregistry'] = 'Gestão de registo de dados';
$string['dataprivacy:managedatarequests'] = 'Gerir solicitações de dados';
$string['dataregistry'] = 'Registo de dados';
$string['dataregistryinfo'] = 'O registo de dados permite que categorias (tipo de dados) e finalidades (razão pela qual os dados são processados) sejam configuradas para todos os conteúdos do site - desde utilizadores e disciplinas a atividades e blocos. Para cada finalidade o período de retenção deve ser definido. Quando um período de retenção tiver expirado, os dados são marcados e listados para eliminação, ficando a aguardar confirmação do administrador.';
$string['datarequestcreatedforuser'] = 'Solicitação de dados criada por {$a}';
$string['datarequestemailsubject'] = 'Solicitação de dados: {$a}';
$string['datarequests'] = 'Solicitações de dados';
$string['daterequested'] = 'Data do pedido';
$string['daterequesteddetail'] = 'Data do pedido:';
$string['defaultsinfo'] = 'As categorias e finalidades predefinidas são aplicadas a todas as instâncias recém-criadas.';
$string['defaultssaved'] = 'Predefinições guardadas';
$string['deletecategory'] = 'Apagar a categoria "{$a}"';
$string['deletecategorytext'] = 'Tem a certeza de que pretende apagar a categoria "{$a}"?';
$string['deleteexpiredcontextstask'] = 'Apagar contextos expirados';
$string['deletepurpose'] = 'Apagar a finalidade "{$a}"';
$string['deletepurposetext'] = 'Tem a certeza de que pretende apagar a finalidade "{$a}"?';
$string['deny'] = 'Negar';
$string['denyrequest'] = 'Negar pedido';
$string['download'] = 'Descarregar';
$string['dporolemapping'] = 'Atribuir papel de responsável pela proteção de dados';
$string['dporolemapping_desc'] = 'O responsável pela proteção de dados pode gerir as solicitações de dados. A permissão \'tool/dataprivacy:managedatarequests\' deve ser ativada para um papel a ser usado como Responsável pelar proteção de dados.';
$string['editcategories'] = 'Editar categorias';
$string['editcategory'] = 'Editar categoria';
$string['editpurpose'] = 'Editar finalidade';
$string['editpurposes'] = 'Editar finalidades';
$string['effectiveretentionperiodcourse'] = '{$a} (após a data de fim da disciplina)';
$string['effectiveretentionperioduser'] = '{$a} (Desde a última vez que o utilizador acedeu ao site)';
$string['emailsalutation'] = 'Caro/a {$a},';
$string['errorcontexthasunexpiredchildren'] = 'O contexto "{$a}" ainda tem subcontextos que ainda não expiraram. Nenhum contexto foi assinalado para apagamento.';
$string['errorinvalidrequeststatus'] = 'Estado de solicitação inválido!';
$string['errorinvalidrequesttype'] = 'Tipo de solicitação inválido!';
$string['errornocapabilitytorequestforothers'] = 'O utilizador {$a->requestedby} não tem a permissão para realizar a solicitação de dados em nome do utilizador {$a->userid}';
$string['errornoexpiredcontexts'] = 'Não existem contextos expirados para processar';
$string['errorrequestalreadyexists'] = 'Já tem uma solicitação em andamento.';
$string['errorrequestnotfound'] = 'Pedido não encontrado';
$string['errorrequestnotwaitingforapproval'] = 'A solicitação não está a aguardar aprovação. Ou ainda não está concluída ou já foi processada.';
$string['errorsendingmessagetodpo'] = 'Ocorreu um erro ao tentar enviar uma mensagem para {$a}.';
$string['exceptionnotificationbody'] = '<p>Exceção ocorreu enquanto processava <b>{\\$a->fullmethodname}</b>.<br>Isto significa que o módulo <b>{\\$a->component}</b> não completou o processamento de dados. Em baixo, pode encontrar informação da exceção que pode ser transmitida pelo programador do módulo.</p><pre>{\\$a->message}<br>\\n\\n{\\$a->backtrace}</pre>';
$string['exceptionnotificationsubject'] = 'Ocorreu uma exceção durante o processamento dos dados de privacidade';
$string['expandplugin'] = 'Expandir e colapsar o módulo.';
$string['expandplugintype'] = 'Expandir e colapsar o tipo de módulo.';
$string['expiredretentionperiodtask'] = 'Período de retenção expirou';
$string['expiry'] = 'Expiração';
$string['explanationtitle'] = 'Ícones usados nesta página e o que significam.';
$string['external'] = 'Adicional';
$string['externalexplanation'] = 'Foi instalado um módulo adicional neste site';
$string['frontpagecourse'] = 'Página principal do site';
$string['gdpr_art_6_1_a_description'] = 'O titular dos dados tiver dado o seu consentimento para o tratamento dos seus dados pessoais para uma ou mais finalidades específicas';
$string['gdpr_art_6_1_a_name'] = 'Consentimento (RGPD Artº 6º 1(a))';
$string['gdpr_art_6_1_b_description'] = 'O tratamento for necessário para a execução de um contrato no qual o titular dos dados é parte, ou para diligências pré-contratuais a pedido do titular dos dados';
$string['gdpr_art_6_1_b_name'] = 'Contrato (RGPD Artº 6º 1(b))';
$string['gdpr_art_6_1_c_description'] = 'O tratamento for necessário para o cumprimento de uma obrigação jurídica a que o responsável pelo tratamento esteja sujeito';
$string['gdpr_art_6_1_c_name'] = 'Obrigação jurídica (RGPD Artº 6º 1(b))';
$string['gdpr_art_6_1_d_description'] = 'O tratamento for necessário para a defesa de interesses vitais do titular dos dados ou de outra pessoa singular';
$string['gdpr_art_6_1_d_name'] = 'Interesses vitais (RGPD Artº 6º 1(d))';
$string['gdpr_art_6_1_e_description'] = 'O tratamento for necessário ao exercício de funções de interesse público ou ao exercício da autoridade pública de que está investido o responsável pelo tratamento';
$string['gdpr_art_6_1_e_name'] = 'Funções de interesse público (RGPD Artº 6º 1(e))';
$string['gdpr_art_6_1_f_description'] = 'O tratamento for necessário para efeito dos interesses legítimos prosseguidos pelo responsável pelo tratamento ou por terceiros, exceto se prevalecerem os interesses ou direitos e liberdades fundamentais do titular que exijam a proteção dos dados pessoais, em especial se o titular for uma criança';
$string['gdpr_art_6_1_f_name'] = 'Interesses legítimos (RGPD Artº 6º 1(f))';
$string['gdpr_art_9_2_a_description'] = 'Se o titular dos dados tiver dado o seu consentimento explícito para o tratamento desses dados pessoais para uma ou mais finalidades específicas, exceto se o direito da União ou de um Estado-Membro previr que a proibição a que se refere o nº 1 do Artº 9 do RGPD não pode ser anulada pelo titular dos dados';
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
$string['noexpiredcontexts'] = 'Este contexto não tem quaisquer dados cujo período de retenção tenha expirado.';
$string['nopersonaldatarequests'] = 'Não tem solicitações de dados pessoais';
$string['nopurposes'] = 'Ainda não existem finalidades';
$string['nosubjectaccessrequests'] = 'Não existem solicitações de dados nas quais precise agir';
$string['nosystemdefaults'] = 'Ainda não foram definidas a finalidade e a categoria do site.';
$string['notset'] = 'Não definido (usar valor predefinido)';
$string['pluginname'] = 'Proteção de dados';
$string['pluginname_help'] = 'Módulo de proteção de dados';
$string['pluginregistry'] = 'Registo de privacidade do módulo';
$string['pluginregistrytitle'] = 'Registo de conformidade de privacidade do módulo';
$string['privacy'] = 'Privacidade';
$string['privacy:metadata:request'] = 'Informações de solicitações de dados pessoais (solicitações de acesso e eliminação de pedidos) feitas para este site.';
$string['privacy:metadata:request:comments'] = 'Qualquer comentário do utilizador que acompanhe a solicitação.';
$string['privacy:metadata:request:dpocomment'] = 'Comentários feitos pelo responsável pela proteção de dados em relação à solicitação.';
$string['privacy:metadata:request:requestedby'] = 'O ID do utilizador que faz a solicitação, se feito em nome de outrem.';
$string['privacy:metadata:request:timecreated'] = 'O registo de data e hora a que a solicitação foi feita pelo utilizador.';
$string['privacy:metadata:request:userid'] = 'O ID do utilizador a quem pertence a solicitação';
$string['protected'] = 'Protegido';
$string['protectedlabel'] = 'A retenção destes dados tem um precedente legal mais elevado sobre o pedido do utilizador para ser esquecido. Estes dados serão apagados após o período de retenção ter expirado.';
$string['purpose'] = 'Finalidade';
$string['purposecreated'] = 'Finalidade criada';
$string['purposedefault'] = 'Finalidade predefinida';
$string['purposedefault_help'] = 'A finalidade predefinida é a finalidade aplicada a qualquer nova instância. Se estiver selecionado herdar, é aplicada a finalidade de um contexto mais elevado. Contextos são (do nível mais baixo para o mais elevado) Blocos > Módulos de atividade > disciplinas > Categorias de disciplinas > utilizador > Site.';
$string['purpose_help'] = 'A finalidade descreve a razão para processar os dados. Uma nova finalidade pode ser adicionada ou, se estiver selecionado herdar, é aplicada a finalidade de um contexto mais elevado. Contextos são (do nível mais baixo para o mais elevado) Blocos > Módulos de atividade > disciplinas > Categorias de disciplinas > utilizador > Site.';
$string['purposes'] = 'Finalidades';
$string['purposeslist'] = 'Lista das finalidade dos dados';
$string['purposeupdated'] = 'Finalidade atualizada';
$string['replyto'] = 'Responder para';
$string['requestactions'] = 'Ações';
$string['requestby'] = 'Pedido por';
$string['requestcomments'] = 'Comentários';
$string['requestcomments_help'] = 'Esta caixa permite-lhe fornecer mais detalhes sobre o seu pedido de dados.';
$string['requestemailintro'] = 'recebeu uma solicitação de dados:';
$string['requestfor'] = 'Em nome de';
$string['requeststatus'] = 'Estado';
$string['requestsubmitted'] = 'A sua solicitação foi enviada para o responsável pela proteção de dados do site';
$string['requesttype'] = 'Tipo';
$string['requesttypedelete'] = 'Apagar todos os meus dados pessoais';
$string['requesttypedeleteshort'] = 'Apagar';
$string['requesttypeexport'] = 'Exportar todos os meus dados pessoais';
$string['requesttypeexportshort'] = 'Exportar';
$string['requesttype_help'] = 'Selecione o motivo pelo qual gostaria de entrar em contacto com o responsável pela proteção de dados do site';
$string['requesttypeothers'] = 'Solicitação genérica';
$string['requesttypeothersshort'] = 'Outros';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requiresattention'] = 'Requer atenção.';
$string['requiresattentionexplanation'] = 'Este módulo não implementa a API de privacidade do Moodle. Se este módulo armazenar quaisquer dados pessoais, não será possível exportá-los ou apagá-los através do sistema de privacidade do Moodle.';
$string['resultdeleted'] = 'Solicitou recentemente que a sua conta e os dados pessoais em {$a} fossem apagados. Este processo foi concluído e, por isso, não poderá autenticar-se.';
$string['resultdownloadready'] = 'A cópia dos seus dados pessoais em {$a} que solicitou recentemente está disponível para descarregar. Por favor, clique na hiperligação abaixo para ir para a página de descarga.';
$string['retentionperiod'] = 'Período de retenção';
$string['retentionperiod_help'] = 'O período de retenção específica durante quanto tempo os dados devem ser mantidos. Quando o período de retenção tiver expirado os dados são marcados e listados para eliminação, ficando a aguardar confirmação do administrador.';
$string['retentionperiodnotdefined'] = 'Nenhum período de retenção foi definido';
$string['retentionperiodzero'] = 'Sem prazo de retenção';
$string['reviewdata'] = 'Rever dados';
$string['send'] = 'Enviar';
$string['sensitivedatareasons'] = 'Razões para processamento de dados pessoais sensíveis';
$string['sensitivedatareasons_help'] = 'Selecione uma ou mais razões que isentam a proibição de tratamento de dados pessoais sensíveis relativas a esta finalidade. Para mais informações, consulte o nº2 do Artº 9º do RGPD';
$string['setdefaults'] = 'Predefinições';
$string['statusapproved'] = 'Aprovado';
$string['statusawaitingapproval'] = 'A aguardar aprovação';
$string['statuscancelled'] = 'Cancelado';
$string['statuscomplete'] = 'Concluída';
$string['statusdetail'] = 'Estado:';
$string['statuspending'] = 'Pendente';
$string['statuspreprocessing'] = 'Pré-processamento';
$string['statusprocessing'] = 'Processamento';
$string['statusrejected'] = 'Rejeitado';
$string['subjectscope'] = 'Âmbito do assunto';
$string['subjectscope_help'] = 'O âmbito do assunto lista os papeis que podem ser atribuídos neste contexto.';
$string['user'] = 'Utilizador';
$string['viewrequest'] = 'Visualizar o pedido';
$string['visible'] = 'Expandir tudo';
