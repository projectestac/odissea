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
 * Strings for component 'mlbackend_python', language 'es', version '3.11'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'La configuración del servidor no está completa.';
$string['errorserver'] = 'Error de servidor {$a}';
$string['host'] = 'Host';
$string['hostdesc'] = 'Host';
$string['packageinstalledshouldbe'] = 'El paquete Python moodlemlbackend debería actualizarse. La versión requerida es la "{$a->required}" y la que está instalada es la "{$a->installed}".';
$string['packageinstalledtoohigh'] = 'El paquete Python moodlemlbackend no es compatible con esta versión de Moodle. La versión requerida es la "{$a->required}" o superior siempre y cuando sea compatible con API. La versión instalada es la "{$a->installed}" y es demasiado elevada.';
$string['password'] = 'Contraseña';
$string['passworddesc'] = 'Cadena de caracteres utilizada como contraseña para comunicaciones entre el servidor Moodle y el servidor Python.';
$string['pluginname'] = 'Backend de aprendizaje automático de Python';
$string['port'] = 'Puerto';
$string['portdesc'] = 'Puerto';
$string['privacy:metadata'] = 'El complemento de backend de aprendizaje automático de Python no almacena ningún dato personal.';
$string['pythonpackagenotinstalled'] = 'El paquete Python moodlemlbackend no está instalado o existe un problema con él. Por favor ejecute "{$a}" desde la interfaz de línea de comandos para obtener más información.';
$string['pythonpathnotdefined'] = 'La ruta a su archivo binario ejecutable de Python no está definida. Por favor visite "{$a}" para fijarla.';
$string['secure'] = 'Utilizar HTTPS';
$string['securedesc'] = 'Si utilizar HTTP o HTTPS.';
$string['serversettingsinfo'] = 'Si está habilitado \'Utilizar un servidor\', se mostrarán los ajustes del servidor.';
$string['tensorboardinfo'] = 'Ejecutar';
$string['username'] = 'Nombre de usuario';
$string['usernamedesc'] = 'Cadena de caracteres utilizada como nombre de usuario para comunicarse entre el servidor Moodle y el servidor Python.';
$string['useserver'] = 'Utilizar un servidor';
$string['useserverdesc'] = 'El paquete Python de backend de aprendizaje automático no está instalado en el servidor web, sino en un servidor diferente.';
