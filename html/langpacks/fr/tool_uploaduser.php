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
 * Strings for component 'tool_uploaduser', language 'fr', version '4.1'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Autoriser les suppressions';
$string['allowrenames'] = 'Autoriser le changement des noms';
$string['allowsuspends'] = 'Permettre la suspension et l’activation de comptes';
$string['assignedsysrole'] = 'Attribuer le rôle système {$a}';
$string['clidefault'] = 'Réglages par défaut :';
$string['clierrorargument'] = 'La valeur de l’argument --{$a->name} n’est pas valide. Valeurs permises : {$a->values}';
$string['clifile'] = 'Chemin d’accès au fichier CSV contenant les données des utilisateurs. Requis.';
$string['clifilenotreadable'] = 'Le fichier {$a} n’existe pas ou n’est pas lisible';
$string['clihelp'] = 'Affiche cette aide.';
$string['climissingargument'] = 'L’argument --{$a} est requis';
$string['clititle'] = 'Outil de dépôt d’utilisateurs en ligne de commande.';
$string['clivalidationerror'] = 'Erreur de validation :';
$string['csvdelimiter'] = 'Séparateur CSV';
$string['defaultvalues'] = 'Valeurs par défaut';
$string['deleteerrors'] = 'Erreurs lors de suppressions';
$string['duplicateemail'] = 'Plusieurs utilisateurs détectés avec l’adresse de courriel {$a}';
$string['encoding'] = 'Encodage';
$string['errormnetadd'] = 'Impossible d’ajouter des utilisateurs distants';
$string['errorprefix'] = 'Erreur :';
$string['errors'] = 'Erreurs';
$string['examplecsv'] = 'Fichier texte exemple';
$string['examplecsv_help'] = 'Pour utiliser le fichier texte exemple, le télécharger, puis l’ouvrir avec un éditeur de texte ou de feuille de calcul. Laisser inchangée la première ligne et modifier les lignes suivantes (enregistrements) en ajoutant vos données utilisateurs, en ajoutant autant de lignes que nécessaire. Enregistrer le fichier comme fichier CSV, puis le déposer ici.

Le fichier texte exemple peut aussi être utilisé pour des tests, puisqu’il est possible de prévisualiser les données utilisateur et de choisir d’annuler l’action avant que les comptes utilisateurs soient créés.';
$string['infoprefix'] = 'Info :';
$string['invalidtheme'] = 'Le thème « {$a} » n’est pas installé et sera ignoré.';
$string['invalidupdatetype'] = 'Cette option ne peut pas être sélectionnée avec le type de dépôt choisi.';
$string['invaliduserdata'] = 'Données non valides détectées pour l’utilisateur {$a}. Nettoyage automatique effectué.';
$string['linex'] = 'Ligne {$a}';
$string['matchemail'] = 'Correspondance sur l’adresse de courriel';
$string['nochanges'] = 'Aucune modification';
$string['notheme'] = 'Aucun thème défini pour cet utilisateur.';
$string['pluginname'] = 'Déposer des comptes utilisateurs';
$string['privacy:metadata'] = 'Le plugin Déposer des comptes utilisateurs n’enregistre aucune donnée personnelle.';
$string['renameerrors'] = 'Erreurs lors du changement de nom';
$string['requiredtemplate'] = 'Requis. Vous pouvez utiliser ici la syntaxe de modèle (%l = nom, %f = prénom, %u = nom d’utilisateur). Voir l’aide pour des informations additionnelles et des exemples.';
$string['rowpreviewnum'] = 'Rangées de prévisualisation';
$string['unassignedsysrole'] = 'Retirer le rôle système {$a}';
$string['uploadpicture_baduserfield'] = 'L’attribut indiqué n’est pas valide. Veuillez essayer à nouveau.';
$string['uploadpicture_cannotmovezip'] = 'Impossible de déplacer le fichier zip vers un dossier temporaire.';
$string['uploadpicture_cannotprocessdir'] = 'Impossible de traiter les fichiers décompressés.';
$string['uploadpicture_cannotsave'] = 'Impossible d’enregistrer l’avatar pour l’utilisateur {$a}. Veuillez vérifier le fichier image original.';
$string['uploadpicture_cannotunzip'] = 'Impossible de décompresser le fichier d’avatars.';
$string['uploadpicture_invalidfilename'] = 'Le nom du fichier image {$a} a des caractères non valides. Il sera ignoré.';
$string['uploadpicture_overwrite'] = 'Écraser les avatars déjà existants ?';
$string['uploadpicture_userfield'] = 'Attribut utilisateur à utiliser pour la correspondance des avatars :';
$string['uploadpicture_usernotfound'] = 'Il n’y a pas d’utilisateur dont l’attribut « {$a->userfield} » a la valeur « {$a->uservalue} ». Il sera ignoré.';
$string['uploadpicture_userskipped'] = 'Utilisateur {$a} ignoré (il possède déjà un avatar).';
$string['uploadpicture_userupdated'] = 'Avatar de l’utilisateur {$a} modifié.';
$string['uploadpictures'] = 'Déposer des avatars';
$string['uploadpictures_help'] = 'Les avatars des utilisateurs peuvent être déposés sous la forme d’un fichier compressé (zip) de fichiers images. Le nom des fichiers images doit être de la forme <em>attribut-choisi.extension</em>. Par exemple, si vous choisissez pour la correspondance des images l’attribut « nom d’utilisateur » et que le nom d’utilisateur de l’utilisateur concerné est « user1234 », le nom de fichier devrait être « user1234.jpg ».';
$string['uploaduser:uploaduserpictures'] = 'Déposer des avatars';
$string['uploadusers'] = 'Importation d’utilisateurs';
$string['uploadusers_help'] = 'Il est possible d’importer manuellement des comptes utilisateurs (et optionnellement inscrits à des cours) à partir d’un fichier texte. Le format de ce fichier doit être le suivant :

