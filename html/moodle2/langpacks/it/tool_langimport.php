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
 * Strings for component 'tool_langimport', language 'it', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_langimport
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['install'] = 'Installa i Language Pack selezionati';
$string['installedlangs'] = 'Language pack installati';
$string['langimport'] = 'Utility di importazione lingua';
$string['langimportdisabled'] = 'La funzione di importazione dei language pack è stata disabilitata. I tuoi language pack devono essere aggiornati manualmente a livello di file system. Ricordare di svuotare la cache della stringhe dopo l\'aggiornamento del language pack.';
$string['langpackinstalled'] = 'Il language pack \'{$a}\' è stato installato correttamente';
$string['langpackinstalledevent'] = 'Installato language pack';
$string['langpacknotremoved'] = 'Si è verificato un errore; il language pack \'{$a}\' non è stato rimosso del tutto. Per favore verifica i permessi sui file';
$string['langpackremoved'] = 'Il language pack \'{$a}\' è stato rimosso';
$string['langpackremovedevent'] = 'Rimosso language pack';
$string['langpackupdated'] = 'Il language pack \'{$a}\' è stato aggiornato correttamente';
$string['langpackupdatedevent'] = 'Aggiornato language pack';
$string['langpackupdateskipped'] = 'L\'aggiornamento del language pack \'{$a}\' è stato saltato';
$string['langpackuptodate'] = 'Il language pack \'{$a}\' è già aggiornato';
$string['langupdatecomplete'] = 'Aggiornamento Language pack completato';
$string['missingcfglangotherroot'] = 'Manca il valore per la configurazione di $CFG->langotherroot';
$string['missinglangparent'] = 'Manca il parent language <em>{$a->parent}</em> of <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'Il language pack Inglese non può essere rimosso';
$string['nolangupdateneeded'] = 'Tutti i language pack sono aggiornati, non sono necessari ulteriori aggiornamenti';
$string['pluginname'] = 'Language pack';
$string['purgestringcaches'] = 'Svuota la cache delle stringhe';
$string['remotelangnotavailable'] = 'Non è possibile installare automaticamente i language pack perché Moodle non riesce a connettersi a download.moodle.org. Si prega di scaricare i file ZIP necessari da <a href="https://download.moodle.org/langpack/">download.moodle.org/langpack</a>, copiarli nella cartella {$a} e scompattarli manualmente.';
$string['selectlangs'] = 'Devi selezionare i language pack da rimuovere';
$string['uninstall'] = 'Rimuovi i language pack selezionati';
$string['uninstallconfirm'] = 'Stai per rimuovere i seguenti language pack <strong>{$a}</strong>. Sei sicuro ?';
$string['updatelangs'] = 'Aggiorna i Language Pack installati';
