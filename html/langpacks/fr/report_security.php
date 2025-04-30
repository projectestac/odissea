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
 * Strings for component 'report_security', language 'fr', version '4.4'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_antivirus_details'] = 'Ce contrôle vérifie si une erreur a été récemment détectée, sur la base du seuil définis dans les réglages principaux de l’antivirus.';
$string['check_antivirus_error'] = '{$a->errors} erreurs ont été détectées durant les derniers {$a->lookback}';
$string['check_antivirus_info'] = 'Aucun scanner antivirus n’est activé actuellement';
$string['check_antivirus_logstore_not_supported'] = 'Impossible de vérifier l’état des scanners antivirus en raison du type de journal choisi';
$string['check_antivirus_name'] = 'Antivirus';
$string['check_antivirus_ok'] = '{$a->scanners} scanner(s) antivirus activés. Aucun problème n’a été détecté dans les derniers {$a->lookback}';
$string['check_configrw_details'] = '<p>Il est recommandé de modifier les droits d’accès au fichier <code>config.php</code> après installation, afin qu’il ne soit pas modifié par le serveur web. Veuillez noter que cette mesure n’améliore pas de façon significative la sécurité du serveur, bien qu’elle puisse ralentir ou limiter des attaques générales.</p>';
$string['check_configrw_name'] = 'Fichier config.php atteignable en écriture';
$string['check_configrw_ok'] = 'Le fichier config.php ne peut pas être modifié par les scripts PHP.';
$string['check_configrw_warning'] = 'Les scripts PHP pourraient modifier le fichier config.php.';
$string['check_cookiesecure_details'] = '<p>Si la communication https est activée, il est recommandé d’activer également les cookies sécurisés. Veuillez aussi ajouter une redirection permanente de http vers https et fournissez des en-têtes HSTS.</p>';
$string['check_cookiesecure_error'] = 'Veuillez activer les cookies sécurisés';
$string['check_cookiesecure_http'] = 'Vous devez activer https pour utiliser des cookies sécurisés';
$string['check_cookiesecure_name'] = 'Cookies sécurisés';
$string['check_cookiesecure_ok'] = 'Cookies sécurisés activés.';
$string['check_crawlers_details'] = '<p>L’activation du réglage « Ouvert à Google » autorise les moteurs de recherche à accéder aux cours en tant que visiteur anonyme. Il n’y a aucune raison d’activer ce réglage si l’accès aux visiteurs anonymes n’est pas autorisé.</p>';
$string['check_crawlers_error'] = 'L’accès aux visiteurs anonymes est autorisé pour les moteurs de recherche alors que l’accès aux visiteurs anonymes est désactivé.';
$string['check_crawlers_info'] = 'Les moteurs de recherche peuvent accéder en tant que visiteur anonyme.';
$string['check_crawlers_name'] = 'Ouvert à Google';
$string['check_crawlers_ok'] = 'L’accès des moteurs de recherche est désactivé.';
$string['check_defaultuserrole_details'] = '<p>Tous les utilisateurs connectés possèdent les capacités du rôle par défaut. Veuillez vous assurer qu’aucune capacité comportant des risques n’est autorisée pour ce rôle.</p>
<p>Le seul type de rôle historique pris en charge pour un tel rôle est le rôle <em>Utilisateur authentifié</em>. La capacité de voir les cours ne doit pas être autorisée.</p>
<p>Veuillez vérifier si l’approbation automatique des demandes de suppression de données (tool_dataprivacy | automaticdatadeletionapproval) est activée. Les utilisateurs peuvent demander des suppressions pouvant détruire de grandes quantités de données.</p>';
$string['check_defaultuserrole_error'] = 'Rôle par défaut des utilisateurs « {$a} » incorrectement défini !';
$string['check_defaultuserrole_name'] = 'Rôle par défaut des utilisateurs';
$string['check_defaultuserrole_notset'] = 'Le rôle par défaut n’est pas défini.';
$string['check_defaultuserrole_ok'] = 'Définition adéquate du rôle par défaut des utilisateurs.';
$string['check_dirindex_info'] = 'L’index de dossier ne doit pas être activé';
$string['check_displayerrors_details'] = '<p>L’activation du réglage PHP <code>display_errors</code> n’est pas recommandée sur les sites en production, car les messages d’erreur peuvent révéler des informations sensibles au sujet de votre serveur.</p>';
$string['check_displayerrors_error'] = 'Le réglage PHP permettant l’affichage des erreurs est activé. Il est recommandé de le désactiver.';
$string['check_displayerrors_name'] = 'Affichage des erreurs PHP';
$string['check_displayerrors_ok'] = 'Affichage des erreurs PHP désactivé.';
$string['check_dotfiles_info'] = 'Excepté le fichier /.well-known/*, les fichiers commençant par un point ne doivent pas être publics';
$string['check_emailchangeconfirmation_details'] = '<p>Il est recommandé qu’un courriel de confirmation soit requis lorsque les utilisateurs modifient leur adresse de courriel dans leur profil. Si cette vérification est désactivée, des spammeurs pourraient utiliser votre serveur pour l’envoi de pourriels.</p><p>Le champ du courriel peut par ailleurs être verrouillé par les plugins d’authentification. Cette possibilité n’est pas considérée ici.</p>';
$string['check_emailchangeconfirmation_error'] = 'Les utilisateurs peuvent saisir n’importe quelle adresse.';
$string['check_emailchangeconfirmation_info'] = 'Les utilisateurs peuvent saisir que des adresses de courriel des domaines autorisés.';
$string['check_emailchangeconfirmation_name'] = 'Confirmation de modification d’adresse de courriel';
$string['check_emailchangeconfirmation_ok'] = 'Confirmation lors du changement de l’adresse de courriel dans le profil utilisateur.';
$string['check_embed_details'] = '<p>L’intégration illimitée d’objets est très dangereuse. Tout utilisateur enregistré pourrait lancer une attaque XSS contre d’autres utilisateurs du serveur. Ce réglage devrait être désactivé sur des sites en production.</p>';
$string['check_embed_error'] = 'Intégration illimitée d’objets activée. Ceci est très dangereux dans la plupart des cas.';
$string['check_embed_name'] = 'Autoriser les balises EMBED et OBJECT';
$string['check_embed_ok'] = 'L’intégration illimitée d’objets n’est pas autorisée.';
$string['check_frontpagerole_details'] = '<p>Le rôle par défaut sur la page d’accueil est attribué à tous les utilisateurs authentifiés pour les activités de la page d’accueil. Assurez-vous qu’aucune capacité comportant des risques n’est autorisée pour ce rôle.</p><p>Il est recommandé de définir un rôle spécifique destiné à cet usage et de ne pas utiliser de rôle de type obsolète.</p>';
$string['check_frontpagerole_error'] = 'Rôle de la page d’accueil « {$a} » incorrectement défini !';
$string['check_frontpagerole_name'] = 'Rôle de la page d’accueil';
$string['check_frontpagerole_notset'] = 'Le rôle de la page d’accueil n’est pas défini.';
$string['check_frontpagerole_ok'] = 'Définition adéquate du rôle de la page d’accueil.';
$string['check_guestrole_details'] = '<p>Un rôle de visiteur anonyme est utilisé pour l’accès temporaire aux cours pour les utilisateurs anonymes. Veuillez vous assurer qu’aucune capacité comportant des risques n’est autorisée pour ce rôle.</p><p>Le seul type de rôle historique pris en charge pour un tel rôle est le rôle <em>Visiteur anonyme</em>.</p>';
$string['check_guestrole_error'] = 'Rôle de visiteur anonyme « {$a} » incorrectement défini !';
$string['check_guestrole_name'] = 'Rôle de visiteur anonyme';
$string['check_guestrole_notset'] = 'Le rôle de visiteur anonyme n’est pas défini.';
$string['check_guestrole_ok'] = 'Définition correcte du rôle de visiteur anonyme.';
$string['check_nodemodules_details'] = '<p>Le dossier <code>{$a->path}</code> contient des modules Node.js et leur dépendances, installés typiquement par l’utilitaire NPM. Ces modules peuvent être requis pour le développement de Moodle en local, par exemple pour utiliser grunt. Ils ne sont pas nécessaires pour le fonctionnement d’un site Moodle en production et peuvent comporter du code potentiellement dangereux, qui expose votre site à des attaques à distance.</p><p>Il est vivement recommandé de supprimer ce dossier si le site peut être atteint au moyen d’une URL publique ou au moins d’en empêcher l’accès par le web dans la configuration de votre serveur web.</p>';
$string['check_nodemodules_info'] = 'Le dossier <em>node_modules</em> ne devrait pas être présent sur des sites publics.';
$string['check_nodemodules_name'] = 'Dossier des modules Node.js';
$string['check_openprofiles_details'] = 'Les profils utilisateurs ouverts peuvent être pollués par des spammeurs. Il est recommandé d’activer soit le réglage <code>Imposer la connexion pour voir les profils</code>, soit <code>Imposer la connexion</code>.';
$string['check_openprofiles_error'] = 'Tout le monde peut voir les profils utilisateurs sans se connecter.';
$string['check_openprofiles_name'] = 'Profils utilisateurs ouverts';
$string['check_openprofiles_ok'] = 'La connexion est requise pour consulter les profils utilisateurs.';
$string['check_passwordpolicy_details'] = '<p>Il est recommandé de définir une politique de mots de passe, car deviner les mots de passe est la façon la plus fréquente de se procurer un accès non autorisé. Ne définissez pas une politique trop restrictive, qui entraîneraient une trop grande difficulté de mémorisation des mots de passe, avec pour conséquence leur oubli ou leur écriture.</p>';
$string['check_passwordpolicy_error'] = 'Politique de mots de passe non définie.';
$string['check_passwordpolicy_name'] = 'Politique de mots de passe';
$string['check_passwordpolicy_ok'] = 'Politique de mots de passe active.';
$string['check_preventexecpath_details'] = '<p>Permettre la configuration des chemins des programmes exécutables dans l’interface graphique d’administration est un vecteur d’escalade de privilèges. Le réglage suivant doit être imposé dans le fichier config.php :</p><p><code>$CFG->preventexecpath = true;</code></p>';
$string['check_preventexecpath_name'] = 'Chemins des programmes exécutables';
$string['check_preventexecpath_ok'] = 'Les chemins des exécutables ne peuvent être configurés que dans config.php.';
$string['check_preventexecpath_warning'] = 'Les chemins des exécutables peuvent être configurés dans l’interface graphique d’administration.';
$string['check_publicpaths_403'] = '(une erreur 403 est retournée ; idéalement une erreur 404 doit être retournée)';
$string['check_publicpaths_generic'] = 'Les fichiers {$a} ne doivent pas être publics';
$string['check_publicpaths_name'] = 'Vérifier tous les chemins publics/privés';
$string['check_publicpaths_ok'] = 'Les chemins internes ne peuvent pas être atteints publiquement';
$string['check_publicpaths_warning'] = 'Certains chemins internes sont atteignables publiquement';
$string['check_riskadmin_detailsok'] = '<p>Veuillez vérifier la liste ci-dessous des administrateurs du système :</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Veuillez vérifier la liste ci-dessous des administrateurs du système :</p>{$a->admins}<p>Il est recommandé de n’attribuer le rôle d’administrateur que dans le contexte Système. Les utilisateurs ci-dessous ont des attributions (non prises en charge) du rôle d’administrateur dans d’autres contextes :</p><p>{$a->unsupported}</p>';
$string['check_riskadmin_name'] = 'Administrateurs';
$string['check_riskadmin_ok'] = '{$a} administrateur(s) Moodle trouvé(s).';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">Vérification de l’attribution du rôle de {$a->fullname} ({$a->email})</a>';
$string['check_riskadmin_warning'] = '{$a->admincount} administrateurs et {$a->unsupcount} attributions du rôle d’administrateur trouvés.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Ces dérogations permettent d’inclure les données des utilisateurs dans les sauvegardes. Veuillez vous assurer que cette permission est nécessaire.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Les rôles ci-dessous permettent d’inclure les données des utilisateurs dans les sauvegardes. Veuillez vous assurer que cette permission est nécessaire.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>À cause des rôles ou des dérogations locales ci-dessus, les utilisateurs ci-dessous ont les permissions requises pour inclure dans les sauvegardes les données privées de n’importe quel utilisateur inscrit dans leur cours. Veuillez vous assurer que ces utilisateurs sont fiables et que le compte est protégé par un mot de passe fort.</p> {$a}';
$string['check_riskbackup_detailsok'] = 'Aucun rôle ne permet explicitement la sauvegarde des données des utilisateurs. Toutefois, les administrateurs ayant la capacité « doanything » peuvent malgré tout le faire.';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} dans {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Sauvegarde des données des utilisateurs.';
$string['check_riskbackup_ok'] = 'Aucun rôle ne permet explicitement la sauvegarde des données des utilisateurs.';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) dans {$a->contextname}</a>';
$string['check_riskbackup_warning'] = '{$a->rolecount} rôles, {$a->overridecount} dérogations et {$a->usercount} utilisateurs ont la capacité de sauvegarder les données des utilisateurs.';
$string['check_riskxss_details'] = '<p>Le terme RISK_XSS assortit toutes les capacités dangereuses qui ne doivent être autorisées que par des utilisateurs fiables.</p><p>Veuillez vérifier la liste d’utilisateurs ci-dessous et vous assurer que vous leur faites totalement confiance sur ce site :</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'Utilisateurs XSS fiables';
$string['check_riskxss_warning'] = 'RISK_XSS, {$a} utilisateurs dont vous devez être sûr.';
$string['check_unsecuredataroot_details'] = '<p>Le dossier de données ne doit pas pouvoir être atteint via le web. La meilleure façon de s’assurer que ce dossier n’est pas atteignable est de le placer en dehors du dossier web public.</p><p>Si vous déplacez ce dossier, vous devrez modifier en conséquence la variable <code>$CFG->dataroot</code> dans votre fichier <code>config.php</code>.</p>';
$string['check_unsecuredataroot_error'] = 'Votre dossier de données <code>{$a}</code> est dans un emplacement où il peut être atteint directement via le web !';
$string['check_unsecuredataroot_name'] = 'Dossier de données non sûr';
$string['check_unsecuredataroot_ok'] = 'Le dossier de données ne peut pas être atteint via le web.';
$string['check_unsecuredataroot_warning'] = 'Votre dossier de données <code>{$a}</code> est dans un emplacement où il pourrait être atteint directement via le web.';
$string['check_vendordir_details'] = '<p>Le dossier <code>{$a->path}</code> contient diverses bibliothèques de tierces parties et leur dépendances, installées typiquement par l’utilitaire PHP Composer. Ces bibliothèques peuvent être requises pour le développement de Moodle en local, par exemple pour installer PHPUnit. Elles ne sont pas nécessaires pour le fonctionnement d’un site Moodle en production et peuvent comporter du code potentiellement dangereux, qui expose votre site à des attaques à distance.</p><p>Il est vivement recommandé de supprimer ce dossier si le site peut être atteint au moyen d’une URL publique ou au moins d’en empêcher l’accès par le web dans la configuration de votre serveur web.</p>';
$string['check_vendordir_info'] = 'Le dossier <em>vendor</em> ne devrait pas être présent sur des sites publics.';
$string['check_vendordir_name'] = 'Dossier <em>vendor</em>';
$string['check_webcron_details'] = '<p>Le lancement du cron par l’intermédiaire d’un navigateur web peut exposer des informations sensibles à des utilisateurs anonymes. Il est donc recommandé de ne lancer le cron qu’en ligne de commande ou de définir un mot de passe pour l’accès distant au cron.</p>';
$string['check_webcron_name'] = 'Cron via web';
$string['check_webcron_ok'] = 'Les utilisateurs anonymes ne peuvent pas accéder au cron.';
$string['check_webcron_warning'] = 'Les utilisateurs anonymes peuvent accéder au cron.';
$string['configuration'] = 'Configuration';
$string['description'] = 'Description';
$string['details'] = 'Détails';
$string['eventreportviewed'] = 'Rapport de vérifications de sécurité consulté';
$string['issue'] = 'Problème';
$string['pluginname'] = 'Vérifications de sécurité';
$string['privacy:metadata'] = 'Le plugin Panorama de sécurité n’enregistre aucune donnée personnelle.';
$string['security:view'] = 'Consulter le rapport de sécurité';
$string['timewarning'] = 'Le traitement des données peut prendre beaucoup de temps. Veuillez prendre patience…';
