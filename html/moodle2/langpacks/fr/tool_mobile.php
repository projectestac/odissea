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
 * Strings for component 'tool_mobile', language 'fr', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_mobile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'Le débogage ADOdb est activé. Il devrait être désactivé dans les réglages du plugin d\'authentification « Base de données externe » ou du plugin d\'inscription « Base de données externe ».';
$string['androidappid'] = 'Identifiant unique de l\'app Android';
$string['androidappid_desc'] = 'Ce réglage ne doit être modifié que si vous avez une app Android personnalisée.';
$string['apppolicy'] = 'URL de la politique de l\'app';
$string['apppolicy_help'] = 'L\'URL d\'une politique pour les utilisateurs de l\'app, qui est affichée sur la page À propos de l\'app. Si le champ est laissé vide, la politique de site sera utilisée.';
$string['autologinkeygenerationlockout'] = 'La génération de clefs de connexion automatique est bloquée. Veuillez attendre 6 minutes entre les demandes.';
$string['autologinnotallowedtoadmins'] = 'La connexion automatique n\'est pas permise pour les administrateurs du site';
$string['cachedef_plugininfo'] = 'Ce cache enregistre la liste des plugins avec des fonctionnalités pour mobiles';
$string['clickheretolaunchtheapp'] = 'Cliquez ici si l\'app ne s\'ouvre pas automatiquement.';
$string['configmobilecssurl'] = 'Fichier CSS pour personnaliser l\'interface de votre app mobile.';
$string['customlangstrings'] = 'Chaînes de caractères personnalisées';
$string['customlangstrings_desc'] = 'Les mots et expressions affichées dans l\'app peuvent être personnalisés ici. Saisissez chaque chaîne de caractères personnalisée sur une nouvelle ligne, dans le format suivant : identifiant de chaîne, expression personnalisée et code de langue (séparés par des caractères « barre verticale »). Par exemple :
<pre>
mm.user.student|Learner|en
mm.user.student|Apprenant|fr
</pre>
Pour une liste complète des identifiants de chaînes de caractères, consultez la documentation.';
$string['custommenuitems'] = 'Éléments du menu personnalisé';
$string['custommenuitems_desc'] = 'Des éléments supplémentaires peuvent être ajoutés au menu principal de l\'app en les indiquant ici. Saisissez chaque élément sur une nouvelle ligne, dans le format : texte de l\'élément, URL, méthode d\'ouverture de l\'URL et code de langue (facultatif, pour affichage de l\'élément seulement aux utilisateurs de la langue indiquée), séparés par des caractères « trait vertical ». Les méthodes d\'ouverture d\'URL sont app (pour le lien vers une activité supportée par l\'app), inappbrowser (pour ouvrir le lien dans le navigateur intégré sans quitter l\'app), browser (pour ouvrir le lien dans le navigateur par défaut de l\'appareil) et embedded (pour afficher le lien dans une nouvelle page dans l\'app, intégré dans une iframe).

