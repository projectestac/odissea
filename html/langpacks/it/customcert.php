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
 * Strings for component 'customcert', language 'it', version '4.1'.
 *
 * @package     customcert
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity'] = 'Attività';
$string['addcertpage'] = 'Aggiungi una pagina';
$string['addelement'] = 'Aggiungi elemento';
$string['awardedto'] = 'Rilasciato a';
$string['cannotverifyallcertificates'] = 'Non sei autorizzato a verificare tutti i certificati del sito';
$string['certificate'] = 'Certificato';
$string['code'] = 'Codice';
$string['copy'] = 'Copia';
$string['coursetimereq'] = 'Numero minimo di minuti da trascorrere nel corso';
$string['coursetimereq_help'] = 'Il numero minimo di minuti da trascorrere nel corso prima che uno studente possa scaricare il certificato.';
$string['createtemplate'] = 'Crea modello';
$string['customcert:addinstance'] = 'Aggiungere certificati personalizzati';
$string['customcert:manage'] = 'Gestire certificati personalizzati';
$string['customcert:manageemailothers'] = 'Gestire impostazione di notifica altri';
$string['customcert:manageemailstudents'] = 'Gestire impostazione di notifica studenti';
$string['customcert:manageemailteachers'] = 'Gestire impostazione di notifica docenti';
$string['customcert:manageprotection'] = 'Gestire impostazioni di protezione';
$string['customcert:managerequiredtime'] = 'Gestire impostazione del tempo richiesto';
$string['customcert:manageverifyany'] = 'Gestire impostazione di verifica';
$string['customcert:receiveissue'] = 'Ricevere un certificato';
$string['customcert:verifyallcertificates'] = 'Verifica tutti i certificati del sito';
$string['customcert:verifycertificate'] = 'Verificare certificati';
$string['customcert:view'] = 'Visualizzare certificati';
$string['customcert:viewallcertificates'] = 'Visualizzare tutti i certificati';
$string['customcert:viewreport'] = 'Visualizza il report del corso';
$string['customcertsettings'] = 'Impostazioni Certificato personalizzato';
$string['deletecertpage'] = 'Elimina pagina';
$string['deleteconfirm'] = 'Conferma eliminazione';
$string['deleteelement'] = 'Elimina elemento';
$string['deleteelementconfirm'] = 'Sei sicuro di voler eliminare questo elemento?';
$string['deleteissueconfirm'] = 'Sei sicuro di eliminare il certificato?';
$string['deleteissuedcertificates'] = 'Elimina i certificati emessi';
$string['deletepageconfirm'] = 'Sei sicuro di voler eliminare questa pagina?';
$string['deletetemplateconfirm'] = 'Sei sicuro di voler eliminare questo modello?';
$string['deliveryoptiondownload'] = 'Invia al browser e forza lo scaricamento del file';
$string['deliveryoptioninline'] = 'Invia al browser per la visualizzazione';
$string['deliveryoptions'] = 'Opzioni di distribuzione';
$string['description'] = 'Descrizione';
$string['duplicate'] = 'Duplica';
$string['duplicateconfirm'] = 'Conferma duplicazione';
$string['duplicatetemplateconfirm'] = 'Sei sicuro di duplicare il modello?';
$string['editcustomcert'] = 'Modifica certificato';
$string['editelement'] = 'Modifica elemento';
$string['edittemplate'] = 'Modifica modello';
$string['elementname'] = 'Nome elemento';
$string['elementname_help'] = 'Il nome utilizzato per identificare l\'elemento in fase di modifica. Per esempio, puoi avere più immagini su una pagina e volerle distinguere tra di loro velocemente quando modifichi il certificato. Nota: questo nome non verrà visualizzato nel PDF';
$string['elementplugins'] = 'Plugin elemento';
$string['elements'] = 'Elementi';
$string['elements_help'] = 'L\'elenco degli elementi da visualizzare nel certificato.

