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
 * Strings for component 'lti', language 'fr', version '4.1'.
 *
 * @package     lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Accepter';
$string['accept_grades'] = 'Accepter les notes de l’outil';
$string['accept_grades_admin'] = 'Accepter les notes de l’outil';
$string['accept_grades_admin_help'] = 'Indiquer si le fournisseur de l’outil peut ajouter, mettre à jour, lire et effacer les notes associées à des instances de ce type d’outil.

Certains fournisseurs d’outil permettent le transfert des notes vers Moodle, sur la base d’actions effectuées dans l’outil, créant ainsi une expérience utilisateur mieux intégrée.';
$string['accept_grades_help'] = 'Indique si le fournisseur de l’outil peut ajouter, mettre à jour, lire et effacer les notes associées à cette instance de l’outil externe

Certains fournisseurs d’outil supportent le transfert des notes vers Moodle, sur la base d’actions effectuées dans l’outil, créant ainsi une expérience utilisateur mieux intégrée.

Ce réglage peut être court-circuité dans la configuration de l’outil.';
$string['accepted'] = 'Accepté';
$string['action'] = 'Action';
$string['activate'] = 'Activer';
$string['activatetoadddescription'] = 'Vous devez activer cet outil avant d’ajouter une description.';
$string['active'] = 'Actif';
$string['activity'] = 'Activité';
$string['add_ltiadv'] = 'Ajouter LTI Advantage';
$string['add_ltilegacy'] = 'Ajouter LTI Legacy';
$string['addnewapp'] = 'Activer l’application externe';
$string['addserver'] = 'Ajouter un serveur fiable';
$string['addtype'] = 'Ajouter un outil préconfiguré';
$string['allow'] = 'Autoriser';
$string['allowsetting'] = 'Permettre à l’outil de stocker 8 ko de réglages dans Moodle';
$string['always'] = 'Toujours';
$string['autoaddtype'] = 'Ajouter un outil';
$string['automatic'] = 'Automatique, basé sur l’URL de l’outil';
$string['baseurl'] = 'URL de base/nom enregistré de l’outil';
$string['basiclti'] = 'LTI';
$string['basiclti_base_string'] = 'Chaîne de base OAuth LTI';
$string['basiclti_endpoint'] = 'Point de terminaison LTI';
$string['basiclti_in_new_window'] = 'Votre activité est ouverte dans une nouvelle fenêtre';
$string['basiclti_in_new_window_open'] = 'Ouvrir dans une nouvelle fenêtre';
$string['basiclti_parameters'] = 'Paramètres de lancement LTI';
$string['basicltiactivities'] = 'Activités LTI';
$string['basicltifieldset'] = 'Jeu de champs personnalisés';
$string['basicltiintro'] = 'Description de l’activité';
$string['basicltiname'] = 'Nom de l’activité';
$string['basicltisettings'] = 'Réglages LTI de base';
$string['cachedef_keyset'] = 'Cache l’information de jeu de clefs de l’outil';
$string['cancel'] = 'Annuler';
$string['cancelled'] = 'Annulé';
$string['cannot_delete'] = 'Vous ne pouvez pas supprimer la configuration de cet outil.';
$string['cannot_edit'] = 'Vous ne pouvez pas modifier la configuration de cet outil.';
$string['capabilities'] = 'Fonctionnalités';
$string['capabilities_help'] = 'Veuillez sélectionner les capacités que vous désirez offrir au fournisseur de l’outil. Il est possible de sélectionner plusieurs capacités.';
$string['capabilitiesrequired'] = 'Cet outil nécessite l’accès aux données suivantes afin de s’activer :';
$string['cleanaccesstokens'] = 'Suppression des jetons d’accès échus de l’outil externe';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">Cliquer pour continuer</a>';
$string['clientidadmin'] = 'Identifiant du client';
$string['clientidadmin_help'] = 'L’identifiant client peut être pensé comme un valeur unique utilisée pour identifier un outil. Il est créé automatiquement pour chaque outil utilisant le profil de sécurité introduit dans LTI 1.3 et doit faire partie des informations passées au fournisseur de l’outil, afin qu’il puisse configurer la connexion de son côté.';
$string['comment'] = 'Commentaire';
$string['configpassword'] = 'Mot de passe par défaut de l’outil distant';
$string['configpreferheight'] = 'Hauteur préférée par défaut';
$string['configpreferwidget'] = 'Définir comme lanceur par défaut';
$string['configpreferwidth'] = 'Largeur préférée par défaut';
$string['configresourceurl'] = 'URL de la ressource par défaut';
$string['configtoolurl'] = 'URL de l’outil distant par défaut';
$string['configtypes'] = 'Autoriser les applications LTI';
$string['configured'] = 'Configuré';
$string['confirmtoolactivation'] = 'Voulez-vous vraiment activer cet outil ?';
$string['contentitem'] = 'Message Content-Item';
$string['contentitem_deeplinking'] = 'Supporte les liens profond (Content-Item Message)';
$string['contentitem_deeplinking_help'] = 'Si ce réglage est activé, l’option « Sélectionner un contenu » sera disponible lors de l’ajout d’un outil externe.';
$string['contentitem_help'] = 'Si ce réglage est activé, l’option « Sélectionner un contenu » sera disponible lors de l’ajout d’un outil externe.';
$string['contentitem_multiple_description'] = 'Les éléments suivants seront ajoutés à votre cours :';
$string['contentitem_multiple_graded'] = 'Activité évaluée (note maximale : {$a})';
$string['course_tool_types'] = 'Outils de cours';
$string['courseactivitiesorresources'] = 'Activités ou ressources de cours';
$string['courseid'] = 'Identifiant du cours';
$string['courseinformation'] = 'Information du cours';
$string['courselink'] = 'Aller au cours';
$string['coursemisconf'] = 'Le cours n’est pas configuré correctement';
$string['createdon'] = 'Créé le';
$string['curllibrarymissing'] = 'La bibliothèque PHP cURL est requise pour les outils externes.';
$string['custom'] = 'Paramètres personnalisés';
$string['custom_config'] = 'Utilisation de l’outil de configuration personnalisé';
$string['custom_help'] = 'Les paramètres personnalisés sont des réglages utilisés par le fournisseur de l’outil. Par exemple, un paramètre personnalisé pourrait être utilisé pour afficher une ressource spécifique du fournisseur. Chaque paramètre doit être saisi sur une ligne séparée, dans le format « nom=valeur », par exemple : « chapitre=3 ».

