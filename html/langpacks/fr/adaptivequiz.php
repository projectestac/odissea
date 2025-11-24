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
 * Strings for component 'adaptivequiz', language 'fr', version '4.5'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abilityestimated'] = 'Aptitude estimée';
$string['abilityestimated_help'] = 'L’aptitude estimée d’un candidat correspond à la difficulté de la question pour laquelle le candidat a une probabilité de 50 % de répondre correctement à la question. Pour identifier le niveau de performance, faire correspondre la valeur de l’aptitude avec la plage de niveaux de questions (voir la plage après le symbole « / »).';
$string['activityreports'] = 'Rapport des tentatives';
$string['adaptivequiz:addinstance'] = 'Ajouter un nouveau test adaptatif';
$string['adaptivequiz:attempt'] = 'Tentative de test adaptatif';
$string['adaptivequiz:reviewattempts'] = 'Examiner les réponses de tests adaptatifs';
$string['adaptivequiz:viewreport'] = 'Afficher les rapports de tests adaptatifs';
$string['adaptivequizname'] = 'Nom';
$string['adaptivequizname_help'] = 'Saisir le nom de l’instance de test adaptatif';
$string['all_attempts_deleted'] = 'Toutes les tentatives du test adaptatif ont été supprimées';
$string['all_grades_removed'] = 'Toutes les notes du test adaptatif ont été supprimées';
$string['answer'] = 'Réponse';
$string['answers_display_name'] = 'Réponses';
$string['attempt_questiondetails'] = 'Détails de la question';
$string['attempt_state'] = 'État de la tentative';
$string['attempt_summary'] = 'Résumé de la tentative';
$string['attempt_user'] = 'Utilisateur';
$string['attemptclosed'] = 'La tentative a été fermée manuellement.';
$string['attemptclosedstatus'] = 'Fermée manuellement par {$a->current_user_name} (user-id: {$a->current_user_id}) le {$a->now}.';
$string['attemptdeleted'] = 'Tentative de {$a->name} du {$a->timecompleted} supprimée';
$string['attemptfeedback'] = 'Feedback de la tentative';
$string['attemptfeedback_help'] = 'Le feedback de la tentative s’affiche à l’utilisateur une fois la tentative terminée';
$string['attemptfeedbackdefaulttext'] = 'Vous avez terminé la tentative, merci d’avoir répondu au test !';
$string['attemptfinishedtimestamp'] = 'Heure de fin de la tentative';
$string['attemptfirst'] = 'Première tentative';
$string['attemptlast'] = 'Dernière tentative';
$string['attemptnofirstquestion'] = 'Impossible de définir la première question ; le test est vraisemblablement mal configuré.';
$string['attemptquestion_ability'] = 'Mesure d’aptitude';
$string['attemptquestion_abilitylogits'] = 'Aptitude mesurée (logits)';
$string['attemptquestion_difficulty'] = 'Difficulté de la question (logits)';
$string['attemptquestion_diffsum'] = 'Somme de la difficulté';
$string['attemptquestion_level'] = 'Niveau de la question';
$string['attemptquestion_rightwrong'] = 'Réponse correcte/incorrecte';
$string['attemptquestion_stderr'] = 'Erreur standard (&plusmn;&nbsp;logits)';
$string['attemptquestionsprogress'] = 'Progression des questions : {$a}';
$string['attemptquestionsprogress_help'] = 'Le nombre maximum de questions affichées ici n’est pas nécessairement le nombre de questions à répondre durant le test. Il s’agit du nombre maximum possible de questions auxquelles vous pourriez répondre. Le test peut se terminer plus tôt si la mesure d’aptitude est suffisamment définie.';
$string['attemptsallowed'] = 'Tentatives autorisées';
$string['attemptsallowed_help'] = 'Le nombre de tentatives autorisées pour un étudiant';
$string['attemptstarttime'] = 'Heure de début de la tentative';
$string['attemptstate'] = 'État de la tentative';
$string['attemptstopcriteria'] = 'Raison de l’arrêt de la tentative';
$string['attemptsusernoprevious'] = 'Vous n’avez pas encore fait ce test.';
$string['attemptsuserprevious'] = 'Vos tentatives antérieures';
$string['attempttotaltime'] = 'Durée totale (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; Retour vers toutes les questions';
$string['bestscore'] = 'Meilleur score';
$string['bestscorestderror'] = 'Erreur standard';
$string['browsersecurity'] = 'Sécurité du navigateur';
$string['browsersecurity_help'] = 'Si l’option « Sécurité du navigateur » est cochée, le test ne démarrera que si le navigateur de l’étudiant est compatible avec JavaScript. Le test est alors affiché dans une fenêtre surgissante qui couvre la totalité de l’écran, cache toutes les autres fenêtres et ne permet pas de contrôler la navigation. Les étudiants sont également, dans la mesure du possible, empêchés d’utiliser des commandes comme le copier/coller.';
$string['calcerrorwithinlimits'] = 'Le calcul de l’erreur standard {$a->calerror} est dans les limites imposées par le test {$a->definederror}';
$string['closeattempt'] = 'Fermer la tentative';
$string['completionattemptcompletedcminfo'] = 'Terminer une tentative';
$string['completionattemptcompletedform'] = 'L’étudiant doit avoir terminé au moins une tentative pour ce test';
$string['confirmcloseattempt'] = 'Voulez-vous vraiment fermer et finaliser cette tentative de {$a->name} ?';
$string['confirmcloseattemptscore'] = '{$a->num_questions} questions ont été répondues et le score est actuellement de {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Cette tentative a été commencée le {$a->started} et modifiée en dernier le {$a->modified}.';
$string['confirmdeleteattempt'] = 'Confirmer la suppression de la tentative de {$a->name} terminée le {$a->timecompleted}';
$string['deleteattemp'] = 'Supprimer la tentative';
$string['discrimination_display_name'] = 'Caractère discriminant';
$string['downloadcsv'] = 'Télécharger le fichier csv';
$string['enterrequiredpassword'] = 'Saisir le mot de passe requis';
$string['errorattemptstate'] = 'Erreur lors de la détermination de l’état la tentative';
$string['errorclosingattempt_alreadycomplete'] = 'Cette tentative est déjà terminée ; elle ne peut pas être fermée manuellement.';
$string['errorfetchingquest'] = 'Impossible de récupérer une question de niveau {$a->level}';
$string['errorlastattpquest'] = 'Erreur lors de la vérification de la réponse pour la dernière question';
$string['errornumattpzero'] = 'Erreur du nombre de questions répondues. Il est égal à zéro alors que l’utilisateur a répondu à une question précédente';
$string['errorsumrightwrong'] = 'La somme des réponses correctes et incorrectes ne correspond pas au nombre total de questions tentées';
$string['eventattemptcompleted'] = 'Tentative terminée';
$string['formelementdecimal'] = 'Saisir un nombre décimal. Maximum de 10 chiffres avec un maximum de 5 chiffres après la virgule';
$string['formelementempty'] = 'Saisir un nombre entier de 1 à 999';
$string['formelementnegative'] = 'Saisir un nombre de 1 à 999';
$string['formelementnumeric'] = 'Saisir une valeur numérique de 1 à 999';
$string['formlowlevelgreaterthan'] = 'Le niveau le plus bas doit être inférieur au niveau le plus élevé';
$string['formminquestgreaterthan'] = 'Le nombre minimum de questions doit être inférieur au nombre maximum de questions';
$string['formquestionpool'] = 'Sélectionner au moins une catégorie de questions';
$string['formstartleveloutofbounds'] = 'Le niveau de départ doit être un nombre entre le niveau le plus bas et le niveau le plus élevé';
$string['formstderror'] = 'Vous devez saisir un pourcentage inférieur à 50 et supérieur ou égal à 0';
$string['functiondisabledbysecuremode'] = 'Cette fonctionnalité est actuellement désactivée';
$string['gradehighest'] = 'Note la plus haute';
$string['grademethod'] = 'Méthode d’évaluation';
$string['grademethod_help'] = 'Lorsque plusieurs tentatives sont autorisées, les méthodes suivantes sont disponibles pour calculer la note finale du test :

