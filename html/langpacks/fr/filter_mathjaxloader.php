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
 * Strings for component 'filter_mathjaxloader', language 'fr', version '4.5'.
 *
 * @package     filter_mathjaxloader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Délimiteurs d’équation supplémentaires';
$string['additionaldelimiters_help'] = 'Le filtre MathJax détecte dans le texte les équations entre certains délimiteurs.

La liste des délimiteurs reconnus peut être complétée ici (p. ex. AsciiMath utilise `). Les délimiteurs peuvent être constitués de plusieurs caractères, et différents délimiteurs peuvent être indiqués, séparés par des virgules.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'URL MathJax';
$string['httpsurl_help'] = 'URL complète vers la bibliothèque MathJax.';
$string['localinstall'] = 'Installation MathJax locale';
$string['localinstall_help'] = 'La configuration par défaut de MathJax utilise la version CDN de MathJax, mais MathJax peut être installé en local si nécessaire, par exemple pour économiser la bande passante ou en raison de restrictions locales de proxy.

Pour utiliser une installation locale de MathJax, veuillez d’abord télécharger la bibliothèque complète de MathJax sur https://www.mathjax.org/, puis l’installer sur un serveur web. Pour terminer, modifiez les paramètres httpurl et/ou httpsurl de la configuration du filtre MathJax de façon à les faire pointer vers l’URL locale du fichier MathJax.js.';
$string['mathjaxsettings'] = 'Configuration MathJax';
$string['mathjaxsettings_desc'] = 'La configuration MathJax par défaut devrait être adéquate pour la plupart des utilisateurs. Cependant, MathJax possède de nombreuses possibilités de configurations standards, qui peuvent être ajoutées ici.';
$string['privacy:metadata'] = 'Le plugin Mathjax n’enregistre aucune donnée personnelle.';
$string['texfiltercompatibility'] = 'Compatibilité filtre TeX';
$string['texfiltercompatibility_help'] = 'Le filtre MathJax peut être utilisé en remplacement du filtre TeX.

Pour prendre en charge tous les délimiteurs du filtre TeX, MathJax sera configuré de sorte à afficher les équations dans le corps du texte à l’aide de TeX.';
