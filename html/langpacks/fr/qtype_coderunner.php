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
 * Strings for component 'qtype_coderunner', language 'fr', version '4.4'.
 *
 * @package     qtype_coderunner
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['HIDE'] = 'Masquer';
$string['HIDE_IF_FAIL'] = 'Masquer en cas d’échec';
$string['HIDE_IF_SUCCEED'] = 'Masquer en cas de réussite';
$string['SHOW'] = 'Afficher';
$string['aborted'] = 'Le test a été interrompu à cause d’une erreur.';
$string['ace-language'] = 'Langage Ace';
$string['ace_gapfillerui_ui_source_descr'] = '« globalextra » pour prendre le code à afficher dans le champ globalextra ou « test0 » pour le prendre dans le champ testcode du premier test';
$string['ace_ui_notready'] = 'L’éditeur Ace n’est pas prêt. Recharger peut-être la page ?';
$string['addingcoderunner'] = 'Ajout d’une question CodeRunner';
$string['advanced_customisation'] = 'Personnalisation avancée';
$string['ajax_error'] = '*** ERREUR AJAX. N’ENREGISTREZ PAS CECI ! ***';
$string['allok'] = 'Tous les tests ont été réussis !';
$string['allornone'] = 'Le code de test doit être fourni pour tous les cas de test ou pour aucun.';
$string['allornothing'] = 'Notation tout ou rien';
$string['allornothing_help'] = 'Si « Tout ou rien » est coché, tous les cas de test doivent être satisfaits pour que la tentative obtienne des points. Sinon, la note est obtenue en additionnant les notes pour tous les cas de test qui réussissent et en l’exprimant comme une fraction de la note maximale possible.

Les marques par cas de test ne peuvent être spécifiées que si la case tout ou rien n’est pas cochée.

