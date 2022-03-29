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
 * Strings for component 'lti', language 'pt', version '3.11'.
 *
 * @package     lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Aceitar';
$string['accept_grades'] = 'Aceitar notas da ferramenta';
$string['accept_grades_admin'] = 'Aceitar notas da ferramenta';
$string['accept_grades_admin_help'] = 'Indique se o fornecedor da ferramenta pode adicionar, atualizar, ler e apagar notas associadas a esta atividade.

Alguns fornecedores de ferramenta podem informar as notas ao Moodle com base em ações realizadas dentro da ferramenta, criando assim uma experiência mais integrada.';
$string['accept_grades_help'] = 'Define se o fornecedor da ferramenta pode, ou não, adicionar, atualizar, ler e apagar notas associadas a esta atividade.

Alguns fornecedores de ferramentas podem informar as notas ao Moodle com base em ações realizadas dentro da ferramenta, criando assim uma experiência mais integrada.

Tenha em atenção que esta configuração pode ser alterada na configuração da ferramenta.';
$string['accepted'] = 'Aceite';
$string['action'] = 'Ação';
$string['activate'] = 'Ativar';
$string['activatetoadddescription'] = 'É necessário ativar esta ferramenta antes de adicionar uma descrição.';
$string['active'] = 'Ativo';
$string['activity'] = 'Atividade';
$string['add_ltiadv'] = 'Adicionar LTI Advantage';
$string['add_ltilegacy'] = 'Adicionar Legacy LTI';
$string['addnewapp'] = 'Ativar aplicação externa';
$string['addserver'] = 'Adicionar novo servidor seguro';
$string['addtype'] = 'Adicionar ferramenta pré-configurada';
$string['allow'] = 'Permitir';
$string['allowsetting'] = 'Permitir que a ferramenta guarde 8K de configurações no Moodle.';
$string['always'] = 'Sempre';
$string['autoaddtype'] = 'Adicionar ferramenta';
$string['automatic'] = 'Automático, com base no URL da ferramenta';
$string['baseurl'] = 'URL base/ferramenta de registo de nome';
$string['basiclti'] = 'LTI';
$string['basiclti_base_string'] = 'Base String do LTI OAuth';
$string['basiclti_endpoint'] = 'Endpoint do arranque de LTI';
$string['basiclti_in_new_window'] = 'A sua atividade abriu numa nova janela';
$string['basiclti_in_new_window_open'] = 'Abrir numa nova janela';
$string['basiclti_parameters'] = 'Parâmetros do arranque de LTI';
$string['basicltiactivities'] = 'Atividades LTI';
$string['basicltifieldset'] = 'Exemplo de fieldset personalisado';
$string['basicltiintro'] = 'Descrição da atividade';
$string['basicltiname'] = 'Nome da atividade';
$string['basicltisettings'] = 'Configurações básicas da Learning Tool Interoperability (LTI)';
$string['cachedef_keyset'] = 'Armazena em cache a informação do conjunto de chaves das ferramentas';
$string['cancel'] = 'Cancelar';
$string['cancelled'] = 'Cancelado';
$string['cannot_delete'] = 'Não pode apagar a configuração desta ferramenta';
$string['cannot_edit'] = 'Não pode editar a configuração desta ferramenta';
$string['capabilities'] = 'Permissões';
$string['capabilities_help'] = 'Selecione as permissões que pretende disponibilizar ao fornecedor da ferramenta. Podem ser selecionadas mais do que uma permissão.';
$string['capabilitiesrequired'] = 'Para que possa ser ativada, esta ferramenta requer acesso aos seguintes dados:';
$string['cleanaccesstokens'] = 'Remoção de tokens de acesso expirados da ferramenta externa';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">Clique para continuar</a>';
$string['clientidadmin'] = 'ID do cliente';
$string['clientidadmin_help'] = 'O ID do cliente é um valor exclusivo usado para identificar uma ferramenta.
É criado automaticamente para cada ferramenta que usa o perfil de segurança JWT que foi introduzido no LTI 1.3 e deve fazer parte dos detalhes passados ao fornecedor da ferramenta para que possam configurar a ligação no final.';
$string['comment'] = 'Comentário';
$string['configpassword'] = 'Senha remota predefinida da ferramenta';
$string['configpreferheight'] = 'Altura predefinida';
$string['configpreferwidget'] = 'Definir arranque predefinido como widget';
$string['configpreferwidth'] = 'Largura predefinida';
$string['configresourceurl'] = 'URL predefinido do recurso';
$string['configtoolurl'] = 'URL predefinido da ferramenta remota';
$string['configtypes'] = 'Ativar aplicações LTI';
$string['configured'] = 'Configurado';
$string['confirmtoolactivation'] = 'Tem a certeza de que pretende ativar esta ferramenta?';
$string['contentitem'] = 'Content-Item Message';
$string['contentitem_deeplinking'] = 'Suporta Deep Linking (Content-Item Message)';
$string['contentitem_deeplinking_help'] = 'Se marcada, a opção \'Selecionar conteúdo\' estará disponível ao adicionar uma ferramenta externa.';
$string['contentitem_help'] = 'Se marcada, a opção \'Selecionar conteúdo\' estará disponível ao adicionar uma ferramenta externa.';
$string['contentitem_multiple_description'] = 'Os seguintes itens serão adicionados à sua disciplina:';
$string['contentitem_multiple_graded'] = 'Atividade avaliada (nota máxima: {$a})';
$string['course_tool_types'] = 'Ferramentas da disciplina';
$string['courseactivitiesorresources'] = 'Atividades ou recursos da disciplina';
$string['courseid'] = 'Número ID da disciplina';
$string['courseinformation'] = 'Informação da disciplina';
$string['courselink'] = 'Ir para a disciplina';
$string['coursemisconf'] = 'A disciplina está mal configurada';
$string['createdon'] = 'Criado em';
$string['curllibrarymissing'] = 'A biblioteca cURL do PHP é necessária para a ferramenta externa.';
$string['custom'] = 'Parâmetros personalizados';
$string['custom_config'] = 'A usar configurações personalizadas';
$string['custom_help'] = 'Os parâmetros personalizados são configurações utilizadas pelo fornecedor da ferramenta. Por exemplo, um parâmetro personalizado pode ser usado para exibir um recurso específico do fornecedor.

