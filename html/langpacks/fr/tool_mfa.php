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
 * Strings for component 'tool_mfa', language 'fr', version '4.5'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Poids obtenu';
$string['added'] = 'Ajouté';
$string['alltime'] = 'Tout le temps';
$string['areyousure'] = 'Voulez-vous vraiment supprimer ce facteur ?';
$string['cancellogin'] = 'Annuler la connexion';
$string['combination'] = 'Combinaison';
$string['confirmationreplace'] = 'Vous devrez immédiatement configurer un autre « {$a} ». Assurez-vous que vous êtes prêts à mener à terme le processus de configuration.';
$string['confirmationrevoke'] = 'Vous ne pourrez plus utiliser « {$a} » pour vous connecter à ce site.';
$string['connector'] = 'ET';
$string['created'] = 'Créé';
$string['createdfromip'] = 'Créé à partir de l’adresse IP';
$string['debugmode:heading'] = 'Mode de débogage';
$string['devicename'] = 'Appareil';
$string['editfactor'] = 'Modifier les réglages du facteur {$a}';
$string['email:subject'] = 'Impossible de se connecter à {$a}';
$string['enablefactor'] = 'Activer facteur';
$string['entercode'] = 'Saisir le code';
$string['error:actionnotfound'] = 'Action « {$a} » non prise en charge';
$string['error:couldnotreplace'] = 'Impossible de remplacer ce facteur.';
$string['error:directaccess'] = 'Cette page ne devrait pas être accessible directement';
$string['error:factornotenabled'] = 'Facteur d’authentification multifacteur « {$a} » non activé';
$string['error:factornotfound'] = 'Facteur d’authentification multifacteur « {$a} » introuvable';
$string['error:isguestuser'] = 'Les utilisateurs anonymes ne sont pas autorisés ici.';
$string['error:notenoughfactors'] = 'Impossible de s’authentifier';
$string['error:reauth'] = 'Nous n’avons pas pu confirmer votre identité avec suffisamment de certitude selon la politique de sécurité du site.<br>Ceci est peut-être dû à :<br>1) des étapes verrouillées – patientez quelques minutes et réessayez.<br>2) des étapes échouées – veuillez vérifier les détails de chaque étape.<br>3) des étapes sautées – veuillez recharger cette page ou essayez de vous re-connecter.';
$string['error:revoke'] = 'Impossible de supprimer le facteur';
$string['error:setupfactor'] = 'Impossible de configurer le facteur';
$string['error:support'] = 'Si vous ne pouvez toujours pas vous connecter, ou si vous pensez que ceci est une erreur, veuillez contacter par courriel :';
$string['error:wrongfactorid'] = 'L’ID de facteur « {$a} » est incorrect';
$string['event:failfactor'] = 'Authentification multifacteur échouée en raison de l’échec d’un facteur.';
$string['event:faillockout'] = 'Authentification multifacteur échouée en raison de tentatives trop nombreuses.';
$string['event:failnotenoughfactors'] = 'Authentification multifacteur échouée en raison d’un nombre insuffisant de facteurs satisfaits.';
$string['event:userdeletedfactor'] = 'Facteur supprimé';
$string['event:userfailedmfa'] = 'Authentification multifacteur de l’utilisateur échouée';
$string['event:userpassedmfa'] = 'Vérification passée';
$string['event:userrevokedfactor'] = 'Révocation du facteur';
$string['event:usersetupfactor'] = 'Mise en place du facteur';
$string['factor'] = 'Facteurs';
$string['factorreplace'] = 'Facteur « {$a} » correctement remplacé.';
$string['factorreport'] = 'Rapport tous facteurs';
$string['factorreset'] = 'Votre authentification multifacteur « {$a->factor} » a été réinitialisée par un administrateur du site. Vous devrez peut-être configurer de nouveau ce facteur. {$a->url}';
$string['factorresetall'] = 'Tous vos facteurs d’authentification multifacteur ont été réinitialisés par un administrateur du site. Vous devrez peut-être configurer de nouveau ces facteurs. {$a}';
$string['factorrevoked'] = '« {$a} » correctement supprimé.';
$string['factorsetup'] = '« {$a} » configuré correctement.';
$string['fallback'] = 'Facteur de repli';
$string['fallback_info'] = 'Ce facteur est le facteur utilisé si aucun autre facteur n’est configuré. Il échouera toujours.';
$string['guidance'] = 'Guide d’utilisation authentification multifacteur';
$string['inputrequired'] = 'Saisie utilisateur';
$string['ipatcreation'] = 'Adresse IP lors de la création du facteur';
$string['lastused'] = 'Dernière utilisation';
$string['lastverified'] = 'Dernière vérification';
$string['locked'] = '{$a} (indisponible)';
$string['lockedusersforallfactors'] = 'Utilisateurs verrouillés : tous les facteurs';
$string['lockedusersforfactor'] = 'Utilisateurs verrouillés : {$a}';
$string['lockoutnotification'] = 'Il vous reste {$a} tentatives.';
$string['managefactor'] = 'Gérer le facteur';
$string['mfa'] = 'Authentification multifacteur';
$string['mfa:intro'] = 'Sécuriser votre compte en exigeant une méthode de vérification supplémentaire lors de la connexion.';
$string['mfa:mfaaccess'] = 'Interagir avec l’authentification multifacteur';
$string['mfareports'] = 'Rapports authentification multifacteur';
$string['mfasettings'] = 'Gérer l’authentification multifacteur';
$string['na'] = 'n/a';
$string['needhelp'] = 'Besoin d’aide ?';
$string['nologinusers'] = 'Pas connecté';
$string['nonauthusers'] = 'Authentification multifacteur en attente';
$string['overall'] = 'Tous';
$string['pending'] = 'En attente';
$string['performbulk'] = 'Action par lots';
$string['pluginname'] = 'Authentification multifacteur';
$string['preferences:activefactors'] = 'Facteurs actifs';
$string['preferences:availablefactors'] = 'Facteurs disponibles';
$string['preferences:header'] = 'Préférences de l’authentification multifacteur';
$string['preferenceslink'] = 'Cliquer ici pour aller aux préférences utilisateur.';
$string['privacy:metadata:tool_mfa'] = 'Données avec les facteurs d’authentification multifacteur configurés';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'Adresse IP à partir de laquelle le facteur a été configuré.';
$string['privacy:metadata:tool_mfa:factor'] = 'Type de facteur';
$string['privacy:metadata:tool_mfa:id'] = 'ID de l’enregistrement';
$string['privacy:metadata:tool_mfa:label'] = 'Nom de l’instance du facteur, par exemple appareil ou courriel.';
$string['privacy:metadata:tool_mfa:lastverified'] = 'L’horodatage de la dernière vérification de l’utilisateur avec ce facteur';
$string['privacy:metadata:tool_mfa:secret'] = 'Toute donnée secrète pour le facteur';
$string['privacy:metadata:tool_mfa:timecreated'] = 'L’horodatage de la configuration de l’instance du facteur.';
$string['privacy:metadata:tool_mfa:timemodified'] = 'L’horodatage de la dernière modification du facteur';
$string['privacy:metadata:tool_mfa:userid'] = 'L’ID de l’utilisateur a qui appartient ce facteur';
$string['privacy:metadata:tool_mfa_auth'] = 'La dernière fois qu’une authentification multifacteur a été enregistrée pour un ID utilisateur.';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'L’horodatage de la dernière authentification de l’utilisateur';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'L’utilisateur avec lequel cet horodatage est associé.';
$string['privacy:metadata:tool_mfa_secrets'] = 'Secrets temporaires pour l’authentification utilisateur.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'Le facteur avec lequel ce secret est associé.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'Le code secret de sécurité.';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'L’ID de session avec lequel ce secret est associé.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'L’utilisateur avec lequel ce secret est associé.';
$string['redirecterrordetected'] = 'Redirection non prise en charge détectée ; l’exécution du script s’est terminée. L’erreur de redirection est survenue entre l’authentification multifacteur et {$a}.';
$string['remove'] = 'Supprimer';
$string['replace'] = 'Remplacer';
$string['replacefactor'] = 'Remplacer le facteur';
$string['resetconfirm'] = 'Réinitialiser le facteur utilisateur';
$string['resetfactor'] = 'Réinitialiser les facteurs d’authentification utilisateur';
$string['resetfactorconfirm'] = 'Voulez-vous vraiment réinitialiser ce facteur pour {$a} ?';
$string['resetfactorplaceholder'] = 'Nom d’utilisateur ou courriel';
$string['resetsuccess'] = 'Facteur « {$a->factor} » réinitialisé pour l’utilisateur « {$a->username} ».';
$string['resetsuccessbulk'] = 'Facteur « {$a} » réinitialisé pour les utilisateurs fournis.';
$string['resetuser'] = 'Utilisateur :';
$string['revoke'] = 'Révoquer';
$string['revokefactor'] = 'Supprimer le facteur';
$string['selectfactor'] = 'Sélectionner un facteur à réinitialiser :';
$string['selectperiod'] = 'Sélectionner une période de vérification pour le rapport :';
$string['settings:combinations'] = 'Résumé des bonnes conditions de connexion';
$string['settings:debugmode'] = 'Activer le mode de débogage';
$string['settings:debugmode_help'] = 'Le mode de débogage affichera un bandeau de notification sur les pages d’administration authentification multifacteur, ainsi que sur la page des préférences utilisateur avec les informations sur les facteurs actuellement activés.';
$string['settings:duration'] = 'Durée de validité des secrets';
$string['settings:duration_help'] = 'La durée de validité des secrets générés.';
$string['settings:enabled'] = 'Plugin authentification multifacteur activé';
$string['settings:enablefactor'] = 'Activer le facteur';
$string['settings:enablefactor_help'] = 'Cocher cette case pour permettre d’utiliser le facteur pour l’authentification multifacteur.';
$string['settings:general'] = 'Réglages généraux authentification multifacteur';
$string['settings:guidancecheck'] = 'Utiliser la page d’aide';
$string['settings:guidancecheck_help'] = 'Ajouter un lien vers la page d’aide sur les pages d’authentification multifacteur et sur la page de préférences d’authentification multifacteur.';
$string['settings:guidancefiles'] = 'Fichier de la page de contenu';
$string['settings:guidancefiles_help'] = 'Ajouter ici tous les fichiers à utiliser dans la page d’aide et intégrez-les dans la page avec {{filename}} (chemin résolu) ou {{{filename}}} (lien html) dans l’éditeur';
$string['settings:guidancepage'] = 'Contenu de la page d’aide';
$string['settings:guidancepage_help'] = 'Ce code HTML sera affiché sur la page d’aide. Saisir des noms de fichier de la zone de fichier pour intégrer le fichier dont le chemin résolu est {{filename}} ou comme lien html à l’aide de {{{filename}}}.';
$string['settings:lockout'] = 'Seuil de verrouillage';
$string['settings:lockout_help'] = 'Nombre de tentatives dont dispose un utilisateur pour répondre aux facteurs avant qu’il ne puisse pas se connecter.';
$string['settings:redir_exclusions'] = 'Les URLs qui ne doivent pas rediriger la vérification multifacteur.';
$string['settings:redir_exclusions_help'] = 'Chaque ligne est une URL relative à partir de la racine du site pour laquelle la vérification d’authentification multifacteur ne sera pas redirigée';
$string['settings:weight'] = 'Poids du facteur';
$string['settings:weight_help'] = 'Le poids de ce facteur en cas de réussite. Un utilisateur nécessite au moins 100 points pour se connecter.';
$string['setup'] = 'Paramétrer';
$string['setupfactor'] = 'Paramétrer le facteur';
$string['setupfactorbuttonadditional'] = 'Ajouter un facteur additionnel';
$string['setuprequired'] = 'Réglage utilisateur';
$string['state:fail'] = 'Échec';
$string['state:locked'] = 'Verrouillé';
$string['state:neutral'] = 'Neutre';
$string['state:pass'] = 'Réussite';
$string['state:unknown'] = 'Inconnu';
$string['subplugintype_factor'] = 'Type de facteur';
$string['subplugintype_factor_plural'] = 'Types de facteur';
$string['totalusers'] = 'Total utilisateurs';
$string['totalweight'] = 'Poids total';
$string['userempty'] = 'L’utilisateur ne peut pas être vide.';
$string['userlogs'] = 'Journaux utilisateur';
$string['usernotfound'] = 'Impossible de localiser l’utilisateur.';
$string['usersauthedinperiod'] = 'Connecté';
$string['verification'] = 'Vérification en 2 étapes';
$string['verification_desc'] = 'Pour sécuriser votre compte, nous devons vérifier qu’il s’agit vraiment de vous.';
$string['verificationcode'] = 'Code de vérification';
$string['verificationcode_help'] = 'Le code de vérification fourni par le facteur d’authentification actuel.';
$string['verifyalt'] = 'Essayer un autre moyen de vérification :';
$string['weight'] = 'Poids';
$string['yesremove'] = 'Oui, supprimer';
$string['yesreplace'] = 'Oui, remplacer';
