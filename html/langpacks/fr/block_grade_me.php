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
 * Strings for component 'block_grade_me', language 'fr', version '4.5'.
 *
 * @package     block_grade_me
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alt_gradebook'] = 'Aller au carnet de notes du cours {$a->course_name}…';
$string['alt_mark'] = 'vérifier';
$string['alt_mod'] = 'Aller à la notation de l’activité {$a->mod_name}';
$string['datetime'] = '%B %d, %l:%M %p';
$string['excess'] = 'Il y a plus de {$a->maxcourses} cours avec des activités à noter.';
$string['expand'] = 'Réduire / Développer tout';
$string['grade_me:addinstance'] = 'Ajouter un nouveau bloc Activités à noter';
$string['grade_me:myaddinstance'] = 'Ajouter un nouveau bloc Activités à noter à Ma Page';
$string['grade_me_tools'] = 'Outils';
$string['grade_me_tools_desc'] = '<p><a href="{$a}/blocks/grade_me/quiz_update_ngrade.php">Rafraîchir les tentatives de quiz qui nécessitent une note</a></p>';
$string['link_grade_img'] = 'Note du devoir…';
$string['link_gradebook'] = 'Aller au cours {$a->course_name}…';
$string['link_gradebook_icon'] = 'Aller au carnet de notes du cours {$a->course_name}…';
$string['link_mod'] = 'Aller à l’activité {$a->mod_name}';
$string['link_mod_img'] = 'Aller à la notation de l’activité {$a->mod_name}';
$string['link_user_profile'] = 'Profile de {$a->first_name}';
$string['nothing'] = 'Rien à noter.';
$string['pluginname'] = 'Activités à noter';
$string['pluginname-reset'] = 'Activités à évaluer - réinitialiser le tableau';
$string['quiz_update_ngrade_complete'] = 'Mise à jour achevée';
$string['quiz_update_ngrade_success'] = 'Liste des tentatives de quiz mise à jour avec succès, il y a actuellement {$a} questions qui nécessitent une note.';
$string['settings_adminviewall'] = 'L’administrateur voit tout';
$string['settings_configadminviewall'] = 'Permet de donner les droits administrateur pour voir tous les travaux à noter - pas seulement pour les cours où ils ont un rôle d’évaluateur.';
$string['settings_configenablepre'] = 'Affiche les activités de type {$a->plugin_name} dans le bloc Activités à noter';
$string['settings_configmaxage'] = 'Âge maximal des éléments évaluables à afficher, en jours. Les éléments plus anciens que cela seront masqués. Saisir 0 pour aucune limite.';
$string['settings_configmaxcourses'] = 'Définit le nombre maximum de cours ayant des activités à noter à afficher. Un nombre trop grand peut entraîner une baisse des performances.';
$string['settings_configshowhidden'] = 'Activer l’affichage des éléments à évaluer dans les cours masqués';
$string['settings_enablepre'] = 'Afficher';
$string['settings_maxage'] = 'Âge maximal';
$string['settings_maxcourses'] = 'Nombre maximum de cours affichés';
$string['settings_showhidden'] = 'Éléments de cours cachés affichés';
$string['title'] = 'Activités à noter';
