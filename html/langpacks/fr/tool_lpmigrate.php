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
 * Strings for component 'tool_lpmigrate', language 'fr', version '4.1'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Cours autorisés';
$string['allowedcourses_help'] = 'Sélectionner les cours à migrer vers le nouveau référentiel de compétences. Si aucun cours n\'est indiqué, tous les cours seront migrés.';
$string['continuetoframeworks'] = 'Continuer vers les référentiels';
$string['coursecompetencymigrations'] = 'Migration de compétences de cours';
$string['coursemodulecompetencymigrations'] = 'Migration de compétences des activités et ressources de cours';
$string['coursemodulesfound'] = 'Activités et ressources de cours trouvés';
$string['coursesfound'] = 'Cours trouvés';
$string['coursestartdate'] = 'Date de début du cours';
$string['coursestartdate_help'] = 'Si ce réglage est activé, les cours dont la date de début est antérieure à celle indiquée ne seront pas migrés.';
$string['disallowedcourses'] = 'Cours non autorisés';
$string['disallowedcourses_help'] = 'Sélectionner les cours qui ne doivent pas être migrés vers le nouveau référentiel de compétences.';
$string['errorcannotmigratetosameframework'] = 'Impossible de migrer depuis et vers le même référentiel.';
$string['errorcouldnotmapcompetenciesinframework'] = 'Impossible de faire correspondre à aucune compétence de ce référentiel.';
$string['errors'] = 'Erreurs';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Erreur lors de la migration de la compétence de cours : {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Erreur lors de la migration de la compétence d\'activité ou de ressource : {$a}';
$string['excludethese'] = 'Exclure';
$string['explanation'] = 'Cet outil peut être utilisé pour mettre à jour un référentiel de compétences vers une nouvelle version. Il recherche dans les cours et les activités les compétences utilisant l\'ancien référentiel et met à jour les liens de sorte à pointer vers le nouveau référentiel.

Il n\'est pas recommandé de modifier directement l\'ancien référentiel de compétences, car cela modifierait toutes les compétences qui ont déjà été marquées comme acquises dans les plans de formation des utilisateurs.

Une utilisation typique de cet outil commence par importer la nouvelle version d\'un référentiel, cacher l\'ancienne version, puis utiliser cet outil pour migrer les nouveaux cours vers le nouveau référentiel.';
$string['findingcoursecompetencies'] = 'Recherche des compétences de cours';
$string['findingmodulecompetencies'] = 'Recherche des compétences d\'activités et de ressources';
$string['frameworks'] = 'Référentiels';
$string['limittothese'] = 'Seulement pour les cours';
$string['lpmigrate:frameworksmigrate'] = 'Migrer les référentiels';
$string['migrateframeworks'] = 'Migrer les référentiels';
$string['migratefrom'] = 'Migrer depuis';
$string['migratefrom_help'] = 'Sélectionner l\'ancien référentiel actuellement utilisé.';
$string['migratemore'] = 'Migrer plus';
$string['migrateto'] = 'Migrer vers';
$string['migrateto_help'] = 'Sélectionner la nouvelle version du référentiel. Il n\'est pas possible de sélectionner un référentiel caché.';
$string['migratingcourses'] = 'Migration de cours';
$string['missingmappings'] = 'Correspondances manquantes';
$string['performmigration'] = 'Effectuer la migration';
$string['pluginname'] = 'Outil de migration de compétences';
$string['privacy:metadata'] = 'Le plugin Outil de migration de compétences n\'enregistre aucune donnée personnelle.';
$string['results'] = 'Résultats';
$string['startdatefrom'] = 'Date de début dès le';
$string['unmappedin'] = 'Non correspondant dans {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'Cette compétence de cours n\'a pas pu être retirée.';
$string['warningcouldnotremovemodulecompetency'] = 'La compétence d\'activité ou de ressource n\'a pas pu être retirée.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'La compétence de cours de destination existe déjà.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'La compétence d\'activité ou de ressource de destination existe déjà.';
$string['warnings'] = 'Avertissements';
