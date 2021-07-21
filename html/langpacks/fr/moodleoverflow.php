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
 * Strings for component 'moodleoverflow', language 'fr', version '3.11'.
 *
 * @package     moodleoverflow
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addanewdiscussion'] = 'Ajouter une nouvelle discussion';
$string['addanewreply'] = 'Ajouter une réponse';
$string['allowcoursereputation'] = 'Somme de la réputation à l\'intérieur d\'un cours.';
$string['allownegativereputation'] = 'Autoriser la réputation négative ?';
$string['allownegativereputation_help'] = 'Si oui, la réputation des utilisateurs dans un cours ou un module pourra êre négative. Si non, la réputation ne descendra pas en-dessous de zéro.';
$string['allowratingchange'] = 'Autoriser les modifications des évaluations';
$string['allsubscribe'] = 'S\'abonner à tous les forums';
$string['allunsubscribe'] = 'Se désabonner de tous les forums';
$string['areaattachment'] = 'Pièces jointes';
$string['areapost'] = 'Messages';
$string['attachment'] = 'Pièce jointe';
$string['attachment_help'] = 'Vous pouvez joindre un ou plusieurs fichiers à un message du forum. Si vous attachez une image, elle sera affichée après le message.';
$string['attachments'] = 'Pièces jointes';
$string['bestanswer'] = 'Le propriétaire de la question ou un propriéttaire du cours a reconnu cette réponse comme étant la meilleure.';
$string['bynameondate'] = 'écrit par {$a->name} ({$a->rating}) - {$a->date}';
$string['bynameondatenorating'] = 'écrit par {$a->name} - {$a->date}';
$string['cannotcreatediscussion'] = 'Impossible de créer une nouvelle discussion';
$string['cannotdeletepost'] = 'Vous ne pouvez pas supprimer ce message !';
$string['cannotfindparentpost'] = 'Impossible de trouver le parent du message {$a}';
$string['cannotreply'] = 'Vous ne pouvez pas répondre à ce message';
$string['cannottrack'] = 'Impossible d\'arrêter le suivi de ce forum';
$string['cannotunsubscribe'] = 'Impossible de vous désabonner de ce forum';
$string['cannotupdatepost'] = 'Vous ne pouvez pas mettre à jour ce message';
$string['cleanreadtime'] = 'Marquer les vieux posts comme lus (heure)';
$string['clicktosubscribe'] = 'Vous n\'êtes pas abonné(e) à cette discussion. Cliquez pour vous abonner.';
$string['clicktounsubscribe'] = 'Vous êtes abonné(e) à cette discussion. Cliquez pour vous désabonner.';
$string['configallowcoursereputation'] = 'Autoriser la somme des réputations de toutes les instances du cours courant ?';
$string['configallowratingchange'] = 'Est-ce qu\'un utilisateur peut changer ses évaluations ?';
$string['configcleanreadtime'] = 'Heure de la journée à laquelle la table des messages lus sera vidée.';
$string['configforcedreadtracking'] = 'Permet à Moodleoverflows d\'être paramétré sur le suivi de lecture forcé. Abaisse les performances pour certains utilisateurs, particulièrement sur les cours avec beaucoup de forums et des messages. Si désactivé, n\'importe quel forum moodleoverflows défini précédemment sur Forcé sera traité comme facultatif.';
$string['configmanydiscussions'] = 'Nombre maximum de discussions affichées par page dans une instance Moodleoverflow.';
$string['configmaxattachments'] = 'Nombre maximal de pièces jointes auttorisées par message.';
$string['configmaxbytes'] = 'Taille maximale par défaut pour toutes les pièces jointes des forums du site.';
$string['configmaxeditingtime'] = 'Valeur par défaut : 3600s (1h)';
$string['configmaxmailingtime'] = 'Les messages plus vieux que ce nombre d\'heures ne seront pas envoyés aux utilisateurs. Cela peut aider à éviter les problèmes où le CRON n\'a pas été lancé depuis longtemps.';
$string['configoldpostdays'] = 'Nbre de jours à partir duquel un message est considéré comme lu.';
$string['configpreferteachersmark'] = 'Les réponses marquées comme solution par le propriétaire d\'un cours sont prioritaires face aux réponses marquées comme utiles par l\'initiateur de la discussion.';
$string['configreputationnotnegative'] = 'Empecher la réputation des utilisateurs d\'être négative.';
$string['configtrackingtype'] = 'Réglage par défaut pour le suivi de lecture.';
$string['configtrackmoodleoverflow'] = 'Régler sur «Oui» si vous voulez suivre les messages lus/non lus de chaque utilisateur.';
$string['configvotescaledownvote'] = 'Réputation reçue lors d\'un vote négatif sur vos messages.';
$string['configvotescalehelpful'] = 'Réputation reçue lorsqu\'un de vos messages a été marqué comme utile.';
$string['configvotescalesolved'] = 'Réputation reçue lorsqu\'un de vos messages a été marqué comme solution.';
$string['configvotescaleupvote'] = 'Réputation reçue lors d\'un vote positif sur vos messages.';
$string['configvotescalevote'] = 'Réputation gagnée en votant.';
$string['confirmsubscribe'] = 'Voulez-vous vraiment vous abonner au forum «{$a}» ?';
$string['confirmsubscribediscussion'] = 'Voulez-vous vraiment vous abonner à cette discussion «{$a->discussion}» dans le forum «{$a->moodleoverflow}» ?';
$string['confirmunsubscribe'] = 'Voulez-vous vraiment vous désabonner de «{$a}» ?';
$string['confirmunsubscribediscussion'] = 'Voulez-vous vraiment vous désabonner de cette discussion «{$a->discussion}» dans «{$a->moodleoverflow}» ?';
$string['couldnotadd'] = 'Impossible poster votre message suite à une erreur inconnue';
$string['couldnotdeletereplies'] = 'Désolé, impossible de supprimer puisque des utilisateurs on déjà répondu';
$string['couldnotupdate'] = 'Impossible de mettre à jour votre message suite à une erreur inconnue';
$string['coursewidereputation'] = 'Réputation entre les modules ?';
$string['coursewidereputation_help'] = 'Si oui, la réputation des utilisateurs de tous les modules moodleoverflow de ce cours sera additionnée.';
$string['crontask'] = 'Moodleoverflow maintenance jobs';
$string['delete'] = 'Supprimer';
$string['deletesure'] = 'Êtes-vous sûr(e) de vouloir supprimer ce message ?';
$string['deletesureplural'] = 'Êtes-vous sûr(e) de vouloir supprimer ce message et oues ses réponses ? ({$a} posts)';
$string['disallowsubscribe'] = 'Les abonnements ne sont pas autorisés';
$string['discussionlocked'] = 'Cette discussion a été verrouillée. Vous ne pouvez plus y répondre.';
$string['discussionname'] = 'Nom de la discussion';
$string['discussionnownotsubscribed'] = '{$a->name} ne sera pas notifié des nouveaux messages dans «{$a->discussion}» de «{$a->moodleoverflow}»';
$string['discussionnowsubscribed'] = '{$a->name} sera notifié(e) des nouveaux messages dans «{$a->discussion}» de «{$a->moodleoverflow}»';
$string['discussions'] = 'Discussions';
$string['discussionsubscription'] = 'S\'inscrire à la discussion';
$string['discussionsubscription_help'] = 'S\'inscrire à une discussion signifie que vous recevrez des notifications pour les nouveaux messages de cette discussion.';
$string['downvote'] = 'Vote négatif';
$string['downvotenotchangeable'] = 'Vote négatif (non modifiable)';
$string['edit'] = 'Modifier';
$string['editedby'] = 'Modifié par {$a->name} - soumis le {$a->date}';
$string['editedpostupdated'] = 'Le message de {$a} a été mis à jour';
$string['erroremptymessage'] = 'Le message ne peut pas être vide.';
$string['erroremptysubject'] = 'Le sujet du message ne peut pas être vide.';
$string['errorwhiledelete'] = 'Une erreur s\'est produite pendant la suppression de l\'enregistrement.';
$string['eventdiscussioncreated'] = 'Discussion créée';
$string['eventdiscussiondeleted'] = 'Discussion supprimée';
$string['eventdiscussionsubscriptioncreated'] = 'Abonnement à la discussion créé';
$string['eventdiscussionsubscriptiondeleted'] = 'Abonnement à la discussion supprimé';
$string['eventdiscussionviewed'] = 'Discussion vue';
$string['eventpostcreated'] = 'Message créé';
$string['eventpostdeleted'] = 'Message supprimé';
$string['eventpostupdated'] = 'Message mis à jour';
$string['eventratingcreated'] = 'Évaluation créée';
$string['eventratingdeleted'] = 'Évaluation supprimée';
$string['eventratingupdated'] = 'Évaluation mise à jour';
$string['eventreadtrackingdisabled'] = 'Suivi de lecture désactivé';
$string['eventreadtrackingenabled'] = 'Suivi de lecture activé';
$string['eventsubscriptioncreated'] = 'Abonnement créé';
$string['eventsubscriptiondeleted'] = 'Abonnement supprimé';
$string['everyonecannowchoose'] = 'Tout le monde peut maintenant choisir à être abonné';
$string['everyoneisnowsubscribed'] = 'Tout le monde est désormais abonné à ce forum';
$string['everyoneissubscribed'] = 'Tout le monde est abonné à ce forum';
$string['forcedreadtracking'] = 'Autoriser le suivi forcé de lecture';
$string['generalmoodleoverflows'] = 'Forums dans ce cours';
$string['gotoindex'] = 'Gérer vos préférences';
$string['grademaxgradeerror'] = 'Le rang max doit être un entier positif différent de zéro';
$string['gradesreport'] = 'Rapport de rangs';
$string['gradesupdated'] = 'Rangs mises à jour';
$string['headerdiscussion'] = 'Discussion';
$string['headerlastpost'] = 'Dernier post';
$string['headerreplies'] = 'Réponses';
$string['headerstartedby'] = 'Commencée par';
$string['headerstatus'] = 'Statut';
$string['headerunread'] = 'Non lu';
$string['headervotes'] = 'Votes';
$string['helpfulanswer'] = 'Le propriétaire de la question a reconnu cette réponse comme étant utile.';
$string['hiddenmoodleoverflowpost'] = 'Message caché';
$string['invaliddiscussionid'] = 'L\'ID de la discussion est incorrect';
$string['invalidforcesubscribe'] = 'Mode d\'abonnement forcé non valide';
$string['invalidmoodleoverflowid'] = 'ID du Forum incorrect';
$string['invalidparentpostid'] = 'ID du message parent incorrect';
$string['invalidpostid'] = 'ID de message invalide - {$a}';
$string['invalidratingid'] = 'L\'évaluation soumise n\'est ni positive ni négative.';
$string['mailindexlink'] = 'Modifier vos préférences de forum : {$a}';
$string['manydiscussions'] = 'Discussions par page';
$string['markallread'] = 'Marquer tous les messages de cette discussion comme lus.';
$string['markdiscussionreadsuccessful'] = 'La discussion a été marquée comme lue.';
$string['markhelpful'] = 'Marquer comme utile';
$string['markmoodleoverflowreadsuccessful'] = 'Tous les messages ont été marqués comme lus.';
$string['marknothelpful'] = 'Ne plus marquer comme utile';
$string['marknotsolved'] = 'Ne plus marquer comme solution';
$string['markread'] = 'Marquer comme lu';
$string['markreadfailed'] = 'Un message de la discussion n\'a pas pu être marquée comme lu.';
$string['marksolved'] = 'Marquer comme solution';
$string['markunread'] = 'Marquer comme non lu';
$string['maxattachments'] = 'Nombre maximal de pièces jointes';
$string['maxattachments_help'] = 'Ce réglage détermine le nombre max de fichiers pouvant être ataché à un message du forum.';
$string['maxattachmentsize'] = 'Taille maximale des fichiers joints';
$string['maxattachmentsize_help'] = 'Ce réglage détermine la taille max d\'un fichier pouvant êre ataché à un message.';
$string['maxeditingtime'] = 'Durée maximale pendan laquelle un message peu êre édité par son propriétaire (en sec)';
$string['maxmailingtime'] = 'Temps maximal de notificaion par courrier';
$string['message'] = 'Message';
$string['messageprovider:posts'] = 'Notification des nouveaux messages';
$string['modulename'] = 'Moodleoverflow';
$string['modulename_help'] = 'Le module Moodleoverflow permet aux participants d\'utiliser une structure de forum sous forme de questions-réponses. L\'affichage du forum n\'est pas chronologique car le tri dépend du vote collaboratif plutôt que de l\'heure. Comme pour StackOverflow.';
$string['modulenameplural'] = 'Moodleoverflows';
$string['moodleoverflow'] = 'Moodleoverflow';
$string['moodleoverflow:addinstance'] = 'Ajouter une nouvelle insance Moodleoverflow';
$string['moodleoverflow:allowforcesubscribe'] = 'Autoriser les abonnements forcés';
$string['moodleoverflow:createattachment'] = 'Créer des pièces jointes';
$string['moodleoverflow:deleteanypost'] = 'Supprimer les messages';
$string['moodleoverflow:deleteownpost'] = 'Supprimer ses propres messages';
$string['moodleoverflow:editanypost'] = 'Éditer les messages';
$string['moodleoverflow:managesubscriptions'] = 'Gérer les abonnements';
$string['moodleoverflow:marksolved'] = 'Marquer un message comme solution';
$string['moodleoverflow:ratehelpful'] = 'Marquer un message comme utile';
$string['moodleoverflow:ratepost'] = 'Évaluer un message';
$string['moodleoverflow:replypost'] = 'Répondre dans les discussions';
$string['moodleoverflow:startdiscussion'] = 'Démarrer une discussion';
$string['moodleoverflow:view'] = 'Voir la liste des discussions';
$string['moodleoverflow:viewanyrating'] = 'Voir les évaluations';
$string['moodleoverflow:viewdiscussion'] = 'Voir les discussions';
$string['moodleoverflowauthorhidden'] = 'Auteur (caché)';
$string['moodleoverflowbodyhidden'] = 'Vous ne pouvez pas voir ce message, probablement parce que vous n\'avez pas écrit dans la discussion, le temps maximum d\'édition n\'est pas écoulé, la discussion n\'a pas démarré ou la discussion a expiré.';
$string['moodleoverflowfieldset'] = 'Exemple de jeu de champs personnalisé';
$string['moodleoverflowname'] = 'Nom Moodleoverflow';
$string['moodleoverflows'] = 'Moodleoverflows';
$string['moodleoverflowsubjecthidden'] = 'Sujet (caché)';
$string['nodiscussions'] = 'Il n\'y a pas encore de discussion dans ce forum.';
$string['nodownvote'] = 'Pas de vote négatif';
$string['noguestpost'] = 'Désolé, les invités ne sontt pas autorisés à poster des messages.';
$string['noguesttracking'] = 'Désolé, les invités ne son pas autorisés à régler les options de suivi.';
$string['noonecansubscribenow'] = 'Les abonnements ne sont plus autorisés';
$string['nopermissiontosubscribe'] = 'Vous n\'avez pas la permission de voir les abonnés';
$string['nopostmoodleoverflow'] = 'Désolé, vous n\'êtes pas autorisé(e) à poster dans ce forum.';
$string['noratemoodleoverflow'] = 'Désolé, vous n\'êtes pas autorisé(e) à voter dans ce forum.';
$string['noratingchangeallowed'] = 'Vous n\'êtes pas autorisé(e) à modifier vos évaluations.';
$string['notexists'] = 'La discussion n\'existe plus';
$string['notpartofdiscussion'] = 'Ce message ne faitt partie d\'une discussion!';
$string['notrackmoodleoverflow'] = 'Ne pas suivre les messages non lus';
$string['notstartuser'] = 'Seulement l\'initiateur de la discussion peut marquer une réponse comme utile.';
$string['notteacher'] = 'Seulement les propriétaires de cours peuvent faire ça.';
$string['noupvote'] = 'Pas de vote positif';
$string['noviewdiscussionspermission'] = 'Vous n\'avez pas la permission de voir les discussions de ce forum';
$string['nowallsubscribed'] = 'Tous les forums dans {$a} sont abonnés.';
$string['nowallunsubscribed'] = 'tous les forums dans {$a} sont désabonnés.';
$string['nownotsubscribed'] = '{$a->name} ne sera pas notifié des nouveaux messages dans «{$a->moodleoverflow}»';
$string['nownottracking'] = '{$a->name} n\'est plus suivi «{$a->moodleoverflow}».';
$string['nowsubscribed'] = '{$a->name} sera notifié(e) des nouveaux messages dans «{$a->moodleoverflow}»';
$string['nowtracking'] = '{$a->name} est suivi «{$a->moodleoverflow}».';
$string['oldpostdays'] = 'Read after days';
$string['parent'] = 'Montrer le parent';
$string['permalink'] = 'Lien permanent';
$string['pluginadministration'] = 'Administration Moodleoverflow';
$string['pluginname'] = 'Moodleoverflow';
$string['postaddedsuccess'] = 'Votre message a été ajoué avec succès.';
$string['postaddedtimeleft'] = 'Vous avez {$a} pour le modifier si vous voulez effecuer un changement.';
$string['postbyuser'] = '{$a->post} écrit par {$a->user}';
$string['postincontext'] = 'Voir ce message dans le contexe';
$string['postmailinfolink'] = 'Il s\'agit de la copie d\'un message posté dans {$a->coursename}.

