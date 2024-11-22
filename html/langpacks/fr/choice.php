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
 * Strings for component 'choice', language 'fr', version '4.1'.
 *
 * @package     choice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoices'] = 'Ajouter d’autres propositions';
$string['allowmultiple'] = 'Permettre le choix de plusieurs réponses';
$string['allowupdate'] = 'Permettre la modification du choix';
$string['answered'] = 'Répondu';
$string['atleastoneoption'] = 'Vous devez fournir au moins une proposition de réponse.';
$string['calendarend'] = '{$a} se termine';
$string['calendarstart'] = '{$a} s’ouvre';
$string['cannotsubmit'] = 'Un problème est survenu lors de l’envoi de votre choix.';
$string['choice'] = 'Proposition';
$string['choice:addinstance'] = 'Ajouter un sondage';
$string['choice:choose'] = 'Répondre aux sondages';
$string['choice:deleteresponses'] = 'Modifier et supprimer les réponses';
$string['choice:downloadresponses'] = 'Télécharger les réponses';
$string['choice:readresponses'] = 'Consulter les réponses';
$string['choice:view'] = 'Consulter l’activité sondage';
$string['choiceclose'] = 'Permettre les réponses jusqu’au';
$string['choicefull'] = 'Une ou plusieurs des options choisies ont déjà été renseignées. Votre réponse n’a pas été enregistrée. Veuillez faire un autre choix.';
$string['choicename'] = 'Nom du sondage';
$string['choiceopen'] = 'Permettre les réponses dès le';
$string['choiceoptions'] = 'Options du sondage';
$string['choiceoptions_help'] = 'Vous indiquez ici les réponses possibles parmi lesquelles les participants auront à choisir.

Les champs non remplis ne seront pas affichés. Si vous désirez plus d’options, cliquez sur le bouton « Ajouter 3 champs au formulaire ».';
$string['choicesaved'] = 'Votre choix a été enregistré';
$string['choicetext'] = 'Texte de la question';
$string['chooseaction'] = 'Choisir une action…';
$string['chooseoption'] = 'Choisir : {$a}';
$string['closebeforeopen'] = 'La date de fermeture indiquée est antérieure à la date d’ouverture.';
$string['completiondetail:submit'] = 'Faire un choix';
$string['completionsubmit'] = 'Afficher comme terminé quand l’utilisateur a rempli le sondage';
$string['description'] = 'Description';
$string['deselectalloption'] = 'Désélectionner tous les « {$a} »';
$string['displayhorizontal'] = 'Afficher horizontalement';
$string['displaymode'] = 'Mode d’affichage des options';
$string['displayvertical'] = 'Afficher verticalement';
$string['eventanswercreated'] = 'Réponse possible ajoutée';
$string['eventanswerdeleted'] = 'Réponse à un sondage supprimée';
$string['eventanswersubmitted'] = 'Choix effectué';
$string['eventanswerupdated'] = 'Choix modifié';
$string['eventreportdownloaded'] = 'Rapport de sondage téléchargé';
$string['eventreportviewed'] = 'Rapport de sondage consulté';
$string['expired'] = 'Cette activité s’est terminée le {$a}.';
$string['full'] = '(complet)';
$string['havetologin'] = 'Vous devez vous connecter pour pouvoir répondre à ce sondage';
$string['includeinactive'] = 'Inclure les réponses des utilisateurs inactifs/suspendus';
$string['indicator:cognitivedepth'] = 'Sondage : aspect cognitif';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l’étudiant dans une activité Sondage.';
$string['indicator:cognitivedepthdef'] = 'Sondage : aspect cognitif';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint durant cet intervalle d’analyse ce pourcentage d’engagement cognitif offert par les activités « Sondage » (niveaux : pas de vue, vue, envoi, vue du feedback).';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Sondage : aspect social';
$string['indicator:socialbreadth_help'] = 'Cet indicateur se base sur l’interaction sociale atteinte par l’étudiant dans une activité Sondage.';
$string['indicator:socialbreadthdef'] = 'Sondage : aspect social';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint durant cet intervalle d’analyse ce pourcentage d’engagement social offert par les activités « Sondage » (niveaux : pas de participation, participant seul, participant avec d’autres).';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['limit'] = 'Limite';
$string['limita'] = 'Limite : {$a}';
$string['limitanswers'] = 'Limiter le nombre de réponses permises';
$string['limitanswers_help'] = 'Ce réglage vous permet de limiter le nombre de personnes pouvant sélectionner une option d’un sondage. Lorsque cette limite est atteinte, personne d’autre ne pourra plus choisir cette option.

Si vous utilisez cette activité avec des groupes, la limite est entendue par groupe. Par exemple, si la limite est 5, alors 5 membres de chaque groupe peut choisir l’option. S’il y a 3 groupes, cela signifie qu’il peut y avoir jusqu’à 5 x 3 = 15 participants qui choisissent l’option.

Si les limites sont désactivées, un nombre quelconque de participants pourra choisir chacune des options.';
$string['limitno'] = 'Limite {no}';
$string['modulename'] = 'Sondage';
$string['modulename_help'] = 'Le module d’activité sondage permet à un enseignant de poser une question et de proposer un choix de réponses possibles.

Les résultats du sondage peuvent être publiés après que les étudiants ont répondu, ou après une date, ou pas du tout. Ils peuvent être publiés avec ou sans les noms des étudiants (bien que les enseignants voient toujours les noms des étudiants et leur réponse).

