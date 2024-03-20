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
 * Strings for component 'block_massaction', language 'fr', version '4.1'.
 *
 * @package     block_massaction
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_contentchangednotification'] = 'Envoyer une notification de modification de contenu';
$string['action_delete'] = 'Supprimer';
$string['action_duplicate'] = 'Dupliquer';
$string['action_duplicatetocourse'] = 'Dupliquer vers un autre cours';
$string['action_duplicatetosection'] = 'Dupliquer vers section';
$string['action_hide'] = 'Masquer';
$string['action_hidedescription'] = 'Masquer la description';
$string['action_makeavailable'] = 'Rendre disponible';
$string['action_moveleft'] = 'Dés-indenter (déplacer à gauche)';
$string['action_moveright'] = 'Indenter (déplacer à droite)';
$string['action_movetosection'] = 'Déplacer vers section';
$string['action_show'] = 'Afficher';
$string['action_showdescription'] = 'Afficher la description';
$string['actionexecuted'] = 'L’action demandée a été exécutée.';
$string['applicablecourseformats'] = 'Formats de cours applicables.';
$string['applicablecourseformats_description'] = 'Le bloc Actions par lots sera uniquement disponible pour les formats de cours suivants. <br />Ceux présélectionnés par défaut ont été testés et sont supportés par le mainteneur du plugin. Ajoutez d’autres formats à votre propre risque.';
$string['backgroundtaskinformation'] = 'L’action demandée est exécutée en arrière-plan. Vous pouvez continuer votre travail en attendant que cela se termine.';
$string['blockname'] = 'Actions par lots';
$string['blocktitle'] = 'Actions par lots';
$string['choosecoursetoduplicateto'] = 'Choisir le cours vers lequel vous voulez dupliquer les modules de cours sélectionnés.';
$string['choosesectiontoduplicateto'] = 'Choisir la section vers laquelle vous voulez dupliquer les modules de cours sélectionnés.';
$string['choosetargetcourse'] = 'Choisir le cours de destination';
$string['choosetargetsection'] = 'Choisir la section de destination';
$string['confirmcourseselect'] = 'Choisir le cours';
$string['confirmsectionselect'] = 'Choisir la section';
$string['deletecheck'] = 'Confirmer la suppression par lots';
$string['deletecheckconfirm'] = 'Voulez-vous vraiment supprimer les modules suivants ?';
$string['deselectall'] = 'Tout désélectionner';
$string['duplicatemaxactivities'] = 'Nombre maximal de modules de cours à dupliquer';
$string['duplicatemaxactivities_description'] = 'Le nombre maximal de modules de cours qui peuvent être dupliqués en même temps sans lancer le processus en tâche de fond. Si défini à 0, toutes les duplications seront lancées en tâche de fond.';
$string['invalidaction'] = 'Action inconnue : {$a}';
$string['invalidcourseid'] = 'Id de cours invalide';
$string['invalidcoursemodule'] = 'Module de cours invalide';
$string['invalidmoduleid'] = 'Id du module invalide : {$a}';
$string['jsonerror'] = 'Erreur de codage : format JSON invalide';
$string['keepsectionnum'] = 'Conserver le numéro de section d’origine';
$string['limittoenrolled'] = 'Limiter la liste des cours de destination aux cours dans lesquels l’utilisateur est inscrit';
$string['limittoenrolled_description'] = 'Si activé, la sélection de cours de la fonctionnalité « Dupliquer vers un autre cours » sera limitée aux cours dans lesquels l’utilisateur est inscrit. Activer ceci est recommandé pour les instances avec de nombreux cours, car ne pas limiter cette liste pourrait engendrer des problèmes de performance et d’expiration de délai d’attente. Désactiver cette option est à votre propre risque.';
$string['massaction:addinstance'] = 'Ajouter un bloc « Actions par lots »';
$string['massaction:sendcontentchangednotifications'] = 'Envoyer une notification de modification de contenu';
$string['massaction:use'] = 'Utiliser le bloc Actions par lots';
$string['modulename'] = 'Nom de l’activité';
$string['moduletype'] = 'Type d’activité';
$string['multipleinstances'] = 'Il ne faut pas plusieurs instances de ce bloc sur la même page. <br />Veuillez supprimer les instances additionnelles.';
$string['newsection'] = 'Nouvelle section';
$string['noaction'] = 'Pas d’action spécifiée';
$string['noactionsavailable'] = 'Vous n’avez pas les permissions pour exécuter toutes les opérations possibles par ce bloc';
$string['nocaptobackup'] = 'Vous n’avez pas les permissions suffisantes pour effectuer une sauvegarde dans le cours';
$string['nocaptorestore'] = 'Vous n’avez pas les permissions suffisantes pour effectuer une restauration dans le cours';
$string['noitemselected'] = 'Merci de sélectionner au moins un élément pour appliquer l’action par lots';
$string['nomovingtargetselected'] = 'Veuillez sélectionner une section de destination';
$string['notargetcourseidspecified'] = 'Aucun identifiant de cours n’a été spécifié';
$string['pluginname'] = 'Actions par lots';
$string['privacy:metadata'] = 'Ce bloc permet d’appliquer des opérations standards sur de multiples modules d’un cours en même temps, mais il n’enregistre aucune donnée personnelle.';
$string['sectionnotexist'] = 'La section cible n’existe pas';
$string['sectionselect'] = 'Sélection de section';
$string['sectionselect_help'] = 'Vous pouvez seulement sélectionner les sections de cours qui intègrent au moins un module. De plus, avec le format Tuiles ou Une section par onglet, vous pouvez seulement sélectionner les sections actuellement visibles.';
$string['selectall'] = 'Tout sélectionner';
$string['selectallinsection'] = 'Tout sélectionner dans la section';
$string['sourcecourseidlost'] = 'L’identifiant de cours source est introuvable';
$string['unusable'] = 'La fonctionnalité d’action par lots ne peut pas être utilisée dans ce format de cours ou ce thème';
$string['usage'] = 'Aide Actions par lots';
$string['usage_help'] = '<p>Ce bloc permet aux enseignants d’effectuer des actions sur des ressources ou activités multiples dans l’espace de cours, plutôt que d’avoir à effectuer des actions répétées sur des éléments individuels.</p>
<p>Pour utiliser ce bloc, Javascript doit être activé dans votre navigateur et vous devez être en mode édition dans la page d’accueil du cours. Les formats de cours supportés sont : Hebdomadaire, Thématique, Tuiles, Sections réduites, Une section par onglet.</p>
<p>Les actions prises en charge incluent : la suppression, l’indentation / dés-indentation, le masquage / affichage et le déplacement.
Pour sélectionner des éléments afin d’y effectuer une action, il suffit de cliquer sur la case à gauche de ceux-ci sur la page du cours, ou vous pouvez sélectionner tous les éléments, ou sélectionner tous les éléments d’une section à l’aide du bloc. Pour effectuer une action, cliquez sur l’action que vous souhaitez effectuer à l’intérieur du bloc.</p>';
$string['withselected'] = 'Pour ce qui est sélectionné';
