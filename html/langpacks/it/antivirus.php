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
 * Strings for component 'antivirus', language 'it', version '4.1'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Plugin antivirus disponibili';
$string['antiviruscommonsettings'] = 'Impostazioni comuni antivirus';
$string['antiviruses'] = 'Plugin antivirus';
$string['antivirussettings'] = 'Gestione plugin antivirus';
$string['configantivirusplugins'] = 'Selezionare i plugin antivirus che si desidera utilizzare e la sequenza di utilizzo.';
$string['dataerrordesc'] = 'Si è verificato un errore nell\'analizzatore dei dati.';
$string['dataerrorname'] = 'Errore nell\'analizzatore dei dati.';
$string['datainfecteddesc'] = 'Sono stati rilevati dati infetti.';
$string['datainfectedname'] = 'Dati infetti';
$string['datastream'] = 'Dati';
$string['emailadditionalinfo'] = 'Dettagli aggiuntivi riportati dal motore antivirus:';
$string['emailauthor'] = 'Caricato da:';
$string['emailcontenthash'] = 'Hash del contenuto:';
$string['emailcontenttype'] = 'Tipo di contenuto:';
$string['emaildate'] = 'Data di caricamento:';
$string['emailfilename'] = 'Nome del file:';
$string['emailfilesize'] = 'Dimensione del file:';
$string['emailgeoinfo'] = 'Localizzazione geografica:';
$string['emailinfectedfiledetected'] = 'File infetto individuato';
$string['emailipaddress'] = 'Indirizzo IP:';
$string['emailreferer'] = 'Riferimento:';
$string['emailreport'] = 'Report:';
$string['emailscanner'] = 'Analizzatore:';
$string['emailscannererrordetected'] = 'Si è verificato un errore nell\'analizzatore';
$string['emailsubject'] = '{$a} :: Notifica Antivirus';
$string['enablequarantine'] = 'Abilita quarantena';
$string['enablequarantine_help'] = 'Nella cartella di quarantena verranno inseriti i file infetti per poterli ispezionare in seguito ([dataroot]/{$a}). Il caricamento dei file sarà comunque segnalato come non andato a buon fine. Qualora fosse presente un processo di analisi virus a livello di sistema, sarà necessario escludere la cartella di quarantena dall\'analisi.';
$string['fileerrordesc'] = 'Si è verificato un errore nell\'analizzatore dei file.';
$string['fileerrorname'] = 'Errore nell\'analizzatore dei file.';
$string['fileinfecteddesc'] = 'È stato individuato un file infetto';
$string['fileinfectedname'] = 'File infetto';
$string['notifyemail'] = 'Email delle notifiche antivirus';
$string['notifyemail_help'] = 'Le notifiche antivirus saranno indirizzate all\'email configurata in caso di individuazione di un virus. Non configurando l\'impostazione, le notifiche saranno inviate a tutti gli amministratori del sito.';
$string['notifylevel'] = 'Livello di notifica';
$string['notifylevel_help'] = 'I differenti livelli di notifica che si desidera ricevere';
$string['notifylevelerror'] = 'Individua minacce ed errori durante la scansione';
$string['notifylevelfound'] = 'Individua solamente minacce';
$string['privacy:metadata'] = 'Il sistema Antivirus non memorizza dati personali.';
$string['quarantinedfiles'] = 'File inseriti in quarantena dall\'antivirus';
$string['quarantinedisabled'] = 'La quarantena è disabilitata, i file non sono stati memorizzati.';
$string['quarantinetime'] = 'Durata massima quarantena:';
$string['quarantinetime_desc'] = 'I file in quarantena saranno rimossi trascorsa la durata massima della quarantena.';
$string['taskcleanup'] = 'Eliminazione file in quarantena.';
$string['threshold'] = 'Soglia per il controllo di stato';
$string['threshold_desc'] = 'Quanto indietro controllare rispetto a precedenti risultati relativi ad errore ed altro, come riportato su {$a}.';
$string['unknown'] = 'Sconosciuto';
$string['virusfound'] = '{$a->item} è stato analizzato dall\'antivirus ed è risultato infetto.';
