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
 * Strings for component 'qtype_ordering', language 'fr', version '4.5'.
 *
 * @package     qtype_ordering
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'Position absolue';
$string['addmultipleanswers'] = 'Ajouter {$a} autres éléments';
$string['addsingleanswer'] = 'Ajouter un autre élément';
$string['allornothing'] = 'Tout ou rien';
$string['answer'] = 'Texte de l’élément';
$string['correctitemsnumber'] = 'Éléments corrects : {$a}';
$string['correctorder'] = 'L’ordre correct de ces éléments est le suivant :';
$string['defaultanswerformat'] = 'Format de réponse par défaut';
$string['defaultquestionname'] = 'Déplacer les éléments suivants dans le bon ordre.';
$string['draggableitemno'] = 'Élément déplaçable {no}';
$string['draggableitems'] = 'Éléments déplaçables';
$string['duplicatesnotallowed'] = 'La duplication d’éléments déplaçables n’est pas autorisée. La chaîne « {$a->text} » est déjà utilisée dans {$a->item}.';
$string['editingordering'] = 'Modification question de classement';
$string['gradedetails'] = 'Détails de la note';
$string['gradingtype'] = 'Type de note';
$string['gradingtype_help'] = 'Choisir le type de calcul de la note.

**Tout ou rien**
&nbsp; Si tous les éléments sont dans la bonne position, la note maximale est attribuée. Sinon, le score est nul.

**Position absolue**
&nbsp; Un item est considéré comme correct s’il se trouve dans la même position que dans la bonne réponse. Le score le plus élevé possible pour la question est **le même** que le nombre d’éléments affichés à l’étudiant.

**Par rapport à la position correcte**
&nbsp; Un item est considéré comme correct s’il se trouve dans la même position que dans la bonne réponse. Les éléments corrects reçoivent un score égal au nombre d’éléments affichés moins un. Les éléments incorrects reçoivent un score égal au nombre d’éléments affichés moins un et moins la distance de l’élément par rapport à sa position correcte. Ainsi, si ***n*** éléments sont affichés à l’étudiant, le nombre de points disponibles pour chaque élément est ***(n - 1)***, et la note la plus élevée disponible pour la question est *** n x (n - 1)***, ce qui équivaut à ***(n² - n)***.

**Par rapport à l’élément suivant (hors dernier)**
&nbsp; Un élément est considéré comme correct s’il est suivi du même élément que celui de la bonne réponse. L’élément en dernière position n’est pas coché. Ainsi, le score le plus élevé possible pour la question est **un de moins que** le nombre d’éléments affichés à l’étudiant.

**Par rapport à l’élément suivant (y compris le dernier)**
&nbsp; Un élément est considéré comme correct s’il est suivi du même élément que celui de la bonne réponse. Cela inclut le dernier élément qui ne doit être suivi d’aucun élément. Ainsi, le score le plus élevé possible pour la question est **le même** que le nombre d’éléments affichés à l’étudiant.

**Par rapport aux éléments précédents et suivants**
&nbsp; Un élément est considéré comme correct si les éléments précédent et suivant sont les mêmes que dans la réponse correcte. Le premier élément ne doit avoir aucun élément précédent et le dernier élément ne doit pas avoir d’élément suivant. Ainsi, il y a deux points possibles pour chaque élément, et le score le plus élevé possible pour la question est **deux** le nombre d’éléments affichés à l’étudiant.

**Par rapport à TOUS les éléments précédents et suivants**
&nbsp; Un élément est considéré comme correct s’il est précédé de tous les mêmes éléments que dans la bonne réponse, et s’il est suivi de tous les mêmes éléments que dans la bonne réponse. L’ordre des éléments précédents n’a pas d’importance, ni l’ordre des éléments suivants. Ainsi, si ***n*** éléments sont affichés à l’étudiant, le nombre de points disponibles pour chaque élément est ***(n - 1)***, et la note la plus élevée disponible pour la question est *** n x (n - 1)***, ce qui équivaut à ***(n² - n)***.

**Sous-ensemble ordonné le plus long**
&nbsp; La note est le nombre d’éléments dans le sous-ensemble d’éléments ordonné le plus long. La note la plus élevée possible est la même que le nombre d’éléments affichés. Un sous-ensemble doit contenir au moins deux éléments. Les sous-ensembles n’ont pas besoin de commencer au premier élément (mais ils le peuvent) et ils n’ont pas besoin d’être contigus (mais ils peuvent l’être). Lorsqu’il existe plusieurs sous-ensembles de longueur égale, les éléments du sous-ensemble trouvé en premier, lors d’une recherche de gauche à droite, seront affichés comme étant corrects. Les autres éléments seront marqués comme incorrects.

