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
 * Strings for component 'scorm', language 'fr', version '4.4'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Activation';
$string['activityloading'] = 'Vous allez être dirigé automatiquement vers l’activité dans';
$string['activityoverview'] = 'Des paquetages SCORM requièrent votre attention';
$string['activitypleasewait'] = 'Activité en cours de chargement. Veuillez patienter…';
$string['adminsettings'] = 'Réglages administrateur';
$string['advanced'] = 'Paramètres';
$string['aicchacpkeepsessiondata'] = 'Données de session AICC HACP';
$string['aicchacpkeepsessiondata_desc'] = 'Durée en jours pendant laquelle conserver les données de session AICC HACP (une durée élevée remplira la table d’anciennes données qui pourraient être utiles pour le débogage)';
$string['aicchacptimeout'] = 'Délai AICC HACP';
$string['aicchacptimeout_desc'] = 'Durée en minutes pendant laquelle une session AICC HACP externe peut rester ouverte';
$string['aiccuserid'] = 'Transmettre à AICC les identifiants numériques des utilisateurs';
$string['aiccuserid_desc'] = 'En comparaison avec Moodle, le standard AICC est très restrictif pour les noms d’utilisateur et n’autorise que les caractères alphanumériques, les tirets (-) et caractères souligné (_). Les points, espaces et l’arobase (@) ne sont pas acceptés. Si ce réglage est activé, l’identifiant numérique (user->id) est passé au paquetage AICC au lieu du nom d’utilisateur.';
$string['aliasonly'] = 'Lors de la sélection d’un fichier imsmanifest.xml dans un dépôt, vous devez utiliser un alias de ce fichier.';
$string['allowapidebug'] = 'Activer l’API de débogage et de traçage (veuillez spécifier le masque de capture)';
$string['allowtypeaicchacp'] = 'Autoriser AICC HACP externe';
$string['allowtypeaicchacp_desc'] = 'Si ce réglage est activé, cela permet la communication AICC HACP externe sans nécessiter de connexion utilisateur pour les requêtes externes d’un paquetage AICC';
$string['allowtypeexternal'] = 'Activer le type de paquetage externe';
$string['allowtypeexternalaicc'] = 'Autoriser les URLs directes AICC';
$string['allowtypeexternalaicc_desc'] = 'Si ce réglage est activé, cela permet l’accès à un paquetage AICC par une URL directe';
$string['allowtypelocalsync'] = 'Activer le type de paquetage téléchargé';
$string['apidebugmask'] = 'Masque de capture de l’API de débogage (simple expression régulière sur <username>:<activityname>). Par exemple, admin:.* ne déboguera que l’utilisateur admin';
$string['areacontent'] = 'Contenu des fichiers';
$string['areapackage'] = 'Fichier de paquetage';
$string['asset'] = 'Élément';
$string['assetlaunched'] = 'Élément - affiché';
$string['attempt'] = 'Tentative';
$string['attempt1'] = '1 tentative';
$string['attempts'] = 'Tentatives';
$string['attemptsmanagement'] = 'Gestion des tentatives';
$string['attemptstatusall'] = 'Tableau de bord et page initiale';
$string['attemptstatusentry'] = 'Page initiale seulement';
$string['attemptstatusmy'] = 'Tableau de bord seulement';
$string['attemptsx'] = '{$a} tentatives';
$string['attr_error'] = 'Valeur incorrecte de l’attribut ({$a->attr}) dans la balise {$a->tag}.';
$string['autocommit'] = 'Enregistrer automatiquement';
$string['autocommit_help'] = 'Si ce réglage est activé, les données SCORM sont enregistrées automatiquement dans la base de données. Ce réglage est utile pour les objets SCORM qui n’enregistrent pas eux-mêmes leurs données de manière régulière.';
$string['autocommitdesc'] = 'Enregistrer automatiquement les données SCORM si le paquetage SCORM ne les enregistre pas.';
$string['autocontinue'] = 'Continuer automatiquement';
$string['autocontinue_help'] = 'Si ce réglage est activé, les objets d’apprentissage suivants sont automatiquement lancés ; dans le cas contraire le participant doit cliquer explicitement le bouton « Continuer ».';
$string['autocontinuedesc'] = 'Si ce réglage est activé, les objets d’apprentissage suivants seront lancés automatiquement. Dans le cas contraire, un bouton Continuer devra être cliqué.';
$string['averageattempt'] = 'Moyenne des tentatives';
$string['badarchive'] = 'Vous devez indiquer un fichier ZIP valide';
$string['badimsmanifestlocation'] = 'Un fichier imsmanifest.xml a été trouvé, mais pas à la racine de votre fichier ZIP. Veuillez refaire votre paquetage SCORM.';
$string['badmanifest'] = 'Erreurs dans le fichier « manifest » : veuillez consulter l’historique des erreurs';
$string['browse'] = 'Prévisualiser';
$string['browsed'] = 'Consulté';
$string['browsemode'] = 'Mode prévisualisation';
$string['browserepository'] = 'Parcourir le dépôt';
$string['cachedef_elements'] = 'Cache de l’élément';
$string['calculatedweight'] = 'Pondération calculée';
$string['calendarend'] = '{$a} se termine';
$string['calendarstart'] = '{$a} s’ouvre';
$string['cannotaccess'] = 'Il n’est pas permis de lancer ce script de cette manière';
$string['cannotfindsco'] = 'Objet d’apprentissage introuvable';
$string['chooseapacket'] = 'Sélectionner ou mettre à jour un paquetage';
$string['closebeforeopen'] = 'La date de fermeture indiquée est antérieure à la date d’ouverture.';
$string['collapsetocwinsize'] = 'Replier la table des matières quand la taille de la fenêtre est inférieure à';
$string['collapsetocwinsizedesc'] = 'Ce réglage vous permet de spécifier la taille de fenêtre en dessous de laquelle la table des matières sera automatiquement repliée.';
$string['compatibilitysettings'] = 'Réglages de compatibilité';
$string['completed'] = 'Terminé';
$string['completiondetail:allscos'] = 'Faire toutes les parties de cette activité';
$string['completiondetail:completionscore'] = 'Obtenir un score minimal de {$a}';
$string['completiondetail:completionstatuscompleted'] = 'Terminer l’activité';
$string['completiondetail:completionstatuscompletedorpassed'] = 'Terminer et réussir l’activité';
$string['completiondetail:completionstatuspassed'] = 'Réussir l’activité';
$string['completionscorerequired'] = 'Requiert un score minimal';
$string['completionscorerequired_help'] = 'Si ce réglage est activé, le participant devra obtenir au moins le score indiqué pour que cette activité SCORM soit marquée comme terminée, en plus des autres conditions de complétion.';
$string['completionscorerequireddesc'] = 'Un score minimum de {$a} est requis pour l’achèvement';
$string['completionstatus_completed'] = 'Terminé';
$string['completionstatus_passed'] = 'Réussi';
$string['completionstatusallscos'] = 'Tous les SCOs doivent retourner le statut d’achèvement';
$string['completionstatusallscos_help'] = 'Certains paquets SCORM contiennent plusieurs composants ou « SCOs ». Si ce réglage est activé, tous les SCOs doivent retourner l’état lesson_status approprié pour que l’activité soit marquée comme achevée.';
$string['completionstatusrequired'] = 'Requiert un statut';
$string['completionstatusrequired_help'] = 'En cochant un ou plusieurs statuts, vous requérez que les participants obtiennent au moins l’un d’entre eux pour que cette activité SCORM soit marquée comme terminée, en plus des autres conditions de complétion.';
$string['completionstatusrequireddesc'] = 'L’étudiant doit atteindre au moins l’un des statuts suivants : {$a}';
$string['confirmloosetracks'] = 'Attention ! Le paquetage semble avoir été modifié. Si sa structure a été modifiée, les journaux de certains utilisateurs (progressions) seront perdus lors du processus de mise à jour.';
$string['contents'] = 'Contenus';
$string['coursepacket'] = 'Paquetage du cours';
$string['coursestruct'] = 'Structure du contenu';
$string['crontask'] = 'Traitement en tâche de fond pour SCORM';
$string['currentwindow'] = 'Fenêtre courante';
$string['datadir'] = 'Erreur du système de fichier : impossible de créer le dossier de données du cours';
$string['defaultdisplaysettings'] = 'Réglages par défaut de l’affichage';
$string['defaultgradesettings'] = 'Réglages par défaut des notes';
$string['defaultothersettings'] = 'Autres réglages par défaut';
$string['deleteallattempts'] = 'Supprimer toutes les tentatives de SCORM';
$string['deleteattemptcheck'] = 'Voulez-vous vraiment supprimer totalement ces tentatives ?';
$string['deleteselected'] = 'Supprimer les tentatives sélectionnées';
$string['deleteuserattemptcheck'] = 'Voulez-vous vraiment supprimer totalement toutes vos tentatives ?';
$string['details'] = 'Détails du parcours';
$string['directories'] = 'Afficher les liens de dossier';
$string['disabled'] = 'Désactivé';
$string['display'] = 'Afficher le paquetage';
$string['displayattemptstatus'] = 'Afficher l’état de la tentative';
$string['displayattemptstatus_help'] = 'Si ce réglage est activé, un résumé des tentatives de l’utilisateur sera affiché dans le bloc vue d’ensemble des cours du tableau de bord et/ou sur la page d’accueil du SCORM.';
$string['displayattemptstatusdesc'] = 'Ce réglage détermine si l’état de la tentative doit être affiché ou non dans le bloc du tableau de bord et/ou sur la page d’accueil du SCORM.';
$string['displaycoursestructure'] = 'Afficher la structure du contenu sur la page d’entrée';
$string['displaycoursestructure_help'] = 'Si ce réglage est activé, la table des matières sera affichée dans le résumé du SCORM.';
$string['displaycoursestructuredesc'] = 'Si ce réglage est activé, la table des matières sera affichée sur la page d’entrée du SCORM.';
$string['displaydesc'] = 'Ce réglage détermine si le paquetage SCORM doit être affiché dans une nouvelle fenêtre';
$string['displaysettings'] = 'Réglages de l’affichage';
$string['dnduploadscorm'] = 'Ajouter un paquetage SCORM';
$string['domxml'] = 'Bibliothèque externe DOMXML';
$string['element'] = 'Élément';
$string['enter'] = 'Entrer';
$string['entercourse'] = 'Commencer le cours';
$string['errorlogs'] = 'Journal des erreurs';
$string['eventattemptdeleted'] = 'Tentative supprimée';
$string['eventinteractionsviewed'] = 'Interactions consultées';
$string['eventreportviewed'] = 'Rapport consulté';
$string['eventscolaunched'] = 'SCO lancé';
$string['eventscorerawsubmitted'] = 'Score brut SCORM envoyé';
$string['eventstatussubmitted'] = 'Statut SCORM envoyé';
$string['eventtracksviewed'] = 'Traces consultées';
$string['eventuserreportviewed'] = 'Rapport utilisateur consulté';
$string['everyday'] = 'Chaque jour';
$string['everytime'] = 'À chaque utilisation';
$string['exceededmaxattempts'] = 'Vous avez atteint le nombre maximum de tentatives.';
$string['exit'] = 'Terminer le cours';
$string['exitactivity'] = 'Terminer l’activité';
$string['expired'] = 'Désolé, cette activité s’est terminée le {$a} et n’est plus disponible';
$string['external'] = 'Mise à jour des paquetages externes';
$string['failed'] = 'Échec';
$string['finishscorm'] = 'Si vous avez fini de consulter cette ressource, {$a}';
$string['finishscormlinkname'] = 'cliquez ici pour revenir à la page de cours';
$string['firstaccess'] = 'Toujours, sauf la première fois';
$string['firstattempt'] = 'Première tentative';
$string['floating'] = 'Flottant';
$string['forceattemptalways'] = 'Toujours';
$string['forceattemptoncomplete'] = 'Lorsque la tentative précédente a été terminée, réussie ou a échoué';
$string['forcecompleted'] = 'Imposer de terminer';
$string['forcecompleted_help'] = 'Si ce réglage est activé, l’état de la tentative actuelle est forcé sur « Terminé » (ce réglage n’est valable que pour les paquetages SCORM 1.2).';
$string['forcecompleteddesc'] = 'Ce réglage détermine si par défaut il est imposé de terminer l’activité ou non';
$string['forcejavascript'] = 'Forcer les utilisateurs à activer Javascript';
$string['forcejavascript_desc'] = 'Si ce réglage est activé (recommandé), il empêche l’accès aux objets SCORM lorsque Javascript est désactivé ou n’est pas pris en charge dans le navigateur de l’utilisateur. Si le réglage est désactivé, l’utilisateur pourra voir le SCORM, mais les communications API échoueront et aucune information d’évaluation ne sera enregistrée.';
$string['forcejavascriptmessage'] = 'Javascript est requis pour voir cet élément. Veuillez activer Javascript dans votre navigateur et essayer à nouveau.';
$string['forcenewattempts'] = 'Imposer une nouvelle tentative';
$string['forcenewattempts_help'] = 'Il y a 3 options disponibles :
* Non – Si une tentative précédente est terminée, réussie ou a échoué, l’étudiant aura la possibilité d’entrer en mode relecture ou d’effectuer une nouvelle tentative.
* Lorsque la tentative précédente a été terminée, réussie ou a échoué – Tient compte du réglage du paquetage SCORM définissant l’état « terminé », « réussi » ou « échoué ».
* Toujours – Chaque nouvel accès à l’activité SCORM générera une nouvelle tentative et l’étudiant ne sera pas dirigé au point atteint lors de la tentative précédente.';
$string['found'] = 'Fichier « manifest » trouvé';
$string['frameheight'] = 'La hauteur du cadre ou de la fenêtre';
$string['framewidth'] = 'La largeur du cadre ou de la fenêtre';
$string['fromleft'] = 'Depuis la gauche';
$string['fromtop'] = 'Depuis le haut';
$string['fullscreen'] = 'Remplir tout l’écran';
$string['general'] = 'Généralités';
$string['gradeaverage'] = 'Note moyenne';
$string['gradeforattempt'] = 'Note de la tentative';
$string['gradehighest'] = 'Note la plus haute';
$string['grademethod'] = 'Méthode d’évaluation';
$string['grademethod_help'] = 'La méthode de notation définit comment la note d’une tentative est calculée.

