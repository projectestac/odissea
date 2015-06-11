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
 * Strings for component 'logstore_database', language 'fr', branch 'MOODLE_28_STABLE'
 *
 * @package   logstore_database
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Taille du tampon';
$string['buffersize_help'] = 'Le nombre d\'entrées de l\'historique insérées au cours d\'une opération de base de données (ce qui améliore la performance).';
$string['conectexception'] = 'Connexion impossible à la base de données';
$string['create'] = 'Créer';
$string['databasecollation'] = 'Collation de base de données';
$string['databasepersist'] = 'Connexions persistantes à la base de données';
$string['databaseschema'] = 'Schéma de base de données';
$string['databasesettings'] = 'Réglages de base de données';
$string['databasesettings_help'] = 'Configuration de la connexion pour la base de données externe de l\'historique : {$a}';
$string['databasetable'] = 'Table de base de données';
$string['databasetable_help'] = 'Nom de la table dans laquelle les historiques seront stockés. Cette table doit avoir une structure identique à celle utilisée par tablelogstore_standard (mdl_logstore_standard_log).';
$string['filters'] = 'Filtrer les historiques';
$string['filters_help'] = 'Activer des filtres qui empêchent certaines actions d\'être consignées dans les historiques.';
$string['includeactions'] = 'Inclure les actions de ces types';
$string['includelevels'] = 'Inclure les interactions de ces types';
$string['logguests'] = 'Enregistrer les actions des utilisateurs anonymes';
$string['other'] = 'Autre';
$string['participating'] = 'Participation';
$string['pluginname'] = 'Historique dans base de données externe';
$string['pluginname_desc'] = 'Un plugin permettant l\'enregistrement des historiques dans une table d\'une base de données externes.';
$string['read'] = 'Lire';
$string['tablenotfound'] = 'La table indiquée n\'a pas été trouvée';
$string['teaching'] = 'Enseignement';
$string['testingsettings'] = 'Test des paramètres de la base de données...';
$string['testsettings'] = 'Test de connexion';
$string['update'] = 'Modifier';
