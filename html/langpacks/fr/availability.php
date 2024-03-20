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
 * Strings for component 'availability', language 'fr', version '4.1'.
 *
 * @package     availability
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessrestrictions'] = 'Restrictions d’accès';
$string['addrestriction'] = 'Ajouter une restriction';
$string['and'] = 'et';
$string['condition_group'] = 'Jeu de restrictions';
$string['condition_group_info'] = 'Ajouter un jeu de restrictions imbriquées pour obtenir une logique complexe.';
$string['enableavailability'] = 'Activer les restrictions d’accès';
$string['enableavailability_desc'] = 'Si ce réglage est activé, des conditions (basées sur la date, une note ou la fin d’une activité) peuvent être définies qui déterminent si une activité ou une ressource est disponible.';
$string['error_list_nochildren'] = 'Les jeux de restrictions doivent comporter au moins une condition';
$string['hidden_all'] = 'Totalement caché si les conditions ne sont pas remplies par l’étudiant';
$string['hidden_individual'] = 'Totalement caché si cette condition n’est pas remplie par l’étudiant';
$string['hidden_marker'] = '(caché sinon)';
$string['hide_verb'] = 'Cliquer pour cacher';
$string['invalid'] = 'À définir';
$string['item_unknowntype'] = 'Ces restrictions utilisent un plugin qui n’est plus disponible (vous pouvez supprimer cette restriction ci-dessous)';
$string['itemheading'] = '{$a->number} Restriction {$a->type}';
$string['label_multi'] = 'Restrictions requises';
$string['label_sign'] = 'Type de restriction';
$string['list_and'] = 'Toutes ces conditions soient remplies :';
$string['list_and_hidden'] = 'Toutes ces conditions soient remplies (caché sinon) :';
$string['list_or'] = 'L’une de ces conditions soit remplie :';
$string['list_or_hidden'] = 'L’une de ces conditions soit remplie (caché sinon) :';
$string['list_root_and'] = 'Non disponible à moins que :';
$string['list_root_and_hidden'] = 'Non disponible (caché) à moins que :';
$string['list_root_or'] = 'Non disponible à moins que l’une des conditions suivantes soit remplie :';
$string['list_root_or_hidden'] = 'Non disponible (caché) à moins que l’une des conditions suivantes soit remplie :';
$string['listheader_multi_after'] = 'conditions suivantes';
$string['listheader_multi_and'] = 'toutes les';
$string['listheader_multi_before'] = 'remplir';
$string['listheader_multi_or'] = 'l’une des';
$string['listheader_sign_before'] = 'L’étudiant';
$string['listheader_sign_neg'] = 'ne doit pas';
$string['listheader_sign_pos'] = 'doit';
$string['listheader_single'] = 'remplir les conditions suivantes';
$string['manageplugins'] = 'Gérer les restrictions';
$string['missingplugin'] = 'Plugin de restriction manquant';
$string['or'] = 'ou';
$string['privacy:metadata'] = 'Le sous-système Restriction d’accès n’enregistre aucune donnée personnelle.';
$string['restrictaccess'] = 'Restriction d’accès';
$string['restrictbygroup'] = 'Ajouter une restriction de groupe/groupement';
$string['setheading'] = '{$a->number} jeu de {$a->count} restriction(s)';
$string['show_verb'] = 'Cliquer pour afficher';
$string['showmore'] = 'Afficher plus';
$string['shown_all'] = 'Affiché si les conditions ne sont pas remplies par l’étudiant';
$string['shown_individual'] = 'Affiché si cette condition n’est pas remplie par l’étudiant';
$string['unknowncondition'] = 'Condition inconnue (plugin de condition supprimé)';
