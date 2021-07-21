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
 * Strings for component 'adobeconnect', language 'es', version '3.11'.
 *
 * @package     adobeconnect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addparticipant'] = 'Añadir';
$string['addpresenter'] = 'Añadir';
$string['admin_httpauth'] = 'Cabecera de autenticación HTTP';
$string['admin_httpauth_desc'] = 'El valor de  HTTP_AUTH_HEADER usado en su custom.ini';
$string['admin_login'] = 'Admin Login';
$string['admin_login_desc'] = 'Login para la cuenta de administrador principal';
$string['admin_password'] = 'Contraseña de administración';
$string['admin_password_desc'] = 'Contraseña para la cuenta del administrador principal';
$string['adminemptyxml'] = 'Imposible conectarse al servidor de Adobe Connect Pro. Haga clic en continuar para proceder a la página de configuración de la actividad y probar la conexión.';
$string['adminnotsetupproperty'] = 'El módulo de actividad no está configurado correctamente. Haga clic en continuar para pasar a la página de configuración de actividad y probar la conexión.';
$string['adobeconnect'] = 'Adobe Connect';
$string['adobeconnect:meetinghost'] = 'Anfitrión de la reunión';
$string['adobeconnect:meetingparticipant'] = 'Participante de la reunión';
$string['adobeconnect:meetingpresenter'] = 'Presentador de la reunión';
$string['adobeconnectfieldset'] = 'Configuración de Adobe Connect';
$string['adobeconnecthost'] = 'Adobe Connect Host';
$string['adobeconnecthostdescription'] = 'El anfitrión puede otorgar privilegios a otros usuarios, iniciar y detener una reunión además de lo que puede hacer un presentador.';
$string['adobeconnectintro'] = 'Intro';
$string['adobeconnectname'] = 'Titulo de la reunión';
$string['adobeconnectparticipant'] = 'Participante de Adobe Connect';
$string['adobeconnectparticipantdescription'] = 'Puede ver, pero no puede modificar ninguna de las configuraciones de la reunión';
$string['adobeconnectpresenter'] = 'Presentador de Adobe Connect';
$string['adobeconnectpresenterdescription'] = 'El presentador de una reunión puede presentar contenido, compartir una pantalla, enviar mensajes de texto, moderar preguntas, crear notas de texto, transmitir audio y video, y enviar contenido desde enlaces web';
$string['allusers'] = 'todos los usuarios';
$string['assignadoberole'] = 'Asignación de roles de Adobe';
$string['assignadoberoles'] = 'Asignar el rol  $a->role para $a->meetname ($a->groupname)';
$string['assignroles'] = 'Asignar roles';
$string['availablelist'] = 'Disponible';
$string['backtomeeting'] = 'Volver a la reunión $a';
$string['cancelchanges'] = 'Cancelar';
$string['connectiontesttitle'] = 'Ventana de prueba de conexión';
$string['conntestintro'] = '<p> Se han ejecutado una serie de pruebas para determinar si el servidor Adobe Connect Pro se ha configurado correctamente para que funcione esta integración y también para determinar si las credenciales de usuario proporcionadas en la configuración global de la actividad tienen los permisos correctos para realizar tareas necesarias requeridas por el módulo de actividad. Si alguna de las siguientes pruebas ha fallado, este módulo de actividad no funcionará correctamente. </p> <p> Para obtener más ayuda y documentación sobre cómo configurar su servidor Adobe Connect Pro, consulte la página de ayuda de MoodleDocs para este módulo de actividad <a href="{$a->url}"> Página de ayuda </a></p>';
$string['duplicatemeetingname'] = 'Se encontró un nombre de reunión duplicado en el servidor.';
$string['duplicateurl'] = 'Se encontró una URL de reunión duplicada en el servidor.';
$string['editingfor'] = 'Editando para: $a';
$string['email_login'] = 'Dirección de correo electrónico de inicio de sesión';
$string['email_login_desc'] = 'Marque esta opción solo si su inicio de sesión en el servidor Connect Pro está configurado para usar la dirección de correo electrónico. Tenga en cuenta que al alternar esta opción en activar/desactivar durante el uso regular de este módulo de actividad puede crear usuarios duplicados en el servidor Connect Pro.';
$string['emptyxml'] = 'No se puede conectar al servidor Adobe Connect Pro en este momento. Informe a su administrador de Moodle.';
$string['endtime'] = 'Hora de finalización';
$string['error1'] = 'Debe ser un administrador del sitio para acceder a esta página';
$string['error2'] = 'La propiedad \'{$a}\' esta vacía, por favor ingrese un valor y guarde la configuración.';
$string['errormeeting'] = 'Error al recuperar la grabación';
$string['errorrecording'] = 'Imposible encontrar la grabación de la sesión';
$string['event_assign_role'] = 'Usuario asignado a un rol de Connect Pro';
$string['event_join_meeting'] = 'Usuario unido a la reunión';
$string['event_unassign_role'] = 'Usuario sin asignar un rol de Connect Pro';
$string['event_view'] = 'Actividad vista';
$string['event_view_all'] = 'Vistas todas las instancias de la actividad';
$string['event_view_recording'] = 'El usuario vio una grabación';
$string['existingusers'] = 'Usuario/s $a ya existente/s';
$string['greaterstarttime'] = 'La hora de inicio no puede ser mayor a la hora de finalización';
$string['groupswitch'] = 'Filtrar por grupo';
$string['host'] = 'Servidor';
$string['host_desc'] = 'Dónde se envían las llamadas REST';
$string['https'] = 'Conexión HTTPS';
$string['https_desc'] = 'Conéctese al servidor Connect a través de HTTPS';
$string['invalidadobemeeturl'] = 'Entrada inválida para este campo. Haga clic en la ayuda para identificar las entradas válidas.';
$string['invalidurl'] = 'La URL necesita iniciar con una letra (a-z)';
$string['joinmeeting'] = 'Unirse a la reunión';
$string['longurl'] = 'La URL de la reunión es muy larga. Trate ingresando una mas corta';
$string['meethost_desc'] = 'Dominio donde está instalado el servidor Adobe';
$string['meetinfo'] = 'Más detalles de la reunión';
$string['meetinfotxt'] = 'Ver detalles del servidor de la reunión';
$string['meetingend'] = 'Hora de finalización de la reunión';
$string['meetinggroup'] = 'Grupo de reunión';
$string['meetinghost'] = 'Dominio de la reunión';
$string['meetinginfo'] = 'Información de la reunión';
$string['meetingintro'] = 'Resumen de la reunión';
$string['meetingname'] = 'Nombre de la reunión';
$string['meetingstart'] = 'Hora de inicio de la reunión';
$string['meetingtype'] = 'Tipo de reunión';
$string['meetingtype_help'] = '<p> Un tipo de reunión pública es aquella en la que cualquiera que tenga la URL de la reunión puede entrar en la sala. </p>
<p> Un tipo de reunión privada es aquella en la que solo pueden ingresar usuarios registrados y participantes. La página de inicio de sesión no permite
invitados para iniciar sesión. Con las reuniones privadas, la reunión en realidad no comienza hasta que el presentador de la reunión o el anfitrión se una a la reunión.</p>

