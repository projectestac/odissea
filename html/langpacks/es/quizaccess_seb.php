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
 * Strings for component 'quizaccess_seb', language 'es', version '4.5'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Añadir nueva plantilla';
$string['allowedbrowserkeysdistinct'] = 'Todas las claves deben ser diferentes.';
$string['allowedbrowserkeyssyntax'] = 'Una clave debería ser una cadena hexadecimal de 64 caracteres.';
$string['cachedef_config'] = 'Caché de configuración de SEB';
$string['cachedef_configkey'] = 'Caché de claves de configuración de SEB';
$string['cachedef_quizsettings'] = 'Caché de ajustes de cuestionario de SEB';
$string['cantdelete'] = 'La plantilla no puede eliminarse porque ha sido utilizada para uno o más cuestionarios.';
$string['cantedit'] = 'La plantilla no puede editarse porque ha sido utilizada para uno o más cuestionarios.';
$string['checkingaccess'] = 'Comprobando acceso a Safe Exam Browser...';
$string['clientrequiresseb'] = 'Este cuestionario ha sido configurado para que se use Safe Exam Browser con la configuración del cliente.';
$string['confirmtemplateremovalquestion'] = '¿Está seguro de que quiere eliminar esta plantilla?';
$string['confirmtemplateremovaltitle'] = '¿Confirmar el borrado de la plantilla?';
$string['conflictingsettings'] = 'No tiene permiso para actualizar los ajustes actuales de Safe Exam Browser.';
$string['content'] = 'Plantilla';
$string['description'] = 'Descripción';
$string['disabledsettings'] = 'Configuraciones deshabilitadas.';
$string['disabledsettings_help'] = 'La configuración de Safe Exam Browser del cuestionario no pueden ser cambiada si el cuestionario ha sido realizado. Para cambiar la configuración, primero deben ser eliminados todos los intentos realizados.';
$string['downloadsebconfig'] = 'Descargar el archivo de configuración SEB';
$string['duplicatetemplate'] = 'Ya existe una plantilla con el mismo nombre.';
$string['edittemplate'] = 'Editar plantilla';
$string['enabled'] = 'Habilitado';
$string['error:ws:nokeyprovided'] = 'Debe darse al menos una clave de Safe Exam Browser.';
$string['error:ws:quiznotexists'] = 'No se encuentra ningún cuestionario con el id de módulo de curso {$a}';
$string['event:accessprevented'] = 'Se impidió el acceso al cuestionario';
$string['event:templatecreated'] = 'La plantilla SEB fue creada';
$string['event:templatedeleted'] = 'La plantilla SEB fue borrada';
$string['event:templatedisabled'] = 'La plantilla SEB fue deshabilitada';
$string['event:templateenabled'] = 'La plantilla SEB fue habilitada';
$string['event:templateupdated'] = 'La plantilla SEB fue actualizada';
$string['exitsebbutton'] = 'Salir de Safe Exam Browser';
$string['filemanager_sebconfigfile'] = 'Subir el archivo de configuración de Safe Exam Browser';
$string['filemanager_sebconfigfile_help'] = 'Por favor suba su propio archivo de configuración de Safe Exam Browser para este cuestionario.';
$string['filenotpresent'] = 'Por favor suba un archivo de configuración de SEB.';
$string['fileparsefailed'] = 'El archivo subido no pudo ser guardado como un archivo de configuración SEB.';
$string['httplinkbutton'] = 'Descargar configuración';
$string['invalid_browser_key'] = 'Clave de navegador SEB inválida';
$string['invalid_config_key'] = 'Clave de configuración SEB inválida';
$string['invalidkeys'] = 'Las claves de Safe Exam Browswer no han podido ser validadas. Por favor asegúrese de que está utilizando el fichero de configuración correcto de Safe Exam Browser.';
$string['invalidtemplate'] = 'Plantilla de configuración SEB no válida';
$string['manage_templates'] = 'Plantillas Safe Exam Browser';
$string['managetemplates'] = 'Administrar plantillas';
$string['missingrequiredsettings'] = 'Faltan algunos valores requeridos en los ajustes de configuración .';
$string['name'] = 'Nombre';
$string['newtemplate'] = 'Nueva plantilla';
$string['noconfigfilefound'] = 'No se pudo encontrar ningún archivo de configuración SEB cargado para la prueba con cmid: {$a}';
$string['noconfigfound'] = 'No se pudo encontrar ninguna configuración de SEB para la prueba con cmid: {$a}';
$string['not_seb'] = 'No se está usando Safe Exam Browser.';
$string['notemplate'] = 'Sin plantilla';
$string['passwordnotset'] = 'La configuración actual requiere que los cuestionarios utilicen Safe Exam Browser para establecer una contraseña para el cuestionario.';
$string['pluginname'] = 'Reglas de acceso de Safe Exam Browser';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Configuración de Safe Exam Browser para una prueba. Esto incluye el ID del último usuario que creó o modificó la configuración.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'ID del cuestionario para el que existe la configuración.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Hora de Unix en que se crearon las configuraciones.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Hora de Unix en que se modificaron por última vez las configuraciones.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'ID del usuario que creó o modificó la configuración por última vez.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Configuración de la plantilla de Safe Exam Browser. Esto incluye el ID del último usuario que creó o modificó la plantilla.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Hora de Unix en la que se creó la plantilla.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Hora de Unix en la que se modificó por última vez la plantilla.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'ID del usuario que creó o modificó en último lugar la plantilla.';
$string['quizsettings'] = 'Configuración del cuestionario';
$string['restoredfrom'] = '{$a->name} (restaurado a través de cmid {$a->cmid})';
$string['seb'] = 'Safe Exam Browser';
$string['seb:bypassseb'] = 'Omitir el requisito de ver el cuestionario en Safe Exam Browser.';
$string['seb:manage_filemanager_sebconfigfile'] = 'Cambiar la configuración del cuestionario SEB: Seleccionar el archivo de configuración SEB';
$string['seb:manage_seb_activateurlfiltering'] = 'Cambiar la configuración del cuestionario SEB: Activar el filtrado de URL';
$string['seb:manage_seb_allowcapturecamera'] = 'Cambiar ajuste de cuestionarios SEB: Permitir al navegador acceder a la cámara';
$string['seb:manage_seb_allowcapturemicrophone'] = 'Cambiar ajuste de cuestionarios SEB: Permitir al navegador acceder al micrófono';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Cambiar la configuración del cuestionario SEB: Claves de examen del navegador permitidas';
$string['seb:manage_seb_allowreloadinexam'] = 'Cambiar la configuración del cuestionario SEB: Permitir recargar';
$string['seb:manage_seb_allowspellchecking'] = 'Cambiar la configuración del cuestionario SEB: Habilitar la revisión ortográfica';
$string['seb:manage_seb_allowuserquitseb'] = 'Cambiar la configuración de la prueba de SEB: Permitir salir';
$string['seb:manage_seb_configuremanually'] = 'Cambiar configuración de cuestionario SEB: Seleccionar configuración manual';
$string['seb:manage_seb_enableaudiocontrol'] = 'Cambiar la configuración del cuestionario SEB: Habilitar el control de audio';
$string['seb:manage_seb_expressionsallowed'] = 'Cambiar la configuración del cuestionario SEB: Expresiones simples permitidas';
$string['seb:manage_seb_expressionsblocked'] = 'Cambiar la configuración del cuestionario SEB: Expresiones simples bloqueadas';
$string['seb:manage_seb_filterembeddedcontent'] = 'Cambiar la configuración del cuestionario SEB: Filtrar contenido incrustado';
$string['seb:manage_seb_linkquitseb'] = 'Cambiar la configuración del cuestionario SEB: Enlace para salir';
$string['seb:manage_seb_muteonstartup'] = 'Cambiar la configuración del cuestionario SEB: Silenciar al inicio';
$string['seb:manage_seb_quitpassword'] = 'Cambiar la configuración del cuestionario SEB: Contraseña para salir';
$string['seb:manage_seb_regexallowed'] = 'Cambiar la configuración del cuestionario SEB: Expresiones regex permitidas';
$string['seb:manage_seb_regexblocked'] = 'Cambiar la configuración del cuestionario SEB: Expresiones regex bloqueadas';
$string['seb:manage_seb_requiresafeexambrowser'] = 'Cambiar la configuración del cuestionario SEB: Requerir Safe Exam Browser';
$string['seb:manage_seb_showkeyboardlayout'] = 'Cambiar la configuración del cuestionario SEB: Mostrar la distribución del teclado';
$string['seb:manage_seb_showreloadbutton'] = 'Cambiar la configuración del cuestionario SEB: Mostrar botón de recarga';
$string['seb:manage_seb_showsebdownloadlink'] = 'Cambiar la configuración del cuestionario SEB: Mostrar enlace de descarga';
$string['seb:manage_seb_showsebtaskbar'] = 'Cambiar la configuración del cuestionario SEB: Mostrar barra de tareas';
$string['seb:manage_seb_showtime'] = 'Cambiar la configuración del cuestionario SEB: Mostrar tiempo';
$string['seb:manage_seb_showwificontrol'] = 'Cambiar la configuración del cuestionario SEB: Mostrar controles Wi-Fi';
$string['seb:manage_seb_templateid'] = 'Cambiar la configuración del cuestionario SEB: Seleccionar plantilla SEB';
$string['seb:manage_seb_userconfirmquit'] = 'Cambiar la configuración del cuestionario SEB: Confirmar al salir';
$string['seb:manage_seb_usesebclientconfig'] = 'Cambiar configuración de cuestionario SEB: Usar configuración de cliente SEB';
$string['seb:managetemplates'] = 'Gestionar las plantilla de configuración SEB';
$string['seb_activateurlfiltering'] = 'Habilitar el filtrado de URL';
$string['seb_activateurlfiltering_help'] = 'Si está habilitado, las URLs se filtrarán al cargar páginas web. El conjunto de filtros debe definirse a continuación.';
$string['seb_allowcapturecamera'] = 'Permitir al navegador acceder a la cámara';
$string['seb_allowcapturecamera_help'] = 'Si se habilita, se pedirá a los usuarios permiso para que SEB acceda a la cámara antes de comenzar la sesión del examen. En macOS 12/iOS 15 y posteriores, deshabilitar este ajuste evita que las aplicaciones web accedan a la cámara. P.ej. no será posible grabar vídeo mediante WebRTC.';
$string['seb_allowcapturemicrophone'] = 'Permitir al navegador acceder al micrófono';
$string['seb_allowcapturemicrophone_help'] = 'Si se habilita, se pedirá a los usuarios permiso para que SEB acceda al micrófono antes de comenzar la sesión del examen. En macOS 12/iOS 15 y posteriores, deshabilitar este ajuste evita que las aplicaciones web accedan al micrófono. P.ej. no será posible grabar audio mediante WebRTC.';
$string['seb_allowedbrowserexamkeys'] = 'Claves del navegador seguro permitidas';
$string['seb_allowedbrowserexamkeys_help'] = 'Es este campo puede introducir las claves de examen de navegador permitidas para las versiones de Safe Exam Browser que tengan permitido acceder a este cuestionario. Si no se introducen claves, no se verificarán las claves de examen de navegador.';
$string['seb_allowreloadinexam'] = 'Permitir recargar en el examen';
$string['seb_allowreloadinexam_help'] = 'Si está habilitado, se permite la recarga de página (botón de recarga en la barra de tareas de SEB, barra de tareas del navegador, menú deslizante lateral de iOS, atajos de teclado -F5 o cmd+R-). Tenga en cuenta que el almacenamiento en caché sin conexión puede perderse si un usuario intenta volver a cargar una página sin una conexión a Internet.';
$string['seb_allowspellchecking'] = 'Habilitar revisión ortográfica';
$string['seb_allowspellchecking_help'] = 'Si está habilitado, se permite la revisión ortográfica en el navegador SEB.';
$string['seb_allowuserquitseb'] = 'Habilitar salir de SEB';
$string['seb_allowuserquitseb_help'] = 'Si está habilitado, los usuarios pueden salir de SEB con el botón "Salir" en la barra de tareas de SEB o presionando las teclas Ctrl-Q o pulsando el botón de cierre de la ventana principal del navegador.';
$string['seb_enableaudiocontrol'] = 'Habilitar controles de audio';
$string['seb_enableaudiocontrol_help'] = 'Si está habilitado, el icono control de audio se muestra en la barra de tareas de SEB.';
$string['seb_expressionsallowed'] = 'Expresiones permitidas';
$string['seb_expressionsallowed_help'] = 'Un campo de texto que contiene las expresiones de filtrado permitidas para las URLs permitidas. Se puede utilizar el carácter comodín \'\\*\'. Ejemplos de expresiones: \'example.com\' o \'example.com/stuff/\\*\'. \'example.com\' coincide con \'example.com\', \'www.example.com\' y \'www.mail.example.com\'. \'example.com/stuff/\\*\' coincide con todas las peticiones a cualquier subdominio de \'example.com\' que tengan \'stuff\' como primer segmento de la ruta.';
$string['seb_expressionsblocked'] = 'Expresiones bloqueadas';
$string['seb_expressionsblocked_help'] = 'Un campo de texto que contiene las expresiones de filtrado permitidas para las URLs bloqueadas. Se puede utilizar el carácter comodín \'\\*\'. Ejemplos de expresiones: \'example.com\' o \'example.com/stuff/\\*\'. \'example.com\' coincide con \'example.com\', \'www.example.com\' y \'www.mail.example.com\'. \'example.com/stuff/\\*\' coincide con todas las peticiones a cualquier subdominio de \'example.com\' que tengan \'stuff\' como primer segmento de la ruta.';
$string['seb_filterembeddedcontent'] = 'Filtrar también contenido incrustado';
$string['seb_filterembeddedcontent_help'] = 'Si está habilitado, los recursos incrustados también se filtrarán utilizando el conjunto de filtros.';
$string['seb_help'] = 'Configurar cuestionario para utilizar Safe Exam Browser.';
$string['seb_linkquitseb'] = 'Mostrar el botón Salir de Safe Exam Browser, configurado con este enlace de salida';
$string['seb_linkquitseb_help'] = 'En este campo puede introducir el enlace para salir de SEB. Se usa en un botón con el texto "Salir de Safe Exam Browser" en la página que aparece después de enviar el examen. Cuando se haga clic en el botón o en el enlace situado donde usted quiera, será posible salir de SEB sin tener que proporcionar una contraseña de salida. Para un sitio HTTPS, el enlace de salida debe comenzar por https://. Si no se introduce ningún enlace, el botón con texto "Salir de Safe Exam Browser" no aparecerá y no habrá ningún enlace establecido para salir de SEB.';
$string['seb_managetemplates'] = 'Gestionar plantillas de Safe Exam Browser';
$string['seb_muteonstartup'] = 'Silenciar al inicio';
$string['seb_muteonstartup_help'] = 'Si está habilitado, el audio se silencia inicialmente cuando comienza SEB.';
$string['seb_quitpassword'] = 'Contraseña del cuestionario';
$string['seb_quitpassword_help'] = 'Esta contraseña se muestra cuando los usuarios intentan salir de SEB a través del botón "Salir", pulsando Ctrl-Q o pulsando el botón de cerrar la ventana del navegador. Si no se establece contraseña para salir, entonces SEB se limitará a mostrar el mensaje "¿Está seguro de que desea salir de SEB?".';
$string['seb_regexallowed'] = 'Regex permitidas';
$string['seb_regexallowed_help'] = 'Un campo de texto que contiene las expresiones de filtrado para las URLs permitidas en formato de expresión regular (Regex).';
$string['seb_regexblocked'] = 'Regex bloqueadas';
$string['seb_regexblocked_help'] = 'Un campo de texto que contiene las expresiones de filtrado para las URLs bloqueadas en formato de expresión regular (Regex).';
$string['seb_requiresafeexambrowser'] = 'Requerir el uso de Safe Exam Browser';
$string['seb_requiresafeexambrowser_help'] = 'Si está habilitado, los estudiantes sólo pueden hacer el cuestionario utilizando Safe Exam Browser. Las opciones disponibles son:

* No
<br/>No es necesario utilizar Safe Exam Browser para hacer el cuestionario.
* Sí – Utilizar una plantilla existente
<br/>Se puede utilizar una plantilla para la configuración de Safe Exam Browser. Las plantillas se gestionan desde la administración del sitio. Sus ajustes manuales sobrescriben los ajustes de la plantilla.
* Yes – Configurar manualmente
<br/>No se utilizará ninguna plantilla para la configuración de Safe Exam Browser. Puede configurar Safe Exam Browser de forma manual.
* Yes – Subir mi propia configuración
<br/>Puede subir su archivo de configuración de Safe Exam Browser. Todos los ajustes manuales y el uso de plantillas serán deshabilitados.
* Yes – Utilizar configuración de cliente SEB
<br/>No existen configuraciones de Safe Exam Browser guardadas en Moodle. El cuestionario puede hacerse con cualquier configuración de Safe Exam Browser.';
$string['seb_showkeyboardlayout'] = 'Mostrar distribución de teclado';
$string['seb_showkeyboardlayout_help'] = 'Si está habilitado, la disposición actual del teclado se mostrará en la barra de tareas de SEB. Le permite cambiar a otras disposiciones de teclado que estén habilitadas en el sistema operativo.';
$string['seb_showreloadbutton'] = 'Mostrar el botón de recarga';
$string['seb_showreloadbutton_help'] = 'Si está habilitado, se mostrará un botón de recarga en la barra de tareas de SEB, permitiendo que la página web actual se recargue.';
$string['seb_showsebdownloadlink'] = 'Mostrar botón de descarga de Safe Exam Browser';
$string['seb_showsebdownloadlink_help'] = 'Si está habilitado, se mostrará un botón de descargar de Safe Exam Browser en la página de inicio del cuestionario.';
$string['seb_showsebtaskbar'] = 'Mostrar la barra de tareas de SEB';
$string['seb_showsebtaskbar_help'] = 'Si está habilitado, una barra de tareas aparecerá en la parte inferior de la ventana del navegador SEB. La barra de tareas es necesaria para mostrar elementos como los controles Wi-Fi, el botón de recarga, la hora y la disposición del teclado.';
$string['seb_showtime'] = 'Mostrar la hora';
$string['seb_showtime_help'] = 'Si está habilitado, se mostrará la hora actual en la barra de tareas de SEB.';
$string['seb_showwificontrol'] = 'Mostrar control de Wi-Fi';
$string['seb_showwificontrol_help'] = 'Si está habilitado, aparecerán un botón de control Wi-Fi en la barra de tareas de SEB. El botón permite a los usuarios volver a conectarse a redes Wi-Fi a las que se hayan conectado previamente.';
$string['seb_templateid'] = 'Plantilla de configuración de Safe Exam Browser';
$string['seb_templateid_help'] = 'Los ajustes de la plantilla de configuración seleccionada se utilizarán para la configuración de Safe Exam Browser mientras dure el intento del cuestionario. Puede sobrescribir los ajustes en la plantilla con ajustes manuales.';
$string['seb_use_client'] = 'Sí - Utilizar la configuración del cliente SEB';
$string['seb_use_manually'] = 'Sí - Configurar manualmente';
$string['seb_use_template'] = 'Sí - Usar una plantilla existente';
$string['seb_use_upload'] = 'Sí - Cargar mi propia configuración';
$string['seb_userconfirmquit'] = 'Pedir al usuario que confirme la salida';
$string['seb_userconfirmquit_help'] = 'Si está habilitado, los usuarios tienen que confirmar la salida de SEB cuando se detecte un enlace para salir.';
$string['sebdownloadbutton'] = 'Descargar Safe Exam Browser';
$string['sebkeysvalidationfailed'] = 'Falló la validación de claves SEB';
$string['seblinkbutton'] = 'Iniciar Safe Exam Browser';
$string['sebrequired'] = 'Este cuestionario ha sido configurado para que los estudiantes solo puedan realizarlo utilizando Safe Exam Browser.';
$string['setting:autoreconfigureseb'] = 'Configurar automáticamente SEB';
$string['setting:autoreconfigureseb_desc'] = 'Si se habilita, los usuarios que navegan al cuestionario usando el Navegador de Examen Seguro serán forzados automáticamente a reconfigurar su Navegador de Examen Seguro.';
$string['setting:displayblocksbeforestart'] = 'Mostrar bloques antes de comenzar el cuestionario';
$string['setting:displayblocksbeforestart_desc'] = 'Si está habilitado, los bloques se mostrarán antes de que un usuario intente el cuestionario.';
$string['setting:displayblockswhenfinished'] = 'Mostrar bloques después de terminar el cuestionario';
$string['setting:displayblockswhenfinished_desc'] = 'Si está habilitado, los bloques se mostrarán después de que un usuario termine su intento en el cuestionario.';
$string['setting:downloadlink'] = 'Enlace de descarga de Safe Exam Browser';
$string['setting:downloadlink_desc'] = 'URL para descargar la apicación de Safe Exam Browser.';
$string['setting:quizpasswordrequired'] = 'Contraseña de cuestionario requerida';
$string['setting:quizpasswordrequired_desc'] = 'Si está habilitado, todos los cuestionarios que requieran Safe Exam Browser deben tener establecida una contraseña de cuestionario.';
$string['setting:showhttplink'] = 'Mostrar enlace http://';
$string['setting:showseblink'] = 'Mostrar enlace seb://';
$string['setting:showseblinks'] = 'Mostrar enlaces de configuración de Safe Exam Browser';
$string['setting:showseblinks_desc'] = 'Si mostrar enlaces para que un usuario acceda al archivo de configuración de Safe Exam Browser cuando se impide el acceso al cuestionario. Tenga en cuenta que es posible que los enlaces seb: // no funcionen en todos los navegadores.';
$string['setting:supportedversions'] = 'Por favor tenga en cuenta que como mínimo se necesitan las siguientes versiones de Safe Exam Browser para usar la función de clave de configuración: macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14.';
$string['settingsfrozen'] = 'Debido a que hubo al menos un intento de prueba, la configuración de Safe Exam Browser ya no se puede actualizar.';
$string['unknown_reason'] = 'Razón desconocida';
$string['used'] = 'En uso';