Nota: gli elementi sono posizionati nell\'ordine in cui sono visualizzati. L\'ordine può essere modificato utilizzando le frecce presenti accanto ad ogni elemento.';
$string['elementwidth'] = 'Larghezza';
$string['elementwidth_help'] = 'Specifica la larghezza dell\'elemento - \'0\' significa nessuna larghezza personalizzata';
$string['emailnonstudentbody'] = 'In allegato il certificato \'{$a->certificatename}\' per \'{$a->userfullname}\' per il corso \'{$a->coursefullname}\'.';
$string['emailnonstudentbodyplaintext'] = 'In allegato il certificato \'{$a->certificatename}\' per \'{$a->userfullname}\' per il corso \'{$a->coursefullname}\'.';
$string['emailnonstudentcertificatelinktext'] = 'Visualizza il report del certificato';
$string['emailnonstudentgreeting'] = 'Ciao';
$string['emailnonstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailothers'] = 'Notifica altri';
$string['emailothers_help'] = 'Consente di inviare agli indirizzi inseriti (separati da una virgola) una copia del certificato, una volta che sarà stato rilasciato. <strong>Attenzione:</strong> Impostare questo campo prima di aver ultimato la predisposizione del certificato comporterà l\'invio a questi indirizzi di un certificato incompleto.';
$string['emailstudentbody'] = 'In allegato il certificato \'{$a->certificatename}\' per il corso \'{$a->coursefullname}\'.';
$string['emailstudentbodyplaintext'] = 'In allegato il certificato \'{$a->certificatename}\' per il corso \'{$a->coursefullname}\'.';
$string['emailstudentcertificatelinktext'] = 'Visualizza certificato';
$string['emailstudentgreeting'] = 'Gentile {$a}';
$string['emailstudents'] = 'Notifica gli studenti';
$string['emailstudents_help'] = 'Consente di inviare agli studenti una copia del certificato, una volta che sarà stato rilasciato. <strong>Attenzione:</strong> Impostare questo campo a "Sì" prima di aver ultimato la predisposizione del certificato comporterà l\'invio allo studente di un certificato incompleto.';
$string['emailstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailteachers'] = 'Notifica i docenti';
$string['emailteachers_help'] = 'Consente di inviare ai docenti una copia del certificato, una volta che sarà stato rilasciato.<strong>Attenzione:</strong> Impostare questo campo a "Sì" prima di aver ultimato la predisposizione del certificato comporterà l\'invio al docente di un certificato incompleto.';
$string['exampledatawarning'] = 'Alcuni di questi valori potrebbero essere solo un esempio per garantire che il posizionamento degli elementi sia possibile.';
$string['font'] = 'Font';
$string['font_help'] = 'Il carattere utilizzato per l\'elemento.';
$string['fontcolour'] = 'Colore';
$string['fontcolour_help'] = 'Il colore del carattere.';
$string['fontsize'] = 'Dimensione';
$string['fontsize_help'] = 'La dimensione del carattere in punti.';
$string['getcustomcert'] = 'Guarda il certificato';
$string['gradeoutcome'] = 'Obiettivo';
$string['height'] = 'Altezza';
$string['height_help'] = 'L\'altezza in mm del certificato PDF. Come riferimento un foglio A4 è alto 297mm, un foglio formato Lettera 279mm.';
$string['invalidcode'] = 'Il codice inserito non è valido';
$string['invalidcolour'] = 'Il colore scelto non è valido. Inserisci un valore colore HTML valido oppure un valore esadecimale a 3 o 6 cifre.';
$string['invalidheight'] = 'L\'altezza deve essere un numero maggiore di 0.';
$string['invalidmargin'] = 'Il margine deve essere un numero maggiore di 0.';
$string['invalidposition'] = 'Per favore inserisci un numero positivo per la posizione {$a}.';
$string['invalidwidth'] = 'La larghezza deve essere un numero maggiore di 0.';
$string['landscape'] = 'Orizzontale';
$string['leftmargin'] = 'Margine sinistro';
$string['leftmargin_help'] = 'Questo è il margine sinistro del certificato in mm.';
$string['listofissues'] = 'Destinatari: {$a}';
$string['load'] = 'Carica';
$string['loadtemplate'] = 'Carica modello';
$string['loadtemplatemsg'] = 'Sei sicuro di voler caricare questo modello? Ogni pagina ed elemento di questo certificato verranno eliminati';
$string['managetemplates'] = 'Gestione modelli';
$string['managetemplatesdesc'] = 'Questo link porta a una nuova pagina dove potrai gestire i modelli utilizzati dalle attività "Certificato personalizzato" presenti nei corsi.';
$string['modify'] = 'Modifica';
$string['modulename'] = 'Certificato personalizzato';
$string['modulename_help'] = 'Il modulo permette di creare certificati personalizzati in PDF';
$string['modulename_link'] = 'Custom_certificate_module';
$string['modulenameplural'] = 'Certificati personalizzati';
$string['mycertificates'] = 'I miei certificati';
$string['mycertificatesdescription'] = 'Questi sono i certificati che hai ricevuto via email o che hai scaricato manualmente.';
$string['name'] = 'Nome';
$string['nametoolong'] = 'Hai superato la lunghezza massima consentita per il nome';
$string['nocustomcerts'] = 'Non ci sono certificati per questo corso';
$string['noimage'] = 'Non sono presenti immagini';
$string['norecipients'] = 'Nessun destinatario';
$string['notemplates'] = 'Nessun modello disponibile';
$string['notissued'] = 'Non assegnato';
$string['notverified'] = 'Non verificato';
$string['options'] = 'Opzioni';
$string['page'] = 'Pagina {$a}';
$string['pluginadministration'] = 'Gestione certificato';
$string['pluginname'] = 'Certificato personalizzato';
$string['portrait'] = 'Verticale';
$string['posx'] = 'Posizione X';
$string['posx_help'] = 'Indicare la posizione in mm a partire dall\'angolo in alto a sinistra, utile per posizionare l\'elemento sull\'asse x.';
$string['posy'] = 'Posizione Y';
$string['posy_help'] = 'Indicare la posizione in mm a partire dall\'angolo in alto a sinistra, utile per posizionare l\'elemento sull\'asse y.';
$string['preventcopy'] = 'Previeni la copia';
$string['preventcopy_desc'] = 'Abilita la protezione dalla copia';
$string['preventmodify'] = 'Previeni la modifica';
$string['preventmodify_desc'] = 'Abilita la protezione dalla modifica';
$string['preventprint'] = 'Previeni la stampa';
$string['preventprint_desc'] = 'Abilita la protezione dalla stampa';
$string['print'] = 'Stampa';
$string['privacy:metadata:customcert_issues'] = 'Elenco dei certificati emessi';
$string['privacy:metadata:customcert_issues:code'] = 'Codice abbinato al certificato';
$string['privacy:metadata:customcert_issues:customcertid'] = 'ID del certificato';
$string['privacy:metadata:customcert_issues:emailed'] = 'Se il certificato è stato inviato via email';
$string['privacy:metadata:customcert_issues:timecreated'] = 'Quando il certificato è stato emesso';
$string['privacy:metadata:customcert_issues:userid'] = 'L\'ID dell\'utente al quale è stato rilasciato il certificato';
$string['rearrangeelements'] = 'Riposiziona gli elementi';
$string['rearrangeelementsheading'] = 'Trascina e rilascia gli elementi per modificare la rispettiva posizione nel certificato';
$string['receiveddate'] = 'Assegnato il';
$string['refpoint'] = 'Posizione del punto di riferimento';
$string['refpoint_help'] = 'Il punto di riferimento è la posizione a partire dalla quale vengono calcolate  le coordinate x e y dell\'elemento. È indicato dal segno \'+\' che compare al centro o sugli angoli dell\'elemento';
$string['replacetemplate'] = 'Sostituisci';
$string['requiredtimenotmet'] = 'Devi trascorrere almeno {$a->requiredtime} minuti nel corso prima di poter accedere al certificato.';
$string['rightmargin'] = 'Margine destro';
$string['rightmargin_help'] = 'Imargine destro del certificato in mm.';
$string['save'] = 'Salva';
$string['saveandclose'] = 'Salva e chiudi';
$string['saveandcontinue'] = 'Salva e continua';
$string['savechangespreview'] = 'Salva modifiche e visualizza anteprima';
$string['savetemplate'] = 'Salva il modello';
$string['search:activity'] = 'Certificato personalizzato - Informazioni sull\'attività';
$string['setprotection'] = 'Imposta protezione';
$string['setprotection_help'] = 'Scegli quale azione non vuoi che l\'utente esegua sul certificato.';
$string['showposxy'] = 'Visualizza la posizione X e Y';
$string['showposxy_desc'] = 'Visualizza la posizione X e Y quando si modifica un elemento, permettendo di posizionarlo in modo accurato.