Par exemple :
<pre>
Aide de l\'app| https://monurl.xyz/aide | inappbrowser | fr
Notre système d\'info | https://monurl.xyz | browser | fr
Mes notes | https://monurl.xyz/local/mygrades/index.php | embedded | fr
My grades | https://monurl.xyz/local/mygrades/index.php | embedded | en
Mis calificaciones | https://monurl.xyz/local/mygrades/index.php | embedded | es
</pre>';
$string['disabledfeatures'] = 'Fonctionnalités désactivées';
$string['disabledfeatures_desc'] = 'Sélectionnez ici les fonctionnalités que vous voulez désactiver dans l\'App mobile pour votre site. Certaines fonctionnalités listées ici pourraient être déjà désactivées par d\'autres réglages de la plateforme. Pour voir les modifications dans l\'App mobile, vous devrez vous déconnecter et vous reconnecter.';
$string['displayerrorswarning'] = 'L\'affichage des messages de débogage (debugdisplay) est activé. Il devrait être désactivé.';
$string['downloadcourse'] = 'Télécharger le cours';
$string['downloadcourses'] = 'Télécharger les cours';
$string['enablesmartappbanners'] = 'Activer les bandeaux d\'App';
$string['enablesmartappbanners_desc'] = 'Si ce réglage est activé, un bandeau promouvant l\'utilisation de l\'app mobile sera affiché lors de la visite du site avec un navigateur mobile.';
$string['forcedurlscheme'] = 'Pour ne permettre l\'ouverture que de votre application personnalisée à partir d\'un navigateur, indiquer ici son schéma d\'URL. Dans le cas contraire, laisser ce champ vide.';
$string['forcedurlscheme_key'] = 'Schéma d\'URL';
$string['forcelogout'] = 'Imposer la déconnexion';
$string['forcelogout_desc'] = 'Si ce réglage est activé, l\'option « Changer de site » est remplacée par « Déconnexion », avec pour conséquence que les utilisateurs sont complètement déconnectés et devront re-saisir leur mot de passe lors de leur prochaine visite.';
$string['getmoodleonyourmobile'] = 'Obtenir l\'app mobile';
$string['httpsrequired'] = 'HTTPS requis';
$string['insecurealgorithmwarning'] = 'Le certificat HTTPS utilise un algorithme de signature peu sûr (SHA-1). Veuillez mettre à jour ce certificat.';
$string['invalidcertificatechainwarning'] = 'La chaîne de certificat n\'est pas valide.';
$string['invalidcertificateexpiredatewarning'] = 'Le certificat HTTPS est échu.';
$string['invalidcertificatestartdatewarning'] = 'Le certificat HTTPS n\'est pas encore valide (sa date de validité est dans le futur).';
$string['invalidprivatetoken'] = 'Jeton privé non valide. Les jetons ne doivent pas être vides, ni envoyés via un paramètre GET.';
$string['invaliduserquotawarning'] = 'Le quota utilisateur (user quota) est un nombre non valide. Veuillez indiquer un nombre entier valide dans les Réglages de sécurité du site.';
$string['iosappid'] = 'Identifiant unique de l\'app iOS';
$string['iosappid_desc'] = 'Cette valeur doit être laissée sur son réglage par défaut, sauf si vous avez une app iOS personnalisée.';
$string['loginintheapp'] = 'Via l\'app';
$string['logininthebrowser'] = 'Via une fenêtre de navigateur (pour les plugins SSO)';
$string['loginintheembeddedbrowser'] = 'Via le navigateur intégré (pour les plugins SSO)';
$string['mainmenu'] = 'Menu principal';
$string['mobileapp'] = 'App mobile';
$string['mobileappconnected'] = 'App mobile connectée';
$string['mobileappearance'] = 'Présentation mobile';
$string['mobileappenabled'] = 'L\'accès à ce site au moyen de l\'app mobile est activé.<br /><a href="{$a}">Télécharger l\'app mobile</a>.';
$string['mobileauthentication'] = 'Authentification mobile';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Fonctionnalités pour mobiles';
$string['mobilenotificationsdisabledwarning'] = 'Les notifications mobiles ne sont pas activées. Elles devraient être activées dans les Réglages de notification.';
$string['mobilesettings'] = 'Réglages pour mobiles';
$string['offlineuse'] = 'Utilisation hors ligne';
$string['pluginname'] = 'Outils app Moodle';
$string['pluginnotenabledorconfigured'] = 'Plugin inactif ou pas configuré.';
$string['privacy:metadata:core_userkey'] = 'Clefs de l\'utilisateur utilisée pour créer la clef de connexion automatique pour l\'utilisateur actuel.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'La date de la dernière demande de clef de connexion automatique. Une durée de 6 minutes est requise entre chaque demande.';
$string['remoteaddons'] = 'Plugins distants';
$string['selfsignedoruntrustedcertificatewarning'] = 'Le certificat HTTPS est auto-signé ou non fiable. L\'app mobile ne fonctionne qu\'avec les sites fiables.';
$string['setuplink'] = 'Page de téléchargement de l\'app';
$string['setuplink_desc'] = 'URL de la page permettant de télécharger l\'app mobile sur l\'App Store et Google Play.';
$string['smartappbanners'] = 'Bandeaux d\'App';
$string['typeoflogin'] = 'Type de login';
$string['typeoflogin_desc'] = 'Si votre plateforme utilise une méthode d\'authentification SSO, veuillez choisir « Via une fenêtre de navigateur » ou « Via le navigateur intégré ». Le navigateur intégré offre une meilleure expérience utilisateur, mais ne fonctionne pas avec tous les plugins SSO.';
