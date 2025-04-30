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
 * Strings for component 'tool_health', language 'fr', version '4.4'.
 *
 * @package     tool_health
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['healthnoproblemsfound'] = 'Aucun problème n’a été détecté !';
$string['healthproblemsdetected'] = 'Problèmes d’intégrité détectés !';
$string['healthproblemsolution'] = 'Solution proposée';
$string['healthreturntomain'] = 'Continuer';
$string['healthsolution'] = 'Solution';
$string['pluginname'] = 'Diagnostic et aide à la résolution de problèmes';
$string['privacy:metadata'] = 'Le plugin Diagnostic et aide à la résolution de problèmes n’enregistre aucune donnée personnelle.';
$string['problem_000003_title'] = '$CFG->dataroot n’existe pas ou n’a pas les permissions en écriture';
$string['problem_000004_link_cron'] = 'Cron - MoodleDocs';
$string['problem_000004_solution'] = 'Pour des instructions détaillées sur la façon d’activer le cron, suivez le lien ci-dessous.';
$string['problem_000004_title'] = 'cron.php n’est pas configuré pour s’exécuter automatiquement';
$string['problem_000005_solution'] = 'Il existe deux façons de résoudre ce problème :';
$string['problem_000005_title'] = 'PHP : session.auto_start est activé';
$string['problem_000007_solution'] = 'Il existe deux façons de résoudre ce problème :';
$string['problem_000007_title'] = 'PHP : file_uploads est désactivé';
$string['problem_000008_solution'] = 'Il est recommandé de contacter votre administrateur du serveur web pour corriger ce problème.';
$string['problem_000008_title'] = 'PHP : memory_limit ne peut pas être contrôlé par Moodle';
$string['problem_000009_description_root'] = 'C’est particulièrement alarmant car un tel accès à la base de données serait comme super-utilisateur (root) !';
$string['problem_000009_solution'] = 'Vous devriez modifier le mot de passe de l’utilisateur {$a} dans votre base de données et dans votre fichier de configuration config.php immédiatement !';
$string['problem_000009_title'] = 'SQL : utilisation d’un compte sans mot de passe';
$string['problem_000012_solution'] = 'Mettez à jour vers Moodle 1.9.1, ou exécutez manuellement la requête SQL';
$string['problem_000012_title'] = 'Consistance des données des questions aléatoires';
$string['problem_000014_link_cron'] = 'Forum activité Test (en anglais)';
$string['problem_000016_description_child'] = 'Catégorie enfant';
$string['problem_000016_description_context'] = 'ID du contexte';
$string['problem_000016_description_id'] = 'ID';
$string['problem_000016_description_name'] = 'Nom';
$string['problem_000016_description_parent'] = 'Catégorie parent';
$string['problem_000016_link_cron'] = 'Forum activité Test (en anglais)';