<p>Si está creando una reunión privada, siempre es una buena práctica asignar al menos 1 anfitrión o presentador que esté presente en la reunión; porque los usuarios con el rol de participante no podrán unirse a la reunión a menos que un usuario con rol de anfitrión o presentador ya se han unido a la reunión.</p>

<p>
Si la reunión tiene soporte para grupos separados, al menos 1 usuario en cada grupo, debe estar presente en la reunión, debe tener el rol de anfitrión o presentador.
</p>';
$string['meettemplates'] = 'Modelos de reunión';
$string['meettemplates_help'] = '<p> Una plantilla de sala de reuniones crea una reunión con un diseño personalizado para la sala de reuniones. </p>';
$string['meeturl'] = 'URL de la reunión';
$string['meeturl_help'] = '<p> Puede personalizar la URL que se utiliza para conectarse a la reunión de Adobe Connect. El dominio de Adobe Server siempre será el mismo.
  Sin embargo, la última parte de la URL se puede personalizar.
</p>
<p> Por ejemplo, si el dominio del servidor Adobe Connect se encuentra en <b> http: //adobe.connect.server/ </b>
  al personalizar la URL a <b> mireunion </b>, la URL para conectarse a la reunión sería <b> http: //adobe.connect.server/mireunion </b>.
</p>
<p> Las entradas de URL válidas consisten en el nombre con
<ul>
<li>mireunion</li>
<li>/mireunion</li>
</ul>

