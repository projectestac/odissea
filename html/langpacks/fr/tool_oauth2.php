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
 * Strings for component 'tool_oauth2', language 'fr', version '3.11'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authconfirm'] = 'Cette action donnera à Moodle un accès permanent à l\'API au moyen du compte authentifié. Ce compte système est destiné à être utilisé pour la gestion des fichiers dont Moodle est le possesseur.';
$string['authconnected'] = 'Le compte système est désormais connecté pour accès hors ligne';
$string['authnotconnected'] = 'Le compte système n\'a pas été connecté pour accès hors ligne';
$string['configured'] = 'Configuré';
$string['configuredstatus'] = 'Configuré';
$string['connectsystemaccount'] = 'Se connecter à un compte système';
$string['createfromtemplate'] = 'Créer un service OAuth 2 à partir d\'un modèle';
$string['createfromtemplatedesc'] = 'Choisir une des modèles de service OAuth 2 pour créer un service OAuth avec une configuration valide pour l\'un des types de services connus. Ceci créera un service OAuth avec tous les points de connexion et paramètres requis pour l\'authentification. Vous devrez cependant saisir encore l\'ID client et le secret pour que le nouveau service puisse être utilisé.';
$string['createnewendpoint'] = 'Créer un point de terminaison pour le fournisseur « {$a} »';
$string['createnewfacebookissuer'] = 'Créer un service Facebook';
$string['createnewgoogleissuer'] = 'Créer un service Google';
$string['createnewissuer'] = 'Créer un service personnalisé';
$string['createnewmicrosoftissuer'] = 'Créer un service Microsoft';
$string['createnewnextcloudissuer'] = 'Créer un service Nextcloud';
$string['createnewservice'] = 'Créer un nouveau service :';
$string['createnewuserfieldmapping'] = 'Créer une correspondance de champ utilisateur pour le fournisseur « {$a} »';
$string['custom_service'] = 'Personnalisé';
$string['deleteconfirm'] = 'Voulez-vous vraiment supprimer le fournisseur d\'identité « {$a} » ? Tous les plugins utilisant ce fournisseur arrêteront de fonctionner.';
$string['deleteendpointconfirm'] = 'Voulez-vous vraiment supprimer le point de terminaison « {$a->endpoint} » du fournisseur d\'identité « {$a} » ?';
$string['deleteuserfieldmappingconfirm'] = 'Voulez-vous vraiment supprimer la correspondance de champ utilisateur pour le fournisseur « {$a} » ?';
$string['discovered'] = 'Découverte de service réussie';
$string['discovered_help'] = 'La découverte de service permet de détecter automatiquement des points de terminaison OAuth 2 à partir de l\'URL de base du service OAuth 2. Il n\'est pas nécessaire que tous les services soient découvrables, mais s\'ils ne le sont pas, le point de terminaison et les informations de correspondance utilisateur devront être saisies manuellement.';
$string['discoverystatus'] = 'Découverte';
$string['editendpoint'] = 'Modifier le point de terminaison {$a->endpoint} du fournisseur d\'identité {$a}';
$string['editendpoints'] = 'Configurer les points de terminaison';
$string['editissuer'] = 'Modifier le fournisseur d\'identité {$a}';
$string['edituserfieldmapping'] = 'Modifier la correspondance de champ utilisateur pour le fournisseur {$a}';
$string['edituserfieldmappings'] = 'Configurer les correspondances de champs utilisateur';
$string['endpointdeleted'] = 'Point de terminaison supprimé';
$string['endpointname'] = 'Nom';
$string['endpointname_help'] = 'Clef utilisée pour rechercher ce point de terminaison. Doit se terminer par « _endpoint ».';
$string['endpointsforissuer'] = 'Points de terminaison du fournisseur {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'URL de ce point de terminaison. Doit utiliser le protocole https://.';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['imsobv2p1_service'] = 'Open Badges';
$string['issueralloweddomains'] = 'Domaines de connexion';
$string['issueralloweddomains_help'] = 'Liste des domaines, séparés par des virgules, pour lesquels les connexions seront restreintes lorsque ce fournisseur est utilisé.';
$string['issuerbaseurl'] = 'URL de base du service';
$string['issuerbaseurl_help'] = 'URL de base utilisée pour accéder au service.';
$string['issuerclientid'] = 'ID client';
$string['issuerclientid_help'] = 'L\'identifiant client OAuth pour cet émetteur.';
$string['issuerclientsecret'] = 'Secret client';
$string['issuerclientsecret_help'] = 'Le secret client OAuth pour cet émetteur.';
$string['issuerdeleted'] = 'Fournisseur d\'identité supprimé';
$string['issuerdisabled'] = 'Fournisseur d\'identité désactivé';
$string['issuerenabled'] = 'Fournisseur d\'identité activé';
$string['issuerimage'] = 'URL du logo';
$string['issuerimage_help'] = 'Une URL d\'image utilisée pour afficher un logo pour ce fournisseur. Peut être affiché sur la page de connexion.';
$string['issuerloginpagename'] = 'Nom affiché sur la page de connexion';
$string['issuerloginpagename_help'] = 'Si renseigné, ce nom sera utilisé sur la page de login au lieu du nom du service ci-dessus.';
$string['issuerloginparams'] = 'Paramètres supplémentaires inclus dans une requête de connexion.';
$string['issuerloginparams_help'] = 'Certains systèmes requièrent des paramètres supplémentaires dans les requêtes de connexion afin de pouvoir lire le profil des utilisateurs.';
$string['issuerloginparamsoffline'] = 'Paramètres additionnels inclus dans une requête de connexion pour accès hors ligne.';
$string['issuerloginparamsoffline_help'] = 'Chaque système OAuth définit une manière différente pour demander un accès hors ligne. Par exemple, Google requiert les paramètres additionnels suivants : « access_type=offline&prompt=consent ». Ces paramètres doivent être dans le format des paramètres de requête d\'URL.';
$string['issuerloginscopes'] = 'Contextes inclus dans une requête de connexion.';
$string['issuerloginscopes_help'] = 'Certains systèmes requièrent des contextes supplémentaires pour que les requêtes de connexion puissent lire le profil de base des utilisateurs. Les contextes standards d\'un système conforme à OpenID Connect sont « openid profile email ».';
$string['issuerloginscopesoffline'] = 'Les contextes inclus dans une requête de connexion pour accès hors ligne.';
$string['issuerloginscopesoffline_help'] = 'Chaque système OAuth définit une manière différente pour demander un accès hors ligne. Par exemple, Microsoft requiert un contexte additionnel « offline_access ».';
$string['issuername'] = 'Nom';
$string['issuername_help'] = 'Nom du fournisseur d\'identité. Peut être affiché sur la page de connexion.';
$string['issuerrequireconfirmation'] = 'Demander une vérification de l\'adresse de courriel';
$string['issuerrequireconfirmation_help'] = 'Requiert que tous les utilisateurs vérifient leur adresse de courriel avant de pouvoir se connecter avec OAuth. Ceci s\'applique aux nouveaux comptes créés durant le processus de connexion ou lorsqu\'un compte Moodle existant est connecté à un compte OAuth via une correspondance d\'adresses de courriel.';
$string['issuers'] = 'Fournisseurs d\'identité';
$string['issuersetup'] = 'Instructions détaillées sur la configuration commune aux services OAuth 2';
$string['issuersetuptype'] = 'Instructions détaillées sur la configuration du fournisseur OAuth 2 {$a}';
$string['issuershowonloginpage'] = 'Afficher sur la page de connexion';
$string['issuershowonloginpage_help'] = 'Si le plugin d\'authentification OAuth 2 est activé, ce fournisseur d\'identité sera mentionné sur la page de connexion pour permettre aux utilisateurs de se connecter via ce fournisseur.';
$string['issuersservicesallow'] = 'Autoriser les services';
$string['issuersservicesnotallow'] = 'Ne pas autoriser les services';
$string['issuerusedforinternal'] = 'Services internes';
$string['issuerusedforlogin'] = 'Connexion';
$string['issuerusein'] = 'Ce service sera utilisé';
$string['issuerusein_help'] = 'Les services OAuth 2 peuvent être utilisés pour certains services internes, sur la page de connexion ou sur les deux, si nécessaire.';
$string['issueruseineverywhere'] = 'Page de connexion et services internes';
$string['issueruseininternalonly'] = 'Services internes uniquement';
$string['issueruseinloginonly'] = 'Page de connexion uniquement';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = 'Afficher sur la page de connexion comme';
$string['loginissuer'] = 'Permettre la connexion';
$string['microsoft_service'] = 'Microsoft';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = 'Non configuré';
$string['notdiscovered'] = 'Échec de la découverte de service';
$string['notloginissuer'] = 'Ne pas permettre la connexion';
$string['pluginname'] = 'Services OAuth 2';
$string['privacy:metadata'] = 'Le plugin Services OAuth 2 n\'enregistre aucune donnée personnelle.';
$string['savechanges'] = 'Enregistrer les modifications';
$string['serviceshelp'] = 'Instructions de configuration du fournisseur de services.';
$string['systemaccountconnected'] = 'Compte système connecté';
$string['systemaccountconnected_help'] = 'Les comptes système sont utilisés pour fournir aux plugins des fonctionnalités avancées. Ils ne sont pas seulement requis pour les fonctionnalités de connexion. Certains plugins utilisant le service OAuth fonctionneront de manière réduite si le compte système n\'est pas connecté. Par exemple, certains dépôts ne peuvent pas gérer les liens contrôlés sans un compte système pour effectuer les opérations de fichier.';
$string['systemaccountnotconnected'] = 'Compte système non connecté';
$string['systemauthstatus'] = 'Compte système connecté';
$string['usebasicauth'] = 'Authentifier les requêtes de jeton au moyen des entêtes HTTP';
$string['usebasicauth_help'] = 'Utiliser le schéma d\'authentification HTTP Basic lors de l\'envoi de l\'ID client et du mot de passe lors des requêtes d\'actualisation de jeton. Ce réglage est recommandé par le standard OAuth 2, mais n\'est pas disponible avec certains fournisseurs.';
$string['userfieldexternalfield'] = 'Nom du champ externe';
$string['userfieldexternalfield_error'] = 'Ce champ ne peut pas contenir du code HTML.';
$string['userfieldexternalfield_help'] = 'Nom du champ fourni par le système externe OAuth.';
$string['userfieldinternalfield'] = 'Nom du champ interne';
$string['userfieldinternalfield_help'] = 'Nom du champ utilisateur Moodle qui doit être mis en correspondance avec le champ externe.';
$string['userfieldmappingdeleted'] = 'Correspondance de champ utilisateur supprimée';
$string['userfieldmappingsforissuer'] = 'Correspondances de champs utilisateur pour le fournisseur {$a}';