Il y a 4 méthodes possibles pour cela :

* Objets complétés : le nombre d’objets d’apprentissage complétés/réussis de l’activité
* Note la plus haute : le plus haut score AICC obtenu dans les objets d’apprentissage achevés
* Note moyenne : la moyenne des scores AICC obtenus
* Somme : la somme des scores AICC obtenus';
$string['grademethoddesc'] = 'La méthode d’évaluation définit comment la note d’une tentative unique est calculée.';
$string['gradereported'] = 'Note envoyée';
$string['gradescoes'] = 'Objets d’apprentissage';
$string['gradesettings'] = 'Réglages des notes';
$string['gradesum'] = 'Note totale';
$string['height'] = 'Hauteur';
$string['hidden'] = 'Invisible';
$string['hidebrowse'] = 'Désactiver le mode prévisualisation';
$string['hidebrowse_help'] = 'Le mode prévisualisation permet aux participants de Parcourir une activité avant de commencer une tentative. En désactivant le mode prévisualisation, le bouton de prévisualisation sera caché.';
$string['hidebrowsedesc'] = 'Le mode prévisualisation permet aux participants de Parcourir une activité avant de commencer une tentative.';
$string['hideexit'] = 'Masquer le bouton de sortie';
$string['hidereview'] = 'Masquer le bouton de relecture';
$string['hidetoc'] = 'Affichage de la structure du contenu dans le lecteur';
$string['hidetoc_help'] = 'Affichage de la table des matières dans le lecteur SCORM';
$string['hidetocdesc'] = 'Ce réglage détermine comment la table des matières doit être affichée dans le lecteur SCORM.';
$string['highestattempt'] = 'Meilleure tentative';
$string['identifier'] = 'Identifiant de question';
$string['incomplete'] = 'Incomplet';
$string['indicator:cognitivedepth'] = 'SCORM : aspect cognitif';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l’étudiant dans une activité SCORM.';
$string['indicator:cognitivedepthdef'] = 'SCORM : aspect cognitif';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint durant cet intervalle d’analyse ce pourcentage d’engagement cognitif offert par les activités « SCORM » (niveaux : pas de vue, vue, envoi, vue du feedback).';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'SCORM : aspect social';
$string['indicator:socialbreadth_help'] = 'Cet indicateur se base sur l’interaction sociale atteinte par l’étudiant dans une activité SCORM.';
$string['indicator:socialbreadthdef'] = 'SCORM : aspect social';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint durant cet intervalle d’analyse ce pourcentage d’engagement social offert par les activités « SCORM » (niveaux : pas de participation, participant seul).';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['interactions'] = 'Interactions';
$string['invalidactivity'] = 'L’activité SCORM n’est pas correcte';
$string['invalidhacpsession'] = 'Session HACP non valide';
$string['invalidmanifestname'] = 'Seuls des fichiers imsmanifest.xml ou .zip peuvent être choisis';
$string['invalidmanifestresource'] = '<strong>Attention !</strong> Les ressources ci-dessous sont référencées dans le manifeste, mais n’ont pas pu être trouvées :';
$string['invalidstatus'] = 'Statut non valide';
$string['invalidurl'] = 'URL spécifié non valide';
$string['invalidurlhttpcheck'] = 'L’URL spécifiée n’est pas valide. Message de débogage : <pre>{$a->cmsg}</pre>';
$string['largetrackupgrade'] = 'La prochaine étape de la mise à jour peut durer un certain temps, car votre site comporte {$a} enregistrements de traces SCORM qui nécessitent une migration vers la nouvelle structure des tables. Veuillez patienter : il n’est pas possible d’afficher une barre de progression.';
$string['last'] = 'Dernier accès le';
$string['lastaccess'] = 'Dernier accès';
$string['lastattempt'] = 'Dernière tentative terminée';
$string['lastattemptlock'] = 'Verrouiller après la tentative finale';
$string['lastattemptlock_help'] = 'Si ce réglage est activé, les étudiants ne peuvent plus lancer le lecteur SCORM une fois qu’ils ont épuisé le nombre de tentatives qui leur sont allouées.';
$string['lastattemptlockdesc'] = 'Si ce réglage est activé, les participants ayant épuisé leur nombre de tentatives ne peuvent plus lancer le lecteur SCORM.';
$string['location'] = 'Afficher la barre d’URL';
$string['masteryoverride'] = 'Le score de maîtrise remplace le statut';
$string['masteryoverride_help'] = 'Si ce réglage est activé et qu’un score de maîtrise est indiqué, lorsque LMSFinish est appelé et qu’un score brut a été donnée, le statut sera recalculé à l’aide du score brut et du score de maîtrise, et le statut fourni par le SCORM (y compris « incomplet ») sera remplacé.';
$string['masteryoverridedesc'] = 'Ce réglage définit si par défaut le score de maîtrise remplace le statut';
$string['max'] = 'Score max';
$string['maximumattempts'] = 'Nombre de tentatives';
$string['maximumattempts_help'] = 'Ce réglage détermine le nombre de tentatives que l’utilisateur peut réaliser. Il n’est utilisable qu’avec les paquetages SCORM 1.2 ou AICC.';
$string['maximumattemptsdesc'] = 'Ce réglage détermine la valeur par défaut du nombre maximal de tentatives de l’activité';
$string['maximumgradedesc'] = 'Ce réglage détermine la note maximale par défaut de l’activité';
$string['menubar'] = 'Afficher la barre des menus';
$string['min'] = 'Score minimum';
$string['minimumscoregreater'] = 'Le score minimal doit être plus grand que 0.';
$string['missing_attribute'] = 'Attribut {$a->attr} manquant dans la balise {$a->tag}';
$string['missing_tag'] = 'Balise {$a->tag} manquante';
$string['missingparam'] = 'Un paramètre requis est manquant ou incorrect';
$string['mode'] = 'Mode';
$string['modulename'] = 'Paquetage SCORM';
$string['modulename_help'] = 'Un paquetage SCORM est constitué d’un ensemble de fichiers assemblés suivant un standard défini pour les objets d’apprentissages. Le module d’activité SCORM permet de déposer des paquetages SCORM ou AICC sous la forme d’archives ZIP et de les ajouter à un cours.

