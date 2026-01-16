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
 * Strings for component 'qtype_formulas', language 'fr', version '4.5'.
 *
 * @package     qtype_formulas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abserror'] = 'Erreur absolue';
$string['addmorepartsblanks'] = 'Emplacement pour {no} parties supplémentaires';
$string['algebraic_formula'] = 'Formule algébrique';
$string['allfieldsempty'] = 'Tous les champs d\'entrée sont vides.';
$string['answer'] = 'Réponse*';
$string['answer_help'] = '**Requis**.
Doit être un nombre / une liste de nombres, ou une chaîne / une liste de chaînes selon le type de réponse choisi.
Veuillez noter que le nombre d’éléments dans la liste détermine le nombre de champs de réponse pour cette partie.
<pre class="prettyprint">123<br>[1, 0, 0, 1]<br>a<br>[1, a, b]<br>"exp(-a t)"<br>["vx t","vy t - 0.5 a t^2"]</pre>';
$string['answercombinedunitmulti'] = 'Réponse et unité pour la partie {$a->part}';
$string['answercombinedunitsingle'] = 'Réponse et unité';
$string['answercoordinatemulti'] = 'Champ de réponse {$a->numanswer} pour la partie {$a->part}';
$string['answercoordinatesingle'] = 'Champ de réponse {$a->numanswer}';
$string['answermark'] = 'Note de la partie*';
$string['answermark_help'] = '**Requis**.
Le nombre de points attribués à la réponse de cette partie, qui doit être un nombre supérieur à 0.
La note par défaut de l’ensemble de la question correspond à la somme des points de toutes ses parties.

Remarque : si le champ de points de cette partie est laissé vide et qu’aucune réponse n’est fournie, la partie sera supprimée lors de l’enregistrement de la question.';
$string['answermulti'] = 'Réponse pour la partie {$a->part}';
$string['answerno'] = 'Partie {$a}';
$string['answernotacceptable'] = 'Cette réponse n\'est pas valide pour le type de réponse donné : {$a}.';
$string['answernotunique'] = 'Il y a d\'autres réponses correctes.';
$string['answernotunique_help'] = 'Si cette option est cochée, l\'étudiant verra « Une réponse correcte est : ... » au lieu de « La réponse correcte est : ... » lorsqu\'il examinera sa tentative.';
$string['answersingle'] = 'Réponse';
$string['answertype'] = 'Type de réponse';
$string['answertype_help'] = 'Il existe quatre types de réponses.

Les réponses de type nombre, formule numérique ou formule numérique symbolique nécessitent un nombre ou une liste de nombres comme réponse.

Les réponses de type formule algébrique nécessitent une chaîne de caractères ou une liste de chaînes comme réponse.

Chaque type de réponse impose des contraintes spécifiques lors de la saisie, il est donc important que les étudiants sachent comment les entrer correctement. La vérification de format dans le code de la question les avertira également en cas d’erreur de saisie.

Veuillez consulter la documentation pour plus de détails.';
$string['answertype_link'] = 'https://dynamiccourseware.org/';
$string['answerunitmulti'] = 'Unité pour la partie {$a->part}';
$string['answerunitsingle'] = 'Unité';
$string['caretwarning'] = 'Notez que ^ signifie XOR (= ou exclusif) dans les réponses types, sauf pour les formules algébriques. Pour l\'exponentiation, utiliser plutôt **.';
$string['checkvarshdr'] = 'Test d’instanciation des variables';
$string['choiceno'] = 'Non';
$string['choiceyes'] = 'Oui';
$string['commonsiunit'] = 'Unités courantes SI';
$string['correctansweris'] = 'Une réponse correcte possible est : {$a}';
$string['correctfeedback'] = 'Pour toute réponse correcte';
$string['correctfeedback_help'] = 'Ce feedback sera affiché aux étudiants ayant le maximum de points sur cette partie. Il peut intégrer des variables globales ou locales qui seront remplacées par leurs valeurs.';
$string['correctness'] = 'Critère de notation*';
$string['correctness_help'] = '**Requis**. Vous pouvez choisir une erreur relative ou absolue avec une tolérance.
On ne peut pas utiliser une erreur relative avec une réponse de type formule algébrique.