É seguro deixar este campo inalterado, exceto se tiver instruções do fornecedor em contrário.';
$string['custominstr'] = 'Parâmetros personalizados';
$string['debuglaunch'] = 'Opção de depuração';
$string['debuglaunchoff'] = 'Arranque normal';
$string['debuglaunchon'] = 'Arrancar depuração';
$string['default'] = 'Predefinido';
$string['default_launch_container'] = 'Recipiente de arranque predefinido';
$string['default_launch_container_help'] = 'O modo de visualização afeta a forma como é exibida a ferramenta quando iniciada a partir da disciplina. Alguns modos permitem maior espaço de ecrã disponível para a ferramenta enquanto outros aparentam maior integração com o ambiente Moodle.

Predefinido - Usa o modo de visualização definido nas configurações da ferramenta.
Incorporado -  A ferramenta é exibida incorporada na janela do Moodle, de uma forma semelhante à maioria dos outros tipos de atividades.
Incorporado, sem blocos -  A ferramenta é exibida incorporada na janela do Moodle, apenas com a área de navegação na parte superior da página.
Nova janela - A ferramenta abre numa nova janela, ocupando todo o espaço disponível.

Dependendo do navegador, esta vai abrir num novo separador ou numa janela de pop-up.

É possível que alguns navegadores impeçam a abertura numa nova janela.';
$string['delegate'] = 'Delegar ao professor';
$string['delegate_tool'] = 'Conforme especificado na configuração Deep Linking ou Delegar ao professor';
$string['delete'] = 'Apagar';
$string['delete_confirmation'] = 'Tem a certeza de que pretende apagar esta ferramenta pré-configurada?';
$string['deletetype'] = 'Apagar ferramenta pré-configurada';
$string['display_description'] = 'Mostrar descrição da atividade ao iniciar';
$string['display_description_help'] = 'Se selecionado, a descrição da atividade (especificada acima) será exibida acima do conteúdo da ferramenta.

A descrição pode ser usada para dar instruções adicionais para os utilizadores da ferramenta, mas não é necessária.

A descrição nunca é exibida quando a ferramenta é aberta numa nova janela.';
$string['display_name'] = 'Mostrar nome da atividade quando for iniciada';
$string['display_name_help'] = 'Se selecionado, o nome da atividade (especificada acima) será exibida acima do conteúdo da ferramenta.

É possível que o fornecedor de ferramenta possa também apresentar o título. Esta opção pode impedir que o título da atividade seja exibido em duplicado.

O título nunca é exibido quando quando a ferramenta é aberta numa nova janela.';
$string['domain_mismatch'] = 'O domínio do URL da ferramenta não corresponde à configuração da ferramenta.';
$string['donot'] = 'Não enviar';
$string['donotaccept'] = 'Não aceitar';
$string['donotallow'] = 'Não permitir';
$string['duplicateregurl'] = 'Este URL de registo já está a ser usado';
$string['dynreg_update_btn_new'] = 'Registar como uma nova ferramenta externa';
$string['dynreg_update_btn_update'] = 'Atualizar';
$string['dynreg_update_name'] = 'Nome da ferramenta';
$string['dynreg_update_notools'] = 'Nenhuma ferramenta no contexto.';
$string['dynreg_update_text'] = 'Existem ferramentas anexadas ao domínio do registo. Quer atualizar uma ferramenta externa já instalada ou criar uma nova ferramenta externa?';
$string['dynreg_update_url'] = 'URL base';
$string['dynreg_update_version'] = 'Versão LTI';
$string['dynreg_update_warn_dupdomain'] = 'Não é recomendado ter várias ferramentas externas no mesmo domínio.';
$string['editdescription'] = 'Clique para adicionar uma descrição a esta ferramenta';
$string['edittype'] = 'Editar ferramenta pré-configurada';
$string['embed'] = 'Incorporar';
$string['embed_no_blocks'] = 'Incorporar, sem blocos';
$string['enableemailnotification'] = 'Enviar e-mails de notificação';
$string['enableemailnotification_help'] = 'Se ativar esta opção, os alunos recebem um e-mail de aviso quando as suas notas são atribuídas.';
$string['enterkeyandsecret'] = 'Insira a sua chave do consumidor e a senha partilhada';
$string['enterkeyandsecret_help'] = 'Se recebeu uma chave do consumidor e/ou um senha partilhada, insira-as aqui';
$string['errorbadurl'] = 'O URL não é um URL de ferramenta válido ou não é um cartridge.';
$string['errorincorrectconsumerkey'] = 'A chave do consumidor está incorreta.';
$string['errorinvaliddata'] = 'Data inválida: {$a}';
$string['errorinvalidmediatype'] = 'Tipo de media inválido: {$a}';
$string['errorinvalidresponseformat'] = 'Formato de resposta do Content-Item inválido.';
$string['errormisconfig'] = 'Ferramenta mal configurada. Peça ao administrador do Moodle para corrigir a configuração da ferramenta.';
$string['errortooltypenotfound'] = 'Tipo de ferramenta LTI não encontrado.';
$string['existing_window'] = 'Janela existente';
$string['extensions'] = 'Extensão de serviços da LTI';
$string['external_tool_type'] = 'Ferramenta pré-configurada';
$string['external_tool_type_help'] = '* **Automático, com base no URL da ferramenta** - A melhor configuração da ferramenta é selecionada automaticamente. Se o URL da ferramenta não for reconhecido, os detalhes da configuração da ferramenta talvez necessitem de ser inseridos manualmente.
* **Uma ferramenta específica pré-configurada** - A configuração da ferramenta especificada será utilizada na comunicação com o fornecedor de ferramentas externas. Se o URL da ferramenta não parecer pertencer ao fornecedor da ferramenta, surgirá um aviso. Em alguns casos, não é necessário inserir o URL da ferramenta.
* **Configuração personalizada** - A chave do consumidor e a senha partilhada talvez necessitem de ser inseridas manualmente. A chave do consumidor e a senha partilhada podem ser obtidas a partir do fornecedor da ferramenta. No entanto, nem todas as ferramentas necessitam de uma chave do consumidor e de uma senha partilhada, e nesse caso os campos podem ser deixados em branco.

