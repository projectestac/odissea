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
 * Strings for component 'tool_analytics', language 'fr', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Précision';
$string['allpredictions'] = 'Toutes les prédictions';
$string['analysingsitedata'] = 'Analyse du site en cours';
$string['analyticmodels'] = 'Modèles d\'analyse de données';
$string['bettercli'] = 'L\'évaluation des modèles et la génération de prédictions peut causer une charge importante. Il est conseillé de lancer ces actions au moyen de la ligne de commande.';
$string['cantguessenddate'] = 'Impossible d\'estimer la date de fin';
$string['cantguessstartdate'] = 'Impossible d\'estimer la date de début';
$string['clearmodelpredictions'] = 'Voulez-vous vraiment supprimer tous les prédictions « {$a} »?';
$string['clearpredictions'] = 'Supprimer les prédictions';
$string['clienablemodel'] = 'Vous pouvez activer le modèle en sélectionnant une méthode de division temporelle par son identifiant. Il est aussi possible de l\'activer plus tard dans l\'interface web (« aucun » pour sortir)';
$string['clievaluationandpredictions'] = 'Une tâche programmée passe en revue tous les modèles activés et calcule des prédictions. L\'évaluation des modèles via l\'interface web est désactivée. Vous pouvez permettre de lancer ces processus au moyen de l\'interface web en désactivant le <a href="{$a}">réglage « onlycli »</a>';
$string['clievaluationandpredictionsnoadmin'] = 'Une tâche programmée passe en revue tous les modèles activés et en calcule les prédictions. L\'évaluation des modèles au moyen de l\'interface web est désactivée. Elle peut être activée par un administrateur du site.';
$string['disabled'] = 'Désactivé';
$string['editmodel'] = 'Modifier le modèle « {$a} »';
$string['edittrainedwarning'] = 'Ce modèle a déjà été entraîné. Un changement de ses indicateurs ou de sa méthode de division temporelle supprimera ses prédictions antérieures et initiera la génération de nouvelles prédictions';
$string['enabled'] = 'Activé';
$string['errorcantenablenotimesplitting'] = 'Veuillez sélectionner une méthode de division temporelle avant d\'activer le modèle';
$string['errornoenabledandtrainedmodels'] = 'Il n\'y a pas de modèle activé et entraîné pour effectuer des prédictions.';
$string['errornoenabledmodels'] = 'Il n\'y a pas de modèle activé à entraîner.';
$string['errornoexport'] = 'Seuls les modèles entraînés peuvent être exportés';
$string['errornostaticedit'] = 'Les modèles basés sur des suppositions ne peuvent pas être modifiés.';
$string['errornostaticevaluated'] = 'Les modèles basés sur des suppositions ne peuvent pas être évalués. Ils sont toujours corrects à 100 %, en raison de la façon dont ils ont été définis.';
$string['errornostaticlog'] = 'Les modèles basés sur des suppositions ne peuvent pas être évalués, car il n\'y a pas de journal de performance.';
$string['erroronlycli'] = 'Le lancement n\'est autorisé qu\'au moyen de la ligne de commande';
$string['errortrainingdataexport'] = 'Les données d\'entraînement du modèle n\'ont pas pu être exportées';
$string['evaluate'] = 'Évaluer';
$string['evaluatemodel'] = 'Évaluer le modèle';
$string['evaluationinbatches'] = 'Les contenus du site sont calculés et stockés en lots. Le processus d\'évaluation peut être arrêté à tout moment. Lors du prochain lancement, il continuera là où il s\'est arrêté.';
$string['export'] = 'Exporter';
$string['exporttrainingdata'] = 'Exporter les données d\'entraînement';
$string['extrainfo'] = 'Infos';
$string['generalerror'] = 'Erreur d\'évaluation. Code d\'erreur {$a}';
$string['getpredictions'] = 'Obtenir les prédictions';
$string['getpredictionsresults'] = 'Résultats utilisant la division temporelle de cours {$a->name}';
$string['getpredictionsresultscli'] = 'Résultats utilisant la division temporelle de cours {$a->name} (id: {$a->id})';
$string['goodmodel'] = 'Ce modèle est bon et il peut être utilisé pour effectuer des prédictions. Activez-le pour commencer à obtenir des prédictions.';
$string['indicators'] = 'Indicateurs';
$string['info'] = 'Infos';
$string['insights'] = 'Indications';
$string['invalidanalysables'] = 'Éléments non valides du site';
$string['invalidanalysablesinfo'] = 'Cette page énumère les éléments analysables qui ne peuvent pas être utilisés par ce modèle de prédictions. Les éléments mentionnés ne peuvent pas être utilisés ni pour entraîner le modèle, ni pour obtenir des prédictions.';
$string['invalidanalysablestable'] = 'Tableau des éléments analysables non valides du site';
$string['invalidprediction'] = 'Non valide pour obtenir des prédictions';
$string['invalidtraining'] = 'Non valide pour entraîner le modèle';
$string['loginfo'] = 'Journaliser des infos supplémentaires';
$string['modelid'] = 'ID du modèle';
$string['modelinvalidanalysables'] = 'Éléments analysables non valides pour le modèle « {$a} »';
$string['modelresults'] = '{$a} résultats';
$string['modeltimesplitting'] = 'Division temporelle';
$string['nextpage'] = 'Page suivante';
$string['nodatatoevaluate'] = 'Il n\'y a pas de données pour évaluer le modèle';
$string['nodatatopredict'] = 'Pas de nouveaux éléments d\'où tirer des prédictions';
$string['nodatatotrain'] = 'Il n\'y a pas de nouvelles données à utiliser pour l\'entraînement';
$string['noinvalidanalysables'] = 'Ce site ne contient aucun élément analysable non valide.';
$string['notdefined'] = 'Pas encore définie';
$string['pluginname'] = 'Modèles d\'analyse de données';
$string['predictionprocessfinished'] = 'Processus de prédiction terminé';
$string['predictionresults'] = 'Résultats de prédictions';
$string['predictmodels'] = 'Modèles de prédiction';
$string['predictorresultsin'] = 'Le moteur de prédictions a journalisé des informations dans le dossier {$a}';
$string['previouspage'] = 'Page précédente';
$string['privacy:metadata'] = 'Le plugin Modèles d\'analyse de données n\'enregistre aucune donnée personnelle.';
$string['sameenddate'] = 'La date de fin actuelle est bonne';
$string['samestartdate'] = 'La date de début actuelle est bonne';
$string['target'] = 'Cible';
$string['timesplittingnotdefined'] = 'La division temporelle n\'est pas définie.';
$string['timesplittingnotdefined_help'] = 'Vous devez sélectionner une méthode de division temporelle avant d\'activer le modèle.';
$string['trainandpredictmodel'] = 'Entrainement du modèle et calcul des prédictions';
$string['trainingprocessfinished'] = 'Processus d\'entraînement terminé';
$string['trainingresults'] = 'Résultats de l\'entraînement';
$string['trainmodels'] = 'Entraîner les modèles';
$string['viewlog'] = 'Journal';
$string['weeksenddateautomaticallyset'] = 'La date de fin a été automatiquement fixée sur la base de la date de début et du nombre de sections du cours';
$string['weeksenddatedefault'] = 'Date de fin calculée automatiquement sur la base de la date de début du cours.';