Le contenu est en principe affiché sur plusieurs pages avec une navigation permettant de passer d’une page à l’autre. Il y a diverses options d’affichage, dans une fenêtre surgissante, avec une table des matières, avec des boutons de navigation, etc. Les activités SCORM comportent en général des questions et les notes sont enregistrées dans le carnet de notes.

Les activités SCORM peuvent être utilisées :

* pour présenter des contenus multimédias et des animations
* comme outil d’évaluation';
$string['modulename_link'] = 'mod/scorm/view';
$string['modulenameplural'] = 'Paquetages SCORM';
$string['myaiccsessions'] = 'Mes sessions AICC';
$string['myattempts'] = 'Mes tentatives';
$string['nav'] = 'Afficher la navigation';
$string['nav_help'] = 'Ce réglage détermine si les boutons de la navigation doivent être affichés ou non et leur position.

Il y a 3 possibilités :

* Non – ne pas afficher les boutons de navigation
* Sous le contenu – afficher les boutons de navigation au-dessous du contenu du paquetage SCORM
* Flottant – permet de spécifier manuellement la position des boutons de navigation à partir du haut et de la gauche relativement à la fenêtre.';
$string['navdesc'] = 'Ce réglage détermine si les boutons de la navigation doivent être affichés ou non, et leur position.';
$string['navigation'] = 'Navigation';
$string['navpositionleft'] = 'Position des boutons de navigation depuis la gauche (en pixels)';
$string['navpositiontop'] = 'Position des boutons de navigation depuis le haut (en pixels)';
$string['networkdropped'] = 'Le lecteur SCORM a détecté que votre connexion Internet n’est pas fiable ou a été interrompue. Si vous continuez dans cette activité SCORM, il est possible que votre progression ne soit pas enregistrée.<br />
Nous vous recommandons de sortir de l’activité maintenant, et d’y revenir lorsque vous disposerez d’une connexion Internet fiable.';
$string['newattempt'] = 'Commencer une nouvelle tentative';
$string['next'] = 'Continuer';
$string['no_attributes'] = 'La balise {$a->tag} doit avoir des attributs';
$string['no_children'] = 'La balise {$a->tag} doit avoir des descendants';
$string['noactivity'] = 'Aucune activité';
$string['noattemptsallowed'] = 'Nombre de tentatives permises';
$string['noattemptsmade'] = 'Nombre de tentatives effectuées';
$string['nolimit'] = 'Tentatives illimitées';
$string['nomanifest'] = 'Paquetage non valide. Pas de fichier imsmanifest.xml ni de structure AICC';
$string['noprerequisites'] = 'Désolé ! Vous n’avez pas obtenu les prérequis suffisants pour accéder à cette activité.';
$string['noreports'] = 'Pas de rapport à afficher';
$string['normal'] = 'Normal';
$string['noscriptnoscorm'] = 'Votre navigateur ne prend pas en charge Javascript ou celui-ci est désactivé. Ce paquetage SCORM ne fonctionnera pas correctement et le suivi des participants ne sera pas enregistré.';
$string['not_corr_type'] = 'Erreur de type pour la balise {$a->tag}';
$string['notattempted'] = 'Aucune tentative';
$string['notopenyet'] = 'Désolé, cette activité n’est pas disponible avant le {$a}';
$string['objectives'] = 'Objectifs';
$string['openafterclose'] = 'Vous avez indiqué une date d’ouverture postérieure à la date de fermeture.';
$string['optallstudents'] = 'Tous les utilisateurs';
$string['optattemptsonly'] = 'Seulement les utilisateurs avec tentatives';
$string['options'] = 'Options (bloqué par certains navigateurs)';
$string['optionsadv'] = 'Options (avancées)';
$string['optionsadv_desc'] = 'Si ce réglage est coché, la hauteur et la largeur seront listés comme réglages avancés.';
$string['optnoattemptsonly'] = 'Seulement les utilisateurs sans tentative';
$string['organization'] = 'Organisation';
$string['organizations'] = 'Organisations';
$string['othersettings'] = 'Réglages supplémentaires';
$string['package'] = 'Fichier paquetage';
$string['package_help'] = 'Un paquetage est un seul fichier d’extension .zip (ou .pif) qui contient les fichiers de description du cours SCORM/AICC.';
$string['packagedir'] = 'Erreur du système de fichier : impossible de créer le dossier du paquetage';
$string['packagefile'] = 'Pas de paquetage spécifié';
$string['packagehdr'] = 'Paquetage';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Ce réglage permet de spécifier une URL pour le paquetage SCORM, au lieu de choisir un paquetage dans le sélecteur de fichiers.';
$string['page-mod-scorm-x'] = 'Toute page du module SCORM';
$string['pagesize'] = 'Taille de page';
$string['passed'] = 'Réussi';
$string['php5'] = 'PHP 5 (bibliothèque DOMXML native)';
$string['pluginadministration'] = 'Administration paquetage SCORM';
$string['pluginname'] = 'Paquetage SCORM';
$string['popup'] = 'Nouvelle fenêtre';
$string['popuplaunched'] = 'Ce paquetage SCORM a été lancé dans une fenêtre surgissante. Si vous avez terminé le travail avec cette ressource, cliquez ici pour revenir à la page du cours.';
$string['popupmenu'] = 'Dans un menu déroulant';
$string['popupopen'] = 'Ouvrir le paquetage dans une nouvelle fenêtre';
$string['popupsblocked'] = 'Il semble que les fenêtres surgissantes sont bloquées, ce qui a stoppé l’exécution de ce SCORM. Veuillez vérifier les réglages de votre navigateur avant de recommencer.';
$string['position_error'] = 'La balise {$a->tag} ne peut pas être un descendant de la balise {$a->parent}';
$string['preferencespage'] = 'Préférences de cette seule page';
$string['preferencesuser'] = 'Préférences de ce rapport';
$string['prev'] = 'Précédent';
$string['privacy:metadata:aicc:data'] = 'Données personnelles passées depuis le sous-système AICC/SCORM.';
$string['privacy:metadata:aicc:externalpurpose'] = 'Ce plugin transmet des données à l’aide de AICC HACP.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'Le statut du SCORM suivi';
$string['privacy:metadata:aicc_session:scormmode'] = 'Le mode de l’élément suivi';
$string['privacy:metadata:aicc_session:scormstatus'] = 'Le statut de l’élément suivi';
$string['privacy:metadata:aicc_session:sessiontime'] = 'La durée de la session suivie';
$string['privacy:metadata:aicc_session:timecreated'] = 'La date et l’heure de création de l’élément suivi';
$string['privacy:metadata:attempt'] = 'Le numéro de la tentative';
$string['privacy:metadata:scoes_track:element'] = 'Le nom de l’élément suivi';
$string['privacy:metadata:scoes_track:value'] = 'La valeur de l’élément donné';
$string['privacy:metadata:scorm_aicc_session'] = 'Les informations de session du HACP AICC';
$string['privacy:metadata:scorm_attempt'] = 'Les tentatives SCORM effectuées par un utilisateur';
$string['privacy:metadata:timemodified'] = 'La date et l’heure de la dernière modification de l’élément suivi';
$string['privacy:metadata:userid'] = 'L’identifiant de l’utilisateur qui a accédé à l’activité SCORM';
$string['protectpackagedownloads'] = 'Protéger le téléchargement des paquetages';
$string['protectpackagedownloads_desc'] = 'Si ce réglage est activé, les paquetages SCORM ne peuvent être téléchargés que par les utilisateurs possédant la capacité course:manageactivities. Dans le cas contraire, les paquetages SCORM peuvent être toujours téléchargés.';
$string['raw'] = 'Score brut';
$string['regular'] = 'Descriptif normal';
$string['report'] = 'Rapport';
$string['reportcountallattempts'] = '{$a->nbattempts} tentatives pour {$a->nbusers} utilisateurs, sur {$a->nbresults} résultats';
$string['reportcountattempts'] = '{$a->nbresults} résultats ({$a->nbusers} utilisateurs)';
$string['reports'] = 'Rapports';
$string['repositorynotsupported'] = 'Ce dépôt ne permet pas les liens directs vers un fichier imsmanifest.xml.';
$string['response'] = 'Réponse donnée';
$string['result'] = 'Résultat';
$string['results'] = 'Résultats';
$string['review'] = 'Relecture';
$string['reviewmode'] = 'Mode relecture';
$string['rightanswer'] = 'Réponse correcte';
$string['scoes'] = 'Objets d’apprentissage';
$string['score'] = 'Résultat';
$string['scorm:addinstance'] = 'Ajouter un paquetage SCORM';
$string['scorm:deleteownresponses'] = 'Supprimer ses propres tentatives';
$string['scorm:deleteresponses'] = 'Supprimer les tentatives SCORM';
$string['scorm:savetrack'] = 'Enregistrer les traces';
$string['scorm:skipview'] = 'Passer la vue d’ensemble';
$string['scorm:viewreport'] = 'Consulter les rapports';
$string['scorm:viewscores'] = 'Voir les scores';
$string['scormclose'] = 'Disponible jusqu’au';
$string['scormcourse'] = 'Cours d’apprentissage';
$string['scormloggingoff'] = 'Le journal d’API est désactivé';
$string['scormloggingon'] = 'Le journal API est activé';
$string['scormopen'] = 'Disponible depuis le';
$string['scormresponsedeleted'] = 'Tentative supprimées de l’utilisateur';
$string['scormstandard'] = 'Mode standards SCORM';
$string['scormstandarddesc'] = 'Si ce réglage est désactivé, Moodle autorise l’enregistrement dans les paquetages SCORM 1.2 de plus de données que ce qui est permis par la spécification, et utilise le réglage de Moodle pour le nom complet lors de la transmission des noms d’utilisateurs au paquetage SCORM.';
$string['scormtype'] = 'Type';
$string['scormtype_help'] = 'Ce réglage détermine comment le paquetage est inclus dans le cours. Il y a au maximum 4 options.

