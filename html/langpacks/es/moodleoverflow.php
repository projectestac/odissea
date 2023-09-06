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
 * Strings for component 'moodleoverflow', language 'es', version '4.1'.
 *
 * @package     moodleoverflow
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addanewdiscussion'] = 'Añadir un nuevo tema de discusión';
$string['addanewreply'] = 'Añadir una nueva respuesta';
$string['allowcoursereputation'] = 'Suma de reputación dentro de un curso.';
$string['allownegativereputation'] = '¿Permitir reputación negativa?';
$string['allownegativereputation_help'] = 'Si se selecciona sí, la reputación de los usuarios en un curso o en un módulo puede ser negativa. Si se selecciona no, la reputación no bajará más de 0.';
$string['allowratingchange'] = 'Permitir cambios de puntuación';
$string['allsubscribe'] = 'Suscribirse a todos los foros';
$string['allunsubscribe'] = 'Darse de baja de todos los fotos';
$string['areaattachment'] = 'Adjuntos';
$string['areapost'] = 'Mensajes';
$string['attachment'] = 'Adjunto';
$string['attachment_help'] = 'Opcionalmente puedes adjuntar uno o más ficheros a un tema del foro. Si adjuntas una imagen, está se mostrará después del mensaje.';
$string['attachments'] = 'Adjuntos';
$string['bynameondate'] = 'por {$a->name} ({$a->rating}) - {$a->date}';
$string['bynameondatenorating'] = 'por {$a->name} - {$a->date}';
$string['cannotcreatediscussion'] = 'No se pudo crear un nuevo tema';
$string['cannotdeletepost'] = '¡No puedes borrar este mensaje!';
$string['cannotfindparentpost'] = 'No se puedo encontrar un tema padre para {$a}';
$string['cannotreply'] = 'No puedes responder a este mensaje';
$string['cannottrack'] = 'No puedes dejar de seguir este foro';
$string['cannotunsubscribe'] = 'No puedes cancelar tu suscripción a este foro';
$string['cannotupdatepost'] = 'No puedes actualizar este mensaje';
$string['cleanreadtime'] = 'Marcar mensajes antiguos como leídos';
$string['clicktosubscribe'] = 'No estás suscrito a este tema. Clic para suscribirse.';
$string['clicktounsubscribe'] = 'Estás suscrito a este tema. Clic para cancelar suscripción.';
$string['configallowcoursereputation'] = '¿Quieres permitir la suma de reputación de todas las instancias del curso actual?';
$string['configallowratingchange'] = '¿Puede un usuario cambiar sus puntuaciones?';
$string['configcleanreadtime'] = 'La hora del día para limpiar mensajes antiguos de la columna "leídos".';
$string['configforcedreadtracking'] = 'Permite establecer forzosamente a Moodleoverflow para el seguimiento de leídos. Resultará en un peor rendimiento para algunos usuarios, particularmente en cursos con muchos moodleoverflows y mensajes. Estando desactivado, cualquier moodleoverflow anteriormente establecido como forzoso será tratado como opcional.';
$string['configmanydiscussions'] = 'Número máximo de temas a mostrar en un Moodleoverflow por página';
$string['configmaxattachments'] = 'Número máximo de adjuntos permitidos por mensaje por defecto.';
$string['configmaxbytes'] = 'Tamaño máximo por defecto para todos los adjuntos de los foros del sitio (sujeto a límites de curso y otros ajustes locales)';
$string['configmaxeditingtime'] = 'El número máximo de segundos por defecto es 3.600 (=30 minutos).';
$string['configmaxmailingtime'] = 'Mensajes más antiguos que este número de horas no serán enviados por email a los usuarios. Esto ayudará a evitar problemas cuando el cron no se ejecute por un período largo de tiempo.';
$string['configoldpostdays'] = 'Número de días de antigüedad para que un mensaje se considere leído automáticamente.';
$string['configpreferteachersmark'] = 'Un mensaje de respuesta marcado como resuelto por el administrador del curso prevalecerá sobre un mensaje marcado como útil por el creador del tema.';
$string['configreputationnotnegative'] = 'Prohibe que la reputación de los usuarios sea negativa.';
$string['configtrackingtype'] = 'Ajustes por defecto para el seguimiento de lectura.';
$string['configtrackmoodleoverflow'] = 'Selecciona "Sí" si quieres realizar seguimiento de leído/no leído por cada usuario.';
$string['configvotescaledownvote'] = 'La cantidad de reputación que da un voto negativo a un mensaje tuyo.';
$string['configvotescalehelpful'] = 'La cantidad de reputación que da cuando marcan como útil un mensaje tuyo.';
$string['configvotescalesolved'] = 'La cantidad de reputación que da cuando marcan como resuelto un mensaje tuyo.';
$string['configvotescaleupvote'] = 'La cantidad de reputación que da un voto positivo a un mensaje tuyo.';
$string['configvotescalevote'] = 'La cantidad de reputación que da un voto.';
$string['confirmsubscribe'] = '¿Estás seguro de que deseas suscribirte al foro \'{$a}\'?';
$string['confirmsubscribediscussion'] = '¿Estás seguro de que deseas suscribirte al tema \'{$a->discussion}\' del foro \'{$a->moodleoverflow}\'?';
$string['confirmunsubscribe'] = '¿Estás seguro de que deseas cancelar tu suscripción al foro \'{$a}\'?';
$string['confirmunsubscribediscussion'] = '¿Estás seguro de que deseas cancelar tu suscripción al tema \'{$a->discussion}\' del foro \'{$a->moodleoverflow}\'?';
$string['couldnotadd'] = 'No se pudo añadir tu mensaje por un error desconocido';
$string['couldnotdeletereplies'] = 'Lo sentimos, no es posible borrarlo cuando hay gente que ya ha respondido';
$string['couldnotupdate'] = 'No se pudo actualizar el mensaje debido a un error desconocido';
$string['coursewidereputation'] = '¿Reputación a nivel de módulo?';
$string['coursewidereputation_help'] = 'Si seleccionas "Sí", la reputación de los usuarios en todas las actividades moodleoverflow de todo el curso serán sumadas';
$string['crontask'] = 'Trabajos de mantenimiento de Moodleoverflow';
$string['delete'] = 'Borrar';
$string['deletesure'] = '¿Estás seguro de eliminar este mensaje?';
$string['deletesureplural'] = '¿Estás seguro de borrar este tema y todas sus respuestas? ({$a} mensajes)';
$string['disallowsubscribe'] = 'Suscripciones deshabilitadas';
$string['discussionlocked'] = 'Está discusión ha sido cerrada por lo que no es posible enviar más respuestas.';
$string['discussionname'] = 'Nombre del tema';
$string['discussionnownotsubscribed'] = '{$a->name} NO será notificado de nuevos mensajes en el tema \'{$a->discussion}\' del foro \'{$a->moodleoverflow}\\';
$string['discussionnowsubscribed'] = '{$a->name} será notificado de nuevos mensajes en el tema \'{$a->discussion}\' del foro \'{$a->moodleoverflow}\\';
$string['discussions'] = 'Temas';
$string['discussionsubscription'] = 'Suscripción a los temas';
$string['discussionsubscription_help'] = 'Suscribirte a un tema significa que recibirás notificaciones por cada mensaje nuevo que se reciba.';
$string['downvotenotchangeable'] = 'Voto negativo (permanente)';
$string['edit'] = 'Editar';
$string['editedby'] = 'Editado por {$a->name} - envío original {$a->date}';
$string['editedpostupdated'] = 'El mensaje de {$a} fue actualizado';
$string['erroremptymessage'] = 'El mensaje no puede estar vació';
$string['erroremptysubject'] = 'El asunto no puede estar vacío.';
$string['errorwhiledelete'] = 'Ha ocurrido un error al eliminar el registro.';
$string['eventdiscussioncreated'] = 'Tema creado';
$string['eventdiscussiondeleted'] = 'Tema borrado';
$string['eventdiscussionsubscriptioncreated'] = 'Suscripción al tema creada';
$string['eventdiscussionsubscriptiondeleted'] = 'Suscripción al tema eliminada';
$string['eventdiscussionviewed'] = 'Temas vistos';
$string['eventpostcreated'] = 'Mensajes creados';
$string['eventpostdeleted'] = 'Mensajes borrados';
$string['eventpostupdated'] = 'Mensajes actualizados';
$string['eventratingcreated'] = 'Votos otorgados';
$string['eventratingdeleted'] = 'Votos eliminados';
$string['eventratingupdated'] = 'Votos actualizados';
$string['eventreadtrackingdisabled'] = 'Seguimiento de lectura deshabilitado';
$string['eventreadtrackingenabled'] = 'Seguimiento de lectura habilitado';
$string['eventsubscriptioncreated'] = 'Suscripción creada';
$string['eventsubscriptiondeleted'] = 'Suscripción eliminada';
$string['everyonecannowchoose'] = 'Ahora todos pueden elegir suscribirse';
$string['everyoneisnowsubscribed'] = 'Ahora todos están suscritos a este foro';
$string['everyoneissubscribed'] = 'Ya están todos suscritos a este foro';
$string['forcedreadtracking'] = 'Permitir forzar el seguimiento de lectura';
$string['generalmoodleoverflows'] = 'Foros en este curso';
$string['gotoindex'] = 'Administrar las preferencias';
$string['grademaxgradeerror'] = 'La calificación máxima debe ser un número entero positivo deferente de 0';
$string['gradesreport'] = 'Informe de calificaciones';
$string['gradesupdated'] = 'Calificaciones actualizadas';
$string['hiddenmoodleoverflowpost'] = 'Mensaje de foro oculto';
$string['invaliddiscussionid'] = 'El id de tema era incorrecto';
$string['invalidforcesubscribe'] = 'Modo forzoso de suscripción inválido';
$string['invalidmoodleoverflowid'] = 'Id de foro incorrecto';
$string['invalidparentpostid'] = 'ID de mensaje padre incorrecto';
$string['invalidpostid'] = 'ID de mensaje incorrecto - {$a}';
$string['invalidratingid'] = 'La puntuación enviada no es ni positiva ni negativa.';
$string['mailindexlink'] = 'Cambia tus preferencias: {$a}';
$string['manydiscussions'] = 'Temas por página';
$string['markallread'] = 'Marcar todos los mensajes de este tema como leídos.';
$string['markdiscussionreadsuccessful'] = 'El tema ha sido marcado como leído.';
$string['markhelpful'] = 'Marcar como útil';
$string['markmoodleoverflowreadsuccessful'] = 'Todos los mensajes han sido marcados como leídos.';
$string['marknothelpful'] = 'No útil';
$string['marknotsolved'] = 'No resuelto';
$string['markread'] = 'Marcar leído';
$string['markreadfailed'] = 'Un mensaje de este tema no se pudo marcar como leído.';
$string['marksolved'] = 'Marcado como Resuelto';
$string['markunread'] = 'Marcar no leído';
$string['maxattachments'] = 'Número máximo de adjuntos';
$string['maxattachments_help'] = 'Este ajuste especifica el número máximo de archivos que pueden ser adjuntados a un mensaje.';
$string['maxattachmentsize'] = 'Tamaño máximo de archivo adjunto';
$string['maxattachmentsize_help'] = 'Este ajuste especifica el tamaño máximo de archivo que puede ser adjuntado a un mensaje.';
$string['maxeditingtime'] = 'Máxima cantidad de tiempo en que un mensaje puede ser editado por su creador (segundos)';
$string['maxmailingtime'] = 'Tiempo máximo de envío de correo';
$string['message'] = 'Mensaje';
$string['messageprovider:posts'] = 'Notificación de nuevas publicaciones';
$string['modulename'] = 'Moodleoverflow';
$string['modulename_help'] = 'El módulo Moodleoverflow permite a los participantes usar un foro estilo preguntas-respuestas. El foro se muestra en un formato no cronológico, ya que el orden depende de los votos colaborativos en vez de la fecha.';
$string['modulenameplural'] = 'Moodleoverflows';
$string['moodleoverflow'] = 'Moodleoverflow';
$string['moodleoverflow:addinstance'] = 'Añadir una nueva instancia Moodleoverflow';
$string['moodleoverflow:allowforcesubscribe'] = 'Permitir suscripción forzosa';
$string['moodleoverflow:createattachment'] = 'Añadir adjuntos';
$string['moodleoverflow:deleteanypost'] = 'Borrar mensajes';
$string['moodleoverflow:deleteownpost'] = 'Borrar mensajes propios';
$string['moodleoverflow:editanypost'] = 'Editar mensajes';
$string['moodleoverflow:managesubscriptions'] = 'Administrar suscripciones';
$string['moodleoverflow:marksolved'] = 'Marcar un mensaje como resuelto';
$string['moodleoverflow:ratehelpful'] = 'Marcar un mensaje como útil';
$string['moodleoverflow:ratepost'] = 'Votar un mensaje';
$string['moodleoverflow:replypost'] = 'Responder en tema';
$string['moodleoverflow:startdiscussion'] = 'Comenzar un tema';
$string['moodleoverflow:viewdiscussion'] = 'Ver temas';
$string['moodleoverflowauthorhidden'] = 'Autor (oculto)';
$string['moodleoverflowbodyhidden'] = 'No puedes ver este mensaje, probablemente porque no has escrito anteriormente en este tema, porque todavía no ha pasado el tiempo máximo de edición, porque el tema todavía no ha comenzado o porque el tema ya ha expirado.';
$string['moodleoverflowfieldset'] = 'Campo de ejemplo personalizado';
$string['moodleoverflowname'] = 'Nombre Moodleoverflow';
$string['moodleoverflows'] = 'Moodleoverflows';
$string['moodleoverflowsubjecthidden'] = 'Asunto (oculto)';
$string['nodiscussions'] = 'Todavía no hay temas en este foro.';
$string['noguestpost'] = 'Lo sentimos, los invitados no están habilitados para escribir.';
$string['noguesttracking'] = 'Lo sentimos, los invitados no pueden establecer opciones de seguimiento.';
$string['noonecansubscribenow'] = 'La suscripciones están ahora desactivadas';
$string['nopermissiontosubscribe'] = 'No tienes permisos para ver los usuarios suscritos';
$string['nopostmoodleoverflow'] = 'Lo sentimos, no tienes permisos para publicar en este foro.';
$string['noratemoodleoverflow'] = 'Lo sentimos, no tienes permisos para votar en este foro.';
$string['noratingchangeallowed'] = 'No tienes permisos para cambiar tus votaciones.';
$string['notexists'] = 'Este tema ya no existe';
$string['notpartofdiscussion'] = '¡Este mensaje no forma parte de un tema!';
$string['notrackmoodleoverflow'] = 'No realizar seguimiento de mensajes no leídos';
$string['notstartuser'] = 'Solo el usuario que creó el tema puede marcar una respuesta como útil.';
$string['notteacher'] = 'Solo los administradores del curso pueden hacer esto.';
$string['noviewdiscussionspermission'] = 'No tienes permisos para ver temas en este foro';
$string['nowallsubscribed'] = 'Todos los foros en {$a} están suscritos.';
$string['nowallunsubscribed'] = 'Todos los foros en {$a} están sin suscripción.';
$string['nownotsubscribed'] = '{$a->name} NO será notificado de nuevos mensajes en \'{$a->moodleoverflow}\\';
$string['nownottracking'] = '{$a->name} ya no está siguiendo \'{$a->moodleoverflow}\'.';
$string['nowsubscribed'] = '{$a->name} será notificado de nuevos mensajes en \'{$a->moodleoverflow}\\';
$string['nowtracking'] = '{$a->name} está ahora siguiendo \'{$a->moodleoverflow}\'.';
$string['oldpostdays'] = 'Leído después de días';
$string['parent'] = 'Mostrar tema padre';
$string['permalink'] = 'Enlace permanente';
$string['pluginadministration'] = 'Administración de Moodleoverflow';
$string['pluginname'] = 'Moodleoverflow';
$string['postaddedsuccess'] = 'Tu mensaje se añadió con éxito.';
$string['postaddedtimeleft'] = 'Tienes {$a} para editar si quieres realizar algún cambio.';
$string['postbyuser'] = '{$a->post} por {$a->user}';
$string['postincontext'] = 'Ver mensaje en contexto';
$string['postmailinfolink'] = 'Está es una copia de un mensaje enviado a {$a->coursename}.

