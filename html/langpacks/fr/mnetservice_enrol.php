<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'mnetservice_enrol', language 'fr', branch 'MOODLE_38_STABLE'
 *
 * @package   mnetservice_enrol
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availablecourseson'] = 'Cours disponibles sur {$a}';
$string['availablecoursesonnone'] = 'Le serveur <a href="{$a->hosturl}">{$a->hostname}</a> n\'offre aucun cours à nos utilisateurs.';
$string['clientname'] = 'Client pour inscriptions à distance';
$string['clientname_help'] = 'Inscription et désinscription d\'utilisateurs de votre Moodle à des cours d\'autres serveurs Moodle.';
$string['editenrolments'] = 'Modifier les inscriptions';
$string['hostappname'] = 'Application';
$string['hostname'] = 'Nom du serveur';
$string['hosturl'] = 'URL du serveur';
$string['nopublishers'] = 'Aucun pair distant disponible.';
$string['noroamingusers'] = 'Pour s\'inscrire dans des cours distants, les utilisateurs doivent avoir la capacité « {$a} » dans le contexte système. Or il n\'y a actuellement aucun utilisateur avec cette capacité. Cliquer le bouton Continuer pour attribuer la capacité requise à l\'un ou plusieurs rôles de votre site.';
$string['otherenrolledusers'] = 'Autres utilisateurs inscrits';
$string['pluginname'] = 'Service d\'inscription à distance';
$string['privacy:metadata:mnetservice_enrol_enrolments'] = 'Service d\'inscription à distance';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltime'] = 'La date et l\'heure de la modification de l\'inscription';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltype'] = 'Le type d\'inscription sur le serveur distant, qui a été utilisé pour inscrire l\'utilisateur dans son cours';
$string['privacy:metadata:mnetservice_enrol_enrolments:hostid'] = 'L\'identifiant du serveur MNet distant';
$string['privacy:metadata:mnetservice_enrol_enrolments:remotecourseid'] = 'L\'identifiant du cours sur le serveur distant';
$string['privacy:metadata:mnetservice_enrol_enrolments:rolename'] = 'Le nom du rôle sur le serveur distant';
$string['privacy:metadata:mnetservice_enrol_enrolments:tableexplanation'] = 'Le Service d\'inscription à distance enregistre les informations sur les inscriptions d\'utilisateurs locaux dans des cours sur des serveurs distants.';
$string['privacy:metadata:mnetservice_enrol_enrolments:userid'] = 'L\'identifiant de l\'utilisateur local sur ce serveur';
$string['refetch'] = 'Mettre à jour l\'affichage des données des serveurs distants';
