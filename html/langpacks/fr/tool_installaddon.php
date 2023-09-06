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
 * Strings for component 'tool_installaddon', language 'fr', version '4.1'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Quittance';
$string['acknowledgementtext'] = 'Je suis conscient qu\'il est de ma responsabilité d\'effectuer une sauvegarde complète de ce site avant d\'installer des plugins additionnels. J\'accepte et je suis conscient que des plugins additionnels (en particulier ceux provenant de sources non officielles, mais pas uniquement) peuvent comporter des lacunes de sécurité, rendre ce site indisponible et causer des pertes ou fuites de données privées.';
$string['featuredisabled'] = 'L\'installeur de plugins additionnels est désactivé sur ce site.';
$string['installaddon'] = 'Installer le plugin !';
$string['installaddons'] = 'Installer des plugins';
$string['installfromrepo'] = 'Installer des plugins à partir du répertoire des plugins Moodle';
$string['installfromrepo_help'] = 'Vous allez être dirigé vers le répertoire de plugins Moodle pour la recherche et l\'installation d\'un plugin. Veuillez prendre note que le nom complet de votre site, son URL et le numéro de version seront également transmis afin de vous simplifier le processus d\'installation.';
$string['installfromzip'] = 'Installer le plugin à partir d\'un fichier ZIP';
$string['installfromzip_help'] = 'Au lieu d\'installer des plugins à partir du répertoire de plugins Moodle, vous pouvez en installer à partir de paquetages ZIP déposés manuellement. De tels paquetages doivent avoir la même structure que ceux disponibles dans le répertoire des plugins Moodle.';
$string['installfromzipfile'] = 'Paquetage ZIP';
$string['installfromzipfile_help'] = 'Le paquetage ZIP du plugin doit contenir un seul dossier principal du même nom que le plugin. Le fichier ZIP sera décompressé à l\'emplacement adéquat en fonction du type de plugin. Si le paquetage a été téléchargé à partir du répertoire de plugins de Moodle, il est dans ce format.';
$string['installfromzipinvalid'] = 'Le paquetage ZIP du plugin doit contenir un seul dossier principal du même nom que le plugin. Le fichier fourni n\'est pas un paquetage valide.';
$string['installfromziprootdir'] = 'Renommer le dossier principal';
$string['installfromziprootdir_help'] = 'Certains paquetages ZIP, par exemple ceux qui sont générés par Github, peuvent comporter un nom de dossier principal incorrect. Vous pouvez renommer ce dossier en indiquant dans ce champ le nom correct.';
$string['installfromzipsubmit'] = 'Installer le plugin à partir du fichier ZIP';
$string['installfromziptype'] = 'Type de plugin';
$string['installfromziptype_help'] = 'Pour les plugins qui déclarent correctement leur nom de composant, l\'installeur est capable de détecter automatiquement le type de plugin. Si la détection automatique échoue, veuillez choisir manuellement le type de plugin correct. Attention ! La procédure d\'installation peut lamentablement échouer si un type incorrect est indiqué.';
$string['installfromziptype_link'] = 'Development:Plugins';
$string['permcheck'] = 'Assurez-vous que l\'emplacement sur le serveur pour ce type de plugin est atteignable en écriture par le serveur web.';
$string['permcheckerror'] = 'Erreur lors de la vérification des droits d\'accès en écriture';
$string['permcheckprogress'] = 'Vérification des droits d\'accès en écriture…';
$string['permcheckrepeat'] = 'Veuillez vérifier à nouveau';
$string['permcheckresultno'] = 'L\'emplacement pour le type de plugin <em>{$a->path}</em> n\'est pas atteignable en écriture';
$string['permcheckresultyes'] = 'L\'emplacement pour le type de plugin <em>{$a->path}</em> est atteignable en écriture';
$string['pluginname'] = 'Installeur de plugin';
$string['privacy:metadata'] = 'Le plugin Installeur de plugin n\'enregistre aucune donnée personnelle.';
$string['remoterequestalreadyinstalled'] = 'Une demande d\'installation sur ce site du plugin {$a->name} ({$a->component}), version {$a->version} du répertoire de plugins Moodle a été détectée. Ce plugin est <strong>déjà installé</strong> sur ce site.';
$string['remoterequestconfirm'] = 'Une demande d\'installation sur ce site du plugin {$a->name} ({$a->component}), version {$a->version} du répertoire de plugins Moodle a été détectée. Si vous continuez, le paquetage ZIP de ce plugin sera téléchargé pour validation. Rien ne sera encore installé durant cette étape.';
$string['remoterequestinvalid'] = 'Une demande d\'installation d\'un plugin du répertoire de plugins Moodle a été détectée. La requête n\'est cependant pas valide et le plugin ne peut donc pas être installé.';
$string['remoterequestnoninstallable'] = 'L\'installation du plugin {$a->name} ({$a->component}) version {$a->version} est requise par le dossier des plugins de cette plateforme. Cependant, la vérification du plugin a échoué (code d\'erreur : {$a->reason}).';
$string['remoterequestpermcheck'] = 'Une demande d\'installation sur ce site du plugin {$a->name} ({$a->component}), version {$a->version} du répertoire de plugins Moodle a été détectée. L\'emplacement pour ce type de plugin <strong>{$a->typepath}</strong> sur le serveur n\'est toutefois <strong>pas atteignable en écriture</strong>. Vous devez donner au serveur web les droits d\'accès en écriture à cet emplacement maintenant, puis cliquer sur le bouton continuer pour relancer la vérification.';
$string['remoterequestpluginfoexception'] = 'Oups… Une erreur est survenue lors de la tentative d\'obtention d\'informations sur le plugin {$a->name} ({$a->component}), version {$a->version}. Le plugin ne peut pas être installé. Veuillez activer le mode de débogage pour en savoir plus sur cette erreur.';
$string['typedetectionfailed'] = 'Impossible de détecter le type de plugin. Veuillez choisir manuellement le type de plugin.';
$string['typedetectionmismatch'] = 'Le type du plugin sélectionné ne correspond pas au type déclaré par le plugin : {$a}';
