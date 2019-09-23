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
 * Strings for component 'badges', language 'pt', branch 'MOODLE_36_STABLE'
 *
 * @package   badges
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['activate'] = 'Ativar acesso';
$string['activatesuccess'] = 'O acesso às medalhas foi ativado com sucesso.';
$string['addalignment'] = 'Adicionar competência';
$string['addbadge'] = 'Adicionar medalhas';
$string['addbadgecriteria'] = 'Adicionar critério da medalha';
$string['addbadge_help'] = 'Selecione todas as medalhas que devem fazer parte dos requisitos desta medalha. Mantenha a tecla CTRL pressionada para selecionar vários itens.';
$string['addcohort'] = 'Adicionar Grupo global';
$string['addcohort_help'] = 'Selecione todos Grupos globais que devem fazer parte dos requisitos desta medalha. Mantenha a tecla CTRL pressionada para selecionar vários itens.';
$string['addcourse'] = 'Adicionar disciplinas';
$string['addcourse_help'] = 'Selecione todas as disciplinas que devem fazer parte dos requisitos desta medalha. Mantenha a tecla CTRL pressionada para selecionar vários itens.';
$string['addcriteria'] = 'Adicionar critério';
$string['addcriteriatext'] = 'Para começar a adicionar critérios, por favor, selecione uma das opções a partir da lista pendente.';
$string['addrelated'] = 'Adicionar medalha relacionada';
$string['addtobackpack'] = 'Adicionar à backpack';
$string['adminonly'] = 'Esta página é restrita apenas aos administradores do site.';
$string['after'] = 'após a data de emissão.';
$string['aggregationmethod'] = 'Método de agregação';
$string['alignment'] = 'Competência';
$string['all'] = 'Todos';
$string['allmethod'] = 'Todas as condições selecionadas são cumpridas';
$string['allmethodactivity'] = 'Todas as atividades selecionadas estão concluídas';
$string['allmethodbadges'] = 'Todas medalhas selecionadas foram ganhas';
$string['allmethodcohort'] = 'Ser membro de todos os Grupos globais selecionados';
$string['allmethodcourseset'] = 'Todas as disciplinas selecionadas estão concluídas';
$string['allmethodmanual'] = 'Todos os papéis selecionados podem atribuir a medalha';
$string['allmethodprofile'] = 'Todos os campos de perfil selecionados foram completados';
$string['allowcoursebadges'] = 'Ativar medalhas na disciplina';
$string['allowcoursebadges_desc'] = 'Permitir que as medalhas sejam criadas e atribuídas no contexto da disciplina';
$string['allowexternalbackpack'] = 'Ativar ligação a Backpacks externas';
$string['allowexternalbackpack_desc'] = 'Permitir aos utilizadores configurar ligações e exibir Medalhas a partir dos seus fornecedores externos de Backpacks. Nota: É recomendável deixar esta opção desativada caso não seja possível aceder ao site a partir da Internet (por exemplo, por causa da firewall).';
$string['any'] = 'Qualquer um';
$string['anymethod'] = 'Qualquer uma das condições selecionadas se verifica';
$string['anymethodactivity'] = 'Qualquer uma das atividades selecionadas foi concluída';
$string['anymethodbadges'] = 'Qualquer uma das medalhas selecionadas foi ganha';
$string['anymethodcohort'] = 'Ser membro de qualquer um dos Grupos globais selecionados';
$string['anymethodcourseset'] = 'Qualquer uma das disciplinas selecionadas foi concluída';
$string['anymethodmanual'] = 'Qualquer um dos papéis selecionados pode atribuir a medalha';
$string['anymethodprofile'] = 'Qualquer um dos campos de perfil foi completado';
$string['archivebadge'] = 'Gostaria de apagar a medalha \'{$a}\', mas manter as medalhas existentes que foram emitidas?';
$string['archiveconfirm'] = 'Apagar e manter as medalhas existentes que foram emitidas';
$string['archivehelp'] = '<p>Esta opção significa que a medalha será marcada como "retirada" e não aparecerá mais na lista de medalhas. Os utilizadores deixarão de poder obter esta medalha, no entanto, os atuais condecorados com a medalha continuarão a poder exibir esta medalha na sua página de perfil e nas suas backpacks externas. </p><p> Se pretende que os utilizadores mantenham o acesso às medalhas recebidas, é importante selecionar esta opção em vez de excluir totalmente as medalhas.</p>';
$string['attachment'] = 'Anexar a medalha à mensagem';
$string['attachment_help'] = 'Se ativar esta opção, a medalha emitida será anexada ao e-mail para que os condecorados a possam descarregar. (Para usar esta opção, os anexos de e-mail devem estar ativos na configuração em Administração do Site / Servidor / E-mail / Configuração de e-mail de saída / Permitir anexos.)';
$string['award'] = 'Atribuir medalha';
$string['awardedtoyou'] = 'Atribuídas a mim';
$string['awardoncron'] = 'O acesso às medalhas foi ativado com sucesso. Esta medalha pode ser recebida por um grande número de utilizadores. Para assegurar o desempenho do site, esta ação levará algum tempo a processar.';
$string['awards'] = 'Condecorados';
$string['backpackavailability'] = 'Verificação externa da medalha';
$string['backpackavailability_help'] = 'Para que os condecorados possam provar que lhes atribuiu as medalhas, é necessário que um serviço externo de backpack possa aceder ao seu site e verificar as medalhas que foram emitidas a partir dele. Aparentemente, o seu site não está acessível de momento, o que significa que as medalhas que já emitiu ou irá emitir não poderão ser verificadas.

**Porque é que está a ver esta mensagem?**

Isto pode dever-se ao facto de: a sua firewall impedir o acesso de utilizadores externos à sua rede; o seu site está protegido com uma senha; ou o site está a ser carregado num computador que não está acessível a partir da Internet (p.ex. uma máquina de desenvolvimento local).

