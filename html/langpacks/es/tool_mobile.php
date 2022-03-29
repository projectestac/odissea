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
 * Strings for component 'tool_mobile', language 'es', version '3.11'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'Depuración ADOdb está habilitada. Debería de ser deshabilitada en la configuración del plugin de inscripción por base de datos externa o autenticación de base de datos externa.';
$string['androidappid'] = 'Identificador único de aplicación de Android';
$string['androidappid_desc'] = 'Esta configuración puede dejarse como predeterminada a menos que tenga una aplicación de Android personalizada.';
$string['apppolicy'] = 'URL de la política de la aplicación';
$string['apppolicy_help'] = 'La URL de una política para los usuarios de la aplicación que aparece en la página Acerca de de la aplicación. Si el campo se deja vacío, se utilizará la URL de la política del sitio.';
$string['apprequired'] = 'Esta funcionalidad sólo está disponible cuando se accede a través de la aplicación móvil de Moodle o la aplicación de escritorio.';
$string['autologinkeygenerationlockout'] = 'La generación de claves de inicio de sesión automático está bloqueada. Debe esperar 6 minutos entre solicitudes.';
$string['autologinnotallowedtoadmins'] = 'No se permite el inicio de sesión automático para los administradores del sitio.';
$string['cachedef_plugininfo'] = 'Esto almacena la lista de complementos con addons (complementos) móviles';
$string['cachedef_subscriptiondata'] = 'Esto almacena la información de la suscripción de la aplicación de Moodle.';
$string['clickheretolaunchtheapp'] = 'Haga clic aquí si la aplicación no se abre automáticamente.';
$string['configmobilecssurl'] = 'Archivo CSS para personalizar su interfaz de aplicaciones móviles.';
$string['customlangstrings'] = 'Cadenas personalizadas del idioma';
$string['customlangstrings_desc'] = 'Las palabras y frases que se muestran en la aplicación se pueden personalizar aquí. Introduzca cada cadena de idioma personalizado en una nueva línea con formato: identificador de cadena, cadena de idioma personalizado y código de idioma, separados por caracteres de barra vertical (tubería). Por ejemplo:
<pre>
mm.user.student | Learner | en
mm.user.student | Aprendiz | es
</pre>
Para obtener una lista completa de identificadores de cadena, consulte la documentación.';
$string['custommenuitems'] = 'Elementos de menú personalizados';
$string['custommenuitems_desc'] = 'Se pueden añadir elementos adicionales al menú principal de la aplicación especificándolos aquí. Introduzca cada elemento del menú personalizado en una nueva línea con formato: texto del elemento, URL del enlace, método de apertura del enlace y código de idioma (opcional, para mostrar el elemento a los usuarios del idioma especificado solamente), separados por caracteres de barra vertical (tubería).

Los métodos de apertura de enlaces son: app (para vincular a una actividad compatible con la aplicación), inappbrowser (para abrir un enlace en un navegador sin salir de la aplicación), browser (para abrir el enlace en el navegador predeterminado del dispositivo fuera de la aplicación) y embedded (para mostrar el enlace en un iframe en una nueva página de la aplicación).

Cuando a los elementos les falta una traducción para un idioma determinado, utilizarán otros idiomas como respaldo, a menos que se añada "_only" al código de idioma.