* Paquetage déposé : le paquetage SCORM peut être choisi dans le sélecteur de fichiers.
* Manifeste SCORM externe : permet d’indiquer l’URL d’un fichier imsmanifest.xml. Si l’URL est dans un autre domaine que le site Moodle, l’option Paquetage téléchargé est mieux adaptée, car sinon les notes ne seraient pas enregistrées.
* Paquetage téléchargé : permet d’indiquer l’URL d’un paquetage SCORM externe. Le paquetage sera décompressé et enregistré localement, et mis à jour si le paquetage externe est modifié.
* External AICC URL : cette URL est l’URL permettant de lancer une activité AICC. Un pseudo paquetage sera construit autour de cette activité.';
$string['scrollbars'] = 'Permettre le défilement de la fenêtre';
$string['search:activity'] = 'Paquet SCORM – information sur l’activité';
$string['selectall'] = 'Tout sélectionner';
$string['selectnone'] = 'Tout désélectionner';
$string['show'] = 'Afficher';
$string['sided'] = 'Sur le côté';
$string['skipview'] = 'Cacher la structure du contenu aux étudiants';
$string['skipview_help'] = 'Ce réglage détermine si la structure du contenu est cachée aux étudiants. Si le paquetage ne contient qu’un seul objet d’apprentissage. Si la page ne contient qu’un seul objet d’apprentissage, l’affichage de la page de structure de contenu pourrait toujours être sautée. Si l’option d’affichage est « jamais », la structure du contenu sera donc montrée à chaque accès. Il est possible de choisir de ne montrer la structure que lors du premier accès, en choisissant « Toujours, sauf la première fois ».

