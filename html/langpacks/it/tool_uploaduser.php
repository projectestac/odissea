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
 * Strings for component 'tool_uploaduser', language 'it', version '4.1'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Consenti eliminazione utenti';
$string['allowrenames'] = 'Consenti la modifica degli username';
$string['allowsuspends'] = 'Consente la sospensione e riattivazione di account.';
$string['assignedsysrole'] = 'Ruolo globale {$a} assegnato';
$string['clidefault'] = 'Default:';
$string['clierrorargument'] = 'Il valore dell\'argomento --{$a->name} non è valido. Valori validi: {$a->values}';
$string['clifile'] = 'Percorso del file CSV che contiene i dati utenti. Obbligatorio.';
$string['clifilenotreadable'] = 'Il file {$a} non esiste o non è leggibile';
$string['clihelp'] = 'Stampa questo aiuto.';
$string['climissingargument'] = 'L\'argomento  --{$a} è obbligatorio';
$string['clititle'] = 'Strumento per il caricamento utenti da linea di comando.';
$string['clivalidationerror'] = 'Errore di validazione:';
$string['csvdelimiter'] = 'Separatore CSV';
$string['defaultvalues'] = 'Valori di default';
$string['deleteerrors'] = 'Elimina errori';
$string['duplicateemail'] = 'Sono stati rilevatiti più utenti con la stessa email {$a}';
$string['encoding'] = 'Codifica';
$string['errormnetadd'] = 'Non è possibile aggiungere utenti remoti';
$string['errorprefix'] = 'Errore:';
$string['errors'] = 'Errori';
$string['examplecsv'] = 'File di testo di esempio';
$string['examplecsv_help'] = 'Per utilizzare il file di esempio, scaricarlo ed aprilo con un editor di testo oppure un foglio elettronico. Lasciare la prima riga inalterata e modificare le successive righe inserendo i dati degli i utenti, Aggiungere righe secondo necessità, dopodiché salvare il file come CSV e caricarlo.

Il file di esempio può anche essere utilizzato per prova al fine di visualizzare l\'anteprima, annullando poi l\'azione prima della creazione account vera e propria.';
$string['infoprefix'] = 'Informazioni:';
$string['invalidtheme'] = 'Il tema "{$a}" non è instalalto e sarà ignorato.';
$string['invalidupdatetype'] = 'Non è possibile utilizzare questa opzione con il \'Tipo di caricamento\' selezionato.';
$string['invaliduserdata'] = 'Sono stati individuati dati non validi per l\'utente {$a} e sono stati puliti automaticamente.';
$string['linex'] = 'Linea {$a}';
$string['nochanges'] = 'Nessuna modifica';
$string['notheme'] = 'L\'utente non ha nessun tema impostato.';
$string['pluginname'] = 'Caricamento utenti';
$string['privacy:metadata'] = 'Il plugin "Caricamento utenti" non memorizza dati personali.';
$string['renameerrors'] = 'Errori nel cambiamento del nome';
$string['requiredtemplate'] = 'Obbligatorio. Si può usare il modello di sintassi (%l = lastname, %f = firstname, %u = username).';
$string['rowpreviewnum'] = 'Righe di anteprima';
$string['unassignedsysrole'] = 'Eliminata assegnazione ruolo globale {$a}';
$string['uploadpicture_baduserfield'] = 'L\'attributo utente specificato non è valido. Provare ancora.';
$string['uploadpicture_cannotmovezip'] = 'Un file zip non può essere spostato in una cartella temporanea.';
$string['uploadpicture_cannotprocessdir'] = 'Non è stato possibile elaborare il file zip decompresso.';
$string['uploadpicture_cannotsave'] = 'Non è stato possibile salvare l\'immagine dell\'utente {$a}. Controllate le caratteristiche dell\'immagine.';
$string['uploadpicture_cannotunzip'] = 'Non è possibile decomprimere il file zip contenente le immagini.';
$string['uploadpicture_invalidfilename'] = 'Il file immagine {$a} ha caratteri non validi nel nome. Saltato.';
$string['uploadpicture_overwrite'] = 'Sovrascrivere le immagini utente già esistenti?';
$string['uploadpicture_userfield'] = 'Identificativo utente da utilizzare per far corrispondere le immagini';
$string['uploadpicture_usernotfound'] = 'Utente con un valore di \'{$a->uservalue}\' per \'{$a->userfield}\' non esiste. Saltato.';
$string['uploadpicture_userskipped'] = 'Saltato utente {$a} (ha già un\'immagine).';
$string['uploadpicture_userupdated'] = 'Immagine per l\'utente {$a} caricata.';
$string['uploadpictures'] = 'Importazione immagini utenti';
$string['uploadpictures_help'] = '<p>Le foto degli tenti possono essere caricate come file zip di immagini. I file immagini devono essere chiamati <i>attributo-utente-scelto.estensione</i>. Per esempio, se l\'attributo utente scelto per la corrispondenza delle foto è lo username e lo username è user1234, allora il file si chiamerà user1234.jpg.</p>

