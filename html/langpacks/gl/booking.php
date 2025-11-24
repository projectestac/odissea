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
 * Strings for component 'booking', language 'gl', version '4.5'.
 *
 * @package     booking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Editar categorías';
$string['addmorebookings'] = 'Engadir máis reservas';
$string['addnewcategory'] = 'Engadir unha nova categoría';
$string['addtocalendar'] = 'Engadir ao calendario';
$string['addtogroup'] = 'Engadir os usuarios ao grupo de xeito automático';
$string['addtogroup_help'] = 'Engadir os usuarios ao grupo de xeito automático - o grupo será creado co nome «Nome da reserva - Nome da opción»';
$string['allbookingoptions'] = 'Descargar os usuarios de tódalas opcións de reserva';
$string['allmailssend'] = 'Foron enviados con éxito tódolos correos aos usuarios!';
$string['allowupdate'] = 'Permitir a actualización da reserva';
$string['answered'] = 'Contestada';
$string['associatedcourse'] = 'Curso asociado';
$string['attachedfiles'] = 'Ficheiros anexos';
$string['autoenrol'] = 'Matricular usuarios de xeito automático';
$string['autoenrol_help'] = 'Se está activado, os usuarios serán matriculados no curso pertinente en canto fagan a reserva, e será anulada a matrícula do curso en canto cancelen a reserva.';
$string['availability'] = 'Aínda dispoñible';
$string['available'] = 'Prazas dispoñibles';
$string['booked'] = 'Reservado';
$string['bookedpast'] = 'Reservado (curso finalizado)';
$string['bookedtext'] = 'Confirmación de reserva';
$string['bookedusers'] = 'Usuarios reservados';
$string['booking'] = 'Reservas';
$string['booking:addinstance'] = 'Engadir nova reserva';
$string['booking:choose'] = 'Reserva';
$string['booking:deleteresponses'] = 'Eliminar respostas';
$string['booking:downloadresponses'] = 'Descargar respostas';
$string['booking:readresponses'] = 'Ler respostas';
$string['booking:sendpollurl'] = 'Enviar URL de enquisa';
$string['booking:subscribeusers'] = 'Facer reservas para outros usuarios';
$string['booking:updatebooking'] = 'Xestionar as opcións de reserva';
$string['bookingattachment'] = 'Ficheiro anexo';
$string['bookingcategory'] = 'Categoría';
$string['bookingdeleted'] = 'A súa reserva foi anulada';
$string['bookingduration'] = 'Duración';
$string['bookingfull'] = 'Non hai prazas dispoñibles';
$string['bookingmanagererror'] = 'O nome de usuario non é válido. Ou ben non existe, ou hai máis dun usuario con ese nome (por exemplo: se hai máis dunha autenticación habilitada)';
$string['bookingmeanwhilefull'] = 'Mentres tanto, alguén reservou a última praza';
$string['bookingname'] = 'Nome de reserva';
$string['bookingopen'] = 'Aberto';
$string['bookingorganizatorname'] = 'Nome do organizador';
$string['bookingpoints'] = 'Puntos de curso';
$string['bookingpolicy'] = 'Política de reservas';
$string['bookingpollurl'] = 'URL da enquisa';
$string['bookingsaved'] = 'A súa reserva foi gardada con éxito. Pode continuar coas reservas noutros cursos.';
$string['bookingtags'] = 'Etiquetas';
$string['bookingtext'] = 'Texto da reserva';
$string['booknow'] = 'Reservar agora';
$string['bookotherusers'] = 'Reservar outros usuarios';
$string['cancelbooking'] = 'Anular a reserva';
$string['categories'] = 'Categorías';
$string['category'] = 'Categoría';
$string['categoryname'] = 'Nome de categoría';
$string['closed'] = 'Reservas pechadas';
$string['confirmationmessagesettings'] = 'Configuración do correo de confirmación';
$string['confirmbookingoffollowing'] = 'Por favor, confirme a reserva para o seguinte curso';
$string['confirmdeletebookingoption'] = 'Desexa eliminar esta opción da reserva?';
$string['coursedate'] = 'Data';
$string['courseendtime'] = 'Data de remate do curso';
$string['coursestarttime'] = 'Data de inicio do curso';
$string['days'] = '{$a} días';
$string['daystonotify'] = 'Cantos días antes do comezo da actividade hai que avisar aos participantes?';
$string['defaultbookingoption'] = 'Opcións por defecto da reserva';
$string['deletebooking'] = 'Desexa anular a matrícula do seguinte curso? <br /><br /> <b>{$a} </b>';
$string['deletecategory'] = 'Eliminar';
$string['deletedbookingusermessage'] = 'Ola {$a->participant},

