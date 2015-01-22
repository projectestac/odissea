<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_formulas', language 'fr', branch 'MOODLE_26_STABLE'
 *
 * @package   qtype_formulas
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abserror'] = 'Erreur absolue';
$string['addmorepartsblanks'] = 'Emplacement pour {no} parties supplémentaires';
$string['algebraic_formula'] = 'Formule algébrique';
$string['answer'] = 'Réponse*';
$string['answer_help'] = '**Requis**.
Doit être une liste de nombres ou une liste de chaînes suivant le type de réponse choisi.
Lorsqu\'il n\'y a qu\'une réponse, un nombre ou une chaîne peut être entré directement sans les délimiteurs de liste.
Notez que le nombre d\'éléments de la liste définit le nombre de champs réponses pour cette partie.

<pre class="prettyprint">123<br>[1, 0, 0, 1]<br>a<br>[1, a, b]<br>"exp(-a t)"<br>["vx t","vy t - 0.5 a t^2"]</pre>';
$string['answermark'] = 'Note de la partie*';
$string['answermark_help'] = '**Requis**.
La note attribuée à cette partie de la question, qui doit être un nombre supérieur à 0.
La note totale de la question est la somme des notes de ses différentes parties.

Note: Si la note de la partie est laissée vide ou nulle, la partie sera supprimée lors de l\'enregistrement de la question.';
$string['answerno'] = 'Partie {$a}';
$string['answertype'] = 'Type de réponse';
$string['answertype_help'] = 'Il y a quatre types de réponses.

Les réponses nombre, numérique et formule numérique requièrent un nombre ou une liste de nombres comme réponse.

Les réponses formule algébrique requièrent une chaîne ou une liste de chaînes comme réponse.

Les différents types de réponses imposent diférentes restrictions lors de la saisie des réponses, aussi les étudiants ont besoin de savoir
comment les saisir. Le code de vérification du format dans la question leur signalera
en cours de frappe s\'ils entrent une réponse illégale. Lisez la documentation pour plus de détails.';
$string['answertype_link'] = 'http://code.google.com/p/moodle-coordinate-question/wiki/Documentation#Answer_type';
$string['checkvarshdr'] = 'Test d\'instanciation des variables';
$string['choiceno'] = 'Non';
$string['choiceyes'] = 'Oui';
$string['commonsiunit'] = 'Unités courantes SI';
$string['correctansweris'] = 'Une réponse correcte possible est: {$a}';
$string['correctness'] = 'Critère de notation*';
$string['correctness_help'] = '**Requis**. Vous pouvez choisir une erreur relative ou absolue avec une tolérance.
On ne peut pas utiliser une erreur relative avec une réponse de type formule algébrique.