Pour répondre, cliquez sur ce lien : {$a->replylink}';
$string['postmailsubject'] = '{$a->courseshortname} : {$a->subject}';
$string['postnotexist'] = 'Le message demandé n\'existe pas';
$string['posts'] = 'Messages';
$string['posttomoodleoverflow'] = 'Publier sur le forum';
$string['postupdated'] = 'Votre message a été mis à jour';
$string['preferteachersmark'] = 'Préférer les marquages des propriétaires de cours ?';
$string['privacy:anonym_discussion_name'] = 'Nom de discussion anonyme';
$string['privacy:anonym_post_message'] = 'Ce contenu a été supprimé.';
$string['privacy:anonym_user_name'] = 'Anonyme';
$string['privacy:discussionsubscriptionpreference'] = 'Vous avez choisi la préférence d\'abonnement à la discussion suivante pour ce forum : « {$a->preference} »';
$string['privacy:grade'] = 'Votre rang pour ce forum Moodleoverflow.';
$string['privacy:metadata:core_files'] = 'Moodleoverflow stocke les fichiers uploadés par l\'utilisateur pour faire partie du message du forum.';
$string['privacy:metadata:moodleoverflow_discuss_subs'] = 'Informations sur les abonnements aux discussions de forum individuelles. Cela inclut quand un utilisateur a choisi de s\'abonner ou de se désabonner d\'une discussion.';
$string['privacy:metadata:moodleoverflow_discuss_subs:discussion'] = 'L\'ID de la discussion qui a été abonnée / désabonnée.';
$string['privacy:metadata:moodleoverflow_discuss_subs:preference'] = 'Heure de début de l\'abonnement.';
$string['privacy:metadata:moodleoverflow_discuss_subs:userid'] = 'L\'ID de l\'utilisateur qui a modifié les réglages d\'abonnement.';
$string['privacy:metadata:moodleoverflow_discussions'] = 'Informations sur les discussions du forum. Cela inclut les discussions lancées par un utilisateur.';
$string['privacy:metadata:moodleoverflow_discussions:name'] = 'Nom de la discussion';
$string['privacy:metadata:moodleoverflow_discussions:timemodified'] = 'Heure à laquelle la discussion (par ex un message) a été modifiée en dernier.';
$string['privacy:metadata:moodleoverflow_discussions:userid'] = 'L\'ID de l\'utilisateur qui a démarré la discussion.';
$string['privacy:metadata:moodleoverflow_discussions:usermodified'] = 'L\'ID du dernier utilisateur qui a modifié la discussion';
$string['privacy:metadata:moodleoverflow_grades'] = 'Informations sur le rang qu\'un utilisateur a obtenue pour sa contribution à un forum.';
$string['privacy:metadata:moodleoverflow_grades:grade'] = 'Rang que l\'utilisateur a obtenu.';
$string['privacy:metadata:moodleoverflow_grades:moodleoverflowid'] = 'L\'ID du forum moodleoverflow dans lequel l\'utilisateur a obtenu le rang.';
$string['privacy:metadata:moodleoverflow_grades:userid'] = 'L\'ID de l\'utilisateur qui a obenu le rang.';
$string['privacy:metadata:moodleoverflow_posts'] = 'Informations sur les messages de forum. Cela inclut les données des messages postés par un utilisateur.';
$string['privacy:metadata:moodleoverflow_posts:created'] = 'Date à laquelle ce message a été créé.';
$string['privacy:metadata:moodleoverflow_posts:discussion'] = 'L\'ID de la discussion dont fait partie ce message.';
$string['privacy:metadata:moodleoverflow_posts:message'] = 'Texte de ce message.';
$string['privacy:metadata:moodleoverflow_posts:modified'] = 'Dernière date à laquelle ce message a été modifié.';
$string['privacy:metadata:moodleoverflow_posts:parent'] = 'L\'ID du message auquel fait référence ce message.';
$string['privacy:metadata:moodleoverflow_posts:userid'] = 'L\'ID de l\'utilisateur qui a soumis ce message.';
$string['privacy:metadata:moodleoverflow_ratings'] = 'Informations sur les évaluations des messages. Cela inclut quand un utilisateur a voté pour un message ainsi que son évaluation.';
$string['privacy:metadata:moodleoverflow_ratings:discussionid'] = 'L\'ID de la discussion à laquelle appartient le message évalué.';
$string['privacy:metadata:moodleoverflow_ratings:firstrated'] = 'Date à laquelle l\'évaluation a été soumise.';
$string['privacy:metadata:moodleoverflow_ratings:lastchanged'] = 'Date à laquelle l\'évaluation a été modifiée pour la dernière fois.';
$string['privacy:metadata:moodleoverflow_ratings:moodleoverflowid'] = 'L\'ID du forum Moodleoverflow qui contient le message évalué.';
$string['privacy:metadata:moodleoverflow_ratings:postid'] = 'L\'ID du message qui a été évalué.';
$string['privacy:metadata:moodleoverflow_ratings:rating'] = 'Évaluation soumise. 0 = neutre, 1 = négative, 2 = positive, 3 = utile, 4 = solution';
$string['privacy:metadata:moodleoverflow_ratings:userid'] = 'L\'ID de l\'utilisateur qui a soumis l\'évaluation.';
$string['privacy:metadata:moodleoverflow_read'] = 'Informations sur le suivi de lecture des messages. Cela inclut quand les messages ont été lus par un utilisateur.';
$string['privacy:metadata:moodleoverflow_read:discussionid'] = 'L\'ID de la discussion à laquelle appartient le message lu.';
$string['privacy:metadata:moodleoverflow_read:firstread'] = 'Date à laquelle le message a été lu pour la première fois.';
$string['privacy:metadata:moodleoverflow_read:lastread'] = 'Date à laquelle le message a été lu pour la dernière fois par l\'utilisateur.';
$string['privacy:metadata:moodleoverflow_read:postid'] = 'L\'ID du message qui a été lu.';
$string['privacy:metadata:moodleoverflow_read:userid'] = 'L\'ID de l\'utilisateur qui a lu ce message.';
$string['privacy:metadata:moodleoverflow_subscriptions'] = 'Informations sur les abonnements aux forums. Cela inclut les forums auxquels un uttilisateur s\'est abonné.';
$string['privacy:metadata:moodleoverflow_subscriptions:moodleoverflow'] = 'L\'ID du forum Moodleoverflow auquel l\'utilisateur s\'est abonné.';
$string['privacy:metadata:moodleoverflow_subscriptions:userid'] = 'L\'ID de l\'utilisateur qui s\'est abonné à un forum.';
$string['privacy:metadata:moodleoverflow_tracking'] = 'Informations sur le suivi des forums. Cela inclut quels forums un utilisateur ne suit pas.';
$string['privacy:metadata:moodleoverflow_tracking:moodleoverflowid'] = 'L\'ID du forum moodleoverflow qui n\'est pas suivi par l\'utilisateur.';
$string['privacy:metadata:moodleoverflow_tracking:userid'] = 'L\'ID de l\'utilisateur qui ne suit pas le forum.';
$string['privacy:postwasread'] = 'Ce message a été lu en premier le {$a->firstread} et plus récemment le {$a->lastread}';
$string['privacy:readtrackingdisabled'] = 'Vous avez choisi de ne pas suivre les messages que vous avez lus dans ce forum.';
$string['privacy:subscribedtoforum'] = 'Vous êtes abonné(e) à ce forum.';
$string['rateownpost'] = 'Vous ne pouvez pas voter pour votre propre message.';
$string['ratingfailed'] = 'Évaluation échouée. Essayez encore.';
$string['ratingheading'] = 'Évaluation et réputation';
$string['ratingpreference'] = 'Afficher en premier';
$string['ratingpreference_help'] = 'Les réponses peuvent être marquées soit en tant que solution, soit en tant qu\'utiles. Cette option définit lequel des deux sera affiché en premier dans la discussion. Il y a 2 options :

