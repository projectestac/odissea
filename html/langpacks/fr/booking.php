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
 * Strings for component 'booking', language 'fr', version '4.4'.
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
$string['activitycompletiontextmessage'] = 'Vous avez complété l’option de réservation suivante :

{$a->bookingdetails}

Aller au cours : {$a->courselink}
Voir toutes les options de réservation : {$a->bookinglink}';
$string['activitycompletiontextsubject'] = 'Option de réservation terminée';
$string['addastemplate'] = 'Ajouter comme modèle';
$string['addbookingrule'] = 'Ajouter une règle';
$string['addcategory'] = 'Modifier les catégories';
$string['addholiday'] = 'Ajouter des congès';
$string['additionalpricecategories'] = 'Ajouter ou modifier des catégories de prix';
$string['addmorebookings'] = 'Ajouter plus de réservations';
$string['addnewcategory'] = 'Ajouter une nouvelle catégorie';
$string['addnewreporttemplate'] = 'Ajouter un nouveau modèle de rapport';
$string['addnewtagtemplate'] = 'Ajouter un nouveau modèle de tag';
$string['addoptiondate'] = 'Ajouter une date';
$string['addpricecategory'] = 'Ajouter une catégorie de prix';
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
$string['alertrecalculate'] = '<b>Attention !</b> Tous les prix seront recalculés et tous les anciens prix seront écrasés.';
$string['allbookingoptions'] = 'Télécharger les utilisateurs pour toutes les options de réservation';
$string['allchangessaved'] = 'Toutes les modifications ont été enregistrées.';
$string['allcomments'] = 'Tout le monde peut commenter';
$string['allmailssend'] = 'Tous les courriels aux utilisateurs ont été envoyés avec succès !';
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
 Exemple : une option de réservation a une série de dates comme "Lun, 15:00 - 16:30". Il dure donc 2 unités pédagogiques (45 min chacune).
 Ainsi, un facteur unitaire de 2 sera appliqué à la formule de prix.';
