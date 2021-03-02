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
 * Strings for component 'analytics', language 'fr', version '3.8'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analysable {$a->analysableid} pas utilisé : {$a->errors}';
$string['analysablenotvalidfortarget'] = 'L\'analysable {$a->analysableid} n\'est pas valide pour cette cible : {$a->result}';
$string['analysisinprogress'] = 'Encore en cours d\'analyse par un lancement antérieur';
$string['analytics'] = 'Analyses de données';
$string['analyticsdisabled'] = 'Les analyses de données sont désactivées. Vous pouvez les activer dans « Administration du site > Fonctions avancées ».';
$string['analyticslogstore'] = 'Stockage de journaux utilisé pour les analyses de données';
$string['analyticslogstore_help'] = 'Le stockage de journaux qui sera utilisé par l\'API d\'analyse de données pour lire l\'activité des utilisateurs.';
$string['analyticssettings'] = 'Réglages de l\'analyse des données';
$string['analyticssiteinfo'] = 'Informations du site';
$string['defaultpredictionsprocessor'] = 'Processeur de prédictions par défaut';
$string['defaultpredictoroption'] = 'Processeur par défaut ({$a})';
$string['defaulttimesplittingmethods'] = 'Intervalles d\'analyse par défaut pour l\'évaluation du modèle';
$string['defaulttimesplittingmethods_help'] = 'L\'intervalle d\'analyse définit quand le système calculera les prédictions, ainsi que la partie des journaux d\'activité qui seront considérés par ces prédictions. Le processus d\'évaluation du modèle passera par tous ces intervalles d\'analyse à moins qu\'un d\'entre eux soit spécifié.';
$string['disabledmodel'] = 'Modèle désactivé';
$string['erroralreadypredict'] = 'Le fichier {$a} a déjà été utilisé pour faire des prédictions.';
$string['errorcannotreaddataset'] = 'Le fichier de jeu de données {$a} ne peut pas être lu.';
$string['errorcannotusetimesplitting'] = 'L\'intervalle d\'analyse fourni ne peut pas être utilisé avec ce modèle.';
$string['errorcannotwritedataset'] = 'Le fichier de jeu de données {$a} ne peut pas être écrit.';
$string['errorexportmodelresult'] = 'Le modèle d\'apprentissage automatique ne peut pas être exporté.';
$string['errorimport'] = 'Erreur lors de l\'importation du fichier JSON fourni.';
$string['errorimportmissingclasses'] = 'Les composants d\'analyse suivants ne sont pas disponibles sur ce site : {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'Le modèle fourni requiert l\'installation des plugins suivants : {$a}. Les versions ne doivent pas nécessairement correspondre avec les versions installées sur votre site. L\'installation de la même version ou d\'une version ultérieure du plugin devrait suffire dans la plupart des cas.';
$string['errorimportversionmismatches'] = 'La version des composants suivants diffère de la version installée sur ce site : {$a}. Vous pouvez utiliser l\'option « Ignorer les différences de version » pour ignorer ces différences.';
$string['errorinvalidcontexts'] = 'Certains des contextes sélectionnés ne peuvent pas être utilisés dans cette cible.';
$string['errorinvalidindicator'] = 'Indicateur {$a} non valide';
$string['errorinvalidtarget'] = 'Cible {$a} non valide';
$string['errorinvalidtimesplitting'] = 'Intervalle d\'analyse non valide ; veuillez vous assurer d\'avoir ajouté le nom de classe complet.';
$string['errornocontextrestrictions'] = 'La cible sélectionnée ne supporte pas les restrictions de contexte';
$string['errornoexportconfig'] = 'Un problème est survenu lors de l\'exportation de la configuration du modèle.';
$string['errornoexportconfigrequirements'] = 'Seuls les modèles non statiques avec un intervalle d\'analyse peuvent être exportés.';
$string['errornoindicators'] = 'Ce modèle n\'a aucun indicateur.';
$string['errornopredictresults'] = 'Aucun résultat renvoyé par le processeur de prédictions. Veuillez consulter le contenu du dossier de sortie pour plus de détails.';
$string['errornoroles'] = 'Le rôle d\'étudiant ou d\'enseignant n\'a pas été défini. Veuillez les définir dans la page de configuration de l\'analyse de données.';
$string['errornotarget'] = 'Ce modèle n\'a aucune cible.';
$string['errornotimesplittings'] = 'Ce modèle n\'a pas d\'intervalle d\'analyse.';
$string['errorpredictioncontextnotavailable'] = 'Ce contexte de prédiction n\'est plus disponible.';
$string['errorpredictionformat'] = 'Format de calculs de prédiction erroné';
$string['errorpredictionnotfound'] = 'Prédiction introuvable';
$string['errorpredictionsprocessor'] = 'Erreur du processeur de prédictions : {$a}';
$string['errorpredictwrongformat'] = 'La sortie du processeur de prédictions ne peut pas être décodée : « {$a} »';
$string['errorprocessornotready'] = 'Le processeur de prédictions sélectionné n\'est pas prêt : {$a}';
$string['errorsamplenotavailable'] = 'L\'échantillon prédit n\'est plus disponible.';
$string['errorunexistingmodel'] = 'Modèle {$a} inexistant';
$string['errorunexistingtimesplitting'] = 'L\'intervalle d\'analyse sélectionné n\'est pas disponible.';
$string['errorunknownaction'] = 'Action inconnue';
$string['eventinsightsviewed'] = 'Indications consultées';
$string['eventpredictionactionstarted'] = 'Processus de prédiction commencé';
$string['fixedack'] = 'Accepter';
$string['incorrectlyflagged'] = 'Signalé incorrectement';
$string['insightinfomessageaction'] = '{$a->text} : {$a->url}';
$string['insightinfomessagehtml'] = 'Le système a généré une indication pour vous.';
$string['insightinfomessageplain'] = 'Le système a généré une indication pour vous : {$a}';
$string['insightmessagesubject'] = 'Nouvelle indication pour « {$a} »';
$string['invalidanalysablefortimesplitting'] = 'Ne peut pas être analysé en utilisant l\'intervalle d\'analyse {$a}.';
$string['invalidtimesplitting'] = 'Le modèle d\'identifiant {$a} nécessite un intervalle d\'analyse avant de pouvoir être utilisé pour l’entraînement.';
$string['levelinstitution'] = 'Niveau d\'enseignement';
$string['levelinstitutionisced0'] = 'Éducation de la petite enfance (« Inférieur au primaire » pour le niveau atteint)';
$string['levelinstitutionisced1'] = 'Enseignement primaire';
$string['levelinstitutionisced2'] = 'Premier cycle de l’enseignement secondaire';
$string['levelinstitutionisced3'] = 'Deuxième cycle de l’enseignement secondaire';
$string['levelinstitutionisced4'] = 'Enseignement post-secondaire non-supérieur (peut comprendre de la formation en entreprise ou communautaire/ONG)';
$string['levelinstitutionisced5'] = 'Enseignement supérieur de cycle court (peut comprendre de la formation en entreprise ou communautaire/ONG)';
$string['levelinstitutionisced6'] = 'Licence ou niveau équivalent';
$string['levelinstitutionisced7'] = 'Master ou niveau équivalent';
$string['levelinstitutionisced8'] = 'Doctorat ou niveau équivalent';
$string['modeinstruction'] = 'Modalité d\'enseignement';
$string['modeinstructionblendedhybrid'] = 'Hybride';
$string['modeinstructionfacetoface'] = 'Présentiel';
$string['modeinstructionfullyonline'] = 'Complètement en ligne';
$string['modeloutputdir'] = 'Dossier des sorties de modèles';
$string['modeloutputdirinfo'] = 'Le dossier où les processeurs de prédictions enregistrent toutes les informations d\'évaluation. Utile pour le débogage et la recherche.';
$string['modeloutputdirwithdefaultinfo'] = 'Dossier dans lequel les processeurs de prédictions enregistrent toutes les informations d\'évaluation. Si laissé vide, la valeur « <strong>{$a}</strong> » est utilisée par défaut.';
$string['modeltimelimit'] = 'Limite de durée d\'analyse par modèle';
$string['modeltimelimitinfo'] = 'Ce réglage limite la durée utilisée par chaque modèle lors de l\'analyse des contenus de la plateforme.';
$string['neutral'] = 'Neutre';
$string['nocourses'] = 'Aucun cours à analyser';
$string['nodata'] = 'Aucune donnée à analyser';
$string['noevaluationbasedassumptions'] = 'Les modèles basés sur des suppositions ne peuvent pas être évalués.';
$string['noinsights'] = 'Aucune indication annoncée';
$string['noinsightsmodel'] = 'Ce modèle ne génère pas d\'indication';
$string['nonewdata'] = 'Aucune nouvelle donnée disponible. Le modèle sera analysé après le prochain intervalle d\'analyse.';
$string['nonewranges'] = 'Pas encore de nouvelle prédiction. Le modèle sera analysé après le prochain intervalle d\'analyse.';
$string['nopredictionsyet'] = 'Pas encore de prédiction';
$string['noranges'] = 'Pas de prédiction';
$string['notapplicable'] = 'Ne s\'applique pas';
$string['notrainingbasedassumptions'] = 'Les modèles basés sur des suppositions ne nécessitent pas d\'entrainement';
$string['notuseful'] = 'Pas utile';
$string['novaliddata'] = 'Pas de donnée valide disponible';
$string['novalidsamples'] = 'Pas d\'échantillon valide disponible';
$string['onlycli'] = 'Lancement des processus d\'analyse de données uniquement en ligne de commande';
$string['onlycliinfo'] = 'Les processus d\'analyse de données, tels que l\'évaluation de modèles, l\'entraînement aux algorithmes d\'apprentissage automatique ou l\'obtention de prédictions, peuvent prendre du temps. Ils seront lancés comme tâches programmées ou peuvent être lancés manuellement au moyen de l\'interface en ligne de commande. Si ce réglage est désactivé, les administrateurs et gestionnaires du site peuvent lancer ces processus au moyen de l\'interface web.';
$string['percentonline'] = 'Pourcentage en ligne';
$string['percentonline_help'] = 'Si votre organisation propose des cours hybrides, quel pourcentage de travail est effectué en ligne par les étudiants ? Indiquez un nombre entre 0 et 100.';
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
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'L\'index de l\'intervalle d\'analyse';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'L\'identifiant de l\'échantillon';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Quand la prédiction a été faite';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Fin du temps de calcul';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Début du temps de calcul';
$string['processingsitecontents'] = 'Contenus du site en cours de traitement';
$string['successfullyanalysed'] = 'Analysé avec succès';
$string['timesplittingmethod'] = 'Intervalle d\'analyse';
$string['timesplittingmethod_help'] = 'L\'intervalle d\'analyse définit quand le système calcule les prédictions, ainsi que la partie des journaux d\'activité considérée pour ces prédictions. Par exemple, la durée du cours peut être divisée en périodes, et une prédiction générée à la fin de chaque période.';
$string['typeinstitution'] = 'Type d\'institution';
$string['typeinstitutionacademic'] = 'Académique';
$string['typeinstitutionngo'] = 'Organisation non gouvernementale (ONG)';
$string['typeinstitutiontraining'] = 'Formation en entreprise';
$string['useful'] = 'Utile';
$string['viewdetails'] = 'Consulter les détails';
$string['viewinsight'] = 'Consulter l\'indication';
$string['viewinsightdetails'] = 'Consulter les détails de l\'indication';
$string['viewprediction'] = 'Consulter les informations détaillées de prédiction';
$string['washelpful'] = 'Ceci a-t-il été utile ?';
