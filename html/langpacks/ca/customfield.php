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
 * Strings for component 'customfield', language 'ca', version '4.5'.
 *
 * @package     customfield
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acció';
$string['addingnewcustomfield'] = 'S\'està afegint un nou {$a}';
$string['addnewcategory'] = 'Afegeix una categoria nova';
$string['afterfield'] = 'Després del camp {$a}';
$string['categorynotfound'] = 'Categoria no trobada';
$string['checked'] = 'Comprovat';
$string['commonsettings'] = 'General';
$string['componentsettings'] = 'Paràmetres del component';
$string['confirmdeletecategory'] = 'Confirmeu que voleu suprimir aquesta categoria? Tots els camps de la categoria i totes les dades associades també se suprimiran. Aquesta acció no es pot desfer.';
$string['confirmdeletefield'] = 'Confirmeu que voleu suprimir aquest camp i totes les dades associades? Aquesta acció no es pot desfer.';
$string['createnewcustomfield'] = 'Afegeix un camp personalitzat nou';
$string['customfield'] = 'Camp personalitzat';
$string['customfielddata'] = 'Dades dels camps personalitzats';
$string['customfields'] = 'Camps personalitzats';
$string['defaultvalue'] = 'Valor per defecte';
$string['description'] = 'Descripció';
$string['description_help'] = 'La descripció es mostra en el formulari sota el camp.';
$string['edit'] = 'Edita';
$string['editcategoryname'] = 'Edita el nom de la categoria';
$string['editingfield'] = 'S\'està actualitzant {$a}';
$string['errorfieldtypenotfound'] = 'No s\'ha trobat el tipus de camp {$a}';
$string['erroruniquevalues'] = 'Aquest valor ja s\'utilitza.';
$string['eventcategorycreated'] = 'S\'ha creat la categoria de camp personalitzat';
$string['eventcategorydeleted'] = 'S\'ha suprimit la categoria del camp personalitzat';
$string['eventcategoryupdated'] = 'S\'ha actualitzat la categoria del camp personalitzat';
$string['eventfieldcreated'] = 'S\'ha creat el camp personalitzat';
$string['eventfielddeleted'] = 'S\'ha suprimit el camp personalitzat';
$string['eventfieldupdated'] = 'S\'ha actualitzat el camp personalitzat';
$string['fieldname'] = 'Nom';
$string['fieldnotfound'] = 'No s\'ha trobat el camp';
$string['fieldshortname'] = 'Nom curt';
$string['formfieldcheckshortname'] = 'El nom curt ja existeix';
$string['invalidshortnameerror'] = 'El nom curt només pot contenir caràcters alfanumèrics en minúscules i guions baixos (_).';
$string['isdataunique'] = 'Dades úniques';
$string['isdataunique_help'] = 'Aquest paràmetre determina si el valor introduït ha de ser únic i no s\'ha introduït prèviament.';
$string['isfieldrequired'] = 'Obligatori';
$string['isfieldrequired_help'] = 'Un camp obligatori és un camp que s\'ha d\'emplenar amb un valor abans de trametre el formulari.';
$string['link'] = 'Enllaç';
$string['linktarget'] = 'Destinació de l\'enllaç';
$string['modify'] = 'Modifica';
$string['movecategory'] = 'Mou «{$a}»';
$string['movefield'] = 'Mou «{$a}»';
$string['no'] = 'No';
$string['nocategories'] = 'No hi ha cap camp ni categoria personalitzats.';
$string['nopermissionconfigure'] = 'No teniu permís per configurar camps aquí.';
$string['notchecked'] = 'No marcat';
$string['otherfields'] = 'Altres camps';
$string['otherfieldsn'] = 'Altres camps {$a}';
$string['privacy:metadata:customfield_data'] = 'Representa dades de camp personalitzat desades en un context';
$string['privacy:metadata:customfield_data:charvalue'] = 'Valor de les dades quan és un caràcter';
$string['privacy:metadata:customfield_data:contextid'] = 'L\'ID del context on s\'han desat les dades';
$string['privacy:metadata:customfield_data:decvalue'] = 'Valor de les dades, quan és un decimal';
$string['privacy:metadata:customfield_data:fieldid'] = 'ID de definició del camp';
$string['privacy:metadata:customfield_data:instanceid'] = 'ID de la instància relacionada amb les dades';
$string['privacy:metadata:customfield_data:intvalue'] = 'Valor de les dades, quan és un enter';
$string['privacy:metadata:customfield_data:shortcharvalue'] = 'Valor de les dades quan és un caràcter curt';
$string['privacy:metadata:customfield_data:timecreated'] = 'Hora en què es van crear les dades';
$string['privacy:metadata:customfield_data:timemodified'] = 'Hora de la darrera modificació de les dades';
$string['privacy:metadata:customfield_data:value'] = 'Valor de les dades, quan és un text';
$string['privacy:metadata:customfield_data:valueformat'] = 'El format del valor, quan és un text';
$string['privacy:metadata:customfieldpluginsummary'] = 'Camps per a diversos components';
$string['privacy:metadata:filepurpose'] = 'Fitxer adjuntat a les dades de camp personalitzat';
$string['shortname'] = 'Nom curt';
$string['shortname_help'] = 'El nom curt ha de ser únic i només pot contenir caràcters alfanumèrics en minúscules i guions baixos (_). No es mostra a cap banda del lloc, però es pot utilitzar per a la sincronització amb sistemes externs o en serveis web.';
$string['showdate'] = 'Mostra la data';
$string['specificsettings'] = 'Paràmetres específics';
$string['therearenofields'] = 'No hi ha cap camp en aquesta categoria';
$string['totopofcategory'] = 'A la part superior de la categoria {$a}';
$string['type'] = 'Tipus';
$string['unknownhandler'] = 'No s\'ha pogut trobar el gestor de camps personalitzats per al component {$a->component} i l\'àrea {$a->area}.';
$string['yes'] = 'Sí';
