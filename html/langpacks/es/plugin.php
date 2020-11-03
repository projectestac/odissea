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
 * Strings for component 'plugin', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   plugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['availability'] = 'Disponibilidad';
$string['cancelinstallall'] = 'Cancelar nuevas instalaciones ({$a})';
$string['cancelinstallhead'] = 'Cancelando instalación de plugins';
$string['cancelinstallinfo'] = 'Los siguientes plugins no están completamente instalados aún, por lo que su instalación puede ser cancelada. Para hacer esto, la carpeta del plugin debe ser eliminada del servidor ahora. Asegúrese que esto es lo que realmente desea hacer para prevenir la pérdida accidental de datos (tales como sus propias modificaciones de código).';
$string['cancelinstallinfodir'] = 'Carpeta a eliminar: {$a}';
$string['cancelinstallone'] = 'Cancelar esta instalación';
$string['cancelupgradeall'] = 'Cancelar actualizaciones ({$a})';
$string['cancelupgradehead'] = 'Restaurando versiones anteriores de plugins';
$string['cancelupgradeone'] = 'Cancelar esta actualización';
$string['checkforupdates'] = 'Compruebe actualizaciones disponibles';
$string['checkforupdateslast'] = 'Última comprobación realizada el {$a}';
$string['dependencyavailable'] = 'Disponible';
$string['dependencyfails'] = 'Fallido';
$string['dependencyinstall'] = 'Instalar';
$string['dependencyinstallhead'] = 'Instalando dependencias ausentes';
$string['dependencyinstallmissing'] = 'Instalando dependencias ausentes ({$a})';
$string['dependencymissing'] = 'Ausente';
$string['dependencyunavailable'] = 'No disponible';
$string['dependencyupload'] = 'Subir';
$string['dependencyuploadmissing'] = 'Subir ficheros ZIP';
$string['detectedmisplacedplugin'] = 'La extensión "{$a->component}" está instalado en la ubicación incorrecta "{$a->current}"; la ubicación prevista es "{$a->expected}"';
$string['displayname'] = 'Nombre de la extensión';
$string['err_response_curl'] = 'No pudo obtener actualizaciones disponibles - error cURL inesperado.';
$string['err_response_format_version'] = 'Formato de respuesta con versión inesperada. Por favor, trate de revisar nuevamente las actualizaciones disponibles.';
$string['err_response_http_code'] = 'No pudo obtener actualizaciones disponibles - código de respuesta HTTP inesperado.';
$string['filterall'] = 'Mostrar todo';
$string['filtercontribonly'] = 'Mostrar sólo los plugins externos';
$string['filterupdatesonly'] = 'Mostrar sólo las actualizables';
$string['misdepinfoplugin'] = 'Información de Plugin';
$string['misdepinfoversion'] = 'Información de Versión';
$string['misdepsavail'] = 'Dependencias';
$string['misdepsunavail'] = 'Dependencias ausentes no disponibles';
$string['misdepsunavaillist'] = 'No se ha encontrado la versión que cumpla los requisitos de dependencias: {$a}.';
$string['misdepsunknownlist'] = 'No disponible en el directorio de Plugins: <strong>{$a}</strong>.';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'No se han instalado extensiones (plugins) de este tipo';
$string['notdownloadable'] = 'No puede descargarse el paquete';
$string['notdownloadable_help'] = 'El paquete ZIP con la actualización no se puede descargar de forma automática. Por favor, consulte la página de documentación para obtener más ayuda.';
$string['notes'] = 'Notas';
$string['notwritable'] = 'Los archivos de plugins (extensiones) no son escribibles';
$string['notwritable_help'] = 'Los ficheros de los plugins no son modificables por el servidor web. El proceso del servidor web debe tener permiso de escritura a la carpeta de plugins y de todo su contenido. También puede requerirse acceso de escritura a la carpeta raíz del tipo de plugin indicado.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Todos los plugins';
$string['overviewext'] = 'Plugins adicionales';
$string['overviewupdatable'] = 'Actualizaciones disponibles';
$string['packagesdebug'] = 'Salida de depuración habilitada';
$string['packagesdownloading'] = 'Descargando {$a}';
$string['packagesextracting'] = 'Extrayendo {$a}';
$string['packagesvalidating'] = 'Validando {$a}';
$string['packagesvalidatingfailed'] = 'Instalación abortada debido a error de validación';
$string['packagesvalidatingok'] = 'Validación correcta, la instalación puede continuar';
$string['plugincheckall'] = 'Todos los plugins';
$string['plugincheckattention'] = 'Plugins que requieren su atención';
$string['pluginchecknone'] = 'Ningún plugin necesita su atención ahora';
$string['pluginchecknotice'] = 'Esta página muestra las extensiones (plugins) que pueden requerir su atención durante la actualización, tales como nuevos plugins para ser instaladados, plugins para ser actualizados, plugins ausentes, etc. Los plugins adicionales (módulos externos o add-ons) son mostrados si existe una actualización para ellos. Se recomienda que compruebe si hay disponible versiones más recientes de los módulos externos y actualice  su código fuente antes de continuar con esta actualización de Moodle.';
$string['plugindisable'] = 'Deshabilitar';
$string['plugindisabled'] = 'Deshabilitado';
$string['pluginenable'] = 'Habilitar';
$string['pluginenabled'] = 'Habilitado';
$string['release'] = 'Versión';
$string['requiredby'] = 'Requerido por: {$a}';
$string['requires'] = 'Requiere';
$string['rootdir'] = 'Directorio';
$string['settings'] = 'Configuración';
$string['source'] = 'Origen';
$string['sourceext'] = 'Adicional';
$string['sourcestd'] = 'Estándar';
$string['status'] = 'Estado';
$string['status_delete'] = 'Para borrar';
$string['status_downgrade'] = 'Una versión mayor ya está instalada';
$string['status_missing'] = 'Ausente del disco';
$string['status_new'] = 'Para instalarse';
$string['status_nodb'] = 'Ninguna base de datos';
$string['status_upgrade'] = 'Para actualizar';
$string['status_uptodate'] = 'Instalado';
$string['supportedmoodleversions'] = 'Versiones de Moodle soportadas';
$string['systemname'] = 'Identificador';
$string['type_antivirus'] = 'Extensión de Antivirus';
$string['type_antivirus_plural'] = 'Extensiones de antivirus';
$string['type_auth'] = 'Método de identificación';
$string['type_auth_plural'] = 'Extensiones de identificación';
$string['type_availability'] = 'Restricciones disponibles';
$string['type_availability_plural'] = 'Restricciones de acceso';
$string['type_block'] = 'Bloque';
$string['type_block_plural'] = 'Bloques';
$string['type_cachelock'] = 'Manejador de bloqueo de caché';
$string['type_cachelock_plural'] = 'Manejadores de bloqueo de caché';
$string['type_cachestore'] = 'Almacén de caché';
$string['type_cachestore_plural'] = 'Almacenes de caché';
$string['type_calendartype'] = 'Tipo de calendario';
$string['type_calendartype_plural'] = 'Tipos de calendario';
$string['type_coursereport'] = 'Informe de curso';
$string['type_coursereport_plural'] = 'Informes del curso';
$string['type_customfield_plural'] = 'Campos personalizados';
$string['type_dataformat'] = 'Formato de datos';
$string['type_dataformat_plural'] = 'Formatos de datos';
$string['type_editor'] = 'Editor';
$string['type_editor_plural'] = 'Editores';
$string['type_enrol'] = 'Método de matriculación';
$string['type_enrol_plural'] = 'Métodos de matriculación';
$string['type_fileconvertermanage'] = 'Gestionar convertidores de documentos';
$string['type_fileconverter_plural'] = 'Convertidores de documentos';
$string['type_filter'] = 'Filtro';
$string['type_filter_plural'] = 'Filtros de texto';
$string['type_format'] = 'Formato de curso';
$string['type_format_plural'] = 'Formatos de curso';
$string['type_gradeexport'] = 'Método de exportación de calificaciones';
$string['type_gradeexport_plural'] = 'Método de exportación de calificaciones';
$string['type_gradeimport'] = 'Método de importación de calificaciones';
$string['type_gradeimport_plural'] = 'Método de importación de calificaciones';
$string['type_gradereport'] = 'Informe de calificación';
$string['type_gradereport_plural'] = 'Informes del libro de calificaciones';
$string['type_gradingform'] = 'Método de calificación avanzado';
$string['type_gradingform_plural'] = 'Métodos de calificación avanzados';
$string['type_local'] = 'Extensión (plugin) local';
$string['type_local_plural'] = 'Extensiones (plugins) locales';
$string['type_media'] = 'Reproductor multimedia';
$string['type_media_plural'] = 'Reproductores multimedia';
$string['type_message'] = 'Salida de mensajes';
$string['type_message_plural'] = 'Salidas de mensajería';
$string['type_mnetservice'] = 'Servicio MNet';
$string['type_mnetservice_plural'] = 'Servicios MNet';
$string['type_mod'] = 'Módulo';
$string['type_mod_plural'] = 'Módulos de actividad';
$string['type_plagiarism'] = 'Plugin de Prevención del plagio';
$string['type_plagiarism_plural'] = 'Plugins para la prevención de plagio';
$string['type_portfolio'] = 'Portafolio';
$string['type_portfolio_plural'] = 'Portafolios';
$string['type_profilefield'] = 'Tipo de campo de perfil';
$string['type_profilefield_plural'] = 'Tipos de campos de perfiles';
$string['type_qbehaviour'] = 'Comportamiento de pregunta';
$string['type_qbehaviour_plural'] = 'Comportamientos de pregunta';
$string['type_qformat'] = 'Formato de importación/exportación de preguntas';
$string['type_qformat_plural'] = 'Formatos de importación/exportación de preguntas';
$string['type_qtype'] = 'Tipo de pregunta';
$string['type_qtype_plural'] = 'Tipos de preguntas';
$string['type_report'] = 'Informe del sitio';
$string['type_report_plural'] = 'Informes';
$string['type_repository'] = 'Repositorio';
$string['type_repository_plural'] = 'Repositorios';
$string['type_search'] = 'Buscador';
$string['type_search_plural'] = 'Buscadores';
$string['type_theme'] = 'Tema';
$string['type_theme_plural'] = 'Temas';
$string['type_tool'] = 'Herramienta de Administración';
$string['type_tool_plural'] = 'Herramientas de administración';
$string['type_webservice'] = 'Protocolo Webservice';
$string['type_webservice_plural'] = 'Protocolos de servicios Web';
$string['uninstall'] = 'Desinstalar';
$string['uninstallconfirm'] = 'Está apunto de desinstalar la extensión <em>{$a->name}</em>.  Esto eliminará por completo de la base de datos asociada todo lo relacionado con esta extensión, incluyendo su configuración, los registros, los archivos de usuario gestionados por la extensión, etc No hay vuelta atrás y Moodle no crea por si mismo ninguna copia de seguridad de recuperación. ¿Está seguro de que desea continuar?';
$string['uninstalldelete'] = 'Todos los datos relacionados con la extensión  <em>{$a->name}</em> han sido borrados de la base de datos. Para evitar que la extensión se vuelva a instalar automáticamente, ahora debe eliminar manualmente del servidor su carpeta <em>{$a->rootdir}</em>. Moodle no puede eliminarla automáticamente debido a los permisos de escritura.';
$string['uninstalldeleteconfirm'] = 'Todos los datos relacionados con la extensión <em>{$a->name}</em> han sido borrados de la base de datos. Para evitar que la extensión se vuelva a instalar automáticamente, ahora debe eliminar del servidor su carpeta <em>{$a->rootdir}</em>. ¿Quieres eliminar la carpeta de la extensión ahora?';
$string['uninstalldeleteconfirmexternal'] = 'Parece ser que la versión actual de la extensión ha sido obtenida a través de un checkout de un sistema de gestión de código fuente ({$a}). Si elimina la carpeta de la extensión, puede perder importantes modificaciones locales del código. Por favor asegúrese que efectivamente quiere eliminar la carpeta de la extensión antes de continuar.';
$string['uninstallextraconfirmblock'] = 'Hay {$a->instances} instancias de este bloque.';
$string['uninstallextraconfirmenrol'] = 'Hay {$a->instances} instancias de este bloque.';
$string['uninstallextraconfirmmod'] = 'Hay {$a->instances} instancias de este bloque.';
$string['uninstalling'] = 'Desinstalando  {$a->name}';
$string['updateavailable'] = '¡Existe una nueva versión {$a} disponible!';
$string['updateavailable_moreinfo'] = 'Más info...';
$string['updateavailable_release'] = 'Liberado {$a}';
$string['updatepluginconfirm'] = 'Confirmación de la actualización de la extensión';
$string['updatepluginconfirmexternal'] = 'Parece que la versión actual de la extensión se ha obtenido a través del chequeo del sistema de gestión de código fuente ({$a}). Si instala esta actualización, ya no podrá obtener las actualizaciones de extensiones a partir del sistema de gestión de código fuente. Por favor, asegúrese antes de continuar  de que realmente quiere actualizar esta extensión.';
$string['updatepluginconfirminfo'] = 'Usted está a punto de instalar una nueva versión del plugin (extensión) <strong>{$a->name}</strong>. Un paquete ZIP con la versión {$a->version} del plugin será descargado desde <a href="{$a->url}">{$a->url}</a> y será extraído a su instalación de Moodle, para que pueda actualizar su instalación.';
$string['updatepluginconfirmwarning'] = 'Por favor, tenga en cuenta que Moodle no hará automáticamente una copia de seguridad de su base de datos antes de la actualización. Nosotros le recomendamos encarecidamente que haga una copia de seguridad completa (instantánea) ahora, para lidiar con el raro caso en que el nuevo código tuviese defectos que hicieran a su sitio inoperante o inclusive que corrompiera su base de datos. Proceda bajo su propio riesgo.';
$string['validationmsg_componentmatch'] = 'Nombre completo del componente';
$string['validationmsg_componentmismatchname'] = 'Error en el nombre del módulo externo';
$string['validationmsg_componentmismatchname_help'] = 'Algunos paquetes ZIP, como los generados por Github, pueden contener un nombre de directorio raíz incorrecto. Es necesario corregir el nombre del directorio raíz para que coincida con el nombre oficial del módulo externo.';
$string['validationmsg_componentmismatchname_info'] = 'El módulo externo declara que su nombr es \'{$a} pero este no coincide con el nombre del directorio raíz.';
$string['validationmsg_componentmismatchtype'] = 'Error en el tipo de módulo externo';
$string['validationmsg_componentmismatchtype_info'] = 'Ha seleccionado el tipo \'{$a->expected}\' pero el módulo externo declara que es de tipo \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'Archivo extraído no encontrado';
$string['validationmsg_filesnumber'] = 'No se han encontrado suficientes archivos en el paquete';
$string['validationmsg_filestatus'] = 'No es posible extraer los archivos';
$string['validationmsg_filestatus_info'] = 'Al intentar extraer el archivo {$a->file} se obtuvo un error \'{$a->status}\'.';
$string['validationmsg_foundlangfile'] = 'Buscar fichero de idioma';
$string['validationmsglevel_debug'] = 'Depuración';
$string['validationmsglevel_error'] = 'Error';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Advertencia';
$string['validationmsg_maturity'] = 'Nivel de madurez';
$string['validationmsg_maturity_help'] = 'El módulo externo puede declarar su nivel de madurez. Si el desarrollador considera que el módulo es estable, el nivel de madurez declarado leerá MATURITY_STABLE. El resto de los niveles de madurez (como alfa o beta) deben ser considerados inestables y se mostrará una advertencia.';
$string['validationmsg_missingcomponent'] = 'El plugin no declara los nombres de sus componentes';
$string['validationmsg_missingcomponent_help'] = 'Todos los plugins deben proporcionar su';
$string['validationmsg_missingexpectedlangenfile'] = 'Archivo de idioma Inglés perdido';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Al tipo de módulo externo proporcionado le falta el archivo de idioma inglés esperado {$a}.';
$string['validationmsg_missinglangenfile'] = 'No se encuentra el archivo de idioma Inglés';
$string['validationmsg_missinglangenfolder'] = 'No se encuentra el directorio de idioma Inglés';
$string['validationmsg_missingversion'] = 'El módulo externo no declara su versión';
$string['validationmsg_missingversionphp'] = 'Archivo version.php no encontrado';
$string['validationmsg_multiplelangenfiles'] = 'Se han encontrado múltiples archivos de idioma Inglés';
$string['validationmsg_onedir'] = 'Estructura del paquete ZIP no válida.';
$string['validationmsg_onedir_help'] = 'El paquete ZIP debe contener sólo un directorio raíz que contiene el código del módulo externo. El nombre de ese directorio raíz debe coincidir con el nombre de la extensión.';
$string['validationmsg_pathwritable'] = 'Chequeo de permisos de escritura';
$string['validationmsg_pluginversion'] = 'Versión del módulo externo';
$string['validationmsg_release'] = 'Versión del módulo externo';
$string['validationmsg_requiresmoodle'] = 'Versión de Moodle requerida';
$string['validationmsg_rootdir'] = 'Nombre del módulo externo que se debe instalar';
$string['validationmsg_rootdir_help'] = 'El nombre del directorio raíz en el paquete ZIP indica el nombre del módulo externo que se instalará. Si el nombre no es correcto, es posible que desee cambiar el nombre del directorio raíz del paquete ZIP antes de instalar el módulo.';
$string['validationmsg_rootdirinvalid'] = 'Nombre del módulo externo no válido';
$string['validationmsg_rootdirinvalid_help'] = 'El nombre del directorio raíz en el paquete ZIP viola los requisitos formales de sintaxis. Algunos paquetes ZIP, como los generados por Github, pueden contener un nombre de directorio raíz incorrecto. Es necesario corregir el nombre del directorio raíz para que coincida con el nombre del módulo externo.';
$string['validationmsg_targetexists'] = 'La ubicación de destino ya existe y será eliminada';
$string['validationmsg_targetexists_help'] = 'El directorio del plugin ya existe y será eliminado por el contenido del paquete del plugin.';
$string['validationmsg_targetnotdir'] = 'Localización destino ocupada por un fichero';
$string['validationmsg_unknowntype'] = 'Tipo de extensión desconocido';
$string['validationmsg_versionphpsyntax'] = 'Sintaxis no soportada detectada en el fichero version.php';
$string['version'] = 'Versión';
$string['versiondb'] = 'Versión actual';
$string['versiondisk'] = 'Nueva versión';