Pour une définition précise de l’erreur relative ou absolue quand il y a plusieurs champs de réponse, voir la documentation.';
$string['correctness_link'] = 'https://dynamiccourseware.org/';
$string['correctnessexpert'] = 'Expert';
$string['correctnesssimple'] = 'Mode simplifié';
$string['defaultanswermark'] = 'Note de partie par défaut';
$string['defaultanswermark_desc'] = 'Note par défaut pour une nouvelle partie de question';
$string['defaultanswertype'] = 'Type de réponse par défaut';
$string['defaultanswertype_desc'] = 'Type de réponse par défaut pour une nouvelle partie de question';
$string['defaultcorrectness'] = 'Critère de notation par défaut';
$string['defaultcorrectness_desc'] = 'Critère de notation par défaut pour une nouvelle partie de question';
$string['defaultunitpenalty'] = 'Pénalité d’unité par défaut';
$string['defaultunitpenalty_desc'] = 'Pénalité par défaut pour une unité incorrecte (0-1)';
$string['defaultwidth_algebraic_formula'] = 'Type de réponse « Formule algébrique »';
$string['defaultwidth_algebraic_formula_desc'] = 'Largeur par défaut du champ de saisie pour le type de réponse « Formule algébrique »';
$string['defaultwidth_number'] = 'Type de réponse « Nombre »';
$string['defaultwidth_number_desc'] = 'Largeur par défaut du champ de saisie pour le type de réponse « Nombre »';
$string['defaultwidth_number_unit'] = 'Champ combiné « Nombre »';
$string['defaultwidth_number_unit_desc'] = 'Largeur par défaut du champ de saisie combiné pour le type de réponse « Nombre »';
$string['defaultwidth_numeric'] = 'Type de réponse « Numérique »';
$string['defaultwidth_numeric_desc'] = 'Largeur par défaut du champ de saisie pour le type de réponse « Numérique »';
$string['defaultwidth_numeric_unit'] = 'Champ combiné « Numérique »';
$string['defaultwidth_numeric_unit_desc'] = 'Largeur par défaut du champ de saisie combiné pour le type de réponse « Numérique »';
$string['defaultwidth_numerical_formula'] = 'Type de réponse « Formule numérique »';
$string['defaultwidth_numerical_formula_desc'] = 'Largeur par défaut du champ de saisie pour le type de réponse « Formule numérique »';
$string['defaultwidth_numerical_formula_unit'] = 'Champ combiné « Formule numérique »';
$string['defaultwidth_numerical_formula_unit_desc'] = 'Largeur par défaut du champ de saisie combiné pour le type de réponse « Formule numérique »';
$string['defaultwidth_unit'] = 'Champ d\'unité séparé';
$string['defaultwidth_unit_desc'] = 'Largeur par défaut du champ d\'unité distinct';
$string['defaultwidthunit'] = 'Unité de longueur';
$string['defaultwidthunit_desc'] = 'Unité de longueur utilisée pour les paramètres de largeur par défaut ci-dessous. Les unités « em » ou « rem » correspondent approximativement à la largeur d\'un chiffre.';
$string['error_algebraic_relerr'] = 'L\'erreur relative (_relerr) ne peut être utilisé pour les réponses de type algébrique.';
$string['error_algebraic_var'] = 'Erreur de syntaxe de définition de variable algébrique.';
$string['error_algvar_numbers'] = 'Les variables algébriques ne peuvent qu\'être initialisées grâce à une liste de nombres.';
$string['error_answer_missing'] = 'Aucune réponse n’a été définie.';
$string['error_answer_missing_in_part'] = 'Aucune réponse n\'a été définie pour la partie {$a}.';
$string['error_answerbox_duplicate'] = 'Les marqueurs de la boîte de réponse doivent être uniques, la deuxième instance de {$a} doit être trouvée.';
$string['error_answertype_mistmatch'] = 'Incompatibilité de type de réponse : un type de réponse numérique requiert un nombre et un type de réponse algébrique requiert une chaîne';
$string['error_bitshift_integer'] = 'L\'opérateur de décalage de bits ne doit être utilisé qu\'avec des nombres entiers.';
$string['error_bitshift_negative'] = 'Le décalage de bits par un nombre négatif {$a} n\'est pas autorisé.';
$string['error_bitwand_integer'] = 'L\'opérateur ET au niveau du bit ne doit être utilisée qu\'avec des nombres entiers.';
$string['error_bitwor_integer'] = 'La fonction OR par bit ne doit être utilisée qu\'avec des nombres entiers.';
$string['error_bitwxor_integer'] = 'La fonction XOR (ou exclusif) par bit ne doit être utilisée qu\'avec des nombres entiers.';
$string['error_cannotusealgebraic'] = 'La variable algébrique « {$a} » ne peut pas être utilisée dans ce contexte.';
$string['error_criterion'] = 'L’évaluation du critère de notation doit fournir un nombre unique.';
$string['error_criterion_empty'] = 'Le critère de notation ne peut être vide.';
$string['error_damaged_question'] = 'Données invalides. La question de type Formules a peut-être été endommagée, par exemple lors d’un échec d’importation ou de restauration.';
$string['error_db_delete'] = 'Impossible de supprimer l’enregistrement de la base de données, table {$a}.';
$string['error_db_missing_options'] = 'La question de type Formules avec l’ID {$a} ne possédait pas d’enregistrement d’options. Utilisation des valeurs par défaut.';
$string['error_db_read'] = 'Impossible de lire la base de données, table {$a}.';
$string['error_db_write'] = 'Impossible d’écrire dans la base de données, table {$a}.';
$string['error_diff_binary_function_needslist'] = 'Lors de l’utilisation de map() avec la fonction binaire {$a}, au moins un des arguments doit être une liste.';
$string['error_diff_binary_function_two'] = 'Lors de l’utilisation de map() avec la fonction binaire {$a}, deux arguments sont attendus.';
$string['error_diff_binary_operator_needslist'] = 'Lors de l’utilisation de map() avec l’opérateur binaire {$a}, au moins un des arguments doit être une liste.';
$string['error_diff_binary_operator_two'] = 'Lors de l’utilisation de map() avec l’opérateur binaire {$a}, deux arguments sont attendus.';
$string['error_diff_binary_samesize'] = 'Lorsque l\'on utilise map() avec deux listes, celles-ci doivent avoir la même taille.';
$string['error_diff_first'] = 'Le premier argument de list() doit être une liste.';
$string['error_diff_first_invalid'] = '« {$a} » n’est pas un premier argument valide pour la fonction map().';
$string['error_diff_firstlist_content'] = 'Quand on utilise diff(), la première liste ne peut contenir que des nombres ou des chaînes de caractères.';
$string['error_diff_firstlist_mismatch'] = 'diff() : incompatibilité de type pour l’élément #{$a} (indexé à partir de zéro) de la première liste.';
$string['error_diff_function_more_args'] = 'La fonction « {$a} » ne peut pas être utilisée avec map(), car elle attend plus de deux arguments.';
$string['error_diff_function_no_args'] = 'La fonction « {$a} » ne peut pas être utilisée avec map(), car elle n\'accepte aucun argument.';
$string['error_diff_samesize'] = 'diff() nécessite deux listes de taille identique.';
$string['error_diff_second'] = 'Le second argument de diff() doit être une liste';
$string['error_diff_secondlist_mismatch'] = 'diff() : incompatibilité de type pour l\'élément #{$a} (indexé par zéro) de la seconde liste.';
$string['error_diff_third'] = 'Le troisième argument de diff() ne peut être utilisé que pour des chaînes de caractères.';
$string['error_diff_unary_function'] = 'Lors de l’utilisation de map() avec la fonction unaire {$a}, une seule liste est acceptée.';
$string['error_diff_unary_needslist'] = 'Lors de l’utilisation de map() avec « {$a} », l’argument doit être une liste.';
$string['error_diff_unary_operator'] = 'Lors de l’utilisation de map() avec l’opérateur unaire {$a}, une seule liste est acceptée.';
$string['error_distribution_outcomes'] = '{$a} attend que le nombre de résultats favorables soit un entier non négatif.';
$string['error_distribution_tries'] = '{$a} attend que le nombre d’essais soit un entier non négatif.';
$string['error_divzero'] = 'La division par zéro n\'est pas définie.';
$string['error_emptyrange'] = 'Erreur d’évaluation : l’intervalle de {$a->start} à {$a->end} avec un pas de {$a->step} sera vide.';
$string['error_emptystack'] = 'Erreur d’évaluation : pile vide -  avez-vous fourni suffisamment d’arguments pour la fonction ou l’opérateur ?';
$string['error_eval_numerical'] = 'Certaines expressions ne peuvent pas être évaluées numériquement.';
$string['error_evaluate_invocation'] = 'Mauvais appel de {$a}.';
$string['error_evaluation_unknown_nan_inf'] = 'Erreur inconnue lors de l’application de l’opérateur {$a} : le résultat était l’infini (positif ou négatif) ou n’était pas un nombre (NaN).';
$string['error_expectbraceorstatement'] = 'Erreur de syntaxe : { ou instruction attendue.';
$string['error_expectbracketorvarname'] = 'Erreur de syntaxe : [ ou nom de variable attendu.';
$string['error_expectclosingparen'] = 'Erreur de syntaxe : ) attendue.';
$string['error_expected_intindex'] = 'Erreur d\'évaluation : l\'index devrait être un entier, il s\'agit de « {$a} ».';
$string['error_expected_number'] = 'Nombre attendu.';
$string['error_expected_number_found'] = 'Nombre attendu, trouvé {$a->found}.';
$string['error_expected_number_found_algebraicvar'] = 'Nombre attendu, variable algébrique trouvée.';
$string['error_expected_number_found_list'] = 'Nombre attendu, liste trouvée.';
$string['error_expected_scalar'] = 'Valeur scalaire attendue.';
$string['error_expected_scalar_found'] = 'Valeur scalaire attendue, trouvée {$a->found}.';
$string['error_expected_scalar_found_algebraicvar'] = 'Valeur scalaire attendue, variable algébrique trouvée.';
$string['error_expected_scalar_found_list'] = 'Valeur scalaire attendue, liste trouvée.';
$string['error_expects_number'] = '{$a->who} attend un nombre.';
$string['error_expects_number_found'] = '{$a->who} attend un nombre, trouvé {$a->found}.';
$string['error_expects_scalar'] = '{$a->who} attend une valeur scalaire.';
$string['error_expects_scalar_found'] = '{$a->who} attend une valeur scalaire, trouvé {$a->found}.';
$string['error_fact_toolarge'] = 'Impossible de calculer {$a} ! sur cette plateforme, le résultat est plus grand que PHP_MAX_FLOAT.';
$string['error_fixed_range'] = 'Erreur de syntaxe d’intervalle.';
$string['error_for_expectcolon'] = 'Erreur de syntaxe : « : » attendu.';
$string['error_for_expectidentifier'] = 'Erreur de syntaxe : identifiant attendu';
$string['error_for_expectparen'] = 'Erreur de syntaxe : « ( » attendu après « for ».';
$string['error_forbid_char'] = 'La formule ou l’expression contient des caractères ou des opérateurs interdits.';
$string['error_forgotoperator'] = 'Erreur de syntaxe : un opérateur semble avoir été oublié ?';
$string['error_forloop'] = 'Erreur de syntaxe dans la boucle for.';
$string['error_forloop_expression'] = 'L’expression de la boucle for doit être une liste.';
$string['error_forloop_var'] = 'Les variables de la boucle for contiennent des erreurs.';
$string['error_func_all_lists'] = '{$a} s\'attend à ce que ses arguments soient des listes.';
$string['error_func_argcount'] = 'Nombre d\'arguments non valide pour la fonction « {$a->fonction} » : {$a->count} donné.';
$string['error_func_first_int'] = '{$a} s\'attend à ce que son premier argument soit un entier.';
$string['error_func_first_list'] = '{$a} s\'attend à ce que son premier argument soit une liste.';
$string['error_func_first_nnegint'] = '{$a} s\'attend à ce que son premier argument soit un entier non négatif.';
$string['error_func_first_number'] = '{$a} s\'attend à ce que son premier argument soit un nombre.';
$string['error_func_first_nzeroint'] = '{$a} s\'attend à ce que son premier argument soit un entier non nul.';
$string['error_func_first_posint'] = '{$a} s\'attend à ce que son premier argument soit un entier positif.';
$string['error_func_nan'] = 'Le résultat de la fonction « {$a} » n\'est pas un nombre.';
$string['error_func_nnegint'] = '{$a} s\'attend à ce que son argument soit un entier non négatif.';
$string['error_func_param'] = 'Nombre ou type de paramètre incorrect pour la fonction {$a}()';
$string['error_func_paren'] = 'Erreur de syntaxe : la fonction doit être suivie d\'une parenthèse ouvrante.';
$string['error_func_positive'] = 'On s\'attend à ce que l\'argument de {$a} Ooit un nombre positif.';
$string['error_func_second_int'] = 'On s\'attend à ce que le second argument de {$a} soit un entier.';
$string['error_func_second_nnegint'] = 'On s\'attend à ce que le second argument de {$a} soit un entier non négatif.';
$string['error_func_second_nzeronum'] = 'On s\'attend à ce que le deuxième argument de {$a} soit un nombre non nul.';
$string['error_func_second_posint'] = 'On s\'attend à ce que le second argument de {$a} soit un entier positif.';
$string['error_func_third_posint'] = 'On s\'attend à ce que le troisième argument de {$a} soit un entier positif.';
$string['error_grading_error'] = 'Erreur d\'évaluation. Il s\'agit probablement du résultat d\'un fichier d\'importation incorrect ou d\'une corruption de la base de données.';
$string['error_grading_not_one'] = 'Le critère d’évaluation doit renvoyer 1 pour les réponses correctes. {$a} a été trouvé à la place.';
$string['error_grading_single_expression'] = 'Le critère de notation devrait être une seule expression. {$a} est trouvé à la place.';
$string['error_import_missing_field'] = 'Champ manquant : {$a}';
$string['error_import_missing_parts'] = 'La question « {$a} » ne contient aucune partie.';
$string['error_in_answer'] = 'Erreur dans la réponse #{$a->answerno} : {$a->message}';
$string['error_indexoutofrange'] = 'Erreur d\'évaluation : l\'index {$a} est hors de portée.';
$string['error_inv_consec'] = 'Lors de l\'utilisation de inv(), les nombres de la liste doivent être consécutifs.';
$string['error_inv_integers'] = 'On s\'attend à ce que tous les éléments de la liste de inv() soient des entiers ; les flottants seront tronqués.';
$string['error_inv_list'] = 'L\'argument de inv() doit être une liste';
$string['error_inv_nodup'] = 'Lors de l\'utilisation de inv(), la liste ne doit pas contenir plusieurs fois le même nombre.';
$string['error_inv_smallest'] = 'Lors de l\'utilisation de inv(), le plus petit nombre de la liste doit être 0 ou 1.';
$string['error_invalidalgebraic'] = '« {$a} » n\'est pas une expression algébrique valide.';
$string['error_invalidargsep'] = 'Erreur de syntaxe : utilisation incorrecte du séparateur « , ».';
$string['error_invalidcodepoint'] = 'Séquence d\'échappement de code UTF-8 non valide.';
$string['error_invalidcodepoint_toolarge'] = 'Séquence d\'échappement de code UTF-8 non valide : code supérieur à 0x10FFFF.';
$string['error_invalidcontext'] = 'Le contexte de la variable donnée n\'est pas valide, l\'importation est interrompue.';
$string['error_invalidrandvardef'] = 'Définition incorrecte d\'une variable aléatoire - il faut fournir une liste de valeurs possibles.';
$string['error_invalidrangesep'] = 'Erreur de syntaxe : utilisation incorrecte du séparateur de plage « : ».';
$string['error_invalidunary'] = 'Utilisation incorrecte de l\'opérateur unaire : {$a}';
$string['error_invalidvarname'] = 'Nom de variable non valide : {$a}.';
$string['error_len_argument'] = 'L\'argument de len() doit être une chaîne de caractères.';
$string['error_list_too_large'] = 'La liste ne doit pas contenir plus de {$a} éléments.';
$string['error_map_unknown'] = 'Erreur d\'évaluation dans map() : {$a}';
$string['error_mark'] = 'La note doit prendre une valeur supérieure à 0.';
$string['error_model_answer_no_content'] = 'Réponse non valide : le modèle de réponse ne contient aucun symbole évaluable.';
$string['error_model_answer_prefix'] = 'Réponse non valide : ne pas utiliser le préfixe opérateur « \\ » dans les modèles de réponses avec ce type de réponse';
$string['error_no_answer'] = 'Une réponse au moins est requise.';
$string['error_notindexable'] = 'Erreur d\'évaluation : l\'indexation n\'est possible qu\'avec des listes et des chaînes.';
$string['error_number_for_numeric_answertypes'] = 'Format de réponse non valide : ce type de réponse attend un nombre ou une liste de nombres.';
$string['error_onlyoneindex'] = 'Erreur d\'évaluation : un seul indice est pris en charge lors de l\'accès aux éléments d\'un tableau.';
$string['error_parenmismatch'] = 'Mauvaise correspondance des parenthèses, « {$a->closer} » ferme « {$a->opener} » de la ligne {$a->row} et de la colonne {$a->column}.';
$string['error_parennotclosed'] = 'Parenthèse déséquilibrée, « {$a} » n\'est jamais fermée.';
$string['error_pick_two'] = 'Lorsqu\'elle est appelée avec deux arguments, pick() s\'attend à ce que le second paramètre soit une liste.';
$string['error_placeholder_format'] = 'Format d’espace réservé incorrect ou caractères illégaux.';
$string['error_placeholder_main_duplicate'] = 'Espace réservé dupliqué dans le texte principal de la question.';
$string['error_placeholder_missing'] = 'Cet espace réservé est manquant dans le texte principal de la question.';
$string['error_placeholder_sub_duplicate'] = 'Ce nom d’espace réservé a déjà été défini dans une autre partie.';
$string['error_placeholder_too_long'] = 'La longueur du nom de l’espace réservé est limitée à 40 caractères.';
$string['error_poly_one'] = 'Lorsque poly() est appelée avec un argument, celui-ci doit être un nombre ou une liste de nombres.';
$string['error_poly_string'] = 'Lorsque poly() est appelée avec une chaîne de caractères, le deuxième argument doit être un nombre ou une liste de nombres.';
$string['error_poly_stringlist'] = 'Lorsque poly() est appelée avec une liste de chaînes de caractères, le deuxième argument doit être une liste de nombres.';
$string['error_poly_two'] = 'Lorsque poly() est appelée avec deux arguments, le premier doit être une chaîne de caractères ou une liste de chaînes de caractères.';
$string['error_power_negbase_expfrac'] = 'La base ne peut pas être négative avec un exposant fractionnaire.';
$string['error_power_negbase_expzero'] = 'La division par zéro n\'est pas définie, la base ne peut donc pas être zéro pour les exposants négatifs.';
$string['error_power_zerozero'] = 'La puissance 0^0 n\'est pas définie.';
$string['error_prefix'] = 'Erreur de syntaxe : utilisation non valide du caractère de préfixe « \\ ».';
$string['error_probability'] = '{$a} s\'attend à ce que la probabilité soit au moins égale à 0 et au plus égale à 1.';
$string['error_question_damaged'] = 'Erreur : la question est endommagée, le nombre de fragments de texte et le nombre de parties de la question ne sont pas égaux.';
$string['error_randvars_set_size'] = 'Le nombre d’éléments générables dans l’ensemble doit être plus grand que 1.';
$string['error_randvars_type'] = 'Tous les éléments de l’ensemble doivent avoir exactement le même type et la même taille.';
$string['error_rangesyntax'] = 'Erreur de syntaxe dans la définition de l\'intervalle.';
$string['error_rangeusage'] = 'Erreur de syntaxe : les plages ne peuvent être utilisées que dans {} ou [].';
$string['error_rule'] = 'Erreur d’analyse d\'unité !';
$string['error_ruleid'] = 'Une telle règle n’existe pas dans le fichier avec cet identifiant/nom.';
$string['error_samestartend'] = 'Erreur de syntaxe : le début et la fin de la plage ne doivent pas être égaux.';
$string['error_setindividual_algebraicvar'] = 'La définition d\'éléments individuels n\'est pas prise en charge pour les variables algébriques.';
$string['error_setindividual_randvar'] = 'La définition d\'éléments de liste individuels n\'est pas possible pour les variables aléatoires.';
$string['error_setindividual_string'] = 'Les caractères individuels d\'une chaîne ne peuvent pas être modifiés.';
$string['error_setinlist'] = 'Erreur de syntaxe : les ensembles ne peuvent pas être utilisés à l\'intérieur d\'une liste.';
$string['error_setnested'] = 'Erreur de syntaxe : les ensembles ne peuvent pas être imbriqués.';
$string['error_sort_samesize'] = 'Lorsque sort() est appelé avec deux listes, celles-ci doivent avoir la même taille.';
$string['error_sort_twolists'] = 'Lorsque sort() est appelé avec deux arguments, ils doivent tous deux être des listes.';
$string['error_stacksize'] = 'La pile doit contenir exactement un élément après l\'évaluation - un point-virgule quelque part aurait-il été oublié ?';
$string['error_stepzero'] = 'Erreur de syntaxe : la taille de pas d\'une plage ne peut pas être nulle.';
$string['error_str_argument'] = 'str() attend un argument scalaire, par exemple un nombre.';
$string['error_strayparen'] = 'Parenthèse déséquilibrée, « {$a} » intrusif trouvé.';
$string['error_string_for_algebraic_formula'] = 'Format de réponse incorrect : le type de réponse « formule algébrique » attend une chaîne de caractères unique entre guillemets ou une liste de chaînes de caractères, chacune entre guillemets.';
$string['error_subexpression_empty'] = 'Une sous-expression est vide.';
$string['error_sublist_indices'] = 'sublist() s\'attend à ce que les indices soient des entiers, il a trouvé « {$a} ».';
$string['error_sublist_lists'] = 'sublist() s\'attend à ce que ses arguments soient des listes.';
$string['error_sublist_outofrange'] = 'Indice {$a} hors limites dans sublist().';
$string['error_sum_argument'] = 'sum() attend une liste de nombres.';
$string['error_syntax'] = 'Erreur de syntaxe.';
$string['error_ternary_incomplete'] = 'Erreur de syntaxe : opérateur ternaire incomplet ou symbole « ? » mal placé.';
$string['error_ternary_missmiddle'] = 'Erreur de syntaxe : il manque la partie centrale de l’opérateur ternaire.';
$string['error_ternary_notenough'] = 'Erreur d’évaluation : nombre insuffisant d’arguments pour l’opérateur ternaire.';
$string['error_tokenconversion'] = 'La valeur fournie « {$a} » a un type de donnée non valide et ne peut pas être convertie en jeton.';
$string['error_undefinedconstant'] = 'Constante non définie : « {$a} »';
$string['error_unexpectedend'] = 'Erreur de syntaxe : fin d’expression inattendue après « {$a} ».';
$string['error_unexpectedinput'] = 'Entrée inattendue : « {$a} ».';
$string['error_unexpectedtoken'] = 'Jeton inattendu : {$a}';
$string['error_unit'] = 'Erreur d’analyse de l’unité';
$string['error_unitpenalty'] = 'La pénalité doit être un nombre compris entre 0 et 1.';
$string['error_unknownfunction'] = 'Fonction inconnue : « {$a} ».';
$string['error_unknownvarname'] = 'Variable inconnue : {$a}';
$string['error_unterminatedstring'] = 'Chaîne non terminée, commencée à la ligne {$a->row}, colonne {$a->column}.';
$string['error_validation_eval'] = 'Erreur lors de l’évaluation de test.';
$string['error_variablelhs'] = 'Le membre gauche d’une affectation doit être une variable.';
$string['error_vars_array_index_nonnumeric'] = 'Une valeur non numérique ne peut pas être utilisée comme index de liste.';
$string['error_vars_array_index_out_of_range'] = 'Index de liste hors des bornes.';
$string['error_vars_array_size'] = 'La taille de la liste doit être comprise entre 1 et 1000.';
$string['error_vars_array_type'] = 'Tous les éléments d’une même liste doivent être du même type, soit nombre soit chaîne.';
$string['error_vars_array_unsubscriptable'] = 'La variable n’est pas indiciable.';
$string['error_vars_bracket_mismatch'] = 'Délimiteurs incompatibles.';
$string['error_vars_end_separator'] = 'Séparateur d’affectation manquant à la fin.';
$string['error_vars_name'] = 'La syntaxe du nom de variable est incorrecte.';
$string['error_vars_reserved'] = 'La fonction {$a}() est réservée et ne peut pas être utilisée comme nom de variable.';
$string['error_vars_string'] = 'Erreur. Soit une chaîne sans guillemet fermant, soit l\'utilisation d\'un caractère non accepté tel que \'.';
$string['error_vars_undefined'] = 'La variable « {$a} » n’est pas définie.';
$string['error_wrapnumber'] = 'Impossible d’envelopper une valeur non numérique dans un jeton de type NUMBER (nombre).';
$string['error_wrapstring'] = 'Impossible d’envelopper la valeur donnée dans un jeton de type STRING (chaîne de caractère).';
$string['feedback'] = 'Feedback général de la partie';
$string['feedback_help'] = 'Le feedback de cette partie sera affiché à tous les étudiants. Il peut contenir des variables globales et locales qui seront remplacées par leurs valeurs.';
$string['functiontakesatleasttwo'] = 'La fonction {$a} doit avoir au moins deux arguments';
$string['functiontakesnoargs'] = 'La fonction {$a} ne prend aucun argument';
$string['functiontakesonearg'] = 'La fonction {$a} doit avoir exactement un argument';
$string['functiontakesoneortwoargs'] = 'La fonction {$a} doit avoir un ou deux arguments';
$string['functiontakesthreeargs'] = 'La fonction {$a} doit avoir exactement trois arguments.';
$string['functiontakestwoargs'] = 'La fonction {$a} doit avoir exactement deux arguments';
$string['globalvarshdr'] = 'Variables';
$string['illegalformulasyntax'] = 'Syntaxe incorrecte pour la formule commençant par « {$a} »';
$string['incorrectfeedback'] = 'Pour toute réponse incorrecte';
$string['incorrectfeedback_help'] = 'Ce feedback sera affiché aux étudiants n’ayant pas de points sur cette partie. Il peut intégrer des variables globales ou locales qui seront remplacées par leurs valeurs.';
$string['instantiate'] = 'Instancier';
$string['mainq'] = 'Question principale';
$string['modelanswer'] = 'Réponse modèle';
$string['none'] = 'Aucune';
$string['number'] = 'Nombre';
$string['number_unit'] = 'Nombre et unité';
$string['numdataset'] = 'Nombre de jeux de données';
$string['numeric'] = 'Numérique';
$string['numeric_unit'] = 'Numérique et unité';
$string['numerical_formula'] = 'Formule numérique';
$string['numerical_formula_unit'] = 'Formule numérique et unité';
$string['otherrule'] = 'Autres règles';
$string['otherrule_help'] = 'L’auteur de la question peut définir ici des règles de conversion additionnelles pour des unités de base supplémentaires. Voir la documentation pour les usages avancés.';
$string['partiallycorrectfeedback'] = 'Pour toute réponse partiellement correcte';
$string['partiallycorrectfeedback_help'] = 'Ce feedback sera affiché aux étudiants n’ayant pas le maximum de points sur cette partie. Il peut intégrer des variables globales ou locales qui seront remplacées par leurs valeurs.';
$string['placeholder'] = 'Nom de l’espace réservé';
$string['placeholder_help'] = 'Un espace réservé est utilisé pour marquer la place dans le texte principal de la question
où sera inséré le contenu de la partie. C’est une chaîne de caractères alpha-numériques préfixée par \'**#**\', comme #1, #2a, #2b ou #A.

