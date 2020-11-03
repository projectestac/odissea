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
 * Strings for component 'cohort', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   cohort
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Añadir nueva cohorte';
$string['allcohorts'] = 'Todas las cohortes';
$string['anycohort'] = 'Cualquiera';
$string['assign'] = 'Asignar';
$string['assigncohorts'] = 'Asignar miembros de la cohortes';
$string['assignto'] = 'Miembros de la cohorte \'{$a}\'';
$string['backtocohorts'] = 'Regresar a las cohortes';
$string['bulkadd'] = 'Añadir a la cohorte';
$string['bulknocohort'] = 'No se han encontrado cohortes disponibles';
$string['categorynotfound'] = 'La categoría <b>{$a}</b> no se ha encontrado o usted no tiene permisos para crear una cohorte aquí. Se usará el contexto por defecto.';
$string['cohort'] = 'Cohorte';
$string['cohorts'] = 'Cohortes';
$string['cohortsin'] = '{$a}: cohortes disponibles';
$string['component'] = 'Fuente';
$string['contextnotfound'] = 'El contexto <b>{$a}</b> no se ha encontrado o usted no tiene permisos para crear una cohorte aquí. Se usará el contexto por defecto.';
$string['csvcontainserrors'] = 'Se han encontrado errores en los datos CSV. Consulte los detalles a continuación.';
$string['csvcontainswarnings'] = 'Se han detectado los siguientes avisos en los datos del CSV. Revise los detalles a continuación.';
$string['csvextracolumns'] = 'La/s columna/s <b>{$a}</b> serán ignoradas.';
$string['currentusers'] = 'Usuarios actuales';
$string['currentusersmatching'] = 'Usuarios actuales coincidentes';
$string['defaultcontext'] = 'Contexto por defecto';
$string['delcohort'] = 'Eliminar cohorte';
$string['delconfirm'] = '¿Realmente desea eliminar la cohorte  \'{$a}\'?';
$string['description'] = 'Descripción';
$string['displayedrows'] = '{$a->displayed} filas mostradas de {$a->total}.';
$string['duplicateidnumber'] = 'Ya existe una cohorte con el mismo número ID';
$string['editcohort'] = 'Editar cohorte';
$string['editcohortidnumber'] = 'Editar ID de la cohorte';
$string['editcohortname'] = 'Editar nombre de la cohorte';
$string['eventcohortcreated'] = 'Cohorte creada';
$string['eventcohortdeleted'] = 'Cohorte eliminada';
$string['eventcohortmemberadded'] = 'Usuario añadido a una cohorte';
$string['eventcohortmemberremoved'] = 'Usuario eliminado de una cohorte';
$string['eventcohortupdated'] = 'Cohorte actualizada';
$string['external'] = 'Cohorte externa';
$string['idnumber'] = 'ID de la cohorte';
$string['invalidtheme'] = 'El tema de la cohorte no existe';
$string['memberscount'] = 'Tamaño de la cohorte';
$string['name'] = 'Nombre';
$string['namecolumnmissing'] = 'Existe algún problema con el formato del fichero CSV. Por favor comprueba que incluye el nombre de las columnas. Para añadirle usuarios a una cohorte, vaya a \'Subir usuarios\' en la Administración del sitio.';
$string['namefieldempty'] = 'El nombre del campo no puede quedar vacío';
$string['newidnumberfor'] = 'Nuevo número ID para la cohorte {$a}';
$string['newnamefor'] = 'Nuevo nombre para la cohorte {$a}';
$string['nocomponent'] = 'Creada manualmente';
$string['potusers'] = 'Usuarios potenciales';
$string['potusersmatching'] = 'Usuarios potenciales coincidentes';
$string['preview'] = 'Previsualizar';
$string['privacy:metadata:cohort_members'] = 'Información acerca de la cohorte del usuario.';
$string['privacy:metadata:cohort_members:cohortid'] = 'El ID de la cohorte';
$string['privacy:metadata:cohort_members:timeadded'] = 'El sello de tiempo que indica cuando fue añadido el usuario a la cohorte';
$string['privacy:metadata:cohort_members:userid'] = 'El ID del usuario que está asociado a la cohorte';
$string['removeuserwarning'] = 'Quitar usuarios de una cohorte puede dar como resultado la baja de matrícula de estos usuarios en múltiples cursos, lo que implica la eliminación de las configuraciones de usuario, las calificaciones, la pertenencia a grupos y otra información de usuario en los cursos afectados.';
$string['search'] = 'Buscar';
$string['searchcohort'] = 'Buscar cohorte';
$string['selectfromcohort'] = 'Seleccionar miembros de la cohorte';
$string['systemcohorts'] = 'Cohortes del sistema';
$string['unknowncohort'] = 'Cohorte desconocida ({$a})!';
$string['uploadcohorts'] = 'Actualizar cohortes';
$string['uploadcohorts_help'] = 'Las cohortes se pueden cargas a través de archivos de texto. El formato del archivo deber ser el siguiente:
* Cada línea de archivo contiene un registro
* Cada registro es una serie de datos separados por comas (u otros delimitadores)
* El primer registro contiene una lista de nombres de campo que define el formato del resto del archivo
* El nomre es un campo obligatorio
* Los campos opcionales son: idnumber, description, descriptionformat, visible, context, category, category_id, category_idnumber, category_path';
$string['uploadedcohorts'] = 'Subidas {$a} cohortes';
$string['useradded'] = 'Usuario añadido a la cohorte "{$a}"';
$string['visible'] = 'Visible';
$string['visible_help'] = 'Cualquier cohorte puede ser vista por usuarios que tengan la capacidad \'moodle/cohort:view\' en el contexto de cohorte. <br/>
Las cohortes visibles también pueden ser vistas por usuarios en los cursos subyacentes.';
