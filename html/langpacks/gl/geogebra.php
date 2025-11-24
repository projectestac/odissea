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
 * Strings for component 'geogebra', language 'gl', version '4.5'.
 *
 * @package     geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclosed'] = 'Esta actividade foi pechada';
$string['activitynotopened'] = 'Esta actividade aínda non está dispoñible';
$string['attempt'] = 'Intento';
$string['attempts'] = 'Intentos';
$string['attemptsremaining'] = 'Intentos restantes para esta actividade:';
$string['autograde'] = 'Actividade autoavaliable';
$string['availabledate'] = 'Dispoñible dende';
$string['average'] = 'Promedio';
$string['choosescripttype'] = 'Escoller o tipo de script';
$string['comment'] = 'Comentario';
$string['contentheader'] = 'Contido';
$string['datestudent'] = 'Última modificación (envío)';
$string['dateteacher'] = 'Última modificación (calificación)';
$string['deleteallattempts'] = 'Eliminar todos os intentos';
$string['description'] = 'Descrición';
$string['discardchanges'] = 'Descartar cambios e volver';
$string['duedate'] = 'Data límite';
$string['duration'] = 'Duración';
$string['enableLabelDrags'] = 'Habilitar etiquetas arrastables';
$string['enableRightClick'] = 'Habilitar botón dereito';
$string['errorattempt'] = 'Erro: o intento non puido ser gardado.';
$string['event_course_module_viewed'] = 'Módulo de curso visto';
$string['event_instances_list_viewed'] = 'Lista de instancias vistas';
$string['expired'] = 'Disculpe, esta actividade foi pechada en {$a} e non está dispoñible';
$string['filename'] = 'Nome de ficheiro';
$string['filenotfound'] = 'O ficheiro seleccionado non existe';
$string['filetype'] = 'Tipo';
$string['filetype_help'] = 'Esta configuración determina como a actividade GeoGebra é incluída no curso. Hai 2 opcións:

* Subir GeoGebra - Envía un paquete ".ggb"  válido para o selector.
* URL externa - Especifica unha URL válida. Nota: A URL debe empezar con http(s) ou www e conter un ficheiro ".ggb" válido.';
$string['filetypeexternal'] = 'URL externa';
$string['filetypelocal'] = 'Ficheiro subido';
$string['firstattempt'] = 'Primeiro intento';
$string['for'] = 'para';
$string['functionalityoptionsgrp'] = 'Funcionalidade';
$string['geogebra:addinstance'] = 'Engadir GeoGebra';
$string['geogebra:grade'] = 'Calificar GeoGebra';
$string['geogebra:submit'] = 'Enviar GeoGebra';
$string['geogebra:view'] = 'Ver GeoGebra';
$string['geogebrafile'] = 'Ficheiro GeoGebra';
$string['geogebrafile_help'] = 'O ficheiro .ggb.';
$string['geogebraurl'] = 'URL';
$string['geogebraurl_help'] = 'Atopar a construcción de <a href="https://www.geogebra.org/" target="_blank">geogebra.org</a>, vaia a <strong>Detalles</strong>, botón dereito en <strong>Descarga</strong> e seleccionar <strong>Copiar ligazón</strong>. Finalmente, vaia ao campo URL e peque a ligazón con <strong>Ctrl+V</strong>.<br/>Vexa un exemplo en: <a href="https://youtu.be/qbp-RuM4NpU" target="_blank">https://youtu.be/qbp-RuM4NpU</a>.';
$string['grade'] = 'Calificar';
$string['gradeit'] = 'Calificar';
$string['grademethod'] = 'Método de calificación';
$string['height'] = 'Altura';
$string['highestattempt'] = 'Intento máis alto';
$string['httpnotallowed'] = 'Polo momento non está permitido empregar ficheiros externos';
$string['interfaceoptionsgrp'] = 'Interface de usuario';
$string['invalidgeogebrafile'] = 'Especificado un GeoGebra inválido. Debe ter unha extensión ".ggb".';
$string['invalidurl'] = 'URL inválida. Debe empezar con http(s e debe conter un ficheiro ".ggb" válido.';
$string['language'] = 'Idioma';
$string['lastattempt'] = 'Último intento';
$string['lastattemptremaining'] = 'Este é o seu último intento para esta actividade';
$string['lastmodifiedgrade'] = 'Última modificación (calificación)';
$string['lastmodifiedsubmission'] = 'Última modificación (envío)';
$string['lowestattempt'] = 'Intento máis lento';
$string['maxattempts'] = 'Máximo número de intentos';
$string['modulename'] = 'GeoGebra';
$string['modulename_help'] = '<p><a href="http://www.geogebra.org" target="_blank">GeoGebra</a> é un software dinámico de matemáticas gratuíto e multi-plataforma para todos os niveles da educación que traballa xeometría, álxebra, táboas, gráficos, estatísticas e cálculo nun paquete fácil.</p>
<p>Para isto, o <a href="http://www.gencat.cat/ensenyament/" target="_blank">Departament of Education of Catalonia</a> en colaboración coa the <a href="http://acgeogebra.cat/" target="_blank">Catalan Association of GeoGebra</a> (ACG) e o equipo de desenvolvemento de GeoGebra implementaron este módulo que permite a incorporación de actividades GeoGebra en Moodle. As súas principais características son:
<ul>
    <li>Permite a inserción sinxela de actividades GeoGebra nun curso Moodle.</li>
    <li>Facilita o seguemento dos estudantes gardando as súas puntuacións, datas, duración e intentos feitos polos usuarios.</li>
    <li>Os estudantes pode gardar o seu traballo e continualo despois.</li>
