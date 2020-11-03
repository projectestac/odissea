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
 * Strings for component 'antivirus_clamav', language 'fr', branch 'MOODLE_38_STABLE'
 *
 * @package   antivirus_clamav
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'Clam AV n\'a pas pu être lancé. Le message d\'erreur était {$a}. Voici la sortie du programme Clam :';
$string['clamfailureonupload'] = 'Lors d\'un échec de ClamAV';
$string['configclamactlikevirus'] = 'Traiter les fichiers comme des virus';
$string['configclamdonothing'] = 'Traiter les fichiers comme sains';
$string['configclamfailureonupload'] = 'Ce réglage détermine comment le comportement de l\'antivirus si vous avez choisi de scanner les fichiers déposés au moyen de <i>clam</i>, mais que ce programme est configuré incorrectement ou qu\'il se plante. Si vous choisissez « Traiter les fichiers comme des virus », les fichiers seront placés en quarantaine ou supprimés. Soyez très prudent avec ce réglage, car si <i>clam</i> ne fonctionne pas du tout (par exemple si l chemin d\'accès est mal configuré), <b>tous</b> les fichiers déposés seront placés en quarantaine ou supprimés. Si vous choisissez « Traiter les fichiers comme sains », les fichiers seront déplacés vers leur destination normale. Dans tous les cas, les administrateurs de la plateforme seront avertis que le programme a échoué.';
$string['errorcantopensocket'] = 'La connexion à un socket de domaine Unix a provoqué une erreur {$a}';
$string['errorclamavnoresponse'] = 'ClamAV ne répond pas. Veuillez vérifier le statut du démon.';
$string['errornounixsocketssupported'] = 'Le transport par socket de domaine Unix n\'est pas supporté sur ce système. Veuillez utiliser l\'option ligne de commande.';
$string['invalidpathtoclam'] = 'Le chemin d\'accès {$a} à Clam AV n\'est pas valide.';
$string['pathtoclam'] = 'Ligne de commande';
$string['pathtoclamdesc'] = 'Si le fonctionnement choisi est « Ligne de commande », veuillez indiquer ici le chemin vers le programme ClamAV. Sur Linux, ce sera <i>/usr/bin/clamscan</i> or <i>/usr/bin/clamdscan</i>.';
$string['pathtounixsocket'] = 'Socket de domaine Unix';
$string['pathtounixsocketdesc'] = 'Si le fonctionnement choisi est « Socket de domaine Unix », veuillez indiquer ici le chemin vers le socket Unix ClamAV. Sur Linux Debian, ce sera <i>/var/run/clamav/clamd.ctl</i>. Assurez-vous que le démon <i>clamav</i> a accès en lecture aux fichiers déposés. La façon la plus simple de s\'en assurer est d\'ajouter l\'utilisateur « clamav » au groupe du serveur web (« www-data » sur Linux Debian).';
$string['pluginname'] = 'Antivirus ClamAV';
$string['privacy:metadata'] = 'Le plugin antivirus ClamAV n\'enregistre aucune donnée personnelle.';
$string['quarantinedir'] = 'Dossier de quarantaine';
$string['runningmethod'] = 'Méthode de fonctionnement';
$string['runningmethodcommandline'] = 'Ligne de commande';
$string['runningmethoddesc'] = 'La méthode de fonctionnement de ClamAV. La ligne de commande est utilisée par défaut. Sur Linux, une meilleure performance peut être cependant obtenue en utilisant les sockets système.';
$string['runningmethodunixsocket'] = 'Socket de domaine Unix';
$string['unknownerror'] = 'Une erreur inconnue est survenue avec clam.';