Si vous utilisez un modèle de notation qui attribue des notes partielles aux cas de test, « Tout ou rien » doit généralement être décoché.';
$string['allowattachments'] = 'Documents joints autorisés';
$string['allowattachments_help'] = 'S’il faut autoriser les étudiants à ajouter des pièces jointes à leurs tentatives et, si oui, combien. Les pièces jointes sont copiées dans le répertoire de travail d’exécution et une liste séparée par des virgules des noms des pièces jointes est fournie au modèle dans la variable Twig {{ ATTACHMENTS }}. Avertissement : autoriser les pièces jointes peut avoir des implications en terme de performances ou d’espace disque pour les serveurs Moodle et Jobe avec des classes volumineuses et / ou des pièces jointes volumineuses. Le serveur Moodle et les serveurs Jobe avant février 2019, stockent toutes les pièces jointes indéfiniment.';
$string['allowedfilenames'] = 'Noms de fichiers autorisés';
$string['allowedfilenames_help'] = 'Tous les noms de fichiers téléchargés doivent correspondre à l’expression régulière PHP (Perl) donnée, si elle n’est pas vide. Par exemple, utilisez « .+\\\\.cpp » pour autoriser n’importe quel fichier C++ ou « (?!Prog)\\\\.java » pour autoriser n’importe quel fichier Java à l’exception de « Prog.java ». De plus, les noms de fichiers doivent contenir uniquement des caractères alphanumériques plus un trait de soulignement, un trait d’union et un point, ne doivent pas commencer par un double trait de soulignement (\'\\_\\_\') et ne doivent entrer en conflit avec aucun des noms de fichiers pris en charge. La description est un message texte présenté à l’étudiant pour expliquer quel(s) fichier(s) sont attendus. Laissez vide pour afficher l’expression régulière elle-même. Laissez les deux vides pour contourner la vérification des expressions régulières.';
$string['allowedfilenamesregex'] = 'Noms de fichiers autorisés (expression régulière)';
$string['allowmultiplestdins'] = 'Autoriser plusieurs standards';
$string['answer'] = 'Réponse';
$string['answer_help'] = 'Un exemple de réponse peut être saisi ici et utilisé pour vérification par l’auteur de la question et éventuellement montré aux étudiants lors de la révision. Il est également utilisé par le script Bulk Tester. L’exactitude d’une réponse non vide est vérifiée lors de l’enregistrement à moins que « Valider à l’enregistrement » ne soit décoché';
$string['answerbox_group'] = 'Réponse';
$string['answerbox_group_help'] = 'Définissez le nombre de lignes à allouer pour la zone de réponse. Cela définit la hauteur minimale de l’élément de l’interface utilisateur (par exemple Ace) qui contrôle la boîte de réponse. La largeur est définie pour s’adapter à la fenêtre. Si la réponse déborde de la case verticalement ou horizontalement, des barres de défilement apparaîtront.';
$string['answerboxlines'] = 'Lignes';
$string['answerpreload'] = 'Réponse pré-remplie';
$string['answerpreload_help'] = 'Le texte indiqué ici apparaîtra dans le cadre réponse de l’étudiant.';
$string['answerprompt'] = 'Réponse :';
$string['answerrequired'] = 'Veuillez fournir une réponse non vide';
$string['answertooshort'] = 'Réponse trop courte. Elle doit comporter au minimum {$a} caractères.';
$string['asolutionis'] = 'Montrer / masquer la solution de l’auteur de la question :';
$string['atleastonetest'] = 'Vous devez au moins fournir un test type pour cette question.';
$string['attachmentoptions'] = 'Options pour les documents joints';
$string['attachmentsoptional'] = 'Les documents joints sont optionnels';
$string['attachmentsrequired'] = 'Requiert des documents joints';
$string['attachmentsrequired_help'] = 'Cette option spécifie le nombre minimum de documents joints requis pour qu’une réponse soit évaluée.';
$string['autotagbycategoryindextitle'] = 'Marqueur automatique de questions CodeRunner';
$string['autotagbycategorytitle'] = 'Balise automatique CodeRunner par catégorie';
$string['bad_dotdotdot'] = 'Mauvais usage de « ... ». Doit se trouver à la fin, après deux pénalités croissantes numériques';
$string['bad_empty_splitter'] = 'Le séparateur de test ne peut pas être vide lors de l’utilisation d’un modèle de combinateur';
$string['bad_new_prototype_name'] = 'Nom illégal du nouveau prototype : déjà utilisé';
$string['badacelangstring'] = 'Chaîne de langue Ace incorrecte';
$string['badcputime'] = 'Le temps limite de CPU doit rester vide ou être un entier plus grand que zéro';
$string['bademptyprecheck'] = 'La pré-vérification a échoué avec la sortie inattendue suivante.';
$string['badfilenamesregex'] = 'Expression régulière non valide';
$string['badfiles'] = 'Nom(s) de fichier non permis : {$a}';
$string['badjson'] = 'Mauvaise sortie JSON de la sortie de la notation combinatrice. La sortie était : {$a->output}';
$string['badjsonfunc'] = 'Fonction intégrée JSON inconnue ({$a->func})';
$string['badmemlimit'] = 'La taille mémoire limite doit rester vide ou être un entier non négatif';
$string['badpenalties'] = 'Le régime de pénalité doit être une liste de nombres séparés par des virgules dans la plage [0, 100]';
$string['badquestion'] = 'La question comporte une erreur';
$string['badrandomintarg'] = 'Mauvais argument de la fonction JSON @randomint';
$string['badrandompickarg'] = 'Mauvais argument de la fonction JSON @randompic';
$string['badsandboxparams'] = 'Le champ « Autre » (paramètres du bac à sable) doit être vide ou un enregistrement JSON valide';
$string['badtemplateparams'] = 'Les paramètres du modèle doivent être vides ou un enregistrement JSON valide. Obtenu : <pre class="templateparamserror">{$a}</pre>';
$string['baduiparams'] = 'Les paramètres d’interface utilisateur doivent être vides ou un enregistrement JSON valide.';
$string['brokencombinator'] = 'Résultats attendus du test {$a->numtests}, obtenu {$a->numresults}. Peut-être une sortie excessive ou une erreur dans la question ?';
$string['brokentemplategrader'] = 'Mauvaise sortie de la notation : {$a->output}. L’exécution de votre programme a peut-être été interrompue (par exemple, une limite de temps ou une limite de mémoire dépassée).';
$string['bulkquestiontester'] = 'Le <a href="{$a->link}">script testeur en masse</a> vérifie que les exemples de réponses à toutes les questions dans le contexte actuel sont marqués correctement. Utile uniquement une fois que des questions avec des exemples de réponses ont été ajoutées ; l’installation initiale n’en a pas.';
$string['bulktestallincontext'] = 'Tout tester';
$string['bulktestcontinuefromhere'] = 'Exécuter à nouveau ou reprendre, à partir d’ici';
$string['bulktestindextitle'] = 'Tests groupés CodeRunner';
$string['bulktestrun'] = 'Exécuter tous les tests de questions pour toutes les questions du système (lent, administrateur uniquement)';
$string['bulktesttitle'] = 'Questions de test dans {$a}';
$string['coderunner'] = 'Code du programme';
$string['coderunner:sandboxwsaccess'] = 'Autoriser l’accès au bac à sable Jobe via les services Web';
$string['coderunner:viewhiddentestcases'] = 'Voir les cas de test cachés lors de l’examen des questions';
$string['coderunner_help'] = 'En réponse à une question, qui est une spécification pour un fragment de programme, une fonction ou un programme entier, le répondant entre le code source dans un langage informatique spécifié qui satisfait à la spécification.';
$string['coderunner_install_testsuite_failures'] = 'Tests ayant échoué';
$string['coderunner_install_testsuite_intro'] = 'Cette page vous permet de tester si les questions CodeRunner avec des exemples de réponse fonctionnent correctement.';
$string['coderunner_install_testsuite_noanswer'] = 'Questions sans exemple de réponse';
$string['coderunner_install_testsuite_title'] = 'Une suite de tests pour des exemples de réponses CodeRunner';
$string['coderunner_install_testsuite_title_desc'] = 'Le <a href="{$a->link}">script exemple-réponse-test</a> vérifie que les questions avec des exemples de réponses fonctionnent correctement.';
$string['coderunner_link'] = 'question/type/coderunner';
$string['coderunner_question_type'] = 'Type de question CodeRunner :';
$string['coderunnercategories'] = 'Catégories avec des questions CodeRunner';
$string['coderunnercontexts'] = 'Contextes avec des questions CodeRunner';
$string['coderunnersettings'] = 'Réglages CodeRunner';
$string['coderunnersummary'] = 'La réponse est le code d’un programme dont l’exécution sur les données de tests détermine l’exactitude.';
$string['coderunnertype'] = 'Type de question';
$string['coderunnertype_help'] = 'Choisir le langage de programmation et le type de question. Une fois le type de question choisi, les détails peuvent être consultés ci-dessous.';
$string['coderunnerwssettings'] = 'Paramètres du service Web Sandbox';
$string['columncontrols'] = 'Tableau des résultats';
$string['columncontrols_help'] = 'Les cases à cocher sélectionnent les colonnes du tableau des résultats qui doivent être affichées à l’étudiant après la tentative';
$string['confirm_proceed'] = 'Si vous enregistrez cette question avec la case « Personnaliser » décochée, toutes les personnalisations effectuées seront perdues. Continuer ?';
$string['confirmreset'] = 'Supprimer tout votre travail sur cette question et réinitialiser la zone de réponse à la valeur préchargée d’origine ?';
$string['corruptuiparams'] = 'Les paramètres d’interface utilisateur pour cette question ou son prototype sont cassés. Procéder avec prudence.';
$string['cputime'] = 'Limite de temps (secondes)';
$string['customisation'] = 'Personnalisation';
$string['customisationcontrols'] = 'Personnalisation';
$string['customise'] = 'Personnaliser';
$string['datafiles'] = 'Fichiers d’aide';
$string['datafiles_help'] = 'Tous les fichiers téléchargés ici seront ajoutés au répertoire de travail lors de l’exécution du programme modèle étendu. Cela permet d’ajouter facilement des données volumineuses ou des fichiers de support.';
$string['default_penalty_regime'] = 'Régime de pénalités par défaut';
$string['default_penalty_regime_desc'] = 'Le régime de pénalité par défaut à appliquer aux nouvelles questions, consistant en une liste de pourcentages de pénalité séparés par des virgules, se terminant éventuellement par ", ..." pour signifier une progression arithmétique continue.';
$string['display'] = 'Affichage';
$string['downloadquizattempts'] = 'Télécharger les tentatives de test';
$string['downloadquizattemptshelp'] = 'Cliquez sur le cours approprié et / ou sur le bouton de téléchargement pour le cours et le quiz que vous souhaitez télécharger. Les nombres entre parenthèses après les cours représentent le nombre de tests dans le cours avec au moins une soumission. Les chiffres entre parenthèses après le nom du test sont le nombre de tentatives';
$string['editingcoderunner'] = 'Modifier une question CodeRunner';
$string['empty_new_prototype_name'] = 'Le nouveau type de question ne peut pas être vide';
$string['emptypenaltyregime'] = 'Le régime de pénalités doit être défini (depuis la version 3.1)';
$string['enable'] = 'Activé';
$string['enable_diff_check'] = 'Activer le bouton « Afficher les différences »';
$string['enable_diff_check_desc'] = 'Présentez aux étudiants un bouton « Afficher les différences » si leur réponse est fausse et qu’un validateur de correspondance exacte est utilisé';
$string['enable_sandbox_desc'] = 'Autoriser l’utilisation du bac à sable spécifié pour l’exécution des soumissions des étudiants';
$string['enable_sandbox_ws'] = 'Activer le service Web sandbox';
$string['enable_sandbox_ws_desc'] = 'Activer le service Web permettant un accès direct au serveur sandbox (généralement Jobe). CARACTÉRISTIQUE EXPÉRIMENTALE.';
$string['enablecombinator'] = 'Activer le combinateur';
$string['equalitygrader'] = 'Correspondance exacte';
$string['error_loading_prototype'] = 'Erreur de chargement du prototype. Problèmes de réseau ou serveur en panne, peut-être ?';
$string['error_loading_ui_descr'] = 'Erreur lors du chargement de la description de l’interface utilisateur. Problèmes de réseau ou serveur en panne, peut-être ?';
$string['erroroninit'] = '**** ERREUR LORS DE L’INITIALISATION DE LA QUESTION ****<br>{$a->error}<br>';
$string['errorstring-accessdenied'] = 'Accès au bac à sable refusé';
$string['errorstring-autherror'] = 'Non autorisé à utiliser le bac à sable';
$string['errorstring-blocked-url'] = 'L’URL est bloquée. Vérifiez l’URL Jobe et les paramètres de sécurité HTTP de Moodle.';
$string['errorstring-jobe-failed'] = 'La requête du serveur Jobe a échoué.';
$string['errorstring-jobe400'] = 'Erreur du serveur bac à sable Jobe :';
$string['errorstring-ok'] = 'D’accord';
$string['errorstring-overload'] = 'Le travail n’a pas pu être exécuté en raison d’une surcharge du serveur. Réessayer peut-être sous peu ?';
$string['errorstring-pastenotfound'] = 'Demander le statut d’un travail inexistant';
$string['errorstring-submissionfailed'] = 'Échec de la soumission au bac à sable';
$string['errorstring-submissionlimitexceeded'] = 'Limite de soumission de boîte à sable atteinte';
$string['errorstring-unknown'] = 'Erreur inattendue lors de l’exécution de votre code. Le serveur boîte à sable est peut-être en panne ou surchargé. Réessayer peut-être sous peu ?';
$string['errorstring-wronglangid'] = 'Langue inexistante demandée';
$string['event_sandboxwebserviceexec'] = 'Exécution de bac à sable CodeRunner';
$string['event_sandboxwebserviceexec_desc'] = 'Une tâche a été exécutée via le service Web de bac à sable CodeRunner.';
$string['expand'] = 'Développer';
$string['expandtitle'] = 'Afficher les catégories de questions';
$string['expected'] = 'Sortie attendue';
$string['expected_help'] = 'Le résultat attendu du test. Vu par le modèle comme {{TEST.expected}}.';
$string['expectedcolhdr'] = 'Résultat attendu';
$string['exportthisquestion'] = 'Exporter cette question';
$string['exportthisquestion_help'] = 'Cela créera un fichier d’exportation XML Moodle contenant uniquement cette question. Un exemple de cas où cela est utile si vous pensez que cette question démontre un bogue dans CodeRunner que vous souhaitez signaler aux développeurs.';
$string['extra'] = 'Données de modèle supplémentaires';
$string['extra_help'] = 'Un champ de texte supplémentaire parfois utile à utiliser par le modèle, accessible en tant que {{TEST.extra}}';
$string['fail'] = 'Échec';
$string['failedhidden'] = 'Votre code a échoué dans un ou plusieurs tests cachés.';
$string['failedntests'] = '{$a->numerrors} test(s) en échec';
$string['failedtesting'] = 'Échec des tests.';
$string['fails'] = 'Échecs';
$string['feedback'] = 'Commentaire';
$string['feedback_help'] = 'Choisissez « Définir par test » pour autoriser les options de révision du test (en particulier le
Paramètre « Retour spécifique ») pour contrôler l’affichage du tableau des résultats, « Forcer l’affichage » pour afficher le tableau des résultats indépendamment et « Forcer le masquage » pour le masquer indépendamment';
$string['feedback_hide'] = 'Forcer le masquage';
$string['feedback_quiz'] = 'Définir par test';
$string['feedback_show'] = 'Forcer l’affichage';
$string['fileheader'] = 'Fichiers d’aide';
$string['filenamesexplain'] = 'Description';
$string['filenamesregex'] = 'Expression régulière';
$string['filloutoneanswer'] = 'Vous devez saisir le code source qui satisfait à la spécification. Le code que vous entrez sera exécuté pour déterminer son exactitude et une note attribuée en conséquence.';
$string['firstfailure'] = 'Premier cas de test échoué : {$a}';
$string['forexample'] = 'Par exemple';
$string['gapfillerui_delimiters_descr'] = 'Un tableau de 2 caractères des chaînes utilisées pour ouvrir et fermer la description de l’écart';
$string['gapfillerui_sync_interval_secs_descr'] = 'L’intervalle de temps en secondes entre les appels pour synchroniser le contenu de l’interface utilisateur avec la réponse à la question. 0 pour l’absence d’une telle synchronisation automatique.';
$string['gapfillerui_ui_source_descr'] = '« globalextra » pour prendre le code HTML à afficher dans le champ globalextra ou « test0 » pour le prendre dans le champ testcode du premier test';
$string['giveup'] = 'Bouton d’arrêt';
$string['giveup_aftermaxmarks'] = 'Disponible une fois que la note ne peut plus être améliorée';
$string['giveup_always'] = 'Toujours disponible';
$string['giveup_help'] = 'Si cette option est activée, les étudiants verront un bouton pour arrêter d’interagir avec la question et afficher à la place les commentaires généraux.

