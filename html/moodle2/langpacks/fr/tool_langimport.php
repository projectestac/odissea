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
 * Strings for component 'tool_langimport', language 'fr', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_langimport
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Impossible de se connecter au serveur de téléchargement. Il n\'est pas possible d\'installer ou de mettre à jour les paquetages de langue automatiquement. Veuillez télécharger le(s) fichier(s) ZIP adéquat(s) sur <a href="{$a->src}">{$a->src}</a> et les décompresser manuellement dans le dossier de données de votre Moodle <code>{$a->dest}</code>';
$string['install'] = 'Installer les paquetages de langue sélectionnés';
$string['installedlangs'] = 'Langues installées';
$string['langimport'] = 'Utilitaire d\'importation de langues';
$string['langimportdisabled'] = 'L\'utilitaire d\'importation de langues a été désactivé. Veuillez effectuer la mise à jour de vos paquetages de langue manuellement au niveau du système de fichiers de votre serveur. N\'oubliez pas de purger les caches une fois cette opération effectuée.';
$string['langpackinstalled'] = 'Le paquetage de langue « {$a} » a été installé';
$string['langpackinstalledevent'] = 'Paquetage de langue installé';
$string['langpacknotremoved'] = 'Une erreur est survenue : le paquetage de langue « {$a} » n\'a pas été complètement désinstallé. Veuillez vérifier les permissions des fichiers.';
$string['langpackremoved'] = 'Le paquetage de langue « {$a} » a été désinstallé';
$string['langpackremovedevent'] = 'Paquetage de langue désinstallé';
$string['langpackupdated'] = 'Le paquetage de langue « {$a} » a été mis à jour';
$string['langpackupdatedevent'] = 'Paquetage de langue mis à jour';
$string['langpackupdateskipped'] = 'La mise à jour du paquetage de langue « {$a} » n\'a pas été effectuée';
$string['langpackuptodate'] = 'Le paquetage de langue « {$a} » est à jour';
$string['langupdatecomplete'] = 'La mise à jour des langues est terminée';
$string['missingcfglangotherroot'] = 'Valeur manquante pour le paramètre de configuration $CFG->langotherroot';
$string['missinglangparent'] = 'Le paquetage de la langue parente <em>{$a->parent}</em> de <em>{$a->lang}</em> n\'est pas installé.';
$string['noenglishuninstall'] = 'Le paquetage de langue anglais ne peut pas être désinstallé';
$string['nolangupdateneeded'] = 'Toutes les langues sont à jour. Aucune mise à jour n\'est nécessaire';
$string['pluginname'] = 'Paquetages de langue';
$string['privacy:metadata'] = 'Le plugin Paquetages de langue n\'enregistre aucune donnée personnelle.';
$string['purgestringcaches'] = 'Purger les caches des chaînes de caractères';
$string['selectlangs'] = 'Sélectionnez les langues à désinstaller';
$string['uninstall'] = 'Désinstaller le(s) paquetage(s) de langue sélectionné(s)';
$string['uninstallconfirm'] = 'Vous êtes sur le point de supprimer totalement les paquetages de langue suivants : <strong>{$a}</strong>. Voulez-vous continuer ?';
$string['updatelangs'] = 'Mettre à jour les paquetages de langue installés';
