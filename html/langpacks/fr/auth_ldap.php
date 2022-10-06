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
 * Strings for component 'auth_ldap', language 'fr', branch 'MOODLE_38_STABLE'
 *
 * @package   auth_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'Impossible de créer le nouveau compte dans Active Directory. Assurez-vous que votre serveur satisfait toutes les conditions requises pour que cela fonctionne (connexion LDAPS, utilisateur de connexion avec droits d\'accès adéquats, etc.)';
$string['auth_ldap_attrcreators'] = 'Liste des groupes ou contextes dont les membres ont les permissions requises pour créer des attributs. Les groupes (en général, de la forme « cn=teachers,ou=staff,o=myorg ») sont séparés par des points-virgules (;)';
$string['auth_ldap_attrcreators_key'] = 'Gestionnaires d\'attributs';
$string['auth_ldap_auth_user_create_key'] = 'Créer les utilisateurs en externe';
$string['auth_ldap_bind_dn'] = 'Si vous souhaitez utiliser une connexion authentifiée au serveur LDAP pour chercher les utilisateurs, indiquez ici son nom de connexion. Quelque chose comme : « cn=ldapuser, o=Organisation, c=FR ».';
$string['auth_ldap_bind_dn_key'] = 'DN (Distinguished Name)';
$string['auth_ldap_bind_pw'] = 'Mot de passe pour cette connexion';
$string['auth_ldap_bind_pw_key'] = 'Mot de passe';
$string['auth_ldap_bind_settings'] = 'Configuration du lien';
$string['auth_ldap_changepasswordurl_key'] = 'URL pour changement de mot de passe';
$string['auth_ldap_contexts'] = 'Liste des contextes de l\'annuaire LDAP, séparés par « ; », où les enregistrements des utilisateurs sont situés. Par exemple : « ou=Étudiants, o=Organisation, c=FR; ou=Enseignants, o=Organisation, c=FR ».';
$string['auth_ldap_contexts_key'] = 'Contextes';
$string['auth_ldap_create_context'] = 'Lors de l\'utilisation de la création d\'utilisateurs avec confirmation par courriel, indiquer ici le contexte où créer les utilisateurs. Pour des raisons de sécurité, ce contexte ne doit pas être le même que celui des autres utilisateurs. Il n\'est pas nécessaire d\'ajouter ce contexte à la variable ldap_context. Moodle cherchera automatiquement les utilisateurs dans ce contexte.<br /><strong>Remarque :</strong> vous devrez modifier la méthode user_create() dans le fichier auth/ldap/auth.php pour permettre la création des utilisateurs.';
$string['auth_ldap_create_context_key'] = 'Contexte des nouveaux utilisateurs';
$string['auth_ldap_create_error'] = 'Erreur lors de la création de l\'utilisateur dans LDAP.';
$string['auth_ldapdescription'] = 'Cette méthode permet l\'authentification auprès d\'un annuaire LDAP externe. Si les nom d\'utilisateur et mot de passe sont corrects, Moodle créera un nouvel enregistrement pour cet utilisateur dans sa base de données. Ce module peut récupérer les attributs de l\'enregistrement LDAP de l\'utilisateur afin de remplir certains champs dans Moodle. Lors des connexions suivantes, seuls les nom d\'utilisateur et mot de passe sont vérifiés.';
$string['auth_ldap_expiration_desc'] = 'Sélectionnez « {$a->no} » pour désactiver le contrôle d\'échéance des mots de passe ou « {$a->ldapserver} » pour reprendre la durée d\'échéance des mots de passe à partir du serveur LDAP';
$string['auth_ldap_expiration_key'] = 'Échéance';
$string['auth_ldap_expiration_warning_desc'] = 'Nombre de jours avant que l\'avertissement d\'échéance soit affiché.';
$string['auth_ldap_expiration_warning_key'] = 'Avertissement d\'échéance';
$string['auth_ldap_expireattr_desc'] = 'Facultatif : court-circuite l\'attribut LDAP contenant la durée d\'échéance du mot de passe.';
$string['auth_ldap_expireattr_key'] = 'Attribut d\'échéance';
$string['auth_ldapextrafields'] = '<p>Ces zones sont facultatives. Il vous est possible de remplir certains champs de Moodle avec des données provenant des <strong>attributs de l\'annuaire LDAP</strong>.</p><p>Si vous laissez ces zones vides, aucune donnée ne sera récupérée de l\'annuaire LDAP et les valeurs par défaut de Moodle seront utilisées.</p><p>Dans tous les cas, l\'utilisateur a la possibilité de modifier tous ces champs, une fois connecté.</p>';
$string['auth_ldap_graceattr_desc'] = 'Facultatif : ne pas tenir compte de l\'attribut de tolérance de connexion';
$string['auth_ldap_gracelogin_key'] = 'Attribut tolérance de connexion';
$string['auth_ldap_gracelogins_desc'] = 'Activer le support de tolérance de connexion de LDAP. Une fois le mot de passe échu, l\'utilisateur peut se connecter jusqu\'à ce que le paramètre de tolérance de connexion ait une valeur de 0. L\'activation de ce réglage affiche un message explicite lorsque le mot de passe est échu.';
$string['auth_ldap_gracelogins_key'] = 'Tolérance des connexions';
$string['auth_ldap_groupecreators'] = 'Liste des groupes ou contextes dont les membres ont les permissions requises pour créer des groupes. Les groupes (en général, de la forme « cn=teachers,ou=staff,o=myorg ») sont séparés par des points-virgules (;)';
$string['auth_ldap_groupecreators_key'] = 'Gestionnaires de groupes';
$string['auth_ldap_host_url'] = 'Indiquer le serveur LDAP sous forme d\'URL comme « ldap://ldap.organisation.fr/ » ou « ldaps://ldap.organisation.fr/ ». Si vous utilisez plusieurs serveurs LDAP redondants, séparez leurs adresses avec des points-virgules (;).';
$string['auth_ldap_host_url_key'] = 'URL du serveur';
$string['auth_ldap_ldap_encoding'] = 'L\'encodage utilisé par le serveur LDAP, très probablement utf-8. Si LDAP v2 est sélectionnée, Active Directory utilise l\'encodage qu\'il a configuré, par exemple cp1252, cp1250.';
$string['auth_ldap_ldap_encoding_key'] = 'Encodage LDAP';
$string['auth_ldap_login_settings'] = 'Configuration de la connexion';
$string['auth_ldap_memberattribute'] = 'Indiquer l\'attribut d\'appartenance à un groupe. D\'habitude cet attribut est « member ».';
$string['auth_ldap_memberattribute_isdn'] = 'Court-circuite le traitement des valeurs de l\'attribut d\'appartenance';
$string['auth_ldap_memberattribute_isdn_key'] = 'L\'attribut appartenance utilise dn';
$string['auth_ldap_memberattribute_key'] = 'Attribut appartenance';
$string['auth_ldap_noconnect'] = 'Le module LDAP ne peut pas se connecter au serveur {$a}';
$string['auth_ldap_noconnect_all'] = 'Le module LDAP ne peut pas se connecter à aucun des serveurs {$a}';
$string['auth_ldap_noextension'] = '<em>Le module LDAP de PHP ne semble pas être installé. Veuillez vous assurer qu\'il est bien installé et activé si vous voulez utiliser ce plugin d\'authentification.</em>';
$string['auth_ldap_no_mbstring'] = 'L\'extension mbstring est nécessaire pour créer des utilisateurs dans Active Directory.';
$string['auth_ldapnotinstalled'] = 'Impossible d\'utiliser l\'authentification LDAP. Le module PHP LDAP n\'est pas installé.';
$string['auth_ldap_objectclass'] = 'Facultatif : court-circuite la classe objectClass utilisée pour rechercher/renommer des utilisateurs sur ldap_user_type. Il n\'est habituellement pas nécessaire de modifier ce réglage.';
$string['auth_ldap_objectclass_key'] = 'Classe objet';
$string['auth_ldap_opt_deref'] = 'Détermine le traitement des alias durant la recherche. Veuillez sélectionner une des valeurs suivantes : « Non » (LDAP_DEREF_NEVER) ou « Oui » (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Dé-référencer les alias';
$string['auth_ldap_passtype'] = 'Indiquer le format des mots de passe (nouveaux ou modifiés) dans le serveur LDAP.';
$string['auth_ldap_passtype_key'] = 'Format de mot de passe';
$string['auth_ldap_passwdexpire_settings'] = 'Réglages de l\'échéance du mot de passe LDAP';
$string['auth_ldap_preventpassindb'] = 'Choisissez « Oui » pour empêcher le stockage des mots de passe dans la base de données de Moodle.';
$string['auth_ldap_preventpassindb_key'] = 'Empêcher la mise en cache des mots de passe';
$string['auth_ldap_rolecontext'] = 'Contexte {$a->localname}';
$string['auth_ldap_rolecontext_help'] = 'Le contexte LDAP utilisé pour la sélection de la correspondance <i>{$a->localname}</i>. Séparez les groupes multiples par des points-virgules (;). Un exemple possible : cn={$a->shortname},ou=staff,o=monorganisation.';
$string['auth_ldap_search_sub'] = 'Rechercher les utilisateurs dans les sous-contextes.';
$string['auth_ldap_search_sub_key'] = 'Recherche sous-contextes';
$string['auth_ldap_server_settings'] = 'Configuration du serveur LDAP';
$string['auth_ldap_suspended_attribute'] = 'Facultatif : lorsque cet attribut est fourni, il sera utilisé pour activer/suspendre le compte utilisateur local créé.';
$string['auth_ldap_suspended_attribute_key'] = 'Attribut de suspension';
$string['auth_ldap_unsupportedusertype'] = 'La fonction auth: ldap user_create() ne supporte pas le type d\'utilisateur sélectionné « {$a} »';
$string['auth_ldap_update_userinfo'] = 'Mettre à jour les données des utilisateurs (prénom, nom, adresse, etc.) de Moodle depuis l\'annuaire LDAP. Lire « /auth/ldap/attr_mappings.php » pour avoir des informations sur la correspondance.';
$string['auth_ldap_user_attribute'] = 'L\'attribut utilisé pour nommer et rechercher les utilisateurs. Habituellement « cn ».';
$string['auth_ldap_user_attribute_key'] = 'Attribut utilisateur';
$string['auth_ldap_user_exists'] = 'Le nom d\'utilisateur LDP existe déjà.';
$string['auth_ldap_user_settings'] = 'Configuration de la consultation utilisateurs';
$string['auth_ldap_user_type'] = 'Indiquer comment les utilisateurs sont enregistrés dans LDAP. Ce réglage permet également d\'indiquer comment l\'échéance des comptes, les tolérances de connexion et la création des utilisateurs fonctionneront.';
$string['auth_ldap_user_type_key'] = 'Type utilisateur';
$string['auth_ldap_usertypeundefined'] = 'Le type config.user_type n\'est pas défini ou la fonction ldap_expirationtime2unix ne supporte pas le type choisi !';
$string['auth_ldap_usertypeundefined2'] = 'Le type config.user_type n\'est pas défini ou la fonction ldap_unixi2expirationtime ne supporte pas le type choisi !';
$string['auth_ldap_version'] = 'La version du protocole LDAP que votre serveur utilise.';
$string['auth_ldap_version_key'] = 'Version';
$string['auth_ntlmsso'] = 'SSO NTLM';
$string['auth_ntlmsso_enabled'] = 'Sélectionner Oui pour authentifier les utilisateurs via un domaine NTLM. Remarque : pour fonctionner, cette méthode d\'authentification requiert d\'autres réglages sur votre serveur. Voir <a href="https://docs.moodle.org/fr/Authentification_NTLM">https://docs.moodle.org/fr/Authentification_NTLM</a>';
$string['auth_ntlmsso_enabled_key'] = 'Activer';
$string['auth_ntlmsso_ie_fastpath'] = 'Activer le chemin rapide NTLM SSO (saute certaines étapes si le navigateur client est Internet Explorer).';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'Tenter NTLM avec tous les navigateurs';
$string['auth_ntlmsso_ie_fastpath_key'] = 'Chemin rapide NTLM SSO';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'Oui, tenter NTLM avec d\'autres navigateurs';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Oui, tous les autres navigateurs utilisent le mode de connexion standard.';
$string['auth_ntlmsso_maybeinvalidformat'] = 'Impossible d\'extraire le nom d\'utilisateur à partir de l\'entête REMOTE_USER. Le format est-il configuré correctement ?';
$string['auth_ntlmsso_missing_username'] = 'Vous devez au moins indiquer %username% dans le format du nom d\'utilisateur distant';
$string['auth_ntlmsso_remoteuserformat'] = 'Si vous avez choisi « NTLM » comme « Type d\'authentification », vous pouvez spécifier ici le format du nom d\'utilisateur distant. Si vous ne renseignez pas ce champ, le format par défaut DOMAIN\\username sera utilisé. Vous pouvez utiliser le paramètre fictif optionnel <b>%domain%</b> pour indiquer où doit apparaître le nom du domaine et le paramètre fictif obligatoire <b>%username%</b> pour indiquer où le nom d\'utilisateur doit apparaître.<br /><br />Les formats les plus utilisés sont <tt>%domain%\\%username%</tt> (défaut sous MS Windows), <tt>%domain%/%username%</tt>, <tt>%domain%+%username%</tt> ou simplement <tt>%username%</tt> (si le domaine n\'est pas présent).';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Format du nom d\'utilisateur distant';
$string['auth_ntlmsso_subnet'] = 'L\'activation de ce paramètre ne permettra le SSO que pour des clients de ce sous-réseau. Format : xxx.xxx.xxx.xxx/masque. Séparer plusieurs réseaux par une virgule.';
$string['auth_ntlmsso_subnet_key'] = 'Sous-réseau';
$string['auth_ntlmsso_type'] = 'La méthode d\'authentification configurée dans le serveur web pour authentifier les utilisateurs. En cas de doute, choisir NTLM.';
$string['auth_ntlmsso_type_key'] = 'Type d\'authentification';
$string['cannotmaprole'] = 'Le rôle « {$a->rolename} » ne peut pas être mis en correspondance, car son nom abrégé « {$a->shortname} » est trop long ou comporte des traits d\'union. Pour lui permettre d\'être mis en correspondance, son nom doit être raccourci à {$a->charlimit} caractères et tous les tirets supprimés. <a href="{$a->link}">Modifier le rôle ici</a>';
$string['connectingldap'] = 'Connection au serveur LDAP…';
$string['connectingldapsuccess'] = 'La connexion au serveur LDAP a réussi';
$string['creatingtemptable'] = 'Création de la table temporaire {$a}';
$string['diag_contextnotfound'] = 'Le contexte {$a} n\'existe pas ou ne peut pas être lu par DN lié.';
$string['diag_emptycontext'] = 'Contexte vide trouvé.';
$string['diag_genericerror'] = 'Erreur LDAP {$a->code} de libellé {$a->subject}: {$a->message}.';
$string['diag_rolegroupnotfound'] = 'Le groupe {$a->group} pour le rôle {$a->localname} n\'existe pas ou ne peut pas être lu par DN lié.';
$string['diag_toooldversion'] = 'Il est très improbable qu\'un serveur LDAP moderne utilise le protocole LDAPv2. Des réglages erronés peuvent corrompre les valeurs des champs utilisateur. Veuillez vérifier auprès de votre administrateur LDAP.';
$string['didntfindexpiretime'] = 'La fonction password_expire() n\'a pas trouvé de durée d\'échéance';
$string['didntgetusersfromldap'] = 'Aucun utilisateur obtenu depuis LDAP';
$string['gotcountrecordsfromldap'] = '{$a} enregistrements obtenus de LDAP';
$string['ldapnotconfigured'] = 'L\'hôte LDAP n\'est pas configuré';
$string['morethanoneuser'] = 'Plus d\'un enregistrement utilisateur trouvé dans LDAP. Seul le premier sera utilisé.';
$string['needbcmath'] = 'L\'extension BCMath est nécessaire pour pouvoir vérifier l\'échéance des mots de passe avec Active Directory.';
$string['needmbstring'] = 'L\'extension mbstring est nécessaire pour pouvoir changer les mots de passe de Active Directory';
$string['nodnforusername'] = 'Erreur dans user_update_password(). Pas de DN pour {$a->username}';
$string['noemail'] = 'La tentative de vous envoyer un courriel a échoué !';
$string['notcalledfromserver'] = 'Ne doit pas être appelé depuis le serveur web !';
$string['noupdatestobedone'] = 'Aucune mise à jour disponible';
$string['nouserentriestoremove'] = 'Aucun utilisateur à supprimer';
$string['nouserentriestorevive'] = 'Aucun utilisateur à réactiver';
$string['nouserstobeadded'] = 'Aucun donnée utilisateur à ajouter';
$string['ntlmsso_attempting'] = 'Tentative de connexion SSO via NTLM…';
$string['ntlmsso_failed'] = 'La connexion automatique a échoué. Essayez de vous connecter depuis la page de connexion standard.';
$string['ntlmsso_isdisabled'] = 'L\'authentification SSO NTLM est désactivée.';
$string['ntlmsso_unknowntype'] = 'Type ntlmsso inconnu !';
$string['pagedresultsnotsupp'] = 'Résultats LDAP paginés non supportés (soit votre version de PHP ne les permet pas, soit vous avez configuré Moodle avec le protocole LDAP version 2 et Moodle ne peut pas contacter le serveur LDAP pour vérifier si il permet les résultats paginés).';
$string['pagesize'] = 'Assurez-vous que cette valeur est inférieure à la taille limite de l\'ensemble retourné par votre serveur LDAP (le nombre maximal d\'entrées retournée par une requête)';
$string['pagesize_key'] = 'Taille de page';
$string['pluginname'] = 'Serveur LDAP';
$string['pluginnotenabled'] = 'Plugin non activé !';
$string['privacy:metadata'] = 'Le plugin d\'authentification Serveur LDAP n\'enregistre aucune donnée personnelle.';
$string['renamingnotallowed'] = 'Le changement de nom d\'utilisateur n\'est pas permis dans LDAP';
$string['rootdseerror'] = 'Erreur lors de la requête rootDSE pour Active Directory';
$string['start_tls'] = 'Utiliser le service LDAP normal (port 389) avec cryptage TLS';
$string['start_tls_key'] = 'Utiliser TLS';
$string['syncroles'] = 'Synchroniser les rôles système à partir de LDAP';
$string['synctask'] = 'Synchronisation des utilisateurs LDAP';
$string['systemrolemapping'] = 'Correspondance des rôles système';
$string['updatepasserror'] = 'Erreur dans user_update_password(). Code d\'erreur : {$a->errno} ; Texte d\'erreur : {$a->errstring}';
$string['updatepasserrorexpire'] = 'Erreur dans user_update_password() lors de la lecture de la durée d\'échéance de mot de passe. Code d\'erreur : {$a->errno} ; Texte d\'erreur : {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Erreur dans user_update_password() lors de la modification de l\'échéance et/ou des tolérances de connexion. Code d\'erreur : {$a->errno} ; Texte de l\'erreur : {$a->errstring}';
$string['updateremfail'] = 'Erreur de modification de l\'enregistrement LDAP. Code d\'erreur : {$a->errno} ; Texte d\'erreur : {$a->errstring}<br/>Clef ({$a->key}) - ancienne valeur moodle : « {$a->ouvalue} » ; nouvelle valeur : « {$a->nuvalue} »';
$string['updateremfailamb'] = 'Échec de la mise à jour de LDAP sur le champ ambigu {$a->key} ; ancienne valeur moodle : « {$a->ouvalue} » ; nouvelle valeur : « {$a->nuvalue} »';
$string['updateremfailfield'] = 'Échec de modification LDAP avec un champ non existant (« {$a->ldapkey} »). Clef ({$a->key}) - ancienne valeur Moodle : « {$a->ouvalue} », nouvelle valeur : « {$a->nuvalue} »';
$string['updateusernotfound'] = 'Impossible de trouver l\'utilisateur lors de la mise à jour externe. Des détails suivent. Base de recherche : « {$a->userdn} »; filtre de recherche : « (objectClass=*) »; attributs de recherche : {$a->attribs}';
$string['useracctctrlerror'] = 'Erreur lors de la récupération de userAccountControl pour {$a}';
$string['user_activatenotsupportusertype'] = 'La fonction auth: ldap user_activate() ne supporte pas le type d\'utilisateur sélectionné : {$a}';
$string['user_disablenotsupportusertype'] = 'La fonction auth: ldap user_disable() ne supporte pas le type d\'utilisateur sélectionné : {$a}';
$string['userentriestoadd'] = 'Utilisateurs à ajouter : {$a}';
$string['userentriestoremove'] = 'Utilisateurs à supprimer : {$a}';
$string['userentriestorevive'] = 'Utilisateurs à réactiver : {$a}';
$string['userentriestoupdate'] = 'Utilisateurs à mettre à jour : {$a}';
$string['usernotfound'] = 'Utilisateur introuvable dans LDAP';
