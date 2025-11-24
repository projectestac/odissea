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
 * Strings for component 'report_security', language 'gl', version '4.5'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_antivirus_details'] = 'Este estado comproba se se detectou ou non un erro recente en función do limiar definido nos axustes principais do antivirus.';
$string['check_antivirus_error'] = 'Detectáronse {$a->errors} erros dentro do último {$a->lookback}';
$string['check_antivirus_info'] = 'Actualmente non hai activado ningún escáner antivirus';
$string['check_antivirus_logstore_not_supported'] = 'Non foi posíbel verificar o estado dos escáneres antivirus por mor do tipo de almacén de rexistros escollido';
$string['check_antivirus_name'] = 'Antivirus';
$string['check_antivirus_ok'] = '{$a->scanners} escáner(es) antivirus activado(s), no se detectou ningún problema no último {$a->lookback}';
$string['check_configrw_details'] = '<p>Recoméndase cambiar os permisos de ficheiro de <code>config.php</code> após a instalación para que o ficheiro non poida ser modificado polo servidor web.
Teña en conta que esta medida non mellora seguridade do servidor de xeito significativo, aínda que pode retardar ou limitar os «exploits» xerais.</p>';
$string['check_configrw_name'] = 'Ficheiro config.php escribíbel';
$string['check_configrw_ok'] = 'O config.php non pode ser modificado por scripts PHP.';
$string['check_configrw_warning'] = 'Os scripts PHP poden modificar o config.php.';
$string['check_cookiesecure_details'] = '<p>De activar a comunicación https, recoméndase permitir o envío de cookies seguras. Debería ter unha redirección permanente de http a https e idealmente servir tamén cabeceiras HSTS.</p>';
$string['check_cookiesecure_error'] = 'Active as cookies seguras';
$string['check_cookiesecure_http'] = 'Debe activar https para poder utilizar cookies seguras';
$string['check_cookiesecure_name'] = 'Cookies seguras';
$string['check_cookiesecure_ok'] = 'As cookies seguras están activadas.';
$string['check_crawlers_details'] = '<p>A opción «Aberto aos motores de busca» permítelles aos motores de busca entrar nos cursos nos que se dá acceso a convidados. Se non se permite o acceso a convidados non ten sentido activar esta opción.</p>';
$string['check_crawlers_error'] = 'Permítese o acceso a motores de busca pero está desactivado o acceso como convidado.';
$string['check_crawlers_info'] = 'Os motores de busca poden entrar como convidados.';
$string['check_crawlers_name'] = 'Aberto aos motores de busca';
$string['check_crawlers_ok'] = 'O acceso dos motores de busca non está activado.';
$string['check_defaultuserrole_details'] = '<p>Todos os usuarios conectados reciben capacidades do rol de usuario predeterminado. Asegúrese de que non se permiten capacidades de risco neste rol.</p>
<p>O único tipo de legado admitido para o rol de usuario predeterminado é o <em>usuario autenticado</em>. Non se debe activar a capacidade de vista do curso.</p>
<p>Comprobe se está activada a opción de aprobación automática de solicitudes de eliminación de datos  (tool_dataprivacy | automaticdatadeletionapproval) . Os usuarios poden solicitar borrados que poderían eliminar grandes cantidades de datos.</p>';
$string['check_defaultuserrole_error'] = 'O rol do usuario predeterminado «{$a}» está incorrectamente definido!';
$string['check_defaultuserrole_name'] = 'Rol predeterminado para todos os usuarios';
$string['check_defaultuserrole_notset'] = 'Non se estabeleceu o rol predeterminado.';
$string['check_defaultuserrole_ok'] = 'O rol predeterminado para todos os usuarios é correcto.';
$string['check_dirindex_info'] = 'Non se debe habilitar o índice de directorios';
$string['check_displayerrors_details'] = '<p>Non se recomenda activar a opción PHP <code>display_errors</code> en sitios en produción xa que algunhas mensaxes de erro poden revelar información sensíbel sobre o seu servidor.</p>';
$string['check_displayerrors_error'] = 'A opción de PHP para presentar errores está activada. Recoméndase que se desactive.';
$string['check_displayerrors_name'] = 'Presentación de erros de PHP';
$string['check_displayerrors_ok'] = 'A presentación de erros de PHP está desactivada.';
$string['check_dotfiles_info'] = 'Todos os ficheiros de punto agás /.well-known/* non deben ser públicos';
$string['check_emailchangeconfirmation_details'] = '<p>Recoméndase que se requira pasar por un correo de confirmación para cambiar o enderezo de correo dos usuarios no seu perfil. De estar desactivado, os emisores de correo lixo tentarán explotar iso no servidor para enviar correo lixo.</p>
<p>O campo de correo tamén se pode bloquear con engadidos de autenticación, esta posibilidade non se considera aquí.</p>';
$string['check_emailchangeconfirmation_error'] = 'Os usuarios poden escribir calquera enderezo de correo.';
$string['check_emailchangeconfirmation_info'] = 'Os usuarios só poden escribir enderezos de correo de dominios permitidos.';
$string['check_emailchangeconfirmation_name'] = 'Confirmación do cambio de correo';
$string['check_emailchangeconfirmation_ok'] = 'Confirmación do cambio do enderezo de correo no perfil de usuario.';
$string['check_embed_details'] = '<p>A incorporación de obxectos sen límite é moi perigosa; calquera usuario rexistrado pode lanzar un ataque XSS contra outros usuarios do servidor. Esta opción debería de desactivarse nos servidores en produción.</p>';
$string['check_embed_error'] = 'Está activada a incorporación de obxectos sen límite; isto é moi perigoso para a maioría de servidores.';
$string['check_embed_name'] = 'Permitir EMBED e OBJECT';
$string['check_embed_ok'] = 'Non se permite a incorporación de obxectos sen límite.';
$string['check_frontpagerole_details'] = '<p>O rol predeterminado de inicio do sitio outórgaselle a todos os usuarios autenticados para as actividades de inicio do sitio. Asegúrese de que non se permiten capacidades de risco para este rol.</p>
<p>Recoméndase que se cree un rol especial para este fin e non se utilice un rol de tipo legado.</p>';
$string['check_frontpagerole_error'] = 'Detectouse un rol de inicio do sitio «{$a}» definido incorrectamente!';
$string['check_frontpagerole_name'] = 'Rol de inicio do sitio';
$string['check_frontpagerole_notset'] = 'O rol de inicio do sitio non está definido';
$string['check_frontpagerole_ok'] = 'O rol de inicio do sitio é correcto.';
$string['check_guestrole_details'] = '<p>O rol de convidado utilízase para convidados, que non teñan iniciado sesión como usuarios e con acceso temporal de convite ao curso. Asegúrese de que non haxa capacidades arriscadas permitidas neste rol.</p>
<p>O único tipo herdado permitido para o rol de convidado é <em>Convidado</em>.</p>';
$string['check_guestrole_error'] = 'O rol do usuario convidado «{$a}» está incorrectamente definido!';
$string['check_guestrole_name'] = 'Rol de convidado';
$string['check_guestrole_notset'] = 'Non se estabeleceu o rol de convidado.';
$string['check_guestrole_ok'] = 'A definición do rol de páxina principal está conforme.';
$string['check_nodemodules_details'] = '<p>O directorio <code>{$a->path}</code> contén módulos Node.js e as súas dependencias, normalmente instalados pola utilidade NPM. Estes módulos poden ser necesarios para o desenvolvemento local de Moodle, ou para o uso do marco de traballo «grunt». Non son necesarios para executar un sitio de Moodle en produción e poden conter código potencialmente perigoso que expón o seu sitio a ataques remotos.</p><p> Recoméndase encarecidamente eliminar o directorio se o sitio está dispoñíbel a través dun URL público, ou polo menos prohibir o acceso web a el na configuración do seu servidor web.</p>';
$string['check_nodemodules_info'] = 'O directorio node_modules non debería estar presente en sitios públicos.';
$string['check_nodemodules_name'] = 'Directorio de módulos Node.js';
$string['check_openprofiles_details'] = '<p>Os perfís abertos pode ser obxecto de abuso por emisores de lixo. Recoméndase que tanto <code>Forzar os usuarios a iniciar sesión para o perfil</code> como <code>Forzar os usuarios para iniciar sesión</code> estean activados.</p>';
$string['check_openprofiles_error'] = 'Calquera pode ver os perfís de usuario sen iniciar sesión.';
$string['check_openprofiles_name'] = 'Perfís de usuario abertos';
$string['check_openprofiles_ok'] = 'Requírese iniciar sesión antes de ver os perfís de usuario.';
$string['check_passwordpolicy_details'] = '<p>Recoméndase que se estabeleza unha directiva de contrasinais, xa que a adiviñación de contrasinal adoita ser o camiño máis sinxelo de acadar acceso sen autorización.
Non facer os requisitos demasiado estritos, pois isto pode resultar en que os usuarios non son quen de lembrar os seus contrasinais ou esqueceríanos ou anotaríanos.</p>';
$string['check_passwordpolicy_error'] = 'Non hai norma de contrasinais.';
$string['check_passwordpolicy_name'] = 'Directiva de contrasinais';
$string['check_passwordpolicy_ok'] = 'Activouse a norma sobre contrasinal.';
$string['check_preventexecpath_details'] = '<p>Permitir configurar rutas executábeis a través da GUI de administración é un vector para a escalada de privilexios. Isto debe forzarse en config.php:</p><p><code>$CFG->preventexecpath = true;</code></p>';
$string['check_preventexecpath_name'] = 'Rutas executábeis';
$string['check_preventexecpath_ok'] = 'As rutas executábeis só poden estabelecerse en config.php.';
$string['check_preventexecpath_warning'] = 'Os camiños executábeis pódense configurar na IGU de administración.';
$string['check_publicpaths_403'] = '(Devolve un 403, o ideal debería ser 404)';
$string['check_publicpaths_generic'] = '{$a} ficheiros non deben ser públicos';
$string['check_publicpaths_name'] = 'Comprobar todas as rutas públicas / privadas';
$string['check_publicpaths_ok'] = 'Todas as rutas internas non son accesíbeis publicamente';
$string['check_publicpaths_warning'] = 'Algunhas rutas internas son de acceso público';
$string['check_riskadmin_detailsok'] = '<p>Comprobe a seguinte lista de administradores do sistema:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Comprobe a seguinte lista de administradores do sistema:</p>{$a->admins}
<p>Recoméndase asignar un rol de administrador soamente no contexto do sistema. Os seguintes usuarios teñen (incompatíbeis) asignación de rol de administración noutros contextos:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Administradores';
$string['check_riskadmin_ok'] = 'Atopouse {$a} administrador(es) do servidor.';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) revisar as asignacións de rol</a>';
$string['check_riskadmin_warning'] = 'Atopouse {$a->admincount} administrador(es) de servidor e {$a->unsupcount} asignacións de rol incompatíbeis.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Esas sobrescrituras activas dánlle aos usuarios a posibilidade de incluír datos de usuario na copia de seguridade. Asegúrese de que este permiso é necesario.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Os seguintes roles do sistema permítenlle aos usuarios incluír datos de usuario nas copias de seguridade. Asegúrese de que este permiso é necesario.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>Debido a roles superiores ou a sobrescrituras locais, as seguintes contas de usuario teñen permiso para facer copias de seguridade que conteñan datos privados de calquera dos usuarios matriculados no seu curso. Asegúrese de que sexan (a) de confianza e (b) teñan contrasinais fortes.:</p> {$a}';
$string['check_riskbackup_detailsok'] = 'Ningún rol permite explicitamente a copia de datos de usuario. No entanto, vexa que os administradores coa capacidade de «facer-calquera-cousa» adoitan ser quen de facelo.';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} en {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Copia de seguranza dos datos de usuario';
$string['check_riskbackup_ok'] = 'Ningún rol permite explicitamente facer unha copia de seguranza de datos de usuario';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) en {$a->contextname}</a>';
$string['check_riskbackup_warning'] = 'Atopáronse {$a->rolecount} roles, {$a->overridecount} sobrescrituras e {$a->usercount} usuarios coa capacidade de facer copia de seguranza de datos de usuario.';
$string['check_riskxss_details'] = '<p>RISK_XSS indica todas as capacidades perigosas que soamente os usuarios deberían usar.</p>
<p>Comprobe a seguinte lista de usuarios e asegúrese de que confía neles completamente neste servidor:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'Usuarios XSS de confianza';
$string['check_riskxss_warning'] = 'RISK_XSS - atopou {$a} usuarios nos que se debería confiar.';
$string['check_unsecuredataroot_details'] = '<p>O cartafol dataroot non debería ser accesíbel vía web. O mellor xeito de se asegurar de que o cartafol non é accesíbel, é utilizar un directorio fóra do cartafol público en web.</p>
<p>Se move o cartafol, necesitará actualizar o <code>$CFG->dataroot</code> axuste en <code>config.php</code> consonte con iso.</p>';
$string['check_unsecuredataroot_error'] = 'O seu cartafol dataroot <code>{$a}</code> está nunha localización inadecuada e está exposto como web!';
$string['check_unsecuredataroot_name'] = 'Dataroot inseguro';
$string['check_unsecuredataroot_ok'] = 'O cartafol dataroot non debe ser accesíbel vía web.';
$string['check_unsecuredataroot_warning'] = 'O seu cartafol dataroot <code>{$a}</code> está nunha localización inadecuada e pode estar exposto como web.';
$string['check_vendordir_details'] = '<p>O directorio <code>{$a->path}</code> contén varias bibliotecas de terceiros e as súas dependencias, normalmente instaladas por PHP Composer. Estas bibliotecas poden ser necesarias para o desenvolvemento local de Moodle, ou para a instalación do marco de traballo PHPUnit. Non son necesarios para executar un sitio de Moodle en produción e poden conter código potencialmente perigoso que expón o seu sitio a ataques remotos.</p><p> Recoméndase encarecidamente eliminar o directorio se o sitio está dispoñíbel a través dun URL público, ou polo menos prohibir o acceso web a el na configuración do seu servidor web.</p>';
$string['check_vendordir_info'] = 'O directorio do vendedor non debería estar presente en sitios públicos.';
$string['check_vendordir_name'] = 'Directorio do vendedor';
$string['check_webcron_details'] = '<p>Executar o cron por web pode expoñer información privilexiada a usuarios anónimos. Recomendase usar o cron soamente mediante a interface por liña de ordes (CLI) ou configurar un contrasinal para do cron para o acceso remoto.</p>';
$string['check_webcron_name'] = 'Cron por web';
$string['check_webcron_ok'] = 'Os usuarios anónimos non poden acceder a cron.';
$string['check_webcron_warning'] = 'Os usuarios anónimos poden acceder a cron.';
$string['configuration'] = 'Configuración';
$string['description'] = 'Descrición';
$string['details'] = 'Detalles';
$string['eventreportviewed'] = 'Viuse o informe de comprobación de seguridade';
$string['issue'] = 'Incidencia';
$string['pluginname'] = 'Comprobacións de seguridade';
$string['privacy:metadata'] = 'O complemento de vista xeral do seguranza non almacena ningún dato persoal.';
$string['security:view'] = 'Ver informe de seguranza';
$string['timewarning'] = 'O procesamento dos datos poder levar un bo anaco, teña paciencia...';
