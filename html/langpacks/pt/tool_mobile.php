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
 * Strings for component 'tool_mobile', language 'pt', version '3.11'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'A depuração ADOdb está ativada. Deve ser desativada na autenticação em bases de dados externas ou nas configurações dos módulos de inscrição em base de dados externas.';
$string['androidappid'] = 'Identificador exclusivo da aplicação Android';
$string['androidappid_desc'] = 'Esta definição pode ser deixada com o valor predefinido, a menos que tenha uma aplicação Android personalizada.';
$string['apppolicy'] = 'URL da política da Aplicação Móvel Moodle';
$string['apppolicy_help'] = 'URL da política para os utilizadores da Aplicação móvel Moodle, listada na página Acerca da aplicação. Se o campo ficar em branco, será usado o URL da política do site.';
$string['apprequired'] = 'Essa funcionalidade só está disponível quando acede com a Aplicação móvel Moodle para dispositivos móveis ou computadores de secretária.';
$string['autologinkeygenerationlockout'] = 'A geração de chaves de autenticação automática está bloqueada. Tem de esperar 6 minutos entre os pedidos.';
$string['autologinnotallowedtoadmins'] = 'A autenticação automática não é permitida aos administradores do site.';
$string['cachedef_plugininfo'] = 'Armazena a lista de módulos com suplementos móveis';
$string['cachedef_subscriptiondata'] = 'Armazena as informações da subscrição da Aplicação móvel Moodle.';
$string['clickheretolaunchtheapp'] = 'Clique aqui se a aplicação não abrir automaticamente.';
$string['configmobilecssurl'] = 'Um ficheiro CSS para personalizar a interface da sua Aplicação móvel.';
$string['customlangstrings'] = 'Strings de idioma personalizadas';
$string['customlangstrings_desc'] = 'As palavras e as frases mostradas na aplicação podem ser personalizadas aqui. Digite cada string de idioma personalizada numa nova linha no formato: identificador da string, string do idioma personalizada e código do idioma, separados por uma barra vertical. Por exemplo:
<pre>
mm.user.student|Learner|en
mm.user.student|Aluno|pt
</pre>
Consulte a documentação para obter a lista completa dos identificadores de string.';
$string['custommenuitems'] = 'Itens de menu personalizados';
$string['custommenuitems_desc'] = 'Itens adicionais podem ser adicionados ao menu principal da aplicação, especificando-os aqui. Digite cada item de menu personalizado numa nova linha no formato: texto do item, URL, método de abertura da hiperligação e o código do idioma (opcional, para mostrar o item apenas aos utilizadores do idioma especificado), separados por barras verticais.

Os métodos de abertura da hiperligação são: app (para ligação a uma atividade suportada pela aplicação), inappbrowser (para abrir a hiperligação num navegador sem sair da aplicação), navegador (para abrir a hiperligação no navegador predefinido do dispositivo fora da aplicação) e incorporado (para mostrar a hiperligação num iframe de uma nova página na aplicação).

Quando faltar itens de uma tradução para um determinado idioma, os itens usam outros idiomas como alternativa, a menos que seja anexado "_only" ao código do idioma.

