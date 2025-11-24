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
 * Strings for component 'enrol_lti', language 'fr', version '4.5'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontent'] = 'Ajouter un contenu';
$string['adddeployment:deploymentid'] = 'ID de déploiement';
$string['adddeployment:deploymentid_help'] = 'Chaque déploiement de l’outil (ce site) sur la plateforme se verra attribué un ID de déploiement unique correspondant à l’enregistrement. L’ID de déploiement doit enregistré avec l’outil (ce site) avant que les lancements à partir du déploiement de l’outil soient autorisés.';
$string['adddeployment:invaliddeploymentiderror'] = 'ID de déploiement non valide. L’ID de déploiement existe déjà pour cet enregistrement de l’app.';
$string['adddeployment:name'] = 'Nom du déploiement';
$string['addtocourse'] = 'Ajouter au cours';
$string['addtogradebook'] = 'Ajouter au carnet de notes';
$string['allowframeembedding'] = 'Remarque : il est recommandé d’activer le réglage « Autoriser l’intégration dans un cadre » dans l’administration de la plateforme, afin que les outils puissent d’afficher dans un cadre plutôt que dans une nouvelle fenêtre.';
$string['authltimustbeenabled'] = 'Remarque : ce plugin nécessite l’activation du plugin d’authentification LTI.';
$string['cartridgeurl'] = 'URL de la cartouche';
$string['cookiesarerequired'] = 'Les cookies sont bloqués par votre navigateur';
$string['cookiesarerequiredinfo'] = 'Cet outil ne peut pas être lancé, car votre navigateur bloque les cookies tiers.<br><br>Pour utiliser cet outil, veuillez modifier les réglages des cookies de votre navigateur ou utiliser un autre navigateur.';
$string['copiedtoclipboard'] = '{$a} copié dans le presse-papier';
$string['copytoclipboard'] = 'Copier dans le presse-papier';
$string['couldnotestablishproxy'] = 'Impossible d’établir un proxy avec le client.';
$string['customproperties'] = 'Propriétés personnalisées';
$string['deeplinkingurl'] = 'URL de liaison profonde';
$string['deletedactivity'] = 'Activité supprimée';
$string['deletedactivityalt'] = 'L’activité partagée par cette instance a été supprimée';
$string['deletedactivitydescription'] = 'L’activité partagée par cette instance a été supprimée. Vous pouvez sélectionner une autre activité à partager en modifiant cette instance, ou, si ce n’est plus nécessaire, vous pouvez simplement supprimer cette instance. La suppression de cette instance retirera toutes les inscriptions d’utilisateurs associées.';
$string['deploymentadd'] = 'Ajouter un déploiement';
$string['deploymentaddnotice'] = 'Déploiement ajouté';
$string['deploymentdelete'] = 'Supprimer déploiement';
$string['deploymentdeleteconfirm'] = 'Attention ! La suppression d’un déploiement aura pour effet la perte d’accès pour tous les utilisateurs qui suivent les liens de ressources liés à ce déploiement de l’outil sur la plateforme. Les services de synchronisation de membres et de notes seront aussi retirés de ces ressources. Voulez-vous vraiment supprimer l’ID de déploiement « {$a} » ?';
$string['deploymentdeletenotice'] = 'Déploiement supprimé';
$string['deploymentid'] = 'ID de déploiement';
$string['deployments'] = 'Déploiements';
$string['deploymentsinfo'] = 'Un ID de déploiement est généré par la plateforme lorsque l’outil est rendu disponible dans un contexte. Cela peut survenir au moment de l’enregistrement, ou plus tard, lorsque l’outil est rendu disponible dans un cours ou une catégorie. L’ID de déploiement doit être saisi ici avant que les lancements depuis ce déploiement soient autorisés.';
$string['details'] = 'Informations détaillées';
$string['editplatformdetails'] = 'Modifier les informations de la plateforme';
$string['endpointltiversionnotice'] = 'Les points de terminaison de l’outil ci-dessous ne sont destinés qu’à la configuration manuelle LTI 1.3. Pour des versions antérieures(1.1/2.0), les informations détaillées des clients peuvent être trouvé sur la page « Publiés comme outils LTI », accessible au moyen de la navigation de cours.';
$string['enrolenddate'] = 'Date de fin';
$string['enrolenddate_help'] = 'Si ce réglage est indiqué, les utilisateurs peuvent accéder seulement jusqu’à cette date.';
$string['enrolenddateerror'] = 'La date de fin d’inscription ne peut pas être antérieure à la date de début.';
$string['enrolisdisabled'] = 'Le plugin « Publier comme outil LTI » est désactivé.';
$string['enrolltiversionincorrect'] = 'La ressource n’est pas configurée pour être utilisée avec d’anciennes versions LTI (versions 1.1/2.0). Veuillez contacter l’utilisateur de cet outil.';
$string['enrolmentfinished'] = 'Inscription échue.';
$string['enrolmentnotstarted'] = 'L’inscription n’a pas commencé.';
$string['enrolperiod'] = 'Durée d’inscription';
$string['enrolperiod_help'] = 'La durée pendant laquelle l’inscription est valide, à compter du moment où l’utilisateur s’inscrit depuis le système distant. Si aucune valeur n’est donnée, la durée est illimitée.';
$string['enrolstartdate'] = 'Date de début';
$string['enrolstartdate_help'] = 'Si ce réglage est indiqué, les utilisateurs peuvent accéder seulement à partir de cette date.';
$string['existingregistrationerror'] = 'Une enregistrement existe déjà pour ce fournisseur et cet ID client.';
$string['failedrequest'] = 'Échec de la requête. Raison : {$a->reason}';
$string['frameembeddingnotenabled'] = 'Pour accéder à l’outil, veuillez cliquer sur le lien ci-dessous.';
$string['gradesync'] = 'Synchronisation des notes';
$string['gradesync_help'] = 'Ce réglage détermine si les notes de l’outil sont envoyées au système distant (client LTI).';
$string['incorrecttoken'] = 'Le jeton est incorrect. Veuillez vérifier l’URL et essayer à nouveau, ou contacter l’administrateur de cet outil.';
$string['invalidexpiredregistrationurl'] = 'URL d’enregistrement non valide ou échue. Veuillez vérifier l’URL et réessayer.';
$string['invalidrequest'] = 'Requête non valide';
$string['invalidtoolconsumer'] = 'Outil client non valide.';
$string['jwksurl'] = 'URL JWKS';
$string['launchdetails'] = 'Détails du lancement';
$string['launchdetails_help'] = 'Une URL de cartouche (aussi appelée URL de configuration) ainsi qu’un secret ou d’une URL de lancement sont requis pour configurer l’outil.';
$string['launchurl'] = 'URL de lancement';
$string['loginurl'] = 'URL d’initiation de connexion';
$string['lti13'] = 'LTI Advantage';
$string['lti13launchdetails'] = 'Infos de lancement';
$string['lti13launchdetails_help'] = 'L’URL de lancement et les propriétés personnalisées ne sont requises que lors de la configuration manuelle d’un lien de ressource dans la plateforme. Si possible, les enseignants devraient favoriser le processus de sélection de contenu (lien profond) pour la création des liens de ressource.';
$string['lti:config'] = 'Configurer les instances « Publier comme outil LTI »';
$string['lti:unenrol'] = 'Désinscrire du cours les utilisateurs';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = 'Un problème est survenu lors de la récupération de la configuration OpenID à partir de la plateforme. Le résultat n’était pas en JSON valide. Cela peut être dû à une configuration d’hôtes bloqués. Veuillez vous assurer que votre site est configuré pour se connecter au domaine de la plateforme et essayez avec une nouvelle URL d’enregistrement.';
$string['ltiadvlauncherror:invaliddeployment'] = 'Données de lancement ou configuration de l’outil non valide. Le déploiement est introuvable (ID de déploiement : {$a}).';
$string['ltiadvlauncherror:invalidid'] = 'Données de lancement non valides. La ressource « {$a} » n’est pas disponible ou n’existe pas.';
$string['ltiadvlauncherror:invalidregistration'] = 'Données de lancement ou configuration de l’outil non valide. La plateforme d’enregistrement est introuvable (fournisseur : {$a->platform}, ID client : {$a->clientid}).';
$string['ltiadvlauncherror:missingid'] = 'Données de lancement non valides. Le champ personnalisé « id » est requis pour lancer une activité ou une ressource via LTI Advantage.';
$string['ltilegacy'] = 'Legacy LTI (1.1/2.0)';
$string['ltilegacydeprecatednotice'] = 'Les outils de Legacy LTI (1.1/2.0) sont obsolètes. Le contenu doit désormais être partagé avec LTI Advantage.';
$string['ltiversion'] = 'Version LTI';
$string['ltiversion_help'] = 'La version de LTI qui sera utilisée pour accéder au contenu publié.

