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
 * Strings for component 'group', language 'it', version '4.1'.
 *
 * @package     group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Inserito da {$a}';
$string['addgroup'] = 'Aggiungi utente al gruppo';
$string['addgroupstogrouping'] = 'Aggiungi gruppo a raggruppamento';
$string['addgroupstogroupings'] = 'Aggiungi/rimuovi gruppi';
$string['adduserstogroup'] = 'Aggiungi/rimuovi utenti';
$string['allocateby'] = 'Assegna membri';
$string['anygrouping'] = '[Qualsiasi raggruppamento]';
$string['autocreategroups'] = 'Crea gruppi automaticamente';
$string['backtogroupings'] = 'Ritorna ai raggruppamenti';
$string['backtogroups'] = 'Ritorna ai gruppi';
$string['badnamingscheme'] = 'Deve contenere esattamente un carattere \'@\' o un carattere \'#\'';
$string['byfirstname'] = 'Alfabetico per nome, cognome';
$string['byidnumber'] = 'Alfabetico per codice identificativo';
$string['bylastname'] = 'Alfabetico per cognome, nome';
$string['createautomaticgrouping'] = 'Crea raggruppamenti automaticamente';
$string['creategroup'] = 'Crea gruppo';
$string['creategrouping'] = 'Crea raggruppamento';
$string['creategroupinselectedgrouping'] = 'Crea gruppo nel raggruppamento';
$string['createingrouping'] = 'Raggruppamento di gruppi creati automaticamente';
$string['createorphangroup'] = 'Crea gruppo orfano';
$string['csvdelimiter'] = 'Delimitatore CSV';
$string['databaseupgradegroups'] = 'La versione dei gruppi ora è {$a}';
$string['defaultgrouping'] = 'Raggruppamento di default';
$string['defaultgroupingname'] = 'Raggruppamento';
$string['defaultgroupname'] = 'Gruppo';
$string['deleteallgroupings'] = 'Elimina tutti i raggruppamenti';
$string['deleteallgroups'] = 'Elimina tutti i gruppi';
$string['deletegroupconfirm'] = 'Sei sicuro di eliminare il gruppo \'{$a}\'?';
$string['deletegrouping'] = 'Elimina raggruppamento';
$string['deletegroupingconfirm'] = 'Sei sicuro di eliminare il raggruppamento \'{$a}\'? (I gruppi facenti parte del  raggruppamento non saranno eliminati.)';
$string['deletegroupsconfirm'] = 'Sei sicuro di eliminare i gruppi elencati?';
$string['deleteselectedgroup'] = 'Elimina il gruppo selezionato';
$string['editgroupingsettings'] = 'Modifica impostazioni raggruppamento';
$string['editgroupsettings'] = 'Modifica impostazioni gruppo';
$string['editusersgroupsa'] = 'Modifica i gruppi di "{$a}"';
$string['enablemessaging'] = 'Messaggistica di gruppo';
$string['enablemessaging_help'] = 'I membri dei gruppi potranno inviare messaggi ad altri membri dello stesso gruppo';
$string['encoding'] = 'Codifica';
$string['enrolmentkey'] = 'Chiave di iscrizione';
$string['enrolmentkey_help'] = 'Una chiave d\'iscrizione consente l\'accesso al gruppo alle sole persone che ne sono in possesso. Specificando una chiave di iscrizione al gruppo, questa non solo consentirà l\'accesso al corso, ma aggiungerà la persona tra i membri del gruppo.

