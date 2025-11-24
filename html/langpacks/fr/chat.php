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
 * Strings for component 'chat', language 'fr', version '4.5'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Vous avez des sessions de chat prévues';
$string['ajax'] = 'Version AJAX';
$string['autoscroll'] = 'Défilement automatique';
$string['beep'] = 'Bip';
$string['bubble'] = 'Bulle';
$string['cantlogin'] = 'Connexion au salon de chat impossible !';
$string['chat:addinstance'] = 'Ajouter un chat';
$string['chat:chat'] = 'Accéder à un salon de chat';
$string['chat:deletelog'] = 'Supprimer les journaux des chats';
$string['chat:exportparticipatedsession'] = 'Exporter les sessions de chat auxquelles vous avez participé';
$string['chat:exportsession'] = 'Exporter toutes les sessions de chat';
$string['chat:readlog'] = 'Consulter les journaux des chats';
$string['chat:talk'] = 'Participer à un chat';
$string['chat:view'] = 'Consulter les activités chat';
$string['chatintro'] = 'Description';
$string['chatname'] = 'Nom de ce salon';
$string['chatreport'] = 'Sessions de chat';
$string['chattime'] = 'Prochaine session';
$string['compact'] = 'Compact';
$string['composemessage'] = 'Composer un message';
$string['configmethod'] = 'La méthode de chat AJAX fournit une interface AJAX pour le chat, qui contacte régulièrement le serveur pour actualiser l’affichage. La méthode normale de chat contacte également régulièrement le serveur pour actualiser l’affichage. Aucune configuration n’est nécessaire et cela fonctionne partout. En revanche, cela induit une charge importante du serveur, notamment s’il y a de nombreux participants au chat. L’utilisation d’un « démon » sur le serveur nécessite l’accès à l’environnement de commande Unix, mais offre en contrepartie un chat rapide et extensible.';
$string['confignormalupdatemode'] = 'L’actualisation de l’affichage des salons de chat est normalement fait de manière plus efficace grâce à l’utilisation de la fonction <em>Keep-Alive</em> du protocole HTTP 1.1, mais cette option charge passablement le serveur. Une méthode plus sophistiquée utilise la stratégie des <em>Flux</em> pour actualiser l’affichage. L’utilisation des <em>Flux</em> fonctionne mieux lorsqu’il y a de nombreuses connexions (tout comme l’utilisation du démon <em>chatd</em>), mais n’est peut-être pas prise en charge par votre serveur.';
$string['configoldping'] = 'La durée maximale (en secondes) avant de considérer qu’un utilisateur inactif est déconnecté. Il s’agit d’une limite supérieure, car les déconnexions sont détectées très rapidement. Une courte durée chargera plus votre serveur. Si vous utilisez la méthode standard de chat, ne fixez <strong>jamais</strong> cette valeur à moins de 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Fréquence d’actualisation du salon (en secondes) ? Une valeur basse donnera une impression de rapidité, mais surchargera votre serveur web lorsque beaucoup de monde utilisera le chat.';
$string['configrefreshuserlist'] = 'Fréquence d’actualisation de la liste des utilisateurs (en secondes)';
$string['configserverhost'] = 'Le nom de l’ordinateur (hostname) sur lequel tourne le démon';
$string['configserverip'] = 'L’adresse IP numérique de l’ordinateur sur lequel tourne le démon';
$string['configservermax'] = 'Nombre maximal de clients autorisés';
$string['configserverport'] = 'Port à utiliser par le démon sur le serveur';
$string['coursetheme'] = 'Thème de cours';
$string['crontask'] = 'Traitement en tâche de fond du module chat';
$string['currentchats'] = 'Sessions actives';
$string['currentusers'] = 'Utilisateurs en ligne';
$string['deletesession'] = 'Supprimer cette session';
$string['deletesessionsure'] = 'Voulez-vous vraiment supprimer cette session ?';
$string['donotusechattime'] = 'Ne pas publier les horaires de chat';
$string['enterchat'] = 'Participer au chat';
$string['entermessage'] = 'Saisissez votre message';
$string['errornousers'] = 'Il n’y a pas d’utilisateur';
$string['eventmessagesent'] = 'Message envoyé';
$string['eventsessionsviewed'] = 'Sessions consultées';
$string['explaingeneralconfig'] = 'Ces réglages sont <strong>toujours</strong> utilisés';
$string['explainmethoddaemon'] = 'Ces réglages ne sont effectifs que si vous avez choisi la méthode de chat « Démon de chat »';
$string['explainmethodnormal'] = 'Ces réglages ne sont effectifs que si vous avez choisi la méthode de chat « Normal ».';
$string['generalconfig'] = 'Configuration générale';
$string['idle'] = 'En attente';
$string['indicator:cognitivedepth'] = 'Chat : aspect cognitif';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l’étudiant dans une activité Chat.';
$string['indicator:cognitivedepthdef'] = 'Chat : aspect cognitif';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint durant cet intervalle d’analyse ce pourcentage d’engagement cognitif offert par les activités « Chat » (niveaux : pas de vue, vue, envoi, vue du feedback, commentaire du feedback).';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Chat : aspect social';
$string['indicator:socialbreadth_help'] = 'Cet indicateur se base sur l’interaction sociale atteinte par l’étudiant dans une activité Chat.';
$string['indicator:socialbreadthdef'] = 'Chat : aspect social';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint durant cet intervalle d’analyse ce pourcentage d’engagement social offert par les activités « Chat » (niveaux : pas de participation, participant seul, participant avec d’autres).';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['inputarea'] = 'Zone de saisie';
$string['invalidid'] = 'Salon de chat introuvable !';
$string['list_all_sessions'] = 'Lister toutes les sessions.';
$string['list_complete_sessions'] = 'Lister les sessions complètes.';
$string['listing_all_sessions'] = 'Liste de toutes les sessions.';
$string['messagebeepseveryone'] = '{$a} bipe tout le monde !';
$string['messagebeepsyou'] = '{$a} vient de vous biper !';
$string['messageenter'] = '{$a} vient d’entrer';
$string['messageexit'] = '{$a} a quitté ce chat';
$string['messages'] = 'Messages';
$string['messageyoubeep'] = 'Vous avez bippé {$a}';
$string['method'] = 'Méthode du chat';
$string['methodajax'] = 'AJAX';
$string['methoddaemon'] = 'Démon de chat';
$string['methodnormal'] = 'Normal';
$string['modulename'] = 'Chat';
$string['modulename_help'] = 'Le module d’activité chat permet aux participants d’avoir une discussion synchrone en temps réel, en mode texte.