**Isto constitui um problema?**

Deve resolver este problema em qualquer site de produção onde pretende emitir medalhas, caso contrário, os condecorados não poderão provar que lhes atribuiu as medalhas. Se o seu site ainda está em desenvolvimento, pode criar e emitir medalhas de teste, desde que o site esteja acessível enquanto está em desenvolvimento.

**E se não conseguir que todo o seu site fique publicamente acessível?**

O único URL que requer verificação é [url-do-seu-site]/badges/assertion.php, logo, se lhe for possível alterar a sua firewall para permitir o acesso externo a esse ficheiro, a verificação da medalha continuará a funcionar.';
$string['backpackbadges'] = 'Tem {$a->totalbadges} medalha(s) exibidas a partir de {$a->totalcollections} coleções(s). <a href="mybackpack.php">Altere as configurações da backpack</a>.';
$string['backpackcannotsendverification'] = 'Não é possível enviar e-mail de verificação';
$string['backpackconnection'] = 'Ligação à backpack';
$string['backpackconnectioncancelattempt'] = 'Autentique-se usando um endereço de e-mail diferente';
$string['backpackconnectionconnect'] = 'Ligar à backpack';
$string['backpackconnection_help'] = 'Esta página permite-lhe configurar a ligação com um fornecedor externo de Backpack. Ligar-se a uma Backpack permite-lhe exibir as Medalhas externas neste site e encaminhar para a sua Backpack as Medalhas que recebeu aqui.

Para já, apenas é suportado o <a href="http://backpack.openbadges.org">Mozilla OpenBadges Backpack</a>. Tem de se registar num serviço de Backpack antes de tentar configurar a ligação à Backpack nesta página.';
$string['backpackconnectionresendemail'] = 'Reenviar e-mail de verificação';
$string['backpackconnectionunexpectedresult'] = 'Surgiu um problema ao ligar à sua backpack. Por favor, tente novamente.<br/><br/>Se este problema persistir, contacte o Administrador.';
$string['backpackdetails'] = 'Configurações da backpack';
$string['backpackemail'] = 'Endereço de e-mail';
$string['backpackemail_help'] = 'Endereço de e-mail associado à sua backpack. Enquanto estiver ligado, qualquer medalha recebida neste site será associada a este endereço de e-mail.';
$string['backpackemailverificationpending'] = 'Verificação pendente';
$string['backpackemailverifyemailbody'] = 'Olá,

Foi solicitada uma nova ligação à sua OpenBadges backpack com origem no site \'{$a->sitename}\', usando seu endereço de e-mail.

Para confirmar e ativar a ligação à sua backpack, visite a página

{$a->link}

Normalmente o URL acima deverá aparecer como uma hiperligação azul que apenas tem de clicar. Se tal não funcionar, copie e cole a hiperligação na linha de endereço do seu navegador.

Se precisar de ajuda, entre em contacto com o administrador do site,
{$a->admin}';
$string['backpackemailverifyemailsubject'] = '{$a}: e-mail de verificação da backpack Badges';
$string['backpackemailverifypending'] = 'Um e-mail de verificação foi enviado para <strong>{$a}</strong>. Clique na hiperligação de verificação no e-mail para ativar a ligação à sua backpack.';
$string['backpackemailverifysuccess'] = 'Obrigado por verificar o seu endereço de e-mail. Já está ligado à sua backpack.';
$string['backpackemailverifytokenmismatch'] = 'O token na hiperligação que clicou não corresponde ao token guardado. Certifique-se de clicar na hiperligação do e-mail mais recente que recebeu.';
$string['backpackimport'] = 'Configurações da importação de medalhas';
$string['backpackimport_help'] = 'Depois de estabelecer com sucesso a ligação à backpack, as medalhas da sua backpack podem ser mostradas na sua página "Minhas Medalhas" e no seu perfil.

Nesta área, pode selecionar as coleções de medalhas da sua backpack que gostaria de mostrar no seu perfil.';
$string['badgedetails'] = 'Detalhes da medalha';
$string['badgeimage'] = 'Imagem';
$string['badgeimage_help'] = 'Imagem que será usada quando esta medalha for emitida.

Para adicionar uma nova imagem, procure e selecione uma imagem (formato JPG ou PNG) e clique em "Guardar alterações". Para cumprir com os requisitos de imagem das medalhas, a imagem será redimensionada e recortada para ter forma quadrada.';
$string['badgeprivacysetting'] = 'Configurações da privacidade da medalha';
$string['badgeprivacysetting_help'] = 'As medalhas que receber podem ser exibidas na página do seu perfil. Esta configuração permite-lhe definir automaticamente a visibilidade das medalhas recebidas recentemente.

Continuará a poder controlar individualmente as configurações de privacidade das medalhas na sua página "Minhas Medalhas".';
$string['badgeprivacysetting_str'] = 'Exibir automaticamente na página do meu perfil as medalhas que recebi';
$string['badges'] = 'Medalhas';
$string['badgesalt'] = 'Salt de encriptação do endereço de e-mail';
$string['badgesalt_desc'] = 'Usar uma encriptação permite aos serviços de backpack confirmar o utilizador que recebeu a medalha sem ter de expor o seu endereço de e-mail. Esta configuração deverá usar apenas números e letras.

