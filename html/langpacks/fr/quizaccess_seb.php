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
 * Strings for component 'quizaccess_seb', language 'fr', version '4.4'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Ajouter un gabarit';
$string['allowedbrowserkeysdistinct'] = 'Les clefs doivent toutes être distinctes';
$string['allowedbrowserkeyssyntax'] = 'Une clef doit être une chaîne de 64 caractères hexadécimaux.';
$string['cachedef_config'] = 'Cache de configuration SEB';
$string['cachedef_configkey'] = 'Cache de clef de configuration SEB';
$string['cachedef_quizsettings'] = 'Cache de réglages de test SEB';
$string['cantdelete'] = 'Le gabarit ne peut pas être supprimé, car il a été utilisé pour un ou plusieurs tests.';
$string['cantedit'] = 'Le gabarit ne peut pas être modifié, car il a été utilisé pour un ou plusieurs tests.';
$string['checkingaccess'] = 'Vérification de l’accès à Safe Exam Browser…';
$string['clientrequiresseb'] = 'Ce test a été configuré pour utiliser Safe Exam Browser avec une configuration client.';
$string['confirmtemplateremovalquestion'] = 'Voulez-vous vraiment supprimer ce gabarit ?';
$string['confirmtemplateremovaltitle'] = 'Confirmer la suppression du gabarit';
$string['conflictingsettings'] = 'Vous n’avez pas les permissions requises pour modifier les réglages Safe Exam Browser existants.';
$string['content'] = 'Gabarit';
$string['description'] = 'Description';
$string['disabledsettings'] = 'Réglages désactivés.';
$string['disabledsettings_help'] = 'Les réglages de test Safe Exam Browser ne peuvent pas être modifiés si le test a déjà été tenté. Pour effectuer des modifications, toutes les tentatives de test doivent être d’abord supprimées.';
$string['downloadsebconfig'] = 'Télécharger le fichier de configuration SEB';
$string['duplicatetemplate'] = 'Un gabarit de même nom existe déjà';
$string['edittemplate'] = 'Modifier gabarit';
$string['enabled'] = 'Activé';
$string['error:ws:nokeyprovided'] = 'Au moins une clef Safe Exam Browser doit être fournie.';
$string['error:ws:quiznotexists'] = 'Aucun test correspondant à l’ID de module de cours {$a}';
$string['event:accessprevented'] = 'L’accès au test a été empêché';
$string['event:templatecreated'] = 'Gabarit SEB créé';
$string['event:templatedeleted'] = 'Gabarit SEB supprimé';
$string['event:templatedisabled'] = 'Gabarit SEB désactivé';
$string['event:templateenabled'] = 'Gabarit SEB activé';
$string['event:templateupdated'] = 'Gabarit SEB modifié';
$string['exitsebbutton'] = 'Sortir de Safe Exam Browser';
$string['filemanager_sebconfigfile'] = 'Déposer un fichier de configuration SEB';
$string['filemanager_sebconfigfile_help'] = 'Veuillez déposer votre propre fichier de configuration SEB pour ce test.';
$string['filenotpresent'] = 'Veuillez déposer une fichier de configuration SEB.';
$string['fileparsefailed'] = 'Le fichier déposé n’a pas pu être enregistré comme fichier de configuration SEB.';
$string['httplinkbutton'] = 'Télécharger la configuration';
$string['invalid_browser_key'] = 'Clef de navigateur SEB non valide';
$string['invalid_config_key'] = 'Clef de configuration SEB non valide';
$string['invalidkeys'] = 'Les clefs de Safe Exam Browser n’ont pas pu être validées. Vérifiez que Safe Exam Browser est utilisé avec le fichier de configuration correct.';
$string['invalidtemplate'] = 'Gabarit de configuration SEB non valide';
$string['manage_templates'] = 'Gabarit Safe Exam Browser';
$string['managetemplates'] = 'Gérer les gabarits';
$string['missingrequiredsettings'] = 'Il manque certaines valeurs requises dans les réglages.';
$string['name'] = 'Nom';
$string['newtemplate'] = 'Nouveau gabarit';
$string['noconfigfilefound'] = 'Aucun fichier de configuration SEB déposé n’a été trouvé pour le test de cmid : {$a}';
$string['noconfigfound'] = 'Aucune configuration SEB n’a été trouvée pour le test de cmid : {$a}';
$string['not_seb'] = 'Aucun Safe Exam Browser n’est utilisé.';
$string['notemplate'] = 'Aucun gabarit';
$string['passwordnotset'] = 'Les réglages actuels exigent qu’un mot de passe soit configuré pour les tests utilisant Safe Exam Browser.';
$string['pluginname'] = 'Règles d’accès Safe Exam Browser';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Les réglages Safe Exam Browser pour un test. Incluent l’identifiant de l’utilisateur ayant créé ou modifié en dernier les réglages.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'Identifiant du test pour lesquels des réglages existent.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Horodatage de la création des réglages.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Horodatage de la dernière modification des réglages.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'Identifiant de l’utilisateur ayant créé ou modifié en dernier les réglages.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Les réglages du gabarit Safe Exam Browser. Incluent l’identifiant de l’utilisateur ayant créé ou modifié en dernier le gabarit.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Horodatage de la création du gabarit.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Horodatage de la dernière modification du gabarit.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'Identifiant de l’utilisateur ayant créé ou modifié en dernier le gabarit.';
$string['quizsettings'] = 'Réglages du test';
$string['restoredfrom'] = '{$a->name} (restauré via cmid {$a->cmid})';
$string['seb'] = 'Safe Exam Browser';
$string['seb:bypassseb'] = 'Court-circuiter l’obligation de consulter le test dans Safe Exam Browser.';
$string['seb:manage_filemanager_sebconfigfile'] = 'Modifier le réglage de test SEB « Sélectionner un fichier de configuration SEB ».';
$string['seb:manage_seb_activateurlfiltering'] = 'Modifier le réglage de test SEB « Activer le filtrage d’URL ».';
$string['seb:manage_seb_allowcapturecamera'] = 'Modifier le réglage de test SEB : permettre au navigateur d’accéder à la caméra';
$string['seb:manage_seb_allowcapturemicrophone'] = 'Modifier le réglage de test SEB : permettre au navigateur d’accéder au microphone';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Modifier le réglage de test SEB : « Modifier les clefs de navigateur pour examen autorisées ».';
$string['seb:manage_seb_allowreloadinexam'] = 'Modifier le réglage de test SEB : « Permettre le rechargement ».';
$string['seb:manage_seb_allowspellchecking'] = 'Modifier le réglage de test SEB : « Permettre la vérification orthographique ».';
$string['seb:manage_seb_allowuserquitseb'] = 'Modifier le réglage de test SEB : « Permettre l’action quitter ».';
$string['seb:manage_seb_enableaudiocontrol'] = 'Modifier le réglage de test SEB : « Activer les contrôles audio ».';
$string['seb:manage_seb_expressionsallowed'] = 'Modifier le réglage de test SEB : « Activer les contrôles audio ».';
$string['seb:manage_seb_expressionsblocked'] = 'Modifier le réglage de test SEB : « Expressions bloquées ».';
$string['seb:manage_seb_filterembeddedcontent'] = 'Modifier le réglage de test SEB : « Filtrer le contenu intégré ».';
$string['seb:manage_seb_linkquitseb'] = 'Modifier le réglage de test SEB : « Lien pour quitter ».';
$string['seb:manage_seb_muteonstartup'] = 'Modifier le réglage de test SEB : « Muet au démarrage ».';
$string['seb:manage_seb_quitpassword'] = 'Modifier le réglage de test SEB : « Mot de passe pour quitter ».';
$string['seb:manage_seb_regexallowed'] = 'Modifier le réglage de test SEB : « Expressions régulières autorisées ».';
$string['seb:manage_seb_regexblocked'] = 'Modifier le réglage de test SEB : « Expressions régulières bloquées ».';
$string['seb:manage_seb_requiresafeexambrowser'] = 'Modifier le réglage de test SEB : « Imposer l’utilisation de Safe Exam Browser ».';
$string['seb:manage_seb_showkeyboardlayout'] = 'Modifier le réglage de test SEB : « Afficher la configuration du clavier ».';
$string['seb:manage_seb_showreloadbutton'] = 'Modifier le réglage de test SEB : « Afficher le bouton recharger ».';
$string['seb:manage_seb_showsebdownloadlink'] = 'Modifier le réglage de test SEB : « Afficher le lien de téléchargement ».';
$string['seb:manage_seb_showsebtaskbar'] = 'Modifier le réglage de test SEB : « Afficher la barre des tâches SEB ».';
$string['seb:manage_seb_showtime'] = 'Modifier le réglage de test SEB : « Afficher l’heure ».';
$string['seb:manage_seb_showwificontrol'] = 'Modifier le réglage de test SEB : « Afficher la commande Wi-Fi ».';
$string['seb:manage_seb_templateid'] = 'Modifier le réglage de test SEB : « Sélectionner un gabarit SEB ».';
$string['seb:manage_seb_userconfirmquit'] = 'Modifier le réglage de test SEB : « Demander à l’utilisateur de confirmer la sortie ».';
$string['seb:managetemplates'] = 'Gérer les gabarits de configuration SEB';
$string['seb_activateurlfiltering'] = 'Activer le filtrage d’URL';
$string['seb_activateurlfiltering_help'] = 'Si ce réglage est activé, les URLs seront filtrés lors du chargement de pages web. Le filtre doit être défini ci-dessous.';
$string['seb_allowcapturecamera'] = 'Autoriser le navigateur à accéder à la caméra';
$string['seb_allowcapturecamera_help'] = 'Si ce réglage est activé, les utilisateurs se verront demander d’autoriser l’accès de SEB à la caméra avant que la session SEB ne commence. Avec macOS 12/iOS 15 ou ultérieur, la désactivation de ce réglage empêche les applications web d’accéder à la caméra dans tous les cas, p.ex. l’enregistrement vidéo via WebRTC sera impossible.';
$string['seb_allowcapturemicrophone'] = 'Autoriser le navigateur à accéder au microphone';
$string['seb_allowcapturemicrophone_help'] = 'Si ce réglage est activé, les utilisateurs se verront demander d’autoriser l’accès de SEB au microphone avant que la session SEB ne commence. Avec macOS 12/iOS 15 ou ultérieur, la désactivation de ce réglage empêche les applications web d’accéder à la caméra dans tous les cas, p.ex. l’enregistrement audio via WebRTC sera impossible.';
$string['seb_allowedbrowserexamkeys'] = 'Clefs de navigateur pour examen autorisées';
$string['seb_allowedbrowserexamkeys_help'] = 'Vous pouvez indiquer dans ce champ les clefs de navigateur pour examen pour les versions de Safe Exam Browser pouvant accéder à ce test. Si aucune clef n’est indiquée, Moodle ne vérifie pas les clefs de navigateur pour examen.';
$string['seb_allowreloadinexam'] = 'Permettre le rechargement de page durant l’examen';
$string['seb_allowreloadinexam_help'] = 'Si ce réglage est activé, le rechargement de page est permis (bouton recharger dans la barre des tâches de SEB, la barre d’outils du navigateur, menu dans iOS, raccourci-clavier). La mise en cache hors ligne peut échouer si un utilisateur recharge une page sans connexion Internet.';
$string['seb_allowspellchecking'] = 'Permettre la vérification orthographique';
$string['seb_allowspellchecking_help'] = 'Si ce réglage est activé, la vérification orthographique est permise dans le navigateur SEB.';
$string['seb_allowuserquitseb'] = 'Permettre l’action quitter de SEB';
$string['seb_allowuserquitseb_help'] = 'Si ce réglage est activé, les utilisateurs peuvent quitter SEB au moyen du bouton « Quitter » de la barre des tâches de SEB, à l’aide du raccourci-clavier ctrl-Q ou cmd-Q ou en cliquant sur le bouton de fermeture de la fenêtre principale du navigateur.';
$string['seb_enableaudiocontrol'] = 'Activer les contrôles audio';
$string['seb_enableaudiocontrol_help'] = 'Si ce réglage est activé, l’icône des contrôles audio est affichée dans la barre des tâches de SEB.';
$string['seb_expressionsallowed'] = 'Expressions autorisées';
$string['seb_expressionsallowed_help'] = 'Ce champ permet d’indiquer les expressions régulières pour le filtrage des URLs autorisées. L’utilisation du caractère joker « \\* » est possible.
Exemples d’expressions : « exemple.fr » ou « exemple.fr/truc/\\* ».  L’expression « exemple.fr » correspond à « exemple.fr », « www.exemple.fr » et à « www.mail.exemple.fr ». L’expression « exemple.fr/truc/\\* » correspond à toutes les requêtes de tous les sous-domaines de « exemple.fr » ayant « truc » comme premier segment de chemin.';
$string['seb_expressionsblocked'] = 'Expressions bloquées';
$string['seb_expressionsblocked_help'] = 'Ce champ permet d’indiquer les expressions régulières pour le filtrage des URLs bloquées. L’utilisation du caractère joker « \\* » est possible.
Exemples d’expressions : « exemple.fr » ou « exemple.fr/truc/\\* ».  L’expression « exemple.fr » correspond à « exemple.fr », « www.exemple.fr » et à « www.mail.exemple.fr ». L’expression « exemple.fr/truc/\\* » correspond à toutes les requêtes de tous les sous-domaines de « exemple.fr » ayant « truc » comme premier segment de chemin.';
$string['seb_filterembeddedcontent'] = 'Filtrer le contenu intégré';
$string['seb_filterembeddedcontent_help'] = 'Si ce réglage est activé, les ressources intégrées seront aussi filtrées au moyen du jeu de filtres.';
$string['seb_help'] = 'Configurer le test pour utilisation de Safe Exam Browser.';
$string['seb_linkquitseb'] = 'Afficher le bouton « Quitter Safe Exam Browser », configuré avec ce lien de sortie';
$string['seb_linkquitseb_help'] = 'Ce champ permet d’indiquer un lien de sortie de SEB, qui est utilisé comme bouton « Quitter Safe Exam Browser » sur la page qui suit l’envoi de l’examen. En cliquant sur le bouton ou sur le lien, quel que soit l’endroit où il est placé, il est possible de quitter SEB sans avoir besoin de saisir de mot de passe. Pour un site en HTTPS, le lien doit commencer par https://. Si aucun lien n’est indiqué, le bouton « Quitter Safe Exam Browser » n’est pas affiché et aucun lien n’est défini pour quitter SEB.';
$string['seb_managetemplates'] = 'Gérer les gabarits Safe Exam Browser';
$string['seb_muteonstartup'] = 'Muet au démarrage';
$string['seb_muteonstartup_help'] = 'Si ce réglage est activé, la sortie audio est désactivée lorsque SEB est démarré.';
$string['seb_quitpassword'] = 'Mot de passe pour quitter';
$string['seb_quitpassword_help'] = 'Ce mot de passe est demandé lorsque les utilisateurs veulent quitter SEB en utilisant le bouton « Quitter », un raccourci-clavier ou une commande du navigateur principal. Si aucun mot de passe n’est indiqué, SEB demandera simplement : « Voulez-vous vraiment quitter SEB ? ».';
$string['seb_regexallowed'] = 'Expressions régulières autorisées';
$string['seb_regexallowed_help'] = 'Un champ texte qui contient les expressions régulières pour le filtrage des URLs autorisées.';
$string['seb_regexblocked'] = 'Expressions régulières bloquées';
$string['seb_regexblocked_help'] = 'Un champ texte qui contient les expressions régulières pour le filtrage des URLs bloquées.';
$string['seb_requiresafeexambrowser'] = 'Imposer l’utilisation de Safe Exam Browser';
$string['seb_requiresafeexambrowser_help'] = 'Si ce réglage est activé, les étudiants ne peuvent répondre au test qu’au moyen de Safe Exam Browser.
Les options disponibles sont :

