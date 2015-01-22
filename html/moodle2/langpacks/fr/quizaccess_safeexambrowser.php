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
 * Strings for component 'quizaccess_safeexambrowser', language 'fr', branch 'MOODLE_26_STABLE'
 *
 * @package   quizaccess_safeexambrowser
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedbrowserkeys'] = 'Touches de navigateur autorisées';
$string['allowedbrowserkeysdistinct'] = 'Les touches doivent toutes être différentes.';
$string['allowedbrowserkeys_help'] = 'Dans cette zone vous pouvez entrer les touches de navigateur autorisées pour les versions de Safe Exam Browser pour lesquelles l\'accès à ce questionnaire est autorisé. Si aucune touche n\'est entrée, SEB (Safe Exam Browser) n\'est pas exigé pour ce test.';
$string['allowedbrowserkeyssyntax'] = 'Vous devez saisir une touche autorisée par ligne. Une touche peut être une chaîne de caractères hexadécimaux.';
$string['allowedkeys_adv'] = 'Les touches sont une combinaison avancée';
$string['allowedkeys_adv_desc'] = 'Si cette option est activée, la liste des touches de navigation autorisées est un champ évolué du formulaire de paramétrage du test.';
$string['pluginname'] = 'Règles d\'accès Safe Exam Browser au test';
$string['safebrowserdownloadurl'] = 'Adresse URL de téléchargement de Safe Exam Browser.';
$string['safebrowserdownloadurl_desc'] = 'Si vous saisissez une adresse URL ici, les utilisateurs seront avertis qu\'ils peuvent télécharger la version requise de Safe Exam Browser depuis celle-ci.';
$string['safebrowsermustbeused'] = 'Vous devez utiliser une version officielle de Safe Exam Browser pour réaliser ce test.';
$string['safebrowsermustbeusedwithlink'] = 'Vous devez utiliser une version officielle de Safe Exam Browser pour réaliser ce test. Vous pouvez la télécharger depuis {$a->link}.';
$string['safeexambrowser:exemptfromcheck'] = 'Pas de vérification de Safe Exam Browser';
