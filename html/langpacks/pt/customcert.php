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
 * Strings for component 'customcert', language 'pt', version '3.11'.
 *
 * @package     customcert
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity'] = 'Atividade';
$string['addcertpage'] = 'Adicionar página';
$string['addelement'] = 'Adicionar elemento';
$string['awardedto'] = 'Concedido a';
$string['cannotverifyallcertificates'] = 'Não tem permissão para verificar todos os certificados do site.';
$string['certificate'] = 'Certificado';
$string['code'] = 'Código';
$string['copy'] = 'Cópia';
$string['coursetimereq'] = 'Minutos necessários na disciplina';
$string['coursetimereq_help'] = 'Insira aqui o tempo mínimo, em minutos, que o aluno tem de estar ligado à disciplina antes de poder receber o certificado.';
$string['createtemplate'] = 'Criar modelo';
$string['customcert:addinstance'] = 'Adicionar uma nova instância de Certificado Personalizado';
$string['customcert:manage'] = 'Gerir um Certificado Personalizado';
$string['customcert:manageemailothers'] = 'Gerir configuração de envio de e-mail a outros';
$string['customcert:manageemailstudents'] = 'Gerir configuração de envio de e-mail aos alunos';
$string['customcert:manageemailteachers'] = 'Gerir configuração do envio de e-mail aos professores';
$string['customcert:manageprotection'] = 'Gerir configuração da proteção';
$string['customcert:managerequiredtime'] = 'Gerir configuração do tempo obrigatório';
$string['customcert:manageverifyany'] = 'Gerir configuração da verificação';
$string['customcert:receiveissue'] = 'Receber um certificado';
$string['customcert:verifyallcertificates'] = 'Verificar todos os certificados do site';
$string['customcert:verifycertificate'] = 'Verificar um cerificado';
$string['customcert:view'] = 'Visualizar um certificado personalizado';
$string['customcert:viewallcertificates'] = 'Visualizar todos os certificados';
$string['customcert:viewreport'] = 'Ver relatório da disciplina';
$string['customcertsettings'] = 'Configurações personalizadas do certificado';
$string['deletecertpage'] = 'Eliminar página';
$string['deleteconfirm'] = 'Confirmação da eliminação';
$string['deleteelement'] = 'Eliminar elemento';
$string['deleteelementconfirm'] = 'Tem a certeza de que pretende apagar este elemento?';
$string['deleteissueconfirm'] = 'Tem a certeza de que pretende apagar esta emissão do certificado?';
$string['deleteissuedcertificates'] = 'Apagar certificados emitidos';
$string['deletepageconfirm'] = 'Tem a certeza de que pretende apagar esta página do certificado?';
$string['deletetemplateconfirm'] = 'Tem a certeza de que pretende apagar este modelo de certificado?';
$string['deliveryoptiondownload'] = 'Enviar para o navegador e forçar a descarga do ficheiro';
$string['deliveryoptioninline'] = 'Enviar para abrir com o navegador';
$string['deliveryoptions'] = 'Opções de entrega';
$string['description'] = 'Descrição';
$string['duplicate'] = 'Duplicar';
$string['duplicateconfirm'] = 'Confirmar duplicação';
$string['duplicatetemplateconfirm'] = 'Tem a certeza de que pretende duplicar este modelo de certificado?';
$string['editcustomcert'] = 'Editar o certificado';
$string['editelement'] = 'Editar elemento';
$string['edittemplate'] = 'Editar modelo';
$string['elementname'] = 'Nome do elemento';
$string['elementname_help'] = 'Este será o nome usado para identificar este elemento ao editar um certificado personalizado. Por exemplo, pode ter várias imagens numa página e deseja distinguir rapidamente as imagens ao editar o certificado. Nota: Este nome não será exibido no PDF.';
$string['elementplugins'] = 'Elementos do módulo';
$string['elements'] = 'Elementos';
$string['elements_help'] = 'Esta é a lista de elementos que serão mostrados no certificado.

