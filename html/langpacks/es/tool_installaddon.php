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
 * Strings for component 'tool_installaddon', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_installaddon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Reconocimiento';
$string['acknowledgementtext'] = 'Entiendo que es mi responsabilidad disponer de copias de seguridad completas de este sitio antes de instalar módulos externos (ad-ons). Acepto y entiendo que los módulos externos  (especialmente aquellos procedentes de fuentes no oficiales) pueden contener agujeros de seguridad, hacer que el sitio quede fuera de servicio, o provocar fugas de datos privados o la pérdida de los mismos.';
$string['featuredisabled'] = 'El instalador de módulos externos está desactivado en este sitio.';
$string['installaddon'] = '¡Instalale módulo externo!';
$string['installaddons'] = 'Instalar módulos externos';
$string['installfromrepo'] = 'Instalar módulos externos desde el directorio de extensiones de Moodle';
$string['installfromrepo_help'] = 'Se le redirijirá al directorio de extensiones de Moodle para buscar e instalar el módulo externo, Tenga en cuenta que se enviará también el nombre completo, la URL y la versión de su sitio Moodle, para facilitarle la instalación.';
$string['installfromzip'] = 'Instalar módulo externo desde un archivo ZIP';
$string['installfromzipfile'] = 'Paquete ZIP';
$string['installfromzipfile_help'] = 'El paquete de extensión ZIP debe contener sólo un directorio, con el mismo nombre que la extensión. El archivo ZIP se desempaquetará en el lugar apropiado según el tipo de extensión. Si el paquete se ha descargado desde el directorio de extensiones de Moodle entonces tendrá esta estructura.';
$string['installfromzip_help'] = 'Una alternativa a la instalación de un módulo externo directamente desde el directorio de extensiones de Moodle es cargar un paquete ZIP con el módulo. El paquete ZIP debe tener la misma estructura que el paquete descargado en el directorio de extensiones de Moodle.';
$string['installfromziprootdir'] = 'Cambie el nombre del directorio raíz';
$string['installfromziprootdir_help'] = 'Algunos paquetes ZIP, como los generados por Github, pueden contener un nombre de directorio raíz incorrecto. Si es así, el nombre correcto se debe indicar aquí.';
$string['installfromzipsubmit'] = 'Instalar módulo externo desde archivo ZIP';
$string['installfromziptype'] = 'Tipo de extensión';
$string['installfromziptype_help'] = 'Seleccione el tipo correcto de plugin que va a instalar. Advertencia: El procedimiento de instalación puede fallar gravemente si se especifica un tipo de extensión incorrecto.';
$string['permcheck'] = 'Asegúrese de que los procesos del servidor web pueden escribir en la ubicación raíz de este tipo de extensiones.';
$string['permcheckerror'] = 'Error al comprobar los permisos de escritura';
$string['permcheckprogress'] = 'Comprobando los permisos de escritura...';
$string['permcheckrepeat'] = 'Comprobar de nuevo';
$string['permcheckresultno'] = 'No hay permiso de escritura en la ubicación para ese tipo de extensiones <em>{$a->path}</em>.';
$string['permcheckresultyes'] = 'Hay permiso de escritura en la ubicación para ese tipo de extensiones <em>{$a->path}</em>.';
$string['pluginname'] = 'Instalador de módulos externos';
$string['remoterequestalreadyinstalled'] = 'Hay una solicitud para instalar en este sitio el módulo externo {$a->name} ({$a->component}) versión {$a->version} desde el directorio de extensiones de Moodle. Sin embargo, esta extensión<strong>ya está instalada</strong> en este sitio.';
$string['remoterequestconfirm'] = 'Hay una solicitud para instalar en este sitio el módulo externo {$a->name} ({$a->component}) versión {$a->version} desde el directorio de extensiones de Moodle. Si pulsa <strong>Continuar</strong> se descargará el paquete ZIP de esta extensión para validarlo. Todavía no se va a instalar nada.';
$string['remoterequestinvalid'] = 'Hay una solicitud para instalar en este sitio un módulo externo desde el directorio de extensiones de Moodle. Por desgracia, la solicitud no es válida, por lo que el módulo no se puede instalar.';
$string['remoterequestpermcheck'] = 'Hay una solicitud para instalar en este sitio el módulo externo {$a->name} ({$a->component}) versión {$a->version} desde el directorio de extensiones de Moodle. Sin embargo, <strong>no se puede escribir></strong>en el tipo de ubicación de la extensión <strong>{$a->typepath}</strong>. Debe dar acceso de escritura al usuario del servidor web en este tipo de ubicación de extensiones, después, pulse el botón de continuar pare repetir la comprobación...';
$string['remoterequestpluginfoexception'] = '¡Vaya! ... Se ha producido un error al intentar obtener información sobre el módulo externo {$a->name} ({$a->component}) versión {$a->version}. el módulo no se puede instalar. Active el modo de depuración para ver los detalles del error.';
$string['typedetectionfailed'] = 'Imposible detectar el tipo de extensión. Por favor, seleccione manualmente de qué tipo es la extensión.';
