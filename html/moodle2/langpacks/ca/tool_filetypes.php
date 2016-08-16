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
 * Strings for component 'tool_filetypes', language 'ca', branch 'MOODLE_31_STABLE'
 *
 * @package   tool_filetypes
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Afegeix un tipus de fitxer nou';
$string['corestring'] = 'Cadena d\'idioma alternativa';
$string['corestring_help'] = 'Aquest paràmetre es pot fer servir per seleccionar una cadena d\'idioma diferent a la del fitxer d\'idioma de mimetypes.php. Generalment s\'ha de deixar en blanc. Per a tipus personalitzats, feu servir el camp descripció.';
$string['defaulticon'] = 'Icona per defecte per al tipus MIME';
$string['defaulticon_help'] = 'Si hi ha més d\'una extensió de fitxer amb el mateix tipus MIME, seleccioneu aquesta opció per a una de les extensions, de manera que s\'utilitzarà com a icona quan es determini una altra icona d\'aquest tipus MIME.';
$string['deletea'] = 'Esborra {$a}';
$string['delete_confirmation'] = 'Esteu absolutament segur que voleu esborrar <strong>.{$a}</strong>?';
$string['deletefiletypes'] = 'Esborra un tipus de fitxer';
$string['description'] = 'Descripció personalitzada';
$string['description_help'] = 'Descripció simple del fitxer; per exemple, «Llibre electrònic Kindle». Si el vostre lloc admet diferents idiomes i fa servir el filtre multiidioma, podeu afegir etiquetes multiidioma en aquest camp per a proporcionar una descripció en diferents idiomes.';
$string['descriptiontype'] = 'Tipus de descripció';
$string['descriptiontype_custom'] = 'Descripció personalitzada en aquest formulari';
$string['descriptiontype_default'] = 'Per defecte (tipus MIME o la cadena d\'idioma corresponent si està disponible)';
$string['descriptiontype_help'] = 'Hi ha tres possibilitats diferents per tal d\'especificar una descripció.

* Per defecte es fa servir el tipus MIME. Si hi ha una cadena d\'idioma a mimetypes.php que es correspon a aquest tipus MIME, es farà servir; en cas contrari, el mateix tipus MIME es mostrarà als usuaris.
* Es pot especificar una descripció personalitzada en aquest formulari.
* Es pot especificar el nom d\'una cadena d\'idioma a mimetypes.php en comptes de fer servir el tipus MIME.';
$string['descriptiontype_lang'] = 'Cadena d\'idioma alternativa (de mimetypes.php)';
$string['displaydescription'] = 'Descripció';
$string['editfiletypes'] = 'Edita un tipus de fitxer existent';
$string['emptylist'] = 'No hi ha cap tipus de fitxer definit.';
$string['error_addentry'] = 'L\'extensió, la descripció, el tipus MIME i la icona del tipus de fitxer no poden contenir els caràcters salt de línia ni punt i coma.';
$string['error_defaulticon'] = 'Una altra extensió de fitxer amb el mateix tipus MIME ja està marcada com a icona per defecte.';
$string['error_extension'] = 'El tipus d\'extensió de fitxer {$a} ja existeix o no és vàlida. Les extensions de fitxer han de ser úniques i no poden contenir caràcters especials.';
$string['error_notfound'] = 'El tipus de fitxer amb extensió {$a} no s\'ha pogut trobar.';
$string['extension'] = 'Extensió';
$string['extension_help'] = 'L\'extensió del fitxer sense el punt; per exemple, «mobi»';
$string['groups'] = 'Tipus de grups';
$string['groups_help'] = 'Llista opcional dels grups de tipus de fitxers als quals pertany aquest tipus. Aquestes són les categories genèriques com ara «document» o «imatge».';
$string['icon'] = 'Fitxer d\'icona';
$string['icon_help'] = 'Nom del fitxer de la icona.

La llista d\'icones s\'agafa del directori /pix/f dins la vostra instal·lació de Moodle. Si cal, podeu afegir icones personalitzades dins d\'aquesta carpeta.';
$string['mimetype'] = 'Tipus MIME';
$string['mimetype_help'] = 'Tipus MIME associat amb aquest tipus de fitxer; per exemple, «application/x-mobipocket-ebook»';
$string['pluginname'] = 'Tipus de fitxers';
$string['revert'] = 'Recupera els valors per defecte del Moodle de {$a}';
$string['revert_confirmation'] = 'Confirmeu que voleu recuperar els valors per defecte del Moodle de <strong>.{$a}</strong>, i descartar els vostres canvis?';
$string['revertfiletype'] = 'Restaura un tipus de fitxer';
$string['source'] = 'Tipus';
$string['source_custom'] = 'Personalitzat';
$string['source_deleted'] = 'Esborrat';
$string['source_modified'] = 'Modificat';
$string['source_standard'] = 'Estàndard';