Le message « Arrêter et lire le feedback final » peut être affiché dès le début, ou seulement une fois que l’étudiant ne peut plus améliorer sa note, en raison du régime de pénalités.';
$string['giveup_never'] = 'Jamais disponible';
$string['globalextra'] = 'Extra global';
$string['globalextra_help'] = 'Un champ de texte à usage général par les auteurs de modèles, comme le champ supplémentaire de chaque cas de test, mais global à tous les tests. Disponible pour l’auteur du modèle en tant que {{ QUESTION.globalextra }}.';
$string['goodemptyprecheck'] = 'Passé';
$string['gotcolhdr'] = 'Résultat obtenu';
$string['grader'] = 'Correcteur';
$string['grading'] = 'Classement';
$string['gradingcontrols'] = 'Contrôles du classement';
$string['gradingcontrols_help'] = 'Le correcteur par défaut « correspondance exacte » attribue des points uniquement si la sortie de l’exécution correspond exactement à la valeur attendue définie par le cas de test. L’espace blanc de fin est supprimé de toutes les lignes, et toutes les lignes vides sont supprimées, avant que le test d’égalité soit fait.

L’évaluateur de quasi-égalité est similaire, sauf qu’il réduit également plusieurs espaces et tabulations en un seul espace, supprime toutes les lignes blanches et convertit les chaînes en minuscules.