Il n’est pas nécessaire de modifier ce champ, à moins que le fournisseur de l’outil ne le demande.';
$string['custominstr'] = 'Paramètres personnalisés';
$string['debuglaunch'] = 'Option de débogage';
$string['debuglaunchoff'] = 'Lancement normal';
$string['debuglaunchon'] = 'Lancement débogage';
$string['default'] = 'Défaut';
$string['default_launch_container'] = 'Conteneur par défaut';
$string['default_launch_container_help'] = 'Le conteneur de lancement détermine l’affichage de l’outil quand il est lancé depuis le cours. Certains conteneurs fournissent plus d’espace à l’écran, d’autres proposent une meilleure intégration avec l’environnement de Moodle.

* **Défaut** : utilise le conteneur spécifié dans la configuration de l’outil.
* **Intégré** : l’outil est affiché dans la fenêtre Moodle existante, comme les autres activités.
* **Intégré, sans les blocs** : l’outil est affiché dans la fenêtre Moodle existante, uniquement avec la navigation en haut de la page.
* **Nouvelle fenêtre** : l’outil s’ouvre dans une nouvelle fenêtre, occupant la totalité de l’espace disponible. Suivant la configuration du navigateur, il peut s’ouvrir dans un nouvel onglet. Certains navigateurs empêcheront l’ouverture d’une nouvelle fenêtre.';
$string['delegate'] = 'Déléguer à l’enseignant';
$string['delegate_tool'] = 'Comme spécifié dans la définition de Liens profond ou déléguer à l’enseignant';
$string['delete'] = 'Supprimer';
$string['delete_confirmation'] = 'Voulez-vous vraiment supprimer cet outil préconfiguré ?';
$string['deletetype'] = 'Supprimer l’outil préconfiguré';
$string['display_description'] = 'Afficher la description de l’activité lors du lancement';
$string['display_description_help'] = 'Si ce réglage est activé, la description de l’activité (renseignée ci-dessus) sera affichée au-dessus du contenu du fournisseur de l’outil.

La description (pas obligatoire) peut être utilisée pour fournir aux utilisateurs de l’outil des explications supplémentaires.

La description n’est jamais affichée lorsque l’outil est lancé dans une nouvelle fenêtre.';
$string['display_name'] = 'Afficher le nom de l’activité lors du lancement';
$string['display_name_help'] = 'Si ce réglage est activé, le nom de l’activité (spécifié ci-dessus) sera affiché au-dessus du contenu fourni par le fournisseur de l’outil.

Il est possible que ce dernier affiche également le titre. Cette option permet d’éviter d’afficher le titre à double.

Le titre n’est jamais affiché lorsque l’activité est lancée dans une nouvelle fenêtre.';
$string['domain_mismatch'] = 'Le domaine de l’URL de l’outil ne correspond pas à la configuration de l’outil.';
$string['donot'] = 'Ne pas envoyer';
$string['donotaccept'] = 'Ne pas accepter';
$string['donotallow'] = 'Ne pas autoriser';
$string['duplicateregurl'] = 'Cette URL d’enregistrement est déjà utilisée';
$string['dynreg_update_btn_new'] = 'Enregistrer comme nouvel outil externe';
$string['dynreg_update_btn_update'] = 'Mettre à jour';
$string['dynreg_update_name'] = 'Nom de l’outil';
$string['dynreg_update_notools'] = 'Aucun outil dans le contexte.';
$string['dynreg_update_text'] = 'Des outils existants sont liés au domaine d’enregistrement. Voulez-vous vraiment mettre à jour un outil externe déjà installé ou voulez-vous créer un nouvel outil externe ?';
$string['dynreg_update_url'] = 'URL de base';
$string['dynreg_update_version'] = 'Version LTI';
$string['dynreg_update_warn_dupdomain'] = 'Il n’est pas recommandé d’avoir plusieurs outils externes sous le même domaine.';
$string['editdescription'] = 'Cliquer ici pour donner une description à cet outil';
$string['edittype'] = 'Modifier l’outil préconfiguré';
$string['embed'] = 'Intégré';
$string['embed_no_blocks'] = 'Intégré, sans les blocs';
$string['enableemailnotification'] = 'Envoyer des courriels de notification';
$string['enableemailnotification_help'] = 'Si ce réglage est activé, les participants recevront notification par courriel lorsque leur remise est évaluée.';
$string['enterkeyandsecret'] = 'Saisir votre clef client et votre secret partagé';
$string['enterkeyandsecret_help'] = 'Saisir ici la clef client et/ou le secret partagé';
$string['errorbadurl'] = 'L’URL n’est pas une URL d’outil ou de paquet valide.';
$string['errorincorrectconsumerkey'] = 'La clef client est incorrecte.';
$string['errorinvaliddata'] = 'Donnée non valide : {$a}';
$string['errorinvalidmediatype'] = 'Type de média non valide : {$a}';
$string['errorinvalidresponseformat'] = 'Format de réponse Content-Item non valide.';
$string['errormisconfig'] = 'Outil mal configuré. Veuillez demander à l’administrateur de votre Moodle de corriger sa configuration.';
$string['errortooltypenotfound'] = 'Type d’outil LTI non trouvé.';
$string['existing_window'] = 'Fenêtre existante';
$string['extensions'] = 'Services d’extension LTI';
$string['external_tool_type'] = 'Outil préconfiguré';
$string['external_tool_type_help'] = '* **Automatique, basée sur l’URL de l’outil** - La configuration la plus adéquate est sélectionnée automatiquement. Lorsque l’URL de l’outil n’est pas reconnue, les détails de la configuration devront être saisis manuellement.
* **Un type d’outil préconfiguré** - La configuration de l’outil indiqué sera utilisée pour communiquer avec le fournisseur externe de l’outil. Si l’URL de l’outil semble ne pas appartenir au fournisseur de l’outil, un avertissement sera affiché. Il n’est pas toujours nécessaire de saisir une URL d’outil.
* **Configuration personnalisée** - Une clef client et un secret partagé devront peut-être être saisis manuellement. Ces données peuvent être obtenus auprès du fournisseur de l’outil. Les outils ne requièrent pas tous une clef client et un secret partagé. Dans ce cas les champs peuvent être laissés vides.

