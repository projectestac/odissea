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
 * Strings for component 'url', language 'ca', branch 'MOODLE_38_STABLE'
 *
 * @package   url
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Trieu una variable...';
$string['clicktoopen'] = 'Feu clic a l\'enllaç {$a} per obrir el recurs.';
$string['configdisplayoptions'] = 'Seleccioneu totes les opcions que hagin d\'estar disponibles. Els paràmetres existents no es modificaran. Premeu la tecla CTRL per fer una selecció múltiple.';
$string['configframesize'] = 'Quan una pàgina web o un fitxer es visualitzen dins d\'un marc, aquest valor és l\'alçada (en píxels) del marc del capdamunt (el que conté la navegació).';
$string['configrolesinparams'] = 'Habiliteu aquesta opció per a incloure noms de rol personalitzats en la llista de variables disponibles.';
$string['configsecretphrase'] = 'Aquesta frase secreta s\'utilitza per a generar un codi encriptat que es pot enviar com a paràmetre a alguns servidors. Aquest codi encriptat es genera com a empremta md5 amb l\'adreça IP de l\'usuari concatenada amb la frase secreta. És dir: md5(IP.secretphrase). Teniu en compte que això no és totalment segur perquè l\'adreça IP pot canviar i sovint és compartida per diferents ordinadors.';
$string['contentheader'] = 'Contingut';
$string['createurl'] = 'Crea un URL';
$string['displayoptions'] = 'Opcions de visualització disponibles';
$string['displayselect'] = 'Visualització';
$string['displayselectexplain'] = 'Trieu el tipus de visualització. No tots els tipus són compatibles amb tots els URL.';
$string['displayselect_help'] = 'Aquest paràmetre, juntament amb el tipus de fitxer de l\'URL i depenent de si el navegador permet incrustació o no, determina com es visualitzarà l\'URL. Les possibilitats inclouen:

* Automàtica: se selecciona automàticament la millor opció de visualització.
* Incrustació: l\'URL es visualitza dins de la pàgina, sota la barra de navegació, junt amb la descripció de l\'URL i els blocs que calgui.
* Obre: la finestra de navegació només visualitza l\'URL.
* Finestra emergent: l\'URL es visualitza en una finestra nova del navegador sense menú ni barra d\'adreces.
* Marc: l\'URL es visualitza dins d\'un marc, sota la barra de navegació i la descripció de l\'URL.
* Finestra nova: l\'URL es visualitza en una finestra nova del navegador amb menú i barra d\'adreces.';
$string['externalurl'] = 'URL extern';
$string['framesize'] = 'Alçada del marc';
$string['invalidstoredurl'] = 'No es pot visualitzar aquest recurs: l\'URL és invàlid.';
$string['invalidurl'] = 'L\'URL que heu introduït no és vàlid';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'El mòdul URL permet al professor subministrar un enllaç web com a recurs docent. Es pot enllaçar a qualsevol cosa que estigui disponible lliurement en línia, com ara documents o imatges. L\'URL no ha de ser la pàgina principal d\'un lloc web; podeu copiar i enganxar els URL de pàgines particulars, o bé podeu emprar el selector de fitxers per escollir un enllaç a un repositori com Flickr, YouTube o Wikimedia (en funció de quins repositoris tingueu habilitats al vostre lloc Moodle).

Hi ha certes opcions de visualització per a l\'URL, com ara incrustat o en una nova finestra, i opcions avançades per passar informació —com ara el nom de l\'estudiant— a l\'URL, si és necessari.

Tingueu en compte que els URL també es poden afegir a qualsevol altre recurs o activitat a través de l\'editor de textos.';
$string['modulenameplural'] = 'URL';
$string['page-mod-url-x'] = 'Qualsevol pàgina del mòdul URL';
$string['parameterinfo'] = '&amp;parameter=variable';
$string['parametersheader'] = 'Variables URL';
$string['parametersheader_help'] = 'Algunes variables internes de Moodle poden afegir-se automàticament a l\'URL. Teclegeu  en cada caixa de text el nom que voleu donar al paràmetre i seleccioneu la variable corresponent.';
$string['pluginadministration'] = 'Administració del mòdul URL';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Alçada (en píxels) de la finestra emergent';
$string['popupheightexplain'] = 'Especifica l\'alçària per defecte de les finestres emergents.';
$string['popupwidth'] = 'Amplada (en píxels) de la finestra emergent.';
$string['popupwidthexplain'] = 'Especifica l\'amplària per defecte de les finestres emergents.';
$string['printintro'] = 'Mostra la descripció de l\'URL';
$string['printintroexplain'] = 'Cal mostrar la descripció de l\'URL sota el contingut? Alguns tipus de visualització poden no mostrar la descripció encara que s\'habiliti.';
$string['rolesinparams'] = 'Inclou noms de rols als paràmetres';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'URL del servidor';
$string['url:addinstance'] = 'Afegeix un recurs URL nou';
$string['url:view'] = 'Veure URL';
