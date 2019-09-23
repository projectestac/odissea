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
 * Strings for component 'search', language 'gl', branch 'MOODLE_36_STABLE'
 *
 * @package   search
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Busca avanzada';
$string['all'] = 'Todos';
$string['allareas'] = 'Todas as áreas';
$string['allcourses'] = 'Todos os cursos';
$string['allusers'] = 'Todos os usuarios';
$string['author'] = 'Autor';
$string['authorname'] = 'Nome do autor';
$string['back'] = 'Atrás';
$string['beadmin'] = 'Necesita ser un usuario administrador para usar esta páxina.';
$string['checkdb'] = 'Comprobar a base de datos';
$string['checkdbadvice'] = 'Comprobe a base de datos por se houber algún problema.';
$string['checkdir'] = 'Comprobar o directorio';
$string['checkdiradvice'] = 'Asegúrese de que existe o directorio de datos e que se pode escribir nel.';
$string['commenton'] = 'Comentarios sobre';
$string['confirm_delete'] = 'Confirma que quere eliminar o índice de {$a}? Ata que a área de busca estea indexada, os usuarios non obterán resultados de busca desta área.';
$string['confirm_deleteall'] = 'Confirma que quere eliminar todos os contidos indexados agora? Ata que o sitio non se indexa de novo, os usuarios non obterán resultados de busca.';
$string['confirm_indexall'] = 'Confirma que quere actualizar os contidos indexados agora? Se unha gran cantidade de contido precisa de indexación, isto pode levar moito tempo. Para os servidores en directo, normalmente debería deixar a indexación na tarefa programada «Indexado de busca global».';
$string['confirm_reindexall'] = 'Confirma que quere volver indexar todos os contidos do sitio agora? Se o sitio contén unha gran cantidade de contido, isto levará moito tempo e os usuarios non poderán obter os resultados da busca completa ata que se complete.';
$string['createanindex'] = 'crear un índice';
$string['createdon'] = 'Creado o';
$string['database'] = 'Base de datos';
$string['databasestate'] = 'Indexando o estado da base de datos';
$string['datadirectory'] = 'Directorio de datos';
$string['deleteindex'] = 'Eliminar o índice {$a}';
$string['deletionsinindex'] = 'Eliminacións no índice';
$string['docmodifiedon'] = 'Modificado por última vez: {$a}';
$string['doctype'] = 'Tipo de doc.';
$string['doctypenotsupported'] = 'O tipo de documento especificado aínda non é compatíbel';
$string['documents'] = 'documentos';
$string['documentsfor'] = 'Documentos para';
$string['documentsindatabase'] = 'Documentos na base de datos';
$string['documentsinindex'] = 'Documentos no índice';
$string['duration'] = 'Duración';
$string['emptydatabaseerror'] = 'Non está presente a táboa da base de datos ou non contén rexistros do índice.';
$string['enginenotfound'] = 'Non se atopou o motor {$a}.';
$string['enginenotinstalled'] = 'O motor {$a} non está instalado.';
$string['enginenotselected'] = 'Non ten seleccionando ningún motor de busca.';
$string['engineserverstatus'] = 'Non está dispoñíbel o motor de buscas. Póñase en contacto co administrador.';
$string['enteryoursearchquery'] = 'Escriba a súa consulta de busca';
$string['errorareanotavailable'] = 'A área de buscas {$a} non está dispoñíbel.';
$string['error_indexing'] = 'Produciuse un erro ao indexar';
$string['errors'] = 'Erros';
$string['everywhere'] = 'En calquera lugar ao que vostede poida acceder';
$string['filesinindexdirectory'] = 'Ficheiros no directorio do índice';
$string['filterheader'] = 'Filtro';
$string['fromtime'] = 'Modificado após';
$string['globalsearch'] = 'Busca global';
$string['globalsearchdisabled'] = 'Non está activada a busca global.';
$string['gradualreindex'] = 'Volver indexar {$a} de xeito gradual';
$string['gradualreindex_confirm'] = 'Confirma que quere volver indexar {$a}? Isto pode levar moito tempo, aínda que os datos existentes permanecerán dispoñibles durante o reindexado.';
$string['gradualreindex_queued'] = 'Solicitouse o reindexado para {$a->name} en ({$a->count} contextos). Este re-indexado será efectuada polo traballo programado «Indexado de busca global».';
$string['incourse'] = 'en curso {$a}';
$string['index'] = 'Índice';
$string['indexwhendisabledfullnotice'] = 'Actualmente non se permite a indexación cando a busca estea desactivada. Para activar isto, consulte o axuste <a href="{$a->url}">searchindexwhendisabled</a>.';
$string['indexwhendisabledshortnotice'] = 'A indexación non está dispoñible.';
$string['invalidindexerror'] = 'O índice do directorio, ou contén un índice incorrecto, ou non contén nada.';
$string['ittook'] = 'Levoulle';
$string['matchingfile'] = 'Emparellando desde o ficheiro <span class="filename">{$a}</span>';
$string['matchingfiles'] = 'Emparellando desde os ficheiros:';
$string['next'] = 'Seguinte';
$string['noindexmessage'] = 'Admin: Semella que non hai ningún índice de busca.';
$string['noresults'] = 'Sen resultados';
$string['normalsearch'] = 'Busca normal';
$string['notitle'] = 'Sen título';
$string['openedon'] = 'aberto o';
$string['optimize'] = 'Optimizar';
$string['order'] = 'Orde de resultados';
$string['order_location'] = 'Prioriza os resultados relacionados con {$a}';
$string['order_relevance'] = 'Primeiro os resultados máis relevantes';
$string['priority'] = 'Prioridade';
$string['priority_normal'] = 'Normal';
$string['priority_reindexing'] = 'Reindexando';
$string['privacy:metadata'] = 'O subsistema de busca non almacena ningún dato persoal.';
$string['progress'] = 'Progreso';
$string['queryerror'] = 'A consulta que forneceu non puido ser interpretada polo motor de buscas: {$a}';
$string['queueheading'] = 'Cola adicional de indexado ({$a} elementos)';
$string['resultsreturnedfor'] = 'resultados devolvidos por';
$string['runindexer'] = 'Executar o indexador (real)';
$string['runindexertest'] = 'Executar unha proba do indexador';
$string['schemanotupdated'] = 'O esquema de busca está desactualizado.';
$string['schemaversionunknown'] = 'O motor de busca non sabe sobre a versión actual do esquema.';
$string['score'] = 'Puntuación';
$string['search'] = 'Buscar';
$string['searcharea'] = 'Área de buscas';
$string['searching'] = 'Buscando en ...';
$string['search:message_received'] = 'Mensaxes - recibidas';
$string['search:message_sent'] = 'Mensaxes - enviadas';
$string['search:mycourse'] = 'Os meus cursos';
$string['searchnotpermitted'] = 'Non está autorizado para facer unha busca';
$string['search:section'] = 'Seccións do curso';
$string['searchsetupdescription'] = 'Os pasos seguintes axudaranlle a configurar a busca global en Moodle.';
$string['search:user'] = 'Usuarios';
$string['searchwithin'] = 'Buscar en';
$string['seconds'] = 'segundos';
$string['solutions'] = 'Solucións';
$string['statistics'] = 'Estatísticas';
$string['step'] = 'Paso';
$string['thesewordshelpimproverank'] = 'Estas palabras axudan a mellorar o intervalo';
$string['thesewordsmustappear'] = 'Estas palabras deben aparecer';
$string['thesewordsmustnotappear'] = 'Estas palabras non deben aparecer';
$string['title'] = 'Título';
$string['tofetchtheseresults'] = 'en busca destes resultados';
$string['totalsize'] = 'Tamaño total';
$string['totime'] = 'Modificado antes de';
$string['type'] = 'Tipo';
$string['uncompleteindexingerror'] = 'O indexado non foi satisfactorio, inícieo de novo.';
$string['versiontoolow'] = 'Sentímolo, a busca global require PHP 5.0.0 ou posterior';
$string['viewresultincontext'] = 'Ver este resultado en contexto';
$string['wordsintitle'] = 'Palabras no título';