### Modification d’un outil préconfiguré

Trois icônes sont affichées après la liste des outils préconfigurés.

* **Ajouter** - Crée une configuration de l’outil au niveau du cours. Toutes les instances de l’outil externe de ce cours pourront utiliser cette configuration.
* **Modifier** - Sélectionnez un outil du cours dans le menu déroulant, puis cliquez sur cette icône. La configuration de l’outil pourra alors être modifiée.
* **Supprimer** - Supprimer du cours l’outil sélectionné.';
$string['external_tool_types'] = 'Outils préconfigurés';
$string['failedtoconnect'] = 'Moodle n’a pas pu communiquer avec le système « {$a} »';
$string['failedtocreatetooltype'] = 'Échec de création de nouvel outil. Veuillez contrôler l’URL et essayer encore.';
$string['failedtodeletetoolproxy'] = 'Échec de suppression de l’enregistrement de l’outil. Veuillez aller à la gestion des enregistrements des outils externes et le supprimer manuellement.';
$string['filter_basiclti_configlink'] = 'Configurer vos sites préférés et leur mot de passe';
$string['filter_basiclti_password'] = 'Le mot de passe est obligatoire';
$string['filterconfig'] = 'Administration LTI';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = 'Utiliser une configuration existante pour l’instance configurée incorrectement';
$string['fixnew'] = 'Nouvelle configuration';
$string['fixnewconf'] = 'Définir une nouvelle configuration pour l’instance configurée incorrectement';
$string['fixold'] = 'Utiliser l’existant';
$string['force_ssl'] = 'Forcer SSL';
$string['force_ssl_help'] = 'La sélection de cette option impose l’utilisation de SSL lors de l’appel de ce fournisseur d’outil.

De plus, toutes les requêtes de services web de ce fournisseur d’outil utiliseront SSL.

Avant d’activer cette option, assurez-vous que ce site Moodle et que le fournisseur de l’outil supportent le protocole SSL.';
$string['forced_help'] = 'Ce réglage a été imposé au niveau de la configuration du cours ou du site. Vous ne pouvez pas le modifier depuis cette interface.';
$string['generaltool'] = 'Outil générique';
$string['global_tool_types'] = 'Outils préconfigurés';
$string['grading'] = 'Évaluation';
$string['icon_url'] = 'URL de l’icône';
$string['icon_url_help'] = 'L’URL de l’icône permet de spécifier une icône différente à afficher pour cette activité dans la liste du cours. Au lieu d’afficher l’icône LTI par défaut, on peut spécifier une icône qui représente mieux le type de l’activité.';
$string['id'] = 'ID';
$string['indicator:cognitivedepth'] = 'LTI : aspect cognitif';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l’étudiant dans une activité LTI.';
$string['indicator:cognitivedepthdef'] = 'LTI : aspect cognitif';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint durant cet intervalle d’analyse ce pourcentage d’engagement cognitif offert par les activités « LTI » (niveaux : pas de vue, vue, envoi, vue du feedback).';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'LTI : aspect social';
$string['indicator:socialbreadth_help'] = 'Cet indicateur se base sur l’interaction sociale atteinte par l’étudiant dans une activité LTI.';
$string['indicator:socialbreadthdef'] = 'LTI : aspect social';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint durant cet intervalle d’analyse ce pourcentage d’engagement social offert par les activités « LTI » (niveaux : pas de participation, participant seul, participant avec d’autres).';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['initiatelogin'] = 'URL d’initiation de connexion';
$string['initiatelogin_help'] = 'L’URL de l’outil à laquelle sont envoyées les requêtes d’initiation de connexion. Cette URL est nécessaire avant qu’un message puisse être envoyé correctement à l’outil.';
$string['invalidid'] = 'L’identifiant LTI est incorrect';
$string['jwtsecurity'] = 'LTI 1.3';
$string['keytype'] = 'Type de clef publique';
$string['keytype_help'] = 'La méthode d’authentification utilisée pour valider l’outil.';
$string['keytype_keyset'] = 'URL jeu de clefs';
$string['keytype_rsa'] = 'Clef RSA';
$string['launch_in_moodle'] = 'Lancer l’outil dans Moodle';
$string['launch_in_popup'] = 'Lancer l’outil dans une fenêtre surgissante';
$string['launch_url'] = 'URL de l’outil';
$string['launch_url_help'] = 'L’URL de l’outil indique l’adresse web de l’outil externe et peut contenir d’autres informations, comme la ressource à afficher. Si vous ne savez pas qu’indiquer comme URL de l’outil, veuillez vous renseigner auprès de son fournisseur.

On peut aussi saisi une URL de paquet, si elle est disponible, et les autres champs du formulaire seront alors remplis automatiquement.

Si vous avez choisi un type d’outil spécifique, il ne sera peut-être pas nécessaire de saisir une URL. Si le lien n’est utilisé que pour lancer l’outil dans le système du fournisseur et n’envoie pas vers une ressource spécifique, ce sera vraisemblablement le cas.';
$string['launchinpopup'] = 'Conteneur de lancement';
$string['launchinpopup_help'] = 'Le conteneur de lancement détermine l’affichage de l’outil quand il est lancé depuis le cours. Certains conteneurs fournissent plus d’espace à l’écran, d’autres proposent une meilleure intégration avec l’environnement de Moodle.