A súa reserva para {$a->title} ({$a->startdate} {$a->starttime}) foi cancelada.';
$string['deletedbookingusersubject'] = 'Cancelouse a reserva para {$a->title}';
$string['deletedtext'] = 'Mensaxe para reserva cancelada';
$string['deletesubcategory'] = 'Por favor, elimine primeiro as subcategorías desta categoría!';
$string['deleteuserfrombooking'] = 'Desexa eliminar os usuarios da reserva?';
$string['download'] = 'Descarga';
$string['downloadallresponses'] = 'Descarga as respostas de tódalas opcións de reserva';
$string['downloadusersforthisoptionods'] = 'Descargar os usuarios en formato ODS';
$string['downloadusersforthisoptionxls'] = 'Descargar os usuarios de formato XLS';
$string['editcategory'] = 'Editar';
$string['endtimenotset'] = 'Data de remate sen configurar';
$string['entervalidurl'] = 'Por favor, introduza unha URL válida!';
$string['error:failedtosendconfirmation'] = 'O seguinte usuario non recibiu o correo de confirmación

Estado da reserva: {$a->status}
Participante: {$a->participant}
Curso: {$a->title}
Data: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Ligazón: {$a->bookinglink}
Curso asociado: {$a->courselink}';
$string['eventduration'] = 'Duración da actividade';
$string['eventpoints'] = 'Puntos';
$string['existingsubscribers'] = 'Subscritores existentes';
$string['expired'] = 'Desculpe, esta actividade foi pechada o {$a} e xa non está dsipoñible';
$string['fillinatleastoneoption'] = 'Debe proporcionar polo menos dúas respostas.';
$string['forcourse'] = 'para o curso';
$string['full'] = 'Completo';
$string['groupname'] = 'Nome de grupo';
$string['hours'] = '{$a} horas';
$string['limit'] = 'Límite';
$string['limitanswers'] = 'Limitar o número de participantes';
$string['mailconfirmationsent'] = 'Nun intre recibirá un correo de confirmación';
$string['managebooking'] = 'Xestionar';
$string['maxoverbooking'] = 'Número máximo de prazas en lista de agarda';
$string['maxparticipantsnumber'] = 'Número máximo de participantes';
$string['maxperuser'] = 'Número máximo de reservas por usuario';
$string['maxperuser_help'] = 'O número máximo de reservas que un usuario pode facer nesta actividade nunha soa vez. Unha vez rematado o evento, este límite xa non ten efecto.';
$string['maxperuserwarning'] = 'Neste intre ten un límite máximo de {$a->count}/{$a->limit} reservas';
$string['messagesend'] = 'A súa mensaxe foi enviada con éxito.';
$string['messagesubject'] = 'Asunto';
$string['messagetext'] = 'Mensaxe';
$string['minutes'] = '{$a} minutos';
$string['modulename'] = 'Reserva';
$string['modulenameplural'] = 'Reservas';
$string['mustchooseone'] = 'Debe escoller unha opción antes de gardar. Non se gardou nada.';
$string['mustfilloutuserinfobeforebooking'] = 'Por favor, antes de enviar o formulario de reserva, ten que cubrir algunha información persoal';
$string['nobookingselected'] = 'Non foi seleccionada ningunha opción de reserva';
$string['noguestchoose'] = 'Desculpe, pero aos convidados non se lles permite o envío de datos';
$string['noresultsviewable'] = 'Neste intre, non se poden consultar os resultados.';
$string['norighttobook'] = 'Non é posible facer a reserva para o seu papel. Debe contactar co administrador do sitio para que lle conceda os permisos necesarios, ou inicie sesión.';
$string['nosubscribers'] = 'Non se asignaron profesores!';
$string['notbooked'] = 'Sen reservas';
$string['notopenyet'] = 'Desculpe, esta actividade non está dispoñible ata {$a}';
$string['onwaitinglist'] = 'Vostede está na lista de agarda';
$string['organizatorname'] = 'Nome do organizador';
$string['pluginadministration'] = 'Administración de reservas';
$string['pluginname'] = 'Reservas';
$string['pollurl'] = 'URL da enquisa';
$string['pollurltext'] = 'Enviar URL da enquisa';
$string['pollurltextmessage'] = 'Por favor, participe na enquisa

