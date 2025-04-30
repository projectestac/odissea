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
 * Strings for component 'atto_chemrender', language 'en', version '4.4'.
 *
 * @package     atto_chemrender
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['browserepositories'] = 'Browse repositories...';
$string['chemdoodle'] = 'ChemDoodle';
$string['enterfilename'] = 'Enter a filename';
$string['enterurl'] = 'Enter a molecule file (.mol, .pdb, .cml, etc.) or spectrum file (.jdx)';
$string['height'] = 'Height';
$string['jmol'] = 'JMol';
$string['jmoloptions'] = 'JMol Options';
$string['optionaxis'] = 'Axis labels for spectrum';
$string['optionconsolecommand'] = 'Console commands';
$string['optionconsolecommand_help'] = 'Customize molecule display using console commands.

* Command documentation: http://chemapps.stolaf.edu/jmol/docs
* Colors: http://jmol.sourceforge.net/jscolors

Examples:

* "select all; label on; select hydrogen; label off;"

    Label all atoms with their atomic symbols and atom number, except for hydrogen atoms.

* "restrict :a; spacefill; color temperature;"

    Render atoms as shaded spheres with color based on temperature property.

* "ribbon only; select all; color group;"

    Render as ribbons and color based on group.

* "select all; wireframe off; spacefill off; select protein or dna; cartoons on; color chain; select cd; spacefill on; color FFD98F;"

    Render protein or dna as cartoons with color based on chain. Render Cadmium (Cd) atoms as shaded spheres with a cadmium yellow color.

* "spin on;"

    Make molecule spin.';
$string['optionconsolecommandhelp'] = 'Jmol console command help';
$string['optiondownloadlink'] = 'Show download link';
$string['optionhelplink'] = 'Show help link';
$string['optionlabel'] = 'Show label on/off option';
$string['optionspin'] = 'Show spin on/off option';
$string['optionstyleselect'] = 'Show style selection';
$string['optionxaxis'] = 'xAxis label';
$string['optionyaxis'] = 'yAxis label';
$string['pluginname'] = 'ChemRender';
$string['preview'] = 'Preview';
$string['rendererselection'] = 'Select renderer';
$string['submit'] = 'Submit';
$string['width'] = 'Width';
