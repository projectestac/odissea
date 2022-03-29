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
 * Strings for component 'auth_oidc', language 'fr', version '3.11'.
 *
 * @package     auth_oidc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_oidcdescription'] = 'Le plug-in OpenID Connect fournit une fonctionnalité d\'authentification unique à l\'aide de fournisseurs d\'identité configurables.';
$string['cfg_authendpoint_desc'] = 'L\'URI du point de terminaison d\'autorisation de votre fournisseur d\'identité à utiliser.';
$string['cfg_authendpoint_key'] = 'Point de terminaison d\'autorisation';
$string['cfg_autoappend_desc'] = 'Ajouter automatiquement cette chaîne lors de la connexion des utilisateurs à l\'aide de la méthode d\'authentification « Informations d\'identification du mot de passe du propriétaire de la ressource ». Ceci est utile lorsque votre fournisseur d\'identité requiert un domaine commun, mais ne veut pas obliger les utilisateurs à le saisir lors de la connexion. Par exemple, si l\'utilisateur OpenID Connect complet est « james@example.com » et que vous saisissez « @example.com » ici, l\'utilisateur n\'aura qu\'à saisir « james » comme nom d\'utilisateur. <br /><b>Remarque :</b> Dans le cas où des noms d\'utilisateurs en conflit existent - c\'est-à-dire qu\'un utilisateur Moodle existe avec le même nom, la priorité du plugin d\'authentification est utilisée pour déterminer quel utilisateur l\'emporte.';
$string['cfg_autoappend_key'] = 'Ajout automatique';
$string['cfg_cleanupoidctokens_desc'] = 'Si vos utilisateurs rencontrent des problèmes pour se connecter à l\'aide de leur compte Microsoft 365, essayez de nettoyer les jetons OpenID Connect. Cela supprime les jetons parasites et incomplets qui peuvent provoquer des erreurs. AVERTISSEMENT : Cela peut interrompre les connexions en cours, il est donc préférable de le faire hors des périodes d\'utilisation.';
$string['cfg_cleanupoidctokens_key'] = 'Nettoyer les jetons de connexion OpenID';
$string['cfg_clientid_desc'] = 'Votre identifiant client enregistré chez le fournisseur d\'identité';
$string['cfg_clientid_key'] = 'Identifiant client';
$string['cfg_clientsecret_desc'] = 'Votre secret client enregistré chez le fournisseur d\'identité. Chez certains fournisseurs, il est également appelé clé.';
$string['cfg_clientsecret_key'] = 'Secret client';
$string['cfg_customicon_desc'] = 'Si vous souhaitez utiliser votre propre icône, téléchargez-la ici. Cela remplace toute icône choisie ci-dessus. <br /><br /><b>Remarques sur l\'utilisation des icônes personnalisées :</b><ul><li>Cette image ne sera <b>pas</b> redimensionnée sur la page de connexion, nous vous recommandons donc de télécharger un image ne dépassant pas 35 x 35 pixels.</li><li>Si vous avez téléchargé une icône personnalisée et souhaitez revenir à l\'une des icônes du répertoire, cliquez sur l\'icône personnalisée dans la case ci-dessus, puis cliquez sur « Supprimer », puis sur « OK », puis cliquez sur « Enregistrer les modifications » au bas de ce formulaire. L\'icône du répertoire sélectionné apparaîtra maintenant sur la page de connexion Moodle.</li></ul>';
$string['cfg_customicon_key'] = 'Icône personnalisée';
$string['cfg_debugmode_desc'] = 'En cas d\'activation, les informations seront enregistrées dans le journal Moodle pour aider à identifier les problèmes.';
$string['cfg_debugmode_key'] = 'Enregistrer les messages de débogage';
$string['cfg_domainhint_desc'] = 'Lors de l\'utilisation de la méthode d\'authentification « Code d\'autorisation », transmettez cette valeur en tant que paramètre « domain_hint ». « domain_hint » est utilisé par certains fournisseurs OpenID Connect pour faciliter le processus de connexion pour les utilisateurs. Vérifiez auprès de votre fournisseur s\'il prend en charge ce paramètre.';
$string['cfg_domainhint_key'] = 'Indice de domaine';
$string['cfg_err_invalidauthendpoint'] = 'Point de terminaison d\'autorisation non valide';
$string['cfg_err_invalidclientid'] = 'Identifiant client invalide';
$string['cfg_err_invalidclientsecret'] = 'Secret client invalide';
$string['cfg_err_invalidtokenendpoint'] = 'Point de terminaison de jeton non valide';
$string['cfg_field_mapping_desc'] = 'Les données de profil utilisateur peuvent être mappées depuis les fournisseurs d\'identité Open ID Connect (IdP) vers Moodle.<br/>
<ul>
<li>Les données de profil de base sont disponibles à partir des jetons d\'identification de tous les IdP.</li>
<li>Si Azure AD est utilisé comme IdP, des données de profil supplémentaires peuvent être mises à disposition en installant et en configurant le <a href="https://moodle.org/plugins/local_o365">plugin d\'intégration Microsoft 365 (local_o365)</a>.</li>
<li>Si la fonction de synchronisation de profil SDS est activée dans le plug-in local_o365, certains champs de profil peuvent être synchronisés de SDS vers Moodle, lors de l\'exécution de la tâche programmée « Sync avec SDS », et ne se produira pas lors de l\'exécution de la tâche programmée « Synchroniser les utilisateurs avec Azure AD », ni lorsque l\'utilisateur se connecte.</li>
</ul>';
$string['cfg_forceredirect_desc'] = 'En cas d\'activation, sautera la page d\'index de connexion et redirigera vers la page OpenID Connect. Peut être contourné avec le paramètre d\'URL ?noredirect=1';
$string['cfg_forceredirect_key'] = 'Forcer la redirection';
$string['cfg_icon_desc'] = 'Une icône à afficher à côté du nom du fournisseur sur la page de connexion.';
$string['cfg_icon_key'] = 'Icône';
$string['cfg_iconalt_check'] = 'Icône de coche';
$string['cfg_iconalt_go'] = 'Cercle vert';
$string['cfg_iconalt_group'] = 'Icône de groupe';
$string['cfg_iconalt_group2'] = 'Icône de groupe alternative';
$string['cfg_iconalt_key'] = 'Icône clé';
$string['cfg_iconalt_lock'] = 'Icône de verrouillage';
$string['cfg_iconalt_locked'] = 'Icône verrouillée';
$string['cfg_iconalt_mnet'] = 'Icône MNET';
$string['cfg_iconalt_o365'] = 'Icône Microsoft 365';
$string['cfg_iconalt_plus'] = 'Icône plus';
$string['cfg_iconalt_rightarrow'] = 'Icône flèche vers la droite';
$string['cfg_iconalt_stop'] = 'Cercle rouge';
$string['cfg_iconalt_user'] = 'Icône utilisateur';
$string['cfg_iconalt_user2'] = 'Icône utilisateur alternative';
$string['cfg_iconalt_userlock'] = 'Utilisateur avec icône de verrouillage';
$string['cfg_loginflow_authcode'] = 'Flux de code d\'autorisation (recommandé)';
$string['cfg_loginflow_authcode_desc'] = 'En utilisant ce flux, l\'utilisateur clique sur le nom du fournisseur d\'identité (voir « Nom du fournisseur » ci-dessus) sur la page de connexion Moodle et est redirigé vers le fournisseur pour se connecter. Une fois connecté avec succès, l\'utilisateur est redirigé vers Moodle où la connexion à Moodle s\'effectue de manière transparente. Il s\'agit du moyen le plus standardisé et le plus sécurisé pour la connexion de l\'utilisateur.';
$string['cfg_loginflow_key'] = 'Méthode d\'authentification';
$string['cfg_loginflow_rocreds'] = 'Octroi des identifiants de mot de passe du propriétaire de la ressource';
$string['cfg_loginflow_rocreds_desc'] = 'En utilisant ce flux, l\'utilisateur entre son nom d\'utilisateur et son mot de passe dans le formulaire de connexion Moodle comme il le ferait avec une connexion manuelle. Cela autorisera l\'utilisateur avec fournisseur d\'identité, mais ne créera pas de session sur le site du fournisseur d\'identité. Par exemple, si vous utilisez Microsoft 365 avec OpenID Connect, l\'utilisateur sera connecté à Moodle mais pas aux applications Web Microsoft 365. L\'utilisation de la demande d\'autorisation est recommandée si vous souhaitez que les utilisateurs soient connectés à la fois à Moodle et au fournisseur d\'identité. Notez que tous les fournisseurs d\'identité ne prennent pas en charge ce flux. Cette option ne doit être utilisée que lorsque d\'autres types d\'octroi d\'autorisation ne sont pas disponibles.';
$string['cfg_logoutendpoint_desc'] = 'L\'URI du point de terminaison de déconnexion de votre fournisseur d\'identité à utiliser.';
$string['cfg_logoutendpoint_key'] = 'Point de terminaison de déconnexion';
$string['cfg_oidcresource_desc'] = 'La ressource OpenID Connect pour laquelle envoyer la demande.';
$string['cfg_oidcresource_key'] = 'Ressource';
$string['cfg_oidcscope_desc'] = 'La portée OIDC à utiliser.';
$string['cfg_oidcscope_key'] = 'Portée';
$string['cfg_opname_desc'] = 'Il s\'agit d\'une étiquette destinée à l\'utilisateur final qui identifie le type d\'informations d\'identification que l\'utilisateur doit utiliser pour se connecter. Cette étiquette est utilisée dans toutes les parties de ce plugin destinées aux utilisateurs pour identifier votre fournisseur.';
$string['cfg_opname_key'] = 'Nom du fournisseur';
$string['cfg_redirecturi_desc'] = 'Il s\'agit de l\'URI à enregistrer en tant qu\' « URI de redirection ». Votre fournisseur d\'identité OpenID Connect doit le demander lors de l\'enregistrement de Moodle en tant que client. <br /><b>REMARQUE :</b> Vous devez entrer ceci dans votre fournisseur OpenID Connect *exactement* tel qu\'il apparaît ici. Toute différence empêchera les connexions à l\'aide d\'OpenID Connect.';
$string['cfg_redirecturi_key'] = 'URI de redirection';
$string['cfg_signoffintegration_desc'] = 'Si activé, lorsqu\'un utilisateur de Moodle utilisant la méthode d\'authentification OIDC se déconnecte de Moodle, Moodle tentera également de déconnecter l\'utilisateur d\'Office 365.