L’évaluateur « expression régulière » utilise le champ « attendu » du cas de test en tant qu’expression régulière (sans délimiteurs de type PERL) et teste la sortie pour voir si une correspondance avec le résultat attendu peut être trouvée n’importe où dans la sortie. Par exemple, une valeur attendue de « ab. * z » correspondrait à toute sortie contenant le
les caractères « ab » n’importe où dans la sortie et un caractère « z » quelque part plus loin.
Pour forcer la correspondance de l’ensemble de la sortie, démarrez et terminez l’expression régulière avec « \\ A » et « \\ Z » respectivement. La correspondance des expressions régulières utilise MULTILINE et les options DOTALL.

L’option « modèle de correction » suppose que la sortie du programme est en fait un résultat de la notation, c’est-à-dire que le modèle teste *et note* la réponse de l’étudiant.
La seule sortie d’un tel programme modèle doit être un enregistrement codé en JSON.

Si le modèle est un modèle par test (c’est-à-dire pas un combinateur), la chaîne JSON doit décrire une ligne du tableau de résultats et doit contenir au moins un champ « fraction », qui est multiplié par TEST. Marquer pour décider combien de points sont attribués au cas de test. Il devrait généralement également contenir un champ « got », qui est la valeur affichée dans la colonne « Got » du tableau des résultats.
Les autres colonnes du tableau des résultats (testcode, stdin, attendu) peuvent également
être définies par le programme de notation du modèle et seront utilisées à la place des valeurs du cas d’essai. Par exemple, si la sortie du programme est la chaîne <code>{"fraction":0.5, "got": "La moitié des réponses étaient bonnes !"}</code>, les demi-points seront
donnés pour ce cas de test particulier et la colonne « Got » affichera le texte « La moitié des réponses étaient justes ! ». D’autres colonnes peuvent être ajoutées au tableau des résultats en ajoutant des attributs supplémentaires à l’enregistrement JSON et également au champ Colonnes de résultats de la question.

