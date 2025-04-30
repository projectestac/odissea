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
 * Strings for component 'antivirus_clamav', language 'fr', version '4.4'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'Un problème est survenu lors du scan par l’antivirus. Votre fichier n’a pas pu être déposé. Veuillez réessayer plus tard.';
$string['clamfailed'] = 'Clam AV n’a pas pu être lancé. Le message d’erreur était « {$a} ». Voici la sortie du programme Clam :';
$string['clamfailureonupload'] = 'Lors d’un échec de ClamAV';
$string['configclamactlikevirus'] = 'Traiter les fichiers comme des virus';
$string['configclamdonothing'] = 'Traiter les fichiers comme sains';
$string['configclamfailureonupload'] = 'Si l’option « Traiter les fichiers comme sains » est sélectionnée, , les fichiers seront déplacés vers le dossier de destination. Si l’option « Refuser le dépôt et essayer à nouveau » est sélectionnée, un message demandant d’essayer plus tard sera affiché à l’utilisateur. Si l’option « Traiter les fichiers comme des virus » est sélectionnée, les fichiers seront déplacés vers une zone de quarantaine ou supprimés. Attention ! Avec cette option, si <em>clam</em> échoue, par exemple en raison d’un chemin vers l’exécutable non valide, <strong>tous</strong> les fichiers déposés seront mis en quarantaine ou supprimés.';
$string['configclamtryagain'] = 'Refuser les dépôts et essayer à nouveau';
$string['errorcantopensocket'] = 'La connexion à un socket de domaine Unix a provoqué une erreur {$a}';
$string['errorclamavnoresponse'] = 'ClamAV ne répond pas. Veuillez vérifier le statut du démon.';
$string['errornounixsocketssupported'] = 'Le transport par socket de domaine Unix n’est pas pris en charge sur ce système. Veuillez utiliser l’option ligne de commande.';
$string['invalidpathtoclam'] = 'Le chemin d’accès {$a} à Clam AV n’est pas valide.';
$string['pathtoclam'] = 'Ligne de commande';
$string['pathtoclamdesc'] = 'Si le fonctionnement choisi est « Ligne de commande », veuillez indiquer ici le chemin vers le programme ClamAV. Sur Linux, ce sera <em>/usr/bin/clamscan</em> ou <em>/usr/bin/clamdscan</em>.';
$string['pathtounixsocket'] = 'Socket de domaine Unix';
$string['pathtounixsocketdesc'] = 'Si le fonctionnement choisi est « Socket de domaine Unix », veuillez indiquer ici le chemin vers le socket Unix ClamAV. Sur Linux Debian, ce sera <em>/var/run/clamav/clamd.ctl</em>. Assurez-vous que le démon <em>clamav</em> a accès en lecture aux fichiers déposés. La façon la plus simple de s’en assurer est d’ajouter l’utilisateur « clamav » au groupe du serveur web (« www-data » sur Linux Debian).';
$string['pluginname'] = 'Antivirus ClamAV';
$string['privacy:metadata'] = 'Le plugin antivirus ClamAV n’enregistre aucune donnée personnelle.';
$string['quarantinedir'] = 'Dossier de quarantaine';
$string['runningmethod'] = 'Méthode de fonctionnement';
$string['runningmethodcommandline'] = 'Ligne de commande';
$string['runningmethoddesc'] = 'La méthode de fonctionnement de ClamAV. La ligne de commande est utilisée par défaut. Sur Linux, une meilleure performance peut être cependant obtenue en utilisant les sockets système.';
$string['runningmethodtcpsocket'] = 'Socket TCP';
$string['runningmethodunixsocket'] = 'Socket de domaine Unix';
$string['tcpsockethost'] = 'Nom d’hôte du socket TCP';
$string['tcpsockethostdesc'] = 'Nom de domaine du serveur Clam AV';
$string['tcpsocketport'] = 'Port du socket TCP';
$string['tcpsocketportdesc'] = 'Port à utiliser pour la connexion à ClamAV';
$string['tries'] = 'Tentatives de scan';
$string['tries_desc'] = 'Le nombre de tentatives faites par ClamAV si une erreur survient lors du processus de scan.';
$string['tries_notice'] = 'Clamav a tenté de scanner {$a->tries} fois.
{$a->notice}';
$string['unknownerror'] = 'Une erreur inconnue est survenue avec clam.';
