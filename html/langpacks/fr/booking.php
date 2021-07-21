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
 * Strings for component 'booking', language 'fr', version '3.11'.
 *
 * @package     booking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompletionsuccess'] = 'Tous les utilisateurs sélectionnés ont été marqués pour la réalisation des activités';
$string['addcategory'] = 'Modifier les catégories';
$string['addeditbooking'] = 'Modifier la réservation';
$string['addmorebookings'] = 'Ajouter plus de réservations';
$string['addnewbookingoption'] = 'Ajouter une nouvelle option de réservation';
$string['addnewcategory'] = 'Ajouter une nouvelle catégorie';
$string['addnewinstitution'] = 'Ajouter une nouvelle institution';
$string['addnewtagtemplate'] = 'Ajouter un nouveau modèle de tag';
$string['address'] = 'Adresse';
$string['addteachers'] = 'Ajouter des enseignants';
$string['addtocalendar'] = 'Ajouter au calendrier';
$string['addtogroup'] = 'Inscrire automatiquement les utilisateurs dans le groupe';
$string['addtogroup_help'] = 'Inscrire automatiquement les utilisateurs dans le groupe - le groupe sera créé automatiquement avec le nom "Nom de la réservation - Nom de l\'option"';
$string['advancedoptions'] = 'Options avancées';
$string['agreetobookingpolicy'] = 'J\'ai lu et accepté les conditions de réservations suivantes';
$string['allbookingoptions'] = 'Télécharger les utilisateurs pour toutes les options de réservation';
$string['allchangessave'] = 'Toutes les modifications ont été sauvegardées';
$string['allmailssend'] = 'Tous les courriels aux utilisateurs ont été envoyés avec succès!';
$string['allowdelete'] = 'Autoriser les utilisateurs à annuler eux-mêmes leur réservation.';
$string['allowupdate'] = 'Autoriser les réservations à être mises à jour';
$string['answered'] = 'Répondu';
$string['associatedcourse'] = 'Cours associé';
$string['attachedfiles'] = 'Fichiers joints';
$string['attachical'] = 'Lier des évènements ical';
$string['attachicaldesc'] = 'Les notifications par courriel comprendront un événement iCal joint, si cette option est activée';
$string['autoenrol'] = 'Inscrire automatiquement les utilisateurs';
$string['autoenrol_help'] = 'Si l\'option est sélectionnée, les utilisateurs seront inscrits dans le cours associé dès qu\'ils font la réservation et désinscrits de celui-ci dès que la réservation est annulée.';
$string['availability'] = 'Encore disponible';
$string['available'] = 'Places disponibles';
$string['backtoresponses'] = 'Retour aux réponses';
$string['booked'] = 'Réservé';
$string['bookedpast'] = 'Réservé';
$string['bookedtext'] = 'Confirmation de réservation';
$string['bookedtext_help'] = 'Laissez ce champ vide pour utiliser le texte par défaut. Vous pouvez utiliser les noms réservés suivants dans le texte :
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N est le numéro du professeur ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insère le QR code avec l\'id utilisateur</li>
<li>{qr_username} - Insère le QR code avec le nom d\'utilisateur</li>
</ul>';
$string['bookedusers'] = 'Utilisateurs enregistrés';
$string['booking'] = 'Réservation';
$string['booking:addinstance'] = 'Ajouter une nouvelle réservation';
$string['booking:choose'] = 'Réserver';
$string['booking:communicate'] = 'Peut communiquer';
$string['booking:deleteresponses'] = 'Supprimer les réponses';
$string['booking:downloadresponses'] = 'Télécharger les réponses';
$string['booking:readresponses'] = 'Lire les réponses';
$string['booking:sendpollurl'] = 'Envoyer l\'URL du sondage';
$string['booking:sendpollurltoteachers'] = 'Envoyer l\'URL du sondage aux enseignants';
$string['booking:subscribeusers'] = 'Effectuer des réservations pour d\'autres utilisateurs';
$string['booking:updatebooking'] = 'Gérer les options de réservation';
$string['bookingattachment'] = 'Fichier joint';
$string['bookingcategory'] = 'Catégorie';
$string['bookingclose'] = 'Jusqu\'au';
$string['bookingdeleted'] = 'Votre réservation a été annulée';
$string['bookingduration'] = 'Durée';
$string['bookingfull'] = 'Il n\'y a pas de places disponibles';
$string['bookingmanagererror'] = 'Le nom d\'utilisateur entré n\'est pas valide. Soit il n\'existe pas, soit il y a plus d\'un utilisateur avec ce nom (exemple : si l\'authentification locale et mnet sont activées)';
$string['bookingmeanwhilefull'] = 'Pendant ce temps quelqu\'un a pris déjà la dernière place';
$string['bookingname'] = 'Nom de la réservation';
$string['bookingopen'] = 'Ouvert';
$string['bookingorganizatorname'] = 'Nom de l\'organisateur';
$string['bookingpoints'] = 'Points de cours';
$string['bookingpolicy'] = 'Conditions de réservation';
$string['bookingpollurl'] = 'URL du sondage';
$string['bookingpollurlteachers'] = 'URL du sondage pour les enseignants';
$string['bookingsaved'] = 'Votre réservation a été sauvegardé avec succès. Vous pouvez désormais continuer à réserver d\'autres cours.';
$string['bookingtags'] = 'Mots-clés';
$string['bookingtext'] = 'Texte de la réservation';
$string['booknow'] = 'Réserver maintenant';
$string['bookotherusers'] = 'Enregistrer d\'autres utilisateurs';
$string['booktootherbooking'] = 'Enregistrer des utilisateurs pour d\'autres réservations';
$string['btnbooknowname'] = 'Nom du bouton "Réserver maintenant"';
$string['btncacname'] = 'Nom du bouton "Confirmer l\'achèvement de l\'activité"';
$string['btncancelname'] = 'Nom du bouton "Annuler la réservation"';
$string['cancancelbook'] = 'Autoriser les utilisateurs à annuler ou choisir leur réservation quand elle a commencé?';
$string['cancel'] = 'Annuler';
$string['cancelbooking'] = 'Annuler la réservation';
$string['categories'] = 'Catégories';
$string['category'] = 'Catégorie';
$string['categoryname'] = 'Nom de la catégorie';
$string['choosecourse'] = 'Choisir un cours';
$string['closed'] = 'Réservation fermée';
$string['completed'] = 'Terminé';
$string['conectedbooking'] = 'Réservation connectée';
$string['conectedbooking_help'] = 'Aide';
$string['confirmationmessage'] = 'Votre réservation a été enregistrée

