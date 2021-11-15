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
 * Strings for component 'chat', language 'es', version '3.11'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Hay sesiones de chat programadas';
$string['ajax'] = 'Versión usando Ajax';
$string['autoscroll'] = 'Desplazamiento automático';
$string['beep'] = 'Beep';
$string['bubble'] = 'Burbuja';
$string['cantlogin'] = 'No se pudo ingresar en la sala de chat';
$string['chat:addinstance'] = 'Añadir un nuevo chat';
$string['chat:chat'] = 'Acceder a la sala';
$string['chat:deletelog'] = 'Eliminar registros de chat';
$string['chat:exportparticipatedsession'] = 'Exportar sesión de chat en que usted ha participado';
$string['chat:exportsession'] = 'Exportar cualquier sesión de chat';
$string['chat:readlog'] = 'Ver registros de chat';
$string['chat:talk'] = 'Hablar en un chat';
$string['chat:view'] = 'Ver actividad del chat';
$string['chatintro'] = 'Descripción';
$string['chatname'] = 'Nombre de la sala';
$string['chatreport'] = 'Sesiones';
$string['chattime'] = 'Próxima cita';
$string['compact'] = 'Compacto';
$string['composemessage'] = 'Escriba un mensaje';
$string['configmethod'] = 'El método ajax del chat trabaja de forma interna contactando de forma regular con el servidor para llevar a cabo las actualizaciones.
El método normal de chat implica que los usuarios contactan con el servidor de forma regular para llevar a cabo las actualizaciones. No requiere configuración y funciona en cualquier parte, pero puede ocasionar una sobrecarga en el servidor cuando hay muchos usuarios simultáneamente en la sala. Utilizar un \'daemon\' (i.e., proceso de ejecución independiente en segundo plano) en el servidor requiere acceso shell (de intérprete de comandos) a Unix, pero proporcionará  un servicio de chat más rápido y escalable.';
$string['confignormalupdatemode'] = 'Las actualizaciones de la sala de chat normalmente son servidas eficientemente utilizando la característica de HTTP 1.1 <em>Keep-Alive</em>, pero esto resulta una tarea bastante pesada para el servidor. Un método más avanzado consiste en utilizar la estrategia <em>Stream</em> para enviar actualizaciones a los usuarios. Al utilizar <em>Stream</em> se consigue un escalamiento mucho mejor (es similar al método chatd), pero es posible que su servidor no tenga disponible esta opción.';
$string['configoldping'] = '¿Cual es el máximo tiempo (en segundos) que puede transcurrir antes de que detectemos que un usuario se ha desconectado?  Este es únicamente un límite superior, dado que las desconexiones generalmente se detectan muy rápidamente. Valores más bajos serán más exigentes para su servidor. Si está utilizando el método normal,  <strong>nunca</strong> configure este valor por debajo de 2 * chat_refresh_room.';
$string['configrefreshroom'] = '¿Cada cuántos segundos se debe actualizar la página del chat?
Un valor bajo permitirá una conversación más ágil, pero puede ser mucha carga para el servidor cuando hay mucha gente en la sala';
$string['configrefreshuserlist'] = '¿Cada cuántos segundos se debe actualizar la lista de usuarios presentes en el chat?';
$string['configserverhost'] = '\'Hostname\' (nombre de anfitrión) del ordenador en el que reside el \'daemon\' (proceso de ejecución independiente) del servidor';
$string['configserverip'] = 'Dirección IP numérica equivalente al \'hostname\' (nombre de anfitrión)';
$string['configservermax'] = 'Número máximo de usuarios';
$string['configserverport'] = 'Puerto que usa el \'daemon\' en el servidor';
$string['coursetheme'] = 'Plantilla del curso';
$string['crontask'] = 'Procesamiento en segundo plano para módulo chat';
$string['currentchats'] = 'Salas activas';
$string['currentusers'] = 'Usuarios';
$string['deletesession'] = 'Borrar esta sesión';
$string['deletesessionsure'] = '¿Está seguro que desea borrar esta sesión?';
$string['donotusechattime'] = 'No publicar horas de chat';
$string['enterchat'] = 'Entrar a la sala';
$string['entermessage'] = 'Inserta tu mensaje';
$string['errornousers'] = '¡No puedo encontrar usuarios!';
$string['eventmessagesent'] = 'Mensaje enviado';
$string['eventsessionsviewed'] = 'Sesiones vistas';
$string['explaingeneralconfig'] = 'Estos ajustes están <strong>siempre</strong> en funcionamiento';
$string['explainmethoddaemon'] = 'Estos ajustes tienen efecto solamente si ha seleccionado "Daemon del servidor de chat" como método de chat.';
$string['explainmethodnormal'] = 'Estos ajustes tienen efecto solamente si ha seleccionado Normal como método de chat.';
$string['generalconfig'] = 'Configuración general';
$string['idle'] = 'Inactivo';
$string['indicator:cognitivedepth'] = 'Chat cognitivo';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en una actividad Chat.';
$string['indicator:cognitivedepthdef'] = 'Chat cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso cognitivo ofrecido por las actividades de Chat durante este intervalo de análisis (Niveles = Sin Ver, Ver, Enviar, Ver retroalimentación, Comentar en retroalimentación)';
$string['indicator:socialbreadth'] = 'Chat social';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en una actividad Chat.';
$string['indicator:socialbreadthdef'] = 'Chat social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por las actividades de Chat durante este intervalo de análisis (Niveles = Sin participación, Participante solo, Participante con otros)';
$string['inputarea'] = 'Área de entrada';
$string['invalidid'] = 'No se encontró esa sala de chat';
$string['list_all_sessions'] = 'Listar todas las sesiones.';
$string['list_complete_sessions'] = 'Listar sólo las sesiones completas.';
$string['listing_all_sessions'] = 'Listando todas las sesiones.';
$string['messagebeepseveryone'] = '{$a} envía un beep a todos';
$string['messagebeepsyou'] = '{$a} le acaba de enviar un beep';
$string['messageenter'] = '{$a} entró a la sala';
$string['messageexit'] = '{$a} salió de la sala';
$string['messages'] = 'Mensajes';
$string['messageyoubeep'] = 'Su señal de sonido beep {$a}';
$string['method'] = 'Método de chat';
$string['methodajax'] = 'AJAX';
$string['methoddaemon'] = '\'Daemon\' del servidor de chat';
$string['methodnormal'] = 'Normal';
$string['modulename'] = 'Chat';
$string['modulename_help'] = 'La actividad chat permite a los participantes tener una discusión en formato texto de manera sincrónica en tiempo real.

