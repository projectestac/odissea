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
 * Strings for component 'adaptivequiz', language 'fr', version '4.1'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityreports'] = 'Rapport des tentatives';
$string['adaptivequiz:addinstance'] = 'Ajouter un nouveau test adaptatif';
$string['adaptivequiz:attempt'] = 'Tentative Adaptive Quiz';
$string['adaptivequiz:reviewattempts'] = 'Examiner/Analyser les réponses envoyées dans Adaptive Quiz';
$string['adaptivequiz:viewreport'] = 'Afficher les rapports d Adaptive Quiz';
$string['adaptivequizname'] = 'Nom';
$string['adaptivequizname_help'] = 'Entrer le nom de l\'instance Adaptive Quiz';
$string['all_attempts_deleted'] = 'Toutes les tentatives du test ont été supprimées';
$string['all_grades_removed'] = 'Toutes les notes du test ont été supprimées';
$string['answer'] = 'Réponse';
$string['answerdistgraph_numrightwrong'] = 'Num wrong (-)  /  Num right (+)';
$string['answerdistgraph_questiondifficulty'] = 'Niveau de la question';
$string['answerdistgraph_right'] = 'Droite';
$string['answerdistgraph_title'] = 'Distribution des réponses pour {$a->firstname} {$a->lastname}';
$string['answers_display_name'] = 'Réponses';
$string['attempt_questiondetails'] = 'Détails de la question';
$string['attempt_state'] = 'Etat de la tentative';
$string['attempt_summary'] = 'Résumé de la tentative';
$string['attempt_user'] = 'Utilisateur';
$string['attemptclosed'] = 'La tentative a été manuellement fermée.';
$string['attemptclosedstatus'] = 'Fermée manuellement par {$a->current_user_name} (user-id: {$a->current_user_id}) le {$a->now}.';
$string['attemptdeleted'] = 'Tentative supprimée {$a->name} du {$a->timecompleted}';
$string['attemptfeedback'] = 'Feedback global de la tentative';
$string['attemptfeedback_help'] = 'Le feedback global s affiche à l utilisateur une fois la tentative terminée';
$string['attemptfinishedtimestamp'] = 'Heure de fin de la tentative';
$string['attemptfirst'] = 'Première tentative';
$string['attemptlast'] = 'Dernière tentative';
$string['attemptquestion_ability'] = 'Mesure de capacité';
$string['attemptquestion_abilitylogits'] = 'Mesure de capacité (logits)';
$string['attemptquestion_difficulty'] = 'Niveau de la question (logits)';
$string['attemptquestion_diffsum'] = 'Somme des niveaux';
$string['attemptquestion_error'] = 'Erreur standard (&plusmn;&nbsp;x%)';
$string['attemptquestion_level'] = 'Niveau de la question';
$string['attemptquestion_num'] = '#';
$string['attemptquestion_rightwrong'] = 'Vrai/faux';
$string['attemptquestion_stderr'] = 'Erreur standard (&plusmn;&nbsp;logits)';
$string['attemptsallowed'] = 'Tentatives autorisées';
$string['attemptsallowed_help'] = 'Le nombre de tentatives autorisées pour un étudiant';
$string['attemptstarttime'] = 'Heure de début de la tentative';
$string['attemptstate'] = 'État de la tentative';
$string['attemptstopcriteria'] = 'Raison de l\'arrêt de la tentative';
$string['attempttotaltime'] = 'Durée totale (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; Retourner à toutes les questions';
$string['bestscore'] = 'Meilleur score';
$string['bestscorestderror'] = 'Erreur standard';
$string['browsersecurity'] = 'Sécurité du navigateur (fenêtre pop-up)';
$string['browsersecurity_help'] = 'Si l\'option "Sécurité du navigateur" est sélectionnée, le quiz ne démarrera que si le navigateur de l\'étudiant est compatible avec JavaScript, le quiz apparaît dans une fenêtre qui couvre la totalité de l\'écran, cache toutes les autres fenêtres et ne permet pas de contrôler la navigation. Les étudiants sont, dans la mesure du possible, empêchés d\'utiliser des commandes comme le copier/coller."';
$string['calcerrorwithinlimits'] = 'Le calcul de l\'erreur standard {$a->calerror} est dans les limites imposées par le quiz {$a->definederror}';
$string['closeattempt'] = 'Fermer la tentative';
$string['confirmcloseattempt'] = 'Voulez-vous vraiment fermer et finaliser cette tentative de {$a->name} ?';
$string['confirmcloseattemptscore'] = '{$a->num_questions} questions ont été répondues et le score est actuellement de {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Cette tentative a été lancée le {$a->started} et sa dernière mise à jour date du {$a->modified}.';
$string['confirmdeleteattempt'] = 'Confirmer la suppression de la tentative de {$a->name} du {$a->timecompleted}';
$string['deleteattemp'] = 'Supprimer la tentative';
$string['discrimination_display_name'] = 'Caractère discriminant';
$string['downloadcsv'] = 'Télécharger le fichier csv';
$string['enterrequiredpassword'] = 'Entrez le mot de passe requis';
$string['errorattemptstate'] = 'Une erreur est survenue sur la tentative';
$string['errorclosingattempt_alreadycomplete'] = 'Cette tentative est déjà terminée, elle ne peut pas être fermée manuellement.';
$string['errorfetchingquest'] = 'Impossible/Impossibilité d aller chercher une question du niveau {$a->level}';
$string['errorlastattpquest'] = 'Erreur lors de la vérification de la réponse donnée sur la dernière question';
$string['errornumattpzero'] = 'Erreur avec le nombre de questions tentées. Il est égal à zéro alors que l utilisateur a soumis une réponse à la question précédente';
$string['errorsumrightwrong'] = 'La somme des réponses correctes et incorrectes ne correspond pas au nombre total de questions tentées';
$string['formelementdecimal'] = 'Entrez un nombre décimal. Maximum de 10 chiffres avec un maximum de 5 chiffres après la virgule';
$string['formelementempty'] = 'Entrez un nombre de 1 à 999';
$string['formelementnegative'] = 'Entrez un nombre de 1 à 999';
$string['formelementnumeric'] = 'Entrez un nombre de 1 à 999';
$string['formlowlevelgreaterthan'] = 'Le niveau le plus bas doit être inférieur au plus haut niveau';
$string['formminquestgreaterthan'] = 'Le nombre minimum de questions doit être inférieur au nombre maximal de questions';
$string['formquestionpool'] = 'Sélectionnez au moins une catégorie de questions';
$string['formstartleveloutofbounds'] = 'Le niveau de départ doit être un nombre entre le niveau le plus bas et le niveau le plus haut';
$string['formstderror'] = 'Vous devez rentrer un pourcentage inférieur à 50 et supérieur ou égal à 0';
$string['functiondisabledbysecuremode'] = 'Cette fonctionnalité est actuellement désactivée';
$string['gradehighest'] = 'Note la plus haute';
$string['grademethod'] = 'Méthode de notation';
$string['grademethod_help'] = 'Lorsque plusieurs tentatives sont autorisées, les méthodes suivantes sont disponibles pour calculer la note finale du quiz:

* Highest grade of all attempts
* First attempt (all other attempts are ignored)
* Last attempt (all other attempts are ignored)';
$string['graphlegend_error'] = 'Erreur standard';
$string['graphlegend_target'] = 'Niveau visé';
$string['highestlevel'] = 'Niveau de difficulté le plus haut';
$string['highestlevel_help'] = 'Le niveau le plus haut ou le plus difficile à partir du l outil peut sélectionner des questions. Au cours d une tentative, l activité ne dépassera pas ce niveau de difficulté';
$string['highlevelusers'] = 'Utilisateurs au-dessus du niveau visé';
$string['id'] = 'ID';
$string['indvuserreport'] = 'Résumé des tentatives à titre individuel pour le participant {$a}';
$string['leveloutofbounds'] = 'Le niveau {$a->level} demandé n a pas été trouvé';
$string['lowestlevel'] = 'Niveau de difficulté le plus bas';
$string['lowestlevel_help'] = 'Le niveau le plus bas ou le moins difficile à partir duquel l outil peut sélectionner des questions. Au cours d une tentative, l activité ne dépassera pas ce niveau de difficulté';
$string['lowlevelusers'] = 'Utilisateurs en dessous du niveau de question';
$string['maximumquestions'] = 'Nombre maximum de questions';
$string['maximumquestions_help'] = 'Le nombre maximal de questions que l\'élève peut tenter';
$string['maxquestattempted'] = 'Nombre maximal de questions tentées';
$string['midlevelusers'] = 'Utilisateurs proche du niveau visé';
$string['minimumquestions'] = 'Nombre minimum de questions';
$string['minimumquestions_help'] = 'Le nombre minimum de questions que l élève doit tenter';
$string['missingtagprefix'] = 'Le préfixe du tag est manquant';
$string['modulename'] = 'Adaptive Quiz';
$string['modulenameplural'] = 'Adaptive Quiz';
$string['na'] = 'n/a';
$string['name'] = 'Nom';
$string['noattemptsallowed'] = 'Aucune nouvelle tentative n est autorisée pour cette activité';
$string['nonewmodules'] = 'Aucun Adaptive Quiz trouvé';
$string['nopermission'] = 'Vous n\'avez pas la permission de consulter cette ressource';
$string['notinprogress'] = 'Cette tentative n est pas en cours.';
$string['notyourattempt'] = 'Ce n est pas votre tentative du quiz';
$string['numofattemptshdr'] = 'Nombre de tentatives';
$string['numright'] = 'Num right';
$string['numwrong'] = 'Num wrong';
$string['percent_correct_display_name'] = '% Correct';
$string['pluginadministration'] = 'Adaptive Quiz';
$string['pluginname'] = 'Adaptive Quiz';
$string['question_report'] = 'Analyse des questions';
$string['questionanalysisbtn'] = 'Analyse des questions';
$string['questionnumber'] = 'Question #';
$string['questionpool'] = 'Banque de questions';
$string['questionpool_help'] = 'Sélectionnez la (les) catégorie(s) de questions dans laquelle l activité tirera les questions lors d une tentative.';
$string['questions_report'] = 'Rapport des questions';
$string['questionsattempted'] = 'Somme des questions tentées';
$string['recentactquestionsattempted'] = 'Questions tentées: {$a}';
$string['recentattemptstate'] = 'État de la tentative:';
$string['recentcomplete'] = 'Terminé';
$string['recentinprogress'] = 'En cours';
$string['reportattemptsummarytab'] = 'Résumé de la tentative';
$string['reportuserattemptstitleshort'] = 'Tentative de {$a}';
$string['requirepassword'] = 'Mot de passe requis';
$string['requirepassword_help'] = 'Les étudiants doivent entrer un mot de passe avant de commencer leur tentative';
$string['requirepasswordmessage'] = 'Pour tenter ce quiz, vous devez connaître le mot de passe du quiz';
$string['resetadaptivequizsall'] = 'Supprimer toutes les tentatives du test';
$string['result'] = 'Résultats';
$string['reviewattempt'] = 'Revoir la tentative';
$string['reviewattemptreport'] = 'Revoir la tentative de {$a->fullname} du {$a->finished}';
$string['score'] = 'Score';
$string['standarderror'] = 'Erreur standard pour arrêter';
$string['standarderror_help'] = 'Lorsque le niveau d erreurs de l utilisateur descend en dessous de ce nombre, le quiz s arrêtera. Réglez cette valeur par défaut de 5% pour exiger plus ou moins de précision dans la note';
$string['standarderrorhdr'] = 'Erreur standard';
$string['startattemptbtn'] = 'Commencer le quiz';
$string['startinglevel'] = 'Niveau de difficulté de départ';
$string['startinglevel_help'] = 'Lorsque l élève commence une tentative, l activité sélectionnera au hasard une question correspondant au niveau de difficulté';
$string['statistic'] = 'Statistiques';
$string['stopingconditionshdr'] = 'Conditions d interruption';
$string['submitanswer'] = 'Envoyer la réponse';
$string['times_used_display_name'] = 'Temps utilisé';
$string['updateattempterror'] = 'Une erreur est survenue au moment de la mise à jour de la tentative';
$string['user'] = 'Utilisateur';
$string['value'] = 'Valeur';
$string['wrongpassword'] = 'Le mot de passe est incorrect';
