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
 * Strings for component 'googlemeet', language 'fr', version '4.4'.
 *
 * @package     googlemeet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkweekdays'] = 'Sélectionner les jours de la semaine qui se situent dans la plage de dates choisie.';
$string['date'] = 'Date';
$string['duration'] = 'Durée';
$string['earlierto'] = 'La date de l’événement ne peut être antérieure à la date de début du cours ({$a}).';
$string['emailcontent'] = 'Contenu du courriel';
$string['emailcontent_default'] = '<p>Bonjour %userfirstname%,</p>
<p>Nous vous rappelons qu’il y aura un événement Google meet à %coursename%</p>
<p><b>%googlemeetname%</b></p>
<p>Détails : %eventdate% %duration% %timezone%</p>
<p>Lien : %url%</p>';
$string['emailcontent_help'] = 'Lorsqu’une notification est envoyée à un étudiant, elle reprend le contenu du courriel dans ce champ. Les jokers suivants peuvent être utilisés :
<ul>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%coursename%</li>
<li>%googlemeetname%</li>
<li>%eventdate%</li>
<li>%duration%</li>
<li>%timezone%</li>
<li>%url%</li>
<li>%cmid%</li>
</ul>';
$string['entertheroom'] = 'Accéder à la salle';
$string['eventdate'] = 'Date de l’événement';
$string['googlemeet:addinstance'] = 'Ajouter une salle Google Meet™ pour Moodle';
$string['googlemeet:editrecording'] = 'Éditer les enregistrements';
$string['googlemeet:removerecording'] = 'Effacer les enregistrements';
$string['googlemeet:syncgoogledrive'] = 'Synchroniser avec Google Drive';
$string['googlemeet:view'] = 'View Google Meet™ for Moodle content';
$string['hide'] = 'Cacher';
$string['invalideventenddate'] = 'Cette date ne peut être antérieure à la « Date de l’événement ».';
$string['invalideventendtime'] = 'L’heure de fin doit être postérieure à l’heure de début';
$string['invalidstoredurl'] = 'Impossible d’afficher cette ressource ; l’URL de Google Meet n’est pas valide.';
$string['jstableinfo'] = 'Affichage des enregistrements de {start} à {end} des {rows}';
$string['jstableinfofiltered'] = 'Affichage du {start} au {end} des enregistrements de {rows} (enregistrements filtrés de {rowsTotal})';
$string['jstableloading'] = 'Chargement…';
$string['jstablenorows'] = 'Aucun enregistrement trouvé';
$string['jstableperpage'] = '{select} enregistrements par page';
$string['jstablesearch'] = 'Recherche…';
$string['lastsync'] = 'Dernière synchronisation :';
$string['loading'] = 'Chargement';
$string['messageprovider:notification'] = 'Rappel du début de l’événement Google Meet';
$string['minutesbefore'] = 'Minutes avant';
$string['minutesbefore_help'] = 'Nombre de minutes avant le début de l’événement pour laquelle la notification doit être envoyée.';
$string['modulename'] = 'Google Meet™ pour Moodle';
$string['modulenameplural'] = 'Google Meet™ pour les instances Moodle';
$string['multieventdateexpanded'] = 'Extension de la date de récurrence de l’événement';
$string['multieventdateexpanded_desc'] = 'Afficher les paramètres « Récurrence de la date de l’événement » tels que développés par défaut lors de la création d’une nouvelle salle.';
$string['name'] = 'Nom';
$string['never'] = 'Jamais';
$string['notification'] = 'Notification';
$string['notificationexpanded'] = 'Notification élargie';
$string['notify'] = 'Envoyer la notification à l’étudiant';
$string['notify_help'] = 'Si coché, une notification sera envoyée à l’étudiant concernant la date de début de l’événement.';
$string['notifycationexpanded_desc'] = 'Afficher les paramètres de « Notification » tels que développés par défaut lors de la création d’une nouvelle salle.';
$string['notifytask'] = 'Google Meet™ pour la tâche de notification Moodle';
$string['or'] = 'ou';
$string['play'] = 'Jouer';
$string['pluginadministration'] = 'Google Meet™ pour l’administration Moodle';
$string['pluginname'] = 'Google Meet™ pour Moodle';
$string['privacy:metadata:googlemeet_notify_done'] = 'Ce plugin enregistre les notifications envoyées aux utilisateurs concernant le début des événements. Ces données sont temporaires et sont supprimées après la date de début de l’événement.';
$string['privacy:metadata:googlemeet_notify_done:eventid'] = 'ID de l’événement';
$string['privacy:metadata:googlemeet_notify_done:timesent'] = 'Horodatage indiquant quand l’utilisateur a reçu une notification';
$string['privacy:metadata:googlemeet_notify_done:userid'] = 'ID de l’utilisateur';
$string['recording'] = 'Enregistrement';
$string['recordings'] = 'Enregistrements';
$string['recordingswiththename'] = 'Enregistrements avec le nom :';
$string['recurrenceeventdate'] = 'Récurrence de la date de l’événement';
$string['repeatasfollows'] = 'Répéter la date de l’événement ci-dessus comme suit';
$string['repeatevery'] = 'Répéter chaque';
$string['repeaton'] = 'Répéter les';
$string['repeatuntil'] = 'Répéter jusqu’au';
$string['roomcreator'] = 'Créateur de la salle :';
$string['roomname'] = 'Nom de la salle';
$string['roomurl'] = 'URL de la salle';
$string['roomurlexpanded_desc'] = 'Afficher les paramètres de l’URL de la salle tels que développés par défaut lors d’une nouvelle création.';
$string['show'] = 'Voir';
$string['strftimehm'] = '%H:%M';
$string['syncwithgoogledrive'] = 'Synchronisation avec Google Drive';
$string['thereisnorecordingtoshow'] = 'Il n’y a pas d’enregistrement à afficher.';
$string['timeahead'] = 'Il n’est pas possible de créer des récurrences multiples de la date de l’événement qui dépassent un an ; ajuster les dates de début et de fin.';
$string['timedate'] = '%d/%m/%Y %H:%M';
$string['to'] = 'à';
$string['today'] = 'Aujourd’hui';
$string['upcomingevents'] = 'Événements à venir';
$string['url_failed'] = 'Une URL valide pour Google Meet est requise';
$string['visible'] = 'Visible';
$string['week'] = 'Semaine(s)';