* **Défaut** : utilise le conteneur spécifié dans la configuration de l’outil.
* **Intégré** : l’outil est affiché dans la fenêtre Moodle existante, comme les autres activités.
* **Intégré, sans les blocs** : l’outil est affiché dans la fenêtre Moodle existante, uniquement avec la navigation en haut de la page.
* **Nouvelle fenêtre** : l’outil s’ouvre dans une nouvelle fenêtre, occupant la totalité de l’espace disponible. Suivant la configuration du navigateur, il peut s’ouvrir dans un nouvel onglet. Certains navigateurs empêcheront l’ouverture d’une nouvelle fenêtre.';
$string['launchoptions'] = 'Options de lancement';
$string['leaveblank'] = 'Laisser vide si vous n’en avez pas besoin';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'Ajouter des configurations d’outils externes propres à un cours';
$string['lti:addinstance'] = 'Ajouter un outil externe';
$string['lti:addmanualinstance'] = 'Ajouter un outil configuré manuellement';
$string['lti:addpreconfiguredinstance'] = 'Ajouter un outil préconfiguré';
$string['lti:admin'] = 'Devenir un administrateur lorsque l’outil est lancé';
$string['lti:grade'] = 'Voir les notes retournées par un outil externe';
$string['lti:manage'] = 'Être formateur lorsqu’un outil externe est lancé';
$string['lti:requesttooladd'] = 'Demander la configuration d’outils externes pour tout le site';
$string['lti:view'] = 'Lancer des activités d’outils externes';
$string['lti_administration'] = 'Modifier outil préconfiguré';
$string['lti_errormsg'] = 'L’outil a retourné le message d’erreur suivant : « {$a} »';
$string['lti_launch_error'] = 'Une erreur est survenue lors du lancement de l’outil externe :';
$string['lti_launch_error_tool_request'] = '<p>Pour demander à un administrateur de terminer la configuration de cet outil, cliquez <a href="{$a->admin_request_url}" target="_top">ici</a>.</p>';
$string['lti_launch_error_unsigned_help'] = '<p>Cette erreur est vraisemblablement le résultat du manque de la clef client et du secret partagé pour ce fournisseur d’outil.</p>
<p>Si vous êtes en possession de la clef client et du secret partagé, veuillez les saisir lors de la mise en place de l’instance de l’outil externe (assurez-vous que les réglages avancés sont affichés).</p>
<p>Ou alors, vous pouvez <a href="{$a->course_tool_editor}">créer une configuration</a> du fournisseur d’outil au niveau du cours.</p>';
$string['lti_tool_request_added'] = 'La demande de configuration a été envoyée correctement. Vous pouvez contacter un administrateur pour terminer la configuration de l’outil.';
$string['lti_tool_request_existing'] = 'Une demande de configuration a déjà été envoyée pour cet outil.';
$string['ltisettings'] = 'Réglages LTI';
$string['ltiunknownserviceapicall'] = 'API de service LTI inconnue appelée';
$string['ltiversion'] = 'Version LTI';
$string['ltiversion_help'] = 'La version de LTI utilisée pour signer les messages et les requêtes de service : LTI 1.0/1.1 et LTI 2.0 utilisent le profil de sécurité OAuth 1.0A ; LTI 1.3.0 utilise JWT.';
$string['main_admin'] = 'Aide générale';
$string['main_admin_help'] = 'Les outils externes permettent aux utilisateurs de Moodle d’interagir de manière transparente avec des ressources d’apprentissage distantes. Au moyen d’un protocole de lancement spécial, l’outil externe aura accès à des informations sur l’utilisateur qui lance l’outil, par exemple le nom de l’institution, l’identifiant du cours, l’identifiant de l’utilisateur et d’autres informations comme le nom d’utilisateur ou son adresse de courriel.

Les types d’outils mentionnés sur cette page sont classés en trois catégories :

* **Actif** - L’outil a été approuvé et configuré par l’administrateur. L’outil peut être utilisé dans tous les cours de ce Moodle. Si une clef client et un secret partagé sont renseignés, une liaison sécurisée est établie entre ce Moodle et l’outil externe, fournissant un canal de communication sûr.
* **En attente** - L’outil a été installé au moyen d’un paquetage, mais n’a pas été configuré par un administrateur. Les enseignants peuvent utiliser ces outils s’ils disposent d’une clef client et d’un secret partagé, ou si ces éléments ne sont pas requis.
* **Rejeté** - L’outil a été marqué par un administrateur, qui n’a pas l’intention de le mettre à disposition dans ce Moodle. Les enseignants peuvent utiliser ces outils s’ils disposent d’une clef client et d’un secret partagé, ou si ces éléments ne sont pas requis.';
$string['manage_external_tools'] = 'Gérer les outils';
$string['manage_tool_proxies'] = 'Gérer les enregistrements d’outils externes';
$string['manage_tools'] = 'Gérer les outils préconfigurés';
$string['manuallyaddtype'] = 'Il est aussi possible de <a href="{$a}">configurer manuellement un outil</a>.';
$string['miscellaneous'] = 'Divers';
$string['misconfiguredtools'] = 'Des instances d’outil mal configurées ont été détectées';
$string['missingparameterserror'] = 'Cette page est mal configurée : « {$a} »';
$string['module_class_type'] = 'Type de module Moodle';
$string['modulename'] = 'Outil externe';
$string['modulename_help'] = 'Les outils externes permettent aux utilisateurs de Moodle d’interagir avec des ressources d’apprentissage sur d’autres sites web. Par exemple, un outil externe donnera accès à un nouveau type d’activité et ou des moyens d’enseignements d’un éditeur.

Pour configurer une instance d’un outil externe, le fournisseur de l’outil doit supporter la norme LTI (Learning Tools Interoperability). Les fournisseurs supportant LTI proposent des instructions sur la façon de configurer les instances externes de leurs outils. Les types d’outil configurés par les administrateurs du site seront aussi disponibles pour les utilisateurs.

Les outils externes diffèrent des ressources de type URL de plusieurs façons.

