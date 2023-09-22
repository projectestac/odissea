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
 * Strings for component 'tool_installaddon', language 'es', version '4.1'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Reconocimiento';
$string['acknowledgementtext'] = 'Entiendo que es mi responsabilidad disponer de copias de seguridad completas de este sitio antes de instalar módulos externos (ad-ons). Acepto y entiendo que los módulos externos  (especialmente, pero no exclusivamente, aquellos procedentes de fuentes no oficiales) pueden contener agujeros de seguridad, hacer que el sitio quede fuera de servicio, o provocar fugas de datos privados o la pérdida de los mismos.';
$string['featuredisabled'] = 'El instalador de complementos está deshabilitado en este sitio.';
$string['installaddon'] = '¡Instalar complemento!';
$string['installaddons'] = 'Instalar complementos';
$string['installfromrepo'] = 'Instalar complementos desde el directorio de extensiones de Moodle';
$string['installfromrepo_help'] = 'Se le redirijirá al directorio de extensiones de Moodle para buscar e instalar un plugin. Tenga en cuenta que se enviará también el nombre completo, la URL y la versión de su sitio Moodle, para facilitarle la instalación.';
$string['installfromzip'] = 'Instalar complemento desde un archivo ZIP';
$string['installfromzip_help'] = 'Una alternativa a la instalación de un plugin directamente desde el directorio de plugins de Moodle es cargar un paquete ZIP con el plugin. El paquete ZIP debe tener la misma estructura que el paquete descargado en el directorio de plugins de Moodle.';
$string['installfromzipfile'] = 'Paquete ZIP';
$string['installfromzipfile_help'] = 'El paquete de plugin ZIP debe contener sólo un directorio, con el mismo nombre que el plugin. El archivo ZIP se desempaquetará en el lugar apropiado según el tipo de plugin. Si el paquete se ha descargado desde el directorio de plugins de Moodle entonces tendrá esta estructura.';
$string['installfromzipinvalid'] = 'El paquete ZIP del complemento debe contener solo un directorio, cuyo nombre coincida con el nombre del complemento. El archivo proporcionado no es un paquete ZIP de complemento válido.';
$string['installfromziprootdir'] = 'Cambie el nombre del directorio raíz';
$string['installfromziprootdir_help'] = 'Algunos paquetes ZIP, como los generados por Github, pueden contener un nombre de directorio raíz incorrecto. Si es así, el nombre correcto se debe indicar aquí.';
$string['installfromzipsubmit'] = 'Instalar complemento desde archivo ZIP';
$string['installfromziptype'] = 'Tipo de extensión';
$string['installfromziptype_help'] = 'Para los complementos que declaran correctamente el nombre de su componente, el instalador puede detectar el tipo de complemento automáticamente. Si la detección automática falla, elija el tipo correcto de complemento manualmente. Advertencia: El procedimiento de instalación puede fallar gravemente si se especifica un tipo de complemento incorrecto.';
$string['installfromziptype_link'] = 'Development:Plugins';
$string['permcheck'] = 'Asegúrese de que los procesos del servidor web pueden escribir en la ubicación raíz de este tipo de extensiones.';
$string['permcheckerror'] = 'Error al comprobar los permisos de escritura';
$string['permcheckprogress'] = 'Comprobando los permisos de escritura...';
$string['permcheckrepeat'] = 'Comprobar de nuevo';
$string['permcheckresultno'] = 'No hay permiso de escritura en la ubicación para ese tipo de extensiones <em>{$a->path}</em>.';
$string['permcheckresultyes'] = 'Hay permiso de escritura en la ubicación para ese tipo de extensiones <em>{$a->path}</em>.';
$string['pluginname'] = 'Instalador de complemento';
$string['privacy:metadata'] = 'El complemento de instalador de complementos no almacena ningún dato personal.';
$string['remoterequestalreadyinstalled'] = 'Hay una solicitud para instalar en este sitio el complemento {$a->name} ({$a->component}) versión {$a->version} desde el directorio de complementos de Moodle. Sin embargo, este complemento <strong>ya está instalado</strong> en este sitio.';
$string['remoterequestconfirm'] = 'Hay una solicitud para instalar en este sitio el módulo externo {$a->name} ({$a->component}) versión {$a->version} desde el directorio de extensiones de Moodle. Si pulsa <strong>Continuar</strong> se descargará el paquete ZIP de esta extensión para validarlo. Todavía no se va a instalar nada.';
$string['remoterequestinvalid'] = 'Hay una solicitud para instalar en este sitio un complemento desde el directorio de complementos de Moodle. Por desgracia, la solicitud no es válida, por lo que el módulo no se puede instalar.';
$string['remoterequestnoninstallable'] = 'Hay una petición para instalar en este sitio el complemento {$a->name} ({$a->component}) versión {$a->version} desde el directorio de complementos de Moodle. Sin embargo, la comprobación previa del complemento ha fallado (reason code: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Hay una solicitud para instalar en este sitio el complemento {$a->name} ({$a->component}) versión {$a->version} desde el directorio de complementos de Moodle. Sin embargo, la ubicación <strong>{$a->typepath}</strong> <strong>no ofrece permisos de escritura</strong>. Tiene que dar acceso con permisos de escritura al usuario del servidor web en esa ubicación y después haga clic en el botón de continuar para volver a realizar la comprobación.';
$string['remoterequestpluginfoexception'] = 'Vaya... Se ha producido un error al intentar obtener información sobre el complemento {$a->name} ({$a->component}) versión {$a->version}. El complemento no se puede instalar. Active el modo de depuración para ver los detalles del error.';
$string['typedetectionfailed'] = 'Imposible detectar el tipo de extensión. Por favor, seleccione manualmente de qué tipo es la extensión.';
$string['typedetectionmismatch'] = 'El tipo de complemento seleccionado no coincide con el declarado por el complemento: {$a}';
