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
 * Strings for component 'tool_lpmigrate', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_lpmigrate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Cursos permitidos';
$string['allowedcourses_help'] = 'Elija los cursos a ser migrados al nuevo marco. Si no se especifica ningún curso, todos los cursos serán migrados';
$string['continuetoframeworks'] = 'Continuar a los marcos';
$string['coursecompetencymigrations'] = 'Migraciones de competencias de cursos';
$string['coursemodulecompetencymigrations'] = 'Migraciones de competencias de actividades y recursos';
$string['coursemodulesfound'] = 'Se encontraron actividades o recursos';
$string['coursesfound'] = 'Se encontraron cursos';
$string['coursestartdate'] = 'Fecha de inicio de los cursos';
$string['coursestartdate_help'] = 'Si está habilitado, los cursos con fecha de inicio previa a la fecha especificada no serán migrados.';
$string['disallowedcourses'] = 'Cursos no permitidos';
$string['disallowedcourses_help'] = 'Seleccione los cursos que NO deberían migrarse al nuevo marco.';
$string['errorcannotmigratetosameframework'] = 'No puede migrarse hacia el mismo marco de origen.';
$string['errorcouldnotmapcompetenciesinframework'] = 'No se pudo mapear a ninguna competencia de este marco.';
$string['errors'] = 'Errores';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Error al migrar la competencia de curso {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Error al migrar la competencia de actividad o recurso {$a}';
$string['excludethese'] = 'Excluir estos';
$string['explanation'] = 'Esta herramienta se puede utilizar para actualizar un marco de competencias a una nueva versión. Busca competencias de cursos y actividades que usan el marco mayor y actualiza los enlaces para que apunten al nuevo marco. No se recomienda editar el antiguo conjunto de competencias directamente ya que esto cambiaría todas las competencias que ya han sido adjudicadas en los planes de aprendizaje de los usuarios. Normalmente debería importarse la nueva versión de un marco, ocultar el marco antiguo y finalmente utilizar esta herramienta para migrar los nuevos cursos al nuevo marco.';
$string['findingcoursecompetencies'] = 'Encontrando las competencias de curso';
$string['findingmodulecompetencies'] = 'Encontrando competencias de actividades y recursos';
$string['frameworks'] = 'Marcos';
$string['limittothese'] = 'Limitar a estos';
$string['lpmigrate:frameworksmigrate'] = 'Migrar marcos';
$string['migrateframeworks'] = 'Migrar marcos';
$string['migratefrom'] = 'Migrar desde';
$string['migratefrom_help'] = 'Seleccionar el marco antiguo actualmente en uso.';
$string['migratemore'] = 'Migrar más';
$string['migrateto'] = 'Migrar hacia';
$string['migrateto_help'] = 'Seleccione la nueva versión del marco. Sólo es posible seleccionar un marco si no está oculto.';
$string['migratingcourses'] = 'Migrando cursos';
$string['missingmappings'] = 'Mapeos faltantes';
$string['performmigration'] = 'Ejecutar la migración';
$string['pluginname'] = 'Herramienta de migración de competencias';
$string['results'] = 'Resultados';
$string['startdatefrom'] = 'Fecha de inicio desde';
$string['unmappedin'] = 'Sin mapeo en {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'La competencia de curso no pudo eliminarse.';
$string['warningcouldnotremovemodulecompetency'] = 'La competencia de actividad o recurso no pudo eliminarse.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'La competencia de curso destino ya existe.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'La competencia de actividad o recurso destino ya existe.';
$string['warnings'] = 'Alertas';