* Utile - Un message marqué comme utile sera épinglée en haut de la discussion
* Résolu - Un message marqué comme solution par l\'enseignant sera épinglé en haut de la discussion';
$string['ratingtoold'] = 'Les évaluations ne peuvent être modifiées que pendant 30min.';
$string['re'] = 'Re :';
$string['reply'] = 'Commentaire';
$string['replyfirst'] = 'Réponse';
$string['reputation'] = 'Réputation';
$string['reputationnotnegative'] = 'Réputation seulement positive ?';
$string['scalefactor'] = 'Facteur d\'échelle';
$string['scalefactor_help'] = 'L\'évaluation de l\'utilisateur est divisée par le facteur d\'échelle pour obtenir le rang de chaque utilisateur. Si le rang résultant est plus haut que le rang max, la valeur est limitée au maximum spécifié';
$string['scalefactorerror'] = 'Le facteur d\'échelle doit être un entier positif différent de zéro';
$string['smallmessage'] = '{$a->user} a posté un message dans {$a->moodleoverflowname}';
$string['solvedanswer'] = 'Ce message est marqué comme solution.';
$string['starterrating'] = 'Utile';
$string['subject'] = 'Sujet';
$string['subscribe'] = 'S\'abonner à ce forum';
$string['subscribed'] = 'Abonné';
$string['subscribeenrolledonly'] = 'Désolé, seulement les utilisateurs inscrits à ce cours sont autorisés à s\'abonner aux notificaions de message.';
$string['subscribestart'] = 'Envoyez-moi des notifications pour tous les nouveaux messages de ce forum';
$string['subscribestop'] = 'Je ne souhaite pas être notifié des nouveaux messages dans ce forum';
$string['subscriptionauto'] = 'Abonnement auto';
$string['subscriptiondisabled'] = 'Abonnement désactivé';
$string['subscriptionforced'] = 'Abonnement forcé';
$string['subscriptionmode'] = 'Mode d\'abonnement';
$string['subscriptionmode_help'] = 'Quand un participant est abonné à un forum cela signifie qu\'il va recevoir les notifications de publication sur le forum. Il y a 4 modes d\'abonnement :