LTI Advantage permet de publier des contenus vers des plateformes pré-enregistrées sans nécessiter de modification sur la plateforme lorsque de nouveaux contenus sont publiés. Le contrat de sécurité est conclus entre la plateforme et l’outil.

Les anciennes versions de LTI (1.1 et 2.0) requièrent qu’un nouvel enregistrement d’outil soit créé sur le client pour chaque nouveau contenu publié, parce que chaque contenu publié a son propre contrat de sécurité avec le site client et doit être configuré au cas par cas.';
$string['managedeployments'] = 'Gérer les déploiements';
$string['maxenrolled'] = 'Nombre maximum d’utilisateurs inscrits';
$string['maxenrolled_help'] = 'Le nombre maximum d’utilisateurs distants pouvant accéder à l’outil. Une valeur nulle permet un nombre illimité d’utilisateurs inscrits.';
$string['maxenrolledreached'] = 'Le nombre maximum d’utilisateurs distants pouvant accéder à l’outil a été atteint.';
$string['membersync'] = 'Synchronisation des utilisateurs';
$string['membersync_help'] = 'Ce réglage détermine si une tâche programmée synchronise les utilisateurs inscrits dans le système distant avec les inscriptions à ce cours, créant si nécessaire un compte pour chaque utilisateur distant, et l’inscrivant ou le désinscrivant au cours.

