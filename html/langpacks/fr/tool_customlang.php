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
 * Strings for component 'tool_customlang', language 'fr', version '3.11'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Enregistrer les chaînes dans le paquetage de langue';
$string['checkout'] = 'Ouvrir le paquetage de langue pour modification';
$string['checkoutdone'] = 'Paquetage de langue chargé';
$string['checkoutinprogress'] = 'Chargement du paquetage de langue';
$string['cliexportfileexists'] = 'Un fichier existe déjà pour {$a->lang}. Commande ignorée. Pour écraser le fichier existant, utiliser l\'option --override=true.';
$string['cliexportfilenotfoundforcomponent'] = 'Fichier {$a->filepath} non trouvé pour la langue {$a->lang}. Fichier ignoré.';
$string['cliexportheading'] = 'Exportation des fichiers de langue commencé.';
$string['cliexportnofilefoundforlang'] = 'Aucun fichier à exporter. Exportation de cette langue ignorée.';
$string['cliexportstartexport'] = 'Exportation de la langue {$a}';
$string['cliexportzipdone'] = 'Fichier ZIP créé : {$a}';
$string['cliexportzipfail'] = 'Impossible de créer le fichier ZIP {$a}';
$string['clifiles'] = 'Fichiers à importer dans {$a}';
$string['cliimporting'] = 'Importer les fichiers de chaînes de caractères (mode {$a})';
$string['climissingfiles'] = 'Fichiers valides manquants';
$string['climissinglang'] = 'Langue manquante';
$string['climissingmode'] = 'Mode manquant ou non valide (les modes valides sont : all, new ou update)';
$string['climissingsource'] = 'Fichier ou dossier manquant';
$string['clinolog'] = 'Rien à importer dans {$a}';
$string['confirmcheckin'] = 'Vous êtes sur le point d\'exporter les modifications dans votre paquetage de langue local. Ceci enregistrera les chaînes modifiées dans votre dossier de données, et Moodle les utilisera alors systématiquement. Cliquez sur continuer pour effectuer l\'enregistrement.';
$string['customlang:edit'] = 'Modifier les chaînes de caractères locales';
$string['customlang:export'] = 'Exporter les traductions locales';
$string['customlang:view'] = 'Voir les chaînes de caractères locales';
$string['export'] = 'Exporter des chaînes personnalisées';
$string['exportfilter'] = 'Sélectionner le(s) composant(s) à exporter';
$string['filter'] = 'Filtrer les chaînes';
$string['filtercomponent'] = 'Afficher les chaînes de ces composants';
$string['filtercustomized'] = 'Chaînes personnalisées seulement';
$string['filtermodified'] = 'Chaînes modifiées dans cette session seulement';
$string['filteronlyhelps'] = 'Chaînes d\'aide seulement';
$string['filtershowstrings'] = 'Afficher les chaînes';
$string['filterstringid'] = 'Identifiant de la chaîne';
$string['filtersubstring'] = 'Chaînes contenant';
$string['headingcomponent'] = 'Composant';
$string['headinglocal'] = 'Modification locale';
$string['headingstandard'] = 'Texte standard';
$string['headingstringid'] = 'Chaîne';
$string['import'] = 'Importer des chaînes personnalisées';
$string['import_all'] = 'Creér ou mettre à jour toutes les chaînes des paquetages';
$string['import_mode'] = 'Mode d\'importation';
$string['import_new'] = 'Ne créer que les chaînes sans personnalisation locale';
$string['import_update'] = 'Ne mettre à jour que les chaînes sans personnalisation locale';
$string['importfile'] = 'Importer le fichier';
$string['langpack'] = 'Paquetage(s) de langue';
$string['markinguptodate'] = 'Marquer la modification comme « à jour »';
$string['markinguptodate_help'] = 'La traduction locale effectuée peut être rendue obsolète si la chaîne du paquetage en anglais ou celle du paquetage de langue officiel a été modifiée depuis votre modification locale. Veuillez examiner la traduction personnalisée. Si vous la considérez comme à jour, cochez la case. Dans le cas contraire, modifiez-la.';
$string['markuptodate'] = 'Marquer comme « à jour »';
$string['modifiedno'] = 'Il n\'y a pas de chaîne modifiée à enregistrer';
$string['modifiednum'] = '{$a} chaînes ont été modifiées. Voulez-vous enregistrer ces modifications dans votre paquetage de langue local ?';
$string['nolocallang'] = 'Aucune chaîne locale trouvée.';
$string['nostringsfound'] = 'Aucune chaîne trouvée. Veuillez modifier les réglages du filtre';
$string['notice_ignorenew'] = 'La chaîne {$a->component}/{$a->stringid} est ignorée, car elle n\'est pas personnalisée.';
$string['notice_ignoreupdate'] = 'La chaîne {$a->component}/{$a->stringid} est ignorée, car elle est déjà définie.';
$string['notice_inexitentstring'] = 'Chaîne {$a->component}/{$a->stringid} introuvable.';
$string['notice_missingcomponent'] = 'Composant {$a->component} manquant.';
$string['notice_success'] = 'Chaîne {$a->component}/{$a->stringid} mise à jour.';
$string['placeholder'] = 'Paramètres';
$string['placeholder_help'] = 'Les paramètres sont des expressions spéciales comme « {$a} » ou « {$a->blabla} » à l\'intérieur d\'une chaîne. Ils sont remplacés par une valeur lors de l\'affichage effectif de la chaîne.

Il est important de les copier de manière exactement identique à l\'original. Ne les traduisez pas, et ne modifiez pas non plus leur orientation de gauche à droite (pour les langues écrites de droite à gauche).';
$string['placeholderwarning'] = 'La chaîne contient un paramètre';
$string['pluginname'] = 'Personnalisation de la langue';
$string['privacy:metadata'] = 'Le plugin Personnalisation de la langue n\'enregistre aucune donnée personnelle.';
$string['savecheckin'] = 'Enregistrer les modifications dans le paquetage de langue';
$string['savecontinue'] = 'Enregistrer et continuer les modifications';
