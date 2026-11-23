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
 * Strings for component 'organizer', language 'ca', version '4.5'.
 *
 * @package     organizer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absolutedeadline'] = 'Fi del registre';
$string['absolutedeadline_help'] = 'Activeu aquesta opció per definir l\'hora després de la qual els estudiants no podran dur a terme cap més acció.';
$string['actionlink_delete'] = 'suprimeix';
$string['actionlink_edit'] = 'edita';
$string['actionlink_eval'] = 'qualifica';
$string['actionlink_print'] = 'imprimeix';
$string['actions'] = 'Acció';
$string['actions_help'] = 'L\'acció que s\'ha de dur a terme.';
$string['addappointment'] = 'Afegeix una cita';
$string['addslots_placesinfo'] = 'Aquesta acció crearà {$a->numplaces} llocs possibles nous, la qual cosa farà un total de {$a->totalplaces} llocs possibles per a {$a->numstudents} estudiants.';
$string['addslots_placesinfo_group'] = 'Aquesta acció crearà {$a->numplaces} llocs possibles nous, la qual cosa farà un total de {$a->totalplaces} llocs possibles per a {$a->numgroups} grups.';
$string['allowcreationofpasttimeslots'] = 'Creació de franges horàries en el passat';
$string['allowedprofilefieldsprint'] = 'Camps del perfil d\'usuari permesos';
$string['allowedprofilefieldsprint2'] = 'Camps del perfil d\'usuari permesos per imprimir franges horàries d\'un sol organitzador';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Els detalls de l\'organitzador i el formulari de registre estaran disponibles a partir de la data següent: <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Inici del registre';
$string['allowsubmissionsfromdate_help'] = 'Activeu aquesta opció si voleu que aquest organitzador estigui disponible per als estudiants després d\'un punt en el temps determinat.';
$string['allowsubmissionsfromdatesummary'] = 'Aquest organitzador acceptarà registres a partir de la data següent: <strong>{$a}</strong>';
$string['allowsubmissionstodate'] = 'Fi del registre';
$string['alwaysshowdescription'] = 'Mostra la descripció sempre';
$string['alwaysshowdescription_help'] = 'Si s\'inhabilita, els estudiants només podran veure la descripció superior de la tasca en la data d\'«Inici del registre».';
$string['applicant'] = 'Aquesta és la persona que va registrar el grup';
$string['appointment_reminder_student:fullmessage'] = 'Hola,  {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, teniu una cita amb {$a->sendername} el dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.

Sistema de Missatgeria de Moodle';
$string['appointment_reminder_student:group:fullmessage'] = 'Hola,  {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, teniu una cita de grup amb {$a->sendername} el dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.

