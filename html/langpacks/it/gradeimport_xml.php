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
 * Strings for component 'gradeimport_xml', language 'it', version '4.1'.
 *
 * @package     gradeimport_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errbadxmlformat'] = 'Errore - formato XML non corretto';
$string['errduplicategradeidnumber'] = 'Errore - ci sono due elementi di valutazione in questo corso con idnumber \'{$a}\'. Questo non dovrebbe essere possibile.';
$string['errduplicateidnumber'] = 'Errore - idnumber duplicato';
$string['errincorrectgradeidnumber'] = 'Errore - l\'idnumber \'{$a}\' dal file di importazione non corrisponde ad alcun elemento di valutazione.';
$string['errincorrectidnumber'] = 'Errore - idnumber errato';
$string['errincorrectuseridnumber'] = 'Errore - l\'idnumber \'{$a}\' dal file di importazione non corrisponde a nessun utente.';
$string['error'] = 'Si stanno verificando errori';
$string['errorduringimport'] = 'Si è verificato un errore durante l\'importazione: {$a}';
$string['fileurl'] = 'URL del file remoto';
$string['fileurl_help'] = 'Il campo serve per indicare l\'URL remoto di un server dal quale prendere i dati, ad esempio uno student information system.';
$string['importxml'] = 'Importazione XML';
$string['importxml_help'] = 'Le valutazioni possono essere importate tramite un file XML contenente i codici identificativi degli utenti e delle attività. Per conoscere il formato da utilizzare, puoi esportare delle valutazioni in formato XML e visualizzare il formato del file.';
$string['importxml_link'] = 'grade/import/xml/index';
$string['pluginname'] = 'File XML';
$string['privacy:metadata'] = 'Il plugin per l\'importazione delle valutazioni \'File XML\' non memorizza dati personali.';
$string['xml:publish'] = 'Pubblicare le valutazioni importate da XML';
$string['xml:view'] = 'Importare le valutazioni da XML';
