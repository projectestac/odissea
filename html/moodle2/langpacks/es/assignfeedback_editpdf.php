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
 * Strings for component 'assignfeedback_editpdf', language 'es', branch 'MOODLE_26_STABLE'
 *
 * @package   assignfeedback_editpdf
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'Agregar a la lista';
$string['annotationcolour'] = 'Color de la anotación';
$string['black'] = 'Negro';
$string['blue'] = 'Azul';
$string['cannotopenpdf'] = 'No se puede abrir PDF. El archivo puede esta dañado o tener un formato no soportado.';
$string['clear'] = 'Limpiar';
$string['colourpicker'] = 'Selector de color';
$string['command'] = 'Comando:';
$string['comment'] = 'Comentarios';
$string['commentcolour'] = 'Color de comentario';
$string['commentcontextmenu'] = 'Menú contextual del comentario';
$string['couldnotsavepage'] = 'No se ha podido guardar página {$a}';
$string['currentstamp'] = 'Sello';
$string['deleteannotation'] = 'Borrar anotación';
$string['deletecomment'] = 'Borrar comentario';
$string['deletefeedback'] = 'Borrar retroalimentación del PDF';
$string['downloadablefilename'] = 'retroalimentación.pdf';
$string['downloadfeedback'] = 'Descargar pdf retroalimentación';
$string['editpdf'] = 'Anotar PDF';
$string['editpdf_help'] = 'Anotar las entregas de los estudiantes directamente en el navegador y producir un PDF editado y descargable.';
$string['enabled'] = 'Anotar PDF';
$string['enabled_help'] = 'Si está habilitado, el profesor podrá crear ficheros PDF anotados cuando realice las correcciones. El profesor podrá añadir comentarios, dibujos y sellos directamente sobre el trabajo de los estudiantes. La anotación se realiza en el navegador y no se requiere ningún software adicional.';
$string['errorgenerateimage'] = 'Error generando imagen con ghostscript, información de depuración; {$a}';
$string['filter'] = 'Filtrar comentarios...';
$string['generatefeedback'] = 'Generar PDF retroalimentación';
$string['generatingpdf'] = 'Generando el PDF...';
$string['gotopage'] = 'Ir a página';
$string['green'] = 'Verde';
$string['gspath'] = 'Ruta ghostscript';
$string['gspath_help'] = 'En la mayoría de las instalaciones Linux esto quedaría como  \'/usr/bin/gs\'. En Windows será algo parecido a \'c:gsbingswin32c.exe\' (asegurese que no haya espacios en la ruta - si fuera necesario copie los archivos \'gswin32c.exe\' y \'gsdll32.dll\' a una carpeta nueva sin espacios en la ruta).';
$string['highlight'] = 'Resaltar';
$string['jsrequired'] = 'Para realizar anotaciones en documentos PDF se requiere Javascript. Por favor, active el Javascript en su navegador para poder utilizar esta funcionalidad.';
$string['launcheditor'] = 'Arrancar editor PDF...';
$string['line'] = 'Línea';
$string['loadingeditor'] = 'Cargando editor PDF';
$string['navigatenext'] = 'Siguiente página';
$string['navigateprevious'] = 'Página anterior';
$string['output'] = 'Resultado:';
$string['oval'] = 'Óvalo';
$string['pagenumber'] = 'Página {$a}';
$string['pagexofy'] = 'Página {$a->page} de {$a->total}';
$string['pen'] = 'Bolígrafo';
$string['pluginname'] = 'Anotar PDF';
$string['rectangle'] = 'Rectángulo';
$string['red'] = 'Rojo';
$string['result'] = 'Resultado:';
$string['searchcomments'] = 'Buscar comentarios';
$string['select'] = 'Seleccionar';
$string['stamp'] = 'Sello';
$string['stamppicker'] = 'Seleccionador sello';
$string['stamps'] = 'Sellos';
$string['stampsdesc'] = 'Los sellos deben ser ficheros de imágenes (tamaño recomendado: 40x40). Estas imágenes pueden ser usadas con la herramienta de estampación para las anotaciones de PDF.';
$string['test_doesnotexist'] = 'El PATH de ghostscript apunta a un fichero inexistente';
$string['test_empty'] = 'La ruta ghostscript está vacía, por favor introduzca al ruta correcta';
$string['testgs'] = 'Prueba del PATH de ghostscript';
$string['test_isdir'] = 'El PATH de ghostscript apunta a un directorio, por favor, incluya el programa de ghostscript en el PATH que especifique';
$string['test_notestfile'] = 'El PDF de prueba falta';
$string['test_notexecutable'] = 'EL ghostscript apunta a un fichero que no es ejecutable';
$string['test_ok'] = 'La ruta ghostscript parece ser correcta, por favor compruebe que pueda ver el mensaje en la imagen abajo';
$string['tool'] = 'Herramienta';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['unsavedchanges'] = 'Cambios sin guardar';
$string['viewfeedbackonline'] = 'Ver PDF anotado...';
$string['white'] = 'Blanco';
$string['yellow'] = 'Amarillo';
$string['zlibnotavailable'] = 'Extensión Phb "zlib" no disponible. La utilidad anotar PDF se basa en esta extensión php y será deshabilitada hasta que esté instalado y habilitado zlib.';