Nota: Para fins de verificação, evite mudar esta configuração assim que começar a emitir medalhas.';
$string['badgesdisabled'] = 'As medalhas não estão ativas neste site.';
$string['badgesearned'] = 'Número de medalhas recebidas: {$a}';
$string['badgesettings'] = 'Configurações das medalhas';
$string['badgestatus_0'] = 'Não disponível para os utilizadores';
$string['badgestatus_1'] = 'Disponível para os utilizadores';
$string['badgestatus_2'] = 'Não disponível para os utilizadores';
$string['badgestatus_3'] = 'Disponível para os utilizadores';
$string['badgestatus_4'] = 'Arquivado';
$string['badgestoearn'] = 'Número de medalhas disponíveis: {$a}';
$string['badgesview'] = 'Medalhas da disciplina';
$string['badgeurl'] = 'Hiperligação para a medalha emitida';
$string['balignment'] = 'Competências ({$a})';
$string['bawards'] = 'Condecorados ({$a})';
$string['bcriteria'] = 'Critérios';
$string['bdetails'] = 'Editar detalhes';
$string['bendorsement'] = 'Aval';
$string['bmessage'] = 'Mensagem';
$string['boverview'] = 'Perspetiva global';
$string['brelated'] = 'Medalhas relacionadas ({$a})';
$string['bydate'] = 'concluída até';
$string['claim'] = 'Reivindicar';
$string['claimcomment'] = 'Comentário da acreditação';
$string['claimid'] = 'URL de reivindicação';
$string['clearsettings'] = 'Limpar configurações';
$string['completioninfo'] = 'Critérios de emissão da medalha: ';
$string['completionnotenabled'] = 'A \'Conclusão da disciplina\' não está ativa para esta disciplina, por isso não poderá ser incluída nos critérios da medalha. A \'Conclusão da disciplina\' pode ser ativada nas configurações da disciplina.';
$string['configenablebadges'] = 'Quando ativada, esta funcionalidade permite-lhe criar medalhas e atribuí-las aos utilizadores do site.';
$string['configuremessage'] = 'Mensagem da medalha';
$string['connect'] = 'Ligar';
$string['connected'] = 'Ligado';
$string['connecting'] = 'A estabelecer a ligação...';
$string['contact'] = 'Contacto';
$string['contact_help'] = 'Endereço de e-mail associado ao emissor da medalha.';
$string['copyof'] = 'Cópia de {$a}';
$string['coursebadges'] = 'Medalhas';
$string['coursebadgesdisabled'] = 'Medalhas na disciplina não estão ativas neste site.';
$string['coursecompletion'] = 'Os utilizadores têm de concluir esta disciplina';
$string['create'] = 'Nova medalha';
$string['createbutton'] = 'Criar medalha';
$string['creatorbody'] = '<p>{$a->user} completou todos os requisitos e foi-lhe atribuída a medalha. Veja a medalha emitida em {$a->link} </p>';
$string['creatorsubject'] = '\'{$a}\' foi atribuída!';
$string['criteria_0'] = 'Esta medalha é atribuída quando...';
$string['criteria_1'] = 'Conclusão da atividade';
$string['criteria_1_help'] = 'Permite que uma medalha seja atribuída aos utilizadores em função da conclusão de um conjunto de atividades de uma disciplina.';
$string['criteria_2'] = 'Emissão manual pelo papel';
$string['criteria_2_help'] = 'Permite que uma medalha seja atribuída manualmente pelos utilizadores que têm um papel específico dentro do site ou da disciplina.';
$string['criteria_3'] = 'Participação social';
$string['criteria_3_help'] = 'Social';
$string['criteria_4'] = 'Conclusão da disciplina';
$string['criteria_4_help'] = 'Permite que uma medalha seja atribuída a utilizadores que tenham concluído a disciplina. Este critério pode ter parâmetros adicionais, tais como uma nota mínima e a data de conclusão da disciplina.';
$string['criteria_5'] = 'Concluir um conjunto de disciplinas';
$string['criteria_5_help'] = 'Permite que uma medalha seja atribuída a utilizadores que tenham concluído um conjunto de disciplinas. Cada disciplina pode ter parâmetros adicionais, tais como uma nota mínima e a data de conclusão da disciplina.';
$string['criteria_6'] = 'Preenchimento do perfil';
$string['criteria_6_help'] = 'Permite que uma medalha seja atribuída a utilizadores que preencham determinados campos do seu perfil. Pode selecionar campos predefinidos e campos personalizados que estão disponíveis para os utilizadores.';
$string['criteria_7'] = 'Medalhas atribuídas';
$string['criteria_7_help'] = 'Permite que uma medalha seja atribuída aos utilizadores com base em outras medalhas recebidas.';
$string['criteria_8'] = 'Membro de Grupo global';
$string['criteria_8_help'] = 'Permite que uma medalha seja atribuída aos utilizadores consoante o Grupo Global a que pertencem';
$string['criteriacreated'] = 'Critérios da medalha criados com sucesso';
$string['criteriadeleted'] = 'Critérios da medalha eliminados com sucesso';
$string['criteria_descr'] = 'Os utilizadores recebem esta medalha quando cumprem os seguintes requisitos:';
$string['criteria_descr_0'] = 'Os utilizadores recebem esta medalha quando cumprem <strong>{$a}</strong> dos requisitos listados.';
$string['criteria_descr_1'] = '<strong>{$a}</strong> das seguintes atividades estão concluídas:';
$string['criteria_descr_2'] = 'Esta medalha será atribuída a utilizadores com <strong>{$a}</strong> dos seguintes papéis:';
$string['criteria_descr_4'] = 'Os utilizadores têm de concluir a disciplina';
$string['criteria_descr_5'] = '<strong>{$a}</strong> das seguintes disciplinas têm de ser concluídas:';
$string['criteria_descr_6'] = '<strong>{$a}</strong> dos seguintes campos de perfil têm de ser completados:';
$string['criteria_descr_7'] = '<strong>{$a}</strong> das seguintes medalhas têm que ser obtidas:';
$string['criteria_descr_8'] = 'É obrigatório ser membro de <strong>{$a}</strong> dos seguintes Grupos globais:';
$string['criteria_descr_bydate'] = 'até <em>{$a}</em>';
$string['criteria_descr_grade'] = 'com a nota mínima de <em>{$a}</em>';
$string['criteria_descr_short0'] = 'Concluir <strong>{$a}</strong> de:&nbsp;';
$string['criteria_descr_short1'] = 'Concluir <strong>{$a}</strong> de:&nbsp;';
$string['criteria_descr_short2'] = 'Atribuída por <strong>{$a}</strong> de: ';
$string['criteria_descr_short4'] = 'Concluir a disciplina';
$string['criteria_descr_short5'] = 'Concluir <strong>{$a}</strong> de:&nbsp;';
$string['criteria_descr_short6'] = 'Concluir <strong>{$a}</strong> de:&nbsp;';
$string['criteria_descr_short7'] = 'Completar <strong>{$a}</ strong> de:';
$string['criteria_descr_short8'] = 'Ser membro de <strong>{$a}</strong> Grupos globais de:';
$string['criteria_descr_single_1'] = 'Conclusão da atividade:';
$string['criteria_descr_single_2'] = 'Esta medalha tem de ser atribuída por um utilizador com o seguinte papel:';
$string['criteria_descr_single_4'] = 'Os utilizadores têm de concluir a disciplina';
$string['criteria_descr_single_5'] = 'A seguinte disciplina tem ser concluída:';
$string['criteria_descr_single_6'] = 'O seguinte campo de perfil do utilizador tem de ser completo:';
$string['criteria_descr_single_7'] = 'A seguinte medalha tem que ser obtida:';
$string['criteria_descr_single_8'] = 'É obrigatório ser membro do seguinte Grupo global:';
$string['criteria_descr_single_short1'] = 'Conclusão:&nbsp;';
$string['criteria_descr_single_short2'] = 'Atribuída por: ';
$string['criteria_descr_single_short4'] = 'Conclusão da disciplina';
$string['criteria_descr_single_short5'] = 'Conclusão:&nbsp;';
$string['criteria_descr_single_short6'] = 'Conclusão:&nbsp;';
$string['criteria_descr_single_short7'] = 'Concluída:';
$string['criteria_descr_single_short8'] = 'Ser membro de:';
$string['criteriasummary'] = 'Resumo dos critérios';
$string['criteriaupdated'] = 'Critérios da medalha atualizados com sucesso';
$string['criterror'] = 'Erros de parâmetros atuais';
$string['criterror_help'] = 'Este critério mostra todos os parâmetros que foram inicialmente adicionados aos requisitos desta medalha, mas que já não estão disponíveis. É recomendável que remova estes parâmetros para assegurar que, no futuro,  os utilizadores poderão receber esta medalha.';
$string['currentimage'] = 'Imagem atual';
$string['currentstatus'] = 'Estado atual:&nbsp;';
$string['dateawarded'] = 'Data de emissão';
$string['dateearned'] = 'Data: {$a}';
$string['day'] = 'Dia(s)';
$string['deactivate'] = 'Desativar acesso';
$string['deactivatesuccess'] = 'O acesso às medalha foi desativado com sucesso.';
$string['defaultissuercontact'] = 'Detalhes de contacto do emissor predefinido de Medalhas';
$string['defaultissuercontact_desc'] = 'Endereço de e-mail associado ao emissor da Medalha.';
$string['defaultissuername'] = 'Nome predefinido do emissor de Medalhas';
$string['defaultissuername_desc'] = 'Nome do agente ou da autoridade emissora de medalhas.';
$string['delbadge'] = 'Pretende apagar a medalha \'{$a}\' e remover todas as medalhas existentes que foram emitidas?';
$string['delconfirm'] = 'Eliminar e remover as medalhas existentes que foram emitidas';
$string['delcritconfirm'] = 'Tem a certeza de que pretende eliminar este critério?';
$string['deletehelp'] = '<p>Eliminar completamente uma medalha significa que todos os seus registos de informação e critérios serão permanentemente removidos. Os utilizadores que receberam esta medalha deixarão de lhe poder aceder e de a exibir nas suas páginas de perfil.</p>
<p>Nota: Os utilizadores que receberam esta medalha e que já a encaminharam para a sua backpack externa, continuarão a ter esta medalha na sua backpack. No entanto, não poderão aceder aos respetivos critérios nem às páginas de evidência que estejam ligadas a este web site.</p>';
$string['delparamconfirm'] = 'Tem a certeza de que pretende eliminar este parâmetro?';
$string['description'] = 'Descrição';
$string['disconnect'] = 'Desligar';
$string['donotaward'] = 'Esta medalha não se encontra disponível de momento e, por isso, não pode ser atribuída aos utilizadores. Se pretende atribuir esta medalha, por favor, configure o seu estado para ativo.';
$string['editsettings'] = 'Editar configurações';
$string['enablebadges'] = 'Ativar medalhas';
$string['endorsement'] = 'Acreditação';
$string['error:backpackdatainvalid'] = 'A informação devolvida pela backpack é inválida.';
$string['error:backpackemailnotfound'] = 'O e-mail \'{$a}\' não está associado à backpack. Tem de criar uma backpack <a href="http://backpack.openbadges.org"></a> para essa conta ou entrar com outro endereço de e-mail.';
$string['error:backpackloginfailed'] = 'Não é possível ligar-se a uma backpack externa pelo seguinte motivo: {$a}';
$string['error:backpacknotavailable'] = 'O seu site não está disponível a partir da internet e, por isso, nenhuma medalha atribuída neste site poderá ser verificada por um serviço externo de backpacks.';
$string['error:backpackproblem'] = 'Ocorreu um problema ao ligar ao seu fornecedor de serviços de backpack. Por favor, tente mais tarde.';
$string['error:badgeawardnotfound'] = 'Não é possível verificar esta medalha atribuída. Esta medalha pode ter sido revogada.';
$string['error:badgenotfound'] = 'Medalha não encontrada';
$string['error:badjson'] = 'A tentativa de ligação devolveu informação inválida.';
$string['error:cannotact'] = 'Não é possível ativar a medalha.';
$string['error:cannotawardbadge'] = 'Não é possível atribuir a medalha a um utilizador.';
$string['error:cannotdeletecriterion'] = 'Este critério não pode ser eliminado.';
$string['error:cannotrevokebadge'] = 'Não é possível revogar a medalha de um utilizador.';
$string['error:clone'] = 'Não é possível duplicar a medalha.';
$string['error:connectionunknownreason'] = 'A ligação não foi bem sucedida sem que nenhum motivo fosse indicado para o justificar.';
$string['error:duplicatename'] = 'Já existe uma medalha com o este nome no sistema.';
$string['error:externalbadgedoesntexist'] = 'Medalha não encontrada';
$string['error:guestuseraccess'] = 'Está a aceder o site como visitante. Para ver as medalhas tem de autenticar-se com a sua conta de utilizador.';
$string['error:invalidbadgeurl'] = 'Formato do URL do emissor da medalha inválido. O URL deve ter um prefixo http:// ou https://.';
$string['error:invalidcriteriatype'] = 'Tipo de critério inválido.';
$string['error:invalidexpiredate'] = 'A data de expiração tem de ser futura.';
$string['error:invalidexpireperiod'] = 'O período de expiração não pode ser negativo ou igual a 0.';
$string['error:invalidparambadge'] = 'A medalha não existe.';
$string['error:invalidparamcohort'] = 'O Grupo global não existe.';
$string['error:noactivities'] = 'Não existem atividades com critérios de conclusão ativos nesta disciplina.';
$string['error:noassertion'] = 'Nenhuma afirmação foi devolvida pelo sistema Persona. Poderá ter fechado a caixa de diálogo antes de completar o processo de autenticação.';
$string['error:nobadges'] = 'Não existe nenhuma disciplina ou medalhas do site com acesso ativo para ser adicionada como critério.';
$string['error:nocohorts'] = 'Sem Grupos globais';
$string['error:nocourses'] = 'A Conclusão da disciplina não está ativa para nenhuma das disciplinas neste site e, por isso, nenhuma pode ser exibida. A Conclusão da disciplina pode ser ativada nas configurações da disciplina.';
$string['error:nogroups'] = '<p> Não existem coleções públicas de Medalhas disponíveis na sua Backpack. </p><p> Apenas coleções públicas são exibidas, <a href="http://backpack.openbadges.org">aceda à sua Backpack</a> para criar algumas coleções públicas. </p>';
$string['error:nopermissiontoview'] = 'Não tem permissão para ver os condecorados com a medalha';
$string['error:nosuchbadge'] = 'A medalha com o ID {$a} não existe.';
$string['error:nosuchcohort'] = 'Aviso: este Grupo global já não está mais disponível.';
$string['error:nosuchcourse'] = 'Aviso: Esta disciplina já não está disponível';
$string['error:nosuchfield'] = 'Aviso: Este campo de perfil do utilizador já não está disponível.';
$string['error:nosuchmod'] = 'Aviso: Esta atividade já não está disponível.';
$string['error:nosuchrole'] = 'Aviso: Este papel já não está disponível.';
$string['error:nosuchuser'] = 'O utilizador com este endereço de e-mail não tem uma conta no atual fornecedor backpack.';
$string['error:notifycoursedate'] = 'Aviso: As medalhas associadas à conclusão de disciplina e de atividade não serão emitidas até à data de início da disciplina.';
$string['error:parameter'] = 'Aviso: Pelo menos um parâmetro deve ser selecionado para garantir a correta emissão da medalha.';
$string['error:personaneedsjs'] = 'Atualmente, é necessário JavaScript para estabelecer a ligação à sua Backpack. Se tiver permissão para tal, ative o JavaScript e atualize/recarregue a página.';
$string['error:relatedbadgedoesntexist'] = 'Não existe uma medalha pública com esse identificador';
$string['error:requesterror'] = 'O pedido de ligação falhou (código de erro {$a})';
$string['error:requesttimeout'] = 'O pedido de ligação expirou antes de ser concluído.';
$string['error:save'] = 'Não é possível guardar a medalha.';
$string['error:userdeleted'] = '{$a->user} (Este utilizador já não existe em {$a->site})';
$string['eventbadgearchived'] = 'Medalha arquivada';
$string['eventbadgeawarded'] = 'Medalha atribuída';
$string['eventbadgecreated'] = 'Medalha criada';
$string['eventbadgecriteriacreated'] = 'Critério da medalha criado';
$string['eventbadgecriteriadeleted'] = 'Critério da medalha apagado';
$string['eventbadgecriteriaupdated'] = 'Critério da medalha atualizado';
$string['eventbadgedeleted'] = 'Medalha apagada';
$string['eventbadgedisabled'] = 'Medalha desativada';
$string['eventbadgeduplicated'] = 'Medalha duplicada';
$string['eventbadgeenabled'] = 'Medalha ativada';
$string['eventbadgelistingviewed'] = 'Listagem de medalhas visualizada';
$string['eventbadgerevoked'] = 'Medalha revogada';
$string['eventbadgeupdated'] = 'Medalha atualizada';
$string['eventbadgeviewed'] = 'Medalha visualizada';
$string['evidence'] = 'Evidência';
$string['existingrecipients'] = 'Atuais condecorados com a medalha';
$string['expired'] = 'Expirada';
$string['expiredate'] = 'A validade desta medalha termina {$a}.';
$string['expireddate'] = 'A validade desta medalha terminou {$a}.';
$string['expireperiod'] = 'A validade desta medalha termina {$a} dia(s) após a sua emissão.';
$string['expireperiodh'] = 'A validade desta medalha termina {$a} hora(s) após a sua emissão.';
$string['expireperiodm'] = 'A validade desta medalha termina {$a} minuto(s) após a sua emissão.';
$string['expireperiods'] = 'A validade desta medalha termina {$a} segundo(s) após a sua emissão.';
$string['expirydate'] = 'Data de validade';
$string['expirydate_help'] = 'Opcionalmente, as medalhas podem expirar numa data específica ou a data pode ser calculada com base na data em que a medalha foi emitida para um utilizador.';
$string['externalbadges'] = 'As minhas medalhas de outros sites';
$string['externalbadges_help'] = 'Esta área exibe as medalhas da sua backpack externa.';
$string['externalbadgesp'] = 'Medalhas de outros sites:';
$string['externalconnectto'] = 'Para exibir medalhas externas tem de <a href="{$a}">ligar-se a uma backpack</a>.';
$string['fixed'] = 'Data fixa';
$string['hiddenbadge'] = 'Lamentamos, mas o proprietário da medalha não disponibiliza esta informação.';
$string['imageauthoremail'] = 'E-mail do autor da imagem';
$string['imageauthoremail_help'] = 'Se especificado, o endereço de e-mail do autor da imagem da medalha será mostrado na página da medalha.';
$string['imageauthorname'] = 'Nome do autor da imagem';
$string['imageauthorname_help'] = 'Se especificado, o nome do autor da imagem da medalha será mostrado na página da medalha.';
$string['imageauthorurl'] = 'URL do autor da imagem';
$string['imageauthorurl_help'] = 'Se especificado, será mostrada na página da medalha uma hiperligação para o site do autor da imagem da medalha. O URL deve ter um prefixo http:// ou https://.';
$string['imagecaption'] = 'Legenda da imagem';
$string['imagecaption_help'] = 'Se especificado, a legenda da imagem será mostrada na página da medalha.';
$string['invalidurl'] = 'URL inválido';
$string['issuancedetails'] = 'Data de validade da medalha';
$string['issuedbadge'] = 'Informação da medalha emitida';
$string['issuerdetails'] = 'Detalhes do emissor';
$string['issueremail'] = 'E-mail';
$string['issueremail_help'] = 'Endereço de e-mail da organização que emite a acreditação.';
$string['issuername'] = 'Nome do emissor';
$string['issuername_endorsement'] = 'Nome do emissor da acreditação';
$string['issuername_endorsement_help'] = 'O nome do emissor da acreditação.';
$string['issuername_help'] = 'Nome do agente emissor ou autoridade.';
$string['issuerurl'] = 'URL do emissor';
$string['issuerurl_help'] = 'O site da organização que emite a acreditação. O URL deve ter um prefixo http:// ou https://.';
$string['language'] = 'Idioma';
$string['language_help'] = 'O idioma selecionado para a página da medalha.';
$string['localbadges'] = 'As minhas medalhas do site {$a}';
$string['localbadgesh'] = 'As Minhas Medalhas deste site';
$string['localbadgesh_help'] = 'Todas as medalhas ganhas dentro deste web site por conclusão de disciplina, atividades e outros requisitos.