Si ce champ est laissé vide, la partie sera ajoutée à la fin du texte principal de la question.';
$string['pleaseputananswer'] = 'Veuillez remplir tous les champs.';
$string['pluginname'] = 'Formules';
$string['pluginname_help'] = 'Pour commencer à utiliser ce type de questions, veuillez lire le <a href="http://code.google.com/p/moodle-coordinate-question/wiki/Tutorial">tutoriel</a>.

Pour des exemples de questions possibles, téléchargez et importez <a href="http://code.google.com/p/moodle-coordinate-question/downloads/list">les exemples</a>,
ou consulter les <a href="http://code.google.com/p/moodle-coordinate-question/wiki/ScreenShots">copies d’écran</a>.

Pour comprendre les options dans le formulaire ci-dessous, consultez les <a href="http://code.google.com/p/moodle-coordinate-question/wiki/QuestionOptions">options de questions</a>

Pour la documentation complète, lisez <a href="http://code.google.com/p/moodle-coordinate-question/wiki/Documentation">la documentation</a>';
$string['pluginname_link'] = 'question/type/formulas';
$string['pluginnameadding'] = 'Ajout d’une question formules';
$string['pluginnameediting'] = 'Modification d’une question formules';
$string['pluginnamesummary'] = 'Type de questions avec des valeurs aléatoires et des champs de réponse multiples.
Les champs de réponse peuvent être placés n’importe où dans le texte de la question, ce qui permet de créer des questions
impliquant des structures variées comme des vecteurs, des polynômes ou des matrices.
D’autres possibilités comme la vérification des unités et les questions en plusieurs parties sont aussi disponibles et faciles à utiliser.';
$string['postunit'] = 'Unité';
$string['postunit_help'] = 'Vous pouvez spécifier une unité ici. Ce type de question est spécialement conçu pour le système SI, un espace
représente le \'produit\' de différentes \'unités de base\' and <tt> ^ </tt> est utilisé pour les exposants.
De plus <tt> / </tt> peut être utilisé pour les exposants négatifs. Toute permuntation des unités de base est considérée comme équivalente.