Nota: Os elementos são processados por esta ordem. A ordem pode ser alterada usando as setas ao lado de cada elemento.';
$string['elementwidth'] = 'Largura';
$string['elementwidth_help'] = 'Especifique a largura do elemento - \'0\' significa que não há restrição de largura.';
$string['emailnonstudentbody'] = 'Em anexo está o certificado \'{$a->certificatename}\' de \'{$a->userfullname}\' referente à disciplina \'{$a->coursefullname}\'.';
$string['emailnonstudentbodyplaintext'] = 'Em anexo está o certificado \'{$a->certificatename}\' de \'{$a->userfullname}\' referente à disciplina \'{$a->coursefullname}\'.';
$string['emailnonstudentcertificatelinktext'] = 'Ver relatório do certificado';
$string['emailnonstudentgreeting'] = 'Olá';
$string['emailnonstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailothers'] = 'Enviar e-mail a outros';
$string['emailothers_help'] = 'Se ativar esta opção, será enviado aos endereços de e-mail listados aqui (separados por vírgula) uma cópia do certificado quando estiver disponível. <strong>Aviso</strong>: Se definir este campo, antes de finalizar a criação do certificado, enviará aos endereços especificados um certificado incompleto.';
$string['emailstudentbody'] = 'Em anexo está o seu certificado \'{$a->certificatename}\' referente à disciplina \'{$a->coursefullname}\'.';
$string['emailstudentbodyplaintext'] = 'Em anexo está o seu certificado \'{$a->certificatename}\' referente à disciplina \'{$a->coursefullname}\'.';
$string['emailstudentcertificatelinktext'] = 'Ver o certificado';
$string['emailstudentgreeting'] = 'Olá {$a}';
$string['emailstudents'] = 'Enviar e-mail aos alunos';
$string['emailstudents_help'] = 'Se ativar esta opção, será enviado aos alunos uma cópia do certificado, por e-mail, quando estiver disponível. <strong>Aviso</strong>: Se definir como \'Sim\', antes de finalizar a criação do certificado, enviará aos alunos um certificado incompleto.';
$string['emailstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailteachers'] = 'Enviar e-mail aos professores';
$string['emailteachers_help'] = 'Se ativar esta opção, será enviado aos professores por e-mail uma cópia do certificado quando estiver disponível.  <strong>Aviso</strong>: Se definir como \'Sim\', antes de finalizar a criação do certificado, enviará aos professores um certificado incompleto.';
$string['exampledatawarning'] = 'Alguns destes valores servem apenas de exemplo para garantir que é possível o posicionamento dos elementos.';
$string['font'] = 'Tipo de letra';
$string['font_help'] = 'O tipo de letra usado ao gerar este elemento.';
$string['fontcolour'] = 'Cor';
$string['fontcolour_help'] = 'A cor do tipo de letra';
$string['fontsize'] = 'Tamanho';
$string['fontsize_help'] = 'O tamanho do tipo de fonte (em pontos).';
$string['getcustomcert'] = 'Visualizar o certificado';
$string['gradeoutcome'] = 'Competência';
$string['height'] = 'Altura';
$string['height_help'] = 'Altura do certificado PDF em mm. Para referência, uma folha A4 tem 297 mm de altura e o tamanho Letter tem 279 mm de altura.';
$string['invalidcode'] = 'Código fornecido inválido';
$string['invalidcolour'] = 'Cor escolhida inválida, insira um nome de cor HTML válido ou uma cor hexadecimal de seis ou três dígitos.';
$string['invalidelementwidth'] = 'Digite um número positivo.';
$string['invalidheight'] = 'A altura tem de ser um número válido maior que 0.';
$string['invalidmargin'] = 'A margem tem de ser um número válido maior que 0.';
$string['invalidposition'] = 'Selecione um número positivo para a posição {$a}.';
$string['invalidwidth'] = 'A largura tem de ser um número válido maior que 0.';
$string['landscape'] = 'Paisagem';
$string['leftmargin'] = 'Margem esquerda';
$string['leftmargin_help'] = 'Tamanho da margem esquerda do certificado PDF (em mm).';
$string['listofissues'] = 'Destinatários: {$a}';
$string['load'] = 'Carregar';
$string['loadtemplate'] = 'Carregar modelo';
$string['loadtemplatemsg'] = 'Tem a certeza que pretende carregar este modelo? Isto removerá quaisquer páginas e elementos existentes neste certificado.';
$string['managetemplates'] = 'Gerir modelos de certificados';
$string['managetemplatesdesc'] = 'Esta hiperligação abre uma nova janela onde pode gerir os modelos usados por atividades de Certificado Personalizado nas disciplinas.';
$string['modify'] = 'Modificar';
$string['modulename'] = 'Certificado Personalizado';
$string['modulename_help'] = 'Este módulo permite criar dinamicamente certificados PDF.';
$string['modulenameplural'] = 'Certificados Personalizados';
$string['mycertificates'] = 'Os meus certificados';
$string['mycertificatesdescription'] = 'Certificados emitidos em seu nome e enviados por e-mail ou descarregados manualmente.';
$string['name'] = 'Nome';
$string['nametoolong'] = 'Excedeu o comprimento máximo permitido para o nome';
$string['nocustomcerts'] = 'Não existem certificados nesta disciplina';
$string['noimage'] = 'Sem imagens';
$string['norecipients'] = 'Nenhum destinatário';
$string['notemplates'] = 'Sem modelos';
$string['notissued'] = 'Não concedido';
$string['notverified'] = 'Não verificado';
$string['options'] = 'Opções';
$string['page'] = 'Página {$a}';
$string['pluginadministration'] = 'Administração do Certificado Personalizado';
$string['pluginname'] = 'Certificado Personalizado';
$string['portrait'] = 'Retrato';
$string['posx'] = 'Posição X';
$string['posx_help'] = 'Posição em mm a partir do canto superior esquerdo onde pretende localizar o ponto de referência do elemento na direção x.';
$string['posy'] = 'Posição Y';
$string['posy_help'] = 'Posição em mm a partir do canto superior esquerdo onde pretende localizar o ponto de referência do elemento na direção y.';
$string['preventcopy'] = 'Impedir cópia';
$string['preventcopy_desc'] = 'Ativar proteção para impedir a cópia.';
$string['preventmodify'] = 'Impedir modificação';
$string['preventmodify_desc'] = 'Ativar proteção para impedir a modificação.';
$string['preventprint'] = 'Impedir impressão';
$string['preventprint_desc'] = 'Ativar proteção para impedir a impressão.';
$string['print'] = 'Imprimir';
$string['privacy:metadata:customcert_issues'] = 'Lista de certificados emitidos';
$string['privacy:metadata:customcert_issues:code'] = 'Código do certificado';
$string['privacy:metadata:customcert_issues:customcertid'] = 'ID do certificado';
$string['privacy:metadata:customcert_issues:emailed'] = 'Se o certificado foi ou não enviado por e-mail';
$string['privacy:metadata:customcert_issues:timecreated'] = 'Data/hora de emissão do certificado';
$string['privacy:metadata:customcert_issues:userid'] = 'ID do utilizador que recebeu o certificado';
$string['rearrangeelements'] = 'Reposicionar os elementos';
$string['rearrangeelementsheading'] = 'Arrastar e largar os elementos para alterar o posicionamento no certificado.';
$string['receiveddate'] = 'Concedido em';
$string['refpoint'] = 'Localização do ponto de referência';
$string['refpoint_help'] = 'O ponto de referência é a localização de um elemento a partir do qual as suas coordenadas x e y são determinadas. É indicado pela \'+\' que aparece no centro ou cantos do elemento.';
$string['replacetemplate'] = 'Substituir';
$string['requiredtimenotmet'] = 'Tem de despender pelo menos {$a->requiredtime} minutos na disciplina antes de poder aceder a este certificado.';
$string['rightmargin'] = 'Margem direita';
$string['rightmargin_help'] = 'Tamanho da margem esquerda do certificado PDF (em mm).';
$string['save'] = 'Guardar';
$string['saveandclose'] = 'Guardar e fechar';
$string['saveandcontinue'] = 'Guardar e continuar';
$string['savechangespreview'] = 'Guardar alterações e pré-visualizar';
$string['savetemplate'] = 'Guardar modelo';
$string['search:activity'] = 'Certificado Personalizado - informações da atividade';
$string['setprotection'] = 'Definir proteção';
$string['setprotection_help'] = 'Escolha as ações que pretende impedir que os utilizadores executem neste certificado.';
$string['showposxy'] = 'Mostrar posição X e Y';
$string['showposxy_desc'] = 'Mostra a posição X e Y na edição de um elemento, o que permite ao utilizador especificar o local com precisão.

