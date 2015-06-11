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
 * Strings for component 'logstore_legacy', language 'ca', branch 'MOODLE_28_STABLE'
 *
 * @package   logstore_legacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlegacylogged'] = 'S\'ha enregistrat un esdeveniment en format antic';
$string['loglegacy'] = 'Enregistra dades en format antic';
$string['loglegacy_help'] = 'Aquest connector desa dades de registre en la taula antiga de registres (mdl_log). Aquesta funcionalitat ha estat reemplaçada per connectors d\'enregistrament més nous, més rics i més eficients, així que només hauríeu d\'executar aquest connector si teniu informes personalitzats antics que consulten directament la taula antiga de registres. Escriure en els registres antics augmentarà la carrega, així que es recomana inhabilitar aquest connector per raons de rendiment sempre que no es necessiti.';
$string['pluginname'] = 'Registre antic';
$string['pluginname_desc'] = 'Un connector de registre que emmagatzema entrades de registre en la taula de registre antiga.';
$string['taskcleanup'] = 'Neteja de la taula de registre antiga';