### Edição da ferramenta pré-configurada

Depois da pré-configuração da ferramenta ficam disponíveis três ações na lista pendente:

* **Adicionar** - Crie uma configuração para este nível na disciplina. Todas as ferramentas externas nesta disciplina podem usar esta configuração.
* **Editar** - Escolha um nível a partir da lista pendente e clique neste ícone. Os pormenores da configuração da ferramenta podem ser editados.
* **Apagar** - Apague o nível selecionado.';
$string['external_tool_types'] = 'Tipos de ferramentas pré-configuradas';
$string['failedtoconnect'] = 'O Moodle não conseguiu comunicar com o sistema "{$a}"';
$string['failedtocreatetooltype'] = 'Não foi possível criar uma nova ferramenta. Verifique o URL e tente novamente.';
$string['failedtodeletetoolproxy'] = 'Ocorreu um erro ao eliminar o registo da ferramenta. Vá a "Gerir registos de ferramentas externas" e apague-o manualmente.';
$string['filter_basiclti_configlink'] = 'Configure os seus sites preferidos e respetivas senhas';
$string['filter_basiclti_password'] = 'O campo Senha é obrigatório';
$string['filterconfig'] = 'Administração do LTI';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = 'Use uma configuração existente para a instância mal configurada';
$string['fixnew'] = 'Nova configuração';
$string['fixnewconf'] = 'Definir uma nova configuração para a instância mal configurada';
$string['fixold'] = 'Usar existente';
$string['force_ssl'] = 'Forçar SSL';
$string['force_ssl_help'] = 'Selecionar esta opção obriga todas as inicializações desta ferramenta a usarem SSL.

Além disso, todas as solicitações de web services do fornecedor de ferramenta usarão SSL.

Se usar esta opção, confirme que este site Moodle e o fornecedor da ferramenta suportam SSL.';
$string['forced_help'] = 'Esta configuração foi forçada numa disciplina ou a nível da ferramenta. Não pode mudá-la a partir desta interface.';
$string['generaltool'] = 'Ferramenta geral';
$string['global_tool_types'] = 'Ferramentas pré-configuradas';
$string['grading'] = 'Encaminhamento de notas';
$string['icon_url'] = 'URL do Ícone';
$string['icon_url_help'] = 'O URL do ícone  permite que o ícone que aparece na lista de disciplinas para essa atividade seja alterado. Em vez de usar o ícone LTI predefinido, o ícone que representa este tipo de atividade pode ser especificado.';
$string['id'] = 'ID';
$string['indicator:cognitivedepth'] = 'Compreensão da LTI';
$string['indicator:cognitivedepth_help'] = 'Este indicador é baseado na capacidade cognitiva alcançada pelo aluno na atividade LTI.';
$string['indicator:cognitivedepthdef'] = 'Compreensão da LTI';
$string['indicator:cognitivedepthdef_help'] = 'O participante alcançou esta percentagem da capacidade cognitiva oferecida pelas atividades LTI durante esse intervalo de análise (Níveis = Não visualizado, Visualizado, Submetido, Visualizado feedback)';
$string['indicator:socialbreadth'] = 'Socialização da LTI';
$string['indicator:socialbreadth_help'] = 'Este indicador é baseado na extensão social alcançada pelo aluno na atividade LTI.';
$string['indicator:socialbreadthdef'] = 'Socialização da LTI';
$string['indicator:socialbreadthdef_help'] = 'O participante alcançou esta percentagem do relacionamento social oferecido pelas atividades LTI durante esse intervalo de análise (Níveis = Sem participação, Participante individual, Participante com outros)';
$string['initiatelogin'] = 'URL para iniciar sessão';
$string['initiatelogin_help'] = 'O URL da ferramenta para o qual devem ser enviadas as solicitações de início de sessão. Este URL é necessário antes que uma mensagem possa ser enviada com sucesso para a ferramenta.';
$string['invalidid'] = 'O ID do LTI está incorreto';
$string['jwtsecurity'] = 'LTI 1.3';
$string['keytype'] = 'Tipo de chave pública';
$string['keytype_help'] = 'O método de autenticação usado para validar a ferramenta.';
$string['keytype_keyset'] = 'URL do conjunto de chaves';
$string['keytype_rsa'] = 'Chave RSA';
$string['launch_in_moodle'] = 'Arrancar ferramenta no Moodle';
$string['launch_in_popup'] = 'Arrancar ferramenta em pop-up';
$string['launch_url'] = 'URL da ferramenta';
$string['launch_url_help'] = 'O URL da ferramenta indica o endereço web da Ferramenta Externa, e pode conter informações adicionais, tais como o recurso a mostrar.
Se não sabe o que inserir no URL da ferramenta, por favor, contacte o fornecedor da ferramenta para obter mais informações.

Também pode inserir um URL de cartridge, caso tenha um, e os restantes detalhes do formulário serão automaticamente preenchidos.

Se tiver selecionado uma ferramenta pré-configurada, pode não precisar de inserir um URL da ferramenta. Se a hiperligação para a ferramenta for usada apenas para iniciar o fornecedor da ferramenta do sistema, e não for para nenhum recurso específico, provavelmente será o caso.';
$string['launchinpopup'] = 'Recipiente de arranque';
$string['launchinpopup_help'] = 'O modo de visualização afeta forma como é exibida a ferramenta quando iniciada a partir da disciplina. Alguns modos permitem maior espaço de ecrã disponível para a ferramenta enquanto outros aparentam maior integração com o ambiente Moodle.

Predefinido - Usa o modo de visualização definido nas configurações da ferramenta.
Incorporado -  A ferramenta é exibida incorporada na janela do Moodle, de uma forma semelhante à maioria dos outros tipos de atividades.
Incorporado, sem blocos -  A ferramenta é exibida incorporada na janela do Moodle, apenas com a área de navegação na parte superior da página.
Nova janela - A ferramenta abre numa nova janela, ocupando todo o espaço disponível.