Notez que l\'URL du site Moodle ({$a}) doit être ajoutée en tant qu\'URI de redirection dans l\'application Azure créée pour l\'intégration de Moodle dans Office 365.';
$string['cfg_signoffintegration_key'] = 'Déconnexion unique';
$string['cfg_tokenendpoint_desc'] = 'L\'URI du point de terminaison du jeton de votre fournisseur d\'identité à utiliser.';
$string['cfg_tokenendpoint_key'] = 'Point de terminaison du jeton';
$string['cfg_tools'] = 'Outils';
$string['cfg_userrestrictioncasesensitive_desc'] = 'Cela contrôle si l\'option « /i » dans l\'expression régulière est utilisée dans la correspondance de restriction utilisateur.<br/>Si elle est activée, toutes les vérifications de restriction utilisateur seront effectuées comme sensibles à la casse. Notez que si cette option est désactivée, tous les motifs sur les majuscules seront ignorés.';
$string['cfg_userrestrictions_desc'] = 'Autoriser uniquement les utilisateurs qui répondent à certaines restrictions à se connecter. <br /><b>Comment utiliser les restrictions d\'utilisateur : </b> <ul><li>Entrez une <a href="https://en.wikipedia.org/wiki/Regular_expression">expression régulière</a > modèle qui correspond aux noms d\'utilisateur des utilisateurs que vous souhaitez autoriser.</li><li>Entrez un modèle par ligne</li><li>Si vous entrez plusieurs modèles, un utilisateur sera autorisé s\'il correspond à N\'IMPORTE QUEL modèle. </li><li>Le caractère "/" doit être échappé avec "\\".</li><li>Si vous n\'entrez aucune restriction ci-dessus, tous les utilisateurs pouvant se connecter au fournisseur OpenID Connect seront accepté par Moodle.</li><li>Tout utilisateur qui ne correspond à aucun des modèles saisis ne pourra pas se connecter à l\'aide d\'OpenID Connect.</li></ul>';
$string['cfg_userrestrictions_key'] = 'Restrictions utilisateurs';
$string['cfg_userrestrictionscasesensitive_key'] = 'Restrictions utilisateur sensibles à la casse';
$string['cleanup_oidc_tokens'] = 'Nettoyer les jetons OpenID Connect';
$string['delete_token'] = 'Supprimer le jeton';
$string['delete_token_and_reference'] = 'Supprimer le jeton et la référence';
$string['errorauthdisconnectemptypassword'] = 'Le mot de passe ne peut pas être vide';
$string['errorauthdisconnectemptyusername'] = 'Le nom d\'utilisateur ne peut pas être vide';
$string['errorauthdisconnectifmanual'] = 'En cas d\'utilisation de la méthode de connexion manuelle, entrer les informations d\'identification ci-dessous.';
$string['errorauthdisconnectinvalidmethod'] = 'Méthode de connexion non valide reçue.';
$string['errorauthdisconnectnewmethod'] = 'Utiliser la méthode de connexion';
$string['errorauthdisconnectusernameexists'] = 'Ce nom d\'utilisateur est déjà pris. Veuillez en choisir un autre.';
$string['errorauthgeneral'] = 'Un problème est survenu lors de votre connexion. Veuillez contacter votre administrateur pour obtenir de l\'aide.';
$string['errorauthinvalididtoken'] = 'Identifiant de jeton non valide reçu.';
$string['errorauthloginfailednouser'] = 'Connexion non valide : utilisateur introuvable dans Moodle. Si ce site a le paramètre « authpreventaccountcreation » activé, cela peut signifier que vous avez besoin d\'un administrateur pour vous créer un compte d\'abord.';
$string['errorauthnoauthcode'] = 'Aucun code d\'autorisation n\'a été reçu du serveur d\'identité. Les journaux d\'erreurs peuvent contenir plus d\'informations.';
$string['errorauthnocreds'] = 'Veuillez configurer les informations d\'identification du client OpenID Connect.';
$string['errorauthnoendpoints'] = 'Veuillez configurer les informations d\'identification du client OpenID Connect.';
$string['errorauthnohttpclient'] = 'Veuillez définir un client HTTP.';
$string['errorauthnoidtoken'] = 'OpenID Connect id_token non reçu.';
$string['errorauthunknownstate'] = 'État inconnu.';
$string['errorauthuseralreadyconnected'] = 'Vous êtes déjà connecté à un autre utilisateur OpenID Connect.';
$string['errorauthuserconnectedtodifferent'] = 'L\'utilisateur OpenID Connect qui s\'est authentifié est déjà connecté à un utilisateur Moodle.';
$string['errorbadloginflow'] = 'Type d\'authentification spécifié non valide. Remarque : si vous recevez ceci après une installation ou une mise à niveau récente, veuillez vider votre cache Moodle.';
$string['errorinvalidredirect_message'] = 'L\'URL vers laquelle vous essayez de rediriger n\'existe pas.';
$string['errorjwtbadpayload'] = 'Impossible de lire la charge utile JWT.';
$string['errorjwtcouldnotreadheader'] = 'Impossible de lire l\'en-tête JWT';
$string['errorjwtempty'] = 'Chaîne JWT vide ou non-reçue.';
$string['errorjwtinvalidheader'] = 'En-tête JWT non valide';
$string['errorjwtmalformed'] = 'JWT incorrect reçu.';
$string['errorjwtunsupportedalg'] = 'Algorithme JWS ou JWE non pris en charge';
$string['errorlogintoconnectedaccount'] = 'Cet utilisateur Microsoft 365 est connecté à un compte Moodle, mais la connexion OpenID Connect n\'est pas activée pour ce compte Moodle. Veuillez vous connecter au compte Moodle en utilisant la méthode d\'authentification définie du compte pour utiliser les fonctionnalités de Microsoft 365';
$string['errornodisconnectionauthmethod'] = 'Impossible de se déconnecter car il n\'y a pas de plug-in d\'authentification activé vers lequel se replier (soit la méthode de connexion précédente de l\'utilisateur, soit la méthode de connexion manuelle).';
$string['erroroidccall'] = 'Erreur dans OpenID Connect. Veuillez consulter les journaux pour plus d\'informations.';
$string['erroroidccall_message'] = 'Erreur dans OpenID Connect : {$a}';
$string['erroroidcclientinsecuretokenendpoint'] = 'Le point de terminaison du jeton doit utiliser SSL/TLS pour cela.';
$string['erroroidcclientinvalidendpoint'] = 'URI de point de terminaison non valide reçu.';
$string['erroroidcclientnoauthendpoint'] = 'Aucun point de terminaison d\'autorisation défini. Veuillez définir avec $this->setendpoints';
$string['erroroidcclientnocreds'] = 'Veuillez définir les informations d\'identification du client avec setcreds';
$string['erroroidcclientnotokenendpoint'] = 'Aucun point de terminaison de jeton défini. Veuillez définir avec $this->setendpoints';
$string['erroroidcnotenabled'] = 'Le plug-in d\'authentification OpenID Connect n\'est pas activé.';
$string['errorrestricted'] = 'Ce site a des restrictions en place sur les utilisateurs qui peuvent se connecter avec OpenID Connect. Ces restrictions vous empêchent actuellement de terminer cette tentative de connexion.';
$string['errorucpinvalidaction'] = 'Action reçue non valide.';
$string['errorusermatched'] = 'Le compte Microsoft 365 "{$a->aadupn}" est déjà associé à l\'utilisateur Moodle "{$a->username}". Pour terminer la connexion, veuillez d\'abord vous connecter en tant qu\'utilisateur Moodle et suivre les instructions du bloc Microsoft.';
$string['event_debug'] = 'Message de débogage';
$string['eventuserauthed'] = 'Utilisateur autorisé avec OpenID Connect';
$string['eventuserconnected'] = 'Utilisateur connecté à OpenID Connect';
$string['eventusercreated'] = 'Utilisateur créé avec OpenID Connect';
$string['eventuserdisconnected'] = 'Utilisateur déconnecté d\'OpenID Connect';
$string['eventuserloggedin'] = 'Utilisateur connecté avec OpenID Connect';
$string['mismatched'] = 'Non concordant';
$string['mismatched_details'] = 'L\'enregistrement du jeton contient le nom d\'utilisateur "{$a->tokenusername}" ; L\'utilisateur Moodle correspondant a le nom d\'utilisateur "{$a->moodleusername}".';
$string['na'] = 'n/a';
$string['no_token_to_cleanup'] = 'Il n\'y a pas de jeton OIDC à nettoyer.';
$string['oidc:manageconnection'] = 'Autoriser la connexion et la déconnexion OpenID';
$string['oidc:manageconnectionconnect'] = 'Autoriser la connexion OpenID';
$string['oidc:manageconnectiondisconnect'] = 'Autoriser la déconnexion OpenID';
$string['pluginname'] = 'Connexion OpenID';
$string['privacy:metadata:auth_oidc'] = 'Authentification OpenID Connect';
$string['privacy:metadata:auth_oidc_prevlogin'] = 'Méthodes de connexion précédentes pour annuler les connexions Microsoft 365';
$string['privacy:metadata:auth_oidc_prevlogin:method'] = 'La méthode de connexion précédente';
$string['privacy:metadata:auth_oidc_prevlogin:password'] = 'Le champ du mot de passe utilisateur précédent (crypté).';
$string['privacy:metadata:auth_oidc_prevlogin:userid'] = 'L\'identifiant de l\'utilisateur Moodle';
$string['privacy:metadata:auth_oidc_token'] = 'Jetons OpenID Connect';
$string['privacy:metadata:auth_oidc_token:authcode'] = 'Le code d\'autorisation du jeton';
$string['privacy:metadata:auth_oidc_token:expiry'] = 'L\'expiration du jeton';
$string['privacy:metadata:auth_oidc_token:idtoken'] = 'Le jeton d\'identification';
$string['privacy:metadata:auth_oidc_token:oidcuniqid'] = 'L\'identifiant unique de l\'utilisateur OIDC.';
$string['privacy:metadata:auth_oidc_token:oidcusername'] = 'Le nom d\'utilisateur de l\'utilisateur OIDC';
$string['privacy:metadata:auth_oidc_token:refreshtoken'] = 'Le jeton de rafraîchissement';
$string['privacy:metadata:auth_oidc_token:scope'] = 'La portée du jeton';
$string['privacy:metadata:auth_oidc_token:token'] = 'Le jeton';
$string['privacy:metadata:auth_oidc_token:tokenresource'] = 'La ressource du jeton';
$string['privacy:metadata:auth_oidc_token:userid'] = 'L\'identifiant de l\'utilisateur Moodle';
$string['privacy:metadata:auth_oidc_token:username'] = 'Le nom d\'utilisateur de l\'utilisateur Moodle';
$string['settings_fieldmap_feild_not_mapped'] = '(non mappé)';
$string['settings_fieldmap_field_businessPhones'] = 'Téléphone de bureau';
$string['settings_fieldmap_field_city'] = 'Ville';
$string['settings_fieldmap_field_companyName'] = 'Nom de l\'entreprise';
$string['settings_fieldmap_field_country'] = 'Pays';
$string['settings_fieldmap_field_department'] = 'Département';
$string['settings_fieldmap_field_displayName'] = 'Afficher un nom';
$string['settings_fieldmap_field_employeeId'] = 'Identifiant de l\'employé';
$string['settings_fieldmap_field_extensionattribute'] = 'Attribut d\'extension {$a}';
$string['settings_fieldmap_field_faxNumber'] = 'Numéro de fax';
$string['settings_fieldmap_field_givenName'] = 'Prénom';
$string['settings_fieldmap_field_groups'] = 'Groupes';
$string['settings_fieldmap_field_jobTitle'] = 'Profession';
$string['settings_fieldmap_field_mail'] = 'Courriel';
$string['settings_fieldmap_field_manager'] = 'Directeur';
$string['settings_fieldmap_field_mobile'] = 'Mobile';
$string['settings_fieldmap_field_mobilePhone'] = 'Téléphone Mobile';
$string['settings_fieldmap_field_objectId'] = 'Identifiant de l\'objet';
$string['settings_fieldmap_field_officeLocation'] = 'Bureau';
$string['settings_fieldmap_field_postalCode'] = 'Code postal';
$string['settings_fieldmap_field_preferredLanguage'] = 'Langue';
$string['settings_fieldmap_field_preferredName'] = 'Nom d\'usage';
$string['settings_fieldmap_field_roles'] = 'Rôles';
$string['settings_fieldmap_field_state'] = 'État';
$string['settings_fieldmap_field_streetAddress'] = 'Nom de la rue';
$string['settings_fieldmap_field_surname'] = 'Nom de famille';
$string['settings_fieldmap_field_teams'] = 'Équipes';
$string['settings_fieldmap_field_telephoneNumber'] = 'Numéro de téléphone';
$string['settings_fieldmap_field_userPrincipalName'] = 'Nom d\'utilisateur (UPN)';
$string['table_action'] = 'Action';
$string['table_matching_details'] = 'Détails';
$string['table_matching_status'] = 'Statut de correspondance';
$string['table_oidc_username'] = 'Nom d\'utilisateur OIDC';
$string['table_token_id'] = 'Identifiant d\'enregistrement de jeton';
$string['table_token_unique_id'] = 'Identifiant unique OIDC';
$string['task_cleanup_oidc_state_and_token'] = 'Nettoyer l\'état OIDC et le jeton invalide';
$string['token_deleted'] = 'Le jeton a été supprimé avec succès';
$string['ucp_disconnect_details'] = 'Cela déconnectera votre compte Moodle de {$a}. Vous devrez créer un nom d\'utilisateur et un mot de passe pour vous connecter à Moodle.';
$string['ucp_disconnect_title'] = 'Déconnexion {$a}';
$string['ucp_general_intro'] = 'Ici, vous pouvez gérer votre connexion à {$a}. En cas d\'activation, vous pourrez utiliser votre compte {$a} pour vous connecter à Moodle au lieu d\'un nom d\'utilisateur et d\'un mot de passe distincts. Une fois connecté, vous n\'aurez plus à vous souvenir d\'un nom d\'utilisateur et d\'un mot de passe pour Moodle, toutes les connexions seront gérées par {$a}.';
$string['ucp_login_start'] = 'Commencez à utiliser {$a} pour vous connecter à Moodle';
$string['ucp_login_start_desc'] = 'Cela changera votre compte pour utiliser {$a} pour vous connecter à Moodle. Une fois activé, vous vous connecterez en utilisant vos identifiants {$a} - votre nom d\'utilisateur et votre mot de passe Moodle actuels ne fonctionneront pas. Vous pouvez à tout moment vous déconnecter de votre compte et vous reconnecter normalement.';
$string['ucp_login_status'] = 'La connexion {$a} est :';
$string['ucp_login_stop'] = 'Arrêtez d\'utiliser {$a} pour vous connecter à Moodle';
$string['ucp_login_stop_desc'] = 'Vous utilisez actuellement {$a} pour vous connecter à Moodle. Cliquer sur « Arrêter d\'utiliser {$a} login » déconnectera votre compte Moodle de {$a}. Vous ne pourrez plus vous connecter à Moodle avec votre compte {$a}. Il vous sera demandé de créer un nom d\'utilisateur et un mot de passe, et à partir de là, vous pourrez vous connecter directement à Moodle.';
$string['ucp_o365accountconnected'] = 'Ce compte Microsoft 365 est déjà connecté à un autre compte Moodle.';
$string['ucp_status_disabled'] = 'Désactivé';
$string['ucp_status_enabled'] = 'Activé';
$string['ucp_title'] = 'Gestion {$a}';
$string['unmatched'] = 'Incomparable';
$string['update_oncreate_and_onlogin'] = 'À la création et à chaque connexion';
$string['update_oncreate_and_onlogin_and_usersync'] = 'Lors de la création, chaque connexion et chaque tâche de synchronisation utilisateur s\'exécutent';
$string['update_onlogin_and_usersync'] = 'À chaque connexion et chaque tâche de synchronisation d\'utilisateur exécutée';