* Non
<br/>Safe Exam Browser n’est pas requis pour répondre au test.
* Oui – Utiliser un gabarit existant
<br/>Un gabarit de configuration de Safe Exam Browser peut être utilisé. Les gabarits sont gérés dans l’administration du site. Vos réglages manuels remplacent les réglages du gabarit.
* Oui – Configurer manuellement
<br/>Aucun gabarit de configuration de Safe Exam Browser n’est utilisé. Vous pouvez configurer Safe Exam Browser manuellement.
* Oui – Déposer ma propre configuration
<br/>Vous pouvez déposer votre propre fichier de configuration Safe Exam Browser. Tous les réglages manuels et l’utilisation des gabarits sont désactivés.
* Oui – Utiliser la configuration du client SEB
<br/>Aucune configuration de Safe Exam Browser n’est effectuée du côté Moodle. Les étudiants peuvent répondre au test avec n’importe quelle configuration de Safe Exam Browser.';
$string['seb_showkeyboardlayout'] = 'Afficher la configuration du clavier';
$string['seb_showkeyboardlayout_help'] = 'Si ce réglage est activé, la configuration du clavier actuel est affichée dans la barre des tâches. Cela permet de passer à d’autres claviers qui ont été activés dans le système d’exploitation.';
$string['seb_showreloadbutton'] = 'Afficher le bouton recharger';
$string['seb_showreloadbutton_help'] = 'Si ce réglage est activé, un bouton recharger est affiché dans la barre des tâches de SEB, permettant de recharger la page web affichée.';
$string['seb_showsebdownloadlink'] = 'Afficher le bouton de téléchargement de Safe Exam Browser';
$string['seb_showsebdownloadlink_help'] = 'Si ce réglage est activé, un bouton permettant de télécharger Safe Exam Browser sera affiché sur la page d’accueil du test.';
$string['seb_showsebtaskbar'] = 'Afficher la barre des tâches SEB';
$string['seb_showsebtaskbar_help'] = 'Si ce réglage est activé, une barre des tâches est affichée au bas de la fenêtre du navigateur SEB. La barre des tâches est nécessaire pour afficher des éléments comme la commande Wi-Fi, le bouton de recharge, l’heure ou la configuration du clavier.';
$string['seb_showtime'] = 'Afficher l’heure';
$string['seb_showtime_help'] = 'Si ce réglage est activé, l’heure actuelle est affichée dans la barre des tâches de SEB.';
$string['seb_showwificontrol'] = 'Afficher la commande Wi-Fi';
$string['seb_showwificontrol_help'] = 'Si ce réglage est activé, un bouton de commande Wi-Fi est affiché dans la barre des tâches de SEB. Ce bouton permet aux utilisateurs de se reconnecter aux réseaux sans fils auxquels on a déjà été connectés.';
$string['seb_templateid'] = 'Gabarit de configuration Safe Example Browser';
$string['seb_templateid_help'] = 'Les réglages du gabarit de configuration sélectionné seront utilisés pour la configuration de Safe Exam Browser lors des tentatives du test. Vous pouvez remplacer les réglages du gabarit par vos réglages manuels.';
$string['seb_use_client'] = 'Oui – Utiliser la configuration du client SEB';
$string['seb_use_manually'] = 'Oui – Configurer manuellement';
$string['seb_use_template'] = 'Oui – Utiliser un gabarit existant';
$string['seb_use_upload'] = 'Oui – Déposer ma propre configuration';
$string['seb_userconfirmquit'] = 'Demander à l’utilisateur de confirmer pour quitter';
$string['seb_userconfirmquit_help'] = 'Si ce réglage est activé, les utilisateurs devront confirmer leur intention de quitter SEB lorsqu’une demande de quitter est détectée.';
$string['sebdownloadbutton'] = 'Télécharger Safe Exam Browser';
$string['sebkeysvalidationfailed'] = 'Erreur de validation des clefs SEB';
$string['seblinkbutton'] = 'Lancer Safe Exam Browser';
$string['sebrequired'] = 'Ce test a été configuré de sorte que les étudiants ne peuvent y répondre qu’au moyen de Safe Exam Browser.';
$string['setting:autoreconfigureseb'] = 'Auto-configurer SEB';
$string['setting:autoreconfigureseb_desc'] = 'Si ce réglage est activé, les utilisateurs qui arrivent sur le test avec Safe Exam Browser sont automatiquement obligés de reconfigurer leur Safe Exam Browser.';
$string['setting:displayblocksbeforestart'] = 'Afficher les blocs avant le début du test';
$string['setting:displayblocksbeforestart_desc'] = 'Si ce réglage est activé, les blocs seront affichés avant que l’étudiant commence le test.';
$string['setting:displayblockswhenfinished'] = 'Afficher les blocs après la fin du test';
$string['setting:displayblockswhenfinished_desc'] = 'Si ce réglage est activé, les blocs seront affichés une fois que l’étudiant a terminé le test.';
$string['setting:downloadlink'] = 'Lien de téléchargement Safe Exam Browser';
$string['setting:downloadlink_desc'] = 'URL pour télécharger l’application Safe Exam Browser.';
$string['setting:quizpasswordrequired'] = 'Mot de passe requis';
$string['setting:quizpasswordrequired_desc'] = 'Si ce réglage est activé, tous les tests qui nécessitent Safe Exam Browser doivent avoir un mot de passe défini.';
$string['setting:showhttplink'] = 'Afficher le lien http://';
$string['setting:showseblink'] = 'Afficher le lien seb://';
$string['setting:showseblinks'] = 'Afficher les liens de configuration Safe Exam Browser';
$string['setting:showseblinks_desc'] = 'Si ce réglage est activé, le lien vers le fichier de configuration de Safe Exam Browser sera affiché lors de l’accès au test. Remarque : les liens seb:// ne fonctionnent pas dans tous les navigateurs.';
$string['setting:supportedversions'] = 'Les versions minimales du client Safe Exam Browser requises pour utiliser la fonctionnalité de clef de configuration :
macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14';
$string['settingsfrozen'] = 'Les réglages de Safe Exam Browser ne peuvent plus être modifiés, car au moins une tentative a été effectuée.';
$string['unknown_reason'] = 'Raison inconnue';
$string['used'] = 'En cours d’utilisation';