Dependendo do navegador, esta vai abrir num novo separador ou numa janela de pop-up.

É possível que alguns navegadores impeçam a abertura numa nova janela.';
$string['launchoptions'] = 'Opções de arranque';
$string['leaveblank'] = 'Deixe em branco se não necessitar';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'Adicionar configurações específicas da Ferramenta LTI';
$string['lti:addinstance'] = 'Adicionar nova ferramenta externa';
$string['lti:addmanualinstance'] = 'Adicionar uma ferramenta configurada manualmente';
$string['lti:addpreconfiguredinstance'] = 'Adicionar uma ferramentas pré-configurada';
$string['lti:admin'] = 'Ser um administrador quando a ferramenta for iniciada';
$string['lti:grade'] = 'Ver notas devolvidas pela Ferramenta LTI';
$string['lti:manage'] = 'Ser um Instrutor quando a Ferramenta LTI for iniciada';
$string['lti:requesttooladd'] = 'Requerer que a Ferramenta LTI seja configurada ao nível do site';
$string['lti:view'] = 'Arrancar atividades Ferramenta LTI';
$string['lti_administration'] = 'Editar ferramenta pré-configurada';
$string['lti_errormsg'] = 'A ferramenta deu a seguinte mensagem de erro: "{$a}"';
$string['lti_launch_error'] = 'Ocorreu um erro ao executar a ferramenta LTI:';
$string['lti_launch_error_tool_request'] = '<p>
Para enviar um pedido ao administrador para concluir a configuração da ferramenta, clique em <a href="{$a->admin_request_url}" target="_top">here</a>.
</p>';
$string['lti_launch_error_unsigned_help'] = '<p>Este erro pode ser o resultado de faltar uma senha do fornecedor da ferramenta.</p>
<p> Se tem uma senha compartilhada com o consumidor, pode inseri-la ao editar a instância da ferramenta LTI (certifique-se que as opções avançadas estão visíveis).</p>
<p>Em alternativa, pode criar uma configuração de fornecedor da ferramenta ao nível da disciplina <a href="{$a->course_tool_editor}"> </p>';
$string['lti_tool_request_added'] = 'O pedido de configuração da ferramenta foi submetido com êxito. Pode precisar entrar em contacto com um administrador para concluir a configuração da ferramenta.';
$string['lti_tool_request_existing'] = 'A ferramenta de configuração para o domínio de ferramentas já foi inserida.';
$string['ltisettings'] = 'Configurações LTI';
$string['ltiunknownserviceapicall'] = 'Serviço desconhecido de LTI no pedido a API.';
$string['ltiversion'] = 'Versão LTI';
$string['ltiversion_help'] = 'A versão de LTI usada para assinar mensagens e solicitações de serviço: LTI 1.0/1.1 e LTI 2.0 usam o perfil de segurança OAuth 1.0A; O LTI 1.3.0 usa JWTs.';
$string['main_admin'] = 'Ajuda geral';
$string['main_admin_help'] = 'As ferramentas externas permitem que os utilizadores do Moodle acedam a recursos de aprendizagem alojados externamente. Através de um protocolo de arranque especial, a ferramenta externa terá acesso a algumas informações gerais sobre o utilizador que iniciou a ferramenta. Por exemplo, o nome da instituição, ID da disciplina, ID do utilizador e outras informações, tais como o nome do utilizador ou o endereço de e-mail.

As ferramentas listadas nesta página estão separadas em três categorias:

* **Ativa** - Estes fornecedores de ferramentas foram aprovados e configurados por um administrador. Podem ser utilizados a partir de qualquer disciplina neste site. Se for indicada uma chave do consumidor e uma senha partilhada, é estabelecida uma relação de confiança entre este site e a ferramenta externa, proporcionando um canal de comunicação seguro.
* **Pendente** - Estes fornecedores de ferramentas chegaram através de um pacote importado e não foram configurados por nenhum administrador. Os professores podem usar estas ferramentas se possuírem uma chave do consumidor e uma senha partilhada, ou se não for necessário nenhuma.
* **Rejeitada** - Estes fornecedores de ferramentas são marcados por um administrador como aqueles que não há intenção de colocar à disposição neste site. Os professores podem usar estas ferramentas se tiverem uma chave do consumidor e uma senha partilhada ou se não for necessário nenhuma.';
$string['manage_external_tools'] = 'Gerir ferramentas';
$string['manage_tool_proxies'] = 'Gerir registos de ferramentas externas';
$string['manage_tools'] = 'Gerir ferramentas pré-configuradas';
$string['manuallyaddtype'] = 'Em alternativa, pode <a href="{$a}">configurar a ferramenta manualmente</a>.';
$string['miscellaneous'] = 'Diversos';
$string['misconfiguredtools'] = 'Foram encontradas instâncias mal configuradas da ferramenta';
$string['missingparameterserror'] = 'A página "{$a}" está mal configurada';
$string['module_class_type'] = 'Tipo de módulo do Moodle';
$string['modulename'] = 'Ferramenta externa';
$string['modulename_help'] = 'A atividade Ferramenta LTI (Learning Tools Interoperability) permite aos alunos interagir com recursos de aprendizagem e atividades que se encontram alojadas noutros sites. Por exemplo, a ferramenta LTI pode proporcionar acesso a um novo tipo de atividade ou a materiais de aprendizagem de uma editora.

Para criar uma atividade de ferramenta LTI, é necessário um fornecedor de ferramenta que suporte LTI (Interoperacionalidade das Ferramentas de Aprendizagem ). Um professor pode criar uma atividade ferramenta LTI ou usar uma ferramenta configurada pelo administrador da plataforma.

As atividades ferramenta LTI diferem dos recursos URL em alguns aspetos:

* As ferramentas LTI são desligadas do contexto, isto é, não têm acesso a informações sobre o utilizador que usa a ferramenta, como o nome da disciplina, instituição e utilizador;
* As ferramentas LTI permitem ler, atualizar e apagar notas associadas à atividade;
* As configurações das ferramentas LTI criam uma ligação fiável entre o seu site e o fornecedor da ferramenta, permitindo uma comunicação segura entre eles.';
$string['modulename_link'] = 'mod/lti/view';
$string['modulenameplural'] = 'Ferramentas externas';
$string['modulenamepluralformatted'] = 'Instâncias LTI';
$string['name'] = 'Nome';
$string['never'] = 'Nunca';
$string['new_window'] = 'Nova janela';
$string['no_lti_configured'] = 'Não existem ferramentas LTI configuradas';
$string['no_lti_pending'] = 'Não existem ferramentas LTI pendentes';
$string['no_lti_rejected'] = 'Não existem ferramentas LTI rejeitadas';
$string['no_lti_tools'] = 'Não existem ferramentas externas configuradas.';
$string['no_tp_accepted'] = 'Não há registos de ferramentas externas aceites.';
$string['no_tp_cancelled'] = 'Não há registos de ferramentas externas cancelados.';
$string['no_tp_configured'] = 'Não há registos de ferramentas externas não registadas configurados.';
$string['no_tp_pending'] = 'Não há registos pendentes de ferramentas externas.';
$string['no_tp_rejected'] = 'Não há registos de ferramentas externas rejeitadas.';
$string['noattempts'] = 'Não foram realizadas tentativas nesta ferramenta';
$string['noltis'] = 'Não existem instâncias de ferramentas LTI';
$string['noprofileservice'] = 'Serviço de Perfil não encontrado';
$string['noservers'] = 'Não foram encontrados servidores';
$string['notypes'] = 'De momento, não existem ferramentas LTI configuradas no Moodle. Clique na hiperligação acima para adicionar algumas.';
$string['noviewusers'] = 'Não foram encontrados utilizadores com permissões para usar esta ferramenta';
$string['oauthsecurity'] = 'LTI 1.0/1.1';
$string['opensslconfiginvalid'] = 'O LTI 1.3 requer um \'openssl.cnf\' válido para ser configurado e disponibilizado para o seu servidor web. Entre em contacto com o administrador do site para ativar e configurar o openssl para este site.';
$string['optionalsettings'] = 'Configurações opcionais';
$string['organization'] = 'Detalhes da organização';
$string['organizationdescr'] = 'Descrição da organização';
$string['organizationid'] = 'ID da organização';
$string['organizationid_default'] = 'ID predefinido da organização';
$string['organizationid_default_help'] = 'O valor predefinido a ser usado para o ID da organização. O ID do site identifica esta instalação do Moodle.';
$string['organizationid_help'] = 'Identificador exclusivo para esta instância Moodle. Normalmente, o nome DNS da organização é o usado.

Se deixar este campo em branco, o nome do servidor deste site Moodle será utilizado como o valor predefinido.';
$string['organizationidguid'] = 'ID da organização';
$string['organizationidguid_help'] = 'Identificador exclusivo para esta instância do Moodle que passou para a ferramenta como o GUID da instância da plataforma.

Se deixar este campo em branco, será usado o valor predefinido.';
$string['organizationurl'] = 'URL da organização';
$string['organizationurl_help'] = 'O URL de base desta instância Moodle.

Se este campo for deixado em branco, o valor predefinido será utilizado com base na configuração do site.';
$string['pagesize'] = 'Submissões por página';
$string['parameter'] = 'Parâmetros da ferramenta';
$string['parameter_help'] = 'Os parâmetros da ferramenta são configurações que requerem a aprovação do fornecedor da ferramenta LTI no proxy de ferramenta aceite.';
$string['password'] = 'Senha partilhada';
$string['password_admin'] = 'Senha partilhada';
$string['password_admin_help'] = 'A senha partilhada pode ser vista como uma senha usada para autenticar o acesso à ferramenta. Esta deve ser fornecida juntamente com a chave do consumidor pelo fornecedor de ferramenta.

Ferramentas que não requerem comunicação segura desde o Moodle e não fornecem serviços adicionais (tais como relatórios de notas) podem não requerer uma senha partilhada.';
$string['password_help'] = 'Para ferramentas pré-configuradas não é necessário inserir uma senha partilhada aqui, sendo fornecida no processo de configuração.

Este campo deve ser preenchido caso pretenda criar uma hiperligação para um fornecedor de ferramenta que ainda não está configurado.
Se o fornecedor de ferramenta for para ser usado mais que uma vez nesta disciplina, é recomendado adicionar uma configuração da ferramenta na disciplina.

A senha partilhada pode ser pensada como uma senha usada para autenticar o acesso à ferramenta. Deve ser fornecida
juntamente com a chave do consumidor pelo fornecedor de ferramenta.

