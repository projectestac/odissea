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
 * Strings for component 'geogebra', language 'es', version '3.11'.
 *
 * @package     geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclosed'] = 'Esta actividad ha sido cerrada';
$string['activitynotopened'] = 'Esta actividad no está disponible';
$string['attempt'] = 'Intento';
$string['attempts'] = 'Intentos';
$string['attemptsremaining'] = 'Intentos restantes para esta actividad:';
$string['autograde'] = 'Autoevaluar actividad';
$string['availabledate'] = 'Disponible desde';
$string['average'] = 'Promedio';
$string['choosescripttype'] = 'Elija el tipo de script';
$string['comment'] = 'Comentario';
$string['contentheader'] = 'Contenido';
$string['coursewithoutstudents'] = 'Curso sin estudiantes';
$string['datestudent'] = 'Última modificación (envío)';
$string['dateteacher'] = 'Última modificación (calificación)';
$string['deleteallattempts'] = 'Eliminar todos los intentos';
$string['description'] = 'Descripción';
$string['discardchanges'] = 'Descartar cambios y volver';
$string['duedate'] = 'Fecha de vencimiento';
$string['duration'] = 'Duración';
$string['enableLabelDrags'] = 'Habilitar etiquetas arrastrables';
$string['enableRightClick'] = 'Habilitar clic derecho';
$string['errorattempt'] = 'Error: El intento no pudo guardarse.';
$string['event_course_module_viewed'] = 'Módulo de curso visto';
$string['event_instances_list_viewed'] = 'Lista de instancias vista';
$string['expired'] = 'Disculpe, actividad cerrada en {$a} y no está disponible';
$string['extractedfromggb'] = 'archivo extraído de ggb';
$string['filename'] = 'Nombre de archivo';
$string['filenotfound'] = 'El archivo especificado no existe';
$string['filetype'] = 'Tipo';
$string['filetype_help'] = 'Esta configuración determina como la actividad de GeoGebra está incluída en el curso. Hay dos opciones:

* Subir GeoGebra - Selecciona un paquete ".ggb" válido para ser subido.
* URL externa - Selecciona una URL específica. Nota: La URL debe empezar con http(s) o www y contener un archivo ".ggb" válido.';
$string['filetypeexternal'] = 'URL externa';
$string['filetypelocal'] = 'Archivo subido';
$string['firstattempt'] = 'Primer intento';
$string['for'] = 'para';
$string['functionalityoptionsgrp'] = 'Funcionalidad';
$string['geogebra:addinstance'] = 'Añadir GeoGebra';
$string['geogebra:grade'] = 'Calificar GeoGebra';
$string['geogebra:submit'] = 'Enviar GeoGebra';
$string['geogebra:view'] = 'Ver GeoGebra';
$string['geogebrafile'] = 'Archivo GeoGebra';
$string['geogebrafile_help'] = 'El archivo .ggb.';
$string['geogebraurl'] = 'URL';
$string['geogebraurl_help'] = 'Encuentre la construcción <a href="https://www.geogebra.org/" target="_blank">geogebra.org</a>, vaya a <strong>Detalles</strong>, botón derecho en <strong>Download</strong> y seleccione <strong>Copiar dirección de enlace</strong>. Finalmente, vaya al campo URL y peque el enlace con <strong>Ctrl+V</strong>.<br/>Observe el ejemplo: <a href="https://youtu.be/qbp-RuM4NpU" target="_blank">https://youtu.be/qbp-RuM4NpU</a>.';
$string['grade'] = 'Calificar';
$string['gradeit'] = 'Calificar';
$string['grademethod'] = 'Método de calificación';
$string['height'] = 'Peso';
$string['highestattempt'] = 'Mejor intento';
$string['httpnotallowed'] = 'Por el momento no está permitido usar archivos externos';
$string['interfaceoptionsgrp'] = 'Interfaz de usuario';
$string['invalidgeogebrafile'] = 'Archivo GeoGebra no válido. Debe contener la extensión ".ggb".';
$string['invalidurl'] = 'URL inválida. Debe empezar con http(s) y ser una archivo ".ggb" válido.';
$string['language'] = 'Idioma';
$string['lastattempt'] = 'Último intento';
$string['lastattemptremaining'] = 'Este es su último intento para esta actividad';
$string['lastmodifiedgrade'] = 'Última modificación (calificación)';
$string['lastmodifiedsubmission'] = 'Última modificación (envío)';
$string['lowestattempt'] = 'Intento más lento';
$string['manualgrade'] = '¿En calificación manual?';
$string['maxattempts'] = 'Número máximo de intentos';
$string['modulename'] = 'GeoGebra';
$string['modulename_help'] = '<p><a href="http://www.geogebra.org" target="_blank">GeoGebra</a> es una multi-plataforma dinámica de software de aprendizaje de matemáticas en todos los niveles que trabaja: geometría, álgebra, tablas, gráficos, estadísticas y cálculo en un paquete sencillo de usar.</p>
<p>Por tanto, el <a href="http://www.gencat.cat/ensenyament/" target="_blank">Departament of Education of Catalonia</a> en colaboración en el <a href="http://acgeogebra.cat/" target="_blank">Catalan Association of GeoGebra</a> (ACG) y con el equipo de desarrollo de GeoGeobra han implementaddo este módulo que permite la incorporación de actividades GeoGebra en Moodle. Sus principales características son:
<ul>
    <li>Permite la inserción sencilla de actividade GeoGebra en cualquier curso Moodle.</li>
    <li>Facilita el seguimiento de los estudiantes recopilando resultados, fechas, duraciones y cada uno de los intentos de los usuarios.</li>
    <li>Los estudiante puede guardar sus actividade y continuarlas cuando lo necesiten.</li>
</ul>
</p>';
$string['modulenameplural'] = 'GeoGebra';
$string['msg_noattempts'] = 'Ha realizado esta actividade el número máximo de veces';
$string['msg_nosessions'] = 'Esta actividad GeoGebra aún no tiene una sesión';
$string['name'] = 'Nombre';
$string['noattempts'] = '-';
$string['nograding'] = 'No cualificado';
$string['nomoreattempts'] = 'No quedan más intentos para esta actividad';
$string['notopenyet'] = 'Disculpe, esta actividad no está disponible ata {$a}';
$string['pluginadministration'] = 'Administración de GeoGebra';
$string['pluginname'] = 'GeoGebra';
$string['preview_geogebra'] = 'Previsualizar la actividad GeoGebra';
$string['previewtab'] = 'Previsualizar';
$string['privacy'] = 'Resultados privados';