Por ejemplo:
<pre>
Ayuda de la aplicación | https://someurl.xyz/help | inappbrowser
Mis calificaciones | https://someurl.xyz/local/mygrades/index.php | embedded | es
Mis calificaciones | https://someurl.xyz/local/mygrades/index.php | embedded | es
Solo verá esto en inglés | https://someurl.xyz/english | browser | en_only
</pre>';
$string['darkmode'] = 'Modo oscuro';
$string['disabledfeatures'] = 'Características deshabilitadas';
$string['disabledfeatures_desc'] = 'Seleccione aquí las funciones que desea deshabilitar en la aplicación móvil para su sitio. Tenga en cuenta que algunas de las funciones enumeradas aquí ya podrían estar deshabilitadas a través de la configuración de otro sitio. Tendrá que cerrar la sesión y volver a iniciarla en la aplicación para ver los cambios.';
$string['displayerrorswarning'] = 'La visualización de mensajes de depuración (debugdisplay) está habilitada. Debería estar desactivado.';
$string['downloadcourse'] = 'Descargar curso';
$string['downloadcourses'] = 'Descargar cursos';
$string['enablesmartappbanners'] = 'Habilitar banners de aplicación';
$string['enablesmartappbanners_desc'] = 'Si está habilitado, se mostrará un banner que promociona la aplicación móvil al acceder al sitio utilizando un navegador móvil.';
$string['filetypeexclusionlist'] = 'Lista de exclusión de tipo de archivo';
$string['filetypeexclusionlist_desc'] = 'Seleccione todos los tipos de archivos que no se deben usar en un dispositivo móvil. Dichos archivos se enumerarán en el curso y después, si un usuario intenta abrirlos, se mostrará un aviso advirtiendo de que el tipo de archivo no está diseñado para su uso en un dispositivo móvil. El usuario puede cancelar o ignorar la advertencia y abrir el archivo de todos modos.';
$string['filetypeexclusionlistplaceholder'] = 'Lista de exclusión de tipo de archivo móvil';
$string['forcedurlscheme'] = 'Si desea permitir que solo se abra su aplicación de marca personalizada a través de una ventana del navegador, especifique aquí su esquema de URL. Si desea permitir solo la aplicación oficial, establezca el valor predeterminado. Deje el campo vacío si desea permitir cualquier aplicación.';
$string['forcedurlscheme_key'] = 'Esquema de URL';
$string['forcelogout'] = 'Forzar cierre de sesión';
$string['forcelogout_desc'] = 'Si está habilitada, la opción de la aplicación \'Cambiar sitio\' se reemplaza por \'Cerrar sesión\'. Esto da como resultado que el usuario se desconecte por completo. Luego, deben volver a introducir su contraseña la próxima vez que deseen acceder al sitio.';
$string['getmoodleonyourmobile'] = 'Descargar la app para dispositivos móviles';
$string['h5poffline'] = 'Ver contenido H5P fuera de línea';
$string['httpsrequired'] = 'HTTPS requerido';
$string['insecurealgorithmwarning'] = 'Parece que el certificado HTTPS usa un algoritmo inseguro para firmar (SHA-1). Intente actualizar el certificado.';
$string['invalidcertificatechainwarning'] = 'Parece que la cadena de certificados no es válida.';
$string['invalidcertificateexpiredatewarning'] = 'Parece que el certificado HTTPS del sitio ha expirado.';
$string['invalidcertificatestartdatewarning'] = 'Parece que el certificado HTTPS para este sitio aún no es válido (tiene una fecha de inicio en el futuro).';
$string['invalidprivatetoken'] = 'Token privado no válido. El token no debe estar vacío ni pasar a través del parámetro GET.';
$string['invaliduserquotawarning'] = 'La cuota del usuario (userquota) está configurada a un número inválido. Debería de configurarse a un número válido (un valor entero) en las Configuraciones de seguridad del sitio.';
$string['iosappid'] = 'Identificador único de la aplicación iOS';
$string['iosappid_desc'] = 'Esta configuración puede dejarse como predeterminada a menos que tenga una aplicación iOS personalizada.';
$string['launchviasiteinbrowser'] = 'Ejecutar a través del sitio en el navegador del sistema';
$string['loginintheapp'] = 'A través de la aplicación';
$string['logininthebrowser'] = 'A través de una ventana del navegador (para complementos SSO)';
$string['loginintheembeddedbrowser'] = 'A través de un navegador incrustado (para complementos SSO)';
$string['logoutconfirmation'] = '¿Está seguro de que quiere cerrar sesión desde la aplicación móvil en sus dispositivos móviles? Al cerrar sesión tendrá que volver a introducir su nombre de usuario y contraseña en la aplicación móvil en todos los dispositivos donde la tenga instalada.';
$string['mainmenu'] = 'Menú principal';
$string['managefiletypes'] = 'Gestionar tipos de archivo';
$string['minimumversion'] = 'Si se especifica una versión de la aplicación (3.8.0 o superior), se le pedirá a cualquier usuario que use una versión anterior de la aplicación que actualice su aplicación antes de que se le permita el acceso al sitio.';
$string['minimumversion_key'] = 'Versión mínima requerida de la aplicación';
$string['mobileapp'] = 'App para dispositivos móviles';
$string['mobileappconnected'] = 'App para dispositivos móviles conectada.';
$string['mobileappearance'] = 'Apariencia móvil';
$string['mobileappenabled'] = 'Este sitio tiene activado el acceso desde la app.<br /><a href="{$a}">Descargar la app</a>.';
$string['mobileappsubscription'] = 'Suscripción a la aplicación de Moodle';
$string['mobileauthentication'] = 'Autenticación Móvil';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Características móviles';
$string['mobilenotificationsdisabledwarning'] = 'Las notificaciones Mobile no están habilitadas. Deberían de ser habilitadas en los ajustes de notificaciones.';
$string['mobilesettings'] = 'Ajustes móviles';
$string['moodleappsportalfeatureswarning'] = 'Por favor tenga en cuenta que algunas características pueden estar restringidas en su suscripción a la aplicación de Moodle. Para más detalles visite <a href="{$a}" target="_blank">Portal de Aplicaciones de Moodle</a>.';
$string['notifications'] = 'Notificaciones';
$string['notificationsactivedevices'] = 'Dispositivos activos';
$string['notificationscurrentactivedevices'] = 'Dispositivos que reciben notificaciones este mes';
$string['notificationsignorednotifications'] = 'Notificaciones no enviadas';
$string['notificationslimitreached'] = 'Se superó el límite mensual de dispositivos de usuario activos. No se enviarán notificaciones para algunos usuarios. Se recomienda que actualice su plan de aplicaciones en el <a href="{$a}" target="_blank">Portal de Aplicaciones de Moodle</a>.';
$string['notificationsmissingwarning'] = 'No se pudieron recuperar las estadísticas de notificación de la aplicación Moodle. Lo más probable es que esto se deba a que las notificaciones móviles aún no están habilitadas en el sitio. Puede habilitarlas en Administración del sitio / Mensajería / Móvil.';
$string['notificationsnewdevices'] = 'Nuevos dispositivos';
$string['notificationsseemore'] = 'Nota: Las estadísticas de uso de la aplicación Moodle no se calculan en tiempo real. Para acceder a estadísticas más detalladas, incluidos datos de meses anteriores, inicie sesión en el <a href="{$a}" target="_blank">Portal de Aplicaciones de Moodle</a>.';
$string['notificationssentnotifications'] = 'Notificaciones enviadas';
$string['oauth2identityproviders'] = 'Proveedores de identidad de OAuth 2.';
$string['offlineuse'] = 'Uso fuera de línea';
$string['openusingembeddedbrowser'] = 'Abrir usando el navegador incrustado';
$string['pluginname'] = 'Herramientas de aplicación Moodle';
$string['pluginnotenabledorconfigured'] = 'Complemento no habilitado o no configurado.';
$string['privacy:metadata:core_userkey'] = 'Claves de usuario utilizadas para crear una clave de inicio de sesión automático para el usuario actual.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'La fecha de la última petición de clave de inicio de sesión automático. Se necesitan 6 minutos entre intentos.';
$string['qrcodedisabled'] = 'Acceso a través de código QR deshabilitado';
$string['qrcodeformobileappaccess'] = 'Código QR para el acceso desde la app';
$string['qrcodeformobileapploginabout'] = 'Escanee el código QR con su app y accederá automáticamente. El código QR expirará en {$a} minutos.';
$string['qrcodeformobileappurlabout'] = 'Escanee el código QR con su app para rellenar la URL del sitio en su app.';
$string['qrcodetype'] = 'Acceso por código QR';
$string['qrcodetype_desc'] = 'Un código QR puede ser facilitado a los usuarios de la app para escanear. Este puede ser usado para rellenar la URL del sitio, o cuando el sitio usa HTTPS, para que el usuario inicie sesión automáticamante sin tener que introducir su nombre de usuario y su contraseña.';
$string['qrcodetypelogin'] = 'Código QR con inicio de sesión automático';
$string['qrcodetypeurl'] = 'Código QR con la URL del sitio';
$string['qrsiteadminsnotallowed'] = 'Por razones de seguridad el inicio de sesión a través de código QR no está permitido para administradores de sitio o si usted ha iniciado sesión como otro usuario.';
$string['readingthisemailgettheapp'] = '¿Está leyendo esto en un correo electrónico? <a href="{$a}">Descargue la aplicación móvil y reciba notificaciones en su dispositivo móvil</a>.';
$string['remoteaddons'] = 'Complementos remotos';
$string['responsivemainmenuitems'] = 'Elementos de menú responsive';
$string['scanqrcode'] = 'Escanear código QR';
$string['selfsignedoruntrustedcertificatewarning'] = 'Parece que el certificado HTTPS está autofirmado o no es de confianza. La aplicación móvil solo funcionará con sitios de confianza.';
$string['setuplink'] = 'Página de descarga de la aplicación';
$string['setuplink_desc'] = 'URL de la página con opciones para descargar la aplicación móvil desde App Store y Google Play. El enlace de la página de descarga de la aplicación se muestra en el pie de página y en el perfil de un usuario. Déjelo en blanco para no mostrar un enlace.';
$string['smartappbanners'] = 'Banners de la aplicación';
$string['subscription'] = 'Suscripción';
$string['subscriptioncreated'] = 'Fecha de inicio';
$string['subscriptionerrorrequest'] = 'Se produjo un error inesperado al intentar recuperar la información de su suscripción a la aplicación de Moodle.';
$string['subscriptionexpiration'] = 'Fecha de caducidad';
$string['subscriptionfeaturenotapplied'] = 'Esta característica está configurada en su sitio pero no se incluye dentro del plan de la aplicación Moodle. Por lo tanto, la configuración no tendrá ningún efecto.';
$string['subscriptionfeatures'] = 'Características de suscripción';
$string['subscriptionlimitsurpassed'] = 'Se superó el límite de suscripción';
$string['subscriptionregister'] = 'Para obtener detalles de los distintos planes de aplicaciones y para acceder a las estadísticas de uso de la aplicación Moodle, visite el <a href="{$a}" target="_blank">Portal de aplicaciones de Moodle</a>.';
$string['subscriptionsseemore'] = 'Nota: La información que se muestra no se actualiza en tiempo real. Es posible que deba cerrar la sesión y volver a iniciarla para ver las actualizaciones. Para obtener información sobre cómo actualizar su plan de aplicaciones, inicie sesión en el <a href="{$a}" target="_blank">Portal de aplicaciones de Moodle</a>.';
$string['switchaccount'] = 'Cambiar cuenta';
$string['typeoflogin'] = 'Tipo de inicio de sesión';
$string['typeoflogin_desc'] = 'Si el sitio utiliza un método de autenticación SSO, seleccione a través de una ventana del navegador o mediante un navegador integrado. Un navegador integrado proporciona una mejor experiencia de usuario, aunque no funciona con todos los complementos de SSO.';
$string['viewqrcode'] = 'Ver código QR';
