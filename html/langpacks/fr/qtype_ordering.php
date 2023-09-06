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
 * Strings for component 'qtype_ordering', language 'fr', version '4.1'.
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
$string['answer'] = 'Texte de l\'élément';
$string['answerheader'] = 'Élément glissable {no}';
$string['correctorder'] = 'L\'ordre correct de ces éléments est le suivant :';
$string['defaultanswerformat'] = 'Format de réponse par défaut';
$string['defaultquestionname'] = 'Glisser / déposer les éléments suivants dans le bon ordre.';
$string['duplicatesnotallowed'] = 'La duplication d\'éléments glissable n\'est pas autorisée. La chaîne « {$a->text} » est déjà utilisée dans {$a->item}.';
$string['editingordering'] = 'Éditer une question de type ordonnancement';
$string['gradedetails'] = 'Détails de la note';
$string['gradingtype'] = 'Type de la notation';
$string['gradingtype_help'] = 'Choisir le type de calcul de la notation.

**Tout ou rien**
: Si tous les éléments sont à la bonne position, alors la meilleure note est attribuée. Sinon, le score attribué est de zéro.

**Position absolue**
: Un élément est considéré comme correct s\'il se trouve à la même position que dans la bonne réponse. Le score le plus haut possible pour cette question est **le même que** le nombre d\'éléments affichés à l\'étudiant.

**Position correcte**
: Un élément est considéré comme correct s\'il se trouve à la même position que dans la bonne réponse. Les éléments corrects reçoivent un score égal au nombre d\'éléments affichés moins un. Les éléments incorrects reçoivent un score égal au nombre d\'éléments affichés moins un et moins la distance par rapport à la position correcte de l\'élément. Ainsi, si ***n*** éléments sont affichés à l\'étudiant, le nombre de points disponibles pour chaque élément est de ***(n - 1)***, et la note la plus haute possible à cette question est de ***n x (n - 1)***, ce qui équivaut à ***(n² - n)***.

**Position relative au prochain élément (en excluant le dernier)**
: Un élément est considéré comme correct s\'il est suivi par le même élément que dans la bonne réponse. L\'élément en dernière position n\'est pas vérifié. Ainsi, le score le plus haut possible pour la question est **un point de moins** que le nombre d\'éléments affichés à l\'étudiant.

**Position relative à l\'élément suivant (en incluant le dernier)**
: Un élément est considéré comme correct s\'il est suivi par le même élément que dans la bonne réponse. Ceci inclut le dernier élément qui ne doit être suivi d\'aucun élément. Ainsi, le score le plus haut possible pour la question est **le même que** que le nombre d\'éléments affichés à l\'étudiant.

**Relative aux éléments précédents et suivants**
: Un élément est considéré comme correct si les éléments précédents et suivants sont les mêmes que ceux de la bonne réponse. Le premier élément ne doit pas avoir d\'élément le précédant, et le dernier élément ne doit pas avoir d\'élément le suivant. Ainsi, il y a deux points possibles pour chaque élément, et le score le plus haut possible est égal à **deux fois** le nombre d\'éléments affichés à l\'étudiant.

**Relative à TOUS les éléments précédents et suivants **
: Un élément est considéré comme correct s\'il est précédé et suivi par les mêmes éléments que ceux de la réponse juste. L\'ordre des éléments précédents n\'importe pas, et l\'ordre des éléments suivant non-plus. Ainsi, si ***n*** éléments sont affichés à l\'étudiant, le nombre de points disponibles pour chaque élément est de ***(n-1)***, et la note la plus haute possible à cette question est de ***n x (n - 1)***, ce qui équivaut à ***(n² - n)***.

**Sous-ensemble ordonné le plus long**
: La note est égale au nombre d\'éléments du sous-ensemble ordonné le plus long. La note la plus haute possible est égale au nombre d\'éléments affichés à l\'étudiant. Un sous-ensemble doit avoir au moins deux éléments. Les sous-ensembles ne doivent pas forcément commencer au premier élément (mais c\'est tout à fait possible) et ne doivent pas forcément être contigus. Lorsque plusieurs sous-ensembles de la même longueur sont créés, seul le premier trouvé est comptabilisé, les autres éléments seront marqués comme incorrects.

