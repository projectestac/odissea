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
 * Strings for component 'jclic', language 'es', branch 'MOODLE_31_STABLE'
 *
 * @package   jclic
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['activity'] = 'Actividad';
$string['activitydone'] = 'Actividades realizadas';
$string['activitysolved'] = 'Actividades competadas satisfactoriamente';
$string['attempts'] = 'Intentos';
$string['availabledate'] = 'Disponible desde';
$string['avaluation'] = 'Criterios de evaluación';
$string['avaluation_score'] = 'Conseguir esta puntuación global';
$string['avaluation_solved'] = 'Resolver este número de actividades distintas';
$string['closebeforeopen'] = 'No se pudo actualizar el jclic. Ha indicado una fecha de vencimiento anterior a la fecha de disponibilidad.';
$string['contentheader'] = 'Contenido';
$string['deleteallsessions'] = 'Borrar todas las sesiones';
$string['description'] = 'Descripción';
$string['duedate'] = 'Fecha de vencimiento';
$string['event_course_module_viewed'] = 'Módulo de curso visto';
$string['event_instances_list_viewed'] = 'Lista de casos vista';
$string['exiturl_help'] = 'Esta es la URL que aparece cuando los alumnos terminan la última actividad JClic.

Para hacer que esta redirección funcione es necesario asociar a la última actividad en la pestaña de secuencias la acción "JClic de salida" en la sección de la flecha hacia adelante.';
$string['expired'] = 'Disculpe, esta actividad se cerró el {$a} y ya no está disponible.';
$string['filetype'] = 'Tipo';
$string['filetypeexternal'] = 'URL externa';
$string['filetype_help'] = 'Este ajuste determina cómo se incluye en el curso la actividad JClic. Hay 2 opciones:

* JClic cargado - Permite que se elija un paquete ".jclic.zip" válido en el selector de ficheros.
* URL externa - Permite que se indique una URL. Nota: La URL debe empezar con http(s) o www y contener un fichero "jclic.zip" válido.';
$string['filetypelocal'] = 'Jclic cargado';
$string['height'] = 'Altura';
$string['invalidjclicfile'] = 'El JClic indicado no es válido. Debe tener la extensión ".jclic.zip".';
$string['invalidurl'] = 'La URL indicada no es válida. Debe empezar con http(s) y debe ser un fichero ".jclic.zip" válido.';
$string['jclic'] = 'JClic';
$string['jclic:addinstance'] = 'Añadir JClic';
$string['jclicfile'] = 'Fichero JClic';
$string['jclicfile_help'] = 'El fichero .jclic.zip que contiene los ficheros JClic.';
$string['jclic:grade'] = 'Evaluar JClic';
$string['jclicjarbase'] = 'Raíz de archivos jar';
$string['jclicjarbase_help'] = 'Dirección web donde localizar todos los ficheros jar JClic';
$string['jclic:submit'] = 'Enviar JClic';
$string['jclicurl'] = 'URL';
$string['jclicurl_help'] = 'Este ajuste permite que se indique una URL para el paquete JClic, en vez de elegir un fichero mediante el selector de ficheros.';
$string['jclic:view'] = 'Ver JClic';
$string['lang'] = 'Idioma';
$string['lap_help'] = 'Tiempo entre transacciones cliente-servidor (en segundos)';
$string['lastaccess'] = 'Último visitado';
$string['maxattempts'] = 'Número máximo de intentos';
$string['maxgrade'] = 'Puntuación/actividades que se deben superar';
$string['modulename'] = 'JClic';
$string['modulename_help'] = '<a href="http://clic.xtec.cat" target="_blank">JClic</a> es un proyecto de la Consejería Catalana de Educación. Consiste en una serie de aplicaciones se software de código abierto que permiten la creación de varios tipos de actividades educativas multimedia: acertijos, juegos de asociación, actividades de texto, crucigramas, juegos de búsqueda de palabras y más.

Además, en <a href="http://clic.xtec.cat/db/listact_ca.jsp" target="_blank">ZonaClic</a> se ofrece un repositorio donde se muestran más de mil actividades. Ha sido creado por maestros y otros profesionales que desean compartir su trabajo con otros.

Este módulo le permite a los maestros añadir actividades JClic a cualquier curso y seguir el resultado de los pupilos (tiempo empleado en cada actividad, número de intentos, puntuación, etc).';
$string['modulenameplural'] = 'JClic';
$string['msg_noattempts'] = 'Has intentado esta actividad el número máximo de veces';
$string['msg_nosessions'] = 'Esta actividad JClic no tiene ninguna sesión aún';
