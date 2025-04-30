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
 * Strings for component 'availability_profile', language 'fr', version '4.4'.
 *
 * @package     availability_profile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['conditiontitle'] = 'Champ de profil';
$string['description'] = 'Contrôle l’accès sur la base des champs du profil de l’étudiant';
$string['error_selectfield'] = 'Veuillez sélectionner un champ de profil.';
$string['error_setvalue'] = 'Vous devez saisir une valeur';
$string['label_operator'] = 'Méthode de comparaison';
$string['label_value'] = 'Valeur de comparaison';
$string['missing'] = '(Champ manquant : {$a})';
$string['op_contains'] = 'contient';
$string['op_doesnotcontain'] = 'ne contient pas';
$string['op_endswith'] = 'se termine par';
$string['op_isempty'] = 'est vide';
$string['op_isequalto'] = 'est égal à';
$string['op_isnotempty'] = 'n’est pas vide';
$string['op_startswith'] = 'commence par';
$string['pluginname'] = 'Restriction par profil';
$string['privacy:metadata'] = 'Le plugin Restriction par profil n’enregistre aucune donnée personnelle.';
$string['requires_contains'] = 'Votre <strong>{$a->field}</strong> contienne <strong>{$a->value}</strong>';
$string['requires_doesnotcontain'] = 'Votre <strong>{$a->field}</strong> ne contienne pas <strong>{$a->value}</strong>';
$string['requires_endswith'] = 'Votre <strong>{$a->field}</strong> se termine par <strong>{$a->value}</strong>';
$string['requires_isempty'] = 'Votre <strong>{$a->field}</strong> soit vide';
$string['requires_isequalto'] = 'Votre <strong>{$a->field}</strong> soit exactement <strong>{$a->value}</strong>';
$string['requires_isnotempty'] = 'Votre <strong>{$a->field}</strong> ne soit pas vide';
$string['requires_notendswith'] = 'Votre <strong>{$a->field}</strong> ne se termine pas par <strong>{$a->value}</strong>';
$string['requires_notisequalto'] = 'Votre <strong>{$a->field}</strong> ne soit pas <strong>{$a->value}</strong>';
$string['requires_notstartswith'] = 'Votre <strong>{$a->field}</strong> ne commence pas par <strong>{$a->value}</strong>';
$string['requires_startswith'] = 'Votre <strong>{$a->field}</strong> commence par <strong>{$a->value}</strong>';
$string['title'] = 'Profil utilisateur';
