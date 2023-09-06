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
 * Strings for component 'filter_tex', language 'it', version '4.1'.
 *
 * @package     filter_tex
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configconvertformat'] = 'Se sono disponibili <i>latex</i> e <i>dvips</i> in aggiunta a <i>convert</i> oppure <i>dvisvgm</i>,  è possibile selezionare il formato immagine preferito (<i>convert</i> genera GIF o PNG; <i>dvisvgm</i> genera SVG). In mancanza, verrà usato <i>mimeTeX</i> che genera immagini in formato GIF';
$string['convertformat'] = 'Formato immagine in output';
$string['filtername'] = 'Notazione TeX';
$string['latexpreamble'] = 'Preambolo LaTex';
$string['latexsettings'] = 'Impostazioni di rendering LaTex';
$string['pathconvert'] = 'Percorso dell\'eseguibile <i>convert</i>';
$string['pathdvips'] = 'Percorso dell\'eseguibile <i>dvips</i>';
$string['pathdvisvgm'] = 'Percorso dell\'eseguibile i>dvisvgm</i>';
$string['pathlatex'] = 'Percorso dell\'eseguibile <i>latex</i>';
$string['pathmimetex'] = 'Percorso del codice binario <i>mimetex</i>';
$string['pathmimetexdesc'] = 'In assenza di un percorso valido, Moodle utilizzerà il proprio eseguibile binario';
$string['privacy:metadata'] = 'Il plugin "Notazione TeX" non memorizza dati personali.';
$string['source'] = 'Sorgente TeX';
