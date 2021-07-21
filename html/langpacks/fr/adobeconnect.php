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
 * Strings for component 'adobeconnect', language 'fr', version '3.11'.
 *
 * @package     adobeconnect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addparticipant'] = 'Ajouter';
$string['addpresenter'] = 'Ajouter';
$string['admin_httpauth'] = 'En-tête d\'authentification HTTP';
$string['admin_httpauth_desc'] = 'La valeur HTTP_AUTH_HEADER utilisée dans votre custom.ini';
$string['admin_login'] = 'Connexion administrateur';
$string['admin_login_desc'] = 'Se connecter pour le compte administrateur principal';
$string['admin_password'] = 'Mot de passe administrateur';
$string['admin_password_desc'] = 'Mot de passe pour le compte administrateur principal';
$string['adminemptyxml'] = 'Impossible de se connecter au serveur Adobe Connect Pro pour le moment. Cliquez sur continuer pour accéder à la page des paramètres d\'activité et tester la connexion';
$string['adminnotsetupproperty'] = 'Le module d\'activité n\'est pas correctement configuré. Cliquez sur continuer pour accéder à la page des paramètres d\'activité et tester la connexion';
$string['adobeconnect'] = 'Adobe Connect';
$string['adobeconnect:meetinghost'] = 'Hôte de réunion';
$string['adobeconnect:meetingparticipant'] = 'Participant de la réunion';
$string['adobeconnect:meetingpresenter'] = 'Présentateur de réunion';
$string['adobeconnectfieldset'] = 'Paramètres Adobe Connect';
$string['adobeconnecthost'] = 'Adobe Connect Host';
$string['adobeconnecthostdescription'] = 'L\'hôte peut donner à d\'autres utilisateurs des privilèges, démarrer et arrêter une réunion en plus de ce que peut faire un client';
$string['adobeconnectintro'] = 'Intro';
$string['adobeconnectname'] = 'Titre de la réunion';
$string['adobeconnectparticipant'] = 'Participant Adobe Connect';
$string['adobeconnectparticipantdescription'] = 'Peut afficher, mais ne peut modifier aucun paramètre de réunion';
$string['adobeconnectpresenter'] = 'Présentateur Adobe Connect';
$string['adobeconnectpresenterdescription'] = 'Le présentateur d\'une réunion peut présenter du contenu, partager un écran, envoyer des messages texte, modérer les questions, créer des notes de texte, diffuser des contenus audio et vidéo et diffuser du contenu à partir de liens Web';
$string['allusers'] = 'tous les utilisateurs';
$string['assignadoberole'] = 'Affectation de rôles Adobe';
$string['assignadoberoles'] = 'Affectation $a->role du rôle pour $a->meetname ($a->groupname)';
$string['assignroles'] = 'Attribuer des rôles';
$string['availablelist'] = 'Disponible';
$string['backtomeeting'] = 'Retour à la réunion $a';
$string['cancelchanges'] = 'Annuler';
$string['connectiontesttitle'] = 'Fenêtre de test de connexion';
$string['conntestintro'] = '<p> Une série de tests ont été exécutés pour déterminer si le serveur Adobe Connect Pro a été correctement configuré pour que cette intégration fonctionne et pour déterminer également si les informations d’identification fournies dans les paramètres globaux de l’activité disposent des autorisations nécessaires pour exécuter les tâches. tâches nécessaires requises par le module d\'activité. Si l\'un des tests ci-dessous a échoué, ce module d\'activité ne fonctionnera pas correctement. </p><p> Pour plus d\'informations sur la configuration de votre serveur Adobe Connect Pro, consultez la page d\'aide de MoodleDocs <a href="{$ a->url}"> page d\'aide </a> </p>';
$string['duplicatemeetingname'] = 'Un nom de réunion en double a été trouvé sur le serveur';
$string['duplicateurl'] = 'Une URL de réunion en double a été trouvée sur le serveur';
$string['editingfor'] = 'Modification pour : $a';
$string['email_login'] = 'Connexion par courriel';
$string['email_login_desc'] = 'Cochez cette option uniquement si votre connexion au serveur Connect Pro est définie pour utiliser l\'adresse électronique. Notez que l\'activation/désactivation de cette option lors de l\'utilisation régulière de ce module d\'activité peut potentiellement créer des utilisateurs dupliqués sur le serveur Connect Pro.';
$string['emptyxml'] = 'Impossible de se connecter au serveur Adobe Connect Pro pour le moment. Veuillez informer votre administrateur Moodle.';
$string['endtime'] = 'Heure de fin';
$string['error1'] = 'Vous devez être administrateur du site pour accéder à cette page';
$string['error2'] = 'La propriété « {$a} » est vide, entrez une valeur et enregistrez les paramètres';
$string['errormeeting'] = 'Erreur lors de la récupération de l\'enregistrement';
$string['errorrecording'] = 'Impossible de trouver la session d\'enregistrement';
$string['event_assign_role'] = 'Utilisateur affecté à un rôle Connect Pro';
$string['event_join_meeting'] = 'L\'utilisateur a rejoint une réunion';
$string['event_unassign_role'] = 'Utilisateur non affecté à un rôle Connect Pro';
$string['event_view'] = 'Activité consultée';
$string['event_view_all'] = 'Visualisé toutes les instances de l\'activité';
$string['event_view_recording'] = 'Utilisateur a visualisé un enregistrement';
$string['existingusers'] = '$a utilisateurs existants';
$string['greaterstarttime'] = 'L\'heure de début ne peut pas être supérieure à l\'heure de fin';
$string['groupswitch'] = 'Filtrer par groupe';
$string['host'] = 'Hôte';
$string['host_desc'] = 'Où les appels REST sont envoyés';
$string['https'] = 'Connexion HTTPS';
$string['https_desc'] = 'Se connecter au serveur Connect via HTTPS';
$string['invalidadobemeeturl'] = 'Entrée non valide pour ce champ. Cliquez sur la bulle d\'aide pour les entrées valides';
$string['invalidurl'] = 'L\'URL doit commencer par une lettre (a-z)';
$string['joinmeeting'] = 'Joindre la réunion';
$string['longurl'] = 'Cette URL de réunion est trop longue. Essayez de la raccourcir';
$string['meethost_desc'] = 'Domaine où le serveur Adobe est installé';
$string['meetinfo'] = 'Plus de détail de la réunion';
$string['meetinfotxt'] = 'Voir les détails de la réunion du serveur';
$string['meetingend'] = 'Heure de fin de réunion';
$string['meetinggroup'] = 'Groupe de rencontre';
$string['meetinghost'] = 'Domaine de réunion';
$string['meetinginfo'] = 'Informations sur la réunion';
$string['meetingintro'] = 'Résumé de la réunion';
$string['meetingname'] = 'Nom de la réunion';
$string['meetingstart'] = 'Heure de début de la réunion';
$string['meetingtype'] = 'Type de réunion';
$string['meetingtype_help'] = '<p> Une réunion de type public en est une où toute personne disposant de l’URL de la réunion peut entrer dans la salle. </p>