Ferramentas que não requerem comunicação segura desde o Moodle e não fornecem serviços adicionais (tais como relatórios de notas) podem não requerer uma senha partilhada.';
$string['pending'] = 'Pendente';
$string['pluginadministration'] = 'Administração da Ferramenta externa';
$string['pluginname'] = 'Ferramenta externa';
$string['preferheight'] = 'Altura preferida';
$string['preferwidget'] = 'Widget de arranque preferido';
$string['preferwidth'] = 'Largura preferida';
$string['press_to_submit'] = 'Clique para iniciar esta atividade';
$string['privacy'] = 'Privacidade';
$string['privacy:metadata:coursefullname'] = 'O fullname da disciplina a que o utilizador está a aceder através do sistema LTI';
$string['privacy:metadata:courseid'] = 'O ID da disciplina a que o utilizador está a aceder através do sistema LTI';
$string['privacy:metadata:courseidnumber'] = 'O ID do número da disciplina a que o utilizador está a aceder através do sistema LTI';
$string['privacy:metadata:courseshortname'] = 'O shortname da disciplina a que o utilizador está a aceder através do sistema LTI';
$string['privacy:metadata:createdby'] = 'O utilizador que criou o registo';
$string['privacy:metadata:email'] = 'O endereço de e-mail do utilizador a aceder ao sistema LTI';
$string['privacy:metadata:externalpurpose'] = 'O sistema LTI fornece informação de utilizador e contexto à ferramenta LTI.';
$string['privacy:metadata:firstname'] = 'firstname do utilizador a aceder ao sistema LTI';
$string['privacy:metadata:fullname'] = 'O fullname do utilizador a aceder ao sistema LTI';
$string['privacy:metadata:lastname'] = 'lastname do utilizador a aceder ao sistema LTI';
$string['privacy:metadata:lti_submission'] = 'Submissão LTI';
$string['privacy:metadata:lti_submission:datesubmitted'] = 'A hora exata a indicar quando é que a submissão foi feita';
$string['privacy:metadata:lti_submission:dateupdated'] = 'A hora exata a indicar quando é que a submissão foi modificada';
$string['privacy:metadata:lti_submission:gradepercent'] = 'A avaliação do utilizador como percentagem';
$string['privacy:metadata:lti_submission:originalgrade'] = 'A avaliação original para o utilizador';
$string['privacy:metadata:lti_submission:userid'] = 'O ID do utilizador que submeteu para a atividade LTI';
$string['privacy:metadata:lti_tool_proxies'] = 'Proxies LTI';
$string['privacy:metadata:lti_tool_proxies:name'] = 'Nome do proxy LTI';
$string['privacy:metadata:lti_types'] = 'Tipos LTI';
$string['privacy:metadata:lti_types:name'] = 'Nome do tipo LTI';
$string['privacy:metadata:role'] = 'O papel na disciplina para aceder ao sistema LTI';
$string['privacy:metadata:timecreated'] = 'Data e hora em que o registo foi criado';
$string['privacy:metadata:timemodified'] = 'A data e hora em que o registo foi modificado';
$string['privacy:metadata:userid'] = 'O ID do utilizador a aceder ao sistema LTI';
$string['privacy:metadata:useridnumber'] = 'O ID do número de utilizador a aceder ao sistema LTI';
$string['privacy:metadata:username'] = 'O nome de utilizador do utilizador a aceder ao sistema LTI';
$string['publickey'] = 'Chave pública';
$string['publickey_help'] = 'A chave pública (no formato PEM) fornecida pela ferramenta para permitir que sejam verificadas as assinaturas de mensagens recebidas e solicitações de serviço.';
$string['publickeyset'] = 'Conjunto de chaves público';
$string['publickeyset_help'] = 'Conjunto de chaves público de onde este site recuperará a chave pública da ferramenta para permitir a verificação de assinaturas de mensagens recebidas e solicitações de serviço.';
$string['quickgrade'] = 'Permitir avaliação rápida';
$string['quickgrade_help'] = 'Se ativar esta opção, várias ferramentas podem ser avaliadas apenas numa página. Adicione notas e comentários e clique no botão "Guardar todas as alterações" para guardar as alterações.';
$string['redirect'] = 'Será redirecionado dentro de instantes. Se tal não ocorrer, clique no botão.';
$string['redirectionuris'] = 'URI(s) de redirecionamento';
$string['redirectionuris_help'] = 'Lista de URIs (uma por linha) que a ferramenta usa ao fazer solicitações de autorização. Pelo menos um deve ser registado antes que uma mensagem possa ser enviada com sucesso para a ferramenta.';
$string['register'] = 'Registe-se';
$string['register_warning'] = 'A página de registo parece estar a demorar algum tempo a carregar. Se não carregar, verifique se inseriu o URL correto nas definições de configuração. Se utiliza https para aceder ao Moodle, certifique-se que a ferramenta que está a configurar suporta https e que está a usar https no URL.';
$string['registertype'] = 'Configurar um novo registo de ferramenta externa';
$string['registration_options'] = 'Opções de registo';
$string['registrationname'] = 'Nome do fornecedor da ferramenta';
$string['registrationname_help'] = 'Introduza o nome do fornecedor de ferramenta LTI a ser registado.';
$string['registrationurl'] = 'URL de registo';
$string['registrationurl_help'] = 'O URL de registo deverá estar disponível a partir do fornecedor de ferramenta bem como a localização para a qual os pedidos de registo deverão ser enviados.';
$string['reject'] = 'Rejeitar';
$string['rejected'] = 'Rejeitado';
$string['resource'] = 'Recurso';
$string['resourcekey'] = 'Chave do consumidor';
$string['resourcekey_admin'] = 'Chave do consumidor';
$string['resourcekey_admin_help'] = 'A chave do consumidor é um nome de utilizador usado para a autenticação no acesso à ferramenta. Pode ser usada pelo fornecedor da ferramenta para identificar exclusivamente o site Moodle a partir do qual os utilizadores iniciaram a ferramenta.

A chave do consumidor deve ser fornecida pelo fornecedor de ferramenta. O método de obtenção de uma chave do consumidor varia entre os fornecedores de ferramenta. Pode ser um processo automatizado ou pode requerer conversação com o fornecedor de ferramenta.

Ferramentas que não requerem comunicação segura desde o Moodle e não fornecem serviços adicionais (tais como relatórios de notas) podem não requerer uma chave.';
$string['resourcekey_help'] = 'Para ferramentas pré-configuradas não é necessário inserir uma chave do recurso, tal como a chave do consumidor que são fornecidas no processo de configuração.

Este campo deve ser preenchido caso pretenda criar uma hiperligação para um fornecedor de ferramenta que ainda não está configurado.
Se o fornecedor de ferramenta for para ser usado mais que uma vez nesta disciplina, é recomendado adicionar uma configuração da ferramenta na disciplina.

A chave do consumidor pode ser pensada como um nome de utilizador para autenticar o acesso à ferramenta.
Pode ser usado pelo fornecedor de ferramenta para identificar exclusivamente o site Moodle a partir do qual os utilizadores iniciaram a ferramenta.

A chave do consumidor deve ser fornecida pelo fornecedor de ferramenta. O método de obtenção de uma chave do consumidor varia de fornecedor para fornecedor de ferramenta. Pode ser um processo automatizado ou pode requerer conversação com o fornecedor de ferramenta.

