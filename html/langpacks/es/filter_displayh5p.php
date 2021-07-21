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
 * Strings for component 'filter_displayh5p', language 'es', version '3.11'.
 *
 * @package     filter_displayh5p
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedsourceslist'] = 'Orígenes (fuentes) permitidos';
$string['allowedsourceslistdesc'] = 'Una lista de URLs desde las cuales los usuarios pueden incrustar contenido H5P. Si ninguna estuviera especificada, todas las URLs permanecerán como enlaces y no serán mostradas como contenido H5P incrustado.

\'[id]\' es un reemplazable para la ID del contenido H5P en el origen externo. Por ejemplo:

- H5P.com: https://[xxxxxx].h5p.com/content/[id]
- Wordpress: http://myserver/wp-admin/admin-ajax.php?action=h5p_embed&id=[id]';
$string['filtername'] = 'Mostrar H5P';
$string['privacy:metadata'] = 'El filtro para mostrar H5P no almacena ningún  dato personal.';