Statut de la réservation: {$a->status}
Participant: {$a->participant}
Cours: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Pour voir tout vos cours réservés cliquez sur: {$a->bookinglink}
Le cours associé peut être trouvé ici : {$a->courselink}';
$string['confirmationmessagesettings'] = 'Paramètres de confirmation de courriel';
$string['confirmationmessagewaitinglist'] = 'Bonjour {$a->participant},

Votre réservation a été enregistrée

Statut de la réservation: {$a->status}
Participant: {$a->participant}
Cours: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Pour voir tout vos cours réservés cliquez sur: {$a->bookinglink}';
$string['confirmationsubject'] = 'Confirmation de réservation pour {$a->title}';
$string['confirmationsubjectbookingmanager'] = 'Nouvelle participation pour {$a->title} par {$a->participant}';
$string['confirmationsubjectwaitinglist'] = 'Statut de la réservation pour {$a->title}';
$string['confirmationsubjectwaitinglistmanager'] = 'Statut de la réservation pour {$a->title}';
$string['confirmbookingoffollowing'] = 'Veuillez confirmer la réservation pour le cours suivant';
$string['confirmdeletebookingoption'] = 'Voulez-vous vraiment supprimer cette option de réservation ?';
$string['coursedate'] = 'Date';
$string['courseendtime'] = 'Heure de fin du cours';
$string['coursestarttime'] = 'Heure de début du cours';
$string['createdby'] = 'Module de réservation créé par edulabs.org';
$string['csvfile'] = 'Fichier CSV';
$string['csvfile_help'] = 'Le fichier CSV ne doit contenir qu\'un colonne nommée Institution';
$string['customlabels'] = 'Etiquettes personnalisées';
$string['dateerror'] = 'Mauvaise date ligne {$a}:';
$string['dateparseformat'] = 'Format de la date';
$string['dateparseformat_help'] = 'Utilisez s\'il vous plaît le format de date spécifié dans le fichier CSV. Consultez l\'aide <a href="http://php.net/manual/en/function.date.php">this</a> pour les options options.';
$string['days'] = '{$a} jours';
$string['daystonotify'] = 'Combien de jours avant le début de l\'événement faut-il notifier les participaints?';
$string['defaultbookingoption'] = 'Options de réservation par défaut';
$string['defaultdateformat'] = 'j.n.Y H:i:s';
$string['deletebooking'] = 'Voulez-vous vraiment vous désinscrire du cours suivant ? <br /><br /> <b>{$a} </b>';
$string['deletebookingoption'] = 'Annuler cette option de réservation';
$string['deletecategory'] = 'Annuler';
$string['deletedbookingmessage'] = 'Réservation effacée pour le cours suivant: {$a->title}

