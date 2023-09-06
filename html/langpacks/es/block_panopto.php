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
 * Strings for component 'block_panopto', language 'es', version '4.1'.
 *
 * @package     block_panopto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['application_key'] = 'Clave de aplicación';
$string['attribute_new_name'] = 'Nuevo nombre de carpeta';
$string['attribute_original_name'] = 'Nombre de la carpeta original';
$string['autoprovision_new_courses'] = 'Aprovisionar automáticamente los cursos recién creados';
$string['autoprovision_off'] = 'No aprovisionar automáticamente los cursos recién creados';
$string['autoprovision_on_block_view'] = 'Provisión automática la primera vez que se visualiza el bloque de Panopto';
$string['back_to_config'] = 'Volver a la configuración';
$string['back_to_course'] = 'Volver al curso';
$string['begin_building_category_structure'] = 'Comenzar a construir la estructura de categorías';
$string['block_global_add_courses'] = 'Añadir cursos de Moodle a Panopto';
$string['block_global_application_key'] = 'Clave de aplicación';
$string['block_global_application_key_desc'] = 'Introducir la clave de la aplicación desde la página de proveedores de identidad de Panopto.';
$string['block_global_build_category_structure'] = 'Sincronizar todas las categorías de Moodle con Panopto';
$string['block_global_hostname'] = 'Nombre de host del servidor Panopto';
$string['block_global_instance_name'] = 'Nombre de la instancia de Moodle';
$string['block_global_panopto_bulk_and_batch_tools'] = 'Herramientas para operaciones masivas y por lotes';
$string['block_global_panopto_folder_and_category_options'] = 'Opciones de carpeta y categoría';
$string['block_global_panopto_http_and_debug_settings'] = 'Http y opciones de depuración';
$string['block_global_panopto_role_options'] = 'Opciones de funciones de Panopto';
$string['block_global_panopto_server_config'] = 'Configuración del servidor Panopto';
$string['block_global_panopto_syncing_options'] = 'Opciones de sincronización de Panopto';
$string['block_global_reinitialize_all_imports'] = 'Reiniciar todas las importaciones de carpetas de Panopto';
$string['block_global_rename_all_folders'] = 'Actualizar todos los nombres de las carpetas de Panopto';
$string['block_global_unprovision_courses'] = 'Desprovisión de carpetas Panopto de cursos Moodle';
$string['block_global_upgrade_all_folders'] = 'Actualice todas las carpetas e importaciones existentes';
$string['block_panopto_any_creator_can_view_folder_settings'] = 'Permitir a todos los usuarios con acceso de creador ver los enlaces de configuración de carpetas de Panopto';
$string['block_panopto_any_creator_can_view_folder_settings_desc'] = 'Cuando se selecciona, cualquier usuario con un rol de Creador en la carpeta puede ver su enlace de configuración. Por defecto, sólo los instructores del curso pueden ver el enlace de configuración del curso.';
$string['block_panopto_anyone_view_recorder_links'] = 'Permitir que todos los roles vean los enlaces de descarga de la grabadora';
$string['block_panopto_anyone_view_recorder_links_desc'] = 'Cuando se selecciona esta opción, los usuarios pueden ver los enlaces de descarga de la grabadora. Por defecto, sólo los usuarios con acceso de creador y/o aprovisionamiento en una carpeta pueden ver los enlaces de descarga.';
$string['block_panopto_async_tasks'] = 'Activar las tareas de sincronización asíncrona (no recomendado)';
$string['block_panopto_async_tasks_desc'] = 'Si se selecciona esta opción, las tareas de inicio de sesión, inscripción, anulación de inscripción, aplicación de categorías y eliminación de usuarios se producen de forma asíncrona. Si se deselecciona esta opción, estas operaciones suceden en el manejador de eventos de forma sincrónica. Como es difícil detectar el fallo a tiempo, no recomendamos esta opción.';
$string['block_panopto_auto_add_block_to_new_courses'] = 'Añadir automáticamente un bloque de Panopto a los nuevos cursos';
$string['block_panopto_auto_add_block_to_new_courses_desc'] = 'Si se selecciona, se insertará automáticamente un bloque de Panopto en todos los cursos nuevos de Moodle.';
$string['block_panopto_auto_provision'] = 'Provisión automática de cursos';
$string['block_panopto_auto_provision_desc'] = 'Esta opción puede configurarse para aprovisionar automáticamente una carpeta de curso de Panopto cuando se crea un curso. Esta opción también puede configurarse para aprovisionar automáticamente un curso cuando el bloque de Panopto se vea por primera vez en él.';
$string['block_panopto_auto_sync_imports'] = 'Conceder permisos automáticamente al importar un curso';
$string['block_panopto_auto_sync_imports_desc'] = 'Cuando se selecciona esta opción, Panopto concede automáticamente permisos de visualización al importar un curso.';
$string['block_panopto_automatic_operation_target_server'] = 'Servidor de destino de funcionamiento automático';
$string['block_panopto_automatic_operation_target_server_desc'] = 'Seleccione el servidor de Panopto al que se destinarán las tareas "Aprovisionar automáticamente nuevos cursos", "Sincronizar usuario al iniciar sesión" y "Aplicar estructura de categorías".';
$string['block_panopto_check_server_interval'] = 'Intervalo de comprobación del estado del servidor';
$string['block_panopto_check_server_status'] = 'Comprobar la salud del servidor antes de cargar el bloque';
$string['block_panopto_creator_mapping'] = 'Mapeo del función del creador';
$string['block_panopto_creator_mapping_desc'] = 'Seleccionar qué roles de curso se establecen como Creadores en las nuevas carpetas de curso de Panopto.';
$string['block_panopto_enforce_category_after_course_provision'] = 'Crear carpetas de categorías en la (re)provisión de cursos';
$string['block_panopto_enforce_category_structure'] = 'Sincronizar categorías nuevas y trasladadas con Panopto';
$string['block_panopto_publisher_mapping'] = 'Mapeo de la función del publicador';
$string['block_panopto_publisher_mapping_desc'] = 'Seleccione qué roles de curso se establecen como publicadores en las nuevas carpetas de curso de Panopto.';
$string['block_panopto_publisher_system_role_mapping'] = 'Roles del sistema con permisos de aprovisionamiento';
$string['block_panopto_publisher_system_role_mapping_desc'] = 'Seleccionar qué roles del sistema pueden aprovisionar nuevas carpetas de cursos de Panopto. La adición de roles a esta configuración puede tener un impacto en el rendimiento de los sistemas más grandes.';
$string['block_panopto_server_number_desc'] = 'Haga clic en "Guardar cambios" para actualizar el número de servidores.';
$string['block_panopto_server_number_name'] = 'Número de servidores Panopto';
$string['block_panopto_sso_sync_type'] = 'Comportamiento de Panopto SSO Sync';
$string['course'] = 'Curso';
$string['course_already_provisioned'] = 'Este curso ya ha sido aprovisionado a carpeta con un Id público de: {$a}.';
$string['course_has_invalid_panopto_data'] = 'El curso Moodle de destino no está asociado a datos válidos de la carpeta Panopto.';
$string['course_name'] = 'Nombre del curso';
$string['course_settings'] = 'Configuración del curso';
$string['creator'] = 'Creador';
$string['creator_help'] = 'Un creador puede crear y editar contenidos en Panopto';
$string['creators'] = 'Creadores';
$string['current_version'] = 'Versión actual: {$a}';
$string['current_version_attr'] = 'Versión actual';
$string['download_recorder'] = 'Descargar grabadora';
$string['fetching_content'] = 'Obtención de contenidos de Panopto...';
$string['links'] = 'Enlaces';
$string['live_sessions'] = 'Sesiones en directo';
$string['minimum_required_version'] = 'Versión mínima requerida: {$a}';
$string['minimum_required_version_attr'] = 'Versión mínima requerida';
$string['missing_moodle_required_version'] = 'El bloque Panopto requiere una versión de Moodle más reciente que {$a->requiredversion}, su versión actual de Moodle es: {$a->currentversion}';
$string['missing_required_version'] = 'La llamada a la API no devolvió una respuesta, esto podría deberse a que el servidor Panopto que intentó utilizar no cumple con la versión mínima requerida para soportar esta versión del Bloque Panopto de Moodle. Esto también podría deberse a que el servidor no está disponible.';
$string['moodle_course_not_exist'] = 'Trasladando la fila al antiguo mapa desplegable, el curso no existía dentro de Moodle.';
$string['name_style_combination'] = '[nombre corto]: [nombre completo]';
$string['name_style_fullname'] = '[nombre completo]';
$string['name_style_shortname'] = '[nombre corto]';
$string['no_access'] = 'No tiene acceso para ver esta carpeta de Panopto.';
$string['no_completed_recordings'] = 'No hay grabaciones finalizadas';
$string['no_course_selected'] = 'Sin carpeta de cursos Panopto seleccionada';
$string['no_creators'] = 'Sin creadores.';
$string['no_folder_associated_with_moodle_id'] = 'No se ha asociado ninguna carpeta Panopto a un curso Moodle con el Id  {$a}';
$string['no_live_sessions'] = 'Sin sesiones en directo';
$string['no_publishers'] = 'Sin publicadores.';
$string['no_server'] = 'No hay servidores configurados para el aprovisionamiento. Póngase en contacto con el administrador del sistema.';
$string['no_users_synced_desc'] = 'Todos los usuarios inscritos en el curso se sincronizarán con Panopto una vez que vean el bloque de Panopto en un curso.';
$string['no_viewers'] = 'Sin visualizadores.';
$string['or'] = 'o';
$string['panopto:addinstance'] = 'Añadir un nuevo bloque de Panopto';
$string['panopto:myaddinstance'] = 'Añadir un nuevo bloque de Panopto a mi página';
$string['panopto:provision_aspublisher'] = 'Provisión como editor publicador';
$string['panopto:provision_asteacher'] = 'Provisión como creador';
$string['panopto:provision_course'] = 'Provisión de un curso';
$string['panopto:provision_multiple'] = 'Aprovisionar varios cursos a la vez';
$string['pluginname'] = 'Panopto';
$string['provision'] = 'Aprovisionar';
$string['provision_course_link_text'] = 'Provisionar un curso';
$string['provision_courses'] = 'Provisionar cursos';
$string['publisher'] = 'Publicador';
$string['publisher_help'] = 'Un publicador puede aprobar los contenidos enviados por los creadores';
$string['publishers'] = 'Publicadores';
$string['unprovisioned'] = 'Este curso aún no ha sido aprovisionado.';
$string['verifying_permission'] = 'Verificación del permiso';
$string['viewers'] = 'Visualizadores';
$string['watch_live'] = 'Ver en directo';