* **Contextualisation** - Les outils externes ont accès à des informations sur l’utilisateur qui lancent l’outil, par exemple le nom de l’institution, l’identifiant du cours, l’identifiant de l’utilisateur et d’autres informations comme le nom d’utilisateur ou son adresse de courriel.
* **Intégration élevée** - Les outils externes supportent la lecture, la modification et la suppression des notes associées à l’activité. D’autres points d’intégration sont planifiés pour de prochaines versions.
* **Sécurité** - Les configurations d’outils externes créent une liaison sécurisée entre Moodle et le fournisseur de l’outil, permettant une communication sûre entre eux.';
$string['modulename_link'] = 'mod/lti/view';
$string['modulename_shortcut_link'] = 'mod/lti/view/custom';
$string['modulenameplural'] = 'Outils externes';
$string['modulenamepluralformatted'] = 'Outils externes';
$string['name'] = 'Nom';
$string['never'] = 'Jamais';
$string['new_window'] = 'Nouvelle fenêtre';
$string['no_lti_configured'] = 'Il n’y a pas d’outil externe actif configuré.';
$string['no_lti_pending'] = 'Il n’y a pas d’outil externe en attente.';
$string['no_lti_rejected'] = 'Il n’y a pas d’outil externe rejeté.';
$string['no_lti_tools'] = 'Il n’y a pas d’outil externe configuré.';
$string['no_tp_accepted'] = 'Il n’y a pas d’enregistrement d’outil externe accepté.';
$string['no_tp_cancelled'] = 'Il n’y a pas d’enregistrement d’outil externe annulé.';
$string['no_tp_configured'] = 'Il n’y a pas d’enregistrement d’outil externe configuré.';
$string['no_tp_pending'] = 'Il n’y a pas d’enregistrement d’outil externe en attente.';
$string['no_tp_rejected'] = 'Il n’y a pas d’enregistrement d’outil externe rejeté.';
$string['noattempts'] = 'Aucune tentative n’a été effectuée sur cet instance de l’outil';
$string['noltis'] = 'Il n’y a pas d’instance d’outil externe';
$string['noprofileservice'] = 'Service de profil introuvable';
$string['noservers'] = 'Aucun serveur trouvé';
$string['notypes'] = 'Il n’y a actuellement dans Moodle aucune configuration d’outil LTI. Cliquer sur le lien d’installation ci-dessus pour en ajouter.';
$string['noviewusers'] = 'Aucun utilisateur n’a les permissions requises pour utiliser cet outil';
$string['oauthsecurity'] = 'LTI 1.0/1.1';
$string['opensslconfiginvalid'] = 'LTI 1.3 nécessite la configuration d’un fichier openssl.cnf valide et pouvant être atteint par votre serveur web. Veuillez contacter l’administrateur du site pour configurer et activer openssl pour ce site.';
$string['optionalsettings'] = 'Réglages optionnels';
$string['organization'] = 'Informations sur l’institution';
$string['organizationdescr'] = 'Description de l’institution';
$string['organizationid_default'] = 'ID par défaut de l’institution';
$string['organizationid_default_help'] = 'La valeur à utiliser par défaut pour l’ID de l’institution. L’ID du site identifie cette installation de Moodle.';
$string['organizationidguid'] = 'ID de l’institution';
$string['organizationidguid_help'] = 'Une identifiant unique pour cette instance de Moodle, envoyé à l’outil comme « Platform Instance GUID ».';
$string['organizationurl'] = 'URL de l’institution';
$string['organizationurl_help'] = 'L’URL de base de cette installation de Moodle.

Si ce champ n’est pas renseigné, une valeur basée sur la configuration du site sera utilisée.';
$string['pagesize'] = 'Remises affichées par page';
$string['parameter'] = 'Paramètres d’outil';
$string['parameter_help'] = 'Les paramètres d’outil sont des réglages devant être fournis au proxy de l’outil accepté par le fournisseur de l’outil.';
$string['password'] = 'Secret partagé';
$string['password_admin'] = 'Secret partagé';
$string['password_admin_help'] = 'Le secret partagé est une sorte de mot de passe utilisé pour permettre l’accès à l’outil. Il doit être fourni avec la clef client par le fournisseur de l’outil.

Les outils qui ne requièrent pas de connexion sécurisée de la part de Moodle et ne fournissent pas de services supplémentaires (tel que des rapports d’évaluation) ne requièrent pas toujours de secret partagé.';
$string['password_help'] = 'Pour les outils pré-configurés, il n’est pas nécessaire de saisir un secret partagé, car celui-ci sera fourni au cours du processus de configuration.

Ce champ doit être renseigné lors de la création d’un lien vers un fournisseur d’outil qui n’est pas encore configuré. S’il est prévu que le fournisseur d’outil soit utilisé plusieurs fois dans ce cours, il est judicieux d’ajouter une configuration d’outil dans ce cours.

Le secret partagé est une sorte de mot de passe utilisé pour permettre l’accès à l’outil. Il doit être fourni avec la clef client par le fournisseur de l’outil.

