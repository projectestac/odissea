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
 * Strings for component 'antivirus_clamav', language 'ca', branch 'MOODLE_38_STABLE'
 *
 * @package   antivirus_clamav
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'No s\'ha pogut executar Clam AV. El missatge d\'error retornat és «{$a}». Heus aquí la sortida de Clam:';
$string['clamfailureonupload'] = 'En cas d\'errada del ClamAV';
$string['configclamactlikevirus'] = 'Tracta els fitxers com a virus';
$string['configclamdonothing'] = 'Tracta els fitxers com a correctes';
$string['configclamfailureonupload'] = 'Si heu configurat el Clam per tal d\'escanejar els fitxers pujats, però està mal configurat o falla en executar-se per alguna raó desconeguda, com s\'ha d\'actuar? Si escolliu «Tracta els fitxers com a virus», es mouran a l\'àrea de quarantena, o s\'esborraran. Si escolliu «Tracta els fitxers com a correctes», els fitxers es mouran al seu directori normal de destinació. Sigui com sigui, s\'advertirà als administradors que el Clam ha fallat. Si escolliu «Tracta els fitxers com a virus» i per alguna raó el Clam falla en executar-se (normalment, perquè heu introduït un valor no vàlid a la variable «pathtoclam»), TOTS els fitxers que es pugin es mouran a l\'àrea de quarantena o s\'esborraran, per la qual cosa heu d\'anar amb compte amb aquest paràmetre.';
$string['invalidpathtoclam'] = 'Moodle ha estat configurat per executar Clam amb cada fitxer que es pengi, pero el camí de Clam AV proporcionat, {$a}, no és vàlid.';
$string['pathtoclam'] = 'Ruta al ClamAV';
$string['pluginname'] = 'Antivirus ClamAV';
$string['quarantinedir'] = 'Directori de quarantena';
$string['unknownerror'] = 'Error desconegut de Clam.';
