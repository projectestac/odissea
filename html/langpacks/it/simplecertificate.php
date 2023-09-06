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
 * Strings for component 'simplecertificate', language 'it', version '4.1'.
 *
 * @package     simplecertificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allusers'] = 'Tutti gli utenti';
$string['awardedsubject'] = 'Notifica di rilascio di certificato: {$a->certificate} a {$a->student}';
$string['awardedto'] = 'Rilasciato a';
$string['bulkaction'] = 'Seleziona un\'operazione in massa';
$string['bulkbuttonlabel'] = 'Invia';
$string['bulkview'] = 'Operazione in massa';
$string['cantdeleteissue'] = 'Si è verificato un errore durante la rimozione dei certificati rilasciati';
$string['cantissue'] = 'Il certificato non può essere rilasciato perché l\'utente non ha soddisfatto le condizioni sulle attività';
$string['certificatecopy'] = 'COPIA';
$string['certificateimage'] = 'File immagine del certificato';
$string['certificateimage_help'] = 'L\'immagine che verrà utilizzata nel certificato';
$string['certificatename'] = 'Nome del certificato';
$string['certificatename_help'] = 'Nome del certificato';
$string['certificatenot'] = 'Non è stata trovata un\'istanza di Simple certificate';
$string['certificatetext'] = 'Testo del certificato';
$string['certificatetext_help'] = 'Il testo che verrà utilizzato nel certificato. E\'possibile utilizzare dei segnaposto che saranno sostituiti con variabili quali il nome del corso, il nome dello studente, la valutazione, eccetera.
Segnaposto utilizzabili:
<ul>
<li>{USERNAME} -> Nome completo utente</li>
<li>{COURSENAME} -> Titolo del corso (oppure un nome alternativo del corso)</li>
<li>{GRADE} -> Valutazione formattata</li>
<li>{DATE} -> Data formattata</li>
<li>{OUTCOME} -> Obiettivi</li>
<li>{TEACHERS} -> Elenco docenti</li>
<li>{IDNUMBER} -> Codice identificativo dell\'utente</li>
<li>{FIRSTNAME} -> Nome dell\'utente</li>
<li>{LASTNAME} -> Cognome utente</li>
<li>{EMAIL} -> email utente</li>
<li>{ICQ} -> Numero ICQ</li>
<li>{SKYPE} -> Skype ID</li>
<li>{YAHOO} -> Yahoo ID</li>
<li>{AIM} -> AIM ID</li>
<li>{MSN} -> MSN IDkname</li>
<li>{PHONE1} -> Telefono</li>
<li>{PHONE2} -> Cellulare</li>
<li>{INSTITUTION} -> Istituzione dell\'utente</li>
<li>{DEPARTMENT} -> Dipartimento dell\'utente</li>
<li>{ADDRESS} -> Indirizzo dell\'utente</li>
<li>{CITY} -> Città dell\'utente</li>
<li>{COUNTRY} -> Nazione dell\'utente</li>
<li>{URL} -> Pagina web dell\'utente</li>
<li>{CERTIFICATECODE} -> Codice univoco del certificato</li>
<li>{USERROLENAME} -> Ruolo dell\'utente nel corso</li>
<li>{TIMESTART} -> Data di inizio del corso</li>
<li>{USERIMAGE} -> Immagine del profilo utente</li>
<li>{USERRESULTS} -> Valutazione dell\'utente in altre attività del corso</li>
<li>{PROFILE_xxxx} -> Campi personalizzati dell\'utente</li>
</ul>
Per utilizzare i campi personalizzati del profilo è necessario utilizzare il prefisso " PROFILE_ " , ad esempio: è presente un campo personalizzato di nome abbreviato "birthday", in questo caso il segnaposto da utilizzare sul certificato sarà { PROFILE_BIRTHDAY } .
Il testo può utilizzare tag HTML di base , i font di base e le tabelle ma non si possono utilizzare definizioni di posizione.';
$string['certificatetextx'] = 'Posizione orizzontale del testo';
$string['certificatetexty'] = 'Posizione verticale del testo';
$string['certificateverification'] = 'Verifica del certificato';
$string['certlifetime'] = 'Mantieni certificati rilasciati per: (in Mesi)';
$string['certlifetime_help'] = 'Il periodo di tempo di mantenimento dei certificati rilasciati. I certificati più vecchi del periodo tempo impostato saranno eliminati automaticamente.';
$string['code'] = 'Codice';
$string['codex'] = 'Posizione orizzontale del QR Code';
$string['codey'] = 'Posizione verticale del QR Code';
$string['completedusers'] = 'Utenti che hanno soddisfatto le condizioni sulle attività';
$string['completiondate'] = 'Completamento del corso';
$string['coursegrade'] = 'Valutazione del corso';
$string['coursename'] = 'Titolo alternativo del corso';
$string['coursename_help'] = 'Titolo alternativo del corso';
$string['coursenotfound'] = 'Il corso non è stato trovato';
$string['coursetimereq'] = 'Minuti di permanenza obbligatoria nel corso';
$string['coursetimereq_help'] = 'Il tempo minimo espresso in minuti che lo studente dovrà obbligatoriamente trascorrere nel corso.';
$string['datefmt'] = 'Formato della data';
$string['datefmt_help'] = 'Utilizzare un formato PHP valido per la data (<a href="http://www.php.net/manual/en/function.strftime.php"> Formati data</a>). Lasciare il campo vuoto per utilizzare i formati di default definiti dalla lingua scelta dall\'utente.';
$string['defaultcertificatetextx'] = 'Posizione orizzontale di default del testo';
$string['defaultcertificatetexty'] = 'Posizione verticale di default del testo';
$string['defaultcodex'] = 'Posizione orizzontale di default del QR Code';
$string['defaultcodey'] = 'Posizione verticale di default del QR Code';
$string['defaultheight'] = 'Altezza standard';
$string['defaultperpage'] = 'Per pagina';
$string['defaultperpage_help'] = 'Numero di certificati da visualizzare per pagina (Max . 200)';
$string['defaultwidth'] = 'Larghezza di default';
$string['deletissuedcertificates'] = 'Elimina i certificati rilasciati';
$string['delivery'] = 'Consegna';
$string['delivery_help'] = 'E\' possibile selezionare la modalità di consegna del certificato.
<ul>
<li >Apri nel browser: il certificato sarà aperto in una nuova finestra del browser.</li>
<li >Forza download: sarà aperta una finestra di download all\'interno del browser.</li>
<li >Certificato via e-mail: il certificato sarà inviato allo studente come allegato e-mail.</li>
<li >Dopo aver ricevuto un certificato, se l\'utente cliccherà sul link del certificato nella pagina home del corso verrà visualizzata la data di emissione del certificato e sarà possibile visualizzare nuovamente il certificato ricevuto.</li>
</ul>';
$string['designoptions'] = 'Opzioni grafiche';
$string['download'] = 'Forza download';
$string['emailcertificate'] = 'Email';
$string['emailfrom'] = 'Mittente dell\'email';
$string['emailfrom_help'] = 'Nome alternativo del mittente dell\'email';
$string['emailothers'] = 'Altri destinatari dell\'email';
$string['emailothers_help'] = 'Inserisci gli indirizzi email, separati da virgola, di coloro che dovranno essere avvisati con una email ogni volta che verrà rilasciato un certificato agli studenti.';
$string['emailsent'] = 'Le mail sono state inviate';
$string['emailstudentsubject'] = 'Il tuo certificato del corso {$a->course}';
$string['emailstudenttext'] = 'Gentile {$a->username},

		In allegato il tuo certificato del corso {$a->course}.


