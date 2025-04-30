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
 * Strings for component 'qcreate', language 'fr', version '4.4'.
 *
 * @package     qcreate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclosed'] = 'Cette activité est fermée.';
$string['activitygrade'] = 'Vous avez obtenu une note totale de {$a->grade} / {$a->outof} pour cette activité.';
$string['activityname'] = 'Nom de l’activité';
$string['activityopen'] = 'Cette activité est ouverte.';
$string['addminimumquestionshdr'] = 'Nombre requis de questions du type (optionnel)';
$string['addmorerequireds'] = 'Ajouter des types de question requis';
$string['allandother'] = 'Pour autoriser tous les types de questions, cochez « {$a} » et ne cochez rien d’autre.';
$string['allowall'] = 'Autoriser tous les types de questions';
$string['allowedqtypes'] = 'Types de questions autorisées';
$string['allowedqtypes_help'] = 'Vous spécifier ici quels types de questions sont autorisés. Si vous cochez \'Allow all question types\', les étudianst pourront créer des questions de n’importe quel type jusqu’au nombre de questions spécifié dans \'Nombre total de questions notées\'.';
$string['allquestions'] = '0 - (Toutes les questions)';
$string['alreadydone'] = 'Vous avez créé {$a} questions de ce type.';
$string['alreadydoneextra'] = 'Vous avez créé {$a} questions supplémentaires de ce type.';
$string['alreadydoneextraone'] = 'Vous avez créé une question supplémentaire de ce type.';
$string['alreadydoneone'] = 'Vous avez créé une question de ce type.';
$string['and'] = '{$a} ET';
$string['andmorenewquestions'] = 'et {$a} question(s) de plus.';
$string['automaticgrade'] = 'Vous avez reçu une note automatique de {$a->grade} / {$a->outof} pour ces questions, car vous avez créé {$a->done} sur {$a->required} questions requises.';
$string['availability'] = 'Disponibilité';
$string['betterthangrade'] = 'Les questions avec une note <strong>manuelle</strong> égale ou supérieure à';
$string['clickhere'] = 'Cliquez ici pour créer une question du type « {$a} ».';
$string['clickhereanother'] = 'Cliquez ici pour créer une autre question du type « {$a} ».';
$string['close'] = 'Fermer cette activité';
$string['closeon'] = 'Fermée le';
$string['comma'] = '{$a},';
$string['comment'] = 'Commentaire';
$string['completionquestions'] = 'L’étudiant doit créer :';
$string['completionquestions_help'] = 'Quand cette option est activée, Cette activité sera considérée comme achevée quand l’étudiant aura créé le nombre de questions (notées ou non) spécifié.';
$string['completionquestionsgroup'] = 'Questions requises';
$string['confirmdeletequestion'] = 'Voulez-vous vraiment supprimer cette question ?';
$string['createdquestions'] = 'Questions créées';
$string['creating'] = 'Création de questions';
$string['deletegrades'] = 'Supprimer les questions créées et les notes';
$string['donequestionno'] = 'Vous avez terminé {$a->done} sur {$a->no} questions du type « {$a->qtypestring} ». Elles sont listées ci-dessous.';
$string['eventeditpageviewed'] = 'Page d’édition des questions vue';
$string['eventoverviewviewed'] = 'Apercu de la création de question vu';
$string['eventquestiongraded'] = 'Question notée';
$string['eventquestionregraded'] = 'Question renotée';
$string['exportgood'] = 'Exporter les bonnes questions';
$string['exportgoodquestions'] = 'Exporter les questions qui ont été notées au dessus d’une certaine barre';
$string['exportnaming'] = 'Préfixer les noms des questions exportées avec';
$string['exportquestions'] = 'Exporter les questions dans un fichier';
$string['exportselection'] = 'Exporter seulement ces questions';
$string['extraqdone'] = 'Vous avez créé une question supplémentaire.';
$string['extraqgraded'] = 'Une question de n’importe lequel des types ci-dessous sera notée';
$string['extraqsdone'] = 'Vous avez créé {$a->extraquestionsdone} questions supplémentaires.';
$string['extraqsgraded'] = '{$a->extrarequired} questions de n’importe lequel des types ci-dessous seront notées';
$string['fullstop'] = '{$a}.';
$string['grade'] = 'Note totale';
$string['grade_help'] = 'Ceci est la note totale de l’activité qui est reportée dans le carnet de notes. Il est possible de régler \'Pas de note\' afin que l’activité ne soit pas notée.';
$string['gradeallautomatic'] = 'La notation est complètement automatique, aucune notation manuelle.';
$string['gradeallmanual'] = 'La notation est complètement manuelle, aucune notation automatique.';
$string['gradeavailablehtml'] = '{$a->username} a noté votre question
\'<i>{$a->questionname}</i>\' pour \'<i>{$a->qcreate}</i>\'<br /><br />
Vous pouvez la consulter  <a href="{$a->url}">sur le page de l’activité</a>.';
$string['gradeavailablesmall'] = '{$a->username} a noté votre question pour {$a->qcreate}';
$string['gradeavailabletext'] = '{$a->username} a noté votre question «&nbsp;{$a->questionname}&nbsp;» pour «&nbsp;{$a->qcreate}&nbsp;»

