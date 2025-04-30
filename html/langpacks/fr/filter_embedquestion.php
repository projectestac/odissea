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
 * Strings for component 'filter_embedquestion', language 'fr', version '4.4'.
 *
 * @package     filter_embedquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attemptoptions'] = 'Options de tentatives';
$string['authorizedsecrets'] = 'Secrets autorisés';
$string['chooserandomly'] = 'Choisir aléatoirement une question intégrable de cette catégorie';
$string['corruptattempt'] = 'Votre tentative précédente de réponse à une question ici a cessé de fonctionner. Si vous cliquez sur « Continuer », elle sera supprimée et une nouvelle tentative sera créée.';
$string['corruptattemptwithreason'] = 'Votre tentative précédente de réponse à une question ici a cessé de fonctionner. ({$a}) Si vous cliquez sur « Continuer », elle sera supprimée et une nouvelle tentative sera créée.';
$string['defaultsheading'] = 'Options par défaut pour intégration de questions';
$string['defaultx'] = '({$a}) par défaut';
$string['displayoptions'] = 'Afficher options';
$string['embedquestion'] = 'Question intégrée';
$string['errormaxmarknumber'] = 'La note maximale doit être un nombre.';
$string['errornopermissions'] = 'Vous n’avez pas la permission pour intégrer cette question.';
$string['errorunknownquestion'] = 'Question inconnue, ou non partageable.';
$string['filtername'] = 'Intégrer des questions';
$string['generalfeedback_desc'] = 'Si le feedback général doit être affiché par défaut dans les questions intégrées.';
$string['howquestionbehaves'] = 'Comportement de la question';
$string['howquestionbehaves_desc'] = 'Comportement par défaut pour les questions intégrées';
$string['iframetitle'] = 'Question intégrée';
$string['invalidcategory'] = 'La catégorie avec l’ID « {$a->catid} » n’existe pas dans « {$a->contextname} ».';
$string['invalidemptycategory'] = 'La catégorie « {$a->catname} » dans « {$a->contextname} » ne contient pas de questions intégrables.';
$string['invalidquestion'] = 'La question avec l’ID « {$a->qid} » n’existe pas dans cette catégorie « {$a->catname} [{$a->catidnumber}] ».';
$string['invalidrandomquestion'] = 'Impossible de générer une question aléatoire depuis la catégorie de questions « {$a} ».';
$string['invalidtoken'] = 'Cette question intégrée n’est pas configurée correctement.';
$string['markdp_desc'] = 'Le nombre de chiffres décimaux à afficher par défaut lors de l’affichage des notes dans les questions intégrées.';
$string['markedoutof'] = 'Noté sur';
$string['marks_desc'] = 'Si la note numérique doit être affichée par défaut dans les questions intégrées';
$string['nameandcount'] = '{$a->name} ({$a->count})';
$string['nameandidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['nameidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->count})';
$string['noguests'] = 'Les utilisateurs invités n’ont pas la permission d’interagir avec des questions intégrées.';
$string['notyourattempt'] = 'Ceci n’est pas votre tentative.';
$string['pluginname'] = 'Intégrer des questions';
$string['privacy:metadata'] = 'Le filtre de questions intégrées n’enregistre aucune donnée personnelle.';
$string['questionidnumber'] = 'Numéro d’identification de la question (ID)';
$string['questionidnumberchanged'] = 'La question tentée ici n’a plus le numéro d’identification {$a}.';
$string['questionnolongerhasidnumber'] = 'La question tentée ici n’a plus de numéro d’identification.';
$string['questionnolongerincategory'] = 'La question tentée ici n’est plus dans la catégorie avec l’ID {$a}.';
$string['responsehistory_desc'] = 'Si l’historique de réponse doit être affiché par défaut pour les questions intégrées';
$string['restart'] = 'Recommencer';
$string['securityheading'] = 'Paramètres de sécurité';
$string['title'] = 'Question intégrée';
$string['warningfilteroffglobally'] = 'Avertissement : le filtre de question intégrée est désactivé dans les paramètres de filtre sur tout le site.';
$string['warningfilteroffhere'] = 'Avertissement : la filtre de question intégrée est désactivé dans ce cours.';
$string['whichquestion'] = 'Quelle question';
