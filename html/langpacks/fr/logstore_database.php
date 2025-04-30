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
 * Strings for component 'logstore_database', language 'fr', version '4.4'.
 *
 * @package     logstore_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Taille du tampon';
$string['buffersize_help'] = 'Le nombre d’entrées de journal insérées au cours d’une même opération de base de données (ce qui améliore la performance).';
$string['conectexception'] = 'Connexion impossible à la base de données';
$string['create'] = 'Créer';
$string['databasecollation'] = 'Collation de base de données';
$string['databasehandlesoptions'] = 'La base de données gère des options';
$string['databasehandlesoptions_help'] = 'Indique si la base de données distante gère ses propres options.';
$string['databasepersist'] = 'Connexions persistantes à la base de données';
$string['databaseschema'] = 'Schéma de base de données';
$string['databasesettings'] = 'Réglages de base de données';
$string['databasesettings_help'] = 'Configuration de la connexion pour la base de données du journal externe : {$a}';
$string['databasetable'] = 'Table de base de données';
$string['databasetable_help'] = 'Nom de la table dans laquelle les journaux seront stockés. Cette table doit avoir une structure identique à celle utilisée par la table logstore_standard (mdl_logstore_standard_log).';
$string['filters'] = 'Filtrer les journaux';
$string['filters_help'] = 'Activer des filtres qui empêchent certaines actions d’être consignées dans les journaux.';
$string['includeactions'] = 'Inclure les actions de ces types';
$string['includelevels'] = 'Inclure les interactions de ces types';
$string['jsonformat'] = 'Format JSON';
$string['jsonformat_desc'] = 'Utiliser pour le champ de base de données « other » le format standard JSON au lieu des données PHP sérialisées.';
$string['logguests'] = 'Enregistrer les actions des utilisateurs anonymes';
$string['other'] = 'Autre';
$string['participating'] = 'Participation';
$string['pluginname'] = 'Journal dans base de données externe';
$string['pluginname_desc'] = 'Un plugin permettant l’enregistrement des journaux dans une table d’une base de données externes.';
$string['privacy:metadata:log'] = 'Une collection des événements passés';
$string['privacy:metadata:log:anonymous'] = 'Si l’événement a été marqué comme anonyme';
$string['privacy:metadata:log:eventname'] = 'Le nom de l’événement';
$string['privacy:metadata:log:ip'] = 'L’adresse IP utilisée au moment de l’événement';
$string['privacy:metadata:log:origin'] = 'L’origine de l’événement';
$string['privacy:metadata:log:other'] = 'Informations supplémentaires sur l’événement';
$string['privacy:metadata:log:realuserid'] = 'L’identifiant de l’utilisateur réel de l’événement, lorsqu’un utilisateur est masqué.';
$string['privacy:metadata:log:relateduserid'] = 'L’identifiant d’un utilisateur en lien avec cet événement';
$string['privacy:metadata:log:timecreated'] = 'La date et l’heure de la survenue de l’événement';
$string['privacy:metadata:log:userid'] = 'L’identifiant de l’utilisateur qui a déclenché cet événement';
$string['read'] = 'Lire';
$string['tablenotfound'] = 'La table indiquée n’a pas été trouvée';
$string['teaching'] = 'Enseignement';
$string['testingsettings'] = 'Test des paramètres de la base de données…';
$string['testsettings'] = 'Test de connexion';
$string['update'] = 'Modifier';