Un sondage peut être utilisé pour :

* une question rapide afin de stimuler la réflexion sur un thème
* tester la compréhension des étudiants
* faciliter une décision par les étudiants, en leur permettant par exemple de choisir une direction pour la suite du cours';
$string['modulename_link'] = 'mod/choice/view';
$string['modulenameplural'] = 'Sondages';
$string['moveselectedusersto'] = 'Déplacer les utilisateurs sélectionnés vers…';
$string['multiplenotallowederror'] = 'Il n’est pas permis de fournir plusieurs réponses à ce sondage';
$string['mustchooseone'] = 'Vous devez sélectionner une réponse avant d’enregistrer. L’enregistrement n’a pas eu lieu.';
$string['noguestchoose'] = 'Désolé, les visiteurs anonymes ne peuvent pas participer aux sondages.';
$string['noresultsviewable'] = 'Les résultats ne sont actuellement pas visibles.';
$string['notanswered'] = 'Pas encore répondu';
$string['notenrolledchoose'] = 'Seuls les utilisateurs inscrits peuvent participer à un sondage.';
$string['notopenyet'] = 'Cette activité n’est pas disponible avant le {$a}.';
$string['numberofuser'] = 'Nombre de réponses';
$string['numberofuserinpercentage'] = 'Pourcentage de réponses';
$string['openafterclose'] = 'Vous avez indiqué une date d’ouverture postérieure à la date de fermeture.';
$string['option'] = 'Option';
$string['optionno'] = 'Option {no}';
$string['options'] = 'Options';
$string['page-mod-choice-x'] = 'Toute page du module sondage';
$string['pluginadministration'] = 'Administration du sondage';
$string['pluginname'] = 'Sondage';
$string['previewing'] = 'il s’agit d’une prévisualisation des options disponibles pour cette activité. Vous pourrez choisir une option lorsqu’elle sera ouverte.';
$string['previewonly'] = 'Cet affichage est une prévisualisation des options disponibles pour cette activité. Vous ne pourrez pas enregistrer votre choix avant le {$a}.';
$string['privacy'] = 'Confidentialité des résultats';
$string['privacy:metadata:choice_answers'] = 'Informations sur les réponses données par l’utilisateur à un sondage.';
$string['privacy:metadata:choice_answers:choiceid'] = 'L’dentifiant de l’activité sondage';
$string['privacy:metadata:choice_answers:optionid'] = 'L’identifiant de l’option que l’utilisateur à choisie.';
$string['privacy:metadata:choice_answers:timemodified'] = 'L’horodatage de la modification du sondage par l’utilisateur';
$string['privacy:metadata:choice_answers:userid'] = 'Identifiant de l’utilisateur répondant au sondage.';
$string['publish'] = 'Publication des résultats';
$string['publishafteranswer'] = 'Afficher les résultats aux étudiants après leur réponse';
$string['publishafterclose'] = 'N’afficher les résultats aux étudiants qu’une fois le sondage terminé';
$string['publishalways'] = 'Toujours afficher les résultats aux étudiants';
$string['publishanonymous'] = 'Publier les résultats anonymement, sans afficher le nom des étudiants';
$string['publishinfoanonafter'] = 'Les résultats seront publiés de façon anonyme après votre réponse.';
$string['publishinfoanonclose'] = 'Les résultats seront publiés de façon anonyme lorsque l’activité sera terminée.';
$string['publishinfofullafter'] = 'Les résultats complets, montrant les choix de chaque participant, seront publiés après votre réponse.';
$string['publishinfofullclose'] = 'Les résultats complets, montrant les choix de chaque participant, seront publiés lorsque l’activité sera terminée.';
$string['publishinfonever'] = 'Les résultats de cette activité ne seront pas publiés après votre réponse.';
$string['publishnames'] = 'Publier les résultats complets, avec le nom des étudiants et leur choix';
$string['publishnot'] = 'Ne pas publier les résultats pour les étudiants';
$string['removemychoice'] = 'Retirer mon vote';
$string['removeresponses'] = 'Supprimer toutes les réponses';
$string['responses'] = 'Réponses';
$string['responsesa'] = 'Réponses : {$a}';
$string['responsesresultgraphheader'] = 'Affichage graphique';
$string['responsesto'] = 'Réponses à {$a}';
$string['results'] = 'Résultats';
$string['savemychoice'] = 'Enregistrer mon choix';
$string['search:activity'] = 'Sondage – information sur l’activité';
$string['selectalloption'] = 'Sélectionner tous les « {$a} »';
$string['showavailable'] = 'Afficher les places disponibles';
$string['showavailable_help'] = 'Afficher aux étudiants le nombre de places disponibles pour chaque option et le nombre de réponses déjà reçues.';
$string['showpreview'] = 'Afficher la prévisualisation';
$string['showpreview_help'] = 'Permettre aux étudiants de prévisualiser les options disponibles avant l’ouverture de l’enregistrement des choix du sondage.';
$string['showunanswered'] = 'Afficher la colonne des « sans réponse »';
$string['spaceleft'] = 'place disponible';
$string['spacesleft'] = 'places disponibles';
$string['taken'] = 'Effectué';
$string['userchoosethisoption'] = 'Utilisateurs qui ont choisi l’option';
$string['viewallresponses'] = 'Voir les {$a} réponses';
$string['viewchoices'] = 'Afficher les choix';
$string['withselected'] = 'Avec la sélection';
$string['yourselection'] = 'Votre choix';
