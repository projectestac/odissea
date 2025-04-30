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
 * Strings for component 'folder', language 'fr', version '4.4'.
 *
 * @package     folder
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bynameondate'] = 'par {$a->name} – {$a->date}';
$string['contentheader'] = 'Contenu';
$string['display'] = 'Afficher le contenu du dossier';
$string['display_help'] = 'Si vous choisissez d’afficher le contenu du dossier sur la page de cours, il n’y aura pas de lien vers une page séparée.
La description ne sera affichée que si l’option « Afficher la description sur la page du cours » est cochée. En outre, les actions de consultation par les participants ne pourront alors pas être journalisées.';
$string['displayinline'] = 'Sur la page du cours';
$string['displaypage'] = 'Sur une page séparée';
$string['dnduploadmakefolder'] = 'Décompresser les fichiers et créer un dossier';
$string['downloadfolder'] = 'Télécharger le dossier';
$string['eventallfilesdownloaded'] = 'Archive ZIP d’un dossier téléchargée';
$string['eventfolderupdated'] = 'Dossier modifié';
$string['folder:addinstance'] = 'Ajouter un dossier';
$string['folder:managefiles'] = 'Gérer les fichiers dans le module dossier';
$string['folder:view'] = 'Voir le contenu d’un dossier';
$string['foldercontent'] = 'fichiers et sous-dossiers';
$string['forcedownload'] = 'Imposer le téléchargement des fichiers';
$string['forcedownload_help'] = 'Ce réglage détermine si certains fichiers, comme les images ou les fichiers HTML, doivent être affichés dans le navigateur au lieu d’être téléchargés. Pour des raisons de sécurité, ce réglage ne doit être désactivé que si tous les utilisateurs qui ont les droits requis pour gérer les fichiers du dossier sont fiables.';
$string['indicator:cognitivedepth'] = 'Dossier : aspect cognitif';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l’étudiant dans une ressource Dossier.';
$string['indicator:cognitivedepthdef'] = 'Dossier : aspect cognitif';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint durant cet intervalle d’analyse ce pourcentage d’engagement cognitif offert par les ressources « Dossier » (niveaux : pas de vue, vue).';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Dossier : aspect social';
$string['indicator:socialbreadth_help'] = 'Cet indicateur se base sur l’interaction sociale atteinte par l’étudiant dans une ressource Dossier.';
$string['indicator:socialbreadthdef'] = 'Dossier : aspect social';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint durant cet intervalle d’analyse ce pourcentage d’engagement social offert par les ressources « Dossier » (niveaux : pas de participation, participant seul).';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['maxsizetodownload'] = 'Taille maximale des dossiers à télécharger (Mo)';
$string['maxsizetodownload_help'] = 'La taille maximale d’un dossier pouvant être téléchargé sous forme d’une archive ZIP. Si 0 est indiqué, la taille du dossier est illimitée.';
$string['modulename'] = 'Dossier';
$string['modulename_help'] = 'Le module dossier permet à un enseignant d’afficher plusieurs fichiers dans un dossier, réduisant ainsi le défilement horizontal d’une page de cours. Un dossier compressé (ZIP) peut être déposé et décompressé pour être affiché, ou un dossier vide peut être créé et des fichiers déposés à l’intérieur.

Un dossier peut être utilisé par exemple pour :

* rassembler plusieurs fichiers sur un même sujet
* fournir sur la page de cours un espace de dépôt de fichiers commun à plusieurs enseignants, en cachant le dossier de sorte que seuls les enseignants puissent le voir';
$string['modulename_link'] = 'mod/folder/view';
$string['modulenameplural'] = 'Dossiers';
$string['newfoldercontent'] = 'Nouveau contenu de dossier';
$string['noautocompletioninline'] = 'L’achèvement automatique lors de la consultation d’une activité ne peut pas être sélectionné en même temps que l’option « Afficher sur la page du cours »';
$string['page-mod-folder-view'] = 'Page principale du module dossier';
$string['page-mod-folder-x'] = 'Toute page du module dossier';
$string['pluginadministration'] = 'Gestion des dossiers';
$string['pluginname'] = 'Dossier';
$string['privacy:metadata'] = 'Le plugin de ressource Dossier n’enregistre aucune donnée personnelle.';
$string['search:activity'] = 'Dossier';
$string['showdownloadfolder'] = 'Afficher le bouton de téléchargement de dossier';
$string['showdownloadfolder_help'] = 'Si ce réglage est activé, un bouton sera affiché permettant de télécharger une archive ZIP contenant tous les fichiers d’un dossier.';
$string['showexpanded'] = 'Afficher les sous-dossiers dépliés';
$string['showexpanded_help'] = 'Si ce réglage est activé, les sous-dossiers seront affichés avec leur contenu. Dans le cas contraire, seul leur nom sera affiché.';
