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
 * Strings for component 'antivirus', language 'fr', version '4.1'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Plugins antivirus disponibles';
$string['antiviruscommonsettings'] = 'Réglages antivirus communs';
$string['antiviruses'] = 'Plugins antivirus';
$string['antivirussettings'] = 'Gérer les plugins antivirus';
$string['configantivirusplugins'] = 'Veuillez choisir les plugins antivirus que vous voulez utiliser et les ranger par ordre d’application.';
$string['dataerrordesc'] = 'Une erreur de scan de données est survenue.';
$string['dataerrorname'] = 'Erreur de scan de données';
$string['datainfecteddesc'] = 'Des données infectées ont été trouvées';
$string['datainfectedname'] = 'Données infectées';
$string['datastream'] = 'Données';
$string['emailadditionalinfo'] = 'Informations complémentaires envoyées par le moteur antivirus :';
$string['emailauthor'] = 'Déposé par :';
$string['emailcontenthash'] = 'Hachage du contenu :';
$string['emailcontenttype'] = 'Type de contenu :';
$string['emaildate'] = 'Date du dépôt :';
$string['emailfilename'] = 'Nom de fichier :';
$string['emailfilesize'] = 'Taille du fichier :';
$string['emailgeoinfo'] = 'Géolocalisation :';
$string['emailinfectedfiledetected'] = 'Fichier infecté détecté';
$string['emailipaddress'] = 'Adresse IP :';
$string['emailreferer'] = 'Référent :';
$string['emailreport'] = 'Rapport :';
$string['emailscanner'] = 'Scanner :';
$string['emailscannererrordetected'] = 'Une erreur de scanner est survenue';
$string['emailsubject'] = '{$a} :: Notification Clam AV';
$string['enablequarantine'] = 'Activer la quarantaine';
$string['enablequarantine_help'] = 'Si ce réglage est activé, les fichiers détectés comme virus sont conservés dans un dossier de quarantaine ([dataroot]/{$a}) pour inspection ultérieure. Le dépôt dans Moodle échouera. Si vous disposez d’un antivirus au niveau du système, le dossier de quarantaine doit être exclu de ses vérifications pour éviter la détection des fichiers en quarantaine.';
$string['fileerrordesc'] = 'Une erreur de scan de fichier est survenue.';
$string['fileerrorname'] = 'Erreur de scan de fichier';
$string['fileinfecteddesc'] = 'Un fichier infecté a été détecté.';
$string['fileinfectedname'] = 'Fichier infecté';
$string['notifyemail'] = 'Courriel de notification d’alerte antivirus';
$string['notifyemail_help'] = 'L’adresse de courriel pour les notifications lors de la détection d’un virus. Si non renseignée, tous les administrateurs du site recevront les notifications.';
$string['notifylevel'] = 'Niveau de notification';
$string['notifylevel_help'] = 'Les divers niveaux d’information pour lesquels vous voulez des notifications';
$string['notifylevelerror'] = 'Menaces détectées et erreurs de scan';
$string['notifylevelfound'] = 'Menaces détectées uniquement';
$string['privacy:metadata'] = 'Le plugin Système antivirus n’enregistre aucune donnée personnelle.';
$string['quarantinedfiles'] = 'Fichiers en quarantaine';
$string['quarantinedisabled'] = 'La quarantaine est désactivée. Le fichier n’a pas été enregistré.';
$string['quarantinetime'] = 'Durée maximale de quarantaine';
$string['quarantinetime_desc'] = 'Les fichiers en quarantaine plus anciens que la période indiquée seront supprimés.';
$string['taskcleanup'] = 'Nettoyer le dossier de quarantaine.';
$string['threshold'] = 'Seuil pour la vérification d’état';
$string['threshold_desc'] = 'Jusqu’à quand dans le passé vérifier si des résultats antérieurs ont des erreurs, etc., tels que rapporté dans {$a}.';
$string['unknown'] = 'Inconnu';
$string['virusfound'] = '{$a->item} a été scanné par un anti-virus. Il est infecté !';
