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
 * Strings for component 'assignfeedback_structured', language 'es', version '4.1'.
 *
 * @package     assignfeedback_structured
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['close'] = 'Cerrar';
$string['criteria'] = 'Criterio de retroalimentación';
$string['criteria_help'] = 'Ingrese un nombre ( y opcionalmente una descripción) para cada criterio al que quiera proporcionarle retroalimentación. Culaquier criterio no nombrado será ignorado. Todos los campos serán boqueados una vez que se haya dado retroalimentación par cualquier criterio.';
$string['criteriafieldsadd'] = 'Añadir más campos de criterio';
$string['criteriaset'] = 'Criterio configurado';
$string['criteriaset_help'] = 'Haga clic en este botón para seleccionar un criterio guardado previamente para configurar automáticamente los detalles inferiores del criterio.';
$string['criteriasetconfirmdelete'] = '¿Está seguro de querer eliminar el conjunto de criterios "{$a}"?';
$string['criteriasetconfirmuse'] = '¿Está seguro? Esto sobrescribirá el criterio que está actualmente configurado para esta tarea.';
$string['criteriasetempty'] = 'Usted debe definir al menos un criterio antes de guardar como un conjunto.';
$string['criteriasetemptytitle'] = 'El conjunto de criterios está vacío';
$string['criteriasetname'] = 'Nombre de conjunto de criterios';
$string['criteriasetname_help'] = 'El nombre de un conjunto de criterios debe de ser único para todo el sitio; por favor elíjalo cuidadosamente.';
$string['criteriasetnameedit'] = 'Editar Nombre de conjunto de criterios';
$string['criteriasetnameenter'] = 'Ingresar un nombre único';
$string['criteriasetnameused'] = 'Desafortunadamente ya hay un conjunto de criterios llamado"{$a}". Por favor intente un nombre diferente.';
$string['criteriasetnameusedtitle'] = 'Nombre ya utilizado';
$string['criteriasetnoname'] = 'Usted tiene que proporcionar un nombre para su conjunto de criterios';
$string['criteriasetnonametitle'] = 'Sin nombre proporcionado';
$string['criteriasetnotdeleted'] = 'Desafortunadamente l conjunto de criterios no pudo ser eliminado. Por favor inténtelo nuevamente o reporte este error a su administrador.';
$string['criteriasetnotsaved'] = 'Desafortunadamente l conjunto de criterios no pudo ser guardado. Por favor inténtelo nuevamente o reporte este error a su administrador.';
$string['criteriasetnotupdated'] = 'Desafortunadamente l conjunto de criterios no pudo ser actualizado. Por favor inténtelo nuevamente o reporte este error a su administrador.';
$string['criteriasetpublish'] = 'Compartir con otros usuarios';
$string['criteriasetpublish_help'] = 'Active esta casilla para permitirle a cualquiera que haga ua copia de este conjunto de criterios. Por defecto solamente está disponible para Usted.';
$string['criteriasetsave'] = 'Guardar conjunto de criterios';
$string['criteriasetsave_help'] = 'Haga clic en este botón y proporcione un nombre único para su conjunto de criterios para habilitar que se pueda copiar fácilmente hacia otras tareas.';
$string['criteriasetsaved'] = 'Conjunto de criterios guardado';
$string['criteriasetsavedsuccess'] = 'Su conjunto de criterios "{$a}" fue guardado exitosamente.';
$string['criteriasetselect'] = 'Seleccionar un conjunto de criterios ...';
$string['criteriasetshared'] = 'Compartido';
$string['criteriasetsmanage'] = 'Gestionar conjuntos de criterios';
$string['criteriasetsmanage_help'] = 'Haga clic en este botón para ver y gestionar sus propios conjuntos de criterios guardados.';
$string['criteriasetsowned'] = 'Sus conjuntos de criterios';
$string['criteriasetssaved'] = 'Conjuntos de criterios guardados';
$string['criteriasetsshared'] = 'Conjuntos de criterios compartidos';
$string['criteriasetsshowshared'] = 'Mostrar conjuntos de criterios';
$string['criteriasetupdated'] = 'Conjunto de criterios actualizado';
$string['criteriasetupdatedsuccess'] = 'Su conjunto de criterios fue actualizado exitosamente';
$string['criteriasetuse'] = 'Usar este conjunto';
$string['criteriasetusesaved'] = 'Usar un conjunto de criterios guardado';
$string['criteriaused'] = 'El criterio para esta tarea ya no puede ser editado poque ya se ha dado alguna retroalimentación.';
$string['criteriondesc'] = 'Desripción del criterio {$a}  (opcional)';
$string['criterionheader'] = '{$a->name}: {$a->desc}';
$string['criterionname'] = 'Nombre de Criterio {$a}';
$string['criteriontitle'] = '<span class="criterion-name">{$a->name}:</span> <span class="criterion-desc">{$a->desc}</span>';
$string['default'] = 'Habilitado por defecto';
$string['default_help'] = 'Si se habilita, este método de retroalimentación será habilitado por defecto para todas las Tareas nuevas.';
$string['enabled'] = 'Retroalimentación estructurada';
$string['enabled_help'] = 'Si se habilita, elprofesor podrá definir cualquier número de criterios en los cuales proporcionar retroalimentación específica.';
$string['escapetocancel'] = 'Escape para cancelar';
$string['noownedsets'] = 'Actualmente Usted no tiene ningun conjunto de criterios guardado.';
$string['nopermissionstodelete'] = 'Lo siento, pero Usted no tiene permisos para eliminar sus conjuntos de criterios guardados.';
$string['nopermissionstomanage'] = 'Lo siento, pero Usted no tiene permisos para gestionar sus conjuntos de criterios guardados.';
$string['nopermissionstopublish'] = 'Lo siento, pero Usted no tiene permisos para comartir sus conjuntos de criterios guardados.';
$string['nopermissionstosave'] = 'Lo siento, pero Usted no tiene permisos para guardar conjuntos de criterios.';
$string['nopermissionstoupdate'] = 'Lo siento, pero Usted no tiene permisos para actualizar sus conjuntos de criterios guardados.';
$string['nosharedsets'] = 'Actualmente no hay conjuntos compartidos disponibles.';
$string['pluginname'] = 'Retroalimentación estructurada';
$string['privacy:metadata:assignmentid'] = 'ID de Tarea';
$string['privacy:metadata:commentpurpose'] = 'El texto del comentario.';
$string['privacy:metadata:critdescpurpose'] = 'La descripción del criterio con el que se relaciona el comentario.';
$string['privacy:metadata:criterionpurpose'] = 'El nombre del criterio con el que se relaciona el comentario.';
$string['privacy:metadata:filepurpose'] = 'Archivos de retroalimentación de las calificaciones para el estudiante.';
$string['privacy:metadata:gradepurpose'] = 'La ID de calificación aociada con el comentario.';
$string['privacy:metadata:tablesummary'] = 'Esto almacena comentarios hechos por las personas que califican como retroalimentación para el estudiante en aspectos específicos de sus envíos.';
$string['privacy:path'] = 'Retroalimentación estructurada';
$string['structured:manageowncriteriasets'] = 'Gestionar sus propios conjuntos de criterios guardados';
$string['structured:publishcriteriasets'] = 'Hacer los conjuntos de criterios guardados disponibles para otros usuarios';
$string['structuredfilename'] = 'structured.html';
