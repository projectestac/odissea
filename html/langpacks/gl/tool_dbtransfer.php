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
 * Strings for component 'tool_dbtransfer', language 'gl', version '4.5'.
 *
 * @package     tool_dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'Controladores de base de datos dispoñíbeis para migración';
$string['cliheading'] = 'Migración de base de datos. Asegúrese de que ninguén acceda ao servidor durante a migración!';
$string['climigrationnotice'] = 'Migración da base de datos en proceso, agarde ata que se complete a migración e o administrador do servidor actualice a configuración e borre o ficheiro $CFG->dataroot/climaintenance.html.';
$string['convertinglogdisplay'] = 'Convertendo accións de amosar rexistro';
$string['dbexport'] = 'Exportar a base de datos';
$string['dbtransfer'] = 'Migración da base de datos';
$string['enablemaintenance'] = 'Activar o modo de mantemento';
$string['enablemaintenance_help'] = 'Esta opción posibilita o modo de mantemento durante e após a migración da base de datos. Impide o acceso de todos os usuarios ata que a migración teña rematado. Teña en conta que o administrador debe eliminar manualmente o ficheiro $CFG->dataroot/climaintenance.html após actualizar os axustes de config.php para retomar a operación normal.';
$string['exportdata'] = 'Exportar datos';
$string['notargetconectexception'] = 'Non é posíbel conectar coa base de datos de destino.';
$string['options'] = 'Opcións';
$string['pluginname'] = 'Transferencia de base de datos';
$string['privacy:metadata'] = 'O engadido de Transferencia de base de datos non almacena ningún dato persoal.';
$string['targetdatabase'] = 'Base de datos de destino';
$string['targetdatabasenotempty'] = 'A base de datos de destino non pode conter ningunha táboa co prefixo dado!';
$string['transferdata'] = 'Transferir datos';
$string['transferdbintro'] = 'Este script transferirá todo o contido desta base de datos cara a outro servidor de bases de datos. Adoita usarse para a migración dos datos a un tipo diferente de bases de datos.';
$string['transferdbtoserver'] = 'Transferir esta base de datos do Moodle cara a outro servidor';
$string['transferringdbto'] = 'Transferindo esta {$a->dbtypefrom} base de datos a {$a->dbtype} base de datos {$a->dbname} en «{$a->dbhost}»';