* Abonnement facultatif - Les participants peuvent choisir de s\'abonner
* Abonnement forcé - Tout le monde est abonné et ne peut se désabonner
* Abonnement auto - Tout le monde est abonné initialement mais peut choisir de se désabonner n\'importe quand
* Abonnement désactivé - Les abonnements ne sont pas autorisés

Note: Chaque modification du mode d\'abonnement n\'affectera que les futurs inscrits au cours mais pas les utilisateurs existants.';
$string['subscriptionoptional'] = 'Abonnement facultatif';
$string['subscriptiontrackingheader'] = 'Abonnement et suivi';
$string['taskcleanreadrecords'] = 'Moodleoverflow maintenance job pour nettoyer les vieux enregistrements lus';
$string['tasksendmails'] = 'Moodleoverflow maintenance job pour envoyer les mails';
$string['taskupdategrades'] = 'Tâche de maintenance Moodleoverflow pour mettre à jour les rangs';
$string['teacherrating'] = 'Solution';
$string['tracking'] = 'Suivi';
$string['trackingoff'] = 'Désactivé';
$string['trackingon'] = 'Forcé';
$string['trackingoptional'] = 'Facultatif';
$string['trackingtype'] = 'Suivi de lecture';
$string['trackingtype_help'] = 'Le suivi de lecture permet aux participants de facilement vérifier quels messages ils n\'ont pas encore vus en surlignant les nouveaux.

