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
 * Strings for component 'tool_monitor', language 'fr', branch 'MOODLE_28_STABLE'
 *
 * @package   tool_monitor
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Ajouter une règle';
$string['allevents'] = 'Tous les événements';
$string['allmodules'] = 'Toutes les instances';
$string['area'] = 'Zone';
$string['areatomonitor'] = 'Zone à surveiller';
$string['cachedef_eventsubscriptions'] = 'Liste des abonnements aux événements pour chaque cours';
$string['contactadmin'] = 'Veuillez contacter l\'administrateur du Moodle pour l\'activer.';
$string['core'] = 'Cœur';
$string['currentsubscriptions'] = 'Vos abonnements actuels';
$string['defaultmessagetemplate'] = 'Règle : {rulename}<br />
Description : {description}<br />
Nom de l\'événement : {eventname}';
$string['deleterule'] = 'Supprimer la règle';
$string['deletesubscription'] = 'Résilier l\'abonnement';
$string['description'] = 'Description';
$string['disablefieldswarning'] = 'Certains champs ne peuvent pas être modifié, car cette règle a des abonnés.';
$string['duplicaterule'] = 'Dupliquer la règle';
$string['editrule'] = 'Modifier la règle';
$string['enablehelp'] = 'Activer/désactiver la surveillance d\'événements';
$string['enablehelp_help'] = 'La surveillance d\'événements doit être activée pour permettre de créer et s\'abonner à des règles. L\'activation de la surveillance d\'événements peut affecter la performance de votre site.';
$string['errorincorrectevent'] = 'Veuillez sélectionner un événement en lien avec le plugin sélectionné';
$string['event'] = 'Événement';
$string['eventnotfound'] = 'Événement introuvable';
$string['eventrulecreated'] = 'Règle créée';
$string['eventruledeleted'] = 'Règle supprimée';
$string['eventruleupdated'] = 'Règle modifiée';
$string['eventsubcreated'] = 'Abonnement créé';
$string['eventsubcriteriamet'] = 'Critère d\'abonnement rempli';
$string['eventsubdeleted'] = 'Abonnement résilié';
$string['freqdesc'] = '{$a->freq} fois en {$a->mins} minute(s)';
$string['frequency'] = 'Seuil de notification';
$string['frequency_help'] = 'Le nombre d\'événements devant avoir lieu dans un intervalle de temps spécifié pour qu\'un message de notification soit envoyé.';
$string['inminutes'] = 'en minutes';
$string['invalidmodule'] = 'Module non valide';
$string['manage'] = 'Gérer';
$string['managerules'] = 'Règles de surveillance d\'événements';
$string['manageruleslink'] = 'Vous pouvez gérer les règles sur la page {$a}.';
$string['managesubscriptions'] = 'Surveillance d\'événements';
$string['managesubscriptionslink'] = 'Vous pouvez vous abonner à des règles sur la page {$a}.';
$string['messageprovider:notification'] = 'Notifications d\'abonnement à des règles';
$string['messagetemplate'] = 'Message de notification';
$string['messagetemplate_help'] = 'Un message est envoyé aux abonnés lorsque le seuil de notification est atteint. Ce message peut inclure les paramètres fictifs suivants :
<br /><br />
* {link} - lien vers l\'emplacement de l\'événement<br />
* {modulelink} - lien vers la zone surveillée<br />
* {rulename} - nom de la règle <br />
* {description} - description de la règle <br />
* {eventname} - nom de l\'événement';
$string['moduleinstance'] = 'Instance';
$string['monitordisabled'] = 'La surveillance d\'événements est actuellement désactivée.';
$string['monitorenabled'] = 'La surveillance d\'événements est actuellement activée.';
$string['monitor:managerules'] = 'Gérer les règles de surveillance d\'événements';
$string['monitor:managetool'] = 'Activer/désactiver la surveillance d\'événements';
$string['monitor:subscribe'] = 'S\'abonner à des règles de surveillance d\'événements';
$string['nopermission'] = 'Pas de permission';
$string['norules'] = 'Il n\'y a pas de règle de surveillance d\'événement.';
$string['pluginname'] = 'Surveillance d\'événements';
$string['processevents'] = 'Traiter les événements';
$string['ruleareyousure'] = 'Voulez-vous vraiment supprimer la règle « {$a} » ?';
$string['ruleareyousureextra'] = 'Les abonnements à cette règle seront également supprimés. Il y a actuellement {$a} abonnement(s).';
$string['rulecopysuccess'] = 'Règle dupliquée';
$string['ruledeletesuccess'] = 'Règle supprimée';
$string['rulehelp'] = 'Infos détaillées de la règle';
$string['rulehelp_help'] = 'Cette règle surveille si l\'événement « {$a->eventname} » dans « {$a->moduleinstance} » est déclenché {$a->frequency} fois durant un intervalle de {$a->minutes} minute(s).';
$string['rulename'] = 'Nom de la règle';
$string['rulenopermissions'] = 'Vous n\'avez pas la permission pour {$a} une règle.';
$string['rulescansubscribe'] = 'Règles auxquelles vous pouvez vous abonner';
$string['selectacourse'] = 'Sélectionnez un cours';
$string['selectcourse'] = 'Visitez ce rapport dans un cours pour obtenir la liste des modules disponibles';
$string['subareyousure'] = 'Voulez-vous vraiment résilier l\'abonnement à la règle « {$a} » ?';
$string['subcreatesuccess'] = 'Abonnement créé';
$string['subdeletesuccess'] = 'Abonnement résilié';
$string['subhelp'] = 'Infos détaillées de l\'abonnement';
$string['subhelp_help'] = 'Cet abonnement surveille si l\'événement « {$a->eventname} »  dans « {$a->moduleinstance} » est déclenché {$a->frequency} fois durant un intervalle de {$a->minutes} minute(s).';
$string['subscribeto'] = 'S\'inscrire à la règle « {$a} »';
$string['taskcleanevents'] = 'Suppression des événements surveillés superflus';
$string['unsubscribe'] = 'Se désabonner';
