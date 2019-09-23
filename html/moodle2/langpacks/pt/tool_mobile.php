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
 * Strings for component 'tool_mobile', language 'pt', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_mobile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'A depuração ADOdb está ativada. Deve ser desativada na autenticação em bases de dados externas ou nas configurações dos módulos de inscrição em base de dados externas.';
$string['androidappid'] = 'Identificador exclusivo da aplicação Android';
$string['androidappid_desc'] = 'Esta definição pode ser deixada com o valor predefinido, a menos que tenha uma aplicação Android personalizada.';
$string['apppolicy'] = 'URL da política da App Moodle';
$string['apppolicy_help'] = 'URL da política para os utilizadores da Aplicação móvel Moodle, listada na página Acerca da aplicação. Se o campo for deixado em branco, será usado o URL da política do site.';
$string['autologinkeygenerationlockout'] = 'A geração de chaves de autenticação automática está bloqueada. Tem de esperar 6 minutos entre os pedidos.';
$string['autologinnotallowedtoadmins'] = 'A autenticação automática não é permitida aos administradores do site.';
$string['cachedef_plugininfo'] = 'Armazena a lista de módulos com suplementos móveis';
$string['clickheretolaunchtheapp'] = 'Clique aqui se a aplicação não abrir automaticamente.';
$string['configmobilecssurl'] = 'Um ficheiro CSS para personalizar a interface da sua aplicação móvel.';
$string['customlangstrings'] = 'Strings de idioma personalizadas';
$string['customlangstrings_desc'] = 'Palavras e frases mostradas na aplicação podem ser personalizadas aqui. Digite cada string de idioma personalizado numa nova linha no formato: string identifier, custom language string e language code, separados por uma barra vertical. Por exemplo:
<pre>
mm.user.student|Learner|en
mm.user.student|Aluno|pt
</pre>
Para obter uma lista completa de identificadores de string, consulte a documentação.';
$string['custommenuitems'] = 'Itens de menu personalizados';
$string['custommenuitems_desc'] = 'Itens adicionais podem ser adicionados ao menu principal da aplicação, especificando-os aqui. Digite cada item de menu personalizado numa nova linha no formato: texto do item, URL, método de abertura da hiperligação e o código do idioma (opcional, para mostrar o item apenas aos utilizadores do idioma especificado), separados por barras verticais.

Os métodos de abertura da hiperligação são: app (para ligação a uma atividade suportada pela aplicação), inappbrowser (para abrir a hiperligação num navegador sem sair da aplicação), navegador (para abrir a hiperligação no navegador predefinido do dispositivo fora da aplicação) e incorporado (para mostrar a hiperligação num iframe de uma nova página na aplicação).

