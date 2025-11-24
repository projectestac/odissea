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
 * Strings for component 'search_solr', language 'ca', version '4.5'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'El servidor Solr especificat no està disponible o l\'índex especificat no existeix';
$string['connectionsettings'] = 'Configuració de la connexió';
$string['errorcreatingschema'] = 'S\'ha produït un error en crear l\'esquema Solr: {$a}';
$string['errorvalidatingschema'] = 'S\'ha produït un error en validar l\'esquema Solr: el camp {$a->fieldname} no existeix. Seguiu aquest enllaç: <a href="{$a->setupurl}"> per a configurar els camps requerits.';
$string['extensionerror'] = 'L\'extensió PHP Solr d\'Apache no està instal·lada. Comproveu la documentació.';
$string['fileindexing'] = 'Habilita la indexació de fitxers';
$string['fileindexing_help'] = 'Si la vostra instal·lació Solr ho admet, aquesta característica permet a Moodle enviar arxius per a ser indexats.';
$string['fileindexsettings'] = 'Paràmetres d\'indexació de fitxers';
$string['maxindexfilekb'] = 'Grandària màxima d\'arxiu (kB) per indexar';
$string['minimumsolr4'] = 'Solr 4.0 és la versió mínima requerida per Moodle';
$string['pluginname'] = 'Solr';
$string['solrhttpconnectionport'] = 'Port';
$string['solrinfo'] = 'Solr';
