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
 * Strings for component 'simplecertificate', language 'pt', version '4.1'.
 *
 * @package     simplecertificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allusers'] = 'Todos os utilizadores';
$string['awardedsubject'] = 'Notificação de certificado concedido: {$a->certificate} foi emitido para {$a->student}';
$string['awardedto'] = 'Concedido a';
$string['bulkaction'] = 'Escolha um Processamento em Grupo';
$string['bulkbuttonlabel'] = 'Executar';
$string['bulkview'] = 'Processamento em grupo';
$string['cantdeleteissue'] = 'Erro ao remover certificados emitidos';
$string['cantissue'] = 'O certificado não pode ser emitido porque o utilizador não cumpriu as condições da atividade';
$string['certificatecopy'] = 'CÓPIA';
$string['certificateimage'] = 'Ficheiro da imagem do Certificado';
$string['certificateimage_help'] = 'Esta é a imagem que vai ser utilizada no certificado';
$string['certificatename'] = 'Nome do Certificado';
$string['certificatename_help'] = 'Nome do Certificado';
$string['certificatenot'] = 'Instância de Certificado Simples não encontrada';
$string['certificatetext'] = 'Texto do certificado';
$string['certificatetext_help'] = 'Texto que será utilizado no rosto e verso do certificado. Algumas palavras especiais serão substituídas por variáveis tais como: o nome da disciplina, o nome do aluno, a avaliação, ...<br/>
São:
<ul>
<li>{USERNAME} -> Nome completo do utilizador</li>
<li>{COURSENAME} -> Nome completo da disciplina (ou nome alternativo que tenha sido definido)</li>
<li>{GRADE} -> Avaliação formatada</li>
<li>{DATE} -> Data Formatada</li>
<li>{OUTCOME} -> Competências</li>
<li>{TEACHERS} -> Lista dos professores</li>
<li>{IDNUMBER} -> Número de identificação do utilizador</li>
<li>{FIRSTNAME} -> Nome de utilizador</li>
<li>{LASTNAME} -> Apelido</li>
<li>{EMAIL} ->E-mail</li>
<li>{ICQ} - > ICQ</li>
<li>{SKYPE} -> Skype</li>
<li>{YAHOO} -> Messenger YAHOO</li>
<li>{AIM} -> AIM</li>
<li>{MSN} -> MSN</li>
<li>{PHONE1} -> 1º número  de telefone</li>
<li>{PHONE2} -> 2° número de telefone</li>
<li>{INSTITUTION} -> Instituição</li>
<li>{DEPARTMENT} ->Departamento</li>
<li>{ADDRESS} -> Morada</li>
<li>{CITY} -> Cidade</li>
<li>{COUNTRY} -> País</li>
<li>{URL} -> Página principal do utilizador</li>
<li>{CERTIFICATECODE} -> Texto do código único do certificado</li> <li>{USERROLENAME} -> Papel do utilizador na disciplina</li>
<li>{TIMESTART} -> Data de inscrição inicial na disciplina</li>
<li>{USERIMAGE} -> Imagem de perfil do utilizador</li>
<li>{USERRESULTS} -> Resultados do utilizador (avaliação) em outras atividades da disciplina</li>
<li>{PROFILE_xxxx} -> Campos personalizados do perfil</li>
</ul>
Para utilizar campos personalizados deve usar o prefixo "PROFILE_", por exemplo: se criou um campo personalizado no perfil com nome abreviado de "Aniversário", para que seja usado no certificado deve usar {PROFILE_Aniversário}. O texto pode ser em HTML básico, com fontes básicas e tabelas, mas deve evitar qualquer definição de posição.';
$string['certificatetextx'] = 'Posição horizontal do texto do certificado';
$string['certificatetexty'] = 'Posição vertical do texto do certificado';
$string['certificateverification'] = 'Verificação do certificado';
$string['certlifetime'] = 'Manter os certificados emitidos por (meses):';
$string['certlifetime_help'] = 'Especifica o período de tempo pretendido para manter os certificados emitidos. Certificados emitidos com "idade" superior a este período de tempo são excluídos automaticamente.';
$string['code'] = 'Código';
$string['codex'] = 'Posição horizontal do código QR do certificado';
$string['codey'] = 'Posição vertical do código QR do certificado';
$string['completedusers'] = 'Apenas os que cumpram as condições da atividade';
$string['completiondate'] = 'Conclusão da disciplina';
$string['coursegrade'] = 'Nota da disciplina';
$string['coursename'] = 'Nome alternativo da disciplina';
$string['coursename_help'] = 'Nome alternativo da disciplina';
$string['coursenotfound'] = 'Disciplina não encontrada';
$string['coursestartdate'] = 'Data de início da disciplina';
$string['coursetimereq'] = 'Minutos necessários na disciplina';
$string['coursetimereq_help'] = 'Indique aqui o tempo mínimo, em minutos, de participação na disciplina que o aluno deve ter, para estar apto a receber o certificado.';
$string['datefmt'] = 'Formato da data';
$string['datefmt_help'] = 'Digite um formato de data válido em PHP (<a href="http://www.php.net/manual/en/function.strftime.php">Formatos de data</a>). Deixe em branco para usar o formato do idioma escolhido pelo utilizador.';
$string['defaultcertificatetextx'] = 'Posição horizontal padrão do texto';
$string['defaultcertificatetexty'] = 'Posição vertical padrão do texto';
$string['defaultcodex'] = 'Posição horizontal padrão do código QR';
$string['defaultcodey'] = 'Posição vertical padrão do código QR';
$string['defaultheight'] = 'Altura predefinida';
$string['defaultperpage'] = 'Certificados por página';
$string['defaultperpage_help'] = 'Número de certificados a mostrar por página (máximo de 200).';
$string['defaultwidth'] = 'Largura predefinida';
$string['deleteall'] = 'Apagar todos';
$string['deleteselected'] = 'Apagar selecionado(s)';
$string['deletissuedcertificates'] = 'Eliminar certificados emitidos';
$string['delivery'] = 'Entrega';
$string['delivery_help'] = 'Escolha como os alunos podem obter o certificado.
<ul>
<li>Abrir no Browser: Abre o certificado numa nova janela do navegador</li>
<li>Forçar Download: Abre a janela de descarregamento do ficheiro.</li>
<li>Certificado por e-mail: Enviar o certificado para o aluno como um anexo de e-mail.</li>
<li>Depois do utilizador receber o certificado, se clicar na hiperligação do certificado da página principal da disciplina, será possível ver a data em que recebeu o certificado e poderá rever o certificado recebido.</li> </ul>';
$string['designoptions'] = 'Opções de design';
$string['download'] = 'Forçar descarga';
$string['emailcertificate'] = 'E-mail';
$string['emailfrom'] = 'Nome do remetente';
$string['emailfrom_help'] = 'Nome alternativo do remetente';
$string['emailoncompletion'] = 'Enviar e-mail na conclusão da disciplina';
$string['emailothers'] = 'Enviar e-mail a outros';
$string['emailothers_help'] = 'Insira aqui os endereços de e-mail, separados por vírgula, de quem deve ser avisado por e-mail sempre que os alunos recebem um certificado.';
$string['emailsent'] = 'Os e-mails foram enviados';
$string['emailstudentsubject'] = 'Certificado da disciplina {$a->course}';
$string['emailstudenttext'] = 'Olá {$a->username},

