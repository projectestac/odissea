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
 * Strings for component 'gradeimport_xml', language 'ro', version '4.1'.
 *
 * @package     gradeimport_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errbadxmlformat'] = 'Eroare - format XML greșit';
$string['errduplicategradeidnumber'] = 'Eroare - sunt două intrări cu id-ul \'{$a}\' la acest curs. Acest lucru ar trebui să fie imposibil.';
$string['errduplicateidnumber'] = 'Eroare - duplicare de id';
$string['errincorrectgradeidnumber'] = 'Eroare - id-ul \'{$a}\' din fișierul importat nu se potrivește cu nico intrare din note.';
$string['errincorrectidnumber'] = 'Eroare - id incorect';
$string['errincorrectuseridnumber'] = 'Eroare - id-ul \'{$a}\' din fișierul importat nu se potrivește cu niciun utilizator.';
$string['error'] = 'Apar erori';
$string['errorduringimport'] = 'A apărut o eroare în timpul importului: {$a}';
$string['fileurl'] = 'URL fișier';
$string['fileurl_help'] = 'Câmpul URL fișier la distanță este pentru preluarea datelor de pe un server la distanță, cum ar fi un sistem de informații pentru cursanți.';
$string['importxml'] = 'Import XML';
$string['importxml_help'] = 'Notele pot fi importate prin intermediul unui fișier XML care conține  ID ale utilizatorilor și ID activitate. Pentru a obține formatul corect, mai întâi exportați câteva note într-un fișier XML, apoi vizualizați fișierul.';
$string['importxml_link'] = 'grade/import/xml/index';
$string['pluginname'] = 'fișier XML';
$string['privacy:metadata'] = 'Pluginul de import de note în format XML nu stochează date personale.';
$string['xml:publish'] = 'Publicați notele importate din XML';
$string['xml:view'] = 'Importați note din XML';
