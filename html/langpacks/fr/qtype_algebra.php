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
 * Strings for component 'qtype_algebra', language 'fr', version '3.11'.
 *
 * @package     qtype_algebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Emplacement pour {no} réponses supplémentaires';
$string['addmorevariableblanks'] = 'Emplacement pour {no} variables supplémentaires';
$string['algebraoptions'] = 'Options';
$string['allfunctions'] = 'Toutes les fonctions';
$string['allowedfuncs'] = 'Fonctions autorisées';
$string['allowedfuncs_help'] = '**PAS ENCORE IMPLEMENTE**

Ces contrôles peuvent être utilisés pour restreindre les fonctions que les étudiants peuvent utiliser dans leur réponses. Si le boutons « Tout » est coché, il n\'y a aucune restriction sur les fonctions que les étudiants peuvent utiliser dans leur réponses. C\'est al valeur par défaut. Pour restreindre les fonctions autorisées, décochez « Tout » et sélectionnez les fonctions que vous voulez autoriser.';
$string['allowedfunctions'] = 'Fonctions autorisées';
$string['answer'] = 'Réponse : {$a}';
$string['answerboxprefix'] = 'Chaine qui préfixera le champ réponse lors de l\'affichage de la question';
$string['answermustbegiven'] = 'Vous devez entrer une réponse ici s\'il y a une note ou un feedback';
$string['answerno'] = 'Réponse {$a}';
$string['answerprefix'] = 'Préfixe de réponse';
$string['answerprefix_help'] = 'Le texte entré ici sera placé devant le champ où les étudiants tapent leur réponse. Par exemple si une question demande d\'entrer la formulation d\'une fonction f(x), alors le texte « f(x)= » peut être spécifié ici.';
$string['answerx'] = 'Réponse {no}';
$string['badclosebracket'] = 'Parenthèse fermante invalide trouvée';
$string['badequivtype'] = 'Type incorrect: on ne peut comparer des termes de l\'analyseur qu\'avec d\'autres termes de l\'analyseur';
$string['badfuncargs'] = 'Arguments invalides pour la fonction « {$a} »';
$string['braces'] = '\\(...\\)';
$string['brackets'] = '[…]';
$string['cdot'] = '\\cdot';
$string['checktolerance'] = 'Vérifier la tolérance';
$string['compalgorithm'] = 'Algorithme de comparaison';
$string['compareby'] = 'Algorithme de comparaison';
$string['compareby_help'] = 'Cela permet de sélectionner la méthode avec laquelle les réponses des élèves sont comparés à toutes les réponses de la question. Les différentes possibilités sont:

SAGE : utilise le logiciel de mathématiques formelles Open Source <a href="http://www.sagemath.org/">SAGE</a> pour effectuer une comparaison algébrique symbolique complète.

Évaluation : Cette méthode génère des nombres aléatoires pour les variables de la question et évalue à la fois la réponse de l\'élève et la réponse de la question pour cet ensemble de valeurs.