Pode gerir as suas medalhas aqui e torná-las públicas ou privadas na página do seu perfil.

Pode descarregar todas as medalhas, ou cada medalha separadamente, e guardá-las no seu computador. As medalhas que descarregou podem ser adicionadas ao seu serviço externo de Backpack.';
$string['localbadgesp'] = 'Medalhas de {$a}:';
$string['localconnectto'] = 'Para partilhar estas medalhas fora deste site tem de <a href="{$a}">ligar-se a uma backpack</a>.';
$string['makeprivate'] = 'Tornar privadas';
$string['makepublic'] = 'Tornar públicas';
$string['managebadges'] = 'Gerir medalhas';
$string['message'] = 'Texto da mensagem';
$string['messagebody'] = '<p>Foi-lhe atribuída a medalha "%badgename%"!</p>
<p>Mais informações sobre esta medalha em %badgelink%.</p>
<p>Pode gerir e descarregar a medalha a partir da página {$a}.</p>';
$string['messagesubject'] = 'Parabéns! Acabou de ganhar uma medalha!';
$string['method'] = 'Este critério é cumprido quando…';
$string['mingrade'] = 'Nota mínima necessária';
$string['month'] = 'Mês/Meses';
$string['mybackpack'] = 'Configurações da minha backpack';
$string['mybadges'] = 'Minhas Medalhas';
$string['never'] = 'Sem data de expiração';
$string['newbadge'] = 'Adicionar uma nova medalha';
$string['newimage'] = 'Nova imagem';
$string['noalignment'] = 'Nenhuma competência foi especificada para esta medalha.';
$string['noawards'] = 'Esta medalha ainda não foi atribuída.';
$string['nobackpack'] = 'Não existe nenhum serviço de backpack ligado a esta conta.<br/>';
$string['nobackpackbadges'] = 'Não existem medalhas nas coleções que selecionou. <a href="mybackpack.php">Adicionar mais coleções</a>.';
$string['nobackpackcollections'] = 'Não foi selecionada nenhuma coleção de medalhas. <a href="mybackpack.php">Adicionar coleções</a>.';
$string['nobadges'] = 'Não existem medalhas disponíveis.';
$string['nocriteria'] = 'Os critérios desta medalha ainda não foram definidos.';
$string['noendorsement'] = 'Esta medalha não tem uma acreditação.';
$string['noexpiry'] = 'Esta medalha não tem uma data de validade.';
$string['noparamstoadd'] = 'Não existem parâmetros adicionais disponíveis para adicionar aos requisitos desta medalha.';
$string['norelated'] = 'Não existem medalhas relacionadas com esta medalha.';
$string['notacceptedrole'] = 'O seu papel atual não está entre os papéis que podem emitir manualmente esta medalha.<br/>
Se pretender visualizar os utilizadores que já receberam esta medalha, visite a página {$a}.';
$string['notconnected'] = 'Desligado';
$string['notealignment'] = 'Podem ser especificadas competências externas, proficiências ou predefinições relacionadas com esta medalha. Quaisquer competências são mostradas na página da medalha.';
$string['noteendorsement'] = 'Uma acreditação de terceiros pode ser usada para acrescentar valor à medalha. Por exemplo, uma medalha emitida por um professor pode ser acreditada pela escola, ou uma medalha emitida por um órgão local pode ser acreditada pelo órgão nacional de atribuição.';
$string['noterelated'] = 'Medalhas com uma ligação podem ser marcadas como relacionadas. Por exemplo, as medalhas com os mesmos critérios, mas mostradas em diferentes idiomas, podem ser marcadas como relacionadas. Quaisquer medalhas relacionadas são mostradas na página da medalha.';
$string['nothingtoadd'] = 'Não existem critérios disponíveis para adicionar.';
$string['notification'] = 'Notificar o criador da medalha';
$string['notification_help'] = 'Esta configuração gere as notificações enviadas ao criador da medalha para que ele saiba que a medalha foi emitida.