* note la plus haute de toutes les tentatives
* note de la première tentative (toutes les autres tentatives sont ignorées)
* note de la dernière tentative (toutes les autres tentatives sont ignorées)';
$string['graphlegend_error'] = 'Erreur standard';
$string['highestlevel'] = 'Niveau de difficulté le plus élevé';
$string['highestlevel_help'] = 'Le niveau le plus élevé ou le plus difficile à partir duquel le questionnaire d’évaluation peut sélectionner des questions. Lors d’une tentative, l’activité ne dépassera pas ce niveau de difficulté.';
$string['highlevelusers'] = 'Utilisateurs au-dessus du niveau de la question';
$string['id'] = 'ID';
$string['indvuserreport'] = 'Rapport des tentatives individuelles pour {$a}';
$string['leveloutofbounds'] = 'Niveau demandé {$a->level} hors limites pour la tentative';
$string['lowestlevel'] = 'Niveau de difficulté le plus bas';
$string['lowestlevel_help'] = 'Le niveau le plus bas ou le moins difficile à partir duquel le questionnaire d’évaluation peut sélectionner des questions. Lors d’une tentative, l’activité ne dépassera pas ce niveau de difficulté.';
$string['lowlevelusers'] = 'Utilisateurs en dessous du niveau de question';
$string['maximumquestions'] = 'Nombre maximum de questions';
$string['maximumquestions_help'] = 'Le nombre maximum de questions présentées à l’étudiant';
$string['maxquestattempted'] = 'Nombre maximum de questions tentées';
$string['midlevelusers'] = 'Utilisateurs proche du niveau de la question';
$string['minimumquestions'] = 'Nombre minimum de questions';
$string['minimumquestions_help'] = 'Le nombre minimum de questions auxquelles l’étudiant doit répondre';
$string['missingtagprefix'] = 'Préfixe du tag manquant';
$string['modformshowattemptprogress'] = 'Montrer la progression du test aux étudiants';
$string['modformshowattemptprogress_help'] = 'Si ce réglage est activé, les étudiants voient durant le test une barre de progression indiquant le nombre de questions répondues par rapport au nombre maximum.';
$string['modulename'] = 'Test adaptatif';
$string['modulename_help'] = 'L’activité Test adaptatif permet à un enseignant de créer des tests qui mesurent les aptitudes des étudiants de façon efficiente. Les tests adaptatifs sont constitués de questions de la banque de questions et assorties d’un score de difficulté indiqué dans les tags de la question. Les questions sont sélectionnées de sorte à correspondre au niveau d’aptitude de l’étudiant qui fait le test. Quand l’étudiant répond correctement à la question, une question plus difficile lui est présentée. Quand en revanche il ne répond pas correctement, une question plus facile lui est présentée. Cette technique construit une suite de questions dont la difficulté converge vers l’aptitude réelle de l’étudiant. Le test s’arrête lorsque l’aptitude de l’étudiant est déterminée avec la précision nécessaire.

