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
 * Strings for component 'tool_task', language 'fr', version '4.1'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'Ad hoc';
$string['adhocempty'] = 'La file d’attente des tâches ad hoc est vide';
$string['adhocqueueold'] = 'La plus ancienne tâche a {$a->age} et dépasse {$a->max}';
$string['adhocqueuesize'] = 'La file d’attente des tâches ad hoc compte {$a} tâches';
$string['adhoctaskid'] = 'ID de tâche ad hoc : {$a}';
$string['adhoctasks'] = 'Tâches ad hoc';
$string['asap'] = 'ASAP';
$string['backtoscheduledtasks'] = 'Retour aux tâches programmées';
$string['blocking'] = 'Blocage';
$string['cannotfindthepathtothecli'] = 'Impossible de trouver le chemin vers le programme « PHP CLI », c’est pourquoi l’exécution de la tâche a été interrompue. Spécifiez le chemin d’accès à « PHP CLI » dans Administration de site / Serveur / Chemins système.';
$string['checkadhocqueue'] = 'File d’attente des tâches ad hoc';
$string['checkcronrunning'] = 'Lancement du cron';
$string['checkmaxfaildelay'] = 'Délai max d’échec de tâche';
$string['classname'] = 'Nom de classe';
$string['clearfaildelay_confirm'] = 'Voulez-vous vraiment supprimer le délai d’échec de la tâche « {$a} » ? Après avoir supprimé ce délai, la tâche sera lancée selon sa planification normale.';
$string['component'] = 'Composant';
$string['corecomponent'] = 'Cœur';
$string['crondisabled'] = 'Le cron est désactivé. Aucune nouvelle tâche ne sera lancée. Le système ne fonctionnera pas correctement tant que le cron ne sera pas de nouveau activé.';
$string['cronok'] = 'Le cron est lancé fréquemment';
$string['default'] = 'Défaut';
$string['defaultx'] = 'Par défaut : {$a}';
$string['disabled'] = 'Désactivé';
$string['disabled_help'] = 'Les tâches programmées désactivées ne sont pas lancées par le cron, mais peuvent cependant être lancées manuellement via l’outil CLI.';
$string['edittaskschedule'] = 'Modifier la programmation de la tâche : {$a}';
$string['enablerunnow'] = 'Permettre de lancer immédiatement les tâches programmées';
$string['enablerunnow_desc'] = 'Ce réglage permet aux administrateurs de lancer une tâche programmée immédiatement, plutôt que d’attendre son lancement tel que programmé. Cette fonctionnalité nécessite la définition du chemin d’accès à PHP CLI (pathtophp) dans les chemins système. La tâche se lance sur le serveur web, c’est pourquoi il peut être préférable de désactiver cette fonctionnalité pour éviter d’éventuels problèmes de performance.';
$string['faildelay'] = 'Délai d’échec';
$string['fromcomponent'] = 'Du composant : {$a}';
$string['hostname'] = 'Nom d’hôte';
$string['lastcronstart'] = 'Durée depuis le dernier lancement du cron : {$a}';
$string['lastruntime'] = 'Dernière exécution';
$string['lastupdated'] = 'Dernière mise à jour : {$a}';
$string['nextruntime'] = 'Prochaine exécution';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'Plugin désactivé';
$string['pluginname'] = 'Configuration des tâches programmées';
$string['privacy:metadata'] = 'Le plugin Configuration des tâches programmées n’enregistre aucune donnée personnelle.';
$string['resettasktodefaults'] = 'Revenir à la programmation par défaut';
$string['resettasktodefaults_help'] = 'Cette action supprimera toutes les modifications et configurera la programmation de cette tâche à ses réglages par défaut.';
$string['runagain'] = 'Relancer';
$string['runningtasks'] = 'Tâches en cours actuellement';
$string['runnow'] = 'Lancer maintenant';
$string['runnow_confirm'] = 'Voulez-vous vraiment lancer la tâche « {$a} » maintenant ? La tâche sera lancée sur le serveur web et prendra un certain temps à s’effectuer.';
$string['runpattern'] = 'Modèle d’exécution';
$string['scheduled'] = 'Programmée';
$string['scheduledtaskchangesdisabled'] = 'Des modifications à la liste des tâches programmées ont été bloquées dans la configuration de Moodle';
$string['scheduledtasks'] = 'Tâches programmées';
$string['started'] = 'Lancée';
$string['taskdisabled'] = 'Tâche désactivée';
$string['taskfailures'] = '{$a} tâche(s) en erreur';
$string['tasklogs'] = 'Journaux des tâches programmées';
$string['tasknofailures'] = 'Aucune tâche n’est en erreur';
$string['taskscheduleday'] = 'Jour';
$string['taskscheduleday_help'] = 'Champ jour du mois pour la programmation des tâches. Le champ utilise la même syntaxe que le cron Unix. Voici quelques exemples :

* <strong>*</strong> Tous les jours
* <strong>*/2</strong> Tous les 2 jours
* <strong>1</strong> Le 1er jour de chaque mois
*<strong>1,15</strong> Le 1er et le 15 de chaque mois';
$string['taskscheduledayofweek'] = 'Jour de la semaine';
$string['taskscheduledayofweek_help'] = 'Champ jour de la semaine pour la programmation des tâches. Le champ utilise la même syntaxe que le cron Unix. Voici quelques exemples :

* <strong>*</strong> Tous les jours
* <strong>0</strong> Tous les dimanches
* <strong>6</strong> Tous les samedis
* <strong>1,5</strong> Tous les lundis et vendredis';
$string['taskschedulehour'] = 'Heure';
$string['taskschedulehour_help'] = 'Champ heure pour la programmation des tâches. Le champ utilise la même syntaxe que le cron Unix. Voici quelques exemples :

* <strong>*</strong> Toutes les heures
* <strong>*/2</strong> Toutes les 2 heures
* <strong>2-10</strong> Toutes les heures, entre 2 h et 10 h (incluses)
* <strong>2,13,19</strong> À 2 h, 13 h et 19 h';
$string['taskscheduleminute'] = 'Minute';
$string['taskscheduleminute_help'] = 'Champ minute pour la programmation des tâches. Le champ utilise la même syntaxe que le cron Unix. Voici quelques exemples :

* <strong>*</strong> Toutes les minutes
* <strong>*/5</strong> Toutes les 5 minutes
* <strong>2-10</strong> Toutes les minutes entre 2 et 10 (incluses) après toutes les heures
* <strong>2,26,49</strong> 2, 26 et 49 minutes après toutes les heures';
$string['taskschedulemonth'] = 'Mois';
$string['taskschedulemonth_help'] = 'Champ mois pour la programmation des tâches. Le champ utilise la même syntaxe que le cron Unix. Voici quelques exemples :

* <strong>*</strong> Tous les mois
* <strong>*/2</strong> Tous les 2 mois
* <strong>1</strong> Au mois de janvier
* <strong>4,11</strong> Aux mois d’avril et de novembre';
$string['viewlogs'] = 'Consulter les journaux pour {$a}';
