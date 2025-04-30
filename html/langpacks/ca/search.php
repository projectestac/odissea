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
 * Strings for component 'search', language 'ca', version '4.4'.
 *
 * @package     search
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Cerca avançada';
$string['all'] = 'Tots';
$string['allareas'] = 'Totes les àrees';
$string['allcourses'] = 'Tots els cursos';
$string['allusers'] = 'Tots els usuaris';
$string['author'] = 'Autor/a';
$string['authorname'] = 'Nom de l\'autor/a';
$string['back'] = 'Enrere';
$string['beadmin'] = 'Cal tenir permisos d\'administració per usar aquesta pàgina.';
$string['checkdb'] = 'Revisa la base de dades';
$string['checkdbadvice'] = 'Reviseu la base de dades en cas que hi hagi problemes.';
$string['checkdir'] = 'Revisa directori';
$string['checkdiradvice'] = 'Assegureu-vos que el directori de dades existeix i que s\'hi pot escriure.';
$string['commenton'] = 'Comentari sobre';
$string['confirm_delete'] = 'Esteu segur que voleu suprimir l\'índex de {$a}? Fins que no s\'indexi l\'àrea de cerca, els usuaris no obtindran resultats de cerca d\'aquesta àrea.';
$string['confirm_deleteall'] = 'Esteu segur que voleu suprimir tots els continguts indexats ara? Fins que el lloc no torni a ser indexat, els usuaris no obtindran resultats de cerca.';
$string['confirm_indexall'] = 'Esteu segur que voleu actualitzar el contingut indexat ara? Si una gran quantitat de contingut necessita indexar-se, això pot trigar molt de temps. Per als servidors autònoms, normalment hauríeu de deixar la indexació a la tasca programada «Cerca global d\'indexació».';
$string['confirm_reindexall'] = 'Esteu segur que voleu reindexar tot el contingut del lloc ara? Si el vostre lloc conté una gran quantitat de contingut, això tardarà molt de temps, i els usuaris poden no obtenir resultats de cerca complets fins que es completi.';
$string['content:courserole'] = '{$a->role} a {$a->course}';
$string['core-all'] = 'Tots';
$string['core-course-content'] = 'Contingut del curs';
$string['core-courses'] = 'Cursos';
$string['core-other'] = 'Altres';
$string['core-users'] = 'Usuaris';
$string['createanindex'] = 'creeu un índex';
$string['createdon'] = 'Creat';
$string['database'] = 'Base de dades';
$string['databasestate'] = 'Estat de la base de dades d\'indexació';
$string['datadirectory'] = 'Directori de dades';
$string['deleteindex'] = 'Suprimeix l\'índex {$a}';
$string['deletionsinindex'] = 'Supressions en l\'índex';
$string['docmodifiedon'] = 'La darrera modificació ha estat a {$a}';
$string['doctype'] = 'Tipus de document';
$string['doctypenotsupported'] = 'El tipus de document especificat encara no està admès';
$string['documents'] = 'documents';
$string['documentsfor'] = 'Documents en';
$string['documentsindatabase'] = 'Documents en la base de dades';
$string['documentsinindex'] = 'Documents en l\'índex';
$string['duration'] = 'Durada';
$string['emptydatabaseerror'] = 'No existeix la taula de la base de dades, o no conté registres d\'índex.';
$string['enginenotfound'] = 'No s\'ha trobat el motor {$a}.';
$string['enginenotinstalled'] = 'El motor {$a} no està instal·lat.';
$string['enginenotselected'] = 'No heu seleccionat cap cercador.';
$string['engineserverstatus'] = 'El cercador no està disponible. Contacteu amb el vostre administrador.';
$string['enteryoursearchquery'] = 'Introduïu la vostra cerca';
$string['error_indexing'] = 'S\'ha produït un error en indexar';
$string['errorareanotavailable'] = 'L\'àrea de cerca {$a} no està disponible.';
$string['errors'] = 'Errors';
$string['everywhere'] = 'A tot arreu on podeu accedir';
$string['filesinindexdirectory'] = 'Fitxers en el directori índex';
$string['filterheader'] = 'Filtre';
$string['fromtime'] = 'Modificat després de';
$string['globalsearch'] = 'Cerca global';
$string['globalsearchdisabled'] = 'No s\'ha habilitat la cerca global';
$string['gradualreindex'] = 'Reindexació gradual {$a}';
$string['gradualreindex_confirm'] = 'Esteu segur que voleu reindexar {$a}? Això pot tardar una estona, tot i que les dades existents romandran disponibles durant la reindexació.';
$string['gradualreindex_queued'] = 'S\'ha sol·licitat la reindexació de {$a->name} ({$a->count} contexts). Aquesta indexació es durà a terme per la tasca programada «Indexació de la cerca global».';
$string['incourse'] = 'al curs {$a}
';
$string['index'] = 'Índex';
$string['indexwhendisabledfullnotice'] = 'La indexació no està permesa actualment quan la cerca està desactivada. Per activar-ho, vegeu el paràmetre <a href="{$a->url}">searchindexwhendisabled</a>.';
$string['indexwhendisabledshortnotice'] = 'La indexació no està disponible.';
$string['invalidindexerror'] = 'El directori índex és buit o no conté un índex vàlid.';
$string['ittook'] = 'Ha costat';
$string['matchingfile'] = 'Coincidència des del fitxer <span class="filename">{$a}</span>';
$string['matchingfiles'] = 'Coincidència des dels fitxers:';
$string['mycoursesonly'] = 'Només els meus cursos';
$string['next'] = 'Següent';
$string['noindexmessage'] = 'Administradors: sembla que no existeix l\'índex de cerca.';
$string['noresults'] = 'No hi ha cap resultat';
$string['normalsearch'] = 'Cerca normal';
$string['notitle'] = 'Sense títol';
$string['openedon'] = 'obert';
$string['optimize'] = 'Optimitza';
$string['order'] = 'Ordre dels resultats';
$string['order_location'] = 'Prioritza els resultats relacionats amb {$a}';
$string['order_relevance'] = 'Primer els resultats més rellevants';
$string['priority'] = 'Prioritat';
$string['priority_normal'] = 'Normal';
$string['priority_reindexing'] = 'Reindexació
';
$string['privacy:metadata'] = 'El subsistema de cerca no emmagatzema cap dada personal.
';
$string['progress'] = 'Progrés';
$string['queryerror'] = 'El motor de cerca no ha pogut analitzar la consulta que heu proporcionat: {$a}';
$string['queueheading'] = 'Cua d\'indexació addicional ({$a} elements)';
$string['resultsreturnedfor'] = 'resultats per a';
$string['runindexer'] = 'Executa l\'indexador (real)';
$string['runindexertest'] = 'Executa la prova d\'indexació';
$string['schemanotupdated'] = 'L\'esquema de cerca no està actualitzat.';
$string['schemaversionunknown'] = 'El motor de cerca no coneix la versió actual de l\'esquema.';
$string['score'] = 'Puntuació';
$string['search'] = 'Cerca';
$string['search:course'] = 'Cursos';
$string['search:course_teacher'] = 'Professor del curs
';
$string['search:customfield'] = 'Camps personalitzats del curs';
$string['search:message_received'] = 'Missatges - rebuts';
$string['search:message_sent'] = 'Missatges - enviats';
$string['search:mycourse'] = 'Els meus cursos';
$string['search:section'] = 'Seccions del curs';
$string['search:user'] = 'Usuaris';
$string['searcharea'] = 'Àrea de cerca';
$string['searchareacategories'] = 'Categories de l\'àrea de cerca';
$string['searching'] = 'S\'està cercant en...';
$string['searchnotpermitted'] = 'No teniu permís per fer una cerca';
$string['searchsetupdescription'] = 'Els passos següents us ajuden a configurar la cerca global de Moodle.';
$string['searchwithin'] = 'Cerca dins';
$string['seconds'] = 'segons';
$string['solutions'] = 'Solucions';
$string['statistics'] = 'Estadístiques';
$string['step'] = 'Pas';
$string['thesewordshelpimproverank'] = 'Aquestes paraules milloren la puntuació';
$string['thesewordsmustappear'] = 'Han d\'aparèixer aquestes paraules';
$string['thesewordsmustnotappear'] = 'No han d\'aparèixer aquestes paraules';
$string['title'] = 'Títol';
$string['tofetchtheseresults'] = 'obtenir aquests resultats';
$string['topresults'] = 'Resultats principals';
$string['totalsize'] = 'Mida total';
$string['totime'] = 'Modificat abans';
$string['type'] = 'Tipus';
$string['uncompleteindexingerror'] = 'La indexació no s\'ha completat amb èxit. Reinicieu-la.';
$string['versiontoolow'] = 'La cerca global requereix PHP 5.0.0 o superior';
$string['viewresultincontext'] = 'Visualitzeu aquest resultat en context';
$string['wordsintitle'] = 'Paraules en el títol';
