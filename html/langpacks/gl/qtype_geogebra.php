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
 * Strings for component 'qtype_geogebra', language 'gl', version '4.5'.
 *
 * @package     qtype_geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconstraints'] = 'Engadir restricións (condicións) ás variábeis.';
$string['addmorevarblanks'] = 'Espazos para {no} variábel(is) máis';
$string['answerinvalid'] = 'A cadea de caracteres da resposta non é válida. Isto non debería acontecer.';
$string['answermissing'] = 'Non hai resultados. Probabelmente non estea activado JavaScript no seu navegador ou aconteceu outro erro descoñecido.';
$string['answervar'] = 'Variábeis para a cualificación automática';
$string['answervar_help'] = 'Para a cualificación automática, escriba un nome para un obxecto booleano de GeoGebra que tomará o valor «verdadeiro» (true) se o alumno resolve a pregunta (en parte). Sumaranse todas as notas de todas as variábeis booleanas. A pregunta considerarase resolta con calquera combinación que supere o 100%, mais debe haber polo menos unha combinación que sume exactamente 100%. Para a cualificación manual, déixeo en branco.';
$string['applet_advanced_settings'] = 'Axustes avanzados...';
$string['constraints'] = 'Restricións (condicións)';
$string['constraints_help'] = 'Hai restricións para as variábeis tales como a < b, que non poden declararse usando as opcións do cursor de desprazamento? Deben separase por comas. Acéptanse relacións como: <, <=, >, >=. Se necesita unha igualdade debe empregar a mesma variábel ao crear a construción de GeoGebra. Non se admiten rangos dinámicos coma, p. ex., parámetros para o máximo ou mínimo dun cursor de desprazamento.';
$string['constraintswrongortoohard'] = '{$a->inequalities} son erróneas ou moi difíciles de cumprir, tentouse (por forza bruta) {$a->tries} veces en {$a->time} segundos. Quizais empreguemos un método mellor no futuro...';
$string['dragndrop'] = 'Arrastre e solte un ficheiro de GeoGebra en calquera lugar da sección da miniaplicación de GeoGebra';
$string['enable_label_drags'] = 'Activar o arrastre de etiquetas';
$string['enable_right_click'] = 'Activar o clic co botón dereito e a edición do teclado';
$string['enable_shift_drag_zoom'] = 'Activar Maiúsculas-Arrastrar e Zoom';
$string['feedback'] = 'Comentario de resposta cando a variábel é verdadeira';
$string['feedback_help'] = 'O comentario de resposta é tomado automaticamente do subtítulo da variábel no ficheiro de GeoGebra..';
$string['forcedimensions'] = 'Forzar as dimensións da miniaplicación';
$string['forcedimensions_help'] = 'De forma predeterminada, o miniapicativo GeoGebra está a escalarse automaticamente no deseño do cuestionario. Activar esta opción permitirache especificar o ancho e o alto do complemento manualmente e desactivar a escala automática.';
$string['forcedimensionsenable'] = 'Especifique o largo e a alto manualmente';
$string['geogebraapplet'] = 'Miniaplicación de GeoGebra';
$string['getvars'] = 'Obter variábeis asignadas aleatoriamente dende a miniaplicación';
$string['ggbfilemissing'] = 'Falta a cadea en base64 na resposta. Probabelmente non estea activado JavaScript no seu navegador ou aconteceu outro erro descoñecido.';
$string['ggbturl'] = 'URL ou ID da folla de traballo de GeoGebra';
$string['ggbturl_help'] = 'Pode usar o botón de compartir en GeoGebra, e copiar e pegar a ligazón, ou usar o repositorio de GeoGebra. A miniaplicación e os parámetros están gardados na base de datos, a miniaplicación non se volverá cargar dende GeoGebra a non ser que o solicite. Tamén permite fornecer só o ID ou a clave de uso compartido da miniaplicación.';
$string['ggbxmlmissing'] = 'Falta a cadea XML na resposta. Probabelmente non estea activado JavaScript no seu navegador ou aconteceu outro erro descoñecido.';
$string['height'] = 'Alto';
$string['height_help'] = 'De forma predeterminada, o miniapicativo GeoGebra escalarase automaticamente para adaptarse ao deseño da proba. Se por algún motivo non se adapta ás súas necesidades, pode especificar o largo e o alto manualmente. Se os valores son demasiado altos, os alumnos verán unha barra de desprazamento nas pantallas pequenas para amosar a miniaplicación completa.';
$string['heightnotzero'] = 'Ten que especificar un valor maior que cero para a altura';
$string['invalidinequality'] = '{$a} non é válido';
$string['isexercise'] = 'Use GeoGebra-Exercise para comprobar a pregunta';
$string['isexercise_help'] = 'A miniaplicación contén ferramentas definidas polo usuario que se poden empregar para a comprobación automática do exercicio.\\nCoidado: todas as respostas que aparecen a continuación non son aplicábeis neste caso.';
$string['israndomized'] = 'Hai variábeis asignadas aleatoriamente?';
$string['loadapplet'] = '(Re)cargar e amosar o miniaplicativo';
$string['loadapplet_help'] = '(Re)cargue a miniaplicación de GeoGebra e almacene a nova versión de GeoGebra na base de datos.';
$string['mineqmax'] = 'Non están indicados correctamente o mínimo e o máximo do intervalo para o valor aleatorio da variábel {$a}; talvez non se especificaron no cursor de desprazamento ou o obxecto non sexa un cursor de desprazamento. Probabelmente necesitará corrixir isto no seu ficheiro de GeoGebra..';
$string['minplusstepgtmax'] = 'O mínimo máis o incremento é maior que o máximo para a variábel {$a}; probabelmente necesitará corrixir isto no seu ficheiro de GeoGebra..';
$string['noappletloaded'] = 'Non hai ningunha miniaplicación cargada! Comprobe se o URL é correcto e se ve unha miniaplicación após escoller unha ligazón ou (re)cargar a miniaplicación';
$string['nofractionsumeq1'] = 'Polo menos unha combinación de cualificacións debe sumar o 100 %';
$string['pluginname'] = 'GeoGebra';
$string['pluginname_help'] = 'Preguntas nas que o alumno pode resolver a pregunta mediante GeoGebra';
$string['pluginname_link'] = 'pregunta/tipo/geogebra';
$string['pluginnameadding'] = 'Engadindo unha pregunta de GeoGebra';
$string['pluginnameediting'] = 'Editando unha pregunta de GeoGebra';
$string['pluginnamesummary'] = 'Unha versión de preguntas calculadas que usa GeoGebra para amosar a pregunta e verificar a resposta cando se fai a proba.';
$string['privacy:metadata'] = 'O complemento de tipo de pregunta de Geogebra non almacena ningún dato persoal.';
$string['randomizedbutnovars'] = 'Seleccionou que a pregunta debe ser ao chou, mais non especificou ningunha variábel válida para ser aleatoria.';
$string['randomizedvar'] = 'Variábeis para asignar aleatoriamente';
$string['randomizedvar_help'] = 'Variábeis que deben ser aleatorias (separadas por comas). Use as opcións do cursor de desprazamento en GeoGebra para declarar o mínomo, o máximo e o incremento. Estas variábeis tamén se poden usar no texto da pregunta encerrándoas con chaves, por exemplo: {a}';
$string['show_algebra_input'] = 'Amosar a barra de entrada';
$string['show_menu_bar'] = 'Amosar o menú';
$string['show_reset_icon'] = 'Amosar a icona para restabelecer a construción';
$string['show_tool_bar'] = 'Amosar a barra de Ferramentas';
$string['stepzero'] = 'O incremento é 0 para a variábel {$a}; ou non especificou o incremento do cursor de desprazamento ou o elemento non é un cursor de desprazamento. Probabelmente necesitará corrixir isto no seu ficheiro de GeoGebra.';
$string['useafile'] = '... ou use un ficheiro ggb';
$string['valuecheckedfor'] = 'Obxecto booleano en GeoGebra utilizados para comprobar a corrección.';
$string['variablenamewrong'] = 'Non foi posíbel atopar unha variábel con ese nome no ficheiro de GeoGebra.';
$string['variableno'] = 'Variábel {$a}';
$string['variables'] = 'Variábeis';
$string['width'] = 'Largo';
$string['width_help'] = 'De forma predeterminada, o miniapicativo GeoGebra escalarase automaticamente para adaptarse ao deseño da proba. Se por algún motivo non se adapta ás súas necesidades, pode especificar o largo e o alto manualmente. Se os valores son demasiado altos, os alumnos verán unha barra de desprazamento nas pantallas pequenas para amosar a miniaplicación completa.';
$string['widthnotzero'] = 'Ten que especificar un valor maior que cero para o largo';
$string['willbereadfromfile'] = 'Lerase dende GeoGebra... (ver o botón de axuda)';
