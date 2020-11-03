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
 * Strings for component 'filter_displayh5p', language 'de', branch 'MOODLE_38_STABLE'
 *
 * @package   filter_displayh5p
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedsourceslist'] = 'Erlaubte Quellen';
$string['allowedsourceslistdesc'] = 'Liste von URLs, von denen Nutzer/innen H5P-Inhalte einbetten dürfen. Wenn keine URL angegeben ist, bleiben alle URLs als Links erhalten und werden nicht als eingebettete H5P-Inhalte angezeigt.

\'[id]\' ist ein Platzhalter für die H5P-Inhalts-ID in der externen Quelle.

Beispiele:
<br>- H5P.com: https://[xxxxxx].h5p.com/content/[id]
<br>- Wordpress: http://myserver/wp-admin/admin-ajax.php?action=h5p_embed&id=[id]';
$string['filtername'] = 'H5P anzeigen';
$string['privacy:metadata'] = 'Der Filter \'H5P anzeigen\' speichert keine personenbezogenen Daten.';
