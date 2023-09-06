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
 * Strings for component 'debug', language 'it', version '4.1'.
 *
 * @package     debug
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'Il plugin di autenticazione {$a} non è stato trovato.';
$string['blocknotexist'] = 'Il blocco {$a} non esiste';
$string['cannotbenull'] = '{$a} non può essere null!';
$string['cannotdowngrade'] = 'Non è possibile eseguire il downgrade del plugin {$a->plugin} dalla versione {$a->oldversion} alla versione {$a->newversion}.';
$string['cannotfindadmin'] = 'Non è stato possibile trovare un amministratore!';
$string['cannotinitpage'] = 'Non è possibile inizializzare completamente la pagina: {$a->name} non valida {$a->id} id';
$string['cannotsetuptable'] = 'Il setup delle tabelle {$a} non è andato a buon fine!';
$string['codingerror'] = 'È stato rilevato un errore di programmazione, deve essere sistemato da un programmatore: {$a}';
$string['configmoodle'] = 'Moodle non è ancora stato configurato. È necessario editare il file config.php';
$string['debuginfo'] = 'Informazioni di debug';
$string['erroroccur'] = 'Si è verificato un errore durante lo svolgimento di questo processo';
$string['invalidarraysize'] = 'La dimensione degli array è errata nei parametri di {$a}';
$string['invalideventdata'] = 'Sono stati inviati dati non corretti di un evento: {$a}';
$string['invalidparameter'] = 'È stato rilevato un valore non valido di un parametro';
$string['invalidresponse'] = 'È stato individuato un valore non valido nella risposta';
$string['line'] = 'Linea';
$string['missingconfigversion'] = 'La tabella di configurazione non contiene la versione, non è possibile continuare.';
$string['modulenotexist'] = 'Il modulo {$a} non esiste';
$string['morethanonerecordinfetch'] = 'Nella fetch() è stato trovato più di un record!';
$string['mustbeoveride'] = 'Il metodo astratto {$a} deve essere overridden';
$string['noadminrole'] = 'Non è stato possibile trovare il ruolo amministratore';
$string['noblocks'] = 'Non ci sono blocchi installati!';
$string['nocate'] = 'Non ci sono categorie!';
$string['nomodules'] = 'Non sono stati trovati moduli!';
$string['nopageclass'] = 'È stato importato {$a} ma non sono state trovate page class';
$string['noreports'] = 'Non ci sono report visualizzabili';
$string['notables'] = 'Non ci sono tabelle!';
$string['outputbuffer'] = 'Buffer di output';
$string['phpvaroff'] = 'La variabile PHP \'{$a->name}\' dovrebbe essere impostata ad Off - {$a->link}';
$string['phpvaron'] = 'La variabile PHP \'{$a->name}\' non è impostata ad On - {$a->link}';
$string['reactive_highlightoff'] = 'Evidenziazione OFF';
$string['reactive_highlighton'] = 'Evidenziazione ON';
$string['reactive_readmodeoff'] = 'Modalità lettura OFF';
$string['reactive_readmodeon'] = 'Modalità lettura ON';
$string['reactive_resetpanel'] = 'Reimposta apannello';
$string['reactive_saveingwarning'] = 'Attenzione: la modifica dello stato può produrre risultati inattesi.';
$string['sessionmissing'] = 'L\'oggetto {$a} manca dalla sessione';
$string['sqlrelyonobsoletetable'] = 'Questo SQL fa affidamento su tabelle obsolete: {$a}!. Il tuo codice deve essere sistemato da uno sviluppatore.';
$string['stacktrace'] = 'Stack trace';
$string['withoutversion'] = 'Il file version.php principale è mancante, illeggibile o rovinato.';
$string['xmlizeunavailable'] = 'Le funzioni xmlize non sono disponibili';
