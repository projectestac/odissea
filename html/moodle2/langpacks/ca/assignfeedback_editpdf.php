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
 * Strings for component 'assignfeedback_editpdf', language 'ca', branch 'MOODLE_32_STABLE'
 *
 * @package   assignfeedback_editpdf
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'Afegeix a la llista ràpida';
$string['annotationcolour'] = 'Color de l\'anotació';
$string['black'] = 'Negre';
$string['blue'] = 'Blau';
$string['cannotopenpdf'] = 'No es pot obrir el PDF. El fitxer pot estar corrupte o tenir un format no suportat.';
$string['clear'] = 'Suprimeix';
$string['colourpicker'] = 'Selector de color';
$string['command'] = 'Ordre:';
$string['comment'] = 'Comentaris';
$string['commentcolour'] = 'Color del comentari';
$string['commentcontextmenu'] = 'Menú contextual del comentari';
$string['couldnotsavepage'] = 'No es pot desar la pàgina {$a}';
$string['currentstamp'] = 'Segell';
$string['deleteannotation'] = 'Suprimeix l\'anotació';
$string['deletecomment'] = 'Suprimeix el comentari';
$string['deletefeedback'] = 'Suprimeix el PDF de retroacció';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = 'Baixa el PDF de retroacció';
$string['draftchangessaved'] = 'S\'han desat els esborranys d\'anotacions';
$string['drag'] = 'Arrossega';
$string['editpdf'] = 'Comenta PDF';
$string['editpdf_help'] = 'Comenta les trameses dels estudiants directament al navegador i crea un PDF editat i descarregable.';
$string['enabled'] = 'Comenta PDF';
$string['enabled_help'] = 'Si s\'habilita, el professorat podrà crear fitxers PDF amb anotacions quan qualifiqui les tasques. Això permet al professorat afegir comentaris, dibuixos i segells directament al damunt del treball dels estudiants. Les anotacions es fan al navegador i no es requereix instal·lar cap programari extra.';
$string['errorgenerateimage'] = 'Error mentre es generava una imatge amb ghostscript, informació de depuració : {$a}';
$string['errorpdfpage'] = 'Hi ha hagut un error en generar aquesta pàgina.';
$string['filter'] = 'Filtra els comentaris ...';
$string['generatefeedback'] = 'Genera PDF de retroacció';
$string['generatingpdf'] = 'S\'està generant el PDF ...';
$string['gotopage'] = 'Ves a la pàgina';
$string['green'] = 'Verd';
$string['gsimage'] = 'Imatge de prova de Ghostscript';
$string['highlight'] = 'Ressalta';
$string['jsrequired'] = 'Cal JavaScript per fer anotacions en un PDF. Habiliteu JavaScript al vostre navegador per utilitzar aquesta característica.';
$string['launcheditor'] = 'Obre l\'editor PDF ...';
$string['line'] = 'Línia';
$string['loadingeditor'] = 'S\'esta carregant l\'editor PDF';
$string['navigatenext'] = 'Pàgina següent';
$string['navigateprevious'] = 'Pàgina anterior';
$string['output'] = 'Sortida:';
$string['oval'] = 'Òval';
$string['pagenumber'] = 'Pàgina {$a}';
$string['pagexofy'] = 'Pàgina {$a->page} de {$a->total}';
$string['pathtogspathdesc'] = 'Tingueu en compte que un PDF amb comentaris requereix especificar el camí al ghostscript a {$a}.';
$string['pathtounoconvpathdesc'] = 'Adoneu-vos que l\'anotació de PDF requereix que estigui establert el camí a l\'aplicació «unoconv» a {$a}.';
$string['pen'] = 'Bolígraf';
$string['pluginname'] = 'Comenta el PDF';
$string['preparesubmissionsforannotation'] = 'Prepara les trameses per anotacions';
$string['rectangle'] = 'Rectangle';
$string['red'] = 'Vermell';
$string['result'] = 'Resultat:';
$string['searchcomments'] = 'Cerca comentaris';
$string['select'] = 'Selecciona';
$string['stamp'] = 'Segell';
$string['stamppicker'] = 'Selector de segells';
$string['stamps'] = 'Segells';
$string['stampsdesc'] = 'Els segells han de ser fitxers d\'imatges (mida recomanada: 40x40). Aquestes imatges es poden utilitzar amb l\'eina segell per anotar els PDF.';
$string['test_doesnotexist'] = 'El camí al ghostscript apunta a un fitxer que no existeix.';
$string['test_empty'] = 'El camí al ghostscript és buit. Introduïu el camí correcte';
$string['testgs'] = 'Prova el camí al ghostscript';
$string['test_isdir'] = 'El camí al ghostscript apunta a una carpeta; afegiu el programa ghostscript al camí especificat.';
$string['test_notestfile'] = 'El PDF de prova s\'ha perdut';
$string['test_notexecutable'] = 'Ghostscript apunta a un fitxer que no és executable';
$string['test_ok'] = 'El camí al ghostscript sembla que és correcte - comproveu que podeu veure el missatge a la imatge del dessota.';
$string['test_unoconv'] = 'Comprova el camí a «unoconv»';
$string['test_unoconvdoesnotexist'] = 'El camí a «unoconv» no apunta al programa. Reviseu la configuració del paràmetre.';
$string['test_unoconvdownload'] = 'Baixa el fitxer de prova PDF convertit.';
$string['test_unoconvisdir'] = 'El camí a «unoconv» apunta a una carpeta. Heu d\'incloure el nom del programa al camí que especifiqueu.';
$string['test_unoconvnotestfile'] = 'No s\'ha trobat el document de prova que cal convertir a PDF';
$string['test_unoconvnotexecutable'] = 'El camí a «unoconv» apunta a un fitxer que no és executable';
$string['test_unoconvok'] = 'El camí a «unoconv» sembla correcte';
$string['test_unoconvversionnotsupported'] = 'La versió d\'«unoconv» instal·lada no està admesa. La capacitat de Moodle de qualificar tasques necessita la versió 0.7 o superior.';
$string['tool'] = 'Eina';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = 'Mostra el PDF comentat...';
$string['white'] = 'Blanc';
$string['yellow'] = 'Groc';
