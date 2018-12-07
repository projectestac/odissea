<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_messageinbound', language 'fr', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_messageinbound
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Nom de la classe';
$string['component'] = 'Composant';
$string['configmessageinboundhost'] = 'L\'adresse du serveur sur lequel Moodle devra vérifier les courriels. Pour indiquer un port non standard, utiliser la syntaxe [serveur]:[port], par exemple mail.exemple.fr:587. Si un port n\'est pas indiqué, le port par défaut pour le type de serveur de courriel sera utilisé.';
$string['defaultexpiration'] = 'Échéance de l\'adresse par défaut';
$string['defaultexpiration_help'] = 'Une durée d\'échéance peut être associée à l\'adresse de courriel générée par le gestionnaire, permettant que cette adresse ne puisse plus être utilisée une fois cette durée échue. Il est recommandé de fournir une telle échéance.';
$string['description'] = 'Description';
$string['domain'] = 'Domaine de courriel';
$string['edit'] = 'Modifier';
$string['edithandler'] = 'Modifier les réglages du gestionnaire {$a}';
$string['editinghandler'] = 'Modification de {$a}';
$string['enabled'] = 'Activé';
$string['fixedenabled_help'] = 'Vous ne pouvez pas modifier le statut de ce gestionnaire. C\'est vraisemblablement parce que ce gestionnaire est utilisé par d\'autres gestionnaires.';
$string['fixedvalidateaddress'] = 'Valider l\'adresse d\'expédition';
$string['fixedvalidateaddress_help'] = 'Vous ne pouvez pas modifier la validation de l\'adresse de ce gestionnaire. C\'est vraisemblablement parce que ce gestionnaire nécessite un réglage spécifique.';
$string['handlerdisabled'] = 'Le gestionnaire de courriel que vous tentez de contacter a été désactivé. Le traitement des messages n\'est actuellement pas possible.';
$string['incomingmailconfiguration'] = 'Configuration du courriel entrant';
$string['incomingmailserversettings'] = 'Configuration du serveur de courriel entrant';
$string['incomingmailserversettings_desc'] = 'Moodle peut se connecter aux serveurs IMAP configurés adéquatement. Veuillez spécifier ici les réglages permettant de se connecter à votre serveur IMAP.';
$string['invalidrecipientdescription'] = 'Le message « {$a->subject} » n\'a pas pu être validé, car il a été envoyé à partir d\'une adresse différente de celle qui est indiquée dans votre profil utilisateur. Pour le valider, veuillez répondre à ce message.';
$string['invalidrecipientdescriptionhtml'] = 'Le message « {$a->subject} » n\'a pas pu être validé, car il a été envoyé à partir d\'une adresse différente de celle qui est indiquée dans votre profil utilisateur. Pour le valider, veuillez répondre à ce message.';
$string['invalidrecipientfinal'] = 'Le message « {$a->subject} » n\'a pas pu être authentifié. Veuillez vous assurer que vous l\'envoyez avec la même adresse de courriel que celle qui est indiquée dans votre profil.';
$string['invalid_recipient_handler'] = 'Si un message valide est reçu, mais que l\'expéditeur ne peut pas être vérifié, le message est stocké sur le serveur de courriel et l\'expéditeur est contacté au moyen de l\'adresse de courriel indiquée dans son profil utilisateur. L\'expéditeur peut alors répondre afin de confirmer l\'authenticité du message d\'origine.

Ce gestionnaire traite ces réponses.

Il n\'est pas possible de désactiver la vérification de l\'expéditeur de ce gestionnaire, car un utilisateur pourrait alors répondre à partir d\'une adresse incorrecte, si la configuration de son client de courriel est incorrecte.';
$string['invalid_recipient_handler_name'] = 'Expéditeur non valide';
$string['mailbox'] = 'Nom de la boîte à lettres';
$string['mailboxconfiguration'] = 'Configuration de la boîte à lettres';
$string['mailboxdescription'] = '[boîte]+adresse@[domaine]';
$string['mailsettings'] = 'Réglages de courriel';
$string['message_handlers'] = 'Gestionnaires de messages';
$string['messageinbound'] = 'Messages de courriel entrant';
$string['messageinboundenabled'] = 'Activer le traitement des messages de courriel entrant';
$string['messageinboundenabled_desc'] = 'Le traitement des messages de courriel entrant doit être activé afin que des messages puissent être envoyés avec l\'information adéquate.';
$string['messageinboundgeneralconfiguration'] = 'Configuration générale';
$string['messageinboundgeneralconfiguration_desc'] = 'Le traitement des messages de courriel entrant permet à votre Moodle de recevoir et traiter des courriels. Cela offre par exemple la possibilité de participer aux discussions des forums par courriel ou d\'ajouter des fichiers à sa zone de fichiers privée.';
$string['messageinboundhost'] = 'Serveur de courriels entrant';
$string['messageinboundhostpass'] = 'Mot de passe';
$string['messageinboundhostpass_desc'] = 'Mot de passe fourni par votre fournisseur de service afin de vous connecter à votre compte de courriel.';
$string['messageinboundhostssl'] = 'Utiliser SSL';
$string['messageinboundhostssl_desc'] = 'Certains serveurs de courriel offrent un niveau de sécurité supplémentaire en cryptant les communications avec Moodle.';
$string['messageinboundhosttype'] = 'Type de serveur';
$string['messageinboundhostuser'] = 'Nom d\'utilisateur';
$string['messageinboundhostuser_desc'] = 'Nom d\'utilisateur fourni par votre fournisseur de service afin de vous connecter à votre compte de courriel.';
$string['messageinboundmailboxconfiguration_desc'] = 'Lorsque les messages sont envoyés, l\'adresse d\'expédition est composée dans le format « adresse+données@exemple.fr ». Afin de générer de manière fiable ces adresses, veuillez indiquer la partie que vous utilisez normalement avant le signe @ et de manière séparée le domaine que vous utilisez après le @. Par exemple, le nom de la boîte dans l\'exemple ci-dessus est « adresse » et le domaine est « exemple.fr ». Veuillez utiliser un compte de courriel dédié pour cette fonction.';
$string['messageprocessingerror'] = 'Vous avez récemment envoyé un courriel « {$a->subject} », qui n\'a malheureusement pas pu être traité.

