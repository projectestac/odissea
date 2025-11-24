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
 * Strings for component 'tool_mfa', language 'es', version '4.5'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Peso alcanzado';
$string['added'] = 'Añadido';
$string['alltime'] = 'Todo el tiempo';
$string['areyousure'] = '¿Seguro que quiere eliminar este factor?';
$string['cancellogin'] = 'Cancelar autenticación';
$string['combination'] = 'Combinación';
$string['confirmationreplace'] = 'Se le requerirá configurar un nuevo"{$a}". Por favor, asegúrese de estar listo/a para completar el proceso de configuración.';
$string['confirmationrevoke'] = 'Usted ya no podrá usar "{$a}" para autenticarse en este sitio.';
$string['connector'] = 'Y';
$string['created'] = 'Creada';
$string['createdfromip'] = 'Creada desde la IP';
$string['debugmode:heading'] = 'Modo depuración';
$string['devicename'] = 'Dispositivo';
$string['editfactor'] = 'Editar ajustes para el factor {$a}';
$string['email:subject'] = 'No es posible iniciar sesión en {$a}';
$string['enablefactor'] = 'Habilitar factor';
$string['entercode'] = 'Introducir código';
$string['error:actionnotfound'] = 'Acción \'{$a}\' no soportada';
$string['error:couldnotreplace'] = 'No se pudo sustituir este factor.';
$string['error:directaccess'] = 'Esta página no debería ser accedida directamente';
$string['error:factornotenabled'] = 'La autenticación con múltiples factores (MFA) \'{$a}\' no está habilitada';
$string['error:factornotfound'] = 'No se encuentra la autenticación con múltiples factores (MFA) \'{$a}\'';
$string['error:isguestuser'] = 'No se permiten invitados aquí.';
$string['error:notenoughfactors'] = 'No es posible autenticar';
$string['error:reauth'] = 'No pudimos confirmar su identidad suficientemente para cumplir la política de autenticación de este sitio. <br>Esto puede ser porque: <br> 1) Los factores estén bloqueados - por favor, espere unos minutos y vuelva a intentarlo.
     <br> 2) Los factores hayan fallado - por favor, haga doble click en los detalles de cada paso. <br> 3) Se omitieron factores - por favor, recargue esta página o intente autenticarse de nuevo.';