Pour une définition précise de l\'erreur relative ou absolue quand il y a plusieurs champs de réponse, voir la documentation.';
$string['correctness_link'] = 'http://code.google.com/p/moodle-coordinate-question/wiki/Documentation#Manual_grading_criteria';
$string['defaultanswermark'] = 'Note de partie par défaut';
$string['defaultanswermark_desc'] = 'Note par défaut pour une nouvelle partie de question';
$string['defaultanswertype'] = 'Type de réponse par défaut';
$string['defaultanswertype_desc'] = 'Type de réponse par défaut pour une nouvelle partie de question';
$string['defaultcorrectness'] = 'Critère de notation par défaut';
$string['defaultcorrectness_desc'] = 'Critère de notation par défaut pour une nouvelle partie de question';
$string['defaultunitpenalty'] = 'Pénalité d\'unité par défaut';
$string['defaultunitpenalty_desc'] = 'Pénalité par défaut pour une unité incorrecte (0-1)';
$string['error_algebraic_var'] = 'Erreur de syntaxe de définition de variable algébrique.';
$string['error_answerbox_duplicate'] = 'Chaque espace réservé de champ réponse ne peut être utilisé qu\'une seule fois dans une partie.';
$string['error_answer_missing'] = 'Aucune réponse n\'a été définie.';
$string['error_answertype_mistmatch'] = 'Incompatibilité de type de réponse : un type de réponse numérique requiert un nombre et un type de réponse algébrique requiert une chaîne';
$string['error_criterion'] = 'L\'évaluation du critère de notation doit fournir un nombre unique.';
$string['error_eval_numerical'] = 'certaines expressions ne peuvent pas être évaluées numériquement.';
$string['error_fixed_range'] = 'Erreur de syntaxe d\'intervalle.';
$string['error_forbid_char'] = 'La formule ou l\'expression contient des caractères ou des opérateurs interdits.';
$string['error_forloop'] = 'Erreur de syntaxe dans la boucle for.';
$string['error_forloop_expression'] = 'L\'expression de la boucle for doit être une liste.';
$string['error_forloop_var'] = 'Les variables de la boucle for contiennent des erreurs.';
$string['error_func_param'] = 'Nombre ou type de paramètre incorrect pour la fonction $a()';
$string['error_mark'] = 'La note doit prendre une valeur supérieure à 0.';
$string['error_no_answer'] = 'Une réponse au moins est requise.';
$string['error_placeholder_format'] = 'Format d\'espace réservé incorrect ou caractères illégaux.';
$string['error_placeholder_main_duplicate'] = 'Espace réservé dupliqué dans le texte principal de la question.';
$string['error_placeholder_missing'] = 'Cet espace réservé est manquant dans le texte principal de la question.';
$string['error_placeholder_sub_duplicate'] = 'Ce nom d\'espace réservé a déjà été défini dans une autre partie.';
$string['error_placeholder_too_long'] = 'La longueur du nom de l\'espace réservé est limitée à 40 caractères.';
$string['error_randvars_set_size'] = 'Le nombre d\'éléments générables dans lensemble doit être plus grand que 1.';
$string['error_randvars_type'] = 'Tous les éléments de l\'ensemble doivent avoir exactement le même type et la même taille.';
$string['error_rule'] = 'Erreur d\'analyse de règle!';
$string['error_ruleid'] = 'Une telle règle n\'existe pas dans le fichier avec cet identifant/nom.';
$string['error_subexpression_empty'] = 'Une sous-expression est vide.';
$string['error_syntax'] = 'Erreur de syntaxe.';
$string['error_unit'] = 'Erreur d\'analyse d\'unité!';
$string['error_unitpenalty'] = 'La pénalité doit être un nombre compris entre 0 et 1.';
$string['error_validation_eval'] = 'Erreur lors du test d\'évaluation !';
$string['error_vars_array_index_nonnumeric'] = 'Une valeur non numérique ne peut pas être utilisée comme index de liste.';
$string['error_vars_array_index_out_of_range'] = 'Index de liste hors des bornes.';
$string['error_vars_array_size'] = 'La taille de la liste doit être comprise entre 1 et 1000.';
$string['error_vars_array_type'] = 'Tous les éléments d\'une même liste doivent être du même type, soit nombre soit chaîne.';
$string['error_vars_array_unsubscriptable'] = 'La variable n\'est pas indiciable.';
$string['error_vars_bracket_mismatch'] = 'Délimiteurs incompatibles.';
$string['error_vars_end_separator'] = 'Séparateur d\'affectation manquant à la fin.';
$string['error_vars_name'] = 'La syntaxe du nom de variable est incorrecte.';
$string['error_vars_reserved'] = 'La fonction {$a}() est réesrvée et ne peut pas être utilisée comme nom de variable.';
$string['error_vars_string'] = 'Erreur! Chaîne sans délimiteur " de fin, ou utlisation d\'un caractère non accepté comme \'.';
$string['error_vars_undefined'] = 'La variable \'{$a}\' n\'est pas définie.';
$string['feedback'] = 'Feedback';
$string['feedback_help'] = 'Le feedback de cette partie sera affiché seulement aux étudiants qui n\'ont pas obtenu la note maximale à la partie.
Il peut contenir des variables globales et locales qui seront remplacées par leur valeur';
$string['functiontakesatleasttwo'] = 'La fonction {$a} doit avoir au moins deux arguments';
$string['functiontakesnoargs'] = 'La fonction {$a} ne prend aucun argument';
$string['functiontakesonearg'] = 'la fonction {$a} doit avoir exactement un argument';
$string['functiontakesoneortwoargs'] = 'la fonction {$a} doit avoir un ou deux arguments';
$string['functiontakestwoargs'] = 'La fonction {$a} doit avoir exactement deux arguments';
$string['globaloptions'] = '[Global] -';
$string['globalvarshdr'] = 'Variables';
$string['illegalformulasyntax'] = 'Syntaxe incorrecte pour la formule commençant par « {$a} »';
$string['instantiate'] = 'Instancier';
$string['mainq'] = 'Question principale';
$string['modelanswer'] = 'Réponse modèle';
$string['none'] = 'Aucune';
$string['number'] = 'Nombre';
$string['number_unit'] = 'Nombre et unité';
$string['numdataset'] = 'Nombre de jeux de données';
$string['numeric'] = 'Numérique';
$string['numerical_formula'] = 'Formule numérique';
$string['numerical_formula_unit'] = 'Formule numérique et unité';
$string['numeric_unit'] = 'Numérique et unité';
$string['otherrule'] = 'Autres règles';
$string['otherrule_help'] = 'L\'auteur de la question peut définir ici des règles de conversion additionnelles pour des unités de base supplémentaires.
Voir la documentation pour les usages avancés.';
$string['placeholder'] = 'Nom de l\'espace réservé';
$string['placeholder_help'] = 'Un espace réservé est utilisé pour marquer la place dans le texte principal de la question
où sera inséré le contenu de la partie. C\'est une chaîne de caractères alpha-numériques préfixée par \'**#**\', comme #1, #2a, #2b ou #A.