URL {pollurl}';
$string['pollurltextsubject'] = 'Por favor, participe na enquisa';
$string['potentialsubscribers'] = 'Subscritores potenciais';
$string['removeresponses'] = 'Eliminar tódalas respostas';
$string['responses'] = 'Respostas';
$string['responsesto'] = 'Respostas a {$a}';
$string['rootcategory'] = 'Inicio';
$string['searchtag'] = 'Etiquetas de busca';
$string['select'] = 'Selección';
$string['selectcategory'] = 'Seleccionar categoría';
$string['sendmailtobooker'] = 'Páxina de reserva para outros usuarios: Enviar correo ao usuario que fai a reserva en lugar de aqueles que xa están rexistrados';
$string['sendmailtobooker_help'] = 'Marca esta opción para enviar o correo de confirmación ao usuario que fai a reserva para outros usuarios, en lugar de envialo aos propios usuarios que foron engadidos á opción de reserva.
Isto só se aplica nas reservas feitas en «reserva para outros usuarios».';
$string['spaceleft'] = 'praza dispoñíbel';
$string['spacesleft'] = 'prazas dispoñíbeis';
$string['starttimenotset'] = 'Data de comezo sen configurar';
$string['statuschangetext'] = 'Mensaxe de cambio de estado';
$string['subscribersto'] = 'Profesores para \'{$a}\\';
$string['subscribetocourse'] = 'Matricular usuarios no curso';
$string['subscribeuser'] = 'Desexa matricular os usuarios no seguinte curso';
$string['teachers'] = 'Profesores:';
$string['timerestrict'] = 'Restrinxir as respostas durante este período';
$string['updatebooking'] = 'Editar esta opción de reserva';
$string['usedinbooking'] = 'Non se pode eliminar esta categoría, por que está sendo usada nas reservas!';
$string['userdownload'] = 'Descargar usuarios';
$string['usernameofbookingmanager'] = 'Nome de usuario do xestor de reservas';
$string['usernameofbookingmanager_help'] = 'O nome do usuario que aparecerá no campo «De» nas mensaxes de notificación.
Se a opción «Enviar correo de confirmación ao xestor de servas» está activada, este será o usuario que reciba unha copia das notificacións.';
$string['viewallresponses'] = 'Xestionar {$a} respostas';
$string['waitinglist'] = 'En lista de agarda';
$string['waitinglisttaken'] = 'Na lista de agarda';
$string['waitinglistusers'] = 'Usuarios na lista de agarda';
$string['waitingplacesavailable'] = 'Prazas dispoñíbeis na lista de agarda';
$string['waitingtext'] = 'Confirmación lista de agarda';
$string['waitspaceavailable'] = 'Prazas dispoñíbeis na lista de agarda';
$string['withselected'] = 'Cos usuarios seleccionados:';
$string['yourselection'] = 'A súa selección';