</ul>
</p>';
$string['modulenameplural'] = 'GeoGebra';
$string['msg_noattempts'] = 'Realizou o número máximo de intentos para esta actividade';
$string['msg_nosessions'] = 'Esta actividade GeoGebra aínda non ten sesión';
$string['name'] = 'Nome';
$string['noattempts'] = '-';
$string['nomoreattempts'] = 'Non quedan máis intentos para esta actividade';
$string['notopenyet'] = 'Desculpe, esta actividade non está dispoñible ata {$a}';
$string['pluginadministration'] = 'Administración de GeoGebra';
$string['pluginname'] = 'GeoGebra';
$string['preview_geogebra'] = 'Previsualizar a actividade GeoGebra';
$string['previewtab'] = 'Previsualizar';
$string['privacy'] = 'Resultados de privacidade';
$string['privacy:metadata:geogebra_attempts'] = 'Información sobre os resultados dos intentos feitos nunha actividade GeoGebra';
$string['privacy:metadata:geogebra_attempts:datestudent'] = 'Marca de tempo indicada cando un intento dun estudante foi finalizado';
$string['privacy:metadata:geogebra_attempts:dateteacher'] = 'Marca de tempo indicada cando un intento do mestre foi finalizado';
$string['privacy:metadata:geogebra_attempts:finished'] = 'Marca detempo indicada cando un intento dun usuario foi finalizado';
$string['privacy:metadata:geogebra_attempts:geogebra'] = 'A ID da elección da actividade';
$string['privacy:metadata:geogebra_attempts:gradecomment'] = 'O comentario da calificación para o intento da actividade GeoGebra';
$string['privacy:metadata:geogebra_attempts:userid'] = 'A ID do usuario respostando a actividade de GeoGebra';
$string['privacy:metadata:geogebra_attempts:vars'] = 'A ID da opción seleccionada polo usuario.';
$string['redirecttocourse'] = 'A actividade foi gardada. Volvendo á páxina principal do curso';
$string['report'] = 'Informde de';
$string['results'] = 'Resultados';
$string['resultstab'] = 'Resultados';
$string['resumeattempt'] = 'Finalizando intentos non rematados';
$string['review'] = 'Revisión de';
$string['reviewtab'] = 'Revisión';
$string['savechanges'] = 'Gardar cambios';
$string['savewithoutsubmitting'] = 'Gardar sen enviar';
$string['settings'] = 'Axustes';
$string['showAlgebraInput'] = 'Amosar barra de entrada';
$string['showMenuBar'] = 'Amosar barra de menú';
$string['showResetIcon'] = 'Amosar icona pra reniciar a construcción';
$string['showToolBar'] = 'Amosar barra de ferramentas';
$string['showToolBarHelp'] = 'Amosar axuda da barra de ferramentas';
$string['showsubmit'] = 'Amosar o botón de envío';
$string['status'] = 'Estatísticas';
$string['submitandfinish'] = 'Enviar e finalizar';
$string['timing'] = 'Tempo';
$string['total'] = 'Total';
$string['unfinished'] = 'Non finalizado';
$string['unlimitedattempts'] = 'Intentos ilimitados para esta actividade';
$string['urledit'] = 'ficheiro GeoGebra';
$string['urledit_help'] = 'O ficheiro ".ggb" onde atopará a actividade GeoGebra.';
$string['useBrowserForJS'] = 'Empregar JavaScript dende:';
$string['useBrowserForJS_geogebra'] = 'Ficheiro GeoGebra (falso)';
$string['useBrowserForJS_html'] = 'HTML (verdadeiro)';
$string['view'] = 'Ver';
$string['viewattempt'] = 'Ver';
$string['viewattempts'] = 'Ver intentos';
$string['viewattempttab'] = 'Ver intento';
$string['viewtab'] = 'Ver';
$string['weight'] = 'Tamaño';
$string['width'] = 'Ancho';