Si ce champ est laissé vide, la partie sera ajoutée à la fin du texte principal de la question.';
$string['pleaseputananswer'] = 'Veuillez remplir tous les champs.';
$string['pluginname'] = 'Formules';
$string['pluginnameadding'] = 'Ajout d\'une question formules';
$string['pluginnameediting'] = 'Modification d\'une question formules';
$string['pluginname_help'] = 'Pour commencer à utiliser ce type de questions, veuillez lire le <a href="http://code.google.com/p/moodle-coordinate-question/wiki/Tutorial">tutoriel</a>.

Pour des exemples de questions possibles, téléchargez et importez <a href="http://code.google.com/p/moodle-coordinate-question/downloads/list">les exemples</a>,
ou consulter les <a href="http://code.google.com/p/moodle-coordinate-question/wiki/ScreenShots">copies d\'écran</a>.

Pour comprendre les options dans le formulaire ci-dessous, consultez les <a href="http://code.google.com/p/moodle-coordinate-question/wiki/QuestionOptions">options de questions</a>

Pour la documentation complète, lisez <a href="http://code.google.com/p/moodle-coordinate-question/wiki/Documentation">la documentation</a>';
$string['pluginname_link'] = 'question/type/formulas';
$string['pluginnamesummary'] = 'Type de questions avec des valeurs aléatoires et des champs de réponse multiples.
Les champs de réponse peuvent être placés n\'importe où dans le texte de la question, ce qui permet de créer des questions
impliquant des structures variées comme des vecteurs, des polynômes ou des matrices.
D\'autres possibilités comme la vérification des unités et les questions en plusieurs parties sont aussi disponibles et faciles à utiliser.';
$string['postunit'] = 'Unité';
$string['postunit_help'] = 'Vous pouvez spécifier une unité ici. Ce type de question est spécialement conçu pour le système SI, un espace
représente le \'produit\' de différentes \'unités de base\' and <tt> ^ </tt> est utilisé pour les exposants.
De plus <tt> / </tt> peut être utilisé pour les exposants négatifs. Toute permuntation des unités de base est considérée comme équivalente.

Les étudiants doivent utiliser le même format d\'entrée. Par exemple,

<pre class="prettyprint">1 m<br>0.1 m^2<br>20 m s^(-1)<br>400 kg m/s<br>100 kW</pre>';
$string['qtextpreview'] = 'Prévisualiser avec le jeu de données';
$string['questiontext'] = 'Texte de la question';
$string['questiontext_help'] = 'En plus du texte normal vous pouvez aussi utiliser ici des variables globales et des espaces réservés.

Les variables globales seront remplacées par leur valeur et les espaces réservés seront remplacés par la partie de question correspondante.
    Un exemple simple avec des variables globales <tt> A, B, C </tt> et des espaces réservés <tt> #1, #2, #3 </tt> is:

