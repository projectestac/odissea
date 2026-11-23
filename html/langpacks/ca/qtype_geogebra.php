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
 * Strings for component 'qtype_geogebra', language 'ca', version '4.5'.
 *
 * @package     qtype_geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconstraints'] = 'Afegir restriccions (condicions) a les variables.';
$string['addmorevarblanks'] = 'Espais per a {no} variable(s) més';
$string['answerinvalid'] = 'La cadena de caracters de la resposta no és vàlida. Això no hauria de passar.';
$string['answermissing'] = 'No hi ha resultats. Probablement el JavaScript no se està activat en el vostre navegador (o ha succeït algun altre error desconegut).';
$string['answervar'] = 'Variables per a la qualificació automàtica';
$string['answervar_help'] = 'Per a la qualificació automàtica: Un nom d\'un objecte booleà a GeoGebra que és cert si l\'estudiant ha resolt la pregunta (en part). Suma totes les qualificacions de totes les variables booleanes. La pregunta és correcta si alguna combinació supera el 100%, però hi hauria d\'haver almenys una combinació que sumi exactament el 100%. Deixeu-ho en blanc per a fer la qualificació manual.';
$string['applet_advanced_settings'] = 'Configuració avançada...';
$string['codebase'] = 'Ubicació del codi base HTML5 de GeoGebra';
$string['codebase_description'] = 'Deixeu-ho buit per utilitzar la versió més recent del codi base. Indiqueu una ubicació específica, com ara «https://www.geogebra.org/apps/5.0.744.0/web3d», per utilitzar-la com a codi base per a totes les preguntes.';
$string['constraints'] = 'Restriccions (condicions)';
$string['constraints_help'] = 'Hi ha alguns lligams o restriccions per a les variables, del tipus a < b, que no es poden definir usant les opcions del punt lliscant? Separeu-los per comes. Les relacions vàlides són: <, <=, >, >=. Si us cal una igualtat heu d\'utilitzar la mateixa variable en crear el nou full d\'activitats de GeoGebra. No es poden utilitzar intervals dinàmics, és a dir, utilitzar variables per als valors mínim i màxims d\'un punt lliscant no és permès.';
$string['constraintswrongortoohard'] = '{$a->inequalities} estan equivocats o són massa difícils de complir, ho hem intentat (per la força bruta) {$a->tries} vegades en {$a->time} segons. Potser utilitzarem un mètode millor en el futur...';
$string['dragndrop'] = 'Arrossegueu i deixeu anar un fitxer GeoGebra a qualsevol lloc de la secció de la miniaplicació de GeoGebra';
$string['enable_label_drags'] = 'Habilita l\'arrossegament d\'etiquetes';
$string['enable_right_click'] = 'Activa el clic dret i l\'edició per teclat';
$string['enable_shift_drag_zoom'] = 'Habiliteu Maj + Arrossegueu i Zoom';
$string['feedback'] = 'Retroalimentació quan la variable és certa';
$string['feedback_help'] = 'Els comentaris es prenen automàticament del títol de la variable al fitxer GeoGebra.';
$string['forcedimensions'] = 'Força les dimensions de la miniaplicació';
$string['forcedimensions_help'] = 'Per defecte, la miniaplicació del GeoGebra s\'escala automàticament dins del disseny del qüestionari. Si activeu aquesta opció, podreu especificar manualment l\'amplada i l\'alçada del connector i desactivar l\'escalat automàtic.';
$string['forcedimensionsenable'] = 'Especifica l\'amplada i l\'alçada manualment';
$string['geogebraapplet'] = 'Miniaplicació de GeoGebra';
$string['getvars'] = 'Obté variables que es poden aleatoritzar des de la miniaplicació';
$string['ggbfilemissing'] = 'Falta la cadena base64 a la resposta. Probablement el JavaScript no està activat al navegador o s\'ha produït un error desconegut';
$string['ggbturl'] = 'URL o ID del full de treball de GeoGebra';
$string['ggbturl_help'] = 'Podeu utilitzar el botó de compartir a GeoGebra i copiar i enganxar l\'enllaç o utilitzar el repositori de GeoGebra. La miniaplicació i els paràmetres s\'emmagatzemen a la base de dades. La miniaplicació no es tornarà a carregar des de GeoGebra tret que se sol·liciti. També s\'admet proporcionar només l\'identificador o la clau de compartició de la miniaplicació.';
$string['ggbxmlmissing'] = 'Falta la cadena XML a la resposta. Probablement JavaScript no està activat al navegador o s\'ha produït un error desconegut';
$string['height'] = 'Alçada';
$string['height_help'] = 'Per defecte, la miniaplicació de GeoGebra s\'escalarà automàticament per adaptar-se al disseny del qüestionari. Si, per algun motiu, això no s\'ajusta a les vostres necessitats, podeu especificar l\'amplada i l\'alçada manualment. Si els valors són massa elevats, els estudiants veuran una barra de desplaçament en pantalles petites per poder visualitzar la miniaplicació sencera.';
$string['heightnotzero'] = 'Heu d\'especificar un valor més gran que zero per a l\'alçada';
$string['invalidinequality'] = '{$a} no és vàlid';
$string['isexercise'] = 'Utilitzeu GeoGebra-Exercise per comprovar la pregunta';
$string['isexercise_help'] = 'La miniaplicació conté eines definides per l\'usuari que es poden utilitzar per a la verificació automàtica de l\'exercici.
Atenció: totes les respostes següents no són aplicables en aquest cas!';
$string['israndomized'] = 'Hi ha alguna variable que s\'hauria d\'aleatoriar?';
$string['loadapplet'] = '(Re)carrega i mostra la miniaplicació';
$string['loadapplet_help'] = '(Re)carrega la miniaplicació de GeoGebra i emmagatzema la nova versió des de GeoGebra a la base de dades.';
$string['mineqmax'] = 'Els valors mínims i màxims per a l\'aleatorització no estan ben especificats per la variable {$a}, o potser no heu especificat aquests valors mínims i màxims del punt lliscant, o l\'element no és un punt lliscant. Segurament cal que feu aquesta correcció en el vostre arxiu GeoGebra.';
$string['minplusstepgtmax'] = 'Min plus increment is greater than Max for variable {$a}, you probably have to correct this in your GeoGebra file.';
$string['noappletloaded'] = 'No s\'ha carregat la miniaplicació. Comproveu que l\'URL sigui correcte i si veieu una miniaplicació després de triar un enllaç o (re)carregar la miniaplicació';
$string['nofractionsumeq1'] = 'Com a mínim una combinació de correccions ha de sumar el 100%';
$string['pluginname'] = 'GeoGebra';
$string['pluginname_help'] = 'Preguntes on l\'estudiant pot resoldre la pregunta mitjançant GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';
$string['pluginnameadding'] = 'Afegeix una pregunta de GeoGebra';
$string['pluginnameediting'] = 'Edició d\'una pregunta de GeoGebra';
$string['pluginnamesummary'] = 'Una versió de preguntes calculades que utilitza GeoGebra per mostrar la pregunta i verificar la resposta quan es fa el qüestionari.';
$string['privacy:metadata'] = 'El connector de tipus de pregunta GeoGebra no emmagatzema cap dada personal.';
$string['randomizedbutnovars'] = 'Heu seleccionat que la pregunta s\'hauria d\'aleatoritzar, però no heu especificat cap variable vàlida per variar aleatòriament.';
$string['randomizedvar'] = 'Variables a aleatoritzar';
$string['randomizedvar_help'] = 'Variables que haurien de ser aleatòries (separades per comes). Utilitzeu les opcions del control lliscant de GeoGebra per declarar Min, Max i Increment. Aquestes variables també es poden utilitzar al text de la pregunta tancant-les amb claus, per exemple: {a}';
$string['show_algebra_input'] = 'Mostra la barra d\'entrada';
$string['show_menu_bar'] = 'Mostra el menú';
$string['show_reset_icon'] = 'Mostra la icona per restablir la construcció';
$string['show_tool_bar'] = 'Mostra la barra d\'eines';
$string['stepzero'] = 'Increment 0 per a la variable {$a}; o no s\'ha especificat en el punt lliscant o l\'objecte no és un punt lliscant. Probablement haureu de corregir això en el vostre fitxer GeoGebra.';
$string['useafile'] = '... o utilitzeu un fitxer ggb';
$string['valuecheckedfor'] = 'L\'objecte booleà de GeoGebra utilitzat per comprovar la correcció.';
$string['variablenamewrong'] = 'No es troba cap variable amb aquest nom en el fitxer de GeoGebra.';
$string['variableno'] = 'Variable {$a}';
$string['variables'] = 'Variables';
$string['width'] = 'Amplada';
$string['width_help'] = 'Per defecte, la miniaplicació de GeoGebra s\'escalarà automàticament per adaptar-se al disseny del qüestionari. Si, per algun motiu, això no s\'ajusta a les vostres necessitats, podeu especificar l\'amplada i l\'alçada manualment. Si els valors són massa elevats, els estudiants veuran una barra de desplaçament en pantalles petites per poder visualitzar la miniaplicació sencera.';
$string['widthnotzero'] = 'Heu d\'especificar un valor més gran que zero per a l\'amplada.';
$string['willbereadfromfile'] = 'Es llegirà des de GeoGebra... (veure el botó d\'ajuda)';
