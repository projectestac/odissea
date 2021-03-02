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
 * Strings for component 'repository', language 'fr', version '3.8'.
 *
 * @package     repository
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessiblefilepicker'] = 'Choix de fichiers accessible';
$string['activaterep'] = 'Activer les dépôts de documents';
$string['activerepository'] = 'Plugins de dépôt disponibles';
$string['activitybackup'] = 'Sauvegarde d\'activité';
$string['add'] = 'Ajouter';
$string['addfile'] = 'Ajouter…';
$string['addfiletext'] = 'Ajouter un fichier';
$string['addplugin'] = 'Ajouter un plugin de dépôt';
$string['allowexternallinks'] = 'Permettre les liens externes';
$string['areacategoryintro'] = 'Descriptif de catégorie';
$string['areacourseintro'] = 'Descriptif du cours';
$string['areacourseoverviewfiles'] = 'Image de cours';
$string['areamainfile'] = 'Fichier principal';
$string['arearoot'] = 'Système';
$string['areauserbackup'] = 'Sauvegarde utilisateur';
$string['areauserdraft'] = 'Brouilons';
$string['areauserpersonal'] = 'Fichiers personnels';
$string['areauserprofile'] = 'Profil';
$string['attachedfiles'] = 'Fichiers joints';
$string['attachment'] = 'Annexe';
$string['author'] = 'Auteur';
$string['automatedbackup'] = 'Sauvegardes automatiques';
$string['back'] = 'Retour';
$string['backtodraftfiles'] = 'Retour à la gestion des brouillons';
$string['cachecleared'] = 'Les fichiers en cache ont été supprimés';
$string['cacheexpire'] = 'Échéance du cache';
$string['cannotaccessparentwin'] = 'Lorsque HTTPS est utilisé, le dépôt n\'est pas actualisé automatiquement. Il est nécessaire de retourner au sélecteur de fichiers et de sélectionner de nouveau le dépôt.';
$string['cannotdelete'] = 'Impossible de supprimer ce fichier';
$string['cannotdownload'] = 'Impossible de télécharger ce fichier';
$string['cannotdownloaddir'] = 'Impossible de télécharger ce dossier';
$string['cannotinitplugin'] = 'Échec de l\'initialisation du plugin';
$string['cannotunzipcontentunreadable'] = 'Impossible de décompresser le fichier, car son contenu ne peut pas être lu.';
$string['cannotunzipextractfileerror'] = 'Impossible de décompresser cette archive, car un ou plusieurs de ses fichiers sont ne peuvent pas être lus.';
$string['cannotunzipquotaexceeded'] = 'Impossible de décompresser le fichier, car la taille maximale de la zone de brouillon sera dépassée.';
$string['choosealink'] = 'Choisir un lien…';
$string['chooselicense'] = 'Choisir une licence';
$string['cleancache'] = 'Nettoyer les fichiers en cache';
$string['close'] = 'Fermer';
$string['commonrepositorysettings'] = 'Réglages communs des dépôts';
$string['configallowexternallinks'] = 'Cette option permet à tous les utilisateurs de choisir si les médias externes seront copiés dans Moodle ou non. Si l\'option est désactivée, le média sera toujours copié dans Moodle (c\'est habituellement le mieux pour l\'intégrité des données et la sécurité). Dans le cas contraire, les utilisateurs pourront choisir à chaque fois qu\'ils ajouteront un média.';
$string['configcacheexpire'] = 'Durée (en secondes) pendant laquelle les listes de fichiers sont mises localement en cache lors de la consultation de dépôts externes.';
$string['configgetfiletimeout'] = 'Temps maximal de téléchargement de fichiers externes dans Moodle (en secondes).';
$string['configsaved'] = 'Configuration enregistrée !';
$string['configsyncfiletimeout'] = 'Temps maximal de synchronisation des tailles de fichiers externes (en secondes).';
$string['configsyncimagetimeout'] = 'Temps maximal de téléchargement de fichiers images de dépôts externes durant la synchronisation (en secondes).';
$string['confirmdelete'] = 'Voulez-vous vraiment supprimer le dépôt {$a} ? Si vous sélectionnez l\'option « Continuer et télécharger », les fichiers externes référencés seront téléchargés vers Moodle, mais cela pourra prendre une très longue durée.';
$string['confirmdeletefile'] = 'Voulez-vous vraiment supprimer ce fichier ?';
$string['confirmdeletefilewithhref'] = 'Voulez-vous vraiment supprimer ce fichier ? Il y a {$a} alias qui pointe(nt) vers ce fichier. Si vous continuez, ce ou ces alias seront convertis en copies du fichier.';
$string['confirmdeletefolder'] = 'Voulez-vous vraiment supprimer ce dossier ? Tous les fichiers et sous-dossiers qu\'il contient seront également supprimés.';
$string['confirmremove'] = 'Voulez-vous vraiment supprimer le plugin de dépôt {$a}, ses réglages et <strong>toutes ses instances</strong> ? Si vous sélectionnez l\'option « Continuer et télécharger », les fichiers externes référencés seront téléchargés vers Moodle, mais cela pourra prendre une très longue durée.';
$string['confirmrenamefile'] = 'Voulez-vous vraiment renommer/déplacer ce fichier ? Il y a {$a} alias qui pointe(nt) vers ce fichier. Si vous continuez, ce ou ces alias seront convertis en copies du fichier.';
$string['confirmrenamefolder'] = 'Voulez-vous vraiment renommer/déplacer ce dossier ? Tous les alias qui pointent vers des fichiers de ce dossier seront convertis en copies.';
$string['continueuninstall'] = 'Continuer';
$string['continueuninstallanddownload'] = 'Continuer et télécharger';
$string['copying'] = 'Copie en cours';
$string['coursebackup'] = 'Sauvegardes de cours';
$string['create'] = 'Créer';
$string['createfolder'] = 'Créer un dossier';
$string['createfolderfail'] = 'Échec de la création du dossier';
$string['createfoldersuccess'] = 'Dossier créé correctement';
$string['createinstance'] = 'Créer une instance de dépôt';
$string['createrepository'] = 'Créer une instance de dépôt';
$string['createxxinstance'] = 'Créer une instance de dépôt « {$a} »';
$string['date'] = 'Date';
$string['datecreated'] = 'Créé';
$string['deleted'] = 'Dépôt supprimé';
$string['deleterepository'] = 'Supprimer ce dépôt';
$string['detailview'] = 'Afficher les détails';
$string['dimensions'] = 'Dimensions';
$string['disabled'] = 'Désactivé';
$string['displayasdetails'] = 'Afficher les fichiers de manière détaillée';
$string['displayasicons'] = 'Afficher les fichiers sous forme d\'icônes';
$string['displayastree'] = 'Afficher sous forme d\'arborescence';
$string['displaydetails'] = 'Afficher le dossier avec le détail des fichiers';
$string['displayicons'] = 'Afficher le dossier avec les icônes de fichiers';
$string['displaytree'] = 'Afficher le dossier sous la forme d\'arbre de fichiers';
$string['download'] = 'Télécharger';
$string['downloadallfiles'] = 'Télécharger tous les fichiers';
$string['downloadfolder'] = 'Tout télécharger';
$string['downloadsucc'] = 'Le fichier a été téléchargé correctement';
$string['draftareanofiles'] = 'Téléchargement impossible, car aucun fichier n\'est joint';
$string['editrepositoryinstance'] = 'Modifier l\'instance de dépôt';
$string['emptylist'] = 'Liste vide';
$string['emptytype'] = 'Impossible de créer le type de dépôt : le nom du type est vide';
$string['enablecourseinstances'] = 'Permettre aux utilisateurs d\'ajouter un dépôt dans les cours';
$string['enableuserinstances'] = 'Permettre aux utilisateurs d\'ajouter un dépôt dans leur espace personnel';
$string['enter'] = 'Entrée';
$string['entername'] = 'Veuillez saisir le nom du dossier';
$string['enternewname'] = 'Veuillez saisir le nouveau nom du fichier';
$string['error'] = 'Une erreur inconnue est survenue !';
$string['errordoublereference'] = 'Impossible d\'écraser un fichier par un alias/raccourci, car des alias/raccourcis existent déjà pour ce fichier.';
$string['errornotyourfile'] = 'Vous ne pouvez pas sélectionner que les fichiers que vous avez ajoutés.';
$string['errorpostmaxsize'] = 'Le fichier que vous essayez de déposer est trop gros pour être traité par le serveur.';
$string['erroruniquename'] = 'Le nom de l\'instance de dépôt doit être unique';
$string['errorwhilecommunicatingwith'] = 'Erreur de communication avec le dépôt « {$a} ».';
$string['errorwhiledownload'] = 'Une erreur est survenue lors du téléchargement du fichier {$a}';
$string['existingrepository'] = 'Ce dépôt existe déjà';
$string['federatedsearch'] = 'Recherche fédérée';
$string['fileexists'] = 'Un fichier portant ce nom existe déjà. Veuillez choisir un autre nom';
$string['fileexistsdialog_editor'] = 'Un fichier de ce nom a déjà été joint au texte que vous modifiez.';
$string['fileexistsdialog_filemanager'] = 'Un fichier de ce nom a déjà été joint';
$string['fileexistsdialogheader'] = 'Le fichier existe';
$string['filename'] = 'Nom de fichier';
$string['filenotnull'] = 'Vous devez choisir un fichier à déposer.';
$string['filepicker'] = 'Sélecteur de fichiers';
$string['filesaved'] = 'Le fichier a été enregistré';
$string['filesizenull'] = 'La taille du fichier ne peut pas être déterminée';
$string['folderexists'] = 'Nom de dossier déjà utilisé. Veuillez utiliser un autre nom';
$string['foldernotfound'] = 'Dossier introuvable';
$string['folderrecurse'] = 'Un dossier ne peut pas être déplacé vers un de ses propres sous-dossiers';
$string['getfile'] = 'Sélectionner ce fichier';
$string['getfiletimeout'] = 'Temps maximal d\'obtention de fichier';
$string['help'] = 'Aide';
$string['iconview'] = 'Icônes';
$string['imagesize'] = '{$a->width} x {$a->height} px';
$string['instance'] = 'Instance';
$string['instancedeleted'] = 'Instance supprimée';
$string['instances'] = 'Instances de dépôt';
$string['instancesforcourses'] = '{$a} instance(s) commune(s) de cours';
$string['instancesforsite'] = '{$a} instance(s) commune(s) de site';
$string['instancesforusers'] = '{$a} instance(s) utilisateur privée(s)';
$string['invalidfiletype'] = 'Le type de fichier {$a} ne peut pas être accepté.';
$string['invalidjson'] = 'Chaîne JSON non valide';
$string['invalidparams'] = 'Paramètres non valides';
$string['invalidplugin'] = 'Plugin de dépôt {$a} non valide';
$string['invalidrepositoryid'] = 'Identifiant de dépôt non valide';
$string['isactive'] = 'Actif ?';
$string['keyword'] = 'Mot clef';
$string['lastmodified'] = 'Dernière modification';
$string['license'] = 'Licence';
$string['linkexternal'] = 'Lien externe';
$string['listview'] = 'Afficher en liste';
$string['loading'] = 'Chargement…';
$string['login'] = 'Se connecter à votre compte';
$string['logintoaccount'] = 'Connexion à votre compte {$a}';
$string['logout'] = 'Déconnexion';
$string['lostsource'] = 'Erreur. La source est manquante. {$a}';
$string['makefilecontrolledlink'] = 'Créer un lien à accès contrôlé pour le fichier';
$string['makefileinternal'] = 'Faire une copie du fichier';
$string['makefilelink'] = 'Lier directement le fichier';
$string['makefilereference'] = 'Créer un alias du fichier';
$string['manage'] = 'Gérer les dépôts';
$string['manageinstances'] = 'Gérer les instances';
$string['manageurl'] = 'Gestion';
$string['manageuserrepository'] = 'Gérer le dépôt personnel';
$string['missingsourcekey'] = 'La clef source est manquante. Cette clef doit être fournie pour récupérer le fichier.';
$string['moving'] = 'Déplacement';
$string['name'] = 'Nom';
$string['newfolder'] = 'Nouveau dossier';
$string['newfoldername'] = 'Nom du dossier';
$string['noenter'] = 'Pas de saisie';
$string['nofilesattached'] = 'Aucun fichier joint';
$string['nofilesavailable'] = 'Aucun fichier disponible';
$string['nomorefiles'] = 'Il n\'est pas permis de joindre plus de fichiers';
$string['nopathselected'] = 'Aucun chemin de destination sélectionné (double-cliquer pour sélectionner)';
$string['nopermissiontoaccess'] = 'Pas de permission requise pour accéder à ce dépôt.';
$string['norepositoriesavailable'] = 'Désolé, aucun de vos dépôts actuels ne peut retourner de fichiers dans le format requis.';
$string['norepositoriesexternalavailable'] = 'Désolé, aucun de vos dépôts actuels ne peut retourner de fichiers externes.';
$string['noresult'] = 'Aucun résultat de recherche';
$string['notyourinstances'] = 'Vous ne pouvez pas voir ni modifier les instances de dépôts d\'un autre utilisateur';
$string['off'] = 'Activé, mais caché';
$string['on'] = 'Activé et visible';
$string['openpicker'] = 'Choisir un fichier…';
$string['operation'] = 'Opération';
$string['original'] = 'Original';
$string['overwrite'] = 'Écraser';
$string['overwriteall'] = 'Tout écraser';
$string['path'] = 'Chemin';
$string['plugin'] = 'Plugins de dépôt';
$string['pluginerror'] = 'Erreurs dans le plugin de dépôt.';
$string['pluginname'] = 'Nom du plugin de dépôt';
$string['pluginnamehelp'] = 'Si ce champ n\'est pas renseigné, le nom par défaut sera utilisé.';
$string['popup'] = 'Cliquez « Connexion » pour vous connecter';
$string['popupblockeddownload'] = 'La fenêtre de téléchargement a été bloquée. Veuillez autoriser les fenêtres surgissantes et essayer à nouveau.';
$string['preview'] = 'Prévisualiser';
$string['privacy:metadata:repository'] = 'Le composant Dépôt enregistre les types de dépôts dans le sous-système central.';
$string['privacy:metadata:repository_instances'] = 'Le composant Plugins de dépôt enregistre les données des instances de dépôt utilisateur dans le sous-système central.';
$string['privacy:metadata:repository_instances:name'] = 'Le nom personnalisé de l\'instance de dépôt.';
$string['privacy:metadata:repository_instances:password'] = 'Le mot de passe optionnel configuré pour l\'instance de dépôt.';
$string['privacy:metadata:repository_instances:timecreated'] = 'La date et l\'heure de la création de l\'instance de dépôt.';
$string['privacy:metadata:repository_instances:timemodified'] = 'La date et l\'heure de la modification de l\'instance de dépôt.';
$string['privacy:metadata:repository_instances:typeid'] = 'L\'identifiant de l\'instance de dépôt.';
$string['privacy:metadata:repository_instances:userid'] = 'L\'identifiant de l\'utilisateur qui possède l\'instance de dépôt.';
$string['privacy:metadata:repository_instances:username'] = 'Le nom d\'utilisateur optionnel configuré pour cette instance de dépôt.';
$string['privatefilesof'] = 'Fichiers personnels {$a}';
$string['readonlyinstance'] = 'Vous ne pouvez pas modifier ni supprimer une instance en lecture seule';
$string['referencesexist'] = 'Ce fichier est utilisé comme source par {$a} alias.';
$string['referenceslist'] = 'Alias';
$string['refresh'] = 'Actualiser';
$string['refreshnonjsfilepicker'] = 'Veuillez fermer cette fenêtre et actualiser le sélecteur de fichiers sans javascript';
$string['removed'] = 'Dépôt supprimé';
$string['renameall'] = 'Tout renommer';
$string['renameto'] = 'Renommer à « {$a} »';
$string['repositories'] = 'Dépôts';
$string['repository'] = 'Dépôt';
$string['repositorycourse'] = 'Dépôts du cours';
$string['repositoryerror'] = 'Le dépôt distant à renvoyé l\'erreur {$a}';
$string['repositoryicon'] = 'Icône du dépôt';
$string['save'] = 'Enregistrer';
$string['saveas'] = 'Enregistrer sous';
$string['saved'] = 'Enregistré';
$string['saving'] = 'En cours d\'enregistrement';
$string['search'] = 'Recherche';
$string['searching'] = 'Rechercher dans';
$string['searchrepo'] = 'Rechercher dans le dépôt';
$string['sectionbackup'] = 'Sauvegardes de section';
$string['select'] = 'Sélectionnez';
$string['setmainfile'] = 'Spécifier comme fichier principal';
$string['setmainfile_help'] = 'Si plusieurs fichiers sont dans le dossier, le fichier principal est celui qui est affiché sur la page. Les autres fichiers (p. ex. images ou vidéos) peuvent y être intégrés. Dans le gestionnaire de fichiers, le fichier principal est indiqué par un titre en gras.';
$string['settings'] = 'Réglages';
$string['setupdefaultplugins'] = 'Mise en place des plugins de dépôt par défaut';
$string['siteinstances'] = 'Instances de dépôts du site';
$string['size'] = 'Taille';
$string['sourcekeymismatch'] = 'L\'URL source ne correspond pas à la clef de la source.';
$string['submit'] = 'Envoyer';
$string['sync'] = 'Sync';
$string['syncfiletimeout'] = 'Temps maximal de synchronisation';
$string['syncimagetimeout'] = 'Temps maximal de synchronisation d\'images';
$string['thumbview'] = 'Afficher en vignettes';
$string['title'] = 'Choisir un fichier…';
$string['type'] = 'Type';
$string['typenotvisible'] = 'Type non visible';
$string['undisclosedreference'] = '(non publié)';
$string['undisclosedsource'] = '(Non communiqué)';
$string['unknownoriginal'] = 'Inconnu';
$string['unknownsource'] = 'Source inconnue';
$string['unzipped'] = 'Décompressé correctement';
$string['upload'] = 'Déposer ce fichier';
$string['uploading'] = 'En cours de dépôt…';
$string['uploadsucc'] = 'Le fichier a été correctement déposé';
$string['uselatestfile'] = 'Utiliser le dernier fichier';
$string['usenonjsfilemanager'] = 'Ouvrir le gestionnaire de fichiers dans une nouvelle fenêtre';
$string['usenonjsfilepicker'] = 'Ouvrir le sélecteur de fichiers dans une nouvelle fenêtre';
$string['usercontextrepositorydisabled'] = 'Vous ne pouvez pas modifier ce dépôt dans le contexte utilisateur';
$string['wrongcontext'] = 'Vous ne pouvez pas accéder à ce contexte';
$string['xhtmlerror'] = 'Vous utilisez probablement l\'entête XHTML strict. Certains composants YUI ne fonctionnent pas dans ce mode ; veuillez le désactiver.';
$string['ziped'] = 'Dossier compressé correctement';