Cette activité est bien adaptée pour déterminer une mesure d’aptitude sur un barème unidimensionnel. Le barème peut être très étendu, mais les questions doivent toutes fournir une mesure de l’aptitude sur le même barème. Dans un test de positionnement par exemple, les questions les plus faciles auxquelles les étudiants les plus novices peuvent répondre doivent aussi pouvoir être répondues correctement par les experts, tandis que les questions les plus difficiles ne doivent pouvoir être répondues correctement que par les experts. Les questions qui ne permettent pas de départager les étudiants ayant des aptitudes différentes rendent le test inefficace et peuvent donner des résultats peu concluants.

Les questions utilisées dans un test adaptatif doivent

* être automatiquement évaluées comme correctes ou incorrectes,
* être assorties d’un tag indiquant leur difficulté, constitué de la chaîne « adpq_ », suivie d’un entier positif dans l’intervalle du test.

Un test adaptatif permet de configurer

* l’intervalle de difficulté/d’aptitude à mesurer. Les intervalles 1-10, 1-20 ou 1-100 sont des exemples valides ;
* la précision requise avant l’interruption du test. Le plus souvent, une erreur de 5 % dans la mesure d’aptitude est une valeur adéquate ;
* le nombre minimum de questions présentées à l’étudiant ;
* le nombre maximum de questions qui peuvent être présentées à l’étudiant.

