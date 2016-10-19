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
 * Strings for component 'quizaccess_offlineattempts', language 'fr', branch 'MOODLE_31_STABLE'
 *
 * @package   quizaccess_offlineattempts
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowofflineattempts'] = 'Permettre de faire le test hors ligne au moyen de l\'app mobile.';
$string['allowofflineattempts_help'] = 'Si ce réglage est activé, le participant pourra télécharger le test pour le passer hors ligne dans l\'app mobile de Moodle. Lors de ce téléchargement, une nouvelle tentative est créée, qui sera vide tant que l\'utilisateur n\'aura pas synchronisé les résultats de sa tentative avec l\'app mobile.';
$string['confirmdatasaved'] = 'Je confirme que je n\'ai pas de travail non enregistré sur mon appareil mobile, avant de continuer cette tentative.';
$string['mobileapp'] = 'App mobile';
$string['offlineattemptserror'] = 'Ni les tests avec limite de temps, ni ceux avec une restriction d\'accès par mot de passe ou par adresse IP, ni ceux utilisant des comportements autres que le feedback a posteriori avec ou sans indication de certitude ne peuvent être effectués hors ligne.';
$string['offlinedatamessage'] = 'Vous avez travaillé sur cette tentative à partir d\'un appareil mobile, et ces données ont été enregistrées sur le site il y a {$a}.';
$string['pleaseconfirm'] = 'Veuillez confirmer que vous n\'avez pas de données non enregistrées sur vos appareils.';
$string['pluginname'] = 'Règle d\'accès des tentatives hors ligne';
