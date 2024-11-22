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
 * Strings for component 'grouptool', language 'fr', version '4.1'.
 *
 * @package     grouptool
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activated_group'] = 'Groupe activé';
$string['activated_groups'] = 'Groupes activés !';
$string['active'] = 'Actif';
$string['activegroups'] = 'Groupes actifs';
$string['add_member'] = 'Ajouter <strong>{$a->username}</strong> au groupe <strong>{$a->groupname}</strong>';
$string['added_member'] = '<strong>{$a->username}</strong> ajouté au groupe <strong>{$a->groupname}</strong>';
$string['administration'] = 'Administration';
$string['administration_alt'] = 'Création de groupe(ment), et réglage des groupes actifs pour cette instance';
$string['agroups'] = 'Groupes activés';
$string['ajax_edit_size_help'] = 'Enregistrer la nouvelle taille avec &lt;Enter&gt;, utiliser &lt;ESC&gt; pour annuler, laisser vide pour effacer la taille individuelle.';
$string['all_groups_full'] = '<strong>{$a}</strong> n\'a pu être inscrit dans aucun groupe car tous les groupes sont complets !';
$string['allow_multiple'] = 'Inscription multiple';
$string['allow_reg'] = 'Autoriser l\'auto-inscription';
$string['allow_unreg'] = 'Autoriser la désinscription';
$string['allowed'] = 'Autorisé';
$string['already_marked'] = 'Ce groupe a déjà été marqué pour l\'inscription !';
$string['already_member'] = '<strong>{$a->username}</strong> est déjà membre du groupe <strong>{$a->groupname}</strong>';
$string['already_occupied'] = 'La place dans le groupe <strong>{$a->grpname}</strong> est déjà occupée parce qu\'un autre membre a complété l\'enregistrement plus rapidement. Veuillez chercher un autre groupe !';
$string['already_queued'] = '<strong>{$a->username}</strong> est déjà en file d\'attente dans le groupe <strong>{$a->groupname}</strong> !';
$string['already_registered'] = '<strong>{$a->username}</strong> est déjà inscrit dans le groupe <strong>{$a->groupname}</strong> !';
$string['alwaysshowdescription'] = 'Toujours afficher la description';
$string['asterisk_marks_moodle_registrations'] = 'Les utilisateurs marqués d\'un astérisque (*) sont déjà inscrits dans le groupe Moodle concerné.';
$string['availabledate'] = 'Début de l\'inscription ';
$string['availabledateno'] = 'Toujours disponible';
$string['calendaravailable'] = 'L\'inscription {$a} commence';
$string['calendardue'] = 'L\'inscription {$a} est passée';
$string['cant_enrol'] = 'Impossible d\'inscrire automatiquement un utilisateur à un cours.';
$string['cfg_addinstanceset_head'] = 'Paramètres supplémentaires de l\'instance';
$string['cfg_addinstanceset_head_info'] = 'Paramètres supplémentaires pour Grouptool.';
$string['cfg_admin_head'] = 'Paramètres par défaut de la vue d\'administration';
$string['cfg_admin_head_info'] = 'Paramètres standard pour l\'onglet d\'administration dans la vue de Grouptool.';
$string['cfg_allow_multiple'] = 'Inscriptions multiples';
$string['cfg_allow_multiple_desc'] = 'Permettre aux étudiants d\'être inscrits dans plus d\'un groupe à la fois par défaut.';
$string['cfg_allow_reg'] = 'Autoriser l\'auto-inscription';
$string['cfg_allow_reg_desc'] = 'Permettre aux étudiants de s\'inscrire eux-mêmes par défaut';
$string['cfg_allow_unreg'] = 'Autoriser la désinscription';
$string['cfg_allow_unreg_desc'] = 'Les utilisateurs doivent-ils pouvoir se désinscrire et changer de groupe ?';
$string['cfg_choose_max'] = 'Choisir le maximum';
$string['cfg_choose_max_desc'] = 'À combien de groupes les utilisateurs doivent-ils pouvoir s\'inscrire simultanément par défaut ?';
$string['cfg_choose_min'] = 'Choisir le minimum';
$string['cfg_choose_min_desc'] = 'Combien de groupes les utilisateurs peuvent-ils choisir par défaut ?';
$string['cfg_force_dereg'] = 'Forcer la désinscription dans Grouptool';
$string['cfg_force_dereg_desc'] = 'Forcer la désinscription non seulement de Grouptool mais aussi des groupes Moodle.';
$string['cfg_force_importreg'] = 'Forcer l\'inscription dans Grouptool';
$string['cfg_force_importreg_desc'] = 'Forcer via Grouptool dans les groupes Moodle les utilisateurs importés à s\'inscrire de force dans cette instance de Grouptool également.';
$string['cfg_groups_queues_limit'] = 'Places dans la file d\'attente par groupe';
$string['cfg_groups_queues_limit_desc'] = 'Détermine le nombre d\'étudiants différents qui peuvent être mis en file d\'attente dans un groupe en même temps par défaut.';
$string['cfg_grpsize'] = 'Taille globale du groupe standard';
$string['cfg_grpsize_desc'] = 'Taille de groupe standard utilisée partout dans Grouptool';
$string['cfg_ifgroupdeleted'] = 'Si des groupes sont supprimés';
$string['cfg_ifgroupdeleted_desc'] = 'Les groupes supprimés doivent-ils être recréés pour l\'instance grouptool ou les références dans grouptool (y compris les données de groupe, les inscriptions et la file d\'attente) doivent-elles être supprimées ? Remarque : si vous sélectionnez "recréer le groupe", les groupes seront recréés automatiquement après leur suppression sous "Administration du cours / Utilisateurs / Groupes".';
$string['cfg_ifmemberadded'] = 'Si des membres du groupe sont ajoutés';
$string['cfg_ifmemberadded_desc'] = 'Les nouveaux membres d\'un groupe ajoutés via moodle doivent-ils également être enregistrés dans grouptool ou doivent-ils être ignorés ?';
$string['cfg_ifmemberremoved'] = 'Si des membres du groupe sont retirés';
$string['cfg_ifmemberremoved_desc'] = 'Les enregistrements de grouptool doivent-ils être supprimés si les utilisateurs sont supprimés du groupe moodle correspondant ?';
$string['cfg_immediate_reg'] = 'Inscription immédiate';
$string['cfg_instance_head'] = 'Paramètres par défaut de l\'instance';
$string['cfg_max_queues'] = 'Nombre maximal de places simultanées dans la file d\'attente par participant';
$string['cfg_moodlesync_head'] = 'Comportement de synchronisation';
$string['cfg_name_scheme'] = 'Schéma de dénomination standard';
$string['cfg_show_members'] = 'Afficher les membres du groupe';
$string['cfg_use_individual'] = 'Utiliser une taille individuelle';
$string['cfg_use_queue'] = 'Utiliser la file d\'attente';
$string['cfg_use_size'] = 'Utiliser la taille du groupe';
$string['cfg_users_queues_limit'] = 'Places en file d\'attente par utilisateur';
$string['cfg_users_queues_limit_desc'] = 'Détermine le nombre de groupes différents dans lesquels un utilisateur peut être mis en file d\'attente en même temps par défaut.';
$string['change_group'] = 'Changer de groupe';
$string['change_group_to'] = 'Poursuivre le changement de groupe pour <strong>{$a->groupname}</strong> ?';
$string['change_group_to_success'] = 'Changement de groupe réussi ! <strong>{$a->username}</strong> est maintenant enregistré dans le groupe <strong>{$a->groupname}</strong> !';
$string['changes_saved'] = 'Modifications enregistrées';
$string['checkbox_control_header'] = 'Dé-/sélectionner les groupes et groupements';
$string['choose'] = 'Choisir...';
$string['choose_group'] = 'Vous devez choisir un groupe cible';
$string['choose_max'] = 'Nombre maximum de groupes à choisir';
$string['choose_max_text'] = 'Vous pouvez choisir au maximum <strong>{$a}</strong> groupe(s) !';
$string['choose_min'] = 'Nombre minimum de groupes à choisir';
$string['choose_min_max_text'] = 'Vous devez choisir entre <strong>{$a->min}</strong> et <strong>{$a->max}</strong> groupes !';
$string['choose_min_text'] = 'Vous devez choisir au moins <strong>{$a}</strong> groupe(s) !';
$string['choose_minmax_title'] = 'Groupes à choisir';
$string['choose_targetgroup_import'] = 'Importer dans le(s) groupe(s)';
$string['choose_targetgroup_unregister'] = 'Désinscrire d\'un ou plusieurs groupes';
$string['chooseactivity'] = 'Vous devez choisir une activité avant de pouvoir afficher les données !';
$string['createGroups'] = 'Créer les groupes';
$string['create_1_person_groups'] = 'Créer des groupes individuels';
$string['create_fromto_groups'] = 'Créer des groupes avec des nombres issus d\'un intervalle (par exemple de 34 à 89), <strong>sans attribution automatique</strong> des membres du groupe';
$string['create_n_m_groups'] = 'Créer N groupes pour M membres, <strong>sans attribution automatique</strong> des membres du groupe';
$string['createinsertgrouping'] = 'Ajouter au groupement';
$string['define_amount_groups'] = 'Définir un nombre N de groupes';
$string['define_amount_members'] = 'Définir un nombre M de membres dans le groupe';
$string['delete_reference'] = 'Supprimer de Grouptool';
$string['deselect'] = 'Désélectionner';
$string['duedate'] = 'Fin de l\'inscription ';
$string['duedate_help'] = 'Fin de la période d\'inscription. Après cette date, les membres ne peuvent plus s\'inscrire eux-mêmes et les référents ont accès à la fonctionnalité de résolution des files d\'attente, etc.';
$string['duedateno'] = 'Pas de dates limites';
$string['filters_legend'] = 'Filtres';
$string['filterunoccupied'] = 'Afficher uniquement les groupes ayant des places libres';
$string['followchanges'] = 'Suivre les modifications';
$string['forceregistration'] = 'Forcer l\'enregistrement dans Grouptool';
$string['free'] = 'Libre';
$string['general_information'] = 'Information générale';
$string['general_registration_exception'] = 'Une exception d\'inscription générale s\'est produite et nous ne pouvons pas en déterminer la raison automatiquement !';
$string['grading'] = 'Evaluation';
$string['grading_activity_title'] = 'Activité';
$string['grading_filter_select_title'] = 'Groupe ou groupes';
$string['grading_grouping_select_title'] = 'Filtre des groupements';
$string['group_administration'] = 'Administration des groupes';
$string['group_creation'] = 'Création des groupes';
$string['group_places'] = 'Nombre de places disponibles';
$string['groupcreation'] = 'Création des groupes';
$string['groupinfo'] = 'Information du groupe';
$string['groupoverview'] = 'Aperçu du groupe';
$string['groups_queues_limit'] = 'Places dans la file d\'attente par groupe';
$string['groupselection'] = 'Sélection du groupe';
$string['groupsize'] = 'Taille du groupe';
$string['groupstatus'] = 'Statut';
$string['grouptool:view_groups'] = 'Voir les groupes actifs';
$string['grouptool:view_own_registration'] = 'Voir sa propre inscription';
$string['grouptoolfieldset'] = 'Paramètres de l\'instance';
$string['groupuser_import'] = 'Importer des groupes d\'utilisateurs';
$string['groupuser_unregister'] = 'Désinscription des utilisateurs du groupe';
$string['ifgroupdeleted'] = 'Si le groupe est supprimé';
$string['ifmemberadded'] = 'Si des membres du groupe sont ajoutés';
$string['ifmemberremoved'] = 'Si des membres du groupe sont retirés';
$string['ignorechanges'] = 'Ignorer les modifications';
$string['immediate_reg'] = 'Inscription immédiate';
$string['importbutton'] = 'Importer les utilisateurs';
$string['inactive'] = 'Non actif';
$string['inactivegroups'] = 'Groupes non actifs';
$string['inactivegroups_hide'] = 'Masquer les groupes non actifs';
$string['inactivegroups_show'] = 'Afficher les groupes non actifs';
$string['includeonlyactiveenrol'] = 'Inclure uniquement les inscriptions actives';
$string['incomplete_only_label'] = 'Afficher uniquement les groupes dont les notes sont manquantes';
$string['individual_size_info'] = '* Taille du groupe selon les paramètres établis';
$string['invert'] = 'Inverser';
$string['landscape'] = 'Paysage';
$string['limit'] = 'limite';
$string['loading'] = 'chargement...';
$string['max_queues_reached'] = 'Files d\'attente maximales atteintes !';
$string['max_regs_reached'] = 'Nombre maximum d\'inscriptions atteint !';
$string['moodlesync'] = 'Le comportement en cas de changement dans moodle';
$string['multiple'] = 'Gestion des groupes d\'utilisateurs';
$string['mygroups_only_label'] = 'Ne montrer que les éléments que j\'ai notés';
$string['namingscheme'] = 'Schéma des noms';
$string['no_registrations'] = 'Pas d\'inscriptions';
$string['no_users_to_display'] = 'Pas d\'utilisateurs à afficher !';
$string['nobody_queued'] = 'Personne en file d\'attente';
$string['nogroupschoose'] = 'Choisir les groupes';
$string['nogroupscreate'] = 'Créer les groupes';
$string['nonconflicting'] = 'Sans conflit';
$string['noregistrationdue'] = 'illimité';
$string['not_registered'] = 'Vous n\'est pas inscrit !';
$string['nowhere_queued'] = 'Pas de file d\'attente';
$string['number_of_groups'] = 'Nombre N de groupes';
$string['number_of_students'] = 'Nombre de participants';
$string['occupied'] = 'Occupé';
$string['orientation'] = 'Orientation du PDF';
$string['overview'] = 'Vue d’ensemble';
$string['overview_tab'] = 'Vue du groupe';
$string['overwrite_label'] = 'Remplacer les notes existantes';
$string['portrait'] = 'Portrait';
$string['preview'] = 'Prévisualisation';
$string['queue'] = 'File d\'attente';
$string['queue_and_multiple_reg_title'] = 'Files d\'attente et inscriptions multiples';
$string['queued'] = 'Sur liste d\'attente';
$string['queued_on_rank'] = 'En attente au rang #{$a}';
$string['queueing_is'] = 'Mise en file d\'attente';
$string['queues'] = 'Files d\'attente';
$string['queuesgrp'] = 'File d\'attente et nombre maximal de places dans la file d\'attente';
$string['rank'] = 'Rang';
$string['recreate_group'] = 'Recréer le groupe';
$string['refresh_table_button'] = 'Actualiser l\'aperçu';
$string['register'] = 'S\'inscrire';
$string['register_you_in_group'] = 'Voulez-vous vraiment vous inscrire dans le groupe ?';
$string['register_you_in_group_success'] = 'Vous vous êtes inscrit avec succès dans le groupe <strong>{$a->groupname}</strong> !';
$string['register_you_in_group_successmail'] = 'Vous vous êtes inscrit avec succès dans le groupe <strong>{$a->groupname}</strong> !';
$string['register_you_in_group_successmailhtml'] = 'Vous vous êtes inscrit avec succès dans le groupe <strong>{$a->groupname}</strong> !';
$string['registered'] = 'Inscrit';
$string['registered_on_rank'] = 'Inscrit au rang #{$a}';
$string['registration_missing'] = '1 inscription manquante';
$string['registrationdue'] = 'Fin de l\'inscription ';
$string['registrations'] = 'Inscriptions au groupe';
$string['select'] = 'Sélectionner';
$string['selected'] = 'Sélectionné';
$string['selectfromcohort'] = 'Sélectionnez des utilisateurs de la cohorte';
$string['selectfromgroup'] = 'Sélectionner les membres du groupe';
$string['selectmultiple'] = 'Choix multiple';
$string['selectsingle'] = 'Choix unique';
$string['selfregistration'] = 'Inscription';
$string['setactive'] = 'Activer';
$string['setinactive'] = 'Désactiver';
$string['show_members'] = 'Afficher les membres du groupe';
$string['size'] = 'Taille du groupe';
$string['start'] = 'Démarrer';
$string['status'] = 'Statut';
$string['unreg'] = 'Se désinscrire';
$string['unreg_is'] = 'Désinscription';
$string['unreg_you_from_group'] = 'Poursuivre la désinscription du groupe <strong>{$a->groupname}</strong> ?';
$string['unreg_you_from_group_success'] = 'La désinscription du groupe <strong>{$a->groupname}</strong> a été effectuée avec succès !';
$string['unregfrommgroups'] = 'Forcer la désinscription de Grouptool';
$string['unregisterbutton'] = 'Désinscrire les utilisateurs';
$string['use_queue'] = 'Utiliser les files d\'attente';
$string['userlist'] = 'Liste d\'utilisateurs';
$string['userlist_tab'] = 'Vue du cours';
$string['users_queues_limit'] = 'Places en file d\'attente par utilisateur';
$string['viewmoodlegroups'] = 'Vers les groupes Moodle';
$string['with_selection'] = 'Avec la sélection...';
$string['you_are_already_registered'] = 'Vous êtes déjà inscrit au groupe <strong>{$a->groupname}</strong> !';
