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
 * Strings for component 'quizaccess_onesession', language 'es', version '3.11'.
 *
 * @package     quizaccess_onesession
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anothersession'] = 'Está intentando acceder a un intento de cuestionario desde un ordenador, dispositivo o navegador diferente del que usó para iniciar el cuestionario. Si cerró accidentalmente su navegador, por favor contacte a su profesor.';
$string['eventattemptblocked'] = 'Se bloqueó el intento del estudiante para continuar haciendo el cuestionario utilizando otro dispositivo';
$string['eventattemptunlocked'] = 'Al estudiante se le permitió continuar el cuestionario usando otro dispositivo';
$string['onesession'] = 'Bloquear conexiones simultáneas';
$string['onesession:unlockattempt'] = 'Desbloquear intento de cuestionario';
$string['onesession_help'] = 'Si está habilitado, los usuarios pueden continuar el intento del cuestionario solo en la misma sesión del explorador. Cualquier tentativa de abrir el mismo intento de cuestionario utilizando otro ordenador, dispositivo o navegador será bloqueado. Esto puede ser útil para estar seguro de que nadie ayuda a los estudiantes abriendo el mismo intento del cuestionario en otro equipo.';
$string['pluginname'] = 'Regla de acceso a cuestionario: bloquear sesiones simultáneas';
$string['studentinfo'] = '¡Atención! Está prohibido cambiar de dispositivo mientras se contesta este cuestionario. Tenga en cuenta que después de comenzar la prueba, se bloquearán todas las conexiones a esta prueba con otras computadoras, dispositivos y navegadores. No cierre la ventana del navegador hasta el final del intento, de lo contrario no podrá completar esta prueba.';
$string['unlockthisattempt'] = 'Permita que el estudiante continúe este intento usando otro dispositivo';
$string['unlockthisattempt_header'] = 'Bloquear conexiones simultáneas';