Les outils qui ne requièrent pas de connexion sécurisée de la part de Moodle et ne fournissent pas de services supplémentaires (tel que des rapports d’évaluation) ne requièrent pas toujours de secret partagé.';
$string['pending'] = 'En attente';
$string['pluginadministration'] = 'Administration d’outil externe';
$string['pluginname'] = 'Outil externe';
$string['preferheight'] = 'Hauteur préférée';
$string['preferwidget'] = 'Préférer le gadget de lancement';
$string['preferwidth'] = 'Largeur préférée';
$string['press_to_submit'] = 'Cliquer pour lancer cette activité';
$string['privacy'] = 'Confidentialité';
$string['privacy:metadata:coursefullname'] = 'Le nom complet du cours depuis lequel l’utilisateur accède au contenu LTI';
$string['privacy:metadata:courseid'] = 'L’identifiant du cours depuis lequel l’utilisateur accède au contenu LTI';
$string['privacy:metadata:courseidnumber'] = 'Le numéro du cours depuis lequel l’utilisateur accède au contenu LTI';
$string['privacy:metadata:courseshortname'] = 'Le nom abrégé du cours depuis lequel l’utilisateur accède au contenu LTI';
$string['privacy:metadata:createdby'] = 'L’utilisateur qui a créé l’enregistrement';
$string['privacy:metadata:email'] = 'L’adresse de courriel de l’utilisateur qui accède au contenu LTI';
$string['privacy:metadata:externalpurpose'] = 'Le contenu LTI fournit des informations utilisateur et le contexte vers le fournisseur de l’outil LTI.';
$string['privacy:metadata:firstname'] = 'Le prénom de l’utilisateur qui accède au contenu LTI';
$string['privacy:metadata:fullname'] = 'Le nom complet de l’utilisateur qui accède au contenu LTI';
$string['privacy:metadata:lastname'] = 'Le nom de famille de l’utilisateur qui accède au contenu LTI';
$string['privacy:metadata:lti_submission'] = 'Remise LTI';
$string['privacy:metadata:lti_submission:datesubmitted'] = 'L’horodatage de la remise du travail';
$string['privacy:metadata:lti_submission:dateupdated'] = 'L’horodatage de la modification de la remise du travail';
$string['privacy:metadata:lti_submission:gradepercent'] = 'La note de l’utilisateur en pourcentage';
$string['privacy:metadata:lti_submission:originalgrade'] = 'La note originale de l’utilisateur';
$string['privacy:metadata:lti_submission:userid'] = 'L’identifiant de l’utilisateur qui fait une remise pour l’activité LTI';
$string['privacy:metadata:lti_tool_proxies'] = 'Proxys LTI';
$string['privacy:metadata:lti_tool_proxies:name'] = 'Nom du proxy LTI';
$string['privacy:metadata:lti_types'] = 'Types LTI';
$string['privacy:metadata:lti_types:name'] = 'Nom du type LTI';
$string['privacy:metadata:role'] = 'Le rôle dans le cours de l’utilisateur qui accède au contenu LTI';
$string['privacy:metadata:timecreated'] = 'La date et l’heure de création de l’enregistrement';
$string['privacy:metadata:timemodified'] = 'La date et l’heure de modification de l’enregistrement';
$string['privacy:metadata:userid'] = 'L’identifiant de l’utilisateur qui accède au contenu LTI';
$string['privacy:metadata:useridnumber'] = 'Le numéro de l’utilisateur de l’utilisateur qui accède au contenu LTI';
$string['privacy:metadata:username'] = 'Le nom d’utilisateur de l’utilisateur qui accède au contenu LTI';
$string['publickey'] = 'Clef publique';
$string['publickey_help'] = 'La clef publique (en format PEM) fournie par l’outil pour permettre la signature des messages entrant et la vérification des requêtes de service.';
$string['publickeyset'] = 'Jeu de clefs public';
$string['publickeyset_help'] = 'Le jeu de clefs public dans lequel ce site récupérera la clef publique de l’outil pour permettre la vérification de la signature des messages entrants et des requêtes de service.';
$string['quickgrade'] = 'Permettre l’évaluation rapide';
$string['quickgrade_help'] = 'Si ce réglage est activé, plusieurs outils peuvent être évalués sur une seule page. Ajoutez des notes et des commentaires, puis cliquez « Enregistrer mes feedbacks » pour enregistrer toutes les modifications.';
$string['redirect'] = 'Vous allez être redirigé dans quelques secondes. Dans le cas contraire, cliquez sur le bouton.';
$string['redirectionuris'] = 'URIs de redirection';
$string['redirectionuris_help'] = 'Une liste d’URIs (un par ligne) que l’outil utilise lorsqu’il effectue les requêtes d’autorisations. Au moins un URI doit être enregistré avant qu’un message puisse être envoyé correctement à l’outil.';
$string['register'] = 'Enregistrer';
$string['register_warning'] = 'La page d’enregistrement prend trop de temps à ouvrir. Si elle ne s’ouvre pas, veuillez vérifier que l’URL saisie dans la configuration est correcte. Si Moodle utilise https, assurez-vous que l’outil que vous configurez supporte https et que vous avez bien indiqué https dans l’URL.';
$string['registertype'] = 'Configurer l’enregistrement d’un outil externe';
$string['registration_options'] = 'Options d’enregistrement';
$string['registrationname'] = 'Nom du fournisseur de l’outil';
$string['registrationname_help'] = 'Saisir le nom du fournisseur de l’outil en cours d’enregistrement';
$string['registrationurl'] = 'URL d’enregistrement';
$string['registrationurl_help'] = 'L’URL d’enregistrement doit être mise à disposition par le fournisseur de l’outil pour désigner où les demandes d’enregistrement doivent être envoyées.';
$string['reject'] = 'Rejeter';
$string['rejected'] = 'Rejeté';
$string['resource'] = 'Ressource';
$string['resourcekey'] = 'Clef client';
$string['resourcekey_admin'] = 'Clef client';
$string['resourcekey_admin_help'] = 'La clef client est un peu comme un nom d’utilisateur pour accéder à l’outil. Elle peut être utilisée par le fournisseur d’outil pour identifier le site Moodle à partir duquel l’outil est lancé.

La clef client doit être donnée par le fournisseur de l’outil, par un processus automatique ou par un dialogue avec le fournisseur.

Les outils ne nécessitant pas une communication sécurisée depuis Moodle et qui n’offrent pas de services supplémentaires (tel que des rapports d’évaluation) ne requièrent pas toujours de clef client.';
$string['resourcekey_help'] = 'Pour les outils pré-configurés, il n’est pas nécessaire de saisir une clef, car la clef client sera fournie au cours du processus de configuration.

Ce champ doit être renseigné lors de la création d’un lien vers un fournisseur d’outil qui n’est pas encore configuré. S’il est prévu que le fournisseur d’outil soit utilisé plusieurs fois dans ce cours, il est judicieux d’ajouter une configuration d’outil dans ce cours.

La clef client est un peu comme un nom d’utilisateur pour accéder à l’outil. Elle peut être utilisée par le fournisseur d’outil pour identifier le site Moodle à partir duquel l’outil est lancé.

La clef client doit être donnée par le fournisseur de l’outil, par un processus automatique ou par un dialogue avec le fournisseur.

