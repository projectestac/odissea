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
 * Strings for component 'assignsubmission_mahara', language 'es', version '4.1'.
 *
 * @package     assignsubmission_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assign_submission_mahara_description'] = 'Funciones de Mahara usadas en el plugin para Envío de Tarea de Portafolio Mahara.<br />El publicar este servicio en un sitio Moodle no tiene efecto. Suscríbase a este servicio si Usted quiere poder usar Tareas con {$a}.<br />';
$string['assign_submission_mahara_name'] = 'Servicios Mahara de Envío de Tarea';
$string['collectionsby'] = 'Colecciones por {$a}';
$string['defaultlockpages'] = 'Por defecto "{$a}"';
$string['defaultlockpages_help'] = 'Configuración por defecto para usarse para la configuración de "{$a}" en nuevas Tareas Mahara..';
$string['defaulton'] = 'Activado por defecto';
$string['defaulton_help'] = 'Si se configura, este método de envío será habilitado por defecto para todas las tareas nuevas.';
$string['defaultsite'] = 'Por defecto "{$a}"';
$string['defaultsite_help'] = 'Configuraciones por defecto a usar para la configuración de  "{$a}" en nuevas Tareas Mahara.';
$string['emptysubmission'] = 'Usted no ha elegido la página a enviar.';
$string['enabled'] = 'Portafolio Mahara';
$string['enabled_help'] = 'Si se habilita, los estudiantes pueden enviar páginas de Mahara para evaluación en Moodle. El sitio Mahara ya debe estar configuradopara red Mnet con este sitio Moodle.';
$string['errorinvalidhost'] = 'ID del host seleccionada inválida';
$string['errorinvalidstatus'] = 'Error para el desarrollador: Estatus de envío inválido enviado a aassign_submission_mahara::set_mahara_submission_status()';
$string['errormnetrequest'] = 'El intento para enviar solicitud Mnet resultó en error: {$a}';
$string['errorvieworcollectionalreadysubmitted'] = 'La vista de Mahara o colección seleccionada no pudo enviarse. Por favor escoja otra.';
$string['eventassessableuploaded'] = 'Se ha enviado una página Mahara o una colección.';
$string['lockpages'] = 'Bloquear páginas enviadas';
$string['lockpages_help'] = 'Si se selecciona "Si, mantener bloqueado", las colecciones y páginas Mahara enviadas estarán bloqueadas para evitar su edición en Mahara y permanecerán bloqueadas después de calificar. SI se selecciona "SI, pero desbloquear después de calificar", la página o colección será desbloqueada después de la calificación del envío, o, si se ha usado flujograma de calificación, serán desbloqueadas cuando se liberen los puntajes a los estudiantes.';
$string['mahara'] = 'Portafolio Mahara';
$string['nomaharahostsfound'] = 'No se encontraron hosts Mahara.';
$string['noneselected'] = 'Ninguno seleccionado';
$string['noviewscreated'] = 'Usted no tiene páginas o colecciones Mahara disponibles. Por favor <a target="_blank" href="{$a->jumpurl}">haga clic aquí</a> para visitar "{$a->name}" y crear una nueva.';
$string['option_collections'] = 'Colecciones';
$string['option_views'] = 'Vistas';
$string['outputforlog'] = '{$a->remotehostname}: {$a->viewtitle} (view id: {$a->viewid})';
$string['outputforlognew'] = 'Nueva {$a} entrega.';
$string['pluginname'] = 'Portafolio Mahara';
$string['previousattemptsnotvisible'] = 'Los intentos anteriores con el plugin para envíos Mahara no son visibles.';
$string['privacy:metadata:assignment'] = 'La ID de la Tarea';
$string['privacy:metadata:assignsubmission_mahara'] = 'Almacena información acerca de páginas Mahara y colecciones enviadas a tareas.';
$string['privacy:metadata:iscollection'] = 'Es este envío una página o una colección';
$string['privacy:metadata:submission'] = 'La ID del envío';
$string['privacy:metadata:viewid'] = 'La ID de la colección o página Mahara';
$string['privacy:metadata:viewstatus'] = 'El estado de la colección o página Mahara';
$string['privacy:metadata:viewtitle'] = 'El título de la colección o página Mahara';
$string['privacy:metadata:viewurl'] = 'La URL de la colección o página Mahara';
$string['privacy:path'] = 'Colecciones o páginas Mahara';
$string['selectmaharaview'] = 'Seleccione una de sus páginas disponibles de portafolio o colecciones de la lista inferior, o  <a target="_blank" href="{$a->jumpurl}">elija aquí</a> para visitar "{$a->name}" y crear una nueva.';
$string['site'] = 'Sitio';
$string['site_help'] = 'Esta configuración le permite seleccionar a cual sitio Mahara deberían de enviar sus páginas sus estudiantes.';
$string['viewsby'] = 'Páginas por {$a}';
$string['yeskeeplocked'] = 'Si, mantener bloqueado';
$string['yesunlock'] = 'Si, pero des-bloquear después de calificar';