Les détails de l\'erreur sont indiqués ci-dessous.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>Vous avez récemment envoyé un courriel  « {$a->subject} », qui n\'a malheureusement pas pu être traité.</p>
<p>Les détails de l\'erreur sont indiqués ci-dessous.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'Le courriel « {$a->subject} » n\'a pas pu être traité. Voici le message d\'erreur qui a été renvoyé : « {$a->message} ».';
$string['messageprocessingfailedunknown'] = 'Le courriel « {$a->subject} » n\'a pas pu être traité. Veuillez contacter l\'administrateur du Moodle pour plus d\'informations.';
$string['messageprocessingsuccess'] = '{$a->plain}

Si vous ne voulez plus recevoir ces notifications, veuillez modifier les réglages de vos messages personnels en visitant {$a->messagepreferencesurl}.';
$string['messageprocessingsuccesshtml'] = '{$a->html}

<p>Si vous ne voulez plus recevoir ces notifications, veuillez <a href="{$a->messagepreferencesurl}">modifier les réglages de vos messages personnels</a>.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Message confirmant que des messages expédiés par vous sont arrivés';
$string['messageprovider:messageprocessingerror'] = 'Avertissement qu\'un message entrant n\'a pas pu être traité';
$string['messageprovider:messageprocessingsuccess'] = 'Confirmation qu\'un message a été traité correctement';
$string['name'] = 'Nom';
$string['noencryption'] = 'Désactivé - pas de cryptage';
$string['noexpiry'] = 'Pas d\'échéance';
$string['oldmessagenotfound'] = 'Vous avez tenté de valider un message manuellement, mais le message n\'a pas pu être trouvé. Il est possible que le message a déjà été traité ou qu\'il est arrivé à échéance.';
$string['oneday'] = 'Un jour';
$string['onehour'] = 'Une heure';
$string['oneweek'] = 'Une semaine';
$string['oneyear'] = 'Une année';
$string['pluginname'] = 'Configuration';
$string['privacy:metadata:coreuserkey'] = 'Clefs de l\'utilisateur pour valider le courriel reçu';
$string['privacy:metadata:messagelist'] = 'Une liste des identifiants de message dont la validation a échoué et qui requiert une autorisation supplémentaire';
$string['privacy:metadata:messagelist:address'] = 'L\'adresse à laquelle le courriel a été envoyé';
$string['privacy:metadata:messagelist:messageid'] = 'L\'identifiant du message';
$string['privacy:metadata:messagelist:timecreated'] = 'La date et l\'heure de l\'enregistrement';
$string['privacy:metadata:messagelist:userid'] = 'L\'identifiant de l\'utilisateur devant approuver le message';
$string['replysubjectprefix'] = 'Re:';
$string['requirevalidation'] = 'Valider l\'adresse d\'expédition';
$string['ssl'] = 'SSL (détection automatique de la version)';
$string['sslv2'] = 'SSLv2 (imposer SSL Version 2)';
$string['sslv3'] = 'SSLv3 (imposer SSL Version 3)';
$string['taskcleanup'] = 'Nettoyage des courriels reçus non vérifiés';
$string['taskpickup'] = 'Récolte des courriels entrant';
$string['tls'] = 'TLS (négociation via protocole, sur un canal non crypté)';
$string['tlsv1'] = 'TLSv1 (connexion directe au serveur TLS version 1.x)';
$string['validateaddress'] = 'Valider l\'adresse de courriel d\'expédition';
$string['validateaddress_help'] = 'Losrqu\'un message est reçu, Moodle tente de le valider en comparant l\'adresse de courriel d\'expédition avec l\'adresse de courriel figurant dans le profil utilisateur de l\'expéditeur.

Si les adresses ne correspondent pas, l\'utilisateur reçoit une notification lui demandant de confirmer qu\'il est bien l\'expéditeur du message.

Si ce réglage est désactivé, cette vérification n\'est pas effectuée.';
