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
 * Strings for component 'block_filtered_course_list', language 'fr', version '4.1'.
 *
 * @package     block_filtered_course_list
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allcourses'] = 'Un gestionnaire voit tous les cours';
$string['blockname'] = 'Liste de cours personnalisée';
$string['catrubrictpl'] = 'Modèle d\'affichage des rubriques par catégorie';
$string['catseparator'] = 'Séparateur de catégorie';
$string['completedcourses'] = 'Cours achevés';
$string['configcatrubrictpl'] = 'Utilisez ce paramètre pour déterminer un modèle d\'affichage des rubriques lors du filtrage par catégorie. Les champs suivants sont disponibles: NAME, IDNUMBER, PARENT, ANCESTRY. Vous pouvez tronquer l\'affichage de n\'importe quel champ en ajoutant un nombre de caractères entre accolades. (par exemple, NAME {20}). Des points de suspension seront ajoutés. <br /> <br /> Tous les détails sur <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki"> https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list / wiki </a>.';
$string['configcatseparator'] = 'Chaîne de séparation à utiliser entre les noms de catégorie lors de l\'utilisation de la catégorie ANCESTRY dans le modèle de rubrique de catégorie.';
$string['configcoursenametpl'] = 'Utilisez ce paramètre pour déterminer un modèle d\'affichage d\'un nom de cours. Les champs suivants sont disponibles: FULLNAME, SHORTNAME, IDNUMBER et CATEGORY. Vous pouvez tronquer l\'affichage de n\'importe quel champ en ajoutant un nombre de caractères entre accolades. (par exemple, NAME {20}). Des points de suspension seront ajoutés. <br /> <br /> Tous les détails sur <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki"> https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list / wiki </a>.';
$string['configexternalfilters'] = 'Utilisez l\'identificateur entre parenthèses pour référencer le filtre dans la zone de texte de configuration du filtre. Pour des informations sur la configuration disponible pour un filtre externe, voir le plugin qui le fournit.';
$string['configfilters'] = 'Entrez un filtre par ligne à l\'aide de barres verticales pour séparer les éléments de filtre. Les types de filtres sont: <i>category</i>, <i>shortname</i>, <i>regex</i>, <i>idnumber</i>, <i>completion</i>, <i>starred</i>, <i>enrolment</i> and <i>generic</i>. <br /> <br /> Tous les détails sur <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax"> https://github.com/CLAMP-IT / moodle-blocks_filtered_course_list / wiki / Filter-syntax </a>.';
$string['confighideallcourseslink'] = 'Masquer le lien "Tous les cours" au bas du bloc. <br> Le masquage des liens n\'affecte pas la vue d\'un gestionnaire.';
$string['confighidefromguests'] = 'Cacher le bloc pour les invités et les visiteurs anonymes.';
$string['confighideothercourses'] = 'Cachez la rubrique "Autres cours" dans le bloc.';
$string['configmanagerview'] = 'Que doit voir un gestionnaire dans le bloc de liste de cours? Notez que les gestionnaires qui ne sont inscrits à aucun cours verront toujours la liste générique.';
$string['configmaxallcourse'] = 'Sur un site avec une seule catégorie, les administrtateurs et les invités verront tous les cours, <br /> mais au-dessus de ce nombre, ils verront un lien de catégorie à la place. <br /> [Choisissez un entier entre 0 et 999.]';
$string['configpersistentexpansion'] = 'Mémoriser les états d\'extension de rubrique dans une session de navigateur.';
$string['configprimarysort'] = 'Dans une rubrique, les cours seront triés par ce champ. Choisissez "Ordre de tri" pour afficher les cours dans le même ordre que celui affiché dans l\'interface de gestion des cours.';
$string['configsecondarysort'] = 'Au sein d\'une rubrique, les cours seront secondairement classés par ce champ.';
$string['configtitle'] = 'Titre du bloc';
$string['coursenametpl'] = 'Modèle de nom de cours';
$string['courses'] = 'Cours';
$string['courseswithxenrolment'] = 'Cours avec {$ a} inscriptions';
$string['defaultfilters'] = 'category | collapsed | 0 (top level) | 0 (all descendants)';
$string['externalfilters'] = 'Filtres externes';
$string['filtered_course_list:addinstance'] = 'Ajouter un nouveau bloc de liste de cours personnalisée';
$string['filtered_course_list:myaddinstance'] = 'Ajouter un nouveau bloc de liste de cours personnalisée à mon tableau de bord';
$string['filters'] = 'Configuration du filtre';
$string['filters_help'] = 'Entrez un filtre par ligne à l\'aide des barres verticales pour séparer les éléments de filtre. Les types de filtres sont: <i>category</i>, <i>shortname</i>, <i>regex</i>, <i>idnumber</i>, <i>completion</i>, <i>starred</i>, <i>enrolment</i> and <i>generic</i>. <br /> <br /> Tous les détails sur <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax"> https://github.com/CLAMP-IT / moodle-blocks_filtered_course_list / wiki / Filter-syntax </a>.';
$string['hideallcourseslink'] = 'Cacher le lien « Tous les cours »';
$string['hidefromguests'] = 'Cacher aux invités';
$string['hideothercourses'] = 'Cacher les autres cours';
$string['managerview'] = 'Vue du gestionnaire';
$string['maxallcourse'] = 'Maximum pour une catégorie unique';
$string['othercourses'] = 'Autres cours';
$string['owncourses'] = 'Un gestionnaire voit ses propres cours';
$string['persistentexpansion'] = 'Expansion persistante';
$string['pluginname'] = 'Liste de cours personnalisée';
$string['primarysort'] = 'Champ principal à trier';
$string['primaryvector'] = 'Sens de tri du champ principal';
$string['privacy:metadata'] = 'Le bloc Liste des cours filtrés affiche des informations sur les inscriptions aux cours, mais n\'affecte ni ne stocke aucune donnée lui-même. Toutes les inscriptions sont gérées par d\'autres systèmes Moodle.';
$string['secondarysort'] = 'Champ secondaire à trier';
$string['secondaryvector'] = 'Sens de tri du champ secondaire';
$string['starredcourses'] = 'Cours suivis';
$string['top'] = 'Haut';
