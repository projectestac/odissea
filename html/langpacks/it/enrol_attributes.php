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
 * Strings for component 'enrol_attributes', language 'it', version '4.1'.
 *
 * @package     enrol_attributes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcondition'] = 'Aggiungi condizione';
$string['addgroup'] = 'Aggiungi gruppo';
$string['ajax-error'] = 'Si è verificato un errore';
$string['ajax-okforced'] = '{$a} utenti sono stati iscritti correttamente';
$string['ajax-okpurged'] = 'Le iscrizioni sono state eliminate';
$string['attributes:config'] = 'Configurare istanze del plugin';
$string['attributes:manage'] = 'Gestire utenti iscritti';
$string['attributes:unenrol'] = 'Disiscrivere utenti dal corso';
$string['attributes:unenrolself'] = 'Disiscriversi dal corso';
$string['attrsyntax'] = 'Regole dei campi del profilo utente';
$string['attrsyntax_help'] = '<p>Queste regole utilizzano esclusivamente i campi personalizzati del profilo utente.</p>';
$string['confirmforce'] = 'L\'operazione iscriverà nuovamente tutti gli utenti per i quali la regola è valida.';
$string['confirmpurge'] = 'L\'operazione disiscriverà tutti gli utenti tutti gli utenti per i quali la regola è valida.';
$string['defaultrole'] = 'Ruolo di default';
$string['defaultrole_desc'] = 'Il ruolo di default utilizzato per iscrivere utenti con questo plugin (ogni istanza può sovrascrivere questo attributo).';
$string['deletecondition'] = 'Elimina condizione';
$string['force'] = 'Forza le iscrizioni adesso';
$string['mappings'] = 'Mappatura Shibboleth';
$string['mappings_desc'] = 'Quando si utilizza l\'autenticazione di Shibboleth, questo plugin può aggiornare automaticamente il profilo di un utente ad ogni login. <br>Ad esempio, se si desidera aggiornare il campo del profilo <code>homeorganizationtype</code> dell\'utente con l\'attributo Shibboleth <code>Shib-HomeOrganizationType</code> (nel caso in cui sia questa la variabile di ambiente disponibile per il server durante il login), è possibile inserire su una linea: <code>Shib-HomeOrganizationType:homeorganizationtype</code><br>E\' possibile inserire tutte le linee necessarie.<br><br> Se non si desidera utilizzare questa caratteristica o se non si utilizza l\'autenticazione Shibboleth, lasciare il campo vuoto.';
$string['pluginname'] = 'Iscrizione con i campi del profilo utente';
$string['profilefields'] = 'I campi del profilo utente da utilizzare nel selettore';
$string['profilefields_desc'] = 'I campi del profilo utente che possono essere utilizzati nella configurazione di una istanza di iscrizione<br><br><b>Se non viene selezionato alcun ruolo, come conseguenza il plugin verrà disabilito nei corsi.</b><br>La caratteristica può comunque essere ancora utilizzata in questo caso.';
$string['purge'] = 'Elimina iscrizioni';
$string['removewhenexpired'] = 'Disiscrivi dopo la scadenza degli attributi';
$string['removewhenexpired_help'] = 'Disiscrivi gli utenti dopo il login se non corrispondono più alle regole degli attributi.';
