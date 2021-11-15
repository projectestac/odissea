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
 * Strings for component 'repository', language 'es', version '3.11'.
 *
 * @package     repository
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessiblefilepicker'] = 'Selector de archivos accesibles';
$string['activaterep'] = 'Repositorios activos';
$string['activerepository'] = 'Plugins de repositorio disponibles';
$string['activitybackup'] = 'Copia de seguridad de la actividad';
$string['add'] = 'Agregar';
$string['addfile'] = 'Agregar...';
$string['addfiletext'] = 'Añadir fichero';
$string['addplugin'] = 'Agregar un plugin de repositorio';
$string['aliaseschange'] = 'Hay {$a} enlaces hacia este archivo. Si continua, las localizaciones que actualmente enlazan al archivo serán automáticamente actualizadas para usar una copia del archivo en lugar del archivo.';
$string['allowexternallinks'] = 'Permitir enlaces externos';
$string['areacategoryintro'] = 'Introducción de la categoría';
$string['areacourseintro'] = 'Introducción del curso';
$string['areacourseoverviewfiles'] = 'Imagen del curso';
$string['areamainfile'] = 'Archivo principal';
$string['arearoot'] = 'Sistema';
$string['areauserbackup'] = 'Copia de seguridad del usuario';
$string['areauserdraft'] = 'Borradores';
$string['areauserpersonal'] = 'Archivos privados';
$string['areauserprofile'] = 'Perfil';
$string['attachedfiles'] = 'Archivos adjuntos';
$string['attachment'] = 'Adjunto';
$string['author'] = 'Autor';
$string['automatedbackup'] = 'Copias de seguridad automatizadas';
$string['back'] = 'Atrás';
$string['backtodraftfiles'] = 'Volver a gestor de archivos en borrador';
$string['cachecleared'] = 'Los archivos en caché son eliminados';
$string['cacheexpire'] = 'Expiración del caché';
$string['cannotaccessparentwin'] = 'Al usar HTTPS, el repositorio no se actualiza automáticamente. En su lugar, necesita volver al selector de archivos y seleccionar nuevamente el repositorio.';
$string['cannotdelete'] = 'No se puede eliminar este archivo.';
$string['cannotdownload'] = 'No se puede descargar este archivo.';
$string['cannotdownloaddir'] = 'No se puede descargar este directorio.';
$string['cannotinitplugin'] = 'Error en la llamada a plugin_init';
$string['cannotunzipcontentunreadable'] = 'No se puede descomprimir este archivo porque no se pueden leer los contenidos del archivo.';
$string['cannotunzipextractfileerror'] = 'No se puede descomprimir este archivo porque uno o más de sus archivos no se pueden leer.';
$string['cannotunzipquotaexceeded'] = 'No se puede descomprimir este archivo porque se excederá el tamaño máximo permitido en esta área de borradores.';
$string['choosealink'] = 'Seleccione un enlace...';
$string['chooselicense'] = 'Seleccionar licencia';
$string['chooselicense_help'] = 'Siga estos enlaces para más información sobre las opciones disponibles de licencia:';
$string['cleancache'] = 'Limpiar mis archivos en caché';
$string['close'] = 'Cerrar';
$string['commonrepositorysettings'] = 'Ajustes comunes del repositorio';
$string['configallowexternallinks'] = 'Esta opción les permite a todos los usuarios elegir si los medios externos se copiarán a Moodle o no. Si está apagada, entonces los medios siempre se copian a Moodle (generalmente es lo mejor para la integridad de datos y seguridad). Si está encendida entonces los usuarios pueden elegir cada vez que añadan medios a un texto.';
$string['configcacheexpire'] = 'Cantidad de tiempo (en segundos) que los listados de archivos están en caché local cuando se navega por repositorios externos.';
$string['configgetfiletimeout'] = 'Tiempo de espera en segundos para la descarga del fichero externo en Moodle.';
$string['configsaved'] = 'Configuración guardada.';
$string['configsyncfiletimeout'] = 'Tiempo de espera en segundos para la sincronización del tamaño del fichero externo.';
$string['configsyncimagetimeout'] = 'Tiempo de espera en segundos para la descarga de un fichero de imagen de un repositorio externo durante la sincronización.';
$string['confirmdelete'] = '¿Está seguro de que desea eliminar este repositorio {$a}?

