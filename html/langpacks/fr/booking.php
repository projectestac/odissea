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
 * Strings for component 'booking', language 'fr', version '4.5'.
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
$string['actionbuttonconfirm'] = 'Confirmer';
$string['actionbuttondelete'] = 'Supprimer';
$string['actionbuttondeny'] = 'Refuser';
$string['actionoperator'] = 'Action';
$string['actionoperator:adddate'] = 'Ajouter une date';
$string['actionoperator:set'] = 'Remplacer';
$string['actionoperator:subtract'] = 'Soustraire';
$string['actions'] = 'Actions';
$string['actionsonbookinganswer'] = 'Actions';
$string['activatemails'] = 'Activer les courriels (confirmations, notifications et plus)';
$string['active'] = 'Actif';
$string['activebookingoptions'] = 'Options de réservations actives';
$string['activitycompletionsuccess'] = 'Tous les utilisateurs sélectionnés ont été marqués pour la réalisation des activités';
$string['activitycompletiontext'] = 'Message à envoyer à l’utilisateur lorsque l’option de réservation est terminée';
$string['activitycompletiontextmessage'] = 'Vous avez complété l’option de réservation suivante :
{$a->bookingdetails}
Aller au cours : {$a->courselink}
Voir toutes les options de réservation : {$a->bookinglink}';
$string['activitycompletiontextsubject'] = 'Option de réservation terminée';
$string['addastemplate'] = 'Ajouter comme modèle';
$string['addbookingcampaign'] = 'Ajouter une campagne';
$string['addbookingrule'] = 'Ajouter une règle';
$string['addcategory'] = 'Modifier les catégories';
$string['addcomment'] = 'Ajouter un commentaire…';
$string['addcustomfieldorcomment'] = 'Ajouter un commentaire ou un champ personnalisé';
$string['adddatebutton'] = 'Ajouter une date';
$string['adddeputies'] = 'Mettre à jour les suppléants';
$string['addedrecords'] = '{$a} enregistrement(s) ajouté(s).';
$string['addholiday'] = 'Ajouter des congés';
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
$string['addtogroup'] = 'Inscrire automatiquement les utilisateurs dans le groupe du cours lié';
$string['addtogroup_help'] = 'Inscrire automatiquement les utilisateurs dans le groupe - le groupe sera créé automatiquement avec le nom « Nom de la réservation - Nom de l’option »';
$string['addtogroupofcurrentcourse'] = 'Inscrire automatiquement les utilisateurs aux groupes du cours actuel';
$string['addtogroupofcurrentcourse_help'] = 'Choisir les groupes du cours actuel auxquels les utilisateurs devraient être inscrits lorsqu’ils ont au moins une réservation dans cette instance. Les groupes doivent être créés auparavant dans ce cours.</br>
Il est également possible d’inscrire les utilisateurs dans un groupe spécifique pour chaque réservation faite. Ces groupes seront nommés selon la réservation.';
$string['addtogroupofcurrentcoursebookingoption'] = 'Inscrire dans des groupes spécifiques à chaque option réservée';
$string['addusertogroup'] = 'Ajouter un utilisateur au groupe :';
$string['adminparameter_desc'] = 'Utiliser le paramètre défini dans les options d’administration.';
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
$string['allcohortsmustbefound'] = 'L’utilisateur doit être membre de toutes les cohortes';
$string['allcomments'] = 'Tout le monde peut commenter';
$string['allcompetenciesmustbefound'] = 'Les utilisateurs doivent avoir toutes ces compétences';
$string['allcoursesmustbefound'] = 'L’utilisateur doit être inscrit à tous les cours';
$string['allmailssend'] = 'Tous les courriels aux utilisateurs ont été envoyés avec succès !';
$string['allmoodleusers'] = 'Tous les utilisateurs du site';
$string['alloptionsinreport'] = 'Un seul rapport pour une activité de réservation <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['alloptionsinreportdesc'] = 'Le rapport de la réservation inclura toutes les réservations des options de cette instance.';
$string['allowbookingafterstart'] = 'Permettre les réservations après le début du cours';
$string['allowoverbooking'] = 'Permettre la surréservation';
$string['allowoverbookingheader'] = 'Options de surréservations <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['allowoverbookingheader_desc'] = 'Permettre aux administrateurs et aux utilisateurs autorisés de réserver au-delà de la capacité. (Attention: Peut mener à un comportement inattendu. Activer cette option uniquement si requis.';
$string['allowtobookagainafter'] = 'Permettre de réserver après :';
$string['allowupdate'] = 'Autoriser les réservations à être mises à jour';
$string['allowupdatedays'] = 'Jours avant la date de référence';
$string['allratings'] = 'Tout le monde peut évaluer';
$string['allteachers'] = 'Tous les enseignants';
$string['allteacherspagebookinginstances'] = 'Sur la page « Tous les enseignants », afficher uniquement les enseignants qui enseignent dans l’une des instances de réservations sélectionnées. (Choisir « Aucune sélection » pour afficher TOUS les enseignants.';
$string['allusercertificates'] = 'Certificateurs de l’utilisateur';
$string['allusersbooked'] = 'Tous les {$a} utilisateurs sélectionnés ont été affectés avec succès à cette option de réservation.';
$string['alreadybooked'] = 'Déjà réservé';
$string['alreadyonlist'] = 'Vous serez notifié';
$string['alreadypassed'] = 'Déjà passé';
$string['always'] = 'Toujours';
$string['alwaysbookanyone'] = 'Toujours réserver pour tous';
$string['alwaysbookanyone_desc'] = 'Cela activera simplement l’option permettant de réserver automatiquement des personnes non inscrites au cours en question. Cette action ne modifie pas les permissions : les utilisateurs ne pourront réserver que ceux qui en ont les droits.';
$string['alwaysshowlinkondetailspage'] = 'Toujours afficher le lien sur la page de détails';
$string['alwaysshowlinkondetailspage_desc'] = 'La page de détails peut être atteinte en cliquant sur le lien dans le titre ou l’image d’en-tête. Un bouton additionnel sera ajouté.';
$string['andotherfield'] = 'ET champ additionnel';
$string['annotation'] = 'Annotation interne';
$string['answer'] = 'Réponse';
$string['answered'] = 'Répondu';
$string['answerscount'] = 'Nombre de réservations';
$string['appearancesettings'] = 'Apparence <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['appearancesettings_desc'] = 'Configurer l’apparence du module de réservation.';
$string['apply'] = 'Appliquer';
$string['applybookingrules'] = 'Appliquer les règles de réservations';
$string['applyunitfactor'] = 'Appliquer le facteur d’unité';
$string['applyunitfactor_desc'] = 'Si ce paramètre est actif, la durée de l’unité d’enseignement (par exemple 45 min) définie ci-dessus sera utilisée pour calculer le nombre d’unités d’enseignement. Ce nombre sera utilisé comme facteur pour la formule de prix.
 Exemple : une option de réservation a une série de dates comme « Lun, 15:00 - 16:30 ». Il dure donc 2 unités pédagogiques (45 min chacune).
 Ainsi, un facteur unitaire de 2 sera appliqué à la formule de prix.';
$string['applyuserwhobookedcheckbox'] = 'Oui, je réserve pour moi-même.';
$string['approvalbytrainer'] = 'Approbation par l’enseignant';
$string['approvalsettings'] = 'Flux d’approbation';
$string['approvalsettings_desc'] = 'Le module réservations prend en charge différents processus de confirmation lorsque les utilisateurs doivent faire confirmer leurs réservations. Dans le processus standard, les formateurs peuvent confirmer les demandes des personnes sur liste d’attente. D’autres processus peuvent être ajoutés via des sous-modules Réservation.';
$string['approvalworkflows'] = 'Flux d’approbation';
$string['approvalworkflows_desc'] = 'Sélectionnez un ou plusieurs flux d’approbation. Selon votre sélection, des comportements spécifiques peuvent être configurés dans les options de réservation.';
$string['areyousure:book'] = 'Cliquer pour confirmer l’inscription';
$string['areyousure:bookconfirmation'] = 'Cliquer à nouveau pour confirmer votre inscription sur la liste d\'attente.';
$string['areyousure:cancel'] = 'Cliquer pour confirmer l’annulation';
$string['asglobaltemplate'] = 'Utiliser comme modèle global';
$string['askforconfirmationheader'] = '<i class="fa fa-fw fa-lock" aria-hidden="true"></i>&nbsp;Demander une confirmation';
$string['assesstimefinish'] = 'Fin de la période d’évaluation';
$string['assesstimestart'] = 'Début de la période d’évaluation';
$string['assigncompetency'] = 'Attribuer des compétences';
$string['assignteachers'] = 'Assigner des enseignants :';
$string['associatedcourse'] = 'Cours associé';
$string['astemplate'] = 'Utiliser comme modèle dans ce cours';
$string['attachedfiles'] = 'Fichiers joints';
$string['attachicalfile'] = 'Joindre un fichier iCal';
$string['attachicalfile_desc'] = 'Joindre les fichiers iCal contenant les dates des réservations aux courriels.';
$string['attachment'] = 'Pièces jointes';
$string['autcrheader'] = 'Création automatique d’options de réservation';
$string['autcrwhatitis'] = 'Si cette option est activée, elle crée automatiquement une nouvelle option de réservation et lui attribue un utilisateur en tant que gestionnaire de réservation/professeur. Les utilisateurs sont sélectionnés en fonction d’une valeur de champ de profil utilisateur personnalisé.';
$string['autoenrol'] = 'Inscrire automatiquement les utilisateurs aux cours reliés';
$string['autoenrol_help'] = 'Si l’option est sélectionnée, les utilisateurs seront inscrits dans le cours associé dès qu’ils font la réservation et désinscrits de celui-ci dès que la réservation est annulée.';
$string['automaticbookingoptioncompletion'] = 'Réservation complétée lorsque le cours est complété';
$string['automaticbookingoptioncompletion_desc'] = 'Si activé, la réservation est marquée comme complétée lorsque le cours relié est complété.';
$string['automaticcoursecreation'] = 'Création automatique de cours Moodle <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['availability'] = 'Disponibilité';
$string['availabilityconditions'] = 'Conditions de disponibilité';
$string['availabilityconditionsheader'] = '<i class="fa fa-fw fa-key" aria-hidden="true"></i>&nbsp;Conditions de disponibilité';
$string['availabilityinfotextsheading'] = 'Textes d’informations de disponibilité pour les places de réservations et les listes d’attente <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
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
$string['billboardtext'] = 'Texte à afficher au lieu des textes d’alertes bloquantes';
$string['blockabove'] = 'Bloquer au-delà';
$string['blockalways'] = 'Bloquer peu importe le nombre de places';
$string['blockbelow'] = 'Bloquer sous';
$string['blockinglabel'] = 'Message lorsque bloqué';
$string['blockinglabel_help'] = 'Saisissez le message à afficher lorsqu’une réservation est bloquée.
Si vous souhaitez qu’il soit traduit, vous pouvez utiliser
<a href="https://docs.moodle.org/403/en/Multi-language_content_filter" target="_blank">les filtres de langage</a>.';
$string['blockoperator'] = 'Opérateur';
$string['blockoperator_help'] = '<b>Bloquer au-dessus</b> ... Les réservations en ligne seront bloquées une fois le pourcentage indiqué atteint.
Seuls les caissiers et les administrateurs pourront ensuite effectuer des réservations.<br>

<b>Bloquer au-dessous</b> ... Les réservations en ligne seront bloquées jusqu\'à ce que le pourcentage indiqué soit atteint.
Avant cela, seuls les caissiers et les administrateurs pourront effectuer des réservations.';
$string['boactioncancelbookingdesc'] = 'Utilisé pour les options qui peuvent être achetées plusieurs fois';
$string['boactioncancelbookingvalue'] = 'Activer l’annulation immédiate';
$string['boactionname'] = 'Nom de l’action';
$string['boactions'] = 'Actions après la réservation <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span> <span class="badge bg-danger text-light"><i class="fa fa-flask" aria-hidden="true"></i> Expérimental</span>';
$string['boactions_desc'] = 'Les actions post-réservation sont encore une fonctionnalité EXPÉRIMENTALE. Vous pouvez les tester si vous le souhaitez.
Mais ne les utilisez pas encore en production !';
$string['boactionselectuserprofilefield'] = 'Choisir les champs de profil';
$string['boactionuserprofilefieldvalue'] = 'Valeur';
$string['bocondallowedtobookininstance'] = 'La réservation devrait être possible sans capacité particulière';
$string['bocondallowedtobookininstanceanyways'] = 'Les utilisateurs peuvent réserver sans l\'option « <b>mod/booking:choose</b> ».<br>
<div class=\'text-danger\'>Remarque : Cette case et la case précédente doivent être cochées pour activer cette fonctionnalité.</div>';
$string['bocondallowedtobookininstanceavailable'] = 'Réserver';
$string['bocondallowedtobookininstancefullavailable'] = 'Réservation possible';
$string['bocondallowedtobookininstancefullnotavailable'] = 'Aucun accès pour réserver dans cette instance';
$string['bocondallowedtobookininstancenotavailable'] = 'Aucun accès pour réserver';
$string['bocondalreadybooked'] = 'déjà réservé: Est déjà réservé par cet utilisateur';
$string['bocondalreadybookedavailable'] = 'Pas encore réservé';
$string['bocondalreadybookedfullavailable'] = 'L’utilisateur n’a pas encore réservé';
$string['bocondalreadybookedfullnotavailable'] = 'Réservé';
$string['bocondalreadybookednotavailable'] = 'Réservé';
$string['bocondalreadyreserved'] = 'Déjà réservé : A déjà été ajouté au panier de l’utilisateur';
$string['bocondalreadyreservedavailable'] = 'Pas encore ajouté au panier';
$string['bocondalreadyreservedfullavailable'] = 'Pas encore ajouté au panier';
$string['bocondalreadyreservedfullnotavailable'] = 'Ajouté au panier';
$string['bocondalreadyreservednotavailable'] = 'Ajouté au panier';
$string['bocondaskforconfirmation'] = 'Demande de confirmation : Confirmez manuellement la réservation';
$string['bocondaskforconfirmationavailable'] = 'Réserver';
$string['bocondaskforconfirmationfullavailable'] = 'Réservation possible';
$string['bocondaskforconfirmationfullnotavailable'] = 'Réserver - liste d’attente';
$string['bocondaskforconfirmationnotavailable'] = 'Réserver - liste d’attente';
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
$string['bocondcustomformdeleteinfoscheckboxusertext'] = 'Voulez-vous que l’information fournie soit supprimée une fois l’événement terminé?';
$string['bocondcustomformfullavailable'] = 'Réservation possible';
$string['bocondcustomformfullnotavailable'] = 'Réservation impossible';
$string['bocondcustomformfullybooked'] = 'L’option « {$a} » est complètement réservée.';
$string['bocondcustomformlabel'] = 'Étiquette';
$string['bocondcustomformmail'] = 'Courriel';
$string['bocondcustomformmailerror'] = 'L’adresse courriel est invalide.';
$string['bocondcustomformnotavailable'] = 'Réserver';
$string['bocondcustomformnotempty'] = 'Doit contenir une valeur';
$string['bocondcustomformnumberserror'] = 'Merci d’insérer un nombre valide de jours.';
$string['bocondcustomformrestrict'] = 'Le formulaire doit être rempli avant de réserver';
$string['bocondcustomformstillavailable'] = 'toujours disponible';
$string['bocondcustomformurl'] = 'Lien';
$string['bocondcustomformurlerror'] = 'Le lien est invalide ou ne commence pas par http ni https.';
$string['bocondcustomformvalue'] = 'Valeur';
$string['bocondcustomformvalue_help'] = 'Lorsqu’un menu déroulant est sélectionné, veuillez saisir une valeur par ligne. Les valeurs et les valeurs affichées peuvent être saisies séparément, par exemple : « 1 => Ma première valeur => nombre_de_disponibilités », etc.';
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
$string['bocondenrolledincohorts'] = 'L’utilisateur est inscrit dans certaines cohortes';
$string['bocondenrolledincohortsavailable'] = 'Réserver';
$string['bocondenrolledincohortsfullavailable'] = 'Réservation possible';
$string['bocondenrolledincohortsfullnotavailable'] = 'Seulement les utilisateurs qui sont inscrits dans au moins une de ces cohortes peuvent réserver : {$a}
<br>Vous pouvez toute de même les inscrire.';
$string['bocondenrolledincohortsfullnotavailableand'] = 'Seulement les utilisateurs qui sont inscrits dans toutes ces cohortes peuvent réserver : {$a}
<br>Vous pouvez toute de même les inscrire.';
$string['bocondenrolledincohortsnotavailable'] = 'Réservation impossible car vous ne faites pas partie d’une de ces cohortes : {$a}';
$string['bocondenrolledincohortsnotavailableand'] = 'Réservation impossible car vous ne faites pas partie de toutes ces cohortes : {$a}';
$string['bocondenrolledincohortswarning'] = 'Il y a un très grand nombre de cohortes dans votre système. Elles ne seront pas toutes disponibles ici. Si ça vous cause un problème, merci de contacter <a mailto="info@wunderyte.at">Wunderbyte</a>';
$string['bocondenrolledincourse'] = 'L’utilisateur est inscrit dans certains cours';
$string['bocondenrolledincourseavailable'] = 'Réserver';
$string['bocondenrolledincoursefullavailable'] = 'Réservation possible';
$string['bocondenrolledincoursefullnotavailable'] = 'Seulement les utilisateurs qui sont inscrits dans au moins un de ces cours peuvent réserver : {$a}
<br>Vous pouvez toute de même les inscrire.';
$string['bocondenrolledincoursefullnotavailableand'] = 'Seulement les utilisateurs qui sont inscrits dans tous ces cours peuvent réserver : {$a}
<br>Vous pouvez toute de même les inscrire.';
$string['bocondenrolledincoursenotavailable'] = 'Réservation impossible car vous n’être pas inscrit dans un de ces cours : {$a}';
$string['bocondenrolledincoursenotavailableand'] = 'Réservation impossible car vous n’êtes pas inscrit dans tous ces cours : {$a}';
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
$string['bocondhascompetency'] = 'L\'utilisateur possède certaines compétences';
$string['bocondhascompetencyavailable'] = 'Le réserver';
$string['bocondhascompetencyfullavailable'] = 'La réservation est possible';
$string['bocondhascompetencyfullnotavailable'] = 'Seuls les utilisateurs possédant au moins une des compétences suivantes sont autorisés à réserver : {$a}
<br>Vous avez toutefois le droit de réserver un utilisateur malgré tout.';
$string['bocondhascompetencyfullnotavailableand'] = 'Seuls les utilisateurs possédant toutes les compétences suivantes sont autorisés à réserver : {$a}
<br>Vous avez toutefois le droit de réserver un utilisateur malgré tout.';
$string['bocondhascompetencynotavailable'] = 'Réservation impossible. Vous devez posséder au moins l\'une des compétences suivantes : {$a}';
$string['bocondhascompetencynotavailableand'] = 'Réservation impossible car vous ne possédez pas toutes les compétences suivantes : {$a}';
$string['bocondinstanceavailability'] = 'instanceavailability: Restrictions d’accès';
$string['bocondinstanceavailabilityavailable'] = 'Réserver';
$string['bocondinstanceavailabilityfullavailable'] = 'Réservation possible';
$string['bocondinstanceavailabilityfullnotavailable'] = '<a href="{$a}" target="_blank">Conditions d’accès</a> non remplies.<br>
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
$string['bocondmaxnumberofbookingsfullnotavailable'] = 'L’utilisateur a atteint le nombre maximum de réservations';
$string['bocondmaxnumberofbookingsnotavailable'] = 'Nombre maximum de réservations atteint';
$string['bocondnotifymelist'] = 'Liste de notifications';
$string['bocondonnotifylistavailable'] = 'Réserver';
$string['bocondonnotifylistfullavailable'] = 'Réservation possible';
$string['bocondonnotifylistfullnotavailable'] = 'L’utilisateur a atteint le nombre maximum de réservations';
$string['bocondonnotifylistnotavailable'] = 'Nombre maximum de réservations atteint';
$string['bocondonwaitinglist'] = 'onwaitinglist: L’utilisateur est sur la liste d’attente';
$string['bocondonwaitinglistavailable'] = 'Réserver';
$string['bocondonwaitinglistfullavailable'] = 'Réservation possible';
$string['bocondonwaitinglistfullnotavailable'] = 'L’utilisateur est sur la liste d’attente';
$string['bocondonwaitinglistnotavailable'] = 'Vous êtes sur la liste d’attente';
$string['bocondonwaitinglistwaitforconfirmation'] = 'En attente de la confirmation';
$string['bocondoptionhasstarted'] = 'Déjà commencé';
$string['bocondoptionhasstartedavailable'] = 'Réserver';
$string['bocondoptionhasstartedfullavailable'] = 'Réservation possible';
$string['bocondoptionhasstartedfullnotavailable'] = 'Déja commencé - impossible de réserver pour les utilisateurs';
$string['bocondoptionhasstartednotavailable'] = 'Déjà commencé - il n’est plus possible de réserver';
$string['bocondotheroptionsavailable'] = 'Options reliées indisponibles';
$string['bocondpreviouslybooked'] = 'L’utilisateur a déjà choisi une option';
$string['bocondpreviouslybookedavailable'] = 'Réserver';
$string['bocondpreviouslybookedfullavailable'] = 'Réservation possible';
$string['bocondpreviouslybookedfullnotavailable'] = 'Seulement les utilisateurs ayant choisi <a href="{$a}">cette option</a> peuvent réserver.
<br>Vous pouvez tout de même inscrire un utilisateur.';
$string['bocondpreviouslybookednotavailable'] = 'Seulement les utilisateurs ayant choisi <a href="{$a}">cette option</a> peuvent réserver.';
$string['bocondpreviouslybookedoptionid'] = 'Doit déjà être réservé.';
$string['bocondpreviouslybookedrequirecompletion'] = 'L’option de réservation sélectionnée doit être complétée';
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
<p>(1) Pour le faire, cochez la case « A une relation avec une autre condition ».<br>
(2) Vérifiez que l\'opérateur « OU»  est choisi.<br>
(3) Choisir toutes les conditions à contourner.</p>
<p>Exemples :<br>
« Pleinement réservé » => La personne sélectionnée peut réserver même si l\'événement a atteint sa capacité maximale.<br>
« Peut être réservé dans un certain délai » => La personne sélectionnée peut réserver en dehors des délais normaux.</p>';
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
$string['bookagain'] = 'Réserver à nouveau';
$string['bookanyoneswitchoff'] = '<i class="fa fa-user-times" aria-hidden="true"></i> Ne pas permettre les réservations d\'utilisateurs non inscrits (recommandé)';
$string['bookanyoneswitchon'] = '<i class="fa fa-user-plus" aria-hidden="true"></i> Permettre les réservations d\'utilisateurs non inscrits';
$string['bookanyonewarning'] = 'Soyez prudents : Vous pouvez inscrire tous les utilisateurs voulus. Utilisez ce paramètre si vous savez ce que vous faites. Inscrire des utilisateurs non-inscrits dans le cours peut causer des soucis.';
$string['booked'] = 'Réservé';
$string['bookeddeleted'] = 'Réservation retirée';
$string['bookedpast'] = 'Réservé (cours terminé)';
$string['bookedplaces'] = 'Nombre de places réservées pour l\'option de réservation';
$string['bookedpreviousely'] = '| Réservé précédemment';
$string['bookedpreviouselyxtimes'] = '| Réservé précédemment {$a} fois';
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
$string['booking:alwayscanapprove'] = 'Peut toujours confirmer/refuser les réservations';
$string['booking:assigndeputies'] = 'Désigner des suppléants';
$string['booking:bookanyone'] = 'Autorisé à réserver pour tous';
$string['booking:bookforothers'] = 'Réserver pour les autres';
$string['booking:calculateprices'] = 'Possibilité de recalculer les prix';
$string['booking:canoverbook'] = 'Peut sur-réserver';
$string['booking:canreviewsubstitutions'] = 'Autorisé à réviser les remplacements (case à cocher de contrôle)';
$string['booking:canseeinvisibleoptions'] = 'Afficher les options invisibles.';
$string['booking:cansendmessages'] = 'Peut envoyer des messages';
$string['booking:changelockedcustomfields'] = 'Peut modifier les champs d’options de réservation personnalisés verrouillés.';
$string['booking:choose'] = 'Réserver';
$string['booking:comment'] = 'Ajouter des commentaires';
$string['booking:communicate'] = 'Peut communiquer';
$string['booking:conditionforms'] = 'Soumettre les formulaires de conditions tels que la politique de réservation ou les sous-réservations.';
$string['booking:deleteresponses'] = 'Supprimer les réponses';
$string['booking:downloadchecklist'] = 'Liste de contrôle à télécharger';
$string['booking:downloadresponses'] = 'Télécharger les réponses';
$string['booking:editbookingrules'] = 'Modifier les règles (Pro)';
$string['booking:editoptionformconfig'] = 'Modifier le formulaire de configuration des options';
$string['booking:editperformance'] = 'Performances des tests';
$string['booking:editscheduledmails'] = 'Modifier les courriels programmés';
$string['booking:editteacherdescription'] = 'Modifier la description de l’enseignant';
$string['booking:executebulkoperations'] = 'Peut exécuter des opérations en lot';
$string['booking:expertoptionform'] = 'Formulaire d’option expert';
$string['booking:importoptions'] = 'Options d’importation';
$string['booking:limitededitownoption'] = 'Moins que l\'option addeditownoption, n’autorise que des actions très limitées';
$string['booking:managebookedusers'] = 'Gérer les réservations d\'utilisateurs (réponses d\'enregistrement)';
$string['booking:managecomments'] = 'Gérer les commentaires';
$string['booking:manageoptiondates'] = 'Gérer les dates d\'options';
$string['booking:manageoptiontemplates'] = 'Gérer les modèles d’options';
$string['booking:overrideboconditions'] = 'L’utilisateur peut réserver même si les conditions ne sont pas respectées.';
$string['booking:rate'] = 'Tarifer les options de réservation choisies';
$string['booking:readallinstitutionusers'] = 'Montrer tous les utilisateurs';
$string['booking:readresponses'] = 'Lire les réponses';
$string['booking:reducedoptionform1'] = '1. Formulaire d’option réduit pour la catégorie de cours';
$string['booking:reducedoptionform2'] = '2. Formulaire d’option réduit pour la catégorie de cours';
$string['booking:reducedoptionform3'] = '3. Formulaire d’option réduit pour la catégorie de cours';
$string['booking:reducedoptionform4'] = '4. Formulaire d’option réduit pour la catégorie de cours';
$string['booking:reducedoptionform5'] = '5. Formulaire d’option réduit pour la catégorie de cours';
$string['booking:seealllisttoapprove'] = 'Voir tous les enregistrements de la liste à approuver';
$string['booking:seepersonalteacherinformation'] = 'Voir les informations personnelles de l’enseignant';
$string['booking:semesters'] = 'Réservation : Semestres';
$string['booking:sendpollurl'] = 'Envoyer l’URL du sondage';
$string['booking:sendpollurltoteachers'] = 'Envoyer l’URL du sondage aux enseignants';
$string['booking:subscribeusers'] = 'Effectuer des réservations pour d’autres utilisateurs';
$string['booking:updatebooking'] = 'Gérer les options de réservation';
$string['booking:view'] = 'Consulter les instances de réservation';
$string['booking:viewallratings'] = 'Voir toutes les notes brutes données par les individus';
$string['booking:viewanyrating'] = 'Voir le total des notes que n’importe qui a reçu';
$string['booking:viewperformance'] = 'Afficher les performances';
$string['booking:viewrating'] = 'Afficher la note totale que vous avez reçue';
$string['booking:viewreports'] = 'Autoriser l’accès pour la consultation des rapports';
$string['booking:viewscheduledmails'] = 'Consulter les courriels programmés';
$string['bookingaction'] = 'Action';
$string['bookingactionadd'] = 'Ajouter une action';
$string['bookingactionsheader'] = 'Actions après la réservation [EXPÉRIMENTAL]';
$string['bookingafteractionsfailed'] = 'Action après un échec de réservation';
$string['bookingandcancelling'] = 'Réservation et Annulation';
$string['bookinganswercancelled'] = 'Option de réservation annulée par l’utilisateur';
$string['bookinganswerwaitingforconfirmation'] = 'Préinscription pour l’option de réservation reçue';
$string['bookinganswerwaitingforconfirmationdesc'] = 'L’utilisateur avec l’identifiant {$a->relateduserid} s’est inscrit pour l’option de réservation avec l’identifiant {$a->objectid}.';
$string['bookingattachment'] = 'Fichier joint';
$string['bookingcampaign'] = 'Campagne';
$string['bookingcampaigns'] = 'Réservation : Campagnes (PRO)';
$string['bookingcampaignssubtitle'] = 'Les campagnes vous permettent de proposer des réductions sur certaines options de réservation pendant une période déterminée et d\'augmenter la limite de réservation pour cette même période. Pour que les campagnes fonctionnent, la tâche cron de Moodle doit s\'exécuter régulièrement. <br />
Les promotions qui se chevauchent s\'additionnent. Par exemple, deux campagnes offrant une réduction de 50 % donneront un prix total de 25 %.';
$string['bookingcampaignswithbadge'] = 'Réservation : Campagnes <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
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
$string['bookingchangedtextmessage'] = 'Votre réservation « {$a->title} » a changé.
Voici les modifications :
{changements}
Pour afficher les modifications et tous vos cours réservés, cliquer sur le lien suivant : {$a->bookinglink}';
$string['bookingchangedtextsubject'] = 'Modifier la notification pour {$a->title}';
$string['bookingclosingtime'] = 'Réservation possible jusqu’à';
$string['bookingcondition'] = 'Condition';
$string['bookingconfirmationlink'] = 'Lien vers le reçu de réservation';
$string['bookingcustomfield'] = 'Champs personnalisés d\'options de réservations';
$string['bookingdate'] = 'Date de réservation';
$string['bookingdebugmode'] = 'Mode débogage de réservation';
$string['bookingdebugmode_desc'] = 'Le mode débogage de Booking ne doit être activé que par les développeurs.';
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
$string['bookinglink'] = 'Lien vers l’option de réservation';
$string['bookingmanagererror'] = 'Le nom d’utilisateur entré n’est pas valide. Soit il n’existe pas, soit il y a plus d’un utilisateur avec ce nom (exemple : si l’authentification locale et mnet sont activées)';
$string['bookingmeanwhilefull'] = 'Pendant ce temps quelqu’un a pris déjà la dernière place';
$string['bookingname'] = 'Nom de la réservation';
$string['bookingnotopenyet'] = 'Votre événement commence dans {$a} minutes. Le lien que vous avez utilisé vous redirigera si vous cliquez à nouveau dessus dans les 15 minutes avant le démarrage de l\'évènement.';
$string['bookingopen'] = 'Ouvert';
$string['bookingopeningtime'] = 'Réservation possible après';
$string['bookingoption'] = 'Option de réservation';
$string['bookingoptionbooked'] = 'Réservation enregistrée';
$string['bookingoptionbookedotheruserdesc'] = 'L’utilisateur avec l’identifiant {$a->userid} a réservé l’utilisateur avec l’identifiant {$a->relateduserid} pour l’option avec l’identifiant {$a->objectid}.';
$string['bookingoptionbookedotheruserwaitinglistdesc'] = 'L’utilisateur avec l’identifiant {$a->userid} a réservé l’utilisateur avec l’identifiant {$a->relateduserid} pour l’option avec l’identifiant {$a->objectid} sur la liste d’attente.';
$string['bookingoptionbookedsameuserdesc'] = 'L’utilisateur avec l’identifiant {$a->userid} a réservé l’option de réservation avec l’identifiant {$a->objectid}.';
$string['bookingoptionbookedsameuserwaitinglistdesc'] = 'L’utilisateur avec l’identifiant {$a->userid} a réservé l’option de réservation avec l’identifiant {$a->objectid} sur la liste d’attente.';
$string['bookingoptionbookedviaautoenrol'] = 'Option de réservation réservée automatiquement via autoenrol';
$string['bookingoptionbookedviaautoenroldesc'] = 'L’utilisateur avec l’identifiant {$a->userid} a été inscrit à l’option de réservation avec l’identifiant {$a->objectid} via le lien d’inscription.';
$string['bookingoptioncalendarentry'] = '<a href="{$a}" class="btn btn-primary">Réservez maintenant…</a>';
$string['bookingoptioncanbecancelleduntil'] = 'Vous pouvez annuler avant {$a}.';
$string['bookingoptioncancelled'] = 'Réservation annulée pour tous';
$string['bookingoptioncantbecancelledanymore'] = 'L’annulation était possible jusqu’à {$a}.';
$string['bookingoptioncompleted'] = 'Réservation complétée';
$string['bookingoptionconfirmed'] = 'Réservation confirmée';
$string['bookingoptionconfirmed:description'] = 'L’utilisateur avec l’identifiant {$a->userid} a activé la réservation de l’option de réservation {$a->objectid} pour l’utilisateur avec l’identifiant {$a->relateduserid}.';
$string['bookingoptioncreated'] = 'Option de réservation créée';
$string['bookingoptiondatecreated'] = 'Date de réservation créée';
$string['bookingoptiondatedeleted'] = 'Date de réservation supprimée';
$string['bookingoptiondateupdated'] = 'Date de réservation mise à jour';
$string['bookingoptiondefaults'] = 'Paramètres par défaut des options de réservation';
$string['bookingoptiondefaultsdesc'] = 'Ici vous pouvez définir des paramètres par défaut pour la création d\'option de réservation et les verrouiller si nécessaire.';
$string['bookingoptiondeleted'] = 'Option de réservation supprimée';
$string['bookingoptiondenied'] = 'Option de réservation refusée';
$string['bookingoptiondenied:description'] = 'L’utilisateur avec l’identifiant {$a->userid} a refusé la réservation de l’option de réservation {$a->objectid} pour l’utilisateur avec l’identifiant {$a->relateduserid}.';
$string['bookingoptiondescription'] = 'Description de l\'option de réservation';
$string['bookingoptiondetaillink'] = 'Lien de l’option de réservation';
$string['bookingoptionfreetobookagain'] = 'Places à nouveau disponibles';
$string['bookingoptionimage'] = 'Déposer une image';
$string['bookingoptionmovedupfromwaitinglist'] = 'Passé de la liste d\'attente à la liste d’inscrits';
$string['bookingoptionmovedupfromwaitinglistdesc'] = 'L’utilisateur dont l’identifiant est {$a->relateduserid} a été déplacé de la liste d’attente vers la liste des utilisateurs inscrits.';
$string['bookingoptionname'] = 'Nom de l\'option de réservation';
$string['bookingoptionnamewithoutprefix'] = 'Nom (sans préfixe)';
$string['bookingoptionprice'] = 'Prix';
$string['bookingoptionsall'] = 'Code court pour afficher toutes les options de réservation.';
$string['bookingoptionsfromtemplatemenu'] = 'Nouvelles options de réservation à partir du modèle';
$string['bookingoptionsmenu'] = 'Option de réservation';
$string['bookingoptiontitle'] = 'Titre de l\'option de réservation';
$string['bookingoptionuncompleted'] = 'Annulation de complétion de l’option de réservation';
$string['bookingoptionupdated'] = 'Option de réservation mise à jour';
$string['bookingoptionupdateddesc'] = 'L\'utilisateur avec l\'identifiant « {$a->userid} » a mis à jour l\'option de réservation avec l\'identifiant « {$a->objectid} ».';
$string['bookingoptionwaitinglistbooked'] = 'Réservé pour la liste d\'attente';
$string['bookingorganizatorname'] = 'Nom de l’organisateur';
$string['bookingpassed'] = 'L\'événement est terminé.';
$string['bookingplacesenoughmessage'] = 'Il reste encore suffisamment de places disponibles.';
$string['bookingplacesfullmessage'] = 'Il n\'y a plus de places disponibles.';
$string['bookingplacesinfotexts'] = 'Afficher les textes d’information sur la disponibilité des places réservées';
$string['bookingplacesinfotextsinfo'] = 'Choisissez comment afficher les places disponibles aux utilisateurs.';
$string['bookingplaceslowmessage'] = 'Il ne reste plus que quelques places disponibles.';
$string['bookingplaceslowpercentage'] = 'Message lorsque le pourcentage de places réservées est faible';
$string['bookingplaceslowpercentagedesc'] = 'Si le nombre de places disponibles est inférieur ou égal à ce pourcentage, un message indiquant que le nombre de places est insuffisant s\'affiche.';
$string['bookingplacesplacesleft'] = '{$a} places disponibles';
$string['bookingplacesplacesoneleft'] = '1 place disponible';
$string['bookingplacesunlimitedmessage'] = 'Illimité';
$string['bookingpoints'] = 'Points de cours';
$string['bookingpolicy'] = 'Conditions de réservation';
$string['bookingpolicyagree'] = 'J\'ai lu, je comprends et accepte la politique de réservation.';
$string['bookingpolicynotchecked'] = 'Vous n\'avez pas accepté la politique de réservation.';
$string['bookingpollurl'] = 'URL du sondage';
$string['bookingpollurlteachers'] = 'URL du sondage pour les enseignants';
$string['bookingpricecategory'] = 'Catégorie de prix';
$string['bookingpricecategoryinfo'] = 'Définissez le nom de la catégorie, par exemple « étudiants ».';
$string['bookingpricesettings'] = 'Paramètres de prix';
$string['bookingpricesettings_desc'] = 'Ici, vous pouvez personnaliser les prix de la réservation.';
$string['bookingreportlink'] = 'Lien vers le rapport de l’option de réservation';
$string['bookingrule'] = 'Règle';
$string['bookingruleaction'] = 'Action de la règle';
$string['bookingruleapply'] = 'Appliquer la règle';
$string['bookingruleapplydesc'] = 'Décocher cette case pour désactiver cette règle.';
$string['bookingrulecondition'] = 'Condition d\'application de la règle';
$string['bookingruledeactivate'] = '<b>Désactiver</b> règle de réservation';
$string['bookingruleisactive'] = 'La règle est active et appliquée.';
$string['bookingruleisnotactive'] = 'Cette règle n’est pas active et ne sera pas appliquée.';
$string['bookingrules'] = 'Réservation : définir des règles globales (PRO)';
$string['bookingrulesnootherfound'] = 'Aucune autre règle trouvée';
$string['bookingrulesothercontextheading'] = 'Liens vers les règles dans d’autres contextes :';
$string['bookingruletemplate'] = 'Désactiver les modèles préconfigurés pour les règles.';
$string['bookingruletemplates'] = 'Charger un modèle de règle';
$string['bookingruletemplatesactive'] = 'Activer les modèles préconfigurés pour les règles.';
$string['bookings'] = 'Réservations';
$string['bookingsaved'] = 'Votre réservation a été sauvegardé avec succès. Vous pouvez désormais continuer à réserver d’autres cours.';
$string['bookingsettings'] = 'Réservation : paramètres principaux';
$string['bookingstatusbooked'] = 'Inscrit';
$string['bookingstatusdeleted'] = 'Supprimé';
$string['bookingstatusonnotificationlist'] = 'Sur la liste de notification';
$string['bookingstatusonwaitinglist'] = 'Sur la liste d’attente';
$string['bookingstatuspreviouslybooked'] = 'Réservé précédemment';
$string['bookingstatusreserved'] = 'Réservé';
$string['bookingstracker'] = 'Suivi des réservations';
$string['bookingstracker_desc'] = 'Ici, vous pouvez activer le suivi des réservations.
Il permet aux utilisateurs autorisés de gérer les réservations pour l\'ensemble du site à différents niveaux hiérarchiques (dates, options, instance, cours Moodle, site entier) et de modifier le statut de présence des utilisateurs ayant réservé.';
$string['bookingstrackerdelete'] = 'Se désinscrire';
$string['bookingstrackerpresencecounter'] = 'Compter les présences';
$string['bookingstrackerpresencecounter_desc'] = 'Affichez un compteur indiquant le nombre total de présences.
Définissez dans les paramètres suivants le statut de présence à comptabiliser.';
$string['bookingstrackerpresencecountervaluetocount'] = 'Statut de présence à compter';
$string['bookingstrackerpresencecountervaluetocount_desc'] = 'Ce statut de présence sera comptabilisé et affiché dans le suivi des réservations.';
$string['bookingstrackerswitchviewtypetoanswers'] = 'Réservations cumulées pour chaque option de réservation';
$string['bookingstrackerswitchviewtypetooptions'] = 'Afficher toutes les réservations séparément';
$string['bookingstrackertriggercertificate'] = 'Déclencher les certificats';
$string['bookingsubbooking'] = 'Sous-réservation';
$string['bookingsubbookingadd'] = 'Ajouter une sous-réservation';
$string['bookingsubbookingdelete'] = 'Supprimer la sous-réservation';
$string['bookingsubbookingedit'] = 'Modifier';
$string['bookingsubbookingsheader'] = 'Sous-réservations';
$string['bookingtags'] = 'Mots-clés';
$string['bookingtext'] = 'Texte de la réservation';
$string['bookinguseastemplate'] = 'Définir cette règle comme modèle';
$string['booknow'] = 'Réserver maintenant';
$string['bookondetail'] = 'Plus de détails';
$string['bookonlyondetailspage'] = 'La réservation est uniquement possible sur la page dédiée aux détails de réservation';
$string['bookonlyondetailspage_desc'] = 'Cela signifie que la réservation n\'est pas possible depuis la vue liste ou la vue fiche. Pour réserver, vous devez vous rendre sur la page de détails afin de consulter toutes les informations relatives à la réservation.';
$string['bookotheroptions'] = 'Réserver les options';
$string['bookotheroptionsconditionsblock'] = 'Réserver uniquement si toutes les contions de l’option sont remplies';
$string['bookotheroptionsforce'] = 'Gérer les restrictions de ces options';
$string['bookotheroptionsforcebooking'] = 'Toujours réserver';
$string['bookotheroptionsnooverbooking'] = 'Réservez uniquement si des places sont disponibles';
$string['bookotheroptionsselect'] = 'Réservez également parmi d\'autres options de réservation';
$string['bookotherusers'] = 'Enregistrer d’autres utilisateurs';
$string['bookotheruserslimit'] = 'Nombre maximum d\'utilisateurs qu\'un enseignant assigné à l\'option de réservation peut réserver';
$string['booktootherbooking'] = 'Enregistrer des utilisateurs pour d’autres réservations';
$string['bookusers'] = 'Pour l\'importation, inscrire directement les utilisateurs';
$string['bookuserswithoutcompletedactivity'] = 'Enregistrer des utilisateurs sans avoir achevé l\'activité';
$string['bookwithcredit'] = '{$a} crédit';
$string['bookwithcredits'] = '{$a} crédits';
$string['bookwithcreditsactive'] = 'Réserver avec crédits';
$string['bookwithcreditsactive_desc'] = 'Les utilisateurs disposant de crédits peuvent réserver directement sans payer de prix.';
$string['bookwithcreditsprofilefield'] = 'Champ de profil utilisateur pour les crédits';
$string['bookwithcreditsprofilefield_desc'] = 'Pour utiliser cette fonctionnalité, veuillez définir un champ de profil utilisateur où les crédits sont stockés.
<span class=\'text-danger\'><b>Attention :</b> Vous devez créer ce champ de manière à ce que vos utilisateurs ne puissent pas y ajouter de crédit eux-mêmes.</span>';
$string['bookwithcreditsprofilefieldoff'] = 'Ne pas afficher';
$string['bopathtoscript'] = 'Chemin vers le script REST';
$string['bosecrettoken'] = 'Jeton secret';
$string['bstcourse'] = 'Cours';
$string['bstcoursestarttime'] = 'Date / Heure';
$string['bstinstitution'] = 'Institution';
$string['bstlink'] = 'Afficher';
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
$string['bulkoperationsheader'] = 'Mettre à jour les données pour la ou les options de réservation sélectionnées';
$string['cachedef_bookedusertable'] = 'Table des utilisateurs inscrits (cache)';
$string['cachedef_bookforuser'] = 'Réserver pour un utilisateur (cache)';
$string['cachedef_bookinganswers'] = 'Réservations (Cache)';
$string['cachedef_bookinghistorytable'] = 'Tableau de l’historique des réservations (Cache)';
$string['cachedef_bookingoptions'] = 'Options de réservation (cache)';
$string['cachedef_bookingoptionsanswers'] = 'Réponses des options de réservation (cache)';
$string['cachedef_bookingoptionsettings'] = 'Paramètres des options de réservation (cache)';
$string['cachedef_bookingoptionstable'] = 'Tableaux d\'options de réservation avec requêtes SQL hachées (cache)';
$string['cachedef_cachedbookinginstances'] = 'Instance de réservation (cache)';
$string['cachedef_cachedpricecategories'] = 'Catégories des prix de réservation (cache)';
$string['cachedef_cachedprices'] = 'Prix des réservations (cache)';
$string['cachedef_cachedsemesters'] = 'Semestres (cache)';
$string['cachedef_cachedteachersjournal'] = 'Journal des enseignants (cache)';
$string['cachedef_competenciesshortnamescache'] = 'Noms abrégés des compétences (Cache)';
$string['cachedef_conditionforms'] = 'Formulaires des conditions (cache)';
$string['cachedef_confirmbooking'] = 'Réservations confirmées (cache)';
$string['cachedef_customfields'] = 'Champs personnalisés (Cache)';
$string['cachedef_customformuserdata'] = 'Données utilisateur du formulaire personnalisé (Cache)';
$string['cachedef_electivebookingorder'] = 'Ordre de réservation optionnel (Cache)';
$string['cachedef_eventlogtable'] = 'Table des journaux d’événements (Cache)';
$string['cachedef_mybookingoptionstable'] = 'Table de mes options de réservation (Cache)';
$string['cachedef_scheduledmailscache'] = 'Courriels programmés (cache)';
$string['cachedef_subbookingforms'] = 'Formulaires de sous-réservation (Cache)';
$string['cachedef_usercompetenciescache'] = 'Compétences de l’utilisateur (Cache)';
$string['cachesettings'] = 'Paramètres de la cache';
$string['cachesettings_desc'] = 'Ces modifications ont un impact significatif sur les performances. Veuillez n’effectuer de modifications ici que si vous savez exactement ce que vous faites.';
$string['cacheturnoffforbookinganswers'] = 'Désactiver la mise en cache des réponses (réservations des utilisateurs)';
$string['cacheturnoffforbookinganswers_desc'] = 'Ce paramètre augmente considérablement la charge sur la base de données. Toutefois, en cas de problèmes majeurs de configuration du cache, il peut s\'avérer avantageux.';
$string['cacheturnoffforbookingsettings'] = 'Désactiver la mise en cache des paramètres de réservation';
$string['cacheturnoffforbookingsettings_desc'] = 'Ce paramètre augmente considérablement la charge sur la base de données. Toutefois, en cas de problèmes majeurs de configuration du cache, il peut s’avérer avantageux.';
$string['caladdascourseevent'] = 'Ajouter au calendrier (visible uniquement par les participants du cours)';
$string['caladdassiteevent'] = 'Ajouter au calendrier (visible par tous les utilisateurs)';
$string['caldonotadd'] = 'Ne pas ajouter au calendrier du cours';
$string['caleventtype'] = 'Visibilité des événements dans le calendrier';
$string['callbackfunctionnotapplied'] = 'La fonction de rappel n’a pas pu être appliquée.';
$string['callbackfunctionnotdefined'] = 'La fonction de rappel n’est pas définie.';
$string['campaignblockbooking'] = 'Bloquer certaines options de réservation';
$string['campaigncustomfield'] = 'Modifier le prix ou la limite de réservation';
$string['campaigndescriptioncpvalue'] = 'Champ de profil utilisateur personnalisé « {$a->cpfield} » {$a->cpoperator} « {$a->cpvalue} »';
$string['campaigndescriptionfieldvalue'] = 'Champ d\'option de réservation « {$a->bofieldname} » {$a->campaignfieldnameoperator} « {$a->fieldvalue} »';
$string['campaignend'] = 'Fin de la campagne';
$string['campaignend_help'] = 'Quand se termine la campagne ?';
$string['campaignfieldname'] = 'Champ d’option de réservation';
$string['campaignfieldname_help'] = 'Sélectionnez le champ d’option de réservation personnalisée dont la valeur doit être comparée.';
$string['campaignfieldvalue'] = 'Valeur';
$string['campaignfieldvalue_help'] = 'Sélectionnez la valeur du champ. La campagne s’applique à toutes les options de réservation dont le champ sélectionné possède cette valeur.';
$string['campaignname'] = 'Nom personnalisé pour la campagne';
$string['campaignname_help'] = 'Indiquez le nom de la campagne, par exemple « Campagne de Noël 2023 » ou « Réduction de Pâques 2023 ».';
$string['campaignstart'] = 'Début de la campagne';
$string['campaignstart_help'] = 'Quand commence la campagne ?';
$string['campaigntype'] = 'Type de campagne';
$string['cancancelbookabsolute'] = 'Définissez une date d’annulation fixe.';
$string['cancancelbookallow'] = 'Permettre aux utilisateurs d\'annuler leurs réservations';
$string['cancancelbookdays'] = 'Interdire aux utilisateurs d\'annuler leur réservation n jours avant le début du cours. 0 signifie que les utilisateurs peuvent encore annuler n jours APRÈS le début du cours.';
$string['cancancelbookdays:bookingclosingtime'] = 'Interdire aux utilisateurs d’annuler leur réservation n jours avant la <b>fin des inscriptions</b> (date limite de réservation). Le signe moins signifie que les utilisateurs peuvent encore annuler n jours APRÈS la fin des inscriptions.';
$string['cancancelbookdays:bookingopeningtime'] = 'Interdire aux utilisateurs d’annuler leur réservation n jours avant le <b>début des inscriptions</b> (heure d’ouverture des réservations). Le signe moins signifie que les utilisateurs peuvent encore annuler n jours APRÈS le début des inscriptions.';
$string['cancancelbookdays:coursestarttime'] = 'Interdire aux utilisateurs d’annuler leur réservation n jours avant le <b>début de l’option de réservation</b> (début du cours). Le signe moins signifie que les utilisateurs peuvent encore annuler n jours APRÈS le début des inscriptions.';
$string['cancancelbookdays:semesterstart'] = 'Interdire aux utilisateurs d’annuler leur réservation n jours avant le début du <b>semestre</b>. Le signe moins signifie que les utilisateurs peuvent encore annuler n jours APRÈS le début du semestre.';
$string['cancancelbookdaysno'] = 'Ne pas limiter';
$string['cancancelbookrelative'] = 'Définir la date d’annulation <b>par rapport à {$a}</b>';
$string['cancancelbookrelativedesc'] = 'Définir l’annulation par rapport à une date spécifique qui peut être définie';
$string['cancancelbooksetting'] = 'Définir les conditions d’annulation';
$string['cancancelbooksetting_help'] = 'Ces paramètres peuvent être remplacés par des paramètres plus spécifiques dans les options de réservation';
$string['cancancelbookunlimited'] = 'L’annulation sans limite est possible.';
$string['cancel'] = 'Annuler';
$string['cancelallusers'] = 'Annuler les réservations de tous les participants';
$string['cancelbooking'] = 'Annuler la réservation';
$string['canceldateabsolute'] = 'Annulation possible jusqu\'à';
$string['canceldependenton'] = 'Délai d’annulation dépendant de';
$string['canceldependenton_desc'] = 'Choisissez la date de début pour le paramètre :

« Interdire aux utilisateurs d\'annuler leur réservation n jours avant le début. Un signe moins signifie que les utilisateurs peuvent encore annuler n
jours APRÈS le début du cours. »<br> Ceci définira également la <i>période de service</i> des cours dans le panier (si celui-ci est installé). Cela affecte également les paiements échelonnés. Vous pouvez supprimer le semestre dans la section Dates d\'une option de réservation si vous souhaitez utiliser le début du cours au lieu du début du semestre.';
$string['cancelical'] = 'Annuler les événements du calendrier';
$string['cancellation'] = 'Annulation';
$string['cancellationsettings'] = 'Paramètres d\'annulation <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['cancelmyself'] = 'Annuler ma réservation';
$string['canceloption'] = 'Annuler l\'option de réservation';
$string['canceloption_desc'] = 'L\'annulation d\'une option de réservation signifie qu\'il n\'est plus possible de réserver, mais qu\'elle est toujours affichée dans la liste.';
$string['cancelreason'] = 'Raison de l\'annulation de cette option de réservation';
$string['cancelsign'] = '<i class="fa fa-ban" aria-hidden="true"></i>';
$string['cancelthisbookingoption'] = 'Annuler cette option de réservation';
$string['canceluntil'] = 'L’annulation n\'est possible que jusqu\'à une certaine date.';
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
$string['certificateissued'] = 'Certificat délivré';
$string['certificateissuedate'] = 'Date décerné';
$string['certificateissueddesc'] = 'L’utilisateur avec l’identifiant {$a->userid} a émis un certificat (Identifiant {$a->objectid}) à l’utilisateur avec l’identifiant {$a->relateduserid}.';
$string['certificatemodalheader'] = 'Certificats de {$a}';
$string['certificatenotactive'] = 'Certificat inactif';
$string['certificatenotapplyforusers'] = 'Aucun certificat n’a été généré.';
$string['certificateon'] = 'Activer la création de certificats <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['certificateon_desc'] = 'Activez ce paramètre si vous souhaitez émettre des certificats pour la finalisation des options de réservation.';
$string['certificaterequiredoptionsmode'] = 'Une seule des options sélectionnées doit être complétée';
$string['certificaterequiredoptionsmode_help'] = 'Si cette case est cochée, une seule des options sélectionnées doit être renseignée pour que le certificat soit délivré. Si elle n\'est pas cochée (par défaut), toutes les options sélectionnées doivent être renseignées.';
$string['certificaterequiresall'] = 'Toutes les options sélectionnées doivent être complétées';
$string['certificaterequiresone'] = 'Cocher cette case si une seule option doit être complétée';
$string['certificaterequiresotheroptions'] = 'Nécessite de compléter ces autres options de réservation :';
$string['certificaterequiresotheroptions_help'] = 'Sélectionnez les options de réservation qui doivent être complétées avant qu\'un certificat puisse être émis pour cette option de réservation.';
$string['certificatestriggered'] = 'Création des certificats déclenchée';
$string['certificateurl'] = 'URL du certificat';
$string['certificatewithexpiration'] = 'Expire le : {$a}';
$string['certificatewithoutexpiration'] = 'Aucune date d’expiration';
$string['cfcostcenter'] = 'Champ d’option de réservation personnalisé pour centre de coûts';
$string['cfcostcenter_desc'] = 'Si vous utilisez des centres de coûts, vous devez spécifier quel champ d\'option de réservation personnalisée est utilisé pour stocker le centre de coûts.';
$string['cfgsignin'] = 'Configuration de la feuille d\'émargement';
$string['cfgsignin_desc'] = 'Configurer les paramètres de la feuille d\'émargement';
$string['changedescriptionfield'] = 'Afficher un champ d\'option de réservation personnalisé au lieu de la description de la réservation';
$string['changedescriptionfield_desc'] = 'Affiche le contenu du champ d\'option de réservation personnalisée sélectionné au lieu de la description de l\'option de réservation. Si aucun champ n\'est sélectionné, la description de l\'option de réservation s\'affiche.';
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
$string['changes'] = 'Modifications apportées à bookingoption (pour la règle écoutant bookingoption_updated)';
$string['changesemester'] = 'Réinitialiser et créer les dates du semestre';
$string['changesemester:warning'] = '<strong>Attention:</strong> En cliquant sur « Enregistrer les modifications », toutes les dates seront supprimées et remplacées par les dates du semestre choisi.';
$string['changesemesteradhoctaskstarted'] = 'Succès. Les dates seront régénérées lors de la prochaine exécution de CRON. Cela peut prendre plusieurs minutes.';
$string['changesinentity'] = '{$a->name} (Identifiant : {$a->id})';
$string['changesinexpirydateabsolute'] = 'Certificat : valeur absolue de la date d’expiration';
$string['changesinexpirydaterelative'] = 'Certificat : valeur relative de la date d’expiration';
$string['changesinexpirydatetype'] = 'Certificat : type de date d’expiration';
$string['checkbox'] = 'Case à cocher';
$string['checkdelimiter'] = 'Vérifier si les données sont séparées par le symbole sélectionné.';
$string['checkdelimiteroremptycontent'] = 'Vérifier si les données sont fournies et séparées par le symbole sélectionné.';
$string['checkedanswersdeleted'] = 'Les réservations sélectionnées ont été supprimées.';
$string['checklistdaten'] = 'Dates';
$string['checklistdownload'] = 'Télécharger la liste de contrôle';
$string['checklistfirstcourseday'] = 'Premier jour de cours :';
$string['checklisthtml'] = 'Modèle de liste de contrôle';
$string['checklisthtmldescription'] = 'Vous pouvez utiliser les espaces réservés suivants dans votre modèle :<br>
<b>Espaces réservés généraux :</b><br>
[[booking_id]], [[booking_text]], [[max_answers]], [[institution]], [[location]], [[coursestarttime]], [[courseendtime]], [[description]], [[address]], [[teachers]], [[titleprefix]], [[dayofweektime]], [[annotation]], [[courseid]], [[course_url]], [[option_times]], [[contact]], [[dates]]<br>
Ces espaces réservés seront remplacés par les données correspondantes de l’option de réservation. Utilisez uniquement du HTML basique compatible avec TCPDF, car les fonctionnalités CSS sont limitées. Pour une mise en page de liste simple, vous pouvez utiliser des balises HTML comme <code><ul></code> et <code><li></code> pour structurer votre contenu. Veillez à ce que les URL, les dates et les autres éléments dynamiques soient correctement formatés pour une meilleure lisibilité.';
$string['checklistpreparation'] = 'Préparation';
$string['checklistraum'] = 'Salle';
$string['checklistreferentin'] = 'Instructeur';
$string['checklistseminarabschluss'] = 'Conclusion du séminaire';
$string['checklisttwoweeksprior'] = '2 semaines avant le début du séminaire';
$string['checkoutidentifier'] = 'Numéro de commande';
$string['choose...'] = 'Choisir…';
$string['choosedifferentvalue'] = 'Choisir une valeur différente du premier champ';
$string['choosepdftitle'] = 'Sélectionner un titre pour la feuille d\'émargement';
$string['chooseperiod'] = 'Sélectionner une période de temps';
$string['chooseperiod_help'] = 'Sélectionner une période de temps pour créer la série de dates.';
$string['choosesemester'] = 'Sélectionner un semestre';
$string['choosesemester_help'] = 'Choisir le semestre pour lequel le(s) congé(s) doit(vent) être créé(s).';
$string['choosesession'] = 'Choisir une date (séance)…';
$string['choosetags'] = 'Chosir les tags';
$string['choosetags_desc'] = 'Les cours portant ces étiquettes peuvent servir de modèles. Si une option de réservation est associée à un tel modèle, une copie du cours modèle sera automatiquement créée lors du premier enregistrement.';
$string['circumventavailabilityconditions'] = 'Contourner les restrictions d\'accès';
$string['circumventavailabilityconditions_desc'] = 'Si ce paramètre est activé, les restrictions des options de réservation dépendant des champs du profil utilisateur peuvent être contournées.

Lorsqu\'un utilisateur accède une première fois à la page « optionview.php » avec les paramètres corrects, l\'option de réservation devient disponible malgré ces restrictions.

Le paramètre obligatoire est <b>cvfield=userprofileshortname_desiredvalue</b>, et le paramètre optionnel est <b>cvpwd=password</b>.

La levée de la restriction est spécifique à chaque réservation et ne s\'applique qu\'à la dernière réservation effectuée avec le paramètre « cvfield ».';
$string['circumventpassword'] = 'Mot de passe pour contourner les restrictions. Laisser vide si aucun mot de passe n\'est requis.';
$string['close'] = 'Fermer';
$string['closed'] = 'Réservation fermée';
$string['cohort'] = 'Cohorte';
$string['cohorts'] = 'Cohorte(s)';
$string['collapsedescriptionmaxlength'] = 'Réduire les descriptions (longueur maximale)';
$string['collapsedescriptionmaxlength_desc'] = 'Veuillez indiquer la longueur maximale du texte de la description. Les descriptions plus longues seront réduites.';
$string['collapsedescriptionoff'] = 'Ne pas réduire les descriptions';
$string['collapseshowsettings'] = 'Réduire « afficher les dates » avec plus de x dates.';
$string['collapseshowsettings_desc'] = 'Pour éviter un affichage désordonné avec trop de dates, une limite inférieure pour les dates regroupées peut être définie ici.';
$string['comments'] = 'Commentaires';
$string['competencies'] = 'Compétences';
$string['competenciesheader'] = '<i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp;Compétences';
$string['competencychoose'] = 'Choisissez les compétences de cette option de réservation';
$string['competencynonefound'] = 'Aucune compétence définie';
$string['completed'] = 'Terminé';
$string['completedcomments'] = 'Uniquement si l\'activité est terminée';
$string['completedratings'] = 'Uniquement si l\'activité est terminée';
$string['completionchanged'] = 'Mise à jour du statut de complétion';
$string['completionchangedhistory'] = 'L\'état d\'achèvement a été modifié de « {$a->completionold} » à « {$a->completionnew} ».';
$string['completionmodule'] = 'À l\'issue de l\'achèvement de l\'activité sélectionnée, activer la suppression en bloc des réservations des utilisateurs';
$string['completionmodule_help'] = 'Afficher un bouton de suppression en bloc pour les réponses aux réservations si un autre module de cours a été achevé. Les réservations des utilisateurs seront supprimées en cliquant sur un bouton dans le rapport de la page ! Seules les activités dont l\'achèvement est activé peuvent être sélectionnées dans la liste.';
$string['completionoptioncompletedcminfo'] = 'Être marqué comme terminé dans au moins {$a} options de réservation (par l\'enseignant, le gestionnaire ou l\'administrateur).';
$string['conditionselectbookingmanager'] = 'Sélectionner le gestionnaire de réservation.';
$string['conditionselectbookingmanager_desc'] = 'Gestionnaire de réservation tel que défini dans les paramètres de l’instance de réservation du module.';
$string['conditionselectresponsiblecontactinbo_desc'] = 'Sélectionnez le ou les contacts responsables de l\'option de réservation.';
$string['conditionselectstudentinbo_desc'] = 'Sélectionnez tous les étudiants de l\'option de réservation (concernée par la règle) ayant un certain rôle.';
$string['conditionselectstudentinboroles'] = 'Choisir un rôle';
$string['conditionselectteacherinbo_desc'] = 'Sélectionnez les enseignants de l\'option de réservation (concernée par la règle).';
$string['conditionselectuserfromevent_desc'] = 'Choisissez un utilisateur qui a un lien quelconque avec l\'événement.';
$string['conditionselectuserfromeventtype'] = 'Choisir un rôle';
$string['conditionselectusershoppingcart_desc'] = 'L\'utilisateur ayant une obligation de paiement est sélectionné';
$string['conditionselectusersuserids'] = 'Sélectionnez les utilisateurs que vous souhaitez cibler';
$string['conditionsoverwritingbillboard'] = 'Remplacer les messages concernant les motifs de blocage des réservations';
$string['conditionsoverwritingbillboard_desc'] = 'Il est possible de saisir un texte dans les paramètres de l\'instance de réservation, qui s\'affichera à la place des autres messages concernant les motifs de blocage des réservations.';
$string['conditiontextfield'] = 'Valeur';
$string['configurefields'] = 'Configurer les champs et les colonnes';
$string['confirmactivtyfrom'] = 'Confirmer l\'activité des utilisateurs à partir de';
$string['confirmationdeleted'] = 'Confirmation supprimée';
$string['confirmationmessagesettings'] = 'Paramètres du courriel de confirmation';
$string['confirmationonnotification'] = 'Ouvrir la réservation pour l\'utilisateur?';
$string['confirmationonnotificationnoopen'] = 'Les notifications n’ont aucun effet sur les confirmations';
$string['confirmationonnotificationwarning'] = '<div class="alert alert-warning" role="alert">Veuillez noter que vous devez configurer une règle correspondante pour que cette fonction fonctionne.</div>';
$string['confirmationonnotificationyesforall'] = 'Oui, pour tous les utilisateurs notifiés';
$string['confirmationonnotificationyesoneatatime'] = 'Oui, confirmation pour un seul utilisateur à la fois.';
$string['confirmbooking'] = 'Confirmation de la réservation';
$string['confirmbookinganswer'] = 'Confirmer la réponse de réservation lorsque les notifications utilisateur sont activées.';
$string['confirmbookinglong'] = 'Voulez-vous vraiment confirmer cette réservation?';
$string['confirmbookingoffollowing'] = 'Veuillez confirmer la réservation pour le cours suivant';
$string['confirmbookingtitle'] = 'Confirmer la réservation';
$string['confirmcanceloption'] = 'Confirmer l\'annulation de l\'option de réservation';
$string['confirmcanceloptiontitle'] = 'Modifier le statut de l\'option de réservation';
$string['confirmchangesemester'] = 'OUI, je veux vraiment supprimer toutes les dates de réservation de l\'instance et en générer de nouvelles.';
$string['confirmdeletebookingoption'] = 'Voulez-vous vraiment supprimer cette option de réservation <b>{$a}</b> ?';
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
$string['connectedbooking'] = '[DÉPRÉCIÉ] Réservation connectée';
$string['connectedbooking_help'] = 'Instance de réservation éligible au transfert des utilisateurs réservés. Vous pouvez définir l\'option à partir de laquelle, au sein de l\'instance de réservation sélectionnée, et le nombre d\'utilisateurs acceptés.';
$string['connectedmoodlecourse'] = 'Cours Moodle relié';
$string['connectedmoodlecourse_help'] = 'Choisissez « Créer un nouveau cours… » si vous souhaitez qu’un nouveau cours Moodle soit créé pour cette option de réservation.';
$string['consumeatonce'] = 'Tous les crédits doivent être utilisés immédiatement';
$string['consumeatonce_help'] = 'Les utilisateurs ne peuvent réserver qu’une seule fois et doivent réserver toutes les options en une seule étape.';
$string['contains'] = 'contient (texte)';
$string['containsinarray'] = 'L’utilisateur possède au moins partiellement l’une de ces valeurs séparées par des virgules';
$string['containsnot'] = 'ne contient pas (texte)';
$string['containsnotinarray'] = 'L’utilisateur possède l’une de ces valeurs séparées par des virgules, même pas partiellement';
$string['containsnotplain'] = 'ne contient pas';
$string['containsplain'] = 'contient';
$string['coolingoffperiod'] = 'Annulation possible après x secondes';
$string['coolingoffperiod_desc'] = 'Pour éviter les annulations accidentelles, par exemple, suite à un clic trop rapide sur le bouton de réservation, un délai de réflexion de quelques secondes peut être défini. Pendant ce laps de temps, l’annulation est impossible. Ne définissez pas plus de quelques secondes, car ce délai n’est pas affiché aux utilisateurs.';
$string['copy'] = '- Copier';
$string['copycircumventlink'] = 'Copier le lien d’accès pour les externes';
$string['copymail'] = 'Envoyer un e-mail de confirmation au responsable des réservations';
$string['copyonlythisbookingurl'] = 'Copier l\'URL de la réservation';
$string['copypollurl'] = 'Copier l\'URL du sondage';
$string['copytoclipboard'] = 'Copier dans le presse-papiers : Ctrl+C, Entrée';
$string['copytotemplate'] = 'Enregistrer l\'option de réservation comme modèle';
$string['copytotemplatesucesfull'] = 'L\'option de réservation a été sauvegardée avec succès en tant que modèle.';
$string['course'] = 'Cours Moodle';
$string['coursecalendarurl'] = 'Lien du calendrier du cours';
$string['coursedate'] = 'Date';
$string['coursedoesnotexist'] = 'Le numéro de cours {$a} n’existe pas';
$string['courseduplicating'] = 'NE PAS SUPPRIMER cet élément. Le cours Moodle sera copié lors de la prochaine exécution de la tâche CRON.';
$string['courseendtime'] = 'Heure de fin du cours';
$string['courseid'] = 'Cours auxquels s\'inscrire';
$string['courselink'] = 'Lien vers le cours relatif à l’option de réservation';
$string['courselist'] = 'Afficher toutes les options de réservation d’une instance de réservation';
$string['coursename'] = 'Nom du cours associé';
$string['coursepageshortinfo'] = 'Pour réserver ce cours, cliquer sur « Voir les options disponibles », choisir une option de réservation et cliquer sur « Réserver maintenant ».';
$string['coursepageshortinfolbl'] = 'Court texte d\'information';
$string['coursepageshortinfolbl_help'] = 'Choisir un court texte d\'information à afficher sur la page du cours.';
$string['courses'] = 'Cours';
$string['coursesheader'] = 'Cours Moodle';
$string['courseshortname'] = 'Nom court du cours';
$string['coursestart'] = 'Début';
$string['coursestarttime'] = 'Heure de début du cours';
$string['courseurl'] = 'URL du cours';
$string['createcompetencylink'] = '<a href="{$a}" class="btn btn-outline-secondary" target="_blank" rel="noopener noreferrer">
Créer une nouvelle compétence (dans le cadre)</a>';
$string['createdbywunderbyte'] = 'Module de réservation créé par Wunderbyte GmbH';
$string['createical'] = 'Créer événements de calendrier';
$string['createnewbookingoption'] = 'Nouvelle option de réservation';
$string['createnewbookingoptionfromtemplate'] = 'Ajouter une nouvelle option de réservation à partir d\'un modèle';
$string['createnewmoodlecourse'] = 'Créer cours Moodle vide';
$string['createnewmoodlecoursefromtemplate'] = 'Créer cours Moodle depuis modèle';
$string['createnewmoodlecoursefromtemplate_help'] = 'Les modèles doivent être associés au tag défini dans les paramètres, et l\'utilisateur actuel doit disposer des autorisations suivantes sur le cours source :
<br> Le moyen le plus simple est d’être inscrit comme enseignant dans le cours modèle.
<br>
moodle/course:view
moodle/backup:backupcourse
moodle/restore:restorecourse
moodle/question:add';
$string['createnewmoodlecoursefromtemplatewithusers'] = 'Transférer les utilisateurs du cours modèle vers le nouveau cours.';
$string['createoptionsfromoptiondate'] = 'Pour chaque date d’option, créez une nouvelle option';
$string['credits'] = 'Crédits';
$string['credits_help'] = 'Le nombre de crédits qui seront utilisés pour la réservation de cette option.';
$string['creditsmessage'] = 'Il vous reste {$a->creditsleft} sur {$a->maxcredits} crédits.';
$string['csvfile'] = 'Fichier CSV';
$string['currentcategory'] = 'Catégorie d’option de réservation';
$string['custombulkmessagesent'] = 'Message groupé personnalisé envoyé (> 75 % des utilisateurs ayant réservé, min. 3)';
$string['customdatesbtn'] = '<i class="fa fa-plus-square"></i> Dates personnalisées…';
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
$string['customfieldsforfilter'] = 'Champs personnalisés à afficher comme options de filtre';
$string['customfieldsplaceholdertext'] = 'Les champs de profil utilisateur personnalisés et les champs d\'options de réservation personnalisés peuvent être référencés par leur nom court.';
$string['customfieldtype'] = 'Type de champ';
$string['customfieldvalue'] = 'Valeur';
$string['customfieldvalue_help'] = 'Vous pouvez saisir la valeur de votre choix (texte, nombre ou HTML).<br>
 Si vous avez utilisé l\'un des noms de champs spéciaux
 <ul>
 <li>Réunion des équipes</li>
 <li>ZoomRéunion</li>
 <li>BigBlueButtonRéunion</li>
 </ul> alors saisissez le lien complet vers la session de réunion commençant par https:// ou http://';
$string['customform'] = 'Customform';
$string['customformnotchecked'] = 'Vous n\'avez pas encore accepté.';
$string['customformparams_desc'] = 'Utilisez les paramètres définis dans le formulaire personnalisé.';
$string['customformparamsvalue'] = 'Paramètre de formulaire personnalisé';
$string['customformselectoptions'] = '<div class="alert alert-info" role="alert">
<i class="fa fa-info-circle"></i>
<span><b>Les valeurs de sélection peuvent être spécifiées comme suit :</b> <br>
clé => Nom d\'affichage <br>
Détails et valeurs facultatives supplémentaires : <br>
clé (<i>Ne doit contenir ni espaces ni caractères spéciaux</i>) => <br>
Nom d\'affichage (<i>Tel qu\'affiché aux utilisateurs</i>) => <br>
Nombre maximal de réservations (<i>Disponibilité totale partagée entre tous les utilisateurs, affichée aux utilisateurs</i>) => <br>
Prix (<i>Peut être modifié dans le champ de catégorie de prix défini, affiché aux utilisateurs</i>) => <br>
Utilisateurs autorisés (<i>identifiant des utilisateurs ayant accès à cette option</i>) <br>
<b>Exemple :</b> <br>
choisir => Sélectionner… <br>
chambre simple => Chambre simple => 10 => 100 => 1, 2, 3, 4, 5 <br>
chambre double => Chambre double => 5 => étudiant : 100, expert : 200, standard : 150 => 1, 2, 3, 4, 5
</span>
</div>';
$string['customlabelsdeprecated'] = '[DÉPRÉCIÉ] Étiquettes personnalisées';
$string['custommessagesent'] = 'Message personnalisé envoyé';
$string['customprofilefield'] = 'Champ de profil personnalisé à vérifier';
$string['customprofilefieldvalue'] = 'Valeur du champ de profil personnalisé à vérifier';
$string['customuserprofilefield'] = 'Champ de profil utilisateur personnalisé';
$string['customuserprofilefield_help'] = 'Si vous choisissez une valeur ici, la partie « prix » de la campagne ne sera valable que pour les utilisateurs ayant la valeur définie dans le champ personnalisé défini.';
$string['dashboardsummary'] = 'Général';
$string['dashboardsummary_desc'] = 'Contient les paramètres et les statistiques de l’ensemble du site Moodle';
$string['dataincomplete'] = 'L\'enregistrement avec l\'identifiant de composant {$a->id} est incomplet et n\'a pas pu être traité entièrement. Vérifiez le champ « {$a->field} ».';
$string['dateandtime'] = 'Date et heure';
$string['dateerror'] = 'Mauvaise date ligne {$a}:';
$string['datenotset'] = 'Date non fixée';
$string['dateparseformat'] = 'Format de la date';
$string['dateparseformat_help'] = 'Veuillez utiliser le format de date spécifié dans le fichier CSV. Consultez l’aide <a href="https://php.net/manual/fr/function.date.php">ici</a> pour les options.';
$string['dates'] = 'Dates';
$string['datesandentities'] = 'Dates données avec entités données';
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
$string['daystonotifysessionrulenooverride'] = 'Ne pas modifier le nombre de jours (utiliser la règle normalement)';
$string['daystonotifysessionruleoverride'] = 'Nombre de jours avant le début';
$string['daystonotifysessionruleoverride_help'] = 'Ici, vous pouvez modifier le nombre de jours d’exécution des règles de réservation pour cette date.';
$string['daystonotifyteachers'] = 'Nombre de jours avant l\'événement - début de la notification aux enseignants (PRO)';
$string['deduction'] = 'Déduction';
$string['deductionnotpossible'] = 'Tous les enseignants étaient présents à cette date. Aucune déduction ne peut donc être enregistrée.';
$string['deductionreason'] = 'Raison de la déduction';
$string['defaultbookingoption'] = 'Options de réservation par défaut';
$string['defaultcanceldate'] = 'Date d’annulation par défaut';
$string['defaultcanceldate_desc'] = 'Définissez le paramètre par défaut à sélectionner pour l’annulation dans l’instance de réservation.';
$string['defaultdateformat'] = 'j.n.Y H:i:s';
$string['defaultoptionsort'] = 'Try par défaut par colonne';
$string['defaultpricecategoryinfoalert'] = 'La catégorie de prix par défaut porte toujours l\'identifiant « default » et ne peut pas être désactivée.';
$string['defaultpricecategoryname'] = 'Nom de la catégorie de prix par défaut';
$string['defaultpriceformula'] = 'Formule du prix';
$string['defaultpriceformuladesc'] = 'L\'objet JSON permet de configurer le calcul automatique des prix avec une option de réservation.';
$string['defaulttemplate'] = 'Modèle par défaut';
$string['defaulttemplatedesc'] = 'Modèle d\'option de réservation par défaut lors de la création d\'une nouvelle option de réservation.';
$string['defaultvalue'] = 'Valeur du prix par défaut';
$string['defaultvalue_help'] = 'Saisir une valeur par défaut pour chaque prix de cette catégorie. Bien entendu, cette valeur peut être remplacée ultérieurement.';
$string['definecmidforshortcode'] = 'Pour utiliser ce code raccourci, entrez l’identifiant d\'une instance de réservation comme ceci : [courselist cmid=23]';
$string['definedresponsiblecontactrole'] = 'Définir le rôle de la personne de contact responsable d’une option de réservation';
$string['definedresponsiblecontactrole_desc'] = 'Lorsqu’une personne de contact responsable est ajoutée à une option de réservation, le rôle sélectionné lui sera attribué dans le cours Moodle associé.';
$string['definedteacherrole'] = 'Les enseignants de l’option de réservation sont affectés à ce rôle';
$string['definedteacherrole_desc'] = 'Lorsqu’un enseignant est ajouté à une option de réservation, il/elle se verra attribuer ce rôle dans le cours correspondant.';
$string['definefieldofstudy'] = 'Vous pouvez afficher ici toutes les options de réservation de l\'ensemble du domaine d\'études. Pour ce faire, utilisez des groupes portant le nom de votre domaine d\'études. Dans un cours utilisé à la fois en « Psychologie » et en « Philosophie », vous aurez deux groupes, nommés d\'après ces domaines d\'études. Suivez ce schéma pour tous vos cours.
Ajoutez ensuite le champ de réservation personnalisé avec le nom court « recommandé », dans lequel vous saisissez les codes courts, séparés par des virgules, des cours pour lesquels une option de réservation doit être recommandée. Si un utilisateur est abonné à « philosophie », il verra toutes les options de réservation pour lesquelles au moins un cours de « philosophie » est recommandé.';
$string['delcustfield'] = 'Supprimer ce champ et tous les paramètres associés dans les options de réservation';
$string['delete'] = 'Supprimer';
$string['deleteallchildren'] = 'Supprimer tous les enfants de cette option';
$string['deletebooking'] = 'Supprimer cette réservation';
$string['deletebookingaction'] = 'Supprimer ceci après l’action de réservation';
$string['deletebookingcampaign'] = 'Supprimer campagne';
$string['deletebookingcampaignconfirmtext'] = 'Voulez-vous vraiment supprimer la campagne suivante ?';
$string['deletebookinglong'] = 'Voulez-vraiment supprimer cette réservation?';
$string['deletebookingrule'] = 'Supprimer la règle';
$string['deletebookingruleconfirmtext'] = 'Voulez-vous vraiment supprimer la règle suivante ?';
$string['deletecategory'] = 'Annuler';
$string['deletecheckedanswersbody'] = 'Voulez-vous vraiment supprimer les réservations sélectionnées?';
$string['deleteconditionsfrombookinganswer'] = 'Supprimer les données utilisateur du formulaire de réservation';
$string['deletecustomfield'] = 'Supprimer un champ personnalisé ?';
$string['deletecustomfield_help'] = 'Attention : si cette case est cochée, le champ personnalisé associé sera supprimé lors de l\'enregistrement.';
$string['deleted'] = 'Supprimé';
$string['deletedatafrombookinganswer'] = 'Supprimer les données utilisateur du formulaire de réservation';
$string['deletedatafrombookingansweradhoc'] = 'Réservation : Supprimer les données utilisateur du formulaire de réservation (tâche ponctuelle)';
$string['deletedbookings'] = 'Réservations supprimées';
$string['deletedbookingusermessage'] = 'Bonjour {$a->participant},
Votre réservation pour {$a->title} ({$a->startdate} {$a->starttime}) a été annulée.';
$string['deletedbookingusersubject'] = 'Réservation pour {$a->title} annulée';
$string['deletedrule'] = 'Règle supprimée.';
$string['deletedtext'] = 'Message d’annulation de réservation';
$string['deletedtextmessage'] = 'L\'option de réservation a été supprimée : {$a->title}
Utilisateur : {$a->participant}
Titre : {$a->title}
Date : {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Cours : {$a->courselink}
Lien de réservation : {$a->bookinglink}';
$string['deletedtextsubject'] = 'Réservation supprimée : {$a->title} par {$a->participant}';
$string['deletedusers'] = 'Utilisateurs supprimés';
$string['deleteholiday'] = 'Supprimer les vacances';
$string['deleteinfoscheckboxadmin'] = 'Supprimer les données fournies par l’utilisateur une fois l’option terminée.';
$string['deleteinfoscheckboxadminwarning'] = '<div class="alert alert-warning" style="margin-left: 200px;">
<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
<span> Une <a target="_blank" href="{$a}">règle de réservation</a> correspondante doit être configurée pour exécuter cette option !</span>
</div>';
$string['deleteoptiondate'] = 'Supprimer la date';
$string['deleteperformancemeasurement'] = 'Voulez-vous vraiment supprimer cette mesure ?';
$string['deleteperformancemeasurements'] = 'Voulez-vous vraiment supprimer toutes les mesures de ce code court ?';
$string['deleteresponsesactivitycompletion'] = 'Supprimer tous les utilisateurs dont l\'activité est terminée : {$a}';
$string['deleterule'] = 'Supprimer';
$string['deletesemester'] = 'Supprimer le semestre';
$string['deletesubcategory'] = 'Merci d’effacer toutes les sous-catégories de cette catégorie !';
$string['deletethisbookingoption'] = 'Supprimer cette option de réservation';
$string['deleteuserfrombooking'] = 'Voulez-vous vraiment effacer les utilisateurs de la réservation ?';
$string['delnotification'] = 'Vous avez supprimé {$a->del} des {$a->all} utilisateurs. Les utilisateurs ayant effectué une activité ne peuvent pas être supprimés !';
$string['delnotificationactivitycompletion'] = 'Vous avez supprimé {$a->del} des {$a->all} utilisateurs. Les utilisateurs ayant effectué une activité ne peuvent pas être supprimés !';
$string['deny'] = 'Refuser';
$string['denybooking'] = 'Refuser';
$string['denybookinglong'] = 'Voulez-vous vraiment refuser cette réservation ?';
$string['department'] = 'Département';
$string['deputiesalreadyset'] = 'Votre/vos suppléants(s) actuel(s) :';
$string['description'] = 'Description';
$string['descriptionmaxlength'] = 'Taille maximale de la description';
$string['descriptionmaxlength_desc'] = 'La description de l\'option de réservation ne peut pas être plus longue';
$string['details'] = 'Détails';
$string['disablebookingforinstance'] = 'Désactiver toutes les options de réservation de cette instance';
$string['disablebookingusers'] = 'Désactiver les réservations des utilisateurs - masquer le bouton « Réserver maintenant ».';
$string['disablecancel'] = 'Désactiver l\'annulation de cette option de réservation';
$string['disablecancelforinstance'] = 'Désactiver l’annulation pour l\'ensemble de la réservation.
(Si vous activez cette option, il ne sera plus possible d’annuler une réservation pour cette instance.)';
$string['disablepricecategory'] = 'Désactiver la catégorie de prix';
$string['disablepricecategory_help'] = 'Lorsqu\'une catégorie de prix est désactivée, il n\'est plus possible de l\'utiliser.';
$string['displayemptyprice'] = 'Afficher les prix à 0';
$string['displayemptyprice_desc'] = 'Si une option de réservation affiche des prix pour certaines catégories de prix et pas pour d\'autres, vous pouvez décider si les utilisateurs pour qui l’option est gratuite voient le prix de 0.';
$string['displayinfoaboutrules'] = 'Afficher un avertissement concernant la nécessité de configurer des règles ?';
$string['displayloginbuttonforbookingoptions'] = 'Afficher un bouton permettant de rediriger vers le site de connexion pour l’option de réservation';
$string['displayloginbuttonforbookingoptions_desc'] = 'Ce message s’affichera uniquement pour les utilisateurs non connectés.';
$string['displayshoppingcarthistory'] = 'Afficher l\'historique du panier dans « Mes réservations »';
$string['displayshoppingcarthistory_desc'] = 'Les transactions, reçus, etc. doivent-ils être affichés comme avec le nom court du panier d\'achat [shoppingcarthistory] sur la page « Mes réservations » (mybookings.php) ?';
$string['displaytext'] = 'Texte affiché';
$string['dontaddpersonalevents'] = 'Ne pas ajouter d\'événements au calendrier personnel';
$string['dontaddpersonaleventsdesc'] = 'Pour chaque option réservée et pour toutes ses sessions, des événements personnels sont créés dans le calendrier Moodle. Leur suppression améliore les performances des sites à forte charge.';
$string['dontapply'] = 'Ne pas appliquer';
$string['dontmove'] = 'Ne pas déplacer';
$string['dontusefuction'] = 'N’utilisez pas cette fonction';
$string['dontusetemplate'] = 'Ne pas utiliser de modèle';
$string['download'] = 'Télécharger';
$string['downloadallresponses'] = 'Télécharger toutes les réponses pour toutes les options de réservation';
$string['downloaddemofile'] = 'Télécharger fichier démo';
$string['downloadusersforthisoptionods'] = 'Télécharger les utilisateurs au format .ods';
$string['downloadusersforthisoptionxls'] = 'Télécharger les utilisateurs au format .xls';
$string['doyouwanttobook'] = 'Voulez-vous réserver <b>{$a}</b>?';
$string['duedate'] = 'Date d’échéance du versement';
$string['duplicatebookingoption'] = 'Dupliquer cette option de réservation';
$string['duplicatemoodlecourses'] = 'Dupliquer cours Moodle';
$string['duplicatemoodlecourses_desc'] = 'Lorsque ce paramètre est activé et que vous dupliquez une option de réservation, le cours Moodle associé sera également dupliqué. Cette opération sera effectuée par une tâche ponctuelle ; assurez-vous donc que votre tâche CRON s’exécute régulièrement.';
$string['duplicatename'] = 'Le nom de cette option de réservation existe déjà. Veuillez en choisir un autre.';
$string['duplication'] = 'Duplication';
$string['duplicationrestore'] = 'Duplication, sauvegarde et restauration';
$string['duplicationrestorebookingoptions'] = 'Inclure les options de réservation <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['duplicationrestoredesc'] = 'Vous pouvez définir ici les informations à inclure lors de la duplication ou de la sauvegarde/restauration des instances de réservation.';
$string['duplicationrestoreentities'] = 'Inclure les entités';
$string['duplicationrestoreoption'] = 'Options de réservation : Paramètres de duplication <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['duplicationrestoreoption_desc'] = 'Paramètres spécifiques pour la duplication des options de réservation.';
$string['duplicationrestoreprices'] = 'Inclure les prix';
$string['duplicationrestoresubbookings'] = 'Inclure les sous-réservations <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['duplicationrestoreteachers'] = 'Inclure les enseignants';
$string['duration'] = 'Durée';
$string['duration:minutes'] = 'Durée (minutes)';
$string['duration:units'] = 'Unités ({$a} min)';
$string['durationforcertificate'] = '{$a->hours} heure(s) {$a->minutes} minutes';
$string['easyavailabilitypreviouslybooked'] = 'Conditions déjà réservées faciles';
$string['easyavailabilityselectusers'] = 'Conditions des utilisateurs facilement sélectionnés';
$string['easybookingclosingtime'] = 'Réservation facile jusqu\'à l\'heure limite';
$string['easybookingopeningtime'] = 'Heure d\'ouverture de réservation facile';
$string['easytext'] = 'Texte simple, non modifiable';
$string['editaction'] = 'Modifier Action';
$string['editbookingoption'] = 'Modifier l\'option de réservation';
$string['editbookingoptions'] = 'Modifier les options de réservation';
$string['editcampaign'] = 'Modifier la campagne';
$string['editcategory'] = 'Modifier';
$string['editingoptiondate'] = 'Vous êtes en train de modifier cette session';
$string['editinstitutions'] = 'Editer les institutions';
$string['editotherbooking'] = 'Autres règles de réservation';
$string['editperformancemeasurement'] = 'Modifier la mesure du code court {$a}';
$string['editrule'] = 'Modifier';
$string['editsubbooking'] = 'Modifier sous-réservation';
$string['edittag'] = 'Editer';
$string['editteachers'] = 'Modifier';
$string['editteacherslink'] = 'Modifier enseignants';
$string['educationalunitinminutes'] = 'Durée d\'une unité d\'enseignement (minutes)';
$string['educationalunitinminutes_desc'] = 'Saisir la durée d\'une unité d\'enseignement en minutes. Elle sera utilisée pour calculer les unités d\'enseignement réalisées.';
$string['elective'] = 'Optionnel';
$string['electivedeselectbtn'] = 'Désélectionner l\'option';
$string['electiveforcesortorder'] = 'L’enseignant peut imposer l’ordre de tri.';
$string['electivenotbookable'] = 'Non réservable';
$string['electivesbookedsuccess'] = 'Vos cours optionnels sélectionnés ont été réservés avec succès.';
$string['electivesettings'] = 'Paramètres optionnels';
$string['email'] = 'Courriel';
$string['emailbody'] = 'Corps du courriel';
$string['emailsettings'] = 'Paramètres de messagerie <span class="badge bg-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Déprécié</span>';
$string['enable'] = 'Activer';
$string['enablecompletionmincompleted'] = 'Nombre minimal d’options de réservation complétées';
$string['enablecompletionmincompleted_help'] = 'Un utilisateur doit avoir le statut « Terminé » dans au moins autant d\'options de réservation que vous spécifiez ici.
Pour marquer les utilisateurs comme « Terminés », ouvrez la section « Configurer les champs et les colonnes » (de l\'instance de réservation) et ajoutez le champ « Terminé » sous « Gérer les réponses ».
Les utilisateurs peuvent ensuite être marqués comme ayant terminé sur la page de rapport. Cette opération doit être effectuée par un enseignant, un responsable ou un administrateur.';
$string['enablecompletionminnumber'] = 'Nombre minimum :';
$string['enddate'] = 'Date de fin';
$string['endtime'] = 'Heure de fin';
$string['endtimemeasurement'] = 'Temps de mesure';
$string['endtimenotset'] = 'Date de fin non rensignée';
$string['enforceorder'] = 'Appliquer l’ordre de réservation';
$string['enforceorder_help'] = 'Les utilisateurs ne seront inscrits qu’une fois qu’ils auront complété l’option de réservation précédente';
$string['enforceteacherorder'] = 'Faire respecter l’ordre des enseignants';
$string['enforceteacherorder_help'] = 'Les utilisateurs ne pourront pas définir l’ordre des options sélectionnées ; celui-ci sera déterminé par l’enseignant.';
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
$string['enrollink:4'] = 'Il n’y a plus de places disponibles dans le forfait.';
$string['enrollink:5'] = 'Les invités ne sont pas autorisés';
$string['enrollink:6'] = 'Votre enregistrement est complété et doit être validé par une personne autorisée.';
$string['enrollinktriggered'] = 'Génération du lien d\'inscription déclenchée';
$string['enrollinktriggered:description'] = 'L’événement servant de base à la génération automatique d\'un lien d’inscription a été déclenché.';
$string['enrolmentstatus'] = 'Inscrire les utilisateurs au début du cours (Par défaut : non coché &rarr; les inscrire immédiatement).';
$string['enrolmentstatus_help'] = 'Remarque : Pour que l’inscription automatique fonctionne, vous devez modifier le paramètre de l’instance de réservation : « Inscrire automatiquement les utilisateurs » sur « Oui ».';
$string['enrolmultipleusers'] = 'Inscrire plusieurs utilisateurs';
$string['enrolusersaction:alert'] = '<div class="alert alert-info" role="alert">
<i class="fa fa-info-circle" aria-hidden="true"></i>
<span>
Saisissez le nombre par défaut d\'utilisateurs à inscrire (modifiable par l\'utilisateur qui réserve).
Cette fonction s\'applique également au cours sélectionné dans la section « Cours » de Moodle.
</span>
</div>';
$string['enroluserstowaitinglist'] = 'Mettre les utilisateurs ayant réservé sur liste d’attente et les inscrire uniquement après confirmation ?';
$string['enroluserwhobookedtocourse'] = 'Souhaitez-vous également réserver cette option pour vous-même ?';
$string['enroluserwhobookedtocoursewarning'] = 'Si vous n’achetez qu\'une seule place et choisissez de vous inscrire vous-même, aucun lien d’inscription ne sera créé.';
$string['enternote'] = 'Saisissez une note...';
$string['enteruserprofilefield'] = 'Sélectionnez les utilisateurs en saisissant une valeur dans le champ de profil utilisateur personnalisé. Attention ! Cette action concerne tous les utilisateurs de la plateforme.';
$string['entervalidurl'] = 'Veuillez entrer une URL valide !';
$string['entities'] = 'Choisissez des lieux avec plugin d’entités';
$string['entitiesfieldname'] = 'Emplacement';
$string['entitydeleted'] = 'L\'emplacement a été supprimé';
$string['equals'] = 'a exactement cette valeur (texte ou nombre)';
$string['equalsnot'] = 'n\'a pas exactement cette valeur (texte ou nombre)';
$string['equalsnotplain'] = 'n\'a pas exactement cette valeur';
$string['equalsplain'] = 'a exactement cette valeur';
$string['error:bookingstrackernotactivated'] = 'Vous n\'êtes pas autorisé à ouvrir cette page.
Soit le paramètre du suivi des réservations (bookingstracker) n\'est pas activé, soit vous ne disposez pas de Booking PRO (ou votre abonnement Booking PRO a expiré).';
$string['error:campaignend'] = 'La fin de la campagne doit être postérieure à son début.';
$string['error:campaignstart'] = 'Le début de la campagne doit précéder la fin de la campagne.';
$string['error:chooseint'] = 'Vous devez saisir un nombre ici.';
$string['error:choosevalue'] = 'Vous devez choisir une valeur ici.';
$string['error:confirmthatyouaresure'] = 'Merci de confirmer que vous êtes certain.';
$string['error:coursecategoryvaluemissing'] = 'Vous devez choisir une valeur ici car elle est nécessaire comme catégorie de cours pour le cours Moodle créé automatiquement.';
$string['error:deactivatelegacymailtemplates'] = 'Si vous souhaitez utiliser cette règle, vous devez d\'abord <a href="{$a}" target="_blank">désactiver les anciens modèles de courrier électronique</a>.';
$string['error:entervalue'] = 'Vous devez saisir une valeur ici.';
$string['error:failedtosendconfirmation'] = 'L’utilisateur suivant n’a pas reçu de courriel de confirmation

Statut de réservation : {$a->status}
Participant : {$a->participant}
Cours : {$a->title}
Date : {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Lien : {$a->bookinglink}
Cours associé : {$a->courselink}';
$string['error:formcapabilitymissing'] = 'Vous ne disposez pas des autorisations nécessaires pour modifier ce formulaire. Veuillez contacter un administrateur.';
$string['error:identifierexists'] = 'Choisir un autre identifiant. Celui-ci existe déjà.';
$string['error:invalidcmid'] = 'Impossible d\'ouvrir le rapport : aucun identifiant de module de cours (cmid) valide n\'a été fourni. Il doit s\'agir de l\'identifiant d\'une instance de réservation.';
$string['error:limitfactornotbetween1and2'] = 'Vous devez saisir une valeur comprise entre 0 et 2, par exemple 1.2 pour ajouter 20 % de places réservables supplémentaires.';
$string['error:missingblockinglabel'] = 'Veuillez saisir le message qui s’affichera en cas de blocage de la réservation.';
$string['error:missingcapability'] = 'Fonctionnalité manquante. Veuillez contacter un administrateur.';
$string['error:missingteacherid'] = 'Erreur : impossible de charger le rapport car l\'identifiant de l\'enseignant est manquant.';
$string['error:mustnotbeempty'] = 'Ne doit pas être vide.';
$string['error:negativevaluenotallowed'] = 'Merci d\'entrer une valeur positive.';
$string['error:newcoursecategorycfieldmissing'] = 'Vous devez d\'abord créer un <a href="{$a->bookingcustomfieldsurl}" target="_blank">champ personnalisé de réservation</a> pour les nouvelles catégories de cours. Une fois créé, assurez-vous qu\'il est sélectionné dans les <a href="{$a->settingsurl}" target="_blank">paramètres du plugin de réservation</a>.';
$string['error:noendtagfound'] = 'Terminez la section d\'espace réservé « {$a} » par une barre oblique inverse (« / »).';
$string['error:nofieldchosen'] = 'Vous devez choisir un domaine.';
$string['error:percentageavailableplaces'] = 'Vous devez saisir un pourcentage valide compris entre 0 et 100 (sans le signe % !).';
$string['error:pricefactornotbetween0and1'] = 'Vous devez saisir une valeur comprise entre 0 et 1, par exemple 0.9 pour réduire les prix de 10 %.';
$string['error:pricemissing'] = 'Veuillez saisir un prix.';
$string['error:reasonfordeduction'] = 'Veuillez indiquer le motif de la déduction.';
$string['error:reasonfornoteacher'] = 'Indiquer la raison pour laquelle aucun enseignant n\'était présent à cette date.';
$string['error:reasonforsubstituteteacher'] = 'Veuillez indiquer le motif du remplacement du ou des enseignants.';
$string['error:reasontoolong'] = 'Le motif est trop long, saisir un texte plus court.';
$string['error:ruleactionsendcopynotpossible'] = 'Il n’est pas possible d’envoyer une copie par courriel pour l’événement que vous avez choisi.';
$string['error:selflearningcourseallowsnodates'] = 'Les options de réservation de type « {$a} » ne peuvent pas contenir de dates. Veuillez supprimer toutes les dates et enregistrer à nouveau.';
$string['error:semestermissingbutcanceldependentonsemester'] = 'Le paramètre permettant de calculer les périodes d’annulation à partir du début du semestre est actif, mais le semestre est manquant !';
$string['error:taskalreadystarted'] = 'Vous avez déjà commencé une tâche !';
$string['error:tousepriceinstallshoppingcart'] = 'Vous devez installer un panier d\'achat si vous voulez que les utilisateurs achètent des articles ayant un prix.';
$string['error:wrongpagenumberforprebookingpage'] = 'Erreur : Numéro de page incorrect pour la page de pré-réservation.';
$string['error:wrongteacherid'] = 'Erreur : aucun utilisateur n\'a pu être trouvé pour l\'identifiant « teacherid » fourni.';
$string['errorcreationofoptionwentwrong'] = 'Erreur lors de la création de l’option.';
$string['errorduplicatepricecategoryidentifier'] = 'Les identifiants de catégorie de prix doivent être uniques.';
$string['errorduplicatepricecategoryname'] = 'Les noms des catégories de prix doivent être uniques.';
$string['errorduplicatepricecatsortorder'] = 'L’ordre de tri par catégorie de prix doit être unique.';
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
$string['errorloadingtemplate'] = 'Erreur lors du chargement du modèle.';
$string['errorloadinguserdata'] = 'Erreur lors du chargement des données utilisateur.';
$string['errormultibooking'] = 'Une erreur s’est produite lors de la réservation des cours optionnels.';
$string['errornorighttoaccessthisform'] = 'Vous n’êtes pas autorisé à accéder à ce formulaire.';
$string['erroronsetdata'] = 'Erreur lors de l’exécution de set_data.';
$string['erroroptiondateend'] = 'La date de fin doit être postérieure à la date de début.';
$string['erroroptiondatestart'] = 'La date de début doit être antérieure à la date de fin.';
$string['errorpagination'] = 'Veuillez saisir un nombre supérieur à 0';
$string['errorpricecategoryidentifierdefaultnotallowed'] = 'L\'identifiant « default » est réservé à la première catégorie de prix.';
$string['errorpricecategoryidentifiermustbedefault'] = 'L\'identifiant « default » est réservé à la première catégorie de prix.';
$string['errorsemesterend'] = 'La fin du semestre doit se situer après le début du semestre.';
$string['errorsemesterstart'] = 'Le début du semestre doit se situer avant la fin du semestre.';
$string['errortoomanydecimals'] = 'Seules 2 décimales sont autorisées.';
$string['errorupdateofoptionwentwrong'] = 'Erreur lors de la mise à jour de l’option.';
$string['errorusernotfound'] = 'Erreur : L\'organisateur avec l\'identifiant « {$a} » est introuvable.';
$string['eventalreadyover'] = 'Cet événement est déjà terminé.';
$string['eventdesc:bookinganswercancelled'] = 'L\'utilisateur « {$a->user} » a annulé « {$a->relateduser} » de « {$a->title} ».';
$string['eventdesc:bookinganswercancelledself'] = 'L\'utilisateur « {$a->user} » a annulé « {$a->title} ».';
$string['eventdesc:bookinganswercustomformconditionsdeleted'] = 'L\'utilisateur « {$a->user} » a supprimé des données concernant la condition customform de {$a->relateduser} dans bookinanswer avec l\'identifiant « {$a->bookinganswerid} ».';
$string['eventdesc:bookinganswerupdated'] = 'L\'utilisateur « {$a->user} » a mis à jour « {$a->title} » dans la colonne « {$a->column} ».';
$string['eventdescription'] = 'Description de l\'événement';
$string['eventduration'] = 'Durée de l’évènement';
$string['eventpoints'] = 'Points';
$string['eventreportviewed'] = 'Rapport consulté';
$string['eventslist'] = 'Modifications récentes';
$string['eventteacheradded'] = 'Enseignant ajouté';
$string['eventteacherremoved'] = 'Enseignant retiré';
$string['eventtype'] = 'Type d’évènement';
$string['eventtype_help'] = 'Vous pouvez saisir le type d\'événement manuellement ou le sélectionner dans la liste des types d\'événements précédents.
Vous ne pouvez choisir qu\'un seul type d\'événement. Une fois enregistré, il sera ajouté à la liste.';
$string['eventuserprofilefieldsupdated'] = 'Profil utilisateur mis à jour';
$string['excelfile'] = 'Fichier CSV avec la réalisation d’activités';
$string['executerestscript'] = 'Exécuter le script REST';
$string['executiontimes'] = 'À quelle fréquence le code court doit-il être exécuté ?';
$string['existingsubscribers'] = 'Inscrits existants';
$string['expired'] = 'Désolés, cette activité a fermé le {$a} et n’est plus disponible';
$string['extendlimitforoverbooked'] = 'Ajouter les sièges surréservés au facteur appliqué';
$string['extendlimitforoverbooked_help'] = 'Si vous sélectionnez cette option, voici ce qui se passe :
Un cours est limité à 40 participants, mais il est déjà complet avec 2 participants supplémentaires, pour atteindre 42 participants.
Si une augmentation de la limite de 10 % est appliquée à ce cours, la limite passera à 46 (40 + 4 (10 %) + 2 (places supplémentaires)), au lieu de 44 (40 + 4).';
$string['fallbackonlywhenempty'] = 'Utiliser uniquement si le champ du profil utilisateur est vide';
$string['fallbackonlywhennotmatching'] = 'Utiliser en cas d’absence de correspondance (également vide)';
$string['fallbackturnedoff'] = 'Le mode de repli est désactivé';
$string['feedbackurl'] = 'Lien de sondage';
$string['feedbackurl_help'] = 'Saisir le lien d\'un formulaire de rétroaction à envoyer aux participants.
Il peut être ajouté aux courriels avec le marqueur <b>{pollurl}</b}';
$string['feedbackurlteachers'] = 'Lien de sondage des enseignants';
$string['feedbackurlteachers_help'] = 'Saisir le lien d\'un formulaire de rétroaction à envoyer aux enseignants.
Il peut être ajouté aux courriels avec le marqueur <b>{pollurteachersl}</b}';
$string['fieldnamesdontmatch'] = 'Les noms de champs importés ne correspondent pas aux noms de champs définis.';
$string['fieldofstudycohortoptions'] = 'Code court permettant d\'afficher toutes les options de réservation d\'un domaine d\'études.
Ces options sont définies par un groupe de cours portant le même nom. Les options de réservation sont définies par la présence, dans le champ « recommandé », des noms courts d\'au moins un de ces cours, séparés par des virgules.';
$string['fieldofstudyoptions'] = 'Code court permettant d\'afficher toutes les options de réservation d\'un domaine d\'études.
Ces options sont définies par une inscription synchronisée à une cohorte commune et par la condition de disponibilité de réservation : être inscrit à l\'un de ces cours.';
$string['fillinatleastoneoption'] = 'vous devez fournir au moins deux réponses possibles';
$string['filteravailalbetobook'] = 'Disponible à la réservation';
$string['filterbookingavailability'] = 'Disponibilité des réservations';
$string['filterbtn'] = 'Filtre';
$string['filterenddate'] = 'Jusqu\'à';
$string['filterfullybooked'] = 'Complet';
$string['filterstartdate'] = 'De';
$string['firstname'] = 'Prénom';
$string['firstnamerelated'] = 'Prénom de la personne reliée (ex la personne pour laquelle la réservation a été faite)';
$string['forcourse'] = 'pour le cours';
$string['format'] = 'format';
$string['formconfig'] = 'Afficher le formulaire utilisé.';
$string['formmeasurementheading'] = 'Mesures du code court {$a}';
$string['formmeasurementsheading'] = 'Mesures uniques.';
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
$string['globalactivitycompletiontext'] = 'Message à envoyer à l\'utilisateur lorsque l\'option de réservation est complétée (modèle global) <span class="badge bg-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Déprécié</span>';
$string['globalbookedtext'] = 'Confirmation de réservation (modèle global) <span class="badge bg-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Déprécié</span>';
$string['globalbookingchangedtext'] = 'Message à envoyer en cas de modification d\'une option de réservation (envoyé uniquement aux utilisateurs ayant déjà réservé). Utilisez l\'espace réservé {changes} pour afficher les modifications. Saisissez 0 pour désactiver les notifications de modification. (Modèle global) <span class="badge bg-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Déprécié</span>';
$string['globalcurrency'] = 'Devise';
$string['globalcurrencydesc'] = 'Choisir la device pour les options de prix.';
$string['globaldeletedtext'] = 'Message de réservation annulée (modèle global) <span class="badge bg-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Deprecated</span>';
$string['globalmailtemplates'] = 'Modèles de courriel global <span class="badge bg-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Deprecated</span>';
$string['globalmailtemplates_desc'] = 'Après l\'activation, vous pouvez accéder aux paramètres d\'une instance de réservation et définir la source des modèles de courrier électronique sur globale.';
$string['globalnotifyemail'] = 'Notification des participants avant le démarrage (modèle global) <span class="badge bg-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Deprecated</span>';
$string['globalnotifyemailteachers'] = 'Notification de l\'enseignant avant le démarrage (modèle global) <span class="badge bg-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Deprecated</span>';
$string['globalpollurlteacherstext'] = 'Message relatif à l\'URL du sondage envoyé aux enseignants (modèle global) <span class="badge bg-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Déprécié</span>';
$string['globalpollurltext'] = 'Message pour l\'envoi de l\'URL du sondage aux utilisateurs ayant réservé (modèle global) <span class="badge bg-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Déprécié</span>';
$string['globalstatuschangetext'] = 'Message de changement de statut (modèle global) <span class="badge bg-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Deprecated</span>';
$string['globaluserleave'] = 'L\'utilisateur a annulé sa propre réservation (modèle global) <span class="badge bg-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Deprecated</span>';
$string['globalwaitingtext'] = 'Confirmation de la liste d\'attente (modèle global) <span class="badge bg-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Deprecated</span>';
$string['gotobooking'] = '&lt;&lt; Réservations';
$string['gotobookingoption'] = 'Aller à l\'option de réservation';
$string['gotobookingoptionlink'] = '{$a}';
$string['gotomanageresponses'] = '&lt;&lt; Gérer les réservations';
$string['gotomoodlecourse'] = 'Atteindre le cours Moodle';
$string['groupdeleted'] = 'Cette instance de réservation crée automatiquement des groupes dans le cours cible. Cependant, le groupe a été supprimé manuellement dans le cours cible. Cochez la case suivante pour recréer le groupe.';
$string['groupexists'] = 'Le groupe existe déjà dans le cours cible, veuillez choisir un autre nom pour l\'option de réservation.';
$string['groupname'] = 'Nom du groupe';
$string['hascapability'] = 'Sauf s\'il a la capacité';
$string['headerform'] = 'Veuillez choisir';
$string['helptext:emailsettings'] = '<div class="alert alert-warning" style="margin-left: 200px;">
<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
<span>Fonction obsolète. Veuillez migrer vos modèles et paramètres vers <a href="{$a}">Règles de réservation</a></span> !
</div>';
$string['helptext:placeholders'] = '<div class="alert alert-info" style="margin-left: 200px;">
<a data-toggle="collapse" data-bs-toggle="collapse" href="#collapsePlaceholdersHelptext" role="button" aria-expanded="false" aria-controls="collapsePlaceholdersHelptext">
<i class="fa fa-question-circle" aria-hidden="true"></i><span>&nbsp;Afficher les {placeholders} que vous pouvez utiliser dans vos e-mails.</span>
</a>
</div>
<div class="collapse" id="collapsePlaceholdersHelptext">
<div class="card card-body mb-3">
{$a}
</div>
</div>';
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
$string['icalcanceldesc'] = 'Lorsqu’un utilisateur annule une réservation ou est retiré de la liste des utilisateurs ayant effectué une réservation, veuillez joindre un fichier iCal en tant qu’événement annulé.';
$string['icalcfg'] = 'Configuration des pièces jointes iCal';
$string['icalcfgdesc'] = 'Configurer les fichiers iCal.ics qui sont joints aux messages électroniques. Ces fichiers permettent d\'ajouter les dates de l\'évènement au calendrier personnel.';
$string['icalfieldlocation'] = 'Text to display in iCal field location';
$string['icalfieldlocationdesc'] = 'Choisissez dans la liste déroulante le texte à utiliser pour l\'emplacement du champ de calendrier';
$string['icsattachementerror'] = 'Une erreur s\'est produite lors de la tentative de jonction du fichier ICS à l\'e-mail dans le contrôleur de messages.';
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
$string['importdefault'] = 'Prix par défaut d\'une option de réservation. Les prix supplémentaires ne peuvent être spécifiés que si le prix par défaut est défini. Les colonnes doivent correspondre aux noms courts des catégories de réservation.';
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
$string['importpartial'] = 'L’importation n\'a été que partiellement effectuée. Des problèmes sont survenus avec les lignes suivantes, qui n’ont donc pas été importées :';
$string['importsuccess'] = 'L\'importation a réussi. {$a} enregistrement(s) traité(s).';
$string['importteacheremail'] = 'Adresses e-mail des utilisateurs de la plateforme pouvant figurer comme enseignants dans les options de réservation. Séparez les adresses e-mail par une virgule (attention à l\'échappement des caractères spéciaux dans les fichiers CSV contenant des adresses séparées par des virgules !)';
$string['importtext'] = 'Titre d’une option de réservation (synonyme de texte)';
$string['importtileprefix'] = 'Préfixe (ex. : numéro de cours)';
$string['importtitle'] = 'Titre d’une option de réservation';
$string['importuseremail'] = 'Adresses e-mail des utilisateurs de la plateforme ayant réservé cette option. Séparez les adresses e-mail par une virgule (attention à l\'échappement des caractères spéciaux dans les fichiers CSV séparés par des virgules !).';
$string['inarray'] = 'l\'utilisateur a l\'une de ces valeurs séparées par des virgules';
$string['includeteachers'] = 'Inclure les enseignants dans la feuille de présence';
$string['indexnumber'] = 'Numérotage';
$string['info:teachersforoptiondates'] = 'Accédez au <a href="{$a}" target="_self">journal d\'enseignement</a> pour gérer les enseignants pour des dates spécifiques.';
$string['infoalreadybooked'] = '<div class="infoalreadybooked"><i>Vous avez déjà réservé pour cette option.</i></div>';
$string['infonobookingoption'] = 'Pour ajouter une option de réservation, veuillez utiliser le bloc des paramètres ou l\'icône des paramètres en haut de la page.';
$string['infotext:installmoodlebugfix'] = 'Wunderbyte a corrigé un bug dans le noyau de Moodle. Ce correctif n\'est pas encore inclus dans votre version de Moodle. Par conséquent, vous pourriez rencontrer des messages d\'erreur JavaScript à certains endroits. À partir de Moodle 4.1, il suffit d\'installer les mises à jour de sécurité en cours.';
$string['infotext:onlyfordebugging'] = 'Cette page est uniquement accessible en mode débogage';
$string['infotext:prolicensenecessary'] = '<a href="https://showroom.wunderbyte.at/course/view.php?id=62" target="_blank">Obtenez votre licence PRO ici...</a>';
$string['infotext:prolicensenecessarytextandlink'] = 'Vous avez besoin d\'une licence Booking PRO pour utiliser cette fonctionnalité <a href="https://showroom.wunderbyte.at/course/view.php?id=62" target="_blank">Obtenez votre licence PRO ici...</a>';
$string['infotext:scheduledmailswarning'] = 'Videz le cache et rechargez la page pour afficher l’état actuel. <br> Veuillez noter que tous les messages programmés ne seront pas envoyés, car leur validité est vérifiée avant l’envoi.';
$string['infowaitinglist'] = '<div class="infowaitinglist"><i>Vous êtes sur la liste d\'attente pour cette option.</i></div>';
$string['installmentprice'] = 'Prix du versement';
$string['installmoodlebugfix'] = 'Mise à jour de Moodle nécessaire <span class="badge bg-danger text-light"><i class="fa fa-cogs" aria-hidden="true"></i> Important</span>';
$string['instancename'] = 'Nom de l\'instance';
$string['instancenotsavednovalidlicense'] = 'Impossible d’enregistrer cette instance de réservation comme modèle.
Passez à la version PRO pour enregistrer un nombre illimité de modèles.';
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
$string['iselective'] = 'Utiliser l’instance comme optionnel';
$string['iselective_help'] = 'Cela vous permet d’obliger les utilisateurs à réserver plusieurs options de réservation simultanément, dans un ordre précis ou selon des relations spécifiques entre elles. De plus, vous pouvez imposer l’utilisation de crédits.';
$string['isempty'] = 'le champ est vide';
$string['isnotempty'] = 'le champ n\'est pas vide';
$string['issuecertificate'] = 'Délivrer un certificat';
$string['issuecertificatebody'] = 'On vérifie si toutes les conditions sont remplies et, si c\'est le cas, le certificat est délivré conformément aux paramètres.';
$string['journal'] = 'Journal';
$string['json'] = 'Stocke des informations supplémentaires';
$string['keepusersbookedonreducingmaxanswers'] = 'Maintenez les utilisateurs inscrits sur la réduction de limite';
$string['keepusersbookedonreducingmaxanswers_desc'] = 'Maintenez les réservations des utilisateurs même lorsque la limite de places réservables (maxanswers) est réduite.
Exemple : Une option de réservation propose 5 places. Si la limite est réduite à 3, les 5 utilisateurs ayant déjà réservé conservent leur place.';
$string['lastname'] = 'Nom';
$string['lastnamerelated'] = 'Nom de famille de la personne concernée (par exemple, l’utilisateur pour lequel la réservation a été effectuée)';
$string['lblacceptingfrom'] = 'Nom de l’étiquette : Accepter de';
$string['lblbooking'] = 'Nom de l’étiquette : Réservation';
$string['lblbooktootherbooking'] = 'Nom du bouton : Réserver pour l\'utilisateur une autre option de réservation';
$string['lblinstitution'] = 'Nom de l’étiquette : Institution';
$string['lbllocation'] = 'Nom de l’étiquette : Lieu';
$string['lblname'] = 'Nom de l’étiquette : Nom';
$string['lblnumofusers'] = 'Nom de l’étiquette : Nombre d’utilisateurs';
$string['lblsputtname'] = 'Nom de l’étiquette : Envoyer l’url de sondage aux professeurs';
$string['lblsurname'] = 'Nom de l’étiquette : Prénom';
$string['lblteachname'] = 'Nom de l’étiquette : Professeurs';
$string['leftandrightdate'] = '{$a->leftdate} à {$a->righttdate}';
$string['licenseactivated'] = 'Version PRO activée avec succès.<br>(Expire le :';
$string['licenseexpired'] = 'Votre version PRO a expiré ({$a}).
<a href="https://showroom.wunderbyte.at/course/view.php?id=62" target="_blank">
Renouvelez votre licence
</a> pour continuer à utiliser toutes les fonctionnalités.';
$string['licenseinvalid'] = 'Clé de licence invalide';
$string['licensekey'] = 'Clé de licence PRO';
$string['licensekeycfg'] = 'Activer la version PRO';
$string['licensekeycfgdesc'] = '<div class="alert alert-warning"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>
<a href="https://showroom.wunderbyte.at/course/view.php?id=62" target="_blank">
Profitez d\'un essai GRATUIT de Booking PRO pendant 30 jours ! Cliquez ici pour en savoir plus.
</a>';
$string['licensekeycfgdesc:active'] = '<div class="alert alert-info"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>&nbsp;
<a href="https://showroom.wunderbyte.at/course/view.php?id=62" target="_blank">
Lorsque votre licence expire, vous pouvez cliquer ici pour la renouveler.
</a>
</div>';
$string['licensekeydesc'] = 'Télécharger une clé de licence valide pour activer la version PRO.';
$string['limit'] = 'Limite';
$string['limitanswers'] = 'Limiter le nombre de participants';
$string['limitanswers_help'] = 'Si vous changez cette option et que vous avez enregistré des personnes, vous pouvez les enlever sans notification !';
$string['limitchangestrackinginrules'] = 'Limitez les réactions aux changements de règles de réservation';
$string['limitchangestrackinginrulesdesc'] = 'Si vous activez ce paramètre, la règle de réservation qui réagit aux modifications ne s’appliquera qu’aux champs sélectionnés.';
$string['limitedseats'] = 'Il ne reste que {$a} places libres';
$string['limitfactor'] = 'Facteur de limite de réservation';
$string['limitfactor_help'] = 'Indiquez un coefficient multiplicateur pour la limite de réservation. Par exemple, pour augmenter la limite de 20 %, saisissez <b>1.2</b>. Arrondi à l\'entier supérieur. Indiquez 0 pour ne pas avoir de limite.';
$string['linkbacktocourse'] = 'Lien vers l\'option de réservation';
$string['linkgotobookingoption'] = 'Accéder à l\'option réservée : {$a}</a>';
$string['linknotavailableyet'] = 'Le lien pour accéder à la rencontre est disponible seulement 15 minutes avant le début et jusqu\'à la fin de la session.';
$string['linknotvalid'] = 'Ce lien ou cet évènement n\'est pas accessible.
S\'il s\'agit d\'un évènement que vous avez réservé, veuillez vérifier à nouveau peu de temps avant le début de la réunion.';
$string['linktocalendarurltext'] = 'Lien vers le calendrier';
$string['linktocourse'] = 'Lien vers le cours';
$string['linktomoodlecourseonbookedbutton'] = 'Afficher le lien vers le cours Moodle directement sur le bouton de réservation';
$string['linktomoodlecourseonbookedbutton_desc'] = 'Au lieu d\'un lien supplémentaire, cela transformera le bouton réservé en un lien vers le cours Moodle';
$string['linktoshowroom:bookingrules'] = '<div class="alert alert-secondary"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>&nbsp;
<a href="https://showroom.wunderbyte.at/course/view.php?id=70" target="_blank">
Cliquez ici pour en savoir plus sur les règles de réservation.
</a>
</div>';
$string['linktoteachersinstancereport'] = '<p><a href="{$a}" target="_self">&gt;&gt; Accéder au rapport des enseignants pour l\'instance de réservation</a></p>';
$string['listentoaddresschange'] = 'Réagir au changement d’adresse de l’option de réservation';
$string['listentoresponsiblepersonchange'] = 'Réagir au changement de responsable de l’option de réservation';
$string['listentoteacherschange'] = 'Réagir au changement d’enseignant de l’option de réservation';
$string['listentotextchange'] = 'Réagir à la modification du texte de l’option de réservation';
$string['listentotimestampchange'] = 'Réagir au changement d’heure (et de jour) de l’option de réservation';
$string['listtoapprove'] = 'liste à approuver';
$string['location'] = 'Lieu';
$string['location_help'] = 'Vous pouvez saisir le nom du lieu manuellement ou le choisir dans la liste des lieux déjà enregistrés.
Vous ne pouvez sélectionner qu’un seul lieu. Une fois enregistré, le lieu sera ajouté à la liste.';
$string['loginbuttonforbookingoptionscoloroptions'] = 'Choisissez le style (couleur) du bouton affiché';
$string['loginbuttonforbookingoptionscoloroptions_desc'] = 'Utilise les styles Bootstrap 4. Les couleurs correspondent à l\'application par défaut.';
$string['loopprevention'] = 'L’espace réservé {$a} provoque une boucle. Veuillez le remplacer.';
$string['lowerthan'] = 'est inférieur à (nombre)';
$string['mail'] = 'Courriel';
$string['mailconfirmationsent'] = 'Vous allez recevoir sous peu une confirmation par courriel';
$string['mailintervalwarning'] = 'Veuillez noter que si vous modifiez cette règle ultérieurement, les exécutions précédemment planifiées (déclenchées par des événements passés) ne seront plus effectuées.';
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
$string['manageoptiontemplates'] = 'Gérer les modèles d\'options de réservation';
$string['manageresponses'] = 'Gérer les réponses';
$string['manageresponsesdownloadfields'] = 'Gérer les réponses - Télécharger (CSV, XLSX…)';
$string['manageresponsespagefields'] = 'Gérer les réponses - Page';
$string['mandatory'] = 'obligatoire';
$string['matchuserprofilefield'] = 'Sélectionnez les utilisateurs en faisant correspondre le champ dans l\'option de réservation et le champ de profil utilisateur.';
$string['maxanswers'] = 'Limite de réponses';
$string['maxcredits'] = 'Crédits maximum à utiliser';
$string['maxcredits_help'] = 'Vous pouvez définir le nombre maximal de crédits que les utilisateurs peuvent ou doivent utiliser lors de la réservation d\'options. Vous pouvez également définir, pour chaque option de réservation, sa valeur en crédits.';
$string['maxoptionsfromcategory'] = 'Limiter le nombre de réservations par catégorie';
$string['maxoptionsfromcategorycount'] = 'Combien d\'options de réservation un utilisateur peut-il réserver au maximum dans la catégorie « {$a} » ? Ceci s\'applique à chaque champ sélectionné ci-dessous, et 0 signifie illimité.';
$string['maxoptionsfromcategorydesc'] = 'Les paramètres exacts sont définis lors de la réservation. Si vous le souhaitez, cochez la case, enregistrez et définissez le champ à sélectionner à l\'étape suivante.';
$string['maxoptionsfromcategoryfield'] = 'Quel champ doit être utilisé pour les restrictions ?';
$string['maxoptionsfromcategoryfielddesc'] = 'Sélectionnez un champ dont les valeurs peuvent être utilisées pour limiter la réservation de plusieurs options pour les utilisateurs dans l\'instance de réservation.';
$string['maxoptionsfromcategoryvalue'] = 'Quelle valeur faut-il indiquer dans « {$a} » pour que cette restriction soit appliquée ?';
$string['maxoptionsfrominstance'] = 'Cette limitation s\'applique uniquement aux réservations de cette instance';
$string['maxoptionsstring'] = 'Vous avez atteint le nombre maximal de réservations de ce type.';
$string['maxoptionsstringdetailed'] = 'Vous avez atteint le nombre maximal de {$a->max} réservations de type « {$a->type}»  (dans la catégorie « {$a->category} ») : <br> {$a->maxoptions}';
$string['maxoverbooking'] = 'Nombre max. de places sur la liste d’attente';
$string['maxoverbooking_help'] = 'Saisissez « -1 » pour une liste d\'attente illimitée et « 0 » pour désactiver la liste d\'attente.';
$string['maxparticipantsnumber'] = 'Nombre max. de participants';
$string['maxparticipantsnumber_help'] = 'Saisissez « 0 » pour un accès illimité';
$string['maxperuser'] = 'Nombre max. de réservations par utilisateur';
$string['maxperuser_help'] = 'Nombre maximal de réservations qu\'un utilisateur peut effectuer simultanément pour cette activité.

<b>Attention :</b> Dans les paramètres du plugin de réservation, vous pouvez choisir d\'inclure ou non les utilisateurs ayant terminé ou participé à l\'activité, ainsi que les options de réservation déjà passées, afin de déterminer le nombre maximal de réservations qu\'un utilisateur peut effectuer dans cette instance.';
$string['maxperuserdontcountcompleted'] = 'Nombre maximal de réservations : Ignorer les réservations terminées';
$string['maxperuserdontcountcompleted_desc'] = 'Ne tenez pas compte des réservations marquées comme « terminées » ou dont le statut de présence est « En présence » ou « Terminé » lors du calcul du nombre maximal de réservations par utilisateur et par instance.';
$string['maxperuserdontcountnoshow'] = 'Nombre maximal de réservations : Ignorer les utilisateurs qui ne se sont pas présentés';
$string['maxperuserdontcountnoshow_desc'] = 'Ne pas comptabiliser les réservations marquées comme « Non-présentation »
lors du calcul du nombre maximal de réservations par utilisateur et par instance';
$string['maxperuserdontcountpassed'] = 'Nombre maximal de réservations : Ignorer les cours réussis';
$string['maxperuserdontcountpassed_desc'] = 'Lors du calcul du nombre maximal de réservations par utilisateur et par instance, ne pas tenir compte des options de réservation déjà passées.';
$string['maxperuserwarning'] = 'Vous avez actuellement utilisé {$a->count} sur un maximum de {$a->limit} réservations disponibles ({$a->eventtype}) pour votre compte utilisateur.';
$string['messagebutton'] = 'MEssage';
$string['messageprovider:bookingconfirmation'] = 'Confirmations de réservation';
$string['messageprovider:sendmessages'] = 'Peut envoyer des messages';
$string['messagesend'] = 'Votre message a été envoyé avec succès.';
$string['messagesent'] = 'Message envoyé';
$string['messagesubject'] = 'Sujet';
$string['messagetext'] = 'Message';
$string['minanswers'] = 'Nombre minimum de participants';
$string['minanswers_help'] = '« 0 » signifie aucun minimum';
$string['minutes'] = '{$a} minutes';
$string['missinghours'] = 'Heures manquantes';
$string['missinglabel'] = 'Le fichier CSV importé ne contient pas la colonne obligatoire {$a}. Les données ne peuvent pas être importées.';
$string['mobileappheading'] = 'Application mobile';
$string['mobileappheading_desc'] = 'Choisissez votre instance de réservation à afficher sur les applications mobiles Moodle connectées.';
$string['mobileappnobookinginstance'] = 'Aucune instance de réservation sur votre plateforme';
$string['mobileappnobookinginstance_desc'] = 'Vous devez créer au moins une instance de réservation';
$string['mobileappprice'] = 'Prix';
$string['mobileappsetinstance'] = 'Instance de réservation';
$string['mobileappsetinstancedesc'] = 'Choisissez l’instance de réservation qui doit s’afficher sur l’application mobile.';
$string['mobilefieldrequired'] = 'Ce champ est obligatoire';
$string['mobilenotification'] = 'Le formulaire a été soumis';
$string['mobileresetsubmission'] = 'Réinitialiser le formulaire de soumission';
$string['mobilesetsubmission'] = 'Soumettre';
$string['mobilesettings'] = 'Paramètres de l’application Moodle';
$string['mobilesettings_desc'] = 'Ici, vous pouvez définir les paramètres de l’application mobile Moodle.';
$string['mobilesubmittedsuccess'] = 'Vous pouvez continuer et réserver le cours';
$string['mobileviewoptionsdesc'] = 'Sélection des vues mobiles disponibles';
$string['mobileviewoptionstext'] = 'Vues mobiles';
$string['mod/booking:bookanyone'] = 'Réservez n’importe qui';
$string['mod/booking:expertoptionform'] = 'Option de réservation pour les experts';
$string['mod/booking:reducedoptionform1'] = 'Option de réservation réduite 1';
$string['mod/booking:reducedoptionform2'] = 'Option de réservation réduite 2';
$string['mod/booking:reducedoptionform3'] = 'Option de réservation réduite 3';
$string['mod/booking:reducedoptionform4'] = 'Option de réservation réduite 4';
$string['mod/booking:reducedoptionform5'] = 'Option de réservation réduite 5';
$string['mod/booking:seepersonalteacherinformation'] = 'Voir les informations personnelles de l’enseignant';
$string['modaloptiondateformtitle'] = 'Dates personnalisées';
$string['modulename'] = 'Réservation';
$string['modulenameplural'] = 'Réservations';
$string['monday'] = 'Lundi';
$string['movedbookinghistory'] = 'L\'option de réservation a été déplacée de la réservation avec l\'identifiant : {a->oldbooking} vers {$a->newbooking}.';
$string['moveoption'] = 'Déplacer l’option de réservation';
$string['moveoption_help'] = 'Déplacer l’option de réservation vers une autre instance de réservation';
$string['moveoptionto'] = 'Déplacer l\'option de réservation vers une autre instance de réservation';
$string['multiplebookings'] = 'Autoriser à réserver à nouveau';
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
$string['nextruntime'] = 'Prévu pour';
$string['no'] = 'Non';
$string['nobookinginstancesexist'] = 'Aucune instance de réservation n\'existe encore';
$string['nobookingpossible'] = 'Aucune réservation possible.';
$string['nobookingselected'] = 'Aucune option de réservation sélectionnée';
$string['nocancelreason'] = 'Vous devez donner une raison pour annuler cette option de réservation';
$string['nocfnameselected'] = 'Aucune sélection. Saisissez un nouveau nom ou sélectionnez-en un dans la liste.';
$string['nocomments'] = 'Commentaires désactivés';
$string['noconfirmationworkflow'] = 'Aucune confirmation nécessaire';
$string['nocourse'] = 'Aucun cours sélectionné pour cette option de réservation';
$string['nocourseselected'] = 'Aucun cours sélectionné';
$string['nodatesstring'] = 'Il n\'y a actuellement aucune date associée à cette option de réservation';
$string['nodatesstring_desc'] = 'aucune date';
$string['nodescriptionmaxlength'] = 'Aucune limite de longueur pour la description';
$string['nodirectbookingbecauseofprice'] = 'La réservation pour d\'autres personnes n\'est que partiellement possible avec cette option. Voici pourquoi :
<ul>
<li>Un prix est saisi</li>
<li>Le module Panier est installé</li>
<li>La liste d\'attente n\'est pas désactivée globalement</li>
</ul>
Ce comportement vise à éviter les réservations « mixtes » avec et sans panier. Veuillez utiliser la fonction de caisse du panier pour réserver pour les utilisateurs.';
$string['noelement'] = 'Aucun élément';
$string['noeventtypeselected'] = 'Aucun type d\'événement sélectionné';
$string['nofieldchosen'] = 'Aucun champ choisi';
$string['nofieldofstudyfound'] = 'Aucun champ n’a pu être déterminé via des cohortes';
$string['noformlink'] = 'Aucun lien vers une option de réservation';
$string['nogrouporcohortselected'] = 'Vous devez sélectionner au moins un groupe ou une cohorte.';
$string['noguestchoose'] = 'Désolés, les invités ne sont pas autorisés à entrer des données';
$string['noinstitutionselected'] = 'Aucune institution sélectionnée';
$string['nolabels'] = 'Aucune étiquette de colonne définie dans l\'objet Paramètres.';
$string['nolocationselected'] = 'Aucun emplacement sélectionné';
$string['nomoodlecourseconnection'] = 'Aucune connexion au cours Moodle';
$string['nomoreseats'] = 'Il n\'y a plus de places disponibles, vous avez réservé la dernière place pour vous.';
$string['nooptionselected'] = 'Aucune option de réservation sélectionnée';
$string['nooverlapblocking'] = 'Cette option ne peut pas être réservée car elle chevauche vos options déjà réservées : {$a}';
$string['nooverlappingselectblocking'] = 'Réservation en bloc';
$string['nooverlappingselectinfo'] = 'Si cette option de réservation est sélectionnée alors que les séances se chevauchent avec une autre, que doit-il se passer ?';
$string['nooverlappingselectwarning'] = 'Afficher l\'avertissement';
$string['nooverlappingsettingcheckbox'] = 'Restreindre la réservation des options qui se chevauchent';
$string['nooverlapwarning'] = 'Attention, cette option chevauche vos options déjà réservées : {$a}';
$string['nopermissiontoaccesscontent'] = '<div class="alert alert-danger" role="alert">Vous n\'avez pas l\'autorisation d\'accéder à ce contenu.</div>';
$string['nopermissiontoaccesspage'] = '<div class="alert alert-danger" role="alert">Vous n\'avez pas l\'autorisation d\'accéder à cette page.</div>';
$string['nopermissiontoexecuteaction'] = '<div class="alert alert-danger" role="alert">Vous n\'êtes pas autorisé à exécuter cette action.</div>';
$string['nopricecategoriesyet'] = 'Aucune catégorie de prix n’a encore été créée.';
$string['nopricecategoryselected'] = 'Saisissez le nom d’une nouvelle catégorie de prix';
$string['nopriceformulaset'] = 'Aucune formule définie sur la page des paramètres. <a href="{$a->url}" target="_blank">Définissez-la ici.</a>';
$string['nopriceisset'] = 'Aucun prix n’a été fixé pour la catégorie de prix {$a}';
$string['noratings'] = 'Évaluation désactivée';
$string['norestriction'] = 'Aucune restriction';
$string['noresultsviewable'] = 'Les résultats ne sont pas actuellement accessibles.';
$string['norighttobook'] = 'Réserver n’est pas possible pour votre rôle utilisateur. Merci de contacter l’administrateur du site afin qu’il vous donne les droits appropriés ou bien identifiez vous.';
$string['norowsselected'] = 'Vous n\'avez rien sélectionné. Veuillez fermer cette fenêtre et sélectionner d\'abord les lignes auxquelles vous souhaitez appliquer cette action.';
$string['noruleselected'] = 'Aucune règle sélectionnée';
$string['noselection'] = 'Aucune sélection';
$string['nosemester'] = 'Aucun semestre choisi';
$string['nosubscribers'] = 'Il n’y a pas de professeur assigné !';
$string['notallbooked'] = 'Les utilisateurs suivants n\'ont pas pu être réservés en raison du nombre maximal de réservations par utilisateur atteint ou du manque de places disponibles pour l\'option de réservation : {$a}';
$string['notallowedtoconfirm'] = 'Pas autorisé à confirmer';
$string['notanswered'] = 'Pas de réponse';
$string['notateacher'] = 'L\'utilisateur sélectionné n\'enseigne aucun cours et n\'est probablement pas un enseignant.';
$string['notbookable'] = 'Non réservable';
$string['notbookablecombiantion'] = 'Cette combinaison d\'options n\'est pas autorisée';
$string['notbooked'] = 'Pas encore réservé';
$string['notconectedbooking'] = 'Pas connecté';
$string['noteacherfound'] = 'L\'utilisateur spécifié comme enseignant à la ligne {$a} n\'existe pas sur la plateforme.';
$string['noteacherset'] = 'Pas d\'enseignant';
$string['notemplate'] = 'Ne pas utiliser comme modèle';
$string['notemplateyet'] = 'Pas encore de modèle';
$string['notenoughcreditstobook'] = 'Crédit insuffisant pour réserver';
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
$string['onecompetencymustbefound'] = 'L’utilisateur doit posséder au moins une de ces compétences.';
$string['onecoursemustbefound'] = 'L\'utilisateur doit être inscrit à au moins un seul de ces cours';
$string['onlineoptiondate'] = 'Se déroule en ligne';
$string['onlyaddactionsonsavedoption'] = 'Les actions après la réservation ne peuvent être ajoutées qu\'une fois l\'option de réservation enregistrée.';
$string['onlyaddentitiesonsavedsubbooking'] = 'Vous devez enregistrer cette sous-réservation avant de pouvoir ajouter une entité.';
$string['onlyaddsubbookingsonsavedoption'] = 'Vous devez enregistrer cette option de réservation avant de pouvoir ajouter des sous-réservations.';
$string['onlythisbookingoption'] = 'Uniquement cette option de réservation';
$string['onlyusersfrominstitution'] = 'Vous ne pouvez ajouter que des utilisateurs de cette institution : {$a}';
$string['onwaitinglist'] = 'Vous êtes sur la liste d’attente';
$string['openbookingdetailinsametab'] = 'Afficher directement la vue détaillée en cliquant sur le titre de l’option de réservation';
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
$string['optiondatefromevent'] = 'Si l’événement est lié à une date précise, vous pouvez utiliser cet espace réservé pour l’afficher.';
$string['optiondates'] = 'Dates';
$string['optiondatesmanager'] = 'Gérer les options de dates';
$string['optiondatesmessage'] = 'Session {$a->number} : {$a->date} <br> De : {$a->starttime} <br> À : {$a->endtime}';
$string['optiondatessuccessfullydelete'] = 'L\'heure de la session a été supprimée.';
$string['optiondatessuccessfullysaved'] = 'L\'heure de la session a été sauvegardée.';
$string['optiondatestart'] = 'Début';
$string['optiondatesteacheradded'] = 'L’enseignant a été ajouté à une date d’option de réservation spécifique.';
$string['optiondatesteacherdeleted'] = 'L’enseignant a été retiré de la date d’option de réservation spécifique.';
$string['optiondatesteachersreport'] = 'Remplacements / Dates annulées';
$string['optiondatesteachersreport_desc'] = 'Ce rapport donne un aperçu de la présence de l\'enseignant à une date précise.

Par défaut, chaque date sera renseignée avec le nom de l\'enseignant concerné. Vous pouvez remplacer certaines dates par des enseignants remplaçants.';
$string['optiondatestime'] = 'Durée de la séance';
$string['optionformconfig'] = 'Configurer les formulaires d’options de réservation (PRO)';
$string['optionformconfig:nobooking'] = 'Vous devez créer au moins une instance de réservation avant de pouvoir utiliser ce formulaire !';
$string['optionformconfiggetpro'] = 'Avec Booking <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>, vous avez la possibilité de créer des formulaires individuels par glisser-déposer
pour des rôles et contextes d\'utilisateurs spécifiques (par exemple, pour une instance de réservation spécifique ou à l\'échelle du système).';
$string['optionformconfiginfotext'] = 'Grâce à cette fonctionnalité PRO, vous pouvez créer vos propres formulaires de réservation par simple glisser-déposer et à l\'aide de cases à cocher. Ces formulaires sont stockés dans un contexte spécifique (par exemple, une instance de réservation, ou à l\'échelle du système). Seuls les utilisateurs disposant des autorisations requises peuvent y accéder.';
$string['optionformconfignotsaved'] = 'Aucune configuration particulière n’a été enregistrée pour votre formulaire';
$string['optionformconfigsaved'] = 'Configuration du formulaire d’option de réservation enregistrée.';
$string['optionformconfigsavedcourse'] = 'La définition de votre formulaire a été enregistrée au niveau du contexte du cours.';
$string['optionformconfigsavedcoursecat'] = 'Votre définition de formulaire a été enregistrée au niveau du contexte dans la catégorie de cours';
$string['optionformconfigsavedmodule'] = 'La définition de votre formulaire a été enregistrée dans le niveau de contexte du module';
$string['optionformconfigsavedother'] = 'Votre définition de formulaire a été enregistrée au niveau de contexte {$a}';
$string['optionformconfigsavedsystem'] = 'La définition de votre formulaire a été enregistrée dans le système de niveau de contexte.';
$string['optionformconfigsubtitle'] = '<p>Désactiver les fonctionnalités inutiles afin de simplifier le formulaire de réservation pour vos administrateurs.</p>

<p><strong>ATTENTION :</strong> Ne désactivez les champs que si vous êtes absolument certain de ne pas en avoir besoin !</p>';
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
$string['optionstoconfirm'] = 'Options à confirmer';
$string['optiontemplate'] = 'Modèle d\'option';
$string['optiontemplatename'] = 'Nom du modèle d\'option';
$string['optiontemplatenotsavednovalidlicense'] = 'Impossible d\'enregistrer le modèle d\'option de réservation.
Passez à la version PRO pour enregistrer un nombre illimité de modèles.';
$string['optiontemplatessettings'] = 'Modèles d’options de réservation';
$string['optiontypefilternormal'] = 'Normal';
$string['optionviewcustomfields'] = 'Afficher les champs personnalisés sur la page de détail';
$string['optionviewcustomfieldsdesc'] = 'Sélectionnez les champs personnalisés d\'option de réservation que vous souhaitez afficher sur la page de détails d\'une option de réservation. Pour modifier l\'ordre des champs personnalisés sur la page de détails, il vous suffit de modifier leur ordre <a href="/mod/booking/customfield.php" target="_blank">ici</a>';
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
$string['placeholdernotresolved'] = 'L’espace réservé {$a->classname} qui doit être résolu n’a pas pu être résolu.';
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
$string['pollurlplaceholdersexplanation'] = 'Utilisez des espaces réservés comme ceci : /mod/surveypro/view.php?myname={firstname} <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['pollurlplaceholdersnoproversion'] = 'Avec <a href="{$a}" target="_blank">Booking PRO</a>, vous pouvez utiliser des espaces réservés dans l\'URL du sondage.';
$string['pollurlteachers'] = 'URL de sondage pour les professeurs';
$string['pollurlteacherstemplate'] = 'Modèle d’URL pour le sondage auprès des enseignants';
$string['pollurlteacherstext'] = 'URL d’envoi de sondage pour les professeurs';
$string['pollurlteacherstextmessage'] = 'Veuillez répondre au sondage

URL du sondage : <a href="{pollurlteachers}" target="_blank">{pollurlteachers}</a>';
$string['pollurlteacherstextsubject'] = 'Veuillez répondre au sondage';
$string['pollurltemplate'] = 'Modèle d’URL pour le sondage';
$string['pollurltemplate_desc'] = 'Vous pouvez définir ici un modèle pour l’URL du sondage. Ce modèle sera utilisé pour toutes les nouvelles options de réservation.';
$string['pollurltemplateheading'] = 'Modèle d’URL pour le sondage';
$string['pollurltext'] = 'Envoyer l’URL de sondage';
$string['pollurltextmessage'] = 'Veuillez répondre au sondage

URL du sondage : <a href="{pollurl}" target="_blank">{pollurl}</a>';
$string['pollurltextsubject'] = 'Veuillez répondre au sondage';
$string['populatefromtemplate'] = 'Remplir à partir du modèle';
$string['postprogressstring'] = '% complété';
$string['potentialsubscribers'] = 'Abonnés potentiels';
$string['prepareimport'] = 'Préparer l\'importation';
$string['presence'] = 'Présence';
$string['presencechanged'] = 'Présence modifiée';
$string['presencechangedhistory'] = 'La présence a été modifiée de « {$a->presenceold} » à « {$a->presencenew} ».';
$string['presencechangedinfo'] = 'La présence de {$a->relateduser} a été modifiée de « {$a->presenceold} » à « {$a->presencenew} ».';
$string['presencecount'] = 'Nombre de présences';
$string['presenceoptions'] = 'Options pour le statut de présence';
$string['presenceoptions_desc'] = 'Quel statut devrait être possible ?';
$string['presencestatustoissuecertificate'] = 'Problème de certification avec le statut de présence <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['presencestatustoissuecertificate_desc'] = 'Si cette option est activée, vous ne pourrez déclencher l’émission d\'un certificat qu’en cas de présence sélectionnée. La finalisation de la réservation n’entraînera alors plus l’émission d\'un certificat.';
$string['previous'] = 'Précédent';
$string['previouselybooked'] = 'Précédemment réservé';
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
$string['pricecategoryfallback'] = 'Recourir à la catégorie de prix par défaut';
$string['pricecategoryfallback_desc'] = 'Utiliser la catégorie de prix par défaut lorsqu’aucune catégorie correspondante n’est trouvée.';
$string['pricecategoryfield'] = 'Champ du profil utilisateur pour la catégorie de prix';
$string['pricecategoryfielddesc'] = 'Sélectionnez le champ du profil utilisateur, qui stocke l’identifiant de catégorie de prix pour chaque utilisateur.';
$string['pricecategoryidentifier'] = 'Identifiant de catégorie de prix';
$string['pricecategoryidentifier_help'] = 'Saisissez un court texte pour identifier la catégorie, par exemple « etud » ou « acad ».';
$string['pricecategoryname'] = 'Nom de la catégorie de prix';
$string['pricecategoryname_help'] = 'Saisissez le nom complet de la catégorie de prix à afficher dans les options de réservation, par exemple « Prix étudiant ».';
$string['pricecatsortorder'] = 'Ordre de tri (nombre)';
$string['pricecatsortorder_help'] = 'Saisissez un nombre entier. « 1 » signifie que la catégorie de prix sera affichée en première position, « 2 » en deuxième position, etc.';
$string['pricecurrency'] = 'Devise';
$string['pricefactor'] = 'Facteur de prix';
$string['pricefactor_help'] = 'Indiquez le coefficient multiplicateur du prix. Par exemple, pour appliquer une réduction de 20 %, saisissez la valeur <b>0.8</b>.';
$string['priceformulaadd'] = 'Valeur absolue';
$string['priceformulaadd_help'] = 'Valeur supplémentaire à <strong>ajouter</strong> au résultat.';
$string['priceformulaheader'] = 'Formule de prix <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['priceformulaheader_desc'] = 'Utilisez une formule de prix pour calculer automatiquement les prix des options de réservation.';
$string['priceformulainfo'] = '<a data-toggle="collapse" data-bs-toggle="collapse" href="#priceformula" role="button" aria-expanded="false" aria-controls="priceformula">
<i class="fa fa-code"></i> Afficher le JSON de la formule de prix...
</a>
<div class="collapse" id="priceformula">
<samp>{$a->formula}</samp>
</div><br>
<a href="{$a->url}" target="_blank"><i class="fa fa-edit"></i> Modifier la formule...</a><br><br>
Ci-dessous, vous pouvez également ajouter manuellement un facteur (multiplication) et une valeur absolue (addition) à la formule.';
$string['priceformulaisactive'] = 'Lors de l’enregistrement, les prix seront calculés à l’aide de la formule de prix (cela remplacera les prix actuels).';
$string['priceformulamultiply'] = 'Facteur manuel';
$string['priceformulamultiply_help'] = 'Valeur supplémentaire à <strong>multiplier</strong> le résultat.';
$string['priceformulaoff'] = 'Empêcher le recalcul des prix';
$string['priceformulaoff_help'] = 'Activez cette option pour empêcher la fonction « Calculer tous les prix à partir de
l’instance avec formule » de recalculer les prix de cette option de réservation.';
$string['priceisalwayson'] = 'Prix toujours actifs';
$string['priceisalwayson_desc'] = 'Si vous cochez cette case, vous ne pourrez plus désactiver les prix des options de réservation individuelles.
Vous pourrez toutefois toujours définir un prix de 0 EUR.';
$string['privacy:metadata:bookinganswers'] = 'Représente la réservation d’un événement';
$string['privacy:metadata:bookinganswers:bookingid'] = 'Identifiant de l’instance de réservation';
$string['privacy:metadata:bookinganswers:completed'] = 'L’utilisateur qui a effectué la réservation a terminé la tâche';
$string['privacy:metadata:bookinganswers:frombookingid'] = 'Identifiant de la réservation associée';
$string['privacy:metadata:bookinganswers:notes'] = 'Notes additionnelles';
$string['privacy:metadata:bookinganswers:numrec'] = 'Numéro d’enregistrement';
$string['privacy:metadata:bookinganswers:optionid'] = 'Identifiant de l’option de réservation';
$string['privacy:metadata:bookinganswers:status'] = 'Informations sur le statut de cette réservation';
$string['privacy:metadata:bookinganswers:timecreated'] = 'Date et heure de la création de la réservation';
$string['privacy:metadata:bookinganswers:timemodified'] = 'Date et heure de la dernière modification de la réservation';
$string['privacy:metadata:bookinganswers:userid'] = 'L’utilisateur inscrit à cet événement';
$string['privacy:metadata:bookinganswers:waitinglist'] = 'Vrai si l\'utilisateur est sur la liste d’attente';
$string['privacy:metadata:bookingenrollinkbundles'] = 'Ensemble de lieux';
$string['privacy:metadata:bookingenrollinkbundles:baid'] = 'Identifiant de la réponse de réservation';
$string['privacy:metadata:bookingenrollinkbundles:courseid'] = 'Identifiant du cours';
$string['privacy:metadata:bookingenrollinkbundles:erlid'] = 'Valeur de hachage à vérifier';
$string['privacy:metadata:bookingenrollinkbundles:optionid'] = 'Identifiant de l’option de réservation';
$string['privacy:metadata:bookingenrollinkbundles:places'] = 'Nombre total de places';
$string['privacy:metadata:bookingenrollinkbundles:timecreated'] = 'Date et heure de la création de l’enregistrement';
$string['privacy:metadata:bookingenrollinkbundles:timemodified'] = 'Date et heure de la dernière modification de l’enregistrement';
$string['privacy:metadata:bookingenrollinkbundles:userid'] = 'Identifiant utilisateur pour l’enregistrement';
$string['privacy:metadata:bookingenrollinkbundles:usermodified'] = 'L’utilisateur qui a modifié';
$string['privacy:metadata:bookingenrollinkitems'] = 'Les articles qui peuvent être acquis dans un lot';
$string['privacy:metadata:bookingenrollinkitems:consumed'] = 'Étiquette pour ouvert ou consommé';
$string['privacy:metadata:bookingenrollinkitems:erlid'] = 'Hachage du paquet';
$string['privacy:metadata:bookingenrollinkitems:timecreated'] = 'Date et heure de la création de l’enregistrement';
$string['privacy:metadata:bookingenrollinkitems:timemodified'] = 'Date et heure de la dernière modification de l’enregistrement';
$string['privacy:metadata:bookingenrollinkitems:userid'] = 'Identifiant utilisateur pour l’enregistrement';
$string['privacy:metadata:bookinghistory'] = 'Enregistrement de l’historique des interactions utilisateur';
$string['privacy:metadata:bookinghistory:json'] = 'Données supplémentaires concernant l’historique des réservations';
$string['privacy:metadata:bookinghistory:status'] = 'Numéro de statut de la réservation';
$string['privacy:metadata:bookinghistory:userid'] = 'L’identifiant de l\'utilisateur qui a créé la réservation';
$string['privacy:metadata:bookingicalsequence'] = 'Séquence iCal';
$string['privacy:metadata:bookingicalsequence:optionid'] = 'Identifiant de l’option de réservation pour iCal';
$string['privacy:metadata:bookingicalsequence:sequencevalue'] = 'Valeur de séquence iVal';
$string['privacy:metadata:bookingicalsequence:userid'] = 'Identifiant utilisateur pour iCal';
$string['privacy:metadata:bookingodtdeductions'] = 'Ce tableau sert à enregistrer si nous voulons déduire une partie du salaire d’un enseignant s\'il lui manque des heures.';
$string['privacy:metadata:bookingodtdeductions:optiondateid'] = 'Identificateur de l’option de date';
$string['privacy:metadata:bookingodtdeductions:reason'] = 'Raison de la déduction.';
$string['privacy:metadata:bookingodtdeductions:timecreated'] = 'L’heure de création';
$string['privacy:metadata:bookingodtdeductions:timemodified'] = 'L’heure de dernière modification';
$string['privacy:metadata:bookingodtdeductions:userid'] = 'Identifiant de l’enseignant qui bénéficie d\'une déduction pour cette date d’option.';
$string['privacy:metadata:bookingodtdeductions:usermodified'] = 'L’utilisateur qui a modifié';
$string['privacy:metadata:bookingoptiondatesanswers'] = 'Statut des dates d’option pour l’utilisateur';
$string['privacy:metadata:bookingoptiondatesanswers:json'] = 'Données supplémentaires';
$string['privacy:metadata:bookingoptiondatesanswers:notes'] = 'Notes';
$string['privacy:metadata:bookingoptiondatesanswers:optiondateid'] = 'Identifiant de la date de l’option';
$string['privacy:metadata:bookingoptiondatesanswers:optionid'] = 'Identifiant de l’option';
$string['privacy:metadata:bookingoptiondatesanswers:status'] = 'Numéro de statut';
$string['privacy:metadata:bookingoptiondatesanswers:timecreated'] = 'L’heure de création';
$string['privacy:metadata:bookingoptiondatesanswers:timemodified'] = 'L’heure de modification';
$string['privacy:metadata:bookingoptiondatesanswers:userid'] = 'Identifiant utilisateur pour l’enregistrement';
$string['privacy:metadata:bookingoptiondatesanswers:usermodified'] = 'L’utilisateur qui a modifié';
$string['privacy:metadata:bookingoptiondatesteachers'] = 'Suivi des enseignants pour chaque session.';
$string['privacy:metadata:bookingoptiondatesteachers:optiondateid'] = 'Identificateur de l\'option de date';
$string['privacy:metadata:bookingoptiondatesteachers:userid'] = 'L’identifiant d’utilisateur de l’enseignant';
$string['privacy:metadata:bookingratings'] = 'Votre évaluation d’un événement';
$string['privacy:metadata:bookingratings:optionid'] = 'Identifiant de l’option de réservation notée';
$string['privacy:metadata:bookingratings:rate'] = 'La note attribuée';
$string['privacy:metadata:bookingratings:userid'] = 'Utilisateur ayant évalué cet événement';
$string['privacy:metadata:bookingsubbookinganswers'] = 'Stocke la réponse (les réservations) d’un utilisateur pour une sous-réservation particulière.';
$string['privacy:metadata:bookingsubbookinganswers:itemid'] = 'itemid peut être identique à sboptionid, mais il existe certains types (par exemple, les créneaux horaires qui fournissent des créneaux) où un sboptionid fournit de nombreux itemids.';
$string['privacy:metadata:bookingsubbookinganswers:json'] = 'données supplémentaires si nécessaire';
$string['privacy:metadata:bookingsubbookinganswers:optionid'] = 'L’identifiant de l’option';
$string['privacy:metadata:bookingsubbookinganswers:sboptionid'] = 'identifiant de la sous-réservation réservée';
$string['privacy:metadata:bookingsubbookinganswers:status'] = 'Le statut des réservations, tels que réservée, en liste d\'attente, dans le panier, sur une liste de notification ou supprimée';
$string['privacy:metadata:bookingsubbookinganswers:timecreated'] = 'L’heure de création';
$string['privacy:metadata:bookingsubbookinganswers:timeend'] = 'Horodatage de la fin de cette réservation';
$string['privacy:metadata:bookingsubbookinganswers:timemodified'] = 'L’heure de dernière modification';
$string['privacy:metadata:bookingsubbookinganswers:timestart'] = 'La date et l’heure du début de cette réservation';
$string['privacy:metadata:bookingsubbookinganswers:userid'] = 'Identifiant de l’utilisateur ayant réservé.';
$string['privacy:metadata:bookingsubbookinganswers:usermodified'] = 'L\'utilisateur qui a modifié';
$string['privacy:metadata:bookingteachers'] = 'Enseignant(s) d’un événement';
$string['privacy:metadata:bookingteachers:bookingid'] = 'Identifiant de l’instance de réservation pour l’enseignant';
$string['privacy:metadata:bookingteachers:calendarid'] = 'Identifiant de l’événement du calendrier pour l’enseignant';
$string['privacy:metadata:bookingteachers:completed'] = 'Si la tâche est accomplie pour l’enseignant';
$string['privacy:metadata:bookingteachers:optionid'] = 'Identifiant de l’option de réservation qui est enseignée';
$string['privacy:metadata:bookingteachers:userid'] = 'L’utilisateur qui anime cet événement';
$string['privacy:metadata:bookinguserevents'] = 'Événements utilisateur dans le calendrier';
$string['privacy:metadata:bookinguserevents:eventid'] = 'Identifiant de l’événement dans la table des événements';
$string['privacy:metadata:bookinguserevents:optiondateid'] = 'Identifiant de l’option date (session) pour l’événement utilisateur';
$string['privacy:metadata:bookinguserevents:optionid'] = 'Identifiant de l’option de réservation pour l’événement utilisateur';
$string['privacy:metadata:bookinguserevents:userid'] = 'Identifiant utilisateur pour l’événement utilisateur';
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
$string['profeatures:approval'] = '<ul>
<li><b>Flux d’approbation (Les réservations doivent être approuvées par des utilisateurs spécifiques)</b></li>
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
$string['profeatures:pollurltemplateheading'] = '<ul>
<li><b>Modèle d’URL pour le sondage</b></li>
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
$string['proversion:extraviews'] = 'Avec Booking PRO, vous pouvez utiliser des affichages supplémentaires comme l’affichage par cartes ou l’affichage en liste avec images.';
$string['proversiononly'] = 'Passez à Booking PRO pour utiliser cette fonctionnalité.';
$string['purgecacheactionbefore'] = 'Purge le cache après chaque exécution de code court';
$string['purgecacheactioninbetween'] = 'Purge le cache avant la première exécution du code court';
$string['qrenrollink'] = 'Code QR pour le lien d\'inscription';
$string['qrid'] = 'qr_id';
$string['qrusername'] = 'qr_username';
$string['question'] = 'Question';
$string['ratings'] = 'Évaluations de l’option de réservation';
$string['ratingsuccessful'] = 'Les notes ont été mises à jour avec succès';
$string['reallydeleteaction'] = 'Confirmer la suppression?';
$string['reason'] = 'Raison';
$string['recalculateall'] = 'Calculer tous les prix';
$string['recalculateprices'] = 'Calculez tous les prix à partir de l’instance avec la formule';
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
$string['recurringsettingsheader'] = 'Options de réservation récurrentes <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
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
$string['responsiblecontactshowfirstteacher'] = 'Sur la page de détails, si aucun contact responsable n’est désigné, indiquez le premier enseignant comme contact responsable.';
$string['restresponse'] = 'rest_response';
$string['restrictanswerperiodclosing'] = 'La réservation n\'est possible que jusqu\'à une certaine date';
$string['restrictanswerperiodopening'] = 'La réservation n\'est possible qu\'après une certaine date';
$string['restrictavailabilityforinstance'] = 'Appliquer des restrictions d\'accès des instances de réservation aux options de réservation';
$string['restrictavailabilityforinstance_desc'] = 'Si vous activez cette fonctionnalité et que vous avez des restrictions d\'accès à votre instance de réservation, ces restrictions s\'appliqueront également aux options de réservation, même si elles sont utilisées dans un shortcode comme [courselist].';
$string['restscriptexecuted'] = 'Après l’exécution de l\'appel REST';
$string['restscriptfailed'] = 'L’exécution du script a échoué';
$string['restscriptsuccess'] = 'Exécution de script REST';
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
$string['rulecustomprofilefieldofdeputy'] = 'Champ de profil utilisateur personnalisé du suppléant';
$string['rulecustomprofilefieldsupervisor'] = 'Champ de profil utilisateur personnalisé du superviseur';
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
$string['rulereactoneventaftercompletion_help'] = 'Laissez ce champ vide ou indiquez 0 si vous souhaitez poursuivre l’exécution de l’action. Vous pouvez utiliser des nombres négatifs si la règle doit être suspendue avant la fin du cours spécifiée.';
$string['rulereactoneventcancelrules'] = 'Ignorer cette règle';
$string['rulesendmailcpf'] = '[Aperçu] Envoyer un courriel à un utilisateur avec un champ de profil personnalisé';
$string['rulesendmailcpf_desc'] = 'Choisissez un événement qui doit déclencher la règle « Envoyer un e-mail ». Saisissez un modèle d\'e-mail
(vous pouvez utiliser des espaces réservés comme {bookingdetails}) et indiquez les utilisateurs destinataires.
Exemple : Tous les utilisateurs dont le champ de profil personnalisé « Centre d\'études » a la valeur « Centre de Vienne ».';
$string['rulesheader'] = '<i class="fa fa-fw fa-pencil-square" aria-hidden="true"></i>&nbsp; Règles';
$string['rulesincontextglobalheader'] = '<a href="{$a}" target="_blank">Règles globales</a>';
$string['rulesincontextheader'] = '<a href="{$a->rulesincontexturl}" target="_blank">Règles dans l\'instance de réservation « {$a->bookingname} »</a>';
$string['rulesnotfound'] = 'Aucune règle trouvée pour cette option de réservation';
$string['rulespecifictime'] = 'Déclenchement à un moment précis en relation avec une date précise';
$string['rulespecifictime_desc'] = 'Choisir un champ de date pour les options de réservation et une certaine période avant ou après cette date.';
$string['rulespecifictimeafter'] = 'Après';
$string['rulespecifictimebefore'] = 'Avant';
$string['rulespecifictimebeforeafter'] = 'Avant ou après ?';
$string['rulespecifictimebeforeafter_help'] = 'Si votre intervalle de temps est de 0, il n’y a pas d’importance que vous choisissiez avant ou après.';
$string['rulespecifictimeduration'] = 'Période avant/après la date choisie';
$string['rulessettings'] = 'Paramètres des règles de réservation';
$string['rulessettingsdesc'] = 'Paramètres qui s\'appliquent à la <a href="{$a}">Fonctionnalité Règles de réservation</a>.';
$string['ruletemplatebookingoptioncompleted'] = 'Modèle - Option de réservation complétée par un sondage';
$string['ruletemplatebookingoptioncompletedbody'] = 'Vous avez choisi l’option de réservation suivante : <br>{bookingdetails}<br> Veuillez participer au sondage. Lien vers le sondage : {pollurl} <br>Accéder au cours : {courselink}<br>Voir toutes les options de réservation : {bookinglink}';
$string['ruletemplatebookingoptioncompletedsubject'] = 'Option de réservation terminée';
$string['ruletemplatebookingoptionuncompleted'] = 'Modèle - Complétion de l’option de réservation terminée';
$string['ruletemplatebookingoptionuncompletedbody'] = 'La complétion de la réservation suivante a été annulée :<br>{bookingdetails}';
$string['ruletemplatebookingoptionuncompletedsubject'] = 'Retiré la complétion';
$string['ruletemplateconfirmbooking'] = 'Modèle - Confirmer la réservation';
$string['ruletemplateconfirmbookingbody'] = 'Cher/Chère {firstname} {lastname},<br>Merci beaucoup pour votre réservation<br>{bookingdetails}<br>Salutations !';
$string['ruletemplateconfirmbookingsubject'] = 'Votre réservation a été effectuée avec succès';
$string['ruletemplateconfirmwaitinglist'] = 'Modèle - Confirmer la liste d’attente';
$string['ruletemplateconfirmwaitinglistbody'] = 'Cher/Chère {firstname} {lastname},<br>Vous êtes sur la liste d\'attente<br>{bookingdetails}<br>Salutations !';
$string['ruletemplateconfirmwaitinglistsubject'] = 'Vous êtes sur la liste d’attente';
$string['ruletemplatecourseupdate'] = 'Modèle - Mises à jour';
$string['ruletemplatecourseupdatebody'] = 'Nouveautés : <br> {changes} <br> Cliquez sur le lien suivant pour consulter les modifications et un aperçu de toutes les réservations : {bookinglink}';
$string['ruletemplatecourseupdatesubject'] = 'Votre réservation « {title} » a été modifiée.';
$string['ruletemplatedaysbefore'] = 'Modèle - Notification n jours avant le début';
$string['ruletemplatedaysbeforebody'] = 'Votre réservation commence dans quelques jours : {bookingdetails} <br> Nom : {participant} <br> Pour consulter toutes les réservations, cliquez sur le lien suivant : {bookinglink} <br> Voici le lien vers le cours : {courselink}';
$string['ruletemplatedaysbeforesubject'] = 'Votre réservation commence dans quelques jours';
$string['ruletemplatepaymentconfirmation'] = 'Modèle - Le paiement de la réservation est confirmé';
$string['ruletemplatepaymentconfirmationbody'] = 'Merci pour votre réservation ! <br>Votre réservation {Title} au prix de {price} a bien été effectuée. <br>Voici le lien de confirmation : <br>{bookingconfirmationlink} <br>Voici le lien du cours : <br>{courselink} <br>Cordialement';
$string['ruletemplatepaymentconfirmationsubject'] = 'Paiement pour {Title} confirmé';
$string['ruletemplatesessionreminders'] = 'Modèle - Rappel avant chaque séance (date)';
$string['ruletemplatesessionremindersbody'] = 'Bonjour {firstname} {lastname}, <br>la prochaine session de « {title} » commencera bientôt : <br><br>{bookingdetails}';
$string['ruletemplatesessionreminderssubject'] = 'Une nouvelle session de {Title} commencera bientôt';
$string['ruletemplatetrainercancellation'] = 'Modèle - Annulation d’une réservation - Courriel aux enseignants';
$string['ruletemplatetrainercancellationbody'] = 'Bonjour {firstname} {lastname},<br>malheureusement, l’événement suivant a dû être annulé :<br>

Événement : {Title}<br>Cordialement';
$string['ruletemplatetrainercancellationsubject'] = 'Annulation de {Title}';
$string['ruletemplatetrainerpoll'] = 'Modèle - Sondage auprès des enseignants n jours après la fin';
$string['ruletemplatetrainerpollbody'] = 'Veuillez participer au sondage. Lien du sondage : {pollurlteachers}';
$string['ruletemplatetrainerpollsubject'] = 'Sondage';
$string['ruletemplatetrainerreminder'] = 'Modèle - Rappel pour l’enseignant n jours avant le début';
$string['ruletemplatetrainerreminderbody'] = 'Votre cours commence dans quelques jours :<br>{bookingdetails}<br>Vous avez {numberparticipants} participants et {numberwaitinglist} personnes sur la liste d’attente.<br>Pour obtenir un aperçu de toutes les inscriptions, cliquez sur le lien suivant :<br>{bookinglink}<br>Cliquez ici pour accéder au cours : {courselink}';
$string['ruletemplatetrainerremindersubject'] = 'Votre réservation commence dans quelques jours';
$string['ruletemplateusercancellation'] = 'Modèle - Annulation d’une option de réservation - Courriel aux utilisateurs';
$string['ruletemplateusercancellationbody'] = 'Bonjour {firstname} {lastname},<br> Malheureusement, l’événement suivant a dû être annulé :<br> Événement : {Title}<br> Cordialement';
$string['ruletemplateusercancellationsubject'] = 'Annulation de {Titre}';
$string['ruletemplateuserpoll'] = 'Modèle - Sondage auprès des utilisateurs n jours après la fin';
$string['ruletemplateuserpollbody'] = '<p>Veuillez participer au sondage. Lien du sondage : {pollurl}</p>';
$string['ruletemplateuserpollsubject'] = 'Sondage';
$string['ruletemplateuserstorno'] = 'Modèle - Annulation par un utilisateur individuel';
$string['ruletemplateuserstornobody'] = '<p>Bonjour {participant},<br>Vous vous êtes désinscrit avec succès de {title}.</p>';
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
$string['scheduledmails'] = 'Courriels programmés';
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
$string['selectbookingmanager'] = 'Sélectionner le gestionnaire de réservation';
$string['selectcategory'] = 'Sélectionner la catégorie parente';
$string['selectdeputy'] = 'Sélectionner le suppléant';
$string['selectdeputyofsupervisor'] = 'Sélectionner le suppléant du superviseur';
$string['selectdeputyruledesc'] = 'Dans la première sélection, choisissez le champ de profil où se trouvent les identifiants Moodle du ou des superviseurs, et dans la seconde sélection, choisissez le champ de profil de leur(s) suppléant(s) auquel(s) le message doit être envoyé.';
$string['selected'] = 'Sélectionné';
$string['selectelective'] = 'Choisissez une matière au choix pour {$a} crédits';
$string['selectfield'] = 'Liste déroulante';
$string['selectfieldofbookingoption'] = 'Sélectionnez le champ d\'option de réservation';
$string['selectoptionid'] = 'S\'il vous plaît, sélectionnez une option !';
$string['selectoptioninotherbooking'] = 'Option';
$string['selectoptionsfirst'] = 'Veuillez d\'abord sélectionner les options de réservation.';
$string['selectpresencestatus'] = 'Choisir le statut de présence';
$string['selectresponsiblecontactinbo'] = 'Sélectionnez le(s) contact(s) d’une option de réservation';
$string['selectstudentinbo'] = 'Sélectionner les utilisateurs d\'une option de réservation';
$string['selectteacherinbo'] = 'Sélectionnez les enseignants d\'une option de réservation';
$string['selectteacherswithprofilefieldonly'] = 'Restreindre la sélection des formateurs';
$string['selectteacherswithprofilefieldonlydesc'] = 'Seuls les utilisateurs dont le champ de profil utilisateur contient une valeur spécifique peuvent être sélectionnés comme formateurs.

<span class="text-danger">Remarque : <b>Enregistrez et actualisez la page</b> pour sélectionner le champ de profil et spécifier la valeur.</span>';
$string['selectteacherswithprofilefieldonlyfield'] = '⤷ Sélectionnez le champ de profil utilisateur pour les formateurs';
$string['selectteacherswithprofilefieldonlyvalue'] = '⤷ Valeur';
$string['selectteacherswithprofilefieldonlyvaluedesc'] = 'Saisissez soit une valeur spécifique, soit une liste de valeurs possibles séparées par des virgules';
$string['selectuser'] = 'Sélectionner l’utilisateur';
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
$string['selflearningcoursesettingsheader'] = 'Options de réservation à durée fixe &nbsp;<span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['selflearningcoursesettingsheaderdesc'] = 'Cette fonctionnalité vous permet de créer des options de réservation à durée fixe, sans dates précises. Les utilisateurs ayant réservé seront inscrits au cours Moodle associé pour la durée indiquée.';
$string['selflearningcoursetimeremaininginfo'] = 'Il reste {$a} pour terminer ce cours.';
$string['selflearningcoursetimeremaininginfoexpired'] = 'Vous n’avez plus accès à ce cours.';
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
$string['sendmessagesforinvisibleoptions'] = 'Envoyer des messages pour les options invisibles';
$string['sendmessagesforinvisibleoptions_desc'] = 'Activez ce paramètre pour envoyer des messages même lorsque les options de réservation sont invisibles (attention : cela pourrait entraîner la réception de courriels indésirables par les utilisateurs).';
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
$string['shoppingcartplaceholder'] = 'Panier';
$string['shortcode:cmidnotexisting'] = 'L\'ID du module de cours {$a} n\'existe pas pour l\'activité de réservation.';
$string['shortcode:courseidnotexisting'] = 'L\'identifiant du cours Moodle {$a} n\'existe pas.';
$string['shortcode:error'] = 'Ce code court génère des erreurs. Vérifiez tous les paramètres.';
$string['shortcodenotsupportedonyourdb'] = 'Ce code court n’est pas compatible avec votre base de données. Il fonctionne uniquement avec PostgreSQL et MariaDB.';
$string['shortcodesettings'] = 'Paramètres des codes courts';
$string['shortcodesettings_desc'] = 'Booking prend en charge quelques codes courts qui vous permettront d’afficher les options de réservation à différents endroits de votre site.';
$string['shortcodesispasswordprotected'] = 'Les codes courts sont protégés par des mots de passe.';
$string['shortcodesoff'] = 'Désactiver les codes courts de réservation';
$string['shortcodesoff_desc'] = 'Activez ce paramètre si vous souhaitez désactiver les codes courts de réservation (par exemple [courselist]) pour l’ensemble du site.';
$string['shortcodesoffwarning'] = 'Le code court [{$a}] ne peut pas être utilisé, car les codes courts sont désactivés.';
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
$string['showchecklistdownloadbutton'] = 'Afficher le bouton de téléchargement de la liste de contrôle';
$string['showchecklistdownloadbutton_desc'] = 'Si cette option est activée, les utilisateurs disposant de l’autorisation « Télécharger la liste de contrôle » verront un bouton à cocher leur permettant de télécharger une liste de contrôle dans la description de l’option de réservation.';
$string['showcoursenameandbutton'] = 'Afficher le nom du cours, de brèves informations et un bouton redirigeant vers les options de réservation disponibles';
$string['showcoursesofteacher'] = 'Cours';
$string['showcustomfields'] = 'Champs d\'options de réservation personnalisés';
$string['showcustomfields_desc'] = 'Sélectionnez les champs d\'options de réservation personnalisés à afficher sur la feuille de connexion';
$string['showdates'] = 'Afficher les dates';
$string['showdescription'] = 'Afficher la description';
$string['showdescriptionnormally'] = 'Afficher la description normalement';
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
$string['showpriceifnotloggedin'] = 'Afficher le(s) prix pour les utilisateurs non connectés';
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
[[fullname]], [[firstname]], [[lastname]], [[email]], [[signature]], [[institution]], [[description]], [[city]], [[country]], [[idnumber]], [[phone1]], [[department]], [[address]], [[places]], [[userpic]]<br>
(éventuellement aussi des champs de profil personnalisés, si configurés)

<b>Hors [[users]] :</b><br>
[[location]], [[dayofweektime]], [[teachers]], [[dates]], [[logourl]], [[tablename]]

Utilisez uniquement du code HTML de base pris en charge par TCPDF / PhpWord. Pour insérer des signatures dans un tableau, utilisez la classe CSS <code>« signaturetable »</code>.';
$string['signinsheetlocation'] = 'Emplacement:';
$string['signinsheetmode'] = 'Mode feuille de présences';
$string['signinsheetmode_desc'] = 'Sélectionnez le mode de téléchargement de la feuille de connexion : modèle HTML ou mode Legacy.';
$string['signinsheettoporientation'] = 'Orientation de la feuille de présences du bouton supérieur';
$string['signinsheettoporientationdesc'] = 'Orientation du PDF du bouton supérieur de téléchargement';
$string['signinsheettoporientationdesc_help'] = 'Définit l’orientation par défaut de la feuille de présences du bouton supérieur. Choisissez entre Portrait et Paysage.';
$string['skipbookingrulesmode'] = 'Appliquer les règles de réservation';
$string['skipbookingrulesoptin'] = 'Opt in : Appliquer uniquement les règles suivantes';
$string['skipbookingrulesoptout'] = 'Opt in : Ne pas appliquer les règles suivantes';
$string['skipbookingrulesrules'] = 'Choisir les règles de réservation';
$string['sortbookingoptions'] = 'Veuillez trier vos réservations dans le bon ordre. Vous pourrez accéder aux cours correspondants l\'un après l\'autre. Le premier cours arrive en premier.';
$string['sortorder'] = 'Ordre de tri';
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
$string['subbookingsheader'] = 'Sous-réservations <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span>';
$string['subbookingtimeslot'] = 'Réservation de créneaux horaires';
$string['subbookingtimeslot_desc'] = 'Cela ouvre des créneaux horaires pour chaque date de réservation avec une durée définie.';
$string['subject'] = 'Sujet';
$string['submit'] = 'Soumettre';
$string['submitandadd'] = 'Ajouter une nouvelle option de réservation';
$string['submitandgoback'] = 'Enregistrer et retour';
$string['submitandstay'] = 'Enregistrer et continuer';
$string['subplugintype_bookingextension'] = 'Prolongation de réservation';
$string['subplugintype_bookingextension_plural'] = 'Prolongations de réservation';
$string['subscribersto'] = 'Enseignants pour « {$a} »';
$string['subscribetocourse'] = 'Inscrivez les utilisateurs au cours';
$string['subscribeuser'] = 'Voulez-vous vraiment inscrire les utilisateurs au cours suivant';
$string['substitutions'] = 'Remplacement(s)';
$string['successfulcalculation'] = 'Calcul du prix réussi !';
$string['successfulldeleted'] = 'Catégorie supprimée!';
$string['successfullybooked'] = 'Réservation effectuée';
$string['successfullysorted'] = 'Tri effectué';
$string['sucesfullcompleted'] = 'L\'activité a été réalisée avec succès pour les utilisateurs.';
$string['sucesfullytransfered'] = 'Les utilisateurs ont été transférés avec succès.';
$string['sucessfullybooked'] = 'Réservation effectuée';
$string['sumunits'] = 'Somme des unités';
$string['sunday'] = 'Dimanche';
$string['supervisorteam'] = 'Équipe de supervision';
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
$string['tableheaderwaitforconfirmation'] = 'Attendez la confirmation';
$string['tabwhatsnew'] = 'Onglet Réservation : « Quoi de neuf ? »';
$string['tabwhatsnew_desc'] = 'Vous pouvez utiliser cet onglet pour afficher aux utilisateurs toutes les nouvelles réservations rendues visibles OU créées au cours d\'un certain nombre de jours (à compter d\'aujourd\'hui), que vous pouvez définir ici.
<span class="text-danger">N\'oubliez pas d\'ajouter cet onglet dans les paramètres de vos instances de réservation après l\'avoir activé.</span>';
$string['tabwhatsnewdays'] = 'Nombre de jours pour « Quoi de neuf ? »';
$string['tabwhatsnewdays_desc'] = 'Saisissez le nombre de jours écoulés avant qu\'une option de réservation soit considérée comme nouvelle.
Exemple : Si vous choisissez 30, une option de réservation visible ou créée il y a plus de 30 jours ne s\'affichera pas dans l\'onglet « Nouveautés ». 0 signifie que seules les options de réservation créées ou visibles aujourd\'hui seront affichées.';
$string['tagdeleted'] = 'Le modèle de balise a été supprimé !';
$string['tagnotfoundindb'] = 'L’étiquette est introuvable ou n\'existe pas.';
$string['tagsuccessfullysaved'] = 'Le modèle de balise a été sauvegardé.';
$string['tagtag'] = 'Balise';
$string['tagtemplates'] = 'Modèles de balises';
$string['tagtext'] = 'Texte';
$string['taken'] = 'Pris';
$string['taskadhocresetoptiondatesforsemester'] = 'Tâche ad hoc : Réinitialiser et générer de nouvelles dates d\'option pour le semestre';
$string['taskcheckanswers'] = 'Réservation : Vérifiez les réponses';
$string['taskcleanbookingdb'] = 'Réservation : Nettoyer la base de données';
$string['taskconfirmbookinganswerbymailbyruleadhoc'] = 'Réservation : Confirmer la réponse de réservation de la personne sur la liste d’attente par courrier électronique (tâche ponctuelle)';
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
$string['template'] = 'Modèle';
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
$string['timeawarded'] = 'Décerné le';
$string['timebooked'] = 'Réservé à';
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
$string['type'] = 'Type';
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
$string['updatebooking'] = 'Mettre à jour cette réservation';
$string['updatedrecords'] = '{$a} enregistrement(s) mis à jour.';
$string['uploadheaderimages'] = 'Images d\'en-tête pour les options de réservation';
$string['usecompetencies'] = 'Utiliser les compétences';
$string['usecompetencies_desc'] = 'Les options de réservation peuvent être étiquetées avec des compétences et triées en conséquence';
$string['useconfirmationworkflowheader'] = 'Utiliser l’en-tête du flux de travail de confirmation';
$string['useconfirmationworkflowheader_desc'] = 'Activez cette option pour utiliser l’en-tête du flux de travail de confirmation dans le formulaire d’option de réservation.';
$string['usecoursecategorytemplates'] = 'Utiliser des modèles pour les cours Moodle nouvellement créés';
$string['usedeputiesforconfirmation'] = 'Utilisez des suppléants pour confirmation.';
$string['usedeputiesforconfirmation_desc'] = 'Cette fonctionnalité, très spécifique, est utile pour les extensions comme « confirm_supervisor » qui permet aux suppléants de confirmer les décisions. Si vous sélectionnez un champ ici et activez la sélection des suppléants (par exemple, dans « [listtoapprove] »), les identifiants des utilisateurs sélectionnés seront inscrits dans le champ correspondant.';
$string['usedinbooking'] = 'Vous ne pouvez pas supprimer cette catégorie, parce que vous utilisez la réservation !';
$string['usedinbookinginstances'] = 'Le modèle est utilisé dans les cas de réservation suivants';
$string['uselegacymailtemplates'] = 'Continuer à utiliser les anciens modèles de courrier';
$string['uselegacymailtemplates_desc'] = 'Cette fonction est obsolète et sera supprimée prochainement. Nous vous encourageons vivement à migrer vos modèles et paramètres vers <a href="{$a}">Règles de réservation</a>.
<span class="text-danger"><b>Attention :</b> Si vous décochez cette case, vos modèles d\'e-mails dans vos instances de réservation ne seront plus affichés ni utilisés.</span>';
$string['usenonnativemailer'] = 'Utilisez un client de messagerie externe plutôt que celui intégré à Moodle';
$string['usenonnativemailer_desc'] = 'Si cette option est cochée, les courriels contenant des invitations de calendrier seront envoyés à l’aide d’un service de messagerie non natif au lieu de celui intégré à Moodle afin de garantir que les destinataires voient les boutons Accepter/Refuser.';
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
$string['userspecificcampaignwarning'] = 'Si vous sélectionnez un champ de profil utilisateur personnalisé ci-dessous, la campagne ne sera effective que pour les utilisateurs dont la valeur est définie ou exclue dans ce champ.';
$string['userssuccessfullenrolled'] = 'Tous les utilisateurs ont été inscrits !';
$string['userssuccessfullybooked'] = 'Tous les utilisateurs ont été réservés sur l\'autre option de réservation.';
$string['userssuccessfullygetnewpresencestatus'] = 'Tous les utilisateurs ont un nouveau statut de présence.';
$string['userssucesfullygetnewpresencestatus'] = 'Le statut de présence des utilisateurs sélectionnés a été mis à jour avec succès';
$string['userstonotify'] = 'Liste de notifications';
$string['userwhotriggeredevent'] = 'User who triggered the event';
$string['usesqlfilteravailability'] = 'Utilisez SQL pour les conditions de disponibilité';
$string['usesqlfilteravailability_desc'] = 'Ce paramètre active les filtres SQL pour les conditions de disponibilité. Lorsqu\'il est activé, les options de réservation ne répondant pas aux critères de disponibilité sont filtrées au niveau de la base de données, ce qui améliore les performances. Cependant, avec des tables très volumineuses, l\'analyse JSON peut engendrer une surcharge. Désactivez ce paramètre si vous constatez des problèmes de performances ou si vous n\'avez pas besoin des filtres SQL.';
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
$string['waitforconfirmationselect'] = 'Réservez après confirmation';
$string['waitinglist'] = 'Liste d’attente';
$string['waitinglistconfirmed'] = 'Liste d\'attente confirmée';
$string['waitinglistdeleted'] = 'Supprimé de la liste d\'attente';
$string['waitinglistenoughmessage'] = 'Encore assez de places sur liste d\'attente.';
$string['waitinglistfullmessage'] = 'Liste d’attente pleine.';
$string['waitinglistheader'] = 'Liste d\'attente';
$string['waitinglistheader_desc'] = 'Ici, vous pouvez définir le comportement de la liste d\'attente de réservation.';
$string['waitinglistinfotexts'] = 'Affichage de la disponibilité des places pour la liste d\'attente';
$string['waitinglistinfotextsinfo'] = 'Sélectionnez la manière dont la disponibilité des places sur la liste d\'attente doit être affichée aux utilisateurs.';
$string['waitinglistlowmessage'] = 'Il ne reste que quelques places sur la liste d\'attente !';
$string['waitinglistlowpercentage'] = 'Pourcentage de messages de liste d\'attente basse';
$string['waitinglistlowpercentagedesc'] = 'Si les places disponibles sur la liste d\'attente atteignent ou descendent en dessous de ce pourcentage, un message indiquant que la liste d\'attente est basse s\'affichera.';
$string['waitinglistplacesplacesleft'] = '{$a} places restantes sur la liste d’attente';
$string['waitinglistplacesplacesoneleft'] = '(Il reste 1 place sur la liste d’attente)';
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
$string['youareediting'] = 'Vous modifiez « <b>{$a}</b> ».';
$string['youareusingconfig'] = 'Vous utilisez la configuration de formulaire suivante : {$a}';
$string['yourplaceonwaitinglist'] = 'Vous êtes à la place {$a} sur la liste d\'attente';
$string['yourselection'] = 'Votre sélection';
$string['zoommeeting'] = 'Réunion Zoom';
