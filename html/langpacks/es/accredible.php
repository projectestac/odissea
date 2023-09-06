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
 * Strings for component 'accredible', language 'es', version '4.1'.
 *
 * @package     accredible
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accredible:addinstance'] = 'Añadir una petición de certificado/insignia';
$string['accredible:manage'] = 'Gestionar una petición de certificado/insignia';
$string['accredible:student'] = 'Recuperar un certificado o una insignia';
$string['accredible:view'] = 'Ver un certificado o insignia';
$string['accrediblegroup'] = 'Grupo Accredible';
$string['achievementid'] = 'Denominación del id / cohorte del logro (debe ser único)';
$string['activitygroupdescription'] = 'Las credenciales del grupo necesitan ser creadas en el <a href="{$a}" target="_blank">Área Personal de Accredible</a> antes de que se puedan emitir. Si no aparecieran, comprueba la "API Key" para asegurarte que la configuración de la integración es correcta.';
$string['activityname'] = 'Nombre de actividad';
$string['additionalactivitiesone'] = 'Atención: Estás añadiendo más de una actividad a un curso.<br/>Todas las  actividades son visibles para los alumnos, así que asegúrate de darles diferentes nombres.';
$string['additionalactivitiesthree'] = 'Este nombre aparecerá en el certificado.';
$string['additionalactivitiestwo'] = 'Los certificados/insignias únicamente serán listados en la página de la actividad cuando hayan sido concedidos con este logro.';
$string['apikeyhelp'] = 'Introduce tu código API de accredible.com';
$string['apikeylabel'] = 'Código API';
$string['autoissueheader'] = 'Criterios automáticos de emisión';
$string['certificatename'] = 'Nombre del certificado/insignia';
$string['certificateurl'] = 'Url del certificado/insignia';
$string['chooseexam'] = 'Seleccionar cuestionario final';
$string['completionissuecheckbox'] = 'Sí, emitir una vez completado el curso';
$string['completionissueheader'] = 'Criterios de emisión automática: por finalización del curso';
$string['dashboardlink'] = 'Enlace al Área Personal de Accredible';
$string['dashboardlinktext'] = 'Para borrar o diseñar credenciales, acceda al <a href="https://dashboard.accredible.com" target="_blank">área personal</a>';
$string['datecreated'] = 'Fecha de creación';
$string['description'] = 'Descripción';
$string['emptygradeattributekeyname'] = 'La calificación final del curso será asignada al atributo personalizado Accredible seleccionado. Si aún no ha creado un atributo personalizado, puede hacerlo en la <a href="{$a}" target="_blank">Accredible Platform</a>.';
$string['euhelp'] = 'Seleccione si desea almacenar los datos en la UE (Frankfurt) en lugar de USA';
$string['eulabel'] = 'Servidor UE (Frankfurt)';
$string['eventcertificatecreated'] = 'Se ha enviado una credencial a Accredible.';
$string['gotodashboard'] = 'Para actualizar la apariencia de sus credenciales y certificados, visite  <a href="https://dashboard.accredible.com" target="_blank">https://dashboard.accredible.com</a>';
$string['gradeattributegradeitemselect'] = 'Elige una calificación para incluir:';
$string['gradeattributekeynameselect'] = 'Elija un atributo de diseño Accredible:';
$string['gradeissueheader'] = 'Emisión de criterios automática: por nota de examen final';
$string['groupselect'] = 'Grupo';
$string['id'] = 'ID';
$string['includegradeattributecheckbox'] = 'Sí, incluir calificación en la Credencial.';
$string['includegradeattributedescription'] = 'Incluir la calificación del estudiante en la credencial';
$string['indexheader'] = 'Todos los certificados/insignias para {$a}';
$string['issued'] = 'emitido';
$string['manualheader'] = 'Emitir certificados/insignias manualmente';
$string['modulename'] = 'Certificado e insignias Accredible';
$string['modulename_help'] = 'El módulo de actividad certificado e insignia Accredible le permite emitir los certificados o insignias del curso a los estudiantes en accredible.com.

Añadir la actividad donde desea que sus estudiantes vean su certificado o insignia.';
$string['modulename_link'] = 'mod/accredible/view';
$string['modulenameplural'] = 'Certificados/insignias Accredible';
$string['nocertificates'] = 'No hay certificados/insignias';
$string['nouserswarning'] = 'Debe elegir un grupo Accredible para ver la lista de usuarios.';
$string['overview'] = 'Resumen';
$string['passinggrade'] = 'Porcentaje necesario para pasar el curso (%)';
$string['pluginadministration'] = 'Administación de certificados/insignias acreditables';
$string['pluginname'] = 'Certificados e insignias acreditables';
$string['privacy:metadata:accredible'] = 'Para integrarse con Accredible, los datos del usuario deben intercambiarse con ese servicio.';
$string['privacy:metadata:accredible:email'] = 'Su dirección de correo electrónico se envía a Accredible para emitir una credencial.';
$string['privacy:metadata:accredible:fullname'] = 'Su nombre completo se envía a Accredible para emitir una credencial';
$string['privacy:metadata:accredible:quizgrade'] = 'La calificación de su cuestionario puede enviarse a Accredible para emitir una credencial.';
$string['recipient'] = 'Beneficiario';
$string['templatename'] = 'Nombre de la cohorte (desde el Tablero)';
$string['unissueddescription'] = 'Estos estudiantes cumplen los requisitos para este certificado pero los certificados no han sido emitidos. Seleccione aquellos para quienes desea emitir certificado.';
$string['unissuedheader'] = 'Certificados/insignias no emitidos';
$string['usestemplatesdescription'] = 'Asegúrese de que dispone de un grupo en el panel principal con el mismo nombre que el Id del logro.';
$string['viewheader'] = 'Certificados e insignias para {$a}';
$string['viewimgcomplete'] = 'Clic para ver tu certificado o insignia';
$string['viewimgincomplete'] = 'Curso todavía en desarrollo';
$string['viewsubheader'] = 'ID de grupo: {$a}';
$string['viewsubheaderold'] = 'Id del logro: {$a}';
