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
 * Strings for component 'block_dedication', language 'fr', version '4.1'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_filter_courseid'] = 'Nom du cours';
$string['admin_filter_courseid_help'] = 'Filtrer le rapport par le nom du cours';
$string['admin_filter_form'] = 'Configuration du bloc implication';
$string['admin_filter_form_help'] = 'Le temps est estimé sur la base des concepts de session et de durée de session appliqués aux entrées du journal des historiques.

<strong>Clic :</strong> chaque fois qu\'un utilisateur accède à une page de Moodle, une entrée de journal est enregistrée.

<strong>Session :</strong> ensemble de deux clics consécutifs ou plus dans lequel le temps écoulé entre chaque paire de clics consécutifs ne dépasse pas une durée maximale établie.

<strong>Durée de session : </strong>le temps écoulé entre le premier et le dernier clic de la session.

<strong>Temps d\'implication :</strong>la somme de toutes les durées de session pour un utilisateur.';
$string['admin_filter_form_text'] = 'Sélectionner la plage de dates et le délai maximum entre les clics d\'une même session.';
$string['admin_filter_maxtime'] = 'Fin de la période';
$string['admin_filter_maxtime_help'] = 'Ne prendre en compte que les enregistrements se terminant avant cette date';
$string['admin_filter_mintime'] = 'Début de la période';
$string['admin_filter_mintime_help'] = 'Ne prendre en compte que les enregistrements se terminant après cette date';
$string['admin_filter_submit'] = 'Calcul';
$string['allloglifetime'] = 'Conserver l\'historique des sessions pour';
$string['averagetimespent'] = '<strong>Temps moyen passé dans le cours:</strong> {$a}';
$string['cleanuptask'] = 'Tâche de nettoyage de l\'historique des sessions';
$string['collect_dedication'] = 'Collecte de données pour le bloc implication';
$string['configallloglifetime'] = 'Cette valeur indique la durée pendant laquelle vous souhaitez conserver les données relatives à la durée de la session. Les sessions plus anciennes sont automatiquement supprimées.';
$string['connectionratiorow'] = 'Connexions par jour';
$string['dedication:addinstance'] = 'Permettre d’ajouter le bloc Implication';
$string['dedication:myaddinstance'] = 'Permettre d\'ajouter un bloc de d\'implication dans la page "tableau de bord"';
$string['dedication:viewreports'] = 'Permettre de consulter les rapports d\'implication';
$string['dedicationall'] = 'Implication de tous les membres du cours. Cliquez sur un nom pour visualiser le détail de son implication dans le cours.';
$string['dedicationrow'] = 'Implication dans le cours';
$string['enrolmententity'] = 'Inscription';
$string['enrolmentmethod'] = 'Méthode d\'inscription';
$string['entity_dedication'] = 'Implication';
$string['excludesessionslessthan'] = 'Exclut les sessions de moins de {$a}';
$string['group'] = 'Groupe';
$string['groupentity'] = 'Groupe';
$string['ignore_sessions_limit'] = 'Ignorer la limite de sessions';
$string['ignore_sessions_limit_desc'] = 'Les sessions les plus courtes sont supprimées. Toute session inférieure à cette valeur (en minutes) sera ignorée dans les rapports de suivi.';
$string['lastupdated'] = 'Dernière mise à jour : {$a}';
$string['period'] = 'Période du <em>{$a->mintime}</em> au <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Temps écoulé :</strong> {$a}';
$string['pluginname'] = 'Implication dans le cours';
$string['privacy:metadata'] = 'Le plugin bloc implication stocke les heures que les utilisateurs ont consacrées aux cours.';
$string['privacy:metadata:block_dedication:courseid'] = 'Identifiant du cours pour l\'implication de l\'utilisateur';
$string['privacy:metadata:block_dedication:timespent'] = 'Temps consacré au cours';
$string['privacy:metadata:block_dedication:timestart'] = 'L\'heure de début des données collectées';
$string['privacy:metadata:block_dedication:userid'] = 'Identifiant de l\'utilisateur';
$string['report_dedication'] = 'Rapport sur les outils';
$string['report_timespent'] = 'Rapport du temps passé';
$string['session_limit'] = 'Limite de session';
$string['session_limit_desc'] = 'Limite de session pour les filtres de la page de rapport';
$string['sessionduration'] = 'Durée';
$string['sessiondurationsum'] = 'Durée de session cumulée';
$string['sessionstart'] = 'Début de la session';
$string['showestimatedtime'] = 'Montrer aux utilisateurs le temps estimé qu\'ils ont passé';
$string['showestimatedtime_help'] = 'Ce paramètre permet aux utilisateurs de voir le temps estimé qu\'ils ont passé dans le cours.';
$string['timespent_estimation'] = 'Votre estimation du temps passé dans le cours est la suivante :';
$string['timespentincourse'] = 'Temps consacré au cours';
$string['timespentreport'] = 'Rapport complet';
$string['timespenttasknotrunning'] = 'La tâche de calcul du temps passé n\'a pas encore été exécutée.';
$string['totaltimespent'] = '<strong>Total du temps passé dans le cours:</strong> {$a}';
$string['user_dedication_datasource'] = 'Implication des utilisateurs';
$string['userdedication'] = 'Détails de l’implication dans le cours de <em>{$a}</em>.';
$string['viewsessiondurationreport'] = 'Afficher le rapport sur la durée de la session';
