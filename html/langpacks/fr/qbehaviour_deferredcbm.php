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
 * Strings for component 'qbehaviour_deferredcbm', language 'fr', version '4.5'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Précision';
$string['accuracyandbonus'] = 'Précision + bonus';
$string['assumingcertainty'] = 'Vous n’avez pas sélectionné de niveau de certitude. Supposition : {$a}.';
$string['averagecbmmark'] = 'Évaluation moyenne du niveau de certitude';
$string['basemark'] = 'Évaluation de base {$a}';
$string['breakdownbycertainty'] = 'Ventilé par niveau de certitude';
$string['cbmbonus'] = 'Bonus niveau de certitude';
$string['cbmgradeexplanation'] = 'Dans l’évaluation avec indication de certitude, la note ci-dessus est affichée relativement au maximum pour toutes les réponses correctes, avec C = 1.';
$string['cbmgrades'] = 'Notes avec indication de certitude';
$string['cbmgrades_help'] = 'Dans l’évaluation avec indication de certitude, on obtient une note de 100 % lorsque l’on a répondu correctement à toutes les questions avec C = 1 (certitude faible). Les notes peuvent atteindre jusqu’à 300 % si l’on a répondu à correctement à chaque question avec C = 3 (certitude élevée). Les idées fausses (réponses fausses avec niveau de certitude élevé) font descendre la note beaucoup plus que les réponses fausses avec un niveau de certitude faible. Ceci peut avoir pour conséquence des notes négatives.

**Précision** est le pourcentage de réponses correctes sans tenir compte de l’indication de certitude, mais pondéré en fonction du maximum de chaque question. La capacité de distinguer entre réponses plus ou moins fiables donne une meilleure note que le choix du même niveau de certitude pour chaque réponse.
**Précision** + **Bonus niveau de certitude** est une meilleure mesure que **Précision**. Les idées fausses peuvent mener à un bonus négatif, incitant à réfléchir sur ce qui est su et ce qui ne l’est pas.';
$string['cbmgrades_link'] = 'qbehaviour/deferredcbm/certaintygrade';
$string['cbmmark'] = 'Évaluation du niveau de certitude {$a}';
$string['certainty'] = 'Certitude';
$string['certainty-1'] = 'Aucune idée';
$string['certainty1'] = 'C = 1 (pas du tout sûr : < 67%)';
$string['certainty2'] = 'C = 2 (moyennement sûr : > 67%)';
$string['certainty3'] = 'C = 3 (tout à fait sûr : > 80%)';
$string['certainty_help'] = 'L’évaluation avec indication de certitude demande que vous indiquiez à quel niveau vous pensez que votre réponse est correcte. Les niveaux de certitude sont :

Niveau de certitude  | C=1 (pas du tout sûr) | C=2 (moyen) | C=3 (tout à fait sûr)
------------------- | ------------- | ----------- | --------------
Points si correct   |    1          |    2        |     3
Points si incorrect |    0          |   -2        |    -6
Probabilité correct |  < 67%        | 67-80%      |  > 80%

On gagne plus de points en reconnaissant son incertitude. Par exemple, si vous pensez qu’il y a 1 chance sur 3 que votre réponse soit fausse, vous devriez saisir C = 1 et éviter ainsi le risque d’obtenir des points négatifs.';
$string['certainty_link'] = 'qbehaviour/deferredcbm/certainty';
$string['certaintyshort-1'] = 'Aucune idée';
$string['certaintyshort1'] = 'C = 1';
$string['certaintyshort2'] = 'C = 2';
$string['certaintyshort3'] = 'C = 3';
$string['dontknow'] = 'Aucune idée';
$string['foransweredquestions'] = 'Résultats pour les {$a} questions répondues';
$string['forentirequiz'] = 'Résultats tout le test ({$a} questions)';
$string['howcertainareyou'] = 'Niveau de certitude {$a->help} : {$a->choices}';
$string['judgementok'] = 'OK';
$string['judgementsummary'] = 'Réponses : {$a->responses}. Précision : {$a->fraction} (plage optimale {$a->idealrangelow} à {$a->idealrangehigh}). Vous étiez {$a->judgement} en sélectionnant ce niveau de certitude.';
$string['noquestions'] = 'Pas de réponse';
$string['overconfident'] = 'trop confiant';
$string['pluginname'] = 'Feedback a posteriori avec indication de certitude';
$string['privacy:metadata'] = 'Le plugin de comportement de question Feedback a posteriori avec indication de certitude n’enregistre aucune donnée personnelle.';
$string['slightlyoverconfident'] = 'un peu trop confiant';
$string['slightlyunderconfident'] = 'un peu trop prudent';
$string['underconfident'] = 'trop prudent';
$string['weightx'] = 'Pondération {$a}';