$string['asglobaltemplate'] = 'Utiliser comme modèle global';
$string['associatedcourse'] = 'Cours associé';
$string['astemplate'] = 'Utiliser comme modèle dans ce cours';
$string['attachedfiles'] = 'Fichiers joints';
$string['autcrheader'] = 'Création automatique d’options de réservation';
$string['autcrwhatitis'] = 'Si cette option est activée, elle crée automatiquement une nouvelle option de réservation et lui attribue un utilisateur en tant que gestionnaire de réservation/professeur. Les utilisateurs sont sélectionnés en fonction d’une valeur de champ de profil utilisateur personnalisé.';
$string['autoenrol'] = 'Inscrire automatiquement les utilisateurs';
$string['autoenrol_help'] = 'Si l’option est sélectionnée, les utilisateurs seront inscrits dans le cours associé dès qu’ils font la réservation et désinscrits de celui-ci dès que la réservation est annulée.';
$string['automaticcoursecreation'] = 'Création automatique de cours Moodle (PRO)';
$string['availability'] = 'Encore disponible';
$string['availabilityconditions'] = 'Conditions de disponibilité';
$string['available'] = 'Places disponibles';
$string['availableplaces'] = 'Places disponibles : {$a->available} sur {$a->maxanswers}';
$string['backtoresponses'] = '&lt;&lt; Retour aux réponses';
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
$string['booked'] = 'Réservé';
$string['bookedpast'] = 'Réservé (cours terminé)';
$string['bookedtext'] = 'Confirmation de réservation';
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
$string['bookingaction'] = 'Action';
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
$string['bookingfulldidntregister'] = 'L\'option est complète, tous les utilisateurs n\'ont pas été transférés !';
$string['bookingimages'] = 'Déposer les images d\'en-tête pour les options de réservation - elles doivent avoir exactement le même nom que le champ personnalisé sélectionné dans chaque possibilité de réservation.';
$string['bookingimagescustomfield'] = 'Champ personnalisé de l\'option de réservation à faire correspondre avec les images d\'en-tête';
$string['bookinginstance'] = 'Instance de réservation';
$string['bookinginstancetemplatename'] = 'Nom du modèle de l\'instance de réservation';
$string['bookinginstancetemplatessettings'] = 'Modèle de l\'instance de réservation';
$string['bookingmanagererror'] = 'Le nom d’utilisateur entré n’est pas valide. Soit il n’existe pas, soit il y a plus d’un utilisateur avec ce nom (exemple : si l’authentification locale et mnet sont activées)';
$string['bookingmeanwhilefull'] = 'Pendant ce temps quelqu’un a pris déjà la dernière place';
$string['bookingname'] = 'Nom de la réservation';
$string['bookingnotopenyet'] = 'Votre événement commence dans {$a} minutes. Le lien que vous avez utilisé vous redirigera si vous cliquez à nouveau dessus dans les 15 minutes avant le démarrage de l\'évènement.';
$string['bookingopen'] = 'Ouvert';
$string['bookingopeningtime'] = 'De';
$string['bookingoptioncalendarentry'] = '<a href="{$a}" class="btn btn-primary">Réservez maintenant...</a>';
$string['bookingoptiondefaults'] = 'Paramètres par défaut des options de réservation';
$string['bookingoptiondefaultsdesc'] = 'Ici vous pouvez définir des paramètres par défaut pour la création d\'option de réservation et les verrouiller si nécessaire.';
$string['bookingoptionimage'] = 'Déposer une image';
$string['bookingoptionname'] = 'Nom de l\'option de réservation';
$string['bookingoptionprice'] = 'Prix';
$string['bookingoptionsfromtemplatemenu'] = 'Nouvelles options de réservation à partir du modèle';
$string['bookingoptionsmenu'] = 'Option de réservation';
$string['bookingoptiontitle'] = 'Titre de l\'option de réservation';
$string['bookingorganizatorname'] = 'Nom de l’organisateur';
$string['bookingpassed'] = 'L\'événement est terminé.';
$string['bookingplacesenoughmessage'] = 'Il reste encore suffisamment de places disponibles.';
$string['bookingplacesfullmessage'] = 'Il n\'y a plus de places disponibles.';
$string['bookingplacesinfotexts'] = 'Afficher les textes d\'information sur la disponibilité des places réservées';
$string['bookingplaceslowmessage'] = 'Il ne reste plus que quelques places disponibles.';
$string['bookingplaceslowpercentage'] = 'Message lorsque le pourcentage de places réservées est faible';
$string['bookingplaceslowpercentagedesc'] = 'Si le nombre de places disponibles est inférieur ou égal à ce pourcentage, un message indiquant que le nombre de places est insuffisant s\'affiche.';
$string['bookingpoints'] = 'Points de cours';
$string['bookingpolicy'] = 'Conditions de réservation';
$string['bookingpollurl'] = 'URL du sondage';
$string['bookingpollurlteachers'] = 'URL du sondage pour les enseignants';
$string['bookingpricecategory'] = 'Catégorie de prix';
$string['bookingpricesettings'] = 'Paramètres de prix';
$string['bookingpricesettings_desc'] = 'Ici, vous pouvez personnaliser les prix de la réservation.';
$string['bookingrule'] = 'Règle';
$string['bookingruleaction'] = 'Action de la règle';
$string['bookingrulecondition'] = 'Condition d\'application de la règle';
$string['bookingrules'] = 'Réservation : définir des règles globales (PRO)';
$string['bookingsaved'] = 'Votre réservation a été sauvegardé avec succès. Vous pouvez désormais continuer à réserver d’autres cours.';
$string['bookingsettings'] = 'Réservation : paramètres principaux';
$string['bookingtags'] = 'Mots-clés';
$string['bookingtext'] = 'Texte de la réservation';
$string['booknow'] = 'Réserver maintenant';
$string['bookotherusers'] = 'Enregistrer d’autres utilisateurs';
$string['bookotheruserslimit'] = 'Nombre maximum d\'utilisateurs qu\'un enseignant assigné à l\'option de réservation peut réserver';
$string['booktootherbooking'] = 'Enregistrer des utilisateurs pour d’autres réservations';
$string['bookuserswithoutcompletedactivity'] = 'Enregistrer des utilisateurs sans avoir achevé l\'activité';
$string['bstcourse'] = 'Cours';
$string['bstcoursestarttime'] = 'Date / Heure';
$string['bstinstitution'] = 'Institution';
$string['bstlink'] = 'Montrer';
$string['bstlocation'] = 'Localisation';
$string['bstmanageresponses'] = 'Gestion des réponses';
$string['bstparticipants'] = 'Participants';
$string['bstteacher'] = 'Enseignant(s)';
$string['bsttext'] = 'Option de réservation';
$string['bstwaitinglist'] = 'Sur liste d\'attente';
$string['btnbooknowname'] = 'Nom du bouton « Réserver maintenant »';
$string['btncacname'] = 'Nom du bouton « Confirmer l’achèvement de l’activité »';
$string['btncancelname'] = 'Nom du bouton « Annuler la réservation »';
$string['btnviewavailable'] = 'Voir les options disponibles';
$string['cachedef_bookingoptions'] = 'Options de réservation (cache)';
$string['cachedef_bookingoptionsanswers'] = 'Réponses des options de réservation (cache)';
$string['cachedef_bookingoptionsettings'] = 'Paramètres des options de réservation (cache)';
$string['cachedef_bookingoptionstable'] = 'Tableaux d\'options de réservation avec requêtes SQL hachées (cache)';
$string['cachedef_cachedbookinginstances'] = 'Instance de réservation (cache)';
$string['cachedef_cachedpricecategories'] = 'Catégories des prix de réservation (cache)';
$string['cachedef_cachedprices'] = 'Prix des réservations (cache)';
$string['cachedef_cachedsemesters'] = 'Semestres (cache)';
$string['caladdascourseevent'] = 'Ajouter au calendrier (visible uniquement par les participants du cours)';
$string['caladdassiteevent'] = 'Ajouter au calendrier (visible par tous les utilisateurs)';
$string['caldonotadd'] = 'Ne pas ajouter au calendrier du cours';
$string['caleventtype'] = 'Visibilité des événements dans le calendrier';
$string['cancancelbookdays'] = 'Interdire aux utilisateurs d\'annuler leur réservation n jours avant le début du cours. 0 signifie que les utilisateurs peuvent encore annuler n jours APRÈS le début du cours.';
$string['cancancelbookdaysno'] = 'Ne pas limiter';
$string['cancel'] = 'Annuler';
$string['cancelallusers'] = 'Annuler les réservations de tous les participants';
$string['cancelbooking'] = 'Annuler la réservation';
$string['canceloption'] = 'Annuler l\'option de réservation';
$string['canceloption_desc'] = 'L\'annulation d\'une option de réservation signifie qu\'il n\'est plus possible de réserver, mais qu\'elle est toujours affichée dans la liste.';
$string['cancelreason'] = 'Raison de l\'annulation de cette option de réservation';
$string['cancelthisbookingoption'] = 'Annuler cette option de réservation';
$string['cannotremovesubscriber'] = 'Vous devez supprimer l\'activité avant d\'annuler la réservation. La réservation n\'a pas été annulée !';
$string['categories'] = 'Catégories';
$string['category'] = 'Catégorie';
$string['categoryname'] = 'Nom de la catégorie';
$string['cfgsignin'] = 'Configuration de la feuille d\'émargement';
$string['cfgsignin_desc'] = 'Configurer les paramètres de la feuille d\'émargement';
$string['changeinfoadded'] = 'a été ajouté :';
$string['changeinfocfadded'] = 'Un champ a été ajouté :';
$string['changeinfocfchanged'] = 'Un champ a été modifié :';
$string['changeinfocfdeleted'] = 'Un champ a été supprimé :';
$string['changeinfochanged'] = 'a été modifié :';
$string['changeinfodeleted'] = 'a été supprimé :';
$string['changeinfosessionadded'] = 'Une session a été ajoutée :';
$string['changeinfosessiondeleted'] = 'Une session a été supprimée :';
$string['changenew'] = '[NOUVEAU]';
$string['changeold'] = '[SUPPRIMÉ]';
$string['changesemester'] = 'Modifier le semestre';
$string['changesemester:warning'] = '<strong>Attention:</strong> En cliquant sur « Enregistrer les modifications », toutes les dates seront supprimées et remplacées par les dates du semestre choisi.';
$string['choose...'] = 'Choisir…';
$string['choosepdftitle'] = 'Sélectionner un titre pour la feuille d\'émargement';
$string['chooseperiod'] = 'Sélectionner une période de temps';
$string['chooseperiod_help'] = 'Sélectionner une période de temps pour créer la série de dates.';
$string['choosesemester'] = 'Sélectionner un semestre';
$string['choosesemester_help'] = 'Choisir le semestre pour lequel le(s) congé(s) doit(vent) être créé(s).';
$string['closed'] = 'Réservation fermée';
$string['comments'] = 'Commentaires';
$string['completed'] = 'Terminé';
$string['completedcomments'] = 'Uniquement si l\'activité est terminée';
$string['completedratings'] = 'Uniquement si l\'activité est terminée';
$string['completionmodule'] = 'À l\'issue de l\'achèvement de l\'activité sélectionnée, activer la suppression en bloc des réservations des utilisateurs';
$string['completionmodule_help'] = 'Afficher un bouton de suppression en bloc pour les réponses aux réservations si un autre module de cours a été achevé. Les réservations des utilisateurs seront supprimées en cliquant sur un bouton dans le rapport de la page ! Seules les activités dont l\'achèvement est activé peuvent être sélectionnées dans la liste.';
$string['confirmactivtyfrom'] = 'Confirmer l\'activité des utilisateurs à partir de';
$string['confirmationmessagesettings'] = 'Paramètres de confirmation de courriel';
$string['confirmbookingoffollowing'] = 'Veuillez confirmer la réservation pour le cours suivant';
$string['confirmcanceloption'] = 'Confirmer l\'annulation de l\'option de réservation';
$string['confirmcanceloptiontitle'] = 'Modifier le statut de l\'option de réservation';
$string['confirmdeletebookingoption'] = 'Voulez-vous vraiment supprimer cette option de réservation ?';
$string['confirmoptioncompletion'] = '(Non) confirmation de l\'état d\'achèvement';
$string['confirmpresence'] = 'Confirmer la présence';
$string['confirmusers'] = 'Confirmer l\'activité des utilisateurs';
$string['confirmuserswith'] = 'Confirmer les utilisateurs qui ont terminé une activité ou reçu un badge';
$string['contains'] = 'contient (texte)';
$string['containsnot'] = 'ne contient pas (texte)';
$string['copy'] = '- Copier';
$string['copyonlythisbookingurl'] = 'Copier l\'URL de la réservation';
$string['copypollurl'] = 'Copier l\'URL du sondage';
$string['copytoclipboard'] = 'Copier dans le presse-papiers : Ctrl+C, Entrée';
$string['copytotemplate'] = 'Enregistrer l\'option de réservation comme modèle';
$string['copytotemplatesucesfull'] = 'L\'option de réservation a été sauvegardée avec succès en tant que modèle.';
$string['coursedate'] = 'Date';
$string['courseendtime'] = 'Heure de fin du cours';
$string['coursepageshortinfo'] = 'Pour réserver ce cours, cliquer sur « Voir les options disponibles », choisir une option de réservation et cliquer sur « Réserver maintenant ».';
$string['coursepageshortinfolbl'] = 'Court texte d\'information';
$string['coursepageshortinfolbl_help'] = 'Choisir un court texte d\'information à afficher sur la page du cours.';
$string['coursestarttime'] = 'Heure de début du cours';
$string['courseurl'] = 'URL du cours';
$string['createdbywunderbyte'] = 'Module de réservation créé par Wunderbyte GmbH';
$string['createnewbookingoption'] = 'Nouvelle option de réservation';
$string['createnewbookingoptionfromtemplate'] = 'Ajouter une nouvelle option de réservation à partir d\'un modèle';
$string['csvfile'] = 'Fichier CSV';
$string['customdatesbtn'] = '<i class="fa fa-plus-square"></i> Dates personnalisées...';
$string['customdownloadreport'] = 'Télécharger le rapport';
$string['customfield'] = 'Champ personnalisé à définir dans les paramètres de l\'option de réservation. Il sera ensuite affiché dans l\'aperçu de l\'option de réservation.';
$string['customfieldconfigure'] = 'Réservation : Champs d\'options de réservation personnalisés';
$string['customfielddef'] = 'Champs d\'options de réservation personnalisé';
$string['customfielddesc'] = 'Après avoir ajouté un champ personnalisé, vous pouvez en définir la valeur dans les paramètres de l\'option de réservation. La valeur sera indiquée dans la description de l\'option de réservation.';
$string['customfieldname'] = 'Nom du champ';
$string['customfieldname_help'] = 'Vous pouvez saisir le nom de champ de votre choix. Les noms de champs spéciaux
 <ul>
 <li>Réunion des équipes</li>
 <li>ZoomRéunion</li>
 <li>BigBlueButtonRéunion</li>
 </ul> en combinaison avec un lien dans le champ de valeur affichera les boutons et les liens qui ne sont accessibles que pendant (et un peu avant) les réunions proprement dites.';
