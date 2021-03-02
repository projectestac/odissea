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
 * Strings for component 'filter_tex', language 'fr', version '3.8'.
 *
 * @package     filter_tex
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configconvertformat'] = 'Si les exécutables <i>latex</i> et <i>dvips</i> sont disponibles en plus de <i>convert</i> et <i>dvisvgm</i>, les images seront créées dans le type sélectionné (<i>convert</i> produit des images GIF ou PNG ; <i>dvisvgm</i> produit des images SVG). Sinon, les images seront créées par mimeTeX en format GIF.';
$string['convertformat'] = 'Format de sortie image';
$string['filtername'] = 'Notation TeX';
$string['latexpreamble'] = 'Préambule LaTeX';
$string['latexsettings'] = 'Réglages de LaTeX Renderer';
$string['pathconvert'] = 'Chemin d\'accès à <i>convert</i>';
$string['pathdvips'] = 'Chemin d\'accès à <i>dvips</i>';
$string['pathdvisvgm'] = 'Chemin d\'accès à <i>dvisvgm</i>';
$string['pathlatex'] = 'Chemin d\'accès à <i>latex</i>';
$string['pathmimetex'] = 'Chemin d\'accès à <i>mimetex</i>';
$string['pathmimetexdesc'] = 'Moodle utilisera son propre programme Mimetex, à moins qu\'un chemin valide soit indiqué ici.';
$string['privacy:metadata'] = 'Le plugin Notation TeX n\'enregistre aucune donnée personnelle.';
$string['source'] = 'Source TeX';
