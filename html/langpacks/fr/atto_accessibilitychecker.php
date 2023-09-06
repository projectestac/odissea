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
 * Strings for component 'atto_accessibilitychecker', language 'fr', version '4.1'.
 *
 * @package     atto_accessibilitychecker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['emptytext'] = 'Texte vide';
$string['entiredocument'] = 'Document entier';
$string['imagesmissingalt'] = 'Les images requièrent un texte alternatif. Afin de supprimer cet avertissement, veuillez ajouter un attribut alt à vos balises img. Un attribut alt vide peut être utilisé, mais seulement lorsque l\'image est uniquement décorative et ne transporte aucune information.';
$string['needsmorecontrast'] = 'Les couleurs du texte et du fond du texte ne sont pas suffisamment contrastées. Pour supprimer cet avertissement, veuillez changer soit la couleur du texte, soit celle du fond du texte, afin d\'améliorer la lisibilité.';
$string['needsmoreheadings'] = 'Ce long texte ne comporte ni titre, ni sous-titre. Des titres intermédiaires permettent aux personnes utilisant des lecteurs d\'écran de parcourir la page plus facilement et à tout le monde de la lire plus aisément.';
$string['nowarnings'] = 'Bravo ! Aucun problème d\'accessibilité détecté.';
$string['pluginname'] = 'Contrôle d\'accessibilité';
$string['privacy:metadata'] = 'Le plugin atto_accessibilitychecker n\'enregistre aucune donnée personnelle.';
$string['report'] = 'Rapport d\'accessibilité :';
$string['tablesmissingcaption'] = 'Les tables doivent avoir une légende. Bien qu\'il ne soit pas nécessaire à chaque table d\'avoir une légende, celle-ci est en général très utile.';
$string['tablesmissingheaders'] = 'Les tables doivent avoir une rangée et/ou une colonne d\'en-tête.';
$string['tableswithmergedcells'] = 'Les tables ne doivent pas comporter de cellules fusionnées. Bien que le formatage de telles cellules soit standard depuis de nombreuses années, certains lecteurs d\'écran ne lisent pas encore correctement des tables complexes. Si possible, rendez votre table simple et évitez les cellules fusionnées.';
