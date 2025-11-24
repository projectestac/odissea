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
 * Strings for component 'certificate', language 'pt', version '4.5'.
 *
 * @package     certificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addlinklabel'] = 'Adicionar outra opção de ligação a atividade';
$string['addlinktitle'] = 'Clique para adicionar outra opção de ligação a atividade';
$string['areaintro'] = 'Descrição do certificado';
$string['awarded'] = 'Concedido';
$string['awardedto'] = 'Concedido a';
$string['back'] = 'Voltar';
$string['border'] = 'Limite';
$string['borderblack'] = 'Preto';
$string['borderblue'] = 'Azul';
$string['borderbrown'] = 'Castanho';
$string['bordercolor'] = 'Cor da linha do limite';
$string['bordercolor_help'] = 'Uma vez que as imagens podem aumentar significativamente o tamanho do ficheiro pdf, pode optar por imprimir limites com linha em vez de usar limites com imagem (certifique-se que a opção \'Imagem do limite\' está configurada com \'Não\').  A opção irá imprimir um limite composto por 3 linhas com diferentes espessuras na cor selecionada.';
$string['bordergreen'] = 'Verde';
$string['borderlines'] = 'Linhas';
$string['borderstyle'] = 'Imagem do limite';
$string['borderstyle_help'] = 'Permite escolher uma imagem da pasta \'certificate/pix/borders\'. Selecione a imagem que pretende para definir os limites do certificado ou selecione \'Não\'.';
$string['certificate'] = 'Verificação de código do certificado:';
$string['certificate:addinstance'] = 'Adicionar nova instância de certificado';
$string['certificate:manage'] = 'Gerir instância de certificado';
$string['certificate:printteacher'] = 'Ser listado como professor no certificado, se a definição de imprimir professor estiver ativa';
$string['certificate:student'] = 'Recuperar um certificado';
$string['certificate:view'] = 'Ver um certificado';
$string['certificatename'] = 'Nome do certificado';
$string['certificatereport'] = 'Relatório de certificados';
$string['certificatesfor'] = 'Certificado para';
$string['certificatetype'] = 'Tipo de certificado';
$string['certificatetype_help'] = 'Selecione aqui o formato do certificado. A pasta dos tipos de certificado inclui quatro certificados predefinidos:
A4 com tipos de letra incorporadas
A4 sem tipos de letra incorporadas
Letter com tipos de letra incorporadas
Letter sem tipos de letra incorporadas

Os formatos sem fontes incorporadas usam os tipos de letra Helvetica e Times. Se tem conhecimento que os seus utilizadores não têm estes tipos de letra nos seus computadores, ou se o seu idioma usa caracteres ou símbolos que não constam nos tipos de letra Helvetica e Times, escolha um formato com tipos de letra incorporadas. Os tipos com tipos de letra incorporadas usam os tipos de letra Dejavusans e Dejavuserif. O ficheiro pdf resultante será significativamente maior, por isso, não é recomendado usar um formato com tipos de letra incorporadas exceto nos casos referidos anteriormente.

