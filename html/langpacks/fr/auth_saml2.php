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
 * Strings for component 'auth_saml2', language 'fr', version '4.4'.
 *
 * @package     auth_saml2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alterlogout'] = 'URL de déconnexion alternative';
$string['alterlogout_help'] = 'URL vers laquelle les utilisateurs seront redirigés après que tous les mécanismes internes de déconnexion aient été exécutés.';
$string['anyauth'] = 'Tout type d’authentification autorisé';
$string['anyauth_help'] = 'Si oui : autorise l’identifiant SAML pour tous les types d’utilisateurs. Si non : autorise seulement les utilisateurs dont le type d’authentification est saml2.';
$string['attemptsignout'] = 'Essayer de se déconnecter auprès du fournisseur d’identité (IdP)';
$string['attemptsignout_help'] = 'Cela tentera de communiquer avec le fournisseur d’identité (IdP) pour envoyer une demande de déconnexion';
$string['attrsimple'] = 'Simplifier les attributs';
$string['attrsimple_help'] = 'Certains fournisseurs d’identité (IdP) tels que ADFS utilisent de longues clés d’attribut contenant des urns ou des namespaces. Si positionné sur oui, cela simplifiera ces derniers. Par exemple, on remplacera l’attribut « http://schemas.xmlsoap.org/ws/2005/05/identity/claims/givenname » par « givenname ».';
$string['auth_data_mapping'] = 'Appariement des données';
$string['auth_fieldlock_expl'] = '<p><strong>Verrouiller cette valeur :</strong> si cette option est activée, elle empêchera les utilisateurs et les administrateurs Moodle de modifier le champ directement. Utilisez cette option si vous maintenez ces données dans le système d’authentification externe.</p>';
$string['auth_fieldlockfield'] = 'Verrouiller la valeur ({$a})';
$string['auth_fieldlocks'] = 'Verrouiller les champs utilisateur';
$string['auth_fieldmapping'] = 'Correspondance de données ({$a})';
$string['auth_saml2blockredirectdescription'] = 'Rediriger ou afficher le message vers les connexions SAML2 en fonction des restrictions de groupe configurées';
$string['auth_saml2description'] = 'S’authentifier avec un fournisseur d’identité (IdP) SAML2';
$string['auth_updatelocalfield'] = 'Modifier la valeur locale ({$a})';
$string['auth_updateremotefield'] = 'Modifier la valeur externe ({$a})';
$string['autocreate'] = 'Créer automatiquement les utilisateurs';
$string['autocreate_help'] = 'Si un utilisateur est présent chez le fournisseur d’identité (IdP), mais n’est pas présent dans Moodle, un compte Moodle sera créé.';
$string['availableidps'] = 'Sélectionner les fournisseurs d’identité (IdP) disponibles';
$string['availableidps_help'] = 'Si les métadonnées XML contiennent plusieurs fournisseurs d’identité (IdP), vous devrez sélectionner les entités autorisées à s’identifier sur votre plateforme.';
$string['blockredirectheading'] = 'Actions de blocage de compte';
$string['cannotmapfield'] = 'Collision d’appariement détectée - deux champs correspondent au même élément d’évaluation {$a}';
$string['certificate'] = 'Régénérer le certificat';
$string['certificate_help'] = 'Régénérez la clé privée et le certificat utilisés par ce fournisseur de service (SP). | <a href=\'{$a}\'> Afficher le certificat SP </a>';
$string['certificatedetails'] = 'Détails du certificat';
$string['certificatedetailshelp'] = '<h1>Contenu du certificat public généré automatiquement par SAML2 </h1><p>Le chemin du certificat est ici :</p>';
$string['certificatelock'] = 'Verrouiller le certificat';
$string['certificatelock_help'] = 'Verrouiller les certificats empêchera de les écraser une fois générés.';
$string['certificatelock_locked'] = 'Le certificat est verrouillé';
$string['certificatelock_warning'] = 'Attention. Vous allez verrouiller les certificats. Voulez-vous vraiment effectuer cette action ?';
$string['commonname'] = 'Nom commun';
$string['countryname'] = 'Pays';
$string['debug'] = 'Débogage';
$string['debug_help'] = '<p>Ce paramètre ajoute des informations supplémentaires dans les journaux Moodle | <a href=\'{$a}\'>Voir la configuration du module SSP</a></p>';
$string['duallogin'] = 'Authentification multiple';
$string['duallogin_help'] = '<p>Oui :  les utilisateurs verront à la fois l’authentification manuelle et un bouton de connexion SAML. Non : les utilisateurs seront toujours dirigées directement vers la page de connexion du fournisseur d’identité (IdP).</p>
<p>Passif : les utilisateurs déjà authentifiés chez le fournisseur d’identité (IdP) seront automatiquement connectés, sinon ils seront envoyés à la page de connexion Moodle.</p>
<p>Si cette option est positionnée à non, les administrateurs peuvent toujours voir la page de connexion manuelle via /login/index.php?saml=off</p>
<p>Si cette option est positionnée à oui, les pages externes peuvent créer un lien profond vers Moodle en utilisant l’attribut saml, par exemple /course/view.php?id=45&saml=on</p>';
$string['emailtaken'] = 'Impossible de créer un nouveau compte, car l’adresse e-mail {$a} est déjà enregistrée';
$string['emailtakenupdate'] = 'Votre adresse e-mail n’a pas été mise à jour, car l’adresse e-mail {$a} est déjà enregistrée';
$string['errorparsingxml'] = 'Erreur lors de l’analyse XML : {$a}';
$string['exception'] = 'Exception SAML2 : {$a}';
$string['expirydays'] = 'Expiration en jours';
$string['flaggedresponsetypemessage'] = 'Afficher un message personnalisé';
$string['flaggedresponsetyperedirect'] = 'Redirection vers une URL externe';
$string['flagmessage'] = 'Message de réponse';
$string['flagmessage_default'] = 'Vous êtes connecté à votre fournisseur d’identité cependant, ce compte a un accès limité à Moodle, veuillez contacter votre administrateur pour plus de détails.';
$string['flagmessage_help'] = '<p>Le message à afficher lorsqu’un utilisateur n’est pas autorisé à accéder à Moodle en fonction des restrictions de groupe configurées.</p>
<p>(S’affiche uniquement lorsque l’option « Type de réponse aux comptes bloqués » est positionnée sur « Afficher un message personnalisé ».)</p>';
$string['flagredirecturl'] = 'URL de redirection';
$string['flagredirecturl_help'] = '<p>L’URL pour rediriger un utilisateur n’est pas autorisée à accéder à Moodle en fonction des restrictions de groupe configurées.</p>
<p>(Utilisé uniquement lorsque « Type de réponse aux comptes bloqués » est « Rediriger vers une URL externe ».)</p>';
$string['flagresponsetype'] = 'Type de réponse aux comptes bloqués';
$string['flagresponsetype_help'] = 'Si l’accès est bloqué en fonction des restrictions de groupe configurées, comment doit répondre Moodle ?';
$string['idpattr'] = 'Correspondance de l’identifiant du fournisseur d’identité (IdP)';
$string['idpattr_help'] = 'À quel nom d’attribut (côté IdP) correspond l’identifiant Moodle ?';
$string['idpmetadata'] = 'métadonnées XML ou URL publique des métadonnées XML du fournisseur d’identité (IdP)';
$string['idpmetadata_badurl'] = 'Métadonnées non valides à {$a}';
$string['idpmetadata_help'] = 'Pour utiliser plusieurs fournisseurs d’identité (IdP), entrez chaque URL de métadonnées publiques sur une nouvelle ligne. <br/> Pour remplacer un nom, placez le texte avant http. par exemple. « Nom de l’IdP forcé http://ssp.local/simplesaml/saml2/idp/metadata.php »';
$string['idpmetadata_invalid'] = 'Le XML du fournisseur d’identité (IdP) n’est pas valide';
$string['idpmetadata_noentityid'] = 'Le XML du fournisseur d’identité (IdP) n’a pas d’attribut entityID';
$string['idpmetadatarefresh'] = 'Actualisation des métadonnées du fournisseur d’identité (IdP)';
$string['idpmetadatarefresh_help'] = 'Exécuter une tâche programmée pour mettre à jour les métadonnées du fournisseur d’identité (IdP) à partir de l’URL des métadonnées IdP';
$string['idpname'] = 'Remplacement de l’étiquette du fournisseur d’identité (IdP)';
$string['idpname_help'] = 'Exemple myUNI - ceci est détecté à partir des métadonnées et s’affichera sur la page de double connexion (si activée)';
$string['idpnamedefault'] = 'S’authentifier avec SAML2';
$string['idpnamedefault_varaible'] = 'S’authentifier avec SAML2 ({$a})';
$string['localityname'] = 'Localité';
$string['locked'] = 'Verrouillé';
$string['logdir'] = 'Répertoire des journaux';
$string['logdir_help'] = 'Le répertoire du journal dans lequel le module SSPHP écrira. Le fichier sera nommé simplesamlphp.log';
$string['logdirdefault'] = '/tmp/';
$string['logtofile'] = 'Activer la journalisation dans un fichier';
$string['logtofile_help'] = 'L’activation de cette option redirigera la sortie du journal du module SSPHP vers un fichier dans le répertoire du journal';
$string['manageidpsheading'] = 'Gérer les fournisseurs d’identité (IdP) disponibles';
$string['mdlattr'] = 'Correspondance de l’identifiant Moodle';
$string['mdlattr_help'] = 'À quel champ utilisateur Moodle l’identifiant du fournisseur d’identité (IdP) doit-il être mis en correspondance ?';
$string['metadatafetchfailed'] = 'Échec de la récupération des métadonnées : {$a}';
$string['metadatafetchfailedstatus'] = 'Échec de la récupération des métadonnées : code d’état {$a}';
$string['metadatafetchfailedunknown'] = 'Échec de la récupération des métadonnées : erreur cURL inconnue';
$string['multiidpbuttons'] = 'Boutons avec icônes';
$string['multiidpdisplay'] = 'Affichage de fournisseurs d’identité multiple';
$string['multiidpdisplay_help'] = 'Si les métadonnées contiennent plusieurs fournisseurs d’identité (IdP), comment chaque IdP disponible doit être affiché ?';
$string['multiidpdropdown'] = 'Liste déroulante';
$string['multiidpinfo'] = '<ul>
<li>Un fournisseur d’identité (IdP) ne peut être utilisé que s’il est défini comme Actif</li>
<li>Lorsque l’option Authentification multiple a été activée, tous les fournisseurs d’identité (IdP) actifs seront affichés sur la page de connexion</li>
<li>Lorsqu’un fournisseur d’identité (IdP) a été défini par défaut et que l’option Authentification multiple n’est pas activée, ce fournisseurs d’identité (IdP) sera automatiquement utilisé à moins que le paramètre multiidp=on ou saml=off soit transmis à /login/index.php</li>
<li>Lorsqu’un fournisseur d’identité (IdP) a été défini en tant qu’administrateur, tous les utilisateurs qui se connectent à l’aide de ce fournisseur d’identité (IdP) deviendront automatiquement administrateur</li>
<li>Un fournisseur d’identité (IdP) peut recevoir un alias, en accédant à /login/index.php?idpalias={alias}, l’alias peut être transmis pour utiliser directement ce fournisseur d’identité (IdP)</li>
</ul>';
$string['nameidasattrib'] = 'Exposer l’appel NameID comme attribut';
$string['nameidasattrib_help'] = 'L’appel NameID sera exposé au module SSPHP en tant qu’attribut nommé nameid';
$string['nameidpolicy'] = 'Politique NameID';
$string['noattribute'] = 'Vous vous êtes connecté avec succès, mais nous n’avons pas trouvé votre attribut « {$a} » pour vous associer à un compte dans Moodle.';
$string['noidpfound'] = 'Le fournisseur d’identité (IdP) « {$a} » n’a pas été trouvé en tant qu’IdP configuré.';
$string['nouser'] = 'Vous vous êtes connecté avec succès en tant que « {$a} », mais vous n’avez pas de compte sur Moodle.';
$string['nullprivatecert'] = 'La création du certificat privé a échoué.';
$string['nullpubliccert'] = 'La création du certificat public a échoué.';
$string['organizationalunitname'] = 'Unité organisationnelle';
$string['organizationname'] = 'Organisation';
$string['passivemode'] = 'Mode passif';
$string['phone1'] = 'Téléphone';
$string['phone2'] = 'Téléphone mobile';
$string['pluginname'] = 'SAML2';
$string['privacy:no_data_reason'] = 'Le plugin d’authentification Saml2 n’enregistre aucune donnée personnelle.';
$string['privatekeypass'] = 'Mot de passe de la clé de certificat privée';
$string['privatekeypass_help'] = 'Ceci est utilisé pour signer le certificat Moodle local, changer cela invalidera le certificat actuel.';
$string['regenerate_submit'] = 'Régénérer';
$string['rememberidp'] = 'Se souvenir du service de connexion';
$string['required'] = 'Ce champ est requis';
$string['requireint'] = 'Ce champ est obligatoire et doit être un entier positif';
$string['selectloginservice'] = 'Sélectionnez un service de connexion';
$string['sha1'] = 'SHA1 (dangereux)';
$string['sha256'] = 'SHA256';
$string['sha384'] = 'SHA384';
$string['sha512'] = 'SHA512';
$string['showidplink'] = 'Afficher le lien du fournisseur d’identité (IdP)';
$string['showidplink_help'] = 'Cela affichera le lien du fournisseur d’identité (IdP) lorsque le site sera configuré.';
$string['signaturealgorithm'] = 'Algorithme de signature';
$string['signaturealgorithm_help'] = 'Il s’agit de l’algorithme qui sera utilisé pour signer les requêtes SAML. Attention : l’algorithme SHA1 n’est fourni que pour la compatibilité ascendante, sauf si vous devez absolument l’utiliser, il est recommandé de l’éviter et d’utiliser au moins SHA256 à la place.';
$string['spmetadata'] = 'Métadonnées du fournisseur de service (SP)';
$string['spmetadata_help'] = '<a href=\'{$a}\'> Afficher les métadonnées du fournisseur de services </a> | <a href=\'{$a}?download=1\'>Télécharger les métadonnées SP </a>
<p>Vous devrez peut-être donner ceci à l’administrateur du fournisseur de service (IdP) pour qu’il vous ajoute à la liste blanche.</p>';
$string['spmetadatasign'] = 'Signature des métadonnées de fournisseur de service (SP)';
$string['spmetadatasign_help'] = 'Signer les métadonnées du fournisseur de service (SP)';
$string['sspversion'] = 'Version SimpleSAMLphp';
$string['stateorprovincename'] = 'État ou province';
$string['suspendeduser'] = 'Vous vous êtes connecté avec succès en tant que « {$a} », mais votre compte a été suspendu dans Moodle.';
$string['taskmetadatarefresh'] = 'Tâche d’actualisation des métadonnées';
$string['test_auth_button_login'] = 'Se connecter au fournisseur d’identité (IdP)';
$string['test_auth_button_logout'] = 'Se déconnecter au fournisseur d’identité (IdP)';
$string['test_auth_str'] = 'Tester l’authentification et la connexion';
$string['test_passive_str'] = 'Tester le mode passif';
$string['tolower'] = 'Minuscule';
$string['tolower_help'] = 'Convertir en minuscule l’identifiant du fournisseur d’identité (IdP) avant la correspondance ?';
$string['unlocked'] = 'Déverrouillé';
$string['unlockedifempty'] = 'Déverrouillé si vide';
$string['update_never'] = 'Jamais';
$string['update_oncreate'] = 'À la création';
$string['update_onlogin'] = 'À chaque connexion';
$string['update_onupdate'] = 'Lors de la mise à jour';
$string['wrongauth'] = 'Vous vous êtes connecté avec succès en tant que « {$a} » mais vous n’êtes pas autorisé à accéder à Moodle.';