Ferramentas que não requerem comunicação segura desde o Moodle e não fornecem serviços adicionais (tais como relatórios de notas) podem não requerer uma chave.';
$string['resourceurl'] = 'URL do recurso';
$string['return_to_course'] = 'Clique <a href="{$a->link}" target="_top">aqui</a> para voltar à disciplina.';
$string['saveallfeedback'] = 'Guardar todas as alterações';
$string['search:activity'] = 'Ferramenta externa - informações da atividade';
$string['secure_icon_url'] = 'URL do Ícone seguro';
$string['secure_icon_url_help'] = 'Similar ao URL do ícone, mas usado quando o acesso ao site é feito de forma segura através de SSL. Este campo serve para impedir que o navegador exiba um aviso acerca de uma imagem insegura.';
$string['secure_launch_url'] = 'URL da ferramenta segura';
$string['secure_launch_url_help'] = 'Similar ao URL de arranque mas usado caso seja necessária uma segurança elevada. O Moodle irá usar o URL de arranque seguro ao invés do URL de arranque se o Moodle for acedido partir de SSL, ou se as configurações da ferramenta estão definidas para iniciar sempre com SSL.

O URL de arranque também pode ser definido para um endereço https que force a entrada através de SSL e, se assim for, este campo pode ficar em branco.';
$string['selectcontent'] = 'Selecionar conteúdo';
$string['send'] = 'Enviar';
$string['services'] = 'Serviços';
$string['services_help'] = 'Selecione os serviços que pretende disponibilizar ao fornecedor de ferramenta. Podem ser selecionados mais do que um serviço.';
$string['setupoptions'] = 'Opções de configuração';
$string['share_email'] = 'Partilhar e-mail do utilizador com a ferramenta';
$string['share_email_admin'] = 'Partilhar e-mail do utilizador com a ferramenta';
$string['share_email_admin_help'] = 'Especifica se o endereço de e-mail do utilizador que inicia a ferramenta, será, ou não, partilhado com o fornecedor da ferramenta.
O fornecedor da ferramenta pode utilizar o e-mail para distinguir os utilizadores com o mesmo nome na interface do utilizador (UI), ou enviar e-mails para utilizadores com base nas suas ações dentro da ferramenta.';
$string['share_email_help'] = 'Define se o endereço de e-mail do utilizador que inicia a ferramenta será, ou não, partilhado junto com o fornecedor da ferramenta.

O fornecedor da ferramenta pode precisar do e-mail para distinguir os utilizadores com o mesmo nome, ou enviar e-mails para utilizadores com base nas suas ações dentro da ferramenta.

Tenha em atenção que esta configuração pode ser alterada na configuração da ferramenta.';
$string['share_name'] = 'Partilhar nome do utilizador com a ferramenta';
$string['share_name_admin'] = 'Partilhar nome do utilizador com a ferramenta';
$string['share_name_admin_help'] = 'Define se o nome completo do utilizador que inicia a ferramenta deve ser partilhado com o fornecedor da ferramenta.
O fornecedor de ferramenta pode precisar dos nomes dos utilizadores para mostrar informações significativas dentro da ferramenta.';
$string['share_name_help'] = 'Define se o nome completo do utilizador que inicia a ferramenta deve, ou não, ser partilhado com o fornecedor da ferramenta.

O fornecedor da ferramenta pode precisar dos nomes dos utilizadores para mostrar informações significativas dentro da ferramenta.

Tenha em atenção que esta configuração pode ser alterada na configuração da ferramenta.';
$string['share_roster'] = 'Permitir à ferramenta aceder ao roster da disciplina';
$string['share_roster_admin'] = 'A ferramenta pode aceder ao roster da disciplina';
$string['share_roster_admin_help'] = 'Define se a ferramenta pode aceder, ou não, à lista de utilizadores inscritos em disciplinas a partir das quais este tipo de ferramenta é iniciado.';
$string['share_roster_help'] = 'Define se a ferramenta pode, ou não, aceder à lista de utilizadores inscritos nesta disciplina.

Tenha em atenção que esta configuração pode ser alterada na configuração da ferramenta.';
$string['show_in_course_activity_chooser'] = 'Mostrar no seletor de atividade e também como uma ferramenta pré-configurada';
$string['show_in_course_lti1'] = 'O uso da configuração de ferramentas';
$string['show_in_course_lti1_help'] = 'Esta ferramenta pode ser mostrada ao professor quando seleciona uma atividade para adicionar a uma disciplina. Também pode ser mostrada no menu pendente de ferramenta pré-configurada quando adicionar uma ferramenta externa a uma disciplina. Em alternativa, a configuração da ferramenta é usada apenas se o URL correto da ferramenta é inserido quando adicionar uma ferramenta externa a uma disciplina.';
$string['show_in_course_lti2'] = 'O uso da configuração de ferramentas';
$string['show_in_course_lti2_help'] = 'Esta ferramenta pode ser mostrada ao professor quando seleciona uma atividade ou recurso para adicionar a uma disciplina ou na lista pendente da ferramenta pré-configurada ao adicionar uma ferramenta externa a uma disciplina.';
$string['show_in_course_no'] = 'Não mostrar, usar apenas quando um URL de ferramenta correspondente é inserido';
$string['show_in_course_preconfigured'] = 'Mostrar como ferramenta pré-configurada quando adicionar uma ferramenta externa';
$string['sitehost'] = 'Nome do servidor do site';
$string['siteid'] = 'ID do Site';
$string['size'] = 'Parâmetros de tamanho';
$string['submission'] = 'Submissão';
$string['submissions'] = 'Submissões';
$string['submissionsfor'] = 'Submissões para {$a}';
$string['subplugintype_ltiresource'] = 'Recurso de serviços LTI';
$string['subplugintype_ltiresource_plural'] = 'Recursos de serviços LTI';
$string['subplugintype_ltiservice'] = 'Serviço LTI';
$string['subplugintype_ltiservice_plural'] = 'Serviços LTI';
$string['subplugintype_ltisource'] = 'Fonte LTI';
$string['subplugintype_ltisource_plural'] = 'Fontes LTI';
$string['successfullycreatedtooltype'] = 'Nova ferramenta criada com sucesso!';
$string['successfullyfetchedtoolconfigurationfromcontent'] = 'Obteve com sucesso a configuração da ferramenta a partir do conteúdo selecionado.';
$string['toggle_debug_data'] = 'Alternar dados de depuração';
$string['tool_config_not_found'] = 'A configuração não foi encontrada neste URL.';
$string['tool_settings'] = 'Configurações da ferramenta';
$string['tooldescription'] = 'Descrição da ferramenta';
$string['tooldescription_help'] = 'Descrição da ferramenta que será mostrada aos professores na lista de atividades.

