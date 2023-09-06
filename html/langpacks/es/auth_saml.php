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
 * Strings for component 'auth_saml', language 'es', version '4.1'.
 *
 * @package     auth_saml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_saml_autologin'] = 'Ingreso Automático SAML';
$string['auth_saml_course_mapping_dsn'] = 'DSN del curso';
$string['auth_saml_course_mapping_sql'] = 'SQL del curso';
$string['auth_saml_course_not_found'] = 'Saml  del curso {$a->course} no encontrado para el usuario  {$a->user}\\n';
$string['auth_saml_coursemapping'] = 'Mapeo de Curso';
$string['auth_saml_courses'] = 'Mapeo de cursos SAML';
$string['auth_saml_courses_description'] = 'Atributo SAML que contiene datos de cursos (por defecto schacUserStatus)';
$string['auth_saml_db_reset_button'] = 'Reiniciar valores a configuraciones de fábrica';
$string['auth_saml_db_reset_error'] = 'Error al reiniciar los valores del plugin SAML';
$string['auth_saml_disable_debugdisplay'] = '* Deshabilitar debugdisplay para ocultar errores en el proceso de entrar/inscribir';
$string['auth_saml_disablejit'] = 'Deshabilitar aprovisionamiento justo-a-tiempo';
$string['auth_saml_disablejit_description'] = 'Actívelo para deshabilitar el aprovisionamiento justo-a-tiempo (JIT). Cuanto JIT está deshabilitado, la cuenta no será creada.';
$string['auth_saml_dosinglelogout'] = 'Desconexión única';
$string['auth_saml_dosinglelogout_description'] = 'Elija esta opción para habilitar la desconexión única. Esta lo sacará de Moodle, del provedor de identificación y de todos los servicios conectados';
$string['auth_saml_duplicated_lms_data'] = 'Los siguientes datos LMS están duplicados:';
$string['auth_saml_duplicated_saml_data'] = 'Los siguientes datos SAML están duplicados:';
$string['auth_saml_error_attribute_course_mapping'] = 'Error en nombres de atributos (índice) del mapeo de tablas del curso. Revise la sintaxis de externalcoursemappingsql';
$string['auth_saml_error_attribute_role_mapping'] = 'Error en nombres de atributos (índice) del mapeo de tablas de roles. Revise la sintaxis de externalcoursemappingsql';
$string['auth_saml_error_authentication_process'] = 'Error en el proceso de autenticación de {$a}';
$string['auth_saml_error_complete_user_data'] = 'No se pudo completar datos de usuario de {$a}';
$string['auth_saml_error_complete_user_login'] = 'No se pudo completar entrada de usuario de {$a}';
$string['auth_saml_error_creating_course_mapping'] = 'Error al crear course_mapping en base de datos de Moodle';
$string['auth_saml_error_creating_role_mapping'] = 'Error al crear role_mapping en base de datos de Moodle';
$string['auth_saml_error_executing'] = 'Error al ejecutar';
$string['auth_saml_error_executing_course_mapping_query'] = 'Error al ejecutar búsqueda de mapeo del curso';
$string['auth_saml_error_executing_role_mapping_query'] = 'Error al ejecutar búsqueda de mapeo del rol';
$string['auth_saml_error_role_not_found'] = 'Error al inscribir. No existe el rol de {$a} en Moodle';
$string['auth_saml_errorbadhook'] = 'Archivo gancho del plugin SAML incorrecto: {$a}';
$string['auth_saml_errorbadlib'] = 'El directorio lib de SimpleSAMLPHP {$a} no es correcto';
$string['auth_saml_errorsamlexternal'] = 'Dice que el mapeo orígen para el curso y el rol deberían de ser externos y, por lo tanto, debe especificar todos los parámetros de las búsquedas DSN y SQL.';
$string['auth_saml_errorsp_source'] = 'El orígen de SimpleSAMLPHP sp {$a} no es correcto';
$string['auth_saml_form_error'] = 'Parece que hay algunos errores en el formato. Por favor, vea debajo para arreglarlos';
$string['auth_saml_ignoreinactivecourses'] = 'Ignorar cursos inactivos';
$string['auth_saml_ignoreinactivecourses_description'] = 'Si no se activa, el plugin va a des-inscribir los cursos \'inactivos\'';
$string['auth_saml_initialize_roles'] = 'Inicializar rol';
$string['auth_saml_jit_not_active'] = 'La cuenta del usuario {\\$a} no existe y está deshabilitado el provisionamiento de último minuto (just-in-time)';
$string['auth_saml_logfile'] = 'Ruta al archivo de bitácora';
$string['auth_saml_logfile_description'] = 'Configurar un nombre de archivo si quiere que se anoten en bitácora los errores del plugin SAML en un archivo diferente al SYSLOG (Use una ruta absoluta o Moodle guardará este archivo en la carpeta moodledata)';
$string['auth_saml_loginusing'] = 'Ingrese aquí usando su nombre de usuario y contraseña';
$string['auth_saml_logo_info'] = 'Descripción de entrada a SAML';
$string['auth_saml_logo_info_description'] = 'Descripciónque se mostrará debajo del botón de entrada a SAML';
$string['auth_saml_logo_path'] = 'Imagen de SAML';
$string['auth_saml_logo_path_description'] = 'Ruta de imagen para el botón de entrada a SAML';
$string['auth_saml_mapping_dsn_description'] = 'Cadena con el nombre del Orígen de los Datos para conectar a la base de datos de mapeo del curso/rol (dsn debe ser una ruta absoluta en caso de estar usando SQLite)';
$string['auth_saml_mapping_dsn_examples'] = 'mysql://moodleuser:moodlepass@localhost/saml_course_mapping
sqlite:/<path-to-db>/mapping.sqlite3
oci8://user:pwd@host/sid
postgresql7://user:pwd@host/sid';
$string['auth_saml_mapping_export'] = 'Exportarlos a un CSV';
$string['auth_saml_mapping_external_warning'] = 'Nota: Cuando la base de datos de mapeo y Moodle sean del mismo tipo, fallará la conexión, por lo que en este caso es mejor usar el modo de mapeo delc urso (coursemapping) interno y previamente descargar todos los datos dentro de la base de datos manualmente.';
$string['auth_saml_mapping_sql_examples'] = 'SELECT field1 as lms_course_id, field2 as saml_course_id, field3 as saml_course_period FROM course_mapping SELECT field1 as lms_role, field2 as saml_role from role_mapping';
$string['auth_saml_missed_data'] = 'Los siguientes datos contienen ciertos atributos faltantes';
$string['auth_saml_not_authorize'] = '{$a} no tiene curso CAV activo';
$string['auth_saml_role'] = 'Mapeo de rol Sistema SAML';
$string['auth_saml_role_mapping_dsn'] = 'DSN del rol';
$string['auth_saml_role_mapping_sql'] = 'SQL del rol';
$string['auth_saml_rolemapping'] = 'Mapeo de Rol';
$string['auth_saml_samlhookfile'] = 'Ruta del archivo gancho';
$string['auth_saml_samlhookfile_description'] = 'Configure una ruta si desea usar un archivo gancho que contenga sus funciones específicas de usted';
$string['auth_saml_samllib'] = 'Ruta a librería de SimpleSAMLPHP';
$string['auth_saml_samllib_description'] = 'Ruta de librería para el ambiente de SimpleSAMLPHP que usted quiere, por ejemplo:  /var/www/sp/simplesamlphp/lib';
$string['auth_saml_sp_source'] = 'Orígen de SimpleSAMLPHP SP';
$string['auth_saml_sp_source_description'] = 'Seleccione el orígen SP que quiera conectar a Moodle (Orígenes están en /config/authsources.php).';
$string['auth_saml_sucess_creating_course_mapping'] = 'Tabla de course_mapping creada en base de datos de Moodle';
$string['auth_saml_sucess_creating_role_mapping'] = 'Tabla de course_role creada en base de datos de Moodle';
$string['auth_saml_supportcourses'] = 'Cursos soporte SAML';
$string['auth_saml_supportcourses_description'] = 'Elija entre Interna o Externa, para que Moodle auto inscriba usuarios a los cursos (Use externa si su mapeo de cursos/roles es una Base de Datos externa)';
$string['auth_saml_syncusersfrom'] = 'Sincronizar usuarios desde módulo';
$string['auth_saml_username'] = 'Mapeo de nombre de usuario SAML';
$string['auth_saml_username_description'] = 'Atributo SAML que es mapeado a nombre d eusuario Moodle - el valor por defecto es eduPersonPrincipalName';
$string['auth_saml_username_not_found'] = 'IdP devolvió un conjunto de datos que no contienen el campo de mapeo de nombre d eusuario SAML ({$a}). Este campo es necesario para entrar al sitio';
$string['auth_samldescription'] = 'Identificación SSO empleando SimpleSAML';
$string['auth_samltitle'] = 'Identificación SAML';
$string['pluginname'] = 'Identificación SAML';
$string['pluginnotenabled'] = '¡Plugin no habilitado!';
$string['syncfromnotenabled'] = 'No se seleccionó plugin externo. SAML no puede sincronizar usuarios por sí mismo.';
$string['unknownplugin'] = 'SAML no sabe como invocar el método sync_users method del plugin especificado:';