**Sous-ensemble contigu le plus long**
&nbsp; La note est le nombre d’éléments dans le sous-ensemble d’éléments contigu le plus long. La note la plus élevée possible est la même que le nombre d’éléments affichés. Un sous-ensemble doit contenir au moins deux éléments. Les sous-ensembles n’ont pas besoin de commencer au premier élément (mais ils le peuvent) et ils DOIVENT ÊTRE CONTIGUS. Lorsqu’il existe plusieurs sous-ensembles de longueur égale, les éléments du sous-ensemble trouvé en premier, lors d’une recherche de gauche à droite, seront affichés comme étant corrects. Les autres éléments seront marqués comme incorrects.';
$string['highlightresponse'] = 'Surligner la réponse comme correcte ou incorrecte';
$string['horizontal'] = 'Horizontal';
$string['incorrectitemsnumber'] = 'Éléments incorrects : {$a}';
$string['layouttype'] = 'Affichage des éléments';
$string['layouttype_help'] = 'Déterminer si les réponses seront affichées verticalement ou horizontalement.';
$string['longestcontiguoussubset'] = 'Sous-ensemble contigu le plus long';
$string['longestorderedsubset'] = 'Sous-ensemble classé le plus long';
$string['moved'] = '{$a->item} déplacé. Nouvelle position : {$a->position} sur {$a->total}.';
$string['moveleft'] = 'Déplacer à gauche';
$string['moveright'] = 'Déplacer à droite';
$string['noresponsedetails'] = 'Aucun détail n’est disponible pour la réponse à cette question.';
$string['noscore'] = 'Pas de score';
$string['notenoughanswers'] = 'Les questions de classement doivent avoir plus de {$a} réponses.';
$string['notenoughsubsetitems'] = 'Un sous-ensemble doit contenir au moins {$a} éléments';
$string['numberingstyle'] = 'Numéroter les choix ?';
$string['numberingstyle123'] = '1., 2., 3., etc.';
$string['numberingstyleABCD'] = 'A., B., C., etc.';
$string['numberingstyleIIII'] = 'I., II., III., etc.';
$string['numberingstyle_desc'] = 'Le style de numérotation par défaut.';
$string['numberingstyle_help'] = 'Choisir le style de numérotation des éléments déplaçables de cette question.';
$string['numberingstyleabc'] = 'a., b., c., etc.';
$string['numberingstyleiii'] = 'i., ii., iii., etc.';
$string['numberingstylenone'] = 'Pas de numérotation';
$string['partialitemsnumber'] = 'Éléments partiellement corrects : {$a}';
$string['pluginname'] = 'Classement';
$string['pluginname_help'] = 'Plusieurs éléments sont affichés de façon désordonnée. Les éléments peuvent être replacés dans un ordre cohérent.';
$string['pluginname_link'] = 'question/type/ordering';
$string['pluginnameadding'] = 'Ajout d’une question de classement';
$string['pluginnameediting'] = 'Modification d’une question de classement';
$string['pluginnamesummary'] = 'Classer les éléments désordonnés dans un ordre cohérent.';
$string['positionx'] = 'Position {$a}';
$string['privacy:preference:gradingtype'] = 'Le type de notation.';
$string['privacy:preference:layouttype'] = 'La disposition des éléments.';
$string['privacy:preference:numberingstyle'] = 'Le style de numérotation des choix.';
$string['privacy:preference:selectcount'] = 'Le nombre de sélections.';
$string['privacy:preference:selecttype'] = 'Le type de sélection d’élément.';
$string['privacy:preference:showgrading'] = 'S’il faut afficher les détails de la notation.';
$string['regradeissuenumitemschanged'] = 'Le nombre d’éléments déplaçables a changé.';
$string['relativeallpreviousandnext'] = 'Relativement à TOUS les éléments précédents et suivants';
$string['relativenextexcludelast'] = 'Relativement à l’élément suivant (à l’exclusion du dernier)';
$string['relativenextincludelast'] = 'Relativement à l’élément suivant (y compris le dernier)';
$string['relativeonepreviousandnext'] = 'Relativement aux éléments suivants et précédents';
$string['relativetocorrect'] = 'Relativement à la position correcte';
$string['removeeditor'] = 'Retirer l’éditeur HTML';
$string['removeitem'] = 'Supprimer l’élément déplaçable';
$string['scoredetails'] = 'Ici se trouvent les scores pour chaque élément de cette réponse';
$string['selectall'] = 'Sélectionner tous les éléments';
$string['selectcontiguous'] = 'Sélectionner un sous-ensemble d’éléments contigus';
$string['selectcount'] = 'Taille du sous-ensemble';
$string['selectcount_help'] = 'Le nombre d’éléments qui seront affichés quand la question apparaîtra dans un test.';
$string['selectrandom'] = 'Sélectionner aléatoirement un sous-ensemble d’éléments';
$string['selecttype'] = 'Type de sélection d’éléments';
$string['selecttype_help'] = 'Choisir si vous souhaitez afficher tous les éléments ou un sous-ensemble des éléments.';
$string['showgrading'] = 'Détails de la note';
$string['showgrading_help'] = 'Choisir de montrer ou de cacher les détails du calcul du score lorsqu’un étudiant révise une réponse de cette question de classement.';
$string['vertical'] = 'Vertical';