Utilisateur: {$a->participant}
Titre: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Cours: {$a->courselink}
Lien de réservation: {$a->bookinglink}';
$string['deletedbookingsubject'] = 'Réservation effacée: {$a->title} par {$a->participant}';
$string['deletedbookingusermessage'] = 'Bonjour {$a->participant},

Votre réservation pour {$a->title} ({$a->startdate} {$a->starttime}) a été annulée.';
$string['deletedbookingusersubject'] = 'Réservation pour {$a->title} annulée';
$string['deletedtext'] = 'Message d\'annulation de réservation';
$string['deletedtext_help'] = 'Laissez ce champ vide si vous voulez utiliser le texte par défaut du site. Vous pouvez utiliser n\'importe laquelle des variables suivantes dans le texte:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N est le numéro du professeur ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insère le QR code avec l\'id de l\'utilisateur</li>
<li>{qr_username} - Insère le QR code avec le nom d\'utilisateur</li>
</ul>';
$string['deletesubcategory'] = 'Merci d\'effacer toutes les sous-catégories de cette catégorie!';
$string['deleteuserfrombooking'] = 'Voulez vous vraiment effacer les utilisateurs de la réservation ?';
$string['disablebookingusers'] = 'Désactiver les réservations des utilisateurs - masquer le bouton "Réserver maintenant".';
$string['donotselectcourse'] = 'Pas de cours sélectionné';
$string['download'] = 'Télécharger';
$string['downloadallresponses'] = 'Télécharger toutes les réponses pour toutes les options de réservation';
$string['downloadusersforthisoptionods'] = 'Télécharger les utilisateurs au format .ods';
$string['downloadusersforthisoptionxls'] = 'Télécharger les utilisateurs au format .xls';
$string['editcategory'] = 'Editer';
$string['editinstitutions'] = 'Editer les institutions';
$string['edittag'] = 'Editer';
$string['enablecompletion'] = 'Activer la réalisation d\'activité.';
$string['enablecompletiongroup'] = 'Réalisation d\'activité';
$string['endtimenotset'] = 'Date de fin non rensignée';
$string['entervalidurl'] = 'Veuillez entrer une URL valide!';
$string['error:failedtosendconfirmation'] = 'L\'utilisateur suivant ne\'a pas reçu d\'email de confirmation

