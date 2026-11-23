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
 * Strings for component 'qtype_geogebra', language 'fr', version '4.5'.
 *
 * @package     qtype_geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconstraints'] = 'Ajouter des contraintes (relations) aux variables';
$string['addmorevarblanks'] = 'Champs pour {no} variables supplémentaires';
$string['answerinvalid'] = 'Le texte de réponse est non valide. Ceci ne devrait pas se produire.';
$string['answermissing'] = 'La réponse est manquante. JavaScript est sans doute désactivé dans ce navigateur, ou une erreur inconnue s’est produite.';
$string['answervar'] = 'Variables pour l’évaluation automatique.';
$string['answervar_help'] = '<strong>Pour l’évaluation automatique :</strong> Un nom de variable booléenne dans GeoGebra qui est vraie si l’étudiant a résolu la question (en partie).  On ajoute toutes les notes pour toutes les variables booléennes. La question est correcte si une somme est supérieure à 100%, mais il devrait y avoir au moins une somme qui donne exactement 100%. <br> <strong>Laissez ce champ vide pour le classement manuel.</strong>';
$string['constraints'] = 'Contraintes (relations)';
$string['feedback'] = 'Retour lorsque la variable est vraie';
$string['feedback_help'] = 'Le retour est généré automatiquement à partir de la légende de la variable dans le fichier GeoGebra';
$string['geogebraapplet'] = 'Applet GeoGebra';
$string['getvars'] = 'Obtenir les variables qui peuvent être modifiées aléatoirement par l’applet.';
$string['ggbfilemissing'] = 'La chaîne de caractères (base64) de la réponse est manquante. JavaScript est sans doute désactivé dans ce navigateur, ou une erreur inconnue s’est produite.';
$string['ggbturl'] = 'URL ou identifiant de l’activité GeoGebraTube';
$string['ggbturl_help'] = 'Vous pouvez soit utiliser le bouton de partage sur GeoGebraTube et copier-coller le lien ou utiliser le dossier GeoGebraTube. L’applet et les paramètres sont stockés dans la base de données, l’applet ne sera pas rechargée à partir GeoGebraTube sauf demande. Fournir seulement l’identifiant ou la clé de partage de l’applet fonctionne également.';
$string['ggbxmlmissing'] = 'La chaîne de caractères (XML) est manquante. JavaScript est sans doute désactivé dans ce navigateur, ou une erreur inconnue s’est produite.';
$string['invalidinequality'] = '{$a} est incorrect';
$string['israndomized'] = 'Y a-t-il des variables qui devraient être modifiées aléatoirement ?';
$string['loadapplet'] = '(Re)charger et montrer l’applet';
$string['loadapplet_help'] = '(Re)charger l’applet depuis GeoGebratube et sauvegarder la nouvelle version dans la base de données.';
$string['mineqmax'] = 'Le minimum et le maximum pour la modification aléatoire ne sont pas correctement spécifiés pour la variable {$a}, soit parce que vous n’avez pas spécifier les valeurs min et max du curseur, soit parce que l’objet n’est pas un curseur. Vous devez sans doute modifier cela dans votre fichier GeoGebra.';
$string['minplusstepgtmax'] = 'Min+incrément est supérieur à max pour la variable {$a}. Vous devez sans doute modifier cela dans votre fichier GeoGebra.';
$string['noappletloaded'] = 'Aucune applet chargée ! Vérifiez que l’url est correct.';
$string['nofractionsumeq1'] = 'Au moins une combinaison de notes doit donner une somme égale à 100%.';
$string['pluginname'] = 'GeoGebra';
$string['pluginname_help'] = 'Questions que les étudiants peuvent résoudre en utilisant GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';
$string['pluginnameadding'] = 'Ajouter une question GeoGebra';
$string['pluginnameediting'] = 'Editer une question GeoGebra';
$string['pluginnamesummary'] = 'Une version de questions calculées qui utilise GeoGebra pour montrer la question et vérifier la réponse quand le test est terminé.';
$string['randomizedbutnovars'] = 'Vous avez décidé que cette question devait être modifiée aléatoirement, mais vous n’avez spécifié aucune variable existante qui doive être modifiée aléatoirement.';
$string['randomizedvar'] = 'Variables à modifier aléatoirement.';
$string['randomizedvar_help'] = 'Variables qui doivent être modifiées aléatoirement, séparées par une virgule. Utilisez les propriétés des curseurs dans GeoGebra pour choisir le min, le max, et l’incrément. Les valeurs de ces variables peuvent également être utilisées dans le texte de la question en utilisant les accolades, par example : {a}';
$string['stepzero'] = 'L’incrément pour la variable {$a} vaut 0, soit que vous n’avez pas spécifié l’incrément du curseur, soit que l’objet n’est pas un curseur. Vous devez sans doute y remédier dans le fichier GeoGebra.';
$string['valuecheckedfor'] = 'Objet booléen de GeoGebra qui est utilisé pour la notation.';
$string['variablenamewrong'] = 'Aucune variable de ce nom n’a pu être trouvée dans le fichier GeoGebra.';
$string['variableno'] = 'Variable {$a}';
$string['variables'] = 'Variables';
$string['willbereadfromfile'] = 'Sera lu à partir de GeoGebra… (voir bouton d’aide)';