* chaque ligne du fichier contient un enregistrement ;
* chaque enregistrement est constitué d’une série de données séparées par le caractère de séparation sélectionné ;
* le premier enregistrement contient la liste des noms des champs définissant le format du reste du fichier ;
* les champs requis sont username, password, firstname, lastname, email.';
$string['uploadusers_link'] = 'admin/tool/uploaduser/index';
$string['uploaduserspreview'] = 'Prévisualisation de la création d’utilisateurs';
$string['uploadusersresult'] = 'Résultats de la création d’utilisateurs';
$string['useraccountupdated'] = 'Utilisateur modifié';
$string['useraccountuptodate'] = 'Utilisateur à jour';
$string['userdeleted'] = 'Utilisateur supprimé';
$string['userrenamed'] = 'Utilisateur renommé';
$string['userscreated'] = 'Utilisateurs créés';
$string['usersdeleted'] = 'Utilisateurs supprimés';
$string['usersrenamed'] = 'Utilisateurs renommés';
$string['usersskipped'] = 'Utilisateurs ignorés';
$string['usersupdated'] = 'Utilisateurs modifiés';
$string['usersweakpassword'] = 'Utilisateurs avec mot de passe faible';
$string['userthemesnotallowed'] = 'Les thèmes d’utilisateur ne sont pas activés ; de tels thèmes inclus dans le fichier d’utilisateurs seront ignorés.';
$string['uubulk'] = 'Sélectionner pour des opérations par lots';
$string['uubulkall'] = 'Tous les utilisateurs';
$string['uubulknew'] = 'Nouveaux utilisateurs';
$string['uubulkupdated'] = 'Utilisateurs mis à jour';
$string['uucsvline'] = 'Ligne CSV';
$string['uulegacy1role'] = '(Anciennement étudiant) typeN=1';
$string['uulegacy2role'] = '(Anciennement enseignant) typeN=2';
$string['uulegacy3role'] = '(Anciennement enseignant non éditeur) typeN=3';
$string['uunoemailduplicates'] = 'Empêcher les doublons des adresses de courriel';
$string['uuoptype'] = 'Mode de création';
$string['uuoptype_addinc'] = 'Tout ajouter, y compris un compteur aux noms d’utilisateurs au besoin';
$string['uuoptype_addnew'] = 'Ajouter seulement les nouveaux, ignorer les utilisateurs existants';
$string['uuoptype_addupdate'] = 'Ajouter les nouveaux et modifier les utilisateurs existants';
$string['uuoptype_update'] = 'Modifier les utilisateurs existants seulement';
$string['uupasswordcron'] = 'Généré dans le cron';
$string['uupasswordnew'] = 'Mot de passe nouvel utilisateur';
$string['uupasswordold'] = 'Mot de passe utilisateur existant';
$string['uustandardusernames'] = 'Standardiser les noms d’utilisateur';
$string['uuupdateall'] = 'Remplacer avec le fichier et les réglages par défaut';
$string['uuupdatefromfile'] = 'Remplacer avec le fichier';
$string['uuupdatemissing'] = 'Remplir les manquants avec le fichier et les réglages par défaut';
$string['uuupdatetype'] = 'Détails de l’utilisateur existant';
$string['uuusernametemplate'] = 'Modèle de nom d’utilisateur';
$string['warningprefix'] = 'Avertissement :';