Statut de réservation: {$a->status}
Participant: {$a->participant}
Cours: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Lien: {$a->bookinglink}
Cours associé: {$a->courselink}';
$string['eventbooking_cancelled'] = 'Réservation annulée';
$string['eventbookingoption_booked'] = 'Option de réservation réservée';
$string['eventduration'] = 'Durée de l\'évènement';
$string['eventpoints'] = 'Points';
$string['eventreport_viewed'] = 'Rapport vu';
$string['eventtype'] = 'Type d\'évènement';
$string['excelfile'] = 'Fichier CSV avec la réalisation d\'activités';
$string['existingsubscribers'] = 'Inscrits existants';
$string['expired'] = 'Désolés, cette activité a fermé le {$a} et n\'est plus disponible';
$string['fillinatleastoneoption'] = 'vous devez fournir au moins deux réponses possibles';
$string['forcourse'] = 'pour le cours';
$string['full'] = 'Plein';
$string['fullname'] = 'Nom complet';
$string['goenrol'] = 'Aller à l\'enregistrement';
$string['gotobooking'] = '<<Réservations';
$string['gotop'] = 'Aller en haut de page';
$string['groupname'] = 'Nom du groupe';
$string['hours'] = '{$a} heures';
$string['howmanyusers'] = 'Combien d\'utilisateurs peuvent ils réserver?';
$string['importcsvbookingoption'] = 'Importer un fichier CSV avec options de réservation';
$string['importcsvtitle'] = 'Importer un fichier CSV';
$string['importexcelbutton'] = 'Importer la réalisation d\'activité';
$string['importexceltitle'] = 'Importer la réalisation d\'activité';
$string['importfinished'] = 'Importation terminée!';
$string['institution'] = 'Institution';
$string['institutionname'] = 'Nom de l\'institution';
$string['institutions'] = 'Institutions';
$string['lblbooking'] = 'Nomp de l\'étiquette "Réservation"';
$string['lblinstitution'] = 'nom de l\'étiquette "Institution"';
$string['lbllocation'] = 'Nom de l\'étiquette "Lieu"';
$string['lblname'] = 'nom de l\'étiquette "Nom"';
$string['lblsputtname'] = 'Nom de l\'étiquette "Envoyer l\'url de sondage aux professeurs"';
$string['lblsurname'] = 'Nom de l\'étiquette "Prénom"';
$string['lblteachname'] = 'Nom de l\'étiquette "Professeurs"';
$string['limit'] = 'Limite';
$string['limitanswers'] = 'Limiter le nombre de participants';
$string['limitanswers_help'] = 'Si vous changez cette option et que vous avez enregistré des personnes, vous pouvez les enlever sans notification!';
$string['location'] = 'Lieu';
$string['mailconfirmationsent'] = 'Vous allez recevoir sous peu une confirmation par email';
$string['managebooking'] = 'Gérer';
$string['maxoverbooking'] = 'Nombre max. de places sur la liste d\'attente';
$string['maxparticipantsnumber'] = 'Nombre max. de participants';
$string['maxperuser'] = 'Nombre max. de réservations par utilisateur';
$string['maxperuser_help'] = 'Le nombre maximum de réservations qu\'un utilisateur individuel peut faire à la fois dans cette activité. Une heure après la fin de l\'événement, il n\'est plus compté dans cette limite.';
$string['maxperuserwarning'] = 'Vous avez actuellement un maximum de {$a->count}/{$a->limit} réservations';
$string['messagesend'] = 'Votre message a été envoyé avec succès';
$string['messagesubject'] = 'Sujet';
$string['messagetext'] = 'Message';
$string['minutes'] = '{$a} minutes';
$string['modulename'] = 'Réservation';
$string['modulenameplural'] = 'Réservations';
$string['mustchooseone'] = 'Vous devez choisir une option avant de réserver. Rien n\'a été sauvegardé.';
$string['mustfilloutuserinfobeforebooking'] = 'Avant de soumettre le fomulaire de réservation, merci de remplir quelques informations personnelles de réservation';
$string['no'] = 'Non';
$string['nobookingselected'] = 'Aucune option de réservation sélectionnée';
$string['nocourse'] = 'Aucun cours sélectionné pour cette option de réservation';
$string['noguestchoose'] = 'Désolés, les invités ne sont pas autorisés à entrer des données';
$string['noresultsviewable'] = 'Les résultats ne sont pas actuellement accessibles.';
$string['norighttobook'] = 'Réserver n\'est pas possible pour votre rôle utilisateur. Merci de contacter l\'administrateur du site afin qu\'il vous donne les droits appropriés ou bien identifiez vous.';
$string['nosubscribers'] = 'Il n\'y a pas de professeur assigné !';
$string['notbooked'] = 'Pas encore réservé';
$string['notconectedbooking'] = 'Pas connecté';
$string['noteacherfound'] = 'Pas de professeur trouvé ligne {$a}:';
$string['notificationsubject'] = 'Cours à venir';
$string['notificationtext'] = 'Texte de notification montré lors de l\'achèvement de l\'activité.';
$string['notificationtext_help'] = 'Laissez ce champ vide pour utilliser le texte par défaut du site. Vous pouvez utiliser n\'importe laquelle de ces variables dans le texte:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N est le numéro du professeur ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insère le QR code avec l\'id d\'utilisateur</li>
<li>{qr_username} - Insère le QR code avec le nom d\'utilisateur</li>
</ul>';
$string['notificationtextmessage'] = 'Le cours commencera :

