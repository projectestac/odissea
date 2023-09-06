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
 * Strings for component 'enrol_auto', language 'it', version '4.1'.
 *
 * @package     enrol_auto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auto:config'] = 'Configurare istanze auto iscrizione';
$string['auto:manage'] = 'Gestire utenti iscritti';
$string['auto:unenrol'] = 'Disiscrivere utenti dal corso';
$string['auto:unenrolself'] = 'Disiscriversi dal corso';
$string['courseview'] = 'Visualizzazione corso';
$string['customwelcomemessage'] = 'Messaggio di benvenuto personalizzato';
$string['customwelcomemessage_help'] = 'E\' possibile aggiungere un messaggio di benvenuto personalizzato, in formato testo semplice o in formattazione Moodle.

E\' possibile includere i seguenti segnaposto:

* Nome del corso {$a->coursename}
* Link alla pagina del profilo dell\'utente {$a->profileurl}';
$string['defaultrole'] = 'Ruolo assegnato di default';
$string['defaultrole_desc'] = 'Seleziona il ruolo che deve essere assegnato agli utenti durante l\'auto iscrizione.';
$string['editenrolment'] = 'Modifica iscrizione';
$string['enrolon'] = 'Iscrivi dopo';
$string['enrolon_desc'] = 'Eventi che attiveranno l\'auto iscrizione.';
$string['enrolon_help'] = 'Seleziona l\'evento che farà attivare l\'auto iscrizione.

**Visualizzazione del corso** - Iscrivi un utente alla visualizzazione di un corso.<br>

**Login utente** - Iscrivi utenti subito dopo il login.<br>

**Attività nel corso/Visualizzazione di risorsa** - Iscrivi un utente alla visualizzazione di una delle attività/risorse del corso selezionate.<br>
*NOTA:* questa opzione richiede la modalità di iscrizione Accesso ospiti nell\'istanza.';
$string['modview'] = 'Visualizzazione attività/risorsa';
$string['modviewmods'] = 'Attività/risorse';
$string['modviewmods_desc'] = 'La visualizzazione di una delle risorse/attività selezionate attiverà l\'auto iscrizione.';
$string['pluginname'] = 'Auto iscrizione';
$string['pluginname_desc'] = 'Il plugin Auto iscrizione iscrive automaticamente gli utenti alla visualizzazione di un corso/attività/risorsa.';
$string['requirepassword'] = 'Richiedi chiave di iscrizione';
$string['requirepassword_desc'] = 'Richiede chiave di iscrizione nei nuovi corsi e impedisce l\'eliminazione di chiavi di iscrizione dai corsi già esistenti.';
$string['role'] = 'Ruolo assegnato di default';
$string['sendcoursewelcomemessage'] = 'Invia messaggio di benvenuto al corso';
$string['sendcoursewelcomemessage_help'] = 'Se abilitato, invia un messaggio e-mail di benvenuto al corso agli utenti che si auto iscrivono.';
$string['status'] = 'Consenti auto iscrizioni';
$string['status_desc'] = 'Consente di default l\'auto iscrizione degli utenti al corso.';
$string['status_help'] = 'L\'impostazione stabilisce se il plugin Auto iscrizione è abilitato per questo corso.';
$string['unenrol'] = 'Disiscrivi utente';
$string['unenrolselfconfirm'] = 'Sei sicuro di volerti disiscrivere dal corso "{$a}"?';
$string['unenroluser'] = 'Sei sicuro di rimuovere l\'iscrizione dell\'utente "{$a->user}" dal corso "{$a->course}"?';
$string['userlogin'] = 'Login utente';
$string['welcometocourse'] = 'Benvenuto in {$a}';
$string['welcometocoursetext'] = 'Benvenuto(a) in {$a->coursename}!

Se non lo hai già fatto, dovresti aggiornare la pagina del tuo profilo personale in modo da consentirci di conoscerti meglio:

{$a->profileurl}';
