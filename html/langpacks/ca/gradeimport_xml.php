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
 * Strings for component 'gradeimport_xml', language 'ca', version '3.8'.
 *
 * @package     gradeimport_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errbadxmlformat'] = 'Error: format XML incorrecte';
$string['errduplicategradeidnumber'] = 'Error: hi ha dos elements de qualificació en aquest curs amb número ID \'{$a}\'. Això no hauria de ser possible.';
$string['errduplicateidnumber'] = 'Error: número ID duplicat';
$string['errincorrectgradeidnumber'] = 'Error: el número ID «{$a}» del fitxer d\'importació no es correspon amb cap element de qualificació.';
$string['errincorrectidnumber'] = 'Error: número ID incorrecte';
$string['errincorrectuseridnumber'] = 'Error: el número ID «{$a}» del fitxer d\'importació no es correspon amb cap usuari.';
$string['error'] = 'S\'han produït errors';
$string['errorduringimport'] = 'S\'ha produït un error en intentar importar: {$a}';
$string['fileurl'] = 'URL d\'un fitxer remot';
$string['fileurl_help'] = 'El camp URL del fitxer remot és per portar les dades des d\'un servidor remot, com ara un sistema d\'informació d\'estudiants.';
$string['importxml'] = 'Importació XML';
$string['importxml_help'] = 'Les qualificacions es poden importar mitjançant un fitxer XML que contingui nombres ID d\'usuaris i nombres ID d\'activitats. Per obtenir el format correcte, primer exporteu algunes qualificacions al format XML i després visualitzeu el fitxer resultant.';
$string['pluginname'] = 'Fitxer XML';
$string['xml:publish'] = 'Publica qualificacions importades en format XML';
$string['xml:view'] = 'Importa qualificacions d\'un fitxer XML';
