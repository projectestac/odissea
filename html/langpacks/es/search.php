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
 * Strings for component 'search', language 'es', version '3.11'.
 *
 * @package     search
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Búsqueda avanzada';
$string['all'] = 'Todos';
$string['allareas'] = 'Todas las áreas';
$string['allcourses'] = 'Todos los cursos';
$string['allusers'] = 'Todos los usuarios';
$string['author'] = 'Autor';
$string['authorname'] = 'Nombre del autor';
$string['back'] = 'Atrás';
$string['beadmin'] = 'Necesita ser administrador para usar esta página';
$string['checkdb'] = 'Comprobar base de datos';
$string['checkdbadvice'] = 'Comprobar base de datos para ver problemas';
$string['checkdir'] = 'Comprobar dir';
$string['checkdiradvice'] = 'Asegúrese de que existe el directorio de datos y se puede estribir en él.';
$string['commenton'] = 'Comentario el';
$string['confirm_delete'] = '¿Está seguro de que quiere eliminar el índice de {$a}? Hasta que el área de búsqueda no sea indexada los usuarios no obtendrán resultados de búsqueda de este área.';
$string['confirm_deleteall'] = '¿Está seguro de que quiere eliminar todos los elementos indexados? Hasta que el sitio no sea indexado de nuevo los usuarios no podrán obtener resultados de búsqueda.';
$string['confirm_indexall'] = '¿Está seguro de que quiere actualizar los elementos indexados ahora? Si existe una gran cantidad de elementos que necesitan ser indexados esta operación puede llevar mucho tiempo. Para servidores que trabajen en tiempo real debería dejar la indexación para la tarea programada \'Indexación de búsqueda global\'.';
$string['confirm_reindexall'] = '¿Está seguro de que quiere volver a indexar todos los contenidos del sitio ahora? Si su sitio tiene mucho contenido esta operación puede llevar mucho tiempo y puede que los usuarios no obtengan resultados de búsqueda completos hasta que esta operación finalice.';
$string['core-all'] = 'Todos';
$string['core-course-content'] = 'Contenido del curso';
$string['core-courses'] = 'Cursos';
$string['core-other'] = 'Otro';
$string['core-users'] = 'Usuarios';
$string['createanindex'] = 'Crear índice';
$string['createdon'] = 'Creado el';
$string['database'] = 'Base de datos';
$string['databasestate'] = 'Indexando el estado de la base de datos';
$string['datadirectory'] = 'Directorio de datos';
$string['deleteindex'] = 'Eliminar índice {$a}';
$string['deletionsinindex'] = 'Directorios en índice';
$string['docmodifiedon'] = 'Modificado por última vez el {$a}';
$string['doctype'] = 'Tipo de documento';
$string['doctypenotsupported'] = 'El tipo de documento especificado aún no está soportado';
$string['documents'] = 'documentos';
$string['documentsfor'] = 'Documentos para';
$string['documentsindatabase'] = 'Documentos en base de datos';
$string['documentsinindex'] = 'Documentos en índice';
$string['duration'] = 'Duración';
$string['emptydatabaseerror'] = 'No está presente la tabla de la base de datos o no contiene registros de índice.';
$string['enginenotfound'] = 'Motor {$a} no encontrado.';
$string['enginenotinstalled'] = 'El motor {$a} no está instalado.';
$string['enginenotselected'] = 'No ha seleccionado ningún motor de búsqueda.';
$string['engineserverstatus'] = 'El motor de búsqueda no está disponible. Por favor, contacte con su administrador.';
$string['enteryoursearchquery'] = 'Escriba su búsqueda';
$string['error_indexing'] = 'Se produjo un error al indexar';
$string['errorareanotavailable'] = 'El área de búsqueda {$a} no está disponible.';
$string['errors'] = 'Errores';
$string['everywhere'] = 'Cualquier lugar al que pueda acceder';
$string['filesinindexdirectory'] = 'Archivos en el directorio índice';
$string['filterheader'] = 'Filtro';
$string['fromtime'] = 'Modificado después de';
$string['globalsearch'] = 'Búsqueda global';
$string['globalsearchdisabled'] = 'La búsqueda global no está activada.';
$string['gradualreindex'] = 'Reindexación gradual {$a}';
$string['gradualreindex_confirm'] = '¿Está seguro de que desea volver a indexar {$a}? Esto puede llevar algún tiempo, aunque los datos existentes permanecerán disponibles durante la reindexación.';
$string['gradualreindex_queued'] = 'Se ha solicitado volver a indexar {$a->name} ({$a->count} contextos). Esta operación de indexado se llevará a cabo por la tarea programada "Indexación de Búsqueda Global".';
$string['incourse'] = 'en el curso {$a}';
$string['index'] = 'Índice';
$string['indexwhendisabledfullnotice'] = 'La indexación no se permite ahora ya que la búsqueda está desactivada. Para habilitarla, por favor revise el ajuste <a href="{$a->url}">searchindexwhendisabled</a>.';
$string['indexwhendisabledshortnotice'] = 'La indexación no está disponible.';
$string['invalidindexerror'] = 'El directorio índice contiene un índice no válido o está vacío.';
$string['ittook'] = 'Toma';
$string['matchingfile'] = 'Emparejado desde el fichero <span class="filename">{$a}</span>';
$string['matchingfiles'] = 'Emparejado desde los ficheros:';
$string['mycoursesonly'] = 'Solo mis cursos';
$string['next'] = 'Siguiente';
$string['noindexmessage'] = 'Admin: Parece no haber índice de búsqueda. Por favor';
$string['noresults'] = 'Sin resultados';
$string['normalsearch'] = 'Búsqueda normal';
$string['notitle'] = 'Sin título';
$string['openedon'] = 'abierto el';
$string['optimize'] = 'Optimizar';
$string['order'] = 'Orden de resultados';
$string['order_location'] = 'Priorizar resultados relacionados con {$a}';
$string['order_relevance'] = 'Los resultados más relevantes primero';
$string['priority'] = 'Prioridad';
$string['priority_normal'] = 'Normal';
$string['priority_reindexing'] = 'Reindexación';
$string['privacy:metadata'] = 'El subsistema de búsqueda no almacena ningún dato personal.';
$string['progress'] = 'Progreso';
$string['queryerror'] = 'La consulta que proporcionaste no se pudo realizar por parte del motor de búsqueda: {$a}';
$string['queueheading'] = 'Cola de indexación adicional ({$a} elementos)';
$string['resultsreturnedfor'] = 'resultados devueltos para';
$string['runindexer'] = 'Ejecutar indexador (real)';
$string['runindexertest'] = 'Ejecutar prueba de indexador';
$string['schemanotupdated'] = 'El esquema de búsqueda está obsoleto.';
$string['schemaversionunknown'] = 'El motor de búsqueda no conoce la versión actual del esquema (schema).';
$string['score'] = 'Puntuación';
$string['search'] = 'Búsqueda';
$string['search:course'] = 'Cursos';
$string['search:customfield'] = 'Campos personalizados del curso';
$string['search:message_received'] = 'Mensajes - recibidos';
$string['search:message_sent'] = 'Mensajes - enviados';
$string['search:mycourse'] = 'Mis cursos';
$string['search:section'] = 'Secciones de curso';
$string['search:user'] = 'Usuarios';
$string['searcharea'] = 'Área de búsqueda';
$string['searchareacategories'] = 'Categorías de área de búsqueda';
$string['searching'] = 'Buscando en...';
$string['searchnotpermitted'] = 'A Usted no se le permite hacer una búsqueda';
$string['searchsetupdescription'] = 'Los siguientes pasos son necesarios para configurar la búsqueda global de Moodle.';
$string['searchwithin'] = 'Buscar dentro de';
$string['seconds'] = 'segundos';
$string['solutions'] = 'Soluciones';
$string['statistics'] = 'Estadísticas';
$string['step'] = 'Paso';
$string['thesewordshelpimproverank'] = 'Estas palabras ayudan a mejorar el ranking';
$string['thesewordsmustappear'] = 'Estas palabras deben aparecer';
$string['thesewordsmustnotappear'] = 'Estas palabras no deben aparecer';
$string['title'] = 'Título';
$string['tofetchtheseresults'] = 'para rendir estos resultados';
$string['totalsize'] = 'Tamaño total';
$string['totime'] = 'Modificado antes de';
$string['type'] = 'Tipo';
$string['uncompleteindexingerror'] = 'El indexado no se completó con éxito: por favor, reinícielo.';
$string['versiontoolow'] = 'Lo sentimos, la búsqueda global requiere PHP 5.0 o superior';
$string['viewresultincontext'] = 'Ver este resultado en su contexto';
$string['wordsintitle'] = 'Palabras en el título';
