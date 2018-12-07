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
 * Strings for component 'tool_policy', language 'it', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_policy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = 'Sono consapevole che è stato acquisito il consenso alle politiche';
$string['acceptancecount'] = '{$a->agreedcount} su {$a->policiescount}';
$string['acceptancenote'] = 'Commenti';
$string['acceptancepolicies'] = 'Politiche';
$string['acceptancessavedsucessfully'] = 'I consensi sono stati salvati correttamente.';
$string['acceptancestatusoverall'] = 'Consensi';
$string['acceptanceusers'] = 'Utenti';
$string['actions'] = 'Azioni';
$string['activate'] = 'Imposta lo stato su "Attiva"';
$string['activateconfirm'] = '<p>Stai per attivare la politica <em>\'{$a->name}\'</em> e rendere corrente la versione <em>\'{$a->revision}\'</em>.</p><p>Per utilizzare il sito, tutti gli utenti dovranno dare il consenso alla nuova versione della politica.</p>';
$string['activateconfirmyes'] = 'Attiva';
$string['activating'] = 'Attivazione della politica';
$string['agreed'] = 'Consenso dato';
$string['agreedby'] = 'Consenso dato da';
$string['agreedno'] = 'Consenso non dato';
$string['agreednowithlink'] = 'Consenso non dato, fai click per dare il consenso a "{$a}"';
$string['agreednowithlinkall'] = 'Consenso non dato, fai click per dare il consenso a tutte le politiche';
$string['agreedon'] = 'Consenso dato il';
$string['agreedyes'] = 'Consenso dato';
$string['agreedyesonbehalf'] = 'Consenso dato nelle veci di';
$string['agreedyesonbehalfwithlink'] = 'Consenso dato nelle veci dell\'utente; fai click per ritirare il consenso a {$a}';
$string['agreedyesonbehalfwithlinkall'] = 'Consenso dato nelle veci dell\'utente; fai click per ritirare il consenso a tutte le politiche';
$string['agreedyeswithlink'] = 'Consenso dato; fai click per ritirare il consenso a {$a}';
$string['agreedyeswithlinkall'] = 'Consenso dato; fai click per ritirare il consenso a tutte le politiche';
$string['agreepolicies'] = 'Per favore dai il consenso alle seguenti politiche';
$string['backtotop'] = 'Torna all\'inizio';
$string['consentbulk'] = 'Consenso';
$string['consentdetails'] = 'Dettagli del conseno';
$string['consentpagetitle'] = 'Consenso';
$string['contactdpo'] = 'Se hai domande sulle politiche, per favore contatta il Data Protection Officer.';
$string['dataproc'] = 'Elaborazione di dati personali';
$string['deleteconfirm'] = '<p>Sei sicuro di eliminare la politica <em>\'{$a->name}\'</em>?</p><p>L\'operazione non potrà essere annullata.</p>';
$string['deleting'] = 'Eliminazione versione';
$string['editingpolicydocument'] = 'Modifica politica';
$string['errorpolicyversionnotfound'] = 'Non esiste una versione della politica con questo identificativo.';
$string['errorsaveasdraft'] = 'Le modifiche minori non possono essere salvate in bozza';
$string['errorusercantviewpolicyversion'] = 'L\'utente non può accedere a questa versione delle politica';
$string['event_acceptance_created'] = 'Creato accordo politiche utente';
$string['event_acceptance_updated'] = 'Aggiornato accordo politiche utente';
$string['filtercapabilityno'] = 'Autorizzazione: Non può dare consenso';
$string['filtercapabilityyes'] = 'Autorizzazione: Può dare consenso';
$string['filterplaceholder'] = 'Cerca una parola o seleziona un filtro';
$string['filterpolicy'] = 'Politica: {$a}';
$string['filterrevision'] = 'Versione: {$a}';
$string['filterrevisionstatus'] = 'Versione: {$a->name} ({$a->status})';
$string['filterrole'] = 'Ruolo: {$a}';
$string['filters'] = 'Filtri';
$string['filterstatusno'] = 'Stato: Consenso non dato';
$string['filterstatusyes'] = 'Stato: Consenso dato';
$string['guestconsent:continue'] = 'Prosegui';
$string['guestconsentmessage'] = 'Se prosegui nella navigazione del sito, ne accetti le politiche:';
$string['iagree'] = 'Accetto {$a}';
$string['iagreetothepolicy'] = 'Accetto la politica';
$string['inactivate'] = 'Imposta lo stato su "Disattivata"';
$string['inactivating'] = 'Disattivazione della politica';
$string['inactivatingconfirm'] = '<p>Stai per disattivare la versione <em>\'{$a->revision}\'</em> della politica <em>\'{$a->name}\'</em>.</p><p>Non saranno applicate politiche finché non verrà resa corrente un\'altra versione.</p>';
$string['inactivatingconfirmyes'] = 'Disattiva';
$string['invalidversionid'] = 'Non esiste una politica con questo identificativo.';
$string['irevokethepolicy'] = 'Ritira il consenso dell\'utente';
$string['managepolicies'] = 'Gestione politiche';
$string['minorchange'] = 'Modifica minore';
$string['minorchangeinfo'] = 'Le modifiche minori non modificano la sostanza della politica e dei termini e condizioni. Gli utenti non dovranno ridare il proprio consenso.';
$string['movedown'] = 'Sposta in basso';
$string['moveup'] = 'Sposta in alto';
$string['mustagreetocontinue'] = 'Prima di proseguire devi dare il consenso alle politiche:';
$string['newpolicy'] = 'Nuova politica';
$string['newversion'] = 'Nuova versione';
$string['nofiltersapplied'] = 'Nessun filtro applicato';
$string['nopermissiontoagreedocs'] = 'Manca autorizzazione per dare il consenso alle politich';
$string['nopermissiontoagreedocsbehalf'] = 'Manca autorizzazione per dare il consenso alle politiche nelle veci di un altro';
$string['nopermissiontoagreedocsbehalf_desc'] = 'Siamo spiacenti, non hai l\'autorizzazione per dare il consenso alle seguenti politiche nelle veci di {$a}:';
$string['nopermissiontoagreedocscontact'] = 'Per ulteriore assistenza, per favore contatta la seguente persona:';
$string['nopermissiontoagreedocs_desc'] = 'Siamo spiacenti, non hai l\'autorizzazione per dare il consenso alle politiche.<br />Non potrai utilizzare il sito finché non saranno state accettate le seguenti politiche:';
$string['nopermissiontoviewpolicyversion'] = 'Non sei autorizzato a visualizzare questa versione delle politica.';
$string['nopolicies'] = 'Non sono presenti versioni attive delle politiche per gli utenti registrati.';
$string['pluginname'] = 'Politiche';
$string['policiesagreements'] = 'Politiche e consensi';
$string['policy:accept'] = 'Dare il consenso alle politiche';
$string['policy:acceptbehalf'] = 'Accetto le politiche nelle veci di un altro';
$string['policydocaudience'] = 'Consenso dell\'utente';
$string['policydocaudience0'] = 'Tutti gli utenti';
$string['policydocaudience1'] = 'Utenti autenticati';
$string['policydocaudience2'] = 'Ospiti';
$string['policydoccontent'] = 'Testo della politica';
$string['policydochdrpolicy'] = 'Politica';
$string['policydochdrversion'] = 'Versione del documento';
$string['policydocname'] = 'Nome';
$string['policydocrevision'] = 'Versione';
$string['policydocsummary'] = 'Riassunto';
$string['policydocsummary_help'] = 'Un riassunto delle politica, possibilmente redatto in forma semplificata e comprensibile.';
$string['policydoctype'] = 'Tipo';
$string['policydoctype0'] = 'Politiche del sito';
$string['policydoctype1'] = 'Politiche di privcy';
$string['policydoctype2'] = 'Politiche di terze parti';
$string['policydoctype99'] = 'Altre politiche';
$string['policy:managedocs'] = 'Gestione politiche';
$string['policyversionacceptedinbehalf'] = 'Il consenso a questa versione delle politica è stato data nelle tue veci da una altro utente.';
$string['policyversionacceptedinotherlang'] = 'Il consenso a Questa versione delle politica è stato dato una lingua differente.';
$string['policy:viewacceptances'] = 'Visualizzare report consensi utente';
$string['previousversions'] = '{$a} versioni precedenti';
$string['privacy:metadata:acceptances'] = 'Informazioni sui consensi dati dagli utenti.';
$string['privacy:metadata:acceptances:lang'] = 'La lingua visualizzata al momento del consenso.';
$string['privacy:metadata:acceptances:note'] = 'Commenti dell\'utente che ha dato il consenso alla politica nelle veci di un altro utente.';
$string['privacy:metadata:acceptances:policyversionid'] = 'L\'ID della politica per la quale è stato dato il consenso.';
$string['privacy:metadata:acceptances:status'] = 'Stato del consenso: 0 se non dato, 1 se dato';
$string['privacy:metadata:acceptances:timecreated'] = 'Data ed ora del consenso da parte dell\'utente.';
$string['privacy:metadata:acceptances:timemodified'] = 'Data ed ora di modifica del consenso da parte dell\'utente.';
$string['privacy:metadata:acceptances:userid'] = 'L\'ID dell\'utente che ha dato il consenso alla politica.';
$string['privacy:metadata:acceptances:usermodified'] = 'L\'ID dell\'utente che ha dato il consenso alla politica nelle veci di un altro utente.';
$string['privacysettings'] = 'Impostazioni privacy';
$string['readpolicy'] = 'Per favore leggi la nostra {$a}';
$string['refertofullpolicytext'] = 'Se vuoi puoi rivedere il testo completo della politica cliccando sul link:  {$a}';
$string['revokedetails'] = 'Ritira il consenso';
$string['save'] = 'Salva';
$string['saveasdraft'] = 'Salva in bozza';
$string['selectpolicyandversion'] = 'Utilizza i filtri soprastanti per selezionare la politica e/o la versione';
$string['selectuser'] = 'Seleziona utente {$a}';
$string['selectusersforconsent'] = 'Seleziona l\'utente per il quale dare il consenso';
$string['settodraft'] = 'Crea "Bozza"';
$string['status'] = 'Stato politica';
$string['status0'] = 'Bozza';
$string['status1'] = 'Attiva';
$string['status2'] = 'Disattivata';
$string['statusinfo'] = 'Una politica attiva dovrà ricevere il consenso accettata sia dai nuovi utenti sia dagli utenti esistenti, questi ultimi alla prossima autenticazione.';
$string['steppolicies'] = 'Politica {$a->numpolicy} di {$a->totalpolicies}';
$string['useracceptancecount'] = '{$a->agreedcount} su {$a->userscount} ({$a->percent}%)';
$string['useracceptancecountna'] = 'N/D';
$string['useracceptances'] = 'Consensi utente';
$string['userpolicysettings'] = 'Politiche';
$string['usersaccepted'] = 'Consensi';
$string['viewarchived'] = 'Visualizza versioni precedenti';
$string['viewconsentpageforuser'] = 'Visualizzazione della pagina nelle veci di {$a}';
