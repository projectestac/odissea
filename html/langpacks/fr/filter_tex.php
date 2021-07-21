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
 * Strings for component 'filter_tex', language 'fr', version '3.11'.
 *
 * @package     filter_tex
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configconvertformat'] = 'Si les exécutables <em>latex</em> et <em>dvips</em> sont disponibles en plus de <em>convert</em> et <em>dvisvgm</em>, les images seront créées dans le type sélectionné (<em>convert</em> produit des images GIF ou PNG ; <em>dvisvgm</em> produit des images SVG). Sinon, les images seront créées par mimeTeX en format GIF.';
$string['convertformat'] = 'Format de sortie image';
$string['filtername'] = 'Notation TeX';
$string['latexpreamble'] = 'Préambule LaTeX';
$string['latexsettings'] = 'Réglages de LaTeX Renderer';
$string['pathconvert'] = 'Chemin d\'accès à <em>convert</em>';
$string['pathdvips'] = 'Chemin d\'accès à <em>dvips</em>';
$string['pathdvisvgm'] = 'Chemin d\'accès à <em>dvisvgm</em>';
$string['pathlatex'] = 'Chemin d\'accès à <em>latex</em>';
$string['pathmimetex'] = 'Chemin d\'accès à <em>mimetex</em>';
$string['pathmimetexdesc'] = 'Moodle utilisera son propre programme Mimetex, à moins qu\'un chemin valide soit indiqué ici.';
$string['privacy:metadata'] = 'Le plugin Notation TeX n\'enregistre aucune donnée personnelle.';
$string['source'] = 'Source TeX';
