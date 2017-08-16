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
 * Strings for component 'logstore_legacy', language 'fr', branch 'MOODLE_32_STABLE'
 *
 * @package   logstore_legacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlegacylogged'] = 'Événement obsolète enregistré';
$string['loglegacy'] = 'Enregistrer les données dans la table obsolète';
$string['loglegacy_help'] = 'Ce plugin enregistre les données d\'historiques dans la table d\'historiques obsolète (mdl_log). Cette fonctionnalité a été remplacée par des plugins plus riches et plus efficients. Par conséquent, ce plugin ne devrait être employé que si vous utilisez d\'anciens rapports personnalisés qui font appel directement à l\'ancienne table. L\'écriture d\'historiques à l\'aide de ce plugin augmentera la charge serveur. Il est donc vivement recommandé de le désactiver.';
$string['pluginname'] = 'Historiques obsolètes';
$string['pluginname_desc'] = 'Un plugin qui enregistre les historiques dans la table obsolète de la base de données.';
$string['taskcleanup'] = 'Nettoyage de la table d\'historiques obsolète';
