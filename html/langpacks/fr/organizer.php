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
 * Strings for component 'organizer', language 'fr', version '3.11'.
 *
 * @package     organizer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absolutedeadline'] = 'Fin des inscriptions';
$string['absolutedeadline_help'] = 'Cochez cette case pour définir le moment après lequel les étudiants ne peuvent plus rien changer';
$string['actionlink_delete'] = 'Effacer';
$string['actionlink_edit'] = 'Modifier';
$string['actionlink_eval'] = 'Noter';
$string['actionlink_print'] = 'Imprimer';
$string['addappointment'] = 'Ajouter un rendez-vous';
$string['addslots_placesinfo'] = 'Cette action créera {$a->numplaces} nouvelles places possibles, pour un total de {$a->totalplaces} places possibles pour {$a->numstudents} étudiants.';
$string['addslots_placesinfo_group'] = 'Cette action créera {$a->numplaces} nouvelles places possibles, pour un total de {$a->totalplaces} places possibles pour {$a->numstudents} groupes.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Les détails de l\'agenda et le formulaire d\'inscription seront disponibles à partir de <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Début des inscriptions';
$string['allowsubmissionsfromdate_help'] = 'Cochez ici si vous voulez que l\'agenda soit accessible aux étudiants après une certaine date.';
$string['allowsubmissionsfromdatesummary'] = 'Cet agenda acceptera les inscriptions à partir de <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Toujours afficher la description';
$string['alwaysshowdescription_help'] = 'Si cette case est décochée, la description du devoir ci-dessus ne sera visible pour les étudiants qu\'à partir de la date de début des inscriptions.';
$string['applicant'] = 'La personne qui a inscrit le groupe';
$string['appointment_reminder_student:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, vous avez un rendez-vous avec {$a->sendername} le {$a->date} à {$a->time} dans le local {$a->location}.

Système de messagerie Moodle';
$string['appointment_reminder_student:group:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, vous avez un rendez-vous de groupe avec {$a->sendername} le {$a->date} à {$a->time} dans le local {$a->location}.

Système de messagerie Moodle';
$string['appointment_reminder_student:group:smallmessage'] = 'Vous avez un rendez-vous de groupe avec {$a->sendername} le {$a->date} à {$a->time} dans le local {$a->location}.';
$string['appointment_reminder_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Rappel de rendez-vous de groupe';
$string['appointment_reminder_student:smallmessage'] = 'Vous avez un rendez-vous avec {$a->sendername} le {$a->date} à {$a->time} dans le local {$a->location}.';
$string['appointment_reminder_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Rappel de rendez-vous';
$string['appointment_reminder_teacher:digest:fullmessage'] = 'Bonjour {$a->receivername},

Demain, vous avez le rendez-vous suivant:

{$a->digest}

Système de messagerie Moodle';
$string['appointment_reminder_teacher:digest:smallmessage'] = 'Vous avez reçu un message avec le résumé de votre rendez-vous de demain.';
$string['appointment_reminder_teacher:digest:subject'] = 'Résumé du rendez-vous';
$string['appointment_reminder_teacher:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, vous avez un rendez-vous avec des étudiants le {$a->date} à {$a->time} dans le local {$a->location}.

Système de messagerie Moodle';
$string['appointment_reminder_teacher:group:digest:fullmessage'] = 'Bonjour {$a->receivername},

Demain, vous avez les rendez-vous suivants:

{$a->digest}

Système de messagerie Moodle';
$string['appointment_reminder_teacher:group:digest:smallmessage'] = 'Vous avez reçu un message avec le résumé de vos rendez-vous de demain.';
$string['appointment_reminder_teacher:group:digest:subject'] = 'Résumé des rendez-vous';
$string['appointment_reminder_teacher:smallmessage'] = 'Vous avez un rendez-vous avec des étudiants le {$a->date} à {$a->time} dans le local {$a->location}.';
$string['appointment_reminder_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Rappel de rendez-vous';
$string['appointmentcomments'] = 'Commentaires';
$string['appointmentcomments_help'] = 'Vous pouvez ajouter des informations sur les plages horaires ici.';
$string['appointmentdatetime'] = 'Date et heure';
$string['assign'] = 'Attribuer';
$string['assign_notify_student:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, {$a->sendername} vous a fixé un rendez-vous avec {$a->slot_teacher} le {$a->date} à {$a->time}.

Enseignant: {$a->slot_teacher}
Lieu/local: {$a->slot_location}
Date: {$a->date} à {$a->time}

Système de messagerie Moodle';
$string['assign_notify_student:group:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, {$a->sendername} a fixé un rendez-vous à votre groupe {$a->groupname} avec {$a->slot_teacher} le {$a->date} à {$a->time}.

Enseignant: {$a->slot_teacher}
Lieu/local: {$a->slot_location}
Date: {$a->date} à {$a->time}

Système de messagerie Moodle';
$string['assign_notify_student:group:smallmessage'] = 'Votre groupe';
$string['assign_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Rendez-vous fixé par l\'enseignant';
$string['assign_notify_student:smallmessage'] = '{$a->sendername} vous a fixé un rendez-vous avec {$a->slot_teacher} le {$a->date} à {$a->time}.';
$string['assign_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Rendez-vous fixé par l\'enseignant';
$string['assign_notify_teacher:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, {$a->sendername} vous a fixé un rendez-vous avec {$a->participantname} le {$a->date} à {$a->time}.

Participant: {$a->participantname}
Lieu/local: {$a->slot_location}
Date: {$a->date} à {$a->time}

Système de messagerie Moodle';
$string['assign_notify_teacher:group:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, {$a->sendername} vous a fixé un rendez-vous avec le groupe {$a->groupname} le {$a->date} à {$a->time}.

Groupe: {$a->groupname}
Lieu/local: {$a->slot_location}
Date: {$a->date} à {$a->time}

Système de messagerie Moodle';
$string['assign_title'] = 'Attribuer le rendez-vous';
$string['assignsuccess'] = 'Le créneau a été attribué avec succès et le-s particiant-s a/ont été notifié-s.';
$string['atlocation'] = 'à';
$string['availability'] = 'Disponibilité';
$string['availablefrom'] = 'Les demandes seront possibles à partir de';
$string['availablefrom_help'] = 'Détermine la période pendant laquelle les étudiants pourront s\'inscrire pour ces créneaux. Sinon, cochez "Dès maintenant" pour leur permettre de s\'inscrire immédiatement.';
$string['availablegrouplist'] = 'Groupes disponibles';
$string['availableslotsfor'] = 'Créneaux disponibles pour';
$string['back'] = 'Retour';
$string['btn_add'] = 'Ajouter de nouveaux créneaux';
$string['btn_assign'] = 'Attribuer un créneau';
$string['btn_comment'] = 'Modifier le commentaire';
$string['btn_delete'] = 'Supprimer les créneaux sélectionnés';
$string['btn_edit'] = 'Modifier les créneaux sélectionnés';
$string['btn_eval'] = 'Noter les créneaux sélectionnés';
$string['btn_eval_short'] = 'Noter';
$string['btn_print'] = 'Imprimer les créneaux sélectionnés';
$string['btn_queue'] = 'Mettre en attente';
$string['btn_reeval'] = 'Réévaluer';
$string['btn_register'] = 'M\'inscrire';
$string['btn_remind'] = 'Envoyer un rappel';
$string['btn_reregister'] = 'Me réinscrire';
$string['btn_save'] = 'Enregistrer le commentaire';
$string['btn_send'] = 'Envoyer';
$string['btn_start'] = 'Commencer';
$string['btn_unqueue'] = 'Retirer de la liste d\'attente';
$string['btn_unregister'] = 'Désinscrire';
$string['can_reregister'] = 'Vous pouvez vous réinscrire à un autre rendez-vous.';
$string['cannot_eval'] = 'Impossible d\'évaluer, l\'étudiant a un';
$string['changegradewarning'] = 'Cet agenda a des rendez-vous notés, et le fait de changer la note ne va pas recalculer automatiquement les notes existantes. Si vous souhaitez changer la note, vous devez renoter tous les rendez-vous existants.';
$string['collision'] = 'Attention! conflit détecté avec l\'-es événement-s suivant-s:';
$string['configabsolutedeadline'] = 'Le décalage par défaut entre le sélecteur de date/heure par rapport à la date/heure actuelles.';
$string['configahead'] = 'à l\'avance';
$string['configday'] = 'jour';
$string['configdays'] = 'jours';
$string['configdigest'] = 'Envoyer un résumé des rendez-vous du lendemain à l\'enseignant.';
$string['configdigest_label'] = 'Envoyer une liste des rendez-vous aux enseignants.';
$string['configdontsend'] = 'Ne pas envoyer';
$string['configemailteachers'] = 'Envoyer un email pour informer les enseignants des changements dans les inscriptions.';
$string['configemailteachers_label'] = 'Envoyer un email d\'information aux enseignants';
$string['confighour'] = 'heure';
$string['confighours'] = 'heures';
$string['configintro'] = 'Les valeurs que vous saisissez ici définissent les réglages par défaut pour la création d\'un nouvel agenda.';
$string['configlocationlink'] = 'Le lien vers un moteur de recherche utilisé pour indiquer l\'itinéraire vers le lieu du rendez-vous. Placez $searchstring dans l\'URL pointant vers ce site.';
$string['configmaximumgrade'] = 'Définit la valeur par défaut dans le champ de note lors de la création d\'un nouvel agenda. C\'est la note maximale que l\'étudiant peut obtenir pour son rendez-vous.';
$string['configminute'] = 'minute';
$string['configminutes'] = 'minutes';
$string['configmonth'] = 'mois';
$string['configmonths'] = 'mois';
$string['confignever'] = 'Jamais';
$string['configrelativedeadline'] = 'Le délai par défaut pour prévenir les participants de leur rendez-vous.';
$string['configrequiremodintro'] = 'Décochez cette option si vous ne voulez pas que les utilisateurs soient obligés d\'entrer une description de chaque activité.';
$string['configweek'] = 'semaine';
$string['configweeks'] = 'semaines';
$string['configyear'] = 'année';
$string['confirm_conflicts'] = 'Voulez-vous vraiment ignorer le conflit et créer les créneaux ?';
$string['confirm_delete'] = 'Effacer';
$string['confirm_organizer_remind_all'] = 'Envoyer';
$string['create'] = 'Créer';
$string['createsubmit'] = 'Créer les créneaux';
$string['datapreviewtitle'] = 'Prévisualiser les données';
$string['datapreviewtitle_help'] = 'Cliquez sur [+] ou [-] pour afficher ou masquer des colonnes dans l\'aperçu avant impression.';
$string['datetemplate'] = '%j.%m.%A';
$string['day'] = 'jour';
$string['day_0'] = 'lundi';
$string['day_1'] = 'mardi';
$string['day_2'] = 'mercredi';
$string['day_3'] = 'jeudi';
$string['day_4'] = 'vendredi';
$string['day_5'] = 'samedi';
$string['day_6'] = 'dimanche';
$string['day_pl'] = 'jours';
$string['delete_organizer_grades'] = 'Efface les notes de tous les agendas';
$string['deleteheader'] = 'Efface les créneaux suivants:';
$string['deletekeep'] = 'Les rendez-vous suivants vont être annulés. Les étudiants inscrits en seront informés et les créneaux seront supprimés:';
$string['deletenoslots'] = 'Vous n\'avez sélectionné aucun créneau effaçable';
$string['deleteorganizergrades'] = 'Effacer les notes du carnet de notes';
$string['downloadfile'] = 'Télécharger le fichier';
$string['duedate'] = 'Échéance';
$string['duedateerror'] = 'L\'échéance absolue ne peut pas être antérieure à la date de disponibilité!';
$string['duration'] = 'Durée';
$string['duration_help'] = 'Définit la durée des rendez-vous. Toutes les plages horaires seront divisées en créneaux de cette durée. Le temps restant sera ignoré (p.ex. si la plage horaire est de 40 min. et que la durée est définie à 15 min., il y aura 2 créneaux en tout et les 10 min. restantes resteront vacantes).';
$string['edit_notify_student:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, votre rendez-vous avec {$a->sendername} le {$a->date} à {$a->time} a été modifié.

Enseignant: {$a->slot_teacher}
Lieu/local: {$a->slot_location}
Nombre max. de participants: {$a->slot_maxparticipants}
Commentaires:
{$a->slot_comments}

Système de messagerie Moodle';
$string['edit_notify_student:group:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, votre rendez-vous de groupe avec {$a->sendername} le {$a->date} à {$a->time} a été modifié.

Enseignant: {$a->slot_teacher}
Lieu/local: {$a->slot_location}
Nombre max. de participants: {$a->slot_maxparticipants}
Commentaires:
{$a->slot_comments}

Système de messagerie Moodle';
$string['edit_notify_student:group:smallmessage'] = 'Le rendez-vous de groupe avec {$a->sendername} le {$a->date} à {$a->time} a été modifié.';
$string['edit_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Rendez-vous modifié';
$string['edit_notify_student:smallmessage'] = 'Le redez-vous avec {$a->sendername} le {$a->date} à {$a->time} a été modifié.';
$string['edit_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Rendez-vous modifié';
$string['edit_notify_teacher:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, {$a->sendername} a modifié  le créneau du {$a->date} à {$a->time}.

Enseignant: {$a->slot_teacher}
Lieu/local: {$a->slot_location}
Nombre max. de participants: {$a->slot_maxparticipants}
Commentaires:
{$a->slot_comments}

Système de messagerie Moodle';
$string['edit_notify_teacher:group:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, {$a->sendername} a modifié le créneau du {$a->date} à {$a->time}.

Enseignant: {$a->slot_teacher}
Lieu/local: {$a->slot_location}
Nombre max. de participants: {$a->slot_maxparticipants}
Commentaires:
{$a->slot_comments}

Système de messagerie Moodle';
$string['edit_notify_teacher:group:smallmessage'] = '{$a->sendername} a modifié le créneau du {$a->date} à {$a->time}.';
$string['edit_notify_teacher:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Rendez-vous modifié';
$string['edit_notify_teacher:smallmessage'] = '{$a->sendername} a modifié le créneau du {$a->date} à {$a->time}.';
$string['edit_notify_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Rendez-vous modifié';
$string['edit_submit'] = 'Apporter des changements';
$string['emailteachers'] = 'Envoyer des notifications par email aux enseignants';
$string['emailteachers_help'] = 'Pour éviter le spamming, les enseignants ne reçoivent pas d\'email lors de la première inscription des étudiants dans un créneau horaire. Cochez cette case pour autoriser l\'agenda à envoyer ces notifications aux enseignants.
Notez que les notifications pour la désinscription ou le changement de créneau sont toujours envoyées.';
$string['err_availablefromearly'] = 'Cette date ne peut être postérieure à la date de début.';
$string['err_availablefromlate'] = 'Cette date ne peut être postérieure à la date de fin.';
$string['err_availablepastdeadline'] = 'Ce créneau ne peut pas être créé après l\'échéance de cet agenda ({$a->deadline}).';
$string['err_collision'] = 'Cette plage est en conflit avec d\'autres plages:';
$string['err_comments'] = 'Vous devez encoder une description.';
$string['err_enddate'] = 'La date de fin ne peut être antérieure à la date de début.';
$string['err_fromto'] = 'L\'heure de fin ne peut être antérieure à l\'heure de début.';
$string['err_fullminute'] = 'La durée doit être une minute complète.';
$string['err_fullminutegap'] = 'L\'écart doit être une minute complète.';
$string['err_isgrouporganizer_app'] = 'Impossible de modifier le mode de groupe car il existe déjà des rendez-vous dans cet agenda.';
$string['err_location'] = 'Vous devez encoder un lieu/local.';
$string['err_noslots'] = 'Aucun créneau sélectionné.';
$string['err_posint'] = 'Vous devez encoder un nombre entier positif.';
$string['err_startdate'] = 'La date de début ne peut être antérieure à aujourd\'hui ({$a->now}).';
$string['eval_allow_new_appointments'] = 'Autoriser à prendre un autre rendez-vous';
$string['eval_attended'] = 'A/ont participé';
$string['eval_feedback'] = 'Retour d’information';
$string['eval_grade'] = 'Noter';
$string['eval_header'] = 'Créneaux sélectionnés';
$string['eval_no_participants'] = 'Ce créneau n\'avait pas de participants';
$string['eval_not_occured'] = 'Ce créneau n\'a pas encore eu lieu.';
$string['eval_notify_newappointment:student:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, votre rendez-vous avec {$a->sendername} du {$a->date} à {$a->time} dans le local {$a->location} a été évalué.

Les enseignants du cours vous autorisent à vous réinscrire dans n\'importe quel créneau disponible dans l\'agenda {$a->organizername}.

Système de messagerie Moodle';
$string['eval_notify_newappointment:student:group:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, votre rendez-vous de groupe avec {$a->sendername} du {$a->date} à {$a->time} dans le local {$a->location} a été évalué.

Les enseignants du cours vous autorisent à vous réinscrire dans n\'importe quel créneau disponible dans l\'agenda {$a->organizername}.

Système de messagerie Moodle';
$string['eval_notify_newappointment:student:group:smallmessage'] = 'Votre rendez-vous de groupe du {$a->date} à {$a->time} dans le local {$a->location} a été évalué.';
$string['eval_notify_newappointment:student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Rendez-vous évalué';
$string['eval_notify_newappointment:student:smallmessage'] = 'Votre rendez-vous du {$a->date} à {$a->time} dans le local {$a->location} a été évalué.';
$string['eval_notify_newappointment:student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Rendez-vous évalué';
$string['evaluate'] = 'Evaluer';
$string['eventappointmentadded'] = 'L\'étudiant s\'est inscrit dans un créneau.';
$string['eventappointmentassigned'] = 'Le rendez-vous a été fixé par l\'enseignant.';
$string['eventappointmentcommented'] = 'Le rendez-vous a été commenté.';
$string['eventappointmentevaluated'] = 'Le rendez-vous a été évalué.';
$string['eventappointmentlistprinted'] = 'La liste de rendez-vous a été imprimée.';
$string['eventappointmentremindersent'] = 'Rappel de rendez-vous envoyé.';
$string['eventappointmentremoved'] = 'L\'étudiant s\'est désinscrit d\'un créneau.';
$string['eventappwith:group'] = 'Rendez-vous de groupe';
$string['eventappwith:single'] = 'Rendez-vous';
$string['eventnoparticipants'] = 'Pas de participants';
$string['eventqueueadded'] = 'Ajouté à la liste d\'attente';
$string['eventqueueremoved'] = 'Retiré de la liste d\'attente';
$string['eventregistrationsviewed'] = 'Onglet des inscriptions affiché.';
$string['eventslotcreated'] = 'Nouveaux créneaux créés.';
$string['eventslotdeleted'] = 'Créneau effacé.';
$string['eventslotupdated'] = 'Créneau mis à jour.';
$string['eventslotviewed'] = 'Créneaux affichés.';
$string['eventteacheranonymous'] = 'un enseignant anonyme';
$string['eventtemplate'] = '{$a->courselink} / {$a->organizerlink}: {$a->appwith} {$a->with} {$a->participants}<br />Lieu/local: {$a->location}<br />';
$string['eventtemplatecomment'] = 'Commentaire:<br />{$a}<br />';
$string['eventtitle'] = '{$a->coursename} / {$a->organizername}: {$a->appwith}';
$string['eventwith'] = 'avec';
$string['eventwithout'] = 'sans';
$string['exportsettings'] = 'Exporter les réglages';
$string['finalgrade'] = 'Cette valeur a été définie dans le carnet de notes et ne peut être modifiée au sein de l\'agenda.';
$string['font_large'] = 'grand';
$string['font_medium'] = 'moyen';
$string['font_small'] = 'petit';
$string['format'] = 'Format';
$string['format_csv_comma'] = 'CSV (;)';
$string['format_csv_tab'] = 'CSV (tabulations)';
$string['format_ods'] = 'ODS';
$string['format_pdf'] = 'PDF';
$string['format_xls'] = 'XLS';
$string['format_xlsx'] = 'XLSX';
$string['fulldatelongtemplate'] = '%A %d. %B %Y';
$string['fulldatetemplate'] = '%a %d.%m.%Y';
$string['fulldatetimelongtemplate'] = '%A %d. %B %Y %H:%M';
$string['fulldatetimetemplate'] = '%a %d.%m.%Y %H:%M';
$string['fullname_template'] = '{$a->firstname} {$a->lastname}';
$string['gap'] = 'Ecart';
$string['gap_help'] = 'Définit l\'écart entre deux rendez-vous.';
$string['grade'] = 'Note maximale';
$string['grade_help'] = 'Définit le nombre maximum de points que l\'on peut attribuer à un rendez-vous à noter.';
$string['group_registration_notify:student:queue:group:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, {$a->sendername} a ajouté votre groupe {$a->groupname} à la liste d\'attente pour le créneau du {$a->date} à {$a->time} dans le local {$a->location}.

Système de messagerie Moodle';
$string['group_registration_notify:student:queue:group:smallmessage'] = '{$a->sendername} a ajouté votre groupe {$a->groupname} à la liste d\'attente pour le créneau du {$a->date} à {$a->time}.';
$string['group_registration_notify:student:queue:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Groupe mis en attente';
$string['group_registration_notify:student:register:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, {$a->sendername} a inscrit votre groupe {$a->groupname} dans le créneau du {$a->date} à {$a->time} dans le local {$a->location}.

Système de messagerie Moodle';
$string['group_registration_notify:student:register:group:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, {$a->sendername} a inscrit votre groupe {$a->groupname} dans le créneau du {$a->date} à {$a->time} dans le local {$a->location}.

Système de messagerie Moodle';
$string['group_registration_notify:student:register:group:smallmessage'] = '{$a->sendername} a inscrit votre groupe {$a->groupname} dans le créneau du {$a->date} à {$a->time}.';
$string['group_registration_notify:student:register:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Groupe inscrit';
$string['group_registration_notify:student:register:smallmessage'] = '{$a->sendername} a inscrit votre groupe {$a->groupname} dans le créneau du {$a->date} à {$a->time}.';
$string['group_registration_notify:student:register:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Groupe inscrit';
$string['group_registration_notify:student:reregister:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, {$a->sendername} a réinscrit votre groupe {$a->groupname} dans un nouveau créneau horaire, le {$a->date} à {$a->time} dans le local {$a->location}.

Système de messagerie Moodle';
$string['group_registration_notify:student:reregister:group:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, {$a->sendername} a réinscrit votre groupe {$a->groupname} dans un nouveau créneau horaire, le {$a->date} à {$a->time} dans le local {$a->location}.

Système de messagerie Moodle';
$string['group_registration_notify:student:reregister:group:smallmessage'] = '{$a->sendername} a réinscrit votre groupe {$a->groupname} dans un nouveau créneau horaire, le {$a->date} à {$a->time}.';
$string['group_registration_notify:student:reregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Groupe réinscrit';
$string['group_registration_notify:student:reregister:smallmessage'] = '{$a->sendername} a réinscrit votre groupe {$a->groupname} dans un nouveau créneau horaire, le {$a->date} à {$a->time}.';
$string['group_registration_notify:student:reregister:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Groupe réinscrit';
$string['group_registration_notify:student:unqueue:group:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, {$a->sendername} a retiré votre groupe {$a->groupname} de la liste d\'attente pour le créneau du {$a->date} à {$a->time} dans le local {$a->location}.

Système de messagerie Moodle';
$string['group_registration_notify:student:unqueue:group:smallmessage'] = '{$a->sendername} a retiré votre groupe {$a->groupname} de la liste d\'attente pour le créneau du {$a->date} à {$a->time}';
$string['group_registration_notify:student:unqueue:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Groupe retiré de la liste d\'attente';
$string['group_registration_notify:student:unregister:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, {$a->sendername} a désinscrit votre groupe {$a->groupname} du créneau du {$a->date} à {$a->time} dans le local {$a->location}.

Système de messagerie Moodle';
$string['group_registration_notify:student:unregister:group:fullmessage'] = 'Bonjour {$a->receivername},

Dans le cadre du cours {$a->courseid} {$a->coursefullname}, {$a->sendername} a désinscrit votre groupe {$a->groupname} du créneau du {$a->date} à {$a->time} dans le local {$a->location}.

Système de messagerie Moodle';
$string['group_registration_notify:student:unregister:group:smallmessage'] = '{$a->sendername} a désinscrit votre groupe {$a->groupname} du créneau du {$a->date} à {$a->time}.';
$string['group_registration_notify:student:unregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Groupe désinscrit';
$string['group_registration_notify:student:unregister:smallmessage'] = '{$a->sendername} a désinscrit votre groupe {$a->groupname} du créneau du {$a->date} à {$a->time}.';
$string['group_registration_notify:student:unregister:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Groupe désinscrit';
$string['group_slot_available'] = 'Créneau disponible';
$string['group_slot_full'] = 'Créneau occupé';
$string['groupoptions'] = 'Réglages de groupe';
$string['grouporganizer_desc_hasgroup'] = 'Ceci est un agenda de groupe. Lorsque vous cliquerez sur le bouton d\'inscription vous vous inscrirez avec tous les membres de votre groupe {$a->groupname} dans ce créneau. Tous les membres du groupe peuvent modifier et commenter l\'inscription.';
$string['grouporganizer_desc_nogroup'] = 'Ceci est un agenda de groupe. Les étudiants peuvent inscrire leur groupe dans les créneaux disponibles. Tous les membres du groupe peuvent modifier et commenter leur inscription.';
$string['grouppicker'] = 'Choix du groupe';
$string['groupwarning'] = 'Vérifiez les options de groupe ci-dessous.';
$string['headerfooter'] = 'Imprimer les entête et pied de page';
$string['headerfooter_help'] = 'Imprimer les entête et pied de page si coché';
$string['hidecalendar'] = 'Masquer le calendrier';
$string['hidecalendar_help'] = 'Cochez pour masquer le calendrier dans cet agenda';
$string['hour'] = 'h';
$string['hour_pl'] = 'h';
$string['id'] = 'ID';
$string['img_title_due'] = 'Le créneau est dû';
$string['img_title_evaluated'] = 'Le créneau est évalué';
$string['img_title_no_participants'] = 'Le créneau n\'avait aucun participant';
$string['img_title_past_deadline'] = 'Le créneau est échu';
$string['img_title_pending'] = 'Le créneau doit être évalué';
$string['infobox_app_countdown'] = 'Temps restant avant le rendez-vous: {$a->days} jours, {$a->hours} heures, {$a->minutes} minutes, {$a->seconds} secondes';
$string['infobox_app_occured'] = 'Le rendez-vous a déjà eu lieu.';
$string['infobox_deadline_countdown'] = 'Temps restant avant l\'échéance: {$a->days} jours, {$a->hours} heures, {$a->minutes} minutes, {$a->seconds} secondes';
$string['infobox_deadline_passed'] = 'L\'échéance pour les inscriptions est dépassée. Vous ne pouvez plus modifier les inscriptions.';
$string['infobox_deadlines_title'] = 'Échéances';
$string['infobox_description_title'] = 'Description de l\'agenda';
$string['infobox_feedback_title'] = 'Retour d\'informations';
$string['infobox_group'] = 'Mon groupe: {$a->groupname}';
$string['infobox_hidelegend'] = 'Masquer la légende';
$string['infobox_legend_title'] = 'Légende';
$string['infobox_messages_title'] = 'Messages système';
$string['infobox_messaging_title'] = 'Options de messagerie';
$string['infobox_mycomments_title'] = 'Mes commentaires';
$string['infobox_myslot_noslot'] = 'Vous n\'êtes actuellement inscrit dans aucun créneau.';
$string['infobox_myslot_title'] = 'Mon créneau horaire';
$string['infobox_organizer_expired'] = 'Cet agenda a expiré le {$a->date} à {$a->time}';
$string['infobox_organizer_expires'] = 'Cet agenda expirera le {$a->date} à {$a->time}';
$string['infobox_organizer_never_expires'] = 'Cet agenda n\'a pas de date d\'expiration.';
$string['infobox_showfreeslots'] = 'Ne montrer que les créneaux disponibles';
$string['infobox_showlegend'] = 'Montrer la légende';
$string['infobox_showmyslotsonly'] = 'Ne montrer que mes créneaux';
$string['infobox_showslots'] = 'Monter les créneaux passés';
$string['infobox_slotoverview_title'] = 'Aperçu du créneau';
$string['infobox_title'] = 'Boite d\'info';
$string['introeditor_error'] = 'La description de l\'agenda est obligatoire.';
$string['invalidgrouping'] = 'Vous devez sélectionner un groupement valable.';
$string['inwaitingqueue'] = 'Liste d\'attente';
$string['isgrouporganizer'] = 'Rendez-vous de groupe';
$string['isgrouporganizer_help'] = 'Sélectionnez ceci si vous voulez que cet agenda inscrive des groupes plutôt que des utilisateurs individuels. Notez que si vous ne cochez pas cette case, l\'agenda permet tout de même que plusieurs utilisateurs s\'inscrivent au même rendez-vous.';
$string['legend_anonymous'] = 'Créneau anonyme';
$string['legend_comments'] = 'Commentaires de l\'étudiant/enseignant';
$string['legend_due'] = 'Créneau dû';
$string['legend_evaluated'] = 'Créneau évalué';
$string['legend_feedback'] = 'Réaction de l\'enseignant';
$string['legend_group_applicant'] = 'Candidat du groupe';
$string['legend_halfanonymous'] = 'Seuls les participants de son propre créneau sont visibles';
$string['legend_no_participants'] = 'Le créneau n\'avait aucun participant';
$string['legend_not_occured'] = 'Le rendez-vous n\'a pas encore eu lieu';
$string['legend_organizer_expired'] = 'Calendrier expiré';
$string['legend_past_deadline'] = 'Échéance du créneau dépassée';
$string['legend_pending'] = 'Créneau à évaluer';
$string['legend_section_details'] = 'Icônes de détails du créneau';
$string['legend_section_status'] = 'Icônes de statut';
$string['location'] = 'Lieu/local';
$string['location_help'] = 'Encodez le nom du local où les rendez-vous auront lieu.';
$string['locationlink'] = 'Lien URL du lieu/local';
$string['locationlink_help'] = 'Tapez ici l\'adresse complète du site web vers lequel le lien doit pointer. Ce site doit obligatoirement donner l\'itinéraire vers le lieu/local. Merci d\'inclure l\'adresse complète, y compris http://';
$string['locationlinkenable'] = 'Autolien d\'info sur le lieu/local';
$string['maillink'] = 'L\'agenda est disponible <a href="{$a}">ici</a>.';
$string['maxparticipants'] = 'Nombre max. de participants';
$string['maxparticipants_help'] = 'Définit le nombre maximum d\'utilisateurs qui peuvent s\'inscrire dans chaque créneau. Dans le cas d\'un agenda de groupes, ce nombre est toujours limité à un.';
$string['message_autogenerated2'] = 'Message généré automatiquement';
$string['message_custommessage'] = 'Message personnalisé';
$string['message_custommessage_help'] = 'Utilisez ce champ pour ajouter un texte personnalisé dans le message automatique.';
$string['message_error_slot_full_group'] = 'Ce créneau horaire est déjà occupé.';
$string['message_error_slot_full_single'] = 'Il n\'y a plus de places disponibles dans ce créneau horaire.';
$string['message_error_unknown_unqueue'] = 'Votre inscription à la liste d\'attente n\'a pas pu être supprimée. Erreur inconnue.';
$string['message_error_unknown_unregister'] = 'Votre inscription n\'a pas pu être supprimée. Erreur inconnue.';
$string['message_info_available'] = 'Il reste {$a->freeslots} créneaux disponibles pour {$a->notregistered} étudiants sans rendez-vous.';
$string['message_info_available_group'] = 'Il reste {$a->freeslots} créneaux disponibles pour {$a->notregistered} groupes sans rendez-vous.';
$string['message_info_reminders_sent_pl'] = '{$a->count} rappels ont été envoyés.';
$string['message_info_reminders_sent_sg'] = '{$a->count} rappel a été envoyé.';
$string['message_info_slots_added_pl'] = '{$a->count} nouveaux créneaux ont été ajoutés.';
$string['message_info_slots_added_sg'] = '{$a->count} nouveau créneau a été ajouté.';
$string['message_info_slots_deleted'] = 'Les créneaux suivants ont été effacés:<br/>
{$a->deleted} créneaux effacés.<br/>
{$a->notified} utilisateurs ont été notifiés.';
$string['message_info_slots_deleted_group'] = 'Les créneaux suivants ont été effacés:<br/>
{$a->deleted} créneaux effacés.<br/>
{$a->notified} utilisateurs ont été notifiés.';
$string['message_warning_available'] = '<span style="color:red;">Attention</span> Il y a {$a->freeslots} créneaux disponibles pour {$a->notregistered} utilisateurs sans rendez-vous.';
$string['message_warning_available_group'] = '<span style="color:red;">Attention</span> Il y a {$a->freeslots} créneaux disponibles pour {$a->notregistered} groupes sans rendez-vous.';
$string['message_warning_no_slots_added'] = 'Aucun nouveau créneau ajouté!';
$string['message_warning_no_slots_selected'] = 'Vous devez d\'abord sélectionner au moins un créneau.';
$string['messageprovider:test'] = 'message de test de l\'agenda';
$string['messages_all'] = 'Toutes les inscriptions, réinscriptions et désinscriptions';
$string['messages_none'] = 'Pas de notifications d\'inscriptions';
$string['messages_re_unreg'] = 'Uniquement les réinscriptions et désinscriptions';
$string['min'] = 'min.';
$string['min_pl'] = 'min.';
$string['modformwarningplural'] = 'Ces champs ne peuvent pas être modifiés car il y a déjà des rendez-vous pris dans cet agenda.';
$string['modformwarningsingular'] = 'Ce champ ne peut pas être modifié car il y a déjà des rendez-vous pris dans cet agenda.';
$string['modulename'] = 'Agenda';
$string['modulename_help'] = 'Les agendas permettent à l\'enseignant de prendre des rendez-vous avec les étudiants en créant des créneaux horaires dans lesquels les étudiants peuvent s\'inscrire.';
$string['modulenameplural'] = 'Agendas';
$string['multimember'] = 'Les étudiants ne peuvent pas faire partie de plusieurs groupes au sein du même groupement.';
$string['multimemberspecific'] = 'L\'utilisateur {$a->username} {$a->idnumber} est enregistré dans plusieurs groupes! ({$a->groups})';
$string['multipleappointmentenddate'] = 'Date de fin';
$string['multipleappointmentstartdate'] = 'Date de début';
$string['mymoodle_attended'] = '{$a->attended} étudiants sur {$a->total} se sont présentés à leur rendez-vous.';
$string['mymoodle_attended_group'] = '{$a->attended} groupes sur {$a->total} se sont présentés à leur rendez-vous.';
$string['mymoodle_attended_group_short'] = '{$a->attended} groupes sur {$a->total} se sont présentés.';
$string['mymoodle_attended_short'] = '{$a->attended} étudiants sur {$a->total} se sont présentés.';
$string['mymoodle_completed_app'] = 'Vous avez participé à votre rendez-vous le {$a->date} à {$a->time}';
$string['mymoodle_completed_app_group'] = 'Votre groupe {$a->groupname} a participé à son rendez-vous le {$a->date} à {$a->time}';
$string['mymoodle_missed_app'] = 'Vous ne vous êtes pas présenté à votre rendez-vous le {$a->date} à {$a->time}';
$string['mymoodle_missed_app_group'] = 'Votre groupe {$a->groupname} ne s\'est pas présenté à son rendez-vous le {$a->date} à {$a->time}';
$string['mymoodle_next_slot'] = 'Prochain créneau le {$a->date} à {$a->time}';
$string['mymoodle_no_reg_slot'] = 'Vous ne vous êtes encore inscrit à aucun créneau';
$string['mymoodle_no_reg_slot_group'] = 'Votre groupe {$a->groupname} ne s\'est encore inscrit à aucun créneau';
$string['mymoodle_no_slots'] = 'Pas de créneaux à venir';
$string['mymoodle_organizer_expired'] = 'Cet agenda a expiré le {$a->date} à {$a->time}. Vous ne pouvez plus l\'utiliser.';
$string['mymoodle_organizer_expires'] = 'Cet agenda expire le {$a->date} à {$a->time}.';
$string['mymoodle_pending_app'] = 'Votre rendez-vous est en attente d\'évaluation.';
$string['mymoodle_pending_app_group'] = 'Le rendez-vous de votre groupe {$a->groupname} est en attente d\'évaluation.';
$string['mymoodle_registered'] = '{$a->registered} étudiants sur {$a->total} se sont inscrits à un rendez-vous';
$string['mymoodle_registered_group'] = '{$a->registered} groupes sur {$a->total} se sont inscrits à un rendez-vous';
$string['mymoodle_registered_group_short'] = '{$a->registered} groupes sur {$a->total} inscrits';
$string['mymoodle_registered_short'] = '{$a->registered} étudiants sur {$a->total} inscrits';
$string['mymoodle_upcoming_app'] = 'Votre rendez-vous aura lieu le {$a->date} à {$a->time} dans le local {$a->location}';
$string['mymoodle_upcoming_app_group'] = 'Le rendez-vous de votre groupe {$a->groupname} aura lieu le {$a->date} à {$a->time} dans le local {$a->location}';
$string['newslot'] = 'Ajouter un autre créneau';
$string['no_due_my_slots'] = 'Tous vos créneaux dans cet agenda sont expirés.';
$string['no_due_slots'] = 'Tous les créneaux créés dans cet agenda sont expirés.';
$string['no_my_slots'] = 'Vous n\'avez créé aucun créneau dans cet agenda.';
$string['no_slots'] = 'Aucun créneau n\'a été créé dans cet agenda.';
$string['no_slots_defined'] = 'Il n\'y a actuellement aucun créneau disponible pour un rendez-vous.';
$string['no_slots_defined_teacher'] = 'Il n\'existe aucun créneau pour des rendez-vous pour le moment. Cliquez <a href="{$a->link}">ici</a> pour en créer.';
$string['nofreeslots'] = 'Aucun créneau disponible.';
$string['nogroup'] = 'Aucun groupe';
$string['noparticipants'] = 'Aucun participant';
$string['norightpage'] = 'Vous n\'avez pas le droit d\'accès à cette page.';
$string['noslots'] = 'Pas de créneau pour';
$string['noslotsselected'] = 'Aucun créneau sélectionné';
$string['notificationtime'] = 'Rappel relatif de rendez-vous';
$string['notificationtime_help'] = 'Définit le délai entre l\'envoi d\'un rappel à l\'étudiant et son rendez-vous.';
$string['numentries'] = 'Nombre d\'entrées affichées par page';
$string['numentries_help'] = 'Choisissez "optimal" pour optimiser la distribution des éléments de la liste en fonction de la taille de texte et du format de page choisis, s\'il y a beaucoup de participants inscrits à votre cours.';
$string['organizer'] = 'Agenda';
$string['organizer:addinstance'] = 'Ajouter un nouvel agenda';
$string['organizer:addslots'] = 'Ajouter de nouveaux créneaux horaires';
$string['organizer:assignslots'] = 'Attribuer le créneau à un étudiant';
$string['organizer:comment'] = 'Ajouter des commentaires';
$string['organizer:deleteslots'] = 'Effacer les créneaux horaires existants';
$string['organizer:editslots'] = 'Modifier les créneaux horaires existants';
$string['organizer:evalslots'] = 'Noter les créneaux terminés';
$string['organizer:leadslots'] = 'Diriger les créneaux';
$string['organizer:printslots'] = 'Imprimer les créneaux existants';
$string['organizer:receivemessagesstudent'] = 'Recevoir les messages tels qu\'envoyés aux étudiants';
$string['organizer:receivemessagesteacher'] = 'Recevoir les messages tels qu\'envoyés aux enseignants';
$string['organizer:register'] = 'M\'inscrire à un créneau horaire';
$string['organizer:sendreminders'] = 'Envoyer aux étudiants un rappel de leur inscription';
$string['organizer:unregister'] = 'Me désinscrire d\'un créneau horaire';
$string['organizer:viewallslots'] = 'Voir tous les créneaux en tant qu\'enseignant';
$string['organizer:viewmyslots'] = 'Voir tous mes créneaux en tant qu\'enseignant';
$string['organizer:viewregistrations'] = 'Voir le statut des inscriptions d\'étudiants';
$string['organizer:viewstudentview'] = 'Voir tous les créneaux en tant qu\'étudiant';
$string['organizer_remind_all_no_recepients'] = 'Aucun destinataire valide.';
$string['organizer_remind_all_recepients_pl'] = 'Un total de {$a->count} messages seront envoyés aux destinataires suivants:';
$string['organizer_remind_all_recepients_sg'] = 'Un total de {$a->count} messages seront envoyés aux destinataires suivants:';
$string['organizer_remind_all_title'] = 'Envoyer les rappels';
$string['organizercommon'] = 'Réglages de l\'agenda';
$string['organizername'] = 'Nom de l\'agenda';
$string['orientationlandscape'] = 'paysage';
$string['orientationportrait'] = 'portrait';
$string['otherheader'] = 'Autre';
$string['pageorientation'] = 'Orientation de la page';
$string['pdf_notactive'] = 'Pas actif';
$string['pdfsettings'] = 'Réglages PDF';
$string['places_inqueue'] = '{$a->inqueue} sur la liste d\'attente';
$string['places_inqueue_withposition'] = '{$a->queueposition}ème position sur la liste d\'attente';
$string['places_taken_pl'] = '{$a->numtakenplaces} places prises sur {$a->totalplaces}';
$string['places_taken_sg'] = '{$a->numtakenplaces} places prises sur {$a->totalplaces}';
$string['pluginadministration'] = 'Administration de l\'agenda';
$string['pluginname'] = 'Agenda';
$string['position'] = 'Position sur la liste d\'attente';
$string['print_return'] = 'Retour à l\'aperçu du créneau';
$string['printout'] = 'Impression';
$string['printpreview'] = 'Aperçu avant impression (10 premières entrées)';
$string['printsubmit'] = 'Afficher un tableau imprimable';
$string['queue'] = 'Listes d\'attente';
$string['queue_help'] = 'Les listes d\'attente permettent aux utilisateurs de s\'inscrire à un créneau horaire même si le nombre maximum de participants est déjà atteint. Les utilisateurs sont ajoutés à une liste d\'attente et ils seront inscrits dans ce créneau (dans l\'ordre) dès qu\'une place se libère.';
$string['queuebody'] = 'Votre inscription à un créneau horaire a été promu du statut de "en liste d\'attente" à celui de "réservé".';
$string['queuesubject'] = 'Moodle Agenda: promu de la liste d\'attente';
$string['recipientname'] = '&lt;recipient name&gt;';
$string['reg_status'] = 'Statut d\'inscription';
$string['reg_status_not_registered'] = 'Pas inscrit';
$string['reg_status_organizer_expired'] = 'Agenda expiré';
$string['reg_status_registered'] = 'Inscrit';
$string['reg_status_slot_attended'] = 'S\'est présenté';
$string['reg_status_slot_attended_reapp'] = 'S\'est présenté, réinscription autorisée';
$string['reg_status_slot_available'] = 'Créneau disponible';
$string['reg_status_slot_expired'] = 'Créneau expiré';
$string['reg_status_slot_full'] = 'Créneau complet';
$string['reg_status_slot_not_attended'] = 'Ne s\'est pas présenté';
$string['reg_status_slot_not_attended_reapp'] = 'Ne s\'est pas présenté, réinscription autorisée';
$string['reg_status_slot_past_deadline'] = 'Créneau échu';
$string['reg_status_slot_pending'] = 'Créneau à évaluer';
$string['relative_deadline_before'] = 'avant le rendez-vous';
$string['relative_deadline_now'] = 'Dès maintenant';
$string['relativedeadline'] = 'Échéance relative';
$string['relativedeadline_help'] = 'Définit la limite d\'inscription avant le créneau. Les étudiants ne pourront plus s\'inscrire, modifier leur inscription ou se désinscrire après cette échéance.';
$string['remindall_desc'] = 'Envoyer des rappels à tous les étudiants sans rendez-vous';
$string['requiremodintro'] = 'Exiger la description de l\'activité';
$string['reset_organizer_all'] = 'Efface les créneaux, rendez-vous et événements liés.';
$string['resetorganizerall'] = 'Effacer toutes les données de l\'agenda (créneaux et rendez-vous)';
$string['reviewsubmit'] = 'Revoir les créneaux';
$string['rewievslotsheader'] = 'Revoir les créneaux';
$string['sec'] = 'sec';
$string['sec_pl'] = 'secs';
$string['select_all_slots'] = 'Sélectionner tous les créneaux visibles';
$string['selectedgrouplist'] = 'Groupes séleectionnés';
$string['selectedslots'] = 'Créneaux sélectionnés';
$string['slot_anonymous'] = 'Créneau anonyme';
$string['slot_slotvisible'] = 'Les membres ne sont visibles que s\'ils sont dans leur propre créneau.';
$string['slot_visible'] = 'Membres du créneau toujours visibles';
$string['slotassignedby'] = 'Créneau attribué par';
$string['slotdetails'] = 'Détails du créneau';
$string['slotfrom'] = 'de';
$string['slotlistempty'] = 'Aucun créneau trouvé';
$string['slotperiodendtime'] = 'Date de fin';
$string['slotperiodheader'] = 'Générer des créneaux pour la plage de dates';
$string['slotperiodheader_help'] = 'Spécifier la date de début et de fin auxquelles les plages horaires journalières (section ci-dessous) s\'appliqueront.';
$string['slotperiodstarttime'] = 'Date de début';
$string['slottimeframesheader'] = 'Plages horaires spécifiques';
$string['slottimeframesheader_help'] = 'Cette section permet de définir des plages horaires basées sur les jours de la semaine qui seront découpées en créneaux pour des rendez-vous ayant les caractéristiques définies ci-dessus. Il peut y avoir plusieurs plages horaires par jour. Si une plage du lundi est sélectionnée, cela générera des créneaux horaires tous les lundis entre la date de début et de fin, incluses.';
$string['slotto'] = 'à';
$string['status_no_entries'] = 'Cet agenda n\'a pas d\'étudiants inscrits.';
$string['stroptimal'] = 'optimal';
$string['studentcomment_title'] = 'Commentaires de l\'étudiant';
$string['taballapp'] = 'Rendez-vous';
$string['tabstatus'] = 'Statut d\'inscription';
$string['tabstud'] = 'Vue étudiant';
$string['teacher'] = 'Enseignant';
$string['teacher_unchanged'] = '-- inchangé --';
$string['teachercomment_title'] = 'Commentaires de l\'enseignant';
$string['teacherfeedback_title'] = 'Réaction de l’enseignant';
$string['teacherid'] = 'Enseignant';
$string['teacherid_help'] = 'Sélectionnez l\'enseignant qui devra diriger les rendez-vous';
$string['teacherinvisible'] = 'Enseignant invisible';
$string['teachervisible'] = 'Enseignant visible';
$string['teachervisible_help'] = 'Cochez ici si vous voulez que les étudiants puissent voir l\'enseignant associé à leur créneau horaire.';
$string['textsize'] = 'Taille du texte';
$string['th_actions'] = 'Action';
$string['th_appdetails'] = 'Détails';
$string['th_attended'] = 'Prés.';
$string['th_comments'] = 'Commentaires';
$string['th_datetime'] = 'Date & heure';
$string['th_datetimedeadline'] = 'Date & heure';
$string['th_details'] = 'Statut';
$string['th_duration'] = 'Durée';
$string['th_email'] = 'email';
$string['th_evaluated'] = 'Eval.';
$string['th_feedback'] = 'Réaction';
$string['th_firstname'] = 'Prénom';
$string['th_grade'] = 'Note';
$string['th_group'] = 'Groupe';
$string['th_groupname'] = 'Groupe';
$string['th_idnumber'] = 'Numéro d\'identification';
$string['th_lastname'] = 'Nom';
$string['th_location'] = 'Lieu/local';
$string['th_participant'] = 'Participant';
$string['th_participants'] = 'Participants';
$string['th_status'] = 'Statut';
$string['th_teacher'] = 'Enseignant';
$string['timeshift'] = 'Déplace l\'échéance absolue';
$string['timetemplate'] = '%H:%M';
$string['title_add'] = 'Ajouter de nouveaux créneaux de rendez-vous';
$string['title_comment'] = 'Modifier vos commentaires';
$string['title_delete'] = 'Effacer les créneaux sélectionnés';
$string['title_edit'] = 'Modifier les créneaux sélectionnés';
$string['title_eval'] = 'Evaluer les créneaux sélectionnés';
$string['title_print'] = 'Imprimier les créneaux';
$string['totalslots'] = 'de {$a->starttime} à {$a->endtime}, {$a->duration} {$a->unit} chacun, {$a->totalslots} créneau-x au total';
$string['unavailableslot'] = 'Ce créneau est disponible à partir de';
$string['unknown'] = 'Inconnu';
$string['visibility'] = 'Visibilité des membres - préréglages';
$string['visibility_all'] = 'Visible';
$string['visibility_anonymous'] = 'Anonyme';
$string['visibility_help'] = 'Définit l\'option de visibilité par défaut pour les nouveaux créneaux créés.<br/><b>Anonyme:<b/> Les membres de ce créneau sont toujours invisibles pour tous.<br/><b>Visible:</b> Tous les membres de ce créneau sont toujours visibles pour tous.<br/><b>Visible seulement pour les membres du créneau:</b>Seuls les membres du créneau peuvent se voir l\'un l\'autre.';
$string['visibility_slot'] = 'Seulement visible pour les membres du créneau.';
$string['warning_groupingid'] = 'Mode groupe activé. Vous devez sélectionner un groupement valide.';
$string['warninggroupmode'] = 'Vous devez activer le mode groupe et sélectionner un groupement pour créer un agenda de groupe!';
$string['warningtext1'] = 'Les créneaux sélectionnés contiennent des valeurs différentes pour ce champ!';
$string['warningtext2'] = 'ATTENTION! Le contenu de ce champ a été modifié!';