Vous pouvez la consulter sur le page de l’activité :

    {$a->url}';
$string['graded'] = 'Noté';
$string['grademixed'] = 'La notation est {$a->automatic}%% automatique, {$a->manual}%% manuelle.';
$string['gradequestions'] = 'Noter les questions';
$string['graderatio'] = 'Ratio de la note automatique / manuelle';
$string['graderatio_help'] = 'Vous spécifiez ici comment la note totale sera divisée: le pourcentage de note automatique est sur la gauche, et le pourcentage de note manuelle est sur la droite. La note automatique est la note \'attribuée\' par le système pour avoir simplement créé une question.';
$string['graderatiois'] = 'Ratio de la note : {$a}';
$string['graderatiooptions'] = '{$a->automatic} / {$a->manual}';
$string['gradesdeleted'] = 'Questions et notes supprimées';
$string['grading'] = 'Notation';
$string['intro'] = 'Introduction';
$string['invalidqcreatezid'] = 'Numéro de question création non valide';
$string['manualgrade'] = 'Un enseignant vous a attribué une note de {$a->grade} / {$a->outof} pour les questions que vous avez créées.';
$string['marked'] = 'Noté';
$string['messageprovider:gradernotification'] = 'Notification de question créée';
$string['messageprovider:studentnotification'] = 'Notification de question notée';
$string['minimumquestions'] = 'Nombre minimum de questions';
$string['minimumquestions_help'] = 'Dans ce menu, vous pouvez spécifier le nombre de questions d’un type spécifique que les étudiants devront créer.';
$string['modulename'] = 'Création de questions';
$string['modulename_help'] = 'L’activité de création de questions permet à un enseignant de demander à ses étudiants de créer des questions, le nombre requis de questions, les types de questions disponible et le nombre de questions requis pour chaque type peuvent être spécifiés.';
$string['modulename_link'] = 'mod/qcreate/view';
$string['modulenameplural'] = 'Création de questions';
$string['needsgrading'] = 'À noter';
$string['needsregrading'] = 'À renoter';
$string['needtoallowatleastoneqtype'] = 'Vous devez autoriser au moins un type de question';
$string['needtoallowqtype'] = 'Vous devez autoriser le type de questions « {$a} » si vous voulez imposer la création d’un nombre minimum de questions de ce type.';
$string['newquestions'] = 'Nouvelles questions crées';
$string['noofquestionstotal'] = 'Nombre total de questions notées';
$string['noofquestionstotal_help'] = 'Ceci est le nombre total de questions que les étudiants doivent créer. Ce nombre doit être égal ou supérieur au nombre minimum de questions requis';
$string['noquestions'] = 'Aucune question créé.';
$string['noquestionsabove'] = 'Il n’y a aucune question avec une note manuelle répondant au critère dans cette catégorie.';
$string['notgraded'] = 'Pas encore noté';
$string['notifications'] = 'Notifications';
$string['nousers'] = 'Aucun utilisateur enrollé dans ce cours / dans ce groupe.';
$string['open'] = 'Ouvrir cette activité';
$string['open_help'] = 'Vous pouvez spécifier le moment où l’activité de création de question sera accessible aux étudiants pour créer des questions. Avant l’heure d’ouverture, et après l’heure de fermeture, les étudiants ne pourront pas créer de question.';
$string['openmustbemorethanclose'] = 'L’ouverture doit être antérieure à la fermeture';
$string['openon'] = 'Ouvre le';
$string['overview'] = 'Aperçu';
$string['pagesize'] = 'Nombre de questions à afficher par page';
$string['pluginadministration'] = 'Administration de la création de questions';
$string['pluginname'] = 'Création de questions';
$string['preview'] = 'Prévisualisation';
$string['previewquestion'] = 'Prévisualiser la question';
$string['qcreate'] = 'qcreate';
$string['qcreate:addinstance'] = 'Ajouter une instance de création de questions';
$string['qcreate:grade'] = 'Noter les questions';
$string['qcreate:receivegradernotifications'] = 'Receive grader notifications';
$string['qcreate:receivestudentnotifications'] = 'Recevoir les notifications d’étudiant';
$string['qcreate:submit'] = 'Soumettre des questions';
$string['qcreate:view'] = 'Voir les activités de création de questions';
$string['qcreatecloses'] = 'L’activité de création de questions ferme';
$string['qcreateopens'] = 'L’activité de création de questions ouvre';
$string['qsgraded'] = '{$a} question(s) de n’importe lequel de ces types seront notée(s) :';
$string['qtype'] = 'Type de question';
$string['qtype_help'] = 'Dans ce menu, vous pouvez spécifier quel(s) type(s) de questions les étudiants pourront créer.';
$string['questions'] = 'question(s) pour terminer cette activité';
$string['questionscreated'] = '{$a} question(s) créé(s)';
$string['questiontogradehtml'] = '{$a->username} a créé une nouvelle question <i>«&nbsp;{$a->questionname}&nbsp;»</i>
pour <i>«&nbsp;{$a->qcreate}&nbsp;» à {$a->timeupdated}</i>.<br /><br />
Elle est consultable <a href="{$a->url}">sur le site web</a>.';
$string['questiontogradesmall'] = '{$a->username} a créé une nouvelle question pour {$a->qcreate}.';
$string['questiontogradetext'] = '{$a->username} a créé une nouvelle question «&nbsp;{$a->questionname}&nbsp;»
pour «&nbsp;{$a->qcreate}&nbsp;» à {$a->timeupdated}.