Notez que ce réglage n’a d’effet que pour les étudiants.';
$string['skipviewdesc'] = 'Ce réglage détermine si la structure du contenu est par défaut cachée aux étudiants';
$string['slashargs'] = 'ATTENTION ! Le réglage <em>slasharguments</em> est désactivé. Les objets SCORM ne fonctionneront pas correctement !';
$string['stagesize'] = 'Taille cadre/fenêtre';
$string['stagesize_help'] = 'Ces deux paramètres déterminent les dimensions (hauteur et largeur) du cadre ou de la fenêtre de l’objet d’apprentissage.';
$string['started'] = 'Démarré le';
$string['status'] = 'État';
$string['statusbar'] = 'Afficher la barre d’état';
$string['student_response'] = 'Réponse du participant';
$string['subplugintype_scormreport'] = 'Rapport';
$string['subplugintype_scormreport_plural'] = 'Rapports';
$string['suspended'] = 'Suspendu';
$string['syntax'] = 'Erreur de syntaxe';
$string['tag_error'] = 'Balise inconnue ({$a->tag}) avec ce contenu : {$a->value}';
$string['time'] = 'Durée';
$string['title'] = 'Titre';
$string['toc'] = 'TOC';
$string['too_many_attributes'] = 'La balise {$a->tag} a trop d’attributs';
$string['too_many_children'] = 'La balise {$a->tag} a trop de descendants';
$string['toolbar'] = 'Afficher la barre d’outils';
$string['totaltime'] = 'Durée';
$string['trackcorrectcount'] = 'Compte correct';
$string['trackcorrectcount_help'] = 'Nombre de résultats corrects pour la question';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'Ceci est l’identifiant de cette question défini par votre paquetage SCORM. La spécification SCORM ne permet pas de fournir l’intégralité du texte de la question.';
$string['trackingloose'] = 'Attention ! Les données de progression de ce paquetage seront perdues !';
$string['tracklatency'] = 'Latence';
$string['tracklatency_help'] = 'Durée entre l’instant où l’interaction était disponible pour une réponse du participant et l’instant de la première réponse';
$string['trackpattern'] = 'Modèle';
$string['trackpattern_help'] = 'La réponse correcte à cette question. N’affiche pas la réponse donnée par le participant.';
$string['trackresponse'] = 'Réponse';
$string['trackresponse_help'] = 'La réponse donnée à cette question par le participant';
$string['trackresult'] = 'Résultat';
$string['trackresult_help'] = 'Résultat basé sur la réponse du participant et le résultat correct';
$string['trackscoremax'] = 'Score maximal';
$string['trackscoremax_help'] = 'Valeur maximum de l’intervalle pour le score brut';
$string['trackscoremin'] = 'Score minimal';
$string['trackscoremin_help'] = 'Valeur minimum de l’intervalle pour le score brut';
$string['trackscoreraw'] = 'Score brut';
$string['trackscoreraw_help'] = 'Nombre qui reflète la performance du participant relativement à l’intervalle défini par les valeurs min et max';
$string['tracksuspenddata'] = 'Données de suspension';
$string['tracksuspenddata_help'] = 'Fournit de la place pour enregistrer et récupérer les données entre les sessions du participant';
$string['tracktime'] = 'Durée';
$string['tracktime_help'] = 'Heure du début de la tentative';
$string['tracktype'] = 'Type';
$string['tracktype_help'] = 'Le type de question, par exemple « Choix » ou « Réponse courte ».';
$string['trackweight'] = 'Pondération';
$string['trackweight_help'] = 'Pondération attribuée à l’élément';
$string['type'] = 'Type';
$string['typeaiccurl'] = 'URL AICC externe';
$string['typeexternal'] = 'Manisfeste SCORM externe';
$string['typelocal'] = 'Paquetage déposé';
$string['typelocalsync'] = 'Paquetage téléchargé';
$string['undercontent'] = 'Sous le contenu';
$string['unziperror'] = 'Une erreur est survenue lors du décompactage du paquetage';
$string['updatefreq'] = 'Fréquence de mise à jour';
$string['updatefreq_error'] = 'La fréquence de mise à jour automatique ne peut être définie que si le paquetage est hébergé à l’externe.';
$string['updatefreq_help'] = 'Ceci permet de télécharger et de mettre à jour automatiquement le paquetage externe';
$string['updatefreqdesc'] = 'Ce réglage détermine la valeur par défaut de la fréquence de la mise à jour automatique de l’activité';
$string['validateascorm'] = 'Valider un paquetage';
$string['validation'] = 'Résultat de la validation';
$string['validationtype'] = 'Ce réglage détermine la bibliothèque DOMXML utilisée pour la validation du fichier « manifest » des SCORM. Si vous ne savez pas de quoi il s’agit, ne modifiez pas la valeur.';
$string['value'] = 'Valeur';
$string['versionwarning'] = 'La version du fichier « manifest » est antérieure à 1.3, avertissement à la balise {$a->tag}';
$string['viewallreports'] = 'Afficher les rapports des {$a} tentatives';
$string['viewalluserreports'] = 'Afficher les rapports des {$a} utilisateurs';
$string['whatgrade'] = 'Évaluation des tentatives';
$string['whatgrade_help'] = 'Si plusieurs tentatives sont autorisées, ce réglage détermine le résultat à intégrer au carnet de notes, entre la tentative la plus élevée, la moyenne, la première ou la dernière. L’option prenant en compte la dernière tentative ne gère pas les tentatives avec un statut d’échec.

Traitement des tentatives multiples

* L’option de commencer une nouvelle tentative est fournie par une case à cocher au-dessus du bouton Entrée sur la page de la structure du contenu. Veuillez vous assurer de fournir l’accès à cette page si vous voulez autoriser les tentatives multiples.
* Si certains paquetages SCORM peuvent traiter les nouvelles tentatives, la plupart d’entre eux n’en sont pas capables. Cela signifie que si un participant commence une nouvelle tentative et que le paquetage SCORM n’est pas capable d’éviter que les tentatives précédentes ne soient écrasées, celles-ci pourraient être écrasées même si la tentative est marquée comme terminée ou réussie.
* Les réglages « Imposer de terminer », « Imposer une nouvelle tentative » et « Verrouiller après la tentative finale » permettent en outre de mieux gérer les tentatives multiples.';
$string['whatgradedesc'] = 'Ce réglage détermine quelle note est enregistrée dans le carnet de notes lorsque de multiples tentatives sont autorisées : la plus haute, la moyenne des tentatives ou la dernière.';
$string['width'] = 'Largeur';
$string['window'] = 'Fenêtre';
$string['youmustselectastatus'] = 'Vous devez choisir un statut à requérir';
