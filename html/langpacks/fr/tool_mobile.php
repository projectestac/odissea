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
 * Strings for component 'tool_mobile', language 'fr', version '4.5'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'Le débogage ADOdb est activé. Il devrait être désactivé dans les réglages du plugin d’authentification « Base de données externe » ou du plugin d’inscription « Base de données externe ».';
$string['androidappid'] = 'Identifiant unique de l’app Android';
$string['androidappid_desc'] = 'Ce réglage ne doit être modifié que si vous avez une app Android personnalisée.';
$string['apppolicy'] = 'URL de la politique de l’app';
$string['apppolicy_help'] = 'L’URL d’une politique pour les utilisateurs de l’app, qui est affichée sur la page À propos de l’app. Si le champ est laissé vide, la politique de site sera utilisée.';
$string['apprequired'] = 'Cette fonctionnalité n’est disponible que lors de l’accès au moyen de l’app mobile ou de l’app desktop.';
$string['autologinkeygenerationlockout'] = 'La génération de clefs de connexion automatique est bloquée. Veuillez attendre {$a} minutes entre les demandes.';
$string['autologinmintimebetweenreq'] = 'Temps minimal entre les demandes de connexion automatique';
$string['autologinmintimebetweenreq_desc'] = 'La durée minimale entre les demandes de connexion automatique à partir de l’app mobile. Si les utilisateurs sont trop souvent confrontés à une demande de re-saisir leur accréditation lors de l’affichage de données du site, il faut indiquer une valeur plus basse.';
$string['autologinnotallowedtoadmins'] = 'La connexion automatique n’est pas permise pour les administrateurs du site.';
$string['autologout'] = 'Imposer la déconnexion automatique';
$string['autologout_desc'] = 'Pour des raisons de sécurité, il est possible d’imposer aux utilisateurs la déconnexion automatique lorsqu’ils quittent ou ferment l’app ou que celle-ci se met en arrière-plan. Les utilisateur devront alors de reconnecter lorsqu’il ouvrent de nouveau l’app.';
$string['autologoutcustom'] = 'Durée personnalisée après que les utilisateurs ont fermé ou quitté l’app';
$string['autologoutinmediate'] = 'Immédiatement après que les utilisateurs ont fermé ou quitté l’app';
$string['autologouttime'] = 'Minuteur de déconnexion automatique';
$string['cachedef_plugininfo'] = 'Ce cache enregistre la liste des plugins avec des fonctionnalités pour mobiles';
$string['cachedef_subscriptiondata'] = 'Ceci enregistre les informations d’abonnement à l’app Moodle.';
$string['clickheretolaunchtheapp'] = 'Cliquez ici si l’app ne s’ouvre pas automatiquement.';
$string['configmobilecssurl'] = 'Fichier CSS pour personnaliser l’interface de votre app mobile.';
$string['customlangstrings'] = 'Chaînes de caractères personnalisées';
$string['customlangstrings_desc'] = 'Les mots et expressions affichées dans l’app peuvent être personnalisés ici. Saisissez chaque chaîne de caractères personnalisée sur une nouvelle ligne, dans le format suivant : identifiant de chaîne, expression personnalisée et code de langue (séparés par des caractères « barre verticale »). Par exemple :
<pre>
mm.user.student|Learner|en
mm.user.student|Apprenant|fr
</pre>
Pour une liste complète des identifiants de chaînes de caractères, consultez la documentation.';
$string['custommenuitems'] = 'Éléments du menu personnalisé';
$string['custommenuitems_desc'] = 'Des éléments supplémentaires peuvent être ajoutés au menu principal de l’app en les indiquant ici. Saisissez chaque élément sur une nouvelle ligne, dans le format : texte de l’élément, URL, méthode d’ouverture de l’URL et code de langue (facultatif, pour affichage de l’élément seulement aux utilisateurs de la langue indiquée), séparés par des caractères « trait vertical ».

Les méthodes d’ouverture d’URL sont : app (pour le lien vers une activité prise en charge par l’app), inappbrowser (pour ouvrir le lien dans le navigateur intégré sans quitter l’app), browser (pour ouvrir le lien dans le navigateur par défaut de l’appareil) et embedded (pour afficher le lien dans une nouvelle page dans l’app, intégré dans une iframe).

