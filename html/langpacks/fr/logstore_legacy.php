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
 * Strings for component 'logstore_legacy', language 'fr', version '4.1'.
 *
 * @package     logstore_legacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlegacylogged'] = 'Événement obsolète enregistré';
$string['loglegacy'] = 'Enregistrer les données dans la table obsolète';
$string['loglegacy_help'] = 'Ce plugin enregistre les journaux dans la table de journaux obsolètes (mdl_log). Cette fonctionnalité a été remplacée par des plugins plus riches et plus efficients. Par conséquent, ce plugin ne devrait être employé que si vous utilisez d\'anciens rapports personnalisés qui font appel directement à l\'ancienne table. L\'écriture de journaux à l\'aide de ce plugin augmentera la charge serveur. Il est donc vivement recommandé de le désactiver.';
$string['pluginname'] = 'Journaux obsolètes';
$string['pluginname_desc'] = 'Un plugin qui enregistre les journaux dans la table des journaux obsolètes de la base de données.';
$string['privacy:metadata:log'] = 'Une collection des événements passés';
$string['privacy:metadata:log:action'] = 'Une description de l\'action';
$string['privacy:metadata:log:info'] = 'Informations additionnelles';
$string['privacy:metadata:log:ip'] = 'L\'adresse IP utilisée au moment de l\'événement';
$string['privacy:metadata:log:time'] = 'La date et l\'heure à laquelle l\'action a eu lieu';
$string['privacy:metadata:log:url'] = 'L\'URL liée à l\'événement';
$string['privacy:metadata:log:userid'] = 'L\'identifiant de l\'utilisateur qui a effectué l\'action';
$string['taskcleanup'] = 'Nettoyage de la table de journaux obsolètes';