<p> Une réunion de type privée en est une où seuls les utilisateurs et les participants enregistrés peuvent entrer. La page de connexion ne permet pas aux invités de se connecter. Avec les réunions privées, la réunion ne démarre pas avant que le présentateur ou l’hôte de la réunion se joigne à la réunion.</p>

<p>
Si vous créez une réunion privée, il est toujours recommandé d’affecter à au moins 1 hôte ou présentateur qui sera présent à la réunion; parce que les utilisateurs avec le rôle du participant ne pourront pas participer à la réunion (les chat/audio/vidéo seront bloqués) à moins qu\'un utilisateur ayant le rôle d’hôte ou de présentateur ait déjà rejoint la réunion.
</p>

<p>
Si la réunion prend en charge des groupes distincts, au moins 1 utilisateur dans chaque groupe, devant être présent à la réunion, devrait avoir le rôle d’hôte ou de présentateur.
</p>';
$string['meettemplates'] = 'Modèles de réunion';
$string['meettemplates_help'] = '<p> Un modèle de salle de réunion crée une réunion avec une disposition personnalisée pour la salle de réunion. </p>';
$string['meeturl'] = 'URL de la réunion';
$string['meeturl_help'] = '<p> Vous pouvez personnaliser l’URL utilisée pour vous connecter à la téléconférence Adobe. Le domaine Adobe Server restera toujours le même.
 Cependant, la dernière partie de l\'URL peut être personnalisée.
</p>
<p>Par exemple, si le domaine du serveur Adobe Connect était situé à l\'adresse<b> http://adobe.connect.serveur/</b>.
  Lors de la personnalisation de l\'URL vers <b>mareunion</b>, l\'URL de connexion à la réunion serait <b>http: //adobe.connect.serveur/mareunion</b>. N\'incluez pas la barre oblique.
</p>
<p> Les entrées d’URL valides se composent du nom avec :
<ul>
<li>mareunion</li>
<li>/mareunion </li>
</ul>