Para contestar entra en este enlace: {$a->replylink}';
$string['postmailsubject'] = '{$a->courseshortname}: {$a->subject}';
$string['postnotexist'] = 'El mensaje solicitado no existe';
$string['posts'] = 'Publicaciones';
$string['posttomoodleoverflow'] = 'Escribir en foro';
$string['postupdated'] = 'Tu mensaje fue actualizado';
$string['preferteachersmark'] = '¿Preferir marcas del propietario del curso?';
$string['privacy:anonym_discussion_name'] = 'Nombre de discusión anonimizado';
$string['privacy:anonym_post_message'] = 'Este contenido ha sido eliminado.';
$string['privacy:anonym_user_name'] = 'Anónimo';
$string['privacy:discussionsubscriptionpreference'] = 'Usted ha elegido la siguiente preferencia de suscripción a discusión para este foro: "{$a->preference}"';
$string['privacy:metadata:core_files'] = 'Moodleoverflow almacena archivos que han sido subidos por el usuario para formar parte de una publicación en un foro.';
$string['privacy:metadata:moodleoverflow_discuss_subs'] = 'Información acerca de las suscripciones a discusiones de foros individuales. Esto incluye cuando un usuario ha elegido suscribirse a una disusión, o des-suscribirse de una en donde de otro modo estaría suscrito.';
$string['privacy:metadata:moodleoverflow_discuss_subs:discussion'] = 'La ID de la discusión que fue suscrita / des-suscrita.';
$string['privacy:metadata:moodleoverflow_discuss_subs:preference'] = 'La hora de inicio de la suscripción.';
$string['privacy:metadata:moodleoverflow_discuss_subs:userid'] = 'La ID del usuario que cambió las configuraciones de la suscripción.';
$string['privacy:metadata:moodleoverflow_discussions'] = 'Información acerca de las discusiones del foro. Esto incluye cuales discusiones ha iniciado un usuario.';
$string['privacy:metadata:moodleoverflow_discussions:name'] = 'El nombre de la discusión.';
$string['privacy:metadata:moodleoverflow_discussions:timemodified'] = 'La hora cuando la discusión (por ejemplo, una publicación) fue modificada por última vez.';
$string['privacy:metadata:moodleoverflow_discussions:userid'] = 'La ID del usuario que inició la discusión.';
$string['privacy:metadata:moodleoverflow_discussions:usermodified'] = 'La ID del usuario que modificó la discusión.';
$string['privacy:metadata:moodleoverflow_posts'] = 'Información acerca de publicaciones en foro. Esto incluye datos de publicaciones que ha escrito un usuario.';
$string['privacy:metadata:moodleoverflow_posts:created'] = 'La fecha en la cual fue creada esta publicación.';
$string['privacy:metadata:moodleoverflow_posts:discussion'] = 'La ID de la discusión a la cual contribuye esta publicación.';
$string['privacy:metadata:moodleoverflow_posts:message'] = 'El texto de esta publicación.';
$string['privacy:metadata:moodleoverflow_posts:modified'] = 'La última fecha de caundo fue modificada esta publicación.';
$string['privacy:metadata:moodleoverflow_posts:parent'] = 'La ID de la publicación a la cual se refiere esta publicación.';
$string['privacy:metadata:moodleoverflow_posts:userid'] = 'La Id del usuario que envió esta publicación.';
$string['privacy:metadata:moodleoverflow_ratings'] = 'Información acerca de valoraciones de publicaciones. Esto incluye cuando un usuario ha valorado una publicación y su valoración específica.';
$string['privacy:metadata:moodleoverflow_ratings:discussionid'] = 'La ID de la discusión de la cual es parte la publicación valorada.';
$string['privacy:metadata:moodleoverflow_ratings:firstrated'] = 'La fecha de cuando fue enviada esta valoración.';
$string['privacy:metadata:moodleoverflow_ratings:lastchanged'] = 'La fecha de cuando fue cambiada por última vez la valoración.';
$string['privacy:metadata:moodleoverflow_ratings:moodleoverflowid'] = 'La ID del foro Moodleoverflow que contiene la publicación valorada.';
$string['privacy:metadata:moodleoverflow_ratings:postid'] = 'La ID de la publicación que fue valorada.';
$string['privacy:metadata:moodleoverflow_ratings:rating'] = 'La valoración enviada. 0 = neutral, 1 = negativa, 2 = positiva, 3 = útil, 4 = resuelta';
$string['privacy:metadata:moodleoverflow_ratings:userid'] = 'La ID del usuario que envió la valoración.';
$string['privacy:metadata:moodleoverflow_read'] = 'Información acerca del monitoreo de lectura de publicaciones. Esto incluye cuando las publicaciones fueron leidas por un usuario.';
$string['privacy:metadata:moodleoverflow_read:discussionid'] = 'La ID de la discusión a la que pertenece esta publicación.';
$string['privacy:metadata:moodleoverflow_read:firstread'] = 'La fecha de cuando fue leida por primera vez la publicación.';
$string['privacy:metadata:moodleoverflow_read:lastread'] = 'La fecha de cuando fue leida por última vez la publicación por el usuario.';
$string['privacy:metadata:moodleoverflow_read:postid'] = 'La ID de la publicación que ha sido leida.';
$string['privacy:metadata:moodleoverflow_read:userid'] = 'La ID del usuario que leyó la publicación.';
$string['privacy:metadata:moodleoverflow_subscriptions'] = 'Información acerca de suscripciones a foros. Esto incluye  a cuales foros un usuario se ha des-sucrito.';
$string['privacy:metadata:moodleoverflow_subscriptions:moodleoverflow'] = 'La Id del foro moodleoverflow al que se ha suscrito el usuario.';
$string['privacy:metadata:moodleoverflow_subscriptions:userid'] = 'La ID del usuario que se ha suscrito al foro.';
$string['privacy:metadata:moodleoverflow_tracking'] = 'Información acerca del monitoreo de foros. Esto incluye cuales foros no monitorea un usuario.';
$string['privacy:metadata:moodleoverflow_tracking:moodleoverflowid'] = 'La Id del foro moodleoverflow que no es monitoreado por el usuario.';
$string['privacy:metadata:moodleoverflow_tracking:userid'] = 'La ID del usuario que no da seguimiento al foro.';
$string['privacy:postwasread'] = 'Esta publicación fue leida por primera vez en {$a->firstread} y leida más recientemente en {$a->lastread}';
$string['privacy:readtrackingdisabled'] = 'Usted ha elegido no monitorear cuales publicaciones ha leido dentro de este foro.';
$string['privacy:subscribedtoforum'] = 'Usted esta suscrito a este foro.';
$string['rateownpost'] = 'No puedes votar tus propios mensajes.';
$string['ratingfailed'] = 'Votación fallida. Inténtalo de nuevo.';
$string['ratingheading'] = 'Votos y reputación';
$string['ratingpreference'] = 'Mostrar primero';
$string['ratingpreference_help'] = 'Los mensajes pueden marcarse como "Resuelto" y "Útil". Estas opciones deciden qué mensajes se muestran primero. Hay 2 opciones:

* Útil - Un mensaje marcado como útil por el creador del tema será fijado en la parte superior del tema
* Resuelto - Un mensaje marcado como resuelto por un profesor será fijado en la parte superior del tema';
$string['ratingtoold'] = 'Las valoraciones solo pueden cambiar 30 minutos después del primer voto.';
$string['re'] = 'Re:';
$string['reply'] = 'Comentar';
$string['replyfirst'] = 'Respuesta';
$string['reputation'] = 'Reputación';
$string['reputationnotnegative'] = '¿Sólo reputación positiva?';
$string['scalefactor'] = 'Factor de escala';
$string['scalefactor_help'] = 'El usuario es dividido entre el factor de escala para obtener la calificación de cada usuario. Si la calificación resultante fuera mayor que la calificación máxima, el valor será limitado a la calificación máxima especificada.';
$string['scalefactorerror'] = 'El factor de escala debe ser un número entero positivo diferente de 0';
$string['smallmessage'] = '{$a->user} ha escrito en {$a->moodleoverflowname}';
$string['starterrating'] = 'Útil';
$string['subject'] = 'Asunto';
$string['subscribe'] = 'Suscribirse a este foro';
$string['subscribed'] = 'Suscrito';
$string['subscribeenrolledonly'] = 'Lo sentimos, solo usuarios matriculados pueden suscribirse a las notificaciones de mensajes.';
$string['subscribestart'] = 'Enviarme notificaciones de nuevos mensajes en este foro';
$string['subscribestop'] = 'No quiero ser notificado de nuevos mensajes en este foro';
$string['subscriptionauto'] = 'Suscripción automática';
$string['subscriptiondisabled'] = 'Suscripción deshabilitada';
$string['subscriptionforced'] = 'Suscripción forzosa';
$string['subscriptionmode'] = 'Modo de suscripción';
$string['subscriptionmode_help'] = 'Cuando un participante se suscribe a un foro significa que recibirá notificaciones de mensajes creados. Hay 4 modos de suscripción:

