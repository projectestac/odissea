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
 * Strings for component 'block_advnotifications', language 'fr', version '4.5'.
 *
 * @package     block_advnotifications
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_notif_local_notice'] = 'Cette notification sera <em>uniquement</em> affichée sur la page à partir de laquelle vous gérez ce bloc !';
$string['add_notification_global_notice'] = 'Cette notification sera affichée globalement / à l’échelle du site !';
$string['advnotifications'] = 'Notifications avancées';
$string['advnotifications:addinstance'] = 'Ajouter un nouveau bloc de notifications avancées';
$string['advnotifications:managenotifications'] = 'Gérer les notifications et les paramètres s’y rapportant';
$string['advnotifications:manageownnotifications'] = 'Gérer ses propres notifications et les paramètres s’y référant';
$string['advnotifications:myaddinstance'] = 'Ajouter un nouveau bloc de notifications avancées à la page mon Moodle';
$string['advnotifications_add_done'] = 'Fait !';
$string['advnotifications_add_heading'] = 'Nouvelle notification';
$string['advnotifications_add_option_announcement'] = 'Annonce';
$string['advnotifications_add_option_danger'] = 'Danger';
$string['advnotifications_add_option_info'] = 'Information';
$string['advnotifications_add_option_success'] = 'Succès';
$string['advnotifications_add_option_warning'] = 'Avertissement';
$string['advnotifications_add_saving'] = 'Sauvegarde en cours…';
$string['advnotifications_aicon'] = 'Icône ?';
$string['advnotifications_cancel'] = 'Annuler';
$string['advnotifications_cell_no'] = 'Non';
$string['advnotifications_cell_yes'] = 'Oui';
$string['advnotifications_class'] = 'Classe de bloc :';
$string['advnotifications_cron_auto_delete'] = 'Ajouter un indicateur supprimé aux notifications dont la date de fin est dépassée…';
$string['advnotifications_cron_auto_delete_udata'] = 'Supprimez les enregistrements utilisateur liés à des notifications qui n’existent plus…';
$string['advnotifications_cron_auto_perma_delete'] = 'Supprimer définitivement les notifications dont l’indicateur a été supprimé depuis plus de 30 jours…';
$string['advnotifications_cron_heading'] = 'Nettoyage des notifications avancées';
$string['advnotifications_date_from'] = 'Depuis :';
$string['advnotifications_date_info'] = 'Même date = toujours';
$string['advnotifications_date_to'] = 'jusque :';
$string['advnotifications_delete_label'] = 'Supprimer';
$string['advnotifications_dismissible'] = 'Ignoré ?';
$string['advnotifications_edit_label'] = 'Éditer';
$string['advnotifications_enabled'] = 'Activé ?';
$string['advnotifications_err_forbidden'] = 'Interdit, veuillez vous reconnecter…';
$string['advnotifications_err_nocapability'] = 'Vous n’avez pas la permission de faire ça…';
$string['advnotifications_err_nojsedit'] = 'Modification uniquement prise en charge avec JavaScript activé. Recréez la notification souhaitée ou activez JavaScript et réessayez.';
$string['advnotifications_err_req'] = 'Les champs suivants sont obligatoires : {$a}';
$string['advnotifications_field_actions'] = 'Actions';
$string['advnotifications_field_aicon'] = 'Icône';
$string['advnotifications_field_date_from'] = 'Depuis';
$string['advnotifications_field_date_to'] = 'Jusque';
$string['advnotifications_field_dismissible'] = 'Ignoré';
$string['advnotifications_field_enabled'] = 'Activé';
$string['advnotifications_field_global'] = 'Global';
$string['advnotifications_field_id'] = 'ID';
$string['advnotifications_field_times'] = 'Temps de visualisation';
$string['advnotifications_field_title'] = 'Titre';
$string['advnotifications_field_type'] = 'Type';
$string['advnotifications_global'] = 'Notification globale ?';
$string['advnotifications_join'] = '&';
$string['advnotifications_message'] = 'Message';
$string['advnotifications_nav_heading'] = 'Notifications :';
$string['advnotifications_nav_manage'] = 'Gérer';
$string['advnotifications_nav_restore'] = 'Restauration';
$string['advnotifications_nav_settings'] = 'Paramètres';
$string['advnotifications_preview'] = 'Prévisualisation';
$string['advnotifications_req'] = 'Requis…';
$string['advnotifications_restore_label'] = 'Restauration';
$string['advnotifications_restore_table_heading'] = 'Restauration des notifications avancées';
$string['advnotifications_restore_table_title'] = 'Restauration des notifications';
$string['advnotifications_restore_table_title_short'] = 'Restauration des notifications';
$string['advnotifications_restore_table_warning'] = '<strong> Attention ! </strong> La suppression des notifications de ce tableau le supprimera définitivement de la base de données. Nous vous recommandons d’utiliser les fonctionnalités de suppression automatique du plugin…';
$string['advnotifications_save'] = 'Sauvegarde';
$string['advnotifications_table_empty'] = 'Aucune notification à afficher !';
$string['advnotifications_table_heading'] = 'Notifications avancées';
$string['advnotifications_table_title'] = 'Gestion des notifications';
$string['advnotifications_table_title_short'] = 'Gestion';
$string['advnotifications_task_name'] = 'Notifications avancées';
$string['advnotifications_times'] = '# de fois';
$string['advnotifications_times_label'] = 'Nombre de fois où afficher la notification à un utilisateur (0 = toujours)';
$string['advnotifications_title'] = 'Titre';
$string['advnotifications_type'] = 'Type';
$string['advnotifications_update'] = 'Mise à jour';
$string['event_notification_created'] = 'Notification avancée créée';
$string['event_notification_deleted'] = 'Notification avancée supprimée';
$string['event_notification_updated'] = 'Notification avancée mise à jour';
$string['pluginname'] = 'Notifications avancées';
$string['privacy:metadata:block_advnotifications'] = 'Informations sur les notifications auxquelles l’utilisateur a été exposé et les interactions enregistrées.';
$string['privacy:metadata:block_advnotifications:blockid'] = 'L’ID du bloc à partir duquel la notification a été créée (le cas échéant).';
$string['privacy:metadata:block_advnotifications:created_by'] = 'L’ID de l’utilisateur qui a créé les notifications (le cas échéant).';
$string['privacy:metadata:block_advnotifications:deleted'] = 'Si la notification a été supprimée du site (1 = supprimé).';
$string['privacy:metadata:block_advnotifications:deleted_by'] = 'L’ID de l’utilisateur qui a supprimé la notification (le cas échéant).';
$string['privacy:metadata:block_advnotifications:message'] = 'Le corps/le message de la notification.';
$string['privacy:metadata:block_advnotifications:title'] = 'Le titre de la notification.';
$string['privacy:metadata:block_advnotificationsdissed'] = 'Informations sur la relation utilisateur (en tant que consommateur) / notification.';
$string['privacy:metadata:block_advnotificationsdissed:dismissed'] = 'Indicateur indiquant si la notification a été rejetée par l’utilisateur ou non (1 = rejetée).';
$string['privacy:metadata:block_advnotificationsdissed:not_id'] = 'L’ID de notification associé.';
$string['privacy:metadata:block_advnotificationsdissed:seen'] = 'Le nombre de fois où l’utilisateur a vu/a été affiché la notification.';
$string['privacy:metadata:block_advnotificationsdissed:user_id'] = 'L’ID de l’utilisateur qui a vu/rejeté la notification.';
$string['setting/auto_delete'] = 'Suppression automatique :';
$string['setting/auto_delete_desc'] = 'Indique si une notification dépassant la date de fin définie est automatiquement supprimée, mais peut être restaurée à nouveau. <br> (Aide à l’entretien / à la gestion)';
$string['setting/auto_delete_user_data'] = 'Suppression automatique des données utilisateur :';
$string['setting/auto_delete_user_data_desc'] = 'Indique si les données utilisateur (telles que si l’utilisateur a vu / ignoré des notifications qui n’existent plus, etc.) liées aux notifications avancées sont automatiquement supprimées. <br> (Aide à l’entretien / la gestion) <hr>';
$string['setting/auto_perma_delete'] = 'Suppression permanente automatique :';
$string['setting/auto_perma_delete_desc'] = 'Indique si les notifications qui ont été supprimées depuis plus de 30 jours sont automatiquement supprimées définitivement de la base de données. <br> (Aide à l’entretien / à la gestion)';
$string['setting/dateformat'] = 'Format de date :';
$string['setting/dateformat_desc'] = 'Les dates seront affichées dans le format choisi. <hr>';
$string['setting/enable'] = 'Activer :';
$string['setting/enable_desc'] = 'Indique si toutes les notifications sont activées / désactivées <hr>';
$string['setting/html'] = 'Autoriser le HTML :';
$string['setting/html_desc'] = 'Indique si le HTML de base est autorisé dans les titres / messages des notifications';
$string['setting/multilang'] = 'Prise en charge multi-langue / filtre :';
$string['setting/multilang_desc'] = 'Indique si le filtre multilangue (et d’autres) sont pris en charge dans les titres / messages des notifications. <br> Remarque - Ceci est pour les utilisateurs plus avancés et le HTML doit être activé (ci-dessus). <hr>';
$string['setting/navigation'] = 'Navigation :';
$string['setting/navigation_desc'] = '{$a->left}{$a->right}';
$string['setting/settings'] = 'Paramètres :';
