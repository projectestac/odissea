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
 * Strings for component 'analytics', language 'fr', branch 'MOODLE_36_STABLE'
 *
 * @package   analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analysable {$a->analysableid} pas utilisé : {$a->errors}';
$string['analysablenotvalidfortarget'] = 'L\'analysable {$a->analysableid} n\'est pas valide pour cette cible : {$a->result}';
$string['analysisinprogress'] = 'Encore en cours d\'analyse par un lancement antérieur';
$string['analytics'] = 'Analyses de données';
$string['analyticslogstore'] = 'Stockage de journaux utilisé pour les analyses de données';
$string['analyticslogstore_help'] = 'Le stockage de journaux qui sera utilisé par l\'API d\'analyse de données pour lire l\'activité des utilisateurs';
$string['analyticssettings'] = 'Réglages de l\'analyse des données';
$string['coursetoolong'] = 'Le cours est trop long';
$string['defaultpredictionsprocessor'] = 'Processeur de prédictions par défaut';
$string['defaultpredictoroption'] = 'Processeur par défaut ({$a})';
$string['disabledmodel'] = 'Modèle désactivé';
$string['enabledtimesplittings'] = 'Méthodes de division temporelle';
$string['erroralreadypredict'] = 'Le fichier {$a} a déjà été utilisé pour faire des prédictions.';
$string['errorcannotreaddataset'] = 'Le fichiers de jeu de données {$a} ne peut pas être lu';
$string['errorcannotwritedataset'] = 'Le fichiers de jeu de données {$a} ne peut pas être écrit';
$string['errorendbeforestart'] = 'La date de fin ({$a}) est antérieure à la date de début du cours.';
$string['errorinvalidindicator'] = 'Indicateur {$a} non valide';
$string['errorinvalidtimesplitting'] = 'Division temporelle non valide ; veuillez vous assurer d\'avoir ajouté le nom de classe complet.';
$string['errornoindicators'] = 'Ce modèle n\'a aucun indicateur.';
$string['errornopredictresults'] = 'Aucun résultat renvoyé par le processeur de prédictions. Veuillez consulter le contenu du dossier de sortie pour plus de détails.';
$string['errornoroles'] = 'Le rôle d\'étudiant ou d\'enseignant n\'a pas été défini. Veuillez les définir dans la page de configuration de l\'analyse de données.';
$string['errornotarget'] = 'Ce modèle n\'a aucune cible.';
$string['errornotimesplittings'] = 'Ce modèle n\'a aucune méthode de division temporelle.';
$string['errorpredictioncontextnotavailable'] = 'Ce contexte de prédiction n\'est plus disponible.';
$string['errorpredictionformat'] = 'Format de calculs de prédiction erroné';
$string['errorpredictionnotfound'] = 'Prédiction introuvable';
$string['errorpredictionsprocessor'] = 'Erreur du processeur de prédictions : {$a}';
$string['errorpredictwrongformat'] = 'La sortie du processeur de prédictions ne peut pas être décodée : « {$a} »';
$string['errorprocessornotready'] = 'Le processeur de prédictions sélectionné n\'est pas prêt : {$a}';
$string['errorsamplenotavailable'] = 'L\'échantillon prédit n\'est plus disponible';
$string['errorunexistingmodel'] = 'Modèle {$a} inexistant';
$string['errorunexistingtimesplitting'] = 'La méthode de division temporelle sélectionnée n\'est pas disponible.';
$string['errorunknownaction'] = 'Action inconnue';
$string['eventinsightsviewed'] = 'Indications consultées';
$string['eventpredictionactionstarted'] = 'Processus de prédiction commencé';
$string['fixedack'] = 'Accuser réception';
$string['insightinfomessage'] = 'Le système a généré quelques indications pour vous : {$a}';
$string['insightinfomessagehtml'] = 'Le système a généré quelques indications pour vous : <a href="{$a}">{$a}</a>.';
$string['insightmessagesubject'] = 'Nouvelle indication pour « {$a->contextname} » : {$a->insightname}';
$string['invalidanalysablefortimesplitting'] = 'Ne peut pas être analysé à l\'aide de la méthode de division temporelle {$a}.';
$string['invalidtimesplitting'] = 'Le modèle d\'identifiant {$a} nécessite une méthode de division temporelle avant de pouvoir être utilisée pour l\'entrainement.';
$string['modeloutputdir'] = 'Dossier des sorties de modèles';
$string['modeloutputdirinfo'] = 'Le dossier où les processeurs de prédictions enregistrent toutes les informations d\'évaluation. Utile pour le débogage et la recherche.';
$string['modeltimelimit'] = 'Limite de durée d\'analyse par modèle';
$string['modeltimelimitinfo'] = 'Ce réglage limite la durée utilisée par chaque modèle lors de l\'analyse des contenus de la plateforme.';
$string['nocourses'] = 'Aucun cours à analyser';
$string['nodata'] = 'Aucune donnée à analyser';
$string['noevaluationbasedassumptions'] = 'Les modèles basés sur des suppositions ne peuvent pas être évalués.';
$string['noinsights'] = 'Aucune indication annoncée';
$string['noinsightsmodel'] = 'Ce modèle ne génère pas d\'indication';
$string['nonewdata'] = 'Aucune nouvelle donnée disponible';
$string['nonewranges'] = 'Pas encore de nouvelle prédiction';
$string['nonewtimeranges'] = 'Pas de nouvel intervalle de temps ; rien à prédire.';
$string['nopredictionsyet'] = 'Pas encore de prédiction';
$string['noranges'] = 'Pas de prédiction';
$string['notrainingbasedassumptions'] = 'Les modèles basés sur des suppositions ne nécessitent pas d\'entrainement';
$string['notuseful'] = 'Pas utile';
$string['novaliddata'] = 'Pas de donnée valide disponible';
$string['novalidsamples'] = 'Pas d\'échantillon valide disponible';
$string['onlycli'] = 'Lancement des processus d\'analyse de données uniquement en ligne de commande';
$string['onlycliinfo'] = 'Les processus d\'analyse de données, tels que l\'évaluation de modèles, l\'entraînement aux algorithmes d\'apprentissage automatique ou l\'obtention de prédictions, peuvent prendre du temps. Ils seront lancés par des tâches programmées et peuvent être lancés manuellement au moyen de l\'interface en ligne de commande. Si ce réglage est désactivé, les administrateurs et gestionnaires du site peuvent lancer ces processus au moyen de l\'interface web.';
$string['predictionsprocessor'] = 'Processeur de prédictions';
$string['predictionsprocessor_help'] = 'Un processeur de prédictions est un programme d\'apprentissage automatique qui traite les jeux de données générés en calculant les indicateurs et cibles des modèles. Chaque modèle peut utiliser un processeur différent. Celui spécifié ici sera le processeur par défaut.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Calculs d\'indicateurs';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Le contexte';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Fin du temps de calcul';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'La classe de calcul d\'indicateurs';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'L\'identifiant de l\'échantillon';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'La table d\'origine de l\'échantillon';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'La date et l\'heure du début des calculs';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Quand la prédiction a été faite';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'La valeur calculée';
$string['privacy:metadata:analytics:predictionactions'] = 'Actions de prédiction';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'Le nom de l\'action';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'L\'identifiant de la prédiction';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Quand l\'action de prédiction a été effectuée';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'L\'utilisateur qui a fait l\'action';
$string['privacy:metadata:analytics:predictions'] = 'Prédictions';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Calculs d\'indicateurs';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Le contexte';
$string['privacy:metadata:analytics:predictions:modelid'] = 'L\'identifiant du modèle';
$string['privacy:metadata:analytics:predictions:prediction'] = 'La prédiction';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Le résultat de prédiction';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'L\'index de la méthode de division temporelle';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'L\'identifiant de l\'échantillon';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Quand la prédiction a été faite';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Fin du temps de calcul';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Début du temps de calcul';
$string['processingsitecontents'] = 'Contenus du site en cours de traitement';
$string['successfullyanalysed'] = 'Analysé avec succès';
$string['timesplittingmethod'] = 'Méthode de division temporelle';
$string['timesplittingmethod_help'] = 'Une méthode de division temporelle divise la durée du cours en intervalles ; le moteur de prédictions tourne à la fin de chacun de ces intervalles. Il est recommandé de n\'activer que les méthodes de division temporelle que vous utiliserez réellement, car le processus d\'évaluation les traitera les unes après les autres. Plus il y aura de méthodes activées, plus le processus d\'évaluation sera lent.';
$string['viewprediction'] = 'Consulter les informations détaillées de prédiction';
