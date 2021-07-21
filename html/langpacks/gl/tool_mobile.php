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
 * Strings for component 'tool_mobile', language 'gl', version '3.11'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'A depuración de ADOdb está activada. Debe desactivarse na autenticación de base de datos externa ou nos axustes do engadido de matriculación na base de datos externa.';
$string['androidappid'] = 'Identificador único da apli de Android';
$string['androidappid_desc'] = 'Este axuste pode deixarse como predeterminado a menos que teña unha apli Android personalizada.';
$string['apppolicy'] = 'URL da directiva de aplis';
$string['apppolicy_help'] = 'O URL dunha directiva para usuarios de aplis que aparece na páxina «Sobre» da apli. Se o campo se deixa baleiro, empregarase no seu lugar o URL das normas do sitio.';
$string['apprequired'] = 'Esta funcionalidade só está dispoñíbel cando se accede a través da apli móbil ou da de escritorio do Moodle.';
$string['autologinkeygenerationlockout'] = 'A xeración de claves de acceso automático está bloqueada. Ten que agardar 6 minutos entre as solicitudes.';
$string['autologinnotallowedtoadmins'] = 'Non está permitido o acceso automático para administradores do sitio.';
$string['cachedef_plugininfo'] = 'Isto garda a lista de engadidos cos complementos móbiles';
$string['clickheretolaunchtheapp'] = 'Prema aquí se a apli non se abre automaticamente.';
$string['configmobilecssurl'] = 'Ficheiro CSS para personalizar a súa interface de aplicacións móbiles.';
$string['customlangstrings'] = 'Cadeas de idioma personalizadas';
$string['customlangstrings_desc'] = 'Pódense personalizar aquí palabras e frases amosadas na apli. Insira cada cadea de idioma personalizada nunha nova liña co formato: identificador de cadea, cadea de idioma personalizada e código do idioma, separados por caracteres de canalización «|». Por exemplo:
 <pre>
mm.user.student|Learner|en
mm.user.student|Alumno|gl
</pre> Para unha lista completa de identificadores de cadea, consulte a documentación.';
$string['custommenuitems'] = 'Elementos do menú personalizado';
$string['custommenuitems_desc'] = 'Pódense engadir elementos adicionais ao menú principal das aplis especificándoos aquí. Introduza cada elemento do menú personalizado nunha nova liña con formato: texto do elemento, URL da ligazón, método de apertura de ligazón e código de idioma (opcional, para amosar o elemento só aos usuarios do idioma especificado), separados por caracteres de canalización «|».

Os métodos de apertura de ligazóns son: «app» (para ligar con unha actividade admitida pola apli), «inappbrowser» (para abrir unha ligazón nun navegador sen saír da apli), «browser» (para abrir a ligazón no navegador predeterminado do dispositivo fóra da apli) e «embedded» (para amosar a ligazón nun cadro nunha páxina nova da apli).

Cando aos elementos lles falta unha tradución para un idioma determinado, empregarán outros idiomas como alternativa a non ser que se engada «_only» ao código de idioma.

