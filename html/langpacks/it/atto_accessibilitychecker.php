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
 * Strings for component 'atto_accessibilitychecker', language 'it', version '4.1'.
 *
 * @package     atto_accessibilitychecker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['emptytext'] = 'Testo vuoto';
$string['entiredocument'] = 'Tutto il documento';
$string['imagesmissingalt'] = 'Le immagini richiedono un testo alternativo. Per risolvere il problema aggiungi un attributo alt all\'immagine. È possibile usare un attributo alt vuoto ma solo se l\'immagine ha scopi puramente decorativi e non veicola informazioni.';
$string['needsmorecontrast'] = 'I colori di primo piano e sfondo non hanno sufficiente contrasto. Per risolvere il problema devi modificare uno dei due colori in modo da facilitare la lettura.';
$string['needsmoreheadings'] = 'È presente moto testo privo di intestazioni. Le intestazioni facilitano la navigazione della pagine tramite screen reader e rendono comunque il testo più usabile per chiunque.';
$string['nowarnings'] = 'Congratulazioni, non sono stati trovati problemi di accessibilità!';
$string['pluginname'] = 'Verifica accessibilità';
$string['privacy:metadata'] = 'Il plugin atto_accessibilitychecker non memorizza dati personali.';
$string['report'] = 'Report accessibilità:';
$string['tablesmissingcaption'] = 'Le tabelle devono avere le didascalie. Sebbene non strettamente necessarie per tutte le tabelle, le didascalie sono generalmente molto utili.';
$string['tablesmissingheaders'] = 'Le tabelle devono utilizzare le intestazioni di riga e di colonna';
$string['tableswithmergedcells'] = 'Le tabelle non devono contenere celle unite. Nonostante si tratti di markup standard da molti anni, molti screen reader non supportano perfettamente tabelle complesse. Ove è possibile, è preferibile semplificare le tabelle evitando celle unite.';