<pre class="prettyprint">Quel est le résultat de {A} + {B}?<br>{#1}<br>Quel est le résultat de {A} - {B}?<br>{#2}<br>Quel est le résultat de {C} / {B}?<br>{#3}</pre>';
$string['relerror'] = 'Erreur relative';
$string['renew'] = 'Actualiser';
$string['ruleid'] = 'Règles de conversion de base';
$string['ruleid_help'] = 'Ce type de question possède un système de conversion d\'unités incorporé et des règles de base de conversions d\'unité.

Les règles de base les plus usuelles sont les règles du "Système international d\'unités SI" qui convertit entre elles les unités standard
comme par exemple pour les longueurs km, m, cm et mm.
Cette option n\'a aucun effet si aucune unité n\'a été spécifiée.';
$string['settingusepopup'] = 'Utiliser les infobulles';
$string['settingusepopup_desc'] = 'Afficher la réponse correcte et le feedback dans une infobulle';
$string['subqoptions'] = 'Options supplémentaires';
$string['subqtext'] = 'Texte de la partie';
$string['subqtext_help'] = 'Le texte de la partie et les emplacements des champs de réponse peuvent être spécifés ici.
Les espaces réservés qui peuvent être utilisés pour marquer les emplacements des champs réponse sont :

<pre class="prettyprint">{_0}<br>{_1}<br>{_2}<br>...<br>{_u}</pre>

<tt> {_0}, {_1}, {_2} </tt> sont les emplacements des champs réponse pour les coordonnées et <tt> {_u} </tt> est la place du champ réponse pour l\'unité.

Tous les champs manquants sont ajoutés automatiquement à la fin du texte de la partie.
Un cas spécial est que si <tt> {_0} </tt> et <tt> {_u} </tt> sont spécifiés consécutivement,
et que la réponse ne comporte qu\'une coordonnée et une unité, c\'est à dire. <tt> {_0}{_u} </tt>,
ils seront combinés en un seul champ réponse long pour entrer à la fois la réponse et l\'unité.';
$string['unit'] = 'Unité';
$string['unitpenalty'] = 'Pénalité pour unité incorrecte (0-1)*';
$string['unitpenalty_help'] = 'Cette option spécifie la pénalité pour une unité incorrecte.

Sa valeur doit être entre 0 et 1. S\'il vaut 1, l\'unité et la réponse doivent être simultanément corrects
pour obtenir une note non nulle à la partie. La valeur et la réponse sont donc traitées comme une seule entité.
Par contre s\'il vaut 0, les étudiants obtiendront la note maximale à la partie dès que leur réponse est juste,
sans tenir compte des caractères figurant après la réponse qu\'il s\'agisse d\'une unité incorrecte ou de caractères quelconques.

Aussi il est recommandé d\'utiliser une pénalité de 1 dès que la question implique une réponse sans unité.';
$string['unsupportedformulafunction'] = 'La fonction {$a} n\'est pas supportée';
$string['vars1'] = 'Variables locales';
$string['vars1_help'] = 'Vous pouvez définir ici des variables locales à la partie de la même manière que les variables globales sont définies
au niveau de la question. Les variables définies ici peuvent être utilisées dans la réponse ou le feedback de la partie.
Leur portée et leur visibilité sontt limitées à la partie.';
$string['vars2'] = 'Variables de notation';
$string['vars2_help'] = 'Toutes les variables locales et les réponses de l\'étudiant peuvent être utilisées ici.
Voir la documentation pour les utilisations avancées.';
$string['vars2_link'] = 'http://code.google.com/p/moodle-coordinate-question/wiki/Documentation#Grading_variables';
$string['varsdata'] = 'Jeu de données instancié';
$string['varsglobal'] = 'Variables globales';
$string['varsglobal_help'] = 'Des formules définissant des variables globales en fonction des variables au hasard ou d\'autres variables globales peuvent être entrées ici.
(toutes les variables au hasard sont disponibles ici). La liste complète des opérations et fonctions disponibles est donnée dans la documentation

<pre class="prettyprint">a = 1.11111;<br>b = exp(3);<br>c = A + a + b;<br>d = sin(1.5*pi()) + c;<br>e = round(a, 0);<br>f = [0,1,2,3][A];<br>g = ["zero","one","two","three"][A];<br>distance = sqrt(a*a + b*b);</pre>';
$string['varsglobal_link'] = 'https://code.google.com/p/moodle-coordinate-question/wiki/Documentation#Variable_assignments';
$string['varsrandom'] = 'Variables au hasard';
$string['varsrandom_help'] = 'Une nouvelle valeur pour chacune de ces variables est choisie aléatoirement au début de chaque tentative.
Ce tirage peut se faire en définissant l\'ensemble des possibilités :

<pre class="prettyprint">A = {1,2,3};<br>C = {[1,-1], [2,-2], [3,-3]};<br>E = {10:100:10, 100, 1000};</pre>

Les élément de l\'ensemble peuvent être des nombres, des chaînes ou des listes de nombres ou de chaînes.
Au début d\'une tentative, un élément de l\'ensemble au second membre sera tiré au sort et assigné à la variable au premier membre.
Pour un ensemble de nombres, vous pouvez utiliser la notation intervalle comme 10:100:10 (voir exemple E ci-dessus.).';
$string['varsrandom_link'] = 'http://code.google.com/p/moodle-coordinate-question/wiki/Documentation#Random_variables';
$string['varsstatistics'] = 'Statistiques';
$string['yougotnright'] = 'Vous avez correctement répondu à {$a->num} parties de cette question.';
