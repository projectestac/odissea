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
 * Strings for component 'logstore_database', language 'ca', branch 'MOODLE_34_STABLE'
 *
 * @package   logstore_database
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Mida de la memòria intermèdia';
$string['buffersize_help'] = 'Nombre d\'entrades de registre inserides en una operació de base de dades per lots, la qual cosa millora el rendiment.';
$string['conectexception'] = 'No es pot connectar amb la base de dades.';
$string['create'] = 'Crea';
$string['databasecollation'] = 'Regles d\'ordenació de la base de dades';
$string['databasepersist'] = 'Connexions de base de dades persistents';
$string['databaseschema'] = 'Esquema de la base de dades';
$string['databasesettings'] = 'Paràmetres de la base de dades';
$string['databasesettings_help'] = 'Detalls de connexioó per a la base de dades externa de registre: {$a}';
$string['databasetable'] = 'Taula de la base dades';
$string['databasetable_help'] = 'Nom de la taula en la qual s\'emmagatzemaran els registres. Aquesta taula ha de tenir una estructura idèntica a la utilitzada per logstore_standard (mdl_logstore_standard_log).';
$string['filters'] = 'Filtra registres';
$string['filters_help'] = 'Habiliteu filtres que excloguin del registre algunes accions.';
$string['includeactions'] = 'Inclou accions d\'aquests tipus.';
$string['includelevels'] = 'Inclou accions amb aquests nivells educatius.';
$string['logguests'] = 'Accions dels usuaris visitants';
$string['other'] = 'Altres';
$string['participating'] = 'Participació';
$string['pluginname'] = 'Registre a una base de dades externa';
$string['pluginname_desc'] = 'Un connector de registres que emmagatzema les entrades del registre en una taula d\'una base de dades externa.';
$string['read'] = 'Lectura';
$string['tablenotfound'] = 'La taula especificada no s\'ha trobat';
$string['teaching'] = 'Ensenyament';
$string['testingsettings'] = 'S\'estan provant els paràmetres de la base de dades...';
$string['testsettings'] = 'Prova la connexió';
$string['update'] = 'Actualitza';
