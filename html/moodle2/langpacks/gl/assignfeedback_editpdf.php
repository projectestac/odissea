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
 * Strings for component 'assignfeedback_editpdf', language 'gl', branch 'MOODLE_36_STABLE'
 *
 * @package   assignfeedback_editpdf
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'Engadir á lista rápida';
$string['annotationcolour'] = 'Cor da anotación';
$string['black'] = 'Negro';
$string['blue'] = 'Azul';
$string['cannotopenpdf'] = 'Non é posíbel abrir o PDF. O ficheiro pode estar estragado ou nun formato non compatíbel.';
$string['clear'] = 'Limpar';
$string['colourpicker'] = 'Selector de cor';
$string['command'] = 'Orde:';
$string['comment'] = 'Comentarios';
$string['commentcolour'] = 'Cor do comentario';
$string['commentcontextmenu'] = 'Menú de contexto de comentarios';
$string['commentindex'] = 'Índice de comentarios';
$string['commentlabel'] = '{$a->pnum}.{$a->cnum}';
$string['couldnotsavepage'] = 'Non foi posíbel gardar a páxina {$a}';
$string['currentstamp'] = 'Selo';
$string['default'] = 'Activado de xeito predeterminado';
$string['default_help'] = 'Se establece, este método de comentarios será activado como predeterminado para todas as novas asignacións.';
$string['deleteannotation'] = 'Eliminar anotación';
$string['deletecomment'] = 'Eliminar comentario';
$string['deletefeedback'] = 'Eliminar PDF de comentarios';
$string['downloadablefilename'] = 'comentarios.pdf';
$string['downloadfeedback'] = 'Descargar PDF de comentarios';
$string['draftchangessaved'] = 'Gardadas as versións preliminares de comentarios';
$string['drag'] = 'Arrastre';
$string['editpdf'] = 'Anotar PDF';
$string['editpdf_help'] = 'Anote as entregas dos alumnos directamente no navegador e produza un PDF descargábel editado.';
$string['enabled'] = 'Anotar PDF';
$string['enabled_help'] = 'Se está activado, o profesor poderá crear ficheiros PDF con anotacións ao cualificar as tarefas. Isto permite que o profesor engada comentarios, debuxos e selos directamente sobre o traballo dos alumnos. A anotación faise no navegador e non se require ningún software adicional.';
$string['errorgenerateimage'] = 'Produciuse un erro ao xerar a imaxe con ghostscript, información para depuración: {$a}';
$string['errorpdfpage'] = 'Produciuse un erro ao xerar esta páxina.';
$string['expcolcomments'] = 'Expandir/contraer todos os comentarios';
$string['filter'] = 'Filtrar comentarios...';
$string['generatefeedback'] = 'Xerar PDF de comentarios';
$string['generatingpdf'] = 'Xerando o PDF...';
$string['gotopage'] = 'Ir á páxina';
$string['green'] = 'Verde';
$string['gsimage'] = 'Imaxe para proba de ghostscript';
$string['highlight'] = 'Resalte';
$string['jsrequired'] = 'Requírese JavaScript para facer anotacións nun PDF. Active JavaScript no seu navegador para usar esta función.';
$string['launcheditor'] = 'Iniciar o editor de PDF...';
$string['line'] = 'Liña';
$string['loadingeditor'] = 'Cargando o editor de PDF...';
$string['navigatenext'] = 'Páxina seguinte (Alt/Maiús-Alt/Ctrl-Opción + {$a})';
$string['navigateprevious'] = 'Páxina anterior (Alt/Maiús-Alt/Ctrl-Opción + {$a})';
$string['output'] = 'Saída:';
$string['oval'] = 'Óvalo';
$string['pagenumber'] = 'Páxina {$a}';
$string['pagexofy'] = 'Páxina {$a->page} de {$a->total}';
$string['partialwarning'] = 'A algúns dos ficheiros deste envío só se pode acceder mediante descarga directa.';
$string['pathtogspathdesc'] = 'Teña en conta que facer anotacións nun PDF require que a ruta a ghostscript se configure en {$a}.';
$string['pen'] = 'Lapis';
$string['pluginname'] = 'Facer anotacións en PDF';
$string['preparesubmissionsforannotation'] = 'Prepare envíos para a anotación';
$string['privacy:metadata:colourpurpose'] = 'Cor do comentario ou anotación';
$string['privacy:metadata:conversionpurpose'] = 'Os ficheiros son convertidos a PDF para permitir anotacións.';
$string['privacy:metadata:filepurpose'] = 'Almacena un PDF anotado con comentarios para o usuario.';
$string['privacy:metadata:rawtextpurpose'] = 'Almacena o texto en bruto para os datos rápidos.';
$string['privacy:metadata:tablepurpose'] = 'Almacena comentarios de lista rápida especificados polo profesor';
$string['privacy:metadata:userid'] = 'O ID do usuario';
$string['privacy:path'] = 'PDF de comentarios';
$string['rectangle'] = 'Rectángulo';
$string['red'] = 'Vermello';
$string['result'] = 'Resultado:';
$string['searchcomments'] = 'Buscar comentarios';
$string['select'] = 'Seleccionar';
$string['stamp'] = 'Selo';
$string['stamppicker'] = 'Selector de selos';
$string['stamps'] = 'Selos';
$string['stampsdesc'] = 'Os selos deben ser ficheiros de imaxe (tamaño recomendado: 40x40). Estas imaxes poden usarse coa ferramenta de selo para anotacións no PDF.';
$string['test_doesnotexist'] = 'A ruta a ghostscript apunta a un ficheiro inexistente';
$string['test_empty'] = 'A ruta a ghostscript está baleira. Introduza a ruta correcta';
$string['testgs'] = 'Probar a ruta a ghostscript';
$string['test_isdir'] = 'A ruta a ghostscript apunta a un cartafol, inclúa o programa ghostscript na ruta que especifique';
$string['test_notestfile'] = 'Falta o PDF de proba';
$string['test_notexecutable'] = 'O ghostscript apunta a un ficheiro que non é executable';
$string['test_ok'] = 'A ruta a ghostscript semella ser correcta. Comprobe que pode ver a mensaxe na seguinte imaxe';
$string['tool'] = 'Ferramenta';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = 'Ver PDF con anotacións...';
$string['white'] = 'Branco';
$string['yellow'] = 'Amarelo';
