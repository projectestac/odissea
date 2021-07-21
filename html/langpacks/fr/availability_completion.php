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
 * Strings for component 'availability_completion', language 'fr', version '3.11'.
 *
 * @package     availability_completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_previous_cache'] = 'Information de dépendance à une activité antérieure';
$string['description'] = 'Requiert l\'achèvement (ou le non-achèvement) d\'une autre activité par les étudiants.';
$string['error_selectcmid'] = 'Vous devez choisir une activité pour la condition d\'achèvement.';
$string['error_selectcmidpassfail'] = 'Une activité avec la condition d\'achèvement « Requiert une note » doit être sélectionnée.';
$string['label_cm'] = 'Activité ou ressource';
$string['label_completion'] = 'État d\'achèvement requis';
$string['missing'] = '(Activité manquante)';
$string['option_complete'] = 'doit être marqué comme terminé';
$string['option_fail'] = 'doit être terminé avec une note d\'échec';
$string['option_incomplete'] = 'ne doit pas être marqué comme terminé';
$string['option_pass'] = 'doit être terminé avec une note de réussite';
$string['option_previous'] = 'Activité antérieure avec achèvement';
$string['pluginname'] = 'Restriction par achèvement d\'activité';
$string['privacy:metadata'] = 'Le plugin Restriction par achèvement d\'activité n\'enregistre aucune donnée personnelle.';
$string['requires_complete'] = 'L\'activité <strong>{$a}</strong> soit marquée comme achevée';
$string['requires_complete_fail'] = 'L\'activité <strong>{$a}</strong> soit achevée mais échouée';
$string['requires_complete_pass'] = 'L\'activité <strong>{$a}</strong> soit achevée et réussie';
$string['requires_incomplete'] = 'L\'activité <strong>{$a}</strong> ne soit pas achevée';
$string['requires_not_complete_fail'] = 'L\'activité <strong>{$a}</strong> ne soit pas achevée et soit échouée';
$string['requires_not_complete_pass'] = 'L\'activité <strong>{$a}</strong> ne soit pas achevée mais réussie';
$string['requires_previous_complete'] = 'L\'<strong>activité antérieure avec achèvement</strong> soit marquée comme terminée.';
$string['requires_previous_complete_fail'] = 'L\'<strong>activité antérieure avec achèvement</strong> soit terminée et échouée';
$string['requires_previous_complete_pass'] = 'L\'<strong>activité antérieure avec achèvement</strong> soit terminée et réussie';
$string['requires_previous_incomplete'] = 'L\'<strong>activité antérieure avec achèvement</strong> ne soit pas terminée';
$string['requires_previous_not_complete_fail'] = 'L\'<strong>activité antérieure avec achèvement</strong> ne soit pas terminée et échouée';
$string['requires_previous_not_complete_pass'] = 'L\'<strong>activité antérieure avec achèvement</strong> ne soit pas terminée et réussie';
$string['title'] = 'Achèvement d\'activité';