Em anexo está o seu certificado da disciplina {$a->course}.


ESTA É UMA MENSAGEM AUTOMÁTICA - POR FAVOR NÃO RESPONDA';
$string['emailteachermail'] = '{$a->student} recebeu o certificado \'{$a->certificate}\' da disciplina {$a->course}.

Pode revê-lo aqui:
{$a->url}';
$string['emailteachermailhtml'] = '{$a->student} recebeu o certificado \'{$a->certificate}\' da disciplina {$a->course}.

Pode revê-lo aqui:

<a href="{$a->url}">Relatório do Certificado</a>.';
$string['emailteachers'] = 'Enviar e-mail aos professores';
$string['emailteachers_help'] = 'Se ativar esta opção, os professores serão avisados por e-mail sempre que os alunos recebem um certificado.';
$string['enablesecondpage'] = 'Ativar verso da página do certificado';
$string['enablesecondpage_help'] = 'Se desativar esta opção, apenas o código QR do certificado será impresso no verso da página (se imprimir código QR estiver ativo).';
$string['eventcertificate_verified'] = 'Certificado verificado';
$string['eventcertificate_verified_description'] = 'O utilizador com id {$a->userid} verificou o certificado com id {$a->certificateid}, emitido ao utilizador com id {$a->certiticate_userid}.';
$string['filenotfound'] = 'Ficheiro não encontrado';
$string['getcertificate'] = 'Obter Certificado';
$string['grade'] = 'Avaliação';
$string['gradefmt'] = 'Formato da avaliação';
$string['gradefmt_help'] = 'Existem três formatos disponíveis de impressão da avaliação no certificado:
<ul>
<li>Percentual: imprime a nota como uma percentagem.</li>
<li>Pontos: imprime o valor da nota.</li>
<li>Escala: imprime a nota percentual como uma letra</li>
</ul>.';
$string['gradeletter'] = 'Nota alfabética';
$string['gradepercent'] = 'Percentagem';
$string['gradepoints'] = 'Pontos';
$string['height'] = 'Altura do certificado';
$string['hours'] = 'horas';
$string['intro'] = 'Introdução';
$string['invalidcode'] = 'Código de certificado inválido';
$string['issued'] = 'Certificados emitidos';
$string['issuedcertificatenotfound'] = 'Certificado emitido não encontrado';
$string['issueddate'] = 'Data de Emissão';
$string['issueddownload'] = 'O certificado emitido [id: {$a}] foi descarregado';
$string['issuedview'] = 'Certificados emitidos';
$string['issueoptions'] = 'Opções de emissão';
$string['keywords'] = 'certificado, disciplina, pdf, moodle';
$string['modulename'] = 'Certificado Simples';
$string['modulename_help'] = 'O módulo de atividade Certificado Simples permite ao professor criar um certificado personalizado que pode ser emitido aos participantes que tenham cumprido os requisitos especificados pelo professor.';
$string['modulenameplural'] = 'Certificados Simples';
$string['multipdf'] = 'Descarregar ficheiro zip com os certificados';
$string['neverdeleteoption'] = 'Nunca apagar';
$string['nocertificatesissued'] = 'Não existem certificados emitidos';
$string['nodelivering'] = 'Sem entrega, utilizadores receberão o certificado por outra via';
$string['notreceived'] = 'Sem certificado emitido';
$string['onepdf'] = 'Descarregar ficheiro pdf com os certificados';
$string['openbrowser'] = 'Abrir numa nova janela';
$string['opendownload'] = 'Clique no botão abaixo para guardar o seu certificado no computador.';
$string['openemail'] = 'Clique no botão abaixo para enviar o seu certificado como anexo de e-mail.';
$string['openwindow'] = 'Clique no botão abaixo para abrir o seu certificado numa nova janela do navegador.';
$string['pluginadministration'] = 'Administração do Certificado';
$string['pluginname'] = 'Certificado Simples';
$string['printdate'] = 'Imprimir data';
$string['printdate_help'] = 'Data que será impressa no certificado, se for selecionada a opção de imprimir data. Se for selecionada a data de conclusão da disciplina, mas o aluno ainda não concluiu a disciplina, será impressa a data de emissão. Também pode optar por imprimir a data em que uma atividade foi avaliada. Se um certificado for emitido antes da atividade ser avaliada, será impressa a data de emissão.';
$string['printgrade'] = 'Imprimir avaliação';
$string['printgrade_help'] = 'Pode selecionar qualquer item de avaliação disponível da pauta da disciplina para imprimir no certificado e será impressa a respetiva nota atribuída ao utilizador. Os itens de avaliação estão listados na mesma ordem em que aparecem na pauta. Escolha abaixo o formato da nota.';
$string['printoutcome'] = 'Imprimir Competência';
$string['printoutcome_help'] = 'Pode escolher qualquer competência da disciplina para imprimir no certificado: o nome da competência e o resultado obtido pelo utilizador. Um exemplo: Atribuição de Competência: Avançado.';
$string['printqrcode'] = 'Imprimir código QR do certificado';
$string['printqrcode_help'] = 'Imprimir (ou não) código QR do certificado.';
$string['qrcodefirstpage'] = 'Imprimir código QR na 1ª página';
$string['qrcodefirstpage_help'] = 'Imprimir código QR na 1.ª página.';
$string['qrcodeposition'] = 'Posição do código QR no certificado';
$string['qrcodeposition_help'] = 'Coordenadas XY (em milímetros) do código QR do certificado.';
$string['receiveddate'] = 'Data de emissão';
$string['report'] = 'Relatório';
$string['requiredtimenotmet'] = 'Deverá participar nesta disciplina, pelo menos {$a->requiredtime} minutos, para que seja emitido este certificado';
$string['secondimage'] = 'Ficheiro da imagem do verso do certificado';
$string['secondimage_help'] = 'Imagem que será utilizada no verso do certificado';
$string['secondpageoptions'] = 'Verso do certificado';
$string['secondpagetext'] = 'Texto do verso do certificado';
$string['secondpagex'] = 'Posição horizontal do texto no verso do certificado';
$string['secondpagey'] = 'Posição vertical do texto no verso do certificado';
$string['secondtextposition'] = 'Posição do texto no verso do certificado';
$string['secondtextposition_help'] = 'Coordenadas XY (em milímetros) do texto no verso do certificado';
$string['sendtoemail'] = 'Enviar e-mail ao utilizador com certificados';
$string['showusers'] = 'Mostrar';
$string['simplecertificate:addinstance'] = 'Adicionar atividade Certificado Simples';
$string['simplecertificate:manage'] = 'Gerir atividade Certificado Simples';
$string['simplecertificate:view'] = 'Ver atividade Certificado Simples';
$string['size'] = 'Tamanho do certificado';
$string['size_help'] = 'Largura e Altura (em milímetros) do certificado. O tamanho predefinido é A4 Paisagem (horizontal).';
$string['standardview'] = 'Testar impressão do certificado';
$string['summaryofattempts'] = 'Resumo dos Certificados obtidos';
$string['textposition'] = 'Posição do texto do certificado';
$string['textposition_help'] = 'Coordenadas XY (em milímetros) do texto do certificado.';
$string['timestartdatefmt'] = 'Formato de data da inscrição inicial';
$string['timestartdatefmt_help'] = 'Insira um formato de data válido em PHP (<a href="http://www.php.net/manual/en/function.strftime.php">Formatos de data</a>). Deixe em branco para usar o formato do idioma escolhido pelo utilizador.';
$string['upgradeerror'] = 'Erro ao atualizar $a';
$string['usercontextnotfound'] = 'Contexto de utilizador não encontrado';
$string['userdateformat'] = 'Formato de data do idioma do utilizador';
$string['usernotfound'] = 'Utilizador não encontrado';
$string['variablesoptions'] = 'Outras opções';
$string['verifycertificate'] = 'Verificar certificado';
$string['viewcertificateviews'] = 'Ver {$a} certificados emitidos';
$string['width'] = 'Largura do certificado';