Si ce réglage est désactivé, un compte sera créé automatiquement pour les utilisateurs distants et ce compte sera inscrit au cours au moment où ils accèdent à l’outil.';
$string['membersyncmode'] = 'Mode de synchronisation des utilisateurs';
$string['membersyncmode_help'] = 'Ce réglage détermine si les utilisateurs distants doivent être inscrits et/ou désinscrits de ce cours.';
$string['membersyncmodeenrolandunenrol'] = 'Inscrire les nouveaux et désinscrire les utilisateurs manquants';
$string['membersyncmodeenrolnew'] = 'Inscrire les nouveaux utilisateurs';
$string['membersyncmodeunenrolmissing'] = 'Désinscrire les utilisateurs manquants';
$string['moodle'] = 'Moodle';
$string['nodeployments'] = 'Aucun déploiement d’outil trouvé';
$string['nopublishedcontent'] = 'Aucune ressource ou activité n’est encore publiée';
$string['noregisteredplatforms'] = 'Aucune plateforme enregistrée';
$string['notoolsprovided'] = 'Aucun outil fourni';
$string['opensslconfiginvalid'] = 'LTI 1.3 requiert la configuration d’un fichier openssl.cnf valide et disponible pour le serveur web. Veuillez contacter l’administrateur du site pour configurer et activer openssl pour ce site.';
$string['opentool'] = 'Ouvrir l’outil';
$string['platformdetails'] = 'Informations sur la plateforme';
$string['platformdetailsinfo'] = 'Une fois que l’outil a été configuré sur la plateforme, les infos détaillées récupérées de la plateforme doivent être indiquées ici pour terminer l’enregistrement.
<ul>
<li>Pour les enregistrements dynamiques, ces infos auront été renseignées automatiquement et aucune action n’est requise.</li>
<li>Pour les enregistrements manuels, ces infos doivent être copiées manuellement depuis la plateforme.</li>
</ul>';
$string['pluginname'] = 'Publier comme outil LTI';
$string['pluginname_desc'] = 'Le plugin « Publier comme outil LTI », en combinaison avec le plugin d’authentification LTI, permet à des utilisateurs externes d’accéder à des cours ou à des activités choisies. Il permet à Moodle de fonctionner comme fournisseur d’outil LTI.';
$string['privacy:metadata:enrol_lti_users'] = 'La liste des utilisateurs inscrits via un fournisseur LTI';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'La date et l’heure du dernier accès au cours de l’utilisateur';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'La dernière note enregistrée pour l’utilisateur';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'La date et l’heure de l’inscription de l’utilisateur';
$string['privacy:metadata:enrol_lti_users:userid'] = 'L’identifiant de l’utilisateur';
$string['provisioningmode'] = 'Mode de provisionnement';
$string['provisioningmode_help'] = 'Ce réglage détermine comment les comptes sont traités au premier lancement. Plusieurs modes sont pris en charge :
<ul>
<li>Nouveaux comptes seulement (automatique) - Des comptes seront créés automatiquement pour les utilisateurs qui lancent depuis la plateforme. Ce réglage est le réglage par défaut pour le premier lancement par les étudiants.</li>
<li>Comptes existants et nouveaux (demande) - L’utilisateur pourra choisir que faire. Il peut décider le lier un compte existant ou de créer une nouveau compte pour lui. C’est l’option la plus flexible et le réglage par défaut pour le premier lancement par les enseignants.</li>
<li>Comptes existants seulement (demande) - L’utilisateur devra lier un compte existant. Il n’aura pas accès aux ressources de l’outil sans le faire.</li>
</ul>';
$string['provisioningmodestudentlaunch'] = 'Mode de provisionnement au premier lancement par un étudiant';
$string['provisioningmodeteacherlaunch'] = 'Mode de provisionnement au premier lancement par un enseignant';
$string['publishedcontent'] = 'Contenu publié';
$string['publishedcontent_help'] = 'Une ressource ou une activité publiée peut être utilisée dans des plateformes enregistrées au moyen du processus de sélection de contenu (lien profond). De plus, un lien de ressource peut être créé manuellement dans la plateforme en utilisant l’URL de lancement et les propriétés personnalisées fournies.';
$string['registeredplatforms'] = 'Plateformes enregistrées';
$string['registeredplatformsltiversionnotice'] = 'Les plateformes listées ci-dessous sont enregistrées pour une communication LTI 1.3. Pour des versions antérieures, l’enregistrement client n’est pas requis.';
$string['registerplatform:accesstokenurl'] = 'URL du jeton d’accès';
$string['registerplatform:accesstokenurl_help'] = 'L’URL vers lequel l’outil enverra les requêtes de jeton d’accès. Sera fournie par la plateforme.';
$string['registerplatform:authrequesturl'] = 'URL de requête d’authentification';
$string['registerplatform:authrequesturl_help'] = 'L’URL vers lequel l’outil enverra les requêtes d’authentification OpenID Connect. Sera fournie par la plateforme.';
$string['registerplatform:clientid'] = 'ID client';
$string['registerplatform:clientid_help'] = 'Une chaîne de caractères utilisée pour identifier l’enregistrement de l’outil sur la plateforme. Sera fourni par la plateforme.';
$string['registerplatform:duplicateregistrationerror'] = 'ID client non valide. Cet ID client est déjà enregistré pour l’ID de plateforme fourni.';
$string['registerplatform:invalidurlerror'] = 'URL non valide. Avez-vous indiqué http:// ou https:// ?';
$string['registerplatform:jwksurl'] = 'URL du jeu de clef public';
$string['registerplatform:jwksurl_help'] = 'L’URL du jeu de clef public ou JWKS, utilisée pour obtenir la clef publique de la plateforme.';
$string['registerplatform:name'] = 'Nom de la plateforme';
$string['registerplatform:name_help'] = 'Un nom bref décrivant la plateforme. Ce terme peut être modifié en tout temps.';
$string['registerplatform:platformid'] = 'ID plateforme (fournisseur)';
$string['registerplatform:platformid_help'] = 'L’URL identifiant la plateforme d’apprentissage tierce. Sera fournie par la plateforme.';
$string['registerplatformadd'] = 'Enregistrer une plateforme';
$string['registerplatformaddnotice'] = 'Enregistrement de plateforme ajouté';
$string['registerplatformdelete'] = 'Supprimer l’enregistrement de la plateforme';
$string['registerplatformdeleteconfirm'] = 'Voulez-vous vraiment supprimer l’enregistrement de la plateforme « {$a} » ? Cette opération retirera aussi tous les déploiements d’outil associés à cet enregistrement.';
$string['registerplatformdeletenotice'] = 'Enregistrement de la plateforme supprimé';
$string['registerplatformedit'] = 'Modifier l’enregistrement';
$string['registerplatformeditnotice'] = 'Enregistrement de la plateforme modifié';
$string['registration'] = 'Enregistrement de l’outil publié';
$string['registrationdeeplinklabel'] = 'Ajouter un contenu de {$a}';
$string['registrationdynamic'] = 'Enregistrement dynamique';
$string['registrationmanual'] = 'Enregistrement manuel';
$string['registrationresourcelinklabel'] = 'Lancer le contenu à partir de {$a}';
$string['registrationstatus'] = 'Statut';
$string['registrationstatusactive'] = 'Actif';
$string['registrationstatuspending'] = 'En suspens';
$string['registrationurl'] = 'URL d’enregistrement';
$string['registrationurl_help'] = 'Si une URL d’enregistrement (aussi appelée URL proxy) est utilisée, l’outil est configuré automatiquement.';
$string['registrationurlinfomessage'] = 'Si la plateforme prend en charge l’enregistrement dynamique, utiliser l’URL d’enregistrement ci-dessous. Pour plus d’informations sur l’enregistrement dynamique, consulter la documentation <a href="{$a}">Publier comme outil LTI</a>.';
$string['remotesystem'] = 'Système distant';
$string['requirecompletion'] = 'Nécessite que le cours ou l’activité soit terminée avant de synchroniser les notes';
$string['returnurlnotset'] = 'URL de retour non défini.';
$string['roleinstructor'] = 'Rôle de l’enseignant';
$string['roleinstructor_help'] = 'Le rôle qui sera attribué dans l’outil à l’enseignant distant.';
$string['rolelearner'] = 'Rôle de l’étudiant';
$string['rolelearner_help'] = 'Le rôle qui sera attribué dans l’outil à l’étudiant distant.';
$string['secret'] = 'Secret';
$string['secret_help'] = 'Une chaîne de caractères partagée avec le système distant (client LTI) pour permettre l’accès à cet outil.';
$string['sharedexternaltools'] = 'Publiés comme outils LTI';
$string['successfulregistration'] = 'Enregistrement réussi';
$string['tasksyncgrades'] = 'Publier comme outil LTI de synchro des notes';
$string['tasksyncmembers'] = 'Publier comme outil LTI de synchro des utilisateurs';
$string['tooldetails'] = 'Infos de l’outil';
$string['toolsprovided'] = 'Outils publiés';
$string['toolsprovided_help'] = 'Un outil peut être partagé avec un autre site en fournissant soit les informations de lancement, soit une URL d’enregistrement.';
$string['tooltobeprovided'] = 'Outils à publier';
$string['toolurl'] = 'URL de l’outil';
$string['userdefaultvalues'] = 'Valeurs utilisateur par défaut';
$string['viewplatformdetails'] = 'Consulter les infos de l’outil';
$string['viewtoolendpoints'] = 'Consulter les points de terminaison de l’outil';