Les entrées d\'URL non valides se composent de plusieurs barres obliques :
<ul>
<li>mareunion/mareunion</li>
<li>mareunion/mareunion/</li>
<li>mareunion/mareunion//uneautrereunion</li>
<li>mareunion/</li>
</ul>

</p>
<p>Une fois la réunion enregistrée, vous ne pourrez plus modifier/mettre à jour ce champ car le champ sera désactivé.
Si vous mettez à jour les paramètres d\'activité et si <b>Mode groupes</b> est défini sur aucun groupe, vous verrez une partie de l\'URL dans le champ de texte.
Sinon, le champ de texte restera vide car chaque groupe de cours aura sa propre URL de réunion.
</p>';
$string['missingexpectedgroups'] = 'Il n\'y a aucun groupe disponible';
$string['modulename'] = 'Adobe Connect';
$string['modulenameplural'] = 'Adobe Connect';
$string['noinstances'] = 'Il n\'y a pas d\'instance d\'adobeconnect';
$string['nomeeting'] = 'Aucune réunion n\'existe sur le serveur';
$string['nopresenterrole'] = 'erreur: erreur lors de la recherche du rôle adobeconnectpresenter';
$string['notparticipant'] = 'Vous n\'êtes pas participant à cette réunion';
$string['notsetupproperty'] = 'Le module d\'activité n\'est pas correctement configuré. Veuillez contacter votre administrateur Moodle';
$string['participantbtngrp'] = 'Actions participant';
$string['participantsgrp'] = 'Utilisateurs de la réunion';
$string['particpantslabel'] = 'Participants';
$string['pluginadministration'] = 'Administration d\'Adobe Connect';
$string['pluginname'] = 'Adobe Connect';
$string['port'] = 'Port';
$string['port_desc'] = 'Port utilisé pour se connecter à Adobe Connect';
$string['potentialusers'] = '$a utilisateurs potentiels';
$string['presenterbtngrp'] = 'Actions du présentateur';
$string['presenterlabel'] = 'Présentateur';
$string['private'] = 'Privé';
$string['public'] = 'Publique';
$string['record_force'] = 'Forcer les enregistrements de réunion';
$string['record_force_desc'] = 'Forcer l\'enregistrement de toutes les réunions Adobe Connect. Ceci est un effet de site et le serveur Adobe Connect doit être redémarré';
$string['recordinghdr'] = 'Enregistrements';
$string['removeparticipant'] = 'Enlever';
$string['removepresenter'] = 'Enlever';
$string['roletoassign'] = 'Rôle à attribuer';
$string['samemeettime'] = 'Heure de réunion invalide';
$string['savechanges'] = 'Enregistrer';
$string['selectparticipants'] = 'Attribuer des rôles';
$string['settingblurb'] = '<center><img src = "{$a-> image}" /> </center><br />
    <p>Adobe Systems Inc. et Remote-Learner.net se sont associés pour créer le premier logiciel disponible au public et sponsorisé officiellement, méthode d\'intégration entre Moodle et Adobe Acrobat Connect Pro. Cette nouvelle intégration est conçue pour simplifier l\'utilisation des événements synchrones dans Moodle. Il fournit une connexion unique entre les deux systèmes avec la création et gestion faciles de réunions Adobe Connect Pro
     </p><br />
    <p><center> À propos de Remote-Learner </center>
    Remote-Learner fournit des services de technologies éducatives depuis 1982,
    à ses clients d\'entreprise, du monde de l\'éducation et gouvernementaux. Aujourd’hui, ces services incluent un support pour les meilleurs
    programmes open source. Remote-Learner est un partenaire officiel de Moodle, partenaire de JasperSoft et
    partenaire Alfresco. La société propose des services d’hébergement SaaS, des contrats de support informatique,
    programmation, formation au développement de la main-d\'œuvre, conception pédagogique et service-conseil stratégique
     pour les organisations qui planifient des programmes d\'apprentissage en ligne.</p><br />
    <p>Consultez le <a href="{$a->url} ">répertoire des plug-ins Adobe Connect Moodle</a> pour obtenir des informations sur le support Enterprise.</p>';
$string['starttime'] = 'Heure de début';
$string['testconnection'] = 'Test de connexion';
$string['unableretrdetails'] = 'Impossible de récupérer les détails de la réunion';
$string['usergrouprequired'] = 'Cette réunion exige que les utilisateurs soient en groupe pour pouvoir rejoindre';
$string['usernotenrolled'] = 'Seuls les utilisateurs inscrits et ayant un rôle dans ce cours peuvent rejoindre cette réunion';