Si le rélage est sur Facultatif, le suivi est activé par défaut mais les participants peuvent le désactiver.

Si \'Autoriser le suivi de lecture forcé\' est activé dans l\'administration du site, alors une autre option est disponible - forcé. Cela signifie que le suivi est toujours activé.';
$string['trackmoodleoverflow'] = 'Suivre les messages non lus';
$string['unknownerror'] = 'Erreur inconnue.';
$string['unreadposts'] = 'Messages non lus';
$string['unreadpostsnumber'] = '{$a} messages non lus';
$string['unreadpostsone'] = '1 message non lu';
$string['unsubscribe'] = 'Se désabonner de ce forum';
$string['unsubscribediscussion'] = 'Se désabonner de cette discussion';
$string['unsubscribediscussionlink'] = 'Se désabonner de cete discussion : {$a}';
$string['unsubscribelink'] = 'Se désabonner de ce forum : {$a}';
$string['updategrades'] = 'Mise à jour des rangs';
$string['upvote'] = 'Vote positif';
$string['upvotenotchangeable'] = 'Vote positif (non modifiable)';
$string['votescaledownvote'] = 'Reputation : Vote négatif';
$string['votescalehelpful'] = 'Reputation : Utile';
$string['votescalesolved'] = 'Reputation : Solution';
$string['votescaleupvote'] = 'Reputation : Vote positif';
$string['votescalevote'] = 'Réputation : Vote.';
$string['yournewtopic'] = 'Votre nouveau sujet de discussion';
$string['yourreply'] = 'Votre réponse';