Nota: la chiave di iscrizione al gruppo deve essere abilitata nelle impostazioni del plugin Iscrizione spontanea e deve anche essere impostata una chiave d\'iscrizione del corso.';
$string['enrolmentkeyalreadyinuse'] = 'Questa chiave di iscrizione è già stata usata per un altro gruppo.';
$string['erroraddremoveuser'] = 'Errore durante l\'aggiunta/rimozione dell\'utente {$a} al gruppo';
$string['erroreditgroup'] = 'Errore nella creazione/modifica del gruppo {$a}';
$string['erroreditgrouping'] = 'Errore nella creazione/modifica del raggruppamento {$a}';
$string['errorinvalidgroup'] = 'Errore, il gruppo {$a} non è valido';
$string['errorremovenotpermitted'] = 'Non sei autorizzato ad eliminare il membro {$a} inserito nel gruppo automaticamente.';
$string['errorselectone'] = 'Per favore seleziona un solo gruppo prima di usare questa opzione';
$string['errorselectsome'] = 'Per favore seleziona uno o più gruppi prima di usare questa opzione';
$string['evenallocation'] = 'Nota: Per mantenere pari le assegnazioni ai gruppi, il numero effettivo di membri assegnati al gruppo è diverso dal numero specificato.';
$string['eventgroupcreated'] = 'Creazione gruppo';
$string['eventgroupdeleted'] = 'Eliminazione gruppo';
$string['eventgroupingcreated'] = 'Creazione raggruppamento';
$string['eventgroupingdeleted'] = 'Eliminazione raggruppamento';
$string['eventgroupinggroupassigned'] = 'Inserimento gruppo nel raggruppamento';
$string['eventgroupinggroupunassigned'] = 'Rimozione gruppo dal raggruppamento';
$string['eventgroupingupdated'] = 'Aggiornamento raggruppamento';
$string['eventgroupmemberadded'] = 'Inserimento membro nel gruppo';
$string['eventgroupmemberremoved'] = 'Rimozione membro dal gruppo';
$string['eventgroupupdated'] = 'Aggiornamento gruppo';
$string['existingmembers'] = 'Membri esistenti: <b>{$a}</b>';
$string['exportgroupsgroupings'] = 'Scarica gruppi e raggruppamenti come';
$string['filtergroups'] = 'Filtra gruppi per:';
$string['group'] = 'Gruppo';
$string['groupaddedsuccesfully'] = 'Gruppo {$a} aggiunto correttamente';
$string['groupaddedtogroupingsuccesfully'] = 'Il gruppo "{$a->groupname}"  è stato aggiunto correttamente al raggruppamento "{$a->groupingname}"';
$string['groupby'] = 'Crea automaticamente in base a';
$string['groupdescription'] = 'Decrizione gruppo';
$string['groupinfo'] = 'Informazioni su gruppo selezionato';
$string['groupinfomembers'] = 'Informazioni sui membri selezionati';
$string['groupinfopeople'] = 'Informazioni sulle persone selezionate';
$string['grouping'] = 'Raggruppamento';
$string['grouping_help'] = 'Un raggruppamento è un insieme di gruppi di un corso. Utilizzando i raggruppamenti, gli appartenenti a gruppi facenti parte dello stesso raggruppamento potranno condividere attività.';
$string['groupingaddedsuccesfully'] = 'Il raggruppamento "{$a}" è stato aggiunto correttamente';
$string['groupingdescription'] = 'Descrizione raggruppamento';
$string['groupingname'] = 'Nome raggruppamento';
$string['groupingnameexists'] = 'Il raggruppamento di nome \'{$a}\' già esiste in questo corso, scegli un nome diverso.';
$string['groupings'] = 'Raggruppamenti';
$string['groupingsection'] = 'Accesso raggruppamento';
$string['groupingsection_help'] = 'Un raggruppamento è un insieme di gruppi di un corso. Selezionando un raggruppamento, potranno accedere alla sezione solamente gli studenti appartenenti a quei gruppi facenti parte del raggruppamento.';
$string['groupingsonly'] = 'Solo raggruppamenti';
$string['groupmember'] = 'Membro del gruppo';
$string['groupmemberdesc'] = 'Ruolo standard per un membro di un gruppo';
$string['groupmembers'] = 'Membri del gruppo';
$string['groupmemberssee'] = 'Visualizza membri del gruppo';
$string['groupmembersselected'] = 'Membri del gruppo selezionato';
$string['groupmode'] = 'Modalità gruppo';
$string['groupmode_help'] = '* Senza gruppi
* Gruppi separati : ciascun partecipante è membro del gruppo al quale è stato assegnato e non ha facoltà di vedere i lavoro svolto dai membri degli altri gruppi
* Gruppi visibili: ciascun partecipante è membro del gruppo al quale è stato assegnato ma può vedere il lavoro svolto dagli altri gruppi.

La modalità gruppo definita nelle impostazioni del corso è la modalità di default per le attività del corso. La modalità gruppo può essere gestita per ciascuna attività del corso purché l\'attività supporti i gruppi e la modalità gruppo non sia stata forzata a livello di corso.';
$string['groupmodeforce'] = 'Forza modalità gruppo';
$string['groupmodeforce_help'] = 'Forzando la modalità gruppo, tale modalità sarà applicata a tutte le attività del corso. Eventuali modalità gruppo diverse non saranno prese in considerazione.';
$string['groupmy'] = 'Il mio gruppo';
$string['groupname'] = 'Nome gruppo';
$string['groupnameexists'] = 'Il nome del gruppo \'{$a}\' è già esistente in questo corso, per favore cambialo.';
$string['groupnotamember'] = 'Spiacente, non sei un membro di quel gruppo';
$string['groups'] = 'Gruppi';
$string['groupscount'] = 'Gruppi ({$a})';
$string['groupsettingsheader'] = 'Gruppi';
$string['groupsgroupings'] = 'Gruppi & raggruppamenti';
$string['groupsinselectedgrouping'] = 'Gruppi in:';
$string['groupsnone'] = 'Senza gruppi';
$string['groupsonly'] = 'Solo gruppi';
$string['groupspreview'] = 'Anteprima gruppi';
$string['groupsseparate'] = 'Gruppi separati';
$string['groupsvisible'] = 'Gruppi visibili';
$string['grouptemplate'] = 'Group @';
$string['hidepicture'] = 'Nascondi immagine';
$string['importgroups'] = 'Importa gruppi';
$string['importgroups_help'] = 'È possibile importare gruppi attraverso un file di testo. Il formato del file è descritto di seguito:

