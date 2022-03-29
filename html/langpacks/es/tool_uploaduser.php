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
 * Strings for component 'tool_uploaduser', language 'es', version '3.11'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Permitir eliminar';
$string['allowrenames'] = 'Permitir renombrar';
$string['allowsuspends'] = 'Permitir suspensión y activación de cuentas';
$string['assignedsysrole'] = 'Sistema asignado en el sistema {$a}';
$string['clidefault'] = 'Por defecto:';
$string['clierrorargument'] = 'El valor del argumento --{$a->name} no es válido. Valores permitidos: {$a->values}';
$string['clifile'] = 'Ruta al fichero CSV con los datos del usuario. Obligatorio.';
$string['clifilenotreadable'] = 'El archivo {$a} no existe o no se puede leer';
$string['clihelp'] = 'Imprimir esta ayuda.';
$string['climissingargument'] = 'El argumento --{$a} es obligatorio';
$string['clititle'] = 'Herramienta de carga de usuario a través de línea de comando.';
$string['clivalidationerror'] = 'Error de validación:';
$string['csvdelimiter'] = 'Separador CSV';
$string['defaultvalues'] = 'Valores por defecto';
$string['deleteerrors'] = 'Eliminar errores';
$string['encoding'] = 'Codificación';
$string['errormnetadd'] = 'No se puede añadir usuarios externos';
$string['errorprefix'] = 'Error:';
$string['errors'] = 'Errores';
$string['examplecsv'] = 'Archivo de texto de ejemplo';
$string['examplecsv_help'] = 'Para usar el archivo de texto de ejemplo, descárguelo y luego ábralo con un editor de texto o de hoja de cálculo. Deje la primera línea sin cambios, luego edite las siguientes líneas (registros) y añada sus datos de usuario, agregando más líneas según sea necesario. Guarde el archivo como CSV y luego cárguelo.

El archivo de texto de ejemplo también se puede utilizar para realizar pruebas, ya que puede obtener una vista previa de los datos del usuario y puede optar por cancelar la acción antes de que se creen las cuentas de usuario.';
$string['infoprefix'] = 'Información:';
$string['invalidtheme'] = 'El tema "{$a}" no está instalado y se ignorará.';
$string['invalidupdatetype'] = 'Esta opción no puede seleccionarse con el tipo de subida/carga elegido.';
$string['invaliduserdata'] = 'Se detectaron datos no válidos para el usuario {$a} y se limpiaron automáticamente.';
$string['linex'] = 'Línea {$a}';
$string['nochanges'] = 'Sin cambios';
$string['notheme'] = 'No hay ningún tema definido para este usuario.';
$string['pluginname'] = 'Subida de usuario';
$string['privacy:metadata'] = 'El complemento de subida de usuarios no almacena ningún dato personal.';
$string['renameerrors'] = 'Errores de renombrado';
$string['requiredtemplate'] = 'Exigido. Puede utilizar sintaxis de plantilla aquí (%l = lastname, %f = firstname, %u = username). Consulte la ayuda para ver detalles y ejemplos.';
$string['rowpreviewnum'] = 'Previsualizar filas';
$string['unassignedsysrole'] = 'Quitado rol en el sistema {$a}';
$string['uploadpicture_baduserfield'] = 'El atributo de usuario especificado no es válido. Por favor, inténtelo de nuevo.';
$string['uploadpicture_cannotmovezip'] = 'No se puede mover el archivo zip a un directorio temporal.';
$string['uploadpicture_cannotprocessdir'] = 'No se pueden procesar ficheros descomprimidos.';
$string['uploadpicture_cannotsave'] = 'No se puede guardar la imagen del usuario {$a}. Compruebe el archivo de imagen original.';
$string['uploadpicture_cannotunzip'] = 'No se puede descomprimir el archivo de imágenes.';
$string['uploadpicture_invalidfilename'] = 'El nombre del archivo de imagen {$a} tiene caracteres no válidos. Se ha omitido.';
$string['uploadpicture_overwrite'] = '¿Sobrescribir las imágenes del usuario?';
$string['uploadpicture_userfield'] = 'Atributo del usuario a utilizar para emparejar imágenes:';
$string['uploadpicture_usernotfound'] = 'El usuario con \'{$a->userfield}\' valor de \'{$a->uservalue}\' no existe. Se pasa por alto.';
$string['uploadpicture_userskipped'] = 'Se ha pasado por alto el usuario {$a} (ya tiene imagen)';
$string['uploadpicture_userupdated'] = 'Imagen actualizada para el usuario {$a}.';
$string['uploadpictures'] = 'Subir imágenes de los usuarios';
$string['uploadpictures_help'] = 'Las imágenes de los usuarios se pueden cargar masivamente mediante un archivo zip. Estos archivos debe ser nombrados en atención al "atributo del usuario" elegido (username, idnumber, id) por ejemplo user1234.jpg para un usuario con nombre de usuario (username) user1234.
Tenga en cuenta que el tamaño del archivo zip no puede superar el límite establecido en la configuración "políticas de sitio" de su sitio Moodle. En cualquier caso, siempre podrá preparar varios paquetes de imágenes comprimidas y subirlas por partes.';
$string['uploaduser:uploaduserpictures'] = 'Subir foto del usuario';
$string['uploadusers'] = 'Subir usuarios';
$string['uploadusers_help'] = 'Los usuarios pueden cargarse (y, opcionalmente, inscribirse en cursos) a través de un archivo de texto. El formato del archivo debe ser el siguiente:

* Cada línea del archivo contiene un registro
* Cada registro es una serie de datos separados por comas (u otros delimitadores)
* El primer registro contiene una lista de nombres de campo que definen el formato del resto del archivo
* Los nombres de campo obligatorios son nombre de usuario, contraseña, nombre, apellido, correo electrónico';
$string['uploaduserspreview'] = 'Previsualizar subida de usuarios';
$string['uploadusersresult'] = 'Resultados de subida de usuarios';
$string['useraccountupdated'] = 'Usuario actualizado';
$string['useraccountuptodate'] = 'Usuario actualizado';
$string['userdeleted'] = 'Usuario eliminado';
$string['userrenamed'] = 'Usuario renombrado';
$string['userscreated'] = 'Usuarios creados';
$string['usersdeleted'] = 'Usuarios eliminados';
$string['usersrenamed'] = 'Usuarios renombrados';
$string['usersskipped'] = 'Usuarios pasados por alto';
$string['usersupdated'] = 'Usuarios actualizados';
$string['usersweakpassword'] = 'Usuarios con contraseña débil';
$string['userthemesnotallowed'] = 'Los temas de usuario no están habilitados, por lo que se ignorarán los incluidos en el archivo de usuarios de carga.';
$string['uubulk'] = 'Seleccionar para operaciones masivas con usuarios';
$string['uubulkall'] = 'Todos los usuarios';
$string['uubulknew'] = 'Nuevos usuarios';
$string['uubulkupdated'] = 'Usuarios actualizados';
$string['uucsvline'] = 'Línea CSV';
$string['uulegacy1role'] = '(Estudiante original) tipo N=1';
$string['uulegacy2role'] = '(Profesor original) tipo N=2';
$string['uulegacy3role'] = '(Profesor no editor original) tipo N=3';
$string['uunoemailduplicates'] = 'Prevenir duplicados de dirección email';
$string['uuoptype'] = 'Tipo de subida';
$string['uuoptype_addinc'] = 'Agregar todo, añadir contador a nombres de usuarios si fuera necesario.';
$string['uuoptype_addnew'] = 'Agregar sólo nuevos, pasar por alto usuarios existentes';
$string['uuoptype_addupdate'] = 'Agregar nuevos y actualizar usuarios existentes';
$string['uuoptype_update'] = 'Actualizar sólo usuarios existentes';
$string['uupasswordcron'] = 'Generado en cron';
$string['uupasswordnew'] = 'Contraseña de nuevo usuario';
$string['uupasswordold'] = 'Contraseña de usuario existente';
$string['uustandardusernames'] = 'Estandarizar nombres de usuario';
$string['uuupdateall'] = 'Sobrescribir con valores del archivo y valores por defecto';
$string['uuupdatefromfile'] = 'Sobrescribir con valores del archivo';
$string['uuupdatemissing'] = 'Rellenar datos ausentes con valores del archivo y valores por defecto';
$string['uuupdatetype'] = 'Detalles de usuario existente';
$string['uuusernametemplate'] = 'Plantilla de nombre de usuario';
$string['warningprefix'] = 'Aviso:';