*Sous-ensemble contigu le plus long**
: La note est égale au nombre d\'éléments du sous-ensemble contigu le plus long. La note la plus haute possible est égale au nombre d\'éléments affichés à l\'étudiant. Un sous-ensemble doit avoir au moins deux éléments. Les sous-ensembles ne doivent pas forcément commencer au premier élément et DOIVENT ÊTRE CONTIGUS. Lorsque plusieurs sous-ensembles de la même longueur sont créés, seul le premier trouvé est comptabilisé, les autres éléments seront marqués comme incorrects.';
$string['horizontal'] = 'Horizontal';
$string['layouttype'] = 'Disposition des éléments';
$string['layouttype_help'] = 'Détermine si les réponses seront affichées verticalement ou horizontalement.';
$string['longestcontiguoussubset'] = 'Sous-ensemble contigu le plus long';
$string['longestorderedsubset'] = 'Sous-ensemble ordonné le plus long';
$string['noresponsedetails'] = 'Désolé, aucun détail n\'est disponible pour la réponse à cette question.';
$string['noscore'] = 'Pas de score';
$string['notenoughanswers'] = 'Les questions ordonnancement doivent avoir plus de {$a} réponses.';
$string['numberingstyle'] = 'Numéroter les choix ?';
$string['numberingstyle123'] = '1., 2., 3., etc.';
$string['numberingstyleABCD'] = 'A., B., C., etc.';
$string['numberingstyleIIII'] = 'I., II., III., etc.';
$string['numberingstyle_desc'] = 'Le style de numérotation par défaut.';
$string['numberingstyle_help'] = 'Choisissez le style de numérotation des éléments glissables dans cette question.';
$string['numberingstyleabc'] = 'a., b., c., etc.';
$string['numberingstyleiii'] = 'i., ii., iii., etc.';
$string['numberingstylenone'] = 'Pas de numérotation';
$string['pluginname'] = 'Ordonnancement';
$string['pluginname_help'] = 'Plusieurs éléments sont affichés de façon désordonnée. Les éléments peuvent être glissés / déposés dans un ordre cohérent.';
$string['pluginname_link'] = 'question/type/ordering';
$string['pluginnameadding'] = 'Ajout d\'une question ordonnancement';
$string['pluginnameediting'] = 'Modification d\'une question ordonnancement';
$string['pluginnamesummary'] = 'Classer les éléments mélangés dans un ordre cohérent.';
$string['positionx'] = 'Position {$a}';
$string['privacy:metadata'] = 'Le plugin type de question ordonnancement n\'enregistre aucune donnée personnelle.';
$string['relativeallpreviousandnext'] = 'Relatif à TOUS les éléments précédents et suivants';
$string['relativenextexcludelast'] = 'Relatif à l\'élément suivant (en excluant le dernier élément)';
$string['relativenextincludelast'] = 'Relatif à l\'élément suivant (en incluant le dernier élément)';
$string['relativeonepreviousandnext'] = 'Relatif aux éléments suivants et précédents';
$string['relativetocorrect'] = 'Relatif à la position';
$string['removeeditor'] = 'Passer en mode texte brut.';
$string['removeitem'] = 'Supprimer l\'élément glissable';
$string['scoredetails'] = 'Ici se trouvent les scores pour chaque élément de cette réponse';
$string['selectall'] = 'Sélectionner tous les éléments';
$string['selectcontiguous'] = 'Sélectionner un sous-ensemble d\'éléments contigus';
$string['selectcount'] = 'Taille du sous-ensemble';
$string['selectcount_help'] = 'Le nombre d\'éléments qui seront affichés quand la question apparaitra dans un test.';
$string['selectrandom'] = 'Sélectionner un sous-ensemble d\'éléments aléatoirement';
$string['selecttype'] = 'Type de sélection d\'éléments';
$string['selecttype_help'] = 'Choisir si vous souhaitez afficher tous les éléments ou un sous-ensemble des éléments.';
$string['showgrading'] = 'Détails de la notation';
$string['showgrading_help'] = 'Choisir de montrer ou de cacher les détails du calcul du score lorsqu\'un étudiant révise une réponse de cette question d\'ordonnancement.';
$string['vertical'] = 'Vertical';
