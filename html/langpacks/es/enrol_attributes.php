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
 * Strings for component 'enrol_attributes', language 'es', version '4.1'.
 *
 * @package     enrol_attributes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcondition'] = 'Añadir condición';
$string['addgroup'] = 'Añadir grupo';
$string['ajax-error'] = 'Hubo un error';
$string['ajax-okforced'] = 'Listo, {$a} usuarios han sido matriculados';
$string['ajax-okpurged'] = 'Listo, las matriculaciones han sido purgadas';
$string['attributes:config'] = 'Configurar instancias del plugin';
$string['attributes:manage'] = 'Administrar usuarios matriculados';
$string['attributes:unenrol'] = 'Desmatricular usuarios del curso';
$string['attributes:unenrolself'] = 'Desmatricularse del curso';
$string['attrsyntax'] = 'Usar reglas de campos de perfil';
$string['attrsyntax_help'] = '<p>Estas reglas solo pueden usar campos de usuario personalizados.</p>';
$string['cachedef_dbquerycache'] = 'Caché de consulta de la base de datos';
$string['confirmforce'] = 'Esto (re)matriculará a todos los usuarios correspondientes a esta regla.';
$string['confirmpurge'] = 'Esto eliminará todas las matrículas que correspondan a esta regla';
$string['defaultrole'] = 'Rol por defecto';
$string['defaultrole_desc'] = 'Rol predeterminado usado para matricular personas con esta extensión (cada instancia puede modificarlo)';
$string['defaultwhenexpired'] = 'Comportamiento predeterminado después de la expiración de los atributos';
$string['defaultwhenexpired_desc'] = 'Qué hacer con los usuarios que ya no cumplan la regla de atributo. Esta configuración se puede sobrescribir en cada instancia de matriculación.';
$string['deletecondition'] = 'Condición de eliminación';
$string['force'] = 'Forzar matrículas ahora';
$string['group'] = 'Asignación de grupo';
$string['group_help'] = 'Puede asignar múltiples grupos o ninguno';
$string['mappings'] = 'Mapeos de Shibboleth';
$string['mappings_desc'] = 'Cuando se utiliza la autenticación Shibboleth, este plugin puede actualizar automáticamente el perfil de un usuario en cada inicio de sesión.br><br>Por ejemplo, si quiere actualizar la información del campo de perfil de usuario <code>homeorganizationtype</code> con el atributo de Shibboleth <code>Shib-HomeOrganizationType</code> (siempre que sea la variable de entorno disponible para el servidor durante el inicio de sesión), se puede introducir en una línea: <code>Shib-HomeOrganizationType:homeorganizationtype</code><br>Puede introducir tantas líneas como sea necesario.<br><br>Para no utilizar esta función o si no utiliza la autenticación Shibboleth, simplemente deje esto vacío.';
$string['no_custom_field'] = 'Parece que no hay ningún campo personalizado. Diríjase <a href="{$a}" target="_blank">configuraciones de usuario</a> para añadir uno.';
$string['observelogins'] = 'Matricular usuarios inmediatamente al ingresar';
$string['observelogins_desc'] = 'Intente inscribir a los usuarios inmediatamente cuando se conecten. Esto puede tener un impacto en el rendimiento de su sitio, desactive esto si muchos usuarios se conectan al mismo tiempo y su inscripción a la vez se convierte en un cuello de botella.';
$string['pluginname'] = 'Matricular por campos de perfil de usuario';
$string['privacy:metadata'] = 'El plugin de inscripción por campos de perfil de usuario no almacena ningún dato personal.';
$string['profilefields'] = 'Campos del perfil que se utilizarán en el selector';
$string['profilefields_desc'] = '¿Qué campos del perfil de usuario se pueden utilizar al configurar una instancia de inscripción?<br><br><b>Si no selecciona ningún atributo aquí, esto hace que el plugin sea inútil y por lo tanto deshabilita su uso en los cursos.</b><br>Sin embargo, la función que se indica a continuación puede seguir utilizándose en este caso.';
$string['purge'] = 'Purgar las matriculaciones';
$string['removewhenexpired'] = 'Desmatricular después de la expiración de los atributos';
$string['removewhenexpired_help'] = 'Desmatricular a los usuarios durante su ingreso si ya no cumplen con la regla de atributos';
$string['whenexpired'] = 'Comportamiento tras la expiración de los atributos';
$string['whenexpired_help'] = 'Qué hacer con los usuarios que ya no cumplen con la regla de atributos.';
$string['whenexpireddonothing'] = 'Dejar el usuario inscrito';
$string['whenexpiredremove'] = 'Usuario desmatriculado';
$string['whenexpiredsuspend'] = 'Usuario suspendido';
