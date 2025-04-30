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
 * Strings for component 'tool_moodlenet', language 'es', version '4.4'.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingaresource'] = 'Añadiendo contenido desde MoodleNet';
$string['aria:enterprofile'] = 'Introduzca su ID del perfil de MoodleNet';
$string['aria:footermessage'] = 'Buscar contenido en MoodleNet';
$string['autoenablenotification'] = '<p>A partir de Moodle 4.0, la integración de <a href="https://moodle.net/">MoodleNet</a> está habilitada de forma predeterminada en las funciones avanzadas. Los usuarios con la capacidad de crear y administrar actividades pueden explorar MoodleNet a través del selector de actividades e importar recursos de MoodleNet a sus cursos.</p><p>Si lo desea, se puede especificar una instancia alternativa de MoodleNet en <a href="{$ a->settingslink}">Configuración de entrada de MoodleNet</a>.</p>';
$string['autoenablenotification_subject'] = 'Se cambió la configuración predeterminada de MoodleNet.';
$string['browsecontentmoodlenet'] = 'O buscar contenido en MoodleNet';
$string['clearsearch'] = 'Limpiar búsqueda';
$string['connectandbrowse'] = 'Conectar y buscar:';
$string['defaultmoodlenet'] = 'URL MoodleNet';
$string['defaultmoodlenet_desc'] = 'La URL de la instancia de MoodleNet disponible a través del selector de actividad.';
$string['defaultmoodlenetname'] = 'Nombre de la instancia de MoodleNet';
$string['defaultmoodlenetname_desc'] = 'El nombre de la instancia de MoodleNet disponible a través del selector de actividad.';
$string['defaultmoodlenetnamevalue'] = 'Central MoodleNet';
$string['enablemoodlenet'] = 'Habilitar integración MoodleNet (entrada)';
$string['enablemoodlenet_desc'] = 'Si se habilita, un usuario con la capacidad de crear y gestionar actividades puede buscar en MoodleNet a través del selector de actividades e importar recursos MoodleNet a su curso. Además, un usuario con la capacidad de restaurar copias de respaldo puede seleccionar un archivo de respaldo en MoodleNet y restaurarlo en Moodle.';
$string['errorduringdownload'] = 'Se produjo un error al descargar el archivo: {$a}';
$string['footermessage'] = 'O buscar contenido en';
$string['forminfo'] = 'Su perfil MoodleNet será guardado automáticamente en su perfil de este sitio.';
$string['importconfirm'] = 'Esta a punto de importar el contenido "{$a->resourcename} ({$a->resourcetype})" en el curso "{$a->coursename}". ¿Está seguro de que quiere continuar?';
$string['importconfirmnocourse'] = 'Está a punto de importar el contenido "{$a->resourcename} ({$a->resourcetype})" a su sitio. ¿Está seguro de que quiere continuar?';
$string['importformatselectguidingtext'] = '¿En qué formato quiere que el contenido "{$a->name} ({$a->type})" se añada a su curso?';
$string['importformatselectheader'] = 'Elija el formato de visualización del contenido';
$string['inputhelp'] = 'O si ya tiene una cuenta de MoodleNet, copie el ID su perfil de MoodleNet y péguelo aquí:';
$string['instancedescription'] = 'MoodleNet es una plataforma de redes sociales abierta para educadores, con un enfoque en la curación colaborativa de colecciones de recursos abiertos.';
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-example@moodle.net';
$string['invalidmoodlenetprofile'] = '$userprofile no tiene el formato correcto';
$string['missinginvalidpostdata'] = 'Falta la información de recursos de MoodleNet o está en un formato incorrecto.
Si esto sucede repetidamente, póngase en contacto con el administrador del sitio.';
$string['mnetprofile'] = 'Perfil MoodleNet';
$string['mnetprofiledesc'] = '<p>Introduzca los detalles de su perfil MoodleNet aquí para ser redirigido a su perfil cuando visite MoodleNet.</p>';
$string['moodlenetnotenabled'] = 'La integración de MoodleNet debe estar habilitada en la administración del sitio / MoodleNet antes de que se puedan procesar las importaciones de recursos.';
$string['moodlenetsettings'] = 'Ajustes de MoodleNet';
$string['notification'] = 'Está a punto de importar el contenido "{$a->name} ({$a->type})" a su sitio. Seleccione el curso en el que se debe añadir o <a href="{$a->cancellink}"> cancele</a>.';
$string['pluginname'] = 'MoodleNet';
$string['privacy:metadata'] = 'La herramienta MoodleNet solo facilita la comunicación con MoodleNet. No almacena datos.';
$string['profilevalidationerror'] = 'Se produjo un problema al intentar validar su perfil de ModdleNet';
$string['profilevalidationfail'] = 'Por favor introduzca un perfil MoodleNet válido';
$string['profilevalidationpass'] = '¡Se ve bien!';
$string['removedmnetprofilenotification'] = 'Debido a cambios recientes en la plataforma MoodleNet, cualquier usuario que haya guardado previamente su ID de perfil de MoodleNet en el sitio deberá ingresar una ID de perfil de MoodleNet en el nuevo formato para autenticarse en la plataforma MoodleNet.';
$string['removedmnetprofilenotification_subject'] = 'Cambio de formato de ID de perfil de MoodleNet';
$string['saveandgo'] = 'Guardar y salir';
$string['searchcourses'] = 'Buscar cursos';
$string['selectpagetitle'] = 'Seleccionar página';
$string['uploadlimitexceeded'] = 'El tamaño del archivo {$a->filesize} excede el límite de subida del usuario que es de {$a->uploadlimit} bytes.';