<p>I tipi immagini supportati sono gif, jpg, e png.</p>

<p>Nei nomi dei file immagine è indifferente l\'uso di maiuscole o minuscole.</p>';
$string['uploaduser:uploaduserpictures'] = 'Importare immagini utenti';
$string['uploadusers'] = 'Importazione utenti';
$string['uploadusers_help'] = 'È possibile caricare utenti (ed iscriverli ai corsi) tramite file di testo. Il formato del file deve avere le seguenti caratteristiche:

* ogni riga del file deve contenere un record
* il record è una serie di dati dati divisi dal separatore selezionato
* il primo record deve contenere l\'elenco dei nomi dei campi che definiscono il formato del dati presenti nel resto del file
* i campi obbligatori sono username, password, firstname,  lastname, email';
$string['uploadusers_link'] = 'admin/tool/uploaduser/index';
$string['uploaduserspreview'] = 'Anteprima importazione utenti';
$string['uploadusersresult'] = 'Risultati importazione utenti';
$string['useraccountupdated'] = 'Utente aggiornato';
$string['useraccountuptodate'] = 'Utente aggiornato';
$string['userdeleted'] = 'Utente Eliminato';
$string['userrenamed'] = 'Utente rinominato';
$string['userscreated'] = 'Utenti creati';
$string['usersdeleted'] = 'Utenti eliminati';
$string['usersrenamed'] = 'Utenti rinominati';
$string['usersskipped'] = 'Utenti saltati';
$string['usersupdated'] = 'Utenti aggiornati';
$string['usersweakpassword'] = 'Utenti con password debole';
$string['userthemesnotallowed'] = 'I temi dell\'utente non sono abilitati e verranno ignorati se sono presenti nel file di caricamento utenti .';
$string['uubulk'] = 'Seleziona per azioni in massa';
$string['uubulkall'] = 'Tutti gli utenti';
$string['uubulknew'] = 'Nuovi utenti';
$string['uubulkupdated'] = 'Utenti modificati';
$string['uucsvline'] = 'Riga CSV';
$string['uulegacy1role'] = '(Ruolo studente originale) typeN=1';
$string['uulegacy2role'] = '(Ruolo docente originale) typeN=2';
$string['uulegacy3role'] = '(Ruolo docente non-editor originale) typeN=3';
$string['uunoemailduplicates'] = 'Evita le email duplicate';
$string['uuoptype'] = 'Modalità importazione';
$string['uuoptype_addinc'] = 'Crea tutti gli utenti, aggiungendo un numero agli username ove necessario';
$string['uuoptype_addnew'] = 'Crea solamente i nuovi utenti, ignora gli utenti già esistenti';
$string['uuoptype_addupdate'] = 'Crea i nuovi utenti ed aggiorna gli utenti già esistenti';
$string['uuoptype_update'] = 'Aggiorna solamente gli utenti già esistenti';
$string['uupasswordcron'] = 'Generato tramite cron';
$string['uupasswordnew'] = 'Password per i nuovi utenti';
$string['uupasswordold'] = 'Password per gli utenti già esistenti';
$string['uustandardusernames'] = 'Standardizza gli username';
$string['uuupdateall'] = 'Utilizza i valori contenuti nel file ed i valori di default';
$string['uuupdatefromfile'] = 'Utilizza i valori contenuti nel file';
$string['uuupdatemissing'] = 'Utilizza i valori contenuti nel file ed i valori di default se i campi sono vuoti';
$string['uuupdatetype'] = 'Impostazione campi del profilo utente';
$string['uuusernametemplate'] = 'Modello per gli username';
$string['warningprefix'] = 'Attenzione:';
