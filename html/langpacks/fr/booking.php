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
$string['accept'] = 'Accepter';
$string['accessdenied'] = 'Accès refusé';
$string['actionoperator'] = 'Action';
$string['actionoperator:adddate'] = 'Ajouter une date';
$string['actionoperator:set'] = 'Remplacer';
$string['actionoperator:subtract'] = 'Soustraire';
$string['actions'] = 'Actions';
$string['activatemails'] = 'Activer les courriels (confirmations, notifications et plus)';
$string['active'] = 'Actif';
$string['activebookingoptions'] = 'Options de réservations actives';
$string['activitycompletionsuccess'] = 'Tous les utilisateurs sélectionnés ont été marqués pour la réalisation des activités';
$string['activitycompletiontext'] = 'Message à envoyer à l’utilisateur lorsque l’option de réservation est terminée';
$string['activitycompletiontextmessage'] = 'Vous avez complété l’option de réservation suivante :

{$a->bookingdetails}

Aller au cours : {$a->courselink}
Voir toutes les options de réservation : {$a->bookinglink}';
$string['activitycompletiontextsubject'] = 'Option de réservation terminée';
$string['addastemplate'] = 'Ajouter comme modèle';
$string['addbookingcampaign'] = 'Ajouter une campagne';
$string['addbookingrule'] = 'Ajouter une règle';
$string['addcategory'] = 'Modifier les catégories';
$string['addcomment'] = 'Ajouter un commentaire…';
$string['addcustomfieldorcomment'] = 'Ajouter un commentaire ou un champ personnalisé';
$string['adddatebutton'] = 'Ajouter une date';
$string['addedrecords'] = '{$a} enregistrement(s) ajoutés.';
$string['addholiday'] = 'Ajouter des congès';
$string['additionalpricecategories'] = 'Ajouter ou modifier des catégories de prix';
$string['addmorebookings'] = 'Ajouter plus de réservations';
$string['addnewcategory'] = 'Ajouter une nouvelle catégorie';
$string['addnewreporttemplate'] = 'Ajouter un nouveau modèle de rapport';
$string['addnewtagtemplate'] = 'Ajouter un nouveau modèle de tag';
$string['addoptiondate'] = 'Ajouter une date';
$string['addoptiondateseries'] = 'Créer une série de dates';
$string['addpricecategory'] = 'Ajouter une catégorie de prix';
$string['addpricecategoryinfo'] = 'Vous pouvez ajouter une autre catégorie de prix';
$string['address'] = 'Adresse';
$string['addsemester'] = 'Ajouter un semestre';
$string['addtocalendar'] = 'Ajouter au calendrier du cours';
$string['addtocalendardesc'] = 'Les événements du calendrier des cours sont visibles par TOUS les utilisateurs d’un cours. Si vous ne voulez pas qu’ils soient créés du tout, vous pouvez désactiver ce paramètre et le verrouiller par défaut. Ne vous inquiétez pas : les événements du calendrier utilisateur pour les options réservées seront quand même créés.';
$string['addtogroup'] = 'Inscrire automatiquement les utilisateurs dans le groupe';
$string['addtogroup_help'] = 'Inscrire automatiquement les utilisateurs dans le groupe - le groupe sera créé automatiquement avec le nom "Nom de la réservation - Nom de l’option"';
$string['addtogroupofcurrentcourse'] = 'Inscrire automatiquement les utilisateurs aux groupes du cours actuel';
$string['addtogroupofcurrentcourse_help'] = 'Choisisses les groupes du cours actuel auxquels les utilisateurs devraient être inscrits lorsqu\'ils ont au moins une réservation dans cette instance. Les groupes doivent être créés auparavant dans ce cours.</br>
Il est également possible d\'inscrire les utilisateurs dans un groupe spécifique pour chaque réservation faire. Ces groupes seront nommés selon la réservation.';
$string['addtogroupofcurrentcoursebookingoption'] = 'Inscrire dans des groupes spécifiques à chaque option réservée';
$string['addusertogroup'] = 'Ajouter un utilisateur au groupe :';
$string['adminparameter_desc'] = 'Utiliser le paramètre défini dans les options d\'administration.';
$string['adminparametervalue'] = 'Paramètres administrateurs';
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
$string['aftersubmitaction'] = 'Après sauvegarde…';
$string['age'] = 'Âge';
$string['alertrecalculate'] = '<b>Attention !</b> Tous les prix seront recalculés et tous les anciens prix seront écrasés.';
$string['allbookingoptions'] = 'Télécharger les utilisateurs pour toutes les options de réservation';
$string['allchangessaved'] = 'Toutes les modifications ont été enregistrées.';
$string['allcohortsmustbefound'] = 'L\'utilisateur doit être membre de toutes les cohortes';
$string['allcomments'] = 'Tout le monde peut commenter';
$string['allcoursesmustbefound'] = 'L\'utilisateur doit être inscrit à tous les cours';
$string['allmailssend'] = 'Tous les courriels aux utilisateurs ont été envoyés avec succès !';
$string['allmoodleusers'] = 'Tous les utilisateurs du site';
$string['alloptionsinreport'] = 'Un seul rapport pour une activité de réservation <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['alloptionsinreportdesc'] = 'Le rapport de la réservation inclura toutes les réservations des options de cette instance.';
$string['allowbookingafterstart'] = 'Permettre les réservations après le début du cours';
$string['allowoverbooking'] = 'Permettre la surréservation';
$string['allowoverbookingheader'] = 'Options de surréservations <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['allowoverbookingheader_desc'] = 'Permettre aux administrateurs et aux utilisateurs autorisés de réserver au-delà de la capacité. (Attention: Peut mener à un comportement inattendu. Activer cette option uniquement si requis.';
$string['allowupdate'] = 'Autoriser les réservations à être mises à jour';
$string['allowupdatedays'] = 'Jours avant la date de référence';
$string['allratings'] = 'Tout le monde peut évaluer';
$string['allteachers'] = 'Tous les enseignants';
$string['allteacherspagebookinginstances'] = 'Sur la page "Tous les enseignants", afficher uniquement les enseignants qui enseignent dans l\'une des instances de réservations sélectionnées. (Choisir "Aucune sélection" pour afficher TOUS les enseignants.';
$string['allusercertificates'] = 'Certificateurs de l\'utilisateur';
$string['allusersbooked'] = 'Tous les {$a} utilisateurs sélectionnés ont été affectés avec succès à cette option de réservation.';
$string['alreadybooked'] = 'Déjà réservé';
$string['alreadyonlist'] = 'Vous serez notifié';
$string['alreadypassed'] = 'Déjà passé';
$string['always'] = 'Toujours';
$string['alwaysshowlinkondetailspage'] = 'Toujours afficher le lien sur la page de détails';
$string['alwaysshowlinkondetailspage_desc'] = 'La page de détails peut être atteinte en cliquant sur le lien dans le titre ou l\'image d\'en-tête. Un bouton additionnel sera ajouté.';
$string['andotherfield'] = 'ET champ additionnel';
$string['annotation'] = 'Annotation interne';
$string['answer'] = 'Réponse';
$string['answered'] = 'Répondu';
$string['answerscount'] = 'Nombre de réservations';
$string['appearancesettings'] = 'Apparence <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['appearancesettings_desc'] = 'Configurer l\'apparence du module de réservation.';
$string['apply'] = 'Appliquer';
$string['applybookingrules'] = 'Appliquer les règles de réservations';
$string['applyunitfactor'] = 'Appliquer le facteur d’unité';
$string['applyunitfactor_desc'] = 'Si ce paramètre est actif, la durée de l’unité d’enseignement (par exemple 45 min) définie ci-dessus sera utilisée pour calculer le nombre d’unités d’enseignement. Ce nombre sera utilisé comme facteur pour la formule de prix.
 Exemple : une option de réservation a une série de dates comme "Lun, 15:00 - 16:30". Il dure donc 2 unités pédagogiques (45 min chacune).
 Ainsi, un facteur unitaire de 2 sera appliqué à la formule de prix.';
$string['applyuserwhobookedcheckbox'] = 'Oui, je réserve pour moi-même.';
$string['areyousure:book'] = 'Cliquer pour confirmer l\'inscription';
$string['areyousure:cancel'] = 'Cliquer pour confirmer l\'annulation';
$string['asglobaltemplate'] = 'Utiliser comme modèle global';
$string['assesstimefinish'] = 'Fin de la période d\'évaluation';
$string['assesstimestart'] = 'Début de la période d\'évaluation';
$string['assignteachers'] = 'Assigner des enseignants:';
$string['associatedcourse'] = 'Cours associé';
$string['astemplate'] = 'Utiliser comme modèle dans ce cours';
$string['attachedfiles'] = 'Fichiers joints';
$string['attachicalfile'] = 'Joindre un fichier iCal';
$string['attachicalfile_desc'] = 'Joindre les fichiers iCal contenant les dates des réservations aux courriels.';
$string['attachment'] = 'Pièces jointes';
$string['autcrheader'] = 'Création automatique d’options de réservation';
$string['autcrwhatitis'] = 'Si cette option est activée, elle crée automatiquement une nouvelle option de réservation et lui attribue un utilisateur en tant que gestionnaire de réservation/professeur. Les utilisateurs sont sélectionnés en fonction d’une valeur de champ de profil utilisateur personnalisé.';
$string['autoenrol'] = 'Inscrire automatiquement les utilisateurs';
$string['autoenrol_help'] = 'Si l’option est sélectionnée, les utilisateurs seront inscrits dans le cours associé dès qu’ils font la réservation et désinscrits de celui-ci dès que la réservation est annulée.';
$string['automaticbookingoptioncompletion'] = 'Réservation complétée lorsque le cours est complété';
$string['automaticbookingoptioncompletion_desc'] = 'Si activé, la réservation est marquée comme complétée lorsque le cours relié est complété.';
$string['automaticcoursecreation'] = 'Création automatique de cours Moodle <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['availability'] = 'Encore disponible';
$string['availabilityconditions'] = 'Conditions de disponibilité';
$string['availabilityconditionsheader'] = '<i class="fa fa-fw fa-key" aria-hidden="true"></i>&nbsp;Conditions de disponibilité';
$string['availabilityinfotextsheading'] = 'Textes d\'informations de disponibilité pour les places de réservations et les listes d\'attente <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['available'] = 'Places disponibles';
$string['availableplaces'] = 'Places disponibles : {$a->available} sur {$a->maxanswers}';
$string['availplacesfull'] = 'Complet';
$string['back'] = 'Précédent';
$string['backtoresponses'] = '&lt;&lt; Retour aux réponses';
$string['badge:exp'] = '<span class="badge bg-danger text-light"><i class="fa fa-flask" aria-hidden="true"></i> Expérimental</span>';
$string['badge:pro'] = '<span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
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
$string['bigbluebuttonmeeting'] = 'Rencontre BigBlueButton';
$string['biggerthan'] = 'est plus grand que (nombre)';
$string['billboardtext'] = 'Texte à afficher au lieu des textes d\'alertes bloquantes';
$string['blockabove'] = 'Bloquer au-delà';
$string['blockalways'] = 'Bloquer peu importe le nombre de places';
$string['blockbelow'] = 'Bloquer sous';
$string['blockinglabel'] = 'Message lorsque bloqué';
$string['blockinglabel_help'] = 'Saisissez le message à afficher lorsqu\'une réservation est bloquée.
Si vous souhaitez qu\'il soit traduit, vous pouvez utiliser
<a href="https://docs.moodle.org/403/en/Multi-language_content_filter" target="_blank">les filtres de langage</a>.';
$string['blockoperator'] = 'Opérateur';
$string['boactioncancelbookingdesc'] = 'Utilisé pour les options qui peuvent être achetées plusieurs fois';
$string['boactioncancelbookingvalue'] = 'Activer l\'annulation immédiate';
$string['boactionname'] = 'Nom de l\'action';
$string['boactionselectuserprofilefield'] = 'Choisir les champs de profil';
$string['boactionuserprofilefieldvalue'] = 'Valeur';
$string['bocondallowedtobookininstanceavailable'] = 'Réserver';
$string['bocondallowedtobookininstancefullavailable'] = 'Réservation possible';
$string['bocondallowedtobookininstancefullnotavailable'] = 'Aucun accès pour réserver dans cette instance';
$string['bocondallowedtobookininstancenotavailable'] = 'Aucun accès pour réserver';
$string['bocondalreadybooked'] = 'déjà réservé: Est déjà réservé par cet utilisateur';
$string['bocondalreadybookedavailable'] = 'Pas encore réservé';
$string['bocondalreadybookedfullavailable'] = 'L\'utilisateur n\'a pas encore réservé';
$string['bocondalreadybookedfullnotavailable'] = 'Réservé';
$string['bocondalreadybookednotavailable'] = 'Réservé';
$string['bocondalreadyreserved'] = 'Déjà réservé : A déjà été ajouté au panier de l\'utilisateur';
$string['bocondalreadyreservedavailable'] = 'Pas encore ajouté au panier';
$string['bocondalreadyreservedfullavailable'] = 'Pas encore ajouté au panier';
$string['bocondalreadyreservedfullnotavailable'] = 'Ajouté au panier';
$string['bocondalreadyreservednotavailable'] = 'Ajouté au panier';
$string['bocondaskforconfirmation'] = 'Demande de confirmation : Confirmez manuellement la réservation';
$string['bocondaskforconfirmationavailable'] = 'Réserver';
$string['bocondaskforconfirmationfullavailable'] = 'Réservation possible';
$string['bocondaskforconfirmationfullnotavailable'] = 'Réserver - liste d\'attente';
$string['bocondaskforconfirmationnotavailable'] = 'Réserver - liste d\'attente';
$string['bocondbookingclosingtimefullnotavailable'] = 'Ne peut plus être réservé (terminait le {$a}).';
$string['bocondbookingclosingtimenotavailable'] = 'Ne peut plus être réservé (terminait le {$a}).';
$string['bocondbookingopeningtimefullnotavailable'] = 'Peut être réservé à partir du {$a}.';
$string['bocondbookingopeningtimenotavailable'] = 'Peut être réservé à partir du {$a}.';
$string['bocondbookingpolicy'] = 'Politique de réservation';
$string['bocondbookingtime'] = 'Peut uniquement être réservé dans un certain délai';
$string['bocondbookingtimeavailable'] = 'Dans les délais de réservation.';
$string['bocondbookingtimenotavailable'] = 'Hors des délais de réservation.';
$string['bocondbookitbutton'] = 'Bouton de réservation : Affiche le bouton de réservation.';
$string['bocondcapbookingchooseavailable'] = 'Droit de réserver';
$string['bocondcapbookingchoosefullavailable'] = 'Accès à réserver dans cette instance';
$string['bocondcapbookingchoosefullnotavailable'] = 'Aucun accès pour réserver dans cette instance';
$string['bocondcapbookingchoosenotavailable'] = 'Interdit de réserver';
$string['bocondcustomform'] = 'Remplir le formulaire';
$string['bocondcustomformavailable'] = 'Réserver';
$string['bocondcustomformdeleteinfoscheckboxuser'] = 'Case à cocher pour supprimer les réponses';
$string['bocondcustomformdeleteinfoscheckboxusertext'] = 'Voulez-vous que l\'information fournie soit supprimée une fois l\'événement terminé?';
$string['bocondcustomformfullavailable'] = 'Réservation possible';
$string['bocondcustomformfullnotavailable'] = 'Réservation impossible';
$string['bocondcustomformfullybooked'] = 'L\'option "{$a}" est complètement réservée.';
$string['bocondcustomformlabel'] = 'Étiquette';
$string['bocondcustomformmail'] = 'Courriel';
$string['bocondcustomformmailerror'] = 'L\'adresse courriel est invalide.';
$string['bocondcustomformnotavailable'] = 'Réserver';
$string['bocondcustomformnotempty'] = 'Doit contenir une valeur';
$string['bocondcustomformnumberserror'] = 'Merci d\'insérer un nombre valide de jours.';
$string['bocondcustomformrestrict'] = 'Le formulaire doit être rempli avant de réserver';
$string['bocondcustomformstillavailable'] = 'toujours disponible';
$string['bocondcustomformurl'] = 'Lien';
$string['bocondcustomformurlerror'] = 'Le lien est invalide ou ne commence pas par http ni https.';
$string['bocondcustomformvalue'] = 'Valeur';
$string['bocondcustomuserprofilefieldavailable'] = 'Réserver';
$string['bocondcustomuserprofilefieldconnectsecondfield'] = 'Relier avec un autre champ de profil';
$string['bocondcustomuserprofilefieldfield'] = 'Champ de profil';
$string['bocondcustomuserprofilefieldfield2'] = 'Second champ de profil';
$string['bocondcustomuserprofilefieldfullavailable'] = 'Réservation possible';
$string['bocondcustomuserprofilefieldfullnotavailable'] = 'Uniquement les utilisateurs avec un champ de profil personnalisé {$a->profilefield} de la valeur {$a->value} sont autorisés à réserver. <br>Vous pouvez tout de même réserver pour eux.';
$string['bocondcustomuserprofilefieldnotavailable'] = 'Pas autorisé à réserver';
$string['bocondcustomuserprofilefieldoperator'] = 'Opérateur';
$string['bocondcustomuserprofilefieldoperator2'] = 'Opérateur (2e champ)';
$string['bocondcustomuserprofilefieldvalue'] = 'Valeur';
$string['bocondcustomuserprofilefieldvalue2'] = 'Valeur (2e champ)';
$string['bocondenrolledincohorts'] = 'L\'utilisateur est inscrit dans certaines cohortes';
$string['bocondenrolledincohortsavailable'] = 'Réserver';
$string['bocondenrolledincohortsfullavailable'] = 'Réservation possible';
$string['bocondenrolledincohortsfullnotavailable'] = 'Seulement les utilisateurs qui sont inscrits dans au moins une de ces cohortes peuvent réserver : {$a}
<br>Vous pouvez toute de même les inscrire.';
$string['bocondenrolledincohortsfullnotavailableand'] = 'Seulement les utilisateurs qui sont inscrits dans toutes ces cohortes peuvent réserver : {$a}
<br>Vous pouvez toute de même les inscrire.';
$string['bocondenrolledincohortsnotavailable'] = 'Réservation impossible car vous ne faites pas partie d\'une de ces cohortes : {$a}';
$string['bocondenrolledincohortsnotavailableand'] = 'Réservation impossible car vous ne faites pas partie de toutes ces cohortes : {$a}';
$string['bocondenrolledincohortswarning'] = 'Il y a un très grand nombre de cohortes dans votre système. Elles ne seront pas toutes disponibles ici. Si ça vous cause un problème, merci de contacter <a mailto="info@wunderyte.at">Wunderbyte</a>';
$string['bocondenrolledincourse'] = 'L\'utilisateur est inscrit dans certains cours';
$string['bocondenrolledincourseavailable'] = 'Réserver';
$string['bocondenrolledincoursefullavailable'] = 'Réservation possible';
$string['bocondenrolledincoursefullnotavailable'] = 'Seulement les utilisateurs qui sont inscrits dans au moins un de ces cours peuvent réserver : {$a}
<br>Vous pouvez toute de même les inscrire.';
$string['bocondenrolledincoursefullnotavailableand'] = 'Seulement les utilisateurs qui sont inscrits dans tous ces cours peuvent réserver : {$a}
<br>Vous pouvez toute de même les inscrire.';
$string['bocondenrolledincoursenotavailable'] = 'Réservation impossible car vous n\'être pas inscrit dans un de ces cours : {$a}';
$string['bocondenrolledincoursenotavailableand'] = 'Réservation impossible car vous n\'être pas inscrit dans tous ces cours : {$a}';
$string['bocondfullybooked'] = 'Pleinement réservé';
$string['bocondfullybookedavailable'] = 'Réserver';
$string['bocondfullybookedfullavailable'] = 'Réservation possible';
$string['bocondfullybookedfullnotavailable'] = 'Pleinement réservé';
$string['bocondfullybookednotavailable'] = 'Pleinement réservé';
$string['bocondfullybookedoverride'] = 'Contournement de réservations pleines : Peut être contourné par le personnel';
$string['bocondfullybookedoverrideavailable'] = 'Réserver';
$string['bocondfullybookedoverridefullavailable'] = 'Réservation possible';
$string['bocondfullybookedoverridefullnotavailable'] = 'Complètement réservé - vous pouvez tout de même inscrire un utilisateur.';
$string['bocondfullybookedoverridenotavailable'] = 'Pleinement réservé';
$string['bocondinstanceavailability'] = 'instanceavailability: Restrictions d\'accès';
$string['bocondinstanceavailabilityavailable'] = 'Réserver';
$string['bocondinstanceavailabilityfullavailable'] = 'Réservation possible';
$string['bocondinstanceavailabilityfullnotavailable'] = '<a href="{$a}" target="_blank">Conditions d\'accès</a> non remplies.<br>
Vous pouvez tout de même inscrire un utilisateur.';
$string['bocondinstanceavailabilitynotavailable'] = 'Réservation impossible';
$string['bocondisbookable'] = 'isbookable: Réservation impossible';
$string['bocondisbookableavailable'] = 'Réserver';
$string['bocondisbookablefullavailable'] = 'Réservation possible';
$string['bocondisbookablefullnotavailable'] = 'Réservation interdite pour cette option.
<br>Vous pouvez tout de même inscrire un utilisateur.';
$string['bocondisbookablenotavailable'] = 'Non autorisé à réserver';
$string['bocondiscancelled'] = 'iscancelled: Option de réservation annulée';
$string['bocondiscancelledavailable'] = 'Réserver';
$string['bocondiscancelledfullavailable'] = 'Résavation possible';
$string['bocondiscancelledfullnotavailable'] = 'Annulé';
$string['bocondiscancellednotavailable'] = 'Annulé';
$string['bocondisloggedin'] = 'isloggedin: Utilisateur connecté';
$string['bocondisloggedinavailable'] = 'Réserver';
$string['bocondisloggedinfullavailable'] = 'Réservation possible';
$string['bocondisloggedinfullnotavailable'] = 'Utilisateur non connecté.';
$string['bocondisloggedinnotavailable'] = 'Se connecter pour réserver.';
$string['bocondisloggedinprice'] = 'isloggedinprice: Afficher les prix lorsque connecté.';
$string['bocondmaxnumberofbookings'] = 'max_number_of_bookings: Nombre maximum de réservations par utilisateur atteinte';
$string['bocondmaxnumberofbookingsavailable'] = 'Réserver';
$string['bocondmaxnumberofbookingsfullavailable'] = 'Réservation possible';
$string['bocondmaxnumberofbookingsfullnotavailable'] = 'L\'utilisateur a atteint le nombre maximum de réservations';
$string['bocondmaxnumberofbookingsnotavailable'] = 'Nombre maximum de réservations atteint';
$string['bocondnotifymelist'] = 'Liste de notifications';
$string['bocondonnotifylistavailable'] = 'Réserver';
$string['bocondonnotifylistfullavailable'] = 'Réservation possible';
$string['bocondonnotifylistfullnotavailable'] = 'L\'utilisateur a atteint le nombre maximum de réservations';
$string['bocondonnotifylistnotavailable'] = 'Nombre maximum de réservations atteint';
$string['bocondonwaitinglist'] = 'onwaitinglist: L\'utilisateur est sur la liste d\'attente';
$string['bocondonwaitinglistavailable'] = 'Réserver';
$string['bocondonwaitinglistfullavailable'] = 'Réservation possible';
$string['bocondonwaitinglistfullnotavailable'] = 'L\'utilisateur est sur la liste d\'attente';
$string['bocondonwaitinglistnotavailable'] = 'Vous êtes sur la liste d\'attente';
$string['bocondoptionhasstarted'] = 'Déjà commencé';
$string['bocondoptionhasstartedavailable'] = 'Réserver';
$string['bocondoptionhasstartedfullavailable'] = 'Réservation possible';
$string['bocondoptionhasstartedfullnotavailable'] = 'Déja commencé - impossible de réserver pour les utilisateurs';
$string['bocondoptionhasstartednotavailable'] = 'Déjà commencé - il n\'est plus possible de réserver';
$string['bocondotheroptionsavailable'] = 'Options reliées indisponibles';
$string['bocondpreviouslybooked'] = 'L\'utilisateur a déjà choisi une option';
$string['bocondpreviouslybookedavailable'] = 'Réserver';
$string['bocondpreviouslybookedfullavailable'] = 'Réservation possible';
$string['bocondpreviouslybookedfullnotavailable'] = 'Seulement les utilisateurs ayant choisi <a href="{$a}">cette option</a> peuvent réserver.
<br>Vous pouvez tout de même inscrire un utilisateur.';
$string['bocondpreviouslybookednotavailable'] = 'Seulement les utilisateurs ayant choisi <a href="{$a}">cette option</a> peuvent réserver.';
$string['bocondpreviouslybookedoptionid'] = 'Doit déjà être réservé.';
$string['bocondpreviouslybookedrestrict'] = 'Utilisateur ayant déjà réservé une option.';
$string['bocondpriceisset'] = 'priceisset: Prix déterminé.';
$string['bocondpriceissetavailable'] = 'Réserver';
$string['bocondpriceissetfullavailable'] = 'Réservation possible';
$string['bocondpriceissetfullnotavailable'] = 'Un prix est déterminé, paiement requis';
$string['bocondpriceissetnotavailable'] = 'Vous devez payer';
$string['bocondselectusers'] = 'Seulement les utilisateurs sélectionnés peuvent réserver';
$string['bocondselectusersavailable'] = 'Réserver';
$string['bocondselectusersfullavailable'] = 'Réservation possible';
$string['bocondselectusersfullnotavailable'] = 'Seulement les utilisateurs suivants peuvent réserver:<br>{$a}';
$string['bocondselectusersnotavailable'] = 'Réservation impossible';
$string['bocondselectusersrestrict'] = 'Seulement certains utilisateurs peuvent réserver';
$string['bocondselectusersuserids'] = 'Utilisateurs pouvant réserver';
$string['bocondselectusersuserids_help'] = '<p>Si vous utilisez cette option, seules les personnes sélectionnées pourront réserver.</p>
<p>Toutefois, vous pouvez aussi utiliser cette condition pour permettre à certaines personnes de contourner d\'autres restrictions:</p>
<p>(1) Pour le faire, cochez la case "A une relation avec une autre condition".<br>
(2) Vérifiez que l\'opérateur "OU" est choisi.<br>
(3) Choisir toutes les conditions à contourner.</p>
<p>Exemples :<br>
"Pleinement réservé" => La personne sélectionnée peut réserver même si l\'événement a atteint sa capacité maximale.<br>
"Peut être réservé dans un certain délai" => La personne sélectionnée peut réserver en-dehors des délais normaux.</p>';
$string['bocondsubbooking'] = 'Une sous-réservation existe';
$string['bocondsubbookingavailable'] = 'Réserver';
$string['bocondsubbookingblocks'] = 'Les sous-réservations bloquent cette option';
$string['bocondsubbookingblocksavailable'] = 'Réserver';
$string['bocondsubbookingblocksfullavailable'] = 'Réservation possible';
$string['bocondsubbookingblocksfullnotavailable'] = 'Les sous-réservations bloquent cette option.';
$string['bocondsubbookingblocksnotavailable'] = 'Impossible de réserver.';
$string['bocondsubbookingfullavailable'] = 'Réservation possible';
$string['bocondsubbookingfullnotavailable'] = 'Réservation possible';
$string['bocondsubbookingnotavailable'] = 'Réserver';
$string['bocondsubisbookableavailable'] = 'Réserver';
$string['bocondsubisbookablefullavailable'] = 'Réservation possible';
$string['bocondsubisbookablefullnotavailable'] = 'Réservation impossible pour cette sous-réservation car l\'option correspondante n\'est pas réservée.';
$string['bocondsubisbookablenotavailable'] = 'Réservez d\'abord cette option';
$string['boconduserprofilefield1default'] = 'Le champ profil de l\'utilisateur a une certaine valeur';
$string['boconduserprofilefield1defaultrestrict'] = 'Un champ de profil d\'utilisateur choisi doit avoir une certaine valeur';
$string['boconduserprofilefield2custom'] = 'Un champ de profil personnalisé a une certaine valeur';
$string['boconduserprofilefield2customrestrict'] = 'Un champ de profil personnalisé doit avoir une certaine valeur';
$string['boconduserprofilefieldavailable'] = 'Réserver';
$string['boconduserprofilefieldfield'] = 'Champ de profil';
$string['boconduserprofilefieldfullavailable'] = 'Réservation possible';
$string['boconduserprofilefieldfullnotavailable'] = 'Seuls les utilisateurs avec le champ de profil {$a->profilefield} à la valeur {$a->value} peuvent réserver.
<br>Vous pouvez tout de même inscrire un utilisateur.';
$string['boconduserprofilefieldnotavailable'] = 'Pas autorisé à réserver';
$string['boconduserprofilefieldoperator'] = 'Opérateur';
$string['boconduserprofilefieldvalue'] = 'Valeur';
$string['bonumberofdays'] = 'Nombre de jours';
$string['bookanyoneswitchoff'] = '<i class="fa fa-user-times" aria-hidden="true"></i> Ne pas permettre les réservations d\'utilisateurs non inscrits (recommandé)';
$string['bookanyoneswitchon'] = '<i class="fa fa-user-plus" aria-hidden="true"></i> Permettre les réservations d\'utilisateurs non inscrits';
$string['bookanyonewarning'] = 'Soyez prudents : Vous pouvez inscrire tous les utilisateurs voulus. Utilisez ce paramètre si vous savez ce que vous faites. Inscrire des utilisateurs non-inscrits dans le cours peut causer des soucis.';
$string['booked'] = 'Réservé';
$string['bookeddeleted'] = 'Réservation retirée';
$string['bookedpast'] = 'Réservé (cours terminé)';
$string['bookedteachersshowemails'] = 'Afficher le courriel des enseignants aux utilisateurs inscrits';
$string['bookedteachersshowemails_desc'] = 'Si vous activez cette option, les utilisateurs inscrits pourront voir le courriel de leur enseignant.';
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
$string['bookelectivesbtn'] = 'Réserver les choix sélectionnés';
$string['booking'] = 'Réservation';
$string['booking:addeditownoption'] = 'Ajouter une nouvelle option et modifier ses propres options.';
$string['booking:addinstance'] = 'Ajouter une nouvelle réservation';
$string['booking:bookanyone'] = 'Autorisé à réserver pour tous';
$string['booking:bookforothers'] = 'Réserver pour les autres';
$string['booking:canoverbook'] = 'Peut sur-réserver';
$string['booking:canreviewsubstitutions'] = 'Autorisé à réviser les remplacements (case à cocher de contrôle)';
$string['booking:canseeinvisibleoptions'] = 'Afficher les options invisibles.';
$string['booking:cansendmessages'] = 'Peut envoyer des messages';
$string['booking:changelockedcustomfields'] = 'Peut modifier les champs d’options de réservation personnalisés verrouillés.';
$string['booking:choose'] = 'Réserver';
$string['booking:comment'] = 'Ajouter des commentaires';
$string['booking:communicate'] = 'Peut communiquer';
$string['booking:deleteresponses'] = 'Supprimer les réponses';
$string['booking:downloadresponses'] = 'Télécharger les réponses';
$string['booking:editbookingrules'] = 'Modifier les règles (Pro)';
$string['booking:managebookedusers'] = 'Gérer les réservations d\'utilisateurs (réponses d\'enregistrement)';
$string['booking:managecomments'] = 'Gérer les commentaires';
$string['booking:manageoptiondates'] = 'Gérer les dates d\'options';
$string['booking:manageoptiontemplates'] = 'Gérer les modèles d’options';
$string['booking:rate'] = 'Tarifer les options de réservation choisies';
$string['booking:readallinstitutionusers'] = 'Montrer tous les utilisateurs';
$string['booking:readresponses'] = 'Lire les réponses';
$string['booking:semesters'] = 'Réservation : Semestres';
$string['booking:sendpollurl'] = 'Envoyer l’URL du sondage';
$string['booking:sendpollurltoteachers'] = 'Envoyer l’URL du sondage aux enseignants';
$string['booking:subscribeusers'] = 'Effectuer des réservations pour d’autres utilisateurs';
$string['booking:updatebooking'] = 'Gérer les options de réservation';
$string['booking:view'] = 'Consulter les instances de réservation';
$string['booking:viewallratings'] = 'Voir toutes les notes brutes données par les individus';
$string['booking:viewanyrating'] = 'Voir le total des notes que n’importe qui a reçu';
$string['booking:viewrating'] = 'Afficher la note totale que vous avez reçue';
$string['bookingaction'] = 'Action';
$string['bookingactionadd'] = 'Ajouter une action';
$string['bookingattachment'] = 'Fichier joint';
$string['bookingcampaign'] = 'Campagne';
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
$string['bookingcustomfield'] = 'Champs personnalisés d\'options de réservations';
$string['bookingdate'] = 'Date de réservation';
$string['bookingdefaulttemplate'] = 'Choisir un modèle…';
$string['bookingdeleted'] = 'Votre réservation a été annulée';
$string['bookingdetails'] = 'Détails de la réservation';
$string['bookingduration'] = 'Durée';
$string['bookingfailed'] = 'La réservation a échoué';
$string['bookingfull'] = 'Il n’y a pas de places disponibles';
$string['bookingfulldidntregister'] = 'L\'option est complète, tous les utilisateurs n\'ont pas été transférés !';
$string['bookinghistory'] = 'Historique de réservation';
$string['bookingidfilter'] = 'Instance de réservation';
$string['bookingimages'] = 'Déposer les images d\'en-tête pour les options de réservation - elles doivent avoir exactement le même nom que le champ personnalisé sélectionné dans chaque possibilité de réservation.';
$string['bookingimagescustomfield'] = 'Champ personnalisé de l\'option de réservation à faire correspondre avec les images d\'en-tête';
$string['bookinginstance'] = 'Instance de réservation';
$string['bookinginstancetemplatename'] = 'Nom du modèle de l\'instance de réservation';
$string['bookinginstancetemplatessettings'] = 'Modèle de l\'instance de réservation';
$string['bookinginstanceupdated'] = 'Instance de réservation mise à jour';
$string['bookingmanagererror'] = 'Le nom d’utilisateur entré n’est pas valide. Soit il n’existe pas, soit il y a plus d’un utilisateur avec ce nom (exemple : si l’authentification locale et mnet sont activées)';
$string['bookingmeanwhilefull'] = 'Pendant ce temps quelqu’un a pris déjà la dernière place';
$string['bookingname'] = 'Nom de la réservation';
$string['bookingnotopenyet'] = 'Votre événement commence dans {$a} minutes. Le lien que vous avez utilisé vous redirigera si vous cliquez à nouveau dessus dans les 15 minutes avant le démarrage de l\'évènement.';
$string['bookingopen'] = 'Ouvert';
$string['bookingopeningtime'] = 'De';
$string['bookingoption'] = 'Réservation';
$string['bookingoptionbooked'] = 'Réservation enregistrée';
$string['bookingoptioncalendarentry'] = '<a href="{$a}" class="btn btn-primary">Réservez maintenant…</a>';
$string['bookingoptioncanbecancelleduntil'] = 'Vous pouvez annuler avant {$a}.';
$string['bookingoptioncancelled'] = 'Réservation annulée pour tous';
$string['bookingoptioncantbecancelledanymore'] = 'L\'annulation était possible avant {$a}.';
$string['bookingoptioncompleted'] = 'Réservation complétée';
$string['bookingoptionconfirmed'] = 'Réservation confirmée';
$string['bookingoptioncreated'] = 'Option de réservation créée';
$string['bookingoptiondatecreated'] = 'Date de réservation créée';
$string['bookingoptiondatedeleted'] = 'Date de réservation supprimée';
$string['bookingoptiondateupdated'] = 'Date de réservation mise à jour';
$string['bookingoptiondefaults'] = 'Paramètres par défaut des options de réservation';
$string['bookingoptiondefaultsdesc'] = 'Ici vous pouvez définir des paramètres par défaut pour la création d\'option de réservation et les verrouiller si nécessaire.';
$string['bookingoptiondeleted'] = 'Option de réservation supprimée';
$string['bookingoptiondescription'] = 'Description de l\'option de réservation';
$string['bookingoptionfreetobookagain'] = 'Places à nouveau disponibles';
$string['bookingoptionimage'] = 'Déposer une image';
$string['bookingoptionname'] = 'Nom de l\'option de réservation';
$string['bookingoptionnamewithoutprefix'] = 'Nom (sans préfixe)';
$string['bookingoptionprice'] = 'Prix';
$string['bookingoptionsfromtemplatemenu'] = 'Nouvelles options de réservation à partir du modèle';
$string['bookingoptionsmenu'] = 'Option de réservation';
$string['bookingoptiontitle'] = 'Titre de l\'option de réservation';
$string['bookingoptionupdated'] = 'Option de réservation mise à jour';
$string['bookingoptionwaitinglistbooked'] = 'Réservé pour la liste d\'attente';
$string['bookingorganizatorname'] = 'Nom de l’organisateur';
$string['bookingpassed'] = 'L\'événement est terminé.';
$string['bookingplacesenoughmessage'] = 'Il reste encore suffisamment de places disponibles.';
$string['bookingplacesfullmessage'] = 'Il n\'y a plus de places disponibles.';
$string['bookingplacesinfotexts'] = 'Afficher les textes d\'information sur la disponibilité des places réservées';
$string['bookingplacesinfotextsinfo'] = 'Choisissez comment afficher les places disponibles aux utilisateurs.';
$string['bookingplaceslowmessage'] = 'Il ne reste plus que quelques places disponibles.';
$string['bookingplaceslowpercentage'] = 'Message lorsque le pourcentage de places réservées est faible';
$string['bookingplaceslowpercentagedesc'] = 'Si le nombre de places disponibles est inférieur ou égal à ce pourcentage, un message indiquant que le nombre de places est insuffisant s\'affiche.';
$string['bookingplacesplacesleft'] = '{$a} places disponibles';
$string['bookingplacesunlimitedmessage'] = 'Disponible immédiatement';
$string['bookingpoints'] = 'Points de cours';
$string['bookingpolicy'] = 'Conditions de réservation';
$string['bookingpolicyagree'] = 'J\'ai lu, je comprends et accepte la politique de réservation.';
$string['bookingpolicynotchecked'] = 'Vous n\'avez pas accepté la politique de réservation.';
$string['bookingpollurl'] = 'URL du sondage';
$string['bookingpollurlteachers'] = 'URL du sondage pour les enseignants';
$string['bookingpricecategory'] = 'Catégorie de prix';
$string['bookingpricesettings'] = 'Paramètres de prix';
$string['bookingpricesettings_desc'] = 'Ici, vous pouvez personnaliser les prix de la réservation.';
$string['bookingrule'] = 'Règle';
$string['bookingruleaction'] = 'Action de la règle';
$string['bookingruleapply'] = 'Appliquer la règle';
$string['bookingrulecondition'] = 'Condition d\'application de la règle';
$string['bookingrules'] = 'Réservation : définir des règles globales (PRO)';
$string['bookings'] = 'Réservations';
$string['bookingsaved'] = 'Votre réservation a été sauvegardé avec succès. Vous pouvez désormais continuer à réserver d’autres cours.';
$string['bookingsettings'] = 'Réservation : paramètres principaux';
$string['bookingstrackerdelete'] = 'Se désinscrire';
$string['bookingstrackerpresencecounter'] = 'Compter les présences';
$string['bookingsubbooking'] = 'Sous-réservation';
$string['bookingsubbookingadd'] = 'Ajouter une sous-réservation';
$string['bookingsubbookingdelete'] = 'Supprimer la sous-réservation';
$string['bookingsubbookingedit'] = 'Modifier';
$string['bookingsubbookingsheader'] = 'Sous-réservations';
$string['bookingtags'] = 'Mots-clés';
$string['bookingtext'] = 'Texte de la réservation';
$string['booknow'] = 'Réserver maintenant';
$string['bookondetail'] = 'Plus de détails';
$string['bookotherusers'] = 'Enregistrer d’autres utilisateurs';
$string['bookotheruserslimit'] = 'Nombre maximum d\'utilisateurs qu\'un enseignant assigné à l\'option de réservation peut réserver';
$string['booktootherbooking'] = 'Enregistrer des utilisateurs pour d’autres réservations';
$string['bookuserswithoutcompletedactivity'] = 'Enregistrer des utilisateurs sans avoir achevé l\'activité';
$string['bookwithcreditsprofilefieldoff'] = 'Ne pas afficher';
$string['bosecrettoken'] = 'Jeton secret';
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
$string['bulkoperations'] = 'Afficher la liste des options de réservation pour permettre les opérations en masse';
$string['cachedef_bookedusertable'] = 'Table des utilisateurs inscrits (cache)';
$string['cachedef_bookforuser'] = 'Réserver pour un utilisateur (cache)';
$string['cachedef_bookingoptions'] = 'Options de réservation (cache)';
$string['cachedef_bookingoptionsanswers'] = 'Réponses des options de réservation (cache)';
$string['cachedef_bookingoptionsettings'] = 'Paramètres des options de réservation (cache)';
$string['cachedef_bookingoptionstable'] = 'Tableaux d\'options de réservation avec requêtes SQL hachées (cache)';
$string['cachedef_cachedbookinginstances'] = 'Instance de réservation (cache)';
$string['cachedef_cachedpricecategories'] = 'Catégories des prix de réservation (cache)';
$string['cachedef_cachedprices'] = 'Prix des réservations (cache)';
$string['cachedef_cachedsemesters'] = 'Semestres (cache)';
$string['cachedef_cachedteachersjournal'] = 'Journal des enseignants (cache)';
$string['cachedef_conditionforms'] = 'Formulaires des conditions (cache)';
$string['cachedef_confirmbooking'] = 'Réservations confirmées (cache)';
$string['cachesettings'] = 'Paramètres de la cache';
$string['caladdascourseevent'] = 'Ajouter au calendrier (visible uniquement par les participants du cours)';
$string['caladdassiteevent'] = 'Ajouter au calendrier (visible par tous les utilisateurs)';
$string['caldonotadd'] = 'Ne pas ajouter au calendrier du cours';
$string['caleventtype'] = 'Visibilité des événements dans le calendrier';
$string['campaignfieldvalue'] = 'Valeur';
$string['cancancelbookallow'] = 'Permettre aux utilisateurs d\'annuler leurs réservations';
$string['cancancelbookdays'] = 'Interdire aux utilisateurs d\'annuler leur réservation n jours avant le début du cours. 0 signifie que les utilisateurs peuvent encore annuler n jours APRÈS le début du cours.';
$string['cancancelbookdaysno'] = 'Ne pas limiter';
$string['cancel'] = 'Annuler';
$string['cancelallusers'] = 'Annuler les réservations de tous les participants';
$string['cancelbooking'] = 'Annuler la réservation';
$string['canceldateabsolute'] = 'Annulation possible jusqu\'à';
$string['cancelical'] = 'Annuler les événements du calendrier';
$string['cancellation'] = 'Annulation';
$string['canceloption'] = 'Annuler l\'option de réservation';
$string['canceloption_desc'] = 'L\'annulation d\'une option de réservation signifie qu\'il n\'est plus possible de réserver, mais qu\'elle est toujours affichée dans la liste.';
$string['cancelreason'] = 'Raison de l\'annulation de cette option de réservation';
$string['cancelsign'] = '<i class="fa fa-ban" aria-hidden="true"></i>';
$string['cancelthisbookingoption'] = 'Annuler cette option de réservation';
$string['cannotremovesubscriber'] = 'Vous devez supprimer l\'activité avant d\'annuler la réservation. La réservation n\'a pas été annulée !';
$string['categories'] = 'Catégories';
$string['category'] = 'Catégorie';
$string['categoryheader'] = '[DÉPRÉCIÉ] Catégorie';
$string['categoryname'] = 'Nom de la catégorie';
$string['cdo:bookingclosingtime'] = 'FIn de la période d\'enregistrement (bookingclosingtime)';
$string['cdo:bookingopeningtime'] = 'Début de la période d\'enregistrement (bookingopeningtime)';
$string['cdo:buttoncolor:danger'] = 'Danger (rouge)';
$string['cdo:buttoncolor:primary'] = 'Primaire (bleu)';
$string['cdo:buttoncolor:secondary'] = 'Secondaire (gris)';
$string['cdo:buttoncolor:success'] = 'Succès (vert)';
$string['cdo:buttoncolor:warning'] = 'Avertissement (jaune)';
$string['cdo:coursestarttime'] = 'Début de l\'option de réservation (coursestarttime)';
$string['cdo:semesterstart'] = 'Début du semestre';
$string['certificate'] = 'Certificat';
$string['certificatecode'] = 'Code du certificat';
$string['certificatecolheader'] = 'Certificat le plus récent';
$string['certificateexpirationdate'] = 'Date d\'expiration';
$string['certificateheader'] = 'Certificat Moodle';
$string['certificateissuedate'] = 'Date décerné';
$string['certificatemodalheader'] = 'Certificats de {$a}';
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
$string['changepresencestatus'] = 'Modifier le statut de présence';
$string['changesemester'] = 'Modifier le semestre';
$string['changesemester:warning'] = '<strong>Attention:</strong> En cliquant sur « Enregistrer les modifications », toutes les dates seront supprimées et remplacées par les dates du semestre choisi.';
$string['checkbox'] = 'Case à cocher';
$string['checkedanswersdeleted'] = 'Les réservations sélectionnées ont été supprimées.';
$string['choose...'] = 'Choisir…';
$string['choosedifferentvalue'] = 'Choisir une valeur différente du premier champ';
$string['choosepdftitle'] = 'Sélectionner un titre pour la feuille d\'émargement';
$string['chooseperiod'] = 'Sélectionner une période de temps';
$string['chooseperiod_help'] = 'Sélectionner une période de temps pour créer la série de dates.';
$string['choosesemester'] = 'Sélectionner un semestre';
$string['choosesemester_help'] = 'Choisir le semestre pour lequel le(s) congé(s) doit(vent) être créé(s).';
$string['choosesession'] = 'Choisir une date (séance)…';
$string['choosetags'] = 'Chosir les tags';
$string['circumventavailabilityconditions'] = 'Contourner les restrictions d\'accès';
$string['circumventpassword'] = 'Mot de passe pour contourner les restrictions. Laisser vide si aucun mot de passe n\'est requis.';
$string['close'] = 'Fermer';
$string['closed'] = 'Réservation fermée';
$string['cohort'] = 'Cohorte';
$string['cohorts'] = 'Cohorte(s)';
$string['collapsedescriptionmaxlength'] = 'Réduire les descriptions (longueur maximale)';
$string['collapsedescriptionoff'] = 'Ne pas réduire les descriptions';
$string['comments'] = 'Commentaires';
$string['competencies'] = 'Compétences';
$string['competenciesheader'] = '<i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp;Compétences';
$string['competencynonefound'] = 'Aucune compétence définie';
$string['completed'] = 'Terminé';
$string['completedcomments'] = 'Uniquement si l\'activité est terminée';
$string['completedratings'] = 'Uniquement si l\'activité est terminée';
$string['completionchanged'] = 'Mise à jour du statut de complétion';
$string['completionmodule'] = 'À l\'issue de l\'achèvement de l\'activité sélectionnée, activer la suppression en bloc des réservations des utilisateurs';
$string['completionmodule_help'] = 'Afficher un bouton de suppression en bloc pour les réponses aux réservations si un autre module de cours a été achevé. Les réservations des utilisateurs seront supprimées en cliquant sur un bouton dans le rapport de la page ! Seules les activités dont l\'achèvement est activé peuvent être sélectionnées dans la liste.';
$string['conditionselectstudentinboroles'] = 'Choisir un rôle';
$string['conditionselectuserfromeventtype'] = 'Choisir un rôle';
$string['conditiontextfield'] = 'Valeur';
$string['confirmactivtyfrom'] = 'Confirmer l\'activité des utilisateurs à partir de';
$string['confirmationmessagesettings'] = 'Paramètres de confirmation de courriel';
$string['confirmationonnotification'] = 'Ouvrir la réservation pour l\'utilisateur?';
$string['confirmationonnotificationnoopen'] = 'Non, laisser ouvert pour tous les utilisateurs';
$string['confirmationonnotificationyesforall'] = 'Oui, pour tous les utilisateurs notifiés';
$string['confirmbooking'] = 'Confirmation de la réservation';
$string['confirmbookinglong'] = 'Voulez-vous vraiment confirmer cette réservation?';
$string['confirmbookingoffollowing'] = 'Veuillez confirmer la réservation pour le cours suivant';
$string['confirmbookingtitle'] = 'Confirmer la réservation';
$string['confirmcanceloption'] = 'Confirmer l\'annulation de l\'option de réservation';
$string['confirmcanceloptiontitle'] = 'Modifier le statut de l\'option de réservation';
$string['confirmchangesemester'] = 'OUI, je veux vraiment supprimer toutes les dates de réservation de l\'instance et en générer de nouvelles.';
$string['confirmdeletebookingoption'] = 'Voulez-vous vraiment supprimer cette option de réservation ?';
$string['confirmed'] = 'Confirmé';
$string['confirmoptioncompletion'] = '(Non) confirmation de l\'état d\'achèvement';
$string['confirmoptioncreation'] = 'Voulez-vous séparer cette option de réservation pour qu\'une option séparée soit créée pour chaque date individuelle de cette option?';
$string['confirmpresence'] = 'Confirmer la présence';
$string['confirmrecurringoption'] = 'Appliquer ces changements à tous les enfants de cette option également?';
$string['confirmrecurringoptionapplychanges'] = 'Appliquer les changements';
$string['confirmrecurringoptionerror'] = 'Vous pouvez procéder avec n\'importe laquelle de ces options';
$string['confirmrecurringoptionoverwrite'] = 'Écraser tous les paramètres';
$string['confirmusers'] = 'Confirmer l\'activité des utilisateurs';
$string['confirmuserswith'] = 'Confirmer les utilisateurs qui ont terminé une activité ou reçu un badge';
$string['connectedmoodlecourse'] = 'Cours Moodle relié';
$string['contains'] = 'contient (texte)';
$string['containsnot'] = 'ne contient pas (texte)';
$string['containsnotplain'] = 'ne contient pas';
$string['containsplain'] = 'contient';
$string['coolingoffperiod'] = 'Annulation possible après x secondes';
$string['copy'] = '- Copier';
$string['copyonlythisbookingurl'] = 'Copier l\'URL de la réservation';
$string['copypollurl'] = 'Copier l\'URL du sondage';
$string['copytoclipboard'] = 'Copier dans le presse-papiers : Ctrl+C, Entrée';
$string['copytotemplate'] = 'Enregistrer l\'option de réservation comme modèle';
$string['copytotemplatesucesfull'] = 'L\'option de réservation a été sauvegardée avec succès en tant que modèle.';
$string['course'] = 'Cours Moodle';
$string['coursecalendarurl'] = 'Lien du calendrier du cours';
$string['coursedate'] = 'Date';
$string['courseendtime'] = 'Heure de fin du cours';
$string['courseid'] = 'Cours auxquels s\'inscrire';
$string['coursepageshortinfo'] = 'Pour réserver ce cours, cliquer sur « Voir les options disponibles », choisir une option de réservation et cliquer sur « Réserver maintenant ».';
$string['coursepageshortinfolbl'] = 'Court texte d\'information';
$string['coursepageshortinfolbl_help'] = 'Choisir un court texte d\'information à afficher sur la page du cours.';
$string['courses'] = 'Cours';
$string['coursesheader'] = 'Cours Moodle';
$string['courseshortname'] = 'Nom court du cours';
$string['coursestart'] = 'Début';
$string['coursestarttime'] = 'Heure de début du cours';
$string['courseurl'] = 'URL du cours';
$string['createdbywunderbyte'] = 'Module de réservation créé par Wunderbyte GmbH';
$string['createical'] = 'Créer événements de calendrier';
$string['createnewbookingoption'] = 'Nouvelle option de réservation';
$string['createnewbookingoptionfromtemplate'] = 'Ajouter une nouvelle option de réservation à partir d\'un modèle';
$string['createnewmoodlecourse'] = 'Créer cours Moodle vide';
$string['createnewmoodlecoursefromtemplate'] = 'Créer cours Moodle depuis modèle';
$string['credits'] = 'Crédits';
$string['csvfile'] = 'Fichier CSV';
$string['customdatesbtn'] = '<i class="fa fa-plus-square"></i> Dates personnalisées…';
$string['customdownloadreport'] = 'Télécharger le rapport';
$string['customfield'] = 'Champ personnalisé à définir dans les paramètres de l\'option de réservation. Il sera ensuite affiché dans l\'aperçu de l\'option de réservation.';
$string['customfieldchanged'] = 'Champ personnalisé modifié';
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
$string['customformnotchecked'] = 'Vous n\'avez pas encore accepté.';
$string['custommessagesent'] = 'Message personnalisé envoyé';
$string['customprofilefield'] = 'Champ de profil personnalisé à vérifier';
$string['customprofilefieldvalue'] = 'Valeur du champ de profil personnalisé à vérifier';
$string['customreporttemplate'] = 'Modèle de rapport personnalisé';
$string['customreporttemplates'] = 'Modèles de rapport personnalisé';
$string['customuserprofilefield'] = 'Champ de profil utilisateur personnalisé';
$string['dashboardsummary'] = 'Général';
$string['dateandtime'] = 'Date et heure';
$string['dateerror'] = 'Mauvaise date ligne {$a}:';
$string['datenotset'] = 'Date non fixée';
$string['dateparseformat'] = 'Format de la date';
$string['dateparseformat_help'] = 'Veuillez utiliser le format de date spécifié dans le fichier CSV. Consultez l’aide <a href="https://php.net/manual/fr/function.date.php">ici</a> pour les options.';
$string['dates'] = 'Dates';
$string['datesheader'] = 'Dates';
$string['dayofweek'] = 'Jour de la semaine';
$string['dayofweektime'] = 'Jour & Heur';
$string['days'] = '{$a} jours';
$string['daysafter'] = '{$a} jour(s) après';
$string['daysbefore'] = '{$a} jour(s) avant';
$string['daystonotify'] = 'Combien de jours avant le début de l’événement faut-il notifier les participants ?';
$string['daystonotify2'] = 'Deuxième notification avant le début de l\'événement pour informer les participants.';
$string['daystonotify_help'] = 'Ne fonctionne que si les dates de début et de fin de l\'option sont définies ! Indiquer 0 pour désactiver cette fonctionnalité.';
$string['daystonotifysession'] = 'Nombre de jours avant le début de la session pour informer les participants';
$string['daystonotifysession_help'] = 'Saisir 0 pour désactiver la notification par courrier électronique pour cette session.';
$string['daystonotifysessionruleoverride'] = 'Nombre de jours avant le début';
$string['daystonotifyteachers'] = 'Nombre de jours avant l\'événement - début de la notification aux enseignants (PRO)';
$string['deduction'] = 'Déduction';
$string['deductionreason'] = 'Raison de la déduction';
$string['defaultbookingoption'] = 'Options de réservation par défaut';
$string['defaultdateformat'] = 'j.n.Y H:i:s';
$string['defaultoptionsort'] = 'Try par défaut par colonne';
$string['defaultpricecategoryname'] = 'Nom de la catégorie de prix par défaut';
$string['defaultpriceformula'] = 'Formule du prix';
$string['defaultpriceformuladesc'] = 'L\'objet JSON permet de configurer le calcul automatique des prix avec une option de réservation.';
$string['defaulttemplate'] = 'Modèle par défaut';
$string['defaulttemplatedesc'] = 'Modèle d\'option de réservation par défaut lors de la création d\'une nouvelle option de réservation.';
$string['defaultvalue'] = 'Valeur du prix par défaut';
$string['defaultvalue_help'] = 'Saisir une valeur par défaut pour chaque prix de cette catégorie. Bien entendu, cette valeur peut être remplacée ultérieurement.';
$string['delcustfield'] = 'Supprimer ce champ et tous les paramètres associés dans les options de réservation';
$string['delete'] = 'Supprimer';
$string['deleteallchildren'] = 'Supprimer tous les enfants de cette option';
$string['deletebooking'] = 'Voulez-vous vraiment vous désinscrire du cours suivant ? <br /><br /> <b>{$a} </b>';
$string['deletebookingcampaign'] = 'Supprimer campagne';
$string['deletebookinglong'] = 'Voulez-vraiment supprimer cette réservation?';
$string['deletebookingrule'] = 'Supprimer la règle';
$string['deletecategory'] = 'Annuler';
$string['deletecheckedanswersbody'] = 'Voulez-vous vraiment supprimer les réservations sélectionnées?';
$string['deletecustomfield'] = 'Supprimer un champ personnalisé ?';
$string['deletecustomfield_help'] = 'Attention : si cette case est cochée, le champ personnalisé associé sera supprimé lors de l\'enregistrement.';
$string['deleted'] = 'Supprimé';
$string['deletedbookings'] = 'Réservations supprimées';
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
$string['department'] = 'Département';
$string['description'] = 'Description';
$string['descriptionmaxlength'] = 'Taille maximale de la description';
$string['descriptionmaxlength_desc'] = 'La description de l\'option de réservation ne peut pas être plus longue';
$string['details'] = 'Détails';
$string['disablebookingforinstance'] = 'Désactiver toutes les options de réservation de cette instance';
$string['disablebookingusers'] = 'Désactiver les réservations des utilisateurs - masquer le bouton "Réserver maintenant".';
$string['disablecancel'] = 'Désactiver l\'annulation de cette option de réservation';
$string['disablepricecategory'] = 'Désactiver la catégorie de prix';
$string['disablepricecategory_help'] = 'Lorsqu\'une catégorie de prix est désactivée, il n\'est plus possible de l\'utiliser.';
$string['displayemptyprice'] = 'Afficher les prix à 0';
$string['dontaddpersonalevents'] = 'Ne pas ajouter d\'événements au calendrier personnel';
$string['dontapply'] = 'Ne pas appliquer';
$string['dontmove'] = 'Ne pas déplacer';
$string['dontusetemplate'] = 'Ne pas utiliser de modèle';
$string['download'] = 'Télécharger';
$string['downloadallresponses'] = 'Télécharger toutes les réponses pour toutes les options de réservation';
$string['downloaddemofile'] = 'Télécharger fichier démo';
$string['downloadusersforthisoptionods'] = 'Télécharger les utilisateurs au format .ods';
$string['downloadusersforthisoptionxls'] = 'Télécharger les utilisateurs au format .xls';
$string['doyouwanttobook'] = 'Voulez-vous réserver <b>{$a}</b>?';
$string['duplicatebookingoption'] = 'Dupliquer cette option de réservation';
$string['duplicatemoodlecourses'] = 'Dupliquer cours Moodle';
$string['duplicatename'] = 'Le nom de cette option de réservation existe déjà. Veuillez en choisir un autre.';
$string['duplication'] = 'Duplication';
$string['duplicationrestore'] = 'Duplication, sauvegarde et restauration';
$string['duplicationrestoredesc'] = 'Vous pouvez définir ici les informations à inclure lors de la duplication ou de la sauvegarde/restauration des instances de réservation.';
$string['duplicationrestoreentities'] = 'Inclure les entités';
$string['duplicationrestoreprices'] = 'Inclure les prix';
$string['duplicationrestoreteachers'] = 'Inclure les enseignants';
$string['duration'] = 'Durée';
$string['duration:minutes'] = 'Durée (minutes)';
$string['duration:units'] = 'Unités ({$a} min)';
$string['durationforcertificate'] = '{$a->hours} heure(s) {$a->minutes} minutes';
$string['editaction'] = 'Modifier Action';
$string['editbookingoption'] = 'Modifier l\'option de réservation';
$string['editcategory'] = 'Modifier';
$string['editingoptiondate'] = 'Vous êtes en train de modifier cette session';
$string['editinstitutions'] = 'Editer les institutions';
$string['editotherbooking'] = 'Autres règles de réservation';
$string['editrule'] = 'Modifier';
$string['editsubbooking'] = 'Modifier sous-réservation';
$string['edittag'] = 'Editer';
$string['editteachers'] = 'Modifier';
$string['editteacherslink'] = 'Modifier enseignants';
$string['educationalunitinminutes'] = 'Durée d\'une unité d\'enseignement (minutes)';
$string['educationalunitinminutes_desc'] = 'Saisir la durée d\'une unité d\'enseignement en minutes. Elle sera utilisée pour calculer les unités d\'enseignement réalisées.';
$string['electivenotbookable'] = 'Non réservable';
$string['email'] = 'Courriel';
$string['emailbody'] = 'Corps du courriel';
$string['enable'] = 'Activer';
$string['enablecompletion'] = 'Activer la réalisation d’activité.';
$string['enablecompletiongroup'] = 'Réalisation d’activité';
$string['enddate'] = 'Date de fin';
$string['endtime'] = 'Heure de fin';
$string['endtimenotset'] = 'Date de fin non rensignée';
$string['enrolementstatus'] = 'Mode d\'inscription au cours';
$string['enrolledcomments'] = 'Seulement les utilisateurs ayant réservé';
$string['enrolledinoptions'] = 'déjà réservé ces options :';
$string['enrolledratings'] = 'Seulement les utilisateurs ayant réservé';
$string['enrolledusers'] = 'Utilisateurs inscrits au cours';
$string['enrollink'] = 'Lien d\'inscription';
$string['enrollink:0'] = 'Une erreur s\'est produite lors de l\'inscription';
$string['enrollink:1'] = 'Vous êtes déjà inscrit dans ce cours et pouvez y accéder';
$string['enrollink:2'] = 'Inscrits avec succès';
$string['enrollink:3'] = 'Votre lien d\'inscription est invalide.';
$string['enrollink:5'] = 'Les invités ne sont pas autorisés';
$string['enrollink:6'] = 'Votre enregistrement est complété et doit être validé par une personne autorisée.';
$string['enrolmultipleusers'] = 'Inscrire plusieurs utilisateurs';
$string['entervalidurl'] = 'Veuillez entrer une URL valide !';
$string['entitiesfieldname'] = 'Emplacement';
$string['entitydeleted'] = 'L\'emplacement a été supprimé';
$string['equals'] = 'a exactement cette valeur (texte ou nombre)';
$string['equalsnot'] = 'n\'a pas exactement cette valeur (texte ou nombre)';
$string['equalsnotplain'] = 'n\'a pas exactement cette valeur';
$string['equalsplain'] = 'a exactement cette valeur';
$string['error:choosevalue'] = 'Vous devez choisir une valeur ici.';
$string['error:confirmthatyouaresure'] = 'Merci de confirmer que vous êtes certain.';
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
$string['error:negativevaluenotallowed'] = 'Merci d\'entrer une valeur positive.';
$string['error:nofieldchosen'] = 'Vous devez choisir un domaine.';
$string['error:reasonfornoteacher'] = 'Indiquer la raison pour laquelle aucun enseignant n\'était présent à cette date.';
$string['error:reasontoolong'] = 'Le motif est trop long, saisir un texte plus court.';
$string['errorduplicatesemesteridentifier'] = 'Les identifiants de semestres doivent être uniques.';
$string['errorduplicatesemestername'] = 'Les noms de semestres doivent être uniques.';
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
$string['eventdescription'] = 'Description de l\'événement';
$string['eventduration'] = 'Durée de l’évènement';
$string['eventpoints'] = 'Points';
$string['eventreportviewed'] = 'Rapport consulté';
$string['eventslist'] = 'Modifications récentes';
$string['eventteacheradded'] = 'Enseignant ajouté';
$string['eventteacherremoved'] = 'Enseignant retiré';
$string['eventtype'] = 'Type d’évènement';
$string['excelfile'] = 'Fichier CSV avec la réalisation d’activités';
$string['existingsubscribers'] = 'Inscrits existants';
$string['expired'] = 'Désolés, cette activité a fermé le {$a} et n’est plus disponible';
$string['feedbackurl'] = 'Lien de sondage';
$string['feedbackurl_help'] = 'Saisir le lien d\'un formulaire de rétroaction à envoyer aux participants.
Il peut être ajouté aux courriels avec le marqueur <b>{pollurl}</b}';
$string['feedbackurlteachers'] = 'Lien de sondage des enseignants';
$string['feedbackurlteachers_help'] = 'Saisir le lien d\'un formulaire de rétroaction à envoyer aux enseignants.
Il peut être ajouté aux courriels avec le marqueur <b>{pollurteachersl}</b}';
$string['fillinatleastoneoption'] = 'vous devez fournir au moins deux réponses possibles';
$string['filterbtn'] = 'Filtre';
$string['filterenddate'] = 'Jusqu\'à';
$string['filterstartdate'] = 'De';
$string['firstname'] = 'Prénom';
$string['firstnamerelated'] = 'Prénom de la personne reliée (ex la personne pour laquelle la réservation a été faite)';
$string['forcourse'] = 'pour le cours';
$string['format'] = 'format';
$string['formconfig'] = 'Afficher le formulaire utilisé.';
$string['formtype'] = 'type de formulaire';
$string['friday'] = 'Vendredi';
$string['from'] = 'De';
$string['full'] = 'Plein';
$string['fullname'] = 'Nom complet';
$string['fullwaitinglist'] = 'Liste d\'attente complète';
$string['fullybooked'] = 'Complet';
$string['general'] = 'Général';
$string['generalsettings'] = 'Paramètres généraux';
$string['generaterecnum'] = 'Générer les nombres';
$string['generaterecnumareyousure'] = 'Ceci générera de nouveaux nombres et supprimera définitivement les anciens.';
$string['generaterecnumnotification'] = 'Les nouveaux nombres ont été générés.';
$string['global'] = 'global.';
$string['globalactivitycompletiontext'] = 'Message à envoyer à l\'utilisateur lorsque l\'option de réservation est complétée (modèle global)';
$string['globalbookedtext'] = 'Confirmation de réservation (modèle global)';
$string['globalcurrency'] = 'Devise';
$string['globalcurrencydesc'] = 'Choisir la device pour les options de prix.';
$string['globaldeletedtext'] = 'Message de réservation annulée (modèle global)';
$string['globalmailtemplates'] = 'Modèles de courriel global';
$string['globalnotifyemail'] = 'Notification des participants avant le démarrage (modèle global)';
$string['globalnotifyemailteachers'] = 'Notification de l\'enseignant avant le démarrage (modèle global)';
$string['globalstatuschangetext'] = 'Message de changement de statut (modèle global)';
$string['globaluserleave'] = 'L\'utilisateur a annulé sa propre réservation (modèle global)';
$string['globalwaitingtext'] = 'Confirmation de la liste d\'attente (modèle global)';
$string['gotobooking'] = '<<Réservations';
$string['gotobookingoption'] = 'Aller à l\'option de réservation';
$string['gotobookingoptionlink'] = '{$a}';
$string['gotomanageresponses'] = '&lt;&lt; Gérer les réservations';
$string['gotomoodlecourse'] = 'Atteindre le cours Moodle';
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
$string['icalfieldlocationdesc'] = 'Choisissez dans la liste déroulante le texte à utiliser pour l\'emplacement du champ de calendrier';
$string['id'] = 'Id';
$string['identifier'] = 'Identification';
$string['ifdefinedusedtomatch'] = 'Si défini, sera utilisé pour la correspondance.';
$string['importaddtocalendar'] = 'Ajouter au calendrier Moodle';
$string['importcolumnsinfos'] = 'Informations sur les colonnes à importer :';
$string['importcoursenumber'] = 'Numéro d\'identification d\'un cours Moodle auquel les participants sont inscrits';
$string['importcourseshortname'] = 'Nom abrégé d\'un cours Moodle auquel les participants sont inscrits';
$string['importcsv'] = 'Importation CSV';
$string['importcsvbookingoption'] = 'Importer un fichier CSV avec options de réservation';
$string['importcsvtitle'] = 'Importer un fichier CSV';
$string['importdayofweek'] = 'Jour de la semaine pour une option de réservation, par exemple, lundi';
$string['importdayofweekendtime'] = 'Heure de fin d\'un cours, par exemple 12h00';
$string['importdayofweekstarttime'] = 'Heure de début d\'un cours, par exemple 10h00';
$string['importdayofweektime'] = 'Jour de la semaine et heure pour une option de réservation, par exemple, lundi, 10h00 - 12h00';
$string['importdescription'] = 'Description de l\'option de réservation';
$string['importexcelbutton'] = 'Importer la réalisation d’activité';
$string['importexceltitle'] = 'Importer la réalisation d’activité';
$string['importfailed'] = 'Importation échouée';
$string['importfinished'] = 'Importation terminée !';
$string['importidentifier'] = 'Identifiant unique d\'une option de réservation';
$string['importinfo'] = 'Informations sur l\'importation : vous pouvez utiliser les colonnes suivantes dans l\'importation CSV (explication entre parenthèses)';
$string['importlocation'] = 'Localisation d\'une option de réservation. Lié automatiquement au nom réel d\'une entité (local_entities) en cas de correspondance parfaite. Le numéro d\'identification de l\'entité peut également être saisi ici.';
$string['importmaxanswers'] = 'Nombre maximum de réservations par option de réservation';
$string['importmaxoverbooking'] = 'Nombre maximum de places sur liste d\'attente par option de réservation';
$string['inarray'] = 'l\'utilisateur a l\'une de ces valeurs séparées par des virgules';
$string['includeteachers'] = 'Inclure les enseignants dans la feuille de présence';
$string['indexnumber'] = 'Numérotage';
$string['info:teachersforoptiondates'] = 'Accédez au <a href="{$a}" target="_self">journal d\'enseignement</a> pour gérer les enseignants pour des dates spécifiques.';
$string['infoalreadybooked'] = '<div class="infoalreadybooked"><i>Vous avez déjà réservé pour cette option.</i></div>';
$string['infonobookingoption'] = 'Pour ajouter une option de réservation, veuillez utiliser le bloc des paramètres ou l\'icône des paramètres en haut de la page.';
$string['infowaitinglist'] = '<div class="infowaitinglist"><i>Vous êtes sur la liste d\'attente pour cette option.</i></div>';
$string['instancename'] = 'Nom de l\'instance';
$string['instancesuccessfullysaved'] = 'Cette instance de réservation a été sauvegardée avec succès en tant que modèle.';
$string['instancetemplate'] = 'Modèle d\'instance';
$string['institution'] = 'Institution';
$string['institution_help'] = 'Vous pouvez saisir le nom de l\'établissement manuellement ou le choisir parmi une liste d\'établissements précédents. Vous ne pouvez choisir qu\'un seul établissement. Une fois enregistré, il sera ajouté à la liste.';
$string['institutions'] = 'Institutions';
$string['interval'] = 'Délai';
$string['interval_help'] = 'En minutes. 1440 pour 24 heures.';
$string['invisible'] = 'Invisible';
$string['invisibleoption'] = '<i class="fa fa-eye-slash" aria-hidden="true"></i> Invisible';
$string['invisibleoption:notallowed'] = 'Vous n\'êtes pas autorisé à voir cette option de réservation.';
$string['invisibleoptions'] = 'Options de réservations invisibles';
$string['isempty'] = 'le champ est vide';
$string['isnotempty'] = 'le champ n\'est pas vide';
$string['journal'] = 'Journal';
$string['lastname'] = 'Nom';
$string['lblbooking'] = 'Nomp de l’étiquette "Réservation"';
$string['lblbooktootherbooking'] = 'Nom du bouton : Réserver pour l\'utilisateur une autre option de réservation';
$string['lblinstitution'] = 'nom de l’étiquette "Institution"';
$string['lbllocation'] = 'Nom de l’étiquette "Lieu"';
$string['lblname'] = 'Nom de l’étiquette "Nom"';
$string['lblsputtname'] = 'Nom de l’étiquette "Envoyer l’url de sondage aux professeurs"';
$string['lblsurname'] = 'Nom de l’étiquette "Prénom"';
$string['lblteachname'] = 'Nom de l’étiquette "Professeurs"';
$string['leftandrightdate'] = '{$a->leftdate} à {$a->righttdate}';
$string['licensekey'] = 'Clé de licence PRO';
$string['licensekeycfg'] = 'Activer la version PRO';
$string['limit'] = 'Limite';
$string['limitanswers'] = 'Limiter le nombre de participants';
$string['limitanswers_help'] = 'Si vous changez cette option et que vous avez enregistré des personnes, vous pouvez les enlever sans notification !';
$string['linkbacktocourse'] = 'Lien vers l\'option de réservation';
$string['linkgotobookingoption'] = 'Accéder à l\'option réservée : {$a}</a>';
$string['linknotavailableyet'] = 'Le lien pour accéder à la rencontre est disponible seulement 15 minutes avant le début et jusqu\'à la fin de la session.';
$string['linknotvalid'] = 'Ce lien ou cet évènement n\'est pas accessible.
S\'il s\'agit d\'un évènement que vous avez réservé, veuillez vérifier à nouveau peu de temps avant le début de la réunion.';
$string['linktocalendarurltext'] = 'Lien vers le calendrier';
$string['linktocourse'] = 'Lien vers le cours';
$string['linktomoodlecourseonbookedbutton'] = 'Afficher le lien vers le cours Moodle directement sur le bouton de réservation';
$string['linktomoodlecourseonbookedbutton_desc'] = 'Au lieu d\'un lien supplémentaire, cela transformera le bouton réservé en un lien vers le cours Moodle';
$string['linktoteachersinstancereport'] = '<p><a href="{$a}" target="_self">&gt;&gt; Accéder au rapport des enseignants pour l\'instance de réservation</a></p>';
$string['location'] = 'Lieu';
$string['loginbuttonforbookingoptionscoloroptions'] = 'Choisissez le style (couleur) du bouton affiché';
$string['loginbuttonforbookingoptionscoloroptions_desc'] = 'Utilise les styles Bootstrap 4. Les couleurs correspondent à l\'application par défaut.';
$string['lowerthan'] = 'est inférieur à (nombre)';
$string['mail'] = 'Courriel';
$string['mailconfirmationsent'] = 'Vous allez recevoir sous peu une confirmation par courriel';
$string['mailtemplatesadvanced'] = 'Activer les paramètres avancés pour les modèles de courriel';
$string['mailtemplatesglobal'] = 'Utiliser les modèles de courrier globaux à partir des paramètres du plugin';
$string['mailtemplatesinstance'] = 'Utiliser les modèles de courriel de cette instance de réservation (par défaut)';
$string['mailtemplatessource'] = 'Définir la source des modèles de courrier';
$string['mailtemplatessource_help'] = '<b>Attention :</b> Si vous choisissez des modèles d\'e-mail globaux, les modèles spécifiques à l\'instance ne seront pas utilisés. À la place, les modèles d\'e-mail spécifiés dans les paramètres du module de réservation seront utilisés.
<br><br>
Veuillez vous assurer que des modèles d\'e-mail existent déjà dans les paramètres de réservation pour chaque type d\'e-mail.';
$string['managebookedusers_heading'] = 'Gérer les réservations pour <b>{$a->scopestring}</b> : "{$a->title}"';
$string['managebooking'] = 'Gérer';
$string['managebookinginstancetemplates'] = 'Gérer les modèles d\'instances de réservation';
$string['managecustomreporttemplates'] = 'Gérer les modèles de rapports personnalisés';
$string['manageoptiontemplates'] = 'Gérer les modèles d\'options de réservation';
$string['manageresponses'] = 'Gérer les réponses';
$string['manageresponsesdownloadfields'] = 'Gérer les réponses - Télécharger (CSV, XLSX…)';
$string['manageresponsespagefields'] = 'Gérer les réponses - Page';
$string['mandatory'] = 'obligatoire';
$string['matchuserprofilefield'] = 'Sélectionnez les utilisateurs en faisant correspondre le champ dans l\'option de réservation et le champ de profil utilisateur.';
$string['maxanswers'] = 'Limite de réponses';
$string['maxoptionsfromcategory'] = 'Limiter le nombre de réservations par catégorie';
$string['maxoptionsfromcategorycount'] = 'Combien d\'options de réservation un utilisateur peut-il réserver au maximum dans la catégorie « {$a} » ? Ceci s\'applique à chaque champ sélectionné ci-dessous, et 0 signifie illimité.';
$string['maxoptionsfromcategorydesc'] = 'Les paramètres exacts sont définis lors de la réservation. Si vous le souhaitez, cochez la case, enregistrez et définissez le champ à sélectionner à l\'étape suivante.';
$string['maxoverbooking'] = 'Nombre max. de places sur la liste d’attente';
$string['maxparticipantsnumber'] = 'Nombre max. de participants';
$string['maxparticipantsnumber_help'] = 'Entrer "0" pour illimité';
$string['maxperuser'] = 'Nombre max. de réservations par utilisateur';
$string['maxperuser_help'] = 'Le nombre maximum de réservations qu’un utilisateur individuel peut faire à la fois dans cette activité. Une heure après la fin de l’événement, il n’est plus compté dans cette limite.';
$string['maxperuserwarning'] = 'Vous avez actuellement un maximum de {$a->count}/{$a->limit} réservations';
$string['messagebutton'] = 'MEssage';
$string['messageprovider:bookingconfirmation'] = 'Confirmations de réservation';
$string['messageprovider:sendmessages'] = 'Peut envoyer des messages';
$string['messagesend'] = 'Votre message a été envoyé avec succès.';
$string['messagesent'] = 'Message envoyé';
$string['messagesubject'] = 'Sujet';
$string['messagetext'] = 'Message';
$string['messagingteacherimpossible'] = 'Vous ne pouvez pas envoyer de messages à cet enseignant car vous n\'êtes inscrit à aucun de ses cours.';
$string['minanswers'] = 'Nombre minimum de participants';
$string['minutes'] = '{$a} minutes';
$string['missinghours'] = 'Heures manquantes';
$string['mobileappheading'] = 'Application mobile';
$string['mobileappprice'] = 'Prix';
$string['modaloptiondateformtitle'] = 'Dates personnalisées';
$string['modulename'] = 'Réservation';
$string['modulenameplural'] = 'Réservations';
$string['monday'] = 'Lundi';
$string['moveoptionto'] = 'Déplacer l\'option de réservation vers une autre instance de réservation';
$string['multipledayofweektimestringshint'] = 'Vous pouvez saisir une combinaison de jour de la semaine et d\'heure <b>par ligne</b>.<br>Exemple : « Lundi, 10 h 00 - 12 h 00 » et « Mardi, 15 h 00 - 16 h 30 »';
$string['multiselect'] = 'Sélection multiple';
$string['mustchooseone'] = 'Vous devez choisir une option avant de réserver. Rien n’a été sauvegardé.';
$string['mustcombine'] = 'Options de réservation nécessaires';
$string['mustcombine_help'] = 'Options de réservation qui doivent être combinées avec cette option';
$string['mustfilloutuserinfobeforebooking'] = 'Avant de soumettre le fomulaire de réservation, merci de remplir quelques informations personnelles de réservation';
$string['mustnotcombine'] = 'Options de réservation exclues';
$string['mustnotcombine_help'] = 'Options de réservation non cumulables avec cette option';
$string['mybookingoptions'] = 'Mes options réservées';
$string['mybookingsbooking'] = 'Réservation (Cours)';
$string['mybookingsoption'] = 'Option';
$string['mycourselist'] = 'Afficher mes options de réservation.';
$string['myinstitution'] = 'Mon établissement';
$string['name'] = 'Nom';
$string['newcourse'] = 'Créer un nouveau cours…';
$string['newcoursecategorycfield'] = 'Champ personnalisé d\'option de réservation à utiliser comme catégorie de cours';
$string['newcoursecategorycfielddesc'] = 'Choisissez un champ personnalisé d\'option de réservation qui sera utilisé comme catégorie de cours pour les cours créés automatiquement à l\'aide de la liste déroulante « Créer un nouveau cours… » dans le formulaire de création de nouvelles options de réservation.';
$string['newoptiondate'] = 'Créer une nouvelle session…';
$string['newtemplatesaved'] = 'Un nouveau modèle pour l\'option de réservation a été enregistré.';
$string['next'] = 'Suivant';
$string['no'] = 'Non';
$string['nobookinginstancesexist'] = 'Aucune instance de réservation n\'existe encore';
$string['nobookingpossible'] = 'Aucune réservation possible.';
$string['nobookingselected'] = 'Aucune option de réservation sélectionnée';
$string['nocancelreason'] = 'Vous devez donner une raison pour annuler cette option de réservation';
$string['nocfnameselected'] = 'Aucune sélection. Saisissez un nouveau nom ou sélectionnez-en un dans la liste.';
$string['nocomments'] = 'Commentaires désactivés';
$string['nocourse'] = 'Aucun cours sélectionné pour cette option de réservation';
$string['nocourseselected'] = 'Aucun cours sélectionné';
$string['nodatesstring'] = 'Il n\'y a actuellement aucune date associée à cette option de réservation';
$string['nodatesstring_desc'] = 'aucune date';
$string['noelement'] = 'Aucun élément';
$string['noeventtypeselected'] = 'Aucun type d\'événement sélectionné';
$string['nofieldchosen'] = 'Aucun champ choisi';
$string['nofieldofstudyfound'] = 'Aucun champ n’a pu être déterminé via des cohortes';
$string['nogrouporcohortselected'] = 'Vous devez sélectionner au moins un groupe ou une cohorte.';
$string['noguestchoose'] = 'Désolés, les invités ne sont pas autorisés à entrer des données';
$string['noinstitutionselected'] = 'Aucune institution sélectionnée';
$string['nolabels'] = 'Aucune étiquette de colonne définie dans l\'objet Paramètres.';
$string['nolocationselected'] = 'Aucun emplacement sélectionné';
$string['nomoodlecourseconnection'] = 'Aucune connexion au cours Moodle';
$string['nooptionselected'] = 'Aucune option de réservation sélectionnée';
$string['nooverlapblocking'] = 'Cette option ne peut pas être réservée car elle chevauche vos options déjà réservées : {$a}';
$string['nooverlappingselectblocking'] = 'Réservation en bloc';
$string['nooverlappingselectinfo'] = 'Si cette option de réservation est sélectionnée alors que les séances se chevauchent avec une autre, que doit-il se passer ?';
$string['nooverlappingselectwarning'] = 'Afficher l\'avertissement';
$string['nooverlappingsettingcheckbox'] = 'Restreindre la réservation des options qui se chevauchent';
$string['nooverlapwarning'] = 'Attention, cette option chevauche vos options déjà réservées : {$a}';
$string['nopermissiontoaccesscontent'] = '<div class="alert alert-danger" role="alert">Vous n\'avez pas l\'autorisation d\'accéder à ce contenu.</div>';
$string['nopermissiontoaccesspage'] = '<div class="alert alert-danger" role="alert">Vous n\'avez pas l\'autorisation d\'accéder à cette page.</div>';
$string['norestriction'] = 'Aucune restriction';
$string['noresultsviewable'] = 'Les résultats ne sont pas actuellement accessibles.';
$string['norighttobook'] = 'Réserver n’est pas possible pour votre rôle utilisateur. Merci de contacter l’administrateur du site afin qu’il vous donne les droits appropriés ou bien identifiez vous.';
$string['norowsselected'] = 'Vous n\'avez rien sélectionné. Veuillez fermer cette fenêtre et sélectionner d\'abord les lignes auxquelles vous souhaitez appliquer cette action.';
$string['noruleselected'] = 'Aucune règle sélectionnée';
$string['noselection'] = 'Aucune sélection';
$string['nosemester'] = 'Aucun semestre choisi';
$string['nosubscribers'] = 'Il n’y a pas de professeur assigné !';
$string['notallbooked'] = 'Les utilisateurs suivants n\'ont pas pu être réservés en raison du nombre maximal de réservations par utilisateur atteint ou du manque de places disponibles pour l\'option de réservation : {$a}';
$string['notanswered'] = 'Pas de réponse';
$string['notateacher'] = 'L\'utilisateur sélectionné n\'enseigne aucun cours et n\'est probablement pas un enseignant.';
$string['notbookable'] = 'Non réservable';
$string['notbookablecombiantion'] = 'Cette combinaison d\'options n\'est pas autorisée';
$string['notbooked'] = 'Pas encore réservé';
$string['notconectedbooking'] = 'Pas connecté';
$string['noteacherfound'] = 'Pas de professeur trouvé ligne {$a}:';
$string['noteacherset'] = 'Pas d\'enseignant';
$string['notemplate'] = 'Ne pas utiliser comme modèle';
$string['notemplateyet'] = 'Pas encore de modèle';
$string['notes'] = 'Notes';
$string['notesedited'] = 'Notes modifiées';
$string['noteseditedhistory'] = 'Les notes ont été modifiées de « {$a->notesold} » à « {$a->notesnew} ».';
$string['noteseditedinfo'] = 'Les notes de {$a->relateduser} ont été modifiées de « {$a->notesold} » à « {$a->notesnew} ».';
$string['notfullwaitinglist'] = 'Liste d\'attente non complète';
$string['notfullybooked'] = 'Pas complet';
$string['notificationlist'] = 'Liste de notifications';
$string['notificationlistdesc'] = 'Lorsqu\'il n\'y a plus de place disponible, les utilisateurs peuvent toujours s\'inscrire pour être avertis lorsqu\'une place se libère';
$string['notificationtext'] = 'Texte de notification montré lors de l’achèvement de l’activité.';
$string['notifyemail'] = 'Notification des participants avant le début';
$string['notifyemailmessage'] = 'Votre réservation débutera bientôt :
Statut de la réservation : {$a->status}
Participant : {$a->participant}
Option de réservation : {$a->title}
Date : {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Pour consulter tous vos cours réservés, cliquez sur le lien suivant : {$a->bookinglink}
Le cours associé est disponible ici : {$a->courselink}';
$string['notifyemailsubject'] = 'Votre réservation commencera bientôt';
$string['notifyemailteachers'] = 'Notification de l\'enseignant avant le début';
$string['notifyemailteachersmessage'] = 'Vos réservations débuteront bientôt :
{$a->bookingdetails}
Vous avez <b>{$a->numberparticipants} participants inscrits</b> et <b>{$a->numberwaitinglist} personnes sur la liste d\'attente</b>.
Pour consulter tous vos cours réservés, cliquez sur le lien suivant : {$a->bookinglink}
Le cours associé est disponible ici : {$a->courselink}';
$string['notifyemailteacherssubject'] = 'Votre réservation commencera bientôt';
$string['notifyme'] = 'Notifier quand disponible';
$string['notifymelistdeleted'] = 'Utilisateur supprimé de la liste de notification';
$string['notinarray'] = 'l\'utilisateur n\'a aucune de ces valeurs séparées par des virgules';
$string['notopenyet'] = 'Désolé cette activité est indisponible jusqu’au {$a}';
$string['notstarted'] = 'Pas encore commencé';
$string['nouserfound'] = 'Pas d’utillisateur trouvé:';
$string['nousers'] = 'Pas d’utilisateurs !';
$string['numberofinstallment'] = 'Nombre de versements (1 pour le premier)';
$string['numberofinstallmentstring'] = 'numéro de versement {$a}';
$string['numberparticipants'] = 'Nombre de participants';
$string['numberrows'] = 'Nombre de lignes';
$string['numberrowsdesc'] = 'Numérotez chaque ligne de la feuille de présence. Le numéro sera affiché à gauche du nom, dans la même colonne.';
$string['numberwaitinglist'] = 'Numéro sur la liste d\'attente';
$string['numgenerator'] = 'Activer la génération de numéros d\'enregistrement ?';
$string['numrec'] = 'Numéro d\'enregistrement';
$string['off'] = 'désactivé';
$string['on'] = 'activé';
$string['onecohortmustbefound'] = 'L\'utilisateur doit être membre d\'au moins une de ces cohortes';
$string['onecoursemustbefound'] = 'L\'utilisateur doit être inscrit à au moins un seul de ces cours';
$string['onlineoptiondate'] = 'Se déroule en ligne';
$string['onlyaddactionsonsavedoption'] = 'Les actions après la réservation ne peuvent être ajoutées qu\'une fois l\'option de réservation enregistrée.';
$string['onlyaddentitiesonsavedsubbooking'] = 'Vous devez enregistrer cette sous-réservation avant de pouvoir ajouter une entité.';
$string['onlyaddsubbookingsonsavedoption'] = 'Vous devez enregistrer cette option de réservation avant de pouvoir ajouter des sous-réservations.';
$string['onlythisbookingoption'] = 'Uniquement cette option de réservation';
$string['onlyusersfrominstitution'] = 'Vous ne pouvez ajouter que des utilisateurs de cette institution : {$a}';
$string['onwaitinglist'] = 'Vous êtes sur la liste d’attente';
$string['openbookingdetailinsametab_desc'] = 'Dans la liste des cours, cliquer sur le titre de l\'option de réservation ouvrira sa vue détaillée. Si vous sélectionnez cette option, les utilisateurs verront immédiatement cette nouvelle page. Sinon, la vue détaillée s\'ouvrira dans un nouvel onglet.';
$string['openformat'] = 'format ouvert';
$string['optional'] = 'optionnel';
$string['optionannotation'] = 'Annotation interne';
$string['optionannotation_help'] = 'Ajoutez des remarques internes, des annotations ou tout autre élément de votre choix. Ces informations seront affichées uniquement dans ce formulaire.';
$string['optionbookablebody'] = '{$a->title} est à nouveau disponible. <a href="{$a->url}">Cliquez ici</a> pour y accéder directement.<br><br>
(Vous recevez ce message car vous avez cliqué sur le bouton de notification correspondant.)<br><br>
<a href="{$a->unsubscribelink}">Se désabonner des notifications par e-mail pour « {$a->title} ».</a>';
$string['optionbookabletitle'] = '{$a->title} est à nouveau disponible';
$string['optiondate'] = 'Date';
$string['optiondateend'] = 'Fin';
$string['optiondates'] = 'Dates';
$string['optiondatesmanager'] = 'Gérer les options de dates';
$string['optiondatesmessage'] = 'Session {$a->number} : {$a->date} <br> De : {$a->starttime} <br> À : {$a->endtime}';
$string['optiondatessuccessfullydelete'] = 'L\'heure de la session a été supprimée.';
$string['optiondatessuccessfullysaved'] = 'L\'heure de la session a été sauvegardée.';
$string['optiondatestart'] = 'Début';
$string['optiondatesteacheradded'] = 'Un enseignant remplaçant a été ajouté';
$string['optiondatesteacherdeleted'] = 'Enseignant supprimé du journal d\'enseignement';
$string['optiondatesteachersreport'] = 'Remplacements / Dates annulées';
$string['optiondatesteachersreport_desc'] = 'Ce rapport donne un aperçu de la présence de l\'enseignant à une date précise.

Par défaut, chaque date sera renseignée avec le nom de l\'enseignant concerné. Vous pouvez remplacer certaines dates par des enseignants remplaçants.';
$string['optiondatestime'] = 'Durée de la séance';
$string['optionformconfig:nobooking'] = 'Vous devez créer au moins une instance de réservation avant de pouvoir utiliser ce formulaire !';
$string['optionid'] = 'ID d’option';
$string['optionidentifier'] = 'Identificateur unique';
$string['optionidentifier_help'] = 'Ajoutez un identifiant unique pour cette option de réservation.';
$string['optioninvisible'] = 'Masquer des utilisateurs normaux (visible uniquement par les utilisateurs autorisés)';
$string['optionmenu'] = 'Cette option de réservation';
$string['optionmoved'] = 'Option de réservation déplacée';
$string['optionnoimage'] = 'Pas d\'image';
$string['optionsdownloadfields'] = 'Aperçu des options de réservation - Télécharger (CSV, XLSX…)';
$string['optionsfield'] = 'Champ d\'option de réservation';
$string['optionsfields'] = 'Champs d\'option de réservation';
$string['optionsiamresponsiblefor'] = 'Je suis le contact responsable';
$string['optionsiteach'] = 'Enseigné par moi';
$string['optionspagefields'] = 'Aperçu des options de réservation - Page';
$string['optionspecificcampaignwarning'] = 'Si vous sélectionnez les champs ci-dessous, la campagne s\'appliquera uniquement aux options de réservation qui remplissent les conditions.
<div class="alert alert-warning style="margin-left: 200px;">
<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
<span>Attention : selon vos paramètres, cette campagne peut désactiver les options de réservation dans de nombreux cas.</span>
</div>
Si vous sélectionnez un champ « Option de réservation » ET un champ « Profil utilisateur personnalisé », les deux conditions doivent être remplies.';
$string['optiontemplate'] = 'Modèle d\'option';
$string['optiontemplatename'] = 'Nom du modèle d\'option';
$string['optionvisibility'] = 'Visibilité';
$string['optionvisibility_help'] = 'Ici, vous pouvez choisir si l\'option doit être visible pour tout le monde ou si elle doit être masquée pour les utilisateurs normaux et être visible uniquement pour les utilisateurs autorisés.';
$string['optionvisible'] = 'Visible par tous (par défaut)';
$string['optionvisibledirectlink'] = 'Les utilisateurs normaux ne peuvent voir cette option qu\'avec un lien direct';
$string['organizatorname'] = 'Nom de l’organisateur';
$string['organizatorname_help'] = 'Vous pouvez saisir le nom de l\'organisateur manuellement ou le choisir parmi une liste d\'organisateurs précédents. Vous ne pouvez choisir qu\'un seul organisateur. Une fois enregistré, il sera ajouté à la liste.';
$string['orotherfield'] = 'OU champ supplémentaire';
$string['otherbookingaddrule'] = 'Ajouter une nouvelle règle';
$string['otherbookinglimit'] = 'Limite';
$string['otherbookinglimit_help'] = 'Nombre d\'utilisateurs acceptés selon l\'option. Si la valeur est 0, vous pouvez accepter un nombre illimité d\'utilisateurs.';
$string['otherbookingnumber'] = 'Nombre d\'utilisateurs';
$string['otherbookingoptions'] = 'Accepter de';
$string['otherbookingsuccessfullysaved'] = 'Règle sauvegardée!';
$string['otheroptionsavailable'] = 'Options liées disponibles';
$string['otheroptionsnotavailable'] = 'Option(s) liée(s) non disponible(s)';
$string['overridecondition'] = 'Condition';
$string['overrideconditioncheckbox'] = 'A un rapport avec une autre condition';
$string['overrideoperator'] = 'Opérateur';
$string['overrideoperator:and'] = 'ET';
$string['overrideoperator:or'] = 'OU';
$string['overwriteblockingwarnings'] = 'Remplacer les avertissements de blocage par le texte ci-dessous';
$string['page:bookingpolicy'] = 'Politique de réservation';
$string['page:bookitbutton'] = 'Réserver';
$string['page:checkout'] = 'Vérifier';
$string['page:confirmation'] = 'Réservation complétée';
$string['page:customform'] = 'Remplissez le formulaire';
$string['page:subbooking'] = 'Réservations supplémentaires';
$string['paginationnum'] = 'Nombre d\'enregistrements - pagination';
$string['participant'] = 'participant';
$string['pdflandscape'] = 'Paysage';
$string['pdfportrait'] = 'Portrait';
$string['percentageavailableplaces'] = 'Pourcentage de places disponibles';
$string['percentageavailableplaces_help'] = 'Vous devez saisir un pourcentage valide compris entre 0 et 100 (sans signe % !).';
$string['personnr'] = 'Personne n° {$a}';
$string['placeholders'] = 'Espaces réservés';
$string['placeholders_help'] = 'Laissez ce champ vide pour utiliser le texte par défaut du site.';
$string['places'] = 'Places';
$string['placesinfoshowbooked'] = 'Afficher les places réservées';
$string['placesinfoshowfreeonly'] = 'Afficher le texte pour les places libres';
$string['placesinfoshowinfotexts'] = 'Afficher les textes d\'information sur la disponibilité';
$string['pluginadministration'] = 'Administration des réservations';
$string['pluginname'] = 'Réservation';
$string['pollstartdate'] = 'Date de début du sondage';
$string['pollstrftimedate'] = '%d-%m-%Y';
$string['pollurl'] = 'URL de sondage';
$string['pollurlteachers'] = 'URL de sondage pour les professeurs';
$string['pollurlteacherstext'] = 'URL d’envoi de sondage pour les professeurs';
$string['pollurlteacherstextmessage'] = 'Veuillez répondre au sondage

URL du sondage: <a href="{pollurlteachers}" target="_blank">{pollurlteachers}</a>';
$string['pollurlteacherstextsubject'] = 'Veuillez répondre au sondage';
$string['pollurltext'] = 'Envoyer l’URL de sondage';
$string['pollurltextmessage'] = 'Veuillez répondre au sondage

URL du sondage: <a href="{pollurl}" target="_blank">{pollurl}</a>';
$string['pollurltextsubject'] = 'Veuillez répondre au sondage';
$string['populatefromtemplate'] = 'Remplir à partir du modèle';
$string['potentialsubscribers'] = 'Abonnés potentiels';
$string['prepareimport'] = 'Préparer l\'importation';
$string['presence'] = 'Présence';
$string['presencechanged'] = 'Présence modifiée';
$string['presencechangedhistory'] = 'La présence a été modifiée de « {$a->presenceold} » à « {$a->presencenew} ».';
$string['presencechangedinfo'] = 'La présence de {$a->relateduser} a été modifiée de « {$a->presenceold} » à « {$a->presencenew} ».';
$string['presencecount'] = 'Nombre de présences';
$string['presenceoptions'] = 'Options pour le statut de présence';
$string['presenceoptions_desc'] = 'Quel statut devrait être possible ?';
$string['previous'] = 'Précédent';
$string['price'] = 'Prix';
$string['pricecategories'] = 'Réservation : Catégories de prix';
$string['pricecategoriessaved'] = 'Les catégories de prix ont été enregistrées';
$string['pricecategoriessubtitle'] = '<p>Vous pouvez définir ici différentes catégories de prix, par exemple des catégories spéciales pour les étudiants, les employés ou les externes.
<b>Attention :</b> Une fois une catégorie ajoutée, vous ne pouvez plus la supprimer.
Vous pouvez seulement la désactiver ou la renommer.</p>';
$string['pricecategory'] = 'Catégorie de prix';
$string['pricecategorychanged'] = 'Catégorie de prix modifiée';
$string['pricecategorychoosehighest'] = 'La catégorie de prix la plus élevée triée est choisie en premier';
$string['pricecategorychoosehighest_desc'] = 'Si un utilisateur possède plusieurs identifiants de catégorie de prix dans son profil, la catégorie de prix la mieux classée sera sélectionnée en premier. Par défaut, c\'est la catégorie la plus basse qui est sélectionnée.';
$string['pricecurrency'] = 'Devise';
$string['priceformulaadd'] = 'Valeur absolue';
$string['priceformulaadd_help'] = 'Valeur supplémentaire à <strong>ajouter</strong> au résultat.';
$string['priceformulamultiply'] = 'Facteur manuel';
$string['privacy:metadata:bookinganswers:notes'] = 'Notes additionnelles';
$string['problemsofcohortorgroupbooking'] = '<br><p>Tous les utilisateurs n\'ont pas pu être inscrits à la cohorte :</p>
<ul>
<li>{$a->notenrolledusers} utilisateurs ne sont pas inscrits à la formation</li>
<li>{$a->notsubscribedusers} utilisateurs non inscrits pour d\'autres raisons</li>
</ul>';
$string['problemwithdate'] = 'Veuillez vérifier les dates';
$string['profeatures:appearance'] = '<ul>
<li><b>Masquer le logo et le lien Wunderbyte</b></li>
<li><b>Réduire la description</b></li>
<li><b>Réduire les dates d\'affichage</b></li>
<li><b>Désactiver les fenêtres modales</b></li>
<li><b>Options de statut de présence</b></li>
</ul>';
$string['profeatures:automaticcoursecreation'] = '<ul>
<li><b>Champ personnalisé d\'option de réservation à utiliser comme catégorie de cours</b></li>
<li><b>Marquer le cours avec des balises à utiliser comme modèles</b></li>
</ul>';
$string['profeatures:availabilityinfotexts'] = '<ul>
<li><b>Afficher les informations de disponibilité pour les réservations</b></li>
<li><b>Activer le message « Nombre de places disponibles faible »</b></li>
<li><b>Afficher les informations de disponibilité pour la liste d\'attente</b></li>
<li><b>Activer le message « Nombre de places disponibles faible »</b></li>
<li><b>Afficher la place sur la liste d\'attente</b></li>
</ul>';
$string['profeatures:boactions'] = '<ul>
<li><b>Activer les actions après la réservation</b></li>
</ul>';
$string['profeatures:bookingstracker'] = '<ul>
<li><b>Permettez aux utilisateurs de gérer leurs réservations sur l\'ensemble du site à différents niveaux hiérarchiques (date, option de réservation, instance de réservation, cours Moodle, plateforme entière)
et d\'enregistrer la présence des utilisateurs inscrits.</b></li>
<li><b>Suivi de la présence : vous pouvez spécifier les présences des utilisateurs pour chaque date (session).</b></li>
<li><b>Sélectionnez le statut de présence à suivre.</b></li>
</ul>';
$string['profeatures:cachesettings'] = '<ul>
<li><b>Pas de mise en cache des paramètres de réservation</b></li>
<li><b>Pas de mise en cache des réponses de réservation</b></li>
</ul>';
$string['profeatures:cancellationsettings'] = '<ul>
<li><b>Délai de rétractation réglable</b></li>
<li><b>Délai de réflexion avant annulation (secondes)</b></li>
</ul>';
$string['profeatures:duplicationrestoreoption'] = '<ul>
<li><b>Dupliquer le cours Moodle lors de la duplication d\'une option de réservation</b></li>
</ul>';
$string['profeatures:overbooking'] = '<ul>
<li><b>autoriser la surréservation</b></li>
</ul>';
$string['profeatures:priceformula'] = '<ul>
<li><b>Utiliser la formule de calcul automatique des prix</b></li>
<li><b>Appliquer le facteur unitaire</b></li>
<li><b>Arrondir les prix</b></li>
</ul>';
$string['profeatures:progressbars'] = '<ul>
<li><b>Afficher les barres de progression du temps écoulé (pour l\'option de réservation)</b></li>
<li><b>Rendre les barres de progression réductibles</b></li>
</ul>';
$string['profeatures:selflearningcourse'] = '<ul>
<li><b>Activer les options de réservation à durée fixe (par exemple pour les cours en auto-apprentissage)</b></li>
<li><b>Définir un nom personnalisé pour ce type (par exemple, « Cours en auto-apprentissage »)</b></li>
</ul>';
$string['profeatures:shortcodes'] = '<ul>
<li><b>Codes courts pour afficher les options de réservation sur n\'importe quelle page</b></li>
</ul>';
$string['profeatures:subbookings'] = '<ul>
<li><b>Activer les sous-réservations</b></li>
</ul>';
$string['profeatures:tabwhatsnew'] = '<ul>
<li><b>Onglet « Nouveautés » pour les options de réservation récemment rendues visibles (ou récemment publiées)</b></li>
<li><b>Le nombre de jours pendant lesquels une option de réservation est considérée comme « nouvelle » est configurable.</b></li>
<li><b>L\'onglet peut être nommé individuellement.</b></li>
</ul>';
$string['profeatures:teachers'] = '<ul>
<li><b>Ajouter des liens vers les pages des enseignants</b></li>
<li><b>Connexion aux pages des enseignants non nécessaire</b></li>
<li><b>Afficher systématiquement les adresses e-mail des enseignants</b></li>
<li><b>Afficher les adresses e-mail des enseignants aux utilisateurs inscrits</b></li>
<li><b>Les enseignants peuvent envoyer des e-mails à tous les utilisateurs inscrits via leur propre client de messagerie</b></li>
<li><b>Les enseignants de l\'option de réservation sont affectés au rôle approprié</b></li>
</ul>';
$string['profeatures:unenroluserswithoutaccess'] = '<ul>
<li><b>Supprimer les réservations des utilisateurs ayant perdu l\'accès au cours concerné.</b></li>
</ul>';
$string['profilepicture'] = 'Photo de profil';
$string['progressbars'] = 'Barres de progression du temps écoulé <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['progressbars_desc'] = 'Obtenez une représentation visuelle du temps déjà écoulé pour une option de réservation.';
$string['progressbarscollapsible'] = 'Rendre les barres de progression réductibles';
$string['prolicensefeatures'] = '<p>Vous avez besoin d\'une licence Booking PRO pour utiliser cette fonctionnalité.
L\'achat d\'une licence Pro vous permettra d\'utiliser les fonctionnalités suivantes :</p>';
$string['qrenrollink'] = 'Code QR pour le lien d\'inscription';
$string['qrid'] = 'qr_id';
$string['qrusername'] = 'qr_username';
$string['question'] = 'Question';
$string['reallydeleteaction'] = 'Confirmer la suppression?';
$string['reason'] = 'Raison';
$string['recommendedin'] = 'Code court pour afficher la liste des options de réservation recommandées pour un cours donné.
Pour l\'utiliser, ajoutez un champ personnalisé de réservation avec le nom court « recommendedin » et des valeurs séparées par des virgules contenant les noms courts des cours pour lesquels vous souhaitez afficher ces recommandations. Ainsi, si vous souhaitez recommander l\'option 1 aux participants inscrits au cours 1 (course1), vous devez définir le champ personnalisé « recommendedin » de l\'option de réservation sur « course1 ».';
$string['recordsimported'] = 'Options de réservation importées via csv';
$string['recordsimporteddescription'] = '{$a} options de réservation importées via csv';
$string['recreategroup'] = 'Recréer le groupe dans le cours cible et inscrire les utilisateurs dans le groupe';
$string['recurringactioninfo'] = 'Cette action sera exécutée lorsque vous enregistrerez ce formulaire (en cliquant sur le bouton « Enregistrer »). <b>Attention</b>, cette action est irréversible !';
$string['recurringchildoptions'] = 'Enfants de cette option de réservation :';
$string['recurringheader'] = '<i class="fa fa-fw fa-repeat" aria-hidden="true"></i>&nbsp;Options récurrentes';
$string['recurringmultiparenting'] = 'Créer des options récurrentes à plusieurs reprises à partir du même parent';
$string['recurringmultiparenting_desc'] = 'Si une option de réservation est déjà un « parent », devrait-il être possible de créer un autre ensemble d\'options récurrentes ?';
$string['recurringnotpossibleinfo'] = '<div class="alert alert-info" role="alert">
Il est impossible de créer des enfants pour cette option de réservation, car elle est déjà liée à d\'autres options (en tant que mère ou enfant).
</div>';
$string['recurringoptions'] = 'Options de réservation récurrentes';
$string['recurringparentoption'] = 'Parent de cette option :';
$string['recurringsameparentoptions'] = 'Option(s) de réservation avec le même parent :';
$string['recurringsaveinfo'] = '<div class="alert alert-info" role="alert">
<strong>Attention :</strong> Veuillez enregistrer vos modifications avant de créer des options de réservation récurrentes. Sinon, vos modifications ne seront pas appliquées aux nouvelles options.
</div>';
$string['recurringselectapplysiblings'] = 'Appliquer les modifications à toutes les options suivantes avec le même parent ?';
$string['recurringsettingsheader_desc'] = 'Paramètres des options de réservation et des éventuels enfants';
$string['redirectonlogintocourse'] = 'Rediriger les utilisateurs déconnectés vers le cours';
$string['redirectonlogintocourse_desc'] = 'Si cette option est activée, les utilisateurs seront redirigés vers le cours réservé après s\'être connectés au lieu de la page des détails de la réservation.';
$string['relatedcourseidneeded'] = 'Un cours connexe est nécessaire en raison de vos conditions de disponibilité.';
$string['reminder1sent'] = 'Premier rappel envoyé';
$string['reminder2sent'] = 'Deuxième rappel envoyé';
$string['reminderteachersent'] = 'Rappel de l\'enseignant envoyé';
$string['removeafterminutes'] = 'Enlever la réalisation d’activité après N minutes';
$string['removeresponses'] = 'Effacer toutes les réponses';
$string['removeuseronunenrol'] = 'Supprimer l\'utilisateur de la réservation lors de la désinscription du cours associé ?';
$string['reoccurringdatestring'] = 'Jour de la semaine, heure de début et de fin (Jour, HH:MM - HH:MM)';
$string['reoccurringdatestring_help'] = 'Saisissez un texte au format suivant : « Jour, HH:MM - HH:MM », par exemple : « Lundi, 10 h 00 - 11 h 00 » ou « Dim, 9 h 00 - 10 h 00 » ou « bloquer » pour les événements bloqués.';
$string['reoccurringdatestringerror'] = 'Saisissez un texte au format suivant : Jour, HH:MM - HH:MM ou « bloquer » pour les événements bloqués.';
$string['repeatthisbooking'] = 'Répéter cette option';
$string['report2labelcourse'] = 'Cours Moodle';
$string['report2labelinstance'] = 'Instance de réservation';
$string['report2labeloption'] = 'Option de réservation';
$string['report2labeloptiondate'] = 'Date';
$string['report2labelsystem'] = 'Site';
$string['reportfields'] = 'Champs du rapport';
$string['reportremindermessage'] = '{bookingdetails}';
$string['reportremindersubject'] = 'Rappel : votre cours réservé';
$string['requirepreviousoptionstobebooked'] = 'Activer la condition : l\'utilisateur doit réserver l\'option de réservation précédente pour pouvoir réserver l\'option suivante.';
$string['reserveddeleted'] = 'Utilisateur réservé supprimé';
$string['reservedusers'] = 'Réservations à court terme';
$string['reset'] = 'Réinitialiser';
$string['responses'] = 'Réponses';
$string['responsesfields'] = 'Champs dans la liste des participants';
$string['responsesto'] = 'Réponses à {$a}';
$string['responsible'] = 'Responsable';
$string['responsiblecontact'] = 'Contact(s) responsable(s)';
$string['responsiblecontact_help'] = 'Choisissez le ou les contacts responsables de cette option de réservation.
Il ne s\'agit pas forcément de l\'enseignant !';
$string['responsiblecontactcanedit'] = 'Autoriser les contacts responsables à modifier';
$string['responsiblecontactcanedit_desc'] = 'Activez ce paramètre si vous souhaitez autoriser les personnes responsables à modifier leurs options de réservation et à consulter et modifier la liste des utilisateurs réservés.<br>
<b>Important :</b> La personne responsable doit également disposer de la fonctionnalité
<b>mod/booking:addeditownoption</b>.';
$string['responsiblecontactenroltocourse'] = 'Inscrire la personne de contact responsable au cours Moodle connecté';
$string['responsiblecontactenroltocourse_desc'] = 'Veuillez également définir le rôle que la personne de contact responsable doit avoir dans le cours Moodle connecté.';
$string['restresponse'] = 'rest_response';
$string['restrictanswerperiodclosing'] = 'La réservation n\'est possible que jusqu\'à une certaine date';
$string['restrictanswerperiodopening'] = 'La réservation n\'est possible qu\'après une certaine date';
$string['restrictavailabilityforinstance'] = 'Appliquer des restrictions d\'accès des instances de réservation aux options de réservation';
$string['restrictavailabilityforinstance_desc'] = 'Si vous activez cette fonctionnalité et que vous avez des restrictions d\'accès à votre instance de réservation, ces restrictions s\'appliqueront également aux options de réservation, même si elles sont utilisées dans un shortcode comme [courselist].';
$string['resultofcohortorgroupbooking'] = '<p>Voici le résultat de votre réservation de cohorte :</p>
<ul>
<li>{$a->sumcohortmembers} utilisateurs trouvés dans les cohortes sélectionnées</li>
<li>{$a->sumgroupmembers} utilisateurs trouvés dans les groupes sélectionnés</li>
<li><b>{$a->subscribedusers} utilisateurs ont réservé pour cette option</b></li>
</ul>';
$string['returnurl'] = 'URL pour revenir à';
$string['reviewed'] = 'Révisé';
$string['rootcategory'] = 'Racine';
$string['roundpricesafterformula'] = 'Prix ronds (formule de prix)';
$string['roundpricesafterformula_desc'] = 'Si cette option est active, les prix seront arrondis aux nombres entiers (sans décimales) après l\'application de la <strong>formule de prix</strong>.';
$string['rowupdated'] = 'La ligne a été mise à jour.';
$string['rulecustomprofilefield'] = 'Champ de profil utilisateur personnalisé';
$string['ruledatefield'] = 'Champ de date';
$string['ruledays'] = 'Nombre de jours';
$string['ruledaysbefore'] = 'Déclencher n jours par rapport à une certaine date';
$string['ruledaysbefore_desc'] = 'Choisissez un champ de date d\'options de réservation et le nombre de jours par rapport à cette date.';
$string['ruleevent'] = 'Événement';
$string['ruleeventcondition'] = 'Exécuter quand…';
$string['rulemailtemplate'] = 'Modèle de courrier';
$string['rulename'] = 'Nom personnalisé pour la règle';
$string['ruleoperator'] = 'Opérateur';
$string['ruleoptionfield'] = 'Champ d\'options à comparer';
$string['ruleoptionfieldaddress'] = 'Adresse (adresse)';
$string['ruleoptionfieldbookingclosingtime'] = 'Fin de la période de réservation autorisée (bookingclosingtime)';
$string['ruleoptionfieldbookingopeningtime'] = 'Début de la période de réservation autorisée (bookingopeningtime)';
$string['ruleoptionfieldcourseendtime'] = 'Fin (heure de fin du cours)';
$string['ruleoptionfieldcoursestarttime'] = 'Début (heure de début du cours)';
$string['ruleoptionfieldlocation'] = 'Localisation (emplacement)';
$string['ruleoptionfieldoptiondatestarttime'] = 'Début de chaque session (date)';
$string['ruleoptionfieldselflearningcourseenddate'] = 'Date de fin du cours d\'auto-apprentissage';
$string['ruleoptionfieldtext'] = 'Nom de l\'option de réservation (texte)';
$string['rulereactonchangeevent_desc'] = 'Pour l\'événement « Option de réservation mise à jour », vous pouvez spécifier des options ici : <a href="{$a}">Paramètres du plugin de réservation</a>.';
$string['rulereactonevent'] = 'Réagir à l\'événement';
$string['rulereactonevent_desc'] = 'Choisissez un événement qui doit déclencher la règle.<br>
<b>Conseil :</b> Vous pouvez utiliser l\'espace réservé <code>{eventdescription}</code> pour afficher une description de l\'événement.';
$string['rulereactoneventaftercompletion'] = 'Nombre de jours après la fin de l\'option de réservation, où la règle s\'applique toujours';
$string['ruletemplateuserstornosubject'] = 'Annuler';
$string['rulevalue'] = 'Valeur';
$string['sameday'] = 'même jour';
$string['saturday'] = 'Samedi';
$string['save'] = 'Sauvegarder';
$string['saveinstanceastemplate'] = 'Ajouter une instance de réservation au modèle';
$string['savenewtagtemplate'] = 'Sauvegarder';
$string['sccartdescription'] = 'Description dans le panier';
$string['sccartdescription_desc'] = 'Description affichée dans le panier. Les champs de l\'option de réservation peuvent être insérés à l\'aide d\'espaces réservés, par exemple : {lieu}';
$string['scgfbookgroupscohorts'] = 'Réserver des cohortes ou des groupes';
$string['scgfcohortheader'] = 'Abonnement à la cohorte';
$string['scgfgroupheader'] = 'Abonnement de groupe';
$string['scgfselectcohorts'] = 'Cohorte(s) sélectionnée(s)';
$string['scgfselectgroups'] = 'Groupe(s) sélectionné(s)';
$string['sch_allowinstallment'] = 'Autoriser les versements';
$string['sch_allowrebooking'] = 'Autoriser la modification de réservation';
$string['screstoreitemfromreserved'] = 'Mettre automatiquement les articles réservés dans le panier';
$string['screstoreitemfromreserved_desc'] = 'Ce paramètre remettra les articles dans votre panier lorsque le cache a été supprimé';
$string['search'] = 'Rechercher…';
$string['searchdate'] = 'Date';
$string['searchname'] = 'Prénom';
$string['searchsurname'] = 'Nom';
$string['searchtag'] = 'Étiquettes de recherche';
$string['searchwaitinglist'] = 'Sur la liste d\'attente';
$string['select'] = 'Sélection';
$string['selectanoption'] = 'Veuillez sélectionner une option de réservation';
$string['selectatleastoneuser'] = 'Merci de sélectionner au moins 1 utilisateur !';
$string['selectboactiontype'] = 'Sélectionnez l\'action après la réservation';
$string['selectcategory'] = 'Sélectionner la catégorie';
$string['selected'] = 'Sélectionné';
$string['selectelective'] = 'Choisissez une matière au choix pour {$a} crédits';
$string['selectfield'] = 'Liste déroulante';
$string['selectfieldofbookingoption'] = 'Sélectionnez le champ d\'option de réservation';
$string['selectoptionid'] = 'S\'il vous plaît, sélectionnez une option !';
$string['selectoptioninotherbooking'] = 'Option';
$string['selectoptionsfirst'] = 'Veuillez d\'abord sélectionner les options de réservation.';
$string['selectpresencestatus'] = 'Choisir le statut de présence';
$string['selectstudentinbo'] = 'Sélectionner les utilisateurs d\'une option de réservation';
$string['selectteacherinbo'] = 'Sélectionnez les enseignants d\'une option de réservation';
$string['selectteacherswithprofilefieldonly'] = 'Restreindre la sélection des formateurs';
$string['selectteacherswithprofilefieldonlydesc'] = 'Seuls les utilisateurs dont le champ de profil utilisateur contient une valeur spécifique peuvent être sélectionnés comme formateurs.

<span class="text-danger">Remarque : <b>Enregistrez et actualisez la page</b> pour sélectionner le champ de profil et spécifier la valeur.</span>';
$string['selectteacherswithprofilefieldonlyfield'] = '⤷ Sélectionnez le champ de profil utilisateur pour les formateurs';
$string['selectteacherswithprofilefieldonlyvalue'] = '⤷ Valeur';
$string['selectteacherswithprofilefieldonlyvaluedesc'] = 'Saisissez soit une valeur spécifique, soit une liste de valeurs possibles séparées par des virgules';
$string['selectuserfromevent'] = 'Sélectionner l\'utilisateur à partir de l\'événement';
$string['selectusers'] = 'Sélectionner directement les utilisateurs sans connexion à l\'option de réservation';
$string['selectusersfromuserfieldofeventuser'] = 'Sélectionnez le(s) utilisateur(s) à partir du champ de profil de l\'utilisateur à partir de l\'événement';
$string['selectusershoppingcart'] = 'Choisissez l\'utilisateur qui doit payer les versements';
$string['selflearncoursesall'] = 'Afficher tous';
$string['selflearncoursesnotdisplayed'] = 'Ne pas en afficher';
$string['selflearncoursessortingdateinfuture'] = 'Date de tri dans le futur';
$string['selflearningcourse'] = 'Cours d\'auto-apprentissage';
$string['selflearningcourse_help'] = 'Les options de réservation de type « {$a} » ont une durée fixe, mais pas de dates fixes. Le cours débutera dès la réservation.';
$string['selflearningcourseactive'] = 'Activer les options de réservation à durée fixe';
$string['selflearningcoursealert'] = 'Si un cours Moodle est connecté, les utilisateurs seront toujours inscrits immédiatement après la réservation pour les options de réservation de type « {$a} ». Ils resteront inscrits au cours Moodle pendant la durée indiquée.<br><br><b>Remarque :</b> Vous ne pouvez pas indiquer de dates, mais vous pouvez indiquer une date de tri (dans la section « Dates »).';
$string['selflearningcoursecoursestarttime'] = 'Date de tri';
$string['selflearningcoursecoursestarttime_help'] = 'Cette date sera utilisée pour le tri car les options de réservation de type « {$a} » n\'ont pas de date de début fixe.';
$string['selflearningcoursecoursestarttimealert'] = 'Comme vous avez activé la case à cocher « {$a} » sous les paramètres du « Cours Moodle », vous ne pouvez pas ajouter de dates ici, mais uniquement fournir une date de tri.';
$string['selflearningcoursedisplayinshortcode'] = 'Quels cours d\'auto-apprentissage doivent être affichés dans des codes courts avec des limites de temps';
$string['selflearningcoursedisplayinshortcodedesc'] = 'Certains shortcodes spécifiques aux plugins permettent de filtrer les options de réservation futures. Dans ce cas, faut-il afficher tous les cours d\'auto-apprentissage, aucun cours ou seulement les cours d\'auto-apprentissage dont la date de tri est future ?';
$string['selflearningcoursedurationinfo'] = 'Ce cours sera accessible pour {$a}.';
$string['selflearningcoursehideduration'] = 'Masquer la durée des cours d\'auto-apprentissage';
$string['selflearningcourselabel'] = 'Nom des options de réservation à durée fixe';
$string['selflearningcourselabeldesc'] = 'Les options de réservation à durée fixe, mais sans dates, sont généralement appelées « cours en autoformation ». Si vous souhaitez utiliser un autre nom pour ce type d\'options de réservation, vous pouvez le saisir ici.';
$string['selflearningcourseplaceholder'] = 'Vous pouvez accéder immédiatement à votre cours/à l\'offre.';
$string['selflearningcourseplaceholderduration'] = 'Il sera disponible pour vous pour {$a}.';
$string['selflearningcourseplaceholderdurationexpired'] = 'Vous n\'avez plus accès à ce cours.';
$string['semester'] = 'Semestre';
$string['semesterend'] = 'Dernier jour du semestre';
$string['semesterend_help'] = 'Le jour où le semestre se termine';
$string['semesterid'] = 'ID du semestre';
$string['semesteridentifier'] = 'Identificateur';
$string['semesteridentifier_help'] = 'Texte court pour identifier le semestre, par exemple « ws22 ».';
$string['semestername'] = 'Nom';
$string['semestername_help'] = 'Saisissez le nom complet du semestre, par exemple « Semestre d\'hiver 2021/22 »';
$string['semesters'] = 'Semestres';
$string['semesterssaved'] = 'Les semestres ont été sauvegardés';
$string['semesterssubtitle'] = 'Ici, vous pouvez ajouter, modifier ou supprimer des semestres et des vacances.
Après enregistrement, les entrées seront classées par date de début, par ordre décroissant.';
$string['semesterstart'] = 'Premier jour du semestre';
$string['semesterstart_help'] = 'Le jour où le semestre commence.';
$string['send'] = 'Envoyer';
$string['sendcopyofmail'] = 'Envoyer une copie par e-mail';
$string['sendcopyofmailmessageprefix'] = 'Préfixe du message pour la copie';
$string['sendcopyofmailsubjectprefix'] = 'Préfixe du sujet de la copie';
$string['sendcustommsg'] = 'Envoyer un message personnalisé';
$string['sendical'] = 'Joindre un fichier ical (.ics)';
$string['sendicalcreateorcancel'] = 'Le fichier ical doit-il créer ou annuler des événements de calendrier ?';
$string['sendmail'] = 'Envoyer un courriel';
$string['sendmailheading'] = 'Envoyer un e-mail à tous les enseignants des options de réservation sélectionnées';
$string['sendmailinterval'] = 'Envoyer un message à plusieurs utilisateurs avec un délai';
$string['sendmailtoallbookedusers'] = 'Envoyer un courriel à tous les utilisateurs inscrits';
$string['sendmailtobooker'] = 'Page de réservation pour les autres utilisateurs : envoyer un courriel aux utilisateurs qui réservent plutôt qu’aux utilisateurs qui sont réservés';
$string['sendmailtobooker_help'] = 'Activez cette option afin d’envoyer des courriels de confirmation de réservation à l’utilisateur qui inscrit d’autres utilisateurs au lieu des utilisateurs qui ont été ajoutés à une option de réservation.
Ceci n’est pertinent que pour les réservations effectuées sur la page "inscrire d’autres utilisateurs".';
$string['sendmailtoteachers'] = 'Envoyer un courrier au(x) enseignant(s)';
$string['sendmessage'] = 'Envoyer un message';
$string['sendpollurltoteachers'] = 'Envoyer le lien du sondage';
$string['sendreminderemail'] = 'Envoyer un courriel de rappel';
$string['sendreminderemailsuccess'] = 'Le courriel de notification a été envoyé!';
$string['session'] = 'Date';
$string['sessionnotifications'] = 'Notifications par courriel pour chaque session';
$string['sessionremindermailmessage'] = '<p>À noter : Vous êtes inscrit(e) à la session suivante :</p>
<p>{$a->optiontimes}</p>
<p>##############################################</p>
<p>{$a->sessiondescription}</p>
<p>############################################</p>
<p>Statut de la réservation : {$a->status}</p>
<p>Participant : {$a->participant}</p>';
$string['sessionremindermailsubject'] = 'Rappel : Vous avez une séance à venir';
$string['sessionremindershint'] = 'Vous pouvez configurer des rappels pour les dates avec les <a href="{$a}" target="_blank">Règles de réservation</a>';
$string['sessionremindersruleexists'] = 'Il y a au moins une règle de réservation appliquée pour cette date.';
$string['sessions'] = 'Session(s)';
$string['sharedplacenoselect'] = 'Partagé avec <a href="{$a->url}">{$a->text}</a>';
$string['sharedplaces'] = 'Places partagées';
$string['sharedplaces_help'] = 'Les places réservées d\'une autre option de réservation sont ajoutées. Si les deux options ont 10 places disponibles et qu\'une seule est réservée, il ne reste que 9 places pour chacune d\'elles.';
$string['sharedplacespriority'] = 'A priorité';
$string['sharedplacespriority_help'] = 'Si deux options de réservation liées ont des places libres en même temps, celle-ci doit être réservée en premier.';
$string['sharedplacespriorityerror'] = 'L\'option de réservation suivante est déjà prioritaire, donc celle-ci ne peut pas être prioritaire : <br> {$a}';
$string['shoppingcart'] = 'Définissez les options de paiement avec le plugin de panier d\'achat';
$string['shortcode:cmidnotexisting'] = 'L\'ID du module de cours {$a} n\'existe pas pour l\'activité de réservation.';
$string['shortcode:courseidnotexisting'] = 'L\'identifiant du cours Moodle {$a} n\'existe pas.';
$string['shortcodespassword'] = 'Mot de passe';
$string['shortcodespassword_desc'] = 'Si vous saisissez une valeur ici, les codes courts ne peuvent être utilisés qu\'avec le paramètre « mot de passe », sinon un avertissement s\'affichera.
Exemple : [courselist cmid=1 <b>password=top_secret123</b>] ou [courselist cmid=2 <b>password="mot de passe avec espaces"</b>].';
$string['shorttext'] = 'Texte court';
$string['showallbookingoptions'] = 'Toutes les options de réservation';
$string['showallteachers'] = '&gt;&gt; Afficher tous les enseignants';
$string['showboactions'] = 'Activer les actions après la réservation';
$string['showbookingdetailstoall'] = 'Afficher les détails de la réservation à tous';
$string['showbookingdetailstoall_desc'] = 'Les invités et les utilisateurs déconnectés peuvent également voir les détails de la réservation.';
$string['showcertificates'] = 'Afficher les certificats';
$string['showcoursenameandbutton'] = 'Afficher le nom du cours, de brèves informations et un bouton redirigeant vers les options de réservation disponibles';
$string['showcoursesofteacher'] = 'Cours';
$string['showcustomfields'] = 'Champs d\'options de réservation personnalisés';
$string['showcustomfields_desc'] = 'Sélectionnez les champs d\'options de réservation personnalisés à afficher sur la feuille de connexion';
$string['showdates'] = 'Afficher les dates';
$string['showdescription'] = 'Afficher la description';
$string['showdetaildotsnextbookedalert'] = 'Afficher le lien vers les détails des options réservées';
$string['showdetaildotsnextbookedalert_desc'] = 'Si cette option est activée, un petit bouton à trois points s\'affiche à côté de l\'information indiquant qu\'une option de réservation a été réservée. Ce bouton permet d\'accéder à la vue détaillée de cette option.';
$string['showinapi'] = 'Montrer dans l’API ?';
$string['showlistoncoursepage'] = 'Afficher des informations supplémentaires sur la page du cours';
$string['showlistoncoursepage_help'] = 'Si vous activez ce paramètre, le nom du cours, une brève information et un bouton redirigeant vers les options de réservation disponibles seront affichés.';
$string['showmessages'] = 'Afficher les messages';
$string['showmybookingsonly'] = 'Mes options réservées';
$string['showmyfieldofstudyonly'] = 'Mon domaine d\'études';
$string['showoptiondatesextrainfo'] = 'Afficher des informations supplémentaires pour les dates';
$string['showoptiondatesextrainfo_desc'] = 'Afficher les commentaires et informations complémentaires des sessions (dates) dans la liste des options de réservation (les informations complémentaires seront toujours affichées sur la page de détails de l\'option de réservation, quel que soit ce paramètre).
<i>Remarque : les liens vers les salles en ligne (Teams, Zoom…) ne seront affichés que sur la page de détails.</i>';
$string['showprogressbars'] = 'Afficher les barres de progression du temps écoulé';
$string['showrecentupdates'] = 'Afficher les mises à jour récentes';
$string['showsimilaroptions'] = 'Afficher des options similaires';
$string['showsubbookings'] = 'Activer les sous-réservations';
$string['showteachersmailinglist'] = 'Afficher une liste de courriels pour tous les enseignants…';
$string['showviews'] = 'Vues à afficher dans l\'aperçu des options de réservation';
$string['signature'] = 'Signature';
$string['signinadddatemanually'] = 'Ajouter la date manuellement';
$string['signinaddemptyrows'] = 'Ajouter des lignes vides';
$string['signincustfields'] = 'Champs de profil personnalisés';
$string['signincustfields_desc'] = 'Sélectionnez les champs de profils personnalisés à afficher sur la feuille de connexion';
$string['signinextracols'] = 'Colonne supplémentaire';
$string['signinextracols_desc'] = 'Vous pouvez imprimer jusqu\'à trois colonnes supplémentaires sur la feuille de présence. Indiquez le titre de la colonne ou laissez-le vide pour ne pas ajouter de colonne supplémentaire.';
$string['signinextracolsheading'] = 'Colonnes supplémentaires sur la feuille de connexion';
$string['signinextrasessioncols'] = 'Ajouter des colonnes supplémentaires pour les dates';
$string['signinformat'] = 'Enregistrer sous';
$string['signinformatbutton'] = 'Créer à partir d\'un modèle HTML';
$string['signinhidedate'] = 'Masques les dates';
$string['signinlogo'] = 'Logo à afficher sur la feuille de présence';
$string['signinlogofooter'] = 'Logo en pied de page à afficher sur la feuille de connexion';
$string['signinlogoheader'] = 'Logo dans l\'en-tête à afficher sur la feuille de connexion';
$string['signinonesession'] = 'Afficher la ou les dates dans l\'en-tête';
$string['signinsheet_htmltemplate'] = 'Modèle HTML';
$string['signinsheet_legacy'] = 'Feuille de présence classique';
$string['signinsheetaddress'] = 'Addresse :';
$string['signinsheetconfigure'] = 'Configurer la feuille de présences';
$string['signinsheetdate'] = 'Date(s):';
$string['signinsheetdatetofillin'] = 'Date:';
$string['signinsheetdownload'] = 'Télécharger la feuille de présences';
$string['signinsheetfields'] = 'Champs de la feuille de présence (PDF)';
$string['signinsheethtml'] = 'Modèle HTML pour générer des feuilles de signature';
$string['signinsheethtmldescription'] = 'Vous pouvez utiliser les espaces réservés suivants :

<b>Dans [[users]] … [[/users]]:</b><br>
[[fullname]], [[firstname]], [[lastname]], [[email]], [[signature]], [[institution]], [[description]], [[city]], [[country]], [[idnumber]], [[phone1]], [[department]], [[address]], [[places]]<br>
(éventuellement aussi des champs de profil personnalisés, si configurés)

<b>Hors [[users]] :</b><br>
[[location]], [[dayofweektime]], [[teachers]], [[dates]], [[logourl]], [[tablename]]

Utilisez uniquement du code HTML de base pris en charge par TCPDF / PhpWord. Pour insérer des signatures dans un tableau, utilisez la classe CSS <code>"signaturetable"</code>.';
$string['signinsheetlocation'] = 'Emplacement:';
$string['signinsheetmode'] = 'Mode feuille de présences';
$string['signinsheetmode_desc'] = 'Sélectionnez le mode de téléchargement de la feuille de connexion : modèle HTML ou mode Legacy.';
$string['skipbookingrulesmode'] = 'Appliquer les règles de réservation';
$string['skipbookingrulesoptin'] = 'Opt in : Appliquer uniquement les règles suivantes';
$string['skipbookingrulesoptout'] = 'Opt in : Ne pas appliquer les règles suivantes';
$string['skipbookingrulesrules'] = 'Choisir les règles de réservation';
$string['sortbookingoptions'] = 'Veuillez trier vos réservations dans le bon ordre. Vous pourrez accéder aux cours correspondants l\'un après l\'autre. Le premier cours arrive en premier.';
$string['sortorder'] = 'Ordre de try';
$string['sortorder:asc'] = 'A&rarr;Z';
$string['sortorder:desc'] = 'Z&rarr;A';
$string['spaceleft'] = 'espace disponible';
$string['spacesleft'] = 'espaces disponibles';
$string['sqlfiltercheckstring'] = 'Masquer l\'option de réservation lorsque la condition n\'est pas remplie';
$string['startdate'] = 'startdate';
$string['starttime'] = 'starttime';
$string['starttimenotset'] = 'Date de départ non renseignée';
$string['status'] = 'statut';
$string['statusattending'] = 'Présent';
$string['statuschangetext'] = 'Message de changement de statut';
$string['statuschangetextmessage'] = 'Bonjour {$a->participant} !
Votre statut de réservation a changé.
Statut de réservation : {$a->status}
Participant : {$a->participant}
Option de réservation : {$a->title}
Date : {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Accéder à l\'option de réservation : {$a->gotobookingoption}';
$string['statuschangetextsubject'] = 'Le statut de réservation a changé pour {$a->title}';
$string['statuscomplete'] = 'Complet';
$string['statusexcused'] = 'Excusé';
$string['statusfailed'] = 'Échoué';
$string['statusincomplete'] = 'Incomplet';
$string['statusnoshow'] = 'Absent';
$string['statusnotset'] = 'Sans statut.';
$string['statusunknown'] = 'Inconnu';
$string['studentbooked'] = 'Utilisateurs ayant réservé';
$string['studentbookedandwaitinglist'] = 'Utilisateurs ayant réservé et étant sur liste d\'attente';
$string['studentdeleted'] = 'Utilisateurs qui ont déjà été supprimés';
$string['studentnotificationlist'] = 'Utilisateurs sur la liste de notification';
$string['studentwaitinglist'] = 'Utilisateurs sur la liste d\'attente';
$string['subbookingadditemformlink'] = 'Lien vers le formulaire de cette option de réservation';
$string['subbookingadditemformlink_help'] = 'Sélectionnez l\'élément de formulaire que vous souhaitez associer à cette réservation supplémentaire. Celle-ci ne s\'affichera que si l\'utilisateur a préalablement sélectionné la valeur correspondante dans le formulaire.';
$string['subbookingadditemformlinkvalue'] = 'Valeur à sélectionner dans le formulaire';
$string['subbookingadditionalitem'] = 'Réservation d\'éléments supplémentaires';
$string['subbookingadditionalitem_desc'] = 'Cela vous permet d\'ajouter des éléments optionnels à cette option de réservation, par exemple, vous pouvez réserver un meilleur siège spécial, etc. ou le petit-déjeuner dans votre chambre d\'hôtel.';
$string['subbookingadditionalitemdescription'] = 'Décrivez l\'élément réservable en plus :';
$string['subbookingadditionalperson'] = 'Réservation d\'une personne supplémentaire';
$string['subbookingadditionalperson_desc'] = 'Cela vous permet d\'ajouter d\'autres personnes à cette option de réservation, par exemple pour réserver des places pour les membres de votre famille.';
$string['subbookingadditionalpersondescription'] = 'Décrivez l\'option de réservation pour une personne supplémentaire';
$string['subbookingaddpersons'] = 'Ajouter une ou plusieurs personnes supplémentaires';
$string['subbookingbookedpersons'] = 'La ou les personnes suivantes sont ajoutées :';
$string['subbookingduration'] = 'Durée en minutes';
$string['subbookingname'] = 'Nom de la sous-réservation';
$string['subbookings'] = 'Sous-réservations';
$string['subbookings_desc'] = 'Activez les sous-réservations afin de permettre la réservation d\'articles ou de plages horaires supplémentaires (par exemple pour les courts de tennis).';
$string['subbookingtimeslot'] = 'Réservation de créneaux horaires';
$string['subject'] = 'Sujet';
$string['submitandadd'] = 'Ajouter une nouvelle option de réservation';
$string['submitandgoback'] = 'Enregistrer et retour';
$string['submitandstay'] = 'Enregistrer et continuer';
$string['subplugintype_bookingextension_plural'] = 'Prolongations de réservation';
$string['subscribersto'] = 'Professeurs pour « {$a} »';
$string['subscribetocourse'] = 'Inscrivez les utilisateurs au cours';
$string['subscribeuser'] = 'Voulez-vous vraiment inscrire les utilisateurs au cours suivant';
$string['substitutions'] = 'Remplacement(s)';
$string['successfulldeleted'] = 'Catégorie supprimée!';
$string['successfullybooked'] = 'Réservation effectuée';
$string['successfullysorted'] = 'Tri effectué';
$string['sucesfullcompleted'] = 'L\'activité a été réalisée avec succès pour les utilisateurs.';
$string['sucesfullytransfered'] = 'Les utilisateurs ont été transférés avec succès.';
$string['sucessfullybooked'] = 'Réservation effectuée';
$string['sumunits'] = 'Somme des unités';
$string['sunday'] = 'Dimanche';
$string['switchtemplates'] = 'Les utilisateurs peuvent basculer entre les vues';
$string['switchtemplates_help'] = 'Activez ce paramètre pour permettre aux utilisateurs de basculer entre différentes vues. Le paramètre suivant permet de définir les vues commutables.';
$string['switchtemplatesselection'] = 'Vues commutables';
$string['switchtemplatesselection_help'] = 'Sélectionnez les vues entre lesquelles les utilisateurs peuvent basculer.';
$string['system'] = 'Système';
$string['tableheadercourseendtime'] = 'Fin du cours';
$string['tableheadercoursestarttime'] = 'Début du cours';
$string['tableheadermaxanswers'] = 'Places disponibles';
$string['tableheadermaxoverbooking'] = 'Places sur liste d\'attente';
$string['tableheaderminanswers'] = 'Nombre minimum de participants';
$string['tableheaderteacher'] = 'Enseignant(s)';
$string['tableheadertext'] = 'Nom du cours';
$string['tabwhatsnew'] = 'Onglet Réservation : « Quoi de neuf ? »';
$string['tabwhatsnew_desc'] = 'Vous pouvez utiliser cet onglet pour afficher aux utilisateurs toutes les nouvelles réservations rendues visibles OU créées au cours d\'un certain nombre de jours (à compter d\'aujourd\'hui), que vous pouvez définir ici.
<span class="text-danger">N\'oubliez pas d\'ajouter cet onglet dans les paramètres de vos instances de réservation après l\'avoir activé.</span>';
$string['tabwhatsnewdays'] = 'Nombre de jours pour « Quoi de neuf ? »';
$string['tabwhatsnewdays_desc'] = 'Saisissez le nombre de jours écoulés avant qu\'une option de réservation soit considérée comme nouvelle.
Exemple : Si vous choisissez 30, une option de réservation visible ou créée il y a plus de 30 jours ne s\'affichera pas dans l\'onglet « Nouveautés ». 0 signifie que seules les options de réservation créées ou visibles aujourd\'hui seront affichées.';
$string['tagdeleted'] = 'Le modèle de balise a été supprimé !';
$string['tagsuccessfullysaved'] = 'Le modèle de balise a été sauvegardé.';
$string['tagtag'] = 'Balise';
$string['tagtemplates'] = 'Modèles de balises';
$string['tagtext'] = 'Texte';
$string['taken'] = 'Pris';
$string['taskadhocresetoptiondatesforsemester'] = 'Tâche ad hoc : Réinitialiser et générer de nouvelles dates d\'option pour le semestre';
$string['taskcheckanswers'] = 'Réservation : Vérifiez les réponses';
$string['taskcleanbookingdb'] = 'Réservation : Nettoyer la base de données';
$string['taskenrolbookeduserstocourse'] = 'Réservation : Inscrire les utilisateurs réservés au cours';
$string['taskpurgecampaigncaches'] = 'Réservation : Nettoyer les caches pour les campagnes de réservation';
$string['taskrecalculateprices'] = 'Les prix d\'une instance de réservation sont recalculés à l\'aide de la formule de prix';
$string['taskremoveactivitycompletion'] = 'Réservation : Supprimer la fin de l\'activité';
$string['tasksendcompletionmails'] = 'Réservation : Envoyer des courriels de finalisation';
$string['tasksendconfirmationmails'] = 'Réservation : Envoyer des courriels de confirmation';
$string['tasksendmailbyruleadhoc'] = 'Réservation : Envoyer du courrier selon une règle (tâche ad hoc)';
$string['tasksendnotificationmails'] = 'Réservation : Envoyer des courriels de notification';
$string['tasksendremindermails'] = 'Réservation : Envoyer des courriels de rappel';
$string['teacher'] = 'Enseignant';
$string['teacherdescription'] = 'Description';
$string['teachernotfound'] = 'L\'enseignant n\'a pas pu être trouvé ou n\'existe pas.';
$string['teacherpageshiddenbookingids'] = 'Instances de réservation à masquer sur les pages des enseignants';
$string['teacherroleid'] = 'Sélectionnez le rôle suivant pour inscrire les enseignants à un cours nouvellement créé (si donné).';
$string['teachers'] = 'Enseignants';
$string['teachersallowmailtobookedusers'] = 'Autoriser les enseignants à envoyer un e-mail à tous les utilisateurs réservés en utilisant leur propre client de messagerie';
$string['teachersallowmailtobookedusers_desc'] = 'Si vous activez ce paramètre, les enseignants peuvent cliquer sur un bouton pour envoyer un e-mail à tous les utilisateurs inscrits via leur propre client de messagerie. Les adresses e-mail de tous les utilisateurs seront visibles.
<span class="text-danger"><b>Attention :</b> Ceci pourrait poser un problème de confidentialité. N\'activez cette option que si vous êtes certain qu\'elle est conforme à la politique de confidentialité de votre organisation.</span>';
$string['teachersalwaysenablemessaging'] = 'Autoriser les utilisateurs à envoyer des messages à tous les enseignants';
$string['teachersalwaysenablemessaging_desc'] = 'Si vous activez ce paramètre, les utilisateurs peuvent envoyer des messages aux enseignants même s\'ils ne sont inscrits à aucun de leurs cours.';
$string['teachersettings'] = 'Enseignants <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['teachersettings_desc'] = 'Paramètres spécifiques à l\'enseignant.';
$string['teachersforoption'] = 'Enseignants';
$string['teachersforoption_help'] = 'ATTENTION : Lorsque vous ajoutez des enseignants ici, ils seront également ajoutés à chaque date ultérieure dans le rapport d\'enseignement.
Lorsque vous supprimez des enseignants ici, ils seront supprimés de chaque date ultérieure dans le rapport d\'enseignement !';
$string['teachersinstanceconfig'] = 'Modifier le formulaire d\'option de réservation';
$string['teachersinstancereport'] = 'Rapport des enseignants';
$string['teachersinstancereport:subtitle'] = 'Conseil : Le nombre d\'unités d\'un cours (option de réservation) est calculé en fonction de la durée de l\'unité d\'enseignement, que vous pouvez définir dans les paramètres de réservation, et de la chaîne de dates spécifiée (par exemple, « Mar, 16h00-17h30 »).
Pour les événements bloqués ou les options de réservation pour lesquels cette chaîne est manquante, le nombre d\'unités ne peut pas être calculé !';
$string['teacherslinkonteacher'] = 'Ajouter des liens vers les pages des enseignants';
$string['teacherslinkonteacher_desc'] = 'Lorsque des enseignants sont ajoutés aux options de réservation, ce paramètre ajoutera un lien vers une page d\'aperçu pour chaque enseignant.';
$string['teachersnologinrequired'] = 'La connexion aux pages des enseignants n\'est pas nécessaire';
$string['teachersnologinrequired_desc'] = 'Si vous activez ce paramètre, tout le monde peut accéder aux pages des enseignants, qu\'ils soient connectés ou non.';
$string['teachersshowemails'] = 'Toujours montrer les adresses courriel des enseignants à tout le monde';
$string['teachersshowemails_desc'] = 'Si vous activez ce paramètre, chaque utilisateur peut voir l\'adresse courriel de n\'importe quel enseignant, même s\'il n\'est pas connecté. <span class="text-danger"><b>Attention :</b> Ceci pourrait poser un problème de confidentialité. N\'activez cette option que si vous êtes certain qu\'elle est conforme à la politique de confidentialité de votre organisation.</span>';
$string['teachingconfigforinstance'] = 'Modifier le formulaire d\'option de réservation pour';
$string['teachingreportforinstance'] = 'Rapport de synthèse pédagogique pour';
$string['teachingreportfortrainer'] = 'Rapport des unités d\'enseignement réalisées pour le formateur';
$string['teachingreportfortrainer:subtitle'] = 'Conseil : Vous pouvez modifier la durée d\'une unité pédagogique dans les paramètres de l\'extension (par exemple, 45 minutes au lieu de 60 minutes).

<a href="{$a}" target="_blank">
&gt;&gt; Accédez aux paramètres de l\'extension…
</a>';
$string['teamsmeeting'] = 'Réunion d\'équipe';
$string['template'] = 'Modèles';
$string['templatecategoryname'] = 'Nom abrégé de la catégorie de cours dans laquelle se trouvent les cours modèles.';
$string['templatecategoryname_desc'] = 'Les options de réservation peuvent être liées aux cours Moodle. Cette fonctionnalité permet de créer les cours dès le premier enregistrement de l\'option de réservation.';
$string['templatedeleted'] = 'Le modèle a été supprimé !';
$string['templatefile'] = 'Fichier de modèle';
$string['templatesuccessfullysaved'] = 'Le modèle a été enregistré.';
$string['terminated'] = 'Terminé';
$string['text'] = 'Titre';
$string['textarea'] = 'Zone de texte';
$string['textdependingonstatus'] = 'Texte en fonction du statut de la réservation';
$string['textfield'] = 'Saisie de texte sur une seule ligne';
$string['thankyoubooked'] = '<i class="fa fa-3x fa-calendar-check-o text-success" aria-hidden="true"></i><br><br>
Merci ! Votre réservation pour <b>{$a}</b> a bien été effectuée.';
$string['thankyoucheckout'] = '<i class="fa fa-3x fa-shopping-cart text-success" aria-hidden="true"></i><br><br>
Merci ! Vous avez ajouté <b>{$a}</b> à votre panier. Cliquez maintenant sur <b>« Passer à la caisse »</b>
pour continuer.';
$string['thankyouerror'] = '<i class="fa fa-3x fa-frown-o text-danger" aria-hidden="true"></i><br>
Malheureusement, une erreur s\'est produite lors de la réservation de <b>{$a}</b>.';
$string['thankyouwaitinglist'] = '<i class="fa fa-3x fa-clock-o text-primary" aria-hidden="true"></i><br><br>
Vous avez été ajouté à la liste d\'attente pour <b>{$a}</b>. Vous serez automatiquement placé en haut de la liste, en cas d\'abandon.';
$string['thisinstance'] = 'Cette instance de réservation';
$string['thursday'] = 'Jeudi';
$string['timecreated'] = 'Heure créée';
$string['timefilter:bookingtime'] = 'Heure de réservation';
$string['timefilter:coursetime'] = 'Durée du cours';
$string['timeintervalls'] = 'Intervalles de temps';
$string['timeintervalls_desc'] = 'Si cette option est sélectionnée, les champs de sélection de temps utiliseront des intervalles de 5 minutes au lieu d\'intervalles de 1 minute.';
$string['timemadevisible'] = 'Rendu visible à';
$string['timemodified'] = 'Heure modifiée';
$string['timerestrict'] = 'Limiter les réponses à cette période : cette option est obsolète et sera supprimée. Veuillez utiliser les paramètres « Restreindre l\'accès » pour limiter l\'accès à l\'activité de réservation.Restreindre les réponses à cette période de temps';
$string['title'] = 'Titre';
$string['titleprefix'] = 'Préfixe';
$string['titleprefix_help'] = 'Ajoutez un préfixe qui sera affiché avant le titre de l\'option, par exemple « BB42 ».';
$string['to'] = 'À';
$string['toomanytoshow'] = 'Trop d\'enregistrements trouvés…';
$string['toomuchusersbooked'] = 'Le nombre maximal d’utilisateurs que vous pouvez inscrire est de {$a}';
$string['topic'] = 'Sujet';
$string['transefusers'] = 'Transférer des utilisateurs';
$string['transfer'] = 'Transférer';
$string['transferheading'] = 'Transférer les utilisateurs sélectionnés vers l\'option de réservation sélectionnée';
$string['transferhelp'] = 'Transférer les utilisateurs qui n\'ont pas terminé l\'activité de l\'option sélectionnée vers {$a}.';
$string['transferoptionsuccess'] = 'L\'option de réservation et les utilisateurs ont été transférés avec succès.';
$string['transferproblem'] = 'Les éléments suivants n\'ont pas pu être transférés en raison d\'une limitation des options de réservation ou d\'une limitation de l\'utilisateur : {$a}';
$string['transfersuccess'] = 'Les utilisateurs ont été transférés avec succès vers la nouvelle option de réservation';
$string['tuesday'] = 'Mardi';
$string['turnoffmodals'] = 'Désactiver les modaux';
$string['turnoffmodals_desc'] = 'Certaines étapes du processus de réservation ouvriront des fenêtres modales. Ce paramètre affichera les informations directement ; aucune fenêtre modale ne s\'ouvrira.
<b>Remarque :</b> Si vous utilisez la vue « Cartes de réservation », les fenêtres modales continueront d\'être utilisées. Vous ne pouvez les désactiver que pour la vue Liste.</b>';
$string['turnoffwaitinglist'] = 'Désactiver la liste d\'attente globalement';
$string['turnoffwaitinglist_desc'] = 'Activez ce paramètre si vous ne souhaitez pas utiliser la fonctionnalité de liste d\'attente sur ce site (par exemple, si vous souhaitez uniquement utiliser la liste de notifications).';
$string['turnoffwaitinglistaftercoursestart'] = 'Désactivez le passage automatique depuis la liste d\'attente après le début d\'une option de réservation.';
$string['turnoffwunderbytelogo'] = 'Ne pas afficher le logo et le lien Wunderbyte';
$string['turnoffwunderbytelogo_desc'] = 'Si vous activez ce paramètre, le logo Wunderbyte et le lien vers le site Web de Wunderbyte ne seront pas affichés.';
$string['turnthisoninsettings'] = 'Activation dans les paramètres de configuration nécessaire';
$string['turnthisoninsettings_help'] = 'Pas encore activé. <a href="{$a}" target="_blank">Cliquez ici pour activer cette fonctionnalité dans les paramètres globaux</a>.';
$string['unconfirm'] = 'Confirmation de suppression';
$string['unconfirmbooking'] = 'Supprimer la confirmation de cette réservation';
$string['unconfirmbookinglong'] = 'Voulez-vous vraiment supprimer la confirmation de cette réservation ?';
$string['undocancelreason'] = 'Souhaitez-vous vraiment annuler l\'annulation de cette option de réservation ?';
$string['undocancelthisbookingoption'] = 'Annuler l\'annulation de cette option de réservation';
$string['unenrolfromgroupofcurrentcourse'] = 'Se désinscrire d\'un groupe spécifique lorsque l\'utilisateur est désinscrit de l\'option de réservation correspondante ?';
$string['unenroluserswithoutaccess'] = 'Supprimer les réponses de réservation des utilisateurs sans accès';
$string['unenroluserswithoutaccess_desc'] = 'Désinscrivez automatiquement les utilisateurs qui n\'ont plus accès à un cours Moodle ou à une activité de réservation.
<div class="text-danger">Attention : Ceci peut compliquer le suivi. Une fois cette case cochée, le système effectuera une vérification ponctuelle
à l\'échelle du système pour vérifier si des réservations doivent être supprimées. La suppression des réservations s\'effectue toujours de manière asynchrone, avec un délai d\'environ 15 minutes. Ainsi, si vous désinscrivez un utilisateur par erreur, vous disposez de quelques minutes pour décocher cette case et ainsi empêcher la suppression automatique.</div>';
$string['unenroluserswithoutaccessareyousure'] = 'Voulez-vous vraiment activer « Supprimer les réponses de réservation des utilisateurs sans accès » ?';
$string['unenroluserswithoutaccessareyousure_desc'] = 'Ce n\'est qu\'après avoir coché cette case et enregistré que vous pourrez activer le paramètre.
Vous devez cocher les deux cases pour que cela prenne effet.';
$string['unenroluserswithoutaccessheader_desc'] = 'Supprimez automatiquement les réponses aux réservations des utilisateurs qui n\'ont plus accès à un cours Moodle ou à une activité de réservation. (Attention : cela peut entraîner des comportements inattendus. N\'activez cette option que si vous en avez vraiment besoin.)';
$string['units'] = 'Unités';
$string['unitscourses'] = 'Cours / Unités';
$string['unitsunknown'] = 'Nombre d\'unités inconnu';
$string['unlimitedcredits'] = 'Ne pas utiliser les crédits';
$string['unlimitedplaces'] = 'Illimité';
$string['unlinkallchildren'] = 'Supprimer le lien de tous les enfants';
$string['unlinkchild'] = 'Supprimer le lien vers le parent';
$string['unsubscribe:alreadyunsubscribed'] = 'Vous êtes déjà désabonné.';
$string['unsubscribe:errorotheruser'] = 'Vous n\'êtes pas autorisé à désabonner un utilisateur différent de vous-même !';
$string['unsubscribe:successnotificationlist'] = 'Vous avez été désabonné avec succès des notifications par e-mail pour « {$a} ».';
$string['until'] = 'Jusqu\'à';
$string['updatebooking'] = 'Editer cette option de réservation';
$string['updatedrecords'] = '{$a} enregistrement(s) mis à jour.';
$string['uploadheaderimages'] = 'Images d\'en-tête pour les options de réservation';
$string['usecompetencies'] = 'Utiliser les compétences';
$string['usecompetencies_desc'] = 'Les options de réservation peuvent être étiquetées avec des compétences et triées en conséquence';
$string['usecoursecategorytemplates'] = 'Utiliser des modèles pour les cours Moodle nouvellement créés';
$string['usedinbooking'] = 'Vous ne pouvez pas supprimer cette catégorie, parce que vous utilisez la réservation !';
$string['usedinbookinginstances'] = 'Le modèle est utilisé dans les cas de réservation suivants';
$string['uselegacymailtemplates'] = 'Continuer à utiliser les anciens modèles de courrier';
$string['uselegacymailtemplates_desc'] = 'Cette fonction est obsolète et sera supprimée prochainement. Nous vous encourageons vivement à migrer vos modèles et paramètres vers <a href="{$a}">Règles de réservation</a>.
<span class="text-danger"><b>Attention :</b> Si vous décochez cette case, vos modèles d\'e-mails dans vos instances de réservation ne seront plus affichés ni utilisés.</span>';
$string['usenotificationlist'] = 'Utiliser la liste de notifications';
$string['useonlyonefield'] = 'Aucun champ supplémentaire';
$string['useprice'] = 'Réservez uniquement avec le prix';
$string['useprotoenablemorerules'] = 'Vous avez besoin de Booking PRO pour ajouter des règles.
<a href="https://wunderbyte.at/kontakt" target="_blank">Contactez Wunderbyte</a> si vous souhaitez acheter une licence pro.';
$string['useraffectedbyevent'] = 'Utilisateur affecté par l\'événement';
$string['usercalendarentry'] = 'Vous êtes réservé pour <a href="{$a}">cette session</a>.';
$string['usercalendarurl'] = 'URL du calendrier utilisateur';
$string['userdownload'] = 'Télécharger les utilisateurs';
$string['usergavereason'] = '{$a} a donné la raison suivante pour l\'annulation :';
$string['userid'] = 'ID utilisateur';
$string['userinfofieldoff'] = 'Aucun champ de profil utilisateur sélectionné';
$string['userinfosasstring'] = '{$a->firstname} {$a->lastname} (ID:{$a->id})';
$string['userleave'] = 'L’utilisation quitte la réservation';
$string['userleavemessage'] = 'Bonjour {$a->participant},
Vous avez été désabonné de {$a->title}.';
$string['userleavesubject'] = 'Vous vous êtes désabonné avec succès de {$a->title}';
$string['usermodified'] = 'Modifié par';
$string['username'] = 'nom d\'utilisateur';
$string['usernameofbookingmanager'] = 'Nom d’utilisateur du gestionnaire de réservation';
$string['usernameofbookingmanager_help'] = 'Nom d’utilisateur de l’utilisateur qui sera affiché dans le champ "De" des notifications de confirmation.
Si l’option "Envoyer le courriel de confirmation au gestionnaire de réservation" est activée, c’est l’utilisateur qui reçoit une copie des notifications de confirmation.';
$string['userparameter_desc'] = 'Utiliser le paramètre utilisateur.';
$string['userparametervalue'] = 'Paramètre utilisateur';
$string['userprofilefield'] = 'Champ de profil';
$string['userprofilefieldoff'] = 'Ne pas afficher';
$string['userrank'] = 'Rang';
$string['usersmatching'] = 'Utilisateurs correspondants';
$string['usersonlist'] = 'Utilisateur sur la liste';
$string['userssuccessfullenrolled'] = 'Tous les utilisateurs ont été inscrits !';
$string['userssuccessfullybooked'] = 'Tous les utilisateurs ont été réservés sur l\'autre option de réservation.';
$string['userssuccessfullygetnewpresencestatus'] = 'Tous les utilisateurs ont un nouveau statut de présence.';
$string['userssucesfullygetnewpresencestatus'] = 'Le statut de présence des utilisateurs sélectionnés a été mis à jour avec succès';
$string['userstonotify'] = 'Liste de notifications';
$string['userwhotriggeredevent'] = 'User who triggered the event';
$string['viewallresponses'] = 'Gérer {$a} réponses';
$string['viewconfirmationbooked'] = 'Votre réservation a été enregistrée :
{bookingdetails}
<p>############################################</p>
Statut de la réservation : {status} <br>
Participant : {firstname} {lastname} <br>
Retour aux options de réservation : {bookinglink}';
$string['viewconfirmationwaiting'] = 'Vous êtes désormais sur la liste d\'attente de :
{bookingdetails}
<p>############################################</p>
Statut de la réservation : {status} <br>
Participant : {firstname} {lastname} <br>
Retour aux options de réservation : {bookinglink}';
$string['viewparam'] = 'Type de vue';
$string['viewparam:cards'] = 'Vue des cartes';
$string['viewparam:list'] = 'Vue de liste';
$string['viewparam:listimgleft'] = 'Vue de liste avec image à gauche';
$string['viewparam:listimglefthalf'] = 'Vue de liste avec l\'image à gauche sur la moitié de la largeur';
$string['viewparam:listimgright'] = 'Vue de liste avec l\'image à droite';
$string['visibilitystatus'] = 'Statut de visibilité';
$string['visibleoptions'] = 'Options de réservation visibles';
$string['vuebookingstatsback'] = 'Précédent';
$string['vuebookingstatsbooked'] = 'Réservé';
$string['vuebookingstatsbookingoptions'] = 'Options de réservation';
$string['vuebookingstatscapability'] = 'Capacité';
$string['vuebookingstatsno'] = 'Non';
$string['vuebookingstatsreserved'] = 'Réservé';
$string['vuebookingstatsrestore'] = 'Restaurer';
$string['vuebookingstatsrestoreconfirmation'] = 'Vous voulez vraiment réinitialiser cette configuration ?';
$string['vuebookingstatssave'] = 'Sauvegarder';
$string['vuebookingstatsselectall'] = 'Sélectionner tout';
$string['vuebookingstatswaiting'] = 'Liste d\'attente';
$string['vuebookingstatsyes'] = 'Oui';
$string['vuecapabilityoptionscapconfig'] = 'Configuration des capacités';
$string['vuecapabilityoptionsnecessary'] = 'nécessaire';
$string['vuecapabilityunsavedchanges'] = 'Il y a des modifications non enregistrées';
$string['vuecapabilityunsavedcontinue'] = 'Vous voulez vraiment réinitialiser cette configuration ?';
$string['vueconfirmmodal'] = 'Voulez-vous vraiment revenir ?';
$string['vuedashboardassignrole'] = 'Attribuer des rôles';
$string['vuedashboardchecked'] = 'Coché par défaut';
$string['vuedashboardcoursecount'] = 'Nombre de cours';
$string['vuedashboardcreateoe'] = 'Créer un nouvel OE';
$string['vuedashboardgotocategory'] = 'Aller à la catégorie';
$string['vuedashboardname'] = 'Nom';
$string['vuedashboardnewcourse'] = 'Créer un nouveau cours';
$string['vuedashboardpath'] = 'Chemin';
$string['vueheadingmodal'] = 'Confirmation';
$string['vuenotfoundroutenotfound'] = 'Route non trouvée';
$string['vuenotfoundtryagain'] = 'Merci de réessayer plus tard';
$string['vuenotificationtextactionfail'] = 'Une erreur s\'est produite lors de l\'enregistrement. Les modifications n\'ont pas été appliquées.';
$string['vuenotificationtextactionsuccess'] = 'La configuration a été {$a} avec succès.';
$string['vuenotificationtextunsave'] = 'Aucune modification non enregistrée n\'a été détectée.';
$string['vuenotificationtitleactionfail'] = 'La configuration n\'était pas {$a}';
$string['vuenotificationtitleactionsuccess'] = 'La configuration était {$a}';
$string['vuenotificationtitleunsave'] = 'Aucune modification non enregistrée détectée';
$string['waitforconfirmation'] = 'Réservez toujours seulement après confirmation';
$string['waitforconfirmationonwaitinglist'] = 'Confirmation uniquement pour la liste d\'attente';
$string['waitinglist'] = 'Liste d’attente';
$string['waitinglistconfirmed'] = 'Liste d\'attente confirmée';
$string['waitinglistdeleted'] = 'Supprimé de la liste d\'attente';
$string['waitinglistenoughmessage'] = 'Encore assez de places sur liste d\'attente.';
$string['waitinglistfullmessage'] = 'Liste d\'attente pleine.';
$string['waitinglistheader'] = 'Liste d\'attente';
$string['waitinglistheader_desc'] = 'Ici, vous pouvez définir le comportement de la liste d\'attente de réservation.';
$string['waitinglistinfotexts'] = 'Affichage de la disponibilité des places pour la liste d\'attente';
$string['waitinglistinfotextsinfo'] = 'Sélectionnez la manière dont la disponibilité des places sur la liste d\'attente doit être affichée aux utilisateurs.';
$string['waitinglistlowmessage'] = 'Il ne reste que quelques places sur la liste d\'attente !';
$string['waitinglistlowpercentage'] = 'Pourcentage de messages de liste d\'attente basse';
$string['waitinglistlowpercentagedesc'] = 'Si les places disponibles sur la liste d\'attente atteignent ou descendent en dessous de ce pourcentage, un message indiquant que la liste d\'attente est basse s\'affichera.';
$string['waitinglistplacesplacesleft'] = '{$a} places restantes sur la liste d\'attente';
$string['waitinglistshowplaceonwaitinglist'] = 'Liste d\'attente classée';
$string['waitinglistshowplaceonwaitinglistinfo'] = 'Liste d\'attente : indique la position exacte de l\'utilisateur sur la liste d\'attente. Il est possible de modifier manuellement l\'ordre des utilisateurs sur la liste d\'attente.';
$string['waitinglisttaken'] = 'Sur la liste d’attente';
$string['waitinglistusers'] = 'Utilisateurs sur la liste d’attente';
$string['waitingplacesavailable'] = 'Places disponibles sur la liste d’attente';
$string['waitingtext'] = 'Confirmation de la liste d’attente';
$string['waitingtextmessage'] = 'Vous êtes maintenant sur la liste d\'attente de :
{$a->bookingdetails}
<p>##############################################</p>
Statut de la réservation : {$a->status}
Participant : {$a->participant}
Pour consulter tous vos cours réservés, cliquez sur le lien suivant : {$a->bookinglink}
Le cours associé est disponible ici : {$a->courselink}';
$string['waitingtextsubject'] = 'Le statut de réservation pour {$a->title} a changé';
$string['waitingtextsubjectbookingmanager'] = 'Le statut de réservation pour {$a->title} a changé';
$string['waitspaceavailable'] = 'Places disponibles sur la liste d’attente';
$string['warningcustomfieldsforbiddenshortname'] = 'Vous ne pouvez pas utiliser les noms courts suivants pour les champs personnalisés : <b>{$a}</b>.
Veuillez choisir un autre nom court.';
$string['warningonlyteachersofselectedinstances'] = 'Remarque : Cette page n\'affiche actuellement que les enseignants qui sont enseignants dans l\'une des instances de réservation sélectionnées dans le paramètre global « allteacherspagebookinginstances » (<a href="{$a}" target="_blank">allteacherspagebookinginstances">.';
$string['wednesday'] = 'Mercredi';
$string['week'] = 'Semaine';
$string['whatsnew'] = 'Quoi de neuf ?';
$string['whichview'] = 'Vue par défaut pour les options de réservation';
$string['whichviewerror'] = 'Vous devez inclure la vue par défaut dans : Vues à afficher dans l\'aperçu des options de réservation';
$string['withselected'] = 'Avec les utilisateurs sélectionnés:';
$string['wrongdataallfields'] = 'Merci de remplir tous les champs !';
$string['wronglabels'] = 'Le fichier CSV importé ne contient pas les bonnes étiquettes. La colonne {$a} ne peut pas être importée.';
$string['xusersarebooked'] = '{$a} utilisateurs sont réservés';
$string['yes'] = 'Oui';
$string['youareediting'] = 'Vous modifiez "<b>{$a}</b>".';
$string['youareusingconfig'] = 'Vous utilisez la configuration de formulaire suivante : {$a}';
$string['yourplaceonwaitinglist'] = 'Vous êtes à la place {$a} sur la liste d\'attente';
$string['yourselection'] = 'Votre sélection';
$string['zoommeeting'] = 'Réunion Zoom';