$string['customfieldoptions'] = 'Liste des valeurs possibles';
$string['customfields'] = 'Champs personnalisés';
$string['customfieldtype'] = 'Type de champ';
$string['customfieldvalue'] = 'Valeur';
$string['customfieldvalue_help'] = 'Vous pouvez saisir la valeur de votre choix (texte, nombre ou HTML).<br>
 Si vous avez utilisé l\'un des noms de champs spéciaux
 <ul>
 <li>Réunion des équipes</li>
 <li>ZoomRéunion</li>
 <li>BigBlueButtonRéunion</li>
 </ul> alors saisissez le lien complet vers la session de réunion commençant par https:// ou http://';
$string['customprofilefield'] = 'Champ de profil personnalisé à vérifier';
$string['customprofilefieldvalue'] = 'Valeur du champ de profil personnalisé à vérifier';
$string['customreporttemplate'] = 'Modèle de rapport personnalisé';
$string['customreporttemplates'] = 'Modèles de rapport personnalisé';
$string['dateandtime'] = 'Date et heure';
$string['dateerror'] = 'Mauvaise date ligne {$a}:';
$string['datenotset'] = 'Date non fixée';
$string['dateparseformat'] = 'Format de la date';
$string['dateparseformat_help'] = 'Veuillez utiliser le format de date spécifié dans le fichier CSV. Consultez l’aide <a href="https://php.net/manual/fr/function.date.php">ici</a> pour les options.';
$string['dates'] = 'Dates';
$string['dayofweektime'] = 'Jour & Heur';
$string['days'] = '{$a} jours';
$string['daystonotify'] = 'Combien de jours avant le début de l’événement faut-il notifier les participants ?';
$string['daystonotify2'] = 'Deuxième notification avant le début de l\'événement pour informer les participants.';
$string['daystonotify_help'] = 'Ne fonctionne que si les dates de début et de fin de l\'option sont définies ! Indiquer 0 pour désactiver cette fonctionnalité.';
$string['daystonotifysession'] = 'Nombre de jours avant le début de la session pour informer les participants';
$string['daystonotifysession_help'] = 'Saisir 0 pour désactiver la notification par courrier électronique pour cette session.';
$string['daystonotifyteachers'] = 'Nombre de jours avant l\'événement - début de la notification aux enseignants (PRO)';
$string['defaultbookingoption'] = 'Options de réservation par défaut';
$string['defaultdateformat'] = 'j.n.Y H:i:s';
$string['defaultpricecategoryname'] = 'Nom de la catégorie de prix par défaut';
$string['defaultpriceformula'] = 'Formule du prix';
$string['defaultpriceformuladesc'] = 'L\'objet JSON permet de configurer le calcul automatique des prix avec une option de réservation.';
$string['defaulttemplate'] = 'Modèle par défaut';
$string['defaulttemplatedesc'] = 'Modèle d\'option de réservation par défaut lors de la création d\'une nouvelle option de réservation.';
$string['defaultvalue'] = 'Valeur du prix par défaut';
$string['defaultvalue_help'] = 'Saisir une valeur par défaut pour chaque prix de cette catégorie. Bien entendu, cette valeur peut être remplacée ultérieurement.';
$string['delcustfield'] = 'Supprimer ce champ et tous les paramètres associés dans les options de réservation';
$string['deletebooking'] = 'Voulez-vous vraiment vous désinscrire du cours suivant ? <br /><br /> <b>{$a} </b>';
$string['deletebookingrule'] = 'Supprimer la règle';
$string['deletecategory'] = 'Annuler';
$string['deletecustomfield'] = 'Supprimer un champ personnalisé ?';
$string['deletecustomfield_help'] = 'Attention : si cette case est cochée, le champ personnalisé associé sera supprimé lors de l\'enregistrement.';
$string['deletedbookingusermessage'] = 'Bonjour {$a->participant},

