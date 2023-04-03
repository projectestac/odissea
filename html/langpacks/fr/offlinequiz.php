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
 * Strings for component 'offlinequiz', language 'fr', version '3.11'.
 *
 * @package     offlinequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add'] = 'Ajouter';
$string['addarandomquestion'] = 'questions aléatoires';
$string['addarandomquestion_help'] = 'Moodle ajoute une sélection aléatoire de questions à choix multiple (ou questions à choix multiple tout ou rien) au groupe de test hors-ligne courant. Le nombre de questions ajouté peut être choisi. Les questions sont choisies dans la catégorie courante (et ses sous catégories si cette option est sélectionnée).';
$string['addarandomselectedquestion'] = 'Ajouter une question sélectionnée aléatoirement…';
$string['addlist'] = 'Ajouter une liste';
$string['addnewpagesafterselected'] = 'Ajouter de nouvelles pages après les questions sélectionnées';
$string['addnewquestion'] = 'une nouvelle question';
$string['addnewquestionsqbank'] = 'Ajouter des questions à la catégorie {$a->catname} : {$a->link}';
$string['addnewuseroverride'] = 'Ajouter une dérogation d\'utilisateur';
$string['addpagebreak'] = 'Ajouter un saut de page';
$string['addpagehere'] = 'Ajouter une page ici';
$string['addparts'] = 'Ajouter des participants';
$string['addquestionfrombankatend'] = 'Ajouter depuis la banque de questions, à la fin';
$string['addquestionfrombanktopage'] = 'Ajouter depuis la banque de questions à la page {$a}';
$string['addrandom'] = 'Ajouter {$a} question(s) à choix multiples aléatoires';
$string['addrandomfromcategory'] = 'questions aléatoires';
$string['addrandomquestion'] = 'questions aléatoires';
$string['addrandomquestiontoofflinequiz'] = 'Ajouter des questions au test hors-ligne {$a->name} (groupe {$a->group})';
$string['addrandomquestiontopage'] = 'Ajouter une question aléatoire à la page {$a}';
$string['addtoofflinequiz'] = 'Ajouter au test hors-ligne';
$string['addtoqueue'] = 'Ajouter à la file d\'attente';
$string['allinone'] = 'Illimité';
$string['alllists'] = 'Toutes les listes';
$string['allornothing'] = 'Tout-ou-rien';
$string['allresults'] = 'Afficher tous les résultats';
$string['allstudents'] = 'Afficher tous les étudiants';
$string['alwaysavailable'] = 'Toujours disponible';
$string['analysis'] = 'Analyse des éléments';
$string['answerform'] = 'Grille de réponses';
$string['answerformforgroup'] = 'Grille de réponses pour le groupe {$a}';
$string['answerforms'] = 'Grilles de réponses';
$string['answerpdfxy'] = 'Grille pour les réponses ({$a}->maxquestions questions / {$a}->maxanswers options)';
$string['areyousureremoveselected'] = 'Voulez-vous vraiment supprimer toutes les questions sélectionnées ?';
$string['attemptexists'] = 'Des tentatives existent';
$string['attemptsexist'] = 'Vous ne pouvez plus ajouter ou supprimer de question.';
$string['attemptsnum'] = 'Résultats : {$a}';
$string['attemptsonly'] = 'Afficher uniquement les étudiants ayant des résultats';
$string['attendances'] = 'Présences';
$string['basicideasofofflinequiz'] = 'Les concepts de base pour créer des tests hors-ligne';
$string['blackwhitethreshold'] = 'Seuil de Noir/Blanc.';
$string['bulksavegrades'] = 'Enregistrer les notes';
$string['calibratescanner'] = 'Calibrer le scanner';
$string['cannoteditafterattempts'] = 'Vous ne pouvez plus ajouter ou supprimer de question car il y a déjà des résultats complets. ({$a})';
$string['category'] = 'Catégorie';
$string['changed'] = 'Le résultat a été modifié.';
$string['changeevaluationmode'] = 'Changer la façon dont l\'évaluation est faite. Uniquement possible si autorisé par l\'administrateur.';
$string['checkparts'] = 'Marquer les participants sélectionnés présents';
$string['checkuserid'] = 'Vérifier groupe/numéro d\'identification';
$string['chooseagroup'] = 'Choisissez un groupe…';
$string['closebeforeopen'] = 'Impossible de modifier le test hors-ligne : vous avez indiqué une date de fermeture antérieure à la date d\'ouverture du test.';
$string['closestudentview'] = 'Fermer la vue étudiante';
$string['closewindow'] = 'Fermer la fenêtre';
$string['cmmissing'] = 'Le module de cours pour le test hors-ligne avec l\'identifiant {$a} est manquant';
$string['completiondetail:passgrade'] = 'Recevoir une note minimale de réussite';
$string['completionpass'] = 'Passer pour terminer';
$string['completionpass_help'] = 'Les étudiants ne terminent ce test hors-ligne que s’ils obtiennent une note supérieure ou égale à la note minimale de réussite fixée dans les options de note.';
$string['configblackwhitethreshold'] = 'Définit le seuil pour la conversion noir/blanc entre 1-99. Plus la valeur est élevée, plus le pixel importé doit être blanc pour être reconnu comme blanc. Toute autre valeur entraîne une absence totale de conversion noir/blanc.';
$string['configdecimalplaces'] = 'Le nombre de chiffres à afficher après la virgule lors de l\'affichage des notes du test hors-ligne.';
$string['configdisableimgnewlines'] = 'Cette option désactive les nouvelles lignes avant et après les images dans les feuilles de questions pdf. Attention : Cela pourrait entraîner des problèmes de formatage.';
$string['configexperimentalevaluation'] = 'Évaluation expérimentale des feuilles de réponses';
$string['configexperimentalevaluationdesc'] = 'NE PAS UTILISER EN PRODUCTION ! Cette option est utilisée pour les tests alpha du nouvel algorithme d\'évaluation. Si cette option est activée, vous pouvez l\'activer dans les options de l\'instance test hors-ligne. Nous déconseillons fortement d’utiliser cette option. Aucune assistance n\'est fournie pour des données perdues suite à l\'activation de cette option.';
$string['configintro'] = 'Les valeurs indiquées ici définissent les valeurs utilisées par défaut lors de la création d\'un test hors-ligne.';
$string['configkeepfilesfordays'] = 'Combien de jours les fichiers téléchargés sont conservés dans l\'espace temporaire de stockage. Durant ce temps les images scannées sont disponibles lors de la relecture du test hors-ligne.';
$string['configonlylocalcategories'] = 'Les catégories de questions partagées ne sont pas autorisées.';
$string['configpapergray'] = 'valeur-blanche du papier, qui est utilisée pour l\'évaluation des grilles de réponses';
$string['configshuffleanswers'] = 'Mélanger les réponses';
$string['configshufflequestions'] = 'Si cette option est activée, l\'ordre des questions des groupes de tests hors-ligne sera déterminé aléatoirement lors de chaque création de l\'aperçu dans l\'onglet \'Formulaires PDF\'.';
$string['configshufflewithin'] = 'Si vous activez cette option, alors les parties constituant une question seront mélangées aléatoirement lorsque la feuille de questions et les grilles de réponses sont créées.';
$string['configuseridentification'] = 'Une formule décrivant la manière d\'identifier les utilisateurs. Cette formule est utilisée pour attribuer les grilles de réponses aux utilisateurs dans le système. La partie droite doit désigner un champ de la table des utilisateurs de Moodle.';
$string['confirmremovequestion'] = 'Voulez-vous vraiment supprimer cette question {$a} ?';
$string['copy'] = 'Copier';
$string['copyright'] = '<strong>Attention : le contenu de cette page est uniquement destiné à votre information personnelle. Comme tout autre texte les questions sont soumises à des restrictions de copyright. Vous n\'êtes pas autorisé à les copier ou à les communiquer à d\'autres personnes !</strong>';
$string['copyselectedtogroup'] = 'Ajouter les questions sélectionnées au groupe : {$a}';
$string['copytogroup'] = 'Ajouter toutes les questions au groupe : {$a}';
$string['correct'] = 'correct';
$string['correcterror'] = 'corriger';
$string['correctforgroup'] = 'Réponses correctes pour le groupe {$a}';
$string['correctionform'] = 'Formulaire de correction';
$string['correctionforms'] = 'Formulaires de correction';
$string['correctionoptionsheading'] = 'Options de correction';
$string['correctupdated'] = 'Formulaire de correction mis à jour pour le groupe {$a}.';
$string['couldnotgrab'] = 'Saisie de l\'image {$a} impossible';
$string['couldnotregister'] = 'Enregistrement de l\'utilisateur {$a} impossible';
$string['createcategoryandaddrandomquestion'] = 'Créer la catégorie et ajouter une question aléatoire';
$string['createlistfirst'] = 'Ajouter des participants';
$string['createofflinequiz'] = 'Créer les formulaires';
$string['createpartpdferror'] = 'Le formulaire PDF pour la liste des participants {$a} n\'a pas pu être créé. La liste est peut-être vide.';
$string['createpdf'] = 'Formulaire';
$string['createpdferror'] = 'Le formulaire pour le groupe {$a} n\'a pas pu être créé. Il est possible qu\'il n\'y ait pas de question pour ce groupe.';
$string['createpdffirst'] = 'Créer la liste PDF d\'abord';
$string['createpdfforms'] = 'Créer les formulaires';
$string['createpdfs'] = 'Télécharger les formulaires';
$string['createpdfsparticipants'] = 'Formulaires PDF pour la liste des participants';
$string['createquestionandadd'] = 'Créer une nouvelle question et l\'ajouter au test hors-ligne.';
$string['createquiz'] = 'Créer les formulaires';
$string['csvfile'] = 'Fichier CSV';
$string['csvformat'] = 'Fichier texte avec valeurs séparées par des virgules (CSV)';
$string['csvplus1format'] = 'Fichier texte avec les données brutes (CSV)';
$string['csvpluspointsformat'] = 'Fichier texte avec des points (CSV)';
$string['darkgray'] = 'Gris sombre';
$string['datanotsaved'] = 'Impossible d\'enregistrer les réglages';
$string['decimalplaces'] = 'Décimales dans les notes';
$string['decimalplaces_help'] = 'Ce réglage vous permet de choisir le nombre de décimales à afficher dans les scores ou dans les notes. Ces réglages n\'agissent que sur l\'affichage des notes, et n\'altèrent pas les notes stockées dans la base de données, ni les calculs internes qui sont effectués avec précision.';
$string['deletelistcheck'] = 'Voulez-vous vraiment supprimer la liste sélectionnée et tous ses participants ?';
$string['deletepagecheck'] = 'Voulez-vous vraiment supprimer les pages sélectionnées ?';
$string['deletepagesafterselected'] = 'Supprimer les sauts de page après les questions sélectionnées';
$string['deletepartcheck'] = 'Voulez-vous vraiment supprimer les participants sélectionnés ?';
$string['deleteparticipantslist'] = 'Supprimer la liste des participants';
$string['deletepdfs'] = 'Supprimer les documents';
$string['deleteresultcheck'] = 'Voulez-vous vraiment supprimer les résultats sélectionnés ?';
$string['deleteselectedpart'] = 'Supprimer les participants sélectionnés';
$string['deleteselectedresults'] = 'Supprimer les résultats sélectionnés';
$string['deletethislist'] = 'Supprimer cette liste';
$string['deleteupdatepdf'] = 'Supprimer et mettre à jour les formulaires PDF';
$string['difficultytitle'] = 'Difficulté';
$string['difficultytitlea'] = 'Difficulté A';
$string['difficultytitleb'] = 'Difficulté B';
$string['difficultytitlediff'] = 'Différence';
$string['disableimgnewlines'] = 'Supprimer les nouvelles lignes avant et après les images';
$string['disableimgnewlines_help'] = 'Cette option supprime les nouvelles lignes avant et après les images dans la grille de réponses PDF. Attention : Ceci peut causer des problèmes de mise en forme';
$string['displayoptions'] = 'Options d\'affichage';
$string['done'] = 'fait';
$string['downloadallzip'] = 'Télécharger toutes les données sous forme ZIP';
$string['downloadpartpdf'] = 'Télécharger le fichier PDF pour la liste « {$a} »';
$string['downloadpdfs'] = 'Télécharger les documents';
$string['downloadresultsas'] = 'Télécharger les résultats comme :';
$string['dragtoafter'] = 'Après {$a}';
$string['dragtostart'] = 'Au début';
$string['editgroupquestions'] = 'Modifier les questions des groupes';
$string['editgroups'] = 'Modifier les groupes hors-ligne';
$string['editingofflinequiz'] = 'Modification des questions des groupes';
$string['editingofflinequiz_help'] = 'Lorsque vous créez un test hors ligne, les concepts principaux sont :
<ul><li> Le test hors ligne, qui contient les questions réparties sur une ou plusieurs pages</li>
<li> La banque de questions, qui stock des copies de toutes les questions organisées dans des catégories</li></ul>';
$string['editingofflinequizx'] = 'Modifier le test hors-ligne : {$a}';
$string['editlist'] = 'Modifier la liste';
$string['editlists'] = 'Modifier les listes';
$string['editmaxmark'] = 'Modifier la note maximale';
$string['editofflinequiz'] = 'Modifier le test hors-ligne';
$string['editofflinesettings'] = 'Modifier les réglages du test hors-ligne';
$string['editorder'] = 'Modifier l\'ordre';
$string['editparticipants'] = 'Modifier les participants';
$string['editquestion'] = 'Modifier question';
$string['editquestions'] = 'Modifier les questions';
$string['editscannedform'] = 'Modifier la grille scannée';
$string['editthislist'] = 'Modifier cette liste';
$string['emptygroups'] = 'Certains groupes du test hors-ligne sont vides. Veuillez ajouter des questions.';
$string['enroluser'] = 'Inscrire l\'utilisateur';
$string['erroraccessingreport'] = 'Vous n\'êtes pas autorisé à afficher ce rapport.';
$string['errorreport'] = 'Rapport des erreurs d\'importation';
$string['eventattemptdeleted'] = 'Suppression d\'une tentative de test hors-ligne';
$string['eventattemptpreviewstarted'] = 'Début de prévisualisation d\'une tentative de test hors-ligne';
$string['eventattemptreviewed'] = 'Vérification d\'une tentative de test hors-ligne';
$string['eventattemptsummaryviewed'] = 'Visualisation du résumé d\'une tentative de test hors-ligne';
$string['eventattemptviewed'] = 'Visualisation d\'une tentative de test hors-ligne';
$string['eventdocscreated'] = 'Création des formulaires de question et réponse de test hors-ligne';
$string['eventdocsdeleted'] = 'Suppression des formulaires de question et réponse de test hors-ligne';
$string['eventeditpageviewed'] = 'Visualisation de la page d\'édition de test hors-ligne';
$string['eventofflinequizattemptsubmitted'] = 'Soumission d\'une tentative de test hors-ligne';
$string['eventoverridecreated'] = 'Création d\'une dérogation de test hors-ligne';
$string['eventoverridedeleted'] = 'Suppression d\'une dérogation de test hors-ligne';
$string['eventoverrideupdated'] = 'Modification d\'une dérogation de test hors-ligne';
$string['eventparticipantmarked'] = 'Marquage manuel d\'un participant de test hors-ligne';
$string['eventquestionmanuallygraded'] = 'Question notée manuellement';
$string['eventreportviewed'] = 'Visualisation du rapport de test hors-ligne';
$string['eventresultsregraded'] = 'Re-notation des résultats de test hors-ligne';
$string['everythingon'] = 'activé';
$string['excelformat'] = 'Feuille de calcul Excel (XLSX)';
$string['experimentalevaluation'] = 'Évaluation expérimentale des feuilles de réponses';
$string['experimentalevaluation_help'] = 'Évaluation expérimentale des feuilles de réponses';
$string['fileformat'] = 'Format des feuilles de questions';
$string['fileformat_help'] = 'Choisissez si vous voulez vos feuilles de questions en format PDF, DOCX ou TEX. Les formulaires de réponse et les feuilles de correction seront toujours générés au format PDF.';
$string['fileprefixanswer'] = 'formulaire_reponses';
$string['fileprefixcorrection'] = 'formulaire_correction';
$string['fileprefixform'] = 'formulaire_questions';
$string['fileprefixparticipants'] = 'liste_participants';
$string['filesizetolarge'] = 'Certains de vos fichiers images sont très volumineux. Les dimensions seront réduites durant l\'interprétation. Essayez de scanner vos grilles avec une résolution entre 200 et 300 dpi et en mode noir et blanc. Cela accélèrera l\'interprétation dans le futur.';
$string['filterbytags'] = 'Filtrer par Mots clés …';
$string['fontsize'] = 'Corps de police';
$string['forautoanalysis'] = 'Pour analyse automatique';
$string['formforcorrection'] = 'Feuille des corrections pour le groupe {$a}';
$string['formforgroup'] = 'Feuille des questions pour le groupe {$a}';
$string['formforgroupdocx'] = 'Feuille des questions pour le groupe {$a} (DOCX)';
$string['formforgrouplatex'] = 'Formulaire question pour le groupe {$a} (LATEX)';
$string['formsexist'] = 'Des formulaires ont déjà été créés.';
$string['formsexistx'] = 'Des formulaires ont déjà été créés (<a href="{$a}">Téléchargez les formulaires</a>)';
$string['formsheetsettings'] = 'Réglage de formulaire';
$string['formspreview'] = 'Aperçu des formulaires';
$string['formwarning'] = 'Aucune grille de réponses n\'est définie. Veuillez contacter votre administrateur.';
$string['fromquestionbank'] = 'depuis la banque de questions';
$string['functiondisabledbysecuremode'] = 'Cette fonctionnalité est actuellement désactivée';
$string['generalfeedback'] = 'Feedback général';
$string['generalfeedback_help'] = 'Le feedback général d\'une question est le texte présenté à l\'étudiant après une tentative. Contrairement au feedback pour une question spécifique, qui dépend du type de question et de la réponse donnée, le même feedback général est toujours affiché.';
$string['generatepdfform'] = 'Générer les formulaires PDF';
$string['grade'] = 'Note';
$string['gradedon'] = 'Noté le';
$string['gradedscannedform'] = 'Formulaire scanné avec les notes';
$string['gradeiszero'] = 'Note : le nombre maximum de points pour ce test hors-ligne est 0 !';
$string['gradeswarning'] = 'Les notes de question doivent être numériques !';
$string['gradewarning'] = 'La note de la question doit être numérique !';
$string['gradingofflinequiz'] = 'Notes';
$string['gradingofflinequizx'] = 'Notes : {$a}';
$string['gradingoptionsheading'] = 'Options de notation';
$string['greeniscross'] = 'compté comme une croix';
$string['group'] = 'Groupe';
$string['groupoutofrange'] = 'Le groupe était hors limite et a été remplacé par le groupe A.';
$string['groupquestions'] = 'Questions des groupes';
$string['hasresult'] = 'Un résultat existe';
$string['hotspotdeletiontask'] = 'Suppression des zones sensibles';
$string['html'] = 'HTML';
$string['idnumber'] = 'Numéro d\'identification';
$string['imagefile'] = 'Fichier image';
$string['imagenotfound'] = 'Fichier image : {$a} non trouvé !';
$string['imagenotjpg'] = 'Image non jpg ou png : {$a}';
$string['imagickwarning'] = 'Imagemagick manquant : demandez à votre administrateur système d\'installer la librairie imagemagick et de vérifier le chemin vers le fichier binaire convert dans les réglages du filtre TeX. Vous ne pouvez pas importer de fichier TIF sans imagemagick !';
$string['import'] = 'Importer';
$string['importedon'] = 'Importé le';
$string['importerror11'] = 'Un autre résultat existe';
$string['importerror12'] = 'Utilisateur non inscrit';
$string['importerror13'] = 'Pas de donnée de groupe';
$string['importerror14'] = 'Lecture impossible';
$string['importerror15'] = 'Lecture non fiable';
$string['importerror16'] = 'Erreur de page';
$string['importerror17'] = 'Pages incomplètes';
$string['importerror21'] = 'Lecture impossible';
$string['importerror22'] = 'Lectures non fiables';
$string['importerror23'] = 'Utilisateur absent de la liste';
$string['importerror24'] = 'Liste non détectée';
$string['importforms'] = 'Importer des grilles de réponses';
$string['importfromto'] = 'Import de {$a->from} à {$a->to} sur {$a->total}.';
$string['importisfinished'] = 'L\'import pour le test hors-ligne {$a} est terminé.';
$string['importlinkresults'] = 'Lien vers les résultats : {$a}';
$string['importlinkverify'] = 'Lien vers la vérification : {$a}';
$string['importmailsubject'] = 'Notification d\'import de quiz hors-ligne';
$string['importnew'] = 'Importer';
$string['importnew_help'] = '<p>
Vous pouvez importer un fichier image scanné ou un ensemble de fichiers images scannés groupés au sein d\'une archive ZIP. Le module test hors-ligne traitera les fichiers images en tâche de fond.
Les noms de fichiers ne sont pas importants mais ne devraient pas contenir de caractères spéciaux. Les images devraient être au format GIF, PNG ou TIF.
Une résolution entre 200 et 300 dpi est recommandée.</p>';
$string['importnumberexisting'] = 'Nombre de grilles en double : {$a}';
$string['importnumberpages'] = 'Nombre de pages importées avec succès : {$a}';
$string['importnumberresults'] = 'Nombre importé : {$a}';
$string['importnumberverify'] = 'Nombre de grilles qui nécessitent une vérification : {$a}';
$string['importtimefinish'] = 'Processus terminé : {$a}';
$string['importtimestart'] = 'Processus démarré : {$a}';
$string['inconsistentdata'] = 'Données inconsistantes : {$a}';
$string['info'] = 'Informations';
$string['infoshort'] = 'i';
$string['insecuremarkings'] = 'Des lectures non fiables nécessitent des corrections manuelles';
$string['insecuremarkingsforquestion'] = 'Des lectures non fiables nécessitent une correction manuelle pour la question';
$string['insertnumber'] = 'SVP insérez le numéro didentification correct indiqué par le cadre bleu.';
$string['instruction1'] = 'Cette grille de réponses sera scannée automatiquement. Veuillez ne pas plier ou tâcher. Utilisez un stylo noir ou bleu pour remplir les champs :';
$string['instruction2'] = 'Seules les cases cochées clairement sont interprétées correctement ! Pour corriger une case cochée, remplissez complètement la case de couleur : elle sera interprétée comme non cochée :';
$string['instruction3'] = 'Les cases ainsi corrigées ne peuvent pas être marquées à nouveau. Veuillez ne rien inscrire en dehors des cases.';
$string['introduction'] = 'Introduction';
$string['invalidformula'] = 'Formule non valide pour l\'identification d\'utilisateur. La formule doit être sous la forme <prefix>[<#digits>]<suffix>=<db-field&>.';
$string['invalidnumberofdigits'] = 'Nombre de chiffres utilisé incorrect. Seulement 1 à 9 chiffre(s) sont autorisés.';
$string['invaliduserfield'] = 'Champ de la table utilisateur invalide.';
$string['invigilator'] = 'Surveillant(e)';
$string['ischecked'] = 'Présence cochée';
$string['isnotchecked'] = 'Présence non cochée';
$string['itemdata'] = 'données de l\'élément';
$string['keepfilesfordays'] = 'Conserver les fichiers (jours)';
$string['letter'] = 'Lettre';
$string['lightgray'] = 'Gris clair';
$string['linktoscannedform'] = 'Voir la grille de réponses scannée';
$string['listnotdetected'] = 'Détection du code barre pour la liste impossible !';
$string['logdeleted'] = 'Entrée de l\'historique {$a} supprimée.';
$string['logourl'] = 'URL du logo';
$string['logourldesc'] = 'URL d\'un fichier image qui sera affiché dans le coin en haut à droite des grilles de réponses, par ex. <b>http://www.monserveur.fr/images/logo.png</b> ou <b>../pfad/logo.png</b>. La taille maximum autorisée est 520x140 pixels. L\'évaluation des grilles de réponses est impossible si l\'image est plus grande !';
$string['lowertrigger'] = 'Seconde borne inférieure';
$string['lowertriggerzero'] = 'La seconde borne inférieure est nulle';
$string['lowerwarning'] = 'Première borne inférieure';
$string['lowerwarningzero'] = 'La première borne inférieure est nulle';
$string['marginwarning'] = 'Veuillez imprimer les fichiers PDF suivants sans marges additionnelles !<br /> Évitez de distribuer des photocopies aux élèves.';
$string['marks'] = 'Points';
$string['matrikel'] = 'numéro étudiant';
$string['maxgradewarning'] = 'La note maximum doit être un nombre !';
$string['maxmark'] = 'Note maximale';
$string['membersinplist'] = '{$a->count} participants dans <a href="{$a->url}">{$a->name}</a>';
$string['missingimagefile'] = 'Fichier image manquant';
$string['missingitemdata'] = 'Réponse(s) manquante(s) pour l\'utilisateur {$a}';
$string['missinglogdata'] = 'Historique manquant pour un résultat existant.';
$string['missingquestion'] = 'La question n\'existe plus.';
$string['missinguserid'] = 'Numéro d\'identification de l\'utilisateur manquant ! Lecture du code barre impossible !';
$string['modulename'] = 'Test hors-ligne';
$string['modulename_help'] = 'Ce module permet à l\'enseignant de concevoir les tests hors-lignes constitués de questions à choix multiples.
Les questions sont sauvegardées dans la banque de questions de Moodle et peuvent  être réutilisées dans le cours et même dans d\'autres cours.
Les tests hors-lignes peuvent-être téléchargés au format PDF. Les étudiants cochent leurs réponses sur une grille. Les grilles sont scannées et les réponses importées dans le système.';
$string['modulenameplural'] = 'Tests hors-ligne';
$string['moodleprocessing'] = 'Laisser Moodle traiter les données';
$string['movecorners'] = 'Changez la position des marques de coins en premier. Utilisez le glisser-déplacer.';
$string['moveselectedonpage'] = 'Déplacer les questions sélectionnées sur la page : {$a}';
$string['multianswersforsingle'] = 'Plusieurs réponses pour une question à réponse unique';
$string['multichoice'] = 'Choix multiples';
$string['multipleanswers'] = 'Choisissez au moins une réponse.';
$string['name'] = 'Nom du test hors-ligne';
$string['neededcorrection'] = '<strong>Attention : certaines de vos marques ont nécessité une correction manuelle. Examinez les carrés rouges sur l\'image suivante.
<br />Ce défaut a nécessité l\'intervention manuelle d\'un enseignant et retardé la publication des résultats du test ! Essayez d\'éviter cela la prochaine fois !</strong>';
$string['newgrade'] = 'Noté';
$string['newpage'] = 'Nouvelle page';
$string['noattemptexists'] = 'Aucun résultat';
$string['noattempts'] = 'Aucun résultat importé !';
$string['noattemptsonly'] = 'Afficher uniquement les étudiants sans résultat';
$string['nocourse'] = 'Le cours avec l\'identifiant {$a->course} auquel le test hors-ligne avec l\'identifiant {$a->offlinequiz} appartient est manquant.';
$string['nogradesseelater'] = 'Ce test hors-ligne n\'a pas encore été évalué pour {$a}. Les résultats seront publiés ici.';
$string['nogroupdata'] = 'Pas de donnée de groupe pour l\'utilisateur {$a}';
$string['nomcquestions'] = 'Il n\'y a aucune question à choix multiple dans le groupe {$a} !';
$string['noofflinequiz'] = 'Il n\'y a pas de test hors-ligne avec l\'identifiant {$a} !';
$string['nopages'] = 'Aucune page importée';
$string['noparticipantsfound'] = 'Aucun participant trouvé';
$string['nopdfscreated'] = 'Aucun document créé !';
$string['noquestions'] = 'Certains groupes de tests hors-ligne sont vides. Veuillez ajouter des questions.';
$string['noquestionselected'] = 'Aucune question sélectionnée !';
$string['noquestionsfound'] = 'Il n\'y a aucune question pour le groupe {$a} !';
$string['noquestionsonpage'] = 'Page vide';
$string['noresults'] = 'Aucun résultat.';
$string['noreview'] = 'Vous n\'êtes par autorisé à relire ce test hors-ligne';
$string['noscannedpage'] = 'Il n\'y a pas de page avec l\'identifiant {$a} !';
$string['notagselected'] = 'Aucune balise sélectionnée';
$string['nothingtodo'] = 'Rien à faire !';
$string['notxtfile'] = 'Aucun fichier TXT';
$string['notyetgraded'] = 'Pas encore noté';
$string['nozipfile'] = 'Pas de fichier ZIP';
$string['numattempts'] = 'Nombre de résultats importés : {$a}';
$string['numattemptsqueue'] = '{$a} grilles de réponse ajoutés à la file d\'attente. Vous recevrez un courriel lorsque le traitement sera terminé.';
$string['numattemptsverify'] = 'Grilles scannées en attente de correction : {$a}';
$string['numberformat'] = 'La valeur doit être un nombre avec {$a} chiffres !';
$string['numbergroups'] = 'Nombre de groupes';
$string['numpages'] = '{$a} pages importées';
$string['numquestionsx'] = 'Questions : {$a}';
$string['numusersadded'] = '{$a} participants ajoutés';
$string['odsformat'] = 'Feuille de calcul OpenDocument (ODS)';
$string['offlineimplementationfor'] = 'Implémentation hors-ligne pour';
$string['offlinequiz:addinstance'] = 'Ajouter un test hors-ligne';
$string['offlinequiz:attempt'] = '';
$string['offlinequiz:changeevaluationmode'] = 'Permettre de changer le mode d\'évaluation. ATTENTION : NE PAS UTILISER DANS LES SYSTÈMES DE PRODUCTION !';
$string['offlinequiz:createofflinequiz'] = 'Créer les formulaires du test hors-ligne';
$string['offlinequiz:deleteattempts'] = 'Supprimer les résultats du test hors-ligne';
$string['offlinequiz:grade'] = 'Noter le test hors-ligne manuellement';
$string['offlinequiz:manage'] = 'Gérer les tests hors-ligne';
$string['offlinequiz:preview'] = 'Aperçu des tests hors-ligne';
$string['offlinequiz:view'] = 'Afficher les informations du test hors-ligne';
$string['offlinequiz:viewreports'] = 'Afficher les rapports de test hors-ligne';
$string['offlinequizcloses'] = 'Ce test hors-ligne est fermé';
$string['offlinequizcloseson'] = 'La relecture pour ce test hors-ligne fermera le {$a}';
$string['offlinequizisclosed'] = 'Ce test hors-ligne est fermé';
$string['offlinequizisclosedwillopen'] = 'Test hors-ligne fermé (ouverture {$a})';
$string['offlinequizisopen'] = 'Ce test hors-ligne est ouvert';
$string['offlinequizisopenwillclose'] = 'Test hors-ligne ouvert (fermera le {$a})';
$string['offlinequizopenedon'] = 'Ce test est ouvert depuis {$a}';
$string['offlinequizopens'] = 'Le test est disponible';
$string['offlinequizsettings'] = 'Réglages hors-ligne';
$string['offlinequizwillopen'] = 'Le test hors-ligne ouvre le {$a}';
$string['oneclickenrol'] = 'Inscription en un clic';
$string['oneclickenroldesc'] = 'Si cette option est activée, les enseignants ont la possibilité d\'inscrire les utilisateurs en un clic pendant la correction des grilles de réponses (erreur "User not in course").';
$string['oneclickrole'] = 'Rôle pour les inscriptions en un clic.';
$string['oneclickroledesc'] = 'Choisir le rôle pour les inscriptions en un clic. Seuls les rôles avec le modèle "Étudiant" peuvent être sélectionnés.';
$string['onlylocalcategories'] = 'Uniquement des catégories de questions locales au cours';
$string['orderandpaging'] = 'Ordre et pagination';
$string['orderandpaging_help'] = 'Les nombres 10, 20, 30... en face de chaque question indiquent l\'ordre des questions. Les nombres augmentent par pas de 10 pour laisser de la place à l\'insertion éventuelle de questions supplémentaires. Pour réarranger les questions, modifiez les nombres, puis cliquez sur le bouton « Arranger les questions ».

