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
 * Strings for component 'assignfeedback_editpdf', language 'ca', version '4.4'.
 *
 * @package     assignfeedback_editpdf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'Afegeix a la llista ràpida';
$string['annotationcolour'] = 'Color de l\'anotació';
$string['black'] = 'Negre';
$string['blue'] = 'Blau';
$string['cannotopenpdf'] = 'No es pot obrir el PDF. El fitxer pot estar corrupte o tenir un format no suportat.';
$string['clear'] = 'Neteja';
$string['colourpicker'] = 'Selector de color';
$string['command'] = 'Ordre:';
$string['comment'] = 'Comentaris';
$string['commentcolour'] = 'Color del comentari';
$string['commentcontextmenu'] = 'Menú contextual del comentari';
$string['commentindex'] = 'Índex de comentaris';
$string['commentlabel'] = '{$a->pnum}.{$a->cnum}';
$string['couldnotsavepage'] = 'No es pot desar la pàgina {$a}';
$string['currentstamp'] = 'Segell';
$string['default'] = 'Habilitat per defecte';
$string['default_help'] = 'Si està actiu, aquest mètode de retroalimentació s\'habilitarà per defecte per a totes les tasques noves.';
$string['deleteannotation'] = 'Suprimeix l\'anotació';
$string['deletecomment'] = 'Suprimeix el comentari';
$string['deletefeedback'] = 'Suprimeix el PDF de retroalimentació';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = 'Baixa el PDF de retroalimentació';
$string['draftchangessaved'] = 'S\'han desat els esborranys d\'anotacions';
$string['drag'] = 'Arrossega';
$string['editpdf'] = 'PDF amb comentaris';
$string['editpdf_help'] = 'Comenta les trameses dels estudiants directament al navegador i crea un PDF editat i descarregable.';
$string['enabled'] = 'PDF amb comentaris';
$string['enabled_help'] = 'Si s\'habilita, el professor podrà crear fitxers PDF amb anotacions quan qualifiqui les tasques. Això permet que el professor afegeixi comentaris, dibuixos i segells directament al capdamunt del treball dels estudiants. Les anotacions es fan al navegador i no es requereix instal·lar cap programari extra.';
$string['errorgenerateimage'] = 'S\'ha produït un error mentre es generava una imatge amb ghostscript; informació de depuració: {$a}';
$string['errorpdfpage'] = 'Hi ha hagut un error en generar aquesta pàgina.';
$string['expcolcomments'] = 'Expandeix/col·lapsa tots els comentaris';
$string['filter'] = 'Filtra els comentaris ...';
$string['generatefeedback'] = 'Genera el PDF de retroalimentació';
$string['generatingpdf'] = 'S\'està generant el PDF ...';
$string['gotopage'] = 'Ves a la pàgina';
$string['green'] = 'Verd';
$string['gsimage'] = 'Imatge de prova de Ghostscript';
$string['highlight'] = 'Ressalta';
$string['jsrequired'] = 'Cal JavaScript per fer anotacions en un PDF. Habiliteu JavaScript al vostre navegador per utilitzar aquesta característica.';
$string['launcheditor'] = 'Obre l\'editor PDF ...';
$string['line'] = 'Línia';
$string['loadingeditor'] = 'S\'esta carregant l\'editor PDF';
$string['navigatenext'] = 'Pàgina següent (Alt/Majúscules-Alt/Ctrl-Opció + {$a})';
$string['navigateprevious'] = 'Pàgina anterior (Alt/Majúscules-Alt/Ctrl-Opció + {$a})';
$string['output'] = 'Sortida:';
$string['oval'] = 'Òval';
$string['pagenumber'] = 'Pàgina {$a}';
$string['pagexofy'] = 'Pàgina {$a->page} de {$a->total}';
$string['partialwarning'] = 'Alguns dels fitxers de la tramesa només són accessibles descarregant-los directament.';
$string['pathtogspathdesc'] = 'Tingueu en compte que un PDF amb comentaris demana que especifiqueu el camí al ghostscript a {$a}.';
$string['pen'] = 'Bolígraf';
$string['pluginname'] = 'PDF amb comentaris';
$string['preparesubmissionsforannotation'] = 'Prepara les trameses per anotacions';
$string['privacy:metadata:colourpurpose'] = 'Color del comentari o anotació';
$string['privacy:metadata:conversionpurpose'] = 'Els fitxers es converteixen a PDF per permetre de fer-hi anotacions.';
$string['privacy:metadata:filepurpose'] = 'Emmagatzema un PDF anotat amb retroalimentació per a l\'usuari.';
$string['privacy:metadata:rawtextpurpose'] = 'Emmagatzema text en brut per les dades ràpides.';
$string['privacy:metadata:tablepurpose'] = 'Emmagatzema una llista ràpida de comentaris especificats pel professor';
$string['privacy:metadata:userid'] = 'L\'ID de l\'usuari';
$string['privacy:path'] = 'Retroalimentació per PDF';
$string['rectangle'] = 'Rectangle';
$string['red'] = 'Vermell';
$string['result'] = 'Resultat:';
$string['rotateleft'] = 'Rota 90 graus a l\'esquerra';
$string['rotateright'] = 'Rota 90 graus a la dreta';
$string['searchcomments'] = 'Cerca comentaris';
$string['select'] = 'Selecciona';
$string['stamp'] = 'Segell';
$string['stamppicker'] = 'Selector de segells';
$string['stamps'] = 'Segells';
$string['stampsdesc'] = 'Els segells han de ser fitxers d\'imatge (mida recomanada: 40x40). Aquestes imatges es poden utilitzar amb l\'eina segell per anotar els PDF.';
$string['test_doesnotexist'] = 'El camí al ghostscript apunta a un fitxer que no existeix.';
$string['test_empty'] = 'El camí al ghostscript és buit. Introduïu el camí correcte';
$string['test_isdir'] = 'El camí al ghostscript apunta a una carpeta; afegiu el programa ghostscript al camí especificat.';
$string['test_notestfile'] = 'El PDF de prova s\'ha perdut';
$string['test_notexecutable'] = 'Ghostscript apunta a un fitxer que no és executable';
$string['test_ok'] = 'El camí al ghostscript sembla que és correcte; comproveu que podeu veure el missatge a la imatge del dessota.';
$string['testgs'] = 'Prova el camí al ghostscript';
$string['tool'] = 'Eina';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = 'Mostra el PDF comentat...';
$string['white'] = 'Blanc';
$string['yellow'] = 'Groc';