Cours: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}';
$string['notificationtextsubject'] = 'Information sur le début du cours!';
$string['notopenyet'] = 'Désolé cette activité est indisponible jusqu\'au {$a}';
$string['nouserfound'] = 'Pas d\'utillisateur trouvé:';
$string['nousers'] = 'Pas d\'utilisateurs!';
$string['onlythisbookingurl'] = 'Seulement cette URL de réservation';
$string['onwaitinglist'] = 'Vous êtes sur la liste d\'attente';
$string['optionid'] = 'ID d\'option';
$string['organizatorname'] = 'Nom de l\'organisateur';
$string['pluginadministration'] = 'Administration des réservations';
$string['pluginname'] = 'Réservation';
$string['pollstrftimedate'] = '%d-%m-%Y';
$string['pollurl'] = 'URL de sondage';
$string['pollurl_help'] = 'Vous pouvez utiliser les variables suivantes dans le texte:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N est le numéro du professeur ex. {teacher1}</li> <li>{pollstartdate}</li>
<li>{qr_id} - Insère le QR code avec l\'id d\'utilisateur</li> <li>{qr_username} - Insère le QR code avec le nom d\'utilisateur</li> </ul>';
$string['pollurlteachers'] = 'URL de sondage pour les professeurs';
$string['pollurlteachers_help'] = 'Vous pouvez utiliser les variables suivantes dans le texte:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N est le numéro du professeur ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insère le QR code avec l\'id d\'utilisateur</li> <li>{qr_username} - Insère le QR code avec le nom d\'utilisateur</li>
</ul>';
$string['pollurlteacherstext'] = 'URL d\'envoi de sondage pour les professeurs';
$string['pollurlteacherstext_help'] = 'Laissez ce champ vide pour utiliser le texte par défaut du site. Vous pouvez utiliser les variables suivantes dans le texte:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N est le numéro du professeur ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insère le QR code avec l\'id d\'utilisateur</li>
<li>{qr_username} - Insère le QR code avec le nom d\'utilisateur</li>
</ul>';
$string['pollurlteacherstextmessage'] = 'Veuillez répondre au sondage

URL de sondage {pollurlteachers}';
$string['pollurlteacherstextsubject'] = 'Veuillez répondre au sondage';
$string['pollurltext'] = 'Envoyer l\'URL de sondage';
$string['pollurltext_help'] = 'Laissez ce champ vide pour utiliser le texte par défaut du site. Vous pouvez utiliser les variables suivantes dans le texte:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N est le numéro du professeur ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insère le QR code avec l\'id d\'utilisateur</li>
<li>{qr_username} - Insère le QR code avec le nom d\'utilisateur</li>
</ul>';
$string['pollurltextmessage'] = 'Veuillez répondre au sondage

URL de sondage {pollurl}';
$string['pollurltextsubject'] = 'Veuillez répondre au sondage';
$string['potentialsubscribers'] = 'Abonnés potentiels';
$string['removeafterminutes'] = 'Enlever la réalisation d\'activité après N minutes';
$string['removeresponses'] = 'Effacer toutes les réponses';
$string['reset'] = 'Réinitialiser';
$string['responses'] = 'Réponses';
$string['responsesto'] = 'Réponses à {$a}';
$string['rootcategory'] = 'Racine';
$string['savenewtagtemplate'] = 'Sauvegarder';
$string['searchtag'] = 'Étiquettes de recherche';
$string['select'] = 'Sélection';
$string['selectatleastoneuser'] = 'Merci de sélectionner au moins 1 utilisateur!';
$string['selectcategory'] = 'Sélectionner la catégorie';
$string['sendconfirmmail'] = 'Envoyer l\'email de confirmation';
$string['sendconfirmmailtobookingmanger'] = 'Envoyer l\'email de confirmation au gestionnaire de réservations';
$string['sendcustommessage'] = 'Envoyer un message personnalisé';
$string['sendmailtobooker'] = 'Page de réservation pour les autres utilisateurs : Envoyer un email aux utilisateurs qui réservent plutôt qu\'aux utilisateurs qui sont réservés';
$string['sendmailtobooker_help'] = 'Activez cette option afin d\'envoyer des mails de confirmation de réservation à l\'utilisateur qui inscrit d\'autres utilisateurs au lieu des utilisateurs, qui ont été ajoutés à une option de réservation.
Ceci n\'est pertinent que pour les réservations effectuées sur la page "inscrire d\'autres utilisateurs".';
$string['showactive'] = 'Ne montrer que les réservations actives';
$string['showallbookings'] = 'Montrer un aperçu des inscriptions pour toutes les réservations';
$string['showinapi'] = 'Montrer dans l\'API?';
$string['spaceleft'] = 'espace disponible';
$string['spacesleft'] = 'espaces disponibles';
$string['startendtimeknown'] = 'Les dates de début et fin de cours sont connues';
$string['starttimenotset'] = 'Date de départ non renseignée';
$string['statuschangebookedmessage'] = 'Bonjour {$a->participant},