Un chat peut être une activité unique ou peut être répété à la même heure chaque jour ou chaque semaine. Les sessions de chat sont enregistrées et peuvent être publiées pour tous ou restreintes aux utilisateurs ayant les les permissions requises.

Les chats sont particulièrement utiles lorsque le groupe ne peut pas se rencontrer face à face, pour :

* des rencontres virtuelles régulières entre participants suivant un cours à distance, leur permettant de partager leurs expériences
* permettre à un participant temporairement empêché de participer en personne de discuter avec l’enseignant
* permettre à des enfants de chatter dans un environnement contrôlé comme introduction au monde des réseaux sociaux
* une session de questions-réponses avec un intervenant invité d’un pays éloigné';
$string['modulename_link'] = 'mod/chat/view';
$string['modulenameplural'] = 'Chats';
$string['neverdeletemessages'] = 'Ne pas effacer les messages';
$string['nextchattime'] = 'Horaire du prochain chat :';
$string['no_complete_sessions_found'] = 'Aucune session complète trouvée.';
$string['nochat'] = 'Aucun chat trouvé';
$string['noguests'] = 'Ce salon n’est pas ouvert aux visiteurs anonymes';
$string['nomessages'] = 'Pas encore de messages';
$string['nopermissiontoseethechatlog'] = 'Vous n’avez pas les permissions requises pour consulter les journaux de chat.';
$string['normalkeepalive'] = 'Keep-Alive';
$string['normalstream'] = 'Flux';
$string['noscheduledsession'] = 'Aucune session agendée';
$string['notallowenter'] = 'Vous n’avez pas les permissions requises pour accéder à ce salon de chat.';
$string['notlogged'] = 'Vous n’êtes pas authentifié !';
$string['oldping'] = 'Délai de déconnexion';
$string['page-mod-chat-x'] = 'Toute page du module chat';
$string['pastchats'] = 'Sessions de chat antérieures';
$string['pastsessions'] = 'Sessions passées';
$string['pluginadministration'] = 'Administration du chat';
$string['pluginname'] = 'Chat';
$string['privacy:metadata:chat_messages_current'] = 'Session de chat en cours. Ces données sont temporaires et supprimées lorsque la session de chat est terminée';
$string['privacy:metadata:chat_users'] = 'Conserve la trace des utilisateurs inscrits dans chaque salon de chat';
$string['privacy:metadata:chat_users:firstping'] = 'Date et heure du premier accès au salon de chat';
$string['privacy:metadata:chat_users:ip'] = 'Adresse IP de l’utilisateur';
$string['privacy:metadata:chat_users:lang'] = 'Langue de l’utilisateur';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Date et heure du dernier message dans ce salon de chat';
$string['privacy:metadata:chat_users:lastping'] = 'Date et heure du dernier accès au salon de chat';
$string['privacy:metadata:chat_users:userid'] = 'L’identifiant de l’utilisateur';
$string['privacy:metadata:chat_users:version'] = 'Comment l’utilisateur a accédé au chat (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'Un enregistrement des messages envoyés durant une session de chat';
$string['privacy:metadata:messages:issystem'] = 'Si le message est un message généré par le système';
$string['privacy:metadata:messages:message'] = 'Le message';
$string['privacy:metadata:messages:timestamp'] = 'La date et l’heure de l’envoi du message.';
$string['privacy:metadata:messages:userid'] = 'L’identifiant utilisateur de l’auteur du message';
$string['refreshroom'] = 'Actualisation salon';
$string['refreshuserlist'] = 'Actualisation liste utilisateurs';
$string['removemessages'] = 'Tous les messages';
$string['repeatdaily'] = 'Chaque jour à la même heure';
$string['repeatnone'] = 'Pas de répétition - ne publier que la date spécifiée';
$string['repeattimes'] = 'Répéter/publier les horaires des sessions';
$string['repeatweekly'] = 'Chaque semaine à la même heure';
$string['saidto'] = 'a dit à';
$string['savemessages'] = 'Enregistrer les sessions précédentes';
$string['search:activity'] = 'Chat – information sur l’activité';
$string['seesession'] = 'Consulter cette session';
$string['send'] = 'Envoyer';
$string['sending'] = 'Envoi';
$string['serverhost'] = 'Nom du serveur';
$string['serverip'] = 'Adresse IP serveur';
$string['servermax'] = 'Nombre max d’utilisateurs';
$string['serverport'] = 'Port du serveur';
$string['sessions'] = 'Sessions de chat';
$string['sessionstartsin'] = 'La prochaine session de chat commencera dans {$a}';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Tout le monde peut consulter les sessions précédentes';
$string['studentseereports_help'] = 'Si ce réglage est désactivé, seuls les utilisateurs avec la capacité mod/chat:readlog pourront consulter les journaux de chat';
$string['talk'] = 'Parler';
$string['updatemethod'] = 'Méthode d’actualisation';
$string['updaterate'] = 'Modifier la vitesse :';
$string['userlist'] = 'Liste d’utilisateurs';
$string['usingchat'] = 'Utilisation du chat';
$string['usingchat_help'] = 'Le module de chat contient quelques fonctions rendant le chat un peu plus sympathique.

*Binettes : toutes les binettes (emoticons) que vous pouvez utiliser dans Moodle peuvent aussi être tapées ici, par exemple, :-)
* Liens : les adresses Internet (URLs) sont automatiquement transformées en liens actifs.
* Personnalisation : vous pouvez commencer une ligne avec « /me » ou « : » pour personnaliser vos interventions. Si votre nom est Héloïse, et que vous tapez « :rigole ! » ou « /me rigole ! », tout le monde lira « Héloïse rigole ! ».
* Bips : vous pouvez envoyer un son à quelqu’un en cliquant sur le lien « bip » à côté de son nom. Pour envoyer ce son à tous les participants au chat, vous pouvez simplement taper « beep all ».
* HTML : si vous connaissez le langage HTML, vous pouvez l’utiliser dans vos interventions pour ajouter des images, des sons ou créer des textes de couleurs et de tailles diverses.';
$string['viewreport'] = 'Sessions précédentes';
