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
 * Strings for component 'tool_policy', language 'pt', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_policy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = 'Reconheço que recebi um pedido para registar os consentimentos em nome do(s) utilizador(es).';
$string['acceptancecount'] = '{$a->agreedcount} de {$a->policiescount}';
$string['acceptancenote'] = 'Observações';
$string['acceptancepolicies'] = 'Políticas';
$string['acceptancessavedsucessfully'] = 'Os consentimentos foram guardados com sucesso.';
$string['acceptancestatusoverall'] = 'Geral';
$string['acceptanceusers'] = 'Utilizadores';
$string['actions'] = 'Ações';
$string['activate'] = 'Definir estado como "Ativo"';
$string['activateconfirm'] = '<p>Está prestes a ativar a política <em>\'{$a->name}\'</em> e tornar a versão <em>\'{$a->revision}\'</em> como a atual.</p><p>Todos os utilizadores serão obrigados a concordar com esta nova versão da política para poder usar o site. </p>';
$string['activateconfirmyes'] = 'Ativar';
$string['activating'] = 'A ativar uma política';
$string['agreed'] = 'Concordou';
$string['agreedby'] = 'Concordou através de';
$string['agreedno'] = 'Consentimento não registado';
$string['agreednowithlink'] = 'Não deu consentimento. Clique para dar consentimento em nome do utilizador a "{$a}"';
$string['agreednowithlinkall'] = 'Não deu consentimento. Clique para dar consentimento em nome do utilizador a todas as políticas';
$string['agreedon'] = 'Concordou em';
$string['agreedyes'] = 'Concordou';
$string['agreedyesonbehalf'] = 'Dar consentimento em nome de';
$string['agreedyesonbehalfwithlink'] = 'Consentimento dado em nome de ; clique para retirar o consentimento de {$a}';
$string['agreedyesonbehalfwithlinkall'] = 'Consentimento dado em nome de ; clique para retirar o consentimento de todas as políticas';
$string['agreedyeswithlink'] = 'Consentimento dado; clique para retirar o consentimento de {$a}';
$string['agreedyeswithlinkall'] = 'Consentimento dado; clique para retirar o consentimento de todas as políticas';
$string['agreepolicies'] = 'Dê o seu consentimento às seguintes políticas';
$string['backtotop'] = 'Voltar ao topo';
$string['consentbulk'] = 'Consentimento';
$string['consentdetails'] = 'Dar consentimento em nome do utilizador';
$string['consentpagetitle'] = 'Consentimento';
$string['contactdpo'] = 'Em caso de dúvida sobre a política, por favor, contacte o responsável pela proteção de dados.';
$string['dataproc'] = 'Processamento de dados pessoais';
$string['deleteconfirm'] = '<p>Tem a certeza de que pretende apagar a política <em>\'{$a->name}\'</em>?</p><p>Esta operação não pode ser desfeita.</p>';
$string['deleting'] = 'A apagar uma versão';
$string['editingpolicydocument'] = 'A editar uma política';
$string['errorpolicyversionnotfound'] = 'Não existe nenhuma versão da política com este identificador.';
$string['errorsaveasdraft'] = 'Pequenas alterações não podem ser guardadas como rascunho';
$string['errorusercantviewpolicyversion'] = 'O utilizador não tem acesso a esta versão da política.';
$string['event_acceptance_created'] = 'Consentimento do utilizador à política criado';
$string['event_acceptance_updated'] = 'Consentimento do utilizador à política atualizado';
$string['filtercapabilityno'] = 'Permissão: não pode concordar';
$string['filtercapabilityyes'] = 'Permissão: pode concordar';
$string['filterplaceholder'] = 'Pesquisar palavras-chave ou selecionar filtro';
$string['filterpolicy'] = 'Política: {$a}';
$string['filterrevision'] = 'Versão: {$a}';
$string['filterrevisionstatus'] = 'Versão: {$a->name} ({$a->status})';
$string['filterrole'] = 'Papel: {$a}';
$string['filters'] = 'Filtros';
$string['filterstatusno'] = 'Estado: Não concordou';
$string['filterstatusyes'] = 'Estado: Concordou';
$string['guestconsent:continue'] = 'Continuar';
$string['guestconsentmessage'] = 'Se continuar a navegar neste site,  concorda com as nossas políticas:';
$string['iagree'] = 'Concordo com {$a}';
$string['iagreetothepolicy'] = 'Dar consentimento em nome do utilizador';
$string['inactivate'] = 'Definir estado para "Inativo"';
$string['inactivating'] = 'A inativar uma política';
$string['inactivatingconfirm'] = '<p>Está prestes a inativar a política <em>\'{$a->name}\'</em> versão <em>\'{$a->revision}\'</em>.</p>';
$string['inactivatingconfirmyes'] = 'Inativar';
$string['invalidversionid'] = 'Não existe política com este identificador!';
$string['irevokethepolicy'] = 'Retirar o consentimento do utilizador';
$string['managepolicies'] = 'Gerir políticas';
$string['minorchange'] = 'Pequena alteração';
$string['minorchangeinfo'] = 'Alterações menores não alteram o significado do texto, termos ou condições da política. Os utilizadores não precisam de reconfirmar o seu consentimento se a alteração for assinalada como menor.';
$string['movedown'] = 'Mover para baixo';
$string['moveup'] = 'Mover para cima';
$string['mustagreetocontinue'] = 'Antes de continuar, tem de concordar com todas estas políticas.';
$string['newpolicy'] = 'Nova política';
$string['newversion'] = 'Nova versão';
$string['nofiltersapplied'] = 'Nenhum filtro aplicado';
$string['nopermissiontoagreedocs'] = 'Sem permissão para concordar com as políticas';
$string['nopermissiontoagreedocsbehalf'] = 'Não tem permissão para concordar com as políticas em nome deste utilizador';
$string['nopermissiontoagreedocsbehalf_desc'] = 'Não tem a necessária permissão para concordar com as seguintes políticas em nome de {$a}:';
$string['nopermissiontoagreedocscontact'] = 'Para mais assistência, entre em contacto com';
$string['nopermissiontoagreedocs_desc'] = 'Não tem as permissões necessárias para concordar com as políticas.<br /> Não poderá usar este site até que concorde com as seguintes políticas:';
$string['nopermissiontoviewpolicyversion'] = 'Não tem permissão para visualizar esta versão da política.';
$string['nopolicies'] = 'Não existem políticas para utilizadores registados com uma versão ativa.';
$string['pluginname'] = 'Políticas';
$string['policiesagreements'] = 'Políticas e consentimentos';
$string['policy:accept'] = 'Concordar com as políticas';
$string['policy:acceptbehalf'] = 'Dar consentimento a políticas em nome de outra pessoa';
$string['policydocaudience'] = 'Consentimento do utlizador';
$string['policydocaudience0'] = 'Todos os utilizadores';
$string['policydocaudience1'] = 'Utilizadores autenticados';
$string['policydocaudience2'] = 'Visitantes';
$string['policydoccontent'] = 'Política geral';
$string['policydochdrpolicy'] = 'Política';
$string['policydochdrversion'] = 'Versão do documento';
$string['policydocname'] = 'Nome';
$string['policydocrevision'] = 'Versão';
$string['policydocsummary'] = 'Resumo';
$string['policydocsummary_help'] = 'Este texto deve fornecer um resumo da política, potencialmente de forma simplificada e facilmente acessível, usando linguagem clara e simples.';
$string['policydoctype'] = 'Tipo';
$string['policydoctype0'] = 'Política do site';
$string['policydoctype1'] = 'Política de privacidade';
$string['policydoctype2'] = 'Política de terceiros';
$string['policydoctype99'] = 'Outras políticas';
$string['policydocuments'] = 'Documentos da política';
$string['policy:managedocs'] = 'Gerir políticas';
$string['policynamedversion'] = 'Política {$a->name} (versão {$a->revision} - {$a->id})';
$string['policyversionacceptedinbehalf'] = 'O consentimento sobre esta política foi dado por outro utilizador em seu nome.';
$string['policyversionacceptedinotherlang'] = 'O consenteimento para esta política foi dado num idioma diferente.';
$string['policy:viewacceptances'] = 'Ver relatórios de consentimento dos utilizadores';
$string['previousversions'] = '{$a} versões anteriores';
$string['privacy:metadata:acceptances'] = 'Informações dos consentimentos dados pelos utilizadores';
$string['privacy:metadata:acceptances:lang'] = 'O idioma exibido quando o consentimento foi dado à política.';
$string['privacy:metadata:acceptances:note'] = 'Quaisquer comentários adicionados pelo utilizador que deu consentimento em nome de outro utilizador';
$string['privacy:metadata:acceptances:policyversionid'] = 'A versão da política que foi aceite.';
$string['privacy:metadata:acceptances:status'] = 'O estado do consentimento';
$string['privacy:metadata:acceptances:timecreated'] = 'Data e hora de quando o utilizador concordou com a política';
$string['privacy:metadata:acceptances:timemodified'] = 'A data e hora de quando o utilizador modificou o seu consentimento';
$string['privacy:metadata:acceptances:userid'] = 'O utilizador com que se relaciona o consentimento desta política.';
$string['privacy:metadata:acceptances:usermodified'] = 'O ID do utilizador que concordou com a política, se o fez em nome de outro utilizador.';
$string['privacy:metadata:subsystem:corefiles'] = 'A ferramenta Política armazena ficheiros incluídos no resumo e no texto completo da política.';
$string['privacy:metadata:versions'] = 'Informação sobre as versões da política.';
$string['privacy:metadata:versions:archived'] = 'Estado da política (ativa ou inativa).';
$string['privacy:metadata:versions:audience'] = 'Tipo de utilizadores que devem dar o seu consentimento.';
$string['privacy:metadata:versions:content'] = 'Conteúdo desta versão da política.';
$string['privacy:metadata:versions:contentformat'] = 'Formato do campo do conteúdo.';
$string['privacy:metadata:versions:name'] = 'Nome da política.';
$string['privacy:metadata:versions:policyid'] = 'Política associada a esta versão.';
$string['privacy:metadata:versions:revision'] = 'Nome da revisão desta versão da política.';
$string['privacy:metadata:versions:summary'] = 'Resumo desta versão da política.';
$string['privacy:metadata:versions:summaryformat'] = 'Formato do campo resumo.';
$string['privacy:metadata:versions:timecreated'] = 'Hora de criação desta versão da política.';
$string['privacy:metadata:versions:timemodified'] = 'Hora de atualização desta versão da política.';
$string['privacy:metadata:versions:type'] = 'Tipo de política.';
$string['privacy:metadata:versions:usermodified'] = 'Utilizador que modificou a política.';
$string['privacysettings'] = 'Configurações de privacidade';
$string['readpolicy'] = 'Leia a nossa {$a}';
$string['refertofullpolicytext'] = 'Por favor, consulte a versão completa de {$a} se desejar rever o texto.';
$string['revokeacknowledgement'] = 'Confirmo que recebi uma solicitação para retirar o consentimento em nome do(s) utilizadore(s)';
$string['revokedetails'] = 'Retirar o consentimento do utilizador';
$string['save'] = 'Guardar';
$string['saveasdraft'] = 'Guardar como rascunho';
$string['selectpolicyandversion'] = 'Use o filtro acima para selecionar política e/ou versão';
$string['selectuser'] = 'Selecionar o utilizador {$a}';
$string['selectusersforconsent'] = 'Selecionar utilizadores para dar consentimento em seu nome';
$string['settodraft'] = 'Criar um novo rascunho';
$string['status'] = 'Estado da política';
$string['status0'] = 'Rascunho';
$string['status1'] = 'Ativo';
$string['status2'] = 'Inativo';
$string['statusinfo'] = 'Uma política com estado \'Ativa\' exigirá o consentimento dos utilizadores na primeira vez que se autenticarem, ou, no caso de utilizadores existentes, na próxima autenticação.';
$string['steppolicies'] = 'Política número {$a->numpolicy} de um total de {$a->totalpolicies}';
$string['useracceptancecount'] = '{$a->agreedcount} de {$a->userscount} ({$a->percent}%)';
$string['useracceptancecountna'] = 'N/A';
$string['useracceptances'] = 'Consentimentos dos uitilizadores';
$string['userpolicysettings'] = 'Políticas';
$string['usersaccepted'] = 'Consentimentos';
$string['viewarchived'] = 'Ver versões anteriores';
$string['viewconsentpageforuser'] = 'A visualizar esta página em nome de {$a}';