Deve descrever o que a ferramenta é e o que ela faz, além de outras informações adicionais que o professor possa precisar de saber.';
$string['tooldetailsaccesstokenurl'] = 'URL do token de acesso';
$string['tooldetailsauthrequesturl'] = 'URL da solicitação de autenticação';
$string['tooldetailsclientid'] = 'ID do cliente';
$string['tooldetailsdeploymentid'] = 'ID de implementação';
$string['tooldetailsmailtosubject'] = 'Configuração da ferramenta LTI';
$string['tooldetailsmodalemail'] = 'E-mail';
$string['tooldetailsmodallink'] = 'Ver detalhes da configuração';
$string['tooldetailsmodaltitle'] = 'Detalhes da configuração da ferramenta';
$string['tooldetailsplatformid'] = 'ID da plataforma';
$string['tooldetailspublickeyseturl'] = 'URL do conjunto de chaves públicas';
$string['toolisbeingused'] = 'Esta ferramenta foi utilizada {$a} vezes';
$string['toolisnotbeingused'] = 'Esta ferramenta ainda não foi utilizada';
$string['toolproxy'] = 'Registos da ferramenta externa';
$string['toolproxy_help'] = 'Os registos de ferramenta externa permitem aos administradores de sites Moodle configurar ferramentas externas a partir de um proxy de ferramenta obtido a partir de um fornecedor de ferramenta que suporte LTI 2.0. Apenas um URL de registo fornecido pelo fornecedor da ferramenta é requerido para iniciar o processo. As permissões e os serviços disponibilizados pelo fornecedor de ferramenta são selecionados ao configurar um novo registo.

Os registos da ferramenta listados nesta página encontram-se separados em quatro categorias:

* **Configurados** - Estes registos de ferramenta foram definidos mas o processo de registo ainda não foi iniciado.
* **Pendentes** - O processo de registo para estes registos de ferramenta foi iniciado mas ainda não foi concluído. Abra e grave as configurações para os mover novamente para a categoria \'Configurados\'.
* **Aceites** - Estes registos de ferramenta foram aprovados; os recursos especificados no proxy da ferramenta serão exibidos na página das ferramentas pré-configuradas com um estado inicial de \'Pendente\'.
 * ** Rejeitados** - Estes registos de ferramenta são aqueles que foram rejeitados durante o processo de registo. Abra e grave as definições para os mover novamente para a categoria \'Configurados\', para que o processo de registo possa ser reiniciado.';
$string['toolproxyregistration'] = 'Registo de ferramenta externa';
$string['toolregistration'] = 'Registo de ferramenta externa';
$string['toolsetup'] = 'Configurações da ferramenta LTI';
$string['tooltypeadded'] = 'Ferramenta pré-configurada adicionada';
$string['tooltypedeleted'] = 'Ferramenta pré-configurada apagada';
$string['tooltypenotdeleted'] = 'Não foi possível apagar a ferramenta pré-configurada';
$string['tooltypes'] = 'Ferramentas';
$string['tooltypeupdated'] = 'Ferramenta pré-configurada atualizada';
$string['toolurl'] = 'URL da ferramenta';
$string['toolurl_contentitemselectionrequest'] = 'URL da seleção de conteúdo';
$string['toolurl_contentitemselectionrequest_help'] = 'O URL de seleção de conteúdo será usado para iniciar a página de seleção de conteúdo do fornecedor da ferramenta. Se estiver em branco, será usado o URL da ferramenta';
$string['toolurl_help'] = 'O URL da Ferramenta é usado para combinar os URLs da Ferramenta LTI com a sua configuração correta. O prefixo http(s) no URL é opcional.

Além disso, o URL de base é usado como o URL da ferramenta se um URL de arranque não for especificado na ferramenta externa.

Por exemplo, um URL base de *tool.com* iria corresponder ao seguinte:

* tool.com
* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=10
* www.tool.com/quizzes;

O URL base de  *www.tool.com/quizzes* iria corresponder ao seguinte:

* www.tool.com/quizzes
* tool.com/quizzes
* tool.com/quizzes/take.php?id=10

Um URL base de *quiz.tool.com* iria corresponder ao seguinte:

* quiz.tool.com
* quiz.tool.com/take.php?id=10.

Se duas configurações diferentes forem do mesmo domínio, será usada a correspondência mais específica.

Também pode inserir um URL de cartridge, caso tenha um, e os detalhes para a ferramenta serão automaticamente preenchidos.';
$string['toolurlplaceholder'] = 'URL da Ferramenta...';
$string['typename'] = 'Nome da ferramenta';
$string['typename_help'] = 'O nome da ferramenta é usado para identificar o fornecedor da ferramenta dentro do Moodle. O nome inserido será visível para os professores ao adicionar ferramentas externas nas suas disciplinas.';
$string['types'] = 'Tipos';
$string['unabletocreatetooltype'] = 'Não foi possível criar a ferramenta';
$string['unabletofindtooltype'] = 'Não foi possível encontrar a ferramenta para {$a->id}';
$string['unknownstate'] = 'Estado desconhecido';
$string['update'] = 'Atualizar';
$string['useraccountinformation'] = 'Informação da conta de utilizador';
$string['userpersonalinformation'] = 'Informação pessoal do utilizador';
$string['using_tool_cartridge'] = 'Usar ferramenta cartridge';
$string['using_tool_configuration'] = 'A usar configurações da ferramenta:&nbsp;';
$string['validurl'] = 'Um URL válido deve começar com  http(s)://';
$string['viewsubmissions'] = 'Ver submissões e relatório de avaliação';
