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
 * Strings for component 'assignsubmission_mahara', language 'fr', version '4.1'.
 *
 * @package     assignsubmission_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assign_submission_mahara_description'] = 'Les fonctions Mahara utlisées dans le devoir Mahara.<br />La publication de ce service sur un site Moodle n’a pas d’effet. Abonnez-vous à ce service si vous désirez utiliser les devoirs avec {$a}.<br />';
$string['assign_submission_mahara_name'] = 'Services Remises de devoir Mahara';
$string['collectionsby'] = 'Collections de {$a}';
$string['defaultlockpages'] = 'Défaut « {$a} »';
$string['defaultlockpages_help'] = 'Paramétrage par défaut à utiliser pour le paramètre « {$a} » dans les nouveaux devoirs Mahara.';
$string['defaulton'] = 'Activé par défaut';
$string['defaulton_help'] = 'Si activé, la méthode de remise sera activée par défaut pour tous nouveaux devoirs.';
$string['defaultsite'] = 'Défaut « {$a} »';
$string['defaultsite_help'] = 'Paramétrage par défaut à utiliser pour le paramètre « {$a} » dans les nouveaux devoirs Mahara.';
$string['emptysubmission'] = 'Vous n’avez pas choisi de page pour la remise.';
$string['enabled'] = 'Portfolio Mahara';
$string['enabled_help'] = 'Si activé, les étudiants pourront remettre des pages Mahara sur Moodle pour évaluation. Le site Mahara doit être déjà configuré avec un réseau mnet avec ce site Moodle.';
$string['errorinvalidhost'] = 'ID d’hôte invalide sélectionné';
$string['errorinvalidstatus'] = 'Erreur développeur: Statut de remise invalide envoyé à assign_submission_mahara::set_mahara_submission_status()';
$string['errormnetrequest'] = 'Tentative d’envoi de la requête mnet s’est soldée par une erreur: {$a}';
$string['errorvieworcollectionalreadysubmitted'] = 'L’affichage ou la collection Mahara sélectionnée n’a pu être envoyée. Veuillez en choisir une autre.';
$string['eventassessableuploaded'] = 'Une page ou collection a été soumise.';
$string['lockpages'] = 'Verrouiller les pages soumises';
$string['lockpages_help'] = 'Si "Oui, garder verrouillé" est sélectionné, les pages et collections soumises depuis Mahara y seront verrouillées, et le resteront après évaluation. Si "Oui, mais déverrouiller après évaluation" est sélectionné, les pages et collections soumises depuis Mahara seront déverrouillées après évaluation ou, lors de l’utilisation d’un flux d’évaluation, lors de la publication des évaluations aux participants.';
$string['mahara'] = 'Portfolio Mahara';
$string['nomaharahostsfound'] = 'Il n’y a pas de serveur Mahara disponible.';
$string['noneselected'] = 'Aucune sélectionnée';
$string['noviewscreated'] = 'Vous n’avez pas de pages ou collections. Veuillez <a target="_blank" href="{$a->jumpurl}">cliquer ici</a> pour afficher "{$a->name}" et en créer une nouvelle.';
$string['option_collections'] = 'Collections';
$string['option_views'] = 'Affichages';
$string['outputforlog'] = '{$a->remotehostname}: {$a->viewtitle} (view id: {$a->viewid})';
$string['outputforlognew'] = 'Nouvelle {$a} remise.';
$string['pluginname'] = 'Portfolio Mahara';
$string['previousattemptsnotvisible'] = 'Les tentatives précédentes avec le module de remise Mahara ne sont pas visibles.';
$string['privacy:metadata:assignment'] = 'L’identifiant du devoir';
$string['privacy:metadata:assignsubmission_mahara'] = 'Enregistre les informations au sujet des pages et collections Mahara envoyées à l’évaluation';
$string['privacy:metadata:iscollection'] = 'Indique si l’envoi à évaluation est une page ou une collection';
$string['privacy:metadata:submission'] = 'L’identifiant de l’envoi à évaluation';
$string['privacy:metadata:viewid'] = 'L’identifiant de la page ou de la collection Mahara';
$string['privacy:metadata:viewstatus'] = 'Le statut de la page ou de la collection Mahara';
$string['privacy:metadata:viewtitle'] = 'Le titre de la page ou de la collection Mahara';
$string['privacy:metadata:viewurl'] = 'L’URL de la page ou de la collection Mahara';
$string['privacy:path'] = 'Pages et collections Mahara';
$string['selectmaharaview'] = 'Sélectionnez une de vos pages ou collections dans la liste ci-dessous, ou <a target="_blank" href="{$a->jumpurl}">cliquez ici</a> pour accéder à « {$a->name} » et créer une nouvelle page ou collection.';
$string['site'] = 'Site';
$string['site_help'] = 'Ce paramètre vous permet de sélectionner à partir de quel site Mahara les étudiants pourront remettre leurs pages.';
$string['viewsby'] = 'Pages de {$a}';
$string['yeskeeplocked'] = 'Oui, garder verrouillé';
$string['yesunlock'] = 'Oui, mais déverrouiller après évaluation';
