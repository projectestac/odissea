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
 * Strings for component 'alternative', language 'es', version '4.1'.
 *
 * @package     alternative
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alternative'] = 'alternativa';
$string['alternativename'] = 'Nombre de la actividad';
$string['alternativeoptions'] = 'Opciones para esta alternativa';
$string['changeallowed'] = 'Cambio permitido';
$string['changeallowed_help'] = 'Si no está activado, el usuario no podrá cambiar su elección. Los maestros, y todos los roles con la capacidad de  `alternatives:forceregistration`, podrán cambiar la elección de cualquiera.';
$string['chooseteammembers'] = 'Por favor, seleccione a los miembros de su equipo';
$string['chooseuser'] = 'Por favor, seleccione el usuario a registrar';
$string['csv'] = 'Importar CSV';
$string['csv2ndfield'] = 'El 2do campo (lugares) debe ser numérico, con 0=sin límte.';
$string['csv_help'] = 'Cada línea se compone de Título ; Lugares ; fecha ; Descripción';
$string['csvbadfieldnb'] = 'Número de campos malo: {$a} en lugar de 4.';
$string['csvunableopen'] = 'No se puede abrir el archivo CSV.';
$string['datecomment'] = 'Fecha';
$string['datecomment_help'] = 'Este campo puede contener cualquier texto, pero está hecho para una fecha o un intervalo de fechas.';
$string['displaycompact'] = 'Visualización compacta';
$string['fieldsetcsv'] = 'Opciones de importación de archivos CSV';
$string['fieldsetmultiple'] = 'Configuraciones para registros múltiples';
$string['fieldsetteam'] = 'Configuración de equipos';
$string['forceregister'] = 'Forzar registros';
$string['groupdependent'] = 'Dependiente del Grupo';
$string['groupdependent_help'] = 'Si esta casilla está activada, el texto mostrado a cada usuario dependerá de su grupo.';
$string['individual'] = 'Individual';
$string['instructionsforcereg'] = 'Usted no puede registrarse a sí mismo, pero su rol le permite registrar estudiantes a cualquier elección.';
$string['instructionsmultiple'] = 'Usted debe elegir entre {$a->multiplemin} y {$a->multiplemax} opciones.';
$string['instructionsmultiplenomax'] = 'Usted debe elegir al menos {$a->multiplemin} opciones.';
$string['instructionsnochange'] = 'Una vez que se guarda una opción, no se permitirá cambiarla.';
$string['instructionsteam'] = 'Usted puede registrar un equipo. Un equipo debe tener entre {$a->teammin} y {$a->teammax} miembros. Como Usted ha registrado a otros miembros de su equipo, Usted será el jefe del equipo.';
$string['messageprovider:reminder'] = 'recordatorio de estudiante mod/alternativo';
$string['modulename'] = 'Alternativa';
$string['modulename_help'] = 'El módulo Alternativa permite a los estudiantes que registren una o varias opciones en una lista dada.';
$string['modulenameplural'] = 'alternativas';
$string['multiple'] = 'Múltiple';
$string['multipleenable'] = 'Habilitar estas configuraciones';
$string['multipleenable_help'] = 'Cada usuario debe elegir varias opciones, entre los valores mínimo y máximo.';
$string['multiplemax'] = 'Máximos registros de usuarios';
$string['multiplemin'] = 'Mínimos registros de usuarios';
$string['noselectedoption'] = 'Usted tiene que registrar una opción';
$string['noselectedusers'] = 'Sin usuarios seleccionados';
$string['option'] = 'Opción';
$string['optionintro'] = 'Descripción';
$string['optionname'] = 'Título';
$string['options'] = 'Opciones';
$string['places'] = 'Lugares';
$string['placesavail'] = 'Lugares disponibles';
$string['pluginadministration'] = 'Administración de alternativa';
$string['pluginname'] = 'alternativa';
$string['potentialteammembers'] = 'Miembros potenciales del equipo';
$string['private'] = 'Privado';
$string['public'] = 'Público';
$string['publicreg'] = 'Registros públicos';
$string['register'] = 'Registrar';
$string['registrationforbidden'] = 'Usted no puede registrarse aquí';
$string['registrations'] = 'Registros';
$string['registrationsaved'] = 'Su opción para registro fue guardada.';
$string['regteams'] = 'Equipos registrados';
$string['remains'] = 'Restantes';
$string['reminderBefore'] = 'antes de [[AlterUntil]]';
$string['reminderFull'] = 'Usted debe registrar una opción en la acvtividad “[[AlterName]]”';
$string['reminderFullHtml'] = 'Usted debe hacer una elección en la actividad “<i>[[AlterName]]</i>”';
$string['reminderSmall'] = 'Usted debe hacer una elección en la actividad  “[[AlterName]]”';
$string['reminderSubject'] = 'Recordatorio: Usted debe elegir de entre las opciones alternativas';
$string['sendReminder'] = 'Enviar recordatorio';
$string['separator'] = 'Separador';
$string['students'] = 'Estudiantes';
$string['synthesis'] = 'Síntesis';
$string['synthfree'] = 'Libre';
$string['synthlimitplaces'] = 'Opciones de lugares limitados (individual)';
$string['synthlimitteamplaces'] = 'Opciones de lugares limitados (equipo)';
$string['synthplaces'] = 'Lugares (individual)';
$string['synthpotential'] = 'Estudiantes potenciales';
$string['synthregistered'] = 'Estudiantes registrados';
$string['synthreserved'] = 'Reservado (entre limitados)';
$string['synthteamplaces'] = 'Lugares (equipo)';
$string['synthunlimitplaces'] = 'Opciones de lugares ilimitados (individual)';
$string['synthunlimitteamplaces'] = 'Opciones de lugares ilimitados (equipo)';
$string['synthunregistered'] = 'Estudiantes sin registrar';
$string['team'] = 'Equipo';
$string['teamenable'] = 'Habilitar configuraciones de equipo';
$string['teamenable_help'] = 'Configurar el tamaño mínimo y máximo de los equipos.';
$string['teamleader'] = 'Jefe del equipo';
$string['teamleadernotamember'] = 'El jefe del equipo so debería de ser un miembro de su equipo.';
$string['teammax'] = 'Tamaño máximo del equipo';
$string['teammin'] = 'Tamaño mínimo del equipo';
$string['teamplaces'] = 'Lugares del equipo';
$string['teamplacesavail'] = 'Lugares disponibles para equipos';
$string['teams'] = 'Equipos';
$string['unique'] = 'Único';
$string['unregister'] = 'Sin registrar';
$string['unregisterLeader'] = 'Advertencia: des-registar un jefe de equipo resultará en des-registrar a todo el equipo.';
$string['uploadoverwrites'] = 'Advertencia: subir un nuevo archivo elimina todos los registros y opciones previos.';
$string['userinfo'] = 'Se ha registrado a {$a} opciones.';
$string['usersnotreg'] = 'Usuarios sin registrar';
$string['usersreg'] = 'Usuarios registrados';
$string['viewallregistrations'] = 'Ver registros';
$string['viewallusersnotreg'] = 'Ver usuarios sin registrar';
$string['viewallusersreg'] = 'Usuarios registrados';
$string['viewsynthesis'] = 'Ver síntesis';
$string['viewteams'] = 'Ver equipos';
$string['wrongteamsize'] = 'El tamaño de su equipo no se encuentra entre los límites permitidos.';