Por exemplo:
<pre>
App\'s help | https://someurl.xyz/help | inappbrowser
My grades | https://someurl.xyz/local/mygrades/index.php | embedded | en
As minhas avaliações | https://someurl.xyz/local/mygrades/index.php | incorporado | pt
Este item apenas será visto em inglês | https: //someurl.xyz/english | browser | en_only
</pre>';
$string['darkmode'] = 'Modo escuro';
$string['disabledfeatures'] = 'Desativar funcionalidades';
$string['disabledfeatures_desc'] = 'Selecione as funcionalidades do seu site que pretende desativar na Aplicação móvel. Tenha em atenção que algumas funcionalidades aqui listadas podem já estar desativadas por meio de outras configurações do site. Terá de terminar sessão e voltar a iniciar sessão na aplicação para ver as alterações.';
$string['displayerrorswarning'] = 'Mostrar mensagens de depuração (debugdisplay) está ativado. Deve estar desativado.';
$string['downloadcourse'] = 'Descarregar disciplina';
$string['downloadcourses'] = 'Descarregar disciplinas';
$string['enablesmartappbanners'] = 'Ativar App Banners';
$string['enablesmartappbanners_desc'] = 'Se ativar esta opção, fará aparecer um banner a promover a Aplicação móvel Moodle ao visitar o site no browser do dispositivo móvel.';
$string['filetypeexclusionlist'] = 'Lista de exclusão de tipos de ficheiro';
$string['filetypeexclusionlist_desc'] = 'Selecione todos os tipos de ficheiro que não podem ser usados na Aplicação móvel. Estes ficheiros continuarão listados na disciplina mas se o utilizador tentar abri-los, será mostrado um aviso a indicar que não estão disponíveis para o uso em dispositivos móveis. O utilizador poderá cancelar a ação ou ignorar o aviso e abrir mesmo assim.';
$string['filetypeexclusionlistplaceholder'] = 'Lista de exclusão de tipos de ficheiro da Aplicação móvel';
$string['forcedurlscheme'] = 'Se pretende permitir que apenas a sua Aplicação móvel Moodle Personalizada seja aberta numa janela do navegador, especifique o esquema de URL aqui. Se pretende permitir apenas a Aplicação móvel oficial, defina o valor predefinido. Deixe o campo vazio se pretende permitir qualquer aplicação.';
$string['forcedurlscheme_key'] = 'Esquema de URL';
$string['forcelogout'] = 'Forçar terminar sessão';
$string['forcelogout_desc'] = 'Se ativar esta opção, na aplicação, a opção \'Alterar site\' é substituída por \'Terminar sessão\'. Faz com que o utilizador fique totalmente desligado. O utilizador tem de voltar a digitar a senha na próxima vez que pretender aceder ao site.';
$string['getmoodleonyourmobile'] = 'Obter a Aplicação móvel';
$string['h5poffline'] = 'Visualizar offline conteúdo H5P';
$string['httpsrequired'] = 'HTTPS necessário';
$string['insecurealgorithmwarning'] = 'Parece que o certificado HTTPS usa um algoritmo inseguro para assinar (SHA-1). Tente atualizar o certificado.';
$string['invalidcertificatechainwarning'] = 'Parece que a cadeia de certificados não é válida.';
$string['invalidcertificateexpiredatewarning'] = 'Parece que o certificado HTTPS para o site expirou.';
$string['invalidcertificatestartdatewarning'] = 'Parece que o certificado HTTPS para o site ainda não é válido (com uma data de início no futuro).';
$string['invalidprivatetoken'] = 'Token privado inválido. Token não pode estar vazio ou ser transmitido através do parâmetro GET.';
$string['invaliduserquotawarning'] = 'A quota do utilizador (userquota) está definida para um número inválido. Deve ser alterada para um número válido (número inteiro) nas Configurações de segurança do site.';
$string['iosappid'] = 'Identificador exclusivo da aplicação iOS';
$string['iosappid_desc'] = 'Esta configuração pode ser deixada com o valor predefinido a não que tenha uma aplicação iOS personalizada.';
$string['launchviasiteinbrowser'] = 'Iniciar via site no navegador do sistema';
$string['loginintheapp'] = 'Através da Aplicação móvel';
$string['logininthebrowser'] = 'Através de uma janela do navegador (para módulos SSO)';
$string['loginintheembeddedbrowser'] = 'Através de navegador incorporado (para módulos SSO)';
$string['logoutconfirmation'] = 'Tem a certeza de que pretende sair doa aplicação móvel nos seus dispositivos móveis? Ao sair, será preciso inserir novamente o seu nome de utilizador e senha na aplicação móvel em todos os dispositivos onde a aplicação está instalada.';
$string['mainmenu'] = 'Menu principal';
$string['managefiletypes'] = 'Gerir tipos de ficheiro';
$string['minimumversion'] = 'Se for especificada uma versão da aplicação (3.8.0 ou superior), todos os utilizadores que usam uma versão mais antiga da aplicação serão notificados para atualizarem a aplicação antes de poderem aceder ao site.';
$string['minimumversion_key'] = 'Versão mínima obrigatória da aplicação';
$string['mobileapp'] = 'Aplicação móvel';
$string['mobileappconnected'] = 'Aplicação móvel ligada';
$string['mobileappearance'] = 'Aparência em dispositivos móveis';
$string['mobileappenabled'] = 'Pode aceder a este site com a Aplicação móvel.<br /><a href="{$a}">Descarregue a Aplicação móvel Moodle</a>';
$string['mobileappsubscription'] = 'Subscrição da Aplicação móvel Moodle';
$string['mobileauthentication'] = 'Autenticação em dispositivos móveis';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Funcionalidades da Aplicação móvel';
$string['mobilenotificationsdisabledwarning'] = 'As notificações móveis não estão ativas. Têm de ser ativadas nas configurações de Notificação.';
$string['mobilesettings'] = 'Configurações para dispositivos móveis';
$string['moodleappsportalfeatureswarning'] = 'Tenha em atenção que algumas funcionalidades podem ser limitadas, dependendo da sua subscrição da Aplicação móvel Moodle. Para mais detalhes, consulte o <a href="{$a}" target="_blank">Portal das Aplicações móveis Moodle</a>.';
$string['notifications'] = 'Notificações';
$string['notificationsactivedevices'] = 'Dispositivos ativos';
$string['notificationscurrentactivedevices'] = 'Dispositivos a receber notificações este mês';
$string['notificationsignorednotifications'] = 'Notificações não enviadas';
$string['notificationslimitreached'] = 'O limite mensal de dispositivos de utilizadores ativos foi excedido. As notificações para alguns utilizadores não serão enviadas. Recomenda-se que atualize o seu plano da aplicação no <a href="{$a}" target="_blank">Portal das Aplicações Móveis Moodle</a>.';
$string['notificationsmissingwarning'] = 'Não foi possível obter as estatísticas das notificações da Aplicação móvel Moodle. Provavelmente ocorreu porque as notificações para dispositivos móveis ainda não estão ativadas no site. Para ativar aceda a Administração do Site / Mensagens / Mobile.';
$string['notificationsnewdevices'] = 'Novos dispositivos';
$string['notificationsseemore'] = 'Nota: As estatísticas da utilizar da Aplicação móvel Moodle não são calculadas em tempo real. Para aceder às estatísticas mais detalhadas, incluindo dados de meses anteriores, visite e autentique-se no <a href="{$a}" target="_blank">Portal das Aplicações móveis Moodle</a>.';
$string['notificationssentnotifications'] = 'Notificações enviadas';
$string['oauth2identityproviders'] = 'Fornecedores de identidade OAuth 2';
$string['offlineuse'] = 'Uso Offline';
$string['openusingembeddedbrowser'] = 'Abrir com o navegador incorporado';
$string['pluginname'] = 'Ferramentas da Aplicação móvel Moodle';
$string['pluginnotenabledorconfigured'] = 'Módulo não ativo ou não configurado.';
$string['privacy:metadata:core_userkey'] = 'Chaves de utilizador para criar chave de autenticação automática para o utilizador atual.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'A data do último pedido da chave de autenticação automática. Entre cada pedido, são necessários 6 minutos.';
$string['qrcodedisabled'] = 'Acesso via código QR desativado';
$string['qrcodeformobileappaccess'] = 'Código QR para acesso a aplicações de dispositivos móveis';
$string['qrcodeformobileapploginabout'] = 'Digitalize o código QR com o seu dispositivo móvel e ficará autenticado automaticamente. O código QR é válido durante {$a} minutos.';
$string['qrcodeformobileappurlabout'] = 'Digitalize o código QR com o seu dispositivo móvel para preencher o URL do site.';
$string['qrcodetype'] = 'Acesso por código QR';
$string['qrcodetype_desc'] = 'Pode ser fornecido um código QR aos utilizadores da aplicação móvel Moodle. Pode ser usado para preencher o URL do site, ou se o site for seguro por usar HTTPS, autenticarem-se automaticamente sem ter que inserir o nome de utilizador e a senha.';
$string['qrcodetypelogin'] = 'Código QR com autenticação automática';
$string['qrcodetypeurl'] = 'Código QR com URL do site';
$string['qrsiteadminsnotallowed'] = 'Por motivos de segurança, a autenticação via código QR não é permitida para administradores do site ou se estiver autenticado como outro utilizador.';
$string['readingthisemailgettheapp'] = 'Está a ler esta mensagem num e-mail? <a href="{$a}">Descarregue a Aplicação móvel Moodle</a> e receba notificações no seu dispositivo móvel.';
$string['remoteaddons'] = 'Suplementos remotos';
$string['responsivemainmenuitems'] = 'Itens de menu responsivos';
$string['scanqrcode'] = 'Ler código QR';
$string['selfsignedoruntrustedcertificatewarning'] = 'Parece que o certificado HTTPS está auto-assinado ou não é confiável. A Aplicação móvel só funcionará com sites confiáveis.';
$string['setuplink'] = 'Página de transferência da aplicação';
$string['setuplink_desc'] = 'URL da página com opções para descarregar a Aplicação móvel Moodle da App Store e do Google Play. A hiperligação da página de descarga da aplicação é mostrada no rodapé da página e no perfil do utilizador. Deixe este campo em branco para não mostrar a hiperligação.';
$string['smartappbanners'] = 'Banners da aplicação';
$string['subscription'] = 'Subscrição';
$string['subscriptioncreated'] = 'Data de início';
$string['subscriptionerrorrequest'] = 'Ocorreu um erro inesperado ao tentar recuperar as informações da subscrição da sua Aplicação móvel Moodle.';
$string['subscriptionexpiration'] = 'Data de validade';
$string['subscriptionfeaturenotapplied'] = 'Esta funcionalidade está configurada no seu site, mas não está incluída no seu plano da Aplicação móvel Moodle. Por isso, a configuração não terá efeito.';
$string['subscriptionfeatures'] = 'Funcionalidades da subscrição';
$string['subscriptionlimitsurpassed'] = 'Limite de subscrição excedido';
$string['subscriptionregister'] = 'Para obter detalhes dos vários planos da aplicação e para aceder às estatísticas da utilização da Aplicação móvel Moodle, visite o <a href="{$a}" target="_blank">Portal das Aplicações móveis Moodle</a>.';
$string['subscriptionsseemore'] = 'Nota: As informações exibidas não são atualizadas em tempo real. Pode ser necessário sair e autenticar-se novamente para ver as atualizações. Para obter informações sobre como atualizar o seu plano da aplicação, visite e autentique-se no <a href="{$a}" target="_blank">Portal das Aplicações móveis Moodle</a>.';
$string['typeoflogin'] = 'Tipo de autenticação';
$string['typeoflogin_desc'] = 'Se o site usa um método de autenticação SSO, selecione através de uma janela do navegador ou através de um navegador incorporado. Um navegador incorporado fornece uma melhor experiência ao utilizador, embora não funcione com todos os plugins SSO.';
$string['viewqrcode'] = 'Ver código QR';