Pour ajouter des sauts de page après certaines questions, cochez la case en face de ces questions, puis cliquez sur le bouton « Ajouter de nouvelles pages après les questions sélectionnées ».

Pour organiser les questions sur plusieurs pages, cliquez sur le bouton « Repagination » et indiquez le nombre de questions désirées par page.';
$string['orderingofflinequiz'] = 'Ordre et pagination';
$string['otherresultexists'] = 'Un résultat différent pour {$a} existe déjà, import ignoré ! Supprimez le résultat existant d\'abord.';
$string['outof'] = '{$a->grade} sur {$a->maxgrade}';
$string['outofshort'] = '{$a->grade}/{$a->maxgrade}';
$string['overallfeedback'] = 'Feedback global';
$string['overview'] = 'Notes';
$string['overviewdownload_help'] = 'Télécharger les notes';
$string['page-mod-offlinequiz-edit'] = 'Modifier la page du test hors-ligne';
$string['page-mod-offlinequiz-x'] = 'Ajouter une page au test hors-ligne';
$string['pagecorrected'] = 'Feuille de la liste des participants corrigée importée';
$string['pageevaluationtask'] = 'Évaluation de la grille de réponse pour le plugin test hors ligne';
$string['pageimported'] = 'Feuille de la liste des participants importée';
$string['pagenotdetected'] = 'Impossible de détecter le code barre pour la page !';
$string['pagenumberimported'] = 'Feuille {$a} de la liste des participants importée';
$string['pagenumberupdate'] = 'Modifier le numéro de la page';
$string['pagesizeparts'] = 'Participants affichés par page :';
$string['papergray'] = 'Niveau de blanc du papier';
$string['papergray_help'] = 'Si les parties blanches de vos grilles de réponses sont très sombres, vous pouvez corriger cela en choisissant Gris sombre.';
$string['partcheckedwithoutresult'] = '<a href="{$a->url}">{$a->count} participants cochés sans résultat</a>';
$string['partcheckedwithresult'] = '{$a} participants cochés avec un résultat';
$string['partial'] = 'partiel';
$string['participants'] = 'Participants';
$string['participants_help'] = '<p>Les listes de participants sont destinées aux tests hors-ligne avec un nombre important de participants. Elles aident l\'enseignant à vérifier quels étudiants ont effectivement participé au test hors-ligne et si tous les résultats ont été importés correctement.
Vous pouvez ajouter des utilisateurs aux différentes listes. Chaque liste peut par exemple contenir les participants regroupés dans une salle. Les participants peuvent être membres d\'un groupe spécial. Un outil d\'inscription peut être utilisé pour créer ces groupes.
Des listes de participants peuvent être téléchargées sous forme de documents PDF, imprimées et cochées exactement comme les grilles de réponse des tests hors-ligne. Plus tard elles peuvent être importées et les étudiants marqués seront considérés comme présents au test hors-ligne.
Veuillez éviter toute marque ou tâche sur les codes barres car ils sont utilisés pour identifier chaque participant.</p>';
$string['participantsinlists'] = 'Participants dans les listes';
$string['participantslist'] = 'Liste des participants';
$string['participantslists'] = 'Participants';
$string['partimportnew'] = 'Télécharger les listes de participants';
$string['partimportnew_help'] = '<p>
Sur cet onglet vous pouvez déposer les listes remplies des participants. Vous pouvez importer un fichier image scanné ou un ensemble de fichiers images scannés groupés au sein d\'une archive ZIP. Le module test hors-ligne traitera les fichiers images en tâche de fond.
Les noms de fichiers ne sont pas importants mais ne devraient pas contenir de caractères spéciaux. Les images devraient être au format GIF, PNG ou TIF.
Une résolution entre 200 et 300 dpi est recommandée.</p>';
$string['partuncheckedwithoutresult'] = '{$a} participants non cochés sans résultat';
$string['partuncheckedwithresult'] = '<a href="{$a->url}">{$a->count} participants non cochés avec un résultat</a>';
$string['pdfdeletedforgroup'] = 'Formulaire pour le groupe {$a} supprimé';
$string['pdfintro'] = 'Informations additionnelles';
$string['pdfintro_help'] = 'Ces informations seront imprimées sur la première page de la feuille de questions et doivent contenir des informations générales sur la manière de remplir la grille des réponses.';
$string['pdfintrotext'] = '<b>Important :</b><br />Reportez vos réponses sur la grille de réponses ! Elle sera scannée automatiquement. Attention de ne pas la plier ni la tacher. Utilisez un stylo noir ou bleu pour remplir les champs. Pour corriger une case cochée, remplissez complètement la case de couleur : elle sera interprétée comme non cochée.<br />';
$string['pdfintrotoolarge'] = 'L\'introduction est trop longue (max. 2000 caractères).';
$string['pdfscreated'] = 'Les formulaires PDF ont été créés';
$string['pdfsdeletedforgroup'] = 'Formulaires pour le groupe {$a} supprimés';
$string['pearlywhite'] = 'Blanc perle';
$string['pluginadministration'] = 'Administration test hors-ligne';
$string['pluginname'] = 'Test hors-ligne';
$string['point'] = 'point';
$string['present'] = 'présent';
$string['preventsamequestion'] = 'Éviter l\'utilisation de la même question dans les groupes différents';
$string['preview'] = 'Prévisualiser';
$string['previewforgroup'] = 'Prévisualisation pour le groupe {$a}';
$string['previewquestion'] = 'Prévisualiser la question';
$string['printstudycodefield'] = 'Imprimer le champ code d\'étude sur la grille question';
$string['printstudycodefield_help'] = 'Si coché, le champ code d\'étude sera imprimé sur la première page de la grille question';
$string['privacy:data_folder_name'] = 'Données Offlinequiz';
$string['privacy:metadata:core_files'] = 'Test hors-ligne utilise l\'API fichier pour stocker les feuilles de questions, les feuilles de réponses et les feuilles de correction générées, ainsi que les feuilles de réponses remplies.';
$string['privacy:metadata:core_question'] = 'Offlinequiz utilise l\'API de question pour enregistrer les questions des tests';
$string['privacy:metadata:mod_quiz'] = 'Offlinequiz utilise l\'API de quiz pour enregistrer les résultats des tests.';
$string['privacy:metadata:offlinequiz'] = 'La table test hors-ligne enregistre toutes les informations spécifiques à une instance Test hors-ligne.';
$string['privacy:metadata:offlinequiz:course'] = 'La colonne « course » de la table offlinequiz enregistre le cours dans lequel ce offlinequiz est stocké.';
$string['privacy:metadata:offlinequiz:decimalpoints'] = 'Le nombre de points décimaux pour calculer les notes.';
$string['privacy:metadata:offlinequiz:disableimgnewlines'] = 'Devrait désactiver les nouvelles lignes avant et après les images.';
$string['privacy:metadata:offlinequiz:docscreated'] = 'Si les documents ont été créés, ce champ est défini à 1 sinon à 0.';
$string['privacy:metadata:offlinequiz:fileformat'] = 'Le format de fichier utilisé pour imprimer les feuilles de questions, 0 pour pdf, 1 pour docx, 2 pour LaTeX.';
$string['privacy:metadata:offlinequiz:fontsize'] = 'La taille de la police dans les feuilles de questions.';
$string['privacy:metadata:offlinequiz:grade'] = 'La note indique le nombre maximal de points à obtenir pour ce test hors-ligne.';
$string['privacy:metadata:offlinequiz:id_digits'] = 'Sauvegarde le nombre de chiffres que le numéro d\'identification avait lorsque les feuilles de réponses ont été créées. Ceci est nécessaire pour la compatibilité en amont si le nombre de chiffres est augmenté entre la création et l\'importation des feuilles de réponses.';
$string['privacy:metadata:offlinequiz:introformat'] = 'Ce champ n\'est pas utilisé.';
$string['privacy:metadata:offlinequiz:name'] = 'La colonne « name » enregistre le nom du offlinequiz.';
$string['privacy:metadata:offlinequiz:numgroups'] = 'Le nombre de groupes distincts de ce Test hors-ligne.';
$string['privacy:metadata:offlinequiz:papergray'] = 'Niveau de blanc du papier.';
$string['privacy:metadata:offlinequiz:pdfintro'] = 'Les informations supplémentaires qui sont insérées dans les feuilles de questions au début.';
$string['privacy:metadata:offlinequiz:printstudycodefield'] = 'Paramètre indiquant si le code de l\'étude doit être imprimé sur le formulaire de la question : 1 pour vrai, 0 sinon.';
$string['privacy:metadata:offlinequiz:review'] = 'Cette colonne enregistre des informations sur la manière dont la révision est effectuée.';
$string['privacy:metadata:offlinequiz:showgrades'] = 'Enregistre si le nombre de points à obtenir pour la question doit être imprimé sur la feuille de questions.';
$string['privacy:metadata:offlinequiz:showquestioninfo'] = 'Enregistre si des informations sur les questions doivent être affichées : 0 pour non, 1 pour des informations sur le type de question, 2 pour des informations sur le nombre de bonnes réponses.';
$string['privacy:metadata:offlinequiz:showtutorial'] = 'Enregistre s\'il faut proposer aux participants de suivre un didacticiel sur les Tests hors-ligne.';
$string['privacy:metadata:offlinequiz:shufflequestions'] = 'Paramètre indiquant si les questions doivent être mélangées lors de la création d\'un test : 1 pour mélanger, 0 sinon.';
$string['privacy:metadata:offlinequiz:time'] = 'La colonne temps enregistre la date du test hors-ligne.';
$string['privacy:metadata:offlinequiz:timeclose'] = 'La colonne « timeclose » enregistre la date à laquelle le test hors-ligne a été/sera fermé.';
$string['privacy:metadata:offlinequiz:timecreated'] = 'La colonne « timecreated » enregistre la date à laquelle le test hors-ligne a été créé.';
$string['privacy:metadata:offlinequiz:timemodified'] = 'La colonne « timemodified » enregistre la dernière date à laquelle le test hors-ligne a été modifié.';
$string['privacy:metadata:offlinequiz:timeopen'] = 'La colonne « timeopen » enregistre la date à laquelle le test hors-ligne a été/sera ouvert.';
$string['privacy:metadata:offlinequiz_choices'] = 'Cette table contient les informations de toutes les croix pour toutes les pages numérisées. Les informations sont nécessaires pour créer ultérieurement des résultats basés sur les croix.';
$string['privacy:metadata:offlinequiz_choices:choicenumber'] = 'Le numéro du choix pour cette question.';
$string['privacy:metadata:offlinequiz_choices:scannedpageid'] = 'La page scannée à laquelle le choix se rapporte.';
$string['privacy:metadata:offlinequiz_choices:slotnumber'] = 'La place de la question de ce choix.';
$string['privacy:metadata:offlinequiz_choices:value'] = 'Est-ce que le choix est considéré comme coché ? 0 pour non, 1 pour oui, -1 pour incertain.';
$string['privacy:metadata:offlinequiz_group_questions'] = 'Cette table enregistre toutes les questions pour chaque groupe du test hors-ligne.';
$string['privacy:metadata:offlinequiz_group_questions:maxmark'] = 'Le nombre maximum de points pouvant être atteint pour cette question.';
$string['privacy:metadata:offlinequiz_group_questions:offlinegroupid'] = 'Le groupe Test hors-ligne auquel cette question de groupe se rapporte.';
$string['privacy:metadata:offlinequiz_group_questions:offlinequizid'] = 'L\'identifiant du Test hors-ligne auquel cette question de groupe se rapporte.';
$string['privacy:metadata:offlinequiz_group_questions:page'] = 'La page sur laquelle cette question est affichée dans les feuilles de réponses.';
$string['privacy:metadata:offlinequiz_group_questions:position'] = 'La position dans ce Test hors-ligne.';
$string['privacy:metadata:offlinequiz_group_questions:questionid'] = 'L\'identifiant de la question sélectionnée.';
$string['privacy:metadata:offlinequiz_group_questions:slot'] = 'La place de la question dans le test.';
$string['privacy:metadata:offlinequiz_groups'] = 'Tableau des groupes dans lesquels les tests hors-ligne se déroulent.';
$string['privacy:metadata:offlinequiz_groups:answerfilename'] = 'Le nom de fichier qui a été utilisé pour sauvegarder le fichier de réponse.';
$string['privacy:metadata:offlinequiz_groups:correctionfilename'] = 'Le nom de fichier qui a été utilisé pour sauvegarder le fichier de réponse.';
$string['privacy:metadata:offlinequiz_groups:number'] = 'Le numéro du groupe pour ce Test hors-ligne : 1 pour le groupe A, 2 pour le groupe B, etc.';
$string['privacy:metadata:offlinequiz_groups:numberofpages'] = 'Le nombre de pages nécessaire pour imprimer les feuilles de réponses.';
$string['privacy:metadata:offlinequiz_groups:offlinequizid'] = 'L\'identifiant du offlinequiz auquel appartient ce offlinequiz .';
$string['privacy:metadata:offlinequiz_groups:questionfilename'] = 'Le nom de fichier qui a été utilisé pour sauvegarder le fichier des questions.';
$string['privacy:metadata:offlinequiz_groups:sumgrades'] = 'La somme de toutes les notes pour toutes les questions de ce groupe.';
$string['privacy:metadata:offlinequiz_groups:templateusageid'] = 'L\'identifiant du « templateusage » qui est utilisé pour créer un résultat dans l\'API du test.';
$string['privacy:metadata:offlinequiz_hotspots'] = 'Ce tableau enregistre toutes les positions des cases et si elles sont évaluées avec succès.';
$string['privacy:metadata:offlinequiz_hotspots:blank'] = 'Si le test Hotspot est analysé avec succès.';
$string['privacy:metadata:offlinequiz_hotspots:name'] = 'Type du test hotspot, par exemple u%number pour l\'utilisateur du test hotspot, a-0-0 pour la question 1 réponse 1, etc.';
$string['privacy:metadata:offlinequiz_hotspots:scannedpageid'] = 'Page numérisée sur laquelle se trouve la zone sensible.';
$string['privacy:metadata:offlinequiz_hotspots:time'] = 'Heure de la dernière mise à jour du test hotspot.';
$string['privacy:metadata:offlinequiz_hotspots:x'] = 'La valeur x du test hotspot.';
$string['privacy:metadata:offlinequiz_hotspots:y'] = 'La valeur y du test hotspot.';
$string['privacy:metadata:offlinequiz_p_choices'] = 'Ce tableau permet de sauvegarder toutes les croix des listes de participants.';
$string['privacy:metadata:offlinequiz_p_choices:scannedpageid'] = 'La page numérisée sur laquelle porte ce choix.';
$string['privacy:metadata:offlinequiz_p_choices:userid'] = 'L\'identifiant de l\'utilisateur auquel ce choix se rapporte.';
$string['privacy:metadata:offlinequiz_p_choices:value'] = 'Si la croix est remplie ou non (0 pour non rempli, 1 pour rempli, -1 pour insécurisé).';
$string['privacy:metadata:offlinequiz_p_lists'] = 'Ce tableau enregistre les informations sur les listes de participants où les enseignants peuvent barrer, si un élève était présent ou non.';
$string['privacy:metadata:offlinequiz_p_lists:filename'] = 'Le nom du fichier pour la liste.';
$string['privacy:metadata:offlinequiz_p_lists:name'] = 'Le nom de la liste des participants.';
$string['privacy:metadata:offlinequiz_p_lists:number'] = 'Le nombre de liste dasn ce test hors-ligne.';
$string['privacy:metadata:offlinequiz_p_lists:offlinequizid'] = 'Le test hors-ligne auquel cette liste appartient.';
$string['privacy:metadata:offlinequiz_page_corners'] = 'Ce tableau enregistre tous les coins pour chaque page numérisée afin de l\'évaluer plus rapidement pour la prochaine évaluation ou correction.';
$string['privacy:metadata:offlinequiz_page_corners:position'] = 'Information indiquant si ce coin est en haut ou en bas et à droite ou à gauche.';
$string['privacy:metadata:offlinequiz_page_corners:scannedpageid'] = 'La page numérisée sur laquelle se trouve ce coin.';
$string['privacy:metadata:offlinequiz_page_corners:x'] = 'La valeur x du coin.';
$string['privacy:metadata:offlinequiz_page_corners:y'] = 'La valeur y du coin.';
$string['privacy:metadata:offlinequiz_participants'] = 'La table des participants enregistre si l\'utilisateur a participé ou non au test hors-ligne.';
$string['privacy:metadata:offlinequiz_participants:checked'] = 'Information indiquant si cet utilisateur a été coché sur la liste des participants';
$string['privacy:metadata:offlinequiz_participants:listid'] = 'L\'identifiant de la liste sur laquelle se trouve ce participant.';
$string['privacy:metadata:offlinequiz_participants:userid'] = 'L\'identifiant de l\'utilisateur.';
$string['privacy:metadata:offlinequiz_queue'] = 'Cette table enregistre la file d\'attente d\'un dépôt. Pour chaque dépôt, il y a un objet propre dans cette table.';
$string['privacy:metadata:offlinequiz_queue:importuserid'] = 'L\'identifiant de l\'enseignant qui a importé les fichiers.';
$string['privacy:metadata:offlinequiz_queue:offlinequizid'] = 'L\'identifiant de la file d\'attente du test hors-ligne.';
$string['privacy:metadata:offlinequiz_queue:status'] = 'Le statut de la file d\'attente qui est nécessaire.';
$string['privacy:metadata:offlinequiz_queue:timecreated'] = 'L\'heure à laquelle les feuilles de ce test hors-ligne ont été importées.';
$string['privacy:metadata:offlinequiz_queue:timefinish'] = 'L\'heure à laquelle l\'évaluation de la file d\'attente a été terminée.';
$string['privacy:metadata:offlinequiz_queue:timestart'] = 'L\'heure à laquelle l\'évaluation de la file d\'attente a été lancée.';
$string['privacy:metadata:offlinequiz_queue_data'] = 'Cette table enregistre les données de la file d\'attente car chaque fichier de la file d\'attente recevra un objet de données de file d\'attente.';
$string['privacy:metadata:offlinequiz_queue_data:error'] = 'Si l\'état est une erreur, un message d\'erreur plus détaillé apparaît ici.';
$string['privacy:metadata:offlinequiz_queue_data:filename'] = 'Le nom du fichier auquel cette file d\'attente se rapporte.';
$string['privacy:metadata:offlinequiz_queue_data:queueid'] = 'La file d\'attente à laquelle les données appartiennent.';
$string['privacy:metadata:offlinequiz_queue_data:status'] = 'L\'état des données de la file d\'attente.';
$string['privacy:metadata:offlinequiz_results'] = 'Ce tableau enregistre toutes les données de résultat, qui ne sont pas stockables dans l\'API du test.';
$string['privacy:metadata:offlinequiz_results:offlinegroupid'] = 'Le groupe du test hors-ligne auquel ce résultat appartient.';
$string['privacy:metadata:offlinequiz_results:offlinequizid'] = 'Le test hors-ligne auquel ce résultat appartient.';
$string['privacy:metadata:offlinequiz_results:status'] = 'Le statut du résultat (incomplet ou complet).';
$string['privacy:metadata:offlinequiz_results:sumgrades'] = 'La somme de toutes les notes pour ce résultat.';
$string['privacy:metadata:offlinequiz_results:teacherid'] = 'L\'enseignant qui a déposé le résultat.';
$string['privacy:metadata:offlinequiz_results:timefinish'] = 'L\'heure de fin à laquelle le résultat a été inséré pour la première fois.';
$string['privacy:metadata:offlinequiz_results:timemodified'] = 'La date de modification du résultat.';
$string['privacy:metadata:offlinequiz_results:timestart'] = 'L\'heure de début à laquelle le résultat a été inséré pour la première fois.';
$string['privacy:metadata:offlinequiz_results:usageid'] = 'L’identifiant d’utilisation du modèle de l’API de test où ce résultat est enregistré.';
$string['privacy:metadata:offlinequiz_results:userid'] = 'L\'utilisateur à qui appartient ce résultat.';
$string['privacy:metadata:offlinequiz_scanned_p_pages'] = 'Ce tableau permet de sauvegarder les pages des participants et leurs informations générales.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:error'] = 'L\'erreur (si elle existe) que cette page a déclenchée pendant le traitement.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:filename'] = 'Le nom du fichier de la page numérisée.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:listnumber'] = 'Le numéro de la liste.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:offlinequizid'] = 'Le Test hors-ligne auquel les participants de cette page appartiennent.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:status'] = 'Le statut de cette page scannée.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:time'] = 'Le moment où cette page a été traitée.';
$string['privacy:metadata:offlinequiz_scanned_pages'] = 'Le tableau enregistre des informations sur une page scannée d\'un test hors-ligne.';
$string['privacy:metadata:offlinequiz_scanned_pages:error'] = 'L\'erreur détaillée de cette page (si elle existe).';
$string['privacy:metadata:offlinequiz_scanned_pages:filename'] = 'Le nom de fichier de la page numérisée.';
$string['privacy:metadata:offlinequiz_scanned_pages:groupnumber'] = 'Le numéro du groupe auquel appartient ce test hors-ligne.';
$string['privacy:metadata:offlinequiz_scanned_pages:offlinequizid'] = 'Le test hors-ligne de la page numérisée.';
$string['privacy:metadata:offlinequiz_scanned_pages:pagenumber'] = 'Le numéro de page de cette page.';
$string['privacy:metadata:offlinequiz_scanned_pages:resultid'] = 'Le résultat relatif à cette page.';
$string['privacy:metadata:offlinequiz_scanned_pages:status'] = 'Le statut de cette page.';
$string['privacy:metadata:offlinequiz_scanned_pages:time'] = 'L\'heure à laquelle cette page a été traitée.';
$string['privacy:metadata:offlinequiz_scanned_pages:userkey'] = 'La « clé d\'utilisateur » (pas l\'identifiant) de l\'utilisateur barré sur la page.';
$string['privacy:metadata:offlinequiz_scanned_pages:warningfilename'] = 'Le nom du fichier qui est créé lorsqu\'un test hors-ligne mal rempli est corrigé et que l\'utilisateur reçoit un avertissement à ce sujet.';
$string['questionanalysis'] = 'Analyse de difficulté';
$string['questionanalysistitle'] = 'Tableau de l\'analyse de difficulté';
$string['questionbankcontents'] = 'Contenu de la banque de questions';
$string['questionforms'] = 'Questionnaires';
$string['questioninfoanswers'] = 'Nombre de réponses correctes';
$string['questioninfocorrectanswer'] = 'réponse correcte';
$string['questioninfocorrectanswers'] = 'réponses correctes';
$string['questioninfonone'] = 'Rien';
$string['questioninfoqtype'] = 'Type question';
$string['questionname'] = 'Nom de question';
$string['questionpage'] = 'Page';
$string['questionsheet'] = 'Feuille de questions';
$string['questionsheetlatextemplate'] = '% !TEX encoding = UTF-8 Unicode
\\documentclass[11pt,a4paper]{article}
\\usepackage[utf8x]{inputenc}
\\usepackage[T1]{fontenc}
\\textwidth 16truecm
\\textheight 23truecm
\\setlength{\\oddsidemargin}{0cm}
\\setlength{\\evensidemargin}{0cm}
\\setlength{\\topmargin}{-1cm}
\\usepackage{amsmath} % for \\implies etc
\\usepackage{amsfonts} % for \\mathbb etc
\\usepackage[colorlinks=true,urlcolor=dunkelrot,linkcolor=black]{hyperref} % For using hyperlinks
\\usepackage{ifthen}
\\usepackage{enumitem}
\\usepackage{xcolor}
\\usepackage{ulem}
\\parindent 0pt % no indent on the beginning of a section
\\renewcommand\\UrlFont{\\sf}
\\usepackage{lastpage}
\\usepackage{fancyhdr}
\\pagestyle{fancy}
\\chead{\\sc \\TestTitle, Group \\Group}
\\cfoot{Seite \\thepage/\\pageref{LastPage}}
\\makeatletter %%% disable pagebreaks between answers
\\@beginparpenalty=10000
\\@itempenalty=10000
\\makeatother
%
\\newcommand{\\answerIs}[1]{} %%%Disable showing the right answer
% \\newcommand{\\answerIs}[1]{[#1]} %%%Enable showing the right answer
%%%


% ===========================================================================================================
%%% Course data:
\\newcommand{\\Group}{{$a->groupname}}
\\newcommand{\\Title}{{$a->activityname}}
%%% Or use {{$a->coursename} as course name instead
\\newcommand{\\Date}

\\newcommand{\\TestTitle}{%
\\begin{center}
{\\bf \\Large Question sheet}\\\\[3mm]
\\fbox{
\\begin{tabular}{rl}
\\rule{0pt}{25pt} Nom : & $\\underline{\\hspace*{8cm}}$ \\rule{20pt}{0pt}\\\\[5mm]
Identifiant : & $\\underline{\\hspace*{8cm}}$\\\\[5mm]
\\ifthenelse{\\equal{true}{{$a->printstudycodefield}}}{\\rule{10pt}{0pt} Code d\'étude: & $\\underline{\\hspace*{8cm}}$\\\\[5mm]}{}
\\rule[-20pt]{0pt}{20pt} Signature : & $\\underline{\\hspace*{8cm}}$
\\end{tabular}}
\\end{center}
}

\\InputIfFileExists{offline_test_extras.tex}{}{} % Input extra user definitions

\\begin{document}


% ===========================================================================================================
\\TestTitle

% ===========================================================================================================


\\bigskip
% ===========================================================================================================

{$a->pdfintrotext}

% ===========================================================================================================

\\newpage

% ===========================================================================================================


{$a->latexforquestions}


\\end{document}';
$string['questionsin'] = 'Questions dans';
$string['questionsingroup'] = 'Questions dans le groupe';
$string['questionsinthisofflinequiz'] = 'Questions dans ce test hors-ligne';
$string['questiontextisempty'] = '[Texte de question vide]';
$string['quizdate'] = 'Date du test hors-ligne';
$string['quizopenclose'] = 'Dates d\'ouverture et de fermeture';
$string['quizopenclose_help'] = 'Les étudiants ne peuvent voir leurs tentatives qu\'après l\'heure d\'ouverture et avant l\'heure de fermeture.';
$string['quizquestions'] = 'Questions du test';
$string['randomfromexistingcategory'] = 'Question aléatoire depuis une catégorie existante';
$string['randomnumber'] = 'Nombre de questions aléatoires';
$string['randomquestionusinganewcategory'] = 'Question aléatoire en utilisant une nouvelle catégorie';
$string['readjust'] = 'Ré-ajuster';
$string['reallydeletepdfs'] = 'Voulez-vous vraiment supprimer le formulaire de fichiers ?';
$string['reallydeleteupdatepdf'] = 'Voulez-vous vraiment supprimer et modifier la liste des participants ?';
$string['recreatepdfs'] = 'Recréer les PDF';
$string['recurse'] = 'Inclure également les questions des sous catégories';
$string['rediswrong'] = 'croix fausse ou manquante';
$string['refreshpreview'] = 'Rafraîchir l\'aperçu';
$string['regrade'] = 'Ré-évaluer';
$string['regradedisplayexplanation'] = '<b>Attention !</b>Noter à nouveau ne va pas changer les notes qui ont été remplacées manuellement !';
$string['regradinginfo'] = 'Si vous modifiez le score d\'une question, vous devez ré-évaluer le Test hors-ligne pour mettre à jour les résultats des participants.';
$string['regradingquiz'] = 'Ré-évaluation';
$string['regradingresult'] = 'Ré-évaluation des résultats pour l\'utilisateur {$a}…';
$string['reloadpreview'] = 'Recharger l\'aperçu';
$string['reloadquestionlist'] = 'Recharger la liste des questions';
$string['remove'] = 'Supprimer';
$string['removeemptypage'] = 'Supprimer la page vide';
$string['removepagebreak'] = 'Supprimer le saut de page';
$string['removeselected'] = 'Supprimer les pages sélectionnées';
$string['reordergroupquestions'] = 'Réordonner les questions du groupe';
$string['reorderquestions'] = 'Réordonner les questions';
$string['reordertool'] = 'Afficher l\'outil d\'organisation';
$string['repaginate'] = 'Repaginer avec {$a} questions par page';
$string['repaginatecommand'] = 'Repaginer';
$string['repaginatenow'] = 'Repaginer maintenant';
$string['reportends'] = 'Relecture de la fin des résultats';
$string['reportoverview'] = 'Vue d\'ensemble';
$string['reportstarts'] = 'L\'examen des résultats commence';
$string['resetofflinequizzes'] = 'Réinitialiser les données du test hors-ligne';
$string['resultexists'] = 'Un résultat identique pour {$a} existe déjà, import ignoré';
$string['resultimport'] = 'Importer des résultats';
$string['results'] = 'Résultats';
$string['review'] = 'Relecture';
$string['reviewbefore'] = 'Permettre la relecture pendant que le test hors-ligne est ouvert';
$string['reviewclosed'] = 'Après la fermeture du test hors-ligne';
$string['reviewcloses'] = 'Fin de relecture';
$string['reviewimmediately'] = 'Immédiatement après la tentative';
$string['reviewincludes'] = 'La relecture inclus';
$string['reviewofresult'] = 'Relecture du résultat';
$string['reviewopens'] = 'Début de relecture';
$string['reviewoptions'] = 'Les étudiants peuvent relire';
$string['reviewoptions_help'] = 'Ces options vous permettent de contrôler ce que les étudiants peuvent voir après l\'import des résultats.
Vous pouvez également définir l\'heure de début et de fin du rapport de résultats. Les cases à cocher signifient :
<table>
<tr><td style="vertical-align: top;"><b>La tentative</b></td><td>
Le texte des questions et les réponses seront affichés aux étudiants. Ils verront quelles réponses ils ont choisies, mais les réponses correctes ne seront pas indiquées.</td>
</td></tr>
<tr><td style="vertical-align: top;"><b>Si correcte</b></td><td>
Cette option ne peut être activée que si l\'option "La tentative" est aussi activée. Si activée, les étudiants verront quelles réponses étaient correctes (fond vert) ou incorrectes (fond rouge).
</td></tr>
<tr><td style="vertical-align: top;"><b>Points</b></td><td>
Le groupe (par exemple B), les notes (note obtenue, note totale des questions, note obtenue en pourcentage, par exemple 40/80 (50)) et la note (par exemple 50 sur un maximum de 100) sont affichés.
En outre, si l\'option "La tentative" est sélectionnée, la note obtenue et la note maximale sont affichées pour chaque question.
</td></tr>
<tr><td style="vertical-align: top;"><b>Feedback spécifique</b></td><td>
Feedback qui dépend de la réponse donnée par l\'étudiant.
</td></tr>
<tr><td style="vertical-align: top ;"><b>Feedback général</b></td><td>.
<p>Les feedbacks généraux sont montrés à l\'étudiant après l\'import des résultats.
Contrairement au feedback spécifique, qui dépend du type de question et de la réponse donnée par l\'étudiant, le même texte de feedback général s\'affiche pour tous les étudiants.</p>
<p></p><p>Vous pouvez utiliser le feedback général pour donner aux étudiants une réponse entièrement travaillée et peut-être un lien vers des informations supplémentaires qu\'ils peuvent utiliser s\'ils n\'ont pas compris les questions.</p>
</td></tr>
<tr><td style="vertical-align: top ;"><b>Réponses correctes</b></td><td>.
Il est indiqué quelles réponses sont correctes ou fausses. Cette option n\'est disponible que si "La tentative" est définie.
</td></tr>
<tr><td style="vertical-align: top ;"><b>Formulaire numérisé</b></td><td>.
Les formulaires de réponse numérisés sont affichés. Les cases cochées sont marquées par des carrés verts.
</td></tr>
<tr><td style="vertical-align: top ;"><b>Formulaire numérisé avec les notes</b></td><td>.
Les formulaires de réponse numérisés sont affichés. Les cases cochées sont marquées par des carrés verts. Les notes erronées et les notes manquantes sont mises en évidence.
En outre, un tableau indique la note maximale et la note obtenue pour chaque question.
</td></tr>
</table>';
$string['reviewoptionsheading'] = 'Options de relecture';
$string['rimport'] = 'Importer/Corriger';
$string['rotate'] = 'Rotation';
$string['rotatingsheet'] = 'Rotation de la page…';
$string['save'] = 'Sauvegarder';
$string['saveandshow'] = 'Enregistrer et publier';
$string['savescannersettings'] = 'Enregistrer les réglages du scanner';
$string['scannedform'] = 'Formulaire scanné';
$string['scannerformfortype'] = 'Formulaire pour le type {$a}';
$string['scanneroptions'] = 'Réglages du scanner';
$string['scannerpdfs'] = 'Formulaires vides';
$string['scannerpdfstext'] = 'Télécharger les formulaires vides suivants si vous voulez utiliser votre propre logiciel de scan.';
$string['scanningoptionsheading'] = 'Options du scanner';
$string['score'] = 'Score';
$string['search:activity'] = 'Test Hors ligne - information de l\'activité';
$string['select'] = 'Sélectionnez';
$string['selectagroup'] = 'Sélectionnez un groupe';
$string['selectall'] = 'Tout sélectionner';
$string['selectcategory'] = 'Selectionnez une catégorie';
$string['selectdifferentgroup'] = 'Merci de sélectionner un groupe différent !';
$string['selectedattempts'] = 'Tentatives sélectionnées…';
$string['selectformat'] = 'Sélectionner un format…';
$string['selectgroup'] = 'Sélectionner un groupe';
$string['selectlist'] = 'Sélectionnez une liste ou tentez de ré-ajuster la feuille :';
$string['selectmultipletoolbar'] = 'Sélectionner plusieurs barres d\'outils';
$string['selectnone'] = 'Tout désélectionner';
$string['selectpage'] = 'Choisissez un numéro de page ou tentez de ré-ajuster la feuille :';
$string['selectquestiontype'] = '-- Sélectionner le type de question --';
$string['showallparts'] = 'Afficher tous les {$a} participants';
$string['showcopyright'] = 'Afficher une mention de copyright';
$string['showcopyrightdesc'] = 'Si vous activez cette option, une mention de copyright sera affichée aux étudiants sur la page de relecture des résultats.';
$string['showgrades'] = 'Imprimer la note des questions';
$string['showgrades_help'] = 'Cette option détermine si la note maximale de chaque question du test hors-ligne doit être imprimée sur la feuille des questions.';
$string['showmissingattemptonly'] = 'Afficher tous les participants cochés et sans résultat';
$string['showmissingcheckonly'] = 'Afficher tous les participants non cochés et avec un résultat';
$string['shownumpartsperpage'] = 'Afficher {$a} participants par page';
$string['showquestioninfo'] = 'Imprimer les informations à propos des réponses';
$string['showquestioninfo_help'] = 'Avec cette option, vous pouvez contrôler quelle information additionnelle à propos de la question est imprimée sur la grille question.
Vous pouvez choisir une option parmi de celle-ci :
<ul>
<li> Rien
<li> Type de question - Selon le type de question, Choix unique, Choix multiple, Choix multiple Tout-ou-rien  sera imprimé
<li> Nombre de réponses correctes - Le nombre de réponses correctes sera imprimé
</ul>';
$string['showstudentview'] = 'Afficher la vue étudiant';
$string['showtutorial'] = 'Afficher un tutoriel sur les tests hors-ligne aux étudiants';
$string['showtutorial_help'] = 'Cette option détermine si les étudiants peuvent visualiser un tutoriel sur les bases des tests hors-ligne.
Ce tutoriel fournit des informations sur comment utiliser les différents documents constituant un test hors-ligne. Une partie interactive leur enseigne comment marquer correctement leur numéro d\'identification.<br />
<b>Veuillez noter :</b><br />
Si vous réglez cette option sur Oui, mais que le test hors-ligne est masqué, le lien ne sera pas visible. Dans ce cas, vous pouvez ajouter un lien vers le tutoriel sur la page de cours.';
$string['showtutorialdescription'] = 'Vous pouvez ajouter un lien vers le tutoriel sur la page de cours en utilisant l\'URL :';
$string['shuffleanswers'] = 'Mélanger les réponses';
$string['shufflequestions'] = 'Mélanger les questions';
$string['shufflequestionsanswers'] = 'Mélanger les questions et les réponses';
$string['shufflequestionsselected'] = 'Le mélange des questions a été activé. Certaines options relatives aux pages ne sont pas disponibles. Pour changer le réglage du mélange des questions, {$a}';
$string['shufflewithin'] = 'Mélanger les éléments des questions';
$string['shufflewithin_help'] = 'Si cette option est activée, les propositions de réponses aux questions seront mélangées aléatoirement à chaque nouvelle tentative du test, à condition que l\'option correspondant ait également été activée dans les paramètres de la question. Le réglage ne s\'applique qu\'aux questions qui comportent des propositions de réponses, telles que les questions à choix multiples ou les questions d\'appariement.';
$string['signature'] = 'Signature';
$string['singlechoice'] = 'Choix unique';
$string['standard'] = 'Standard';
$string['starttutorial'] = 'Démarrer le tutoriel sur l\'examen';
$string['statistics'] = 'Statistique';
$string['statisticsplural'] = 'Statistiques';
$string['statsoverview'] = 'Vue d\'ensemble des statistiques';
$string['studycode'] = 'Code étudiant';
$string['temporaryfiledeletiontask'] = 'Supprime les fichiers temporaires';
$string['theattempt'] = 'La tentative';
$string['timesup'] = 'Temps écoulé !';
$string['totalmarksx'] = 'Total des marques : {$a}';
$string['totalpointsx'] = 'Total des points : {$a}';
$string['totalquestionsinrandomqcategory'] = 'Total des {$a} questions de la catégorie.';
$string['trigger'] = 'bornes basse/haute';
$string['tutorial'] = 'Tutoriel sur les tests hors-ligne';
$string['type'] = 'Type';
$string['uncheckparts'] = 'Marquer les participants sélectionnés absents';
$string['updatedsumgrades'] = 'La somme des notes du groupe {$a->letter} a été re-calculée à {$a->grade}.';
$string['upgradingfilenames'] = 'Mise à jour des noms de fichiers des documents : offline quiz {$a->done}/{$a->outof} (Test hors ligne ID {$a->info})';
$string['upgradingilogs'] = 'Mise à jour des pages scannées : page scannée {$a->done}/{$a->outof} <br/>(identifiant de test hors-ligne {$a->info})';
$string['upgradingofflinequizattempts'] = 'Mise à jour des tentatives du test hors-ligne : test hors-ligne {$a->done}/{$a->outof} <br/>(identifiant de test hors-ligne {$a->info})';
$string['upload'] = 'Importer/Corriger';
$string['uploadpart'] = 'Importer/Corriger des listes de participants';
$string['uppertrigger'] = 'Seconde borne supérieure';
$string['uppertriggerzero'] = 'La seconde borne supérieure est nulle';
$string['upperwarning'] = 'Première borne supérieure';
$string['upperwarningzero'] = 'La première borne supérieure est nulle';
$string['useradded'] = 'Utilisateur {$a} ajouté';
$string['userdoesnotexist'] = 'L\'utilisateur {$a} n\'existe pas dans le système';
$string['useridentification'] = 'Identification des utilisateurs';
$string['useridviolation'] = 'Plusieurs utilisateurs trouvés';
$string['userimported'] = 'L\'utilisateur {$a} a été importé et noté';
$string['usernotincourse'] = 'L\'utilisateur {$a} ne participe pas au cours.';
$string['usernotinlist'] = 'Utilisateur non enregistré dans la liste !';
$string['usernotregistered'] = 'L\'utilisteur {$a} n\'est pas enregistré dans le cours';
$string['userpageimported'] = 'Page isolée importée pour l\'utilisateur {$a}';
$string['valuezero'] = 'La valeur ne doit pas être nulle';
$string['viewresults'] = 'Voir les résultats';
$string['white'] = 'Blanc';
$string['withselected'] = 'Avec la sélection';
$string['zerogradewarning'] = 'Attention : la note du test hors-ligne est 0.0 !';
$string['zipfile'] = 'Fichier ZIP';
$string['zipok'] = 'Fichier ZIP importé';
