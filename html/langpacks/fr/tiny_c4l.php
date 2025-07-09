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
 * Strings for component 'tiny_c4l', language 'fr', version '4.4'.
 *
 * @package     tiny_c4l
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalhtml'] = 'Page d’administration HTML supplémentaire';
$string['aimedatstudents'] = 'Destinés aux étudiants';
$string['aimedatstudents_desc'] = 'Par défaut, seuls les composants sélectionnés seront disponibles pour les utilisateurs ayant des capacités d’étudiant lors de l’utilisation de l’éditeur. Pour modifier le paramètre par défaut, cochez ou décochez simplement votre propre sélection préférée.';
$string['align-center'] = 'Aligner au centre';
$string['align-left'] = 'Aligner à gauche';
$string['align-right'] = 'Aligner à droite';
$string['allpurposecard'] = 'Carte tout usage';
$string['attention'] = 'Attention';
$string['button_c4l'] = 'C4L';
$string['c4l:viewplugin'] = 'Voir le plug-in C4L';
$string['caption'] = 'Légende';
$string['comfort-reading'] = 'Confort de lecture';
$string['contextual'] = 'Contextuel';
$string['custom'] = 'Personnalisation';
$string['customcompcode'] = 'Composant de code HTML {$a}';
$string['customcompcodedesc'] = 'Le mot <code>{{CUSTOMCLASS}}</code> est une classe obligatoire à côté des classes CSS de vos composants principaux. <br />
Exemple de code :
<pre>
&lt;div class="{{CUSTOMCLASS}} &lt;!-- Ajoutez vos principales classes CSS ici --&gt;"&gt;
    &lt;p&gt;{{PLACEHOLDER}}&lt;/p&gt;
&lt;/div&gt;
</pre>
Sachez que tout code Javascript ou CSS en ligne sera supprimé avant le rendu.';
$string['customcompcount'] = 'Nombre de composants personnalisés';
$string['customcompcountdesc'] = 'Nombre de composants personnalisés à créer';
$string['customcompenable'] = 'Activer le composant {$a}';
$string['customcompenabledesc'] = 'S’il est activé, ce composant sera disponible.';
$string['customcompicon'] = 'Composant icône {$a}';
$string['customcompicondesc'] = 'Composant d’icône facultatif. Taille recommandée : 18x18 pixels.';
$string['customcompname'] = 'Composant de texte du bouton {$a}';
$string['customcompnamedesc'] = 'Texte affiché à l’intérieur du bouton.';
$string['customcomponents'] = 'Composants personnalisés';
$string['customcompsortorder'] = 'Composant d’ordre de tri {$a}';
$string['customcompsortorderdesc'] = 'Définit la position du composant dans l’interface utilisateur.';
$string['customcomptext'] = 'Composant de texte d’espace réservé {$a}';
$string['customcomptextdesc'] = 'Texte à afficher comme espace réservé dans votre composant. Insérez le mot <code>{{PLACEHOLDER}}</code> dans votre code.';
$string['customcomptitle'] = 'Composant personnalisé {$a}';
$string['customcompvariant'] = 'Activer le composant variantes {$a}';
$string['customcompvariantdesc'] = 'Si cette option est activée, une variante pleine largeur sera disponible pour ce composant.';
$string['customimagesbank'] = 'Banque d’images';
$string['customimagesbankdesc'] = 'Pour insérer l’une des images téléchargées dans votre code, ajoutez cette ligne :<br />
<code>&lt;img src="{{filename.extension}}" alt="Image personnalisée"&gt;</code>';
$string['custompreviewcss'] = 'Code CSS';
$string['custompreviewcssdesc'] = 'CSS utilisé pour prévisualiser les composants dans l’éditeur.
<p>Tout code CSS ajouté ici doit également être inclus soit dans votre thème, soit dans les balises de style <code>&lt;style&gt;…&lt;style&gt;</code> et enregistré dans le paramètre <strong>additionalhtmlhead</strong> {$a} ;
 sinon vos styles ne seront pas appliqués à vos composants lors du rendu.</p>';
$string['do-card'] = 'Carte à faire';
$string['dodontcards'] = 'Cartes à faire/à ne pas faire';
$string['dont-card'] = 'Carte à ne pas faire';
$string['dont-card-only'] = 'Carte à ne pas faire uniquement';
$string['duedate'] = 'Date d’échéance';
$string['enablepreview'] = 'Activer l’aperçu';
$string['enablepreview_desc'] = 'Si ce réglage est activé, un aperçu s’affiche au survol de chaque composant.';
$string['estimatedtime'] = 'Temps estimé';
$string['evaluative'] = 'Évaluation';
$string['example'] = 'Exemple';
$string['expectedfeedback'] = 'Commentaires attendus';
$string['figure'] = 'Figure';
$string['full-width'] = 'Pleine largeur';
$string['generalsettings'] = 'Général';
$string['gradingvalue'] = 'Notation';
$string['helper'] = 'Assistant';
$string['helplinktext'] = 'Aide C4L';
$string['inlinetag'] = 'Balise intégrée';
$string['keyconcept'] = 'Concept clef';
$string['learningoutcomes'] = 'Résultats d’apprentissage';
$string['menuitem_c4l'] = 'Composants pour l’apprentissage (C4L)';
$string['min'] = 'min';
$string['notintendedforstudents'] = 'Non destiné aux étudiants';
$string['notintendedforstudents_desc'] = 'Par défaut, les composants évaluatifs et procéduraux ne sont pas destinés aux utilisateurs ayant des capacités d’étudiant à utiliser dans l’éditeur. Pour modifier le paramètre par défaut, cochez les composants que vous souhaitez mettre à la disposition des étudiants.';
$string['ordered-list'] = 'Éléments ordonnés';
$string['pluginname'] = 'Composants pour l’apprentissage (C4L)';
$string['preview'] = 'Aperçu';
$string['previewdefault'] = 'Placer le pointeur sur un composant pour voir son aperçu.';
$string['privacy:preference:components_variants'] = 'Variantes préférées pour chaque composant';
$string['procedural'] = 'Procédure';
$string['proceduralcontext'] = 'Contexte procédural';
$string['quote'] = 'Citation';
$string['readingcontext'] = 'Contexte de lecture';
$string['reminder'] = 'Rappel';
$string['tag'] = 'Balise';
$string['textplaceholder'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
$string['tip'] = 'Conseil';