$string['error:revoke'] = 'No se puede eliminar el factor';
$string['error:setupfactor'] = 'No se puede configurar el factor';
$string['error:support'] = 'Si aún no puede iniciar sesión o cree que está ante un error, por favor envíe un correo electrónico a:';
$string['error:wrongfactorid'] = 'El id de factor \'{$a}\' no es correcto';
$string['event:failfactor'] = 'La autenticación con múltiples factores (MFA) falló por un factor equivocado.';
$string['event:faillockout'] = 'Falló la autenticación con múltiples factores (MFA) por demasiados intentos.';
$string['event:failnotenoughfactors'] = 'Falló la autenticación con múltiples factores (MFA) por no haber satisfecho suficientes factores.';
$string['event:userdeletedfactor'] = 'Factor Eliminado';
$string['event:userfailedmfa'] = 'autenticación con múltiples factores (MFA) de usuario fallida';
$string['event:userpassedmfa'] = 'Verificación exitosa';
$string['event:userrevokedfactor'] = 'Revocación del factor';
$string['event:usersetupfactor'] = 'Configuración del factor';
$string['factor'] = 'Factor';
$string['factorreplace'] = 'Factor "{$a}" sustituido con éxito';
$string['factorreport'] = 'Informe de todos los factores';
$string['factorreset'] = 'Su autenticación con múltiples factores "{$a->factor}" ha sido reseteada por un administrador del sitio. Puede que usted necesite configurar este factor de nuevo. {$a->url}';
$string['factorresetall'] = 'Todos sus factores MFA han sido reseteados por un administrador de sitio. Puede que usted necesite configurar estos factores de nuevo. {$a}';
$string['factorrevoked'] = '"$a" eliminado con éxito.';
$string['factorsetup'] = '"{$a}" configurado con éxito.';
$string['fallback'] = 'Factor alternativo';
$string['fallback_info'] = 'Este factor es una alternativa, en caso de no configurarse otros factores. Este factor siempre fallará.';
$string['guidance'] = 'Guía de usuario de autenticación con múltiples factores (MFA)';
$string['inputrequired'] = 'Entrada de usuario';
$string['ipatcreation'] = 'Dirección IP del momento de creación del factor';
$string['lastused'] = 'Último uso';
$string['lastverified'] = 'Último verificado';
$string['locked'] = '{$a} (No disponible)';
$string['lockedusersforallfactors'] = 'Usuarios bloqueados: Todos bloqueados';
$string['lockedusersforfactor'] = 'Usuarios bloqueados: {$a}';
$string['lockoutnotification'] = 'Le quedan aún {$a} intentos.';
$string['managefactor'] = 'Gestionar factor';
$string['mfa'] = 'autenticación con múltiples factores (MFA)';
$string['mfa:intro'] = 'Haga su cuenta más segura requiriendo un factor de verificación adicional cuando se autentique.';
$string['mfa:mfaaccess'] = 'Interactuar con MFA';
$string['mfareports'] = 'Informes MFA';
$string['mfasettings'] = 'Gestionar autenticación con múltiples factores (MFA)';
$string['na'] = 'n/d';
$string['needhelp'] = '¿Necesita ayuda?';
$string['nologinusers'] = 'No se ha autenticado';
$string['nonauthusers'] = 'MFA pendiente';
$string['overall'] = 'En general';
$string['pending'] = 'Pendiente';
$string['performbulk'] = 'Acción masiva';
$string['pluginname'] = 'Autenticación multifactor';
$string['preferences:activefactors'] = 'Factores activos';
$string['preferences:availablefactors'] = 'Factores disponibles';
$string['preferences:header'] = 'Preferencias de multifactor de autenticación';
$string['preferenceslink'] = 'Haga click aquí para ir a las preferencias de usuario.';
$string['privacy:metadata:tool_mfa'] = 'Datos con configuración de factores MFA';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'IP desde donde se configuró el factor.';
$string['privacy:metadata:tool_mfa:factor'] = 'Tipo de factor';
$string['privacy:metadata:tool_mfa:id'] = 'ID de registro';
$string['privacy:metadata:tool_mfa:label'] = 'Etiqueta para la instancia del factor, ej: dispositivo o correo.';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Hora en que el usuario fue verificado con este factor';
$string['privacy:metadata:tool_mfa:secret'] = 'Cualquier dato secreto para el factor';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Hora en que  se configuró el factor.';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Hora en que el factor fue modificado';
$string['privacy:metadata:tool_mfa:userid'] = 'ID del usuario al que pertenece ese factor';
$string['privacy:metadata:tool_mfa_auth'] = 'La base de datos almacena la última vez que se registró una autenticación con múltiples factores (MFA) para un id de usuario.';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'El momento en que se autenticó por última vez con';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'El usuario al que está asociada esta marca temporal.';
$string['privacy:metadata:tool_mfa_secrets'] = 'Secretos temporales para la autenticación del usuario.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'El factor asociado a este secreto.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'El código de seguridad del secreto.';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'El id de sesión asociado a este secreto.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'El usuario asociado a este secreto.';
$string['redirecterrordetected'] = 'Se detectó una redirección no soportada, la ejecución del script terminó. El error de redirección fue entre MFA y {$a}.';
$string['remove'] = 'Eliminar';
$string['replace'] = 'Sustituir';
$string['replacefactor'] = 'Sustituir factor';
$string['resetconfirm'] = 'Resetear factor de usuario';
$string['resetfactor'] = 'Resetear factores de autenticación de usuario';
$string['resetfactorconfirm'] = '¿Seguro que quiere resetear este factor para {$a}?';
$string['resetfactorplaceholder'] = 'Nombre de usuario o correo electrónico';
$string['resetsuccess'] = 'Factor "{$a->factor}" reseteado satisfactoriamente para el usuario "{$a->username}".';
$string['resetsuccessbulk'] = 'Factor "{$a}" reseteado satisfactoriamente para los usuarios dados.';
$string['resetuser'] = 'Usuario:';
$string['revoke'] = 'Revocar';
$string['revokefactor'] = 'Eliminar factor';
$string['selectfactor'] = 'Seleccionar factor a resetear:';
$string['selectperiod'] = 'Seleccionar un periodo de tiempo para el informe:';
$string['settings:combinations'] = 'Resumen de condiciones buenas para el inicio de sesión';
$string['settings:debugmode'] = 'Habilitar modo depuración';
$string['settings:debugmode_help'] = 'El modo depuración mostrará un pequeño aviso con información de los factores habilitados actualmente, tanto en las páginas de administración de MFA como en la página de preferencias del usuario.';
$string['settings:duration'] = 'Duración del secreto de validación';
$string['settings:duration_help'] = 'El periodo durante el cual son válidos los secretos generados.';
$string['settings:enabled'] = 'Plugin MFA habilitado';
$string['settings:enablefactor'] = 'Habilitar factor';
$string['settings:enablefactor_help'] = 'Habilite esta opción para permitir que el factor se utilice en la autenticación MFA';
$string['settings:general'] = 'Configuración general de MFA';
$string['settings:guidancecheck'] = 'Página de guía de usuario';
$string['settings:guidancecheck_help'] = 'Añadir un enlace a la página de guía de usuario en las páginas de autenticación MFA, y en la página de preferencias de MFA.';
$string['settings:guidancefiles'] = 'Archvios de página de guía';
$string['settings:guidancefiles_help'] = 'Añadir cualesquiera archivos aquí para usar en la página de guía, y embeberlos en la página usando {{filename}} (ruta) o {{{filename}}} (enlace html)';
$string['settings:guidancepage'] = 'Contenido de página de guía';
$string['settings:guidancepage_help'] = 'El HTML que haya aquí se verá en la página de guía. Introduzca nombres de archivos desde el área de archivos para embeber el archivo con la ruta {{filename}} o mediante enlace html usando {{{filename}}}.';
$string['settings:lockout'] = 'Umbral de bloqueo';
$string['settings:lockout_help'] = 'Cantidad de intentos que un usuario tiene para responder un factor antes de que se le prohíba el acceso.';
$string['settings:redir_exclusions'] = 'URLs que no debería redireccionar a la autenticación con múltiples factores (MFA).';
$string['settings:redir_exclusions_help'] = 'Cada línea nueva es una URL relativa desde la raíz del sitio desde donde no se redireccionará hacia la comprobación MFA';
$string['settings:weight'] = 'Peso del factor';
$string['settings:weight_help'] = 'El peso de este factor si es superado. Un usuario necesita al menos 100 puntos para realizar el inicio de sesión.';
$string['setup'] = 'Configuración';
$string['setupfactor'] = 'Configuración de factor';
$string['setupfactorbuttonadditional'] = 'Añadir factor adicional';
$string['setuprequired'] = 'Configuración de usuario';
$string['state:fail'] = 'Fallido';
$string['state:locked'] = 'Bloqueado';
$string['state:neutral'] = 'Neutral';
$string['state:pass'] = 'Superado';
$string['state:unknown'] = 'Desconocido';
$string['subplugintype_factor'] = 'Tipo de factor';
$string['subplugintype_factor_plural'] = 'Tipos de factor';
$string['totalusers'] = 'Total de usuarios';
$string['totalweight'] = 'Peso total';
$string['userempty'] = 'El usuario no puede estar en blanco.';
$string['userlogs'] = 'Registros de usuario';
$string['usernotfound'] = 'Imposible localizar al usuario.';
$string['usersauthedinperiod'] = 'Autenticado';
$string['verification'] = 'Verificación en 2 pasos';
$string['verification_desc'] = 'Para mantener segura su cuenta, necesitamos confirmar que realmente es usted.';
$string['verificationcode'] = 'Código de verificación';
$string['verificationcode_help'] = 'El código de verificación entregado por el factor de autenticación actual.';
$string['verifyalt'] = 'Intente otro método de verificación:';
$string['weight'] = 'Peso';
$string['yesremove'] = 'Sí, eliminar';
$string['yesreplace'] = 'Sí, sustituir';