Las entradas de URL no válidas consisten en más de una barra diagonal:
<ul>
<li>mireunion/mireunion</li>
<li>mireunion/mireunion/ </li>
<li>mireunion/mireunion//mireunion</li>
<li>mireunion/</li>
</ul>

</p>
<p> Una vez que se ha guardado la reunión, ya no podrá editar/actualizar este campo ya que el campo estará deshabilitado.
Si actualiza la configuración de actividad y si <b> Modo de grupos </b> está configurado como sin grupo, verá parte de la URL en el campo de texto.
De lo contrario, el campo de texto permanecerá en blanco ya que cada grupo de curso tendrá su propia URL de reunión.
</p>';
$string['missingexpectedgroups'] = 'No hay grupos disponibles.';
$string['modulename'] = 'Adobe Connect';
$string['modulenameplural'] = 'Adobe Connect';
$string['noinstances'] = 'No hay instancias de adobeconnect';
$string['nomeeting'] = 'No existen reuniones en el servidor';
$string['nopresenterrole'] = 'error: error encontrando el rol adobecconnectpresenter';
$string['notparticipant'] = 'Usted no es un participante de esta reunión';
$string['notsetupproperty'] = 'El módulo de actividad no está configurado correctamente. Por favor póngase en contacto con su administrador de Moodle.';
$string['participantbtngrp'] = 'Acciones de participante';
$string['participantsgrp'] = 'Usuarios de la reunión';
$string['particpantslabel'] = 'Participantes';
$string['pluginadministration'] = 'Administración de Adobe Connect';
$string['pluginname'] = 'Adobe Connect';
$string['port'] = 'Puerto';
$string['port_desc'] = 'Puerto usado para conectarse a Adobe Connect';
$string['potentialusers'] = '$a usuarios potenciales';
$string['presenterbtngrp'] = 'Acciones del presentador';
$string['presenterlabel'] = 'Presentador';
$string['private'] = 'Privado';
$string['public'] = 'Publico';
$string['record_force'] = 'Forzar las grabaciones de reuniones';
$string['record_force_desc'] = 'Forzar que se graben todas las reuniones de Adobe Connect. Esto afectará todo el sitio y el servidor de Adobe Connect debe reiniciarse.';
$string['recordinghdr'] = 'Grabaciones';
$string['removeparticipant'] = 'Quitar';
$string['removepresenter'] = 'Quitar';
$string['roletoassign'] = 'Rol a asignar';
$string['samemeettime'] = 'Hora inválida';
$string['savechanges'] = 'Guardar';
$string['selectparticipants'] = 'Asignar roles';
$string['settingblurb'] = '<center> <img src="{$a->image}"/> </center> <br />
    <p> Adobe Systems Inc. y Remote-Learner.net se han asociado para crear el primer método de integración, disponible al público y patrocinado oficialmente entre Moodle y Adobe Acrobat Connect Pro. Esta nueva integración está diseñada para simplificar el uso de eventos sincrónicos dentro de Moodle. Proporciona un inicio de sesión único SSO entre los dos sistemas con fácil creación y administración de reuniones Adobe Connect Pro. </p> <br />
    <p> <center> Acerca de Remote-Learner </center>
    Remote-Learner ha estado proporcionando servicios de tecnologías educativas desde 1982 a sus clientes de negocios, educativos y gubernamentales. Hoy, estos servicios incluyen soporte para los mejores programas de código abierto. Remote-Learner es socio oficial de Moodle, socio de JasperSoft y socio de Alfresco. La compañía ofrece servicios de alojamiento SaaS, contratos de soporte de TI, programación personalizada, capacitación para el desarrollo de la fuerza laboral, diseño instruccional y servicios de consultoría estratégica para organizaciones que planean programas de aprendizaje en línea. </p> <br />
    <p> Visite el <a href="{$a->url}"> Directorio de complementos de Adobe Connect Moodle </a> para obtener información en soporte a Empresas. </p>';
$string['starttime'] = 'Hora de inicio';
$string['testconnection'] = 'Probar conexión';
$string['unableretrdetails'] = 'No se pueden recuperar los detalles de la reunión';
$string['usergrouprequired'] = 'Esta reunión requiere que los usuarios estén en un grupo para unirse';
$string['usernotenrolled'] = 'Solo los usuarios inscritos y que tengan un rol en este curso pueden unirse a esta reunión';
