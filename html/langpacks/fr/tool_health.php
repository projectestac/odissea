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
 * Strings for component 'tool_health', language 'fr', version '4.5'.
 *
 * @package     tool_health
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['category_loop_parents'] = 'Les catégories suivantes forment une boucle de catégories parentes :';
$string['category_missing_parents'] = 'Les catégories suivantes n\'ont plus de catégories parentes :';
$string['healthnoproblemsfound'] = 'Aucun problème n’a été détecté !';
$string['healthproblemsdetected'] = 'Problèmes d’intégrité détectés !';
$string['healthproblemsolution'] = 'Solution proposée';
$string['healthreturntomain'] = 'Continuer';
$string['healthsolution'] = 'Solution';
$string['pluginname'] = 'Diagnostic et aide à la résolution de problèmes';
$string['privacy:metadata'] = 'Le plugin Diagnostic et aide à la résolution de problèmes n’enregistre aucune donnée personnelle.';
$string['problem_000002_description'] = 'Votre fichier de configuration Moodle config.php ou un autre fichier de bibliothèque contient certains caractères après la balise PHP de fermeture (?>). Cela provoque plusieurs types de problèmes dans Moodle (tels que des fichiers téléchargés corrompus) et doit être corrigé.';
$string['problem_000002_solution'] = 'Vous devez modifier {$a}/config.php et supprimer tous les caractères (y compris les espaces et les retours à la ligne) après la balise de fin ?>. Ces deux caractères doivent être les derniers du fichier. Les espaces supplémentaires à la fin peuvent également être présents dans d\'autres fichiers PHP inclus dans lib/setup.php.';
$string['problem_000002_title'] = 'Caractères supplémentaires à la fin du fichier config.php ou d\'une autre fonction de bibliothèque';
$string['problem_000003_description'] = 'Votre fichier config.php indique que votre répertoire « racine » est {$a}. Cependant, ce répertoire n\'existe pas ou Moodle ne peut pas y écrire. Cela signifie que divers problèmes vont se poser, tels que l\'impossibilité pour les utilisateurs de se connecter et de télécharger des fichiers. Il est impératif que vous résolviez ce problème pour que Moodle fonctionne correctement.';
$string['problem_000003_solution'] = 'Tout d\'abord, assurez-vous que le répertoire {$a} existe. Si le répertoire existe, vous devez vous assurer que Moodle est en mesure d\'y écrire. Contactez l\'administrateur de votre serveur web et demandez-lui d\'accorder les droits d\'écriture pour ce répertoire à l\'utilisateur sous lequel le processus du serveur web est exécuté.';
$string['problem_000003_title'] = '$CFG->dataroot n’existe pas ou n’a pas les permissions en écriture';
$string['problem_000004_description'] = 'Le script de maintenance cron.php n\'a pas été exécuté à l\'intervalle prévu, qui peut être défini via $CFG->expectedcronfrequency. Cela signifie probablement que votre serveur n\'est pas configuré pour exécuter automatiquement ce script à intervalles réguliers. Si tel est le cas, Moodle fonctionnera normalement dans l\'ensemble, mais certaines opérations (notamment l\'envoi d\'e-mails aux utilisateurs) ne seront pas effectuées.';
$string['problem_000004_link_cron'] = 'Cron - MoodleDocs';
$string['problem_000004_solution'] = 'Pour des instructions détaillées sur la façon d’activer le cron, suivez le lien ci-dessous.';
$string['problem_000004_title'] = 'cron.php n’est pas configuré pour s’exécuter automatiquement';
$string['problem_000005_description'] = 'Votre configuration PHP comprend un paramètre activé, session.auto_start, qui doit être désactivé pour que Moodle fonctionne correctement. Les symptômes notables résultant de cette mauvaise configuration comprennent des erreurs fatales et/ou des pages blanches lors de la tentative de connexion.';
$string['problem_000005_solution'] = 'Il existe deux façons de résoudre ce problème :';
$string['problem_000005_solution_step_one'] = 'Si vous avez accès à votre fichier php.ini principal, recherchez la ligne qui ressemble à ceci : « session.auto_start = 1 » et remplacez-la par « session.auto_start = 0 », puis redémarrez votre serveur web. Attention, comme toute autre modification des paramètres PHP, cela peut affecter d\'autres applications web fonctionnant sur le serveur.';
$string['problem_000005_solution_step_two'] = 'Enfin, vous pouvez modifier ce paramètre uniquement pour votre site en créant ou en modifiant le fichier {$a}/.htaccess afin qu\'il contienne la ligne suivante : « php_value session.auto_start 0 ».';
$string['problem_000005_title'] = 'PHP : session.auto_start est activé';
$string['problem_000007_description'] = 'Votre configuration PHP comprend un paramètre désactivé, file_uploads, qui doit être activé pour permettre à Moodle d\'offrir toutes ses fonctionnalités. Tant que ce paramètre n\'est pas activé, il ne sera pas possible de télécharger des fichiers dans Moodle. Cela inclut, par exemple, le contenu des cours et les photos des utilisateurs.';
$string['problem_000007_solution'] = 'Il existe deux façons de résoudre ce problème :';
$string['problem_000007_solution_step_one'] = 'Si vous avez accès à votre fichier php.ini principal, recherchez la ligne qui ressemble à ceci : « file_uploads = Off » et remplacez-la par « file_uploads = On », puis redémarrez votre serveur web. Attention, comme toute autre modification des paramètres PHP, cela peut affecter d\'autres applications web fonctionnant sur le serveur.';
$string['problem_000007_solution_step_two'] = 'Enfin, vous pouvez modifier ce paramètre uniquement pour votre site en créant ou en modifiant le fichier {$a}/.htaccess afin qu\'il contienne la ligne suivante : « php_value file_uploads On ».';
$string['problem_000007_title'] = 'PHP : file_uploads est désactivé';
$string['problem_000008_description'] = 'Les paramètres PHP de votre serveur ne permettent pas à un script de demander davantage de mémoire pendant son exécution. Cela signifie qu\'il existe une limite stricte de {$a} pour chaque script. Il est possible que certaines opérations dans Moodle nécessitent davantage de mémoire pour s\'exécuter correctement, en particulier si elles impliquent le traitement d\'un volume important de données.';
$string['problem_000008_solution'] = 'Il est recommandé de contacter votre administrateur du serveur web pour corriger ce problème.';
$string['problem_000008_title'] = 'PHP : memory_limit ne peut pas être contrôlé par Moodle';
$string['problem_000009_description'] = 'Le compte utilisateur que vous utilisez pour vous connecter au serveur de base de données est configuré sans mot de passe. Cela représente un risque très important pour la sécurité, qui n\'est que légèrement atténué si votre base de données est configurée pour n\'accepter aucune connexion provenant d\'autres hôtes que celui sur lequel Moodle est exécuté. À moins d\'utiliser un mot de passe fort pour vous connecter à la base de données, vous risquez que vos données soient consultées et manipulées sans autorisation.';
$string['problem_000009_description_root'] = 'C’est particulièrement alarmant car un tel accès à la base de données serait comme super-utilisateur (root) !';
$string['problem_000009_solution'] = 'Vous devriez modifier le mot de passe de l’utilisateur {$a} dans votre base de données et dans votre fichier de configuration config.php immédiatement !';
$string['problem_000009_solution_root'] = 'Il serait également judicieux de changer le compte utilisateur root pour un autre, car cela réduirait l\'impact en cas de compromission de votre base de données.';
$string['problem_000009_title'] = 'SQL : utilisation d’un compte sans mot de passe';
$string['problem_000012_description'] = 'Pour les questions aléatoires, question.parent doit être égal à question.id. Certaines questions de votre base de données ne respectent pas cette règle. Cela peut s\'expliquer par la restauration de questions aléatoires à partir d\'une sauvegarde avant la correction du bug MDL-5482.';
$string['problem_000012_solution'] = 'Mettez à jour vers Moodle 1.9.1, ou exécutez manuellement la requête SQL';
$string['problem_000012_title'] = 'Consistance des données des questions aléatoires';
$string['problem_000014_description'] = 'Votre base de données contient des questions qui enfreignent cette règle. Vous devrez mener une enquête pour déterminer comment cela s\'est produit.';
$string['problem_000014_link_cron'] = 'Forum activité Test (en anglais)';
$string['problem_000014_solution'] = 'Il est impossible de donner une solution sans en savoir plus sur la cause du problème. Vous pourrez peut-être obtenir de l\'aide sur le forum Quiz.';
$string['problem_000014_title'] = 'Seules les questions à réponses multiples et aléatoires peuvent être à l\'origine d\'une autre question.';
$string['problem_000016_description'] = 'Lorsqu\'une catégorie de questions est la catégorie parente d\'une autre, elles doivent toutes deux appartenir au même contexte. Cela ne s\'applique pas aux catégories suivantes :';
$string['problem_000016_description_child'] = 'Catégorie enfant';
$string['problem_000016_description_context'] = 'ID du contexte';
$string['problem_000016_description_id'] = 'ID';
$string['problem_000016_description_name'] = 'Nom';
$string['problem_000016_description_parent'] = 'Catégorie parent';
$string['problem_000016_link_cron'] = 'Forum activité Test (en anglais)';
$string['problem_000016_solution'] = 'Une solution automatisée est difficile à mettre en place. Cela dépend si la catégorie parent ou enfant est au mauvais endroit. Les membres du forum Quiz pourront peut-être vous aider.';
$string['problem_000016_title'] = 'Les catégories de questions doivent appartenir au même contexte que leur catégorie parente.';
$string['problem_000017_description'] = 'Les catégories de questions doivent être organisées en arborescences à l\'aide du champ question_categories.parent. Il arrive parfois que cette arborescence soit désorganisée.';
$string['problem_000017_solution'] = 'Il faut envisager d\'exécuter les requêtes SQL suivantes. Elles permettent de résoudre le problème en déplaçant certaines catégories vers le niveau supérieur.';
$string['problem_000017_title'] = 'Arborescence des catégories de questions';
$string['problem_000018_description'] = 'Les catégories de cours doivent être organisées en arborescences à l\'aide du champ course_categories.parent. Il arrive parfois que cette arborescence soit perturbée.';
$string['problem_000018_solution'] = 'Il faut envisager d\'exécuter les requêtes SQL suivantes. Elles permettent de résoudre le problème en déplaçant certaines catégories vers le niveau supérieur.';
$string['problem_000018_title'] = 'Arborescence des catégories de cours';