QUESTO E \' UN MESSAGGIO AUTOMATICO - SI PREGA DI NON RISPONDERE';
$string['emailteachermail'] = '{$a->student} ha ricevuto il certificato \'{$a->certificate}\'
del corso {$a->course}.

Per verificare:

    {$a->url}';
$string['emailteachermailhtml'] = '{$a->student} ha ricevuto il certificato \'<i>{$a->certificate}</i>\'
del corso {$a->course}.

Per verificare:

    <a href="{$a->url}">Report del certificato</a>.';
$string['emailteachers'] = 'Email ai docenti';
$string['emailteachers_help'] = 'Consente di avvisare i docenti con una email ogni volta che sarà rilasciato un certificato agli studenti.';
$string['enablesecondpage'] = 'Abilita fronte-retro del certificato';
$string['enablesecondpage_help'] = 'Abilita fronte-retro del certificato. Se l\'impostazione è disabilitata verrà stampato sul retro del certificato solo il QR Code (se è abilitato il QR code)';
$string['eventcertificate_verified'] = 'Verificato certificato';
$string['filenotfound'] = 'Il file non è stato trovato';
$string['getcertificate'] = 'Ottieni il certificato';
$string['grade'] = 'Valutazione';
$string['gradefmt'] = 'Formato della valutazione';
$string['gradefmt_help'] = 'Per la stampa della valutazione sul certificato sono disponibili tre formati:
<ul>
<li>Valutazione percentuale: stampa il voto in percentuale.</li>
<li>Punteggio: stampa il voto in punti.</li>
<li >Valutazione letterale: stampa il voto percentuale in lettera.</li>
</ul>';
$string['gradeletter'] = 'Valutazione letterale';
$string['gradepercent'] = 'Valutazione percentuale';
$string['gradepoints'] = 'Punteggio';
$string['height'] = 'Altezza del certificato';
$string['hours'] = 'ore';
$string['intro'] = 'Introduzione';
$string['invalidcode'] = 'Il codice del certificato non è valido';
$string['issued'] = 'Rilasciato';
$string['issuedcertificatenotfound'] = 'Il certificato rilasciato non è stato trovato';
$string['issueddate'] = 'Data di rilascio';
$string['issueddownload'] = 'Il certificato [id: {$a}] è stato scaricato';
$string['issuedview'] = 'Certificati rilasciati';
$string['issueoptions'] = 'Opzioni di rilascio';
$string['keywords'] = 'certificato, corso, pdf, moodle';
$string['modulename'] = 'Simple Certificate';
$string['modulename_help'] = 'Il modulo di attività "Simple Certificate" consente al docente di creare un certificato personalizzato che può essere rilasciato ai partecipanti che avranno soddisfatto i requisiti impostati dal docente.';
$string['modulenameplural'] = 'Simple Certificate';
$string['multipdf'] = 'Scarica il certificato in formato zip';
$string['neverdeleteoption'] = 'Non eliminare mai';
$string['nocertificatesissued'] = 'Non sono stati rilasciati certificati';
$string['nodelivering'] = 'Nessun invio, l\'utente riceverà questo certificato in altro modo';
$string['notreceived'] = 'Nessun certificato rilasciato';
$string['onepdf'] = 'Scarica il certificato in formato PDF';
$string['openbrowser'] = 'Apri in una nuova finestra';
$string['opendownload'] = 'Fare clic sul pulsante qui sotto per salvare il certificato sul computer.';
$string['openemail'] = 'Fai clic sul pulsante qui sotto per ricevere il certificato come allegato email.';
$string['openwindow'] = 'Fare clic sul pulsante qui sotto per aprire il certificato in una nuova finestra del browser.';
$string['pluginadministration'] = 'Amministrazione certificato';
$string['pluginname'] = 'Simple Certificate';
$string['printdate'] = 'Stampa della data';
$string['printdate_help'] = 'La data che può essere stampatata sul certificato.  Se la data di completamento del corso è stata selezionata ma lo studente non ha completato il corso, verrà stampata la data di ricezione. È inoltre possibile scegliere di stampare la data in base a quando un\'attività sarà stata completata. Se un certificato viene rilasciato prima che l\'attività sia stata completata, verrà stampata la data di ricezione.';
$string['printgrade'] = 'Stampa della valutazione';
$string['printgrade_help'] = 'E\' possibile scegliere qualsiasi valutazione presente nel registro del valutatore e stamparlo sul certificato dell\'utente. I formati della valutazione sono elencati nell\'ordine in cui compaiono nel registro. E\' possibile scegliere il formato della valutazione qui sotto.';
$string['printoutcome'] = 'Stampa degli obiettivi';
$string['printoutcome_help'] = 'È possibile scegliere un qualsiasi obiettivo del corso e stamparlo  e stamparlo sul certificato dell\'utente. Ad esempio: "Esito: Buono".';
$string['printqrcode'] = 'Stampa del QR Code';
$string['printqrcode_help'] = 'Consente di stampare il QR Code del certificato';
$string['qrcodefirstpage'] = 'Stampa il QR Code in prima pagina';
$string['qrcodefirstpage_help'] = 'Stampa il QR Code in prima pagina';
$string['qrcodeposition'] = 'Posizione del QR Code';
$string['qrcodeposition_help'] = 'Le coordinate XY (in millimetri) della posizione del QR Code';
$string['receiveddate'] = 'Data di ricezione';
$string['report'] = 'Report';
$string['requiredtimenotmet'] = 'È necessario trascorrere almeno {$a->requiredtime} minuti in questo corso per ottenere il certificato';
$string['secondimage'] = 'File Immagine di sfondo per il retro';
$string['secondimage_help'] = 'L\'immagine che verrà utilizzata nella parte posteriore del certificato';
$string['secondpageoptions'] = 'Pagina retro del certificato';
$string['secondpagetext'] = 'Testo sul retro del certificato';
$string['secondpagex'] = 'Posizione orizzontale del testo sul retro';
$string['secondpagey'] = 'Posizione verticale del testo sul retro';
$string['secondtextposition'] = 'Posizione del testo sul retro';
$string['secondtextposition_help'] = 'Le coordinate XY (in millimetri) della posizione del testo sul retro del certificato';
$string['sendtoemail'] = 'Invia all\'email dell\'utente';
$string['showusers'] = 'Visualizza';
$string['simplecertificate:addinstance'] = 'Aggiungere attività Simple Certificate';
$string['simplecertificate:manage'] = 'Gestire attività Simple Certificate';
$string['simplecertificate:view'] = 'Visualizzare attività Simple Certificate';
$string['size'] = 'Dimensione del certificato';
$string['size_help'] = 'La larghezza e l\'altezza (in millimetri) del certificato. La dimensione di default è A4 orizzontale';
$string['standardview'] = 'Rilascia un certificato di prova';
$string['summaryofattempts'] = 'Sommario dei certificati ricevuti';
$string['textposition'] = 'Posizione del testo';
$string['textposition_help'] = 'Le coordinate XY (in millimetri) della posizione del testo sul certificato';
$string['timestartdatefmt'] = 'Formato della data di iscrizione';
$string['timestartdatefmt_help'] = 'Utilizzare un formato PHP valido per la data (<a href="http://www.php.net/manual/en/function.strftime.php"> Formati data</a>). Lasciare il campo vuoto per utilizzare i formati di default definiti dalla lingua scelta dall\'utente.';
$string['upgradeerror'] = 'Si è verificato un errore durante l\'aggiornamento di $a';
$string['usercontextnotfound'] = 'Non è stato trovato il contesto dell\'utente';
$string['userdateformat'] = 'Formato data dalla lingua dell\'utente';
$string['usernotfound'] = 'L\'utente non è stato trovato';
$string['variablesoptions'] = 'Altre opzioni';
$string['verifycertificate'] = 'Verifica del certificato';
$string['viewcertificateviews'] = 'Visualizza {$a} certificati rilasciati';
$string['width'] = 'Larghezza del certificato';