Votre statut de réservation a changé. Vous êtes maintenant inscrit sur {$a->title}.

Statut de réservation: {$a->status}
Participant: {$a->participant}
Cours: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Pour voir tous vos cours réservés cliquez sur le lien suivant: {$a->bookinglink}
Le lien associé peut être trouvé ici: {$a->courselink}';
$string['statuschangebookedsubject'] = 'Statut de réservation changé pour {$a->title}';
$string['statuschangetext'] = 'Message de changement de statut';
$string['statuschangetext_help'] = 'Laissez ce champ vide pour utiliser le texte par défaut du site. Vous pouvez utiliser les variables suivantes dans le texte:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N est le numéro du professeur ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insère le QR code avec l\'id d\'utilisateur</li>
<li>{qr_username} - Insère le QR code avec le nom d\'utilisateur</li>
</ul>';
$string['submitandaddnew'] = 'Sauvegarder et ajouter un nouveau';
$string['subscribersto'] = 'Professeurs pour « {$a} »';
$string['subscribetocourse'] = 'Inscrivez les utilisateurs au cours';
$string['subscribeuser'] = 'Voulez-vous vraiment inscrire les utilisateurs au cours suivant';
$string['tagtag'] = 'Balise';
$string['tagtemplates'] = 'Modèles de balises';
$string['tagtext'] = 'Texte';
$string['taken'] = 'Pris';
$string['teachers'] = 'Professeurs';
$string['timecreated'] = 'Heure créée';
$string['timerestrict'] = 'Restreindre les réponses à cette période de temps';
$string['to'] = 'à';
$string['toomuchusersbooked'] = 'Le nombre maximal d\'utilisateurs que vous pouvez inscrire est de {$a}';
$string['unlimited'] = 'Illimité';
$string['updatebooking'] = 'Editer cette option de réservation';
$string['usedinbooking'] = 'Vous ne pouvez pas supprimer cette catégorie, parce que vous utilisez la réservation!';
$string['userdownload'] = 'Télécharger les utilisateurs';
$string['userleave'] = 'L\'utilisation quitte la réservation';
$string['userleave_help'] = 'Laissez ce champ vide pour utiliser le texte par défaut du site. Vous pouvez utiliser les variables suivantes dans le texte:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N est le numéro du professeur ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insère le QR code avec l\'id d\'utilisateur</li>
<li>{qr_username} - Insère le QR code avec le nom d\'utilisateur</li>
</ul>';
$string['userleavebookedmessage'] = 'Bonjour {$a->participant},

Vous vous êtes désinscrit avec succès de {$a->title}.';
$string['userleavebookedsubject'] = 'Vous vous êtes désabonné avec succès de {$a->title}';
$string['usernameofbookingmanager'] = 'Nom d\'utilisateur du gestionnaire de réservation';
$string['usernameofbookingmanager_help'] = 'Nom d\'utilisateur de l\'utilisateur qui sera affiché dans le champ "De" des notifications de confirmation.
Si l\'option "Envoyer l\'email de confirmation au gestionnaire de réservation" est activée, c\'est l\'utilisateur qui reçoit une copie des notifications de confirmation.';
$string['users'] = 'Gérer les réponses';
$string['viewallresponses'] = 'Gérer {$a} réponses';
$string['waitinglist'] = 'Sur liste d\'attente';
$string['waitinglisttaken'] = 'Sur la liste d\'attente';
$string['waitinglistusers'] = 'Utilisateurs sur la liste d\'attente';
$string['waitingplacesavailable'] = 'Places disponibles sur la liste d\'attente';
$string['waitingtext'] = 'Confirmation de la liste d\'attente';
$string['waitingtext_help'] = 'Laissez ce champ vide pour utiliser le texte par défaut du site. Vous pouvez utiliser les variables suivantes dans le texte:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N est le numéro du professeur ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insère le QR code avec l\'id d\'utilisateur</li>
<li>{qr_username} - Insère le QR code avec le nom d\'utilisateur</li>
</ul>';
$string['waitspaceavailable'] = 'Places disponibles sur la liste d\'attente';
$string['withselected'] = 'Avec les utilisateurs sélectionnés:';
$string['wrongdataallfields'] = 'Merci de remplir tous les champs!';
$string['yes'] = 'Oui';
$string['yourselection'] = 'Votre sélection';