Si selecciona "Continuar y descargar", los archivos referidos a contenidos externos se descargaran a Moodle, pero este proceso llevará tiempo.';
$string['confirmdeletefile'] = '¿Está seguro de que desea eliminar este archivo?';
$string['confirmdeletefilewithhref'] = '¿Está seguro de que desea eliminar este archivo? Hay {$a} enlaces hacia este archivo. Si continua, las localizaciones que actualmente enlazan al archivo serán automáticamente actualizadas para usar una copia del archivo en lugar del archivo.';
$string['confirmdeletefolder'] = '¿Está seguro que quiere eliminar esta carpeta? Todos los archivos y las subcarpetas se eliminarán.';
$string['confirmdeleteselectedfile'] = '¿Está seguro de que quiere eliminar {$a} archivo/s seleccionado/s?';
$string['confirmremove'] = '¿Está seguro de que desea eliminar este plugin de repositorio, sus opciones y <strong>todas sus instancias</strong> - {$a}? Si selecciona "Continuar y descargar", los archivos refereridos a contenidos externos se descargarán a Moodle. Este proceso puede llevar bastante tiempo.';
$string['confirmrenamefile'] = '¿Está seguro de que quiere renombrar/mover este archivo?';
$string['confirmrenamefolder'] = '¿Está seguro de que quiere mover/renombrar esta carpeta? Cualquier localización que haga referencia a esta carpeta será actualizada de manera automática para utilizar copias del archivo en su lugar.';
$string['continueuninstall'] = 'Continuar';
$string['continueuninstallanddownload'] = 'Continuar y descargar';
$string['copying'] = 'Copiando';
$string['coursebackup'] = 'Copias de seguridad del curso';
$string['create'] = 'Crear un repositorio';
$string['createfolder'] = 'Crear carpeta';
$string['createfolderfail'] = 'Error al crear este directorio';
$string['createfoldersuccess'] = 'Directorio creado con éxito';
$string['createinstance'] = 'Crear una instancia de repositorio';
$string['createrepository'] = 'Crear una instancia de repositorio';
$string['createxxinstance'] = 'Crear una instancia de repositorio "{$a}"';
$string['date'] = 'Fecha';
$string['datecreated'] = 'Creado';
$string['deleted'] = 'Repositorio eliminado';
$string['deleterepository'] = 'Eliminar este repositorio';
$string['detailview'] = 'Ver detalles';
$string['dimensions'] = 'Dimensiones';
$string['disabled'] = 'Deshabilitado';
$string['displayasdetails'] = 'Mostrar como detalles de archivo';
$string['displayasicons'] = 'Mostrar como iconos de archivo';
$string['displayastree'] = 'Mostrar como árbol de archivos';
$string['displaydetails'] = 'Mostrar la carpeta con el detalle de los archivos';
$string['displayicons'] = 'Mostrar la carpeta con los iconos de los archivos';
$string['displaytree'] = 'Mostrar la carpeta en forma de árbol de archivos';
$string['download'] = 'Descargar';
$string['downloadallfiles'] = 'Descargar todos los ficheros';
$string['downloadfolder'] = 'Descargar todo';
$string['downloadsucc'] = 'Este archivo se ha descargado con éxito';
$string['draftareanofiles'] = 'No se puede descargar porque no hay archivos adjuntos';
$string['editrepositoryinstance'] = 'Editar una instancia de repositorio';
$string['emptylist'] = 'Lista vacía';
$string['emptytype'] = 'No se puede crear el tipo de repositorio: el nombre del tipo está vacío';
$string['enablecourseinstances'] = 'Permitir a los usuarios agregar una instancia de repositorio dentro del curso';
$string['enableuserinstances'] = 'Permitir a los usuarios agregar una instancia de repositorio dentro del contexto del usuario';
$string['enter'] = 'Entrar';
$string['entername'] = 'Por favor, escriba el nombre del directorio';
$string['enternewname'] = 'Por favor, escriba el nombre del nuevo archivo';
$string['error'] = 'Ha ocurrido un error desconocido.';
$string['errordoublereference'] = 'No se puede sobrescribir el archivo con un enlace porque ya existen enlaces a este archivo.';
$string['errornotyourfile'] = 'Sólo puede seleccionar archivos que haya añadido usted.';
$string['errorpostmaxsize'] = 'El archivo que intentó subir pesa mucho para poder ser procesado por el servidor';
$string['erroruniquename'] = 'El nombre del repositorio debe ser único';
$string['errorwhilecommunicatingwith'] = 'Error mientras se comunicaba con el repositorio \'{$a}\'.';
$string['errorwhiledownload'] = 'Se produjo un error al descargar el archivo: {$a}';
$string['existingrepository'] = 'El repositorio ya existe';
$string['federatedsearch'] = 'Búsqueda federada';
$string['fileexists'] = 'Nombre de archivo ya usado. Por favor, use otro nombre';
$string['fileexistsdialog_editor'] = 'Un archivo con ese nombre ha sido anexado al texto que Usted está editando';
$string['fileexistsdialog_filemanager'] = 'Ya ha sido anexado un archivo con ese nombre';
$string['fileexistsdialogheader'] = 'El archivo existe';
$string['filename'] = 'Nombre del archivo';
$string['filenotnull'] = 'Debe seleccionar un archivo para subir';
$string['filepicker'] = 'Selector de archivos';
$string['filesaved'] = 'El archivo ha sido guardado';
$string['filesizenull'] = 'No se puede determinar el tamaño del archivo';
$string['folderexists'] = 'El nombre para la carpeta ya está empleado, por favor use otro nombre';
$string['foldernotfound'] = 'Carpeta no encontrada';
$string['folderrecurse'] = 'La carpeta no puede moverse a su propia subcarpeta.';
$string['getfile'] = 'Seleccionar este archivo';
$string['getfiletimeout'] = 'Obtener tiempo de espera del fichero';
$string['help'] = 'Ayuda';
$string['iconview'] = 'Ver como iconos';
$string['imagesize'] = '{$a->width} x {$a->height} px';
$string['instance'] = 'instancia';
$string['instancedeleted'] = 'Instancia de repositorio eliminada';
$string['instances'] = 'Instancias de repositorio';
$string['instancesforcourses'] = '{$a} Repositorio(s) común(es) de todo el curso';
$string['instancesforsite'] = '{$a} Repositorio(s) común(es) de todo el curso';
$string['instancesforusers'] = '{$a} Repositorio(s) de usuario privado';
$string['invalidfiletype'] = 'El tipo de archivo {$a} no se acepta.';
$string['invalidjson'] = 'Cadena JSON no válida';
$string['invalidparams'] = 'Parámetros no válidos';
$string['invalidplugin'] = 'Plugin {$a} de repositorio no válido';
$string['invalidrepositoryid'] = 'ID de repositorio no válido';
$string['isactive'] = '¿Activo?';
$string['keyword'] = 'Clave';
$string['lastmodified'] = 'Última modificación';
$string['license'] = 'Licencia';
$string['linkexternal'] = 'Enlace externo';
$string['listview'] = 'Ver como lista';
$string['loading'] = 'Cargando...';
$string['login'] = 'Iniciar sesión con su cuenta';
$string['logintoaccount'] = 'Inicie sesión en su cuenta de {$a}';
$string['logout'] = 'Salir';
$string['lostsource'] = 'Error. Falta el orígen. {$a}';
$string['makefilecontrolledlink'] = 'Crear un enlace de acceso controlado al archivo';
$string['makefileinternal'] = 'Hacer una copia del archivo';
$string['makefilelink'] = 'Enlazar al archivo externo';
$string['makefilereference'] = 'Enlazar al archivo';
$string['manage'] = 'Gestionar repositorios';
$string['manageinstances'] = 'Administrar instancias';
$string['manageurl'] = 'Gestionar';
$string['manageuserrepository'] = 'Gestionar repositorio individual';
$string['missingsourcekey'] = 'No se encuentra la clave de origen. Esta clave también debe ser proporcionada para recuperar el archivo.';
$string['moving'] = 'Moviendo';
$string['name'] = 'Nombre';
$string['newfolder'] = 'Nueva carpeta';
$string['newfoldername'] = 'Nuevo nombre de la carpeta';
$string['noenter'] = 'No se ha escrito nada';
$string['nofilesattached'] = 'No se han adjuntado archivos';
$string['nofilesavailable'] = 'No hay archivos disponibles';
$string['nofilesselected'] = 'Sin archivos seleccionados';
$string['nolicenses'] = 'No hay licencias disponibles';
$string['nomorefiles'] = 'No se permiten más adjuntos';
$string['nopathselected'] = 'Aún no se ha seleccionado una ruta de destino (haga doble clic en el nodo del árbol para seleccionar)';
$string['nopermissiontoaccess'] = 'No tiene permiso para acceder a este repositorio.';
$string['norepositoriesavailable'] = 'Lo sentimos, ninguno de sus repositorios actuales puede devolver archivos en el formato solicitado.';
$string['norepositoriesexternalavailable'] = 'Lo sentimos, ninguno de sus repositorios actuales puede devolver archivos externos.';
$string['noresult'] = 'No hay resultados de la búsqueda';
$string['notyourinstances'] = 'No puede ver ni editar repositorios de otro usuario';
$string['off'] = 'Activado pero oculto';
$string['on'] = 'Activado y visible';
$string['openpicker'] = 'Seleccione un archivo...';
$string['operation'] = 'Operación';
$string['original'] = 'Original';
$string['originalextensionchange'] = 'La extensión original del archivo ha sido modificada como parte del cambio de nombre del archivo. Cambiar la extensión de ".{$a->originalextension}" a ".{$a->newextension}"  podría causar que un archivo ya no pueda ser abierto.';
$string['originalextensionremove'] = 'La extensión original del archivo ha sido eliminada como parte del cambio de nombre del archivo. Eliminar la extensión ".{$a}" probablemente dará como resultado un archivo que no pueda ser abierto.';
$string['overwrite'] = 'Sobrescribir';
$string['overwriteall'] = 'Sobrescribir todo';
$string['path'] = 'Ruta';
$string['plugin'] = 'Plugins de repositorio';
$string['pluginerror'] = 'Errores en el plugin del repositorio';
$string['pluginname'] = 'Nombre de la extensión de repositorio';
$string['pluginnamehelp'] = 'Si deja esto vacío, se usará el nombre predeterminado';
$string['popup'] = 'Pulse en el botón "Entrar" para iniciar sesión';
$string['popupblockeddownload'] = 'La ventana de descarga está bloqueada. Por favor, permita ventanas emergentes y vuelva a intentarlo.';
$string['preview'] = 'Vista previa';
$string['privacy:metadata:repository'] = 'El componente de Repositorio almacena los tipos de repositorio dentro del subsistema del núcleo.';
$string['privacy:metadata:repository_instances'] = 'El componente de plugins de Repositorio almacena datos de las instancias del repositorio de usuarios dentro del subsistema del núcleo.';
$string['privacy:metadata:repository_instances:name'] = 'El nombre personalizado de la instancia del repositorio.';
$string['privacy:metadata:repository_instances:password'] = 'La contraseña opcional configurada para la instancia del repositorio.';
$string['privacy:metadata:repository_instances:timecreated'] = 'La fecha/hora de creación para la instancia del repositorio.';
$string['privacy:metadata:repository_instances:timemodified'] = 'La fecha/hora de modificación para la instancia del repositorio.';
$string['privacy:metadata:repository_instances:typeid'] = 'El tipo de ID de la instancia del repositorio.';
$string['privacy:metadata:repository_instances:userid'] = 'El ID del usuario propietario de la instancia de repositorio.';
$string['privacy:metadata:repository_instances:username'] = 'El nombre de usuario opcional configurado para la instancia del repositorio.';
$string['privatefilesof'] = '{$a} Archivos privados';
$string['readonlyinstance'] = 'No puede editar ni eliminar un repositorio de sólo lectura';
$string['referencesexist'] = 'Existen {$a} enlaces a este archivo';
$string['referenceslist'] = 'Enlaces';
$string['refresh'] = 'Refrescar';
$string['refreshnonjsfilepicker'] = 'Por favor, cierre esta ventana y refresque el selector de archivos no-javascript';
$string['removed'] = 'Repositorio eliminado';
$string['renameall'] = 'Renombrar todo';
$string['renameto'] = 'Cambiar el nombre a "{$a}"';
$string['repositories'] = 'Repositorios';
$string['repository'] = 'Repositorio';
$string['repositorycourse'] = 'Repositorios del curso';
$string['repositoryerror'] = 'El repositorio remoto devolvió un error: {$a}';
$string['repositoryicon'] = 'Icono repositorio';
$string['save'] = 'Guardar';
$string['saveas'] = 'Guardar como';
$string['saved'] = 'Guardado';
$string['saving'] = 'Guardando';
$string['search'] = 'Buscar';
$string['searching'] = 'Buscar en';
$string['searchrepo'] = 'Buscar repositorio';
$string['sectionbackup'] = 'Copias de seguridad de la sección';
$string['select'] = 'Seleccionar';
$string['setmainfile'] = 'Configurar el archivo principal';
$string['setmainfile_help'] = 'Si hay varios archivos en la carpeta, el archivo principal es el que aparece en la página. Otros archivos tales como imágenes o videos pueden ser incrustados en ella. En el administrador de archivos el archivo principal se muestra con el nombre en negrita.';
$string['settings'] = 'Configuración';
$string['setupdefaultplugins'] = 'Configuración de los plugins de repositorio predeterminados';
$string['siteinstances'] = 'Instancias de repositorios del sitio';
$string['size'] = 'Tamaño';
$string['sourcekeymismatch'] = 'La URL de origen no coincide con la clave de origen.';
$string['submit'] = 'Enviar';
$string['sync'] = 'Sincronizar';
$string['syncfiletimeout'] = 'Tiempo de sincronización del fichero agotado';
$string['syncimagetimeout'] = 'Tiempo de sincronización de la imagen agotado';
$string['thumbview'] = 'Ver en forma de iconos';
$string['title'] = 'Seleccione un archivo...';
$string['type'] = 'Tipo';
$string['typenotvisible'] = 'Tipo no visible';
$string['undisclosedreference'] = '(No revelado)';
$string['undisclosedsource'] = '(No revelado)';
$string['unknownoriginal'] = 'Desconocido';
$string['unknownsource'] = 'Origen desconocido';
$string['unzipped'] = 'Descomprimido con éxito';
$string['upload'] = 'Subir este archivo';
$string['uploading'] = 'Subiendo...';
$string['uploadsucc'] = 'El archivo ha sido subido con éxito';
$string['uselatestfile'] = 'Usar archivo más nuevo';
$string['usenonjsfilemanager'] = 'Abrir gestor de archivos en una nueva ventana';
$string['usenonjsfilepicker'] = 'Abrir el archivo selector en una ventana nueva';
$string['usercontextrepositorydisabled'] = 'Usted no puede editar este repositorio en el contexto del usuario';
$string['wrongcontext'] = 'No puede acceder a este contexto';
$string['xhtmlerror'] = 'Probablemente esté utilizando encabezado XHTML estricto. Algunos componentes YUI no funciona en este modo; por favor deshabilite la opción.';
$string['ziped'] = 'Comprimir carpeta con éxito';
