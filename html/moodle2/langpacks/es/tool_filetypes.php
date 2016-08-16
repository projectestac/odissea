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
 * Strings for component 'tool_filetypes', language 'es', branch 'MOODLE_31_STABLE'
 *
 * @package   tool_filetypes
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['corestring'] = 'Cadena de idioma alternativa';
$string['corestring_help'] = 'Esta configuración puede ser utilizada para seleccionar una cadena de idioma diferente desde el fichero idioma principal mimetypes.php. Generalmente debe ser dejado en blanco. Para tipos personalizados, utilice el campo descripción.';
$string['descriptiontype_default'] = 'Por defecto (tipo MIME o la cadena de idioma correspondiente si está disponible)';
$string['descriptiontype_help'] = 'Existen tres formas posibles de indicar una descripción.

* El comportamiento por defecto utiliza el tipo MIME. Si existe una cadena de idioma en mimetypes.php correspondiente a ese tipo MIME, será utilizada; si no existe, se mostrará a los usuariosel propio tipo MIME.
* Puedes especificar una descripción personalizada en este formulario.
* Puedes especificar el nombre de una cadena de idioma en mimetypes.php para ser utilizada en vez del tipo MIME.';
$string['descriptiontype_lang'] = 'Cadena de idioma alternativa (desde mimetypes.php)';
