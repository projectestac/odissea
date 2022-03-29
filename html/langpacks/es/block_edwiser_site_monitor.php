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
 * Strings for component 'block_edwiser_site_monitor', language 'es', version '3.11'.
 *
 * @package     block_edwiser_site_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeusers'] = 'Activo';
$string['cannotshowonsidebar'] = 'No se puede mostrar el gráfico de uso en la barra lateral. Mueva el bloque a la región de contenido para visualizarlo.';
$string['changelog'] = 'Registro de cambios';
$string['checksettings'] = 'Por favor verifique <a target="_blank" href="{$a->link}">{$a->text}</a>';
$string['comeswith'] = 'Viene con: {$a}';
$string['configtitle'] = 'Título del bloque Edwiser Site Monitor';
$string['contactus'] = 'Contacte con nosotros';
$string['cpu'] = 'CPU';
$string['cpucommandnotallowed'] = 'Línea de comandos <strong>/proc/cpuinfo</strong> --Permiso denegado';
$string['cpuhigherlimit'] = 'Límite superior de la CPU';
$string['cpuhigherlimit_help'] = 'Límite superior de uso de la CPU';
$string['cpulimit_invalid'] = 'Por favor indique un límite válido de CPU';
$string['cpulimit_overlap'] = 'Por favor indique un límite válido de CPU. El límite superior no puede ser igual o inferior que el límite inferior';
$string['cpulowerlimit'] = 'Límite inferior de CPU';
$string['cpulowerlimit_help'] = 'Límite inferior de uso de la CPU';
$string['cpuusage'] = 'Uso de la CPU';
$string['crontask'] = 'Edwiser Site Monitor - Recopilar estadísticas de uso de 24 horas';
$string['deletedusers'] = 'Borrado';
$string['edwiser_site_monitor:addinstance'] = 'Añadir un nuevo bloque de monitor de sitio';
$string['edwiser_site_monitor:myaddinstance'] = 'Añadir un nuevo monitor de sitio al Panel Principal';
$string['edwiserplugins'] = 'Plugins de Edwiser';
$string['emailfailed'] = 'No se puede enviar el correo electrónico.';
$string['emailsent'] = 'Correo electrónico enviado.';
$string['emailsuccess'] = 'Su mensaje ha sido enviado. Gracias.';
$string['enablethreshold'] = 'Habilitar límites de umbral';
$string['enablethreshold_help'] = 'Esto habilitará las comprobaciones de umbral y enviará un correo electrónico si el uso es inferior al límite inferior o superior al límite superior';
$string['errorfetching'] = 'Error al obtener el ZIP del plugin. <b>{$a}</b>';
$string['errorfetchingexist'] = 'Error al obtener el ZIP del plugin: la ubicación de destino ya existe. <b>{$a}</b>';
$string['errors'] = 'Errores';
$string['failed'] = 'Ha fallado';
$string['hader-threshold'] = 'Umbral';
$string['header-current'] = 'Actual';
$string['header-expected'] = 'Bajo/Alto';
$string['header-type'] = 'Tipo';
$string['high'] = 'Alto';
$string['highusage'] = 'Alto uso';
$string['installnew'] = 'Instalar un nuevo plugin';
$string['invalidjsonfile'] = 'Lista de productos Edwiser inválida.';
$string['invalidzip'] = 'Archivo zip inválido. <b>{$a}</b>';
$string['knowmore'] = 'Saber más';
$string['last24hoursusage'] = 'Uso de las últimas 24 horas';
$string['livestatusrefreshrate'] = 'Frecuencia de actualización';
$string['livestatusrefreshrate_help'] = 'Frecuencia de actualización para la pestaña de estado en vivo en segundos';
$string['livestatusrefreshrate_invalid'] = 'Por favor introduzca una frecuencia de actualización válida en segundos';
$string['liveusage'] = 'Uso en vivo';
$string['liveusers'] = 'Usuarios en línea';
$string['low'] = 'Bajo';
$string['lowusage'] = 'Bajo uso';
$string['memory'] = 'Memoria';
$string['memorycommandnotallowed'] = 'Línea de comandos <strong>free</strong> --Permiso denegado';
$string['memoryhigherlimit'] = 'Límite superior de memoria';
$string['memoryhigherlimit_help'] = 'Límite superior de uso de memoria';
$string['memorylimit_invalid'] = 'Por favor introduzca un límite de memoria válido';
$string['memorylimit_overlap'] = 'Por favor introduzca un límite de memoria válido. El límite superior no puede ser igual o menor que el límite inferior';
$string['memorylowerlimit'] = 'Límite inferior de memoria';
$string['memorylowerlimit_help'] = 'Límite inferior de uso de memoria';
$string['memoryusage'] = 'Uso de memoria';
$string['messageprovider:notifications'] = 'Noticias y actualizaciones Edwiser';
$string['moderateusage'] = 'Uso moderado';
$string['news'] = 'Noticias y actualizaciones Edwiser';
$string['noupdates'] = 'Todo está actualizado.';
$string['otherplugins'] = 'Otros Plugins';
$string['pluginname'] = 'Edwiser Site Monitor';
$string['policy'] = 'Estoy de acuerdo con la <a href="{$a}" target="_blank">Política de Privacidad</a>';
$string['privacy:metadata'] = 'El bloque del monitor del sitio muestra información sobre el servidor.';
$string['privacy:metadata:block_edwiser_site_monitor:cpu'] = 'Uso de CPU del sitio cuando se registra.';
$string['privacy:metadata:block_edwiser_site_monitor:memory'] = 'Uso de memoria del sitio cuando se registra.';
$string['privacy:metadata:block_edwiser_site_monitor:storage'] = 'Uso de almacenamiento del sitio cuando se registra.';
$string['privacy:metadata:block_edwiser_site_monitor:tableexplanation'] = 'Almacena el uso de la CPU, la memoria y el almacenamiento del sitio.';
$string['privacy:metadata:block_edwiser_site_monitor:time'] = 'Hora en que se registra el uso.';
$string['recommendation'] = 'Plugins recomendados';
$string['requirehigherversion'] = 'Versión de Moodle requerida: <b>{$a}</b>';
$string['storage'] = 'Almacenamiento';
$string['storagehigherlimit'] = 'Límite superior de almacenamiento';
$string['storagehigherlimit_help'] = 'Límite superior de uso de almacenamiento';
$string['storagelimit_invalid'] = 'Por favor introduzca un límite de almacenamiento válido';
$string['storagelimit_overlap'] = 'Por favor introduzca un límite de almacenamiento válido. El límite superior no puede ser igual o menor que el límite inferior';
$string['storagelowerlimit'] = 'Límite inferior de almacenamiento';
$string['storagelowerlimit_help'] = 'Límite inferior de uso de almacenamieto';
$string['storageusage'] = 'Almacenamiento usado';
$string['suspendedusers'] = 'Suspendido';
$string['thanksmessage'] = '<div style="background-color: #efefef; -webkit-text-size-adjust: none !important; margin: 0; padding: 70px 70px 70px 70px;"><table id="template_container" style="text-align: center; padding-bottom: 20px; background-color: rgb(223, 223, 223); box-shadow: rgba(0, 0, 0, 0.024) 0px 0px 0px 3px !important; border-radius: 6px !important; margin: auto;" border="0" width="500" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="background-color: #1177d1;border-top-left-radius: 6px !important;border-top-right-radius: 6px !important;border-bottom: 0;font-family: Arial;font-weight: bold;line-height: 100%;vertical-align: middle;">
<center><img style="height: 60px;" src="https://edwiser.org/wp-content/uploads/2016/07/edwiser-logoalternate.png"></center>
</td>
</tr>
<tr>
<td style="padding: 20px; background-color: #dfdfdf; border-radius: 6px !important;" align="center" valign="top">
<div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">Hola {$a->user},</div><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;"><br>Gracias por contactarnos.<br><br> Nuestro equipo de soporte se comunicará con usted dentro de las próximas 24 horas.</div><br><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">Esto es un correo electrónico autogenerado. Para cualquier pregunta o duda adicional puede contactar con nosotros a través del correo electrónico {$a->email}</div></td></tr></tbody></table><br>
</div>';
$string['thankssubject'] = 'Gracias por contactar con nosotros.';
$string['thresholdheader'] = 'Límite del umbral';
$string['today'] = 'Hoy';
$string['unabletoloadplugindetails'] = 'No se pueden cargar los detalles del Plugin <b>{$a}</b>';
$string['unabletounzip'] = 'No se puede descomprimir <b>{$a}</b>';
$string['usageemailsubject'] = '{$a}: Edwiser Site Monitor - Alerta de uso';
$string['users'] = 'Usuarios';
$string['xaxistitle'] = 'Tiempo';
$string['yaxistitle'] = 'Uso(%)';