Votre réservation pour {$a->title} ({$a->startdate} {$a->starttime}) a été annulée.';
$string['deletedbookingusersubject'] = 'Réservation pour {$a->title} annulée';
$string['deletedrule'] = 'Règle supprimée.';
$string['deletedtext'] = 'Message d’annulation de réservation';
$string['deletedusers'] = 'Utilisateurs supprimés';
$string['deleteholiday'] = 'Supprimer les vacances';
$string['deleteoptiondate'] = 'Supprimer la date';
$string['deleteresponsesactivitycompletion'] = 'Supprimer tous les utilisateurs dont l\'activité est terminée : {$a}';
$string['deleterule'] = 'Supprimer';
$string['deletesemester'] = 'Supprimer le semestre';
$string['deletesubcategory'] = 'Merci d’effacer toutes les sous-catégories de cette catégorie !';
$string['deletethisbookingoption'] = 'Supprimer cette option de réservation';
$string['deleteuserfrombooking'] = 'Voulez-vous vraiment effacer les utilisateurs de la réservation ?';
$string['description'] = 'Description';
$string['disablebookingusers'] = 'Désactiver les réservations des utilisateurs - masquer le bouton "Réserver maintenant".';
$string['disablepricecategory'] = 'Désactiver la catégorie de prix';
$string['disablepricecategory_help'] = 'Lorsqu\'une catégorie de prix est désactivée, il n\'est plus possible de l\'utiliser.';
$string['dontaddpersonalevents'] = 'Ne pas ajouter d\'événements au calendrier personnel';
$string['download'] = 'Télécharger';
$string['downloadallresponses'] = 'Télécharger toutes les réponses pour toutes les options de réservation';
$string['downloadusersforthisoptionods'] = 'Télécharger les utilisateurs au format .ods';
$string['downloadusersforthisoptionxls'] = 'Télécharger les utilisateurs au format .xls';
$string['duplicatename'] = 'Le nom de cette option de réservation existe déjà. Veuillez en choisir un autre.';
$string['duplicationrestore'] = 'Duplication, sauvegarde et restauration';
$string['duplicationrestoredesc'] = 'Vous pouvez définir ici les informations à inclure lors de la duplication ou de la sauvegarde/restauration des instances de réservation.';
$string['duplicationrestoreentities'] = 'Inclure les entités';
$string['duplicationrestoreprices'] = 'Inclure les prix';
$string['duplicationrestoreteachers'] = 'Inclure les enseignants';
$string['duration:minutes'] = 'Durée (minutes)';
$string['duration:units'] = 'Unités ({$a} min)';
$string['editbookingoption'] = 'Modifier l\'option de réservation';
$string['editcategory'] = 'Editer';
$string['editingoptiondate'] = 'Vous êtes en train de modifier cette session';
$string['editinstitutions'] = 'Editer les institutions';
$string['editotherbooking'] = 'Autres règles de réservation';
$string['editrule'] = 'Modifier';
$string['edittag'] = 'Editer';
$string['editteachers'] = 'Modifier';
$string['educationalunitinminutes'] = 'Durée d\'une unité d\'enseignement (minutes)';
$string['educationalunitinminutes_desc'] = 'Saisir la durée d\'une unité d\'enseignement en minutes. Elle sera utilisée pour calculer les unités d\'enseignement réalisées.';
$string['enable'] = 'Activer';
$string['enablecompletion'] = 'Activer la réalisation d’activité.';
$string['enablecompletiongroup'] = 'Réalisation d’activité';
$string['endtimenotset'] = 'Date de fin non rensignée';
$string['enrolledcomments'] = 'Seulement les utilisateurs ayant réservé';
$string['enrolledratings'] = 'Seulement les utilisateurs ayant réservé';
$string['entervalidurl'] = 'Veuillez entrer une URL valide !';
$string['equals'] = 'a exactement cette valeur (texte ou nombre)';
$string['equalsnot'] = 'n\'a pas exactement cette valeur (texte ou nombre)';
$string['error:choosevalue'] = 'Vous devez choisir une valeur ici.';
$string['error:coursecategoryvaluemissing'] = 'Vous devez choisir une valeur ici car elle est nécessaire comme catégorie de cours pour le cours Moodle créé automatiquement.';
$string['error:entervalue'] = 'Vous devez saisir une valeur ici.';
$string['error:failedtosendconfirmation'] = 'L’utilisateur suivant n’a pas reçu de courriel de confirmation