Lorsque des éléments n’ont pas de traduction dans une langue, une autre langue sera utilisée en lieu et place, à moins que « _only » ne soit spécifié à la fin du code de langue.

Par exemple :
<pre>
Aide de l’app| https://monurl.xyz/aide | inappbrowser | fr
Notre système d’info | https://monurl.xyz | browser | fr
Mes notes | https://monurl.xyz/local/mygrades/index.php | embedded | fr
My grades | https://monurl.xyz/local/mygrades/index.php | embedded | en
Mis calificaciones | https://monurl.xyz/local/mygrades/index.php | embedded | es
Ceci ne sera visible qu’en français|https://monurl.xyz/local/français|browser|fr_only
</pre>';
$string['darkmode'] = 'Mode sombre';
$string['disabledfeatures'] = 'Fonctionnalités désactivées';
$string['disabledfeatures_desc'] = 'Sélectionnez ici les fonctionnalités que vous voulez désactiver dans l’App mobile pour votre site. Certaines fonctionnalités listées ici pourraient être déjà désactivées par d’autres réglages de la plateforme. Pour voir les modifications dans l’App mobile, vous devrez vous déconnecter et vous reconnecter.';
$string['displayerrorswarning'] = 'L’affichage des messages de débogage (debugdisplay) est activé. Il devrait être désactivé.';
$string['downloadcourse'] = 'Télécharger le cours';
$string['downloadcourses'] = 'Télécharger les cours';
$string['enablesmartappbanners'] = 'Activer les bandeaux d’App';
$string['enablesmartappbanners_desc'] = 'Si ce réglage est activé, un bandeau promouvant l’utilisation de l’app mobile sera affiché lors de la visite du site avec un navigateur mobile.';
$string['filetypeexclusionlist'] = 'Liste d’exclusion des types de fichiers';
$string['filetypeexclusionlist_desc'] = 'Sélectionner tous les types de fichiers qui ne doivent pas être utilisés sur les appareils mobiles. Ces fichiers seront listés dans le cours sur l’app, mais toute tentative de les ouvrir affichera un avertissement indiquant que le type de fichier n’est pas destiné à être utilisé sur un appareil mobile. L’utilisateur pourra alors soit annuler l’ouverture, soit ignorer l’avertissement et l’ouvrir malgré tout.';
$string['filetypeexclusionlistplaceholder'] = 'Liste d’exclusion des types de fichiers sur mobile';
$string['forcedurlscheme'] = 'Pour ne permettre l’ouverture que de votre application personnalisée à partir d’un navigateur, indiquer ici son schéma d’URL. Si vous ne voulez autoriser que l’app officielle, indiquer la valeur par défaut. Pour permettre n’importe quelle app, laisser ce champ vide.';
$string['forcedurlscheme_key'] = 'Schéma d’URL';
$string['forcelogout'] = 'Imposer la déconnexion';
$string['forcelogout_desc'] = 'Si ce réglage est activé, les utilisateurs sont déconnectés même lorsqu’ils changent de compte. Ils alors devront re-saisir leur mot de passe lors de leur prochaine visite.';
$string['getmoodleonyourmobile'] = 'Obtenir l’app mobile';
$string['h5poffline'] = 'Consulter le contenu H5P hors ligne';
$string['httpsrequired'] = 'HTTPS requis';
$string['insecurealgorithmwarning'] = 'Le certificat HTTPS utilise un algorithme de signature peu sûr (SHA-1). Veuillez mettre à jour ce certificat.';
$string['invalidcertificatechainwarning'] = 'Il semble que la chaîne de certificat n’est pas valide. Ce certificati fonctionne peut être pour un navigateur, mais pas pour une app mobile.';
$string['invalidcertificateexpiredatewarning'] = 'Le certificat HTTPS est échu.';
$string['invalidcertificatestartdatewarning'] = 'Le certificat HTTPS n’est pas encore valide (sa date de validité est dans le futur).';
$string['invalidprivatetoken'] = 'Jeton privé non valide. Les jetons ne doivent pas être vides, ni envoyés via un paramètre GET.';
$string['invaliduserquotawarning'] = 'Le quota utilisateur (user quota) est un nombre non valide. Veuillez indiquer un nombre entier valide dans les Réglages de sécurité du site.';
$string['iosappid'] = 'Identifiant unique de l’app iOS';
$string['iosappid_desc'] = 'Cette valeur doit être laissée sur son réglage par défaut, sauf si vous avez une app iOS personnalisée.';
$string['launchviasiteinbrowser'] = 'Lancer via le site web dans le navigateur système';
$string['loginintheapp'] = 'Via l’app';
$string['logininthebrowser'] = 'Via une fenêtre de navigateur (pour les plugins SSO)';
$string['loginintheembeddedbrowser'] = 'Via le navigateur intégré (pour les plugins SSO)';
$string['logoutconfirmation'] = 'Voulez-vous vraiment vous déconnecter de l’app mobile sur vous appareils mobiles ? Vous devrez vous reconnecter en saississant vos nom d’utilisateur et mot de passe dans l’app mobile sur tous les appareils où l’app est installée.';
$string['mainmenu'] = 'Menu principal';
$string['managefiletypes'] = 'Gérer les types de fichier';
$string['minimumversion'] = 'Si une version de l’app est indiquée (3.8.0 ou ultérieure), les utilisateurs utilisant une version antérieure de l’app seront invités à mettre à jour leur app avant de pouvoir accéder au site.';
$string['minimumversion_key'] = 'Version minimale de l’app requise';
$string['mobileapp'] = 'App mobile';
$string['mobileappearance'] = 'Présentation mobile';
$string['mobileappenabled'] = 'L’accès à ce site au moyen de l’app mobile est activé.<br /><a href="{$a}">Télécharger l’app mobile</a>.';
$string['mobileappsubscription'] = 'Abonnement app Moodle';
$string['mobileauthentication'] = 'Authentification mobile';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Fonctionnalités pour mobiles';
$string['mobilenotificationsdisabledwarning'] = 'Les notifications mobiles ne sont pas activées. Elles doivent être activées dans les Réglages de notification.';
$string['mobilesettings'] = 'Réglages pour mobiles';
$string['moodleappsportalfeatureswarning'] = 'Certaines fonctionnalités peuvent être restreintes, selon votre abonnement à l’app Moodle. Pour plus d’informations, visiter le <a href="{$a}" target="_blank">portail des apps Moodle</a>.';
$string['notifications'] = 'Notifications';
$string['notificationsactivedevices'] = 'Appareils actifs';
$string['notificationscurrentactivedevices'] = 'Appareils recevant des notifications ce mois';
$string['notificationsignorednotifications'] = 'Notifications non envoyées';
$string['notificationslimitreached'] = 'La limite mensuelle des appareils actifs a été dépassées. Les notifications ne seront pas envoyées pour certains utilisateurs. Il est recommandé de passer à un forfait supérieur pour l’app Moodle dans le <a href="{$a}" target="_blank">portail des apps Moodle</a>.';
$string['notificationsmissingwarning'] = 'Les statistiques de notifications de l’app Moodle n’ont pas pu être récupérées. Cela est probablement dû à la non-activation des notifications mobiles sur le site. Vous pouvez les activer dans Administration du site > Messagerie > Mobile.';
$string['notificationsnewdevices'] = 'Nouveaux appareils';
$string['notificationsseemore'] = 'Remarque : les statistiques d’usage de l’app Moodle ne sont pas calculées en temps réel. Pour des données plus détaillées, y compris des mois précédents, veuillez vous connecter au <a href="{$a}" target="_blank">portail des apps Moodle</a>.';
$string['notificationssentnotifications'] = 'Notifications envoyées';
$string['oauth2identityproviders'] = 'Fournisseurs d’identité OAuth 2';
$string['offlineuse'] = 'Utilisation hors ligne';
$string['pluginname'] = 'Outils app Moodle';
$string['pluginnotenabledorconfigured'] = 'Plugin inactif ou pas configuré.';
$string['privacy:metadata:core_userkey'] = 'Clefs de l’utilisateur utilisée pour créer la clef de connexion automatique pour l’utilisateur actuel.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'La date de la dernière demande de clef de connexion automatique. Une durée de 6 minutes est requise entre chaque demande.';
$string['qrcodedisabled'] = 'Accès via code QR désactivé';
$string['qrcodeformobileappaccess'] = 'Code QR pour accès avec l’app mobile';
$string['qrcodeformobileapploginabout'] = 'Lire le code QR avec votre app mobile pour vous connecter automatiquement. Le code QR sera périmé dans {$a}.';
$string['qrcodeformobileappurlabout'] = 'Lire le code QR avec votre app mobile pour vous remplir l’URL du site dans votre app.';
$string['qrcodetype'] = 'Code QR d’accès';
$string['qrcodetype_desc'] = 'Un code QR à lire par les utilisateurs de l’app mobile peut être fourni, soit pour remplir automatiquement l’URL du site, soit, dans le cas où le site est en HTTPS, pour connecter automatiquement l’utilisateur, sans qu’il ait besoin de saisir son nom et son mot de passe.';
$string['qrcodetypelogin'] = 'Code QR avec connexion automatique';
$string['qrcodetypeurl'] = 'Code QR avec URL du site';
$string['qrkeyttl'] = 'Durée du code QR d’authentification';
$string['qrkeyttl_desc'] = 'La durée de validité des codes QR de connexion automatique.';
$string['qrsameipcheck'] = 'Vérification IP identique pour code QR d’authentification';
$string['qrsameipcheck_desc'] = 'Si ce réglage est activé, les utilisateurs doivent être sur le même réseau lors de la génération et lors du scan du code QR de connexion. Ne désactiver que si les utilisateurs annoncent des dysfonctionnements de la connexion via code QR.';
$string['qrsiteadminsnotallowed'] = 'Pour des raisons de sécurité, la connexion via code QR n’est pas autorisée pour les administrateurs ou si vous êtes connecté sous un autre nom.';
$string['readingthisemailgettheapp'] = 'Vous lisez ceci dans un courriel ? <a href="{$a}">Téléchargez l’app mobile et recevez ainsi des notifications sur votre appareil mobile</a>.';
$string['remoteaddons'] = 'Plugins distants';
$string['responsivemainmenuitems'] = 'Éléments du menu adaptatif';
$string['scanqrcode'] = 'Lire le code QR';
$string['selfsignedoruntrustedcertificatewarning'] = 'Il semble que le certificat HTTPS est auto-signé ou non fiable. L’app mobile ne fonctionne qu’avec les sites fiables. Veuillez utiliser un service en ligne de contrôle SSL pour diagnostiquer le problème. Si un tel service indique que votre certificat est bon, cet avertissement peut être ignoré.';
$string['setuplink'] = 'Page de téléchargement de l’app';
$string['setuplink_desc'] = 'URL de la page permettant de télécharger l’app mobile sur l’App Store et Google Play. Le lien vers la page de téléchargement est affiché dans le pied de page et dans le profil des utilisateurs. Laisser vide pour ne pas afficher de lien.';
$string['smartappbanners'] = 'Bandeaux d’App';
$string['subscription'] = 'Abonnement';
$string['subscriptioncreated'] = 'Date de début';
$string['subscriptionerrorrequest'] = 'Une erreur inattendue est survenue lors de la récupération des informations d’abonnement à l’app Moodle';
$string['subscriptionexpiration'] = 'Date d’échéance';
$string['subscriptionfeaturenotapplied'] = 'Cette fonctionnalité est configurée sur votre site, mais n’est pas incluse dans votre forfait pour l’app Moodle. Le réglage est donc sans effet.';
$string['subscriptionfeatures'] = 'Fonctionnalité de l’abonnement';
$string['subscriptionlimitsurpassed'] = 'Limite d’abonnement dépassée';
$string['subscriptionregister'] = 'Pour plus d’informations sur les divers forfaits et pour accéder aux statistiques d’usage de l’app Moodle, veuillez visiter le <a href="{$a}" target="_blank">portail des apps Moodle</a>.';
$string['subscriptionsseemore'] = 'Remarque : les informations affichées ne sont pas mises à jour en temps réel. Veuillez vous déconnecter et vous reconnecter pour voir les mises à jour. Pour en savoir plus sur le passage à un forfait supérieur, veuillez vous connecter au <a href="{$a}" target="_blank">portail des apps Moodle</a>.';
$string['switchaccount'] = 'Changer de compte';
$string['typeoflogin'] = 'Type de login';
$string['typeoflogin_desc'] = 'Si votre plateforme utilise une méthode d’authentification SSO, veuillez choisir « Via une fenêtre de navigateur » ou « Via le navigateur intégré ». Le navigateur intégré offre une meilleure expérience utilisateur, mais ne fonctionne pas avec tous les plugins SSO.';
$string['viewqrcode'] = 'Afficher le code QR';