Estão disponíveis as seguintes opções:

* **NUNCA** – Não enviar notificações.

* **SEMPRE** – Enviar uma notificação sempre que esta medalha é atribuída.

* **DIARIAMENTE** – Enviar notificações uma vez por dia.

* **SEMANALMENTE** – Enviar notificações uma vez por semana.

* **MENSALMENTE** – Enviar notificações uma vez por mês.';
$string['notifydaily'] = 'Diariamente';
$string['notifyevery'] = 'Sempre';
$string['notifymonthly'] = 'Mensalmente';
$string['notifyweekly'] = 'Semanalmente';
$string['numawards'] = 'Esta medalha foi emitida para <a href="{$a->link}">{$a->count}</a> utilizador(es).';
$string['numawardstat'] = 'Esta medalha foi emitida para {$a} utilizador(es).';
$string['overallcrit'] = 'dos critérios selecionados são cumpridos.';
$string['personaconnection'] = 'Autentique-se com o seu e-mail';
$string['personaconnection_help'] = 'O Persona é um sistema que permite que seja identificado em toda a web, usando um endereço de e-mail. A backpack Open Badges usa o Persona como um sistema de autenticação e, por isso, precisa de uma conta Persona para se ligar a uma backpack.

Para mais informações sobre o Persona visite <a href="https://login.persona.org/about">https://login.persona.org/about</a> .';
$string['potentialrecipients'] = 'Potenciais destinatários da medalha';
$string['preferences'] = 'Preferências das medalhas';
$string['privacy:metadata:backpack'] = 'O registo das medalhas de utilizador';
$string['privacy:metadata:backpack:backpackuid'] = 'O identificador único da medalha';
$string['privacy:metadata:backpack:backpackurl'] = 'O URL de medalha';
$string['privacy:metadata:backpack:email'] = 'O e-mail associado com a backpack';
$string['privacy:metadata:backpack:userid'] = 'O ID do utilizador de quem é a backpack';
$string['privacy:metadata:badge'] = 'Uma coleção de medalhas';
$string['privacy:metadata:badge:timecreated'] = 'A data de quando a medalha foi criada';
$string['privacy:metadata:badge:timemodified'] = 'A data/hora da última modificação da medalha';
$string['privacy:metadata:badge:usercreated'] = 'O ID do utilizador que criou a medalha';
$string['privacy:metadata:badge:usermodified'] = 'O ID do utilizador que modificou a medalha';
$string['privacy:metadata:criteriamet'] = 'Uma coleção de critérios que foram alcançados';
$string['privacy:metadata:criteriamet:datemet'] = 'A data de quando os critérios foram alcançados';
$string['privacy:metadata:criteriamet:userid'] = 'O ID do utilizador que alcançou os critérios';
$string['privacy:metadata:external:backpacks'] = 'Informação partilhada quando os utilizadores submetem as suas medalhas numa backpack externa';
$string['privacy:metadata:external:backpacks:badge'] = 'O nome da medalha';
$string['privacy:metadata:external:backpacks:description'] = 'A descrição da medalha';
$string['privacy:metadata:external:backpacks:image'] = 'A imagem da medalha';
$string['privacy:metadata:external:backpacks:issuer'] = 'Alguma informação sobre o problema';
$string['privacy:metadata:external:backpacks:url'] = 'O URL do Moodle onde a informação sobre o problema da medalha pode ser consultado';
$string['privacy:metadata:issued'] = 'O registo de medalhas condecoradas';
$string['privacy:metadata:issued:dateexpire'] = 'A data de expiração da medalha';
$string['privacy:metadata:issued:dateissued'] = 'A data da condecoração';
$string['privacy:metadata:issued:userid'] = 'O ID do utilizador que foi condecorado com a medalha';
$string['privacy:metadata:manualaward'] = 'O registo de condecorações manuais';
$string['privacy:metadata:manualaward:datemet'] = 'A data de quando o utilizador foi condecorado com a medalha';
$string['privacy:metadata:manualaward:issuerid'] = 'O ID do utilizador condecorado com a medalha';
$string['privacy:metadata:manualaward:issuerrole'] = 'O papel do utilizador condecorado com a medalha';
$string['privacy:metadata:manualaward:recipientid'] = 'O ID do utilizador que foi condecorado manualmente com a medalha';
$string['recipientdetails'] = 'Detalhes do condecorado';
$string['recipientidentificationproblem'] = 'Não é possível encontrar um condecorado com esta medalha entre os utilizadores existentes.';
$string['recipients'] = 'Condecorados com a medalha';
$string['recipientvalidationproblem'] = 'Não é possível verificar este utilizador como um condecorado com esta medalha.';
$string['relatedbages'] = 'Medalhas relacionadas';
$string['relative'] = 'Data relativa';
$string['requiredbadge'] = 'Pelo menos uma medalha deve ser adicionada ao critério medalha.';
$string['requiredcohort'] = 'Pelo menos um Grupo global deve ser adicionado ao critério Grupo global.';
$string['requiredcourse'] = 'Deve ser adicionada pelo menos uma disciplina ao critério disciplinas.';
$string['reviewbadge'] = 'Alterações no acesso à medalha';
$string['reviewconfirm'] = '<p>Isto fará com que esta medalha fique visível para os utilizadores e disponível para lhes ser atribuída.</p>

