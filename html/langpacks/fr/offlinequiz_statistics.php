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
 * Strings for component 'offlinequiz_statistics', language 'fr', version '4.1'.
 *
 * @package     offlinequiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Réponse actuelle';
$string['allattempts'] = 'toutes les tentatives';
$string['allattemptsavg'] = 'Note moyenne de toutes les tentatives';
$string['allattemptscount'] = 'Nombre total des tentatives évaluées';
$string['allgroups'] = 'Tous les groupes';
$string['analysisofresponses'] = 'Analyse des réponses';
$string['analysisofresponsesfor'] = 'Analyse des réponses pour {$a}.';
$string['attempts'] = 'Tentatives';
$string['attemptsall'] = 'toutes les tentatives';
$string['attemptsfirst'] = 'Première tentative';
$string['backtoquestionsandanswers'] = 'Retour à la page principale de rapport statistique';
$string['bestgrade'] = 'La note la plus haute :';
$string['calculatefrom'] = 'Calculer les statistiques de';
$string['cic'] = 'Coefficient de cohérence interne pour {$a}';
$string['completestatsfilename'] = 'statistiques_completes';
$string['correct'] = 'Réponse correcte';
$string['count'] = 'Nombre';
$string['coursename'] = 'Nom du cours';
$string['detailedanalysis'] = 'Analyse plus détaillée des réponses à cette question';
$string['differentquestions'] = '- Vos groupes de test hors-ligne contiennent des jeux de questions différents.';
$string['differentsumgrades'] = '- Vos groupes de test hors-ligne ont des sommes de notes différentes ({$a}). En conséquence les notes moyenne, médiane et l’écart-type ne peuvent être calculés.';
$string['discrimination_index'] = 'Indice de discrimination';
$string['discriminative_efficiency'] = 'Efficience discriminatoire';
$string['downloadeverything'] = 'Télécharger le rapport complet comme';
$string['duration'] = 'Ouvert durant';
$string['effective_weight'] = 'Coefficient effectif';
$string['errordeleting'] = 'Erreur de suppression des anciens enregistrements de {$a}.';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'La question ({$a}) est présente avec des coefficients différents en des endroits différents du test. Une telle fonctionnalité n’est pas supportée par le rapport statistique et pourrait rendre des statistiques de cette question incorrectes.';
$string['errormedian'] = 'Erreur de récupération de la médiane';
$string['errorpowerquestions'] = 'Erreur de récupération des données pour calculer la variance des notes de question';
$string['errorpowers'] = 'Erreur de récupération des données pour calculer la variance des notes des tests';
$string['errorrandom'] = 'Erreur de récupération des données du sous-élément';
$string['errorratio'] = 'Erreur de rapport pour {$a}';
$string['errorstatisticsquestions'] = 'Erreur de récupération des données pour calculer les statistiques des notes de questions';
$string['facility'] = 'Indice de facilité';
$string['firstattempts'] = 'premières tentatives';
$string['firstattemptsavg'] = 'Note moyenne des premières tentatives';
$string['firstattemptscount'] = 'Nombre des premières tentatives évaluées';
$string['frequency'] = 'Fréquence';
$string['intended_weight'] = 'Pondération désirée';
$string['kurtosis'] = 'Aplatissement de la distribution des notes pour {$a}';
$string['lastcalculated'] = 'Dernier calcul il y a {$a->lastcalculated}. {$a->count} tentatives depuis.';
$string['maxgrade'] = 'Note maximale possible';
$string['median'] = 'Note médiane pour {$a}';
$string['modelresponse'] = 'Réponse modèle';
$string['negcovar'] = 'Covariance négative de la note de cette question avec la note de la totalité de la tentative';
$string['negcovar_help'] = 'La note donnée à cette question pour cet ensemble de tentatives du test varie de façon opposée à la note globale de la tentative. Cela signifie que la note de la tentative tend à être au-dessous de la moyenne lorsque la note pour cette question est au-dessus, et vice-versa.

L’équation pour une pondération efficace ne peut pas être calculée dans ce cas. Les calculs pour la pondération de question efficace des autres questions de ce test ne sont valables que si la note maximale donnée aux questions avec une covariance négative (surlignée) est de 0.

Si vous modifiez un test et donnez à ces questions à covariance négative une note maximale de zéro, alors leur pondération efficace sera nulle et les pondérations efficaces des autres questions seront calculées adéquatement.';
$string['nostudentsingroup'] = 'Il n’y a pas encore d’étudiant dans ce groupe';
$string['offlinequizinformation'] = 'Information du test hors-ligne';
$string['offlinequizname'] = 'Nom du test hors-ligne';
$string['offlinequizoverallstatistics'] = 'Statistiques globales du test hors-ligne';
$string['offlinequizstructureanalysis'] = 'Analyse structurelle du test hors-ligne';
$string['optiongrade'] = 'Crédit partiel';
$string['partially'] = 'Réponse partiellement correcte';
$string['partofquestion'] = '#Réponse';
$string['pluginname'] = 'Statistiques des tests hors-ligne';
$string['position'] = 'Position';
$string['positions'] = 'Position(s)';
$string['preferencespage'] = 'Préférences pour cette page uniquement';
$string['preferencessave'] = 'Enregistrer les préférences';
$string['privacy:metadata'] = 'Ce plugin n’enregistre aucune donnée personnelle.';
$string['questionandanswerstats'] = 'Questions et réponses';
$string['questionandanswerstatsheader'] = 'Analyse des questions et des réponses';
$string['questioninformation'] = 'Info question';
$string['questionname'] = 'Nom de question';
$string['questionnumber'] = 'N° Q';
$string['questionstatistics'] = 'Statistiques question';
$string['questionstats'] = 'Analyse des questions';
$string['questionstatsfilename'] = 'statistiques_de_question';
$string['questionstatsheader'] = 'Analyse des questions';
$string['questiontype'] = 'Type de question';
$string['random_guess_score'] = 'Score de réponses au hasard';
$string['recalculatenow'] = 'Recalculer maintenant';
$string['remarks'] = 'Note :';
$string['response'] = 'Réponse';
$string['skewness'] = 'Dissymétrie de la distribution des notes pour {$a}';
$string['standarddeviation'] = 'Écart type pour {$a}';
$string['standarddeviationq'] = 'Écart type';
$string['standarderror'] = 'Erreur standard pour {$a}';
$string['statistics'] = 'Statistiques';
$string['statistics:componentname'] = 'Rapport de statistiques des tests hors-ligne';
$string['statistics:view'] = 'Consulter le rapport de statistiques';
$string['statisticsforgroup'] = 'Groupe';
$string['statisticshelp'] = 'Aide pour les statistiques de tests hors-ligne';
$string['statisticsreport'] = 'Rapport de statistiques';
$string['statisticsreportgraph'] = 'Statistique des positions de question';
$string['statsfor'] = 'Statistiques de test hors-ligne pour {$a}';
$string['statsoverview'] = 'Vue d’ensemble';
$string['statsoverviewheader'] = 'Informations sur le test';
$string['worstgrade'] = 'La note la plus basse :';
$string['wrong'] = 'Réponse incorrecte';