Si le modèle est un combinateur, la chaîne JSON sortie par l’évaluateur de modèle devrait à nouveau contenir un champ "fraction", cette fois pour la note totale, et peut contenir zéro ou plus de \'prologuehtml\', \'testresults\', \'epiloguehtml\', \'columnformats\', \'showoutputonly\' et \'showdifferences\'.
Les champs \'prologuehtml\' et \'epiloguehtml\' sont en html qui s’affichent respectivement avant et après le tableau de résultats (facultatif). Le champ \'testresults\', s’il est fourni, est une liste de listes utilisées pour afficher une sorte du tableau des résultats. La première ligne est la ligne d’en-tête de colonne et toutes les autres lignes définissent le corps du tableau. Il existe deux valeurs d’en-tête de colonne spéciales : \'iscorrect\' et \'ishidden\'. La ou les colonnes « incorrectes » sont utilisées pour afficher des croix ou des coches pour 0 et 1 respectivement. La colonne \'ishidden\' n’est pas réellement affichée, mais les valeurs 0 ou 1 dans la colonne peuvent être utilisées pour activer et visibilité hors ligne. Les étudiants ne voient pas les lignes cachées mais les évaluateurs et autres le personnel les voient. Si une table de « résultats de test » est fournie, un champ optionnel \'columnformats\' peut également être fourni. Cela devrait être une liste
de chaînes, une par colonne, à l’exclusion des colonnes \'iscorrect\' et \'ishidden\'. Les chaînes spécifient le format à utiliser pour afficher les valeurs des cellules ; actuellement les seuls formats pris en charge sont \'%s\' pour un affichage de chaîne normal (qui est nettoyé et enveloppé dans un élément \'pre\') et \'%h\' pour une valeur html qui ne doit pas être traitée avant l’affichage.
Le champ « showdifferences » active l’affichage d’un bouton « Afficher les différences » après le tableau des résultats si la fraction de note attribuée n’est pas de 1,0.
Le champ \'showoutputonly\', s’il est vrai, est utilisé lorsque la question doit être utilisée uniquement pour afficher la sortie et peut-être les images d’une exécution, sans marque.';
$string['graph_ui_invalidserialisation'] = 'GraphUI : sérialisation non valide';
$string['graphhelp'] = '- Double-cliquez sur un espace vide pour créer un nouveau nœud/état.
- Double-cliquez sur un nœud existant pour le "marquer", par ex. comme état d’acceptation pour les machines à états finis (FSM). Double-cliquez à nouveau pour le décocher.
- Cliquez et faites glisser pour déplacer un nœud.
- Alt clic (ou Ctrl Alt clic) et faites glisser pour déplacer un (sous-)graphe.
- Shift clic à l’intérieur d’un nœud et glisser vers un autre pour créer un lien.
- Cliquez avec Maj sur un espace vide, faites glisser vers un nœud pour créer un lien de démarrage (FSM uniquement).
- Cliquez et faites glisser un lien pour modifier sa courbe.
- Cliquez sur un lien/nœud pour éditer son texte.
- Taper _ suivi d’un chiffre fait de ce chiffre un indice.
- Taper \\epsilon crée un caractère epsilon (et de même pour \\alpha, \\beta etc).
- Cliquer sur un lien/nœud puis appuyer sur la touche Suppr pour le supprimer (ou fonction-supprimer sur un Mac).';
$string['graphui_fontsize_descr'] = 'La taille de la police en points utilisée pour les étiquettes de nœud et de bord.';
$string['graphui_helpmenutext_descr'] = 'Texte qui, s’il n’est pas vide, remplace le texte du menu d’aide standard défini dans les chaînes de langue de CodeRunner';
$string['graphui_isdirected_descr'] = 'Vrai si les arêtes sont orientées';
$string['graphui_isfsm_descr'] = 'Vrai si le graphique représente une machine à états finis, auquel cas il peut contenir un front entrant de nulle part (le front de départ) et peut avoir des nœuds « accepter »';
$string['graphui_lockedgelabels_descr'] = 'Vrai pour empêcher l’utilisateur de modifier les étiquettes de bord. Cela empêche également les nouveaux bords d’avoir des étiquettes.';
$string['graphui_lockedgepositions_descr'] = 'Si vrai, empêche l’utilisateur de faire glisser les bords pour modifier leur courbure. Peut-être utile si la boîte de réponse est préchargée avec un graphique que l’étudiant doit annoter en changeant les étiquettes des nœuds ou des arêtes ou en ajoutant/supprimant des arêtes. S’assure également que les bords ajoutés par un étudiant sont droits, par ex. dessiner un polygone sur un ensemble de points donnés. Notez bien que les arêtes peuvent toujours être ajoutées et supprimées. Voir lockedgeset.';
$string['graphui_lockedgeset_descr'] = 'Si vrai, empêche l’utilisateur d’ajouter ou de supprimer des arêtes.';
$string['graphui_locknodelabels_descr'] = 'Si vrai, empêche l’utilisateur de modifier les étiquettes de nœud. Cela empêchera également tout nouveau nœud d’avoir des étiquettes non vides';
$string['graphui_locknodepositions_descr'] = 'Si vrai, empêche l’utilisateur de déplacer des nœuds. Utile lorsque la boîte de réponse est préchargée avec un graphique que l’étudiant doit annoter en changeant les étiquettes des nœuds ou des arêtes ou en ajoutant/supprimant des arêtes. Notez bien que les nœuds peuvent toujours être ajoutés et supprimés. Voir locknodeset.';
$string['graphui_locknodeset_descr'] = 'Si vrai, empêche l’utilisateur d’ajouter ou de supprimer des nœuds ou de basculer les types de nœuds vers/depuis les récepteurs.';
$string['graphui_noderadius_descr'] = 'Le rayon d’un nœud en pixels';
$string['graphui_textoffset_descr'] = 'Le décalage en pixels d’une étiquette de lien par rapport à son lien (obsolète - utilisez plutôt le glissement).';
$string['hidden'] = 'Caché';
$string['hidecheck'] = 'Masquer la vérification';
$string['hidedetails'] = 'Masquer les détails';
$string['hidedifferences'] = 'Cacher les différences';
$string['hiderestiffail'] = 'Cacher le reste en cas d’échec';
$string['hoisttemplateparams'] = 'Paramètres du gabarit d’envoi';
$string['howtogetmore'] = 'Pour des informations plus détaillées, enregistrez la question avec « Valider à l’enregistrement » décoché et testez manuellement';
$string['htmlui_enable_in_editor_descr'] = 'Si vrai, utiliser l’interface utilisateur pour afficher l’exemple de réponse et le préchargement de la réponse dans le formulaire d’édition de la question, plutôt que la version sérialisée. Définir ceci sur faux si vous utilisez Twig dans le champ source HTML.';
$string['htmlui_html_src_descr'] = 'Définit la source du code HTML. Doit être égal à « globalextra » ou « prototypeextra ».';
$string['htmlui_sync_interval_secs_descr'] = 'L’intervalle de temps en secondes entre les appels pour synchroniser le contenu de l’interface utilisateur avec la réponse à la question. 0 pour l’absence d’une telle synchronisation automatique.';
$string['htmluiloadfail'] = 'Le plug-in d’interface utilisateur HTML n’a pas pu s’initialiser. La chaîne d’état JSON n’est probablement pas valide.';
$string['ideone_pass'] = 'Mot de passe du serveur Ideone';
$string['ideone_pass_desc'] = 'Le mot de passe à utiliser lors de la connexion au serveur obsolète Ideone (si le bac à sable ideone est activé)';
$string['ideone_user'] = 'Utilisateur du serveur Ideone';
$string['ideone_user_desc'] = 'Le nom de connexion à utiliser lors de la connexion au serveur obsolète Ideone (si le bac à sable Ideone est activé)';
$string['illegalformat'] = 'Format illégal ({$a->format}) dans les formats de colonnes';
$string['illegaluiparamname'] = 'Les paramètres suivants ne sont pas valides pour l’interface utilisateur {$a->uiname} :';
$string['info_unavailable'] = 'Les informations sur le type de question ne sont pas disponibles pour les questions personnalisées.';
$string['inputcolhdr'] = 'Entrée';
$string['insufficientattachments'] = 'Pas assez de pièces jointes, {$a} requis.';
$string['is_prototype'] = 'Utiliser comme prototype';
$string['iscombinatortemplate'] = 'Est combinateur';
$string['jobe_apikey'] = 'Clé API Jobe';
$string['jobe_apikey_desc'] = 'La clé API à inclure dans toutes les requêtes REST au serveur Jobe (si nécessaire). Maximum 40 caractères. Laisser vide pour omettre la clé API des requêtes';
$string['jobe_canterbury_html'] = '<p style=\'color:gray; font-style:italic; font-size:smaller\'>Exécuté sur le serveur Jobe de l’Université de Canterbury.</p>';
$string['jobe_host'] = 'Serveur Jobe';
$string['jobe_host_desc'] = 'Le nom d’hôte du serveur Jobe plus le numéro de port s’il est différent du port 80, par ex. jobe.quelque_part.edu:4010. L’URL de la requête Jobe est obtenue par défaut en préfixant cette chaîne avec http:// et en ajoutant /jobe/index.php/restapi/<REST_METHOD>. Vous pouvez soit spécifier le protocole https:// devant le nom d’hôte (par exemple https://jobe.quelque_part.edu) si le serveur Jobe est défini derrière un proxy inverse qui agit comme une terminaison SSL.';
$string['jobe_host_ws'] = 'Serveur Jobe à utiliser pour les services Web';
$string['jobe_host_ws_desc'] = 'Le service Web du serveur sandbox utilisera tout sandbox pour la
langue spécifiée. Il s’agit pratiquement toujours d’un serveur Jobe, et le serveur Jobe particulier à utiliser est configuré via l’interface d’administration (ci-dessus).
    Cependant, pour une meilleure sécurité du service Web, il est préférable d’utiliser une alternative Serveur Jobe, défini par ce champ. Plusieurs serveurs de job, séparés par un point-virgule, sont possibles pour gérer des charges plus importantes : l’un est choisi au hasard. Laissez vide pour utiliser la valeur par défaut.';