<p>É possível que alguns utilizadores já cumpram os critérios para atribuição desta medalha e, por isso, esta ser-lhes-á atribuída assim que a ativar.</p>

<p>Assim que uma medalha for emitida, esta será <strong>bloqueada</strong> - algumas configurações, incluindo os critérios e as configurações da data de validade, não poderão ser alteradas.</p>

<p>Tem a certeza de que pretende ativar o acesso à medalha {$a}? </p>';
$string['revoke'] = 'Revogar medalha';
$string['save'] = 'Guardar';
$string['searchname'] = 'Pesquisar por nome';
$string['selectaward'] = 'Por favor, selecione o papel que gostaria de usar para atribuir esta medalha: ';
$string['selectgroup_end'] = 'Apenas as coleções públicas são exibidas, <a href="http://backpack.openbadges.org">visite a sua Backpack</a> para criar mais coleções públicas.';
$string['selectgroup_start'] = 'Selecione coleções da sua backpack para exibir neste site:';
$string['selecting'] = 'Com as medalhas selecionadas…';
$string['setup'] = 'Configurar ligação';
$string['signinwithyouremail'] = 'Autentique-se com o seu email';
$string['sitebadges'] = 'Medalhas do site';
$string['sitebadges_help'] = 'As medalhas do site só podem ser atribuídas aos utilizadores para atividades relacionadas com o site. Estas incluem concluir um conjunto de disciplinas ou partes dos perfis dos utilizadores. As medalhas do site também podem ser emitidas manualmente por um utilizador e atribuídas a outro.

