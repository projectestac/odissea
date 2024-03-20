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
 * Strings for component 'message_airnotifier', language 'fr', version '4.1'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'Gérer les appareils';
$string['airnotifieraccesskey'] = 'Clef d’accès Airnotifier';
$string['airnotifierappname'] = 'Nom de l’app Airnotifier';
$string['airnotifierfielderror'] = 'Veuillez retirer tous les espaces ou caractères non nécessaires des champs suivants : {$a}';
$string['airnotifiermobileappname'] = 'Nom de l’App mobile';
$string['airnotifierport'] = 'Port Airnotifier';
$string['airnotifierurl'] = 'URL Airnotifier';
$string['checkconfiguration'] = 'Vérifier et tester la configuration des notifications push';
$string['configairnotifieraccesskey'] = 'La clef d’accès à utiliser pour se connecter au serveur Airnotifier. Une clef d’accès peut être obtenue en cliquant sur « Demander une clef d’accès » (uniquement pour les sites enregistrés) ou en créant un compte sur le <a href="https://apps.moodle.com">portail des apps Moodle</a>.';
$string['configairnotifierappname'] = 'Le nom de l’app dans Airnotifier';
$string['configairnotifiermobileappname'] = 'L’identifiant unique de l’App mobile (par exemple : com.moodle.moodlemobile).';
$string['configairnotifierport'] = 'Le port à utiliser pour se connecter au serveur Airnotifier.';
$string['configairnotifierurl'] = 'L’URL du serveur auquel se connecter pour envoyer des notifications.';
$string['configured'] = 'Configuré';
$string['deletecheckdevicename'] = 'Supprimer votre appareil : {$a->name}';
$string['deletedevice'] = 'Supprimer l’appareil. Une app peut ré-enregistrer l’appareil. Si l’appareil persiste à apparaître, veuillez le désactiver.';
$string['devicetoken'] = 'Jeton d’appareil';
$string['donotsendnotification'] = 'N’envoyer aucune notification';
$string['enableprocessor'] = 'Activer les notifications mobiles';
$string['encryptnotifications'] = 'Chiffrer les notifications';
$string['encryptprocessing'] = 'Pour les appareils ne prenant pas en charge le chiffrement';
$string['encryptprocessing_desc'] = 'Le chiffrement des notifications nécessite au moins Android 6 et de iOS 13, ainsi que l’App Moodle 4.2 ou ultérieure.';
$string['errorretrievingkey'] = 'Une erreur est survenue lors de l’obtention de la clef d’accès. Votre site Moodle doit être enregistré pour utiliser ce service. S’il est déjà enregistré, veuillez essayer de mettre à jour votre enregistrement. Vous pouvez aussi obtenir une clef d’accès en créant un compte sur le <a href="https://apps.moodle.com">portail des apps Moodle</a>.';
$string['keyretrievedsuccessfully'] = 'Clef obtenue correctement. Pour accéder aux statistiques d’usage de l’app Moodle, veuillez créer un compte sur le <a href="https://apps.moodle.com">portail des apps Moodle</a>.';
$string['messageprovidersempty'] = 'Les notifications mobiles ne sont pas activées dans les préférences de notification par défaut.';
$string['messageproviderslow'] = 'Seules quelques notifications mobiles sont activées dans les préférences de notification par défaut.';
$string['moodleappsportallimitswarning'] = 'Veuillez prendre note que le nombre d’appareils pouvant recevoir des notifications dépend de votre abonnement pour l’app Moodle. Pour plus d’informations, visitez le <a href="{$a}" target="_blank">portail des apps Moodle</a>.';
$string['nodevices'] = 'Aucun appareil enregistré. Les appareils apparaîtront automatiquement une fois l’app Moodle installée et ce site ajouté.';
$string['noemailevernotset'] = '$CFG->noemailever désactivé';
$string['noemaileverset'] = '$CFG->noemailever est activé dans le fichier config.php. Vous devez déactiver ce réglage ou le supprimer.';
$string['nopermissiontomanagedevices'] = 'Vous n’avez pas les permissions requises pour gérer les appareils.';
$string['notconfigured'] = 'Le serveur Airnotifier n’a pas été configuré. Les notifications « push » ne peuvent donc pas être envoyées.';
$string['notificationsserverconfiguration'] = 'Configuration du serveur de notifications (Airnotifier)';
$string['pluginname'] = 'Mobile';
$string['privacy:appiddescription'] = 'L’identifiant faisant le lien avec l’application utilisée.';
$string['privacy:enableddescription'] = 'Si cet appareil est activé pour utiliser Airnotifier.';
$string['privacy:metadata:date'] = 'La date à laquelle le message a été envoyé.';
$string['privacy:metadata:enabled'] = 'Si l’appareil Airnotifier est activé.';
$string['privacy:metadata:externalpurpose'] = 'Ces informations sont envoyées à un serveur externe, puis délivrées finalement à l’appareil mobile de l’utilisateur.';
$string['privacy:metadata:fullmessage'] = 'Le message complet.';
$string['privacy:metadata:notification'] = 'Si ce message est une notification.';
$string['privacy:metadata:smallmessage'] = 'Une partie du message.';
$string['privacy:metadata:subject'] = 'L’objet du message.';
$string['privacy:metadata:tableexplanation'] = 'Les informations sur l’appareil Airnotifier sont enregistrées ici.';
$string['privacy:metadata:userdeviceid'] = 'L’identifiant faisant le lien avec l’appareil mobile de l’utilisateur.';
$string['privacy:metadata:userfromfullname'] = 'Le nom complet de l’utilisateur qui a envoyé le message.';
$string['privacy:metadata:userfromid'] = 'L’identifiant de l’auteur du message.';
$string['privacy:metadata:userid'] = 'L’identifiant de l’utilisateur qui a envoyé le message.';
$string['privacy:metadata:username'] = 'Le nom d’utilisateur de l’utilisateur.';
$string['privacy:metadata:usersubsystem'] = 'Ce plugin est connecté au sous-système utilisateur.';
$string['privacy:subcontext'] = 'Message Airnotifier';
$string['requestaccesskey'] = 'Demander une clef d’accès';
$string['sendnotificationnotenc'] = 'Envoyer les notifications sans chiffrement';
$string['sendtest'] = 'Envoyer une notification push de test à mes appareils';
$string['sendtestconfirmation'] = 'Une notification push de test sera envoyée aux appareils que vous utilisez pour vous connecter à ce site. Veuillez vous assurer que vos appareils ont accès à Internet et que l’app mobile n’est pas ouverte, car les notifications push ne sont affichées que lorsqu’elles sont reçues en tâche de fond.';
$string['serverconnectivityerror'] = 'Ce site ne peut pas se connecter au serveur de notifications {$a}';
$string['showhide'] = 'Activer/désactiver l’appareil';
$string['sitemustberegistered'] = 'Pour utiliser l’instance publique de Airnotifier, votre site doit être enregistré. Il est aussi possible d’obtenir une clef d’accès en créant un compte sur le <a href="https://apps.moodle.com">portail des apps Moodle</a>.';
$string['unknowndevice'] = 'Appareil inconnu';
$string['userdevices'] = 'Appareils utilisateur';
$string['view_notification'] = 'Tapoter pour voir';
