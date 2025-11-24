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
 * Strings for component 'qtype_gapfill', language 'fr', version '4.5'.
 *
 * @package     qtype_gapfill
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addhinttext'] = 'Ajouter un texte d’indice au formulaire d’édition';
$string['addhinttext_text'] = 'Remplir les deux premiers indices dans la section Essais multiples du formulaire';
$string['additemsettings'] = 'Ajouter le paramétrage des trous';
$string['answerdisplay'] = 'Afficher les réponses';
$string['answerdisplay_help'] = 'Le mode « glisser-déposer » propose une liste de mots qui peuvent compléter les champs vides, le mode « texte à trous » autorise la saisie d’une réponse sans propositions de mots, le mode « liste déroulante » propose une liste de réponses pour chaque champ à remplir';
$string['blank'] = 'trou';
$string['cannotimport'] = 'importation impoosible';
$string['casesensitive'] = 'Sensible à la casse';
$string['casesensitive_help'] = 'Quand cette option est activée, si la bonne réponse est « CHAT », « chat » sera considéré comme mauvaise réponse';
$string['correct'] = 'Feedback pour une réponse correcte';
$string['correctanswer'] = 'Réponse correcte';
$string['course'] = 'Aide pour l’importation';
$string['coursenotfound'] = 'Cours non trouvé, veuillez vérifier son nom abrégé';
$string['courseshortname'] = 'Nom abrégé du cours';
$string['courseshortname_help'] = 'Entrez le nom abrégé du cours vers lequel vous voulez importer la question. Cette opération consistera à effectuer une importation au format xml du fichier example_questions.xml qui se trouve dans le répertoire de la question de type Texte à trous';
$string['delimitchars'] = 'Caractères de délimitation';
$string['delimitchars_help'] = 'Changer les caractères qui délimitent un champ par défaut [ ], utile pour les questions de langage de programmation';
$string['delimitset_text'] = 'Choisir les caractères de délimitation pour les trous. Par exemple vous pouvez choisir % % pour la phrase Le %chat% était assis sur le %paillasson%';
$string['disableregex'] = 'Désactiver Regex';
$string['disableregex_help'] = 'Désactive le traitement des réponses par le système des expressions régulières et effectue une comparaison de chaîne standard. Utile par exemple pour les expressions html dont les chevrons (< et >) doivent être interprétés littéralement et pour les mathématiques dont des symboles tels que * doivent être interprétés littéralement plutôt que comme des expressions';
$string['disableregexset_text'] = 'Désactiver le traitement des réponses par le système d’expressions régulières';
$string['displaydragdrop'] = 'glisser-déposer';
$string['displaydropdown'] = 'liste déroulante';
$string['displaygapfill'] = 'texte à trous';
$string['distractor1'] = 'bleu,chaussure,petit';
$string['distractor2'] = 'bleu,chaussure,petit';
$string['duplicatepartialcredit'] = 'Le résultat n’est pas juste car vous avez des réponses en double';
$string['editquestiontext'] = 'Éditer le texte de la question';
$string['example1'] = 'Glisser-déposer les verbes dans les trous. Je [pense] donc je [suis].';
$string['example2'] = 'Choisir les verbes dans ces listes déroulantes. Je [pense] donc je [suis].';
$string['example3'] = 'Où vivent les kangourous ? [en Australie]. Le trous qui suit acceptera aussi bien « chat » que « chien » [chat|chien]';
$string['fixedgapsize'] = 'Longueur du trou fixe';
$string['fixedgapsize_help'] = 'Au moment de répondre à la question tous les trous auront la même longueur que celle du trou le plus long. Ceci permet de supprimer l’indice éventuellement fourni par la longueur de la réponse correcte. En effet, si les trous pour [chat] et [éléphant] étaient de la même longueur que ces deux mots, il serait évident que « éléphant » irait dans le trou le plus long.';
$string['fixedgapsizeset_text'] = 'Crée des trous tous de la dimension du mot caché le plus long';
$string['gap_plural'] = 'trous';
$string['gap_singular'] = 'trou';
$string['gapfill'] = 'Texte à trous';
$string['importexamples'] = 'Importer';
$string['incorrect'] = 'Feedback pour réponse incorrecte';
$string['itemsettings_button'] = 'Paramétrage des items';
$string['itemsettings_button_help'] = 'Cliquez sur ce bouton pour basculer dans un mode où vous pourrez entrer des message pour les réponses correctes et incorrectes pour chaque mot effacé';
$string['itemsettingsbutton'] = 'Paramétrage des trous';
$string['itemsettingserror'] = 'Ne fonctionne qu’avec l’éditeur de texte Atto.';
$string['letterhint0'] = 'La première lettre de la réponse correcte sera ajoutée à chaque trou lorsque vous appuierez sur le bouton Essayer à nouveau';
$string['letterhint1'] = 'La lettre suivante de la réponse correcte sera ajoutée lorsque vous appuierez sur le bouton Essayer à nouveau';
$string['letterhints'] = 'Indices lettres';
$string['letterhints_help'] = 'Ajouter une lettre de la réponse correcte comme indice en mode interactif lorsqu’une réponse incorrecte est donnée. Vous devez fournir des indices dans l’option « Tentatives multiples » de la question pour que cette aide fonctionne.';
$string['letterhints_text'] = 'Ajouter une lettre de la réponse correcte comme indice en mode interactif lorsqu’une réponse incorrecte est donnée.';
$string['moreoptions'] = 'Plus d’options.';
$string['noduplicates'] = 'Pas de doublons';
$string['noduplicates_help'] = 'Si cette option est activée, chaque réponse doit être unique, ce qui est utile lorsque chaque champ possède un | comme opérateur. Par exemple : Quelles sont les couleurs des médailles olympiques ? Chaque champ est composé de [or|argent|bronze], si l’étudiant choisit « or » 3 fois, seul le premier champ sera compté comme juste (les autres ne seront pas considérés comme des bonnes réponses). Cela permet d’éliminer au fur et à mesure les propositions disponibles et ainsi éviter tous doublons dans les réponses';
$string['optionsaftertext'] = 'Afficher les mots supprimés à la suite du texte';
$string['optionsaftertext_help'] = 'Les mots à glisser-déposer seront affichés après le texte à trous au lieu d’être affichés avant';
$string['optionsaftertext_text'] = 'Afficher les mots supprimés à la suite du texte';
$string['or'] = 'ou';
$string['pleaseenterananswer'] = 'Saisissez la réponse.';
$string['pluginname'] = 'Texte à trous';
$string['pluginname_help'] = 'Placer les mots à compléter entre crochets. Exemple : Le [chat] était assis sur le [tapis]. Si le tapis ou la couverture sont autorisés, saisir [tapis|couverture]. Les modes Liste déroulante et glisser-déposer permettent d’utiliser une liste de réponses aléatoires dans laquelle peuvent-être incluses des mauvaises réponses appelées « distracteurs ».';
$string['pluginname_link'] = 'question/type/gapfill';
$string['pluginnameadding'] = 'Ajout d’une question de type Texte à trous';
$string['pluginnameediting'] = 'Édition d’une question de type Texte à trous';
$string['pluginnamesummary'] = 'Une question de type texte à trous. Permet des réponses par glisser-déposer ou déroulantes avec des distracteurs. Syntaxe très facile à apprendre';
$string['privacy:null_reason'] = 'La question de type Texte à trous ne conserve aucune donnée';
$string['questioncatnotfound'] = 'Catégorie de question non trouvée. Cliquez <a href={$a}>ici</a> pour ré-initialiser, puis sur le bouton retour arrière de votre navigateur';
$string['questionsmissing'] = 'Vous n’avez pas ajouté de mot à effacer dans le texte de votre question';
$string['questiontext'] = 'Texte de la question';
$string['questiontext_help'] = 'Veuillez entourer les mots à supprimer par des délimiteurs';
$string['singleuse'] = 'Éléments déplaçables à usage unique';
$string['singleuse_help'] = 'Supprimer les éléments déplaçables de la liste lorsqu’ils sont déposés dans un trou';
$string['singleuse_text'] = 'Supprimer les éléments déplaçables de la liste lorsqu’ils sont déposés dans un trou';
$string['visitquestions'] = 'Cliquez <a href={$a}>ici</a> pour voir les questions';
$string['wronganswers'] = 'Distracteurs.';
$string['wronganswers_help'] = 'Liste de mauvaises réponses faite pour détourner l’étudiant des bonnes réponses. Chaque mot est séparé par des virgules, disponible seulement dans les modes glisser-déposer et liste déroulante';
$string['yougotnrightcount'] = 'Vous avez correctement terminé {$a->num} {$a->gaporgaps} sur {$a->outof}.';