Medalhas para atividades relacionadas com a disciplina têm de ser criadas ao nível da disciplina. As medalhas da disciplina encontram-se em Administração da disciplina > Medalhas.';
$string['status'] = 'Estado da medalha';
$string['status_help'] = 'O estado da medalha determina o seu comportamento no sistema:

* **DISPONÍVEL** – Significa que esta medalha pode ser atribuída aos utilizadores. Enquanto uma medalha estiver disponível para os utilizadores, os respetivos critérios não podem ser alterados.

* **INDISPONÍVEL** – Significa que esta medalha não está disponível para os utilizadores e que não pode ser ganha nem manualmente atribuída. Se essa medalha nunca tiver sido emitida anteriormente, os seus critérios podem ser alterados.

Assim que uma medalha tiver sido atribuída pelo menos a um utilizador, esta fica automaticamente **BLOQUEADA**. As medalhas bloqueadas podem continuar a ser ganhas pelos utilizadores, mas os seus critérios já não poderão ser alterados. Se precisar de alterar detalhes ou critérios de uma medalha bloqueada, pode duplicar esta medalha e fazer as alterações necessárias.

*Porque são as medalhas bloqueadas?*

É uma forma de assegurar que todos os utilizadores cumprem os mesmos requisitos para receber uma medalha. Atualmente, não é possível anular medalhas. Se fosse permitido que os critérios das medalhas fossem constantemente modificados, provavelmente resultaria em vários utilizadores a terem a mesma medalha apesar de terem cumprido com requisitos completamente diferentes.';
$string['statusmessage_0'] = 'Atualmente, esta medalha não está disponível para os utilizadores. Ative o acesso se pretende que os utilizadores consigam obter esta medalha.';
$string['statusmessage_1'] = 'Atualmente, esta medalha está disponível para os utilizadores. Desative o acesso para fazer alterações.';
$string['statusmessage_2'] = 'Atualmente, esta medalha não está disponível para os utilizadores e os seus critérios estão bloqueados. Ative o acesso se pretende que os utilizadores consigam obter esta medalha.';
$string['statusmessage_3'] = 'Atualmente, esta medalha está disponível para os utilizadores e os seus critérios estão bloqueados.';
$string['statusmessage_4'] = 'Atualmente, esta medalha está arquivada.';
$string['subject'] = 'Assunto da mensagem';
$string['targetcode'] = 'Código';
$string['targetcode_help'] = 'Um identificador exclusivo para referenciar a competência no quadro de competências.';
$string['targetdescription'] = 'Descrição';
$string['targetdescription_help'] = 'Breve descrição do alvo do alinhamento.';
$string['targetframework'] = 'Quadro';
$string['targetframework_help'] = 'O nome do quadro da competência.';
$string['targetname'] = 'Nome da competência';
$string['targetname_help'] = 'A competência, proficiência ou predefinição abrangida pela medalha.';
$string['targeturl'] = 'URL';
$string['targeturl_help'] = 'A hiperligação para a página que descreve a competência, proficiência ou predefinição. O URL deve ter um prefixo http:// ou https://.';
$string['type'] = 'Tipo';
$string['variablesubstitution'] = 'Variável a substituir nas mensagens.';
$string['variablesubstitution_help'] = 'Na mensagem de uma medalha, certas variáveis podem ser inseridas no assunto e/ou no corpo da mensagem para serem substituídas por valores reais quando a mensagem é enviada. As variáveis devem ser inseridas no texto tal como são exibidas em seguida. Podem ser usadas as seguintes variáveis:

%badgename%
Isto será substituído pelo nome completo da medalha.

%username%
Isto será substituído pelo nome completo do condecorado.

%badgelink%
Isto será substituído pelo URL público com informação sobre a medalha emitida.';
$string['version'] = 'Versão';
$string['version_help'] = 'O campo da versão pode ser utilizado para registar o desenvolvimento da medalha. Se especificado, a versão é mostrada na página da medalha.';
$string['viewbadge'] = 'Ver medalha emitida';
$string['visible'] = 'Visível';
$string['warnexpired'] = '(A validade desta medalha terminou!)';
$string['year'] = 'Ano(s)';
