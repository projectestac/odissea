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
 * Strings for component 'ltiservice_memberships', language 'es', version '3.11'.
 *
 * @package     ltiservice_memberships
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allow'] = 'Utilice este servicio para recuperar información de los miembros según la configuración de privacidad';
$string['ltiservice_memberships'] = 'Aprovisionamiento de roles y nombres de IMS LTI';
$string['ltiservice_memberships_help'] = 'Permitir que la herramienta recupere la información de los miembros del curso mediante el servicio de aprovisionamiento de roles y nombres de IMS LTI. Se aplicarán las configuraciones de privacidad. Para las solicitudes de nivel de curso, estas se basarán en los ajustes de configuración de la herramienta. Si desea enviar siempre dichos datos, no delegue la elección a los profesores. Las solicitudes de nivel de enlace siempre utilizarán la configuración de privacidad que se aplica al enlace.';
$string['notallow'] = 'No utilice este servicio';
$string['pluginname'] = 'Servicio LTI de suministro de roles y nombres';
$string['privacy:metadata:email'] = 'El correo electrónico del usuario que utiliza el consumidor LTI.';
$string['privacy:metadata:externalpurpose'] = 'La información es enviada a un proveedor externo LTI.';
$string['privacy:metadata:firstname'] = 'El nombre del usuario que utiliza el consumidor LTI.';
$string['privacy:metadata:fullname'] = 'El nombre completo del usuario que utiliza el consumidor LTI.';
$string['privacy:metadata:lastname'] = 'El apellido del usuario que utiliza el consumidor LTI.';
$string['privacy:metadata:userid'] = 'El ID del usuario que utiliza el consumidor LTI.';
$string['privacy:metadata:useridnumber'] = 'El número de ID del usuario que utiliza el consumidor LTI';