* Suscripción opcional - Los participantes pueden elegir si suscribirse o no
* Suscripción forzosa - Todos son suscritos y no pueden cancelar la suscripción
* Suscripción automática - Todos son inicialmente suscritos pero pueden elegir cancelar su suscripción posteriormente
* Suscripción deshabilitada - No se permiten suscripciones

Nota: Cualquier cambio de modo de suscripción solo afectará a los nuevos usuarios matriculados, no a los ya existentes.';
$string['subscriptionoptional'] = 'Suscripción opcional';
$string['subscriptiontrackingheader'] = 'Suscripción y seguimiento';
$string['taskcleanreadrecords'] = 'Trabajo de mantenimiento de Moodleoverflow para limpiar registros leídos antiguos';
$string['tasksendmails'] = 'Trabajo de mantenimiento de Moodleoverflow de envío de correos';
$string['taskupdategrades'] = 'Trabajo e mantenimiento de Moodleoverflow para actulizar calificaciones';
$string['teacherrating'] = 'Resuelto';
$string['tracking'] = 'Seguir';
$string['trackingoff'] = 'Apagado';
$string['trackingon'] = 'Forzoso';
$string['trackingoptional'] = 'Opcional';
$string['trackingtype'] = 'Seguimiento de lectura';
$string['trackingtype_help'] = 'El seguimiento de lectura habilita a los participantes a comprobar fácilmente qué mensajes no han sido vistos todavía.

