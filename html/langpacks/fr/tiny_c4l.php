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
 * Strings for component 'tiny_c4l', language 'fr', version '4.5'.
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
$string['aiuseallowed'] = 'Usage de l’IA autorisé';
$string['aiusenotallowed'] = 'Usage de l’IA interdit';
$string['aiusereported'] = 'Usage de l’IA à déclarer';
$string['align-center'] = 'Aligner au centre';
$string['align-left'] = 'Aligner à gauche';
$string['align-right'] = 'Aligner à droite';
$string['allpurposecard'] = 'Carte tout usage';
$string['attention'] = 'Attention';
$string['button_c4l'] = 'C4L';
$string['c4l:use'] = 'Utiliser TinyMCE C4L';
$string['c4l:viewplugin'] = 'Voir le plugin C4L';
$string['caption'] = 'Légende';
$string['comfort-reading'] = 'Confort de lecture';
$string['conceptreview'] = 'Rappel de notion';
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
$string['docs'] = 'Quand utiliser';
$string['docs_aiuseallowed_desc'] = 'Indique que le recours à des outils d’intelligence artificielle est permis pour une activité ou une évaluation donnée.';
$string['docs_aiuseallowed_use1'] = 'L’usage d’outils d’intelligence artificielle est autorisé dans le cadre du processus d’apprentissage.';
$string['docs_aiuseallowed_use2'] = 'Vous souhaitez éviter toute ambiguïté sur le fait que l’usage de l’intelligence artificielle est autorisé.';
$string['docs_aiusenotallowed_desc'] = 'Indique clairement que l’usage d’outils d’intelligence artificielle est interdit pour une activité ou une évaluation donnée.';
$string['docs_aiusenotallowed_use1'] = 'L’évaluation exige un travail personnel.';
$string['docs_aiusenotallowed_use2'] = 'L’objectif d’apprentissage repose sur la démonstration d’une compétence individuelle.';
$string['docs_aiusenotallowed_use3'] = 'La tâche s’effectue dans des conditions encadrées ou d’examen.';
$string['docs_aiusereported_desc'] = 'Indique que l’usage d’outils d’intelligence artificielle est autorisé, mais doit être explicitement déclaré par l’apprenant.';
$string['docs_aiusereported_use1'] = 'L’usage de l’IA est autorisé mais doit être documenté.';
$string['docs_aiusereported_use2'] = 'La transparence et l’usage responsable de l’IA font partie des objectifs d’apprentissage.';
$string['docs_aiusereported_use3'] = 'Les étudiants sont tenus de réfléchir de manière critique à leur usage des outils d’IA.';
$string['docs_aiusereported_use4'] = 'La politique de l’établissement exige la déclaration de tout recours à l’IA.';
$string['docs_allpurposecard_desc'] = 'Présente un contenu dans un cadre visuel propre, afin de le distinguer ou de lui donner un caractère particulier.';
$string['docs_allpurposecard_use1'] = 'Dans un contenu théorique, elle crée un contexte distinct du fil principal.';
$string['docs_allpurposecard_use2'] = 'Dans les tests ou autres contextes d’évaluation ou d’entraînement combinant théorie et pratique, elle peut servir de conteneur pour les éléments théoriques.';
$string['docs_attention_desc'] = 'Attire l’attention de l’apprenant sur un point ou une information importante.';
$string['docs_attention_use1'] = 'Pour signaler à l’apprenant un point de vigilance à prendre en compte en lien avec un sujet d’apprentissage.';
$string['docs_attention_use2'] = 'Dans le cadre d’un parcours d’apprentissage prédéfini, pour attirer l’attention de l’apprenant sur une manière recommandée (ou attendue) de procéder dans un contexte donné.';
$string['docs_conceptreview_desc'] = 'Fait revenir une notion déjà apprise qui peut être utile à l’apprenant pour mieux comprendre une nouvelle notion en cours d’introduction.';
$string['docs_conceptreview_use1'] = 'Aide l’apprenant à se remémorer l’intérêt d’une notion déjà étudiée, en lui faisant mieux percevoir son rôle dans l’ensemble du parcours d’apprentissage.';
$string['docs_conceptreview_use2'] = 'Utile lorsqu’on travaille sur un nouveau contenu présentant une charge cognitive élevée, car cela permet à l’enseignant de donner un accès rapide aux connaissances antérieures.';
$string['docs_dodontcards_desc'] = 'Propose une présentation comparative permettant à l’apprenant d’identifier, dans un même ensemble visuel, les bonnes et les mauvaises façons de faire ou d’aborder une idée.';
$string['docs_dodontcards_use1'] = 'Dans un contexte pratique, le plus souvent pour clarifier ce qu’il faut faire et ne pas faire.';
$string['docs_dodontcards_use2'] = 'Dans un contexte théorique, pour aider l’apprenant à distinguer une bonne approche d’une mauvaise approche d’une notion ou d’une idée particulière.';
$string['docs_duedate_desc'] = 'Affiche la date à laquelle une tâche est attendue de la part de l’apprenant.';
$string['docs_duedate_use1'] = 'Pour mettre visuellement en évidence la date limite, afin d’aider l’apprenant à la garder à l’esprit.';
$string['docs_estimatedtime_desc'] = 'Affiche le temps estimé nécessaire à l’apprenant pour réaliser une activité.';
$string['docs_estimatedtime_use1'] = 'Dans un contexte théorique, pour aider l’apprenant à estimer la durée approximative d’un contenu donné.';
$string['docs_estimatedtime_use2'] = 'Dans un contexte pratique, pour indiquer le temps optimal ou requis pour réaliser une tâche.';
$string['docs_example_desc'] = 'Présente un exemple significatif qui aide l’apprenant à comprendre une notion ou une idée expliquée dans le contenu.';
$string['docs_example_use1'] = 'Pour présenter un exemple nécessitant un certain développement.';
$string['docs_example_use2'] = 'Dans un contexte pratique, pour montrer une façon précise de résoudre le problème.';
$string['docs_expectedfeedback_desc'] = 'Permet à l\'apprenant d\'obtenir un retour, ou des informations associées, concernant une tâche donnée.';
$string['docs_expectedfeedback_use1'] = 'Pour fournir à l’apprenant un retour en lien avec la tâche en cours.';
$string['docs_expectedfeedback_use2'] = 'Si le retour n’est pas donné immédiatement, pour indiquer à quel moment l’apprenant le recevra.';
$string['docs_expectedfeedback_use3'] = 'Si le retour n’est pas donné immédiatement, pour préciser sous quelle forme il sera fourni et/ou les conditions à remplir pour le recevoir.';
$string['docs_figure_desc'] = 'Insère une image dans le contenu, avec possibilité d’ajouter une note de bas de page et la mention de la source.';
$string['docs_figure_use1'] = 'Pour illustrer une notion mentionnée dans le contenu.';
$string['docs_figure_use2'] = 'Pour apporter de la précision ou du détail à une notion ou à une idée particulière.';
$string['docs_figure_use3'] = 'Pour aider à réduire la complexité d’une notion qui exige un niveau d’abstraction important pour être comprise.';
$string['docs_furtherreading_desc'] = 'Une sélection de ressources complémentaires permettant à l’apprenant d’approfondir, d’élargir ou de renforcer le contenu.';
$string['docs_furtherreading_use1'] = 'Pour proposer des ressources facultatives aux apprenants qui souhaitent explorer un sujet plus en profondeur.';
$string['docs_furtherreading_use2'] = 'Pour compléter le contenu principal par d’autres points de vue, explications ou formats.';
$string['docs_furtherreading_use3'] = 'Pour répondre à des préférences d’apprentissage différentes en proposant des types de ressources variés.';
$string['docs_furtherreading_use4'] = 'Pour orienter vers des ressources de référence qui renforcent les idées essentielles.';
$string['docs_gradingvalue_desc'] = 'Affiche la valeur relative de la note attribuée à une tâche donnée.';
$string['docs_gradingvalue_use1'] = 'Dans un contexte pratique uniquement, il indique la part que représente la tâche en cours dans la note finale.';
$string['docs_inlinetag_desc'] = 'Permet de faire référence à une catégorie ou à une autre taxonomie à l’intérieur d’un paragraphe.';
$string['docs_inlinetag_use1'] = 'Lorsque le composant Balise a servi à définir une catégorie ou une autre taxonomie, la balise en ligne permet d’y faire référence dans le texte.';
$string['docs_inlinetag_use2'] = 'Pour des catégories implicites liées au statut du contenu, par exemple pour indiquer qu’un article particulier a été ajouté récemment à l’aide d’une balise «&nbsp;Nouveau&nbsp;».';
$string['docs_keyconcept_desc'] = 'Met en valeur une notion ou une idée.';
$string['docs_keyconcept_use1'] = 'Définition concise d’une notion pertinente.';
$string['docs_keyconcept_use2'] = 'Brève synthèse d’une notion particulière expliquée plus haut.';
$string['docs_keyconcept_use3'] = 'En sciences, pour afficher des formules ou des expressions mathématiques abstraites.';
$string['docs_learningoutcomes_desc'] = 'Affiche les résultats d’apprentissage attendus à l’issue d’un cours ou d’une activité.';
$string['docs_learningoutcomes_use1'] = 'Pour afficher les buts d’apprentissage (les résultats globaux visés par un cours ou un programme).';
$string['docs_learningoutcomes_use2'] = 'Pour afficher les objectifs d’apprentissage (ce que l’apprenant est censé acquérir après avoir participé à une activité d’apprentissage donnée).';
$string['docs_nodocsavailable_desc'] = 'Aucune documentation disponible pour ce composant.';
$string['docs_proceduralcontext_desc'] = 'Fournit à l’apprenant une description détaillée d’une procédure à suivre dans un contexte donné.';
$string['docs_proceduralcontext_use1'] = 'Pour inviter l’apprenant à effectuer une action particulière.';
$string['docs_proceduralcontext_use2'] = 'Pour permettre à l’apprenant de savoir où il en est, en ce moment, dans son parcours d’apprentissage.';
$string['docs_proceduralcontext_use3'] = 'Dans un contexte pratique, pour détailler les caractéristiques du rendu qui est attendu.';
$string['docs_quote_desc'] = 'Met en valeur une citation textuelle d’un auteur ou d’une œuvre extérieure à notre contenu.';
$string['docs_quote_use1'] = 'Pour mettre en avant une notion ou une idée particulière, en soulignant son importance ou en aidant l’apprenant à en comprendre la portée et les implications.';
$string['docs_quote_use2'] = 'Pour présenter le point de vue éclairé d’une personne expérimentée sur un sujet donné.';
$string['docs_quote_use3'] = 'Pour apporter du contexte à un sujet particulier.';
$string['docs_quote_use4'] = 'Pour afficher des jugements argumentés émanant d’auteurs reconnus ou de personnages historiques.';
$string['docs_readingcontext_desc'] = 'Offre une mise en forme visuelle adaptée à la lecture pour des passages de texte intégrés au contenu principal.';
$string['docs_readingcontext_use1'] = 'Pour rendre un texte plus lisible ou plus facilement repérable comme étant littéraire ou spécialisé.';
$string['docs_readingcontext_use2'] = 'Pour exprimer l’idée d’un contexte distinct, où l’action de lecture prévaut.';
$string['docs_readingcontext_use3'] = 'Pour afficher une citation sensiblement plus longue que le format habituel d’une seule phrase, pour lequel le composant Citation est mieux adapté.';
$string['docs_reminder_desc'] = 'Rappelle une notion particulière pouvant aider l’apprenant à mieux comprendre le sujet d’apprentissage en cours.';
$string['docs_reminder_use1'] = 'Lors de l’introduction d’une nouvelle notion nécessitant des connaissances préalables particulières.';
$string['docs_reminder_use2'] = 'Après l’explication d’une notion complexe, pour en résumer la partie essentielle que l’apprenant est invité à retenir.';
$string['docs_reminder_use3'] = 'Pour raviver la mémoire de l’apprenant à propos d’une notion théorique nécessaire à la résolution d’un exercice.';
$string['docs_tag_desc'] = 'Définit un cadre contextuel relatif au type de sujet, à la catégorie ou à une taxonomie comparable.';
$string['docs_tag_use1'] = 'Pour présenter un contenu sous une taxonomie particulière, suivant une logique différente de la hiérarchie principale des titres.';
$string['docs_tag_use2'] = 'Dans un contexte pratique, pour distinguer les différents champs de compétence mobilisés dans sa mise en œuvre.';
$string['docs_tip_desc'] = 'Propose un conseil, une suggestion ou un indice.';
$string['docs_tip_use1'] = 'Pour fournir un conseil ou une orientation sur le contenu lui-même, et non sur les aspects procéduraux liés à l’apprentissage.';
$string['docs_tip_use2'] = 'Pour lever une ambiguïté sur une notion.';
$string['docs_tip_use3'] = 'Pour aider à prévenir une erreur fréquente, lorsqu’une notion ou une idée est souvent mal comprise ou prête à confusion.';
$string['docs_usecases'] = 'Cas d\'usage';
$string['dodontcards'] = 'Cartes à faire/à ne pas faire';
$string['dont-card'] = 'Carte à ne pas faire';
$string['dont-card-only'] = 'Carte à ne pas faire uniquement';
$string['duedate'] = 'Date d’échéance';
$string['enabledocs'] = 'Activer la documentation';
$string['enabledocs_desc'] = 'Si cette option est activée, un panneau de documentation s’affiche à côté de l’aperçu.';
$string['enablepreview'] = 'Activer l’aperçu';
$string['enablepreview_desc'] = 'Si ce réglage est activé, un aperçu s’affiche au survol de chaque composant.';
$string['estimatedtime'] = 'Temps estimé';
$string['evaluative'] = 'Évaluation';
$string['example'] = 'Exemple';
$string['expectedfeedback'] = 'Commentaires attendus';
$string['figure'] = 'Figure';
$string['full-width'] = 'Pleine largeur';
$string['furtherreading'] = 'Pour aller plus loin';
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
$string['previewdocsdefault'] = 'Placer le pointeur sur un composant pour afficher ses cas d’usage recommandés.';
$string['privacy:preference:components_variants'] = 'Variantes préférées pour chaque composant';
$string['procedural'] = 'Procédure';
$string['proceduralcontext'] = 'Contexte procédural';
$string['quote'] = 'Citation';
$string['readingcontext'] = 'Contexte de lecture';
$string['reminder'] = 'Rappel';
$string['tag'] = 'Balise';
$string['textplaceholder'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
$string['tip'] = 'Conseil';
