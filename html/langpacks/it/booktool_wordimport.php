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
 * Strings for component 'booktool_wordimport', language 'it', version '3.11'.
 *
 * @package     booktool_wordimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = 'Impossibile aprire il file temporaneo <b>{$a}</b>';
$string['exportbook'] = 'Esporta il libro in formato Microsoft Word';
$string['exportchapter'] = 'Esporta questo capitolo in formato Microsoft Word';
$string['importchapters'] = 'Importa da Microsoft Word';
$string['insertionpoint'] = 'Inserisci prima del capitolo corrente';
$string['insertionpoint_help'] = 'Inserisce il contenuto prima del capitolo corrente, mantenendo tutto il contenuto esistente';
$string['nochapters'] = 'Non è stato possibile esportare in formato Microsoft Word perché il libro non ha capitoli.';
$string['pluginname'] = 'Importazione di file Microsoft Word';
$string['replacebook'] = 'Sostituisci libro';
$string['replacebook_help'] = 'Il contenuto già presente nel libro sarà eliminato prima dell\'importazione';
$string['replacechapter'] = 'Sostituisci il capitolo corrente';
$string['replacechapter_help'] = 'Il capitolo corrente verrà sostituito con il primo capitolo del file, mentre tutti gli altri capitoli saranno mantenuti.';
$string['splitonsubheadings'] = 'Crea paragrafi basandosi su "Titolo 2"';
$string['splitonsubheadings_help'] = 'I paragrafi verranno creati basandosi sugli stili "Titolo 2"';
$string['stylesheetunavailable'] = 'Il foglio di stile XSLT <b>{$a}</b> non è disponibile';
$string['transformationfailed'] = 'La trasformazione XSLT non è andata a buon fine (<b>{$a}</b>)';
$string['wordfile'] = 'File Microsoft Word';
$string['wordfile_help'] = 'Carica il file <i>.docx</i> salvato da Microsoft Word o LibreOffice';
$string['wordimport:export'] = 'Esporta in un file Microsoft Word';
$string['wordimport:import'] = 'Importa da un file Microsoft Word';
$string['xsltunavailable'] = 'Per salvare il file Word è necessario avere la libreria PHP XSLT installata.';