Cette description et le processus de test de cette activité se fondent sur <a href="https://www.rasch.org/memo69.pdf">Computer-Adaptive Testing: A Methodology Whose Time Has Come</a> par John Michael Linacre, Ph.D. MESA Psychometric Laboratory - University of Chicago. MESA Memorandum No. 69.';
$string['modulenameplural'] = 'Test adaptatif';
$string['na'] = 'n/a';
$string['name'] = 'Nom';
$string['noattemptsallowed'] = 'Aucune autre tentative n’est autorisée pour cette activité';
$string['nonewmodules'] = 'Aucune instance de test adaptatif trouvée';
$string['nopermission'] = 'Vous n’avez pas la permission de consulter cette ressource';
$string['notinprogress'] = 'Cette tentative n’est pas en cours.';
$string['notyourattempt'] = 'Ce n’est pas votre tentative pour ce test';
$string['numofattemptshdr'] = 'Nombre de tentatives';
$string['percent_correct_display_name'] = '% correct';
$string['pluginadministration'] = 'Test adaptatif';
$string['pluginname'] = 'Test adaptatif';
$string['question_report'] = 'Analyse des questions';
$string['questionanalysisbtn'] = 'Analyse des questions';
$string['questionnumber'] = 'Question #';
$string['questionpool'] = 'Banque de questions';
$string['questionpool_help'] = 'Sélectionner la (les) catégorie(s) de questions à partir de laquelle l’activité tirera les questions lors d’une tentative.';
$string['questions_report'] = 'Rapport des questions';
$string['questionsattempted'] = 'Somme des questions tentées';
$string['questionspoolerrornovalidstartingquestions'] = 'Les catégories de questions sélectionnées ne contiennent pas de question assortie d’un tag adéquat correspondant à la difficulté de départ choisie.';
$string['recentactquestionsattempted'] = 'Questions tentées : {$a}';
$string['recentattemptstate'] = 'État de la tentative :';
$string['recentcomplete'] = 'Terminé';
$string['recentinprogress'] = 'En cours';
$string['reportanswersdistributionchartdisplaystacked'] = 'Afficher des barres empilées';
$string['reportanswersdistributionchartnumrightlabel'] = 'Nombre de réponses correctes';
$string['reportanswersdistributionchartnumwronglabel'] = 'Nombre de réponses incorrectes';
$string['reportanswersdistributionchartxaxislabel'] = 'Difficulté de question';
$string['reportanswersdistributionchartyaxislabel'] = 'Nombre de réponses';
$string['reportattemptadmanswerright'] = 'C';
$string['reportattemptadmanswerwrong'] = 'I';
$string['reportattemptadmchartadmdifflabel'] = 'Difficulté appliquée';
$string['reportattemptadmcharttargetdifflabel'] = 'Difficulté cible';
$string['reportattemptanswerdistributiontab'] = 'Distribution des réponses';
$string['reportattemptgraphtab'] = 'Graphe des tentatives';
$string['reportattemptgraphtabletitle'] = 'Vue en tableau du graphe des tentatives';
$string['reportattemptquestionsdetailstab'] = 'Détail des questions';
$string['reportattemptreviewpageheading'] = '{$a->quizname} - relecture de la tentative de {$a->fullname} du {$a->finished}';
$string['reportattemptsbothenrolledandnotenrolled'] = 'tous les utilisateurs ayant fait des tentatives';
$string['reportattemptsdownloadfilename'] = '{$a}_rapport_tentatives';
$string['reportattemptsenrolledwithattempts'] = 'utilisateurs ayant fait des tentatives';
$string['reportattemptsenrolledwithnoattempts'] = 'utilisateurs n’ayant pas fait de tentative';
$string['reportattemptsfilterformheader'] = 'Filtrage';
$string['reportattemptsfilterformsubmit'] = 'Filtrer';
$string['reportattemptsfilterincludeinactiveenrolments'] = 'Inclure les utilisateurs avec inscriptions inactives';
$string['reportattemptsfilterincludeinactiveenrolments_help'] = 'Si ce réglage est activé, les utilisateurs suspendus seront inclus.';
$string['reportattemptsfilterusers'] = 'Afficher';
$string['reportattemptsnotenrolled'] = 'utilisateurs non inscrits ayant fait des tentatives.';
$string['reportattemptspersistentfilter'] = 'Filtre persistant';
$string['reportattemptspersistentfilter_help'] = 'Si ce réglage est activé, le réglage de filtre ci-dessous sera enregistré lors de l’envoi et appliqué à chaque visite de la page de rapport.';
$string['reportattemptsprefsformheader'] = 'Préférence de rapport';
$string['reportattemptsprefsformsubmit'] = 'Appliquer';
$string['reportattemptsresetfilter'] = 'Réinitialiser filtre';
$string['reportattemptsshowinitialbars'] = 'Afficher la barre initiale';
$string['reportattemptsummarytab'] = 'Résumé de la tentative';
$string['reportattemptsusersperpage'] = 'Nombre d’utilisateurs affichés :';
$string['reportindividualuserattemptpageheading'] = '{$a->quizname} - rapport individuel des tentatives de {$a->username}';
$string['reportquestionanalysispageheading'] = '{$a} - rapport des questions';
$string['reportuserattemptstitleshort'] = 'Tentative de {$a}';
$string['requirepassword'] = 'Mot de passe requis';
$string['requirepassword_help'] = 'Les étudiants doivent saisir un mot de passe avant de commencer leur tentative';
$string['requirepasswordmessage'] = 'Pour faire ce test, vous devez connaître son mot de passe';
$string['resetadaptivequizsall'] = 'Supprimer toutes les tentatives du test';
$string['result'] = 'Résultat';
$string['reviewattempt'] = 'Relire la tentative';
$string['reviewattemptreport'] = 'Relecture de la tentative de {$a->fullname} du {$a->finished}';
$string['score'] = 'Score';
$string['standarderror'] = 'Erreur standard pour arrêter';
$string['standarderror_help'] = 'Lorsque le niveau d’erreur dans la mesure d’aptitude de l’utilisateur descend en dessous de ce nombre, le test s’arrête. Modifier cette valeur, par défaut de 5 %, pour exiger plus ou moins de précision dans la mesure d’aptitude';
$string['standarderrorhdr'] = 'Erreur standard';
$string['startattemptbtn'] = 'Commencer le test';
$string['startinglevel'] = 'Niveau de difficulté de départ';
$string['startinglevel_help'] = 'Lorsque l’étudiant commence une tentative, l’activité sélectionne au hasard une question correspondant au niveau de difficulté';
$string['statistic'] = 'Statistiques';
$string['stopingconditionshdr'] = 'Conditions d’arrêt';
$string['submitanswer'] = 'Envoyer la réponse';
$string['times_used_display_name'] = 'Temps utilisé';
$string['updateattempterror'] = 'Une erreur est survenue au moment de la mise à jour de la tentative';
$string['user'] = 'Utilisateur';
$string['value'] = 'Valeur';
$string['wrongpassword'] = 'Mot de passe incorrect';
