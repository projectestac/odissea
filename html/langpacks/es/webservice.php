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
 * Strings for component 'webservice', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   webservice
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Excepción al control de acceso';
$string['actwebserviceshhdr'] = 'Protocolos activos de servicio web';
$string['addaservice'] = 'Agregar servicio';
$string['addcapabilitytousers'] = 'Comprobar permisos de los usuarios';
$string['addcapabilitytousersdescription'] = 'Los usuarios deben tener dos capacidades (permisos) - webservice:createtoken y una capacidad que concuerde con los protocolos utilizados, por ejemplo webservice/rest:use, webservice/soap:use. Para lograr esto, cree un rol de servicios web con las capacidades apropiadas habilitadas y asígnelo a usuario de servicios web como un rol del sistema.';
$string['addfunction'] = 'Agregar función';
$string['addfunctionhelp'] = 'Seleccione la función a agregar al servicio.';
$string['addfunctions'] = 'Agregar funciones';
$string['addfunctionsdescription'] = 'Seleccione las funciones requeridas para el servicio de nueva creación.';
$string['addrequiredcapability'] = 'Asignar/Desasignar los privilegios requeridos';
$string['addservice'] = 'Agregar un nuevo servicio: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Agregar funciones al servicio "{$a}"';
$string['allusers'] = 'Todos los usuarios';
$string['apiexplorer'] = 'Explorador API';
$string['apiexplorernotavalaible'] = 'Explorador API aún no disponible';
$string['arguments'] = 'Argumentos';
$string['authmethod'] = 'Método de identificación';
$string['callablefromajax'] = 'Llamable desde AJAX';
$string['cannotcreatetoken'] = 'Sin permiso para crear el token del web service para el servicio {$a}.';
$string['cannotgetcoursecontents'] = 'No se pueden obtener los contenidos del curso';
$string['checkusercapability'] = 'Comprobar privilegios del usuario';
$string['checkusercapabilitydescription'] = 'El usuario debe tener las capacidades (privilegios) apropiadas de acuerdo al protocolo empleado, por ejemplo webservice/rest:use, webservice/soap:use. Para lograr esto, cree un rol de servicios web con las capacidades del protocolo habilitadas y asígnelo a usuario de servicios web como un rol del sistema.';
$string['configwebserviceplugins'] = 'Por razones de seguridad, solo se habilitarán los protocolos que vayan a ser utilizados.';
$string['context'] = 'Contexto';
$string['createservicedescription'] = 'Un servicio es un conjunto de funciones de \'servicios web\'. Permitirá acceder al usuario a un nuevo servicio. En la página "Añadir servicio" marque las opciones  \'Habilitado\' y \'Usuario autorizado\'. Seleccione \'No se requiere permiso\'.';
$string['createserviceforusersdescription'] = 'Un servicio es un conjunto de funciones de \'servicios web\'. Permitirá acceder al usuario a un nuevo servicio. En la página "Añadir servicio" marque la opción  \'Habilitado\' y desmarque \'Usuario autorizado\'. Seleccione \'No se requiere permiso\'.';
$string['createtoken'] = 'Crear ficha';
$string['createtokenforuser'] = 'Crear ficha para un usuario';
$string['createtokenforuserdescription'] = 'Crear ficha para usuario de servicios web.';
$string['createuser'] = 'Crear un usuario específico';
$string['createuserdescription'] = 'Se necesita un usuario de servicios web  para representar el sistema que controla Moodle.';
$string['criteriaerror'] = 'Faltan permisos para buscar sobre un criterio.';
$string['default'] = 'Valor por defecto para "{$a}"';
$string['deleteaservice'] = 'Eliminar servicio';
$string['deleteservice'] = 'Eliminar el servicio: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Eliminar un servicio también eliminará las fichas (tokens) relacionadas con este servicio. ¿Realmente desea eliminar el servicio externo "{$a}"?';
$string['deletetokenconfirm'] = '¿Realmente desea eliminar esta ficha (token) para servicio web para <strong>{$a->user}</strong> en el servicio <strong>{$a->service}</strong>?';
$string['disabledwarning'] = 'Todos los protocolos de servicios web están desactivados. El parámetro "Activar servicios Web"  se puede encontrar en "Características avanzadas".';
$string['doc'] = 'Documentación';
$string['docaccessrefused'] = 'Usted no está autorizado para ver la documentación de esta ficha';
$string['documentation'] = 'Documentación de Servicios Web';
$string['downloadfiles'] = 'Puede descargar archivos';
$string['downloadfiles_help'] = 'Si se habilita, cualquier usuario puede descargar archivos con su clave de seguridad. Por supuesto que están restringidos a los archivos que se les permite descargar en el sitio.';
$string['editaservice'] = 'Editar servicio';
$string['editservice'] = 'Editar el servicio: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Habilitado';
$string['enabledocumentation'] = 'Habilitar documentación del desarrollador';
$string['enabledocumentationdescription'] = 'Está disponible para los protocolos habilitados una documentación detallada sobre los servicios de la web.';
$string['enableprotocols'] = 'Habilitar los protocolos';
$string['enableprotocolsdescription'] = 'Al menos un protocolo debe estar habilitado. Por razones de seguridad, los protocolos que se van a utilizar deben estar habilitados.';
$string['enablews'] = 'Habilitar Servicios Web';
$string['enablewsdescription'] = 'Los servicios Web deben estar habilitados en las características avanzadas.';
$string['entertoken'] = 'Escriba una clave/ficha de seguridad:';
$string['error'] = 'Error: {$a}';
$string['errorcatcontextnotvalid'] = 'Usted no puede ejecutar funciones en el contexto de la categoría (category id:{$a->catid}). El mensaje de contexto del error fue: {$a->message}';
$string['errorcodes'] = 'Mensaje de error';
$string['errorcoursecontextnotvalid'] = 'No puede ejecutar funciones en el contexto de curso (course id:{$a->courseid}). El mensaje de error del contexto fue: {$a->message}';
$string['errorinvalidparam'] = 'El parámetro "{$a}" no es válido.';
$string['errornotemptydefaultparamarray'] = 'El parámetro de descripción de servicio web llamado \'{$a}\' es una estructura sencilla o múltiple. Por defecto solamente puede ser un arreglo vacío. Revise la descripción del servicio web.';
$string['erroroptionalparamarray'] = 'La descripción del parámetro de servicio web llamado \'{$a}\' es una estructura sencilla o múltiple. No puede configurarse como VALUE_OPTIONAL. Revise la descripción de los servicios web';
$string['eventwebservicefunctioncalled'] = 'Llamada a la función del "web service"';
$string['eventwebserviceloginfailed'] = 'El acceso al "web service" ha fallado';
$string['eventwebserviceservicecreated'] = 'El servicio del "web service" ha sido creado';
$string['eventwebserviceservicedeleted'] = 'El servicio del "web service" ha sido borrado';
$string['eventwebserviceserviceupdated'] = 'El servicio del "web service" ha sido actualizado';
$string['eventwebserviceserviceuseradded'] = 'El servicio de usuario del "web service" ha sido añadido';
$string['eventwebserviceserviceuserremoved'] = 'servicio de usuario del "web service" ha sido borrado';
$string['eventwebservicetokencreated'] = 'El token del "web service" ha sido creado';
$string['eventwebservicetokensent'] = 'El token del "web service" ha sido enviado';
$string['execute'] = 'Ejecutar';
$string['executewarnign'] = 'ADVERTENCIA: Si pulsa "ejecutar" su base de datos será modificada. Los cambios no se puede revertir automáticamente';
$string['externalservice'] = 'Servicio externo';
$string['externalservicefunctions'] = 'Funciones del servicio externo';
$string['externalservices'] = 'Servicios externos';
$string['externalserviceusers'] = 'Usuario del servicio externo';
$string['failedtolog'] = 'Error al iniciar sesión';
$string['filenameexist'] = 'El nombre de archivo ya existe: {$a}';
$string['forbiddenwsuser'] = 'No puede crearse la ficha (token) para un usuario sin-confirmar, borrado, suspendido o invitado.';
$string['function'] = 'Función';
$string['functions'] = 'Funciones';
$string['generalstructure'] = 'Estructura general';
$string['information'] = 'Información';
$string['installexistingserviceshortnameerror'] = 'Un servicio web con el nombre corto "{$a}" ya existe. No es posible instalar/actualizar un servicio web diferente con este nombre corto.';
$string['installserviceshortnameerror'] = 'Error de programación: el nombre corto de servicio "{$a}" únicamente puede contener números, letras y los caracteres _-.';
$string['invalidextparam'] = 'Parámetro api externo inválido: {$a}';
$string['invalidextresponse'] = 'Respuesta api externa inválida: {$a}';
$string['invalidiptoken'] = 'Ficha no válida - su IP no es admitida';
$string['invalidtimedtoken'] = 'Ficha (token) no válida - ficha caduca';
$string['invalidtoken'] = 'Ficha (token) no válida - ficha no encontrada';
$string['iprestriction'] = 'Restricción de IP';
$string['iprestriction_help'] = 'El usuario podrá hacer uso de los Servicios Web si se conecta desde las direcciones IP listadas a continuación (separadas por comas).';
$string['key'] = 'Clave';
$string['keyshelp'] = 'Las claves son empleadas para acceder a su cuenta Moodle desde aplicaciones externas.';
$string['loginrequired'] = 'Restringido a usuarios logeados';
$string['manageprotocols'] = 'Administrar protocolos';
$string['managetokens'] = 'Administrar tokens';
$string['missingcaps'] = 'Permisos faltantes';
$string['missingcaps_help'] = 'Lista de permisos requeridas para el servicio que no posee el usuario seleccionado. Los permisos faltantes deben añadirse al rol del usuario para poder emplear este servicio.';
$string['missingpassword'] = 'Falta la contraseña';
$string['missingrequiredcapability'] = 'El permiso {$a} es requisito.';
$string['missingusername'] = 'Falta nombre de usuario';
$string['missingversionfile'] = 'Error de programación: falta el archivo version.php para el componente {$a}';
$string['nameexists'] = 'Este nombre ya está en uso por otro servicio';
$string['nocapabilitytouseparameter'] = 'El usuario no tiene la capacidad necesaria para utilizar el parámetro {$a}';
$string['nofunctions'] = 'Este servicio no tiene funciones.';
$string['norequiredcapability'] = 'No se requiere permiso';
$string['notoken'] = 'La lista de fichas (token) está vacía.';
$string['onesystemcontrolling'] = 'Permitir un sistema externo para controlar Moodle';
$string['onesystemcontrollingdescription'] = 'Los pasos siguientes le ayudarán a crear un servicio web para que un sistema externo interactue con Moodle. Incluye la configuración del método de identificación por testigo (clave de seguridad).';
$string['onlyseecreatedtokens'] = 'Cualquier ficha (token) puede ser eliminado, aunque solamente puede ver tokens que haya creado.';
$string['operation'] = 'Operación';
$string['optional'] = 'Opcional';
$string['passwordisexpired'] = 'La contraseña ha expirado';
$string['phpparam'] = 'XML-RPC (estructura PHP)';
$string['phpresponse'] = 'XML-RPC (estructura PHP)';
$string['postrestparam'] = 'Código PHP para REST (POST request)';
$string['potusers'] = 'No hay usuarios autorizados';
$string['potusersmatching'] = 'No hay usuarios autorizados que coincidan';
$string['print'] = 'Imprimir todo';
$string['privacy:metadata:serviceusers'] = 'Una lista de usuarios que pueden usar un determinado servicio externo';
$string['privacy:metadata:serviceusers:iprestriction'] = 'IP restringidas para utilizar el servicio';
$string['privacy:metadata:serviceusers:timecreated'] = 'La fecha en la cual fue creado el registro';
$string['privacy:metadata:serviceusers:userid'] = 'El ID del usuario';
$string['privacy:metadata:serviceusers:validuntil'] = 'La fecha hasta la que es válida la autorización';
$string['privacy:metadata:tokens'] = 'Un registro de fichas (tokens) para interactuar con Moodle mediante servicios web o aplicaciones móviles.';
$string['privacy:metadata:tokens:creatorid'] = 'El ID del usuario que creó el la ficha (token)';
$string['privacy:metadata:tokens:iprestriction'] = 'IP restringidas para usar esta ficha (token)';
$string['privacy:metadata:tokens:lastaccess'] = 'La fecha en la cual la ficha (token) fue usada por última vez';
$string['privacy:metadata:tokens:privatetoken'] = 'Una ficha (token) más privada usada ocasionalmente para validar ciertas operaciones, como SSO (Single Sign-On = Ingeso único)';
$string['privacy:metadata:tokens:timecreated'] = 'La fecha en la cual fue creada la ficha (token)';
$string['privacy:metadata:tokens:token'] = 'La ficha (token) del usuario';
$string['privacy:metadata:tokens:tokentype'] = 'El tipo de ficha (token)';
$string['privacy:metadata:tokens:userid'] = 'El ID del usuario de quien es la ficha (token)';
$string['privacy:metadata:tokens:validuntil'] = 'La fecha hasta la que es válida la ficha (token)';
$string['privacy:request:notexportedsecurity'] = 'No exportado por razones de seguridad';
$string['protocol'] = 'Protocolo';
$string['removefunction'] = 'Eliminar';
$string['removefunctionconfirm'] = '¿Realmente quiere remover la función "{$a->function}" del servicio "{$a->service}"?';
$string['requireauthentication'] = 'Este método requiere identificación con permiso xxx.';
$string['required'] = 'Requerido';
$string['requiredcapability'] = 'Permiso necesario';
$string['requiredcapability_help'] = 'Si se activa la opción, sólo los usuarios con los permisos requeridos pueden acceder al servicio.';
$string['requiredcaps'] = 'Permisos requeridos';
$string['resettokenconfirm'] = '¿Realmente desea reiniciar esta clave de servicio para <strong>{$a->user}</strong> en el servicio <strong>{$a->service}</strong>?';
$string['resettokenconfirmsimple'] = '¿Confirma que desea restaurar esta clave? Cualquier enlace guardado que contenga la clave anterior no volverá a funcionar.';
$string['response'] = 'Respuesta';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'La cuenta restaurada necesita resetear (reiniciar) la contraseña antes de obtener una ficha (token).';
$string['restparam'] = 'REST (parámetros POST)';
$string['restrictedusers'] = 'Únicamente usuarios autorizados';
$string['restrictedusers_help'] = 'Esta configuración determina si todos los usuarios con permiso para crear una ficha (token) de servicios web pueden generar esa ficha (token) mediante sus páginas de claves de seguridad o solamente los usuarios autorizados podrán hacerlo.';
$string['securitykey'] = 'Clave de seguridad (ficha)';
$string['securitykeys'] = 'Claves de seguridad';
$string['selectauthorisedusers'] = 'Seleccione los usuarios autorizados';
$string['selectedcapability'] = 'Seleccionado';
$string['selectedcapabilitydoesntexit'] = 'El actual ajuste del permiso requeriod ({$a}) ya no existe. Por favor, cambielo y guarde los cambios.';
$string['selectservice'] = 'Seleccione un servicio';
$string['selectspecificuser'] = 'Seleccione un usuario específico';
$string['selectspecificuserdescription'] = 'Agregue el usuario de servicios web como un usuario autorizado.';
$string['service'] = 'Servicio';
$string['servicehelpexplanation'] = 'Un servicio es un conjunto de funciones. A dicho servicio pueden acceder todos los usuarios o sólo algunos especificados.';
$string['servicename'] = 'Nombre del servicio';
$string['servicenotavailable'] = 'El servicio Web no está disponible (no existe o puede estar deshabilitado)';
$string['servicerequireslogin'] = 'El servicio web no está disponible. (Se ha salido de la sesión o ha expirado).';
$string['servicesbuiltin'] = 'Servicios incluidos';
$string['servicescustom'] = 'Servicios personalizados';
$string['serviceusers'] = 'Usuarios autorizados';
$string['serviceusersettings'] = 'Ajustes de usuario';
$string['serviceusersmatching'] = 'Usuarios autorizados concordantes';
$string['serviceuserssettings'] = 'Cambiar ajustes para usuarios autorizados';
$string['shortnametaken'] = 'Nombre corto ya usado por otro servicio ({$a})';
$string['simpleauthlog'] = 'Acceso por identificación simple';
$string['step'] = 'Pasos';
$string['supplyinfo'] = 'Más detalles';
$string['testauserwithtestclientdescription'] = 'Simular el acceso externo al servicio empleando el servicio web de prueba del cliente. Antes de hacerlo, acceda como usuario con el permiso moodle/webservice:createtoken y obtenga la clave de seguridad (token) vía las configuraciones de Mi perfil. Usted empleará esta ficha (token) en el cliente de prueba. En el cliente de prueba, también seleccione un protocolo habilitado con autenticación por ficha (token). <strong>ADVERTENCIA: ¡Las funciones que usted pruebe SERÁN EJECUTADAS para este usuario, por lo que debe ser cauteloso con lo que decida probar!</strong>';
$string['testclient'] = 'Cliente de prueba de servicio web';
$string['testclientdescription'] = '* El cliente de prueba de servicios web <strong>ejecuta</strong> las funciones <strong>REALMENTE</strong>. No pruebe funciones que no conozca. <br />* Aún no se han implementado todas las funciones de servicios web en el cliente de prueba <br />* Para revisar que un usuario no puede acccesar algunas funciones, Usted puede probar algunas funciones que Usted no permitió.<br />* Para ver mensajes de error más claros, configure debugging a <strong>{$a->mode}</strong> dentro de {$a->atag}<br />* Accese el {$a->amfatag}.';
$string['testwithtestclient'] = 'Comprobar el servicio';
$string['testwithtestclientdescription'] = 'Simula el acceso externo al servicio usando el cliente de prueba de servicio web. Use un protocolo permitido con autenticación por ficha (token). <strong>ADVERTENCIA: ¡Las funciones que usted pruebe SERÁN EJECUTADAS para este usuario, por lo que debe ser cauteloso con lo que decida probar!</strong>';
$string['token'] = 'Ficha';
$string['tokenauthlog'] = 'Identificacón mediante ficha';
$string['tokencreatedbyadmin'] = 'Únicamente puede ser restablecido por el administrador (*)';
$string['tokencreator'] = 'Creador';
$string['unknownoptionkey'] = 'Clave de opción desconocida ({$a})';
$string['unnamedstringparam'] = 'Un parámetro de tipo cadena está sin nombre.';
$string['updateusersettings'] = 'Actualizar';
$string['uploadfiles'] = 'Puede subir ficheros';
$string['uploadfiles_help'] = 'Si se activa, cualquier usuario puede subir archivos con sus claves de seguridad a su propia zona de archivos privados o a la zona de borradores. Las cuotas de archivos se aplican a los usuarios.';
$string['userasclients'] = 'Usuarios como clientes con ficha';
$string['userasclientsdescription'] = 'Los siguientes pasos pueden ayudarle a configurar el servicio web Moodle para usuarios como clientes. Estos pasos también le ayudarán a configurar el método de autenticación basado en la ficha (token) recomendada (claves de seguridad) . En este caso, el usuario generará su ficha (token) a partir de la página de claves de seguridad via la configuración de Mi perfil.';
$string['usermissingcaps'] = 'Permisos ausentes: {$a}';
$string['usernameorid'] = 'Nombre de usuario / ID de Usuario';
$string['usernameorid_help'] = 'Introduzca el nombre de usuario o la ID de usuario.';
$string['usernameoridnousererror'] = 'No se encontraron usuarios con este nombre de usuario / ID de usuario';
$string['usernameoridoccurenceerror'] = 'Se encontró a más de un usuario con este nombre de usuario. Por favor introduzca la ID del usuario';
$string['usernotallowed'] = 'El usuario no tiene permitido este servicio. Primeramente debe permitirselo a este usuario en las  {$a}\'s permitidas de la página de administración de usuarios.';
$string['userservices'] = 'Servicios de usuario: {$a}';
$string['usersettingssaved'] = 'Configuración de usuario guardada';
$string['validuntil'] = 'Válido hasta';
$string['validuntil_help'] = 'Si se activa la opción, el servicio se desactivará para este usuario después de esta fecha.';
$string['webservice'] = 'Servicio Web';
$string['webservices'] = 'Servicios Web';
$string['webservicesoverview'] = 'Vista general';
$string['webservicetokens'] = 'Fichas de servicios Web';
$string['wrongusernamepassword'] = 'Nombre de usuario o contraseña erróneos';
$string['wsaccessuserdeleted'] = 'Se rechazó el acceso a servicio web para el nombre de usuario eliminado: {$a}';
$string['wsaccessuserexpired'] = 'Se rechazó el acceso a servicio web para el nombre de usuario con contraseña caduca: {$a}';
$string['wsaccessusernologin'] = 'Se rechazó el acceso a servicio web para el nombre de usuario con autenticación sin identificación: {$a}';
$string['wsaccessusersuspended'] = 'Se rechazó el acceso a servicio web para el nombre de usuario suspendido: {$a}';
$string['wsaccessuserunconfirmed'] = 'Se rechazó el acceso a servicio web para el nombre de usuario no-confirmado: {$a}';
$string['wsclientdoc'] = 'Documentación de los Servicios Web de Moodle';
$string['wsdocapi'] = 'Documentación de API';
$string['wsdocumentation'] = 'Documentación del servicio web';
$string['wsdocumentationdisable'] = 'La documentación de los Servicios Web está desactivada';
$string['wsdocumentationintro'] = 'Para crear un cliente le aconsejamos que lea el {$a->doclink}';
$string['wsdocumentationlogin'] = 'o escriba su nombre de usuario y la contraseña de servicios web:';
$string['wspassword'] = 'Contraseña del Servicio Web';
$string['wsusername'] = 'Nombre de usuario del Servicio Web';
