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
 * Strings for component 'tool_filetypes', language 'gl', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_filetypes
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Engadir un novo tipo de ficheiro';
$string['corestring'] = 'Cadea de idioma alternativo';
$string['corestring_help'] = 'Este axuste pódese empregar para seleccionar unha cadea de idioma diferente dende o ficheiro de idioma do núcleo mimetypes.php. Xeralmente debería deixarse en branco. Para os tipos personalizados, use o campo de descrición.';
$string['defaulticon'] = 'Icona predeterminada para tipo MIME';
$string['defaulticon_help'] = 'Se hai varias extensións de ficheiro co mesmo tipo MIME, seleccione esta opción para unha das extensións para que se empregue a súa icona cando se determine unha icona do tipo MIME.';
$string['deletea'] = 'Eliminar {$a}';
$string['delete_confirmation'] = 'Confirma que quere retirar <strong>.{$a}</strong>?';
$string['deletefiletypes'] = 'Eliminar un tipo de ficheiro';
$string['description'] = 'Descrición personalizada';
$string['description_help'] = 'Descrición simple do tipo de ficheiro, por exemplo «Libro electrónico de Kindle». Se o seu sitio admite varios idiomas e usa o filtro de varios idiomas, pode introducir etiquetas en varios idiomas neste campo para fornecer unha descrición en diferentes idiomas.';
$string['descriptiontype'] = 'Tipo de descrición';
$string['descriptiontype_custom'] = 'Descrición personalizada especificada neste formulario';
$string['descriptiontype_default'] = 'Predeterminado (tipo MIME ou cadea de idioma correspondente se está dispoñible)';
$string['descriptiontype_help'] = 'Existen tres formas posíbeis de especificar unha descrición.

* O comportamento predeterminado usa o tipo MIME. Se hai unha cadea de idioma en mimetypes.php correspondente a ese tipo MIME, úsase; doutro xeito amosaráselle o tipo MIME aos usuarios.
* Pode especificar unha descrición personalizada neste formulario.
* Pode especificar o nome dunha cadea de idioma en mimetypes.php para usar no canto do tipo MIME.';
$string['descriptiontype_lang'] = 'Cadea de idioma alternativo (de mimetypes.php)';
$string['displaydescription'] = 'Descrición';
$string['editfiletypes'] = 'Editar un tipo de ficheiro existente';
$string['emptylist'] = 'Non hai ningún tipo de ficheiro definido.';
$string['error_addentry'] = 'A extensión do tipo de ficheiro, descrición, tipo MIME e icona non deben conter caracteres de liña e caracteres de punto e coma.';
$string['error_defaulticon'] = 'Xa está marcada outra extensión de ficheiro co mesmo tipo MIME coma a icona predeterminada.';
$string['error_extension'] = 'Xa existe ou non é válida a extensión de tipo de ficheiro <strong>{$a}</strong>. As extensións de ficheiros deben ser únicas e non deben conter caracteres especiais.';
$string['error_notfound'] = 'Non é posíbel atopar o tipo de ficheiro coa extensión {$a}.';
$string['extension'] = 'Extensión';
$string['extension_help'] = 'Extensión do nome do ficheiro sen o punto, por exemplo «mobi»';
$string['groups'] = 'Tipo de grupos';
$string['groups_help'] = 'Lista opcional de grupos de tipo de ficheiro aos que pertence este tipo. Estas son categorías xenéricas, como «documento» e «imaxe».';
$string['icon'] = 'Icona do ficheiro';
$string['icon_help'] = 'Nome de ficheiro da icona.

A lista de iconas é recollida do directorio /pix/f dentro da instalación de Moodle. Pode engadir iconas personalizadas a este cartafol se é necesario.';
$string['mimetype'] = 'Tipo MIME';
$string['mimetype_help'] = 'O tipo MIME asociado a este tipo de ficheiro, por exemplo «application/x-mobipocket-ebook»';
$string['pluginname'] = 'Tipos de ficheiro';
$string['privacy:metadata'] = 'O engadido de tipos de ficheiro non almacena ningún dato persoal.';
$string['revert'] = 'Restaurar {$a} aos valores predeterminados de Moodle';
$string['revert_confirmation'] = 'Confirma que quere restaurar <strong>.{$a}</strong> aos valores predeterminados de Moodle, desbotando os seus cambios?';
$string['revertfiletype'] = 'Restaurar un tipo de ficheiro';
$string['source'] = 'Tipo';
$string['source_custom'] = 'Personalizado';
$string['source_deleted'] = 'Eliminado';
$string['source_modified'] = 'Modificado';
$string['source_standard'] = 'Estándar';