Les outils ne nécessitant pas une communication sécurisée depuis Moodle et qui n’offrent pas de services supplémentaires (tel que des rapports d’évaluation) ne requièrent pas toujours de clef client.';
$string['resourceurl'] = 'URL de la ressource';
$string['return_to_course'] = 'Cliquer <a href="{$a->link}" target="_top">ici</a> pour revenir au cours.';
$string['saveallfeedback'] = 'Enregistrer mes feedbacks';
$string['search:activity'] = 'Outil externe – information sur l’activité';
$string['secure_icon_url'] = 'URL de l’icône sécurisée';
$string['secure_icon_url_help'] = 'Analogue à l’URL de l’icône, mais utilisée lorsque le participant accède à Moodle au moyen du protocole sécurisé SSL. Ce champ permet d’éviter que le navigateur affiche un avertissement sur une image non sécurisée.';
$string['secure_launch_url'] = 'URL de l’outil sécurisé';
$string['secure_launch_url_help'] = 'Analogue à l’URL de l’outil, mais utilisée en lieu et place si une sécurité plus élevée est requise. Moodle utilisera cette URL sécurisée si l’accès à Moodle a lieu via SSL, ou si l’outil est configuré de façon à être toujours lancé via SSL.

Il est aussi possible de définir l’URL standard l’outil avec une adresse https, afin de forcer le lancement via SSL. Dans ce cas, ce champ peut être laissé vide.';
$string['selectcontent'] = 'Sélectionner un contenu';
$string['send'] = 'Envoyer';
$string['services'] = 'Services';
$string['services_help'] = 'Sélectionnez les services que vous désirez offrir au fournisseur de l’outil. Plusieurs services peuvent être sélectionnés.';
$string['setupoptions'] = 'Options de configuration';
$string['share_email'] = 'Partager le courriel de l’utilisateur avec l’outil';
$string['share_email_admin'] = 'Partager le courriel de l’utilisateur avec l’outil';
$string['share_email_admin_help'] = 'Spécifie si l’adresse de courriel de l’utilisateur qui lance l’outil sera partagée avec le fournisseur de l’outil.
Ce fournisseur pourrait avoir besoin de cette adresse afin de distinguer des utilisateurs dont le nom est le même dans l’interface graphique, ou pour leur envoyer des messages en fonction des actions effectuées dans l’outil.';
$string['share_email_help'] = 'Spécifie si l’adresse de courriel de l’utilisateur qui lance l’outil sera partagée avec le fournisseur de l’outil.

Ce fournisseur pourrait avoir besoin de cette adresse afin de distinguer des utilisateurs dont le nom est le même dans l’interface graphique, ou pour leur envoyer des messages en fonction des actions effectuées dans l’outil.

Ce réglage peut être court-circuité dans la configuration de l’outil.';
$string['share_name'] = 'Partager le nom de l’utilisateur avec l’outil';
$string['share_name_admin'] = 'Partager le nom de l’utilisateur avec l’outil';
$string['share_name_admin_help'] = 'Spécifie si le nom complet de l’utilisateur qui lance l’outil sera partagée avec le fournisseur de l’outil.
Ce fournisseur pourrait avoir besoin de ce nom pour afficher des informations pertinentes.';
$string['share_name_help'] = 'Spécifie si le nom complet de l’utilisateur qui lance l’outil sera partagée avec le fournisseur de l’outil.

Ce fournisseur pourrait avoir besoin de ce nom pour afficher des informations pertinentes.

Ce réglage peut être court-circuité dans la configuration de l’outil.';
$string['share_roster'] = 'Permettre à l’outil d’accéder à la liste des participants de ce cours';
$string['share_roster_admin'] = 'L’outil peut accéder à la liste des participants du cours';
$string['share_roster_admin_help'] = 'Indiquez si cet outil peut accéder à la liste des utilisateurs inscrits aux cours à partir desquels cet outil est lancé.';
$string['share_roster_help'] = 'Spécifie si cet outil peut accéder à la liste des utilisateurs inscrits à ce cours.

Ce réglage peut être court-circuité dans la configuration de l’outil.';
$string['show_in_course_activity_chooser'] = 'Afficher dans le sélecteur d’activité et comme outil préconfiguré';
$string['show_in_course_lti1'] = 'Utilisation de la configuration de l’outil';
$string['show_in_course_lti1_help'] = 'Cet outil peut être affiché dans le sélecteur d’activités permettant à un enseignant de l’ajouter à un cours. Il peut aussi être affiché dans le menu déroulant des outils préconfigurés lors de l’ajout d’un outil externe à un cours. Il est aussi possible de ne permettre l’ajout à un cours de l’outil externe que si son URL d’outil exacte est saisie.';
$string['show_in_course_lti2'] = 'Utilisation de la configuration de l’outil';
$string['show_in_course_lti2_help'] = 'Cet outil peut être affiché dans le sélecteur des activités qu’un enseignant peut choisir d’ajouter à un cours, ainsi que dans le menu déroulant des outils préconfigurés lors de l’ajout d’un outil externe à un cours.';
$string['show_in_course_no'] = 'Ne pas afficher. N’utiliser que lorsqu’une URL d’outil correspondante est saisie';
$string['show_in_course_preconfigured'] = 'Afficher comme outil préconfiguré lors de l’ajout comme outil externe';
$string['sitehost'] = 'Nom d’hôte du site';
$string['siteid'] = 'ID du site';
$string['size'] = 'Paramètres de taille';
$string['submission'] = 'Remise';
$string['submissions'] = 'Remises';
$string['submissionsfor'] = 'Travaux remis pour {$a}';
$string['subplugintype_ltiresource'] = 'Ressource de service LTI';
$string['subplugintype_ltiresource_plural'] = 'Ressources de service LTI';
$string['subplugintype_ltiservice'] = 'Service LTI';
$string['subplugintype_ltiservice_plural'] = 'Services LTI';
$string['subplugintype_ltisource'] = 'Source LTI';
$string['subplugintype_ltisource_plural'] = 'Sources LTI';
$string['successfullycreatedtooltype'] = 'Nouvel outil créé !';
$string['successfullyfetchedtoolconfigurationfromcontent'] = 'La configuration de l’outil a été récupérée correctement à partir du contenu sélectionné.';
$string['toggle_debug_data'] = 'Activer/désactiver les données de débogage';
$string['tool_config_not_found'] = 'Configuration de l’outil introuvable avec cette URL';
$string['tool_settings'] = 'Réglages de l’outil';
$string['tooldescription'] = 'Description de l’outil';
$string['tooldescription_help'] = 'La description de l’outil qui sera affichée aux enseignants, dans la liste des activités.