El chat puede ser una actividad puntual  o puede repetirse a la misma hora cada día o cada semana. Las sesiones de chat se guardan y pueden hacerse públicas para que todos las vean o limitadas a los usuarios con permiso para ver los registros de sesiones del chat.

Los chats son especialmente útiles cuando un grupo no tiene posibilidad de reunirse físicamente para poder conversar cara-a-cara, como

* Reuniones programadas de estudiantes inscritos a cursos en línea, para permitirles compartir experiencias con otros compañeros del mismo curso pero de diferentes ciudades o países
* Un estudiante que temporalmente no puede asistir en persona, podría chatear con su profesor para ponerse al día del trabajo escolar
* Estudiantes que empiezan a trabajar se juntan para discutir sus experiencias entre ellos y con el maestro
* Niños pequeños en casa por las tardes, como una introducción controlada (monitoreada) al mundo de las redes sociales
* Una sesión de preguntas y respuestas con un orador invitado de una localidad diferente (a distancia)
* Sesiones para ayudar a los estudiantes a prepararse para exámenes, donde el maestro, o los estudiantes, hagan preguntas de ejemplo';
$string['modulenameplural'] = 'Chats';
$string['neverdeletemessages'] = 'Nunca borrar mensajes';
$string['nextchattime'] = 'Próxima hora de chat:';
$string['nextsession'] = 'Próxima sesión programada';
$string['no_complete_sessions_found'] = 'No se han encontrado sesiones completas.';
$string['nochat'] = 'No se encontró chat';
$string['noguests'] = 'El chat no está abierto a invitados';
$string['nomessages'] = 'Aún no hay mensajes';
$string['nopermissiontoseethechatlog'] = 'No tiene permiso para ver los registros de chat.';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'No hay sesión programada';
$string['notallowenter'] = 'No tiene permiso para entrar en la sala de chat.';
$string['notlogged'] = '¡Usted no se ha identificado!';
$string['oldping'] = 'Desconectar tiempo de espera';
$string['page-mod-chat-x'] = 'Cualquier página del módulo de chat';
$string['pastchats'] = 'Sesiones de chat pasadas';
$string['pluginadministration'] = 'Administración del chat';
$string['pluginname'] = 'Chat';
$string['privacy:metadata:chat_messages_current'] = 'Sesión actual de chat. Los datos son temporales y son eliminados después de que la sesión de chat sea eliminada';
$string['privacy:metadata:chat_users'] = 'Registra los usuarios que están conectados y en qué salas de chat están';
$string['privacy:metadata:chat_users:firstping'] = 'Hora del primer acceso a la sala de chat';
$string['privacy:metadata:chat_users:ip'] = 'IP del usuario';
$string['privacy:metadata:chat_users:lang'] = 'Idioma del usuario';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Hora del último mensaje en esta sala de chat';
$string['privacy:metadata:chat_users:lastping'] = 'Hora del último acceso a sala de chat';
$string['privacy:metadata:chat_users:userid'] = 'La ID del usuario';
$string['privacy:metadata:chat_users:version'] = 'Cómo accedió al chat el usuario (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'Un registro de los mensajes enviados durante una sesión de chat';
$string['privacy:metadata:messages:issystem'] = 'Si el mensaje es o no es un mensaje generado por el sistema';
$string['privacy:metadata:messages:message'] = 'El mensaje';
$string['privacy:metadata:messages:timestamp'] = 'La hora en la que el mensaje fue enviado.';
$string['privacy:metadata:messages:userid'] = 'La ID de usuario del autor del mensaje';
$string['refreshroom'] = 'Refrescar sala';
$string['refreshuserlist'] = 'Refrescar lista de usuarios';
$string['removemessages'] = 'Eliminar todos los mensajes';
$string['repeatdaily'] = 'A la misma hora todos los días';
$string['repeatnone'] = 'Sin repeticiones, publicar sólo la hora especificada';
$string['repeattimes'] = 'Repetir/publicar tiempo de las sesiones';
$string['repeatweekly'] = 'A la misma hora todas las semanas';
$string['saidto'] = 'dicho a';
$string['savemessages'] = 'Guardar sesiones pasadas';
$string['search:activity'] = 'Chat - información de actividad';
$string['seesession'] = 'Ver esta sesión';
$string['send'] = 'Enviar';
$string['sending'] = 'Enviando';
$string['serverhost'] = 'Nombre del servidor';
$string['serverip'] = 'IP del servidor';
$string['servermax'] = 'Número máximo de usuarios';
$string['serverport'] = 'Puerto del servidor';
$string['sessions'] = 'Sesiones';
$string['sessionstart'] = 'La próxima sesión de chat empezará el {$a->date}, (dentro de {$a->fromnow})';
$string['sessionstartsin'] = 'La siguiente sesión de chat empezará en {$a} desde ahora.';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Todos pueden ver las sesiones pasadas';
$string['studentseereports_help'] = 'Si se selecciona \'No\', solo los usuarios que tienen la capacidad \'mod/chat:readlog\' pueden ver los registros de chat';
$string['talk'] = 'Charla';
$string['updatemethod'] = 'Actualizar método';
$string['updaterate'] = 'Tasa de Actualización:';
$string['userlist'] = 'Lista de usuarios';
$string['usingchat'] = 'Usando el chat';
$string['usingchat_help'] = 'El módulo chat contiene algunas características para hacer más agradable el chatear.

* Emoticonos- Las caritas sonrientes (emoticonos) que puede emplear en cualquier parte de Moodle también pueden emplearse aquí, por ejemplo :-)
* Enlaces - Las direcciones de internet se convierten en enlaces automáticamente
* Emociones - Puede empezar una oración con "/me" o ":" para mostrar emociones, por ejemplo: si su nombre es Kim y escribe ":laughs!" o "/me laughs!", entonces todos verán "Kim laughs!"
* Beeps - Puede mandar un sonido a otros participantes eligiendo el enlace de "beep" que está junto a sus nombres. Un atajo útil para mandar un sonido a todas las personas en el chat al mismo tiempo es tecleando "beep all".
* HTML - si sabe emplear código HTML, lo puede utilizar en su texto para hacer cosas como insertar imágenes, hacer que suenen ruidos o crear texto con diferentes colores';
$string['viewreport'] = 'Ver las sesiones anteriores';
