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
 * Strings for component 'url', language 'gl', version '4.1'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Escoller unha variábel';
$string['clicktoopen'] = 'Prema na ligazón {$a} para abrir o recurso.';
$string['configdisplayoptions'] = 'Seleccione todas as opcións que deberían estar dispoñíbeis, os axustes existentes non se modifican. Manteña premida a tecla CTRL para seleccionar varios campos.';
$string['configframesize'] = 'Cando se presenta unha páxina web ou un ficheiro cargado dentro dun marco, este valor é a altura en píxeles do marco superior (o que contén a navegación).';
$string['configrolesinparams'] = 'Actíveo se quere incluír nomes de rol localizados na lista de parámetros de variábel dispoñíbeis.';
$string['configsecretphrase'] = 'Esta frase segreda utilízase para producir un valor de código cifrado que se pode enviar a algúns servidores como un parámetro. O código cifrado prodúceo un valor md5 do enderezo IP actual concatenado coa súa frase segreda. p.ex code = md5(IP.secretphrase). Vexa que isto non é fiábel porque o enderezo IP pode cambiar e ademais adoita ser compartido entre varios computadores.';
$string['contentheader'] = 'Contido';
$string['createurl'] = 'Crear un URL';
$string['displayoptions'] = 'Opcións dispoñíbeis de presentación';
$string['displayselect'] = 'Presentar';
$string['displayselect_help'] = 'Este axuste, xunto co tipo de URL, e sempre que o navegador permita a integración, determina como se presenta o URL. As opcións poden incluír:

* Automático - Seleccionase de forma automática a mellor opción para presentar o URL
* Incorporado - Presentase o URL dentro da páxina baixo a barra de navegación xunto coa descrición do URL e calquera outro bloque
* Abrir - Só se presenta o URL na xanela do navegador
* En xanela emerxente - Presentase o URL dentro dunha nova xanela do navegador sen menús nin unha barra de enderezos
* Nun marco - Presentase o URL dentro dun marco baixo a barra de navegación e a descrición do URL
* Nova xanela - Presentase o URL nunha nova xanela do navegador con menús e a barra de enderezos';
$string['displayselectexplain'] = 'Escolla o tipo de presentación. desafortunadamente non todos os tipos están dispoñíbeis para todos os URL.';
$string['externalurl'] = 'URL externo';
$string['framesize'] = 'Altura do marco';
$string['indicator:cognitivedepth'] = 'URL cognitivo';
$string['indicator:cognitivedepth_help'] = 'Este indicador está baseado na profundidade cognitiva acadada polo alumno nun recurso URL.';
$string['indicator:cognitivedepthdef'] = 'URL cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'O participante acadou esta porcentaxe do compromiso cognitivo que ofrecen os recursos de URL durante este intervalo de análise (Niveis = Sen vista, Ver)';
$string['indicator:cognitivedepthdef_link'] = 'Indicadores_de_aprendizaxe_analítico#Profundidade_cognitiva';
$string['indicator:socialbreadth'] = 'URL social';
$string['indicator:socialbreadth_help'] = 'Este indicador está baseado na amplitude social acadada polo alumno nun recurso URL.';
$string['indicator:socialbreadthdef'] = 'URL social';
$string['indicator:socialbreadthdef_help'] = 'O participante acadou esta porcentaxe do compromiso social que ofrecen os recursos de URL durante este intervalo de análise (Niveis = Sen participación, Participante en solitario)';
$string['indicator:socialbreadthdef_link'] = 'Indicadores_de_aprendizaxe_analítico#Amplitude_social';
$string['invalidstoredurl'] = 'Non é posíbel presentar este recurso, o URL non é correcto.';
$string['invalidurl'] = 'O URL introducido non é correcto';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'O módulo URL permítelle a un profesor fornecer unha ligazón web como un recurso de curso. Algo que estea libremente dispoñíbel en liña, como poden ser documentos ou imaxes, poden ligarse; o URL non ten que ser a páxina de inicio dun sitio web. O URL dunha páxina particular pode ser copiado e pegado ou un profesor pode usar un selector de ficheiros e escoller unha ligazón dun repositorio tipo Flickr, YouTube ou Wikimedia (segundo que repositorios estean activados para o sitio).

Hai un certo número de opcións de presentación do URL, incorporada ou para abrirse nunha nova xanela, por exemplo, e opcións avanzadas para pasar información, tales como un nome de alumno, ao URL, se fose necesario.

Vexa que os URL tamén poden engadirse a calquera outro recurso ou tipo de actividade a través do editor de texto.';
$string['modulename_link'] = 'mod/url/vista';
$string['modulenameplural'] = 'URL';
$string['name'] = 'Nome';
$string['name_help'] = 'Isto servirá como texto da ligazón para o URL.

Introduza un texto significativo que describa concisamente o propósito do URL.

Evite o uso da palabra «ligazón». Isto axudará aos usuarios de lectores de pantalla, xa que os lectores de pantalla anuncian ligazóns (por exemplo, «ligazón a Moodle.org») polo que non hai necesidade de incluír a palabra «ligazón» no campo de nome.';
$string['page-mod-url-x'] = 'Calquera URL do módulo páxina';
$string['parameterinfo'] = '&amp;parámetro=variábel';
$string['parametersheader'] = 'Variábeis de URL';
$string['parametersheader_help'] = 'Esta sección permítelle pasar información interna como parte do URL. Isto é útil se o URL é unha páxina web interactiva que leva parámetros e, por exemplo, quere pasar algo así como o nome do usuario actual. Introduza o nome do parámetro do URL na caixa de texto e seleccione a variábel do sitio correspondente.';
$string['pluginadministration'] = 'Administración do módulo URL';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Altura da xanela emerxente (en píxeles)';
$string['popupheightexplain'] = 'Especifica a altura predeterminada das xanelas emerxentes.';
$string['popupwidth'] = 'Largura da xanela emerxente (en píxeles)';
$string['popupwidthexplain'] = 'Especifica a largura predeterminada das xanelas emerxentes.';
$string['printintro'] = 'Presentar a descrición do URL';
$string['printintroexplain'] = 'Presentar a descrición do URL debaixo do contido? Algúns tipos de pantallas poida que non presenten a descrición aínda que estea activado.';
$string['privacy:metadata'] = 'O engadido de recurso URL non almacena ningún dato persoal.';
$string['rolesinparams'] = 'Incluír nomes de roles nos parámetros';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'URL do servidor';
$string['url:addinstance'] = 'Engadir un novo recurso URL';
$string['url:view'] = 'Ver o URL';