$string['jobe_warning_html'] = '<p style=\'background-color:yellow\'>Exécuter en utilisant le serveur Jobe de l’Université de Canterbury. Ceci est pour les tests initiaux seulement. Veuillez configurer votre propre serveur Jobe dès que possible. Voir <a href=\'https://github.com/trampgeek/moodle-qtype_coderunner/blob/master/Readme.md#sandbox-configuration\' target=\'_blank\'>ici</a>.</p>';
$string['language'] = 'Langage du bac à sable';
$string['languages'] = 'Langages';
$string['languages_help'] = 'Le langage du bac à sable est le langage informatique utilisé pour exécuter la soumission. Cela ne devrait généralement pas avoir besoin d’être modifié par rapport à la valeur dans le modèle parent ; modifiez-le à vos risques et périls.

Le langage Ace est le langage utilisé par l’éditeur de code Ace (si activé) pour la réponse de l’étudiant.
Par défaut, il s’agit du même langage que le bac à sable ; entrer une autre valeur ici uniquement si la langue du modèle est différente de la langue que l’étudiant est censé écrire (par exemple, si un modèle Python est utilisé pour prétraiter le programme C d’un étudiant, puis l’exécuter dans un sous-processus).

Des questions multilingues, c’est-à-dire des questions auxquelles les étudiants peuvent répondre en
plus d’une langue, sont activés en définissant la langue Ace sur une virgule séparée
liste des langues. Les étudiants sont ensuite présentés avec un menu déroulant pour sélectionner
la langue dans laquelle leur réponse est écrite. Si exactement l’une des langues
a un astérisque (\'\\*\') ajouté, cette langue est choisie comme langue par défaut,
qui est sélectionné comme état initial du menu déroulant. Par exemple,
une valeur en langage Ace de "C,C++,Java\\*,Python3" permettrait à l’étudiant de soumettre en
C, C++, Java ou Python3, mais le menu déroulant afficherait initialement Java qui
serait la valeur par défaut. Si aucune valeur par défaut n’est spécifiée, le
l’état initial de la liste déroulante est vide et l’étudiant doit choisir une langue.
Les questions multilingues nécessitent un modèle spécial qui utilise le {{ANSWER\\_LANGUAGE}}
variable de modèle pour contrôler comment exécuter le code étudiant. Voir le intégré
exemple de type de question multilingue. La variable {{ANSWER\\_LANGUAGE}} est définie
<i>uniquement</i> pour les questions multilingues.

Si l’auteur souhaite fournir un exemple de réponse à une question multilingue,
ils doivent l’écrire dans la langue par défaut, si elle est spécifiée, ou dans la
sinon la première des langues autorisées.';
$string['languageselectlabel'] = 'Langage';
$string['legacyuiparams'] = 'Les paramètres de l’interface utilisateur ne peuvent plus être définis dans le champ des paramètres du modèle. Veuillez plutôt déplacer les éléments suivants dans le champ Paramètres de l’interface utilisateur :';
$string['legacyuiparams2'] = 'Les paramètres de l’interface utilisateur ne peuvent plus être définis dans le champ des paramètres du modèle. Veuillez plutôt déplacer les éléments suivants dans le champ des paramètres de l’interface utilisateur, en supprimant le préfixe « {$a->uiname}_ » :';
$string['mark'] = 'Note';
$string['marking'] = 'Attribution des notes';
$string['markinggroup'] = 'Notation';
$string['markinggroup_help'] = 'Si « Tout ou rien » est coché, tous les cas de test doivent être satisfaits pour que la tentative gagne des points. Sinon, la note est obtenue en additionnant les notes de tous les cas de test réussis et en l’exprimant comme une fraction de la note maximale possible.
Les notes par cas de test ne peuvent être spécifiées que si la case à cocher tout ou rien n’est pas cochée. Si vous utilisez un calibreur de modèle qui récompense des cas de test partiels, « Tout ou rien » doit généralement être décoché.

Le régime de sanctions obligatoires est une liste de sanctions séparées par des virgules (chacune en pourcentage) à appliquer aux tentatives successives. Ces derniers sont absolus et non cumulatifs. Comme un cas particulier la dernière pénalité peut être « ... » pour signifier « prolonger les deux précédentes pénalités sous forme de progression arithmétique jusqu’à 100 ». Par exemple, <code>0,5,10,30,...</code> équivaut à <code>0,5,10,30,50,70,90,100 </code>.
S’il y a plus de tentatives que de pénalités définies, la dernière valeur est utilisée.
Des espaces peuvent être utilisés à la place des virgules comme séparateur.

Le régime de pénalité par défaut peut être défini à l’échelle du site par un administrateur système à l’aide de Administration du site > Plugins > Types de questions > CodeRunner.

Définissez le régime de pénalité sur « 0 » pour aucune pénalité sur toutes les tentatives.

Le régime de pénalité est ignoré et aucune pénalité n’est appliquée si le test est exécuté en utilisant le comportement \'Adaptatif (pas de pénalité)\'.';
$string['maxfilesize'] = 'Taille de fichier maximale autorisée (octets)';
$string['maxfilesize_help'] = 'Sélectionnez la taille maximale de téléchargement de fichier (octets). Autoriser les téléchargements de fichiers volumineux avec des classes volumineuses peut avoir un impact sur les performances et l’espace disque sur les serveurs Moodle et Jobe.';
$string['memorylimit'] = 'Limite de mémoire (Mo)';
$string['missinganswers'] = 'réponses manquantes';
$string['missingorbadfraction'] = 'Fraction incorrecte ou manquante dans la sortie du calibreur de modèle. La sortie était : {$a->output}';
$string['missingoutput'] = 'Vous devez fournir la sortie attendue de ce scénario de test.';
$string['missingprototype'] = 'Cette question a été définie comme étant de type « {$a->crtype} » mais le prototype n’existe pas, ou n’est pas unique, ou n’est pas disponible dans ce contexte. Vous devez annuler et essayer de (ré)installer le prototype.
Procédez à la modification uniquement si vous savez ce que vous faites !';
$string['missingprototypes'] = 'Prototypes manquants';
$string['missingprototypewhenrunning'] = 'Question bancale (prototype manquant ou en double « {$a->crtype} » ). Ne peut pas être exécuté.';
$string['missinguiparams'] = 'Les paramètres d’interface utilisateur suivants sont obligatoires mais non définis :';
$string['morehidden'] = 'Certains cas de test cachés ont également échoué.';
$string['multipledefaults'] = 'Au plus une langue peut être sélectionnée par défaut';
$string['multipleprototypes'] = 'Plusieurs prototypes trouvés pour « {$a->crtype} »';
$string['mustrequirefewer'] = 'Vous ne pouvez pas exiger plus de pièces jointes que vous n’en autorisez.';
$string['nearequalitygrader'] = 'Correspondance presque exacte';
$string['negativeorzeromark'] = 'La marque doit être supérieure à zéro';
$string['nodetailsavailable'] = 'Sélectionnez un type de question pour voir l’aide détaillée.';
$string['noerrorsallowed'] = 'Votre code doit réussir tous les tests pour gagner des points. Recommencer.';
$string['nonnumericmark'] = 'Note non numérique';
$string['noqtype'] = 'Aucun type de question sélectionné';
$string['nosampleanswer'] = 'Pas d’exemple de réponse';
$string['nouiparameters'] = 'L’interface utilisateur {$a->uiname} ne prend pas de paramètres.';
$string['options'] = 'Options';
$string['ordering'] = 'Tri';
$string['overloadoninit'] = 'La surcharge du serveur Sandbox a empêché l’initialisation de la question';
$string['pass'] = 'Passe';
$string['passes'] = 'Passes';
$string['penaltyregime'] = '(régime de pénalités : {$a} %)';
$string['penaltyregimelabel'] = 'Régime de pénalité :';
$string['pluginname'] = 'CodeRunner';
$string['pluginname_help'] = 'Utilisez la zone de liste déroulante « Type de question » pour sélectionner le langage informatique et le type de question qui seront utilisés pour exécuter la tentative de l’étudiant.
Spécifiez le problème pour lequel l’étudiant doit écrire du code, puis définissez un ensemble de tests à exécuter sur la tentative de l’étudiant';
$string['pluginname_link'] = 'question/type/coderunner';
$string['pluginnameadding'] = 'Ajout d’une question CodeRunner';
$string['pluginnameediting'] = 'Modification d’une question CodeRunner';
$string['pluginnamesummary'] = 'CodeRunner : exécute le code soumis par les étudiants dans un bac à sable';
$string['precheck'] = 'Précontrôle';
$string['precheck_all'] = 'Tout';
$string['precheck_disabled'] = 'Désactivé';
$string['precheck_empty'] = 'Vide';
$string['precheck_examples'] = 'Exemples';
$string['precheck_help'] = 'Définissez les boutons disponibles pour que les étudiants soumettent des réponses. Habituellement, au moins un bouton Vérifier est affiché, mais il peut être masqué (par exemple, pour une utilisation dans des contextes de rétroaction différée) si <i>Masquer la vérification</i> est coché.

Si la pré-vérification est activée, les étudiants auront un bouton supplémentaire à gauche du bouton de vérification habituel pour leur donner une course sans pénalité pour vérifier leur code par rapport à un sous-ensemble des cas de test de la question. Ensuite<ul><li>Si \'Vide\' est sélectionné, une seule exécution sera effectuée avec le modèle par test en utilisant un cas de test dans lequel tous les champs (testcode, stdin, attendu, etc.) sont la chaîne vide. Une sortie non vide est considérée comme un échec de précontrôle. À utiliser avec prudence : certains types de questions ne traiteront pas cela correctement, par ex. questions sur l’écriture d’un programme qui génèrent une sortie.
</li><li>Si \'Examples\' est sélectionné, le code sera testé par rapport à tous les tests pour lesquels \'use_as_example\' a été vérifié.
</li><li>Si « Sélectionné » est sélectionné, un élément d’interface utilisateur supplémentaire est ajouté à chaque scénario de test pour permettre à l’auteur de sélectionner un sous-ensemble spécifique de tests.
</li><li>Si « Tous » est sélectionné, tous les cas de test sont exécutés (bien que leur comportement puisse être différent de la vérification normale, si le code du modèle le souhaite).
</ul>
Le modèle peut vérifier si l’exécution est ou non une exécution de précontrôle à l’aide du paramètre Twig {{ IS_PRECHECK }}, qui est « 1 » pendant les exécutions de précontrôle et « 0 » sinon.';
$string['precheck_only'] = 'Précontrôle uniquement';
$string['precheck_selected'] = 'Sélectionné';
$string['precheckingemptyset'] = 'Exemples de pré-vérification, mais il n’y en a pas !';
$string['privacy:metadata'] = 'Le plugin de type question CodeRunner n’enregistre aucune donnée personnelle.';
$string['proceed_at_own_risk'] = 'Modification d’un prototype de question intégré ?! Procédez à vos risques et périls !';
$string['prototypeQ'] = 'Est-ce un prototype ?';
$string['prototype_error'] = '*** ÉCHEC DE CHARGEMENT DU PROTOTYPE. NE SAUVEGARDEZ PAS CECI ! ***';
$string['prototype_load_failure'] = 'Erreur lors du chargement du prototype :';
$string['prototypecontrols'] = 'Prototypage';
$string['prototypecontrols_help'] = 'Si « Est-ce un prototype » est vrai, cette question devient un prototype pour d’autres questions.
Après l’enregistrement, le nom du type de question spécifié apparaîtra dans la liste déroulante de types de questions. Les nouvelles questions basées sur ce type hériteront alors par défaut de tous les attributs de personnalisation spécifiés pour cette question. Modifications ultérieures à cette question affectera alors toutes les questions dérivées à moins qu’elles ne soient elles-mêmes personnalisées, ce qui rompt la connexion.

L’héritage prototype est à un seul niveau, donc cette question, lorsqu’elle est enregistrée en tant que prototype, perd sa connexion à son type de base d’origine, devenant ainsi un nouveau type de base à part entière.
Soyez averti que lors de l’exportation de questions dérivées, vous devez vous assurer que cette question est également incluse dans l’exportation, ou la question dérivée sera une
orpheline lorsqu’elle sera importée dans un autre système. De plus, vous êtes responsable de la conservation des questions que vous utilisez comme prototypes ; il est fortement recommandé de renommer la question en quelque chose comme « PROTOTYPE_pour_mon_nouveau_type_de_question » pour faciliter la maintenance ultérieure.';
$string['prototypeextra'] = 'Prototype supplémentaire';
$string['prototypeextra_help'] = 'Un champ de texte à usage général par les auteurs du type de question, comme supplément global, mais faisant partie de l’état du prototype. Disponible pour l’auteur du modèle en tant que {{ QUESTION.prototypeextra }}.';
$string['prototypeusage'] = 'Utilisation du prototype de question CodeRunner pour le cours {$a}';
$string['prototypeusageindex'] = 'Cours disponibles';
$string['qWrongBehaviour'] = 'Veuillez utiliser Adaptive Behavior pour toutes les questions CodeRunner, ou bien il pourrait y avoir des pics de performances massifs. Par exemple, toutes les questions d’une page devront être renotées lorsque la page sera réaffichée.';
$string['qtype_c_function'] = '<p>Un type de question pour les questions d’écriture de fonction en C.
La réponse de l’étudiant devrait être une fonction C complète, mais elle peut éventuellement
être précédé d’un autre code C autonome tel que des directives de préprocesseur et
fonctions d’assistance.</p>
<p>Le code de test pour de telles questions appelle généralement la fonction de l’étudiant avec
certains arguments de test et imprime le résultat, tel que <pre>printf("%d\\n", someIntFunction(blah1, blah2))</pre>
Le champ <i>Attendu</i> du cas de test est la sortie attendue du test.</p>
<p>
Si aucune entrée standard n’est fournie pour l’un des cas de test, un seul programme de test est construit, composé de :</p>
<ol>
<li>Les # standards suivants incluent : stdlib.h, ctype.h, string.h, stdbool.h, math.h</li>
<li>La réponse de l’étudiant.</li>
<li>Une séquence de blocs entourés d’accolades pour chacun des cas de test donnés.
Chaque bloc contient uniquement le code de test du cas de test. Il y a aussi une instruction <i>printf</i> ajoutée entre les blocs de code pour imprimer un séparateur spécial qui est utilisé
pour diviser la sortie en sorties de cas de test individuelles.</li>
</ol>
<p>Cependant, si l’un des cas de test a une entrée standard non vide, plusieurs tests
programmes sont exécutés, un pour chaque cas de test.
</p><p>Le champ <i>extra</i> du scénario de test est ignoré.</p>';
$string['qtype_c_program'] = '<p>Utilisé pour les questions d’écriture de programme en C, où il n’y a pas de code par cas de test, et les différents tests utilisant simplement différentes données d’entrée standard (stdin). On s’attend à ce que la réponse de l’étudiant soit un programme exécutable complet, exécuté tel quel, sans modification par CodeRunner, une fois pour chaque cas de test. Les valeurs du code de test et des champs supplémentaires de chaque cas de test sont ignorées.</p><p>Si vous devez définir une compilation ou un lien spécial d’arguments pour la question, vous pouvez la personnaliser (cliquez sur la case à cocher Personnaliser), ouvrez la section <i>Personnalisation avancée</i> et saisissez les valeurs dans le champ <i>Sandbox &gt; Paramètres</i>. Par exemple<pré>
{"linkargs":["-lm"]}</pre>pour établir un lien avec la bibliothèque mathématique.';
$string['qtype_cpp_function'] = '<p>Un type de question pour les questions d’écriture d’une fonction C++.
La réponse de l’étudiant devrait être une fonction C++ complète, mais elle peut éventuellement être précédé d’un autre code C++ autonome tel que des directives de préprocesseur et fonctions d’assistance.</p>
<p>Dans chaque cas de test, le code de test pour ces questions appelle généralement la fonction étudiant avec certains arguments de test et imprime le résultat, tel que <pre>cout << someIntFunction(blah1, blah2))</pre>
Le champ <i>Expected</i> du cas de test est la sortie attendue du test.
<p>
Si aucune entrée standard n’est fournie pour l’un des cas de test, un seul programme de test est construit, composé de :</p>
<ol>
<li>Les standards suivants #incluent : iostream, fstream, string, math, vector et algorithm</li>
<li><code>en utilisant l’espace de noms standard ;</code></li>
<li>La réponse de l’étudiant</li>
<li>Une séquence de blocs entourés d’accolades pour chacun des cas de test donnés.
Chaque bloc est constitué du champ <i>extra</i> du cas de test (généralement vide) suivi du code de test. Il y a aussi une  instruction <i>printf</i> ajoutée entre les blocs de code pour imprimer un séparateur spécial qui est utilisé pour diviser la sortie en sorties de cas de test individuelles.</li>
</ol>
<p>Cependant, si l’un des cas de test a une entrée standard non vide, plusieurs programmes tests sont exécutés, un pour chaque cas de test.
</p>';
$string['qtype_cpp_program'] = '<p>Utilisé pour les questions d’écriture de programme C++, où
il n’y a pas de code par cas de test, et les différents tests utilisent simplement différentes données d’entrée standard (stdin). On s’attend à ce que la réponse de l’étudiant soit un programme exécutable complet, qui est exécuté tel quel, sans modification par CodeRunner, une fois pour chaque cas de test. Les valeurs du code de test et des champs supplémentaires de chaque
cas de test sont ignorés.</p>';
$string['questioncheckboxes'] = 'Personnalisation';
$string['questionloaderror'] = 'Le chargement de la question a échoué';
$string['questionpreview'] = 'Prévisualisation de la question';
$string['questiontype'] = 'Type de question';
$string['questiontype_required'] = 'Vous devez choisir un type de question';
$string['questiontypedetails'] = 'Détails de la question';
$string['regexgrader'] = 'Expression régulière';
$string['replacedollarscount'] = 'La catégorie contient {$a} questions CodeRunner';
$string['reset'] = 'Réinitialiser la réponse';
$string['resethover'] = 'Annuler les modifications et réinitialiser la zone réponse';
$string['resultcolumnheader'] = 'Résultat';
$string['resultcolumns'] = 'Colonnes des résultats';
$string['sandboxparams'] = 'Paramètres';
$string['seethisquestioninthequestionbank'] = 'Voir cette question dans la banque de questions';
$string['showdifferences'] = 'Montrer les différences';
$string['stdin'] = 'Entrée standard';
$string['syntax_errors'] = 'Erreur(s) de syntaxe';
