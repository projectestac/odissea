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
 * Strings for component 'auth_emailadmin', language 'es', version '4.1'.
 *
 * @package     auth_emailadmin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emailadminconfirmationsubject'] = '{$a}: confirmación de la cuenta';
$string['auth_emailadminconfirmsent'] = '<p> Su cuenta ha sido registrada y queda pendiente su confirmación por el administrador. El siguiente paso es que Usted reciba una confirmación o que sea contactado para aclaraciones .</p>';
$string['auth_emailadmindescription'] = '<p>Auto-registro basado en Email con confirmación por el administrador le permite a un usuario crear su  propia cuenta mediante un botón para \'Crear nueva cuenta\' en la página de ingreso al sitio. Los administradores del sitio entonces reciben un Email que contiene un enlace seguro hacia una página en donde ellos pueden confirmar la cuenta. Los ingresos futuros solamente revisan el nombre_de_usuario y la contraseña contra los valores almacenados en la BasedeDatos de Moodle.</p><p>Nota: Además de habilitar el plugin, debe de seleccionarse el auto-registro con confirmación por el administrador del menú desplegable para auto-registro en la página de \'Gestionar autenticación\'.</p>';
$string['auth_emailadminnoadmin'] = 'No se encontraron administradores en la estrategia de notificación. Por favor revise la configuración de auth_emailadmin.';
$string['auth_emailadminnoemail'] = '¡Trató de enviarle un Email pero falló!';
$string['auth_emailadminnotif_failed'] = 'No pudo enviarse notificación de registro a:';
$string['auth_emailadminnotif_strategy'] = 'Define la estrategia para mandar las notificaciones de registro. Las opciones disponibles son "primer" usuario administrador, "todos" los usuarios administradores o un usuario administrador específico.';
$string['auth_emailadminnotif_strategy_all'] = 'Todos los usuarios administradores';
$string['auth_emailadminnotif_strategy_allupdate'] = 'Todos los administradores y usuarios con capacidad para actualizar usuario';
$string['auth_emailadminnotif_strategy_first'] = 'Primer usuario administrador';
$string['auth_emailadminnotif_strategy_key'] = 'Estrategia de notificación:';
$string['auth_emailadminrecaptcha'] = 'Añade un elemento de formato de confirmación visual/audio a la página de registro para los usuarios que se auto-registran por Email. Esto protege a su sitio de spammmers y contribuye a una buena causa. Vea http://www.google.com/recaptcha/learnmore para más detalles. <br /><em>Se requiere la extensión PHP cURL.</em>';
$string['auth_emailadminrecaptcha_key'] = 'Habilitar elemento reCAPTCHA';
$string['auth_emailadminsettings'] = 'Configuraciones';
$string['pluginname'] = 'Auto registro por Email con confirmación del administrador';
