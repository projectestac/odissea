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
 * Strings for component 'gradeimport_xml', language 'sv', version '4.5'.
 *
 * @package     gradeimport_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errbadxmlformat'] = 'Fel - ogiltigt XML-format';
$string['errduplicategradeidnumber'] = 'Fel - det finns två komponenter för betyg med id-numret \'{$a}\' i den här kursen. Det ska vara omöjligt.';
$string['errduplicateidnumber'] = 'Fel - dubbletter av id-nummer';
$string['errincorrectgradeidnumber'] = 'Fel - id-numret \'{$a}\' från importfilen matchar inte någon komponent för betyg.';
$string['errincorrectidnumber'] = 'Fel - ogiltigt id-nummer';
$string['errincorrectuseridnumber'] = 'Fel - id-numret \'{$a}\' från importfilen matchar inte någon användare.';
$string['error'] = 'Det uppstår fel';
$string['errorduringimport'] = 'Ett fel inträffade när vid försök av import: {$a}';
$string['fileurl'] = 'URL till fjärrfil';
$string['fileurl_help'] = 'URL-fältet för fjärrfilen är till för att hämta data från en fjärrserver, till exempel ett studentinformationssystem.';
$string['importxml'] = 'XML-import';
$string['importxml_help'] = 'Resultat kan importeras via en XML-fil som innehåller användar-ID-nummer och aktivitets-ID nummer. Om du vill hämta rätt format exporterar du först vissa resultat till XML-filen och öppnar sedan filen.';
$string['importxml_link'] = 'grade/import/xml/index';
$string['pluginname'] = 'XML-fil';
$string['privacy:metadata'] = 'Pluginmodulen Importera betyg från XML lagrar inga personuppgifter.';
$string['xml:publish'] = 'Publicera betyg som importerats från XML';
$string['xml:view'] = 'Importera betyg från XML';