Elle est consultable ici :

    {$a->url}';
$string['requiredanyplural'] = '{$a->no questions} de n’importe quel type sont requises';
$string['requiredanysingular'] = 'Une question de n’importe quel type est requise';
$string['requiredplural'] = '{$a->no} questions du type « {$a->qtypestring} » sont requises';
$string['requiredquestions'] = 'Questions requises à créer';
$string['requiredsingular'] = 'Une question du type « {$a->qtypestring} » est requise';
$string['saveallfeedback'] = 'Enregistrer mes commentaires';
$string['saveallfeedbackandgrades'] = 'Enregistrer notes et commentaires';
$string['selectone'] = 'Sélectionnez un type :';
$string['sendgradernotifications'] = 'Avertir les évaluateurs';
$string['sendgradernotifications_help'] = 'Si cette option est activée, les avaluateurs (en général les enseignants reçoivent un message lorsqu’un étidiant créé une nouvelle question. Les modes de message sont configurables.';
$string['sendstudentnotifications'] = 'Avertir les étudiants';
$string['sendstudentnotifications_help'] = 'Si cette option est activée, les étudiants reçoivent un message quand une de leur questions est notée.';
$string['show'] = 'Afficher';
$string['showgraded'] = 'questions qui n’ont pas besoin d’être notées';
$string['showneedsregrade'] = 'questions à renoter';
$string['showungraded'] = 'questions à noter';
$string['specifictext'] = 'Texte spécifique';
$string['studentaccessaddonly'] = 'création seulement';
$string['studentaccessedit'] = 'prévisualisation, afficher / enregistrer et édition / suppression';
$string['studentaccessheader'] = 'Accès des étudiants aux questions';
$string['studentaccesspreview'] = 'prévisualisation';
$string['studentaccesssaveasnew'] = 'prévisualisation et afficher / enregistrer en tant que nouvelle question';
$string['studentqaccess'] = 'À ses propres questions';
$string['studentqaccess_help'] = 'Utilisez ce menu pour définir les droits d’accès des étudiants sur les questions qu’ils créent.';
$string['studentshavedone'] = 'Les étudiants ont créé {$a} question(s).';
$string['synchronizeqaccesstask'] = 'Synchronisation des droits d’accès des étudiants aux questions';
$string['timeclose'] = 'L’activité se terminera le {$a->timeclose}';
$string['timeclosed'] = 'Activité fermée le {$a}.';
$string['timecreated'] = 'Heure de création';
$string['timenolimit'] = 'Aucune limite de temps.';
$string['timeopen'] = 'L’activité ouvre le {$a->timeopen}';
$string['timeopenclose'] = 'L’activité est ouverte de {$a->timeopen} à {$a->timeclose}';
$string['timeopened'] = 'Activité ouverte le {$a}.';
$string['timewillclose'] = 'L’activité fermera le {$a}.';
$string['timewillopen'] = 'L’activité ouvrira le {$a}.';
$string['timing'] = 'Calendrier de l’activité';
$string['todoquestionno'] = 'Vous avez encore à créer {$a->stillrequiredno} question(s) du type « {$a->qtypestring} ».';
$string['totalgrade'] = 'Note totale';
$string['totalgradeis'] = 'Note totale : {$a}';
$string['totalrequiredislessthansumoftotalsforeachqtype'] = 'Le total requis est inférieur à la somme des nombres de questions notées pour chaque type de question.<br />Il doit être supérieur ou égal !';
$string['updategradestask'] = 'Mise à jour des notes des activités de création de questions';
$string['username'] = 'Nom d’utilisateur du créateur de la question';
$string['youhavedone'] = 'Vous avez créé {$a} question(s).';
$string['youvesetmorethanonemin'] = 'Vous avez défini plusieurs nombre minimum de questions pour le type « {$a} » !';