Não é necessário caso pretenda usar apenas a interface de arrastar e largar.';
$string['taskemailcertificate'] = 'Gerir e-mail dos certificados';
$string['templatename'] = 'Nome do modelo';
$string['templatenameexists'] = 'O nome do modelo já está a ser usado. Por favor, escolha outro nome.';
$string['topcenter'] = 'Centro';
$string['topleft'] = 'Superior esquerda';
$string['topright'] = 'Superior direita';
$string['type'] = 'Tipo';
$string['uploadimage'] = 'Carregar imagem';
$string['uploadimagedesc'] = 'Esta hiperligação abre uma nova janela onde pode carregar imagens.
As imagens carregadas por este método estarão disponíveis em todo o site para todos os utilizadores capazes de criar um Certificado Personalizado.';
$string['verified'] = 'Verificado';
$string['verify'] = 'Verificar';
$string['verifyallcertificates'] = 'Permitir a verificação de todos os certificados';
$string['verifyallcertificates_desc'] = 'Quando esta configuração está ativada, qualquer pessoa (incluindo utilizadores não autenticados) pode visitar a hiperligação \'{$a}\' para verificar qualquer certificado no site, em vez de ter que aceder à hiperligação de verificação para cada certificado.

Nota: Aplica-se apenas aos certificados em que "Permitir que alguém verifique o certificado" nas configurações do certificado está definido como "Sim".';
$string['verifycertificate'] = 'Verificar certificado';
$string['verifycertificateanyone'] = 'Permitir que alguém verifique o certificado';
$string['verifycertificateanyone_help'] = 'Esta configuração permite que qualquer pessoa verifique um certificado se tiver o endereço de verificação do certificado (incluindo utilizadores não autenticados).';
$string['verifycertificatedesc'] = 'Esta hiperligação abre uma nova janela onde poderá verificar certificados no site';
$string['width'] = 'Largura';
$string['width_help'] = 'Largura do certificado PDF em mm. Para referência, uma folha A4 tem 210 mm de largura e o tamanho Letter tem 216 mm de largura.';
