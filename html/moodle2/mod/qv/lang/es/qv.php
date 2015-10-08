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
 * Spanish strings for qv
 *
 * You can have a rather longer description of the file as well,
 * if you like, and it can span multiple lines.
 *
 * @package    mod
 * @copyright  2011 Departament d'Ensenyament de la Generalitat de Catalunya
 * @author     Sara Arjona Téllez
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['areacontent'] = 'Ficheros de contenido';
$string['areapackage'] = 'Ficheros de paquete';
$string['assessmentlang'] = 'Idioma';
$string['attemptsallowed'] = 'Número máximo de entregas';
$string['assessmentskin'] = 'Entorno gráfico';
$string['availabledate'] = 'Disponible desde';
$string['closebeforeopen'] = 'No se ha podido subir el QV. Se ha especificado una fecha de entrega anterior a la fecha de apertura.';
$string['contentheader'] = 'Contenido';
$string['delivers'] = 'Entregas';
$string['deleteallattempts'] = 'Eliminar todos los intentos';
$string['displayembed'] = 'Incrustar';
$string['displayinpopup'] = 'En ventana emergente';
$string['displayselect'] = 'Mostrar';
$string['displayselect_help'] = 'Este parámetro determina com se muestra el QV en el curso. Hay dos opciones:

* Incrustar - El QV se muestra dentro de la página, bajo la barra de navegación con la descripción del archivo y cualquier otro bloque
* In pop-up - El QV se muestra en una ventana nueva del navegador sin menús y sin barra de direcciones';
$string['duedate'] = 'Fecha de entrega';
$string['expired'] = 'La actividad se cerró el {$a} y ya no está disponible';
$string['filetype'] = 'Tipo';
$string['filetype_help'] = 'Este parámetro determina cómo se incluye el QV en el curso. Hay dos opciones:

* Fichero QV subido -  Posibilita escoger un fichero ".qv.zip" válido mediante el selector de archivos.
* URL Externo - Posibilita especificar el URL de un QV. NOTA: El URL debe empezar con https(s) o www y contener un fichero HTML válido';
$string['filetypeexternal'] = 'URL Externo';
$string['filetypelocal'] = 'Fichero QV subido';
$string['height'] = 'Altura';
$string['invalidqvfile'] = 'Se ha especificado un fichero de QV que no es válido. Debe tener la extensión ".qv.zip".';
$string['invalidurl'] = 'Se ha especificado un URL de QV que no es válido. Debe empezar con http(s).';
$string['msg_not_read'] = 'Hay mensajes pendientes de lectura';
$string['modulename'] = 'Cuaderno Virtual';
$string['modulename_help'] = '<a href="http://clic.xtec.cat/qv_web" target="_blank">Quaderns Virtuals</a> es un proyecto del Departament de Ensenyament de la Generalitat de Cataluña que está formado por un conjunto de aplicaciones de software libre que permiten crear diversos tipos de actividades educativas multimedia: puzzles, asociaciones, ejercicios de texto y otros. Además, la <a href="http://clic.xtec.cat/qv_biblio" target="_blank">Biblioteca de QV</a> ofrece un repositorio de actividades que cuenta con centenares de actividades que han creado profesores y personas de otros colectivos que han querido compartir solidariamente su trabajo.

Este módulo permite al profesorado añadir a un curso cualquier actividad de tipo QV y recopilar los resultados obtenidos para cada alumno/a.';

$string['modulenameplural'] = 'Cuadernos Virtuales';
$string['notopenyet'] = 'Esta actividad no estará disponible hasta {$a}';
$string['orderitems'] = 'Activar la ordenación aleatoria de preguntas';
$string['orderitems_help'] = 'Activar la ordenación aleatoria de preguntas';
$string['ordersections'] = 'Activar la ordenación aleatoria de hojas';
$string['ordersections_help'] = 'Activar la ordenación aleatoria de hojas';
$string['pluginadministration'] = 'Admnistración del módulo de QV';
$string['pluginname'] = 'QV';
$string['preview'] = 'Previsualizar actividad QV';
$string['qv_distpluginappl'] = 'URL dónde se encuentran los applets';
$string['qv_distpluginappl_help'] = 'URL dónde se encuentran los applets';
$string['qv_distpluginscripts'] = 'URL dónde se encuentran los scripts';
$string['qv_distpluginscripts_help'] = 'URL dónde se encuentran los scripts';
$string['qv_distplugincss'] = 'URL dónde se encuentran las hojas de estilo';
$string['qv_distplugincss_help'] = 'URL dónde se encuentran las hojas de estilo';
$string['qv_skins'] = 'Lista con los nombres de los entornos gráficos, separados por coma';
$string['qv_skins_help'] = 'Lista con los nombres de los entornos gráficos, separados por coma';
$string['qvfile'] = 'Fichero del QV';
$string['qvfile_help'] = 'El fichero .qv.zip donde se encuentra la activiad QV. Debe contener un fichero index.htm dentro de la carpeta html.';
$string['qvurl'] = 'URL';
$string['qvurl_help'] = 'Este parámetro habilita un URL para especificar el QV en lugar de seleccionarlo a través del selector de archivos.';
$string['qv:view'] = 'Visualizar QV';
$string['qv:submit'] = 'Enviar QV';
$string['qv:addinstance'] = 'Añadir QV';
$string['score'] = 'Puntuación';
$string['start'] = 'Empezar el Cuaderno';
$string['state'] = 'Estado';
$string['statenotstarted'] = 'No comenzado';
$string['statestarted'] = 'Comenzado';
$string['statedelivered'] = 'Entregado';
$string['statepartiallydelivered'] = 'Parcialmente entregado';
$string['statecorrected'] = 'Corregido';
$string['statepartiallycorrected'] = 'Parcialmente corregido';
$string['showcorrection'] = 'Mostrar la corrección';
$string['showinteraction'] = 'Mostrar interacciones';
$string['timing'] = 'Temporalización';
$string['unlimited'] = '﻿Ilimitado';
$string['unread'] = 'Mensajes no leídos';
$string['width'] = 'Anchura';

/* Revision Moodle 2.6 */
$string['event_course_module_viewed'] = 'Módulo de curso visto';
$string['event_instances_list_viewed'] = 'Lista de instancias vistas';
$string['results'] = 'Resultados';
$string['msg_nosessions'] = 'Esta actividad QV todavía no tiene ninguna sessión';