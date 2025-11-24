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
 * Strings for component 'tool_lpmigrate', language 'ca', version '4.5'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Cursos permesos';
$string['allowedcourses_help'] = 'Seleccioneu els cursos a migrar al nou marc de competències. Si no s\'especifica cap curs, es migraran tots.';
$string['continuetoframeworks'] = 'Continua cap als marcs';
$string['coursecompetencymigrations'] = 'Migracions de competències de curs';
$string['coursemodulecompetencymigrations'] = 'Migracions de competències d\'activitat o de recurs';
$string['coursemodulesfound'] = 'Activitats o recursos de curs trobats';
$string['coursesfound'] = 'Cursos trobats';
$string['coursestartdate'] = 'Data d\'inici dels cursos';
$string['coursestartdate_help'] = 'Si l\'opció està habilitada, els cursos amb una data d\'inici anterior a l\'especificada no es migraran.';
$string['disallowedcourses'] = 'Cursos inhabilitats';
$string['disallowedcourses_help'] = 'Seleccioneu els cursos que NO s\'han de migrar al marc nou.';
$string['errorcannotmigratetosameframework'] = 'No es pot migrar «des de» o «a» el mateix marc.';
$string['errorcouldnotmapcompetenciesinframework'] = 'No s\'ha pogut assignar cap competència a aquest marc.';
$string['errors'] = 'Errors';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Error al migrar la competència de curs: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Error al migrar la competència d\'activitat o de recurs: {$a}';
$string['excludethese'] = 'Exclou aquests';
$string['explanation'] = 'Aquesta eina pot emprar-se per actualitzar un marc de competències a una versió nova. L\'eina cerca competències dins de cursos i activitats que fan servir marcs antics i actualitza els enllaços perquè apuntin cap al marc nou.

No és recomanable editar directament el conjunt antic de competències, ja que això canviaria totes les competències que ja s\'han atorgat als plans d\'aprenentatge dels usuaris.

A trets generals, heu d\'importar la versió nova d\'un marc, amagar el marc antic, i, a continuació, fer servir aquesta eina per migrar cursos nous al marc nou.';
$string['findingcoursecompetencies'] = 'S\'estan buscant competències de curs';
$string['findingmodulecompetencies'] = 'S\'estan buscant competències d\'activitats i recursos';
$string['frameworks'] = 'Marcs';
$string['limittothese'] = 'Limita a aquests';
$string['lpmigrate:frameworksmigrate'] = 'Migració de marcs';
$string['migrateframeworks'] = 'Migració de marcs';
$string['migratefrom'] = 'Migra des de';
$string['migratefrom_help'] = 'Seleccioneu el marc més antic actualment en ús.';
$string['migratemore'] = 'Migra més';
$string['migrateto'] = 'Migra a';
$string['migrateto_help'] = 'Seleccioneu la versió més nova del marc. Només és possible seleccionar un marc que no estigui ocult.';
$string['migratingcourses'] = 'S\'estan migrant cursos';
$string['missingmappings'] = 'Assignacions que falten';
$string['performmigration'] = 'Realitza la migració';
$string['pluginname'] = 'Eina de migració de competències';
$string['results'] = 'Resultats';
$string['startdatefrom'] = 'Data d\'inici des de';
$string['unmappedin'] = 'Sense assignar a {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'No es pot esborrar la competència del curs.';
$string['warningcouldnotremovemodulecompetency'] = 'No es pot esborrar la competència d\'activitat o de recurs.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'La competència del curs de destinació ja existeix.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'La competència de l\'activitat o del recurs de destinació ja existeix.';
$string['warnings'] = 'Alertes';
