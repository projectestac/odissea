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
 * Strings for component 'groupselect', language 'fr', version '4.4'.
 *
 * @package     groupselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Action';
$string['assignedteacher'] = 'Référent';
$string['assigngroup'] = 'Attribuer des référents aux groupes';
$string['assigngroup_help'] = 'Si défini, active un bouton pour attribuer des référents aux groupes (si des référents sont inscrits au cours). Les référents attribués ne sont pas membres de groupe, mais apparaissent dans le fichier d’exportation et dans l’affichage principal. Utile si des groupes sont gérés par des assistants.';
$string['cannotselectclosed'] = 'Vous ne pouvez plus devenir membre de groupe.';
$string['cannotselectmaxed'] = 'Vous ne pouvez plus joindre le groupe {$a} - le nombre maximum de membres est atteint.';
$string['cannotselectnocap'] = 'Vous n’êtes pas autorisé à choisir un groupe.';
$string['cannotselectnoenrol'] = 'Vous devez être inscrit au cours pour choisir un groupe.';
$string['cannotunselectclosed'] = 'Vous ne pouvez plus vous désinscrire du groupe';
$string['creategroup'] = 'Créer un nouveau groupe';
$string['deleteallgrouppasswords'] = 'Supprimer tous les mots de passe de groupe';
$string['deleteemptygroups'] = 'Supprimer le groupe quand le dernier étudiant l’a quitté';
$string['deleteemptygroups_help'] = 'Si activé, le groupe sera automatiquement supprimé lorsque le dernier étudiant l’aura quitté';
$string['description'] = 'Description du groupe';
$string['duedate'] = 'Date de remise';
$string['edittooltip'] = 'Cliquer pour éditer';
$string['enablepermissions'] = 'Permissions générales';
$string['eventexportlinkcreated'] = 'Lien exportation créé';
$string['eventgroupteacheradded'] = 'Enseignant référent ajouté';
$string['export'] = 'Créer un lien de téléchargement pour le fichier de données du groupe (CSV)';
$string['export_download'] = 'Téléchargez le fichier CSV';
$string['fromallgroups'] = 'Tous les groupes';
$string['globalpassword_help'] = 'Définit un mot de passe global pour rejoindre les groupes, écrase des mots de passe définis par les étudiants.';
$string['groupid'] = 'ID du groupe';
$string['groupselect:addinstance'] = 'Ajouter une nouvelle auto-sélection de groupe';
$string['groupselect:assign'] = 'Autoriser l’attribution de référents aux groupes';
$string['groupselect:create'] = 'Autoriser la création de groupe';
$string['groupselect:export'] = 'Permettre l’exportation de membres de groupe';
$string['groupselect:select'] = 'Permettre de devenir membre du groupe';
$string['groupselect:unselect'] = 'Permettre de quitter le groupe';
$string['hidefullgroups'] = 'Masquer tous les groupes de la vue principale';
$string['hidefullgroups_help'] = 'Si défini, fait disparaître tous les groupes qui ont atteint le nombre maximal de membres de l’affichage principal (le propre groupe de l’utilisateur exlu). Peut être utile si l’activité a beaucoup de groupes.';
$string['incorrectpassword'] = 'Mot de passe incorrect';
$string['managegroups'] = 'Gestion des groupes';
$string['maxcharlenreached'] = 'Nombre maximum de caractères atteint';
$string['maxgroupmembership'] = 'Nombre maximum de participation aux groupes';
$string['maxgroupmembership_error_low'] = 'Les nombres négatifs ne sont pas autorisés !';
$string['maxgroupmembership_help'] = 'Nombre maximum de participation aux groupes. Un 0 signifie qu’aucune participation n’est possible.';
$string['maxlimitreached'] = 'Nombre maximum atteint';
$string['maxmembers'] = 'Nombre maximum de membres par groupe';
$string['maxmembers_error_low'] = 'Les nombres négatifs ne sont pas autorisés ! Utilisez 0 pour ne pas avoir de limite !';
$string['maxmembers_error_smaller_minmembers'] = 'Doit être plus grand que le nombre minimum de membres par groupe !';
$string['maxmembers_help'] = 'Nombre maximum de membres par groupe, 0 pour illimité';
$string['maxmembers_icon'] = 'Le groupe a trop de membres';
$string['maxmembers_notification'] = 'Votre groupe a trop de membres ! Le maximum est de {$a}.';
$string['member'] = 'Membre';
$string['membercount'] = 'Compteur';
$string['membershidden'] = 'Liste des membres non disponible';
$string['memberslist'] = 'Membres';
$string['minmembers'] = 'Nombre minimum de membres par groupe';
$string['minmembers_error_bigger_maxmembers'] = 'Doit être plus petit que le nombre maximum de membres par groupe';
$string['minmembers_error_low'] = 'Les nombres négatifs ne sont pas autorisés pour le taille minimum du groupe ! Utilisez 0 pour ne pas exiger de minimum !';
$string['minmembers_help'] = 'Le nombre minimum de membres par groupe. Ajoute notification pour membres du groupe en dessous de la limite. Défault est 0 (désactivé).';
$string['minmembers_icon'] = 'Le groupe compte moins de membres que le minimum requis';
$string['minmembers_notification'] = 'Votre groupe compte trop peu de membres, le minimum est {$a}.';
$string['miscellaneoussettings'] = 'Paramètres divers';
$string['modulename'] = 'Auto-sélection de groupe';
$string['modulename_help'] = '<p>Permet aux étudiants de créer et de sélectionner des groupes. Fonctionnalités : </p><ul><li>Les étudiants peuvent créer des groupes, leur donner une description et les protéger par un mot de passé, si désiré</li><li>les étudiants peuvent sélectionner et rejoindre des groupes</li><li>Des référents peuvent être assignés aux groupes</li><li>Les enseignants peuvent exporter les groupes du cours en fichier csv </li><li>Compatibilité totale avec des groupes de base de Moodle : des groupes peuvent être créés par d’autres moyens si nécessaire, gère la remise de devoirs de groupe etc.</li></ul>';
$string['modulename_link'] = 'mod/groupselect/view';
$string['modulenameplural'] = 'Auto-sélections de groupe';
$string['nogroups'] = 'Désolé, pas de groupe disponible à choisir.';
$string['notavailableanymore'] = 'Désolé, la sélection de groupe n’est plus disponible (depuis {$a}).';
$string['notavailableyet'] = 'La sélection de groupe sera disponible le {$a}.';
$string['notifyexpiredselection'] = 'Montrer message si la date limite est atteinte';
$string['notifyexpiredselection_help'] = 'Si défini, un message apparaît si la date limite est atteint.';
$string['ok'] = 'Valider';
$string['password'] = 'Mot de passe requis';
$string['pluginadministration'] = 'Administration du module';
$string['pluginname'] = 'Auto-sélection de groupe';
$string['privacy:metadata'] = 'Le plugin Choix de groupe n’enregistre aucune donnée personnelle.';
$string['removeallsupervisors'] = 'Supprimer les référents';
$string['saving'] = 'Enregistrement…';
$string['select'] = 'Devenir membre du groupe {$a}';
$string['selectconfirm'] = 'Voulez-vous vraiment devenir membre du groupe <em>{$a}</em> ?';
$string['selectgroupaction'] = 'Sélectionner le groupe';
$string['showassignedteacher'] = 'Afficher les référents assignés';
$string['showassignedteacher_help'] = 'Si défini, les référents attribués apparaissent comme membres de groupe. Utile si les étudiants ont besoin de connaître leur enseignant attribué';
$string['studentcancreate'] = 'Les étudiants peuvent créer des groupes';
$string['studentcancreate_help'] = 'Si défini, les étudiants sans groupe (dans le groupement sélectionné) peuvent créer des groupes.';
$string['studentcanjoin'] = 'Les étudiants peuvent joindre des groupes';
$string['studentcanjoin_help'] = 'Si défini, les étudiants peuvent joindre des groupes. Cette permission peut être définie dans les capacités des rôles.';
$string['studentcanleave'] = 'Les étudiants peuvent quitter des groupes';
$string['studentcanleave_help'] = 'Si défini, les étudiants peuvent quitter des groupes. Cette permission peut être définie dans les capacités des rôles.';
$string['studentcansetdesc'] = 'Les étudiants peuvent créer et modifier la description du groupe';
$string['studentcansetdesc_help'] = 'Si activé, les étudiants peuvent spécifier une description pour un groupe et les membres de ce groupe peuvent la modifier';
$string['studentcansetenrolmentkey'] = 'Les étudiants peuvent définir des mots clés pour rejoindre des groupes.';
$string['studentcansetenrolmentkey_help'] = 'Si défini, les étudiants peuvent définir une clé d’inscription pour rejoindre des groupes';
$string['studentcansetgroupname'] = 'Les étudiants peuvent définir le nom de nouveaux groupes';
$string['studentcansetgroupname_help'] = 'Si défini, les étudiants peuvent définir des noms de groupe';
$string['supervisionrole'] = 'Rôle de référent';
$string['supervisionrole_help'] = 'Défini le rôle de référents (typiquement des enseignants non éditeurs)';
$string['targetgrouping'] = 'Séléctionner les groupes à partir des groupements';
$string['timeavailable'] = 'Disponible dès le';
$string['timeavailable_error_past_timedue'] = 'Ne peut commencer après la date de remise !';
$string['timedue'] = 'Disponible jusqu’à';
$string['timedue_error_pre_timeavailable'] = 'Ne peut terminer avant la date de début !';
$string['unassigngroup'] = 'Retirer les référents';
$string['unassigngroup_confirm'] = 'Cela va retirer les référents des groupes. Voulez-vous vraiment continuer ?';
$string['unselect'] = 'Quitter le groupe {$a}';
$string['unselectconfirm'] = 'Voulez-vous vraiment quitter le groupe <em>{$a}</em> ?';
