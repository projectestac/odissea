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
 * Strings for component 'block_completion_progress', language 'fr', version '4.4'.
 *
 * @package     block_completion_progress
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completed_colour'] = '#73A839';
$string['completed_colour_descr'] = 'Code couleur pour les éléments terminés';
$string['completed_colour_title'] = 'Couleur des activités terminées';
$string['completion_not_enabled'] = 'Le suivi d’achèvement est désactivé sur ce site.';
$string['completion_not_enabled_course'] = 'Le suivi d’achèvement est désactivé dans ce cours.';
$string['completion_progress:addinstance'] = 'Ajouter un bloc de progression';
$string['completion_progress:myaddinstance'] = 'Ajouter un bloc de progression au tableau de bord';
$string['completion_progress:overview'] = 'Vue d’ensemble de la progression de tous les étudiants inscrits au cours';
$string['completion_progress:showbar'] = 'Afficher la barre de progression dans le bloc';
$string['computeprogress'] = 'Calcul des pourcentages de progression';
$string['config_activitiesincluded'] = 'Activités prises en compte';
$string['config_activitycompletion'] = 'Toutes les activités avec suivi d’achèvement';
$string['config_default_title'] = 'Progression';
$string['config_group'] = 'Visible seulement par le groupe ou groupement';
$string['config_header_monitored'] = 'Surveillé';
$string['config_icons'] = 'Afficher les icônes dans la barre';
$string['config_longbars'] = 'Mode de présentation des longues barres';
$string['config_orderby'] = 'Mode de tri des éléments';
$string['config_orderby_course_order'] = 'Ordre d’apparition dans le cours';
$string['config_orderby_due_time'] = 'Date spécifiée dans « {$a} »';
$string['config_percentage'] = 'Montrer le pourcentage de progression aux étudiants';
$string['config_scroll'] = 'Barre de défilement';
$string['config_selectactivities'] = 'Sélectionner les activités';
$string['config_selectedactivities'] = 'Sélection manuelle';
$string['config_squeeze'] = 'Comprimer';
$string['config_title'] = 'Changer le titre du bloc';
$string['config_wrap'] = 'Multiligne';
$string['coursenametoshow'] = 'Nom du cours à afficher sur le tableau de bord';
$string['defaultlongbars'] = 'Affichage par défaut des longues barres';
$string['forceiconsinbar'] = 'Forcer l’affichage des icônes dans la barre de progression';
$string['fullname'] = 'Nom complet du cours';
$string['futureNotCompleted_colour'] = '#025187';
$string['futureNotCompleted_colour_descr'] = 'Code couleur pour les activités non terminées';
$string['futureNotCompleted_colour_title'] = 'Code couleur pour les éléments à venir';
$string['how_activitiesincluded_works'] = 'Comment fonctionne l’inclusion d’activités';
$string['how_activitiesincluded_works_help'] = '<p>Par défaut, toutes les activités pour lesquelles l’achèvement d’activité a été paramétré sont incluses dans la barre de progression.</p>Vous pouvez toutefois choisir de sélectionner manuellement les activités à inclure.</p>';
$string['how_group_works'] = 'Comment fonctionne la restriction de visibilité à un groupe';
$string['how_group_works_help'] = '<p>Si vous sélectionnez un groupe ou groupement, seuls les membres de celui-ci pourront voir le bloc de progression.</p>';
$string['how_longbars_works'] = 'Affichage des longues barres';
$string['how_longbars_works_help'] = '<p>Lorsque la barre dépasse une taille définie, elle peut être affichée selon les trois modes suivants :</p><ul><li>En comprimant les éléments pour ne conserver qu’une seule barre horizontale</li><li>En ajoutant une barre de défilement pour accéder aux éléments qui dépassent le nombre défini</li><li>En distribuant les éléments sur plusieurs lignes</li></ul><p>Attention, si vous choisissez le mode multiligne, l’indicateur « MAINTENANT » ne sera pas affiché.</p>';
$string['how_ordering_works'] = 'Comment fonctionne le tri';
$string['how_ordering_works_help'] = '<p>Il y a deux manières d’ordonner les activités/ressources dans la barre de progression.</p><ul><li><em>Date spécifée dans « Achèvement attendu le »</em> (default)<br />Les dates d’achèvement prévues sont utilisées pour ordonner les activités dans la barre. Les activités/ressources pour lesquelles aucune date n’a été spécifiée sont présentées selon leur ordre d’apparition dans le cours et l’indicateur « MAINTENANT » est affiché.</li><li><em>Ordre dans le cours</em><br />Les activités/ressources sont présentées selon leur ordre d’apparition dans le cours. Les dates d’achèvement sont alors ignorées et l’indicateur « MAINTENANT » ne peut pas être utilisé.</li></ul>';
$string['how_selectactivities_works'] = 'Comment fonctionne la sélection d’activités';
$string['how_selectactivities_works_help'] = '<p>Pour sélectionner manuellement les activités à inclure, le paramètre « Activités à prendre en compte » doit être réglé sur « Sélection manuelle » .</p><p>Seules les activités ayant des conditions d’achèvement peuvent être incluses.</p><p>Maintenez la touche CTRL enfoncée pour sélectionner plusieurs activités.</p>';
$string['indeterminate'] = '?';
$string['lastonline'] = 'Dernière visite';
$string['mouse_over_prompt'] = 'Passer la souris sur l’élément ou cliquer sur la barre pour obtenir des informations.';
$string['no_activities_config_message'] = 'Aucune activité/ressource n’a de conditions d’achèvement ou aucune activité n’a été sélectionnée. Commencez par définir des conditions d’achèvement sur des activités avant de configurer ce bloc.';
$string['no_activities_message'] = 'Aucune activité ou ressource n’est surveillée. Configurez le bloc pour mettre en place le suivi dans la barre de progression.';
$string['no_blocks'] = 'Aucun bloc de progression n’est défini dans vos cours.';
$string['no_courses'] = 'Vous n’êtes inscrit à aucun cours. Seules les barres de progression des cours dans lesquels vous êtes inscrit seront affichées.';
$string['no_visible_activities_message'] = 'Aucune des activités surveillées n’est actuellement visible.';
$string['notCompleted_colour'] = '#C71C22';
$string['notCompleted_colour_descr'] = 'Code couleur utilisé pour les activités non terminées';
$string['notCompleted_colour_title'] = 'Couleur des activités non terminées';
$string['not_all_expected_set'] = 'Certaines activités n’ont pas de date « {$a} » définie.';
$string['now_indicator'] = 'MAINTENANT';
$string['overview'] = 'Vue d’ensemble des étudiants';
$string['overviewcachetime'] = 'Temps de mise en cache des pourcentages calculés';
$string['pluginname'] = 'Progression';
$string['privacy:metadata:block_completion_progress:blockinstanceid'] = 'Identifiant de l\'instance du bloc « Progression » auquel le pourcentage se rapporte.';
$string['privacy:metadata:block_completion_progress:percentage'] = 'Le pourcentage d\'achèvement.';
$string['privacy:metadata:block_completion_progress:tableexplanation'] = 'Le bloc « Progression » met en cache les pourcentages d\'achèvement pour le tri du tableau « Aperçu ».';
$string['privacy:metadata:block_completion_progress:timemodified'] = 'Le moment auquel le pourcentage a été calculé.';
$string['privacy:metadata:block_completion_progress:userid'] = 'Identifiant de l\'utilisateur auquel le pourcentage se rapporte.';
$string['progress'] = 'Progression';
$string['progressbar'] = 'Progression';
$string['progresscachetime'] = 'Calculé il y a {$a}';
$string['selectitem'] = 'Sélectionner « {$a} »';
$string['shortname'] = 'Nom abrégé du cours';
$string['showallinfo'] = 'Afficher toutes les informations';
$string['showinactive'] = 'Montrer les étudiants inactifs dans l’aperçu';
$string['showlastincourse'] = 'Afficher la dernière visite de l’étudiant dans l’aperçu';
$string['submitted'] = 'Envoyé(s)';
$string['submittednotcomplete_colour'] = '#FFCC00';
$string['submittednotcomplete_colour_descr'] = 'Code couleur pour les éléments qui ont été soumis sans toutefois être terminés';
$string['submittednotcomplete_colour_title'] = 'Couleur des éléments envoyés mais pas terminés';
$string['time_expected'] = 'Attendu';
$string['why_set_the_title'] = 'Pourquoi modifier le titre du bloc ?';
$string['why_set_the_title_help'] = '<p>Il peut y avoir plusieurs instances du bloc barre de progression. Vous pouvez utiliser différents blocs pour surveiller différents ensembles d’activités ou de ressources. Par exemple, vous pouvez suivre la progression des devoirs dans un bloc et des questionnaires dans un autre. Pour cette raison, vous pouvez remplacer le titre par défaut et définir un titre de bloc plus approprié pour chaque instance.</p>';
$string['why_show_precentage'] = 'Pourquoi montrer un pourcentage de progression aux étudiants ?';
$string['why_show_precentage_help'] = '<p>Il est possible de montrer le pourcentage global de progrès aux étudiants.</p><p>Ce pourcentage représente le nombre d’activités réalisées divisé par le nombre total d’activités surveillées.</p><p>Le pourcentage de progression apparaît lorsque le pointeur de la souris survole un élément de la barre.</p>';
$string['why_use_icons'] = 'Pourquoi utiliser des icônes ?';
$string['why_use_icons_help'] = '<p>Vous pouvez ajouter les icônes « vu » et « croix » sur la barre de progression afin d’améliorer la lisibilité pour les daltoniens.</p><p>Cela permet de rendre le bloc plus clair si vous pensez que la signification des couleurs n’est pas intuitive, pour des raisons culturelles ou personnelles.</p>';
$string['wrapafter'] = 'Nombre d’activités par ligne en mode multiligne';