Podem ser adicionados novos formatos de certificado na pasta certificate/type. O nome da pasta e as strings do idioma para o novo tipo deverão ser adicionadas ao ficheiro de idioma do certificado.';
$string['certify'] = 'Serve para certificar que';
$string['code'] = 'Código';
$string['completiondate'] = 'Conclusão da disciplina';
$string['course'] = 'Para';
$string['coursegrade'] = 'Avaliação obtida na disciplina';
$string['coursename'] = 'Disciplina';
$string['coursetimereq'] = 'Minutos requeridos na disciplina';
$string['coursetimereq_help'] = 'Indique aqui o tempo mínimo, em minutos, que um aluno deve estar ligado na disciplina para estar apto para receber o certificado.';
$string['credithours'] = 'Horas de crédito';
$string['customtext'] = 'Texto personalizado';
$string['customtext_help'] = 'Se pretende que o certificado inclua nomes de professores diferentes daqueles que têm o papel de professor atribuído, não selecione Incluir Professor ou qualquer imagem com assinatura, exceto para a imagem da linha. Introduza o nome dos professores nesta caixa de texto pela ordem que pretende que apareçam no certificado. Por predefinição este texto é posicionado na parte inferior esquerda do certificado. As seguintes tags html podem ser usadas: &lt;br&gt;, &lt;p&gt;, &lt;b&gt;, &lt;i&gt;, &lt;u&gt;, &lt;img&gt; (src e width (ou height) são obrigatórias), &lt;a&gt; (href é obrigatória), &lt;font&gt; (atributos possíveis: color, (código hex da cor), face, (arial, times, courier, helvetica, symbol)).';
$string['date'] = 'Em';
$string['datefmt'] = 'Formato da data';
$string['datefmt_help'] = 'Selecione o formato de data para imprimir a data no certificado ou selecione a última opção para que a data use o formato do idioma do utilizador.';
$string['datehelp'] = 'Data';
$string['deletissuedcertificates'] = 'Apagar certificados emitidos';
$string['delivery'] = 'Entrega';
$string['delivery_help'] = 'Selecione de que forma pretende que os alunos obtenham o seu certificado.
Abrir no Navegador: Abrir o certificado numa nova janela.<br>
Forçar descarga: Abrir a janela de descarga de ficheiro do navegador.
Certificado por e-mail: Enviar ao aluno um e-mail com o certificado em anexo.
Após o utilizador receber o seu certificado, se ele clicar na hiperligação do certificado a partir da página principal da disciplina, verá a data de atribuição do mesmo e poderá revê-lo.';
$string['designoptions'] = 'Opções da estrutura';
$string['download'] = 'Forçar descarga';
$string['emailcertificate'] = 'E-mail';
$string['emailothers'] = 'Enviar e-mail a outros';
$string['emailothers_help'] = 'Indique aqui os endereços de e-mail, separados por vírgulas, de quem deve ser alertado quando são atribuídos certificados a alunos.';
$string['emailstudenttext'] = 'Em anexo segue o certificado da disciplina {$a->course}.';
$string['emailteachermail'] = '{$a->student} recebeu o certificado \'{$a->certificate}\' da disciplina {$a->course}.

Pode revê-lo aqui:
{$a->url}';
$string['emailteachermailhtml'] = '{$a->student} recebeu o certificado: \'{$a->certificate}\' da disciplina {$a->course}.

Pode revê-lo aqui:

<a href="{$a->url}">Relatório do Certificado</a>.';
$string['emailteachers'] = 'Enviar e-mail aos professores';
$string['emailteachers_help'] = 'Se ativar esta opção, os professores serão alertados através de e-mail sempre que forem atribuídos certificados aos alunos';
$string['entercode'] = 'Indique o código do certificado a verificar:';
$string['fontsans'] = 'Família de tipos de letra sans-serif';
$string['fontsans_desc'] = 'Família de tipos de letra \'sans-serif\' para certificados com fontes incorporadas';
$string['fontserif'] = 'Família de tipos de letra serif';
$string['fontserif_desc'] = 'Família de tipos de letra \'serif\' para certificados com fontes incorporadas';
$string['getcertificate'] = 'Obter certificado';
$string['grade'] = 'Avaliação';
$string['gradedate'] = 'Data da avaliação';
$string['gradefmt'] = 'Formato da avaliação';
$string['gradefmt_help'] = 'Existem três formatos disponíveis de impressão da avaliação no certificado:

