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
 * Strings for component 'tool_analytics', language 'fr', version '4.4'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Précision';
$string['actionexecutedgroupedusefulness'] = 'Actions groupées';
$string['actions'] = 'Actions';
$string['actionsexecutedbyusers'] = 'Actions effectuées par les utilisateurs';
$string['actionsexecutedbyusersfor'] = 'Actions effectuées par les utilisateurs pour le modèle « {$a} »';
$string['allpredictions'] = 'Toutes les prédictions';
$string['alltimesplittingmethods'] = 'Tous les intervalles d’analyse';
$string['analysingsitedata'] = 'Analyse du site en cours';
$string['analysis'] = 'Analyse';
$string['analyticmodels'] = 'Modèles d’analyse de données';
$string['bettercli'] = 'L’évaluation des modèles et la génération de prédictions peut causer une charge importante. Il est conseillé de lancer ces actions au moyen de la ligne de commande.';
$string['cantguessenddate'] = 'Impossible d’estimer la date de fin';
$string['cantguessstartdate'] = 'Impossible d’estimer la date de début';
$string['classdoesnotexist'] = 'La classe {$a} n’existe pas';
$string['clearmodelpredictions'] = 'Voulez-vous vraiment supprimer toutes les prédictions « {$a} » ?';
$string['clearpredictions'] = 'Supprimer les prédictions';
$string['clienablemodel'] = 'Vous pouvez activer le modèle en sélectionnant un intervalle d’analyse par son identifiant. Il est aussi possible de l’activer plus tard dans l’interface web (« aucun » pour sortir)';
$string['clievaluationandpredictions'] = 'Une tâche programmée passe en revue tous les modèles activés et calcule des prédictions. L’évaluation des modèles via l’interface web est désactivée. Vous pouvez permettre de lancer ces processus au moyen de l’interface web en désactivant le <a href="{$a}">réglage « onlycli »</a>';
$string['clievaluationandpredictionsnoadmin'] = 'Une tâche programmée passe en revue tous les modèles activés et en calcule les prédictions. L’évaluation des modèles au moyen de l’interface web est désactivée. Elle peut être activée par un administrateur du site.';
$string['component'] = 'Composant';
$string['componentcore'] = 'Cœur';
$string['componentselect'] = 'Sélectionner tous les modèles fournis par le composant « {$a} »';
$string['componentselectnone'] = 'Tout désélectionner';
$string['contexts'] = 'Contextes';
$string['contexts_help'] = 'Ce modèle sera limité à ce jeu de contextes. Aucune restriction de contexte ne sera appliquée si aucun contexte n’est sélectionné.';
$string['createmodel'] = 'Créer un modèle';
$string['currenttimesplitting'] = 'Intervalle d’analyse actuel';
$string['delete'] = 'Supprimer';
$string['deletemodelconfirmation'] = 'Voulez-vous vraiment supprimer « {$a} » ? Ces modifications ne peuvent pas être annulées.';
$string['disabled'] = 'Désactivé';
$string['editmodel'] = 'Modifier le modèle « {$a} »';
$string['edittrainedwarning'] = 'Ce modèle a déjà été entraîné. Un changement de ses indicateurs ou de son intervalle d’analyse supprimera ses prédictions antérieures et initiera la génération de nouvelles prédictions';
$string['enabled'] = 'Activé';
$string['errorcantenablenotimesplitting'] = 'Veuillez sélectionner un intervalle d’analyse avant d’activer le modèle';
$string['errornoenabledandtrainedmodels'] = 'Il n’y a pas de modèle activé et entraîné pour effectuer des prédictions.';
$string['errornoenabledmodels'] = 'Il n’y a pas de modèle activé à entraîner.';
$string['errornoexport'] = 'Seuls les modèles entraînés peuvent être exportés';
$string['errornostaticevaluated'] = 'Les modèles basés sur des suppositions ne peuvent pas être évalués. Ils sont toujours corrects à 100 %, en raison de la façon dont ils ont été définis.';
$string['errornostaticlog'] = 'Les modèles basés sur des suppositions ne peuvent pas être évalués, car il n’y a pas de journal de performance.';
$string['erroronlycli'] = 'Le lancement n’est autorisé qu’au moyen de la ligne de commande';
$string['errortrainingdataexport'] = 'Les données d’entraînement du modèle n’ont pas pu être exportées';
$string['evaluate'] = 'Évaluer';
$string['evaluatemodel'] = 'Évaluer le modèle';
$string['evaluationinbatches'] = 'Les contenus du site sont calculés et stockés par lots. Le processus d’évaluation peut être arrêté à tout moment. Lors du prochain lancement, il continuera là où il s’est arrêté.';
$string['evaluationmode'] = 'Mode d’évaluation';
$string['evaluationmode_help'] = 'Il y a deux modes d’évaluation :