Les étudiants doivent utiliser le même format d’entrée. Par exemple,

<pre class="prettyprint">1 m<br>0.1 m^2<br>20 m s^(-1)<br>400 kg m/s<br>100 kW</pre>';
$string['previewerror'] = 'Aucun aperçu disponible. Il faut vérifier la définition des variables aléatoires, variables globales, variables locales des parties et réponses. Message d’erreur initial : {$a}';
$string['privacy:metadata'] = 'Le plugin type de question Formules n’enregistre aucune donnée personnelle.';
$string['qtextpreview'] = 'Prévisualiser avec le jeu de données';
$string['questiontext'] = 'Texte de la question';
$string['questiontext_help'] = 'En plus du texte normal vous pouvez aussi utiliser ici des variables globales et des espaces réservés.

Les variables globales seront remplacées par leur valeur et les espaces réservés seront remplacés par la partie de question correspondante.
    Un exemple simple avec des variables globales <tt> A, B, C </tt> et des espaces réservés <tt> #1, #2, #3 </tt> is:

<pre class="prettyprint">Quel est le résultat de {A} + {B}?<br>{#1}<br>Quel est le résultat de {A} - {B}?<br>{#2}<br>Quel est le résultat de {C} / {B}?<br>{#3}</pre>';
$string['relerror'] = 'Erreur relative';
$string['renew'] = 'Actualiser';
$string['response_right'] = 'Droite';
$string['response_wrong'] = 'Incorrect';
$string['response_wrong_unit'] = 'Valeur correcte, unité incorrecte';
$string['response_wrong_value'] = 'Valeur incorrecte, unité correcte';
$string['ruleid'] = 'Règles de conversion de base';
$string['ruleid_help'] = 'Ce type de question possède un système de conversion d’unités incorporé et des règles de base de conversions d’unité.

Les règles de base les plus usuelles sont les règles du "Système international d’unités SI" qui convertit entre elles les unités standard
comme par exemple pour les longueurs km, m, cm et mm.
Cette option n’a aucun effet si aucune unité n’a été spécifiée.';
$string['settingusepopup'] = 'Utiliser les infobulles';
$string['settingusepopup_desc'] = 'Afficher la réponse correcte et le feedback dans une infobulle';
$string['subqoptions'] = 'Options supplémentaires';
$string['subqtext'] = 'Texte de la partie';
$string['subqtext_help'] = 'Le texte de la partie et les emplacements des champs de réponse peuvent être spécifiés ici.
Les espaces réservés qui peuvent être utilisés pour marquer les emplacements des champs réponse sont :

<pre class="prettyprint">{_0}<br>{_1}<br>{_2}<br>…<br>{_u}</pre>

<tt> {_0}, {_1}, {_2} </tt> sont les emplacements des champs réponse pour les coordonnées et <tt> {_u} </tt> est la place du champ réponse pour l’unité.

Tous les champs manquants sont ajoutés automatiquement à la fin du texte de la partie.
Un cas spécial est que si <tt> {_0} </tt> et <tt> {_u} </tt> sont spécifiés consécutivement, et que la réponse ne comporte qu’une coordonnée et une unité, c’est à dire. <tt> {_0}{_u} </tt>, ils seront combinés en un seul champ réponse long pour entrer à la fois la réponse et l’unité.';
$string['uniquecorrectansweris'] = 'La réponse correcte est : {$a}';
$string['unit'] = 'Unité';
$string['unitpenalty'] = 'Pénalité pour unité incorrecte (0-1)*';
$string['unitpenalty_help'] = 'Cette option spécifie la pénalité que vous souhaitez appliquer à l’étudiant en cas d’unité incorrecte.

Elle prend une valeur entre 0 et 1. Si la valeur est 1, l’unité et la réponse doivent toutes deux être correctes pour obtenir un point : elles sont alors considérées comme une seule entité. En revanche, si la valeur est 0, l’étudiant peut obtenir la note maximale uniquement avec la bonne réponse, même si l’unité saisie est incorrecte ou aléatoire, celle-ci n’aura aucun impact sur la notation.

Par conséquent, il est recommandé d’utiliser la valeur 1 chaque fois que la réponse n’a pas d’unité associée.';
$string['unsupportedformulafunction'] = 'La fonction {$a} n’est pas supportée';
$string['vars1'] = 'Variables locales';
$string['vars1_help'] = 'Vous pouvez définir ici des variables locales à la partie de la même manière que les variables globales sont définies
au niveau de la question. Les variables définies ici peuvent être utilisées dans la réponse ou le feedback de la partie.
Leur portée et leur visibilité sontt limitées à la partie.';
$string['vars2'] = 'Variables de notation';
$string['vars2_help'] = 'Toutes les variables locales et les réponses de l’étudiant peuvent être utilisées ici.
Voir la documentation pour les utilisations avancées.';
$string['vars2_link'] = 'https://dynamiccourseware.org/';
$string['varsdata'] = 'Jeux de données instanciés';
$string['varsglobal'] = 'Variables globales';
$string['varsglobal_help'] = 'Des formules peuvent être spécifiées ici pour manipuler les variables aléatoires instanciées
(toutes les variables aléatoires sont disponibles à cet endroit).
La liste complète des fonctions mathématiques et des opérateurs est disponible dans la documentation.

<pre class="prettyprint">a = 1.11111;<br>b = exp(3);<br>c = A + a + b;<br>d = sin(1.5*pi) + c;<br>e = round(a, 0);<br>f = [0,1,2,3][A];<br>g = ["zero","one","two","three"][A];<br>distance = sqrt(a**2 + b**2);</pre>';
$string['varsglobal_link'] = 'https://dynamiccourseware.org/';
$string['varsrandom'] = 'Variables au hasard';
$string['varsrandom_help'] = 'Une nouvelle valeur pour chacune de ces variables est choisie aléatoirement au début de chaque tentative.
Ce tirage peut se faire en définissant l’ensemble des possibilités :

<pre class="prettyprint">A = {1,2,3};<br>C = {[1,-1], [2,-2], [3,-3]};<br>E = {10:100:10, 100, 1000};</pre>

Les éléments de l’ensemble peuvent être des nombres, des chaînes ou des listes de nombres ou de chaînes.
Au début d’une tentative, un élément de l’ensemble au second membre sera tiré au sort et assigné à la variable au premier membre.
Pour un ensemble de nombres, vous pouvez utiliser la notation intervalle comme 10:100:10 (voir exemple E ci-dessus.).';
$string['varsrandom_link'] = 'https://dynamiccourseware.org/';
$string['varsstatistics'] = 'Statistiques';
$string['yougotnright'] = 'Vous avez correctement répondu à {$a} parties de cette question.';
$string['yougotoneright'] = 'Vous avez correctement répondu à 1 partie de cette question.';