Elle devrait indiquer de quel outil il s’agit, à quoi il sert et toute autre information utile à l’enseignant.';
$string['tooldetailsaccesstokenurl'] = 'URL du jeton d’accès';
$string['tooldetailsauthrequesturl'] = 'URL de requête d’authentification';
$string['tooldetailsclientid'] = 'Identifiant de client';
$string['tooldetailsdeploymentid'] = 'Identifiant de déploiement';
$string['tooldetailsmailtosubject'] = 'Configuration outil LTI';
$string['tooldetailsmodalemail'] = 'Courriel';
$string['tooldetailsmodallink'] = 'Consulter les infos de configuration';
$string['tooldetailsmodaltitle'] = 'Infos de configuration de l’outil';
$string['tooldetailsplatformid'] = 'Identifiant de plateforme';
$string['tooldetailspublickeyseturl'] = 'URL du jeu de clef public';
$string['toolisbeingused'] = 'Cet outil est utilisé {$a} fois';
$string['toolisnotbeingused'] = 'Cet outil n’a pas encore été utilisé';
$string['toolproxy'] = 'Enregistrements d’outil externe';
$string['toolproxy_help'] = 'L’enregistrement d’un outil externe permet aux administrateurs d’un site Moodle de configurer des outils externes via un proxy d’un fournisseur d’outils supportant LTI 2.0. La seule information nécessaire pour initier le processus est une URL d’enregistrement donnée par le fournisseur. Les fonctionnalités et services offerts au fournisseur de l’outil sont choisies lors de la configuration d’un nouvel enregistrement.

Les enregistrements répertoriés sur cette page sont classés en quatre catégories.

* **Configuré** - Ces enregistrements ont été configurés, mais le processus d’enregistrement n’a pas encore été initié.
* **En attente** - Le processus d’enregistrement a été initié, mais ne s’est pas terminé. Ouvrez, puis enregistrez les réglages pour le remettre dans la catégorie « Configuré ».
* **Accepté** - Ces enregistrements ont été approuvés ; les ressources indiquées dans le proxy d’outil apparaîtront sur la page des types d’outil externe, avec un statut initial de « En attente ».
* **Rejeté** - Ces enregistrements ont été rejetés durant le processus d’enregistrement. Ouvrez, puis enregistrez les réglages pour le remettre dans la catégorie « Configuré », afin de pouvoir recommencer le processus d’enregistrement.';
$string['toolproxyregistration'] = 'Enregistrement d’outil externe';
$string['toolregistration'] = 'Enregistrement d’outil externe';
$string['toolsetup'] = 'Configuration de l’outil externe';
$string['tooltypeadded'] = 'Outil préconfiguré ajouté';
$string['tooltypedeleted'] = 'Outil préconfiguré supprimé';
$string['tooltypenotdeleted'] = 'Impossible de supprimer l’outil préconfiguré';
$string['tooltypes'] = 'Outils';
$string['tooltypeupdated'] = 'Outil préconfiguré modifié';
$string['toolurl'] = 'URL de l’outil';
$string['toolurl_contentitemselectionrequest'] = 'URL de sélection de contenu';
$string['toolurl_contentitemselectionrequest_help'] = 'L’URL de sélection de contenu sera utilisée pour ouvrir la page de sélection de contenu du fournisseur de l’outil. Si elle est laissée vide, l’URL de l’outil sera utilisée';
$string['toolurl_help'] = 'L’URL de l’outil est utilisée pour apparier la bonne configuration d’outil avec les différentes URL d’outil. Il n’est pas nécessaire de préfixer l’URL avec http ou https.

De plus, l’URL de base est utilisée comme URL d’outil si cette dernière n’est pas spécifiée dans l’instance de l’outil externe.

Par exemple, une URL de base *outil.fr* pourra correspondre à :

* outil.fr
* outil.fr/quiz
* outil.fr/quiz/quiz.php?id=10
* www.outil.fr/quiz

Une URL de base *www.outil.fr/quiz* pourra correspondre à :

* www.outil.fr/quiz
* outil.fr/quiz
* outil.fr/quiz/take.php?id=10

Une URL de base *quiz.outil.fr* pourra correspondre à :

* quiz.outil.fr
* quiz.outil.fr/take.php?id=10

S’il y a deux configurations d’outils différentes pour le même domaine, la correspondance la plus spécifique est utilisée.

Il est aussi possible d’indiquer une URL de paquet, et les autres informations sur l’outil seront automatiquement renseignées.';
$string['toolurlplaceholder'] = 'URL de l’outil…';
$string['typename'] = 'Nom de l’outil';
$string['typename_help'] = 'Le nom de l’outil est utilisé pour identifier le fournisseur de l’outil dans Moodle. Le nom saisi sera visible pour les enseignants lors de l’ajout d’outils externes dans leurs cours.';
$string['types'] = 'Types';
$string['unabletocreatetooltype'] = 'Impossible de créer l’outil';
$string['unabletofindtooltype'] = 'Impossible de trouver l’outil pour {$a->id}';
$string['unknownstate'] = 'Statut inconnu';
$string['update'] = 'Mise à jour';
$string['useraccountinformation'] = 'Information du compte utilisateur';
$string['userpersonalinformation'] = 'Information personnelle de l’utilisateur';
$string['using_tool_cartridge'] = 'Utilisation d’un paquetage d’outil';
$string['using_tool_configuration'] = 'Avec la configuration de l’outil :';
$string['validurl'] = 'Une URL valide doit commencer par http:// ou https://';
$string['viewsubmissions'] = 'Afficher les remises et l’écran d’évaluation';