* Modèle entraîné - Les données du site sont utilisées comme données de test pour évaluer la précision du modèle entraîné.
* Configuration - Les données du site sont séparées en données d’entraînement et données de test, pour à la fois entraîner et tester la précision de la configuration du modèle.

Le mode Modèle entraîné n’est disponible que si un modèle entraîné a été importé dans le site et qu’il n’a pas encore été ré-entraîné avec les données du site.';
$string['evaluationmodecolconfiguration'] = 'Configuration';
$string['evaluationmodecoltrainedmodel'] = 'Modèle entraîné';
$string['evaluationmodeconfiguration'] = 'Évaluer le modèle de configuration';
$string['evaluationmodeinfo'] = 'Ce modèle a été importé dans le site. Vous pouvez soit évaluer sa performance, soit évaluer la performance de sa configuration au moyen des données du site.';
$string['evaluationmodetrainedmodel'] = 'Évaluer le modèle entraîné';
$string['executescheduledanalysis'] = 'Effectuer l’analyse programmée';
$string['export'] = 'Exporter';
$string['exportincludeweights'] = 'Inclure les pondérations du modèle entraîné';
$string['exportmodel'] = 'Exporter la configuration';
$string['exporttrainingdata'] = 'Exporter les données d’entraînement';
$string['extrainfo'] = 'Infos';
$string['generalerror'] = 'Erreur d’évaluation. Code d’erreur {$a}';
$string['goodmodel'] = 'Ce modèle est bon et il peut être utilisé pour effectuer des prédictions. Activez-le pour commencer à obtenir des prédictions.';
$string['ignoreversionmismatches'] = 'Ignorer les différences de version';
$string['ignoreversionmismatchescheckbox'] = 'Ignorer les différences entre la version de ce site et la version du site original.';
$string['importedsuccessfully'] = 'Le modèle a été correctement importé';
$string['importmodel'] = 'Importer le modèle';
$string['indicators'] = 'Indicateurs';
$string['indicators_help'] = 'Les indicateurs sont les éléments dont vous pensez qu’ils mèneront à une prédiction précise de la cible.';
$string['indicators_link'] = 'Indicators';
$string['indicatorsnum'] = 'Nombre d’indicateurs : {$a}';
$string['info'] = 'Infos';
$string['insights'] = 'Indications';
$string['insightsreport'] = 'Rapport d’indications';
$string['invalidanalysables'] = 'Éléments non valides du site';
$string['invalidanalysablesinfo'] = 'Cette page énumère les éléments analysables qui ne peuvent pas être utilisés par ce modèle de prédictions. Les éléments mentionnés ne peuvent pas être utilisés ni pour entraîner le modèle, ni pour obtenir des prédictions.';
$string['invalidanalysablestable'] = 'Tableau des éléments analysables non valides du site';
$string['invalidcurrenttimesplitting'] = 'L’intervalle d’analyse actuel n’est pas valide pour la cible de ce modèle. Veuillez choisir un intervalle différent.';
$string['invalidindicatorsremoved'] = 'Un nouveau modèle a été ajouté. Les indicateurs qui ne fonctionnent pas avec la cible sélectionnée ont été automatiquement supprimés.';
$string['invalidprediction'] = 'Non valide pour obtenir des prédictions';
$string['invalidtimesplitting'] = 'L’intervalle d’analyse sélectionné n’est pas valide pour la cible de ce modèle.';
$string['invalidtimesplittinginmodels'] = 'L’intervalle d’analyse utilisé par certains des modèles n’est pas valide. Veuillez choisir un intervalle différent pour les modèles suivants : {$a}';
$string['invalidtraining'] = 'Non valide pour entraîner le modèle';
$string['loginfo'] = 'Journaliser des infos supplémentaires';
$string['missingmoodleversion'] = 'Le fichier importé ne définit pas de numéro de version';
$string['modelid'] = 'ID du modèle';
$string['modelinvalidanalysables'] = 'Éléments analysables non valides pour le modèle « {$a} »';
$string['modelname'] = 'Nom du modèle';
$string['modelresults'] = '{$a} résultats';
$string['modeltimesplitting'] = 'Intervalle d’analyse';
$string['newmodel'] = 'Nouveau modèle';
$string['nextpage'] = 'Page suivante';
$string['noactionsfound'] = 'Les utilisateurs n’ont effectué aucune action sur les indications générées.';
$string['nodatatoevaluate'] = 'Il n’y a pas de données pour évaluer le modèle';
$string['nodatatopredict'] = 'Pas de nouveaux éléments d’où tirer des prédictions.';
$string['nodatatotrain'] = 'Il n’y a pas de nouvelles données à utiliser pour l’entraînement.';
$string['noinvalidanalysables'] = 'Ce site ne contient aucun élément analysable non valide.';
$string['notdefined'] = 'Pas encore définie';
$string['pluginname'] = 'Modèles d’analyse de données';
$string['predictionprocessfinished'] = 'Processus de prédiction terminé';
$string['predictionresults'] = 'Résultats de prédictions';
$string['predictmodels'] = 'Modèles de prédiction';
$string['predictorresultsin'] = 'Le moteur de prédictions a journalisé des informations dans le dossier {$a}';
$string['previouspage'] = 'Page précédente';
$string['privacy:metadata'] = 'Le plugin Modèles d’analyse de données n’enregistre aucune donnée personnelle.';
$string['restoredefault'] = 'Restaurer les modèles par défaut';
$string['restoredefaultempty'] = 'Veuillez sélectionner les modèles à restaurer.';
$string['restoredefaultinfo'] = 'Ces modèles par défaut sont manquants ou ont été modifiés depuis leur installation. Vous pouvez restaurer les modèles par défaut sélectionnés.';
$string['restoredefaultnone'] = 'Tous les modèles fournis par défaut dans le cœur et par les plugins installés ont déjà été créés. Aucun nouveau modèle n’a été trouvé ; il n’y a rien à restaurer.';
$string['restoredefaultsome'] = '{$a->count} nouveaux modèles re-créés correctement.';
$string['restoredefaultsubmit'] = 'Restaurer la sélection';
$string['sameenddate'] = 'La date de fin actuelle est bonne';
$string['samestartdate'] = 'La date de début actuelle est bonne';
$string['scheduledanalysisresults'] = 'Résultats utilisant la méthode de division temporelle {$a->name}';
$string['scheduledanalysisresultscli'] = 'Résultats utilisant la méthode de division temporelle {$a->name} (id: {$a->id})';
$string['selecttimesplittingforevaluation'] = 'Sélectionner l’intervalle d’analyse que vous voulez utiliser pour évaluer la configuration du modèle.';
$string['target'] = 'Cible';
$string['target_help'] = 'La cible est ce que le modèle prédira.';
$string['target_link'] = 'Targets';
$string['timesplittingnotdefined'] = 'Aucun intervalle d’analyse n’est défini.';
$string['timesplittingnotdefined_help'] = 'Vous devez sélectionner un intervalle d’analyse avant d’activer le modèle.';
$string['trainandpredictmodel'] = 'Entrainement du modèle et calcul des prédictions';
$string['trainingprocessfinished'] = 'Processus d’entraînement terminé';
$string['trainingresults'] = 'Résultats de l’entraînement';
$string['trainmodels'] = 'Entraîner les modèles';
$string['versionnotsame'] = 'Le fichier importé est d’une version différente ({$a->importedversion}) que la version actuelle ({$a->version})';
$string['viewlog'] = 'Journal d’évaluation';
$string['weeksenddateautomaticallyset'] = 'La date de fin a été automatiquement fixée sur la base de la date de début et du nombre de sections du cours';
$string['weeksenddatedefault'] = 'Date de fin calculée automatiquement sur la base de la date de début du cours.';