Percentual: imprime a nota como uma percentagem.
Pontos: imprime o valor da nota.
Escala: imprime a nota percentual como uma letra.';
$string['gradeletter'] = 'Nota alfabética';
$string['gradepercent'] = 'Percentagem';
$string['gradepoints'] = 'Pontos';
$string['imagetype'] = 'Tipo de imagem';
$string['incompletemessage'] = 'Para descarregar o certificado, deve primeiro concluir todas as atividades exigidas. Volte à disciplina para concluir a atividade.';
$string['intro'] = 'Descrição';
$string['issued'] = 'Certificados emitidos';
$string['issueddate'] = 'Data de emissão';
$string['issueoptions'] = 'Opções de emissão';
$string['landscape'] = 'Paisagem';
$string['lastviewed'] = 'Recebeu pela última vez este certificado em:';
$string['letter'] = 'Letra';
$string['lockingoptions'] = 'Opções de bloqueio';
$string['modulename'] = 'Certificado';
$string['modulename_help'] = 'Este módulo permite gerar dinamicamente certificados com base em condições pré-definidas pelo professor.';
$string['modulename_link'] = 'Certificate_module';
$string['modulenameplural'] = 'Certificados';
$string['mycertificates'] = 'Meus certificados';
$string['nocertificates'] = 'Não existem certificados';
$string['nocertificatesissued'] = 'Não existem certificados emitidos';
$string['nocertificatesreceived'] = 'não recebeu qualquer certificado de disciplina.';
$string['nofileselected'] = 'Tem de  escolher um ficheiro para carregar!';
$string['nogrades'] = 'Não existem avaliações';
$string['notapplicable'] = 'N/D';
$string['notfound'] = 'O número do certificado não pôde ser validado.';
$string['notissued'] = 'Não emitidos';
$string['notissuedyet'] = 'Ainda não emitidos';
$string['notreceived'] = 'Não recebeu este certificado';
$string['openbrowser'] = 'Abrir numa nova janela';
$string['opendownload'] = 'Clique no botão abaixo para guardar o certificado no seu computador.';
$string['openemail'] = 'Clique no botão abaixo para enviar o certificado como anexo num e-mail.';
$string['openwindow'] = 'Clique no botão abaixo para abrir o seu certificado numa nova janela do navegador.';
$string['or'] = 'Ou';
$string['orientation'] = 'Orientação';
$string['orientation_help'] = 'Escolha a orientação do certificado: retrato ou paisagem.';
$string['pluginadministration'] = 'Administração do Certificado';
$string['pluginname'] = 'Certificado';
$string['portrait'] = 'Retrato';
$string['printdate'] = 'Data de impressão';
$string['printdate_help'] = 'Esta é a data que será impressa no certificado, se a impressão da data está ativa. Se selecionar a data de conclusão da disciplina mas o aluno não a concluiu, então será impressa a data de emissão do certificado. Pode optar por imprimir a data em que uma determinada atividade foi avaliada. Se o certificado for emitido mas aquela atividade ainda não tiver avaliação, será impressa a data de emissão.';
$string['printerfriendly'] = 'Versão de impressão';
$string['printgrade'] = 'Imprimir avaliação';
$string['printgrade_help'] = 'Pode selecionar quaisquer itens avaliados disponíveis na pauta da disciplina para os imprimir no certificado. Os itens serão apresentados pela ordem que aparecem na pauta. Selecione o formato da nota abaixo.';
$string['printhours'] = 'Imprimir horas de crédito';
$string['printhours_help'] = 'Digite o número de horas de crédito a ser impresso no certificado.';
$string['printnumber'] = 'Imprimir código';
$string['printnumber_help'] = 'Pode ser impresso no certificado um código único composto por 10 letras ou números aleatórios. Este código pode depois ser verificado por comparação com o código exigido no relatório de certificados.';
$string['printoutcome'] = 'Imprimir resultado';
$string['printoutcome_help'] = 'Pode selecionar qualquer resultado da disciplina e imprimir a designação do resultado e o resultado obtido pelo utilizador no certificado. Um exemplo pode ser: Resultado do trabalho: Proficiente.';
$string['printseal'] = 'Selo ou logótipo';
$string['printseal_help'] = 'Esta opção permite selecionar um selo ou logótipo da pasta \'certificate/pix/seals\' para imprimir no certificado. Por predefinição, esta imagem é posicionada no lado inferior direito do certificado.';
$string['printsignature'] = 'Imagem da assinatura';
$string['printsignature_help'] = 'Esta opção permite imprimir uma imagem de assinatura da pasta \'certificate/pix/signatures\'. Pode imprimir uma representação gráfica de uma assinatura, ou imprimir uma linha para uma assinatura manual. Por predefinição, esta imagem é posicionada no lado inferior esquerdo do certificado.';
$string['printteacher'] = 'Imprimir nome do(s) professor(es)';
$string['printteacher_help'] = 'Para imprimir o nome do professor no certificado, atribua o papel de professor no contexto do módulo. Faça esta atribuição se, por exemplo, existe mais de um professor na disciplina ou existe mais do que um certificado na disciplina e pretende imprimir nomes de professores diferentes em cada certificado. Clique para editar o certificado e, a seguir, clique no separador "Papéis atribuídos localmente". Em seguida, atribua o papel de Professor (professor editor) ao certificado (não PRECISA de ser um professor na disciplina - pode atribuir esse papel a qualquer utilizador). Esses nomes serão impressos no certificado de professor.';
$string['printwmark'] = 'Imagem da marca d\'água';
$string['printwmark_help'] = 'Pode adicionar uma imagem de marca de água ao fundo do certificado. Uma marca de água é uma imagem esbatida. Pode ser um logótipo, selo, texto ou o que pretender usar como imagem de fundo.';
$string['receivedcerts'] = 'Certificados recebidos';
$string['receiveddate'] = 'Data de recebimento';
$string['reissuecert'] = 'Reemitir certificados';
$string['reissuecert_help'] = 'Se escolher \'Sim\', este certificado será reemitido com uma nova data, nota e número de código, cada vez que um utilizador clicar na hiperligação do certificado. Observação: embora a tabela mostre as datas de recebimento anteriores, nenhum botão de revisão estará disponível para os utilizadores. Apenas o último certificado emitido aparecerá no relatório do certificado.';
$string['removecert'] = 'Eliminados os certificados emitidos';
$string['report'] = 'Relatório';
$string['reportcert'] = 'Relatório de certificados';
$string['reportcert_help'] = 'Se escolher Sim, a data de atribuição do certificado, o código e o nome da disciplina serão mostrados nos relatórios de certificado dos utilizadores. Se optar por imprimir uma avaliação no certificado, essa avaliação surgirá no relatório de certificado.';
$string['requiredtimenotmet'] = 'Tem de despender pelo menos {$a->requiredtime} minutos para poder aceder a este certificado';
$string['requiredtimenotvalid'] = 'O tempo exigido deve ser um número válido e superior a 0';
$string['reviewcertificate'] = 'Rever o seu certificado';
$string['savecert'] = 'Guardar certificados';
$string['savecert_help'] = 'Se escolher esta opção será guardada uma cópia em pdf de cada certificado dos alunos nos ficheiros da disciplina, dentro de uma pasta específica para cada certificado. Será exibida no relatório de certificados uma hiperligação para cada certificado guardado.';
$string['seal'] = 'Selo';
$string['sigline'] = 'linha';
$string['signature'] = 'Assinatura';
$string['statement'] = 'concluiu a disciplina';
$string['summaryofattempts'] = 'Resumo dos certificados recebidos';
$string['textoptions'] = 'Opções do texto';
$string['title'] = 'CERTIFICADO de APROVEITAMENTO';
$string['to'] = 'Atribuído a';
$string['typeA4_embedded'] = 'Tamanho A4 com fontes incorporadas';
$string['typeA4_non_embedded'] = 'Tamanho A4 sem fontes incorporadas';
$string['typeletter_embedded'] = 'Tamanho Letter com fontes incorporadas';
$string['typeletter_non_embedded'] = 'Tamanho Letter sem fontes incorporadas';
$string['unsupportedfiletype'] = 'O ficheiro tem de ser do tipo \'jpeg\' ou \'png\'';
$string['uploadimage'] = 'Carregar imagem';
$string['uploadimagedesc'] = 'Este botão dá acesso a outro ecrã onde poderá carregar imagens.';
$string['userdateformat'] = 'Formato de data do idioma do utilizador';
$string['validate'] = 'Verificar';
$string['verifycertificate'] = 'Verificar Certificado';
$string['viewcertificateviews'] = 'Ver {$a} certificados emitidos';
$string['viewed'] = 'Foi-lhe atribuído este certificado em:';
$string['viewtranscript'] = 'Ver certificados';
$string['watermark'] = 'Marca de água';