Non è necessario se  utilizzi l\'interfaccia trascina e rilascia.';
$string['taskemailcertificate'] = 'Gestisce l\'invio dei certificati via email';
$string['templatename'] = 'Nome modello';
$string['templatenameexists'] = 'Il nome è già utilizazato, selezionane uno diverso.';
$string['topcenter'] = 'Centro';
$string['topleft'] = 'In alto a sinistra';
$string['topright'] = 'In alto a destra';
$string['type'] = 'Tipo';
$string['uploadimage'] = 'Carica immagine';
$string['uploadimagedesc'] = 'Il link porta a una nuova pagina dove potrai caricare le immagini. Le immagini caricate con questa modalità saranno disponibili a tutti gli utenti del sito che possono creare un certificato.';
$string['verified'] = 'Verificato';
$string['verify'] = 'Verifica';
$string['verifyallcertificates'] = 'Permette la verifica di tutti i certifcertificati';
$string['verifyallcertificates_desc'] = 'Con questa opzione abilitata, chiunque (compresi gli utenti non autenticati) potrà visitare il link per verificare qualsiasi certificato presente sul sito, invece di visualizzarli singolarmente tramite il loro specifico link di verifica.

Nota - Si applica solo ai certificati dove è stato impostato su "Sì" l\'opzione "Permetti a chiunque di verificare i certificati"';
$string['verifycertificate'] = 'Verifica il certificato';
$string['verifycertificateanyone'] = 'Permette a chiunque di verificare i certificati';
$string['verifycertificateanyone_help'] = 'L\'impostazione abilita la possibilità di verificare il certificato a chiunque sia in possesso del link di verifica (compresi gli utenti non autenticati)';
$string['verifycertificatedesc'] = 'Il link porta a una schermata dove sarà possibile verificare i certificati sul sito';
$string['width'] = 'Larghezza';
$string['width_help'] = 'L\'altezza in mm del certificato PDF. Come riferimento un foglio A4 è alto 297mm, un foglio formato Lettera 279mm.';
