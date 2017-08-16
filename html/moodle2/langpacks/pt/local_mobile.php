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
 * Strings for component 'local_mobile', language 'pt', branch 'MOODLE_32_STABLE'
 *
 * @package   local_mobile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowpermissions'] = 'Conceder permissões ao papel de "Utilizador autenticado"';
$string['allowpermissionsdescription'] = 'Edite o papel "Utilizador autenticado" e adicione a permissão moodle/webservice:createtoken';
$string['cannotcreatetoken'] = 'A funcionalidade gerar token automaticamente não está disponível para os administradores do site (estes têm de gerar o token manualmente no site)';
$string['checkpluginconfiguration'] = 'Verifique as configurações do módulo';
$string['clickheretolaunchtheapp'] = 'Clique aqui se a aplicação não abrir automaticamente';
$string['customlangstrings'] = 'Strings personalizadas do idioma';
$string['customlangstrings_desc'] = 'As palavras e frases mostradas na aplicação podem ser personalizadas aqui. Digite em cada nova linha a string personalizada do idioma no formato: identificador da string, string personalizada do idioma e código do idioma, separados por uma barra vertical. Por exemplo:
<pre>
mm.user.student|Learner|en
mm.user.student|Aluno|et
</pre>
Para uma lista completa de identificadores de strings consulte <a href="https://github.com/moodlehq/moodlemobile-phonegapbuild/blob/master/build/lang/en.json">esta lista</a>.';
$string['custommenuitems'] = 'Itens personalizados do menu';
$string['custommenuitems_desc'] = 'Itens adicionais podem ser adicionados ao menu principal da aplicação, se os especificar aqui. Digite cada item de menu personalizado em cada nova linha no formato: texto do item, endereço da hiperligação, método de abertura da hiperligação (inappbrowser, browser or embedded) e código de idioma (opcional, para mostrar o item apenas a utilizadores do idioma especificado), separados por barras verticais. Por exemplo:
<pre>
App\'s help | https://someurl.xyz/help | inappbrowser | en
Visit our SIS | https://someurl.xyz | browser | en
My grades | https://someurl.xyz/local/mygrades/index.php | embedded | en
As minhas notas| https://someurl.xyz/local/mygrades/index.php | embedded | pt
</pre>
Use \'inappbrowser\' quando quiser abrir a hiperligação num navegador sem sair da aplicação, use \'browser\' para abrir a hiperligação no navegador da internet predefinido do dispositivo e \'embedded\' se quiser mostrar a hiperligação incorporada numa nova página na aplicação.';
$string['disabledfeatures'] = 'Funcionalidades desativadas';
$string['disabledfeatures_desc'] = 'Selecione aqui os recursos do seu site que deseja desativar na aplicação para dispositivos móveis. Tenha em atenção que alguns recursos listados aqui podem já estar desativados por meio de outras configurações do site. Terá de terminar sessão e iniciar sessão novamente na aplicação para ver as alterações.';
$string['enableadditionalservice'] = 'Ativar o serviço de funcionalidades adicionais do Moodle Mobile';
$string['enableadditionalservicedescription'] = 'Este serviço deve estar ativado.';
$string['forcelogout'] = 'Forçar término da sessão';
$string['forcelogout_desc'] = 'Se ativar esta escolha, a opção da aplicação \'Alterar site\' é substituída por \'Terminar sessão\'. Isto resulta que o utilizador fique completamente desligado. É necessário voltar a inserir a sua senha na próxima vez que pretenderem aceder ao site.';
$string['local_mobiledescription'] = 'Módulo que prolonga as funcionalidades do serviço Mobile';
$string['local_mobilesettings'] = 'Configurações';
$string['mainmenu'] = 'Menu principal';
$string['mobilefeatures'] = 'Funcionalidades Mobile';
$string['pluginname'] = 'Funcionalidades adicionais do Moodle Mobile';
$string['pluginnotenabledorconfigured'] = 'O módulo local Moodle Mobile deve estar ativo e configurado para poder executar a aplicação';
$string['remoteaddons'] = 'Add-ons remotos';