Si se establece como opcional, el seguimiento está habilitado por defecto pero los usuarios pueden apagarlo.

Si la opción "Habilitar seguimiento forzoso de lectura" está activada en la administración del sitio, estará disponible la opción "forzosa". Significa que el seguimiento siempre estará activado.';
$string['trackmoodleoverflow'] = 'Realizar seguimiento de mensajes no leídos';
$string['unknownerror'] = 'No está previsto que esto ocurra.';
$string['unreadposts'] = 'Mensajes no leídos';
$string['unreadpostsnumber'] = '{$a} mensajes no leídos';
$string['unreadpostsone'] = '1 mensaje no leído';
$string['unsubscribe'] = 'Cancelar suscripción a este foro';
$string['unsubscribediscussion'] = 'Cancelar suscripción a este tema';
$string['unsubscribediscussionlink'] = 'Cancelar suscripción a este tema: {$a}';
$string['unsubscribelink'] = 'Cancelar suscripción a este foro: {$a}';
$string['updategrades'] = 'actualizar calificaciones';
$string['upvotenotchangeable'] = 'Voto positivo (no editable)';
$string['votescaledownvote'] = 'Reputación: Voto negativo';
$string['votescalehelpful'] = 'Reputación: Útil';
$string['votescalesolved'] = 'Reputación: Resuelto';
$string['votescaleupvote'] = 'Reputación: Voto positivo';
$string['votescalevote'] = 'Reputación: Voto.';
$string['yournewtopic'] = 'Comenzar un nuevo tema';
$string['yourreply'] = 'Tu respuesta';
