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
 * Strings for component 'tool_langimport', language 'it', version '4.1'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Impossibile connettersi al server di download. Non è possibile installare o aggiornare automaticamente i language pack. Si prega di scaricare i file ZIP appropriati da <a href="{$a->src}">{$a->src}</a> e decomprimerli manualmente nella cartella dei dati <code>{$a- >dest}</code>';
$string['install'] = 'Installa i Language Pack selezionati';
$string['installedlangs'] = 'Language pack installati';
$string['installfailed'] = 'L\'installazione dei language pack non è andata a buon fine.';
$string['installfinished'] = 'L\'installazione dei language pack è terminata.';
$string['installpending'] = 'Saranno installati i seguenti language pack: {$a}.';
$string['installscheduled'] = 'L\'installazione del language pack è stata pianificata.';
$string['langimport'] = 'Utility di importazione lingua';
$string['langimportdisabled'] = 'La funzione di importazione dei language pack è stata disabilitata. I tuoi language pack devono essere aggiornati manualmente a livello di file system. Ricordare di svuotare la cache della stringhe dopo l\'aggiornamento del language pack.';
$string['langpackinstalled'] = 'Il language pack \'{$a}\' è stato installato correttamente';
$string['langpackinstalledevent'] = 'Installazione language pack';
$string['langpacknotremoved'] = 'Si è verificato un errore; il language pack \'{$a}\' non è stato rimosso del tutto. Per favore verifica i permessi sui file';
$string['langpackremoved'] = 'Il language pack \'{$a}\' è stato rimosso';
$string['langpackremovedevent'] = 'Rimozione language pack';
$string['langpackupdated'] = 'Il language pack \'{$a}\' è stato aggiornato correttamente';
$string['langpackupdatedevent'] = 'Aggiornamento language pack';
$string['langpackupdateskipped'] = 'L\'aggiornamento del language pack \'{$a}\' è stato saltato';
$string['langpackuptodate'] = 'Il language pack \'{$a}\' è già aggiornato';
$string['langunsupported'] = '<p>Il server non sembra supportare completamente le seguenti lingue:</p><ul>{$a->missinglocales}</ul><p>Verrà utilizzato la localizzazione globale ({$a->globallocale})  per formattare determinate stringhe come date o numeri.</p>';
$string['langupdatecomplete'] = 'Aggiornamento Language pack completato';
$string['missingcfglangotherroot'] = 'Manca il valore per la configurazione di $CFG->langotherroot';
$string['missinglangparent'] = 'Manca il parent language <em>{$a->parent}</em> of <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'Il language pack Inglese non può essere rimosso';
$string['nolangupdateneeded'] = 'Tutti i language pack sono aggiornati, non sono necessari ulteriori aggiornamenti';
$string['pluginname'] = 'Language pack';
$string['privacy:metadata'] = 'Il plugin "Language pack" non memorizza dati personali.';
$string['purgestringcaches'] = 'Svuota la cache delle stringhe';
$string['search'] = 'Cerca language pack disponibili';
$string['selectlangs'] = 'Selezionare i language pack da rimuovere';
$string['uninstall'] = 'Rimuovi i language pack selezionati';
$string['uninstallconfirm'] = 'Stai per rimuovere i seguenti language pack <strong>{$a}</strong>. Sei sicuro ?';
$string['updatelangs'] = 'Aggiornamento Language Pack installati';
$string['updatelangsnote'] = 'L\'aggiornamento di tutti i language pack installati facendo clic sul pulsante può richiedere molto tempo e causare timeout. Si consiglia invece di utilizzare l\'attività pianificata \'{$a->taskname}\' (che viene eseguita ogni giorno per impostazione di default).';
