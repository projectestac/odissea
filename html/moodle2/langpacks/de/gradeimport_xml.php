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
 * Strings for component 'gradeimport_xml', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   gradeimport_xml
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errbadxmlformat'] = 'Fehler: ungültiges XML-Format';
$string['errduplicategradeidnumber'] = 'Fehler: Es gibt zwei Bewertungsaspekte mit der ID-Nummer \'{$a}\' in diesem Kurs. Dies ist nicht möglich!';
$string['errduplicateidnumber'] = 'Fehler: doppelte ID-Nummer';
$string['errincorrectgradeidnumber'] = 'Fehler: Die ID-Nummer \'{$a}\' aus der Importdatei passt zu keinem Bewertungsaspekt.';
$string['errincorrectidnumber'] = 'Fehler: ungültige ID-Nummer';
$string['errincorrectuseridnumber'] = 'Fehler: Die ID-Nummer \'{$a}\' aus der Importdatei passt zu keinem Nutzer!';
$string['error'] = 'Fehler aufgetreten';
$string['errorduringimport'] = 'Ein Fehler trat beim Import auf: {$a}';
$string['fileurl'] = 'URL zu Remotedatei';
$string['fileurl_help'] = 'Tragen Sie hier die URL für eine Datei mit Daten auf einem Remote-Server ein, die eingelesen werden soll. Dies können z.B. Daten von einem Verwaltungssystem sein.';
$string['importxml'] = 'XML-Import';
$string['importxml_help'] = 'Bewertungen können mithilfe einer XML-Datei eingelesen werden. Diese muss die Nutzer-ID-Nummer und die Aktivitäts-ID enthalten. Um das geanue Format der XML-Datei zu ermitteln, erstellen Sie zunächst einen Export mit einigen Bewertungen. Verwenden Sie dann die darin enthaltene Struktur für einen Import.';
$string['pluginname'] = 'XML-Datei';
$string['privacy:metadata'] = 'Das XML-Importplugin für Bewertungen speichert keine personenbezogenen Daten.';
$string['xml:publish'] = 'Aus XML Datei importierte Bewertungen veröffentlichen';
$string['xml:view'] = 'Bewertungen aus XML-Datei importieren';
