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
 * Strings for component 'tool_task', language 'fr', branch 'MOODLE_31_STABLE'
 *
 * @package   tool_task
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'ASAP';
$string['blocking'] = 'Blocage';
$string['component'] = 'Composant';
$string['corecomponent'] = 'Cœur';
$string['default'] = 'Défaut';
$string['disabled'] = 'Désactivé';
$string['disabled_help'] = 'Les tâches programmées désactivées ne sont pas lancées par le cron, mais peuvent cependant être lancées manuellement via l\'outil CLI.';
$string['edittaskschedule'] = 'Modifier la programmation de la tâche : {$a}';
$string['faildelay'] = 'Échec de délai';
$string['lastruntime'] = 'Dernière exécution';
$string['nextruntime'] = 'Prochaine exécution';
$string['plugindisabled'] = 'Plugin désactivé';
$string['pluginname'] = 'Configuration des tâches programmées';
$string['resettasktodefaults'] = 'Revenir à la programmation par défaut';
$string['resettasktodefaults_help'] = 'Cette action supprimera toutes les modifications et configurera la programmation de cette tâche à ses réglages par défaut.';
$string['scheduledtaskchangesdisabled'] = 'Des modifications à la liste des tâches programmées ont été bloquées dans la configuration de Moodle';
$string['scheduledtasks'] = 'Tâches programmées';
$string['taskdisabled'] = 'Tâche désactivée';
$string['taskscheduleday'] = 'Jour';
$string['taskscheduleday_help'] = 'Champ jour du mois pour la programmation des tâches. Le champ utilise la même syntaxe que le cron Unix. Voici quelques exemples :<br/>
<ul>
<li><strong>*</strong> Tous les jours</li>
<li><strong>*/2</strong> Tous les 2 jours</li>
<li><strong>1</strong> Le 1er jour de chaque mois</li>
<li><strong>1,15</strong> Le 1er et le 15 de chaque mois</li>
</ul>';
$string['taskscheduledayofweek'] = 'Jour de la semaine';
$string['taskscheduledayofweek_help'] = 'Champ jour de la semaine pour la programmation des tâches. Le champ utilise la même syntaxe que le cron Unix. Voici quelques exemples :<br/>
<ul>
<li><strong>*</strong> Tous les jours</li>
<li><strong>0</strong> Tous les dimanches</li>
<li><strong>6</strong> Tous les samedis</li>
<li><strong>1,5</strong> Tous les lundis et vendredis</li>
</ul>';
$string['taskschedulehour'] = 'Heure';
$string['taskschedulehour_help'] = 'Champ heure pour la programmation des tâches. Le champ utilise la même syntaxe que le cron Unix. Voici quelques exemples :<br/>
<ul>
<li><strong>*</strong> Toutes les heures</li>
<li><strong>*/2</strong> Toutes les 2 heures</li>
<li><strong>2-10</strong> Toutes les heures, entre 2 h et 10 h (incluses)</li>
<li><strong>2,13,19</strong> À 2 h, 13 h et 19 h</li>
</ul>';
$string['taskscheduleminute'] = 'Minute';
$string['taskscheduleminute_help'] = 'Champ heure pour la programmation des tâches. Le champ utilise la même syntaxe que le cron Unix. Voici quelques exemples :<br/>
<ul>
<li><strong>*</strong> Toutes les minutes</li>
<li><strong>*/5</strong> Toutes les 5 minutes</li>
<li><strong>2-10</strong> Toutes les minutes 2 et 10 après toutes les heures (incluses)</li>
<li><strong>2,26,49</strong> 2, 26 et 49 minutes après toutes les heures</li>
</ul>';
$string['taskschedulemonth'] = 'Mois';
$string['taskschedulemonth_help'] = 'Champ mois pour la programmation des tâches. Le champ utilise la même syntaxe que le cron Unix. Voici quelques exemples :<br/>
<ul><li><strong>*</strong> Tous les mois</li>
<li><strong>*/2</strong> Tous les 2 mois</li>
<li><strong>1</strong> Au mois de janvier</li>
<li><strong>4,11</strong> Aux mois d\'avril et de novembre</li>
</ul>';
