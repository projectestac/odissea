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
 * Strings for component 'quizaccess_safeexambrowser', language 'es', version '3.11'.
 *
 * @package     quizaccess_safeexambrowser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedbrowserkeys'] = 'Claves de examen de navegador permitidas';
$string['allowedbrowserkeys_help'] = 'En este cuadro, puede ingresar las claves de examen del navegador permitidas para las versiones de Safe Exam Browser que pueden acceder a este cuestionario. Si no se ingresan claves, entonces no se requiere una clave de examen de navegador específica para este cuestionario.';
$string['allowedbrowserkeysdistinct'] = 'Las claves deben ser todas diferentes.';
$string['allowedbrowserkeyssyntax'] = 'Debe ingresar las claves permitidas una por línea. Una clave debe ser una cadena hexadecimal de 64 caracteres.';
$string['allowedkeys_adv'] = 'Las claves son una configuración avanzada';
$string['allowedkeys_adv_desc'] = 'Si esta opción está activada, la lista de claves de navegador permitidas es un campo avanzado en el formulario de configuración del cuestionario.';
$string['pluginname'] = 'norma de acceso al examen de Safe Exam Browser';
$string['privacy:metadata'] = 'El complemento de normas de acceso al cuestionario de Safe Exam Browser no almacena ningún dato personal.';
$string['safebrowserdownloadurl'] = 'URL de descarga de Safe Exam Browser.';
$string['safebrowserdownloadurl_desc'] = 'Si proporciona una URL aquí, se les dirá a los usuarios que pueden descargar la versión requerida de Safe Exam Browser desde allí.';
$string['safebrowsermustbeused'] = 'Debe usar una versión aprobada de Safe Exam Browser para contestar esta prueba.';
$string['safebrowsermustbeusedwithlink'] = 'Debe usar una versión aprobada de Safe Exam Browser para contestar esta prueba. Puedes descargarla desde {$a->link}';
$string['safeexambrowser:exemptfromcheck'] = 'Exento de la verificación del navegador Safe Exam';