Por exemplo:
<pre>
Axuda da apli|https://someurl.xyz/help|inappbrowser
My grades|https://someurl.xyz/local/mygrades/index.php|embedded|en
As miñas cualificacións|https://someurl.xyz/local/mygrades/index.php|embedded|gl
Isto só o verá en inglés|https://someurl.xyz/english|browser|en_only
</pre>';
$string['darkmode'] = 'Modo escuro';
$string['disabledfeatures'] = 'Funcións desactivadas';
$string['disabledfeatures_desc'] = 'Seleccione aquí as funcións que quere desactivar na Apli móbil para o seu sitio. Teña en conta que algunhas funcións enumeradas aquí xa se poden desactivar a través doutros axustes do sitio. Terá que saír e acceder de novo á apli para ver os cambios.';
$string['displayerrorswarning'] = 'Amosar as mensaxes de depuración (debugdisplay) está activado. Debe estar desactivado.';
$string['downloadcourse'] = 'Descargar curso';
$string['downloadcourses'] = 'Descargar cursos';
$string['enablesmartappbanners'] = 'Activar os báners da apli';
$string['enablesmartappbanners_desc'] = 'Se está activado, amosarase un báner que promove a apli móbil ao acceder ao sitio a través dun navegador móbil.';
$string['forcedurlscheme'] = 'Se quere que só se abra a súa apli de marca personalizada a través dunha xanela do navegador, especifique aquí o seu esquema de URL. Se quere permitir só a apli oficial, estabeleza o valor predeterminado. Deixe o campo baleiro se quere permitir calquera apli.';
$string['forcedurlscheme_key'] = 'Esquema de URL';
$string['forcelogout'] = 'Forzar a saída';
$string['forcelogout_desc'] = 'Se está activado, a opción da apli «Cambiar o sitio» substitúese por «Saír da sesión». Isto dá como resultado que o usuario se desconecta completamente. Entón deberá introducir o seu contrasinal a próxima vez que queira acceder ao sitio.';
$string['getmoodleonyourmobile'] = 'Obter a apli móbil';
$string['h5poffline'] = 'Ver o contido H5P sen conexión';
$string['httpsrequired'] = 'Requírese HTTPS';
$string['insecurealgorithmwarning'] = 'Parece que o certificado HTTPS usa un algoritmo inseguro para asinar (SHA-1). Tente actualizar o certificado.';
$string['invalidcertificatechainwarning'] = 'Parece que a cadea do certificado non é válida.';
$string['invalidcertificateexpiredatewarning'] = 'Parece que o certificado HTTPS do sitio caducou.';
$string['invalidcertificatestartdatewarning'] = 'Parece que o certificado HTTPS do sitio aínda non é válido (con data de inicio no futuro).';
$string['invalidprivatetoken'] = 'O testemuño privado non é válido. O testemuño non debe estar baleiro nin pasar polo parámetro GET.';
$string['invaliduserquotawarning'] = 'A cota de usuario (userquota) está definida nun número non válido. Debería axustarse a un número válido (un valor enteiro) nos axustes de seguridade do sitio.';
$string['iosappid'] = 'Identificador único da aplicación de iOS';
$string['iosappid_desc'] = 'Este axuste pode deixarse como predeterminada a non ser que teña unha apli personalizada para iOS.';
$string['loginintheapp'] = 'A través da apli';
$string['logininthebrowser'] = 'A través dunha xanela do navegador (para engadidos SSO)';
$string['loginintheembeddedbrowser'] = 'A través dun navegador incrustado (para engadidos SSO)';
$string['mainmenu'] = 'Menú principal';
$string['minimumversion'] = 'Se se especifica unha versión da apli (3.8.0 ou superior), solicitaráselle a todos os usuarios que usen unha versión de apli máis antiga que actualicen a súa apli antes de ter acceso ao sitio.';
$string['minimumversion_key'] = 'Requírese unha versión mínima da apli';
$string['mobileapp'] = 'Apli móbil';
$string['mobileappconnected'] = 'Apli móbil conectada';
$string['mobileappearance'] = 'Aparencia da apli móbil';
$string['mobileappenabled'] = 'Este sitio ten o acceso a apli móbil activado.<br /><a href="{$a}">Descargar a apli móbil</a> .';
$string['mobileauthentication'] = 'Autenticación da Mobile';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Funcións da Mobile';
$string['mobilenotificationsdisabledwarning'] = 'As notificacións da Mobile non están activadas. Deberían estar activadas nos Axustes das notificacións.';
$string['mobilesettings'] = 'Axustes para Mobile';
$string['oauth2identityproviders'] = 'Provedores de identidade de OAuth 2';
$string['offlineuse'] = 'Uso sen conexión';
$string['pluginname'] = 'Ferramentas da apli Moodle';
$string['pluginnotenabledorconfigured'] = 'Engadido sen activar ou configurar.';
$string['privacy:metadata:core_userkey'] = 'As chaves de usuario utilizadas para crear a chave de acceso automático para o usuario actual.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Data da última solicitude de chave de acceso automático. Entre cada solicitude ten que agardar 6 minutos.';
$string['readingthisemailgettheapp'] = 'Lendo isto nun correo electrónico? <a href="{$a}">Descargar a apli móbil e recibir notificacións no seu dispositivo móbil</a> .';
$string['remoteaddons'] = 'Complementos remotos';
$string['responsivemainmenuitems'] = 'Elementos de menú adaptativo';
$string['selfsignedoruntrustedcertificatewarning'] = 'Parece que o certificado HTTPS está autoasinado ou non é fiábel. A apli móbil só funcionará con sitios de confianza.';
$string['setuplink'] = 'Páxina de descarga da apli';
$string['setuplink_desc'] = 'URL da páxina con opcións para descargar a apli móbil dende a App Store e Google Play. A ligazón da páxina de descarga da apli amosase no rodapé da páxina e no perfil do usuario. Déixea baleira para non amosar unha ligazón.';
$string['smartappbanners'] = 'Báners da apli';
$string['typeoflogin'] = 'Tipo de acceso';
$string['typeoflogin_desc'] = 'Se o sitio usa un método de autenticación SSO, seleccione isto a través dunha xanela do navegador ou a través dun navegador incrustado. Un navegador incrustado ofrece unha mellor experiencia de usuario, aínda que non funciona con todos os engadidos SSO.';