* ciascuna linea deve contenere un record
* ciascun record è una serie di campi divisi dal separatore selezionato
* il primo record deve contenere l\'elenco dei nomi dei campi che definiscono il formato del dati presenti nel resto del file
* il campo groupname è obbligatorio
* i campi groupidnumber, description, enrolmentkey, groupingname ed enablemessaging sono facoltativi.';
$string['importgroups_link'] = 'group/import';
$string['includeonlyactiveenrol'] = 'Includi solo iscrizioni attive';
$string['includeonlyactiveenrol_help'] = 'Consente di escludere dai gruppi gli utenti sospesi.';
$string['javascriptrequired'] = 'Questa pagina richiede Javascript abilitato';
$string['memberofgroup'] = 'Membro del gruppo: {$a}';
$string['members'] = 'Membri per gruppo';
$string['membersofselectedgroup'] = 'Membri di:';
$string['mygroups'] = 'I miei gruppi';
$string['namingscheme'] = 'Schema denominazione';
$string['namingscheme_help'] = 'Il simbolo at (@) può essere utilizzato per creare gruppi con nomi che contengono lettere. Per esempio, Gruppo @ genererà i nomi Gruppo A, Gruppo B, Gruppo C, eccetera.

Il simbolo hash (#) può essere utilizzato per creare gruppi con nomi che contengono numeri. Per esempio, Gruppo # genererà i nomi Gruppo 1, Gruppo 2, Gruppo 3, eccetera.';
$string['newgrouping'] = 'Nuovo raggrupamento';
$string['newpicture'] = 'Nuova immagine';
$string['newpicture_help'] = 'Seleziona una immagine in fromato JPG o PNG. L\'immagine sarà ritagliata in forma quadrata e poi ridimensionata a 100x100 pixel.';
$string['noallocation'] = 'Nessuna assegnazione';
$string['nogroup'] = 'Nessun gruppo';
$string['nogrouping'] = 'Senza raggruppamento';
$string['nogroups'] = 'In questo corso non sono ancora stati creati gruppi ';
$string['nogroupsassigned'] = 'Nessun gruppo assegnato';
$string['nopermissionforcreation'] = 'Non puoi creare il gruppo "{$a}" in quanto non hai i privilegi necessari';
$string['nosmallgroups'] = 'Evita gruppi piccoli';
$string['notingroup'] = 'Ignora utenti appartenenti a gruppi';
$string['notingrouping'] = 'Senza raggruppamento';
$string['notingrouplist'] = 'Senza gruppo';
$string['nousersinrole'] = 'Non ci sono utenti disponibili nel ruolo selezionato';
$string['number'] = 'Numero gruppo/membri';
$string['numgroups'] = 'Numero di gruppi';
$string['nummembers'] = 'Membri per gruppo';
$string['othergroups'] = 'Altri gruppi';
$string['overview'] = 'Riepilogo';
$string['potentialmembers'] = 'Membri potenziali: {$a}';
$string['potentialmembs'] = 'Membri possibili';
$string['printerfriendly'] = 'Versione stampabile';
$string['privacy:metadata:core_message'] = 'Conversazioni di gruppo.';
$string['privacy:metadata:groups'] = 'Record dei membri del gruppo.';
$string['privacy:metadata:groups:groupid'] = 'ID del gruppo.';
$string['privacy:metadata:groups:timeadded'] = 'Data e ora di inserimento dell\'utente nel gruppo.';
$string['privacy:metadata:groups:userid'] = 'ID dell\'utente associato al gruppo.';
$string['random'] = 'Casualmente';
$string['removefromgroup'] = 'Rimuovi utente dal gruppo {$a}';
$string['removefromgroupconfirm'] = 'Sei sicuro di rimuovere l\'utente "{$a->user}" dal gruppo "{$a->group}"?';
$string['removegroupfromselectedgrouping'] = 'Rimuovi gruppo dal raggruppamento';
$string['removegroupingsmembers'] = 'Rimuovi tutti i gruppi dai raggruppamenti';
$string['removegroupsmembers'] = 'Rimuovi tutti i membri del gruppo';
$string['removeselectedusers'] = 'Rimuovi utenti selezionati';
$string['selectfromgroup'] = 'Seleziona membri dal gruppo';
$string['selectfromgrouping'] = 'Seleziona membri dal raggruppamento';
$string['selectfromrole'] = 'Seleziona membri con ruolo';
$string['showgroupsingrouping'] = 'Visualizza gruppi nel raggruppamento';
$string['showmembersforgroup'] = 'Visualizza membri gruppo';
$string['toomanygroups'] = 'Utenti insufficienti per popolare questo numero di gruppi - ci sono solo {$a} utenti nel ruolo selezionato.';
$string['usercount'] = 'Numero utenti';
$string['usercounttotal'] = 'Numero utenti ({$a})';
$string['usergroupmembership'] = 'Appartenenza utente selezionato';