Sistema de Missatgeria de Moodle';
$string['appointment_reminder_student:group:smallmessage'] = 'Teniu una cita de grup amb {$a->sendername} el dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.';
$string['appointment_reminder_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: recordatori de cita de grup';
$string['appointment_reminder_student:smallmessage'] = 'Teniu una cita amb {$a->sendername} el dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.';
$string['appointment_reminder_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: recordatori de cita';
$string['appointment_reminder_teacher:digest:fullmessage'] = 'Hola, {$a->receivername},

Demà teniu les cites següents:

{$a->digest}

Sistema de Missatgeria de Moodle';
$string['appointment_reminder_teacher:digest:smallmessage'] = 'Heu rebut un missatge que resumeix les vostres cites de demà.';
$string['appointment_reminder_teacher:digest:subject'] = 'Resum de cites';
$string['appointment_reminder_teacher:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, teniu una cita amb estudiants el dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.

Sistema de Missatgeria de Moodle';
$string['appointment_reminder_teacher:group:digest:fullmessage'] = 'Hola, {$a->receivername},

Demà teniu les cites següents:

{$a->digest}

Sistema de Missatgeria de Moodle';
$string['appointment_reminder_teacher:group:digest:smallmessage'] = 'Heu rebut un missatge que resumeix les vostres cites de demà.';
$string['appointment_reminder_teacher:group:digest:subject'] = 'Resum de cites';
$string['appointment_reminder_teacher:smallmessage'] = 'Teniu una cita amb estudiants el dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.';
$string['appointment_reminder_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: recordatori de cita';
$string['appointmentcomments'] = 'Comentaris';
$string['appointmentcomments_help'] = 'Aquí podeu afegir informació addicional sobre les cites.';
$string['appointmentdatetime'] = 'Data i hora';
$string['appointmentdeleted_notify_student:fullmessage'] = 'Hola, {$a->receivername},

S\'ha suprimit la vostra cita del curs {$a->courseshortname} el dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.';
$string['appointmentdeleted_notify_student:group:fullmessage'] = 'Hola, {$a->receivername},

S\'ha suprimit la vostra cita del curs {$a->courseshortname} el dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.';
$string['appointmentdeleted_notify_student:group:smallmessage'] = 'S\'ha suprimit la vostra cita del dia {$a->date} a les {$a->time} a l\'organitzador «{$a->organizername}».';
$string['appointmentdeleted_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: cita suprimida';
$string['appointmentdeleted_notify_student:smallmessage'] = 'S\'ha suprimit la vostra cita del dia {$a->date} a les {$a->time} a l\'organitzador «{$a->organizername}».';
$string['appointmentdeleted_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: cita suprimida';
$string['assign'] = 'Assigna';
$string['assign_notify_student:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, {$a->sendername} us ha assignat una cita amb {$a->slot_teacher} el dia {$a->date} a les {$a->time}.

Professor o professora: {$a->slot_teacher}
Ubicació: {$a->slot_location}
Data: {$a->date}
Hora: {$a->time}

Sistema de Missatgeria de Moodle';
$string['assign_notify_student:group:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, {$a->sendername} ha assignat al vostre grup {$a->groupname} una cita amb {$a->slot_teacher} el dia {$a->date} a les {$a->time}.

Professor o professora: {$a->slot_teacher}
Ubicació: {$a->slot_location}
Data: {$a->date}
Hora: {$a->time}

Sistema de Missatgeria de Moodle';
$string['assign_notify_student:group:smallmessage'] = '{$a->sendername} ha assignat al vostre grup {$a->groupname} una cita amb {$a->slot_teacher} el dia {$a->date} a les {$a->time}.';
$string['assign_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: cita assignada pel professorat';
$string['assign_notify_student:smallmessage'] = '{$a->sendername} us ha assignat una cita amb {$a->slot_teacher} el dia {$a->date} a les {$a->time}.';
$string['assign_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: cita assignada pel professorat';
$string['assign_notify_teacher:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, {$a->sendername} us ha assignat una cita amb {$a->participantname} el dia {$a->date} a les {$a->time}.

Participant: {$a->participantname}
Ubicació: {$a->slot_location}
Data: {$a->date}
Hora: {$a->time}

Sistema de Missatgeria de Moodle';
$string['assign_notify_teacher:group:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, {$a->sendername} us ha assignat una cita amb el grup {$a->groupname} el dia {$a->date} a les {$a->time}.

Grup: {$a->groupname}
Ubicació: {$a->slot_location}
Data: {$a->date}
Hora: {$a->time}

Sistema de Missatgeria de Moodle';
$string['assign_notify_teacher:group:smallmessage'] = '{$a->sendername} us ha assignat una cita amb el grup {$a->groupname} el dia {$a->date} a les {$a->time}.';
$string['assign_notify_teacher:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: cita assignada';
$string['assign_notify_teacher:smallmessage'] = '{$a->sendername} us ha assignat una cita amb {$a->sendername} el dia {$a->date} a les {$a->time}';
$string['assign_notify_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: cita assignada';
$string['assign_title'] = 'Assigna una cita';
$string['assignsuccess'] = 'S\'ha assignat la franja horària de manera correcta i se n\'ha enviat una notificació als participants.';
$string['assignsuccessnotsent'] = 'S\'ha assignat la franja horària de manera correcta, PERÒ NO se n\'ha enviat una notificació als participants.';
$string['atlocation'] = 'a la ubicació';
$string['attended'] = 'assistit';
$string['auth'] = 'Mètode d\'autenticació';
$string['availability'] = 'Disponibilitat';
$string['availablefrom'] = 'Les sol·licituds estaran disponibles a partir de';
$string['availablefrom_help'] = 'Estableix el període de temps durant el qual els estudiants poden registrar-se o inscriure\'s en aquestes franges horàries. Alternativament, podeu activar l\'opció «Comença ara» per habilitar el registre de manera immediata.';
$string['availablegrouplist'] = 'Grups disponibles';
$string['availableslotsfor'] = 'Franges horàries disponibles per a';
$string['back'] = 'Enrere';
$string['btn_add'] = 'Afegeix franges horàries noves';
$string['btn_assign'] = 'Assigna una franja horària';
$string['btn_comment'] = 'Editeu el vostre comentari';
$string['btn_delete'] = 'Elimina les franges horàries seleccionades';
$string['btn_deleteappointment'] = 'Suprimeix la cita';
$string['btn_deletesingle'] = 'Elimina la franja horària seleccionada';
$string['btn_edit'] = 'Edita les franges horàries seleccionades';
$string['btn_editsingle'] = 'Edita la franja horària seleccionada';
$string['btn_eval'] = 'Qualifica les franges horàries seleccionades';
$string['btn_eval_short'] = 'Qualifica';
$string['btn_evalsingle'] = 'Qualifica la franja horària seleccionada';
$string['btn_exportics'] = 'Exporta la franja horària seleccionada com un fitxer ICS';
$string['btn_print'] = 'Imprimeix les franges horàries seleccionades';
$string['btn_printsingle'] = 'Imprimeix la franja horària seleccionada';
$string['btn_queue'] = 'Posa a la cua';
$string['btn_reeval'] = 'Torna a avaluar';
$string['btn_register'] = 'Registra';
$string['btn_remind'] = 'Envia un recordatori';
$string['btn_reregister'] = 'Torna a registrar';
$string['btn_save'] = 'Desa el comentari';
$string['btn_send'] = 'Envia';
$string['btn_sendall'] = 'Envia recordatoris a tots els participants que tinguin un nombre insuficient de cites:';
$string['btn_start'] = 'Comença';
$string['btn_unqueue'] = 'Elimina de la cua';
$string['btn_unregister'] = 'Cancel·la el registre';
$string['calendarsettings'] = 'Paràmetres del calendari';
$string['can_reregister'] = 'Us podeu tornar a registrar per a una altra cita.';
$string['cannot_eval'] = 'No es pot avaluar; l\'estudiant té un/una';
$string['cfg_dontshowidentity'] = 'Amaga la identitat';
$string['cfg_dontshowidentity_desc'] = 'Amaga la identitat dels participants a la llista de franges horàries';
$string['cfg_limitedwidth'] = 'Àrea de contingut més petita';
$string['cfg_limitedwidth_desc'] = 'Utilitzeu una àrea de contingut més petita d\'estil 4.x de Moodle a l’organitzador. S\'utilitzen els valors per defecte de Moodle, però les entrades de taula llargues podrien ampliar-los.';
$string['changegradewarning'] = 'Aquest organitzador té cites qualificades; si en canvieu els paràmetres de qualificació, no es tornaran a calcular de manera automàtica les qualificacions existents. Si voleu canviar-los, haureu de tornar a qualificar totes les cites existents.';
$string['collision'] = 'Atenció! S\'ha detectat un conflicte amb els esdeveniments i/o les franges horàries següents:';
$string['configabsolutedeadline'] = 'El desplaçament predeterminat del selector de data i hora a partir de la data i hora actuals.';
$string['configahead'] = 'amb antelació';
$string['configallowcreationofpasttimeslots'] = 'Es permet crear franges horàries en el passat?';
$string['configday'] = 'dia';
$string['configdays'] = 'dies';
$string['configdigest'] = 'Envia un resum de les cites de l\'endemà al professor.';
$string['configdigest_label'] = 'Envia un resum de les cites als professors.';
$string['configdontsend'] = 'No l\'enviïs';
$string['configemailteachers'] = 'Envia notificacions per correu electrònic als professors sobre els canvis d\'estat dels registres.';
$string['configemailteachers_label'] = 'Envia notificacions per correu electrònic als professors';
$string['confighour'] = 'hora';
$string['confighours'] = 'hores';
$string['configintro'] = 'Els valors que establiu aquí defineixen els valors per defecte que s\'empren al formulari dels paràmetres quan creeu un organitzador nou.';
$string['configlocationlink'] = 'L\'enllaç a un motor de cerca que s\'empra per mostrar el camí a la ubicació. Poseu $searchstring a l\'URL, al lloc on hagi d\'anar la consulta de cerca de la ubicació.';
$string['configlocationslist'] = 'Ubicacions per al camp de compleció automàtica';
$string['configlocationslist_desc'] = 'Cada ubicació s\'ha d\'inserir a una línia separada.';
$string['configmaximumgrade'] = 'Estableix el valor per defecte seleccionat al camp de la qualificació quan es crea un organitzador nou. Aquesta és la qualificació màxima que es pot assignar a un estudiant per a la seva cita.';
$string['configminute'] = 'minut';
$string['configminutes'] = 'minuts';
$string['configmonth'] = 'mes';
$string['configmonths'] = 'mesos';
$string['confignever'] = 'Mai';
$string['configrelativedeadline'] = 'El temps d\'antelació per defecte amb què s\'hauria de notificar la cita als participants.';
$string['configrequiremodintro'] = 'Inhabiliteu aquesta opció si no voleu forçar els usuaris a introduir una descripció de cada activitat.';
$string['configsingleslotprintfield'] = 'camp d\'usuari que s\'imprimirà quan s\'imprimeixi una sola franja horària';
$string['configweek'] = 'setmana';
$string['configweeks'] = 'setmanes';
$string['configyear'] = 'any';
$string['confirm_conflicts'] = 'Confirmeu que voleu ignorar els conflictes i crear les franges horàries?';
$string['confirm_delete'] = 'Suprimeix';
$string['confirm_organizer_remind_all'] = 'Envia';
$string['create'] = 'Crea';
$string['created'] = 'Creat';
$string['createsubmit'] = 'Crea les franges horàries';
$string['crontaskname'] = 'Tasca cron de l\'organitzador';
$string['datapreviewtitle'] = 'Previsualització de les dades';
$string['datapreviewtitle_help'] = 'Cliqueu [+] o [-] per mostrar o ocultar columnes.';
$string['datetemplate'] = '%d.%m.%Y';
$string['datetime'] = 'Data i hora';
$string['datetime_help'] = 'Data i hora de la franja horària';
$string['day'] = 'dia';
$string['day_0'] = 'dilluns';
$string['day_1'] = 'dimarts';
$string['day_2'] = 'dimecres';
$string['day_3'] = 'dijous';
$string['day_4'] = 'divendres';
$string['day_5'] = 'dissabte';
$string['day_6'] = 'diumenge';
$string['day_pl'] = 'dies';
$string['dbid'] = 'ID de la base de dades';
$string['defaultsingleslotprintfields'] = 'Camps per defecte del perfil d\'usuari d\'una franja horària d\'impressió única';
$string['delete_organizer_grades'] = 'S\'estan suprimint les qualificacions de tots els organitzadors';
$string['deleteappointmentheader'] = 'Suprimeix aquesta cita';
$string['deleteheader'] = 'S\'estan suprimint les franges següents:';
$string['deletekeep'] = 'Es cancel·laran les cites següents. Se\'n notificarà els estudiants registrats i se suprimiran les franges horàries:';
$string['deletenoslots'] = 'No s\'ha seleccionat cap franja horària suprimible';
$string['deleteorganizergrades'] = 'Suprimeix les qualificacions del llibre de qualificacions';
$string['details'] = 'Detalls de l\'estat';
$string['details_help'] = 'Estat actual d\'aquesta franja horària.';
$string['downloadfile'] = 'Baixa el fitxer';
$string['duedate'] = 'Data de venciment';
$string['duedateerror'] = 'La data límit absoluta no pot ser anterior a la data de disponibilitat.';
$string['duration'] = 'Durada';
$string['duration_help'] = 'Defineix la durada de les cites. Tots els períodes de temps es dividiran en franges horàries que tindran la durada que definiu aquí. El temps que sobri no s\'emprarà (p. ex.: si el període de temps són 40 minuts i la durada s\'estableix a 15 minuts, hi haurà dues franges horàries en total amb 10 minuts extra sense emprar).';
$string['edit_notify_student:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, s\'han canviat els detalls de la cita amb {$a->sendername} el dia {$a->date} a les {$a->time}.

Professor o professora: {$a->slot_teacher}
Ubicació: {$a->slot_location}
Nombre màx. de participants: {$a->slot_maxparticipants}
Comentaris:
{$a->slot_comments}

Sistema de Missatgeria de Moodle';
$string['edit_notify_student:group:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, s\'han canviat els detalls de la cita de grup amb {$a->sendername} el dia {$a->date} a les {$a->time}.

Professor o professora: {$a->slot_teacher}
Ubicació: {$a->slot_location}
Nombre màx. de participants: {$a->slot_maxparticipants}
Comentaris:
{$a->slot_comments}

Sistema de Missatgeria de Moodle';
$string['edit_notify_student:group:smallmessage'] = 'S\'han canviat els detalls de la cita de grup amb {$a->sendername} el dia {$a->date} a les {$a->time}.';
$string['edit_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: canvis en els detalls de la cita';
$string['edit_notify_student:smallmessage'] = 'S\'han canviat els detalls de la cita amb {$a->sendername} el dia {$a->date} a les {$a->time}.';
$string['edit_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: canvis en els detalls de la cita';
$string['edit_notify_teacher:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, {$a->sendername} ha canviat els detalls de la franja horària del dia {$a->date} a les {$a->time}.

Professor o professora: {$a->slot_teacher}
Ubicació: {$a->slot_location}
Nombre màx. de participants: {$a->slot_maxparticipants}
Comentaris: {$a->slot_comments}

Sistema de Missatgeria de Moodle';
$string['edit_notify_teacher:group:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, {$a->sendername} ha canviat els detalls de la franja horària del dia {$a->date} a les {$a->time}.

Professor o professora: {$a->slot_teacher}
Ubicació: {$a->slot_location}
Nombre màx. de participants: {$a->slot_maxparticipants}
Comentaris: {$a->slot_comments}

Sistema de Missatgeria de Moodle';
$string['edit_notify_teacher:group:smallmessage'] = '{$a->sendername} ha canviat els detalls de la franja horària del dia {$a->date} a les {$a->time}.';
$string['edit_notify_teacher:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: canvis en els detalls de la cita';
$string['edit_notify_teacher:smallmessage'] = '{$a->sendername} ha canviat els detalls de la franja horària del dia {$a->date} a les {$a->time}.';
$string['edit_notify_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: canvis en els detalls de la cita';
$string['edit_submit'] = 'Confirma els canvis';
$string['emailteachers'] = 'Envia notificacions per correu electrònic als professors';
$string['emailteachers_help'] = 'Les notificacions per als professors quan un estudiant es registra per primera vegada a una franja horària solen estar desactivades per evitar el correu brossa. Activeu aquesta opció per habilitar que l\'organitzador enviï aquest tipus de notificacions als professors per correu electrònic. Cal tenir en compte que les notificacions de les cancel·lacions i els canvis a les franges horàries sempre s\'envien.';
$string['enableprintslotuserfields'] = 'Permet fer canvis als camps del perfil d\'usuari';
$string['enableprintslotuserfieldsdesc'] = 'Controla si es permet que els professors facin canvis als camps del perfil d\'usuari seleccionats per defecte a sota';
$string['err_availablefromearly'] = 'Aquesta data no pot ser posterior a la data d\'inici.';
$string['err_availablefromlate'] = 'Aquesta data no pot ser posterior a la data de finalització.';
$string['err_availablepastdeadline'] = 'Aquesta franja horària no estarà disponible després de la data límit de l\'agenda: ({$a->deadline}).';
$string['err_collision'] = 'Aquest període de temps es troba en conflicte amb altres períodes de temps:';
$string['err_comments'] = 'Heu d\'introduir una descripció.';
$string['err_enddate'] = 'La data de finalització no pot ser anterior a la data d\'inici.';
$string['err_fromto'] = 'L\'hora de finalització no pot ser anterior a l\'hora d’inici.';
$string['err_fullminute'] = 'La durada ha de ser un nombre enter de minuts.';
$string['err_fullminutegap'] = 'L\'interval entre cites ha de ser un nombre enter de minuts.';
$string['err_isgrouporganizer_app'] = 'No es pot canviar el mode de grup perquè aquest organitzador ja té cites programades.';
$string['err_location'] = 'Heu d\'introduir una ubicació.';
$string['err_norecipients'] = 'No s\'ha seleccionat cap destinatari.';
$string['err_noslots'] = 'No s\'ha seleccionat cap franja horària.';
$string['err_posint'] = 'Heu d\'introduir un nombre enter positiu.';
$string['err_startdate'] = 'La data d\'inici no pot ser anterior a la data d\'avui ({$a->now}).';
$string['eval_attended'] = 'Ha assistit';
$string['eval_feedback'] = 'Retroacció';
$string['eval_grade'] = 'Qualificació';
$string['eval_header'] = 'Franges horàries seleccionades';
$string['eval_link'] = 'cita nova';
$string['eval_no_participants'] = 'Aquesta franja horària no té cap participant';
$string['eval_not_occured'] = 'Aquesta franja horària encara no ha tingut lloc';
$string['eval_notify_newappointment:student:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, s\'ha avaluat la vostra cita amb {$a->sendername} el dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.

El professorat del curs permet que us torneu a registrar a qualsevol franja horària disponible a l\'organitzador {$a->organizername}.

Sistema de Missatgeria de Moodle';
$string['eval_notify_newappointment:student:group:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, s\'ha avaluat la vostra cita de grup amb {$a->sendername} el dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.

El professorat del curs permet que us torneu a registrar a qualsevol franja horària disponible a l\'organitzador {$a->coursefullname}.

Sistema de Missatgeria de Moodle';
$string['eval_notify_newappointment:student:group:smallmessage'] = 'S\'ha avaluat la vostra cita de grup del dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.';
$string['eval_notify_newappointment:student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: cita avaluada';
$string['eval_notify_newappointment:student:smallmessage'] = 'S\'ha avaluat la vostra cita del dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.';
$string['eval_notify_newappointment:student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: cita avaluada';
$string['eval_notify_student:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, s\'ha avaluat la vostra cita amb {$a->sendername} el dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.

Sistema de Missatgeria de Moodle';
$string['eval_notify_student:group:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, s\'ha avaluat la vostra cita de grup amb {$a->sendername} el dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.

Sistema de Missatgeria de Moodle';
$string['eval_notify_student:group:smallmessage'] = 'S\'ha avaluat la vostra cita de grup del dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.';
$string['eval_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: cita avaluada';
$string['eval_notify_student:smallmessage'] = 'S\'ha avaluat la vostra cita del dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.';
$string['eval_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: cita avaluada';
$string['evaluate'] = 'Avalua';
$string['event'] = 'Esdeveniment del calendari';
$string['eventappointmentadded'] = 'L\'estudiant s\'ha registrat a una franja horària.';
$string['eventappointmentassigned'] = 'El professor o la professora ha assignat la cita.';
$string['eventappointmentcommented'] = 'S\'ha comentat la cita.';
$string['eventappointmentdeleted'] = 'El professor o la professora ha suprimit la cita.';
$string['eventappointmentevaluated'] = 'S\'ha avaluat la cita.';
$string['eventappointmentlistprinted'] = 'S\'ha imprès la llista de cites.';
$string['eventappointmentremindersent'] = 'S\'ha enviat un recordatori de cita';
$string['eventappointmentremoved'] = 'L\'estudiant ha cancel·lat el seu registre a una franja horària.';
$string['eventappwith:group'] = 'Cita de grup';
$string['eventappwith:single'] = 'Cita';
$string['eventnoparticipants'] = 'Sense participants';
$string['eventqueueadded'] = 'S\'ha afegit a la llista d\'espera';
$string['eventqueueremoved'] = 'S\'ha eliminat de la llista d\'espera';
$string['eventregistrationsviewed'] = 'S\'ha visualitzat la pestanya de registres.';
$string['eventslotcreated'] = 'S\'han creat franges horàries noves.';
$string['eventslotdeleted'] = 'S\'ha suprimit la franja horària.';
$string['eventslotupdated'] = 'S\'ha actualitzat la franja horària.';
$string['eventslotviewed'] = 'S\'han visualitzat les franges horàries.';
$string['eventteacheranonymous'] = 'un professor anònim';
$string['eventtemplate'] = '{$a->courselink} / {$a->organizerlink}: {$a->appwith} {$a->with} {$a->participants}<br />Ubicació: {$a->location}<br />';
$string['eventtemplatecomment'] = 'Comentari:<br />{$a}<br />';
$string['eventtemplatewithoutlinks'] = '{$a->coursename} / {$a->organizername}: {$a->appwith} {$a->with} {$a->participants}<br />Ubicació: {$a->location}<br />';
$string['eventtitle'] = '{$a->coursename} / {$a->organizername}: {$a->appwith}';
$string['eventwith'] = 'amb';
$string['eventwithout'] = 'sense';
$string['exportics'] = 'Exporta ICS';
$string['exporticsaction'] = 'exporta ICS';
$string['exportsettings'] = 'Exporta els paràmetres';
$string['filtertable'] = 'Aplica filtres a aquesta taula';
$string['filtertable_help'] = 'Cerca aquí cadenes comunes en aquestes franges horàries.';
$string['finalgrade'] = 'Aquest valor s\'ha definit al llibre de qualificacions i no es pot canviar amb l\'organitzador.';
$string['font_large'] = 'gran';
$string['font_medium'] = 'mitjana';
$string['font_small'] = 'petita';
$string['format'] = 'Format';
$string['format_csv_comma'] = 'CSV (;)';
$string['format_csv_tab'] = 'CSV (tabulació)';
$string['format_ods'] = 'ODS';
$string['format_pdf'] = 'PDF';
$string['format_xls'] = 'XLS';
$string['format_xlsx'] = 'XLSX';
$string['fulldatelongtemplate'] = '%A %d. %B %Y';
$string['fulldatetemplate'] = '%a %d.%m.%Y';
$string['fulldatetimelongtemplate'] = '%A %d. %B %Y %H:%M';
$string['fulldatetimetemplate'] = '%a %d.%m.%Y %H:%M';
$string['fullname_template'] = '{$a->firstname} {$a->lastname}';
$string['gap'] = 'Interval entre dues cites';
$string['gap_help'] = 'Defineix l\'interval de temps lliure entre dues cites.';
$string['grade'] = 'Qualificació màxima';
$string['grade_help'] = 'Defineix la quantitat màxima de punts que es poden atorgar a qualsevol cita que es pugui qualificar.';
$string['gradeaggregationmethod'] = 'Mètode d\'agregació';
$string['gradeaggregationmethod_help'] = 'L\'agregació determina la manera com es combinen les qualificacions a una categoria; per exemple:

* Mitjana de les qualificacions. La suma de totes les qualificacions divida pel nombre total de qualificacions.
* Qualificació més baixa.
* Qualificació més alta.
* Natural. La suma de tots els valors de les qualificacions.';
$string['grading_desc_grade'] = 'La qualificació està activada.';
$string['grading_desc_nograde'] = 'La qualificació està desactivada.';
$string['group_registration_notify:student:queue:group:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, {$a->sendername} ha afegit el vostre grup {$a->groupname} a la llista d\'espera de la franja horària del dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.

Sistema de Missatgeria de Moodle';
$string['group_registration_notify:student:queue:group:smallmessage'] = '{$a->sendername} ha afegit el vostre grup {$a->groupname} a la llista d\'espera de la franja horària del dia {$a->date} a les {$a->time}.';
$string['group_registration_notify:student:queue:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: grup en llista d\'espera';
$string['group_registration_notify:student:register:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, {$a->sendername} ha registrat el vostre grup {$a->groupname} a la franja horària del dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.

Sistema de Missatgeria de Moodle';
$string['group_registration_notify:student:register:group:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, {$a->sendername} ha registrat el vostre grup {$a->groupname} a la franja horària del dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.

Sistema de Missatgeria de Moodle';
$string['group_registration_notify:student:register:group:smallmessage'] = '{$a->sendername} ha registrat el vostre grup {$a->groupname} a la franja horària del dia {$a->date} a les {$a->time}.';
$string['group_registration_notify:student:register:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: grup registrat';
$string['group_registration_notify:student:register:smallmessage'] = '{$a->sendername} ha registrat el vostre grup {$a->groupname} a la franja horària del dia {$a->date} a les {$a->time}.';
$string['group_registration_notify:student:register:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: grup registrat';
$string['group_registration_notify:student:reregister:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, {$a->sendername} ha tornat a registrar el vostre grup {$a->groupname} a una franja horària nova el dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.

Sistema de Missatgeria de Moodle';
$string['group_registration_notify:student:reregister:group:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, {$a->sendername} ha tornat a registrar el vostre grup {$a->groupname} a una franja horària nova el dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.

Sistema de Missatgeria de Moodle';
$string['group_registration_notify:student:reregister:group:smallmessage'] = '{$a->sendername} ha tornat a registrar el vostre grup {$a->groupname} a una franja horària nova el dia {$a->date} a les {$a->time}.';
$string['group_registration_notify:student:reregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: s\'ha tornat a registrar el grup';
$string['group_registration_notify:student:reregister:smallmessage'] = '{$a->sendername} ha tornat a registrar el vostre grup {$a->groupname} a una franja horària nova el dia {$a->date} a les {$a->time}.';
$string['group_registration_notify:student:reregister:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: s\'ha tornat a registrar el grup';
$string['group_registration_notify:student:unqueue:group:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, {$a->sendername} ha eliminat el vostre grup {$a->groupname} de la llista d\'espera de la franja horària del dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.

Sistema de Missatgeria de Moodle';
$string['group_registration_notify:student:unqueue:group:smallmessage'] = '{$a->sendername} ha eliminat el vostre grup {$a->groupname} de la llista d\'espera de la franja horària del dia {$a->date} a les {$a->time}.';
$string['group_registration_notify:student:unqueue:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: grup eliminat de la llista d\'espera';
$string['group_registration_notify:student:unregister:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, {$a->sendername} ha cancel·lat el registre del vostre grup {$a->groupname} a la franja horària del dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.

Sistema de Missatgeria de Moodle';
$string['group_registration_notify:student:unregister:group:fullmessage'] = 'Hola, {$a->receivername},

Com a part del curs {$a->courseid} {$a->coursefullname}, {$a->sendername} ha cancel·lat el registre del vostre grup {$a->groupname} a la franja horària del dia {$a->date} a les {$a->time} a la ubicació següent: {$a->location}.

Sistema de Missatgeria de Moodle';
$string['group_registration_notify:student:unregister:group:smallmessage'] = '{$a->sendername} ha cancel·lat el registre del vostre grup {$a->groupname} a la franja horària del dia {$a->date} a les {$a->time}.';
$string['group_registration_notify:student:unregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: s\'ha cancel·lat el registre de grup';
$string['group_registration_notify:student:unregister:smallmessage'] = '{$a->sendername} ha cancel·lat el registre del vostre grup {$a->groupname} a la franja horària del dia {$a->date} a les {$a->time}.';
$string['group_registration_notify:student:unregister:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}]: s\'ha cancel·lat el registre de grup';
$string['group_slot_available'] = 'Franja horària disponible';
$string['group_slot_full'] = 'Franja horària ocupada';
$string['groupmodeexistingcoursegroups'] = 'Utilitza els grups de curs existents';
$string['groupmodenogroups'] = 'Sense cites de grup';
$string['groupmodeslotgroups'] = 'Creació d\'un grup per a cada franja horària buida';
$string['groupmodeslotgroupsappointment'] = 'Creació d\'un grup per a cada franja horària reservada';
$string['groupoptions'] = 'Paràmetres del grup';
$string['grouporganizer_desc'] = 'Aquest és un organizador de grup.';
$string['grouporganizer_desc_novalidgroup'] = 'Aquest és un organitzador de grup. No sou membre d\'un grup inclòs en aquesta instància d\'organitzador.';
$string['grouporganizer_desc_participant'] = 'Aquest és un organitzador de grup. En clicar el botó de registre, vós i també tots els membres del vostre grup {$a->groupname} us registrareu en aquesta franja horària. Tots els membres del grup poden canviar el registre i comentar-lo.';
$string['grouppicker'] = 'Selector de grup';
$string['groupwarning'] = 'Comproveu les opcions de grup a sota.';
$string['headerfooter'] = 'Imprimeix la capçalera / el peu de pàgina';
$string['headerfooter_help'] = 'Si es marca aquesta opció, s\'imprimeix la capçalera / el peu de pàgina';
$string['hidecalendar'] = 'Amaga el calendari';
$string['hidecalendar_help'] = 'Activeu aquesta opció per amagar el calendari en aquest organitzador';
$string['hour'] = 'h';
$string['hour_pl'] = 'h';
$string['id'] = 'ID';
$string['img_title_due'] = 'La franja horària es pot reservar';
$string['img_title_evaluated'] = 'La franja horària està avaluada';
$string['img_title_full'] = 'La franja horària està completa';
$string['img_title_no_participants'] = 'La franja horària no té cap participant';
$string['img_title_past_deadline'] = 'La data límit de la franja horària ja ha passat';
$string['img_title_pending'] = 'La franja horària està pendent d\'avaluació';
$string['includetraineringroups'] = 'Inclou el professor als grups';
$string['includetraineringroups_help'] = 'Si activeu la casella de selecció, s\'inclouran als grups no només els participants de la franja horària sinó també els seus professors.';
$string['infobox_app_countdown'] = 'Temps restant per a la cita: {$a->days} dies, {$a->hours} hores, {$a->minutes} minuts, {$a->seconds} segons';
$string['infobox_app_inprogress'] = 'La cita està en curs.';
$string['infobox_app_occured'] = 'La cita ja ha tingut lloc.';
$string['infobox_appointmentsstatus_pl'] = '{$a->tooless} reserves han vençut. Queden {$a->places} llocs lliures a {$a->slots} franges horàries pròximes.';
$string['infobox_appointmentsstatus_sg'] = '{$a->tooless} reserves han vençut. Queden {$a->places} llocs lliures a {$a->slots} franges horàries pròximes.';
$string['infobox_counter_slotrows'] = 'franges horàries mostrades.';
$string['infobox_deadline_countdown'] = 'Temps restant per a la data límit: {$a->days} dies, {$a->hours} hores, {$a->minutes} minuts, {$a->seconds} segons';
$string['infobox_deadline_passed'] = 'La data límit per registrar-se ha passat. Ja no podeu canviar els registres.';
$string['infobox_deadline_passed_slot'] = 'No s\'han pogut crear xxx franges horàries perquè la data límit per registrar-se ha passat.';
$string['infobox_deadline_passed_slotphp'] = 'No s\'han pogut crear {$a->slots} franges horàries perquè la data límit per registrar-se ha passat.';
$string['infobox_deadlines_title'] = 'Dates límit';
$string['infobox_description_title'] = 'Descripció de l\'organitzador';
$string['infobox_feedback_title'] = 'Retroacció';
$string['infobox_group'] = 'El meu grup: {$a->groupname}';
$string['infobox_link'] = 'Mostra/Amaga';
$string['infobox_messages_title'] = 'Missatges del sistema';
$string['infobox_minmax'] = 'Reserves per usuari: mínim {$a->min} - màxim {$a->max}.';
$string['infobox_mycomments_title'] = 'Els meus comentaris';
$string['infobox_myslot_noslot'] = 'Ara com ara no us heu registrat a cap franja horària.';
$string['infobox_myslot_title'] = 'Les meves franges horàries';
$string['infobox_myslot_userslots_left'] = 'Us queden {$a->left} reserves.';
$string['infobox_myslot_userslots_left_group'] = 'Al vostre grup li queden {$a->left} reserves.';
$string['infobox_myslot_userslots_max_reached'] = 'Heu reservat la quantitat màxima de franges horàries següent: {$a->max}.';
$string['infobox_myslot_userslots_max_reached_group'] = 'El vostre grup ha reservat la quantitat màxima de franges horàries següent: {$a->max}.';
$string['infobox_myslot_userslots_min_not_reached'] = 'Encara no heu reservat la quantitat requerida de franges horàries següent: {$a->min}.';
$string['infobox_myslot_userslots_min_not_reached_group'] = 'El vostre grup encara no ha reservat la quantitat requerida de franges horàries següent: {$a->min}.';
$string['infobox_myslot_userslots_min_reached'] = 'Heu reservat correctament la quantitat requerida de franges horàries següent: {$a->min}.';
$string['infobox_myslot_userslots_min_reached_group'] = 'El vostre grup ha reservat la quantitat requerida de franges horàries següent: {$a->min}.';
$string['infobox_myslot_userslots_status'] = '{$a->booked} de {$a->max} franges horàries reservades.';
$string['infobox_organizer_expired'] = 'Aquest organitzador va caducar el dia {$a->date} a l\'hora següent: {$a->time}';
$string['infobox_organizer_expires'] = 'Aquest organitzador caducarà el dia {$a->date} a l\'hora següent: {$a->time}.';
$string['infobox_organizer_never_expires'] = 'Aquest organitzador no caduca mai.';
$string['infobox_registrationstatistic_title'] = 'Resum';
$string['infobox_showallparticipants'] = 'Mostra tots els participants';
$string['infobox_showfreeslots'] = 'Només les franges horàries lliures';
$string['infobox_showhiddenslots'] = 'Franges horàries ocultes';
$string['infobox_showmyslotsonly'] = 'Només les meves franges horàries';
$string['infobox_showregistrationsonly'] = 'Només les franges horàries reservades';
$string['infobox_showslots'] = 'També les franges horàries passades';
$string['infobox_slotoverview_title'] = 'Vista general de la franja horària';
$string['infobox_slotsviewoptions'] = 'Opcions especials del filtre';
$string['infobox_slotsviewoptions_help'] = 'Aquestes opcions del filtre es combinen amb conjuncions «i» (AND).';
$string['infobox_statistic_maxreached'] = '{$a->maxreached} de {$a->entries} participants van reservar la quantitat màxima de franges horàries següent:  {$a->max}.';
$string['infobox_statistic_maxreached_group'] = '{$a->maxreached} de {$a->entries} grups han reservat la quantitat màxima de franges horàries següent: {$a->max}.';
$string['infobox_statistic_minreached'] = '{$a->minreached} de {$a->entries} participants van reservar la quantitat requerida de franges horàries següent: {$a->min}.';
$string['infobox_statistic_minreached_group'] = '{$a->minreached} de {$a->entries} grups van arribar a la quantitat requerida de franges horàries següent: {$a->min}.';
$string['infobox_title'] = 'Quadre d\'informació';
$string['introeditor_error'] = 'S\'ha de donar una descripció de l\'organitzador.';
$string['invalidgrouping'] = 'Heu de seleccionar un agrupament vàlid.';
$string['inwaitingqueue'] = 'Llista d\'espera';
$string['isgrouporganizer'] = 'Cites de grup';
$string['isgrouporganizer_help'] = 'Activeu aquesta opció si voleu que aquest organitzador treballi amb grups en lloc de fer-ho amb usuaris individuals. «Utilitza els grups de curs existents»: una sola persona del grup reserva una franja horària per a tot el grup. «Creació d\'un grup per a cada franja horària buida»: es crea un grup de curs per a cada franja horària nova. «Creació d\'un grup per a cada franja horària reservada»: es crea un grup de curs per a cada franja horària reservada.';
$string['location'] = 'Ubicació';
$string['location_help'] = 'El lloc en el qual es durà a terme la cita.';
$string['locationlink'] = 'URL de l\'enllaç de la ubicació';
$string['locationlink_help'] = 'Escriviu aquí l\'adreça completa del lloc web al qual voleu que es refereixi l\'enllaç d\'ubicació. Aquest lloc hauria de contenir, almenys, la informació sobre com arribar a la ubicació. Escriviu-ne l\'adreça completa (incloeu-hi http://)';
$string['locationlinkenable'] = 'Enllaç automàtic d\'informació de la ubicació';
$string['locationmandatory'] = 'És obligatori indicar la ubicació de la franja horària';
$string['locationsettings'] = 'Paràmetres de la ubicació de la franja horària';
$string['maillink'] = 'L\'organitzador està disponible <a href=\'{$a}\'>aquí</a>.';
$string['maxparticipants'] = 'Nombre màxim de participants';
$string['maxparticipants_help'] = 'Defineix el nombre màxim d\'estudiants que es poden registrar o inscriure en aquestes franges horàries. En el cas d\'un organitzador de grup aquest número sempre està limitat a un.';
$string['message_autogenerated2'] = 'Missatge generat de manera automàtica';
$string['message_custommessage'] = 'Missatge personalitzat';
$string['message_custommessage_help'] = 'Utilitzeu aquest camp per introduir un text personalitzat al missatge generat de manera automàtica.';
$string['message_error_action_notallowed'] = 'Aquesta acció ja no és factible. Navegueu cap enrere i actualitzeu el vostre navegador.';
$string['message_error_groupsynchronization'] = 'Ha fallat la sincronització del grup de franja horària.';
$string['message_error_noactionchosen'] = 'Trieu una acció abans de clicar el botó d’inici.';
$string['message_error_slot_full_group'] = 'Aquesta franja horària ja està ocupada.';
$string['message_error_slot_full_single'] = 'Aquesta franja horària no té cap lloc lliure.';
$string['message_error_unknown_unqueue'] = 'La vostra entrada a la llista d\'espera no s\'ha pogut eliminar. Error desconegut.';
$string['message_error_unknown_unregister'] = 'El vostre registre no s\'ha pogut eliminar. Error desconegut.';
$string['message_info_appointment_deleted'] = 'S\'ha suprimit la cita. S\'ha tramès la notificació a la persona participant.';
$string['message_info_appointment_deleted_group'] = 'S\'han suprimit les cites d\'un grup. S\'ha tramès la notificació a les persones participants.';
$string['message_info_appointment_not_deleted'] = 'S\'ha produït un problema en suprimir les cites.';
$string['message_info_queued'] = 'Us han afegit a la llista d\'espera d\'una franja horària';
$string['message_info_queued_group'] = 'El vostre grup ha estat afegit a la llista d\'espera d\'una franja horària';
$string['message_info_registered'] = 'Us heu registrat correctament a una franja horària.';
$string['message_info_registered_group'] = 'El vostre grup s\'ha registrat correctament a una franja horària.';
$string['message_info_reminders_sent_pl'] = 'S\'han enviat {$a->count} recordatoris.';
$string['message_info_reminders_sent_sg'] = 'S\'ha enviat {$a->count} recordatori.';
$string['message_info_reregistered'] = 'Us heu tornat a registrar correctament a una franja horària.';
$string['message_info_reregistered_group'] = 'El vostre grup s\'ha tornat a registrar correctament a una franja horària.';
$string['message_info_slots_added_pl'] = 'S\'han afegit {$a->count} franges horàries noves.';
$string['message_info_slots_added_sg'] = 'S\'ha afegit {$a->count} franja horària nova.';
$string['message_info_slots_deleted_pl'] = 'S\'han suprimit {$a->deleted} franges horàries. S\'ha tramès la notificació a {$a->notified} participants.';
$string['message_info_slots_deleted_sg'] = 'S\'ha suprimit una franja horària. S\'ha tramès la notificació a {$a->notified} participants.';
$string['message_info_slots_edited_pl'] = 'S\'han editat {$a->count} franges horàries.';
$string['message_info_slots_edited_sg'] = 'S\'ha editat {$a->count} franja horària.';
$string['message_info_slots_evaluated_pl'] = 'S\'ha qualificat el nombre de participants següent: {$a->count}.';
$string['message_info_slots_evaluated_sg'] = 'S\'ha qualificat {$a->count} participant.';
$string['message_info_unqueued'] = 'Us han eliminat de la llista d\'espera d\'una franja horària.';
$string['message_info_unqueued_group'] = 'El vostre grup ha estat eliminat de la llista d\'espera d\'una franja horària.';
$string['message_info_unregistered'] = 'Heu cancel·lat el vostre registre a una franja horària correctament.';
$string['message_info_unregistered_group'] = 'El vostre grup ha cancel·lat el registre a una franja horària correctament.';
$string['message_warning_no_slots_added'] = 'No s\'ha afegit cap franja horària nova.';
$string['message_warning_no_slots_selected'] = 'Primer heu de seleccionar almenys una franja horària.';
$string['message_warning_no_visible_slots_selected'] = 'Primer heu de seleccionar almenys una franja horària VISIBLE.';
$string['messageprovider:appointment_reminder_student'] = 'Recordatori de cita de l\'organitzador';
$string['messageprovider:appointment_reminder_teacher'] = 'Recordatori de cita de l\'organitzador (docent)';
$string['messageprovider:appointmentdeleted_notify_student'] = 'S\'ha suprimit la cita de l\'organitzador';
$string['messageprovider:assign_notify_student'] = 'El professor o la professora ha assignat una franja horària de l\'organitzador';
$string['messageprovider:assign_notify_teacher'] = 'Assignació de l\'organitzador de tutories';
$string['messageprovider:edit_notify_student'] = 'Canvis de l\'organitzador';
$string['messageprovider:edit_notify_teacher'] = 'Canvis de l\'organitzador (docent)';
$string['messageprovider:eval_notify_student'] = 'Notificació d\'avaluació de l\'organitzador';
$string['messageprovider:group_registration_notify_student'] = 'Notificació de registre de grup de l\'organitzador';
$string['messageprovider:manual_reminder_student'] = 'Recordatori de cita manual de l\'organitzador';
$string['messageprovider:register_notify_teacher'] = 'Notificació de registre de l\'organitzador';
$string['messages_all'] = 'Totes les inscripcions, reinscripcions i cancel·lacions';
$string['messages_none'] = 'Sense notificacions d\'inscripcions';
$string['messages_re_unreg'] = 'Només les reinscripcions i les cancel·lacions';
$string['modulename'] = 'Organitzador';
$string['modulename_help'] = 'Els organitzadors permeten que els professors concertin cites amb els estudiants mitjançant la creació de franges horàries en què els estudiants es poden registrar.';
$string['modulenameplural'] = 'Organitzadors';
$string['multipleappointmentenddate'] = 'Data de finalització';
$string['multipleappointmentstartdate'] = 'Data d\'inici';
$string['mymoodle_no_reg_slot'] = 'Heu reservat {$a->booked} franges horàries i encara no heu arribat a la quantitat mínima de franges horàries següent: {$a->slotsmin}.';
$string['mymoodle_reg_slot'] = 'Heu reservat {$a->booked} franges horàries i, per tant, heu arribat a la quantitat mínima de reserves següent: {$a->slotsmin}.';
$string['no_my_slots'] = 'No teniu cap franja horària creada en aquest organitzador';
$string['no_slots'] = 'No hi ha cap franja horària creada en aquest organitzador';
$string['nocalendareventslotcreation'] = 'Sense esdeveniments de calendari per a les franges horàries buides';
$string['nocalendareventslotcreation_help'] = 'Si activeu aquesta opció no es crearà cap esdeveniment de calendari quan es creïn les franges horàries. Només crearan esdeveniments de calendari les cites.';
$string['noparticipants'] = 'Sense participants';
$string['noreregistrations'] = 'Sense reinscripcions després de la data límit';
$string['noreregistrations_help'] = 'Si una franja horària reservada ha arribat a la data límit, ja no pot ser la font d\'una reinscripció.';
$string['nosingleslotprintfields'] = 'La impressió no és possible. No hi ha cap camp d\'usuari definit. Vegeu els paràmetres de l\'organitzador.';
$string['notificationtime'] = 'Recordatori relatiu de la cita';
$string['notificationtime_help'] = 'Defineix amb quina antelació cal recordar la cita a l\'estudiant.';
$string['numentries'] = 'Nombre d\'entrades que es mostren per pàgina';
$string['numentries_help'] = 'Trieu «distribució òptima» per optimitzar la distribució de les entrades de la llista segons la mida del text i l\'orientació de la pàgina elegides, si teniu molts de participants inscrits al vostre curs.';
$string['organizer'] = 'Organitzador';
$string['organizer_remind_all_title'] = 'Envia recordatoris';
$string['organizercommon'] = 'Paràmetres de l\'organitzador';
$string['organizername'] = 'Nom de l\'organitzador';
$string['orientationlandscape'] = 'horitzontal';
$string['orientationportrait'] = 'vertical';
$string['otherheader'] = 'Altres';
$string['pageorientation'] = 'Orientació de la pàgina';
$string['participants_help'] = 'Llista de participants que han reservat aquesta franja horària.';
$string['pdfsettings'] = 'Paràmetres del PDF';
$string['places_taken_sg'] = 'Nombre de llocs ocupats: {$a->numtakenplaces}/{$a->totalplaces}';
$string['pluginname'] = 'Organitzador';
$string['print_return'] = 'Torna a la vista general de la franja horària';
$string['privacy:metadata:showmyslotsonly'] = 'Preferència d\'usuari: La taula de franges horàries només n\'hauria de mostrar les meves.';
$string['queue'] = 'Cues d\'espera';
$string['queue_help'] = 'Les cues d\'espera permeten que els usuaris s\'inscriguin a una franja horària encara que se n\'hagi assolit el nombre màxim de participants.

Els usuaris queden afegits a una cua d\'espera; tan aviat com una franja horària esdevé disponible se\'ls assigna (per ordre).';
$string['reg_status'] = 'Estat dels registres';
$string['relative_deadline_before'] = 'abans de la cita';
$string['relative_deadline_now'] = 'Comença ara';
$string['relativedeadline'] = 'Data límit relativa';
$string['relativedeadline_help'] = 'Estableix la data límit per sol·licitar una franja horària determinada amb un temps d\'antelació concret. Els estudiants no podran canviar el seu registre o cancel·lar-lo una vegada que la data límit hagi vençut.';
$string['remindall_desc'] = 'Envia recordatoris a tots els participants que no tenen cap cita';
$string['remindallmultiple_desc'] = 'Envia recordatoris a tots els participants que tinguin un nombre insuficient de cites';
$string['searchfilter'] = 'Cerca / Filtra';
$string['select'] = 'Selecciona franges horàries';
$string['selectedslots'] = 'Franges horàries seleccionades';
$string['showmore'] = 'Mostra\'n més';
$string['signature'] = 'Signatura';
$string['singleslotcommands'] = 'Acció d\'una sola franja horària';
$string['singleslotcommands_help'] = 'Cliqueu un botó d\'acció per fer feina directament en una franja horària.';
$string['singleslotprintfield'] = 'Imprimeix el camp d\'usuari de la franja horària';
$string['singleslotprintfield0'] = 'Imprimeix el camp d\'usuari de la franja horària';
$string['singleslotprintfields'] = 'Camps del perfil d\'usuari de la franja horària d\'impressió única';
$string['singleslotprintfields_help'] = 'En aquesta secció definiu els camps personals addicionals que s\'imprimiran per a cada participant quan s\'imprimeixi una sola franja horària.';
$string['slot_anonymous'] = 'Franja anònima';
$string['slot_slotvisible'] = 'Visibles només per als membres de la mateixa franja horària';
$string['slot_visible'] = 'Els membres d\'aquesta franja sempre seran visibles';
$string['slotdetails'] = 'Detalls de la franja horària';
$string['slotfrom'] = 'de';
$string['slotoptionstable'] = 'Amplia aquesta taula';
$string['slotoptionstable_help'] = 'Mostra també les franges horàries passades o ocultes.';
$string['slotperiodendtime'] = 'Data de finalització';
$string['slotperiodheader'] = 'Genera franges horàries dins un interval de dates';
$string['slotperiodheader_help'] = 'Especifiqueu la data d\'inici i de finalització del període durant el qual seran vigents les franges horàries diàries de la secció inferior. Especifiqueu també aquí si les franges horàries seran visibles per als estudiants.';
$string['slotperiodstarttime'] = 'Data d\'inici';
$string['slotto'] = 'a';
$string['status_help'] = 'Estat actual d\'aquesta franja horària.';
$string['stroptimal'] = 'distribució òptima';
$string['synchronizegroupmembers'] = 'Sincronitza els membres del grup';
$string['synchronizegroupmembers_help'] = 'Si els membres del grup de Moodle canvien, les modificacions es reflectiran a les franges horàries reservades.';
$string['taballapp'] = 'Cites';
$string['tabstatus'] = 'Estat dels registres';
$string['tabstud'] = 'Visualització de l\'estudiant';
$string['teacher'] = 'Docent';
$string['teacher_help'] = 'Llista de personal docent d\'aquesta franja horària.';
$string['teachervisible'] = 'Docent visible';
$string['teachervisible_help'] = 'Activeu aquesta opció si voleu permetre que els estudiants vegin el personal docent associat amb la franja horària.';
$string['textsize'] = 'Mida del text';
$string['th_actions'] = 'Acció';
$string['th_appdetails'] = 'Detalls';
$string['th_bookings'] = 'Total de reserves';
$string['th_datetime'] = 'Data i hora';
$string['th_datetimedeadline'] = 'Data i hora';
$string['th_details'] = 'Estat';
$string['th_duration'] = 'Durada';
$string['th_group'] = 'Grup';
$string['th_groupname'] = 'Grup';
$string['th_location'] = 'Ubicació';
$string['th_status'] = 'Estat';
$string['th_teacher'] = 'Docent';
$string['title_add'] = 'Afegeix franges horàries noves per a les cites';
$string['title_delete'] = 'Suprimeix les franges horàries seleccionades';
$string['title_edit'] = 'Edita les franges horàries seleccionades';
$string['title_eval'] = 'Avalua les franges horàries seleccionades';
$string['title_print'] = 'Imprimeix les franges horàries';
$string['totalday_groups'] = 'xxx franges horàries per a yyy grups';
$string['totaltotal_groups'] = 'Total: xxx franges horàries per a yyy grups';
$string['trainerid'] = 'Docent';
$string['trainerid_help'] = 'Seleccioneu el professor o la professora que voleu que dirigeixi les cites';
$string['unavailableslot'] = 'Aquesta franja horària està disponible des de';
$string['unknown'] = 'Desconegut';
$string['userslotsdailymax'] = 'Nombre màxim de franges horàries per participant o grup per dia';
$string['userslotsdailymax_help'] = 'Quantitat de franges horàries que un participant o un grup pot reservar per dia. «0» significa que no hi ha cap límit diari.';
$string['userslotsmax'] = 'Nombre màxim de franges horàries per participant o grup';
$string['userslotsmax_help'] = 'Quantitat de franges horàries que un participant o un grup pot reservar';
$string['userslotsmin'] = 'Nombre mínim de franges horàries per participant o grup';
$string['userslotsmin_help'] = 'Nombre mínim de franges horàries que un participant o un grup  ha de reservar.';
$string['visibility'] = 'Visibilitat dels membres; configuració predeterminada';
$string['visibility_all'] = 'Visibles';
$string['visibility_anonymous'] = 'Anonimat';
$string['visibility_help'] = 'Definició de l\'opció de visibilitat per defecte amb la qual es crearà una franja horària nova. <br/><b>Anonimat</b>: Els membres d\'aquesta franja sempre seran invisibles per a tothom.<br/><b>Visibles</b>: Tots els membres d\'aquesta franja sempre seran visibles per a tothom.<br/><b> Visibles només per als membres de la franja horària</b>: Només els membres de la franja es poden veure entre si.';
$string['visibility_slot'] = 'Visibles només per als membres de la franja horària';
$string['visible'] = 'Franja horària visible';
$string['waitinglists_desc_active'] = 'Les llistes d\'espera estan activades.';
$string['waitinglists_desc_notactive'] = 'Les llistes d\'espera estan desactivades.';
$string['warningtext1'] = 'Les franges horàries seleccionades contenen valors diferents en aquest camp.';
$string['weekdaylabel'] = 'Dia de la setmana';