Équivalence : Ceci est la plus simple de toutes les méthodes. Elle n\'effectue que les règles basiques de comparaisons entre des expressions algébriques.';
$string['compareequiv'] = 'Equivalence';
$string['compareeval'] = 'Evaluation';
$string['comparesage'] = 'SAGE';
$string['correctansweris'] = 'La réponse correcte est : {$a} qui donne';
$string['correctanswers'] = 'Réponses correctes';
$string['decimal'] = ',';
$string['defaultmethod'] = 'Méthode de comparaison par défaut';
$string['disallow'] = 'Réponse non autorisée';
$string['disallow_help'] = 'contient une expression qui sera rejetée comme réponse. Les étudiants entrant une réponse qui correspond à ce texte ne recevront aucune note pour la question même si leur réponse correspond à une réponse de la question.';
$string['disallowans'] = 'Réponse non autorisée';
$string['disallowanswer'] = 'Réponse non autorisée';
$string['displayresponse'] = 'Afficher la réponse';
$string['dollar'] = '$...$';
$string['dollars'] = '$$…$$';
$string['duplicatevar'] = 'Nom de variable dupliqué : « {$a} » est déjà défini.';
$string['dynamic'] = 'Utilisation d\'un requête dynamique AJAX';
$string['editingalgebra'] = 'Edition d\'une question algèbre';
$string['evalchecks'] = 'Evaluations de contrôle';
$string['exceptionmessage'] = '{$a}';
$string['filloutoneanswer'] = 'Vous devez fournir au moins une réponse possible. Les réponses laissées en blanc ne seront pas utilisés. \'*\' Peut être utilisé comme un joker pour tous les caractères. La première réponse correspondante sera utilisée pour déterminer le score et commentaires. Seules les variables définies ci-dessus sont autorisés';
$string['filloutonevariable'] = 'Vous devez fournir au moins une variable.';
$string['formuladisplay'] = 'Méthode pour afficher la formule réponse';
$string['host'] = 'Url du serveur-hôte de SAGE';
$string['iframe'] = 'Utilisation d\'un élément iframe';
$string['illegalplusminus'] = 'Un + ou un - a été trouvé à un emplacement invalide';
$string['illegalvarname'] = 'Nom de la variable illégale « {$a} » : même nom qu\'une fonction de l\'analyseur ou constante spéciale.';
$string['invalidanswer'] = 'Réponse non valide ou non reconnue';
$string['mismatchedbracket'] = 'Parenthèses incompatibles : les parenthèses ouvrantes et fermantes ne sont pas du même type « {$a} »';
$string['mismatchedcloseb'] = 'Parenthèses incompatibles : parenthèse fermante sans parenthèse ouvrante trouvée';
$string['mismatchedopenb'] = 'Parenthèses incompatibles : parenthèse ouvrante sans parenthèse fermante trouvée';
$string['missingonearg'] = 'Erreur de syntaxe : argument manquant pour l\'opérateur « {$a} »';
$string['missingtwoargs'] = 'Erreur de syntaxe : l\'opérateur « {$a} » requiert deux arguments';
$string['morethantwoargs'] = 'Essai de comparaison d\'un terme avec plus de 2 arguments - pas de code pour gérer ce cas !';
$string['multiplyoperator'] = 'Opérateur TeX pour la multiplication';
$string['nargswrong'] = 'Nombre incorrect d\'arguments pour le terme « {$a} »';
$string['nchecks'] = 'Nombre d’évaluations de contrôle';
$string['nchecks_help'] = 'Nombre d\'évaluation de contrôles utilisées dans l\'algorithme de comparaison par évaluation';
$string['noevaluate'] = 'La méthode pour évaluer le terme « {$a} » n\'a pas été implémentée';
$string['notanumber'] = 'Valeur invalide : un nombre est requis';
$string['notenoughanswers'] = 'Vous devez entrer au moins une réponse.';
$string['notenoughvars'] = 'Au moins une variable est requise pour une question algèbre';
$string['notopterm'] = 'Erreur de syntaxe: imposible de réduire à un seul opérateur de niveau racine';
$string['novarmax'] = 'Pas de borne maximum spécifiée pour la variable';
$string['novarmin'] = 'Pas de borne minimum spécifiée pour la variable';
$string['options'] = 'Options';
$string['parseerror'] = 'Erreur d\'analyse de la fonction « {$a} »';
$string['pluginname'] = 'Algèbre';
$string['pluginname_help'] = 'L\'étudiant entre une formule contenant une ou plusieurs variables comme réponse. L\'exactitude de cette réponse est évaluée par une des 3 méthodes disponibles.';
$string['pluginnameadding'] = 'Ajout d\'une question algèbre';
$string['pluginnameediting'] = 'Edition d\'une question algèbre';
$string['pluginnamesummary'] = 'L\'étudiant entre une formule contenant une ou plusieurs variables comme réponse. L\'exactitude de cette réponse est évaluée par une des 3 méthodes disponibles.';
$string['port'] = 'Port du serveur SAGE';
$string['privacy:metadata'] = 'Le type de question Algebra n\'enregistre aucune donnée personnelle.';
$string['restoreqdbfailed'] = 'Echec de la restauration d\'une question d\'algèbre : erreur d\'écriture dans la base de données';
$string['restorevardbfailed'] = 'Echec de la restauration d\'une variable de question d\'algèbre : erreur d\'écriture dans la base de données';
$string['texdelimiters'] = 'Délimiteurs pour les expressions TeX';
$string['times'] = '\\times';
$string['tolerance'] = 'Tolérance pour les évaluations de contrôle';
$string['tolerance_help'] = 'Détermine la différence maximale entre les évaluations numériques de la réponse de l\'élève et des réponses à la question qui sera autorisée à compter comme une correspondance.';
$string['toleranceltzero'] = 'La tolérance doit être supérieure ou égale à zéro';
$string['undeclaredvar'] = 'Variable non déclarée « {$a} » trouvée';
$string['undefinedfunction'] = 'Fonction non définie « {$a} »';
$string['undefinedvar'] = 'Variable(s) non définie(s) {$a} utilisée dans une ou plusieurs réponses';
$string['undefinedvariable'] = 'Variable non définie « {$a} » trouvée lors de l\'évaluation numérique d\'une expression';
$string['unknownterm'] = 'Erreur de syntaxe : terme inconnu trouvé à « {$a} » dans l\'expression';
$string['unusedvar'] = 'Cette variable n\'est utilisée par aucune réponse';
$string['uri'] = 'Uri du serveur SAGE';
$string['variable'] = 'Variable';
$string['variable_help'] = 'Tous les noms des variables utilisées dans les réponses doivent être saisis ici. Les valeurs minimales et maximales ne sont nécessaires que si l\'algorithme de comparaison par évaluation est utilisée.';
$string['variablename'] = 'Nom de variable';
$string['variableno'] = 'Variable {$a}';
$string['variables'] = 'Variables';
$string['variablex'] = 'Variable {no}';
$string['varmax'] = 'Valeur maximum';
$string['varmin'] = 'Valeur minimum';
$string['varmingtmax'] = 'La valeur minimale doit être inférieure à la valeur maximale';