Statut de réservation : {$a->status}
Participant : {$a->participant}
Cours : {$a->title}
Date : {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Lien : {$a->bookinglink}
Cours associé : {$a->courselink}';
$string['error:identifierexists'] = 'Choisir un autre identifiant. Celui-ci existe déjà.';
$string['error:mustnotbeempty'] = 'Ne doit pas être vide.';
$string['error:nofieldchosen'] = 'Vous devez choisir un domaine.';
$string['error:reasonfornoteacher'] = 'Indiquer la raison pour laquelle aucun enseignant n\'était présent à cette date.';
$string['error:reasontoolong'] = 'Le motif est trop long, saisir un texte plus court.';
$string['erroremptycustomfieldname'] = 'Le nom du champ personnalisé ne peut pas être vide.';
$string['erroremptycustomfieldvalue'] = 'La valeur du champ personnalisé ne peut pas être vide.';
$string['erroremptypricecategoryidentifier'] = 'L\'identifiant de la catégorie de prix ne peut pas être vide.';
$string['erroremptypricecategoryname'] = 'Le nom de la catégorie de prix ne peut pas être vide.';
$string['erroremptysemesteridentifier'] = 'Un identifiant de semestre est nécessaire !';
$string['erroremptysemestername'] = 'Le nom du semestre ne doit pas être vide';
$string['errorholidayend'] = 'Les vacances ne peuvent pas se terminer avant la date de début.';
$string['errorholidaystart'] = 'Les vacances ne peuvent pas commencer après la date de fin.';
$string['erroroptiondateend'] = 'La date de fin doit être postérieure à la date de début.';
$string['erroroptiondatestart'] = 'La date de début doit être antérieure à la date de fin.';
$string['errorpagination'] = 'Veuillez saisir un nombre supérieur à 0';
$string['errorsemesterend'] = 'La fin du semestre doit se situer après le début du semestre.';
$string['errorsemesterstart'] = 'Le début du semestre doit se situer avant la fin du semestre.';
$string['errortoomanydecimals'] = 'Seules 2 décimales sont autorisées.';
$string['eventalreadyover'] = 'Cet événement est déjà terminé.';
$string['eventduration'] = 'Durée de l’évènement';
$string['eventpoints'] = 'Points';
$string['eventtype'] = 'Type d’évènement';
$string['excelfile'] = 'Fichier CSV avec la réalisation d’activités';
$string['existingsubscribers'] = 'Inscrits existants';
$string['expired'] = 'Désolés, cette activité a fermé le {$a} et n’est plus disponible';
$string['fillinatleastoneoption'] = 'vous devez fournir au moins deux réponses possibles';
$string['filterbtn'] = 'Filtre';
$string['filterenddate'] = 'Jusqu\'à';
$string['filterstartdate'] = 'De';
$string['forcourse'] = 'pour le cours';
$string['friday'] = 'Vendredi';
$string['full'] = 'Plein';
$string['fullname'] = 'Nom complet';
$string['fullybooked'] = 'Complet';
$string['globalactivitycompletiontext'] = 'Message à envoyer à l\'utilisateur lorsque l\'option de réservation est complétée (modèle global)';
$string['globalbookedtext'] = 'Confirmation de réservation (modèle global)';
$string['globaldeletedtext'] = 'Message de réservation annulée (modèle global)';
$string['globalmailtemplates'] = 'Modèles de courriel global';
$string['globalnotifyemail'] = 'Notification des participants avant le démarrage (modèle global)';
$string['globalnotifyemailteachers'] = 'Notification de l\'enseignant avant le démarrage (modèle global)';
$string['globalstatuschangetext'] = 'Message de changement de statut (modèle global)';
$string['globaluserleave'] = 'L\'utilisateur a annulé sa propre réservation (modèle global)';
$string['globalwaitingtext'] = 'Confirmation de la liste d\'attente (modèle global)';
$string['gotobooking'] = '<<Réservations';
$string['gotobookingoption'] = 'Aller à l\'option de réservation';
$string['groupexists'] = 'Le groupe existe déjà dans le cours cible, veuillez choisir un autre nom pour l\'option de réservation.';
$string['groupname'] = 'Nom du groupe';
$string['hidedescription'] = 'Masquer la description';
$string['hidelistoncoursepage'] = 'Cacher la liste sur la page du cours (par défaut)';
$string['holiday'] = 'Vacances';
$string['holidayend'] = 'Fin';
$string['holidayendactive'] = 'La fin n\'est pas le même jour';
$string['holidayname'] = 'Nom des vacances (facultatif)';
$string['holidays'] = 'Vacances';
$string['holidaystart'] = 'Vacances (début)';
$string['hours'] = '{$a} heures';
$string['howmanytimestorepeat'] = 'Combien de fois faut-il répéter ?';
$string['howmanyusers'] = 'Combien d’utilisateurs peuvent ils réserver ?';
$string['howoftentorepeat'] = 'Quelle est la fréquence de répétition ?';
$string['icalcancel'] = 'Intégrer l\'événement iCal lorsque la réservation est annulée en tant qu\'événement annulé';
$string['icalcfg'] = 'Configuration des pièces jointes iCal';
$string['icalcfgdesc'] = 'Configurer les fichiers iCal.ics qui sont joints aux messages électroniques. Ces fichiers permettent d\'ajouter les dates de l\'évènement au calendrier personnel.';
$string['icalfieldlocation'] = 'Text to display in iCal field location';
$string['importcsvbookingoption'] = 'Importer un fichier CSV avec options de réservation';
$string['importcsvtitle'] = 'Importer un fichier CSV';
$string['importexcelbutton'] = 'Importer la réalisation d’activité';
$string['importexceltitle'] = 'Importer la réalisation d’activité';
$string['importfinished'] = 'Importation terminée !';
$string['importinfo'] = 'Informations sur l\'importation : vous pouvez utiliser les colonnes suivantes dans l\'importation CSV (explication entre parenthèses)';
$string['includeteachers'] = 'Inclure les enseignants dans la feuille de présence';
$string['infonobookingoption'] = 'Pour ajouter une option de réservation, veuillez utiliser le bloc des paramètres ou l\'icône des paramètres en haut de la page.';
$string['instancesuccessfullysaved'] = 'Cette instance de réservation a été sauvegardée avec succès en tant que modèle.';
$string['institution'] = 'Institution';
$string['institutions'] = 'Institutions';
$string['invisibleoption:notallowed'] = 'Vous n\'êtes pas autorisé à voir cette option de réservation.';
$string['isempty'] = 'le champ est vide';
$string['isnotempty'] = 'le champ n\'est pas vide';
$string['lblbooking'] = 'Nomp de l’étiquette "Réservation"';
$string['lblinstitution'] = 'nom de l’étiquette "Institution"';
$string['lbllocation'] = 'Nom de l’étiquette "Lieu"';
$string['lblname'] = 'nom de l’étiquette "Nom"';
$string['lblsputtname'] = 'Nom de l’étiquette "Envoyer l’url de sondage aux professeurs"';
$string['lblsurname'] = 'Nom de l’étiquette "Prénom"';
$string['lblteachname'] = 'Nom de l’étiquette "Professeurs"';
$string['licensekey'] = 'Clé de licence PRO';
$string['licensekeycfg'] = 'Activer la version PRO';
$string['limit'] = 'Limite';
$string['limitanswers'] = 'Limiter le nombre de participants';
$string['limitanswers_help'] = 'Si vous changez cette option et que vous avez enregistré des personnes, vous pouvez les enlever sans notification !';
$string['linknotavailableyet'] = 'Le lien pour accéder à la rencontre est disponible seulement 15 minutes avant le début et jusqu\'à la fin de la session.';
$string['linknotvalid'] = 'Ce lien ou cet évènement n\'est pas accessible.
S\'il s\'agit d\'un évènement que vous avez réservé, veuillez vérifier à nouveau peu de temps avant le début de la réunion.';
$string['location'] = 'Lieu';
$string['lowerthan'] = 'est inférieur à (nombre)';
$string['mailconfirmationsent'] = 'Vous allez recevoir sous peu une confirmation par courriel';
$string['mailtemplatesadvanced'] = 'Activer les paramètres avancés pour les modèles de courriel';
$string['mailtemplatesinstance'] = 'Utiliser les modèles de courriel de cette instance de réservation (par défaut)';
$string['managebooking'] = 'Gérer';
$string['managebookinginstancetemplates'] = 'Gérer les modèles d\'instances de réservation';
$string['managecustomreporttemplates'] = 'Gérer les modèles de rapports personnalisés';
$string['manageresponses'] = 'Gérer les réponses';
$string['maxoverbooking'] = 'Nombre max. de places sur la liste d’attente';
$string['maxparticipantsnumber'] = 'Nombre max. de participants';
$string['maxperuser'] = 'Nombre max. de réservations par utilisateur';
$string['maxperuser_help'] = 'Le nombre maximum de réservations qu’un utilisateur individuel peut faire à la fois dans cette activité. Une heure après la fin de l’événement, il n’est plus compté dans cette limite.';
$string['maxperuserwarning'] = 'Vous avez actuellement un maximum de {$a->count}/{$a->limit} réservations';
$string['messageprovider:bookingconfirmation'] = 'Confirmations de réservation';
$string['messagesend'] = 'Votre message a été envoyé avec succès';
$string['messagesubject'] = 'Sujet';
$string['messagetext'] = 'Message';
$string['minanswers'] = 'Nombre minimum de participants';
$string['minutes'] = '{$a} minutes';
$string['missinghours'] = 'Heures manquantes';
$string['modaloptiondateformtitle'] = 'Dates personnalisées';
$string['modulename'] = 'Réservation';
$string['modulenameplural'] = 'Réservations';
$string['monday'] = 'Lundi';
$string['multiselect'] = 'Sélection multiple';
$string['mustchooseone'] = 'Vous devez choisir une option avant de réserver. Rien n’a été sauvegardé.';
$string['mustfilloutuserinfobeforebooking'] = 'Avant de soumettre le fomulaire de réservation, merci de remplir quelques informations personnelles de réservation';
$string['mybookingsoption'] = 'Option';
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
$string['notopenyet'] = 'Désolé cette activité est indisponible jusqu’au {$a}';
$string['nouserfound'] = 'Pas d’utillisateur trouvé:';
$string['nousers'] = 'Pas d’utilisateurs !';
$string['onwaitinglist'] = 'Vous êtes sur la liste d’attente';
$string['optionid'] = 'ID d’option';
$string['organizatorname'] = 'Nom de l’organisateur';
$string['pluginadministration'] = 'Administration des réservations';
$string['pluginname'] = 'Réservation';
$string['pollstrftimedate'] = '%d-%m-%Y';
$string['pollurl'] = 'URL de sondage';
$string['pollurlteachers'] = 'URL de sondage pour les professeurs';
$string['pollurlteacherstext'] = 'URL d’envoi de sondage pour les professeurs';
$string['pollurlteacherstextmessage'] = 'Veuillez répondre au sondage

URL de sondage {pollurlteachers}';
$string['pollurlteacherstextsubject'] = 'Veuillez répondre au sondage';
$string['pollurltext'] = 'Envoyer l’URL de sondage';
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
$string['selectatleastoneuser'] = 'Merci de sélectionner au moins 1 utilisateur !';
$string['selectcategory'] = 'Sélectionner la catégorie';
$string['sendmailtobooker'] = 'Page de réservation pour les autres utilisateurs : envoyer un courriel aux utilisateurs qui réservent plutôt qu’aux utilisateurs qui sont réservés';
$string['sendmailtobooker_help'] = 'Activez cette option afin d’envoyer des courriels de confirmation de réservation à l’utilisateur qui inscrit d’autres utilisateurs au lieu des utilisateurs qui ont été ajoutés à une option de réservation.
Ceci n’est pertinent que pour les réservations effectuées sur la page "inscrire d’autres utilisateurs".';
$string['showinapi'] = 'Montrer dans l’API ?';
$string['spaceleft'] = 'espace disponible';
$string['spacesleft'] = 'espaces disponibles';
$string['starttimenotset'] = 'Date de départ non renseignée';
$string['statuschangetext'] = 'Message de changement de statut';
$string['submitandgoback'] = 'Enregistrer et retour';
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
$string['usedinbooking'] = 'Vous ne pouvez pas supprimer cette catégorie, parce que vous utilisez la réservation !';
$string['userdownload'] = 'Télécharger les utilisateurs';
$string['userleave'] = 'L’utilisation quitte la réservation';
$string['usernameofbookingmanager'] = 'Nom d’utilisateur du gestionnaire de réservation';
$string['usernameofbookingmanager_help'] = 'Nom d’utilisateur de l’utilisateur qui sera affiché dans le champ "De" des notifications de confirmation.
Si l’option "Envoyer le courriel de confirmation au gestionnaire de réservation" est activée, c’est l’utilisateur qui reçoit une copie des notifications de confirmation.';
$string['viewallresponses'] = 'Gérer {$a} réponses';
$string['waitinglist'] = 'Sur liste d’attente';
$string['waitinglisttaken'] = 'Sur la liste d’attente';
$string['waitinglistusers'] = 'Utilisateurs sur la liste d’attente';
$string['waitingplacesavailable'] = 'Places disponibles sur la liste d’attente';
$string['waitingtext'] = 'Confirmation de la liste d’attente';
$string['waitspaceavailable'] = 'Places disponibles sur la liste d’attente';
$string['withselected'] = 'Avec les utilisateurs sélectionnés:';
$string['wrongdataallfields'] = 'Merci de remplir tous les champs !';
$string['yes'] = 'Oui';
$string['yourselection'] = 'Votre sélection';
