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
 * Strings for component 'report_security', language 'es', version '3.11'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_configrw_details'] = '<p>Se recomienda que los permisos del archivo <code>config.php</code> se cambien después de la instalación para que este archivo no sea modificado por el servidor web.
Por favor tenga en cuenta que esta medida no mejora la seguridad del servidor de forma significativa, pero si puede ralentizar o limitar vulnerabilidades comunes.</p>';
$string['check_configrw_name'] = 'Archivo config.php escribible';
$string['check_configrw_ok'] = 'El archivo config.php no puede ser modificado por scripts PHP.';
$string['check_configrw_warning'] = 'Los scripts PHP pueden modificar el archivo config.php.';
$string['check_cookiesecure_details'] = '<p>Si habilita la comunicación https, se recomienda que también habilite el envío de \'cookies\' seguras. Debería asimismo agregar una redirección permanente desde http a https. Idealmente también debería de servir encabezados HSTS (headers) tambien.</p>';
$string['check_cookiesecure_error'] = 'Por favor, habilite \'cookies\' seguras';
$string['check_cookiesecure_http'] = 'Debe activar HTTPS para poder usar cookies seguras';
$string['check_cookiesecure_name'] = '\'Cookies\' seguras';
$string['check_cookiesecure_ok'] = 'Habilitadas \'Cookies\' seguras.';
$string['check_crawlers_details'] = '<p>La configuración de Abrir a Google permite que los motores de búsqueda entren a los cursos que tengan acceso a invitados. No hay razón de configurarlo así cuando un sitio no  permite el acceso a invitados.</p>';
$string['check_crawlers_error'] = 'Se permite el acceso al motor de búsquedas pero el acceso de invitados está desactivado.';
$string['check_crawlers_info'] = 'Los motores de búsqueda pueden entrar como invitados.';
$string['check_crawlers_name'] = 'Abrir a Google';
$string['check_crawlers_ok'] = 'El acceso a los motores de búsqueda está deshabilitado.';
$string['check_defaultuserrole_details'] = '<p>A todos los usuarios identificados se les asignan los permisos del rol de usuario por defecto. Por favor, asegúrese de que no se admiten permisos de riego en este rol. </p>
<p>Para el rol de usuario por defecto solo se permite heredar el tipo <em>usuario autenticado</em>. El  permiso para ver el curso no debe estar habilitado. </p>';
$string['check_defaultuserrole_error'] = 'El rol default para el usuario "{$a}" ¡está incorrectamente definido!';
$string['check_defaultuserrole_name'] = 'Rol por defecto de todos los usuarios';
$string['check_defaultuserrole_notset'] = 'No se ha determinado el rol por defecto';
$string['check_defaultuserrole_ok'] = 'El rol por defecto para todas las definiciones de usuarios es correcto.';
$string['check_dirindex_info'] = 'El índice de directorio no debe estar habilitado';
$string['check_displayerrors_details'] = '<p>No se recomienda habilitar la configuración PHP  <code>display_errors</code> en sitios de producción porque los mensajes de error pueden revelar información sensible sobre su servidor.</p>';
$string['check_displayerrors_error'] = 'La configuración de PHP para mostrar los errores está habilitada. Se recomienda que esta esté deshabilitada.';
$string['check_displayerrors_name'] = 'Visualización de errores de PHP';
$string['check_displayerrors_ok'] = 'Visualización de errores de PHP deshabilitados';
$string['check_dotfiles_info'] = 'Todos los archivos ocultos (empiezan por ".") excepto /.well-known/* no deberían ser públicos';
$string['check_emailchangeconfirmation_details'] = '<p>Se recomienda utilizar un paso de confirmación por email cuando los usuarios cambian la dirección de correo electrónico de su perfil. Si se deshabilita, los spammers pueden tratar de explotar el servidor para mandar correo basura (spam).</p> <p>También se puede bloquear el campo de correo electrónico en la extensión de identificación, aunque aquí no se considera esta posibilidad.</p>';
$string['check_emailchangeconfirmation_error'] = 'Los usuarios pueden introducir cualquier dirección de correo electrónico.';
$string['check_emailchangeconfirmation_info'] = 'Los usuarios solo pueden introducir direcciones de correo electrónico de los dominios permitidos.';
$string['check_emailchangeconfirmation_name'] = 'Confirmar cambio de correo electrónico';
$string['check_emailchangeconfirmation_ok'] = 'Cornfirmar el cambio de dirección de correo electrónico en el perfil de usuario.';
$string['check_embed_details'] = '<p> La Incrustación ilimitada de objetos es muy peligrosa - Cualquier usuario registrado puede lanzar un ataque XSS contra otros usuarios del servidor. Este ajuste debe ser desactivado en los servidores de producción. </p>';
$string['check_embed_error'] = 'Incrustación ilimitada de objetos habilitada - esto es muy peligroso en la mayoría de los servidores.';
$string['check_embed_name'] = 'Permitir EMBED (incrustar) y OBJECT (objeto)';
$string['check_embed_ok'] = 'No se permite la incrustación ilimitada de objetos.';
$string['check_frontpagerole_details'] = 'El rol por defecto en la página principal se da a todos los usuarios registrados para las actividades en la portada. Por favor, asegúrese de que no están permitidos privilegios con riesgo para este rol.
Se recomienda crear un rol especial a tal efecto y no se use un tipo de rol preestablecido.';
$string['check_frontpagerole_error'] = '¡Detectado un rol en la página principal "{$a}" definido de forma incorrecta!';
$string['check_frontpagerole_name'] = 'Rol en la página principal';
$string['check_frontpagerole_notset'] = 'El rol en la página principal no está establecido.';
$string['check_frontpagerole_ok'] = 'La definición del rol en la página principal es correcta.';
$string['check_guestrole_details'] = '<p>El rol de invitados se emplea para el acceso a cursos para invitados, para usuarios no-identificados y para invitados temporales. Por favor asegúrese que no se permitan permisos riesgosos en este rol.</p>
<p>El único rol heredado soportado para el rol de invitado es <em>Invitado</em>.</p>';
$string['check_guestrole_error'] = '¡El rol de invitado "{$a}" está definido incorrectamente!';
$string['check_guestrole_name'] = 'Rol de invitado';
$string['check_guestrole_notset'] = 'El ron de invitado no está configurado.';
$string['check_guestrole_ok'] = 'La definición del rol de invitado es correcta.';
$string['check_mediafilterswf_details'] = '<p> La incrustación automática de archivos SWF es muy peligrosa - Cualquier usuario registrado puede lanzar un ataque XSS contra otros usuarios del servidor. Por favor, desactivarla en los servidores de producción. </p>';
$string['check_mediafilterswf_error'] = 'El filtro para archivos multimedia de Flash está habilitado - esto es muy peligroso en la mayoría de los servidores.';
$string['check_mediafilterswf_name'] = 'Habilitado el filtro .swf';
$string['check_mediafilterswf_ok'] = 'El filtro para archivos multimedia Flash no está activado.';
$string['check_nodemodules_details'] = '<p>El directorio <code>{$a->path}</code> contiene módulos Node.js y sus dependencias, típicamente instalados por la utilidad NPM. Estos módulos podrían ser necesarios para el desarrollo local de Moodle, como por ejemplo al usar el framework grunt. No son necesarios para correr un sitio Moodle y podrían contener código potencialmente peligroso que exponga su sitio a ataques remotos.</p><p>Se recomienda encarecidamente que quite el directorio si el sitio está disponible vía una URL pública, o cuando menos que prohíba el acceso web a él en su configuración del servidor web.</p>';
$string['check_nodemodules_info'] = 'El directorio node_modules no debería estar presente en sitios públicos.';
$string['check_nodemodules_name'] = 'Directorio de módulos Node.js';
$string['check_openprofiles_details'] = 'Los perfiles de usuario abiertos pueden ser explotados por spammers. Se recomienda que habilite una de estas dos opciones: <code>Forzar a los usuarios a que se identifiquen para ver perfiles</code> o  <code>Forzar a los usuarios a identificarse</code>.';
$string['check_openprofiles_error'] = 'Cualquier persona puede ver los perfiles de usuarios sin autenticarse';
$string['check_openprofiles_name'] = 'Abrir perfiles de usuario';
$string['check_openprofiles_ok'] = 'Se requiere identificación antes de ver los perfiles de usuario.';
$string['check_passwordpolicy_details'] = '<p>Se recomienda establecer una política de contraseñas, ya que adivinar contraseñas en muchas ocasiones es la forma más sencilla de conseguir el acceso no-autorizado.
N ponga unos requisitos demasiado estrictos, ya que puede ocurrir que los usuarios no puedan recordar sus contraseñas y entonces las olviden o las escriban en un lugar visible.</p>';
$string['check_passwordpolicy_error'] = 'No se ha configurado la política de contraseñas.';
$string['check_passwordpolicy_name'] = 'Política de contraseñas';
$string['check_passwordpolicy_ok'] = 'Política de contraseñas habilitada.';
$string['check_preventexecpath_details'] = '<p>El permitir que las rutas hacia los ejecutables sean configuradas mediante la Interfase Gráfica del Usuario es un vector para escalamiento de privilegios. Esto debe estar forzado en config.php:</p><p><code>$CFG->preventexecpath = true;<code></p>';
$string['check_preventexecpath_name'] = 'Rutas hacia ejecutables';
$string['check_preventexecpath_ok'] = 'Las rutas hacia ejecutables solamente son configurables en config.php.';
$string['check_preventexecpath_warning'] = 'Las rutas hacia ejecutables pueden configurarse en la Interfaz Gráfica del Usuario Administrador.';
$string['check_publicpaths_403'] = '(Devolvió un 403, lo ideal sería un 404)';
$string['check_publicpaths_generic'] = '{$a} archivos no deberían ser públicos';
$string['check_publicpaths_name'] = 'Comprobar todas las rutas públicas / privadas';
$string['check_riskadmin_detailsok'] = '<p>Por favor, compruebe la siguiente lista de los administradores del sistema:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Por favor verifique la lista siguiente de administradores del sistema:</p>{$a->admins} <p> Se recomienda que solamente se asigne el rol de administrador en el contexto de sistema. Los siguientes usuarios tienen asignaciones de rol de administrador (no soportadas) en otros contextos:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Administradores';
$string['check_riskadmin_ok'] = 'Se han encontrado {$a} administrador/es del sistema';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) revisar asignación de rol</a>';
$string['check_riskadmin_warning'] = 'Se encontraron {$a->admincount} administradores del servidor y {$a->unsupcount}  asignaciones de rol admin no-soportadas.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Estas sustituciones activas dan a los usuarios la habilidad para incluir datos de usuarios dentro de los respaldos. Por favor, asegúrese que este permiso sea estrictamente necesario.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Los siguientes roles del sistema actualmente les permiten a los usuarios incluir datos de usuarios dentro de los respaldos. Por favor, asegúrese que este permiso sea estrictamente necesario.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>Debido a los roles de más nivel o a las sutituciones locales, las siguientes cuentas de usuarios actualmente tienen permisos para realizar copias de seguridad conteniendo datos privados de cualquier usuario inscrito en estos cursos. Asegúrese de cumplir la normativa nacional para datos personales, que estos usuarios sean de confianza y estén protegidos por contraseñas seguras:</p> {$a}';
$string['check_riskbackup_detailsok'] = 'Ningún rol permite explícitamente respaldar datos de usuario. Sin embargo, observe que los administradores con la capacidad de \'hacer todo\' (doanything) es probable que puedan hacer esto.';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} en {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Copia de seguridad de datos de usuario';
$string['check_riskbackup_ok'] = 'Ningún rol explicitamente permite respaldar datos de usuarios';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) en {$a->contextname}</a>';
$string['check_riskbackup_warning'] = 'Se encontraron {$a->rolecount} roles, {$a->overridecount} sustituciones y  {$a->usercount} usuarios con la habilidad para respaldar datos de usuarios.';
$string['check_riskxss_details'] = '<p>RISK_XSS indicatodas las capacidades peligrosas que solamente deberían usar los usuarios de confianza.</p> <p>Por favor verifique la siguiente lista de usuarios y asegúrese de que confía en ellos completamente en este servidor:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'Usuarios de confianza XSS';
$string['check_riskxss_warning'] = 'RISK_XSS - encontró a {$a} usuarios que deberían ser de confianza.';
$string['check_unsecuredataroot_details'] = 'El directorio \'dataroot\' no debe ser accesible vía web. La mejor manera de asegurarse de que el directorio no es accesible es utilizar un directorio fuera del directorio web público. Si se mueve el directorio, es necesario actualizar el ajuste <code>$CFG->dataroot</code> en <code>config.php</code> en consecuencia. </p>';
$string['check_unsecuredataroot_error'] = '!Su directorio dataroot <code>{$a}</code> ¡ está en el lugar equivocado y está expuesto a la web!';
$string['check_unsecuredataroot_name'] = 'Directorio dataroot inseguro';
$string['check_unsecuredataroot_ok'] = 'El directorio de datos (normalmente /moodledata) no debe ser accesible desde la web';
$string['check_unsecuredataroot_warning'] = '!Su directorio dataroot <code>{$a}</code> ¡ está en el lugar equivocado y puede estar expuesto a la web!';
$string['check_vendordir_details'] = '<p>El directorio <code>{$a->path}</code> contiene varias librerías de terceros y sus dependencias, típicamente instaladas por el PHP Composer. Estas librerías podrían ser necesarias para el desarrollo local de Moodle, como por ejemplo para instalar el PHPUnit framework. No son necesarias para correr un sitio Moodle en producción y podrían contener código potencialmente peligroso, que expondría su sitio a ataques remotos.</p><p>Se recomienda encarecidamente que quite el directorio si el sitio está disponible vía una URL pública, o cuando menos que prohíba el acceso web a él en su servidor web.</p>';
$string['check_vendordir_info'] = 'El directorio del vendedor no debería estar presente en sitios públicos.';
$string['check_vendordir_name'] = 'Directorio del vendedor';
$string['check_webcron_details'] = '<p>El ejecutar el cron por web puede exponer información privilegiada a usuarios anónimos. Se recomienda usar el cron solamente mediante la Interfaz por Línea de Comando (CLI) o configurar una contraseña del cron para el acceso remoto.</p>';
$string['check_webcron_name'] = 'Cron por web';
$string['check_webcron_ok'] = 'Los usuarios anónimos no pueden acceder al cron.';
$string['check_webcron_warning'] = 'Los usuarios anónimos pueden acceder al cron.';
$string['configuration'] = 'Configuración';
$string['description'] = 'Descripción';
$string['details'] = 'Detalles';
$string['eventreportviewed'] = 'Informe de revisión de seguridad visto';
$string['issue'] = 'Tema';
$string['pluginname'] = 'Información sobre seguridad';
$string['privacy:metadata'] = 'El complemento de Vista general de seguridad no almacena ningún dato personal.';
$string['security:view'] = 'Ver informe de seguridad';
$string['timewarning'] = 'El procesamiento de datos puede tardar mucho tiempo, por favor esperar...';