Por exemplo:
<pre>
App\'s help | https://someurl.xyz/help | inappbrowser
My grades | https://someurl.xyz/local/mygrades/index.php | embedded | en
As minhas avaliações | https://someurl.xyz/local/mygrades/index.php | incorporado | pt
</pre>';
$string['disabledfeatures'] = 'Desativar funcionalidades';
$string['disabledfeatures_desc'] = 'Selecione as funcionalidades do seu site que pretende desativar na aplicação móvel. Tenha em atenção que algumas funcionalidades aqui listadas podem já estar desativadas por meio de outras configurações do site. Terá de terminar sessão e voltar a iniciar sessão na aplicação para ver as alterações.';
$string['displayerrorswarning'] = 'Mostrar mensagens de depuração (debugdisplay) está ativado. Deve ser desativado.';
$string['downloadcourse'] = 'Descarregar disciplina';
$string['downloadcourses'] = 'Descarregar disciplinas';
$string['enablesmartappbanners'] = 'Ativar App Banners';
$string['enablesmartappbanners_desc'] = 'Se ativar esta opção, fará aparecer um banner a promover a Aplicação móvel Moodle ao visitar o site no browser do dispositivo móvel.';
$string['forcedurlscheme'] = 'Se pretende permitir que apenas a sua Aplicação móvel Moodle Personalizada seja aberta numa janela do navegador, especifique o esquema de URL aqui, caso contrário, deixe o campo vazio.';
$string['forcedurlscheme_key'] = 'Esquema de URL';
$string['forcelogout'] = 'Forçar terminar sessão';
$string['forcelogout_desc'] = 'Se ativar esta opção, na aplicação, a opção \'Alterar site\' é substituída por \'Terminar sessão\'. Isso faz com que o utilizador fique totalmente desligado. Deverão voltar a digitar a senha na próxima vez que desejarem aceder ao site.';
$string['getmoodleonyourmobile'] = 'Obter a aplicação móvel';
$string['httpsrequired'] = 'HTTPS necessário';
$string['insecurealgorithmwarning'] = 'Parece que o certificado HTTPS usa um algoritmo inseguro para assinar (SHA-1). Tente atualizar o certificado.';
$string['invalidcertificatechainwarning'] = 'Parece que a cadeia de certificados não é válida.';
$string['invalidcertificateexpiredatewarning'] = 'Parece que o certificado HTTPS para o site expirou.';
$string['invalidcertificatestartdatewarning'] = 'Parece que o certificado HTTPS para o site ainda não é válido (com uma data de início no futuro).';
$string['invalidprivatetoken'] = 'Token privado inválido. Token não pode estar vazio ou ser transmitido através do parâmetro GET.';
$string['invaliduserquotawarning'] = 'A quota do utilizador (userquota) está definida para um número inválido. Deve ser alterada para um número válido (número inteiro) nas Configurações de segurança do site.';
$string['iosappid'] = 'Identificador exclusivo da aplicação iOS';
$string['iosappid_desc'] = 'Esta configuração pode ser deixada com o valor predefinido a não que tenha uma aplicação iOS personalizada.';
$string['loginintheapp'] = 'Através da aplicação móvel';
$string['logininthebrowser'] = 'Através de uma janela do navegador (para módulos SSO)';
$string['loginintheembeddedbrowser'] = 'Através de navegador incorporado (para módulos SSO)';
$string['mainmenu'] = 'Menu principal';
$string['mobileapp'] = 'Aplicação móvel';
$string['mobileappconnected'] = 'Aplicação móvel ligada';
$string['mobileappearance'] = 'Aparência em dispositivos móveis';
$string['mobileappenabled'] = 'Pode aceder a este site com a aplicação móvel.<br /><a href="{$a}">Descarregue a Aplicação móvel Moodle</a>';
$string['mobileauthentication'] = 'Autenticação em dispositivos móveis';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Funcionalidades da aplicacão móvel';
$string['mobilenotificationsdisabledwarning'] = 'As notificações móveis não estão ativas. Têm de ser ativadas em \'Gerir métodos de envio\'.';
$string['mobilesettings'] = 'Configurações para dispositivos móveis';
$string['offlineuse'] = 'Uso Offline';
$string['pluginname'] = 'Ferramentas da Aplicação móvel Moodle';
$string['pluginnotenabledorconfigured'] = 'Módulo não ativo ou não configurado.';
$string['privacy:metadata:core_userkey'] = 'Chaves de utilizador para criar chave de autenticação automática para o utilizador atual.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'A data do último pedido da chave de autenticação automática. Entre cada pedido, são necessários 6 minutos.';
$string['remoteaddons'] = 'Suplementos remotos';
$string['selfsignedoruntrustedcertificatewarning'] = 'Parece que o certificado HTTPS está auto-assinado ou não é confiável. A aplicação móvel só funcionará com sites confiáveis.';
$string['setuplink'] = 'Página de transferência da aplicação';
$string['setuplink_desc'] = 'URL da página com hiperligações para transferência da Aplicação móvel Moodle da App Store e do Google Play.';
$string['smartappbanners'] = 'Banners da aplicação';
$string['typeoflogin'] = 'Tipo de autenticação';
$string['typeoflogin_desc'] = 'Se o site usa um método de autenticação SSO, selecione através de uma janela do navegador ou através de um navegador incorporado. Um navegador incorporado fornece uma melhor experiência ao utilizador, embora não funcione com todos os plugins SSO.';
