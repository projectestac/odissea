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
 * Strings for component 'tool_oauth2', language 'es', version '3.11'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authconfirm'] = 'Esta acción otorgará acceso API permanente a Moodle para la cuenta autenticada. Esto está pensado para utilizarse como una cuenta del sistema para administrar archivos propiedad de Moodle.';
$string['authconnected'] = 'La cuenta del sistema está ahora conectada para acceso fuera de línea';
$string['authnotconnected'] = 'La cuenta del sistema no se conectó para el acceso fuera de línea';
$string['configured'] = 'Configurado';
$string['configuredstatus'] = 'Configurado';
$string['connectsystemaccount'] = 'Conectar a una cuenta del sistema';
$string['createfromtemplate'] = 'Crear un servicio OAuth 2 desde una plantilla';
$string['createfromtemplatedesc'] = 'Elija una de las plantillas de servicio OAuth 2 a continuación para crear un servicio OAuth con una configuración válida para uno de los tipos de servicio conocidos. Esto creará el servicio OAuth 2, con todos los endpoints y parámetros correctos necesarios para la autenticación, aunque aún deberá introducir el ID de cliente y el secreto para el nuevo servicio antes de que se pueda usar.';
$string['createnewendpoint'] = 'Crear nuevo endpoint para el emisor "{$a}"';
$string['createnewfacebookissuer'] = 'Crear nuevo servicio de Facebook';
$string['createnewgoogleissuer'] = 'Crear nuevo servicio de Google';
$string['createnewissuer'] = 'Crear nuevo servicio personalizado';
$string['createnewmicrosoftissuer'] = 'Crear nuevo servicio de Microsoft';
$string['createnewnextcloudissuer'] = 'Crear nuevo servicio de Nextcloud';
$string['createnewservice'] = 'Crear nuevo servicio:';
$string['createnewuserfieldmapping'] = 'Crear una nueva asignación de campo de usuario para el emisor "{$a}"';
$string['custom_service'] = 'Personalizado';
$string['deleteconfirm'] = '¿Está seguro de que desea eliminar el emisor de identidad "{$a}"? Cualquier complemento que dependa de este emisor dejará de funcionar.';
$string['deleteendpointconfirm'] = '¿Está seguro de que desea eliminar el endpoint "{$a->endpoint}" del emisor "{$a->issuer}"? Cualquier complemento que dependa de este endpoint de funcionar.';
$string['deleteuserfieldmappingconfirm'] = '¿Está seguro de que desea eliminar la asignación de campo de usuario para el emisor "{$a}"?';
$string['discovered'] = 'Descubrimiento de servicio exitoso';
$string['discovered_help'] = 'Descubrimiento significa que los endpoints de OAuth 2 podrían determinarse automáticamente a partir de la URL base para el servicio OAuth. No es necesario "descubrir" todos los servicios, pero si no es así, los endpoints y la información de mapeo de usuarios deberán introducirse manualmente.';
$string['discoverystatus'] = 'Descubrimiento';
$string['editendpoint'] = 'Editar endpoint: {$a->endpoint} para el emisor {$a->issuer}';
$string['editendpoints'] = 'Configurar endpoints';
$string['editissuer'] = 'Editar emisor de identidad: {$a}';
$string['edituserfieldmapping'] = 'Editar asignación de campos de usuario para el emisor {$a}';
$string['edituserfieldmappings'] = 'Configurar asignaciones de campos de usuario';
$string['endpointdeleted'] = 'Endpoint eliminado';
$string['endpointname'] = 'Nombre';
$string['endpointname_help'] = 'Clave utilizada para buscar este endpoint. Debe terminar con "_endpoint".';
$string['endpointsforissuer'] = 'Endpoints para el emisor: {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'URL para este endpoint. Debe utilizar el protocolo https://.';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['imsobv2p1_service'] = 'Insignias abiertas';
$string['issueralloweddomains'] = 'Dominios de inicio de sesión';
$string['issueralloweddomains_help'] = 'Si se rellena, este ajuste es una lista de dominios separados por comas a los que se limitarán los inicios de sesión cuando se utilice este proveedor.';
$string['issuerbaseurl'] = 'URL base de servicio';
$string['issuerbaseurl_help'] = 'URL base utilizada para acceder al servicio.';
$string['issuerclientid'] = 'ID de cliente';
$string['issuerclientid_help'] = 'El ID de cliente OAuth para este emisor.';
$string['issuerclientsecret'] = 'Clave secreta de cliente';
$string['issuerclientsecret_help'] = 'La clave secreta de cliente OAuth para este emisor.';
$string['issuerdeleted'] = 'Emisor de identidad eliminado';
$string['issuerdisabled'] = 'Emisor de identidad deshabilitado';
$string['issuerenabled'] = 'Emisor de identidad habilitado';
$string['issuerimage'] = 'URL del logotipo';
$string['issuerimage_help'] = 'Una URL de imagen utilizada para mostrar un logotipo de este emisor. Puede mostrarse en la página de inicio de sesión.';
$string['issuerloginpagename'] = 'Nombre mostrado en la página de inicio de sesión';
$string['issuerloginpagename_help'] = 'Si se especifica, este nombre se utilizará en la página de inicio de sesión en lugar del nombre del servicio.';
$string['issuerloginparams'] = 'Parámetros adicionales incluidos en una solicitud de inicio de sesión.';
$string['issuerloginparams_help'] = 'Algunos sistemas requieren parámetros adicionales para una solicitud de inicio de sesión con el fin de leer el perfil básico del usuario.';
$string['issuerloginparamsoffline'] = 'Parámetros adicionales incluidos en una solicitud de inicio de sesión para acceso sin conexión.';
$string['issuerloginparamsoffline_help'] = 'Cada sistema OAuth define una forma diferente para solicitar acceso sin conexión. P. ej. Google requiere los parámetros adicionales: "access_type=offline&prompt=consent". Estos parámetros deben estar en formato de parámetro de consulta de URL.';
$string['issuerloginscopes'] = 'Ámbitos incluidos en una solicitud de inicio de sesión.';
$string['issuerloginscopes_help'] = 'Algunos sistemas requieren ámbitos adicionales para una solicitud de inicio de sesión con el fin de leer el perfil básico del usuario. Los alcances estándar para un sistema compatible con OpenID Connect son "correo electrónico de perfil openid".';
$string['issuerloginscopesoffline'] = 'Ámbitos incluidos en una solicitud de inicio de sesión para acceso sin conexión.';
$string['issuerloginscopesoffline_help'] = 'Cada sistema OAuth define una forma diferente para solicitar acceso sin conexión. P. ej. Microsoft requiere un alcance adicional "offline_access".';
$string['issuername'] = 'Nombre';
$string['issuername_help'] = 'Nombre del emisor de identidad. Puede mostrarse en la página de inicio de sesión.';
$string['issuerrequireconfirmation'] = 'Requerir verificación de correo electrónico';
$string['issuerrequireconfirmation_help'] = 'Exija que todos los usuarios verifiquen su dirección de correo electrónico antes de que puedan iniciar sesión con OAuth. Esto se aplica a las cuentas recién creadas como parte del proceso de inicio de sesión, o cuando una cuenta de Moodle existente está conectada a un inicio de sesión de OAuth a través de direcciones de correo electrónico coincidentes.';
$string['issuers'] = 'Emisores';
$string['issuersetup'] = 'Instrucciones detalladas sobre la configuración de los servicios comunes de OAuth 2';
$string['issuersetuptype'] = 'Instrucciones detalladas sobre cómo configurar el proveedor OAuth 2 {$a}';
$string['issuershowonloginpage'] = 'Mostrar en página de inicio de sesión';
$string['issuershowonloginpage_help'] = 'Si el complemento de autenticación OAuth 2 está habilitado, este emisor de inicio de sesión aparecerá en la página de inicio de sesión para permitir que los usuarios inicien sesión con cuentas de este emisor.';
$string['issuersservicesallow'] = 'Permitir servicios';
$string['issuersservicesnotallow'] = 'No permitir servicios';
$string['issuerusedforinternal'] = 'Servicios internos';
$string['issuerusedforlogin'] = 'Inicio de sesión';
$string['issuerusein'] = 'Se utilizará este servicio';
$string['issuerusein_help'] = 'Los servicios OAuth 2 pueden utilizarse para servicios internos, en la página de inicio de sesión o para ambos si es necesario.';
$string['issueruseineverywhere'] = 'Página de inicio de sesión y servicios internos';
$string['issueruseininternalonly'] = 'Sólo servicios internos.';
$string['issueruseinloginonly'] = 'Sólo página de inicio de sesión';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = 'Mostrar en página de inicio de sesión como';
$string['loginissuer'] = 'Permitir inicio de sesión';
$string['microsoft_service'] = 'Microsoft';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = 'Sin configurar';
$string['notdiscovered'] = 'Service discovery not successful';
$string['notloginissuer'] = 'No permitir inicio de sesión';
$string['pluginname'] = 'Servicios OAuth 2';
$string['privacy:metadata'] = 'El complemento de servicios de OAuth 2 no almacena ningún dato personal.';
$string['savechanges'] = 'Guardar cambios.';
$string['serviceshelp'] = 'Instrucciones de configuración del proveedor de servicios.';
$string['systemaccountconnected'] = 'Cuenta de sistema conectada';
$string['systemaccountconnected_help'] = 'Las cuentas del sistema se utilizan para proporcionar funciones avanzadas para complementos. No son necesarios solo para la funcionalidad de inicio de sesión, pero otros complementos que utilizan el servicio OAuth pueden ofrecer un conjunto reducido de funciones si la cuenta del sistema no se ha conectado. Por ejemplo, los repositorios no pueden admitir "enlaces controlados" sin una cuenta del sistema para realizar operaciones con archivos.';
$string['systemaccountnotconnected'] = 'Cuenta de sistema no conectada';
$string['systemauthstatus'] = 'Cuenta de sistema conectada';
$string['usebasicauth'] = 'Autenticar solicitudes de token a través de encabezados HTTP';
$string['usebasicauth_help'] = 'Utilice el esquema de autenticación HTTP Basic al enviar el ID de cliente y la contraseña con una solicitud de token de actualización. Recomendado por el estándar OAuth 2, pero es posible que no esté disponible con algunos emisores.';
$string['userfieldexternalfield'] = 'Nombre de campo externo';
$string['userfieldexternalfield_error'] = 'El campo no puede contener HTML.';
$string['userfieldexternalfield_help'] = 'Nombre del campo proporcionado por el sistema OAuth externo.';
$string['userfieldinternalfield'] = 'Nombre de campo interno';
$string['userfieldinternalfield_help'] = 'Nombre del campo de usuario de Moodle que debe mapearse desde el campo externo.';
$string['userfieldmappingdeleted'] = 'Se eliminó la asignación de campos de usuario';
$string['userfieldmappingsforissuer'] = 'Asignación de campos de usuario para el emisor: {$a}';
