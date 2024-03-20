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
 * Strings for component 'booking', language 'fr', version '4.1'.
 *
 * @package     booking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutmodaloptiondateform'] = 'Créer des dates personnalisées
(par exemple pour les événements bloqués ou pour les dates uniques qui diffèrent de la série de dates).';
$string['accessdenied'] = 'Accès refusé';
$string['activatemails'] = 'Activer les courriels (confirmations, notifications et plus)';
$string['active'] = 'Actif';
$string['activitycompletionsuccess'] = 'Tous les utilisateurs sélectionnés ont été marqués pour la réalisation des activités';
$string['activitycompletiontext'] = 'Message à envoyer à l’utilisateur lorsque l’option de réservation est terminée';
$string['activitycompletiontext_help'] = 'Laissez ce champ vide pour utiliser le texte par défaut du site. Vous pouvez utiliser n’importe lequel des espaces réservés suivants dans le texte :
<ul>
<li>{bookingdetails} - Résumé détaillé de l’option de réservation (y compris les sessions et le lien vers l’option de réservation)</li>
<li>{gotobookingoption} - Lien vers l’option de réservation</li>
<li>{status} - Statut de la réservation</li>
<li>{participant}</li>
<li>{email} - Courriel de l’utilisateur</li>
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
<li>{teacher} - Nom du premier enseignant</li>
<li>{teachers} - Liste de tous les professeurs</li>
<li>{teacherN} - Nom d’un enseignant spécifique, par ex. {enseignant1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insérer le QR code avec l’identifiant de l’utilisateur</li>
<li>{qr_username} - Insérez le QR code avec le nom d’utilisateur de l’utilisateur</li>
<li>{dates} - Horaires des sessions</li>
<li>{shorturl} - URL courte de l’option</li>
<li>{usercalendarurl} - Lien pour s’abonner au calendrier de l’utilisateur (événements personnels)</li>
<li>{coursecalendarurl} - Lien pour s’inscrire au calendrier des cours (événements du cours)</li>
</ul>';
$string['activitycompletiontextmessage'] = 'Vous avez complété l’option de réservation suivante :

{$a->bookingdetails}

Aller au cours : {$a->courselink}
Voir toutes les options de réservation : {$a->bookinglink}';
$string['activitycompletiontextsubject'] = 'Option de réservation terminée';
$string['add_optiondate_series'] = 'Créer une série de dates';
$string['addastemplate'] = 'Ajouter comme modèle';
$string['addbookingrule'] = 'Ajouter une règle';
$string['addcategory'] = 'Modifier les catégories';
$string['addcustomfield'] = 'Ajouter un champ personnalisé';
$string['addholiday'] = 'Ajouter des congès';
$string['additionalpricecategories'] = 'Ajouter ou modifier des catégories de prix';
$string['addmorebookings'] = 'Ajouter plus de réservations';
$string['addnewcategory'] = 'Ajouter une nouvelle catégorie';
$string['addnewinstitution'] = 'Ajouter une nouvelle institution';
$string['addnewlocation'] = 'Ajouter un nouvel emplacement';
$string['addnewreporttemplate'] = 'Ajouter un nouveau modèle de rapport';
$string['addnewtagtemplate'] = 'Ajouter un nouveau modèle de tag';
$string['addoptiondate'] = 'Ajouter une date';
$string['addpricecategory'] = 'Ajouter une catégorie de prix';
$string['addpricecategory_info'] = 'Vous pouvez ajouter une autre catégorie de prix';
$string['address'] = 'Adresse';
$string['addsemester'] = 'Ajouter un semestre';
$string['addtocalendar'] = 'Ajouter au calendrier du cours';
$string['addtocalendardesc'] = 'Les événements du calendrier des cours sont visibles par TOUS les utilisateurs d’un cours. Si vous ne voulez pas qu’ils soient créés du tout, vous pouvez désactiver ce paramètre et le verrouiller par défaut. Ne vous inquiétez pas : les événements du calendrier utilisateur pour les options réservées seront quand même créés.';
$string['addtogroup'] = 'Inscrire automatiquement les utilisateurs dans le groupe';
$string['addtogroup_help'] = 'Inscrire automatiquement les utilisateurs dans le groupe - le groupe sera créé automatiquement avec le nom "Nom de la réservation - Nom de l’option"';
$string['addusertogroup'] = 'Ajouter un utilisateur au groupe :';
$string['advancedoptions'] = 'Options avancées';
$string['aftercompletedtext'] = 'Une fois l’activité terminée';
$string['aftercompletedtext_help'] = 'Laissez ce champ vide pour utiliser le texte par défaut du site. Vous pouvez utiliser n’importe lequel des espaces réservés suivants dans le texte :
<ul>
<li>{bookingdetails} - Résumé détaillé de l’option de réservation (y compris les sessions et le lien vers l’option de réservation)</li>
<li>{gotobookingoption} - Lien vers l’option de réservation</li>
<li>{status} - Statut de la réservation</li>
<li>{participant}</li>
<li>{email} - Courriel de l’utilisateur</li>
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
<li>{teacher} - Nom du premier enseignant</li>
<li>{teachers} - Liste de tous les professeurs</li>
<li>{teacherN} - Nom d’un enseignant spécifique, par ex. {enseignant1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insérer le QR code avec l’identifiant de l’utilisateur</li>
<li>{qr_username} - Insérez le QR code avec le nom d’utilisateur de l’utilisateur</li>
<li>{dates} - Horaires des sessions</li>
<li>{shorturl} - URL courte de l’option</li>
<li>{usercalendarurl} - Lien pour s’abonner au calendrier de l’utilisateur (événements personnels)</li>
<li>{coursecalendarurl} - Lien pour s’inscrire au calendrier des cours (événements du cours)</li>
</ul>';
$string['agreetobookingpolicy'] = 'J’ai lu et accepté les conditions de réservations suivantes';
$string['alertrecalculate'] = '<b>Attention !</b> Tous les prix seront recalculés et tous les anciens prix seront écrasés.';
$string['allbookingoptions'] = 'Télécharger les utilisateurs pour toutes les options de réservation';
$string['allchangessaved'] = 'Toutes les modifications ont été enregistrées.';
$string['allcomments'] = 'Tout le monde peut commenter';
$string['allmailssend'] = 'Tous les courriels aux utilisateurs ont été envoyés avec succès!';
$string['allowdelete'] = 'Autoriser les utilisateurs à annuler eux-mêmes leur réservation.';
$string['allowupdate'] = 'Autoriser les réservations à être mises à jour';
$string['allratings'] = 'Tout le monde peut évaluer';
$string['allteachers'] = 'Tous les enseignants';
$string['allusersbooked'] = 'Tous les {$a} utilisateurs sélectionnés ont été affectés avec succès à cette option de réservation.';
$string['alreadyonlist'] = 'Vous serez notifié';
$string['alreadypassed'] = 'Déjà passé';
$string['answer'] = 'Réponse';
$string['answered'] = 'Répondu';
$string['applyunitfactor'] = 'Appliquer le facteur d’unité';
$string['applyunitfactor_desc'] = 'Si ce paramètre est actif, la durée de l’unité d’enseignement (par exemple 45 min) définie ci-dessus sera utilisée pour calculer le nombre d’unités d’enseignement. Ce nombre sera utilisé comme facteur pour la formule de prix.
 Exemple : Une option de réservation a une série de dates comme "Lun, 15:00 - 16:30". Il dure donc 2 unités pédagogiques (45 min chacune).
 Ainsi, un facteur unitaire de 2 sera appliqué à la formule de prix.';
$string['asglobaltemplate'] = 'Utiliser comme modèle global';
$string['associatedcourse'] = 'Cours associé';
$string['astemplate'] = 'Utiliser comme modèle dans ce cours';
$string['attachedfiles'] = 'Fichiers joints';
$string['attachical'] = 'Lier des évènements ical';
$string['attachicaldesc'] = 'Les notifications par courriel comprendront un événement iCal joint, si cette option est activée';
$string['attachicalsess'] = 'Joignez toutes les dates de session en tant qu’événements iCal';
$string['attachicalsessdesc'] = 'Les notifications par courriel incluront toutes les dates de session définies pour une option de réservation en tant que pièce jointe iCal.';
$string['autcrheader'] = 'Création automatique d’options de réservation';
$string['autcrwhatitis'] = 'Si cette option est activée, elle crée automatiquement une nouvelle option de réservation et lui attribue un utilisateur en tant que gestionnaire de réservation/professeur. Les utilisateurs sont sélectionnés en fonction d’une valeur de champ de profil utilisateur personnalisé.';
$string['autoenrol'] = 'Inscrire automatiquement les utilisateurs';
$string['autoenrol_help'] = 'Si l’option est sélectionnée, les utilisateurs seront inscrits dans le cours associé dès qu’ils font la réservation et désinscrits de celui-ci dès que la réservation est annulée.';
$string['automaticcoursecreation'] = 'Création automatique de cours Moodle (PRO)';
$string['availability'] = 'Encore disponible';
$string['availabilityconditions'] = 'Conditions de disponibilité';
$string['availabilityinfotexts_desc'] = 'Uniquement disponible dans la version PRO.';
$string['availabilityinfotexts_heading'] = 'Textes d’information de disponibilité pour les places de réservation et la liste d’attente';
$string['available'] = 'Places disponibles';
$string['availableplaces'] = 'Places disponibles : {$a->available} sur {$a->maxanswers}';
$string['backtoresponses'] = 'Retour aux réponses';
$string['banusernames'] = 'Bannir les noms d’utilisateur';
$string['banusernames_help'] = 'Pour limiter les noms d’utilisateur qui ne peuvent pas s’appliquer, inscrivez-les simplement dans ce champ et séparez-les par une virgule. Pour interdire les noms d’utilisateur qui se terminent par gmail.com et yahoo.com, écrivez simplement : gmail.com, yahoo.com';
$string['banusernameswarning'] = 'Votre nom d’utilisateur est banni, vous ne pouvez donc pas réserver.';
$string['beforebookedtext'] = 'Avant de réserver';
$string['beforebookedtext_help'] = 'Laissez ce champ vide pour utiliser le texte par défaut du site. Vous pouvez utiliser n’importe lequel des espaces réservés suivants dans le texte :
<ul>
<li>{bookingdetails} - Résumé détaillé de l’option de réservation (y compris les sessions et le lien vers l’option de réservation)</li>
<li>{gotobookingoption} - Lien vers l’option de réservation</li>
<li>{status} - Statut de la réservation</li>
<li>{participant}</li>
<li>{email} - Courriel de l’utilisateur</li>
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
<li>{teacher} - Nom du premier enseignant</li>
<li>{teachers} - Liste de tous les professeurs</li>
<li>{teacherN} - Nom d’un enseignant spécifique, par ex. {enseignant1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insérer le QR code avec l’identifiant de l’utilisateur</li>
<li>{qr_username} - Insérez le QR code avec le nom d’utilisateur de l’utilisateur</li>
<li>{dates} - Horaires des sessions</li>
<li>{shorturl} - URL courte de l’option</li>
<li>{usercalendarurl} - Lien pour s’abonner au calendrier de l’utilisateur (événements personnels)</li>
<li>{coursecalendarurl} - Lien pour s’inscrire au calendrier des cours (événements du cours)</li>
</ul>';
$string['beforecompletedtext'] = 'Après avoir réservé';
$string['beforecompletedtext_help'] = 'Laissez ce champ vide pour utiliser le texte par défaut du site. Vous pouvez utiliser n’importe lequel des espaces réservés suivants dans le texte :
<ul>
<li>{bookingdetails} - Résumé détaillé de l’option de réservation (y compris les sessions et le lien vers l’option de réservation)</li>
<li>{gotobookingoption} - Lien vers l’option de réservation</li>
<li>{status} - Statut de la réservation</li>
<li>{participant}</li>
<li>{email} - Courriel de l’utilisateur</li>
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
<li>{teacher} - Nom du premier enseignant</li>
<li>{teachers} - Liste de tous les professeurs</li>
<li>{teacherN} - Nom d’un enseignant spécifique, par ex. {enseignant1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insérer le QR code avec l’identifiant de l’utilisateur</li>
<li>{qr_username} - Insérez le QR code avec le nom d’utilisateur de l’utilisateur</li>
<li>{dates} - Horaires des sessions</li>
<li>{shorturl} - URL courte de l’option</li>
<li>{usercalendarurl} - Lien pour s’abonner au calendrier de l’utilisateur (événements personnels)</li>
<li>{coursecalendarurl} - Lien pour s’inscrire au calendrier des cours (événements du cours)</li>
</ul>';
$string['biggerthan'] = 'est plus grand que (nombre)';
$string['bo_cond_alreadybooked'] = 'déjà réservé : est déjà réservé par cet utilisateur';
$string['bo_cond_alreadybooked_available'] = 'Pas encore réservé';
$string['bo_cond_alreadybooked_full_available'] = 'L’utilisateur n’a pas encore réservé';
$string['bo_cond_alreadybooked_full_not_available'] = 'Option de réservation déjà réservée';
$string['bo_cond_alreadybooked_not_available'] = 'Réservé';
$string['bo_cond_booking_time'] = 'booking_time : uniquement réservable dans un certain délai';
$string['bo_cond_booking_time_available'] = 'Dans les délais normaux de réservation';
$string['bo_cond_booking_time_full_available'] = 'Dans les délais normaux de réservation. De {$a} à {$b}';
$string['bo_cond_booking_time_full_not_available'] = 'Pas dans les délais de réservation normaux. De {$a} à {$b}';
$string['bo_cond_booking_time_not_available'] = 'Pas dans les délais de réservation normaux.';
$string['bo_cond_customuserprofilefield_available'] = 'Réserver';
$string['bo_cond_customuserprofilefield_field'] = 'Champ de profil';
$string['bo_cond_customuserprofilefield_full_available'] = 'La réservation est possible';
$string['bo_cond_customuserprofilefield_full_not_available'] = 'Seuls les utilisateurs dont le champ personnalisé {$a->profilefield} est défini sur la valeur {$a->value} sont autorisés à réserver.
    <br>Mais vous avez quand même le droit de réserver un utilisateur.';
$string['bo_cond_customuserprofilefield_not_available'] = 'Pas autorisé à réserver';
$string['bo_cond_customuserprofilefield_operator'] = 'Opérateur';
$string['bo_cond_customuserprofilefield_value'] = 'Valeur';
$string['bo_cond_fullybooked'] = 'complet : complet';
$string['bo_cond_fullybooked_available'] = 'Réserver';
$string['bo_cond_fullybooked_full_available'] = 'La réservation est possible';
$string['bo_cond_fullybooked_full_not_available'] = 'Complet. La réservation n’est plus possible.';
$string['bo_cond_fullybooked_not_available'] = 'Complet';
$string['bo_cond_fullybookedoverride'] = 'fullybookedoverride : peut être surréservé par le personnel';
$string['bo_cond_fullybookedoverride_available'] = 'Réserver';
$string['bo_cond_fullybookedoverride_full_available'] = 'Réservation possible';
$string['bo_cond_fullybookedoverride_full_not_available'] = 'Déjà complet, mais vous avez quand même le droit de réserver un utilisateur.';
$string['bo_cond_fullybookedoverride_not_available'] = 'Complet';
$string['bo_cond_isbookable'] = 'isbookable : la réservation est autorisée';
$string['bo_cond_isbookable_available'] = 'Réserver';
$string['bo_cond_isbookable_full_available'] = 'Réservation possible';
$string['bo_cond_isbookable_full_not_available'] = 'La réservation est interdite pour cette option de réservation.
    <br>Mais vous avez quand même le droit de réserver un utilisateur.';
$string['bo_cond_isbookable_not_available'] = 'Réservation non autorisée';
$string['bo_cond_iscancelled'] = 'iscancelled : option de réservation annulée';
$string['bo_cond_iscancelled_available'] = 'Réserver';
$string['bo_cond_iscancelled_full_available'] = 'Réservation possible';
$string['bo_cond_iscancelled_full_not_available'] = 'Annulé - réservation impossible';
$string['bo_cond_iscancelled_not_available'] = 'Annulé';
$string['bo_cond_isloggedin'] = 'isloggedin : l’utilisateur est connecté';
$string['bo_cond_isloggedin_available'] = 'Réserver';
$string['bo_cond_isloggedin_full_available'] = 'Réservation possible';
$string['bo_cond_isloggedin_full_not_available'] = 'L’utilisateur n’est pas connecté.';
$string['bo_cond_isloggedin_not_available'] = 'Connectez-vous pour réserver cette option.';
$string['bo_cond_max_number_of_bookings'] = 'max_number_of_bookings : nombre maximal de réservations par utilisateur atteint';
$string['bo_cond_max_number_of_bookings_available'] = 'Réserver';
$string['bo_cond_max_number_of_bookings_full_available'] = 'Réservation possible';
$string['bo_cond_max_number_of_bookings_full_not_available'] = 'L’utilisateur a atteint le nombre maximum de réservations';
$string['bo_cond_max_number_of_bookings_not_available'] = 'Nombre maximum de réservations atteint';
$string['bo_cond_onnotifylist_available'] = 'Réserver';
$string['bo_cond_onnotifylist_full_available'] = 'Réservation possible';
$string['bo_cond_onnotifylist_full_not_available'] = 'L’utilisateur a atteint le nombre maximum de réservations';
$string['bo_cond_onnotifylist_not_available'] = 'Nombre maximum de réservations atteint';
$string['bo_cond_onwaitinglist'] = 'onwaitinglist : l’utilisateur est sur la liste d’attente';
$string['bo_cond_onwaitinglist_available'] = 'Réserver';
$string['bo_cond_onwaitinglist_full_available'] = 'Réservation possible';
$string['bo_cond_onwaitinglist_full_not_available'] = 'L’utilisateur est sur liste d’attente';
$string['bo_cond_onwaitinglist_not_available'] = 'Complet - Vous êtes sur liste d’attente';
$string['bo_cond_previouslybooked'] = 'previouslybooked : l’utilisateur a déjà réservé une certaine option';
$string['bo_cond_previouslybooked_available'] = 'Réserver';
$string['bo_cond_previouslybooked_full_available'] = 'Réservation possible';
$string['bo_cond_previouslybooked_full_not_available'] = 'Seuls les utilisateurs ayant déjà réservé cette <a href="{$a}">option</a> sont autorisés à réserver.
    <br>Mais vous avez quand même le droit de réserver un utilisateur.';
$string['bo_cond_previouslybooked_not_available'] = 'Non autorisé à réserver';
$string['bo_cond_previouslybooked_optionid'] = 'Option de réservation';
$string['bo_cond_priceisset'] = 'priceisset : le prix est fixé';
$string['bo_cond_priceisset_available'] = 'Réserver';
$string['bo_cond_priceisset_full_available'] = 'Réservation possible';
$string['bo_cond_priceisset_full_not_available'] = 'Un prix est fixé, paiement obligatoire';
$string['bo_cond_priceisset_not_available'] = 'Vous devez payer';
$string['bo_cond_userprofilefield'] = 'userprofilefield : le champ de profil utilisateur a une certaine valeur';
$string['bo_cond_userprofilefield_available'] = 'Réserver';
$string['bo_cond_userprofilefield_field'] = 'Champ de profil';
$string['bo_cond_userprofilefield_full_available'] = 'Réservation possible';
$string['bo_cond_userprofilefield_full_not_available'] = 'Seuls les utilisateurs dont le champ personnalisé {$a->profilefield} a pour valeur {$a->value} sont autorisés à réserver.
    <br>Mais vous avez quand même le droit de réserver un utilisateur.';
$string['bo_cond_userprofilefield_not_available'] = 'Non autorisé à réserver';
$string['bo_cond_userprofilefield_operator'] = 'Opérateur';
$string['bo_cond_userprofilefield_value'] = 'Valeur';
$string['booked'] = 'Réservé';
$string['bookedpast'] = 'Réservé (cours terminé)';
$string['bookedtext'] = 'Confirmation de réservation';
$string['bookedtext_help'] = 'Laisser ce champ vide pour utiliser le texte par défaut du site. Vous pouvez utiliser n’importe lequel des espaces réservés suivants dans le texte :
<ul>
<li>{bookingdetails} - Résumé détaillé de l’option de réservation (y compris les sessions et le lien vers l’option de réservation)</li>
<li>{gotobookingoption} - Lien vers l’option de réservation</li>
<li>{status} - Statut de la réservation</li>
<li>{participant}</li>
<li>{email} - Courriel de l’utilisateur</li>
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
<li>{adress}</li>
<li>{eventtype}</li>
<li>{teacher} - Nom du premier enseignant</li>
<li>{teachers} - Liste de tous les professeurs</li>
<li>{teacherN} - Nom d’un enseignant spécifique, par ex. {enseignant1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insérer le QR code avec l’identifiant de l’utilisateur</li>
<li>{qr_username} - Insérer le QR code avec le nom d’utilisateur de l’utilisateur</li>
<li>{dates} - Horaires des sessions</li>
<li>{shorturl} - URL courte de l’option</li>
<li>{usercalendarurl} - Lien pour s’abonner au calendrier de l’utilisateur (événements personnels)</li>
<li>{coursecalendarurl} - Lien pour s’inscrire au calendrier des cours (événements du cours)</li>
</ul>';
$string['bookedtextmessage'] = 'Votre réservation a été enregistrée :

{$a->bookingdetails}
<p>##########################################</p>
Statut de la réservation : {$a->status}
Participant : {$a->participant}

Pour voir tous vos cours réservés, cliquez sur le lien suivant : {$a->bookinglink}
Le cours associé peut être trouvé ici : {$a->courselink}';
$string['bookedtextsubject'] = 'Confirmation de réservation pour {$a->title}';
$string['bookedtextsubjectbookingmanager'] = 'Nouvelle réservation pour {$a->title} par {$a->participant}';
$string['bookedusers'] = 'Utilisateurs enregistrés';
$string['booking'] = 'Réservation';
$string['booking:addeditownoption'] = 'Ajouter une nouvelle option et modifier ses propres options.';
$string['booking:addinstance'] = 'Ajouter une nouvelle réservation';
$string['booking:bookforothers'] = 'Réserver pour les autres';
$string['booking:canseeinvisibleoptions'] = 'Afficher les options invisibles.';
$string['booking:cansendmessages'] = 'Peut envoyer des messages';
$string['booking:cantoggleformmode'] = 'L’utilisateur peut modifier tous les paramètres';
$string['booking:changelockedcustomfields'] = 'Peut modifier les champs d’options de réservation personnalisés verrouillés.';
$string['booking:choose'] = 'Réserver';
$string['booking:comment'] = 'Ajouter des commentaires';
$string['booking:communicate'] = 'Peut communiquer';
$string['booking:deleteresponses'] = 'Supprimer les réponses';
$string['booking:downloadresponses'] = 'Télécharger les réponses';
$string['booking:managecomments'] = 'Gérer les commentaires';
$string['booking:manageoptiontemplates'] = 'Gérer les modèles d’options';
$string['booking:rate'] = 'Tarifer les options de réservation choisies';
$string['booking:readallinstitutionusers'] = 'Montrer tous les utilisateurs';
$string['booking:readresponses'] = 'Lire les réponses';
$string['booking:semesters'] = 'Réservation : Semestres';
$string['booking:sendpollurl'] = 'Envoyer l’URL du sondage';
$string['booking:sendpollurltoteachers'] = 'Envoyer l’URL du sondage aux enseignants';
$string['booking:subscribeusers'] = 'Effectuer des réservations pour d’autres utilisateurs';
$string['booking:updatebooking'] = 'Gérer les options de réservation';
$string['booking:viewallratings'] = 'Voir toutes les notes brutes données par les individus';
$string['booking:viewanyrating'] = 'Voir le total des notes que n’importe qui a reçu';
$string['booking:viewrating'] = 'Afficher la note totale que vous avez reçue';
$string['booking_customfield'] = 'Champs personnalisés de réservation pour les options de réservation';
$string['bookingaction'] = 'Action';
$string['bookinganswer_cancelled'] = 'Option de réservation annulée pour/par l’utilisateur';
$string['bookingattachment'] = 'Fichier joint';
$string['bookingcategory'] = 'Catégorie';
$string['bookingchangedtext'] = 'Message à envoyer lorsqu’une option de réservation change (ne sera envoyé qu’aux utilisateurs ayant déjà réservé). Utiliser l’espace réservé {changes} pour afficher les modifications. Saisir 0 pour désactiver les notifications de modification.';
$string['bookingchangedtext_help'] = 'Saisir 0 pour désactiver les notifications de modification.

Vous pouvez utiliser n’importe lequel des espaces réservés suivants dans le texte :
<ul>
<li>{changes} - Qu’est-ce qui a changé ?</li>
<li>{bookingdetails} - Résumé détaillé de l’option de réservation (y compris les sessions et le lien vers l’option de réservation)</li>
<li>{gotobookingoption} - Lien vers l’option de réservation</li>
<li>{status} - Statut de la réservation</li>
<li>{participant}</li>
<li>{email} - Courriel de l’utilisateur</li>
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
<li>{teacher} - Nom du premier enseignant</li>
<li>{teachers} - Liste de tous les professeurs</li>
<li>{teacherN} - Nom d’un enseignant spécifique, par ex. {enseignant1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insérer le QR code avec l’identifiant de l’utilisateur</li>
<li>{qr_username} - Insérer le QR code avec le nom d’utilisateur de l’utilisateur</li>
<li>{dates} - Horaires des sessions</li>
<li>{shorturl} - URL courte de l’option</li>
<li>{usercalendarurl} - Lien pour s’abonner au calendrier de l’utilisateur (événements personnels)</li>
<li>{coursecalendarurl} - Lien pour s’inscrire au calendrier des cours (événements du cours)</li>
</ul>';
$string['bookingchangedtextmessage'] = 'Votre réservation "{$a->title}" a changé.

Voici les modifications :
{changements}

Pour afficher les modifications et tous vos cours réservés, cliquer sur le lien suivant : {$a->bookinglink}';
$string['bookingchangedtextsubject'] = 'Modifier la notification pour {$a->title}';
$string['bookingclosingtime'] = 'Jusqu’à';
$string['bookingcondition'] = 'Condition';
$string['bookingdeleted'] = 'Votre réservation a été annulée';
$string['bookingduration'] = 'Durée';
$string['bookingfull'] = 'Il n’y a pas de places disponibles';
$string['bookingmanagererror'] = 'Le nom d’utilisateur entré n’est pas valide. Soit il n’existe pas, soit il y a plus d’un utilisateur avec ce nom (exemple : si l’authentification locale et mnet sont activées)';
$string['bookingmeanwhilefull'] = 'Pendant ce temps quelqu’un a pris déjà la dernière place';
$string['bookingname'] = 'Nom de la réservation';
$string['bookingopen'] = 'Ouvert';
$string['bookingorganizatorname'] = 'Nom de l’organisateur';
$string['bookingpoints'] = 'Points de cours';
$string['bookingpolicy'] = 'Conditions de réservation';
$string['bookingpollurl'] = 'URL du sondage';
$string['bookingpollurlteachers'] = 'URL du sondage pour les enseignants';
$string['bookingsaved'] = 'Votre réservation a été sauvegardé avec succès. Vous pouvez désormais continuer à réserver d’autres cours.';
$string['bookingtags'] = 'Mots-clés';
$string['bookingtext'] = 'Texte de la réservation';
$string['booknow'] = 'Réserver maintenant';
$string['bookotherusers'] = 'Enregistrer d’autres utilisateurs';
$string['booktootherbooking'] = 'Enregistrer des utilisateurs pour d’autres réservations';
$string['btnbooknowname'] = 'Nom du bouton "Réserver maintenant"';
$string['btncacname'] = 'Nom du bouton "Confirmer l’achèvement de l’activité"';
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
$string['confirmationmessagesettings'] = 'Paramètres de confirmation de courriel';
$string['confirmbookingoffollowing'] = 'Veuillez confirmer la réservation pour le cours suivant';
$string['confirmdeletebookingoption'] = 'Voulez-vous vraiment supprimer cette option de réservation ?';
$string['coursedate'] = 'Date';
$string['courseendtime'] = 'Heure de fin du cours';
$string['coursestarttime'] = 'Heure de début du cours';
$string['csvfile'] = 'Fichier CSV';
$string['csvfile_help'] = 'Le fichier CSV ne doit contenir qu’un colonne nommée Institution';
$string['customlabels'] = 'Etiquettes personnalisées';
$string['dateerror'] = 'Mauvaise date ligne {$a}:';
$string['dateparseformat'] = 'Format de la date';
$string['dateparseformat_help'] = 'Utilisez s’il vous plaît le format de date spécifié dans le fichier CSV. Consultez l’aide <a href="http://php.net/manual/en/function.date.php">this</a> pour les options options.';
$string['days'] = '{$a} jours';
$string['daystonotify'] = 'Combien de jours avant le début de l’événement faut-il notifier les participaints?';
$string['defaultbookingoption'] = 'Options de réservation par défaut';
$string['defaultdateformat'] = 'j.n.Y H:i:s';
$string['deletebooking'] = 'Voulez-vous vraiment vous désinscrire du cours suivant ? <br /><br /> <b>{$a} </b>';
$string['deletecategory'] = 'Annuler';
$string['deletedbookingusermessage'] = 'Bonjour {$a->participant},

Votre réservation pour {$a->title} ({$a->startdate} {$a->starttime}) a été annulée.';
$string['deletedbookingusersubject'] = 'Réservation pour {$a->title} annulée';
$string['deletedtext'] = 'Message d’annulation de réservation';
$string['deletedtext_help'] = 'Laissez ce champ vide si vous voulez utiliser le texte par défaut du site. Vous pouvez utiliser n’importe laquelle des variables suivantes dans le texte:
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
<li>{qr_id} - Insère le QR code avec l’id de l’utilisateur</li>
<li>{qr_username} - Insère le QR code avec le nom d’utilisateur</li>
</ul>';
$string['deletesubcategory'] = 'Merci d’effacer toutes les sous-catégories de cette catégorie!';
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
$string['enablecompletion'] = 'Activer la réalisation d’activité.';
$string['enablecompletiongroup'] = 'Réalisation d’activité';
$string['endtimenotset'] = 'Date de fin non rensignée';
$string['entervalidurl'] = 'Veuillez entrer une URL valide!';
$string['error:failedtosendconfirmation'] = 'L’utilisateur suivant ne’a pas reçu d’email de confirmation

Statut de réservation: {$a->status}
Participant: {$a->participant}
Cours: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Lien: {$a->bookinglink}
Cours associé: {$a->courselink}';
$string['eventduration'] = 'Durée de l’évènement';
$string['eventpoints'] = 'Points';
$string['eventreport_viewed'] = 'Rapport vu';
$string['eventtype'] = 'Type d’évènement';
$string['excelfile'] = 'Fichier CSV avec la réalisation d’activités';
$string['existingsubscribers'] = 'Inscrits existants';
$string['expired'] = 'Désolés, cette activité a fermé le {$a} et n’est plus disponible';
$string['fillinatleastoneoption'] = 'vous devez fournir au moins deux réponses possibles';
$string['forcourse'] = 'pour le cours';
$string['full'] = 'Plein';
$string['fullname'] = 'Nom complet';
$string['goenrol'] = 'Aller à l’enregistrement';
$string['gotobooking'] = '<<Réservations';
$string['gotop'] = 'Aller en haut de page';
$string['groupname'] = 'Nom du groupe';
$string['hours'] = '{$a} heures';
$string['importcsvbookingoption'] = 'Importer un fichier CSV avec options de réservation';
$string['importcsvtitle'] = 'Importer un fichier CSV';
$string['importexcelbutton'] = 'Importer la réalisation d’activité';
$string['importexceltitle'] = 'Importer la réalisation d’activité';
$string['importfinished'] = 'Importation terminée!';
$string['institution'] = 'Institution';
$string['institutionname'] = 'Nom de l’institution';
$string['institutions'] = 'Institutions';
$string['lblbooking'] = 'Nomp de l’étiquette "Réservation"';
$string['lblinstitution'] = 'nom de l’étiquette "Institution"';
$string['lbllocation'] = 'Nom de l’étiquette "Lieu"';
$string['lblname'] = 'nom de l’étiquette "Nom"';
$string['lblsputtname'] = 'Nom de l’étiquette "Envoyer l’url de sondage aux professeurs"';
$string['lblsurname'] = 'Nom de l’étiquette "Prénom"';
$string['lblteachname'] = 'Nom de l’étiquette "Professeurs"';
$string['limit'] = 'Limite';
$string['limitanswers'] = 'Limiter le nombre de participants';
$string['limitanswers_help'] = 'Si vous changez cette option et que vous avez enregistré des personnes, vous pouvez les enlever sans notification!';
$string['location'] = 'Lieu';
$string['mailconfirmationsent'] = 'Vous allez recevoir sous peu une confirmation par email';
$string['managebooking'] = 'Gérer';
$string['maxoverbooking'] = 'Nombre max. de places sur la liste d’attente';
$string['maxparticipantsnumber'] = 'Nombre max. de participants';
$string['maxperuser'] = 'Nombre max. de réservations par utilisateur';
$string['maxperuser_help'] = 'Le nombre maximum de réservations qu’un utilisateur individuel peut faire à la fois dans cette activité. Une heure après la fin de l’événement, il n’est plus compté dans cette limite.';
$string['maxperuserwarning'] = 'Vous avez actuellement un maximum de {$a->count}/{$a->limit} réservations';
$string['messagesend'] = 'Votre message a été envoyé avec succès';
$string['messagesubject'] = 'Sujet';
$string['messagetext'] = 'Message';
$string['minutes'] = '{$a} minutes';
$string['modulename'] = 'Réservation';
$string['modulenameplural'] = 'Réservations';
$string['mustchooseone'] = 'Vous devez choisir une option avant de réserver. Rien n’a été sauvegardé.';
$string['mustfilloutuserinfobeforebooking'] = 'Avant de soumettre le fomulaire de réservation, merci de remplir quelques informations personnelles de réservation';
$string['no'] = 'Non';
$string['nobookingselected'] = 'Aucune option de réservation sélectionnée';
$string['nocourse'] = 'Aucun cours sélectionné pour cette option de réservation';
$string['noguestchoose'] = 'Désolés, les invités ne sont pas autorisés à entrer des données';
$string['noresultsviewable'] = 'Les résultats ne sont pas actuellement accessibles.';
$string['norighttobook'] = 'Réserver n’est pas possible pour votre rôle utilisateur. Merci de contacter l’administrateur du site afin qu’il vous donne les droits appropriés ou bien identifiez vous.';
$string['nosubscribers'] = 'Il n’y a pas de professeur assigné !';
$string['notbooked'] = 'Pas encore réservé';
$string['notconectedbooking'] = 'Pas connecté';
$string['noteacherfound'] = 'Pas de professeur trouvé ligne {$a}:';
$string['notificationtext'] = 'Texte de notification montré lors de l’achèvement de l’activité.';
$string['notificationtext_help'] = 'Laissez ce champ vide pour utilliser le texte par défaut du site. Vous pouvez utiliser n’importe laquelle de ces variables dans le texte:
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
<li>{qr_id} - Insère le QR code avec l’id d’utilisateur</li>
<li>{qr_username} - Insère le QR code avec le nom d’utilisateur</li>
</ul>';
$string['notopenyet'] = 'Désolé cette activité est indisponible jusqu’au {$a}';
$string['nouserfound'] = 'Pas d’utillisateur trouvé:';
$string['nousers'] = 'Pas d’utilisateurs!';
$string['onlythisbookingurl'] = 'Seulement cette URL de réservation';
$string['onwaitinglist'] = 'Vous êtes sur la liste d’attente';
$string['optionid'] = 'ID d’option';
$string['organizatorname'] = 'Nom de l’organisateur';
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
<li>{qr_id} - Insère le QR code avec l’id d’utilisateur</li> <li>{qr_username} - Insère le QR code avec le nom d’utilisateur</li> </ul>';
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
<li>{qr_id} - Insère le QR code avec l’id d’utilisateur</li> <li>{qr_username} - Insère le QR code avec le nom d’utilisateur</li>
</ul>';
$string['pollurlteacherstext'] = 'URL d’envoi de sondage pour les professeurs';
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
<li>{qr_id} - Insère le QR code avec l’id d’utilisateur</li>
<li>{qr_username} - Insère le QR code avec le nom d’utilisateur</li>
</ul>';
$string['pollurlteacherstextmessage'] = 'Veuillez répondre au sondage

URL de sondage {pollurlteachers}';
$string['pollurlteacherstextsubject'] = 'Veuillez répondre au sondage';
$string['pollurltext'] = 'Envoyer l’URL de sondage';
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
<li>{qr_id} - Insère le QR code avec l’id d’utilisateur</li>
<li>{qr_username} - Insère le QR code avec le nom d’utilisateur</li>
</ul>';
$string['pollurltextmessage'] = 'Veuillez répondre au sondage

URL de sondage {pollurl}';
$string['pollurltextsubject'] = 'Veuillez répondre au sondage';
$string['potentialsubscribers'] = 'Abonnés potentiels';
$string['removeafterminutes'] = 'Enlever la réalisation d’activité après N minutes';
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
$string['sendcustommessage'] = 'Envoyer un message personnalisé';
$string['sendmailtobooker'] = 'Page de réservation pour les autres utilisateurs : Envoyer un email aux utilisateurs qui réservent plutôt qu’aux utilisateurs qui sont réservés';
$string['sendmailtobooker_help'] = 'Activez cette option afin d’envoyer des mails de confirmation de réservation à l’utilisateur qui inscrit d’autres utilisateurs au lieu des utilisateurs, qui ont été ajoutés à une option de réservation.
Ceci n’est pertinent que pour les réservations effectuées sur la page "inscrire d’autres utilisateurs".';
$string['showactive'] = 'Ne montrer que les réservations actives';
$string['showallbookings'] = 'Montrer un aperçu des inscriptions pour toutes les réservations';
$string['showinapi'] = 'Montrer dans l’API?';
$string['spaceleft'] = 'espace disponible';
$string['spacesleft'] = 'espaces disponibles';
$string['startendtimeknown'] = 'Les dates de début et fin de cours sont connues';
$string['starttimenotset'] = 'Date de départ non renseignée';
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
<li>{qr_id} - Insère le QR code avec l’id d’utilisateur</li>
<li>{qr_username} - Insère le QR code avec le nom d’utilisateur</li>
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
$string['toomuchusersbooked'] = 'Le nombre maximal d’utilisateurs que vous pouvez inscrire est de {$a}';
$string['updatebooking'] = 'Editer cette option de réservation';
$string['usedinbooking'] = 'Vous ne pouvez pas supprimer cette catégorie, parce que vous utilisez la réservation!';
$string['userdownload'] = 'Télécharger les utilisateurs';
$string['userleave'] = 'L’utilisation quitte la réservation';
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
<li>{qr_id} - Insère le QR code avec l’id d’utilisateur</li>
<li>{qr_username} - Insère le QR code avec le nom d’utilisateur</li>
</ul>';
$string['usernameofbookingmanager'] = 'Nom d’utilisateur du gestionnaire de réservation';
$string['usernameofbookingmanager_help'] = 'Nom d’utilisateur de l’utilisateur qui sera affiché dans le champ "De" des notifications de confirmation.
Si l’option "Envoyer l’email de confirmation au gestionnaire de réservation" est activée, c’est l’utilisateur qui reçoit une copie des notifications de confirmation.';
$string['viewallresponses'] = 'Gérer {$a} réponses';
$string['waitinglist'] = 'Sur liste d’attente';
$string['waitinglisttaken'] = 'Sur la liste d’attente';
$string['waitinglistusers'] = 'Utilisateurs sur la liste d’attente';
$string['waitingplacesavailable'] = 'Places disponibles sur la liste d’attente';
$string['waitingtext'] = 'Confirmation de la liste d’attente';
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
<li>{qr_id} - Insère le QR code avec l’id d’utilisateur</li>
<li>{qr_username} - Insère le QR code avec le nom d’utilisateur</li>
</ul>';
$string['waitspaceavailable'] = 'Places disponibles sur la liste d’attente';
$string['withselected'] = 'Avec les utilisateurs sélectionnés:';
$string['wrongdataallfields'] = 'Merci de remplir tous les champs!';
$string['yes'] = 'Oui';
$string['yourselection'] = 'Votre sélection';
